<div class="creation">
  <div class="creation__image">
    <a href="<?php the_permalink(); ?>">
      <img src=<?php the_post_thumbnail_url(); ?>> </img>

      <h4 class="creation__title">
      <?php echo the_title(); ?></h4>
      </a>
      <span class="creation__author">
        by <?php the_author_posts_link(); ?> </span>
      <span class="creation__cost">
       <?php echo get_post_meta($post->ID, 'cost', true); ?>  </span>
      <span class="creation__complexity">
        <hr width="<?php
        echo get_post_meta($post->ID, 'complexity', true)*20; ?>px">
      </span>
      <span class="creation__duration">
        <?php
        echo get_post_meta($post->ID, 'duration', true); ?>
      </span>
  </div>
</div>
