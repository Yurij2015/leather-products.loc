<?php
/**
 * Created by PhpStorm.
 * File: checkout.php
 * Date: 10/07/2020
 * Time: 07:37
 */

include ROOT . "/views/layouts/header.php";
?>
<!-- Page Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-3">
            <h3 class="my-3">Категории</h3>
            <div class="list-group mb-4">
                <?php foreach ($categories as $categoryItem) : ?>
                    <a href="/category/<?= $categoryItem['id']; ?>" class="list-group-item" style="text-decoration: none;">
                        <?= $categoryItem['name']; ?>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
        <!-- /.col-lg-3 -->
        <div class="col-lg-8 my-4">
            <div class="row">
                <div class="col-md-12 mb-4">
                    <h2 class="title text-center">Корзина</h2>
                    <?php if ($result): ?>
                        <p>Заказ оформлен. Мы Вам перезвоним.</p>
                    <?php else: ?>
                    <p class="lead">Выбрано товаров: <?php echo $totalQuantity; ?>, на
                        сумму: <?php echo $totalPrice; ?>,
                        р.</p>
                    <?php if (isset($errors) && is_array($errors)): ?>
                        <ul>
                            <?php foreach ($errors as $error): ?>
                                <li> - <?php echo $error; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                    <p class="text-danger">Для оформления заказа заполните форму. Наш менеджер свяжется с Вами.</p>
                    <div class="login-form">
                        <form action="#" method="post">
                            <div class="form-group">
                                <label for="name">Ваша имя</label>
                                <input id="name" type="text" class="form-control" name="userName" placeholder=""
                                       value="<?php echo $userName; ?>"/>
                            </div>
                            <div class="form-group">
                                <label for="phone">Номер телефона</label>
                                <input class="form-control" type="text" id="phone" name="userPhone" placeholder=""
                                       value="<?php echo $userPhone; ?>"/>
                            </div>
                            <div class="form-group">
                                <label for="comment">Комментарий к заказу</label>
                                <input class="form-control" type="text" id="comment" name="userComment"
                                       placeholder="Сообщение"
                                       value="<?php echo $userComment; ?>"/>
                            </div>
                            <input type="submit" name="submit" class="btn btn-outline-primary" value="Оформить"/>
                            <a href="/cart/" class="btn btn-outline-primary">Назад</a>
                        </form>
                    </div>
                </div>
                <?php endif; ?>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.col-lg-9 -->
    </div>
    <!-- /.row -->
</div>
<!-- /.container -->
<?php
include ROOT . "/views/layouts/footer.php";
?>

