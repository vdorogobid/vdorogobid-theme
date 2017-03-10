<?php

function loadScriptSite(){

    /*
     * get_template_directory_uri()
     * Получает URL текущей темы. Учитывает SSL. Не учитывает наличие дочерней темы. Не содержит закрывающий слэш.
     * https://wp-kama.ru/function/get_template_directory_uri
     */

    $version = false;

    wp_register_style(
        'vdorogobid-style', //$handle
        get_template_directory_uri().'/css/style.css', // $src
        array(), //$deps,
        $version // $ver
    );
    wp_register_style(
        'vdorogobid-ie9', //$handle
        get_template_directory_uri().'/css/ie9.css', // $src
        array(), //$deps,
        $version // $ver
    );
    wp_register_style(
        'vdorogobid-info-page', //$handle
        get_template_directory_uri().'/css/info-page.css', // $src
        array(), //$deps,
        $version // $ver
    );
   wp_register_style(
        'vdorogobid-bootstrap', //$handle
        get_template_directory_uri().'/css/bootstrap/bootstrap.css', // $src
        array(), //$deps,
        $version // $ver
    );
     wp_register_style(
        'vdorogobid-bootstrap.min', //$handle
        get_template_directory_uri().'/css/bootstrap/bootstrap.min.css', // $src
        array(), //$deps,
        $version // $ver
    );
     wp_register_style(
        'vdorogobid-bootstrap-theme', //$handle
        get_template_directory_uri().'/css/bootstrap/bootstrap-theme.css', // $src
        array(), //$deps,
        $version // $ver
    );
     wp_register_style(
        'vdorogobid-font-awesome', //$handle
        get_template_directory_uri().'/fonts/font-awesome.css', // $src
        array(), //$deps,
        $version // $ver
    );
    wp_register_style(
        'vdorogobid-font-awesome.min', //$handle
        get_template_directory_uri().'/fonts/font-awesome.min.css', // $src
        array(), //$deps,
        $version // $ver
    );

    wp_enqueue_style('vdorogobid-style');
    wp_enqueue_style('vdorogobid-ie9');
    wp_enqueue_style('vdorogobid-info-page');
    wp_enqueue_style('vdorogobid-bootstrap');
    wp_enqueue_style('vdorogobid-bootstrap.min');
    wp_enqueue_style('vdorogobid-bootstrap-thene');
    wp_enqueue_style('vdorogobid-font-awesome');
    wp_enqueue_style('vdorogobid-font-awesome.min');

    wp_register_script(
        'vdorogobid-scripts', //$handle
        get_template_directory_uri().'/js/scripts.js', //$src
        array(
            'jquery'
        ), //$deps
        $version, //$ver
        true //$$in_footer
    );
    wp_register_script(
        'vdorogobid-main.min', //$handle
        get_template_directory_uri().'/js/main.min.js', //$src
        array(
            'jquery'
        ), //$deps
        $version, //$ver
        true //$$in_footer
    );
     wp_register_script(
        'vdorogobid-skip-link-focus-fix', //$handle
        get_template_directory_uri().'/js/skip-link-focus-fix.js', //$src
        array(
            'jquery'
        ), //$deps
        $version, //$ver
        true //$$in_footer
    );
    wp_register_script(
        'vdorogobid-masonry-init', //$handle
        get_template_directory_uri().'/js/masonry-init.js', //$src
        array(
            'jquery-masonry'
        ), //$deps
        $version, //$ver
        true //$$in_footer
    );
    
    
    
    wp_enqueue_script('vdorogobid-scripts');
    wp_enqueue_script('vdorogobid-main.min');
    wp_enqueue_script('vdorogobid-skip-link-focus-fix');
    wp_enqueue_script('vdorogobid-masonry-init');
}





add_action( 'wp_enqueue_scripts', 'loadScriptSite');

/**
 * Включаем поддержку произвольных меню
 */
function registerNavMenu() {
    register_nav_menu( 'primary', __('Primary Menu', VDOROGOBID_THEME_TEXTDOMAIN) );
}
add_action( 'after_setup_theme', 'registerNavMenu', 100 );


define("VDOROGOBID_THEME_TEXTDOMAIN", 'vdorogobid-theme');

/**
 * Загрузка Text Domain
 */
function themeLocalization(){
    load_theme_textdomain(VDOROGOBID_THEME_TEXTDOMAIN, get_template_directory() . '/languages/');
}
add_action('after_setup_theme', 'themeLocalization');


//post-formats
add_theme_support( 'post-formats', array( 'aside', 'gallery' ) );
//post-thumbnails
add_theme_support( 'post-thumbnails' );

add_theme_support( 'custom-header', array(
    'video' => true,
) );

add_theme_support( 'automatic-feed-links' );


add_theme_support('custom-logo');