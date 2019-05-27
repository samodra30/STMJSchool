<?php

function search_filter($query) {
  if ( !is_admin() && $query->is_main_query() ) {
    // if ($query->is_search) {
      $query->set('paged', ( get_query_var('paged') ) ? get_query_var('paged') : 1 );
      $query->set('posts_per_page',5);
    // }
  }
}

add_action( 'pre_get_posts', 'search_filter', 1 );

function paginate_link_function(){
  global $wp_query;

  $big = 999999999; // need an unlikely integer
  
  echo paginate_links( array(
      'base'    => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
      'format'  => '?paged=%#%',
      'current' => max( 1, get_query_var('paged') ),
      'total'   => $wp_query->max_num_pages
  ) );
}