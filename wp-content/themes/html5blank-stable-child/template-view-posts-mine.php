

<?php /* Template Name: View Posts mine  */ get_header(); ?>
<?php
$query = new WP_Query( array(
    'post_type' => 'custom_post',
    'posts_per_page' => '-1',
    'post_status' => array(
        'publish',
        'pending',
        'draft',
        'private',
        'trash'
    )
) );
?>
<?php  //post vs custom_post
$edit_posts = add_query_arg( 'post', get_the_ID(), get_permalink( 61 + $_POST['_wp_http_referer'] ) );
?>

<table>

    <tr>
        <th>Post Title</th>
        <th>Post Excerpt</th>
        <th>Post Status</th>
        <th>Actions</th>
    </tr>
    <?php
    if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

    <tr>
      <td><?php echo get_the_title(); ?></td>
      <td><?php the_excerpt(); ?></td>
      <td><?php echo get_post_status( get_the_ID() ) ?></td>
      <td><a href="<?php echo $edit_posts; ?>">Edit</a><a href="#">Delete</a></td>
    </tr>

    <?php endwhile; endif; ?>



</table>











<?php get_footer();?>
