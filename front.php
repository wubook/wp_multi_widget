<?php

function wb_shortcode() {

	?>

	<script>
    <?php
	echo get_option('wubook_javascript');
	?>
    </script>
    
	<div id="_baror_">
		<a href="http://wubook.net" style="display: block; margin-top: 5px; text-decoration:none;border:none;" target="_blank">
                <img src="<?php echo plugins_url( 'i/booking_by_wu.gif', __FILE__ );?>" alt="Zak PMS" title="Soluzioni per la gestione Hotel" style="border:none;text-decoration:none;" />
            </a>
	


	</div>
	<script>
		var WuBook = new _WuBook( <?php echo get_option( 'wubook_widget_code' );?> );
		var wbparams = {
			<?php echo get_option( 'wubook_widget' );?>
		};
		WuBook.design_bwidget( "_baror_", wbparams );
	</script>

	<?php

}

?>