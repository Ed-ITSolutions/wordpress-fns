<?php
function wordpress_fns_header_or_featured_image($imageSize){
  if(get_the_post_thumbnail(null, $size = $imageSize)){
    $attachmentImageSrc = wp_get_attachment_image_src(get_post_thumbnail_id(), $imageSize);
    return $attachmentImageSrc[0];
  }
  
  return get_header_image();
}