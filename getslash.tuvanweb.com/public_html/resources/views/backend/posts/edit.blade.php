@extends('backend.layouts.app')
@section('controller', 'Bài viết '.strtoupper(request('type')) )
@section('controller_route', route('posts.index') )
@section('action','Chỉnh sửa')
@section('content')
	<div class="content">
		<div class="clearfix"></div>
		@include('flash::message')
		<form action="{{ route('posts.update', $data->id) }}" method="POST">
			@csrf
			@method('PUT')
			<input type="hidden" value="{{ $data->type }}" name="type">
			<div class="row">
				<div class="col-sm-9">
		            <div class="nav-tabs-custom">
		                <ul class="nav nav-tabs">
		                    <li class="active">
		                        <a href="#activity" data-toggle="tab" aria-expanded="true">Thông tin</a>
		                    </li>
		                    @if( request('type') !== 'faq' || request('type') !== 'faq-merchant')
		                    <li class="">
		                    	<a href="#setting" data-toggle="tab" aria-expanded="true">Cấu hình seo </a>
		                    </li>
                            @endif
		                </ul>
		                <div class="tab-content">
		                    <div class="tab-pane active" id="activity">
		                        <div class="row">
		                            <div class="col-sm-12">
		                                <div class="form-group">
		                                    <label>Tiêu đề</label>
		                                    <input type="text" class="form-control" name="name_vi" id="name" value="{!! old('name_vi', @$data->name_vi) !!}" required="">
		                                </div>
                            			@if( request('type') !== 'faq' || request('type') !== 'faq-merchant')
		                                <div class="form-group" id="edit-slug-box">
		                                    @include('backend.posts.permalink')
		                                </div>
		                                <div class="form-group">
		                                    <label>Mô tả ngắn</label>
		                                    <textarea class="form-control" rows="5" name="desc_vi">{!! old('desc_vi', @$data->desc_vi) !!}</textarea>
		                                </div>
		                                @endif
		                                
		                                <div class="form-group">
		                                    <label>Nội dung</label>
		                                    <textarea class="content" name="content_vi">{!! old('content_vi', @$data->content_vi) !!}</textarea>
		                                </div>
		                            </div>
		                        </div>
		                    </div>

		                    <div class="tab-pane" id="setting">
		                        <div class="form-group">
		                            <label>Title SEO</label>
		                            <label style="float: right;">Số ký tự đã dùng: <span id="countTitle">{{ $data->meta_title != null ? mb_strlen( $data->meta_title, 'UTF-8') : 0 }}/70</span></label>
		                            <input type="text" class="form-control" name="meta_title"
		                                   value="{!! old('desc', isset($data->meta_title) ? $data->meta_title : null ) !!}"
		                                   id="meta_title">
		                        </div>

		                        <div class="form-group">
		                            <label>Meta Description</label>
		                            <label style="float: right;">Số ký tự đã dùng: <span id="countMeta">{{ $data->meta_description != null ? mb_strlen( $data->meta_description, 'UTF-8') : 0 }}/360</span></label>
		                            <textarea name="meta_description" class="form-control" id="meta_description"
		                                      rows="5">{!! old('meta_description', isset($data->meta_description) ? $data->meta_description : null ) !!}</textarea>
		                        </div>

		                        <div class="form-group">
		                            <label>Meta Keyword</label>
		                            <input type="text" class="form-control" name="meta_keyword"
		                                   value="{!! old('meta_keyword', isset($data->meta_keyword) ? $data->meta_keyword : null ) !!}">
		                        </div>

		                        <h4 class="ui-heading">Xem trước kết quả tìm kiếm</h4>
		                        <div class="google-preview">
		                            <span class="google__title"><span>{!! !empty($data->meta_title) ? $data->meta_title : $data->name !!}</span> </span>
		                            <div class="google__url">
		                                {{ asset( 'tin-tuc/'.$data->slug ) }}
		                            </div>
		                            <div class="google__description">{!! old('meta_description', isset($data->meta_description) ? $data->meta_description : '') !!}</div>
		                        </div>
		                    </div>

		                </div>
		            </div>
				</div>
				<div class="col-sm-3">
		            @if( request('type') !== 'faq' && request('type') !== 'faq-merchant')
					<div class="box box-success">
		                <div class="box-header with-border">
		                    <h3 class="box-title">Đăng</h3>
		                </div>
		                <div class="box-body">
		                    <div class="form-group">
		                       	<label class="custom-checkbox">
	                                <input type="checkbox" name="status" value="1" {{ @$data->status == 1 ? 'checked' : null }}> Hiển thị
	                            </label>
			                    
			                    
		                    	<label class="custom-checkbox">
	                                <input type="checkbox" name="hot" value="1" {{ @$data->hot == 1 ? 'checked' : null }}> Nổi bật
	                            </label>


	                            <div class="form-group text-right">
			                        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Lưu lại</button>
			                    </div>
			                   
		                    </div>
		                </div>
		            </div>
                    @endif


		            @if( request('type') !== 'faq' && request('type') !== 'faq-merchant')
			<!-- 		<div class="box box-success">
						<div class="box-header with-border">
							<h3 class="box-title">Tags</h3>
						</div>
						<div class="box-body">
							<?php if(!empty($data->tagNames())){
								$tags = implode(',', $data->tagNames());
							} ?>
							<input type="text" class="demo-default" id="tags-input" name="tags" data-role="tagsinput" value="{{ @$tags }}">
						</div>
					</div> -->
                    @endif

		            <div class="box box-success category-box">
		             	<?php 
		                        $category_list = [];
		                        if(!empty(@$data->category)){
		                           $category_list = @$data->category->pluck('id')->toArray();
		                        }
		                    ?>
		                <div class="box-header with-border">
		                    <h3 class="box-title">Danh mục {{ strtoupper(request('type')) }} </h3>
		                </div>
		                <div class="box-body checkboxlist">
		                    @if (!empty($categories))
		                        @foreach ($categories as $item)
		                            @if ($item->parent_id == 0)
		                                <label class="custom-checkbox">
		                                    <input type="checkbox" class="category" name="category[]" value="{{ $item->id }}" {{ in_array( $item->id, $category_list ) ? 'checked' : null }}> {{ $item->name_vi }}
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
			$('#btn-ok').click(function(event) {
		        var slug_new = $('#new-post-slug').val();
		        var name = $('#name').val();
		        $.ajax({
		        	url: '{{ route('posts.get-slug') }}',
		        	type: 'GET',
		        	data: {
		        		id: $('#idPost').val(),
		        		slug : slug_new.length > 0 ? slug_new : name,
		        	},
		        })
		        .done(function(data) {
		        	$('#change_slug').show();
			        $('#btn-ok').hide();
			        $('.cancel.button-link').hide();
			        $('#current-slug').val(data);
		        	cancelInput(data);
		        })
		    });
		});	
	</script>
	
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

