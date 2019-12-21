<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo $itemInfo['data']['name'] ?></title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Unicat project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="<?=THEME?>styles/bootstrap4/bootstrap.min.css">
<link href="<?=THEME?>plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?=THEME?>plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="<?=THEME?>plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="<?=THEME?>plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="<?=THEME?>styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="<?=THEME?>styles/responsive.css">
</head>
<body>



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
                  <li class="active"><a href="<?=CTRL?>Main/coursepage">Courses</a></li>
                  <li><a href="<?=CTRL?>Main/index">Blog</a></li>
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
        <li class="menu_mm active"><a href="<?=CTRL?>Main/coursepage">Courses</a></li>
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
                <li><a href="<?=CTRL?>Main/coursepage">Courses</a></li>
                <li><?php echo $itemInfo['data']['name'] ?></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>      
  </div>



<!-- <h3>Here</h3> -->

<div class="payment">
  <div class="container">
      <h1><?php echo $itemInfo['data']['name'] ?></h1>
      <br>
      <h2>Price: INR<?php echo $itemInfo['data']['price']?></h2>
      <br>
            <input  id="submit-pay" type="submit" onclick="razorpaySubmit(this);" value="Pay Now" class="btn btn-outline-primary" />

  </div>
</div>


<?php
// $productinfo = $itemInfo['description'];
$userid = $this->session->userdata['usersecondId'];
$id = $itemInfo['data']['id'];
$txnid = time();
$surl = $surl;
$furl = $furl;        
$key_id = RAZOR_KEY_ID;
$currency_code = $currency_code;            
$total = $itemInfo['data']['price']*100; 
$amount = $itemInfo['data']['price'];
$merchant_order_id = $userid.$id;
$card_holder_name = '';
$email = '';
$phone = '';
$name = $itemInfo['data']['name'];
$return_url = CTRL.'Main/callback';
?>

<!-- <h3>Here here</h3> -->
<form name="razorpay-form" id="razorpay-form" action="<?php echo $return_url; ?>" method="POST">
  <input type="hidden" name="razorpay_payment_id" id="razorpay_payment_id" />
  <input type="hidden" name="merchant_order_id" id="merchant_order_id" value="<?php echo $merchant_order_id; ?>"/>
  <input type="hidden" name="merchant_trans_id" id="merchant_trans_id" value="<?php echo $txnid; ?>"/>
  <!-- <input type="hidden" name="merchant_product_info_id" id="merchant_product_info_id" value="<?php echo $productinfo; ?>"/> -->
  <input type="hidden" name="merchant_surl_id" id="merchant_surl_id" value="<?php echo $surl; ?>"/>
  <input type="hidden" name="merchant_furl_id" id="merchant_furl_id" value="<?php echo $furl; ?>"/>
  <input type="hidden" name="card_holder_name_id" id="card_holder_name_id" value="<?php echo $card_holder_name; ?>"/>
  <input type="hidden" name="merchant_total" id="merchant_total" value="<?php echo $total; ?>"/>
  <input type="hidden" name="merchant_amount" id="merchant_amount" value="<?php echo $amount; ?>"/>
</form>


    <!-- <div class="row">   
        
    </div>

    <div class="row">
        <div class="col-lg-12 text-right">

            <input  id="submit-pay" type="submit" onclick="razorpaySubmit(this);" value="Pay Now" class="btn btn-outline-primary" />
        </div>
    </div> -->


<!-- footer -->
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
  var razorpay_options = {
    key: "<?php echo $key_id; ?>",
    amount: "<?php echo $total; ?>",
    name: "Ash",
    description: "Order # <?php echo $merchant_order_id; ?>",
    netbanking: true,
    currency: "<?php echo $currency_code; ?>",
    prefill: {
      name:"<?php echo $card_holder_name; ?>",
      email: "<?php echo $email; ?>",
      contact: "<?php echo $phone; ?>"
    },
    notes: {
      soolegal_order_id: "<?php echo $merchant_order_id; ?>",
    },
    handler: function (transaction) {
        document.getElementById('razorpay_payment_id').value = transaction.razorpay_payment_id;
        document.getElementById('razorpay-form').submit();
    },
    "modal": {
        "ondismiss": function(){
            location.reload()
        }
    }
  };
  var razorpay_submit_btn, razorpay_instance;

  function razorpaySubmit(el){
    if(typeof Razorpay == 'undefined'){
      setTimeout(razorpaySubmit, 200);
      if(!razorpay_submit_btn && el){
        razorpay_submit_btn = el;
        el.disabled = true;
        el.value = 'Please wait...';  
      }
    } else {
      if(!razorpay_instance){
        razorpay_instance = new Razorpay(razorpay_options);
        if(razorpay_submit_btn){
          razorpay_submit_btn.disabled = false;
          razorpay_submit_btn.value = "Pay Now";
        }
      }
      razorpay_instance.open();
    }
  }  
</script>


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
<script src="<?=THEME?>plugins/greensock/TweenMax.min.js"></script>
<script src="<?=THEME?>plugins/greensock/TimelineMax.min.js"></script>
<script src="<?=THEME?>plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="<?=THEME?>plugins/greensock/animation.gsap.min.js"></script>
<script src="<?=THEME?>plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="<?=THEME?>plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="<?=THEME?>plugins/easing/easing.js"></script>
<script src="<?=THEME?>plugins/parallax-js-master/parallax.min.js"></script>
<script src="<?=THEME?>js/custom.js"></script>
</body>
</html>