<!DOCTYPE html>
<html lang="en">
<head>
<title>Unicat</title>
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

<div class="col-lg-12">
<!-- List all products -->
<?php if(!empty($products)){ foreach($products as $row){ ?>
    <div class="col-sm-4 col-lg-4 col-md-4">
        <div class="thumbnail">
            <img src="<?php echo base_url('assets/images/'.$row['image']); ?>" />
            <div class="caption">
                <h4 class="pull-right">$<?php echo $row['price']; ?> USD</h4>
                <h4><a href="javascript:void(0);"><?php echo $row['name']; ?></a></h4>
                <p>See more snippets like this online store item at <a href="http://www.codexworld.com">CodexWorld</a>.</p>
            </div>
            <div class="ratings">
                <a href="<?=CTRL?>Products/buy/<?php echo $row['id'];?>">
                    <img src="<?php echo base_url('assets/images/x-click-but01.gif'); ?>" />
                </a>
                <p class="pull-right">15 reviews</p>
                <p>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                </p>
            </div>
        </div>
    </div>
<?php } }else{ ?>
    <p>Product(s) not found...</p>
<?php } ?>
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