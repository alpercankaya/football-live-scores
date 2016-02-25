<div class="wrap">
<?php echo "<h2>" . __( 'Live Scores - Settings', 'oscimp_trdom' ) . "</h2>"; ?>
     
  <h3>To add livescores insert shortcode <strong>[livescore]</strong> into page or post. Copy/paste. Easy setup.</h3>
<br />
<h3>Please support us for keep going free!</h3>
    <div class="form-group">
        <label class="col-sm-1 control-label"></label>
        <div class="col-sm-11">
            <label style="width: 100%;">

                <input type="checkbox" checked="checked" onclick="ms_click_credit_link();" id="ms_author_linking" <?php echo ms_Main::$settings['ms_author_linking'] == 1? 'checked':'';?>>
                Please keep active our publisher link
            </label>
			<br />
            <label style="width: 100%;">
				GMT: <input type="text" id="ms_gmt" value="<?php echo ms_Main::$settings['ms_gmt']; ?>"> (+2, -3 etc.) <button type="button" onclick="ms_click_gmt();">Change</button>
            </label>
			<br />
			<label style="width: 100%;">
				Language: 
				<select id="ms_lang">
					<option value="ar" <?php echo ms_Main::$settings['ms_lang'] == 'ar' ? 'selected' : ''; ?>>Arabic</option>
					<option value="br" <?php echo ms_Main::$settings['ms_lang'] == 'br' ? 'selected' : ''; ?>>Brazilian Portuguese</option>
					<option value="cn" <?php echo ms_Main::$settings['ms_lang'] == 'cn' ? 'selected' : ''; ?>>Chinese</option>
					<option value="de" <?php echo ms_Main::$settings['ms_lang'] == 'de' ? 'selected' : ''; ?>>German</option>
					<option value="es" <?php echo ms_Main::$settings['ms_lang'] == 'es' ? 'selected' : ''; ?>>Spanish</option>
					<option value="en" <?php echo ms_Main::$settings['ms_lang'] == 'en' ? 'selected' : ''; ?>>English (default)</option>
					<option value="fr" <?php echo ms_Main::$settings['ms_lang'] == 'fr' ? 'selected' : ''; ?>>French</option>
					<option value="it" <?php echo ms_Main::$settings['ms_lang'] == 'it' ? 'selected' : ''; ?>>Italian</option>
					<option value="nl" <?php echo ms_Main::$settings['ms_lang'] == 'nl' ? 'selected' : ''; ?>>Dutch</option>
					<option value="pl" <?php echo ms_Main::$settings['ms_lang'] == 'pl' ? 'selected' : ''; ?>>Polish</option>
					<option value="hu" <?php echo ms_Main::$settings['ms_lang'] == 'hu' ? 'selected' : ''; ?>>Hungarian</option>
					<option value="he" <?php echo ms_Main::$settings['ms_lang'] == 'he' ? 'selected' : ''; ?>>Hebrew</option>
					<option value="tr" <?php echo ms_Main::$settings['ms_lang'] == 'tr' ? 'selected' : ''; ?>>Turkisch</option>
					<option value="jp" <?php echo ms_Main::$settings['ms_lang'] == 'jp' ? 'selected' : ''; ?>>Japenese</option>
					<option value="fi" <?php echo ms_Main::$settings['ms_lang'] == 'fi' ? 'selected' : ''; ?>>Suomi</option>
					<option value="ab" <?php echo ms_Main::$settings['ms_lang'] == 'ab' ? 'selected' : ''; ?>>Shqiptar</option>
					<option value="bg" <?php echo ms_Main::$settings['ms_lang'] == 'bg' ? 'selected' : ''; ?>>Bulgarian</option>
					<option value="dk" <?php echo ms_Main::$settings['ms_lang'] == 'dk' ? 'selected' : ''; ?>>Dansk</option>
					<option value="gr" <?php echo ms_Main::$settings['ms_lang'] == 'gr' ? 'selected' : ''; ?>>Greek</option>
					<option value="kr" <?php echo ms_Main::$settings['ms_lang'] == 'kr' ? 'selected' : ''; ?>>Korean</option>
					<option value="us" <?php echo ms_Main::$settings['ms_lang'] == 'us' ? 'selected' : ''; ?>>American English</option>
					<option value="no" <?php echo ms_Main::$settings['ms_lang'] == 'no' ? 'selected' : ''; ?>>Norsk</option>
					<option value="ku" <?php echo ms_Main::$settings['ms_lang'] == 'ku' ? 'selected' : ''; ?>>Kurdish</option>
					<option value="ru" <?php echo ms_Main::$settings['ms_lang'] == 'ru' ? 'selected' : ''; ?>>Russian</option>
					<option value="sw" <?php echo ms_Main::$settings['ms_lang'] == 'sw' ? 'selected' : ''; ?>>Swahili</option>
					<option value="ea" <?php echo ms_Main::$settings['ms_lang'] == 'ea' ? 'selected' : ''; ?>>Argentinian Spanish</option>
					<option value="el" <?php echo ms_Main::$settings['ms_lang'] == 'el' ? 'selected' : ''; ?>>Latin American Spanish</option>
					<option value="ha" <?php echo ms_Main::$settings['ms_lang'] == 'ha' ? 'selected' : ''; ?>>Hausa</option>
					<option value="hk" <?php echo ms_Main::$settings['ms_lang'] == 'hk' ? 'selected' : ''; ?>>Traditional Chinese</option>
					<option value="id" <?php echo ms_Main::$settings['ms_lang'] == 'id' ? 'selected' : ''; ?>>Bahasa Indonesia</option>
					<option value="mx" <?php echo ms_Main::$settings['ms_lang'] == 'mx' ? 'selected' : ''; ?>>Mexican</option>
					<option value="pt" <?php echo ms_Main::$settings['ms_lang'] == 'pt' ? 'selected' : ''; ?>>Portuguese</option>
					<option value="se" <?php echo ms_Main::$settings['ms_lang'] == 'se' ? 'selected' : ''; ?>>Swedish</option>
					<option value="th" <?php echo ms_Main::$settings['ms_lang'] == 'th' ? 'selected' : ''; ?>>Thai</option>
					<option value="tw" <?php echo ms_Main::$settings['ms_lang'] == 'tw' ? 'selected' : ''; ?>>Chinese (Taiwanese)</option>
					<option value="ro" <?php echo ms_Main::$settings['ms_lang'] == 'ro' ? 'selected' : ''; ?>>Romanian</option>
					<option value="xh" <?php echo ms_Main::$settings['ms_lang'] == 'xh' ? 'selected' : ''; ?>>Xhosa</option>
					<option value="zu" <?php echo ms_Main::$settings['ms_lang'] == 'zu' ? 'selected' : ''; ?>>Zulu</option>
					<option value="hr" <?php echo ms_Main::$settings['ms_lang'] == 'hr' ? 'selected' : ''; ?>>Croatian</option>
				</select>
				<button type="button" onclick="ms_click_lang();">Change</button>
            </label>
       </div>
    </div>
<p>Thanks for your support.</p>
</div>

