<?php 
    /*
    Plugin Name: Football Live Scores
    Plugin URI: http://www.macsonuclarim.com
    Description: Add Free Football Live Scores on your website.
    Author: macsonuclari.com
    Version: 1.1.4
    Author URI: http://www.macsonuclarim.com
    */

add_shortcode('livescore', 'livescores');


function livescore_plugin(){
    	add_options_page('Live Score Settings', 'Live Scores', 'manage_options', 'livescore-plugin', 'ms_plugin_options');
}

add_action('admin_menu','livescore_plugin');


function ms_plugin_options(){
    	include('infot.php');
}


function livescores(){
?>
<iframe src="//www.macsonuclarim.com/live-score?gmt=<?php echo ms_Main::$settings['ms_gmt']; ?>&lang=<?php echo ms_Main::$settings['ms_lang']; ?>" class="skor" id="macsonuclarim_iframe" scrolling="no" frameborder="0" width="100%"></iframe>
<script type="text/javascript" src="http://www.macsonuclarim.com/live-score/scripts/frame.js"></script>
<?php
}
register_activation_hook( __FILE__,'msplugin_activate');
register_deactivation_hook( __FILE__,'msplugin_deactivate');
add_action('admin_init', 'msredirect_redirect');

function msredirect_redirect() {
if (get_option('msredirect_do_activation_redirect', false)) { 
delete_option('msredirect_do_activation_redirect'); 
wp_redirect('../wp-admin/options-general.php?page=livescore-plugin');
}
}

// Include Files
$files = array(
    '/classes/ms-module',
    '/classes/ms-main',
    '/classes/ms-show',
    '/classes/ms-setting',
    '/includes/admin-notice-helper/admin-notice-helper'
);

foreach ($files as $file) {
    require_once plugin_dir_path( __FILE__ ).$file.'.php';
}
if ( class_exists( 'ms_Main' ) ) {
    ms_Main::get_instance();
 }?>