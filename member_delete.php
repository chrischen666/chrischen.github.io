<?php
include("./conn/conn_obj.php");

if (isset($_GET["action"]) && ($_GET["action"] == "del")) {

    $sql_query = "DELETE FROM member WHERE mID=?";
    $stmt = $db_link->prepare($sql_query);
    $stmt->bind_param("i", $_GET["mID"]);
    $stmt->execute();
    $stmt->close();

    header("Location: member.php");
}

$sql_select = "SELECT `mID`, `mName`, `mEmail`, `mPassword`, `mType`, `mPoints` FROM member WHERE `mID` = ?";
$stmt = $db_link->prepare($sql_select);
$stmt->bind_param("i", $_GET["new_id"]);
$stmt->execute();
$stmt->bind_result($mID, $mName, $mEmail, $mPassword, $mType, $mPoints);
$stmt->fetch();
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>會員資料管理-刪除資料</title>
    <!-- 匯入區start -->
    <link rel="stylesheet" href="style/body.css">
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/Carousel.js"></script>
    <link href="source/cdn.jsdelivr.net_npm_bootstrap@5.3.0_dist_css_bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="source/unpkg.com_aos@2.3.1_dist_aos.css" rel="stylesheet">
    <script src="source/unpkg.com_aos@2.3.1_dist_aos.js"></script>
    <!-- 匯入區stop -->

</head>
<!-- nav start -->
<div id="nav" style="width: 100%;">
    <?php include('./php/nav.php'); ?>

</div>
<!-- nav stop -->

<!-- table start -->
<div class="container rounder-4 p-3 bg-white shadow">
    <div class="pt-2 pb-0">
        <h2 class="text-center">會員資料管理系統-刪除資料<a href="./member.php" class="btn btn-success" style="margin-left: 3rem;">回主畫面</a></h2>

        <form action="member_delete.php" method="get">
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
                                    <td>姓名</td>
                                    <td>
                                        <p><?php echo $mName; ?> </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>電子郵件</td>
                                    <td>
                                        <p><?php echo $mEmail; ?></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>密碼</td>
                                    <td>
                                        <p><?php echo $mPassword; ?></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>會員類型</td>
                                    <td>
                                        <p><?php echo $mType == 's' ? '學員' : '教師'; ?></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>點數餘額</td>
                                    <td>
                                        <p><?php echo $mPoints; ?></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" align="center">
                                        <input name="action" type="hidden" value="del">
                                        <button type="submit" class="btn btn-primary">刪除資料<?php echo $mID; ?></button>
                                        <input name="mID" type="hidden" value="<?php echo $mID; ?>">
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
<?php include('./php/footer.php'); ?>
<!-- footer stop -->
<!-- 匯入start -->
<!-- <script src="js/footer.js"></script> -->
<!-- <script src="js/nav.js"></script> -->
<!-- <script src="js/main.js"></script> -->
<script src="source/cdn.jsdelivr.net_npm_bootstrap@5.3.0_dist_js_bootstrap.bundle.min.js"></script>
<script>
    AOS.init();
</script>
<!-- 匯入stop -->
</body>

</html>