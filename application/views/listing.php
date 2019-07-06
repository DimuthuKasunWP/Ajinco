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
                                <a class="active" href="<?php echo base_url('index.php/home/listing'); ?>">
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


            <ul class="wpb-mobile-menu">
            <li>
                                <a href="<?php echo base_url('index.php/home/index'); ?>">
Home
</a>
                            </li>
                            <li>
                                <a class="active" href="<?php echo base_url('index.php/home/listing'); ?>">
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

<div class="page-header" style="background:<?php echo base_url('assets/img/banner1.jpg'); ?>">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="breadcrumb-wrapper">
<h2 class="page-title">Apartments</h2>
<a href="index-2.html">Home</a>
<span>/</span>
<span class="current">Apartments</span>
</div>
</div>
</div>
</div>
</div>


<div class="main-container section">
<div class="container">
<div class="row">
<div class="col-md-3 col-xs-12 widget-area-sidebar">
<div class="sidebar-inner">
<div class="widget-container">
<h3 class="title-sidebar">Advanced Search</h3>
<form class="" method="get">
<select class="selectpicker">
<option value="0">All Actions</option>
<option class="rentals">Rentals(15)</option>
<option value="sales">Sales(17)</option>
</select>
<select class="selectpicker">
<option value="0">All Types</option>
<option value="apartments">Apartments (2)</option>
<option value="condos">Condos (1)</option>
<option value="houses">Houses (2)</option>
<option value="industrial">Industrial (1)</option>
<option value="land">Land (2)</option>
<option value="offices">Offices (1)</option>
<option value="retail">Retail (2)</option>
<option value="villas">Villas (1)</option>
</select>
<select class="selectpicker">
<option>All Cities</option>
<option>New York</option>
<option>California</option>
<option>Washington</option>
<option>Birmingham</option>
<option>Chicago</option>
<option>Phoenix</option>
</select>
<select class="selectpicker">
<option>All Areas</option>
<option>Calais (1)</option>
<option>Clape-en-bas(2)</option>
<option>La Villette (1)</option>
<option>La Touquet (2)</option>
<option>Notre Dame (5)</option>
<option>Saint Germain (3)</option>
</select>
<select class="selectpicker">
<option>Bedrooms</option>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
<option>7</option>
<option>8</option>
<option>9</option>
<option>10</option>
</select>
<select class="selectpicker">
<option>Bathrooms</option>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>5</option>
<option>6</option>
<option>7</option>
<option>8</option>
<option>9</option>
<option>10</option>
</select>
<select class="selectpicker">
<option>Mustard</option>
<option>Ketchup</option>
<option>Relish</option>
</select> 
</form>
<button type="submit" class="btn btn-common btn-sh">Search Now</button>
</div>
<div class="widget-container latest-listings">
<h3 class="title-sidebar">Latest Listings</h3>
<ul class="posts-list">
<li>
<div class="widget-thumb">
<a href="#"><img src="<?php echo base_url('assets/img/blog/p1.png'); ?>" alt="" /></a>
</div>
<div class="widget-content">
<a href="#">Villa On Washington Ave</a>
<span>LKR 5,500,000 </span>
</div>
<div class="clearfix"></div>
</li>
<li>
<div class="widget-thumb">
<a href="#"><img src="<?php echo base_url('assets/img/blog/p2.png'); ?>" alt="" /></a>
</div>
<div class="widget-content">
<a href="#">Villa On Washington Ave</a>
<span>LKR 5,500,000 </span>
</div>
<div class="clearfix"></div>
</li>
<li>
<div class="widget-thumb">
<a href="#"><img src="<?php echo base_url('assets/img/blog/p3.png'); ?>" alt="" /></a>
</div>
<div class="widget-content">
<a href="#">Villa On Washington Ave</a>
<span>LKR 5,500,000 </span>
</div>
<div class="clearfix"></div>
</li>
<li>
<div class="widget-thumb">
<a href="#"><img src="<?php echo base_url('assets/img/blog/p4.png'); ?>" alt="" /></a>
</div>
<div class="widget-content">
<a href="#">Villa On Washington Ave</a>
<span>LKR 5,500,000 </span>
</div>
<div class="clearfix"></div>
</li>
<li>
<div class="widget-thumb">
<a href="#"><img src="<?php echo base_url('assets/img/blog/p5.png'); ?>" alt="" /></a>
</div>
<div class="widget-content">
<a href="#">Villa On Washington Ave</a>
<span>LKR 5,500,000 </span>
</div>
<div class="clearfix"></div>
</li>
</ul>
</div>
<div class="widget-container widget-featured">
<h3 class="title-sidebar">Featured Properties</h3>
<div id="post-carousel" class="post-slide owl-carousel" data-slider-pagination="true">
<div class="item">
<div class="widget-img">
<img src="<?php echo base_url('assets/img/blog/img1.jpg'); ?>" alt="">
<div class="text">
<p>California Residence</p>
<span>LKR3000.000.00</span>
</div>
</div>
</div>
<div class="item">
<div class="widget-img">
<img src="<?php echo base_url('assets/img/blog/img2.jpg'); ?>" alt="">
<div class="text">
<p>2479 Murphy Court</p>
<span>LKR2900.000</span>
</div>
</div>
</div>
<div class="item">
<div class="widget-img">
<img src="<?php echo base_url('assets/img/blog/img3.jpg'); ?>" alt="">
<div class="text">
<p>2186 Rinehart Road</p>
<span>LKR2000.000.00</span>
</div>
 </div>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-9 col-xs-12 page-content">

