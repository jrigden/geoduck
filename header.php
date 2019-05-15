<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>
  <?php wp_title(); ?> 
  </title>
  <?php wp_head(); ?>


  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">


  <link rel="stylesheet" href="https://use.typekit.net/pdu2jbr.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">



  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">



</head>

<body>
  <nav class="wrapper">
    <div class="left">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo('name'); ?></a>
    </div>
    <div class="right">
      <a href="<?php echo esc_url( home_url( '/subscribe' ) ); ?>">Subscribe</a>
    </div>
  </nav>
  <div class="main">
