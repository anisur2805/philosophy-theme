<?php

require_once get_theme_file_path( "/inc/tgm.php" );
require_once get_theme_file_path( "/inc/attachments.php" );
require_once get_theme_file_path( "/widgets/social-icons-widget.php" );

if ( site_url() == "http:philosophy.test" ) {
 define( "VERSION", time() );
} else {
 define( "VERSION", wp_get_theme()->get( "Version" ) );
}

function philosophy_theme_setup() {
 load_theme_textdomain( 'philosophy' );
 add_theme_support( 'post-thumbnails' );
 add_theme_support( 'title-tag' );
 add_theme_support( 'html5', ['search-form', 'comment-list'] );
 add_theme_support( 'post-formats', ['image', 'audio', 'video', 'quote', 'gallery', 'link'] );
 add_editor_style( '/assets/css/editor-style.css' );

 register_nav_menu( "topmenu", __( "Top Menu", "philosophy" ) );
 register_nav_menus( [
  "footerleft"   => __( "Footer Left Menu", "philosophy" ),
  "footermiddle" => __( "Footer Middle Menu", "philosophy" ),
  "footerright"  => __( "Footer Right Menu", "philosophy" ),
 ] );

 add_image_size( 'philosophy-home-squre', '400', '400', true );
}

add_action( 'after_setup_theme', 'philosophy_theme_setup' );

function philosophy_assets() {
 wp_enqueue_style( 'fontawesome-css', get_theme_file_uri( '/assets/css/font-awesome/css/font-awesome.css' ), null, '1.0' );
 wp_enqueue_style( 'fonts-css', get_theme_file_uri( '/assets/css/fonts.css' ), null, '1.0' );
 wp_enqueue_style( 'base-css', get_theme_file_uri( '/assets/css/base.css' ), null, '1.0' );
 wp_enqueue_style( 'vendor-css', get_theme_file_uri( '/assets/css/vendor.css' ), null, '1.0' );
 wp_enqueue_style( 'main-css', get_theme_file_uri( '/assets/css/main.css' ), null, '1.0' );
 wp_enqueue_style( 'philosophy-css', get_stylesheet_uri(), null, VERSION );

 wp_enqueue_script( 'modernizr-js', get_theme_file_uri( '/assets/js/modernizr.js' ), null, '1.0' );
 wp_enqueue_script( 'pace-js', get_theme_file_uri( '/assets/js/pace.min.js' ), null, '1.0' );
 wp_enqueue_script( 'plugins-js', get_theme_file_uri( '/assets/js/plugins.js' ), ['jquery'], '1.0', true );
 wp_enqueue_script( 'main-js', get_theme_file_uri( '/assets/js/main.js' ), ['jquery'], '1.0', true );
 wp_enqueue_script( 'philosophy-js', get_theme_file_uri( '/assets/js/philosophy.js' ), ['jquery'], VERSION, true );

}

add_action( 'wp_enqueue_scripts', 'philosophy_assets' );

function philosophy_pagination() {
 global $wp_query;
 $links = paginate_links(
  [
   'current'  => max( 1, get_query_var( 'paged' ) ),
   'total'    => $wp_query->max_num_pages,
   'type'     => 'list',
   'mid_size' => 3,
  ]
 );
 $links = str_replace( 'page-numbers', 'pgn__num', $links );
 $links = str_replace( 'prev', 'pgn__prev', $links );
 $links = str_replace( "<ul class='pgn__num'>", '<ul>', $links );
 $links = str_replace( 'next', 'pgn__next', $links );
 $links = str_replace( 'page-numbers', 'pgn__num', $links );

 echo $links;
}

remove_action( 'term_description', 'wpautop' );

function philosophy_widgets() {
 register_sidebar( [
  'name'          => __( 'About Us', 'philosophy' ),
  'id'            => 'about-us',
  'description'   => __( 'Widgets in this area will be shown on About Us Page.', 'philosophy' ),
  'before_widget' => '<div id="%1$s" class="col-block %2$s">',
  'after_widget'  => '</div>',
  'before_title'  => '<h3 class="quarter-top-margin">',
  'after_title'   => '</h3>',
 ] );

 register_sidebar( [
  'name'          => __( 'Contact Maps Section', 'philosophy' ),
  'id'            => 'contact-maps',
  'description'   => __( 'Widgets in this area will be shown on Contact Us Page.', 'philosophy' ),
  'before_widget' => '<div id="%1$s" class="%2$s">',
  'after_widget'  => '</div>',
  'before_title'  => '',
  'after_title'   => '',
 ] );

 register_sidebar( [
  'name'          => __( 'Contact Information Section', 'philosophy' ),
  'id'            => 'contact-info',
  'description'   => __( 'Widgets in this area will be shown on Contact Us Page.', 'philosophy' ),
  'before_widget' => '<div id="%1$s" class="col-block %2$s">',
  'after_widget'  => '</div>',
  'before_title'  => '<h3 class="quarter-top-margin">',
  'after_title'   => '</h3>',
 ] );

 register_sidebar( [
  'name'          => __( 'Footer About Philosophy Section', 'philosophy' ),
  'id'            => 'about-philosophy',
  'description'   => __( 'Widgets in this area will be shown on footer about philosophy section.', 'philosophy' ),
  'before_widget' => '<div id="%1$s" class="%2$s">',
  'after_widget'  => '</div>',
  'before_title'  => '<h3>',
  'after_title'   => '</h3>',
 ] );

 register_sidebar( [
  'name'          => __( 'Footer Copyright', 'philosophy' ),
  'id'            => 'footer-copyright',
  'description'   => __( 'Widgets in this area will be shown on footer copyright section.', 'philosophy' ),
  'before_widget' => '<div id="%1$s" class="s-footer__copyright %2$s">',
  'after_widget'  => '</div>',
  'before_title'  => '',
  'after_title'   => '',
 ] );

 register_sidebar( [
  'name'          => __( 'Social Icons', 'philosophy' ),
  'id'            => 'social-icons',
  'description'   => __( 'Widgets in this area will be shown on social icons.', 'philosophy' ),
  'before_widget' => '<div id="%1$s" class="%2$s">',
  'after_widget'  => '</div>',
  'before_title'  => '',
  'after_title'   => '',
 ] );

}

add_action( "widgets_init", "philosophy_widgets" );