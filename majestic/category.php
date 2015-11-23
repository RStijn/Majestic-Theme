<?php get_header(); ?>

	<main role="main" class="col-sm-9 col-md-9 col-lg-9">
		<!-- section -->
		<section>

			<h1><?php _e( 'Categories for ', 'majestic' ); single_cat_title(); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
