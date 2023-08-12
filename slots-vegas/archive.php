<?php get_header(); ?>

<div class="main-content page">
    <section class="games-block">
        <div class="games-title">
            <h1 class="games-title-h1 page"><?php single_cat_title(); ?></h1>
        </div>
        <?php
            if ( have_posts() ) :
                echo '<div class="games-block-list">';
                    while ( have_posts() ) : the_post();
                        echo '<div class="game-card">';
                            echo '<div class="game-card-block">';
                                echo the_post_thumbnail();
                            echo '</div>';
                            echo '<div class="game-card-back">';
                                echo '<div class="game-card-back-buttons">';
                                    echo '<a href="#" class="game-card-play-link">Play now</a>';
                                    echo '<a href="'.get_permalink().'" class="game-card-play-demo">Demo</a>';
                                echo '</div>';
                                if($provider) {
                                    echo '<div class="game-card-back-provider">';
                                    echo '<div class="game-card-back-provider-img" style="background-image: url('.$provider.');"></div>';
                                    echo '</div>';
                                }
                            echo '</div>';
                            echo '<div class="game-card-labels">';
                                if($new) {
                                    echo '<div class="game-card-label new">'.$new.'</div>';
                                }
                                if($hot) {
                                    echo '<div class="game-card-label hot">'.$hot.'</div>';
                                }
                                if($exclusive) {
                                    echo '<div class="game-card-label ex">'.$exclusive.'</div>';
                                }
                            echo '</div>';
                            echo '<div class="game-card-bottom">';
                                echo '<span class="game-card-bottom-title">'.get_the_title().'</span>';
                                if($live) {
                                    echo '<div class="game-card-bottom-live">'.$live.'</div>';
                                }
                            echo '</div>';
                            if($drop) {
                                echo '<div class="game-card-drops" style="background-image: url('.$drop.');"></div>';
                            }
                        echo '</div>';
                    endwhile;
                echo '</div>';
            else :
            endif;
      ?>
    </section>
</div>

<?php get_footer(); ?>
