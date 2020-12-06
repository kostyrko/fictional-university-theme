<?php

  // function for loading in CSS files
  function university_files()
  {
      wp_enqueue_style('university_main_styles', get_stylesheet_uri());
    
      // for a loading JS file
    // wp_enqueue_script('university_main_styles', get_stylesheet_uri());
  }

  // call action(when, which), wp_enqueue_scripts - right before you run the action -> scripts hook/run styles
  add_action('wp_enqueue_scripts', 'university_files');

?>