<?php
global $current_post;

if ( isset( $_POST['submitted'] ) && isset( $_POST['post_nonce_field'] ) && wp_verify_nonce( $_POST['post_nonce_field'], 'post_nonce' ) ) {

    if ( trim( $_POST['postTitle'] ) === '' ) {
        $postTitleError = 'Please enter a title.';
        $hasError = true;
    }
    else{
      $post_information = array(
      'ID' => $current_post,
      'post_title' =>  wp_strip_all_tags( $_POST['postTitle'] ),
      // 'post_content' => $_POST['postContent'],
      'post_type' => 'custom_post',
      'post_status' => 'pending'
  );
    $post_id = wp_update_post( $post_information );

    if ( $post_id ) {
    wp_redirect( home_url() );
    exit;
      }
  }
}
?>
<?php /* Template Name: Edit Posts mine */ get_header(); ?>

<?php $query = new WP_Query( array( 'post_type' => 'custom_post', 'posts_per_page' => '-1' ) ); ?>

<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();

if ( isset( $_GET['post'] ) ) {

    if ( $_GET['post'] == $post->ID )
    {
        $current_post = $post->ID;
        $title = get_the_title();
        // $content = get_the_content();
        $custom_one = get_post_meta($current_post, 'vsip_custom_one', true);
  			$custom_two = get_post_meta($current_post, 'vsip_custom_two', true);
        $custom_three = get_post_meta($current_post, 'vsip_custom_three', true);
        $custom_four = get_post_meta($current_post, 'vsip_custom_four', true);
        $custom_five = get_post_meta($current_post, 'vsip_custom_five', true);
        $custom_six = get_post_meta($current_post, 'vsip_custom_six', true);

    }
}


?>


<?php

<form action="" id="primaryPostForm" method="POST">

    <fieldset>

        <label for="postTitle"><?php _e( 'Post\'s Title:', 'framework' ); ?></label>

        <input type="text" name="postTitle" id="postTitle" value="<?php echo $title; ?>" class="required" />

    </fieldset>

    <?php if ( $postTitleError != '' ) { ?>
        <span class="error"><?php echo $postTitleError; ?></span>
        <div class="clearfix"></div>
    <?php } ?>

    <!-- <fieldset>

        <label for="postContent"><?php _e( 'Post\'s Content:', 'framework' ); ?></label>

        <textarea name="postContent" id="postContent" rows="8" cols="30"><?php echo $content; ?></textarea>

    </fieldset> -->
    

    <fieldset>

      <label for="member_business"><?php _e('Post\'s Business:', 'framework') ?></label>

      <input type="text" name="member_business" id="member_business" value="<?php echo $custom_one; ?>" />


    </fieldset>

    <fieldset>

      <label for="member_contact"><?php _e('Post\'s Contact:', 'framework') ?></label>

      <input type="text" name="member_contact" id="member_contact" value="<?php echo $custom_two; ?>" />

    </fieldset>


    <fieldset>

      <label for="street_address"><?php _e('Post\'s Street Address:', 'framework') ?></label>

      <input type="text" name="street_address" id="street_address" value="<?php echo $custom_three; ?>" />

    </fieldset>

    <fieldset>

      <label for="city_address"><?php _e('Post\'s City:', 'framework') ?></label>

      <input type="text" name="city_address" id="city_address" value="<?php echo $custom_four; ?>" />

    </fieldset>

    <fieldset>

      <label for="member_phone"><?php _e('Post\'s Phone Number:', 'framework') ?></label>

      <input type="text" name="member_phone" id="member_phone" value="<?php echo $custom_five; ?>" />

    </fieldset>

    <fieldset>

      <label for="member_url"><?php _e('Post\'s URL:', 'framework') ?></label>

      <input type="text" name="member_url" id="member_url" value="<?php echo $custom_six; ?>" />

    </fieldset>


    <fieldset>

        <?php wp_nonce_field( 'post_nonce', 'post_nonce_field' ); ?>

        <input type="hidden" name="submitted" id="submitted" value="true" />
        <button type="submit"><?php _e( 'Update Post', 'framework'); ?></button>

    </fieldset>

</form>


?>

<?php endwhile; endif; ?>
<?php wp_reset_query(); ?>

<?php get_footer();?>
