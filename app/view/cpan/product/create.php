<div class="col-4 main content mx-2 p-4">

<div class="row p-5">
<form action="<?php echo BASE_URL?>product/insert_product" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label class="form-label font-weight-bold" for="">Tên sản phẩm</label>
        <input type="text" class="form-control" name="name_prod">
    </div>
    <div class="form-group">
        <label class="form-label font-weight-bold" for="">Giá sản phẩm</label>
        <input type="text" class="form-control" name="price_prod">
    </div>
    <div class="form-group">
        <label class="form-label font-weight-bold" for="">Hình sản phẩm</label>
        <input type="file" class="form-control" name="img_prod">
    </div>
    <div class="form-group">
        <label class="form-label font-weight-bold" for="">Trạng thái</label>
        <select name="status_prod" class="form-control" id="">
            <option value="1">Hiện</option>    
            <option value="0">Ẩn</option>
           
        </select>
        
    </div>
    <div class="form-group">
        <label class="form-label font-weight-bold" for="">Sản phẩm hot</label>
        <select name="hot_prod" class="form-control" id="">
            <option value="1">Hiện</option>    
            <option value="0">Ẩn</option>
           
        </select>
        
    </div>
    <div class="form-group">
        <label class="form-label font-weight-bold" for="">Thể loại</label>
        <select name="cate_id" class="form-control" id="">
            <?php 
                foreach($category as $value){
            ?>
            <option value="<?=$value['id_cate']?>"><?=$value['name_cate']?></option>    
            <?php } ?>
        </select>
        
    </div>
    <div class="form-group">
        <label class="form-label font-weight-bold" for="">Mô tả sản phẩm</label>
        <textarea  class="form-control mota" name="desc_prod" id="mota"></textarea>
    </div>
    <button type="submit" class="font-weight-bold text-white btn bg-color-green mt-3">Lưu</button>
</form>
</div>
</div>