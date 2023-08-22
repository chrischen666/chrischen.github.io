<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>StartClass</title>
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
            color: #000000A6;

        }

        /* 背景圖 start */
        .bg {
            display: flex;
            background-image: url(./images/123.jpg);
            height: 500px;
            background-repeat: no-repeat;
            background-size: cover;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .title {
            font-size: 3rem;
            color: white;
            line-height: 1.5;
        }

        .title2 {
            font-size: 1.25rem;
            color: white;
            line-height: 1.5;
        }

        /* 背景圖 end */
        /* 四張圖 start */
        .pd {

            padding-top: 80px;
            padding-bottom: 80px;

        }

        .pd img {
            padding-bottom: 10px;
        }

        .pd_p {
            width: 262px;
            margin: 0 auto;
        }

        .pd h3 {
            color: #00BEA4;
        }

        /* 四張圖 end */

        /* 浮動區塊start */
        .pd1 {
            padding-top: 80px;
            padding-bottom: 80px;
            position: relative;
            margin-bottom: 200px;
        }

        @media screen and (max-width: 1099px) {
            .pd1_img {
                display: none;
            }

            .pd1_img1 {
                display: none;
            }
        }


        @media (min-width:1100px) {
            .pd1_img {
                width: 400px;
                position: absolute;
                bottom: -120px;
                left: 0px;
            }

            .pd1_img1 {
                width: 400px;
                position: absolute;
                top: -80px;
                right: 0px;
            }
        }




        .block-title::after {
            content: "";
            display: block;
            width: 60px;
            height: 4px;
            background-color: rgb(46, 225, 179);
            margin: 10px auto 30px;
        }

        .card {
            text-align: center;
            margin: 0px auto;
            box-shadow: rgba(0, 0, 0, 0.24) 0px 2px 8px;
            border-radius: 3px;
        }


        .card {
            max-width: 550px;
            max-height: 240px;
            padding: 60px 130px;
        }


        .card_rel {
            position: relative;
        }

        @media screen and (max-width: 991px) {
            .card1 {
                background: rgb(46, 225, 179);
            }

            .card2 {
                margin-bottom: 20px;
            }
        }

        @media(min-width:992px) {
            .card1 {
                margin-right: auto;
                position: absolute;
                top: 130px;
                left: -30px;
                background: rgb(46, 225, 179);
                z-index: 0;
            }

            .card2 {
                right: -50px;
                z-index: 1;
            }
        }

        .card button {
            display: inline-block;
            text-align: center;
            vertical-align: middle;
            touch-action: manipulation;
            cursor: pointer;
            background-image: none;
            border: 1px solid rgba(0, 0, 0, 0.43);
            white-space: nowrap;
            user-select: none;
            font-weight: 400;
            background-color: transparent;
            color: rgba(0, 0, 0, 0.65);
            padding: 5px 40px;
            font-size: 20px;
            border-radius: 3px;
            /* min-width: 260px; */
            line-height: 1.8em;
        }

        /* 浮動區塊end */
    </style>
</head>

<body>
    <!-- nav start -->
    <div id="nav" style="width: 100%;">
        <?php include('./php/nav.php'); ?>

    </div>
    <!-- nav stop -->

    <!-- 主體start -->

    <!-- 背景圖 start -->
    <div class="bg ">
        <div class="title">上架您的才華</div>
        <div class="title2">一起將你的熱情與技能分享給全世界</div>
    </div>
    <!-- 背景圖 end -->
    <!-- 四張圖 start -->
    <div class="pd">
        <div class="container">
            <div class="row">
                <div class="col-md-6  col-xl-3">
                    <div class="text-center">
                        <img src="./images/start_class4.png" alt="無法顯示">
                        <h3>84000+位</h3>
                        <p>來自各地的學生
                        </p>
                    </div>
                    <div class="pd_p">
                        <p>848,000+ 名註冊會員遍及全台，更有遠從馬來西亞、香港、新加坡…等各地學生加入 EasyRead。沒有時間地域限制，線上學習的需求遠超乎你的想像。</p>
                    </div>
                </div>
                <div class="col-md-6  col-xl-3">
                    <div class="text-center">
                        <img src="./images/start_class1.png" alt="無法顯示">
                        <h3>900+ 堂</h3>
                        <p>多元跨領域的課程
                        </p>
                    </div>
                    <div class="pd_p">
                        <p>透過分享和群眾支持的力量，目前已創造各種跨領域、多元類型的好內容與課程，與學生零時差互動發揮影響力，更有機會創造可觀的延伸效應。

                        </p>
                    </div>
                </div>
                <div class="col-md-6  col-xl-3">
                    <div class="text-center">
                        <img src="./images/start_class3.png" alt="無法顯示">
                        <h3>90%</h3>
                        <p>最高售課分潤
                        </p>
                    </div>
                    <div class="pd_p">
                        <p>每一筆由老師銷售出的課程，老師會獲得高達 90% 的分成，由 EasyRead 售出則獲得 50% 的分成。交易資訊公開透明，後台系統可以隨時查看明細。（更多分潤說明）

                        </p>
                    </div>
                </div>
                <div class="col-md-6  col-xl-3">
                    <div class="text-center">
                        <img src="./images/start_class2.png" alt="無法顯示">
                        <h3>100%</h3>
                        <p>募資成功率
                        </p>
                    </div>
                    <div class="pd_p">
                        <p>跨出勇敢的第一步，高達 100% 的募資成功率，在 EasyRead 開課賺取你的夢想基金！2015 年 2 月上線至今，有 3 位賺取超過百萬、1 位破千萬的老師，被動收入持續累積中。
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 四張圖 end -->
    <!-- 浮動區塊 strar -->
    <div class="pd1">
        <img src="./images/start_class5.png" class="pd1_img hidden-sm hidden-xs" alt="無法顯示">
        <img src="./images/start_class5.png" class="pd1_img1 hidden-sm hidden-xs" alt="無法顯示">
        <div class="text-center block-title">
            <h3>線上支援</h3>
            <p>還有更多問題?看看我們為你準備的FAQ!</p>
        </div>
        <div class="container">
            <div class="row">
                <div class=" col-lg-6 text-center card_rel">
                    <div class="card card2">
                        <p>
                            不會拍影片？分潤不太懂？審核要多久？ 所有疑難雜症這裡有解
                        </p>
                        <button>常見問題</button>
                    </div>
                </div>
                <div class=" col-lg-6 text-center card_rel">
                    <div class="card card1">
                        <p>
                            除了疑難雜症外，更想做出專業好課程？真實的秘辛與教學這裡看 </p>
                        <button>開課教學</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 浮動區塊 end -->
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