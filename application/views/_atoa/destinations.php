<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="keywords" content="cambodia tours, asian tours" />
<meta name="description" content="Travel Asia creates and manages Cambodia tours and travel" />
<title>Cambodia tours: a new and exciting destination</title>
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
<?php include('application/views/atoa/background.php');?>
<script type="text/javascript" src="<?php echo base_url();?>public/js/main.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$("html, body").animate({scrollTop: $("#body").offset().top - 150},'slow');
	});
</script>
<?php include('application/views/atoa/analytics.html');?>
</head>
<body onLoad="showModal();">
<div id="container">
  <?php include('application/views/atoa/header.php');?>
  <div id="body"> 
    <!-- Body start --> 
    <div id="left-side-link">
		<a href="<?php echo base_url();?>">
			<img src="<?php echo base_url();?>public/images/homes-left-side.png" alt="Home left side"/>
		</a>
	</div>
	<div id="right-side-link">
		<a href="http://www.travelasia.travel/enquiry-about-cambodia-tour" rel="nofollow" >
			<img src="<?php echo base_url();?>public/images/white-envelope.png" alt="Contact us"/>
		</a>
		<a href="https://www.facebook.com/travelasia.travel" target="_blank">
			<img src="<?php echo base_url();?>public/images/fb-right-side.png" alt="Facebook page"/>
		</a>
		<a href="https://plus.google.com/+TravelasiaTravelalacarte/about" rel="publisher" target="_blank">
			<img src="<?php echo base_url();?>public/images/gg-right-side.png" alt="G+ profile page"/>
		</a>
    </div>
    <!-- Body end --> 
  </div>
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
        <table >
          <tr>
            <td class="td_top"><?php include('application/views/atoa/search.php'); ?></td>
            <td class="bordertemplate"></td>
            <td class="td_top"><div class="blogcontents">
                <h1>Cambodia Tours</h1>
                <div class="descriptions">From the ancient Angkorian Temples to tragic history, Cambodia is a developing country. Experience this exciting country by taking in Angkor Wat, the vibrant capital of Phnom Penh, the relaxing southern coastline, rainforests of the Cardamom Mountains or get off the beaten track and explore indigenous tribes in the northeast.
                <p style="font-size:18px; font-family: eurostylenormal !important;"><img src="<?php echo base_url();?>public/images/useful-info-icon.png" style="vertical-align:middle; margin-right:10px" alt="A Touch of Asia Travel"/><a class="red_link" href="<?php echo site_url('useful-information');?>">Cambodia Useful Information</a></p>
                </div>
                <div class="titlebar"> <img src="<?php echo base_url();?>public/images/pointer-01.png" class="imgpointer" alt="A Touch of Asia Travel"/>Destinations<img src="<?php echo base_url();?>public/images/pointer-01.png" class="imgpointer" alt="A Touch of Asia Travel"/> </div>
                <?php 
					foreach($destinations as $destination)
					{					
                        echo '<div class="destinationimg">';
                        echo '<a href="'.site_url("asian-and-cambodia-tours-destinations.html/".$destination['region_id']."/".strtolower(url_title($destination['name']))."").'"><img width="250" height="150" alt="'.$destination['name'].'" src="'.base_url().'upload/regions/'.$destination['image'].'"></a>';
                        echo '<h2><a href="'.site_url("asian-and-cambodia-tours-destinations.html/".$destination['region_id']."/".strtolower(url_title($destination['name']))."").'">'.$destination['name'].'</a></h2>';
                        
                        echo '</div>';
					}
					?>
              </div></td>
          </tr>
        </table>
      </div>
      <?php include('application/views/atoa/footer.php'); ?>
    </div>
  </div>
</div>
</body>
</html>