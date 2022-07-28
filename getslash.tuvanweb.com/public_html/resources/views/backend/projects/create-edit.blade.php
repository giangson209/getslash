@extends('backend.layouts.app')
@section('controller', $module['name'] )
@section('controller_route', route($module['module'].'.index'))
@section('action', renderAction(@$module['action']))
@section('content')
    <div class="content">
        <div class="clearfix"></div>
        @include('flash::message')
        <form action="{!! updateOrStoreRouteRender( @$module['action'], $module['module'], @$data) !!}" method="POST"
              enctype="multipart/form-data">
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

                            <li class="">
                                <a href="#setting" data-toggle="tab" aria-expanded="true">Cấu hình seo</a>
                            </li>
                        </ul>
                        <div class="tab-content">

                            <div class="tab-pane active" id="activity">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Tiêu đề Tiếng Việt</label>
                                            <input type="text" class="form-control" name="name_vi" id="name"
                                                   value="{!! old('name_vi', @$data->name_vi) !!}" required="">
                                        </div>
                                        @if(isUpdate(@$module['action']))
                                            <div class="form-group" id="edit-slug-box">
                                                @include('backend.projects.permalink')
                                            </div>
                                        @endif

                                        <div class="form-group">
                                            <label>Tiêu đề Tiếng Anh</label>
                                            <input type="text" class="form-control" name="name_en"
                                                   value="{!! old('name_en', @$data->name_en) !!}" required="">
                                        </div>
                                        @if(isUpdate(@$module['action']))
                                            <div style="margin-top: 30px">
                                                <label for="">Chi tiết dự án</label>
                                                <div class="form-group text-right">
                                                    <a href="{{ route('projects.detail.create', $data->id) }}"
                                                       class="btn btn-primary">Thêm chi tiết dự án</a>
                                                </div>
                                            </div>
                                            <table id="example1" class="table table-bordered table-striped">
                                                <thead>
                                                <tr>
                                                    <th style="width: 40px;">STT</th>
                                                    <th>Tiêu đề</th>
                                                    <th>Trạng thái</th>
                                                    <th>Hành động</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @if(!empty($data->projectDetail) && count($data->projectDetail))
                                                    @foreach($data->projectDetail as $item)
                                                        <tr>
                                                            <td>{{ $loop->index + 1 }}</td>
                                                            <td>{{ $item->name_vi }}</td>
                                                            <td>
                                                                @if ($item->status == 1 )
                                                                    <span class="label label-success">Hiển thị</span>
                                                                @else
                                                                    <span class="label label-danger">Không hiển thị</span>
                                                                @endif
                                                            </td>
                                                            <td>
                                                                <a href="{{ route('projects.detail.edit', ['idProject' => $data->id  , 'id' => $item->id ] ) }}">
                                                                    <i class="fa fa-pencil fa-fw"></i> Sửa
                                                                </a> &nbsp; &nbsp; &nbsp;
                                                                <a href="javascript:;" class="btn-destroy"
                                                                   data-href="{{ route( 'projects.detail.destroy',  ['idProject' => $data->id  , 'id' => $item->id ] ) }}"
                                                                   data-toggle="modal" data-target="#confim">
                                                                    <i class="fa fa-trash-o fa-fw"></i> Xóa
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                @endif
                                                </tbody>
                                            </table>
                                        @endif
                                    </div>

                                </div>
                            </div>

                            <div class="tab-pane" id="setting">
                                <div class="form-group">
                                    <label>Title SEO</label>
                                    <label style="float: right;">Số ký tự đã dùng: <span id="countTitle">{{ @$data->meta_title != null ? mb_strlen( $data->meta_title, 'UTF-8') : 0 }}/70</span></label>
                                    <input type="text" class="form-control" name="meta_title"
                                           value="{!! old('meta_title', isset($data->meta_title) ? $data->meta_title : null) !!}"
                                           id="meta_title">
                                </div>

                                <div class="form-group">
                                    <label>Meta Description</label>
                                    <label style="float: right;">Số ký tự đã dùng: <span id="countMeta">{{ @$data->meta_description != null ? mb_strlen( $data->meta_description, 'UTF-8') : 0 }}/360</span></label>
                                    <textarea name="meta_description" class="form-control" id="meta_description"
                                              rows="3">{!! old('meta_description', isset($data->meta_description) ? $data->meta_description : null) !!}</textarea>
                                </div>

                                <div class="form-group">
                                    <label>Meta Keyword</label>
                                    <input type="text" class="form-control" name="meta_keyword"
                                           value="{!! old('meta_keyword', isset($data->meta_keyword) ? $data->meta_keyword : null) !!}">
                                </div>
                                @if(isUpdate(@$module['action']))
                                    <h4 class="ui-heading">Xem trước kết quả tìm kiếm</h4>
                                    <div class="google-preview">
                                        <span class="google__title"><span>{!! !empty($data->meta_title) ? $data->meta_title : @$data->name !!}</span></span>
                                        <div class="google__url">
                                            {{ asset( 'van-ban/'.$data->slug.'-'.$data->id ) }}
                                        </div>
                                        <div class="google__description">{!! old('meta_description', isset($data->meta_description) ? @$data->meta_description : '') !!}</div>
                                    </div>
                                @endif
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
                                <button type="submit" class="btn btn-primary"><i class="fa fa-save"
                                                                                 style="padding-right: 5px"></i>Đăng
                                </button>
                            </div>
                        </div>
                    </div>

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
                                        <a href="javascript:void(0)" class="image__delete"
                                           onclick="urlFileDelete(this)">
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

                </div>
            </div>
        </form>
    </div>
@stop

@section('scripts')
    <script>
        jQuery(document).ready(function ($) {
            $('#btn-ok').click(function (event) {
                var slug_new = $('#new-post-slug').val();
                var name = $('#name').val();
                $.ajax({
                    url: '{{ route($module['module'].'.get-slug') }}',
                    type: 'GET',
                    data: {
                        id: $('#idPost').val(),
                        slug: slug_new.length > 0 ? slug_new : name,
                    },
                })
                    .done(function (data) {
                        $('#change_slug').show();
                        $('#btn-ok').hide();
                        $('.cancel.button-link').hide();
                        $('#current-slug').val(data);
                        cancelInput(data);
                    })
            });
        });
    </script>
@endsection

@section('css')
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i,900,900i&display=swap"
          rel="stylesheet">
@endsection
