<?php
/**
 * Page template for Serene Ho Profile.
 *
 * This file makes the theme compatible with page builders like
 * Elementor by providing a standard Loop and calling the_content().
 *
 * Any WordPress "Page" (including those edited with Elementor)
 * will use this template instead of the static index.php fallback.
 */

get_header();
?>

<main id="primary" class="site-main">
	<?php
	if ( have_posts() ) :
		while ( have_posts() ) :
			the_post();

			the_content();

		endwhile;
	else :
		echo '<p>No content found.</p>';
	endif;
	?>
</main>

<?php
get_footer();


