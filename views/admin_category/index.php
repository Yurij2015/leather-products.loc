<?php include ROOT . '/views/layouts/header_admin.php'; ?>
    <div class="container my-4">
        <div class="row">
            <div class="col-md-12">
                <a href="/admin/category/create" class="btn btn-outline-primary float-right mb-3"> Добавить категорию</a>
                <h4>Список категорий</h4>
                <table class="table-bordered table-striped table">
                    <tr>
                        <th>ID категории</th>
                        <th>Название категории</th>
                        <th>Порядковый номер</th>
                        <th>Статус</th>
                        <th></th>
                        <th></th>
                    </tr>
                    <?php foreach ($categoriesList as $category): ?>
                        <tr>
                            <td><?php echo $category['id']; ?></td>
                            <td><?php echo $category['name']; ?></td>
                            <td><?php echo $category['sort_order']; ?></td>
                            <td><?php echo Category::getStatusText($category['status']); ?></td>
                            <td><a href="/admin/category/update/<?php echo $category['id']; ?>">Редактировать</a></td>
                            <td><a href="/admin/category/delete/<?php echo $category['id']; ?>">Удалить</a></td>
                        </tr>
                    <?php endforeach; ?>
                </table>

            </div>
        </div>
    </div>
<?php include ROOT . '/views/layouts/footer_admin.php'; ?>