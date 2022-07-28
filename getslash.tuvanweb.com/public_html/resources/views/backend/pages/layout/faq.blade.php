@extends('backend.layouts.app')
@section('controller','Trang')
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
								<label for="">Trang</label>
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
								<a href="#contentPages1" data-toggle="tab" aria-expanded="true">Banner</a>
							</li>
							<li class="">
								<a href="#contentPages2" data-toggle="tab" aria-expanded="true">QR</a>
							</li>
							<li class="">
								<a href="#contentPages3" data-toggle="tab" aria-expanded="true">Contact</a>
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
										<input type="text" class="form-control" name="content[banner][title]" value="{{ @$data->content->banner->title }}">
									</div>

									<div class="form-group">
										<label for="">Tiêu đề 2</label>
										<textarea type="text" class="form-control" name="content[banner][sub_title]">{!! @$data->content->banner->sub_title !!}</textarea>
									</div>

									<div class="form-group">
										<label for="">Tiêu đề search</label>
										<input type="text" class="form-control" name="content[search][title]" value="{{ @$data->content->search->title }}">
									</div>

									<div class="form-group">
										<label for="">Placeholder search</label>
										<input type="text" class="form-control" name="content[search][sub_title]" value="{{ @$data->content->search->sub_title }}">
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane" id="contentPages2">
							<div class="row">
								<div class="col-sm-2">
									<div class="form-group">
										<label for="">Nút</label>
										<input type="text" class="form-control" name="content[qr][nut]" value="{{ @$data->content->qr->nut }}">
									</div>

									<div class="form-group">
										<label for="">Link</label>
										<input type="text" class="form-control" name="content[qr][link]" value="{{ @$data->content->qr->link }}">
									</div>
								</div>
								<div class="col-sm-10">
									<div class="form-group">
										<label for="">Tiêu đề</label>
										<textarea type="text" class="form-control" name="content[qr][title]">{!! @$data->content->qr->title !!}</textarea>
									</div>

									<div class="form-group">
										<label for="">Tiêu đề 2</label>
										<textarea type="text" class="form-control" name="content[qr][sub_title]">{!! @$data->content->qr->sub_title !!}</textarea>
									</div>

									<div class="repeater" id="repeater">
										<table class="table table-bordered table-hover slide">
											<thead>
											<tr>
												<th style="width: 30px;">STT</th>
												<th style="width: 200px;">Hình ảnh</th>
												<th style="width: 20px"></th>
											</tr>
											</thead>
											<tbody id="sortable">
											@if (!empty(@$data->content->slide))
												@foreach ($data->content->slide as $id => $value)
													<?php $index = $loop->index + 1;?>
													@include('backend.repeater.row-slide')
												@endforeach
											@endif
											</tbody>
										</table>
										<div class="text-right">
											<button class="btn btn-primary"
													onclick="repeater(event,this,'{{ route('get.layout') }}','.index', 'slide', '.slide')">Thêm
											</button>
										</div>
									</div>

								</div>
							</div>
						</div>
						<div class="tab-pane" id="contentPages3">
							<div class="row">
								<div class="col-sm-12">
									<div class="form-group">
										<label for="">Tiêu đề</label>
										<textarea type="text" class="form-control" name="content[contact][title]">{!! @$data->content->contact->title !!}</textarea>
									</div>

									<div class="form-group">
										<label for="">Tiêu đề 2</label>
										<textarea type="text" class="form-control" name="content[contact][sub_title]">{!! @$data->content->contact->sub_title !!}</textarea>
									</div>

									<div class="form-group">
										<label for="">Nút</label>
										<input type="text" class="form-control" name="content[contact][nut]" value="{{ @$data->content->contact->nut }}">
									</div>

									<div class="form-group">
										<label for="">Link</label>
										<input type="text" class="form-control" name="content[contact][link]" value="{{ @$data->content->contact->link }}">
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