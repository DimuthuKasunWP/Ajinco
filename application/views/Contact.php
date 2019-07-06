

<!DOCTYPE html>
<html lang="en">


<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="Ajinco">
<title>Contact  Ajinco</title>


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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
Pioneers at <br> Property Selling
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
<img src="<?php  echo base_url('assets/img/language/de-DE.png'); ?>" alt="Deutsch" title="Deutsch" height="11" width="16">
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
</div>
</div>

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
                                <a href="<?php echo base_url('index.php/blogController/');?>">
Projects
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


<div class="page-header" style="background: url(<?php echo base_url('assets/img/Banner.png'); ?>);">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="breadcrumb-wrapper">
<h2 class="page-title">Meet Us</h2>
<a href="#">Home</a>
 <span>/</span>
<span class="current">Meet Us</span>
</div>
</div>
</div>
</div>
</div>



<div id="google-map"></div>
<div class="support">
<div class="container">
<div class="row">
<div class="support-inner">
<div class="col-md-4 col-sm-6 col-xs-12">
<h4>Book By Phone</h4>
<div class="support-info">
<div class="info-title">
<i class="icon-phone"></i>
011-2556556
<span>Booking time: 0900 – 2000 hrs</span>
</div>
</div>
</div>
<div class="col-md-4 col-sm-6 col-xs-12">
<h4>Location Address</h4>
<div class="support-info">
<div class="info-title">
<i class="icon-location-pin"></i>
Address
<span>63130-4899 Mt.lavenia, dehiwala</span>
</div>
</div>
</div>
<div class="col-md-4 col-sm-6 col-xs-12">
<h4>Give Your Feedback</h4>
<div class="support-info">
<div class="info-title">
<i class="icon-envelope"></i>
Feedback@Ajinco.com
<span>Help Us improve!</span>
</div>
</div>
</div>
</div>
</div>
</div>
</div>


<section class="contact section">
<div class="container">
<div class="row">
<div class="col-md-12">
<h2 class="section-title">
SEND US A MESSAGE
</h2>

<form id="contactForm" action="<?php base_url('Company/save')?>"  data-toggle="validator">
<div class="row">
<div class="col-md-6">
<div class="row">
<div class="col-md-12">
<div class="form-group">
<input type="text" class="form-control" id="name" name="name" placeholder="Full Name" required data-error="Please enter your name">
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-md-12">
<div class="form-group">
<input type="email" class="form-control" id="email" placeholder="mail@sitename.com" required data-error="Please enter your email">
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-md-12">
<div class="form-group">
<input type="text" class="form-control" id="phone" name="phone" placeholder="Phone" required data-error="Please enter your Time">
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-md-12">
<div class="form-group">
<input type="text" id="date" class="form-control datepicker" placeholder="Select Date"/>

</div>
</div>

<div class="col-md-12">
<div class="form-group">

<input type="text" class="form-control" id="time" name="time" placeholder="Enter Time in 24 hours format HH:MM " required data-error="Please enter your Phone Number">
<div class="help-block with-errors"></div>
</div>
</div>


</div>
</div>
<div class="col-md-6">
<div class="row">
<div class="col-md-12">
 <div class="form-group">
<textarea class="form-control" id ="message" placeholder="Message" rows="10" data-error="Write your message" required></textarea>
<div class="help-block with-errors"></div>
</div>
</div>
</div>
</div>
<div class="col-md-12">
<button type="button" id="submit" class="btn btn-common">Send Message</button>
<div id="msgSubmit" class="h3 text-center hidden"></div>
<div class="clearfix"></div>
</div>
</div>
</form>

</div>
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
 Pioneers in sri lanka
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
echo "<script type= 'text/javascript' src='".base_url('assets/js/nivo-lightbox.js')."'></script>";
echo "<script type='text/javascript' src='".base_url('assets/js/jquery.counterup.min.js')."'></script>";
echo "<script type='text/javascript' src='".base_url('assets/js/waypoints.min.js')."'></script>";
echo "<script type='text/javascript' src='".base_url('assets/js/form-validator.min.js')."'></script>";
echo "<script type='text/javascript' src='".base_url('assets/js/contact-form-script.js')."'></script>";
echo "<script type='text/javascript' src='".base_url('assets/js/jquery.themepunch.revolution.min.js')."'></script>";
echo "<script type='text/javascript' src='".base_url('assets/js/jquery.themepunch.tools.min.js')."'></script>";
echo "<script type='text/javascript' src='".base_url('assets/js/jquery.slicknav.js')."'></script>";
echo "<script src='".base_url('assets/js/bootstrap-select.min.js')."'></script>";
?>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHo_WtZ2nIYCgCLf7sINZaqcrpqSDio9o"></script>

