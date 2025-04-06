<?php
define('DB_USER','toto');
define('DB_PWD','');
define('DB_HOST','localhost');
define('DB_NAME','e-learning');

$dsn='mysql:host='.DB_HOST.';port=3307;dbname='.DB_NAME.';charset=utf8mb4';

try{

  $pdo=new PDO($dsn,DB_USER,DB_PWD);
  $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
  $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
}
catch(PDOException $e){
  error_log('connection failed'.$e->getMessage());
  echo $e->getMessage();
}