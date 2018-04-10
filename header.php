<?php
/**
 * The template for displaying the header
 *
 * @package cone
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title( ' - ', true, 'right' ); ?></title>
    <link rel="icon" href="<?php echo esc_url(home_url( '/wp-content/themes/meshtalks/assets/images/meshfav.png' ) ); ?>">

    <?php cone_og_meta_tags(); ?>

    <?php wp_head(); ?>
</head>
<body>

    <header>
        <div class="cd-header-logo cd-background-img" style="background-image: url('<?php the_field('header-image', 'option') ; ?>')">
            <a target="_blank" href="https://www.youtube.com/user/RMHSWEDEN" class="cd-absolute-link"></a>
<!--            <div class="cd-max-width">-->
<!--                <a href="--><?php //echo esc_url(home_url()); ?><!--">-->
<!--                    <h1>--><?php //the_field('site-title', 'option') ; ?><!--</h1>-->
<!--                </a>-->
<!--            </div>-->
        </div>
        <div class="cd-header cd-max-width cd-large-width">
            <div class="cd-header-content">
<!--                <a class="cd-header-side-links" target="_blank" href="http://trans94.wpengine.com/">-->
<!--                    <img src="--><?php //echo esc_url(home_url( '/wp-content/themes/meshtalks/assets/images/trans94.png' ) ); ?><!--">-->
<!--                </a>-->
                <?php wp_nav_menu( array( 'theme_location' => 'secondary', 'menu_class' => '' ) ); ?>
                    <li class="cd-title-link">
                        <a href="<?php echo esc_url(home_url()); ?>">mesh</a>

                    </li>
                <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => '' ) ); ?>

<!--                <a class="cd-header-side-links" target="_blank" href="https://www.youtube.com/user/RMHSWEDEN">-->
<!--                    <span>*MESH TV</span>-->
<!--                </a>-->
            </div>
        </div>
    </header>
