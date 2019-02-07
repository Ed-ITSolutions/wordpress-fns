<?php
function wordpress_fns_get_attachment_id_from_url($url){
  global $wpdb;

  // Get the attachment ids from the database
  $attachment = $wpdb->get_col(
    $wpdb->prepare(
      "SELECT ID FROM $wpdb->posts WHERE guid='%s';",
      $url
    )
  );

  // If found return the attacment
  if(count($attachment) != 0){
    return $attachment[0];
  }else{
    // Return false if not found.
    return false;
  }
}