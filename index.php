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
        .scrolled {
            color: #000 !important;
        }
    </style>
</head>

<body>
    <div class="header">
        <div class="in">
            <a href="/dong-a_technology" class="logo">
                <img class="header_img" src="img/logo_donga.svg" alt="">
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

    <div id="fullpage">
        <div class="section mainvisual" id="section0">
            <h1>Creating Infinite Value through<br>Change and Innovation</h1>
            <span class="arrow"></span>
        </div><!-- #section0 end -->

        <div class="section about" id="section1">
            <div class="inner">
                <div class="about-txt-box">
                    <span class="back_title">About</span>
                    <h2>DONG-A<br>TECHNOLOGY</h2>
                    <div class="about-txt">
                        <h4>변화와 혁신을 통한 끝없는 가치 창출</h4>
                        <p>동아테크놀로지는 변화와 혁신을 기반으로 무한한 가치를 창출해 갑니다.<br>고객의 신뢰를 바탕으로 지속 가능한 성장을 이루며,<br>사회적 책임을 다하는 기업으로서 더
                            나은 미래를 만들어 나갑니다.</p>
                    </div><!-- .about-txt end -->
                    <a href="#" class="moreBtn">
                        회사소개 바로가기
                        <span class="arrow"></span>
                    </a>
                </div><!-- .about-txt-box end -->
            </div><!-- .inner end -->
        </div><!-- #section1 end -->

        <div class="section" id="section2">
            <div class="inner">
                <h1>Our Services</h1>
                <p>우리의 모든 공정과 연구개발, 인증현황을 통해 고객만족을 실현합니다.<br>언제나 신뢰할 수 있는 고객지원을 약속드립니다.</p>
                <div class="services">
                    <div class="service-card">
                        <img src="img/process-mining.svg" alt="Manufacturing">
                        <h2>제조공정</h2>
                        <p>정밀 기술과 혁신이 결합된<br>동아 테크놀로지의 공정 현황입니다.</p>
                        <a href="#" class="moreBtn">
                            VIEW MORE
                            <span class="arrow"></span>
                        </a>
                    </div>
                    <div class="service-card">
                        <img src="img/development.svg" alt="R&D">
                        <h2>R&D</h2>
                        <p>미래 혁신을 선도하며<br>지속가능한 발전을 이끌어 갑니다.</p>
                        <a href="#" class="moreBtn">
                            VIEW MORE
                            <span class="arrow"></span>
                        </a>
                    </div>
                    <div class="service-card">
                        <img src="img/user-certification.svg" alt="Certification">
                        <h2>인증현황</h2>
                        <p>신뢰받는 기술, 공인된 품질<br>동아테크놀로지의 힘입니다.</p>
                        <a href="#" class="moreBtn">
                            VIEW MORE
                            <span class="arrow"></span>
                        </a>
                    </div>
                    <div class="service-card">
                        <img src="img/customer-service.svg" alt="Customer Support">
                        <h2>고객지원</h2>
                        <p>고객을 먼저 생각하고 함께하는<br>고객지원 서비스입니다.</p>
                        <a href="#" class="moreBtn">
                            VIEW MORE
                            <span class="arrow"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div><!-- #section2 end -->

        <div class="section" id="section3">
            <div class="container">
                <div class="background"></div>
                <div class="values">
                    <div class="value-item">
                        <h2>설립년도</h2>
                        <div class="icon"></div>
                        <div class="value-number" data-value="2016">0</div>
                        <p>년</p>
                        <div class="value-item-line"></div>
                        <span>2016년 설립<br>2019년 품질(ISO 9001),<br> 환경(ISO14001) 경영시스템 인증<br>2020년 미래성공유망기업</span>
                    </div>

                    <div class="value-item">
                        <h2>임직원 수</h2>
                        <div class="icon"></div>
                        <div class="value-number" data-value="30">0</div>
                        <p>명</p>
                        <div class="value-item-line"></div>
                        <span>사람을 중심으로<br>동반 성장을 추구하는 기업</span>
                    </div>

                    <div class="value-item">
                        <h2>매출액</h2>
                        <div class="icon"></div>
                        <div class="value-number" data-value="121">0</div>
                        <p>억원</p>
                        <div class="value-item-line"></div>
                        <span>끊임없는 도약<br>지속적인 매출 상승</span>
                    </div>

                    <div class="value-item">
                        <h2>영업이익 성장률</h2>
                        <div class="icon"></div>
                        <div class="value-number" data-value="34">0</div>
                        <p>%</p>
                        <div class="value-item-line"></div>
                        <span>강력한 성장동력을 갖추어<br>안정적으로 성장하는 회사</span>
                    </div>

                </div>
            </div>
        </div><!-- #section3 end -->

        <div class="section" id="section4">
            <div class="inner">
                <div class="about-txt-box">
                    <span class="back_title">Careers</span>
                    <h2>Open&Positive</h2>
                    <div class="about-txt">
                        <p>기업의 성장동력은 인재라는 믿음으로<br>
                            회사와 임직원이 함께 성장할 수 있는 기업문화를 만들어 갑니다</p>
                    </div><!-- .about-txt end -->
                </div><!-- .about-txt-box end -->

                <div class="moreBtn-wrap">
                    <a href="#" class="moreBtn">
                        인재상
                        <span class="arrow"></span>
                    </a>

                    <a href="#" class="moreBtn">
                        인사제도
                        <span class="arrow"></span>
                    </a>

                    <a href="#" class="moreBtn">
                        채용전형
                        <span class="arrow"></span>
                    </a>
                </div>
            </div><!-- .inner end -->
        </div><!-- #section4 end -->

        <footer class="section fp-auto-height" id="footer">
            <div class="box">
                <div class="policy_menu">
                    <a href="">서비스 이용약관</a>
                    <a href="">법적고지</a>
                    <a href="">이메일 무단수집 거부</a>
                    <a href=""><strong>개인정보처리방침</strong></a>
                    <a href="">CONTACT US</a>
                    <a href="" target="">ORDER SYSTEM</a>
                </div>
                <div class="open_btn">
                    <button>(주)닷코 바로가기</button>
                    <a href=""><img src="img/round-plus.png" alt=""></a>
                </div>
            </div>

            <div class="box">
                <ul class="information">
                    <li>
                        <p>(주)동아테크놀로지</p>
                        <p>사업자등록번호 : 570-81-00435</p>
                        <p>법인등록번호 : 230111-0260544</p>
                        <p>대표 : 임현호</p>
                    </li>
                    <li>
                        <p>대표전화 : <a href="">052-257-7208 / 052-711-1263</a></p>
                        <address>주소 : 울산광역시 울주군 웅촌면 와지공단 2길 18</address>
                    </li>
                    <li class="copy">Copyright © (주)동아테크놀로지. All Rights Reserved.</li>
                </ul>
                <!-- <div class="service_center">
                    <dl>
                        <dt>고객지원센터</dt> 
                        <dd>
                            <a href="tel:052-711-1263">052-711-1263</a>
                        </dd>
                    </dl>
                </div> -->
            </div>
        </footer><!-- #footer end -->
    </div>

    <!-- FullPage.js 초기화 -->
    <script>
        let sectionDestination = 1;
        const header = document.querySelector('.header');
        const headerFontColor = $('nav > .depth1');
        const headerImage = $('.header > .in > a > img');
        const headerIcon = $('.menu-icon div');

        $(document).ready(function () {
            $('#fullpage').fullpage({
                anchors: ['firstPage', 'secondPage', '3rdPage', '4thPage', '5thPage', '6thPage'],
                navigationPosition: 'left',
                showActiveTooltip: true,
                afterLoad: function(origin, destination, direction){
                    var scrollPosition = window.scrollY || window.pageYOffset;
                    var windowHeight = window.innerHeight;

                    sectionDestination = destination;

                    if (destination == 1 || destination == 3 || destination == 5) {
                        headerImage.attr('src', 'img/logo_donga.svg');
                        headerFontColor.removeClass('scrolled');
                        headerIcon.css('background-color', '#fff');
                    } else {
                        headerImage.attr('src', 'img/logo_donga_black.svg');
                        headerFontColor.addClass('scrolled');
                        headerIcon.css('background-color', '#000');
                    }
                }
            });

            // 모달
            $('.menu-icon').on('click', function() {
                $('.overlay').fadeIn();
                $('.modal').fadeIn();
            });

            $('.modal-close, .overlay').on('click', function() {
                $('.overlay').fadeOut();
                $('.modal').fadeOut();
            });

            // 숫자 애니메이션 스크립트 추가
            function animateValue(element, start, end, duration) {
                let startTimestamp = null;
                const step = (timestamp) => {
                    if (!startTimestamp) startTimestamp = timestamp;
                    const progress = Math.min((timestamp - startTimestamp) / duration, 1);
                    element.innerHTML = Math.floor(progress * (end - start) + start);
                    if (progress < 1) {
                        window.requestAnimationFrame(step);
                    }
                };
                window.requestAnimationFrame(step);
            }

            const section4 = document.getElementById('section4');
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        $('.value-number').each(function () {
                            const endValue = parseInt($(this).data('value'));
                            animateValue(this, 0, endValue, 2000);
                        });
                        observer.unobserve(section4);
                    }
                });
            });

            observer.observe(section4);
        });

        document.addEventListener('DOMContentLoaded', function () {
            const header = document.querySelector('.header');
            const headerFontColor = $('nav > .depth1');

            header.addEventListener('mouseover', function () {
                header.classList.add('on');

                console.log(sectionDestination);

                if (sectionDestination != 1 && sectionDestination != 3 && sectionDestination != 5) {
                    headerImage.attr('src', 'img/logo_donga.svg');
                    headerFontColor.removeClass('scrolled');
                    headerIcon.css('background-color', '#fff');
                }
            });

            header.addEventListener('mouseout', function () {
                header.classList.remove('on');
                console.log('mouseout ::: ', sectionDestination);

                if (sectionDestination != 1 && sectionDestination != 3 && sectionDestination != 5) {
                    headerImage.attr('src', 'img/logo_donga_black.svg');
                    headerFontColor.addClass('scrolled');
                    headerIcon.css('background-color', '#000');
                }
            });
        });
    </script>
</body>
</html>