<?php
//通常一開始判斷可寫php的位置
include("./conn/conn_obj.php");
//sql語法與query
$sql = "SELECT b_info, b_title, b_description, b_images, b_price, CONCAT(DATEDIFF(b_deadline, CURDATE()), '天') AS b_deadline FROM great LIMIT 0, 25;
";
$result = $db_link->query($sql);
// print_r($result);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>language</title>
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

<!-- 主體start -->
<div class="container">
    <div class="row">
        <h2>所有影音課程</h2>
    </div>
    <div id="cont" class="row">
    </div>
</div>
<div class="container">

    <div class="row">
        <!-- php匯入 -->
        <?php
        while ($row_result = $result->fetch_assoc()) {
        ?>
            <div class="col-lg-3 col-md-6 col-sm-6 my-2">
                <div class="card">
                    <div class="pic">
                        <img src="images/<?php echo $row_result['b_images']; ?>.png" class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row_result['b_title']; ?></h5>
                        <p class="card-text"><?php echo $row_result['b_description']; ?></p>
                        <!-- <p class="text-info">募資倒數<?php echo $row_result['b_deadline']; ?></p>
                            <div class="progress">
                                <div class="progress-bar w-<?php echo $row_result['b_info']; ?>  bg-info" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"><?php echo $row_result['b_info']; ?>%</div>
                            </div> -->
                        <p class="price">NT$<?php echo $row_result['b_price']; ?></p>

                        <a href="#" class="btn btn-outline-info">加入購物車</a>
                    </div>
                </div>
            </div>
        <?php } ?>

        <!-- php匯入 stop -->
    </div>
</div>
<!-- 主體stop -->

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