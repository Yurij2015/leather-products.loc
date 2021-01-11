<!-- Footer -->
<footer class="py-5 bg-primary fixed-bottom">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; BookStore <?= date("Y") ?> Магазин интересных книг</p>
    </div>
    <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="/vendor/jquery/jquery.min.js"></script>
<script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<script>
    $(document).ready(function () {
        $(".add-to-cart").click(function () {
            let id = $(this).attr("data-id");
            $.post("/cart/addAjax/" + id, {}, function (data) {
                $("#cart-count").html(data);
            });
            return false;
        });
    });
</script>
</body>
</html>