<?php

class Zume_Training_Pages_Loader
{
    private static $_instance = null;
    public static function instance()
    {
        if (is_null(self::$_instance)) {
            self::$_instance = new self();
        }
        return self::$_instance;
    } // End instance()

    public function __construct()
    {
        add_action("template_redirect", [$this, 'theme_redirect']);
    }

    public function theme_redirect()
    {
        $url = dt_get_url_path();
        $plugin_dir = dirname(__FILE__);

        if (strpos($url, "zume-about") !== false) {
            $path = $plugin_dir . '/template-zume-about.php';
            include($path);
            die();
        }

        if (strpos($url, "zume-map") !== false) {
            $path = $plugin_dir . '/template-zume-map.php';
            include($path);
            die();
        }

        if (strpos($url, "zume-news") !== false) {
            $path = $plugin_dir . '/template-zume-news.php';
            include($path);
            die();
        }

    }
}

Zume_Training_Pages_Loader::instance();
