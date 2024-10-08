<?php
require_once __DIR__. "/db_connector.php";

/* 本番環境 */
//$dsn = 'mysql:host=mysql212.phy.lolipop.lan;dbname=********-test;charset=utf8';

// データの受け取り
$username = isset($_POST["username"]) ? $_POST["username"] : "";
$email = isset($_POST["email"]) ? $_POST["email"] : "";
$inquiry = isset($_POST["inquiry"]) ? $_POST["inquiry"] : "";
$hasError = false;

if ($inquiry == "") {
  $hasError = true; 
}

$name = htmlspecialchars($username, ENT_QUOTES, 'UTF-8');
$email = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
$inquiry = htmlspecialchars($inquiry, ENT_QUOTES, 'UTF-8');

$mailInfo = "";
try {
  // $dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . "/../config");
  // $dotenv->load();

  // $dsn = $_ENV["DSN_DEV"];
  // $user = $_ENV["DB_USER_DEV"];
  // $password = $_ENV["DB_PASS_DEV"];

  // // PDOインスタンス作成
  // $db = new PDO($dsn, $user, $password);
  $db = getDB();
  $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
  // プリペアドステートメント作成
  $stmt = $db->prepare("
    INSERT INTO trn_contact (user_name, email, inquiry)
    VALUES (:username, :email, :inquiry)"
  );
  // プリペアドステートメントにパラメータ割り当て
  $stmt->bindParam(':username', $username, PDO::PARAM_STR);
  $stmt->bindParam(':email', $email, PDO::PARAM_STR);
  $stmt->bindParam(':inquiry', $inquiry, PDO::PARAM_STR);

  $stmt->execute();

  // ここからメール送信処理
  mb_language("Japanese");
  mb_internal_encoding("UTF-8");

  $to = "jaye412@gmail.com";
  $subject = "ChipTips問い合わせ";
  $message = $inquiry;
  $headers = "From: info@swgoh-chiptips.jp";
  
  if (mb_send_mail($to, $subject, $message, $headers)) {
    $mailInfo = "Send mail successful.";
  } else {
    $mailInfo = "Send mail failed.";
  }

} catch (PDOException $e){
  $hasError = true;
} finally {
  $response = array(
    "username" => $username,
    "email" => $email,
    "inquiry" => $inquiry,
    "hasError" => $hasError,
    "mailInfo" => $mailInfo
  );
  
  $jsonstr =  json_encode($response);
  echo $jsonstr;
}
