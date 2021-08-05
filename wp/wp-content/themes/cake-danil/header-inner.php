
<header class="page-header page-header--internal-page">
  <div class="page-header__logo">
  <?php the_custom_logo() ?>
  </div>
  <div class="page-header__menu" id="menu">
    <button class="page-header__menu-toggle" id="toggle">
      <span></span>
    </button>
    <div class="page-header__menu-wrapper">
      <nav class="page-header__nav">
      <?php
        wp_nav_menu( [
          'menu'            => 'Главное меню левое',
          'container'       => false,
          'menu_class'      => 'page-header__nav-list',
          'echo'            => true,
          'fallback_cb'     => 'wp_page_menu',
          'items_wrap'      => '<ul class="page-header__nav-list">%3$s</ul>',
          'depth'           => 1
        ] );
      ?>
      <?php
        wp_nav_menu( [
          'menu'            => 'Главное меню правое',
          'container'       => false,
          'menu_class'      => 'page-header__nav-list',
          'echo'            => true,
          'fallback_cb'     => 'wp_page_menu',
          'items_wrap'      => '<ul class="page-header__nav-list page-header__nav-list--right-list">%3$s</ul>',
          'depth'           => 1,
        ] );
      ?>
      </nav>
      <ul class="page-header__social">
        <?php
          $social_items = get_field('ssylki_na_soczialnye_seti', 'option');
          foreach($social_items as $social_item) {
        ?>
        <li class="page-header__social-item">
          <a href="<?=$social_item['ssylka_na_soczialnuyu_set'] ?>" class="page-header__social-link">
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
    </div>
  </div>
</header>
