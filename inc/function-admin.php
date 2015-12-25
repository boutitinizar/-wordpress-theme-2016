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
    register_setting('nizar-settings-group','last_name');
    register_setting('nizar-settings-group','user_description');
    register_setting('nizar-settings-group','twitter_handler', 'sanitisation_twitter_handler');
    register_setting('nizar-settings-group','Facbook_handler');
    register_setting('nizar-settings-group','Google_handler');

    add_settings_section('nizar-sidebar-obtions','Sidebar Options','nizar_sidebar_options','nizar-theme-option');

    add_settings_field('sidebaer-name','Full Name ','sunset_sedebar_name','nizar-theme-option','nizar-sidebar-obtions' );
    add_settings_field('sidebaer-description','Description','sunset_sedebar_description','nizar-theme-option','nizar-sidebar-obtions' );
    add_settings_field('sidebaer-twitter','Twitter handler','sunset_sedebar_twitter','nizar-theme-option','nizar-sidebar-obtions' );
    add_settings_field('sidebaer-Facbook','Facbook handler','sunset_sedebar_Facbook','nizar-theme-option','nizar-sidebar-obtions' );
    add_settings_field('sidebaer-Google+','Google+ handler','sunset_sedebar_Google','nizar-theme-option','nizar-sidebar-obtions' );
}

function nizar_sidebar_options(){
 echo "Costomize your Sidebar Information";
}
function sunset_sedebar_name(){
    $firstname = esc_attr(get_option('first_name'));
    $last_name = esc_attr(get_option('last_name'));
    $data =  '<input type="text" name="first_name" value="'.$firstname.'" placeholder="First Name">';
    $data .=  '<input type="text" name="last_name" value="'.$last_name.'" placeholder="Last Name">';
    echo $data;
}
function sunset_sedebar_description(){
    $user_description = esc_attr(get_option('user_description'));
     $data =  '<input type="text" name="user_description" value="'.$user_description.'" placeholder="User Description">';
    echo $data;
}
function sunset_sedebar_twitter(){
    $twitter = esc_attr(get_option('twitter_handler'));
    $data =  '<input type="text" name="twitter_handler" value="'.$twitter.'" placeholder="Twitter handler"><p class="description">Input your twitter username without the @ charecter.</p>';
    echo $data;
}
function sunset_sedebar_Facbook(){
    $Facbook_handler = esc_attr(get_option('Facbook_handler'));
    $data =  '<input type="text" name="Facbook_handler" value="'.$Facbook_handler.'" placeholder="Facbook handler">';
    echo $data;
}
function sunset_sedebar_Google(){
    $Google = esc_attr(get_option('Google_handler'));
    $data =  '<input type="text" name="Google_handler" value="'.$Google.'" placeholder="Google handler">';
    echo $data;
}


//Sanitization settings
function sanitisation_twitter_handler($input){
    $out = sanitize_text_field($input);
    $out = str_replace('@','',$out);
    return $out;
}

function nizar_theme_create_page(){
 require_once get_template_directory()."/inc/templates/nizar-admin.php";
}
function nizar_thme_settings_page(){
    echo'<h1>Sunset Custon Css</h1>';
}