<div class="product-filter">
<div class="title-listing">
<h2>Property Listing</h2>
</div>
<div class="Show-item">
<div class="grid-list-count">
<a class="grid switchToList" href="#"><i class="icon-grid"></i></a>
<a class="list switchToGrid active" href="#"><i class="icon-list"></i></a>
</div>
<span>Sort By:</span>
<form class="woocommerce-ordering" method="post">
<label>
<select class="selectpicker">
<option selected="selected" value="menu-order">Newest First</option>
<option>Lowest price first</option>
<option>Highest price first</option>
<option>Date added</option>
</select>
</label>
</form>
</div>
</div>


<div class="adds-wrapper">
<div class="item-list">
<div class="property-item table-list">
<div class="table-cell">
<figure class="item-thumb">
<a class="hover-effect" href="property.html">
<img src="<?php echo base_url('assets/img/property/house-1.jpg'); ?>" alt="">
</a>
<span class="label-featured">Featured</span>
<ul class="actions">
<li>
<span class="add-fav"><i class="icon-heart"></i></span>
</li>
</ul>
</figure>
</div>
<div class="item-body table-cell">
<h3 class="property-title"><a href="property.html">Guaranteed modern home</a></h3>
<div class="adderess"><i class="icon-location-pin"></i> Drive Street, Los Angeles, US</div>
<div class="info">
<p><span>Bedroom: 4</span><span>Bathroom: 2</span><span>Sq Ft: 2500</span></p>
<p>Single Family Home</p>
</div>
<span class="prop-user-agent"><i class="icon-user"></i> <a href="#">Maria Barlow</a></span>
<span class="prop-date"><i class="icon-calendar"></i>9 months ago</span>
</div>
<div class="body-right table-cell hidden-gird-cell">
<div class="info-row">
<span class="item-price">LKR290,000/mo</span>
</div>
<div class="info-row button text-right">
<a href="#" class="btn btn-common">Details</a>
</div>
</div>
</div>
</div>
<div class="item-list">
<div class="property-item table-list">
<div class="table-cell">
<figure class="item-thumb">
<a class="hover-effect" href="property.html">
<img src="<?php echo base_url('assets/img/property/house-2.jpg'); ?>" alt="">
</a>
<div class="label-inner">
<span class="label-status label">For Sale</span>
</div>
<ul class="actions">
<li>
<span class="add-fav"><i class="icon-heart"></i></span>
</li>
</ul>
</figure>
</div>
 <div class="item-body table-cell">
<h3 class="property-title"><a href="property.html">Amazing home for family</a></h3>
<div class="adderess"><i class="icon-location-pin"></i> Louis, Missouri, US</div>
<div class="info">
<p><span>Bedroom: 2</span><span>Bathroom: 3</span><span>Sq Ft: 1500</span></p>
<p>Single Family Home</p>
</div>
<span class="prop-user-agent"><i class="icon-user"></i> <a href="#">Will Emest</a></span>
<span class="prop-date"><i class="icon-calendar"></i>9 months ago</span>
</div>
<div class="body-right table-cell hidden-gird-cell">
<div class="info-row">
<span class="item-price">LKR250,000/mo</span>
</div>
<div class="info-row button text-right">
<a href="#" class="btn btn-common">Details</a>
</div>
</div>
</div>
</div>
<div class="item-list">
<div class="property-item table-list">
<div class="table-cell">
<figure class="item-thumb">
<a class="hover-effect" href="property.html">
<img src="<?php echo base_url('assets/img/property/house-3.jpg'); ?>" alt="">
</a>
<span class="label-featured">Featured</span>
<ul class="actions">
<li>
<span class="add-fav"><i class="icon-heart"></i></span>
</li>
</ul>
</figure>
</div>
<div class="item-body table-cell">
<h3 class="property-title"><a href="property.html">Family home for sale</a></h3>
<div class="adderess"><i class="icon-location-pin"></i> 53 W 88th St, Dallas, US</div>
<div class="info">
<p><span>Bedroom: 4</span><span>Bathroom: 2</span><span>Sq Ft: 2500</span></p>
<p>Single Family Home</p>
</div>
<span class="prop-user-agent"><i class="icon-user"></i> <a href="#">Janet Richmond</a></span>
<span class="prop-date"><i class="icon-calendar"></i>9 months ago</span>
</div>
<div class="body-right table-cell hidden-gird-cell">
<div class="info-row">
<span class="item-price">LKR180,000/mo</span>
</div>
<div class="info-row button text-right">
<a href="#" class="btn btn-common">Details</a>
</div>
</div>
</div>
</div>
<div class="item-list">
<div class="property-item table-list">
<div class="table-cell">
<figure class="item-thumb">
<a class="hover-effect" href="property.html">
<img src="<?php echo base_url('assets/img/property/house-4.jpg'); ?>" alt="">
</a>
<div class="label-inner">
<span class="label-status label">For Sale</span>
</div>
<span class="label-featured">Featured</span>
<ul class="actions">
<li>
<span class="add-fav"><i class="icon-heart"></i></span>
</li>
</ul>
</figure>
</div>
<div class="item-body table-cell">
<h3 class="property-title"><a href="property.html">Luxury home for sale</a></h3>
 <div class="adderess"><i class="icon-location-pin"></i> Avenue C, New York, US</div>
