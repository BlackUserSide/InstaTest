<?php print_r($_SESSION) ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageData['title'] ?></title>
</head>
<body>
    <header class="admin-header">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 col-lg-12 col-xs-12">
                    <div class="header-info">
                        <h4 class="nick-admin"><?php echo $_SESSION['user']['nickName'] ?></h4>
                    </div>
                </div>
            </div>
        </div>
    </header>
</body>
</html>