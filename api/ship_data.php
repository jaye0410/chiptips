<?php
require_once __DIR__. "/db_connector.php";

$shipname = isset($_POST["shipname"]) ? $_POST["shipname"] : "";
$hasError = false;

if ($shipname == "") {
  $hasError = true; 
}