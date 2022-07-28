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
								<a href="#activity3" data-toggle="tab" aria-expanded="true">Về Slash</a>
							</li>

							<li class="">
								<a href="#activity2" data-toggle="tab" aria-expanded="true">Giá trị cốt lõi</a>
							</li>

							<li class="">
								<a href="#activity4" data-toggle="tab" aria-expanded="true">Lợi ích</a>
							</li>
							<li class="">
								<a href="#activity5" data-toggle="tab" aria-expanded="true">Con số ấn tượng</a>
							</li>
							<li class="">
								<a href="#activity6" data-toggle="tab" aria-expanded="true">Form</a>
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
										<textarea name="content[top][title_1]" class="form-control content" cols="30" rows="5">{!! @$content->top->title_1 !!}</textarea>
									</div>

									<div class="form-group">
										<label for="">Tiêu đề 2</label>
										<textarea name="content[top][title_2]" class="form-control " cols="30" rows="5">{!! @$content->top->title_2 !!}</textarea>
									</div>

									<div class="form-group">
										<label for="">Tiêu đề nut </label>
										<input type="text" name="content[top][nut]" value="{!! @$content->top->nut !!}" class="form-control" >
									</div>

									<div class="form-group">
										<label for="">Liên kết</label>
										<input type="text" name="content[top][link]" value="{!! @$content->top->link !!}" class="form-control" >
									</div>

								</div>

							</div>
						</div>
						<div class="tab-pane " id="activity6">
							<div class="row">
								<div class="col-sm-3">
									<div class="form-group">
										<label for="">Tiêu đề</label>
										<input type="text" name="content[khoi5][title]" value="{!! @$content->khoi5->title !!}" class="form-control" >
									</div>
									<div class="form-group">
										<label for="">Tiêu đề phụ</label>
										<input type="text" name="content[khoi5][phu]" value="{!! @$content->khoi5->phu !!}" class="form-control" >
									</div>
								</div>

								<!-- <div class="col-sm-3">
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
										<label for="">Field email</label>
										<input type="text" name="content[khoi5][field_email]" value="{!! @$content->khoi5->field_email !!}" class="form-control" >
									</div>
									<div class="form-group">
										<label for="">Placeholder email</label>
										<input type="text" name="content[khoi5][placeholder_email]" value="{!! @$content->khoi5->placeholder_email !!}" class="form-control" >
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
										<label for="">Field vị trí ứng tuyển </label>
										<input type="text" name="content[khoi5][field_pos]" value="{!! @$content->khoi5->field_pos !!}" class="form-control" >
									</div>
									<div class="form-group">
										<label for="">Placeholder vị trí ứng tuyển</label>
										<input type="text" name="content[khoi5][placeholder_pos]" value="{!! @$content->khoi5->placeholder_pos !!}" class="form-control" >
									</div>
								</div> -->
								<div class="col-sm-2">
									<div class="form-group">
										<label>Hình ảnh</label>
										<div class="image">
											<div class="image__thumbnail">
												<img src="{{ @$content->khoi5->image ?  @$content->khoi5->image : __IMAGE_DEFAULT__ }}"
													 data-init="{{ __IMAGE_DEFAULT__ }}">
												<a href="javascript:void(0)" class="image__delete" onclick="urlFileDelete(this)">
													<i class="fa fa-times"></i></a>
												<input type="hidden" value="{{ @$content->khoi5->image }}" name="content[khoi5][image]"  />
												<div class="image__button" onclick="fileSelect(this)"><i class="fa fa-upload"></i> Upload</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane " id="activity5">
							<div class="row">
								<div class="col-sm-12">
									<div class="form-group">
										<label for="">Tiêu đề 2</label>
										<textarea name="content[khoi6][title_2]" class="form-control content" cols="30" rows="5">{!! @$content->khoi6->title_2 !!}</textarea>
									</div>
									<div class="form-group">
										<label for="">Tiêu đề 2</label>
										<input type="text" name="content[khoi6][title]" value="{!! @$content->khoi6->title !!}" class="form-control" >
									</div>
									<div class="repeater" id="repeater">
										<table class="table table-bordered table-hover banners">
											<thead>
											<tr>
												<th style="width: 30px;">STT</th>
												<th>Tiêu đề</th>
												<th>Thông tin</th>
												<th>Nút</th>
												<th style="width: 20px"></th>
											</tr>
											</thead>
											<tbody id="sortable">
											@if (!empty($content->summary))
												@foreach ($content->summary as $id => $value)
													<?php $index = $loop->index + 1;?>
													@include('backend.repeater.row-about-summary')
												@endforeach
											@endif
											</tbody>
										</table>
										<div class="text-right">
											<button class="btn btn-primary" onclick="repeater(event,this,'{{ route('get.layout') }}','.index', 'about-summary', '.banners')">Thêm</button>
										</div>
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
										<label for="">Tiêu đề Về Slash 1</label>
										<input type="text" name="content[khoi3][title_1]" value="{!! @$content->khoi3->title_1 !!}" class="form-control" >
									</div>

									<div class="form-group">
										<label for="">Tiêu đề Về Slash 2</label>
										<textarea type="text" name="content[khoi3][title_2]" class="form-control" >{!! @$content->khoi3->title_2 !!}</textarea>
									</div>

									<div class="form-group">
										<label for="">Tiêu đề Về Slash nút</label>
										<input type="text" name="content[khoi3][nut_1]" value="{!! @$content->khoi3->nut_1 !!}" class="form-control" >
									</div>

									<div class="form-group">
										<label for="">Link</label>
										<input type="text" name="content[khoi3][link_1]" value="{!! @$content->khoi3->link_1 !!}" class="form-control" >
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label for="">Tiêu đề ứng tuyển 1</label>
										<input type="text" name="content[khoi3][titledd_1]" value="{!! @$content->khoi3->titledd_1 !!}" class="form-control" >
									</div>

									<div class="form-group">
										<label for="">Tiêu đề ứng tuyển 2</label>
										<textarea type="text" name="content[khoi3][titledd_2]" class="form-control" >{!! @$content->khoi3->titledd_2 !!}</textarea>
									</div>

									<div class="form-group">
										<label for="">Tiêu đề ứng tuyển nút</label>
										<input type="text" name="content[khoi3][nut_2]" value="{!! @$content->khoi3->nut_2 !!}" class="form-control" >
									</div>

									<div class="form-group">
										<label for="">Link</label>
										<input type="text" name="content[khoi3][link_2]" value="{!! @$content->khoi3->link_2 !!}" class="form-control" >
									</div>
								</div>
							</div>
						</div>

						<div class="tab-pane" id="activity4">
							<div class="row">
								<div class="col-sm-12">
									<div class="form-group">
										<label for="">Tiêu đề 1</label>
										<input type="text" name="content[khoi4][title_1]" value="{!! @$content->khoi4->title_1 !!}" class="form-control" >
									</div>

									<div class="form-group">
										<label for="">Tiêu đề 2</label>
										<input type="text" name="content[khoi4][title_2]" value="{!! @$content->khoi4->title_2 !!}" class="form-control" >
									</div>
								</div>

								<div class="col-sm-12">
									<div class="repeater" id="repeater">
										<table class="table table-bordered table-hover toturial	">
											<thead>
											<tr>
												<th style="width: 30px;">STT</th>
												<th style="width: 200px;">Hình ảnh</th>
												<th>Thông tin</th>
												<th style="width: 20px"></th>
											</tr>
											</thead>
											<tbody id="sortable">
											@if (!empty($content->toturial))
												@foreach ($content->toturial as $id => $value)
													<?php $index = $loop->index + 1;?>
													@include('backend.repeater.row-toturial')
												@endforeach
											@endif
											</tbody>
										</table>
										<div class="text-right">
											<button class="btn btn-primary" onclick="repeater(event,this,'{{ route('get.layout') }}','.index', 'toturial', '.toturial')">Thêm</button>
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