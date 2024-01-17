
<div class="clear"></div>
      <!--start:body-->
      <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL?>/public/client/css/product.css">
      <script defer type="text/javascript" src="<?php echo BASE_URL?>/public/client/js/jquery.avatarme-1.0.min.js"></script>
      <script src="<?php echo BASE_URL?>/public/client/js/cloudzoom.js"></script>
      <script defer src="<?php echo BASE_URL?>/public/client/js/jquery.scrollto.js"></script>
      <script defer type="text/javascript">
         function giohang(id) {
            window.open('http://localhost/3tmobile/giohang.php');
             // document.getElementById("khungnen").style.display = "block";
         
             // document.getElementById("loadding").style.display = "block";
         
             // var sl = $('#qty').val();
         
             // jQuery.post('./gio-hang/', {
         
             //     'qty': sl,
         
             //     'maSanPham': id
         
             // }, function(data) {
         
             //     document.getElementById("khungnen").style.display = "none";
         
             //     document.getElementById("loadding").style.display = "none";
         
             //     swal({
         
             //             title: "Thành công",
         
             //             text: "Sản phẩm đã được thêm vào giỏ hàng!",
         
             //             type: "success",
         
             //             showCancelButton: true,
         
             //             confirmButtonColor: '#F19F00',
         
             //             confirmButtonText: 'Xem giỏ hàng',
         
             //             cancelButtonText: "Tiếp tục mua",
         
             //             closeOnConfirm: false,
         
             //         },
         
             //         function(isConfirm) {
         
             //             if (isConfirm) {
         
             //                 window.location = 'http://localhost/3tmobile/giohang.php';
         
             //             } else {
         
             //                 closeOnCancel: true;
         
             //             }
         
             //         });
         
             // })
         
         }
         
         
         
         function giohang2(id) {
         
             document.getElementById("khungnen").style.display = "block";
         
             document.getElementById("loadding").style.display = "block";
         
             jQuery.post('./gio-hang/', {
         
                 'qty': 1,
         
                 'maSanPham': id
         
             }, function(data) {
         
                 document.getElementById("khungnen").style.display = "none";
         
                 document.getElementById("loadding").style.display = "none";
         
                 swal({
         
                         title: "Thành công",
         
                         text: "Sản phẩm đã được thêm vào giỏ hàng!",
         
                         type: "success",
         
                         showCancelButton: true,
         
                         confirmButtonColor: '#F19F00',
         
                         confirmButtonText: 'Xem giỏ hàng',
         
                         cancelButtonText: "Tiếp tục mua",
         
                         closeOnConfirm: false,
         
                     },
         
                     function(isConfirm) {
         
                         if (isConfirm) {
         
                             window.location = './gio-hang/';
         
                         } else {
         
                             closeOnCancel: true;
         
                         }
         
                     });
         
             })
         
         }
         
         
         
         function comment(doc) {
         
             document.getElementById("khungnen").style.display = "block";
         
             document.getElementById("loadding").style.display = "block";
         
             jQuery.post('https://thietbivanphong123.com/comment', $(doc).serialize(), function(data) {
         
                 document.getElementById("khungnen").style.display = "none";
         
                 document.getElementById("loadding").style.display = "none";
         
                 if (data == 0) {
         
                     swal({
         
                             title: "Bình luận thành công. Đợi phê duyệt",
         
                             type: "success",
         
                             showCancelButton: false,
         
                             confirmButtonColor: '#F19F00',
         
                             confirmButtonText: 'OK',
         
                         },
         
                         function(isConfirm) {
         
                             if (isConfirm) {
         
                                 location.reload();
         
                             }
         
                         });
         
                 } else if (data == 1 || data != 0) {
         
                     swal({
         
                             title: "Đã xảy ra lỗi",
         
                             type: "error",
         
                             showCancelButton: false,
         
                             confirmButtonColor: '#F19F00',
         
                             confirmButtonText: 'OK',
         
                         },
         
                         function(isConfirm) {
         
                             if (isConfirm) {
         
                                 return false;
         
                             }
         
                         });
         
                 }
         
             });
         
             return false;
         
         }
         
         
         
         function rep(doc) {
         
             document.getElementById("khungnen").style.display = "block";
         
             document.getElementById("loadding").style.display = "block";
         
             jQuery.post('https://thietbivanphong123.com/comment', $(doc).serialize(), function(data) {
         
                 document.getElementById("khungnen").style.display = "none";
         
                 document.getElementById("loadding").style.display = "none";
         
                 if (data == 0) {
         
                     swal({
         
                             title: "Bình luận thành công. Đợi phê duyệt",
         
                             type: "success",
         
                             showCancelButton: false,
         
                             confirmButtonColor: '#F19F00',
         
                             confirmButtonText: 'OK',
         
                         },
         
                         function(isConfirm) {
         
                             if (isConfirm) {
         
                                 location.reload();
         
                             }
         
                         });
         
                 } else if (data == 1 || data != 0) {
         
                     swal({
         
                             title: "Đã xảy ra lỗi",
         
                             type: "error",
         
                             showCancelButton: false,
         
                             confirmButtonColor: '#F19F00',
         
                             confirmButtonText: 'OK',
         
                         },
         
                         function(isConfirm) {
         
                             if (isConfirm) {
         
                                 return false;
         
                             }
         
                         });
         
                 }
         
             });
         
             return false;
         
         }
         
      </script>

