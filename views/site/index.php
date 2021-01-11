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

        </div
        <!-- /.col-lg-3 -->

        <div class="col-lg-9">

            <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img class="d-block img-fluid" src="/template/images/slider/Slide1.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block img-fluid" src="/template/images/slider/Slide2.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block img-fluid" src="/template/images/slider/Slide3.jpg" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

            <div class="row">
                <?php foreach ($latestProducts as $product) : ?>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="/product/<?= $product['id'] ?>">
                                <img class="card-img-top" src="<?= Product::getImage($product['id']); ?>" alt=""></a>
                            <div class="card-body">
                                <h5 class="card-title">
                                    <a href="/product/<?= $product['id'] ?>"><?= ucwords(strtolower($product['name'])) ?></a>
                                </h5>
                                <h5><?= $product['price'] ?></h5>
                                <p class="card-text"><?= $product['brand'] ?></p>
                            </div>
                            <div class="card-footer">
                                <a href="/cart/add/<?= $product['id'] ?>"
                                   class="btn btn-outline-primary btn-sm float-right">В корзину</a>
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

