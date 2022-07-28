<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Pages;

class PagesController extends Controller
{
   	public function getListPages()
	{
		$data = Pages::orderBy('created_at', 'DESC')->get();
		return view('backend.pages.list', compact('data'));
	}

	public function postCreatePages(Request $request)
	{
		$page = new Pages;
		$page->name_page = $request->name_page;
		$page->type = $request->type;
		$page->route = $request->route;
		$page->locale = $request->input('locale');
		$page->save();
        flash('Thêm thành công !')->success();
		return redirect()->back();
	}



    public function getBuildPages(Request $request)
    {
    	$type = $request->page;
    	$data = Pages::where('type', $type)->where('locale', $request->input('locale'))->firstOrFail();
        if(view()->exists('backend.pages.layout.'.$type)){
            return view('backend.pages.layout.'.$type, compact('data'));
        }
    	return view('backend.pages.layout.default', compact('data'));
    }

    public function postBuildPages(Request $request)
    {
       	$type = $request->type;
    	$data = Pages::where('type', $type)->where('locale', $request->input('locale'))->firstOrFail();
    	$data->content = $request->input('content');
    	$data->meta_title = $request->meta_title;
    	$data->meta_description = $request->meta_description;
    	$data->meta_keyword = $request->meta_keyword;
    	$data->image = $request->image;
        $data->title_h1 = $request->title_h1;
    	$data->save();
        flash('Cập nhật thành công !')->success();
    	return redirect()->back();
    }
}
