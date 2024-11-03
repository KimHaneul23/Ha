<?php
include_once('./_common.php');
//if (G5_IS_MOBILE) {
//    include_once(G5_MOBILE_PATH.'/index.php');
//    return;
//}


// 웹사이트 타이틀
$g5['title'] = '여드름 프로그램';

include_once(G5_PATH.'/head.php');
?>
    
    <script>
        $(document).ready(function(){
            var window_width = $(window).width();
            if (window_width <= 480) {
                $('.main-header').addClass('color_change');
                $('.ht-inner').addClass('sub_header');
            } else {
                $('.main-header').addClass('color_change');
                $('.ht-inner').addClass('sub_header');
            }
        });
    </script>
    <main id="content">
        <article class="sub_content01" id="startContent">
            <div class="sub_top_view sub2_1_top_view">
                <div class="sub_top_view_bg sub2_1_top_view_bg"></div>
                <div class="sub_top_view_text_wrap sub2_1_top_view_text_wrap ta_c">
                    <div class="sub_top_view_text01 sub2_1_top_view_text01">
                        <p class="sortsmillgoudy fz_30 lh_14 ls_2 sub_text_ani">
                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub_top_view_text_icon.png" alt="">
                            Acne Program
                        </p>
                    </div>
                    <div class="sub_top_view_text02 sub2_1_top_view_text02 m_20">
                        <p class="fz_40 lh_14 ls_2 medium sub_text_ani">
                            여드름 프로그램
                        </p>
                    </div>
                    <div class="sub_top_view_text03 sub2_1_top_view_text03">
                        <p class="fz_16 lh_14 ls_2 normal sub_text_ani">
                            10년 이상의 여드름 치료 노하우를 바탕으로
                        </p>
                    </div>
                    <div class="sub_top_view_text04 sub2_1_top_view_text04">
                        <p class="fz_16 lh_14 ls_2 normal sub_text_ani">
                            깨끗한 피부를 회복하는 근본적인 여드름 치료 프로그램
                        </p>
                    </div>
                </div>
            </div>
            
            <div class="mouse_scroll main_slide scroll_color_change">
                <div class="mouse">
                    <div class="wheel"></div>
                </div>
                <div>
                    <span class="m_scroll_arrows m_scroll_arrows_one"></span>
                    <span class="m_scroll_arrows m_scroll_arrows_two"></span>
                </div>
            </div>
        </article>
        
        <section class="sub_tab_cont sub2_1_tab_cont bg_fa pt_60">
            <article class="sub_cont02 sub2_1_cont02">
                <div class="sub_tab">
                    <ul class="sub_tab_ul flex_row jc_center center">
                        <li id="sub_tablinks01" class="sub_tab_li sub_tablinks active" onclick="opensubtab(event, 'sub_tabcontent1')">
                            <a href="javascript:void(0);">
                                <p class="fz_16 ta_c">여드름 프로그램</p>
                            </a>
                        </li>
                        <li id="sub_tablinks02" class="sub_tab_li sub_tablinks" onclick="opensubtab(event, 'sub_tabcontent2')">
                            <a href="javascript:void(0);">
                                <p class="fz_16 ta_c">여드름 흉터</p>
                            </a>
                        </li>
                        <li id="sub_tablinks03" class="sub_tab_li sub_tablinks" onclick="opensubtab(event, 'sub_tabcontent3')">
                            <a href="javascript:void(0);">
                                <p class="fz_16 ta_c">블랙헤드</p>
                            </a>
                        </li>
                        <li id="sub_tablinks04" class="sub_tab_li sub_tablinks" onclick="opensubtab(event, 'sub_tabcontent4')">
                            <a href="javascript:void(0);">
                                <p class="fz_16 ta_c">모공</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </article>
            
            <article class="sub_tabcontent_wrap sub2_1_1_tabcontent_wrap">
                <div class="sub_cont03 sub2_1_1_cont03 sub_tabcontent sub_tabcontent1" id="sub_tabcontent1">
                    <div class="sub_tabcontent01_wrap">
                        <div class="sub_cont_box sub2_1_1_cont1_1_box bg_fa pd_120">
                            <div class="sub_tabcontent_container flex_row fw sa center">
                                <div class="sub_cont_title sub2_1_1_cont_title_left title_left">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                                    <p class="sub_cont_title_text01 fz_32 lh_14 ls_2 light m_40">
                                        반복되는 재발을 막는 <br>
                                        <span class="medium">근본적인 여드름 치료</span>
                                    </p>
                                    <p class="pc_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 light m_20">
                                        인천 오라클의 여드름 프로그램은 일차원적인 치료가 아닌, <br>
                                        레이저 치료부터 약물 치료, 압출 관리 등을 적용한 다각도 치료로서, <br>
                                        여드름의 뿌리를 뽑는 ALL KILL 프로그램입니다.
                                    </p>
                                    <p class="m_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 light m_20">
                                        인천 오라클의 여드름 프로그램은 일차원적인 치료가 아닌, 
                                        레이저 치료부터 약물 치료, 압출 관리 등을 적용한 다각도 치료로서, 
                                        여드름의 뿌리를 뽑는 ALL KILL 프로그램입니다.
                                    </p>
                                    <p class="pc_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light">
                                        단순히 눈에 보이는 여드름 증상을 호전시키는 치료가 아닌, <br>
                                        반복되는 여드름의 근본적인 원인부터 해소합니다.
                                    </p>
                                    <p class="m_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light">
                                        단순히 눈에 보이는 여드름 증상을 호전시키는 치료가 아닌, 
                                        반복되는 여드름의 근본적인 원인부터 해소합니다.
                                    </p>
                                </div>
                                <div class="sub_cont_doct_video sub2_1_1_tabcontent01_img img_right ta_r">
                                    <div class="video-real-selfie small-video-wrap" style="overflow:hidden;">
                                        <div class="video-real-selfie-wrapper" style="position: relative; padding:56.25% 0 0;">
                                            <video id="realSelfieVideo" poster="<?php echo G5_THEME_URL?>/sub/img/sub2_1_1_cont01_video_bg01.jpg" preload="none" style="position: absolute; top:0; left:0; width:100%;"  autoplay muted loop playsinline>
                                                <source src="<?php echo G5_THEME_URL?>/video/sub2_1_1_cont01_video01.mp4" type="video/mp4">
                                            </video>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="sub_cont_box sub2_1_1_cont1_2_box pd_120">
                            <div class="sub_tabcontent_container flex_row fw jc_center al_fs">
                                <div class="sub_cont_title sub2_1_1_cont_title_center ta_c">
                                    <p class="sub_cont_title_text01 fz_22 lh_14 ls_2 normal gs_reveal" data-gs-delay="200">
                                        여드름
                                    </p>
                                    <p class="sub_cont_title_text02 sortsmillgoudy fz_60 lh_16 ls_2 light gs_reveal m_60" data-gs-delay="400">
                                        Before & After
                                    </p>
                                </div>
                                <div class="sub2_1_1_tabcontent02_ba">
                                    <div class="swiper-container sub2_1_ba_slider_cont">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide sub2_1_1_ba_slide">
                                                <a href="<?php echo G5_THEME_URL?>/sub/sub8_2.php" target="_blank">
                                                    <div class="sub2_1_1_ba_slide_img sub2_1_1_ba_slide_img01 flex_row sb al_fs">
                                                        <div class="sub2_1_1_ba_slide_img_b">
                                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_1_1_ba_slide_img01_b_230404.jpg" alt="">
                                                        </div>
                                                        <div class="sub2_1_1_ba_slide_img_a <?=($is_member ? '':'blur')?>">
                                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_1_1_ba_slide_img01_a_230404.jpg" alt="">
                                                            <p class="sub2_1_1_ba_slide_img_a_taxt fz_14 ls_2 lh_14 normal ta_c">
                                                                로그인 후 <br>
                                                                확인 가능합니다.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="swiper-slide sub2_1_1_ba_slide">
                                                <a href="<?php echo G5_THEME_URL?>/sub/sub8_2.php" target="_blank">
                                                    <div class="sub2_1_1_ba_slide_img sub2_1_1_ba_slide_img02 flex_row sb al_fs">
                                                        <div class="sub2_1_1_ba_slide_img_b">
                                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_1_1_ba_slide_img02_b_230404.jpg" alt="">
                                                        </div>
                                                        <div class="sub2_1_1_ba_slide_img_a <?=($is_member ? '':'blur')?>">
                                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_1_1_ba_slide_img02_a_230404.jpg" alt="">
                                                            <p class="sub2_1_1_ba_slide_img_a_taxt fz_14 ls_2 lh_14 normal ta_c">
                                                                로그인 후 <br>
                                                                확인 가능합니다.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="swiper-slide sub2_1_1_ba_slide">
                                                <a href="<?php echo G5_THEME_URL?>/sub/sub8_2.php" target="_blank">
                                                    <div class="sub2_1_1_ba_slide_img sub2_1_1_ba_slide_img03 flex_row sb al_fs">
                                                        <div class="sub2_1_1_ba_slide_img_b">
                                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_1_1_ba_slide_img03_b_230404.jpg" alt="">
                                                        </div>
                                                        <div class="sub2_1_1_ba_slide_img_a <?=($is_member ? '':'blur')?>">
                                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_1_1_ba_slide_img03_a_230404.jpg" alt="">
                                                            <p class="sub2_1_1_ba_slide_img_a_taxt fz_14 ls_2 lh_14 normal ta_c">
                                                                로그인 후 <br>
                                                                확인 가능합니다.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="swiper-pagination"></div>
                                    </div>
                                    <div class="sub2_1_1_ba_more_btn">
                                        <a href="<?php echo G5_THEME_URL?>/sub/sub8_2.php" target="_blank">
                                            <p class="fz_16 lh_1 ls_2 light ta_c">more</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="sub_cont_box sub2_1_1_cont_premium bg_fa pd_120">
                            <div class="sub_tabcontent_container sub2_1_1_premium_container flex_row fw fd_c jc_fs center">
                                <div class="sub_cont_title sub2_1_4_cont_title_center ta_c">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                                    <p class="sub_cont_title_text01 fz_30 lh_16 ls_2 light m_20 gs_reveal" data-gs-delay="200">
                                        <span class="medium">차별화된 1:1 맞춤</span> 프리미엄 관리
                                    </p>
                                    <p class="pc_cont_434 sub_cont_title_text02 fz_16 lh_14 ls_2 light m_80 gs_reveal" data-gs-delay="400">
                                        무리한 여드름치료는 피부를 손상시킬 수 있습니다. 인천오라클피부과는 개인의 피부 상황에 맞춘 <br>
                                        차별화된 치료법을 기반으로 피부 체질을 개선하며 피부 건강을 회복합니다.
                                    </p>
                                    <p class="m_cont_434 sub_cont_title_text02 fz_16 lh_14 ls_2 light m_80 gs_reveal" data-gs-delay="400">
                                        무리한 여드름치료는 피부를 손상시킬 수 있습니다. <br>
                                        인천오라클피부과는 개인의 피부 상황에 맞춘 <br>
                                        차별화된 치료법을 기반으로 피부 체질을 개선하며 <br>
                                        피부 건강을 회복합니다.
                                    </p>
                                </div>
                                <div class="sub2_1_1_premium_box flex_row fw se al_fs">
                                    <div class="column_quarter">
                                        <div class="sub2_1_1_premium_item sub2_1_1_premium_item01 ta_c flex_row fd_c jc_fs center gs_reveal" data-gs-delay="200">
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_1_1_premium_item02.png" alt="">
                                            <p class="fz_25 ls_2 lh_14 normal m_10">
                                                압출관리
                                            </p>
                                            <ul class="sub2_1_1_premium_item_ul fz_17 flex_row fd_c jc_center al_fs ta_l">
                                                <li>
                                                    <p>모낭을 열어 피지를 제거</p>
                                                </li>
                                                <li>
                                                    <p>여드름 염증 완화</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="column_quarter">
                                        <div class="sub2_1_1_premium_item sub2_1_1_premium_item02 ta_c flex_row fd_c jc_fs center gs_reveal" data-gs-delay="400">
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_1_1_premium_item03.png" alt="">
                                            <p class="fz_25 ls_2 lh_14 normal m_10">
                                                스케일링
                                            </p>
                                            <ul class="sub2_1_1_premium_item_ul fz_17 flex_row fd_c jc_center al_fs ta_l">
                                                <li>
                                                    <p>각질제거 및 모공청소</p>
                                                </li>
                                                <li>
                                                    <p>레이저 흡수에 도움</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="column_quarter">
                                        <div class="sub2_1_1_premium_item sub2_1_1_premium_item03 ta_c flex_row fd_c jc_fs center gs_reveal" data-gs-delay="600">
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_1_1_premium_item01.png" alt="">
                                            <p class="fz_25 ls_2 lh_14 normal m_10">
                                                프리미엄 레이저 치료
                                            </p>
                                            <ul class="sub2_1_1_premium_item_ul fz_17 flex_row fd_c jc_center al_fs ta_l">
                                                <li>
                                                    <p>여드름균 제거&콜라겐 활성화</p>
                                                </li>
                                                <li>
                                                    <p>여드름 흉터 예방 및 재발 방지</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="column_quarter">
                                        <div class="sub2_1_1_premium_item sub2_1_1_premium_item04 ta_c flex_row fd_c jc_fs center gs_reveal" data-gs-delay="600">
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_1_1_premium_item04.png" alt="">
                                            <p class="fz_25 ls_2 lh_14 normal m_10">
                                                치료 후 팔로우업
                                            </p>
                                            <ul class="sub2_1_1_premium_item_ul fz_17 flex_row fd_c jc_center al_fs ta_l">
                                                <li>
                                                    <p>
                                                        여드름 재발 방지를 위한 <br>
                                                        치료 후 팔로우업 관리
                                                    </p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="sub_cont_box sub2_1_1_cont4_box">
                            <div class="sub2_1_1_cont4 flex_row fw jc_center center">
                                <div class="column_half">
                                    <div class="sub2_1_1_cont4_img">
                                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_1_1_cont4_img.jpg" alt="">
                                    </div>
                                </div>
                                <div class="column_half">
                                    <div class="flex_row fw fd_c jc_center center">
                                        <div class="sub_cont_title sub2_1_1_cont4_title_center">
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                                            <p class="sub_cont_title_text01 fz_32 lh_14 ls_2 light m_30 gs_reveal" data-gs-delay="200">
                                                <span class="medium">피부과 전문의가 알려드리는</span> <br>
                                                여드름 치료의 핵심
                                            </p>
                                            <p class="pc_cont_434 sub_cont_title_text02 sub2_1_1_cont04_title_text02 fz_16 lh_14 ls_2 light gs_reveal" data-gs-delay="400">
                                                개인마다 다른 여드름의 원인과 피부 특성을 정확하게 진단하는 <br>
                                                것이 여드름의 치료의 첫 번째 단계입니다. <br>
                                                인천 오라클피부과는 정확한 진단 과정을 거친 후, 근본적인 원인 <br>
                                                을 잡아 여드름 치료 후 재발까지 방지합니다.
                                            </p>
                                            <p class="m_cont_434 sub_cont_title_text02 sub2_1_1_cont04_title_text02 fz_16 lh_14 ls_2 light gs_reveal" data-gs-delay="400">
                                                개인마다 다른 여드름의 원인과 피부 특성을 정확하게 진단하는 
                                                것이 여드름의 치료의 첫 번째 단계입니다. 
                                                인천 오라클피부과는 정확한 진단 과정을 거친 후, 근본적인 원인 
                                                을 잡아 여드름 치료 후 재발까지 방지합니다.
                                            </p>
                                        </div>
                                        <!--
                                        <div class="sub2_1_1_cont4_more_btn">
                                            <a href="<?php echo G5_THEME_URL?>/sub/sub1_4.php">
                                                <p class="fz_16 lh_1 ls_2 light ta_c">more</p>
                                            </a>
                                        </div>
                                        -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="sub_cont_box sub2_1_4_cont_box pd_60">
                            <div class="sub2_1_4_cont3_bg">
                                <div class="sub_cont_title sub2_1_4_cont_title_center p_r ta_c pt_100">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                                    <p class="sub_cont_top_title_text01 fz_30 lh_14 ls_2 light gs_reveal" data-gs-delay="200">
                                        오라클만의 <span class="medium">여드름 치료 특별함</span>
                                    </p>
                                </div>
                                <div class="sub_tabcontent_container sub2_1_cont03_container flex_row fw sa center">
                                    <div class="sub_cont_title sub2_1_4_cont_title_left title_left">
                                        <p class="sub_cont_title_text01 sortsmillgoudy fz_20 lh_14 ls_2 light gs_reveal" data-gs-delay="200">
                                            Oracle Point.01
                                        </p>
                                        <p class="sub_cont_title_text02 fz_32 lh_14 ls_2 light m_40 gs_reveal" data-gs-delay="400">
                                            피부치료의 시작은 <br>
                                            <span class="medium">정확한 피부 진단부터!</span>
                                        </p>
                                        <p class="pc_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light gs_reveal m_20" data-gs-delay="600">
                                            4가지 LED 광원을 이용한 피부진단 시스템으로 육안으로 볼 수 없는 질환들을 <br>
                                            나타내어 피부 문제점을 더 정확하게 파악하고 피부과 전문의 노하우를 더해 <br>
                                            세심한 치료 계획을 세웁니다.
                                        </p>
                                        <p class="m_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light gs_reveal m_20" data-gs-delay="600">
                                            4가지 LED 광원을 이용한 피부진단 시스템으로 육안으로 볼 수 없는 질환들을 
                                            나타내어 피부 문제점을 더 정확하게 파악하고 피부과 전문의 노하우를 더해 
                                            세심한 치료 계획을 세웁니다.
                                        </p>
                                        <p class="pc_cont_434 sub_cont_title_text04 fz_16 lh_16 ls_2 light gs_reveal" data-gs-delay="800">
                                            붉은기, 여드름 등을 확인하여 민감성 여부 판단하고 부위별 피지량을 통한 <br>
                                            피부타입을 제시합니다. 12가지 항목별 진단 결과와, 전/후를 비교하여 얼마나 <br>
                                            개선 되었는지를 분석합니다.
                                        </p>
                                        <p class="m_cont_434 sub_cont_title_text04 fz_16 lh_16 ls_2 light gs_reveal" data-gs-delay="800">
                                            붉은기, 여드름 등을 확인하여 민감성 여부 판단하고 부위별 피지량을 통한 
                                            피부타입을 제시합니다. 12가지 항목별 진단 결과와, 전/후를 비교하여 얼마나 
                                            개선 되었는지를 분석합니다.
                                        </p>
                                    </div>
                                    <div class="sub_cont_doct_img sub2_1_4_tabcontent01_img img_right p_r ta_r">
                                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_1_1_tabcontent03_img01.png" alt="">
                                        
                                        <div class="sub2_1_1_cont5_more_btn more_popup_open_btn01">
                                            <a href="javascript:void(0);">
                                                <p class="fz_16 lh_1 ls_2 light ta_c">more</p>
                                            </a>
                                        </div>
                                    </div>
                                    
                                    <div class="sub2_1_1_more_popup more_popup_box01">
                                        <div class="sub2_1_1_more_popup_close m_30 more_popup_close_btn01">
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_1_1_more_popup_close.png" alt="">
                                        </div>
                                        <div class="sub2_1_1_more_popup_img flex_row jc_center center">
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_1_1_more_popup_img01.png" alt="">
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_1_1_more_popup_img02.png" alt="">
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="sub_tabcontent_container flex_row fw sa center">
                                    <div class="sub_cont_doct_img sub2_1_1_tabcontent04_img img_left p_r ta_c">
                                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_1_1_tabcontent04_img01.jpg" alt="">
                                    </div>
                                    <div class="sub_cont_title sub2_1_1_tabcontent04_title_right title_right">
                                        <p class="sub_cont_title_text01 sortsmillgoudy fz_20 lh_14 ls_2 light gs_reveal" data-gs-delay="200">
                                            Oracle Point.02
                                        </p>
                                        <p class="sub_cont_title_text02 fz_32 lh_14 ls_2 light m_40 gs_reveal" data-gs-delay="400">
                                            매끄러운 피부결을 지키는 <br>
                                            <span class="medium">흉터 방지 여드름 케어</span>
                                        </p>
                                        <p class="pc_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light gs_reveal" data-gs-delay="600">
                                            여드름 치료는 자극을 줄이고 피부를 진정시키는 과정이 중요합니다. <br>
                                            인천오라클피부과는 다양한 레이저 장비를 활용한 여드름 치료는 물론 <br>
                                            치료 후 크라이오셀, 진정관리를 진행하여 여드름 치료에 시너지를 주고 <br>
                                            흉터를 방지하여 매끄러운 피부결을 지켜드립니다.
                                        </p>
                                        <p class="m_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light gs_reveal" data-gs-delay="600">
                                            여드름 치료는 자극을 줄이고 피부를 진정시키는 과정이 중요합니다. 
                                            인천오라클피부과는 다양한 레이저 장비를 활용한 여드름 치료는 물론 
                                            치료 후 크라이오셀, 진정관리를 진행하여 여드름 치료에 시너지를 주고 
                                            흉터를 방지하여 매끄러운 피부결을 지켜드립니다.
                                        </p>
                                    </div>
                                </div>

                                <div class="sub_tabcontent_container_full flex_row fw jc_fs al_fs">
                                    <div class="sub_cont_title title_left">
                                        <p class="sub_cont_title_text01 sortsmillgoudy fz_20 lh_14 ls_2 light gs_reveal" data-gs-delay="200">
                                            Oracle Point.03
                                        </p>
                                        <p class="sub_cont_title_text02 fz_32 lh_14 ls_2 light m_40 gs_reveal" data-gs-delay="400">
                                            여드름 <span class="medium">레이저 프로그램</span>
                                        </p>
                                    </div>
                                    
                                    <div class="swiper-container sub2_1_4_cont5_slider">
                                        <div class="swiper-wrapper">
                                            
                                            <?php 
                                                include(G5_PATH.'/theme/oracle/include/equip_laser.php');
                                            ?>
                                            
                                        </div>
                                        <div class="swiper-scrollbar"></div>
                                    </div>
                                    
                                    <?php 
                                        include(G5_PATH.'/theme/oracle/include/equip_laser_content.php');
                                    ?>
                                    
                                </div>
                            </div>
                        </div>
                        
                        <div class="sub_cont_box sub2_1_youtube_box pd_120">
                            <div class="container-sm flex_row fw jc_center al_fs">
                                <div class="sub_cont_title sub2_1_4_cont_title_center ta_c">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                                    <p class="sub_cont_title_text01 sortsmillgoudy fz_50 lh_14 ls_2 gs_reveal" data-gs-delay="200">
                                        Youtube
                                    </p>
                                    <p class="sub_cont_title_text02 fz_20 lh_16 ls_2 normal gs_reveal m_60" data-gs-delay="400">
                                        피부과 전문의가 직접 들려 주는 <br>
                                        <span class="fz_30 ls_2 lh_14 normal">여드름/모공 치료</span>
                                    </p>
                                </div>
                                <div class="sub2_1_youtube_wrap flex_row fw jc_center al_fs m_60">
                                    
                                    <?php 
                                        include(G5_PATH.'/theme/oracle/include/youtube_list.php');
                                    ?>
                                    
                                </div>
                                <div class="sub2_1_youtube_more_btn">
                                    <a href="<?php echo G5_THEME_URL?>/sub/sub1_6.php">
                                        <p class="fz_16 lh_1 ls_2 light ta_c">more</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="sub_cont04 sub2_1_2_cont04 sub_tabcontent sub_tabcontent2" id="sub_tabcontent2">
                    <div class="sub_tabcontent02_wrap">
                        <div class="sub_cont_box sub2_1_2_cont1_1_box bg_fa pd_120">
                            <div class="sub_tabcontent_container flex_row fw sa center">
                                <div class="sub_cont_title sub2_1_2_cont_title_left title_left">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                                    <p class="sub_cont_title_text01 fz_32 lh_14 ls_2 light m_40">
                                        흉터 종류에 맞춰 진행되는 <br>
                                        <span class="medium">체계적인 여드름 흉터 치료</span>
                                    </p>
                                    <p class="pc_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 light m_20">
                                        여드름을 초기에 제대로 치료를 하지 않거나 시기를 놓쳤을 때 <br>
                                        피지선 주위에 많은 세균이 증식하여 곯고 고름이 나오게 됩니다. 이후 <br>
                                        검게 자국이 남고 나중엔 귤껍질처럼 움푹 파이거나 단단하게 튀어나오는 <br>
                                        등 흉터가 남게 됩니다.
                                    </p>
                                    <p class="m_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 light m_20">
                                        여드름을 초기에 제대로 치료를 하지 않거나 시기를 놓쳤을 때 
                                        피지선 주위에 많은 세균이 증식하여 곯고 고름이 나오게 됩니다. 이후 
                                        검게 자국이 남고 나중엔 귤껍질처럼 움푹 파이거나 단단하게 튀어나오는 
                                        등 흉터가 남게 됩니다.
                                    </p>
                                    <p class="pc_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light">
                                        인천 오라클피부과는 비타민 재생 관리부터 레이저치료 및 피부 스케일링 <br>
                                        까지 적절한 치료를 콜라보레이션하여 착색된 여드름 흉터와 자국을 깨끗하게 <br>
                                        개선합니다.
                                    </p>
                                    <p class="m_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light">
                                        인천 오라클피부과는 비타민 재생 관리부터 레이저치료 및 피부 스케일링 
                                        까지 적절한 치료를 콜라보레이션하여 착색된 여드름 흉터와 자국을 깨끗하게 
                                        개선합니다.
                                    </p>
                                </div>
                                <div class="sub_cont_doct_video sub2_1_2_tabcontent01_img img_right ta_r">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_1_2_tabcontent01_img01.png" alt="">
                                </div>
                            </div>
                        </div>
                        
                        <div class="sub_cont_box sub2_1_2_cont1_2_box pd_120">
                            <div class="sub_tabcontent_container flex_row fw jc_center al_fs">
                                <div class="sub_cont_title sub2_1_2_cont_title_center ta_c">
                                    <p class="sub_cont_title_text01 fz_22 lh_14 ls_2 normal gs_reveal" data-gs-delay="200">
                                        여드름
                                    </p>
                                    <p class="sub_cont_title_text02 sortsmillgoudy fz_60 lh_16 ls_2 light gs_reveal m_60" data-gs-delay="400">
                                        Before & After
                                    </p>
                                </div>
                                <div class="sub2_1_2_tabcontent02_ba">
                                    <div class="swiper-container sub2_1_ba_slider_cont">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide sub2_1_2_ba_slide">
                                                <a href="<?php echo G5_THEME_URL?>/sub/sub8_2.php" target="_blank">
                                                    <div class="sub2_1_2_ba_slide_img sub2_1_2_ba_slide_img01 flex_row sb al_fs">
                                                        <div class="sub2_1_2_ba_slide_img_b">
                                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_1_2_ba_slide_img01_b_230404.jpg" alt="">
                                                        </div>
                                                        <div class="sub2_1_2_ba_slide_img_a <?=($is_member ? '':'blur')?>">
                                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_1_2_ba_slide_img01_a_230404.jpg" alt="">
                                                            <p class="sub2_1_2_ba_slide_img_a_taxt fz_14 ls_2 lh_14 normal ta_c">
                                                                로그인 후 <br>
                                                                확인 가능합니다.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="swiper-slide sub2_1_2_ba_slide">
                                                <a href="<?php echo G5_THEME_URL?>/sub/sub8_2.php" target="_blank">
                                                    <div class="sub2_1_2_ba_slide_img sub2_1_2_ba_slide_img02 flex_row sb al_fs">
                                                        <div class="sub2_1_2_ba_slide_img_b">
                                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_1_2_ba_slide_img02_b_230404.jpg" alt="">
                                                        </div>
                                                        <div class="sub2_1_2_ba_slide_img_a <?=($is_member ? '':'blur')?>">
                                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_1_2_ba_slide_img02_a_230404.jpg" alt="">
                                                            <p class="sub2_1_2_ba_slide_img_a_taxt fz_14 ls_2 lh_14 normal ta_c">
                                                                로그인 후 <br>
                                                                확인 가능합니다.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="swiper-pagination"></div>
                                    </div>
                                    <div class="sub2_1_2_ba_more_btn">
                                        <a href="<?php echo G5_THEME_URL?>/sub/sub8_2.php" target="_blank">
                                            <p class="fz_16 lh_1 ls_2 light ta_c">more</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="sub_cont_box sub2_1_2_cont03 bg_fa pd_160">
                            <div class="sub_tabcontent_container flex_row fw fd_c jc_fs center">
                                <div class="sub_cont_title sub2_1_4_cont_title_center ta_c">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                                    <p class="sub_cont_title_text01 fz_30 lh_16 ls_2 normal m_80 gs_reveal" data-gs-delay="200">
                                        여드름 흉터의 종류
                                    </p>
                                </div>
                                <div class="sub2_1_2_cont03_box flex_row fw se al_fs">
                                    <div class="column_third_30">
                                        <div class="sub2_1_2_cont03_item sub2_1_2_cont03_item01 ta_c flex_row fd_c jc_fs center gs_reveal" data-gs-delay="400">
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_1_2_cont03_item01.png" alt="">
                                            <p class="fz_22 ls_2 lh_16 normal m_10">
                                                송곳 모양 흉터
                                            </p>
                                            <p class="pc_cont_434 fz_16 ls_2 lh_14 normal">
                                                면적은 작지만 깊이가 깊어 <br>
                                                치료 기간이 오래 걸리는 흉터
                                            </p>
                                            <p class="m_cont_434 fz_16 ls_2 lh_14 normal">
                                                면적은 작지만 깊이가 깊어 
                                                치료 기간이 오래 걸리는 흉터
                                            </p>
                                        </div>
                                    </div>
                                    <div class="column_third_30">
                                        <div class="sub2_1_2_cont03_item sub2_1_2_cont03_item02 ta_c flex_row fd_c jc_fs center gs_reveal" data-gs-delay="600">
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_1_2_cont03_item02.png" alt="">
                                            <p class="fz_22 ls_2 lh_16 normal m_10">
                                                박스 모양 흉터
                                            </p>
                                            <p class="pc_cont_434 fz_16 ls_2 lh_14 normal">
                                                광대뼈 주변, 뺨 전체 등에서 <br>
                                                주로 발견되는 흉터
                                            </p>
                                            <p class="m_cont_434 fz_16 ls_2 lh_14 normal">
                                                광대뼈 주변, 뺨 전체 등에서 
                                                주로 발견되는 흉터
                                            </p>
                                        </div>
                                    </div>
                                    <div class="column_third_30">
                                        <div class="sub2_1_2_cont03_item sub2_1_2_cont03_item03 ta_c flex_row fd_c jc_fs center gs_reveal" data-gs-delay="800">
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_1_2_cont03_item03.png" alt="">
                                            <p class="fz_22 ls_2 lh_16 normal m_10">
                                                둥근 모양 흉터
                                            </p>
                                            <p class="pc_cont_434 fz_16 ls_2 lh_14 normal">
                                                넓게 패인 흉터로 치료 시 <br>
                                                새살이 빠르게 차오르는 흉터
                                            </p>
                                            <p class="m_cont_434 fz_16 ls_2 lh_14 normal">
                                                넓게 패인 흉터로 치료 시 
                                                새살이 빠르게 차오르는 흉터
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="sub_cont_box sub2_1_2_cont04_box">
                            <div class="sub2_1_2_cont04 flex_row fw jc_center center">
                                <div class="column_half">
                                    <div class="sub2_1_2_cont04_point_box flex_row fw fd_c jc_center center">
                                        <div class="sub_cont_title sub2_1_2_cont04_title_center">
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                                            <p class="sub_cont_title_text01 sub2_1_2_cont04_title_text01 fz_32 lh_14 ls_2 light m_60 gs_reveal" data-gs-delay="200">
                                                <span class="medium">피부과 전문의와의 1:1 커스텀</span> <br>
                                                여드름 흉터 케어
                                            </p>
                                        </div>
                                        <div class="sub2_1_2_cont04_point_list flex_row fw jc_center center">
                                            <div class="sub2_1_2_cont04_point_list01 flex_row sb center m_20">
                                                <div class="sub2_1_2_cont04_point_img">
                                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_1_2_cont04_point01.jpg" alt="">
                                                </div>
                                                <div class="sub2_1_2_cont04_point_text">
                                                    <p class="sortsmillgoudy fz_20 ls_2 lh_16">
                                                        Point 01
                                                    </p>
                                                    <p class="fz_18 ls_2 lh_14 normal">
                                                        상담부터 치료까지 <br>
                                                        피부과 전문의 1:1 주치의 제도
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="sub2_1_2_cont04_point_list02 flex_row sb center m_20">
                                                <div class="sub2_1_2_cont04_point_img">
                                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_1_2_cont04_point02.jpg" alt="">
                                                </div>
                                                <div class="sub2_1_2_cont04_point_text">
                                                    <p class="sortsmillgoudy fz_20 ls_2 lh_16">
                                                        Point 02
                                                    </p>
                                                    <p class="fz_18 ls_2 lh_14 normal">
                                                        피부 문제를 파악하는 <br>
                                                        마크뷰 피부 검진
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="sub2_1_2_cont04_point_list03 flex_row sb center">
                                                <div class="sub2_1_2_cont04_point_img">
                                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_1_2_cont04_point03.jpg" alt="">
                                                </div>
                                                <div class="sub2_1_2_cont04_point_text">
                                                    <p class="sortsmillgoudy fz_20 ls_2 lh_16">
                                                        Point 03
                                                    </p>
                                                    <p class="fz_18 ls_2 lh_14 normal">
                                                        흉터 종류, <br>
                                                        피부 상태 맞춘 커스텀 치료
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="column_half">
                                    <div class="sub2_1_2_cont04_img">
                                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_1_2_cont04_img.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="sub_cont_box sub2_1_2_cont05_box pd_60 pt_120">
                            <div class="sub2_1_4_cont3_bg sub2_1_2_cont05_bg">
                                <div class="sub_tabcontent_container_full flex_row fw jc_fs al_fs">
                                    <div class="sub_cont_title title_left">
                                        <p class="sub_cont_title_text01 sortsmillgoudy fz_20 lh_14 ls_2 light gs_reveal" data-gs-delay="200">
                                            Oracle Point
                                        </p>
                                        <p class="sub_cont_title_text02 fz_32 lh_14 ls_2 light m_40 gs_reveal" data-gs-delay="400">
                                            여드름 <span class="medium">레이저 프로그램</span>
                                        </p>
                                    </div>
                                    <div class="swiper-container sub2_1_4_cont5_slider">
                                        <div class="swiper-wrapper">
                                            
                                            <?php 
                                                include(G5_PATH.'/theme/oracle/include/equip_laser.php');
                                            ?>
                                            
                                        </div>
                                        <div class="swiper-scrollbar"></div>
                                    </div>
                                    
                                    <?php 
                                        include(G5_PATH.'/theme/oracle/include/equip_laser_content.php');
                                    ?>
                                </div>
                            </div>
                        </div>
                        
                        <div class="sub_cont_box sub2_1_youtube_box pd_120">
                            <div class="container-sm flex_row fw jc_center al_fs">
                                <div class="sub_cont_title sub2_1_4_cont_title_center ta_c">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                                    <p class="sub_cont_title_text01 sortsmillgoudy fz_50 lh_14 ls_2 gs_reveal" data-gs-delay="200">
                                        Youtube
                                    </p>
                                    <p class="sub_cont_title_text02 fz_20 lh_16 ls_2 normal gs_reveal m_60" data-gs-delay="400">
                                        피부과 전문의가 직접 들려 주는 <br>
                                        <span class="fz_30 ls_2 lh_14 normal">여드름/모공 치료</span>
                                    </p>
                                </div>
                                <div class="sub2_1_youtube_wrap flex_row fw jc_center al_fs m_60">
                                    <?php 
                                        include(G5_PATH.'/theme/oracle/include/youtube_list.php');
                                    ?>
                                </div>
                                <div class="sub2_1_youtube_more_btn">
                                    <a href="<?php echo G5_THEME_URL?>/sub/sub1_6.php">
                                        <p class="fz_16 lh_1 ls_2 light ta_c">more</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="sub_cont05 sub2_1_3_cont05 sub_tabcontent sub_tabcontent3" id="sub_tabcontent3">
                    <div class="sub_tabcontent03_wrap">
                        <div class="sub_cont_box sub2_1_3_cont1_1_box bg_fa pd_120">
                            <div class="sub_tabcontent_container flex_row fw sa center pd_120">
                                <div class="sub_cont_title sub2_1_3_cont_title_left title_left">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                                    <p class="sub_cont_title_text01 fz_32 lh_14 ls_2 light m_40">
                                        모공 속부터 깨끗하게, <br>
                                        <span class="medium">3단계 블랙헤드 치료</span>
                                    </p>
                                    <p class="sub_cont_title_text03 fz_16 lh_16 ls_2 light m_20">
                                        모공에서 분비된 피지가 공기를 만나 검게 산화된 것을 블랙헤드라고 합니다.
                                    </p>
                                    <p class="pc_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 light">
                                        블랙헤드, 화이트헤드 모두 비염 증상 여드름의 일종으로, <br>
                                        오래 방치할 경우 염증이 생길 가능성이 있습니다. <br>
                                        소독되지 않은 도구로 억지로 잡아뜯어내면 세균감염의 위험이 있으며 <br>
                                        모공이 점점 커져 새로운 블랙헤드가 더 많이 만들어지는 악순환이 <br>
                                        생길 수 있습니다.
                                    </p>
                                    <p class="m_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 light">
                                        블랙헤드, 화이트헤드 모두 비염 증상 여드름의 일종으로, 
                                        오래 방치할 경우 염증이 생길 가능성이 있습니다. <br>
                                        소독되지 않은 도구로 억지로 잡아뜯어내면 세균감염의 위험이 있으며 
                                        모공이 점점 커져 새로운 블랙헤드가 더 많이 만들어지는 악순환이 
                                        생길 수 있습니다.
                                    </p>
                                </div>
                                <div class="sub_cont_doct_video sub2_1_3_tabcontent01_img img_right ta_r">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_1_3_tabcontent01_img01.png" alt="">
                                </div>
                            </div>
                            
                            <div class="sub_tabcontent_container sub2_1_3_container_new flex_row fw jc_center al_fs">
                                <div class="sub_cont_title sub2_1_3_cont_title_left title_left ta_c">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                                    <p class="sub_cont_title_text01 fz_32 lh_14 ls_2 normal">
                                        블랙헤드와 화이트헤드
                                    </p>
                                </div>
                                <div class="sub2_1_3_cont_img_wrap_new">
                                    <div class="sub2_1_3_cont_img_new sub2_1_3_cont_img01_new">
                                        <img class="m_20" src="<?php echo G5_THEME_URL?>/sub/img/sub2_1_3_cont_img01_new.png" alt="">
                                        <p class="fz_23 lh_16 medium m_20">
                                            블랙헤드
                                        </p>
                                        <p class="fz_19 lh_16 normal">
                                            피지가 모공 밖으로 분비되어 <br>
                                            공기와 만나 검게 산화된 것
                                        </p>
                                    </div>
                                    <div class="sub2_1_3_cont_img_new sub2_1_3_cont_img02_new">
                                        <img class="m_20" src="<?php echo G5_THEME_URL?>/sub/img/sub2_1_3_cont_img02_new.png" alt="">
                                        <p class="fz_23 lh_16 medium m_20">
                                            화이트헤드
                                        </p>
                                        <p class="fz_19 lh_16 normal">
                                            피지가 과도하게 분출되었지만<br>
                                            피부에 덮여있어 돌출된 형태
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 
                        <div class="sub_cont_box sub2_1_3_cont1_2_box pd_120">
                            <div class="sub_tabcontent_container flex_row fw jc_center al_fs">
                                <div class="sub_cont_title sub2_1_3_cont_title_center ta_c">
                                    <p class="sub_cont_title_text01 fz_22 lh_14 ls_2 normal gs_reveal" data-gs-delay="200">
                                        여드름
                                    </p>
                                    <p class="sub_cont_title_text02 sortsmillgoudy fz_60 lh_16 ls_2 light gs_reveal m_60" data-gs-delay="400">
                                        Before & After
                                    </p>
                                </div>
                                <div class="sub2_1_3_tabcontent02_ba">
                                    <div class="swiper-container sub2_1_ba_slider_cont">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide sub2_1_3_ba_slide">
                                                <a href="<?php echo G5_THEME_URL?>/sub/sub8_2.php" target="_blank">
                                                    <div class="sub2_1_3_ba_slide_img sub2_1_3_ba_slide_img01 flex_row sb al_fs">
                                                        <div class="sub2_1_3_ba_slide_img_b">
                                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_1_3_ba_slide_img01_b.jpg" alt="">
                                                        </div>
                                                        <div class="sub2_1_3_ba_slide_img_a <?=($is_member ? '':'blur')?>">
                                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_1_3_ba_slide_img01_a.jpg" alt="">
                                                            <p class="sub2_1_3_ba_slide_img_a_taxt fz_14 ls_2 lh_14 normal ta_c">
                                                                로그인 후 <br>
                                                                확인 가능합니다.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="swiper-slide sub2_1_3_ba_slide">
                                                <a href="<?php echo G5_THEME_URL?>/sub/sub8_2.php" target="_blank">
                                                    <div class="sub2_1_3_ba_slide_img sub2_1_3_ba_slide_img02 flex_row sb al_fs">
                                                        <div class="sub2_1_3_ba_slide_img_b">
                                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_1_3_ba_slide_img02_b.jpg" alt="">
                                                        </div>
                                                        <div class="sub2_1_3_ba_slide_img_a <?=($is_member ? '':'blur')?>">
                                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_1_3_ba_slide_img02_a.jpg" alt="">
                                                            <p class="sub2_1_3_ba_slide_img_a_taxt fz_14 ls_2 lh_14 normal ta_c">
                                                                로그인 후 <br>
                                                                확인 가능합니다.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="swiper-slide sub2_1_3_ba_slide">
                                                <a href="<?php echo G5_THEME_URL?>/sub/sub8_2.php" target="_blank">
                                                    <div class="sub2_1_3_ba_slide_img sub2_1_3_ba_slide_img03 flex_row sb al_fs">
                                                        <div class="sub2_1_3_ba_slide_img_b">
                                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_1_3_ba_slide_img03_b.jpg" alt="">
                                                        </div>
                                                        <div class="sub2_1_3_ba_slide_img_a <?=($is_member ? '':'blur')?>">
                                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_1_3_ba_slide_img03_a.jpg" alt="">
                                                            <p class="sub2_1_3_ba_slide_img_a_taxt fz_14 ls_2 lh_14 normal ta_c">
                                                                로그인 후 <br>
                                                                확인 가능합니다.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="swiper-slide sub2_1_3_ba_slide">
                                                <a href="<?php echo G5_THEME_URL?>/sub/sub8_2.php" target="_blank">
                                                    <div class="sub2_1_3_ba_slide_img sub2_1_3_ba_slide_img04 flex_row sb al_fs">
                                                        <div class="sub2_1_3_ba_slide_img_b">
                                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_1_3_ba_slide_img04_b.jpg" alt="">
                                                        </div>
                                                        <div class="sub2_1_3_ba_slide_img_a <?=($is_member ? '':'blur')?>">
                                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_1_3_ba_slide_img04_a.jpg" alt="">
                                                            <p class="sub2_1_3_ba_slide_img_a_taxt fz_14 ls_2 lh_14 normal ta_c">
                                                                로그인 후 <br>
                                                                확인 가능합니다.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="swiper-pagination"></div>
                                    </div>
                                    <div class="sub2_1_3_ba_more_btn">
                                        <a href="<?php echo G5_THEME_URL?>/sub/sub8_2.php" target="_blank">
                                            <p class="fz_16 lh_1 ls_2 light ta_c">more</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        -->
                        <div class="sub_cont_box sub2_1_4_cont_box pd_60">
                            <div class="sub2_1_4_cont3_bg">
                                <div class="sub_cont_title sub2_1_4_cont_title_center p_r ta_c pt_100">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                                    <p class="sub_cont_top_title_text01 fz_30 lh_14 ls_2 light gs_reveal" data-gs-delay="200">
                                        오라클만의 <span class="medium">블랙헤드 치료 특별함</span>
                                    </p>
                                </div>
                                <div class="sub_tabcontent_container sub2_1_cont03_container flex_row fw sa center">
                                    <div class="sub_cont_title sub2_1_4_cont_title_left title_left">
                                        <p class="sub_cont_title_text01 sortsmillgoudy fz_20 lh_14 ls_2 light gs_reveal" data-gs-delay="200">
                                            Oracle Point.01
                                        </p>
                                        <p class="sub_cont_title_text02 fz_32 lh_14 ls_2 light m_40 gs_reveal" data-gs-delay="400">
                                            올바른 블랙헤드 치료를 위해 <br>
                                            <span class="medium">정확한 피부 진단부터!</span>
                                        </p>
                                        <p class="pc_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light gs_reveal m_20" data-gs-delay="600">
                                            4가지 LED 광원을 이용한 피부진단 시스템으로 육안으로 볼 수 없는 <br>
                                            질환들을 나타내어 피부 문제점을 더 정확하게 파악하고 피부과 전문의 <br>
                                            노하우를 더해 세심한 치료 계획을 세웁니다. 
                                        </p>
                                        <p class="m_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light gs_reveal m_20" data-gs-delay="600">
                                            4가지 LED 광원을 이용한 피부진단 시스템으로 육안으로 볼 수 없는 
                                            질환들을 나타내어 피부 문제점을 더 정확하게 파악하고 피부과 전문의 
                                            노하우를 더해 세심한 치료 계획을 세웁니다. 
                                        </p>
                                        <p class="pc_cont_434 sub_cont_title_text04 fz_16 lh_16 ls_2 light gs_reveal" data-gs-delay="800">
                                            모공, 미세주름, 피지를 확인하여 정확한 블랙헤드 치료를 진행하며, <br>
                                            12가지 항목별 진단 결과와 치료 전/후를 비교하여 얼마나 개선 되었는지<br>
                                            를 분석합니다.
                                        </p>
                                        <p class="m_cont_434 sub_cont_title_text04 fz_16 lh_16 ls_2 light gs_reveal" data-gs-delay="800">
                                            모공, 미세주름, 피지를 확인하여 정확한 블랙헤드 치료를 진행하며, 
                                            12가지 항목별 진단 결과와 치료 전/후를 비교하여 얼마나 개선 되었는지를 분석합니다.
                                        </p>
                                    </div>
                                    <div class="sub_cont_doct_img sub2_1_4_tabcontent01_img img_right p_r ta_r">
                                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_1_1_tabcontent03_img01.png" alt="">
                                        
                                        <div class="sub2_1_1_cont5_more_btn more_popup_open_btn02">
                                            <a href="javascript:void(0);">
                                                <p class="fz_16 lh_1 ls_2 light ta_c">more</p>
                                            </a>
                                        </div>
                                    </div>
                                    
                                    <div class="sub2_1_1_more_popup more_popup_box02">
                                        <div class="sub2_1_1_more_popup_close m_30 more_popup_close_btn02">
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_1_1_more_popup_close.png" alt="">
                                        </div>
                                        <div class="sub2_1_1_more_popup_img flex_row jc_center center">
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_1_1_more_popup_img01.png" alt="">
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_1_1_more_popup_img02.png" alt="">
                                        </div>
                                    </div>
                                </div>

                                <div class="sub_tabcontent_container flex_row fw fd_c jc_fs center">
                                    <div class="sub_cont_title sub2_1_4_cont_title_center ta_c">
                                        <p class="sub_cont_title_text01 sortsmillgoudy fz_20 lh_14 ls_2 light gs_reveal" data-gs-delay="200">
                                            Oracle Point.02
                                        </p>
                                        <p class="sub_cont_title_text02 fz_32 lh_14 ls_2 light m_80 gs_reveal" data-gs-delay="400">
                                            <span class="medium">3STEP 블랙헤드 케어 프로그램</span>
                                        </p>
                                    </div>
                                    <div class="sub2_1_4_cont4_box flex_row fw se al_fs">
                                        <div class="column_third_30">
                                            <div class="sub2_1_3_3step_item sub2_1_3_3step_item01 ta_c flex_row fd_c jc_fs center">
                                                <p class="fz_18 ls_2 lh_14 medium m_20">
                                                    STEP 1. 피지 제거
                                                </p>
                                                <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_1_3_3step_img01.png" alt="">
                                                <p class="pc_cont_434 fz_17 ls_2 lh_14 light">
                                                    고주파와 음압을 사용해 모공 속 <br>
                                                    피지, 블랙헤드, 노폐물 제거
                                                </p>
                                                <p class="m_cont_434 fz_17 ls_2 lh_14 light">
                                                    고주파와 음압을 사용해 모공 속 
                                                    피지, 블랙헤드, 노폐물 제거
                                                </p>
                                            </div>
                                        </div>
                                        <div class="column_third_30">
                                            <div class="sub2_1_3_3step_item sub2_1_3_3step_item02 ta_c flex_row fd_c jc_fs center">
                                                <p class="fz_18 ls_2 lh_14 medium m_20">
                                                    STEP 2. 진정 관리
                                                </p>
                                                <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_1_3_3step_img02.png" alt="">
                                                <p class="pc_cont_434 fz_17 ls_2 lh_14 light">
                                                    자극 받은 피부를 진정시키 <br>
                                                    쿨링 & 진정 관리
                                                </p>
                                                <p class="m_cont_434 fz_17 ls_2 lh_14 light">
                                                    자극 받은 피부를 진정시키 
                                                    쿨링 & 진정 관리
                                                </p>
                                            </div>
                                        </div>
                                        <div class="column_third_30">
                                            <div class="sub2_1_3_3step_item sub2_1_3_3step_item03 ta_c flex_row fd_c jc_fs center">
                                                <p class="fz_18 ls_2 lh_14 medium m_20">
                                                    STEP 3. 재생 관리
                                                </p>
                                                <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_1_3_3step_img03.png" alt="">
                                                <p class="pc_cont_434 fz_17 ls_2 lh_14 light">
                                                    피부 타입에 맞는 AHA/BHA로 <br>
                                                    피부 각질 제거, 피부결 정돈
                                                </p>
                                                <p class="m_cont_434 fz_17 ls_2 lh_14 light">
                                                    피부 타입에 맞는 AHA/BHA로 
                                                    피부 각질 제거, 피부결 정돈
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="sub_tabcontent_container_full flex_row fw jc_fs al_fs">
                                    <div class="sub_cont_title title_left">
                                        <p class="sub_cont_title_text01 sortsmillgoudy fz_20 lh_14 ls_2 light gs_reveal" data-gs-delay="200">
                                            Oracle Point.03
                                        </p>
                                        <p class="sub_cont_title_text02 fz_32 lh_14 ls_2 light m_40 gs_reveal" data-gs-delay="400">
                                            여드름 <span class="medium">레이저 프로그램</span>
                                        </p>
                                    </div>
                                    <div class="swiper-container sub2_1_4_cont5_slider">
                                        <div class="swiper-wrapper">
                                            
                                            <?php 
                                                include(G5_PATH.'/theme/oracle/include/equip_laser.php');
                                            ?>
                                            
                                        </div>
                                        <div class="swiper-scrollbar"></div>
                                    </div>
                                    
                                    <?php 
                                        include(G5_PATH.'/theme/oracle/include/equip_laser_content.php');
                                    ?>
                                </div>
                            </div>
                        </div>
                        <!--
                        <div class="sub_cont_box sub2_1_youtube_box pd_120">
                            <div class="container-sm flex_row fw jc_center al_fs">
                                <div class="sub_cont_title sub2_1_4_cont_title_center ta_c">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                                    <p class="sub_cont_title_text01 sortsmillgoudy fz_50 lh_14 ls_2 gs_reveal" data-gs-delay="200">
                                        Youtube
                                    </p>
                                    <p class="sub_cont_title_text02 fz_20 lh_16 ls_2 normal gs_reveal m_60" data-gs-delay="400">
                                        피부과 전문의가 직접 들려 주는 <br>
                                        <span class="fz_30 ls_2 lh_14 normal">여드름/모공 치료</span>
                                    </p>
                                </div>
                                <div class="sub2_1_youtube_wrap flex_row fw jc_center al_fs m_60">
                                    <?php 
                                        include(G5_PATH.'/theme/oracle/include/youtube_list.php');
                                    ?>
                                </div>
                                <div class="sub2_1_youtube_more_btn">
                                    <a href="<?php echo G5_THEME_URL?>/sub/sub1_6.php">
                                        <p class="fz_16 lh_1 ls_2 light ta_c">more</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        -->
                    </div>
                </div>

                <div class="sub_cont06 sub2_1_4_cont06 sub_tabcontent sub_tabcontent4" id="sub_tabcontent4">
                    <div class="sub_tabcontent04_wrap">
                        <div class="sub_cont_box sub2_1_4_cont1_1_box bg_fa pd_120">
                            <div class="sub_tabcontent_container flex_row fw sa center">
                                <div class="sub_cont_title sub2_1_4_cont_title_left title_left">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                                    <p class="sub_cont_title_text01 fz_32 lh_14 ls_2 light m_40">
                                        피부 탄력, 여드름 흉터까지 <br>
                                        함께 케어하는 <span class="medium">모공 치료</span>
                                    </p>
                                    <p class="pc_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 light m_20">
                                        과도한 피지 분비부터 피부 노화, 여드름 흉터 등 다양한 원인으로 모공은 <br>
                                        쉽게 넓어집니다. 한 번 넓어지고 늘어나기 시작하면 다시 축소되기가 어려우며, <br>
                                        미용 및 피부 트러블 예방을 위해서라도 꾸준히 관리하고 치료하는 것이 좋습니다.   
                                    </p>
                                    <p class="m_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 light m_20">
                                        과도한 피지 분비부터 피부 노화, 여드름 흉터 등 다양한 원인으로 모공은 
                                        쉽게 넓어집니다. 한 번 넓어지고 늘어나기 시작하면 다시 축소되기가 어려우며, 
                                        미용 및 피부 트러블 예방을 위해서라도 꾸준히 관리하고 치료하는 것이 좋습니다.   
                                    </p>
                                    <p class="pc_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light">
                                        인천 오라클피부과만의 모공 치료는 늘어진 모공의 타이트닝 효과뿐만 <br>
                                        아니라 피부 탄력, 여드름 흉터, 주름 개선까지 종합적으로 유도하여 매끈한 <br>
                                        피부를 선사합니다.  
                                    </p>
                                    <p class="m_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light">
                                        인천 오라클피부과만의 트리플 모공 치료는 늘어진 모공의 타이트닝 효과뿐만 
                                        아니라 피부 탄력, 여드름 흉터, 주름 개선까지 종합적으로 유도하여 매끈한 
                                        피부를 선사합니다.  
                                    </p>
                                </div>
                                <div class="sub_cont_doct_video sub2_1_4_tabcontent01_img img_right ta_r">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_1_4_tabcontent01_img01.png" alt="">
                                </div>
                            </div>
                        </div>
                        <!-- 
                        <div class="sub_cont_box sub2_1_4_cont1_2_box pd_120">
                            <div class="sub_tabcontent_container flex_row fw jc_center al_fs">
                                <div class="sub_cont_title sub2_1_4_cont_title_center ta_c">
                                    <p class="sub_cont_title_text01 fz_22 lh_14 ls_2 normal gs_reveal" data-gs-delay="200">
                                        여드름
                                    </p>
                                    <p class="sub_cont_title_text02 sortsmillgoudy fz_60 lh_16 ls_2 light gs_reveal m_60" data-gs-delay="400">
                                        Before & After
                                    </p>
                                </div>
                                <div class="sub2_1_4_tabcontent02_ba">
                                    <div class="swiper-container sub2_1_ba_slider_cont">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide sub2_1_4_ba_slide">
                                                <a href="<?php echo G5_THEME_URL?>/sub/sub8_2.php" target="_blank">
                                                    <div class="sub2_1_4_ba_slide_img sub2_1_4_ba_slide_img01 flex_row sb al_fs">
                                                        <div class="sub2_1_4_ba_slide_img_b">
                                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_1_4_ba_slide_img01_b.jpg" alt="">
                                                        </div>
                                                        <div class="sub2_1_4_ba_slide_img_a <?=($is_member ? '':'blur')?>">
                                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_1_4_ba_slide_img01_a.jpg" alt="">
                                                            <p class="sub2_1_4_ba_slide_img_a_taxt fz_14 ls_2 lh_14 normal ta_c">
                                                                로그인 후 <br>
                                                                확인 가능합니다.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="swiper-slide sub2_1_4_ba_slide">
                                                <a href="<?php echo G5_THEME_URL?>/sub/sub8_2.php" target="_blank">
                                                    <div class="sub2_1_4_ba_slide_img sub2_1_4_ba_slide_img02 flex_row sb al_fs">
                                                        <div class="sub2_1_4_ba_slide_img_b">
                                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_1_4_ba_slide_img02_b.jpg" alt="">
                                                        </div>
                                                        <div class="sub2_1_4_ba_slide_img_a <?=($is_member ? '':'blur')?>">
                                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_1_4_ba_slide_img02_a.jpg" alt="">
                                                            <p class="sub2_1_4_ba_slide_img_a_taxt fz_14 ls_2 lh_14 normal ta_c">
                                                                로그인 후 <br>
                                                                확인 가능합니다.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="swiper-slide sub2_1_4_ba_slide">
                                                <a href="<?php echo G5_THEME_URL?>/sub/sub8_2.php" target="_blank">
                                                    <div class="sub2_1_4_ba_slide_img sub2_1_4_ba_slide_img03 flex_row sb al_fs">
                                                        <div class="sub2_1_4_ba_slide_img_b">
                                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_1_4_ba_slide_img03_b.jpg" alt="">
                                                        </div>
                                                        <div class="sub2_1_4_ba_slide_img_a <?=($is_member ? '':'blur')?>">
                                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_1_4_ba_slide_img03_a.jpg" alt="">
                                                            <p class="sub2_1_4_ba_slide_img_a_taxt fz_14 ls_2 lh_14 normal ta_c">
                                                                로그인 후 <br>
                                                                확인 가능합니다.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="swiper-slide sub2_1_4_ba_slide">
                                                <a href="<?php echo G5_THEME_URL?>/sub/sub8_2.php" target="_blank">
                                                    <div class="sub2_1_4_ba_slide_img sub2_1_4_ba_slide_img04 flex_row sb al_fs">
                                                        <div class="sub2_1_4_ba_slide_img_b">
                                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_1_4_ba_slide_img04_b.jpg" alt="">
                                                        </div>
                                                        <div class="sub2_1_4_ba_slide_img_a <?=($is_member ? '':'blur')?>">
                                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_1_4_ba_slide_img04_a.jpg" alt="">
                                                            <p class="sub2_1_4_ba_slide_img_a_taxt fz_14 ls_2 lh_14 normal ta_c">
                                                                로그인 후 <br>
                                                                확인 가능합니다.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="swiper-pagination"></div>
                                    </div>
                                    <div class="sub2_1_4_ba_more_btn">
                                        <a href="<?php echo G5_THEME_URL?>/sub/sub8_2.php" target="_blank">
                                            <p class="fz_16 lh_1 ls_2 light ta_c">more</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        -->
                        <div class="sub_cont_box sub2_1_4_cont_box pd_60">
                            <div class="sub2_1_4_cont3_bg">
                                <div class="sub_cont_title sub2_1_4_cont_title_center p_r ta_c pt_100">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                                    <p class="sub_cont_top_title_text01 fz_30 lh_14 ls_2 light gs_reveal" data-gs-delay="200">
                                        오라클만의 <span class="medium">모공치료 특별함</span>
                                    </p>
                                </div>
                                <div class="sub_tabcontent_container sub2_1_cont03_container flex_row fw sa center">
                                    <div class="sub_cont_title sub2_1_4_cont_title_left title_left">
                                        <p class="sub_cont_title_text01 sortsmillgoudy fz_20 lh_14 ls_2 light gs_reveal" data-gs-delay="200">
                                            Oracle Point.01
                                        </p>
                                        <p class="sub_cont_title_text02 fz_32 lh_14 ls_2 light m_40 gs_reveal" data-gs-delay="400">
                                            올바른 모공치료를 위해 <br>
                                            <span class="medium">정확한 피부 진단부터!</span>
                                        </p>
                                        <p class="pc_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light gs_reveal m_20" data-gs-delay="600">
                                            4가지 LED 광원을 이용한 피부진단 시스템으로 육안으로 볼 수 없는 질환들을 <br>
                                            나타내어 피부 문제점을 더 정확하게 파악하고 피부과 전문의 노하우를 더해 <br>
                                            세심한 치료 계획을 세웁니다. 
                                        </p>
                                        <p class="m_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light gs_reveal m_20" data-gs-delay="600">
                                            4가지 LED 광원을 이용한 피부진단 시스템으로 육안으로 볼 수 없는 질환들을 
                                            나타내어 피부 문제점을 더 정확하게 파악하고 피부과 전문의 노하우를 더해 
                                            세심한 치료 계획을 세웁니다. 
                                        </p>
                                        <p class="pc_cont_434 sub_cont_title_text04 fz_16 lh_16 ls_2 light gs_reveal" data-gs-delay="800">
                                            모공부터 미세주름, 홍조, 멜라닌, 피지와 여드름균 등 12가지의 피부 문제점을 <br>
                                            정확하게 분석하여 피부 상태에 맞춰 치료를 진행하며, 치료 전/후를 비교하여 <br>
                                            개선 정도를 분석합니다.
                                        </p>
                                        <p class="m_cont_434 sub_cont_title_text04 fz_16 lh_16 ls_2 light gs_reveal" data-gs-delay="800">
                                            모공부터 미세주름, 홍조, 멜라닌, 피지와 여드름균 등 12가지의 피부 문제점을 
                                            정확하게 분석하여 피부 상태에 맞춰 치료를 진행하며, 치료 전/후를 비교하여 
                                            개선 정도를 분석합니다.
                                        </p>
                                    </div>
                                    <div class="sub_cont_doct_img sub2_1_4_tabcontent01_img img_right p_r ta_r">
                                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_1_1_tabcontent03_img01.png" alt="">
                                        
                                        <div class="sub2_1_1_cont5_more_btn more_popup_open_btn03">
                                            <a href="javascript:void(0);">
                                                <p class="fz_16 lh_1 ls_2 light ta_c">more</p>
                                            </a>
                                        </div>
                                    </div>
                                    
                                    <div class="sub2_1_1_more_popup more_popup_box03">
                                        <div class="sub2_1_1_more_popup_close m_30 more_popup_close_btn03">
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_1_1_more_popup_close.png" alt="">
                                        </div>
                                        <div class="sub2_1_1_more_popup_img flex_row jc_center center">
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_1_1_more_popup_img01.png" alt="">
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_1_1_more_popup_img02.png" alt="">
                                        </div>
                                    </div>
                                </div>

                                <div class="sub_tabcontent_container flex_row fw fd_c jc_fs center">
                                    <div class="sub_cont_title sub2_1_4_cont_title_center ta_c">
                                        <p class="sub_cont_title_text01 sortsmillgoudy fz_20 lh_14 ls_2 light gs_reveal" data-gs-delay="200">
                                            Oracle Point.02
                                        </p>
                                        <p class="sub_cont_title_text02 fz_32 lh_14 ls_2 light m_80 gs_reveal" data-gs-delay="400">
                                            원인에 따라 달라지는 <br>
                                            <span class="medium">맞춤 모공 치료</span>
                                        </p>
                                    </div>
                                    <div class="sub2_1_4_cont4_box flex_row fw se al_fs">
                                        <div class="column_third_30">
                                            <div class="sub2_1_4_cont4_item sub2_1_4_cont4_item01 ta_c flex_row fd_c jc_fs center">
                                                <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_1_4_cont4_item01.png" alt="">
                                                <p class="fz_24 ls_2 lh_14 medium m_10">
                                                    피지 과다 분비
                                                </p>
                                                <p class="pc_cont_434 fz_18 ls_2 lh_14 light">
                                                    쌓여있는 모공 속 피지 청소와 <br>
                                                    피지 조절 레이저 치료
                                                </p>
                                                <p class="m_cont_434 fz_18 ls_2 lh_14 light">
                                                    쌓여있는 모공 속 피지 청소와 
                                                    피지 조절 레이저 치료
                                                </p>
                                            </div>
                                        </div>
                                        <div class="column_third_30">
                                            <div class="sub2_1_4_cont4_item sub2_1_4_cont4_item02 ta_c flex_row fd_c jc_fs center">
                                                <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_1_4_cont4_item02.png" alt="">
                                                <p class="fz_24 ls_2 lh_14 medium m_10">
                                                    노화
                                                </p>
                                                <p class="pc_cont_434 fz_18 ls_2 lh_14 light">
                                                    진피층의 콜라겐을 재생시키는 <br>
                                                    리프팅 & 보톡스 치료
                                                </p>
                                                <p class="m_cont_434 fz_18 ls_2 lh_14 light">
                                                    진피층의 콜라겐을 재생시키는 
                                                    리프팅 & 보톡스 치료
                                                </p>
                                            </div>
                                        </div>
                                        <div class="column_third_30">
                                            <div class="sub2_1_4_cont4_item sub2_1_4_cont4_item03 ta_c flex_row fd_c jc_fs center">
                                                <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_1_4_cont4_item03.png" alt="">
                                                <p class="fz_24 ls_2 lh_14 medium m_10">
                                                    흉터
                                                </p>
                                                <p class="pc_cont_434 fz_18 ls_2 lh_14 light">
                                                    손상된 피부 조직을 <br>
                                                    재생시키는 치료
                                                </p>
                                                <p class="m_cont_434 fz_18 ls_2 lh_14 light">
                                                    손상된 피부 조직을 
                                                    재생시키는 치료
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="sub_tabcontent_container_full flex_row fw jc_fs al_fs">
                                    <div class="sub_cont_title title_left">
                                        <p class="sub_cont_title_text01 sortsmillgoudy fz_20 lh_14 ls_2 light gs_reveal" data-gs-delay="200">
                                            Oracle Point.03
                                        </p>
                                        <p class="sub_cont_title_text02 fz_32 lh_14 ls_2 light m_40 gs_reveal" data-gs-delay="400">
                                            여드름 <span class="medium">레이저 프로그램</span>
                                        </p>
                                    </div>
                                    <div class="swiper-container sub2_1_4_cont5_slider">
                                        <div class="swiper-wrapper">
                                            
                                            <?php 
                                                include(G5_PATH.'/theme/oracle/include/equip_laser.php');
                                            ?>
                                            
                                        </div>
                                        <div class="swiper-scrollbar"></div>
                                    </div>
                                    
                                    <?php 
                                        include(G5_PATH.'/theme/oracle/include/equip_laser_content.php');
                                    ?>
                                </div>
                            </div>
                        </div>
                        
                        <div class="sub_cont_box sub2_1_youtube_box pd_120">
                            <div class="container-sm flex_row fw jc_center al_fs">
                                <div class="sub_cont_title sub2_1_4_cont_title_center ta_c">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                                    <p class="sub_cont_title_text01 sortsmillgoudy fz_50 lh_14 ls_2 gs_reveal" data-gs-delay="200">
                                        Youtube
                                    </p>
                                    <p class="sub_cont_title_text02 fz_20 lh_16 ls_2 normal gs_reveal m_60" data-gs-delay="400">
                                        피부과 전문의가 직접 들려 주는 <br>
                                        <span class="fz_30 ls_2 lh_14 normal">여드름/모공 치료</span>
                                    </p>
                                </div>
                                <div class="sub2_1_youtube_wrap flex_row fw jc_center al_fs m_60">
                                    <?php 
                                        include(G5_PATH.'/theme/oracle/include/youtube_list.php');
                                    ?>
                                </div>
                                <div class="sub2_1_youtube_more_btn">
                                    <a href="<?php echo G5_THEME_URL?>/sub/sub1_6.php">
                                        <p class="fz_16 lh_1 ls_2 light ta_c">more</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        </section>
        
    </main>
    <!-- //main -->
    
