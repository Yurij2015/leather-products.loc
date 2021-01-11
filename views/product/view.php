<?php
include ROOT . "/views/layouts/header.php";
?>
<!-- Page Content -->
<div class="container" style="margin-bottom: 130px;">
    <div class="row">
        <div class="col-lg-3">
            <h3 class="my-3">Категории</h3>
            <div class="list-group">
                <?php foreach ($categories as $categoryItem) : ?>
                    <a href="/category/<?= $categoryItem['id']; ?>" class="list-group-item" style="text-decoration: none;">
                        <?= $categoryItem['name']; ?>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
        <!-- /.col-lg-3 -->
        <div class="col-lg-9">
            <div class="card mt-4 mb-4">
                <img class="card-img-top img-fluid" src="<?= Product::getImage($product['id']); ?>" alt="">
                <div class="card-body">
                    <h3 class="card-title"><?= $product['name']?> </h3>
                    <h4><?= $product['price'] ?> р. </h4>
                    <p class="card-text"><?= $product['description'] ?></p>
                    <a href="#" data-id="<?= $product['id'] ?>"
                       class="add-to-cart btn btn-outline-primary btn-sm float-right ">В корзину</a>
                </div>
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col-lg-9 -->
    </div>
</div>
<!-- /.container -->
<?php
include ROOT . "/views/layouts/footer.php";
?>
