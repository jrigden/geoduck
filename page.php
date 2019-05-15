<?php get_header(); ?>

<div class="post">
    <div class="post-header">
        <h1>
            <?php the_title(); ?>
        </h1>


    </div>
    <div class="post-body">
        <?php the_content(); ?>


    </div>
    <div class="post-footer">


        <h5>
            <?php the_tags(); ?>

        </h5>


    </div>

</div>
<?php get_footer(); ?>
