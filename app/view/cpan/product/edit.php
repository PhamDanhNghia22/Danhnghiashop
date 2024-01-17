<div class="col-4 main content mx-2 p-4">

<div class="row p-5">

<form action="<?php echo BASE_URL?>product/Update_product/<?=$product['id_prod']?>" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label class="form-label font-weight-bold" for="">Tên sản phẩm</label>
        <input type="text" class="form-control" name="name_prod" value="<?=$product['name_prod']?>">
    </div>
    <div class="form-group">
        <label class="form-label font-weight-bold" for="">Giá sản phẩm</label>
        <input type="text" class="form-control" name="price_prod" value="<?=$product['price_prod']?>">
    </div>
    <div class="form-group">
        <label class="form-label font-weight-bold" for="">Hình sản phẩm</label>
        <input type="file" class="form-control" name="img_prod" value="<?=$product['img_prod']?>">
        <image width="60px" height="80px" src="<?php echo BASE_URL?>/public/upload/<?=$product['img_prod']?>">
    </div>
    <div class="form-group">
        <label class="form-label font-weight-bold" for="">Ngày tạo sản phẩm</label>
        <input type="date" class="form-control" name="create_date_prod" value="<?=$product['create_date']?>">
    </div>
    <div class="form-group">
        <label class="form-label font-weight-bold" for="">Ngày cập nhật sản phẩm</label>
        <input type="date" class="form-control" name="update_date_prod" value="<?=$product['update_date']?>">
    </div>
    <div class="form-group">
        <label class="form-label font-weight-bold" for="">Trạng thái</label>
        <select name="status_prod" class="form-control" id="">
        <?php 
                $trangthai= array('0'=>'Ẩn' , '1'=>'Hiện');
                foreach($trangthai as $key =>$val){
                    if($key == $product['status_prod']){
            ?>
            <option selected value="<?=$key?>"><?=$val?></option>
            <?php }else{?>
                <option  value="<?=$key?>"><?=$val?></option>
            <?php }}?>
           
        </select>
        
    </div>
    <div class="form-group">
        <label class="form-label font-weight-bold" for="">Sản phẩm hot</label>
        <select name="hot_prod" class="form-control" id="">
        <?php 
                $trangthai= array('0'=>'Ẩn' , '1'=>'Hiện');
                foreach($trangthai as $key =>$val){
                    if($key == $product['hot_prod']){
            ?>
            <option selected value="<?=$key?>"><?=$val?></option>
            <?php }else{?>
                <option  value="<?=$key?>"><?=$val?></option>
            <?php }}?>
           
        </select>
        
    </div>
    <div class="form-group">
        <label class="form-label font-weight-bold" for="">Thể loại</label>
        <select name="cate_id" class="form-control" id="">
            <?php 
                foreach($categories as $val){
                if($val['id_cate']==$product['cate_id']){
            ?>
            <option selected value="<?=$val['id_cate']?>"><?=$val['name_cate']?></option>    
            <?php }else{ ?>
                <option  value="<?=$val['id_cate']?>"><?=$val['name_cate']?></option> 
            <?php }}?>
        </select>
        
    </div>
    <div class="form-group">
        <label class="form-label font-weight-bold" for="">Mô tả sản phẩm</label>
        <textarea  class="form-control mota" name="desc_prod" id="mota"><?=$product['desc_prod']?></textarea>
    </div>
    <button type="submit" class="font-weight-bold text-white btn bg-color-green mt-3">Lưu</button>
</form>

</div>
</div>