
<section>

         <div class="bg_in">
            <div class="breadcrumbs">

                     <ol itemscope itemtype="http://schema.org/BreadcrumbList">

                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">

                           <a itemprop="item" href="#">

                           <span itemprop="name">Trang chủ</span></a>

                           <meta itemprop="position" content="1" />

                        </li>

                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                           <a itemprop="item" href="#">
                           
                           <span itemprop="name"><?=$category['name_cate']?></span></a>
                           
                           <meta itemprop="position" content="2" />
                        </li>

                       
                     </ol>

                  </div>
         <div class="module_pro_all">
            <div class="box-title">
                
               <div class="title-bar">
                <h1>
                    Danh mục : <?=$category['name_cate']?>
                </h1>
                  <a class="read_more" href="<?=BASE_URL?>trangchu/sanpham">
                  Xem thêm
                  </a>
               </div>
               
            </div>
            <div class="pro_all_gird">
               <div class="girds_all list_all_other_page ">
                    <?php
                        foreach($product as $value){
                    ?>
                    
                    <div class="grids">
                    
                        <div class="grids_in">
                            <div class="content">
                                <div class="img-right-pro">
                                
                                <a href="<?=BASE_URL?>trangchu/ChiTietSp/<?=$value['slug_prod']?>">
                                <img class="lazy img-pro content-image" src="<?=BASE_URL?>/public/upload/<?=$value['img_prod']?>"  alt="Máy in Canon MF229DW" />
                                </a>

                                <div class="content-overlay"></div>
                                <!-- <div class="content-details fadeIn-top">
                                    <ul class="details-product-overlay">
                                        <li>Màn hình : Super Amoled 4.5k</li>
                                        <li>Độ ph,ân giải : 2K+(1440x3040)</li>
                                        <li>Ram : 8GB</li>
                                        <li>CPU : Android 9.0</li>
                                        <li>GPU : Mali-G76 MP12</li>
                                        <li>SSD : 512MB</li>

                                    </ul>
                                    
                                </div> -->
                                </div>
                                <div class="name-pro-right">
                                <a href="<?=BASE_URL?>trangchu/ChiTietSp/<?=$value['slug_prod']?>">
                                    <h3><?=$value['name_prod']?></h3>
                                </a>
                                </div>
                                <div class="add_card">
                                <form action="<?php echo BASE_URL?>/giohang/themgiohang" method="POST">
                                    <input type="hidden" name="id_prod" value="<?=$value['id_prod']?>">
                                    <input type="hidden" name="name_prod" value="<?=$value['name_prod']?>">
                                    <input type="hidden" name="price_prod" value="<?=$value['price_prod']?>">
                                    <input type="hidden" name="img_prod" value="<?=$value['img_prod']?>">
                                    <input type="hidden" name="quantity_prod" value="1">
                                    <input type="submit" class="btn btn-warning" style="background-color:#ffbf00;box-shadow: none" value="Đặt hàng">                                 </form>
                                </div>
                                <div class="price_old_new">
                                <div class="price">
                                    <span class="news_price"><?=number_format($value['price_prod'])?>đ </span>
                                </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <?php } ?>
                  <div class="clear"></div>
                </div>
               <div class="clear"></div>
            </div>
            <div class="clear"></div>
         </div>
         
         
      </section>
