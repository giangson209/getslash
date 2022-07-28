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
								<a href="#activity6" data-toggle="tab" aria-expanded="true">Khối Deal HOT</a>
							</li>

							<li class="">
								<a href="#activity4" data-toggle="tab" aria-expanded="true">Khối Video</a>
							</li>

							<li class="">
								<a href="#activity3" data-toggle="tab" aria-expanded="true">Khối Trải nghiệm</a>
							</li>
				        </ul>
				    </div>
				    <?php if(!empty($data->content)){
						$content = $data->content;
					} ?>
				    <div class="tab-content">

						<div class="tab-pane active" id="activity1">
							<div class="row">
								<div class="col-sm-12">

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
								<div class="col-sm-4">

									<div class="form-group">
										<label for="">Tiêu đề sản phẩm</label>
										<input type="text" class="form-control" name="content[khoi3][title_pro]" value="{{ @$data->content->khoi3->title_pro }}">
									</div>

									<div class="form-group">
										<label for="">Tiêu đề sản phẩm sub</label>
										<textarea type="text" class="form-control" name="content[khoi3][sub_title_pro]">{!! @$data->content->khoi3->sub_title_pro !!}</textarea>  
									</div>

								</div>
								<div class="col-sm-4">
									<div class="form-group">
										<label for="">Tiêu đề danh mục</label>
										<input type="text" class="form-control" name="content[khoi3][title_cat]" value="{{ @$data->content->khoi3->title_cat }}">
									</div>

									<div class="form-group">
										<label for="">Tiêu đề danh mục sub</label>
										<textarea type="text" class="form-control" name="content[khoi3][sub_title_cat]">{!! @$data->content->khoi3->sub_title_cat !!}</textarea>  
									</div>

								</div>
								<div class="col-sm-4">
									<div class="form-group">
										<label for="">Tiêu đề đối tác</label>
										<input type="text" class="form-control" name="content[khoi3][title_pat]" value="{{ @$data->content->khoi3->title_pat }}">
									</div>

									<div class="form-group">
										<label for="">Tiêu đề đối tác sub</label>
										<textarea type="text" class="form-control" name="content[khoi3][sub_title_pat]">{!! @$data->content->khoi3->sub_title_pat !!}</textarea>  
									</div>
								</div>

							</div>
						</div>
									
						<div class="tab-pane" id="activity2">
							<div class="row">
								<div class="col-sm-12">
									<div class="repeater" id="repeater">
										<table class="table table-bordered table-hover banners">
											<thead>
											<tr>
												<th style="width: 30px;">STT</th>
												<th>Tiêu đề</th>
												<th>Mô tả</th>
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

						<div class="tab-pane" id="activity3">
							<div class="row">
								<div class="col-sm-12">
									<div class="form-group">
										<label for="">Tiêu đề 1</label>
										<input type="text" name="content[review][title_1]" value="{!! @$content->review->title_1 !!}" class="form-control" >
									</div>

									<div class="form-group">
										<label for="">Tiêu đề 2</label>
										<input type="text" name="content[review][title_2]" value="{!! @$content->review->title_2 !!}" class="form-control" >
									</div>
									<div class="repeater" id="repeater">
										<table class="table table-bordered table-hover partner">
											<thead>
											<tr>
												<th style="width: 30px;">STT</th>
												<th style="width: 200px;">Hình ảnh</th>
												<th>Thông tin</th>
												<th style="width: 20px"></th>
											</tr>
											</thead>
											<tbody id="sortable">
											@if (!empty($content->partner))
												@foreach ($content->partner as $id => $value)
													<?php $index = $loop->index + 1;?>
													@include('backend.repeater.row-partner')
												@endforeach
											@endif
											</tbody>
										</table>
										<div class="text-right">
											<button class="btn btn-primary" onclick="repeater(event,this,'{{ route('get.layout') }}','.index', 'partner', '.partner')">Thêm</button>
										</div>
									</div>
								</div>

								<div class="col-sm-6">
									<div class="form-group">
										<label for="">Sao</label>
										<textarea type="text" class="form-control content" name="content[ios][sao]">{!! @$data->content->ios->sao !!}</textarea>  
									</div>
									<div class="form-group">
										<div class="form-group">
											<label>Hình ảnh Chợ ứng dụng</label>
											<div class="image">
												<div class="image__thumbnail">
													<img src="{{ @$data->content->ios->image ?  @$data->content->ios->image : __IMAGE_DEFAULT__ }}"
														 data-init="{{ __IMAGE_DEFAULT__ }}">
													<a href="javascript:void(0)" class="image__delete" onclick="urlFileDelete(this)">
														<i class="fa fa-times"></i></a>
													<input type="hidden" value="{{ @@$data->content->ios->image }}" name="content[ios][image]"  />
													<div class="image__button" onclick="fileSelect(this)"><i class="fa fa-upload"></i> Upload</div>
												</div>
											</div>
										</div>
									</div>

									<div class="form-group">
										<label for="">Link</label>
										<input type="text" name="content[ios][link]" value="{!! @$content->ios->link !!}" class="form-control" >
									</div>

									<div class="form-group">
										<label for="">Ghi chú</label>
										<textarea type="text" class="form-control" name="content[ios][note]">{!! @$data->content->ios->note !!}</textarea>  
									</div>

									<div class="form-group">
										<label for="">Nút</label>
										<input type="text" name="content[ios][nut]" value="{!! @$content->ios->nut !!}" class="form-control" >
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label for="">Sao</label>
										<textarea type="text" class="form-control content" name="content[android][sao]">{!! @$data->content->android->sao !!}</textarea>  
									</div>
									<div class="form-group">
										<div class="form-group">
											<label>Hình ảnh Chợ ứng dụng</label>
											<div class="image">
												<div class="image__thumbnail">
													<img src="{{ @$data->content->android->image ?  @$data->content->android->image : __IMAGE_DEFAULT__ }}"
														 data-init="{{ __IMAGE_DEFAULT__ }}">
													<a href="javascript:void(0)" class="image__delete" onclick="urlFileDelete(this)">
														<i class="fa fa-times"></i></a>
													<input type="hidden" value="{{ @@$data->content->android->image }}" name="content[android][image]"  />
													<div class="image__button" onclick="fileSelect(this)"><i class="fa fa-upload"></i> Upload</div>
												</div>
											</div>
										</div>
									</div>

									<div class="form-group">
										<label for="">Link</label>
										<input type="text" name="content[android][link]" value="{!! @$content->android->link !!}" class="form-control" >
									</div>

									<div class="form-group">
										<label for="">Ghi chú</label>
										<textarea type="text" class="form-control" name="content[android][note]">{!! @$data->content->android->note !!}</textarea>  
									</div>

									<div class="form-group">
										<label for="">Nút</label>
										<input type="text" name="content[android][nut]" value="{!! @$content->android->nut !!}" class="form-control" >
									</div>
								</div>

							</div>
						</div>

						<div class="tab-pane" id="activity4">
							<div class="row">
								<div class="col-sm-12">
									<div class="form-group">
										<label for="">Tiêu đề 1</label>
										<textarea type="text" class="form-control " name="content[video][title_1]">{!! @$data->content->video->title_1 !!}</textarea>  
									</div>
									<div class="form-group">
										<label for="">Tiêu đề 2</label>
										<input type="text" name="content[video][title_2]" value="{!! @$content->video->title_2 !!}" class="form-control" >
									</div>
									<div class="form-group">
										<div class="form-group">
											<label>Hình ảnh</label>
											<div class="image">
												<div class="image__thumbnail">
													<img src="{{ @$data->content->video->image ?  @$data->content->video->image : __IMAGE_DEFAULT__ }}"
														 data-init="{{ __IMAGE_DEFAULT__ }}">
													<a href="javascript:void(0)" class="image__delete" onclick="urlFileDelete(this)">
														<i class="fa fa-times"></i></a>
													<input type="hidden" value="{{ @@$data->content->video->image }}" name="content[video][image]"  />
													<div class="image__button" onclick="fileSelect(this)"><i class="fa fa-upload"></i> Upload</div>
												</div>
											</div>
										</div>
									</div>

									<div class="form-group">
										<label for="">Link</label>
										<input type="text" name="content[video][link]" value="{!! @$content->video->link !!}" class="form-control" >
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