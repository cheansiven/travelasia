<?php

$this->load->view('atoa/layouts/head',
    [
        'metas' => array(
            'keywords' => $hotel->meta_keyword,
            'title' => $hotel->name . ': Travel Asia',
            'description' => $hotel->meta_description
        ),
        'title' => $hotel->name
    ]
);

?>

    <script>
        loadCSS('jquery-ui-style', "<?php echo base_url('public/css/jquery-ui-1.10.3.hotel.min.css'); ?>");
    </script>

    <div id="container" class="container">

        <div id="footer" class="row">
            <!-- Footer start -->

            <?php $this->load->view('atoa/layouts/page-menu-sub'); ?>

            <div id="bg_footer">
                <div id="blog_content" class="col-sm-12">

                    <div class="row">
                        <div class="blog-header col-sm-12">
                            <h1><?php echo $hotel->name; ?></h1>
                            <div class="descriptions">
                                <?php echo $hotel->description; ?>
                            </div>
                        </div>
                    </div>

                    <div class="blog-body row">
                        <div class="col-sm-12">

                            <?php if ($hotel->image != '') : ?>
                                <div class="contents_img">
                                    <img width="250"
                                         height="150"
                                         src="<?php echo base_url('upload/hotels/' . $hotel->image); ?>"
                                    />
                                </div>
                            <?php endif; ?>

                            <div class="content_text">
                                <h2>OVERVIEW</h2>
                                <?php echo $hotel->review; ?>
                            </div>
                        </div>
                    </div>

                    <div class="blog-body row">
                        <div class="col-sm-12">

                            <?php if ($hotel->location_image != '') : ?>
                                <div class="contents_img">
                                    <img width="250"
                                         height="150"
                                         src="<?php echo base_url('upload/hotels/' . $hotel->location_image); ?>"
                                    />
                                </div>
                            <?php endif; ?>

                            <div class="content_text">
                                <h2>LOCATION</h2>
                                <?php echo $hotel->location; ?>
                            </div>
                        </div>
                    </div>

                    <div class="blog-body row">
                        <div class="col-sm-12">
                            <?php if ($hotel->rooms_image != '') : ?>
                                <div class="contents_img">
                                    <img width="250"
                                         height="150"
                                         src="<?php echo base_url('upload/hotels/' . $hotel->rooms_image); ?>"
                                    />';
                                </div>
                            <?php endif; ?>

                            <div class="content_text">
                                <h2>ROOMS</h2>
                                <?php echo $hotel->rooms; ?>
                            </div>
                        </div>
                    </div>

                    <div class="blog-body row">
                        <div class="col-sm-12">

                            <?php if ($hotel->dining_image != '') : ?>
                                <div class="contents_img">
                                    <img width="250"
                                         height="150"
                                         src="<?php echo base_url('upload/hotels/' . $hotel->dining_image); ?>"
                                    />';
                                </div>
                            <?php endif; ?>

                            <div class="content_text">
                                <h2>DINING</h2>
                                <?php echo $hotel->dining; ?>
                            </div>
                        </div>
                    </div>

                    <div class="blog-body row">
                        <div class="col-sm-12">

                            <?php if ($hotel->leisure_image != '') : ?>
                                <div class="contents_img">
                                    <img width="250"
                                         height="150"
                                         src="<?php echo base_url('upload/hotels/' . $hotel->leisure_image); ?>"
                                    />
                                </div>
                            <?php endif; ?>

                            <div class="content_text">
                                <h2>LEISURE</h2>
                                <?php echo $hotel->leisure; ?>
                            </div>
                        </div>
                    </div>

                    <?php $this->load->view('atoa/layouts/page-footer'); ?>

                </div>
            </div>
        </div>
    </div>

    <script>
        var slide_images = [
            '<?php echo base_url("public/images/background/hotel/beach-hotel-in-cambodia.jpg");?>',
            '<?php echo base_url("public/images/background/hotel/2.jpg");?>',
            '<?php echo base_url("public/images/background/hotel/3.jpg");?>',
            '<?php echo base_url("public/images/background/hotel/hotel-selection-in-asia.jpg");?>',
            '<?php echo base_url("public/images/background/hotel/best-hotel-in-asia.jpg'");?>,
            '<?php echo base_url("public/images/background/hotel/6.jpg");?>',
            '<?php echo base_url("public/images/background/hotel/a-touch-of-asia03 new 6-3.jpg");?>',
            '<?php echo base_url("public/images/background/hotel/a-touch-of-asia03 new 8-3.jpg");?>'
        ];
    </script>

<?php $this->load->view('atoa/layouts/page-default-scripts'); ?>

<?php $this->load->view('atoa/layouts/footer'); ?>