<?php
$this->load->view('atoa/layouts/head', [
    'metas' => array(
        'keywords' => 'Tours in Cambodia',
        'title' => 'Where to find the best tours in Cambodia ? Visit Travel Asia a la carte',
        'description' => 'Whether you are seeking a tour in Cambodia or in all of South East Asia, you should contact Travel Asia a la carte first, for some exclusive packages'
    ),
    array(
        'title' => 'Where to find the best tours in Cambodia ? Visit Travel Asia a la carte'
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
                            <h1>Tours in Cambodia</h1>

                            <div class="descriptions">
                                Travel Asia A La Carte offers specialised tours such as Adventure,
                                Honeymoon, Nature or Family Holidays. Create your own personal tour and add some
                                responsible
                                tourism aspects, relaxation or whatever suits your style.
                            </div>
                        </div>
                    </div>

                    <?php $this->load->view('atoa/layouts/page-search-bar'); ?>

                    <div class="blog-body blog-grid  row">
                        <div class="col-sm-12">

                            <?php foreach ($categories as $category) : ?>

                                <div class="col-sm-12 col-md-6 col-lg-4 grid">
                                    <div class="grid-content">

                                        <a href="<?php echo site_url("holiday-tours-in-cambodia.html/" . $category['category_id'] . "/" . strtolower(url_title($category['name'])) . ""); ?>">
                                            <img width="250"
                                                 height="150"
                                                 alt="<?php echo $category['name']; ?>"
                                                 src="<?php echo base_url('upload/categories/' . $category['image']); ?>">
                                        </a>

                                        <h2>
                                            <a href="<?php echo site_url("holiday-tours-in-cambodia.html/" . $category['category_id'] . "/" . strtolower(url_title($category['name'])) . ""); ?>">
                                                <?php echo $category['name']; ?>
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

<?php $this->load->view('atoa/layouts/page-default-scripts'); ?>

<?php $this->load->view('atoa/layouts/footer'); ?>