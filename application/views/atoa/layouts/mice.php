<?php
$this->load->view('atoa/layouts/head', [
    'metas' => array(
        'keywords' => 'MICE in Cambodia',
        'title' => 'Meetings, Incentives, conferences & Events : MICE in Cambodia',
        'description' => 'Mice in Cambodia : a new and exotic venue to conduct your next meeting or conference. Cambodia has many new ventures to offer quality service'
    ),
    array(
        'title' => 'Meetings, Incentives, conferences & Events : MICE in Cambodia'
    )
]);
?>

    <script>
        loadCSS('prettyPhoto', "<?php echo base_url('public/css/prettyPhoto.css'); ?>");
    </script>

    <div id="container" class="mice_container container">

        <svg class="hidden">
            <symbol id="icon-gallery" viewBox="0 0 1024 1024">
                <title>gallery</title>
                <path fill="#004B8D" class="path1"
                      d="M855.613 330.24h-196.48c0-66.56-23.849-122.88-103.363-122.88h-86.932c-79.524 0-103.363 56.32-103.363 122.88h-32.497c-0.3-33.28-11.54-40.96-47.58-40.96h-26.522c-36.040 0-48.164 7.68-47.578 40.96h-42.304c-15.995 0-28.196 14.182-28.196 30.182v428.093c0 15.997 12.201 28.124 28.196 28.124h686.618c15.992 0 30.147-12.127 30.147-28.124v-428.093c0-15.98-14.154-30.182-30.147-30.182zM512.691 760.66c-105.175 0-190.433-85.256-190.433-190.426 0-105.172 85.258-190.423 190.433-190.423 105.165 0 190.426 85.251 190.426 190.423-0.003 105.17-85.261 190.426-190.426 190.426zM811.52 435.2h-87.040c-38.4 0-38.4-61.44 0-61.44h87.040c38.4 0 38.4 61.44 0 61.44zM633.48 569.992c0 64.325-54.088 116.449-120.804 116.449-66.706 0-120.791-52.124-120.791-116.449 0-64.31 54.085-116.449 120.791-116.449 66.716 0.003 120.804 52.142 120.804 116.449z"></path>
            </symbol>
        </svg>

        <div id="footer" class="row">

            <?php $this->load->view('atoa/layouts/page-menu-sub'); ?>

            <div id="bg_footer">
                <div id="blog_content" class="col-sm-12">

                    <div class="row">
                        <div class="blog-header col-sm-12">
                            <h1>MICE IN CAMBODIA</h1>

                            <div class="descriptions">
                                Where can we host our conference in Asia? Have you ever imagined creating a large event
                                in
                                Cambodia? Well rest assured that this is not an odd idea. As of now, in 2016, Cambodia
                                offers a wide variety of spots and venue to bring in your group or entreprise. From
                                beautiful and exotic littoral zones to the immense and breath taking temples. We are
                                positively sure your group will enjoy every moment in this wonderful Kingdom.
                            </div>
                        </div>
                    </div>

                    <div class="blog-body row">
                        <div class="col-sm-12">

                            <div class="contents_img">
                                <img width="250"
                                     height="150"
                                     alt="Meetings"
                                     src="<?php echo base_url(); ?>public/images/mice/meeting.jpg"/>
                            </div>

                            <div class="content_text">
                                <h2>MEETINGS</h2>
                                <p>
                                    Meet in a fascinating destination: Siem Reap, Phnom Penh and the South Coast offer
                                    endless possibilities for doing business in style. From low key and relaxed settings
                                    such as a championship golf course to meetings in historical hotels and restaurants
                                    all
                                    are easy to facilitate in Cambodia. The main destinations are Siem Reap and Phnom
                                    Penh
                                    but inspiring locations are also to be found in Kep and Sihanoukville. Whether
                                    simple or
                                    complicated the idea is to innovate in dynamic destinations that suit your business
                                    needs.
                                </p>

                                <div class="day_night">
                                    <a class="btnShowGallery">
                                        view image gallery
                                        <svg class="icon-gallery">
                                            <use xlink:href="#icon-gallery"></use>
                                        </svg>
                                    </a>

                                    <ul class="gallery galleryImage">
                                        <li>
                                            <a href="<?php echo base_url(); ?>public/images/mice/gallery/MEETINGS/asian-meeting-room.jpg"
                                               rel="prettyPhoto[gallery4]"> </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url(); ?>public/images/mice/gallery/MEETINGS/meeting-1.jpg"
                                               rel="prettyPhoto[gallery4]">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url(); ?>public/images/mice/gallery/MEETINGS/meeting-2.jpg"
                                               rel="prettyPhoto[gallery4]">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url(); ?>public/images/mice/gallery/MEETINGS/meeting-3.jpg"
                                               rel="prettyPhoto[gallery4]">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url(); ?>public/images/mice/gallery/MEETINGS/meeting-4.jpg"
                                               rel="prettyPhoto[gallery4]">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="blog-body row">
                        <div class="col-sm-12">

                            <div class="contents_img">
                                <img width="250" height="150" alt="Incentives"
                                     src="<?php echo base_url(); ?>public/images/mice/incentives.jpg">
                            </div>

                            <div class="content_text">
                                <h2>INCENTIVES</h2>
                                <p>
                                    Motivate visitors by exceptional experiences – add local touches and flair to
                                    impress and incentivise the team. Reward your team or clients and provide motivation
                                    for
                                    the future in unique ways. Team building can involve house building or well
                                    construction
                                    to support poorer communities. Create challenges and Great Races, use local
                                    transport
                                    such as ox carts or bikes to see the countryside, Masterchef cook offs to test the
                                    team
                                    or less testing experiences such as spa and yoga to relax. Options such as
                                    helicopter
                                    tours or golf matches can incentivise guests and drive them to great achievement.
                                </p>

                                <div class="day_night">
                                    <a class="btnShowGallery">
                                        view image gallery
                                        <svg class="icon-gallery">
                                            <use xlink:href="#icon-gallery"></use>
                                        </svg>
                                    </a>

                                    <ul class="gallery galleryImage">
                                        <li>
                                            <a href="<?php echo base_url(); ?>public/images/mice/gallery/INCENTIVES/asia-incentive-programme.jpg"
                                               rel="prettyPhoto[gallery3]"> </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url(); ?>public/images/mice/gallery/INCENTIVES/asian-incentive-escapade.jpg"
                                               rel="prettyPhoto[gallery3]"></a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url(); ?>public/images/mice/gallery/INCENTIVES/cambodia-incentive-escapade.jpg"
                                               rel="prettyPhoto[gallery3]"></a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url(); ?>public/images/mice/gallery/INCENTIVES/incentive-programme-angkorwat.jpg"
                                               rel="prettyPhoto[gallery3]"></a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url(); ?>public/images/mice/gallery/INCENTIVES/incentive-programme-cambodia.jpg"
                                               rel="prettyPhoto[gallery3]"></a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url(); ?>public/images/mice/gallery/INCENTIVES/incentive-1.jpg"
                                               rel="prettyPhoto[gallery3]"></a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url(); ?>public/images/mice/gallery/INCENTIVES/incentive-2.jpg"
                                               rel="prettyPhoto[gallery3]"> </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url(); ?>public/images/mice/gallery/INCENTIVES/incentive-3.jpg"
                                               rel="prettyPhoto[gallery3]"> </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url(); ?>public/images/mice/gallery/INCENTIVES/incentive-4.jpg"
                                               rel="prettyPhoto[gallery3]"> </a>
                                        </li>
                                    </ul>

                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="blog-body row">
                        <div class="col-sm-12">

                            <div class="contents_img">
                                <img width="250" height="150" alt="Conferences"
                                     src="<?php echo base_url(); ?>public/images/mice/conference.jpg">
                            </div>

                            <div class="content_text">
                                <h2>CONFERENCES</h2>
                                <p>
                                    With flexibility and capability to fit business demands, conferences of all
                                    scales can be arranged in Cambodia. Located in the heart of Southeast Asia, the
                                    Kingdom
                                    of Cambodia is ideal for pre and post-conference leisure and team building. With a
                                    variety of venues, from understated board rooms to world class hotelsand convention
                                    centres with state of the art technology, an everyday meeting can be transformed
                                    into a
                                    memorable and enriching experience.
                                </p>

                                <div class="day_night">
                                    <a class="btnShowGallery">
                                        view image gallery
                                        <svg class="icon-gallery">
                                            <use xlink:href="#icon-gallery"></use>
                                        </svg>
                                    </a>

                                    <ul class="gallery galleryImage">
                                        <li>
                                            <a href="<?php echo base_url(); ?>public/images/mice/gallery/CONFERENCES/conference-1.jpg"
                                               rel="prettyPhoto[gallery2]"> </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url(); ?>public/images/mice/gallery/CONFERENCES/conference-2.jpg"
                                               rel="prettyPhoto[gallery2]"> </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url(); ?>public/images/mice/gallery/CONFERENCES/conference-3.jpg"
                                               rel="prettyPhoto[gallery2]"> </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url(); ?>public/images/mice/gallery/CONFERENCES/conference-4.jpg"
                                               rel="prettyPhoto[gallery2]"> </a>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="blog-body row">
                        <div class="col-sm-12">

                            <div class="contents_img">
                                <img width="250" height="150" alt="Events"
                                     src="<?php echo base_url(); ?>public/images/mice/events.jpg">
                            </div>

                            <div class="content_text">
                                <h2>EVENTS</h2>

                                <p>
                                    Unparalleled in Asia, few destinations can impress as much as Cambodia, with a
                                    temple gala dinner the highlight amongst multiple unique experiences. Unrivalled
                                    celebrations at iconic locations will last long in the memories of visitors to
                                    Cambodia.
                                    Imagine a gala dinner at an Angkorian temple or drinking a cocktail at a country
                                    house
                                    as the sun sets over the rice fields. Gala dinners at the National Museum or
                                    cocktails
                                    at the colonial-era train station are the ideal way to begin the evening after a
                                    day's
                                    work. With a huge range of event options from simple sundowner cruises on a wooden
                                    boat
                                    to privatized temple dinners there is so much to offer your clients or team in
                                    Cambodia.
                                </p>

                                <div class="day_night">
                                    <a class="btnShowGallery">
                                        view image gallery
                                        <svg class="icon-gallery">
                                            <use xlink:href="#icon-gallery"></use>
                                        </svg>
                                    </a>

                                    <ul class="gallery galleryImage">
                                        <li>
                                            <a href="<?php echo base_url(); ?>public/images/mice/gallery/EVENTS/dinner-temples-cambodia.jpg"
                                               rel="prettyPhoto[gallery1]"> </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url(); ?>public/images/mice/gallery/EVENTS/events-management-1.jpg"
                                               rel="prettyPhoto[gallery1]"></a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url(); ?>public/images/mice/gallery/EVENTS/events-management-asia.jpg"
                                               rel="prettyPhoto[gallery1]"></a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url(); ?>public/images/mice/gallery/EVENTS/events-temples-angkor.jpg"
                                               rel="prettyPhoto[gallery1]"></a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url(); ?>public/images/mice/gallery/EVENTS/events-1.jpg"
                                               rel="prettyPhoto[gallery1]"></a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url(); ?>public/images/mice/gallery/EVENTS/events-2.jpg"
                                               rel="prettyPhoto[gallery1]"> </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url(); ?>public/images/mice/gallery/EVENTS/events-3.jpg"
                                               rel="prettyPhoto[gallery1]"> </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url(); ?>public/images/mice/gallery/EVENTS/events-4.jpg"
                                               rel="prettyPhoto[gallery1]"> </a>
                                        </li>
                                    </ul>

                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="blog-body row">
                        <div class="col-sm-12">

                            <div class="contents_img">
                                <img width="250" height="150" alt="Incentives"
                                     src="<?php echo base_url(); ?>public/images/mice/csr.jpg">
                            </div>

                            <div class="content_text">
                                <h2>CSR & TEAM BUILDING</h2>
                                <p>In a developing country there are plentiful options that give something back to
                                    Cambodia by way of CSR activities. Fun and games that bond your employees to the
                                    company
                                    and
                                    educate them in the value of team work can also be arranged. Help Cambodia by doing
                                    a
                                    CSR activity that gives something rewarding back to the country. Simple activities
                                    such
                                    as tree planting, painting a school, building vertical gardens and constructing
                                    bicycles
                                    for donation can be arranged. The more active might prefer to help construct a house
                                    in
                                    a poorer community. Supporting Cambodian arts and crafts can be arranged in local
                                    villages outside Phnom Penh or at an NGO silk farm near Siem Reap. Simple donations
                                    such
                                    as water wells or school kits can be channeled to good causes that are audited and
                                    won't
                                    waste your good intentions. Team Building can be both fun and educational. Take part
                                    in
                                    an Amazing Race through local
                                    markets and the Siem Reap countryside and try your hand at Khmer martial arts or
                                    classical dance in Phnom Penh.
                                </p>

                                <div class="day_night">
                                    <a class="btnShowGallery">
                                        view image gallery
                                        <svg class="icon-gallery">
                                            <use xlink:href="#icon-gallery"></use>
                                        </svg>
                                    </a>

                                    <ul class="gallery galleryImage">
                                        <li>
                                            <a href="<?php echo base_url(); ?>public/images/mice/gallery/CSR/MICE-amazing-race-CSR.jpg"
                                               rel="prettyPhoto[gallery5]"> </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url(); ?>public/images/mice/gallery/CSR/MICE-amazing-race-prep.jpg"
                                               rel="prettyPhoto[gallery5]">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url(); ?>public/images/mice/gallery/CSR/MICE-asian-meeting-CSR.jpg"
                                               rel="prettyPhoto[gallery5]"> </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url(); ?>public/images/mice/gallery/CSR/MICE-asian-meeting-room.jpg"
                                               rel="prettyPhoto[gallery5]"> </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url(); ?>public/images/mice/gallery/CSR/MICE-building-a-shack.jpg"
                                               rel="prettyPhoto[gallery5]"> </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url(); ?>public/images/mice/gallery/CSR/MICE-building-latrines.jpg"
                                               rel="prettyPhoto[gallery5]"> </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url(); ?>public/images/mice/gallery/CSR/MICE-cooking-class-CSR.jpg"
                                               rel="prettyPhoto[gallery5]"> </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url(); ?>public/images/mice/gallery/CSR/MICE-digging-a-well.jpg"
                                               rel="prettyPhoto[gallery5]"> </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url(); ?>public/images/mice/gallery/CSR/MICE-feather-game-CSR.jpg"
                                               rel="prettyPhoto[gallery5]"> </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url(); ?>public/images/mice/gallery/CSR/MICE-khmer-dancing-class-CSR.jpg"
                                               rel="prettyPhoto[gallery5]"> </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url(); ?>public/images/mice/gallery/CSR/MICE-painting-the-school.jpg"
                                               rel="prettyPhoto[gallery5]"> </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php $this->load->view('atoa/layouts/page-footer'); ?>

            </div>
        </div>
    </div>

<?php $this->load->view('atoa/layouts/page-default-scripts'); ?>

    <script type="text/javascript" src="<?php echo base_url('public/js/jquery.prettyPhoto.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('public/js/jquery.touchwipe.min.js'); ?>"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            function setupBox() {
                $("area[rel^='prettyPhoto']").prettyPhoto();

                $("a.btnShowGallery").click(function (e) {
                    e.preventDefault();

                    $(this).parent().find('.gallery li:first-child a').trigger('click');
                });

                $(".gallery a[rel^='prettyPhoto']").prettyPhoto
                ({
                    animation_speed: 'fast',
                    slideshow: 10000,
                    hideflash: true,
                    changepicturecallback: function () {
                        setupSwipe();
                    }
                });
            }

            function setupSwipe() {
                $(".pp_hoverContainer").touchwipe({
                    wipeLeft: function () {
                        $.prettyPhoto.changePage('next');
                    },
                    wipeRight: function () {
                        $.prettyPhoto.changePage('previous');
                    },
                    min_move_x: 20,
                    min_move_y: 20,
                    preventDefaultEvents: true
                });
            }

            setupBox();
        });

    </script>

<?php $this->load->view('atoa/layouts/footer'); ?>