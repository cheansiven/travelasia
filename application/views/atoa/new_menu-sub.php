<script>

    callCSS('new_sub_menu_style', "<?php echo base_url('public/css/new_menu-sub.css'); ?>");

</script>

<nav id="sub-menu">
    <ul class="nav nav-pills">
        <li><a href="<?php echo base_url(); ?>">Home</a></li>

        <?php if (isset($breadcrumbs)) : ?>
            <?php foreach ($breadcrumbs as $breadcrumb) : ?>

                <li>
                    <a href="<?php echo base_url($breadcrumb['url']); ?>"><?php echo $breadcrumb['name']; ?></a>
                </li>

            <?php endforeach; ?>
        <?php endif; ?>

        <!--        --><?php //if (isset($name)) : ?>
        <!--            <li>-->
        <!--                --><?php
        //                $main_back_link = (isset($main_back_link) ? $main_back_link : $this->uri->segment(1));
        //                ?>
        <!--                <a href="--><?php //echo base_url($main_back_link); ?><!--">-->
        <!--                    --><?php //echo $name; ?>
        <!--                </a>-->
        <!--            </li>-->
        <!--        --><?php //endif; ?>
        <!---->
        <!--        --><?php //if (isset($back_link) && $back_link_text) : ?>
        <!--            <li>-->
        <!--                <a href="--><?php //echo base_url($back_link); ?><!--">-->
        <!--                    --><?php //echo $back_link_text; ?>
        <!--                </a>-->
        <!--            </li>-->
        <!--        --><?php //endif; ?>
        <!---->
        <!--        --><?php //if (isset($detail_name)) : ?>
        <!--            <li><a href="#"> --><?php //echo $detail_name; ?><!-- </a></li>-->
        <!--        --><?php //endif; ?>

        <li class="pull-right btn-useful-info">
            <a href="<?php echo site_url('useful-information'); ?>">
                <svg id="icon-information" viewBox="0 0 1024 1024" class="icon icon-information">
                    <path fill="#fff" class="path1"
                          d="M521.964 855.555c20.849 5.113 42.025-27.532 57.436-47.722 14.715-19.463 25.887-48.234 47.247-51.121 17.418 11.138-2.41 37.574-13.51 54.518-28.078 42.94-85.074 108.773-131.703 126.044-66.127 24.501-141.489-0.584-148.61-64.778-3.615-32.785 13.841-82.299 27.057-122.535 27.057-82.668 46.336-137.001 74.267-224.85 20.193-63.607 62.037-170.482-43.889-149.798 0.73-28.153 28.628-30.508 50.644-34.086 68.721-11.063 148.101-24.044 222.918-27.235-36.512 117.245-84.128 256.833-125.826 389.854-12.674 40.417-61.71 136.998-16.032 151.709zM570.307 269.718c-94.969-16.36-99.826-174.517 6.721-190.747 147.732-22.385 139.479 215.846-6.721 190.747z"></path>
                </svg>

                useful information
            </a>
        </li>

    </ul>
</nav>
