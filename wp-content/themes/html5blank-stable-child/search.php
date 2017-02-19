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

			<h1><?php echo sprintf( __( '%s Search Results for ', 'html5blank' ), $wp_query->found_posts ); echo get_search_query(); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>
						</div>
					</div>
				</div>
		</section>
		<!-- /section -->
	</main>


<?php get_footer(); ?>
