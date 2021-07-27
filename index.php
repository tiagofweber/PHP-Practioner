<?php

require 'functions.php';

try {
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=mytodo', 'root', '123456');
    $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
} catch (\PDOException $e) {
    echo $e->getMessage();
}

$statement = $pdo->prepare('select * from todos');

$statement->execute();

$tasks = $statement->fetchAll(PDO::FETCH_OBJ);

require 'index.view.php';
