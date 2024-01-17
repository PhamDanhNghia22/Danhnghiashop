<div class="col-4 main content mx-2 p-4">

<div class="row p-5">
<form action="<?php echo BASE_URL?>category/update_Category/<?=$category['id_cate']?>" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label class="form-label font-weight-bold" for="">Tên thể loại</label>
        <input type="text" class="form-control" name="name_cate" value="<?= $category['name_cate']?>">
    </div>
    <div class="form-group">
        <label class="form-label font-weight-bold" for="">Trạng thái</label>
        <select name="status_cate" class="form-control" id="">
            
            <?php 
                $trangthai= array('0'=>'Ẩn' , '1'=>'Hiện');
                foreach($trangthai as $key =>$val){
                    if($key == $category['status_cate']){
            ?>
            <option selected value="<?=$key?>"><?=$val?></option>
            <?php }else{?>
                <option  value="<?=$key?>"><?=$val?></option>
            <?php }}?>
        </select>
        
    </div>
    <div class="form-group">
        <label class="form-label font-weight-bold" for="">Mô tả thể loại</label>
        <textarea  class="form-control mota" name="desc_cate" id="mota"><?=$category['desc_cate']?></textarea>
    </div>
    <button type="submit" class="font-weight-bold text-white btn bg-color-green mt-3">Lưu</button>
</form>

</div>
</div>