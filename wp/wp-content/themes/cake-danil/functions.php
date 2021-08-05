<?php
  function cake_danil_assets() {
    wp_enqueue_style( 'maincss', get_template_directory_uri() . '/style.min.css' );

    wp_deregister_script( 'jquery' );
    wp_register_script('jquery', get_stylesheet_directory_uri() .'/assets/js/jquery.min.js', array(), null, false);
    wp_enqueue_script('jquery');

    wp_enqueue_script( 'plugins', get_template_directory_uri() . '/assets/js/plugins.js', array(), '1.0', true );

    wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0', true );
  }

  add_action( 'wp_enqueue_scripts', 'cake_danil_assets' );

  add_theme_support( 'custom-logo' );

  add_theme_support( 'menus' );

  add_theme_support( 'post-thumbnails' );

  add_filter('nav_menu_link_attributes', 'filter_nav_menu_link_attributes', 10, 3);

  function filter_nav_menu_link_attributes($atts, $item, $args) {
    if ($args->menu === 'Главное меню левое' || $args->menu === 'Главное меню правое') {
      $atts['class'] = 'page-header__nav-list-link';
    }

    if ($args->menu === 'Меню футер правое' || $args->menu === 'Меню футер левое') {
      $atts['class'] = 'page-footer__nav-list-link';
    }

    return $atts;
  }

  add_action('acf/init', 'acf_add_options_page');

  if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
      'page_title'   => 'Контакты',
      'menu_title'  => 'Контакты',
      'menu_slug'   => 'main_contacts',
      'capability'  => 'edit_posts',
      'redirect'    => false
    ));

    acf_add_options_page(array(
      'page_title'   => 'Карта',
      'menu_title'  => 'Карта',
      'menu_slug'   => 'map',
      'capability'  => 'edit_posts',
      'redirect'    => false
    ));
  }

  //Подгрузка товаров

  add_action( 'wp_enqueue_scripts', 'true_loadmore_scripts' );

  function true_loadmore_scripts() {
    wp_enqueue_script(
      'true_loadmore',
      get_stylesheet_directory_uri() . '/assets/js/loadmore.js'
    );

    wp_localize_script(
      'true_loadmore',
      'ajax_url',
      array( 'ajaxUrl' => admin_url( 'admin-ajax.php' ) )
    );

    wp_enqueue_script( 'true_loadmore' );
  }

  add_action( 'wp_ajax_loadmore', 'true_loadmore' );
add_action( 'wp_ajax_nopriv_loadmore', 'true_loadmore' );

function true_loadmore() {

	$paged = ! empty( $_POST[ 'paged' ] ) ? $_POST[ 'paged' ] : 1;
	$paged++;

	$args = array(
		'paged' => $paged,
		'post_status' => 'publish'
	);

	query_posts( $args );

	while( have_posts() ) : the_post();

		get_template_part( 'template-parts/content/content', get_theme_mod( 'display_excerpt_or_full_post', 'excerpt' ) );

	endwhile;

	die;

}


