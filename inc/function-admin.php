<?php
/**
 * User: Nizar
 * Date: 24/12/2015
 * Time: 23:22
 */
function nizar_add_admin_page(){
    add_menu_page('Nizar Theme Option','Nizar','manage_options','nizar-theme-option','nizar_theme_create_page',get_template_directory_uri().'/img/icon-mnb.svg',110);
    add_submenu_page('nizar-theme-option','Nizar Theme Option','General','manage_options','nizar-theme-option','nizar_theme_create_page');
    add_submenu_page('nizar-theme-option','Nizar Css Option','Custom Css','manage_options','nizar-theme-option-css','nizar_thme_settings_page');
   // actiavte custom settings
    add_action('admin_init','sunset_custom_settings');
}
add_action('admin_menu','nizar_add_admin_page');


/**
 *
 */
function sunset_custom_settings(){
    register_setting('nizar-settings-group','first_name');
    add_settings_section('nizar-sidebar-obtions','Sidebar Options','nizar_sidebar_options','nizar-theme-option');
    add_settings_field('sidebaer-name','First Name','sunset_sedebar_name','nizar-theme-option','nizar-sidebar-obtions' );
}

function nizar_sidebar_options(){
 echo "azeazeaze";
}
function sunset_sedebar_name(){
    $firstname = esc_attr(get_option('first_name'));
    echo '<input type="text" name="first_name" value="'.$firstname.'" placeholder="First Name">';
}
function nizar_theme_create_page(){
 require_once get_template_directory()."/inc/templates/nizar-admin.php";
}
function nizar_thme_settings_page(){
    echo'<h1>Sunset Custon Css</h1>';
}