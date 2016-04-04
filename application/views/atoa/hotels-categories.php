<?php

$this->load->view('atoa/layouts/head',
    [
        'metas' => array(
            'keywords' => 'Best hotels in Cambodia',
            'title' => 'Selection of the best hotels and accommodations in Siem Reap',
            'description' => 'Listing and directory of the best hotel properties in Siem Reap and Cambodia'
        ),
        'title' => 'Selection of the best hotels and accommodations in Siem Reap'
    ]
);

?>

    <div id="container" class="container">

        <div id="footer" class="row">

            <?php $this->load->view('atoa/layouts/page-menu-sub'); ?>

            <div id="bg_footer">
                <div id="blog_content" class="col-sm-12">

                    <div class="row">
                        <div class="blog-header col-sm-12">
                            <h1>Hotels in Cambodia</h1>

                            <div class="descriptions">
                                The kingdom of Cambodia provides an ever-expansive collection of hotels and
                                accommodations,
                                to coincide with any budget or preference. Travel Asia A La Carte only works with
                                properties
                                we have genuinely and personally inspected, and, in most cases, stayed overnight to
                                comprehensively test the quality of the service declared. So every accommodations listed
                                within has been carefully hand-picked and selected. We have not requested, claimed nor
                                received any compensation in any form to promote these entities. If you feel one or more
                                properties should not figure on our selection, feel free to inform us in order for us to
                                make another inspection.
                            </div>
                        </div>
                    </div>

                    <div class="blog-body row text-center blog-grid">
                        <div class="col-sm-12">
                            <?php foreach ($hotels as $hotel) : ?>

                                <div class="col-sm-12 col-md-6 col-lg-4 grid">
                                    <div class="grid-content">
                                        <a href="<?php echo site_url("directory-hotel-in-cambodia.html/" . $hotel['region_id'] . "/" . strtolower(url_title($hotel['name'])) . "") ?>">
                                            <img width="100%" alt="<?php echo $hotel['name']; ?>"
                                                 src="<?php echo base_url('upload/regions/' . $hotel['image']); ?>">
                                        </a>

                                        <h2>
                                            <a
                                                href="<?php echo site_url("directory-hotel-in-cambodia.html/" . $hotel['region_id'] . "/" . strtolower(url_title($hotel['name'])) . ""); ?>">
                                                <?php echo $hotel['name']; ?>
                                            </a>
                                        </h2>
                                    </div>
                                </div>

                            <?php endforeach; ?>

                        </div>
                    </div>

                </div>

                <?php $this->load->view('atoa/layouts/page-footer'); ?>

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