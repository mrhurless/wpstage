<?php

get_header();

if (have_posts()) :
    while (have_posts()) : the_post();?>

            <div class="fullproject__title">
              <?php the_title(); ?>
            </div>

            <div class="fullproject__author">
              by  <?php the_author_posts_link(); ?>
            </div>

              <div class="fullproject__image">
                <img src=<?php the_post_thumbnail_url(); ?>> </img>
              </div>

              <div class="fullproject__cost">
                Cost: <?php echo get_post_meta($post->ID, 'cost', true); ?>
              </div>

              <div class="fullproject__complexity">
                Complexity: <?php echo get_post_meta($post->ID, 'complexity', true); ?>
              </div>

              <div class="fullproject__duration">
                Time: <?php echo get_post_meta($post->ID, 'duration', true); ?>
              </div>

              <div class="fullproject__post">
                <?php the_content(); ?>
              </div>

        <div style="clear: both;"> </div>


    <?php
    endwhile;


    else :
        echo '<p>No Content Found </p>';
    endif ;

get_footer();

?>
