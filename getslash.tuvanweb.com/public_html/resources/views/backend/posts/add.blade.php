@extends('backend.layouts.app')
@section('controller', 'Bài viết '.strtoupper(request('type')) )
@section('controller_route', route('posts.index') )
@section('action','Thêm mới')
@section('content')
	<div class="content">
		<div class="clearfix"></div>
		@include('flash::message')
		<form action="{{ route('posts.store') }}" method="POST">
			@csrf
			<input type="hidden" value="{{ request('type') }}" name="type">
			<div class="row">
				<div class="col-sm-9">
		            <div class="nav-tabs-custom">
		                <ul class="nav nav-tabs">
		                    <li class="active">
		                        <a href="#activity" data-toggle="tab" aria-expanded="true">{{ strtoupper(request('type')) }} </a>
		                    </li>
							
                            @if( request('type') !== 'faq' && request('type') !== 'faq-merchant')
		                    <li class="">
		                    	<a href="#setting" data-toggle="tab" aria-expanded="true">Cấu hình seo</a>
		                    </li>
                            @endif
		                </ul>
		                <div class="tab-content">
		                    <div class="tab-pane active" id="activity">
		                        <div class="row">
		                            <div class="col-sm-12">
		                                <div class="form-group">
		                                    <label>Tiêu đề</label>
		                                    <input type="text" class="form-control" name="name_vi" id="name" value="{!! old('name_vi') !!}" required="">
		                                </div>
		                                <div class="form-group" style="display: none;">
		                                    <label>Đường dẫn tĩnh</label>
		                                    <input type="text" class="form-control" name="slug" id="slug" value="{!! old('slug') !!}">
		                                </div>
		                                @if( request('type') !== 'faq' && request('type') !== 'faq-merchant')
		                                <div class="form-group">
		                                    <label>Mô tả ngắn</label>
		                                    <textarea class="form-control" rows="5" name="desc_vi">{!! old('desc_vi') !!}</textarea>
		                                </div>
		                                @endif
		                                <div class="form-group">
		                                    <label>Nội dung</label>
		                                    <textarea class="content" name="content_vi">{!! old('content_vi') !!}</textarea>
		                                </div>
		                            </div>
		                        </div>
		                    </div>

		                    <div class="tab-pane" id="setting">
		                        <div class="form-group">
		                            <label>Title SEO</label>
		                            <input type="text" class="form-control" name="meta_title" value="{!! old('meta_title') !!}">
		                        </div>
		                        <div class="form-group">
		                            <label>Meta Description</label>
		                            <textarea name="meta_description" id="" class="form-control" rows="5">{!! old('meta_description') !!}</textarea>
		                        </div>

		                        <div class="form-group">
		                            <label>Meta Keyword</label>
		                            <input type="text" class="form-control" name="meta_keyword" value="{!! old('meta_keyword') !!}">
		                        </div>
		                    </div>

		                </div>
		            </div>
				</div>
				<div class="col-sm-3">
					<div class="box box-success {{ request('type') == 'faq' || request('type') == 'faq-merchant' ? 'hide' : '' }}">
		                <div class="box-header with-border">
		                    <h3 class="box-title">Đăng</h3>
		                </div>
		                <div class="box-body">
		                    
		                    <label class="custom-checkbox">
                                <input type="checkbox" name="status" value="1" checked=""> Hiển thị
                            </label>
		                    
		                    
	                    	<label class="custom-checkbox">
                                <input type="checkbox" name="hot" value="1" checked=""> Nổi bật
                            </label>
                            
		                    <div class="form-group text-right">
		                        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Lưu lại</button>
		                    </div>
		                </div>
		            </div>

		            @if( request('type') !== 'faq' && request('type') !== 'faq-merchant')
					<!-- <div class="box box-success">
						<div class="box-header with-border">
							<h3 class="box-title">Tags</h3>
						</div>
						<div class="box-body">
							<input type="text" class="demo-default" id="tags-input" name="tags" data-role="tagsinput">
						</div>
					</div> -->
                    @endif

		            <div class="box box-success category-box">
		                <div class="box-header with-border">
		                    <h3 class="box-title">Danh mục {{ strtoupper(request('type')) }} </h3>
		                </div>
		                <div class="box-body checkboxlist">
		                    @if (!empty($categories))
		                        @foreach ($categories as $item)
		                            @if ($item->parent_id == 0)
		                                <label class="custom-checkbox">
		                                    <input type="checkbox" class="category" name="category[]" value="{{ $item->id }}"> {{ $item->name_vi }}
		                                 </label>
		                            @endif
		                        @endforeach
		                    @endif
		                </div>

		            	@if( request('type') == 'faq' || request('type') == 'faq-merchant')
		                <div class="form-group text-right">
	                        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Lưu lại</button>
	                    </div>
                    	@endif
		            </div>

		            @if( request('type') !== 'faq' && request('type') !== 'faq-merchant')
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