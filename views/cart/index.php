<?php
include ROOT . "/views/layouts/header.php";
?>
<!-- Page Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-3">
            <h3 class="my-3">Категории</h3>
            <div class="list-group mb-5">
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
                    <?php if ($productsInCart): ?>
                        <p>Вы выбрали такие товары:</p>
                        <table class="table-bordered table-striped table">
                            <tr>
                                <th>Код товара</th>
                                <th>Название</th>
                                <th>Стомость, р</th>
                                <th>Количество, шт</th>
                                <th>Удалить</th>
                            </tr>
                            <?php foreach ($products as $product): ?>
                                <tr>
                                    <td><?php echo $product['code']; ?></td>
                                    <td>
                                        <a href="/product/<?php echo $product['id']; ?>">
                                            <?php echo $product['name']; ?>
                                        </a>
                                    </td>
                                    <td><?php echo $product['price']; ?></td>
                                    <td><?php echo $productsInCart[$product['id']]; ?></td>
                                    <td>
                                        <a class="btn btn-outline-info btn-sm checkout" href="/cart/delete/<?php echo $product['id'];?>">Удалить
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            <tr>
                                <td colspan="4">Общая стоимость:</td>
                                <td><?php echo $totalPrice; ?></td>

                            </tr>
                        </table>
                        <a class="btn btn-default btn-outline-primary checkout" href="/cart/checkout"><i class="fa fa-shopping-cart"></i> Оформить заказ</a>

                    <?php else: ?>
                        <p>Корзина пуста</p>
                    <a class="btn btn-outline-primary checkout" href="/"> Вернуться к покупкам</a>
                    <?php endif; ?>
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

