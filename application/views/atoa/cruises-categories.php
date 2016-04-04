<!DOCTYPE HTML>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="title" content="Selection of the best hotels and accommodations in Siem Reap" />
<meta name="keywords" content="Best hotels in Cambodia" />
<meta name="description" content="Listing and directory of the best hotel properties in Siem Reap and Cambodia" />
<title>Selection of the best hotels and accommodations in Siem Reap</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>public/css/main.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>public/css/menu.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>public/css/likebox.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>public/css/bgstretcher.css" />
<!--<link rel="shortcut icon" href="<?php /*echo base_url();*/?>public/images/favicon.ico" />-->
<?php include('application/views/atoa/detect-browser.php');?>
<script type="text/javascript" src="<?php echo base_url();?>public/js/jquery-1.5.2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>public/js/bgstretcher.js"></script>
<script src="<?php echo base_url();?>public/js/mootools-core.js" type="text/javascript"></script>
<script id="facebook-jssdk" src="//connect.facebook.net/en_GB/all.js#xfbml=1"></script>
<script src="<?php echo base_url();?>public/js/mootools.likebox.js" type="text/javascript"></script>
<?php include('application/views/atoa/background-hotel.php');?>
<script type="text/javascript">
	$(document).ready(function(){
		$("html, body").animate({scrollTop: $("#body").offset().top - 150},'slow');
	});
</script>
<script type="text/javascript" src="<?php echo base_url();?>public/js/main.js"></script>
<?php include('application/views/atoa/analytics.html');?>
</head>
<body onLoad="showModal();">
<div id="container">
  <?php include('application/views/atoa/header.php');?>
  <?php //include('application/views/atoa/social.php'); ?>
  <div id="footer"> 
    <!-- Footer start -->
    <div id="tooltip_contain">
      <?php //include('application/views/atoa/popup-contain.php'); ?>
    </div>
    <div class="nav-wrap">
      <div class="wrapper_inner">
        <?php include('application/views/atoa/menu-home.php'); ?>
      </div>
    </div>
    <div id="bg_footer">
      <div id="bg_contents">
        <div class="search">
          <?php include('application/views/atoa/search.php'); ?>
        </div>
        <div>
        <div class="blogcontents">
                <h1>Cruises in Cambodia</h1>
                <div class="descriptions">Cambodia has a range of hotels to offer for all budgets and tastes. Travel Asia only work with hotels we have personally inspected and in most cases, stayed overnight to test the services.</div>
                <div class="titlebar"> <img src="<?php echo base_url();?>public/images/pointer-01.png" class="imgpointer" alt="Travel Asia"/> Cruises <img src="<?php echo base_url();?>public/images/pointer-01.png" class="imgpointer" alt="Travel Asia"/> </div>
                <?php 
					foreach($cruises as $cruise)
					{
					
                        echo '<div class="destinationimg">';
						if ($cruise['image'] != '')
                        	echo '<a href="'.site_url("best-river-cruises-in-south-east-asia.html/".$cruise['region_id']."/".strtolower(url_title($cruise['name']))."").'"><img width="250" height="150" alt="'.$cruise['name'].'" src="'.base_url().'upload/regions/'.$cruise['image'].'"></a>';
                        echo '<h2><a href="'.site_url("best-river-cruises-in-south-east-asia.html/".$cruise['region_id']."/".strtolower(url_title($cruise['name']))."").'">'.$cruise['name'].'</a></h2>';
                        echo '</div>';
					}
					?>
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