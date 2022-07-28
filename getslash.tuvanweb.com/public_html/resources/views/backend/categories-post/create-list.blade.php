@extends('backend.layouts.app')
@php $title = ''; @endphp
@if(request('type') == 'blog')
    @php $title = 'Blog'; @endphp
@endif
@if(request('type') == 'faq')
    @php $title = 'FAQ'; @endphp
@endif
@section('controller', 'Danh mục '.$title)
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
		                    	<a href="#setting1" data-toggle="tab" aria-expanded="true">Cấu hình Seo VI</a>
		                    </li>
		                    @endif
		                </ul>
		                <div class="tab-content">
		                    <div class="tab-pane active" id="activity">
								<div class="form-group">
									<label for="">Tên danh mục</label>
									<input type="text" class="form-control" name="name_vi" id="name" value="{{ old('name_vi') }}">
									<input type="hidden" class="form-control" name="type" id="name" value="{{ request('type') }}">
								</div>
								<div class="form-group {{ request('type') == 'faq' ? 'hide' : '' }} {{ request('type') == 'faq-merchan' ? 'hide' : '' }}">
									<label for="">Đường dẫn tĩnh</label>
									<input type="text" class="form-control" name="slug" id="slug" value="{{ old('slug') }}">
								</div>
		                        @if( request('type') == 'faq' || request('type') == 'faq-merchant')
                    			<div class="form-group">
                    				<label for="">Hình ảnh</label>
                    				 <div class="image">
			                            <div class="image__thumbnail">
			                                <img src="{{ __IMAGE_DEFAULT__ }}"
			                                     data-init="{{ __IMAGE_DEFAULT__ }}">
			                                <a href="javascript:void(0)" class="image__delete" onclick="urlFileDelete(this)">
			                                    <i class="fa fa-times"></i></a>
			                                <input type="hidden" value="{{ old('icon') }}" name="icon"/>
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
					                                <img src="{{ __IMAGE_DEFAULT__ }}"
					                                     data-init="{{ __IMAGE_DEFAULT__ }}">
					                                <a href="javascript:void(0)" class="image__delete" onclick="urlFileDelete(this)">
					                                    <i class="fa fa-times"></i></a>
					                                <input type="hidden" value="{{ old('image') }}" name="image"/>
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
				                            <input type="text" class="form-control" name="meta_title_vi" value="{!! old('meta_title_vi') !!}">
				                        </div>

				                        <div class="form-group">
				                            <label>Meta Description</label>
				                            <textarea name="meta_description_vi" id="" class="form-control" rows="5">{!! old('meta_description_vi') !!}</textarea>
				                        </div>

				                        <div class="form-group">
				                            <label>Meta Keyword</label>
				                            <input type="text" class="form-control" name="meta_keyword_vi" value="{!! old('meta_keyword_vi') !!}">
				                        </div>
		                    		</div>
		                    	</div>
		                    </div>
		                    <button type="submit" class="btn btn-primary">Lưu lại</button>
		                </div>
		            </div>
	        	</form>
	        </div>
	        <div class="col-sm-7">
	        	<div class="box box-primary">
	                <div class="box-body">
	                    <table id="example1" class="table table-bordered table-striped table-hover">
	                        <thead>
	                            <tr>
	                                <th style="width: 15px"><input type="checkbox" name="chkAll" id="chkAll"></th>
	                                <th style="width: 15px">STT</th>
	                                <th>Tiêu đề </th>
		                            @if( request('type') !== 'faq')
	                                <th>Đường dẫn</th>
	                                @endif
	                                <th style="width: 150px">Thao tác</th>
	                            </tr>
	                        </thead>
	                        <tbody>
	                            @foreach ($data as $item)
	                                <tr>
	                                    <td><input type="checkbox" name="chkItem[]" value="{{ $item->id }}"></td>
	                                    <td>{{ $loop->index + 1 }}</td>
	                                    <td>{{ $item->name_vi }}</td>
		                            	@if( request('type') !== 'faq')
	                                    <td>{{ $item->slug }}</td>
		                                @endif
	                                    <td>
		                            		@if( request('type') !== 'faq' && request('type') !== 'faq-merchant')
	                                    	<a href="{{ url('category/'.$item->slug) }}" target="_blank">
	                                    		<i class="fa fa-eye" aria-hidden="true"></i> Xem
	                                    	</a>&nbsp; &nbsp; &nbsp;
		                                	@endif
	                                        <a href="{{ route('categories-post.edit', ['id' => $item->id,'type' => $item->type]) }}" title="Sửa">
	                                            <i class="fa fa-pencil fa-fw"></i> Sửa
	                                        </a> &nbsp; &nbsp; &nbsp;
	                                        <a href="javascript:;" class="btn-destroy" data-href="{{ route('categories-post.destroy', $item->id) }}"
				                            data-toggle="modal" data-target="#confim">
				                            <i class="fa fa-trash-o fa-fw"></i> Xóa</a>
	                                    </td>
	                                </tr>
	                            @endforeach
	                        </tbody>
	                    </table>
	                </div>
	            </div>
	        </div>
        </div>
    </div>
@stop