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
</style>

<div class="mView">
    <video src="<? echo G5_THEME_IMG_URL ?>/ybmlemon.mp4" autoplay="" muted="" loop draggable="true" class="w-100"></video>
</div>
<div class="cont1 container">
    <div class="row">
        <div class="col-lg-7 d-flex justify-content-center align-items-center position-relative">
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
        <div class="col-lg-5 d-flex justify-content-center flex-column text-start txt">
            <h2 class="mb-4">YBM 레몬만의<br>전용뷰어로 수업</h2>
            <p>화상 회의실 같은 딱딱한 뷰어가 아닙니다.<br>YBM교육이 개발한 <span>화상수업 전용 뷰어</span>입니다.</p>
        </div>
    </div>
</div>
<div class="cont2 w-100">
    <div class="row bgi">
        <div class="col-lg-6 d-flex justify-content-center align-items-center flex-column text-start txt">
            <h2 class="mb-4">화상수업을 위해 개발된<br>e-Classbook</h2>
            <p class="ps-5">오프라인 교재를 그대로 올려서 수업하지 않습니다.<br>온라인 수업에 맞춰 개발된 <span>온라인 전용 e-Classbook</span>입니다.</p>
        </div>
        <div class="col-lg-6 d-flex justify-content-start align-items-center">
            <img src="<? echo G5_THEME_IMG_URL ?>/main_visual_02.png" alt="" style="width:522px">
        </div>
    </div>
</div>
<div class="cont3 container">
    <div class="row">
        <div class="col-lg-7 d-flex justify-content-center align-items-center position-relative">
            <img src="<? echo G5_THEME_IMG_URL ?>/main_visual_03.png" alt="">
            <img src="<? echo G5_THEME_IMG_URL ?>/img_6.png" alt="" class="position-absolute rotate">
        </div>
        <div class="col-lg-5 d-flex justify-content-center flex-column text-start txt">
            <h2 class="mb-4">지루할 틈이 없는 수업 진행</h2>
            <p><span>온라인 교구와 액티비티</span>로 흥미있는 수업이 진행됩니다.<br>선생님과 함께 직접 수업에 참여합니다.</p>
        </div>
    </div>
</div>
<div class="cont4 w-100">
    <div class="row bgi2">
        <div class="col-lg-6 d-flex justify-content-center flex-column align-items-center text-start txt">
            <h2 class="mb-4">외국인 선생님 +<br>한국인 선생님이 함께</h2>
            <p class="ps-5">외국인 선생님과 수업할 때, 한국인 선생님도<br><span>옆에 함께</span>합니다. 더 이상 영어가 두렵지 않습니다.</p>
        </div>
        <div class="col-lg-6 d-flex justify-content-start align-items-center">
            <img src="<? echo G5_THEME_IMG_URL ?>/main_visual_04.png" alt="">
        </div>
        <img src="<? echo G5_THEME_IMG_URL ?>/main_visual_char.png" alt="" class="char position-absolute">
    </div>
</div>
<div class="cont5 container">
    <div class="row">
        <div class="col-lg-7 d-flex justify-content-center align-items-center position-relative">
            <img src="<? echo G5_THEME_IMG_URL ?>/main_visual_05.png" alt="">
        </div>
        <div class="col-lg-5 d-flex justify-content-center flex-column text-start txt">
            <h2 class="py-3">Main Class 자신감 <span>UP</span>
            <br>
            예습도<img src="<? echo G5_THEME_IMG_URL ?>/online.png" alt="" class="online">
            복습도<img src="<? echo G5_THEME_IMG_URL ?>/online.png" alt="" class="online">
            <br>특별한 학습시스템
            </h2>
            <p>본 수업 전/후 예복습 시스템과 숙제로 효과적인 확인학습을<br> 진행합니다. 혼자서도 척척! 자기주도 학습이 가능합니다.</p>
        </div>
    </div>
</div>
<div class="cont6 container">
    <div class="row d-flex flex-column justify-content-center align-items-center">
        <div class="col-lg-6 txt text-center">
        <h2 class="mb-4">YBM 레몬만의 밀착 학습관리</h2>
            <p>체계적인 관리를 통해 우리 아이의 학습효과를 극대화 합니다.</p>
        </div>
        <div class="col-lg-6 py-5 d-flex justify-content-center align-items-center">
            <img src="<? echo G5_THEME_IMG_URL ?>/graph.png" alt="" class="img-fluid">
        </div>
        <div class="col-lg-12">
            <ul class="mList">
                <li class="mItem">
                    <i class="icon report"></i>
                    <div class="right">
                        <h4>학습 결과 보고서</h4>
                        <p>Daily Class Report</p>
                    </div>
                    <p class="info">학습자의 학업 점수와 학습내용을 요약한 보고서를 발송합니다.</p>
                </li>
                <li class="mItem">
                    <i class="icon test"></i>
                    <div class="right">
                        <h4>성취도 테스트</h4>
                        <p>Achievement Test</p>
                    </div>
                    <p class="info">3개월에 한번씩 학습자의 성취도를 평가하여 피드백을 제공합니다.</p>
                </li>
                <li class="mItem">
                    <i class="icon solu"></i>
                    <div class="right">
                        <h4>화상솔루션</h4>
                        <p>Online Learning Solutions</p>
                    </div>
                    <p class="info">YBM에서 직접 개발한 화상솔루션과 교안으로 수업을 진행합니다.</p>
                </li>
                <li class="mItem">
                    <i class="icon onoff"></i>
                    <div class="right">
                        <h4>온ㆍ오프라인 숙제관리</h4>
                        <p>Homework</p>
                    </div>
                    <p class="info">수업 후 온라인ㆍ오프라인 숙제를 진행하여 학습 효과를 높입니다.</p>
                </li>
                <li class="mItem">
                    <i class="icon att"></i>
                    <div class="right">
                        <h4>출결관리</h4>
                        <p>Attendance</p>
                    </div>
                    <p class="info">학습자의 출결 상황을 한 눈에 파악할 수 있습니다.</p>
                </li>
                <li class="mItem">
                    <i class="icon consult"></i>
                    <div class="right">
                        <h4>정기상담관리</h4>
                        <p>Regular Consulting</p>
                    </div>
                    <p class="info">학습자의 학업 점수와 학습내용을 요약한 보고서를 발송합니다.</p>
                </li>
                <li class="mItem">
                    <i class="icon mobile"></i>
                    <div class="right">
                        <h4>모바일 알림</h4>
                        <p>Notifications</p>
                    </div>
                    <p class="info">Mobile에서 아이의 학습현황을 실시간으로 조회하고 알림을 받습니다.</p>
                </li>
                <li class="mItem">
                    <i class="icon point"></i>
                    <div class="right">
                        <h4>포인트 제도</h4>
                        <p>Reward System</p>
                    </div>
                    <p class="info">학습 보상으로 지급되는 Point는 학습 동기를 부여합니다.</p>
                </li>
            </ul>
        </div>
    </div>
</div>

<?php
include_once(G5_THEME_PATH.'/tail.php');