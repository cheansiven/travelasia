<?php
$this->load->view('atoa/layouts/head', [
    'metas' => array(
        'keywords' => 'Travel agent in Cambodia',
        'title' => 'Luxury tours and excursions : travel agent in Cambodia : Travel Asia',
        'description' => 'An exclusive travel agent in Cambodia: find the best tours in Asia'
    ),
    array(
        'title' => 'Luxury tours and excursions : travel agent in Cambodia : Travel Asia'
    )
]);
?>

    <style>
        .contents_img {
            min-height: 100px;
        }
    </style>

    <div id="container" class="container">

        <div id="footer" class="row">

            <?php $this->load->view('atoa/layouts/page-menu-sub'); ?>

            <div id="bg_footer">
                <div id="blog_content" class="col-sm-12">

                    <?php foreach ($exchanges as $item): ?>

                        <div class="blog-body row">
                            <div class="col-sm-12">

                                <?php
                                $img = './upload/exchange_link/' . $item->id . '/' . $item->logo;
                                ?>

                                <div class="contents_img">
                                    <?php echo((file_exists($img)) ? '<img src="' . $img . '">' : ''); ?>
                                </div>

                                <div class="content_text">

                                    <h2><?php echo $item->name; ?></h2>

                                    <?php echo $item->description; ?>

                                    <p>
                                        <a title="" target="_blank"
                                           href="<?php echo $item->url ? $item->url : '#'; ?>"><?php echo $item->text_use; ?>
                                        </a>
                                    </p>
                                </div>

                            </div>
                        </div>

                    <?php endforeach; ?>

                    <div class="exchange-page">
                        <?php if (strlen($links)): ?>
                            Pages: <?php echo $links; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <?php $this->load->view('atoa/layouts/page-footer'); ?>

        </div>
    </div>

<?php $this->load->view('atoa/layouts/page-default-scripts'); ?>

<?php $this->load->view('atoa/layouts/footer'); ?>