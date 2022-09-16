<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>
<style>
    .cont1{padding: 100px 0;}
    .cont1>.row{height: 100%;}
    .mView{
        width: 100%;padding-top: 36%;position: relative;overflow: hidden;
    }
    .mView video{
        position: absolute;width: 100%;left: 50%;top: 50%;transform:translate(-50%,-50%)
    }
    
    .slide2 .prev,.slide2 .next{cursor: pointer;}
    .slide2 img.prev,img.next{position: absolute;top: 50%;transform:translateY(-50%)}
    .slide2 img.prev{left: -50px;}
    .slide2 img.next{right: -50px;}

    .slickslide2 .sItem{}

    .slide2 .sItem{position: relative;overflow: hidden;}
    
    .slide2 .sItem .txt a{
        font-size:2em;margin-top: 20px;
    }
    /* .slickslide2 .sItem.slick-center{padding: 15px;opacity: 1;transform:scale(1)} */
</style>

<div class="mView">
    <video src="<?php echo G5_THEME_IMG_URL ?>/ybmlemon.mp4" autoplay="" muted="" loop draggable="true" class="w-100"></video>
</div>


<div class="cont1 container">
    <div class="row">
        <div class="col-lg-7 p-5 d-flex justify-content-center align-items-center position-relative order-lg-1 order-sm-2" data-aos="fade-right" data-aos-duration="1500">
            <div class="position-absolute item-t">
                <img src="<? echo G5_THEME_IMG_URL ?>/main_visual_01_item01.png" alt="" class="img-fluid">
            </div>
            <div class="position-absolute">
                <img src="<? echo G5_THEME_IMG_URL ?>/main_ani.gif" alt="" class="gif position-relative img-fluid">
                <img src="<? echo G5_THEME_IMG_URL ?>/main_visual_01_item03.png" alt="" class="item-l position-relative img-fluid">
            </div>
            <div class="position-absolute item-r">
                <img src="<? echo G5_THEME_IMG_URL ?>/main_visual_01_item02.png" alt="" class="img-fluid">
            </div>
            <img src="<? echo G5_THEME_IMG_URL ?>/main_visual_01.png" alt="" class="animated fadeInLeft img-fluid">
        </div>
        <div class="col-lg-5 d-flex justify-content-center flex-column text-lg-start txt text-sm-center order-lg-2 order-sm-1" data-aos="fade-left" data-aos-duration="1500">
            <h2 class="mb-4">YBM 레몬만의<br>전용뷰어로 수업</h2>
            <p>화상 회의실 같은 딱딱한 뷰어가 아닙니다.<br>YBM교육이 개발한 <span>화상수업 전용 뷰어</span>입니다.</p>
        </div>
    </div>
</div>
<div class="cont2 container">
    <div class="row bgi">
        <div class="col-lg-6 d-flex justify-content-center align-items-center flex-column text-lg-start txt text-sm-center txt" data-aos="fade-up" data-aos-duration="1500">
            <h2 class="mb-4">화상수업을 위해 개발된<br>e-Classbook</h2>
            <p class="ps-5">오프라인 교재를 그대로 올려서 수업하지 않습니다.<br>온라인 수업에 맞춰 개발된 <span>온라인 전용 e-Classbook</span>입니다.</p>
        </div>
        <div class="col-lg-6 d-flex justify-content-start align-items-center p-5" data-aos="fade-down" data-aos-duration="1500">
            <img src="<? echo G5_THEME_IMG_URL ?>/main_visual_02.png" alt="" style="width:522px" class="img-fluid">
        </div>
    </div>
</div>

