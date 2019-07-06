<?php include_once('home_header.php'); ?>

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
                                <a href="<?php echo base_url('index.php/home/listing'); ?>">
Apartments
</a>
                            </li>
                            <li>
                                <a href="#">
Projects
</a>
                            </li>
                            <li>
                                <a href="#">
News
</a>
                            </li>
                            <li>
                                <a class="active" href="<?php echo base_url('index.php/home/gallery'); ?>">
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


            <ul class="wpb-mobile-menu">
            <li>
                                <a class="active" href="<?php echo base_url('index.php/home/index'); ?>">
Home
</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('index.php/home/listing'); ?>">
Listing
</a>
                            </li>
                            <li>
                                <a href="#">
Projects
</a>
                            </li>
                            <li>
                                <a href="#">
News
</a>
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

        </nav>
    </div>

<div class="page-header" style="background: url(<?php echo base_url('assets/img/banner1.jpg'); ?>;">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="breadcrumb-wrapper">
<h2 class="page-title">Gallery</h2>
<a href="index-2.html">Home</a>
<span>/</span>
<span class="current">Gallery</span>
</div>
</div>
</div>
</div>
</div>


<section id="contnet">
<div class="container">
<div class="row">

<div class="heading">
<div class="section-title text-center">Our Gallery</div>
</div>


<div class="controls text-center">
<a class="filter active" data-filter="all">All</a>
<a class="filter" data-filter=".living">Living Room</a>
<a class="filter" data-filter=".driveway">Driveway</a>
<a class="filter" data-filter=".bedroom">Bedroom</a>
<a class="filter" data-filter=".garage">Garage</a>
<a class="filter" data-filter=".kitchen">Kitchen</a>
</div>

</div>
</div>

<div id="portfolio-list">
<div class="col-md-3 col-sm-6 col-xs-12 mix living bedroom">
<div class="portfolio-item">
<img src=<?php echo base_url('assets/img/portfolio/img-1.jpg'); ?> alt="" />
<div class="overlay">
<div class="icon">
<a href="single-property.html"><i class="icon-link left"></i></a>
<a href="assets/img/portfolio/img-1.jpg" class="lightbox"><i class="icon-eye right"></i></a>
</div>
</div>
<div class="content">
<h3><a href="#">Beautiful House</a></h3>
<p>Apartment, cottage, Retail</p>
</div>
</div>
</div>
<div class="col-md-3 col-sm-6 col-xs-12 mix kitchen driveway">
<div class="portfolio-item">
<img src=<?php echo base_url('assets/img/portfolio/img-2.jpg'); ?> alt="" />
<div class="overlay">
<div class="icon">
<a href="single-property.html"><i class="icon-link left"></i></a>
<a href="assets/img/portfolio/img-2.jpg" class="lightbox"><i class="icon-eye right"></i></a>
</div>
</div>
<div class="content">
<h3><a href="#">House bedroom</a></h3>
<p>Apartment, Retail</p>
</div>
</div>
</div>
<div class="col-md-3 col-sm-6 col-xs-12 mix living garage">
<div class="portfolio-item">
<img src=<?php echo base_url('assets/img/portfolio/img-3.jpg'); ?> alt="" />
<div class="overlay">
<div class="icon">
<a href="single-property.html"><i class="icon-link left"></i></a>
<a href="assets/img/portfolio/img-3.jpg" class="lightbox"><i class="icon-eye right"></i></a>
</div>
</div>
<div class="content">
<h3><a href="#">Grand Avenue</a></h3>
<p>Cottage, Retail</p>
</div>
</div>
</div>
<div class="col-md-3 col-sm-6 col-xs-12 mix driveway">
<div class="portfolio-item">
<img src=<?php echo base_url('assets/img/portfolio/img-4.jpg'); ?> alt="" />
<div class="overlay">
<div class="icon">
<a href="single-property.html"><i class="icon-link left"></i></a>
<a href="assets/img/portfolio/img-4.jpg" class="lightbox"><i class="icon-eye right"></i></a>
</div>
</div>
<div class="content">
<h3><a href="#">Anastasia Avenue</a></h3>
<p>Industrial, Retail, Villa</p>
</div>
</div>
</div>
<div class="col-md-3 col-sm-6 col-xs-12 mix kitchen bedroom">
<div class="portfolio-item">
<img src=<?php echo base_url('assets/img/portfolio/img-5.jpg'); ?> alt="" />
<div class="overlay">
<div class="icon">
<a href="single-property.html"><i class="icon-link left"></i></a>
<a href="assets/img/portfolio/img-5.jpg" class="lightbox"><i class="icon-eye right"></i></a>
</div>
</div>
<div class="content">
<h3><a href="#">Luxury House</a></h3>
<p>Apartment, Retail</p>
</div>
</div>
</div>
<div class="col-md-3 col-sm-6 col-xs-12 mix living garage">
<div class="portfolio-item">
<img src=<?php echo base_url('assets/img/portfolio/img-6.jpg'); ?> alt="" />
<div class="overlay">
<div class="icon">
<a href="single-property.html"><i class="icon-link left"></i></a>
<a href="assets/img/portfolio/img-6.jpg" class="lightbox"><i class="icon-eye right"></i></a>
</div>
</div>
<div class="content">
<h3><a href="#">Living Room</a></h3>
<p>Apartment, Industrial, Land, Office</p>
</div>
</div>
</div>
<div class="col-md-3 col-sm-6 col-xs-12 mix driveway garage">
<div class="portfolio-item">
<img src=<?php echo base_url('assets/img/portfolio/img-7.jpg'); ?> alt="" />
<div class="overlay">
<div class="icon">
<a href="single-property.html"><i class="icon-link left"></i></a>
<a href="assets/img/portfolio/img-7.jpg" class="lightbox"><i class="icon-eye right"></i></a>
</div>
</div>
<div class="content">
<h3><a href="#">Peaceful Home</a></h3>
<p>Cottage, Industrial,Land</p>
</div>
</div>
</div>
<div class="col-md-3 col-sm-6 col-xs-12 mix kitchen garage">
<div class="portfolio-item">
<img src=<?php echo base_url('assets/img/portfolio/img-8.jpg'); ?> alt="" />
<div class="overlay">
<div class="icon">
<a href="single-property.html"><i class="icon-link left"></i></a>
<a href="assets/img/portfolio/img-8.jpg" class="lightbox"><i class="icon-eye right"></i></a>
</div>
</div>
<div class="content">
<h3><a href="#">Ancient Villa</a></h3>
<p>Cottage, Industrial,Land, Office</p>
</div>
</div>
</div>
</div>

</section>

<?php include_once('home_footer.php'); ?>