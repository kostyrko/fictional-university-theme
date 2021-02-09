<?php 
  get_header();
  
  while (have_posts(  )) {
    the_post(); ?>


  <div class="page-banner">
    <!-- get_theme_file_uri('') -->
    <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/ocean.jpg') ?>);"></div>
    <div class="page-banner__content container container--narrow">
      <!-- TITLE -->
      <h1 class="page-banner__title"> <?php the_title(); ?> </h1>
      <!-- sub-title -->
      <div class="page-banner__intro">
        <p>REPLACE LATER</p>
      </div>
    </div>
  </div>

  <div class="container container--narrow page-section">

  <div class="metabox metabox--position-up metabox--with-home-link">
    <p><a class="metabox__blog-home-link" href="<?php echo get_post_type_archive_link('event') ?>"><i class="fa fa-home" aria-hidden="true"></i> Events home </a> <span class="metabox__main"> <?php the_title(); ?> </span></p>
  </div>

  <!-- kontent postu -->
  <div class="generic-content"> <?php the_content(); ?> </div>

  </div>

  <?php }

  get_footer();
?>