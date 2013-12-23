<!DOCTYPE html>
<html <?php language_attributes( 'html' ); ?>>
<head>
<?php wp_head(); // Hook required for scripts, styles, and other <head> items. ?>
</head>

<body <?php body_class(); ?> <?php omega_attr( 'body' ); ?>>

<?php omega_do_atomic( 'before' ); // omega_before ?>

<div class="<?php echo omega_apply_atomic( 'site_container_class', 'site-container' );?>">

  <header id="header">
    <div class="wrap">

      <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Header')) :
      endif; ?>
      <?php omega_do_atomic( 'after_header' ); // omega_after_header ?>
    </div>
  </header>

      <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Subheader')) : ?>
  <div id="subheader">
    <div class="wrap">
    </div>
  </div>
<?php endif; ?>


  <div id="content-top">
    <div class="wrap clearfix">
      <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Content Top')) :
      endif; ?>
    </div>
  </div>


  <div class="site-inner">

    <?php omega_do_atomic( 'before_main' ); // omega_before_main ?>