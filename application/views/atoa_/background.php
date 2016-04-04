<script type="text/javascript">
	function setScreenImage(){
		width = $( window ).width();
		if(width>=768){
			$('body').bgStretcher({
				images: [
				'<?php echo base_url();?>public/images/background/a-touch-of-asia15.jpg', 
				'<?php echo base_url();?>public/images/background/a-touch-of-asia5.jpg',
				'<?php echo base_url();?>public/images/background/a-touch-of-asia6.jpg',
				'<?php echo base_url();?>public/images/background/a-touch-of-asia03.jpg',
				'<?php echo base_url();?>public/images/background/a-touch-of-asia04.jpg',
				'<?php echo base_url();?>public/images/background/a-touch-of-asia7.jpg',
				'<?php echo base_url();?>public/images/background/a-touch-of-asia13.jpg',
				'<?php echo base_url();?>public/images/background/a-touch-of-asia9.jpg',
				'<?php echo base_url();?>public/images/background/a-touch-of-asia10.jpg',
				'<?php echo base_url();?>public/images/background/a-touch-of-asia11.jpg',
				'<?php echo base_url();?>public/images/background/a-touch-of-asia14.jpg'
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