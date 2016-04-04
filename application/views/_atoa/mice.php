<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="keywords" content="MICE in Cambodia" />
<meta name="description" content="Mice in Cambodia : a new and exotic venue to conduct your next meeting or conference. Cambodia has many new ventures to offer quality service" />
<title>Meetings, Incentives, conferences & Events : MICE in Cambodia</title>
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
<script type="text/javascript">
	$(document).ready(function(){
		
        //  Initialize Backgound Stretcher	   
		$('body').bgStretcher({
			images: [
			'<?php echo base_url();?>public/images/background/mice/mice-in-angkorwat.jpg',
			'<?php echo base_url();?>public/images/background/mice/mice-in-cambodia.jpg',
			'<?php echo base_url();?>public/images/background/mice/mice-in-siemreap.jpg',
			'<?php echo base_url();?>public/images/background/mice/a-touch-of-asia01.jpg',
			'<?php echo base_url();?>public/images/background/mice/a-touch-of-asia02.jpg',
			'<?php echo base_url();?>public/images/background/mice/a-touch-of-asia03.jpg',
			'<?php echo base_url();?>public/images/background/mice/a-touch-of-asia04.jpg',
			'<?php echo base_url();?>public/images/background/mice/a-touch-of-asia05.jpg',
			'<?php echo base_url();?>public/images/background/mice/a-touch-of-asia06.jpg',
			'<?php echo base_url();?>public/images/background/mice/a-touch-of-asia07.jpg'
			],
			imageWidth: 1920, 
			imageHeight: 1020, 
			slideDirection: 'N',
			slideShowSpeed: 1400,
			transitionEffect: 'fade',
			sequenceMode: 'normal',
			buttonPrev: '#prev',
			buttonNext: '#next',
			pagination: '#nav',
			anchoring: 'left center',
			anchoringImg: 'left center'
		});
		
		if ($('.bgstretcher-area').length)
			$('.bgstretcher-area').append('<div id="transparent_bg"></div>');
				
		$(window).scroll(function(){
			
			//script to add transparent background over the image background
			var opacity_percentage = $( window ).scrollTop() / $(window).height();
			$('#transparent_bg').css('opacity', opacity_percentage);
		});
	});
</script>
<script type="text/javascript">
	$(document).ready(function(){
		$("html, body").animate({scrollTop: $("#body").offset().top - 150},'slow');
	});
