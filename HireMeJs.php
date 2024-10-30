<?php

/*
 * Plugin Name: HireMeJs
 * Description: Someone is looking at your Website Code and you are searching for some IT-Guy? Now get together
 * Version: 1.0
 * Author: Benjamin Klein
 * Author URI: http://touchdata.net/
 * License: MIT
 */

/**
 * load all JS to all pages... yes ALL OF THEM 
 */
function td_hmj_load_script_setup() {
    wp_register_script('figletjs', plugins_url('/js/figlet.js', __FILE__), array('jquery'));
    wp_register_script('jquery-figlet', plugins_url('/js/jquery.figlet.js', __FILE__), array('jquery', 'figletjs'));
    wp_register_script('devtools-detect', plugins_url('/js/devtools-detect.js', __FILE__), array('jquery', 'figletjs', 'jquery-figlet'));

    wp_enqueue_script('jquery');
    wp_enqueue_script('devtools-detect');
    /* set path for loading fonts */
    wp_localize_script('figletjs', 'ajax_object', plugins_url('', __FILE__));

    register_setting('HireMeJs', 'td-hmj-settings');

    settings_fields('td-hmj-settings');


    if (get_option('td-hmj-greetings') != "") {
        if (get_option('td-hmj-font') != "") {
            wp_localize_script('figletjs', 'hmj_values', array(
                "font" => get_option('td-hmj-font'),
                "greetings" => get_option('td-hmj-greetings'),
                "text" => get_option('td-hmj-text')
                    )
            );
        }
    }
}

function td_hmj_load_script() {
    td_hmj_load_script_setup();
    wp_register_script('HireMeJs', plugins_url('/js/HireMe.js', __FILE__), array('jquery', 'devtools-detect', 'figletjs', 'jquery-figlet'));
    wp_enqueue_script('HireMeJs');
}
add_action('wp_enqueue_scripts', 'td_hmj_load_script');

/**
 * add options to a settings sub page
 */
function td_hmj_menu() {
    add_options_page('Einstellungen', 'HireMeJs', 'manage_options', 'my-unique-identifier', 'td_hmj_options');
}

function td_hmj_action_init() {
    load_plugin_textdomain('hmj', false, basename( dirname( __FILE__ ) ) . '/languages' );    
}
add_action('init', 'td_hmj_action_init');


add_action('admin_menu', 'td_hmj_menu');
// yes it is quick and it is dirty ... but ... sometime i like it dirty u know?
// http://thecodinglove.com/post/105338618844/when-a-software-wants-to-add-toolbars-and
require_once 'admin_options.php';

