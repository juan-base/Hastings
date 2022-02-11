<?php
  include "../../../wp-load.php";

  function getIt($post) {
    global $hastings;

    $output = array(
      "args" => $_GET,
      "HTTP_HOST" => $_SERVER["HTTP_HOST"],
      "id" => $post->ID,
      "title" => $hastings->yoastVariableToTitle($post->ID),
      "url" => get_permalink($post->ID),
      "type" => $post->post_type,
    );

    //print "single-".$post->post_type."-page.php"; 

    ob_start();  
      setup_postdata($post);
      include "single-".$post->post_type."-page.php"; 
    $output["html"] = ob_get_clean();

    return $output;
  
  }

  $post_id = (int)$_GET["id"];
  $url = $_GET["url"];

  if ($post_id==0) {
    $post_id = $hastings->bwp_url_to_postid($url);
  }

  $post = wp_get_single_post($post_id);

  $result = getIt($post);

  header('Content-type: application/json');
  echo json_encode($result);
