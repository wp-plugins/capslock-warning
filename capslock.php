<?php 
/*
Plugin Name: check caps lock
Plugin URI: 
Description: Check the caps lock key on or not
Author: Monir
Version: 1.0.5
Author URI: 
*/
 



function check_caps_lock(){
    if(!is_user_logged_in()){
        
        ?>
         <script>
         function capLock(e){
 kc = e.keyCode?e.keyCode:e.which;
 sk = e.shiftKey?e.shiftKey:((kc == 16)?true:false);
 if(((kc >= 65 && kc <= 90) && !sk)||((kc >= 97 && kc <= 122) && sk))
  alert('caps lock is on');
 
}
          //jQuery(function(){
          jQuery(document).ready(function() {
    
                jQuery('#user_pass').keypress( function(event) {
                  capLock(event); 
      
 });
    
    
});
//});


         </script>
        <?php
    }
}
wp_enqueue_script("jquery");  

add_action('login_head', 'check_caps_lock'); 