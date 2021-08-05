<?php locate_template("head.php", true); ?>

<body>
  <?php get_header("inner");?>
  <main class="menu__main">
    <h1 class="menu__title page-title"><?php the_title() ?></h1>
    <div class="menu__bread-crumbs bread-crumbs">
      <?php
        if(function_exists('bcn_display'))
          {
              bcn_display();
          }
      ?>
    </div>
    <a href="http://www.cake-danil" class="product__go-back-link go-back-link">Назад на главную</a>
    <div class="product__wrapper">
      <div class="menu-list _active" id="menu-list">
        <button class="menu-list__toggle" id="menu-list-toggle">Меню кафе</button>
        <ul class="menu-list__list">
          <?php
            $menu_category = get_terms('products_menu');
            foreach($menu_category as $category) {
              $category_link = get_term_link($category->term_id, 'products_menu');
          ?>
            <li class="menu-list__item">
            <a href="<?= $category_link ?>" class="menu-list__link">
              <?= $category->name ?>
            </a>
            <p class="menu-list__text"><?= $category->description ?></p>
          </li>
          <?php
            }
          ?>
        </ul>
      </div>

      <div class="product__inner-wrapper">
        <div class="product__current-product">
          <div class="product-card product-card--current">
            <div class="product-card__wrapper">
              <div class="product-card__image-wrapper">
                <?php
                  $image = get_field('product_image');
                  if (!empty($image)) : ?>
                    <img
                      src="<?php echo $image['url']; ?>"
                      alt="<?php echo $image['alt']; ?>"
                      width="360"
                      height="285"
                    >
                  <?php endif; ?>
              </div>
              <div class="product-card__info-block">
                <div>
                  <p class="product-card__info"><?php the_field('product_description') ?></p>
                </div>
                <div class="product-card__price-info">
                  <span class="product-card__quantity"><?php the_field('product_weight') ?> г.</span>
                  <span class="product-card__price"><?php the_field('product_price') ?>&#160;&#8381;</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="product__recomended">
          <h2 class="product_subtitle">Рекомендуем</h2>
          <ul class="product__recomended-list">
            <?php
              $default_category = get_terms('products_menu')[1];
              $query = new WP_Query( array(
                'post_type' => array( 'product' ),
                'posts_per_page'   => 4,
                "orderby" => "rand",
                'tax_query' => array(
                  array(
                    'taxonomy' => 'products_menu',
                    'field'    => 'slug',
                    'terms'    => $default_category
                  )
                )
              ));

            if ( $query->have_posts() ) : ?>
              <?php while ( $query->have_posts() ) : $query->the_post(); ?>

              <li class="product-card product-card--hover-effect">
                <a href="<?= the_permalink() ?>" class="product-card__wrapper">
                  <div class="product-card__image-wrapper">
                    <?php
                      $image = get_field('product_image');
                      if (!empty($image)) : ?>
                      <img
                        src="<?php echo $image['url']; ?>"
                        alt="<?php echo $image['alt']; ?>"
                        width="360"
                        height="285"
                      >
                    <?php endif; ?>
                  </div>
                  <div class="product-card__info-block">
                    <div>
                      <h3 class="product-card__title"><?php the_title(); ?></h3>
                      <p class="product-card__info"><?php the_field('product_description'); ?></p>
                    </div>
                    <div class="product-card__price-info">
                      <span class="product-card__quantity"><?php the_field('product_weight'); ?> г.</span>
                      <span class="product-card__price"><?php the_field('product_price'); ?>&#160;&#8381;</span>
                    </div>
                  </div>
                </a>
              </li>

              <?php the_post_thumbnail() ?>
              <?php endwhile; ?>
              <?php wp_reset_postdata(); ?>
            <?php else : ?>
              <p><?php esc_html_e( 'Нет постов по вашим критериям.' ); ?></p>
            <?php endif; ?>
          </ul>
        </div>
      </div>
    </div>
  </main>-->

  <?php get_footer(); ?>
  <?php locate_template("modal.php", true); ?>
  <?php locate_template("scripts.php", true); ?>
