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
<div id="tnb">
    	<div class="inner">
            <?php if(G5_COMMUNITY_USE) { ?>
    		<ul id="hd_define">
    			<li class="active"><a href="<?php echo G5_URL ?>/">즐겨찾기 추가</a></li>
    		</ul>
            <?php } ?>
			<ul id="hd_qnb">
	            <li><a href="<?php echo G5_BBS_URL ?>/faq.php">레벨테스트</a></li>
	            <li><a href="<?php echo G5_BBS_URL ?>/qalist.php">무료체험</a></li>
	            <li><a href="<?php echo G5_BBS_URL ?>/new.php">마이레몬</a></li>
	            <li><a href="<?php echo G5_BBS_URL ?>/current_connect.php" class="visit">고객센터</a></li>
	        </ul>
		</div>
    </div>
    <nav class="navbar navbar-expand-sm navbar-light bg-white">
      <div class="container">

        <a class="navbar-brand" href="<? echo G5_URL?>">
            <img src="<? echo G5_THEME_IMG_URL ?>/logo.PNG" alt="" style="width:180px">
        </a>

        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation">
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
                    
                ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="<?php echo $row['me_link']; ?>" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" target="_<?php echo $row['me_target']; ?>">
                            <?php echo $row['me_name'] ?>
                        </a>
                        <!-- 서브 -->
                        <!-- <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul> -->

                        <?php
                        $k = 0;
                        foreach( (array) $row['sub'] as $row2 ){

                            if( empty($row2) ) continue; 

                            if($k == 0)
                                echo '<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">'.PHP_EOL;
                        ?>

                            <li >
                                <a href="<?php echo $row2['me_link']; ?>" target="_<?php echo $row2['me_target']; ?>"  class="dropdown-item">
                                    <?php echo $row2['me_name'] ?>
                                </a>
                            </li>

                        <?php
                        $k++;
                        }   //end foreach $row2

                        if($k > 0)
                            echo '</ul>'.PHP_EOL;
                        ?>
                        <!-- 서브 -->
                    </li>
                <?php
                $i++;
                }   //end foreach $row

               ?>
                

            </ul>
            <a href="#" class="navbar-brand ms-auto d-flex justify-content-center align-items-center login">
                 <img src="<? echo G5_THEME_IMG_URL ?>/menu_nonMember.svg" alt="" class="max">
                 <p class="px-3"> 로그인하기</p>
                 <span class="arrow"></span>
            </a>
            


        </div>
  </div>
</nav>






<!-- } 상단 끝 -->


<hr>

<!-- 콘텐츠 시작 { -->

<? if(defined('_INDEX_')) { ?> 
    <div class="container_wr">
<? }else{?>
    <div class="container">
<?}?>
