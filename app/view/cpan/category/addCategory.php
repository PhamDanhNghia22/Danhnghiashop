<div class="col-4 main content mx-2 p-4">

<div class="row p-5">
<form action="<?php echo BASE_URL?>category/insert_Category" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label class="form-label font-weight-bold" for="">Tên thể loại</label>
        <input type="text" class="form-control" name="name_cate">
    </div>
    <div class="form-group">
        <label class="form-label font-weight-bold" for="">Trạng thái</label>
        <select name="status_cate" class="form-control" id="">
            <option value="1">Hiện</option>    
            <option value="0">Ẩn</option>
           
        </select>
        
    </div>
    <div class="form-group">
        <label class="form-label font-weight-bold" for="">Mô tả thể loại</label>
        <textarea  class="form-control mota" name="desc_cate" id="mota"></textarea>
    </div>
    <button type="submit" class="font-weight-bold text-white btn bg-color-green mt-3">Lưu</button>
</form>
</div>
</div>

