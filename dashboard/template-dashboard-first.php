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
                <div class="cell">
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
                                        <br><br><br><br><br><br><br>


                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div> <!-- left section-->

            </div>

    </div> <!-- end #inner-content -->

</div> <!-- end #content -->

<?php
get_footer();
