<?php
include_once('./_common.php');
//if (G5_IS_MOBILE) {
//    include_once(G5_MOBILE_PATH.'/index.php');
//    return;
//}

// 웹사이트 타이틀
$g5['title'] = '켈로이드/흉터 교정 수술';

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
            <div class="sub_top_view sub5_3_top_view">
                <div class="sub_top_view_bg sub5_3_top_view_bg"></div>
                <div class="sub_top_view_text_wrap sub5_3_top_view_text_wrap ta_c">
                    <div class="sub_top_view_text01 sub5_3_top_view_text01">
                        <p class="sortsmillgoudy fz_30 lh_14 ls_2 sub_text_ani ta_c">
                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub_top_view_text_icon.png" alt="">
                            Keloid & sScar Treatment
                        </p>
                    </div>
                    <div class="sub_top_view_text02 sub5_3_top_view_text02 m_20">
                        <p class="c-w fz_40 lh_14 ls_2 medium sub_text_ani">
                            켈로이드/흉터 교정 수술
                        </p>
                    </div>
                    <div class="sub_top_view_text03 sub5_3_top_view_text03">
                        <p class="c-w fz_16 lh_14 ls_2 normal sub_text_ani">
                            눈에 띄는 흉터부터 튀어나온 켈로이드까지
                        </p>
                    </div>
                    <div class="sub_top_view_text04 sub5_3_top_view_text04">
                        <p class="c-w fz_16 lh_14 ls_2 normal sub_text_ani">
                            없던 것처럼 깨끗하게 제거합니다.
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
                        튀어나온 흉터까지 흔적 없이 지우는 <br>
                        <span class="medium">켈로이드/흉터 교정 수술</span>
                    </p>
                    <div class="m_cont_434 sub_cont_doct_img sub3_1_cont01_img img_right ta_r">
                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub5_3_cont01_img01.png" alt="">
                    </div>
                    <p class="pc_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 light">
                        수술 후에는 봉합선에 색소침착이 생기거나 튀어 오르는 것을 <br>
                        예방하는 체계적인 흉터 케어가 필요합니다. <br>
                        인천 오라클피부과의 켈로이드/흉터 교정 프로그램은 약물 치료부터 <br>
                        레이저 치료, 수술적 치료까지 세분화된 체계적인 치료 프로그램을 <br>
                        기반으로 환자의 불편감을 빠르게 해소하고, 켈로이드 예방까지 <br>
                        한 번에 해결합니다.
                    </p>
                    <p class="m_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 light">
                        수술 후에는 봉합선에 색소침착이 생기거나 튀어 오르는 것을 
                        예방하는 체계적인 흉터 케어가 필요합니다. <br>
                        인천 오라클피부과의 켈로이드/흉터 교정 프로그램은 약물 치료부터 
                        레이저 치료, 수술적 치료까지 세분화된 체계적인 치료 프로그램을 
                        기반으로 환자의 불편감을 빠르게 해소하고, 켈로이드 예방까지 
                        한 번에 해결합니다.
                    </p>
                </div>
                <div class="pc_cont_434 sub_cont_doct_img sub3_1_cont01_img img_right ta_r">
                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub5_3_cont01_img01.png" alt="">
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
                        복합 치료 시스템으로 더 깨끗하게 흉터 교정
                    </p>
                </div>
                <div class="sub5_3_cont03_item_box flex_row fw jc_center al_fs">
                    <div class="sub5_3_cont03_item sub5_3_cont03_item01 ta_c gs_reveal" data-gs-delay="200">
                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub5_3_cont03_img01.png" alt="">
                        
                        <p class="fz_16 ls_2 lh_14 light m_10">
                           붉은 색소 침착에 효과적인
                        </p>
                        <p class="fz_19 ls_2 lh_14 medium">
                           시너지 레이저
                        </p>
                    </div>
                    <div class="sub5_3_cont03_item sub5_3_cont03_item02 ta_c gs_reveal" data-gs-delay="400">
                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub5_3_cont03_img02.png" alt="">
                        
                        <p class="fz_16 ls_2 lh_14 light m_10">
                           튀어나오는 흉터에 효과적인
                        </p>
                        <p class="fz_19 ls_2 lh_14 medium">
                           주사 치료
                        </p>
                    </div>
                    <div class="sub5_3_cont03_item sub5_3_cont03_item03 ta_c gs_reveal" data-gs-delay="600">
                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub5_3_cont03_img03.png" alt="">
                        
                        <p class="fz_16 ls_2 lh_14 light m_10">
                           크기가 큰 흉터를 제거하는
                        </p>
                        <p class="fz_19 ls_2 lh_14 medium">
                           연속 절제술
                        </p>
                    </div>
                    <div class="sub5_3_cont03_item sub5_3_cont03_item04 ta_c gs_reveal" data-gs-delay="800">
                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub5_3_cont03_img04.png" alt="">
                        
                        <p class="fz_16 ls_2 lh_14 light m_10">
                           미세 상처 봉합으로 <br>
                           흔적을 줄인
                        </p>
                        <p class="fz_19 ls_2 lh_14 medium">
                           섬세한 치료
                        </p>
                    </div>
                </div>
            </div>
        </article>
        
        <article class="sub_cont_box sub2_1_1_cont4_box p_r">
            <div class="sub2_1_1_cont4 flex_row fw jc_center center">
                <div class="column_half">
                    <div class="sub2_5_2_cont04_left flex_row fw fd_c jc_center center">
                        <div class="sub_cont_title ta_l">
                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                            <p class="sub_cont_title_text01 fz_32 lh_14 ls_2 light m_40 gs_reveal" data-gs-delay="200">
                                <span class="fz_20">같은 켈로이드 수술이어도</span> <br>
                                <span class="medium">차원이 다른 결과</span>
                            </p>
                            <ul class="sub2_8_6_cont03_item_ul fz_17 normal ta_l gs_reveal" data-gs-delay="400">
                                <li>
                                    <p>풍부한 켈로이드/흉터 수술 경험, 오랜 노하우</p>
                                </li>
                                <li>
                                    <p>흉터를 고려한 절개 위치와 크기</p>
                                </li>
                                <li>
                                    <p>흉터를 최소화 하는 미세 봉합 테크닉</p>
                                </li>
                                <li>
                                    <p>30분 이내 수술, 즉각적인 일상 복귀</p>
                                </li>
                                <li>
                                    <p>켈로이드 예방 치료 효과</p>
                                </li>
                                <li>
                                    <p>수술 부위만 부분 마취, 부담 없는 수술</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="column_half">
                    <div class="sub2_1_1_cont4_img">
                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub5_3_cont04_img_right.jpg" alt="">
                    </div>
                </div>
            </div>
        </article>
        
        <!--
        <article class="sub_cont_box sub2_2_1_cont04_box p_r bg_fa pd_160">
            <div class="container-1300 sub2_2_1_cont05_container">
                <div class="sub_click_btn open m_20" id="sub_click_btn3">
                    <p class="sub_cont_title_text01 sortsmillgoudy fz_20 lh_16 ls_2 light">
                        Keloid & sScar Treatment Tumor
                    </p>
                    <p class="sub_cont_title_text02 fz_32 lh_16 ls_2 light">
                        켈로이드/화상 흉터치료 <span class="medium">후 주의사항</span>
                    </p>
                </div>
                <div class="sub2_2_1_cont05_text sub5_3_cont05_text open li_3 sub_click_box" id="sub_click_box3">
                    <ul class="sub2_2_1_cont05_item_ul fz_17 normal ta_l">
                        <li>
                            <p>수면 시 수술 부위가 바닥에 닿지 않도록 주의해야 합니다.</p>
                        </li>
                        <li>
                            <p>붓기와 멍은 약 1-2주 안에 점차 감소합니다.</p>
                        </li>
                        <li>
                            <p>수술 후 의사의 판단하에 켈로이드가 재발하지 않도록 스테로이드 주사 치료를 진행할 수 있습니다.</p>
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
