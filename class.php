<?php

class wubook {

	function __construct() {

		$this->version = "1.0";

	}

	function saved( $message ) {
		?>
		<div class="updated notice">
			<p>
				<?php echo $message; ?>
				<a href="<?php echo admin_url();?>admin.php?page=wb_settings" class="wb_back">
		<i class="fa fa-chevron-circle-left" aria-hidden="true"></i> <?php echo __( 'Back', 'wubook' );?>
		</a>
			



			</p>
		</div> 
		<?php
	}

	function save() {
		
		$code_s = $_POST[ 'code_s' ];

		if ( $_POST[ 'bwposition' ] == 'yes' ) {
			$bwposition = 1;
		} else {
			$bwposition = 0;
		}
		$bwditextcolor = $_POST[ 'bwditextcolor' ];
		$bwavgcolor = $_POST[ 'bwavgcolor' ];
		$bwtextcolorbb = $_POST[ 'bwtextcolorbb' ];
		if ( $_POST[ 'bwplusperc' ] == 'yes' ) {
			$bwplusperc = 1;
		} else {
			$bwplusperc = 0;
		}
		$bwlisttypebb = $_POST[ 'bwlisttypebb' ];

		$rpkgs = ',' . $_POST[ 'pkg_6869' ] . ',' . $_POST[ 'pkg_1286' ] . ',' . $_POST[ 'pkg_1287' ] . ',';
		$rpkgs = str_replace( ",,", ",", $rpkgs );
		$rpkgs = substr( $rpkgs, 0, -1 );
		if ( $rpkgs == ',' ) {
			$rpkgs = '';
		}
		$rpkgs = substr( $rpkgs, 1 );
		$rpkgs = base64_encode( $rpkgs );

		$bwbg = $_POST[ 'bwbg' ];
		$bwcustom_url = $_POST[ 'bwcustom_url' ];
		$bwtextcolorpk = $_POST[ 'bwtextcolorpk' ];
		$bwdfn = $_POST[ 'bwdfn' ];
		$bwtextcolorcalendarbe = $_POST[ 'bwtextcolorcalendarbe' ];
		$bwborder = $_POST[ 'bwborder' ];

		$blocks = ',' . substr( $_POST[ 'wb_list' ], 0, -1 );
		if ( !$_POST[ 'be' ] ) {
			$blocks = str_replace( "be", "", $blocks );
		}
		if ( !$_POST[ 'pk' ] ) {
			$blocks = str_replace( "pk", "", $blocks );
		}
		if ( !$_POST[ 'fe' ] ) {
			$blocks = str_replace( "fe", "", $blocks );
		}
		if ( !$_POST[ 'bb' ] ) {
			$blocks = str_replace( "bb", "", $blocks );
		}
		if ( !$_POST[ 'di' ] ) {
			$blocks = str_replace( "di", "", $blocks );
		}

		$blocks = str_replace( ",,", ",", $blocks );
		$blocks = str_replace( ",,", ",", $blocks );

		if ( $blocks {
				strlen( $blocks ) - 1
			} == ',' ) {
			$blocks = substr( $blocks, 0, -1 );
		}

		$blocks = substr( $blocks, 1 );

		$bwflang = $_POST[ 'bwflang' ];
		$bwhdcode = $_POST[ 'bwhdcode' ];
		$bwtextcolorbuttonbe = $_POST[ 'bwtextcolorbuttonbe' ];
		$bwavgtextcolor = $_POST[ 'bwavgtextcolor' ];
		$bwdiinputcolor = $_POST[ 'bwdiinputcolor' ];
		$bwlang = $_POST[ 'bwlang' ];
		$bwbuttoncolorbe = $_POST[ 'bwbuttoncolorbe' ];
		$bwdibuttoncolor = $_POST[ 'bwdibuttoncolor' ];
		if ( $_POST[ 'bwgoogle' ] == 'yes' ) {
			$bwgoogle = 1;
		} else {
			$bwgoogle = 0;
		}
		$bwbgblocks = $_POST[ 'bwbgblocks' ];

		$cmsgs = ',' . substr( $_POST[ 'wb_list2' ], 0, -1 );
		if ( !$_POST[ 'sc_1' ] ) {
			$cmsgs = str_replace( "1", "", $cmsgs );
		}
		if ( !$_POST[ 'sc_2' ] ) {
			$cmsgs = str_replace( "2", "", $cmsgs );
		}
		if ( !$_POST[ 'sc_3' ] ) {
			$cmsgs = str_replace( "3", "", $cmsgs );
		}
		if ( !$_POST[ 'sc_4' ] ) {
			$cmsgs = str_replace( "4", "", $cmsgs );
		}
		if ( !$_POST[ 'sc_5' ] ) {
			$cmsgs = str_replace( "5", "", $cmsgs );
		}
		if ( !$_POST[ 'sc_6' ] ) {
			$cmsgs = str_replace( "6", "", $cmsgs );
		}
		if ( !$_POST[ 'sc_7' ] ) {
			$cmsgs = str_replace( "7", "", $cmsgs );
		}

		$cmsgs = str_replace( ",,", ",", $cmsgs );
		$cmsgs = str_replace( ",,", ",", $cmsgs );
		$cmsgs = str_replace( ",,", ",", $cmsgs );

		if ( $cmsgs {
				strlen( $cmsgs ) - 1
			} == ',' ) {
			$cmsgs = substr( $cmsgs, 0, -1 );
		}

		if ( $cmsgs == ',' ) {
			$cmsgs = '';
		}
		$cmsgs = substr( $cmsgs, 1 );

		$cmsgs = base64_encode( $cmsgs );

		$bwtextcolornightspk = $_POST[ 'bwtextcolornightspk' ];
		if ( $_POST[ 'bwadchi' ] == 'yes' ) {
			$bwadchi = 1;
		} else {
			$bwadchi = 0;
		}

		$js .= "fixedPosition: " . $bwposition . ",";

		$js .= "ditextcolor: '" . $bwditextcolor . "',";

		$js .= "avgcolor: '" . $bwavgcolor . "',";

		$js .= "textcolorbb: '" . $bwtextcolorbb . "',";

		$js .= "plusperc: " . $bwplusperc . ",";

		$js .= "listtypebb: '" . $bwlisttypebb . "',";

		$js .= "rpkgs: '" . $rpkgs . "',";

		$js .= "barbackground: '" . $bwbg . "',";

		$js .= "openParams: '" . $bwcustom_url . "',";

		$js .= "textcolorpk: '" . $bwtextcolorpk . "',";

		$js .= "default_nights: " . $bwdfn . ",";

		$js .= "textcolorcalendarbe: '" . $bwtextcolorcalendarbe . "',";

		$js .= "bordercolor: '" . $bwborder . "',";

		$js .= "blocks: '" . $blocks . "',";

		$js .= "failback_lang: '" . $bwflang . "',";

		$js .= "hdcode: '" . $bwhdcode . "',";

		$js .= "textcolorbuttonbe: '" . $bwtextcolorbuttonbe . "',";

		$js .= "avgtextcolor: '" . $bwavgtextcolor . "',";

		$js .= "diinputcolor: '" . $bwdiinputcolor . "',";

		$js .= "lang: '" . $bwlang . "',";

		$js .= "buttoncolorbe: '" . $bwbuttoncolorbe . "',";

		$js .= "dibuttoncolor: '" . $bwdibuttoncolor . "',";

		$js .= "wbgoogle: " . $bwgoogle . ",";

		$js .= "bgblocks: '" . $bwbgblocks . "',";

		$js .= "cmsgs: '" . $cmsgs . "',";

		$js .= "textcolornightspk: '" . $bwtextcolornightspk . "',";

		$js .= "adchi: " . $bwadchi;

		update_option( 'wubook_widget', $js );
		
		update_option( 'wubook_widget_code', $code_s );

	}

}

?>