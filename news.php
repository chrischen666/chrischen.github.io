<?php
//通常一開始判斷可寫php的位置
include("./conn/conn_obj.php");
//sql語法與query
$sql = "SELECT * FROM n_news;";
$result = $db_link->query($sql);
// print_r($result);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>News</title>
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
    <style>


        .news ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .news li {
            margin-bottom: 10px;
            position: relative;
            margin: 0;
            border-bottom: 1px dotted #666;

        }

        .news a {
            display: block;
            padding: 15px 0 15px 17px;
            color: #333;
            text-decoration: none;
            margin: 0 100px 0 0;
        }

        .news span {
            position: absolute;
            right: 0;
            top: 15px;
        }

        .news li[type="平台公告"]:hover a {
            color: blue;
        }

        .news li[type="2023年sos計畫"]:hover a {
            color: red;
        }

        .news li[type="2023育網盃"]:hover a {
            color: green;
        }

        .news h2 {
            padding-left: 17px;
        }

        .bg {
            background-color: white;
            padding-top: 20px;
        }
        body{
            background-color: #f5f5f5;
        }
    </style>

</head>

<body>


    <!-- nav start -->
    <div id="nav" style="width: 100%;">
        <?php include('./php/nav.php'); ?>

    </div>
    <!-- nav stop -->

    <!-- news start -->

    <div class="container bg">
        <div class="row">
            <div class="col-3 hidden-xs news">
                <nav>
                    <h2>112年學習平台</h2>
                    <ul>
                        <li><a href="#">最新消息</a></li>
                        <li><a href="#">資訊公開</a></li>
                        <li><a href="#">徵才訊息</a></li>

                    </ul>
                </nav>
            </div>
            <div class="col-9 news">
                <ul>
                    <h2>最新消息</h2>
                    <?php while ($row_result = $result->fetch_assoc()) {
                        $type = $row_result['n_type']; 
                    ?>
                        <li class="list-item" type="<?php echo $type; ?>">
                            <a href="./news_content/<?php echo $row_result['n_link']; ?>"><?php echo $row_result['n_title']; ?></a>
                            <span><?php echo $row_result['n_start']; ?></span>
                        </li>
                    <?php } ?>

                </ul>
            </div>

        </div>
        <br><br>
    </div>


    <!-- news stop -->

    <!-- footer start -->
    <?php include('./php/footer.php'); ?>
    <!-- footer stop -->


    </script>
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