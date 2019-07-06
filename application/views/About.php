

<!DOCTYPE html>
<html lang="en">


<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="Ajinco">
<title>About Ajinco</title>


<link rel="shortcut icon" href="<?php echo base_url('assets/img/favicon.html'); ?>">

<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" type="text/css">

<link rel="stylesheet" href="<?php echo base_url('assets/fonts/font-awesome.min.css'); ?>" type="text/css">

<link rel="stylesheet" href="<?php echo base_url('assets/fonts/line-icons/line-icons.css'); ?>" type="text/css">

<link rel="stylesheet" href="<?php echo base_url('assets/css/main.css'); ?>" type="text/css">

<link rel="stylesheet" href="<?php echo base_url('assets/css/color-switcher.css'); ?>" type="text/css">

<link rel="stylesheet" href="<?php echo base_url('assets/extras/animate.css'); ?>" type="text/css">

<link rel="stylesheet" href="<?php echo base_url('assets/extras/owl.carousel.css'); ?>" type="text/css">
<link rel="stylesheet" href="<?php echo base_url('assets/extras/owl.theme.css'); ?>" type="text/css">

<link rel="stylesheet" href="<?php echo base_url('assets/extras/settings.css'); ?>" type="text/css">

<link rel="stylesheet" href="<?php echo base_url('assets/extras/nivo-lightbox.css'); ?>" type="text/css">

<link rel="stylesheet" href="<?php echo base_url('assets/css/responsive.css'); ?>" type="text/css">

<link rel="stylesheet" href="<?php echo base_url('assets/css/slicknav.css'); ?>" type="text/css">

<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-select.min.css'); ?>">
</head>
<body>

<div class="header">

<div class="top-bar">
<div class="container">
<div class="row">
<div class="col-md-7 col-sm-6">

<ul class="contact-details">
<li>
<a target='_blank' href="https://www.google.com/maps/place/Ajinco+International+(Pvt)+Ltd/@6.8953095,79.9212571,17z/data=!3m1!4b1!4m5!3m4!1s0x3ae250b3d6bf5511:0x8c0f51ab8af462e7!8m2!3d6.8953095!4d79.9234511">
<i class="icon-location-pin">
</i>
NO.665/1 A, De Singhe Mawatha,Thalangama SOuth,10120 ,Colombo,Sri Lanka
</a>
</li>
</ul>

</div>
<div class="col-md-5 col-sm-6">
<?php

foreach($c_details as $row){
 echo "<ul class='social-list'>";
 echo "<li>";
 echo "<a target='_blank' href=".$row->facebook." ><i class='fa fa-facebook'></i></a>";
 echo "</li>";
 echo "<li>";
 echo "<a target='_blank' href=".$row->linkedin." ><i class='fa fa-linkedin'></i></a>";
 echo "</li>";
 echo "</ul>";
}
?>


</div>
</div>
</div>
</div>


<div class="top-bar-bottom">
<div class="container">
<div class="row">
<div class="col-md-5 col-sm-6">
<div class="header-logo">
<a href="#"><img src="<?php echo base_url('assets/img/Banner.png');?>" alt=""></a>
</div>
<div class="name-title">
Pioneers at Property Selling
</div>
</div>
<div class="col-md-7 col-sm-6">
<div class="contact pull-right">
<div class="call">
<h3><i class="icon-phone"></i> 011-2556556</h3>
<p>hello@Ajinco.com</p>
</div>
<div class="box-language">
<form id="form-language">
<div class="btn-group toggle-wrap">
<span class="toggle">
<span>English</span>
<span class="hidden">Language</span>
</span>
<ul style="display: none;" class="toggle_cont pull-right">
<li>
<button class="language-select selected" type="button" name="en-gb">
<img src="<?php echo base_url('assets/img/language/en-gb.png');?>" alt="English" title="English" height="11" width="16">
English </button>
</li>
<li>
<button class="language-select" type="button" name="de-DE">
<img src="<?php echo base_url('assets/img/language/de-DE.png'); ?>" alt="Deutsch" title="Deutsch" height="11" width="16">
Deutsch </button>
</li>
<li>
<button class="language-select" type="button" name="ru-ru">
<img src="<?php echo base_url('assets/img/language/ru-ru.png'); ?>" alt="Русский" title="Русский" height="11" width="16">
Русский </button>
</li>
</ul>
</div>
</form>
</div>
<div class="clear"></div>
</div>
</div>
</div>
</div>
<!-- </div> -->


