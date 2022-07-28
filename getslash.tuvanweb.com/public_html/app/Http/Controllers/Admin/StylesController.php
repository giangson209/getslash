<?php

namespace App\Http\Controllers\Admin;

use App\Models\Styles;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use DataTables;
use App\Models\GalleryLibs;

class StylesController extends Controller
{

    protected function fields()
    {
        return [
            'name_vi' => "required",
            'image'   => "required",
        ];
    }

    protected function messages()
    {
        return [
            'name_vi.required' => 'Tiêu đề không được bỏ trống.',
            "image.required"   => "Hình ảnh không được để trống"
        ];
    }


    protected function module()
    {
        return [
            'name'   => 'Press',
            'module' => 'styles',
            'table'  => [
                'image' => [
                    'title' => 'Hình ảnh',
                    'with' => '70px',
                ],
                'name' => [
                    'title' => 'Tiêu đề',
                    'with'  => '',
                ],
                'slug' => [
                    'title' => 'Liên kết',
                    'with'  => '',
                ],
                'status' => [
                    'title' => 'Trạng thái',
                    'with'  => '',
                ],
            ]
        ];
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $lists = Styles::orderBy('created_at', 'DESC');
            return Datatables::of($lists)
                ->addColumn('checkbox', function ($data) {
                    return '<input type="checkbox" name="chkItem[]" value="' . $data->id . '">';
                })->addColumn('image', function ($data) {
                    return '<img src="' . $data->image . '" class="img-thumbnail" width="50px" height="50px">';
                })->addColumn('name', function ($data) {
                    return $data->name_vi;
                })->addColumn('slug', function ($data) {
                    return '<a href="' .asset('styles') .'/'.$data->slug.'" title="Sửa">
                            ' .asset('styles') .'/'.$data->slug.'
                        </a>';
                })->addColumn('status', function ($data) {
                    if ($data->status == 1) {
                        $status = ' <span class="label label-success">Hiển thị</span>';
                    } else {
                        $status = ' <span class="label label-danger">Không hiển thị</span>';
                    }if ($data->hot == 1) {
                        $status = $status.' <span class="label label-primary">Nổi bật</span>';
                    }
                    return $status;
                })->addColumn('action', function ($data) {
                    return '<a href="' . route('styles.edit', ['id' => $data->id ]) . '" title="Sửa">
                            <i class="fa fa-pencil fa-fw"></i> Sửa
                        </a> &nbsp; &nbsp; &nbsp;
                            <a href="javascript:;" class="btn-destroy" 
                            data-href="' . route('styles.destroy', $data->id) . '"
                            data-toggle="modal" data-target="#confim">
                            <i class="fa fa-trash-o fa-fw"></i> Xóa</a>
                        ';
                })->rawColumns(['checkbox', 'image', 'status', 'action', 'slug', 'name'])
                ->addIndexColumn()
                ->make(true);
        }

        $data['module'] = $this->module();
        return view("backend.{$this->module()['module']}.index", $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function create()
    {
        $data['module'] = $this->module();
        return  view( "backend.{$this->module()['module']}.create-edit", $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $this->validate($request, $this->fields(), $this->messages());
        $input = $request->all();
        $input['user_id'] = \Auth::user()->id;
        $input['status'] = $request->status ?? 0;
        $input['hot'] = $request->hot ?? 0;
        $input['slug'] = $this->createSlug(Str::slug($request->name_vi));
        $style = Styles::create($input);
        // GalleryLibs::createGallery(Styles::class, $style->id, GalleryLibs::TYPE_STYLE, $request->gallery);
        flash('Thêm thành công')->success();
        return redirect()->route('styles.index');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function edit($id)
    {
        $data['module'] = array_merge($this->module(),[
            'action' => 'update'
        ]);
        $data['data'] = Styles::findOrFail($id);
        return view("backend.{$this->module()['module']}.create-edit", $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, $this->fields(), $this->messages());
        $input = $request->all();
        $input['status'] = $request->status == 1 ? 1 : null;
        $input['hot'] = $request->hot == 1 ? 1 : 0;
        Styles::find($id)->update($input);
        // GalleryLibs::createGallery(Styles::class, $id, GalleryLibs::TYPE_STYLE, $request->gallery);
        flash('Cập nhật thành công.')->success();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        flash('Xóa thành công.')->success();
        Styles::destroy($id);
        GalleryLibs::deleteGallery(Styles::class, $id, GalleryLibs::TYPE_STYLE);
        return redirect()->back();
    }

    public function deleteMuti(Request $request)
    {
        if(!empty($request->chkItem)){
            foreach ($request->chkItem as $id) {
                GalleryLibs::deleteGallery(Styles::class, $id, GalleryLibs::TYPE_STYLE);
                Styles::destroy($id);
            }
            flash('Xóa thành công.')->success();
            return back();
        }
        flash('Bạn chưa chọn dữ liệu cần xóa.')->error();
        return back();
    }


    public function getAjaxSlug(Request $request)
    {
        $slug = Str::slug($request->slug);
        $id = $request->id;
        $post = Styles::find($id);
        $post->slug = $this->createSlug($slug, $id);
        $post->save();
        return $this->createSlug($slug, $id);
    }

    public function createSlug($slugPost, $id = null)
    {
        $slug = $slugPost;
        $index = 1;
        $baseSlug = $slug;
        while ($this->checkIfExistedSlug($slug, $id)) {
            $slug = $baseSlug . '-' . $index++;
        }

        if (empty($slug)) {
            $slug = time();
        }

        return $slug;
    }


    public function checkIfExistedSlug($slug, $id = null)
    {
        if($id != null) {
            $count = Styles::where('id', '!=', $id)->where('slug', $slug)->count();
            return $count > 0;
        }else{
            $count = Styles::where('slug', $slug)->count();
            return $count > 0;
        }
    }
}
