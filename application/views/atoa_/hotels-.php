<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="keywords" content="<?php echo $description;?>" />
<meta name="description" content="<?php echo $description;?>" />
<title><?php echo $title;?> : Travel Asia</title>
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
  <div id="body">
    <!-- Body start -->
         <a href="<?php echo base_url();?>">

    <div class="home-side-left">

        <img src="<?php echo base_url();?>public/images/homes-left-side.png" alt="Home side left"/>


    </div>
     </a>

    <a class="red_link" href="mailto:info@travelasia.travel">

    <div class="home-side-right">

        <img src="<?php echo base_url();?>public/images/enquire-left-side.png" alt="Home side left"/>


    </div>
     </a>
    <!-- Body end -->
  </div>
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
        <table>
          <tr>
            <td class="td_top"><?php include('application/views/atoa/search.php'); ?></td>
            <td class="bordertemplate"></td>
            <td class="td_top">
          <div class="blogcontents">
               <h1><?php echo $hotel_title;?></h1>
                <div class="descriptions"><?php echo $hotel_description;?></div>
                <div class="titlebar tour_bar"> <img src="<?php echo base_url();?>public/images/pointer-01.png" class="imgpointer" alt="A Touch of Asia Travel"/> hotels <img src="<?php echo base_url();?>public/images/pointer-01.png" class="imgpointer" alt="A Touch of Asia Travel"/> </div>
            	<?php
                foreach ($hotels as $hotel)
				{
					echo '<div class="contents_border">';
                 	echo '<h2>'.$hotel['name'].'</h2>';
					echo '<div class="dayNight">'.$hotel['city_name'].'</div>';
                    if ($hotel['image'] != '')
						echo '<div class="contents_img"><img width="250" height="150" alt="'.$hotel['name'].'" src="'.base_url().'upload/hotels/'.$hotel['image'].'"></div>';
                    echo '<div class="listDetail readmore">'.strip_tags($hotel['description']);
					echo '<a href="'.site_url('hotel/'.$hotel['id']).'/'.strtolower(url_title($hotel['name'])).'"> <br>READ MORE</a> </div>';
					echo '</div>';

			}
			 ?></div>
              </td>
          </tr>
        </table>
      </div>
      <?php include('application/views/atoa/footer.php'); ?>
    </div>
  </div>
</div>
</body>
</html>