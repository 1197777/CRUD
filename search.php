<?php

define("DB_HOST", "localhost");
define("DB_NAME", "crud2");
define("DB_CHARSET", "utf8mb4");
define("DB_USER", "root");
define("DB_PASSWORD", "");
 

try {
  $pdo = new PDO(
    "mysql:host=".DB_HOST.";charset=".DB_CHARSET.";dbname=".DB_NAME,
    DB_USER, DB_PASSWORD, [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]
  );
} catch (Exception $ex) { exit($ex->getMessage()); }


$stmt = $pdo->prepare("SELECT * FROM `search` WHERE `land` LIKE ? OR `werelddeel` LIKE ?");
$stmt->execute([
    "%".$_POST["search"]."%", "%".$_POST["search"]."%"
]);
$results = $stmt->fetchAll();
?>