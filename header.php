<!DOCTYPE html>
<!-- ustawienia językowe zależne od ustawień wordpressa -->
<html <?php language_attributes(); ?>>
<head>
  <!-- ustawienie kodowania tekstu (rodzaj liter) -->
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo get_bloginfo( 'name' ); ?> - <?php echo get_the_title(); ?></title>

  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="site-header">
  <div class="container">
    <div class="gallery-logo">
      <a href="<?php echo site_url() ?>"><div class="site-logo"></div></a>
    </div>
    <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>
    <div class="site-header__menu group">
      <nav class="main-navigation">
        <ul>
          <li <?php if (get_post_type() == 'event' OR is_page('past-events')) echo 'class="current-menu-item"' ?> ><a href="<?php echo get_post_type_archive_link('event'); ?>">Wydarzenia</a></li>
          <!-- jeśli typ strony jest post to wtedy dodaj html/klasę  -->
          <li <?php if (get_post_type() == 'post') echo 'class="current-menu-item' ?>><a href="<?php echo site_url('/blog'); ?>">Aktualności</a></li>
          <li <?php if(is_page( 'about-us' ) or wp_get_post_parent_id( 0 ) === 12) echo 'class="current-menu-item"' ?>><a href="<?php echo site_url('/about-us/') ?>">O Nas</a></li>
          <li ><a href="#kontakt">Kontakt</a></li>
        </ul>
      </nav>
      <div class="site-header__util">
        <a href="<?php echo esc_url(site_url('/search')) ?>" class="search-trigger js-search-trigger"><i class="fa fa-search" aria-hidden="true"></i></a>
      </div>
    </div>
  </div>
</header>
