<?php include ROOT . '/views/layouts/header_admin.php'; ?>
    <div class="container my-4">
        <div class="row">
            <div class="col-md-12">
                <h4>Добавить новую категорию</h4>
                <br/>
                <?php if (isset($errors) && is_array($errors)): ?>
                    <ul>
                        <?php foreach ($errors as $error): ?>
                            <li> - <?php echo $error; ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
                <form action="#" method="post">
                    <div class="form-group">
                        <label for="name">Название</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="" value="">
                    </div>
                    <div class="form-group">
                        <label for="sort_order">Порядковый номер</label>
                        <input type="text" id="sort_order" class="form-control" name="sort_order" placeholder=""
                               value="">
                    </div>
                    <div class="form-group">
                        <label for="status">Статус</label>
                        <select name="status" id="status" class="form-control">
                            <option value="1" selected="selected">Отображается</option>
                            <option value="0">Скрыта</option>
                        </select>
                    </div>
                    <input type="submit" name="submit" class="btn btn-outline-primary" value="Сохранить">
                    <a href="/admin/category" class="btn btn-outline-primary">Назад</a>
                </form>
            </div>
        </div>
    </div>
<?php include ROOT . '/views/layouts/footer_admin.php'; ?>