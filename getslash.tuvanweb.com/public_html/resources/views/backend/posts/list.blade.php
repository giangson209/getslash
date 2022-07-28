@extends('backend.layouts.app')
@php $title = ''; @endphp
@if(request('type') == 'blog')
    @php $title = 'Blog'; @endphp
@endif
@if(request('type') == 'faq')
    @php $title = 'FAQ'; @endphp
@endif
@section('controller', $title)
@section('controller_route', route('posts.index') )
@section('action','Danh sách')
@section('content')
	<div class="content">
		<div class="clearfix"></div>
		<div class="box box-primary">
            <div class="box-body">
				@include('flash::message')
				<form action="{!! route('posts.postMultiDel') !!}" method="POST">
			        <input type="hidden" name="_token" value="{!! csrf_token() !!}">
			        <div class="btnAdd">
			            <a href="{{ route('posts.create',['type'=> request('type')]) }}">
			                <fa class="btn btn-primary"><i class="fa fa-plus"></i> Thêm</fa>
			            </a>
			            <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn xóa không ?')"><i
			                        class="fa fa-trash-o"></i> Xóa
			            </button>
			        </div>
			        <table id="table-ajax" class="table table-bordered table-striped table-hover">
			            <thead>
			            <tr>
			                <th width="10px"><input type="checkbox" name="chkAll" id="chkAll"></th>
			                <th width="10px">STT</th>
                            @if( request('type') !== 'faq' && request('type') !== 'faq-merchant')
			                <th width="80px">Hình ảnh</th>
                            @endif
			                <th>Tiêu đề</th>
                            @if( request('type') !== 'faq' && request('type') !== 'faq-merchant')
			                <th width="100px">Trạng thái</th>
                            @endif
			                <th width="100px">Thao tác</th>
			            </tr>
			            </thead>
			            <tbody>

			            </tbody>
			        </table>
			    </form>
			</div>
		</div>
	</div>
@stop

@section('scripts')
    <script>
        jQuery(document).ready(function ($) {
            let type = '{{ request('type') }}';
            let list_columns = [
                {data: 'checkbox', name: 'checkbox'},
                {data: 'DT_RowIndex',name: 'DT_RowIndex'},
                {data: 'image', name: 'image'},
                {data: 'name', name: 'name'},
                {data: 'status', name: 'status'},
                {data: 'action', name: 'action'},
            ];
            if( type === 'faq' || type === 'faq-merchant'){
                list_columns = [
                    {data: 'checkbox', name: 'checkbox'},
                    {data: 'DT_RowIndex',name: 'DT_RowIndex'},
                    {data: 'name', name: 'name'},
                    {data: 'action', name: 'action'},
                ];
            }
                
            $('#table-ajax').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    'url': '{!! route('posts.index',['type'=> request('type')]) !!}',
                },
                columns: list_columns,
                'columnDefs': [{
                    'targets': [0, 1],
                    'orderable': false,
                    'searchable': false,
                }],
                language: {
                    "sProcessing": "Đang xử lý...",
                    "sLengthMenu": "Xem _MENU_ mục",
                    "sZeroRecords": "Không tìm thấy dòng nào phù hợp",
                    "sInfo": "Đang xem _START_ đến _END_ trong tổng số _TOTAL_ mục",
                    "sInfoEmpty": "Đang xem 0 đến 0 trong tổng số 0 mục",
                    "sInfoFiltered": "(được lọc từ _MAX_ mục)",
                    "sInfoPostFix": "",
                    "sSearch": "Tìm:",
                    "sUrl": "",
                    "oPaginate": {
                        "sFirst": "Đầu",
                        "sPrevious": "Trước",
                        "sNext": "Tiếp",
                        "sLast": "Cuối"
                    }
                }
            });
        });
    </script>
@endsection