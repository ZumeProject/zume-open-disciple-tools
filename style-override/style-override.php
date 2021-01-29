<?php

add_action( 'wp_head', function(){
    ?>
    <style>
        /* DT Overrides */
        body {
            background-color: white !important;
        }
        .top-bar a {
            color: #323A68 !important;
        }
        .top-bar .active a {
            color: white !important;
        }
        .top-bar {
            background-color: white !important;
        }
        .top-bar-menu {
            border-bottom: 1px solid #323A68 !important;
        }
        .top-bar, .top-bar ul {
            background-color: white !important;
        }
        #top-bar-menu .dropdown.menu .image-menu-nav  {
            background-color: white !important;
        }
        #top-bar-menu .dropdown.menu a  {
            background-color: white !important;
        }
        #top-bar-menu .has-submenu.center-items.is-dropdown-submenu-parent button img {
            background-color: #323A68;
            border-radius: 20px;
        }
        #top-bar-menu .image-menu-nav a img {
            background-color: #323A68;
            border-radius: 20px;
        }
    </style>
    <script>
        jQuery(document).ready(function(){

        })
    </script>
    <?php
}, 1000 );

add_filter( 'dt_default_logo', function(){
    $url = trailingslashit( plugin_dir_url(__FILE__) ) . 'zume-training-logo.svg';
    return $url;
} );
