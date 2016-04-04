<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<meta name="keywords" content="<?php echo $description;?>" />
<meta name="description" content="<?php echo $description;?>" />
<title><?php echo $title;?> : Travel Asia</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>public/css/main.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>public/css/menu.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>public/css/likebox.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>public/css/bgstretcher.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>public/css/prettyPhoto.css">
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

<script type="text/javascript" src="<?php echo base_url();?>public/js/jquery.prettyPhoto.js"></script>
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
    
       
      
      <div id="wrapContentBox">
      	<div id="contentBox">
         <div class="contentBoxExperiences spaceBottom accordionButton">
        <div class="contentBoxExperienceWrapper">
          <h1>EXPERIENCES IN CAMBODIA</h1>
          </div>
        </div>
        <?php
        foreach ($experiences as $experience) {
		?>
        
            <div class="contentBoxExperiences spaceBottom accordionButton">
                <div class="contentBoxExperienceWrapper">
                <?php 
                    if ($experience->image != '') {
                        echo '<div class="contentImageExperience">';
                        echo '<img width="250" height="150" alt="'.$experience->title.'" src="'.base_url().'upload/experiences/'.$experience->image.'">';
                        echo '</div>';
                    }
                    echo '<h2>'.$experience->title.'</h2>';
                    echo $experience->description;
                    if ($experience->readmore != '') {
                        echo '<a href="'.$experience->readmore.'">READMORE</a>';
                    }
                ?>
                </div>
            </div>
        
        <?php
			}
		?>
        
        
        </div>
        
      </div>
      <?php include('application/views/atoa/footer.php'); ?>
    </div>
  </div>
</div>

</body>
</html>