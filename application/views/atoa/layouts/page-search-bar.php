<script>

    loadCSS('tour_search_bar_style', "<?php echo base_url('public/css/page-search-bar.css'); ?>");

</script>

<div class="row">
    <div class="tour_search_bar col-sm-12">

        <!--        <div id="toursearch" <?php ////echo (isset($_GET['search_hotel']) ? 'style="display:none;"': '')?>-->
        <div id="toursearch">

            <?php
            $search_destination = '';
            if (isset($_GET['destination'])) {
                $search_destination = $_GET['destination'];
            }

            $search_category = '';
            if (isset($_GET['category'])) {
                $search_category = $_GET['category'];
            }

            $search_duration = '';
            if (isset($_GET['duration'])) {
                $search_duration = $_GET['duration'];
            }
            ?>

            <form name="searchtour" id="search_tour_form" method="get" action="<?php echo site_url("find-tour") ?>">
                <div class="col-sm-10">
                    <div class="row">
                        <div class="col-sm-4">
                            <label>Destinations</label>

                            <?php
                            echo form_dropdown('destination', $destinationsList, $search_destination, 'id="inputDestination" class="input_search"');
                            ?>
                        </div>
                        <div class="col-sm-4">
                            <label>Duration</label>
                            <?php echo form_dropdown('duration', $duration, $search_duration, 'id="inputDuration" class="input_search"'); ?>
                        </div>
                        <div class="col-sm-4">
                            <label>Holiday Types</label>
                            <?php echo form_dropdown('category', $categoriesList, $search_category, 'id="inputCategory" class="input_search"'); ?>
                        </div>
                    </div>
                </div>

                <div class="col-sm-2">
                    <label>&nbsp;</label>
                    <div class="form-group">
                        <?php echo form_submit('search_tour', 'find it', 'class="btn-submit"'); ?>
                    </div>
                </div>
            </form>
        </div>

    </div>
</div>

<!--</div>-->

<script type="text/javascript">
    $(document).ready(function () {

        $('#titlesearch_hotel').click(function () {

            $.ajax({
                url: "<?php echo base_url();?>atoa/hotelSearchCriteria",
                success: function (results) //we're calling the response json array 'cities'
                {
                    $('#region').empty();

                    regions = results['regions'];
                    for (var id in regions) {
                        $('#region').append($('<option />', {
                            value: id.substring(1),
                            text: regions[id]
                        }));
                    }

                } //end success
            });

            $('#hotelsearch').show();
            $('#toursearch').hide();
            $('#titlesearch_tour img').replaceWith('<img src="<?php echo base_url();?>public/images/pointer-02.png" class="searchpointer2" alt="Travel Asia"/>');
            $('#titlesearch_hotel img').replaceWith('<img src="<?php echo base_url();?>public/images/pointer-01.png" class="searchpointer2" alt="Travel Asia"/>');
            return false;
        });

        $('#titlesearch_tour').click(function () {
            $('#hotelsearch').hide();
            $('#toursearch').show();
            $('#titlesearch_tour img').replaceWith('<img src="<?php echo base_url();?>public/images/pointer-01.png" class="searchpointer2" alt="Travel Asia"/>');
            $('#titlesearch_hotel img').replaceWith('<img src="<?php echo base_url();?>public/images/pointer-02.png" class="searchpointer2" alt="Travel Asia"/>');
            return false;
        });
    });
</script>
