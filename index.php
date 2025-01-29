<?php get_header(); ?>

<article class="content px-3 py-5 p-md-5">
    <?php if (have_posts()):
        while (have_posts()):
            the_post(); ?>
            <div><?php get_template_part('templates-parts/content', 'blog') ?></div>
        <?php endwhile; endif; ?>

</article>

<?php the_posts_pagination(); ?>


<?php get_footer(); ?>