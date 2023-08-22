<?php
//連線參數
$db_host="localhost";
$db_username="root";
$db_password="";
$db_name = "school";
//連線資料庫 new 表示實體化 物件供使用
$db_link = new mysqli($db_host, $db_username, $db_password, $db_name);
//錯誤處理
// print_r($db_link->client_version);
if ($db_link->connect_error != "") {
    echo "資料庫連結失敗！";
}else{
    //設定字元集與編碼
    $db_link->query("SET NAMES 'utf8'");
}
?>