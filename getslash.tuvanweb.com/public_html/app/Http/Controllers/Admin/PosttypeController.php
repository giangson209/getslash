<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use DataTables;
use Illuminate\Http\Request;
use App\Models\Posttype;
use Carbon\Carbon;

class PosttypeController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $list_post = Posttype::where('type',$request->type)->orderBy('created_at', 'DESC')->get();
            return Datatables::of($list_post)
                ->addColumn('checkbox', function ($data) {
                    return '<input type="checkbox" name="chkItem[]" value="' . $data->id . '">';
                })->addColumn('image', function ($data) {
                    return '<img src="' . $data->image . '" class="img-thumbnail" width="50px" height="50px">';
                })->addColumn('name', function ($data) {
                    return $data->name;
                })->addColumn('status', function ($data) {
                    if ($data->status == 1) {
                        $status = ' <span class="label label-success">Hiển thị</span>';
                    } elseif ($data->status == 2) {
                        $status = ' <span class="label label-danger">Bản nháp</span>';
                    } else {
                        $status = ' <span class="label label-danger">Chờ duyệt</span>';
                    }
                    if ($data->hot) {
                        $status = $status . ' <span class="label label-success">Nổi bật</span>';
                    }
                    return $status;
                })->addColumn('action', function ($data) {
                    return '<a href="' . route('posttype.edit', ['id' => $data->id, 'type' => $data->type]) . '" title="Sửa">
                            <i class="fa fa-pencil fa-fw"></i> Sửa
                        </a> &nbsp; &nbsp; &nbsp;
                            <a href="javascript:;" class="btn-destroy"
                            data-href="' . route('posttype.destroy', $data->id) . '"
                            data-toggle="modal" data-target="#confim">
                            <i class="fa fa-trash-o fa-fw"></i> Xóa</a>
                        ';
                })->rawColumns(['checkbox', 'image', 'status', 'action', 'name', 'author'])
                ->addIndexColumn()
                ->make(true);
        }
        return view('backend.posttype.list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('backend.posttype.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = array(
            'name'  => 'required',
            'type'     => 'required',
        );
        $trans = array(
            'name.required'  => 'Bạn chưa nhập tên bài viết',
            'type'              => 'Sai định dạng.',
        );
        if ($request->type !== 'faq') {
            $rules['image'] = 'required';
            $trans['image'] = 'Sai định dạng.';
        }
        $this->validate($request,$rules,$trans);
        $data = [
            'name'          => $request->name,
            'slug'          => $request->slug,
            'desc'          => $request->desc,
            'content'          => $request->content,
            'image'            => $request->image,
            'type'             => $request->type,
            'content'       => $request->input('content'),
            'status'           => $request->status,
            'hot'              => $request->hot == 1 ? 1 : null,
            'meta_title'       => $request->meta_title,
            'meta_description' => $request->meta_description,
            'meta_keyword'     => $request->meta_keyword,
            'note'       => $request->note,
            'price'       => $request->price,
            'price_old'       => $request->price_old,
            'video'       => $request->video,
            'logo'       => $request->logo,
        ];
        $post = Posttype::create($data);

        flash('Thêm mới thành công.')->success();


        return redirect()->route('posttype.index', ['type' => $request->type]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $data = Posttype::findOrFail($id);
        return view('backend.posttype.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = array(
            'name'  => 'required',
            'type'     => 'required',
        );
        $trans = array(
            'name.required'  => 'Bạn chưa nhập tên bài viết',
            'type'              => 'Sai định dạng.',
        );
        if ($request->type !== 'faq') {
            $rules['image'] = 'required';
            $trans['image'] = 'Sai định dạng.';
        }
        $this->validate($request,$rules,$trans);
        $post = Posttype::findOrFail($id);

        $data = [
            'name'          => $request->name,
            'desc'          => $request->desc,
            'content'          => $request->content,
            'slug'          => $request->slug,
            'image'            => $request->image,
            'content'       => $request->input('content'),
            'status'           => $request->status,
            'hot'              => $request->hot == 1 ? 1 : null,
            'price'       => $request->price,
            'price_old'       => $request->price_old,
            'note'       => $request->note,
            'logo'       => $request->logo,
            'meta_title'       => $request->meta_title,
            'video'       => $request->video,
            'meta_description' => $request->meta_description,
            'meta_keyword'     => $request->meta_keyword,
        ];

        $post = $post->update($data);
        flash('Cập nhật thành công.')->success();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Posttype::destroy($id);
        flash('Xóa thành công.')->success();
        return redirect()->back();
    }

    public function deleteMuti(Request $request)
    {
        if ($request->has('chkItem')) {
            foreach ($request->chkItem as $id) {
                Posttype::destroy($id);
            }
            flash('Xóa thành công.')->success();
            return redirect()->back();
        } else {
            flash('Bạn chưa chọn dữ liệu để xóa.')->error();
            return redirect()->back();
        }
    }

}
