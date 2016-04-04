<?php
$metas = array(
    'keywords' => 'Tour operator in Cambodia',
    'title' => 'Luxury tours and excursions : Tour Operator in Cambodia : Travel a la carte',
    'description' => 'An exclusive tour operator in Cambodia to discover South East Asia in the best possible manner. Expertise and grnuine dedication',
    'subject' => 'tour operator in Asia',
    'copyright' => 'lox design',
    'language' => 'en',
    'robots' => 'index, follow',
    'author' => 'steve, steve@travelasia.travel',
    'coverage' => 'international',
    'subtitle' => 'Luxury a la carte tour packages',
    'url' => 'http://www.travelasia.travel',
    'category' => 'travel'
);
?>

<?php $this->load->view('atoa/layouts/head', ['metas' => $metas]); ?>

    <!-- Google Tag Manager -->
    <noscript>
        <iframe src="//www.googletagmanager.com/ns.html?id=GTM-KML6MQ" height="0" width="0"
                style="display:none;visibility:hidden"></iframe>
    </noscript>

    <div class="hide-mobile slogan">
        <div class="slogan-content">
            “The world is a book, and those who do <br>not travel read only one page.”
            <div class="author">
                – Saint Augustine
            </div>
        </div>
    </div>

    <!-- End Google Tag Manager -->
    <div id="container" class="home_page_container container">

        <div id="footer" class="row">

            <?php $this->load->view('atoa/layouts/page-menu-home'); ?>

            <div id="bg_footer">
                <div class="col-sm-12" id="blog_content">
                    <div class="row">
                        <div class="blog-header col-sm-12">
                            <h1>Tours and Travel Agent in Cambodia and Asia</h1>

                            <div class="descriptions">
                                <p>
                                    Travel Asia A La Carte is a <b>travel agency and Tour operator</b> fully registered
                                    in
                                    the Kingdom
                                    of Cambodia. Our agency provides individuals or groups with personally tailored
                                    tours in
                                    <b>Cambodia</b> and other countries in South East Asia including <b>Thailand</b>,
                                    <b>Vietnam</b>,
                                    <b>Laos</b> & <b>Myanmar</b>.
                                </p>

                                <p>
                                    With over 30 years of combined experience in travel and hospitality in Cambodia,
                                    innovative ways of
                                    visiting your destination and high levels of customer service we are the perfect
                                    planners for you.
                                    Get closer to your destination with unique experiences and personal touches all
                                    crafted
                                    just for
                                    you.
                                </p>

                                <p>Are you looking for family holidays, honeymooner packages, biking tours, adventure
                                    holidays, culinary
                                    package, cruise tours, Angkor tour packages or Meeting packages? We can provide all
                                    of
                                    these and
                                    much more from luxury, superior to standard packages.
                                </p>

                                <p>Our mission is to deliver <b>tours in Cambodia</b> of a lifetime and exceed your
                                    expectations every
                                    time.</p>
                                <p>Please email us with your requirements
                                    <a class="red_link" href="mailto:info@travelasia.travel">info@travelasia.travel</a>
                                    or click on our enquiry form.
                                </p>
                            </div>
                        </div>

                        <?php $this->load->view('atoa/layouts/page-footer'); ?>

                    </div>
                </div>

            </div>
        </div>
    </div>

<?php $this->load->view('atoa/layouts/page-default-scripts'); ?>

<?php $this->load->view('atoa/layouts/footer'); ?>