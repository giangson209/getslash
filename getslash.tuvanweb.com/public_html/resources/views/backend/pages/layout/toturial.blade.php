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
								<a href="#contentPages1" data-toggle="tab" aria-expanded="true">Khối Banner</a>
							</li>
					<!-- 		<li class="">
								<a href="#contentPages2" data-toggle="tab" aria-expanded="true">Khối 2</a>
							</li> -->
							<li class="">
								<a href="#contentPages3" data-toggle="tab" aria-expanded="true">Xác minh</a>
							</li>
							<li class="">
								<a href="#contentPages4" data-toggle="tab" aria-expanded="true">Thanh toán</a>
							</li>
							<li class="">
								<a href="#contentPages5" data-toggle="tab" aria-expanded="true">Video</a>
							</li>
							<li class="">
								<a href="#seo" data-toggle="tab" aria-expanded="true">Cấu hình seo</a>
							</li>
						</ul>
					</div>
					<div class="tab-content">
						<div class="tab-pane active" id="contentPages1">
							<div class="row">
								<div class="col-sm-8">
									<div class="form-group">
										<label for="">Tiêu đề</label>
										<textarea type="text" class="form-control" name="content[banner][title]">{!! @$data->content->banner->title !!}</textarea>  
									</div>

									<div class="form-group">
										<label for="">Nút</label>
										<textarea type="text" class="form-control" name="content[banner][nut]">{!! @$data->content->banner->nut !!}</textarea>  
									</div>

									<div class="form-group">
										<label for="">Link</label>
										<textarea type="text" class="form-control" name="content[banner][link]">{!! @$data->content->banner->link !!}</textarea>  
									</div>
								</div>
								<div class="col-sm-2">
									<div class="form-group">
										<label>Banner PC</label>
										<div class="image">
											<div class="image__thumbnail">
												<img src="{{ @$data->content->banner->pc  ?  @$data->content->banner->pc  : __IMAGE_DEFAULT__ }}"
													 data-init="{{ __IMAGE_DEFAULT__ }}">
												<a href="javascript:void(0)" class="image__delete" onclick="urlFileDelete(this)">
													<i class="fa fa-times"></i></a>
												<input type="hidden" value="{{ @$data->content->banner->pc }}" name="content[banner][pc]"  />
												<div class="image__button" onclick="fileSelect(this)"><i class="fa fa-upload"></i> Upload</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-2">
									<div class="form-group">
										<label>Banner mobile</label>
										<div class="image">
											<div class="image__thumbnail">
												<img src="{{ @$data->content->banner->mobile  ?  @$data->content->banner->mobile  : __IMAGE_DEFAULT__ }}"
													 data-init="{{ __IMAGE_DEFAULT__ }}">
												<a href="javascript:void(0)" class="image__delete" onclick="urlFileDelete(this)">
													<i class="fa fa-times"></i></a>
												<input type="hidden" value="{{ @$data->content->banner->mobile }}" name="content[banner][mobile]"  />
												<div class="image__button" onclick="fileSelect(this)"><i class="fa fa-upload"></i> Upload</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="tab-pane" id="contentPages2">
							<div class="row">
								<div class="col-sm-12">
									<div class="form-group">
										<label for="">Tiêu đề</label>
										<input type="text" class="form-control" name="content[khoi2][title]" value="{{ @$data->content->khoi2->title }}">
									</div>

									<div class="form-group">
										<label for="">Tiêu đề 2</label>
										<textarea type="text" class="form-control" name="content[khoi2][sub_title]">{!! @$data->content->khoi2->sub_title !!}</textarea> 
									</div>
									<div class="repeater" id="repeater">
										<table class="table table-bordered table-hover about">
											<thead>
											<tr>
												<th style="width: 30px;">STT</th>
												<th style="width: 200px;">Hình ảnh</th>
												<th>Mô tả</th>
												<th style="width: 20px"></th>
											</tr>
											</thead>
											<tbody id="sortable">
											@if (!empty(@$data->content->about))
												@foreach (@$data->content->about as $id => $value)
													<?php $index = $loop->index + 1;?>
													@include('backend.repeater.row-about')
												@endforeach
											@endif
											</tbody>
										</table>
										<div class="text-right">
											<button class="btn btn-primary"
													onclick="repeater(event,this,'{{ route('get.layout') }}','.index', 'about', '.about')">Thêm
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
										<input type="text" class="form-control" name="content[khoi3][title]" value="{{ @$data->content->khoi3->title }}">
									</div>

									<div class="form-group">
										<label for="">Tiêu đề 2</label>
										<textarea type="text" class="form-control" name="content[khoi3][sub_title]">{!! @$data->content->khoi3->sub_title !!}</textarea> 
									</div>

									<div class="col-sm-12">
										<div class="repeater" id="repeater">
											<table class="table table-bordered table-hover toturial">
												<thead>
												<tr>
													<th style="width: 30px;">STT</th>
													<th style="width: 200px;">Hình ảnh</th>
													<th>Mô tả</th>
													<th style="width: 20px"></th>
												</tr>
												</thead>
												<tbody id="sortable">
												@if (!empty(@$data->content->toturial))
													@foreach (@$data->content->toturial as $id => $value)
														<?php $index = $loop->index + 1;?>
														@include('backend.repeater.row-toturial')
													@endforeach
												@endif
												</tbody>
											</table>
											<div class="text-right">
												<button class="btn btn-primary"
														onclick="repeater(event,this,'{{ route('get.layout') }}','.index', 'toturial', '.toturial')">Thêm
												</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="tab-pane" id="contentPages5">
							<div class="row">
								<div class="col-sm-12">
									<div class="form-group">
										<label for="">Tiêu đề</label>
										<input type="text" class="form-control" name="content[khoi5][title]" value="{{ @$data->content->khoi5->title }}">
									</div>

									<div class="form-group">
										<label for="">Tiêu đề 2</label>
										<textarea type="text" class="form-control" name="content[khoi5][sub_title]">{!! @$data->content->khoi5->sub_title !!}</textarea> 
									</div>

									<div class="form-group">
										<label for="">Tiêu đề link</label>
										<input type="text" class="form-control" name="content[khoi5][nut]" value="{{ @$data->content->khoi5->nut }}">
									</div>

									<div class="form-group">
										<label for="">Link</label>
										<input type="text" class="form-control" name="content[khoi5][link]" value="{{ @$data->content->khoi5->link }}">
									</div>
								</div>
							</div>
						</div>

						<div class="tab-pane" id="contentPages4">
							<div class="row">
								<div class="col-sm-12">
									<div class="form-group">
										<label for="">Tiêu đề</label>
										<input type="text" class="form-control" name="content[khoi4][title]" value="{{ @$data->content->khoi4->title }}">
									</div>

									<div class="form-group">
										<label for="">Tiêu đề 2</label>
										<textarea type="text" class="form-control" name="content[khoi4][sub_title]">{!! @$data->content->khoi4->sub_title !!}</textarea> 
									</div>

									<div class="col-sm-12">
										<div class="repeater" id="repeater">
											<table class="table table-bordered table-hover toturial1">
												<thead>
												<tr>
													<th style="width: 30px;">STT</th>
													<th style="width: 200px;">Hình ảnh</th>
													<th>Mô tả</th>
													<th style="width: 20px"></th>
												</tr>
												</thead>
												<tbody id="sortable">
												@if (!empty(@$data->content->toturial1))
													@foreach (@$data->content->toturial1 as $id => $value)
														<?php $index = $loop->index + 1;?>
														@include('backend.repeater.row-toturial1')
													@endforeach
												@endif
												</tbody>
											</table>
											<div class="text-right">
												<button class="btn btn-primary"
														onclick="repeater(event,this,'{{ route('get.layout') }}','.index', 'toturial1', '.toturial1')">Thêm
												</button>
											</div>
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