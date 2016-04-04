<script type="text/javascript">
	function setScreenImage(){
		width = $( window ).width();
		if(width>=768){
			$('body').bgStretcher({
				images: [
				'<?php echo base_url();?>public/images/background/cruise/cruises-deck-in-asia.jpg', 
				'<?php echo base_url();?>public/images/background/cruise/cruises-on-the-mekong.jpg', 
				'<?php echo base_url();?>public/images/background/cruise/cruises-on-the-tonle.jpg', 
				'<?php echo base_url();?>public/images/background/cruise/discover-asia-from-the-deck.jpg', 
				'<?php echo base_url();?>public/images/background/cruise/discover-cambodia-from-the-cruise.jpg'
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