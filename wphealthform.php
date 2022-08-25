<?php
/**
 * @package WpHealthForm
 */
/*
Plugin Name: WP Health Form
Plugin URI: #
Description: Ce plugin permet d'ajouter un formulaire de santé permettant d'obtenir un sondage auprès des internautes.
Version: 1.0
Author: Harson Jr
Author URI: https://www.linkedin.com/in/harson-joro-jr007/
Licence: GPLv2 or later
Text Domain: wphealthform
*/

defined( 'ABSPATH' ) or die( "Unfortunately I can't do nothing when I'm called directly T_T" );



if ( ! class_exists( 'WpHealthForm' ) ) {
    class WpHealthForm
    {
        public function __construct() {

        }

        public function activate() {
            echo 'activate';
        }

        public function deactivate() {

        }

        public function register_assets() {
            add_action( 'wp_enqueue_scripts', [ $this, 'enqueue_front' ] );
        }

        public function enqueue_front() {
            wp_enqueue_style( 'wphealthform-style', plugins_url( 'assets/css/wphealthform.css', __FILE__ ), [], time(), 'all' );
            wp_enqueue_script( 'wphealthform-script', plugins_url( 'assets/js/wphealthform.js', __FILE__ ), ['jquery'], time(), true );
        }

    }

    $wpHealthForm = new WpHealthForm();
    $wpHealthForm->register_assets();

    register_activation_hook( __FILE__, [$wpHealthForm, 'activate'] );

    register_deactivation_hook( __FILE__,[$wpHealthForm, 'deactivate'] );
}