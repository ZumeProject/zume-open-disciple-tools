<?php
if ( !defined( 'ABSPATH' ) ) { exit; } // Exit if accessed directly.

class Zume_Open_Endpoints
{
    public $permissions = [ 'access_contacts' ];

    private static $_instance = null;
    public static function instance() {
        if ( is_null( self::$_instance ) ) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    public function __construct() {
        add_action( 'rest_api_init', [ $this, 'add_api_routes' ] );
    }

    //See https://github.com/ZumeProject/disciple-tools-theme/wiki/Site-to-Site-Link for outside of wordpress authentication
    public function add_api_routes() {
        $namespace_v1 = "zume-open/v1";

        register_rest_route(
            $namespace_v1, '/user_dashboard_view', [
                'methods'  => 'POST',
                'callback' => [ $this, 'user_dashboard_view_endpoint' ],
                'permission_callback' => dt_has_permissions( $this->permissions )
            ]
        );
    }

    public function user_dashboard_view_endpoint( WP_REST_Request $request ) {
        $params = $request->get_params();

        dt_write_log( $params );

        return true;
    }
}
Zume_Open_Endpoints::instance();
