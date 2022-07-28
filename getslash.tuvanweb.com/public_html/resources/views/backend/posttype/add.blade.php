@extends('backend.layouts.app')
@section('controller', strtoupper(request('type')))
@section('controller_route', route('posttype.index') )
@section('action','Thêm mới')
@section('content')
	<div class="content">
		<div class="clearfix"></div>
		@include('flash::message')
		<form action="{{ route('posttype.store') }}" method="POST">
			@csrf
			<input type="hidden" value="{{ request('type') }}" name="type">
			<div class="row">
				<div class="col-sm-9">
		            <div class="nav-tabs-custom">
		                <ul class="nav nav-tabs">
		                    <li class="active">
		                        <a href="#activity" data-toggle="tab" aria-expanded="true">Bài viết </a>
		                    </li>
		                </ul>
		                <div class="tab-content">
		                    <div class="tab-pane active" id="activity">
		                        <div class="row">
		                            <div class="col-sm-12">
		                                <div class="form-group">
		                                    <label>Tiêu đề</label>
		                                    <input type="text" class="form-control" name="name" id="name" value="{!! old('name') !!}" required="">
		                                </div>
		                                <div class="form-group">
		                                    <label>Đường dẫn tĩnh</label>
		                                    <input type="text" class="form-control" name="slug" value="{!! old('slug') !!}" @if(request('type')  == 'video') required="" @endif>
		                                </div>
		                                @if(request('type')  == 'product')
		                                <div class="form-group">
		                                    <label>Gía cũ</label>
		                                    <input type="text" class="form-control" name="price_old" id="price_old" value="{!! old('price_old') !!}" required="">
		                                </div>
		                                <div class="form-group">
		                                    <label>Gía mới</label>
		                                    <input type="text" class="form-control" name="price" id="price" value="{!! old('price') !!}" required="">
		                                </div>
		                                <div class="form-group">
		                                    <label>Ghi chú</label>
		                                    <textarea type="text" class="form-control content" name="note" id="note" required=""><p>x3 kỳ c&ugrave;ng&nbsp;<img alt="" src="/slash/slash/uploads/images/status.svg" style="width: 24px; height: 24px;" /></p></textarea>
		                                </div>
		                                @endif
		                                @if(request('type')  == 'video')
		                                <div class="form-group">
		                                    <label>Time</label>
		                                    <input type="text" class="form-control" name="video" id="video" value="{!! old('video', @$data->video) !!}" required="">
		                                </div>
		                                @endif
		                                <!-- <div class="form-group">
		                                    <label>Mô tả ngắn</label>
		                                    <textarea class="form-control" rows="5" name="desc">{!! old('desc') !!}</textarea>
		                                </div>
		                                
		                                <div class="form-group">
		                                    <label>Nội dung</label>
		                                    <textarea class="content" name="content">{!! old('content') !!}</textarea>
		                                </div> -->
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
		                    
		                    <label class="custom-checkbox">
                                <input type="checkbox" name="status" value="1" checked=""> Hiển thị
                            </label>
		                    
		                    
	                    <!-- 	<label class="custom-checkbox">
                                <input type="checkbox" name="hot" value="1" checked=""> Nổi bật
                            </label> -->
                            
		                    <div class="form-group text-right">
		                        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Lưu lại</button>
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
		                                <img src="{{ old('image') ?  old('image') : __IMAGE_DEFAULT__ }}"
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
		                                <img src="{{ old('logo') ?  old('logo') : __IMAGE_DEFAULT__ }}"
		                                     data-init="{{ __IMAGE_DEFAULT__ }}">
		                                <a href="javascript:void(0)" class="image__delete" onclick="urlFileDelete(this)">
		                                    <i class="fa fa-times"></i></a>
		                                <input type="hidden" value="{{ old('logo') }}" name="logo"/>
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
	<link rel="stylesheet" href="{{ url('public/backend/plugins/taginput/bootstrap-tagsinput.css') }}">
@endsection
@section('scripts')
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