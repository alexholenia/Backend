<?php

require_once "Database.php";

$db = new Database();
$pdo = $db->getPdo();

$sql = "SELECT AVG(salary) AS average_salary FROM employees";
$statement = $pdo->query($sql);
$average_salary = $statement->fetch(PDO::FETCH_ASSOC)["average_salary"];

$sql = "SELECT position, COUNT(*) as count FROM employees GROUP BY position";
$statement = $pdo->query($sql);
$positions = $statement->fetchAll(PDO::FETCH_ASSOC);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Статистика</title>
</head>
<body>
<h1>Статистика</h1>
<h2>Середня зарплата: $<?php echo number_format($average_salary, 2); ?></h2>
<h2>Посади робітників:</h2>
<ul>
    <?php
    foreach ($positions as $position): ?>
        <li><?php
            echo $position['position'] . ': ' . $position['count']; ?></li>
    <?php
    endforeach; ?>
</ul>
<button onclick="location.href = 'index.php'" type="button">Повернутись</button>
</body>
</html>