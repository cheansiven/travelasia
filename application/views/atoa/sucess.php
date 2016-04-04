<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="keywords" content=""/>
    <meta name="title" content=""/>
    <meta name="description" content=""/>
    <title>Book Tour : Travel Asia</title>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/css/bootstrap-grid.min.css'); ?>"/>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/css/main.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/css/menu.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/css/likebox.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/css/bgstretcher.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/zebra_datepicker/css/default.css'); ?>"/>

    <!--<link rel="shortcut icon" href="<?php /*echo base_url();*/ ?>public/images/favicon.ico" />-->
    <?php include('application/views/atoa/detect-browser.php'); ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url('public/js/jquery.browser.min.js'); ?>"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>public/js/bgstretcher.js"></script>
    <script src="<?php echo base_url(); ?>public/js/mootools-core.js" type="text/javascript"></script>
    <script id="facebook-jssdk" src="//connect.facebook.net/en_GB/all.js#xfbml=1"></script>
    <script src="<?php echo base_url(); ?>public/js/mootools.likebox.js" type="text/javascript"></script>

    <?php include('application/views/atoa/background.php'); ?>

    <script type="text/javascript">
        $(document).ready(function () {
            $("html, body").animate({scrollTop: $("#body").offset().top - 150}, 'slow');
        });
    </script>
    <script type="text/javascript" src="<?php echo base_url(); ?>public/js/main.js"></script>
    <?php include('application/views/atoa/analytics.html'); ?>

    <style>
        .thank_you_message {
            padding-bottom: 100px;
            font-size: 15px;
            line-height: 30px;
        }
    </style>

</head>
<body onLoad="showModal();">

<div id="container" class="tour_container">

    <?php include('application/views/atoa/header.php'); ?>
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
            <div id="bg_contents">
                <div>
                    <div class="blogcontents blog-content">

                        <?php include('application/views/atoa/search_bar.php'); ?>

                        <div class="text-center thank_you_message">
                            <?php echo $message; ?>
                        </div>

                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <?php include('application/views/atoa/footer.php'); ?>
        </div>
    </div>
</div>
</body>
</html>