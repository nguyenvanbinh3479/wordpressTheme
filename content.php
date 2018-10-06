<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <!-- <div class="entry-thumbnail">
            <?php thachpham_thumbnail( 'thumbnail' ); ?>
        </div> -->
        <div class="entry-header">
            <?php thachpham_entry_header(); ?>
            <?php //thachpham_entry_meta() ?>
            <?php thachpham_thumbnail( 'large' ); ?>
            <?php thachpham_entry_header(); ?>
            <?php
                /*
                * Đếm số lượng attachment có trong post
                */
                $attachments = get_children( array( 'post_parent'=>$post->ID ) );
                $attachment_number = count($attachments);
                printf( __('This image post contains %1$s photos', 'thachpham'), $attachment_number );
            ?>
        </div>
        <div class="entry-content">
                <?php thachpham_entry_content(); ?>
                <?php
                        if ( is_single() ) :
                                thachpham_entry_tag();
                        endif;
                ?>
        </div>
</article>