<?php
namespace EasyUIkit\Helpers;

class ScriptStyles {

    public function __construct() {
        
        add_action( 'wp_enqueue_scripts', __CLASS__ . '::easy_uikit_scripts_styles', 100, 1 );
    
        add_action( 'admin_enqueue_scripts', __CLASS__ . '::easy_uikit_admin_enqueue', 100, 1 );
    }

    
    /**
     * Enqueue script(s) and style(s)
     *
     */
    public static function easy_uikit_scripts_styles() {
        wp_enqueue_script( 'easy-uikitjs', EASYUIKIT_URL . 'js/uikit.min.js', false, EASYUIKIT_VERSION , false );
        wp_enqueue_script( 'easy-uikiticons', EASYUIKIT_URL . 'js/uikit-icons.min.js', false, EASYUIKIT_VERSION , false );
        wp_enqueue_style( 'easy-uikitcss', EASYUIKIT_URL . 'css/bbuikit.theme.min.css', false, EASYUIKIT_VERSION , 'all' );
    }
    
    /**
     * easy_uikit_admin_enqueue
     *
     * @return void
     */
    public static function easy_uikit_admin_enqueue() {
        // bail early if constant has been set
        // alternatively script can be removed from the queue
        if (defined( 'EASYUIKIT_ADMIN_ENQUEUE' ) && EASUIKIT_ADMIN_ENQUEUE === false ) return;

        self::easy_uikit_scripts_styles();
    }
    
}