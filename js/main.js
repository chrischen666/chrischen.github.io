function main() {
    var card2 = "";

    var cards = [
        {
            title: "圖解思維X時事引導：實用日文輕鬆玩！",
            description:
                "【真正有價值的一門線上日語課】從圖表理解架構，再以貼近生活的時事例句引導，帶入實際溝通時實用的日文表達！",
            price: 600,
        },
        {
            title: "產品設計實戰：用Figma打造絕佳UI/UX",
            description:
                "【產品設計師必學】學習 Figma 做出體驗絕佳的 UI/UX，成為軟硬實力兼具的產品設計師。",
            price: 600,
        },
        {
            title: "掌握英文8原則-自學英文的最短路徑",
            description:
                "【英文輕鬆學】用語言學的觀念，教你用核心詞彙搭配不同字詞構成許多單字，精準掌握母語人士使用英文的邏輯。",
            price: 600,
        },
        {
            title: "小資族理財的第一堂入門課-初學者篇",
            description:
                "【新手理財】讓李柏鋒帶你理解投資工具與如何用有限資金，透過投資、保險等方式，累積財富！",
            price: 600,
        },
        {
            title: "品牌經理養成班：外商行銷前輩帶你入行",
            description:
                "【限時優惠 59 折】透過實戰課題演練、迅速獲取品牌經理的行銷要領，建立品牌行銷核心能力！",
            info: "募資倒數2天",
            valuemax: "75",
        },
        {
            title: "產品思維：Spotify 產品經理帶你快速入門",
            description:
                "學會矽谷各大科技公司使用的產品思維，了解一個產品是如何從 0 誕生，並延伸應用在工作及生活中。",
            info: "募資倒數20天",
            valuemax: "50",
        },
        {
            title: "如何成為資料分析師：從問題解決到行動方案",
            description:
                "【轉職資料分析師】跟著資深資料分析師，透過資料分析的思維，帶你走過實際解決問題的框架。",
            info: "募資倒數15天",
            valuemax: "25",
        },
        {
            title: "影片製作入門10堂課 - 攝影、剪輯、腳本",
            description:
                "【影片入門】帶你快速入門攝影、剪輯、燈光、腳本、行銷，讓你能夠一個人完成基礎的影片製作。",
            info: "募資倒數10天",
            valuemax: "100",
        },
    ];

    //當字數長度超過48時，會取0-47字超過的會以more顯示
    for (var i = 0; i < 4; i++) {
        var description = cards[i].description;
        if (description.length > 48) {
            description = description.slice(0, 47) + `<a>.....</a>`;
        }
        var card = `<div class="col-md-3 col-sm-6 my-2">
    <div class="card">
        <div class="pic">
            <img src="./images/d0${i}.png" class="card-img-top" alt="...">
        </div>
        <div class="card-body">
            <h5 class="card-title">${cards[i].title}</h5>
            <p class="card-text">${description}</p>
            <p class="show">NT$<span class="price">${cards[i].price}</span></p>
            <a  class="btn btn-outline-info add_cart">加入購物車</a>
        </div>
    </div>
</div>`;
        cont.innerHTML += card;
    }
    for (var i = 4; i < cards.length; i++) {
        var description = cards[i].description;
        if (description.length > 48) {
            description = description.slice(0, 47) + `<a>.....</a>`;
        }
        var card2 = `<div class="col-md-3 col-sm-6 my-2">
                <div class="card">
                    <div class="pic">
                        <img src="images/d0${i}.png" class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">${cards[i].title}</h5>
                        <p class="card-text">${description}</p>
                        <p class="text-info">${cards[i].info}</p>
                        <div class="progress">
                            <div class="progress-bar w-${cards[i].valuemax}  bg-info" role="progressbar" aria-valuenow="75"
                                aria-valuemin="0" aria-valuemax="100">${cards[i].valuemax}%</div>
                        </div>
                        <br>
                            <a class="btn btn-outline-info add_cart">加入購物車</a>
                    </div>
                </div>  
            </div>`;
        cont2.innerHTML += card2;
    }
}
