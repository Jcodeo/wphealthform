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

define( "WPHEALTHFORM_PATH", plugin_dir_path( __FILE__ ));
define( "WPHEALTHFORM_URL", plugin_dir_url( __FILE__ ) );

if ( ! class_exists( 'WpHealthForm' ) ) {
    class WpHealthForm
    {
        public function __construct() {

        }
        public function activate() {
            
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
            add_shortcode( 'wp_health_form_woman', [ $this, 'generate_shortcode_woman' ] );
            add_shortcode( 'wp_health_form_man', [ $this, 'generate_shortcode_man' ] );
        }
        public function generate_shortcode_woman() {
            ob_start();
            require_once( WPHEALTHFORM_PATH . 'templates/front/healthformwoman.php');
            return ob_get_clean();
        }
        public function generate_shortcode_man() {
            ob_start();
            require_once( WPHEALTHFORM_PATH . 'templates/front/healthformman.php');
            return ob_get_clean();
        }
        public function create_table()  {
            global $wpdb;
            $healthTableMan = $wpdb->prefix . 'wphealthformman';
            $healthTableWoman = $wpdb->prefix . 'wphealthformwoman';
            $wquery = "
            CREATE TABLE $healthTableWoman(
                id int (10) NOT NULL AUTO_INCREMENT,
                nom varchar (100) DEFAULT '',
                email varchar (100) DEFAULT '',
                adresse1 varchar (100) DEFAULT '',
                adresse2 varchar (100) DEFAULT '',
                PRIMARY KEY (id)
            )";
            $mquery = "
            CREATE TABLE $healthTableMan(
                id int (10) NOT NULL AUTO_INCREMENT,
                nom varchar (100) DEFAULT '',
                email varchar (100) DEFAULT '',
                adresse1 varchar (100) DEFAULT '',
                adresse2 varchar (100) DEFAULT '',
                PRIMARY KEY (id)
            )";
            require_once( ABSPATH . "wp-admin/includes/upgrade.php" );
            dbDelta( $wquery, true );
            dbDelta( $mquery, true );
        }

        public function register_admin_menu() {
            add_action( 'admin_menu', [ $this, 'admin_menu' ] );
        }
        public function admin_menu() {
            add_menu_page( 'WP Health Form', 'WP Health Form', 'manage_options', 'wp-health-form', [ $this, 'health_form_settings' ],'dashicons-table-col-before', 40 );
            add_submenu_page( 'wp-health-form', 'Configuration du module', 'Configuration', 'manage_options', 'wp-health-form', [ $this, 'health_form_settings' ] );
            add_submenu_page( 'wp-health-form', 'Liste de sondage pour les femmes', 'Sondage femmes', 'manage_options', 'liste-sondage-femmes', [ $this, 'health_form_woman_list_call' ] );
            add_submenu_page( 'wp-health-form', 'Liste de sondage pour les hommes', 'Sondage hommes', 'manage_options', 'liste-sondage-hommes', [ $this, 'health_form_man_list_call' ] );
        }
        public function health_form_settings() {
            require_once( WPHEALTHFORM_PATH . 'templates/back/healthform-settings.php');
        }
        public function health_form_woman_list_call() {
            require_once( WPHEALTHFORM_PATH . 'templates/back/healthformwoman-list.php');
        }
        public function health_form_man_list_call() {
            require_once( WPHEALTHFORM_PATH . 'templates/back/healthformman-list.php');
        }        
        
        public function register_settings() {
            add_action( 'admin_init', [ $this, 'save_config' ] );
        }
        public function save_config() {
            register_setting( 'healthformsetting', 'setting1' );
            register_setting( 'healthformsetting', 'setting2' );
            register_setting( 'healthformsetting', 'setting3' );
        }
        

    }
    $wpHealthForm = new WpHealthForm();
    $wpHealthForm->register_assets();
    $wpHealthForm->register_shortcode();
    $wpHealthForm->create_table();
    $wpHealthForm->register_admin_menu();
    $wpHealthForm->register_settings();


    register_activation_hook( __FILE__, [$wpHealthForm, 'activate'] ); 
    register_deactivation_hook( __FILE__,[$wpHealthForm, 'deactivate'] );
}