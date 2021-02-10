<?php
/**
 * Plugin Name: Zúme Training for Disciple Tools
 * Plugin URI: https://github.com/ZumeProject/zume-training-for-disciple-tools
 * Description: Zúme Training for Disciple Tools opens self registration to Zume Training users and custom views.
 * Text Domain: zume
 * Domain Path: /languages
 * Version:  1.4
 * Author URI: https://github.com/ZumeProject
 * GitHub Plugin URI: https://github.com/ZumeProject/zume-training-for-disciple-tools
 * Requires at least: 4.7.0
 * (Requires 4.7+ because of the integration of the REST API at 4.7 and the security requirements of this milestone version.)
 * Tested up to: 5.6
 *
 * @package Disciple_Tools
 * @link    https://github.com/ZumeProject
 * @license GPL-2.0 or later
 *          https://www.gnu.org/licenses/gpl-2.0.html
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

/**
 * Gets the instance of the `Zume_Training` class.
 *
 * @since  0.1
 * @access public
 * @return object|bool
 */
function zume_training() {
    $zume_training_required_dt_theme_version = '1.0';
    $wp_theme = wp_get_theme();
    $version = $wp_theme->version;

    /*
     * Check if the Disciple.Tools theme is loaded and is the latest required version
     */
    $is_theme_dt = strpos( $wp_theme->get_template(), "disciple-tools-theme" ) !== false || $wp_theme->name === "Disciple Tools";
    if ( $is_theme_dt && version_compare( $version, $zume_training_required_dt_theme_version, "<" ) ) {
        return false;
    }
    if ( !$is_theme_dt ){
        return false;
    }
    /**
     * Load useful function from the theme
     */
    if ( !defined( 'DT_FUNCTIONS_READY' ) ){
        require_once get_template_directory() . '/dt-core/global-functions.php';
    }

    /*
     * Don't load the plugin on every rest request. Only those with the 'sample' namespace
     */
    $is_rest = dt_is_rest();
    if ( ! $is_rest ){
        return Zume_Training::instance();
    }
    else if ( strpos( dt_get_url_path(), 'metrics' ) !== false || ( $is_rest && strpos( dt_get_url_path(), 'zume-training' ) !== false ) ){
        return Zume_Training::instance();
    }
    else if ( strpos( dt_get_url_path(), 'zume_training_template' ) !== false ) {
        return Zume_Training::instance();
    }
    else if ( strpos( dt_get_url_path(), 'zume_training_post_type' ) !== false) {
        return Zume_Training::instance();
    }
    return false;
}
add_action( 'after_setup_theme', 'zume_training', 20 );

/**
 * Singleton class for setting up the plugin.
 *
 * @since  0.1
 * @access public
 */
class Zume_Training {

    private static $_instance = null;
    public static function instance() {
        if ( is_null( self::$_instance ) ) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    private function __construct() {

        require_once( 'frontpage/frontpage.php' );

        // override DT styles
        require_once( 'style-override/navigation.php' );
        require_once( 'style-override/style-override.php' );

        require_once( 'rest-api/rest-api.php' );

        add_action( 'after_setup_theme', array( $this, 'i18n' ), 51 ); // adds internationalize the text strings used.
    }

    /**
     * Method that runs only when the plugin is activated.
     *
     * @since  0.1
     * @access public
     * @return void
     */
    public static function activation() {
    }

    /**
     * Method that runs only when the plugin is deactivated.
     *
     * @since  0.1
     * @access public
     * @return void
     */
    public static function deactivation() {
        delete_option( 'dismissed-zume-training' );
    }

    /**
     * Loads the translation files.
     *
     * @since  0.1
     * @access public
     * @return void
     */
    public function i18n() {
        //Take from loadTextDomain() in /disciple-tools-theme/dt-core/libraries/plugin-update-checker/Puc/v4p5/UpdateChecker.php
        $domain = 'zume'; // this must be the same as the slug for the plugin
        $locale = apply_filters(
            'plugin_locale',
            ( is_admin() && function_exists( 'get_user_locale' ) ) ? get_user_locale() : get_locale(),
            $domain
        );

        $mo_file = $domain . '-' . $locale . '.mo';
        $path = realpath( dirname( __FILE__ ) . '/languages' );

        if ($path && file_exists( $path )) {
            load_textdomain( $domain, $path . '/' . $mo_file );
        }
    }

    /**
     * Magic method to output a string if trying to use the object as a string.
     *
     * @since  0.1
     * @access public
     * @return string
     */
    public function __toString() {
        return 'zume-training-for-disciple-tools';
    }

    /**
     * Magic method to keep the object from being cloned.
     *
     * @since  0.1
     * @access public
     * @return void
     */
    public function __clone() {
        _doing_it_wrong( __FUNCTION__, 'Whoah, partner!', '0.1' );
    }

    /**
     * Magic method to keep the object from being unserialized.
     *
     * @since  0.1
     * @access public
     * @return void
     */
    public function __wakeup() {
        _doing_it_wrong( __FUNCTION__, 'Whoah, partner!', '0.1' );
    }

    /**
     * Magic method to prevent a fatal error when calling a method that doesn't exist.
     *
     * @param string $method
     * @param array $args
     * @return null
     * @since  0.1
     * @access public
     */
    public function __call( $method = '', $args = array() ) {
        _doing_it_wrong( "zume_training::" . esc_html( $method ), 'Method does not exist.', '0.1' );
        unset( $method, $args );
        return null;
    }
}
