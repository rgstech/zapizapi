<?php

function sp_load_frontend_styles()
{
    wp_register_style( 'zapi-styles',  plugins_url( '../css/frontend.css', __FILE__ ) );
    wp_enqueue_style( 'zapi-styles' );
}

function my_menu_pages()
{

    add_menu_page('Configurar zapizapi', 'ZapiZapi', 'manage_options', 'my-menu', 'sp_panel_page');

}

// function to load admin page
function sp_panel_page() 
{
    
    require_once dirname( __DIR__ ) . "/admin/panel.php";
    
}