</script>
<script type="text/javascript" src="<?php echo base_url();?>public/js/main.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>public/js/javascript-accordion.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>public/js/jquery.prettyPhoto.js"></script>
<?php //include('application/views/atoa/popup/popup.php');?>
</head>
<?php include('application/views/atoa/social.php');?>
<?php include('application/views/atoa/analytics.html');?>
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
        <div style="padding-left:15px;">
          <h1>MICE IN CAMBODIA</h1>
        </div>
      </div>
      <div id="wrapContentBox">
        <div id="contentBox">
          <div class="contentBox1 spaceTop accordionButton">
            <div class="contentImage"> <img width="250" height="150" alt="Meetings" src="<?php echo base_url();?>public/images/mice/meeting.jpg"> </div>
            <h2>MEETINGS</h2>
            <p>Meet in a fascinating destination: Siem Reap, Phnom Penh and the South Coast offer endless possibilities for doing business in style.</p>
          </div>
          <div class="contentBox2 accordionContent">
            <ul class="gallery clearfix galleryImage">
              <li> <a href="<?php echo base_url();?>public/images/mice/gallery/MEETINGS/asian-meeting-room.jpg" rel="prettyPhoto[gallery4]"> <img src="<?php echo base_url();?>public/images/gallery-icon.png" alt="EVENTS"/> </a> </li>
              <li> <a href="<?php echo base_url();?>public/images/mice/gallery/MEETINGS/meeting-1.jpg" rel="prettyPhoto[gallery4]"></a> </li>
              <li> <a href="<?php echo base_url();?>public/images/mice/gallery/MEETINGS/meeting-2.jpg" rel="prettyPhoto[gallery4]"> </a> </li>
              <li> <a href="<?php echo base_url();?>public/images/mice/gallery/MEETINGS/meeting-3.jpg" rel="prettyPhoto[gallery4]" > </a> </li>
              <li> <a href="<?php echo base_url();?>public/images/mice/gallery/MEETINGS/meeting-4.jpg" rel="prettyPhoto[gallery4]" > </a> </li>
            </ul>
             <div class="mice-right"><p>From low key and relaxed settings such as a championship golf course to meetings in historical hotels and restaurants all are easy to facilitate in Cambodia. The main destinations are Siem Reap and Phnom Penh but inspiring locations are also to be found in Kep and Sihanoukville. Whether simple or complicated the idea is to innovate in dynamic destinations that suit your business needs.<br> <a href="mailto:info@travelasia.travel" class="red_link">CONTACT US<img alt="Contact us" src="<?php echo base_url();?>public/images/gold-envelope.png" class="envelope-icon"></a></p></div>
          </div>
          <div class="contentBox1 spaceTop accordionButton">
            <div class="contentImage"> <img width="250" height="150" alt="Incentives" src="<?php echo base_url();?>public/images/mice/incentives.jpg"> </div>
            <h2>INCENTIVES</h2>
            <p>Motivate visitors by exceptional experiences – add local touches and flair to impress and incentivise the team. </p>
          </div>
          <div class="contentBox2 accordionContent">
            <ul class="gallery clearfix galleryImage">
              <li> <a href="<?php echo base_url();?>public/images/mice/gallery/INCENTIVES/asia-incentive-programme.jpg" rel="prettyPhoto[gallery3]"> <img src="<?php echo base_url();?>public/images/gallery-icon.png" alt="EVENTS"/> </a> </li>
               <li> <a href="<?php echo base_url();?>public/images/mice/gallery/INCENTIVES/asian-incentive-escapade.jpg" rel="prettyPhoto[gallery3]"></a> </li>
                <li> <a href="<?php echo base_url();?>public/images/mice/gallery/INCENTIVES/cambodia-incentive-escapade.jpg" rel="prettyPhoto[gallery3]"></a> </li>
                 <li> <a href="<?php echo base_url();?>public/images/mice/gallery/INCENTIVES/incentive-programme-angkorwat.jpg" rel="prettyPhoto[gallery3]"></a> </li>
                  <li> <a href="<?php echo base_url();?>public/images/mice/gallery/INCENTIVES/incentive-programme-cambodia.jpg" rel="prettyPhoto[gallery3]"></a> </li>
               <li> <a href="<?php echo base_url();?>public/images/mice/gallery/INCENTIVES/incentive-1.jpg" rel="prettyPhoto[gallery3]"></a> </li>
              <li> <a href="<?php echo base_url();?>public/images/mice/gallery/INCENTIVES/incentive-2.jpg" rel="prettyPhoto[gallery3]"> </a> </li>
              <li> <a href="<?php echo base_url();?>public/images/mice/gallery/INCENTIVES/incentive-3.jpg" rel="prettyPhoto[gallery3]"> </a> </li>
              <li> <a href="<?php echo base_url();?>public/images/mice/gallery/INCENTIVES/incentive-4.jpg" rel="prettyPhoto[gallery3]"> </a> </li>
            </ul>
            <div class="mice-right" ><p>Reward your team or clients and provide motivation for the future in unique ways. Team building can involve house building or well construction to support poorer communities. Create challenges and Great Races, use local transport such as ox carts or bikes to see the countryside, Masterchef cook offs to test the team or less testing experiences such as spa and yoga to relax. Options such as helicopter tours or golf matches can incentivise guests and drive them to great achievement.<br> <a href="mailto:info@travelasia.travel" class="red_link">CONTACT US<img src="<?php echo base_url();?>public/images/gold-envelope.png" class="envelope-icon" alt="Contact us"></a></p></div>
          </div>
          <div class="contentBox1 spaceTop accordionButton">
            <div class="contentImage"> <img width="250" height="150" alt="Conferences" src="<?php echo base_url();?>public/images/mice/conference.jpg"> </div>
            <h2>CONFERENCES</h2>
            <p>With flexibility and capability to fit business demands, conferences of all scales can be arranged in Cambodia.</p>
          </div>
          <div class="contentBox2 accordionContent">
            <ul class="gallery clearfix galleryImage">
              <li> <a href="<?php echo base_url();?>public/images/mice/gallery/CONFERENCES/conference-1.jpg" rel="prettyPhoto[gallery2]"> <img src="<?php echo base_url();?>public/images/gallery-icon.png" alt="EVENTS"/> </a> </li>
              <li> <a href="<?php echo base_url();?>public/images/mice/gallery/CONFERENCES/conference-2.jpg" rel="prettyPhoto[gallery2]"> </a> </li>
              <li> <a href="<?php echo base_url();?>public/images/mice/gallery/CONFERENCES/conference-3.jpg" rel="prettyPhoto[gallery2]"> </a> </li>
              <li> <a href="<?php echo base_url();?>public/images/mice/gallery/CONFERENCES/conference-4.jpg" rel="prettyPhoto[gallery2]"> </a> </li>
            </ul>
             <div class="mice-right"><p>Located in the heart of Southeast Asia, the Kingdom of Cambodia is ideal for pre and post-conference leisure and team building. With a variety of venues, from understated board rooms to world class hotelsand convention centres with state of the art technology, an everyday meeting can be transformed into a memorable and enriching experience. <br><a href="mailto:info@travelasia.travel" class="red_link">CONTACT US<img alt="Contact us" src="<?php echo base_url();?>public/images/gold-envelope.png" class="envelope-icon"></a></p></div>
          </div>
          <div class="contentBox1 spaceTop accordionButton">
            <div class="contentImage"> <img width="250" height="150" alt="Events" src="<?php echo base_url();?>public/images/mice/events.jpg"> </div>
            <h2>EVENTS</h2>
            <p>Unparalleled in Asia, few destinations can impress as much as Cambodia, with a temple gala dinner the highlight amongst multiple unique experiences.</p>
          </div>
          <div class="contentBox2 accordionContent">
            <ul class="gallery clearfix galleryImage">
             <li> <a href="<?php echo base_url();?>public/images/mice/gallery/EVENTS/dinner-temples-cambodia.jpg" rel="prettyPhoto[gallery1]"> <img src="<?php echo base_url();?>public/images/gallery-icon.png" alt="EVENTS"/> </a> </li>
              <li> <a href="<?php echo base_url();?>public/images/mice/gallery/EVENTS/events-management-1.jpg" rel="prettyPhoto[gallery1]"></a> </li>
               <li> <a href="<?php echo base_url();?>public/images/mice/gallery/EVENTS/events-management-asia.jpg" rel="prettyPhoto[gallery1]"></a> </li>
                <li> <a href="<?php echo base_url();?>public/images/mice/gallery/EVENTS/events-temples-angkor.jpg" rel="prettyPhoto[gallery1]"></a> </li>
              <li> <a href="<?php echo base_url();?>public/images/mice/gallery/EVENTS/events-1.jpg" rel="prettyPhoto[gallery1]"></a> </li>
              <li> <a href="<?php echo base_url();?>public/images/mice/gallery/EVENTS/events-2.jpg" rel="prettyPhoto[gallery1]"> </a> </li>
              <li> <a href="<?php echo base_url();?>public/images/mice/gallery/EVENTS/events-3.jpg" rel="prettyPhoto[gallery1]"> </a> </li>
              <li> <a href="<?php echo base_url();?>public/images/mice/gallery/EVENTS/events-4.jpg" rel="prettyPhoto[gallery1]"> </a> </li>
            </ul>
             <div class="mice-right"><p>Unrivalled celebrations at iconic locations will last long in the memories of visitors to Cambodia. Imagine a gala dinner at an Angkorian temple or drinking a cocktail at a country house as the sun sets over the rice fields. Gala dinners at the National Museum or cocktails at the colonial-era train station are the ideal way to begin the evening after a day's work. With a huge range of event options from simple sundowner cruises on a wooden boat to privatized temple dinners there is so much to offer your clients or team in Cambodia. <br><a href="mailto:info@travelasia.travel" class="red_link">CONTACT US<img alt="Contact us" src="<?php echo base_url();?>public/images/gold-envelope.png" class="envelope-icon"></a></p></div>
          </div>
          <div class="contentBox1 spaceTop accordionButton">
            <div class="contentImage"> <img width="250" height="150" alt="Incentives" src="<?php echo base_url();?>public/images/mice/csr.jpg"> </div>
            <h2>CSR & TEAM BUILDING</h2>
            <p>In a developing country there are plentiful options that give something back to Cambodia by way of CSR activities. Fun and games that bond your employees to the company and educate them in the value of team work can also be arranged.</p>
          </div>
          <div class="contentBox2 accordionContent">
            <ul class="gallery clearfix galleryImage">
              <li> <a href="<?php echo base_url();?>public/images/mice/gallery/CSR/MICE-amazing-race-CSR.jpg" rel="prettyPhoto[gallery5]"> <img src="<?php echo base_url();?>public/images/gallery-icon.png" alt="CSR & TEAM BUILDING"/> </a> </li>
              <li> <a href="<?php echo base_url();?>public/images/mice/gallery/CSR/MICE-amazing-race-prep.jpg" rel="prettyPhoto[gallery5]"> </a> </li>
              <li> <a href="<?php echo base_url();?>public/images/mice/gallery/CSR/MICE-asian-meeting-CSR.jpg" rel="prettyPhoto[gallery5]"> </a> </li>
              <li> <a href="<?php echo base_url();?>public/images/mice/gallery/CSR/MICE-asian-meeting-room.jpg" rel="prettyPhoto[gallery5]"> </a> </li>
              <li> <a href="<?php echo base_url();?>public/images/mice/gallery/CSR/MICE-building-a-shack.jpg" rel="prettyPhoto[gallery5]"> </a> </li>
              <li> <a href="<?php echo base_url();?>public/images/mice/gallery/CSR/MICE-building-latrines.jpg" rel="prettyPhoto[gallery5]"> </a> </li>
              <li> <a href="<?php echo base_url();?>public/images/mice/gallery/CSR/MICE-cooking-class-CSR.jpg" rel="prettyPhoto[gallery5]"> </a> </li>
              <li> <a href="<?php echo base_url();?>public/images/mice/gallery/CSR/MICE-digging-a-well.jpg" rel="prettyPhoto[gallery5]"> </a> </li>
              <li> <a href="<?php echo base_url();?>public/images/mice/gallery/CSR/MICE-feather-game-CSR.jpg" rel="prettyPhoto[gallery5]"> </a> </li>
              <li> <a href="<?php echo base_url();?>public/images/mice/gallery/CSR/MICE-khmer-dancing-class-CSR.jpg" rel="prettyPhoto[gallery5]"> </a> </li>
              <li> <a href="<?php echo base_url();?>public/images/mice/gallery/CSR/MICE-painting-the-school.jpg" rel="prettyPhoto[gallery5]"> </a> </li>
            </ul>
            <div class="mice-right"><p>Help Cambodia by doing a CSR activity that gives something rewarding back to the country. Simple activities such as tree planting, painting a school, building vertical gardens and constructing bicycles for donation can be arranged. The more active might prefer to help construct a house in a poorer community. Supporting Cambodian arts and crafts can be arranged in local villages outside Phnom Penh or at an NGO silk farm near Siem Reap. Simple donations such as water wells or school kits can be channeled to good causes that are audited and won't waste your good intentions.</p>
