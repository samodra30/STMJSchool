<?php
/**
* Template Name: Full Width Page
*
*/
get_header();

if (have_posts()) :
  while ( have_posts() ) :
    the_post();
?>

<div class="full-container-page">
  <div class="wrapper-header w-100">
    <div class="post-title">
      <h2><?php the_title() ?></h2>
      <p><img src="<?php echo get_avatar_url(get_the_author_id()); ?>"> <?php the_date() ?> &bull; <?php the_author() ?></p>
      
    </div>
    <img src="<?php echo get_bloginfo('template_url') .'/assets/images/7.jpg' ?>" class="image-header">
  </div>
  
  <div class="row m-0">
    <div class="col-md-9 col-xs-12">
      <article>
        <?php the_content() ?>
      </article>
    </div>
    <div class="col-md-3 col-xs-12 relative">
      <?php get_template_part('template-parts/content', 'sidebar'); ?>
    </div>
  </div>
  
</div>
  
<?php endwhile; // End of the loop.
  
else :
  echo '<p>No content found.</p>';
endif;
?>


<?php get_footer() ?>
<script>
  $('.navb').addClass('bg-white').removeClass('top');
</script>