<!DOCTYPE html>

<html <?php language_attributes(); ?>>

  <head>
    <!-- WordPress does the work for us in setting our character values -->
    <meta charset = "<?php bloginfo('charset'); ?>">
    <!-- Make our site responsive using WordPress -->
    <meta name = "viewport" content = "width=device - width">
    <title> <?php bloginfo('name'); ?> </title>
    <?php wp_head(); ?>

  </head>

<body <?php body_class(); ?>>

  <div class = "container">
    <!-- Site header -->
    <header class = "site-header">
      <h1> <a href = "<?php echo home_url(); ?>"> <?php bloginfo('name'); ?> </a></h1>
      <h5> <?php bloginfo('description'); ?> </h5>

      <nav class = "site-nav clearfix">
        <?php
          $args = array(
            'theme_location' => 'primary'
          );

        ?>

        <?php wp_nav_menu( $args ); ?>
      </nav>

    </header> <!-- Site Header -->
