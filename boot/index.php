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
</style>

<div class="cont1">
    <div class="row">
        <div class="col-lg-6 d-flex justify-content-center align-items-center">
            <img src="<? echo G5_THEME_IMG_URL ?>/main_visual_01.png" alt="">
        </div>
        <div class="col-lg-6 d-flex justify-content-center flex-column text-start txt px-5">
            <h2 class="mb-4">YBM 레몬만의<br>전용뷰어로 수업</h2>
            <p>화상 회의실 같은 딱딱한 뷰어가 아닙니다.<br>YBM교육이 개발한 <span>화상수업 전용 뷰어</span>입니다.</p>
        </div>
    </div>
</div>
<div class="cont2 position-relative" style="width:1400px">
    <div class="row">
        <div class="col-lg-6 d-flex justify-content-center flex-column text-start txt px-5">
            <h2 class="mb-4">화상수업을 위해 개발된<br>e-Classbook</h2>
            <p>오프라인 교재를 그대로 올려서 수업하지 않습니다.<br>온라인 수업에 맞춰 개발된 <span>온라인 전용 e-Classbook</span>입니다.</p>
        </div>
        <div class="col-lg-6 d-flex justify-content-center align-items-center">
            <img src="<? echo G5_THEME_IMG_URL ?>/main_visual_02.png" alt="" style="width:522px">
        </div>
    </div>
</div>
<div class="cont3">
    <div class="row">
        <div class="col-lg-6 d-flex justify-content-center align-items-center">
            <img src="<? echo G5_THEME_IMG_URL ?>/main_visual_03.png" alt="">
        </div>
        <div class="col-lg-6 d-flex justify-content-center flex-column text-start txt px-5">
            <h2 class="mb-4">지루할 틈이 없는 수업 진행</h2>
            <p><span>온라인 교구와 액티비티</span>로 흥미있는 수업이 진행됩니다.<br>선생님과 함께 직접 수업에 참여합니다.</p>
        </div>
    </div>
</div>


<?php
include_once(G5_THEME_PATH.'/tail.php');