<?php


add_action('wp_enqueue_scripts', 'rickmans_scripts');
add_action('widgets_init', 'rickmans_register');
add_action('after_setup_theme', 'rickmans');
function rickmans_scripts()
{           
    wp_enqueue_script('slick', _rickmans_assets_path('js/for_slider_jquery/slick.min.js'), [], '1.0', true);
    wp_enqueue_script('slickjq', _rickmans_assets_path('js/for_slider_jquery/jquery-3.7.1.min.js'), [], '1.0', true);
    wp_enqueue_script('main', _rickmans_assets_path('js/main.js'), [], '1.0', true);
    wp_enqueue_script('mob', _rickmans_assets_path('js/mob.js'), [], '1.0', true);
    wp_enqueue_script('slider', _rickmans_assets_path('js/slider.js'), [], '1.0', true);
    wp_enqueue_style('style', _rickmans_assets_path('css/style.css'), [], '1.0', 'all');
    wp_enqueue_style('style', _rickmans_assets_path('js/for_slider_jquery/slick.css'), [], '1.0', 'all');
}



function _rickmans_assets_path($path)
{
    return get_template_directory_uri() . '/assets/' . $path;
}

acf_add_options_page(array(
    'page_title'     => 'Theme General Settings',
    'menu_title'    => 'Theme Settings',
    'menu_slug'     => 'theme-general-settings',
    'capability'    => 'edit_posts',
    'redirect'        => false
));

acf_add_options_sub_page(array(
    'page_title'     => 'Theme Header Settings',
    'menu_title'    => 'Header',
    'parent_slug'    => 'theme-general-settings',
));

acf_add_options_sub_page(array(
    'page_title'     => 'Theme Footer Settings',
    'menu_title'    => 'Footer',
    'parent_slug'    => 'theme-general-settings',
));
acf_add_options_sub_page(array(
    'page_title'     => 'Theme Menu Mobile Settings',
    'menu_title'    => 'Mobile menu',
    'parent_slug'    => 'theme-general-settings',
));



  function rickmans_register()
{
    register_sidebar([
        'name' => 'Сайдбар для переключения языков',
        'id' => 'rickmans-lang',
        'before_widget' => null,
        'after_widget'  => null
      ]);
      register_sidebar([
        'name' => 'Сайдбар для переключения языков мобильный',
        'id' => 'rickmans-lang-mob',
        'before_widget' => null,
        'after_widget'  => null
      ]);
      register_sidebar([
        'name' => 'Cайдбар в основном меню для телефона',
        'id' => 'rickmans-tel',
        'before_widget' => null,
        'after_widget'  => null
      ]);
      register_sidebar([
        'name' => 'Cайдбар в основном меню для почты',
        'id' => 'rickmans-email',
        'before_widget' => null,
        'after_widget'  => null
      ]);
      register_sidebar([
        'name' => 'Cайдбар футер',
        'id' => 'rickmans-footer',
        'before_widget' => null,
        'after_widget'  => null
      ]);
      register_sidebar([
        'name' => 'Cайдбар футер_разработка',
        'id' => 'rickmans-footer_dev',
        'before_widget' => null,
        'after_widget'  => null
      ]);
}

function rickmans()
{
  register_nav_menu('menu-background', 'меню в шапке');
  register_nav_menu('menu-mob',    'мобильное меню');
  register_nav_menu('menu-footer', 'меню в подвале');

  add_theme_support('custom-logo');
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_theme_support( 'menus');
}