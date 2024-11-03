<?php
include_once('./_common.php');
//if (G5_IS_MOBILE) {
//    include_once(G5_MOBILE_PATH.'/index.php');
//    return;
//}

// 웹사이트 타이틀
$g5['title'] = '흉터';

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
            <div class="sub_top_view sub2_6_top_view">
                <div class="sub_top_view_bg sub2_6_top_view_bg"></div>
                <div class="sub_top_view_text_wrap sub2_6_top_view_text_wrap ta_c">
                    <div class="sub_top_view_text01 sub2_6_top_view_text01">
                        <p class="sortsmillgoudy fz_30 lh_14 ls_2 sub_text_ani">
                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub_top_view_text_icon2.png" alt="">
                            Scar Treatment
                        </p>
                    </div>
                    <div class="sub_top_view_text02 sub2_6_top_view_text02 m_20">
                        <p class="fz_40 lh_14 ls_2 medium sub_text_ani">
                            흉터
                        </p>
                    </div>
                    <div class="sub_top_view_text03 sub2_6_top_view_text03">
                        <p class="fz_16 lh_14 ls_2 normal sub_text_ani">
                            개인의 피부 특성과 흉터의 종류, 상태에 맞춘
                        </p>
                    </div>
                    <div class="sub_top_view_text04 sub2_6_top_view_text04">
                        <p class="fz_16 lh_14 ls_2 normal sub_text_ani">
                            피부과 전문의 진료로 피부를 깨끗하게 복원합니다.
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
        
        <section class="sub_tab_cont sub2_4_tab_cont bg_fa pt_60">
            <article class="sub_cont02 sub2_4_cont02">
                <div class="sub_tab">
                    <ul class="sub_tab_ul flex_row jc_center center">
                        <li id="sub_tablinks01" class="sub_tab_li sub_tablinks active" onclick="opensubtab(event, 'sub_tabcontent1')">
                            <a href="javascript:void(0);">
                                <p class="fz_16 ta_c">흉터치료</p>
                            </a>
                        </li>
                        <li id="sub_tablinks02" class="sub_tab_li sub_tablinks" onclick="opensubtab(event, 'sub_tabcontent2')">
                            <a href="javascript:void(0);">
                                <p class="fz_16 ta_c">튼살</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </article>
            
            <article class="sub_tabcontent_wrap sub2_1_1_tabcontent_wrap">
                <div class="sub_cont03 sub2_6_1_cont03 sub_tabcontent sub_tabcontent1" id="sub_tabcontent1">
                    <div class="sub_tabcontent01_wrap">
                        <div class="sub_cont_box sub2_1_1_cont1_1_box bg_fa pd_120">
                            <div class="sub_tabcontent_container flex_row fw sa center">
                                <div class="sub_cont_title sub2_6_1_cont_title_left title_left">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                                    <p class="pc_cont_434 sub_cont_title_text01 fz_32 lh_14 ls_2 light m_40">
                                        피부를 복원하는 피부과전문의 노하우, <br>
                                        <span class="medium">맞춤형 흉터치료</span>
                                    </p>
                                    <p class="m_cont_434 sub_cont_title_text01 fz_32 lh_14 ls_2 light m_40">
                                        피부를 복원하는 피부과전문의 노하우, 
                                        <span class="medium">맞춤형 흉터치료</span>
                                    </p>
                                    <p class="pc_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 light m_20">
                                        흉터는 개인의 피부 특성과 흉터 종류와 상태에 따라 다른 치료를 <br>
                                        필요로 합니다. 인천 오라클피부과는 다양한 흉터 치료 경험이 있는 <br>
                                        피부과 전문의가 직접 흉터를 진단하고, 약물 치료부터 레이저 치료까지 <br>
                                        다양한 치료 방법을 적용하여 개선합니다. <br>
                                        지워지지 않는 흔적, 흉터. 피부과 전문의의 섬세한 치료로 <br>
                                        아픈 상처의 기억까지 깨끗하게 지워드리겠습니다.
                                    </p>
                                    <p class="m_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 light m_20">
                                        흉터는 개인의 피부 특성과 흉터 종류와 상태에 따라 다른 치료를 
                                        필요로 합니다. 인천 오라클피부과는 다양한 흉터 치료 경험이 있는 
                                        피부과 전문의가 직접 흉터를 진단하고, 약물 치료부터 레이저 치료까지 
                                        다양한 치료 방법을 적용하여 개선합니다. 
                                        지워지지 않는 흔적, 흉터. 피부과 전문의의 섬세한 치료로 
                                        아픈 상처의 기억까지 깨끗하게 지워드리겠습니다.
                                    </p>
                                </div>
                                <div class="sub_cont_doct_video sub2_6_1_tabcontent01_img img_right ta_r">
                                    <div class="video-real-selfie small-video-wrap" style="overflow:hidden;">
                                        <div class="video-real-selfie-wrapper" style="position: relative; padding:56.25% 0 0;">
                                            <video id="realSelfieVideo" poster="<?php echo G5_THEME_URL?>/sub/img/sub2_6_1_cont01_video_bg01.jpg" preload="none" style="position: absolute; top:0; left:0; width:100%;"  autoplay muted loop playsinline>
                                                <source src="<?php echo G5_THEME_URL?>/video/sub2_6_1_cont01_video01.mp4" type="video/mp4">
                                            </video>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- 
                        <div class="sub_cont_box sub2_1_1_cont1_2_box pd_120">
                            <div class="sub_tabcontent_container flex_row fw jc_center al_fs">
                                <div class="sub_cont_title sub2_1_1_cont_title_center ta_c">
                                    <p class="sub_cont_title_text01 fz_22 lh_14 ls_2 normal gs_reveal" data-gs-delay="200">
                                        흉터
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
                        </div>
                        -->
                        
                        <div class="sub_cont_box sub2_1_1_cont_premium bg_fa pd_160">
                            <div class="sub_tabcontent_container flex_row fw jc_center al_fs">
                                <div class="sub_cont_title sub2_1_4_cont_title_center ta_c">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                                    <p class="sub_cont_title_text01 fz_30 lh_16 ls_2 light m_80 gs_reveal" data-gs-delay="200">
                                        <span class="medium">흉터, 종류에 따라</span><br>
                                        다른 치료가 필요합니다
                                    </p>
                                </div>
                                <div class="sub2_1_1_premium_box flex_row fw se al_fs">
                                    <div class="column_third">
                                        <div class="sub2_1_1_premium_item sub2_1_1_premium_item01 ta_c gs_reveal" data-gs-delay="200">
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_6_1_premium_item01.png" alt="">
                                            <p class="fz_22 ls_2 lh_16 normal m_10">
                                                화상 흉터
                                            </p>
                                            <p class="fz_16 ls_2 lh_14 normal">
                                                지워지지 않는 상처, <br>
                                                잊고 싶은 기억까지 깨끗하게
                                            </p>
                                        </div>
                                    </div>
                                    <div class="column_third">
                                        <div class="sub2_1_1_premium_item sub2_1_1_premium_item02 ta_c gs_reveal" data-gs-delay="400">
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_6_1_premium_item02.png" alt="">
                                            <p class="fz_22 ls_2 lh_16 normal m_10">
                                                수술 흉터
                                            </p>
                                            <p class="fz_16 ls_2 lh_14 normal">
                                                울퉁불퉁한 피부를 <br>
                                                매끄럽게
                                            </p>
                                        </div>
                                    </div>
                                    <div class="column_third">
                                        <div class="sub2_1_1_premium_item sub2_1_1_premium_item03 ta_c gs_reveal" data-gs-delay="600">
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_6_1_premium_item03.png" alt="">
                                            <p class="fz_22 ls_2 lh_16 normal m_10">
                                                외상/수두 흉터
                                            </p>
                                            <p class="fz_16 ls_2 lh_14 normal">
                                                눈에 띄는 상처, <br>
                                                흔적없이 매끈하게
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="sub_cont_box sub2_1_4_cont_box pd_60">
                            <div class="sub2_1_4_cont3_bg">
                                <div class="sub_cont_title sub2_1_4_cont_title_center p_r ta_c pt_100">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                                    <p class="sub_cont_top_title_text01 fz_30 lh_14 ls_2 light gs_reveal" data-gs-delay="200">
                                        오라클만의 <span class="medium">흉터치료 특별함</span>
                                    </p>
                                </div>
                                <div class="sub_tabcontent_container flex_row fw sa center">
                                    <div class="sub_cont_title sub2_6_1_cont03_title_left title_left">
                                        <p class="sub_cont_title_text01 sortsmillgoudy fz_20 lh_14 ls_2 light gs_reveal" data-gs-delay="200">
                                            Oracle Point.01
                                        </p>
                                        <p class="sub_cont_title_text02 fz_32 lh_14 ls_2 light m_30 gs_reveal" data-gs-delay="400">
                                            부풀고 커지는 켈로이드 피부라면 <br>
                                            <span class="medium">피부과 전문의에게!</span>
                                        </p>
                                        <p class="pc_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light gs_reveal m_30" data-gs-delay="600">
                                            상처를 치유하는 과정에서 섬유 조직이 비정상적으로 뭉치며 커지는 <br>
                                            켈로이드는 일반 흉터와 달리 시간이 지날수록 비대해지고, 딱딱해지며, <br>
                                            통증이 발생할 수 있습니다.
                                        </p>
                                        <p class="m_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light gs_reveal m_30" data-gs-delay="600">
                                            상처를 치유하는 과정에서 섬유 조직이 비정상적으로 뭉치며 커지는 
                                            켈로이드는 일반 흉터와 달리 시간이 지날수록 비대해지고, 딱딱해지며, 
                                            통증이 발생할 수 있습니다.
                                        </p>
                                        <p class="pc_cont_434 sub_cont_title_text04 fz_16 lh_16 ls_2 light gs_reveal" data-gs-delay="800">
                                            켈로이드 체질은 피부를 잘 아는 피부과 전문의에게 치료를 받는 것이 <br>
                                            안전합니다. 인천 오라클피부과는 피부과 전문의가 초기 켈로이드부터 <br>
                                            딱딱해진 병변까지 깨끗하게 치료합니다.
                                        </p>
                                        <p class="m_cont_434 sub_cont_title_text04 fz_16 lh_16 ls_2 light gs_reveal" data-gs-delay="800">
                                            켈로이드 체질은 피부를 잘 아는 피부과 전문의에게 치료를 받는 것이 
                                            안전합니다. 인천 오라클피부과는 피부과 전문의가 초기 켈로이드부터 
                                            딱딱해진 병변까지 깨끗하게 치료합니다.
                                        </p>
                                    </div>
                                    <div class="pc_cont_480 sub_cont_doct_img sub2_6_1_cont_doct_img sub2_5_1_tabcontent03_img img_right p_r ta_r">
                                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_6_1_tabcontent04_img01.png" alt="">
                                    </div>
                                    <div class="m_cont_480 sub_cont_doct_img sub2_6_1_cont_doct_img sub2_5_1_tabcontent03_img img_right p_r ta_r">
                                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_6_1_tabcontent04_img01_m.png" alt="">
                                    </div>
                                </div>

                                <div class="sub_tabcontent_container flex_row fw sa center">
                                    <div class="sub_cont_doct_img sub2_6_1_tabcontent05_img img_left p_r ta_c">
                                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_6_1_tabcontent05_img01.png" alt="">
                                        
                                        <div class="sub2_5_1_cont05_img_txt ta_r">
                                            <p class="fz_14 ls_2 lh_14">* 구월점 한정</p>
                                        </div>
                                    </div>
                                    <div class="sub_cont_title sub2_5_1_tabcontent04_title_right title_right">
                                        <p class="sub_cont_title_text01 sortsmillgoudy fz_20 lh_14 ls_2 light gs_reveal" data-gs-delay="200">
                                            Oracle Point.02
                                        </p>
                                        <p class="sub_cont_title_text02 fz_32 lh_14 ls_2 light m_40 gs_reveal" data-gs-delay="400">
                                            민감한 부위의 흉터도 편안하게, <br>
                                            <span class="medium">프라이빗 흉터 치료</span>
                                        </p>
                                        <ul class="sub2_5_1_cont04_item_ul fz_17 normal ta_l m_40 gs_reveal" data-gs-delay="600">
                                            <li>
                                                <p class="sub2_5_1_ul_p">남/여 의료진 성별 선택 가능</p>
                                            </li>
                                            <li>
                                                <p class="sub2_5_1_ul_p">프라이빗 룸 흉터 치료 가능</p>
                                            </li>
                                        </ul>
                                        <p class="pc_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 normal gs_reveal" data-gs-delay="800">
                                            인천 오라클피부과는 민감한 부위의 흉터도 편안하게 시술 받아보실 수 <br>
                                            있도록 완벽하게 분리된 프라이빗 룸에서 1:1로 레이저 시술을 진행합니다.
                                        </p>
                                        <p class="m_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 normal gs_reveal" data-gs-delay="800">
                                            인천 오라클피부과는 민감한 부위의 흉터도 편안하게 시술 받아보실 수 
                                            있도록 완벽하게 분리된 프라이빗 룸에서 1:1로 레이저 시술을 진행합니다.
                                        </p>
                                    </div>
                                </div>

                                <div class="sub_tabcontent_container_full flex_row fw jc_fs al_fs">
                                    <div class="sub_cont_title title_left">
                                        <p class="sub_cont_title_text01 sortsmillgoudy fz_20 lh_14 ls_2 light gs_reveal" data-gs-delay="200">
                                            Oracle Point
                                        </p>
                                        <p class="sub_cont_title_text02 fz_32 lh_14 ls_2 light m_40 gs_reveal" data-gs-delay="400">
                                            흉터 <span class="medium">레이저 프로그램</span>
                                        </p>
                                    </div>
                                    <div class="swiper-container sub2_1_4_cont5_slider">
                                        <div class="swiper-wrapper">
                                            
                                            <?php 
                                                include(G5_PATH.'/theme/oracle/include/equip_laser.php');
                                            ?>
                                            
                                        </div>
                                        <div class="swiper-scrollbar"></div>
                                    </div>
                                    
                                    <?php 
                                        include(G5_PATH.'/theme/oracle/include/equip_laser_content.php');
                                    ?>
                                    
                                </div>
                            </div>
                        </div>
                        
                        <!-- 
                        <div class="sub_cont_box sub2_2_1_cont04_box p_r bg_fa pd_60 pt_120">
                            <div class="container-1300 sub2_2_1_cont05_container">
                                <div class="sub_click_btn open m_20" id="sub_click_btn1">
                                    <p class="sub_cont_title_text01 sortsmillgoudy fz_20 lh_16 ls_2 light">
                                        Scar Treatment
                                    </p>
                                    <p class="sub_cont_title_text02 fz_32 lh_16 ls_2 light">
                                        흉터 <span class="medium">치료 후 주의사항</span>
                                    </p>
                                </div>
                                <div class="sub2_2_1_cont05_text sub2_6_cont_ul_text open li_4 sub_click_box" id="sub_click_box1">
                                    <ul class="sub2_2_1_cont05_item_ul fz_17 normal ta_l">
                                        <li>
                                            <p>시술 후 일주일 동안 목욕탕, 사우나 등은 피해주세요.</p>
                                        </li>
                                        <li>
                                            <p>시술 부위를 너무 만지거나 과도한 얼굴 마사지 등은 삼가주세요.</p>
                                        </li>
                                        <li>
                                            <p>외출 시에는 SPF 30 이상의 자외선 차단제를 바르는 것이 좋습니다.</p>
                                        </li>
                                        <li>
                                            <p>시술 후 가급적 음주, 흡연은 삼가주세요.</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        -->
                        
                        <div class="sub_cont_box sub2_1_youtube_box pd_120">
                            <div class="container-sm flex_row fw jc_center al_fs">
                                <div class="sub_cont_title sub2_1_4_cont_title_center ta_c">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                                    <p class="sub_cont_title_text01 sortsmillgoudy fz_50 lh_14 ls_2 gs_reveal" data-gs-delay="200">
                                        Youtube
                                    </p>
                                    <p class="sub_cont_title_text02 fz_20 lh_16 ls_2 normal gs_reveal m_60" data-gs-delay="400">
                                        피부과 전문의가 직접 들려 주는 <br>
                                        <span class="fz_30 ls_2 lh_14 normal">흉터 치료</span>
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
                        </div>
                    </div>
                </div>

                <div class="sub_cont04 sub2_6_2_cont04 sub_tabcontent sub_tabcontent2" id="sub_tabcontent2">
                    <div class="sub_tabcontent02_wrap">
                        <div class="sub_cont_box sub2_1_1_cont1_1_box bg_fa pd_120">
                            <div class="sub_tabcontent_container flex_row fw sa center">
                                <div class="sub_cont_title sub2_5_2_cont_title_left title_left">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                                    <p class="sub_cont_title_text01 fz_32 lh_14 ls_2 light m_40">
                                        콜라겐 재생을 기반으로 한 <br>
                                        <span class="medium">피부 복원 튼살 치료</span>
                                    </p>
                                    <p class="pc_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 light">
                                        튼살은 피부에 나타나는 변화 중 하나로 임신, 급격한 체중 변화 등 <br>
                                        피부의 표면적이 변하거나 콜라겐 섬유가 파괴되어 나타나는피부 갈라짐입니다. <br>
                                        인천 오라클피부과는 피부를 잘 아는 피부과 전문의가 붉은색의 <br>
                                        초기 튼살부터 하얀색의 후기 튼살까지, 튼살의 상태에 맞춰 다양한 <br>
                                        레이저 장비를 콜라보레이션하여 탄력있고 매끈한 피부로 회복해드립니다.
                                    </p>
                                    <p class="m_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 light">
                                        튼살은 피부에 나타나는 변화 중 하나로 임신, 급격한 체중 변화 등 
                                        피부의 표면적이 변하거나 콜라겐 섬유가 파괴되어 나타나는피부 갈라짐입니다. 
                                        인천 오라클피부과는 피부를 잘 아는 피부과 전문의가 붉은색의 
                                        초기 튼살부터 하얀색의 후기 튼살까지, 튼살의 상태에 맞춰 다양한 
                                        레이저 장비를 콜라보레이션하여 탄력있고 매끈한 피부로 회복해드립니다.
                                    </p>
                                </div>
                                <div class="sub_cont_doct_img sub2_5_2_tabcontent01_img img_right ta_r">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_6_2_tabcontent01_img01.png" alt="">
                                </div>
                            </div>
                        </div>
                        
                        <!--  
                        <div class="sub_cont_box sub2_1_1_cont1_2_box pd_120">
                            <div class="sub_tabcontent_container flex_row fw jc_center al_fs">
                                <div class="sub_cont_title sub2_1_1_cont_title_center ta_c">
                                    <p class="sub_cont_title_text01 fz_22 lh_14 ls_2 normal gs_reveal" data-gs-delay="200">
                                        흉터
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
                        </div>
                        -->
                        
                        <div class="sub_cont_box sub2_1_1_cont_premium bg_fa pd_160">
                            <div class="sub_tabcontent_container flex_row fw jc_center al_fs">
                                <div class="sub_cont_title sub2_1_4_cont_title_center ta_c">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                                    <p class="sub_cont_title_text01 fz_30 lh_16 ls_2 light m_80 gs_reveal" data-gs-delay="200">
                                        튼살의 진행 단계, <span class="medium">상태를 고려한 <br>
                                        다각도 튼살 치료</span>
                                    </p>
                                </div>
                                <div class="sub2_6_2_cont03_box flex_row fw se al_fs">
                                    <div class="column_half">
                                        <div class="sub2_6_2_cont03_item sub2_6_2_cont03_item01 ta_c gs_reveal" data-gs-delay="200">
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_6_2_premium_item01.png" alt="">
                                            <p class="fz_25 ls_2 lh_16 normal m_20">
                                                오래된 흰색 튼살
                                            </p>
                                            <p class="pc_cont_434 fz_17 ls_2 lh_14 normal">
                                                패인 튼살 부위를 집중적으로 콜라겐 재생을 유도하여 <br>
                                                피부 탄력을 높이고, 레이저 토닝을 통해 흰색으로 <br>
                                                변한 피부 착색을 개선합니다.
                                            </p>
                                            <p class="m_cont_434 fz_17 ls_2 lh_14 normal">
                                                패인 튼살 부위를 집중적으로 콜라겐 재생을 유도하여 
                                                피부 탄력을 높이고, 레이저 토닝을 통해 흰색으로 
                                                변한 피부 착색을 개선합니다.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="column_half">
                                        <div class="sub2_6_2_cont03_item sub2_6_2_cont03_item02 ta_c gs_reveal" data-gs-delay="400">
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_6_2_premium_item02.png" alt="">
                                            <p class="fz_25 ls_2 lh_16 normal m_20">
                                                초기 붉은 튼살
                                            </p>
                                            <p class="pc_cont_434 fz_17 ls_2 lh_14 normal">
                                                점점 더 깊고 더 넓어지는 하얀색 탈색반 흉터를 <br>
                                                최소화 시키기 위해 다양한 레이저 장비를 통해 전체적인 <br>
                                                진피 및 콜라겐 재생을 유도하여 튼살을 개선합니다.
                                            </p>
                                            <p class="m_cont_434 fz_17 ls_2 lh_14 normal">
                                                점점 더 깊고 더 넓어지는 하얀색 탈색반 흉터를 
                                                최소화 시키기 위해 다양한 레이저 장비를 통해 전체적인 
                                                진피 및 콜라겐 재생을 유도하여 튼살을 개선합니다.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="sub_cont_box sub2_1_1_cont4_box">
                            <div class="sub2_1_1_cont4 flex_row fw jc_center center">
                                <div class="column_half">
                                    <div class="sub2_6_2_cont4_img">
                                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_6_2_cont4_img_left.jpg" alt="">
                                    </div>
                                </div>
                                <div class="column_half">
                                    <div class="flex_row fw fd_c jc_center center">
                                        <div class="sub2_6_2_cont04_text">
                                            <div class="sub_cont_title sub2_5_2_cont04_title_center ta_c">
                                                <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                                                <p class="sub_cont_title_text01 fz_22 lh_14 ls_2 light gs_reveal" data-gs-delay="200">
                                                    튼살은 <span class="medium">초기에 치료 할 수록</span> 효과가 <br>
                                                    좋기 때문에 <span class="medium">피부과 전문의</span>에게 빠른 처지를 <br>
                                                    받는 것이 중요합니다
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="sub_cont_box sub2_1_4_cont_box pd_60">
                            <div class="sub2_1_4_cont3_bg">
                                <div class="sub_cont_title sub2_1_4_cont_title_center p_r ta_c pt_100">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                                    <p class="sub_cont_top_title_text01 fz_30 lh_14 ls_2 light gs_reveal" data-gs-delay="200">
                                        오라클만의 <span class="medium">튼살치료 특별함</span>
                                    </p>
                                </div>
                                <div class="sub_tabcontent_container flex_row fw sa center">
                                    <div class="sub_cont_doct_img sub2_6_1_tabcontent05_img img_left p_r ta_c">
                                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_6_1_tabcontent05_img01.png" alt="">
                                        
                                        <div class="sub2_5_1_cont05_img_txt ta_r">
                                            <p class="fz_14 ls_2 lh_14">* 구월점 한정</p>
                                        </div>
                                    </div>
                                    <div class="sub_cont_title sub2_5_1_tabcontent04_title_right title_right">
                                        <p class="sub_cont_title_text01 sortsmillgoudy fz_20 lh_14 ls_2 light gs_reveal" data-gs-delay="200">
                                            Oracle Point.01
                                        </p>
                                        <p class="sub_cont_title_text02 fz_32 lh_14 ls_2 light m_40 gs_reveal" data-gs-delay="400">
                                            민감한 부위의 튼살도 편안하게, <br>
                                            <span class="medium">프라이빗 튼살 치료</span>
                                        </p>
                                        <ul class="sub2_5_1_cont04_item_ul fz_17 normal ta_l m_30 gs_reveal" data-gs-delay="600">
                                            <li>
                                                <p class="sub2_5_1_ul_p">남/여 의료진 성별 선택 가능</p>
                                            </li>
                                            <li>
                                                <p class="sub2_5_1_ul_p">프라이빗 룸 흉터 치료 가능</p>
                                            </li>
                                        </ul>
                                        <p class="pc_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 normal gs_reveal" data-gs-delay="800">
                                            인천 오라클피부과는 민감한 부위의 흉터도 편안하게 시술 받아보실 수 <br>
                                            있도록 완벽하게 분리된 프라이빗 룸에서 1:1로 레이저 시술을 진행합니다.
                                        </p>
                                        <p class="m_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 normal gs_reveal" data-gs-delay="800">
                                            인천 오라클피부과는 민감한 부위의 흉터도 편안하게 시술 받아보실 수 
                                            있도록 완벽하게 분리된 프라이빗 룸에서 1:1로 레이저 시술을 진행합니다.
                                        </p>
                                    </div>
                                </div>

                                <div class="sub_tabcontent_container_full flex_row fw jc_fs al_fs">
                                    <div class="sub_cont_title title_left">
                                        <p class="sub_cont_title_text01 sortsmillgoudy fz_20 lh_14 ls_2 light gs_reveal" data-gs-delay="200">
                                            Oracle Point
                                        </p>
                                        <p class="sub_cont_title_text02 fz_32 lh_14 ls_2 light m_40 gs_reveal" data-gs-delay="400">
                                            흉터 <span class="medium">레이저 프로그램</span>
                                        </p>
                                    </div>
                                    <div class="swiper-container sub2_1_4_cont5_slider">
                                        <div class="swiper-wrapper">
                                            
                                            <?php 
                                                include(G5_PATH.'/theme/oracle/include/equip_laser.php');
                                            ?>
                                            
                                        </div>
                                        <div class="swiper-scrollbar"></div>
                                    </div>
                                    
                                    <?php 
                                        include(G5_PATH.'/theme/oracle/include/equip_laser_content.php');
                                    ?>
                                    
                                </div>
                            </div>
                        </div>
                        
                        <!-- 
                        <div class="sub_cont_box sub2_2_1_cont04_box p_r bg_fa pd_60 pt_120">
                            <div class="container-1300 sub2_2_1_cont05_container">
                                <div class="sub_click_btn open m_20" id="sub_click_btn2">
                                    <p class="sub_cont_title_text01 sortsmillgoudy fz_20 lh_16 ls_2 light">
                                        Stretch Treatment
                                    </p>
                                    <p class="sub_cont_title_text02 fz_32 lh_16 ls_2 light">
                                        튼살 <span class="medium">치료 후 주의사항</span>
                                    </p>
                                </div>
                                <div class="sub2_2_1_cont05_text sub2_6_cont_ul_text open li_2 sub_click_box" id="sub_click_box2">
                                    <ul class="sub2_2_1_cont05_item_ul fz_17 normal ta_l">
                                        <li>
                                            <p>시술 후 치료 당일에는 땀 흘리는 운동이나 샤워를 자제해주세요.</p>
                                        </li>
                                        <li>
                                            <p>너무 꽉 조이는 옷은 치료 후 당분간 입지 않는 것이 효과적입니다.</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        -->
                        <!--
                        <div class="sub_cont_box sub2_1_youtube_box pd_120">
                            <div class="container-sm flex_row fw jc_center al_fs">
                                <div class="sub_cont_title sub2_1_4_cont_title_center ta_c">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                                    <p class="sub_cont_title_text01 sortsmillgoudy fz_50 lh_14 ls_2 gs_reveal" data-gs-delay="200">
                                        Youtube
                                    </p>
                                    <p class="sub_cont_title_text02 fz_20 lh_16 ls_2 normal gs_reveal m_60" data-gs-delay="400">
                                        피부과 전문의가 직접 들려 주는 <br>
                                        <span class="fz_30 ls_2 lh_14 normal">흉터 치료</span>
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
                        </div>
                        -->
                    </div>
                </div>
            </article>
        </section>
        
    </main>
    <!-- //main -->
    
