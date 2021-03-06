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
                    <h2>?????????????? ????????</h2>
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
                        <div class="prod-item__caption"><a class="prod-item__title" href="#">Burger ???????????? ??????????????</a>
                            <div class="prod-item__small">??????: 485 ??.
                            </div>
                            <p>???????????? ??????????????, ?????????????????? ???????????????? medium well, ??????, ???????????? ????????????, ?????????????? ??????????????????,
                                ????????????????????????...</p>
                            <div class="prod-item__footer row">
                                <div class="col">
                                    <div class="prod-item__price">150 <span> ???</span>
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
                        <div class="prod-item__caption"><a class="prod-item__title" href="#">?????????? ??????-??????</a>
                            <div class="prod-item__small">??????: 485 ??.
                            </div>
                            <p>???????????????? ???????????????? <br> ??????-?????? <br> ???????? 0,33</p>
                            <div class="prod-item__footer row">
                                <div class="col">
                                    <div class="prod-item__price">450 <span> ???</span>
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
                        <div class="prod-item__caption"><a class="prod-item__title" href="#">??????????????</a>
                            <div class="prod-item__small">??????: 485 ??.
                            </div>
                            <p>???????? ?????? ??????????????????????</p>
                            <div class="prod-item__footer row">
                                <div class="col">
                                    <div class="prod-item__price">1 150 <span> ???</span>
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
                        <div class="prod-item__caption"><a class="prod-item__title" href="#">?????????????????? Las Burger</a>
                            <div class="prod-item__small">??????: 485 ??.
                            </div>
                            <p>???????????? ??????????????, ?????????????????? ???????????????? medium well, ??????, ???????????? ????????????, ?????????????? ??????????????????,
                                ????????????????????????...</p>
                            <div class="prod-item__footer row">
                                <div class="col">
                                    <div class="prod-item__price">2 150 <span> ???</span>
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
                        <div class="prod-item__caption"><a class="prod-item__title" href="#">Burger ???????????? ??????????????</a>
                            <div class="prod-item__small">??????: 485 ??.
                            </div>
                            <p>???????????? ??????????????, ?????????????????? ???????????????? medium well, ??????, ???????????? ????????????, ?????????????? ??????????????????,
                                ????????????????????????...</p>
                            <div class="prod-item__footer row">
                                <div class="col">
                                    <div class="prod-item__price">150 <span> ???</span>
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
                        <div class="prod-item__caption"><a class="prod-item__title" href="#">?????????? ??????-??????</a>
                            <div class="prod-item__small">??????: 485 ??.
                            </div>
                            <p>???????????????? ???????????????? <br> ??????-?????? <br> ???????? 0,33</p>
                            <div class="prod-item__footer row">
                                <div class="col">
                                    <div class="prod-item__price">450 <span> ???</span>
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
                        <div class="prod-item__caption"><a class="prod-item__title" href="#">??????????????</a>
                            <div class="prod-item__small">??????: 485 ??.
                            </div>
                            <p>???????? ?????? ??????????????????????</p>
                            <div class="prod-item__footer row">
                                <div class="col">
                                    <div class="prod-item__price">1 150 <span> ???</span>
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
                        <div class="prod-item__caption"><a class="prod-item__title" href="#">?????????????????? Las Burger</a>
                            <div class="prod-item__small">??????: 485 ??.
                            </div>
                            <p>???????????? ??????????????, ?????????????????? ???????????????? medium well, ??????, ???????????? ????????????, ?????????????? ??????????????????,
                                ????????????????????????...</p>
                            <div class="prod-item__footer row">
                                <div class="col">
                                    <div class="prod-item__price">2 150 <span> ???</span>
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
                    <h2>????????</h2>
                </div>
            </div>
        </div>
        <div class="stickyItem stickyItem--js">
            <div class="tabs tabs--js">
                <div class="tabs__caption d-flex">
                    <div class="tabs__btn active">??????
                    </div>
                    <div class="tabs__btn">??????????????
                    </div>
                    <div class="tabs__btn">??????????
                    </div>
                    <div class="tabs__btn">??????-????????
                    </div>
                    <div class="tabs__btn">??????
                    </div>
                    <div class="tabs__btn">??????????????
                    </div>
                </div>
                <div class="tabs__wrap">
                    <div class="tabs__content active">
                        <div class="radio">
                            <input class="radio-btn" type="radio" name="menu" id="menu11" value="??????"
                                   checked="checked"/>
                            <label for="menu11">??????</label>
                        </div>
                        <?php foreach ($categories as $category): ?>
                            <div class="radio">
                                <input class="radio-btn" type="radio" name="menu" id="menu<?= $category['id'].$category['id_parent'] ?>"
                                       value="????????"/>
                                <label for="menu21"><?= $category['category_name'] ?></label>
                            </div>
                        <? endforeach; ?>
                        <div class="radio">
                            <input class="radio-btn" type="radio" name="menu" id="menu31" value="???????????????? ??????"/>
                            <label for="menu31">???????????????? ??????</label>
                        </div>
                        <div class="radio">
                            <input class="radio-btn" type="radio" name="menu" id="menu41" value="?????????????????? ??????"/>
                            <label for="menu41">?????????????????? ??????</label>
                        </div>
                        <div class="radio">
                            <input class="radio-btn" type="radio" name="menu" id="menu51" value="????????"/>
                            <label for="menu51">????????</label>
                        </div>
                        <div class="radio">
                            <input class="radio-btn" type="radio" name="menu" id="menu61" value="????????"/>
                            <label for="menu61">????????</label>
                        </div>
                        <div class="radio">
                            <input class="radio-btn" type="radio" name="menu" id="menu71" value="????????????????"/>
                            <label for="menu71">????????????????</label>
                        </div>
                        <div class="radio">
                            <input class="radio-btn" type="radio" name="menu" id="menu81" value="??????????????"/>
                            <label for="menu81">??????????????</label>
                        </div>
                    </div>
                    <div class="tabs__content">
                        <div class="radio">
                            <input class="radio-btn" type="radio" name="menu" id="menu12" value="??????"
                                   checked="checked"/>
                            <label for="menu12">??????</label>
                        </div>
                        <div class="radio">
                            <input class="radio-btn" type="radio" name="menu" id="menu22" value="????????"/>
                            <label for="menu22">????????</label>
                        </div>
                        <div class="radio">
                            <input class="radio-btn" type="radio" name="menu" id="menu32" value="???????????????? ??????"/>
                            <label for="menu32">???????????????? ??????</label>
                        </div>
                        <div class="radio">
                            <input class="radio-btn" type="radio" name="menu" id="menu42" value="?????????????????? ??????"/>
                            <label for="menu42">?????????????????? ??????</label>
                        </div>
                        <div class="radio">
                            <input class="radio-btn" type="radio" name="menu" id="menu52" value="????????"/>
                            <label for="menu52">????????</label>
                        </div>
                        <div class="radio">
                            <input class="radio-btn" type="radio" name="menu" id="menu62" value="????????"/>
                            <label for="menu62">????????</label>
                        </div>
                        <div class="radio">
                            <input class="radio-btn" type="radio" name="menu" id="menu72" value="????????????????"/>
                            <label for="menu72">????????????????</label>
                        </div>
                        <div class="radio">
                            <input class="radio-btn" type="radio" name="menu" id="menu82" value="??????????????"/>
                            <label for="menu82">??????????????</label>
                        </div>
                    </div>
                    <div class="tabs__content">
                        <div class="radio">
                            <input class="radio-btn" type="radio" name="menu" id="menu13" value="??????"
                                   checked="checked"/>
                            <label for="menu13">??????</label>
                        </div>
                        <div class="radio">
                            <input class="radio-btn" type="radio" name="menu" id="menu23" value="????????"/>
                            <label for="menu23">????????</label>
                        </div>
                        <div class="radio">
                            <input class="radio-btn" type="radio" name="menu" id="menu33" value="???????????????? ??????"/>
                            <label for="menu33">???????????????? ??????</label>
                        </div>
                        <div class="radio">
                            <input class="radio-btn" type="radio" name="menu" id="menu43" value="?????????????????? ??????"/>
                            <label for="menu43">?????????????????? ??????</label>
                        </div>
                        <div class="radio">
                            <input class="radio-btn" type="radio" name="menu" id="menu53" value="????????"/>
                            <label for="menu53">????????</label>
                        </div>
                        <div class="radio">
                            <input class="radio-btn" type="radio" name="menu" id="menu63" value="????????"/>
                            <label for="menu63">????????</label>
                        </div>
                        <div class="radio">
                            <input class="radio-btn" type="radio" name="menu" id="menu73" value="????????????????"/>
                            <label for="menu73">????????????????</label>
                        </div>
                        <div class="radio">
                            <input class="radio-btn" type="radio" name="menu" id="menu83" value="??????????????"/>
                            <label for="menu83">??????????????</label>
                        </div>
                    </div>
                    <div class="tabs__content">
                        <div class="radio">
                            <input class="radio-btn" type="radio" name="menu" id="menu14" value="??????"
                                   checked="checked"/>
                            <label for="menu14">??????</label>
                        </div>
                        <div class="radio">
                            <input class="radio-btn" type="radio" name="menu" id="menu24" value="????????"/>
                            <label for="menu24">????????</label>
                        </div>
                        <div class="radio">
                            <input class="radio-btn" type="radio" name="menu" id="menu34" value="???????????????? ??????"/>
                            <label for="menu34">???????????????? ??????</label>
                        </div>
                        <div class="radio">
                            <input class="radio-btn" type="radio" name="menu" id="menu44" value="?????????????????? ??????"/>
                            <label for="menu44">?????????????????? ??????</label>
                        </div>
                        <div class="radio">
                            <input class="radio-btn" type="radio" name="menu" id="menu54" value="????????"/>
                            <label for="menu54">????????</label>
                        </div>
                        <div class="radio">
                            <input class="radio-btn" type="radio" name="menu" id="menu64" value="????????"/>
                            <label for="menu64">????????</label>
                        </div>
                        <div class="radio">
                            <input class="radio-btn" type="radio" name="menu" id="menu74" value="????????????????"/>
                            <label for="menu74">????????????????</label>
                        </div>
                        <div class="radio">
                            <input class="radio-btn" type="radio" name="menu" id="menu84" value="??????????????"/>
                            <label for="menu84">??????????????</label>
                        </div>
                    </div>
                    <div class="tabs__content">
                        <div class="radio">
                            <input class="radio-btn" type="radio" name="menu" id="menu15" value="??????"
                                   checked="checked"/>
                            <label for="menu15">??????</label>
                        </div>
                        <div class="radio">
                            <input class="radio-btn" type="radio" name="menu" id="menu25" value="????????"/>
                            <label for="menu25">????????</label>
                        </div>
                        <div class="radio">
                            <input class="radio-btn" type="radio" name="menu" id="menu35" value="???????????????? ??????"/>
                            <label for="menu35">???????????????? ??????</label>
                        </div>
                        <div class="radio">
                            <input class="radio-btn" type="radio" name="menu" id="menu45" value="?????????????????? ??????"/>
                            <label for="menu45">?????????????????? ??????</label>
                        </div>
                        <div class="radio">
                            <input class="radio-btn" type="radio" name="menu" id="menu55" value="????????"/>
                            <label for="menu55">????????</label>
                        </div>
                        <div class="radio">
                            <input class="radio-btn" type="radio" name="menu" id="menu65" value="????????"/>
                            <label for="menu65">????????</label>
                        </div>
                        <div class="radio">
                            <input class="radio-btn" type="radio" name="menu" id="menu75" value="????????????????"/>
                            <label for="menu75">????????????????</label>
                        </div>
                        <div class="radio">
                            <input class="radio-btn" type="radio" name="menu" id="menu85" value="??????????????"/>
                            <label for="menu85">??????????????</label>
                        </div>
                    </div>
                    <div class="tabs__content">
                        <div class="radio">
                            <input class="radio-btn" type="radio" name="menu" id="menu16" value="??????"
                                   checked="checked"/>
                            <label for="menu16">??????</label>
                        </div>
                        <div class="radio">
                            <input class="radio-btn" type="radio" name="menu" id="menu26" value="????????"/>
                            <label for="menu26">????????</label>
                        </div>
                        <div class="radio">
                            <input class="radio-btn" type="radio" name="menu" id="menu36" value="???????????????? ??????"/>
                            <label for="menu36">???????????????? ??????</label>
                        </div>
                        <div class="radio">
                            <input class="radio-btn" type="radio" name="menu" id="menu46" value="?????????????????? ??????"/>
                            <label for="menu46">?????????????????? ??????</label>
                        </div>
                        <div class="radio">
                            <input class="radio-btn" type="radio" name="menu" id="menu56" value="????????"/>
                            <label for="menu56">????????</label>
                        </div>
                        <div class="radio">
                            <input class="radio-btn" type="radio" name="menu" id="menu66" value="????????"/>
                            <label for="menu66">????????</label>
                        </div>
                        <div class="radio">
                            <input class="radio-btn" type="radio" name="menu" id="menu76" value="????????????????"/>
                            <label for="menu76">????????????????</label>
                        </div>
                        <div class="radio">
                            <input class="radio-btn" type="radio" name="menu" id="menu86" value="??????????????"/>
                            <label for="menu86">??????????????</label>
                        </div>
                    </div>
                    <div class="tabs__content">
                        <div class="radio">
                            <input class="radio-btn" type="radio" name="menu" id="menu17" value="??????"
                                   checked="checked"/>
                            <label for="menu17">??????</label>
                        </div>
                        <div class="radio">
                            <input class="radio-btn" type="radio" name="menu" id="menu27" value="????????"/>
                            <label for="menu27">????????</label>
                        </div>
                        <div class="radio">
                            <input class="radio-btn" type="radio" name="menu" id="menu37" value="???????????????? ??????"/>
                            <label for="menu37">???????????????? ??????</label>
                        </div>
                        <div class="radio">
                            <input class="radio-btn" type="radio" name="menu" id="menu47" value="?????????????????? ??????"/>
                            <label for="menu47">?????????????????? ??????</label>
                        </div>
                        <div class="radio">
                            <input class="radio-btn" type="radio" name="menu" id="menu57" value="????????"/>
                            <label for="menu57">????????</label>
                        </div>
                        <div class="radio">
                            <input class="radio-btn" type="radio" name="menu" id="menu67" value="????????"/>
                            <label for="menu67">????????</label>
                        </div>
                        <div class="radio">
                            <input class="radio-btn" type="radio" name="menu" id="menu77" value="????????????????"/>
                            <label for="menu77">????????????????</label>
                        </div>
                        <div class="radio">
                            <input class="radio-btn" type="radio" name="menu" id="menu87" value="??????????????"/>
                            <label for="menu87">??????????????</label>
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
                            <div class="prod-item__small">??????: 485 ??.
                            </div>
                            <p>???????????? ??????????????, ?????????????????? ???????????????? medium well, ??????, ???????????? ????????????, ?????????????? ??????????????????,
                                ????????????????????????...</p>
                            <div class="prod-item__footer row">
                                <div class="col">
                                    <div class="prod-item__price"><?= $product["price"] ?> <span> ???</span>
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
                    <div class="prod-item__caption"><a class="prod-item__title" href="#">?????????? ??????-??????</a>
                        <div class="prod-item__small">??????: 485 ??.
                        </div>
                        <p>???????????????? ???????????????? <br> ??????-?????? <br> ???????? 0,33</p>
                        <div class="prod-item__footer row">
                            <div class="col">
                                <div class="prod-item__price">450 <span> ???</span>
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
                    <div class="prod-item__caption"><a class="prod-item__title" href="#">??????????????</a>
                        <div class="prod-item__small">??????: 485 ??.
                        </div>
                        <p>???????? ?????? ??????????????????????</p>
                        <div class="prod-item__footer row">
                            <div class="col">
                                <div class="prod-item__price">1 150 <span> ???</span>
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
                    <div class="prod-item__caption"><a class="prod-item__title" href="#">?????????????????? Las Burger</a>
                        <div class="prod-item__small">??????: 485 ??.
                        </div>
                        <p>???????????? ??????????????, ?????????????????? ???????????????? medium well, ??????, ???????????? ????????????, ?????????????? ??????????????????,
                            ????????????????????????...</p>
                        <div class="prod-item__footer row">
                            <div class="col">
                                <div class="prod-item__price">2 150 <span> ???</span>
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
                    <div class="prod-item__caption"><a class="prod-item__title" href="#">Burger ???????????? ??????????????</a>
                        <div class="prod-item__small">??????: 485 ??.
                        </div>
                        <p>???????????? ??????????????, ?????????????????? ???????????????? medium well, ??????, ???????????? ????????????, ?????????????? ??????????????????,
                            ????????????????????????...</p>
                        <div class="prod-item__footer row">
                            <div class="col">
                                <div class="prod-item__price">150 <span> ???</span>
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
                    <div class="prod-item__caption"><a class="prod-item__title" href="#">?????????? ??????-??????</a>
                        <div class="prod-item__small">??????: 485 ??.
                        </div>
                        <p>???????????????? ???????????????? <br> ??????-?????? <br> ???????? 0,33</p>
                        <div class="prod-item__footer row">
                            <div class="col">
                                <div class="prod-item__price">450 <span> ???</span>
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
                    <div class="prod-item__caption"><a class="prod-item__title" href="#">??????????????</a>
                        <div class="prod-item__small">??????: 485 ??.
                        </div>
                        <p>???????? ?????? ??????????????????????</p>
                        <div class="prod-item__footer row">
                            <div class="col">
                                <div class="prod-item__price">1 150 <span> ???</span>
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
                    <div class="prod-item__caption"><a class="prod-item__title" href="#">?????????????????? Las Burger</a>
                        <div class="prod-item__small">??????: 485 ??.
                        </div>
                        <p>???????????? ??????????????, ?????????????????? ???????????????? medium well, ??????, ???????????? ????????????, ?????????????? ??????????????????,
                            ????????????????????????...</p>
                        <div class="prod-item__footer row">
                            <div class="col">
                                <div class="prod-item__price">2 150 <span> ???</span>
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
                    <div class="prod-item__caption"><a class="prod-item__title" href="#">Burger ???????????? ??????????????</a>
                        <div class="prod-item__small">??????: 485 ??.
                        </div>
                        <p>???????????? ??????????????, ?????????????????? ???????????????? medium well, ??????, ???????????? ????????????, ?????????????? ??????????????????,
                            ????????????????????????...</p>
                        <div class="prod-item__footer row">
                            <div class="col">
                                <div class="prod-item__price">150 <span> ???</span>
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
                    <div class="prod-item__caption"><a class="prod-item__title" href="#">?????????? ??????-??????</a>
                        <div class="prod-item__small">??????: 485 ??.
                        </div>
                        <p>???????????????? ???????????????? <br> ??????-?????? <br> ???????? 0,33</p>
                        <div class="prod-item__footer row">
                            <div class="col">
                                <div class="prod-item__price">450 <span> ???</span>
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
                    <div class="prod-item__caption"><a class="prod-item__title" href="#">??????????????</a>
                        <div class="prod-item__small">??????: 485 ??.
                        </div>
                        <p>???????? ?????? ??????????????????????</p>
                        <div class="prod-item__footer row">
                            <div class="col">
                                <div class="prod-item__price">1 150 <span> ???</span>
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
                    <div class="prod-item__caption"><a class="prod-item__title" href="#">?????????????????? Las Burger</a>
                        <div class="prod-item__small">??????: 485 ??.
                        </div>
                        <p>???????????? ??????????????, ?????????????????? ???????????????? medium well, ??????, ???????????? ????????????, ?????????????? ??????????????????,
                            ????????????????????????...</p>
                        <div class="prod-item__footer row">
                            <div class="col">
                                <div class="prod-item__price">2 150 <span> ???</span>
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
                <h2>?????????? ?????????????? ?? ???????????? ??????????????</h2>
                <p>?????????? ????????????????, ?????? ?????? ???????????? ?????????????? ?? ???????????????????? ???????????????? ?????????? ???????????? ??????????????????????????????. Lorem
                    Ipsum ???????????????????? ????????????, ?????? ?????? ???????????????????????? ?????????? ?????? ?????????? ?????????????????????? ???????????????????? ??????????????, ??
                    ?????????? ???????????????? ?????????????????????????? ???????? ?? ???????????????? ?? ??????????????, ?????????????? ???? ???????????????????? ?????? ?????????????? ????????????????????
                    "?????????? ?????? ??????????.. ?????????? ?????? ??????????.. ?????????? ?????? ??????????.." ???????????? ?????????????????? ?????????????????????? ?????????????? ??
                    ?????????????????? HTML ???????????????????? Lorem Ipsum ?? ???????????????? ???????????? ???? ??????????????????, ?????? ?????? ?????????? ???? ????????????????
                    ????????????</p>
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
