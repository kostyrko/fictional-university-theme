<?php 

  get_header(); 
  pageBanner();

?>



<div class="container container--narrow page-section">
<!-- display posts - as long as the function have_posts() display true -->
<?php 
  while(have_posts()) {
    the_post(); ?>
    <div class="post-item">
      <h2 class="headline headline--medium headline--post-title"> <a href="<?php the_permalink() ?>"> <?php the_title(); ?> </a></h2>

      <div class="metabox">
        <!-- add author, time of post and the category of it -->
        <p>Posted by <?php the_author_posts_link(); ?> on <?php the_time('j.m.Y') ?> in <?php echo get_the_category_list(' ,'); ?></p>
      </div>

      <div class="generic-content">
        <!-- pokaż jedynie wycinek postu/treści -->
        <?php the_excerpt(); ?>

        <p><a class="btn btn--blue" href="<?php the_permalink() ?>">Continue reading &raquo;</a></p>
      </div>

    </div>
    <?php 
  }
  // add pagination
  echo paginate_links( )
?>
</div>

<?php 
get_footer();

?>