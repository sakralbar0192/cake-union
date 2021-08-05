<section class="modal" id="modal">
  <div class="modal__wrapper">
    <h2 class="modal__title">онлайн заказ торта</h2>
    <div class="modal__product-card product-card product-card--modal">
      <a href="#" class="product-card__wrapper-link">
        <div class="product-card__image-wrapper">
          <picture>
            <source type="image/webp" srcset="<?php echo bloginfo('template_url');?>/assets/images/static/cake-two.webp">
            <img src="<?php echo bloginfo('template_url');?>/assets/images/static/cake-two.jpg" alt="Красный Бархат" width="360" height="285">
          </picture>
        </div>
        <div class="product-card__info-block">
          <div class="product-card__inner-wrapper">
            <h3 class="product-card__title">Красный Бархат</h3>
            <p class="product-card__info">
              Нежный бисквит пропитанный малиновым вареньем в сочетании со<br>сливочным сыром.
            </p>
          </div>
          <div class="product-card__price-info">
            <span class="product-card__quantity">1 кг.</span>
            <span class="product-card__price">999&#160;&#8381;</span>
          </div>
        </div>
      </a>
    </div>
    <form class="modal__form">
      <label>
        <span class="visually-hidden">Телефон</span>
        <input type="tel" class="modal__input" placeholder="Ваш телефон">
      </label>
      <label>
        <span class="visually-hidden">Комментарий</span>
        <textarea class="modal__textarea" name="comment" cols="30" rows="6" placeholder="Комментарий к заказу"></textarea>
      </label>
      <input type="checkbox" class="modal__checkbox" id="approval">
      <label for="approval" class="modal__checkbox-label">
        <span>Согласен(а) на обработку моих персональных данных</span>
      </label>
      <button type="submit" class="modal__submit">отправить заявку</button>
    </form>
  </div>
</section>
