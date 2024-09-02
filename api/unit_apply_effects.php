<?php
require_once __DIR__. "/db_connector.php";

$params = json_decode(file_get_contents('php://input'), true);
$statusName = $params["statusName"];

getUnitsApplyEffect($statusName);

function getUnitsApplyEffect($statusName) {
  $sql = "SELECT * FROM mst_unit_apply_effects WHERE status_name = :statusName";

  try {
    $db = getDB();
    // $db = connectDB();
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $stmt = $db->prepare($sql);
    $stmt->execute([':statusName' => $statusName]);

    $unitList = array();

    while(true) {
      $row = $stmt -> fetch(PDO::FETCH_ASSOC);
      if($row == false){
          break;
      }
      array_push($unitList, array(
        "statusName" => $row["status_name"],
        "statusType" => $row["status_type"],
        "unitName" => $row["unit_name"],
        "skillType" => $row["skill_type"],
        "skillName" => $row["skill_name"],
        "detail" => $row["detail"],
        "category" => $row["category"]
      ));
    }

    $jsonstr =  json_encode($unitList);
    echo $jsonstr;
  } catch (Exception $e) {
    echo ($e->getMessage());
  }
}