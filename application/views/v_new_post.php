<!DOCTYPE html>
<html lang="en">
<head>
<title>About</title>
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
<link rel="stylesheet" type="text/css" href="<?=THEME?>styles/about.css">
<link rel="stylesheet" type="text/css" href="<?=THEME?>styles/about_responsive.css">
</head>
<body>

<div id="site_content">
<div id="content">
<!-- insert the page content here -->
<h1>checking out new post</h1>
<h1>New Post</h1>
<form action="<?= base_url()?>index.php/blog/new_post/" method="post">
<div class="form_settings">
<p><span>Title</span><input class="" type="text" name="post_title" value="" /></p>
<p><span>Description</span><textarea class="textarea" rows="15" cols="50" name="post"></textarea></p>
<p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="add" value="Publish" /></p>
</div>
</form>
</div>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="plugins/colorbox/jquery.colorbox-min.js"></script>
<script src="js/about.js"></script>
</body>
</html>