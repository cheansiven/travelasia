<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<meta name="keywords" content="<?php echo $hotel->meta_keyword;?>" />
<meta name="description" content="<?php echo $hotel->meta_description;?>" />
<title><?php echo $hotel->name;?>: Travel Asia</title>
<link href="<?php echo base_url();?>public/css/jquery-ui-1.10.3.hotel.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>public/css/main.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>public/css/menu.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>public/css/likebox.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>public/css/bgstretcher.css" />
<!--<link rel="shortcut icon" href="<?php /*echo base_url();*/?>public/images/favicon.ico" />-->
<?php include('application/views/atoa/detect-browser.php');?>
<script type="text/javascript" src="<?php echo base_url();?>public/js/jquery-1.5.2.min.js"></script>
<script src="<?php echo base_url();?>public/js/jquery-ui-1.10.3.custom.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>public/js/bgstretcher.js"></script>
<script src="<?php echo base_url();?>public/js/mootools-core.js" type="text/javascript"></script>
<script id="facebook-jssdk" src="//connect.facebook.net/en_GB/all.js#xfbml=1"></script>
<script src="<?php echo base_url();?>public/js/mootools.likebox.js" type="text/javascript"></script>
<?php include('application/views/atoa/background-hotel.php');?>
<script type="text/javascript">
	$(document).ready(function(){
		$("html, body").animate({scrollTop: $("#body").offset().top - 150},'slow');
	});

	$(function() {
		$( "#hotel_tabs" ).tabs();
	});
</script>

<script type="text/javascript" src="<?php echo base_url();?>public/js/main.js"></script>
<?php include('application/views/atoa/analytics.html');?>
</head>
<body onLoad="showModal();">
<div id="container">
  <?php include('application/views/atoa/header.php');?>
  <?php include('application/views/atoa/social.php'); ?>
  <div id="footer">
    <!-- Footer start -->
    <div id="tooltip_contain">
      <?php //include('application/views/atoa/popup-contain.php'); ?>
    </div>
    <div class="nav-wrap">
      <div class="wrapper_inner">
        <?php include('application/views/atoa/menu.php'); ?>
      </div>
    </div>
    <div id="bg_footer">
      <div id="bg_contents">
        <div class="search">
        <?php include('application/views/atoa/search.php'); ?>
        </div>
        <div>
        <div class="blogcontents">
                    <h1><?php echo $hotel->name;?></h1>
                    <div class="dayNight"><?php echo $hotel->city_name?></div>

                    <div id="hotel_tabs" style="float:left; width:100%; padding-top:10px;">
                        <ul>
                            <li><a href="#tabs-1">OVERVIEW</a></li>
                            <li><a href="#tabs-2">LOCATION</a></li>
                            <li><a href="#tabs-3">ROOMS</a></li>
                            <li><a href="#tabs-4">DINING</a></li>
                            <li><a href="#tabs-5">LEISURE</a></li>
                        </ul>
                        <div id="tabs-1">
                            <div>
                            	<?php
								if ($hotel->image != '')
								echo '<img width="250" height="150" src="'.base_url().'upload/hotels/'.$hotel->image.'" align="left" style="margin:4px 20px 5px 0;"/>';

								echo $hotel->description;
								?>
                           </div>
                           <div style="clear:both"></div>
                           <hr style="margin-top:20px; border:0; border-bottom:1px dashed #808080;">
                            <h2>Travel Asia Opinion</h2>
                         	<div>

                                 <?php
                                if ($hotel->review_image != '')
                                echo '<img width="250" height="150" src="'.base_url().'upload/hotels/'.$hotel->review_image.'" align="left" style="margin:4px 20px 5px 0;"/>';

                                echo $hotel->review;
                                ?>
                        	</div>
                        	<div style="clear:both"></div>
                        </div>
                        <div id="tabs-2">
                            <div>
                                <?php
                                if ($hotel->location_image != '')
                                echo '<img width="250" height="150" src="'.base_url().'upload/hotels/'.$hotel->location_image.'" align="left" style="margin:4px 20px 5px 0;"/>';

                                echo $hotel->location;
                                ?>
                            </div>
                            <div style="clear:both"></div>
                        </div>
                        <div id="tabs-3">
                            <div>
                                <?php
                                if ($hotel->rooms_image != '')
                                echo '<img width="250" height="150" src="'.base_url().'upload/hotels/'.$hotel->rooms_image.'" align="left" style="margin:4px 20px 5px 0;"/>';

                                echo $hotel->rooms;
                                ?>
                            </div>
                            <div style="clear:both"></div>
                        </div>
                        <div id="tabs-4">
                            <div>
                                <?php
                                if ($hotel->dining_image != '')
                                echo '<img width="250" height="150" src="'.base_url().'upload/hotels/'.$hotel->dining_image.'" align="left" style="margin:4px 20px 5px 0;"/>';

                                echo $hotel->dining;
                                ?>
                            </div>
                            <div style="clear:both"></div>
                        </div>
                        <div id="tabs-5">
                            <div>
                                <?php
                                if ($hotel->leisure_image != '')
                                echo '<img width="250" height="150" src="'.base_url().'upload/hotels/'.$hotel->leisure_image.'" align="left" style="margin:4px 20px 5px 0;"/>';

                                echo $hotel->leisure;
                                ?>
                            </div>
                             <div style="clear:both"></div>
                        </div>
                    </div>

             	</div>
         </div>
        <div class="clearfix"></div>
      </div>
      <?php include('application/views/atoa/footer.php'); ?>
    </div>
  </div>
</div>
</body>
</html>