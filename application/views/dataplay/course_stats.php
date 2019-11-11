<!DOCTYPE html>
<html lang="en">
<head>
<title>Courses</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Unicat project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="<?=THEME?>styles/bootstrap4/bootstrap.min.css">
<link href="<?=THEME?>plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="<?=THEME?>plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?=THEME?>plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="<?=THEME?>plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="<?=THEME?>plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="<?=THEME?>styles/courses.css">
<link rel="stylesheet" type="text/css" href="<?=THEME?>styles/courses_responsive.css">
</head>
<body>

<div class="super_container">

  <!-- Header -->

  <header class="header">
      
    <!-- Top Bar -->
    <div class="top_bar">
      <div class="top_bar_container">
        <div class="container">
          <div class="row">
            <div class="col">
              <div class="top_bar_content d-flex flex-row align-items-center justify-content-start">
                <ul class="top_bar_contact_list">
                  <li><div class="question">Have any questions?</div></li>
                  <li>
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    <div>001-1234-88888</div>
                  </li>
                  <li>
                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                    <div>info.deercreative@gmail.com</div>
                  </li>
                </ul>
                <div class="top_bar_login ml-auto">
                  <div class="login_button"><a href="#">Register or Login</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>        
    </div>

    <!-- Header Content -->
    <div class="header_container">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="header_content d-flex flex-row align-items-center justify-content-start">
              <div class="logo_container">
                <a href="#">
                  <div class="logo_text">Unic<span>at</span></div>
                </a>
              </div>
              <nav class="main_nav_contaner ml-auto">
                <ul class="main_nav">
                  <li><a href="<?=CTRL?>Main/mainpage">Home</a></li>
                  <li><a href="<?=CTRL?>Main/about">About</a></li>
                  <li class="active"><a href="<?=CTRL?>Main/coursepage">Courses</a></li>
                  <li><a href="<?=CTRL?>Main/index">Blog</a></li>
                  <!-- <li><a href="#">Page</a></li> -->
                  <!-- <li><a href="contact.html">Contact</a></li> -->
                  <?php if($this->session->userdata('isUserLoggedIn')) {?>
                    <li><a href="<?=CTRL?>Main/logout">Logout</a></li>
                  <?php }?>
                </ul>
                <div class="search_button"><i class="fa fa-search" aria-hidden="true"></i></div>

                <!-- Hamburger -->

                <div class="shopping_cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i></div>
                <div class="hamburger menu_mm">
                  <i class="fa fa-bars menu_mm" aria-hidden="true"></i>
                </div>
              </nav>

            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Header Search Panel -->
    <div class="header_search_container">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="header_search_content d-flex flex-row align-items-center justify-content-end">
              <form action="#" class="header_search_form">
                <input type="search" class="search_input" placeholder="Search" required="required">
                <button class="header_search_button d-flex flex-column align-items-center justify-content-center">
                  <i class="fa fa-search" aria-hidden="true"></i>
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>      
    </div>      
  </header>

  <!-- Menu -->

  <div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
    <div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
    <div class="search">
      <form action="#" class="header_search_form menu_mm">
        <input type="search" class="search_input menu_mm" placeholder="Search" required="required">
        <button class="header_search_button d-flex flex-column align-items-center justify-content-center menu_mm">
          <i class="fa fa-search menu_mm" aria-hidden="true"></i>
        </button>
      </form>
    </div>
    <nav class="menu_nav">
      <ul class="menu_mm">
        <li class="menu_mm"><a href="<?=CTRL?>Main/mainpage">Home</a></li>
        <li class="menu_mm"><a href="<?=CTRL?>Main/about">About</a></li>
        <li class="menu_mm"><a href="<?=CTRL?>Main/coursepage">Courses</a></li>
        <li class="menu_mm"><a href="<?=CTRL?>Main/index">Blog</a></li>
        <!-- <li class="menu_mm"><a href="#">Page</a></li> -->
        <!-- <li class="menu_mm"><a href="contact.html">Contact</a></li> -->
        <?php if($this->session->userdata('isUserLoggedIn')) {?>
          <li><a href="<?=CTRL?>Main/logout">Logout</a></li>
        <?php }?>
      </ul>
    </nav>
  </div>
  
  <!-- Home -->

  <div class="home">
    <div class="breadcrumbs_container">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="breadcrumbs">
              <ul>
                <li><a href="index.html">Home</a></li>
                <li>Courses</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>      
  </div>

  <!-- Course -->

  <div class="machine_learning">
    <div class="container">
      <div class="row">
        <div class="col-lg-1"></div>
        <div class="col-lg-8">
          <br><br><br>
            <h1>STATISTICS</h1>
            
            <br>
            <?php echo $current['current'][0]['link'] ?>
            <br><br>
            <h2><?php echo $current['current'][0]['link_text'] ?></h2>
            <p><?php echo $current['current'][0]['link_description'] ?></p>
        </div>
        <div class="col-lg-3" style="height: 750px;overflow: scroll;">
          <br><br>
            <?php foreach($list['list'] as $cour) { ?>
              <br><br>
            <h2><a href="<?= base_url(); ?>index.php/Main/course_stats/<?php echo $cour['link_id'];?>"><?php echo $cour['link_text'] ?></a></h2>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>

  <!-- Newsletter -->

  <div class="newsletter">
    <div class="newsletter_background parallax-window" data-parallax="scroll" data-image-src="<?=THEME?>images/newsletter.jpg" data-speed="0.8"></div>
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="newsletter_container d-flex flex-lg-row flex-column align-items-center justify-content-start">

            <!-- Newsletter Content -->
            <div class="newsletter_content text-lg-left text-center">
              <div class="newsletter_title">sign up for news and offers</div>
              <div class="newsletter_subtitle">Subcribe to lastest smartphones news & great deals we offer</div>
            </div>

            <!-- Newsletter Form -->
            <div class="newsletter_form_container ml-lg-auto">
              <form action="#" id="newsletter_form" class="newsletter_form d-flex flex-row align-items-center justify-content-center">
                <input type="email" class="newsletter_input" placeholder="Your Email" required="required">
                <button type="submit" class="newsletter_button">subscribe</button>
              </form>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->

  <footer class="footer">
    <div class="footer_background" style="background-image:url(<?=THEME?>images/footer_background.png)"></div>
    <div class="container">
      <div class="row footer_row">
        <div class="col">
          <div class="footer_content">
            <div class="row">

              <div class="col-lg-3 footer_col">
          
                <!-- Footer About -->
                <div class="footer_section footer_about">
                  <div class="footer_logo_container">
                    <a href="#">
                      <div class="footer_logo_text">Unic<span>at</span></div>
                    </a>
                  </div>
                  <div class="footer_about_text">
                    <p>Lorem ipsum dolor sit ametium, consectetur adipiscing elit.</p>
                  </div>
                  <div class="footer_social">
                    <ul>
                      <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    </ul>
                  </div>
                </div>
                
              </div>

              <div class="col-lg-3 footer_col">
          
                <!-- Footer Contact -->
                <div class="footer_section footer_contact">
                  <div class="footer_title">Contact Us</div>
                  <div class="footer_contact_info">
                    <ul>
                      <li>Email: Info.deercreative@gmail.com</li>
                      <li>Phone:  +(88) 111 555 666</li>
                      <li>40 Baria Sreet 133/2 New York City, United States</li>
                    </ul>
                  </div>
                </div>
                
              </div>

              <div class="col-lg-3 footer_col">
          
                <!-- Footer links -->
                <div class="footer_section footer_links">
                  <div class="footer_title">Contact Us</div>
                  <div class="footer_links_container">
                    <ul>
                      <li><a href="index.html">Home</a></li>
                      <li><a href="about.html">About</a></li>
                      <li><a href="contact.html">Contact</a></li>
                      <li><a href="#">Features</a></li>
                      <li><a href="courses.html">Courses</a></li>
                      <li><a href="#">Events</a></li>
                      <li><a href="#">Gallery</a></li>
                      <li><a href="#">FAQs</a></li>
                    </ul>
                  </div>
                </div>
                
              </div>

              <div class="col-lg-3 footer_col clearfix">
          
                <!-- Footer links -->
                <div class="footer_section footer_mobile">
                  <div class="footer_title">Mobile</div>
                  <div class="footer_mobile_content">
                    <div class="footer_image"><a href="#"><img src="<?=THEME?>images/mobile_1.png" alt=""></a></div>
                    <div class="footer_image"><a href="#"><img src="<?=THEME?>images/mobile_2.png" alt=""></a></div>
                  </div>
                </div>
                
              </div>

            </div>
          </div>
        </div>
      </div>

      <div class="row copyright_row">
        <div class="col">
          <div class="copyright d-flex flex-lg-row flex-column align-items-center justify-content-start">
            <div class="cr_text"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
            <div class="ml-lg-auto cr_links">
              <ul class="cr_list">
                <li><a href="#">Copyright notification</a></li>
                <li><a href="#">Terms of Use</a></li>
                <li><a href="#">Privacy Policy</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
</div>

<script src="<?=THEME?>js/jquery-3.2.1.min.js"></script>
<script src="<?=THEME?>styles/bootstrap4/popper.js"></script>
<script src="<?=THEME?>styles/bootstrap4/bootstrap.min.js"></script>
<script src="<?=THEME?>plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="<?=THEME?>plugins/easing/easing.js"></script>
<script src="<?=THEME?>plugins/parallax-js-master/parallax.min.js"></script>
<script src="<?=THEME?>plugins/colorbox/jquery.colorbox-min.js"></script>
<script src="<?=THEME?>js/courses.js"></script>
</body>
</html>