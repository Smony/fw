<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php \vendor\core\base\View::getMeta() ?>
    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/main.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<h1>adminka</h1>

<? echo $content ?>


<script src="/js/jquery-3.2.1.min.js"></script>
<script src="/bootstrap/js/bootstrap.min.js"></script>
<script src="/js/jquery.cookie.js"></script>
<script src="/js/script.js"></script>

<?php
foreach ($scripts as $script)  //цикл выводит все скрипты перед закрывающим тегом body, которые находятся в виде(сделано для того чтобы скрипты вставлялись после jQuery и других скриптов)
{
    echo $script;
}
?>
</body>
</html>