<?php include ROOT . '/views/layouts/header.php'; ?>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="mt-5">Кабинет пользователя <?= $user['name']; ?></h1>
                    <ul class="mb-5">
                        <li><a href="/cabinet/edit">Редактировать данные</a></li>
<!--                        <li><a href="/cabinet/history">Список покупок</a></li>-->
                    </ul>
                </div>
            </div>
        </div>
    </section>
<?php include ROOT . '/views/layouts/footer.php'; ?>