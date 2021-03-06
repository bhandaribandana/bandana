<?php
  include("includes/config.php");
  $conn = mysqli_connect(DBSERVER, DBUSER, DBPASSW, DBNAME);
  $sql="select * from package";
  $result=mysqli_query($conn,$sql);
 ?>

<!doctype html>
<!--[if lt IE 7 ]><html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]><html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]><html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]><html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en" class="no-js"> <!--<![endif]-->

<!-- Mirrored from dipesh.info.np/great/holidays.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Aug 2014 09:52:51 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<title>Holiday Packages | ABS Airlines Management System</title>
<meta name="description" content="">
<meta name="keywords" content="">

<link href="http://fonts.googleapis.com/css?family=Lato:400,400italic,700|Sorts+Mill+Goudy:400,400italic" rel="stylesheet">

<!-- Mobile viewport optimized: h5bp.com/viewport -->
<meta name="viewport" content="width=device-width,initial-scale=1">

 <!-- favicon.ico and apple-touch-icon.png -->
        <link rel="shortcut icon" href="favicon.html">
        <link rel="apple-touch-icon" href="images/apple-touch-icon-57x57-iphone.png">
        <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72-ipad.png">
        <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114-iphone4.png">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/screen.css">
        <!-- custom CSS -->
        <link rel="stylesheet" href="custom.html">
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
		$("#date_in, #date_out, #filter_date_in, #filter_date_out").datepicker({
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
         <!-- Carousel Box Slider -->
<!-- styled select -->
<link rel="stylesheet" href="css/cusel.css">
<script src="js/cusel-min.js"></script>
<script src="js/jScrollPane.min.js"></script>
<script src="js/jquery.mousewheel.js"></script>
  
</head>
<body>  
<div class="body_wrap">

 <link rel="shortcut icon" href="images/favicon.ico">
<div class="header">
  <div class="container_12">
    <div class="logo"><a href="index-2.html"><img src="images/logo.png" alt=""></a>
      <h1>Great Escape Tour & Travel</h1>
    </div>
    <div class="header_right">
      <div class="topsearch">
        <form id="searchForm" action="#" method="get">
          <input type="submit" id="searchSubmit" value="" class="btn-search">
          <input type="text" name="stext" id="stext" value="" class="stext">
        </form>
      </div>
      <div class="header_phone">
		
            <span><a href="index-2.html">HOME</a></span>
            <span><a href="about.html">ABOUT US</a></span>
            <span><a href="contact.html">CONTACT US</a></span>
         
			<!--<p class="alignright">CALL US NOW: &nbsp;<strong>977-98510-04974</strong></p>-->      
	</div>
      <div class="clear"></div>
    </div>
    <div class="topmenu">
      <ul class="dropdown">
		<li class="menu-level-0"><a href="hotels.html"><span>Hotels</span></a>
          <ul class="submenu-1">
            <li class="menu-level-1"><a href="#"><span>Kathmandu</span></a>
              <ul class="submenu-2">
                <li class="menu-level-2"><a href="#"><span>Hotel Everest</span></a></li>
                <li class="menu-level-2"><a href="#"><span>Hotel Del' Annapurna</span></a></li>
                <li class="menu-level-2"><a href="#"><span>Hotel Radisson</span></a></li>
                <li class="menu-level-2"><a href="#"><span>Hotel Shangri-la</span></a></li>
                <li class="menu-level-2"><a href="#"><span>Hyatt Regency</span></a></li>
                <li class="menu-level-2"><a href="#"><span>Hotel Malla</span></a></li>
                <li class="menu-level-2"><a href="#"><span>Hotel Yak & Yeti</span></a></li>
                <li class="menu-level-2"><a href="#"><span>Hotel Dwarika</span></a></li>
                <li class="menu-level-2"><a href="#"><span>Hotel Soaltee</span></a></li>
                <li class="menu-level-2"><a href="#"><span>Hotel Shankar</span></a></li>
                <li class="menu-level-2"><a href="#"><span>Hotel Himalaya</span></a></li>
                <li class="menu-level-2"><a href="#"><span>Hotel Grand</span></a></li>
                <li class="menu-level-2"><a href="#"><span>Hotel Vaishali</span></a></li>
                <li class="menu-level-2"><a href="#"><span>Gokarna Resort</span></a></li>
                <li class="menu-level-2"><a href="#"><span>Hotel Royal Singi</span></a></li>
                <li class="menu-level-2"><a href="#"><span>Hotel Manang</span></a></li>
                <li class="menu-level-2"><a href="#"><span>Hotel Kantipur</span></a></li>
                <li class="menu-level-2"><a href="#"><span>Hotel Tibet</span></a></li>
                <li class="menu-level-2"><a href="#"><span>Kathmandu Guest House</span></a></li>
                <li class="menu-level-2"><a href="#"><span>Hotel Airport</span></a></li>
                <li class="menu-level-2"><a href="#"><span>Hotel Landmark</span></a></li>
                <li class="menu-level-2"><a href="#"><span>Hotel Samsara</span></a></li>
              </ul>
            </li>
            <li class="menu-level-1"><a href="#"><span>Pokhara</span></a>
              <ul class="submenu-2">
                <li class="menu-level-2"><a href="#"><span>Fulbari Resort</span></a></li>
                <li class="menu-level-2"><a href="#"><span>Hotel Shangri-la</span></a></li>
                <li class="menu-level-2"><a href="#"><span>Pokhara Grande</span></a></li>
                <li class="menu-level-2"><a href="#"><span>Fishtail Lodge</span></a></li>
                <li class="menu-level-2"><a href="#"><span>Temple Tree</span></a></li>
                <li class="menu-level-2"><a href="#"><span>Hotel Barahi</span></a></li>
                <li class="menu-level-2"><a href="#"><span>Water Front</span></a></li>
                <li class="menu-level-2"><a href="#"><span>Hotel Begnas</span></a></li>
                <li class="menu-level-2"><a href="#"><span>Hotel Landmark</span></a></li>
                <li class="menu-level-2"><a href="#"><span>Hotel Tibet Intl'</span></a></li>
                <li class="menu-level-2"><a href="#"><span>Hotel Meera</span></a></li>
                <li class="menu-level-2"><a href="#"><span>Hotel Tulsi</span></a></li>
                <li class="menu-level-2"><a href="#"><span>Hotel Mt. Kailash</span></a></li>
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
        <li class="menu-level-0"><a href="holidays.html"><span>Holidays</span></a>
          <ul class="submenu-1">
            <li class="menu-level-1"><a href="#"><span>Royal Heritage</span></a></li>
            <li class="menu-level-1"><a href="#"><span>Golden Triangle</span></a></li>
            <li class="menu-level-1"><a href="#"><span>Nepal Classic</span></a></li>
            <li class="menu-level-1"><a href="#"><span>FAscinating Pokhara</span></a></li>
            <li class="menu-level-1"><a href="#"><span>Golf Package I</span></a></li>
            <li class="menu-level-1"><a href="#"><span>Golf Package II</span></a></li>
			<li class="menu-level-1"><a href="#"><span>Honeymoon Package</span></a></li>
			<li class="menu-level-1"><a href="#"><span>Hindu Pilgrimage Tour</span></a></li>
			<li class="menu-level-1"><a href="#"><span>Buddhist Pilgrimage Tour</span></a></li>
			<li class="menu-level-1"><a href="#"><span>Festival Tour I</span></a></li>
			<li class="menu-level-1"><a href="#"><span>Festival Tour II</span></a></li>
          </ul>
        </li>
        
        
	    <li class="menu-level-0"><a href="special-package.html"><span>Special Packages</span></a></li>
        <li class="menu-level-0"><a href="trekking.html"><span>Trekking</span></a></li>
		<li class="menu-level-0"><a href="special-offer.html"><span>Special Offers</span></a></li>
        <li class="menu-level-0"><a href="blog.html"><span>Blog</span></a></li>
      </ul>
      <div class="clear"></div>
    </div>
    <div class="clear"></div>
  </div>
</div>
<!--/ header -->

<!-- before content -->
<div class="before_content">
<div class="before_inner">
	<div class="container_12">
    	
        <div class="title">			
            <span class="title_right"><a href="#">See all Holiday offers</a> <span class="separator">|</span> <a href="#">See all Special offers</a></span>
        </div>
        
        
        
    </div>
</div>
</div>
<!--/ before content -->

<div id="middle" class="cols2">
	<div class="container_12">
    
		<!-- breadcrumbs -->
        <div class="breadcrumbs">
        	<p><a href="index-2.html">Homepage</a> <span class="separator">&gt;</span> <a href="holidays.html">Holidays</a> </p>
        </div>
        <!--/ breadcrumbs -->
        
        <!-- content -->
        <div class="content">
        	
            <div class="title">
	        	<h1><span>PACKAGES</span></h1>
                <span class="title_right count">374 available offers</span>
	    	</div>
        	
            <!-- sorting, pages -->
	        
	        </div>
          	<!--/ sorting, pages -->
          
          	<!-- offers list -->
            <?php $i=1;
            while($data=mysqli_fetch_array($result)){?>
			<div class="re-list">
        
	            <div class="re-item">        	
	                <div class="re-image">
                    	<img src="<?php $data['image'];?>" alt="">
                    </div>
                    
	                <div class="re-short">            	
	                    <div class="re-top">
	                        <h2><?php $data['package_name'];?></h2>
	                    </div>                
	                    <div class="re-descr">
	                        <p><?php $data['description'];?></p>
	                    </div>                
	                    
	                </div>
                    <?php $i++;}?>
					
	                <div class="clear"></div>
	            </div>
                
                <div class="re-item">        	
	                <div class="re-image">
                    	<a href="tour-packages.html"><img src="images/temp/offer_mid_02.jpg" alt=""><span class="caption">View More Details</span></a>
                    </div>
                    
	                <div class="re-short">            	
	                    <div class="re-top">
	                        <h2><a href="tour-packages.html">Singapore - Sentosa Aquapark</a></h2>
                            <div class="re-subtitle">Hotel: <strong>Grand Mercure Sentosa 4*</strong> (5 nights)</div>
	                    </div>                
	                    <div class="re-descr">
	                        <p>A beachfront property set within beautiful gardens, Les Orangers Beach Resort & Bungalows offers a superb range of facilities and fantastic standards of hospitality...</p>
	                    </div>                	                    
	                </div>
					<div class="re-bot">
                        	<span class="re-price">Price: <strong>$1270</strong></span>
                        	<a href="tour-packages.html" class="link-viewimages" title="View Photos">Photos</a>
	                </div>
	                <div class="clear"></div>
	            </div>
                
                <div class="re-item">        	
	                <div class="re-image">
                    	<a href="tour-packages.html"><img src="images/temp/offer_mid_03.jpg" alt=""><span class="caption">View More Details</span></a>
                    </div>
                    
	                <div class="re-short">            	
	                    <div class="re-top">
	                        <h2><a href="tour-packages.html">Malaysia - Langkawi Beach Resort</a></h2>
                            <div class="re-subtitle">Hotel: <strong>Sunny Beach Gold Resort 4*</strong> (8 nights)</div>
	                    </div>                
	                    <div class="re-descr">
	                        <p>Ligula lacinia scelerisque tempor, lacus lacus ornare ante, ac egestas est urna sit amet arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. </p>
	                    </div>               	                    
	                </div>
					<div class="re-bot">
                        	<span class="re-price">Price: <strong>$970</strong></span>
                        	<a href="tour-packages.html" class="link-viewimages" title="View Photos">Photos</a>
	                </div>
	                <div class="clear"></div>
	            </div>
                
                <div class="re-item">        	
	                <div class="re-image">
                    	<a href="tour-packages.html"><img src="images/temp/offer_mid_04.jpg" alt=""><span class="caption">View More Details</span></a>
                    </div>
                    
	                <div class="re-short">            	
	                    <div class="re-top">
	                        <h2><a href="tour-packages.html">Australia - Sydney Tour</a></h2>
                            <div class="re-subtitle">Hotel: <strong>Marriott Grand 4*</strong> (7 nights, All Inclusive)</div>
	                    </div>                
	                    <div class="re-descr">
	                        <p>As its name suggests‚ this modern hotel has an ideal located at the entrance to the stylish Abu Tig Marina and is almost surrounded by the sea offers a superb range of facilities. </p>
	                    </div>                	                    
	                </div>
					<div class="re-bot">
                        	<span class="re-price">Price: <strong>$850</strong></span>
                        	<a href="tour-packages.html" class="link-viewimages" title="View Photos">Photos</a>
	                </div>
	                <div class="clear"></div>
	            </div>
                
                <div class="re-item">        	
	                <div class="re-image">
                    	<a href="tour-packages.html"><img src="images/temp/offer_mid_05.jpg" alt=""><span class="caption">View More Details</span></a>
                    </div>
                    
	                <div class="re-short">            	
	                    <div class="re-top">
	                        <h2><a href="tour-packages.html">New Zeeland - Honeymoon</a></h2>                           
                            <div class="re-subtitle">Hotel: <strong>Marriott Grand 4*</strong> (7 nights, Flights & Hotel w. Breakfast)</div>
	                    </div>                
	                    <div class="re-descr">
	                        <p>Nunc eu ullamcorper orci. Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque faucibus vestibulum. Nulla at nulla justo, eget luctus tortor. Nulla facilisi. Duis aliquet egestas.</p>
	                    </div>                	                    
	                </div>
					<div class="re-bot">
                        	<span class="re-price">Price: <strong>$820</strong></span>
                        	<a href="tour-packages.html" class="link-viewimages" title="View Photos">Photos</a>
	                </div>
	                <div class="clear"></div>
	            </div>
                
        	</div>
            <!-- offers list -->
            
            <!-- sorting, pages -->
	        </div>
          	<!--/ sorting, pages -->
            
        </div>
        <!--/ content -->
        
        <!-- sidebar -->
        
        <div class="sidebar"> 
  <!--Latest comment-->
  
  </div>
  <!-- <!end of --Latest comment--> 
  
  <!--Tag Cloud-->
	
  <!--Archives-->
  
  <!--Archives--> 
  
 
</div>
        <!--/ sidebar -->
        
        <div class="clear"></div>        
    </div>
</div>
<!--/ middle -->

<!-- after content -->
<div class="after_content">
                <div class="after_inner">
                
                </div>
                </div>
              </div>
<!--/ after content -->

<!-- footer -->

 <div class="upper footer">

    <div class="footer_inner">
       
      <div class="container_12"> 

        <div class="widgetarea f_col_2">
        	
           
           
        </div>
        <div class="widgetarea f_col_2">
        	
            <div class="widget-container widget_pages">
				<h3 class="widget-title">USEFUL LINKS:</h3>
                        <ul>
                            
                	      <li><a href="#">About us</a></li>
                          <li><a href="#">Contact us</a></li>
                          <li><a href="#">Our Blog</a></li>
                          <li><a href="#">TERMS OF SERVICE</a></li>
                          <li><a href="#">PRIVACY POLICY</a></li>
                        </ul>
			</div>
            
           
        </div>
        <div class="clear"></div>
      </div>
    </div>
  </div>
  
<div class="footer">

    
    </div>
  </div>
<!--/ footer -->
    
</div>
</body>
<link rel="stylesheet" href="css/global.css" type="text/css"/>
    <link href='http://fonts.googleapis.com/css?family=IM+Fell+DW+Pica+SC' rel='stylesheet' type='text/css'>
    <script>                
    function tick(){
    $('#ticker_01 li:first').slideUp( function () { $(this).appendTo($('#ticker_01')).slideDown(); });
    }
    setInterval(function(){ tick () }, 5000);
    
    
    function tick2(){
    $('#ticker_02 li:first').slideUp( function () { $(this).appendTo($('#ticker_02')).slideDown(); });
    }
    setInterval(function(){ tick2 () }, 6900);
    
    
    function tick3(){
    $('#ticker_03 li:first').animate({'opacity':0}, 200, function () { $(this).appendTo($('#ticker_03')).css('opacity', 1); });
    }
    setInterval(function(){ tick3 () }, 4000);	
    
    function tick4(){
    $('#ticker_04 li:first').slideUp( function () { $(this).appendTo($('#ticker_04')).slideDown(); });
    }
    
    
    /**
    * USE TWITTER DATA
    */
    
    $.ajax ({
    url: 'http://search.twitter.com/search.json',
    data: 'q=%23javascript',
    dataType: 'jsonp',
    timeout: 10000,
    success: function(data){
    if (!data.results){
    return false;
    }
    
    for( var i in data.results){
    var result = data.results[i];
    var $res = $("<li />");
    $res.append('<img src="' + result.profile_image_url + '" />');
    $res.append(result.text);
    
    console.log(data.results[i]);
    $res.appendTo($('#ticker_04'));
    }
    setInterval(function(){ tick4 () }, 4000);	
    
    $('#example_4').show();
    
    }
    });
    
    
    </script>

<!-- Mirrored from dipesh.info.np/great/holidays.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Aug 2014 09:52:51 GMT -->
</html>