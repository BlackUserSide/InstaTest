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
    <header class="admin-header">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 col-lg-12 col-xs-12">
                    <div class="header-info">
                        <h3 class="nick-admin"><?php echo $_SESSION['user']['nickName'] ?></h3>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <section class="main-admin">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 col-lg-12">
                    <nav class="admin-nav">
                        <ul>
                            <li><a href="/adminpanel">Услуги</a></li>
                            <li><a href="/order">Заказы</a></li>
                            <li><a href="#" class="log-out">Выйти</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

    </section>
    <section class="load-container">
        <div class="service-admin-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-lg-12 col-xs-12">
                        <div class="table-wrapper-service">
                            <a href="#" class="add-servise">Добавить услугу</a>
                            <table class="main-service">
                                <thead class="header-table">
                                    <tr>
                                        <td>Название</td>
                                        <td>Цена</td>
                                        <td>Старая цена</td>
                                        <td>Категория</td>
                                        <td>Управление</td>
                                    </tr>
                                </thead>
                                <tbody class="load-service">
                                    <?php foreach ($pageData['serviceAdm'] as $key => $val) { ?>
                                        <tr>
                                            <td><?php echo $val['name'] ?></td>
                                            <td><?php echo $val['price'] ?>грн</td>
                                            <td><?php echo $val['oldPrice'] ?>грн</td>
                                            <td><?php echo $val['category'] ?></td>
                                            <td><a href="#" class="btn-remove-link" id="<?php echo $val['id'] ?>">Управлять</a></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="display: none;">
            <div class="hidden-form-service box-modal">
                <h3 class="h3">Редактирование услуги</h3>
                <form class="remove-service">
                    <input type="hidden" class="hiddenId" name="hiddenId" value="">
                    <input type="hidden" class="oldnameService" name="oldnameService" value="">
                    <input type="hidden" class="oldpriceServ" name="oldpriceServ" value="">
                    <input type="hidden" class="oldoldPrice" name="oldoldPrice" value="">
                    <p>Название</p>
                    <input type="text" name="name" class="nameService" id="nameService">
                    <p>Новая цена</p>
                    <input type="text" name="price" class="priceServ" id="priceServ">
                    <p>Старая цена</p>
                    <input type="text" name="oldPrice" class="oldPrice" id="oldPrice"><br>
                    <button class="save-btn">Сохранить</button>
                    <a href="#" class="dell-btn">Удалить</a>
                    <div class="box-modal_close arcticmodal-close" style="font-size: 22px">X</div>
                </form>
            </div>
        </div>

    </section>
    <div style="display: none">
        
        <form class="add-form box-modal">
            <h3 class="h3-add">Добавить услугу</h3>
            <input type="text" name="name" placeholder="Название" required>
            <input type="text" name="price"placeholder="Цена" required>
            <input type="text" name="oldPrice"placeholder="Старая цена" required>
            <select name="category" id="Category">
                <option value="1">Лайки</option>
                <option value="2">Подписчики</option>
                <option value="3">Статистика</option>
                <option value="4">Просмотры</option>
                <option value="5">АвтоЛайки</option>
            </select><br>
            <button>Добавить</button>
            <div class="box-modal_close arcticmodal-close" style="font-size: 22px">X</div>
        </form>
    </div>
    <script src="/js/jquery.min.js"></script>
    <script src="/libs/jquery.arcticmodal-0.3.min.js"></script>
    <script src="/js/adminpanel.js"></script>
</body>

</html>