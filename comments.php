<?php

// If the current post is protected by a password and the visitor has not yet
// entered the password we will return early without loading the comments.
if ( post_password_required() ) {
    return;
}
?>

<div id="comments" class="comments-area">

    <?php if ( have_comments() ) : ?>
        <h2 class="comments-title">
            <?php
            printf(
                _nx('One comment on "%2$s"', '%1$s comments on "%2$s"', get_comments_number(), 'comments title', 'your-text-domain'),
                number_format_i18n(get_comments_number()),
                '<span>' . get_the_title() . '</span>'
            );
            ?>
        </h2>

        <ol class="comment-list">
            <?php
            wp_list_comments(array(
                'style'      => 'ol',
                'short_ping' => true,
                'avatar_size' => 50,
            ));
            ?>
        </ol><!-- .comment-list -->

        <?php
        // Pagination for comments if needed
        if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
            ?>
            <nav class="navigation comment-navigation" role="navigation">
                <h2 class="screen-reader-text"><?php _e('Comment navigation', 'your-text-domain'); ?></h2>
                <div class="nav-links">
                    <?php
                    paginate_comments_links(array(
                        'prev_text' => __('&larr; Previous', 'your-text-domain'),
                        'next_text' => __('Next &rarr;', 'your-text-domain'),
                    ));
                    ?>
                </div><!-- .nav-links -->
            </nav><!-- .comment-navigation -->
        <?php endif; ?>

    <?php endif; // have_comments() ?>

    <?php
    // Display the comment form
    comment_form(array(
        'title_reply' => __('Leave a Comment', 'your-text-domain'),
        'label_submit' => __('Submit Comment', 'your-text-domain'),
        'comment_field' => '<p class="comment-form-comment"><label for="comment">' . _x('Comment', 'noun', 'your-text-domain') . '</label><br /><textarea id="comment" name="comment" cols="45" rows="8" required></textarea></p>',
    ));
    ?>

</div><!-- #comments -->