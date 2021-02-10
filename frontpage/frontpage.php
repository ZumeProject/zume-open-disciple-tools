<?php

class Zume_Open_Frontpage {
    private static $_instance = null;
    public static function instance() {
        if ( is_null( self::$_instance ) ) {
            self::$_instance = new self();
        }
        return self::$_instance;
    } // End instance()

    private $version = 1;
    private $context = "zume-open";
    private $namespace;

    public function __construct() {

        $this->namespace = $this->context . "/v" . intval( $this->version );
        add_filter( 'dt_front_page', [ $this, 'front_page' ] );

        add_action( "template_redirect", [ $this, 'my_theme_redirect' ] );

        add_action( 'wp_enqueue_scripts', [ $this, 'scripts' ], 1000 );
    }

    public function my_theme_redirect() {
        $url = dt_get_url_path();
        if ( strpos( $url, "dashboard" ) !== false ){
            $plugin_dir = dirname( __FILE__ );
            $path = $plugin_dir . '/template-dashboard.php';
            include( $path );
            die();
        }
        if ( strpos( $url, "course" ) !== false ){
            $plugin_dir = dirname( __FILE__ );
            $path = $plugin_dir . '/template-course.php';
            include( $path );
            die();
        }
        if ( strpos( $url, "progress" ) !== false ){
            $plugin_dir = dirname( __FILE__ );
            $path = $plugin_dir . '/template-progress.php';
            include( $path );
            die();
        }
    }

    public function scripts() {
        $url = dt_get_url_path();
        if ( strpos( $url, 'dashboard' ) !== false ) {
            wp_enqueue_style( 'dashboard-css', plugin_dir_url( __FILE__ ) . '/style.css', array(), filemtime( plugin_dir_path( __FILE__ ) . 'style.css' ) );

            wp_enqueue_script( 'zume-open', plugin_dir_url( __FILE__ ) . '/frontpage.js', [
                'jquery',
                'jquery-ui',
                'lodash',
                'amcharts-core',
                'amcharts-charts',
                'amcharts-animated',
                'moment'
            ], filemtime( plugin_dir_path( __FILE__ ) . '/frontpage.js' ), true );
            wp_localize_script(
                'zume-open', 'wpApiFrontpage', array(
                    'root'                  => esc_url_raw( rest_url() ),
                    'site_url'              => get_site_url(),
                    'nonce'                 => wp_create_nonce( 'wp_rest' ),
                    'current_user_login'    => wp_get_current_user()->user_login,
                    'current_user_id'       => get_current_user_id(),
                    'template_dir'          => get_template_directory_uri(),
                    'translations'          => [],
                    'data'                  => [],
                )
            );
        }
    }

    public function front_page( $page ){
        return site_url( '/dashboard/' );
    }
}
Zume_Open_Frontpage::instance();
