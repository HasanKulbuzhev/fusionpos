<?php
/* @var $this yii\web\View */

use yii\helpers\Url;
$this->title = 'My Yii Application';
?>
<!-- start sProdCard-->
<section class="sProdCard section" id="sProdCard">
    <div class="container">
        <div class="sProdCard__row row">
            <div class="col">
                <h1><?= $product['name'] ?></h1>
                <div class="sProdCard__infoRow row align-items-center">
                    <div class="col-sm-auto">
                        <div class="row align-items-center">
                            <div class="col-auto"><span class="text-dark fz-sm">Вес: 485 г.</span></div>
                            <div class="col-auto"><span class="text-success fz-sm">В наличии</span></div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="sProdCard__reviewRow row align-items-center">
                            <div class="col-auto">
                                <div class="stars">
                                    <div class="stars__star filled-star">
                                        <svg class="icon icon-star ">
                                            <use xlink:href="/img/svg/sprite.svg#star"></use>
                                        </svg>
                                    </div>
                                    <div class="stars__star filled-star">
                                        <svg class="icon icon-star ">
                                            <use xlink:href="/img/svg/sprite.svg#star"></use>
                                        </svg>
                                    </div>
                                    <div class="stars__star filled-star">
                                        <svg class="icon icon-star ">
                                            <use xlink:href="/img/svg/sprite.svg#star"></use>
                                        </svg>
                                    </div>
                                    <div class="stars__star filled-star">
                                        <svg class="icon icon-star ">
                                            <use xlink:href="/img/svg/sprite.svg#star"></use>
                                        </svg>
                                    </div>
                                    <div class="stars__star empty-star">
                                        <svg class="icon icon-star ">
                                            <use xlink:href="/img/svg/sprite.svg#star"></use>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto"><a class="sProdCard__review fz-sm text-danger" href="/#">12 отзывов</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sProdCard__price"><?= $product['price'] ?><span class="text-dark">&nbsp;₽</span>
                </div>
                <div class="row align-items-center">
                    <div class="col-auto">
                        <div class="quantly">
                            <button class="quantly__btn minus" type="button">
                                <svg class="icon icon-minus ">
                                    <use xlink:href="/img/svg/sprite.svg#minus"></use>
                                </svg>
                            </button><input class="quantly__input" type="number" value="10"/>
                            <button class="quantly__btn plus active" type="button">
                                <svg class="icon icon-plus ">
                                    <use xlink:href="/img/svg/sprite.svg#plus"></use>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="sProdCard__btnCol col">
                        <button onclick="location.href = '<?= Url::to(['basket/basket-add', 'productId' => $product['id']]); ?>'" class="sProdCard__btn btn-accent" type="button"><img src="/img/svg/shopping-bag.svg" alt="В корзину" loading="lazy"/>В корзину
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-7 order-lg-first sProdCard__col"><a class="sProdCard__imgWrap" href="<?= Yii::getAlias('@web') ?>/img/@2x/prod-photo.png" data-fancybox="prod">
                    <!-- picture-->
                    <picture>
                        <source type="image/webp" srcset="/img/@2x/webp/prod-photo.webp"/><img src="/img/@2x/prod-photo.png" alt="" loading="lazy"/>
                    </picture>
                    <!-- /picture--></a>
            </div>
        </div>
        <div class="tabs tabs--js">
            <div class="tabs__caption">
                <div class="tabs__btn active">Описание
                </div>
                <div class="tabs__btn">Состав
                </div>
            </div>
            <div class="tabs__wrap">
                <div class="tabs__content active">
                    <p>Давно выяснено, что при оценке дизайна и&nbsp;композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона, а&nbsp;также реальное распределение букв и&nbsp;пробелов в&nbsp;абзацах, которое не&nbsp;получается при простой дубликации &laquo;Здесь ваш текст.. Здесь ваш текст.. Здесь ваш текст..&raquo; Многие программы электронной вёрстки и&nbsp;редакторы HTML используют Lorem Ipsum в&nbsp;качестве текста по&nbsp;умолчанию, так что поиск по&nbsp;ключевым словам</p>
                </div>
                <div class="tabs__content">
                    <div class="composition">
                        <div class="row">
                            <div class="col-sm-6 col-md-7 col-lg-5 col-xl-5">
                                <ol class="composition__list">
                                    <li>Бекон</li>
                                    <li>Мясной фарш</li>
                                    <li>Каперсы</li>
                                    <li>Кайенский перец</li>
                                    <li>Сольпо вкусу</li>
                                    <li>Фирменный соус</li>
                                </ol>
                            </div>
                            <div class="col-sm-6 col-md-5 col-lg-4 col-xl-3">
                                <div class="composition__item">
                                    <div class="row">
                                        <div class="col d-flex align-items-center"><span class="composition__param">Вес</span>
                                        </div>
                                        <div class="col-auto d-flex align-items-center"><span class="composition__value">485 г</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="composition__item">
                                    <div class="row">
                                        <div class="col d-flex align-items-center"><span class="composition__param">Калорийность</span>
                                        </div>
                                        <div class="col-auto d-flex align-items-center"><span class="composition__value">177,62 кКал</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="composition__item">
                                    <div class="row">
                                        <div class="col d-flex align-items-center"><span class="composition__param">Белки</span>
                                        </div>
                                        <div class="col-auto d-flex align-items-center"><span class="composition__value">9,3114 г</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="composition__item">
                                    <div class="row">
                                        <div class="col d-flex align-items-center"><span class="composition__param">Жиры</span>
                                        </div>
                                        <div class="col-auto d-flex align-items-center"><span class="composition__value">12,2569 г</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="composition__item">
                                    <div class="row">
                                        <div class="col d-flex align-items-center"><span class="composition__param">Углеводы</span>
                                        </div>
                                        <div class="col-auto d-flex align-items-center"><span class="composition__value">7,2551</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end sProdCard-->
