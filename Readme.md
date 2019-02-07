# WordPress Fns

A collection of functions to help with WordPress theme & plugin development.

# Install

Install from Composer:

```bash
composer require ed-itsolutions/wordpress-fns
```

Then add `require('vendor/autoload.php');` to the top of your `functions.php`.

# Functions

## wordpress_fns_as_filter($functionName, $priority = 10, $args = 1)

Adds the named function `$functionName` as a filter with the same name.

## wordpress_fns_featured_image_at_size($postId, $imageSize)

Returns the given posts `$postId` featured image at size `$imageSize`.

Returns `false` if the post does not have a featured image.

## wordpress_fns_get_attachment_id_from_url($url)

Returns the id of the attachment from the url. Extremely useful when working with meta boxes etc... that store an images URL instead of its attachment id.

Returns `false` if no attachment could be found.

## wordpress_fns_get_page_sub_menu_items($pageId, $menuName)

Returns an array of menu items that are the direct desendants of the supplied page `$pageId` on the menu `$menuName`.

Returns an empty array if it couldn't find the menu item for the supplied page.

## wordpress_fns_header_or_featured_image($imageSize)

If the page has a featured image that image at the given size `$imageSize` will be returned, otherwise it returns the header image set in the customizer.

# Contributing

We welcome PRs to this project. If you have a function or improvement feel free to add them.

We ask that:

 - All functions be prefixed with `wordpress_fns_`.
 - All functions return `false` instead of throwing an error or null.
 - Don't add actions or filters, if users want to use a function as a filter they can do it themselves.