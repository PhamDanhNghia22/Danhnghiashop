<div class="col-4 main content mx-2 p-4">

<div class="row p-5">
<?php 
foreach($news as $value){

?>
<form action="<?php echo BASE_URL?>news/Update_news/<?=$value['id_news']?>" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label class="form-label font-weight-bold" for="">Tiêu đề tin</label>
        <input type="text" class="form-control" name="title_news" value="<?=$value['title_news']?>">
    </div>
    <div class="form-group">
        <label class="form-label font-weight-bold" for="">Tóm tắt tin</label>
        <input type="text" class="form-control" name="summary_news" value="<?=$value['summary_news']?>">
    </div>
    <div class="form-group">
        <label class="form-label font-weight-bold" for="">Hình ảnh tin tức</label>
        <input type="file" class="form-control" name="img_news" value="<?=$value['img_news']?>">
        <image width="60px" height="80px" src="<?php echo BASE_URL?>/public/upload/<?=$value['img_news']?>">
    </div>
    <div class="form-group">
        <label class="form-label font-weight-bold" for="">Ngày tạo </label>
        <input type="date" class="form-control" name="create_date_news" value="<?=$value['create_date_news']?>">
    </div>
    <div class="form-group">
        <label class="form-label font-weight-bold" for="">Ngày cập nhật </label>
        <input type="date" class="form-control" name="update_date_news" value="<?=$value['update_date_news']?>">
    </div>
    <div class="form-group">
        <label class="form-label font-weight-bold" for="">Trạng thái</label>
        <select name="status_news" class="form-control" id="">
        <?php 
                $trangthai= array('0'=>'Ẩn' , '1'=>'Hiện');
                foreach($trangthai as $key =>$val){
                    if($key == $value['status_news']){
            ?>
            <option selected value="<?=$key?>"><?=$val?></option>
            <?php }else{?>
                <option  value="<?=$key?>"><?=$val?></option>
            <?php }}?>
           
        </select>
        
    </div>
    
    <div class="form-group">
        <label class="form-label font-weight-bold" for="">Thể loại</label>
        <select name="cate_id_news" class="form-control" id="">
            <?php 
                foreach($category as $val){
                if($val['id_cate']==$value['cate_id_news']){
            ?>
            <option selected value="<?=$val['id_cate']?>"><?=$val['name_cate']?></option>    
            <?php }else{ ?>
                <option  value="<?=$val['id_cate']?>"><?=$val['name_cate']?></option> 
            <?php }}?>
        </select>
        
    </div>
    <div class="form-group">
        <label class="form-label font-weight-bold" for="">Mô tả tin tức</label>
        <textarea  class="form-control mota" name="desc_news" id="mota"><?=$value['description_news']?></textarea>
    </div>
    <button type="submit" class="font-weight-bold text-white btn bg-color-green mt-3">Lưu</button>
</form>
<?php } ?>
</div>
</div>