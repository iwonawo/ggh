
<?php 
  $today = date('Ymd');
  $homepageEvents= new WP_Query(array(
    'posts_per_page' => 3,
    'post_type' => 'event',
    'meta_key' => 'event_date_start',
    'orderby' => 'meta_value_num',
    'order' => 'ASC',
    'meta_query' => array(
      array(
        'key' => 'event_date_start',
        'compare' => '>=',
        'value' => $today,
        'type' => 'numeric'
      )
    )
  ));
  if($homepageEvents->have_posts()) { ?>
    <div class="posts">
      <?php
        while ($homepageEvents->have_posts()) {
          $homepageEvents->the_post(); ?>
          <article class="posts__single">
            <a href="<?php the_permalink(); ?>" class="post-link"></a>
            <div class="post-image">
              <?php if (get_field('event-image')) { ?>
                <img src="<?php echo get_field('event_image') ?>" alt="<?php the_title(); ?>">
              <?php } else { ?>
                <img src="<?php echo get_theme_file_uri('/images/image-2.jpg') ?>" alt="<?php the_title(); ?>">
              <?php } ?>
            </div>
            <div class="post-content">
              <div>
                <h5 class="post-title"><?php the_title(); ?></h5>
                <p class="post-exerpt">
                  <?php if (has_excerpt()) {
                    echo get_the_excerpt();
                  } else {
                    echo wp_trim_words(get_the_content(), 13);
                  } ?>
                </p>
              </div>
              <div class="post-bottom">
                <div class="post-date">
                  <i class="fas fa-calendar-week"></i><span class="post-day"><?php echo get_field('event_date_start'); ?></span> - <span class="post-day"><?php get_field('event_date_end'); ?></span>
                </div>
                <div class="post-location">
                  <i class="fas fa-map-marker-alt"></i><span><?php echo get_field('event_city') ?>, <?php echo get_field('event_country') ?></span>
                </div>
              </div>
            </div>
          </article>
        <?php } wp_reset_postdata();
      ?>
    </div>
      
  <?php  } ?>