<?php
/**
 * Blog posts index template.
 *
 * This template is used for the main Posts page if one is set
 * in Settings → Reading, or the home/blog listing in general.
 * It keeps things simple and WordPress-standard.
 */

get_header();
?>

<main id="primary" class="site-main">
	<?php
	if ( have_posts() ) :
		while ( have_posts() ) :
			the_post();
			?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<h2 class="entry-title">
					<a href="<?php the_permalink(); ?>">
						<?php the_title(); ?>
					</a>
				</h2>

				<div class="entry-summary">
					<?php the_excerpt(); ?>
				</div>
			</article>
			<?php
		endwhile;

		the_posts_pagination();
	else :
		echo '<p>No posts found.</p>';
	endif;
	?>
</main>

<?php
get_footer();


