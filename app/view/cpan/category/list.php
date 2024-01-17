<div class="col-4 main content mx-2 p-4">

<div class="row p-5">
	<h3 class="page_title">Thể loại</h3>
	<a href="<?php echo BASE_URL?>/category/Add_category" class="col-1 btn bg-color-green add_new_button my-2"><i class="fas fa-plus"></i> Thêm mới</a>
    <table class="table  table-bordered">
		<thead class="thead_green">
			<tr>
				<th class="text-center">ID</th>
				<th class="text-center">Tên Thể loại</th>
				<th class="text-center">Đường dẫn</th>
				<th class="text-center">Trạng thái Thể loại</th>
				<th class="text-center">#</th>
			</tr>
		</thead>
		<tbody>
			<!-- Loop -->
            <?php
                foreach($category as $key=> $value)
                {
            ?>
			<tr>
				<td class="text-center"><?=$value["id_cate"]?></td>
				<td class="text-center">
					<a href="">
						<h4><?=$value["name_cate"]?></h4>
					</a>
				</td>
				<td class="text-center">
					<a href="">
						<h4><?=$value['slug_cate']?></h4>
					</a>
				</td>
				
				<td class="text-center"><?=$value['status_cate'] == 1 ? 'Hiện':'Ẩn'?></td>
				<td class="text-center action_icon">
					<a href="<?php echo BASE_URL ?>category/edit_cate/<?=$value["id_cate"]?>"><i class="far fa-edit edit"></i></a>
					<a href="<?php echo BASE_URL ?>category/delete_Category/<?=$value["id_cate"]?>" class="fas fa-trash-alt deletebutton text-danger btn" ></a>
				</td>
			</tr>
			<?php } ?>
		</tbody>
	</table>

</div>
</div>