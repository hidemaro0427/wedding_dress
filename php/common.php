<?php 
//本番環境のHOST_NAME(未定)
// const HOST_NAME = "";
//ローカルのHOST_NAME
const HOST_NAME = "127.0.0.1";

const DB_NAME = "dressle";
const DB_CHARSET_SELECT = "utf8";

//本番環境のDB_USER_NAME(未定)
// const DB_USER_NAME = "";
//ローカルのDB_USER_NAME
const DB_USER_NAME = "root";

//本番環境のDB_USER_PASSWORD(未定)
// const DB_USER_PASSWORD = "";
//ローカルのDB_USER_PASSWORD
const DB_USER_PASSWORD = "";

//DB接続
function db_connect(){
  $pdo = new PDO ('mysql:host='.HOST_NAME.';dbname='.DB_NAME.'; charset='.DB_CHARSET_SELECT, DB_USER_NAME, DB_USER_PASSWORD);
  return $pdo;
}
?>