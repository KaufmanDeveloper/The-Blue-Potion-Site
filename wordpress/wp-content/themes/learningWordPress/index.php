<?php

//Yields WordPress header bar
get_header();

//Iterate through our posts (using WordPress functions) to display posts
if (have_posts()) :
  while (have_posts()) : the_post(); ?>

    <article class = "post">
    <h2> <a href = "<?php the_permalink(); ?>" > <?php the_title(); ?> </a> </h2>
    <?php
    the_content();
     ?>
   </article>

<?php endwhile;

  else :
    echo '<p> No content found </p>';
  endif;

//Yields WordPress footer bar
get_footer();

?>
