<?php get_header(); ?>

<section class="main-back slots" style="background: linear-gradient(to bottom,#172442 0%,rgba(23,36,66,0.9) 30%,rgba(0,0,0,0) 60%),#172442 url(<?php echo get_template_directory_uri() ?>/images/main-back.jpg) center bottom/cover no-repeat;">
    <div class="container">
      <div class="main-banner">
        <div class="main-banner-content">
          <div class="main-banner-left">
            <div class="main-banner-img" style="background: url(http://slots-vegas-wp.local/wp-content/themes/slots-vegas/images/main-banner.png) no-repeat bottom center transparent;"></div>
          </div>
          <div class="main-banner-right">
            <span class="main-banner-title">EXCLUSIVE</span>
            <span class="main-banner-subtitle">WELCOME OFFER<br>DEPOSIT $100<br>PLAY WITH $350</span>
            <div class="main-banner-right-bottom">
              <a href="#" class="btn banner">Sign up now!</a>
              <div class="main-banner-bottom-text">
                <div class="main-banner-bottom-text-icon" style="background-image: url(http://slots-vegas-wp.local/wp-content/themes/slots-vegas/images/devices.svg);"></div>
                <span>Play best slot machines on<br>mobile, tablet, Mac or PC</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="main-text">
    <div class="container">
      <div class="main-text-block-content">
        <div class="page-title">
          <h1 class="page-title-h1"><?php the_title(); ?></h1>
        </div>
        <div class="games-content">
          <?php
            echo the_content(); 
          ?>
        </div>
      </div>
    </div>
  </section>

<?php get_footer(); ?>
