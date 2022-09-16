<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/tail.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/shop.tail.php');
    return;
}
?>
   <? include_once(G5_THEME_PATH."/skin/nav/mysubmenu.php")?>
</div>
<!-- } 콘텐츠 끝 -->

<hr>

<!-- 하단 시작 { -->
<div class="fBtm bg-dark">
    <div class="container">
        <div class="row">
          <div class="col-md-6 py-4">
            <ul class="d-flex gap-2 justify-content-center justify-content-md-start align-items-center topMenu">
              <li><a href="#!" class="text-white">로그인</a></li>
              <li>|</li>
              <li><a href="#!" class="text-white">이용약관</a></li>
              <li>|</li>
              <li><a href="#!" class="text-white">개인정보처리방침</a></li>
              <li>|</li>
              <li><a href="#!" class="text-white">영상정보처리기기 운영관리방침</a></li>
            </ul>
          </div>
          <div class="col-md-6">
              <ul class="d-flex gap-2 justify-content-center justify-content-md-end sns align-items-center">
                  <li class="ps-2"><a href="#"><img src="<?php echo G5_THEME_IMG_URL?>/naver_blog2.png" alt=""></a></li>
                  <li class="ps-2"><a href="#"><img src="<?php echo G5_THEME_IMG_URL?>/Instagram.png" alt=""></a></li>
                  <li class="ps-2"><a href="#"><img src="<?php echo G5_THEME_IMG_URL?>/youtube.png" alt=""></a></li>
                </ul>
            </div>
        </div>
        <div class="line"></div>
        <div class="row py-4 fBtm2">
            <div class="col-md-3">
                <ul>
                    <li class="py-2"><span>사업자등록번호</span>&nbsp&nbsp&nbsp101-81-92326</li>
                    <li class="py-2"><span>E-mail</span>&nbsp&nbsp&nbspybmky@ybm.co.kr</li>
                    <li class="py-2">Copyright © ㈜YBM교육. All rights reserved.</li>
                </ul>
            </div>
            <div class="col-md-3">
                <ul>
                    <li class="py-2"><span>대표이사</span>&nbsp&nbsp&nbsp화찬권</li>
                    <li class="py-2"><span>TEL</span>&nbsp&nbsp&nbsp1670-7978&nbsp&nbsp&nbsp<span>FAX</span>&nbsp&nbsp&nbsp02-2260-4410</li>
                </ul>
            </div>
            <div class="col-md-3">
                <ul>
                    <li class="py-2"><span>통신판매업신고번호</span>&nbsp&nbsp&nbsp제 01-985호</li>
                    <li class="py-2"><span>서울특별시 종로구 창경궁로 112-7 (주)YBM교육</span></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<?php
if(G5_DEVICE_BUTTON_DISPLAY && !G5_IS_MOBILE) { ?>
<?php
}

if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<!-- } 하단 끝 -->

<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>

<?php
include_once(G5_THEME_PATH."/tail.sub.php");