<?php /* Template Name: Financial Query */ get_header(); ?>
<section class="">
	<div class="container">
		<div class="row main-content">
			<!-- CONTENT -->
			<div class="col-md-12 members">
	<?php
		$args = [
			// this is the post type for the query
			'post_type' => 'custom_post',
			// post status of the posts you want to grab
			'post_status' => 'publish',
			// order you want to see your post
			'order' => 'ASC',
			// to select order you want to display them by title date ect....
			'orderby' => 'title',
			// this is query over your custom taxonmy you have (it needs to be in two arrays)
			'tax_query' => [
				[
					// name of the custom taxonomy
					'taxonomy' => 'business_category',
					// this is the slug of the custom taxonmy
					'field' => 'slug',
					// what ever custom category name you want to loop over
					'terms' => 'financial'
				]
			]


		];


		?>
		<div class="categoryName">
			<h2 class="catTitle">Business Financial Services</h2>
		</div>
		<?php
		$apparel_query = new WP_Query($args);
		if($apparel_query->have_posts()) : while($apparel_query->have_posts()) : $apparel_query->the_post();

			$member = esc_html(get_post_meta(get_the_ID(), 'member_business', true));
			$contact = esc_html(get_post_meta(get_the_ID(), 'member_contact', true));
			$street = esc_html(get_post_meta(get_the_ID(), 'street_address', true));
			$city = esc_html(get_post_meta(get_the_ID(), 'city_address', true));
			$phone = esc_html(get_post_meta(get_the_ID(), 'member_phone', true));
			$url = esc_html(get_post_meta(get_the_ID(), 'member_url',true));
		?>
		<?php  echo "<div class='col-xs-12 col-sm-6 col-md-3 padBusDiv '><p class='dir_Bus_Name'><strong>" . $member . "</strong></p>"; ?>

		<?php echo "<p>" .$member. "</p>";
					echo "<p> Contact: " . $contact . "</p>";
					echo "<p>" . $street . "</p>";
					echo "<p>" . $city . "</p>";
					echo "<p>" . $phone . "</p>";
					echo "<p><a href='" . $url . "'>" . $url . "</a></p></div>";

		?>

	<?php endwhile; ?>
	<?php wp_reset_postdata(); ?>
	<?php endif; ?>
			</div>
	</div>
</section>
<?php get_footer();?>