<nav class="navbar navbar-default">
<div class="container">
<div class="row">
<div class="navbar-header">

<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
<i class="fa fa-bars"></i>
</button>
</div>
<div class="navbar-collapse collapse">

                        <ul class="nav navbar-nav">
                            <li>
                                <a href="<?php echo base_url(); ?>">
Home
</a>
                            </li>
                            <li>
                                <a class="active" href="<?php echo base_url('index.php/home/listing'); ?>">
Apartments
</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('index.php/blogController/'); ?>">
Projects
</a>
                            </li>
                            </li>
                            <li>
                                <a href="<?php echo base_url('index.php/home/gallery'); ?>">
Gallery
</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('index.php/company'); ?>">
About Us
</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('index.php/company/view_contactPage'); ?>">
Contact Us
</a>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>


<div class="page-header" style="background: url(<?php base_url('assets/img/Banner.png');?>);">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="breadcrumb-wrapper">
<h2 class="page-title">About Us</h2>
<a href="#">Home</a>
 <span>/</span>
<span class="current">About Us</span>
</div>
</div>
</div>
</div>
</div>


<section class="about section">
<div class="container">
<div class="row">
<div class="col-md-6">

<h5>Introduction</h5>
<h2>Get Started with Ajinco</h2>
<p>
    Ajinco international is the sri lankan best property selling compny for 2 decades. 
</p>
<p>
People are beginning to understand that. However, back over in reality some project schedules and budgets don't allow.
</p>
<div class="group-btn">
<a href="#" class="btn btn-common">Read More</a>
</div>
</div>
<div class="col-md-6">
<div class="featured-thumb">

<?php
 foreach($c_media as $row){
    //  echo "".$row;
 echo "<img src='".base_url("".$row->url)."' alt=''>";
 break;
 }
 ?>
</div>
</div>
</div>
</div>
</section>



<section id="counter">
<div class="container">
<div class="row">
<div class="col-md-3 col-sm-6 col-xs-12">
<div class="counting">
<div class="desc">
<div class="icon"><i class="icon-home"></i>
<h3 class="counter"> 5</h3>
</div>
<p>Complete Project</p>
</div>
</div>
</div>
<div class="col-md-3 col-sm-6 col-xs-12">
<div class="counting">
<div class="desc">
<div class="icon">
<i class="icon-key"></i><h3 class="counter">3</h3>
</div>
<p>Property Sold</p>
</div>
</div>
</div>
<div class="col-md-3 col-sm-6 col-xs-12">
<div class="counting">
<div class="desc">
<div class="icon">
<i class="icon-emotsmile"></i><h3 class="counter">10</h3>
</div>
<p>Happy Clients</p>
</div>
</div>
</div>
<div class="col-md-3 col-sm-6 col-xs-12">
<div class="counting">
<div class="desc">
<div class="icon">
<i class="icon-cup"></i><h3 class="counter">25</h3>
</div>
<p>Awards Win</p>
</div>
</div>
</div>
</div>
</div>
</section>


<section class="section">
<div class="container">
<div class="row">
<?php 
foreach($staff as $row){
echo "<div class='col-md-3 col-sm-6'>";
echo "<div class='agent-member'>";
echo "<div class='agent-thumbnail'>";
echo "<img src='".base_url($row->img)."' alt=''>";
echo "<div class='overlay'>";
echo "<div class='social-media'>";
echo "<a href='#' class='facebook'><i class='fa fa-facebook'></i></a>";
echo "<a href='#' class='twitter'><i class='fa fa-twitter'></i></a>";
echo "<a href='#' class='google'><i class='fa fa-google-plus'></i></a>";
echo  "<a href='#' class='linkedin'><i class='fa fa-linkedin'></i></a>";
echo "</div>";
echo "</div>";
echo "</div>";
echo "<div class='info'>";
echo "<h4>".$row->name."</h4>";
echo "<p>".$row->position."</p>";
echo "<a class='profile-link' href='#'>See Full Profile <i class='fa fa-long-arrow-right'></i></a>";
echo "</div>";
echo "</div>";
echo "</div>";
}
?>

