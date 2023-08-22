<?php
//通常一開始判斷可寫php的位置
include("../conn/conn_obj.php");
//sql語法與query
$sql = "SELECT SUBSTRING(n_content, 1, 20) AS n_content, `n_id`,`n_start`,`n_end`,`n_title`,`n_create`,`n_type` FROM n_news;
;";
$result = $db_link->query($sql);

// print_r($result);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>最新消息管理系統</title>
    <!-- 匯入區start -->
    <link rel="stylesheet" href="../style/body.css">
    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/Carousel.js"></script>
    <link href="../source/cdn.jsdelivr.net_npm_bootstrap@5.3.0_dist_css_bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <!-- <link href="source/unpkg.com_aos@2.3.1_dist_aos.css" rel="stylesheet"> -->
    <!-- <script src="source/unpkg.com_aos@2.3.1_dist_aos.js"></script> -->
    <!-- 匯入區stop -->

    <style>
        .container {
            max-width: 1600px;
        }

        th {
            font-size: 1rem;
        }

        tbody,
        td,
        tfoot,
        th,
        thead,
        tr {
            border-color: inherit;
            border-style: solid;
            border-width: initial;
        }
    </style>
</head>
<!-- nav start -->
<div id="nav" style="width: 100%;">
    <?php include('../php/nav.php'); ?>

</div>
<!-- nav stop -->

<!-- table start -->
<div class="container rounded-4  p-3 bg-white shadow">
    <div class="text-center pt-2 pb-0">
        <h2>最新消息管理系統</h2>

        <p class="lh-lg">目前資料筆數:<?php echo $result->num_rows; ?>筆，<a href="03_branch_add.php" style="text-decoration: none;">新增資料</a> </p>

    </div>
    <table class="table-sm table-striped table table-hover text-center" style="font-size:0.8rem;">
        <thead>
            <tr>
                <th>NO</th>
                <th>開始</th>
                <th class="col">到期</th>
                <th class="col">標題</th>
                <th class="col">內容</th>
                <th class="col">創建時間</th>
                <th class="col">類型</th>
                <th class="col" style="width:120px">編輯or刪除 </th>
            </tr>
        </thead>
        <tbody>

            <?php $num = 1;
            while ($row_result = $result->fetch_assoc()) { ?>

                <tr>
                    <td class="align-middle "><?php echo $num;
                                                $num++; ?></td>
                    <td class="align-middle text-nowrap"><?php echo $row_result['n_start']; ?></td>
                    <td class="align-middle text-nowrap"><?php echo $row_result['n_end']; ?></td>
                    <td class="align-middle text-nowrap"><?php echo $row_result['n_title']; ?></td>
                    <td class="align-middle text-st art"><?php echo $row_result['n_content']; ?></td>
                    <td class="align-middle text-nowrap"><?php echo $row_result['n_create']; ?></td>
                    <td class="align-middle  text-nowrap"><?php echo $row_result['n_type']; ?></td>
                    <td class="align-middle">
                        <a class="btn btn-sm btn-secondary my-0" href="03_branch_edit.php?new_id=<?php echo $row_result['n_id']; ?>">編輯</a>
                        |
                        <a class="btn btn-sm btn-danger my-0" href="03_branch_delete.php?new_id=<?php echo $row_result['n_id']; ?>">刪除</a>
                    </td>
                </tr>

            <?php } ?>

        </tbody>
    </table>
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

<!-- <script>
    AOS.init();
</script> -->
<!-- 匯入stop -->
</body>

</html>