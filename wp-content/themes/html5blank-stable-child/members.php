<?php get_header(); ?>
<div class="container">
		<div class="row main-content">
			<div class="col-md-12 "> 
			<!-- CONTENT -->


				<!--DISPLAY CUSTOM POSTS-->
				<h1><strong>Downtown Business Directory</strong></h1><br/><br/>

				<?php $loop = new WP_Query( array( 'post_type' => 'custom_posts', 'posts_per_page' => 10 ) ); ?> 





				<?php 
					if (have_posts()) : while (have_posts()) : the_post(); // start of the loop

						$member = esc_html(get_post_meta(get_the_ID(), 'member_business', true));
						$contact = esc_html(get_post_meta(get_the_ID(), 'member_contact', true));
						$street = esc_html(get_post_meta(get_the_ID(), 'street_address', true));
						$city = esc_html(get_post_meta(get_the_ID(), 'city_address', true));
						$phone = esc_html(get_post_meta(get_the_ID(), 'member_phone', true));
						$url = esc_url(get_post_meta(get_the_ID(), 'member_url',true));


					if (isset($member)){
						echo "<p><strong>" . $member . "</strong></p>";
					}

					if (isset($contact)){
						echo "<p>Contact: " . $contact . "</p>";
					}
					if (isset($street)){
						echo "<p>" . $street . "</p>";
					}
					if (isset($city)){
						echo "<p>" . $city . "</p>";
					}
					if (isset($phone)){
						echo "<p>" . $phone . "</p>";
					}
					if (isset($url)){
						echo "<p><a href='" . $url . "'>" . $url . "</a></p>";
					}


				endwhile; endif;



				?>


				<!--END CUSTOM POSTS-->
					
					<!-- need to change page_id when site is live  -->

					

			</div>
			

				
		</div>
</div>
	
	
	
		<?php get_footer(); ?>