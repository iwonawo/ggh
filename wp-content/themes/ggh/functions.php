<?php

function GGH_files() {
  wp_enqueue_style('custom-google-fonts-roboto', '//fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap');
  wp_enqueue_script('font-awesome', '//kit.fontawesome.com/ad81bac05c.js', null, '1.0', true);
  wp_enqueue_script('swiper-min-js', '//unpkg.com/swiper/swiper-bundle.min.js', null, '1.0', true);
  wp_enqueue_style('swiper-min-style', '//unpkg.com/swiper/swiper-bundle.min.css');
  wp_enqueue_script('main-ggh-js', get_theme_file_uri('/js/index.js'), null, '1.0', true);
  wp_enqueue_style('main-ggh-styles', get_theme_file_uri('/css/styles.css'));
}

function GGH_features() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
}

function disable_emojis_tinymce($plugins) {
  if (is_array($plugins)) {
      return array_diff($plugins, array('wpemoji'));
  } else {
      return array();
  }
}

function disable_emojis() {
  remove_action('wp_head', 'print_emoji_detection_script', 7);
  remove_action('admin_print_scripts', 'print_emoji_detection_script');
  remove_action('wp_print_styles', 'print_emoji_styles');
  remove_action('admin_print_styles', 'print_emoji_styles');
  remove_filter('the_content_feed', 'wp_staticize_emoji');
  remove_filter('comment_text_rss', 'wp_staticize_emoji');
  remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
  add_filter('tiny_mce_plugins', 'disable_emojis_tinymce');
}

add_action('wp_enqueue_scripts', 'GGH_files');
add_action('after_setup_theme', 'GGH_features');
add_action('init', 'disable_emojis');

function ggh_post_types() {
  //Event Post Type
  register_post_type('event', array(
    'capability_type' => 'event',
    'map_meta_cap' => true,
    'show_in_menu' => true,
    'supports' => array('title', 'editor', 'excerpt'),
    'rewrite' => array('slug' => 'events'),
    'has_archive' => true,
    'public' => true,
    'labels' => array(
        'name' => 'Events',
        'add_new_item' => 'Add New Event',
        'edit_item' => 'Edit Event',
        'all_items' => 'All Events',
        'singular_name' => 'Event'
    ),
    'menu_icon' => 'dashicons-calendar-alt'
));

}
add_action('init', 'ggh_post_types');

@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );
