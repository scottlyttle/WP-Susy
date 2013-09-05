<?php get_header(); ?>

	<?php if (have_posts()) : ?>

		<h2>Search Results for: "<?php echo get_search_query(); ?>"</h2>

		<?php while (have_posts()) : the_post(); ?>

			<?php get_template_part( 'content', 'search' ); ?>

		<?php endwhile; ?>

	<?php else : ?>

		<h2>No posts found.</h2>

	<?php endif; ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
