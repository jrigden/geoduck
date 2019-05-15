
<?php get_header(); ?>


  <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
    <?php if ( is_singular() ) {
          get_template_part( 'entry' );

    } else {
      get_template_part( 'summary' );

    } ?>
    <?php endwhile; ?>
<?php endif; ?>

<div class="pagination wrapper">
<div class="left"><?php previous_posts_link( 'Older' ); ?></div>
<div class="right"><?php next_posts_link( 'Newer' ); ?></div>
</div>




<?php get_footer(); ?>
