<?php
$pdo = new PDO("mysql:host=localhost;dbname=todo", "Miha", "Qwerty123");
$showTables = $pdo->prepare("SHOW TABLES");
$showTables->execute();
$new = mysql_fetch_array($showTables);
var_dump($new);
