<?php

/* @var $this yii\web\View */


$this->title = 'My Yii Application';
?>
<!-- start headerBlock-->
<div class="headerBlock section" id="headerBlock">
    <div class="container text-center">
        <div class="row">
            <div class="col-xl-9">
                <div class="headerBlock__slider headerBlock__slider--js swiper-container">
                    <div class="swiper-wrapper">
                        <div class="headerBlock__slide swiper-slide"><a class="headerBlock__img-wrap" href="/#">
                                <!-- picture-->
                                <picture>
                                    <source type="image/webp" srcset="/img/@2x/webp/main-banner.webp"
                                            media="(min-width:576px)"/>
                                    <source type="image/webp" srcset="/img/@1x/webp/main-banner.webp"/>
                                    <source type="image/png" srcset="/img/@2x/main-banner.png"
                                            media="(min-width:576px)"/>
                                    <source type="image/png" srcset="/img/@1x/main-banner.png"/>
                                    <img src="/img/@2x/main-banner.png" alt="" loading="lazy"/>
                                </picture>
                                <!-- /picture--></a>
                        </div>
                        <div class="headerBlock__slide swiper-slide"><a class="headerBlock__img-wrap" href="/#">
                                <!-- picture-->
                                <picture>
                                    <source type="image/webp" srcset="/img/@2x/webp/main-banner.webp"
                                            media="(min-width:576px)"/>
                                    <source type="image/webp" srcset="/img/@1x/webp/main-banner.webp"/>
                                    <source type="image/png" srcset="/img/@2x/main-banner.png"
                                            media="(min-width:576px)"/>
                                    <source type="image/png" srcset="/img/@1x/main-banner.png"/>
                                    <img src="/img/@2x/main-banner.png" alt="" loading="lazy"/>
                                </picture>
                                <!-- /picture--></a>
                        </div>
                        <div class="headerBlock__slide swiper-slide"><a class="headerBlock__img-wrap" href="/#">
                                <!-- picture-->
                                <picture>
                                    <source type="image/webp" srcset="/img/@2x/webp/main-banner.webp"
                                            media="(min-width:576px)"/>
                                    <source type="image/webp" srcset="/img/@1x/webp/main-banner.webp"/>
                                    <source type="image/png" srcset="/img/@2x/main-banner.png"
                                            media="(min-width:576px)"/>
                                    <source type="image/png" srcset="/img/@1x/main-banner.png"/>
                                    <img src="/img/@2x/main-banner.png" alt="" loading="lazy"/>
                                </picture>
                                <!-- /picture--></a>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
            <div class="col">
                <div class="row">
                    <div class="col-xl-12 col-sm-auto"><a class="headerBlock__img-wrap" href="/#">
                            <!-- picture-->
                            <picture>
                                <source type="image/webp" srcset="/img/@2x/webp/ban-1.webp"/>
                                <img src="/img/@2x/ban-1.png" alt="" loading="lazy"/>
                            </picture>
                            <!-- /picture--></a>
                    </div>
                    <div class="col-xl-12 col-sm-auto">
                        <div class="headerBlock__img-wrap headerBlock__img-wrap--shipping">
                            <!-- picture-->
                            <picture>
                                <source type="image/webp" srcset="/img/@2x/webp/ban-2.webp"/>
                                <img src="/img/@2x/ban-2.png" alt="" loading="lazy"/>
                            </picture>
                            <!-- /picture-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end headerBlock-->
