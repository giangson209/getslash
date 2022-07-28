<?php $id = isset($id) ? $id : (int) round(microtime(true) * 1000); ?>
<tr>
	<td class="index">{{ $index }}</td>
	<td>
		<div class="form-group">
           <label>Banner</label>
           <div class="image">
               <div class="image__thumbnail">
                   <img src="{{ !empty($value->banner) ?  $value->banner : __IMAGE_DEFAULT__ }}"  
                   data-init="{{ __IMAGE_DEFAULT__ }}">
                   <a href="javascript:void(0)" class="image__delete" onclick="urlFileDelete(this)">
                    <i class="fa fa-times"></i></a>
                   <input type="hidden" value="{{ @$value->banner }}" name="content[banner][{{ $id }}][banner]"  />
                   <div class="image__button" onclick="fileSelect(this)"><i class="fa fa-upload"></i> Upload</div>
               </div>
           </div>
       </div>
	</td>
	<td>
		<div class="form-group">
			<label>Tiêu đề</label>
			<input type="text" name="content[banner][{{ $id }}][name]" class="form-control" value="{{ @$value->name }}">
		</div>
        <div class="form-group">
            <label>Mô tả</label>
            <textarea name="content[banner][{{ $id }}][desc]" class="form-control" cols="30" rows="5">{{ @$value->desc }}</textarea>
        </div>
		<div class="form-group">
			<label>Liên kết</label>
			<input type="text" name="content[banner][{{ $id }}][link]" class="form-control" value="{{ @$value->link }}">
		</div>
	</td>
    <td style="text-align: center;">
        <a href="javascript:void(0);" onclick="$(this).closest('tr').remove()" class="text-danger buttonremovetable" title="Xóa">
            <i class="fa fa-minus"></i>
        </a>
    </td>
</tr>
