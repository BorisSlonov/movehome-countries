<?php
/*
*  Template Name: page-test
*/

?>

<?php
get_header('white');
?>



<section class="section-first-screen">

<div class="container">
    <div class="first-screen">
        <div class="first-screen__row">
            <div class="first-screen__item first-screen-text">

                <h1 class="first-screen-text__title">
                    Грузовые перевозки <br>
                    и таможенное оформление
                    <span class="first-screen-text__sub-title sub-color">Германия <span
                            class="first-screen-text__line">|</span> Европа <span
                            class="first-screen-text__line">|</span> Россия <span
                            class="first-screen-text__line">|</span> СНГ </span>
                </h1>
                <div class="first-screen-text__countries first-countries">
                    <span class="first-countries__row first-countries__row_first"><span>Доставка грузов:</span>
                    </span>

                    <span class="first-countries__row">
                        из Германии в Россию
                    </span>
                    <span class="first-countries__row">
                        из России в Германию
                    </span>
                    <span class="first-countries__row">
                        Доставка по всей Европе
                    </span>


                </div>

                <a href="#anchor-form" class="first-screen-text__btn btn main-btn">
                    <span class="btn__text">Посмотреть все услуги</span>
                </a>
            </div>
            <div class="first-screen__item first-screen-img">
                <div class="first-form-wrap">
                    <div class="first-form-wrap__inner">
                        <h3 class="first-form-h3">
                            Рассчитаем стоимость перевозки вашего груза за 15 минут
                        </h3>
                        <div class="first-form">

                            <input type="text" class="first-form__input" placeholder="Откуда">
                            <input type="text" class="first-form__input" placeholder="Куда">
                            <input type="text" class="first-form__input" placeholder="Вес (кг)">
                            <input type="text" class="first-form__input" placeholder="Габариты ( м3)">
                            <input type="text" class="first-form__input" placeholder="Почта">
                            <input type="text" class="first-form__input" placeholder="Телефон">
                            <textarea class="first-form__textarea" placeholder="Описание"></textarea>
                            <div class="first-form__btn-wrap">
                                <p>
                                    Отправляя свои данные через эту форму, вы соглашаетесь с политикой обработки
                                    персональных данных и с политикой конфиденциальности
                                </p>
                                <input placeholder="Отправить" class="btn main-btn main-btn_yellow">
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </div>
</div>
</section>


<section class="section-our-services">
<div class="container">
    <div class="our-services">


        <div class="our-services__row">
            <div class="our-services__item">
                <div class="our-services__icon">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icon-appart.svg" alt="">
                </div>
                <h3 class="our-services__h3">
                    Коммерция
                </h3>
                <p class="our-services__text">
                    Экспресс-доставка грузов для бизнеса. Германия - популярная страна для покупки товаров от
                    текстиля до химии. Доставка до двери от 5 евро за килограмм и сроком до 7 дней.
                </p>

                <a href="#section-products" class="btn main-btn main-btn_yellow main-btn_yellow-180">
                    Подробнее
                </a>
            </div>
            <div class="our-services__item">
                <div class="our-services__icon">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icon-truck.svg" alt="">
                </div>
                <h3 class="our-services__h3">
                    Переезды
                </h3>
                <p class="our-services__text">
                    Люди стали чаще переезжать в поисках лучшей жизни, и наша команда в Германии разработала
                    выгодный тарифный план, где таможенные платежи и логистика будут рассматриваться
                    индивидуально.
                </p>

                <a href="#section-products" class="btn main-btn main-btn_yellow main-btn_yellow-180">
                    <span>Подробнее</span>
                </a>
            </div>
            <div class="our-services__item">
                <div class="our-services__icon">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icon-box.svg" alt="">
                </div>
                <h3 class="our-services__h3">
                    Посылки
                </h3>
                <p class="our-services__text">
                    Сервис для отправки посылок и товаров из интернет-магазина для себя и своих близких в
                    Германию или в Россию. Просчитаем вам самые сложные товарные группы, за которые не берутся
                    другие компании.
                </p>

                <a href="#section-products" class="btn main-btn main-btn_yellow main-btn_yellow-180">
                    <span>Подробнее</span>
                </a>
            </div>
        </div>
    </div>
