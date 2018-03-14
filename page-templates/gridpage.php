<?php
/**
 * Template Name: Grid
 */
?>

<?php get_header() ;
$pageTitle = get_the_title();

?>

<section class="cd-section cd-sub-page">
    <div class="cd-grid cd-max-width">
        <?php $loop = new WP_Query( array( 'post_type' => 'post' , 'posts_per_page' => -1, 'category_name' => $pageTitle)); ?>
        <?php if ( $loop->have_posts() ) : ?>
            <?php while ( $loop->have_posts() ) : $loop->the_post(); $categories = get_the_category(); ?>
                <div class="cd-grid-post-card">
                    <a href="<?php the_permalink() ; ?>" class="cd-absolute-link"></a>
                    <h5><?php echo esc_html( $categories[0]->name ); ?> </h5>
                    <div class="cd-grid-post-card-img cd-background-img" style="background-image: url('<?php the_post_thumbnail_url() ; ?>')"></div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
        <?php wp_reset_query(); ?>
    </div>
</section>

<?php get_footer() ; ?>
