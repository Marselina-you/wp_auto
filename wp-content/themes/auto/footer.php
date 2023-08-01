<footer class="footer">
  <div class="container">
    <div class="footer__inner">
    <?php the_custom_logo(); ?>

      <div class="social footer__social">
        <a class="social__link" href="<?php the_field('instagram-link', 7);?>">
          <img class="social__img" src="<?php bloginfo('template_url'); ?>/assets/img/icon/instagram.svg" alt="instagram icon">
        </a>
        <a class="social__link" href="<?php the_field('telegram-link', 7);?>">
          <img class="social__img" src="<?php bloginfo('template_url'); ?>/assets/img/icon/telegram.svg" alt="telegram icon">
        </a>
        <a class="social__link" href="<?php the_field('what-link', 7);?>">
          <img class="social__img" src="<?php bloginfo('template_url'); ?>/assets/img/icon/whatsapp.svg" alt="whatsapp icon">
        </a>
        <a class="social__link" href="<?php the_field('face-link', 7);?>">
          <img class="social__img" src="<?php bloginfo('template_url'); ?>/assets/img/icon/facebook.svg" alt="facebook icon">
        </a>
      </div>

      <a class="footer__copy" href="#">
        Политика конфиденциальности
      </a>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>