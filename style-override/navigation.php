<?php

class Zume_Open_Navigation
{
    private static $_instance = null;
    public static function instance()
    {
        if (is_null(self::$_instance)) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    public function __construct() {
        add_filter( 'dt_nav', [ $this, 'dt_nav' ], 999, 1 );
    }

    public function dt_nav( $tabs ) {

        // add pre zume menu
        array_unshift( $tabs['main'], [
            'link' => esc_url( site_url( '/course/' ) ),
            'label' => esc_html__( "Course", "zume" ),
        ]);
        array_unshift( $tabs['main'], [
            'link' => esc_url( site_url( '/about/' ) ),
            'label' => esc_html__( "About", "zume" ),
            'submenu' => [
                'vision' => [
                    'link' => esc_url( site_url( '/vision/' ) ),
                    'label' => esc_html__( "Vision", "zume" ),
                ],
                'guidebook'=> [
                    'link' => esc_url( site_url( '/vision/' ) ),
                    'label' => esc_html__( "Guidebook", "zume" ),
                ]
            ]
        ]);
        array_unshift( $tabs['main'], [
            'link' => esc_url( site_url( '/dashboard/' ) ),
            'label' => esc_html__( "Dashboard", "zume" ),
        ]);


        // swap logo
        $tabs['admin']['site']['icon'] =  trailingslashit( plugin_dir_url(__FILE__) ) . 'zume-training-logo.svg';


        // first training view
        if ( false ) {

            unset( $tabs['main']['contacts']);
            unset( $tabs['main']['groups']);
            unset( $tabs['main']['trainings']);
            unset( $tabs['main']['metrics']);

            unset( $tabs['admin']['notifications']);
            unset( $tabs['admin']['add_new']);
        }
        else if ( true ) {


//            unset( $tabs['main']['contacts']);
//            unset( $tabs['main']['groups']);
//            unset( $tabs['main']['trainings']);
//            unset( $tabs['main']['metrics']);

        }

        // movement view
        else if ( true ) {

        }




        return $tabs;
    }
}
Zume_Open_Navigation::instance();
