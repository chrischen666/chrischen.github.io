-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2023-07-03 16:57:00
-- 伺服器版本： 10.4.28-MariaDB
-- PHP 版本： 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `school`
--

-- --------------------------------------------------------

--
-- 資料表結構 `carousel`
--

CREATE TABLE `carousel` (
  `i_id` int(10) UNSIGNED NOT NULL,
  `i_order` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `i_num` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `i_path` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 傾印資料表的資料 `carousel`
--

INSERT INTO `carousel` (`i_id`, `i_order`, `i_num`, `i_path`) VALUES
(118, '3', '123', '1 (4).png'),
(121, '4', '44', '2.png'),
(122, '', '', '2.png'),
(123, '2', '14654', '2.png');

-- --------------------------------------------------------

--
-- 資料表結構 `great`
--

CREATE TABLE `great` (
  `b_id` int(10) NOT NULL,
  `b_title` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `b_description` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `b_images` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `b_deadline` date DEFAULT NULL,
  `b_info` varchar(3) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `b_price` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 傾印資料表的資料 `great`
--

INSERT INTO `great` (`b_id`, `b_title`, `b_description`, `b_images`, `b_deadline`, `b_info`, `b_price`) VALUES
(1, '品牌經理養成班：外商行銷前輩帶你入行', '【限時優惠 59 折】透過實戰課題演練、迅速獲取品牌經理的行銷要領，建立品牌行銷核心能力！', 'd04', '2023-08-17', '100', '1790'),
(2, '產品思維：Spotify 產品經理帶你快速入門', '學會矽谷各大科技公司使用的產品思維，了解一個產品是如何從 0 誕生，並延伸應用在工作及生活中。\r\n\r\n', 'd05', '2023-07-31', '50', '500'),
(3, '如何成為資料分析師：從問題解決到行動方案', '【轉職資料分析師】跟著資深資料分析師，透過資料分析的思維，帶你走過實際解決問題的框架。', 'd06', '2023-08-31', '25', '790'),
(4, '影片製作入門10堂課 - 攝影、剪輯、腳本', '【影片入門】帶你快速入門攝影、剪輯、燈光、腳本、行銷，讓你能夠一個人完成基礎的影片製作。', 'd07', '2023-08-31', '100', '840'),
(5, '興趣變副業！打造自己的手作品牌', '創立自己的手作品牌，興趣也能成為副業，小資也能打造事業。金工銀飾品牌創辦人張譯蓁大方分享七年來經營手作品牌的秘訣，濃縮成兩小時的品牌創業精華課程，適合對手作和創業有興趣的你。\r\n', 'd09', NULL, '', '1060'),
(6, 'Python 入門特訓 - 基礎實作到證照攻略', 'Python證照攻略課程，教你Python的程式語法與Python證照攻略，循序漸進學習Python開發環境的建置。同時也將教你TQC和 Python 認證考試的攻略要點，由淺入深掌握Python證照攻略。', 'd10', NULL, '', '2190'),
(7, '台科 EMBA 年年爆滿的一門 Word 課（A系列）', 'Office 文書軟體操作課程，學會有效率地使用 Word、Excel、PowerPoint，掌握Office文書軟體操作技巧，讓你學業、工作事半功倍。課程將搭配多個實作練習，帶你實際操作 Office。\r\n', 'd11', NULL, '', '2240'),
(8, '職場人必學的商業分析術-廖老大有料篇', '帶你學會產品與服務開發以及專案前中後期所需要的商業分析，包括數據收集與分析，運營企劃書提案，利害人關係分析，溝通協調心法，解決方案評估，需求導出的方法，建立流程模型與需求書等。', 'd12', NULL, '', '2560');

-- --------------------------------------------------------

--
-- 資料表結構 `member`
--

CREATE TABLE `member` (
  `mID` int(10) UNSIGNED ZEROFILL NOT NULL,
  `mName` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `mEmail` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `mPassword` varchar(80) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mType` enum('s','t') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 's',
  `mPoints` int(10) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 傾印資料表的資料 `member`
--

INSERT INTO `member` (`mID`, `mName`, `mEmail`, `mPassword`, `mType`, `mPoints`) VALUES
(0000000027, '123', '123@', '$2y$10$aSCiY7cTQbeFbEG32xUtDuXaXMyA39uGw67fKLtATC.EvLJxmVTue', 's', 123),
(0000000028, '456', '456@', '$2y$10$97/KyUNMI/UGt1AoHv07PekBOTSx4xdEsTVI5bwBP4echnOTVersa', 't', 456),
(0000000029, '789', '789@', '$2y$10$2v9ql4AlvFhfk.scDxt9aeNOaY.Ef.szr/9TgGF5HdcfR6W6CGgH.', 't', 0);

-- --------------------------------------------------------

--
-- 資料表結構 `news`
--

CREATE TABLE `news` (
  `n_id` int(10) NOT NULL,
  `n_start` date DEFAULT NULL,
  `n_end` date DEFAULT NULL,
  `n_title` varchar(60) DEFAULT NULL,
  `n_content` varchar(300) DEFAULT NULL,
  `n_create` datetime DEFAULT current_timestamp(),
  `n_type` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 傾印資料表的資料 `news`
--

INSERT INTO `news` (`n_id`, `n_start`, `n_end`, `n_title`, `n_content`, `n_create`, `n_type`) VALUES
(1, '2023-06-08', '2023-06-17', '送可樂一瓶', '消費一次，不限金額', '2023-06-09 09:52:38', '活動'),
(2, '2023-06-07', '2023-06-08', '買一送一', '全部商品買一送一', '2023-06-09 09:52:38', '活動'),
(3, '2023-06-16', '2023-06-30', '送芭樂五千顆', '我們精心奉上五千顆新鮮芭樂，細緻口感和豐富果香，給您帶來絕佳的水果享受！', '2023-06-09 14:45:54', NULL),
(4, '2023-06-07', '2023-06-28', '芭樂五千顆', '我們精心奉上五千顆新鮮芭樂，細緻口感和豐富果香，給您帶來絕佳的水果享受！', '2023-06-09 14:45:54', NULL),
(5, '2023-06-01', '2023-06-02', '買蘋果', '蘋果好吃到不型', '2023-06-09 15:55:24', '跑步'),
(6, '2023-06-10', '2023-06-11', '五百', '123', '2023-06-09 15:55:24', '活動');

-- --------------------------------------------------------

--
-- 資料表結構 `n_news`
--

CREATE TABLE `n_news` (
  `n_id` int(10) NOT NULL,
  `n_start` date DEFAULT NULL,
  `n_end` date DEFAULT NULL,
  `n_title` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `n_content` varchar(700) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `n_create` datetime NOT NULL DEFAULT current_timestamp(),
  `n_type` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `n_link` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 傾印資料表的資料 `n_news`
--

INSERT INTO `n_news` (`n_id`, `n_start`, `n_end`, `n_title`, `n_content`, `n_create`, `n_type`, `n_link`) VALUES
(1, '2023-06-01', '2023-10-31', '【新手上路】ewant上課簡單上手', '<p>上課是學習的重要環節之一，要簡單上手上課有助於學習效果。以下是幾個實用建議：</p><h2>1. 預習課程內容</h2><p>在上課前預習課程內容，閱讀課本、查找資源或觀看教學視頻，提前了解主題和概念。上課時更容易理解講解，積極參與討論和提問。</p><h2>2. 專注和參與</h2><p>上課保持專注並積極參與。避免分心或干擾，專注在教師講解和內容上。主動參與討論和提問有助於深入理解學習內容。</p><h2>3. 有效筆記</h2><p>上課時做好筆記，記錄重要概念、關鍵詞和例子。使用HTML標籤換行、分段和格式化文字，筆記有結構和易讀性。整理成主題和子主題，有助於整理和理解學習內容。</p><h2>4. 課後學習</h2><p>課後閱讀額外資源、研究主題、觀看教學視頻或進行練習，鞏固和擴展學習。加深對學習內容的理解和應用，豐富知識。</p><p>總之，上課簡單上手需要培養的技巧，透過預習、專注參與、有效筆記和課後學習，輕鬆掌握課堂內容，提高學習效果。</p>', '2023-06-11 15:26:32', '平台公告', 'news_content01.php'),
(2, '2023-06-01', '2023-10-31', '【2023 SOS計畫】暑期線上學院即日起至6/26 熱烈報名中！', '<header> <p>即日起至6/26 熱烈報名中</p>    </header>    <main>        <section>            <h2>課程介紹</h2>            <p>在我們的暑期線上學院中，您將有機會參加一系列精彩的課程，涵蓋各種主題和技能領域。我們的課程結合了專業知識、實踐案例和互動學習，為您提供豐富的學習體驗。</p>        </section>        <section>            <h2>報名資訊</h2>            <p>報名截止日期：6月26日</p><p>課程費用：$200</p> <button>立即報名</button>        </section>    </main>', '2023-06-11 15:26:32', '2023年SOS計畫', 'news_content02.php'),
(3, '2023-06-01', '2023-10-31', '【2023年SOS計畫】第一階段成班公告', '    <p>親愛的學員們，</p>\r\n    <p>感謝大家對我們的SOS計畫的支持和關注。我們很高興宣布，2023年SOS計畫的第一階段已經成功結束，並且我們已經成立了一個新的班級。</p>\r\n    <p>以下是有關第一階段成班的詳細資訊：</p>\r\n    <ul>\r\n        <li>班級名稱：SOS-2023-01</li>\r\n        <li>開始日期：2023年7月1日</li>\r\n        <li>上課地點：線上</li>\r\n        <li>課程時程：每週一至週五，上午9點至下午5點</li>\r\n    </ul>\r\n    <p>我們將於近期聯繫所有已錄取的學員，提供更多相關的課程資訊和指示。</p>\r\n    <p>再次感謝大家的支持和參與。我們期待著與您在SOS計畫的學習旅程中見面。</p>\r\n', '2023-06-11 15:26:32', '2023年SOS計畫', 'news_content03.php'),
(4, '2023-06-01', '2023-09-30', '【平台公告】ewant育網8/1(六)至8/9(日) 客服暫停服務', '\r\n    <p>親愛的會員們，</p>\r\n    <p>感謝大家一直以來對ewant育網的支持和愛護。我們在此公告，將於2023年8月1日(六)至8月9日(日)期間進行客服暫停服務。</p>\r\n    <p>在此期間，我們的客服團隊將暫停提供線上和電話的客服支援，包括但不限於以下事項：</p>\r\n    <ul>\r\n        <li>電話諮詢</li>\r\n        <li>線上客服聊天</li>\r\n        <li>郵件回覆</li>\r\n    </ul>\r\n    <p>如有任何疑問或需要協助，請您於8/10(一)以後再與我們聯繫。期間若有緊急事務，請儘量使用網站上的自助服務，或參考我們的常見問題和幫助中心。</p>\r\n    <p>我們對於這段期間的不便表示歉意，並感謝您的諒解和支持。</p>\r\n', '2023-06-11 15:26:32', '平台公告', 'news_content04.php'),
(5, '2023-06-05', '2023-10-26', '【2023育網盃】全國高中數位課程自主學習成果競賽活動開跑！', '\r\n    <p>親愛的育網會員們，</p>\r\n    <p>我們非常高興地宣布，【2023育網盃】全國高中數位課程自主學習成果競賽活動現已正式開跑！這是一個激動人心的比賽，旨在鼓勵和表彰高中生在數位課程學習方面的卓越成果。</p>\r\n    <p>活動詳情如下：</p>\r\n    <ul>\r\n        <li>比賽時間：2023年7月1日至8月31日</li>\r\n        <li>參賽對象：全國各高中學生</li>\r\n        <li>競賽類別：數位課程自主學習成果展示</li>\r\n        <li>評選標準：創意性、內容深度、技術應用等</li>\r\n    </ul>\r\n    <p>參賽者需要準備一份數位作品，可以是網頁、應用程式、多媒體展示等形式，展示你在數位課程學習中的成果和創意。詳細報名和作品提交方式請參考育網官網上的相關公告。</p>\r\n    <p>我們將邀請專家評審團隊進行評選，並將在活動結束後公布優秀作品和獲獎名單。優秀作品將獲得豐厚獎品和機會參與更多精彩的數位學習活動。</p>\r\n    <p>這是一個展示你的創意和技能的絕佳機會，也是一個與全國各地的高中生共同學習和交流的平台。我們期待著你的參與和精彩的作品！</p>\r\n', '2023-06-11 15:35:27', '2023育網盃', 'news_content05.php'),
(6, '2023-06-07', '2023-11-30', '【2023育網盃】全國國中數位課程自主學習成果競賽結果出爐啦！', '將近有300名同學參加，同學們以學習筆記、小論文、簡報、影片等極富創意的多元方式呈現自己的自主學習成果，經過兩回合專業審查委員評選，5件優選與10件佳作終於在近百件作品中脫穎而出。', '2023-06-11 15:35:27', '2023育網盃', ''),
(7, '2023-06-01', '2023-06-07', '【2023年SOS計畫】退費已於九月份陸續匯款或寄出支票', '若先前提供的退款資料無誤，SOS退費皆於8月下旬至9月初陸續匯款或寄出支票（依照當初同學選擇的退款方式），若您於退費截止日前曾提繳退費申請，請查看帳戶或確認掛號信件，匯款名：陽明交大，感謝。', '2023-06-11 15:38:48', '2023年SOS計畫', ''),
(9, '2023-06-01', '2023-09-21', '【平台公告】ewant平台停機公告2023/04/21(五)08:00-10:00', '2023/09/21(五)08:00-10:00  ewant育網開放教育平臺 部分課程主機將停機進行系統擴充，  屆時將有部分課程無法進入，請於10:00後再登入。', '2023-06-12 13:35:57', '平台公告', ''),
(10, '2023-06-12', '2023-08-31', '【平台公告】ewant育網客服暫停服務', 'ewant育網團隊放連假囉！ 4/1(六)至4/9(日) 客服暫停服務', '2023-06-06 00:00:00', '平台公告', ''),
(11, '2023-06-01', '2023-08-31', '【2023年SOS計畫】退費已於九月份陸續匯款或寄出支票', '若先前提供的退款資料無誤，SOS退費皆於8月下旬至9月初陸續匯款或寄出支票（依照當初同學選擇的退款方式）', '2023-06-12 00:00:00', '2023年SOS計畫', ''),
(12, '2023-06-08', '2023-10-30', '【平台公告】ewant育網10/8(六)至10/11(二) 客服暫停服務', '學員您好,  ewant育網團隊放國慶連假囉！ 10/8(六)至10/11(二) 客服暫停服務，請擔待！', '2023-06-12 13:59:07', '平台公告', ''),
(13, '2023-06-01', '2023-07-31', '台灣隊伍奪冠', '台灣隊伍在西班牙奪得第一名', '2023-06-12 14:32:03', '平台公告', ''),
(14, '2023-06-14', '2023-06-30', '日本隊伍拿下學習亞軍', '日本隊伍榮獲亞軍', '2023-06-12 14:34:39', '平台公告', ''),
(15, '2023-06-01', '2023-08-31', '美國隊伍未盡決賽', '美國隊遺憾落敗', '2023-06-12 14:45:11', '平台公告', ''),
(24, '2023-06-30', '2023-08-04', '123', '456', '2023-07-04 00:12:41', 'test', '');

-- --------------------------------------------------------

--
-- 資料表結構 `qa`
--

CREATE TABLE `qa` (
  `qa_id` int(10) UNSIGNED NOT NULL,
  `qa_q` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `qa_ans` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 傾印資料表的資料 `qa`
--

INSERT INTO `qa` (`qa_id`, `qa_q`, `qa_ans`) VALUES
(1, '如何在 EasyRead 購買課程', 'Step 1. 前往你想要購買的課程頁面，點選「立即購買」（若你已經登入 EasyRead，請直接進入 Step 3. 說明）'),
(2, '登入後，找不到購買的課程', '點擊 EasyRead 官網右上角的「我的學習」，並點擊你所購買的商品類型，即可在「所有課程」中找到購買的商品。\r\n\r\n（📍如使用手機，請先點擊右上角「三條線」，即可看到登入或我的學習）\r\n\r\n'),
(3, '關於我的折扣無法使用', '如果出現「剛剛下訂購買課程的折扣券 / HP 不見」、「輸入折扣券失效或無法使用」或「之前儲存的折扣券 / HP 不見」，請別擔心，很可能是因為以下原因所導致：\r\n\r\n \r\n\r\n結帳時往返上一頁、跳出畫面或其他原因無法繼續結帳，這時只要前往「等待付款」頁面，點擊「取消訂單」，原先訂單使用的折扣券 / HP 將會歸還至帳號內，重新下訂即可使用。\r\n\r\n折扣券 / HP 顯示已失效或無法使用，代表已過使用期限，可於「失效訂單」或「EasyRead Point」頁面確認。\r\n\r\n若手動輸入折扣代碼，可能因字母「大小寫有誤」、序號前後含有「空格」而導致錯誤辨識，建議直接將整組序號複製貼上使用。'),
(4, '無法兌換多人同行課程序號', '如果遇到兌換序號無法兌換的狀況，請協助嘗試以下方法進行排解：\r\n\r\n \r\n\r\n請確認你已經登入/註冊成為 EasyRead 會員\r\n\r\n \r\n\r\n請直接複製課程序號代碼，在課程兌換區域貼上兌換序號\r\n（課程兌換代碼有英文大小寫之分，不建議手動輸入）\r\n\r\n \r\n\r\n課程兌換代碼前後方不可以含有空白格\r\n（若是含有空白格將會出現「序號格式錯誤」的提示）\r\n\r\n'),
(5, '課程影片無法播放', '如果課程影片載入過慢或者觀看不流暢，可以嘗試下列方式來獲得改善：\r\n帳號登出後重新登入\r\n\r\n確認瀏覽器頁面是否開啟過多分頁\r\n\r\n使用瀏覽器「無痕模式」播放測試\r\n\r\n瀏覽器關閉重開\r\n\r\n清除瀏覽器快取\r\n\r\n設備關機重開\r\n\r\n更換其他網路\r\n\r\n更換其他瀏覽器'),
(6, 'EasyRead 退費政策', '使用30天內無限制退費，30天後一概不退費'),
(7, '如何觀看課程影片？', '登入會員後，在 我的課程 中找到已經開課的課程，接著按下課程卡上方的播放按鈕，就可以進入播放器觀看學習囉！進一步瞭解觀看課程影片🔗'),
(8, '線上課程可以看多久？', 'EasyRead 的線上課程為預錄影片，購買完成後等待課程開課即可觀看！\r\n每堂線上課程會依照課程長度及狀況分階段方式更新上架影片內容，同學能安排自己學習進度及方式進行上課。進一步瞭解課程賞課期限🔗\r\n\r\n看課沒有裝置上的限制，但要注意的是同一個時段一組帳戶僅限一台裝置登入觀看使用。進一步瞭解帳戶使用規範🔗'),
(9, '如何註冊會員？', '我們提供了一種註冊方式，請在官網右上角找到註冊會員'),
(10, '購買課程會提供發票嗎？', '在您完成訂單並付款後，ezPay 電子發票平台將協助平台開立訂單發票。\r\n我們會以電子郵件的方式將發票直接寄送至您的信箱！進一步瞭解訂單發票開立說明🔗');

-- --------------------------------------------------------

--
-- 資料表結構 `qt`
--

CREATE TABLE `qt` (
  `qt_id` int(10) UNSIGNED NOT NULL,
  `qt_title` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 傾印資料表的資料 `qt`
--

INSERT INTO `qt` (`qt_id`, `qt_title`) VALUES
(1, '常見問題');

-- --------------------------------------------------------

--
-- 資料表結構 `scorelist`
--

CREATE TABLE `scorelist` (
  `id` tinyint(4) UNSIGNED NOT NULL,
  `cID` tinyint(2) UNSIGNED ZEROFILL NOT NULL,
  `course` enum('國文','英文','數學') NOT NULL DEFAULT '國文',
  `score` tinyint(3) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `scorelist`
--

INSERT INTO `scorelist` (`id`, `cID`, `course`, `score`) VALUES
(1, 01, '國文', 82),
(2, 02, '國文', 68),
(3, 03, '國文', 78),
(4, 04, '國文', 85),
(5, 05, '國文', 80),
(6, 06, '國文', 76),
(7, 07, '國文', 90),
(8, 08, '國文', 87),
(9, 09, '國文', 78),
(10, 10, '國文', 65),
(11, 01, '英文', 67),
(12, 02, '英文', 87),
(13, 03, '英文', 88),
(14, 04, '英文', 92),
(15, 05, '英文', 55),
(16, 06, '英文', 62),
(17, 07, '英文', 65),
(18, 08, '英文', 40),
(19, 09, '英文', 89),
(20, 10, '英文', 64),
(21, 01, '數學', 87),
(22, 02, '數學', 52),
(23, 03, '數學', 76),
(24, 04, '數學', 56),
(25, 05, '數學', 72),
(26, 06, '數學', 80),
(27, 07, '數學', 38),
(28, 08, '數學', 68),
(29, 09, '數學', 90),
(30, 10, '數學', 61);

-- --------------------------------------------------------

--
-- 資料表結構 `students`
--

CREATE TABLE `students` (
  `cID` tinyint(2) UNSIGNED ZEROFILL NOT NULL,
  `cPassword` varchar(80) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cLevel` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cName` varchar(20) NOT NULL,
  `cSex` enum('F','M') NOT NULL DEFAULT 'F',
  `cBirthday` date NOT NULL,
  `cEmail` varchar(100) DEFAULT NULL,
  `cPhone` varchar(50) DEFAULT NULL,
  `cAddr` varchar(255) DEFAULT NULL,
  `cHeight` tinyint(3) UNSIGNED DEFAULT NULL,
  `cWeight` tinyint(3) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `students`
--

INSERT INTO `students` (`cID`, `cPassword`, `cLevel`, `cName`, `cSex`, `cBirthday`, `cEmail`, `cPhone`, `cAddr`, `cHeight`, `cWeight`) VALUES
(01, NULL, '', '簡奉君', 'F', '1978-04-04', 'elven@superstar.com', '0922988876', '台北市濟洲北路12號', 160, 7),
(02, NULL, '', '黃靖輪', 'M', '1987-07-01', 'jinglun@superstar.com', '0918181111', '台北市敦化南路93號5樓', 175, 2),
(03, NULL, '', '潘四敬', 'M', '1987-08-11', 'sugie@superstar.com', '0914530768', '台北市中央路201號7樓', 162, 3),
(04, NULL, '', '賴勝恩', 'M', '1984-06-20', 'shane@superstar.com', '0946820035', '台北市建國路177號6樓', 178, 4),
(05, NULL, '', '黎楚寧', 'F', '1988-02-15', 'ivy@superstar.com', '0920981230', '台北市忠孝東路520號6樓', 164, 5),
(06, NULL, '', '蔡中穎', 'M', '1987-05-05', 'zhong@superstar.com', '0951983366', '台北市三民路1巷10號', 172, 6),
(07, NULL, '', '徐佳螢', 'F', '1985-08-30', 'lala@superstar.com', '0918123456', '台北市仁愛路100號', 158, 5),
(08, NULL, '', '林雨媗', 'F', '1986-12-10', 'crystal@superstar.com', '0907408965', '台北市民族路204號', 166, 4),
(09, NULL, '', '林心儀', 'F', '1981-12-01', 'peggy@superstar.com', '0916456723', '台北市建國北路10號', 168, 3),
(10, NULL, '', '王燕博', 'M', '1993-08-10', 'albert@superstar.com', '0918976588', '台北市北環路2巷80號', 169, 7),
(15, '123', '', '123', 'F', '2023-06-21', '456', '465', '456', NULL, NULL),
(17, '$2y$10$.eHMZ2TA7UNisADiD.AyAuEx1flM5NLEsxFf6pxhAuvLfZguucrqO', '', '456', 'F', '2023-06-20', '45555@', '555@', '555@', NULL, NULL);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `carousel`
--
ALTER TABLE `carousel`
  ADD PRIMARY KEY (`i_id`);

--
-- 資料表索引 `great`
--
ALTER TABLE `great`
  ADD PRIMARY KEY (`b_id`);

--
-- 資料表索引 `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`mID`),
  ADD UNIQUE KEY `mName` (`mName`);

--
-- 資料表索引 `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`n_id`);

--
-- 資料表索引 `n_news`
--
ALTER TABLE `n_news`
  ADD PRIMARY KEY (`n_id`);

--
-- 資料表索引 `qa`
--
ALTER TABLE `qa`
  ADD PRIMARY KEY (`qa_id`);

--
-- 資料表索引 `qt`
--
ALTER TABLE `qt`
  ADD PRIMARY KEY (`qt_id`);

--
-- 資料表索引 `scorelist`
--
ALTER TABLE `scorelist`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`cID`),
  ADD UNIQUE KEY `cName` (`cName`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `carousel`
--
ALTER TABLE `carousel`
  MODIFY `i_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `great`
--
ALTER TABLE `great`
  MODIFY `b_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `member`
--
ALTER TABLE `member`
  MODIFY `mID` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `news`
--
ALTER TABLE `news`
  MODIFY `n_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `n_news`
--
ALTER TABLE `n_news`
  MODIFY `n_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `qa`
--
ALTER TABLE `qa`
  MODIFY `qa_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `qt`
--
ALTER TABLE `qt`
  MODIFY `qt_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `scorelist`
--
ALTER TABLE `scorelist`
  MODIFY `id` tinyint(4) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `students`
--
ALTER TABLE `students`
  MODIFY `cID` tinyint(2) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
