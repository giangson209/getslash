<?php

namespace App\Http\Controllers;

use App\Mail\SendTestEmail;
use App\Models\Categories;
use App\Models\Customers;
use App\Models\Menu;
use App\Models\Options;
use App\Models\Pages;
use App\Models\Posts;
use App\Models\Posttype;
use App\Trails\MailTrait;
use DB;
use Illuminate\Http\Request;
use Mail;
use OpenGraph;
use SEO;
use SEOMeta;
use App\Models\Contact;
use App\Models\Styles;
use App\Models\Recruitments;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;

class IndexController extends Controller
{

    use MailTrait;

    public $config_info;

    public function __construct()
    {
        $site_info = Options::where('type', 'general')->first();
        $site_info = json_decode($site_info->content);
        $this->config_info = $site_info;
        OpenGraph::setUrl(\URL::current());
        OpenGraph::addProperty('locale', 'vi');
        OpenGraph::addProperty('type', 'article');
        OpenGraph::addProperty('author', 'GCO-GROUP');
        SEOMeta::addKeyword($site_info->site_keyword);
    }

    public function createSeo($dataSeo = null)
    {
        $site_info = $this->config_info;
        if (!empty($dataSeo->meta_title)) {
            SEO::setTitle($dataSeo->meta_title);
        } else {
            SEO::setTitle($site_info->site_title);
        }
        if (!empty($dataSeo->meta_description)) {
            SEOMeta::setDescription($dataSeo->meta_description);
            OpenGraph::setDescription($dataSeo->meta_description);
        } else {
            SEOMeta::setDescription($site_info->site_description);
            OpenGraph::setDescription($site_info->site_description);
        }
        if (!empty($dataSeo->image)) {
            OpenGraph::addImage($dataSeo->image, ['height' => 400, 'width' => 400]);
        } else {
            OpenGraph::addImage($site_info->logo_share, ['height' => 400, 'width' => 400]);
        }
        if (!empty($dataSeo->meta_keyword)) {
            SEOMeta::addKeyword($dataSeo->meta_keyword);
        }
    }

    public function createSeoPost($data)
    {
        if (!empty($data->meta_title)) {
            SEO::setTitle($data->meta_title);
        } else {
            SEO::setTitle($data->{ 'name_'.app()->getLocale() });
        }
        if (!empty($data->meta_description)) {
            SEOMeta::setDescription($data->meta_description);
            OpenGraph::setDescription($data->meta_description);
        } else {
            SEOMeta::setDescription($this->config_info->site_description);
            OpenGraph::setDescription($this->config_info->site_description);
        }
        if (!empty($data->image)) {
            OpenGraph::addImage($data->image, ['height' => 400, 'width' => 400]);
        } else {
            OpenGraph::addImage($this->config_info->logo_share, ['height' => 400, 'width' => 400]);
        }
        if (!empty($data->meta_keyword)) {
            SEOMeta::addKeyword($data->meta_keyword);
        }
    }



    public function getSingleRecruitments($slug)
    {
        $data = Recruitments::whereSlug($slug)->whereStatus(1)->firstOrFail();
        $this->createSeoPost($data);
        $recruitmentOther = Recruitments::where('id', '!=', $data->id)->inRandomOrder()->take(3)->get();
        return view('frontend.pages.recruitments.single', compact('data', 'recruitmentOther'));
    }

    
    public function getTagsNews($slug)
    {
        $data = Posts::withAnyTag($slug)->active()->orderBy('created_at', 'DESC')->paginate(12);
        SEO::setTitle('Tags: '.$slug);
        return view('frontend.pages.blog.index', compact('data'));
    }
    

    




    public function getPageRecruitments()
    {
        $dataPage = Pages::where('type', 'recruitments')->firstOrFail();
        $this->createSeo($dataPage);
        $contentPage = $dataPage->content;
        $data = Recruitments::where('status', 1)->orderBy('created_at', 'desc')->paginate(8);
        return view('frontend.pages.recruitments.index', compact('contentPage', 'data'));
    }

    public function getForShop()
    {
        $dataPage = Pages::where('type', 'forshop')->first();
        $contentPage = $dataPage->content;
        $this->createSeo($dataPage);
        $posttype = Posttype::where('status',1)->orderBy('created_at', 'DESC')->where('type','!=','video')->get()->groupBy('type');
        $press = Styles::whereStatus(1)->orderBy('created_at', 'DESC')->paginate(6);
        
        return view('frontend.pages.home.forshop', compact('contentPage', 'dataPage', 'posttype', 'press'));
    }

    public function getHome()
    {
        $this->createSeo();
        $dataPage = Pages::where('type', 'home')->first();
        $contentPage = $dataPage->content;
        $posttype = Posttype::where('status',1)->orderBy('created_at', 'DESC')->where('type','!=','video')->get()->groupBy('type');

        return view('frontend.pages.home.index', compact('contentPage', 'dataPage', 'posttype'));
    }

