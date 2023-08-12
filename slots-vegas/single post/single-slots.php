<?php
/* Template Name: Post slots */
 /* Template Post Type: Slots */
?>


<?php get_header('slots')?>

    <section class="main-back slots" style="background: linear-gradient(to bottom,#172442 0%,rgba(23,36,66,0.9) 30%,rgba(0,0,0,0) 60%),#172442 url(<?php echo get_template_directory_uri() ?>/images/main-back.jpg) center bottom/cover no-repeat;">
        <div class="container single">
            <div class="games-title">
                <h1 class="games-title-h1"><?php the_title(); ?></h1>
            </div>
            <div class="single-slots-demo-back play">
                <div class="single-slots-demo-back-cont">
                    <div class="single-slots-demo-back-image">
                        <a href="/" class="single-slots-demo-back-title-icon" aria-label="Close">
                            <div class="close-demo-icon" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/close.svg);"></div>
                        </a>
                        <img src="<?php echo get_field('img-frame'); ?>" alt="<?php echo get_field('alt-back'); ?>">
                    </div>
                </div>
                <div class="single-slots-demo-back-play" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/play.svg);"></div>
            </div>
            <div class="single-slots-demo-block">
                <div class="single-slots-demo-back-cont">
                    <div class="single-slots-demo-back-iframe">
                        <a href="/" class="single-slots-demo-back-title-icon" aria-label="Close">
                            <div class="close-demo-icon" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/close.svg);"></div>
                        </a>
                        <div class="full-btn">
                            <div class="full-btn-icon" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/full-screen.svg);"></div>
                        </div>
                        <?php echo get_field('iframe');?>
                    </div>
                </div>
            </div>
        </div>
        <div class="sidebar">
            <a gref="#" class="sidebar-top">
                <img src="<?php echo get_template_directory_uri() ?>/images/coin.svg">
                <div class="sidebar-top-icon" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/up-arrow.svg);"></div>
                <span>Win for Real</span>
            </a>
            <div class="full-btn">
                <div class="full-btn-icon" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/full.svg);"></div>
            </div>
        </div>
    </section>
    <section class="main-text">
        <div class="container single">
            <div class="main-text-block-content">
                <?php
                echo the_content(); 
                ?>
            </div>
        </div>
    </section>
</div>

<?php get_footer()?>

