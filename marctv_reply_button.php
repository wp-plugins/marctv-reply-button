<?php
/*
  Plugin Name: MarcTV Reply Button
  Plugin URI: http://www.marctv.de/blog/2010/08/25/marctv-wordpress-plugins/
  Description: Adds a reply button after every 2nd level thread with jQuery. Works only with threaded comment 2nd level settings.
  Version: 1.6
  Author: Marc Tönsing
  Author URI: http://www.marctv.de
  License: GPL2

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License as published by
  the Free Software Foundation; either version 2 of the License, or
  (at your option) any later version.
 */


function add_marctv_reply_scripts () {
    wp_enqueue_script(
        "marctv_reply_button", WP_PLUGIN_URL . "/marctv-reply-button/marctv_reply_button.js",
        array("jquery"), "1.6", 0
    );
}

if (!is_admin() ) {
  add_action('wp_print_styles', 'add_marctv_reply_scripts');
}

?>
