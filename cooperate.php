<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>cooperate</title>
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
<!-- 不要按shift+alt+f -->
    <style>

        .bg {
            background-color: #f5f5f5;
            padding-top: 40px;
            padding-bottom: 40px;
        }

        .pad {
            padding: 40px;
            overflow: hidden;
            background-color: white;
        }

        .desc {
            white-space: pre-wrap;
            color: #000000A6;
        }

        .pad img {
            object-fit: cover;
            width: 100%;
            height: 280px;
        }

        .col-wrapper {
            display: flex;
            height: 100%;
            flex-direction: column;
            -webkit-box-pack: justify;
            justify-content: space-between;
            background-color: rgb(255, 255, 255);
            padding: 40px;
        }
        .org_link{
            text-decoration: underline;
    font-weight: bold;
    color: rgb(250, 139, 0) !important;
        }
    </style>
</head>
<!-- nav start -->
<div id="nav" style="width: 100%;">
    <?php include('./php/nav.php'); ?>

</div>
<!-- nav stop -->

<!-- 主體start -->
<div class="bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-7">
                <div class="pad">
                    <h3>好讀企業合作方案</h3>
                    <div class="desc">EasyRead 是一個致力於提供優質線上閱讀資源的平台。我們以「輕鬆閱讀，輕鬆獲取知識」為理念，成立於2015年。我們的平台已經擁有超過73萬名註冊會員，累積提供超過780篇優質文章。特別受到18至34歲年輕人的喜愛。
                        
除了個人閱讀外，我們也為企業提供 EasyRead for Business 服務，自2020年1月正式推出。EasyRead for Business 已經獲得超過百間企業客戶的青睞，提供超過300篇以上的專業文章。

EasyRead for Business 是數位轉型趨勢下的企業組織的學習解決方案，提供以線上閱讀為主的數位內容、產品與數據導向的顧問服務，符合產業趨勢與員工能力發展的學習需求。我們致力於為企業客戶打造更好的閱讀體驗平台，讓企業內的學習場景更加智慧、自主、多元。

我們目前與多家企業合作，包括鴻海集團雲運算產品事業群、國泰金控、富邦金控、NIPPON EXPRESS TAIWAN、台灣博報堂、志強國際、遠東新世紀、精誠資訊等企業與組織。

若您有興趣透過 EasyRead for Business 的閱讀資源或學習平台進行內部員工的能力發展與培訓計畫，歡迎點選頁面連結申請試用 EasyRead for Business 企業學習方案。您也可以透過寄信至<a class="org_link">b2b-info@easyread.com</a>或撥<a class="org_link">打電話02-27199957#1</a>與我們聯繫，告訴我們您的需求及使用方式，我們將儘速與您聯繫，讓 EasyRead 與您一起打造下個世代的學習型組織！

</div>
                    <img src="./images/cooperate_01.jpg" alt="無法顯示">
                </div>
            </div>
            <div class="col-md-12 col-lg-5">
                <div class="col-wrapper ">
                    <div>
                        <h3>行銷合作、異業合作：</h3>
                        <div class="desc">
如果您有任何行銷合作或異業合作的提案。
我們非常歡迎您與我們聯繫。
您可以直接寄信至 <a class="org_link">co-op@easyread.com</a>
或撥打電話 <a class="org_link">02-27199957</a>。
我們將有專人與您聯繫，期待聽取您的提案！
                        </div>
                    </div>
                    <img src="./images/cooperate_02.jpg" alt="無法顯示">
                </div>
            </div>
        </div>
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