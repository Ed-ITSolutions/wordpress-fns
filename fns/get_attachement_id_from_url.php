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
    if(strpos($url, '-scaled') !== false){
      // Try again without -scaled
      return wordpress_fns_get_attachment_id_from_url(str_replace('-scaled', '', $url));
    }

    // Return false if not found.
    return false;
  }
}