<?php

function zapi_load_frontend_styles()
{
    wp_register_style( 'zapi-styles',  plugins_url( '../css/frontend.css', __FILE__ ) );
    wp_enqueue_style( 'zapi-styles' );
}

function zapi_menu_pages()
{

    add_menu_page('Configurar zapizapi', 'ZapiZapi', 'manage_options', 'zapi-menu', 'zapi_panel_page');

}

// função para carregar o frontned do admin / function to load admin page 
function zapi_panel_page() 
{
    
    require_once dirname( __DIR__ ) . "/admin/panel.php";
    
}