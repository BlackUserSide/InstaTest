<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="/css/fontawosome/css/all.css">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/main.css.map">
    <link rel="stylesheet" href="/libs/jquery.arcticmodal-0.3.css">
    <link rel="stylesheet" href="/libs/themes/simple.css">

    <script>
        function createOrder(amount, order_desc) {
            var button = $ipsp.get('button');
            button.setMerchantId(1448274);
            button.setAmount(amount, 'UAH');
            button.setResponseUrl('http://example.com/result/');
            button.setHost('api.fondy.eu');
            button.addField({
                label: 'Описание покупки',
                name: 'order_desc',
                value: order_desc
            });
            return button.getUrl();
        }
    </script>
    <title><?php echo $pageData['title'] ?></title>
</head>

<body>
    <header class="site-header">
        <div class="bg-lock"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-md-7 col-sm-7 col-lg-7 col-xs-7">
                    <div class="main-composition">
                        <h1 class="h1">Накрутка в инстаграмме</h1>
                        <p class="main-text">Быстро | Качественно | Надежно</p>
                        <i class="fas fa-chevron-down"></i><br>
                        <i class="fas fa-chevron-down"></i><br>
                        <i class="fas fa-chevron-down"></i><br>
                    </div>
                </div>
                <div class="col-xl-5 col-md-5 col-sm-5 col-lg-5 col-xs-5">
                    <p class="logo-nav">Выбери услугу</p>
                    <nav class="main-nav">
                        <ul>
                            <li><a href="#liks" class="menu-link">Лайки</a></li>
                            <li><a href="#subs" class="menu-link">Подписчики</a></li>
                            <li><a href="#stat" class="menu-link">Статистика</a></li>
                            <li><a href="#whatch" class="menu-link">Просмотры</a></li>
                            <li><a href="#autolike" class="menu-link">Автолайки</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <section class="main-parse" id="liks">
        <div class="liks-category category-wrapper">
            <div class="top-line-category">
                <h1 class="h1">Лайки</h1>
            </div>
            <div class="container">
                <div class="row">
                   
                        <?php if (!empty($pageData['liksServ'])) : ?>
                            <?php foreach ($pageData['liksServ'] as $key => $val) { ?>
                                <div class="col-xs-12 col-md-4 col-sm-12 col-lg-4 col-xl-4">
                                    <div class="item-wrapper">
                                        <div class="icon-wrap">
                                            <i class="fas fa-heart"></i>
                                        </div>

                                        <h3 class="name-service"><?php echo $val['name'] ?></h3>
                                        <p class="old-price">Старая цена: <span><?php echo $val['oldPrice'] ?>грн</span></p>
                                        <p class="price"><?php echo $val['price'] ?> грн.</p>
                                        <a href="#" price="<?php echo $val['price'] ?>" id="<?php echo $val['name'] ?>" class="start-order">Заказать</a>
                                    </div>
                                </div>
                            <?php } ?>
                        <?php endif ?>

                    
                </div>
            </div>
        </div>
        <div class="sums-category category-wrapper" id="subs">
            <div class="top-line-category">
                <h1 class="h1">Подписчики</h1>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-4 col-sm-12 col-lg-4 col-xl-4">
                        <?php if (!empty($pageData['subsServ'])) : ?>
                            <?php foreach ($pageData['subsServ'] as $key => $val) { ?>
                                <div class="item-wrapper">
                                    <div class="icon-wrap">
                                        <i class="fas fa-heart"></i>
                                    </div>

                                    <h3 class="name-service"><?php echo $val['name'] ?></h3>
                                    <p class="old-price">Старая цена: <span><?php echo $val['oldPrice'] ?>грн</span></p>
                                    <p class="price"><?php echo $val['price'] ?> грн.</p>
                                    <a href="#" price="<?php echo $val['price'] ?>" id="<?php echo $val['name'] ?>" class="start-order">Заказать</a>
                                </div>
                            <?php } ?>
                        <?php endif ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="sums-category category-wrapper" id="stat">
            <div class="top-line-category">
                <h1 class="h1">Статистика</h1>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-4 col-sm-12 col-lg-4 col-xl-4">
                        <?php if (!empty($pageData['statServ'])) : ?>
                            <?php foreach ($pageData['statServ'] as $key => $val) { ?>
                                <div class="item-wrapper">
                                    <div class="icon-wrap">
                                        <i class="fas fa-heart"></i>
                                    </div>

                                    <h3 class="name-service"><?php echo $val['name'] ?></h3>
                                    <p class="old-price">Старая цена: <span><?php echo $val['oldPrice'] ?>грн</span></p>
                                    <p class="price"><?php echo $val['price'] ?> грн.</p>
                                    <a href="#" price="<?php echo $val['price'] ?>" id="<?php echo $val['name'] ?>" class="start-order">Заказать</a>
                                </div>
                            <?php } ?>
                        <?php endif ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="sums-category category-wrapper" id="whatch">
            <div class="top-line-category">
                <h1 class="h1">Просмотры</h1>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-4 col-sm-12 col-lg-4 col-xl-4">
                        <?php if (!empty($pageData['whatchStat'])) : ?>
                            <?php foreach ($pageData['whatchStat'] as $key => $val) { ?>
                                <div class="item-wrapper">
                                    <div class="icon-wrap">
                                        <i class="fas fa-heart"></i>
                                    </div>

                                    <h3 class="name-service"><?php echo $val['name'] ?></h3>
                                    <p class="old-price">Старая цена: <span><?php echo $val['oldPrice'] ?>грн</span></p>
                                    <p class="price"><?php echo $val['price'] ?> грн.</p>
                                    <a href="#" price="<?php echo $val['price'] ?>" id="<?php echo $val['name'] ?>" class="start-order">Заказать</a>
                                </div>
                            <?php } ?>
                        <?php endif ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="sums-category category-wrapper" id="autolike">
            <div class="top-line-category">
                <h1 class="h1">Автолайки</h1>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-4 col-sm-12 col-lg-4 col-xl-4">
                        <?php if (!empty($pageData['autoLike'])) : ?>
                            <?php foreach ($pageData['autoLike'] as $key => $val) { ?>
                                <div class="item-wrapper">
                                    <div class="icon-wrap">
                                        <i class="fas fa-heart"></i>
                                    </div>

                                    <h3 class="name-service"><?php echo $val['name'] ?></h3>
                                    <p class="old-price">Старая цена: <span><?php echo $val['oldPrice'] ?>грн</span></p>
                                    <p class="price"><?php echo $val['price'] ?> грн.</p>
                                    <a href="#" price="<?php echo $val['price'] ?>" id="<?php echo $val['name'] ?>" class="start-order">Заказать</a>
                                </div>
                            <?php } ?>
                        <?php endif ?>
                    </div>
                </div>
            </div>
        </div>

    </section>
                     
    <div class="hidden-form" style="display: none">

        <form class="hidden box-modal">
            <h3 class="form-label">
                Введите ваш nickname
            </h3>
            <input type="hidden" class="dataOrder" name="dataOrder" value="">
            <input type="hidden" name="id" class="id-hidden" value="">
            <input type="hidden" name="price" class="price-hidden" value="">
            <input type="text" name="nickName" class="nickName" required placeholder="(@nickname)">
            <button class="payment-click" onclick="location.href=createOrder($('.price-hidden').val(), $('.nickName').val())">Оплатить</button>
            <div class="box-modal_close arcticmodal-close" style="font-size: 22px">X</div>
        </form>
    </div>
    <footer class="site-footer" style="font-size: 46px; text-align: centers">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <h1 class="h1">ЗАЕЦ ПИТУХ</h1>
                </div>
            </div>
        </div>
    </footer>
    <script src="/js/jquery.min.js"></script>
    <script src="/libs/jquery.arcticmodal-0.3.min.js"></script>
   
    <script src="https://api.fondy.eu/static_common/v1/checkout/ipsp.js"></script>
    <script src="/js/main.min.js"></script>
    <script src="/js/payment.js"></script>
</body>

</html>