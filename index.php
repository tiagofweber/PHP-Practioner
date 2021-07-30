<?php

require 'functions.php';
require 'Task.php';

$pdo = connectToDb();

$statement = $pdo->prepare('select * from todos');

$statement->execute();

$tasks = $statement->fetchAll(PDO::FETCH_CLASS, 'Task');

require 'index.view.php';
