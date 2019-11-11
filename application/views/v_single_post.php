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
<?php if(!isset($post))
{
echo "This page was accessed incorrectly";
}
else //display the post
{
?>
<h2><?=$post['post_title']?></h2>
<p><?=$post['post']?></p>
 
<hr>
<h3>Comments</h3>
<?php       //if there is comments then print the comments
if(count($comments) > 0)
{
foreach ($comments as $row)
{
?>
<p><strong><?=$row['username']?></strong> said at <?= date('d-m-Y h:i A',strtotime($row['date_added']))?><br>
<?=$row['comment'];?></p><hr>
<?php   
}
}
else //when there is no comment
{
echo "<p>Currently, there are no comment.</p>";
}
if($this->session->userdata('usersecondId'))//if user is loged in, display comment box
{
?>
<form action="<?=  base_url()?>index.php/comments/add_comment/<?=$post['post_id']?>" method="post">
<div class="form_settings">
<p>
<span>Comment</span>
<textarea class="textarea" rows="8" cols="100" name="comment"></textarea>
</p>
<p style="padding-top: 15px">
<span>&nbsp;</span>
<input class="submit" type="submit" name="add" value="Add comment" />
</p>
</div>
</form>
<?php
}
else {//if no user is loged in, then show the loged in button
?>
<a href="<?=  base_url()?>index.php/users/login">Login to comment</a>
<?php   
}
}
?>
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