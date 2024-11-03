<?php
include_once('./_common.php');
//if (G5_IS_MOBILE) {
//    include_once(G5_MOBILE_PATH.'/index.php');
//    return;
//}

// 웹사이트 타이틀
$g5['title'] = '피부양성종양';

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
            <div class="sub_top_view sub5_1_top_view">
                <div class="sub_top_view_bg sub5_1_top_view_bg"></div>
                <div class="sub_top_view_text_wrap sub5_1_top_view_text_wrap ta_c">
                    <div class="sub_top_view_text01 sub5_1_top_view_text01">
                        <p class="sortsmillgoudy fz_30 lh_14 ls_2 sub_text_ani ta_c">
                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub_top_view_text_icon.png" alt="">
                            Benign Skin
                        </p>
                    </div>
                    <div class="sub_top_view_text02 sub5_1_top_view_text02 m_20">
                        <p class="c-w fz_40 lh_14 ls_2 medium sub_text_ani">
                            피부양성종양
                        </p>
                    </div>
                    <div class="sub_top_view_text03 sub5_1_top_view_text03">
                        <p class="c-w fz_16 lh_14 ls_2 normal sub_text_ani">
                            피부에 튀어나온 혹, 덩어리 등 다양한 양성 종양을
                        </p>
                    </div>
                    <div class="sub_top_view_text04 sub5_1_top_view_text04">
                        <p class="c-w fz_16 lh_14 ls_2 normal sub_text_ani">
                            정확도 높게 진단하고, 외과적 수술로 치료합니다.
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
                <div class="sub_cont_title sub5_1_cont01_title_left title_left">
                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                    <p class="sub_cont_title_text01 fz_32 lh_14 ls_2 light m_40">
                        미세 절개 수술로 흉터를 줄인 <br>
                        <span class="medium">피부양성종양 제거술</span>
                    </p>
                    <p class="pc_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 light">
                        피부에 발생하는 양성종양에는 표피낭종, 피지낭종, 피부섬유종, <br>
                        모기질종, 지방종, 신경섬유종 등이 있습니다. 양성종양은 약물치료, <br>
                        주사치료만으로 호전되기 어렵고 종양의 뿌리, 낭종의 주머니 모두를 <br>
                        제거해야 재발하지 않습니다. <br>
                        인천 오라클피부과는 피부과 전문의가 1:1 심층 진료를 통해 정확한 <br>
                        진단 후 미세 절개로 흉터를 최소화 하며 피부양성종양 제거술을 시행합니다.
                    </p>
                    <p class="m_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 light">
                        피부에 발생하는 양성종양에는 표피낭종, 피지낭종, 피부섬유종, 
                        모기질종, 지방종, 신경섬유종 등이 있습니다. 양성종양은 약물치료, 
                        주사치료만으로 호전되기 어렵고 종양의 뿌리, 낭종의 주머니 모두를 
                        제거해야 재발하지 않습니다. <br>
                        인천 오라클피부과는 피부과 전문의가 1:1 심층 진료를 통해 정확한 
                        진단 후 미세 절개로 흉터를 최소화 하며 피부양성종양 제거술을 시행합니다.
                    </p>
                </div>
                <div class="sub_cont_doct_img sub5_1_cont01_img img_right ta_r">
                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub5_1_cont01_img01.png" alt="">
                </div>
            </div>
        </article>
        <!-- 230330 수정
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
                                <a href="<?php echo G5_THEME_URL?>/sub/sub8_2.php" target="_blank">
                                    <div class="sub2_1_1_ba_slide_img sub2_1_1_ba_slide_img01 flex_row sb al_fs">
                                        <div class="sub2_1_1_ba_slide_img_b">
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub5_1_ba_slide_img01_b.jpg" alt="">
                                        </div>
                                        <div class="sub2_1_1_ba_slide_img_a <?=($is_member ? '':'blur')?>">
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub5_1_ba_slide_img01_a.jpg" alt="">
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
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub5_1_ba_slide_img02_b.jpg" alt="">
                                        </div>
                                        <div class="sub2_1_1_ba_slide_img_a <?=($is_member ? '':'blur')?>">
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub5_1_ba_slide_img02_a.jpg" alt="">
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
        <article class="sub_cont_box sub5_1_cont03_box bg_ff pd_160">
            <div class="container-1300 flex_row fw jc_center center">
                <div class="sub_cont_title sub3_1_cont04_title_center ta_c">
                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                    <p class="sub_cont_title_text01 fz_32 lh_14 ls_2 normal m_60 gs_reveal" data-gs-delay="200">
                        인천 오라클 피부양성종양 <br>
                        <span class="medium">제거 순서</span>
                    </p>
                </div>
                <div class="sub5_1_cont03_item_box flex_row fw jc_center al_fs">
                    <div class="sub5_1_cont03_item sub5_1_cont03_item01 ta_c gs_reveal" data-gs-delay="200">
                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub5_1_cont03_img01.png" alt="">
                        
                        <p class="sub5_1_cont03_item_text01 fz_18 ls_2 lh_14 normal">
                           POINT 01
                        </p>
                        <p class="c-dg fz_16 ls_2 lh_14 light">
                           수술 전 초음파 정밀 검사
                        </p>
                    </div>
                    <div class="sub5_1_cont03_item sub5_1_cont03_item02 ta_c gs_reveal" data-gs-delay="400">
                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub5_1_cont03_img02.png" alt="">
                        
                        <p class="sub5_1_cont03_item_text01 fz_18 ls_2 lh_14 normal">
                           POINT 02
                        </p>
                        <p class="c-dg fz_16 ls_2 lh_14 light">
                           수술 부위만 부분 마취
                        </p>
                    </div>
                    <div class="sub5_1_cont03_item sub5_1_cont03_item03 ta_c gs_reveal" data-gs-delay="600">
                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub5_1_cont03_img03.png" alt="">
                        
                        <p class="sub5_1_cont03_item_text01 fz_18 ls_2 lh_14 normal">
                           POINT 03
                        </p>
                        <p class="c-dg fz_16 ls_2 lh_14 light">
                           미세 절개 수술
                        </p>
                    </div>
                    <div class="sub5_1_cont03_item sub5_1_cont03_item04 ta_c gs_reveal" data-gs-delay="800">
                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub5_1_cont03_img04.png" alt="">
                        
                        <p class="sub5_1_cont03_item_text01 fz_18 ls_2 lh_14 normal">
                           POINT 04
                        </p>
                        <p class="c-dg fz_16 ls_2 lh_14 light">
                           피부 깊이에 따라 <br>
                           꼼꼼히 봉합
                        </p>
                    </div>
                    <div class="sub5_1_cont03_item sub5_1_cont03_item05 ta_c gs_reveal" data-gs-delay="1000">
                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub5_1_cont03_img05.png" alt="">
                        
                        <p class="sub5_1_cont03_item_text01 fz_18 ls_2 lh_14 normal">
                           POINT 05
                        </p>
                        <p class="c-dg fz_16 ls_2 lh_14 light">
                           수술 후 조직 검사를 통해 <br>
                           완전 절제 여부 확인
                        </p>
                    </div>
                </div>
            </div>
        </article>
        
        <article class="sub_cont_box sub5_1_cont04_box bg_fa pd_160 pt_120">
            <div class="sub_tabcontent_container sub7_container flex_row fw jc_center center">
                <div class="sub_cont_title sub5_1_cont04_title_center ta_c">
                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                    <p class="sub_cont_title_text01 fz_32 lh_14 ls_2 light m_40 gs_reveal" data-gs-delay="200">
                        정확한 양성 종양 진단을 위한 <br>
                        <span class="medium">피부조직검사</span>
                    </p>
                    <p class="pc_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 light m_60 gs_reveal" data-gs-delay="400">
                        드물게 일반적인 치료에 반응하지 않거나, 병변이 특이한 형태를 보이는 경우 <br>
                        진단의 정확도를 높이기 위해 인천 오라클피부과에서는 피부과 전문의의 피부 조직검사를 통한 <br>
                        현미경적 진단을 통해 정확하게 피부 양성종양을 진단합니다.
                    </p>
                    <p class="m_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 light m_60 gs_reveal" data-gs-delay="400">
                        드물게 일반적인 치료에 반응하지 않거나, 병변이 특이한 형태를 보이는 경우 
                        진단의 정확도를 높이기 위해 인천 오라클피부과에서는 피부과 전문의의 피부 조직검사를 통한 
                        현미경적 진단을 통해 정확하게 피부 양성종양을 진단합니다.
                    </p>
                </div>
                <div class="sub_cont_doct_img sub5_1_cont04_img ta_c">
                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub5_1_cont04_img01.png" alt="">
                    
                    <p class="sub5_1_cont04_img_text01 fz_16 ls_2 lh_16 medium">피부조직검사 과정</p>
                    <p class="sub5_1_cont04_img_text02 fz_16 ls_2 lh_16 normal">
                        피부 조직을 소량(3~4mm) 채취하여 검사합니다.
                    </p>
                </div>
            </div>
        </article>
        
        <article class="sub_cont_box sub3_7_cont04_box sub5_1_cont05_box bg_ff">
            <img src="<?php echo G5_THEME_URL?>/sub/img/sub5_1_cont05_img01.jpg" alt="">
            
            <div class="sub5_1_cont05_item_box flex_row fd_c jc_center al_fs">
                <div class="sub3_7_cont04_item01 gs_reveal" data-gs-delay="200">
                    <p class="pc_cont_434 fz_28 lh_14 ls_2 normal ta_l m_30">
                        피부과전문의 & 병리과전문의 <br>
                        협진을 통한 정확한 조직검사
                    </p>
                    <p class="m_cont_434 fz_28 lh_14 ls_2 normal ta_l m_30">
                        피부과전문의 & 병리과전문의 
                        협진을 통한 정확한 조직검사
                    </p>
                </div>
                <div class="sub3_7_cont04_item02 gs_reveal" data-gs-delay="400">
                    <p class="pc_cont_434 fz_17 lh_16 ls_2 light ta_l m_30">
                        환부에서 채취한 피부조직은 외부 검사실로 위탁되어 <br>
                        현미경 검사를 위한 슬라이드로 제작된 후 병리과 전문의와 <br>
                        피부과 전문의가 조직소견을 판독합니다.
                    </p>
                    <p class="m_cont_434 fz_17 lh_16 ls_2 light ta_l m_30">
                        환부에서 채취한 피부조직은 외부 검사실로 위탁되어 
                        현미경 검사를 위한 슬라이드로 제작된 후 병리과 전문의와 
                        피부과 전문의가 조직소견을 판독합니다.
                    </p>
                </div>
                <div class="sub3_7_cont04_item03 gs_reveal" data-gs-delay="600">
                    <p class="pc_cont_434 fz_17 lh_16 ls_2 light ta_l m_50">
                        조직검사 결과 대학병원 진료가 필요한 경우에는 <br>
                        협력 대학병원으로 의뢰하여 연계 치료를 도와드립니다.
                    </p>
                    <p class="m_cont_434 fz_17 lh_16 ls_2 light ta_l">
                        조직검사 결과 대학병원 진료가 필요한 경우에는 
                        협력 대학병원으로 의뢰하여 연계 치료를 도와드립니다.
                    </p>
                </div>
            </div>
        </article>
        
        <article class="sub_cont_box sub2_1_1_cont4_box p_r">
            <div class="sub2_1_1_cont4 flex_row fw jc_center center">
                <div class="column_half">
                    <div class="sub5_1_cont05_left flex_row fw fd_c jc_center center">
                        <div class="sub_cont_title ta_l">
                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                            <p class="sub_cont_title_text01 fz_32 lh_14 ls_2 light m_40 gs_reveal" data-gs-delay="200">
                                <span class="medium">수술 후 흉터까지 생각하는</span> <br>
                                디테일 케어 프로그램
                            </p>
                            <p class="pc_cont sub_cont_title_text02 fz_16 lh_16 ls_2 light gs_reveal" data-gs-delay="400">
                                수술 직후부터 흉터케어를 병행하면 봉합흉터를 최소화할 수 있습니다. <br>
                                봉합사 제거 후 레이저 치료부터 다양한 수술 흉터 케어 프로그램을 진행하여 <br>
                                수술 흉터를 방지하고, 피부 재생을 유도합니다.
                            </p>
                            <p class="m_cont sub_cont_title_text02 fz_16 lh_16 ls_2 light gs_reveal" data-gs-delay="400">
                                수술 직후부터 흉터케어를 병행하면 봉합흉터를 최소화할 수 있습니다. 
                                봉합사 제거 후 레이저 치료부터 다양한 수술 흉터 케어 프로그램을 진행하여 
                                수술 흉터를 방지하고, 피부 재생을 유도합니다.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="column_half">
                    <div class="sub2_1_1_cont4_img">
                        <img src="<?php echo G5_THEME_URL?>/sub/img/su5_1_cont06_img_right.jpg" alt="">
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
