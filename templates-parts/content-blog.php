<div class="container">
    <div class="post mb-5">
        <div class="media d-flex">
            <?php if (has_post_thumbnail()): ?>
                <img src="<?php the_post_thumbnail_url('thumbnail'); ?>" alt="<?php the_title_attribute(); ?>"
                    class="mr-3 img-fluid post-thumb d-none d-md-flex">
            <?php endif; ?>
            <div class="media-body px-4">
                <h3 class="title mb-1">
                    <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                    </a>
                </h3>
                <div class="meta mb-1">
                    <span class="date"><?php echo get_the_date(); ?></span>
                    <?php if (comments_open()): ?>
                        <span class="comment">
                            <a href="<?php the_permalink(); ?>">
                                <?php comments_number('No Comments', '1 Comment', '% Comments'); ?>
                            </a>
                        </span>
                    <?php endif; ?>
                </div>
                <div class="intro"><?php the_excerpt(); ?></div>
                <a class="more-link" href="<?php the_permalink(); ?>">Read more &rarr;</a>
            </div>
        </div>
    </div>
</div>