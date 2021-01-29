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
                        <div class="cell">
                            <!-- top section -->
                            <div class="grid-x grid-padding-x">
                                <div class="cell medium-4">
                                    <div class="bordered-box">

                                        <div style="text-align: center">
                                            <span class="card-title"><?php esc_html_e( "Trainings", 'disciple-tools-dashboard' ) ?></span>
                                        </div>
                                        <div style="text-align: center; flex-grow: 1; margin-top: 20px">
                                            <span class="numberCircle">&nbsp;<span id="active_contacts">9</span>&nbsp;</span>
                                        </div>
                                        <div class="view-all" style="flex-shrink: 1">
                                            <a class="button dt-green" style="margin-bottom:0" href="<?php echo esc_url( home_url( '/' ) ) . "contacts/new" ?>">
                                                <?php esc_html_e( "Add a contact", 'disciple-tools-dashboard' ) ?>
                                            </a>
                                            <a class="button" style="margin-bottom:0; margin-left: 10px" href="<?php echo esc_url( home_url( '/' ) ) . "contacts" ?>">
                                                <?php esc_html_e( "View Contacts List", 'disciple-tools-dashboard' ) ?>
                                            </a>
                                        </div>

                                    </div>
                                </div>
                                <div class="cell medium-4">
                                    <div class="bordered-box">

                                        <div style="text-align: center">
                                            <span class="card-title"><?php esc_html_e( "Contacts", 'disciple-tools-dashboard' ) ?></span>
                                        </div>
                                        <div style="text-align: center; flex-grow: 1; margin-top: 20px">
                                            <span class="numberCircle">&nbsp;<span id="active_contacts">9</span>&nbsp;</span>
                                        </div>
                                        <div class="view-all" style="flex-shrink: 1">
                                            <a class="button dt-green" style="margin-bottom:0" href="<?php echo esc_url( home_url( '/' ) ) . "contacts/new" ?>">
                                                <?php esc_html_e( "Add a contact", 'disciple-tools-dashboard' ) ?>
                                            </a>
                                            <a class="button" style="margin-bottom:0; margin-left: 10px" href="<?php echo esc_url( home_url( '/' ) ) . "contacts" ?>">
                                                <?php esc_html_e( "View Contacts List", 'disciple-tools-dashboard' ) ?>
                                            </a>
                                        </div>

                                    </div>
                                </div>
                                <div class="cell medium-4">
                                    <div class="bordered-box">

                                        <div style="text-align: center">
                                            <span class="card-title"><?php esc_html_e( "Groups", 'disciple-tools-dashboard' ) ?></span>
                                        </div>
                                        <div style="text-align: center; flex-grow: 1; margin-top: 20px">
                                            <span class="numberCircle">&nbsp;<span id="active_contacts">9</span>&nbsp;</span>
                                        </div>
                                        <div class="view-all" style="flex-shrink: 1">
                                            <a class="button dt-green" style="margin-bottom:0" href="<?php echo esc_url( home_url( '/' ) ) . "contacts/new" ?>">
                                                <?php esc_html_e( "Add a contact", 'disciple-tools-dashboard' ) ?>
                                            </a>
                                            <a class="button" style="margin-bottom:0; margin-left: 10px" href="<?php echo esc_url( home_url( '/' ) ) . "contacts" ?>">
                                                <?php esc_html_e( "View Contacts List", 'disciple-tools-dashboard' ) ?>
                                            </a>
                                        </div>

                                    </div>
                                </div>
                            </div> <!---->
                        </div>

                        <div class="cell">
                            <div class="grid-x grid-padding-x">
                                <div class="cell">
                                    <div class="bordered-box">

                                        <div style="text-align: center">
                                            <span class="card-title"><?php esc_html_e( "Trainings", 'disciple-tools-dashboard' ) ?></span>
                                        </div>
                                        <div style="text-align: center; flex-grow: 1; margin-top: 20px">
                                            <span class="numberCircle">&nbsp;<span id="active_contacts">9</span>&nbsp;</span>
                                        </div>
                                        <div class="view-all" style="flex-shrink: 1">
                                            <a class="button dt-green" style="margin-bottom:0" href="<?php echo esc_url( home_url( '/' ) ) . "contacts/new" ?>">
                                                <?php esc_html_e( "Add a contact", 'disciple-tools-dashboard' ) ?>
                                            </a>
                                            <a class="button" style="margin-bottom:0; margin-left: 10px" href="<?php echo esc_url( home_url( '/' ) ) . "contacts" ?>">
                                                <?php esc_html_e( "View Contacts List", 'disciple-tools-dashboard' ) ?>
                                            </a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- left section-->
                <div class="cell medium-3" style="padding-top:.5em;">

                    <div class="bordered-box" style="height:100%;">

                    </div>
                </div> <!-- right section-->
            </div>

    </div> <!-- end #inner-content -->

</div> <!-- end #content -->


<?php
get_footer();
