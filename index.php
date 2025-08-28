<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./public/css/reset.css" />
    <link rel="stylesheet" href="./public/css/index.css" />
    <link rel="stylesheet" href="./public/css/footer.css" />
    <link rel="stylesheet" href="./public/css/topMenu.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <title>大茗本位製茶堂</title>
    <?php include './html_head.php'; ?>
</head>

<body>
    <?php include './components/preloader.php'; ?>
    <?php include './topMenu.php'; ?>

    <!-- Banner -->
    <section class="bannerArea light">
        <picture class="bannerMask">
            <img src="./images/banner-mask.svg" alt="">
        </picture>
        <div class="wrap">
            <div class="topBox" data-aos="fade-up">
                <img src="./images/word-01.png" alt="">
            </div>
            <div class="secondBox">
                <div class="drinkBox" data-aos="fade-left">
                    <div class="vertical" data-aos="flip-right"
                        data-aos-easing="ease-out-cubic"
                        data-aos-duration="2000"
                        data-aos-delay="1000">
                        <p>濃厚である &thinsp; 酪梨奶蓋紅玉</p>
                        <span class="dot"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                    </div>
                    <div class="inner">
                        <p class="title show-pc">品味非凡</p>
                        <picture class="drinkImg">
                            <img src="./images/banner-drink-01.png" alt="">
                        </picture>
                    </div>
                </div>
                <div class="middleBox" data-aos="fade"
                    data-aos-easing="ease-in-sine"
                    data-aos-duration="1200"
                    data-aos-delay="600">
                    <div class="logoBox">
                        <p class="jpText" data-aos="fade-left">伝統的なお茶から革新的な飲み物まで、すべてがクラシックな味わいをお届けします。</p>
                        <picture class="logo">
                            <img src="./images/logo.svg" alt="">
                        </picture>
                        <div class="textBox" data-aos="fade-right">
                            <p class="enText">Pro Ching Cha Shop</p>
                            <p class="time">since<br>1994</p>
                            <p class="origin">From Taiwan</p>
                        </div>
                    </div>

                    <div class="drinkBox-mb">
                        <div class="inner">
                            <div class="vertical">
                                <p>濃厚である &thinsp; 酪梨奶蓋紅玉</p>
                                <span class="dot"></span>
                                <span class="dot"></span>
                                <span class="dot"></span>
                                <span class="dot"></span>
                            </div>
                            <div class="drinkImgBox">
                                <picture class="drinkImg">
                                    <img src="./images/banner-drink-01.png" alt="">
                                </picture>
                                <picture class="drinkImg clip">
                                    <img src="./images/banner-drink-02.png" alt="">
                                </picture>
                            </div>
                            <div class="vertical">
                                <p>濃厚である &thinsp; 酪梨奶蓋紅玉</p>
                                <span class="dot"></span>
                                <span class="dot"></span>
                                <span class="dot"></span>
                                <span class="dot"></span>
                            </div>
                        </div>
                    </div>

                    <div class="fruitBox" data-r='{"y": 30, "opacity": 0, "stagger": 0.3}'>
                        <p class="title">\ 濃郁酪梨奶蓋佐純萃茶品 /</p>
                        <div class="flowerBox">
                            <img src="./images/flower.svg" alt="">
                            <p>全球首創新飲品酪梨奶蓋</p>
                            <img src="./images/flower.svg" alt="">
                        </div>
                        <div class="teaBox">
                            <p>酪梨奶蓋 ✕ 嚴選茗茶</p>
                            <div class="imgBox">
                                <picture>
                                    <img src="./images/banner-fruit-01.png" alt="">
                                </picture>
                                <picture>
                                    <img src="./images/banner-fruit-02.png" alt="">
                                </picture>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="drinkBox" data-aos="fade-right">
                    <div class="inner">
                        <p class="title show-pc">不止於茶</p>
                        <picture class="drinkImg">
                            <img src="./images/banner-drink-02.png" alt="">
                        </picture>
                    </div>
                    <div class="vertical" data-aos="flip-left"
                        data-aos-easing="ease-out-cubic"
                        data-aos-duration="2000"
                        data-aos-delay="1000">
                        <p>濃厚である &thinsp; 酪梨奶蓋綠茶</p>
                        <span class="dot"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 往下滾動區塊 -->
    <section class="scroll">
        <span>SCROLL</span>
        <span class="line"></span>
    </section>

    <!-- 推薦飲品 -->
    <section class="drinkArea dark">
        <div class="wrap">
            <div class="topBox" data-aos="fade-up">
                <div class="titleBox">
                    <p class="enText">
                        Recommended drinks
                        <br class="show-pc">
                        <span class="zhText">每一口，都是經典</span>
                    </p>
                </div>
                <div class="btnBox show-pc">
                    <a href="javascript:;" class="btn">
                        <p>查看全部</p>
                        <span class="arrow"></span>
                    </a>
                </div>
            </div>
            <div class="cardArea swiper" data-aos="fade">
                <div class="cardBox swiper-wrapper">
                    <?php
                    $drinks = [
                        [
                            "name" => "酪梨奶蓋泡芙1",
                            "img" => "drink-01.png",
                            "temp" => "H",
                        ],
                        [
                            "name" => "酪梨奶蓋泡芙2",
                            "img" => "drink-01.png",
                            "temp" => "C",
                        ],
                        [
                            "name" => "酪梨奶蓋泡芙3",
                            "img" => "drink-01.png",
                            "temp" => "H",
                        ],
                        [
                            "name" => "酪梨奶蓋泡芙4",
                            "img" => "drink-01.png",
                            "temp" => "H",
                        ],
                        [
                            "name" => "酪梨奶蓋泡芙5",
                            "img" => "drink-01.png",
                            "temp" => "C",
                        ],
                        [
                            "name" => "酪梨奶蓋泡芙6",
                            "img" => "drink-01.png",
                            "temp" => "H",
                        ],
                    ];
                    foreach ($drinks as $index => $drink) { ?>
                        <div class="item swiper-slide">
                            <!-- <div class="cata">
                                <p>匠人茶點系列</p>
                            </div> -->
                            <div class="bcBox">
                                <picture class="imgBox">
                                    <img src="./images/<?php echo $drink['img']; ?>" alt="">
                                </picture>
                            </div>

                            <div class="itemName">
                                <div class="inner">
                                    <p class="name"><?php echo $drink['name']; ?></p>
                                    <div class="number">
                                        <span class="current"><?php echo str_pad($index + 1, 2, '0', STR_PAD_LEFT); ?> </span>
                                        <span class="total">/<?php echo str_pad(count($drinks), 2, '0', STR_PAD_LEFT); ?></span>
                                    </div>
                                </div>
                                <!-- 如果temp為H，則顯示hot -->
                                <?php if ($drink['temp'] == 'H') { ?>
                                    <span class="temp hot">H</span>
                                <?php } else { ?>
                                    <span class="temp ice">C</span>
                                <?php } ?>
                            </div>

                        </div>
                    <?php } ?>
                </div>
                <div class="arrowBox">
                    <div class="prev">
                        <span class="leftArrow"></span>
                    </div>
                    <div class="next">
                        <span class="rightArrow"></span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 最新消息 -->
    <section class="newsArea light">
        <div class="wrap">
            <div class="leftBox">
                <div class="inner">
                    <div class="titleBox" data-aos="fade-up">
                        <p class="enText">
                            news
                            <span class="zhText">最新消息</span>
                        </p>
                    </div>
                    <div class="titleDes" data-aos="fade-down">
                        <p>
                            開啟茶葉之旅，<br>
                            &ensp; 探索無限可能。
                        </p>
                    </div>
                </div>
                <div class="btnBox" data-aos="fade" data-aos-delay="900" data-aos-opacity="1">
                    <a href="javascript:;" class="btn">
                        <p>查看全部</p>
                        <span class="arrow"></span>
                    </a>
                </div>
            </div>
            <div class="cardBox swiper">
                <div class="swiper-wrapper">
                    <?php
                    $news = [
                        [
                            "img" => "news-01.jpg",
                            "cata" => "訊息公告",
                            "title" => "飲品調飲標示飲品調飲標示飲品調飲標示飲品調飲標示飲品調飲標示飲品調飲標示飲品調飲標示",
                            "des" => "飲品調飲標示飲品調飲標示飲品調飲標示飲品調飲標示飲品調飲標示飲品調飲標示飲品調飲標示飲品調飲標示飲品調飲標示",
                        ],
                        [
                            "img" => "news-01.jpg",
                            "cata" => "訊息公告",
                            "title" => "飲品調飲標示2",
                            "des" => "飲品調飲標示",
                        ],
                        [
                            "img" => "news-01.jpg",
                            "cata" => "訊息公告",
                            "title" => "飲品調飲標示3",
                            "des" => "飲品調飲標示",
                        ],
                        [
                            "img" => "news-01.jpg",
                            "cata" => "訊息公告",
                            "title" => "飲品調飲標示4",
                            "des" => "飲品調飲標示",
                        ],
                    ];
                    foreach ($news as $index => $new) { ?>
                        <div class="cardItem swiper-slide">
                            <div class="hoverDeco"></div>
                            <picture class="imgBox">
                                <img src="./images/<?php echo $new['img']; ?>" alt="">
                            </picture>
                            <div class="textBox">
                                <div class="inner">
                                    <p class="cata"><?php echo $new['cata']; ?></p>
                                    <p class="title"><?php echo $new['title']; ?></p>
                                    <p class="des"><?php echo $new['des']; ?></p>
                                    <a href="javascript:;" class="seeAll">
                                        <p>查看全部</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    <!-- 拖曳圖示 -->
                    <div class="dragIcon">
                        <img src="./images/news-item-hover.svg" alt="圖示">
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>

    <!-- 關於我們 -->
    <section class="aboutArea dark">
        <div class="wrap">
            <div class="leftBox">
                <div class="titleBox" data-aos="fade-up">
                    <p class="enText">
                        about <br> US
                    </p>
                    <br class="show-pc">
                    <span class="zhText">關於我們</span>
                </div>
                <div class="titleDes" data-aos="fade-down">
                    <p class="Txt">
                        感受茶葉的靈魂，品味生活的真諦
                    </p>
                    <p>
                        大茗本位製茶堂注重茶葉的選材和製作過程，與當地茶農建立了緊密的合作關係，以確保茶葉的品質和口感達到最佳狀態。他們秉承傳統的手工製茶方法，並結合現代科技的創新，致力於將每一片茶葉的風味和特色完美展現。
                    </p>
                </div>
                <div class="btnBox" data-aos="fade" data-aos-delay="900" data-aos-opacity="1">
                    <a href="javascript:;" class="btn">
                        <p>查看全部</p>
                        <span class="arrow"></span>
                    </a>
                </div>
            </div>
            <div class="rightBox">
                <div class="inner">
                    <picture class="imgBox">
                        <img src="./images/about-01.jpg" alt="">
                    </picture>
                </div>
                <picture class="deco-01" data-aos="fade-left">
                    <img src="./images/about-mask.svg" alt="">
                </picture>
                <picture class="deco-02" data-aos="fade-right">
                    <img src="./images/about-mask.svg" alt="">
                </picture>
                <picture class="deco-03" data-aos="fade-right">
                    <img src="./images/about-mask.svg" alt="">
                </picture>
            </div>
        </div>
    </section>

    <!-- 門市據點 -->
    <section class="storeArea">
        <div class="wrap">
            <div class="middleBox mb">
                <div class="titleBox" data-aos="fade-up">
                    <p class="enText">
                        shop <br> location
                    </p>
                    <span class="zhText">最新門市</span>
                </div>
                <div class="btnBox" data-aos="fade" data-aos-delay="900" data-aos-opacity="1">
                    <a href="javascript:;" class="btn">
                        <p>查看全部</p>
                        <span class="arrow"></span>
                    </a>
                </div>
            </div>
            <div class="leftBox">
                <picture class="imgBox">
                    <img src="./images/store-01.jpg" alt="">
                </picture>
            </div>
            <div class="rightBox">
                <div class="middleBox">
                    <div class="titleBox" data-aos="fade-up">
                        <p class="enText">
                            shop <br> location
                        </p>
                        <span class="zhText">最新門市</span>
                    </div>
                    <div class="btnBox" data-aos="fade" data-aos-delay="900" data-aos-opacity="1">
                        <a href="javascript:;" class="btn">
                            <p>查看全部</p>
                            <span class="arrow"></span>
                        </a>
                    </div>
                </div>
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <?php
                        $stores = [
                            [
                                "cata" => "中部門市",
                                "store" => "斗六中山店2",
                                "tel" => "05-1234567",
                                "address" => "台中市中區中山路123號",
                                "time" => "09:00 - 18:00",
                            ],
                            [
                                "cata" => "中部門市",
                                "store" => "斗六中山店3",
                                "tel" => "05-1234567",
                                "address" => "台中市中區中山路123號",
                                "time" => "09:00 - 18:00",
                            ],
                            [
                                "cata" => "中部門市",
                                "store" => "斗六中山店4",
                                "tel" => "05-1234567",
                                "address" => "台中市中區中山路123號",
                                "time" => "09:00 - 18:00",
                            ],
                            [
                                "cata" => "中部門市",
                                "store" => "斗六中山店5",
                                "tel" => "05-1234567",
                                "address" => "台中市中區中山路123號",
                                "time" => "09:00 - 18:00",
                            ],
                        ];
                        foreach ($stores as $index => $store) { ?>
                            <div class="storeItem swiper-slide">
                                <div class="inner">
                                    <div class="nameBox">
                                        <div class="cata">
                                            <p><?php echo $store['cata']; ?></p>
                                        </div>
                                        <div class="store">
                                            <p><?php echo $store['store']; ?></p>
                                        </div>
                                    </div>
                                    <div class="contact">
                                        <p>電話 / <?php echo $store['tel']; ?></p>
                                        <p>地址 / <?php echo $store['address']; ?></p>
                                        <p>營業時間 / <?php echo $store['time']; ?></p>
                                    </div>
                                    <div class="btnBox" data-aos="fade" data-aos-delay="900" data-aos-opacity="1">
                                        <a href="javascript:;" class="btn">
                                            <p>立即訂餐</p>
                                            <span class="arrow"></span>
                                        </a>
                                        <a href="javascript:;" class="btn">
                                            <p>外送平台</p>
                                            <span class="arrow"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="arrowBox">
                        <div class="next">
                            <span class="rightArrow"></span>
                        </div>
                        <div class="prev">
                            <span class="leftArrow"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include('footer.php') ?>

    <?php include('script.php') ?>

    <script>
        AOS.init({
            duration: 1200,
            easing: 'ease-in-out',
            delay: 400,
            opacity: 0
        });

        const swiper = new Swiper(".drinkArea .swiper", {
            watchSlidesProgress: true,
            loop: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false
            },
            slidesPerView: 'auto',
            centeredSlides: true,
            speed: 1000,
            effect: 'slide',
            navigation: {
                nextEl: ".drinkArea .arrowBox .next",
                prevEl: ".drinkArea .arrowBox .prev",
            },
            pagination: {
                el: ".swiper-pagination",
                type: "progressbar",
            },
            on: {
                slideChange: function() {
                    const activeIndex = this.activeIndex;
                    const slides = this.slides;
                    slides.forEach((slide, index) => {
                        if (index === activeIndex) {
                            slide.classList.remove("original");
                            slide.classList.add("bigger");
                        } else {
                            slide.classList.remove("bigger");
                            slide.classList.add("original");
                        }
                    });
                }
            },
            breakpoints: {
                1280: {
                    spaceBetween: 70,
                },
                992: {
                    spaceBetween: 50,
                    slidesPerView: 3,
                },
                575: {
                    spaceBetween: 30,
                    slidesPerView: 3,
                },
                320: {
                    spaceBetween: 30,
                },
            }
        });

        const newsSwiper = new Swiper('.newsArea .swiper', {
            spaceBetween: 50,
            slidesPerView: 3.75,
            speed: 1000,
            effect: 'slide',
            pagination: {
                el: '.swiper-pagination',
                type: 'progressbar',
            },
            breakpoints: {
                1600: {
                    slidesPerView: 3.5,
                    spaceBetween: 50,
                },
                1280: {
                    slidesPerView: 3.25,
                    spaceBetween: 40,
                },
                900: {
                    spaceBetween: 20,
                    slidesPerView: 3,
                },
                575: {
                    spaceBetween: 20,
                    slidesPerView: 2,
                },
                300: {
                    spaceBetween: 30,
                    slidesPerView: 1,
                },
            }
        });

        const storeSwiper = new Swiper(".storeArea .swiper", {
            effect: 'slide',
            autoplay: {
                delay: 3000,
            },
            allowTouchMove: true,
            speed: 800,
            loop: true,
            navigation: {
                nextEl: ".storeArea .next",
                prevEl: ".storeArea .prev",
            },
            breakpoints: {
                1080: {
                    slidesPerView: 1,
                    spaceBetween: 50,
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                320: {
                    slidesPerView: 1,
                    spaceBetween: 50,
                },
            }
        });
    </script>
</body>