<?php
/**
 * The template for displaying the footer
 *
 * @package cone
 */
?>
    <div class="cd-subscribe-section cd-max-width cd-big-width">
        <div class="cd-subscribe-content">
            <div class="cd-subscribe-top">
                <h3><?php the_field('newsletter-headline', 'option') ; ?></h3>
                <p><?php the_field('newsletter-text', 'option') ; ?></p>
            </div>
            <?php echo do_shortcode(get_field('mailchimp-shortcode', 'option')) ; ?>

        </div>
        <div class="cd-subscribe-content" style="background-image: url('<?php the_field('insta-image', 'option') ; ?>')">
            <div class="cd-background-overlay"></div>
            <div class="cd-subscribe-top">
                <h3><?php the_field('instragram-headline', 'option') ; ?></h3>
            </div>
            <a href="<?php the_field('link-to-insta', 'option') ; ?>" target="_blank">Follow us on instagram</a>
        </div>
    </div>
    <footer>
        <div class="cd-footer cd-max-width">
            <div class="cd-footer-item">
                <h6><?php the_field('footer-quote', 'option') ; ?></h6>
<!--                <div class="cd-footer-social">-->
<!--                    --><?php //if( have_rows('social-icons', 'option') ): ?>
<!--                        --><?php //while( have_rows('social-icons', 'option') ) : the_row();?>
<!--                            <a target="_blank" style="background-color: --><?php //the_sub_field('social-background', 'option') ; ?><!--" href="--><?php //the_sub_field('social-link', 'option') ; ?><!--">-->
<!--                                <i class="--><?php //the_sub_field('social-icon', 'option') ; ?><!--"></i>-->
<!--                            </a>-->
<!--                        --><?php //endwhile; ?>
<!--                    --><?php //endif; ?>
<!--                </div>-->
            </div>
            <div class="cd-footer-item">
                <p><?php the_field('license-text', 'option') ; ?></p>
            </div>
        </div>
    </footer>


    <?php wp_footer(); ?>

<script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

</body>
</html>