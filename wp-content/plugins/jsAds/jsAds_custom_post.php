<?php 
/*
*Plugin Name: jsAds Custom Post
*Plugin URI:
*Description: jsAds Custom Post
*Version 1.0
*Author: Jason Spriggs
*/

add_action('init', 'jsAds_custom_post');

function jsAds_custom_post(){
	register_post_type('jsAds_post',
		[
		'labels' => [
			'name' => 'Ads',
			'singular_name' => 'ad',
			'edit_item' => 'Edit item',
			'new_item' => 'New item',
			'view_item' => 'View item',
			'search_item' => 'Search Ads',
			'not_found' => 'No items found',
			'not_found_in_trash' => 'No items found in the trash',
			'parent_item_colon' => 'Parent items'
		],
			'public' => true,
			'has_archive' => true,
			'menu_icon' => 'dashicons-thumbs-up',
			'rewrite' => array('slug' => 'ads'),
			'publicly_queryable' => true,
			'query_var' => true,
			'supports' => [
				'title', 'editor', 'thumbnail', 'comments',
			],
				'taxonomies' => ['Tip Catagories','post_tag'],
		]
	);
}

add_action('admin_init', 'jsAds_post');

function jsAds_post(){
	add_meta_box(
		'Health Tip Info',
		'jsAds_post',
		'normal',
		'high'
	);
}

/* Taxonomy for catagories */
//hook into the init action and call create_book_taxonomies when it fires
add_action( 'init', 'create_ads_hierarchical_taxonomy', 0 );

//create a custom taxonomy name it topics for your posts

function create_ads_hierarchical_taxonomy() {

// Add new taxonomy, make it hierarchical like categories
//first do the translations part for GUI

  $labels = array(
    'name' =>  'Ad',
    'singular_name' => 'Ad',
    'search_items' =>  'Search Ads',
    'all_items' => 'All Ads' ,
    'parent_item' => 'Parent Ads',
    'parent_item_colon' => 'Parent Ads:',
    'edit_item' => 'Edit Ads', 
    'update_item' => 'Update Ads',
    'add_new_item' => 'Add New Ads',
    'new_item_name' => 'New Ads',
    'menu_name' => 'Ad Catagories',
  ); 	

// Now register the taxonomy

  register_taxonomy('Ad Catagories','jsAds_post', array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'Ads' ),
  ));

}


/* End of Taxonomy */

function js_excerpt_length($length){
	return 15;
}

add_filter('excerpt_length', 'js_excerpt_length', 999);

function js_excerpt_more($more){
	return 'Read More';
}

add_filter('excerpt_more', 'js_excerpt_more');

add_action('save_post', 'add_jsAds_fields', 10, 2);

function add_jsAds_fields($jsAds_info_id, $jsAds){
	if($jsAds->post_type == 'jsAds_post'){
		if(!current_user_can('edit_post', $jsAds_info_id))
			return $jsAds_info_id;
	}
}

add_filter('template_include', 'jsAds_function', 1);

function jsAds_function($template_path){
	if(get_post_type() == 'jsAds_post'){
		if(is_single()){
			if($theme_file = locate_template(['jsAds_post.php'])){
				$template_path = $theme_file;
			} else {
				$template_path = plugin_dir_path(__FILE__) . '/jsAds_post.php';
			}
		}
	}
	return $template_path;
}



//SHORT CODE 


function ad_custom_loop_shortcode( $atts ) {
	
	$output = '';
	$custom_ad_loop_atts = shortcode_atts(
	[
		'type' => 'jsAds_post',
	], $atts

	);
	$post_type = $ad_custom_loop_atts['type'];
	$args = array(
		'post_type' => jsAds_post,
		'post_status' => 'publish',
		'order' => 'date',
		'posts_per_page' => 4

	);

	$the_query = new WP_Query($args);
		$output .= '<div class="sponseredAd">';
			

			while ($the_query->have_posts()) : $the_query->the_post(); $post_id = get_the_ID();
				$output .= '<h3>';
      				$output .= get_the_title();
      			$output .= '</h3>';
      			$output .= '<p>';
	      			$output .= get_the_post_thumbnail( get_the_ID() );
	      		$output .= '</p>';
	      		$output .= '<h4>';
	      			$output .= get_the_content($post_id);
	      		$output .= '</h4>';
			endwhile;
			
		$output .= '</div>';

		return $output;

      	wp_reset_postdata();
}

  add_shortcode('ad-loop', 'ad_custom_loop_shortcode');

?>