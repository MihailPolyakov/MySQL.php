<?php
$pdo = new PDO("mysql:host=localhost;dbname=todo", "Miha", "Qwerty123");
$contacts = $pdo->prepare("CREATE TABLE contacts (
id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
first_name varchar(30) NULL,
second_name varchar(30) NULL,
number bigint NOT NULL
) ENGINE = InnoDB, DEFAULT CHARSET = utf8 ");
$contacts->execute();