<?php
include_once(G5_PATH.'/tail.php');
?>


<script>
    function opensubtab(evt, tabName) {
        var i, tabcontent2, tablinks2;
        tabcontent2 = document.getElementsByClassName("sub_tabcontent");
        for (i = 0; i < tabcontent2.length; i++) {
          tabcontent2[i].style.display = "none";
        }
        tablinks2 = document.getElementsByClassName("sub_tablinks");
        for (i = 0; i < tablinks2.length; i++) {
          tablinks2[i].className = tablinks2[i].className.replace(" active", "");
        }
        document.getElementById(tabName).style.display = "block";
        evt.currentTarget.className += " active";
        
        ScrollTrigger.refresh();
    }
    
    //<!-- Javascript를 이용해서 다음 페이지에 파라미터 넘기기 위한 방법 -->
    window.onload = function(){
        var val = location.href.substr(
            location.href.lastIndexOf('=') + 1
        );
        //console.log('val : ' + val);
        if(val == 1){
            opensubtab(event, 'sub_tabcontent1');
            $('#sub_tablinks01').addClass('active');
        } else if(val == 2){
            opensubtab(event, 'sub_tabcontent2');
            $('#sub_tablinks02').addClass('active');
        }
    }
    //<!-- //Javascript를 이용해서 다음 페이지에 파라미터 넘기기 위한 방법 -->
</script>