    public function getShop()
    {
        $dataPage = Pages::where('type', 'shop')->first();
        $this->createSeo($dataPage);
        $contentPage = $dataPage->content;
        $posttype = Posttype::where('status',1)->orderBy('created_at', 'DESC')->where('type','!=','video')->get()->groupBy('type');
        
        return view('frontend.pages.shop.index', compact('contentPage', 'dataPage', 'posttype'));
    }

    public function getSinglePress($slug)
    {
        $data = Styles::whereSlug($slug)->whereStatus(1)->firstOrFail();
        $this->createSeoPost($data);
        $lq = Styles::whereStatus(1)->orderBy('created_at', 'DESC')->where('id','!=',$data->id)->paginate(6);

        return view('frontend.pages.press.single', compact('data','lq'));
    }

    public function getPress()
    {
        $dataPage = Pages::where('type', 'press')->first();
        $data = Styles::whereStatus(1)->orderBy('created_at', 'DESC')->paginate(12);
        $noibat = Styles::whereStatus(1)->orderBy('created_at', 'DESC')->where('hot',1)->paginate(6);

        $this->createSeo($dataPage);
        $contentPage = $dataPage->content;
        $slug = '';
        return view('frontend.pages.press.index', compact('contentPage', 'data', 'noibat', 'slug'));
    }
    
    public function getFaqmerchant(Request $request)
    {
        $dataPage = Pages::where('type', 'faq-merchant')->first();
        $this->createSeo($dataPage);
        $contentPage = $dataPage->content;
        $posts = Posts::where('type','faq-merchant')->get()
        ->groupBy(function($post){
            if(count($post->category) > 0) {
                return $post->category[0]->name_vi;
            }
        })
        ->all();
        $search = array();
        if ($request->has('search')) {
            $search =  Posts::where('type','faq-merchant')->where('name_vi','like', '%' . $request->search . '%')->get();
        }
        $category = Categories::where('type','faq-merchant')->get();
        return view('frontend.pages.faq.index', compact('contentPage','dataPage', 'category', 'posts', 'search'));
    }
    
    public function getFaq(Request $request)
    {
        $dataPage = Pages::where('type', 'faq')->first();
        $this->createSeo($dataPage);
        $contentPage = $dataPage->content;
        $posts = Posts::where('type','faq')->get()
        ->groupBy(function($post){
            if(count($post->category) > 0) {
                return $post->category[0]->name_vi;
            }
        })
        ->all();
        $search = array();
        if ($request->has('search')) {
            $search =  Posts::where('type','faq')->where('name_vi','like', '%' . $request->search . '%')->get();
        }
        $category = Categories::where('type','faq')->get();
        return view('frontend.pages.faq.index', compact('contentPage','dataPage', 'category', 'posts', 'search'));
    }

    public function getToturial()
    {
        $dataPage = Pages::where('type', 'toturial')->first();
        $this->createSeo($dataPage);
        $contentPage = $dataPage->content;
        $video = Posttype::where('status',1)->orderBy('created_at', 'DESC')->where('type','video')->paginate(9);
        return view('frontend.pages.toturial.index', compact('contentPage', 'dataPage', 'video'));
    }

    public function getAbout()
    {
        $dataPage = Pages::where('type', 'about')->first();
        $this->createSeo($dataPage);
        $contentPage = $dataPage->content;
        return view('frontend.pages.about.index', compact('contentPage','dataPage'));
    }

    public function getContact()
    {
        $dataPage = Pages::where('type', 'contact')->first();
        $this->createSeo($dataPage);
        $contentPage = $dataPage->content;
        return view('frontend.pages.contact.index', compact('contentPage','dataPage'));
    }

    public function getArchiveNews()
    {
        $dataPage = Pages::where('type', 'news')->first();
        $data = Posts::active()->orderBy('created_at', 'DESC')->where('type','blog')->paginate(12);
        $noibat = Posts::active()->orderBy('created_at', 'DESC')->where('type','blog')->where('hot',1)->paginate(6);
        $category = Categories::orderBy('created_at', 'DESC')->where('type','blog')->get();

        $this->createSeo($dataPage);
        $contentPage = $dataPage->content;
        $slug = '';
        return view('frontend.pages.blog.index', compact('contentPage', 'data', 'noibat', 'category', 'slug'));
    }

    public function getCategoriesNews($slug)
    {
        $dataPage = Pages::where('type', 'news')->first();
        $category = Categories::orderBy('created_at', 'DESC')->where('type','blog')->get();
        $data = Posts::whereHas('category', function ($query) use ($slug) {
            $query->where('slug', $slug);
        })->active()->paginate(12);
        $noibat = Posts::whereHas('category', function ($query) use ($slug) {
            $query->where('slug', $slug);
        })->active()->where('hot',1)->paginate(12);

        $this->createSeo($dataPage);
        $contentPage = $dataPage->content;
        return view('frontend.pages.blog.index', compact('contentPage', 'data', 'noibat', 'category', 'slug'));
    }

