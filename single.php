<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package cone
 */

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

    <section class="cd-section cd-home-top cd-max-width cd-single-page">
        <div class="cd-section-left">
            <div class="cd-single-title">
                <h2><?php the_title() ; ?></h2>
                <div class="cd-single-title-share">
                    <span><?php the_date() ; ?></span>
                    <div class="cd-single-sharer">
                        <div class="sharer" data-sharer="facebook" data-width="800" data-height="600" data-title="" data-url="<?php the_permalink(); ?>" style="color: #3c5998;">
                            <i class="fab fa-facebook-f"></i>
                        </div>
                        <div class="sharer"  data-sharer="twitter" data-width="800" data-height="600" data-title="" data-url="<?php the_permalink(); ?>" style="color: #55acef;">
                            <i class="fab fa-twitter"></i>
                        </div>
                        <div class="sharer" data-sharer="email" data-url="<?php the_permalink(); ?>" data-subject="Nytt inlägg från Mesh Talks" style="color: #444444;">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cd-big-video cd-background-img" style="background-image: url('<?php the_post_thumbnail_url() ; ?>')">
                <?php if( get_field('iframe-source')) : ?>
                <iframe src="<?php the_field('iframe-source') ; ?>?title=0&byline=0&portrait=0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen  width="640" height="360"></iframe>
                <?php endif ; ?>
            </div>
<!--            <div class="cd-share-section">-->
<!--                <div class="sharer social-icon-box" data-sharer="facebook" data-width="800" data-height="600" data-title="" data-url="--><?php //the_permalink(); ?><!--" style="background-color: #3c5998;">-->
<!--                    <i class="fab fa-facebook"></i> Share-->
<!--                </div>-->
<!--                <div class="sharer social-icon-box"  data-sharer="twitter" data-width="800" data-height="600" data-title="" data-url="--><?php //the_permalink(); ?><!--" style="background-color: #55acef;">-->
<!--                    <i class="fab fa-twitter"></i> Tweet-->
<!--                </div>-->
<!--                <div class="sharer social-icon-box" data-sharer="email" data-url="--><?php //the_permalink(); ?><!--" data-subject="Nytt inlägg från Mesh Talks" style="background-color: #444444;">-->
<!--                    <i class="fa fa-envelope" aria-hidden="true"></i> Email-->
<!--                </div>-->
<!--            </div>-->
            <?php the_content() ; ?>
        </div>
        <div class="cd-section-right cd-single-section-right">
            <h4>Relaterat</h4>
            <div class="cd-related-grid">
                <?php

                $related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'numberposts' => -1, 'post__not_in' => array($post->ID) ) );
                if( $related ) foreach( $related as $post ) {
                    setup_postdata($post); ?>
                    <div class="cd-related-card">
                        <a class="cd-absolute-link" href="<?php the_permalink() ;  ?>"></a>
                        <p><?php the_title() ; ?></p>
                        <div class="cd-related-card-img cd-background-img" style="background-image: url('<?php the_post_thumbnail_url() ; ?>')"></div>
                    </div>
                <?php }
                wp_reset_postdata(); ?>

            </div>
        </div>
    </section>

<?php endwhile; ?>

<?php get_footer(); ?>