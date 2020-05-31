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
    <section class="load-order">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="table-wrapper-order">
                        <table class="table-order">
                            <thead class="header-table">
                                <tr>
                                    <td>Ник</td>
                                    <td>Цена</td>
                                    <td>Статус</td>
                                    <td>Дата заказа</td>
                                    <td>Дата оплаты</td>
                                    <td>Услуга</td>
                                </tr>
                            </thead>
                            <tbody class="load-order">
                                <?php foreach($pageData['orderData'] as $key => $val) { ?>
                                    <tr class="change-stat-order">
                                        <td>
                                            <input type="checkbox" value="1" name="changeStatus" id="changeStatus" status-select="<?php echo $val['statusAdmin'] ?>" iditem="<?php echo $val['id'] ?>">
                                            <?php echo $val['nickName'] ?>
                                        </td>
                                        <td><?php echo $val['price'] ?></td>
                                        <td>
                                            <?php if($val['status'] == '0') : ?>
                                                <span class="status-order">Не оплачено</span> 
                                            <?php else : ?>
                                                <span class="status-order-succ">Оплачено</span> 
                                            <?php endif ?>
                                        </td>
                                        <td><?php echo $val['dataOrder'] ?></td>
                                        <td><?php echo $val['dataChangeStatus'] ?></td>
                                        <td><?php echo $val['nameService'] ?></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="/js/jquery.min.js"></script>
    <script src="/libs/jquery.arcticmodal-0.3.min.js"></script>
    <script src="/js/orderpage.js"></script>
</body>
</html>