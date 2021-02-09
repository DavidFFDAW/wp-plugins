<?php
/**
 * Plugin Name: plugin-footer
 * Plugin URI:  github repo: :::::
 * Description: Basic WordPress Plugin Footer Comment
 * Version:     1.0.0
 * Author:      David Fernandez Flores
 * Author URI:  https://developer.wordpress.org/
 * License:     GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: wporg
 * Domain Path: /languages
 */

function getSentences(){
    return array('Hola','Estas en mi wordpress','¿Que tal tu experiencia?','Adios');
}

function getRandomSentence(){
    $sentences = getSentences();
    return $sentences[mt_rand(0,count($sentences) - 1)];
}

function mfp_Add_Text(){
    echo getRandomSentence();
}

add_action('wp_footer','mfp_Add_Text');
