<?php include ROOT . '/views/layouts/header_admin.php'; ?>
<div class="container my-4">
    <div class="row">
        <div class="col-md-12">
            <h4>Редактировать заказ под номером: <?php echo $id; ?></h4>
            <hr>
            <div class="login-form">
                <form action="#" method="post">
                    <div class="form-group">
                        <label for="userName">Имя клиента</label>
                        <input type="text" class="form-control" id="userName" name="userName" placeholder="" value="<?php echo $order['user_name']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="userPhone">Телефон клиента</label>
                        <input type="text" id="userPhone" class="form-control" name="userPhone" placeholder="" value="<?php echo $order['user_phone']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="userComment">Сообщение клиента</label>
                        <input type="text" name="userComment" id="userComment" class="form-control" placeholder=""
                               value="<?php echo $order['user_comment']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="date">Дата оформления заказа</label>
                        <input type="text" class="form-control" id="date" name="date" placeholder="" value="<?php echo $order['date']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="status">Статус</label>
                        <select name="status" id="status" class="form-control">
                            <option value="1" <?php if ($order['status'] == 1) echo ' selected="selected"'; ?>>Новый
                                заказ
                            </option>
                            <option value="2" <?php if ($order['status'] == 2) echo ' selected="selected"'; ?>>В
                                обработке
                            </option>
                            <option value="3" <?php if ($order['status'] == 3) echo ' selected="selected"'; ?>>
                                Доставляется
                            </option>
                            <option value="4" <?php if ($order['status'] == 4) echo ' selected="selected"'; ?>>Закрыт
                            </option>
                        </select>
                    </div>
                    <input type="submit" name="submit" class="btn btn-outline-primary" value="Сохранить">
                    <a href="admin/order" class="btn btn-outline-warning">Назад</a>

                </form>
            </div>
        </div>
    </div>
</div>
<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

