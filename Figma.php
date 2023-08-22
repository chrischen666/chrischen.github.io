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

    <!-- 匯入區stop -->

    <style>
        * {
            box-sizing: border-box;
        }

        .fw-bold {
            word-wrap: break-word;
            font-size: 2.5rem;
        }

        .pd {
            padding: 40px 0px;
        }

        .FS12 {
            font-size: 12px;
        }

        .FS14 {
            font-size: 14px;
        }

        .color1 {
            color: rgba(0, 0, 0, 0.45);
        }

        .video {
            border-radius: 20px;
            width: 100%;
        }

        @media (max-width:991px) {
            .video {
                height:439px;
            }
        }

        @media (min-width:992px) {
            .video {
                width: 456px;
                height: 312px;
            }
        }

        @media (min-width:1200px) {
            .video {
                width: 653px;
                height: 370px
            }
        }

        .bAqjlm {
            display: none;
        }

        @media (min-width:992px) {
            .bAqjLm {
                margin: 0px 0px 0px 20px;
                padding: 0px;
                position: sticky;
                top: 0px;
            }
        }

        .bg {
            background-color: rgb(245, 247, 249);
            padding: 20px 0px;
        }

        .hmZTYy {
            display: none;
        }

        @media (min-width:992px) {
            .hmZTYy {
                background-color: rgb(255, 255, 255);
                box-shadow: rgba(0, 0, 0, 0.04) 0px 0px 2px 0px, rgba(0, 0, 0, 0.08) 0px 4px 10px 0px;
                border-radius: 8px;
                padding: 20px 40px;
                display: flex;
                flex-flow: column nowrap;
                /* position: sticky; */
                width: 300px;
            }
        }

        @media (min-width:1200px) {
            .hmZTYy {
                background-color: rgb(255, 255, 255);
                box-shadow: rgba(0, 0, 0, 0.04) 0px 0px 2px 0px, rgba(0, 0, 0, 0.08) 0px 4px 10px 0px;
                border-radius: 8px;
                padding: 40px 60px;
                display: flex;
                flex-flow: column nowrap;
                /* position: sticky; */
                width: 400px;
            }
        }

        @media (min-width:992px) {
            .buy {
                font-size: 16px;
                font-weight: 600;
                line-height: 26px;
                text-decoration: none;
            }
        }




        @media (min-width:992px) {
            .cwJuZv {
                font-size: 14px;
                font-weight: 600;
                line-height: 22px;
                text-decoration: none;
            }
        }

        .cwJuZv {
            color: rgba(0, 0, 0, 0.85);
            font-size: 14px;
            font-weight: 600;
            line-height: 22px;
            text-decoration: none;
        }

        .iSKiH {
            margin: 0px 8px;
            color: rgba(0, 0, 0, 0.85);
            font-weight: 600;
            font-size: 28px;
            line-height: 150%;
        }

        .apxVH {
            display: flex;
            flex-flow: row wrap;
            -webkit-box-align: center;
            align-items: center;
        }

        .wTWfp {
            transition: width 0.6s ease 0s;
            width: calc(50% - 0px);

        }

        .fJGbFp {
            color: rgb(255, 255, 255);
            background-color: rgb(0, 204, 180);
        }

        @media (min-width: 992px) {
            .eifmpG {
                font-size: 16px;
                font-weight: 600;
                line-height: 26px;
                text-decoration: none;
            }
        }

        .eifmpG {
            -webkit-box-align: center;
            align-items: center;
            -webkit-box-pack: center;
            justify-content: center;
            border: 2px solid transparent;
            border-radius: 8px;
            transition: border 0.2s cubic-bezier(0.65, 0.05, 0.36, 1) 0s, background-color 0.2s cubic-bezier(0.65, 0.05, 0.36, 1) 0s, color 0.2s cubic-bezier(0.65, 0.05, 0.36, 1) 0s;
            height: 42px;
            font-size: 16px;
            font-weight: 600;
            line-height: 26px;
            text-decoration: none;
            display: flex;
            width: 100%;
            padding-left: 4px;
            padding-right: 4px;
        }

        .leJJMR {
            /* overflow-x: hidden; */
            display: flex;
            width: 100%;
            -webkit-box-pack: center;
            justify-content: center;
            padding: 7px 4px;
            border-radius: 8px;
            border-width: 2px;
            border-style: solid;
            background-color: transparent;
            color: rgb(0, 204, 180);
            border-color: rgb(220, 249, 243);
        }

        .sc-1jiqidl-1 {
            width: 42px;
        }

        .bg2 {
            background-color: #ffffff;
            box-shadow: rgba(0, 0, 0, 0.04) 0px 0px 2px 0px, rgba(0, 0, 0, 0.08) 0px 4px 10px 0px;
            border-radius: 10px;
            padding: 40px 60px;
        }

        .hfGcVk {
            display: inline-block;
            width: 100%;
            user-select: text;
            word-break: break-all;
        }

        .hfGcVk blockquote {
            color: rgba(0, 0, 0, 0.87);
            font-size: 18px;
            letter-spacing: 0.1em;
            margin: 24px 0px;
            padding: 2px 0px 2px 16px;
            border-left: 5px solid rgb(250, 139, 0);
        }

        .hfGcVk pre {
            font-size: 14px;
            line-height: 1.8em;
            margin: 24px 0px;
            padding: 8px 16px;
            border-radius: 0px;
            border: 0px;
            background-color: rgb(234, 234, 234);
            word-break: break-word;
            overflow-wrap: normal;
            white-space: pre-wrap;
        }

        .hfGcVk ul a:visited {
            color: rgb(250, 139, 0);
            /* border-bottom: 1px solid rgb(250, 139, 0); */
        }

        .hfGcVk ul a b {
            color: rgb(250, 139, 0);
            border-bottom: 1px solid rgb(250, 139, 0);
        }

        .hfGcVk ul a {
            text-decoration: none;
        }

        .down,
        .down span,
        .down img,
        .down button {
            display: none;
        }

        @media(max-width:991px) {

            .down,
            .down span,
            .down img,
            .down button {
                display: flex;
            }

            .down {
                position: fixed;
                background-color: white;
                width: 100%;
                height: 7vh;
                /* border: 1px solid black; */
                bottom: 0;
                /* z-index: 9999; */
            }

            .down img {
                width: 30px;
                height: 30px;
                text-align: center;
                margin: 0 auto;
                border: 0px;
                /* border: 1px solid black; */
                /* border-radius: 1px; */

            }
        }

        .down span {
            justify-content: center;
            align-items: center;
            font-weight: 600;
        }

        .down button[class="col-6"] {
            background-color: rgb(0, 204, 180);
            justify-content: center;
            align-items: center;
            border: 0px;
            border-radius: 5px;
        }

        .down button[class="col-3"] {
            align-items: center;
            border: 1px solid rgb(0, 204, 180);
            border-radius: 5px;
            background-color: #ffffff;
            /* display: inline-block; */
        }

        .down button[class="col-6"] a {
            text-decoration: none;
            color: white;
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

    <div class="container mb-5">
        <!-- 影片區塊start -->
        <div class="row mt-5">
            <div class="col-12 col-sm-12 col-lg-6 col-xl-7 col-xxl-6">
                <iframe class="video" src="https://www.youtube-nocookie.com/embed/slzEfUjuhsQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="col-12 col-sm-12 col-lg-6 col-xl-5 col-xxl-6 ps-xxl-4">
                <div class=" flex-column d-flex">
                    <div class="col">
                        <h1 class="fw-bold">產品設計實戰：用Figma打造絕佳UI/UX</h1>
                    </div>
                    <div class="col mt-3">
                        <p>你想要學習 UI/UX 設計嗎？想知道如何打造絕佳產品體驗嗎？一起來學習使用 Figma 這個火紅全球的介面設計工具，跟上全球設計趨勢，成為軟硬實力兼具的產品設計師吧！
                        </p>
                    </div>
                    <div class="col">
                        <i class="fa-solid fa-star" style="color: #63e6a6;"></i><span>評價優於前10%課程</span>
                    </div>
                    <div class="col"><span>5.0</span><i class="fa-solid fa-star" style="color: #ffb115;"></i><i class="fa-solid fa-star" style="color: #ffb115;"></i><i class="fa-solid fa-star" style="color: #ffb115;"></i><i class="fa-solid fa-star" style="color: #ffb115;"></i><i class="fa-solid fa-star" style="color: #ffb115;"></i><span>(342)</span></div>
                </div>
            </div>
        </div>
        <!-- 影片區塊end -->
    </div>
    <div class="bg">
        <div class="container">
            <div class="d-flex">
                <!-- 左邊課程內容區start -->
                <div style="width:866px">
                    <div class="bg2">
                        <h3 class="mb-3 fw-bold">關於課程</h3>
                        <div>
                            <div class="row">
                                <div class="col mb-3">
                                    <div class="d-flex">
                                        <img src="./images2/figma.png" alt="無法顯示" width="32px" height="32px" style="margin-right: 10px;">
                                        <div>
                                            <div class="color1 FS12">課程時長</div>
                                            <div class="fs14">15時1分鐘</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mb-3">
                                    <div class="d-flex">
                                        <img src="./images2/figma2.png" alt="無法顯示" width="32px" height="32px" style="margin-right: 10px;">
                                        <div>
                                            <div class="color1 FS12">單元數</div>
                                            <div class="fs14">6章節60單元</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-3">
                                    <div class="d-flex">
                                        <img src="./images2/figma3.png" alt="無法顯示" width="32px" height="32px" style="margin-right: 10px;">
                                        <div>
                                            <div class="color1 FS12">課程總人數</div>
                                            <div class="fs14">6825位同學</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mb-3">
                                    <div class="d-flex">
                                        <img src="./images2/figma4.png" alt="無法顯示" width="32px" height="32px" style="margin-right: 10px;">
                                        <div>
                                            <div class="color1 FS12">作業數</div>
                                            <div class="fs14">9份作業</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-3">
                                    <div class="d-flex">
                                        <img src="./images2/figma5.png" alt="無法顯示" width="32px" height="32px" style="margin-right: 10px;">
                                        <div>
                                            <div class="color1 FS12">觀看次數</div>
                                            <div class="fs14">不限觀看次數，還會附贈完課證書</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 課程內容strat -->
                    <div class="bg2" style="margin-top: 20px;">
                        <h3 class="mb-3 fw-bold">課程內容</h3>
                        <div class="hfGcVk">
                            <img src="./images2/figma6.png" alt="無法顯示" width="100%">
                            <blockquote>全新 2023 UI 設計實戰營目前招生中！40 天帶你提升設計實力，打造美感與邏輯兼具的設計！<b>了解更多資訊：</b><a href="#">https://pse.is/4xf2k4</a></blockquote>
                            <h4><b>產品設計實戰：用 Figma 打造絕佳 UI/UX 產品體驗</b></h4>
                            <img src="./images2/figma7.png" alt="無法顯示" width="100%">
                            <blockquote><b>想要設計出一個好看又好用的產品，需要有成熟的 UX 設計思維以及靈活的 UI 設計方法來達成</b></blockquote>
                            <p>身為一名產品 (UI/UX) 設計師，我們常常會需要去解決複雜且抽象的問題。要能夠將從使用者研究或數據中得到的洞察轉換成真實的設計解法，往往需要大量的<b>設計經驗、對產品的知識、對使用者的理解</b>才能達成。<br><br><b>而熟悉介面工具的使用以及 UX/UI 設計方法是幫助我們通往解決方法道路的第一步。</b></p>
                            <p>在數位產品設計的世界裡，常常是需要團隊合作的，我們需要清楚知道用什麼樣的介面設計模式來解決什麼樣的問題、如何有效的向團隊溝通你的解決方案，而這堂課程就是要帶你<b>掌握產品 (UI/UX) 設計師所需要具備的軟硬知識！</b></p>
                            <img src="./images2/figma8.png" alt="無法顯示" width="100%">
                            <img src="./images2/figma9.png" alt="無法顯示" width="100%">
                            <h4><b>Figma 是什麼呢？為什麼要選擇 Figma？它的優勢跟未來在哪裡？</b></h4>
                            <p>Figma 是一個跨時代的 UI 設計的工具，特色是所有的設計檔案都會儲存在雲端，並且能夠用網頁瀏覽器讓多人即時協作、編輯同一份設計檔案。這解決了長期以來設計流程在溝通與檔案管理上面的一些缺陷，讓設計師可以更專注在用設計解決問題。<br><br>而這兩年 Figma 在 Sketch 之外也有擁有非常高的聲量，可以參考<a href="https://uxtools.co/survey-2019/" target="_blank"><b>國外平台 2019 年對於 UI 設計工具的調查</b></a>，Figma 已經在這<b>兩年衝至整體第二名</b>，未來也將會持續看漲，而因它基於瀏覽器並跨平台的特性，在 Window 上更是穩居第一名的寶座，相信不久後 Figma 將成為全球主流的介面設計工具。</p>
                            <img src="./images2/figma10.png" alt="無法顯示" width="100%">
                            <blockquote><b>關於 Figma 的特色與優勢</b></blockquote>
                            <ol>
                                <li><b>網頁瀏覽器就能用：</b>所有的設計檔案都會即時儲存在雲端，完全不需要擔心有沒有存到檔案。這也代表就是不管在哪裡，只要能連上網路就能打開檔案，當然也就跨裝置與平台 (Mac/Window) 都能使用，甚至用 iPad 也能操作，不管你用什麼電腦通通沒問題，就像是設計界的 Google Docs 一樣！</li>
                                <li><b>即時協作與同步編輯：</b>擁有線上即時多人協作的功能，讓設計的溝通交流與檔案分享變得超級簡單，再也不需要互傳檔案了！</li>
                                <li><b>雲端共享連結：</b>每個設計檔案 (甚至小至畫板、元件) 都能產生共享連結，並且可以設定共享權限，要和團隊分享與討論設計毫不費力！</li>
                                <li><b>廣大的社群與插件生態系：</b>Figma 擁有強大的線上社群與插件，讓你可以找到許多有用的輔助工具與設計資源 (也可以複製其他設計師的檔案來練習)，加快自己的設計效率！</li>
                                <li><b>新手友善，免費就能用到飽：</b>Figma 對新手很友善，免費方案就能體驗到飽！免費方案就能擁有 3 個專案加上一個協作者共同編輯，可以不需要花錢就充分探索這個軟體的主要功能。</li>
                                <li><b>國際大公司都在用：</b>許多國際一流公司像是 Uber, Twitter, Airbnb, Google, Spotify, Dropbox 等等都已經因為 Figma 強大的協作功能而將主要設計工具轉換至 Figma，所以可以預見的是學會 Figma 將很有機會成為下一個 UI/UX 設計師需具備的標準能力。</li>
                                <li><b>前有未有的流暢設計流程：</b>設計是一個需要不斷溝通討論、持續打磨細節的過程，Figma 將所有工作流程從設計、溝通、協作、原型、工程交付都整合在一個工具中，大大提升了設計師和團隊成員的工作效率。</li>
                                <li><b>對未來的超前部署：</b>我們看到遠端工作的趨勢逐年提升，近年來越來越多公司開始開放遠端工作的機會，我們相信在未來遠端協作會變成一種主流，而 Figma 線上即時的協作優勢就會變成一個很棒的武器，學會它，也代表你可以更快融入主流公司工作流程中。</li>
                            </ol>
                            <pre><b>如果有上過我前一堂的同學就會知道，其實我以前是以使用 Sketch 為主，如果想知道為什麼我開始轉換到 Figma ，我也寫過一篇關於</b><a href="https://medium.com/as-a-product-designer/%E6%88%91%E5%BE%9E-sketch-%E8%80%81%E7%B2%89%E8%AE%8A%E6%88%90-figma-%E9%90%B5%E7%B2%89%E7%9A%84-10-%E5%80%8B%E7%90%86%E7%94%B1-4a47a4e394c?source=---------2------------------" target="_blank"><b>我為什麼從 Sketch 轉換到 Figma 的文章</b></a><b>，歡迎參考看看！</b></pre>
                            <p><b>這邊也分享一些 Figma 的相關的網站與文章給大家參考：</b></p>
                            <ul>
                                <li><a href="https://www.figma.com/" target="_blank"><b>Figma 官網</b></a></li>
                                <li><a href="https://www.figma.com/blog/" target="_blank"><b>Figma 官方部落格</b></a></li>
                                <li><a href="https://medium.com/as-a-product-designer/figma-design-tool-1c6542ae8dc1" target="_blank"><b>Figma — 異軍突起的設計協作神器</b></a></li>
                                <li><a href="https://share.tenten.co/figma-%E5%88%9D%E5%AD%B8%E8%80%85%E7%9A%84%E5%85%A5%E9%96%80%E5%BF%83%E5%BE%97-5867f6410d53" target="_blank"><b>Figma-初學者的入門心得</b></a></li>
                                <li><a href="https://www.figma.com/blog/a-sketch-users-perspective-on-switching-to-figma/" target="_blank"><b>A Sketch user’s perspective on switching to Figma</b></a></li>
                            </ul>
                            <img src="./images2/figma11.png" alt="無法顯示" width="100%">
                            <blockquote><b>認真學習完這堂課程所有單元，並且完成課堂作業之後，你將會掌握：</b></blockquote>
                            <p>1. 核心介面設計 (UI Design) 與使用者體驗設計 (UX Design) 的知識。<br>2. 常見業界產品開發流程、團隊合作流程以及 UI/UX 設計師的工作內容與細節。<br>3. 熟悉 Figma 核心操作技巧與常用快捷鍵，具備依據團隊需求快速且有效率的製作介面的能力。<br>4. 熟悉 Figma 進階技巧，像是管理元件、共享樣式等等，不只提高設計效率，並且做出可擴展、一致且好維護的設計系統。<br>5. 利用 Figma 做出可供使用者及團隊測試的原型，並且能夠根據反饋隨時調整設計。<br>6. 基礎設計美感與原則，有能力做出符合規範、直覺、美觀好閱讀的介面。<br>7. 從概念發想到實際操作，從 0 到 1 完成兩個產品 (App＆Web) 的核心功能設計與原型製作。<br>8. 建立正確的學習心態與工作觀念，在未來的設計路上都能掌握學習原則，持續自我精進成長。<br>9. 了解如何準備與設計面試與求職作品集，讓自己在其他競爭者中脫穎而出。</p>
                        </div>
                    </div>
                    <!-- 課程內容end -->
                </div>
                <!-- 左邊課程內容end -->
                <!-- 右邊sticky start -->
                <div>
                    <div class="bAqjLm">
                        <div class="hmZTYy">
                            <div class="buy mb-3">購買這堂課</div>
                            <div class="d-flex apxVH mb-3">
                                <div class="cwJuZv">售價</div>
                                <div class="iSKiH ">NT$4,280</div>
                            </div>
                            <div class="d-flex">
                                <div class="wTWfp">
                                    <button class="fJGbFp eifmpG">立即購買</button>
                                </div>
                                <div class="sc-1jiqidl-1">
                                    <button class="leJJMR"><img src="./images/Shopping_Cart.png" alt="無法顯示" width="20px" height="20px"></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- 右邊sticky end -->

            </div>

        </div>



    </div>
    <!-- 下方購買start -->

    <div class="down">
        <span class="col-3">NT $4,280</span>
        <button class="col-3">
            <img src="./images/Shopping_Cart.png" alt="無法顯示">
        </button>
        <button class="col-6"><a href=#>立即購買</a></button>
    </div>

    <!-- 下方購買end -->

    <!-- 主體stop -->

    <!-- footer start -->
    <?php include('./php/footer.php'); ?>
    <!-- footer stop -->



    <!-- 匯入start -->
    <!-- <script src="js/footer.js"></script> -->
    <!-- <script src="js/nav.js"></script> -->
    <!-- <script src="js/main.js"></script> -->
    <script src="source/cdn.jsdelivr.net_npm_bootstrap@5.3.0_dist_js_bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/380099fe1e.js" crossorigin="anonymous"></script>
    <script>
        AOS.init();
    </script>
    <!-- 匯入stop -->
</body>

</html>