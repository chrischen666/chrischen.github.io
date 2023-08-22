<?php
if (isset($_GET['action']) && ($_GET['action'] == "add")) {
    $n_start = $_GET["n_start"];
    $n_end = $_GET["n_end"];
    $n_title = $_GET["n_title"];
    $n_content = $_GET["n_content"];
    $n_type = $_GET["n_type"];
    //1.插資料query
    include('../conn/conn_obj.php');
    $sql_query = "INSERT INTO `n_news` ( `n_start`, `n_end`, `n_title`, `n_content`, `n_type`) 
VALUES ('$n_start','$n_end','$n_title','$n_content','$n_type')";
$result = $db_link->query($sql_query);

    // 2.插入資料 使用prepare

    // include('./conn/conn_obj.php');
    // $sql_query = "INSERT INTO `n_news` ( `n_start`, `n_end`, `n_title`, `n_content`, `n_type`)
    // VALUES (?,?,?,?,?)";
    // $stmt = $db_link->prepare($sql_query);
    // $stmt->bind_param(
    //     'sssss',
    //     $_GET["n_start"],
    //     $_GET["n_end"],
    //     $_GET["n_title"],
    //     $_GET["n_content"],
    //     $_GET["n_type"]
    // );
    // //中間有時會需要while跑資料顯示
    // $stmt->execute();
    // $stmt->close();
    // $db_link->close();

    //重新導向回到主畫面
    header("Location: table.php");
}
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

        <!-- <?php echo '---------------' . $_GET['action']; ?> -->

        <h2 class="text-center">最新消息管理系統-新增<a href="./table.php" class="btn btn-success" style="margin-left: 3rem;">回主畫面</a></h2>

        <form action="./03_branch_add.php" method="get">
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
                                    <td><input type="date" name="n_start" id="n_start" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td>結束時間</td>
                                    <td><input type="date" name="n_end" id="n_end" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td>標題</td>
                                    <td><input type="text" name="n_title" id="n_title" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td>內容</td>
                                    <td><input type="text" name="n_content" id="n_content" class="form-control"></td>
                                </tr>
                                <!-- <tr>
                                    <td>創造時間</td>
                                    <td><input type="date" name="n_create" id="n_create" class="form-control"></td>
                                </tr> -->
                                <tr>
                                    <td>類型</td>
                                    <td><input type="text" name="n_type" id="n_type" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td colspan="2" align="center">
                                        <input name="action" type="hidden" value="add">
                                        <input type="submit" class="btn btn-primary" value="新增資料">
                                        <input type="reset" class="btn btn-secondary" value="重新填寫">
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