<p>Team Building can be both fun and educational. Take part in an Amazing Race through local markets and the Siem Reap countryside and try your hand at Khmer martial arts or classical dance in Phnom Penh. <br>

<a href="mailto:info@travelasia.travel" class="red_link">CONTACT US<img src="<?php echo base_url();?>public/images/gold-envelope.png" class="envelope-icon" alt="Contact us"></a></p></div>
          </div>
          <div style="height:10px; clear:both"></div>
        </div>
      </div>
      <?php include('application/views/atoa/footer.php'); ?>
    </div>
  </div>
</div>
<script type="text/javascript">
$(document).ready(function(){
	
	$("area[rel^='prettyPhoto']").prettyPhoto();
	//$(".gallery:first a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'fast', lideshow:3000, autoplay_slideshow: true, show_title: true});
	$(".gallery:first a[rel^='prettyPhoto']").prettyPhoto
	({
		animation_speed:'fast', 
		lideshow:20000, 
		autoplay_slideshow: true, 
		show_title: true,
		theme: 'light_square' /* pp_default / light_rounded / dark_rounded / light_square / dark_square / facebook */
	});
	$(".gallery:gt(0) a[rel^='prettyPhoto']").prettyPhoto
	({
		animation_speed:'fast', 
		slideshow:10000, 
		hideflash: true,
	});

});
</script>
</body>
</html>