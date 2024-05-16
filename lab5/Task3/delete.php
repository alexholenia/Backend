<?php
require_once "Database.php";

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];

    try {
        $db = new Database();
        $pdo = $db->getPdo();

        $sql = "DELETE FROM employees WHERE id=:id";
        $statement = $pdo->prepare($sql);
        $statement->bindParam(":id", $id);
        $result = $statement->execute();
        echo $result ? "Запис з ID: {$id} був успішно видалений" : "Щось пішло не так...";
        echo "<br><button onclick='location.href = `index.php`'>Повернутись</button>";
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}