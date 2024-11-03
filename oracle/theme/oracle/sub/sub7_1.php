<?php
include_once('./_common.php');
//if (G5_IS_MOBILE) {
//    include_once(G5_MOBILE_PATH.'/index.php');
//    return;
//}

// 웹사이트 타이틀
$g5['title'] = '남성피부관리';

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
            <div class="sub_top_view sub7_1_top_view">
                <div class="sub_top_view_bg sub7_1_top_view_bg"></div>
                <div class="sub_top_view_text_wrap sub7_1_top_view_text_wrap ta_c">
                    <div class="sub_top_view_text01 sub7_1_top_view_text01">
                        <p class="sortsmillgoudy fz_30 lh_14 ls_2 sub_text_ani ta_c">
                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub_top_view_text_icon.png" alt="">
                            Men’s Skin care
                        </p>
                    </div>
                    <div class="sub_top_view_text02 sub7_1_top_view_text02 m_20">
                        <p class="c-w fz_40 lh_14 ls_2 medium sub_text_ani">
                            남성피부관리
                        </p>
                    </div>
                    <div class="sub_top_view_text03 sub7_1_top_view_text03">
                        <p class="c-w fz_16 lh_14 ls_2 normal sub_text_ani">
                            여성과 다른 남성의 피부,
                        </p>
                    </div>
                    <div class="sub_top_view_text04 sub7_1_top_view_text04">
                        <p class="c-w fz_16 lh_14 ls_2 normal sub_text_ani">
                            맞춤형 피부관리로 깔끔한 인상을 만듭니다
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
                <div class="sub_cont_title sub7_1_cont01_title_left title_left">
                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                    <p class="sub_cont_title_text01 fz_32 lh_14 ls_2 light m_40">
                        두껍고 피지 분비가 활발한 <br>
                        <span class="medium">남성 피부에 맞춘 피부 관리</span>
                    </p>
                    <p class="pc_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 light">
                        여성의 피부와 달리 남성의 피부는 피부가 두껍고 피지 분비가 많아 <br>
                        모공이 넓고, 여성보다 수분이 적습니다. <br>
                        인천 오라클의 남성 피부관리는 남성 피부의 특성을 고려한 <br>
                        피부과 전문의의 맞춤 피부 설계를 기반으로 모공부터 블랙헤드, <br>
                        주름 문제까지 올인원 케어를 진행합니다.
                    </p>
                    <p class="m_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 light">
                        여성의 피부와 달리 남성의 피부는 피부가 두껍고 피지 분비가 많아 
                        모공이 넓고, 여성보다 수분이 적습니다. <br>
                        인천 오라클의 남성 피부관리는 남성 피부의 특성을 고려한 
                        피부과 전문의의 맞춤 피부 설계를 기반으로 모공부터 블랙헤드, 
                        주름 문제까지 올인원 케어를 진행합니다.
                    </p>
                </div>
                <div class="sub_cont_doct_img sub7_1_cont01_img img_right ta_r">
                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub7_1_cont01_img01.png" alt="">
                </div>
            </div>
        </article>
        
        <!-- 
        <article class="sub_cont_box sub2_1_1_cont1_2_box pd_120">
            <div class="sub_tabcontent_container flex_row fw jc_center al_fs">
                <div class="sub_cont_title sub2_1_1_cont_title_center ta_c">
                    <p class="sub_cont_title_text01 fz_22 lh_14 ls_2 normal gs_reveal" data-gs-delay="200">
                        오라클맨즈
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
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_1_4_ba_slide_img01_b.jpg" alt="">
                                        </div>
                                        <div class="sub2_1_1_ba_slide_img_a <?=($is_member ? '':'blur')?>">
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_1_4_ba_slide_img01_a.jpg" alt="">
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
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_1_4_ba_slide_img02_b.jpg" alt="">
                                        </div>
                                        <div class="sub2_1_1_ba_slide_img_a <?=($is_member ? '':'blur')?>">
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_1_4_ba_slide_img02_a.jpg" alt="">
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
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_1_4_ba_slide_img03_b.jpg" alt="">
                                        </div>
                                        <div class="sub2_1_1_ba_slide_img_a <?=($is_member ? '':'blur')?>">
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_1_4_ba_slide_img03_a.jpg" alt="">
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

        <article class="sub_cont_box sub2_1_4_cont_box pd_60">
            <div class="sub2_1_4_cont3_bg sub7_cont3_bg">
                <div class="sub7_1_cont03_container flex_row fw jc_center al_fs">
                    <div class="sub_cont_title sub7_1_cont03_title_center ta_c">
                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                        <p class="sub_cont_title_text02 fz_32 lh_14 ls_2 light m_40 gs_reveal" data-gs-delay="200">
                            넓어지고 깊어지는 <br>
                            <span class="medium">남성 모공 관리</span>
                        </p>
                        <p class="pc_cont_434 sub_cont_title_text03 fz_16 lh_14 ls_2 light m_20 gs_reveal" data-gs-delay="400">
                            피부가 두껍고 피지 분비량이 많은 남성 피부는 피지의 통로인 모공이 넓어지게 됩니다. <br>
                            넓은 모공의 근본적인 원인까지 함께 치료합니다.
                        </p>
                        <p class="m_cont_434 sub_cont_title_text03 fz_16 lh_14 ls_2 light m_20 gs_reveal" data-gs-delay="400">
                            피부가 두껍고 피지 분비량이 많은 남성 피부는 <br>
                            피지의 통로인 모공이 넓어지게 됩니다. <br>
                            넓은 모공의 근본적인 원인까지 함께 치료합니다.
                        </p>
                    </div>
                    <div class="sub7_1_cont03_img flex_row fw jc_center center">
                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub7_1_cont03_item01.png" alt="">
                    </div>
                </div>
                
                <div class="sub_tabcontent_container flex_row fw se center">
                    <div class="sub_cont_title sub7_1_cont04_title_left title_left">
                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                        <p class="sub_cont_title_text02 fz_32 lh_14 ls_2 light m_40 gs_reveal" data-gs-delay="200">
                            깔끔한 인상을 만드는 <br>
                            <span class="medium">남성 블랙헤드 관리</span>
                        </p>
                        <p class="pc_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light gs_reveal" data-gs-delay="400">
                            피지 분비량이 많은 남성 피부는 블랙헤드가 쉽게 쌓입니다.<br>
                            지저분해 보이는 코 주변 블랙헤드 원인까지 깨끗하게 <br>
                            제거합니다.
                        </p>
                        <p class="m_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light gs_reveal" data-gs-delay="400">
                            피지 분비량이 많은 남성 피부는 블랙헤드가 쉽게 쌓입니다. <br>
                            지저분해 보이는 코 주변 블랙헤드 원인까지 깨끗하게 제거합니다.
                        </p>
                    </div>
                    <div class="sub_cont_doct_img sub7_1_cont04_img_box p_r ta_c">
                        <div class="flex_row fw jc_center al_fs">
                            <div class="sub7_1_cont04_img sub7_1_cont04_img01">
                                <img class="m_20" src="<?php echo G5_THEME_URL?>/sub/img/sub7_1_cont04_img01.png" alt="">
                                <p class="fz_20 ls_2 lh_14 normal ta_c">
                                    아쿠아필
                                </p>
                            </div>
                            <div class="sub7_1_cont04_img sub7_1_cont04_img02">
                                <img class="m_20" src="<?php echo G5_THEME_URL?>/sub/img/sub7_1_cont04_img02.png" alt="">
                                <p class="fz_20 ls_2 lh_14 normal ta_c">
                                    아그네스
                                </p>
                            </div>
                        </div>
                        
                    </div>
                </div>
                
                <div class="sub_tabcontent_container flex_row fw jc_center al_fs">
                    <div class="sub_cont_title sub7_1_cont03_title_center ta_c">
                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                        <p class="sub_cont_title_text02 fz_32 lh_14 ls_2 light m_40 gs_reveal" data-gs-delay="200">
                            이미지를 디자인하는 <br>
                            <span class="medium">오라클 맨즈 프로그램</span>
                        </p>
                        <p class="pc_cont_434 sub_cont_title_text03 fz_16 lh_14 ls_2 light m_80 gs_reveal" data-gs-delay="400">
                            보다 깨끗하게, 보다 젊어 보이게, 보다 부드럽게, 보다 자연스럽게. <br>
                            오라클 맨즈 프로그램은 피부과 전문의 1:1 맞춤 진료로 남성적인 미를 <br>
                            살릴 수 있도록 이미지 개선을 완성합니다.
                        </p>
                        <p class="m_cont_434 sub_cont_title_text03 fz_16 lh_14 ls_2 light m_80 gs_reveal" data-gs-delay="400">
                            보다 깨끗하게, 보다 젊어 보이게, 보다 부드럽게, <br>
                            보다 자연스럽게. 오라클 맨즈 프로그램은 피부과 전문의 1:1 맞춤 진료로 남성적인 미를 
                            살릴 수 있도록 이미지 개선을 완성합니다.
                        </p>
                    </div>
                    <div class="sub7_1_cont05_box flex_row fw se al_fs">
                        <div class="column_quarter">
                            <a href="javascript:void(0);">
                                <div class="sub7_1_cont05_item sub7_1_cont05_item01 flex_row fd_c fw jc_center center">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub7_1_cont05_item01.png" alt="">

                                    <p class="fz_18 ls_2 lh_12 medium flex_row jc_center center">
                                        남성피부관리
                                    </p>
                                </div>
                            </a>
                        </div>
                        <div class="column_quarter">
                            <a href="<?php echo G5_THEME_URL?>/sub/sub7_2.php">
                                <div class="sub7_1_cont05_item sub7_1_cont05_item02 flex_row fd_c fw jc_center center">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub7_1_cont05_item02.png" alt="">

                                    <p class="fz_18 ls_2 lh_12 medium flex_row jc_center center">
                                        남성 제모 <img src="<?php echo G5_THEME_URL?>/sub/img/plus_btn.svg" alt="">
                                    </p>
                                </div>
                            </a>
                        </div>
                        <div class="column_quarter">
                            <a href="<?php echo G5_THEME_URL?>/sub/sub2_4.php">
                                <div class="sub7_1_cont05_item sub7_1_cont05_item03 flex_row fd_c fw jc_center center">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub7_1_cont05_item03.png" alt="">

                                    <p class="fz_18 ls_2 lh_12 medium flex_row jc_center center">
                                        남성 눈성형
                                    </p>
                                </div>
                            </a>
                        </div>
                        <div class="column_quarter">
                            <a href="javascript:void(0);">
                                <div class="sub7_1_cont05_item sub7_1_cont05_item04 flex_row fd_c fw jc_center center">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub7_1_cont05_item04.png" alt="">

                                    <p class="fz_18 ls_2 lh_12 medium flex_row jc_center center">
                                        남성 눈썹정리
                                    </p>
                                </div>
                            </a>
                        </div>
                        <div class="column_quarter">
                            <a href="<?php echo G5_THEME_URL?>/sub/sub7_3.php">
                                <div class="sub7_1_cont05_item sub7_1_cont05_item05 flex_row fd_c fw jc_center center">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub7_1_cont05_item05.png" alt="">

                                    <p class="fz_18 ls_2 lh_12 medium flex_row jc_center center">
                                        남성 여유증수술 <img src="<?php echo G5_THEME_URL?>/sub/img/plus_btn.svg" alt="">
                                    </p>
                                </div>
                            </a>
                        </div>
                        <div class="column_quarter">
                            <a href="#" onclick="sub_page07(1)">
                                <div class="sub7_1_cont05_item sub7_1_cont05_item06 flex_row fd_c fw jc_center center">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub7_1_cont05_item06.png" alt="">

                                    <p class="fz_18 ls_2 lh_12 medium flex_row jc_center center">
                                        남성 탈모관리 <img src="<?php echo G5_THEME_URL?>/sub/img/plus_btn.svg" alt="">
                                    </p>
                                </div>
                            </a>
                        </div>
                        <div class="column_quarter">
                            <a href="<?php echo G5_THEME_URL?>/sub/sub7_4.php">
                                <div class="sub7_1_cont05_item sub7_1_cont05_item07 flex_row fd_c fw jc_center center">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub7_1_cont05_item07.png" alt="">

                                    <p class="fz_18 ls_2 lh_12 medium flex_row jc_center center">
                                        남성 보톡스 <img src="<?php echo G5_THEME_URL?>/sub/img/plus_btn.svg" alt="">
                                    </p>
                                </div>
                            </a>
                        </div>
                        <div class="column_quarter">
                            <a href="<?php echo G5_THEME_URL?>/sub/sub7_5.php">
                                <div class="sub7_1_cont05_item sub7_1_cont05_item08 flex_row fd_c fw jc_center center">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub7_1_cont05_item08.png" alt="">

                                    <p class="fz_18 ls_2 lh_12 medium flex_row jc_center center">
                                        남성 필러 <img src="<?php echo G5_THEME_URL?>/sub/img/plus_btn.svg" alt="">
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </article>

        <article class="sub_cont_box sub2_1_youtube_box pd_120">
            <div class="container-sm flex_row fw jc_center al_fs">
                <div class="sub_cont_title sub2_1_4_cont_title_center ta_c">
                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                    <p class="sub_cont_title_text01 sortsmillgoudy fz_50 lh_14 ls_2 gs_reveal" data-gs-delay="200">
                        Youtube
                    </p>
                    <p class="sub_cont_title_text02 fz_20 lh_16 ls_2 normal gs_reveal m_60" data-gs-delay="400">
                        피부과 전문의가 직접 들려 주는 <br>
                        <span class="fz_30 ls_2 lh_14 normal">남성 피부</span>
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