<div class="cont3 container">
    <div class="row">
        <div class="col-lg-7 d-flex justify-content-center align-items-center position-relative order-lg-1 order-sm-2">
            <img src="<? echo G5_THEME_IMG_URL ?>/main_visual_03.png" alt="" class="img-fluid" data-aos="fade-right" data-aos-duration="1500">
            <img src="<? echo G5_THEME_IMG_URL ?>/img_6.png" alt="" class="position-absolute rotate img-fluid">
        </div>
        <div class="col-lg-5 d-flex justify-content-center flex-column txt text-lg-start text-sm-center order-lg-2 order-sm-1 mb-sm-5" data-aos="fade-left" data-aos-duration="1500">
            <h2 class="mb-4">지루할 틈이 없는 수업 진행</h2>
            <p><span>온라인 교구와 액티비티</span>로 흥미있는 수업이 진행됩니다.<br>선생님과 함께 직접 수업에 참여합니다.</p>
        </div>
    </div>
</div>
<div class="cont4 container w-100">
    <div class="row bgi2">
        <div class="col-lg-6 d-flex justify-content-center flex-column align-items-center text-lg-start txt text-sm-center txt mb-sm-5" data-aos="fade-up" data-aos-duration="1500">
            <h2 class="mb-4">외국인 선생님 +<br>한국인 선생님이 함께</h2>
            <p class="ps-5">외국인 선생님과 수업할 때, 한국인 선생님도<br><span>옆에 함께</span>합니다. 더 이상 영어가 두렵지 않습니다.</p>
        </div>
        <div class="col-lg-6 d-flex justify-content-start align-items-center" data-aos="fade-down" data-aos-duration="1500">
            <img src="<? echo G5_THEME_IMG_URL ?>/main_visual_04.png" alt="" class="img-fluid">
        </div>
        <img src="<? echo G5_THEME_IMG_URL ?>/main_visual_char.png" alt="" class="char position-absolute img-fluid">
    </div>
</div>
<div class="cont5 container">
    <div class="row">
        <div class="col-lg-7 d-flex justify-content-center align-items-center position-relative order-lg-1 order-sm-2 mb-sm-5" data-aos="fade-right" data-aos-duration="1500">
            <img src="<? echo G5_THEME_IMG_URL ?>/main_visual_05.png" alt="" class="img-fluid">
        </div>
        <div class="col-lg-5 d-flex justify-content-center flex-column txt text-lg-start txt text-sm-center order-lg-2 order-sm-1 mb-sm-5" data-aos="fade-left" data-aos-duration="1500">
            <h2 class="py-3">Main Class 자신감 <span>UP</span>
            <br>
            예습도<img src="<? echo G5_THEME_IMG_URL ?>/online.png" alt="" class="online img-fluid">
            복습도<img src="<? echo G5_THEME_IMG_URL ?>/online.png" alt="" class="online img-fluid">
            <br>특별한 학습시스템
            </h2>
            <p>본 수업 전/후 예복습 시스템과 숙제로 효과적인 확인학습을<br> 진행합니다. 혼자서도 척척! 자기주도 학습이 가능합니다.</p>
        </div>
    </div>
