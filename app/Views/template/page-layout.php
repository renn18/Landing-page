<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>My Landing page | Renn</title>
  <!-- Landing Page Link -->
  <link rel="shortcut icon" href="<?php echo base_url('/assets/image/favicon.png')?>" type="image/x-icon">
  <link rel="stylesheet" href="<?php echo base_url('/assets/css/bootstrap.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('/assets/fonts/icon-font/css/style.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('/assets/fonts/typography-font/typo.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('/assets/fonts/fontawesome-5/css/all.css')?>">
  <link href="https://fonts.googleapis.com/css2?family=Karla:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Gothic+A1:wght@400;500;700;900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800;900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url('/assets/plugins/aos/aos.min.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('/assets/plugins/slick/slick.min.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('/assets/css/main.css')?>">
  
</head>

<body data-theme-mode-panel-active data-theme="light" style="font-family: 'Mazzard H';">
  <div class="site-wrapper overflow-hidden position-relative">
    <!-- Site Header -->
    <!-- Preloader -->
    <!-- <div id="loading">
    <div class="preloader">
     <img src="#" alt="preloader">
   </div>
   </div>    -->
    <!--Site Header Area -->
    <header class="site-header site-header--menu-left landing-11-menu site-header--absolute site-header--sticky">
      <div class="container">
        <nav class="navbar site-navbar">
          <!-- Brand Logo-->
          <div class="brand-logo">
            <a href="#">
              <p>Landing Page</p>
              <!-- light version logo (logo must be black)-->
              <img src="#" alt="" class="light-version-logo">
              <!-- Dark version logo (logo must be White)-->
              <img src="#" alt="" class="dark-version-logo">
            </a>
          </div>
          <div class="menu-block-wrapper">
            <div class="menu-overlay"></div>
            <nav class="menu-block" id="append-menu-header">
              <div class="mobile-menu-head">
                <div class="go-back">
                  <i class="fa fa-angle-left"></i>
                </div>
                <div class="current-menu-title"></div>
                <div class="mobile-menu-close">&times;</div>
              </div>
              <ul class="site-menu-main">
                <li class="nav-item nav-item-has-children">
                  <a href="#" class="nav-link-item drop-trigger">Menu <i class="fas fa-angle-down"></i>
                  </a>
                  <ul class="sub-menu">
                    <li class="sub-menu--item">
                      <a href="#cv">Curriculum Vitae (CV)</a>
                    </li>
                    <li class="sub-menu--item">
                      <a href="#portofolio">Portofolio</a>
                    </li>
                    <li class="sub-menu--item">
                      <a href="#testimonial">Testimonial</a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link-item">Blog</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link-item">Support</a>
                </li>
              </ul>
            </nav>
          </div>
          <div class="header-btns  header-btn-l11 ms-auto d-none d-xs-inline-flex align-items-center">
            <a class="btn log-in-btn focus-reset" href="#">
              Log in
            </a>
            <a class="download-trail-btn btn focus-reset" href="#">
              Sign Up
            </a>
          </div>
          <!-- mobile menu trigger -->
          <div class="mobile-menu-trigger">
            <span></span>
          </div>
          <!--/.Mobile Menu Hamburger Ends-->
        </nav>
      </div>
    </header>
    <!-- navbar- -->
    
  <?= $this->renderSection('content') ?>

    <!-- Footer Area -->
    <footer class="footer-l-11 text-center text-md-start">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="footer-logo-l-11">
              <a href="#"><img src="<?php echo base_url('/assets/image/logo/logo-black.png')?>" alt="logo"></a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="footer-widget-l-11">
              <ul class="pl-0 list-unstyled d-flex flex-wrap justify-content-center align-items-end ">
                <li class="d-flex"><a href="">About</a></li>
                <li class="d-flex"><a href="">Features</a></li>
                <li class="d-flex"><a href="">Works</a></li>
                <li class="d-flex"><a href="">Career</a></li>
                <li class="d-flex"><a href="">Contact</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-3">
            <div class="social-icons-l-11">
              <ul class="pl-0 list-unstyled d-flex  justify-content-center justify-content-md-end align-items-end ">
                <li class="d-flex flex-column justify-content-center"><a href="#"><i
                                    class="fab fa-twitter"></i></a></li>
                <li class="d-flex flex-column justify-content-center"><a href="#"><i
                                    class="fab fa-facebook-f"></i></a></li>
                <li class="d-flex flex-column justify-content-center"><a href="#"><i
                                    class="fab fa-google"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <div class="copyright-area-l-11">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="text-center">
              <p>?? Grayic 2021 All right reserved. </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Landing Page Script -->
  <script src="<?php echo base_url('/assets/js/vendor.min.js')?>"></script>
  <script src="<?php echo base_url('/assets/plugins/aos/aos.min.js')?>"></script>
  <script src="<?php echo base_url('/assets/plugins/slick/slick.min.js')?>"></script>
  <script src="<?php echo base_url('/assets/plugins/menu/menu.js')?>"></script>
  <script src="<?php echo base_url('/assets/js/custom.js')?>"></script>

  <!-- Login Page Script -->
  <script src="<?php echo base_url('/assets/vendor/jquery/jquery-3.2.1.min.js')?>"></script>
	<script src="<?php echo base_url('/assets/vendor/bootstrap/js/popper.js')?>"></script>
	<script src="<?php echo base_url('/assets/vendor/bootstrap/js/bootstrap.min.js')?>"></script>
	<script src="<?php echo base_url('/assets/vendor/select2/select2.min.js')?>"></script>
	<script src="<?php echo base_url('/assets/vendor/tilt/tilt.jquery.min.js')?>"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
	<script src="<?php echo base_url('/assets/js/main.js')?>"></script>

</body>

</html>