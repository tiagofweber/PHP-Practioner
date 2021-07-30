<?php

function connectToDb() {
    try {
        $pdo = new PDO('mysql:host=127.0.0.1;dbname=mytodo', 'root', '123456');
        $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (\PDOException $e) {
        echo $e->getMessage();
    }
}

function fetchAllTasks($pdo) {
    $statement = $pdo->prepare('select * from todos');

    $statement->execute();

    return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
}

function dd ($data) {
    echo '<pre>';
    die(var_dump($data));
    echo '</pre>';
}
