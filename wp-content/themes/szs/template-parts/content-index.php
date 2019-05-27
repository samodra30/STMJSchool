
<header>
  <div class="carousel slide" id="carouselExample" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExample" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExample" data-slide-to="1"></li>
      <li data-target="#carouselExample" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/7.jpg" alt="" class="d-block w-100 h-100">
        <div class="carousel-content">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.smk.jenangan.png" alt="">
          <div>
            <h2 class="carousel-title"><?php echo get_theme_mod('logo_title', 'SMKN 1 Jenangan') ?></h2>
            <p><?php echo get_theme_mod('logo_desc') ?></p>

          </div>
          <a href="#profil" class="button btn-white round btn-down"><i class="fa fa-arrow-down"></i></a>
        </div>
      </div>
      <div class="carousel-item">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/18-2.png" alt="" class="d-block w-100 h-100">
      </div>
      <div class="carousel-item">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/45-16.png" alt="" class="d-block w-100 h-100">
      </div>
    </div>
    <a href="#carouselExample" class="carousel-control-prev" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a href="#carouselExample" class="carousel-control-next" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</header>



<div class="section">
  <div class="row">
    <!-- Berita -->
    <div class="col-md-7 col-xs-12">
      <div class="title-2"><i class="fa fa-newspaper text-blue"></i> BERITA <span class="title-span">TERBARU</span></div>
      <div class="row berita">
      <?php
      
      if ( have_posts() ) :
        while ( have_posts() ) : the_post(); 
         ?>
          <div class="col-12">
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
                <p class="post-desc"><i class="fa fa-calendar mr-2"></i> <?php echo ' '. get_the_date() ?></p>
                <?php echo excerpt(20); ?>
              </div>
            </div>
          </div>
          <?php
                endwhile;
      else : 
        echo 'No post.';
      endif;
      ?>
        

      
      </div>

      <div class="row mt-5">
        <div class="col-12 center">
          <a href="#" class="btn-all">
            Lihat semua berita <i class="fa fa-angle-right"></i>
          </a>
        </div>
      </div>
    </div>

  </div>
</div>
