

<?php locate_template("head.php", true); ?>

<body>

  <?php get_header("main");?>

  <main>
    <h1 class="visually-hidden"><?php bloginfo('description')?></h1>
    <section class="hero-block container">
      <div class="hero-block__hero-image-wrapper">
      <?php
          $image = get_field('izobrazhenie');
          if (!empty($image)) : ?>
          <img
            src="<?php echo $image['url']; ?>"
            alt="<?php echo $image['alt']; ?>"
            width="<?php echo $image['width']; ?>"
            height="<?php echo $image['height']; ?>"
          >
        <?php endif; ?>
      </div>
      <p class="hero-block__text"><?php the_field('nadpis') ?></p>
      <div class="hero-block__big-logo-wrapper">
        <?php
          $image = get_field('dopolnitelnoe_izobrazhenie');
          if (!empty($image)) : ?>
            <img
              src="<?php echo $image['url']; ?>"
              alt="<?php echo $image['alt']; ?>"
              width="<?php echo $image['width']; ?>"
              height="<?php echo $image['height']; ?>"
            >
        <?php endif; ?>
      </div>
    </section>

    <section class="info-block">
      <p class="info-block__text">
      <?php the_field('text') ?>
      </p>
      <a href="<?php the_field('ssylka') ?>" class="info-block__button">
        читать далее
      </a>
    </section>

    <section class="flying-cakes-block container">
      <h2 class="visually-hidden">Тортики</h2>
      <ul class="flying-cakes-block__list">
        <?php
          // параметры по умолчанию
          $posts = get_posts( array(
            'numberposts' => 5,
            'category_name'    => 'flying-cakes',
            'orderby'     => 'date',
            'order'       => 'ASC',
            'post_type'   => 'post',
            'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
          ) );

          foreach( $posts as $post ){
            setup_postdata($post);
        ?>

        <li class="flying-cakes-block__list-item">
          <a href="#" class="flying-cakes-block__link">
            <div class="flying-cakes-block__image-wrapper">
              <?php
                $image = get_field('flying-cake-image');
                if (!empty($image)) : ?>
                <img
                  src="<?php echo $image['url']; ?>"
                  alt="<?php echo $image['alt']; ?>"
                  width="<?php echo $image['width']; ?>"
                  height="<?php echo $image['height']; ?>"
                >
              <?php endif; ?>
            </div>
            <div class="flying-cakes-block__info-popup">
              <h3><?php the_field('flying-cake-title'); ?></h3>
              <p><?php the_field('flying-cake-description'); ?></p>
              <span><?php the_field('flying-cake-weight'); ?>&#160;г</span>
              <span><?php the_field('flying-cake-price'); ?>&#160;&#8381;</span>
            </div>
          </a>
        </li>

        <?php
          }

          wp_reset_postdata(); // сброс
        ?>

      </ul>
    </section>

    <section class="features container">
      <h2 class="visually-hidden">Преимущества</h2>
      <ul class="features__list">
        <?php
         $features = get_field('features');
         foreach($features as $feature) {
        ?>
        <li class="features__list-item features__list-item--cake">
          <div class="features__image-wrapper">
          <?php
              $image = $feature['feature_image'];
              if (!empty($image)) : ?>
              <img
                src="<?php echo $image['url']; ?>"
                alt="<?php echo $image['alt']; ?>"
                width="<?php echo $image['width']; ?>"
                height="<?php echo $image['height']; ?>"
              >
            <?php endif; ?>
          </div>
          <p class="features__title"><?= $feature['feature_title']; ?></p>
          <p class="features__text"><?= $feature['feature_text'];; ?></p>
        </li>

        <?php } ?>
      </ul>
    </section>

    <section class="swiper-container">
      <ul class="swiper-wrapper">
        <?php
          $slides = get_field('slider');
          foreach($slides as $slide) {
        ?>
          <li class="swiper-slide">
            <?php
              $image = $slide['slide'];
              if (!empty($image)) : ?>
              <img
                src="<?= $image['url']; ?>"
                alt="<?= $image['alt']; ?>"
                width="945"
                height="450"
              >
            <?php endif; ?>
          </li>
        <?php } ?>

      </ul>
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
      <div class="swiper-pagination">
      </div>
    </section>

    <section class="contacts container">
      <h2 class="contacts__title">Контакты</h2>
      <div class="contacts__wrapper">
        <div class="contacts__info-block">
          <div class="contacts__info-block-wrapper">
            <p class="contacts__info-block-section">
            <?php the_field('address', 'option'); ?>
            </p>
            <p class="contacts__info-block-section">
              <span>
                телефон:
              </span>
              <?php the_field('telefon', 'option'); ?>
            </p>
            <p class="contacts__info-block-section">
              <span>email:</span>
              <?php the_field('elektronnaya_pochta', 'option'); ?>
            </p>

            <div class="contacts__info-block-section">
              <span>Мы в социальных сетях:</span>
              <ul class="contacts__social-links-wrapper">
                <?php
                  $social_items = get_field('ssylki_na_soczialnye_seti', 'option');
                  foreach($social_items as $social_item) {
                ?>
                <li>
                  <a href="<?=$social_item['ssylka_na_soczialnuyu_set'] ?>" class="contacts__social-link">
                    <?php
                      $image = $social_item['ikonka_soczialnoj_seti'];
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
        </div>
        <div class="contacts__map-wrapper">
          <picture>
            <source srcset="<?php echo bloginfo('template_url');?>/assets/images/static/map.webp">
            <img src="<?php echo bloginfo('template_url');?>/assets/images/static/map.webp" alt="Карта" width="1515" height="490">
          </picture>
          <div class="contacts__map" id="map-container"></div>
        </div>
      </div>
    </section>
  </main>

  <?php get_footer(); ?>
  <?php locate_template("scripts.php", true); ?>

</body>
