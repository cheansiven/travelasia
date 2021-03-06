<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="keywords" content="Tours in Cambodia" />
<meta name="description" content="Whether you are seeking a tour in Cambodia or in all of South East Asia, you should contact Travel Asia a la carte first, for some exclusive packages" />
<title>Where to find the best tours in Cambodia ? Visit Travel Asia a la carte</title>
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
        <table>
          <tr>
            <td class="td_top"><?php include('application/views/atoa/search.php'); ?></td>
            <td class="bordertemplate"></td>
            <td class="td_top"><div class="blogcontents">
                <h1>Tours in Cambodia</h1>
                <div class="descriptions">Travel Asia A La Carte offers specialised tours such as Adventure, Honeymoon, Nature or Family Holidays. Create your own personal tour and add some responsible tourism aspects, relaxation or whatever suits your style.</div>
                <div class="titlebar"> <img src="<?php echo base_url();?>public/images/pointer-01.png" class="imgpointer" alt="A Touch of Asia Travel"/> Holiday Types <img src="<?php echo base_url();?>public/images/pointer-01.png" class="imgpointer" alt="A Touch of Asia Travel"/> </div>
                <?php 
					foreach($categories as $category)
					{
					
                        echo '<div class="destinationimg">';
                        echo '<a href="'.site_url("holiday-tours-in-cambodia.html/".$category['category_id']."/".strtolower(url_title($category['name']))."").'"><img width="250" height="150" alt="'.$category['name'].'" src="'.base_url().'upload/categories/'.$category['image'].'"></a>';
                        echo '<h2><a href="'.site_url("holiday-tours-in-cambodia.html/".$category['category_id']."/".strtolower(url_title($category['name']))."").'">'.$category['name'].'</a></h2>';
                       
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