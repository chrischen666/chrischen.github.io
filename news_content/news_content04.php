<?php
//通常一開始判斷可寫php的位置
include("../conn/conn_obj.php");
//sql語法與query
$sql = "SELECT * FROM `n_news` WHERE `n_id` IN(4);";
$result = $db_link->query($sql);
// print_r($result);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Business</title>
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
        body {
            /* font-family: Arial, sans-serif; */
            line-height: 1.6;
        }

        h1 {
            color: #333;
            font-size: 24px;
            text-align: center;
        }

        h2 {
            color: #666;
            font-size: 20px;
            margin-top: 20px;
        }

        p {
            color: #333;
            font-size: 16px;
            margin-bottom: 16px;
        }

        .content {
            /* max-width: 600px; */
            margin: 0 auto;
            padding: 20px;
            background-color: #f8f8f8;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body>


    <!-- nav start -->
    <div id="nav" style="width: 100%;">
        <?php include('../php/nav.php'); ?>

    </div>
    <!-- nav stop -->

    <!-- 主體start -->
    <div class="container content">
        <?php while ($row_result = $result->fetch_assoc()) { ?>

            <div class="d-flex justify-content-between">
                <div style="width: 108px; height: 37px;">
                </div>
                <h1>
                    <?php echo $row_result['n_title']; ?>
                </h1>
                <button class="rounded-3 p-1 mb-2 bg-info">
                    <a class="text-dark text-decoration-none" href="../news.php">回到最新消息</a>
                </button>
            </div>
            <hr>

            <div style="text-align:end">發佈日期<?php echo $row_result['n_start']; ?></div>
            <div>

                <span><?php echo $row_result['n_content']; ?></span>

            </div>

        <?php } ?>




    </div>
    <!-- 主體stop -->

    <!-- footer start -->
    <?php include('../php/footer.php'); ?>
    <!-- footer stop -->



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