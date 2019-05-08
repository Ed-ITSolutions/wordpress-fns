<?php
function wordpress_fns_format_as_date($date){
  if(is_string($date)){
    return date(get_option('date_format'), strtotime($date));
  }else{
    return date(get_option('date_format'), $date);
  }
}