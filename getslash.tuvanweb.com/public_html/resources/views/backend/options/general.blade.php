@extends('backend.layouts.app')
@section('controller','Cấu hình chung')
@section('action','Cập nhật')
@section('controller_route', route('backend.options.general'))
@section('content')
	<div class="content">
        <div class="clearfix"></div>
		@include('flash::message')
		<form action="{{ route('backend.options.general.post') }}" method="POST">
			@csrf
				<div class="nav-tabs-custom">
				<ul class="nav nav-tabs">
					<li class="active">
						<a href="#activity" data-toggle="tab" aria-expanded="true">Thông tin chung</a>
					</li>
					
					<li class="">
						<a href="#activity2" data-toggle="tab" aria-expanded="true">Cấu hình seo</a>
					</li>
					
			<!-- 		<li class="">
						<a href="#activity5" data-toggle="tab" aria-expanded="true">Thông tin</a>
					</li> -->

					<li class="">
						<a href="#activity3" data-toggle="tab" aria-expanded="true">Footer - Mạng xã hội</a>
					</li>

					<li class="">
						<a href="#activity4" data-toggle="tab" aria-expanded="true">Footer - Link</a>
					</li>

					<li class="">
						<a href="#activity6" data-toggle="tab" aria-expanded="true">Footer - Field</a>
					</li>

					<li class="">
						<a href="#activity8" data-toggle="tab" aria-expanded="true">Popup</a>
					</li>

					<li class="">
						<a href="#activity7" data-toggle="tab" aria-expanded="true">App</a>
					</li>

					<li class="">
						<a href="#activity10" data-toggle="tab" aria-expanded="true">Form bài viết</a>
					</li>

					<li class="">
						<a href="#activity9" data-toggle="tab" aria-expanded="true">Hướng dẫn đăng ký</a>
					</li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane" id="activity9">
						<div class="row">
							<div class="col-sm-12">
								<div class="form-group">
									<label for="">Tiêu đề</label>
									<input type="text" class="form-control" name="content[khoi2][title]" value="{{ @$content->khoi2->title }}">
								</div>

								<div class="form-group">
									<label for="">Tiêu đề 2</label>
									<textarea type="text" class="form-control" name="content[khoi2][sub_title]">{!! @$content->khoi2->sub_title !!}</textarea> 
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
										@if (!empty(@$content->about))
											@foreach (@$content->about as $id => $value)
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
					<div class="tab-pane" id="activity10">
						<div class="row">
							<div class="col-sm-12">
								<div class="form-group">
									<label for="">Tiêu đề</label>
									<input type="text" class="form-control" name="content[khoi3][title]" value="{{ @$content->khoi3->title }}">
								</div>

								<div class="form-group">
									<label for="">Tiêu đề 2</label>
									<textarea type="text" class="form-control" name="content[khoi3][sub_title]">{!! @$content->khoi3->sub_title !!}</textarea> 
								</div>

								<div class="form-group">
									<label for="">Form</label>
									<textarea type="text" class="form-control" name="content[khoi3][form]">{!! @$content->khoi3->form !!}</textarea>  
								</div>
								<div class="form-group">
									<label for="">Placeholder</label>
									<textarea type="text" class="form-control" name="content[khoi3][placeholder]">{!! @$content->khoi3->placeholder !!}</textarea>  
								</div>
								<div class="form-group">
									<label for="">Note</label>
									<textarea type="text" class="form-control" name="content[khoi3][note]">{!! @$content->khoi3->note !!}</textarea>  
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane active" id="activity">
						<div class="row">
							<div class="col-lg-2">
								<div class="form-group">
									<label>Favicon</label>
									<div class="image">
										<div class="image__thumbnail">
											<img src="{{ !empty($content->favicon) ? $content->favicon :  __IMAGE_DEFAULT__ }}"  data-init="{{ __IMAGE_DEFAULT__ }}">
											<a href="javascript:void(0)" class="image__delete" 
											onclick="urlFileDelete(this)">
											<i class="fa fa-times"></i></a>
											<input type="hidden" value="{{ @$content->favicon }}" name="content[favicon]"  />
											<div class="image__button" onclick="fileSelect(this)"><i class="fa fa-upload"></i> Upload</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-2">
								<div class="form-group">
									<label>Logo trắng</label>
									<div class="image">
										<div class="image__thumbnail">
											<img src="{{ !empty($content->logo) ? $content->logo :  __IMAGE_DEFAULT__ }}"  data-init="{{ __IMAGE_DEFAULT__ }}">
											<a href="javascript:void(0)" class="image__delete" 
											onclick="urlFileDelete(this)">
											<i class="fa fa-times"></i></a>
											<input type="hidden" value="{{ @$content->logo }}" name="content[logo]"  />
											<div class="image__button" onclick="fileSelect(this)"><i class="fa fa-upload"></i> Upload</div>
										</div>
									</div>
								</div>
							</div>

							<div class="col-lg-2">
								<div class="form-group">
									<label>Logo màu</label>
									<div class="image">
										<div class="image__thumbnail">
											<img src="{{ !empty($content->logo_color) ? $content->logo_color :  __IMAGE_DEFAULT__ }}"  data-init="{{ __IMAGE_DEFAULT__ }}">
											<a href="javascript:void(0)" class="image__delete"
											   onclick="urlFileDelete(this)">
												<i class="fa fa-times"></i></a>
											<input type="hidden" value="{{ @$content->logo_color }}" name="content[logo_color]"  />
											<div class="image__button" onclick="fileSelect(this)"><i class="fa fa-upload"></i> Upload</div>
										</div>
									</div>
								</div>
							</div>

							<div class="col-lg-2">
								<div class="form-group">
									<label>QR</label>
									<div class="image">
										<div class="image__thumbnail">
											<img src="{{ !empty($content->qr) ? $content->qr :  __IMAGE_DEFAULT__ }}"  data-init="{{ __IMAGE_DEFAULT__ }}">
											<a href="javascript:void(0)" class="image__delete"
											   onclick="urlFileDelete(this)">
												<i class="fa fa-times"></i></a>
											<input type="hidden" value="{{ @$content->qr }}" name="content[qr]"  />
											<div class="image__button" onclick="fileSelect(this)"><i class="fa fa-upload"></i> Upload</div>
										</div>
									</div>
								</div>
							</div>

							<div class="col-lg-2">
								<div class="form-group">
									<label>Hình ảnh đại diện khi chia sẻ</label>
									<div class="image">
										<div class="image__thumbnail">
											<img src="{{ !empty($content->logo_share) ? $content->logo_share :  __IMAGE_DEFAULT__ }}"  data-init="{{ __IMAGE_DEFAULT__ }}">
											<a href="javascript:void(0)" class="image__delete" 
											onclick="urlFileDelete(this)">
											<i class="fa fa-times"></i></a>
											<input type="hidden" value="{{ @$content->logo_share }}" name="content[logo_share]"  />
											<div class="image__button" onclick="fileSelect(this)"><i class="fa fa-upload"></i> Upload</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							
							<div class="col-sm-3">
								<div class="form-group">
									<label for="">Code Facebook ( Vị trí sau body )</label>
									<textarea name="content[code_facebook]" class="form-control" rows="10">{!! @$content->code_facebook !!}</textarea>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group">
									<label for="">Code Google Analytics ( Vị trí trong head )</label>
									<textarea name="content[google_analytics]" class="form-control" rows="10">{!! @$content->google_analytics !!}</textarea>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group">
									<label for="">Script ( Vị trí cuối trang )</label>
									<textarea name="content[script]" class="form-control" rows="10">{!! @$content->script !!}</textarea>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-sm-12">
								<div class="form-group">
									<label for="">Email</label>
									<input type="text" class="form-control" name="content[email]" value="{{ @$content->email }}">
								</div>

								<div class="form-group">
									<label for="">Email nhận CV</label>
									<input type="email" class="form-control" name="content[email_admin]" value="{{ @$content->email_admin }}">
								</div>

								<div class="form-group">
									<label class="custom-checkbox">
										<input type="checkbox" name="content[index_google]" value="1" {{ @$content->index_google == 1 ? 'checked' : null }}> 
										Cho phép google tìm kiếm
									</label>
								</div>

							</div>
							
						</div>
					</div>

					<div class="tab-pane" id="activity5">
						<div class="row">
							<div class="col-sm-12">
								<div class="form-group">
									<label for="">Tên công ty</label>
									<input type="text" class="form-control" name="content[name_company]" value="{{ @$content->name_company }}">
								</div>
								<div class="form-group">
									<label for="">Hotline</label>
									<input type="text" class="form-control" name="content[hotline]" value="{{ @$content->hotline }}">
								</div>
								<div class="form-group">
									<label for="">Địa chỉ Tiếng Việt</label>
									<input type="text" class="form-control" name="content[address_vi]" value="{{ @$content->address_vi }}">
								</div>

								<div class="form-group">
									<label for="">Địa chỉ Tiếng Anh</label>
									<input type="text" class="form-control" name="content[address_en]" value="{{ @$content->address_en }}">
								</div>
								

								<div class="form-group">
									<label for="">Mô tả ngắn</label>
									<input type="text" class="form-control" name="content[desc_sort]" value="{{ @$content->desc_sort }}">
								</div>
							</div>
						</div>
					</div>

					<div class="tab-pane" id="activity2">
						<div class="row">
							<div class="col-sm-12">
								<div class="form-group">
									<label for="">Tên website</label>
									<input type="text" class="form-control" name="content[site_title]"
									value="{{ @$content->site_title }}">
								</div>

								<div class="form-group">
									<label for="">Mô tả ngắn</label>
									<textarea class="form-control" rows="5" 
									name="content[site_description]">{{ @$content->site_description }}</textarea>
								</div>

								<div class="form-group">
									<label for="">Meta keyword</label>
									<input type="text" class="form-control" name="content[site_keyword]"
									value="{{ @$content->site_keyword }}">
								</div>

							</div>
						</div>
					</div>
					<div class="tab-pane" id="activity8">
						<div class="row">
							<div class="col-sm-8">
								<div class="form-group">
									<label for="">Tiều đề 1</label>
									<input type="text" class="form-control" name="content[popup][title]"
									value="{{ @$content->popup->title }}">
								</div>
								<div class="form-group">
									<label for="">Tiều đề 2</label>
									<input type="text" class="form-control" name="content[popup][desc]"
									value="{{ @$content->popup->desc }}">
								</div>
							</div>
							<div class="col-sm-2">
								<div class="form-group">
									<label for="">Banner</label>
									<div class="image">
										<div class="image__thumbnail">
											<img src="{{ !empty($content->popup->banner) ? $content->popup->banner :  __IMAGE_DEFAULT__ }}"  data-init="{{ __IMAGE_DEFAULT__ }}">
											<a href="javascript:void(0)" class="image__delete" 
											onclick="urlFileDelete(this)">
											<i class="fa fa-times"></i></a>
											<input type="hidden" value="{{ @$content->popup->banner }}" name="content[popup][banner]"  />
											<div class="image__button" onclick="fileSelect(this)"><i class="fa fa-upload"></i> Upload</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-2">
								<div class="form-group">
									<label for="">Ưu điểm</label>
									<div class="image">
										<div class="image__thumbnail">
											<img src="{{ !empty($content->popup->uudiem) ? $content->popup->uudiem :  __IMAGE_DEFAULT__ }}"  data-init="{{ __IMAGE_DEFAULT__ }}">
											<a href="javascript:void(0)" class="image__delete" 
											onclick="urlFileDelete(this)">
											<i class="fa fa-times"></i></a>
											<input type="hidden" value="{{ @$content->popup->uudiem }}" name="content[popup][uudiem]"  />
											<div class="image__button" onclick="fileSelect(this)"><i class="fa fa-upload"></i> Upload</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane" id="activity4">
						<div class="row">
							<div class="col-sm-10">
								<div class="form-group">
									<label for="">Tên website</label>
									<input type="text" class="form-control" name="content[link_bct]"
									value="{{ @$content->link_bct }}">
								</div>
							</div>
							<div class="col-sm-2">
								<div class="form-group">
									<label for="">Logo Bộ Công Thương</label>
									<div class="image">
										<div class="image__thumbnail">
											<img src="{{ !empty($content->logo_bct) ? $content->logo_bct :  __IMAGE_DEFAULT__ }}"  data-init="{{ __IMAGE_DEFAULT__ }}">
											<a href="javascript:void(0)" class="image__delete" 
											onclick="urlFileDelete(this)">
											<i class="fa fa-times"></i></a>
											<input type="hidden" value="{{ @$content->logo_bct }}" name="content[logo_bct]"  />
											<div class="image__button" onclick="fileSelect(this)"><i class="fa fa-upload"></i> Upload</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-12">
								<div class="repeater" id="repeater">
									<table class="table table-bordered table-hover link">
										<thead>
											<tr>
												<th style="width: 30px;">STT</th>
												<th>Tiêu đề</th>
												<th>Liên kết</th>
												<th></th>
											</tr>
										</thead>
										<tbody id="sortable">
											@if (!empty($content->linkbottom))
												@foreach ($content->linkbottom as $id => $value)
													<?php $index = $loop->index + 1;?>
													@include('backend.repeater.row-link')
												@endforeach
											@endif
										</tbody>
									</table>
									<div class="text-right">
										<button class="btn btn-primary" 
													onclick="repeater(event,this,'{{ route('get.layout') }}','.index', 'link', '.link')">Thêm
										</button>
									</div>
								</div>
							</div>
							
						</div>
					</div>

					<div class="tab-pane" id="activity6">
						<div class="row">
							<div class="col-sm-3">
								<div class="form-group">
									<label for="">Field Footer 1</label>
									<input type="text" class="form-control" name="content[field1]"
									value="{{ @$content->field1 }}">
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group">
									<label for="">Field Footer 2</label>
									<input type="text" class="form-control" name="content[field2]"
									value="{{ @$content->field2 }}">
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group">
									<label for="">Field Footer 3</label>
									<input type="text" class="form-control" name="content[field3]"
									value="{{ @$content->field3 }}">
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group">
									<label for="">Field Footer 4</label>
									<input type="text" class="form-control" name="content[field4]"
									value="{{ @$content->field4 }}">
								</div>
							</div>

							<div class="col-sm-4">
								<div class="form-group">
									<label for="">Field Header Mobile 1</label>
									<input type="text" class="form-control" name="content[fieldmb1]"
									value="{{ @$content->fieldmb1 }}">
								</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group">
									<label for="">Field Header Mobile 2</label>
									<input type="text" class="form-control" name="content[fieldmb2]"
									value="{{ @$content->fieldmb2 }}">
								</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group">
									<label for="">Field Header Mobile 3</label>
									<input type="text" class="form-control" name="content[fieldmb3]"
									value="{{ @$content->fieldmb3 }}">
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane" id="activity7">
						<div class="row">
							<div class="col-sm-3">
								<div class="form-group">
									<label for="">Ảnh App store</label>
									<div class="image">
										<div class="image__thumbnail">
											<img src="{{ !empty($content->chung_logo_ios) ? $content->chung_logo_ios :  __IMAGE_DEFAULT__ }}"  data-init="{{ __IMAGE_DEFAULT__ }}">
											<a href="javascript:void(0)" class="image__delete" 
											onclick="urlFileDelete(this)">
											<i class="fa fa-times"></i></a>
											<input type="hidden" value="{{ @$content->chung_logo_ios }}" name="content[chung_logo_ios]"  />
											<div class="image__button" onclick="fileSelect(this)"><i class="fa fa-upload"></i> Upload</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label for="">Link App store</label>
									<input type="text" class="form-control" name="content[chung_link_ios]"
									value="{{ @$content->chung_link_ios }}">
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group">
									<label for="">Ảnh CH play</label>
									<div class="image">
										<div class="image__thumbnail">
											<img src="{{ !empty($content->chung_logo_chplay) ? $content->chung_logo_chplay :  __IMAGE_DEFAULT__ }}"  data-init="{{ __IMAGE_DEFAULT__ }}">
											<a href="javascript:void(0)" class="image__delete" 
											onclick="urlFileDelete(this)">
											<i class="fa fa-times"></i></a>
											<input type="hidden" value="{{ @$content->chung_logo_chplay }}" name="content[chung_logo_chplay]"  />
											<div class="image__button" onclick="fileSelect(this)"><i class="fa fa-upload"></i> Upload</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label for="">Link CH play</label>
									<input type="text" class="form-control" name="content[chung_link_chplay]"
									value="{{ @$content->chung_link_chplay }}">
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group">
									<label for="">Ảnh Giao diện APP</label>
									<div class="image">
										<div class="image__thumbnail">
											<img src="{{ !empty($content->feapp) ? $content->feapp :  __IMAGE_DEFAULT__ }}"  data-init="{{ __IMAGE_DEFAULT__ }}">
											<a href="javascript:void(0)" class="image__delete" 
											onclick="urlFileDelete(this)">
											<i class="fa fa-times"></i></a>
											<input type="hidden" value="{{ @$content->feapp }}" name="content[feapp]"  />
											<div class="image__button" onclick="fileSelect(this)"><i class="fa fa-upload"></i> Upload</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group">
									<label for="">Tiêu đề 1</label>
									<input type="text" class="form-control" name="content[chung_title1]"
									value="{{ @$content->chung_title1 }}">
								</div>
								<div class="form-group">
									<label for="">Tiêu đề 2</label>
									<input type="text" class="form-control" name="content[chung_title2]"
									value="{{ @$content->chung_title2 }}">
								</div>
								<div class="form-group">
									<label for="">Tiêu đề 3</label>
									<input type="text" class="form-control" name="content[chung_title3]"
									value="{{ @$content->chung_title3 }}">
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane" id="activity3">
						<div class="row">
							<div class="col-sm-6">
								<div class="form-group">
									<label for="">Mô tả chân trang 1</label>
									<textarea name="content[footer][desc1]" class="content" cols="30" rows="10">{!! @$content->footer->desc1 !!}</textarea>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<label for="">Mô tả chân trang 2</label>
									<textarea name="content[footer][desc2]" class="content" cols="30" rows="10">{!! @$content->footer->desc2 !!}</textarea>
								</div>
							</div>
							<div class="col-sm-12">
								<div class="repeater" id="repeater">
									<table class="table table-bordered table-hover">
										<thead>
											<tr>
												<th style="width: 30px;">STT</th>
												<th>Logo</th>
												<th>Liên kết</th>
												<th></th>
											</tr>
										</thead>
										<tbody id="sortable">
											@if (!empty($content->social))
												@foreach ($content->social as $id => $value)
													<?php $index = $loop->index + 1;?>
													@include('backend.repeater.row-social')
												@endforeach
											@endif
										</tbody>
									</table>
									<div class="text-right">
										<button class="btn btn-primary" 
											onclick="repeater(event,this,'{{ route('get.layout') }}','.index', 'social')">Thêm
										</button>
									</div>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<button class="btn btn-primary" type="submit">Lưu lại</button>
				</div>
			</div>
		</form>
    </div>
@stop