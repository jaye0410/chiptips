<?php
require_once __DIR__. "/db_connector.php";

$jsonstr = "";

// 全件取得
$sql = "SELECT * FROM mst_status_effect";
try {
  $db = getDB();
  // $db = connectDB();
  $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
  $stmt = $db->prepare($sql);
  $stmt->execute();

  $statusList = array();

  while(true) {
    $row = $stmt -> fetch(PDO::FETCH_ASSOC);
    if($row == false){
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
