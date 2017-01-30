<footer>
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-lg-12 socialmedia__icons">
            <div class="col-sm-3">
                <a href="https://www.facebook.com/TeamMahout/?fref=ts"><i class="fa fa-facebook" aria-hidden="true"><span>facebook</span></i></a>
            </div>
            <div class="col-sm-3">
              <a href="https://twitter.com/TeamMahout"><i class="fa fa-twitter" aria-hidden="true"><span>twitter</span></i></a>
            </div>
            <div class="col-sm-3">
              <a href="https://www.instagram.com/teammahout"><i class="fa fa-instagram" aria-hidden="true"><span>instagram</span></i></a>
            </div>
            <div class="col-sm-3">
              <a href="https://www.pinterest.com/"><i class="fa fa-pinterest" aria-hidden="true"><span>pinterest</span></i></a>
            </div>
      </div>
    </div>
    <hr>
  <div class="row">
    <div class="col-lg-12 ">
      <div class="col-sm-4 ">
        <h2>RSS FEED</h2>
        <p>Foggy Day Schedules</p>
        <p>Local Weather</p>
        <p>Local News</p>
        <p>Etc</p>
        <!-- <p><i class="fa fa-phone" aria-hidden="true"></i>559-589-4253</p>
        <p><i class="fa fa-envelope" aria-hidden="true"></i>teammahout@gmail.com<p>
        <p>
          &copy; <?php echo date("Y"); ?> team mahout.
        </p>
        <p> All rights reserved</p> -->

      </div>
      <div class="col-sm-4 ourstory">

        <?php
          $args = [
            'post_type' => 'post',
            'posts_per_page' => 1,
            'tax_query' => [
              'taxonomy' => 'category',
            ],
          ];
            $footer_query = new WP_Query($args);

            if($footer_query->have_posts()) : while($footer_query->have_posts()) : $footer_query->the_post();




          ?>


        <?php endwhile; endif; wp_reset_postdata(); ?>

        <h2>Open Editorials</h2>
        <ul>
          <?php wp_list_categories('title_li='); ?>
        </ul>
    
      </div>
      <div class="col-sm-3 mahout__footer__logo">
        <h2>Search</h2>
        <form action="index.php" method="post">
          <div id="custom-search-input">
            <div class="input-group">
              <input type="text" class="  search-query form-control" placeholder="Search" />
              <span class="input-group-btn">
                <button class="btn" type="button">
                  <span class="glyphicon glyphicon-search"></span>
                </button>
              </span>
            </div>
          </div>
          <input type="hidden" name="task"   value="search" />
          <input type="hidden" name="option" value="com_search" />
          <input type="hidden" name="Itemid" value="1" />
        </form>
        <!-- <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/whitelogo.svg"> -->
      </div>
    </div>

  </div>
  </div>








<?php wp_footer(); ?>


</footer>
