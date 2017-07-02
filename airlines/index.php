<?php
include("includes/config.php");
$conn = mysqli_connect(DBSERVER, DBUSER, DBPASSW, DBNAME);
    // Check connection
        if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
        }
?>
<!doctype html>
<!--[if lt IE 7 ]><html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]><html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]><html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]><html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
	
<!-- Mirrored from dipesh.info.np/great/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Aug 2014 09:50:16 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Homepage | Airlines Management System</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        
        <link href="http://fonts.googleapis.com/css?family=Lato:400,400italic,700|Sorts+Mill+Goudy:400,400italic" rel="stylesheet">
        
        <!-- Mobile viewport optimized: h5bp.com/viewport -->
        <meta name="viewport" content="width=device-width,initial-scale=1">
        
       
        <link rel="shortcut icon" href="images/favicon.ico">
       
        
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/screen.css">
        <!-- custom CSS -->
        <link rel="stylesheet" href="css/custom.css">
        <script>document.cookie='resolution='+Math.max(screen.width,screen.height)+'; path=/';</script>
        <!-- JS libs -->
        <script src="js/libs/modernizr-2.5.3.min.js"></script>
        <script src="js/libs/respond.min.js"></script>
        <script src="js/libs/jquery.min.js"></script>
        
        <!-- scripts -->
        <script src="js/jquery.easing.1.3.min.js"></script>
        <script src="js/hoverIntent.js"></script>
        <script src="js/general.js"></script>
        <!-- sliders -->
        <script src="js/slides.min.jquery.js"></script>
        <!-- range sliders -->
        <script src="js/jquery.slider.bundle.js"></script>
        <script src="js/jquery.slider.js"></script>
        <link rel="stylesheet" href="css/jslider.css">
        <!-- custom input -->
        <link href="css/customInput.css" rel="stylesheet">
        <script src="js/jquery.customInput.js"></script>
        <!-- datepicker -->
        <link href="css/custom-theme/jquery-ui-1.8.20.custom.css" rel="stylesheet">
        <script src="js/jquery-ui-1.8.20.custom.min.js"></script>
        <script>
            jQuery(document).ready(function($) {
                $("#date_in, #date_out").datepicker({
                    dateFormat: 'MM dd, yy',
                    minDate: 0,
                    showOtherMonths: true
                });
            });
        </script>
        <!-- Carousel Box Slider -->
        <link rel="stylesheet" href="css/carousel-box.css">
        <!--<script type="text/javascript" src="js/jscript_jquery-1.js"></script>-->
        <script type="text/javascript" src="js/jscript_xjcarousellite.js"></script>
        <script type="text/javascript">
			$(function() {	
				
				$(".carousel").jCarouselLite({
						  btnNext: ".next",
						  btnPrev: ".prev"
					 });	
			});
		</script>

        </head>

	<body>
		<div class="body_wrap homepage">
 			 <link rel="shortcut icon" href="images/favicon.ico">
