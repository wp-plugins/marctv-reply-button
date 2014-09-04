<?php
/*
  Plugin Name: MarcTV Reply Button
  Plugin URI: http://www.marctv.de/blog/marctv-wordpress-plugins/
  Description: Places an additional reply button at the end of the comment thread. 
  Version: 1.7.2
  Author: MarcDK
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
        array("jquery"), "1.7.1", 0
    );
}

if (!is_admin()) {
  add_action('wp_print_styles', 'add_marctv_reply_scripts');
}

?>
