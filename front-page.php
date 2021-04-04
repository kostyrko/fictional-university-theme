
<?php get_header();?>
  <main class="landing-main">
      <div class="site-banner"></div>
    <section class="landing-section">
      <div class="section__header">
        <h2 class="section__headline center">Nadchodzące wydarzenia</h2>
      </div>
     <div class="container">
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
            <article class="event-summary">
              <!-- <div class="container"> -->
                <?php getPageBannerImage()?> 
                <div class="event-summary__date">
                  <a class="event-summary__date t-center" href="<?php the_permalink(); ?>">
                    <span class="event-summary__month"><?php
                      $eventDate = new DateTime(get_field('event_date'));
                      echo $eventDate->format('M')
                    ?>
                    </span>
                    <span class="event-summary__day"><?php echo $eventDate->format('d') ?>
                    </span>
                  </a>
                </div>
                <div class="event-summary__content">
                  <h5 class="event-summary__title headline headline--tiny">
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                  </h5>
                  <p>
                    <?php if (has_excerpt()){
                      echo get_the_excerpt();
                        } else {
                          echo wp_trim_words(get_the_content(), 18);
                        }
                    ?>
                      <a href="<?php the_permalink(); ?>">Czytaj dalej</a>
                  </p>
                </div>
            </article>
        <?php }
      ?>
        <div class="section-link center">
          <a href=" <?php echo get_post_type_archive_link('event')?> " class="btn btn--blue">
            Wszystkie wydarzenia
          </a>
        </div>
      </div>
    </section>

    <section class="landing-section">
      <div class="section__header">
        <h2 class="section__headline center">Aktualności</h2>
      </div>
      <div class="container">
      <!-- <article> -->
        <?php
          $homepagePosts = new WP_Query(array(
            'posts_per_page' => 2
          ));
          while ($homepagePosts->have_posts()) {
            $homepagePosts->the_post(); ?>
            <article class="news-summery">
            <?php
              getPageBannerImage();
              get_template_part('template-parts/content', 'event');
            ?>
            </article>
          <?php }
        ?>
        <!-- </article> -->
          <div class="section-link center">
            <a href=" <?php echo site_url('/blog'); ?> " class="btn btn--blue">
              Więcej aktualności
            </a>
          </div>
        </div>
    </section>
  </main>
<?php  get_footer();?>

