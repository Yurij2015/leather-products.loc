<?php include ROOT . '/views/layouts/header_admin.php'; ?>
<div class="container my-4">
    <div class="row">
        <div class="col-md-12">
            <h4>Удалить заказ под номером: <?php echo $id; ?></h4>
            <p>Вы действительно хотите удалить этот заказ?</p>
            <form method="post">
                <input type="submit" name="submit" class="btn btn-outline-primary" value="Удалить" />
                <a href="admin/order" class="btn btn-outline-warning">Отмена</a>
            </form>
        </div>
    </div>
</div>
<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

