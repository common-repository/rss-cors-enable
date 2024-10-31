<?php
/**
 * Plugin Name: RSS CORS Enable
 * Plugin URI: https://www.nofrillsplugins.com/rss-feed-cors-all
 * Description: Adds CORS header to WordPress RSS feed.
 * Version: 1.0.1
 * Author: No Frills Plugins
 * Author URI: https://www.nofrillsplugins.com/
 */

// Hook into the 'rss2_ns' action which is called when building the RSS2 feed namespace.
add_action('rss2_ns', 'nf_add_cors_to_rss_feed');

// Define the callback function.
function nf_add_cors_to_rss_feed() {
    // Check if the current request is for the RSS feed.
    if (is_feed()) {
        // Add the Access-Control-Allow-Origin header to allow all origins.
        header("Access-Control-Allow-Origin: *");
    }
}
