<?php
// $url = 'https://swgoh.gg/api/units/';
// $url = 'https://starwars.fandom.com/ja/wiki/%E3%83%A1%E3%82%A4%E3%83%B3%E3%83%9A%E3%83%BC%E3%82%B8';


//encodeURIComponent("アキ＝アキ");
$url = 'https://starwars.fandom.com/ja/wiki/' . $_GET['searchItem'];
// $url = 'https://docs.google.com/spreadsheets/d/1c7zwQHamuoixe60zqIcy8gaoNUfBdYWpN-SflVamY00/edit?gid=918100025#gid=918100025';
// ストリームコンテキストのオプションを作成
$options = array(
  // HTTPコンテキストオプションをセット
  'http' => array(
    'method'=> 'GET',
    // 'header'=> 'Content-type: application/json; charset=UTF-8'
  )
);

// ストリームコンテキストの作成
$context = stream_context_create($options);

$raw_data = file_get_contents($url, false, $context);

// debug
//var_dump($raw_data);

// json の内容を連想配列として $data に格納する
$data = json_decode($raw_data, true);
echo $raw_data;







