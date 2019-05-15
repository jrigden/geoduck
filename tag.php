<?php get_header(); ?>
<h3 class="tag-name">Tag: <?php single_term_title(); ?></h3>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'summary' ); ?>
<?php endwhile; endif; ?>
<?php get_footer(); ?>

