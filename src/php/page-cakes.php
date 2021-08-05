<?php
/**
 * Template Name: cakes
 */
?>
<?php locate_template("head.php", true); ?>

<body>
  <?php get_header("inner");?>


  <main class="main-cakes container">
    <h1 class="main-cakes__title page-title">Целые торты</h1>
    <div class="main-cakes__bread-crumbs bread-crumbs">
      <a href="./index.html" class="bread-crumbs__crumb">Главная</a>
      <a class="bread-crumbs__crumb">Торты на заказ</a>
    </div>
    <p class="main-cakes__text">
      Жизненный цикл – череда важных событий, громких вечеринок, больших и маленьких побед, деловых посиделок, семейных праздников… Неизменным и незаменимым элементом которых является торт – основной атрибут всех торжеств. Вряд ли можно найти ребенка или взрослого, который откажется от кусочка торта – вкусного, ароматного, тающего во рту.
    </p>
    <p class="main-cakes__text">
      Кондитерская udc кафе создает торты на заказ, капкейки и десерты, как настоящие произведения искусства, чтобы украсить праздничный стол и поднять настроение всем окружающим.
    </p>
    <p class="main-cakes__selected-text">
      Вкусные торты под заказ на любой праздник
    </p>
    <p class="main-cakes__text">
      Изготовление тортов на заказ – необыкновенное волшебство! Кондитерские торты, лишь одним взмахом руки опытных и талантливых кондитеров udcкафе превращаются в произведения искусства.
    </p>
    <ul class="main-cakes__list _loading product-list" id="cakes-list">
      <li class="product-card">
        <a href="#" class="product-card__wrapper-link">
          <div class="product-card__image-wrapper">
            <picture>
              <source type="image/webp" srcset="<?php echo bloginfo('template_url');?>/assets/images/static/cake-one.webp">
              <img src="<?php echo bloginfo('template_url');?>/assets/images/static/cake-one.jpg" alt="Морковный" width="360" height="285">
            </picture>
          </div>
          <div class="product-card__info-block">
            <div>
              <h3 class="product-card__title">Морковный</h3>
              <p class="product-card__info">
                Пряный бисквит с грецким орехом и изюмом в сочетании с кокосовой стружкой под сливочным сыром
              </p>
            </div>
            <div class="product-card__price-info">
              <span class="product-card__quantity">1 кг.</span>
              <span class="product-card__price">999&#160;&#8381;</span>
            </div>
          </div>
        </a>
      </li>
      <li class="product-card product-card--hit product-card--hover-effect">
        <a href="#" class="product-card__wrapper-link">
          <div class="product-card__image-wrapper">
            <picture>
              <source type="image/webp" srcset="<?php echo bloginfo('template_url');?>/assets/images/static/cake-two.webp">
              <img src="<?php echo bloginfo('template_url');?>/assets/images/static/cake-two.jpg" alt="Красный Бархат" width="360" height="285">
            </picture>
          </div>
          <div class="product-card__info-block">
            <div>
              <h3 class="product-card__title">Красный Бархат</h3>
              <p class="product-card__info">
                Нежный бисквит пропитанный малиновым вареньем в сочетании со сливочным сыром.
              </p>
            </div>
            <div class="product-card__price-info">
              <span class="product-card__quantity">1 кг.</span>
              <span class="product-card__price">999&#160;&#8381;</span>
            </div>
          </div>
        </a>
      </li>
      <li class="product-card product-card--hover-effect">
        <a href="#" class="product-card__wrapper-link">
          <div class="product-card__image-wrapper">
            <picture>
              <source type="image/webp" srcset="<?php echo bloginfo('template_url');?>/assets/images/static/cake-three.webp">
              <img src="<?php echo bloginfo('template_url');?>/assets/images/static/cake-three.jpg" alt="Три Шоколада" width="360" height="285">
            </picture>
          </div>
          <div class="product-card__info-block">
            <div>
              <h3 class="product-card__title">Три Шоколада</h3>
              <p class="product-card__info">Муссовый торт из трех видов бельгийского шоколада</p>
            </div>
            <div class="product-card__price-info">
              <span class="product-card__quantity">1 кг.</span>
              <span class="product-card__price">999&#160;&#8381;</span>
            </div>
          </div>
        </a>
      </li>
      <li class="product-card product-card--hit product-card--hover-effect">
        <a href="#" class="product-card__wrapper-link">
          <div class="product-card__image-wrapper">
            <picture>
              <source type="image/webp" srcset="<?php echo bloginfo('template_url');?>/assets/images/static/cake-four.webp">
              <img src="<?php echo bloginfo('template_url');?>/assets/images/static/cake-four.jpg" alt="Сникерс" width="360" height="285">
            </picture>
          </div>
          <div class="product-card__info-block">
            <div>
              <h3 class="product-card__title">Сникерс</h3>
              <p class="product-card__info">Шоколадный бисквит с обжаренным арахисом, домашней соленой карамелью и сливочным кремом</p>
            </div>
            <div class="product-card__price-info">
              <span class="product-card__quantity">1 кг.</span>
              <span class="product-card__price">999&#160;&#8381;</span>
            </div>
          </div>
        </a>
      </li>
      <li class="product-card product-card--hover-effect">
        <a href="#" class="product-card__wrapper-link">
          <div class="product-card__image-wrapper">
            <picture>
              <source type="image/webp" srcset="<?php echo bloginfo('template_url');?>/assets/images/static/cake-five.webp">
              <img src="<?php echo bloginfo('template_url');?>/assets/images/static/cake-five.jpg" alt="Чизкейк Классический" width="360" height="285">
            </picture>
          </div>
          <div class="product-card__info-block">
            <div>
              <h3 class="product-card__title">Чизкейк Классический</h3>
              <p class="product-card__info">Творожно-сырный пирог на песочной основе</p>
            </div>
            <div class="product-card__price-info">
              <span class="product-card__quantity">1 кг.</span>
              <span class="product-card__price">999&#160;&#8381;</span>
            </div>
          </div>
        </a>
      </li>
      <li class="product-card product-card--hit product-card--hover-effect">
        <a href="#" class="product-card__wrapper-link">
          <div class="product-card__image-wrapper">
            <picture>
              <source type="image/webp" srcset="<?php echo bloginfo('template_url');?>/assets/images/static/cake-six.webp">
              <img src="<?php echo bloginfo('template_url');?>/assets/images/static/cake-six.jpg" alt="Черемухово-Черничный" width="360" height="285">
            </picture>
          </div>
          <div class="product-card__info-block">
            <div>
              <h3 class="product-card__title">Черемухово-Черничный</h3>
              <p class="product-card__info">Черемуховый бисквит с черничным муссом под сметанным кремом</p>
            </div>
            <div class="product-card__price-info">
              <span class="product-card__quantity">1 кг.</span>
              <span class="product-card__price">999&#160;&#8381;</span>
            </div>
          </div>
        </a>
      </li>
      <li class="product-card product-card--hover-effect">
        <a href="#" class="product-card__wrapper-link">
          <div class="product-card__image-wrapper">
            <picture>
              <source type="image/webp" srcset="<?php echo bloginfo('template_url');?>/assets/images/static/cake-seven.webp">
              <img src="<?php echo bloginfo('template_url');?>/assets/images/static/cake-seven.jpg" alt="Наполеон с заварным кремом" width="360" height="285">
            </picture>
          </div>
          <div class="product-card__info-block">
            <div>
              <h3 class="product-card__title">Наполеон с заварным кремом</h3>
              <p class="product-card__info">Девять хрустящих коржей с фирменным заварным кремом</p>
            </div>
            <div class="product-card__price-info">
              <span class="product-card__quantity">1 кг.</span>
              <span class="product-card__price">999&#160;&#8381;</span>
            </div>
          </div>
        </a>
      </li>
      <li class="product-card product-card--hit product-card--hover-effect">
        <a href="#" class="product-card__wrapper-link">
          <div class="product-card__image-wrapper">
            <picture>
              <source type="image/webp" srcset="<?php echo bloginfo('template_url');?>/assets/images/static/cake-eight.webp">
              <img src="<?php echo bloginfo('template_url');?>/assets/images/static/cake-eight.jpg" alt="Наполеон с Маскарпоне" width="360" height="285">
            </picture>
          </div>
          <div class="product-card__info-block">
            <div>
              <h3 class="product-card__title">Наполеон с Маскарпоне</h3>
              <p class="product-card__info">Хрустящие коржи пропитанные кремом из сыра Маскарпоне</p>
            </div>
            <div class="product-card__price-info">
              <span class="product-card__quantity">1 кг.</span>
              <span class="product-card__price">999&#160;&#8381;</span>
            </div>
          </div>
        </a>
      </li>
    </ul>
  </main>

  <?php get_footer(); ?>
  <?php locate_template("modal.php", true); ?>
  <?php locate_template("scripts.php", true); ?>
</body>
