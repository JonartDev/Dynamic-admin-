<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $admin[0]->title }}</title>
    <!-- <link rel="stylesheet" href="landing_page/Main_assets/all.min.css">
    <link rel="stylesheet" href="landing_page/Main_assets/style.css">
    <link rel="stylesheet" href="landing_page/Main_assets/responsive.css">
    <link rel="stylesheet" href="landing_page/Main_assets/animate.css">
    <link rel="stylesheet" href="landing_page/Main_assets/swiper-bundle.min.css"> -->

    <link rel="icon" href="landing_page/Main_assets/favicon.png" type="image/x-icon">

    <link rel="stylesheet" href="/Main_assets/css/index.css">
    <link rel="stylesheet" href="/Main_assets/css/swiper-bundle.min.css">
</head>

<body>
    <main>
        <div class="logo-container">
            <img src="/Main_assets/images/logo.png" alt="" class="logo">
        </div>
        <div class="main-container">
            @foreach ($links as $item)
                @if ($item->_group == 'customer_service')
                    <a href="{{ $item->links }}" target="_blank" class="csr">
                        <img src="{{ asset('storage/' . $item->image_path) }}" alt="{$item->name}">
                    </a>
                @endif
            @endforeach

            <section class="slider__container">
                <div class="slide-container swiper">
                    <div class="slide-content">
                        <div class="card-wrapper swiper-wrapper">
                            <div class="card swiper-slide">
                                <div class="image-content">
                                    <img src="/Main_assets/images/1.png" alt="" class="card-img">
                                </div>
                            </div>
                            <div class="card swiper-slide">
                                <div class="image-content">
                                    <img src="/Main_assets/images/2.png" alt="" class="card-img">
                                </div>
                            </div>
                            <div class="card swiper-slide">
                                <div class="image-content">
                                    <img src="/Main_assets/images/3.png" alt="" class="card-img">
                                </div>
                            </div>
                            <div class="card swiper-slide">
                                <div class="image-content">
                                    <img src="/Main_assets/images/4.png" alt="" class="card-img">
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- <div class="swiper-button-next swiper-navBtn"></div>
                    <div class="swiper-button-prev swiper-navBtn"></div>
                    <div class="swiper-pagination"></div> -->
                </div>
            </section>
            <section class="app-lists">
                <img src="/Main_assets/images/app-list.png" alt="">
            </section>
            <section class="game-one">
                <img src="/Main_assets/images/game-1.gif" alt="">
            </section>
            <section class="game-two">
                <img src="/Main_assets/images/game-2.gif" alt="">
            </section>
            <section class="comments">
                <img src="/Main_assets/images/comments.png" alt="">
            </section>
        </div>
        <div class="footer-container">
            <div class="button-container">
                <a href="#" id="openModalLink">
                    <img src="/Main_assets/images/btn-1.png" alt="" class="btn-1">
                </a>
                <a href="#" id="openModalLink2">
                    <img src="/Main_assets/images/btn-2.png" alt="" class="btn-2">
                </a>
            </div>
        </div>
        <div id="customModal" class="modal">
            <div class="modal-content">

                <div class="links-container" id="linksContainer">
                    @foreach ($links as $item)
                        @if ($item->_group == 'redirect')
                            <div class="link-item">
                                <div class="ping">
                                    <div class="signal-container">
                                        <span class="signal-bar-1">

                                        </span>
                                        <span class="signal-bar-2">

                                        </span>
                                        <span class="signal-bar-3">

                                        </span>
                                    </div>
                                    <p class="ms-text">2ms</p>
                                </div>
                                <p>{{ $item->name }}</p>
                                <a href="{{ $item->links }}" target="_blank" class="link-button">
                                    立即游戏
                                </a>
                            </div>
                        @endif
                    @endforeach
                    <span id="closeModalBtn" class="close-button">&times;</span>
                    <button id="viewMoreBtn" class="view-more-btn">刷新</button>
                </div>
            </div>
        </div>

        <!-- MODAL 2 -->
        <div id="customModal2" class="modal">
            <div class="modal-content">
                <!-- IOS -->
                <div class="links-container" id="ios">
                    @foreach ($buttons as $item)
                        @if ($item->_group == 'ios')
                            <a href="{{ $item->links }}" target="_blank" class="link">
                                <img class="apple-icon" src="{{ asset('storage/' . $item->image_path) }}"
                                    alt="{$item->name}">
                                <span class="link-text">{{ $item->description }}</span>
                            </a>
                        @endif
                    @endforeach
                    <span id="closeModalBtn2" class="close-button">&times;</span>
                </div>

                <!-- ANDROID -->
                <div class="links-container" id="android">
                    @foreach ($buttons as $item)
                        @if ($item->_group == 'android')
                            <a href="{{ $item->links }}" target="_blank" class="link">
                                <img class="apple-icon" src="{{ asset('storage/' . $item->image_path) }}"
                                    alt="{$item->name}">
                                <span class="link-text">{{ $item->description }}</span>
                            </a>
                        @endif
                    @endforeach
                    <span id="closeModalBtn3" class="close-button">&times;</span>
                </div>
            </div>
        </div>
    </main>
    {!! $slugData->code !!}
    <script src="/Main_assets/js/swiper-bundle.min.js"></script>
    <script src="/Main_assets/js/index.js"></script>

</body>

</html>