</div>
</section>

<section class="section-country-services">
<div class="container">

    <h2 class="main-h2 main-h2_services">
        Услуги в Германии
    </h2>

    <div class="country-services">
        <a href="#" class="country-services__item country-services__item_1">
            <h3 class="country-services__title">
                Таможенное <br>
                оформление
            </h3>
            <span class="country-services__more">
                Подробнее
            </span>
        </a>
        <a href="#" class="country-services__item country-services__item_2">
            <h3 class="country-services__title">
                Логистические <br>
                услуги
            </h3>
            <span class="country-services__more">
                Подробнее
            </span>
        </a>
        <a href="#" class="country-services__item country-services__item_3">
            <h3 class="country-services__title">
                Финансовые услуги <br>
                и поиск товара
            </h3>
            <span class="country-services__more">
                Подробнее
            </span>
        </a>
        <a href="#" class="country-services__item country-services__item_4">
            <h3 class="country-services__title">
                Сертификация
            </h3>
            <span class="country-services__more">
                Подробнее
            </span>
        </a>
        <a href="#" class="country-services__item country-services__item_5">
            <h3 class="country-services__title">
                Складские <br>
                услуги
            </h3>
            <span class="country-services__more">
                Подробнее
            </span>
        </a>
        <a href="#" class="country-services__item country-services__item_6">
            <h3 class="country-services__title">
                Страхование <br>
                груза
            </h3>
            <span class="country-services__more">
                Подробнее
            </span>
        </a>
    </div>

</div>

</section>

<section class="section-page-video">
<div class="container">
    <div class="page-video">
        <div class="page-video__row">
            <div class="page-video__item page-video__item_text">
                <h2 class="page-video__h2">
                    Видео ролик по доставке грузов
                </h2>

                <div class="page-video__country video-country">
                    <span class="video-country__item">
                        Германия
                    </span>
                    <div class="video-country__arrow">
                         <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/arrow-blue.svg" alt="">
                    </div>
                    <span class="video-country__item">
                        Россия
                    </span>
                    <div class="video-country__arrow">
                         <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/arrow-blue.svg" alt="">
                    </div>
                    <span class="video-country__item">
                        Германия
                    </span>
                </div>

                <p class="page-video__descr">
                    Посмотрите видео о наших услугах.
                    Полный спектр услуг от Move Home
                </p>
            </div>
            <div class="page-video__item">
                <a data-fancybox href="https://www.youtube.com/watch?v=QSIQlzrK_ug" class="video-link">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/tablet.jpg" alt="">
                    <img class="video-link__icon"
                        src="https://movehome.eu/wp-content/uploads/2021/01/play-button-2.svg" alt="">
                </a>
            </div>
        </div>
    </div>
</div>
</section>

<section class="popular-shops">
<h2 class="main-h2">
    Доставляем из популярных интернет магазинов
