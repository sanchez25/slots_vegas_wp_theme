<?php 

 /* Template Post Type: post */

get_header(); ?>

<div class="main-content page">
  <section class="games-block">
    <div class="games-title">
      <h1 class="games-title-h1 page"><?php the_title(); ?></h1>
    </div>
    <div class="main-text-block-content">
      <?php
        echo the_content(); 
      ?>
    </div>
  </section>
</div>

<?php get_footer(); ?>
