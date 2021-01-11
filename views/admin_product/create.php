<?php include ROOT . '/views/layouts/header_admin.php'; ?>
<div class="container my-4">
    <div class="row">
        <div class="col-md-12">
            <h4>Добавить новую книгу</h4>
            <hr>
            <?php if (isset($errors) && is_array($errors)): ?>
                <ul>
                    <?php foreach ($errors as $error): ?>
                        <li> - <?php echo $error; ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
            <div class="login-form">
                <form action="#" method="post" class="mb-5" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="name">Название товара</label>
                        <input type="text" id="name" name="name" class="form-control" placeholder="" value="">
                    </div>
                    <div class="form-group">
                        <label for="code">Артикул</label>
                        <input type="text" id="code" name="code" class="form-control" placeholder="" value="">
                    </div>
                    <div class="form-group">
                        <label for="price">Стоимость, p</label>
                        <input type="text" id="price" name="price" class="form-control" placeholder="" value="">
                    </div>
                    <div class="form-group">
                        <label for="category">Категория</label>
                        <select name="category_id" id="category" class="form-control">
                            <?php if (is_array($categoriesList)): ?>
                                <?php foreach ($categoriesList as $category): ?>
                                    <option value="<?php echo $category['id']; ?>">
                                        <?php echo $category['name']; ?>
                                    </option>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="brand">Издательство</label>
                        <input type="text" name="brand" id="brand" class="form-control" placeholder="" value="">
                    </div>
                    <div class="form-group">
                        <label for="image">Изображение товара</label>
                        <input type="file" name="image" class="form-control" id="image" placeholder="" value="">
                    </div>
                    <div class="form-group">
                        <p>Детальное описание</p>
                        <textarea name="description" id="description"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="availability">Наличие на складе</label>
                        <select name="availability" id="availability" class="form-control">
                            <option value="1" selected="selected">Да</option>
                            <option value="0">Нет</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="is_new">Новинка</label>
                        <select name="is_new" class="form-control" id="is_new">
                            <option value="1" selected="selected">Да</option>
                            <option value="0">Нет</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="is_recommended">Рекомендуемые</label>
                        <select name="is_recommended" id="is_recommended" class="form-control">
                            <option value="1" selected="selected">Да</option>
                            <option value="0">Нет</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="status">Статус</label>
                        <select name="status" id="status" class="form-control">
                            <option value="1" selected="selected">Отображается</option>
                            <option value="0">Скрыт</option>
                        </select>
                    </div>
                    <input type="submit" name="submit" class="btn btn-outline-primary" value="Сохранить">
                    <a href="/admin/product" class="btn btn-outline-primary">Назад</a>
                </form>
            </div>
        </div>

    </div>
</div>
</div>
<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

