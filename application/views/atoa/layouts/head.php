<!DOCTYPE html>
<html lang="en">
<head>
    <title>
        <?php echo (isset($title) ? $title : 'Luxury tours and excursions : Tour Operator in Cambodia'); ?>
    </title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php foreach($metas as $meta_name => $meta_content) : ?>
    <meta name="<?php echo $meta_name ;?>" content="<?php echo $meta_content;?>">
    <?php endforeach;?>

    <?php
    if(isset($block_google_result)) {
        echo "<META NAME='ROBOTS' CONTENT='NOINDEX, NOFOLLOW'>";
    }
    ?>

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/css/bootstrap.min.css'); ?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/css/likebox.css'); ?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/css/bgstretcher.css'); ?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/css/main.css'); ?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/css/responsive.css'); ?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/css/page-content.css'); ?>"/>

    <?php include('application/views/atoa/detect-browser.php'); ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url('public/js/jquery.browser.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>public/js/main.js"></script>

    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-50796029-2', 'auto');
        ga('send', 'pageview');

    </script>

</head>

<body>

<?php $this->load->view('atoa/layouts/page-header'); ?>