<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>BookStore :: Книжный интернет-магазин</title>
    <!-- Bootstrap core CSS -->
    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="/template/css/shop-homepage.css" rel="stylesheet">
</head>
<body>
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
    <div class="container">
        <a class="navbar-brand" href="/">BookStore</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Главная
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
<!--                    <a class="nav-link" href="/about/">О магазине</a>-->
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/catalog/">Каталог</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/cart/">Корзина (<span id="cart-count"><?php echo Cart::countItems();?></span>)</a>


                </li>
                <?php if (User::isGuest()): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="/user/login/">Вход</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/user/register/">Регистрация</a>
                    </li>
                <?php else: ?>
                    <li class="nav-item">
                        <a class="nav-link" href="/cabinet/">Кабинет</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact-form/">Обратная связь</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/user/logout/">Выход</a>
                    </li>
                <?php endif; ?>

            </ul>
        </div>
    </div>
</nav>