<?php

$this->load->view('atoa/layouts/head',
    [
        'metas' => array(
            'keywords' => $description . ', directory hotel in cambodia',
            'title' => $title . ' : Hotels in Cambodia',
            'description' => 'Hotels in ' . $description
        ),
        'title' => $title . ' : Hotels in Cambodia'
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
                            <h1><?php echo $hotel_title; ?></h1>

                            <div class="descriptions">
                                <?php echo $hotel_description; ?>
                            </div>
                        </div>
                    </div>


                    <?php foreach ($hotels as $hotel) : ?>
                        <div class="blog-body row">
                            <div class="col-sm-12">

                                <?php if ($hotel['image'] != '') : ?>
                                    <div class="contents_img">
                                        <img width="250"
                                             height="150"
                                             alt="' . $hotel['name'] . '"
                                             src="<?php echo base_url('upload/hotels/' . $hotel['image']); ?>">
                                    </div>
                                <?php endif; ?>

                                <div class="content_text">
                                    <h2>
                                        <?php echo $hotel['name']; ?>
                                    </h2>

                                    <div class="day_night">
                                        <?php echo $hotel['city_name'] ?>
                                    </div>

                                    <?php echo strip_tags($hotel['description']); ?>

                                    <div class="buttons">
                                        <a class="btn white_link"
                                           href="<?php echo site_url('hotel/' . $hotel['id']) . '/' . strtolower(url_title($hotel['name'])); ?>">
                                            READ MORE
                                        </a>
                                    </div>

                                </div>

                                <!--                                <a class="block_click"-->
                                <!--                                   href="-->
                                <?php //echo site_url('hotel/' . $hotel['id']) . '/' . strtolower(url_title($hotel['url']) . '.html') ?><!--">-->

                            </div>

                        </div>

                    <?php endforeach; ?>

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

    <script type="text/javascript">
        $(document).ready(function () {
            $('.block_click').mouseover(function () {
                $(this).parent().addClass('arrow');
            });

            $('.block_click').mouseout(function () {
                $(this).parent().removeClass('arrow');
            });

        });
    </script>

<?php $this->load->view('atoa/layouts/footer'); ?>