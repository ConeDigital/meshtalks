<?php
/**
 * Template Name: Subpage
 */
?>

<?php get_header() ;
      $pageTitle = get_the_title();

?>

<!--<section class="cd-section cd-home-top cd-max-width">-->
<!--    <div class="cd-section-left">-->
<!--        <div class="cd-big-video cd-background-img" style="background-image: url('https://scontent-arn2-1.cdninstagram.com/vp/8774ebc2bbe2612b45b22d86626f92d7/5B0F2840/t51.2885-15/e35/26872209_537992203246388_3413553866996711424_n.jpg')">-->
<!---->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="cd-section-right">-->
<!--        <div class="cd-home-top-grid">-->
<!--            <img src="https://scontent-arn2-1.cdninstagram.com/vp/8774ebc2bbe2612b45b22d86626f92d7/5B0F2840/t51.2885-15/e35/26872209_537992203246388_3413553866996711424_n.jpg">-->
<!--            <h4>Podcast</h4>-->
<!--            <p>Curabitur ligula sapien, tincidunt non, euismod vitae, posuere imperdiet, leo. Cras ultricies mi eu turpis hendrerit fringilla. Curabitur nisi.</p>-->
<!--        </div>-->
<!--        <div class="cd-home-top-grid">-->
<!--            <img src="https://scontent-arn2-1.cdninstagram.com/vp/8774ebc2bbe2612b45b22d86626f92d7/5B0F2840/t51.2885-15/e35/26872209_537992203246388_3413553866996711424_n.jpg">-->
<!--            <h4>Podcast</h4>-->
<!--            <p>Curabitur ligula sapien, tincidunt non, euismod vitae, posuere imperdiet, leo. Cras ultricies mi eu turpis hendrerit fringilla. Curabitur nisi.</p>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->
<section class="cd-section cd-sub-page">
    <div class="cd-post-grid cd-max-width">
        <?php $loop = new WP_Query( array( 'post_type' => 'post' , 'posts_per_page' => -1, 'category_name' => $pageTitle)); ?>
        <?php if ( $loop->have_posts() ) : ?>
            <?php while ( $loop->have_posts() ) : $loop->the_post(); $categories = get_the_category(); ?>
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
            <?php endwhile; ?>
        <?php endif; ?>
        <?php wp_reset_query(); ?>
    </div>
</section>

<?php get_footer() ; ?>
