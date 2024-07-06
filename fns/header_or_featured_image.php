<?php
function wordpress_fns_header_or_featured_image($imageSize, $postId = 0){
  if($postId === 0){
    $postId = get_the_id();
  }

  if(get_the_post_thumbnail($postId, $size = $imageSize)){
    $attachmentImageSrc = wp_get_attachment_image_src(get_post_thumbnail_id($postId), $imageSize);
    return $attachmentImageSrc[0];
  }
  
  return get_header_image();
}