<?php get_header() ;

    $count = 0 ;
?>

    <section class="cd-section cd-home-top cd-max-width">
        <div class="cd-section-left">
            <?php $loop = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => -1)); ?>
            <?php if ( $loop->have_posts() ) : ?>
                <?php while ( $loop->have_posts() ) : $loop->the_post();
                    $categories = get_the_category();
                    if ( $count == 0 ) {
                        ?>
                        <div class="cd-big-video cd-home-big-video cd-background-img" style="background-image: url('<?php the_post_thumbnail_url() ; ?>')">
                            <?php if( get_field('iframe-source')) : ?>
                                <iframe src="<?php the_field('iframe-source') ; ?>?title=0&byline=0&portrait=0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                            <?php endif ; ?>
                        </div>
                        </div>
                        <?php
                    }
                    else if ( $count == 1 ) {
                        ?>
                        <div class="cd-section-right cd-home-section-right">
                            <div class="cd-home-top-grid">
                                <a class="cd-absolute-link" href="<?php the_permalink() ; ?>"></a>
                                <img src="<?php the_post_thumbnail_url(); ?>">
                                <h4><?php echo esc_html( $categories[0]->name ); ?> </h4>
                                <p><?php the_title(); ?></p>
                            </div>
                        <?php
                    }
                    else if( $count == 2 ) {
                        ?>
                        <div class="cd-home-top-grid">
                            <a class="cd-absolute-link" href="<?php the_permalink() ; ?>"></a>
                            <img src="<?php the_post_thumbnail_url(); ?>">
                            <h4><?php echo esc_html( $categories[0]->name ); ?> </h4>
                            <p><?php the_title(); ?></p>
                        </div>
                        </div>
                        </section>
                        <?php
                    }else if ( $count == 3 ) {
                        ?>
                        <div class="cd-home-border cd-max-width"></div>
                        <section class="cd-section cd-home-bottom">
                        <div class="cd-post-grid cd-max-width">
                        <div class="cd-post-card">
                            <a href="<?php the_permalink() ; ?>" class="cd-absolute-link"></a>
                            <div class="cd-post-card-img cd-background-img" style="background-image: url('<?php the_post_thumbnail_url() ; ?>')"></div>
                            <div class="cd-post-card-content">
                                <h5><?php echo esc_html( $categories[0]->name ); ?> </h5>
                                <h3><?php the_title() ; ?></h3>
                                <div><span><?php echo get_the_date() ; ?></span></div>
                                <p><?php the_excerpt() ; ?></p>
                            </div>
                        </div>
                        <?php
                    }
                    else {
                        ?>
                        <div class="cd-post-card">
                            <a href="<?php the_permalink() ; ?>" class="cd-absolute-link"></a>
                            <div class="cd-post-card-img cd-background-img" style="background-image: url('<?php the_post_thumbnail_url() ; ?>')"></div>
                            <div class="cd-post-card-content">
                                <h5><?php echo esc_html( $categories[0]->name ); ?> </h5>
                                <h3><?php the_title() ; ?></h3>
                                <div><span><?php echo get_the_date() ; ?></span></div>
                                <p><?php the_excerpt() ; ?></p>
                            </div>
                        </div>
                        <?php
                    }
                    $count++;
                ?>

                <?php endwhile; ?>

            <?php endif; ?>
            <?php wp_reset_query(); ?>
            </div>
            </section>
    <section>

    </section>
<?php get_footer() ; ?>