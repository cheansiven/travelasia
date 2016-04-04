<script type="text/javascript">
	function setScreenImage(){
		width = $( window ).width();
		if(width>=768){
			$('body').bgStretcher({
				images: [
				'<?php echo base_url();?>public/images/background/hotel/beach-hotel-in-cambodia.jpg', 
				'<?php echo base_url();?>public/images/background/hotel/2.jpg', 
				'<?php echo base_url();?>public/images/background/hotel/3.jpg', 
				'<?php echo base_url();?>public/images/background/hotel/hotel-selection-in-asia.jpg', 
				'<?php echo base_url();?>public/images/background/hotel/best-hotel-in-asia.jpg', 
				'<?php echo base_url();?>public/images/background/hotel/6.jpg', 
				'<?php echo base_url();?>public/images/background/hotel/a-touch-of-asia03 new 6-3.jpg', 
				'<?php echo base_url();?>public/images/background/hotel/a-touch-of-asia03 new 8-3.jpg'
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
		}
	}
	$(window).resize(function() {
		setScreenImage();
	});
	
	$(document).ready(function(){
		
        //  Initialize Backgound Stretcher	   
		setScreenImage();
		
		if ($('.bgstretcher-area').length)
			$('.bgstretcher-area').append('<div id="transparent_bg"></div>');
				
		$(window).scroll(function(){
			
			//script to add transparent background over the image background
			var opacity_percentage = $( window ).scrollTop() / $(window).height();
			$('#transparent_bg').css('opacity', opacity_percentage);
		});
	});
</script>