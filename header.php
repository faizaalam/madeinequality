<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package madeinequality
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Made in Equality</title>
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/foundation.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/app.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.2.1/foundation.min.js" charset="utf-8"></script>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <div class="top-bar">
    <div class="top-bar-left">
      <ul class="dropdown menu" data-dropdown-menu>
        <li class="menu-text">Site Title</li>
        <li role="menuitem" class="is-dropdown-submenu-parent opens-right" aria-haspopup="true" aria-expanded="false" aria-label="One" data-is-click="false">
          <a href="#" tabindex="0">One</a>
          <ul class="menu vertical submenu is-dropdown-submenu first-sub" data-submenu="" aria-hidden="true" role="menu">
            <li role="menuitem" class="is-submenu-item is-dropdown-submenu-item"><a href="#">One</a></li>
            <li role="menuitem" class="is-submenu-item is-dropdown-submenu-item"><a href="#">Two</a></li>
            <li role="menuitem" class="is-submenu-item is-dropdown-submenu-item"><a href="#">Three</a></li>
          </ul>
        </li>
        <li><a href="#">Two</a></li>
        <li><a href="#">Three</a></li>
      </ul>
    </div>
    <div class="top-bar-right">
      <ul class="menu">
        <li><input type="search" placeholder="Search"></li>
        <li><button type="button" class="button">Search</button></li>
      </ul>
    </div>
  </div>
