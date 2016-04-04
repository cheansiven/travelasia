<?php
$metas = array(
    'keywords' => $tour->meta_keyword,
    'title' => $tour->meta_title . ' : Travel Asia',
    'description' => $tour->meta_description
);
?>

<?php $this->load->view('atoa/layouts/head', ['metas' => $metas]); ?>

    <div id="container" class="tour_container container">

        <div id="footer" class="row">
            <!-- Footer start -->

            <?php $this->load->view('atoa/layouts/page-menu-sub'); ?>

            <div id="bg_footer">
                <div class="col-sm-12" id="blog_content">

                    <?php $this->load->view('atoa/layouts/page-search-bar.php'); ?>

                    <div class="row">
                        <div class="blog-header col-sm-12">
                            <h1><?php echo $tour->name; ?></h1>
                            <div class="dayNight">
                                <?php echo $tour->num_days . ' DAYS - ' . $tour->num_nights . ' NIGHTS' ?>
                            </div>
                            <div class="descriptions">
                                <?php echo '<div>' . $tour->intro . '</div><div>' . $tour->description . '</div>'; ?>
                            </div>
                        </div>
                    </div>

                    <?php foreach ($itineraries as $itinerary) : ?>
                        <div class="blog-body row">
                            <div class="col-sm-12">

                                <div class="top-title">
                                    Day <?php echo $itinerary['day'] ?>
                                </div>

                                <div class="row col-sm-12">
                                    <?php if ($itinerary['image'] != '') : ?>

                                        <div class="contents_img">
                                            <img width="250"
                                                 height="150"
                                                 alt="<?php echo $itinerary['day']; ?>"
                                                 src="<?php echo base_url() . 'upload/tours/itinerary/' . $itinerary['image']; ?>"
                                                 class=""/>
                                        </div>

                                    <?php endif; ?>

                                    <div class="content_text">
                                        <?php echo $itinerary['description']; ?>
                                    </div>
                                </div>

                            </div>
                        </div>

                    <?php endforeach; ?>

                    <?php $this->load->view('atoa/layouts/page-footer'); ?>

                </div>
            </div>
        </div>
    </div>

<?php $this->load->view('atoa/layouts/page-default-scripts'); ?>

<?php $this->load->view('atoa/layouts/footer'); ?>