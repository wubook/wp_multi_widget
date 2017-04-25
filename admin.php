<?php

function wb_settings() {

	$wb = new wubook;

	if ( $_POST[ 'save' ] ) {

		$wb->save();
		$wb->saved( __( 'Widget settings successfully saved!', 'wubook' ) );

	}

	?>

	<div class="wrap">
		<h2><i class="fa fa-bed" aria-hidden="true"></i> <?php echo __( 'WuBook widget', 'wubook' );?> ( <?php echo __( 'MultiWidget', 'wubook' );?> )</h2>

		<div class="wb_block" style="width: 65%;margin-right: 5%;">

			<?php

			if ( $_GET[ 'edit' ] ) {

				$ww = get_option( 'wubook_widget' ) . ',';

				?>
			<form method="POST">
				<input type="text" class="wb_hide" name="save" value="true">
				<table class="wp-list-table widefat fixed striped posts">
					<thead>
						<tr>
							<td style="width: 180px;">
								<i class="fa fa-sliders" aria-hidden="true"></i>
								<?php echo __( 'Settings', 'wubook' );?>
							</td>
							<td><i class="fa fa-list-ul" aria-hidden="true"></i>
								<?php echo __( 'Value', 'wubook' );?>
							</td>
						</tr>
					</thead>
					<tbody>
					<tr>
							<td>
								<?php echo __( 'CODE STRUCTURE', 'wubook' );?> *
							</td>
							<td>
							<input type="text" id="code_s" name="code_s" value="<?php echo get_option( 'wubook_widget_code' );?>" required>
							</td>
					</tr>
					<tr>
							<td colspan="2">
								<hr>
							</td>
						</tr>
						<tr>
							<td>
								<?php echo __( 'Choose which blocks include', 'wubook' );?>
							</td>
							<td>
								<input type="text" id="wb_list" name="wb_list" value="" class="wb_hide">
								<input type="text" id="wb_list2" name="wb_list2" value="" class="wb_hide">
								<div id="sortContainer" class="sort">
									<?php
									preg_match( "/,blocks: '(.*?)',/", $ww, $blocks );
									$blocks = ',' . $blocks[ 1 ] . ',';

									preg_match_all( '/([a-z]*)/', $blocks, $blocks_list );


									foreach ( $blocks_list[ 1 ] as $b_l ) {

										if ( $b_l == 'be' ) {
											$b_be = 1;
											?>
									<div class="wb_box">
										<input checked="checked" name="be" type="checkbox" value="be">
										<span>
											<?php echo __( 'Booking Engine', 'wubook' );?>
											<i class="fa fa-arrows wb_m" aria-hidden="true"></i>
										</span>
									</div>
									<?php
									}
									if ( $b_l == 'fe' ) {
										$b_fe = 1;
										?>
									<div class="wb_box">
										<input checked="checked" name="fe" type="checkbox" value="fe">
										<span>
											<?php echo __( 'Feedback', 'wubook' );?>
											<i class="fa fa-arrows wb_m" aria-hidden="true"></i>
										</span>
									</div>
									<?php
									}
									if ( $b_l == 'bb' ) {
										$b_bb = 1;
										?>
									<div class="wb_box">
										<input checked="checked" name="bb" type="checkbox" value="bb">
										<span>
											<?php echo __( 'Custom messages', 'wubook' );?>
											<i class="fa fa-arrows wb_m" aria-hidden="true"></i>
										</span>
									</div>
									<?php
									}
									if ( $b_l == 'pk' ) {
										$b_pk = 1;
										?>
									<div class="wb_box">
										<input checked="checked" type="checkbox" name="pk" value="pk">
										<span>
											<?php echo __( 'Packages', 'wubook' );?>
											<i class="fa fa-arrows wb_m" aria-hidden="true"></i>
										</span>
									</div>
									<?php
									}
									if ( $b_l == 'di' ) {
										$b_di = 1;
										?>
									<div class="wb_box">
										<input checked="checked" type="checkbox" name="di" value="di">
										<span>
											<?php echo __( 'Discount code', 'wubook' );?>
											<i class="fa fa-arrows wb_m" aria-hidden="true"></i>
										</span>
									</div>
									<?php
									}
									}

									if ( $b_be != 1 ) {
										?>
									<div class="wb_box">
										<input name="be" type="checkbox" value="be">
										<span>
											<?php echo __( 'Booking Engine', 'wubook' );?>
											<i class="fa fa-arrows wb_m" aria-hidden="true"></i>
										</span>
									</div>
									<?php
									}
									if ( $b_fe != 1 ) {
										?>
									<div class="wb_box">
										<input name="fe" type="checkbox" value="fe">
										<span>
											<?php echo __( 'Feedback', 'wubook' );?>
											<i class="fa fa-arrows wb_m" aria-hidden="true"></i>
										</span>
									</div>
									<?php
									}
									if ( $b_bb != 1 ) {
										?>
									<div class="wb_box">
										<input name="bb" type="checkbox" value="bb">
										<span>
											<?php echo __( 'Custom messages', 'wubook' );?>
											<i class="fa fa-arrows wb_m" aria-hidden="true"></i>
										</span>
									</div>
									<?php
									}
									if ( $b_pk != 1 ) {
										?>
									<div class="wb_box">
										<input type="checkbox" name="pk" value="pk">
										<span>
											<?php echo __( 'Packages', 'wubook' );?>
											<i class="fa fa-arrows wb_m" aria-hidden="true"></i>
										</span>
									</div>
									<?php
									}
									if ( $b_di != 1 ) {
										?>
									<div class="wb_box">
										<input type="checkbox" name="di" value="di">
										<span>
											<?php echo __( 'Discount code', 'wubook' );?>
											<i class="fa fa-arrows wb_m" aria-hidden="true"></i>
										</span>
									</div>
									<?php
									}
									?>
								</div>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<hr>
							</td>
						</tr>
						<tr>
							<td>
								<?php echo __( 'Customize the toolbar', 'wubook' );?>
							</td>
							<td>

								<?php
								preg_match( "/fixedPosition: (.*?),/", $ww, $bwposition );
								if ( $bwposition[ 1 ] == 1 ) {
									$bwposition = ' checked="checked"';
								} else {
									$bwposition = '';
								}
								?>

								<div class="wb_box">
									<input<?php echo $bwposition;?> type="checkbox" name="bwposition" value="yes">
										<span>
											<?php echo __( 'The System of Multi Widget bar in a fixed position on the bottom of the page', 'wubook' );?>
										</span>
								</div>

								<?php
								preg_match( "/barbackground: '(.*?)',/", $ww, $bwbg );
								?>

								<div class="wb_box">
									<input type='color' name='bwbg' value='<?php echo $bwbg[ 1 ];?>' class="wb_color"/>
									<span>
										<?php echo __( 'Background color of the bar', 'wubook' );?>
									</span>
								</div>

								<?php
								preg_match( "/bordercolor: '(.*?)',/", $ww, $bwborder );
								?>

								<div class="wb_box">
									<input type='color' name='bwborder' value='<?php echo $bwborder[ 1 ];?>' class="wb_color"/>
									<span>
										<?php echo __( 'Color of the bar board', 'wubook' );?>
									</span>
								</div>

								<?php
								preg_match( "/bgblocks: '(.*?)',/", $ww, $bwbgblocks );
								?>

								<div class="wb_box">
									<input type='color' name='bwbgblocks' value='<?php echo $bwbgblocks[ 1 ];?>' class="wb_color"/>
									<span>
										<?php echo __( 'Color block background', 'wubook' );?>
									</span>
								</div>

								<?php
								preg_match( "/,lang: '(.*?)',/", $ww, $bwlang );
								$bwlang = $bwlang[ 1 ];
								?>

								<div class="wb_box">
									<select name="bwlang" class="wp_select">
										<option value="" <?php if($bwlang=='' ){ echo ' selected="selected"'; }?>>
											<?php echo __( 'Automatic detection', 'wubook' );?>
										</option>
										<option value="az" <?php if($bwlang=='az' ){ echo ' selected="selected"'; }?>>az</option>
										<option value="bg" <?php if($bwlang=='bg' ){ echo ' selected="selected"'; }?>>bg</option>
										<option value="br" <?php if($bwlang=='br' ){ echo ' selected="selected"'; }?>>br</option>
										<option value="ca" <?php if($bwlang=='ca' ){ echo ' selected="selected"'; }?>>ca</option>
										<option value="cs" <?php if($bwlang=='cs' ){ echo ' selected="selected"'; }?>>cs</option>
										<option value="de" <?php if($bwlang=='de' ){ echo ' selected="selected"'; }?>>de</option>
										<option value="ee" <?php if($bwlang=='ee' ){ echo ' selected="selected"'; }?>>ee</option>
										<option value="en" <?php if($bwlang=='en' ){ echo ' selected="selected"'; }?>>en</option>
										<option value="es" <?php if($bwlang=='es' ){ echo ' selected="selected"'; }?>>es</option>
										<option value="fi" <?php if($bwlang=='fi' ){ echo ' selected="selected"'; }?>>fi</option>
										<option value="fr" <?php if($bwlang=='fr' ){ echo ' selected="selected"'; }?>>fr</option>
										<option value="gr" <?php if($bwlang=='gr' ){ echo ' selected="selected"'; }?>>gr</option>
										<option value="he" <?php if($bwlang=='he' ){ echo ' selected="selected"'; }?>>he</option>
										<option value="hr" <?php if($bwlang=='hr' ){ echo ' selected="selected"'; }?>>hr</option>
										<option value="it" <?php if($bwlang=='it' ){ echo ' selected="selected"'; }?>>it</option>
										<option value="ko" <?php if($bwlang=='ko' ){ echo ' selected="selected"'; }?>>ko</option>
										<option value="lt" <?php if($bwlang=='lt' ){ echo ' selected="selected"'; }?>>lt</option>
										<option value="lv" <?php if($bwlang=='lv' ){ echo ' selected="selected"'; }?>>lv</option>
										<option value="me" <?php if($bwlang=='me' ){ echo ' selected="selected"'; }?>>me</option>
										<option value="nl" <?php if($bwlang=='nl' ){ echo ' selected="selected"'; }?>>nl</option>
										<option value="pl" <?php if($bwlang=='pl' ){ echo ' selected="selected"'; }?>>pl</option>
										<option value="pt" <?php if($bwlang=='pt' ){ echo ' selected="selected"'; }?>>pt</option>
										<option value="ro" <?php if($bwlang=='ro' ){ echo ' selected="selected"'; }?>>ro</option>
										<option value="ru" <?php if($bwlang=='ru' ){ echo ' selected="selected"'; }?>>ru</option>
										<option value="sv" <?php if($bwlang=='sv' ){ echo ' selected="selected"'; }?>>sv</option>
										<option value="uk" <?php if($bwlang=='uk' ){ echo ' selected="selected"'; }?>>uk</option>
										<option value="zh" <?php if($bwlang=='zh' ){ echo ' selected="selected"'; }?>>zh</option>
									</select>
									<span>
										<?php echo __( 'Language', 'wubook' );?>
									</span>
								</div>

								<?php
								preg_match( "/failback_lang: '(.*?)',/", $ww, $bwflang );
								$bwflang = $bwflang[ 1 ];
								?>

								<div class="wb_box">
									<select name="bwflang" class="wp_select">
										<option value="az" <?php if($bwflang=='az' ){ echo ' selected="selected"'; }?>>az</option>
										<option value="bg" <?php if($bwflang=='bg' ){ echo ' selected="selected"'; }?>>bg</option>
										<option value="br" <?php if($bwflang=='br' ){ echo ' selected="selected"'; }?>>br</option>
										<option value="ca" <?php if($bwflang=='ca' ){ echo ' selected="selected"'; }?>>ca</option>
										<option value="cs" <?php if($bwflang=='cs' ){ echo ' selected="selected"'; }?>>cs</option>
										<option value="de" <?php if($bwflang=='de' ){ echo ' selected="selected"'; }?>>de</option>
										<option value="ee" <?php if($bwflang=='ee' ){ echo ' selected="selected"'; }?>>ee</option>
										<option value="en" <?php if($bwflang=='en' ){ echo ' selected="selected"'; }?>>en</option>
										<option value="es" <?php if($bwflang=='es' ){ echo ' selected="selected"'; }?>>es</option>
										<option value="fi" <?php if($bwflang=='fi' ){ echo ' selected="selected"'; }?>>fi</option>
										<option value="fr" <?php if($bwflang=='fr' ){ echo ' selected="selected"'; }?>>fr</option>
										<option value="gr" <?php if($bwflang=='gr' ){ echo ' selected="selected"'; }?>>gr</option>
										<option value="he" <?php if($bwflang=='he' ){ echo ' selected="selected"'; }?>>he</option>
										<option value="hr" <?php if($bwflang=='hr' ){ echo ' selected="selected"'; }?>>hr</option>
										<option value="it" <?php if($bwflang=='it' ){ echo ' selected="selected"'; }?>>it</option>
										<option value="ko" <?php if($bwflang=='ko' ){ echo ' selected="selected"'; }?>>ko</option>
										<option value="lt" <?php if($bwflang=='lt' ){ echo ' selected="selected"'; }?>>lt</option>
										<option value="lv" <?php if($bwflang=='lv' ){ echo ' selected="selected"'; }?>>lv</option>
										<option value="me" <?php if($bwflang=='me' ){ echo ' selected="selected"'; }?>>me</option>
										<option value="nl" <?php if($bwflang=='nl' ){ echo ' selected="selected"'; }?>>nl</option>
										<option value="pl" <?php if($bwflang=='pl' ){ echo ' selected="selected"'; }?>>pl</option>
										<option value="pt" <?php if($bwflang=='pt' ){ echo ' selected="selected"'; }?>>pt</option>
										<option value="ro" <?php if($bwflang=='ro' ){ echo ' selected="selected"'; }?>>ro</option>
										<option value="ru" <?php if($bwflang=='ru' ){ echo ' selected="selected"'; }?>>ru</option>
										<option value="sv" <?php if($bwflang=='sv' ){ echo ' selected="selected"'; }?>>sv</option>
										<option value="uk" <?php if($bwflang=='uk' ){ echo ' selected="selected"'; }?>>uk</option>
										<option value="zh" <?php if($bwflang=='zh' ){ echo ' selected="selected"'; }?>>zh</option>
									</select>
									<span>
										<?php echo __( 'Return language', 'wubook' );?>
									</span>
								</div>

								<?php
								preg_match( "/wbgoogle: (.*?),/", $ww, $bwgoogle );
								if ( $bwgoogle[ 1 ] == 1 ) {
									$bwgoogle = ' checked="checked"';
								} else {
									$bwgoogle = '';
								}
								?>

								<div class="wb_box">
									<input<?php echo $bwgoogle;?> type="checkbox" name="bwgoogle" value="yes">
										<span>
											<?php echo __( 'Include google analytics', 'wubook' );?>
										</span>
								</div>

							</td>
						</tr>

						<tr>
							<td colspan="2">
								<hr>
							</td>
						</tr>

						<tr>
							<td>
								<?php echo __( 'Customize your widget', 'wubook' );?>
							</td>
							<td>

								<details id="h_1">
									<summary class="wb_box" style="background: #ddd; color: #333;">
										<?php echo __( 'Booking Engine', 'wubook' );?>
									</summary>

									<?php
									preg_match( "/adchi: (.*?),/", $ww, $bwadchi );
									if ( $bwadchi[ 1 ] == 1 ) {
										$bwadchi = ' checked="checked"';
									} else {
										$bwadchi = '';
									}
									?>

									<div class="wb_box">
										<input<?php echo $bwadchi;?> type="checkbox" name="bwadchi" value="yes">
											<span>
												<?php echo __( 'Selection adults / children', 'wubook' );?>
											</span>
									</div>

									<?php
									preg_match( "/plusperc: (.*?),/", $ww, $bwplusperc );
									?>

									<div class="wb_box">
										<input type="number" name="bwplusperc" min="0" max="100" style="width: 40px;" value="<?php echo $bwplusperc[ 1 ];?>"> %
										<span>
											<?php echo __( 'This price increase on OTA', 'wubook' );?>
										</span>
									</div>

									<?php
									preg_match( "/default_nights: (.*?),/", $ww, $bwdfn );
									$bwdfn = $bwdfn[ 1 ];
									?>

									<div class="wb_box">
										<select name="bwdfn" class="wp_select">
											<option value="1" <?php if($bwdfn=='1' ){ echo ' selected="selected"'; }?>>1</option>
											<option value="2" <?php if($bwdfn=='2' ){ echo ' selected="selected"'; }?>>2</option>
											<option value="3" <?php if($bwdfn=='3' ){ echo ' selected="selected"'; }?>>3</option>
											<option value="4" <?php if($bwdfn=='4' ){ echo ' selected="selected"'; }?>>4</option>
											<option value="5" <?php if($bwdfn=='5' ){ echo ' selected="selected"'; }?>>5</option>
											<option value="6" <?php if($bwdfn=='6' ){ echo ' selected="selected"'; }?>>6</option>
											<option value="7" <?php if($bwdfn=='7' ){ echo ' selected="selected"'; }?>>7</option>
											<option value="8" <?php if($bwdfn=='8' ){ echo ' selected="selected"'; }?>>8</option>
											<option value="9" <?php if($bwdfn=='9' ){ echo ' selected="selected"'; }?>>9</option>
											<option value="10" <?php if($bwdfn=='10' ){ echo ' selected="selected"'; }?>>10</option>
											<option value="11" <?php if($bwdfn=='11' ){ echo ' selected="selected"'; }?>>11</option>
											<option value="12" <?php if($bwdfn=='12' ){ echo ' selected="selected"'; }?>>12</option>
											<option value="13" <?php if($bwdfn=='13' ){ echo ' selected="selected"'; }?>>13</option>
											<option value="14" <?php if($bwdfn=='14' ){ echo ' selected="selected"'; }?>>14</option>
											<option value="15" <?php if($bwdfn=='15' ){ echo ' selected="selected"'; }?>>15</option>
											<option value="16" <?php if($bwdfn=='16' ){ echo ' selected="selected"'; }?>>16</option>
											<option value="17" <?php if($bwdfn=='17' ){ echo ' selected="selected"'; }?>>17</option>
											<option value="18" <?php if($bwdfn=='18' ){ echo ' selected="selected"'; }?>>18</option>
											<option value="19" <?php if($bwdfn=='19' ){ echo ' selected="selected"'; }?>>19</option>
											<option value="20" <?php if($bwdfn=='20' ){ echo ' selected="selected"'; }?>>20</option>
											<option value="21" <?php if($bwdfn=='21' ){ echo ' selected="selected"'; }?>>21</option>
											<option value="22" <?php if($bwdfn=='22' ){ echo ' selected="selected"'; }?>>22</option>
											<option value="23" <?php if($bwdfn=='23' ){ echo ' selected="selected"'; }?>>23</option>
											<option value="24" <?php if($bwdfn=='24' ){ echo ' selected="selected"'; }?>>24</option>
											<option value="25" <?php if($bwdfn=='25' ){ echo ' selected="selected"'; }?>>25</option>
											<option value="26" <?php if($bwdfn=='26' ){ echo ' selected="selected"'; }?>>26</option>
											<option value="27" <?php if($bwdfn=='27' ){ echo ' selected="selected"'; }?>>27</option>
											<option value="28" <?php if($bwdfn=='28' ){ echo ' selected="selected"'; }?>>28</option>
											<option value="29" <?php if($bwdfn=='29' ){ echo ' selected="selected"'; }?>>29</option>
											<option value="30" <?php if($bwdfn=='30' ){ echo ' selected="selected"'; }?>>30</option>
											<option value="31" <?php if($bwdfn=='31' ){ echo ' selected="selected"'; }?>>31</option>
										</select>
										<span>
											<?php echo __( 'Number of default nights', 'wubook' );?>
										</span>
									</div>

									<?php
									preg_match( "/buttoncolorbe: '(.*?)',/", $ww, $bwbuttoncolorbe );
									?>

									<div class="wb_box">
										<input type='color' name='bwbuttoncolorbe' value='<?php echo $bwbuttoncolorbe[ 1 ];?>' class="wb_color"/>
										<span>
											<?php echo __( 'Button Color "Reserve"', 'wubook' );?>
										</span>
									</div>

									<?php
									preg_match( "/textcolorbuttonbe: '(.*?)',/", $ww, $bwtextcolorbuttonbe );
									?>

									<div class="wb_box">
										<input type='color' name='bwtextcolorbuttonbe' value='<?php echo $bwtextcolorbuttonbe[ 1 ];?>' class="wb_color"/>
										<span>
											<?php echo __( 'Color of the button text "Reserve"', 'wubook' );?>
										</span>
									</div>

									<?php
									preg_match( "/textcolorcalendarbe: '(.*?)',/", $ww, $bwtextcolorcalendarbe );
									?>

									<div class="wb_box">
										<input type='color' name='bwtextcolorcalendarbe' value='<?php echo $bwtextcolorcalendarbe[ 1 ];?>' class="wb_color"/>
										<span>
											<?php echo __( 'Text color of calendars', 'wubook' );?>
										</span>
									</div>

									<?php
									preg_match( "/openParams: '(.*?)',/", $ww, $bwcustom_url );
									?>

									<div class="wb_box">
										<input type='text' name='bwcustom_url' value="<?php echo $bwcustom_url[ 1 ];?>"/>
										<span>
											<?php echo __( 'Call parameter of online reception', 'wubook' );?>
										</span>
									</div>

								</details>

								<details id="h_2">
									<summary class="wb_box" style="background: #ddd; color: #333;">
										<?php echo __( 'Feedback', 'wubook' );?>
									</summary>

									<?php
									preg_match( "/avgcolor: '(.*?)',/", $ww, $bwavgcolor );
									?>

									<div class="wb_box">
										<input type='color' name='bwavgcolor' value='<?php echo $bwavgcolor[ 1 ];?>' class="wb_color"/>
										<span>
											<?php echo __( 'Color of the average text', 'wubook' );?>
										</span>
									</div>

									<?php
									preg_match( "/avgtextcolor: '(.*?)',/", $ww, $bwavgtextcolor );
									?>

									<div class="wb_box">
										<input type='color' name='bwavgtextcolor' value='<?php echo $bwavgtextcolor[ 1 ];?>' class="wb_color"/>
										<span>
											<?php echo __( 'Text color of the link to the feedback page', 'wubook' );?>
										</span>
									</div>

								</details>

								<details id="h_3">
									<summary class="wb_box" style="background: #ddd; color: #333;">
										<?php echo __( 'Custom messages', 'wubook' );?>
									</summary>

									<?php
									preg_match( "/textcolorbb: '(.*?)',/", $ww, $bwtextcolorbb );
									?>

									<div class="wb_box">
										<input type='color' name='bwtextcolorbb' value='<?php echo $bwtextcolorbb[ 1 ];?>' class="wb_color"/>
										<span>
											<?php echo __( 'Text Color', 'wubook' );?>
										</span>
									</div>

									<div class="wb_box">
										<input type='color' name='bwlisttypebb' value='#ffffff' class="wb_color"/>
										<span>
											<?php echo __( 'Color of the list type', 'wubook' );?>
										</span>
									</div>

									<h3>
										<?php echo __( 'Select 3 sentences to be included', 'wubook' );?>
									</h3>


									<?php
									preg_match( "/,cmsgs: '(.*?)',/", $ww, $cmsgs );
									$cmsgs = base64_decode( $cmsgs[ 1 ] );
									$cmsgs = ',' . $cmsgs . ',';
									preg_match_all( '/([1-9])/', $cmsgs, $cmsgs_list );
									?>




									<div id="sortContainer2" class="sort">

										<?php
										foreach ( $cmsgs_list[ 1 ] as $w_l ) {
											if ( $w_l == '1' ) {
												$w_1 = 1;
												?>
										<div class="wb_box">

											<input checked="checked" type="checkbox" name="sc_1" value="1" class="wb_limit">
											<?php echo __( 'Best Price Guaranteed', 'wubook' );?>
											<i class="fa fa-arrows wb_m" aria-hidden="true"></i>

										</div>
										<?php
										}
										if ( $w_l == '2' ) {
											$w_2 = 1;
											?>
										<div class="wb_box">

											<input checked="checked" type="checkbox" name="sc_2" value="2" class="wb_limit">
											<?php echo __( 'Customer service', 'wubook' );?>
											<i class="fa fa-arrows wb_m" aria-hidden="true"></i>

										</div>
										<?php
										}
										if ( $w_l == '3' ) {
											$w_3 = 1;
											?>
										<div class="wb_box">

											<input checked="checked" type="checkbox" name="sc_3" value="3" class="wb_limit">
											<?php echo __( 'Secure payment', 'wubook' );?>
											<i class="fa fa-arrows wb_m" aria-hidden="true"></i>

										</div>
										<?php
										}
										if ( $w_l == '4' ) {
											$w_4 = 1;
											?>
										<div class="wb_box">

											<input checked="checked" type="checkbox" name="sc_4" value="4" class="wb_limit">
											<?php echo __( 'Best price', 'wubook' );?>
											<i class="fa fa-arrows wb_m" aria-hidden="true"></i>

										</div>
										<?php
										}
										if ( $w_l == '5' ) {
											$w_5 = 1;
											?>
										<div class="wb_box">

											<input checked="checked" type="checkbox" name="sc_5" value="5" class="wb_limit">
											<?php echo __( 'free Cancellation', 'wubook' );?>
											<i class="fa fa-arrows wb_m" aria-hidden="true"></i>

										</div>
										<?php
										}
										if ( $w_l == '6' ) {
											$w_6 = 1;
											?>
										<div class="wb_box">

											<input checked="checked" type="checkbox" name="sc_6" value="6" class="wb_limit">
											<?php echo __( 'Bids: Make your price!', 'wubook' );?>
											<i class="fa fa-arrows wb_m" aria-hidden="true"></i>

										</div>
										<?php
										}
										if ( $w_l == '7' ) {
											$w_7 = 1;
											?>
										<div class="wb_box">

											<input checked="checked" type="checkbox" name="sc_7" value="7" class="wb_limit">
											<?php echo __( 'real Reviews', 'wubook' );?>
											<i class="fa fa-arrows wb_m" aria-hidden="true"></i>

										</div>
										<?php
										}


										}

										if ( $w_1 != 1 ) {
											?>
										<div class="wb_box">

											<input type="checkbox" name="sc_1" value="1" class="wb_limit">
											<?php echo __( 'Best Price Guaranteed', 'wubook' );?>
											<i class="fa fa-arrows wb_m" aria-hidden="true"></i>

										</div>
										<?php
										}
										if ( $w_2 != 1 ) {
											?>
										<div class="wb_box">

											<input type="checkbox" name="sc_2" value="2" class="wb_limit">
											<?php echo __( 'Customer service', 'wubook' );?>
											<i class="fa fa-arrows wb_m" aria-hidden="true"></i>

										</div>
										<?php
										}
										if ( $w_3 != 1 ) {
											?>
										<div class="wb_box">

											<input type="checkbox" name="sc_3" value="3" class="wb_limit">
											<?php echo __( 'Secure payment', 'wubook' );?>
											<i class="fa fa-arrows wb_m" aria-hidden="true"></i>

										</div>
										<?php
										}
										if ( $w_4 != 1 ) {
											?>
										<div class="wb_box">

											<input type="checkbox" name="sc_4" value="4" class="wb_limit">
											<?php echo __( 'Best price', 'wubook' );?>
											<i class="fa fa-arrows wb_m" aria-hidden="true"></i>

										</div>
										<?php
										}
										if ( $w_5 != 1 ) {
											?>
										<div class="wb_box">

											<input type="checkbox" name="sc_5" value="5" class="wb_limit">
											<?php echo __( 'free Cancellation', 'wubook' );?>
											<i class="fa fa-arrows wb_m" aria-hidden="true"></i>

										</div>
										<?php
										}
										if ( $w_6 != 1 ) {
											?>
										<div class="wb_box">

											<input type="checkbox" name="sc_6" value="6" class="wb_limit">
											<?php echo __( 'Bids: make your price!', 'wubook' );?>
											<i class="fa fa-arrows wb_m" aria-hidden="true"></i>

										</div>
										<?php
										}
										if ( $w_7 != 1 ) {
											?>
										<div class="wb_box">

											<input type="checkbox" name="sc_7" value="7" class="wb_limit">
											<?php echo __( 'real Reviews', 'wubook' );?>
											<i class="fa fa-arrows wb_m" aria-hidden="true"></i>

										</div>
										<?php
										}
										?>

									</div>

		</div>

		</details>

		<details id="h_4">
			<summary class="wb_box" style="background: #ddd; color: #333;">
				<?php echo __( 'Packages', 'wubook' );?>
			</summary>

			<?php
			preg_match( "/textcolorpk: '(.*?)',/", $ww, $bwtextcolorpk );
			?>

			<div class="wb_box">
				<input type='color' name='bwtextcolorpk' value='<?php echo $bwtextcolorpk[ 1 ];?>' class="wb_color"/>
				<span>
					<?php echo __( 'Text color of the package title', 'wubook' );?>
				</span>
			</div>

			<?php
			preg_match( "/textcolornightspk: '(.*?)',/", $ww, $bwtextcolornightspk );
			?>

			<div class="wb_box">
				<input type='color' name='bwtextcolornightspk' value='<?php echo $bwtextcolornightspk[ 1 ];?>' class="wb_color"/>
				<span>
					<?php echo __( 'Text color of nights', 'wubook' );?>
				</span>
			</div>

			<h3>
				<?php echo __( 'Choose which packages to include in the widget', 'wubook' );?>
			</h3>

			<?php
			preg_match( "/rpkgs: '(.*?)',/", $ww, $pkg );
			$pkg = base64_decode( $pkg[ 1 ] );
			if ( preg_match( '/6869/', $pkg ) ) {
				$pkg_6869 = ' checked="checked"';
			}
			if ( preg_match( '/1286/', $pkg ) ) {
				$pkg_1286 = ' checked="checked"';
			}
			if ( preg_match( '/1287/', $pkg ) ) {
				$pkg_1287 = ' checked="checked"';
			}
			?>

			<div class="wb_box">

				<input<?php echo $pkg_6869;?> type="checkbox" name="pkg_6869" value="6869">
					<?php echo __( 'Soft and flexible', 'wubook' );?>

			</div>

			<div class="wb_box">

				<input<?php echo $pkg_1286;?> type="checkbox" name="pkg_1286" value="1286">
					<?php echo __( 'Mid-August', 'wubook' );?>

			</div>

			<div class="wb_box">

				<input<?php echo $pkg_1287;?> type="checkbox" name="pkg_1287" value="1287">
					<?php echo __( 'Off the beaten path', 'wubook' );?>

			</div>

		</details>

		<details id="h_5">
			<summary class="wb_box" style="background: #ddd; color: #333;">
				<?php echo __( 'Discount code', 'wubook' );?>
			</summary>

			<?php
			preg_match( "/dibuttoncolor: '(.*?)',/", $ww, $bwdibuttoncolor );
			?>

			<div class="wb_box">
				<input type='color' name='bwdibuttoncolor' value='<?php echo $bwdibuttoncolor[ 1 ];?>' class="wb_color"/>
				<span>
					<?php echo __( 'Button Color', 'wubook' );?>
				</span>
			</div>

			<?php
			preg_match( "/ditextcolor: '(.*?)',/", $ww, $bwditextcolor );
			?>

			<div class="wb_box">
				<input type='color' name='bwditextcolor' value='<?php echo $bwditextcolor[ 1 ];?>' class="wb_color"/>
				<span>
					<?php echo __( 'Text Color', 'wubook' );?>
				</span>
			</div>

			<?php
			preg_match( "/hdcode: '(.*?)',/", $ww, $bwhdcode );
			?>

			<div class="wb_box">
				<input type='text' name='bwhdcode' value='<?php echo $bwhdcode[ 1 ];?>'/>
				<span>
					<?php echo __( 'Discount code', 'wubook' );?>
				</span>
			</div>

			<?php
			preg_match( "/diinputcolor: '(.*?)',/", $ww, $bwdiinputcolor );
			?>

			<div class="wb_box">
				<input type='color' name='bwdiinputcolor' value='<?php echo $bwdiinputcolor[ 1 ];?>' class="wb_color"/>
				<span>
					<?php echo __( 'Color of text input', 'wubook' );?>
				</span>
			</div>

		</details>

		</td>

		</tr>

		<tr>
			<td colspan="2">
				<hr>
			</td>
		</tr>

		<tr>
			<td colspan="2">
				<button type="submit" class="wb_bu" onclick="wb_getlist();">
					<i class="fa fa-check" aria-hidden="true"></i> <?php echo __( 'Save', 'wubook' );?>
				</button>




			</td>
		</tr>

		</tbody>
		</table>
		</form>


		<?php

		} else {

			?>

		<table class="wp-list-table widefat fixed striped posts">
			<thead>
				<tr>
					<td>
						<i class="fa fa-sliders" aria-hidden="true"></i>
						<?php echo __( 'Shortcode', 'wubook' );?>
					</td>
					<td><i class="fa fa-list-ul" aria-hidden="true"></i>
						<?php echo __( 'Action', 'wubook' );?>
					</td>
				</tr>
			</thead>
			<tbody>
				<tr>

					<td>
						<a href="#" class="wb_shortcode" onclick="wb_copy(this.id);" id="wb_shortcode">[wubook]</a>
					</td>
					<td>
						<button onclick="window.location.href='<?php echo admin_url();?>admin.php?page=wb_settings&edit=<?php echo md5(time());?>';" class="wb_link">
							<?php echo __( 'Edit', 'wubook' );?>
						</button>
					</td>

				</tr>
			</tbody>
		</table>

		<div class="wb_info">

			<wb_title>
				<i class="fa fa-level-up" aria-hidden="true"></i>
				<?php echo __( 'Info', 'wubook' );?>
			</wb_title>

			<div class="wb_text">
				<i class="fa fa-hand-pointer-o" aria-hidden="true"></i>
				<?php echo __( 'Click to copy the shortcode and', 'wubook' );?>
				<i class="fa fa-level-down" aria-hidden="true"></i>
				<?php echo __( 'paste to the desired page, template or widget block!', 'wubook' );?>
			</div>

		</div>

		<?php

		}

		?>

	</div>

	<div class="wb_block" style="width: 30%;">
		<div class="wb_title">
			<div class="wb_version"><i class="fa fa-database" aria-hidden="true"></i>
				<?php echo __( 'Version', 'wubook' );?>:
				<?php echo $wb->version;?>
			</div>

			<a href="http://wubook.net/" target="_blank" class="wb_logo">

		 <img src="<?php echo plugins_url( 'i/logo.jpg', __FILE__ );?>">

		</a>





		</div>

		<table class="wp-list-table widefat fixed striped posts">
			<tbody>
				<tr>
					<td><i class="fa fa-globe" aria-hidden="true"></i>
						<?php echo __( 'Our website', 'wubook' );?>
					</td>
					<td><a href="http://wubook.net/" target="_blank"><i class="fa fa-paper-plane" aria-hidden="true"></i> WuBook.net</a>
					</td>
				</tr>
				<tr>
					<td><i class="fa fa-archive" aria-hidden="true"></i>
						<?php echo __( 'Plugin page', 'wubook' );?>
					</td>
					<td><a href="https://github.com/wubook/wp_multi_widget" target="_blank"><i class="fa fa-paper-plane" aria-hidden="true"></i> <?php echo __( 'Open', 'wubook' );?></a>
					</td>
				</tr>
				<tr>
					<td><i class="fa fa-life-ring" aria-hidden="true"></i>
						<?php echo __( 'Support', 'wubook' );?>
					</td>
					<td><a href="mailto:wordpress@wubook.net" target="_blank"><i class="fa fa-paper-plane" aria-hidden="true"></i> <?php echo __( 'Send message', 'wubook' );?></a>
					</td>
				</tr>
			</tbody>
		</table>

		<wb_lang>
			<form method="post" id="wb_lang">
				<select name="wb_lang" onchange='document.getElementById("wb_lang").submit();'>
					<option value="en_US" <?php if(($_COOKIE[ 'wb_lang']=='en_US' ) OR ($_POST[ 'wb_lang']=='en_US' )){echo ' selected="selected"';}?>>English</option>
					<option value="it_IT" <?php if(($_COOKIE[ 'wb_lang']=='it_IT' ) OR ($_POST[ 'wb_lang']=='it_IT' )){echo ' selected="selected"';}?>>Italian</option>
					<option value="ru_RU" <?php if(($_COOKIE[ 'wb_lang']=='ru_RU' ) OR ($_POST[ 'wb_lang']=='ru_RU' )){echo ' selected="selected"';}?>>Russian</option>
				</select>
			</form>
		</wb_lang>

	</div>



	</div>


	<?php

	}

	?>
