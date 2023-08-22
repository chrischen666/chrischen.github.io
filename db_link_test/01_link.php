<?php
// 0.編碼設定
header("content-type:text/html; charset=utf-8");
// 1.連線設定 (確認 apache 與 mysql 是否有啟動)
$db_link = @mysqli_connect("localhost","root","1234");
//echo 顯示字串  顯示物件或陣列會有錯誤
// echo $db_link;
// print_r($db_link);
if(!$db_link){
    echo "資料庫連線成功";
}else{
    die("資料庫連線失敗");
}



// test
?>