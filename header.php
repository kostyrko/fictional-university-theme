<!DOCTYPE html>
<!-- ustawienia językowe zależne od ustawień wordpressa -->
<html <?php language_attributes(); ?>>
<head>
  <!-- ustawienie kodowania tekstu (rodzaj liter) -->
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fictional University</title>

  <?php wp_head(); ?>
</head>
<!-- zmienne klasy zależne od miejsca,które danym momencie jest wyświetlane -->
<body <?php body_class(); ?>>
<header class="site-header">
  <div class="container">
    <h1 class="school-logo-text float-left">
      <a href="<?php echo site_url() ?>"><strong>Fictional</strong> University</a>
    </h1>
    <span class="js-search-trigger site-header__search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
    <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>
    <div class="site-header__menu group">
      <nav class="main-navigation">
      <!-- dynamiczne menu - zarejestrowane w functions.php -->
      <!-- <?php 
        wp_nav_menu( array(
          'theme_location' => 'headerMenuLocation'
        ));
      ?> -->
        <ul>
        <!-- jeśli dana strona jest 'about-us' lub jeśli jest podstroną 'about-us' wtedy wykonaj - przez echo// is_page - sprawdza czy arg. podany jest zgodny z prawdą jako arg. przyjmuje slug -->
          <li <?php if(is_page( 'about-us' ) or wp_get_post_parent_id( 0 ) === 12) echo 'class="current-menu-item"' ?>><a href="<?php echo site_url('/about-us/') ?>">About Us</a></li>
          <li><a href="#">Programs</a></li>
          <li <?php if (get_post_type() == 'event' OR is_page('past-events')) echo 'class="current-menu-item"' ?> ><a href="<?php echo get_post_type_archive_link('event'); ?>">Events</a></li>
          <li><a href="#">Campuses</a></li>
          <!-- jeśli typ strony jest post to wtedy dodaj html/klasę  -->
          <li <?php if (get_post_type() == 'post') echo 'class="current-menu-item' ?>><a href="<?php echo site_url('/blog'); ?>">Blog</a></li>
        </ul>
      </nav>
      <div class="site-header__util">
        <a href="#" class="btn btn--small btn--orange float-left push-right">Login</a>
        <a href="#" class="btn btn--small btn--dark-orange float-left">Sign Up</a>
        <span class="search-trigger js-search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
      </div>
    </div>
  </div>
</header>
