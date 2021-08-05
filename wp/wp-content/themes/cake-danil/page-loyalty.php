<?php
/**
 * Template Name: loyalty
 */
?>
<?php locate_template("head.php", true); ?>

<body>
  <?php get_header("inner");?>

  <main class="loyalty-page">
        <h1 class="loyalty-page__title page-title">программа лояльности</h1>
        <div class="loyalty-page__bread-crumbs bread-crumbs">
            <a href="./index.html" class="bread-crumbs__crumb">Главная</a>
            <a class="bread-crumbs__crumb">Программа лояльности</a>
        </div>
        <div class="loyalty-page__hero-image-wrapper">
            <picture>
                <source type="image/webp" srcset="assets/images/static/loyalty-hero-image.webp">
               <img src="assets/images/static/loyalty-hero-image.jpg" alt="Программа лояльности" width="1135" height="363">
            </picture>
        </div>
        <div class="loyalty-page__info-block info-block">
            <p class="info-block__text">Карта Программы поощрения клиентов ЛУКОЙЛ предназначена для постоянных клиентов Компании, которые регулярно совершают покупки на АЗС и хотели бы делать это на более выгодных условиях.</p>
        </div>
        <p class="loyalty-page__text">
            Дежателям карты Программы поощрения клиентов ЛУКОЙЛ доступна классическая пластиковая карта и ее аналог — Виртуальная карта для использования с мобильного устройства.
        </p>
        <p class="loyalty-page__text">
            С картой Вы можете делать покупки на АЗС «ЛУКОЙЛ» со скидкой, используя накопленные баллы. За каждые 50 рублей, потраченные на покупку топлива и других товаров, Вы получаете 1 балл. Накопленные баллы можно использовать при следующих покупках по правилу: 1 балл = 1 рубль.
        </p>
        <ul class="loyalty-page__features">
            <li class="loyalty-page__features-item loyalty-page__features-item--discounts">
                Скидки<br>до 30%
            </li>
            <li class="loyalty-page__features-item loyalty-page__features-item--bonus">
                1 бонус<br>=<br>1 рубль
            </li>
            <li class="loyalty-page__features-item loyalty-page__features-item--10-persent">
                10% бонусов<br>начисляется от<br>суммы покупки
            </li>
            <li class="loyalty-page__features-item loyalty-page__features-item--retuns">
                3,1% бонусов<br>возвращается на<br>вашу карту от<br>суммы<br>любой покупки
            </li>
        </ul>
        <p class="loyalty-page__text loyalty-page__text--selected">
            Как получить карту?
        </p>
        <p class="loyalty-page__text">
            Для получения карты, достаточно совершить покупку в размере 1399 руб.
        </p>
        <div class="loyalty-page__rules-link">
            <a href="#">​Правила участия в Программе лояльности</a>
        </div>
        <form action="post" class="loaylty-page__form form">
            <h2 class="form__title">Анкета программы лояльности</h2>
            <div class="form__radio-block">
                <input name="discount" type="radio" class="form__radio-input" id="cakes-radio">
                <label for="cakes-radio" class="form__radio-label form__radio-label--cakes"><span>Хочу скидку на тортики</span></label>
                <input name="discount" type="radio" class="form__radio-input" id="coffee-radio" checked="">
                <label for="coffee-radio" class="form__radio-label form__radio-label--coffee"><span>Очень люблю кофе, хочу скидку</span></label>
            </div>
            <div class="form__text-input-block">
                <label>
                    <span class="visually-hidden">Ваша фамилия*</span>
                    <input type="text" class="form__text-input" placeholder="Ваша фамилия*">
                </label>
                <label>
                    <span class="visually-hidden">Ваше имя*</span>
                    <input type="text" class="form__text-input" placeholder="Ваше имя*">
                </label>
                <label>
                    <span class="visually-hidden">Ваше отчество*</span>
                    <input type="text" class="form__text-input" placeholder="Ваше отчество*">
                </label>
                <label>
                    <span class="visually-hidden">Мобильный телефон*</span>
                    <input type="text" class="form__text-input" placeholder="Мобильный телефон*">
                </label>
                <label>
                    <span class="visually-hidden">E-mail*</span>
                    <input type="text" class="form__text-input" placeholder="E-mail*">
                </label>
                <p class="form__footnotes">* Звездочкой отмечены поля, обязательные для заполнения.</p>
            </div>
            <div>
                <input class="form__checkbox-input" type="checkbox" id="approval">
                <label class="form__checkbox-label" for="approval">
                    <span>Согласен(а) на обработку моих персональных данных</span>
                </label>
            </div>
            <button class="form__submit-button" type="submit">
                отправить анкету
            </button>
        </form>
    </main>

  <?php get_footer(); ?>
  <?php locate_template("modal.php", true); ?>
  <?php locate_template("scripts.php", true); ?>
</body>
