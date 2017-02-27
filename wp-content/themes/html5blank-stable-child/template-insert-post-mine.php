<!--https://tutsplus.com/authors/vinny-singh for reference -->

<?php

if ( isset( $_POST['submitted'] ) && isset( $_POST['post_nonce_field'] ) && wp_verify_nonce( $_POST['post_nonce_field'], 'post_nonce' ) ) {

    if ( trim( $_POST['postTitle'] ) === '' ) {
        $postTitleError = 'Please enter a title.';
        $hasError = true;
    }
    else{
    $post_information = array(
        'post_title' => wp_strip_all_tags( $_POST['postTitle'] ),
        // 'post_content' => $_POST['postContent'],
        'post_type' => 'custom_post',
        'post_status' => 'pending'
    );

    $post_id = wp_insert_post( $post_information );
    if ( $post_id ) {
      // Update Custom Meta

      update_post_meta($post_id, 'vsip_custom_one', esc_attr(strip_tags($_POST['member_business'])));

      update_post_meta($post_id, 'vsip_custom_two', esc_attr(strip_tags($_POST['member_contact'])));

      update_post_meta($post_id, 'vsip_custom_three', esc_attr(strip_tags($_POST['street_address'])));

      update_post_meta($post_id, 'vsip_custom_four', esc_attr(strip_tags($_POST['city_address'])));

      update_post_meta($post_id, 'vsip_custom_five', esc_attr(strip_tags($_POST['member_phone'])));

      update_post_meta($post_id, 'vsip_custom_six', esc_attr(strip_tags($_POST['member_url'])));

	// Redirect
  		wp_redirect( home_url() ); exit;
  	}
}
}  ?>

<?php /* Template Name: Insert Posts Mine*/ get_header(); ?>
<div class="container">
  <div class="row">
    <div class="col-xs-12 col-md-10">



<form action="" id="primaryPostForm" method="POST">

    <fieldset>
        <label for="postTitle"><?php _e('Post Title:', 'framework') ?></label>

        <input type="text" name="postTitle" id="postTitle" placeholder="Acme Fire Sprinkler Co" class="required value="<?php if ( isset( $_POST['postTitle'] ) ) echo $_POST['postTitle']; ?>"" />
    </fieldset>

    <!-- <fieldset>
        <label for="postContent"><?php _e('Post Content:', 'framework') ?></label>

        <textarea name="postContent" id="postContent" rows="8" cols="30" class="required"><?php if ( isset( $_POST['postContent'] ) ) { if ( function_exists( 'stripslashes' ) ) { echo stripslashes( $_POST['postContent'] ); } else { echo $_POST['postContent']; } } ?></textarea>
    </fieldset> -->

    <fieldset>

      <label for="member_business"><?php _e('Member Business:', 'framework') ?></label>

      <input type="text" name="member_business" id="member_business" placeholder="Acme Fire Sprinkler Co" value="<?php if(isset($_POST['member_business'])) echo $_POST['member_business'];?>" />

    </fieldset>

    <fieldset>

      <label for="member_contact"><?php _e('Member Contact:', 'framework') ?></label>

      <input type="text" name="member_contact" id="member_contact" placeholder="John Doe" value="<?php if(isset($_POST['member_contact'])) echo $_POST['member_contact'];?>" />

    </fieldset>


    <fieldset>

      <label for="street_address"><?php _e('Street Address:', 'framework') ?></label>

      <input type="text" name="street_address" id="street_address" placeholder="123 Lacey Blvd" value="<?php if(isset($_POST['street_address'])) echo $_POST['street_address'];?>" />

    </fieldset>

    <fieldset>

      <label for="city_address"><?php _e('City:', 'framework') ?></label>

      <input type="text" name="city_address" id="city_address" placeholder="Hanford" value="<?php if(isset($_POST['city_address'])) echo $_POST['city_address'];?>" />

    </fieldset>

    <fieldset>

      <label for="member_phone"><?php _e('Phone Number:', 'framework') ?></label>

      <input type="text" name="member_phone" id="member_phone" placeholder="1 (559) 555 5555" value="<?php if(isset($_POST['member_phone'])) echo $_POST['member_phone'];?>" />

    </fieldset>

    <fieldset>

      <label for="member_url"><?php _e('URL:', 'framework') ?></label>

      <input type="text" name="member_url" id="member_url" placeholder="google.com" value="<?php if(isset($_POST['member_url'])) echo $_POST['member_url'];?>" />

    </fieldset>

    <?php wp_nonce_field( 'post_nonce', 'post_nonce_field' ); ?>
    <fieldset>
        <input type="hidden" name="submitted" id="submitted" value="true" />
        <button type="submit"><?php _e('Add Post', 'framework') ?></button>
    </fieldset>

</form>
        </div>

    </div>

</div>
<?php if ( $postTitleError != '' ) { ?>
    <span class="error"><?php echo $postTitleError; ?></span>
    <div class="clearfix"></div>
<?php } ?>


<?php get_footer();?>
