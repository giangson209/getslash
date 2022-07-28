@extends('backend.layouts.app')
@section('controller', $module['name'] )
@section('controller_route', route('projects.edit', $idProject))
@section('action', renderAction(@$module['action']))
@section('content')
    <div class="content">
        <div class="clearfix"></div>
        @include('flash::message')

        @php
            $route = route('projects.detail.store', $idProject);
            if(isUpdate(@$module['action'])){
                $route = route('projects.detail.update', ['idProject' => $idProject, 'id' => $data->id]);
            }
        @endphp
        <form action="{{ $route }}" method="POST" enctype="multipart/form-data">
            @csrf
            @if(isUpdate(@$module['action']))
                {{ method_field('put') }}
            @endif
            <div class="row">
                <div class="col-sm-9">
                    <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href="#activity" data-toggle="tab" aria-expanded="true">Thông tin</a>
                            </li>
                        </ul>
                        <div class="tab-content">

                            <div class="tab-pane active" id="activity">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Tiêu đề Tiếng Việt</label>
                                                    <input type="text" class="form-control" name="name_vi" id="name"
                                                           value="{!! old('name_vi', @$data->name_vi) !!}" required="">
                                                </div>

                                                <div class="form-group">
                                                    <label>Tiêu đề phụ Tiếng Việt</label>
                                                    <input type="text" class="form-control" name="sub_name_vi" id="name"
                                                           value="{!! old('sub_name_vi', @$data->sub_name_vi) !!}">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Tiêu đề Tiếng Anh</label>
                                                    <input type="text" class="form-control" name="name_en"
                                                           value="{!! old('name_en', @$data->name_en) !!}">
                                                </div>
                                                <div class="form-group">
                                                    <label>Tiêu đề phụ Tiếng Anh</label>
                                                    <input type="text" class="form-control" name="sub_name_en"
                                                           value="{!! old('sub_name_en', @$data->sub_name_en) !!}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="image">
                                            <label for="">Thư viện ảnh</label><br>
                                            <button type="button" class="btn btn-success" onclick="fileMultiSelect(this)"><i class="fa fa-upload"></i>
                                                Chọn hình ảnh
                                            </button>
                                            <br><br>
                                            <div class="image__gallery">
                                                @php
                                                    if(isUpdate(@$module['action'])){
                                                        $gallery = @$data->getGalleryProjectDetail();
                                                    }
                                                @endphp
                                                @if (!empty($gallery))
                                                    @foreach ($gallery as $item)
                                                        <div class="image__thumbnail image__thumbnail--style-1">
                                                            <img src="{{ $item->path }}">
                                                            <a href="javascript:void(0)" class="image__delete" onclick="urlFileMultiDelete(this)">
                                                                <i class="fa fa-times"></i>
                                                            </a>
                                                            <input type="hidden" name="gallery[]" value="{{ $item->path }}">
                                                        </div>
                                                    @endforeach
                                                @endif
                                            </div>
                                        </div>
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
                            <div class="form-group">
                                <label class="custom-checkbox">
                                    @if(isUpdate(@$module['action']))
                                        <input type="checkbox" name="status"
                                               value="1" {{ @$data->status == 1 ? 'checked' : null }}> Hiển thị
                                    @else
                                        <input type="checkbox" name="status" value="1" checked> Hiển thị
                                    @endif
                                </label>
                            </div>
                            <div class="form-group text-right">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-save" style="padding-right: 5px"></i>Đăng
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="box box-success">
                        <div class="box-header with-border">
                            <h3 class="box-title">Banner</h3>
                        </div>
                        <div class="box-body">
                            <div class="form-group" style="text-align: center;">
                                <div class="image">
                                    <div class="image__thumbnail">
                                        <img src="{{ !empty($data->banner) ? $data->banner : __IMAGE_DEFAULT__ }}"
                                             data-init="{{ __IMAGE_DEFAULT__ }}">
                                        <a href="javascript:void(0)" class="image__delete"
                                           onclick="urlFileDelete(this)">
                                            <i class="fa fa-times"></i></a>
                                        <input type="hidden" value="{{ old('banner', @$data->banner) }}" name="banner"/>
                                        <div class="image__button" onclick="fileSelect(this)">
                                            <i class="fa fa-upload"></i>
                                            Upload
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </form>
    </div>
@stop
