<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<?php get_template_part( 'content', get_post_format() ); ?>

	<?php endwhile; ?>

	<div class="navigation">
		<div class="next-posts"><?php next_posts_link('&laquo; Older Entries') ?></div>
		<div class="prev-posts"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
	</div>

	<?php else : ?>

		<h2>Not Found</h2>

	<?php endif; ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
