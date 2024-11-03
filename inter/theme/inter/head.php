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

<!-- header -->
<div id="skip" class="skip-navigation ir_link">
	<a href="#gnb">메뉴 바로가기</a>
	<a href="#content">본문 바로가기</a>
</div>
<!-- header -->
<header class="main-header" id="header">
    <div class="ht-inner">
        <div class="ht-inner__left">
            <div class="header_menu header_menu_top pc_cont_1024">
                <ul class="flex_row jc_fs center">
                    <li class="header_menu_li header_menu_li01_1">
                        <a href="<?php echo G5_THEME_URL?>/sub/sub2_1.php" class="fz_15 kopubworlddotum normal"><span class="semibold">탁월한 자연스러움</span> <br class="m_cont_1440">레진 심미치료</a>
                    </li>
                    <li class="header_menu_li header_menu_li01_2">
                        <a href="<?php echo G5_THEME_URL?>/sub/sub4_1.php" class="fz_15 kopubworlddotum normal"><span class="semibold">국내 1세대의 안전함</span> <br class="m_cont_1440">수면치료</a>
                    </li>
                    <li class="header_menu_li header_menu_li01_3">
                        <a href="<?php echo G5_THEME_URL?>/sub/sub3_1.php" class="fz_15 kopubworlddotum normal"><span class="semibold">고난도 <br class="m_cont_1440">재치료</span></a>
                    </li>
                    <li class="header_menu_li header_menu_li01_4">
                        <a href="<?php echo G5_THEME_URL?>/sub/sub5_1.php" class="fz_15 kopubworlddotum normal"><span class="semibold">정밀한</span> <br class="m_cont_1440">신경치료</a>
                    </li>
                </ul>
            </div>
            <div class="header_menu header_menu_scroll pc_cont_1024">
                <ul class="flex_row jc_fs center">
                    <li class="header_menu_li header_menu_li01_1">
                        <a href="<?php echo G5_THEME_URL?>/sub/sub2_1.php" class="fz_15 kopubworlddotum normal"><span class="semibold">탁월한 자연스러움</span> <br class="m_cont_1440">레진 심미치료</a>
                    </li>
                    <li class="header_menu_li header_menu_li01_2">
                        <a href="<?php echo G5_THEME_URL?>/sub/sub4_1.php" class="fz_15 kopubworlddotum normal"><span class="semibold">국내 1세대의 안전함</span> <br class="m_cont_1440">수면치료</a>
                    </li>
                    <li class="header_menu_li header_menu_li01_3">
                        <a href="<?php echo G5_THEME_URL?>/sub/sub3_1.php" class="fz_15 kopubworlddotum normal"><span class="semibold">고난도 <br class="m_cont_1440">재치료</span></a>
                    </li>
                    <li class="header_menu_li header_menu_li01_4">
                        <a href="<?php echo G5_THEME_URL?>/sub/sub5_1.php" class="fz_15 kopubworlddotum normal"><span class="semibold">정밀한</span> <br class="m_cont_1440">신경치료</a>
                    </li>
                </ul>
            </div>
            
            <div class="m_call_btn m_cont_1024">
                <a href="tel:02-714-0328"></a>
            </div>
            
            <div class="language crsr-shrink open-on-hover m_cont_1024">
                <span class="current-lang select-lang-btn open-on-hover-btn" id="langNow"><i class="glob-icon"></i></span>
                <ul class="select-lang lang-select-list open-on-hover-list">
                    <li class="active"><a href="javascript:void(0);" target="_blank" class="fz_15 optima normal">KOR</a></li>
                    <li><a href="javascript:void(0);" target="_blank" class="fz_15 optima normal" style="pointer-events:none;">ENG</a></li>
                </ul>
            </div>
        </div>
        <div class="ht-inner__center">
            <div class="logo pc_cont_960">
                <a href="<?php echo G5_URL?>">
                    <img class="logo_b" src="<?php echo G5_THEME_URL?>/img/logo_b.png" alt="인터서울치과">
                    <img class="logo_w" src="<?php echo G5_THEME_URL?>/img/logo_w.png" alt="인터서울치과">
                </a>
            </div>
            <div class="logo m_cont_960">
                <a href="<?php echo G5_URL?>">
                    <img class="logo_b" src="<?php echo G5_THEME_URL?>/img/logo_b_m.png" alt="인터서울치과">
                    <img class="logo_w" src="<?php echo G5_THEME_URL?>/img/logo_w_m.png" alt="인터서울치과">
                </a>
            </div>
        </div>
        <div class="ht-inner__right">
            <div class="language crsr-shrink open-on-hover pc_cont_1024">
                <span class="current-lang select-lang-btn open-on-hover-btn" id="langNow"><i class="glob-icon"></i></span>
                <ul class="select-lang lang-select-list open-on-hover-list">
                    <li class="active"><a href="javascript:void(0);" target="_blank" class="fz_15 optima normal">KOR</a></li>
                    <li><a href="javascript:void(0);" target="_blank" class="fz_15 optima normal" style="pointer-events:none;">ENG</a></li>
                </ul>
            </div>
            
            <div class="search_cont_wrap">
                <div class="search_btn_wrap">
                    <a href="<?php echo G5_BBS_URL?>/search.php?gr_id=community&sfl=wr_subject%7C%7Cwr_content%7C%7Cca_name%7C%7Cwr_name&stx=인터서울치과">
                        <i class="search_icon"></i>
                    </a>
                </div>
            </div>
            
            <div class="hamberger flex_row se center" id="hamberger">
                <div class="hamberger_wrap flex_row jc_center center">
                    <div class="hamberger_box">
                        <div class="hamberger_line_3d">
                            <div class="line line1"></div>
                            <div class="line line2"></div>
                            <div class="line line3"></div>
                            <div class="line line3"></div>
                        </div>
                        <div class="hamberger_line_3d_close">
                            <div class="line_close line_close1"></div>
                            <div class="line_close line_close2"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- gnb-menu -->