</div>
<div class="cont6 container">
    <div class="row d-flex flex-column justify-content-center align-items-center">
        <div class="col-md-6 txt text-center">
        <h2 class="mb-4">YBM 레몬만의 밀착 학습관리</h2>
            <p>체계적인 관리를 통해 우리 아이의 학습효과를 극대화 합니다.</p>
        </div>
        <div class="col-lg-6 py-5 d-flex justify-content-center align-items-center" data-aos="zoom-in" data-aos-duration="1500">
            <img src="<? echo G5_THEME_IMG_URL ?>/graph.png" alt="" class="img-fluid">
        </div>
    </div>
    <div class="management-list">
        <ul class="mList">
            <li class="mItem">
                <i class="icon report"></i>
                <div class="right">
                    <h4 class="mb-2">학습 결과 보고서</h4>
                    <p class="eng">Daily Class Report</p>
                </div>
                <p class="info">학습자의 학업 점수와 학습내용을 요약한 보고서를 발송합니다.</p>
            </li>
            <li class="mItem">
                <i class="icon test"></i>
                <div class="right">
                    <h4 class="mb-2">성취도 테스트</h4>
                    <p class="eng">Achievement Test</p>
                </div>
                <p class="info">3개월에 한번씩 학습자의 성취도를 평가하여 피드백을 제공합니다.</p>
            </li>
            <li class="mItem">
                <i class="icon solu"></i>
                <div class="right">
                    <h4 class="mb-2">화상솔루션</h4>
                    <p class="eng">Online Learning Solutions</p>
                </div>
                <p class="info">YBM에서 직접 개발한 화상솔루션과 교안으로 수업을 진행합니다.</p>
            </li>
            <li class="mItem">
                <i class="icon onoff"></i>
                <div class="right">
                    <h4 class="mb-2">온ㆍ오프라인 숙제관리</h4>
                    <p class="eng">Homework</p>
                </div>
                <p class="info">수업 후 온라인ㆍ오프라인 숙제를 진행하여 학습 효과를 높입니다.</p>
            </li>
            <li class="mItem">
                <i class="icon att"></i>
                <div class="right">
                    <h4 class="mb-2">출결관리</h4>
                    <p class="eng">Attendance</p>
                </div>
                <p class="info">학습자의 출결 상황을 한 눈에 파악할 수 있습니다.</p>
            </li>
            <li class="mItem">
                <i class="icon consult"></i>
                <div class="right">
                    <h4 class="mb-2">정기상담관리</h4>
                    <p class="eng">Regular Consulting</p>
                </div>
                <p class="info">학습자의 학업 점수와 학습내용을 요약한 보고서를 발송합니다.</p>
            </li>
            <li class="mItem">
                <i class="icon mobile"></i>
                <div class="right">
                    <h4 class="mb-2">모바일 알림</h4>
                    <p class="eng">Notifications</p>
                </div>
                <p class="info">Mobile에서 아이의 학습현황을 실시간으로 조회하고 알림을 받습니다.</p>
            </li>
            <li class="mItem">
                <i class="icon point"></i>
                <div class="right">
                    <h4 class="mb-2">포인트 제도</h4>
                    <p class="eng">Reward System</p>
                </div>
                <p class="info">학습 보상으로 지급되는 Point는 학습 동기를 부여합니다.</p>
            </li>
        </ul>
    </div>
</div>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<div class="slideWrap position-relative">
    <div class="container position-relative slide">
        <h2 class="text-center">갤러리</h2>
        <img src="<?php echo G5_THEME_IMG_URL?>/pre.png" alt="" class="prev d-none d-md-block" >
        <img src="<?php echo G5_THEME_IMG_URL?>/next.png" alt="" class="next d-none d-md-block">
        <div class="responsive">
        <?php
                echo latest('theme/pic_haein', 'gallery', 7, 23);
            ?>
        </div>
    </div>
