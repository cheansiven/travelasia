<?php
$this->load->view('atoa/layouts/head', [
    'metas' => array(
        'keywords' => 'Cruises in Cambodia',
        'title' => 'Selection of the best Mekong Cruises in Cambodia and Asia',
        'description' => 'Find a selection of the best river cruises in South East Asia, from Vietnam to Siem Reap on the mekong'
    ),
    array(
        'title' => 'Selection of the best Mekong Cruises in Cambodia and Asia'
    )
]);
?>

    <div id="container" class="container">

        <div id="footer" class="row">

            <?php $this->load->view('atoa/layouts/page-menu-sub'); ?>

            <div id="bg_footer">
                <div id="blog_content" class="col-sm-12">

                    <div class="row">
                        <div class="blog-header col-sm-12">
                            <h1>Cruises in Cambodia</h1>

                            <div class="descriptions">
                                River cruising is the ideal way to explore Cambodia, see the Mighty
                                Mekong and cruise from Saigon or Phnom Penh to Siem Reap. There is no need to unpack
                                your
                                suitcase each day as new destinations are explored along the way. From day cruises to
                                week
                                long exploration, sailing to small villages and experiencing life along the river, this
                                is
                                the quintessential way to discover Indochina.
                            </div>
                        </div>
                    </div>

                    <?php $this->load->view('atoa/layouts/page-search-bar'); ?>

                    <?php foreach ($cruises as $cruise) : ?>
                        <div class="blog-body row">
                            <div class="col-sm-12">
                                <?php if ($cruise['image'] != '') : ?>
                                    <div class="contents_img">
                                        <img width="250"
                                             height="150"
                                             alt="<?php echo $cruise['name']; ?>"
                                             src="<?php echo base_url('upload/cruises/' . $cruise['image']); ?>">
                                    </div>
                                <?php endif; ?>

                                <div class="content_text">
                                    <h2><?php echo $cruise['name']; ?></h2>

                                    <div class="day_night">
                                        <?php echo $cruise['city_name']; ?>
                                    </div>

                                    <?php echo strip_tags($cruise['description']); ?>

                                    <div class="buttons">
                                        <a class="btn white_link"
                                           rel="nofollow"
                                           href="<?php echo site_url('cruise/' . $cruise['id']) . '/' . strtolower(url_title($cruise['name'])); ?>">
                                            Read more
                                        </a>
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

    <script type="text/javascript">
        $(document).ready(function () {

            $('.block_click').mouseover(function () {
                $(this).parent().addClass('arrow');
            }).mouseout(function () {
                $(this).parent().removeClass('arrow');
            });

        });
    </script>

<?php $this->load->view('atoa/layouts/footer'); ?>