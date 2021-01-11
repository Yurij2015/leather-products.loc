<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Админпанель</title>
    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="/vendor/tinymce/js/tinymce/tinymce.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: '#description',
            plugins: 'advlist autolink link image lists charmap print preview code',
            toolbar: "image code",
            language: 'ru',
            height: "480",
        });
    </script>
</head><!--/head-->
<body>
<div class="container">
    <nav class="navbar navbar-expand-sm bg-secondary navbar-dark">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a href="/admin" class="nav-link"> Админпанель</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/">Сайт</a>
            </li>
        </ul>
    </nav>
</div>

               