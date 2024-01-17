<div class="col-4 main content mx-2 p-5">

<div class="row ">
	<h3 class="page_title">Tin tức</h3>
	<a href="<?php echo BASE_URL?>news/add_news" class="col-1 btn bg-color-green add_new_button my-2"><i class="fas fa-plus"></i> Thêm mới</a>
    <table class="table  table-bordered" >
		<thead class="thead_green">
			<tr>
				<th class="text-center">ID</th>
				<th class="text-center">Hình</th>
				<th class="text-center">Tiêu đề tin</th>
				<th class="text-center">Đường dẫn</th>
				<th class="text-center">Thể Loại</th>
				<th class="text-center">Trạng thái</th>
				<th class="text-center">#</th>
			</tr>
		</thead>
		<tbody>
			<!-- Loop -->
            <?php
                foreach($news as $key=> $value)
                {
            ?>
			<tr>
				<td class="text-center"><?=$value["id_news"]?></td>
                <td class="text-center">
                    <img src="<?php echo BASE_URL?>/public/upload/<?=$value["img_news"]?>" width="100px" height="auto" alt="">
                    
                </td>
				<td class="text-center">
					<a href="#">
						<h5><?=$value["title_news"]?></h5>
					</a>
				</td>
				<td class="text-center">
					<a href="#">
						<h5><?=$value['Slug_news']?></h5>
					</a>
				</td>
				<td class="text-center">
                    <?php 
                        foreach($categories as $val){
                            if($val['id_cate'] == $value['cate_id_news']){
                    ?>
                    <a href="#">
						<h5><?=$val['name_cate']?></h5>
					</a>
                    <?php }} ?>
					
				</td>
				
				<td class="text-center"><?=$value['status_news'] == 1 ? 'Hiện':'Ẩn'?></td>
				<td class="text-center action_icon">
					<a href="<?php echo BASE_URL ?>/news/edit_news/<?=$value["id_news"]?>"><i class="far fa-edit edit"></i></a>
					<a href="<?php echo BASE_URL ?>/news/delete_news/<?=$value["id_news"]?>" class="fas fa-trash-alt deletebutton text-danger btn" ></a>
				</td>
			</tr>
			<?php } ?>
		</tbody>
	</table>

</div>
</div>