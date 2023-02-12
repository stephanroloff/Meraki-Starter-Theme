<?php
 
function body_open_scripts(){
   ?>
   <!-- <h1>Google Analitics</h1> -->
   <?php
}
 
add_action('wp_body_open', 'body_open_scripts');