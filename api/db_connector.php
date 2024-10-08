<?php
require __DIR__ . "/../vendor/autoload.php";

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . "/../config");
$dotenv->load();

$db = null;

function getDb() {
  // 本番環境
  // $dsn = $_ENV["DSN"];
  // $user = $_ENV["DB_USER"];
  // $password = $_ENV["DB_PASS"];
  // DEV環境
  $dsn = $_ENV["DSN_DEV"];
  $user = $_ENV["DB_USER_DEV"];
  $password = $_ENV["DB_PASS_DEV"];

  global $db;
  if ($db == null) {
    $db = new PDO($dsn, $user, $password);
  }
  
  return $db;
}
