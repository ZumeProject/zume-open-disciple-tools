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
            $namespace_v1, '/user_view', [
                'methods'  => 'POST',
                'callback' => [ $this, 'user_view_endpoint' ],
                'permission_callback' => function( WP_REST_Request $request ) {
                    return dt_has_permissions( $this->permissions );
                }
            ]
        );
    }

    public function user_view_endpoint( WP_REST_Request $request ) {
        $params = $request->get_params();

        if ( isset( $params['view'] ) && ! empty(  $params['view'] ) ) {
            update_user_option( get_current_user_id(), 'custom_user_view', sanitize_text_field( wp_unslash( $params['view'] ) ) );
            return true;
        }
        return false;
    }
}
Zume_Open_Endpoints::instance();
