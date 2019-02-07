<?php
function wordpress_fns_featured_image_at_size($pageId, $size){
  $attachmentURLS = wp_get_attachment_image_src(get_post_thumbnail_id($pageId), $size);
  $imageUrl = $attachmentURLS[0];

  if($imageUrl){
    return $imageUrl;
  }

  return false;
}