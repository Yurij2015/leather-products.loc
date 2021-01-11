<?php
include ROOT . "/views/layouts/header.php";
?>
<!-- Page Content -->
<div class="container" style="margin-bottom: 100px;">
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
        <div class="col-lg-9 my-4">
            <div class="row">
                <?php foreach ($latestProducts as $product) : ?>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="#">
                                <img class="card-img-top" src="<?= Product::getImage($product['id']); ?>" alt="">
                            </a>
                            <div class="card-body">
                                <h6 class="card-title">
                                    <a href="/product/<?= $product['id'] ?>"><?= ucwords(strtolower($product['name'])) ?></a>
                                </h6>
                                <h5><?= $product['price'] ?></h5>
                                <p class="card-text"><?= $product['brand'] ?></p>
                            </div>
                            <div class="card-footer">
<!--                                <a href="/cart/add/--><?//= $product['id'] ?><!--" class="btn btn-outline-primary btn-sm float-right">В корзину</a>-->
                                <a href="#" data-id="<?= $product['id'] ?>"
                                   class="add-to-cart btn btn-outline-primary btn-sm float-right ">В корзину</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

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

