<?php
require __DIR__ . "/../vendor/autoload.php";

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . "/../config");
$dotenv->load();

$db = null;

// 本番環境
$dsn = $_ENV["DSN"];
$user = $_ENV["DB_USER"];
$password = $_ENV["DB_PASS"];

if ($db == null) {
  $db = new PDO($dsn, $user, $password);
}

$sql = "SELECT * FROM mst_status_effect WHERE name='衰退' ORDER BY CAST(name_kana AS CHAR)";

try {
  $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
  $stmt = $db->prepare($sql);
  $stmt->execute();

  $statusList = array();

  while(true) {
    $row = $stmt -> fetch(PDO::FETCH_ASSOC);
    if($row == false) {
        break;
    }
    array_push($statusList, array(
      "statusname" => $row["name"],
      "description" => $row["description"],
      "type" => $row["type"]
    ));
  }

  $jsonstr =  json_encode($statusList);
  echo $jsonstr;
} catch (Exception $e) {
  echo ($e->getMessage());
}




