<?php
// Не пробовал запускать, но должно работать!
file_put_contents('counter.txt', file_get_contents('counter.txt') + 1);

$value = file_get_contents('test.txt');

if (isset($_POST['value'])) {
    $value = $_POST['value'];
    file_put_contents('test.txt', $value);
}

?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Совместный сайт</title>
</head>
<body>

<p>Это просто сайт, на котором мы тестили работу с Git!</p>
<p><?= $value ?></p>

<form action="#" method="post" id="test">
    <label>
        <textarea name="value" cols="30" rows="10"> <?= $value ?></textarea>
    </label>

    <input type="submit" value="Записать" form="test">
</form>



</body>
</html>