<div class="info">
<p><span>Bedroom: 4</span><span>Bathroom: 5</span><span>Sq Ft: 3300</span></p>
<p>Single Family Home</p>
</div>
<span class="prop-user-agent"><i class="icon-user"></i> <a href="#">Samuel Palmer</a></span>
<span class="prop-date"><i class="icon-calendar"></i>9 months ago</span>
</div>
<div class="body-right table-cell hidden-gird-cell">
<div class="info-row">
<span class="item-price">LKR290,000/mo</span>
</div>
<div class="info-row button text-right">
<a href="#" class="btn btn-common">Details</a>
</div>
</div>
</div>
</div>
<div class="item-list">
<div class="property-item table-list">
<div class="table-cell">
<figure class="item-thumb">
<a class="hover-effect" href="property.html">
<img src="<?php echo base_url('assets/img/property/house-5.jpg'); ?>" alt="">
</a>
<span class="label-featured">Featured</span>
<ul class="actions">
<li>
<span class="add-fav"><i class="icon-heart"></i></span>
</li>
</ul>
</figure>
</div>
<div class="item-body table-cell">
<h3 class="property-title"><a href="property.html">Amazing home for family</a></h3>
<div class="adderess"><i class="icon-location-pin"></i> 53 W 88th St, Dallas, US</div>
<div class="info">
<p><span>Bedroom: 4</span><span>Bathroom: 2</span><span>Sq Ft: 1500</span></p>
<p>Single Family Home</p>
</div>
<span class="prop-user-agent"><i class="icon-user"></i> <a href="#">Will Emest</a></span>
<span class="prop-date"><i class="icon-calendar"></i>9 months ago</span>
</div>
<div class="body-right table-cell hidden-gird-cell">
<div class="info-row">
<span class="item-price">LKR390,000/mo</span>
</div>
<div class="info-row button text-right">
<a href="#" class="btn btn-common">Details</a>
</div>
</div>
</div>
</div>
<div class="item-list">
<div class="property-item table-list">
<div class="table-cell">
<figure class="item-thumb">
<a class="hover-effect" href="property.html">
<img src="<?php echo base_url('assets/img/property/house-6.jpg'); ?>" alt="">
</a>
<span class="label-featured">Featured</span>
<ul class="actions">
<li>
<span class="add-fav"><i class="icon-heart"></i></span>
</li>
</ul>
</figure>
</div>
<div class="item-body table-cell">
<h3 class="property-title"><a href="property.html">Guaranteed modern home</a></h3>
<div class="adderess"><i class="icon-location-pin"></i> 365 Drive Street, Louis, US</div>
<div class="info">
<p><span>Bedroom: 4</span><span>Bathroom: 2</span><span>Sq Ft: 2500</span></p>
<p>Single Family Home</p>
 </div>
<span class="prop-user-agent"><i class="icon-user"></i> <a href="#">Maria Barlow</a></span>
<span class="prop-date"><i class="icon-calendar"></i>9 months ago</span>
</div>
<div class="body-right table-cell hidden-gird-cell">
<div class="info-row">
<span class="item-price">LKR190,000/mo</span>
</div>
<div class="info-row button text-right">
<a href="#" class="btn btn-common">Details</a>
</div>
</div>
</div>
</div>
</div>


<div class="pagination-bar">
<ul class="pagination">
<li class="active"><a href="#">1</a></li>
<li><a href="#">2</a></li>
<li><a href="#">3</a></li>
<li><a href="#">4</a></li>
<li><a class="pagination-btn" href="#">Next »</a></li>
</ul>
</div>

</div>
</div>
</div>
</div>

<?php include_once('home_footer.php'); ?>