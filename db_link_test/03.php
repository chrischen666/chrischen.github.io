<?php 
	header("Content-Type: text/html; charset=utf-8");
	include("../conn/conn_fn.php");
	$seldb = mysqli_select_db($db_link, "school");
    // print_r($seldb);
    if(!$seldb){
        die("資料庫選擇失敗");
    }else{
        echo "資料庫選擇成功";
    }
    // 查詢資料
    $sql_query = "SELECT * FROM news";
    // 建立資料集
	$result = mysqli_query($db_link, $sql_query);
    // 上兩行合併解果
    // $result = mysqli_query($db_link, "SELECT * FROM students");
    print_r($result);
    $row_result = mysqli_fetch_assoc($result);
    //print_r($row_result);

    echo $row_result['n_start'];
    echo "<br/>";

    echo $row_result['n_end'];
    echo "<br/>";

    echo $row_result['n_title'];
    echo "<br/>";

    echo $row_result['n_content'];
    echo "<br/>";

    echo $row_result['n_create'];
    echo "<br/>";

    echo $row_result['n_type'];
    echo "<br/>";


    echo "<br/>";
    echo "<br/>";
    echo "<br/>";
    while($row_result = mysqli_fetch_assoc($result)){
        echo "筆數：".$row_result['n_id']."<br/>";
    }
    // print_r($row_result);
    //顯示筆數
    echo "筆數：".mysqli_num_rows($result);
?>
