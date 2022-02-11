<?php
  $result = array();
  $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );

  //print "<pre>";print_r($term);print "</pre>";
  $result["term"] = $term;
  

  $items = array();
  while ( have_posts() ): the_post();
    $items[] = $post->ID;
  endwhile;
  //print "<pre>";print_r($items);print "</pre>";
  $result["items"] = $items;

  header('Content-type: application/json');
  echo json_encode($result);