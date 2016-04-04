<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="keywords" content="<?php echo $cruise->meta_keyword;?>" />
<meta name="description" content="<?php echo $cruise->meta_description;?>" />
<title><?php echo $cruise->name;?> : Travel Asia</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>public/css/main.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>public/css/menu.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>public/css/likebox.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>public/css/bgstretcher.css" />
<!--<link rel="shortcut icon" href="<?php /*echo base_url();*/?>public/images/favicon.ico" />-->
<?php include('application/views/atoa/detect-browser.php');?>
<script type="text/javascript" src="<?php echo base_url();?>public/js/jquery-1.5.2.min.js"></script>
<link href="<?php echo base_url();?>public/css/jquery-ui-1.10.3.hotel.min.css" rel="stylesheet">
<script src="<?php echo base_url();?>public/js/jquery-ui-1.10.3.custom.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>public/js/bgstretcher.js"></script>
<script src="<?php echo base_url();?>public/js/mootools-core.js" type="text/javascript"></script>
<script id="facebook-jssdk" src="//connect.facebook.net/en_GB/all.js#xfbml=1"></script>
<script src="<?php echo base_url();?>public/js/mootools.likebox.js" type="text/javascript"></script>
<?php include('application/views/atoa/background-cruise.php');?>
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
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td valign="top"><?php include('application/views/atoa/search.php'); ?></td>
            <td class="bordertemplate"></td>
            <td valign="top">
            	<div class="blogcontents">
                    <h1><?php echo $cruise->name;?></h1>
                    <div class="dayNight"><?php echo $cruise->city_name?></div>
                   
                    <div id="hotel_tabs" style="float:left; width:100%; padding-top:10px;">
                        <ul>
                            <li><a href="#tabs-1">OVERVIEW</a></li>
                            <li><a href="#tabs-2">ROUTE</a></li>
                            <li><a href="#tabs-3">CABINS</a></li>
                            <li><a href="#tabs-4">DINING</a></li>
                            <li><a href="#tabs-5">LEISURE</a></li>
                        </ul>
                        <div id="tabs-1">
                            <div>
                            	<?php
								if ($cruise->image != '')
								echo '<img width="250" height="150" src="'.base_url().'upload/cruises/'.$cruise->image.'" align="left" style="margin:4px 20px 5px 0;"/>';
								
								echo $cruise->description;
								?>
                           </div>
                           <div style="clear:both"></div>
                           <hr style="margin-top:20px; border:0; border-bottom:1px dashed #808080;">
                            <!-- <h2>A Touch of Asia Opinion</h2> -->
							<h2>Travel Asia A la carte Opinion</h2>
                         	<div>
                            
                                 <?php
                                if ($cruise->review_image != '')
                                echo '<img width="250" height="150" src="'.base_url().'upload/cruises/'.$cruise->review_image.'" align="left" style="margin:4px 20px 5px 0;"/>';
                                
                                echo $cruise->review;
                                ?>
                        	</div>
                        	<div style="clear:both"></div>
                        </div>
                        <div id="tabs-2">
                            <div>
                                <?php
                                if ($cruise->location_image != '')
                                echo '<img width="250" height="150" src="'.base_url().'upload/cruises/'.$cruise->location_image.'" align="left" style="margin:4px 20px 5px 0;"/>';
                                
                                echo $cruise->location;
                                ?>
                            </div>
                            <div style="clear:both"></div>
                        </div>
                        <div id="tabs-3">
                            <div>
                                <?php
                                if ($cruise->rooms_image != '')
                                echo '<img width="250" height="150" src="'.base_url().'upload/cruises/'.$cruise->rooms_image.'" align="left" style="margin:4px 20px 5px 0;"/>';
                                
                                echo $cruise->rooms;
                                ?>
                            </div>
                            <div style="clear:both"></div>
                        </div>
                        <div id="tabs-4">
                            <div>
                                <?php
                                if ($cruise->dining_image != '')
                                echo '<img width="250" height="150" src="'.base_url().'upload/cruises/'.$cruise->dining_image.'" align="left" style="margin:4px 20px 5px 0;"/>';
                                
                                echo $cruise->dining;
                                ?>
                            </div>
                            <div style="clear:both"></div>
                        </div>
                        <div id="tabs-5">
                            <div>
                                <?php
                                if ($cruise->leisure_image != '')
                                echo '<img width="250" height="150" src="'.base_url().'upload/cruises/'.$cruise->leisure_image.'" align="left" style="margin:4px 20px 5px 0;"/>';
                                
                                echo $cruise->leisure;
                                ?>
                            </div>
                             <div style="clear:both"></div>
                        </div>
                    </div>
                   
             	</div>
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