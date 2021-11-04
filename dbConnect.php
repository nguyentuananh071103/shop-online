<?php

include_once'DB.php';

$dbConnect = new DB();

$sql = "SELECT * FROM products where id = 1";
$stmt = $dbConnect->connect()->queuy($sql);
$result = $stmt->fetchAll();

echo "<pre>";
var_dump($result);
die();