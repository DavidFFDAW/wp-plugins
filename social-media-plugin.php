<?php
/**
 * Plugin Name: social-media-plugin
 * Plugin URI:  https://github.com/DavidFFDAW/wp-plugins
 * Description: Basic WordPress Social Media Plugin
 * Version:     1.0.0
 * Author:      David Fernandez Flores
 * Author URI:  https://developer.wordpress.org/
 * License:     GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: wporg
 * Domain Path: /languages
 */

function addSocialMedia($content){
    $content .= '<a href="https://es-es.facebook.com">FACEBOOK</a><br><a href="/https://twitter.com">TWITTER</a>';
    echo $content;
}
add_filter('the_content','addSocialMedia');