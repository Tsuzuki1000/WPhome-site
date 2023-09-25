<?php 

/*
css読み込み
*/

function my_enqueue_styles() {
  wp_enqueue_style('ress', '//unpkg.com/ress/dist/ress.min.css', array(), false, 'all');
  wp_enqueue_style('style', get_stylesheet_uri(), array('ress'), false, 'all');

  if(is_single()) {
    wp_enqueue_style('single', get_theme_file_uri('css/single.css'), array('ress', 'style'), false, 'all');
  } 
  
  if(is_category()) {
    wp_enqueue_style('category', get_theme_file_uri('css/category.css'), array('ress', 'style'), false, 'all');
  } 

  if(is_page()) {
    wp_enqueue_style('page', get_theme_file_uri('css/page.css'), array('ress', 'style'), false, 'all');
  } 
  
}

add_action('wp_enqueue_scripts', 'my_enqueue_styles');





/*
jquery読み込み
*/

function theme_name_files() {
  //utility.jsの読み込み＆jQuery読み込み
  wp_enqueue_script( 'jQuery', get_theme_file_uri('js/main.js') ,array('jquery') ,'',true);
  }

  add_action( 'wp_enqueue_scripts', 'theme_name_files' );



/*
サムネイル
*/
add_theme_support('post-thumbnails');




