<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dong-a Technology</title>
    
    <!-- 로컬 파일 -->
    <link rel="stylesheet" href="lib/jquery.fullpage.min.css">
    <link rel="stylesheet" href="./css/common.css">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- jQuery 로드 -->
    <script src="lib/jquery-3.7.1.min.js"></script>
    
    <!-- FullPage.js 로드 -->
    <script src="lib/jquery.fullpage.min.js"></script>

    <style>
        .header.on {
            background-color: rgba(0, 0, 0, 0.8);
            transition: background-color 0.3s;
        }

        .header.scrolled {
            background-color: #999;
            transition: background-color 0.3s;
        }
    </style>
</head>

<body>
    <div class="header">
        <div class="in">
            <a href="/dong-a_technology" class="logo">
                <img src="img/logo_donga.svg" class="header_img" alt="">
            </a>

            <nav class="nav">
                <ul class="depth1">
                    <li>
                        <a href="./overview.php">
                            <span>회사소개</span>
                        </a>
                        <ul class="depth2">
                            <li>
                                <a href="./overview.php">
                                    <span>회사개요</span>
                                </a>
                            </li>
                            <li>
                                <a href="./aboutUs.php">
                                    <span>인사말</span>
                                </a>
                            </li>
                            <li>
                                <a href="./history.php">
                                    <span>연혁</span>
                                </a>
                            </li>
                            <li>
                                <a href="./vision.php">
                                    <span>비전</span>
                                </a>
                            </li>
                            <li>
                                <a href="./manner.php">
                                    <span>윤리경영</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <span>제품</span>
                        </a>
                        <ul class="depth2">
                            <li>
                                <a href="#">
                                    <span>제조공정</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>R&D</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>인증현황</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>고객지원</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <span>홍보자료</span>
                        </a>
                        <ul class="depth2">
                            <li>
                                <a href="#">
                                    <span>홍보자료</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>공지사항</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>뉴스</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#">
                            <span>인재경영</span>
                        </a>
                        <ul class="depth2">
                            <li>
                                <a href="./typeOfTalent.php">
                                    <span>인재상</span>
                                </a>
                            </li>
                            <li>
                                <a href="personnelSystem.php">
                                    <span>인사제도</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>채용전형</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>

            <div class="right_cont">
                <div class="menu-icon">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div>
        <div class="gnb_bg"></div>
    </div>

    <!-- 모달 -->
    <div class="overlay"></div>
    <div class="modal">
        <div class="menu-modal-img"></div>

        <div class="modal-top">
            <img src="img/logo_donga.svg" class="modal-image">
            <span class="modal-close">&times;</span>
        </div>

        <div class="modal-content">
            <div>
                <div class="menu-title">회사소개</div>

                <div>
                    <div class="menu-item">
                        <a href="./overview.php">회사개요</a>
                    </div>
                    <div class="menu-item">
                        <a href="./aboutUs.php">인사말</a>
                    </div>
                    <div class="menu-item">
                        <a href="./history.php">연혁</a>
                    </div>
                    <div class="menu-item">
                        <a href="./vision.php">비전</a>
                    </div>
                    <div class="menu-item">
                        <a href="./manner.php">윤리경영</a>
                    </div>
                </div>
            </div>

            <div>
                <div class="menu-title">제품</div>

                <div>
                    <div class="menu-item">
                        <a href="#">제조공정</a>
                    </div>
                    <div class="menu-item">
                        <a href="#">R&D</a>
                    </div>
                    <div class="menu-item">
                        <a href="#">인증현황</a>
                    </div>
                </div>
            </div>

            <div>
                <div class="menu-title">고객지원</div>

                <div>
                    <div class="menu-item">
                        <a href="#">공지사항</a>
                    </div>
                    <div class="menu-item">
                        <a href="#">문의</a>
                    </div>
                </div>
            </div>

            <div>
                <div class="menu-title">인재경영</div>

                <div>
                    <div class="menu-item">
                        <a href="#">인재상</a>
                    </div>
                    <div class="menu-item">
                        <a href="#">인사제도</a>
                    </div>
                    <div class="menu-item">
                        <a href="#">인재채용</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
        
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var header = document.querySelector('.header');

            header.addEventListener('mouseover', function () {
                header.classList.add('on');
            });

            header.addEventListener('mouseout', function () {
                header.classList.remove('on');
            });

            window.addEventListener('scroll', function() {
                var scrollPosition = window.scrollY || window.pageYOffset;
                var windowHeight = window.innerHeight;
                if (scrollPosition > windowHeight / 3) {
                    header.classList.add('scrolled');
                } else {
                    header.classList.remove('scrolled');
                }
            });
        });

        $(document).ready(function() {
            // 모달 열기
            $('.menu-icon').on('click', function() {
                $('.overlay').fadeIn();
                $('.modal').fadeIn();
            });

            // 모달 닫기
            $('.modal-close, .overlay').on('click', function() {
                $('.overlay').fadeOut();
                $('.modal').fadeOut();
            });
        });
    </script>
</body>
</html>
