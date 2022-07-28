<?php $id = isset($id) ? $id : (int) round(microtime(true) * 1000); ?>
<tr>
    <td class="index">{{ $index }}</td>
    <td>
        <div class="form-group">
            <label>Logo</label>
            <div class="image">
                <div class="image__thumbnail">
                    <img src="{{ !empty($value->logo) ?  $value->logo : __IMAGE_DEFAULT__ }}"
                         data-init="{{ __IMAGE_DEFAULT__ }}">
                    <a href="javascript:void(0)" class="image__delete" onclick="urlFileDelete(this)">
                        <i class="fa fa-times"></i></a>
                    <input type="hidden" value="{{ @$value->logo }}" name="content[partner][{{ $id }}][logo]"  />
                    <div class="image__button" onclick="fileSelect(this)"><i class="fa fa-upload"></i> Upload</div>
                </div>
            </div>
        </div>
    </td>
    <td>
        <div class="form-group">
            <label>Tên</label>
            <input type="text" name="content[partner][{{ $id }}][name]" class="form-control" value="{{ @$value->name }}">
        </div>
        <div class="form-group">
            <label>Thông tin khác</label>
            <input type="text" name="content[partner][{{ $id }}][info]" class="form-control" value="{{ @$value->info }}">
        </div>
        <div class="form-group">
            <label>Nội dung</label>
            <input type="text" name="content[partner][{{ $id }}][content]" class="form-control" value="{{ @$value->content }}">
        </div>
    </td>
    <td style="text-align: center;">
        <a href="javascript:void(0);" onclick="$(this).closest('tr').remove()" class="text-danger buttonremovetable" title="Xóa">
            <i class="fa fa-minus"></i>
        </a>
    </td>
</tr>
