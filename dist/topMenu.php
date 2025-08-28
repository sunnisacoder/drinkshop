<?php include('script.php') ?>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=favorite" />

<section class="topMenu">
    <div class="wrap">
        <div class="socialBox">
            <a href="javascript:;">
                <img src="./images/facebook.png" alt="">
            </a>
            <a href="javascript:;">
                <img src="./images/instagram.png" alt="">
            </a>
        </div>
        <ul class="rightBox">
            <div class="languageBox">
                <span>LANGUAGE</span>
                <div class="languageSelect">
                    <option class="current">繁</option>
                    <option value="">EN</option>
                </div>
            </div>
            <li><a href="javascript:;">尋找門市</a></li>
            <li><a href="javascript:;">加盟專區</a></li>
            <div class="menuBtn">
                <span class="isClosed">MENU</span>
            </div>
        </ul>
    </div>

    <div class="menuList">
        <ul class="menu">
            <li><a href="javascript:;">品牌故事</a></li>
            <li><a href="javascript:;">推薦飲品</a></li>
            <li><a href="javascript:;">最新消息</a></li>
            <li><a href="javascript:;">門市據點</a></li>
            <li><a href="javascript:;">加盟資訊</a></li>
            <li><a href="javascript:;">聯絡我們</a></li>
        </ul>
        <div class="language">
            <span class="current">繁</span>
            <span>EN</span>
        </div>
        <div class="menuBtn">
            <span class="close">CLOSE</span>
        </div>
    </div>

    <div class="wrap-mb">
        <div class="menuBtn-mb">
            <span class="open">MENU</span>
        </div>
        <div class="menuList-mb">
            <div class="inner">
                <div class="menuBtn">
                    <span class="close">CLOSE</span>
                </div>
                <ul>
                    <li><a href="javascript:;">品牌故事</a></li>
                    <li><a href="javascript:;">推薦飲品</a></li>
                    <li><a href="javascript:;">最新消息</a></li>
                    <li><a href="javascript:;">門市據點</a></li>
                    <li><a href="javascript:;">加盟資訊</a></li>
                    <li><a href="javascript:;">聯絡我們</a></li>
                </ul>
                <div class="language">
                    <span class="current">繁</span>
                    <span>EN</span>
                </div>
                <div class="btnBox">
                    <a href="javascript:;">尋找門市</a>
                    <a href="javascript:;">加盟專區</a>
                </div>
                <div class="socialBox">
                    <a href="javascript:;">
                        <img src="./images/facebook.png" alt="">
                    </a>
                    <a href="javascript:;">
                        <img src="./images/instagram.png" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    // 電腦版選單
    $(".wrap .menuBtn").click(function() {
        $(".menuList").toggleClass("show");
    });
    $(".menuList .close").click(function() {
        $(".menuList").toggleClass("show");
    });

    // 手機版選單
    $(".wrap-mb .menuBtn-mb").click(function() {
        $(".menuList-mb").toggleClass("show");
    });
    $(".menuList-mb .close").click(function() {
        $(".menuList-mb").toggleClass("show");
    });

    // 語言下拉
    $(".languageBox").click(function() {
        $(".languageSelect").toggleClass("active");
    });

    // 滾動到特定的區塊，topMenu文字顏色就會變
    $(window).scroll(function() {
        const scrollTop = $(window).scrollTop();
        const bannerHeight = $(".bannerArea").outerHeight();
        const drinkAreaHeight = bannerHeight + $(".drinkArea").outerHeight();
        const newsAreaHeight = drinkAreaHeight + $(".newsArea").outerHeight();
        const aboutAreaHeight = newsAreaHeight + $(".aboutArea").outerHeight();
        const contactAreaHeight = aboutAreaHeight + $(".contactArea").outerHeight();

        if (scrollTop <= bannerHeight * 0.4) {
            $(".topMenu").css("color", "#ffffff");
        } else if (scrollTop <= drinkAreaHeight) {
            $(".topMenu").css("color", "#2c4c47");
        } else if (scrollTop <= newsAreaHeight) {
            $(".topMenu").css("color", "#ffffff");
        } else if (scrollTop <= aboutAreaHeight) {
            $(".topMenu").css("color", "#2c4c47");
        } else {
            $(".topMenu").css("color", "#ffffff");
        }
    });
</script>