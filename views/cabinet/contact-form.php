<?php
/**
 * Created by PhpStorm.
 * File: checkout.php
 * Date: 7/08/2020
 * Time: 07:37
 */

include ROOT . "/views/layouts/header.php";
?>
<!-- Page Content -->
<div class="container" xmlns="http://www.w3.org/1999/html">
    <div class="row">
        <div class="col-lg-3">
            <h3 class="my-3">Категории</h3>
            <div class="list-group mb-4">
                <?php foreach ($categories as $categoryItem) : ?>
                    <a href="/category/<?= $categoryItem['id']; ?>" class="list-group-item"
                       style="text-decoration: none;">
                        <?= $categoryItem['name']; ?>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
        <!-- /.col-lg-3 -->
        <div class="col-lg-8 my-4">
            <div class="row">
                <div class="col-md-12 mb-4">
                    <h2 class="title text-center">Обратная связь</h2>
                    <p class="text-info">Для обращения к нам заполните форму обратной связи и наш менеджер свяжется с
                        Вами как можно быстрее.</p>
                    <div class="login-form">
                        <?php if (isset($errors) && is_array($errors)): ?>
                            <ul>
                                <?php foreach ($errors as $error): ?>
                                    <li class="text-danger"> - <?php echo $error; ?></li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                        <?php if (isset($msg)): ?>
                            <ul>
                                <li class="text-success"> - <?php echo $msg; ?></li>
                            </ul>
                        <?php endif; ?>
                        <form action="#" method="post">
                            <div class="form-group">
                                <label for="name">Ваша имя</label>
                                <input id="name" type="text" class="form-control" name="userName"
                                       placeholder="Введите свое имя">
                            </div>
                            <div class="form-group">
                                <label for="userEmail">Электронный адрес</label>
                                <input class="form-control" type="email" id="userEmail" name="userEmail"
                                       placeholder="Введите E-mail">
                            </div>
                            <div class="form-group">
                                <label for="question">Вопрос</label>
                                <textarea class="form-control" id="question" name="question"
                                          placeholder="Введите текст своего вопроса"></textarea>
                            </div>
                            <input type="submit" name="submit" class="btn btn-outline-primary" value="Отправить">
                            <a href="/" class="btn btn-outline-primary">Назад</a>
                        </form>
                    </div>
                </div>
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

