<?php
include_once('./_common.php');
//if (G5_IS_MOBILE) {
//    include_once(G5_MOBILE_PATH.'/index.php');
//    return;
//}

// 웹사이트 타이틀
$g5['title'] = '알레르기/두드러기';

include_once(G5_PATH.'/head.php');
?>
    
    <script>
        $(document).ready(function(){
            var window_width = $(window).width();
            if (window_width <= 480) {
                $('.ht-inner').addClass('sub_header');
            } else {
                $('.main-header').removeClass('color_change');
                $('.ht-inner').removeClass('sub_header');
            }
        });
    </script>
    <main id="content">
        <article class="sub_content01" id="startContent">
            <div class="sub_top_view sub3_8_top_view">
                <div class="sub_top_view_bg sub3_8_top_view_bg"></div>
                <div class="sub_top_view_text_wrap sub3_8_top_view_text_wrap ta_c">
                    <div class="sub_top_view_text01 sub3_8_top_view_text01">
                        <p class="sortsmillgoudy fz_30 lh_14 ls_2 sub_text_ani ta_c">
                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub_top_view_text_icon.png" alt="">
                            Allergy & Urticaria Treatment
                        </p>
                    </div>
                    <div class="sub_top_view_text02 sub3_8_top_view_text02 m_20">
                        <p class="fz_40 lh_14 ls_2 medium sub_text_ani">
                            알레르기/두드러기
                        </p>
                    </div>
                    <div class="sub_top_view_text03 sub3_8_top_view_text03">
                        <p class="fz_16 lh_14 ls_2 normal sub_text_ani">
                            알레르기/두드러기에 대한 정밀한 사전 검진부터
                        </p>
                    </div>
                    <div class="sub_top_view_text04 sub3_8_top_view_text04">
                        <p class="fz_16 lh_14 ls_2 normal sub_text_ani">
                            치료와 생활습관 교정까지 체계적인 알레르기 클리닉
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
        
        <article class="sub_cont_box sub3_8_cont01_box bg_ff pd_120">
            <div class="sub_tabcontent_container sub7_container flex_row fw sa center">
                <div class="sub_cont_title sub3_1_cont01_title_left title_left">
                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                    <p class="sub_cont_title_text01 fz_32 lh_14 ls_2 normal m_40">
                        원인 분석부터 <br>
                        피부 자생력을 높이는 치료까지, <br>
                        체계적인 알레르기/두드러기 치료
                    </p>
                    <p class="pc_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 light">
                        알레르기 및 두드러기 증상에 맞춰 정밀한 사전 검진 후 알맞은 치료를 <br>
                        진행하여 피부의 본래 기능을 회복하고, 피부의 재생력을 높여 재발률을 줄입니다. <br>
                        인천 오라클피부과의 알레르기/두드러기 클리닉은 단회성 치료가 아닌, <br>
                        알레르기 원인 분석과 꾸준한 식이요법 관리와 생활습관 교정을 진행하여 <br>
                        재발을 방지하고, 피부의 자연치유력을 높입니다.
                    </p>
                    <p class="m_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 light">
                        알레르기 및 두드러기 증상에 맞춰 정밀한 사전 검진 후 알맞은 치료를 
                        진행하여 피부의 본래 기능을 회복하고, 피부의 재생력을 높여 재발률을 줄입니다. <br>
                        인천 오라클피부과의 알레르기/두드러기 클리닉은 단회성 치료가 아닌, 
                        알레르기 원인 분석과 꾸준한 식이요법 관리와 생활습관 교정을 진행하여 
                        재발을 방지하고, 피부의 자연치유력을 높입니다.
                    </p>
                </div>
                <div class="sub_cont_doct_img sub3_1_cont01_img img_right ta_r">
                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub3_8_cont01_img01.png" alt="">
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
        
        <article class="sub_cont_box sub3_1_cont03_box bg_ff pd_160 pt_120">
            <div class="sub_tabcontent_container sub7_container sub2_1_cont03_container flex_row fw sa center">
                <div class="sub_cont_doct_img sub3_1_cont01_img img_left ta_c">
                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub3_8_cont03_img01.png" alt="">
                </div>
                <div class="sub_cont_title sub3_1_cont01_title_right title_right">
                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                    <p class="sub_cont_title_text01 fz_32 lh_14 ls_2 light m_40 gs_reveal" data-gs-delay="200">
                        오인하기 쉬운 <br>
                        <span class="medium">두드러기 vs 알레르기성 피부염</span>
                    </p>
                    <p class="pc_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 light gs_reveal" data-gs-delay="400">
                        두드러기는 일시적으로 피부가 붉거나 흰색으로 부풀고 가려움증을 동<br>
                        반하는 피부질환 입니다. 대부분의 경우 원인을 찾기 어렵지만 <br>
                        급성 두드러기의 경우 알레르기가 원인일 수 있습니다. <br>
                        인천 오라클피부과는 피부과 전문의가 직접 두드러기와 알레르기를 <br>
                        진단하고, 진단 결과에 맞춰 맞춤형 치료를 진행합니다.
                    </p>
                    <p class="m_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 light gs_reveal" data-gs-delay="400">
                        두드러기는 일시적으로 피부가 붉거나 흰색으로 부풀고 가려움증을 동
                        반하는 피부질환 입니다. 대부분의 경우 원인을 찾기 어렵지만 
                        급성 두드러기의 경우 알레르기가 원인일 수 있습니다. <br>
                        인천 오라클피부과는 피부과 전문의가 직접 두드러기와 알레르기를 
                        진단하고, 진단 결과에 맞춰 맞춤형 치료를 진행합니다.
                    </p>
                </div>
            </div>
        </article>
        
        <article class="sub_cont_box sub3_8_cont04_box bg_ff pd_160 pt_120 m_60">
            <div class="sub_tabcontent_container sub7_container flex_row fw jc_center center">
                <div class="sub_cont_title sub3_1_cont04_title_center ta_c">
                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                    <p class="sub_cont_title_text01 fz_32 lh_14 ls_2 normal m_60 gs_reveal" data-gs-delay="200">
                        제거부터 면역 치료까지, <br>
                        <span class="medium">사마귀 치료 과정</span>
                    </p>
                </div>
                <div class="sub3_8_cont04_item_box flex_row fw jc_center al_fs">
                    <div class="sub3_8_cont04_item sub3_8_cont04_item01 ta_c gs_reveal" data-gs-delay="200">
                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub3_8_cont04_img01.png" alt="">
                        <p class="fz_16 ls_2 lh_14 normal">
                           한 번의 혈액검사로 <br>
                           다양한 원인 분석 
                        </p>
                    </div>
                    <div class="sub3_8_cont04_item sub3_8_cont04_item02 ta_c gs_reveal" data-gs-delay="400">
                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub3_8_cont04_img02.png" alt="">
                        <p class="fz_16 ls_2 lh_14 normal">
                            의심되는 물질을 <br>
                            하나씩 선별 검사
                        </p>
                    </div>
                    <div class="sub3_8_cont04_item sub3_8_cont04_item03 ta_c gs_reveal" data-gs-delay="600">
                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub3_8_cont04_img03.png" alt="">
                        <p class="fz_16 ls_2 lh_14 normal">
                            피부에 직접 물질을 <br>
                            주입 후 검사
                        </p>
                    </div>
                    <div class="sub3_8_cont04_item sub3_8_cont04_item04 ta_c gs_reveal" data-gs-delay="800">
                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub3_8_cont04_img04.png" alt="">
                        <p class="fz_16 ls_2 lh_14 normal">
                            음식물 알레르기에 <br>
                            대한 검사
                        </p>
                    </div>
                    <div class="sub3_8_cont04_item sub3_8_cont04_item05 ta_c gs_reveal" data-gs-delay="1000">
                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub3_8_cont04_img05.png" alt="">
                        <p class="fz_16 ls_2 lh_14 normal">
                            접촉성 피부염의 <br>
                            원인을 찾는 검사
                        </p>
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
                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub3_3_cont09_img_right.jpg" alt="">
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
