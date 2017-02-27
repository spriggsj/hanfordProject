<?php /* Template Name: Insert Posts */

$postTitleError = '';

if(isset($_POST['submitted']) && isset($_POST['post_nonce_field']) && wp_verify_nonce($_POST['post_nonce_field'], 'post_nonce')) {

	if(trim($_POST['postTitle']) === '') {
		$postTitleError = 'Please enter a title.';
		$hasError = true;
	} else {
		
	$post_information = array(
		'post_title' => esc_attr(strip_tags($_POST['postTitle'])),
		'post_content' => esc_attr(strip_tags($_POST['postContent'])),
		'post-type' => 'custom_post',
		'post_status' => 'pending'
	);
}
	$post_id = wp_insert_post($post_information);

	if($post_id)
	{

		// Update Custom Meta
		update_post_meta($post_id, 'vsip_custom_one', esc_attr(strip_tags($_POST['customMetaOne'])));
		update_post_meta($post_id, 'vsip_custom_two', esc_attr(strip_tags($_POST['customMetaTwo'])));

		// Redirect
		wp_redirect( home_url() ); exit;
	}

} ?>

<?php get_header(); ?>

	<!-- #primary BEGIN -->
	<div id="primary">

		<form action="" id="primaryPostForm" method="POST">

			<fieldset>

				<label for="postTitle"><?php _e('Post\'s Title:', 'framework') ?></label>

				<input type="text" name="postTitle" id="postTitle" value="<?php if(isset($_POST['postTitle'])) echo $_POST['postTitle'];?>" class="required" />

			</fieldset>

			<?php if($postTitleError != '') { ?>
				<span class="error"><?php echo $postTitleError; ?></span>
				<div class="clearfix"></div>
			<?php } ?>

			<fieldset>

				<label for="postContent"><?php _e('Post\'s Content:', 'framework') ?></label>

				<textarea name="postContent" id="postContent" rows="8" cols="30"><?php if(isset($_POST['postContent'])) { if(function_exists('stripslashes')) { echo stripslashes($_POST['postContent']); } else { echo $_POST['postContent']; } } ?></textarea>

			</fieldset>

			<fieldset>

				<label for="customMetaOne"><?php _e('Custom Meta One:', 'framework') ?></label>

				<input type="text" name="customMetaOne" id="customMetaOne" value="<?php if(isset($_POST['customMetaOne'])) echo $_POST['customMetaOne'];?>" />

			</fieldset>

			<fieldset>

				<label for="customMetaTwo"><?php _e('Custom Meta Two:', 'framework') ?></label>

				<input type="text" name="customMetaTwo" id="customMetaTwo" value="<?php if(isset($_POST['customMetaTwo'])) echo $_POST['customMetaTwo'];?>" />

			</fieldset>

			<fieldset>

				<?php wp_nonce_field('post_nonce', 'post_nonce_field'); ?>

				<input type="hidden" name="submitted" id="submitted" value="true" />
				<button type="submit"><?php _e('Add Post', 'framework') ?></button>

			</fieldset>

		</form>

	</div><!-- #primary END -->


<?php get_footer(); ?>
