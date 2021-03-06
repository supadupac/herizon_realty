<?php

  // call CSS files

  function herizon_files() {
    wp_enqueue_style('main_styles', get_stylesheet_uri());
    wp_enqueue_style('bootstrap_styles', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css');
    wp_enqueue_style('google_fonts', 'https://fonts.googleapis.com/css?family=Arvo|Lato|Open+Sans');
    wp_enqueue_style('font_awesome_styles', 'https://use.fontawesome.com/releases/v5.2.0/css/all.css');
    wp_enqueue_script('main_javascript', get_theme_file_uri('/js/script.js'), array('jquery'), NULL, '0.1.0', true);
  }

  add_action('wp_enqueue_scripts', 'herizon_files');


//  function announcements() {
//    register_post_type('announcements', [
//        'public' => true,
//        'labels' => [
//            'name' => 'Announcements',
//            'add_new_item' => 'Add new Announcement',
//            'edit_item' => 'Edit Announcement',
//            'all_items' => 'All Announcements',
//            'singular_name' => 'Announcement'
//        ],
//        'menu_icon' => 'dashicons-controls-volumeon'
//    ]);
//  }
//
//  add_action('init', 'announcements');

  // call JS files

?>
