<?php get_header() ?>
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

<div class="section profil" id="profil">
  <div class="row">
    <div class="d-flex justify-content-center profil-image-1">
      <img src="<?php echo get_theme_mod('profile_image',  get_template_directory_uri(). '/assets/images/logo.smk.jenangan.png') ?>" alt="" class="img-profile">
    </div>
    <div class="col-md-7 col-xs-12 border-1 p-3 px-4 text-right">
      <div class="section-title">
        <h2>Profil</h2>
        <h3><?php echo get_theme_mod('profile_title') ?></h3>
      </div>
      <p>
        <?php echo get_theme_mod('profile_desc') ?>
      </p>
    </div>
    <div class="col-md-5 col-xs-12 d-flex align-items-center justify-content-center profil-image-2">
      <img src="<?php echo get_theme_mod('profile_image',  get_template_directory_uri(). '/assets/images/logo.smk.jenangan.png') ?>" alt="" class="img-profile">
    </div>
  </div>
</div>

<div class="section jurusan bg-blue">
  <div class="overlay-1"></div>
  <div class="row">
    <div class="col-12 mb-5">
      <div class="title">
        <h2 class="text-white">PROGRAM <span class="title-span">STUDI</span></h2>
      </div>
    </div>
  </div>
  <div class="row icon">
    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="card-1 gambar">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blueprint.svg" alt="" class="img-icon">
        <h5>Teknik Desain Pemodelan dan Informasi Bangunan</h5>
      </div>
    </div>
    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="card-1 kayu">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hammering.svg" alt="" class="img-icon">
        <h5>Teknik Bisnis Konstruksi dan Properti</h5>
      </div>
    </div>
    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="card-1 welding">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/welder.svg" alt="" class="img-icon">
        <h5>Teknik Las</h5>
      </div>
    </div>
    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="card-1 mesin">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/manufacture.svg" alt="" class="img-icon">
        <h5>Teknik Pemesinan</h5>
      </div>
    </div>
  </div>
  <div class="row icon pt-5">
    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="card-1 sepeda">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/car-parts.svg" alt="" class="img-icon">
        <h5>Teknik Sepeda Motor</h5>
      </div>
    </div>
    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="card-1 elektro">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/artificial-intelligence.svg" alt="" class="img-icon">
        <h5>Teknik Elektronika Industri</h5>
      </div>
    </div>
    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="card-1 otomasi">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/control-panel.svg" alt="" class="img-icon">
        <h5>Teknik Otomasi Industri</h5>
      </div>
    </div>
    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="card-1 rekayasa">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/data.svg" alt="" class="img-icon">
        <h5>Rekayasa Perangkat Lunak</h5>
      </div>
    </div>
  </div>
</div>
<div class="section">
      <div class="row">
        <!-- Berita -->
        <div class="col-md-7 col-xs-12">
          <div class="title-2"><i class="fa fa-newspaper text-blue"></i> BERITA <span class="title-span">TERBARU</span></div>
          <div class="row berita">
          <?php
          $lastposts = get_posts( array(
              'posts_per_page' => 3
          ) );
          
          if ( $lastposts ) {
            foreach ( $lastposts as $post ) :
              setup_postdata( $post ); ?>
              <div class="col-12">
                <div class="media">
                  
                  <?php the_post_thumbnail('thumbnail', array('class' => 'mr-3')) ?>
                  <div class="media-body">
                    <a href="<?php the_permalink(); ?>" class="mt-0"><?php the_title(); ?></a>
                    <p class="post-desc"><i class="fa fa-calendar mr-2"></i> <?php echo ' '. get_the_date() ?></p>
                    <?php echo excerpt(20); ?>
                  </div>
                </div>
              </div>
              <?php
              endforeach; 
              wp_reset_postdata();
          }
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
        <!-- Agenda -->
        <div class="col-md-4 col-xs-12 offset-md-1 mt-xs-4">
          <div class="title-2"><i class="fa fa-calendar-alt text-blue"></i> AGENDA <span class="title-span">TERDEKAT</span></div>
          <div class="row agenda">
            <?php
            global $wpdb;
            $result = $wpdb->get_results("SELECT *, date_format(schedule_date, '%M') as bulan, date_format(schedule_date, '%d') as tanggal FROM `wp_schedule` WHERE schedule_date > NOW() ORDER BY schedule_date ASC LIMIT 5 ");
            foreach($result as $r) {
              ?>
              <div class="col-12">
                <div class="d-flex">
                  <div class="agenda-tgl">
                    <h2><?php echo $r->tanggal ?></h2>
                    <p class="m-0"><?php echo $r->bulan ?></p>
                  </div>
                  <div class="agenda-title">
                    <a href="#"><?php echo $r->schedule_name ?></a>
                  </div>
              
                </div>
              </div>
              <?php
            }
            
            ?>
            
          </div>
        </div>
      </div>
    </div>

    <!-- Gallery Section -->
    <div class="section bg-gray">
      <div class="row">
        <div class="col-12 mb-5">
          <div class="title">
            <h2 class="text-white"><span class="title-span">GALLERY</span></h2>
          </div>
        </div>
      </div>
      <div class="gallery">
        <div class="img-gallery">
          <div class="overlay"><i class="fa fa-eye"></i></div>
          <img src="<?php echo get_template_directory_uri() ?>/assets/images/gallery-1.jpg" class="img-gallery-1">
        </div>
        <div class="img-gallery">
          <div class="overlay"><i class="fa fa-eye"></i></div>
          <img src="<?php echo get_template_directory_uri() ?>/assets/images/gallery-2.jpg" class="img-gallery-1">
        </div>
        <div class="img-gallery">
          <div class="overlay"><i class="fa fa-eye"></i></div>
          <img src="<?php echo get_template_directory_uri() ?>/assets/images/gallery-3.jpg" class="img-gallery-1">
        </div>
        <div class="img-gallery">
          <div class="overlay"><i class="fa fa-eye"></i></div>
          <img src="<?php echo get_template_directory_uri() ?>/assets/images/gallery-4.jpg" class="img-gallery-1">
        </div>
        <div class="img-gallery">
          <div class="overlay"><i class="fa fa-eye"></i></div>
          <img src="<?php echo get_template_directory_uri() ?>/assets/images/gallery-5.jpg" class="img-gallery-1">
        </div>
        <div class="img-gallery">
          <div class="overlay"><i class="fa fa-eye"></i></div>
          <img src="<?php echo get_template_directory_uri() ?>/assets/images/gallery-6.jpg" class="img-gallery-1">
        </div>
        <div class="img-gallery">
          <div class="overlay"><i class="fa fa-eye"></i></div>
          <img src="<?php echo get_template_directory_uri() ?>/assets/images/gallery-7.jpg" class="img-gallery-1">
        </div>
        <div class="img-gallery">
          <div class="overlay"><i class="fa fa-eye"></i></div>
          <img src="<?php echo get_template_directory_uri() ?>/assets/images/gallery-8.jpg" class="img-gallery-1">
        </div>
      </div>
    </div>

  
  <?php get_footer() ?>
<script src="<?php echo get_template_directory_uri() ?>/assets/js/scroll.js"></script>