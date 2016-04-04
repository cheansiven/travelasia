<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="keywords" content="Tours in Cambodia"/>
    <meta name="title" content="Where to find the best tours in Cambodia ? Visit Travel Asia a la carte"/>
    <meta name="description"
          content="Whether you are seeking a tour in Cambodia or in all of South East Asia, you should contact Travel Asia a la carte first, for some exclusive packages"/>
    <title>Where to find the best tours in Cambodia ? Visit Travel Asia a la carte</title>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/css/bootstrap.min.css'); ?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/css/main.css'); ?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/css/responsive.css'); ?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/css/likebox.css'); ?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/css/bgstretcher.css'); ?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/css/page-content.css'); ?>"/>

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
                        <h1>Tours in Cambodia</h1>

                        <div class="descriptions">
                            Travel Asia A La Carte offers specialised tours such as Adventure,
                            Honeymoon, Nature or Family Holidays. Create your own personal tour and add some responsible
                            tourism aspects, relaxation or whatever suits your style.
                        </div>
                    </div>
                </div>

                <?php $this->load->view('atoa/new_search_bar.php'); ?>

                <div class="blog-body blog-grid  row">
                    <div class="col-sm-12">

                        <?php foreach ($categories as $category) : ?>

                            <div class="col-sm-12 col-md-6 col-lg-4 grid">
                                <div class="grid-content">

                                    <a href="<?php echo site_url("holiday-tours-in-cambodia.html/" . $category['category_id'] . "/" . strtolower(url_title($category['name'])) . ""); ?>">
                                        <img width="250"
                                             height="150"
                                             alt="<?php echo $category['name']; ?>"
                                             src="<?php echo base_url('upload/categories/' . $category['image']); ?>">
                                    </a>

                                    <h2>
                                        <a href="<?php echo site_url("holiday-tours-in-cambodia.html/" . $category['category_id'] . "/" . strtolower(url_title($category['name'])) . ""); ?>">
                                            <?php echo $category['name']; ?>
                                        </a>
                                    </h2>
                                </div>
                            </div>
                        <?php endforeach; ?>

                    </div>
                </div>

            </div>
            <?php include('application/views/atoa/footer.php'); ?>
        </div>
    </div>
</div>

<script type="text/javascript" src="<?php echo base_url(); ?>public/js/bgstretcher.js"></script>
<script src="<?php echo base_url(); ?>public/js/mootools-core.js" type="text/javascript"></script>
<script id="facebook-jssdk" src="//connect.facebook.net/en_GB/all.js#xfbml=1"></script>
<script src="<?php echo base_url(); ?>public/js/mootools.likebox.js" type="text/javascript"></script>
<?php include('application/views/atoa/background.php'); ?>

<script type="text/javascript">
    $(document).ready(function () {
        $("html, body").animate({scrollTop: $("body").offset().top - 150}, 'slow');
    });
</script>
</body>
</html>