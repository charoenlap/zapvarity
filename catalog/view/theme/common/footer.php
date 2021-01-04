<section class="footer-area">
  <div class="container text-center">
    <div class="row">
      <div class="col-md-12">
        <div class="single-footer-widget">
          <a href="<?php echo route('home'); ?>">
            <img src="html/assets/img/Logo_Zapp-variety01.png" alt="image" class="footer-logo">
          </a>
          <ul class="social">
            <li>
                <a href="https://www.facebook.com/zappvariety.news" class="" target="_blank">
                    <i class='bx bxl-facebook'></i>
                </a>
            </li>
            <li>
                <a href="https://www.instagram.com/zapp_variety/" class="" target="_blank">
                    <i class='bx bxl-instagram'></i>
                </a>
            </li>
            <li>
                <a href="https://www.youtube.com/channel/UC5-8XgmQf4kEfl3OXDCca0g" class="" target="_blank">
                    <i class='bx bxl-youtube'></i>
                </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="row justify-content-md-center">
      <div class="col-md-12">
        <ul class="footer-link">
          <?php foreach ($menu as $key => $value) { ?>
          <li><a href="<?PHP echo route('cat&id='.$value['id']); ?>"><?php echo $value['title']; ?></a></li>
          <?php } ?>
        </ul>
      </div>
    </div>
  </div>
</section>


<div class="copyright-area">
  <div class="container">
    <div class="copyright-area-content">
      <p>
        <i class='bx bx-copyright'></i>
        Copyright
      </p>
    </div>
  </div>
</div>


<div class="go-top">
  <i class='bx bx-up-arrow-alt'></i>
</div>
<script src="html/assets/js/jquery.min.js"></script>
<script src="html/assets/js/popper.min.js"></script>
<script src="html/assets/js/bootstrap.min.js"></script>
<script src="html/assets/js/jquery.meanmenu.js"></script>
<script src="html/assets/js/owl.carousel.min.js"></script>
<script src="html/assets/js/jquery.magnific-popup.min.js"></script>
<script src="html/assets/js/jquery.ajaxchimp.min.js"></script>
<script src="html/assets/js/form-validator.min.js"></script>
<script src="html/assets/js/contact-form-script.js"></script>
<script src="html/assets/js/wow.min.js"></script>
<script src="html/assets/js/main.js"></script>
</body>

</html>