<div class="header">
  <div class="container_12">
    <div class="logo"><a href="index.php"><img src="images/images.png" alt=""></a>
      <h1>ABS Airlines</h1>
    </div>
    <div class="header_right">
      <div class="topsearch">
        <form id="searchForm" action="#" method="get">
          <input type="submit" id="searchSubmit" value="" class="btn-search">
          <input type="text" name="stext" id="stext" value="" class="stext">
        </form>
      </div>
      <div class="header_phone">
		
            <span><a href="index.php">HOME</a></span>
            <span><a href="about.html">ABOUT US</a></span>
            <span><a href="contact.html">CONTACT US</a></span>
         
			<!--<p class="alignright">CALL US NOW: &nbsp;<strong>977-98510-04974</strong></p>-->      
	</div>
      <div class="clear"></div>
    </div>
    <div class="topmenu">
      <ul class="dropdown">
		<li class="menu-level-0"><a href="destination.php"><span>Destination</span></a>
          <ul class="submenu-1">
            <li class="menu-level-1"><a href="#"><span>Kathmandu</span></a>
              <ul class="submenu-2">
               
                <li class="menu-level-2"><a href="#"><span>Kathmandu Guest House</span></a></li>
                <li class="menu-level-2"><a href="#"><span>Hotel Airport</span></a></li>
                <li class="menu-level-2"><a href="#"><span>Hotel Landmark</span></a></li>
                <li class="menu-level-2"><a href="#"><span>Hotel Samsara</span></a></li>
              </ul>
            </li>
            <li class="menu-level-1"><a href="#"><span>Pokhara</span></a>
              <ul class="submenu-2">
               
                <li class="menu-level-2"><a href="#"><span>Hotel Kantipur</span></a></li>
                <li class="menu-level-2"><a href="#"><span>Hotel Trek U Tol</span></a></li>
                <li class="menu-level-2"><a href="#"><span>Mum's Garden</span></a></li>
                <li class="menu-level-2"><a href="#"><span>Hotel Base</span></a></li>
              </ul>
            </li>
            <li class="menu-level-1"><a href="#"><span>Chitwan</span></a>
              <ul class="submenu-2">
                <li class="menu-level-2"><a href="#"><span>Safari Adv. Lodge</span></a></li>
                <li class="menu-level-2"><a href="#"><span>Machan Paradise view</span></a></li>             
                <li class="menu-level-2"><a href="#"><span>Hotel Hermitage</span></a></li>     
              </ul>
            </li>
          </ul>
        </li>
        <!--<li class="menu-level-0"><a href="hotels.php"><span>Hotels</span></a>
          <ul class="submenu-1">
            <li class="menu-level-1"><a href="#"><span>North America</span></a></li>
            <li class="menu-level-1"><a href="#"><span>Central & South America</span></a></li>
            <li class="menu-level-1"><a href="#"><span>Africa & Middle East</span></a></li>
            <li class="menu-level-1"><a href="#"><span>EUROPE</span></a></li>
            <li class="menu-level-1"><a href="#"><span>ASIA & SOUTH PACIFIC</span></a></li>
          </ul>
        </li>-->
        <li class="menu-level-0"><a href="package.php"><span>Package</span></a>
        </li>
        
        
	    <li class="menu-level-0"><a href="special-package.html"><span>Category</span></a></li>
        <li class="menu-level-0"><a href="trekking.html"><span>Flight Schedule</span></a></li>
        <li class="menu-level-0"><a href="blog.html"><span>Our Team</span></a></li>
      </ul>
      <div class="clear"></div>
    </div>
    <div class="clear"></div>
  </div>
