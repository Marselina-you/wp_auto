<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="theme-color" content="#111111">
  <title>Head-rpivate</title>
<?php wp_head(); ?>
</head>
<body>
 <header class="header header-private">
  <div class="container">
    <div class="header__top">
      <?php the_custom_logo(); ?>
      <a class="phone" href="<?php the_field('phone', 7 ); ?>"> 
     
      <?php the_field('phone-number', 7 ); ?>
        
      </a>
        
        
        
    </div>
    
  </div>
</header>
