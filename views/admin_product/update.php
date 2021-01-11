<?php include ROOT . '/views/layouts/header_admin.php'; ?>
<div class="container my-4">
    <div class="row">
        <div class="col-md-12">
            <h4>Редактировать книгу под номером <?php echo $id; ?></h4>
            <hr>
            <div class="login-form">
                <form action="#" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="name">Название товара</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder=""
                               value="<?php echo $product['name']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="code">Артикул</label>
                        <input type="text" name="code" class="form-control" id="code" placeholder=""
                               value="<?php echo $product['code']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="price">Стоимость, p</label>
                        <input type="text" name="price" id="price" class="form-control" placeholder=""
                               value="<?php echo $product['price']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="category">Категория</label>
                        <select name="category_id" id="category" class="form-control">
                            <?php if (is_array($categoriesList)): ?>
                                <?php foreach ($categoriesList as $category): ?>
                                    <option value="<?php echo $category['id']; ?>"
                                        <?php if ($product['category_id'] == $category['id']) echo ' selected="selected"'; ?>>
                                        <?php echo $category['name']; ?>
                                    </option>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="brand">Издательство</label>
                        <input type="text" id="brand" class="form-control" name="brand" placeholder=""
                               value="<?php echo $product['brand']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="image">Изображение товара: </label>
                        <img src="<?php echo Product::getImage($product['id']); ?>" width="300"
                             style="margin-bottom: 15px" alt=""/>
                        <input id="image" class="form-control" type="file" name="image" placeholder=""
                               value="<?php echo $product['image']; ?>">
                    </div>
                    <div class="form-group">
                        <p>Детальное описание</p>
                        <textarea name="description" id="description"><?php echo $product['description']; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="availability">Наличие на складе</label>
                        <select name="availability" id="availability" class="form-control">
                            <option value="1" <?php if ($product['availability'] == 1) echo ' selected="selected"'; ?>>
                                Да
                            </option>
                            <option value="0" <?php if ($product['availability'] == 0) echo ' selected="selected"'; ?>>
                                Нет
                            </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="is_new">Новинка</label>
                        <select name="is_new" id="is_new" class="form-control">
                            <option value="1" <?php if ($product['is_new'] == 1) echo ' selected="selected"'; ?>>Да
                            </option>
                            <option value="0" <?php if ($product['is_new'] == 0) echo ' selected="selected"'; ?>>Нет
                            </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="is_recommended">Рекомендуемые</label>
                        <select name="is_recommended" id="is_recommended" class="form-control">
                            <option value="1" <?php if ($product['is_recommended'] == 1) echo ' selected="selected"'; ?>>
                                Да
                            </option>
                            <option value="0" <?php if ($product['is_recommended'] == 0) echo ' selected="selected"'; ?>>
                                Нет
                            </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="status">Статус</label>
                        <select name="status" id="status" class="form-control">
                            <option value="1" <?php if ($product['status'] == 1) echo ' selected="selected"'; ?>>
                                Отображается
                            </option>
                            <option value="0" <?php if ($product['status'] == 0) echo ' selected="selected"'; ?>>Скрыт
                            </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" class="btn btn-outline-primary" value="Сохранить">
                        <a href="/admin/product" class="btn btn-outline-primary">Назад</a>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

