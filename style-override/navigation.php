<?php

class Zume_Training_Navigation
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
        add_action( 'dt_nav_add_post_settings', [ $this, 'view_list' ] );
    }

    public function dt_nav( $tabs ) {

        // swap logo
        $tabs['admin']['site']['icon'] =  trailingslashit( plugin_dir_url(__FILE__) ) . 'zume-training-logo.svg';

        $user_view = get_user_option('custom_user_view' );

        // first training view
        if ( 'first' === $user_view ) {

            unset( $tabs['main']['contacts']);
            unset( $tabs['main']['groups']);
            unset( $tabs['main']['trainings']);
            unset( $tabs['main']['metrics']);

            unset( $tabs['admin']['notifications']);
            unset( $tabs['admin']['add_new']);
            unset( $tabs['admin']['settings']['submenu']['help']);

        }
        else if ( 'multi' === $user_view ) {

            unset( $tabs['main']['metrics']);

            unset( $tabs['admin']['notifications']);
            unset( $tabs['admin']['add_new']);
            unset( $tabs['admin']['settings']['submenu']['help']);

        }
        else {
        // movement view removes nothing

        }

        array_unshift( $tabs['main'], [
            'link' => esc_url( site_url( '/dashboard/' ) ),
            'label' => esc_html__( "Home", "zume" ),
            'submenu' => [
                'home' => [
                    'link' => esc_url( site_url( '/dashboard/' ) ),
                    'label' => esc_html__( "Home", "zume" ),
                ],
                'Course' => [
                    'link' => esc_url( site_url( '/course/' ) ),
                    'label' => esc_html__( "Course", "zume" ),
                ],
                'guidebook'=> [
                    'link' => esc_url( site_url( '/vision/' ) ),
                    'label' => esc_html__( "Resources", "zume" ),
                ],
                'coach'=> [
                    'link' => esc_url( site_url( '/get-a-coach/' ) ),
                    'label' => esc_html__( "Get a Coach", "zume" ),
                ],
            ]
        ]);


        return $tabs;
    }

    public function view_list() {
        $user_views = [
            [
                'label' => 'First Training View',
                'link' => '',
                'value' => 'first'
            ],
            [
                'label' => 'Multi Training View',
                'link' => '',
                'value' => 'multi'
            ],
            [
                'label' => 'Movement View',
                'link' => '',
                'value' => 'movement'
            ],
        ];
        ?>
        <li>
            <button>
                <i class="fi-eye" style="color:white; background-color: #005a87; border-radius:10px;  font-size:2rem;"></i>
            </button>
            <ul class="submenu menu vertical">
                <?php
                foreach ( $user_views as $site ){
                    echo '<li><a class="user_view" data-value="'. esc_html( $site['value'] ) .'">'. esc_html( $site['label'] ) .'</a>';
                }
                ?>
            </ul>
        </li>
        <script>
            // add listeners
            jQuery(document).ready(function(){
                jQuery('.user_view').on('click', function(e){
                    makeRequest('POST', '/user_view', {'view': e.currentTarget.dataset.value}, 'zume-training/v1')
                        .done(function(data){
                            console.log('return')
                            console.log(data)

                            window.location.reload()
                        })
                })
            })
        </script>
        <?php
    }
}
Zume_Training_Navigation::instance();
