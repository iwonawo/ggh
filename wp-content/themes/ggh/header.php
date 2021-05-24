<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>
  <meta charset="<?php bloginfo('charset');?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Identity Management and Smart Solutions">
  <?php wp_head();?>
</head>

<body <?php body_class();?>>
  <header class="site-header">
    <div class="site-header__top">
      <div class="container">
        <div class="header-flex-container">
          <a href="#"><i class="fas fa-phone-volume"></i><span>Contact Sales</span></a>
          <div class="header-flex-group">
            <a href="#" class="search-icon"><i class="fas fa-search"></i></a>
            <!-- language selector -->
            <div class="language-selector">
              <select>
                <option value="en" selected >EN</option>
                <option value="ar">AR</option>
                <option value="es">ES</option>
              </select>
            </div>
            <!-- /language selector -->
          </div>
        </div>
      </div>
    </div>
    <div class="site-header__bottom">
      <div class="container">
        <div class="header-flex-container">
          <div>
            <a href="<?php echo esc_url(site_url()); ?>" class="logo">
              <img src="<?php echo get_theme_file_uri('/images/logo.png') ?>" alt="Company Logo" />
            </a>
          </div>
          <div>
            <div class="header-flex-container u-hide-from-medium">
              <!-- language selector -->
              <div class="language-selector u-hide-from-medium"">
                <select>
                  <option value="en" selected >EN</option>
                  <option value="ar">AR</option>
                  <option value="es">ES</option>
                </select>
              </div>
              <!-- /language selector -->
              <!-- mobile menu icon -->
              <button class="mobile-menu-icon u-hide-from-medium"><i class="fas fa-bars"></i></button>
              <!-- /mobile menu icon -->
            </div>
            
            <!-- site navigation -->
            <nav class="site-navigation u-hide-till-medium">
              <ul>
                <li><a href="#"><span>Business Sectors</span></a></li>
                <li><a href="#" id="news-events" class=""><span>News & Events</span></a></li>
                <li><a href="#"><span>About</span></a></li>
              </ul>
            </nav>
            <!-- /site navigation -->
          </div>
          
        </div>
      </div>
    </div>
    <div class="site-header__modal">
      <div class="container">
        <div class="nav-box">
          <div class="nav-box__links u-disable-select">
            <span class="nav-box__link" id="nav-tab-events">Events</span>
            <span class="nav-box__link" id="nav-tab-news">News</span>
          </div>
          <div class="nav-box__main">
            <div class="nav-box__container" id="nav-content-events">
              <h3 class="nav-box__heading"><a href="#">Upcoming Events</a></h3>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nemo voluptates nulla temporibus reprehenderit totam, in aperiam quis quae? Laborum ducimus, voluptatum incidunt accusamus fuga repellendus quo quae debitis harum voluptates!</p>
              <div>
                <?php get_template_part('template-parts/homepageEvents');?>
              </div>
            </div>
            <div class="nav-box__container" id="nav-content-news">
              <h3 class="nav-box__heading"><a href="#">News</a></h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt fugit iste labore ipsam laboriosam quas placeat incidunt ea sed maxime libero, voluptates et facilis architecto! Natus ipsam tempore provident rem!</p>
              <div>
              <div>
                <?php get_template_part('template-parts/homepageNews');?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="site-navigation-mobile">
      <div class="container">
        <ul>
          <li><a href="#" class="search-icon"><i class="fas fa-search"></i><span>Search</span></a></li>
          <li><a href="#"><span>Business Sectors</span></a></li>
          <li><a href="#"><span>News</span></a></li>
          <li><a href="#"><span>Events</span></a></li>
          <li><a href="#"><span>About</span></a></li>
        </ul>
      </div>
    </div>

  </header>