    public function getSingleNews($slug)
    {
        $data = Posts::active()->where('slug', $slug)->where('type','blog')->firstOrFail();
        $this->createSeoPost($data);
        $lq = Posts::active()->orderBy('created_at', 'DESC')->where('type','blog')->where('id','!=',$data->id)->paginate(6);

        return view('frontend.pages.blog.single', compact('data', 'lq'));
    }

    public function postContact(Request $request)
    {
        $this->initMailConfig();
        $request->validate([
            "file" => "mimetypes:application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document|max:10000"
        ],[
            "file.mimetypes" => 'File của bạn không đúng định dạng '
        ]);
        $file = $request->file('file');
        $main_image = null;
        if (isset($file)) {
            $curentdate = Carbon::now()->toDateString();
            $imagename =  $curentdate . '-' . uniqid() . '.' . $file->getClientOriginalExtension();

            $path = 'slash/slash/uploads/files/';

            $file->move($path, $imagename);

            $main_image = $path.$imagename;
        }
        $cus          = new Customers;
        $cus->name    = $request->name;
        $cus->email   = $request->email;
        $cus->phone   = $request->phone;
        $cus->address = $request->address;
        $cus->save();
        $contact              = new Contact;
        $contact->title       = 'Khách hàng liên hệ';
        $contact->you_are     = $request->you_are;
        $contact->help        = $request->help;
        $contact->file        = $main_image;
        $contact->postion     = $request->postion;
        $contact->type        = $request->type;
        $contact->customer_id = $cus->id;
        $contact->content     = $request->input('content');
        $contact->status      = 0;
        $contact->save();
        $site_info = $this->config_info;
        $title = 'Khách hàng liên hệ.';
        if($request->type == 'Blog'){
            $title = 'Khách hàng để lại thông tin trang bài viết';
        }
        if($request->type == 'for shopper'){
            $title = 'Khách hàng để lại thông tin trang Merchants';
        }
        if($request->type == 'Career'){
            $title = 'Có người ứng tuyển';
        }
        $dataEmail = [
            'name'    => $request->name,
            'phone'   => $request->phone,
            'postion' => $request->postion,
            'you_are' => $request->you_are,
            'help'    => $request->help,
            'file'   => $main_image,
            'email'   => $request->email,
            'content' => $request->content,
            'title'   => $title,
            'email_from' => $site_info->email_admin,
            'email_send' => $site_info->email_admin,
            'type'    => $request->type,
        ];
        if($request->type == 'Career'){
            Mail::to($site_info->email_admin)->send(new SendTestEmail($dataEmail));
        }else{
            Mail::to($site_info->email)->send(new SendTestEmail($dataEmail));
        }
        return back()->with([
            'toastr' => 'Thành công',
            'type' => $request->type,
            'name' => $request->name
        ]);
    }

    public function postContactpopup(Request $request)
    {
        $this->initMailConfig();
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'postion' => 'required',
            'phone' => 'required',
            "file" => "mimetypes:application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document|max:10000|required"
        ],[
            "file.mimetypes" => 'File của bạn không đúng định dạng ',
            "file.required" => 'File chưa được nhập',
            "phone.required" => 'Số điện thoại chưa được nhập',
            "postion.required" => 'Vị trí chưa được nhập',
            "name.required" => 'Tên chưa được nhập',
        ]);

        if ($validator->fails()) {
            return response()->json([
                        'error' => $validator->errors()->all()
                    ]);
        }
        $file = $request->file('file');
        $main_image = null;
        if (isset($file)) {
            $curentdate = Carbon::now()->toDateString();
            $imagename =  $curentdate . '-' . uniqid() . '.' . $file->getClientOriginalExtension();

            $path = 'slash/slash/uploads/files/';

            $file->move($path, $imagename);

            $main_image = $path.$imagename;
        }
        $cus          = new Customers;
        $cus->name    = $request->name;
        $cus->email   = $request->email;
        $cus->phone   = $request->phone;
        $cus->address = $request->address;
        $cus->save();
        $contact              = new Contact;
        $contact->title       = 'Khách hàng liên hệ';
        $contact->you_are     = $request->you_are;
        $contact->postion        = $request->postion;
        $contact->help        = $request->help;
        $contact->file       = $main_image;
        $contact->type        = 'Popup';
        $contact->customer_id = $cus->id;
        $contact->content     = $request->input('content');
        $contact->status      = 0;
        $contact->save();
        $site_info = $this->config_info;
        $title = 'Có người ứng tuyển';
        $dataEmail = [
            'name'    => $request->name,
            'phone'   => $request->phone,
            'postion' => $request->postion,
            'you_are' => $request->you_are,
            'help'    => $request->help,
            'file'   => $main_image,
            'email'   => $request->email,
            'content' => $request->content,
            'title'   => $title,
            'email_from' => $site_info->email_admin,
            'email_send' => $site_info->email_admin,
            'type'    => $request->type,
        ];
        Mail::to($site_info->email_admin)->send(new SendTestEmail($dataEmail));
        return response()->json(['success' => 'Successfully.']);
    }
}
