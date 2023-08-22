<?php
include("./conn/conn_obj.php");
$sql = "SELECT * FROM qt;";
$result = $db_link->query($sql);
$sql = "SELECT * FROM qa;";
$result1 = $db_link->query($sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Business</title>
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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <!-- 匯入區stop -->
    <style>
        .qa {
            font-weight: 700;
            font-size: 2rem;
            margin-top: 20px;
            margin-bottom: 20px;
        }

        .accordion-button-self {
            position: relative;
            display: flex;
            align-items: center;
            width: 100%;
            padding: var(--bs-accordion-btn-padding-y) var(--bs-accordion-btn-padding-x);
            font-size: 1rem;
            color: black;
            text-align: left;
            background-color: white;
            border: 0;
            border-radius: 0;
            overflow-anchor: none;
            transition: var(--bs-accordion-transition)
        }

        .bg {
            margin-bottom: 40px;
        }

        .accordion-button-self::after {
            font-family: "Font Awesome 5 Free";
            /* 如果你使用的是 Font Awesome 图标库 */
            content: '\f078';
            /* 替换为正确的箭头图标代码 */

            position: absolute;
            top: 50%;
            right: 1rem;
            transform: translateY(-50%);
            font-size: 0.75rem;
            font-weight: bold;
            transition: transform 0.2s;
        }

        .accordion-button-self[aria-expanded="true"]::after {
            transform: translateY(-50%) rotate(180deg);
        }
    </style>
</head>
<body>
    

<!-- nav start -->
<div id="nav" style="width: 100%;">
    <?php include('./php/nav.php'); ?>

</div>

<!-- nav stop -->
<!-- 主體start -->
<div class="container bg">
    <div class="qa">常見問題</div>


    <div id="accordion" class="accordion">
        <?php
        while ($row = $result->fetch_assoc()) {
        ?>
            <div class="accordion-item">
                <h2 class="accordion-header" id="heading<?php echo $row['qt_id']; ?>">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $row['qt_id']; ?>" aria-expanded="false" aria-controls="collapse<?php echo $row['qt_id']; ?>">
                        <?php echo $row['qt_title']; ?>
                    </button>
                </h2>

                <div id="collapse<?php echo $row['qt_id']; ?>" class="accordion-collapse collapse show" aria-labelledby="heading<?php echo $row['qt_id']; ?>" data-bs-parent="#accordion">
                    <div class="accordion-body">
                        <div id="accordion-inner" class="accordion">
                            <?php
                            while ($row1 = $result1->fetch_assoc()) {
                            ?>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="innerHeading<?php echo $row1['qa_id']; ?>">
                                        <button class="accordion-button-self" type="button" data-bs-toggle="collapse" data-bs-target="#innerCollapse<?php echo $row1['qa_id']; ?>" aria-expanded="false" aria-controls="innerCollapse<?php echo $row1['qa_id']; ?>">
                                            <?php echo $row1['qa_q']; ?>
                                        </button>
                                    </h2>
                                    <div id="innerCollapse<?php echo $row1['qa_id']; ?>" class="accordion-collapse collapse" aria-labelledby="innerHeading<?php echo $row1['qa_id']; ?>" data-bs-parent="#accordion-inner">
                                        <div class="accordion-body">
                                            <?php echo $row1['qa_ans']; ?>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
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