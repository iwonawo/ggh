<?php 
  $homepageNews= new WP_Query(array(
    'posts_per_page' => 3
  ));
  if($homepageNews->have_posts()) { ?>
    <div class="posts">
      <?php
        while ($homepageNews->have_posts()) {
          $homepageNews->the_post(); ?>
          <article class="posts__single">
            <a href="<?php the_permalink(); ?>" class="post-link"></a>
            <div class="post-image">
              <?php if (get_field('news-image')) { ?>
                <img src="<?php echo get_field('news-image') ?>" alt="<?php the_title(); ?>">
              <?php } else { ?>
                <img src="<?php echo get_theme_file_uri('/images/image-1.jpg') ?>" alt="<?php the_title(); ?>">
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
                  <i class="fas fa-calendar-week"></i><span class="post-day"><?php the_time('M d, Y'); ?></span>
                </div>
                <div class="post-location">
                  <i class="fas fa-map-marker-alt"></i><span><?php echo get_field('city') ?>, <?php echo get_field('country') ?></span>
                </div>
              </div>
            </div>
          </article>
        <?php } wp_reset_postdata();
      ?>
    </div>
      
  <?php  } ?>