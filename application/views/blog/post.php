<!DOCTYPE html>
<html lang="en">
<head>
<title>Blog</title>
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
                  <div class="logo_text"><a href="<?=CTRL?>Main/mainpage">Unic<span>at</span></a></div>
                </a>
              </div>
              <nav class="main_nav_contaner ml-auto">
                <ul class="main_nav">
                  <li><a href="<?=CTRL?>Main/mainpage">Home</a></li>
                  <li><a href="<?=CTRL?>Main/about">About</a></li>
                  <li><a href="<?=CTRL?>Main/coursepage">Courses</a></li>
                  <li class="active"><a href="<?=CTRL?>Main/index">Blog</a></li>
                  <!-- <li><a href="#">Page</a></li> -->
                  <!-- <li><a href="contact.html">Contact</a></li> -->
                  <?php if($this->session->userdata('isUserLoggedIn')) {?>
                    <li><a href="<?=CTRL?>Main/logout">Logout</a></li>
                  <?php }?>
                </ul>
                <!-- <div class="search_button"><i class="fa fa-search" aria-hidden="true"></i></div> -->

                <!-- Hamburger -->

                <!-- <div class="shopping_cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i></div> -->
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
                <li><a href="<?=CTRL?>Main/mainpage">Home</a></li>
                <li><a href="<?=CTRL?>Main/index">Blog</a></li>
                <li><?php echo $query['post'][0]['entry_name'];?></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>      
  </div>

  <!-- Blog -->

  <div class="addNewEntry">
    <div class="container">
      <div class="row">
        <div class="col-lg-1"></div>
        <div class="col-lg-10">
          <!-- <h1>hdfhhsdfhs</h1> -->
          <h2><?php echo $query['post'][0]['entry_name'];?></h2>
          <h6><?php echo $query['post'][0]['rating'];?><i class='fa fa-star' style='color:yellow'></i>   
          <?php if($check['status'] === false) { ?>
          <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target=".modal1"><span style="font-size: 16px">Rate the Blog</span></button>
          <?php } ?></h6>
          <p><?php echo $query['post'][0]['entry_body']?></p>
          <h3><i class="fa fa-comment" aria-hidden="true"></i>Comments</h3>
          <!-- <?php echo $total_comments?> -->
          <?php if($total_comments == 0) { ?>
          <p>No comments to show</p>
          <?php } else { foreach ($comments as $comm) {?>
          <br>
          <h6><?php echo $comm['comment_name'];?></h6>
          <h7><?php echo $comm['comment_date'];?></h7>
          <p><?php echo $comm['comment_body'];?></p>
          <?php } } ?>
          <?php if($this->session->userdata('isUserLoggedIn')) { ?>
            <br>
          <form name="new_entry" action="<?=CTRL?>Main/add_new_comment/<?php echo $post_id;?>" method="post">
          <div class="form-group">
            <label for="comment"><b>Comment:</b></label>
            <textarea class="form-control" rows="5" id="comment" style="resize: none;" name="comment_body"></textarea>
          </div>

          <button type="submit" class="btn btn-outline-primary">Submit</button>
          </form>
          <?php } ?>
          <br><br>
        </div>
        <div class="col-lg-1"></div>
      </div>
    </div>
  </div>

  <!-- Large Modal for Rating Button-->
  <div class="modal fade bd-example-modal-lg modal1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Rate It!!</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
      </button>
      </div>
      <div class="modal-body">
        <div class="container">
          <!-- <div class="row"> -->
            <form name="new_rating" action="<?=CTRL?>Main/new_rating/<?php echo $post_id;?>" method="post">          
              <div class="form-group row">
                <label class="col-sm-2 col-form-label">Rate out of 5</label>
                <div class="col-sm-10">
                <input type="text" name ="rating" class="form-control" placeholder="0" required>
                </div>
                <div class="valid-feedback">
                  Looks good!
                </div>
              </div>
              <button class="btn btn-primary" type="submit" name="submit" value="submit" >Submit</button>
            </form>
        </div>          
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
    </div>
  </div>
  </div>

  <!-- Newsletter -->

  <!-- <div class="newsletter">
    <div class="newsletter_background parallax-window" data-parallax="scroll" data-image-src="<?=THEME?>images/newsletter.jpg" data-speed="0.8"></div>
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="newsletter_container d-flex flex-lg-row flex-column align-items-center justify-content-start"> -->

            <!-- Newsletter Content -->
           <!--  <div class="newsletter_content text-lg-left text-center">
              <div class="newsletter_title">sign up for news and offers</div>
              <div class="newsletter_subtitle">Subcribe to lastest smartphones news & great deals we offer</div>
            </div> -->

            <!-- Newsletter Form -->
            <!-- <div class="newsletter_form_container ml-lg-auto">
              <form action="#" id="newsletter_form" class="newsletter_form d-flex flex-row align-items-center justify-content-center">
                <input type="email" class="newsletter_input" placeholder="Your Email" required="required">
                <button type="submit" class="newsletter_button">subscribe</button>
              </form>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div> -->

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
Made with <i class="fa fa-heart-o" aria-hidden="true"></i> by ashksin121
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