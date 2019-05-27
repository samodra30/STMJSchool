<?php 

get_header();
  ?>
  <div class="full-container-page">
    <div class="wrapper-header w-100">
      <div class="post-title">
        <h2>Search for : "<?php the_search_query(); ?>"</h2>
        
      </div>
      <img src="<?php echo get_bloginfo('template_url') .'/assets/images/7.jpg' ?>" class="image-header">
    </div>

    <?php get_template_part( 'template-parts/content', 'page' );  ?>
  </div>
  <?php
get_footer();
?>
<script src="<?php echo get_template_directory_uri() ?>/assets/js/scroll.js"></script>