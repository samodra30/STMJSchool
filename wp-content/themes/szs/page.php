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
    <h2><?php the_title() ?></h2>
    <img src="<?php echo get_bloginfo('template_url') .'/assets/images/7.jpg' ?>" class="image-header">
  </div>

  <article>
    <?php the_content() ?>
  </article>
  
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