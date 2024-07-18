<?php



add_action('wp_enqueue_scripts', 'zapi_load_frontend_styles');

add_action('wp_footer', 'zapi_icon_show');

add_action( 'admin_menu', 'zapi_menu_pages');