<?php locate_template("head.php", true); ?>

<body>
  <?php get_header("inner");?>
  <?php $сategory_title = single_term_title('', 0); ?>
  <main class="menu__main">
    <h1 class="menu__title page-title"><?= $сategory_title ?></h1>
    <div class="menu__bread-crumbs bread-crumbs">
      <?php
        if(function_exists('bcn_display'))
          {
              bcn_display();
          }
      ?>
    </div>
    <div class="menu__wrapper">

      <div class="menu-list _active" id="menu-list">
        <button class="menu-list__toggle" id="menu-list-toggle">Меню кафе</button>
        <ul class="menu-list__list">
          <?php
            $category_slug= "";
            $categories = get_terms('products_menu', 'orderby=name&hide_empty=0');
            if( $categories ):
              foreach( $categories as $category ):
                $category_link = get_term_link($category->term_id, 'products_menu');
                $class = "menu-list__link";
                if ($сategory_title === $category -> name ) {
                    $category_slug = $category -> slug;
                    $class = "menu-list__link menu-list__link--active";
                }
                ?>
                <li class="menu-list__item">
                  <a href="<?= $category_link ?>" class="<?= $class ?>">
                    <?= $category->name ?>
                  </a>
                  <p class="menu-list__text"><?= $category->description ?></p>
                </li>
                <?php endforeach;
              endif;?>
        </ul>
      </div>

      <ul class="menu__products" id="products-container">
        <?php
          $query = new WP_Query( array(
              'post_type' => array( 'product' ),
              'posts_per_page'   => 2,
              "orderby" => "rand",
              'tax_query' => array(
              array(
              'taxonomy' => 'products_menu',
              'field'    => 'slug',
              'terms'    => $category_slug
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

    <!-- Подгрузка постов -->

    <?php

      global $wp_query;

      // текущая страница
      $paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
      // максимум страниц
      $max_pages = $wp_query->max_num_pages;

      // если текущая страница меньше, чем максимум страниц, то выводим кнопку
      if( $paged < $max_pages ) {

        echo
          '<div class="visually-hidden" data-max_pages="' . $max_pages . '" data-paged="' . $paged . '" id="loadmore" style="text-align:center;"></div>';

      }

    ?>


  </main>


  <?php



  ?>

  <?php get_footer(); ?>
  <?php locate_template("modal.php", true); ?>
  <?php locate_template("scripts.php", true); ?>
</body>
