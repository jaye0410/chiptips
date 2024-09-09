<?php
// require __DIR__ . "/../vendor/autoload.php";
require __DIR__ . "/vendor/autoload.php";

try {
  // $dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . "/../config");
  $dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . "/config");
  $dotenv->load();

  $db = null;

  $dsn = $_ENV["DSN"];

  echo $dsn;
} catch (PDOException $e) {
  echo ($e->getMessage());
}
echo __DIR__;
echo "Hello World";
