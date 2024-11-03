<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

//if (G5_IS_MOBILE) {
//    include_once(G5_THEME_MOBILE_PATH.'/index.php');
//    return;
//}

add_javascript('<script src="'.G5_THEME_URL.'/js/plugins.js"></script>', 0);

include_once(G5_THEME_PATH.'/head.php');
?>

<main>
    
    <article class="main_cont01" id="startContent">
        <div class="swiper-container main_top_slider" id="main_top_slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide main_slider01">
                    <div class="main_top_slider_img main_top_slider_img01"></div>
                    <div class="main_top_slider_text_wrap ta_c pc_cont_640">
                        <div class="main_top_slider_text01 m_20">
                            <p class="c-w fz_20 normal">피부질환부터 미용까지, 피부에 관한 모든 것</p>
                        </div>
                        <div class="main_top_slider_text02">
                            <p>
                                <img src="<?php echo G5_THEME_URL?>/img/main_logo_w.png" alt="">
                            </p>
                        </div>
                    </div>
                    <div class="main_top_slider_text_wrap ta_c m_cont_640">
                        <div class="main_top_slider_text01 m_60">
                            <p class="c-w fz_40 nanummyeongjo normal">피부질환부터 미용까지, <br>피부에 관한 모든 것</p>
                        </div>
                        <a href="javascript:void(0);">
                            <div class="main_top_slider_text02">
                                <p class="main_top_slider01_text02 fz_22 c-w light">
                                    피부질환센터 바로가기
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="swiper-slide main_slider02">
                    <div class="main_top_slider_img main_top_slider_img02"></div>
                    <div class="main_top_slider_text_wrap ta_c pc_cont_640">
                        <div class="main_top_slider_text01 m_20">
                            <p class="c-b fz_20 normal">대한민국 2% 피부과전문의 직접 진료</p>
                        </div>
                        <div class="main_top_slider_text02">
                            <p>
                                <img src="<?php echo G5_THEME_URL?>/img/main_logo.png" alt="">
                            </p>
                        </div>
                    </div>
                    <div class="main_top_slider_text_wrap ta_c m_cont_640">
                        <div class="main_top_slider_text01 m_60">
                            <p class="c-w fz_40 nanummyeongjo normal">대한민국 2% <br>피부과전문의 직접 진료</p>
                        </div>
                        <a href="javascript:void(0);">
                            <div class="main_top_slider_text02">
                                <p class="main_top_slider02_text02 fz_22 c-w light">
                                    피부질환센터 바로가기
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination main_slider_pagination"></div>
        </div>
        <div class="mouse_scroll main_slide">
            <div class="mouse">
                <div class="wheel"></div>
            </div>
            <div>
                <span class="m_scroll_arrows m_scroll_arrows_one"></span>
                <span class="m_scroll_arrows m_scroll_arrows_two"></span>
            </div>
        </div>
    </article>

    <article class="main_cont02_wrap p_r sect" id="sect02" data="sect01_m">
        <div class="main_cont02 pc_cont">
            <!-- 마우스 오버 시 마우스 따라다니는 이미지 효과 -->
            <ul class="main_cont02_item_wrap p_r active_trigger">
                <li class="main_cont02_item main_cont02_item01">
                    <a href="javascript:void(0);" class="main_cont02_item_text">
                        <div class="main_cont02_item_top_text main_cont02_item_top_text01">
                            <p class="fz_18 normal ls_2 lh_16">01. 대한민국 2% 피부과전문의가 상담부터 시술까지 1:1 맞춤케어</p>
                        </div>
                        <p class="main_cont02_item_title main_cont02_item_title01 sortsmillgoudy fz_48"><span class="fz_75 lh_1">2</span>% Specialist’s Tailor made Care</p>
                    </a>
                    <div id="daily-ritual" class="main_cont02_item_box main_cont02_item_box01">
                        <figure>
                            <picture>
                                <img src="<?php echo G5_THEME_URL?>/img/main_cont02_item_img01.png" class="main_cont02_item_img" alt="">
                                <div class="main_cont02_item_img01_icon">
                                    <img src="<?php echo G5_THEME_URL?>/img/main_cont02_item_img01_icon.png" alt="">
                                </div>
                            </picture>
                            <a href="javascript:void(0);" class="main_cont02_item_arrow" title="View More">
                                <span class="sortsmillgoudy fz_14 ls_2 lh_1">View More</span>
                            </a>
                        </figure>
                        <div class="main_cont02_item_small_img main_cont02_item_small_img01">
                            <img src="<?php echo G5_THEME_URL?>/img/main_cont02_item_small_img01.png" alt="">
                        </div>
                        <div class="main_cont02_item_small_img main_cont02_item_small_img02">
                            <img src="<?php echo G5_THEME_URL?>/img/main_cont02_item_small_img02.png" alt="">
                        </div>
                    </div>
                </li>
                <li class="main_cont02_item main_cont02_item02">
                    <a href="javascript:void(0);" class="main_cont02_item_text">
                        <div class="main_cont02_item_top_text main_cont02_item_top_text02">
                            <p class="fz_18 normal ls_2 lh_16">02. 두피부터 발 끝까지 힐링, 피부를 위한 토탈 케어 시스템</p>
                        </div>
                        <p class="main_cont02_item_title main_cont02_item_title02 sortsmillgoudy fz_48">All about Skin, All in one Care</p>
                    </a>
                    <div id="daily-ritual" class="main_cont02_item_box main_cont02_item_box03">
                        <figure>
                            <picture>
                                <img src="<?php echo G5_THEME_URL?>/img/main_cont02_item_img03.png" class="main_cont02_item_img" alt="">
                            </picture>
                            <a href="javascript:void(0);" class="main_cont02_item_arrow" title="View More">
                                <span class="sortsmillgoudy fz_14 ls_2 lh_1">View More</span>
                            </a>
                        </figure>
                        <div class="main_cont02_item_small_img main_cont02_item_small_img05">
                            <img src="<?php echo G5_THEME_URL?>/img/main_cont02_item_small_img03.png" alt="">
                        </div>
                        <div class="main_cont02_item_small_img main_cont02_item_small_img06">
                            <img src="<?php echo G5_THEME_URL?>/img/main_cont02_item_small_img02.png" alt="">
                        </div>
                    </div>
                </li>
                <li class="main_cont02_item main_cont02_item03">
                    <a href="javascript:void(0);" class="main_cont02_item_text">
                        <div class="main_cont02_item_top_text main_cont02_item_top_text02">
                            <p class="fz_18 normal ls_2 lh_16">03. 우리가족 피부주치의 오라클,  변함 없는 신뢰와 노하우</p>
                        </div>
                        <p class="main_cont02_item_title main_cont02_item_title03 sortsmillgoudy fz_48">Since 2012, Always Oracle</p>
                    </a>
                    <div id="clean-beauty" class="main_cont02_item_box main_cont02_item_box02">
                        <figure>
                            <picture>
                                <img src="<?php echo G5_THEME_URL?>/img/main_cont02_item_img02.png" class="main_cont02_item_img" alt="">
                            </picture>
                            <a href="javascript:void(0);" class="main_cont02_item_arrow" title="View More">
                                <span class="sortsmillgoudy fz_14 ls_2 lh_1">View More</span>
                            </a>
                        </figure>
                        <div class="main_cont02_item_small_img main_cont02_item_small_img03">
                            <img src="<?php echo G5_THEME_URL?>/img/main_cont02_item_small_img03.png" alt="">
                        </div>
                        <div class="main_cont02_item_small_img main_cont02_item_small_img04">
                            <img src="<?php echo G5_THEME_URL?>/img/main_cont02_item_small_img04.png" alt="">
                        </div>
                    </div>
                </li>
            </ul>
            <!-- //마우스 오버 시 마우스 따라다니는 이미지 효과 -->
        </div>
        <div class="main_cont02_m m_cont">
            <div class="swiper-container main_cont02_m_slider_container">
            <div class="swiper-wrapper">
                <div class="swiper-slide main_cont02_m_slider main_cont02_m_slider01">
                    <div class="main_cont02_item_title ta_c m_20">
                        <p class="main_cont02_item_title01 sortsmillgoudy fz_55 lh_14"><span class="fz_85 lh_1">2</span>% Specialist’s Tailor <br>made Care</p>
                    </div>
                    <div class="main_cont02_m_slider_img main_cont02_m_slider_img01 m_20">
                        <img src="<?php echo G5_THEME_URL?>/img/main_cont02_m_slider_img01.png" alt="">
                    </div>
                    <div class="main_cont02_m_slider_text_wrap ta_c">
                        <div class="main_cont02_m_slider_text01">
                            <p class="fz_30 normal">대한민국 2% 피부과전문의가 <br>상담부터 시술까지 1:1 맞춤케어</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide main_cont02_m_slider main_cont02_m_slider02">
                    <div class="main_cont02_item_title ta_c m_20">
                        <p class="main_cont02_item_title02 sortsmillgoudy fz_55 lh_14">All about Skin, <br>All in one Care</p>
                    </div>
                    <div class="main_cont02_m_slider_img main_cont02_m_slider_img02 m_20">
                        <img src="<?php echo G5_THEME_URL?>/img/main_cont02_m_slider_img02.png" alt="">
                    </div>
                    <div class="main_cont02_m_slider_text_wrap ta_c">
                        <div class="main_cont02_m_slider_text02">
                            <p class="fz_30 normal">두피부터 발 끝까지 힐링, <br>피부를 위한 토탈 케어 시스템</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide main_cont02_m_slider main_cont02_m_slider03">
                    <div class="main_cont02_item_title ta_c m_20">
                        <p class="main_cont02_item_title03 sortsmillgoudy fz_55 lh_14">Since 2012, <br>Always Oracle</p>
                    </div>
                    <div class="main_cont02_m_slider_img main_cont02_m_slider_img03 m_20">
                        <img src="<?php echo G5_THEME_URL?>/img/main_cont02_m_slider_img03.png" alt="">
                    </div>
                    <div class="main_cont02_m_slider_text_wrap ta_c">
                        <div class="main_cont02_m_slider_text03">
                            <p class="fz_30 normal">우리가족 피부주치의 오라클 <br>변함 없는 신뢰와 노하우</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-scrollbar"></div>
        </div>
        </div>
    </article>
    
    <article class="main_cont03 sect" id="sect03" data="sect02_m">
        <div class="equipment-sect main-full-sect p_r waypoint">
            <ul class="equipment__list flex_row big-cursor">
                <li class="column_quarter column_quarter01 reveal delay-200">
                    <div class="equipment__list-inner">
                        <div class="equipment__list-titles ta_l">
                            <a href="javascript:void(0);">
                                <h3 class="fz_40 ls_2 nanummyeongjo light c-w m_10">피부<span class="medium">질환</span>센터</h3>
                                <p class="fz_16 ls_2 light c-w m_40">
                                    피부 근본부터 바로잡는 질환 집중 치료
                                </p>
                            </a>
                            <a href="javascript:void(0);">
                                <div class="equipment__list-titles_arrow m_40">
                                    <img src="<?php echo G5_THEME_URL?>/img/equipment__list-titles_arrow_w.png" alt="">
                                </div>
                            </a>
                            
                            <ul class="unorder_list unorder_list01 light">
                                <li class="unorder_list_li_left fz_16 m_10">
                                    <a href="javascript:void(0);">백반증</a>
                                </li>
                                <li class="unorder_list_li_right fz_16 m_10">
                                    <a href="javascript:void(0);">손발톱 무좀</a>
                                </li>
                                <li class="unorder_list_li_left fz_16 m_10">
                                    <a href="javascript:void(0);">건선</a>
                                </li>
                                <li class="unorder_list_li_right fz_16 m_10">
                                    <a href="javascript:void(0);">만성습집/손발진 습진</a>
                                </li>
                                <li class="unorder_list_li_left fz_16 m_10">
                                    <a href="javascript:void(0);">아토피 피부염</a>
                                </li>
                                <li class="unorder_list_li_right fz_16 m_10">
                                    <a href="javascript:void(0);">화상/상처처리</a>
                                </li>
                                <li class="unorder_list_li_left fz_16 m_10">
                                    <a href="javascript:void(0);">광선치료 클리닉</a>
                                </li>
                                <li class="unorder_list_li_right fz_16 m_10">
                                    <a href="javascript:void(0);">알레르기/두드러기/접촉피부염</a>
                                </li>
                                <li class="unorder_list_li_left fz_16 m_10">
                                    <a href="javascript:void(0);">사마귀/티눈</a>
                                </li>
                                <li class="unorder_list_li_right fz_16">
                                    <a href="javascript:void(0);">원형탈모</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="column_quarter column_quarter02 reveal delay-400">
                    <div class="equipment__list-inner">
                        <div class="equipment__list-titles ta_l">
                            <a href="javascript:void(0);">
                                <h3 class="fz_40 ls_2 nanummyeongjo light c-w m_10">피부<span class="medium">미용</span>센터</h3>
                                <p class="fz_16 ls_2 light c-w m_40">
                                    견고한 탄력, 세련된 라인을 완성하는 미용 진료
                                </p>
                            </a>
                            <a href="javascript:void(0);">
                                <div class="equipment__list-titles_arrow m_40">
                                    <img src="<?php echo G5_THEME_URL?>/img/equipment__list-titles_arrow_w.png" alt="">
                                </div>
                            </a>
                            
                            <ul class="unorder_list unorder_list02 light">
                                <li class="fz_16 m_10">
                                    <a href="javascript:void(0);">여드름</a>
                                </li>
                                <li class="fz_16 m_10">
                                    <a href="javascript:void(0);">흉터</a>
                                </li>
                                <li class="fz_16 m_10">
                                    <a href="javascript:void(0);">미백/홍조</a>
                                </li>
                                <li class="fz_16 m_10">
                                    <a href="javascript:void(0);">문신제거</a>
                                </li>
                                <li class="fz_16 m_10">
                                    <a href="javascript:void(0);">안티에이징</a>
                                </li>
                                <li class="fz_16 m_10">
                                    <a href="javascript:void(0);">기타치료</a>
                                </li>
                                <li class="fz_16 m_10">
                                    <a href="javascript:void(0);">미용성형</a>
                                </li>
                                <li class="fz_16">
                                    <a href="javascript:void(0);">여성진료</a>
                                </li>
                                <li class="fz_16 m_10">
                                    <a href="javascript:void(0);">제모/탈모</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="column_quarter column_quarter03 reveal delay-600">
                    <div class="equipment__list-inner">
                        <div class="equipment__list-titles ta_l">
                            <a href="javascript:void(0);">
                                <h3 class="fz_40 ls_2 nanummyeongjo light c-w m_10">피부<span class="medium">외과</span>센터</h3>
                                <p class="fz_16 ls_2 light c-w m_40">
                                    피부 종양부터 외상까지 전문적인 피부 수술
                                </p>
                            </a>
                            <a href="javascript:void(0);">
                                <div class="equipment__list-titles_arrow m_40">
                                    <img src="<?php echo G5_THEME_URL?>/img/equipment__list-titles_arrow_w.png" alt="">
                                </div>
                            </a>
                            
                            <ul class="unorder_list light">
                                <li class="fz_16 m_10">
                                    <a href="javascript:void(0);">피부양성종양</a>
                                </li>
                                <li class="fz_16 m_10">
                                    <a href="javascript:void(0);">피부조직검사</a>
                                </li>
                                <li class="fz_16">
                                    <a href="javascript:void(0);">깊은점/큰점/선천모반</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="column_quarter column_quarter04 reveal delay-800">
                    <div class="equipment__list-inner">
                        <div class="equipment__list-titles ta_l">
                            <a href="javascript:void(0);">
                                <h3 class="fz_40 ls_2 nanummyeongjo light c-w m_10">피부<span class="medium">기능의학</span>센터</h3>
                                <p class="fz_16 ls_2 light c-w m_40">
                                    몸과 피부의 밸런스를 맞추는 이너 뷰티 케어
                                </p>
                            </a>
                            <a href="javascript:void(0);">
                                <div class="equipment__list-titles_arrow m_40">
                                    <img src="<?php echo G5_THEME_URL?>/img/equipment__list-titles_arrow_w.png" alt="">
                                </div>
                            </a>
                            
                            <ul class="unorder_list light">
                                <li class="fz_16">
                                    <a href="javascript:void(0);">피부기능의학</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
            <div class="equipment-menus">
                <div class="equipment-menu-item item_img01"><div class="item_bg item_bg01"></div></div>
                <div class="equipment-menu-item item_img02"><div class="item_bg item_bg02"></div></div>
                <div class="equipment-menu-item item_img03"><div class="item_bg item_bg03"></div></div>
                <div class="equipment-menu-item item_img04"><div class="item_bg item_bg04"></div></div>
            </div>
            <div class="equipment__bg"></div>
        </div>
    </article>
    
    <article class="main_cont04 sect" id="sect04" data="sect04_m">
        
        <canvas id="pixie"></canvas>
        <div class="container"></div>
        
        <div class="main_cont04_wrap">
            <div class="main_cont04_text">
                <p class="main_cont04_text01 fz_18 ls_2 normal ta_c m_20 pc_cont_480">특별한 당신의 피부를 더 특별하게 만드는 오라클 리추얼</p>
                <p class="main_cont04_text01 fz_18 ls_2 nanummyeongjo normal ta_c m_20 m_cont_480">특별한 당신의 피부를 더 특별하게 만드는 <br>오라클 리추얼</p>
                <p class="main_cont04_text02 fz_60 sortsmillgoudy ta_l pc_cont_480">
                    Special skincare ritual
                </p>
            </div>
            <div class="main_cont04_video_wrap">
                <div class="main_cont04_video_box">
                    <video id="main_cont04_vodeo" style="position:relative; width: 100%; height: 100%;" width="100%" height="100%" poster="<?php echo G5_THEME_URL?>/img/main_cont04_video_bg.jpg" preload="none" autoplay loop muted playsinline webkit-playsinline>
                        <source type="video/mp4" src="<?php echo G5_THEME_URL?>/video/main_cont02_video01_v2.mp4">
                    </video>
                </div>
            </div>
            <div class="main_cont04_text">
                <p class="main_cont04_text02 fz_60 sortsmillgoudy ta_l m_cont_480">
                    Special skincare ritual
                </p>
                <p class="main_cont04_text03 fz_60 sortsmillgoudy ta_r">
                    for your Special skin
                </p>
            </div>
        </div>
    </article>
    
    <article class="main_cont05 sect" id="sect05">
        <div class="main_cont05_process_desc_sect pc_process-desc-sect">
            <div class="main_cont05_process_desc_wrap">
                <div class="main_cont05_fix_outer">
                    <div class="main_cont05_fix_cnt">
                        <p class="main_cont05_fix_text01 fz_30 ls_2 ta_l sortsmillgoudy noemal gs_reveal" data-gs-delay="300">First Miracle for skin</p>
                        <p class="main_cont05_fix_text02 fz_40 ls_2 ta_l nanummyeongjo noemal m_10 gs_reveal" data-gs-delay="600"><span class="bold">처음부터</span> 오라클</p>
                        <p class="main_cont05_fix_text03 fz_17 ls_2 ta_l noemal gs_reveal" data-gs-delay="900">
                            <span class="bold">대한민국 2% 피부과전문의가 직접</span> 케어하는, <br>
                            오라클에서 시작하세요.
                        </p>
                    </div>
                </div>
                <div class="main_cont05_scroll_outer">
                    <div class="main_cont05_process_box flex_row fw fd_c jc_center center">
                        <div class="main_cont05_process_box01 flex_row fw fd_c jc_center al_fs">
                            <div class="main_cont05_process_box_img">
                                <img src="<?php echo G5_THEME_URL?>/img/main_cont05_list_img01.png" alt=""> 
                            </div>
                            <div class="main_cont05_process_box_text main_cont05_process_box_text01">
                                <h3 class="main_cont05_prs_tit fz_25 ls_2 lh_14 nanummyeongjo noemal m_10">
                                    처음부터 끝까지 <br>
                                    <span class="bold">2% 피부과전문의</span> 책임진료
                                </h3>
                                <p class="main_cont05_prs_desc fz_16 ls_2 noemal m_20">
                                    일회성 진료가 아닌, 피부 고민의 <br>
                                    처음부터 마지막까지 대한민국 2% 피부과전문의가 <br>
                                    함께하는 1:1 책임 진료
                                </p>
                                <a href="javascript:void(0);">
                                    <div class="main_cont05_prs_arrow">
                                        <img src="<?php echo G5_THEME_URL?>/img/youtube_more_btn.png" alt="">
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="main_cont05_process_box flex_row fw fd_c jc_center center">
                        <div class="main_cont05_process_box02 flex_row fw fd_c jc_center al_fe">
                            <div class="main_cont05_process_box_img">
                                <img src="<?php echo G5_THEME_URL?>/img/main_cont05_list_img02.png" alt=""> 
                            </div>
                            <div class="main_cont05_process_box_text main_cont05_process_box_text02">
                                <h3 class="main_cont05_prs_tit fz_25 ls_2 lh_14 nanummyeongjo noemal m_10">
                                    처음부터 개선, <br>
                                    <span class="bold">근본 치료</span>
                                </h3>
                                <p class="main_cont05_prs_desc fz_16 ls_2 noemal m_20">
                                    Mark-vu로 피부질환 원인부터 <br>
                                    정확하게 분석,  피부 기초부터 <br>
                                    탄탄해지는 근본 치료
                                </p>
                                <a href="javascript:void(0);">
                                    <div class="main_cont05_prs_arrow">
                                        <img src="<?php echo G5_THEME_URL?>/img/youtube_more_btn.png" alt="">
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="main_cont05_process_box flex_row fw fd_c jc_center center">
                        <div class="main_cont05_process_box01 flex_row fw fd_c jc_center al_fs">
                            <div class="main_cont05_process_box_img">
                                <img src="<?php echo G5_THEME_URL?>/img/main_cont05_list_img03.png" alt=""> 
                            </div>
                            <div class="main_cont05_process_box_text main_cont05_process_box_text03">
                                <h3 class="main_cont05_prs_tit fz_25 ls_2 lh_14 nanummyeongjo noemal m_10">
                                    우리가족 첫 피부과, <br>
                                    <span class="bold">우리가족 피부주치의</span> 오라클
                                </h3>
                                <p class="main_cont05_prs_desc fz_16 ls_2 noemal m_20">
                                    아이의 아토피부터 어른의 피부 노화, <br>
                                    탈모까지 케어하는  가족 피부 주치의 시스템
                                </p>
                                <a href="javascript:void(0);">
                                    <div class="main_cont05_prs_arrow">
                                        <img src="<?php echo G5_THEME_URL?>/img/youtube_more_btn.png" alt="">
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="main_cont05_process_box flex_row fw fd_c jc_center center">
                        <div class="main_cont05_process_box02 flex_row fw fd_c jc_center al_fe">
                            <div class="main_cont05_process_box_img">
                                <img src="<?php echo G5_THEME_URL?>/img/main_cont05_list_img04.png" alt=""> 
                            </div>
                            <div class="main_cont05_process_box_text main_cont05_process_box_text04">
                                <h3 class="main_cont05_prs_tit fz_25 ls_2 lh_14 nanummyeongjo noemal m_10">
                                    <span class="bold">최초 복합</span> <br>
                                    레이저 솔루션 도입
                                </h3>
                                <p class="main_cont05_prs_desc fz_16 ls_2 noemal m_20">
                                    인천에서 처음으로 최상의 결과를 <br>
                                    완성하기 위한 다양한 레이저 콜라보레이션 <br>
                                    치료 진행
                                </p>
                                <a href="javascript:void(0);">
                                    <div class="main_cont05_prs_arrow">
                                        <img src="<?php echo G5_THEME_URL?>/img/youtube_more_btn.png" alt="">
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="main_cont05_process_box flex_row fw fd_c jc_center center">
                        <div class="main_cont05_process_box01 flex_row fw fd_c jc_center al_fs">
                            <div class="main_cont05_process_box_img">
                                <img src="<?php echo G5_THEME_URL?>/img/main_cont05_list_img05.png" alt=""> 
                            </div>
                            <div class="main_cont05_process_box_text main_cont05_process_box_text05">
                                <h3 class="main_cont05_prs_tit fz_25 ls_2 lh_14 nanummyeongjo noemal m_10">
                                    <span class="bold">최초 글로벌 <br>
                                    진료 서비스</span> 도입
                                </h3>
                                <p class="main_cont05_prs_desc fz_16 ls_2 noemal m_20">
                                    인천에서 처음으로 외국인 환자를 위한 <br>
                                    글로벌 진료 서비스(통역) 도입
                                </p>
                                <a href="javascript:void(0);">
                                    <div class="main_cont05_prs_arrow">
                                        <img src="<?php echo G5_THEME_URL?>/img/youtube_more_btn.png" alt="">
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="main_cont05_process_desc_sect m_process-desc-sect">
            <div class="main_cont05_process_desc_wrap_m">
                <div class="main_cont05_fix_outer_m">
                    <div class="main_cont05_fix_cnt_m">
                        <p class="main_cont05_fix_text01 fz_30 ls_2 ta_c sortsmillgoudy noemal gs_reveal" data-gs-delay="300">First Miracle for skin</p>
                        <p class="main_cont05_fix_text02 fz_40 ls_2 ta_c nanummyeongjo noemal m_10 gs_reveal" data-gs-delay="600"><span class="bold">처음부터</span> 오라클</p>
                        <p class="main_cont05_fix_text03 fz_17 ls_2 ta_c noemal gs_reveal" data-gs-delay="900">
                            <span class="bold">대한민국 2% 피부과전문의가 직접</span> 케어하는, <br>
                            오라클에서 시작하세요.
                        </p>
                    </div>
                </div>
                <div class="main_cont05_scroll_outer_m">
                    <div class="main_cont05_process_box_m flex_row fw fd_c jc_center center">
                        <div class="main_cont05_process_box01_m flex_row fw fd_c jc_fs al_fs">
                            <div class="main_cont05_process_box_img_m main_cont05_process_box_img01_m">
                                <img src="<?php echo G5_THEME_URL?>/img/main_cont05_list_img01.png" alt=""> 
                            </div>
                            <div class="main_cont05_process_box_text_m main_cont05_process_box_text01_m">
                                <h3 class="main_cont05_prs_tit_m fz_26 ls_2 lh_14 nanummyeongjo noemal m_10">
                                    처음부터 끝까지 <br>
                                    <span class="bold">2% 피부과전문의</span> 책임진료
                                </h3>
                                <p class="main_cont05_prs_desc_m fz_16 ls_2 noemal m_20">
                                    일회성 진료가 아닌, 피부 고민의 <br>
                                    처음부터 마지막까지 대한민국 2% 피부과전문의가 <br>
                                    함께하는 1:1 책임 진료
                                </p>
                                <a href="javascript:void(0);">
                                    <div class="main_cont05_prs_arrow">
                                        <img src="<?php echo G5_THEME_URL?>/img/youtube_more_btn.png" alt="">
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="main_cont05_process_box_m flex_row fw fd_c jc_center center">
                        <div class="main_cont05_process_box02_m flex_row fw fd_c jc_fe al_fe">
                            <div class="main_cont05_process_box_img_m main_cont05_process_box_img02_m">
                                <img src="<?php echo G5_THEME_URL?>/img/main_cont05_list_img02.png" alt=""> 
                            </div>
                            <div class="main_cont05_process_box_text_m main_cont05_process_box_text02_m">
                                <h3 class="main_cont05_prs_tit_m fz_26 ls_2 lh_14 nanummyeongjo noemal m_10">
                                    처음부터 개선, <br>
                                    <span class="bold">근본 치료</span>
                                </h3>
                                <p class="main_cont05_prs_desc_m fz_16 ls_2 noemal m_20">
                                    Mark-vu로 피부질환 원인부터 <br>
                                    정확하게 분석,  피부 기초부터 <br>
                                    탄탄해지는 근본 치료
                                </p>
                                <a href="javascript:void(0);">
                                    <div class="main_cont05_prs_arrow">
                                        <img src="<?php echo G5_THEME_URL?>/img/youtube_more_btn.png" alt="">
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="main_cont05_process_box_m flex_row fw fd_c jc_center center">
                        <div class="main_cont05_process_box01_m flex_row fw fd_c jc_fs al_fs">
                            <div class="main_cont05_process_box_img_m main_cont05_process_box_img03_m">
                                <img src="<?php echo G5_THEME_URL?>/img/main_cont05_list_img03.png" alt=""> 
                            </div>
                            <div class="main_cont05_process_box_text_m main_cont05_process_box_text03_m">
                                <h3 class="main_cont05_prs_tit_m fz_26 ls_2 lh_14 nanummyeongjo noemal m_10">
                                    우리가족 첫 피부과, <br>
                                    <span class="bold">우리가족 피부주치의</span> 오라클
                                </h3>
                                <p class="main_cont05_prs_desc_m fz_16 ls_2 noemal m_20">
                                    아이의 아토피부터 어른의 피부 노화, <br>
                                    탈모까지 케어하는  가족 피부 주치의 시스템
                                </p>
                                <a href="javascript:void(0);">
                                    <div class="main_cont05_prs_arrow">
                                        <img src="<?php echo G5_THEME_URL?>/img/youtube_more_btn.png" alt="">
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="main_cont05_process_box_m flex_row fw fd_c jc_center center">
                        <div class="main_cont05_process_box02_m flex_row fw fd_c jc_fe al_fe">
                            <div class="main_cont05_process_box_img_m main_cont05_process_box_img04_m">
                                <img src="<?php echo G5_THEME_URL?>/img/main_cont05_list_img04.png" alt=""> 
                            </div>
                            <div class="main_cont05_process_box_text_m main_cont05_process_box_text04_m">
                                <h3 class="main_cont05_prs_tit_m fz_26 ls_2 lh_14 nanummyeongjo noemal m_10">
                                    <span class="bold">최초 복합</span> <br>
                                    레이저 솔루션 도입
                                </h3>
                                <p class="main_cont05_prs_desc_m fz_16 ls_2 noemal m_20">
                                    인천에서 처음으로 최상의 결과를 <br>
                                    완성하기 위한 다양한 레이저 콜라보레이션 <br>
                                    치료 진행
                                </p>
                                <a href="javascript:void(0);">
                                    <div class="main_cont05_prs_arrow">
                                        <img src="<?php echo G5_THEME_URL?>/img/youtube_more_btn.png" alt="">
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="main_cont05_process_box_m flex_row fw fd_c jc_center center">
                        <div class="main_cont05_process_box01_m flex_row fw fd_c jc_fs al_fs">
                            <div class="main_cont05_process_box_img_m main_cont05_process_box_img05_m">
                                <img src="<?php echo G5_THEME_URL?>/img/main_cont05_list_img05.png" alt=""> 
                            </div>
                            <div class="main_cont05_process_box_text_m main_cont05_process_box_text05_m">
                                <h3 class="main_cont05_prs_tit_m fz_26 ls_2 lh_14 nanummyeongjo noemal m_10">
                                    <span class="bold">최초 글로벌 <br>
                                    진료 서비스</span> 도입
                                </h3>
                                <p class="main_cont05_prs_desc_m fz_16 ls_2 noemal m_20">
                                    인천에서 처음으로 외국인 환자를 위한 <br>
                                    글로벌 진료 서비스(통역) 도입
                                </p>
                                <a href="javascript:void(0);">
                                    <div class="main_cont05_prs_arrow">
                                        <img src="<?php echo G5_THEME_URL?>/img/youtube_more_btn.png" alt="">
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>
    
    <article class="main_cont06 sect" id="sect06"  data="sect04_m">
        <div class="main_cont06_wrap">
            <div class="main_cont06_text_wrap">
                <div class="main_cont06_text_box ta_c">
                    <div class="main_cont06_title m_20">
                        <p class="main_cont06_title01 fz_50 ls_2 sortsmillgoudy gs_reveal pc_cont_480">Oracle TV</p>
                        <p class="main_cont06_title01 fz_50 ls_2 lh_1 sortsmillgoudy gs_reveal m_cont_480"><span>Oracle TV</span><img src="<?php echo G5_THEME_URL?>/img/youtube_icon_m.png" alt=""></p>
                    </div>
                    <div class="main_cont06_text flex_row sb center m_20">
                        <div class="main_cont06_text01 flex_row jc_fs center gs_reveal" data-gs-delay="300">
                            <img src="<?php echo G5_THEME_URL?>/img/youtube_icon.png" alt=""> 
                            <p class="fz_17 normal ls_2">
                                <span class="fz_20 sortsmillgoudy">&nbsp;[Youtube]</span>&ensp;피부과 의사는 어떤 시술을 받는지 궁금하시죠?
                            </p>
                        </div>
                        <a href="javascript:void(0);">
                            <div class="youtube_more_arrow">
                                <img src="<?php echo G5_THEME_URL?>/img/youtube_more_btn.png" alt="">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="yt-sect-wrapper flex_row jc_center">
                <div class="yt-video-area">
                    <div class="play-area">
                        <iframe src="https://www.youtube.com/embed/u67bjb6X7V4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                    </div>
                    <div class="yt-video-area-text m_cont_480">
                        <div class="text-wrap fz_18 ls_2 light btn_arrow btn_arrow2">
                            <p class="m_5 sortsmillgoudy">[Youtube]</p>
                            <div class="m_yt_text_btn flex_row sb center">
                                <a href="javascript:void(0);" target="_blank">
                                    <p class="yt-tit-target fz_24 lh_13 normal">코로나 앓고났더니 피부에 뭐가 나고 가려워요~ 코로나는 호흡기 질환인데 피부에서 후유증이 나타나는 이유?</p>
                                </a>
                                <a href="javascript:void(0);">
                                    <div class="youtube_more_arrow">
                                        <img src="<?php echo G5_THEME_URL?>/img/youtube_more_btn.png" alt="">
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="yt-thumb-area pc_cont_480">
                    <div class="yt-thumb-scroll">
                        <ul>
                            <li data-yt-url="TPf5EL1_Jk0">
                                <div class="flex_row center m_10">
                                    <div class="img-wrap"><img src="https://img.youtube.com/vi/TPf5EL1_Jk0/mqdefault.jpg"></div>
                                    <div class="text-wrap fz_14 light ls_2 lh_15">
                                        <p>
                                            <span class="sortsmillgoudy">[Orakkyu TV]</span> <br>
                                            <span class="yt-tit-txt fz_15 medium">잘만 받으면 성형수술급 쁘띠시술 효과! 하지만 당신이 쁘띠 시술을 실패한 이유는?</span>
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li data-yt-url="28WSkPkkE14">
                                <div class="flex_row center m_10">
                                    <div class="img-wrap"><img src="https://img.youtube.com/vi/28WSkPkkE14/mqdefault.jpg"></div>
                                    <div class="text-wrap fz_14 light ls_2 lh_15">
                                        <p>
                                            <span class="sortsmillgoudy">[Orakkyu TV]</span> <br>
                                            <span class="yt-tit-txt fz_15 medium">문신제거 레이저 10번 받으면 얼마나 지워질까?</span>
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li data-yt-url="xEK8iiZAWxI">
                                <div class="flex_row center m_10">
                                    <div class="img-wrap"><img src="https://img.youtube.com/vi/xEK8iiZAWxI/mqdefault.jpg"></div>
                                    <div class="text-wrap fz_14 light ls_2 lh_15">
                                        <p>
                                            <span class="sortsmillgoudy">[Orakkyu TV]</span> <br>
                                            <span class="yt-tit-txt fz_15 medium">써마지 효과 없던데? 왜 없어 '보이는지' 해명합니다... 피부과의사가 악플에 대처하는 자세... 구독자 1만 특집 '악플읽기!'</span>
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li data-yt-url="aTRZDQOKIHQ">
                                <div class="flex_row center m_10">
                                    <div class="img-wrap"><img src="https://img.youtube.com/vi/aTRZDQOKIHQ/mqdefault.jpg"></div>
                                    <div class="text-wrap fz_14 light ls_2 lh_15">
                                        <p>
                                            <span class="sortsmillgoudy">[Orakkyu TV]</span> <br>
                                            <span class="yt-tit-txt fz_15 medium">상처 드레싱 올바르게 하는 방법. + 테이프 알러지 있는 분들을 위한 드레싱용 밴드도 알려드립니다!</span>
                                        </p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </article>
    
</main>

<?php
include_once(G5_THEME_PATH.'/tail.php');