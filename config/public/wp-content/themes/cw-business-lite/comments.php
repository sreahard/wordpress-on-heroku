<?php
/**
 *  The template for displaying Comments.
 *
 *  @package ThemeIsle
 */
if ( post_password_required() )
    return;
?>

<div id="casd" class="cf" style="color: #000;">

    <?php // You can start editing here -- including this comment! ?>

    <?php if ( have_comments() ) : ?>
        <div class="single-subtitle">
            <h5>
                <?php
                    printf( _n( 'One Comment', '%1$s Comments', get_comments_number(), 'cw-business-lite' ),
                        number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' );
                ?>
            </h5><!--/h5-->
        </div><!--/div .single-subtitle-->

        <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through? If so, show navigation ?>
        <nav role="navigation" id="comment-nav-above" class="site-navigation comment-navigation">
            <h1 class="assistive-text"><?php _e( 'Comment navigation', 'cw-business-lite' ); ?></h1>
            <div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'cw-business-lite' ) ); ?></div>
            <div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'cw-business-lite' ) ); ?></div>
        </nav><!-- #comment-nav-before .site-navigation .comment-navigation -->
        <?php endif; // check for comment navigation ?>

        <div class="sss cf">
            <?php wp_list_comments( array( 'callback' => 'cw_business_lite_comments_list' ) ); ?>
        </div><!--/div .comments-list .cf-->

        <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through? If so, show navigation ?>
        <nav role="navigation" id="comment-nav-below" class="site-navigation comment-navigation">
            <h1 class="assistive-text"><?php _e( 'Comment navigation', 'cw-business-lite' ); ?></h1>
            <div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'cw-business-lite' ) ); ?></div>
            <div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'cw-business-lite' ) ); ?></div>
        </nav><!-- #comment-nav-below .site-navigation .comment-navigation -->
        <?php endif; // check for comment navigation ?>

    <?php endif; // have_comments() ?>

    <?php
        // If comments are closed and there are comments, let's leave a little note, shall we?
        if ( ! comments_open() && '0' != get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
    ?>
        <p class="nocomments"><?php _e( 'Comments are closed.', 'cw-business-lite' ); ?></p>
    <?php endif; ?>

        <?php
            $commenter = wp_get_current_commenter();
            $req = get_option( 'require_name_email' );
            $aria_req = ( $req ? " aria-required='true'" : '' );
            if($commenter['comment_author'] != '')
                $name = esc_attr($commenter['comment_author']);
            else
                $name = '';
            if($commenter['comment_author_email'] != '')
                $email = esc_attr($commenter['comment_author_email']);
            else
                $email = '';
            if($commenter['comment_author_url'] != '')
                $url = esc_attr($commenter['comment_author_url']);
            else
                $url = '';

            $fields =  array(
                'author' => '<div class="respond"><input class="input-full" placeholder="'.__('Full name (*)','cw-business-lite').'" name="author" type="text" value="' . $name . '" ' . $aria_req . ' />',
                'email'  => '<input class="input-small-left" placeholder="'.__('E-mail address (*)','cw-business-lite').'" name="email" type="email" value="' . $email . '" ' . $aria_req . ' />',
                'url'    => '<input class="input-small-right" placeholder="'.__('Website URL','cw-business-lite').'" name="url" type="url" value="' . $url . '" />'
            );

            $comment_textarea = '<textarea placeholder="'.__('Your Message... (*)','cw-business-lite').'" class="input-textarea" name="comment" aria-required="true"></textarea></div>';
            comment_form( array( 'fields' => $fields, 'comment_field' => $comment_textarea, 'id_submit' => 'comments-submit-button', 'label_submit' => esc_attr__( 'Submit', 'cw-business-lite' ), 'title_reply' => '<div class="single-subtitle"><h5>' . esc_attr__( 'Leave a Reply' ,'cw-business-lite' ) . '</h5></div>', 'title_reply_to' => esc_attr__( 'Leave a comment to %s', 'cw-business-lite' )) );

    ?>

</div><!-- #comments .cf -->