</div>
</div>
</section>


<footer>
<div class="container">
<div class="row">

<div class="col-md-3 col-sm-6 col-xs-12">
<div class="footer-widget contact-widget">
<h4>
<a href="index-2.html"><img src="<?php echo base_url('assets/img/Banner.png');?>" class="img-responsive" alt="Footer Logo" /></a>
</h4>
<p>
There are many variations of passages of lorem Ipsum available, but the majority have suffered alteration in
</p>
</div>
</div>


<div class="col-md-3 col-sm-6 col-xs-12">
<div class="footer-widget">
<h4>
Contact Info
 </h4>
<ul class="address">
<li>
<a href="#"><i class="icon-location-pin"></i>NO.665/1 A, De Singhe Mawatha,Thalangama SOuth,10120 ,Colombo,Sri Lanka</a>
</li>
<li>
<a href="#"><i class="icon-phone"></i>0713933424 </a>
</li>
<li>
<a href="#"><i class="icon-envelope"></i> hello@Ajinco.com</a>
</li>
<li>
<a href="#"><i class="fa fa-fax"></i> FAX:(112) 556556</a>
</li>
</ul>
</div>
</div>


<div class="col-md-3 col-sm-6 col-xs-12">
<div class="footer-widget">
<h4>
Usefull Links
</h4>
<div class="footer-nav">
<ul>
<?php
foreach($project as $row ){
 echo "<li><a href='#'><i class='icon-arrow-right'></i>".$row->name."</a></li>";
}
?>
</ul>
</div>
</div>
</div>


<div class="col-md-3 col-sm-6 col-xs-12">
<div class="footer-widget">
<h4>
Image Gallery
</h4>
<div class="flicker-gallery">
<?php
foreach($p_media as $row){
echo "<a href='#'><img src='".base_url($row->url)."' alt=''></a>";
}
?>
</div>
</div>
</div>

</div>
</div>
</footer>


<div id="copyright">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="site-info text-center">
<p>&copy; All rights reserved 2019- Designed & Developed by  Team 32</p>
</div>
</div>
</div>
</div>
</div>


<a href="#" class="back-to-top">
<i class="icon-arrow-up"></i>
</a>

<div id="loader">
<div class="sk-folding-cube">
<div class="sk-cube1 sk-cube"></div>
<div class="sk-cube2 sk-cube"></div>
<div class="sk-cube4 sk-cube"></div>
<div class="sk-cube3 sk-cube"></div>
</div>
</div>
<?php

echo "<script type='text/javascript' src= '".base_url('assets/js/jquery-min.js')."'></script>";
echo "<script type='text/javascript' src='".base_url('assets/js/bootstrap.min.js')."'></script>";
echo "<script type='text/javascript' src='".base_url('assets/js/color-switcher.js')."'></script>";
echo "<script type='text/javascript' src='".base_url('assets/js/jquery.parallax.js')."'></script>";
echo "<script type='text/javascript' src='".base_url('assets/js/owl.carousel.min.js')."'></script>";
echo "<script type='text/javascript' src='".base_url('assets/js/wow.js')."'></script>";
echo "<script type='text/javascript' src='".base_url('assets/js/main.js')."'></script>";
echo "<script type='text/javascript' src='".base_url('assets/js/jquery.mixitup.min.js')."'></script>";
echo "<script type='text/javascript' src='".base_url('assets/js/nivo-lightbox.js')."'></script>";
echo "<script type='text/javascript' src='".base_url('assets/js/jquery.counterup.min.js')."'></script>";
echo "<script type='text/javascript' src='".base_url('assets/js/waypoints.min.js')."'></script>";
echo "<script type='text/javascript' src='".base_url('assets/js/form-validator.min.js')."'></script>";
echo "<script type='text/javascript' src='".base_url('assets/js/contact-form-script.js')."'></script>";
echo "<script type='text/javascript' src='".base_url('assets/js/jquery.themepunch.revolution.min.js')."'></script>";
echo "<script type='text/javascript' src='".base_url('assets/js/jquery.themepunch.tools.min.js')."'></script>";
echo "<script type='text/javascript' src='".base_url('assets/js/jquery.slicknav.js')."'></script>";
echo "<script src='".base_url('assets/js/bootstrap-select.min.js')."'></script>";
?>
</body>


</html>