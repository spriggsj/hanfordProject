<?php /* Template Name: Business Directory */ get_header(); ?>
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
					'terms' => 'Antiques'
				]
			]


		];


		?>
		<div class="categoryName">
			<h2 class="catTitle">Antiques</h2>
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
					'terms' => 'Apparel'
				]
			]


		];


		?>
		<div class="categoryName">
			<h2 class="catTitle">Apparel</h2>
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
					'terms' => 'Appliance'
				]
			]


		];


		?>
		<div class="categoryName">
			<h2 class="catTitle">Appliances</h2>
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
					'terms' => 'Architecture'
				]
			]


		];


		?>
		<div class="categoryName">
			<h2 class="catTitle">Architecture</h2>
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
					'terms' => 'Automotive'
				]
			]


		];


		?>
		<div class="categoryName">
			<h2 class="catTitle">Automotive</h2>
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
					'terms' => 'Beauty'
				]
			]


		];


		?>
		<div class="categoryName">
			<h2 class="catTitle">Beauty</h2>
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
			<h2 class="catTitle">Business</h2>
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
					'terms' => 'Communications'
				]
			]


		];


		?>
		<div class="categoryName">
			<h2 class="catTitle">Communications</h2>
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
					'terms' => 'Dry-cleaners'
				]
			]


		];


		?>
		<div class="categoryName">
			<h2 class="catTitle">Dry Cleaners</h2>
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
					'terms' => 'Entertainment'
				]
			]


		];


		?>
		<div class="categoryName">
			<h2 class="catTitle">Entertainment</h2>
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
					'terms' => 'Farm'
				]
			]


		];


		?>
		<div class="categoryName">
			<h2 class="catTitle">Farming </h2>
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
					'terms' => 'Financial'
				]
			]


		];


		?>
		<div class="categoryName">
			<h2 class="catTitle">Financial </h2>
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
					'terms' => 'Florists'
				]
			]


		];


		?>
		<div class="categoryName">
			<h2 class="catTitle">Florists </h2>
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
					'terms' => 'Food'
				]
			]


		];


		?>
		<div class="categoryName">
			<h2 class="catTitle">Food </h2>
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
					'terms' => 'Furnishing'
				]
			]


		];


		?>
		<div class="categoryName">
			<h2 class="catTitle">Furnishing </h2>
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
					'terms' => 'Government'
				]
			]


		];


		?>
		<div class="categoryName">
			<h2 class="catTitle">Government </h2>
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
					'terms' => 'Health'
				]
			]


		];


		?>
		<div class="categoryName">
			<h2 class="catTitle">Health </h2>
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
					'terms' => 'Hobbies'
				]
			]


		];


		?>
		<div class="categoryName">
			<h2 class="catTitle">Hobbies </h2>
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
					'terms' => 'Insurance'
				]
			]


		];


		?>
		<div class="categoryName">
			<h2 class="catTitle">Insurance </h2>
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
					'terms' => 'Jewelers'
				]
			]


		];


		?>
		<div class="categoryName">
			<h2 class="catTitle">Jewelers </h2>
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
					'terms' => 'Lodging'
				]
			]


		];


		?>
		<div class="categoryName">
			<h2 class="catTitle">Lodging </h2>
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
					'terms' => 'Markets'
				]
			]


		];


		?>
		<div class="categoryName">
			<h2 class="catTitle">Markets </h2>
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
					'terms' => 'Medical'
				]
			]


		];


		?>
		<div class="categoryName">
			<h2 class="catTitle">Medical </h2>
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
					'terms' => 'Non-profit'
				]
			]


		];


		?>
		<div class="categoryName">
			<h2 class="catTitle">Non Profit </h2>
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
					'terms' => 'Office-Equipment'
				]
			]


		];


		?>
		<div class="categoryName">
			<h2 class="catTitle">Office Equipment </h2>
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
					'terms' => 'Painting'
				]
			]


		];


		?>
		<div class="categoryName">
			<h2 class="catTitle">Painting </h2>
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
					'terms' => 'Pets'
				]
			]


		];


		?>
		<div class="categoryName">
			<h2 class="catTitle">Pets </h2>
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
					'terms' => 'Photography'
				]
			]


		];


		?>
		<div class="categoryName">
			<h2 class="catTitle">Photography </h2>
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
					'terms' => 'Plumbing'
				]
			]


		];


		?>
		<div class="categoryName">
			<h2 class="catTitle">Plumbing </h2>
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
					'terms' => 'Pools'
				]
			]


		];


		?>
		<div class="categoryName">
			<h2 class="catTitle">Pools </h2>
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
					'terms' => 'Printing'
				]
			]


		];


		?>
		<div class="categoryName">
			<h2 class="catTitle">Printing </h2>
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
					'terms' => 'Realestate'
				]
			]


		];


		?>
		<div class="categoryName">
			<h2 class="catTitle">Realestate </h2>
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
					'terms' => 'Rentals'
				]
			]


		];


		?>
		<div class="categoryName">
			<h2 class="catTitle">Rentals </h2>
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
					'terms' => 'Retail'
				]
			]


		];


		?>
		<div class="categoryName">
			<h2 class="catTitle">Retail </h2>
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
					'terms' => 'Schools'
				]
			]


		];


		?>
		<div class="categoryName">
			<h2 class="catTitle">Schools </h2>
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
					'terms' => 'Service'
				]
			]


		];


		?>
		<div class="categoryName">
			<h2 class="catTitle">Service </h2>
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
					'terms' => 'Travel'
				]
			]


		];


		?>
		<div class="categoryName">
			<h2 class="catTitle">Travel </h2>
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






<?php
        $terms = get_terms('business_category',
            array(
                'hide_empty' => false,
                'orderby'    => 'name',
                'order'      => 'ASC'
            )
        );

        foreach( $terms as $term ):
    ?>
  <section class="categoryList">
    <h2><?php echo $term->name; ?></h2>
  </section>
<?php endforeach; ?>







<?php get_footer();?>
