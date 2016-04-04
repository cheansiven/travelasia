<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="keywords" content="Travel agent in Cambodia" />
<meta name="description" content="An exclusive travel agent in Cambodia: find the best tours in Asia" />
<title>Luxury tours and excursions : travel agent in Cambodia : Travel Asia</title>

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
<!--script src="<?php echo base_url();?>public/js/mootools.likebox.js" type="text/javascript"></script-->

<?php include('application/views/atoa/background.php');?>

<script type="text/javascript" src="<?php echo base_url();?>public/js/main.js"></script>
<?php include('application/views/atoa/analytics.html');?>


</head>
<body>
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
 		<div id="tooltip_contain"><?php //include('application/views/atoa/popup-contain.php'); ?></div>
        
            <div class="nav-wrap">
                <div class="wrapper_inner">
                    <?php include('application/views/atoa/menu.php'); ?>
                </div>
            </div>
            <div id="bg_footer">  
            	<div id="bg_content"> 
                	<?php 
						foreach($exchanges as $item):
							$img = './upload/exchange_link/'.$item->id.'/'.$item->logo;						
							$srcImg = (file_exists($img))?'<img src="'.$img.'">':'';
					?>
					<div class="exchange-logo">
                    	<?php echo $srcImg;?>
                    </div>
                    <div class="exchange-conten">
                    	<h2><?php echo $item->name;?></h2>
                    	<?php echo $item->description;?>
                        <p><a title="<?php //echo $item->name;?>" target="_blank" href="<?php echo $item->url?$item->url:'#';?>"><?php echo $item->text_use;?></a></p>
                    </div>                    
                    <div class="clearfix" style="border-bottom:solid 1px"></div>
                    <?php endforeach; ?>
                    <div class="exchange-page">
                    <?php if (strlen($links)): ?>
                    Pages: <?php echo $links; ?>
                    <?php endif; ?>
                    </div>
                </div>
                 <?php include('application/views/atoa/footer.php'); ?>
            </div>
	</div>
</div>    
</body>
</html>