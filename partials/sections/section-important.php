<section class="important">
  <div class="container">
    <h2>Important</h2>
    <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-4">
    
    <?php	global $post;

    $popular_posts_list = new WP_Query( [
      'topic' => 'important'
    ] );

    $popular_posts_list -> post_count = 4;
    
    if ( $popular_posts_list-> have_posts() ) {
      while ( $popular_posts_list -> have_posts() ) {
        $popular_posts_list -> the_post(); ?>

      <div class="col mb-4">
        <div class="card h-100">
          <a href="<?php the_permalink(); ?>" class="card-permalink">
          <?php echo has_post_thumbnail()
            ? '<img src="' . esc_url(get_the_post_thumbnail_url() ) . '" alt="' . get_the_title() . '" class="card-thumb">'
            : '<img src="'. esc_url( get_stylesheet_directory_uri() ) . '/assets/images/img-not-found.jpg" alt="image is not found" class="card-thumb"/>' ?>
          </a>
          <div class="card-body">
            <small>
              <span>
                <strong>Category: </strong>
                <?php $categories = get_the_category();

                foreach ($categories as $category) {
                  printf(
                    '<a href="%s" class="category-link %s">%s</a>%s',
                    esc_url( get_category_link( $category )),
                    esc_html( $category -> slug ),
                    esc_html( $category -> name ),
                    $category == end($categories) ? '' : '<span>, </span>'
                  );
                } ?>
              </span>
            </small>
            <h3 class="card-title">
              <?php echo '<a href="' . esc_url(get_permalink()) . '">' . get_the_title() . '</a>'; ?>
            </h3>
            <?php the_tags( '<small class="tag-list">#', ', #', '</small>'); ?>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    <?php 
        }
      } else {
        ?><p>There are no posts</p><?php 
      }
      
      wp_reset_postdata();
    ?>
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->
</section>
<!-- /.important -->