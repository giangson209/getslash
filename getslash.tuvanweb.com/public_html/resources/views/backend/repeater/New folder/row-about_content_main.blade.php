<?php $id = isset($id) ? $id : (int) round(microtime(true) * 1000); ?>
<tr>
    <td class="index">{{ $index }}</td>
    <td>
        <div class="form-group">
            <label for="">Title</label>
            <input type="text" class="form-control" name="content[main_content][{{$id}}][title]" value="{{ @$value->title }}">
        </div>
        <div class="form-group">
            <label for="">Sub Title</label>
            <input type="text" class="form-control" name="content[main_content][{{$id}}][sub_title]" value="{{ @$value->sub_title }}">
        </div>

        <div class="form-group">
            <label for="">Content</label>
            <textarea name="content[main_content][{{$id}}][content]" id="contentRP{{ $id }}" cols="30" rows="10">{!! @$value->content !!}</textarea>
        </div>

    </td>
    <td style="text-align: center;">
        <a href="javascript:void(0);" onclick="$(this).closest('tr').remove()" class="text-danger buttonremovetable" title="Xóa">
            <i class="fa fa-minus"></i>
        </a>
    </td>
</tr>
<script>
    CKEDITOR.replace( 'contentRP{{ $id }}' );
</script>