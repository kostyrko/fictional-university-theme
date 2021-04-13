<article class="event-summary post-summary">
  <?php getPageBannerImage();?>
  <div class="event-summary__container">
    <a class="event-summary__date" href="#">
      <span class="event-summary__month"><?php
        $eventDate = new DateTime(get_field('event_date'));
        echo $eventDate->format('M')
      ?></span>
      <span class="event-summary__day"><?php echo $eventDate->format('d') ?></span>  
    </a>
    <div class="event-summary__content center">
      <h5 class="event-summary__title headline headline--tiny marginize"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
      </h5>
      <p class="event-summary__text">
        <?php if (has_excerpt()) {
          echo get_the_excerpt();
        } else {
          echo wp_trim_words(get_the_content(), 18);
          } ?> <a href="<?php the_permalink(); ?>" class="marginize"><i class="fa fa-chevron-right" aria-hidden="true" title="Czytaj dalej"></i></a></a>
      </p>
    </div>
  </div>
</article>