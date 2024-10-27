<?php
/*
  Plugin Name: disable REST API entrypoint
  Plugin URI:
  Description: disable REST API entrypoint
  Version: 1.0.0
  Author: osawa naotaka
  Author URI: 
  License: MIT
 */

 add_action('after_setup_theme', function() {
  remove_action('wp_head', 'rest_output_link_wp_head');
  remove_action('wp_head', 'wp_oembed_add_discovery_links');
});
