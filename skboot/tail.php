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
<footer class="footer py-4">
        <div class="container">
            <div class="row py-2">
                <div class="col-md-6 d-flex justify-content-md-start">
                    <a href="index.html" class="logo3">
                        <img src="images/img_logo_black.png" alt="" class="max">
                    </a>
                </div>
                <div class="col-md-6 d-flex justify-content-md-end position-relative">
                    <div class="dropup-center dropup position-absolute">
                        <button class="btn btn-lightgray dropdown-toggle " type="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Family Site
                        </button>
                        <ul class="dropdown-menu position-absolute mb-2">
                          <li><a class="dropdown-item" href="#">세상파일</a></li>
                          <li><a class="dropdown-item" href="#">SK 뉴스쿨</a></li>
                          <li><a class="dropdown-item" href="#">곧장기부</a></li>
                          <li><a class="dropdown-item" href="#">Social Innovators Table</a></li>
                          <li><a class="dropdown-item" href="#">CSAP</a></li>
                          <li><a class="dropdown-item" href="#">Sunny</a></li>
                          <li><a class="dropdown-item" href="#">LOOKIE</a></li>
                        </ul>
                      </div>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-md-6 d-flex align-items-center">
                    <ul class="d-flex gap-4 justify-content-md-start icon">
                        <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-6 d-flex justify-content-md-end">
                    <a href="#" class="logo4"></a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                  <p class="small">04393 서울시 용산구 장문로 60 (동빙고동) TEL : 02-333-3963, FAX : 02-333-3961, E-MAIL : contact@skhappiness.org
                    <br>
                    COPYRIGHT 2022 행복나눔재단. ALL RIGHTS RESERVED.</p>
                  <ul class="d-flex gap-2">
                    <li class="privacy position-relative"><a href="#" class="small">개인정보처리방침</a></li>
                    <li><a href="#" class="small">국세청</a></li>
                  </ul>
                </div>
              </div>
        </div>
        
    </footer>

<?php
include_once(G5_THEME_PATH."/tail.sub.php");