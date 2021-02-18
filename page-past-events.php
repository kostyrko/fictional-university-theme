<?php 

get_header();
pageBanner(array(
  'title' => 'Past events',
  'subtitle' => 'A recap of our past events'
));
?>

<div class="container container--narrow page-section">
<!-- display posts - as long as the function have_posts() display true -->
<?php 

$today = date('Ymd');
$pastEvents = new WP_Query(array(
  // tells custom query which page, go and look at the end of url
  'paged' => get_query_var('paged', 1),
  'post_type' =>'event',
  // set meta data
  'meta_key' => 'event_date',
  // by pice of meta data which is a number
  'orderby' => 'meta_value_num',
  // Ascending order
  'order' => 'ASC',
  // query of meta data for posts that show date not older than today
  'meta_query' => array (
    array(
      'key' => 'event_date',
      'compare' => '<=',
      'value' => $today,
      // type of data to compare
      'type' => 'numeric'
    )
  )
));

  // look inside an object
  while($pastEvents->have_posts()) {
    $pastEvents->the_post(); ?>
    <div class="event-summary">
        <a class="event-summary__date t-center" href="<?php the_permalink(); ?>">
          <!-- get_field() - wymaga ustawienia plugin Advance Custom Fields lekcja 36. -->
          <!-- Przyjęcie daty zwracanej przez plugin i jej zmiana przez klasę DateTime a następnie wyciągnięcie odpowiednich danych -->
          <span class="event-summary__month"><?php
            $eventDate = new DateTime(get_field('event_date'));
            echo $eventDate->format('M')
          ?></span>
          <span class="event-summary__day"><?php echo $eventDate->format('d') ?></span>
        </a>
      <div class="event-summary__content">
        <h5 class="event-summary__title headline headline--tiny"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
        <?php echo wp_trim_words(get_the_content(), 18) ?> <a href="<?php the_permalink(); ?>">Learn more</a></p>
      </div>
    </div>
    <?php
  }
  // add pagination
  echo paginate_links(array(
    'total' => $pastEvents->max_num_pages
  ));
?>
</div>

<?php 
get_footer();

?>