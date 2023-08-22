<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>connection</title>
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
        * {
            box-sizing: border-box;
        }

        .mg {
            margin-top: 50px;
        }

        .top_control {
            text-align: center;
            margin-bottom: 20px;
            position: relative;

        }

        .top_control h2 {
            color: #0C512D;
            font-weight: 600;
        }

        .h2 {

            text-align: center;
            display: block;
            color: #fff;
            font-weight: 700;
            padding: 5px 0;
            margin-bottom: 20px;
            background-color: #35815F;
            font-size: 150%;

        }

        .address p {
            display: inline-block;
            margin-right: 20px;
            margin-bottom: 5px;
        }

        @media (min-width:768px) {
            .address_box {
                background: #F2F2F2;
                padding: 20px 40px;
                min-height: 165px;
                margin: 20px 0px;
                width: calc(100% / 2 - 20px);
                border-radius: 15px;
                float: left;
            }

            .address_box:nth-child(2n) {
                margin: 20px 0 20px 40px;
            }
        }

        @media screen and (max-width:767px) {
            .address_box {
                width: 100%;
                float: none;
                border-radius: 15px;
                background: #F2F2F2;
                padding: 20px 40px;
                min-height: 165px;
                margin: 20px 0px;
            }

        }




        .address_box a {
            text-decoration: none;
            color: #0C512D;
            font-size: 1.5rem;
        }

        .line img {
            width: 40px;
            height: 40px;
        }

        .address_main {
            list-style: none;
            display: -webkit-flex;
            display: flex;
            flex-wrap: wrap;
            margin: 0;
            padding: 0;
            overflow: hidden;
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

    <div class="container mg">
        <div class="top_control">
            <h2>聯絡我們</h2>
        </div>
        <span class="h2">EasyRead公司通訊聯絡資料</span>
        <p>EasyRead公司</p>
        <div class="address">
            <p>地址：臺北市南屯區黎明路2段503號8樓</p>

            <p>電話：04-123456789</p>

            <p>傳真：04-123456789</p>
        </div>
        <div class="address_main">
            <div class="address_box"><a href="#" rel="noopener noreferrer" target="_blank" title="中部聯合服務中心（另開新視窗）"><span class="h5">台北服務辦公室</span></a>

                <p>地址：臺北市南屯區黎明路2段503號8樓</p>

                <p>電話：04-123456789</p>
            </div>
            <div class="address_box"><a href="#" rel="noopener noreferrer" target="_blank" title="中部聯合服務中心（另開新視窗）"><span class="h5">中部聯合服務中心</span></a>

                <p>地址：臺中市忠孝東路段503號8樓</p>

                <p>電話：04-123456789</p>
            </div>
            <div class="address_box"><a href="#" rel="noopener noreferrer" target="_blank" title="中部聯合服務中心（另開新視窗）"><span class="h5">使用電子郵件</span></a>

                <p>Gmail：123456789@gmail.com</p>

                <!-- <p>電話：04-123456789</p> -->
            </div>
            <div class="address_box"><a href="#" rel="noopener noreferrer" target="_blank" title="中部聯合服務中心（另開新視窗）"><span class="h5">線上客服(Line)</span> <a href="#" class="line"><img src="./images/line.jpg" alt="無法顯示"></a>
                </a>

                <p>LineID：123456789@yahoo.com</p>
                <!-- <p>電話：04-123456789</p> -->
            </div>
        </div>
    </div>
    <!-- 主體stop -->

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