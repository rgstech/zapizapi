<?php

function sp_load_frontend_styles()
{
    wp_register_style( 'zapi-styles',  plugins_url( '../css/frontend.css', __FILE__ ) );
    wp_enqueue_style( 'zapi-styles' );
}

function my_menu_pages()
{

    add_menu_page('Configurar zapizapi', 'ZapiZapi', 'manage_options', 'my-menu', 'sp_panel_page');
  //add_submenu_page('my-menu', 'Submenu Page Title', 'Whatever You Want', 'manage_options', 'my-menu' );
  //add_submenu_page('my-menu', 'Submenu Page Title2', 'Whatever You Want2', 'manage_options', 'my-menu2' );

}

// function to load admin page
function sp_panel_page() 
{
    
    require_once dirname( __DIR__ ) . "/admin/panel.php";
    
}