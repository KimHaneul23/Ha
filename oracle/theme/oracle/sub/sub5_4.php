<?php
include_once('./_common.php');
//if (G5_IS_MOBILE) {
//    include_once(G5_MOBILE_PATH.'/index.php');
//    return;
//}

// 웹사이트 타이틀
$g5['title'] = '상처/화상 치료';

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
            <div class="sub_top_view sub5_4_top_view">
                <div class="sub_top_view_bg sub5_4_top_view_bg"></div>
                <div class="sub_top_view_text_wrap sub5_4_top_view_text_wrap ta_c">
                    <div class="sub_top_view_text01 sub5_4_top_view_text01">
                        <p class="sortsmillgoudy fz_30 lh_14 ls_2 sub_text_ani ta_c">
                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub_top_view_text_icon.png" alt="">
                            Abrasion & Burn Treatment
                        </p>
                    </div>
                    <div class="sub_top_view_text02 sub5_4_top_view_text02 m_20">
                        <p class="c-w fz_40 lh_14 ls_2 medium sub_text_ani">
                            상처/화상 치료
                        </p>
                    </div>
                    <div class="sub_top_view_text03 sub5_4_top_view_text03">
                        <p class="c-w fz_16 lh_14 ls_2 normal sub_text_ani">
                            상처와 화상이 흉터로 변하지 않도록,
                        </p>
                    </div>
                    <div class="sub_top_view_text04 sub5_4_top_view_text04">
                        <p class="c-w fz_16 lh_14 ls_2 normal sub_text_ani">
                            체계적인 상처 드레싱과 맞춤형 치료로 피부 재생을 유도합니다.
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
                <div class="sub_cont_title sub5_1_cont01_title_left title_left">
                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                    <p class="sub_cont_title_text01 fz_32 lh_14 ls_2 light m_40">
                        회복은 기본, 흉터를 방지하는 <br>
                        <span class="medium">적극적인 상처 관리</span>
                    </p>
                    <p class="pc_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 light">
                        인천 오라클의 상처/화상 치료는 상처와 화상이 피부 흉터로 남을 <br>
                        가능성을 최소화하기 위하여 적극적인 상처 관리와 상처의 상태에 맞춘 <br>
                        맞춤형 드레싱을 진행합니다. <br>
                        피부과 전문의가 직접 진단 후 상처 감염, 염증 여부에 따라 적절한 치료를 <br>
                        병행하여 피부 재생을 유도하고, 흉터를 방지합니다.
                    </p>
                    <p class="m_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 light">
                        인천 오라클의 상처/화상 치료는 상처와 화상이 피부 흉터로 남을 
                        가능성을 최소화하기 위하여 적극적인 상처 관리와 상처의 상태에 맞춘 
                        맞춤형 드레싱을 진행합니다. <br>
                        피부과 전문의가 직접 진단 후 상처 감염, 염증 여부에 따라 적절한 치료를 
                        병행하여 피부 재생을 유도하고, 흉터를 방지합니다.
                    </p>
                </div>
                <div class="sub_cont_doct_img sub5_1_cont01_img img_right ta_r">
                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub5_4_cont01_img01.png" alt="">
                </div>
            </div>
        </article>
        
        <!-- 
        <article class="sub_cont_box sub2_1_1_cont1_2_box pd_120">
            <div class="sub_tabcontent_container flex_row fw jc_center al_fs">
                <div class="sub_cont_title sub2_1_1_cont_title_center ta_c">
                    <p class="sub_cont_title_text01 fz_22 lh_14 ls_2 normal gs_reveal" data-gs-delay="200">
                        피부외과
                    </p>
                    <p class="sub_cont_title_text02 sortsmillgoudy fz_60 lh_16 ls_2 light gs_reveal m_60" data-gs-delay="400">
                        Before & After
                    </p>
                </div>
                <div class="sub2_1_1_tabcontent02_ba">
                    <div class="swiper-container sub2_1_ba_slider_cont">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide sub2_1_1_ba_slide">
                                <a href="javascript:void(0);">
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
                                <a href="javascript:void(0);">
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
                                <a href="javascript:void(0);">
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
                                <a href="javascript:void(0);">
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
                        <a href="javascript:void(0);">
                            <p class="fz_16 lh_1 ls_2 light ta_c">more</p>
                        </a>
                    </div>
                </div>
            </div>
        </article>
        -->
        
        <article class="sub_cont_box sub5_1_cont03_box bg_ff pd_160">
            <div class="sub_tabcontent_container sub7_container flex_row fw jc_center center">
                <div class="sub_cont_title sub3_1_cont04_title_center ta_c">
                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                    <p class="sub_cont_title_text01 fz_32 lh_14 ls_2 normal m_60 gs_reveal" data-gs-delay="200">
                        상처의 깊이와 종류에 맞춘 <br>
                        치료 프로그램
                    </p>
                </div>
                <div class="sub5_3_cont03_item_box flex_row fw jc_center al_fs m_60">
                    <div class="sub5_3_cont03_item sub5_3_cont03_item01 ta_c gs_reveal" data-gs-delay="200">
                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub5_4_cont03_img01.png" alt="">
                        
                        <p class="fz_16 ls_2 lh_14 light m_10">
                           감염/염증 여부에 따른
                        </p>
                        <p class="fz_19 ls_2 lh_14 medium">
                           약물 치료
                        </p>
                    </div>
                    <div class="sub5_3_cont03_item sub5_3_cont03_item02 ta_c gs_reveal" data-gs-delay="400">
                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub5_4_cont03_img02.png" alt="">
                        
                        <p class="fz_16 ls_2 lh_14 light m_10">
                           상처 재생을 돕는
                        </p>
                        <p class="fz_19 ls_2 lh_14 medium">
                           주사 치료
                        </p>
                    </div>
                    <div class="sub5_3_cont03_item sub5_3_cont03_item03 ta_c gs_reveal" data-gs-delay="600">
                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub5_4_cont03_img03.png" alt="">
                        
                        <p class="fz_16 ls_2 lh_14 light m_10">
                           상처 회복 후 흉터 및 <br>
                           색소침착을 방지하는
                        </p>
                        <p class="fz_19 ls_2 lh_14 medium">
                           레이저 치료
                        </p>
                    </div>
                    <div class="sub5_3_cont03_item sub5_3_cont03_item04 ta_c gs_reveal" data-gs-delay="800">
                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub5_4_cont03_img04.png" alt="">
                        
                        <p class="fz_16 ls_2 lh_14 light m_10">
                           깊은 상처, 범위가 넓은 <br>
                           상처를 치료하는
                        </p>
                        <p class="fz_19 ls_2 lh_14 medium">
                           수술적 치료
                        </p>
                    </div>
                </div>
                <div class="sub_cont_title sub5_4_cont03_title_center ta_c flex_row fw fd_c jc_center center">
                    <p class="sub5_4_cont03_bottom_text01 fz_18 lh_16 ls_2 normal m_10 gs_reveal" data-gs-delay="200">
                        ※
                    </p>
                    <p class="sub5_4_cont03_bottom_text02 fz_18 lh_14 ls_2 normal m_10 gs_reveal" data-gs-delay="400">
                        깊은 상처부터 오래된 상처까지 피부과 전문의의 체계적인
                    </p>
                    <p class="sub5_4_cont03_bottom_text02 fz_18 lh_14 ls_2 normal m_10 gs_reveal" data-gs-delay="600">
                        1:1 시술 계획과 밀착 케어를 기반으로 완화합니다.
                    </p>
                </div>
            </div>
        </article>
        
        <article class="sub_cont_box sub2_1_1_cont4_box p_r">
            <div class="sub2_1_1_cont4 flex_row fw jc_center center">
                <div class="column_half">
                    <div class="sub2_5_2_cont04_left flex_row fw fd_c jc_center center">
                        <div class="sub_cont_title ta_l">
                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                            <p class="sub_cont_title_text01 fz_32 lh_14 ls_2 medium m_40 gs_reveal" data-gs-delay="200">
                                같은 상처 치료여도 <br>
                                차원이 다른 결과
                            </p>
                            <ul class="sub2_8_6_cont03_item_ul fz_17 normal ta_l gs_reveal" data-gs-delay="400">
                                <li>
                                    <p>풍부한 상처/화상 치료 경험, 오랜 노하우</p>
                                </li>
                                <li>
                                    <p>피부 상처의 상태를 고려한 맞춤 치료 계획</p>
                                </li>
                                <li>
                                    <p>상처의 종류에 따라 다른 소독, 드레싱 진행</p>
                                </li>
                                <li>
                                    <p>섬세한 소독, 정교한 치료 테크닉</p>
                                </li>
                                <li>
                                    <p>흉터를 최소화하는 만족도 높은 사후 관리</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="column_half">
                    <div class="sub2_1_1_cont4_img">
                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub5_4_cont04_img_right.jpg" alt="">
                    </div>
                </div>
            </div>
        </article>
        
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
