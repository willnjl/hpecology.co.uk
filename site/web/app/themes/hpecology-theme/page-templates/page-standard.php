<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * 
 * Template Name: Standard Template
 * @package fiteenTen
 */

get_header();
?>

<main id="primary" class="site-main">
    <?php while(have_posts()) : the_post(); ?>
	    <?php get_template_part('template-parts/content', $post->post_name); ?>
    <?php endwhile; ?>
</main><!-- #main -->

<?php
get_footer();
