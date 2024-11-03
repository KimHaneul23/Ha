<?php
include_once('./_common.php');
//if (G5_IS_MOBILE) {
//    include_once(G5_MOBILE_PATH.'/index.php');
//    return;
//}

// 웹사이트 타이틀
$g5['title'] = '튀어나온 점, 큰 점, 재발 점';

include_once(G5_PATH.'/head.php');
?>
    
    <script>
        $(document).ready(function(){
            var window_width = $(window).width();
            if (window_width <= 480) {
                $('.ht-inner').removeClass('sub_header');
            } else {
                //$('.main-header').removeClass('color_change');
                $('.ht-inner').removeClass('sub_header');
            }
        });
    </script>
    <main id="content">
        <article class="sub_content01" id="startContent">
            <div class="sub_top_view sub5_2_top_view">
                <div class="sub_top_view_bg sub5_2_top_view_bg"></div>
                <div class="sub_top_view_text_wrap sub5_2_top_view_text_wrap ta_c">
                    <div class="sub_top_view_text01 sub5_2_top_view_text01">
                        <p class="sortsmillgoudy fz_30 lh_14 ls_2 sub_text_ani ta_c">
                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub_top_view_text_icon.png" alt="">
                            Nervus Removal Surgery
                        </p>
                    </div>
                    <div class="sub_top_view_text02 sub5_2_top_view_text02 m_20">
                        <p class="c-w fz_40 lh_14 ls_2 medium sub_text_ani">
                            튀어나온 점, 큰 점, 재발 점
                        </p>
                    </div>
                    <div class="sub_top_view_text03 sub5_2_top_view_text03">
                        <p class="c-w fz_16 lh_14 ls_2 normal sub_text_ani">
                            레이저로 제거하기 어려운 크고 깊은 점,
                        </p>
                    </div>
                    <div class="sub_top_view_text04 sub5_2_top_view_text04">
                        <p class="c-w fz_16 lh_14 ls_2 normal sub_text_ani">
                            튀어나온 점까지 수술적 치료로 정확하게 제거합니다
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
                        레이저 제거가 어려운 <br>
                        <span class="medium">난치성 점을 위한 점 제거술</span>
                    </p>
                    <p class="pc_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 light m_20">
                        레이저로 점을 제거하는 깊이는 한계가 있습니다. 깊고 큰 점일수록 <br>
                        레이저 시술이 어려우며 시술 후 점 재발과 흉터가 남을 가능성이 높습니다.
                    </p>
                    <p class="m_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 light m_20">
                        레이저로 점을 제거하는 깊이는 한계가 있습니다. 깊고 큰 점일수록 
                        레이저 시술이 어려우며 시술 후 점 재발과 흉터가 남을 가능성이 높습니다.
                    </p>
                    <p class="pc_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light">
                        인천 오라클피부과에서는 피부과 전문의의 정밀 진단 후,점의 종류, <br>
                        부위, 크게, 상태에 따라 레이저 치료부터 점 제거 수술까지 적합한 방식으로 <br>
                        치료를 진행합니다.
                    </p>
                    <p class="m_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light">
                        인천 오라클피부과에서는 피부과 전문의의 정밀 진단 후,점의 종류, 
                        부위, 크게, 상태에 따라 레이저 치료부터 점 제거 수술까지 적합한 방식으로 
                        치료를 진행합니다.
                    </p>
                </div>
                <div class="sub_cont_doct_img sub3_1_cont01_img img_right ta_r">
                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub5_2_cont01_img01.png" alt="">
                </div>
            </div>
        </article>
        
        <article class="sub_cont_box sub2_1_1_cont1_2_box pd_120">
            <div class="sub_tabcontent_container flex_row fw jc_center al_fs">
                <div class="sub_cont_title sub2_1_1_cont_title_center ta_c">
                    <p class="sub_cont_title_text01 fz_22 lh_14 ls_2 normal gs_reveal" data-gs-delay="200">
                        점 제거 수술
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
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub5_2_ba_slide_img01_b_230404.jpg" alt="">
                                        </div>
                                        <div class="sub2_1_1_ba_slide_img_a <?=($is_member ? '':'blur')?>">
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub5_2_ba_slide_img01_a_230404.jpg" alt="">
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
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub5_2_ba_slide_img02_b_230404.jpg" alt="">
                                        </div>
                                        <div class="sub2_1_1_ba_slide_img_a <?=($is_member ? '':'blur')?>">
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub5_2_ba_slide_img02_a_230404.jpg" alt="">
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
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub5_2_ba_slide_img03_b_230404.jpg" alt="">
                                        </div>
                                        <div class="sub2_1_1_ba_slide_img_a <?=($is_member ? '':'blur')?>">
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub5_2_ba_slide_img03_a_230404.jpg" alt="">
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
        
        <article class="sub_cont_box sub3_2_cont03_box bg_ff pd_160">
            <div class="sub_tabcontent_container sub7_container flex_row fw sa center">
                <div class="sub_cont_doct_img sub4_2_cont04_img img_left ta_c">
                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub5_2_cont03_img01.png" alt="">
                </div>
                <div class="sub_cont_title sub4_2_cont04_title_right title_right">
                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                    <p class="sub_cont_title_text02 fz_32 lh_14 ls_2 normal m_30 gs_reveal" data-gs-delay="200">
                        <span class="medium">디테일이 중요한 점 제거,</span> <br>
                        피부과 전문의 책임 수술
                    </p>
                    <p class="pc_cont_434 sub_cont_title_text03 c-lightgray fz_16 lh_16 ls_2 light m_30 gs_reveal" data-gs-delay="400">
                        튀어나온 점, 큰 점, 재발 점 제거술은 점 부위 절제부터 상처 봉합까지 <br>
                        함께 진행하는 수술로서, 무엇보다 의료진의 섬세한 테크닉과 풍부한 <br>
                        경험이 중요합니다.
                    </p>
                    <p class="m_cont_434 sub_cont_title_text03 c-lightgray fz_16 lh_16 ls_2 light m_30 gs_reveal" data-gs-delay="400">
                        튀어나온 점, 큰 점, 재발 점 제거술은 점 부위 절제부터 상처 봉합까지 
                        함께 진행하는 수술로서, 무엇보다 의료진의 섬세한 테크닉과 풍부한 
                        경험이 중요합니다.
                    </p>
                    <p class="pc_cont_434 sub_cont_title_text04 c-lightgray fz_16 lh_16 ls_2 light gs_reveal" data-gs-delay="600">
                        인천 오라클피부과는 피부과 전문의가 점 진단부터 수술, 케어까지 <br>
                        전과정을 함께하여 만족도는 높이고, 후유증을 줄입니다.
                    </p>
                    <p class="m_cont_434 sub_cont_title_text04 c-lightgray fz_16 lh_16 ls_2 light gs_reveal" data-gs-delay="600">
                        인천 오라클피부과는 피부과 전문의가 점 진단부터 수술, 케어까지 
                        전과정을 함께하여 만족도는 높이고, 후유증을 줄입니다.
                    </p>
                </div>
            </div>
        </article>
        
        <article class="sub_cont_box sub2_1_1_cont4_box p_r">
            <div class="sub2_1_1_cont4 flex_row fw jc_center center">
                <div class="column_half">
                    <div class="sub2_5_2_cont04_left sub3_1_fullcont_left sub3_1_fullcont_left_top flex_row fw fd_c jc_center center">
                        <div class="sub_cont_title ta_l">
                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                            <p class="sub_cont_title_text01 fz_32 lh_14 ls_2 light m_40 gs_reveal" data-gs-delay="200">
                                <span class="medium">흉터를 최소화하는</span> <br>
                                인천 오라클만의 <span class="sortsmillgoudy bold">KNOW</span>-<span class="sortsmillgoudy bold">HOW</span>
                            </p>
                        </div>
                    </div>
                    <div class="sub2_5_2_cont04_left sub3_1_fullcont_left sub3_1_fullcont_left_bottom flex_row fw fd_c jc_center center">
                        <div class="sub_cont_title sub5_2_cont_title ta_l">
                            <ul class="sub2_8_6_cont03_item_ul fz_17 normal ta_l gs_reveal" data-gs-delay="400">
                                <li>
                                    <p>
                                        수술 전 점의 크기, 깊이를 정확하게 진단하여 <br>
                                        상태에 따라 수술 횟수, 절개 부위 조절
                                    </p>
                                </li>
                                <li>
                                    <p>피부결에 맞춰 절개 방향을 조절</p>
                                </li>
                                <li>
                                    <p>점 부위 절제 후 피부 장력까지 고려한 세밀한 봉합</p>
                                </li>
                                <li>
                                    <p>수술 후 봉합 흉터 관리 프로그램 시행</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="column_half">
                    <div class="sub2_1_1_cont4_img">
                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub5_2_cont04_img_right.jpg" alt="">
                    </div>
                </div>
            </div>
        </article>
        
        <!--
        <article class="sub_cont_box sub2_2_1_cont04_box p_r bg_fa pd_60 pt_160">
            <div class="container-1300 sub2_2_1_cont05_container">
                <div class="sub_click_btn open m_20" id="sub_click_btn2">
                    <p class="sub_cont_title_text01 sortsmillgoudy fz_20 lh_16 ls_2 light">
                        Nervus Removal Surgery
                    </p>
                    <p class="sub_cont_title_text02 fz_32 lh_16 ls_2 light">
                        점 제거 <span class="medium">수술 후 주의사항</span>
                    </p>
                </div>
                <div class="sub2_2_1_cont05_text sub5_2_cont05_text open li_3 sub_click_box" id="sub_click_box2">
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
                        <span class="fz_30 ls_2 lh_14 normal">피부외과 진료</span>
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
