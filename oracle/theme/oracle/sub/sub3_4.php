<?php
include_once('./_common.php');
//if (G5_IS_MOBILE) {
//    include_once(G5_MOBILE_PATH.'/index.php');
//    return;
//}

// 웹사이트 타이틀
$g5['title'] = '광선치료 클리닉';

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
            <div class="sub_top_view sub3_4_top_view">
                <div class="sub_top_view_bg sub3_4_top_view_bg"></div>
                <div class="sub_top_view_text_wrap sub3_4_top_view_text_wrap ta_c">
                    <div class="sub_top_view_text01 sub3_4_top_view_text01">
                        <p class="sortsmillgoudy fz_30 lh_14 ls_2 sub_text_ani ta_c">
                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub_top_view_text_icon.png" alt="">
                            Phototherapy
                        </p>
                    </div>
                    <div class="sub_top_view_text02 sub3_4_top_view_text02 m_20">
                        <p class="c-w fz_40 lh_14 ls_2 medium sub_text_ani">
                            광선치료 클리닉
                        </p>
                    </div>
                    <div class="sub_top_view_text03 sub3_4_top_view_text03">
                        <p class="c-w fz_16 lh_14 ls_2 normal sub_text_ani">
                            백반증부터 건선, 아토피피부염 등 피부질환을
                        </p>
                    </div>
                    <div class="sub_top_view_text04 sub3_4_top_view_text04">
                        <p class="c-w fz_16 lh_14 ls_2 normal sub_text_ani">
                            자외선치료, 엑시머 치료로 개선하는 프로그램
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
        
        <article class="sub_cont_box sub3_4_cont01_box bg_ff pd_120">
            <div class="sub_tabcontent_container sub7_container sub2_1_cont03_container flex_row fw sa center">
                <div class="sub_cont_title sub3_1_cont01_title_left title_left">
                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                    <p class="sub_cont_title_text01 fz_32 lh_14 ls_2 light m_30">
                        아이, 임산부, 노인도 가능한 <br>
                        <span class="medium">안전하고 간단한 치료</span>
                    </p>
                    <p class="pc_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 light">
                        광선치료란 자외선을 이용해서 피부질환을 치료하는 것으로 <br>
                        파장이 다른 빛을 환부에 비추어 치료합니다. <br>
                        다양한 질환에 사용할 수 있으며 병변과 환자의 상태에 따라 <br>
                        조사할 광선의 양을 정하는 것이 중요합니다. <br>
                        인천 오라클피부과는 다년간의 치료 경험을 바탕으로 적절한 <br>
                        강도 조절을 통해 효과적인 광선치료를 진행합니다.
                    </p>
                    <p class="m_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 light">
                        광선치료란 자외선을 이용해서 피부질환을 치료하는 것으로 
                        파장이 다른 빛을 환부에 비추어 치료합니다. <br>
                        다양한 질환에 사용할 수 있으며 병변과 환자의 상태에 따라 
                        조사할 광선의 양을 정하는 것이 중요합니다. <br>
                        인천 오라클피부과는 다년간의 치료 경험을 바탕으로 적절한 
                        강도 조절을 통해 효과적인 광선치료를 진행합니다.
                    </p>
                </div>
                <div class="sub_cont_doct_video sub3_1_cont01_img img_right ta_r">
                    <div class="video-real-selfie small-video-wrap" style="overflow:hidden;">
                        <div class="video-real-selfie-wrapper" style="position: relative; padding:56.25% 0 0;">
                            <video id="realSelfieVideo" poster="<?php echo G5_THEME_URL?>/sub/img/sub3_4_cont01_video_bg01.jpg" preload="none" style="position: absolute; top:0; left:0; width:100%;"  autoplay muted loop playsinline>
                                <source src="<?php echo G5_THEME_URL?>/video/sub3_4_cont01_video01.mp4" type="video/mp4">
                            </video>
                        </div>
                    </div>
                </div>
            </div>
        </article>
        
        <!--
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
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub3_1_ba_slide_img01_b.jpg" alt="">
                                        </div>
                                        <div class="sub2_1_1_ba_slide_img_a <?=($is_member ? '':'blur')?>">
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub3_1_ba_slide_img01_a.jpg" alt="">
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
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub3_1_ba_slide_img02_b.jpg" alt="">
                                        </div>
                                        <div class="sub2_1_1_ba_slide_img_a <?=($is_member ? '':'blur')?>">
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub3_1_ba_slide_img02_a.jpg" alt="">
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
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub3_1_ba_slide_img01_b.jpg" alt="">
                                        </div>
                                        <div class="sub2_1_1_ba_slide_img_a <?=($is_member ? '':'blur')?>">
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub3_1_ba_slide_img01_a.jpg" alt="">
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
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub3_1_ba_slide_img02_b.jpg" alt="">
                                        </div>
                                        <div class="sub2_1_1_ba_slide_img_a <?=($is_member ? '':'blur')?>">
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub3_1_ba_slide_img02_a.jpg" alt="">
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
        -->
        
        <article class="sub_cont_box bg_ff pd_160 pt_120">
            <div class="sub_tabcontent_container sub7_container flex_row fw jc_center center">
                <div class="sub_cont_title sub3_1_cont04_title_center ta_c">
                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                    <p class="sub_cont_title_text01 fz_32 lh_14 ls_2 normal m_60 gs_reveal" data-gs-delay="200">
                        급성부터 만성, 난치성 질환까지 <br>
                        치료 가능한 광선치료 클리닉
                    </p>
                </div>
                <div class="sub3_4_cont03_item_box flex_row fw jc_center al_fs">
                    <div class="sub3_4_cont03_item sub3_4_cont03_item01 ta_c gs_reveal" data-gs-delay="200">
                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub3_4_cont03_img01.png" alt="">
                    </div>
                    <div class="sub3_4_cont03_item sub3_4_cont03_item02 ta_c gs_reveal" data-gs-delay="400">
                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub3_4_cont03_img02.png" alt="">
                    </div>
                    <div class="sub3_4_cont03_item sub3_4_cont03_item03 ta_c gs_reveal" data-gs-delay="600">
                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub3_4_cont03_img03.png" alt="">
                    </div>
                    <div class="sub3_4_cont03_item sub3_4_cont03_item04 ta_c gs_reveal" data-gs-delay="800">
                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub3_4_cont03_img04.png" alt="">
                    </div>
                    <div class="sub3_4_cont03_item sub3_4_cont03_item05 ta_c gs_reveal" data-gs-delay="1000">
                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub3_4_cont03_img05.png" alt="">
                    </div>
                </div>
            </div>
        </article>
        
        <article class="sub_cont_box sub3_4_cont04_box bg_ff pd_160 m_60">
            <div class="container-sm flex_row fw jc_center al_fs">
                <div class="sub_cont_title sub2_1_4_cont_title_center ta_c">
                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                    <p class="sub_cont_title_text01 fz_32 lh_14 ls_2 normal m_30 gs_reveal" data-gs-delay="200">
                        <span class="medium">안전성과 효과가 입증된</span> <br>
                        고효율 광선 치료 프로그램
                    </p>
                    <p class="pc_cont_434 sub_cont_title_text03 fz_16 lh_14 ls_2 normal m_100 gs_reveal" data-gs-delay="400">
                        스테로이드는 전문의의 감독 하에 안전하게 사용할 수 있지만, <br>
                        그 사용을 줄이기 위해 인천 오라클피부과에서는 <br>
                        안전성과 효율성이 입증된 광선 치료를 병행합니다.
                    </p>
                    <p class="m_cont_434 sub_cont_title_text03 fz_16 lh_14 ls_2 normal m_100 gs_reveal" data-gs-delay="400">
                        스테로이드는 전문의의 감독 하에 안전하게 사용할 수 있지만, 
                        그 사용을 줄이기 위해 인천 오라클피부과에서는 안전성과 효율성이 입증된 광선 치료를 병행합니다.
                    </p>
                </div>
                <div class="sub2_3_1_cont05_box sub2_8_5_cont05_box flex_row fw se al_fs">
                    <div class="column_half">
                        <div class="sub2_8_5_cont02_item sub3_2_cont04_item sub2_8_5_cont02_item01 flex_row jc_center al_fs">
                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub3_2_cont04_item01.png" alt="">

                            <div class="sub_cont_title sub2_8_5_cont02_title_right title_right">
                                <p class="sub_cont_title_text01 fz_23 lh_14 ls_2 light m_20 gs_reveal" data-gs-delay="200">
                                    <span class="medium">엑시머 레이저</span>
                                </p>
                                <ul class="sub2_8_6_cont03_item_ul fz_16 normal ta_l gs_reveal" data-gs-delay="400">
                                    <li>
                                        <p>병변 부위에만 국소적으로 치료 가능</p>
                                    </li>
                                    <li>
                                        <p>초기 치료 반응이 빠른 치료법</p>
                                    </li>
                                    <li>
                                        <p>짧은 치료 시간 & 통증없이 간단한 치료</p>
                                    </li>
                                    <li>
                                        <p>소아, 임산부, 노인도 가능한 안전한 치료</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="column_half">
                        <div class="sub2_8_5_cont02_item sub3_2_cont04_item sub2_8_5_cont02_item02 flex_row jc_center al_fs">
                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub3_2_cont04_item02.png" alt="">

                            <div class="sub_cont_title sub2_8_5_cont02_title_right title_right">
                                <p class="sub_cont_title_text01 fz_23 lh_14 ls_2 light m_20 gs_reveal" data-gs-delay="200">
                                    <span class="medium">광선치료</span>
                                </p>
                                <ul class="sub2_8_6_cont03_item_ul fz_16 normal ta_l gs_reveal" data-gs-delay="400">
                                    <li>
                                        <p>넓은 면적의 병변에 전반적인 치료 가능</p>
                                    </li>
                                    <li>
                                        <p>수분 이내 통증 없이 간단한 치료 가능</p>
                                    </li>
                                    <li>
                                        <p>소아, 임산부, 노인도 가능한 안전한 치료</p>
                                    </li>
                                </ul>
                            </div>
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
