<?php
include_once('./_common.php');
//if (G5_IS_MOBILE) {
//    include_once(G5_MOBILE_PATH.'/index.php');
//    return;
//}

// 웹사이트 타이틀
$g5['title'] = '백반증';

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
            <div class="sub_top_view sub3_1_top_view">
                <div class="sub_top_view_bg sub3_1_top_view_bg"></div>
                <div class="sub_top_view_text_wrap sub3_1_top_view_text_wrap ta_c">
                    <div class="sub_top_view_text01 sub3_1_top_view_text01">
                        <p class="sortsmillgoudy fz_30 lh_14 ls_2 sub_text_ani ta_c">
                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub_top_view_text_icon.png" alt="">
                            Vitiligo Treatment
                        </p>
                    </div>
                    <div class="sub_top_view_text02 sub3_1_top_view_text02 m_20">
                        <p class="c-w fz_40 lh_14 ls_2 medium sub_text_ani">
                            백반증
                        </p>
                    </div>
                    <div class="sub_top_view_text03 sub3_1_top_view_text03">
                        <p class="c-w fz_16 lh_14 ls_2 normal sub_text_ani">
                            최첨단 장비와 피부과 전문의의 풍부한 경험을 바탕으로
                        </p>
                    </div>
                    <div class="sub_top_view_text04 sub3_1_top_view_text04">
                        <p class="c-w fz_16 lh_14 ls_2 normal sub_text_ani">
                            안전하게 진행되는 고효율 백반증 치료
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
                        첨단 의술과 백반증 치료 빅데이터를 <br>
                        기반으로 한 <span class="medium">저자극 백반증 치료</span>
                    </p>
                    <p class="pc_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 light">
                        인천 오라클피부과는 10년 넘게 피부와 백반증 질환을 연구해온 <br>
                        대한민국 2% 피부과 전문의가 1:1 맞춤 치료를 진행합니다. <br>
                        최첨단 장비와 치료법, 수많은 치료 경험을 바탕으로 쌓아온 임상 <br>
                        빅데이터를 기반으로 면역 체계를 바로잡고, 피부색을 회복시킵니다.
                    </p>
                    <p class="m_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 light">
                        인천 오라클피부과는 10년 넘게 피부와 백반증 질환을 연구해온 
                        대한민국 2% 피부과 전문의가 1:1 맞춤 치료를 진행합니다. <br>
                        최첨단 장비와 치료법, 수많은 치료 경험을 바탕으로 쌓아온 임상 
                        빅데이터를 기반으로 면역 체계를 바로잡고, 피부색을 회복시킵니다.
                    </p>
                </div>
                <div class="sub_cont_doct_video sub3_1_cont01_img img_right ta_r">
                    <div class="video-real-selfie small-video-wrap" style="overflow:hidden;">
                        <div class="video-real-selfie-wrapper" style="position: relative; padding:56.25% 0 0;">
                            <video id="realSelfieVideo" poster="<?php echo G5_THEME_URL?>/sub/img/sub3_1_cont01_video_bg01.jpg" preload="none" style="position: absolute; top:0; left:0; width:100%;"  autoplay muted loop playsinline>
                                <source src="<?php echo G5_THEME_URL?>/video/sub3_1_cont01_video01.mp4" type="video/mp4">
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
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub3_1_ba_slide_img01_b_230404.jpg" alt="">
                                        </div>
                                        <div class="sub2_1_1_ba_slide_img_a <?=($is_member ? '':'blur')?>">
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub3_1_ba_slide_img01_a_230404.jpg" alt="">
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
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub3_1_ba_slide_img02_b_230404.jpg" alt="">
                                        </div>
                                        <div class="sub2_1_1_ba_slide_img_a <?=($is_member ? '':'blur')?>">
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub3_1_ba_slide_img02_a_230404.jpg" alt="">
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
        
        <article class="sub_cont_box sub3_1_cont03_box bg_ff pd_120">
            <div class="sub_tabcontent_container sub7_container sub2_1_cont03_container flex_row fw sa center">
                <div class="sub_cont_title sub3_1_cont01_title_left title_left">
                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                    <p class="sub_cont_title_text01 fz_32 lh_14 ls_2 normal m_40 gs_reveal" data-gs-delay="200">
                        조기 발견,  <br>
                        꾸준한 치료가 핵심인 백반증
                    </p>
                    <p class="pc_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 light gs_reveal" data-gs-delay="400">
                        피부 위 하얀 반점인 백반증은 잘못된 면역 반응 혹은 멜라닌 색소의 <br>
                        결핍으로 인해 생기는 질환입니다. 피부에 흰색으로 보이는 탈색반이 <br>
                        발생하며, 온몸으로 번질 수 있어 주의가 필요합니다. <br>
                        오라클피부과는 정확한 진단과 면역 체계까지 바로잡는 체계적인 <br>
                        치료 시스템을 바탕으로 피부 색을 건강하게 회복합니다.
                    </p>
                    <p class="m_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 light gs_reveal" data-gs-delay="400">
                        피부 위 하얀 반점인 백반증은 잘못된 면역 반응 혹은 멜라닌 색소의 
                        결핍으로 인해 생기는 질환입니다. 피부에 흰색으로 보이는 탈색반이 
                        발생하며, 온몸으로 번질 수 있어 주의가 필요합니다. <br>
                        오라클피부과는 정확한 진단과 면역 체계까지 바로잡는 체계적인 
                        치료 시스템을 바탕으로 피부 색을 건강하게 회복합니다.
                    </p>
                </div>
                <div class="sub_cont_doct_img sub3_1_cont01_img img_right ta_c">
                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub3_1_cont03_img01.png" alt="">
                </div>
            </div>
        </article>
        
        <article class="sub_cont_box sub3_1_cont04_box bg_ff pd_120">
            <div class="sub_tabcontent_container sub7_container flex_row fw jc_center center">
                <div class="sub_cont_title sub3_1_cont04_title_center ta_c">
                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                    <p class="sub_cont_title_text01 fz_32 lh_14 ls_2 light m_20 gs_reveal" data-gs-delay="200">
                        <span class="medium">대학병원급 백반증 치료가 가능한</span> <br>
                        인천 오라클피부과
                    </p>
                    <p class="sub_cont_title_text02 fz_16 lh_16 ls_2 light m_60 gs_reveal" data-gs-delay="400">
                        이제 가까운 인천 오라클피부과에서 <br>
                        대기 없이 대학병원급 백반증 치료를 받아보세요.
                    </p>
                </div>
                <div class="sub3_1_cont04_item_box flex_row fw jc_center al_fs">
                    <div class="column_quarter">
                        <div class="sub2_4_3_cont03_item sub2_4_3_cont03_item01 ta_c gs_reveal" data-gs-delay="200">
                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub3_1_cont04_img01.png" alt="">
                        </div>
                    </div>
                    <div class="column_quarter">
                        <div class="sub2_4_3_cont03_item sub2_4_3_cont03_item02 ta_c gs_reveal" data-gs-delay="400">
                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub3_1_cont04_img02.png" alt="">
                        </div>
                    </div>
                    <div class="column_quarter">
                        <div class="sub2_4_3_cont03_item sub2_4_3_cont03_item03 ta_c gs_reveal" data-gs-delay="600">
                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub3_1_cont04_img03.png" alt="">
                        </div>
                    </div>
                    <div class="column_quarter">
                        <div class="sub2_4_3_cont03_item sub2_4_3_cont03_item04 ta_c gs_reveal" data-gs-delay="800">
                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub3_1_cont04_img04.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </article>
        
        <article class="sub_cont_box sub2_1_4_cont_box pd_60">
            <div class="sub2_1_4_cont3_bg sub7_cont3_bg">
                <div class="sub_cont_title sub2_1_4_cont_title_center p_r ta_c pt_100">
                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                    <p class="sub_cont_top_title_text01 fz_30 lh_14 ls_2 normal gs_reveal" data-gs-delay="200">
                        인천 오라클피부과의 <br>
                        백반증 치료 <span class="medium">핵심 노하우</span>
                    </p>
                </div>
                <div class="sub_tabcontent_container sub7_container sub2_1_cont03_container flex_row fw sa center">
                    <div class="sub_cont_title sub3_1_cont05_title_left title_left">
                        <p class="sub_cont_title_text01 sortsmillgoudy fz_20 lh_14 ls_2 light gs_reveal m_10" data-gs-delay="200">
                            Point.01
                        </p>
                        <p class="sub_cont_title_text02 fz_32 lh_14 ls_2 normal m_40 gs_reveal" data-gs-delay="400">
                            첨단 장비를 활용한 <span class="medium">정확한 진단</span>
                        </p>
                        <div class="m_cont_434 sub_cont_doct_img sub3_1_cont05_img img_right ta_c">
                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub3_1_cont05_img01.png" alt="">
                            
                            <div class="sub3_1_cont05_img_btn" id="sub3_1_cont05_img_btn_m"></div>
                            <div class="sub3_1_cont05_img_on" id="sub3_1_cont05_img_on_m">
                                <img src="<?php echo G5_THEME_URL?>/sub/img/sub3_1_cont05_img01_on.png" alt="">
                            </div>
                        </div>
                        <p class="pc_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light gs_reveal" data-gs-delay="600">
                            인천 오라클피부과에서는 더모코스피 검사와 365nm 이상의 <br>
                            파장을 가진 자외선을 이용하는 우드 램프를 통해 백반증 진단을 <br>
                            진행합니다. 정확한 진단 후 정교한 치료 계획을 수립합니다. <br>
                            면역 이상이 의심될 경우, 기능검사 및 혈액 검사를 통해 더 <br>
                            정밀 진단을 진행합니다.
                        </p>
                        <p class="m_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light gs_reveal" data-gs-delay="600">
                            인천 오라클피부과에서는 더모코스피 검사와 365nm 이상의 
                            파장을 가진 자외선을 이용하는 우드 램프를 통해 백반증 진단을 
                            진행합니다. 정확한 진단 후 정교한 치료 계획을 수립합니다. <br>
                            면역 이상이 의심될 경우, 기능검사 및 혈액 검사를 통해 더 
                            정밀 진단을 진행합니다.
                        </p>
                    </div>
                    <div class="pc_cont_434 sub_cont_doct_img sub3_1_cont05_img img_right ta_c">
                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub3_1_cont05_img01.png" alt="">
                        
                        <div class="sub3_1_cont05_img_btn" id="sub3_1_cont05_img_btn"></div>
                        <div class="sub3_1_cont05_img_on" id="sub3_1_cont05_img_on">
                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub3_1_cont05_img01_on.png" alt="">
                        </div>
                    </div>
                </div>
                <script>
                    var clickEvent = (function () {
                        if ('ontouchstart' in document.documentElement === true) {
                            return 'touchstart';
                        } else {
                            return 'click';
                        }
                    })(); // 클릭이벤트와 터치이벤트 토글
                    
                    var sub3_1_cont05_img_btn = document.getElementById('sub3_1_cont05_img_btn');
                    var sub3_1_cont05_img_on = document.getElementById('sub3_1_cont05_img_on');
                    var sub3_1_cont05_img_click = function(){
                        sub3_1_cont05_img_btn.classList.toggle('on');
                        sub3_1_cont05_img_on.classList.toggle('on');
                    }
                    var sub3_1_cont05_img_btn_m = document.getElementById('sub3_1_cont05_img_btn_m');
                    var sub3_1_cont05_img_on_m = document.getElementById('sub3_1_cont05_img_on_m');
                    var sub3_1_cont05_img_click_m = function(){
                        sub3_1_cont05_img_btn_m.classList.toggle('on');
                        sub3_1_cont05_img_on_m.classList.toggle('on');
                    }
                    sub3_1_cont05_img_btn.addEventListener(clickEvent, sub3_1_cont05_img_click);
                    sub3_1_cont05_img_btn_m.addEventListener(clickEvent, sub3_1_cont05_img_click_m);
                </script>
                
                <div class="sub_tabcontent_container sub7_container flex_row fw jc_center center">
                    <div class="sub_cont_title sub3_1_cont04_title_center ta_c">
                        <p class="sub_cont_title_text01 sortsmillgoudy fz_20 lh_14 ls_2 light gs_reveal m_10" data-gs-delay="200">
                            Point.02
                        </p>
                        <p class="sub_cont_title_text02 fz_32 lh_14 ls_2 normal m_60 gs_reveal" data-gs-delay="400">
                            백반증 증상에 맞춘 <span class="medium">다양한 솔루션</span>
                        </p>
                    </div>
                    <div class="sub3_1_cont06_item_box flex_row fw jc_center al_fs">
                        <div class="column_quarter">
                            <div class="sub2_4_3_cont03_item sub2_4_3_cont03_item01 ta_c gs_reveal" data-gs-delay="200">
                                <img src="<?php echo G5_THEME_URL?>/sub/img/sub3_1_cont06_img01.png" alt="">
                                <p class="fz_18 ls_2 lh_14 medium">
                                    광선치료 클리닉
                                </p>
                            </div>
                        </div>
                        <div class="column_quarter">
                            <div class="sub2_4_3_cont03_item sub2_4_3_cont03_item02 ta_c gs_reveal" data-gs-delay="400">
                                <img src="<?php echo G5_THEME_URL?>/sub/img/sub3_1_cont06_img02.png" alt="">
                                <p class="fz_18 ls_2 lh_14 medium">
                                    엑시머 레이저
                                </p>
                            </div>
                        </div>
                        <div class="column_quarter">
                            <div class="sub2_4_3_cont03_item sub2_4_3_cont03_item03 ta_c gs_reveal" data-gs-delay="600">
                                <img src="<?php echo G5_THEME_URL?>/sub/img/sub3_1_cont06_img03.png" alt="">
                                <p class="fz_18 ls_2 lh_14 medium">
                                    미세펀치이식술
                                </p>
                            </div>
                        </div>
                        <div class="column_quarter">
                            <div class="sub2_4_3_cont03_item sub2_4_3_cont03_item04 ta_c gs_reveal" data-gs-delay="800">
                                <img src="<?php echo G5_THEME_URL?>/sub/img/sub3_1_cont06_img04.png" alt="">
                                <p class="fz_18 ls_2 lh_14 medium">
                                    약물치료
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="sub_tabcontent_container sub7_container  flex_row fw sa center">
                    <div class="sub_cont_title sub3_1_cont05_title_left title_left">
                        <p class="sub_cont_title_text01 sortsmillgoudy fz_20 lh_14 ls_2 light gs_reveal m_10" data-gs-delay="200">
                            Point.03
                        </p>
                        <p class="sub_cont_title_text02 fz_32 lh_14 ls_2 normal m_30 gs_reveal" data-gs-delay="400">
                            백반증 치료 SYNERGY-UP, <br>
                            시너지 프로그램
                        </p>
                        <p class="pc_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light gs_reveal" data-gs-delay="600">
                            정상 면역 기능을 되돌리고, 백반증을 악화시키는 활성산소를 제거하는 <br>
                            보조 프로그램을 함께 진행하여 백반증 치료 효과에 시너지를 선사합니다. <br>
                            생활 속에서 실천할 수 있는 백반증 예방법과 염증을 방지하는 식단 관리, <br>
                            스트레스 관리까지 통합 관리로 보다 효과적인 백반증 치료가 가능합니다.
                        </p>
                        <p class="m_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light gs_reveal" data-gs-delay="600">
                            정상 면역 기능을 되돌리고, 백반증을 악화시키는 활성산소를 제거하는 
                            보조 프로그램을 함께 진행하여 백반증 치료 효과에 시너지를 선사합니다. <br>
                            생활 속에서 실천할 수 있는 백반증 예방법과 염증을 방지하는 식단 관리, 
                            스트레스 관리까지 통합 관리로 보다 효과적인 백반증 치료가 가능합니다.
                        </p>
                    </div>
                    <div class="sub_cont_doct_img sub3_1_cont05_img img_right ta_c">
                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub3_1_cont08_img01.png" alt="">
                    </div>
                </div>
                
                <div class="sub_tabcontent_container sub7_container  flex_row fw sa center">
                    <div class="sub_cont_title sub3_1_cont05_title_left title_left">
                        <p class="sub_cont_title_text01 sortsmillgoudy fz_20 lh_14 ls_2 light gs_reveal m_10" data-gs-delay="200">
                            Point.04
                        </p>
                        <p class="sub_cont_title_text02 fz_32 lh_14 ls_2 normal m_30 gs_reveal" data-gs-delay="400">
                            민감한 부위도 <br>
                            정교하게 치료 가능한 <br>
                            프라이빗 케어
                        </p>
                        <p class="pc_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light gs_reveal m_30" data-gs-delay="600">
                            완벽하게 분리된 프라이빗 시술 공간에서 1:1로 프라이빗하게 <br>
                            백반증 치료를 진행합니다. 치료 받는 모습이 타인에게 노출될 <br>
                            우려 없이, 편안하게 1인룸에서 1:1 맞춤 백반증 치료를 <br>
                            받아보실 수 있습니다.
                        </p>
                        <p class="m_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light gs_reveal m_30" data-gs-delay="600">
                            완벽하게 분리된 프라이빗 시술 공간에서 1:1로 프라이빗하게 
                            백반증 치료를 진행합니다. 치료 받는 모습이 타인에게 노출될 
                            우려 없이, 편안하게 1인룸에서 1:1 맞춤 백반증 치료를 
                            받아보실 수 있습니다.
                        </p>
                        <p class="c-lightgray fz_14 lh_16 ls_2 light gs_reveal" data-gs-delay="600">
                            * 구월점 한정
                        </p>
                    </div>
                    <div class="sub_cont_doct_img sub3_1_cont05_img img_right ta_c">
                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub3_1_cont07_img01.png" alt="">
                    </div>
                </div>
            </div>
        </article>
        
        <article class="sub_cont_box sub3_1_cont08_box bg_ff pd_120">
            <div class="sub_tabcontent_container sub7_container flex_row fw jc_center center">
                <div class="sub_cont_title sub3_1_cont08_title_center ta_c">
                    <p class="sub_cont_title_text02 fz_20 lh_14 ls_2 light m_30 gs_reveal" data-gs-delay="200">
                        <span class="medium">※</span>
                    </p>
                    <p class="sub_cont_title_text03 fz_32 lh_14 ls_2 light m_30 gs_reveal" data-gs-delay="200">
                        <span class="medium">보험 적용이 가능한</span> 백반증 치료
                    </p>
                    <p class="sub_cont_title_text04 fz_16 lh_16 ls_2 light gs_reveal" data-gs-delay="400">
                        노출 부위(얼굴, 목, 손, 팔, 어깨, 무릎 아래, 발) 백반증 치료 보험 적용이 가능합니다. <br>
                        자세한 사항은 가입하신 보험사에 직접 문의 바랍니다.
                    </p>
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
                            <p class="pc_cont_434 sub_cont_title_text02 fz_16 lh_14 ls_2 light gs_reveal m_60" data-gs-delay="400">
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
                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub3_1_cont09_img_right.jpg" alt="">
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
        
    </main>
    <!-- //main -->
    
<?php
include_once(G5_PATH.'/tail.php');
?>
