<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
</head>

<body>
    <!-- header -->
    <header>
        <nav class="nav">
            <!-- nav 左邊 -->
            <div class="nav__left">
                <div class="nav__left-logo">
                    <a href=""><img src="./img/logo.png" alt=""></a>
                </div>
                <ul class="nav__left-menu">
                    <li class="underline"><a href="">Microsoft365</a></li>
                    <li class="underline"><a href="">Office</a></li>
                    <li class="underline"><a href="">Windows</a></li>
                    <li class="underline"><a href="">Surface</a></li>
                    <li class="underline"><a href="">Xbox</a></li>
                    <li class="underline"><a href="">支援</a></li>
                </ul>
            <!-- nav 右邊 -->
            <div class="nav__right">
                <div class="nav__right-menu">
                    <div class="burgerLink" tabindex="1">
                        <span><i class="fa-solid fa-bars" ></i></span>
                        <ul class="menuBar">
                            <li>Microsoft 365</li>
                            <li>Office</li>
                            <li>Windows</li>
                            <li>Surface</li>
                            <li>Xbox</li>
                            <li>支援</li>
                            <li class="menuBar-1" tabindex="1">
                                <div>軟體</div>
                                <ul class="menuBar-1-ul">
                                    <li>Window 應用程式</li>
                                    <li>OneDrive</li>
                                    <li>OutLook</li>
                                    <li>Skype</li>
                                    <li>OneNote</li>
                                    <li>Microsoft Teams</li>
                                </ul>
                            </li>
                            <li>個人電腦和設備</li>
                            <li>娛樂</li>
                            <li>商務適用</li>
                            <li>Developer & IT</li>
                            <li>其他</li>
                            <li>檢視網站地圖</li>
                        </ul>
                    </div>
                    <div class="menuBtn" tabindex="1">
                        <span class="underline padding">所有 Microsoft <i class="fa-solid fa-chevron-down"></i></span>
                        <ul class="menu">
                            <div class="menuTop">
                                <li>
                                    <ul>
                                        <span>商務適用</span>
                                        <li><a href="">Microsoft Cloud</a></li>
                                        <li><a href="">Microsoft Azure</a> </li>
                                        <li><a href="">Microsoft Dynamics 365</a></li>
                                        <li><a href="">Microsoft 365</a></li>
                                        <li><a href="">Windows 365</a></li>
                                        <li><a href="">Microsoft Insustry</a></li>
                                        <li><a href="">選購商務</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <ul>
                                        <span>商務適用</span>
                                        <li><a href="">Microsoft Cloud</a></li>
                                        <li><a href="">Microsoft Azure</a> </li>
                                        <li><a href="">Microsoft Dynamics 365</a></li>
                                        <li><a href="">Microsoft 365</a></li>
                                        <li><a href="">Windows 365</a></li>
                                        <li><a href="">Microsoft Insustry</a></li>
                                        <li><a href="">選購商務</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <ul>
                                        <span>商務適用</span>
                                        <li><a href="">Microsoft Cloud</a></li>
                                        <li><a href="">Microsoft Azure</a> </li>
                                        <li><a href="">Microsoft Dynamics 365</a></li>
                                        <li><a href="">Microsoft 365</a></li>
                                        <li><a href="">Windows 365</a></li>
                                        <li><a href="">Microsoft Insustry</a></li>
                                        <li><a href="">選購商務</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <ul>
                                        <span>商務適用</span>
                                        <li><a href="">Microsoft Cloud</a></li>
                                        <li><a href="">Microsoft Azure</a> </li>
                                        <li><a href="">Microsoft Dynamics 365</a></li>
                                        <li><a href="">Microsoft 365</a></li>
                                        <li><a href="">Windows 365</a></li>
                                        <li><a href="">Microsoft Insustry</a></li>
                                        <li><a href="">選購商務</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <ul>
                                        <span>商務適用</span>
                                        <li><a href="">Microsoft Cloud</a></li>
                                        <li><a href="">Microsoft Azure</a> </li>
                                        <li><a href="">Microsoft Dynamics 365</a></li>
                                        <li><a href="">Microsoft 365</a></li>
                                        <li><a href="">Windows 365</a></li>
                                        <li><a href="">Microsoft Insustry</a></li>
                                        <li><a href="">選購商務</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <ul>
                                        <span>商務適用</span>
                                        <li><a href="">Microsoft Cloud</a></li>
                                        <li><a href="">Microsoft Azure</a> </li>
                                        <li><a href="">Microsoft Dynamics 365</a></li>
                                        <li><a href="">Microsoft 365</a></li>
                                        <li><a href="">Windows 365</a></li>
                                        <li><a href="">Microsoft Insustry</a></li>
                                        <li><a href="">選購商務</a></li>
                                    </ul>
                                </li> 
                            </div>
                            <li class="menuBottom">
                                <ul>
                                    <span class="padding">檢視網站地圖 <i class="fa-solid fa-chevron-right"></i></span>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    
                    <span class="hiddenText">搜尋</span>
                    <div><img src="./img/search.png" alt=""></div>
                </div>
                <a class="nav__right-inner" href="">
                    <span class="hiddenText">購物車</span>
                    <img src="./img/shopping-cart.png" height="16" alt="">
                </a>
                <a class="nav__right-inner" href="">
                    <span class="hiddenText">登入</span>
                    <div class="nav__right-loginImg"><img src="./img/login.svg" height="30" alt=""></div>
                </a>
            </div>
        </nav>
    </header>

    <main>
        <!-- banner-top  -->
        <section class="banner-top">
            <a href="">
                <picture>
                    <!-- 換圖片 -->
                    <source media="(max-width:767px)" srcset="./img767/banner-top.webp">
                    <source media="(max-width:1400px)" srcset="./img1400/banner-top.webp">
                    <img src="./img/banner-top.jpeg" width="100%" height="100%" alt="">
                </picture>
                <div class="img-text">
                    <span class="orange-box">新上市</span>
                    <h1>專為今天和明天生活而設計</h1>
                    <p>新一代的遊戲 你的目標 親朋好友 Window 11 是為了讓你<br> 更貼近所喜愛的一切。</p>
                    <span class="white-box">查看你的電腦是否準備就緒 <i class="fa-solid fa-angle-right"></i></span>
                </div>
            </a>
        </section>
        <!-- bannerTop-bottom  -->
        <section class="bannerTop-bottom">
            <a href="" class="textDecoration">
                <img src="./img/window.png" alt="">
                <div>
                    選擇你的
                    Microsoft 365
                </div>
            </a>
            <a href="" class="textDecoration">
                <img src="./img/Surface.png" alt="">
                <div>選購 Surface 裝置</div>
            </a>
            <a href="" class="textDecoration">
                <img src="./img/window.png" alt="">
                <div>取得 Window11</div>
            </a>
        </section>

        <section class="mid">
            <a href=""><img src="./img/mid-img1.png" width="100%" heigth="160" alt="">
                <h3>Microsoft365</h3>
                <p>
                    進階版 Office 應用程式、額外的雲端儲
                    存空間、進階安全性等功能，全都在一個方便的訂閱中
                </p>
            </a>
            <a href=""><img src="./img/mid-img2.jpeg" width="100%" heigth="160" alt="">
                <h3>Surface Laptop Go</h3>
                <p>
                    運用時尚和效能兼具、最輕巧的 Surface
                    筆記型電腦，善加利用每一天。
                </p>
            </a>
            <a href=""><img src="./img/mid-img3.jpeg" width="100%" heigth="160" alt="">
                <h3>Surface Pro X</h3>
                <p>
                    隨時隨地以任何角度不間斷工作，而且配
                    備了可拆式鍵盤與內建的 Slim Pen 存放
                    空間和充電功能。 現在搭載 Windows 11。
                </p>
            </a>
            <a href=""><img src="./img/mid-img4.jpeg" width="100%" heigth="160" alt="">
                <h3>Xbox Game Pass Ultimate</h3>
                <p>
                    首月會員資格只要 NT$30。 在您擁有的
                    裝置上遊玩。 包含 EA Play。 此優惠僅適
                    用於新訂閱者。
                </p>
            </a>
        </section>
        <!-- banner-bottom  -->
        <section class="banner-bottom">
            <div>
                <a href="">
                    <picture>
                        <source media="(max-width:767px)" srcset="./img767/banner-bottom.webp">
                        <source media="(max-width:1400px)" srcset="./img1400/banner-bottom.webp">
                        <img class="bannerBottom-img" src="./img/banner-bottom.jpeg" width="100%" height="545" alt="">
                    </picture>
                    <div class="img-text">
                        <h1>Microsoft OneDrive</h1>
                        <p>將檔案和相片儲存到 OneDrive，即可隨時隨地從任何裝置存取</p>
                        <span class="white-box">深入了解 <i class="fa-solid fa-angle-right"></i></span>
                    </div>
                </a>
            </div>
        </section>

        <section class="business">
            <h1>適用於商務</h1>
        </section>

        <section class="bottom">
            <a href=""><img src="./img/bottom-img1.jpeg" width="100%" alt="">
                <h3>適用於商務的 Surface</h3>
                <p>無論從事哪種工作，都有一款有助於成功的 Surface。</p>
            </a>
            <a href=""><img src="./img/bottom-img2.jpeg" width="100%" alt="">
                <h3>免費取得 Microsoft Teams</h3>
                <p>線上會議、聊天和共用雲端儲存空間，盡在一處。</p>
            </a>
            <a href=""><img src="./img/bottom-img3.jpeg" width="100%" alt="">
                <h3>在混合式環境中蓬勃發展</h3>
                <p>探索工具、資源和策略，協助您的員工在靈活辦公的新環境中取得成功。</p>
            </a>
            <a href=""><img src="./img/bottom-img4.jpeg" width="100%" alt="">
                <h3>商務用 Windows 11 登場</h3>
                <p>專為混合式辦公而設計。 為員工帶來實用性。 為 IT 帶來一致性。 為所有人帶來安全性。</p>
            </a>
        </section>

        <section class="subscribe">
            <span>關注 Microsoft</span>
            <a href=""><img src="./img/facebook.svg" width="28" height="28" alt=""></a>
            <a href=""><img src="./img/youtube.svg" width="28" height="28" alt=""></a>
        </section>
    </main>
    <!-- footer -->
    <footer>
        <section class="footer-topBox">
            <div class="footer-inner-box">
                <div class="footer-title">最新動向</div>
                <li><a href="" class="textDecoration">Azure</a></li>
                <li><a href="" class="textDecoration">AppSource</a></li>
                <li><a href="" class="textDecoration">汽車</a></li>
                <li><a href="" class="textDecoration">政府機構</a></li>
                <li><a href="" class="textDecoration">醫療保健</a></li>
                <li><a href="" class="textDecoration">製造</a></li>
                <li><a href="" class="textDecoration">金融服務</a></li>
                <li><a href="" class="textDecoration">零售</a></li>
            </div>
            <div class="footer-inner-box">
                <div class="footer-title">最新動向</div>
                <li><a href="" class="textDecoration">Azure</a></li>
                <li><a href="" class="textDecoration">AppSource</a></li>
                <li><a href="" class="textDecoration">汽車</a></li>
                <li><a href="" class="textDecoration">政府機構</a></li>
                <li><a href="" class="textDecoration">醫療保健</a></li>
                <li><a href="" class="textDecoration">製造</a></li>
                <li><a href="" class="textDecoration">金融服務</a></li>
                <li><a href="" class="textDecoration">零售</a></li>
            </div>
            <div class="footer-inner-box">
                <div class="footer-title">最新動向</div>
                <li><a href="" class="textDecoration">Azure</a></li>
                <li><a href="" class="textDecoration">AppSource</a></li>
                <li><a href="" class="textDecoration">汽車</a></li>
                <li><a href="" class="textDecoration">政府機構</a></li>
                <li><a href="" class="textDecoration">醫療保健</a></li>
                <li><a href="" class="textDecoration">製造</a></li>
                <li><a href="" class="textDecoration">金融服務</a></li>
                <li><a href="" class="textDecoration">零售</a></li>
            </div>
            <div class="footer-inner-box">
                <div class="footer-title">最新動向</div>
                <li><a href="" class="textDecoration">Azure</a></li>
                <li><a href="" class="textDecoration">AppSource</a></li>
                <li><a href="" class="textDecoration">汽車</a></li>
                <li><a href="" class="textDecoration">政府機構</a></li>
                <li><a href="" class="textDecoration">醫療保健</a></li>
                <li><a href="" class="textDecoration">製造</a></li>
                <li><a href="" class="textDecoration">金融服務</a></li>
                <li><a href="" class="textDecoration">零售</a></li>
            </div>
            <div class="footer-inner-box">
                <div class="footer-title">最新動向</div>
                <li><a href="" class="textDecoration">Azure</a></li>
                <li><a href="" class="textDecoration">AppSource</a></li>
                <li><a href="" class="textDecoration">汽車</a></li>
                <li><a href="" class="textDecoration">政府機構</a></li>
                <li><a href="" class="textDecoration">醫療保健</a></li>
                <li><a href="" class="textDecoration">製造</a></li>
                <li><a href="" class="textDecoration">金融服務</a></li>
                <li><a href="" class="textDecoration">零售</a></li>
            </div>
            <div class="footer-inner-box">
                <div class="footer-title">最新動向</div>
                <li><a href="" class="textDecoration">Azure</a></li>
                <li><a href="" class="textDecoration">AppSource</a></li>
                <li><a href="" class="textDecoration">汽車</a></li>
                <li><a href="" class="textDecoration">政府機構</a></li>
                <li><a href="" class="textDecoration">醫療保健</a></li>
                <li><a href="" class="textDecoration">製造</a></li>
                <li><a href="" class="textDecoration">金融服務</a></li>
                <li><a href="" class="textDecoration">零售</a></li>
            </div>

        </section>
        <section class="footer-bottomBox">
            <a href="">中文(台灣)</a>
            <ul>
                <li><a href="" class="textDecoration">聯絡 Microsoft</a> </li>
                <li><a href="" class="textDecoration">隱私權</a> </li>
                <li><a href="" class="textDecoration">使用規定</a> </li>
                <li><a href="" class="textDecoration">商標</a> </li>
                <li><a href="" class="textDecoration">有關我們的廣告訊息</a> </li>
                <li><a href="" class="textDecoration">Microsoft 2022</a> </li>
            </ul>
        </section>
    </footer>

</body>

</html>