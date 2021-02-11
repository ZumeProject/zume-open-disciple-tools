<?php

/**
 * Zúme style override
 */
add_action( 'wp_head', function(){
    ?>
    <style>
        body {
            background-color: white !important;
        }
        .top-bar a {
            color: #323A68;
        }
        .top-bar .active a {
            color: white;
        }
        .top-bar {
            background-color: white;
        }
        .top-bar-menu {
            border-bottom: 1px solid #323A68 !important;
        }
        .top-bar, .top-bar ul {
            background-color: white;
        }
        #top-bar-menu .dropdown.menu .image-menu-nav  {
            background-color: white ;
        }
        #top-bar-menu .dropdown.menu a  {
            /*background-color: white;*/
        }
        #top-bar-menu .has-submenu.center-items.is-dropdown-submenu-parent button img {
            background-color: #323A68;
            border-radius: 20px;
        }
        #top-bar-menu .image-menu-nav a img {
            background-color: #323A68;
            border-radius: 20px;
        }

        #top-bar-menu .dropdown.menu li a {
            background-color: white;
        }
        #top-bar-menu ul.dropdown.menu li.active a {
            background-color: #323A68 ;
        }
        #top-bar-menu ul.dropdown.menu li.active li.is-dropdown-submenu-item a {
            background-color: white;
            color: #323A68;
        }
        .menu ul {
            list-style: none;
            list-style-position: outside;
            list-style-type: none;
        }
    </style>
    <?php
}, 1000 );
