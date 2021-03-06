<?php

use yii\helpers\Html;
use frontend\assets\AppAsset;
/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <?php $this->registerCsrfMetaTags() ?>
    <meta name="description" content="о чем страница">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title><?= Html::encode($this->title) ?></title>
    <link type="image/ico" href="/img/favicon.ico" rel="shortcut icon"><meta name="format-detection" content="telephone=no"> <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
    <link href="<?=Yii::getAlias('@web') ?>/libs/@fancyapps/fancybox/jquery.fancybox.min.css" rel="stylesheet"/>
    <link href="<?=Yii::getAlias('@web') ?>/css/main.min.css" rel="stylesheet"/>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div class="main-wrapper">
    <div class="menu-mobile menu-mobile--js d-lg-none">
        <div class="toggle-menu-mobile toggle-menu-mobile--js"><span></span>
        </div>
        <div class="menu-mobile__inner">
            <ul class="menu" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
                <li class="menu-item" itemprop="item"><a href="/#" itemprop="url">О нас</a></li>
                <li class="menu-item" itemprop="item"><a href="/#" itemprop="url">Меню</a></li>
                <li class="menu-item" itemprop="item"><a href="/#" itemprop="url">Оплата и доставка</a></li>
                <li class="menu-item" itemprop="item"><a href="/#" itemprop="url">Контакты</a></li>
            </ul>
            <div class="text-right"></div>
        </div>
    </div>
    <!--  мобильное меню-->
    <!-- start top-nav-->
    <div class="top-nav block-with-lazy">
        <div class="container">
            <div class="row">
                <div class="col-lg-auto col"> <a class="top-nav__logo" href="/">
                        <!-- picture-->
                        <picture>
                            <source type="image/webp" srcset="/img/@2x/webp/logo.webp"/><img src="/img/@2x/logo.jpg" alt="" loading="lazy"/>
                        </picture>
                        <!-- /picture--></a>
                </div>
                <div class="col-lg order-lg-0 order-last">
                    <div class="d-none d-lg-block">
                        <ul class="menu" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
                            <li class="menu-item" itemprop="item"><a href="/#" itemprop="url">О нас</a></li>
                            <li class="menu-item" itemprop="item"><a href="/#" itemprop="url">Меню</a></li>
                            <li class="menu-item" itemprop="item"><a href="/#" itemprop="url">Оплата и доставка</a></li>
                            <li class="menu-item" itemprop="item"><a href="/#" itemprop="url">Контакты</a></li>
                        </ul>
                    </div>
                    <div class="search-block">
                        <form>
                            <input class="form-control" type="text" placeholder="Поиск по сайту..."/>
                            <button>
                                <svg class="icon icon-search ">
                                    <use xlink:href="/img/svg/sprite.svg#search"></use>
                                </svg>
                            </button>
                        </form>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="top-nav__links d-flex"> <a class="top-nav__tel" href="/tel:8-928-77-36-777">8-928-77-36-777</a>
                        <div class="d-flex"><a class="ms-2" href="/#"><img src="/img/svg/whatsapp.svg" alt=""/></a><a class="ms-2" href="/#"><img src="/img/svg/telegram.svg" alt=""/></a><a class="ms-2" href="/#"><img src="/img/svg/viber.svg" alt=""/></a></div>
                        <div class="toggle-menu-mobile toggle-menu-mobile--js d-lg-none ms-2"><span></span>
                        </div>
                    </div><a class="btn-basket btn-accent" href="/#"><img src="/img/svg/shopping-bag.svg" alt=""/>Ваш заказ
                        <div class="btn-basket__count"><?= (isset(Yii::$app->session['basket']['fullPrice'])) ? Yii::$app->session['basket']['fullPrice'] : 0 ?>₽
                        </div></a>
                </div>
            </div>
        </div>
    </div>
    <!-- end top-nav-->
    <?= $content ?>
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-auto col"><a class="footer__logo" href="//">
                        <!-- picture-->
                        <picture>
                            <source type="image/webp" srcset="/img/@2x/webp/logo.webp"/><img src="/img/@2x/logo.jpg" alt="" loading="lazy"/>
                        </picture>
                        <!-- /picture--></a>
                </div>
                <div class="col-sm col-auto">
                    <ul class="menu" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
                        <li class="menu-item" itemprop="item"><a href="/#" itemprop="url">О нас</a></li>
                        <li class="menu-item" itemprop="item"><a href="/#" itemprop="url">Меню</a></li>
                        <li class="menu-item" itemprop="item"><a href="/#" itemprop="url">Оплата и доставка</a></li>
                        <li class="menu-item" itemprop="item"><a href="/#" itemprop="url">Контакты</a></li>
                    </ul>
                    <p> <a href="/#">Политика конфиденциальности</a></p>
                    <p> Copyright © 2021 </p>
                </div>
                <div class="col-md-auto">
                    <div class="footer__links d-flex"><a class="footer__tel text-body" href="/tel:8-928-77-36-777">8-928-77-36-777</a>
                        <div class="d-flex"><a class="ms-2" href="/#"><img src="/img/svg/whatsapp.svg" alt=""/></a><a class="ms-2" href="/#"><img src="/img/svg/telegram.svg" alt=""/></a><a class="ms-2" href="/#"><img src="/img/svg/viber.svg" alt=""/></a></div>
                    </div>
                    <div class="text-md-end">
                        <div class="small"><strong>Адрес:</strong> г. Ростов-на-Дону, ул.&nbsp;40&nbsp;лет победы&nbsp;д.&nbsp;89</div>
                    </div>
                    <div class="soc"><a class="soc__item" href="/#" target="_blank">
                            <svg class="icon icon-vk ">
                                <use xlink:href="/img/svg/sprite.svg#vk"></use>
                            </svg></a><a class="soc__item" href="/#" target="_blank">
                            <svg class="icon icon-fb ">
                                <use xlink:href="/img/svg/sprite.svg#fb"></use>
                            </svg></a><a class="soc__item" href="/#" target="_blank">
                            <svg class="icon icon-instagram ">
                                <use xlink:href="/img/svg/sprite.svg#instagram"></use>
                            </svg></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
