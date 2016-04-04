<?php
$this->load->view('atoa/layouts/head', [
    'metas' => array(
        'keywords' => $keywords . ', asian and cambodia tours destinations',
        'title' => $title . ' : Asian and cambodia tours destinations',
        'description' => $description
    ),
    array(
        'title' => $title . ': Asian and cambodia tours destinations'
    )
]);
?>

    <script>
        loadCSS('datePicker', "<?php echo base_url('public/zebra_datepicker/css/default.css'); ?>")
    </script>

    <div id="container" class="tour_container container">

        <div id="footer" class="row">

            <?php $this->load->view('atoa/layouts/page-menu-sub'); ?>

            <div id="bg_footer">
                <div id="blog_content" class="col-sm-12">

                    <div class="row">
                        <div class="blog-header col-sm-12">
                            <h1><?php echo $tour_title; ?></h1>

                            <div class="descriptions">
                                <?php echo $tour_description; ?>
                            </div>
                        </div>
                    </div>

                    <?php $this->load->view('atoa/layouts/page-search-bar'); ?>

                    <?php foreach ($tours as $tour) : ?>
                        <div class="blog-body row">
                            <div class="col-sm-12">

                                <?php if ($tour['image'] != '') : ?>

                                    <div class="contents_img">
                                        <img width="250"
                                             height="150"
                                             alt="<?php echo $tour['name']; ?>"
                                             src="<?php echo base_url() . 'upload/tours/' . $tour['image']; ?>"
                                             class=""/>
                                    </div>

                                <?php endif; ?>

                                <div class="content_text">
                                    <h2>
                                        <?php echo $tour['name']; ?>
                                    </h2>

                                    <div class="day_night">
                                        <?php echo $tour['num_days'] . ' ' . (($tour['num_nights'] > 1) ? 'days' : 'day'); ?>
                                        -
                                        <?php echo $tour['num_nights'] . ' ' . (($tour['num_nights'] > 1) ? 'nights' : 'night'); ?>
                                    </div>

                                    <?php echo character_limiter(strip_tags($tour['intro']), 300); ?>

                                    <div class="buttons">
                                        <?php if ($tour['promo_option'] != 0) : ?>
                                            <a class="btn white_link btn_special_offer" rel="nofollow"
                                               data-target="#special_offer_<?php echo $tour['id']; ?>">
                                                Special offer
                                            </a>
                                        <?php endif; ?>

                                        <a class="btn white_link btn_enquire" rel="nofollow"
                                           data-target="#enquire_from_<?php echo $tour['id']; ?>">
                                            Enquire now
                                        </a>

                                        <a class="btn white_link"
                                           rel="nofollow"
                                           href="<?php echo site_url('tour/' . $tour['id'] . '/' . strtolower(url_title($tour['url'])) . '.html'); ?>">
                                            Read more
                                        </a>
                                    </div>
                                </div>

                                <div id="special_offer_<?php echo $tour['id']; ?>"
                                     class="special_offer_form_container col-sm-12">
                                    <div class="row">
                                        <table>
                                            <tr>
                                                <td>SPECIAL OFFER</td>
                                                <td>&#10151;</td>
                                                <td><?php echo strip_tags($tour['intro']); ?></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>

                                <div id="enquire_from_<?php echo $tour['id']; ?>"
                                     class="enquire_from_container col-sm-12">
                                    <div class="row">
                                        <form class="form-horizontal enquire_form"
                                              action="<?php echo base_url('atoa/bookTour'); ?>" method="POST">
                                            <input type="hidden" name="tour_id"
                                                   value="<?php echo $tour['id']; ?>">
                                            <div class="row">
                                                <div class="col-sm-12 col-md-6">
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">First Name</label>
                                                        <div class="col-sm-9 row input_control firstname_container">
                                                            <input name="firstname" type="text" class="form-control">
                                                            <div class="messages" style="margin-top: 0;"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-md-6">
                                                    <div class="form-group lastname_container">
                                                        <label class="col-sm-3 control-label">Last Name</label>
                                                        <div class="col-sm-9 row input_control">
                                                            <input name="lastname" type="text" class="form-control">
                                                            <div class="messages"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-12 col-md-6">
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Email
                                                            address</label>
                                                        <div class="col-sm-9 row input_control">
                                                            <input name="email" type="text" class="form-control">
                                                            <div class="messages"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-md-6">
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-sm-7">
                                                                <label class="col-sm-2 control-label"
                                                                       style="margin-top: -10px">Expected
                                                                    arrival date</label>
                                                                <div class="col-sm-7 row input_control"
                                                                     style="padding-right: 0;">
                                                                    <input name="date" type="text"
                                                                           class="form-control datepicker">
                                                                    <div class="messages"></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-5" style="padding-left: 0">
                                                                <label
                                                                    class="col-sm-2 control-label number_of_people_label"
                                                                    style="margin-top: -10px">Number of
                                                                    people</label>
                                                                <div
                                                                    class="col-sm-5 row input_control number_of_people_container"
                                                                    style="padding-right: 0;">
                                                                    <input type="text" class="form-control"
                                                                           name="number_of_guests">
                                                                    <div class="messages"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-12">
                                                <div class="form-group btn_submit_container">
                                                    <div class="pull-right  ">
                                                        <button type="submit" class="btn btn_submit">
                                                            Confirm
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>

                                        </form>
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

