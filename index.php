<?php

get_header();

?>
    <?php
      if (have_posts()) :
        while (have_posts()) : the_post();
          get_template_part('content',get_post_format());
        endwhile;

        else :
            echo '<p>No Content Found </p>';
      endif ;
    ?>
</div>

<div style="clear: both;"> </div>

<?php

get_footer();

?>