</div>
  
  
              <!--/ header --> 
              
              <!-- header slider -->
              <div class="header_slider" style="background-image:url(images/pattern_1.jpg);">
                <div class="slides_container">
                <?php
                $sql="SELECT * from slider";
                $result=mysqli_query($conn,$sql);
                while($data=mysqli_fetch_array($result)){
                ?>
                  <div class="slide"> <img src="images/abs/<?php echo $data['image'];?>" alt="">
                    <div class="slide_text bottom left">
                    </div>
                  </div>
                  <?php } ?>
                </div>
                <div class="pagination_wrap">
                  <div class="pagination_inner">
                    <ul class="pagination">
                    <?php
                    $sql1="SELECT * from slider";
                    $result1=mysqli_query($conn,$sql1);
                    while($data1=mysqli_fetch_array($result1)){
                    ?>
                      <li><a href="#<?php echo $data['id'];?>"><?php echo $data1['title'];?></a></li>
                      <?php }  ?>
                    </ul>
                  </div>
                </div>
                <script>
                            jQuery(document).ready(function($) {
                                    $('.header_slider').slides({
                                        generatePagination: false,
                                        generateNextPrev: true,
                                        play: 5000,
                                        pause: 3500,
                                        hoverPause: true,
                                        effect: 'fade',
                                        crossfade: true,
                                        preload: true,
                                        preloadImage: 'images/loading.gif'
                                    });
                            });
                        </script> 
              </div>
              <!--/ header slider --> 
              
              
              
              <div id="middle" class="full_width">
                <div class="container_12"> 
                  
                  <!-- breadcrumbs -->
                  <div class="breadcrumbs"></div>
                  <!--/ breadcrumbs --> 
                  
                  <!-- content -->
                  <div class="content">
                    <div class="post-detail">
                      
                        
                        <div class="grid_list">
                          <div class="list_item">
                            <div class="item_img"> <img src="images/temp/offer_01.jpg" alt="">
                              <p class="caption"><a href="hotel-details.html">Hotel Shangri-la</a> <span class="price"><ins>$</ins><strong>150</strong></span></p>
                              <a href="hotel-details.html" class="link-img">more...</a> </div>
                          </div>
                          <div class="list_item">
                            <div class="item_img"> <img src="images/temp/offer_02.jpg" alt="">
                              <p class="caption"><a href="hotel-details.html">Hotel Del' Annapurna</a> <span class="price"><ins>$</ins><strong>200</strong></span></p>
                              <a href="hotel-details.html" class="link-img">more...</a> </div>
                          </div>
                          <div class="list_item">
                            <div class="item_img"> <img src="images/temp/offer_03.jpg" alt="">
                              <p class="caption"><a href="hotel-details.html">Hyatt Regency</a> <span class="price"><ins>$</ins><strong>175</strong></span></p>
                              <a href="hotel-details.html" class="link-img">more...</a> </div>
                          </div>
                          <div class="list_item">
                            <div class="item_img"> <img src="images/temp/offer_04.jpg" alt="">
                              <p class="caption"><a href="hotel-details.html">Yak & Yeti</a> <span class="price"><ins>$</ins><strong>250</strong></span></p>
                              <a href="hotel-details.html" class="link-img">more...</a> </div>
                          </div>
                          <div class="list_item">
                            <div class="item_img"> <img src="images/temp/offer_05.jpg" alt="">
                              <p class="caption"><a href="hotel-details.html">Hotel Soaltee</a> <span class="price"><ins>$</ins><strong>300</strong></span></p>
                              <a href="hotel-details.html" class="link-img">more...</a> </div>
                          </div>
                          <div class="list_item">
                            <div class="item_img"> <img src="images/temp/offer_06.jpg" alt="">
                              <p class="caption"><a href="hotel-details.html">Hotel Dwarika</a> <span class="price"><ins>$</ins><strong>175</strong></span></p>
                              <a href="hotel-details.html" class="link-img">more...</a> </div>
                          </div>
                          <div class="clear"></div>
                        </div>
                        
                        <!--/ LATEST offers list -->
                        
                        <div class="divider_space"></div>
                        
                        <!--<div class="divider_space_big"></div>--> 
                        
                        <!-- SPECIAL offers list -->
                       
                        <!--/ filter_mid -->
                        
                        <div class="grid_list promo_list">
                          <div class="list_item">
                            <div class="item_img"> <img src="images/temp/offer_07.jpg" alt="">
                              <p class="caption"><a href="tour-packages.html">Royal Heritage Tour - 5 Nights</a> <span class="price"><ins>$</ins><strong>790</strong></span></p>
                              <span class="ribbon off-30">SALE: 30% OFF</span> <a href="tour-packages.html" class="link-img">more...</a> </div>
                          </div>
                          <div class="list_item">
                            <div class="item_img"> <img src="images/temp/offer_08.jpg" alt="">
                              <p class="caption"><a href="tour-packages.html">Golden Triangle - 7 Nights</a> <span class="price"><ins>$</ins><strong>647</strong></span></p>
                              <span class="ribbon off-25">SALE: 25% OFF</span> <a href="tour-packages.html" class="link-img">more...</a> </div>
                          </div>
                          <div class="list_item">
                            <div class="item_img"> <img src="images/temp/offer_09.jpg" alt="">
                              <p class="caption"><a href="tour-packages.html">Nepal Classic - 4 Nights</a> <span class="price"><ins>$</ins><strong>645</strong></span></p>
                              <span class="ribbon off-65">SALE: 65% OFF</span> <a href="tour-packages.html" class="link-img">more...</a> </div>
                          </div>
                          <div class="list_item">
                            <div class="item_img"> <img src="images/temp/offer_10.jpg" alt="">
                              <p class="caption"><a href="tour-packages.html">Fascinating Pokhara - 7 Nights</a> <span class="price"><ins>$</ins><strong>870</strong></span></p>
                              <span class="ribbon off-15">SALE: 15% OFF</span> <a href="tour-packages.html" class="link-img">more...</a> </div>
                          </div>
                          <div class="list_item">
                            <div class="item_img"> <img src="images/temp/offer_11.jpg" alt="">
                              <p class="caption"><a href="tour-packages.html">Buddhist Pilgrimage Tour - 10 nights</a> <span class="price"><ins>$</ins><strong>2340</strong></span></p>
                              <span class="ribbon off-50">SALE: 50% OFF</span> <a href="tour-packages.html" class="link-img">more...</a> </div>
                          </div>
                          <div class="list_item">
                            <div class="item_img"> <img src="images/temp/offer_12.jpg" alt="">
                              <p class="caption"><a href="tour-packages.html">Hindu Pilgrimage Tour - 8 nights</a> <span class="price"><ins>$</ins><strong>2450</strong></span></p>
                              <span class="ribbon off-35">SALE: 35% OFF</span> <a href="tour-packages.html" class="link-img">more...</a> </div>
                          </div>
                          <div class="clear"></div>
                        </div>
                        
                        <!--/ SPECIAL offers list -->
                        <div class="boxed_list">
                                    	<div class="boxed_item">
                        	<div class="boxed_icon"><img src="images/icons/manepali.png" width="48" height="48" alt="MA NEPALI"></div>
                        	<div class="boxed_title"><strong>MA NEPALI</strong></div>
                            <span>Non Government Organisation established in 2013, to focus on social and economic problem in grass root level of the poor people of Nepal.<br>
 <a href="http://www.facebook.com/MaNepaliNGO" target="_blank">Find Us on Facebook</a> &nbsp;&nbsp; <a href="#">Follow Us on Twitter</a></span>
                        </div></div>
                       
                      </div>
                    </div>
                  </div>
                  <!--/ content -->
                  
                  <div class="clear"></div>
                </div>
              </div>
              <!--/ middle --> 
  
              <!-- after content -->
              <div class="after_content">
                <div class="after_inner">
                <div class="carousel-box">
                	<a href="#" class="prev"></a> <a href="#" class="next"></a>
                  <div class="container_12"> 
                  	<div class="carousel">
                    
                    <ul>
                    <!--# widgets area, col 1 -->                    
                   <li><div class="widgetarea widget_col_1"> 
                      
                      <!-- widget_products -->
                      
                          <div class="clear"></div>
                        </div>
                      </div>
                      <!--/ widget_products --> 
                      
                    </div></li>
                  
                    <!--/ widgets area, col 1 --> 
                    
                    <!--# widgets area, col 2 -->
                   
                     
              <!--/ after content --> 
              
              
              <!-- footer -->

        	
            <div class="widget-container widget_pages">
				<h3 class="widget-title">USEFUL LINKS:</h3>
                        <ul>
                            
                	      <li><a href="about.html">About us</a></li>
                          <li><a href="contact.html">Contact us</a></li>
                          <li><a href="terms%26conditions.html">TERMS OF SERVICE</a></li>
                        </ul>
			</div>
            
           
        </div>

        <div class="copyright">
          <p class="alignleft">Copyright 2016 - Apex College</p>
          <p>Created by <a href="">Aarya Kshetri, Bandana Bhandari and Sajja Shakya</a> </p>
        </div>
      </div>
    </div>
  </div>
              <!--/ footer --> 
  
	</div>
</body>

<!-- Mirrored from dipesh.info.np/great/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Aug 2014 09:51:49 GMT -->
</html>