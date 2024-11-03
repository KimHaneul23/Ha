<?php
include_once('./_common.php');
//if (G5_IS_MOBILE) {
//    include_once(G5_MOBILE_PATH.'/index.php');
//    return;
//}

// 웹사이트 타이틀
$g5['title'] = '원형탈모';

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
            <div class="sub_top_view sub3_7_top_view">
                <div class="sub_top_view_bg sub3_7_top_view_bg"></div>
                <div class="sub_top_view_text_wrap sub3_7_top_view_text_wrap ta_c">
                    <div class="sub_top_view_text01 sub3_7_top_view_text01">
                        <p class="sortsmillgoudy fz_30 lh_14 ls_2 sub_text_ani ta_c">
                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub_top_view_text_icon.png" alt="">
                            Alopecia Areata Treatment
                        </p>
                    </div>
                    <div class="sub_top_view_text02 sub3_7_top_view_text02 m_20">
                        <p class="c-w fz_40 lh_14 ls_2 medium sub_text_ani">
                            원형탈모
                        </p>
                    </div>
                    <div class="sub_top_view_text03 sub3_7_top_view_text03">
                        <p class="c-w fz_16 lh_14 ls_2 normal sub_text_ani">
                            원인을 치료하고, 모낭세포와 모근을 활성화하는 탈모 치료
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
        
        <article class="sub_cont_box sub2_1_1_cont1_1_box bg_ff pd_120">
            <div class="sub_tabcontent_container sub7_container flex_row fw sa center">
                <div class="sub_cont_title sub3_1_cont01_title_left title_left">
                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                    <p class="sub_cont_title_text01 fz_32 lh_14 ls_2 light m_30">
                        다양한 원인과 증상에 맞춘 <br>
                        원형 탈모 치료
                    </p>
                    <p class="pc_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 light m_30">
                        피부과 방문 환자 2%를 차지하는 원형탈모는 모발이 원형을 이루며 <br>
                        한꺼번에 빠지는 일과성 탈모입니다. 자가면역질환, 스트레스, 유전 등 <br>
                        원인이 다양합니다.
                    </p>
                    <p class="m_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 light m_30">
                        피부과 방문 환자 2%를 차지하는 원형탈모는 모발이 원형을 이루며 
                        한꺼번에 빠지는 일과성 탈모입니다. 자가면역질환, 스트레스, 유전 등 
                        원인이 다양합니다.
                    </p>
                    <p class="pc_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light">
                        인천 오라클피부과의 원형탈모 치료는 피부과 전문의가 탈모의 상태와 <br>
                        범위에 따라 약물부터 광선치료까지 맞춤형으로 진행하여 모낭세포를 <br>
                        활성화 하고, 병변이 넓어지지 않도록 치료합니다.
                    </p>
                    <p class="m_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light">
                        인천 오라클피부과의 원형탈모 치료는 피부과 전문의가 탈모의 상태와 
                        범위에 따라 약물부터 광선치료까지 맞춤형으로 진행하여 모낭세포를 
                        활성화 하고, 병변이 넓어지지 않도록 치료합니다.
                    </p>
                </div>
                <div class="sub_cont_doct_img sub3_1_cont01_img img_right ta_r">
                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub3_7_cont01_img01.png" alt="">
                </div>
            </div>
        </article>
        
        <!--
        <article class="sub_cont_box sub2_1_1_cont1_2_box pd_120">
            <div class="sub_tabcontent_container flex_row fw jc_center al_fs">
                <div class="sub_cont_title sub2_1_1_cont_title_center ta_c">
                    <p class="sub_cont_title_text01 fz_22 lh_14 ls_2 normal gs_reveal" data-gs-delay="200">
                        원형탈모
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
        
        <article class="sub_cont_box sub3_2_cont03_box bg_ff pd_160">
            <div class="sub_tabcontent_container sub7_container flex_row fw jc_center center">
                <div class="sub_cont_title sub3_2_cont03_title_center ta_c">
                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                    <p class="sub_cont_title_text01 fz_32 lh_14 ls_2 light m_60 gs_reveal" data-gs-delay="200">
                        <span class="medium">탈모 병변의 상태에 따른</span> <br>
                        맞춤형 치료 프로그램
                    </p>
                </div>
                <div class="sub3_2_cont03_box sub3_7_cont03_box flex_row fw jc_center al_fs gs_reveal" data-gs-delay="400">
                    <div class="column_third">
                        <div class="sub3_2_cont03_item sub3_2_cont03_item01 ta_c">
                            <div class="sub3_7_cont03_item_img sub3_2_cont03_item_img sub3_2_cont03_item_img01">
                                <img src="<?php echo G5_THEME_URL?>/sub/img/sub3_7_cont03_item01.png" alt="">
                            </div>
                            <div class="flex_row jc_center center sub3_2_cont03_item_text sub3_2_cont03_item_text01 sub3_7_cont03_item_text01_1">
                                <p class="fz_19 ls_2 lh_16 normal">
                                    스테로이드 주사치료
                                </p>
                            </div>
                            <div class="flex_row fd_c jc_fs center sub3_2_cont03_item_text sub3_7_cont03_item_text02">
                                <ul class="sub2_8_6_cont03_item_ul fz_17 ls_2 lh_16 normal ta_l">
                                    <li>
                                        <p>병변에 직접 주사</p>
                                    </li>
                                    <li>
                                        <p>전문의의 소견에 따라 치료</p>
                                    </li>
                                    <li>
                                        <p class="pc_cont_480">
                                            통증이 있어 소아에게는 되도록 <br>
                                            적용하지 않는 프로그램
                                        </p>
                                        <p class="m_cont_480">
                                            통증이 있어 소아에게는 되도록 
                                            적용하지 않는 프로그램
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="column_third">
                        <div class="sub3_2_cont03_item sub3_2_cont03_item02 ta_c">
                            <div class="sub3_7_cont03_item_img sub3_2_cont03_item_img sub3_2_cont03_item_img02">
                                <img src="<?php echo G5_THEME_URL?>/sub/img/sub3_7_cont03_item02.png" alt="">
                            </div>
                            <div class="flex_row jc_center center sub3_2_cont03_item_text sub3_2_cont03_item_text01 sub3_7_cont03_item_text01_2">
                                <p class="fz_19 ls_2 lh_16 normal">
                                    스테로이드 연고치료
                                </p>
                            </div>
                            <div class="flex_row fd_c jc_fs center sub3_2_cont03_item_text sub3_7_cont03_item_text02">
                                <ul class="sub2_8_6_cont03_item_ul fz_17 ls_2 lh_16 normal ta_l">
                                    <li>
                                        <p>병변 주변에 넓게 도포</p>
                                    </li>
                                    <li>
                                        <p>전두 탈모, 전신 탈모에 권장</p>
                                    </li>
                                    <li>
                                        <p>꾸준한 도포가 필요한 프로그램</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="column_third">
                        <div class="sub3_2_cont03_item sub3_2_cont03_item03 border_left_none ta_c">
                            <div class="sub3_7_cont03_item_img sub3_2_cont03_item_img sub3_2_cont03_item_img03">
                                <img src="<?php echo G5_THEME_URL?>/sub/img/sub3_7_cont03_item03.png" alt="">
                            </div>
                            <div class="flex_row jc_center center sub3_2_cont03_item_text sub3_2_cont03_item_text01 sub3_7_cont03_item_text01_3">
                                <p class="fz_19 ls_2 lh_16 normal">
                                    엑시머 레이저
                                </p>
                            </div>
                            <div class="flex_row fd_c jc_fs center sub3_2_cont03_item_text sub3_7_cont03_item_text02">
                                <ul class="sub2_8_6_cont03_item_ul fz_17 ls_2 lh_16 normal ta_l">
                                    <li>
                                        <p>어린이도 치료 가능한 안전한 레이저</p>
                                    </li>
                                    <li>
                                        <p>초기 치료 반응이 빠르게 나타남</p>
                                    </li>
                                    <li>
                                        <p>아프지 않고 따듯한 느낌</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </article>
        
        <article class="sub_cont_box sub3_7_cont04_box bg_ff">
            <img src="<?php echo G5_THEME_URL?>/sub/img/sub3_7_cont04_img01.jpg" alt="">
            
            <div class="sub3_7_cont04_item_box flex_row fd_c jc_center al_fs">
                <div class="sub3_7_cont04_item01 gs_reveal" data-gs-delay="200">
                    <p class="fz_28 lh_14 ls_2 normal ta_l m_30">
                        인천 오라클 <br>
                        <span class="medium">탈모 특화 치료</span> 클리닉
                    </p>
                </div>
                <div class="sub3_7_cont04_item02 gs_reveal" data-gs-delay="400">
                    <p class="fz_17 lh_16 ls_2 light ta_l m_30">
                        인천 오라클피부과는 피부과 전문의의 <br>
                        오랜 노하우와 안전성과 효과를 입증 받은 <br>
                        치료 장비와 수술법을 기반으로 더 효과적인 <br>
                        탈모 치료가 가능합니다.
                    </p>
                </div>
                <div class="sub3_7_cont04_item03 flex_row sb center gs_reveal" data-gs-delay="600">
                    <div class="sub3_7_cont04_item_btn01">
                        <a href="#" onclick="sub_page2_5(1)"><div class="flex_row jc_center center fz_16 lh_14 ls_2 medium ta_l">탈모 프로그램 <img src="<?php echo G5_THEME_URL?>/sub/img/arrow_right_bb.svg" alt=""></div></a>
                    </div>
                    <div class="sub3_7_cont04_item_btn02">
                        <a href="#" onclick="sub_page2_5(2)"><div class="flex_row jc_center center fz_16 lh_14 ls_2 medium ta_l">모발이식 프로그램 <img src="<?php echo G5_THEME_URL?>/sub/img/arrow_right_bb.svg" alt=""></div></a>
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
