<!DOCTYPE HTML>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="keywords" content="Cruises in Cambodia" />
<meta name="description" content="Find a selection of the best river cruises in South East Asia, from Vietnam to Siem Reap on the mekong" />
<title>Selection of the best Mekong Cruises in Cambodia and Asia</title>
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
<?php include('application/views/atoa/background-cruise.php');?>
<script type="text/javascript">
	$(document).ready(function(){
		$("html, body").animate({scrollTop: $("#body").offset().top - 150},'slow');
		
		
	$('.block_click').mouseover(function(){ 
		$(this).parent().addClass('arrow'); 
	});
	
	$('.block_click').mouseout(function(){ 
		$(this).parent().removeClass('arrow'); 
	});
		
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
      <?php include('application/views/atoa/popup-contain.php'); ?>
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
            <h1>Cruises in Cambodia</h1>
            <div class="descriptions">River cruising is the ideal way to explore Cambodia, see the Mighty Mekong and cruise from Saigon or Phnom Penh to Siem Reap. There is no need to unpack your suitcase each day as new destinations are explored along the way. From day cruises to week long exploration, sailing to small villages and experiencing life along the river, this is the quintessential way to discover Indochina.</div>
            <div class="titlebar tour_bar"> <img src="<?php echo base_url();?>public/images/pointer-01.png" class="imgpointer" alt="A Touch of Asia Travel"/> cruises <img src="<?php echo base_url();?>public/images/pointer-01.png" class="imgpointer" alt="A Touch of Asia Travel"/> </div>
            <?php
                foreach ($cruises as $cruise)
				{
					echo '<div class="wrapper_promo"><div class="tour_block"><a class="block_click" href="'.site_url('cruise/'.$cruise['id']).'/'.strtolower(url_title($cruise['url'])).'.html"><table><tr><td width="620px"><div class="contents_border">';
                 	echo '<h2>'.$cruise['name'].'</h2>';
					echo '<div class="dayNight">'.$cruise['city_name'].'</div>';
                    if ($cruise['image'] != '')
						echo '<div class="contents_img"><img width="250" height="150" alt="'.$cruise['name'].'" src="'.base_url().'upload/cruises/'.$cruise['image'].'"></div>';
                    echo '<div class="listDetail readmore">'.strip_tags($cruise['description']);
					//echo '<a href="'.site_url('cruise/'.$cruise['id']).'/'.strtolower(url_title($cruise['name'])).'"> <br>READ MORE</a> </div>';
					echo '</div></div></td></tr></table></a></div>';
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