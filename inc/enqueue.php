<?php
/**
 * User: Nizar
 * Date: 25/12/2015
 * Time: 16:47
 */
function nizar_load_admin_scripts($hook){
    if('toplevel_page_nizar-theme-option' != $hook){
        return;
    }
    wp_register_style('nizar_admin',get_template_directory_uri().'/css/nizar.admin.css',array(),'1.0.0','all');
    wp_enqueue_style('nizar_admin');
}
add_action('admin_enqueue_scripts','nizar_load_admin_scripts');