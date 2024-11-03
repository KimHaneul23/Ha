<?php
include_once('./_common.php');
//if (G5_IS_MOBILE) {
//    include_once(G5_MOBILE_PATH.'/index.php');
//    return;
//}

// 웹사이트 타이틀
$g5['title'] = '내성발톱/집게발톱 교정';

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
            <div class="sub_top_view sub5_5_top_view">
                <div class="sub_top_view_bg sub5_5_top_view_bg"></div>
                <div class="sub_top_view_text_wrap sub5_5_top_view_text_wrap ta_c">
                    <div class="sub_top_view_text01 sub5_5_top_view_text01">
                        <p class="sortsmillgoudy fz_30 lh_14 ls_2 sub_text_ani ta_c">
                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub_top_view_text_icon.png" alt="">
                            Ingrowing nail Treatment
                        </p>
                    </div>
                    <div class="sub_top_view_text02 sub5_5_top_view_text02 m_20">
                        <p class="c-w fz_40 lh_14 ls_2 medium sub_text_ani">
                            내성발톱/집게발톱 교정
                        </p>
                    </div>
                    <div class="sub_top_view_text03 sub5_5_top_view_text03">
                        <p class="c-w fz_16 lh_14 ls_2 normal sub_text_ani">
                            피부 속을 파고드는 내성발톱,
                        </p>
                    </div>
                    <div class="sub_top_view_text04 sub5_5_top_view_text04">
                        <p class="c-w fz_16 lh_14 ls_2 normal sub_text_ani">
                            진행 단계에 따라 근본적 치료로 개선합니다.
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
                        똑같은 시술법이 아닌, <br>
                        <span class="medium">진행 정도에 맞춘 교정 치료</span>
                    </p>
                    <p class="pc_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 light">
                        내성발톱은 발톱이 살 속으로 파고들어 염증과 통증을 발생시키는 질환입니다. <br>
                        이 중에서도 발톱의 변형이 심해 집게처럼 말린 발톱을 집게발톱이라 합니다. <br>
                        인천 오라클의 내성발톱 교정치료는 진행 단계에 따라 다양한 모양의 삽입물로 <br>
                        발톱 모양을 교정하며, 심한 경우 수술적 방법을 통해 근본적으로 개선합니다.
                    </p>
                    <p class="m_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 light">
                        내성발톱은 발톱이 살 속으로 파고들어 염증과 통증을 발생시키는 질환입니다. <br>
                        이 중에서도 발톱의 변형이 심해 집게처럼 말린 발톱을 집게발톱이라 합니다. <br>
                        인천 오라클의 내성발톱 교정치료는 진행 단계에 따라 다양한 모양의 삽입물로 
                        발톱 모양을 교정하며, 심한 경우 수술적 방법을 통해 근본적으로 개선합니다.
                    </p>
                </div>
                <div class="sub_cont_doct_img sub5_1_cont01_img img_right ta_r">
                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub5_5_cont01_img01.png" alt="">
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
            <div class="container-1500 flex_row fw jc_center center">
                <div class="sub_cont_title sub3_1_cont04_title_center ta_c">
                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                    <p class="sub_cont_title_text01 fz_32 lh_14 ls_2 normal m_60 gs_reveal" data-gs-delay="200">
                        모두 다른 발톱 모양, 생활 습관에 맞춘 <br>
                        <span class="medium">1:1 밀착 내성발톱 교정술</span>
                    </p>
                </div>
                <div class="sub5_5_cont03_item_box flex_row fw jc_fs al_fs">
                    <div class="sub5_5_cont03_item sub5_5_cont03_item01 flex_row fw fd_c jc_fs center ta_c gs_reveal" data-gs-delay="200">
                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub5_5_cont03_img01.png" alt="">
                        
                        <p class="fz_20 ls_2 lh_14 medium">
                            발톱 외측 성형술
                        </p>
                        <ul class="sub2_8_6_cont03_item_ul fz_17 normal ta_l gs_reveal" data-gs-delay="400">
                            <li>
                                <p>문제가 되는 발톱 부위와 뿌리까지 함께 제거합니다.</p>
                            </li>
                            <li>
                                <p>내성 발톱의 재발을 막는데 큰 도움이 됩니다.</p>
                            </li>
                            <li>
                                <p>부분 마취 및 간단한 수술로, 빠른 회복이 가능합니다.</p>
                            </li>
                        </ul>
                    </div>
                    <div class="sub5_5_cont03_item sub5_5_cont03_item02 flex_row fw fd_c jc_fs center ta_c gs_reveal" data-gs-delay="400">
                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub5_5_cont03_img02.png" alt="">
                        
                        <p class="fz_20 ls_2 lh_14 medium">
                            발톱 와이어 교정술
                        </p>
                        <ul class="sub2_8_6_cont03_item_ul fz_17 normal ta_l gs_reveal" data-gs-delay="400">
                            <li>
                                <p>형상 기억 합금을 사용하여 발톱에 금속물을 설치합니다.</p>
                            </li>
                            <li>
                                <p>발톱 바깥쪽에 연결하여 발톱이 파고드는 것을 막습니다.</p>
                            </li>
                            <li>
                                <p>발톱이 바르게 자라도록 교정합니다.</p>
                            </li>
                        </ul>
                    </div>
                    <div class="sub5_5_cont03_item sub5_5_cont03_item03 flex_row fw fd_c jc_fs center ta_c gs_reveal" data-gs-delay="600">
                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub5_5_cont03_img03.png" alt="">
                        
                        <p class="fz_20 ls_2 lh_14 medium">
                            오니코 클립
                        </p>
                        <ul class="sub2_8_6_cont03_item_ul fz_17 normal ta_l gs_reveal" data-gs-delay="400">
                            <li>
                                <p>
                                    S와이어와 O링의 탄성을 이용하여 구부러진 
                                    발톱을 편평하게 펴줍니다.
                                </p>
                            </li>
                            <li>
                                <p>
                                    발톱이 살을 파고드는 것을 방지하며, 수술없이 
                                    진행됩니다.
                                </p>
                            </li>
                            <li>
                                <p>
                                    능동적으로 변형된 발톱을 정상적인 형태로 
                                    교정해주는 치료법입니다.
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </article>
        
        <article class="sub_cont_box sub2_1_1_cont4_box p_r">
            <div class="sub2_1_1_cont4 flex_row fw jc_center center">
                <div class="column_half">
                    <div class="sub2_5_2_cont04_left flex_row fw fd_c jc_center center">
                        <div class="sub_cont_title sub5_5_cont_title ta_l">
                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                            <p class="sub_cont_title_text01 fz_32 lh_14 ls_2 light m_40 gs_reveal" data-gs-delay="200">
                                같은 내성발톱 치료여도 <br>
                                <span class="medium">차원이 다른 결과</span>
                            </p>
                            <ul class="sub2_8_6_cont03_item_ul fz_17 normal ta_l gs_reveal" data-gs-delay="400">
                                <li>
                                    <p>발톱의 자라는 방향 교정을 통해 재발을 방지하는 근본적 치료법</p>
                                </li>
                                <li>
                                    <p>파고드는 정도, 발톱 모양에 맞춘 맞춤형 내성발톱 치료 프로그램</p>
                                </li>
                                <li>
                                    <p>환자의 생활 패턴까지 고려한 맞춤형 치료</p>
                                </li>
                                <li>
                                    <p>부분 마취로 충분한 미세한 통증</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="column_half">
                    <div class="sub2_1_1_cont4_img">
                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub5_5_cont04_img_right.jpg" alt="">
                    </div>
                </div>
            </div>
        </article>
        
        <!--
        <article class="sub_cont_box sub2_2_1_cont04_box p_r bg_fa pd_160">
            <div class="container-1300 sub2_2_1_cont05_container">
                <div class="sub_click_btn open m_20" id="sub_click_btn5">
                    <p class="sub_cont_title_text01 sortsmillgoudy fz_20 lh_16 ls_2 light">
                        Ingrowing Nail Treatment
                    </p>
                    <p class="sub_cont_title_text02 fz_32 lh_16 ls_2 light">
                        내성발톱/집게발톱 교정 치료 <span class="medium">후 주의사항</span>
                    </p>
                </div>
                <div class="sub2_2_1_cont05_text sub5_5_cont05_text open li_2 sub_click_box" id="sub_click_box5">
                    <ul class="sub2_2_1_cont05_item_ul fz_17 normal ta_l">
                        <li>
                            <p>수술 후 3~4주 뒤부터 운전이 가능합니다.</p>
                        </li>
                        <li>
                            <p>꽉 끼는 신발은 가급적 피하는 것이 좋습니다.</p>
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
