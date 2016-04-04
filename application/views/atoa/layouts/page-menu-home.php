<script>
    loadCSS('homeMenu', "<?php echo base_url('public/css/menu.css'); ?>");
</script>

<div class="menumain">
    <ul class="menu">

        <?php if ($this->uri->segment(1)) : ?>
            <li>
                <a class="drop" href="<?php echo site_url(''); ?>">Home</a>
            </li>
        <?php endif; ?>

        <li>
            <a class="drop"
               href="<?php echo site_url("asian-and-cambodia-tours-destinations.html"); ?>">Destinations</a>
            <ul>
                <li class="for_colums">
                    <div class="mianpopup">

                        <?php
                        $i = 1;

                        foreach ($destinations as $destination) {
                            if ($i & 1) {
                                echo '<div class="blogpopup">';
                                echo '<div class="minipopup"><a href="' . site_url("destinations/" . $destination['region_id'] . "/" . strtolower(url_title($destination['name'])) . "") . '">';
                                echo '<img alt="' . $destination['name'] . '" width="200" src="' . base_url() . 'upload/regions/' . $destination['image'] . '">' . $destination['name'] . '

                              <div class="mainpopup-imagebg"></div>

                        </a></div>';
                                if ($i == count($destinations)) {
                                    echo '</div>';
                                }
                            } else {
                                echo '<div class="minipopup"><a href="' . site_url("destinations/" . $destination['region_id'] . "/" . strtolower(url_title($destination['name'])) . "") . '">';
                                echo '<img alt="' . $destination['name'] . '" width="200" src="' . base_url() . 'upload/regions/' . $destination['image'] . '">' . $destination['name'] . '

                              <div class="mainpopup-imagebg"></div>

                        </a></div>';
                                echo '</div>';
                            }

                            $i++;
                        }
                        ?>
                    </div>
                </li>
            </ul>
        </li>
        <li>
            <a href="<?php echo site_url("tour-operator-in-cambodia.html"); ?>">Tours</a>
            <ul>
                <li class="for_colum" style="text-align:left !important;">
                    <img alt="Tours"
                         src="<?php echo base_url(); ?>public/images/popup-small-image-tours.png"
                         class="image_menupopup"/>

                    <div class="text_leftpopup">
                        <h2>Tour Operator in Cambodia</h2>
                        <p>Traverse Cambodia and beyond on a private or group journey. Itineraries are adaptable and
                            should be crafted to meet your very own individual demands. A short city break, a few days
                            exploring the temples or comprehensive single destinations tours for a week or two are all
                            detailed here below.
                        </p>
                    </div>
                </li>
            </ul>
        </li>
        <li>
            <a href="<?php echo site_url("holiday-tours-in-cambodia.html"); ?>">Holiday Types</a>
            <ul>
                <li class="for_colums">
                    <div class="mianpopup">
                        <?php
                        $i = 3;
                        $total = count($categories);
                        $last = 1;
                        foreach ($categories as $category) {
                            if ($i == 3) {
                                echo '<div class="blogpopup">';
                                echo '<div class="minipopup"><a href="' . site_url('holiday-types/' . $category['category_id'] . '/' . strtolower(url_title($category['name'])) . "") . '">';
                                echo '
                                <img alt="' . $category['name'] . '" width="205" src="' . base_url() . 'upload/categories/' . $category['image'] . '" />
                                <div class="mainpopup-imagebg"></div>
                                ' .

                                    $category['name'] . '</a></div>
						  ';
                                if ($last == $total) echo '</div>';
                                $i = 0;
                            } else {
                                echo '<div class="minipopup"><a href="' . site_url('holiday-types/' . $category['category_id'] . '/' . strtolower(url_title($category['name'])) . "") . '">';
                                echo '<img alt="' . $category['name'] . '" width="205" src="' . base_url() . 'upload/categories/' . $category['image'] . '">' . $category['name'] . '

						  <div class="mainpopup-imagebg"></div>

						  </a></div>';
                                if ($i == 2) echo '</div>';
                            }

                            $i++;
                            $last++;
                        }
                        ?>
                    </div>
                </li>
            </ul>
        </li>

        <?php if (isset($total_promotion_tours)) : ?>
            <?php if ($total_promotion_tours > 0) : ?>
                <li>
                    <a href="<?php echo site_url("tour-and-travel-agency-in-cambodia.html"); ?>">Best Value</a>
                    <ul>
                        <li class="for_colum">
                            <img alt="Best Value"
                                 src="<?php echo base_url(); ?>public/images/popup-small-image-best.png"
                                 class="image_menupopup"/>

                            <div class="text_leftpopup">
                                <p class="text-popup-title">BEST VALUE</p>
                                <p>The best discounts and promotional offers for hotels, cruises and tours. Enjoy a
                                    splendid
                                    tour of Cambodia and make your money go further with our best value offers.
                                </p>
                            </div>
                        </li>
                    </ul>
                </li>
            <?php endif; ?>
        <?php endif; ?>

        <li>
            <a href="<?php echo site_url("directory-hotel-in-cambodia.html"); ?>">Hotels</a>
            <ul>
                <li class="for_colum">
                    <img alt="Hotels"
                         src="<?php echo base_url(); ?>public/images/popup-small-image-hotel.png"
                         class="image_menupopup"/>

                    <div class="text_leftpopup">
                        <p class="text-popup-title">Hotel</p>
                        <p>Cambodia has a range of hotels to offer for all budgets and tastes. Travel Asia A La Carte
                            only works with hotels we have personally inspected and in most cases, stayed overnight to
                            test the services.</p>
                    </div>
                </li>
            </ul>
        </li>
        <!--<li> <a class="menuNoActive" href="#">CRUISES</a></li> -->
        <li><a href="<?php echo site_url("best-river-cruises-in-south-east-asia.html"); ?>">CRUISES</a>
            <ul>
                <li class="for_colum">
                    <img alt="Hotels"
                         src="<?php echo base_url(); ?>public/images/popup-small-image-cruise.png"
                         class="image_menupopup"/>
                    <div class="text_leftpopup">
                        <p class="text-popup-title">Cruise</p>
                        <p>River cruising is the ideal way to explore Cambodia, see the Mighty Mekong and cruise from
                            Saigon or Phnom Penh to Siem Reap. There is no need to unpack your suitcase each day as new
                            destinations are explored along the way. From day cruises to week long exploration, sailing
                            to small villages and experiencing life along the river, this is the quintessential way to
                            discover Indochina.</p>
                    </div>
                </li>
            </ul>
        </li>
        <li><a href="<?php echo site_url("tour-experts-in-cambodia.html"); ?>">EXPERIENCES</a>
            <ul>
                <li class="for_colum">
                    <img alt="Experiences"
                         src="<?php echo base_url(); ?>public/images/popup-small-image-experiences.png"
                         class="image_menupopup"/>
                    <div class="text_leftpopup">
                        <p class="text-popup-title">Experiences</p>
                        <p>A tour is about those special moments, or experiences, that provide long lasting memories of
                            your trip. Choose your favourite, extra ‘touch’ or let us know what you want to do so we can
                            plan your dream trip.</p>
                    </div>
                </li>
            </ul>
        </li>
        <li><a href="<?php echo site_url("mice-in-cambodia.html"); ?>">MICE</a>
            <ul>
                <li class="for_colum">
                    <img alt="Mice"
                         src="<?php echo base_url(); ?>public/images/popup-small-image-mice.png"
                         class="image_menupopup"/>

                    <div class="text_leftpopup">
                        <p class="text-popup-title">Mice</p>
                        <p>The stunning temples of Angkor offer something unique in Asia: a magnificent backdrop for a
                            gala dinner. The beautiful countryside is ideal for team building activities. Beyond Siem
                            Reap, the vibrant capital and the beaches of the southern coast offer exciting opportunities
                            for incentive groups.</p>
                    </div>
                </li>
            </ul>
        </li>

    </ul>
    <!--div class="conact-mobile">
  <ul>
  	<li><a href="tel:+85563766050"><img src="<?php echo base_url(); ?>public/images/phone.png" alt="Contact us"></a></li>
    <li><a href="mailto:info@travelasia.travel<?php //echo site_url("enquiry-about-cambodia-tour");?>"><img src="<?php echo base_url(); ?>public/images/white-envelope.png" alt="Contact us"></a></li>
  </ul>
  <div class="clearfix"></div>
  </div -->
</div>