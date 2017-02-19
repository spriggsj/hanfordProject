<?php get_header(); ?>

	<div class="container">
		<div class="row main-content">
			<!-- CONTENT -->
			<div class="col-md-12 members">
					
					<?php 
					echo "<h2> Business Directory</h2>";


					
			
							
							
					
					echo "<div class='row'>";


					if (have_posts()) : while (have_posts()) : the_post(); // start of the loop

						$member = esc_html(get_post_meta(get_the_ID(), 'member_business', true));
						$contact = esc_html(get_post_meta(get_the_ID(), 'member_contact', true));
						$street = esc_html(get_post_meta(get_the_ID(), 'street_address', true));
						$city = esc_html(get_post_meta(get_the_ID(), 'city_address', true));
						$phone = esc_html(get_post_meta(get_the_ID(), 'member_phone', true));
						$url = esc_html(get_post_meta(get_the_ID(), 'member_url',true));
					

				
					
					if (isset($member)){
						
						echo "<div class='col-xs-12 col-sm-6 col-md-3 padBusDiv '><p class='dir_Bus_Name'><strong>" . $member . "</strong></p>";
						
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
						echo "<p><a href='" . $url . "'>" . $url . "</a></p></div>";
					}

					
				 	endwhile; endif; 

					
					echo "</div>";
				/*///////////////////////////previous posts///////////////*/
					
					?>

			</div>
			<!-- SIDEBAR MENU -->

				
		</div>
	</div>
	<!-- /////////////////////////////////////Pagination //////////////////////////////-->

     <div class="row">
	     	<div class='col-xs-12 col-md-12 col-lg-12 text-center' id="page">
	     	<h3><?php echo paginate_links( $args ); ?></h3>
	     	</div>
	</div>
	
<?php get_footer(); ?>
