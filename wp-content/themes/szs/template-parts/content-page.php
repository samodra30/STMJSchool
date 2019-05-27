<div class="row m-0">
  <div class="col-md-9 col-xs-12">
    <div class="blog-posts">
      <div class="row berita">
        <?php 
        if ( have_posts() ) : ?>
          <?php while ( have_posts() ) : the_post(); ?>
            <div class="col-12">
              <div class="search-result">
                <div class="row">
                  <?php 
                  if ( has_post_thumbnail() ) {
                    the_post_thumbnail('thumbnail', array('class' => 'mr-3'));
                  }
                  else {
                      echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) 
                          . '/assets/images/noimage.png" class="wp-post-image col-xs-12 col-md-4" />';
                  }
                  ?>
                  <div class="col-md-8 col-xs-12">
                    <a href="<?php the_permalink(); ?>" class="mt-0"><?php the_title(); ?></a>
                    <p class="post-desc"><i class="fa fa-calendar mr-2"></i> <?php echo ' '. get_the_date() ?></p>
                    <?php echo excerpt(20); ?>
                  </div>
                </div>
              </div>
            </div>
          <?php endwhile; ?>
          <div class="pagination">
            <?php
            paginate_link_function();
            ?>
          </div>
        <?php else : ?>

          <p class="text-center w-100">Sorry, but nothing matched your search terms. Please try again with some different keywords!</p>

        <?php endif; ?>
            
      </div>
    </div>
  </div>

  <div class="col-md-3 col-xs-12 relative">
    <?php get_template_part('template-parts/content', 'sidebar'); ?>
  </div>
</div>
