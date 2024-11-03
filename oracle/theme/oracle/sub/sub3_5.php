<?php
include_once('./_common.php');
//if (G5_IS_MOBILE) {
//    include_once(G5_MOBILE_PATH.'/index.php');
//    return;
//}

// 웹사이트 타이틀
$g5['title'] = '사마귀/티눈';

include_once(G5_PATH.'/head.php');
?>
    
    <script>
        $(document).ready(function(){
            var window_width = $(window).width();
            if (window_width <= 480) {
                $('.ht-inner').removeClass('sub_header');
            } else {
                $('.ht-inner').removeClass('sub_header');
            }
        });
    </script>
    <main id="content">
        <article class="sub_content01" id="startContent">
            <div class="sub_top_view sub3_5_top_view">
                <div class="sub_top_view_bg sub3_5_top_view_bg"></div>
                <div class="sub_top_view_text_wrap sub3_5_top_view_text_wrap ta_c">
                    <div class="sub_top_view_text01 sub3_5_top_view_text01">
                        <p class="sortsmillgoudy fz_30 lh_14 ls_2 sub_text_ani ta_c">
                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub_top_view_text_icon.png" alt="">
                            Wart & Corn Treatment
                        </p>
                    </div>
                    <div class="sub_top_view_text02 sub3_5_top_view_text02 m_20">
                        <p class="c-w fz_40 lh_14 ls_2 medium sub_text_ani">
                            사마귀/티눈
                        </p>
                    </div>
                    <div class="sub_top_view_text03 sub3_5_top_view_text03">
                        <p class="c-w fz_16 lh_14 ls_2 normal sub_text_ani">
                            면역 체계부터 바로잡는 피부과 전문의 1:1 집중 치료로
                        </p>
                    </div>
                    <div class="sub_top_view_text04 sub3_5_top_view_text04">
                        <p class="c-w fz_16 lh_14 ls_2 normal sub_text_ani">
                            재발을 방지하고 확실하게 제거하는 사마귀/티눈 치료
                        </p>
                    </div>
                </div>
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
        
        <article class="sub_cont_box sub2_1_1_cont1_1_box bg_fa pd_120">
            <div class="sub_tabcontent_container sub7_container flex_row fw sa center">
                <div class="sub_cont_title sub3_1_cont01_title_left title_left">
                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                    <p class="sub_cont_title_text01 fz_32 lh_14 ls_2 light m_40">
                        면역 체계까지 바로잡는 <br>
                        <span class="medium">근본적인 사마귀/티눈 치료</span>
                    </p>
                    <p class="pc_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 light">
                        바이러스성 피부 질환인 사마귀는 면역력과 깊은 관련이 있으며, <br>
                        티눈의 경우 반복적인 자극과 생활습관과 깊은 관련이 있습니다. <br>
                        인천 오라클피부과의 사마귀/티눈 치료 프로그램은 근본적인 원인부터 <br>
                        치료하는 프로그램으로서, 집중 치료는 물론, 면역 체계부터 바로잡고 <br>
                        피부를 자극하는 생활습관 교정을 함께 진행하여 재발을 방지합니다.
                    </p>
                    <p class="m_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 light">
                        바이러스성 피부 질환인 사마귀는 면역력과 깊은 관련이 있으며, 
                        티눈의 경우 반복적인 자극과 생활습관과 깊은 관련이 있습니다. <br>
                        인천 오라클피부과의 사마귀/티눈 치료 프로그램은 근본적인 원인부터 
                        치료하는 프로그램으로서, 집중 치료는 물론, 면역 체계부터 바로잡고 
                        피부를 자극하는 생활습관 교정을 함께 진행하여 재발을 방지합니다.
                    </p>
                </div>
                <div class="sub_cont_doct_video sub3_1_cont01_img img_right ta_r">
                    <div class="video-real-selfie small-video-wrap" style="overflow:hidden;">
                        <div class="video-real-selfie-wrapper" style="position: relative; padding:56.25% 0 0;">
                            <video id="realSelfieVideo" poster="<?php echo G5_THEME_URL?>/sub/img/sub3_5_cont01_video_bg01.jpg" preload="none" style="position: absolute; top:0; left:0; width:100%;"  autoplay muted loop playsinline>
                                <source src="<?php echo G5_THEME_URL?>/video/sub3_5_cont01_video01.mp4" type="video/mp4">
                            </video>
                        </div>
                    </div>
                </div>
            </div>
        </article>
        
        <article class="sub_cont_box sub2_1_1_cont1_2_box pd_120">
            <div class="sub_tabcontent_container flex_row fw jc_center al_fs">
                <div class="sub_cont_title sub2_1_1_cont_title_center ta_c">
                    <p class="sub_cont_title_text01 fz_22 lh_14 ls_2 normal gs_reveal" data-gs-delay="200">
                        피부질환
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
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub3_5_ba_slide_img01_b.jpg" alt="">
                                        </div>
                                        <div class="sub2_1_1_ba_slide_img_a <?=($is_member ? '':'blur')?>">
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub3_5_ba_slide_img01_a.jpg" alt="">
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
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub3_5_ba_slide_img02_b.jpg" alt="">
                                        </div>
                                        <div class="sub2_1_1_ba_slide_img_a <?=($is_member ? '':'blur')?>">
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub3_5_ba_slide_img02_a.jpg" alt="">
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
        </article>
        
        <article class="sub_cont_box sub3_2_cont03_box bg_ff pd_120">
            <div class="sub_tabcontent_container sub7_container flex_row fw jc_center center">
                <div class="sub_cont_title sub3_2_cont03_title_center ta_c">
                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                    <p class="sub_cont_title_text01 fz_32 lh_14 ls_2 light m_80 gs_reveal" data-gs-delay="200">
                        사마귀와 티눈의 <span class="medium">차이점</span>
                    </p>
                </div>
                <div class="sub3_3_cont04_box flex_row fw jc_center al_fs gs_reveal" data-gs-delay="400">
                    <div class="column_half_40">
                        <div class="sub3_3_cont04_item sub3_4_cont03_item01 ta_c">
                            <div class="sub3_3_cont04_item_img sub3_3_cont04_item_img01">
                                <img src="<?php echo G5_THEME_URL?>/sub/img/sub3_5_cont03_item01.png" alt="">
                            </div>
                            <div class="flex_row jc_center center sub3_3_cont04_item_text sub3_3_cont04_item_text01 sub3_5_cont03_item_text01_1">
                                <p class="fz_20 ls_2 lh_16 normal">
                                    사마귀
                                </p>
                            </div>
                            <div class="flex_row fw jc_center center sub3_3_cont04_item_text sub3_5_cont03_item_text01">
                                <div class="flex_row fw jc_center center sub3_5_cont03_item_text02 ta_l">
                                    <p class="fz_16 ls_2 lh_16 medium m_10">
                                        원인
                                    </p>
                                    <p class="fz_16 ls_2 lh_16 medium m_10">
                                        통증
                                    </p>
                                    <p class="fz_16 ls_2 lh_16 medium m_10">
                                        형태
                                    </p>
                                    <p class="fz_16 ls_2 lh_16 medium">
                                        전염성
                                    </p>
                                </div>
                                <div class="flex_row fw jc_center center sub3_5_cont03_item_text03 ta_l">
                                    <p class="fz_16 ls_2 lh_16 normal m_10">
                                        바이러스성 감염
                                    </p>
                                    <p class="fz_16 ls_2 lh_16 normal m_10">
                                        수평으로 눌렀을 때
                                    </p>
                                    <p class="fz_16 ls_2 lh_16 normal m_10">
                                        두꺼워진 각질층 아래 출혈 점이 있음
                                    </p>
                                    <p class="fz_16 ls_2 lh_16 normal">
                                        있음
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column_half_40">
                        <div class="sub3_3_cont04_item sub3_4_cont03_item02 ta_c border_left">
                            <div class="sub3_3_cont04_item_img sub3_3_cont04_item_img02">
                                <img src="<?php echo G5_THEME_URL?>/sub/img/sub3_5_cont03_item02.png" alt="">
                            </div>
                            <div class="flex_row jc_center center sub3_3_cont04_item_text sub3_3_cont04_item_text01 sub3_5_cont03_item_text01_2">
                                <p class="fz_20 ls_2 lh_16 normal">
                                    티눈
                                </p>
                            </div>
                            <div class="flex_row fw jc_center center sub3_3_cont04_item_text sub3_5_cont03_item_text01">
                                <div class="flex_row fw jc_center center sub3_5_cont03_item_text02 ta_l">
                                    <p class="fz_16 ls_2 lh_16 medium m_10">
                                        원인
                                    </p>
                                    <p class="fz_16 ls_2 lh_16 medium m_10">
                                        통증
                                    </p>
                                    <p class="fz_16 ls_2 lh_16 medium m_10">
                                        형태
                                    </p>
                                    <p class="fz_16 ls_2 lh_16 medium">
                                        전염성
                                    </p>
                                </div>
                                <div class="flex_row fw jc_center center sub3_5_cont03_item_text03 ta_l">
                                    <p class="fz_16 ls_2 lh_16 normal m_10">
                                        반복적인 압력과 마찰
                                    </p>
                                    <p class="fz_16 ls_2 lh_16 normal m_10">
                                        수직으로 눌렀을 때
                                    </p>
                                    <p class="fz_16 ls_2 lh_16 normal m_10">
                                        두꺼운 각질층 아래 동그란 핵이 있음
                                    </p>
                                    <p class="fz_16 ls_2 lh_16 normal">
                                        없음
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </article>
        
        <article class="sub_cont_box sub2_1_1_cont1_1_box bg_ff pd_120">
            <div class="sub_tabcontent_container sub7_container flex_row fw sa center">
                <div class="sub_cont_title sub3_1_cont01_title_left title_left">
                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                    <p class="sub_cont_title_text01 fz_32 lh_14 ls_2 light m_30 gs_reveal" data-gs-delay="200">
                        <span class="medium">조직 손상 없이 효과적인 제거,</span> <br>
                        냉동 치료
                    </p>
                    <ul class="sub2_8_6_cont03_item_ul fz_17 ls_2 lh_16 normal ta_l gs_reveal m_30" data-gs-delay="400">
                        <li>
                            <p>
                                바이러스를 국소적으로 얼려 제거하는 방법
                            </p>
                        </li>
                        <li>
                            <p>
                                사마귀, 티눈 등에 적합
                            </p>
                        </li>
                        <li>
                            <p>
                                반복적인 치료 가능
                            </p>
                        </li>
                    </ul>
                    <p class="pc_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light gs_reveal" data-gs-delay="600">
                        사마귀/티눈의 핵심까지 정확하게 제거하여 <br> 
                        병변의 재발 가능성을 최소화 합니다.
                    </p>
                    <p class="m_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light gs_reveal" data-gs-delay="600">
                        사마귀/티눈의 핵심까지 정확하게 제거하여 
                        병변의 재발 가능성을 최소화 합니다.
                    </p>
                </div>
                <div class="sub_cont_doct_img sub3_1_cont01_img img_right ta_c">
                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub3_5_cont04_img01.png" alt="">
                </div>
            </div>
        </article>
        
        <article class="sub_cont_box sub3_1_cont04_box bg_ff pd_100 pt_120">
            <div class="sub_tabcontent_container sub7_container flex_row fw jc_center center">
                <div class="sub_cont_title sub3_1_cont04_title_center ta_c">
                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                    <p class="sub_cont_title_text01 fz_32 lh_14 ls_2 light m_60 gs_reveal" data-gs-delay="200">
                        제거부터 면역 치료까지, <br>
                        <span class="medium">사마귀 치료 과정</span>
                    </p>
                </div>
                <div class="sub3_5_cont05_item_box flex_row fw jc_center al_fs">
                    <div class="column_third_30">
                        <div class="sub3_5_cont05_item sub3_5_cont05_item01 ta_c gs_reveal" data-gs-delay="200">
                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub3_5_cont05_img01.png" alt="">
                            
                            <p class="sub3_5_cont05_item_text01 sortsmillgoudy fz_20 ls_2 lh_16 ta_c normal">point 01</p>
                            <p class="sub3_5_cont05_item_text02 fz_17 ls_2 lh_16 ta_c normal">
                                정밀 진단 장비를 사용한 <br>
                                피부과 전문의의 1:1 <br>
                                사마귀/티눈 진단
                            </p>
                        </div>
                    </div>
                    <div class="column_third_30">
                        <div class="sub3_5_cont05_item sub3_5_cont05_item02 ta_c gs_reveal" data-gs-delay="400">
                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub3_5_cont05_img02.png" alt="">
                            
                            <p class="sub3_5_cont05_item_text01 sortsmillgoudy fz_20 ls_2 lh_16 ta_c normal">point 02</p>
                            <p class="sub3_5_cont05_item_text02 fz_17 ls_2 lh_16 ta_c normal">
                                사마귀 크기와 종류에 <br>
                                맞춘 집중치료
                            </p>
                        </div>
                    </div>
                    <div class="column_third_30">
                        <div class="sub3_5_cont05_item sub3_5_cont05_item03 ta_c gs_reveal" data-gs-delay="600">
                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub3_5_cont05_img03.png" alt="">
                            
                            <p class="sub3_5_cont05_item_text01 sortsmillgoudy fz_20 ls_2 lh_16 ta_c normal">point 03</p>
                            <p class="pc_cont_434 sub3_5_cont05_item_text02 fz_17 ls_2 lh_16 ta_c normal">
                                2차 감염을 방지하는 시술 후 <br>
                                면역 치료 시스템
                            </p>
                            <p class="m_cont_434 sub3_5_cont05_item_text02 fz_17 ls_2 lh_16 ta_c normal">
                                2차 감염을 방지하는 시술 후 
                                면역 치료 시스템
                            </p>
                        </div>
                    </div>
                    <div class="column_third_30">
                        <div class="sub3_5_cont05_item sub3_5_cont05_item04 ta_c gs_reveal" data-gs-delay="800">
                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub3_5_cont05_img04.png" alt="">
                            
                            <p class="sub3_5_cont05_item_text01 sortsmillgoudy fz_20 ls_2 lh_16 ta_c normal">point 04</p>
                            <p class="sub3_5_cont05_item_text02 fz_17 ls_2 lh_16 ta_c normal">
                                재발률을 낮추는 <br>
                                사후 관리 교육
                            </p>
                        </div>
                    </div>
                    <div class="column_third_30">
                        <div class="sub3_5_cont05_item sub3_5_cont05_item05 ta_c gs_reveal" data-gs-delay="1000">
                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub3_5_cont05_img05.png" alt="">
                            
                            <p class="sub3_5_cont05_item_text01 sortsmillgoudy fz_20 ls_2 lh_16 ta_c normal">point 05</p>
                            <p class="sub3_5_cont05_item_text02 fz_17 ls_2 lh_16 ta_c normal">
                                개인 맞춤 치료 <br>
                                스케쥴 수립
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </article>
        
        <article class="sub_cont_box sub2_1_1_cont4_box p_r">
            <div class="sub2_1_1_cont4 sub3_1_cont09 flex_row fw jc_center center">
                <div class="column_half">
                    <div class="sub2_5_2_cont04_left sub3_1_fullcont_left sub3_1_fullcont_left_top flex_row fw fd_c jc_center center">
                        <div class="sub_cont_title ta_c">
                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                            <p class="sub_cont_title_text01 fz_32 lh_14 ls_2 light m_30 gs_reveal" data-gs-delay="200">
                                정확한 치료 설계를 위한 <br>
                                <span class="medium">피부질환 주치의</span> 시스템
                            </p>
                            <p class="pc_cont_434 sub_cont_title_text02 fz_16 lh_14 ls_2 light gs_reveal m_80" data-gs-delay="400">
                                난치성 피부질환은 주치의와 꾸준한 소통과 단계별 치료 플랜, 장기간의 치료 기간이 <br>
                                필요합니다. 인천 오라클피부과는 정확한 치료 설계와 더 나은 치료 결과를 위해 <br>
                                담당의 지정 주치의 시스템을 진행하고 있습니다.
                            </p>
                            <p class="m_cont_434 sub_cont_title_text02 fz_16 lh_14 ls_2 light gs_reveal m_60" data-gs-delay="400">
                                난치성 피부질환은 주치의와 꾸준한 소통과 단계별 치료 플랜, 장기간의 치료 기간이 
                                필요합니다. 인천 오라클피부과는 정확한 치료 설계와 더 나은 치료 결과를 위해 
                                담당의 지정 주치의 시스템을 진행하고 있습니다.
                            </p>
                        </div>
                    </div>
                    <div class="sub2_5_2_cont04_left sub3_1_fullcont_left sub3_1_fullcont_left_bottom flex_row fw fd_c jc_center center">
                        <div class="sub_cont_title ta_l">
                            <ul class="sub2_8_6_cont03_item_ul fz_17 normal ta_l gs_reveal" data-gs-delay="600">
                                <li>
                                    <p>피부과 전문의 1:1 전담 주치의 시스템</p>
                                </li>
                                <li>
                                    <p class="pc_cont_434">남, 녀 피부과 전문의 선택 진료 가능 <br>(* 구월점 한정)</p>
                                    <p class="m_cont_434">남, 녀 피부과 전문의 <br>선택 진료 가능 (* 구월점 한정)</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="column_half">
                    <div class="sub2_1_1_cont4_img">
                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub3_4_cont09_img_right.jpg" alt="">
                    </div>
                </div>
            </div>
        </article>
        
        <!--
        <article class="sub_cont_box sub2_2_1_cont04_box p_r bg_fa pd_160">
            <div class="container-1300 sub2_2_1_cont05_container">
                <div class="sub_click_btn open m_20" id="sub_click_btn1">
                    <p class="sub_cont_title_text01 sortsmillgoudy fz_20 lh_16 ls_2 light">
                        Benign Skin Tumor
                    </p>
                    <p class="sub_cont_title_text02 fz_32 lh_16 ls_2 light">
                        피부양성종양 수술 <span class="medium">후 주의사항</span>
                    </p>
                </div>
                <div class="sub2_2_1_cont05_text open li_3 sub_click_box" id="sub_click_box1">
                    <ul class="sub2_2_1_cont05_item_ul fz_17 normal ta_l">
                        <li>
                            <p>수술 후에는 실밥 제거 때까지 물이 닿지 않게 하고 땀을 흘리는 운동, 사우나 등은 삼가 주세요.</p>
                        </li>
                        <li>
                            <p>실 제거 후에는 샤워와 가벼운 운동이 가능하나 병변의 위치와 크기에 따라 달라질 수 있습니다.</p>
                        </li>
                        <li>
                            <p>수술 부위가 붓고, 아프고, 진물 등이 난다면 전화 후 내원해 주세요.</p>
                        </li>
                    </ul>
                </div>
            </div>
        </article>
        -->
        <!--
        <article class="sub_cont_box sub2_1_youtube_box bg_fa pd_160 pt_120">
            <div class="container-sm flex_row fw jc_center al_fs">
                <div class="sub_cont_title sub2_1_4_cont_title_center ta_c">
                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                    <p class="sub_cont_title_text01 sortsmillgoudy fz_50 lh_14 ls_2 gs_reveal" data-gs-delay="200">
                        Youtube
                    </p>
                    <p class="sub_cont_title_text02 fz_20 lh_16 ls_2 normal gs_reveal m_60" data-gs-delay="400">
                        피부과 전문의가 직접 들려 주는 <br>
                        <span class="fz_30 ls_2 lh_14 normal">피부질환 진료</span>
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
        </article>
        -->
        
    </main>
    <!-- //main -->
    
<?php
include_once(G5_PATH.'/tail.php');
?>
