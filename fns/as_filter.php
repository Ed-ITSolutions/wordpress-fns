<?php
function wordpress_fns_as_filter($functionName, $priority = 10, $args = 1){
  add_filter($functionName, $functionName, $priority, $args);
}