<section>
   
        <div class="bg_in">
            <div class="wrapper_all_main">
               <div class="wrapper_all_main_right no-padding-left" style="width:100%;">
                 
                    <div class="breadcrumbs">
                     <ol itemscope itemtype="http://schema.org/BreadcrumbList">
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                           <a itemprop="item" href="<?php echo BASE_URL?>/">
                           <span itemprop="name">Trang chủ</span></a>
                           <meta itemprop="position" content="1" />
                        </li>
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                           <a itemprop="item" href="sanpham.php">
                           <span itemprop="name">Sản phẩm</span></a>
                           <meta itemprop="position" content="2" />
                        </li>
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                           <span itemprop="item">
                           <strong itemprop="name">
                           <?=$product['name_prod']?>
                           </strong>
                           </span>
                           <meta itemprop="position" content="3" />
                        </li>
                     </ol>
                    </div>
                  <div class="content_page">
                     
                     
                     <div class="content-right-items margin0">
                        <div class="title-pro-des-ct">
                           <h1><?=$product['name_prod']?></h1>
                        </div>
                        <div class="slider-galery ">
                            <img src="<?php echo BASE_URL?>/public/upload/<?=$product['img_prod']?>" alt="">
                        </div>
                        <div class="content-des-pro">
                           <div class="content-des-pro_in">
                              <div class="pro-des-sum">
                                 <div class="price">
                                    <p class="code_skin" style="margin-bottom:10px">
                                       <span>Mã hàng: <a href="chitietsp.php">CRW-W06</a> | Thương hiệu: <a href="">Comrack</a></span>
                                    </p>
                                    <div class="status_pro">
                                       <span><b>Trạng thái:</b>  Còn hàng</span>
                                    </div>
                                    <div class="status_pro"><span><b>Xuất xứ:</b>  Việt Nam</span></div>
                                 </div>
                                 <div class="color_price">
                                    <span class="title_price bg_green">Giá bán</span> <?=number_format($product['price_prod'])?> <span>vnđ</span>.
                                    <div class="clear"></div>
                                 </div>
                                 <div class="color_price">
                                    <span class="title_price">Giá cũ</span> 
                                    <del>0 <span>vnđ</span></del>
                                 </div>
                              </div>
                              <div class="clear"></div>
                           </div>
                           
                           <div class="ct">
                              <div class="number_price">
                                 <div class="custom pull-left">
                                    <button onclick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty > 0 ) result.value--;return false;" class="reduced items-count" type="button">-</button>
                                    <input type="text" class="input-text qty" title="Qty" value="1" maxlength="12" id="qty" name="qty">
                                    <button onclick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;" class="increase items-count" type="button">+</button>
                                    <div class="clear"></div>
                                 </div>
                                 <div class="clear"></div>
                              </div>
                              <div class="wp_a">
                                 <form action="<?php echo BASE_URL?>/giohang/themgiohang" method="POST">
                                    <input type="hidden" name="id_prod" value="<?=$product['id_prod']?>">
                                    <input type="hidden" name="name_prod" value="<?=$product['name_prod']?>">
                                    <input type="hidden" name="price_prod" value="<?=$product['price_prod']?>">
                                    <input type="hidden" name="img_prod" value="<?=$product['img_prod']?>">
                                    <input type="hidden" name="quantity_prod" value="1">
                                    <button type="submit" class="btn btn-warning" style="background-color:#ffbf00;box-shadow: none">Đặt hàng</button>
                                 </form>
                                 <!-- <i class="fa fa-shopping-cart" aria-hidden="true"></i> <span class="text-mobile-buy">Mua hàng</span> -->
                                 
                                 <!-- <a href="tel:090 66 99 038" class="view_duan">
                                 <i class="fa fa-phone" aria-hidden="true"></i> <span class="text-mobile-buy">Gọi ngay</span>
                                 </a> -->
                                 <div class="clear"></div>
                              </div>
                              <div class="clear"></div>
                           </div>
                           
                           <div class="tags_products prodcut_detail">
                              <div class="tab_link">
                                 <h3 class="title_tab_link">TAGS: </h3>
                                 <div class="content_tab_link"> <a href="tag/"></a></div>
                              </div>
                           </div>
                        </div>
                        
                        <div class="clear"></div>
                     </div>
                  </div>
               </div>
               <div class="wrapper_all_main_right">
                  <div class="tabs-animation">
                     <div class="bg_in">
                        <div id="nav-anchor"></div>
                        <nav class="nav-tabs">
                           <ul>
                              <li><a href="#productDetail"><i class="fa fa-info-circle" aria-hidden="true"></i> <span class="text-mobile">Chi tiết sản phẩm</span></a></li>
                              <li><a href="#inforProduct"><i class="fa fa-file-text-o" aria-hidden="true"></i><span class="text-mobile"> Thông số kỹ thuật</span></a></li>
                              <li><a href="#Comment"><i class="fa fa-comment-o" aria-hidden="true"></i><span class="text-mobile"> Bình luận</span></a></li>
                           </ul>
                           <div class="name-product">
                              Iphone X
                              <span class="" style="font-size:16px; color:red; padding-left:5px;">1,960,000 VNĐ</span>
                           </div>
                           <div class="ct btn-wp">
                              <div class="wp_a">
                                 <a onclick="return giohang(371);" class="view_duan">
                                 <i class="fa fa-shopping-cart" aria-hidden="true"></i> <span class="text-mobile-buy">Mua hàng</span>
                                 </a>
                                 <a href="tel:090 66 99 038" class="view_duan">
                                 <i class="fa fa-phone" aria-hidden="true"></i> <span class="text-mobile-buy">Gọi ngay</span>
                                 </a>
                                 <div class="clear"></div>
                              </div>
                           </div>
                        </nav>
                     </div>
                  </div>
                  <div class="product_detail_info">
                     <div class="module_pro_all" id="productDetail">
                        <div class="box-title">
                           <div class="title-bar">
                              <h3>Chi tiết sản phẩm</h3>
                           </div>
                        </div>
                        <div class="tab_content content_text_product content-module">
                            <?=$product['desc_prod']?>
                        </div>
                     </div>
                     
                  </div>
                  <div class="clear"></div>
        
                  <script type="text/javascript">
                     CloudZoom.quickStart();
                     
                     jQuery(function($) {
                     
                         var $userName = $('.name');
                     
                         if ($userName.length) {
                     
                             $userName.avatarMe({
                     
                                 className: 'avatar-me',
                     
                                 maxChar: 1
                     
                             });
                     
                         }
                     
                     });
                     
                  </script>
                  <div class="clear"></div>
                  <!-- <div class="dmsub">
                     <div class="tags_products desktop">
                        <div class="tab_link">
                           <h3 class="title_tab_link">TAGS: </h3>
                           <div class="content_tab_link"> 
                            <a href="tag/">Iphone x</a>
                            <a href="tag/">Iphone 10</a>
                             <a href="tag/">Iphone 11</a>
                              <a href="tag/">Iphone Like New</a>
  
                            </div>
                        </div>
                     </div>
                  </div> -->
                  <!-- <div class="content-brank">
                     <p><strong>Apple </strong>tự hảo<strong>&nbsp;</strong>là thương hiệu Việt Nam về sản phẩm tủ rack 19", tủ cửa lưới, tủ treo tường, bảo vệ thiết bị mạng an toàn, dễ dàng quản lý và vận hành.</p>
                  </div> -->

                  <div class="module_pro_all">
                     <div class="box-title">
                        <div class="title-bar">
                           <h3>Sản phẩm liên quan</h3>
                        </div>
                     </div>
                     <div class="pro_all_gird">
                        <div class="girds_all list_all_other_page ">
                        <div class="grids">
                       <div class="grids_in">
                        <div class="content">
                        <div class="img-right-pro">
                          
                           <a href="sanpham.php">
                           <img class="lazy img-pro content-image" src="image/iphone.png" data-original="image/iphone.png" alt="Máy in Canon MF229DW" />
                           </a>

                           <div class="content-overlay"></div>
                           <div class="content-details fadeIn-top">
                             <ul class="details-product-overlay">
                                <li>Màn hình : Super Amoled 4.5k</li>
                                <li>Độ phân giải : 2K+(1440x3040)</li>
                                <li>Ram : 8GB</li>
                                <li>CPU : Android 9.0</li>
                                <li>GPU : Mali-G76 MP12</li>
                                <li>SSD : 512MB</li>

                             </ul>
                            
                           </div>
                        </div>
                        <div class="name-pro-right">
                           <a href="chitietsp.php">
                              <h3>Iphone X 64GB</h3>
                           </a>
                        </div>
                        <div class="add_card">
                           <a onclick="return giohang(579);">
                           <i class="fa fa-shopping-cart" aria-hidden="true"></i> Đặt hàng
                           </a>
                        </div>
                        <div class="price_old_new">
                           <div class="price">
                              <span class="news_price">17.800.000đ </span>
                           </div>
                        </div>
                     </div>
                  </div>
                  </div>
                           <div class="grids">
                       <div class="grids_in">
                        <div class="content">
                        <div class="img-right-pro">
                          
                           <a href="sanpham.php">
                           <img class="lazy img-pro content-image" src="image/iphone.png" data-original="image/iphone.png" alt="Máy in Canon MF229DW" />
                           </a>

                           <div class="content-overlay"></div>
                           <div class="content-details fadeIn-top">
                             <ul class="details-product-overlay">
                                <li>Màn hình : Super Amoled 4.5k</li>
                                <li>Độ phân giải : 2K+(1440x3040)</li>
                                <li>Ram : 8GB</li>
                                <li>CPU : Android 9.0</li>
                                <li>GPU : Mali-G76 MP12</li>
                                <li>SSD : 512MB</li>

                             </ul>
                            
                           </div>
                        </div>
                        <div class="name-pro-right">
                           <a href="chitietsp.php">
                              <h3>Iphone X 64GB</h3>
                           </a>
                        </div>
                        <div class="add_card">
                           <a onclick="return giohang(579);">
                           <i class="fa fa-shopping-cart" aria-hidden="true"></i> Đặt hàng
                           </a>
                        </div>
                        <div class="price_old_new">
                           <div class="price">
                              <span class="news_price">17.800.000đ </span>
                           </div>
                        </div>
                     </div>
                  </div>
                  </div>
                           <div class="grids">
                       <div class="grids_in">
                        <div class="content">
                        <div class="img-right-pro">
                          
                           <a href="sanpham.php">
                           <img class="lazy img-pro content-image" src="image/iphone.png" data-original="image/iphone.png" alt="Máy in Canon MF229DW" />
                           </a>

                           <div class="content-overlay"></div>
                           <div class="content-details fadeIn-top">
                             <ul class="details-product-overlay">
                                <li>Màn hình : Super Amoled 4.5k</li>
                                <li>Độ phân giải : 2K+(1440x3040)</li>
                                <li>Ram : 8GB</li>
                                <li>CPU : Android 9.0</li>
                                <li>GPU : Mali-G76 MP12</li>
                                <li>SSD : 512MB</li>

                             </ul>
                            
                           </div>
                        </div>
                        <div class="name-pro-right">
                           <a href="chitietsp.php">
                              <h3>Iphone X 64GB</h3>
                           </a>
                        </div>
                        <div class="add_card">
                           <a onclick="return giohang(579);">
                           <i class="fa fa-shopping-cart" aria-hidden="true"></i> Đặt hàng
                           </a>
                        </div>
                        <div class="price_old_new">
                           <div class="price">
                              <span class="news_price">17.800.000đ </span>
                           </div>
                        </div>
                     </div>
                  </div>
                  </div>
                           <div class="clear"></div>
                        </div>
                        <div class="clear"></div>
                     </div>
                     <div class="clear"></div>
                  </div>
               </div>
              
               <!--end:left-->
               <div class="clear"></div>
            </div>
            <div class="clear"></div>
         </div>
         <script>
            jQuery(document).ready(function() {
            
            
            
                var div_fixed = jQuery('.product_detail_info').offset().top;
            
                jQuery(window).scroll(function() {
            
                    if (jQuery(window).scrollTop() > div_fixed) {
            
                        jQuery('.tabs-animation').addClass('fix_top');
            
                    } else {
            
                        jQuery('.tabs-animation').removeClass('fix_top');
            
                    }
            
                });
            
                jQuery(window).load(function() {
            
                    if (jQuery(window).scrollTop() > div_fixed) {
            
                        jQuery('.tabs-animation').addClass('fix_top');
            
                    }
            
                });
            
            });
            
         </script>
