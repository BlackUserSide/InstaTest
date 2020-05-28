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
                            <li><a href="#">Лайки</a></li>
                            <li><a href="#">Подписчики</a></li>
                            <li><a href="#">Статистика</a></li>
                            <li><a href="#">Просмотры</a></li>
                            <li><a href="#">Автолайки</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <section class="main-parse">
        <div class="liks-category category-wrapper">
            <div class="top-line-category">
                <h1 class="h1">Лайки</h1>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-4 col-sm-12 col-lg-4 col-xl-4">
                        <?php if (!empty($pageData['liksServ'])) : ?>
                            <?php foreach ($pageData['liksServ'] as $key => $val) { ?>
                                <div class="item-wrapper">
                                    <div class="icon-wrap">
                                        <i class="fas fa-heart"></i>
                                    </div>

                                    <h3 class="name-service"><?php echo $val['name'] ?></h3>
                                    <p class="old-price">Старая цена: <span><?php echo $val['oldPrice'] ?>грн</span></p>
                                    <p class="price"><?php echo $val['price'] ?> грн.</p>
                                    <a href="#" price="<?php echo $val['price'] ?>" id="<?php echo $val['id'] ?>" class="start-order">Заказать</a>
                                </div>
                            <?php } ?>
                        <?php endif ?>

                    </div>
                </div>
            </div>
        </div>
        <div class="sums-category category-wrapper">
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
                                    <a href="#" price="<?php echo $val['price'] ?>" id="<?php echo $val['id'] ?>"  class="start-order">Заказать</a>
                                </div>
                            <?php } ?>
                        <?php endif ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="sums-category category-wrapper">
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
                                    <a href="#" price="<?php echo $val['price'] ?>" id="<?php echo $val['id'] ?>" class="start-order">Заказать</a>
                                </div>
                            <?php } ?>
                        <?php endif ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="sums-category category-wrapper">
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
                                    <a href="#" price="<?php echo $val['price'] ?>" id="<?php echo $val['id'] ?>" class="start-order">Заказать</a>
                                </div>
                            <?php } ?>
                        <?php endif ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="sums-category category-wrapper">
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
                                    <a href="#" price="<?php echo $val['price'] ?>" id="<?php echo $val['id'] ?>" class="start-order">Заказать</a>
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
            <input type="hidden" name="id" class="id-hidden" value="">
            <input type="hidden" name="price" class="price-hidden" value="">
            <input type="text" name="nickName" required placeholder="(@nickname)">
            <button>Оплатить</button>
            <div class="box-modal_close arcticmodal-close" style="font-size: 22px">X</div>
        </form>
    </div>
    <script src="/js/jquery.min.js"></script>
    <script src="/libs/jquery.arcticmodal-0.3.min.js"></script>
    <script src="/js/main.min.js"></script>                           
</body>

</html>