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
            wp_enqueue_style( 'bootstrap' , plugins_url( 'assets/css/libs/bootstrap.min.css', __FILE__ ), [], '4.5.3', 'all' );
            wp_enqueue_style( 'wphealthform-style', plugins_url( 'assets/css/wphealthform.css', __FILE__ ), [], time(), 'all' );
            wp_enqueue_script( 'wphealthform-script', plugins_url( 'assets/js/wphealthform.js', __FILE__ ), ['jquery'], time(), true );
        }

        public function register_shortcode() {
            add_shortcode( 'wp_health_form', [ $this, 'generate_shortcode' ] );
        }
        public function generate_shortcode() {
            ob_start();
            require_once(plugin_dir_path( __FILE__ ) . 'templates/front/healthform.php');
            return ob_get_clean();
        }

        public function create_table()  {
            global $wpdb;
            $healthTable = $wpdb->prefix . 'wphealthform';
            
            $query = "
            CREATE TABLE $healthTable(
                id int (10) NOT NULL AUTO_INCREMENT,
                nom varchar (100) DEFAULT '',
                email varchar (100) DEFAULT '',
                adresse1 varchar (100) DEFAULT '',
                adresse2 varchar (100) DEFAULT '',
                PRIMARY KEY (id)
            )";
            require_once( ABSPATH . "wp-admin/includes/upgrade.php" );
            dbDelta( $query, true );
        }
    }

    $wpHealthForm = new WpHealthForm();
    $wpHealthForm->register_assets();
    $wpHealthForm->register_shortcode();
    $wpHealthForm->create_table();

    register_activation_hook( __FILE__, [$wpHealthForm, 'activate'] );

    register_deactivation_hook( __FILE__,[$wpHealthForm, 'deactivate'] );
}