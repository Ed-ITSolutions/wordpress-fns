<?php
function wordpress_fns_get_page_sub_menu_items($menuName, $pageId){
  $locations = get_nav_menu_locations();
  $menu = wp_get_nav_menu_object($locations[$menuName]);
  $allMenuItems = wp_get_nav_menu_items($menu);
  $menuId = 0;

  // Return an empty array if no menu items could be found.
  if(empty($allMenuItems)){
    return array();
  }

  // Find the menu object ID for the current page.
  foreach($allMenuItems as $item){
    if($item->object_id == $pageId){
      $menuId = $item->ID;
    }
  }

  $items = array();

  foreach($allMenuItems as $item){
    if($item->menu_item_parent == $menuId){
      $items[] = $item;
    }
  }

  return $items;
}