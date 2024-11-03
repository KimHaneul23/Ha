<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

//if (G5_IS_MOBILE) {
//    include_once(G5_THEME_MOBILE_PATH.'/head.php');
//    return;
//}


include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
?>

<?php
    if(defined('_INDEX_')) { // index에서만 실행
        include G5_BBS_PATH.'/newwin.inc.php'; // 팝업레이어
    }
?>

<div class="wrap" id="all_wrap">
    <!-- header -->
    <div id="skip" class="skip-navigation ir_link">
        <a href="#gnb">메뉴 바로가기</a>
        <a href="#content">본문 바로가기</a>
    </div>
    <!-- header -->
    <header class="main-header color_change" id="header">
        <div class="header_top_banner">
            <div class="swiper-container header_top_slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide header_top_slide">
                        <a href="https://kuwolskin.com//bbs/board.php?bo_table=notice_event&wr_id=9#href_id" target="_blank">
                            <div class="header_top_text header_top_text01">
                                <p class="fz_15 ls_2 lh_1 ta_c c-w normal">
                                    오라클피부과 구월점 & 송도점 통합 홈페이지 OPEN!<span class="fz_14 pc_cont_480">&emsp;자세히 보기</span>
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide header_top_slide">
                        <a href="<?php echo G5_THEME_URL?>/landing/classy.php" target="_blank">
                            <div class="header_top_text header_top_text02">
                                <p class="fz_15 ls_2 lh_1 ta_c c-w normal">
                                    인천오라클피부과 VIP ㅣ CLASSY 멤버쉽<span class="fz_14 pc_cont_480">&emsp;자세히 보기</span>
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide header_top_slide">
                        <a href="https://kuwolskin.com//bbs/board.php?bo_table=notice_event&wr_id=8#href_id" target="_blank">
                            <div class="header_top_text header_top_text03">
                                <p class="fz_15 ls_2 lh_1 ta_c c-w normal">
                                    구월점 진료일정 안내<span class="fz_14 pc_cont_480">&emsp;자세히 보기</span>
                                </p>
                            </div>
                        </a>
                    </div>
                    <!--
                    <div class="swiper-slide header_top_slide">
                        <a href="<?php echo G5_THEME_URL?>/sub/sub1_3_guwol.php#sub1_3_guwol_cont02" target="_blank">
                            <div class="header_top_text header_top_text03">
                                <p class="fz_15 ls_2 lh_1 ta_c c-w normal">
                                    구월점 평일 진료 안내<span class="fz_14 pc_cont_480">&emsp;자세히 보기</span>
                                </p>
                            </div>
                        </a>
                    </div>
                    -->
                </div>
            </div>
        </div>
        
        <!-- Javascript를 이용해서 다음 페이지에 파라미터 넘기기 위한 방법 -->
        <script>
            function sub_page01_7(sub_tab) {
                window.location.href = "<?php echo G5_THEME_URL?>/sub/sub1_7.php?sub_tab=" + sub_tab;
            }
            function sub_page2_1(sub_tab) {
                window.location.href = "<?php echo G5_THEME_URL?>/sub/sub2_1.php?sub_tab=" + sub_tab;
            }
            function sub_page2_2(sub_tab) {
                window.location.href = "<?php echo G5_THEME_URL?>/sub/sub2_2.php?sub_tab=" + sub_tab;
            }
            function sub_page2_3(sub_tab) {
                window.location.href = "<?php echo G5_THEME_URL?>/sub/sub2_3.php?sub_tab=" + sub_tab;
            }
            function sub_page2_4(sub_tab) {
                window.location.href = "<?php echo G5_THEME_URL?>/sub/sub2_4.php?sub_tab=" + sub_tab;
            }
            function sub_page2_5(sub_tab) {
                window.location.href = "<?php echo G5_THEME_URL?>/sub/sub2_5.php?sub_tab=" + sub_tab;
            }
            function sub_page2_6(sub_tab) {
                window.location.href = "<?php echo G5_THEME_URL?>/sub/sub2_6.php?sub_tab=" + sub_tab;
            }
            function sub_page2_7(sub_tab) {
                window.location.href = "<?php echo G5_THEME_URL?>/sub/sub2_7.php?sub_tab=" + sub_tab;
            }
            function sub_page2_8(sub_tab) {
                window.location.href = "<?php echo G5_THEME_URL?>/sub/sub2_8.php?sub_tab=" + sub_tab;
            }
            function sub_page2_9(sub_tab) {
                window.location.href = "<?php echo G5_THEME_URL?>/sub/sub2_9.php?sub_tab=" + sub_tab;
            }
            
        </script>
        <!-- //Javascript를 이용해서 다음 페이지에 파라미터 넘기기 위한 방법 -->
        <? if(defined('_INDEX_')) { ?>
        <div class="ht-inner">
            <div class="ht-inner__left">
                <div class="logo pc_cont">
                    <a href="<?php echo G5_URL?>">
                        <img class="color_change_logo" src="<?php echo G5_THEME_URL?>/img/h_logo_b.png" alt="인천오라클피부과">
                        <img class="color_change_logo_w" src="<?php echo G5_THEME_URL?>/img/h_logo_w.png" alt="인천오라클피부과">
                    </a>
                </div>
                
                <div class="m_cont">
                    <div class="m_call_btn">
                        <a href="tel:032-434-5311"></a>
                    </div>
                </div>
                
                <div class="language crsr-shrink open-on-hover">
                    <span class="current-lang select-lang-btn open-on-hover-btn fz_14" id="langNow"><i class="glob_icon"></i></span>
                    <ul class="select-lang lang-select-list open-on-hover-list">
                        <li class="active"><a href="<?php echo G5_URL?>">KR</a></li>
                        <li><a href="https://kuwolskin-en.com/" target="_blank">EN</a></li>
                        <li><a href="https://kuwolskin-cn.com/" target="_blank">CH</a></li>
                        <li><a href="https://kuwolskin-ru.com/" target="_blank">RU</a></li>
                    </ul>
                </div>
                
                <div class="h_search pc_cont" id="best_ranking_btn">
                    <a href="javascript:void(0);">
                        <div class="h_search_icon flex_row jc_center center" id="h_search_icon">
                            <img class="color_change_logo" src="<?php echo G5_THEME_URL?>/img/icon_recommend.png" alt="">
                            <img class="color_change_logo_w" src="<?php echo G5_THEME_URL?>/img/icon_recommend_w.png" alt="">
                        </div>
                        <div class="best_ranking_close" id="best_ranking_close">
                            <div class="best_ranking_close_btn" id="best_ranking_close_btn">
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </a>
                </div>
                
                <!-- BEST Ranking -->
                <div class="best_ranking_dim pc_cont" id="best_ranking_dim"></div>
                <div class="best_ranking pc_cont" id="best_ranking">
                    <div class="best_ranking_wrap">
                        <div class="best_ranking_box">
                            <div class="best_ranking_title m_20">
                                <p class="fz_22 normal ta_c">
                                    인천 오라클 주간 BEST
                                </p>
                            </div>
                            <div class="best_ranking_tab m_40">
                                <ul class="best_ranking_tab_ul flex_row jc_center center">
                                    <?php 
                                        include(G5_PATH.'/theme/oracle/include/best_ranking_tab.php');
                                    ?>
                                </ul>
                            </div>
                            <div class="best_ranking_content_wrap">
                                <?php 
                                    include(G5_PATH.'/theme/oracle/include/best_ranking_list.php');
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- //BEST Ranking -->
                
                <div class="signature crsr-shrink open-on-hover pc_cont">
                    <div class="current-signature select-signature-btn open-on-hover-btn flex_row jc_center center" id="langNow">
                        <p class="color_change_logo sortsmillgoudy fz_15 normal lh_1 ls_p8">SIGNATURE</p>
                        <p class="color_change_logo_w sortsmillgoudy fz_15 normal lh_1 ls_p8">SIGNATURE</p>
                        <span><img src="<?php echo G5_THEME_URL?>/img/signature_icon.svg" alt="시그니처 로고"></span>
                    </div>
                    <ul class="select-signature signature-select-list open-on-hover-list">
                        <li><a href="#" onclick="sub_page2_3(8)" target="_blank">디자인리프팅</a></li>
                        <li><a href="#" onclick="sub_page2_3(3)" target="_blank">수세럼주사</a></li>
                        <li><a href="#" onclick="sub_page2_3(4)" target="_blank">써마지 FLX</a></li>
                        <li><a href="<?php echo G5_THEME_URL?>/sub/sub2_1.php" target="_blank">여드름</a></li>
                        <li><a href="<?php echo G5_THEME_URL?>/sub/sub6_1.php" target="_blank">지방흡입</a></li>
                        <li><a href="<?php echo G5_THEME_URL?>/sub/sub2_7.php" target="_blank">문신제거</a></li>
                    </ul>
                </div>
                
                <div class="gnb-logo pc_cont">
                    <a href="<?php echo G5_URL?>">
                        <img class="pc_cont_640" src="<?php echo G5_THEME_URL?>/img/h_logo_b.png" alt="인천오라클피부과">
                        <img class="m_cont_640" src="<?php echo G5_THEME_URL?>/img/m_h_logo_b.png" alt="인천오라클피부과">
                    </a>
                </div>
            </div>
            <div class="ht-inner__center">
                <div class="gnb-logo m_cont">
                    <a href="<?php echo G5_URL?>">
                        <img class="pc_cont_640" src="<?php echo G5_THEME_URL?>/img/h_logo_b.png" alt="인천오라클피부과">
                        <img class="m_cont_640" src="<?php echo G5_THEME_URL?>/img/m_h_logo_b.png" alt="인천오라클피부과">
                    </a>
                </div>
                
                <div class="logo m_cont">
                    <a href="<?php echo G5_URL?>">
                        <img class="color_change_logo" src="<?php echo G5_THEME_URL?>/img/m_h_logo_b.png" alt="인천오라클피부과">
                        <img class="color_change_logo_w" src="<?php echo G5_THEME_URL?>/img/m_h_logo_w.png" alt="인천오라클피부과">
                    </a>
                </div>
                
                <div class="hamberger hamberger_pc">
                    <div class="burger burger-arrow burger-down"><div class="burger-lines"></div></div>
                </div>
            </div>
            <div class="ht-inner__right">
                <div class="hamberger hamberger_m">
                    <div class="burger burger-arrow burger-down"><div class="burger-lines"></div></div>
                </div>
                
                <!-- login-menu -->
                <div class="login_wrap pc_cont">
                    <div class="login_menu flex_row jc_fe center">
                        <?php if($is_admin) { ?><a href="<?php echo G5_URL?>/adm" class="login_menu_item fz_14 light">관리자</a><?php } ?>
                        <!-- <a class="dropdown-item" href="<?php echo G5_URL?>/bbs/new.php">새글</a> -->
                        <!-- <a class="dropdown-item" href="<?php echo G5_URL?>/bbs/qalist.php">1:1문의</a> -->
                        <?php if($is_member) { ?>
                        <a class="dropdown-item login_menu_item fz_14 light" href="<?php echo G5_BBS_URL ?>/member_confirm.php?url=<?php echo G5_BBS_URL ?>/register_form.php">정보수정</a> 
                        <a href="<?php echo G5_URL?>/bbs/logout.php" class="login_menu_item fz_14 light">로그아웃</a>
                        <?php }else{ ?>
                        <a href="<?php echo G5_URL?>/bbs/login.php" class="login_menu_item fz_14 light">로그인</a>
                        <a href="<?php echo G5_URL?>/bbs/register.php" class="login_menu_item fz_14 light">회원가입</a>
                        <?php } ?>
                    </div>
                </div>
                
                <div class="select_network pc_cont">
                    <div class="select_network_btn flex_row jc_center center">
                        <p class="select_network_text01 fz_14 normal">
                            <a href="<?php echo G5_THEME_URL?>/sub/sub1_3_guwol.php" target="_blank">
                                구월점
                            </a>
                        </p>
                        <p class="select_network_text02 fz_14 normal">
                            <a href="<?php echo G5_THEME_URL?>/sub/sub1_3_songdo.php" target="_blank">
                                송도점
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <? } else { ?>
        <div class="ht-inner sub_header">
            <div class="ht-inner__left">
                <div class="logo pc_cont">
                    <a href="<?php echo G5_URL?>">
                        <img class="color_change_logo" src="<?php echo G5_THEME_URL?>/img/h_logo_b.png" alt="인천오라클피부과">
                        <img class="color_change_logo_w" src="<?php echo G5_THEME_URL?>/img/h_logo_w.png" alt="인천오라클피부과">
                    </a>
                </div>
                
                <div class="m_cont">
                    <div class="m_call_btn">
                        <a href="tel:032-434-5311"></a>
                    </div>
                </div>
                
                <div class="language crsr-shrink open-on-hover">
                    <span class="current-lang select-lang-btn open-on-hover-btn fz_14" id="langNow"><i class="glob_icon"></i></span>
                    <ul class="select-lang lang-select-list open-on-hover-list">
                        <li class="active"><a href="<?php echo G5_URL?>">KR</a></li>
                        <li><a href="https://kuwolskin-en.com/" target="_blank">EN</a></li>
                        <li><a href="https://kuwolskin-cn.com/" target="_blank">CH</a></li>
                        <li><a href="https://kuwolskin-ru.com/" target="_blank">RU</a></li>
                    </ul>
                </div>
                
                <div class="h_search pc_cont" id="best_ranking_btn">
                    <a href="javascript:void(0);">
                        <div class="h_search_icon flex_row jc_center center" id="h_search_icon">
                            <img class="color_change_logo" src="<?php echo G5_THEME_URL?>/img/icon_recommend.png" alt="">
                            <img class="color_change_logo_w" src="<?php echo G5_THEME_URL?>/img/icon_recommend_w.png" alt="">
                        </div>
                        <div class="best_ranking_close" id="best_ranking_close">
                            <div class="best_ranking_close_btn" id="best_ranking_close_btn">
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </a>
                </div>
                
                <!-- BEST Ranking -->
                <div class="best_ranking_dim pc_cont" id="best_ranking_dim"></div>
                <div class="best_ranking pc_cont" id="best_ranking">
                    <div class="best_ranking_wrap">
                        <div class="best_ranking_box">
                            <div class="best_ranking_title m_20">
                                <p class="fz_22 normal ta_c">
                                    인천 오라클 주간 BEST
                                </p>
                            </div>
                            <div class="best_ranking_tab m_40">
                                <ul class="best_ranking_tab_ul flex_row jc_center center">
                                    <?php 
                                        include(G5_PATH.'/theme/oracle/include/best_ranking_tab.php');
                                    ?>
                                </ul>
                            </div>
                            <div class="best_ranking_content_wrap">
                                <?php 
                                    include(G5_PATH.'/theme/oracle/include/best_ranking_list.php');
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- //BEST Ranking -->
                
                <div class="signature crsr-shrink open-on-hover pc_cont">
                    <div class="current-signature select-signature-btn open-on-hover-btn flex_row jc_center center" id="langNow">
                        <p class="color_change_logo sortsmillgoudy fz_15 normal lh_1 ls_p8">SIGNATURE</p>
                        <p class="color_change_logo_w sortsmillgoudy fz_15 normal lh_1 ls_p8">SIGNATURE</p>
                        <span><img src="<?php echo G5_THEME_URL?>/img/signature_icon.svg" alt="시그니처 로고"></span>
                    </div>
                    <ul class="select-signature signature-select-list open-on-hover-list">
                        <li><a href="#" onclick="sub_page2_3(8)" target="_blank">디자인리프팅</a></li>
                        <li><a href="#" onclick="sub_page2_3(3)" target="_blank">수세럼주사</a></li>
                        <li><a href="#" onclick="sub_page2_3(4)" target="_blank">써마지 FLX</a></li>
                        <li><a href="<?php echo G5_THEME_URL?>/sub/sub2_1.php" target="_blank">여드름</a></li>
                        <li><a href="<?php echo G5_THEME_URL?>/sub/sub6_1.php" target="_blank">지방흡입</a></li>
                        <li><a href="<?php echo G5_THEME_URL?>/sub/sub2_7.php" target="_blank">문신제거</a></li>
                    </ul>
                </div>
                
                <div class="gnb-logo pc_cont">
                    <a href="<?php echo G5_URL?>">
                        <img class="pc_cont_640" src="<?php echo G5_THEME_URL?>/img/h_logo_b.png" alt="인천오라클피부과">
                        <img class="m_cont_640" src="<?php echo G5_THEME_URL?>/img/m_h_logo_b.png" alt="인천오라클피부과">
                    </a>
                </div>
            </div>
            <div class="ht-inner__center">
                <div class="gnb-logo m_cont">
                    <a href="<?php echo G5_URL?>">
                        <img class="pc_cont_640" src="<?php echo G5_THEME_URL?>/img/h_logo_b.png" alt="인천오라클피부과">
                        <img class="m_cont_640" src="<?php echo G5_THEME_URL?>/img/m_h_logo_b.png" alt="인천오라클피부과">
                    </a>
                </div>
                
                <div class="logo m_cont">
                    <a href="<?php echo G5_URL?>">
                        <img class="color_change_logo" src="<?php echo G5_THEME_URL?>/img/m_h_logo_b.png" alt="인천오라클피부과">
                        <img class="color_change_logo_w" src="<?php echo G5_THEME_URL?>/img/m_h_logo_w.png" alt="인천오라클피부과">
                    </a>
                </div>
                
                <div class="hamberger hamberger_pc">
                    <div class="burger burger-arrow burger-down"><div class="burger-lines"></div></div>
                </div>
            </div>
            <div class="ht-inner__right">
                <div class="hamberger hamberger_m">
                    <div class="burger burger-arrow burger-down"><div class="burger-lines"></div></div>
                </div>
                
                <!-- login-menu -->
                <div class="login_wrap pc_cont">
                    <div class="login_menu flex_row jc_fe center">
                        <?php if($is_admin) { ?><a href="<?php echo G5_URL?>/adm" class="login_menu_item fz_14 light">관리자</a><?php } ?>
                        <!-- <a class="dropdown-item" href="<?php echo G5_URL?>/bbs/new.php">새글</a> -->
                        <!-- <a class="dropdown-item" href="<?php echo G5_URL?>/bbs/qalist.php">1:1문의</a> -->
                        <?php if($is_member) { ?>
                        <a class="dropdown-item login_menu_item fz_14 light" href="<?php echo G5_BBS_URL ?>/member_confirm.php?url=<?php echo G5_BBS_URL ?>/register_form.php">정보수정</a> 
                        <a href="<?php echo G5_URL?>/bbs/logout.php" class="login_menu_item fz_14 light">로그아웃</a>
                        <?php }else{ ?>
                        <a href="<?php echo G5_URL?>/bbs/login.php" class="login_menu_item fz_14 light">로그인</a>
                        <a href="<?php echo G5_URL?>/bbs/register.php" class="login_menu_item fz_14 light">회원가입</a>
                        <?php } ?>
                    </div>
                </div>
                
                <div class="select_network pc_cont">
                    <div class="select_network_btn flex_row jc_center center">
                        <p class="select_network_text01 fz_14 normal">
                            <a href="<?php echo G5_THEME_URL?>/sub/sub1_3_guwol.php" target="_blank">
                                구월점
                            </a>
                        </p>
                        <p class="select_network_text02 fz_14 normal">
                            <a href="<?php echo G5_THEME_URL?>/sub/sub1_3_songdo.php" target="_blank">
                                송도점
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <? } ?>
    </header>
    
    
    <div class="gnb-outer" id="gnb">
        <div class="gnb-inner">
            <div class="gnb-inner__all">
                <div class="gnb-inner__all_bg">
                    <div class="gnb-inner__left">
                        <ul class="gnb-menu-list">
                            <li class="gnb-menu-depth1">
                                <div class="gnb-menu-img-text">
                                    <a href="<?php echo G5_THEME_URL?>/sub/sub1_1.php">
                                        <p class="fz_25 medium">오라클 소개</p>
                                    </a>
                                </div>
                                <ul class="gnb-menu-depth2 gnb-menu-depth2-1">
                                    <li><a href="<?php echo G5_THEME_URL?>/sub/sub1_1.php"><span>오라클 특별함</span></a></li>
                                    <li><a href="<?php echo G5_THEME_URL?>/sub/sub1_2.php"><span>피부과전문의</span></a></li>
                                    <li><a href="<?php echo G5_THEME_URL?>/sub/sub1_3.php"><span>지점소개</span></a></li>
                                    <li><a href="<?php echo G5_THEME_URL?>/sub/sub1_4.php"><span>장비소개</span></a></li>
                                    <li><a href="<?php echo G5_THEME_URL?>/sub/sub1_5.php"><span>공지·이벤트</span></a></li>
                                    <li class="youtube_icon"><a href="<?php echo G5_THEME_URL?>/sub/sub1_6.php"><span>오라뀨티비</span><img src="<?php echo G5_THEME_URL?>/img/youtube_icon.svg" alt="유튜브 아이콘"></a></li>
                                    <li class="clinic_center"><a href="<?php echo G5_THEME_URL?>/sub/sub1_7.php"><span>피부종합진료센터</span><img src="<?php echo G5_THEME_URL?>/img/gnb_link_btn02.svg" alt="바로가기 버튼"></a></li>
                                </ul>
                            </li>
                            <li class="gnb-menu-depth1">
                                <div class="gnb-menu-img-text">
                                    <a href="#" onclick="sub_page01_7(1)">
                                        <p class="fz_25 medium"><span>미용진료</span><img src="<?php echo G5_THEME_URL?>/img/gnb_link_btn02.svg" alt="바로가기 버튼"></p>
                                    </a>
                                </div>
                                <ul class="gnb-menu-depth2 gnb-menu-depth2-2">
                                    <li><a href="<?php echo G5_THEME_URL?>/sub/sub2_1.php"><span>여드름</span></a></li>
                                    <li><a href="<?php echo G5_THEME_URL?>/sub/sub2_2.php"><span>미백·홍조</span></a></li>
                                    <li><a href="<?php echo G5_THEME_URL?>/sub/sub2_3.php"><span>안티에이징</span></a></li>
                                    <li><a href="<?php echo G5_THEME_URL?>/sub/sub2_4.php"><span>미용성형</span></a></li>
                                    <li><a href="<?php echo G5_THEME_URL?>/sub/sub2_5.php"><span>제모·탈모</span></a></li>
                                    <li><a href="<?php echo G5_THEME_URL?>/sub/sub2_6.php"><span>흉터</span></a></li>
                                    <li><a href="<?php echo G5_THEME_URL?>/sub/sub2_7.php"><span>문신제거</span></a></li>
                                    <li><a href="<?php echo G5_THEME_URL?>/sub/sub2_8.php"><span>기타치료</span></a></li>
                                    <li><a href="<?php echo G5_THEME_URL?>/sub/sub2_9.php"><span>여성진료</span></a></li>
                                </ul>
                            </li>
                            <li class="gnb-menu-depth1">
                                <div class="gnb-menu-img-text">
                                    <a href="#" onclick="sub_page01_7(2)"> 
                                        <p class="fz_25 medium"><span>피부질환</span><img src="<?php echo G5_THEME_URL?>/img/gnb_link_btn02.svg" alt="바로가기 버튼"></p>
                                    </a>
                                </div>
                                <ul class="gnb-menu-depth2 gnb-menu-depth2-3">
                                    <li><a href="<?php echo G5_THEME_URL?>/sub/sub3_1.php"><span>백반증</span></a></li>
                                    <li><a href="<?php echo G5_THEME_URL?>/sub/sub3_2.php"><span>건선</span></a></li>
                                    <li><a href="<?php echo G5_THEME_URL?>/sub/sub3_3.php"><span>아토피피부염</span></a></li>
                                    <li><a href="<?php echo G5_THEME_URL?>/sub/sub3_4.php"><span>광선치료클리닉</span></a></li>
                                    <li><a href="<?php echo G5_THEME_URL?>/sub/sub3_5.php"><span>사마귀·티눈</span></a></li>
                                    <li><a href="<?php echo G5_THEME_URL?>/sub/sub3_6.php"><span>발톱무좀/손발톱질환</span></a></li>
                                    <li><a href="<?php echo G5_THEME_URL?>/sub/sub3_7.php"><span>원형탈모</span></a></li>
                                    <li><a href="<?php echo G5_THEME_URL?>/sub/sub3_8.php"><span>알레르기·두드러기</span></a></li>
                                </ul>
                            </li>
                            <li class="gnb-menu-depth1">
                                <div class="gnb-menu-img-text">
                                    <a href="<?php echo G5_THEME_URL?>/sub/sub4_1.php">
                                        <p class="fz_25 medium"><span>피부기능의학</span><img src="<?php echo G5_THEME_URL?>/img/gnb_link_btn02.svg" alt="바로가기 버튼"></p>
                                    </a>
                                </div>
                                <ul class="gnb-menu-depth2 gnb-menu-depth2-4">
                                    <li><a href="<?php echo G5_THEME_URL?>/sub/sub4_1.php"><span>피부기능의학적검사</span></a></li>
                                    <li><a href="<?php echo G5_THEME_URL?>/sub/sub4_2.php"><span>디톡스/항노화 치료</span></a></li>
                                </ul>
                            </li>
                            <li class="gnb-menu-depth1">
                                <div class="gnb-menu-img-text">
                                    <a href="#" onclick="sub_page01_7(4)">
                                        <p class="fz_25 medium"><span>피부외과</span><img src="<?php echo G5_THEME_URL?>/img/gnb_link_btn02.svg" alt="바로가기 버튼"></p>
                                    </a>
                                </div>
                                <ul class="gnb-menu-depth2 gnb-menu-depth2-5">
                                    <li><a href="<?php echo G5_THEME_URL?>/sub/sub5_1.php"><span>피부양성종양</span></a></li>
                                    <li><a href="<?php echo G5_THEME_URL?>/sub/sub5_2.php"><span>튀어나온점·큰점·재발점</span></a></li>
                                    <li><a href="<?php echo G5_THEME_URL?>/sub/sub5_3.php"><span>켈로이드수술·흉터교정수술</span></a></li>
                                    <li><a href="<?php echo G5_THEME_URL?>/sub/sub5_4.php"><span>상처치료·화상치료</span></a></li>
                                    <li><a href="<?php echo G5_THEME_URL?>/sub/sub5_5.php"><span>내성발톱·집게발톱 교정</span></a></li>
                                </ul>
                            </li>
                            <li class="gnb-menu-depth1">
                                <div class="gnb-menu-img-text">
                                    <a href="#" onclick="sub_page01_7(5)">
                                        <p class="fz_25 medium"><span>체형교정</span><img src="<?php echo G5_THEME_URL?>/img/gnb_link_btn02.svg" alt="바로가기 버튼"></p>
                                    </a>
                                </div>
                                <ul class="gnb-menu-depth2 gnb-menu-depth2-6">
                                    <li><a href="<?php echo G5_THEME_URL?>/sub/sub6_1.php"><span>지방흡입</span></a></li>
                                    <li><a href="<?php echo G5_THEME_URL?>/sub/sub6_2.php"><span>한컵주사</span></a></li>
                                    <li><a href="<?php echo G5_THEME_URL?>/sub/sub6_3.php"><span>스컬프슈어</span></a></li>
                                    <li><a href="<?php echo G5_THEME_URL?>/sub/sub6_4.php"><span>호르몬다이어트</span></a></li>
                                </ul>
                            </li>
                            <li class="gnb-menu-depth1">
                                <div class="gnb-menu-img-text">
                                    <a href="<?php echo G5_THEME_URL?>/sub/sub7_1.php">
                                        <p class="fz_25 medium">오라클맨즈</p>
                                    </a>
                                </div>
                                <ul class="gnb-menu-depth2 gnb-menu-depth2-7">
                                    <li><a href="<?php echo G5_THEME_URL?>/sub/sub7_1.php"><span>남성피부관리</span></a></li>
                                    <li><a href="<?php echo G5_THEME_URL?>/sub/sub7_2.php"><span>남성수염제모</span></a></li>
                                    <li><a href="<?php echo G5_THEME_URL?>/sub/sub7_3.php"><span>남성여유증</span></a></li>
                                    <li><a href="<?php echo G5_THEME_URL?>/sub/sub7_4.php"><span>사각턱보톡스</span></a></li>
                                    <li><a href="<?php echo G5_THEME_URL?>/sub/sub7_5.php"><span>이미지필러</span></a></li>
                                </ul>
                            </li>
                            <li class="gnb-menu-depth1">
                                <div class="gnb-menu-img-text-last">
                                    <div class="gnb-menu-img-text">
                                        <a href="<?php echo G5_BBS_URL?>/board.php?bo_table=online">
                                            <p class="c-b fz_25 medium">온라인상담</p>
                                        </a>
                                    </div>
                                    <div class="gnb-menu-img-text">
                                        <a href="<?php echo G5_THEME_URL?>/sub/sub8_2.php">
                                            <p class="c-b fz_25 medium">전후사진</p>
                                        </a>
                                    </div>
                                    <div class="gnb-menu-img-text">
                                        <a href="<?php echo G5_THEME_URL?>/sub/sub8_3.php">
                                            <p class="c-b fz_25 medium">손글씨후기</p>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <!--
                            <li class="gnb-menu-depth1">
                                <div class="gnb-menu-img-text">
                                    <a href="javascript:void(0);">
                                        <p class="fz_25 medium">커뮤니티</p>
                                    </a>
                                </div>
                                <ul class="gnb-menu-depth2 gnb-menu-depth2-8">
                                    <li><a href="<?php echo G5_BBS_URL?>/board.php?bo_table=online"><span>온라인상담</span></a></li>
                                    <li><a href="<?php echo G5_THEME_URL?>/sub/sub8_2.php"><span>전후사진</span></a></li>
                                    <li><a href="<?php echo G5_THEME_URL?>/sub/sub8_3.php"><span>손글씨후기</span></a></li>
                                </ul>
                            </li>
                            -->
                        </ul>
                    </div>

                    <div class="gnb-inner__right">
                        <div class="gnb_info_wrap flex_row fw jc_fs center">
                            <div class="gnb_info_guwol flex_row fw jc_fs al_fs">
                                <div class="gnb_info_title flex_row sb center">
                                    <a href="<?php echo G5_THEME_URL?>/sub/sub1_3_guwol.php" target="_blank">
                                        <p class="fz_20 normal m_10">구월점</p>
                                    </a>
                                    <a href="https://pf.kakao.com/_VBKhl" target="_blank">
                                        <p class="gnb_info_icon fz_15 normal m_10"><img src="<?php echo G5_THEME_URL?>/img/gnb_info_title_icon.png" alt=""><span>상담신청</span></p>
                                    </a>
                                </div>
                                <div class="gnb_info_img m_10">
                                    <a href="<?php echo G5_THEME_URL?>/sub/sub1_3_guwol.php" target="_blank">
                                        <img src="<?php echo G5_THEME_URL?>/img/gnb_info_img_guwol.jpg" alt="">
                                    </a>
                                </div>
                                <div class="gnb_info_call_address flex_row fw jc_fs center">
                                    <div class="gnb_info_call">
                                        <a href="tel:032-434-5311" target="_blank">
                                            <p class="gnb_info_icon fz_22 lh_1 sortsmillgoudy normal m_10"><img src="<?php echo G5_THEME_URL?>/img/gnb_info_call_icon.png" alt=""><span>032.434.5311</span></p>
                                        </a>
                                    </div>
                                    <div class="gnb_info_address">
                                        <a href="https://naver.me/xPIps3G9" target="_blank">
                                            <p class="gnb_info_icon fz_15 lh_1 normal m_10"><img src="<?php echo G5_THEME_URL?>/img/gnb_info_address_icon.png" alt=""><span>인천광역시 남동구 예술로 126 링크126 6층</span></p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="gnb_info_songdo flex_row fw jc_fs al_fs">
                                <div class="gnb_info_title flex_row sb center">
                                    <a href="<?php echo G5_THEME_URL?>/sub/sub1_3_songdo.php" target="_blank">
                                        <p class="fz_20 normal m_10">송도점</p>
                                    </a>
                                    <a href="https://pf.kakao.com/_xbTwxnxj" target="_blank">
                                        <p class="gnb_info_icon fz_15 normal m_10"><img src="<?php echo G5_THEME_URL?>/img/gnb_info_title_icon.png" alt=""><span>상담신청</span></p>
                                    </a>
                                </div>
                                <div class="gnb_info_img m_10">
                                    <a href="<?php echo G5_THEME_URL?>/sub/sub1_3_songdo.php" target="_blank">
                                        <img src="<?php echo G5_THEME_URL?>/img/gnb_info_img_songdo.jpg" alt="">
                                    </a>
                                </div>
                                <div class="gnb_info_call_address flex_row fw jc_fs center">
                                    <div class="gnb_info_call">
                                        <a href="tel:032-434-5311" target="_blank">
                                            <p class="gnb_info_icon fz_22 sortsmillgoudy lh_1 normal m_10"><img src="<?php echo G5_THEME_URL?>/img/gnb_info_call_icon.png" alt=""><span>032.434.5311</span></p>
                                        </a>
                                    </div>
                                    <div class="gnb_info_address">
                                        <a href="https://map.naver.com/v5/entry/place/1994869691?c=14097654.3245756,4492531.3085824,13,0,0,0,dh" target="_blank">
                                            <p class="gnb_info_icon fz_15 lh_1 normal m_10"><img src="<?php echo G5_THEME_URL?>/img/gnb_info_address_icon.png" alt=""><span>인천 연수구 하모니로178번길 6 7층</span></p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 모바일 메뉴 -->
                    <ul class="gnb-menu-list-m">
                        <li class="m-gnb-menu-depth1">
                            <a href="javascript:void(0);" class="medium">
                                오라클 소개
                            </a>
                            <ul class="m-gnb-menu-depth2">
                                <li><a href="<?php echo G5_THEME_URL?>/sub/sub1_1.php"><span>오라클 특별함</span></a></li>
                                <li><a href="<?php echo G5_THEME_URL?>/sub/sub1_2.php"><span>피부과전문의</span></a></li>
                                <li><a href="<?php echo G5_THEME_URL?>/sub/sub1_3.php"><span>지점소개</span></a></li>
                                <li><a href="<?php echo G5_THEME_URL?>/sub/sub1_4.php"><span>장비소개</span></a></li>
                                <li><a href="<?php echo G5_THEME_URL?>/sub/sub1_5.php"><span>공지·이벤트</span></a></li>
                                <li class="youtube_icon"><a href="<?php echo G5_THEME_URL?>/sub/sub1_6.php"><span>오라뀨티비</span><img src="<?php echo G5_THEME_URL?>/img/youtube_icon_m.svg" alt="유튜브 아이콘"></a></li>
                                <li class="clinic_center"><a href="<?php echo G5_THEME_URL?>/sub/sub1_7.php"><span>피부종합진료센터</span><img src="<?php echo G5_THEME_URL?>/img/gnb_link_btn02.svg" alt="바로가기 버튼"></a></li>
                            </ul>
                        </li>
                        <li class="m-gnb-menu-depth1">
                            <a href="javascript:void(0);" class="medium">
                                미용진료<!--<img src="<?php echo G5_THEME_URL?>/img/gnb_link_btn02.svg" alt="바로가기 버튼">-->
                            </a>
                            <ul class="m-gnb-menu-depth2">
                                <li><a href="<?php echo G5_THEME_URL?>/sub/sub2_1.php"><span>여드름</span></a></li>
                                <li><a href="<?php echo G5_THEME_URL?>/sub/sub2_2.php"><span>미백·홍조</span></a></li>
                                <li><a href="<?php echo G5_THEME_URL?>/sub/sub2_3.php"><span>안티에이징</span></a></li>
                                <li><a href="<?php echo G5_THEME_URL?>/sub/sub2_4.php"><span>미용성형</span></a></li>
                                <li><a href="<?php echo G5_THEME_URL?>/sub/sub2_5.php"><span>제모·탈모</span></a></li>
                                <li><a href="<?php echo G5_THEME_URL?>/sub/sub2_6.php"><span>흉터</span></a></li>
                                <li><a href="<?php echo G5_THEME_URL?>/sub/sub2_7.php"><span>문신제거</span></a></li>
                                <li><a href="<?php echo G5_THEME_URL?>/sub/sub2_8.php"><span>기타치료</span></a></li>
                                <li><a href="<?php echo G5_THEME_URL?>/sub/sub2_9.php"><span>여성진료</span></a></li>
                            </ul>
                        </li>
                        <li class="m-gnb-menu-depth1">
                            <a href="javascript:void(0);" class="medium">
                                피부질환<!--<img src="<?php echo G5_THEME_URL?>/img/gnb_link_btn02.svg" alt="바로가기 버튼">-->
                            </a>
                            <ul class="m-gnb-menu-depth2">
                                <li><a href="<?php echo G5_THEME_URL?>/sub/sub3_1.php"><span>백반증</span></a></li>
                                <li><a href="<?php echo G5_THEME_URL?>/sub/sub3_2.php"><span>건선</span></a></li>
                                <li><a href="<?php echo G5_THEME_URL?>/sub/sub3_3.php"><span>아토피피부염</span></a></li>
                                <li><a href="<?php echo G5_THEME_URL?>/sub/sub3_4.php"><span>광선치료클리닉</span></a></li>
                                <li><a href="<?php echo G5_THEME_URL?>/sub/sub3_5.php"><span>사마귀·티눈</span></a></li>
                                <li><a href="<?php echo G5_THEME_URL?>/sub/sub3_6.php"><span>발톱무좀/손발톱질환</span></a></li>
                                <li><a href="<?php echo G5_THEME_URL?>/sub/sub3_7.php"><span>원형탈모</span></a></li>
                                <li><a href="<?php echo G5_THEME_URL?>/sub/sub3_8.php"><span>알레르기·두드러기</span></a></li>
                            </ul>
                        </li>
                        <li class="m-gnb-menu-depth1">
                            <a href="javascript:void(0);" class="medium">
                                피부기능의학<!--<img src="<?php echo G5_THEME_URL?>/img/gnb_link_btn02.svg" alt="바로가기 버튼">-->
                            </a>
                            <ul class="m-gnb-menu-depth2">
                                <li><a href="<?php echo G5_THEME_URL?>/sub/sub4_1.php"><span>피부기능의학적검사</span></a></li>
                                <li><a href="<?php echo G5_THEME_URL?>/sub/sub4_2.php"><span>디톡스/항노화 치료</span></a></li>
                            </ul>
                        </li>
                        <li class="m-gnb-menu-depth1">
                            <a href="javascript:void(0);" class="medium">
                                피부외과<!--<img src="<?php echo G5_THEME_URL?>/img/gnb_link_btn02.svg" alt="바로가기 버튼">-->
                            </a>
                            <ul class="m-gnb-menu-depth2">
                                <li><a href="<?php echo G5_THEME_URL?>/sub/sub5_1.php"><span>피부양성종양</span></a></li>
                                <li><a href="<?php echo G5_THEME_URL?>/sub/sub5_2.php"><span>튀어나온점·큰점·재발점</span></a></li>
                                <li><a href="<?php echo G5_THEME_URL?>/sub/sub5_3.php"><span>켈로이드수술·흉터교정수술</span></a></li>
                                <li><a href="<?php echo G5_THEME_URL?>/sub/sub5_4.php"><span>상처치료·화상치료</span></a></li>
                                <li><a href="<?php echo G5_THEME_URL?>/sub/sub5_5.php"><span>내성발톱·집게발톱 교정</span></a></li>
                            </ul>
                        </li>
                        <li class="m-gnb-menu-depth1">
                            <a href="javascript:void(0);" class="medium">
                                체형교정<!--<img src="<?php echo G5_THEME_URL?>/img/gnb_link_btn02.svg" alt="바로가기 버튼">-->
                            </a>
                            <ul class="m-gnb-menu-depth2">
                                <li><a href="<?php echo G5_THEME_URL?>/sub/sub6_1.php"><span>지방흡입</span></a></li>
                                <li><a href="<?php echo G5_THEME_URL?>/sub/sub6_2.php"><span>한컵주사</span></a></li>
                                <li><a href="<?php echo G5_THEME_URL?>/sub/sub6_3.php"><span>스컬프슈어</span></a></li>
                                <li><a href="<?php echo G5_THEME_URL?>/sub/sub6_4.php"><span>호르몬다이어트</span></a></li>
                            </ul>
                        </li>
                        <li class="m-gnb-menu-depth1">
                            <a href="javascript:void(0);" class="medium">
                                오라클맨즈
                            </a>
                            <ul class="m-gnb-menu-depth2">
                                <li><a href="<?php echo G5_THEME_URL?>/sub/sub7_1.php"><span>남성피부관리</span></a></li>
                                <li><a href="<?php echo G5_THEME_URL?>/sub/sub7_2.php"><span>남성수염제모</span></a></li>
                                <li><a href="<?php echo G5_THEME_URL?>/sub/sub7_3.php"><span>남성여유증</span></a></li>
                                <li><a href="<?php echo G5_THEME_URL?>/sub/sub7_4.php"><span>사각턱보톡스</span></a></li>
                                <li><a href="<?php echo G5_THEME_URL?>/sub/sub7_5.php"><span>이미지필러</span></a></li>
                            </ul>
                        </li>
                        <li class="m-gnb-menu-depth1 arrow_none">
                            <a href="<?php echo G5_BBS_URL?>/board.php?bo_table=online" class="medium">
                                온라인상담
                            </a>
                        </li>
                        <li class="m-gnb-menu-depth1 arrow_none">
                            <a href="<?php echo G5_THEME_URL?>/sub/sub8_2.php" class="medium">
                                전후사진
                            </a>
                        </li>
                        <li class="m-gnb-menu-depth1 arrow_none m-gnb-menu-depth1-last">
                            <a href="<?php echo G5_THEME_URL?>/sub/sub8_3.php" class="medium">
                                손글씨후기
                            </a>
                        </li>
                        <!--
                        <li class="m-gnb-menu-depth1 m-gnb-menu-depth1-last">
                            <a href="javascript:void(0);" class="medium">
                                커뮤니티
                            </a>
                            <ul class="m-gnb-menu-depth2">
                                <li><a href="<?php echo G5_BBS_URL?>/board.php?bo_table=online"><span>온라인상담</span></a></li>
                                <li><a href="<?php echo G5_THEME_URL?>/sub/sub8_2.php"><span>전후사진</span></a></li>
                                <li><a href="<?php echo G5_THEME_URL?>/sub/sub8_3.php"><span>손글씨후기</span></a></li>
                            </ul>
                        </li>
                        -->
                    </ul>
                    <!-- login-menu -->
                    <div class="login_wrap m_cont">
                        <div class="login_menu flex_row jc_fe center">
                            <?php if($is_admin) { ?><a href="<?php echo G5_URL?>/adm" class="login_menu_item fz_18 light">관리자</a><?php } ?>
                            <!-- <a class="dropdown-item" href="<?php echo G5_URL?>/bbs/new.php">새글</a> -->
                            <!-- <a class="dropdown-item" href="<?php echo G5_URL?>/bbs/qalist.php">1:1문의</a> -->
                            <?php if($is_member) { ?>
                            <a class="dropdown-item login_menu_item fz_18 light" href="<?php echo G5_BBS_URL ?>/member_confirm.php?url=<?php echo G5_BBS_URL ?>/register_form.php">정보수정</a> 
                            <a href="<?php echo G5_URL?>/bbs/logout.php" class="login_menu_item fz_18 light">로그아웃</a>
                            <?php }else{ ?>
                            <a href="<?php echo G5_URL?>/bbs/login.php" class="login_menu_item fz_18 light">로그인</a>
                            <a href="<?php echo G5_URL?>/bbs/register.php" class="login_menu_item fz_18 light">회원가입</a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <? if(defined('_INDEX_')) { ?>
    <!-- side_nav -->
    <!--
    <div class="side_nav" id="side_nav">
        <ul class="side_nav_ul flex_row fw jc_center center">
            <li class="side_nav_li side_nav_li01" onclick="$('html, body').animate({ scrollTop: $('#startContent').offset().top-0 }, 500);"><a href="javascript:void(0);" class="fz_14 lh_1 ls_2 normal ir_text">인천 오라클 메인</a></li>
            <li class="side_nav_li side_nav_li02" onclick="$('html, body').animate({ scrollTop: $('#sect02').offset().top-90 }, 500);"><a href="javascript:void(0);" class="fz_14 lh_1 ls_2 normal">인천 오라클 특별함</a></li>
            <li class="side_nav_li side_nav_li03" onclick="$('html, body').animate({ scrollTop: $('#sect03').offset().top-120 }, 500);"><a href="javascript:void(0);" class="fz_14 lh_1 ls_2 normal">센터 바로가기</a></li>
            <li class="side_nav_li side_nav_li04" onclick="$('html, body').animate({ scrollTop: $('#sect04').offset().top-120 }, 500);"><a href="javascript:void(0);" class="fz_14 lh_1 ls_2 normal">인천 대표 피부과</a></li>
            <li class="side_nav_li side_nav_li05" onclick="$('html, body').animate({ scrollTop: $('#sect05').offset().top-120 }, 500);"><a href="javascript:void(0);" class="fz_14 lh_1 ls_2 normal">오라클TV</a></li>
            <li class="side_nav_li side_nav_li06" onclick="$('html, body').animate({ scrollTop: $('#sect06').offset().top-120 }, 500);"><a href="javascript:void(0);" class="fz_14 lh_1 ls_2 normal">인천을 넘어 세계로</a></li>
        </ul>
    </div>
    -->
    <!-- //side_nav -->
    <? } ?>


    <!-- main -->
    <div class="smooth-scroll" id="content">