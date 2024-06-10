<?php
/*
Plugin Name: Disable Comment URL
Plugin URI: https://dwenn.ch
Description: A simple plugin to disable the website field in WordPress comments.
Version: 1.0
Author: Dwenn Kaufmann
Author URI: https://dwenn.ch
License: GPL2
*/

// Prevent direct access to the file
if ( !defined('ABSPATH') ) {
    exit;
}

// Function to remove the URL field from the comment form
function disable_comment_url_field($fields) {
    if(isset($fields['url'])) {
        unset($fields['url']);
    }
    return $fields;
}

// Add the function to the comment_form_default_fields filter
add_filter('comment_form_default_fields', 'disable_comment_url_field');
