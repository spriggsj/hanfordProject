<?php
/*
*Plugin Name: Hanford Business Post
*Plugin URI:
*Description: Custom Posts For Hanford Business Info
*Version 1.0
*Author: Jason Spriggs
*/

add_action('init', 'js_members_custom_post');

function js_members_custom_post(){
	register_post_type('custom_post',
		[
		'labels' => [
		'name' => 'Downtown Business',
		'singular_name' => 'Business',
		'add_new_item' => 'Add New Downtown Business',
		'edit_item' => 'Edit item',
        'new_item' => 'New item',
        'view_item' => 'View item',
        'search_item' => 'Search Business',
        'not_found' => 'No item found',
        'not_found_in_trash' => 'No items found in trash',
        'parent_item_colon' => 'parent item'
		],
			'public' => true,
			'has_archive' => true,
			'menu_icon' => 'dashicons-store',
			'rewrite' => array('slug' => 'business'),
			'publicly_queryable' => true,
			'query_var' => true,
			'supports' => [
				'title', //ie  editor etc
				],
				'taxonomies' => ['business_category'],
		]


		);
}

// this adds a custom category;

add_action('init', 'business_taxonomy', 0);

function business_taxonomy(){
  $labels = [
    'name' => 'Business Types',
    'singular_name' => 'Business Type',
    'search_items' => 'Search Business Types',
    'all_items' => 'All Categories',
    'parent_item_colon' => 'Parent Business Types',
    'edit_item' => 'Edit Business Types',
    'update_item' => 'Update Business Types',
    'add_new_item' => 'Add New Business Types',
    'new_item_name' => 'New Name Business Types',
    'menu_name' => 'Business Types',
  ];

  $args = [
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
  ];

  register_taxonomy('business_category', 'custom_post', $args);

}



add_action('admin_init', 'member_post');

function member_post(){
	add_meta_box ('custom_posts_meta',
		'Downtown Hanford Business Information',
		'display_custom_meta_box',
		'custom_post',
		'normal',
		'high'
		);
}

function display_custom_meta_box($members){
	$member = esc_html(get_post_meta($members->ID, 'member_business',true));
	$contact = esc_html(get_post_meta($members->ID, 'member_contact',true));
	$streetaddress = esc_html(get_post_meta($members->ID, 'street_address',true));
	$city = esc_html(get_post_meta($members->ID, 'city_address',true));
	$phone = esc_html(get_post_meta($members->ID, 'member_phone',true));
  $url = esc_url(get_post_meta($members->ID, 'member_url',true));



	?>

	<label for='member_business'>Member Business</label>
	<input type="text" class="widefat" name="member_business" placeholder="Acme Fire Sprinkler Co" value="<?php echo $member; ?>"><br/>
	<label for='member_contact'>Contact</label>
	<input type="text" class="widefat" name="member_contact" placeholder="John Q. Public" value="<?php echo $contact; ?>"><br/>
	<label for='street_address'>Street Address</label>
	<input type="text" class="widefat" name="street_address" placeholder="1234 Main Street" value="<?php echo $streetaddress; ?>"><br/>
	<label for='city_address'>City and State</label>
	<input type="text" class="widefat" name="city_address" placeholder="Hometown CA" value="<?php echo $city; ?>"></br>
	<label for='member_phone'>Member Phone Number</label>
	<input type="text" class="widefat" name="member_phone" placeholder="1-555-555-5555" value="<?php echo $phone; ?>"></br>
  <label for='member_url'>Member URL</label>
  <input type="text" class="widefat" name="member_url" placeholder="http://company_name.com" value="<?php echo $url; ?>"></br>

	<?php
}



add_action('save_post', 'add_members_fields', 10, 2); //save action to save inputs from custom post

function add_members_fields($members_info_id, $members){
  if ($members->post_type == 'custom_post'){
  	if (!current_user_can('edit_post', $members_info_id ))
  		return $members_info_id;

  	$members_business = wp_kses_post($_POST['member_business']);
    if(isset($members_business) && $members_business != ''){
      update_post_meta($members_info_id, 'member_business', $members_business);
    }

    $member_contact = wp_kses_post($_POST['member_contact']);
        if(isset($member_contact) && $member_contact != ''){
      update_post_meta($members_info_id, 'member_contact', $member_contact);
    }

    $street_address = wp_kses_post($_POST['street_address']);
    	if(isset($street_address) && $street_address != ''){
      update_post_meta($members_info_id, 'street_address', $street_address);
    }

    $city_address = wp_kses_post($_POST['city_address']);
    	if(isset($city_address) && $city_address != ''){
      update_post_meta($members_info_id, 'city_address', $city_address);
    }

  	$member_phone = wp_kses_post($_POST['member_phone']);
    	if(isset($member_phone) && $member_phone != ''){
      update_post_meta($members_info_id, 'member_phone', $member_phone);
    }
    $member_url = wp_kses_post($_POST['member_url']);
      if(isset($member_url) && $member_url != ''){
      update_post_meta($members_info_id, 'member_url', $member_url);
    }
  }

}



add_filter('template_include', 'include_members_function', 1);

function include_members_function($template_path){ // Checks to see if is custom post
    if(get_post_type() == 'custom_post'){ // If is single page
            // First Check to see if theme file 'singe-members.php exists'
            //If it doesnt then use the default from the plugin
        if (is_single()){
            if ($theme_file = locate_template(['members.php'])){
                $template_path = $theme_file;
            }else {
                // Default location from the plugin
                $template_path = plugin_dir_path(__FILE__) . '/members.php';
            }
        }
    }
    return $template_path; // Return template path
}
/* code to alter ascending order */
function foo_modify_query_order( $query ) {
    if ( $query->is_main_query() ) {
        $query->set( 'orderby', 'title' );
        $query->set( 'order', 'ASC' );
    }
}
add_action( 'pre_get_posts', 'foo_modify_query_order' );

/* End Experiment code to alter ascending order */

/* /////////////// LIMIT POSTS PER PAGE////////////////////////////////////////*/

function set_posts_per_page_for_members( $query ) {
  if ( $query->is_post_type_archive( 'custom_post' ) ) {
    $query->set( 'posts_per_page', '40' );
  }
}

add_action( 'pre_get_posts', 'set_posts_per_page_for_members' );