</div>
<div class="cont7">
        <div class="container cont77">
            <h2 class="text-center title mb-5">체험 수업 후기</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card text-center text-md-start">
                        <img class="card-img-top mb-2" src="<?php echo G5_THEME_IMG_URL?>/main_review01.png" alt="Title">
                        <div class="card-body pb-5">
                            <h4 class="card-title">저희 아이에게 아주 딱 맞는 수업</h4>
                            <p class="card-text">
                                아이 친구네와 함께 체험 수업을 신청했는데,
                                너무 재미있어 합니다.
                                수업이 끝난 후 또 하고 싶다고 해서 정규 수업 등록을 고민하고 있어요~~
                                선생님께서 아이의 수준에 맞춰 수업을 진행해주시고
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-center text-md-start">
                        <img class="card-img-top mb-2" src="<?php echo G5_THEME_IMG_URL?>/main_review02.png" alt="Title">
                        <div class="card-body pb-5">
                            <h4 class="card-title">레몬 추천합니다!!!:)</h4>
                            <p class="card-text">
                            저희 아이는 온라인 수업을 자주 듣곤 하는데, 생각했
                                던 일반 화상 수업과 달리 기능이 너무 다양하고 정교
                                해서 정말 놀랐어요~!! 수업 내용도 흥미로웠고, 강사
                                분들의 실력도 믿음직스러웠습니다. 만족해요~~
                                레몬 추천합니다!!! :)
            
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-center text-md-start">
                        <img class="card-img-top mb-2" src="<?php echo G5_THEME_IMG_URL?>/main_review03.png" alt="Title">
                        <div class="card-body pb-5">
                            <h4 class="card-title">영어가 좋아졌대요.</h4>
                            <p class="card-text">
                                영어 수업도 처음이고 온라인 수업도 처음인 저희 아
                                이가 체험 수업을 듣고 영어가 좋아졌대요. 선생님들
                                도 좋고, 수업 내내 너무 재미있었다고 합니다~ 걱정
                                했는데 아이가 이렇게 좋아할 줄은 몰랐습니다. 레몬
                                감사해요^-^
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
<div class="footer">
    <div class="top container py-3">
        <div class="row">
            <div class="col-md-2 col-ls-12">
                <h4 class="py-3 white"><a href="#">YBM LEMON 스토리</a></h4>
                <p class="py-1"><a href="#">상담신청</a></p>
            </div>
            <div class="col-md-2">
                <h4 class="py-3"><a href="#">수강신청</a></h4>
                <ul>
                    <li class="py-1"><a href="#">수강신청</a></li>
                    <li class="py-1"><a href="#">무료체험</a></li>
                    <li class="py-1"><a href="#">레벨테스트</a></li>
                    <li class="py-1"><a href="#">무료체험&레벨테스트 신청확인</a></li>
                </ul>
            </div>
            <div class="col-md-2">
                <h4 class="py-3"><a href="#">커뮤니티</a></h4>
                <ul>
                    <li class="py-1"><a href="#">Gallery</a></li>
                    <li class="py-1"><a href="#">Lemon Seed Mall</a></li>
                    <li class="py-1"><a href="#">이벤트</a></li>
                </ul>
            </div>
            <div class="col-md-2">
                <h4 class="py-3"><a href="#">마이클래스</a></h4>
                <ul>
                    <li class="py-1"><a href="#">Calendar</a></li>
                    <li class="py-1"><a href="#">Report</a></li>
                    <li class="py-1"><a href="#">숙제 제출 및 확인</a></li>
                    <li class="py-1"><a href="#">Lemon Seed</a></li>
                    <li class="py-1"><a href="#">수강현황</a></li>
                    <li class="py-1"><a href="#">정회원 공지사항</a></li>
                </ul>
            </div>
            <div class="col-md-2">
                <h4 class="py-3"><a href="#">My Lemon</a></h4>
                <ul>
                    <li class="py-1"><a href="#">수강신청 내역</a></li>
                    <li class="py-1"><a href="#">포인트몰 구매내역</a></li>
                    <li class="py-1"><a href="#">학부모정보</a></li>
                    <li class="py-1"><a href="#">학습자정보</a></li>
                    <li class="py-1"><a href="#">1:1 답변확인</a></li>
                    <li class="py-1"><a href="#">학습장애답변확인</a></li>
                    <li class="py-1"><a href="#">상담신청내역</a></li>
                </ul>
            </div>
            <div class="col-md-2">
                <h4 class="py-3"><a href="#">고객센터</a></h4>
                <ul>
                    <li class="py-1"><a href="#">공지사항</a></li>
                    <li class="py-1"><a href="#">FAQ</a></li>
                    <li class="py-1"><a href="#">1:1 상담</a></li>
                    <li class="py-1"><a href="#">학습장애신고</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>



<script>
    AOS.init();
    $('.responsive').slick({
  dots: true,
  infinite: false,
  speed: 300,
  slidesToShow: 4,
  slidesToScroll: 4,
  nextArrow:$('.slide .next'),
    prevArrow:$('.slide .prev'),
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
</script>


<?php
include_once(G5_THEME_PATH.'/tail.php');