<?php /* Template Name: Calendar Page Template */ get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>
		<div class="container">

			<h1><?php the_title(); ?></h1>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>

				<?php comments_template( '', true ); // Remove if you don't want comments ?>

				<br class="clear">

				<?php edit_post_link(); ?>

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</div>
		</section>
		<!-- /section -->
		<div class="container">
			<div class="row">
				<div class = "col-xs-12">


		<h2>Don't see your Downtown Event listed here. Please submit your event.</h2>
		<?php echo do_shortcode( '[contact-form-7 id="84" title="Additional events"]' ); ?>
		</div>
	</div>	
</div>
	</main>



<?php get_footer(); ?>
