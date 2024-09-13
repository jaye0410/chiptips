<?php
require_once __DIR__. "/db_connector.php";

$wordJp = "";
if (isset($_GET["wordJp"])) {
  $wordJp = $_GET["wordJp"];
}

getWords($wordJp);

function getWords($wordJp) {
  $sql = "SELECT * FROM mst_words";
  if ($wordJp != "") {
    $sql .= " WHERE word_jp='" . $wordJp ."'";
  }
  $sql .= " ORDER BY CAST(word_kana AS CHAR)";

  try {
    $db = getDB();
    // $db = connectDB();
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
        "wordJp" => $row["word_jp"],
        "wordKana" => $row["word_kana"],
        "wordEn" => $row["word_en"],
        "category" => $row["category"],
        "meanings" => $row["meanings"]
      ));
    }

    $jsonstr =  json_encode($statusList);
    echo $jsonstr;
  } catch (Exception $e) {
    echo ($e->getMessage());
  }
}