<script type="text/javascript">
      var map;
      var defult = new google.maps.LatLng(50.8452321, 4.3577968,17.29);
      var mapCoordinates = new google.maps.LatLng(50.8452321, 4.3577968,17.29); 
      
      
      var markers = [];
      var image = new google.maps.MarkerImage(
        '<?php echo base_url('assets/img/map-marker.png');?>',
        new google.maps.Size(84, 70),
        new google.maps.Point(0, 0),
        new google.maps.Point(60, 60)
      );
      
      function addMarker() {
        
        markers.push(new google.maps.Marker({
          position: defult,
          raiseOnDrag: false,
          icon: image,
          map: map,
          draggable: false
        }
      ));
        
      }
      
      function initialize() {
        // console.log('hello');
        var mapOptions = {
          backgroundColor: "#ffffff",
          zoom: 15,
          disableDefaultUI: true,
          center: mapCoordinates,
          zoomControl: false,
          scaleControl: false,
          scrollwheel: false,
          disableDoubleClickZoom: true,
          mapTypeId: google.maps.MapTypeId.ROADMAP,
          styles: [{
            "featureType": "landscape.natural",
            "elementType": "geometry.fill",
            "stylers": [{
              "color": "#ffffff"
            }
                       ]
          }
                   , {
                     "featureType": "landscape.man_made",
                     "stylers": [{
                       "color": "#ffffff"
                     }
                                 , {
                                   "visibility": "off"
                                 }
                                ]
                   }
                   , {
                     "featureType": "water",
                     "stylers": [{
                       "color": "#80C8E5"
                     }
                                 , {
                                   "saturation": 0
                                 }
                                ]
                   }
                   , {
                     "featureType": "road.arterial",
                     "elementType": "geometry",
                     "stylers": [{
                       "color": "#999999"
                     }
                                ]
                   }
                   , {
                     "elementType": "labels.text.stroke",
                     "stylers": [{
                       "visibility": "off"
                     }
                                ]
                   }
                   , {
                     "elementType": "labels.text",
                     "stylers": [{
                       "color": "#333333"
                     }
                                ]
                   }
                   
                   , {
                     "featureType": "road.local",
                     "stylers": [{
                       "color": "#dedede"
                     }
                                ]
                   }
                   , {
                     "featureType": "road.local",
                     "elementType": "labels.text",
                     "stylers": [{
                       "color": "#666666"
                     }
                                ]
                   }
                   , {
                     "featureType": "transit.station.bus",
                     "stylers": [{
                       "saturation": -57
                     }
                                ]
                   }
                   , {
                     "featureType": "road.highway",
                     "elementType": "labels.icon",
                     "stylers": [{
                       "visibility": "off"
                     }
                                ]
                   }
                   , {
                     "featureType": "poi",
                     "stylers": [{
                       "visibility": "off"
                     }
                                ]
                   }
                   
                  ]
          
        }
            
        map = new google.maps.Map(document.getElementById('google-map'), mapOptions);
        addMarker();
        
      }
      google.maps.event.addDomListener(window, 'load', initialize());
    </script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<script>
jQuery(function(){
   jQuery('.datepicker').datepicker({
      format: 'mm-dd-yyyy'
    });

});

$("#submit").click(function(){
  // console.log("hello");
 var name= $("#name").val();
 var email=$("#email").val();
 var phone =$('#phone').val();
 var message=$('#message').val();
 var date=$('#date').val();
 var time=$('#time').val();


 var object = {'name':name,
  'email':email,
  'phone':phone,
  'message':message,
  'date':date,
  'time':time 
  }
  $.ajax({
url: 'http://localhost/index.php/Company/save',
data: object,
dataType: 'json',
error: function() {
$('#info').html('<p>An error has occurred</p>');
},
dataType: 'jsonp',
success: function(data) {
  console.log("success");
  swal("Good job!", "We saved your inquery", "success");

},
type: 'POST'
});
swal("Good job!", "We saved your inquery", "success");
$('#contactForm').find('input','textarea').val("");
});



</script>
</body>


</html>