</section>

<link async rel="stylesheet" href="<?php echo BASE_URL?>/public/client/css/cssfooter.css"/>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      
      <script defer type="text/javascript" src="<?php echo BASE_URL?>/public/client/js/sweet-alert.js"></script>
      <script defer type="text/javascript" src="<?php echo BASE_URL?>/public/client/js/jquery.flexslider-min.js"></script>
      <script defer src="<?php echo BASE_URL?>/public/client/js/owl.carousel.js" type="text/javascript"></script>
      <script defer src="<?php echo BASE_URL?>/public/client/js/jquery.lazyload.min.js" type="text/javascript"></script>
      <script defer type="text/javascript" src="<?php echo BASE_URL?>/public/client/js/script_ex.js"></script>
      <script defer type="text/javascript" src="<?php echo BASE_URL?>/public/client/js/script_menu.js"></script>
      <!-- <link rel="stylesheet" type="text/css" href="template/Default/js/sweet-alert.css"/> -->
    <script type="text/javascript">
      $(document).ready(function() {

        var sync1 = $("#sync1");
        var sync2 = $("#sync2");
        var slidesPerPage = 5; //globaly define number of elements per page
        var syncedSecondary = true;

        sync1.owlCarousel({
          items : 1,
          slideSpeed : 2000,
          nav: false,
          autoplay: true,
          dots: false,
          loop: true,
          responsiveRefreshRate : 200,
          navText: ['<svg width="10%" height="10%" viewBox="0 0 11 20"><path style="fill:none;stroke-width: 2px;stroke: #000;" d="M9.554,1.001l-8.607,8.607l8.607,8.606"/></svg>',
          '<svg width="3%" height="3%" viewBox="0 0 11 20" version="1.1"><path style="fill:none;stroke-width: 2px;stroke: #000;" d="M1.054,18.214l8.606,-8.606l-8.606,-8.607"/></svg>'],
        }).on('changed.owl.carousel', syncPosition);

        sync2
          .on('initialized.owl.carousel', function () {
            sync2.find(".owl-item").eq(0).addClass("current");
          })
          .owlCarousel({
          items : slidesPerPage,
          dots: false,
          nav: false,
          smartSpeed: 200,
          slideSpeed : 500,
          slideBy: slidesPerPage, //alternatively you can slide by 1, this way the active slide will stick to the first item in the second carousel
          responsiveRefreshRate : 100
        }).on('changed.owl.carousel', syncPosition2);

        function syncPosition(el) {
          //if you set loop to false, you have to restore this next line
          //var current = el.item.index;
          
          //if you disable loop you have to comment this block
          var count = el.item.count-1;
          var current = Math.round(el.item.index - (el.item.count/2) - .5);
          
          if(current < 0) {
            current = count;
          }
          if(current > count) {
            current = 0;
          }
          
          //end block

          sync2
            .find(".owl-item")
            .removeClass("current")
            .eq(current)
            .addClass("current");
          var onscreen = sync2.find('.owl-item.active').length - 1;
          var start = sync2.find('.owl-item.active').first().index();
          var end = sync2.find('.owl-item.active').last().index();
          https://thietbivanphong123.com/data/upload/ST8000VN004.jpg
          if (current > end) {
            sync2.data('owl.carousel').to(current, 100, true);
          }
          if (current < start) {
            sync2.data('owl.carousel').to(current - onscreen, 100, true);
          }
        }
        
        function syncPosition2(el) {
          if(syncedSecondary) {
            var number = el.item.index;
            sync1.data('owl.carousel').to(number, 100, true);
          }
        }
        
        sync2.on("click", ".owl-item", function(e){
          e.preventDefault();
          var number = $(this).index();
          sync1.data('owl.carousel').to(number, 300, true);
        });
      });
  </script> 
   
      <div style="height: 1840px;position: fixed;width: 100%;top: 0px;left: 0px;right: 0px;bottom: 0px;z-index: 1001;background: #000 none repeat scroll 0% 0%;opacity: 0.3;display: none;text-align:center" id="khungnen"></div>
      <div style="display: none;left: 70%;margin-left: -309px;z-index: 1002;position: fixed;top: 40%;margin-top: 0px;" id="loadding">
         <img src="image/loader.gif" />
      </div>