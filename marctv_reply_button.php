<?php
/*
  Plugin Name: MarcTV Reply Button
  Plugin URI: http://wordpress.org/extend/plugins/marctv-reply-button/
  Description: Adds a reply button after every 2nd level thread with jQuery. Works only with threaded comment 2nd level settings.
  Version: 1.5
  Author: Marc Tönsing
  Author URI: http://www.marctv.de
  License: GPL2

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License as published by
  the Free Software Foundation; either version 2 of the License, or
  (at your option) any later version.
 */

if ( !is_admin() ) {
    wp_enqueue_script(
        "marctv_reply_button", WP_PLUGIN_URL . "/marctv-reply-button/marctv_reply_button.js",
        array("jquery"), "1.0", 1
    );
}
?>
