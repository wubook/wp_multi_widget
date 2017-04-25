<?php

function wubook_init() {

	if ( $_POST[ 'wb_lang' ] ) {
		unset( $_COOKIE[ 'wb_lang' ] );
		$lang = $_POST[ 'wb_lang' ];
		setcookie( "wb_lang", $lang, time() + ( 86400 * 30 ), "/" );
		load_textdomain( 'wubook', WP_PLUGIN_DIR . '/wp_multi_widget-master/lang/wubook-' . $lang . '.mo' );
	} else {

		$lang = $_COOKIE[ 'wb_lang' ];

		if ( $lang == '' ) {
			load_textdomain( 'wubook', WP_PLUGIN_DIR . '/wp_multi_widget-master/lang/wubook-en_US.mo' );
		} else {
			load_textdomain( 'wubook', WP_PLUGIN_DIR . '/wp_multi_widget-master/lang/wubook-' . $lang . '.mo' );
		}

	}

}


?>
