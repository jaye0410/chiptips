<?php
// https://swgoh.gg/api/player/769716198/
// https://swgoh.gg/api/guild-profile/9yjv7beXRzKToleAvgRTkg/
$response = array(
  "hasError" => false,
  "errorMessage" => ""
);

$ally_code = isset($_GET["ally_code"]) ? $_GET["ally_code"] : "";
if ($ally_code == "") {
  $response["hasError"] = true;
  $response["errorMessage"] = "同盟コードが未入力、あるいは未登録です。";
  echo json_encode($response);
  return;
}

$player_url = "https://swgoh.gg/api/player/" . $ally_code . "/";

// ストリームコンテキストのオプションを作成
$options = array(
  // HTTPコンテキストオプションをセット
  "http" => array(
    "method"=> "GET",
  )
);

$context = stream_context_create($options);
try {
  // 同盟コードからギルドIDを取得
  $raw_data = file_get_contents($player_url, false, $context);
  $warning = ob_get_contents();
  ob_end_clean();
  //Warningがあれば例外を投げる
  if ($warning) {
    throw new Exception($warning);
  }

  $data = json_decode($raw_data, true);
  $player_data = $data["data"];

  // 取得したギルドIDから全メンバーの育成状況を取得
  $guild_url = "https://swgoh.gg/api/guild-profile/" . $player_data["guild_id"] . "/";
  $raw_data = file_get_contents($guild_url, false, $context);

  // 同盟コードの存在確認済なのでWarningチェックはしない
  $data = json_decode($raw_data, true);
  $guild_data = $data["data"];
  $members = $guild_data["members"];

  $result = array();
  for ($i = 0; $i < count($members); $i ++) {
    $tmp_ally_code = json_encode($members[$i]["ally_code"]);
    $tmp_raw_data = file_get_contents("https://swgoh.gg/api/player/" . $tmp_ally_code . "/", false, $context);
    
    $tmp_data = json_decode($tmp_raw_data, true);
    $player_name = $tmp_data["data"]["name"];
    $tmp_unit_data = $tmp_data["units"];
    for ($j = 0; $j < count($tmp_unit_data); $j ++) {
      $relic_tier = $tmp_unit_data[$j]["data"]["relic_tier"] == null ? "0" : $tmp_unit_data[$j]["data"]["relic_tier"];

      $relic = intval($relic_tier) - 2;
      $unit_name = $tmp_unit_data[$j]["data"]["name"];
      if ($unit_name == "Hermit Yoda" && $relic >= 5) {
        echo json_encode(array("name" => $player_name, "unit_name" => $unit_name, "gear" => $relic));
        // array_push(
        //   $result,
        //   array("name" => $player_name, "unit_name" => $unit_name, "gear" => $relic)
        // );
      }
    }
    
    // echo json_encode($result);
  }

} catch (Exception $e) {
  $response["hasError"] = true;
  $response["errorMessage"] = "存在しない同盟コードです。";
  echo json_encode($response);
}


// debug
//var_dump($raw_data);

