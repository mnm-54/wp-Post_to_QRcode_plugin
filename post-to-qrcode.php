<?php
/*
Plugin Name: Post to QR code generator
Plugin URI: 
Description: Creates a Qr code of the post url, display under the post, which can be scaned using QR code scanner
Version: 1.0
Author: munem
Author URI: https://github.com/mnm-54
License: GPLv2 or later
Text Domain: post-to-qrcode
Domain Path: /languages/
*/

function pqrc_load_textdomain()
{
    load_plugin_textdomain('post-to-qrcode', false, dirname(__FILE__) . '/languages');
}
add_action('plugins_loaded', 'pqrc_load_textdomain');


function pqrc_display_qr_code($content)
{
    $current_post_id = get_the_ID();
    $current_post_tittle = get_the_title($current_post_id);
    $current_post_url = urlencode(get_the_permalink($current_post_id));
    $image_src = sprintf("https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=%s", $current_post_url);

    $content .= sprintf("<div class='qrcode'><img src='%s' alt='%s'/></div>", $image_src, $current_post_tittle);
    return $content;
}
add_filter('the_content', 'pqrc_display_qr_code');
