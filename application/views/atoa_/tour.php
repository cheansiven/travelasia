<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<meta name="keywords" content="<?php echo $tour->meta_keyword;?>" />
<meta name="description" content="<?php echo $tour->meta_description;?>" />
<title><?php echo $tour->meta_title;?> : Travel Asia</title>
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
                <h1><?php echo $tour->name;?></h1>
                <div class="dayNight"><?php echo $tour->num_days.'DAYS - '.$tour->num_nights.'NIGHTS'?></div>
                <div class="descriptions"> <?php echo '<div>'.$tour->intro.'</div><div>'.$tour->description.'</div>';?> </div>
                <div class="titlebar1"> <img src="<?php echo base_url();?>public/images/pointer-01.png" class="imgpointer" alt="A Touch of Asia Travel"/><a class="white_link" href="<?php echo site_url('booking/'.$tour->id.'/'.strtolower(url_title($tour->name)));?>">Send Enquiry</a><img src="<?php echo base_url();?>public/images/pointer-01.png" class="imgpointer" alt="A Touch of Asia Travel"/> </div>

                <?php
                foreach ($itineraries as $itinerary)
				{
				?>
                    <div class="titlebar2">
                      <div class="titlebar2Left">Day <?php echo $itinerary['day']?></div>
                      <div class="titlebar2Right"></div>
                    </div>
                    <div class="descriptions">
                    	<?php
						if ($itinerary['image'] != '')
                    	echo '<div class="itinerary_div"><img width="250" height="150" alt="'.$itinerary['day'].'" src="'.base_url().'upload/tours/itinerary/'.$itinerary['image'].'" class="itinerary_img"/></div>';

                        echo $itinerary['description'];
						?>
                    </div>

              <?php
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