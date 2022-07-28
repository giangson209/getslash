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
								<a href="#activity1" data-toggle="tab" aria-expanded="true">Khối Banner</a>
							</li>

							<li class="">
								<a href="#activity2" data-toggle="tab" aria-expanded="true">Khối Giải pháp</a>
							</li>

							<li class="">
								<a href="#activity3" data-toggle="tab" aria-expanded="true">Khối Đối tác + Tích hợp</a>
							</li>

							<li class="">
								<a href="#activity4" data-toggle="tab" aria-expanded="true">Khối Câu hỏi</a>
							</li>
							<li class="">
								<a href="#activity5" data-toggle="tab" aria-expanded="true">Khối Form thông tin</a>
							</li>
							<li class="">
								<a href="#activity6" data-toggle="tab" aria-expanded="true">Khối Báo chí</a>
							</li>
							<li class="">
								<a href="#activity7" data-toggle="tab" aria-expanded="true">Khối Feedback</a>
							</li>
							<li class="">
								<a href="#activity8" data-toggle="tab" aria-expanded="true">Khối Phương thức</a>
							</li>
							<li class="">
								<a href="#seo" data-toggle="tab" aria-expanded="true">Cấu hình seo</a>
							</li>
				        </ul>
				    </div>
				    <?php if(!empty($data->content)){
						$content = $data->content;
					} ?>
				    <div class="tab-content">

						<div class="tab-pane active" id="activity1">
							<div class="row">
								<div class="col-sm-2">
									<div class="form-group">
										<label>Hình ảnh</label>
										<div class="image">
											<div class="image__thumbnail">
												<img src="{{ !empty($content->top->banner) ?  $content->top->banner : __IMAGE_DEFAULT__ }}"
													 data-init="{{ __IMAGE_DEFAULT__ }}">
												<a href="javascript:void(0)" class="image__delete" onclick="urlFileDelete(this)">
													<i class="fa fa-times"></i>
												</a>
												<input type="hidden" value="{{ @$content->top->banner }}" name="content[top][banner]"  />
												<div class="image__button" onclick="fileSelect(this)"><i class="fa fa-upload"></i> Upload</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-10">

									<div class="form-group">
										<label for="">Tiêu đề 1</label>
										<textarea name="content[top][title_1]" class="form-control" cols="30" rows="5">{!! @$content->top->title_1 !!}</textarea>
									</div>

									<div class="form-group">
										<label for="">Tiêu đề 2</label>
										<textarea name="content[top][title_2]" class="form-control" cols="30" rows="5">{!! @$content->top->title_2 !!}</textarea>
									</div>

									<div class="form-group">
										<label for="">Nội dung</label>
										<textarea name="content[top][desc]" class="form-control" cols="30" rows="5">{!! @$content->top->desc !!}</textarea>
									</div>

									<div class="form-group">
										<label for="">Tiêu đề nut trái</label>
										<input type="text" name="content[top][nut]" value="{!! @$content->top->nut !!}" class="form-control" >
									</div>

									<div class="form-group">
										<label for="">Liên kết</label>
										<input type="text" name="content[top][link]" value="{!! @$content->top->link !!}" class="form-control" >
									</div>

									<div class="form-group">
										<label for="">Tiêu đề nut phải</label>
										<input type="text" name="content[bot][nut]" value="{!! @$content->bot->nut !!}" class="form-control" >
									</div>

									<div class="form-group">
										<label for="">Liên kết</label>
										<input type="text" name="content[bot][link]" value="{!! @$content->bot->link !!}" class="form-control" >
									</div>
								</div>

							</div>
						</div>
						<div class="tab-pane " id="activity5">
							<div class="row">
								<div class="col-sm-3">
									<div class="form-group">
										<label for="">Tiêu đề</label>
										<input type="text" name="content[khoi5][title]" value="{!! @$content->khoi5->title !!}" class="form-control" >
									</div>
									<div class="form-group">
										<label for="">Tiêu đề nút</label>
										<input type="text" name="content[khoi5][nut]" value="{!! @$content->khoi5->nut !!}" class="form-control" >
									</div>
								</div>

								<div class="col-sm-3">
									<div class="form-group">
										<label for="">Field Họ và tên</label>
										<input type="text" name="content[khoi5][field_name]" value="{!! @$content->khoi5->field_name !!}" class="form-control" >
									</div>
									<div class="form-group">
										<label for="">Placeholder Họ và tên</label>
										<input type="text" name="content[khoi5][placeholder_name]" value="{!! @$content->khoi5->placeholder_name !!}" class="form-control" >
									</div>
								</div>
								<div class="col-sm-3">
									<div class="form-group">
										<label for="">Field Phone</label>
										<input type="text" name="content[khoi5][field_phone]" value="{!! @$content->khoi5->field_phone !!}" class="form-control" >
									</div>
									<div class="form-group">
										<label for="">Placeholder Phone</label>
										<input type="text" name="content[khoi5][placeholder_phone]" value="{!! @$content->khoi5->placeholder_phone !!}" class="form-control" >
									</div>
								</div>
								<div class="col-sm-3">
									<div class="form-group">
										<label for="">Field Cửa hàng</label>
										<input type="text" name="content[khoi5][field_shop]" value="{!! @$content->khoi5->field_shop !!}" class="form-control" >
									</div>
									<div class="form-group">
										<label for="">Placeholder Cửa hàng</label>
										<input type="text" name="content[khoi5][placeholder_shop]" value="{!! @$content->khoi5->placeholder_shop !!}" class="form-control" >
									</div>
								</div>

							</div>
						</div>
						<div class="tab-pane " id="activity6">
							<div class="row">
								<div class="col-sm-12">
									<div class="form-group">
										<label for="">Tiêu đề 2</label>
										<input type="text" name="content[khoi6][title]" value="{!! @$content->khoi6->title !!}" class="form-control" >
									</div>
									<div class="form-group">
										<label for="">Tiêu đề 2</label>
										<textarea name="content[khoi6][title_2]" class="form-control content" cols="30" rows="5">{!! @$content->khoi6->title_2 !!}</textarea>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane " id="activity7">
							<div class="row">
								<div class="col-sm-12">
									<div class="form-group">
										<label for="">Tiêu đề 2</label>
										<input type="text" name="content[khoi7][title]" value="{!! @$content->khoi7->title !!}" class="form-control" >
									</div>
									<div class="form-group">
										<label for="">Tiêu đề 2</label>
										<textarea name="content[khoi7][title_2]" class="form-control content" cols="30" rows="5">{!! @$content->khoi7->title_2 !!}</textarea>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane" id="activity2">
							<div class="row">
								<div class="col-sm-12">
									<div class="form-group">
										<label for="">Tiêu đề 1</label>
										<input type="text" name="content[khoi2][title]" value="{!! @$content->khoi2->title !!}" class="form-control" >
									</div>
									<div class="form-group">
										<label for="">Tiêu đề 2</label>
										<textarea name="content[khoi2][title_2]" class="form-control content" cols="30" rows="5">{!! @$content->khoi2->title_2 !!}</textarea>
									</div>
									<div class="repeater" id="repeater">
										<table class="table table-bordered table-hover khoi2">
											<thead>
											<tr>
												<th style="width: 30px;">STT</th>
												<th>Ảnh</th>
												<th>Thông tin</th>
												<th>Nút</th>
												<th style="width: 20px"></th>
											</tr>
											</thead>
											<tbody id="sortable">
											@if (!empty($content->khoi2_list))
												@foreach ($content->khoi2_list as $id => $value)
													<?php $index = $loop->index + 1;?>
													@include('backend.repeater.row-khoi2')
												@endforeach
											@endif
											</tbody>
										</table>
										<div class="text-right">
											<button class="btn btn-primary" onclick="repeater(event,this,'{{ route('get.layout') }}','.index', 'khoi2', '.khoi2')">Thêm</button>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="tab-pane" id="activity3">
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<label for="">Tiêu đề đối tác 1</label>
										<input type="text" name="content[khoi3][title_1]" value="{!! @$content->khoi3->title_1 !!}" class="form-control" >
									</div>

									<div class="form-group">
										<label for="">Tiêu đề đối tác 2</label>
										<input type="text" name="content[khoi3][title_2]" value="{!! @$content->khoi3->title_2 !!}" class="form-control" >
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label for="">Tiêu đề dễ dàng 1</label>
										<input type="text" name="content[khoi3][titledd_1]" value="{!! @$content->khoi3->titledd_1 !!}" class="form-control" >
									</div>

									<div class="form-group">
										<label for="">Tiêu đề dễ dàng 2</label>
										<input type="text" name="content[khoi3][titledd_2]" value="{!! @$content->khoi3->titledd_2 !!}" class="form-control" >
									</div>
								</div>
							</div>
						</div>

						<div class="tab-pane" id="activity4">
							<div class="row">
								<div class="col-sm-10">
									<div class="form-group">
										<label for="">Tiêu đề 1</label>
										<input type="text" name="content[khoi4][title_1]" value="{!! @$content->khoi4->title_1 !!}" class="form-control" >
									</div>

									<div class="form-group">
										<label for="">Tiêu đề 2</label>
										<input type="text" name="content[khoi4][title_2]" value="{!! @$content->khoi4->title_2 !!}" class="form-control" >
									</div>
								</div>

								<div class="col-sm-2">
									<div class="form-group">
										<label>Hình ảnh</label>
										<div class="image">
											<div class="image__thumbnail">
												<img src="{{ @$content->khoi4->image ?  @$content->khoi4->image : __IMAGE_DEFAULT__ }}"
													 data-init="{{ __IMAGE_DEFAULT__ }}">
												<a href="javascript:void(0)" class="image__delete" onclick="urlFileDelete(this)">
													<i class="fa fa-times"></i></a>
												<input type="hidden" value="{{ @$content->khoi4->image }}" name="content[khoi4][image]"  />
												<div class="image__button" onclick="fileSelect(this)"><i class="fa fa-upload"></i> Upload</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-12">
									<div class="repeater" id="repeater">
										<table class="table table-bordered table-hover toturial1">
											<thead>
											<tr>
												<th style="width: 30px;">STT</th>
												<th style="width: 200px;">Hình ảnh</th>
												<th>Thông tin</th>
												<th style="width: 20px"></th>
											</tr>
											</thead>
											<tbody id="sortable">
											@if (!empty($content->toturial1))
												@foreach ($content->toturial1 as $id => $value)
													<?php $index = $loop->index + 1;?>
													@include('backend.repeater.row-toturial1')
												@endforeach
											@endif
											</tbody>
										</table>
										<div class="text-right">
											<button class="btn btn-primary" onclick="repeater(event,this,'{{ route('get.layout') }}','.index', 'toturial1', '.toturial1')">Thêm</button>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="tab-pane" id="activity8">
							<div class="row">
								<div class="col-sm-10">
									<div class="form-group">
										<label for="">Tiêu đề 1</label>
										<input type="text" name="content[khoi8][title_1]" value="{!! @$content->khoi8->title_1 !!}" class="form-control" >
									</div>

									<div class="form-group">
										<label for="">Tiêu đề 2</label>
										<input type="text" name="content[khoi8][title_2]" value="{!! @$content->khoi8->title_2 !!}" class="form-control" >
									</div>
								</div>

								<div class="col-sm-2">
									<div class="form-group">
										<label>Hình ảnh</label>
										<div class="image">
											<div class="image__thumbnail">
												<img src="{{ @$content->khoi8->image ?  @$content->khoi8->image : __IMAGE_DEFAULT__ }}"
													 data-init="{{ __IMAGE_DEFAULT__ }}">
												<a href="javascript:void(0)" class="image__delete" onclick="urlFileDelete(this)">
													<i class="fa fa-times"></i></a>
												<input type="hidden" value="{{ @$content->khoi8->image }}" name="content[khoi8][image]"  />
												<div class="image__button" onclick="fileSelect(this)"><i class="fa fa-upload"></i> Upload</div>
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