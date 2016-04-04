<?php

$this->load->view('atoa/layouts/head',
    [
        'metas' => array(
            'keywords' => 'cambodia tours, asian tours',
            'title' => 'Cambodia tours: a new and exciting destination',
            'description' => 'Travel Asia creates and manages Cambodia tours and travel'
        ),
        'title' => 'Cambodia tours: a new and exciting destination'
    ]
);

?>

    <div id="container" class="container">

        <div id="footer" class="row">
            <!-- Footer start -->

            <?php $this->load->view('atoa/layouts/page-menu-sub'); ?>

            <div id="bg_footer">
                <div id="blog_content" class="col-sm-12">

                    <div class="row">
                        <div class="blog-header col-sm-12">
                            <h1>Cambodia Tours</h1>

                            <div class="descriptions">
                                From the ancient Angkorian Temples to tragic history, Cambodia is a
                                developing country. Experience this exciting country by taking in Angkor Wat, the
                                vibrant
                                capital of Phnom Penh, the relaxing southern coastline, rainforests of the Cardamom
                                Mountains or get off the beaten track and explore indigenous tribes in the northeast.
                            </div>
                        </div>
                    </div>

                    <div class="blog-body blog-grid row">
                        <div class="col-sm-12">
                            <?php foreach ($destinations as $destination) : ?>

                                <div class="col-sm-12 col-md-6 col-lg-4 grid">
                                    <div class="grid-content">
                                        <a href="<?php echo site_url("asian-and-cambodia-tours-destinations.html/" . $destination['region_id'] . "/" . strtolower(url_title($destination['name'])) . ""); ?>">
                                            <img width="250"
                                                 height="150"
                                                 alt="<?php echo $destination['name']; ?>"
                                                 src="<?php echo base_url() . 'upload/regions/' . $destination['image']; ?>"/>
                                        </a>

                                        <h2>
                                            <a href="<?php echo site_url("asian-and-cambodia-tours-destinations.html/" . $destination['region_id'] . "/" . strtolower(url_title($destination['name'])) . ""); ?>">
                                                <?php echo $destination['name']; ?>
                                            </a>
                                        </h2>
                                    </div>
                                </div>

                            <?php endforeach; ?>
                        </div>
                    </div>

                    <?php $this->load->view('atoa/layouts/page-footer'); ?>

                </div>
            </div>
        </div>
    </div>

<?php $this->load->view('atoa/layouts/page-default-scripts'); ?>

<?php $this->load->view('atoa/layouts/footer'); ?>