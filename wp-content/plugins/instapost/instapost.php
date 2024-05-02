<?php
/**
 * Instapost
 *
 * Plugin Name: Instapost
 * Plugin URI:  https://wordpress.org/
 * Description: Enables the WordPress to retrieve recent post from instagram.
 * Version:     1.6.3
 * Author:      Stephen Anino
 * Author URI:  https://github.com/WordPress/classic-editor/
 * Text Domain: Instapost
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if (! class_exists( 'Instapost' )) {
	class Instapost {

		public function initialize() {
			$this->define( 'PLUGIN_NAME', 'Instapost' );
			$this->define( 'INSTAPOST', true );
			$this->define( 'INSTAPOST_PATH', plugin_dir_path( __FILE__ ) );
			$this->define( 'INSTAPOST_BASENAME', plugin_basename( __FILE__ ) );
			$this->define( 'INSTAPOST_URL', plugin_dir_url(__DIR__) . 'instapost/' );

			add_action( 'admin_menu', array( $this, 'register_settings_types' ), 1 );
			add_action('admin_enqueue_scripts', array($this, 'instapost_scripts'), 2);
			add_action('wp_ajax_save_insta', array($this, 'save_insta'), 3);
		}

		public function instapost_scripts() {
			wp_enqueue_script('Instapost_script', INSTAPOST_URL . 'assets/js/instapost-script.js', array('jquery'), '0.28.0', true);
			wp_localize_script('Instapost_script', 'ajaxurl', admin_url('admin-ajax.php'));
		}

		public function register_settings_types() {
			add_menu_page(
				PLUGIN_NAME,          // Page title
				PLUGIN_NAME,          // Menu title
				'manage_options',          // Capability required to access the page
				'instapost',     // Menu slug (unique identifier)
				array($this, 'instapost_callback')  // Callback function to render the page content
			);
		}

		public function instapost_callback() {
			include(INSTAPOST_PATH.'/includes/Title.php');
			include(INSTAPOST_PATH.'/includes/form.php');
		}

		public function define( $name, $value = true ) {
			if ( ! defined( $name ) ) {
				define( $name, $value );
			}
		}

		public function save_insta() {
			check_ajax_referer('save_insta_nonce', 'security');

			//$post_id = isset($_POST['post_id']) ? intval($_POST['post_id']) : 0;

			$api = sanitize_text_field($_POST['instaApi']);
			$username = sanitize_text_field($_POST['instaUsername']);
			$frequency = sanitize_text_field($_POST['insta_frequency']);

			update_post_meta(222, 'insta_api', $api);
			update_post_meta(222, 'insta_username', $username);
			update_post_meta(222, 'insta_frequency', $frequency);
			wp_send_json_success('Successfully Save');
		}
	}

	if (! function_exists('InstaInit')) {

		function InstaInit () {
			$insta = new Instapost();
			$insta->initialize();
		}

		InstaInit();
	}
}