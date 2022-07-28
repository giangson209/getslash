@extends('backend.layouts.app')
@section('controller', 'Danh mục tin tức' )
@section('controller_route', route('categories-post.index'))
@section('action', 'Danh sách')
@section('content')
    <div class="content">
        <div class="clearfix"></div>
        @include('flash::message')
        <div class="row">
        	<div class="col-sm-5">
	        	<form action="{!! updateOrStoreRouteRender( @$module['action'], $module['module'], @$data) !!}" method="POST">
	        		@csrf
					@if(isUpdate(@$module['action']))
				        {{ method_field('put') }}
				    @endif
	        		<div class="nav-tabs-custom">
		                <ul class="nav nav-tabs">
		                    <li class="active">
		                        <a href="#activity" data-toggle="tab" aria-expanded="true">Danh mục</a>
		                    </li>
		                    @if( request('type') !== 'faq' && request('type') !== 'faq-merchant')
		                    <li class="">
		                    	<a href="#setting1" data-toggle="tab" aria-expanded="true">Cấu hình seo </a>
		                    </li>
                             @endif
		                </ul>
		                <div class="tab-content">
		                    <div class="tab-pane active" id="activity">
								<div class="form-group">
									<label for="">Tên danh mục </label>
									<input type="text" class="form-control" name="name_vi" value="{{ old('name_vi', @$data->name_vi) }}">
								</div>
								<div class="form-group {{ request('type') == 'faq' ? 'hide' : '' }} {{ request('type') == 'faq-merchan' ? 'hide' : '' }}">
									<label for="">Đường dẫn tĩnh</label>
									<input type="text" class="form-control" name="slug" id="slug" value="{{ old('slug', @$data->slug) }}">
								</div>
		                        @if( request('type') == 'faq' || request('type') == 'faq-merchant')
                    			<div class="form-group">
                    				<label for="">Hình ảnh</label>
                    				 <div class="image">
			                            <div class="image__thumbnail">
			                                <img src="{{ !empty($data->icon) ? $data->icon : __IMAGE_DEFAULT__ }}"
			                                     data-init="{{ __IMAGE_DEFAULT__ }}">
			                                <a href="javascript:void(0)" class="image__delete" onclick="urlFileDelete(this)">
			                                    <i class="fa fa-times"></i></a>
			                                <input type="hidden" value="{{ old('icon', @$data->icon) }}" name="icon"/>
			                                <div class="image__button" onclick="fileSelect(this)">
			                                	<i class="fa fa-upload"></i>
			                                    Upload
			                                </div>
			                            </div>
			                        </div>
                    			</div>
                                @endif
		                    </div>
		                    <div class="tab-pane" id="setting1">
		                    	<div class="row">
		                    		<div class="col-sm-12">
		                    			<div class="form-group">
		                    				<label for="">Hình ảnh</label>
		                    				 <div class="image">
					                            <div class="image__thumbnail">
					                                <img src="{{ !empty($data->image) ? $data->image : __IMAGE_DEFAULT__ }}"
					                                     data-init="{{ __IMAGE_DEFAULT__ }}">
					                                <a href="javascript:void(0)" class="image__delete" onclick="urlFileDelete(this)">
					                                    <i class="fa fa-times"></i></a>
					                                <input type="hidden" value="{{ old('image', @$data->image) }}" name="image"/>
					                                <div class="image__button" onclick="fileSelect(this)">
					                                	<i class="fa fa-upload"></i>
					                                    Upload
					                                </div>
					                            </div>
					                        </div>
		                    			</div>
		                    		</div>
		                    		<div class="col-sm-12">
		                    			 <div class="form-group">
				                            <label>Title SEO</label>
				                            <input type="text" class="form-control" name="meta_title_vi" value="{!! old('meta_title_vi',  @$data->meta_title_vi) !!}">
				                        </div>

				                        <div class="form-group">
				                            <label>Meta Description</label>
				                            <textarea name="meta_description_vi" id="" class="form-control" rows="5">{!! old('meta_description_vi', @$data->meta_description_vi) !!}</textarea>
				                        </div>

				                        <div class="form-group">
				                            <label>Meta Keyword</label>
				                            <input type="text" class="form-control" name="meta_keyword_vi" value="{!! old('meta_keyword_vi',@$data->meta_keyword_vi) !!}">
				                        </div>
		                    		</div>
		                    	</div>
		                    </div>
		                    <button type="submit" class="btn btn-primary">Lưu lại</button>
		                </div>
		            </div>
	        	</form>
	        </div>
	    </div>
	</div>
@stop