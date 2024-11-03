<?php
include_once('./_common.php');
//if (G5_IS_MOBILE) {
//    include_once(G5_MOBILE_PATH.'/index.php');
//    return;
//}

// 웹사이트 타이틀
$g5['title'] = '이미지 필러';

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
            <div class="sub_top_view sub7_5_top_view">
                <div class="sub_top_view_bg sub7_5_top_view_bg"></div>
                <div class="sub_top_view_text_wrap sub7_5_top_view_text_wrap ta_c">
                    <div class="sub_top_view_text01 sub7_5_top_view_text01">
                        <p class="sortsmillgoudy fz_30 lh_14 ls_2 sub_text_ani ta_c">
                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub_top_view_text_icon.png" alt="">
                            Men’s Filler
                        </p>
                    </div>
                    <div class="sub_top_view_text02 sub7_5_top_view_text02 m_20">
                        <p class="fz_40 lh_14 ls_2 medium sub_text_ani">
                            이미지 필러
                        </p>
                    </div>
                    <div class="sub_top_view_text03 sub7_5_top_view_text03">
                        <p class="fz_16 lh_14 ls_2 normal sub_text_ani">
                            수술/절개 없는 자연스러운 이미지 교정,
                        </p>
                    </div>
                    <div class="sub_top_view_text04 sub7_5_top_view_text04">
                        <p class="fz_16 lh_14 ls_2 normal sub_text_ani">
                            간단한 시술로 세련된 이미지를 완성합니다.
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
                <div class="sub_cont_title sub7_5_cont01_title_left title_left">
                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                    <p class="sub_cont_title_text01 fz_32 lh_14 ls_2 light m_40">
                        피부과 전문의가 직접 디자인 하는 <br>
                        <span class="medium">남성 이미지 필러</span>
                    </p>
                    <p class="pc_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 light">
                        이미지 개선은 원하지만 어떻게 바꿔야 할 지 고민되는 남성분들을 위해, 인천 <br>
                        오라클피부과는 숙련된 피부과 전문의가 맞춤 1:1 상담을 통해 원하는 이미지를 <br>
                        파악합니다. 윤곽 개선부터 동안 효과까지 원하는 이미지에 맞춰 시술을 진행하여 <br>
                        입체감 있고 분위기 있는 얼굴을 완성합니다. 
                    </p>
                    <p class="m_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 light">
                        이미지 개선은 원하지만 어떻게 바꿔야 할 지 고민되는 남성분들을 위해, 인천 
                        오라클피부과는 숙련된 피부과 전문의가 맞춤 1:1 상담을 통해 원하는 이미지를 
                        파악합니다. 윤곽 개선부터 동안 효과까지 원하는 이미지에 맞춰 시술을 진행하여 
                        입체감 있고 분위기 있는 얼굴을 완성합니다. 
                    </p>
                </div>
                <div class="sub_cont_doct_img sub7_5_cont01_img img_right ta_r">
                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub7_5_cont01_img01.png" alt="">
                </div>
            </div>
        </article>
        
         
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
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub7_5_ba_slide_img01_b.jpg" alt="">
                                        </div>
                                        <div class="sub2_1_1_ba_slide_img_a <?=($is_member ? '':'blur')?>">
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub7_5_ba_slide_img01_a.jpg" alt="">
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
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub7_5_ba_slide_img02_b.jpg" alt="">
                                        </div>
                                        <div class="sub2_1_1_ba_slide_img_a <?=($is_member ? '':'blur')?>">
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub7_5_ba_slide_img02_a.jpg" alt="">
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
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub7_5_ba_slide_img03_b.jpg" alt="">
                                        </div>
                                        <div class="sub2_1_1_ba_slide_img_a <?=($is_member ? '':'blur')?>">
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub7_5_ba_slide_img03_a.jpg" alt="">
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
        
        
        <article class="sub_cont_box sub2_1_4_cont_box pd_60">
            <div class="sub2_1_4_cont3_bg sub7_4_cont3_bg">
                <div class="sub_tabcontent_container sub_tabcontent_container01 flex_row fw jc_center al_fs">
                    <div class="sub_cont_title sub7_5_cont03_title_center ta_c">
                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                        <p class="sub_cont_title_text01 sortsmillgoudy fz_20 lh_14 ls_2 light gs_reveal" data-gs-delay="200">
                            Oracle Point.01
                        </p>
                        <p class="sub_cont_title_text02 fz_32 lh_14 ls_2 light m_80 gs_reveal" data-gs-delay="400">
                            남성만의 분위기를 더하는 <br>
                            <span class="medium">이미지 필러 시술 부위</span>
                        </p>
                    </div>
                    <div class="sub7_5_cont03_box flex_row fw se al_fs m_60">
                        <div class="column_quarter">
                            <div class="sub7_5_cont03_item sub7_5_cont03_item01 flex_row fw fd_c jc_center center gs_reveal" data-gs-delay="200">
                                <img class="m_20" src="<?php echo G5_THEME_URL?>/sub/img/sub7_5_cont03_item01.png" alt="">
                                
                                <p class="fz_20 ls_2 lh_14 normal ta_c m_10">
                                    이마
                                </p>
                                <p class="pc_cont_434 fz_16 ls_2 lh_14 light ta_c">
                                    그늘지고 어두운 인상을 만드는 <br>
                                    낮은 이마에 볼륨감을 더해 <br>
                                    자신감 있는 얼굴을 완성합니다.
                                </p>
                                <p class="m_cont_434 fz_16 ls_2 lh_14 light ta_c">
                                    그늘지고 어두운 인상을 만드는 
                                    낮은 이마에 볼륨감을 더해 
                                    자신감 있는 얼굴을 완성합니다.
                                </p>
                            </div>
                        </div>
                        <div class="column_quarter">
                            <div class="sub7_5_cont03_item sub7_5_cont03_item02 flex_row fw fd_c jc_center center gs_reveal" data-gs-delay="400">
                                <img class="m_20" src="<?php echo G5_THEME_URL?>/sub/img/sub7_5_cont03_item02.png" alt="">
                                
                                <p class="fz_20 ls_2 lh_14 normal ta_c m_10">
                                    코
                                </p>
                                <p class="pc_cont_434 fz_16 ls_2 lh_14 light ta_c">
                                    높이가 낮은 코에 입체감을 <br>
                                    하여 이목구비를 선명하게 <br>
                                    변화시킵니다.
                                </p>
                                <p class="m_cont_434 fz_16 ls_2 lh_14 light ta_c">
                                    높이가 낮은 코에 입체감을 
                                    하여 이목구비를 선명하게 
                                    변화시킵니다.
                                </p>
                            </div>
                        </div>
                        <div class="column_quarter">
                            <div class="sub7_5_cont03_item sub7_5_cont03_item03 flex_row fw fd_c jc_center center gs_reveal" data-gs-delay="600">
                                <img class="m_20" src="<?php echo G5_THEME_URL?>/sub/img/sub7_5_cont03_item03.png" alt="">
                                
                                <p class="fz_20 ls_2 lh_14 normal ta_c m_10">
                                    턱
                                </p>
                                <p class="pc_cont_434 fz_16 ls_2 lh_14 light ta_c">
                                    샤프한 라인으로 변화시켜 <br>
                                    깔끔하고 남자다운 이미지를 <br>
                                    완성합니다.
                                </p>
                                <p class="m_cont_434 fz_16 ls_2 lh_14 light ta_c">
                                    샤프한 라인으로 변화시켜 
                                    깔끔하고 남자다운 이미지를 
                                    완성합니다.
                                </p>
                            </div>
                        </div>
                        <div class="column_quarter">
                            <div class="sub7_5_cont03_item sub7_5_cont03_item03 flex_row fw fd_c jc_center center gs_reveal" data-gs-delay="800">
                                <img class="m_20" src="<?php echo G5_THEME_URL?>/sub/img/sub7_5_cont03_item04.png" alt="">
                                
                                <p class="fz_20 ls_2 lh_14 normal ta_c m_10">
                                    볼/팔자
                                </p>
                                <p class="pc_cont_434 fz_16 ls_2 lh_14 light ta_c">
                                    나이 들어 보이는 패이고 <br>
                                    주름진 볼과 팔자를 탄력 있고 <br>
                                    어려 보이게 만듭니다.
                                </p>
                                <p class="m_cont_434 fz_16 ls_2 lh_14 light ta_c">
                                    나이 들어 보이는 패이고 
                                    주름진 볼과 팔자를 탄력 있고 
                                    어려 보이게 만듭니다.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="sub_tabcontent_container sub2_5_fd_cr flex_row fw sa center">
                    <div class="sub_cont_title sub7_4_cont_title_left title_left">
                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                        <p class="sub_cont_title_text01 sortsmillgoudy fz_20 lh_14 ls_2 light gs_reveal" data-gs-delay="200">
                            Oracle Point.02
                        </p>
                        <p class="sub_cont_title_text02 fz_32 lh_14 ls_2 light m_40 gs_reveal" data-gs-delay="400">
                            필러 마스터 피부과 전문의의 <br>
                            <span class="medium">1:1 맞춤 디자인</span>
                        </p>
                        <p class="pc_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light gs_reveal" data-gs-delay="600">
                            피부와 얼굴의 전체적인 비율을 고려하지 않은 필러 시술은 인위적이고 <br>
                            부자연스러운 느낌을 줄 수 있으며, 이물감 등의 부작용을 유발합니다. <br>
                            인천 오라클의 남성 이미지 필러는 피부를 잘 아는 피부과 전문의가 시술 전 <br>
                            환자가 원하는 이미지를 충분한 상담을 거쳐 파악하고, 실제 피부와 전체적인 <br>
                            얼굴 비율을 고려한 1:1 맞춤 디자인을 진행하여 자연스러운 필러가 가능합니다.
                        </p>
                        <p class="m_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light gs_reveal" data-gs-delay="600">
                            피부와 얼굴의 전체적인 비율을 고려하지 않은 필러 시술은 인위적이고 
                            부자연스러운 느낌을 줄 수 있으며, 이물감 등의 부작용을 유발합니다. <br>
                            인천 오라클의 남성 이미지 필러는 피부를 잘 아는 피부과 전문의가 시술 전 
                            환자가 원하는 이미지를 충분한 상담을 거쳐 파악하고, 실제 피부와 전체적인 
                            얼굴 비율을 고려한 1:1 맞춤 디자인을 진행하여 자연스러운 필러가 가능합니다.
                        </p>
                    </div>
                    <div class="sub_cont_doct_img sub7_4_cont04_img_box p_r ta_c">
                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub7_5_cont04_img01.png" alt="">
                    </div>
                </div>
            </div>
        </article>
        
        <article class="sub_cont_box sub7_4_cont05_box pd_60 pt_160">
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
                        보다 깨끗하게, 보다 젊어 보이게, 보다 부드럽게, <br>보다 자연스럽게. 
                        오라클 맨즈 프로그램은 피부과 전문의 1:1 맞춤 진료로 남성적인 미를 
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
        </article>

        <article class="sub_cont_box sub2_1_youtube_box pd_160 pt_120">
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
