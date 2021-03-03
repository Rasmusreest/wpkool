<?php
/**
 * Plugin Name: My Plugin
 * Plugin URI: http://rasmusreest.ikt.khk.ee
 * Description: The second plugin that I have ever created.
 * Version: 1.0
 * Author: Rasmus Reest
 * Author URI: http://rasmusreest.ikt.khk.ee
 */
 
add_action( 'the_content', 'my_thank_you_text' );

function my_thank_you_text ( $content ) {
    return $content .= '<p>Thank you for reading!</p>';
}