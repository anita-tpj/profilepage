<?php
//Get Custom term links for blog-post meta
function tap_get_terms($postid, $term){
  $output = '';
  $terms_list = wp_get_post_terms($postid, $term);
  $i = 0;
  foreach($terms_list as $term){
    $i++;
    if($i > 1){ $output .= ', ';}
    $output .= '<a href="' . get_term_link($term) . '">' . $term->name . '</a>';
  }
  return $output;
}

// Excerpt Length Control
function tap_set_excerpt_length(){
  return 45;
}
// Excerpt Link
function tap_new_excerpt_more( $more ) {
	return ' <a class="read-more" href="'. get_permalink( get_the_ID() ) . '">' . __('Read More', 'profilepage') . '</a>';
}

//Remove meta tag about WP Version in HEADER
function tap_remove_version(){
  return '';
}
