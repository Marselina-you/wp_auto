<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="theme-color" content="#111111">
  <title>Auto</title>
<?php wp_head(); ?>
</head>
<body>
 <header class="header">
  <div class="container">
    <div class="header__top">
      <?php the_custom_logo(); ?>
      <a class="phone" href="<?php the_field('phone', 7 ); ?>"> 
     
      <?php the_field('phone', 7 ); ?>
        
      </a>
        
        
        
    </div>
    <div class="header__content">
      <h1 data-wow-delay=".5s" class="header__title wow animate__fadeInLeft">
        авто из сша «под ключ»
      </h1>
      <h2 data-wow-delay="1s" class="header__subtitle wow animate__fadeInLeft">
        ЗАКАЖИ СЕБЕ АВТО ИЗ США С ВЫГОДОЙ ДО 40%
      </h2>
      <p data-wow-delay="1.5s" class="header__text wow animate__fadeInLeft">
        Подбор, покупка, доставка, растаможка, ремонт, оформление по договору
      </p>
      <a class="button" href="#">КОНСУЛЬТАЦИЯ ЭКСПЕРТА</a>
      <div class="social header__social">
        <a class="social__link" href="#">
          <svg class="test" width="26" height="26">
            <use xlink:href="<?php bloginfo('template_url'); ?>/assets/img/icon/sprite.svg#instagram"></use>
          </svg>
        </a>
        <a class="social__link" href="#">
          <svg width="25" height="19">
            <use xlink:href="<?php bloginfo('template_url'); ?>/assets/img/icon/sprite.svg#telegram"></use>
          </svg>
        </a>
        <a class="social__link" href="#">
          <svg width="26" height="26">
            <use xlink:href="<?php bloginfo('template_url'); ?>/assets/img/icon/sprite.svg#whatsapp"></use>
          </svg>
        </a>
        <a class="social__link" href="#">
          <svg width="14" height="25">
            <use xlink:href="<?php bloginfo('template_url'); ?>/assets/img/icon/sprite.svg#facebook"></use>
          </svg>
        </a>
      </div>
      <img data-wow-delay="2s" class="header__img wow animate__fadeInUpBig" src="<?php bloginfo('template_url'); ?>/assets/img/ford-mustang.png"
        alt="ford mustang">
    </div>
  </div>
</header>
