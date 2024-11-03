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
    //if(defined('_INDEX_')) { // index에서만 실행
    //    include G5_BBS_PATH.'/newwin.inc.php'; // 팝업레이어
    //}
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
                        <a href="javascript:void(0);">
                            <div class="header_top_text header_top_text01">
                                <p class="fz_15 ls_2 lh_1 ta_c c-w normal">
                                    일요일 진료 안내<span class="fz_14">&emsp;자세히 보기</span>
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide header_top_slide">
                        <a href="javascript:void(0);">
                            <div class="header_top_text header_top_text02">
                                <p class="fz_15 ls_2 lh_1 ta_c c-w normal">
                                    토요일 진료 안내<span class="fz_14">&emsp;자세히 보기</span>
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide header_top_slide">
                        <a href="javascript:void(0);">
                            <div class="header_top_text header_top_text03">
                                <p class="fz_15 ls_2 lh_1 ta_c c-w normal">
                                    평일 진료 안내<span class="fz_14">&emsp;자세히 보기</span>
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <? if(defined('_INDEX_')) { ?>
        <div class="ht-inner">
            <div class="ht-inner__left">
                <div class="logo pc_cont">
                    <a href="<?php echo G5_THEME_URL?>">
                        <img class="color_change_logo" src="<?php echo G5_THEME_URL?>/img/h_logo_b.png" alt="인천오라클피부과">
                        <img class="color_change_logo_w" src="<?php echo G5_THEME_URL?>/img/h_logo_w.png" alt="인천오라클피부과">
                    </a>
                </div>
                
                <div class="language crsr-shrink open-on-hover pc_cont">
                    <span class="current-lang select-lang-btn open-on-hover-btn fz_14" id="langNow">KR</span>
                    <ul class="select-lang lang-select-list open-on-hover-list">
                        <li class="active"><a href="javascript:void(0);" target="_blank">KR</a></li>
                        <li><a href="javascript:void(0);" target="_blank">EN</a></li>
                        <li><a href="javascript:void(0);" target="_blank">CH</a></li>
                        <li><a href="javascript:void(0);" target="_blank">RU</a></li>
                    </ul>
                </div>
                
                <div class="signature crsr-shrink open-on-hover pc_cont">
                    <div class="current-signature select-signature-btn open-on-hover-btn" id="langNow">
                        <img src="<?php echo G5_THEME_URL?>/img/signature_icon.png" alt="시그니처 로고">
                    </div>
                    <ul class="select-signature signature-select-list open-on-hover-list">
                        <li><a href="javascript:void(0);" target="_blank">수세럼주사</a></li>
                        <li><a href="javascript:void(0);" target="_blank">디자인리프팅</a></li>
                        <li><a href="javascript:void(0);" target="_blank">써마지 FLX</a></li>
                        <li><a href="javascript:void(0);" target="_blank">문신제거</a></li>
                        <li><a href="javascript:void(0);" target="_blank">지방흡입</a></li>
                    </ul>
                </div>
                
                <div class="hamburger hamburger_m flex_row se center open-on-hover" id="hamburger_m">
                    <div class="hamburger_wrap flex_row jc_center center">
                        <div class="hamburger_box">
                            <span class="line"></span>
                            <span class="line"></span>
                            <span class="line"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ht-inner__center">
                <div class="logo m_cont">
                    <a href="<?php echo G5_THEME_URL?>">
                        <img class="color_change_logo" src="<?php echo G5_THEME_URL?>/img/m_h_logo_b.png" alt="인천오라클피부과">
                        <img class="color_change_logo_w" src="<?php echo G5_THEME_URL?>/img/m_h_logo_w.png" alt="인천오라클피부과">
                    </a>
                </div>
                <div class="gnb-logo">
                    <a href="<?php echo G5_THEME_URL?>">
                        <img class="pc_cont_640" src="<?php echo G5_THEME_URL?>/img/h_logo_b.png" alt="인천오라클피부과">
                        <img class="m_cont_640" src="<?php echo G5_THEME_URL?>/img/m_h_logo_b.png" alt="인천오라클피부과">
                    </a>
                </div>
                <div class="top_menu_nav pc_cont">
                    <div class="top_menu_inner flex_row jc_center center ta_c fz_17 normal">
                        <div class="top_menu lh_1"><a href="javascript:void(0);">피부 아름답게</a></div>
                        <div class="top_menu lh_1"><a href="javascript:void(0);">피부 건강하게</a></div>
                        <div class="top_menu lh_1"><a href="javascript:void(0);">피부 생기있게</a></div>
                        <div class="top_menu lh_1"><a href="javascript:void(0);">피부 깔끔하게</a></div>
                        <div class="top_menu lh_1"><a href="javascript:void(0);">체형 균형있게</a></div>
                    </div>
                </div>
            </div>
            <div class="ht-inner__right">
                <div class="h_search pc_cont" id="best_ranking_btn">
                    <a href="javascript:void(0);">
                        <div class="h_search_icon flex_row jc_center center" id="h_search_icon">
                            <img class="color_change_logo" src="<?php echo G5_THEME_URL?>/img/search_icon.png" alt="검색버튼">
                            <img class="color_change_logo_w" src="<?php echo G5_THEME_URL?>/img/search_icon_w.png" alt="검색버튼">
                        </div>
                        <div class="best_ranking_close" id="best_ranking_close">
                            <div class="best_ranking_close_btn" id="best_ranking_close_btn">
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </a>
                </div>
                
                <div class="m_cont">
                    <div class="m_call_btn">
                        <a href="tel:031-502-2080"></a>
                    </div>
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
                                    <li id="tablinks01" class="best_ranking_tab_li tablinks active">
                                        <a href="#tabcontent1">
                                            <p class="fz_16 ta_c">피부질환</p>
                                        </a>
                                    </li>
                                    <li id="tablinks02" class="best_ranking_tab_li tablinks">
                                        <a href="#tabcontent2">
                                            <p class="fz_16 ta_c">피부미용</p>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="best_ranking_content_wrap">
                                <div class="best_ranking_content tabcontent tabcontent1" id="tabcontent1">
                                    <ul class="best_ranking_content01_ul">
                                        <li class="best_ranking_list01 best_ranking_list01_1 active">
                                            <a href="javascript:void(0);">
                                                <p class="fz_18 c-w lh_1 normal">1. 인모드 리프팅<span class="ranking_new_icon"></span></p>
                                            </a>
                                        </li>
                                        <li class="best_ranking_list01 best_ranking_list01_2">
                                            <a href="javascript:void(0);">
                                                <p class="fz_18 c-w lh_1 normal">2. 써마지 FLX<span class="ranking_new_icon"></span></p>
                                            </a>
                                        </li>
                                        <li class="best_ranking_list01 best_ranking_list01_3">
                                            <a href="javascript:void(0);">
                                                <p class="fz_18 c-w lh_1 normal">3. 세럼주사<span class="ranking_new_icon"></span></p>
                                            </a>
                                        </li>
                                        <li class="best_ranking_list01 best_ranking_list01_4">
                                            <a href="javascript:void(0);">
                                                <p class="fz_18 c-w lh_1 normal">4. 백반증 치료</p>
                                            </a>
                                        </li>
                                        <li class="best_ranking_list01 best_ranking_list01_5">
                                            <a href="javascript:void(0);">
                                                <p class="fz_18 c-w lh_1 normal">5. 흉터 치료</p>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="best_ranking_content tabcontent tabcontent2" id="tabcontent2">
                                    <ul class="best_ranking_content02_ul">
                                        <li class="best_ranking_list02 best_ranking_list02_1 active">
                                            <a href="javascript:void(0);">
                                                <p class="fz_18 c-w lh_1 normal">1. 여드름<span class="ranking_new_icon"></span></p>
                                            </a>
                                        </li>
                                        <li class="best_ranking_list02 best_ranking_list02_2">
                                            <a href="javascript:void(0);">
                                                <p class="fz_18 c-w lh_1 normal">2. 안티에이징</p>
                                            </a>
                                        </li>
                                        <li class="best_ranking_list02 best_ranking_list02_3">
                                            <a href="javascript:void(0);">
                                                <p class="fz_18 c-w lh_1 normal">3. 미용성형<span class="ranking_new_icon"></span></p>
                                            </a>
                                        </li>
                                        <li class="best_ranking_list02 best_ranking_list02_4">
                                            <a href="javascript:void(0);">
                                                <p class="fz_18 c-w lh_1 normal">4. 흉터<span class="ranking_new_icon"></span></p>
                                            </a>
                                        </li>
                                        <li class="best_ranking_list02 best_ranking_list02_5">
                                            <a href="javascript:void(0);">
                                                <p class="fz_18 c-w lh_1 normal">5. 여성진료</p>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- //BEST Ranking -->

                <div class="select_network pc_cont">
                    <div class="select_network_btn flex_row jc_center center">
                        <p class="select_network_text01 fz_14 normal">
                            <a href="javascript:void(0);">
                                구월점
                            </a>
                        </p>
                        <p class="select_network_text02 fz_14 normal">
                            <a href="javascript:void(0);">
                                송도점
                            </a>
                        </p>
                    </div>
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
                
                <div class="hamburger hamburger_pc flex_row se center open-on-hover" id="hamburger_pc">
                    <div class="hamburger_wrap flex_row jc_center center">
                        <div class="hamburger_box">
                            <span class="line"></span>
                            <span class="line"></span>
                            <span class="line"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <? } else { ?>
        <div class="ht-inner">
            <div class="ht-inner__left">
                <div class="logo pc_cont">
                    <a href="<?php echo G5_THEME_URL?>">
                        <img class="color_change_logo" src="<?php echo G5_THEME_URL?>/img/h_logo_b.png" alt="인천오라클피부과">
                        <img class="color_change_logo_w" src="<?php echo G5_THEME_URL?>/img/h_logo_w.png" alt="인천오라클피부과">
                    </a>
                </div>
                
                <div class="language crsr-shrink open-on-hover pc_cont">
                    <span class="current-lang select-lang-btn open-on-hover-btn" id="langNow">KR&ensp;&dtrif;</span>
                    <ul class="select-lang lang-select-list open-on-hover-list">
                        <li class="active"><a href="javascript:void(0);" target="_blank">KR</a></li>
                        <li><a href="javascript:void(0);" target="_blank">EN</a></li>
                        <li><a href="javascript:void(0);" target="_blank">CH</a></li>
                        <li><a href="javascript:void(0);" target="_blank">RU</a></li>
                    </ul>
                </div>
                
                <div class="signature crsr-shrink open-on-hover pc_cont">
                    <div class="current-signature select-signature-btn open-on-hover-btn" id="langNow">
                        <img src="<?php echo G5_THEME_URL?>/img/signature_icon.png" alt="시그니처 로고"><span>&ensp;&dtrif;</span>
                    </div>
                    <ul class="select-signature signature-select-list open-on-hover-list">
                        <li><a href="javascript:void(0);" target="_blank">수세럼주사</a></li>
                        <li><a href="javascript:void(0);" target="_blank">디자인리프팅</a></li>
                        <li><a href="javascript:void(0);" target="_blank">써마지 FLX</a></li>
                        <li><a href="javascript:void(0);" target="_blank">문신제거</a></li>
                        <li><a href="javascript:void(0);" target="_blank">지방흡입</a></li>
                    </ul>
                </div>
                
                <div class="hamburger hamburger_m flex_row se center open-on-hover" id="hamburger_m">
                    <div class="hamburger_wrap flex_row jc_center center">
                        <div class="hamburger_box">
                            <span class="line"></span>
                            <span class="line"></span>
                            <span class="line"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ht-inner__center">
                <div class="logo m_cont">
                    <a href="<?php echo G5_THEME_URL?>">
                        <img class="color_change_logo" src="<?php echo G5_THEME_URL?>/img/m_h_logo_b.png" alt="인천오라클피부과">
                        <img class="color_change_logo_w" src="<?php echo G5_THEME_URL?>/img/m_h_logo_w.png" alt="인천오라클피부과">
                    </a>
                </div>
                <div class="gnb-logo">
                    <a href="<?php echo G5_THEME_URL?>">
                        <img class="pc_cont_640" src="<?php echo G5_THEME_URL?>/img/h_logo_b.png" alt="인천오라클피부과">
                        <img class="m_cont_640" src="<?php echo G5_THEME_URL?>/img/m_h_logo_b.png" alt="인천오라클피부과">
                    </a>
                </div>
                <div class="top_menu_nav pc_cont">
                    <div class="top_menu_inner flex_row jc_center center ta_c fz_17 normal">
                        <div class="top_menu lh_1"><a href="javascript:void(0);">피부 아름답게</a></div>
                        <div class="top_menu lh_1"><a href="javascript:void(0);">피부 건강하게</a></div>
                        <div class="top_menu lh_1"><a href="javascript:void(0);">피부 생기있게</a></div>
                        <div class="top_menu lh_1"><a href="javascript:void(0);">피부 깔끔하게</a></div>
                        <div class="top_menu lh_1"><a href="javascript:void(0);">체형 균형있게</a></div>
                    </div>
                </div>
            </div>
            <div class="ht-inner__right">
                <div class="h_search pc_cont" id="best_ranking_btn">
                    <a href="javascript:void(0);">
                        <div class="h_search_icon flex_row jc_center center" id="h_search_icon">
                            <img class="color_change_logo" src="<?php echo G5_THEME_URL?>/img/search_icon.png" alt="검색버튼">
                            <img class="color_change_logo_w" src="<?php echo G5_THEME_URL?>/img/search_icon_w.png" alt="검색버튼">
                        </div>
                        <div class="best_ranking_close" id="best_ranking_close">
                            <div class="best_ranking_close_btn" id="best_ranking_close_btn">
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </a>
                </div>
                
                <div class="m_cont">
                    <div class="m_call_btn">
                        <a href="tel:031-502-2080"></a>
                    </div>
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
                                    <li id="tablinks01" class="best_ranking_tab_li tablinks active">
                                        <a href="#tabcontent1">
                                            <p class="fz_16 ta_c">피부질환</p>
                                        </a>
                                    </li>
                                    <li id="tablinks02" class="best_ranking_tab_li tablinks">
                                        <a href="#tabcontent2">
                                            <p class="fz_16 ta_c">피부미용</p>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="best_ranking_content_wrap">
                                <div class="best_ranking_content tabcontent tabcontent1" id="tabcontent1">
                                    <ul class="best_ranking_content01_ul">
                                        <li class="best_ranking_list01 best_ranking_list01_1 active">
                                            <a href="javascript:void(0);">
                                                <p class="fz_18 c-w lh_1 normal">1. 인모드 리프팅<span class="ranking_new_icon"></span></p>
                                            </a>
                                        </li>
                                        <li class="best_ranking_list01 best_ranking_list01_2">
                                            <a href="javascript:void(0);">
                                                <p class="fz_18 c-w lh_1 normal">2. 써마지 FLX<span class="ranking_new_icon"></span></p>
                                            </a>
                                        </li>
                                        <li class="best_ranking_list01 best_ranking_list01_3">
                                            <a href="javascript:void(0);">
                                                <p class="fz_18 c-w lh_1 normal">3. 세럼주사<span class="ranking_new_icon"></span></p>
                                            </a>
                                        </li>
                                        <li class="best_ranking_list01 best_ranking_list01_4">
                                            <a href="javascript:void(0);">
                                                <p class="fz_18 c-w lh_1 normal">4. 백반증 치료</p>
                                            </a>
                                        </li>
                                        <li class="best_ranking_list01 best_ranking_list01_5">
                                            <a href="javascript:void(0);">
                                                <p class="fz_18 c-w lh_1 normal">5. 흉터 치료</p>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="best_ranking_content tabcontent tabcontent2" id="tabcontent2">
                                    <ul class="best_ranking_content02_ul">
                                        <li class="best_ranking_list02 best_ranking_list02_1 active">
                                            <a href="javascript:void(0);">
                                                <p class="fz_18 c-w lh_1 normal">1. 여드름<span class="ranking_new_icon"></span></p>
                                            </a>
                                        </li>
                                        <li class="best_ranking_list02 best_ranking_list02_2">
                                            <a href="javascript:void(0);">
                                                <p class="fz_18 c-w lh_1 normal">2. 안티에이징</p>
                                            </a>
                                        </li>
                                        <li class="best_ranking_list02 best_ranking_list02_3">
                                            <a href="javascript:void(0);">
                                                <p class="fz_18 c-w lh_1 normal">3. 미용성형<span class="ranking_new_icon"></span></p>
                                            </a>
                                        </li>
                                        <li class="best_ranking_list02 best_ranking_list02_4">
                                            <a href="javascript:void(0);">
                                                <p class="fz_18 c-w lh_1 normal">4. 흉터<span class="ranking_new_icon"></span></p>
                                            </a>
                                        </li>
                                        <li class="best_ranking_list02 best_ranking_list02_5">
                                            <a href="javascript:void(0);">
                                                <p class="fz_18 c-w lh_1 normal">5. 여성진료</p>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- //BEST Ranking -->

                <div class="select_network pc_cont">
                    <div class="select_network_btn flex_row jc_center center">
                        <p class="select_network_text01 fz_14 normal">
                            <a href="javascript:void(0);">
                                구월점
                            </a>
                        </p>
                        <p class="select_network_text02 fz_14 normal">
                            <a href="javascript:void(0);">
                                송도점
                            </a>
                        </p>
                    </div>
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
                
                <div class="hamburger hamburger_pc flex_row se center open-on-hover" id="hamburger_pc">
                    <div class="hamburger_wrap flex_row jc_center center">
                        <div class="hamburger_box">
                            <span class="line"></span>
                            <span class="line"></span>
                            <span class="line"></span>
                        </div>
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
                                    <a href="javascript:void(0);">
                                        <p class="fz_25 medium">오라클 소개</p>
                                    </a>
                                </div>
                                <ul class="gnb-menu-depth2 gnb-menu-depth2-1">
                                    <li><a href="javascript:void(0);"><span>오라클 특별함</span></a></li>
                                    <li><a href="javascript:void(0);"><span>의료진 소개</span></a></li>
                                    <li><a href="javascript:void(0);"><span>지점소개</span></a></li>
                                    <li><a href="javascript:void(0);"><span>장비소개</span></a></li>
                                    <li><a href="javascript:void(0);"><span>공지/이벤트</span></a></li>
                                    <li><a href="javascript:void(0);"><span>오라뀨티비</span></a></li>
                                </ul>
                            </li>
                            <li class="gnb-menu-depth1">
                                <div class="gnb-menu-img-text">
                                    <a href="javascript:void(0);"> 
                                        <p class="fz_25 medium">피부질환</p>
                                    </a>
                                </div>
                                <ul class="gnb-menu-depth2 gnb-menu-depth2-2">
                                    <li><a href="javascript:void(0);"><span>백반증</span></a></li>
                                    <li><a href="javascript:void(0);"><span>건선</span></a></li>
                                    <li><a href="javascript:void(0);"><span>아토피 피부염</span></a></li>
                                    <li><a href="javascript:void(0);"><span>광선치료 클리닉</span></a></li>
                                    <li><a href="javascript:void(0);"><span>사마귀/티눈</span></a></li>
                                    <li><a href="javascript:void(0);"><span>손발톱 무좀</span></a></li>
                                    <li><a href="javascript:void(0);"><span>만성습진/손발 습진</span></a></li>
                                    <li><a href="javascript:void(0);"><span>화상/상처관리</span></a></li>
                                    <li><a href="javascript:void(0);"><span>알레르기/두드러기/접촉피부염</span></a></li>
                                    <li><a href="javascript:void(0);"><span>원형탈모</span></a></li>
                                </ul>
                            </li>
                            <li class="gnb-menu-depth1">
                                <div class="gnb-menu-img-text">
                                    <a href="javascript:void(0);">
                                        <p class="fz_25 medium">피부외과</p>
                                    </a>
                                </div>
                                <ul class="gnb-menu-depth2 gnb-menu-depth2-3">
                                    <li><a href="javascript:void(0);"><span>피부양성종양</span></a></li>
                                    <li><a href="javascript:void(0);"><span>피부조직검사</span></a></li>
                                    <li><a href="javascript:void(0);"><span>깊은점/큰점/선천모반</span></a></li>
                                    <li><a href="javascript:void(0);"><span>흉터제거수술</span></a></li>
                                </ul>
                            </li>
                            <li class="gnb-menu-depth1">
                                <div class="gnb-menu-img-text">
                                    <a href="javascript:void(0);">
                                        <p class="fz_25 medium">피부기능의학</p>
                                    </a>
                                </div>
                                <ul class="gnb-menu-depth2 gnb-menu-depth2-4">
                                    <li><a href="javascript:void(0);"><span>피부기능의학</span></a></li>
                                </ul>
                            </li>
                            <li class="gnb-menu-depth1">
                                <div class="gnb-menu-img-text">
                                    <a href="javascript:void(0);">
                                        <p class="fz_25 medium">미용진료</p>
                                    </a>
                                </div>
                                <ul class="gnb-menu-depth2 gnb-menu-depth2-5">
                                    <li><a href="javascript:void(0);"><span>여드름</span></a></li>
                                    <li><a href="javascript:void(0);"><span>미백/홍조</span></a></li>
                                    <li><a href="javascript:void(0);"><span>안티에이징</span></a></li>
                                    <li><a href="javascript:void(0);"><span>미용성형</span></a></li>
                                    <li><a href="javascript:void(0);"><span>제모/탈모</span></a></li>
                                    <li><a href="javascript:void(0);"><span>흉터</span></a></li>
                                    <li><a href="javascript:void(0);"><span>문신제거</span></a></li>
                                    <li><a href="javascript:void(0);"><span>기타치료</span></a></li>
                                    <li><a href="javascript:void(0);"><span>여성진료</span></a></li>
                                </ul>
                            </li>
                            <li class="gnb-menu-depth1">
                                <div class="gnb-menu-img-text">
                                    <a href="javascript:void(0);">
                                        <p class="fz_25 medium">비만체형</p>
                                    </a>
                                </div>
                                <ul class="gnb-menu-depth2 gnb-menu-depth2-6">
                                    <li><a href="javascript:void(0);"><span>지방흡입</span></a></li>
                                    <li><a href="javascript:void(0);"><span>한컵주사</span></a></li>
                                    <li><a href="javascript:void(0);"><span>스컬프슈어</span></a></li>
                                    <li><a href="javascript:void(0);"><span>호르몬다이어트</span></a></li>
                                </ul>
                            </li>
                            <li class="gnb-menu-depth1">
                                <div class="gnb-menu-img-text">
                                    <a href="javascript:void(0);">
                                        <p class="fz_25 medium">오라클맨즈</p>
                                    </a>
                                </div>
                                <ul class="gnb-menu-depth2 gnb-menu-depth2-7">
                                    <li><a href="javascript:void(0);"><span>남성 피부관리</span></a></li>
                                    <li><a href="javascript:void(0);"><span>남성 수염제모</span></a></li>
                                    <li><a href="javascript:void(0);"><span>남성 여유증</span></a></li>
                                    <li><a href="javascript:void(0);"><span>사각턱 보톡스</span></a></li>
                                    <li><a href="javascript:void(0);"><span>이미지 필러</span></a></li>
                                </ul>
                            </li>
                            <li class="gnb-menu-depth1">
                                <div class="gnb-menu-img-text">
                                    <a href="javascript:void(0);">
                                        <p class="fz_25 medium">상담/후기</p>
                                    </a>
                                </div>
                                <ul class="gnb-menu-depth2 gnb-menu-depth2-8">
                                    <li><a href="javascript:void(0);"><span>온라인상담</span></a></li>
                                    <li><a href="javascript:void(0);"><span>손글씨후기</span></a></li>
                                    <li><a href="javascript:void(0);"><span>유튜브모델 지원</span></a></li>
                                    <li><a href="javascript:void(0);"><span>전후사진</span></a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                    <div class="gnb-inner__right">
                        <div class="gnb_info_wrap flex_row fw jc_fs center">
                            <div class="gnb_info_guwol flex_row fw jc_fs al_fs">
                                <div class="gnb_info_title flex_row sb center">
                                    <p class="fz_20 normal m_10">구월점</p>
                                    <a href="javascript:void(0);">
                                        <p class="gnb_info_icon fz_15 normal m_10"><img src="<?php echo G5_THEME_URL?>/img/gnb_info_title_icon.png" alt=""><span>상담신청</span></p>
                                    </a>
                                </div>
                                <div class="gnb_info_img m_10">
                                    <a href="javascript:void(0);">
                                        <img src="<?php echo G5_THEME_URL?>/img/gnb_info_img_guwol.jpg" alt="">
                                    </a>
                                </div>
                                <div class="gnb_info_call_address flex_row fw jc_fs center">
                                    <div class="gnb_info_call">
                                        <a href="javascript:void(0);" target="_blank">
                                            <p class="gnb_info_icon fz_22 lh_1 sortsmillgoudy normal m_10"><img src="<?php echo G5_THEME_URL?>/img/gnb_info_call_icon.png" alt=""><span>032.434.5311</span></p>
                                        </a>
                                    </div>
                                    <div class="gnb_info_address">
                                        <a href="javascript:void(0);" target="_blank">
                                            <p class="gnb_info_icon fz_15 lh_1 normal m_10"><img src="<?php echo G5_THEME_URL?>/img/gnb_info_address_icon.png" alt=""><span>인천광역시 남동구 예술로 126 링크126 6층</span></p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="gnb_info_songdo flex_row fw jc_fs al_fs">
                                <div class="gnb_info_title flex_row sb center">
                                    <p class="fz_20 normal m_10">송파점</p>
                                    <a href="javascript:void(0);">
                                        <p class="gnb_info_icon fz_15 normal m_10"><img src="<?php echo G5_THEME_URL?>/img/gnb_info_title_icon.png" alt=""><span>상담신청</span></p>
                                    </a>
                                </div>
                                <div class="gnb_info_img m_10">
                                    <a href="javascript:void(0);">
                                        <img src="<?php echo G5_THEME_URL?>/img/gnb_info_img_songdo.jpg" alt="">
                                    </a>
                                </div>
                                <div class="gnb_info_call_address flex_row fw jc_fs center">
                                    <div class="gnb_info_call">
                                        <a href="javascript:void(0);" target="_blank">
                                            <p class="gnb_info_icon fz_22 lh_1 sortsmillgoudy normal m_10"><img src="<?php echo G5_THEME_URL?>/img/gnb_info_call_icon.png" alt=""><span>032.434.5311</span></p>
                                        </a>
                                    </div>
                                    <div class="gnb_info_address">
                                        <a href="javascript:void(0);" target="_blank">
                                            <p class="gnb_info_icon fz_15 lh_1 normal m_10"><img src="<?php echo G5_THEME_URL?>/img/gnb_info_address_icon.png" alt=""><span>인천광역시 남동구 예술로 126 링크126 6층</span></p>
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
                                <li><a href="javascript:void(0);"><span>오라클 특별함</span></a></li>
                                <li><a href="javascript:void(0);"><span>의료진 소개</span></a></li>
                                <li><a href="javascript:void(0);"><span>지점소개</span></a></li>
                                <li><a href="javascript:void(0);"><span>장비소개</span></a></li>
                                <li><a href="javascript:void(0);"><span>공지/이벤트</span></a></li>
                                <li><a href="javascript:void(0);"><span>오라뀨티비</span></a></li>
                            </ul>
                        </li>
                        <li class="m-gnb-menu-depth1">
                            <a href="javascript:void(0);" class="medium">
                                피부질환
                            </a>
                            <ul class="m-gnb-menu-depth2">
                                <li><a href="javascript:void(0);"><span>백반증</span></a></li>
                                <li><a href="javascript:void(0);"><span>건선</span></a></li>
                                <li><a href="javascript:void(0);"><span>아토피 피부염</span></a></li>
                                <li><a href="javascript:void(0);"><span>광선치료 클리닉</span></a></li>
                                <li><a href="javascript:void(0);"><span>사마귀/티눈</span></a></li>
                                <li><a href="javascript:void(0);"><span>손발톱 무좀</span></a></li>
                                <li><a href="javascript:void(0);"><span>만성습진/손발 습진</span></a></li>
                                <li><a href="javascript:void(0);"><span>화상/상처관리</span></a></li>
                                <li><a href="javascript:void(0);"><span>알레르기/두드러기/접촉피부염</span></a></li>
                                <li><a href="javascript:void(0);"><span>원형탈모</span></a></li>
                            </ul>
                        </li>
                        <li class="m-gnb-menu-depth1">
                            <a href="javascript:void(0);" class="medium">
                                피부외과
                            </a>
                            <ul class="m-gnb-menu-depth2">
                                <li><a href="javascript:void(0);"><span>피부양성종양</span></a></li>
                                <li><a href="javascript:void(0);"><span>피부조직검사</span></a></li>
                                <li><a href="javascript:void(0);"><span>깊은점/큰점/선천모반</span></a></li>
                                <li><a href="javascript:void(0);"><span>흉터제거수술</span></a></li>
                            </ul>
                        </li>
                        <li class="m-gnb-menu-depth1">
                            <a href="javascript:void(0);" class="medium">
                                피부기능의학
                            </a>
                            <ul class="m-gnb-menu-depth2">
                                <li><a href="javascript:void(0);"><span>피부기능의학</span></a></li>
                            </ul>
                        </li>
                        <li class="m-gnb-menu-depth1">
                            <a href="javascript:void(0);" class="medium">
                                미용진료
                            </a>
                            <ul class="m-gnb-menu-depth2">
                                <li><a href="javascript:void(0);"><span>여드름</span></a></li>
                                <li><a href="javascript:void(0);"><span>미백/홍조</span></a></li>
                                <li><a href="javascript:void(0);"><span>안티에이징</span></a></li>
                                <li><a href="javascript:void(0);"><span>미용성형</span></a></li>
                                <li><a href="javascript:void(0);"><span>제모/탈모</span></a></li>
                                <li><a href="javascript:void(0);"><span>흉터</span></a></li>
                                <li><a href="javascript:void(0);"><span>문신제거</span></a></li>
                                <li><a href="javascript:void(0);"><span>기타치료</span></a></li>
                                <li><a href="javascript:void(0);"><span>여성진료</span></a></li>
                            </ul>
                        </li>
                        <li class="m-gnb-menu-depth1">
                            <a href="javascript:void(0);" class="medium">
                                비만체형
                            </a>
                            <ul class="m-gnb-menu-depth2">
                                <li><a href="javascript:void(0);"><span>지방흡입</span></a></li>
                                <li><a href="javascript:void(0);"><span>한컵주사</span></a></li>
                                <li><a href="javascript:void(0);"><span>스컬프슈어</span></a></li>
                                <li><a href="javascript:void(0);"><span>호르몬다이어트</span></a></li>
                            </ul>
                        </li>
                        <li class="m-gnb-menu-depth1">
                            <a href="javascript:void(0);" class="medium">
                                오라클맨즈
                            </a>
                            <ul class="m-gnb-menu-depth2">
                                <li><a href="javascript:void(0);"><span>남성 피부관리</span></a></li>
                                <li><a href="javascript:void(0);"><span>남성 수염제모</span></a></li>
                                <li><a href="javascript:void(0);"><span>남성 여유증</span></a></li>
                                <li><a href="javascript:void(0);"><span>사각턱 보톡스</span></a></li>
                                <li><a href="javascript:void(0);"><span>이미지 필러</span></a></li>
                            </ul>
                        </li>
                        <li class="m-gnb-menu-depth1">
                            <a href="javascript:void(0);" class="medium">
                                상담/후기
                            </a>
                            <ul class="m-gnb-menu-depth2">
                                <li><a href="javascript:void(0);"><span>온라인상담</span></a></li>
                                <li><a href="javascript:void(0);"><span>손글씨후기</span></a></li>
                                <li><a href="javascript:void(0);"><span>유튜브모델 지원</span></a></li>
                                <li><a href="javascript:void(0);"><span>전후사진</span></a></li>
                            </ul>
                        </li>
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
    <div class="side_nav" id="side_nav">
        <ul class="side_nav_ul flex_row fw jc_center center">
            <li class="side_nav_li side_nav_li01" onclick="$('html, body').animate({ scrollTop: $('#startContent').offset().top-0 }, 500);"><a href="javascript:void(0);" class="fz_14 lh_1 ls_2 normal ir_text">인천 오라클 메인</a></li>
            <li class="side_nav_li side_nav_li02" onclick="$('html, body').animate({ scrollTop: $('#sect02').offset().top-90 }, 500);"><a href="javascript:void(0);" class="fz_14 lh_1 ls_2 normal">인천 오라클 특별함</a></li>
            <li class="side_nav_li side_nav_li03" onclick="$('html, body').animate({ scrollTop: $('#sect03').offset().top-120 }, 500);"><a href="javascript:void(0);" class="fz_14 lh_1 ls_2 normal">센터 바로가기</a></li>
            <li class="side_nav_li side_nav_li04" onclick="$('html, body').animate({ scrollTop: $('#sect04').offset().top-120 }, 500);"><a href="javascript:void(0);" class="fz_14 lh_1 ls_2 normal">브랜드필름</a></li>
            <li class="side_nav_li side_nav_li05" onclick="$('html, body').animate({ scrollTop: $('#sect05').offset().top-120 }, 500);"><a href="javascript:void(0);" class="fz_14 lh_1 ls_2 normal">처음부터 오라클</a></li>
            <li class="side_nav_li side_nav_li06" onclick="$('html, body').animate({ scrollTop: $('#sect06').offset().top-120 }, 500);"><a href="javascript:void(0);" class="fz_14 lh_1 ls_2 normal">오라클TV</a></li>
        </ul>
    </div>
    <!-- //side_nav -->
    <? } ?>


    <!-- main -->
    <div class="smooth-scroll" id="content">