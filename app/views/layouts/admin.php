<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php \fw\core\base\View::getMeta(); ?>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link href="/css/main.css" rel="stylesheet">
</head>
<body>
<div class="container">

        <ul class="nav nav-pills">
            <li><a href="/">Home</a></li>
            <li><a href="/page/about">About</a></li>
            <li><a href="/admin">Админка</a></li>
<!--            --><?php //foreach($menu as $item) : ?>
<!--                <li><a href="/category/--><?//=$item['id']?><!--">--><?//=$item['title']?><!--</a></li>-->
<!--            --><?php //endforeach; ?>
        </ul>

    <h1>Админка</h1>
    <?=$content?>

    <?//= debug(\fw\core\Db::$countsql); ?>
    <?//= debug(\fw\core\Db::$queries); ?>
</div>
<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
<?php
foreach ($scripts as $script) {
    echo $script;
}
?>

</body>
</html>