<?php
include_once(G5_PATH.'/tail.php');
?>


<script>
    function opensubtab(evt, tabName) {
        var i, tabcontent2, tablinks2;
        tabcontent2 = document.getElementsByClassName("sub_tabcontent");
        for (i = 0; i < tabcontent2.length; i++) {
          tabcontent2[i].style.display = "none";
        }
        tablinks2 = document.getElementsByClassName("sub_tablinks");
        for (i = 0; i < tablinks2.length; i++) {
          tablinks2[i].className = tablinks2[i].className.replace(" active", "");
        }
        document.getElementById(tabName).style.display = "block";
        evt.currentTarget.className += " active";
        
        ScrollTrigger.refresh();
    }
    
    //<!-- Javascript를 이용해서 다음 페이지에 파라미터 넘기기 위한 방법 -->
    window.onload = function(){
        var val = location.href.substr(
            location.href.lastIndexOf('=') + 1
        );
        //console.log('val : ' + val);
        if(val == 1){
            opensubtab(event, 'sub_tabcontent1');
            $('#sub_tablinks01').addClass('active');
        } else if(val == 2){
            opensubtab(event, 'sub_tabcontent2');
            $('#sub_tablinks02').addClass('active');
        } else if(val == 3){
            opensubtab(event, 'sub_tabcontent3');
            $('#sub_tablinks03').addClass('active');
        } else if(val == 4){
            opensubtab(event, 'sub_tabcontent4');
            $('#sub_tablinks04').addClass('active');
        }
    }
    //<!-- //Javascript를 이용해서 다음 페이지에 파라미터 넘기기 위한 방법 -->
    
    
    
    const more_popup_open_btn01 = document.querySelector('.more_popup_open_btn01');
    const more_popup_close_btn01 = document.querySelector('.more_popup_close_btn01');
    const more_popup_box01 = document.querySelector('.more_popup_box01');
    
    const more_popup_open_btn02 = document.querySelector('.more_popup_open_btn02');
    const more_popup_close_btn02 = document.querySelector('.more_popup_close_btn02');
    const more_popup_box02 = document.querySelector('.more_popup_box02');
    
    const more_popup_open_btn03 = document.querySelector('.more_popup_open_btn03');
    const more_popup_close_btn03 = document.querySelector('.more_popup_close_btn03');
    const more_popup_box03 = document.querySelector('.more_popup_box03');
    
    const more_popup_open = function(){
        more_popup_box01.classList.add('open');
        more_popup_box02.classList.add('open');
        more_popup_box03.classList.add('open');
    }
    const more_popup_close = function(){
        more_popup_box01.classList.remove('open');
        more_popup_box02.classList.remove('open');
        more_popup_box03.classList.remove('open');
    }
    
    more_popup_open_btn01.addEventListener(clickEvent, more_popup_open);
    more_popup_close_btn01.addEventListener(clickEvent, more_popup_close);
    
    more_popup_open_btn02.addEventListener(clickEvent, more_popup_open);
    more_popup_close_btn02.addEventListener(clickEvent, more_popup_close);
    
    more_popup_open_btn03.addEventListener(clickEvent, more_popup_open);
    more_popup_close_btn03.addEventListener(clickEvent, more_popup_close);
</script>