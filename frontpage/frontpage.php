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

        add_filter( 'desktop_navbar_menu_options', [ $this, 'nav_menu_filter' ], 999, 1 );
        add_filter( 'off_canvas_menu_options', [ $this, 'nav_menu_filter' ], 999, 1 );

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
                'translations'          => Zume_Open_Endpoints::instance()->translations(),
                'data'                  => Zume_Open_Endpoints::instance()->get_data(),
            )
        );

    }

    public function logo(){
        $url = trailingslashit( plugin_dir_url(__FILE__) ) . 'zume-training-logo.svg';
        return $url;
    }

    public function front_page( $page ){
        return site_url( '/dashboard/' );
    }

    public function nav_menu_filter( $tabs ) {

        $new_tabs = [];
        $new_tabs['dashboard'] = [
            'link' => esc_url( site_url( '/dashboard/' ) ),
            'label' => esc_html__( "Dashboard", "zume" ),
        ];
        $new_tabs['course'] = [
            'link' => esc_url( site_url( '/course/' ) ),
            'label' => esc_html__( "Course", "zume" ),
        ];
        $new_tabs['trainings'] = [
            'link' => esc_url( site_url( '/trainings/' ) ),
            'label' => esc_html__( "Trainings", "zume" ),
        ];
        $new_tabs['contacts'] = [
            'link' => esc_url( site_url( '/contacts/' ) ),
            'label' => esc_html__( "Contacts", "zume" ),
        ];
        $new_tabs['groups'] = [
            'link' => esc_url( site_url( '/groups/' ) ),
            'label' => esc_html__( "Groups", "zume" ),
        ];

        return $new_tabs;
    }

}
Zume_Open_Frontpage::instance();
