<footer class="page-footer">
  <div class="page-footer__logo">
  <?php
   $logo_img = '';
   if( $custom_logo_id = get_theme_mod('custom_logo') ){
     $logo_img = wp_get_attachment_image( $custom_logo_id, array(45, 35), false);
   }
   echo $logo_img;
    ?>
</div>
  <nav class="page-footer__nav">
  <?php
    wp_nav_menu( [
      'menu'            => 'Меню футер левое',
      'container'       => false,
      'menu_class'      => 'page-footer__nav-list',
      'echo'            => true,
      'fallback_cb'     => 'wp_page_menu',
      'items_wrap'      => '<ul class="page-footer__nav-list page-footer__nav-list--left-list">%3$s</ul>',
      'depth'           => 1
    ] );
  ?>
  <?php
    wp_nav_menu( [
      'menu'            => 'Меню футер правое',
      'container'       => false,
      'menu_class'      => 'page-footer__nav-list',
      'echo'            => true,
      'fallback_cb'     => 'wp_page_menu',
      'items_wrap'      => '<ul class="page-footer__nav-list">%3$s</ul>',
      'depth'           => 1,
    ] );
  ?>
  </nav>
  <ul class="page-footer__social">
    <?php
        $social_items = get_field('ssylki_na_soczialnye_seti', 'option');
        foreach($social_items as $social_item) {
      ?>
      <li class="page-header__social-item">
        <a href="<?=$social_item['ssylka_na_soczialnuyu_set'] ?>" class="page-footer__social-link">
          <?php
            $image = $social_item['alternativnaya_ikonka_soczialnoj_seti'];
            if (!empty($image)) : ?>
              <img
                src="<?php echo $image['url']; ?>"
                alt="<?php echo $image['alt']; ?>"
                width="<?php echo $image['width']; ?>"
                height="<?php echo $image['height']; ?>"
              >
          <?php endif; ?>
        </a>
      </li>
      <?php }?>
  </ul>
  <a href="https://t-code.ru/" class="page-footer__copyright">
    <span>Разработка</span>
    <picture>
      <source srcset="<?php echo bloginfo('template_url');?>/assets/images/static/dev-logo.webp">
      <img src="<?php echo bloginfo('template_url');?>/assets/images/static/dev-logo.png" alt="true.code" width="69" height="14">
    </picture>
  </a>
</footer>
