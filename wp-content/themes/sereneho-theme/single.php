<?php
/**
 * Single post template for Serene Ho Profile.
 *
 * This allows Elementor (or the default editor) to render
 * individual Posts using the standard Loop and the_content().
 */

get_header();
?>

<main id="primary" class="site-main">
	<?php
	if ( have_posts() ) :
		while ( have_posts() ) :
			the_post();

			// Title can be managed by Elementor, but we show it by default.
			echo '<h1 class="entry-title">' . esc_html( get_the_title() ) . '</h1>';

			the_content();

		endwhile;
	else :
		echo '<p>No post found.</p>';
	endif;
	?>
</main>

<?php
get_footer();


