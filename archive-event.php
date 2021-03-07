<?php 

get_header(); 
pageBanner(array(
  'title' => 'Wszystkie wydarzenia',
  'subtitle' => 'Poczytaj o tym co się u nas wydarzy'
));
?>

<div class="container container--narrow page-section">
<!-- display posts - as long as the function have_posts() display true -->
<?php 
  while(have_posts()) {
    the_post();
    get_template_part('template-parts/content-event');
  }
  // add pagination
  echo paginate_links( )
?>
<hr class="section-break">

<p>Szukasz informacji na temat wydarzeń, które się odbyły? <a href="<?php echo site_url('/past-events') ?>">Zapraszamy do archiwum</a>.</p>

</div>


<?php 
get_footer();

?>