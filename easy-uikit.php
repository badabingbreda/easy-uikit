<?php
/**
 Plugin Name: Easy UIkit
 Plugin URI: https://www.beaverplugins.com/docs/easy-uikit/
 Description: Easy UIKit adds the UIkit3 library to the queue so you can use it even when changing themes. Current UIkit version is 3.1.6.
 Version: 1.3.2
 Author: Didou Schol
 Text Domain: easy-uikit
 Domain Path: /languages
 Author URI: https://www.badabing.nl
 */

define( 'EASYUIKIT_VERSION' 	, '1.3.2' );
define( 'EASYUIKIT_DIR'			, plugin_dir_path( __FILE__ ) );
define( 'EASYUIKIT_FILE'		, __FILE__ );
define( 'EASYUIKIT_URL' 		, plugins_url( '/', __FILE__ ) );

add_action( 'wp_enqueue_scripts', 'easy_uikit_scripts_styles', 99, 1 );

/**
 * Enqueue script(s) and style(s)
 *
 */
function easy_uikit_scripts_styles() {
	wp_enqueue_script( 'easy-uikitjs', EASYUIKIT_URL.'/js/uikit.min.js', false, EASYUIKIT_VERSION , false );
	wp_enqueue_script( 'easy-uikiticons', EASYUIKIT_URL.'/js/uikit-icons.min.js', false, EASYUIKIT_VERSION , false );
	wp_enqueue_style( 'easy-uikitcss', EASYUIKIT_URL.'/css/bbuikit.theme.min.css', false, EASYUIKIT_VERSION , 'all' );
}

/**
 * Load the Github Updater
 */
if( ! class_exists( 'github_updater' ) ){
	include_once( EASYUIKIT_DIR . '/classes/class-github-updater.php' );
}

$updater = new github_updater( EASYUIKIT_FILE );
$updater->set_username( 'badabingbreda' );
$updater->set_repository( 'easy-uikit' );
$updater->set_settings( array(
			'requires'			=> '4.6',
			'tested'			=> '5.2.2',
			'rating'			=> '100.0',
			'num_ratings'		=> '10',
			'downloaded'		=> '10',
			'added'				=> '2019-04-06',
		) );
$updater->initialize();