<?php $this->load->view('atoa/layouts/page-default-scripts'); ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    <script src="http://cdn.jsdelivr.net/jquery.validation/1.14.0/jquery.validate.min.js"></script>
    <script type="text/javascript"
            src="http://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.12.0/additional-methods.min.js"></script>
    <script type="text/javascript"
            src="<?php echo base_url('public/zebra_datepicker/javascript/zebra_datepicker.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('public/js/moment.js'); ?>"></script>

    <script type="text/javascript">

        $(function () {
            $('.btn_enquire').unbind('click').click(function (e) {
                e.preventDefault();

                var btn = $(this);
                var target = btn.data('target');

                $('.special_offer_form_container').hide('slide', 10);

                if (btn.hasClass('form_visible')) {
                    $(target).slideUp(600);
                } else {
                    $(target).slideDown(600);
                }

                btn.toggleClass('form_visible');

                $(this).closest('.blog-body').find('.special_offer_form_container').slideUp(600);
                $(this).closest('.blog-body').find('.btn_special_offer').removeClass('form_visible');
            });
        });

        $(function () {
            $('.btn_special_offer').unbind('click').click(function (e) {
                e.preventDefault();

                var btn = $(this);
                var target = btn.data('target');

                $('.enquire_from_container').hide('slide', 10);

                if (btn.hasClass('form_visible')) {
                    $(target).slideUp(600);
                } else {
                    $(target).slideDown(600);
                }

                btn.toggleClass('form_visible');

                $(this).closest('.blog-body').find('.enquire_from_container').slideUp(600);
                $(this).closest('.blog-body').find('.btn_enquire').removeClass('form_visible');
            });
        });

        $(function () {
            var today = moment(new Date());
            var start_date = today.format("YYYY-MM-DD");

            $('.enquire_form').find('.datepicker').Zebra_DatePicker({
                direction: [start_date, false]
            });
        });

        /**
         * Validation form
         */

        $(function () {
            $('.enquire_form').each(function () {
                $(this).validate({
                    rules: {
                        firstname: {
                            required: true
                        },
                        lastname: {
                            required: true
                        },
                        email: {
                            required: true,
                            email: true
                        },
                        date: {
                            required: true
                        },
                        number_of_guests: {
                            required: true,
                            number: true
                        }
                    },
                    messages: {},
                    errorPlacement: function (error, element) {
                        console.log(element);
                        var placement = element.parent().find('.messages');
                        if (placement) {
                            $(placement).append(error)
                        } else {
                            error.insertAfter(element);
                        }
                    }
                });
            });
        });

    </script>

<?php $this->load->view('atoa/layouts/footer'); ?>