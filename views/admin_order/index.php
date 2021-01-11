<?php include ROOT . '/views/layouts/header_admin.php'; ?>
<div class="container my-4">
    <div class="row">
        <div class="col-md-12">
            <h4>Список заказов</h4>
            <br/>
            <table class="table-bordered table-striped table">
                <tr>
                    <th>ID заказа</th>
                    <th>Имя покупателя</th>
                    <th>Телефон покупателя</th>
                    <th>Дата оформления</th>
                    <th>Статус</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
                <?php foreach ($ordersList as $order): ?>
                    <tr>
                        <td>
                            <a href="/admin/order/view/<?php echo $order['id']; ?>">
                                <?php echo $order['id']; ?>
                            </a>
                        </td>
                        <td><?php echo $order['user_name']; ?></td>
                        <td><?php echo $order['user_phone']; ?></td>
                        <td><?php echo $order['date']; ?></td>
                        <td><?php echo Order::getStatusText($order['status']); ?></td>
                        <td><a href="/admin/order/view/<?php echo $order['id']; ?>" >Смотреть</a></td>
                        <td><a href="/admin/order/update/<?php echo $order['id']; ?>">Редактировать</a></td>
                        <td><a href="/admin/order/delete/<?php echo $order['id']; ?>">Удалить</a></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>
<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

