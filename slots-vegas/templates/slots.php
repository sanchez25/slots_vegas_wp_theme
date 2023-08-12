<?php
/*Template Name: Slots*/
?>

<?php get_header('slots')?>

  <section class="main-back slots" style="background: linear-gradient(to bottom,#172442 0%,rgba(23,36,66,0.9) 30%,rgba(0,0,0,0) 60%),#172442 url(<?php echo get_template_directory_uri() ?>/images/main-back.jpg) center bottom/cover no-repeat;">
    <div class="container">
      <div class="games-title">
        <h1 class="games-title-h1"><?php the_title(); ?></h1>
      </div>
      <?php
        if ($items = get_posts(array('numberposts' => 100, 'post_type' => 'Slots'))) {
          echo '<div class="page-slots">';
            foreach($items as $item) {

              $genre = get_field('genre', $item->ID);
              $new = get_field('new', $item->ID);
              $jackpot = get_field('jackpot', $item->ID);

              echo '<div class="slots-content-card-item">';
                echo '<div class="slots-content-card-item-block">';
                  echo get_the_post_thumbnail($item->ID);
                  if($jackpot) {
                    echo '<div class="game-card-jackpot">';
                      echo '<span>Jackpot '.$jackpot.'</span>';
                    echo '</div>';
                  }
                echo '</div>';
                echo '<div class="slots-content-card-item-back">';
                  echo '<div class="slots-content-card-item-buttons">';
                    echo '<a href="#" class="btn real">Real money</a>';
                    echo '<a href="'.get_permalink($item->ID).'" class="btn practice">Practice</a>';
                  echo '</div>';
                echo '</div>';
                echo '<div class="slots-content-card-item-bottom">';
                    echo '<span class="slots-content-card-item-title">'.$item->post_title.'</span>';
                    if($genre) {
                      echo '<span class="slots-content-card-item-text">'.$genre.'</span>';
                    }
                echo '</div>';
                if($new) {
                  echo '<div class="slots-content-card-item-new">'.$new.'</div>';
                }
              echo '</div>';
            }
          echo '</div>';
        }
      ?>
    </div>
  </section>
  <section class="main-text">
    <div class="container">
      <div class="main-text-block-content">
        <?php
          echo the_content(); 
        ?>
      </div>
    </div>
  </section>

<?php get_footer()?>