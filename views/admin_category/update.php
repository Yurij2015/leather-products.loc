<?php include ROOT . '/views/layouts/header_admin.php'; ?>
    <div class="container my-4">
        <div class="row">
            <div class="col-md-12">
                <h4>Редактировать категорию "<?php echo $category['name']; ?>"</h4>
                <form action="#" method="post">
                    <div class="form-group">
                        <label for="name">Название</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder=""
                               value="<?php echo $category['name']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="sort_order">Порядковый номер</label>
                        <input type="text" id="sort_order" name="sort_order" class="form-control" placeholder=""
                               value="<?php echo $category['sort_order']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="status">Статус</label>
                        <select name="status" id="status" class="form-control">
                            <option value="1" <?php if ($category['status'] == 1) echo ' selected="selected"'; ?>>
                                Отображается
                            </option>
                            <option value="0" <?php if ($category['status'] == 0) echo ' selected="selected"'; ?>>
                                Скрыта
                            </option>
                        </select>
                    </div>
                    <input type="submit" name="submit" class="btn btn-outline-primary" value="Сохранить">
                    <a href="/admin/category" class="btn btn-outline-primary">Назад</a>
                </form>
            </div>
        </div>
    </div>
<?php include ROOT . '/views/layouts/footer_admin.php'; ?>