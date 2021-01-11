<?php include ROOT . '/views/layouts/header.php'; ?>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-4 padding-right">
                    <?php if ($result): ?>
                        <p class="mt-5">Вы зарегистрированы!</p>
                    <?php else: ?>
                        <?php if (isset($errors) && is_array($errors)): ?>
                            <ul class="mt-5">
                                <?php foreach ($errors as $error): ?>
                                    <li> - <?php echo $error; ?></li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                        <div class="signup-form mt-5 mb-5"><!--sign up form-->
                            <h2>Регистрация на сайте</h2>
                            <form action="#" method="post">
                                <div class="form-group">
                                    <label for="name"></label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Имя"
                                           value="<?= $name; ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="email"></label>
                                    <input type="email" id="email" class="form-control" name="email"
                                           placeholder="E-mail"
                                           value="<?= $email; ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="password"></label>
                                    <input type="password" id="password" class="form-control" name="password" required
                                           placeholder="Пароль"
                                           value="<?= $password; ?>">
                                </div>
                                <input type="submit" name="submit" class="btn btn-outline-primary" value="Регистрация"/>
                            </form>
                        </div><!--/sign up form-->
                    <?php endif; ?>
                    <br/>
                    <br/>
                </div>
            </div>
        </div>
    </section>
<?php include ROOT . '/views/layouts/footer.php'; ?>