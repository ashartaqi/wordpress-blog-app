<?php get_header(); ?>

<article class="content px-3 py-5 p-md-5">
    <?php if (has_post_thumbnail()): ?>
        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="img" class="img-fluid mb-3 img-thumbnail">
    <?php endif; ?>
    <?php if (have_posts()):
        while (have_posts()):
            the_post(); ?>
            <div><?php get_template_part('templates-parts/content', 'article') ?></div>
        <?php endwhile; endif; ?>

</article>


<?php get_footer(); ?>