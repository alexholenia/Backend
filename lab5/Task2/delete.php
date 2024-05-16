<?php

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];

    try {
        $pdo = new PDO("mysql:host=localhost;dbname=lab5", "homeuser", "homeuser");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "DELETE FROM tov WHERE id=:id";
        $statement = $pdo->prepare($sql);
        $statement->bindParam(":id", $id);
        $result = $statement->execute();
        echo $result ? "Запис з ID: {$id} був успішно видалений" : "Щось пішло не так...";
        echo "<br><button onclick='location.href = `index.php`'>Повернутись</button>";
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}