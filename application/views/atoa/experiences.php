<?php
$this->load->view('atoa/layouts/head', [
    'metas' => array(
        'keywords' => $description,
        'title' => $title . ' : Travel Asia',
        'description' => $description
    ),
    array(
        'title' => $title . ' : Travel Asia'
    )
]);
?>

    <div id="container" class="container">

        <div id="footer" class="row">
            <!-- Footer start -->

            <?php $this->load->view('atoa/layouts/page-menu-sub'); ?>

            <div id="bg_footer">
                <div id="blog_content" class="col-sm-12">

                    <div class="row">
                        <div class="blog-header col-sm-12">
                            <h1>EXPERIENCES IN CAMBODIA</h1>
                        </div>
                    </div>

                    <?php foreach ($experiences as $experience) : ?>

                        <div class="blog-body row">
                            <div class="col-sm-12">

                                <?php if ($experience->image != '') : ?>

                                    <div class="contents_img">
                                        <img width="250"
                                             height="150"
                                             alt="<?php echo $experience->title; ?>"
                                             src="<?php echo base_url() . 'upload/experiences/' . $experience->image; ?>"/>
                                    </div>

                                <?php endif; ?>

                                <div class="content_text">
                                    <h2>
                                        <?php echo $experience->title; ?>
                                    </h2>

                                    <?php echo $experience->description; ?>

                                    <?php if ($experience->readmore != '') : ?>
                                        <div class="buttons">
                                            <a class="btn white_link" rel="nofollow"
                                               href="<?php echo $experience->readmore; ?>">
                                                Read more
                                            </a>
                                        </div>
                                    <?php endif; ?>
                                </div>

                            </div>
                        </div>

                    <?php endforeach; ?>

                </div>
            </div>

            <?php $this->load->view('atoa/layouts/page-footer'); ?>

        </div>
    </div>

<?php $this->load->view('atoa/layouts/page-default-scripts'); ?>

<?php $this->load->view('atoa/layouts/footer'); ?>