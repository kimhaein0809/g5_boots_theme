<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/head.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    define('G5_IS_COMMUNITY_PAGE', true);
    include_once(G5_THEME_SHOP_PATH.'/shop.head.php');
    return;
}
include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
?>

<!-- header s-->
<nav class="navbar navbar-expand-sm navbar-light fixed-top">
    <div class="container">
        <a class="navbar-brand logo" href="#">
            <img src="<? echo G5_THEME_IMG_URL ?>/img_logo_black.png" alt="" class="max">
        </a>
        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
            data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                <?php
					$menu_datas = get_menu_db(0, true);
					$gnb_zindex = 999; // gnb_1dli z-index 값 설정용
					$i = 0;
					foreach( $menu_datas as $row ){
						if( empty($row) ) continue;
						$add_class = (isset($row['sub']) && $row['sub']) ? 'gnb_al_li_plus' : '';
					?>
                <li  class="nav-item gnb_1dli">
                    <a href="<?php echo $row['me_link']; ?>" target="_<?php echo $row['me_target']; ?>"
                    class="nav-link"><?php echo $row['me_name'] ?></a>

                </li>
                <?php
					$i++;
					}   //end foreach $row

					if ($i == 0) {  ?>
                <li class="gnb_empty">메뉴 준비 중입니다.<?php if ($is_admin) { ?> <a
                        href="<?php echo G5_ADMIN_URL; ?>/menu_list.php">관리자모드 &gt; 환경설정 &gt; 메뉴설정</a>에서 설정하실 수
                    있습니다.<?php } ?></li>
                <?php } ?>
            </ul>


            

        </div>
    </div>
</nav>
<!-- header e-->
<div class="visual py-5 position-relative">
        <div class="visual-cont">
            <div class="container ">
                <div class="row">
                    <div class="col-md-6 order-2 order-md-1 py-5">
                        <h2 class="py-5 wow animated fadeInLeft">
                            창의적이고 지속가능한<br>사업모델을 만듭니다
                        </h2>
                        <p class="wow animated fadeInLeft" data-wow-delay="0.2s">
                            행복나눔재단
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>






<!-- content s -->
<div class="container">