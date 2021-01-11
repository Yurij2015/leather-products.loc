<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="container my-4">
        <div class="row">
            <div class="col-md-12">
                <a href="/admin/product/create" class="btn btn-outline-primary float-right mb-3"> Добавить товар</a>
                <h4>Список товаров</h4>
                <table class="table-bordered table-striped table">
                    <tr>
                        <th>Артикул</th>
                        <th>Название товара</th>
                        <th>Цена</th>
                        <th></th>
                        <th></th>
                    </tr>
                    <?php
                    ?>
                    <?php foreach ($productsList as $product): ?>
                        <tr>
                            <td><?php echo $product['code']; ?></td>
                            <td><?php echo $product['name']; ?></td>
                            <td><?php echo $product['price']; ?></td>
                            <td><a href="/admin/product/update/<?php echo $product['id']; ?>">Редактировать</a></td>
                            <td><a href="/admin/product/delete/<?php echo $product['id']; ?>">Удалить</a></td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

