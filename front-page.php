<?php get_header(); ?>

    <article class="content px-3 py-5 p-md-5">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div><?php the_content(); ?></div>
    <?php endwhile; endif; ?>

    </article>


<?php get_footer(); ?>