<!-- start sReviews-->
<section class="sReviews section" id="sReviews">
    <div class="container">
        <div class="sReviews__row row">
            <div class="col-lg-8">
                <div class="section-title">
                    <h2>Отзывы</h2><a class="section-title__add" href="/#">+ Добавить отзыв</a>
                </div>
                <div class="sReviews__item">
                    <div class="sReviews__itemHead">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <div class="sReviews__name">Валентина
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="stars">
                                    <div class="stars__star filled-star">
                                        <svg class="icon icon-star ">
                                            <use xlink:href="/img/svg/sprite.svg#star"></use>
                                        </svg>
                                    </div>
                                    <div class="stars__star filled-star">
                                        <svg class="icon icon-star ">
                                            <use xlink:href="/img/svg/sprite.svg#star"></use>
                                        </svg>
                                    </div>
                                    <div class="stars__star filled-star">
                                        <svg class="icon icon-star ">
                                            <use xlink:href="/img/svg/sprite.svg#star"></use>
                                        </svg>
                                    </div>
                                    <div class="stars__star filled-star">
                                        <svg class="icon icon-star ">
                                            <use xlink:href="/img/svg/sprite.svg#star"></use>
                                        </svg>
                                    </div>
                                    <div class="stars__star empty-star">
                                        <svg class="icon icon-star ">
                                            <use xlink:href="/img/svg/sprite.svg#star"></use>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p>Давно выяснено, что при оценке дизайна и&nbsp;композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона, а&nbsp;также реальное распределение букв и&nbsp;пробелов в&nbsp;абзацах, которое не&nbsp;получается при простой дубликации &laquo;Здесь ваш текст.. Здесь ваш текст.. Здесь ваш текст..&raquo; Многие программы электронной вёрстки и&nbsp;редакторы HTML используют Lorem Ipsum в&nbsp;качестве текста по&nbsp;умолчанию, так что поиск по&nbsp;ключевым словам</p>
                </div>
                <div class="sReviews__item">
                    <div class="sReviews__itemHead">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <div class="sReviews__name">Валентина
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="stars">
                                    <div class="stars__star filled-star">
                                        <svg class="icon icon-star ">
                                            <use xlink:href="/img/svg/sprite.svg#star"></use>
                                        </svg>
                                    </div>
                                    <div class="stars__star filled-star">
                                        <svg class="icon icon-star ">
                                            <use xlink:href="/img/svg/sprite.svg#star"></use>
                                        </svg>
                                    </div>
                                    <div class="stars__star filled-star">
                                        <svg class="icon icon-star ">
                                            <use xlink:href="/img/svg/sprite.svg#star"></use>
                                        </svg>
                                    </div>
                                    <div class="stars__star filled-star">
                                        <svg class="icon icon-star ">
                                            <use xlink:href="/img/svg/sprite.svg#star"></use>
                                        </svg>
                                    </div>
                                    <div class="stars__star empty-star">
                                        <svg class="icon icon-star ">
                                            <use xlink:href="/img/svg/sprite.svg#star"></use>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p>Давно выяснено, что при оценке дизайна и&nbsp;композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона, а&nbsp;также реальное распределение букв и&nbsp;пробелов в&nbsp;абзацах, которое не&nbsp;получается при простой дубликации &laquo;Здесь ваш текст.. Здесь ваш текст.. Здесь ваш текст..&raquo; Многие программы электронной вёрстки и&nbsp;редакторы HTML используют Lorem Ipsum в&nbsp;качестве текста по&nbsp;умолчанию, так что поиск по&nbsp;ключевым словам</p>
                </div>
                <div class="sReviews__item">
                    <div class="sReviews__itemHead">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <div class="sReviews__name">Валентина
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="stars">
                                    <div class="stars__star filled-star">
                                        <svg class="icon icon-star ">
                                            <use xlink:href="/img/svg/sprite.svg#star"></use>
                                        </svg>
                                    </div>
                                    <div class="stars__star filled-star">
                                        <svg class="icon icon-star ">
                                            <use xlink:href="/img/svg/sprite.svg#star"></use>
                                        </svg>
                                    </div>
                                    <div class="stars__star filled-star">
                                        <svg class="icon icon-star ">
                                            <use xlink:href="/img/svg/sprite.svg#star"></use>
                                        </svg>
                                    </div>
                                    <div class="stars__star filled-star">
                                        <svg class="icon icon-star ">
                                            <use xlink:href="/img/svg/sprite.svg#star"></use>
                                        </svg>
                                    </div>
                                    <div class="stars__star empty-star">
                                        <svg class="icon icon-star ">
                                            <use xlink:href="/img/svg/sprite.svg#star"></use>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p>Давно выяснено, что при оценке дизайна и&nbsp;композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона, а&nbsp;также реальное распределение букв и&nbsp;пробелов в&nbsp;абзацах, которое не&nbsp;получается при простой дубликации &laquo;Здесь ваш текст.. Здесь ваш текст.. Здесь ваш текст..&raquo; Многие программы электронной вёрстки и&nbsp;редакторы HTML используют Lorem Ipsum в&nbsp;качестве текста по&nbsp;умолчанию, так что поиск по&nbsp;ключевым словам</p>
                </div>
            </div>
            <div class="col">
                <div class="sReviews__writeWrap">
                    <div class="sReviews__write">Написать отзыв
                    </div>
                    <div class="form-wrap">
                        <form>
                            <div class="form-wrap__head">
                                <div class="row justify-content-between">
                                    <div class="col-auto">
                                        <div class="form-wrap__yourMark">Ваша оценка
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="stars">
                                            <div class="stars__star filled-star">
                                                <svg class="icon icon-star ">
                                                    <use xlink:href="/img/svg/sprite.svg#star"></use>
                                                </svg>
                                            </div>
                                            <div class="stars__star filled-star">
                                                <svg class="icon icon-star ">
                                                    <use xlink:href="/img/svg/sprite.svg#star"></use>
                                                </svg>
                                            </div>
                                            <div class="stars__star filled-star">
                                                <svg class="icon icon-star ">
                                                    <use xlink:href="/img/svg/sprite.svg#star"></use>
                                                </svg>
                                            </div>
                                            <div class="stars__star filled-star">
                                                <svg class="icon icon-star ">
                                                    <use xlink:href="/img/svg/sprite.svg#star"></use>
                                                </svg>
                                            </div>
                                            <div class="stars__star empty-star">
                                                <svg class="icon icon-star ">
                                                    <use xlink:href="/img/svg/sprite.svg#star"></use>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-wrap__input-wrap form-group"><input class="form-wrap__input form-control" name="text" type="text" placeholder="Ваше имя"/>
                            </div>
                            <!-- +e.input-wrap-->
                            <div class="form-wrap__input-wrap form-group"><textarea class="form-wrap__input form-control" name="textarea" placeholder="Ваш комментарий"></textarea>
                            </div>
                            <!-- +e.input-wrap-->
                            <button class="form-wrap__btn btn-accent" type="submit"><img src="/img/svg/shopping-bag.svg" alt="" loading="lazy"/>Отправить
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end sReviews-->
<!-- start sCatalog-->
<div class="sCatalog section">
    <div class="container">
        <div class="section-title">
            <div class="row">
                <div class="col">
                    <h2>С этим покупают</h2>
                </div>
                <div class="col-auto">
                    <div class="arrow-wrap">
                        <div class="swiper-button-hand swiper-button-hand-prev swiper-button-prev"></div>
                        <div class="swiper-button-hand swiper-button-hand-next swiper-button-next"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sCatalog__slider sCatalog__slider--js swiper-container">
            <div class="swiper-wrapper">
                <div class="sCatalog__slide swiper-slide">
                    <div class="prod-item"><a class="prod-item__img-wrap bg-wrap" href="/#">
                            <!-- picture-->
                            <picture class="picture-bg">
                                <source type="image/webp" srcset="/img/@2x/webp/prod-1.webp"/><img class="object-fit-js" src="/img/@2x/prod-1.jpg" alt="" loading="lazy"/>
                            </picture>
                            <!-- /picture--></a>
                        <div class="prod-item__caption"><a class="prod-item__title" href="/#">Burger мистер Трюфель</a>
                            <div class="prod-item__small">Вес: 485 г.
                            </div>
                            <p>Свежая булочка, мраморная говядина medium well, сыр, листья салата, ломтики помидоров, маринованные...</p>
                            <div class="prod-item__footer row">
                                <div class="col">
                                    <div class="prod-item__price">150 <span> ₽</span>
                                    </div>
                                </div>
                                <div class="col-auto"><a class="prod-item__btn" href="/#"><img src="/img/svg/shopping-bag.svg" alt=""/></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sCatalog__slide swiper-slide">
                    <div class="prod-item"><a class="prod-item__img-wrap bg-wrap" href="/#">
                            <!-- picture-->
                            <picture class="picture-bg">
                                <source type="image/webp" srcset="/img/@2x/webp/prod-2.webp"/><img class="object-fit-js" src="/img/@2x/prod-2.jpg" alt="" loading="lazy"/>
                            </picture>
                            <!-- /picture--></a>
                        <div class="prod-item__caption"><a class="prod-item__title" href="/#">Комбо Хот-Дог</a>
                            <div class="prod-item__small">Вес: 485 г.
                            </div>
                            <p>Домашние наггетсы <br> Хот-Дог <br> Кола 0,33</p>
                            <div class="prod-item__footer row">
                                <div class="col">
                                    <div class="prod-item__price">450 <span> ₽</span>
                                    </div>
                                </div>
                                <div class="col-auto"><a class="prod-item__btn" href="/#"><img src="/img/svg/shopping-bag.svg" alt=""/></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sCatalog__slide swiper-slide">
                    <div class="prod-item"><a class="prod-item__img-wrap bg-wrap" href="/#">
                            <!-- picture-->
                            <picture class="picture-bg">
                                <source type="image/webp" srcset="/img/@2x/webp/prod-3.webp"/><img class="object-fit-js" src="/img/@2x/prod-3.jpg" alt="" loading="lazy"/>
                            </picture>
                            <!-- /picture--></a>
                        <div class="prod-item__caption"><a class="prod-item__title" href="/#">Нагетсы</a>
                            <div class="prod-item__small">Вес: 485 г.
                            </div>
                            <p>Филе кур девственниц</p>
                            <div class="prod-item__footer row">
                                <div class="col">
                                    <div class="prod-item__price">1 150 <span> ₽</span>
                                    </div>
                                </div>
                                <div class="col-auto"><a class="prod-item__btn" href="/#"><img src="/img/svg/shopping-bag.svg" alt=""/></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sCatalog__slide swiper-slide">
                    <div class="prod-item"><a class="prod-item__img-wrap bg-wrap" href="/#">
                            <!-- picture-->
                            <picture class="picture-bg">
                                <source type="image/webp" srcset="/img/@2x/webp/prod-4.webp"/><img class="object-fit-js" src="/img/@2x/prod-4.jpg" alt="" loading="lazy"/>
                            </picture>
                            <!-- /picture--></a>
                        <div class="prod-item__caption"><a class="prod-item__title" href="/#">Фирменный Las Burger</a>
                            <div class="prod-item__small">Вес: 485 г.
                            </div>
                            <p>Свежая булочка, мраморная говядина medium well, сыр, листья салата, ломтики помидоров, маринованные...</p>
                            <div class="prod-item__footer row">
                                <div class="col">
                                    <div class="prod-item__price">2 150 <span> ₽</span>
                                    </div>
                                </div>
                                <div class="col-auto"><a class="prod-item__btn" href="/#"><img src="/img/svg/shopping-bag.svg" alt=""/></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sCatalog__slide swiper-slide">
                    <div class="prod-item"><a class="prod-item__img-wrap bg-wrap" href="/#">
                            <!-- picture-->
                            <picture class="picture-bg">
                                <source type="image/webp" srcset="/img/@2x/webp/prod-1.webp"/><img class="object-fit-js" src="/img/@2x/prod-1.jpg" alt="" loading="lazy"/>
                            </picture>
                            <!-- /picture--></a>
                        <div class="prod-item__caption"><a class="prod-item__title" href="/#">Burger мистер Трюфель</a>
                            <div class="prod-item__small">Вес: 485 г.
                            </div>
                            <p>Свежая булочка, мраморная говядина medium well, сыр, листья салата, ломтики помидоров, маринованные...</p>
                            <div class="prod-item__footer row">
                                <div class="col">
                                    <div class="prod-item__price">150 <span> ₽</span>
                                    </div>
                                </div>
                                <div class="col-auto"><a class="prod-item__btn" href="/#"><img src="/img/svg/shopping-bag.svg" alt=""/></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sCatalog__slide swiper-slide">
                    <div class="prod-item"><a class="prod-item__img-wrap bg-wrap" href="/#">
                            <!-- picture-->
                            <picture class="picture-bg">
                                <source type="image/webp" srcset="/img/@2x/webp/prod-2.webp"/><img class="object-fit-js" src="/img/@2x/prod-2.jpg" alt="" loading="lazy"/>
                            </picture>
                            <!-- /picture--></a>
                        <div class="prod-item__caption"><a class="prod-item__title" href="/#">Комбо Хот-Дог</a>
                            <div class="prod-item__small">Вес: 485 г.
                            </div>
                            <p>Домашние наггетсы <br> Хот-Дог <br> Кола 0,33</p>
                            <div class="prod-item__footer row">
                                <div class="col">
                                    <div class="prod-item__price">450 <span> ₽</span>
                                    </div>
                                </div>
                                <div class="col-auto"><a class="prod-item__btn" href="/#"><img src="/img/svg/shopping-bag.svg" alt=""/></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sCatalog__slide swiper-slide">
                    <div class="prod-item"><a class="prod-item__img-wrap bg-wrap" href="/#">
                            <!-- picture-->
                            <picture class="picture-bg">
                                <source type="image/webp" srcset="/img/@2x/webp/prod-3.webp"/><img class="object-fit-js" src="/img/@2x/prod-3.jpg" alt="" loading="lazy"/>
                            </picture>
                            <!-- /picture--></a>
                        <div class="prod-item__caption"><a class="prod-item__title" href="/#">Нагетсы</a>
                            <div class="prod-item__small">Вес: 485 г.
                            </div>
                            <p>Филе кур девственниц</p>
                            <div class="prod-item__footer row">
                                <div class="col">
                                    <div class="prod-item__price">1 150 <span> ₽</span>
                                    </div>
                                </div>
                                <div class="col-auto"><a class="prod-item__btn" href="/#"><img src="/img/svg/shopping-bag.svg" alt=""/></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sCatalog__slide swiper-slide">
                    <div class="prod-item"><a class="prod-item__img-wrap bg-wrap" href="/#">
                            <!-- picture-->
                            <picture class="picture-bg">
                                <source type="image/webp" srcset="/img/@2x/webp/prod-4.webp"/><img class="object-fit-js" src="/img/@2x/prod-4.jpg" alt="" loading="lazy"/>
                            </picture>
                            <!-- /picture--></a>
                        <div class="prod-item__caption"><a class="prod-item__title" href="/#">Фирменный Las Burger</a>
                            <div class="prod-item__small">Вес: 485 г.
                            </div>
                            <p>Свежая булочка, мраморная говядина medium well, сыр, листья салата, ломтики помидоров, маринованные...</p>
                            <div class="prod-item__footer row">
                                <div class="col">
                                    <div class="prod-item__price">2 150 <span> ₽</span>
                                    </div>
                                </div>
                                <div class="col-auto"><a class="prod-item__btn" href="/#"><img src="/img/svg/shopping-bag.svg" alt=""/></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end sCatalog-->
