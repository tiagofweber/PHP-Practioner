<?php

$config = require 'config.php';
require 'database/Connection.php';
require 'database/QueryBuilder.php';

return new QueryBuilder(Connection::make($config['database']));

function dd ($data) {
    echo '<pre>';
    die(var_dump($data));
    echo '</pre>';
}
