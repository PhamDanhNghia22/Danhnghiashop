<section>
        <div class="bg_in row">
            <div class="col-md-7 col-xs-12 col-sm-12" style="padding: 0;margin-top:10px; min-height:350px;">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" style="min-height:350px;">
                        <div class="item active">
                            <img src="<?php echo BASE_URL?>/public/client/image/localbrand2.jpg" style="min-height:350px;" alt="Siêu khuyến mãi">
                        </div>

                        <div class="item">
                            <img src="<?php echo BASE_URL?>/public/client/image/local-brand1.jpg" style="min-height:350px;" alt="Siêu khuyến mãi">
                        </div>

                        <div class="item">
                            <img src="<?php echo BASE_URL?>/public/client/image/local_brand_3.jpg" style="min-height:350px;" alt="Siêu khuyến mãi">
                        </div>
                    </div>

                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-md-4 col-xs-12 col-sm-12" style="padding: 0;margin-left:30px;margin-top:5px;">
                <div class="row">
                    <div class="panel  panel-warning panel-styling">
                        <div class="panel-heading">Tin tức cập nhật</div>
                        <div class="panel-body scrollable-panel">
                            <?php 
                                foreach($news as $value){
                                    if($value['update_date_news'] != NULL){
                                    
                            ?>
                            <div class="row">
                                <div class="col-md-4 col-xs-4 col-sm-4">
                                    <a href="<?=BASE_URL?>trangchu/ChiTietTin/<?=$value['Slug_news']?>">
                                    <img src="<?=BASE_URL?>/public/upload/<?=$value['img_news']?>">
                                    </a>
                                    
                                </div>
                                <div class="col-md-8 col-xs-8 col-sm-8">
                                    <a href="<?=BASE_URL?>trangchu/ChiTietTin/<?=$value['Slug_news']?>">   
                                    <h4><?=$value['title_news']?></h4>
                                    <p><?=$value['summary_news']?></p>
                                    </a>
                                </div>
                            </div>
                            <hr>
                            <?php }}?>
                            
                            <!-- <div class="row">
                                <div class="col-md-4 col-xs-4 col-sm-4">
                                    <img src="image/iphone.png">
                                </div>
                                <div class="col-md-8 col-xs-8 col-sm-8">
                                    <h4>Sự kiện iphone 11 sắp ra mắt</h4>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-4 col-xs-4 col-sm-4">
                                    <img src="image/iphone.png">
                                </div>
                                <div class="col-md-8 col-xs-8 col-sm-8">
                                    <h4>Sự kiện iphone 11 sắp ra mắt</h4>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-4 col-xs-4 col-sm-4">
                                    <img src="image/iphone.png">
                                </div>
                                <div class="col-md-8 col-xs-8 col-sm-8">
                                    <h4>Sự kiện iphone 11 sắp ra mắt</h4>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                                </div>
                            </div>
                            <hr> -->
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="clear"></div>
    </section>