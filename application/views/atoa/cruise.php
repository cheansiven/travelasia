<?php
$this->load->view('atoa/layouts/head', [
    'metas' => array(
        'keywords' => $cruise->meta_keyword,
        'title' => $cruise->name . ' : Travel Asia',
        'description' => $cruise->meta_description
    ),
    array(
        'title' => $cruise->name . ' : Travel Asia'
    )
]);
?>

    <script>
        loadCSS('jquery-ui-style', "<?php echo base_url('public/css/jquery-ui-1.10.3.hotel.min.css'); ?>");
    </script>

    <div id="container" class="container">

        <div id="footer" class="row">

            <?php $this->load->view('atoa/layouts/page-menu-sub'); ?>

            <div id="bg_footer">
                <div id="blog_content" class="col-sm-12">

                    <?php $this->load->view('atoa/layouts/page-search-bar'); ?>

                    <div class="row">
                        <div class="blog-header col-sm-12">
                            <h1><?php echo $cruise->name; ?></h1>
                        </div>
                    </div>

                    <div class="blog-header row">
                        <div class="col-sm-12">

                            <div id="hotel_tabs" class="col-sm-12">
                                <ul>
                                    <li><a href="#tabs-1">OVERVIEW</a></li>
                                    <li><a href="#tabs-2">ROUTE</a></li>
                                    <li><a href="#tabs-3">CABINS</a></li>
                                    <li><a href="#tabs-4">DINING</a></li>
                                    <li><a href="#tabs-5">LEISURE</a></li>
                                </ul>


                                <div id="tabs-1">
                                    <div>
                                        <?php
                                        if ($cruise->image != '')
                                            echo '<img width="250" height="150" src="' . base_url() . 'upload/cruises/' . $cruise->image . '" align="left" style="margin:4px 20px 5px 0;"/>';

                                        echo $cruise->description;
                                        ?>
                                    </div>

                                    <div style="clear:both"></div>
                                    <hr style="margin-top:20px; border:0; border-bottom:1px dashed #808080;">
                                    <!-- <h2>Travel Asia Opinion</h2> -->
                                    <h2>Travel Asia A la carte Opinion</h2>
                                    <div>
                                        <?php
                                        if ($cruise->review_image != '')
                                            echo '<img width="250" height="150" src="' . base_url() . 'upload/cruises/' . $cruise->review_image . '" align="left" style="margin:4px 20px 5px 0;"/>';

                                        echo $cruise->review;
                                        ?>
                                    </div>

                                </div>

                                <div id="tabs-2">
                                    <div>
                                        <?php
                                        if ($cruise->location_image != '')
                                            echo '<img width="250" height="150" src="' . base_url() . 'upload/cruises/' . $cruise->location_image . '" align="left" style="margin:4px 20px 5px 0;"/>';

                                        echo $cruise->location;
                                        ?>
                                    </div>
                                    <div style="clear:both"></div>
                                </div>
                                <div id="tabs-3">
                                    <div>
                                        <?php
                                        if ($cruise->rooms_image != '')
                                            echo '<img width="250" height="150" src="' . base_url() . 'upload/cruises/' . $cruise->rooms_image . '" align="left" style="margin:4px 20px 5px 0;"/>';

                                        echo $cruise->rooms;
                                        ?>
                                    </div>
                                    <div style="clear:both"></div>
                                </div>
                                <div id="tabs-4">
                                    <div>
                                        <?php
                                        if ($cruise->dining_image != '')
                                            echo '<img width="250" height="150" src="' . base_url() . 'upload/cruises/' . $cruise->dining_image . '" align="left" style="margin:4px 20px 5px 0;"/>';

                                        echo $cruise->dining;
                                        ?>
                                    </div>
                                    <div style="clear:both"></div>
                                </div>
                                <div id="tabs-5">
                                    <div>
                                        <?php
                                        if ($cruise->leisure_image != '')
                                            echo '<img width="250" height="150" src="' . base_url() . 'upload/cruises/' . $cruise->leisure_image . '" align="left" style="margin:4px 20px 5px 0;"/>';

                                        echo $cruise->leisure;
                                        ?>
                                    </div>
                                    <div style="clear:both"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <?php $this->load->view('atoa/layouts/page-footer'); ?>

            </div>
        </div>
    </div>

    <script>
        var slide_images = [
            '<?php echo base_url();?>public/images/background/cruise/cruises-deck-in-asia.jpg',
            '<?php echo base_url();?>public/images/background/cruise/cruises-on-the-mekong.jpg',
            '<?php echo base_url();?>public/images/background/cruise/cruises-on-the-tonle.jpg',
            '<?php echo base_url();?>public/images/background/cruise/discover-asia-from-the-deck.jpg',
            '<?php echo base_url();?>public/images/background/cruise/discover-cambodia-from-the-cruise.jpg'
        ];
    </script>

<?php $this->load->view('atoa/layouts/page-default-scripts'); ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>

    <script type="text/javascript">
        $(function () {
            $("#hotel_tabs").tabs();
        });
    </script>

<?php $this->load->view('atoa/layouts/footer'); ?>