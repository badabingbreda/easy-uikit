<?php
 /**
  * Easy UIkit
  *
  * @package     Easy UIkit
  * @author      Badabingbreda
  * @license     GPL-2.0+
  *
  * @wordpress-plugin
  * Plugin Name: Easy UIkit
  * Plugin URI:  https://www.beaverplugins.com/docs/easy-uikit/
  * Description: Easy UIKit adds the UIkit3 library (v3.15.9) Flex classes are tweaked to work with Beaver Builder Columns. Also adds AlexVolsk uk-width-ex and uk-grid-ex for extra column support (12 columns)
  * Version:     2.0.0
  * Author:      Badabingbreda
  * Author URI:  https://www.badabing.nl
  * Text Domain: easy-uikit
  * Domain Path: /languages
  * License:     GPL-2.0+
  * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
  */
 
use EasyUIkit\Autoloader;
use EasyUIkit\Init;

if ( defined( 'ABSPATH' ) && ! defined( 'EASYUIKIT_VERION' ) ) {
	register_activation_hook( __FILE__, 'EASYUIKIT_check_php_version' );

	/**
		* Display notice for old PHP version.
		*/
	function EASYUIKIT_check_php_version() {
		if ( version_compare( phpversion(), '5.6', '<' ) ) {
			die( esc_html__( 'Easy UIkit requires PHP version 5.6+. Please contact your host to upgrade.', 'easy-uikit' ) );
		}
	}

    define( 'EASYUIKIT_VERSION'   , '2.0.0' );
    define( 'EASYUIKIT_DIR'     , plugin_dir_path( __FILE__ ) );
    define( 'EASYUIKIT_FILE'    , __FILE__ );
    define( 'EASYUIKIT_URL'     , plugins_url( '/', __FILE__ ) );

    define( 'CHECK_EASYUIKIT_PLUGIN_FILE', __FILE__ );

  }

if ( ! class_exists( 'EasyUIkit\Init' ) ) {

	/**
	 * The file where the Autoloader class is defined.
	 */
	require_once 'inc/Autoloader.php';
	spl_autoload_register( array( new Autoloader(), 'autoload' ) );

	$easyuikit = new Init();
 
}