</h2>
<div class="container">
    <div class="shops">
        <div class="shops__row">
            <div class="shops__item shop">
                <a class="shop__link" href="https://www.ebay.com/" target="_blank">
                    <span class="shop__img-descr">
                        Ebay
                    </span>
                    <img class="shop__img"
                        src="https://movehome.eu/wp-content/uploads/2020/12/ebay-e1608067417410.png" alt="">

                </a>
                <p class="shops__descr">
                    Купить на <a href="https://www.ebay.com/" target="_blank">Ebay</a> можно практически любой
                    товар, новый или б/у . Те же онлайн
                    магазины порой продают свою продукцию через eBay (ебей) по ценам ниже, чем в своих
                    магазинах.
                </p>
            </div>
            <div class="shops__item shop">
                <a class="shop__link" href="https://www.ozon.ru/" target="_blank">
                    <span class="shop__img-descr">
                        Ozon
                    </span>
                    <img class="shop__img" src="https://movehome.eu/wp-content/uploads/2020/12/5345343.jpg"
                        alt="">

                </a>
                <p class="shops__descr">
                    <a class="shops__descr-link" href="https://www.ozon.ru/" target="_blank">Ozon.ru</a> —
                    крупнейший интернет-магазин в России. На Ozon можно заказать всё, что вам нужно:
                    электронику, бытовую технику, детские товары и прочее.
                </p>
            </div>
            <div class="shops__item shops__item_amazon shop">
                <a class="shop__link" href="https://www.avito.ru/rossiya" target="_blank">
                    <span class="shop__img-descr">
                        Avito
                    </span>
                    <img class="shop__img"
                        src="https://movehome.eu/wp-content/uploads/2020/12/ebay-e1608067417410.png" alt="">

                </a>
                <p class="shops__descr">
                    <a href="https://www.avito.ru/rossiya" target="_blank">Авито</a> —
                    интернет-сервис для размещения объявлений о товарах, вакансиях и резюме на рынке труда,
                    занимающий второе место в мире и первое в России среди онлайн-классифайдов.
                </p>
            </div>
            <div class="shops__item shops__item_avito shop">
                <a class="shop__link" href="https://www.amazon.com/" target="_blank">
                    <span class="shop__img-descr">
                        Amazon
                    </span>
                    <img class="shop__img" src="https://movehome.eu/wp-content/uploads/2020/12/42423.png"
                        alt="">

                </a>
                <p class="shops__descr">
                    <a href="https://www.amazon.com/" target="_blank">Amazon</a> — американская компания,
                    крупнейшая в мире на рынках платформ электронной коммерции и публично-облачных вычислений по
                    выручке и рыночной капитализации.
                </p>
            </div>
        </div>
    </div>
</div>
</section>

