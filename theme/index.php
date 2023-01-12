<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kominki
 */

get_header();
?>

<section id="primary">
	<main id="main">

		<?php
		if (have_posts()) {

			if (is_home() && !is_front_page()) :
		?>
				<header class="entry-header">
					<h1 class="entry-title"><?php single_post_title(); ?></h1>
				</header><!-- .entry-header -->
		<?php
			endif;

			// Load posts loop.
			while (have_posts()) {
				the_post();
				get_template_part('template-parts/content/content');
			}

			// Previous/next page navigation.
			kominki_the_posts_navigation();
		} else {

			// If no content, include the "No posts found" template.
			get_template_part('template-parts/content/content', 'none');
		}
		?>

	</main><!-- #main -->
</section><!-- #primary -->

<?php


$product_term_args = array(
	'taxonomy' => 'product_cat',
	'include' => array(20),
	'orderby'  => 'include'
);
$product_terms = get_terms($product_term_args);

$product_term_slugs = [];
foreach ($product_terms as $product_term) {
	$product_term_slugs[] = $product_term->slug;
}

$product_args = array(
	'post_status' => 'publish',
	'limit' => -1,
	'category' => $product_term_slugs,
	//more options according to wc_get_products() docs
);
$products = wc_get_products($product_args);
echo var_dump($products);
foreach ($products as $product) {
	$product_id = $product->get_id();
	$product_type = $product->get_type();
	$product_title = $product->get_title();
	$product_permalink = $product->get_permalink();
	$product_price = $product->get_price();
	$product_regular_price = $product->get_regular_price();
	$product_sale_price = $product->get_sale_price();
	$product_short_desc = $product->get_short_description();
	$product_categories = $product->get_categories();
	echo '<br>';
	echo '<hr>';
	echo $product_title;
	echo $product_sale_price;
	echo $product_permalink;
	$image = get_the_post_thumbnail_url($product_id);
	echo $image;
}

get_footer();
