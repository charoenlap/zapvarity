<section class="main-hot-news">
    <div style="background-color: black; padding-top:50px;">
        <div class="container">
            <h6 class="text-light"><span class="badge badge-danger"><?php echo $title; ?></span> <?php echo $content['result']['date_create']; ?></h6>
            <div class="row">
                <div class="col">
                    <div class="single-most-popular-news">
                        <div class="popular-news-content">
                            <h5 class="font-weight-bold text-light"><?php echo $content['result']['title']; ?></h5>
                            <!-- <h6 class="font-weight-bold text-light">เขียนโดย <span class="text-danger font-weight-bold"></span></h6> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php //echo $content['cover']; ?>
    <div class="container-fluid-img-overlay wrapper">
        <img src="img.php?file=2,<?php echo $content['cover']; ?>,1200,300" alt="<?php echo $content['result']['title']; ?>" 
        class="img-cover-detail-size img-reponsive img-reponsive-center ">
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 mb-2 pl-1 pr-1">
                <?php if(!empty($content['link'])){ ?>
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="<?php echo $content['link']; ?>" allowfullscreen></iframe>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            
            <!-- <div class="col-md-1 top-header-social">
                <h6 class="badge badge-pill badge-primary" style="font-size: 16px; margin-top: 20px;">แชร์</h6>
                <li style="margin: 5px;">
                    <a href="#" class="facebook" target="_blank">
                            <i class='bx bxl-facebook'></i>
                    </a>
                </li>
                <br>
                <li style="margin: 5px;">
                    <a href="#" class="twitter" target="_blank">
                            <i class='bx bxl-twitter'></i>
                    </a>
                </li>
            </div> -->
            <div class="col-md-9 text-justify " style="margin-top: 20px;">
                <h5 class="text-danger text-center font-weight-bold"><?php echo $content['result']['title']; ?></h5>
                <div class="content-detail">
                    <?php echo html_entity_decode($content['result']['detail']); ?>
                </div>
                <!-- <div class="container">
                    <a class="badge badge-secondary text-light" href="<?php echo route('cat'); ?>">#อีรัน</a>
                    <a class="badge badge-secondary text-light" href="<?php echo route('cat'); ?>">#สถานเอกอัครราชทูตไทย</a>
                </div> -->
            </div>
            <div class="col-md-3">
                <div class="section-title" style="margin-top: 20px;">
                    <h2 class="font-weight-bold text-danger">ข่าวที่เกี่ยวข้อง</h2>
                </div>
                <?php foreach($related as $val){ 
                    ?>
                <a href="<?php echo route('detail&id='.$val['result']['id']); ?>" class="text-decoration-none">
                    <div class="single-most-popular-news">
                        <div class="popular-news-image">
                            <img src="<?php echo photo($val['cover']); ?>" alt="image">
                        </div>
                        <div class="popular-news-content">
                            <span class="font-weight-bold"><?php echo $val['result']['title']; ?></span>
                        </div>
                    </div>
                </a>
                <hr>
                <?php } ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 article-footer">
                <div class="article-share">
                    <ul class="social">
                        <li>
                             <div class="fb-share-button" data-href="<?php echo MURL.'index.php?route=video/video_detail&id='.get('id'); ?>" data-layout="button_count" data-size="small"><a target="_blank" href="<?php echo MURL.'index.php?route=detail&id='.get('id'); ?>" class="fb-xfbml-parse-ignore">Share</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v9.0&appId=1140190572668464&autoLogAppEvents=1" nonce="HruokkHY"></script>