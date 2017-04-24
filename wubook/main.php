<?php

/**
 * Plugin Name: WuBook widget ( MultiWidget )
 * Plugin URI: http://wordpress.org/plugins/wubook/
 * Description: WuBook widget is a tool for pre-ordering hotels directly on your website
 * Version: 1.0
 * Author: WuBook
 * Author URI: http://wubook.net/
 */

if ( !defined( "WPINC" ) ) { die( "WuBook" ); }

function wb_($file){ require_once WP_PLUGIN_DIR . '/wubook/' . $file; }

add_action( 'plugins_loaded', 'wubook_init' );
add_action( 'admin_menu', 'wb_menu' );
add_action( 'admin_enqueue_scripts', 'wb_scripts' );

add_shortcode( 'wubook', 'wb_shortcode' );

register_activation_hook( __FILE__, 'wb_active' );
register_deactivation_hook( __FILE__, 'wb_disable' );

wb_('lang.php');
wb_('admin.php');
wb_('front.php');
wb_('class.php');
wb_('func.php');	

?>