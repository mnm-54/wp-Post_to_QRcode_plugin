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

function pqc_load_textdomain()
{
    load_plugin_textdomain('post-to-qrcode', false, dirname(__FILE__) . '/languages');
}
add_action('plugins_loaded', 'pqc_load_textdomain');
