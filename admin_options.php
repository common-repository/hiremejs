<?php

function td_hmj_options() {
	td_hmj_load_script_setup();

	if ( !current_user_can( 'manage_options' ) ) {
		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
	}

	$hidden_field_name = "it_was-not_my_fault";

	register_setting( 'HireMeJs', 'td-hmj-settings' );

	settings_fields( 'td-hmj-settings' );
	do_settings_sections( 'td-hmj-settings' );
	$saved = false;
	if ( isset( $_POST[ $hidden_field_name ] ) && $_POST[ $hidden_field_name ] == 'Y' ) {
		update_option( 'td-hmj-greetings', $_POST[ 'td-hmj-greetings' ] );
		update_option( 'td-hmj-font', $_POST[ 'td-hmj-font' ] );
		update_option( 'td-hmj-text', $_POST[ 'td-hmj-text' ] );
		$saved = true;
	}

	$fonts	 = array();
	$fonts[] = '3-d';
	$fonts[] = '3x5';
	$fonts[] = '5lineoblique';
	$fonts[] = 'acrobatic';
	$fonts[] = 'alligator';
	$fonts[] = 'alligator2';
	$fonts[] = 'alphabet';
	$fonts[] = 'avatar';
	$fonts[] = 'banner';
	$fonts[] = 'banner3-D';
	$fonts[] = 'banner3';
	$fonts[] = 'banner4';
	$fonts[] = 'barbwire';
	$fonts[] = 'basic';
	$fonts[] = 'bell';
	$fonts[] = 'big';
	$fonts[] = 'bigchief';
	$fonts[] = 'binary';
	$fonts[] = 'block';
	$fonts[] = 'bubble';
	$fonts[] = 'bulbhead';
	$fonts[] = 'calgphy2';
	$fonts[] = 'caligraphy';
	$fonts[] = 'catwalk';
	$fonts[] = 'chunky';
	$fonts[] = 'coinstak';
	$fonts[] = 'colossal';
	$fonts[] = 'computer';
	$fonts[] = 'contessa';
	$fonts[] = 'contrast';
	$fonts[] = 'cosmic';
	$fonts[] = 'cosmike';
	$fonts[] = 'cricket';
	$fonts[] = 'cursive';
	$fonts[] = 'cyberlarge';
	$fonts[] = 'cybermedium';
	$fonts[] = 'cybersmall';
	$fonts[] = 'diamond';
	$fonts[] = 'digital';
	$fonts[] = 'doh';
	$fonts[] = 'doom';
	$fonts[] = 'dotmatrix';
	$fonts[] = 'drpepper';
	$fonts[] = 'eftichess';
	$fonts[] = 'eftifont';
	$fonts[] = 'eftipiti';
	$fonts[] = 'eftirobot';
	$fonts[] = 'eftitalic';
	$fonts[] = 'eftiwall';
	$fonts[] = 'eftiwater';
	$fonts[] = 'epic';
	$fonts[] = 'fender';
	$fonts[] = 'fourtops';
	$fonts[] = 'fuzzy';
	$fonts[] = 'goofy';
	$fonts[] = 'gothic';
	$fonts[] = 'graffiti';
	$fonts[] = 'hollywood';
	$fonts[] = 'invita';
	$fonts[] = 'isometric1';
	$fonts[] = 'isometric2';
	$fonts[] = 'isometric3';
	$fonts[] = 'isometric4';
	$fonts[] = 'italic';
	$fonts[] = 'ivrit';
	$fonts[] = 'jazmine';
	$fonts[] = 'jerusalem';
	$fonts[] = 'katakana';
	$fonts[] = 'kban';
	$fonts[] = 'larry3d';
	$fonts[] = 'lcd';
	$fonts[] = 'lean';
	$fonts[] = 'letters';
	$fonts[] = 'linux';
	$fonts[] = 'lockergnome';
	$fonts[] = 'madrid';
	$fonts[] = 'marquee';
	$fonts[] = 'maxfour';
	$fonts[] = 'mike';
	$fonts[] = 'mini';
	$fonts[] = 'mirror';
	$fonts[] = 'mnemonic';
	$fonts[] = 'morse';
	$fonts[] = 'moscow';
	$fonts[] = 'nancyj-fancy';
	$fonts[] = 'nancyj-underlined';
	$fonts[] = 'nancyj';
	$fonts[] = 'nipples';
	$fonts[] = 'ntgreek';
	$fonts[] = 'o8';
	$fonts[] = 'ogre';
	$fonts[] = 'pawp';
	$fonts[] = 'peaks';
	$fonts[] = 'pebbles';
	$fonts[] = 'pepper';
	$fonts[] = 'poison';
	$fonts[] = 'puffy';
	$fonts[] = 'pyramid';
	$fonts[] = 'relief';
	$fonts[] = 'relief2';
	$fonts[] = 'rev';
	$fonts[] = 'roman';
	$fonts[] = 'rot13';
	$fonts[] = 'rounded';
	$fonts[] = 'rowancap';
	$fonts[] = 'rozzo';
	$fonts[] = 'runic';
	$fonts[] = 'runyc';
	$fonts[] = 'sblood';
	$fonts[] = 'script';
	$fonts[] = 'serifcap';
	$fonts[] = 'shadow';
	$fonts[] = 'short';
	$fonts[] = 'slant';
	$fonts[] = 'slide';
	$fonts[] = 'slscript';
	$fonts[] = 'small';
	$fonts[] = 'smisome1';
	$fonts[] = 'smkeyboard';
	$fonts[] = 'smscript';
	$fonts[] = 'smshadow';
	$fonts[] = 'smslant';
	$fonts[] = 'smtengwar';
	$fonts[] = 'speed';
	$fonts[] = 'stampatello';
	$fonts[] = 'standard';
	$fonts[] = 'starwars';
	$fonts[] = 'stellar';
	$fonts[] = 'stop';
	$fonts[] = 'straight';
	$fonts[] = 'tanja';
	$fonts[] = 'tengwar';
	$fonts[] = 'term';
	$fonts[] = 'thick';
	$fonts[] = 'thin';
	$fonts[] = 'threepoint';
	$fonts[] = 'ticks';
	$fonts[] = 'ticksslant';
	$fonts[] = 'tinker-toy';
	$fonts[] = 'tombstone';
	$fonts[] = 'trek';
	$fonts[] = 'tsalagi';
	$fonts[] = 'twopoint';
	$fonts[] = 'univers';
	$fonts[] = 'usaflag';
	$fonts[] = 'wavy';
	$fonts[] = 'weird';
	?>

	<div class="wrap">
		<h2>HireMeJs</h2>
		<?php
		if ( $saved ) {
			?>
			<div id="setting-error-settings_updated" class="updated settings-error"><p><strong>Settings Saved.</strong></p></div>
			<?php
		}
		?>
		<p class="description">
			So, some coder is visiting your site and u want to tell the coder that he should hire at your company?<br>
			So check some options here and he will ;)
		</p>
		<form name="form1" method="post" action="">
			<input type="hidden" name="<?php echo $hidden_field_name; ?>" value="Y">
			<table class="form-table">
				<tr valign="top">
					<th scope="row">Greetings</th>
					<td><input type="text" id="td-hmj-greetings" name="td-hmj-greetings" value="<?php echo esc_attr( get_option( 'td-hmj-greetings' ) ); ?>" /></td>
				</tr>
				<tr valign="top">
					<th scope="row">Font to use</th>
					<td>
						<select id="td-hmj-font" name="td-hmj-font">
							<?php
							for ( $i = 0; $i < count( $fonts ); $i++ ) {
								?>
								<option value="<?php echo $fonts[ $i ]; ?>" <?php echo ($fonts[ $i ] == get_option( 'td-hmj-font' ) ) ? 'selected="selected"' : ''; ?> ><?php echo $fonts[ $i ]; ?></option>
								<?php
							}
							?>
						</select>
					</td>
				</tr>

				<tr valign="top">
					<th scope="row">Free Text</th>
					<td><textarea id="td-hmj-text" name="td-hmj-text" cols="80" rows="10" ><?php echo esc_attr( get_option( 'td-hmj-text' ) ); ?></textarea></td>
				</tr>
			</table>



			Preview:<br>
			<pre id="td-hmj-preview" style="background-color: white;border: solid 1px black;padding: 10px 10px;"></pre>
			<?php submit_button(); ?>
		</form>
	</div>

	<script>
		jQuery( function ( $ ) {
			function hmj_showPreview() {
				var font = $( "select#td-hmj-font option:selected" ).val();
				if ( font === "" ) {
					font = "graffiti";
				}
				var figletTxt = $( '#td-hmj-greetings' ).val();
				var text = $( '#td-hmj-text' ).val();

				$( '#td-hmj-preview' ).html( "" );
				Figlet.write( figletTxt, font, function ( str ) {
					$( '#td-hmj-preview' ).html( str );
					$( '#td-hmj-preview' ).append( text );

				} );
			}

			$( '#td-hmj-font' ).change( function () {
				hmj_showPreview();
			} );
			$( '#td-hmj-greetings' ).keyup( function () {
				hmj_showPreview();
			} );
			$( '#td-hmj-text' ).keyup( function () {
				hmj_showPreview();
			} );
			hmj_showPreview();
		} );
	</script>
	<?php
}