<section class="section-products" id="section-products">
<div class="container">
    <h2 class="main-h2">
        Мы доставляем такие товарные группы
    </h2>


    <div class="service-grid">
        <div class="service-grid__row">
            <div class="service-grid__item wow fadeInUp delay-0_1s"
                style="visibility: visible; animation-name: fadeInUp;">
                <div class="service-grid__img"><img
                        src="https://movehome.eu/wp-content/uploads/2020/05/t-shirt.png" alt="">
                </div>
                <div class="service-grid__text">Одежда</div>
            </div>
            <div class="service-grid__item wow fadeInUp delay-0_2s"
                style="visibility: visible; animation-name: fadeInUp;">
                <div class="service-grid__img"><img
                        src="https://movehome.eu/wp-content/uploads/2020/05/shoes.png" alt="">
                </div>
                <div class="service-grid__text">Обувь</div>
            </div>
            <div class="service-grid__item wow fadeInUp delay-0_3s"
                style="visibility: visible; animation-name: fadeInUp;">
                <div class="service-grid__img"><img
                        src="https://movehome.eu/wp-content/uploads/2020/05/chear.png" alt="">
                </div>
                <div class="service-grid__text">Мебель</div>
            </div>
            <div class="service-grid__item wow fadeInUp delay-0_4s d-none550"
                style="visibility: visible; animation-name: fadeInUp;">
                <div class="service-grid__img"><img
                        src="https://movehome.eu/wp-content/uploads/2020/05/interier.png" alt=""></div>
                <div class="service-grid__text">Интерьер</div>
            </div>
        </div>
        <div class="service-grid__row">
            <div class="service-grid__item wow fadeInUp delay-0_4s"
                style="visibility: visible; animation-name: fadeInUp;">
                <div class="service-grid__img"><img
                        src="https://movehome.eu/wp-content/uploads/2020/05/food.png" alt="">
                </div>
                <div class="service-grid__text">Еда</div>
            </div>
            <div class="service-grid__item wow fadeInUp delay-0_3s"
                style="visibility: visible; animation-name: fadeInUp;">
                <div class="service-grid__img"><img
                        src="https://movehome.eu/wp-content/uploads/2020/05/battles.png" alt="">
                </div>
                <div class="service-grid__text">Напитки</div>
            </div>
            <div class="service-grid__item wow fadeInUp delay-0_2s"
                style="visibility: visible; animation-name: fadeInUp;">
                <div class="service-grid__img"><img
                        src="https://movehome.eu/wp-content/uploads/2020/05/tablets.png" alt="">
                    <!-- img -->
                    <!-- text -->
                </div>
                <div class="service-grid__text">Лекарства</div>
            </div>
            <div class="service-grid__item wow fadeInUp delay-0_1s d-none550"
                style="visibility: visible; animation-name: fadeInUp;">
                <div class="service-grid__img"><img
                        src="https://movehome.eu/wp-content/uploads/2020/05/animals.png" alt="">
                </div>
                <div class="service-grid__text">Животные</div>
            </div>
        </div>
        <div class="service-grid__row">
            <div class="service-grid__item wow fadeInUp delay-0_1s"
                style="visibility: visible; animation-name: fadeInUp;">
                <div class="service-grid__img"><img
                        src="https://movehome.eu/wp-content/uploads/2020/05/text.png" alt="">
                </div>
                <div class="service-grid__text">Текстиль</div>
            </div>
            <div class="service-grid__item wow fadeInUp delay-0_2s"
                style="visibility: visible; animation-name: fadeInUp;">
                <div class="service-grid__img"><img
                        src="https://movehome.eu/wp-content/uploads/2020/05/furniture.png" alt=""></div>
                <div class="service-grid__text">Фурнитура</div>
            </div>
            <div class="service-grid__item wow fadeInUp delay-0_3s"
                style="visibility: visible; animation-name: fadeInUp;">
                <div class="service-grid__img"><img
                        src="https://movehome.eu/wp-content/uploads/2020/05/water.png" alt="">
                </div>
                <div class="service-grid__text">Сантехника</div>
            </div>
            <div class="service-grid__item wow fadeInUp delay-0_4s d-none550"
                style="visibility: visible; animation-name: fadeInUp;">
                <div class="service-grid__img"><img
                        src="https://movehome.eu/wp-content/uploads/2020/05/builds.png" alt="">
                </div>
                <div class="service-grid__text">Стройматериалы</div>
            </div>
        </div>
        <div class="service-grid__row">
            <div class="service-grid__item wow fadeInUp delay-0_4s"
                style="visibility: visible; animation-name: fadeInUp;">
                <div class="service-grid__img"><img
                        src="https://movehome.eu/wp-content/uploads/2020/05/gadgets.png" alt="">
                </div>
                <div class="service-grid__text">Оборудование</div>
            </div>
            <div class="service-grid__item wow fadeInUp delay-0_3s"
                style="visibility: visible; animation-name: fadeInUp;">
                <div class="service-grid__img"><img
                        src="https://movehome.eu/wp-content/uploads/2020/05/chemical.png" alt=""></div>
                <div class="service-grid__text">Химия</div>
            </div>
            <div class="service-grid__item wow fadeInUp delay-0_2s"
                style="visibility: visible; animation-name: fadeInUp;">
                <div class="service-grid__img"><img
                        src="https://movehome.eu/wp-content/uploads/2020/05/tools.png" alt="">
                </div>
                <div class="service-grid__text">Инструменты</div>
            </div>
            <div class="service-grid__item wow fadeInUp delay-0_1s d-none550"
                style="visibility: visible; animation-name: fadeInUp;">
                <div class="service-grid__img"><img
                        src="https://movehome.eu/wp-content/uploads/2020/05/electrick.png" alt=""></div>
                <div class="service-grid__text">Электроника</div>
            </div>
        </div>
    </div>
</div>
</section>

