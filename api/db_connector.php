<?php
require __DIR__ . "/../vendor/autoload.php";

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . "/../config");
$dotenv->load();

$dsn = $_ENV["DSN_DEV"];
$user = $_ENV["DB_USER_DEV"];
$password = $_ENV["DB_PASS_DEV"];

// PDOインスタンス作成
$db = new PDO($dsn, $user, $password);
