<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="title" content="Selection of the best hotels and accommodations in Siem Reap"/>
    <meta name="keywords" content="Best hotels in Cambodia"/>
    <meta name="description" content="Listing and directory of the best hotel properties in Siem Reap and Cambodia"/>
    <title>Selection of the best hotels and accommodations in Siem Reap</title>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/css/bootstrap.min.css'); ?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/css/main.css'); ?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/css/responsive.css'); ?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/css/likebox.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/css/bgstretcher.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/css/page-content.css"/>

    <?php include('application/views/atoa/detect-browser.php'); ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url('public/js/jquery.browser.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>public/js/main.js"></script>
    <?php include('application/views/atoa/analytics.html'); ?>
</head>

<!--<body onLoad="showModal();">-->
<body>
<div id="container" class="container">

    <?php $this->load->view('atoa/new_header'); ?>

    <div id="footer" class="row">

        <?php $this->load->view('atoa/new_menu-sub'); ?>

        <div id="bg_footer">
            <div id="blog_content" class="col-sm-12">

                <div class="row">
                    <div class="blog-header col-sm-12">
                        <h1>Hotels in Cambodia</h1>

                        <div class="descriptions">
                            Cambodia has a range of hotels to offer for all budgets and tastes.
                            Travel Asia A La Carte only work with hotels we have personally inspected and in most cases,
                            stayed overnight to test the services.
                        </div>
                    </div>
                </div>

                <?php $this->load->view('atoa/new_search_bar.php'); ?>

                <?php foreach ($hotels as $hotel) : ?>
                    <div class="blog-body row">
                        <div class="col-sm-12">
                            <?php if ($hotel['image'] != '') : ?>
                                <div class="contents_img">
                                    <a href="<?php echo site_url("directory-hotel-in-cambodia.html/" . $hotel['region_id'] . "/" . strtolower(url_title($hotel['name'])) . "") ?>">
                                        <img width="250" height="150" alt="<?php echo $hotel['name']; ?>"
                                             src="<?php echo base_url('upload/regions/' . $hotel['image']); ?>">
                                    </a>
                                </div>
                            <?php endif; ?>

                            <div class="content_text">
                                <h2>
                                    <a 
                                        href="<?php echo site_url("directory-hotel-in-cambodia.html/" . $hotel['region_id'] . "/" . strtolower(url_title($hotel['name'])) . ""); ?>">
                                        <?php echo $hotel['name']; ?>
                                    </a>
                                </h2>
                            </div>
                        </div>
                    </div>

                <?php endforeach; ?>

            </div>
            <?php include('application/views/atoa/footer.php'); ?>
        </div>
    </div>
</div>

<script type="text/javascript" src="<?php echo base_url(); ?>public/js/bgstretcher.js"></script>
<script src="<?php echo base_url(); ?>public/js/mootools-core.js" type="text/javascript"></script>
<script id="facebook-jssdk" src="//connect.facebook.net/en_GB/all.js#xfbml=1"></script>
<script src="<?php echo base_url(); ?>public/js/mootools.likebox.js" type="text/javascript"></script>
<?php include('application/views/atoa/background-hotel.php'); ?>

<script type="text/javascript">
    $(document).ready(function () {
        $("html, body").animate({scrollTop: $("body").offset().top - 150}, 'slow');
    });
</script>

</body>
</html>