<?php

function wb_menu() {

	add_menu_page(
		'WuBook MW > ',
		'WuBook MW',
		'manage_options',
		'wb_settings',
		'wb_settings',
		plugins_url( 'i/icon.png', __FILE__ ),
		10 );

}

function wb_scripts() {

	wp_enqueue_style( 'wb_css', plugins_url( 'css/admin.css', __FILE__ ) );

	wp_enqueue_script( 'wb_jmin', plugins_url( 'js/jquery.min.js', __FILE__ ) );

	wp_enqueue_script( 'wb_jui', plugins_url( 'js/jquery-ui.min.js', __FILE__ ) );

	wp_enqueue_script( 'wb_js', plugins_url( 'js/admin.js', __FILE__ ) );

}

function wb_active() {

	$ch = curl_init();
	curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, TRUE );
	curl_setopt( $ch, CURLOPT_VERBOSE, true);
	curl_setopt( $ch, CURLOPT_USERAGENT, 'WUBOOK WORDPRESS' );
	curl_setopt( $ch, CURLOPT_ENCODING, "gzip" );
	curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1 );
	curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1 );
	curl_setopt( $ch, CURLOPT_HEADER, false );
	curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, true );
	curl_setopt( $ch, CURLOPT_URL, 'https://wubook.net/js/wblib.jgz' );
	curl_setopt( $ch, CURLOPT_REFERER, 'https://wubook.net/js/wblib.jgz' );
	curl_setopt( $ch, CURLOPT_RETURNTRANSFER, TRUE );
	$wblib = curl_exec( $ch );
	curl_close( $ch );

	update_option( 'wubook_javascript', $wblib );

	$js = "fixedPosition: 1,ditextcolor: '#ffffff',avgcolor: '#988454',textcolorbb: '#ffffff',plusperc: 5,listtypebb: '#ffffff',rpkgs: '',barbackground: 'rgb(0, 0, 0)',textcolorpk: '#988454',default_nights: 3,textcolorcalendarbe: '#988454',bordercolor: '#988454',blocks: 'be,fe,bb,di',failback_lang: 'en',hdcode: '',textcolorbuttonbe: '#ffffff',avgtextcolor: '#ffffff',lang: '',buttoncolorbe: '#1c375b',dibuttoncolor: '#008000',wbgoogle: 1,bgblocks: '#000000',cmsgs: 'MSwyLDM=',textcolornightspk: '#ffffff',adchi: 1";

	update_option( 'wubook_widget', $js );

	wp_clear_scheduled_hook( 'wb_cache_js' );

	wp_schedule_event( time(), 'monthly', 'wb_cache_js' );

}

function wb_disable() {
	wp_clear_scheduled_hook( 'wb_cache_js' );
}

if ( defined( 'DOING_CRON' ) && DOING_CRON ) {
	add_action( 'wb_cache_js', 'wb_cache_update' );

	function wb_cache_update() {

		$ch = curl_init();
		curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, TRUE );
		curl_setopt( $ch, CURLOPT_VERBOSE, true);
		curl_setopt( $ch, CURLOPT_USERAGENT, 'WUBOOK WORDPRESS' );
		curl_setopt( $ch, CURLOPT_ENCODING, "gzip" );
		curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1 );
		curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1 );
		curl_setopt( $ch, CURLOPT_HEADER, false );
		curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, true );
		curl_setopt( $ch, CURLOPT_URL, 'https://wubook.net/js/wblib.jgz' );
		curl_setopt( $ch, CURLOPT_REFERER, 'https://wubook.net/js/wblib.jgz' );
		curl_setopt( $ch, CURLOPT_RETURNTRANSFER, TRUE );
		$wblib = curl_exec( $ch );
		curl_close( $ch );

		update_option( 'wubook_javascript', $wblib );

	}

}

?>