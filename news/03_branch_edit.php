<?php
include("../conn/conn_obj.php");

if (isset($_GET["action"]) && ($_GET["action"] == "edit")) {
    
    $sql_query = "UPDATE n_news SET n_start=?,n_end=?,n_title=?,n_content=?,n_type=? WHERE n_id=?";
    $stmt = $db_link->prepare($sql_query);
    $stmt->bind_param("sssssi", $_GET["n_start"], $_GET["n_end"], $_GET["n_title"], $_GET["n_content"], $_GET["n_type"], $_GET["n_id"]);
    $stmt->execute();
    $stmt->close();
    header("Location: table.php");
}

$sql_select = "SELECT `n_id`,`n_start`, `n_end`, `n_title`, `n_content`,`n_type` FROM n_news WHERE n_id = ?";
$stmt = $db_link->prepare($sql_select);
$stmt->bind_param("i", $_GET["new_id"]);
$stmt->execute();
$stmt->bind_result($n_id, $n_start, $n_end, $n_title, $n_content, $n_type);
$stmt->fetch();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>edit</title>
    <!-- 匯入區start -->
    <link rel="stylesheet" href="../style/body.css">
    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/Carousel.js"></script>
    <link href="../source/cdn.jsdelivr.net_npm_bootstrap@5.3.0_dist_css_bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="../source/unpkg.com_aos@2.3.1_dist_aos.css" rel="stylesheet">
    <script src="../source/unpkg.com_aos@2.3.1_dist_aos.js"></script>
    <!-- 匯入區stop -->

</head>
<!-- nav start -->
<div id="nav" style="width: 100%;">
    <?php include('../php/nav.php'); ?>

</div>
<!-- nav stop -->

<!-- table start -->
<div class="container rounder-4 p-3 bg-white shadow">
    <div class="pt-2 pb-0">


        <h2 class="text-center">最新消息管理系統-修改資料<a href="./table.php" class="btn btn-success" style="margin-left: 3rem;">回主畫面</a></h2>

        <form action="./03_branch_edit.php" method="get">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>欄位</th>
                                    <th>資料</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>開始時間</td>
                                    <td><input type="date" name="n_start" id="n_start" class="form-control" value="<?php echo $n_start; ?>"></td>
                                </tr>
                                <tr>
                                    <td>結束時間</td>
                                    <td><input type="date" name="n_end" id="n_end" class="form-control" value="<?php echo $n_end; ?>"></td>
                                </tr>
                                <tr>
                                    <td>標題</td>
                                    <td><input type="text" name="n_title" id="n_title" class="form-control" value="<?php echo $n_title; ?>"></td>
                                </tr>
                                <tr>
                                    <td>內容</td>
                                    <td><input type="text" name="n_content" id="n_content" class="form-control" value="<?php echo $n_content; ?>"></td>
                                </tr>
                                <!-- <tr>
                                    <td>創造時間</td>
                                    <td><input type="date" name="n_create" id="n_create" class="form-control"></td>
                                </tr> -->
                                <tr>
                                    <td>類型</td>
                                    <td><input type="text" name="n_type" id="n_type" class="form-control" value="<?php echo $n_type; ?>"></td>
                                </tr>
                                <tr>
                                    <td colspan="2" align="center">
                                        <input name="action" type="hidden" value="edit">
                                        <button type="submit" class="btn btn-primary" value="編輯資料">編輯資料<?php echo $n_id;?></button>
                                        <input type="hidden" name="n_id" value="<?php echo $n_id;?>">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </form>



    </div>
</div>




<!-- table stop -->

<!-- footer start -->
<?php include('../php/footer.php'); ?>
<!-- footer stop -->


</script>
<!-- 匯入start -->
<!-- <script src="js/footer.js"></script> -->
<!-- <script src="js/nav.js"></script> -->
<!-- <script src="js/main.js"></script> -->
<script src="../source/cdn.jsdelivr.net_npm_bootstrap@5.3.0_dist_js_bootstrap.bundle.min.js"></script>

<script>
    AOS.init();
</script>
<!-- 匯入stop -->
</body>

</html>