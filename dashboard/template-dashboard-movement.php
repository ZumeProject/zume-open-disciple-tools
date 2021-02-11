<?php
declare(strict_types=1);

$url = dt_get_url_path();
$dt_post_type = explode( "/", $url )[0];

dt_please_log_in();

if ( ! current_user_can( 'access_contacts' ) ) {
    wp_die( esc_html( "Permission denied" ), "Permission denied", 403 );
}

get_header();

?>
<div style="padding:15px" class="template-metrics-wide dashboard-page">

    <div id="inner-content">

            <div class="grid-x grid-padding-x">
                <div class="cell medium-9">
                    <div class="grid-x grid-padding-x grid-padding-y">

                        <!-- main section -->
                        <div class="cell">
                            <div class="grid-x grid-padding-x">
                                <div class="cell">
                                    <div class="bordered-box">


                                        <br><br><br><br><br><br><br>
                                        <br><br><br><br><br><br><br>
                                        <br><br><br><br><br><br><br>
                                        <br><br><br><br><br><br><br>


                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- totals section -->
                        <div class="cell" >
                            <div class="grid-x grid-padding-x">
                                <div class="cell medium-4">
                                    <div class="bordered-box">
                                        <div style="text-align: center">
                                            <span class="card-title"><?php esc_html_e( "Trainings", 'disciple-tools-dashboard' ) ?></span>
                                        </div>
                                        <div style="text-align: center; flex-grow: 1; margin-top: 20px">
                                            <a href="/trainings"><span class="numberCircle">&nbsp;<span id="active_contacts">0</span>&nbsp;</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="cell medium-4">
                                    <div class="bordered-box">

                                        <div style="text-align: center">
                                            <span class="card-title"><?php esc_html_e( "Contacts", 'disciple-tools-dashboard' ) ?></span>
                                        </div>
                                        <div style="text-align: center; flex-grow: 1; margin-top: 20px">
                                            <a href="/contacts"><span class="numberCircle">&nbsp;<span id="active_contacts">0</span>&nbsp;</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="cell medium-4">
                                    <div class="bordered-box">
                                        <div style="text-align: center">
                                            <span class="card-title"><?php esc_html_e( "Groups", 'disciple-tools-dashboard' ) ?></span>
                                        </div>
                                        <div style="text-align: center; flex-grow: 1; margin-top: 20px">
                                            <a href="/groups"><span class="numberCircle">&nbsp;<span id="active_contacts">0</span>&nbsp;</span></a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- end totals section -->

                    </div>
                </div> <!-- left section-->
                <div class="cell medium-3" style="padding-top:.6em;">

                    <button class="button secondary-button expanded">Get a Coach</button>

                    <ul class="accordion" data-accordion data-multi-expand="true">

                        <li class="accordion-item" style="border: 0;" data-accordion-item>

                            <a href="#" class="accordion-title" style="text-decoration: none !important; border:0;padding:.5em;margin-bottom:0;"><h3 style="margin-bottom:0 !important;">Zúme Course</h3></a>

                            <div class="accordion-content" style="border: 0;" data-tab-content>
                                <a data-open="modal-large">Session 1</a><br>
                                <a data-open="modal-large">Session 2</a><br>
                                <a data-open="modal-large">Session 3</a><br>
                                <a data-open="modal-large">Session 4</a><br>
                                <a data-open="modal-large">Session 5</a><br>
                                <a data-open="modal-large">Session 6</a><br>
                                <a data-open="modal-large">Session 7</a><br>
                                <a data-open="modal-large">Session 8</a><br>
                                <a data-open="modal-large">Session 9</a><br>
                                <a data-open="modal-large">Session 10</a><br>
                            </div>
                        </li>

                        <li class="accordion-item" style="border: 0;" data-accordion-item>

                            <a href="#" class="accordion-title" style="text-decoration: none !important; border:0;padding:.5em;margin-bottom:0;"><h3 style="margin-bottom:0 !important;">Tools</h3></a>

                            <div class="accordion-content" style="border: 0;" data-tab-content>
                                <a data-open="modal-large">Create Your List of 100</a><br>
                                <a data-open="modal-large">Share / Prayer-Walk Tracker</a><br>
                                <a data-open="modal-large">Prayer List</a><br>
                                <a data-open="modal-large">List of 100</a><br>
                                <a data-open="modal-large">Saturation Map</a><br>
                                <a data-open="modal-large">Generation Map</a><br>
                                <a data-open="modal-large">Four Fields Tool</a><br>
                                <a data-open="modal-large">3 Month Plan</a><br>
                            </div>
                        </li>

                        <li class="accordion-item" data-accordion-item style="border: 0;">

                            <a href="#" class="accordion-title" style="text-decoration: none !important; border:0; padding:.5em;margin-bottom:0;"><h3 style="margin-bottom:0 !important;">Share</h3></a>

                            <div class="accordion-content" style="border: 0;" data-tab-content>
                                <a data-open="modal-large">Invited a Friend</a><br>
                                <a data-open="modal-large">Share a Concept on Facebook</a><br>
                            </div>
                        </li>
                    </ul>

                </div> <!-- right section-->
            </div>

    </div> <!-- end #inner-content -->

</div> <!-- end #content -->




<?php
get_footer();
