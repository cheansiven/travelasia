<script type="text/javascript" src="<?php echo base_url('public/js/bgstretcher.js'); ?>"></script>
<script src="<?php echo base_url('public/js/mootools-core.js'); ?>" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>public/js/mootools.likebox.js" type="text/javascript"></script>
<script id="facebook-jssdk" src="//connect.facebook.net/en_GB/all.js#xfbml=1"></script>

<script type="text/javascript">
    var slide_images_list = [
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
    ];

    if(typeof slide_images != 'undefined') {
        slide_images_list = slide_images;
    }

    function setScreenImage() {

        var width = $(window).width();

        if (width > 768) {
            $('body').bgStretcher({
                images: slide_images_list,
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

    $(window).resize(function () {
        setScreenImage();

    });

    $(document).ready(function () {
        //  Initialize Backgound Stretcher
        setTimeout(function () {
            setScreenImage();
        }, 50);


        if ($('.bgstretcher-area').length) {
            $('.bgstretcher-area').append('<div id="transparent_bg"></div>');
        }

        $(window).scroll(function () {
            //script to add transparent background over the image background
            var opacity_percentage = $(window).scrollTop() / $(window).height();
            $('#transparent_bg').css('opacity', opacity_percentage);
        });

    });

    $(window).load(function () {
        $("html, body").animate({scrollTop: $("body").offset().top - 150}, 'slow');
    });
</script>