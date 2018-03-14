<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package cone
 */

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

    <section class="cd-page-section cd-max-width cd-medium-width cd-single-page">
        <h2><?php the_title() ; ?></h2>
        <div class="cd-page-content">
            <?php the_content() ; ?>
        </div>
        <?php if( get_field('contact-shortcode')) ; ?>
        <div class="cd-contact-form">
            <?php echo do_shortcode(get_field('contact-shortcode')) ; ?>
        </div>
    </section>

<?php endwhile; ?>

<?php get_footer(); ?>