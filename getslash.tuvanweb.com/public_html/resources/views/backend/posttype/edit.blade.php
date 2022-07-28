@extends('backend.layouts.app')
@section('controller', strtoupper(request('type')))
@section('controller_route', route('posttype.index') )
@section('action','Chỉnh sửa')
@section('content')
	<div class="content">
		<div class="clearfix"></div>
		@include('flash::message')
		<form action="{{ route('posttype.update', $data->id) }}" method="POST">
			@csrf
			@method('PUT')
			<input type="hidden" value="{!! old('desc', @$data->type) !!}" name="type">
			<div class="row">
				<div class="col-sm-9">
		            <div class="nav-tabs-custom">
		                <ul class="nav nav-tabs">
		                    <li class="active">
		                        <a href="#activity" data-toggle="tab" aria-expanded="true">Thông tin</a>
		                    </li>
		                </ul>
		                <div class="tab-content">
		                    <div class="tab-pane active" id="activity">
		                        <div class="row">
		                            <div class="col-sm-12">
		                                <div class="form-group">
		                                    <label>Tiêu đề</label>
		                                    <input type="text" class="form-control" name="name" id="name" value="{!! old('name', @$data->name) !!}" required="">
		                                </div>
		                                <div class="form-group">
		                                    <label>Slug</label>
		                                    <input type="text" class="form-control" name="slug" id="slug" value="{!! old('slug', @$data->slug) !!}" required="">
		                                </div>
		                                @if(request('type')  == 'product')
		                                <div class="form-group">
		                                    <label>Gía cũ</label>
		                                    <input type="text" class="form-control" name="price_old" id="price_old" value="{!! old('price_old', @$data->price_old) !!}" required="">
		                                </div>
		                                <div class="form-group">
		                                    <label>Gía mới</label>
		                                    <input type="text" class="form-control" name="price" id="price" value="{!! old('price', @$data->price) !!}" required="">
		                                </div>
		                                <div class="form-group">
		                                    <label>Ghi chú</label>
		                                    <textarea type="text" class="form-control content" name="note" id="note" required="">{!! old('note', @$data->note) !!}</textarea>
		                                </div>
		                                @endif
		                                @if(request('type')  == 'video')
		                                <div class="form-group">
		                                    <label>Time</label>
		                                    <input type="text" class="form-control" name="video" id="video" value="{!! old('video', @$data->video) !!}" required="">
		                                </div>
		                                @endif
		                            </div>
		                        </div>
		                    </div>

		                </div>
		            </div>
				</div>
				<div class="col-sm-3">
					<div class="box box-success">
		                <div class="box-header with-border">
		                    <h3 class="box-title">Đăng</h3>
		                </div>
		                <div class="box-body">
		                    <div class="form-group">
		                       	<label class="custom-checkbox">
	                                <input type="checkbox" name="status" value="1" {{ @$data->status == 1 ? 'checked' : null }}> Hiển thị
	                            </label>
			                    
			                    
		                    	<!-- <label class="custom-checkbox">
	                                <input type="checkbox" name="hot" value="1" {{ @$data->hot == 1 ? 'checked' : null }}> Nổi bật
	                            </label> -->


	                            <div class="form-group text-right">
			                        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Lưu lại</button>
			                    </div>
			                   
		                    </div>
		                </div>
		            </div>


		            <div class="box box-success">
		                <div class="box-header with-border">
		                    <h3 class="box-title">Ảnh đại diện</h3>
		                </div>
		                <div class="box-body">
		                    <div class="form-group" style="text-align: center;">
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
		            </div>


					@if(request('type')  == 'category' || request('type')  == 'partner')
		            <div class="box box-success">
		                <div class="box-header with-border">
		                    <h3 class="box-title">{{ request('type')  == 'partner' ? 'Logo' : 'Ảnh dọc' }}</h3>
		                </div>
		                <div class="box-body">
		                    <div class="form-group" style="text-align: center;">
		                        <div class="image">
		                            <div class="image__thumbnail">
		                                <img src="{{ $data->logo ?  $data->logo : __IMAGE_DEFAULT__ }}"
		                                     data-init="{{ __IMAGE_DEFAULT__ }}">
		                                <a href="javascript:void(0)" class="image__delete" onclick="urlFileDelete(this)">
		                                    <i class="fa fa-times"></i></a>
		                                <input type="hidden" value="{{ $data->logo }}" name="logo"/>
		                                <div class="image__button" onclick="fileSelect(this)">
		                                	<i class="fa fa-upload"></i>
		                                    Upload
		                                </div>
		                            </div>
		                        </div>
		                    </div>
		                </div>
		            </div>
					@endif

				</div>
			</div>
		</form>
	</div>
@stop
@section('css')
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="{{ url('public/backend/plugins/taginput/bootstrap-tagsinput.css') }}">
@endsection
@section('scripts')
	<script>
		jQuery(document).ready(function($) {
			$('input[name="time_published"]').click(function(){
			   	if($(this).val() == 2){
			   		$('.time_published_value').show('slow/400/fast');
			   	}else{
			   		$('.time_published_value').hide('slow/400/fast');
			   	}
			});
		});
	</script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.11.1/typeahead.bundle.min.js"></script>
	<script src="{{ url('public/backend/plugins/taginput/bootstrap-tagsinput.min.js') }}"></script>
	<script>
		jQuery(document).ready(function($) {
			$('input[name="time_published"]').click(function(){
			   	if($(this).val() == 2){
			   		$('.time_published_value').show('slow/400/fast');
			   	}else{
			   		$('.time_published_value').hide('slow/400/fast');
			   	}
			});
			$('#tags-input').tagsinput({
			  	
			});
		});
	</script>
@endsection