<div class="gnb-outer" id="gnb">
    <div class="gnb-outer-bg" id="gnb-outer-bg"></div>
    <div class="hamberger hamberger_gnb" id="hamberger_gnb">
        <div class="hamberger_wrap flex_row jc_center center">
            <div class="hamberger_box">
                <p class="txt01 c-w fz_16 ls_p2 lh_16 optima normal">Close</p>
            </div>
        </div>
    </div>
    <div class="gnb-inner">
        <div class="gnb-menu-list-wrap">
            <ul class="gnb-menu-list pc_cont_434">
                <li class="gnb-menu-depth1 gnb-menu-depth1-1 on">
                    <a href="javascript:void(0);" class="gnb-menu-txt kopubworlddotum semibold ls_p2 fz_25 lh_16">
                        <span class="fz_15 ls_p2 sortsmillgoudy dp_ib p_r" style="top:-1px;">01</span>&ensp;&nbsp;인터서울치과
                    </a>
                    <ul class="gnb-menu-depth2">
                        <li>
                            <a href="<?php echo G5_THEME_URL?>/sub/sub1_1.php">
                                <p class="fz_17 ls_p2 lh_16 kopubworlddotum light">
                                    인터서울 스토리
                                </p>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo G5_THEME_URL?>/sub/sub1_2.php">
                                <p class="fz_17 ls_p2 lh_16 kopubworlddotum light">
                                    인터서울 사람들
                                </p>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo G5_BBS_URL?>/board.php?bo_table=c_article">
                                <p class="fz_17 ls_p2 lh_16 kopubworlddotum light">
                                    인터서울 아티클
                                </p>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo G5_THEME_URL?>/sub/sub1_4.php">
                                <p class="fz_17 ls_p2 lh_16 kopubworlddotum light">
                                    진료안내/오시는 길
                                </p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="gnb-menu-depth1 gnb-menu-depth1-2">
                    <a href="<?php echo G5_THEME_URL?>/sub/sub2_1.php" class="gnb-menu-txt kopubworlddotum light ls_p2 fz_18 lh_16">
                        <span class="fz_15 ls_p2 sortsmillgoudy dp_ib p_r" style="top:-1px;">02</span>&emsp;&nbsp;자연스러운 아름다움 <span class="fz_25 semibold">레진/심미치료</span>
                    </a>
                </li>
                <li class="gnb-menu-depth1 gnb-menu-depth1-3">
                    <a href="<?php echo G5_THEME_URL?>/sub/sub3_1.php" class="gnb-menu-txt kopubworlddotum light ls_p2 fz_18 lh_16">
                        <span class="fz_15 ls_p2 sortsmillgoudy dp_ib p_r" style="top:-2px;">03</span>&emsp;&nbsp;다양한 케이스도 완성도 높게 <span class="fz_25 semibold">고난도 재치료</span>
                    </a>
                </li>
                <li class="gnb-menu-depth1 gnb-menu-depth1-4">
                    <a href="<?php echo G5_THEME_URL?>/sub/sub4_1.php" class="gnb-menu-txt kopubworlddotum light ls_p2 fz_18 lh_16">
                        <span class="fz_15 ls_p2 sortsmillgoudy dp_ib p_r" style="top:-2px;">04</span>&emsp;&nbsp;1세대 특별함, 안전한 <span class="fz_25 semibold">수면치료</span>
                    </a>
                </li>
                <li class="gnb-menu-depth1 gnb-menu-depth1-5">
                    <a href="<?php echo G5_THEME_URL?>/sub/sub5_1.php" class="gnb-menu-txt kopubworlddotum light ls_p2 fz_18 lh_16">
                        <span class="fz_15 ls_p2 sortsmillgoudy dp_ib p_r" style="top:-3px;">05</span>&emsp;&nbsp;기본을 지키는 <span class="fz_25 semibold">일반진료/예방관리</span>
                    </a>
                </li>
                <li class="gnb-menu-depth1 gnb-menu-depth1-6 on">
                    <a href="javascript:void(0);" class="gnb-menu-txt kopubworlddotum semibold ls_p2 fz_25 lh_16">
                        <span class="fz_15 ls_p2 sortsmillgoudy dp_ib p_r" style="top:-1px;">06</span>&ensp;&nbsp;인터서울 소식
                    </a>
                    <ul class="gnb-menu-depth2">
                        <li>
                            <a href="<?php echo G5_BBS_URL?>/board.php?bo_table=notice">
                                <p class="fz_17 ls_p2 lh_16 kopubworlddotum light">
                                    공지사항
                                </p>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo G5_BBS_URL?>/board.php?bo_table=before_after">
                                <p class="fz_17 ls_p2 lh_16 kopubworlddotum light">
                                    치료전후
                                </p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
            
            <ul class="gnb-menu-list m_cont_434">
                <li class="gnb-menu-depth1 gnb-menu-depth1-1 on">
                    <a href="javascript:void(0);" class="gnb-menu-txt kopubworlddotum semibold ls_p2 fz_25 lh_16">
                        인터서울치과
                    </a>
                    <ul class="gnb-menu-depth2">
                        <li>
                            <a href="<?php echo G5_THEME_URL?>/sub/sub1_1.php">
                                <p class="fz_17 ls_p2 lh_16 kopubworlddotum light">
                                    인터서울 스토리
                                </p>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo G5_THEME_URL?>/sub/sub1_2.php">
                                <p class="fz_17 ls_p2 lh_16 kopubworlddotum light">
                                    인터서울 사람들
                                </p>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo G5_BBS_URL?>/board.php?bo_table=c_article">
                                <p class="fz_17 ls_p2 lh_16 kopubworlddotum light">
                                    인터서울 아티클
                                </p>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo G5_THEME_URL?>/sub/sub1_4.php">
                                <p class="fz_17 ls_p2 lh_16 kopubworlddotum light">
                                    진료안내/오시는 길
                                </p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="gnb-menu-depth1 gnb-menu-depth1-2">
                    <a href="<?php echo G5_THEME_URL?>/sub/sub2_1.php" class="gnb-menu-txt kopubworlddotum semibold ls_p2 fz_25 lh_16">
                        레진/심미치료
                    </a>
                </li>
                <li class="gnb-menu-depth1 gnb-menu-depth1-3">
                    <a href="<?php echo G5_THEME_URL?>/sub/sub3_1.php" class="gnb-menu-txt kopubworlddotum semibold ls_p2 fz_25 lh_16">
                        고난도 재치료
                    </a>
                </li>
                <li class="gnb-menu-depth1 gnb-menu-depth1-4">
                    <a href="<?php echo G5_THEME_URL?>/sub/sub4_1.php" class="gnb-menu-txt kopubworlddotum semibold ls_p2 fz_25 lh_16">
                        수면치료
                    </a>
                </li>
                <li class="gnb-menu-depth1 gnb-menu-depth1-5">
                    <a href="<?php echo G5_THEME_URL?>/sub/sub5_1.php" class="gnb-menu-txt kopubworlddotum semibold ls_p2 fz_25 lh_16">
                        일반진료/예방관리
                    </a>
                </li>
                <li class="gnb-menu-depth1 gnb-menu-depth1-6 on">
                    <a href="javascript:void(0);" class="gnb-menu-txt kopubworlddotum semibold ls_p2 fz_25 lh_16">
                        인터서울 소식
                    </a>
                    <ul class="gnb-menu-depth2">
                        <li>
                            <a href="<?php echo G5_BBS_URL?>/board.php?bo_table=notice">
                                <p class="fz_17 ls_p2 lh_16 kopubworlddotum light">
                                    공지사항
                                </p>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo G5_BBS_URL?>/board.php?bo_table=before_after">
                                <p class="fz_17 ls_p2 lh_16 kopubworlddotum light">
                                    치료전후
                                </p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
            
            <div class="gnb_info_wrap">
                <p class="txt01 c-w fz_11 ls_p5 lh_16 kopubworlddotum light">
                    RAEMIAN YONGSAN THE CENTRAL 2F R223 HANGANG-DAERO 95, <br>
                    YONGSAN-GU, SEOUL
                </p>
                <p class="txt02 c-w fz_13 lh_16 kopubworlddotum light">
                    서울시 용산구 한강로 2가 422 래미안용산더센트럴 B동 2층 223호
                </p>
            </div>
            
            <div class="gnb_number_wrap">
                <a href="tel:02-714-0328">
                    <p class="txt01 c-w fz_18 lh_16 optima normal">
                        02.714.0328
                    </p>
                </a>
            </div>
            <div class="gnb_login_wrap">
                <div class="login_wrap">
                    <div class="login_menu flex_row jc_fe center">
                        <?php if($is_admin) { ?>
                        <a href="<?php echo G5_URL?>/admin" class="login_menu_item fz_13 light">관리자</a>
                        <?php } ?>
                        <?php if($is_member) { ?>
                        <a class="dropdown-item login_menu_item fz_13 light" href="<?php echo G5_BBS_URL ?>/member_confirm.php?url=<?php echo G5_BBS_URL ?>/register_form.php">정보수정</a> 
                        <a href="<?php echo G5_URL?>/bbs/logout.php" class="login_menu_item fz_13 light">로그아웃</a>
                        <?php }else{ ?>
                        <a href="<?php echo G5_URL?>/bbs/login.php" class="login_menu_item fz_13 light">로그인</a>
                        <a href="<?php echo G5_URL?>/bbs/register.php" class="login_menu_item fz_13 light">회원가입</a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="gnb_logo_bg"></div>
    </div>
</div>
<!-- //gnb -->
<!-- //header -->

<?php if(!defined('_INDEX_')) { // 메인 아닐떄 ?>
<style>
    html, body{
        overflow-y: auto !important;
    }
    .smooth-scroll{background-color:#fff !important;}
</style>
<?php } else { ?>

<?php } ?>

<!-- main -->
<div class="smooth-scroll" id="content">