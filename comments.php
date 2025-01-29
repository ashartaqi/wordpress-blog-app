<div class="comments-wrapper">
    <div class="comments" id="comments">
        <div class="comments-header">
            <h2 class="comment-reply-title">
                <?php
                if (!have_comments()) {
                    echo esc_html__('Leave a Comment', 'your-text-domain');
                } else {
                    echo esc_html(get_comments_number() . ' Comments');
                }
                ?>
            </h2>
        </div>

        <div class="comments-inner">
            <?php
            wp_list_comments(array(
                'avatar_size' => 120,
                'style' => 'div',
            ));
            ?>
        </div>
    </div>

    <hr aria-hidden="true">

    <?php
    if (comments_open()) {
        comment_form(array(
            'title_reply_before' => '<h2 id="reply-title" class="comment-reply-title">',
            'title_reply_after' => '</h2>',
        ));
    }
    ?>
</div>