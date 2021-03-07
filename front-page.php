
<?php get_header();?>

    <div class="hero-slider">
      <div data-glide-el="track" class="glide__track">
        <div class="glide__slides">
          <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('/images/wystawy.JPG') ?>);">
            <div class="hero-slider__interior container">
              <div class="hero-slider__overlay">
                <h2 class="headline headline--medium t-center">Wernisaże</h2>
                <p class="t-center">Jakiś tekst</p>
                <p class="t-center no-margin"><a href="#" class="btn btn--blue">Wydarzenia</a></p>
              </div>
            </div>
          </div>
          <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('/images/warsztaty.JPG') ?>);">
            <div class="hero-slider__interior container">
              <div class="hero-slider__overlay">
                <h2 class="headline headline--medium t-center">Warsztaty</h2>
                <p class="t-center">Jakiś tekst</p>
                <p class="t-center no-margin"><a href="#" class="btn btn--blue">Dowiedz się więcej</a></p>
              </div>
            </div>
          </div>
          <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('/images/biennale.jpg') ?>);">
            <div class="hero-slider__interior container">
              <div class="hero-slider__overlay">
                <h2 class="headline headline--medium t-center">Biennale</h2>
                <p class="t-center">Jakiś tekst</p>
                <p class="t-center no-margin"><a href="#" class="btn btn--blue">Link do tekstu</a></p>
              </div>
            </div>
          </div>
        </div>
        <div class="slider__bullets glide__bullets" data-glide-el="controls[nav]"></div>
      </div>
    </div>

    <div class="full-width-split group">
      <div class="full-width-split__one">
        <div class="full-width-split__inner">

          <h2 class="headline headline--small-plus t-center">Nadchodzące wydarzenia</h2>
          <!-- Custom query for events -->
          <?php 
            // the same format as the plugin uses/was set in Advance Custom Fields
            $today = date('Ymd');
            $homepageEvents = new WP_Query(array(
              // -1 all post that meet this conditions
              'posts_per_page' => 2,
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
                  'compare' => '>=',
                  'value' => $today,
                  // type of data to compare
                  'type' => 'numeric'
                )
              )
            ));

            while($homepageEvents->have_posts()) {
              $homepageEvents->the_post(); ?>
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
                    <?php if (has_excerpt()){
                      echo get_the_excerpt();
                        } else {
                          echo wp_trim_words(get_the_content(), 18);
                        }
                    ?>
                 <a href="<?php the_permalink(); ?>">Learn more</a></p>
                  </div>
                </div>
            <?php }
          ?>
  
          <p class="t-center no-margin"><a href=" <?php echo get_post_type_archive_link('event')?> " class="btn btn--blue">Wszystkie wydarzenia</a></p>
        </div>
      </div>
      <div class="full-width-split__two">
        <div class="full-width-split__inner">
          <h2 class="headline headline--small-plus t-center">Aktualności</h2>

          <!-- custom query for posts -->
          <?php
            $homepagePosts = new WP_Query(array(
              'posts_per_page' => 2
            ));

            while ($homepagePosts->have_posts()) {
              $homepagePosts->the_post();
              // content-event (template parts)
              get_template_part('template-parts/content', 'event');
            }
            // wp_reset_postdata();
          ?>


          <!-- link do blog page -->
          <p class="t-center no-margin"><a href=" <?php echo site_url('/blog'); ?> " class="btn btn--blue">Więcej aktualności</a></p>
        </div>
      </div>
    </div>

    <!-- <div class="hero-slider">
      <div data-glide-el="track" class="glide__track">
        <div class="glide__slides">
          <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('/images/wystawy.JPG') ?>);">
            <div class="hero-slider__interior container">
              <div class="hero-slider__overlay">
                <h2 class="headline headline--medium t-center">Wernisaże</h2>
                <p class="t-center">Jakiś tekst</p>
                <p class="t-center no-margin"><a href="#" class="btn btn--blue">Wydarzenia</a></p>
              </div>
            </div>
          </div>
          <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('/images/warsztaty.JPG') ?>);">
            <div class="hero-slider__interior container">
              <div class="hero-slider__overlay">
                <h2 class="headline headline--medium t-center">Warsztaty</h2>
                <p class="t-center">Jakiś tekst</p>
                <p class="t-center no-margin"><a href="#" class="btn btn--blue">Dowiedz się więcej</a></p>
              </div>
            </div>
          </div>
          <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('/images/biennale.jpg') ?>);">
            <div class="hero-slider__interior container">
              <div class="hero-slider__overlay">
                <h2 class="headline headline--medium t-center">Biennale</h2>
                <p class="t-center">Jakiś tekst</p>
                <p class="t-center no-margin"><a href="#" class="btn btn--blue">Link do tekstu</a></p>
              </div>
            </div>
          </div>
        </div>
        <div class="slider__bullets glide__bullets" data-glide-el="controls[nav]"></div>
      </div>
    </div> -->

<?php  get_footer();?>

