<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="keywords" content="<?php echo $keywords;?>" />
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
<?php include('application/views/atoa/background.php');?>
<script type="text/javascript">
	$(document).ready(function(){
		$("html, body").animate({scrollTop: $("#body").offset().top - 150},'slow');
		
		//ACCORDION BUTTON ACTION (ON CLICK DO THE FOLLOWING)
	$('.accordionButton').click(function() {

		
		  
		//NO MATTER WHAT WE CLOSE ALL OPEN SLIDES
	 	$('.accordionContent').slideUp('normal');
   		var id = $(this).attr('id');
		//IF THE NEXT SLIDE WASN'T OPEN THEN OPEN IT
		if($('#content_'+id).is(':hidden') == true) {
			
			
			//OPEN THE SLIDE
			$('#content_'+id).slideDown('normal');
		 } 
		 return false;
		  
	 });
	  
	
	/*** REMOVE IF MOUSEOVER IS NOT REQUIRED ***/
	
	//ADDS THE .OVER CLASS FROM THE STYLESHEET ON MOUSEOVER 
	$('.accordionButton').mouseover(function() {
		$(this).addClass('over');
		
	//ON MOUSEOUT REMOVE THE OVER CLASS
	}).mouseout(function() {
		$(this).removeClass('over');										
	});
	
	/*** END REMOVE IF MOUSEOVER IS NOT REQUIRED ***/
	
	
	/********************************************************************************************************************
	CLOSES ALL S ON PAGE LOAD
	********************************************************************************************************************/	
	$('.accordionContent').hide();
	
	
	$('.block_click').mouseover(function(){ 
		$(this).parent().addClass('arrow'); 
	});
	
	$('.block_click').mouseout(function(){ 
		$(this).parent().removeClass('arrow'); 
	});
		
	});
</script>
<script type="text/javascript" src="<?php echo base_url();?>public/js/main.js"></script>
<?php include('application/views/atoa/social.php');?>
<?php include('application/views/atoa/analytics.html');?>
</head>
<body><!--onLoad="showModal();"-->
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
            <td class="td_top">
          <div class="blogcontents">
               <h1><?php echo $tour_title;?></h1>
                <div class="descriptions"><?php echo $tour_description;?></div>
                <div class="titlebar tour_bar"> <img src="<?php echo base_url();?>public/images/pointer-01.png" class="imgpointer"/> tours <img src="<?php echo base_url();?>public/images/pointer-01.png" class="imgpointer"/> </div>
            	<?php
                foreach ($tours as $tour)
				{
					
					if ($tour['promo_option'] != 0) {
						echo '<div class="wrapper_promo"><div class="tour_block"><a class="block_click" href="'.site_url('tour/'.$tour['id']).'/'.strtolower(url_title($tour['url'])).'.html"><table><tr><td width="700px"><div class="contents_border_promo">';
						echo '<h2>'.$tour['name'].'</h2>';
						echo '<div class="dayNight">'.$tour['num_days'].'DAYS - '.$tour['num_nights'].'NIGHTS</div>';
						
						if ($tour['image'] != '')
							echo '<div class="contents_img"><img width="250" height="150" alt="'.$tour['name'].'" src="'.base_url().'upload/tours/'.$tour['image'].'"></div>';
						echo '<div class="listDetail readmore">'.strip_tags($tour['intro']);
						//echo '<a href="'.site_url('tour/'.$tour['id']).'/'.strtolower(url_title($tour['name'])).'"> ...READ MORE</a> ';
						
						echo '<div style="clear:both;"></div>';
						if ($tour['promo_option'] == 1)
							echo '<div class="promo_option accordionButton" id="'.$tour['id'].'"><img alt="Travel Asia a la carte" src="'.base_url().'public/images/best-value-icon.png"></div>';
						else if ($tour['promo_option'] == 2)
							echo '<div class="promo_option accordionButton" id="'.$tour['id'].'"><img  alt="Travel Asia a la carte" src="'.base_url().'public/images/limited-offer-icon.png"></div>';
						else
							echo '<div class="promo_option accordionButton" id="'.$tour['id'].'"><img  alt="Travel Asia a la carte" src="'.base_url().'public/images/added-touch-icon.png"></div>';
						
						echo '<div class="promo_text accordionContent">'.$tour['promo_text'].'</div>';
						echo '<div class="tour-enquire"><a class="white_link" rel="nofollow" href="'.site_url('booking/'.$tour['id'].'/'.strtolower(url_title($tour['name']))).'">';
						echo '<img  alt="Travel Asia a la carte" src="'.base_url().'public/images/enquire-tour.png"></a></div>';
						echo '</div></div></td></tr></table></a>';
						echo '</div>';
						
						echo '<div class="promo_text accordionContent" id="content_'.$tour['id'].'">'.$tour['promo_text'].'</div>';
						echo '</div>';
						
					} else {
						echo '<div class="wrapper_promo"><div class="tour_block"><a class="block_click" href="'.site_url('tour/'.$tour['id']).'/'.strtolower(url_title($tour['url'])).'.html"><table><tr><td width="620px"><div class="contents_border">';
						echo '<h2>'.$tour['name'].'</h2>';
						echo '<div class="dayNight">'.$tour['num_days'].'DAYS - '.$tour['num_nights'].'NIGHTS</div>';
						
						if ($tour['image'] != '')
							echo '<div class="contents_img"><a href="'.site_url('tour/'.$tour['id']).'/'.strtolower(url_title($tour['url'])).'.html"><img  width="250" height="150" alt="'.$tour['name'].'" src="'.base_url().'upload/tours/'.$tour['image'].'"></a></div>';
						echo '<div class="listDetail readmore">'.strip_tags($tour['intro']);
						//echo '<a href="'.site_url('tour/'.$tour['id']).'/'.strtolower(url_title($tour['name'])).'"> ...READ MORE</a> ';
						echo '<div style="clear:both;"></div>';
						
						echo '<div class="tour-enquire"><a class="white_link" rel="nofollow" href="'.site_url('booking/'.$tour['id'].'/'.strtolower(url_title($tour['name']))).'">';
						echo '<img  alt="Travel Asia a la carte" src="'.base_url().'public/images/enquire-tour.png"></a></div>';
						echo '</div></div></td></tr></table></a></div>';
						echo '</div>';
					}
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