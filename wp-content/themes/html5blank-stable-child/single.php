
<?php get_header(); ?>

	<div class="container single__page">
		<div class="row ">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<div class="singles__title">

						
						

					</div>
					<div class="col-xs-6 ">


						<div class="">
							<?php the_post_thumbnail(); ?>
							
						</div>
					</div>

					<div class="col-xs-9 ">
						<h1><?php the_title(); ?></h1>
						<span class="date"><?php the_time('F j, Y'); ?></span>
						
						<?php the_content(); ?>
						<span class="author"><?php _e( 'Article written by', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span>
						<?php comments_template(); ?>
					</div>

					<?php
					endwhile; endif;

				?>
				<div class="col-sm-2 col-lg-2">
						
				</div>


		</div>
	</div>



<?php get_footer(); ?>

<!-- XXXXXXX original styles under this line XXXXXXXXXXXXXXXXX  -->

	

<?php get_footer(); ?>
