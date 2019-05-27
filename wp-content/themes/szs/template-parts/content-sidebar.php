<div class="related-post" id="related">
  <h5 class="mb-3">
    KATEGORI
  </h5>
  <?php
    $categories = get_categories( array(
        'orderby' => 'name',
        'order'   => 'ASC',
    ) );
    
    foreach( $categories as $category ) {
        $category_link = sprintf( 
            '<a href="%1$s" alt="%2$s" class="category-list"><i class="fa fa-angle-right"></i> %3$s</a>',
            esc_url( get_category_link( $category->term_id ) ),
            esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ),
            esc_html( $category->name )
        );
        
        echo sprintf( esc_html__( '%s', 'textdomain' ), $category_link );
    } ?>
</div>


<div class="sidebar-wrapper">
  <div class="related-post mt-4 search-bar">
    <form role="search" method="get" action="<?php echo site_url() ?>">
      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="basic-addon2" name="s">
        <div class="input-group-append">
          <button class="btn btn-primary" type="submit"><i class="fa fa-search"></i></button>
        </div>
      </div>
    </form>
  </div>

  <div class="related-post mt-4">
    <h5>
      BERITA TERBARU
    </h5>
    <div class="row">
      <?php
        $lastposts = get_posts( array(
            'posts_per_page' => 5
        ) );
        
        if ( $lastposts ) {
          foreach ( $lastposts as $post ) :
            setup_postdata( $post ); ?>
            <div class="col-12 mt-3">
              <div class="media">
                <?php 
                  if ( has_post_thumbnail() ) {
                    the_post_thumbnail('thumbnail', array('class' => 'mr-3'));
                  }
                  else {
                      echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) 
                          . '/assets/images/noimage.png" class="wp-post-image mr-3" />';
                  }
                ?>
                <div class="media-body">
                  <a href="<?php the_permalink(); ?>" class="mt-0"><?php the_title(); ?></a>
                  <p><?php echo get_the_date() ?></p>
                </div>
              </div>
            </div>
            <?php
          endforeach; 
          wp_reset_postdata();
        }
      ?>
    </div>
  </div>
</div>