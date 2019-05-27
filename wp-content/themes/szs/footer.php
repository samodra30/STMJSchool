   <div class="footer-wrapper">
     <div class="footer">
        <div class="row">
          <div class="col-md-3 col-xs-12">
            <img src="<?php echo get_theme_mod('menu_icon2', get_bloginfo('template_url') . '/assets/images/logo (1).png') ?>" alt="" class="img-fluid">
            <p class="footer-desc"><?php echo get_theme_mod('logo_desc') ?></p>
            <div class="icon">
              <a href="<?php echo get_theme_mod('facebook_link') ?>" id="facebook">
                <i class="fab fa-facebook"></i>
              </a>
              <a href="<?php echo get_theme_mod('twitter_link') ?>" id="twitter">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="<?php echo get_theme_mod('instagram_link') ?>" id="instagram">
                <i class="fab fa-instagram"></i>
              </a>
            </div>
          </div>
          <div class="col-md-3 col-xs-12">
            <p class="footer-title">Jurusan</p>
            <a href="#" class="footer-link"><span>&rsaquo;</span> Teknik Desain Pemodelan dan Informasi Bangunan</a>
            <a href="#" class="footer-link"><span>&rsaquo;</span> Teknik Bisnis Konstruksi dan Properti</a>
            <a href="#" class="footer-link"><span>&rsaquo;</span> Teknik Las</a>
            <a href="#" class="footer-link"><span>&rsaquo;</span> Teknik Pemesinan</a>
            <a href="#" class="footer-link"><span>&rsaquo;</span> Teknik Sepeda Motor</a>
            <a href="#" class="footer-link"><span>&rsaquo;</span> Teknik Elektronika Industri</a>
            <a href="#" class="footer-link"><span>&rsaquo;</span> Teknik Otomasi Industri</a>
            <a href="#" class="footer-link"><span>&rsaquo;</span> Rekayasa Perangkat Lunak</a>
          </div>
          <div class="col-md-3 col-xs-12">
            <p class="footer-title">Kontak Kami</p>
            <div class="footer-content">
              <p><i class="fas fa-phone"></i> (0352) 481236</p>
              <p><i class="fas fa-envelope"></i> smkn1jenpo@yahoo.co.id</p>
              <p><i class="fas fa-map-marker-alt"></i> Jl. Niken Gandini No.98, Setono, Kec. Ponorogo, Kabupaten Ponorogo, Jawa
                Timur 63492</p>
            </div>
          </div>
          <div class="col-md-3 col-xs-12">
            <p class="footer-title">Link Luar</p>
            <a href="#" class="footer-link"><span>&rsaquo;</span> Politeknik Elektronika Negeri Surabaya</a>
            <a href="#" class="footer-link"><span>&rsaquo;</span> AKN Ponorogo</a>
          </div>
        </div>
      </div>
  
      <footer>
        <p>&copy; 2019 <?php echo get_theme_mod('logo_title') ?></p>
        <p>Made with <i class="fa fa-heart"></i> by me</p>
      </footer>
   </div>


    <button type="button" id="backTop"><i class="fa fa-angle-up"></i></button>
    <!-- Modal Gallery -->
    <div class="modal-1">
      <button type="button" class="btn-modal" id="close">&times;</button>
      <button type="button" class="btn-modal" id="prev"><i class="fa fa-angle-left"></i></button>
      <button type="button" class="btn-modal" id="next"><i class="fa fa-angle-right"></i></button>
      <div class="box">
        <div class="box-image">
          <img alt="" class="img-modal img-fluid">
        </div>
      </div>
    </div>

    <?php wp_footer() ?>
  </body>  
</html>