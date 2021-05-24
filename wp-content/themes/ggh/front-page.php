<?php get_header();?>

<!-- main page content -->
<main role="main" class="site-main" id="main">
  
  <!-- page banner -->
  <div class="page-banner">
    <!-- Slider main container -->
    <div class="slider">
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide">
          <a href="#">
            <img src="<?php echo get_theme_file_uri('/images/image-1.jpg') ?>" alt="image 1">
            <div class="container">
              <div class="caption">
                <div class="caption_title">Distinctio sequi hic</div>
                <div class="caption_subtitle">Sapiente accusamus deleniti qui beatae veniam libero sequi earum cumque cum maiores</div>
              </div>
            </div>
          </a>
        </div>
        <div class="swiper-slide">
          <a href="#">
            <img src="<?php echo get_theme_file_uri('/images/image-2.jpg') ?>" alt="image 2">
            <div class="container">
              <div class="caption">
                <div class="caption_title">Natus aut mollitia</div>
                <div class="caption_subtitle">Id repellendus, dignissimos dolorem voluptas asperiores doloremque ratione officia</div>
              </div>
            </div>
          </a>
        </div>
        <div class="swiper-slide">
          <a href="#">
            <img src="<?php echo get_theme_file_uri('/images/image-3.jpg') ?>" alt="image 3">
            <div class="container">
              <div class="caption">
                <div class="caption_title">Illum vel rerum</div>
                <div class="caption_subtitle">Fuga, eum tempore est accusantium rerum</div>
              </div>
            </div>
          </a>
        </div>
        <div class="swiper-slide">
          <a href="#">
            <img src="<?php echo get_theme_file_uri('/images/image-4.jpg') ?>" alt="image 4">
            <div class="container">
              <div class="caption">
                <div class="caption_title">Fugit quo veniam eaque nulla totam?</div>
                <div class="caption_subtitle">Voluptatem nam ex vitae quos aperiam tempora id! Nostrum, culpa</div>
              </div>
            </div>
          </a>
        </div>
        <!-- /Slides -->
      </div>
      <!-- /Additional required wrapper -->
      <!-- navigation buttons -->
      <div class="swiper-button-prev" aria-label="prev slide"></div>
      <div class="swiper-button-next" aria-label="next slide"></div>
      <!-- /navigation buttons -->
    </div>  
  </div>
  <!-- /page banner -->

  <!-- section feature -->
  <section class="page-section">
    <div class="container">
      <div class="row row--gutters">
        <div class="row__small-6 row__large-3">
          <div class="feature">
            <div class="feature__title">
              <a href="#">repellendus <br>quas</a>
            </div>
            <div class="feature__image">
              <a href="#">
                <img src="<?php echo get_theme_file_uri('/images/image-1.jpg') ?>" alt="feature image 1">
              </a>
            </div>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni velit fuga, repellendus quas a obcaecati ea quos ipsum ...
            </p>
            <a href="#" class="button">Read More <span><i class="fas fa-long-arrow-alt-right"></i></span></a>
          </div>
        </div>
        <div class="row__small-6 row__large-3">
          <div class="feature">
            <div class="feature__title">
              <a href="#">repellendus <br>quas</a>
            </div>
            <div class="feature__image">
              <a href="#">
                <img src="<?php echo get_theme_file_uri('/images/image-2.jpg') ?>" alt="feature image 2">
              </a>
            </div>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni velit fuga, repellendus quas a obcaecati ea quos ipsum ...
            </p>
            <a href="#" class="button">Read More <span><i class="fas fa-long-arrow-alt-right"></i></span></a>
          </div>
        </div>
        <div class="row__small-6 row__large-3">
          <div class="feature">
            <div class="feature__title">
              <a href="#">repellendus <br>quas</a>
            </div>
            <div class="feature__image">
              <a href="#">
                <img src="<?php echo get_theme_file_uri('/images/image-3.jpg') ?>" alt="feature image 3">
              </a>
            </div>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni velit fuga, repellendus quas a obcaecati ea quos ipsum ...
            </p>
            <a href="#" class="button">Read More <span><i class="fas fa-long-arrow-alt-right"></i></span></a>
          </div>
        </div>
        <div class="row__small-6 row__large-3">
          <div class="feature">
            <div class="feature__title">
              <a href="#">repellendus <br>quas</a>
            </div>
            <div class="feature__image">
              <a href="#">
                <img src="<?php echo get_theme_file_uri('/images/image-4.jpg') ?>" alt="feature image 4">
              </a>
            </div>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni velit fuga, repellendus quas a obcaecati ea quos ipsum ...
            </p>
            <a href="#" class="button">Read More <span><i class="fas fa-long-arrow-alt-right"></i></span></a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /section feature -->

  <!-- section video -->
  <section class="page-section">
    <div class="container">
      <h2 class="headline">GET Group: Decades of Excellence</h2>
      <div class="video">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/6aMEYc9-V4U" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </div>
  </section>
  <!-- /section video -->

  <!-- section e-book -->
  <section class="page-section">
    <div class="container">
      <h2 class="headline">E-book</h2>
      <div class="ebook">
        <a href="#">
          <img src="<?php echo get_theme_file_uri('/images/corporate-brief-eBook.jpg') ?>" alt="corporate-brief-eBook">
          <span>GET Group’s Corporate Brief</span>
        </a>
      </div>
    </div>
  </section>
  <!-- /section e-book -->

</main>
<!-- /main page content -->

<?php get_footer();?>