<!-- start sCatalog-->
<div class="sCatalog section">
    <div class="container">
        <div class="section-title">
            <div class="row">
                <div class="col">
                    <h2>Новинки меню</h2>
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
                    <div class="prod-item"><a class="prod-item__img-wrap bg-wrap" href="#">
                            <!-- picture-->
                            <picture class="picture-bg">
                                <source type="image/webp" srcset="img/@2x/webp/prod-1.webp"/>
                                <img class="object-fit-js" src="img/@2x/prod-1.jpg" alt="" loading="lazy"/>
                            </picture>
                            <!-- /picture--></a>
                        <div class="prod-item__caption"><a class="prod-item__title" href="#">Burger мистер Трюфель</a>
                            <div class="prod-item__small">Вес: 485 г.
                            </div>
                            <p>Свежая булочка, мраморная говядина medium well, сыр, листья салата, ломтики помидоров,
                                маринованные...</p>
                            <div class="prod-item__footer row">
                                <div class="col">
                                    <div class="prod-item__price">150 <span> ₽</span>
                                    </div>
                                </div>
                                <div class="col-auto"><a class="prod-item__btn" href="#"><img
                                                src="img/svg/shopping-bag.svg" alt=""/></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sCatalog__slide swiper-slide">
                    <div class="prod-item"><a class="prod-item__img-wrap bg-wrap" href="#">
                            <!-- picture-->
                            <picture class="picture-bg">
                                <source type="image/webp" srcset="img/@2x/webp/prod-2.webp"/>
                                <img class="object-fit-js" src="img/@2x/prod-2.jpg" alt="" loading="lazy"/>
                            </picture>
                            <!-- /picture--></a>
                        <div class="prod-item__caption"><a class="prod-item__title" href="#">Комбо Хот-Дог</a>
                            <div class="prod-item__small">Вес: 485 г.
                            </div>
                            <p>Домашние наггетсы <br> Хот-Дог <br> Кола 0,33</p>
                            <div class="prod-item__footer row">
                                <div class="col">
                                    <div class="prod-item__price">450 <span> ₽</span>
                                    </div>
                                </div>
                                <div class="col-auto"><a class="prod-item__btn" href="#"><img
                                                src="img/svg/shopping-bag.svg" alt=""/></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sCatalog__slide swiper-slide">
                    <div class="prod-item"><a class="prod-item__img-wrap bg-wrap" href="#">
                            <!-- picture-->
                            <picture class="picture-bg">
                                <source type="image/webp" srcset="img/@2x/webp/prod-3.webp"/>
                                <img class="object-fit-js" src="img/@2x/prod-3.jpg" alt="" loading="lazy"/>
                            </picture>
                            <!-- /picture--></a>
                        <div class="prod-item__caption"><a class="prod-item__title" href="#">Нагетсы</a>
                            <div class="prod-item__small">Вес: 485 г.
                            </div>
                            <p>Филе кур девственниц</p>
                            <div class="prod-item__footer row">
                                <div class="col">
                                    <div class="prod-item__price">1 150 <span> ₽</span>
                                    </div>
                                </div>
                                <div class="col-auto"><a class="prod-item__btn" href="#"><img
                                                src="img/svg/shopping-bag.svg" alt=""/></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sCatalog__slide swiper-slide">
                    <div class="prod-item"><a class="prod-item__img-wrap bg-wrap" href="#">
                            <!-- picture-->
                            <picture class="picture-bg">
                                <source type="image/webp" srcset="img/@2x/webp/prod-4.webp"/>
                                <img class="object-fit-js" src="img/@2x/prod-4.jpg" alt="" loading="lazy"/>
                            </picture>
                            <!-- /picture--></a>
                        <div class="prod-item__caption"><a class="prod-item__title" href="#">Фирменный Las Burger</a>
                            <div class="prod-item__small">Вес: 485 г.
                            </div>
                            <p>Свежая булочка, мраморная говядина medium well, сыр, листья салата, ломтики помидоров,
                                маринованные...</p>
                            <div class="prod-item__footer row">
                                <div class="col">
                                    <div class="prod-item__price">2 150 <span> ₽</span>
                                    </div>
                                </div>
                                <div class="col-auto"><a class="prod-item__btn" href="#"><img
                                                src="img/svg/shopping-bag.svg" alt=""/></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sCatalog__slide swiper-slide">
                    <div class="prod-item"><a class="prod-item__img-wrap bg-wrap" href="#">
                            <!-- picture-->
                            <picture class="picture-bg">
                                <source type="image/webp" srcset="img/@2x/webp/prod-1.webp"/>
                                <img class="object-fit-js" src="img/@2x/prod-1.jpg" alt="" loading="lazy"/>
                            </picture>
                            <!-- /picture--></a>
                        <div class="prod-item__caption"><a class="prod-item__title" href="#">Burger мистер Трюфель</a>
                            <div class="prod-item__small">Вес: 485 г.
                            </div>
                            <p>Свежая булочка, мраморная говядина medium well, сыр, листья салата, ломтики помидоров,
                                маринованные...</p>
                            <div class="prod-item__footer row">
                                <div class="col">
                                    <div class="prod-item__price">150 <span> ₽</span>
                                    </div>
                                </div>
                                <div class="col-auto"><a class="prod-item__btn" href="#"><img
                                                src="img/svg/shopping-bag.svg" alt=""/></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sCatalog__slide swiper-slide">
                    <div class="prod-item"><a class="prod-item__img-wrap bg-wrap" href="#">
                            <!-- picture-->
                            <picture class="picture-bg">
                                <source type="image/webp" srcset="img/@2x/webp/prod-2.webp"/>
                                <img class="object-fit-js" src="img/@2x/prod-2.jpg" alt="" loading="lazy"/>
                            </picture>
                            <!-- /picture--></a>
                        <div class="prod-item__caption"><a class="prod-item__title" href="#">Комбо Хот-Дог</a>
                            <div class="prod-item__small">Вес: 485 г.
                            </div>
                            <p>Домашние наггетсы <br> Хот-Дог <br> Кола 0,33</p>
                            <div class="prod-item__footer row">
                                <div class="col">
                                    <div class="prod-item__price">450 <span> ₽</span>
                                    </div>
                                </div>
                                <div class="col-auto"><a class="prod-item__btn" href="#"><img
                                                src="img/svg/shopping-bag.svg" alt=""/></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sCatalog__slide swiper-slide">
                    <div class="prod-item"><a class="prod-item__img-wrap bg-wrap" href="#">
                            <!-- picture-->
                            <picture class="picture-bg">
                                <source type="image/webp" srcset="img/@2x/webp/prod-3.webp"/>
                                <img class="object-fit-js" src="img/@2x/prod-3.jpg" alt="" loading="lazy"/>
                            </picture>
                            <!-- /picture--></a>
                        <div class="prod-item__caption"><a class="prod-item__title" href="#">Нагетсы</a>
                            <div class="prod-item__small">Вес: 485 г.
                            </div>
                            <p>Филе кур девственниц</p>
                            <div class="prod-item__footer row">
                                <div class="col">
                                    <div class="prod-item__price">1 150 <span> ₽</span>
                                    </div>
                                </div>
                                <div class="col-auto"><a class="prod-item__btn" href="#"><img
                                                src="img/svg/shopping-bag.svg" alt=""/></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sCatalog__slide swiper-slide">
                    <div class="prod-item"><a class="prod-item__img-wrap bg-wrap" href="#">
                            <!-- picture-->
                            <picture class="picture-bg">
                                <source type="image/webp" srcset="img/@2x/webp/prod-4.webp"/>
                                <img class="object-fit-js" src="img/@2x/prod-4.jpg" alt="" loading="lazy"/>
                            </picture>
                            <!-- /picture--></a>
                        <div class="prod-item__caption"><a class="prod-item__title" href="#">Фирменный Las Burger</a>
                            <div class="prod-item__small">Вес: 485 г.
                            </div>
                            <p>Свежая булочка, мраморная говядина medium well, сыр, листья салата, ломтики помидоров,
                                маринованные...</p>
                            <div class="prod-item__footer row">
                                <div class="col">
                                    <div class="prod-item__price">2 150 <span> ₽</span>
                                    </div>
                                </div>
                                <div class="col-auto"><a class="prod-item__btn" href="#"><img
                                                src="img/svg/shopping-bag.svg" alt=""/></a>
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
<!-- start sCatalog-->
<div class="sCatalog section stickyContainer stickyContainer--js">
    <div class="container">
        <div class="section-title">
            <div class="row">
                <div class="col">
                    <h2>Меню</h2>
                </div>
            </div>
        </div>
        <div class="stickyItem stickyItem--js">
            <div class="tabs tabs--js">
                <div class="tabs__caption d-flex">
                    <div class="tabs__btn active">Все
                    </div>
                    <div class="tabs__btn">Закуски
                    </div>
                    <div class="tabs__btn">Пицца
                    </div>
                    <div class="tabs__btn">Хот-доги
                    </div>
                    <div class="tabs__btn">Бар
                    </div>
                    <div class="tabs__btn">Десерты
                    </div>
                </div>
                <div class="tabs__wrap">
                    <div class="tabs__content active">
                        <div class="radio">
                            <input class="radio-btn" type="radio" name="menu" id="menu11" value="Все"
                                   checked="checked"/>
                            <label for="menu11">Все</label>
                        </div>
                        <?php foreach ($categories as $category): ?>
                            <div class="radio">
                                <input class="radio-btn" type="radio" name="menu" id="menu<?= $category['id'].$category['id_parent'] ?>"
                                       value="Кофе"/>
                                <label for="menu21"><?= $category['category_name'] ?></label>
                            </div>
                        <? endforeach; ?>
                        <div class="radio">
                            <input class="radio-btn" type="radio" name="menu" id="menu31" value="Травяные чаи"/>
                            <label for="menu31">Травяные чаи</label>
                        </div>
                        <div class="radio">
                            <input class="radio-btn" type="radio" name="menu" id="menu41" value="Китайские чаи"/>
                            <label for="menu41">Китайские чаи</label>
                        </div>
                        <div class="radio">
                            <input class="radio-btn" type="radio" name="menu" id="menu51" value="Пиво"/>
                            <label for="menu51">Пиво</label>
                        </div>
                        <div class="radio">
                            <input class="radio-btn" type="radio" name="menu" id="menu61" value="Вода"/>
                            <label for="menu61">Вода</label>
                        </div>
                        <div class="radio">
                            <input class="radio-btn" type="radio" name="menu" id="menu71" value="Лимонады"/>
                            <label for="menu71">Лимонады</label>
                        </div>
                        <div class="radio">
                            <input class="radio-btn" type="radio" name="menu" id="menu81" value="Десерты"/>
                            <label for="menu81">Десерты</label>
                        </div>
                    </div>
                    <div class="tabs__content">
                        <div class="radio">
                            <input class="radio-btn" type="radio" name="menu" id="menu12" value="Все"
                                   checked="checked"/>
                            <label for="menu12">Все</label>
                        </div>
                        <div class="radio">
                            <input class="radio-btn" type="radio" name="menu" id="menu22" value="Кофе"/>
                            <label for="menu22">Кофе</label>
                        </div>
                        <div class="radio">
                            <input class="radio-btn" type="radio" name="menu" id="menu32" value="Травяные чаи"/>
                            <label for="menu32">Травяные чаи</label>
                        </div>
                        <div class="radio">
                            <input class="radio-btn" type="radio" name="menu" id="menu42" value="Китайские чаи"/>
                            <label for="menu42">Китайские чаи</label>
                        </div>
                        <div class="radio">
                            <input class="radio-btn" type="radio" name="menu" id="menu52" value="Пиво"/>
                            <label for="menu52">Пиво</label>
                        </div>
                        <div class="radio">
                            <input class="radio-btn" type="radio" name="menu" id="menu62" value="Вода"/>
                            <label for="menu62">Вода</label>
                        </div>
                        <div class="radio">
                            <input class="radio-btn" type="radio" name="menu" id="menu72" value="Лимонады"/>
                            <label for="menu72">Лимонады</label>
                        </div>
                        <div class="radio">
                            <input class="radio-btn" type="radio" name="menu" id="menu82" value="Десерты"/>
                            <label for="menu82">Десерты</label>
                        </div>
                    </div>
                    <div class="tabs__content">
                        <div class="radio">
                            <input class="radio-btn" type="radio" name="menu" id="menu13" value="Все"
                                   checked="checked"/>
                            <label for="menu13">Все</label>
                        </div>
                        <div class="radio">
                            <input class="radio-btn" type="radio" name="menu" id="menu23" value="Кофе"/>
                            <label for="menu23">Кофе</label>
                        </div>
                        <div class="radio">
                            <input class="radio-btn" type="radio" name="menu" id="menu33" value="Травяные чаи"/>
                            <label for="menu33">Травяные чаи</label>
                        </div>
                        <div class="radio">
                            <input class="radio-btn" type="radio" name="menu" id="menu43" value="Китайские чаи"/>
                            <label for="menu43">Китайские чаи</label>
                        </div>
                        <div class="radio">
                            <input class="radio-btn" type="radio" name="menu" id="menu53" value="Пиво"/>
                            <label for="menu53">Пиво</label>
                        </div>
                        <div class="radio">
                            <input class="radio-btn" type="radio" name="menu" id="menu63" value="Вода"/>
                            <label for="menu63">Вода</label>
                        </div>
                        <div class="radio">
                            <input class="radio-btn" type="radio" name="menu" id="menu73" value="Лимонады"/>
                            <label for="menu73">Лимонады</label>
                        </div>
                        <div class="radio">
                            <input class="radio-btn" type="radio" name="menu" id="menu83" value="Десерты"/>
                            <label for="menu83">Десерты</label>
                        </div>
                    </div>
                    <div class="tabs__content">
                        <div class="radio">
                            <input class="radio-btn" type="radio" name="menu" id="menu14" value="Все"
                                   checked="checked"/>
                            <label for="menu14">Все</label>
                        </div>
                        <div class="radio">
                            <input class="radio-btn" type="radio" name="menu" id="menu24" value="Кофе"/>
                            <label for="menu24">Кофе</label>
                        </div>
                        <div class="radio">
                            <input class="radio-btn" type="radio" name="menu" id="menu34" value="Травяные чаи"/>
                            <label for="menu34">Травяные чаи</label>
                        </div>
                        <div class="radio">
                            <input class="radio-btn" type="radio" name="menu" id="menu44" value="Китайские чаи"/>
                            <label for="menu44">Китайские чаи</label>
                        </div>
                        <div class="radio">
                            <input class="radio-btn" type="radio" name="menu" id="menu54" value="Пиво"/>
                            <label for="menu54">Пиво</label>
                        </div>
                        <div class="radio">
                            <input class="radio-btn" type="radio" name="menu" id="menu64" value="Вода"/>
                            <label for="menu64">Вода</label>
                        </div>
                        <div class="radio">
                            <input class="radio-btn" type="radio" name="menu" id="menu74" value="Лимонады"/>
                            <label for="menu74">Лимонады</label>
                        </div>
                        <div class="radio">
                            <input class="radio-btn" type="radio" name="menu" id="menu84" value="Десерты"/>
                            <label for="menu84">Десерты</label>
                        </div>
                    </div>
                    <div class="tabs__content">
                        <div class="radio">
                            <input class="radio-btn" type="radio" name="menu" id="menu15" value="Все"
                                   checked="checked"/>
                            <label for="menu15">Все</label>
                        </div>
                        <div class="radio">
                            <input class="radio-btn" type="radio" name="menu" id="menu25" value="Кофе"/>
                            <label for="menu25">Кофе</label>
                        </div>
                        <div class="radio">
                            <input class="radio-btn" type="radio" name="menu" id="menu35" value="Травяные чаи"/>
                            <label for="menu35">Травяные чаи</label>
                        </div>
                        <div class="radio">
                            <input class="radio-btn" type="radio" name="menu" id="menu45" value="Китайские чаи"/>
                            <label for="menu45">Китайские чаи</label>
                        </div>
                        <div class="radio">
                            <input class="radio-btn" type="radio" name="menu" id="menu55" value="Пиво"/>
                            <label for="menu55">Пиво</label>
                        </div>
                        <div class="radio">
                            <input class="radio-btn" type="radio" name="menu" id="menu65" value="Вода"/>
                            <label for="menu65">Вода</label>
                        </div>
                        <div class="radio">
                            <input class="radio-btn" type="radio" name="menu" id="menu75" value="Лимонады"/>
                            <label for="menu75">Лимонады</label>
                        </div>
                        <div class="radio">
                            <input class="radio-btn" type="radio" name="menu" id="menu85" value="Десерты"/>
                            <label for="menu85">Десерты</label>
                        </div>
                    </div>
                    <div class="tabs__content">
                        <div class="radio">
                            <input class="radio-btn" type="radio" name="menu" id="menu16" value="Все"
                                   checked="checked"/>
                            <label for="menu16">Все</label>
                        </div>
                        <div class="radio">
                            <input class="radio-btn" type="radio" name="menu" id="menu26" value="Кофе"/>
                            <label for="menu26">Кофе</label>
                        </div>
                        <div class="radio">
                            <input class="radio-btn" type="radio" name="menu" id="menu36" value="Травяные чаи"/>
                            <label for="menu36">Травяные чаи</label>
                        </div>
                        <div class="radio">
                            <input class="radio-btn" type="radio" name="menu" id="menu46" value="Китайские чаи"/>
                            <label for="menu46">Китайские чаи</label>
                        </div>
                        <div class="radio">
                            <input class="radio-btn" type="radio" name="menu" id="menu56" value="Пиво"/>
                            <label for="menu56">Пиво</label>
                        </div>
                        <div class="radio">
                            <input class="radio-btn" type="radio" name="menu" id="menu66" value="Вода"/>
                            <label for="menu66">Вода</label>
                        </div>
                        <div class="radio">
                            <input class="radio-btn" type="radio" name="menu" id="menu76" value="Лимонады"/>
                            <label for="menu76">Лимонады</label>
                        </div>
                        <div class="radio">
                            <input class="radio-btn" type="radio" name="menu" id="menu86" value="Десерты"/>
                            <label for="menu86">Десерты</label>
                        </div>
                    </div>
                    <div class="tabs__content">
                        <div class="radio">
                            <input class="radio-btn" type="radio" name="menu" id="menu17" value="Все"
                                   checked="checked"/>
                            <label for="menu17">Все</label>
                        </div>
                        <div class="radio">
                            <input class="radio-btn" type="radio" name="menu" id="menu27" value="Кофе"/>
                            <label for="menu27">Кофе</label>
                        </div>
                        <div class="radio">
                            <input class="radio-btn" type="radio" name="menu" id="menu37" value="Травяные чаи"/>
                            <label for="menu37">Травяные чаи</label>
                        </div>
                        <div class="radio">
                            <input class="radio-btn" type="radio" name="menu" id="menu47" value="Китайские чаи"/>
                            <label for="menu47">Китайские чаи</label>
                        </div>
                        <div class="radio">
                            <input class="radio-btn" type="radio" name="menu" id="menu57" value="Пиво"/>
                            <label for="menu57">Пиво</label>
                        </div>
                        <div class="radio">
                            <input class="radio-btn" type="radio" name="menu" id="menu67" value="Вода"/>
                            <label for="menu67">Вода</label>
                        </div>
                        <div class="radio">
                            <input class="radio-btn" type="radio" name="menu" id="menu77" value="Лимонады"/>
                            <label for="menu77">Лимонады</label>
                        </div>
                        <div class="radio">
                            <input class="radio-btn" type="radio" name="menu" id="menu87" value="Десерты"/>
                            <label for="menu87">Десерты</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <?php foreach ($dataProvider->getModels() as $product): ?>
                <div class="sCatalog__col col-xl-3 col-lg-4 col-sm-6">
                    <div class="prod-item"><a class="prod-item__img-wrap bg-wrap"
                                              href="<?= \yii\helpers\Url::to(['site/product', 'id' => $product['id']]); ?>">
                            <!-- picture-->
                            <picture class="picture-bg">
                                <source type="image/webp" srcset="img/@2x/webp/prod-1.webp"/>
                                <img class="object-fit-js" src="img/@2x/prod-1.jpg" alt="" loading="lazy"/>
                            </picture>
                            <!-- /picture--></a>
                        <div class="prod-item__caption"><a class="prod-item__title" href="#"><?= $product["name"] ?></a>
                            <div class="prod-item__small">Вес: 485 г.
                            </div>
                            <p>Свежая булочка, мраморная говядина medium well, сыр, листья салата, ломтики помидоров,
                                маринованные...</p>
                            <div class="prod-item__footer row">
                                <div class="col">
                                    <div class="prod-item__price"><?= $product["price"] ?> <span> ₽</span>
                                    </div>
                                </div>
                                <div class="col-auto"><a class="prod-item__btn" href=""><img
                                                src="img/svg/shopping-bag.svg" alt=""/></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            <div class="sCatalog__col col-xl-3 col-lg-4 col-sm-6">
                <div class="prod-item"><a class="prod-item__img-wrap bg-wrap" href="#">
                        <!-- picture-->
                        <picture class="picture-bg">
                            <source type="image/webp" srcset="img/@2x/webp/prod-2.webp"/>
                            <img class="object-fit-js" src="img/@2x/prod-2.jpg" alt="" loading="lazy"/>
                        </picture>
                        <!-- /picture--></a>
                    <div class="prod-item__caption"><a class="prod-item__title" href="#">Комбо Хот-Дог</a>
                        <div class="prod-item__small">Вес: 485 г.
                        </div>
                        <p>Домашние наггетсы <br> Хот-Дог <br> Кола 0,33</p>
                        <div class="prod-item__footer row">
                            <div class="col">
                                <div class="prod-item__price">450 <span> ₽</span>
                                </div>
                            </div>
                            <div class="col-auto"><a class="prod-item__btn" href="#"><img src="img/svg/shopping-bag.svg"
                                                                                          alt=""/></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sCatalog__col col-xl-3 col-lg-4 col-sm-6">
                <div class="prod-item"><a class="prod-item__img-wrap bg-wrap" href="#">
                        <!-- picture-->
                        <picture class="picture-bg">
                            <source type="image/webp" srcset="img/@2x/webp/prod-3.webp"/>
                            <img class="object-fit-js" src="img/@2x/prod-3.jpg" alt="" loading="lazy"/>
                        </picture>
                        <!-- /picture--></a>
                    <div class="prod-item__caption"><a class="prod-item__title" href="#">Нагетсы</a>
                        <div class="prod-item__small">Вес: 485 г.
                        </div>
                        <p>Филе кур девственниц</p>
                        <div class="prod-item__footer row">
                            <div class="col">
                                <div class="prod-item__price">1 150 <span> ₽</span>
                                </div>
                            </div>
                            <div class="col-auto"><a class="prod-item__btn" href="#"><img src="img/svg/shopping-bag.svg"
                                                                                          alt=""/></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sCatalog__col col-xl-3 col-lg-4 col-sm-6">
                <div class="prod-item"><a class="prod-item__img-wrap bg-wrap" href="#">
                        <!-- picture-->
                        <picture class="picture-bg">
                            <source type="image/webp" srcset="img/@2x/webp/prod-4.webp"/>
                            <img class="object-fit-js" src="img/@2x/prod-4.jpg" alt="" loading="lazy"/>
                        </picture>
                        <!-- /picture--></a>
                    <div class="prod-item__caption"><a class="prod-item__title" href="#">Фирменный Las Burger</a>
                        <div class="prod-item__small">Вес: 485 г.
                        </div>
                        <p>Свежая булочка, мраморная говядина medium well, сыр, листья салата, ломтики помидоров,
                            маринованные...</p>
                        <div class="prod-item__footer row">
                            <div class="col">
                                <div class="prod-item__price">2 150 <span> ₽</span>
                                </div>
                            </div>
                            <div class="col-auto"><a class="prod-item__btn" href="#"><img src="img/svg/shopping-bag.svg"
                                                                                          alt=""/></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sCatalog__col col-xl-3 col-lg-4 col-sm-6">
                <div class="prod-item"><a class="prod-item__img-wrap bg-wrap" href="#">
                        <!-- picture-->
                        <picture class="picture-bg">
                            <source type="image/webp" srcset="img/@2x/webp/prod-1.webp"/>
                            <img class="object-fit-js" src="img/@2x/prod-1.jpg" alt="" loading="lazy"/>
                        </picture>
                        <!-- /picture--></a>
                    <div class="prod-item__caption"><a class="prod-item__title" href="#">Burger мистер Трюфель</a>
                        <div class="prod-item__small">Вес: 485 г.
                        </div>
                        <p>Свежая булочка, мраморная говядина medium well, сыр, листья салата, ломтики помидоров,
                            маринованные...</p>
                        <div class="prod-item__footer row">
                            <div class="col">
                                <div class="prod-item__price">150 <span> ₽</span>
                                </div>
                            </div>
                            <div class="col-auto"><a class="prod-item__btn" href="#"><img src="img/svg/shopping-bag.svg"
                                                                                          alt=""/></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sCatalog__col col-xl-3 col-lg-4 col-sm-6">
                <div class="prod-item"><a class="prod-item__img-wrap bg-wrap" href="#">
                        <!-- picture-->
                        <picture class="picture-bg">
                            <source type="image/webp" srcset="img/@2x/webp/prod-2.webp"/>
                            <img class="object-fit-js" src="img/@2x/prod-2.jpg" alt="" loading="lazy"/>
                        </picture>
                        <!-- /picture--></a>
                    <div class="prod-item__caption"><a class="prod-item__title" href="#">Комбо Хот-Дог</a>
                        <div class="prod-item__small">Вес: 485 г.
                        </div>
                        <p>Домашние наггетсы <br> Хот-Дог <br> Кола 0,33</p>
                        <div class="prod-item__footer row">
                            <div class="col">
                                <div class="prod-item__price">450 <span> ₽</span>
                                </div>
                            </div>
                            <div class="col-auto"><a class="prod-item__btn" href="#"><img src="img/svg/shopping-bag.svg"
                                                                                          alt=""/></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sCatalog__col col-xl-3 col-lg-4 col-sm-6">
                <div class="prod-item"><a class="prod-item__img-wrap bg-wrap" href="#">
                        <!-- picture-->
                        <picture class="picture-bg">
                            <source type="image/webp" srcset="img/@2x/webp/prod-3.webp"/>
                            <img class="object-fit-js" src="img/@2x/prod-3.jpg" alt="" loading="lazy"/>
                        </picture>
                        <!-- /picture--></a>
                    <div class="prod-item__caption"><a class="prod-item__title" href="#">Нагетсы</a>
                        <div class="prod-item__small">Вес: 485 г.
                        </div>
                        <p>Филе кур девственниц</p>
                        <div class="prod-item__footer row">
                            <div class="col">
                                <div class="prod-item__price">1 150 <span> ₽</span>
                                </div>
                            </div>
                            <div class="col-auto"><a class="prod-item__btn" href="#"><img src="img/svg/shopping-bag.svg"
                                                                                          alt=""/></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sCatalog__col col-xl-3 col-lg-4 col-sm-6">
                <div class="prod-item"><a class="prod-item__img-wrap bg-wrap" href="#">
                        <!-- picture-->
                        <picture class="picture-bg">
                            <source type="image/webp" srcset="img/@2x/webp/prod-4.webp"/>
                            <img class="object-fit-js" src="img/@2x/prod-4.jpg" alt="" loading="lazy"/>
                        </picture>
                        <!-- /picture--></a>
                    <div class="prod-item__caption"><a class="prod-item__title" href="#">Фирменный Las Burger</a>
                        <div class="prod-item__small">Вес: 485 г.
                        </div>
                        <p>Свежая булочка, мраморная говядина medium well, сыр, листья салата, ломтики помидоров,
                            маринованные...</p>
                        <div class="prod-item__footer row">
                            <div class="col">
                                <div class="prod-item__price">2 150 <span> ₽</span>
                                </div>
                            </div>
                            <div class="col-auto"><a class="prod-item__btn" href="#"><img src="img/svg/shopping-bag.svg"
                                                                                          alt=""/></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sCatalog__col col-xl-3 col-lg-4 col-sm-6">
                <div class="prod-item"><a class="prod-item__img-wrap bg-wrap" href="#">
                        <!-- picture-->
                        <picture class="picture-bg">
                            <source type="image/webp" srcset="img/@2x/webp/prod-1.webp"/>
                            <img class="object-fit-js" src="img/@2x/prod-1.jpg" alt="" loading="lazy"/>
                        </picture>
                        <!-- /picture--></a>
                    <div class="prod-item__caption"><a class="prod-item__title" href="#">Burger мистер Трюфель</a>
                        <div class="prod-item__small">Вес: 485 г.
                        </div>
                        <p>Свежая булочка, мраморная говядина medium well, сыр, листья салата, ломтики помидоров,
                            маринованные...</p>
                        <div class="prod-item__footer row">
                            <div class="col">
                                <div class="prod-item__price">150 <span> ₽</span>
                                </div>
                            </div>
                            <div class="col-auto"><a class="prod-item__btn" href="#"><img src="img/svg/shopping-bag.svg"
                                                                                          alt=""/></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sCatalog__col col-xl-3 col-lg-4 col-sm-6">
                <div class="prod-item"><a class="prod-item__img-wrap bg-wrap" href="#">
                        <!-- picture-->
                        <picture class="picture-bg">
                            <source type="image/webp" srcset="img/@2x/webp/prod-2.webp"/>
                            <img class="object-fit-js" src="img/@2x/prod-2.jpg" alt="" loading="lazy"/>
                        </picture>
                        <!-- /picture--></a>
                    <div class="prod-item__caption"><a class="prod-item__title" href="#">Комбо Хот-Дог</a>
                        <div class="prod-item__small">Вес: 485 г.
                        </div>
                        <p>Домашние наггетсы <br> Хот-Дог <br> Кола 0,33</p>
                        <div class="prod-item__footer row">
                            <div class="col">
                                <div class="prod-item__price">450 <span> ₽</span>
                                </div>
                            </div>
                            <div class="col-auto"><a class="prod-item__btn" href="#"><img src="img/svg/shopping-bag.svg"
                                                                                          alt=""/></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sCatalog__col col-xl-3 col-lg-4 col-sm-6">
                <div class="prod-item"><a class="prod-item__img-wrap bg-wrap" href="#">
                        <!-- picture-->
                        <picture class="picture-bg">
                            <source type="image/webp" srcset="img/@2x/webp/prod-3.webp"/>
                            <img class="object-fit-js" src="img/@2x/prod-3.jpg" alt="" loading="lazy"/>
                        </picture>
                        <!-- /picture--></a>
                    <div class="prod-item__caption"><a class="prod-item__title" href="#">Нагетсы</a>
                        <div class="prod-item__small">Вес: 485 г.
                        </div>
                        <p>Филе кур девственниц</p>
                        <div class="prod-item__footer row">
                            <div class="col">
                                <div class="prod-item__price">1 150 <span> ₽</span>
                                </div>
                            </div>
                            <div class="col-auto"><a class="prod-item__btn" href="#"><img src="img/svg/shopping-bag.svg"
                                                                                          alt=""/></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sCatalog__col col-xl-3 col-lg-4 col-sm-6">
                <div class="prod-item"><a class="prod-item__img-wrap bg-wrap" href="#">
                        <!-- picture-->
                        <picture class="picture-bg">
                            <source type="image/webp" srcset="img/@2x/webp/prod-4.webp"/>
                            <img class="object-fit-js" src="img/@2x/prod-4.jpg" alt="" loading="lazy"/>
                        </picture>
                        <!-- /picture--></a>
                    <div class="prod-item__caption"><a class="prod-item__title" href="#">Фирменный Las Burger</a>
                        <div class="prod-item__small">Вес: 485 г.
                        </div>
                        <p>Свежая булочка, мраморная говядина medium well, сыр, листья салата, ломтики помидоров,
                            маринованные...</p>
                        <div class="prod-item__footer row">
                            <div class="col">
                                <div class="prod-item__price">2 150 <span> ₽</span>
                                </div>
                            </div>
                            <div class="col-auto"><a class="prod-item__btn" href="#"><img src="img/svg/shopping-bag.svg"
                                                                                          alt=""/></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end sCatalog-->
<!-- start sContent-->
<section class="sContent sContent--seo section" style="background: #FFCE0B;">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h2>Самые вкусные и сочные Бургеры</h2>
                <p>Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem
                    Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона, а
                    также реальное распределение букв и пробелов в абзацах, которое не получается при простой дубликации
                    "Здесь ваш текст.. Здесь ваш текст.. Здесь ваш текст.." Многие программы электронной вёрстки и
                    редакторы HTML используют Lorem Ipsum в качестве текста по умолчанию, так что поиск по ключевым
                    словам</p>
            </div>
        </div>
    </div>
    <!-- picture-->
    <picture>
        <source type="image/webp" srcset="img/@2x/webp/content-img.webp" media="(min-width:576px)"/>
        <source type="image/webp" srcset="img/@1x/webp/content-img.webp"/>
        <source type="image/jpg" srcset="img/@2x/content-img.jpg" media="(min-width:576px)"/>
        <source type="image/jpg" srcset="img/@1x/content-img.jpg"/>
        <img class="object-fit-js" src="img/@2x/content-img.jpg" alt="" loading="lazy"/>
    </picture>
    <!-- /picture-->
</section>
<!-- end sContent-->
