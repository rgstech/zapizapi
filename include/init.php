<?php



add_action('wp_enqueue_scripts', 'sp_load_frontend_styles');

add_action('wp_footer', 'zapi_icon_show');

add_action( 'admin_menu', 'my_menu_pages');