<section class="section-country-advantages">
<div class="container">

    <h2 class="main-h2">
        Наши преимущества
    </h2>

    <div class="country-advantages">
        <div class="country-advantages__item">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/prefernce/1.svg" alt="">
            <span>
                Таможенное оформление в аэропортах и морских портах
            </span>
        </div>
        <div class="country-advantages__item">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/prefernce/2.svg" alt="">
            <span>
                Оперативный выпуск грузов
            </span>
        </div>
        <div class="country-advantages__item">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/prefernce/3.svg" alt="">
            <span>
                Выгодное предложение по сертефикации
            </span>
        </div>
        <div class="country-advantages__item">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/prefernce/4.svg" alt="">
            <span>
                Снижение транспортных расходов за счет своего парка
            </span>
        </div>
        <div class="country-advantages__item">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/prefernce/5.svg" alt="">
            <span>
                Работаем с компаниями и частными лицами
            </span>
        </div>
    </div>
</div>
</section>

<section class="section-example">
<div class="container">
    <h2 class="logistic__h2 sub-h2_dress">
        Пример нашей работы
    </h2>
    <div class="example">

        <div class="example__row">

            <div class="example__item">
                <div class="example__item_img">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/example-truck.jpg" alt="">
                </div>
            </div>

            <div class="example__item">
                <div class="example-item">
                    <div class="example-item__item">
                        <span class="example__name">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/https://movehome.eu/wp-content/uploads/2020/04/germany_new_flag.png">
                            <span>Германия</span>
                        </span>
                        <h3 class="example-item__h3">
                            Задача
                        </h3>
                        <p>
                            Доставить раздвижные ворота для ООО “ПромоАльянс”
                            из Германии в Россию.
                        </p>
                    </div>
                    <div class="example-item__item">
                        <span class="example__name">
                            <img class="alignnone size-full wp-image-7805"
                                src="https://movehome.eu/wp-content/uploads/2020/04/russia.png" alt=""
                                width="75" height="50">
                            <span>Россия</span>
                        </span>
                        <h3 class="example-item__h3">
                            Решение
                        </h3>
                        <div class="example-item__lists">
                            <ul class="example-item__list">
                                <li>
                                    <i class="fas fa-check"></i>
                                    <span>Поиска поставщика</span>
                                </li>
                                <li>
                                    <i class="fas fa-check"></i>
                                    <span>Оплата за товар 1-2 суток</span>
                                </li>
                                <li>
                                    <i class="fas fa-check"></i>
                                    <span>Быстрая подача машины</span>
                                </li>
                            </ul>
                            <ul class="example-item__list">
                                <li>
                                    <i class="fas fa-check"></i>
                                    <span>Таможенное оформление ниже риска</span>
                                </li>
                                <li>
                                    <i class="fas fa-check"></i>
                                    <span>Выдача груза с документами</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>



        </div>


    </div>
</div>
</section>


<section class="page-reviews" id="otzuvy">
<div class="container">
    <h2 class="main-h2">
        ОТЗЫВЫ НАШИХ КЛИЕНТОВ​
    </h2>


    <?php echo do_shortcode('[testimonial_view id="5"]') ?>


    <div id="app-accord" class="">
        <div class="accord-btn">
            <span>
                Оставить отзыв
            </span>
            <span>
                <i class="far fa-caret-square-down"></i>
            </span>
        </div>
        <div class="reviews">
            <?php echo do_shortcode('[testimonial_view id="4"]') ?>
        </div>
    </div>

</div>
</section>


<section class="section-page-form">
<div class="page-form">
    <div class="container">
        <div class="page-form__row">
            <div class="page-form__item page-form__item_img">

            </div>
            <div class="page-form__item">
                <h2 class="sub-h2">
                    БЕСПЛАТНЫЙ РАСЧЕТ СТОИМОСТИ
                </h2>
                <?php echo do_shortcode('[contact-form-7 id="12974" title="страны нижняя форма"]') ?>

            </div>
        </div>
    </div>
</div>
</section>



<?php
get_footer();
?>