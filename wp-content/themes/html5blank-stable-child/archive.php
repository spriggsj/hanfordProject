<?php get_header(); ?>
	
	<header class="hero-banner-archive">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12 archive-intro">
					<h1>Heart Of Hanford</h1>
					<h3>Articles</h3> 
				</div>
			</div>
		</div>
	</header>

	<main role="main">
		<!-- section -->
		<section>
			<div class="container">
				<div class="row">
					<div class="col-sm-12 archive-section-title  ">
						<h1><?php _e( 'Hanford\'s Voice', 'html5blank' ); ?></h1>
		
						<!-- testing Loop Starts Here -->

							<?php if (have_posts()): while (have_posts()) : the_post(); ?>

						<!-- article -->
							<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

						<!-- post thumbnail -->
		
							<div class="col-xs-12 col-sm-3 archive-excerpt">
								<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
									<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
										<?php the_post_thumbnail(array(220,220)); // Declare pixel size you need inside the array ?>
									</a>
											
								<?php endif; ?>
							</div>
			
		<!-- /post thumbnail -->

		<!-- post title -->
		
			       <div class="col-xs-8 archive-excerpt">		
						<h2>
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
						</h2>
						<!-- /post title -->

						<!-- post details -->
						<span class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span>
						<span class="author"><?php _e( 'Published by', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span>
						<span class="comments"><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' )); ?></span>
						<!-- /post details -->
						<?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>

						<?php edit_post_link(); ?>
					</div>
				

						<?php endwhile; ?>
				
			
							<!-- /article -->
						<?php else: ?>

							<!-- article -->
							<article>
								<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
							</article>
							<!-- /article -->

						<?php endif; ?>


		<!-- testing Loop Ends Here -->
						

						<?php get_template_part('pagination'); ?>
					</div>
				</div>
			</div>
		</section>
		<!-- /section -->
	</main>



<?php get_footer(); ?>