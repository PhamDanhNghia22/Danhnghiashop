<div class="col-4 main content mx-2 p-4">

<div class="row p-5">
<form action="<?php echo BASE_URL?>news/insert_news" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label class="form-label font-weight-bold" for="">Tiêu đề tin</label>
        <input type="text" class="form-control" name="title_news">
    </div>
    <div class="form-group">
        <label class="form-label font-weight-bold" for="">Tóm tắt tin</label>
        <textarea name="summary_news" class="form-control" id="" cols="30" rows="10"></textarea>
    </div>
    <div class="form-group">
        <label class="form-label font-weight-bold" for="">Hình ảnh tin</label>
        <input type="file" class="form-control" name="img_news">
    </div>
    <div class="form-group">
        <label class="form-label font-weight-bold" for="">Trạng thái</label>
        <select name="status_news" class="form-control" id="">
            <option value="1">Hiện</option>    
            <option value="0">Ẩn</option>
        </select>
        
    </div>
    <div class="form-group">
        <label class="form-label font-weight-bold" for="">Thể loại</label>
        <select name="cate_id_news" class="form-control" id="">
            <?php 
                foreach($category as $value){
            ?>
            <option value="<?=$value['id_cate']?>"><?=$value['name_cate']?></option>    
            <?php } ?>
        </select>
        
    </div>
    <div class="form-group">
        <label class="form-label font-weight-bold" for="">Nội dun tin tức </label>
        <textarea  class="form-control mota" name="desc_news" id="mota"></textarea>
    </div>
    <button type="submit" class="font-weight-bold text-white btn bg-color-green mt-3">Lưu</button>
</form>
</div>
</div>