<!--  start modals-->
<div class="modal-win" id="modal-call" style="display: none">
    <div class="form-wrap">
        <form>
            <div class="text-center">
                <div class="form-wrap__title form-data h3 ttu">Обратный звонок
                </div>
                <p class="after-headline">Заполните заявку и&nbsp;мы&nbsp;с&nbsp;Вами свяжемся в&nbsp;течение 15&nbsp;минут</p>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dicta at blanditiis error quis incidunt ratione. Expedita ullam repellendus possimus eos ex quidem quisquam quam voluptatum ipsa doloremque molestias accusamus rem deserunt tenetur incidunt exercitationem laboriosam consequuntur, repudiandae dolore odit earum voluptatibus autem amet! Eligendi omnis necessitatibus at accusamus excepturi, debitis magnam alias. Dolore voluptatum hic assumenda quo non facilis sed sint fugit ex quam. Natus eligendi sequi repellat earum doloremque vero consequatur repudiandae ipsam libero odit alias quia expedita magni fugit perspiciatis aperiam maxime illo, voluptatem omnis tenetur suscipit molestias beatae distinctio totam? Excepturi quaerat dolorum natus reprehenderit voluptas officiis totam recusandae harum autem ipsum laboriosam dolorem, tempore, maxime nam dignissimos aperiam cupiditate accusantium deleniti. Iusto harum facere blanditiis minima dolor assumenda error nisi soluta perferendis animi? Distinctio maxime, perspiciatis neque dignissimos reprehenderit obcaecati quo provident, dolores labore laborum adipisci at veniam reiciendis aliquam nemo minus cumque sequi quasi architecto aliquid magnam tempore expedita? Repellendus veniam est dicta nihil, aspernatur molestiae ducimus quibusdam voluptatibus saepe. Repudiandae itaque rem animi voluptas voluptate? Expedita numquam architecto totam quo quod quibusdam ut, rem earum, similique dolorum excepturi nobis quis, tempore et exercitationem repellendus! Ipsa, consequuntur praesentium quaerat excepturi voluptas, delectus maiores necessitatibus explicabo consequatur neque optio doloremque temporibus similique doloribus pariatur velit aliquam magni cum! Repellat mollitia quam saepe porro, culpa unde! Molestias laboriosam vitae nihil facere corporis cupiditate eos ea saepe dolorem, eaque laudantium quam distinctio, fugit placeat maxime enim dicta rem eligendi accusamus, eum id. Incidunt, illum quaerat ab modi iste quasi non laboriosam unde, atque fugit delectus cumque eligendi sapiente dolore autem omnis alias, adipisci dicta illo corrupti optio? Esse error numquam fugit itaque ipsam fugiat nostrum repudiandae recusandae, nobis repellat aperiam officiis labore possimus neque velit, a obcaecati illum quasi suscipit veritatis! Ea earum obcaecati impedit possimus adipisci vitae animi commodi consequatur omnis amet? Quod sed doloremque id nesciunt iure recusandae iste voluptatibus unde eligendi porro nulla architecto voluptates quasi temporibus, fugit asperiores quis! Facere non, illo quisquam cumque voluptate earum voluptatem corporis eum cum commodi omnis autem sequi nisi sit iure aperiam iusto dolor harum? Ex eligendi vero reiciendis culpa ipsa suscipit debitis, quam earum maxime. Nemo officia quasi consequuntur velit rem culpa ipsa quas earum excepturi amet fuga eum consequatur, repellendus commodi facere maxime. Magni voluptas consequatur facere dolores ut culpa, expedita fugit? Quae placeat asperiores est, fuga eligendi eius similique necessitatibus explicabo? Eveniet corporis tempora reiciendis, dolore ipsam quos aut ea alias amet nihil? Excepturi maiores mollitia inventore voluptate est ullam reprehenderit itaque iure quasi non molestias, vel veniam alias! Obcaecati laudantium ex incidunt autem ipsam a suscipit, in dolorem error deserunt minima laborum nulla facere officia sunt. Aliquid repellat rem sunt reprehenderit. Fugit perferendis officiis labore nesciunt pariatur optio minima aperiam et similique maxime odio laudantium eligendi deleniti culpa exercitationem impedit, fugiat magni vero temporibus eos obcaecati esse possimus asperiores dolores! Quod iure eius minus adipisci? Architecto sapiente corrupti error! Magni ea tempore laboriosam minus totam facilis iure voluptates nostrum officiis dignissimos nihil necessitatibus quam in, commodi molestiae expedita facere asperiores ad! Corporis delectus magnam, vel aspernatur rem laboriosam autem soluta aliquam iure impedit? Deserunt ad nam excepturi, quibusdam qui nisi necessitatibus, voluptatibus deleniti quo cumque ipsam cum repudiandae impedit in a laborum dignissimos ratione labore vitae officia quaerat magnam. Saepe ullam omnis harum reprehenderit beatae pariatur est? Animi dolores necessitatibus corrupti velit architecto obcaecati doloremque vero sapiente quaerat praesentium? Veniam illum iusto ea sunt deserunt, omnis consequatur est adipisci aliquid magnam quibusdam animi debitis magni excepturi accusamus vel facilis ipsa blanditiis expedita cumque fugiat! Aspernatur voluptatum quos corrupti blanditiis? Sapiente pariatur sunt culpa nesciunt consequatur eaque veritatis laborum possimus, saepe at nam amet exercitationem assumenda temporibus illo aliquid asperiores quae impedit beatae voluptatem? Vitae, totam quos odio nobis perferendis unde! Voluptates voluptatum, sint iure aliquid quis quod voluptatem saepe et similique, repellendus dolorum. Sed vel illo quisquam cum aut, ullam impedit quaerat a odit alias fugit repudiandae. Consequuntur voluptas explicabo eligendi, beatae esse nihil laborum illo rerum ab dolorum nemo iste est doloremque magnam. Repellendus in voluptates cumque ullam, cum odio quam deserunt optio doloremque modi nobis itaque cupiditate ea, neque exercitationem laborum, obcaecati mollitia earum debitis accusamus nisi dolorem autem libero dicta! Atque ad doloribus distinctio cumque nobis labore placeat? Necessitatibus, accusamus deleniti numquam asperiores distinctio tempora consectetur minus veritatis cum repellat architecto voluptatibus minima omnis aliquam fugit maiores eos veniam consequatur, rerum ex illo facere? Suscipit distinctio qui quae asperiores voluptates nobis unde, nisi soluta natus aspernatur tempore libero, nam iure? Modi, explicabo iusto tenetur placeat praesentium, sunt voluptatum soluta reiciendis quam atque hic dolorum in, esse consequuntur voluptate animi doloremque saepe expedita voluptates? Consectetur sint assumenda quaerat deleniti. Exercitationem, quas beatae. Ut ipsam eum nisi fugiat numquam saepe tempore dolorem necessitatibus consequatur, voluptatem eligendi magni laborum nostrum sed accusamus ducimus laudantium minus animi. Totam expedita vero voluptas libero ipsa! Facilis ullam vel libero aliquam sit itaque quasi delectus a rerum laborum, possimus, eos inventore nulla, excepturi exercitationem aliquid unde porro. Odio nulla labore repellat exercitationem cupiditate voluptates, obcaecati asperiores eligendi delectus commodi deserunt provident sit nam praesentium culpa cum amet explicabo, nisi dolores? Recusandae provident veritatis porro corporis voluptatem assumenda necessitatibus at. Sint quam in facere nihil hic cupiditate porro sapiente nisi, et ratione placeat commodi unde excepturi error repellat earum perspiciatis quisquam amet tempora. Expedita, ipsum? Molestias mollitia voluptatum sapiente inventore, perspiciatis ab laudantium, voluptatibus amet aliquid laborum autem? Adipisci aliquid voluptatum numquam quas quia ullam error sed illo, sit minima, consectetur temporibus unde? Rerum minima necessitatibus est expedita assumenda nesciunt, modi ea fugiat consectetur ad corporis velit ducimus quia aut cumque iusto voluptatibus et perferendis ipsum! Excepturi perferendis veritatis cumque quo, quod facere facilis impedit magnam numquam repellat ad tempora! Pariatur distinctio laborum, quaerat dolorem nostrum totam animi. Ipsa distinctio consectetur explicabo culpa, esse reprehenderit eveniet obcaecati, repudiandae dolorum vero expedita modi exercitationem iure aut provident sit cum adipisci consequatur id delectus voluptatum fuga ducimus natus. Cum, aperiam impedit error illo hic similique quo iure omnis ullam sapiente modi.</p>
            </div>
            <div class="form-wrap__input-wrap form-group"><input class="form-wrap__input form-control" name="text" type="text" placeholder="Ваше Имя"/>
            </div>
            <!-- +e.input-wrap-->
            <button class="form-wrap__btn btn" type="submit">
            </button>
            <div class="form-wrap__polite">
                <label class="custom-input form-check"><input class="custom-input__input form-check-input" name="checkbox" type="checkbox"/><small class="custom-input__text text-secondary">Согласен на обработку и хранение моих персональных данных в соответствии с условиями</small>
                </label>
            </div>
        </form>
    </div>
</div>
<!-- #modal-call-->
<!-- end modals-->
<!-- modal libs-->
<script src="<?=Yii::getAlias('@web') ?>/libs/jquery/jquery.min.js"></script>
<script src="<?=Yii::getAlias('@web') ?>/libs/@fancyapps/fancybox/jquery.fancybox.min.js"></script>
<script src="<?=Yii::getAlias('@web') ?>/libs/hc-sticky/hc-sticky.js"></script>
<!-- modal libs-->
<!-- slider libs-->
<script src="<?=Yii::getAlias('@web') ?>/libs/swiper/swiper-bundle.min.js"> </script>
<!-- /slider libs-->
<script src="<?=Yii::getAlias('@web') ?>/libs/inputmask/inputmask.min.js"></script>
<script src="<?=Yii::getAlias('@web') ?>/js/libs.js"></script>
<script src="<?=Yii::getAlias('@web') ?>/js/common.js"></script>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
