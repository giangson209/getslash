@extends('backend.layouts.app')
@section('controller','Liên hệ')
@section('controller_route',route('pages.list'))
@section('action','Danh sách')
@section('content')
	<div class="content">
		<div class="clearfix"></div>
		<div class="box box-primary">
			<div class="box-body">
				@include('flash::message')
				<form action="{{ route('pages.build.post') }}" method="POST">
					{{ csrf_field() }}
					<input name="type" value="{{ $data->type }}" type="hidden">
					<input name="locale" value="{{ $data->locale }}" type="hidden">
					<div class="row">
						<div class="col-sm-12">
							<div class="form-group">
								<input type="text" class="form-control" value="{{ $data->name_page }}" disabled="">

								@if (\Route::has($data->route))
									<h5>
										<a href="{{ route($data->route) }}" target="_blank">
											<i class="fa fa-hand-o-right" aria-hidden="true"></i>
											Link: {{ route($data->route) }}
										</a>
									</h5>
								@endif
							</div>

						</div>
					</div>
					<div class="nav-tabs-custom">
						<ul class="nav nav-tabs">
							<li class="active">
								<a href="#contentPages1" data-toggle="tab" aria-expanded="true">Khối Maps</a>
							</li>
							<li class="">
								<a href="#contentPages2" data-toggle="tab" aria-expanded="true">Khối Thông tin</a>
							</li>
							<li class="">
								<a href="#contentPages3" data-toggle="tab" aria-expanded="true">Fields</a>
							</li>
							<li class="">
								<a href="#seo" data-toggle="tab" aria-expanded="true">Cấu hình seo</a>
							</li>
						</ul>
					</div>
					<div class="tab-content">
						<div class="tab-pane active" id="contentPages1">
							<div class="row">
								<div class="col-sm-12">
									<div class="form-group">
										<label for="">Tiêu đề</label>
										<input type="text" class="form-control" name="content[khoi1][title]" value="{{ @$data->content->khoi1->title }}">
									</div>
									<div class="form-group">
										<label for="">Tiêu đề sub</label>
										<input type="text" class="form-control" name="content[khoi1][title_sub]" value="{{ @$data->content->khoi1->title_sub }}">
									</div>
									<div class="form-group">
										<label for="">Tiêu đề sub</label>
										<textarea type="text" class="form-control" rows="5" name="content[khoi1][map]">{{ @$data->content->khoi1->map }}</textarea>
									</div>
								</div>
							</div>
						</div>

						<div class="tab-pane" id="contentPages2">
							<div class="row">
								<div class="col-sm-12">
									<div class="form-group">
										<label for="">Tiêu đề sub</label>
										<textarea type="text" class="form-control" name="content[khoi2]">{{ @$data->content->khoi2 }}</textarea>
									</div>
									<div class="repeater" id="repeater">
										<table class="table table-bordered table-hover contact-content">
											<thead>
											<tr>
												<th style="width: 30px;">STT</th>
												<th>Tiêu đề</th>
												<th>Mô tả</th>
												<th style="width: 20px"></th>
											</tr>
											</thead>
											<tbody id="sortable">
											@if (!empty(@$data->content->contact_content))
												@foreach (@$data->content->contact_content as $id => $value)
													<?php $index = $loop->index + 1;?>
													@include('backend.repeater.row-contact-content')
												@endforeach
											@endif
											</tbody>
										</table>
										<div class="text-right">
											<button class="btn btn-primary"
													onclick="repeater(event,this,'{{ route('get.layout') }}','.index', 'contact-content', '.contact-content')">Thêm
											</button>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="tab-pane" id="contentPages3">
							<div class="row">
								<div class="col-sm-3">
									<div class="form-group">
										<label for="">Trường họ và tên</label>
										<input type="text" class="form-control" name="content[field][name]" value="{{ @$data->content->field->name }}">
									</div>
									<div class="form-group">
										<label for="">Placeholder họ và tên</label>
										<input type="text" class="form-control" name="content[field][placeholder_name]" value="{{ @$data->content->field->placeholder_name }}">
									</div>
								</div>
								<div class="col-sm-3">
									<div class="form-group">
										<label for="">Trường email</label>
										<input type="text" class="form-control" name="content[field][email]" value="{{ @$data->content->field->email }}">
									</div>
									<div class="form-group">
										<label for="">Placeholder email</label>
										<input type="text" class="form-control" name="content[field][placeholder_email]" value="{{ @$data->content->field->placeholder_email }}">
									</div>
								</div>
								<div class="col-sm-3">
									<div class="form-group">
										<label for="">Trường số điện thoại</label>
										<input type="text" class="form-control" name="content[field][phone]" value="{{ @$data->content->field->phone }}">
									</div>
									<div class="form-group">
										<label for="">Placeholder số điện thoại</label>
										<input type="text" class="form-control" name="content[field][placeholder_phone]" value="{{ @$data->content->field->placeholder_phone }}">
									</div>
								</div>
								<div class="col-sm-3">
									<div class="form-group">
										<label for="">Trường nội dung</label>
										<input type="text" class="form-control" name="content[field][content]" value="{{ @$data->content->field->content }}">
									</div>
									<div class="form-group">
										<label for="">Placeholder nội dung</label>
										<input type="text" class="form-control" name="content[field][placeholder_content]" value="{{ @$data->content->field->placeholder_content }}">
									</div>
								</div>
								<div class="col-sm-2">
									<div class="form-group">
										<label for="">Trường nút</label>
										<input type="text" class="form-control" name="content[field][button]" value="{{ @$data->content->field->button }}">
									</div>
									<div class="form-group">
										<label for="">Trường bạn là</label>
										<input type="text" class="form-control" name="content[field][who]" value="{{ @$data->content->field->who }}">
									</div>
									<div class="form-group">
										<label for="">Trường GIÚP BẠN? *</label>
										<input type="text" class="form-control" name="content[field][choice]" value="{{ @$data->content->field->choice }}">
									</div>
								</div>
								<div class="col-sm-5">
									<div class="repeater" id="repeater">
										<table class="table table-bordered table-hover who">
											<thead>
											<tr>
												<th style="width: 30px;">STT</th>
												<th>Tiêu đề</th>
												<th style="width: 20px"></th>
											</tr>
											</thead>
											<tbody id="sortable">
											@if (!empty(@$data->content->who_select))
												@foreach (@$data->content->who_select as $id => $value)
													<?php $index = $loop->index + 1;?>
													@include('backend.repeater.row-who')
												@endforeach
											@endif
											</tbody>
										</table>
										<div class="text-right">
											<button class="btn btn-primary"
													onclick="repeater(event,this,'{{ route('get.layout') }}','.index', 'who', '.who')">Thêm
											</button>
										</div>
									</div>
								</div>
								<div class="col-sm-5">
									<div class="repeater" id="repeater">
										<table class="table table-bordered table-hover choice">
											<thead>
											<tr>
												<th style="width: 30px;">STT</th>
												<th>Tiêu đề</th>
												<th style="width: 20px"></th>
											</tr>
											</thead>
											<tbody id="sortable">
											@if (!empty(@$data->content->choice_select))
												@foreach (@$data->content->choice_select as $id => $value)
													<?php $index = $loop->index + 1;?>
													@include('backend.repeater.row-choice')
												@endforeach
											@endif
											</tbody>
										</table>
										<div class="text-right">
											<button class="btn btn-primary"
													onclick="repeater(event,this,'{{ route('get.layout') }}','.index', 'choice', '.choice')">Thêm
											</button>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="tab-pane " id="seo">
							<div class="row">
								<div class="col-sm-2">
									<div class="form-group">
										<label>Hình ảnh</label>
										<div class="image">
											<div class="image__thumbnail">
												<img src="{{ $data->image ?  $data->image : __IMAGE_DEFAULT__ }}"
													 data-init="{{ __IMAGE_DEFAULT__ }}">
												<a href="javascript:void(0)" class="image__delete" onclick="urlFileDelete(this)">
													<i class="fa fa-times"></i></a>
												<input type="hidden" value="{{ @$data->image }}" name="image"  />
												<div class="image__button" onclick="fileSelect(this)"><i class="fa fa-upload"></i> Upload</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-10">
								
									<div class="form-group">
										<label for="">Tiêu đề trang</label>
										<input type="text" name="meta_title" class="form-control" value="{{ @$data->meta_title }}">
									</div>
									<div class="form-group">
										<label for="">Mô tả trang</label>
										<textarea name="meta_description"
												  class="form-control" rows="5">{!! @$data->meta_description !!}</textarea>
									</div>
									<div class="form-group">
										<label for="">Từ khóa</label>
										<input type="text" name="meta_keyword" class="form-control" value="{!! @$data->meta_keyword !!}">
									</div>

									<div class="form-group">
										<label for="">Tiêu đề thẻ H1 ẩn</label>
										<input type="text" name="title_h1" class="form-control" value="{!! @$data->title_h1 !!}">
									</div>

								</div>
							</div>
						</div>
						<button type="submit" class="btn btn-primary">Lưu lại</button>
					</div>
				</form>
			</div>
		</div>
	</div>
@stop