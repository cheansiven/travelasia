<script>
    loadCSS('pageMenuStyle', "<?php echo base_url('public/css/page-menu.css'); ?>");
</script>

<nav id="main-menu">
    <div class="col-sm-12">
        <ul class="nav nav-pills">
            <li class="lg-hide <?php echo ($this->uri->segment(1) == '') ? 'hidden' : ''; ?>">
                <a
                    href="<?php echo site_url() ?>">Home</a></li>
            <li>
                <a class="drop" href="<?php echo site_url("asian-and-cambodia-tours-destinations.html"); ?>">Destinations</a>
            </li>
            <li><a href="<?php echo site_url("tour-operator-in-cambodia.html"); ?>">Tours</a></li>
            <li><a href="<?php echo site_url("holiday-tours-in-cambodia.html"); ?>"> Holiday Types</a></li>
            <?php if (isset($total_promotion_tours)) : ?>
                <?php if ($total_promotion_tours > 0) : ?>
                    <li><a href="<?php echo site_url("tour-and-travel-agency-in-cambodia.html"); ?>">Best Value</a></li>
                <?php endif; ?>
            <?php endif; ?>

            
            <li><a href="<?php echo site_url("directory-hotel-in-cambodia.html"); ?>">Hotels</a></li>
            <li><a href="<?php echo site_url("best-river-cruises-in-south-east-asia.html"); ?>">Cruises</a></li>
            <li><a href="<?php echo site_url("tour-experts-in-cambodia.html"); ?>">Experiences</a></li>
            <li><a href="<?php echo site_url("mice-in-cambodia.html"); ?>">Mice</a></li>
        </ul>
    </div>
</nav>
