<?php

  // function for loading in CSS files
  function university_files()
  {
      wp_enqueue_style('custome-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');

      // loading font-awesome
      wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');

      // loading CSS
      // wp_enqueue_style('university_main_styles', get_stylesheet_uri());
    
      // for a loading JS file, (directory/file), dependencies, version nr, load before closing body tag = true
      // wp_enqueue_script('main-university-js', get_theme_file_uri('/js/scripts-bundled.js'), NULL, '1.0', true);

      wp_enqueue_script('main-university-js', 'http://localhost:3000/bundled.js', null, '1.0', true);

      // if(strstr($_SERVER['SERVER_NAME'], 'localhost:10003')) {
    //   // serve js/css from localhost (by webpack)
    //   wp_enqueue_script('main-university-js', 'http://localhost:3000/bundled.js', NULL, '1.0', true);
    // } else {
    //   wp_enqueue_script('our-university-js', get_theme_file_uri('/bundled-assets/vendors~scripts.8c97d901916ad616a264.js'), NULL, '1.0', true);
    //   wp_enqueue_script('main-university-js', get_theme_file_uri('/bundled-assets/scripts.bc49dbb23afb98cfc0f7.js'), NULL, '1.0', true);
    //   wp_enqueue_script('our-main-styles', get_theme_file_uri('/bundled-assets/styles.bc49dbb23afb98cfc0f7.css'), NULL, '1.0', true);
    // }
  }

  // call action(when, which), wp_enqueue_scripts - right before you run the action -> scripts hook/run styles
  add_action('wp_enqueue_scripts', 'university_files');


  function university_features()
  {
      // rejestracja menu 2 arg - 1) nazwa 2) nazwa do wyświetlenia w adminie (CMS wordpressa)
      register_nav_menu('headerMenuLocation', 'Header Menu Location');
      register_nav_menu('footerLocationOne', 'Footer Location One');
      register_nav_menu('footerLocationTwo', 'Footer Location Two');

      add_theme_support('title_tag');
  }

  // add after setup actions - wykonaj te funkcje
  add_action('after_setup_theme', 'university_features');


  // Przeniesione do folderu wp-content/mu-plugins (must use plugins) -> university-posts-types.php
  // tworzenie postu o własnym typie -> event, opis typu
  // function university_post_types()
  // {
  //     register_post_type('event', array(
  //      -- new type of editor ---
  //     'show_in_rest' => true,
  //      -- new type of excerpt + new editor ---
  //     'supports' => array('title', 'editor', 'excerpt', 'custom-fields'),
  //     'rewrite' => array ('slug'=>'events'),
  //     'has_archive' => true,
  //     'public' => true,
  //     'labels' => array(
  //       'name' => 'Events',
  //        'add_new_item' => 'Add new event',
  //        'edit_item' => 'Edit Event',
  //        'all_items' => 'All Events',
  //        'singular_name' => 'Event'
  //     ),
  //     'menu_icon'=> 'dashicons-calendar'
  //   ));
  // }

  //wywołanie funkcji tworzącej post o własnym typie
  // add_action('init', 'university_post_types');

?>

