<style>
    #ms-notice-support-view{
        margin-top: 10px;
        padding: 10px 10px 10px 10px;
        border-color: rgba(0, 0, 0, 0.22);
        border-width: 1px;
        border-style: solid;
        border-radius: 2px;
        margin-left: 10px;
    }
    .ms-support-click-common {
        display: inline;
        position: relative;
    }

</style>
<script>
    jQuery(document).ready(function(){
        jQuery( '#ms-notice-support-close' ).click( function (event) {
            jQuery("#ms-notice-support-view").hide();

            var data = {
                action:'ms_set_support_time'
            };

            jQuery.post(ajax_object.ajax_url, data, function(respond) {

            });
            return false;
        } );

        jQuery( '#ms-notice-support-click' ).click( function (event) {

                if(document.getElementById('ms_author_linking'))        document.getElementById('ms_author_linking').checked = true;

                var data = {
                    action:'ms_set_support_link'
                };

                jQuery.post(ajax_object.ajax_url, data, function(respond) {
                    jQuery("#ms_support_title_1").hide();
                    jQuery("#ms_support_title_2").show();
                    jQuery("#ms_support_title_3").hide();
                });

        } );

    });

</script>

<div class="updated" id="ms-notice-save-view" style="display: none; margin-left: 10px;">
<p>Save Settings Successfully.</p>
</div>

<div class="updated" id="ms-notice-support-view" style="<?php

    if(ms_Main::$settings['ms_author_linking'] == '0'){

        //if((time() - ms_Main::$settings['ms_initial_dt']) >= 24 * 60 * 60){
        if((time() - ms_Main::$settings['ms_initial_dt']) >= 1){

        }
        else{
            echo 'display: none;';
        }
    }
    else {
        echo 'display: none;';
    }

?>">

    <div class="ms-support-click-title ms-support-click-common" id="ms_support_title_1">Thanks for using our Live Scores plugin.
        <a href="<?php  $url = admin_url();
        echo $url . 'options-general.php?page=livescore-plugin';?>">Football Live Score</a>. Please keep active our publisher link to support us for keep going free!
        <a href="#" id="ms-notice-support-click"> OKEY active it.</a>

    </div>
    <div class="ms-support-click-title ms-support-click-common" id="ms_support_title_2" style="display: none;">Activated! Thanks for your support us</div>
    <div style="float: right;" id="ms_support_title_3">
        <small><a href="#" id="ms-notice-support-close"> Hide This Message</a> </small>
    </div>

</div>