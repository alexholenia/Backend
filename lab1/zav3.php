<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Завдання 2</title>
</head>
<body>
    <?php
        $sum = 2400;
        $usd = 38.24;

        echo "$sum ₴ можна обміняти на " . floor($sum/$usd) . " $";
    ?>
</body>
</html>