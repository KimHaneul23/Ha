<?php
include_once('./_common.php');
//if (G5_IS_MOBILE) {
//    include_once(G5_MOBILE_PATH.'/index.php');
//    return;
//}

// 웹사이트 타이틀
$g5['title'] = '안티에이징';

include_once(G5_PATH.'/head.php');
?>
    <script>
        $(document).ready(function(){
            var window_width = $(window).width();
            if (window_width <= 480) {
                $('.main-header').addClass('color_change');
                $('.ht-inner').addClass('sub_header');
            } else {
                $('.main-header').addClass('color_change');
                $('.ht-inner').addClass('sub_header');
            }
        });
    </script>
    
    <main id="content">
        <article class="sub_content01" id="startContent">
            <div class="sub_top_view sub2_3_top_view">
                <div class="sub_top_view_bg sub2_3_top_view_bg"></div>
                <div class="sub_top_view_text_wrap sub2_3_top_view_text_wrap ta_c">
                    <div class="sub_top_view_text01 sub2_3_top_view_text01">
                        <p class="sortsmillgoudy fz_30 lh_14 ls_2 sub_text_ani">
                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub_top_view_text_icon.png" alt="">
                            Anti aging Program
                        </p>
                    </div>
                    <div class="sub_top_view_text02 sub2_3_top_view_text02 m_20">
                        <p class="fz_40 lh_14 ls_2 medium sub_text_ani">
                            안티에이징
                        </p>
                    </div>
                    <div class="sub_top_view_text03 sub2_3_top_view_text03">
                        <p class="fz_16 lh_14 ls_2 normal sub_text_ani">
                            개인별 맞춤 디자인으로 피부 코어 탄력부터
                        </p>
                    </div>
                    <div class="sub_top_view_text04 sub2_3_top_view_text04">
                        <p class="fz_16 lh_14 ls_2 normal sub_text_ani">
                            세련된 얼굴 라인까지 바로잡는 궁극의 안티에이징
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
        
        <section class="sub_tab_cont sub2_3_tab_cont bg_fa pt_60">
            <article class="sub_cont02 sub2_3_cont02">
                <div class="sub_tab">
                    <ul class="sub_tab_ul flex_row fw jc_center center">
                        <li id="sub_tablinks01" class="sub_tab_li sub_tab_li_2_3 sub_tablinks active" onclick="opensubtab(event, 'sub_tabcontent1')">
                            <a href="javascript:void(0);">
                                <p class="fz_16 ta_c">보톡스</p>
                            </a>
                        </li>
                        <li id="sub_tablinks02" class="sub_tab_li sub_tab_li_2_3 sub_tablinks" onclick="opensubtab(event, 'sub_tabcontent2')">
                            <a href="javascript:void(0);">
                                <p class="fz_16 ta_c">필러</p>
                            </a>
                        </li>
                        <li id="sub_tablinks03" class="sub_tab_li sub_tab_li_2_3 sub_tablinks" onclick="opensubtab(event, 'sub_tabcontent3')">
                            <a href="javascript:void(0);">
                                <p class="fz_16 ta_c">수세럼주사</p>
                            </a>
                        </li>
                        <li id="sub_tablinks04" class="sub_tab_li sub_tab_li_2_3 sub_tablinks" onclick="opensubtab(event, 'sub_tabcontent4')">
                            <a href="javascript:void(0);">
                                <p class="fz_16 ta_c">써마지FLX</p>
                            </a>
                        </li>
                        <li id="sub_tablinks05" class="sub_tab_li sub_tab_li_2_3 sub_tablinks" onclick="opensubtab(event, 'sub_tabcontent5')">
                            <a href="javascript:void(0);">
                                <p class="fz_16 ta_c">인모드</p>
                            </a>
                        </li>
                        <li id="sub_tablinks06" class="sub_tab_li sub_tab_li_2_3 sub_tablinks" onclick="opensubtab(event, 'sub_tabcontent6')">
                            <a href="javascript:void(0);">
                                <p class="fz_16 ta_c">텐쎄라</p>
                            </a>
                        </li>
                        <li id="sub_tablinks07" class="sub_tab_li sub_tab_li_2_3 sub_tablinks" onclick="opensubtab(event, 'sub_tabcontent7')">
                            <a href="javascript:void(0);">
                                <p class="fz_16 ta_c">실리프팅</p>
                            </a>
                        </li>
                        <li id="sub_tablinks08" class="sub_tab_li sub_tab_li_2_3 sub_tablinks" onclick="opensubtab(event, 'sub_tabcontent8')">
                            <a href="javascript:void(0);">
                                <p class="fz_16 ta_c">디자인리프팅</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </article>
            
            <article class="sub_tabcontent_wrap sub2_1_1_tabcontent_wrap">
                <div class="sub_cont03 sub2_1_1_cont03 sub_tabcontent sub_tabcontent1" id="sub_tabcontent1">
                    <div class="sub_tabcontent01_wrap">
                        <div class="sub_cont_box sub2_1_1_cont1_1_box bg_fa pd_120">
                            <div class="sub_tabcontent_container sub2_3_1_tabcontent_container flex_row fw sa center">
                                <div class="sub_cont_title sub2_3_1_cont_title_left title_left">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                                    <p class="sub_cont_title_text01 fz_32 lh_14 ls_2 light m_40">
                                        <span class="medium">주름, 윤곽, 피부탄력</span> <br>
                                        세 마리 토끼를 함께 잡는 보톡스
                                    </p>
                                    <p class="pc_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 light m_20">
                                        피부의 주름과 과한 근육을 잠재우는 보톡스는 깊은 주름부터 <br>
                                        얼굴 윤곽, 피부 탄력을 함께 개선합니다.
                                    </p>
                                    <p class="m_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 light m_20">
                                        피부의 주름과 과한 근육을 잠재우는 보톡스는 깊은 주름부터 
                                        얼굴 윤곽, 피부 탄력을 함께 개선합니다.
                                    </p>
                                    <p class="pc_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light">
                                        인천 오라클피부과는 피부과 전문의의 1:1 맞춤 디자인 과정을 거친 후 <br>
                                        보톡스를 진행하여 인위적인 아름다움이 아닌, 내 얼굴에 맞는 자연스러운 <br>
                                        아름다움을 회복합니다.
                                    </p>
                                    <p class="m_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light">
                                        인천 오라클피부과는 피부과 전문의의 1:1 맞춤 디자인 과정을 거친 후 
                                        보톡스를 진행하여 인위적인 아름다움이 아닌, 내 얼굴에 맞는 자연스러운 
                                        아름다움을 회복합니다.
                                    </p>
                                </div>
                                <div class="sub_cont_doct_img sub2_3_1_tabcontent01_img img_right ta_r">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_3_1_tabcontent01_img01.png" alt="">
                                </div>
                            </div>
                        </div>
                        
                        <div class="sub_cont_box sub2_1_1_cont1_2_box pd_120">
                            <div class="sub_tabcontent_container flex_row fw jc_center al_fs">
                                <div class="sub_cont_title sub2_1_1_cont_title_center ta_c">
                                    <p class="sub_cont_title_text01 fz_22 lh_14 ls_2 normal gs_reveal" data-gs-delay="200">
                                        안티에이징
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
                                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_3_1_ba_slide_img01_b.jpg" alt="">
                                                        </div>
                                                        <div class="sub2_1_1_ba_slide_img_a <?=($is_member ? '':'blur')?>">
                                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_3_1_ba_slide_img01_a.jpg" alt="">
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
                                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_3_1_ba_slide_img02_b.jpg" alt="">
                                                        </div>
                                                        <div class="sub2_1_1_ba_slide_img_a <?=($is_member ? '':'blur')?>">
                                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_3_1_ba_slide_img02_a.jpg" alt="">
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
                        
                        <div class="sub_cont_box sub2_1_4_cont_box pd_60">
                            <div class="sub2_1_4_cont3_bg">
                                <div class="sub_cont_title sub2_1_4_cont_title_center p_r ta_c pt_100">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                                    <p class="sub_cont_top_title_text01 fz_30 lh_14 ls_2 light gs_reveal" data-gs-delay="200">
                                        오라클만의 <span class="medium">안티에이징 특별함</span>
                                    </p>
                                </div>
                                <div class="sub_tabcontent_container flex_row fw sa center">
                                    <div class="sub_cont_doct_img sub2_3_1_tabcontent01_img img_left p_r ta_r">
                                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_3_1_tabcontent03_img01.png" alt="">
                                    </div>
                                    <div class="sub_cont_title sub2_3_1_cont_title_right title_right">
                                        <p class="sub_cont_title_text01 sortsmillgoudy fz_20 lh_14 ls_2 light gs_reveal" data-gs-delay="200">
                                            Oracle Point.01
                                        </p>
                                        <p class="sub_cont_title_text02 fz_32 lh_14 ls_2 light m_40 gs_reveal" data-gs-delay="400">
                                            피부 전층에 대한 이해도가 높은 <br>
                                            <span class="medium">피부과 전문의의 1:1 보톡스 디자인</span>
                                        </p>
                                        <p class="pc_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light gs_reveal m_20" data-gs-delay="600">
                                            보톡스 시술은 개인별 피부 근육에 대해 완벽히 이해해야 정확한 시술이 <br>
                                            가능합니다. 단순히 매뉴얼대로 시술할 경우 표정이 어색해지는 등의 <br>
                                            부작용을 남길 수 있습니다.
                                        </p>
                                        <p class="m_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light gs_reveal m_20" data-gs-delay="600">
                                            보톡스 시술은 개인별 피부 근육에 대해 완벽히 이해해야 정확한 시술이 
                                            가능합니다. 단순히 매뉴얼대로 시술할 경우 표정이 어색해지는 등의 
                                            부작용을 남길 수 있습니다.
                                        </p>
                                        <p class="pc_cont_434 sub_cont_title_text04 fz_16 lh_16 ls_2 light gs_reveal" data-gs-delay="800">
                                            인천 오라클피부과는 개인마다 다른 얼굴형, 근육의 크기와 움직임, <br>
                                            피부 상태를  피부과 전문의가 1:1로 진단 후 디자인하여 정확하게 시술합니다.
                                        </p>
                                        <p class="m_cont_434 sub_cont_title_text04 fz_16 lh_16 ls_2 light gs_reveal" data-gs-delay="800">
                                            인천 오라클피부과는 개인마다 다른 얼굴형, 근육의 크기와 움직임, 
                                            피부 상태를  피부과 전문의가 1:1로 진단 후 디자인하여 정확하게 시술합니다.
                                        </p>
                                    </div>
                                </div>

                                <div class="sub_tabcontent_container flex_row fw jc_center al_fs">
                                    <div class="sub_cont_title sub2_1_4_cont_title_center ta_c">
                                        <p class="sub_cont_title_text01 sortsmillgoudy fz_20 lh_14 ls_2 light gs_reveal" data-gs-delay="200">
                                            Oracle Point.02
                                        </p>
                                        <p class="sub_cont_title_text02 fz_32 lh_14 ls_2 light m_40 gs_reveal" data-gs-delay="400">
                                            필요에 따라 맞는 <br>
                                            <span class="medium">보톡스 부위</span>
                                        </p>
                                        <p class="sub_cont_title_text03 fz_17 lh_14 ls_2 light m_80 gs_reveal" data-gs-delay="600">
                                            근육의 작용 혹은 신경 전달물질의 분비를 억제하여 <br>
                                            주름을 방지하고 두꺼운 근육, 땀 분비를 줄입니다.
                                        </p>
                                    </div>
                                    <div class="sub2_3_1_cont05_box flex_row fw se al_fs">
                                        <div class="column_quarter">
                                            <div class="sub2_3_1_cont4_item sub2_3_1_cont4_item01 flex_row fw jc_center center">
                                                <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_3_1_cont04_item01.png" alt="">
                                                
                                                <div class="sub2_3_1_cont05_item_text ta_c">
                                                    <p class="sub2_3_1_cont05_item_text01 fz_24 ls_2 lh_16 medium">
                                                        주름 보톡스
                                                    </p>
                                                    <ul class="sub2_3_1_cont05_item_text_ul fz_16 ls_2 lh_12 light">
                                                        <li>이마</li>
                                                        <li>미간</li>
                                                        <li>입가</li>
                                                        <li>목주름</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="column_quarter">
                                            <div class="sub2_3_1_cont4_item sub2_3_1_cont4_item02 flex_row fw jc_center center">
                                                <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_3_1_cont04_item02.png" alt="">
                                                
                                                <div class="sub2_3_1_cont05_item_text ta_c">
                                                    <p class="sub2_3_1_cont05_item_text01 fz_24 ls_2 lh_16 medium">
                                                        윤곽 보톡스
                                                    </p>
                                                    <ul class="sub2_3_1_cont05_item_text_ul fz_16 ls_2 lh_12 light">
                                                        <li>사각턱</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="column_quarter">
                                            <div class="sub2_3_1_cont4_item sub2_3_1_cont4_item03 flex_row fw jc_center center">
                                                <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_3_1_cont04_item03.png" alt="">
                                                
                                                <div class="sub2_3_1_cont05_item_text ta_c">
                                                    <p class="sub2_3_1_cont05_item_text01 fz_24 ls_2 lh_16 medium">
                                                        체형 보톡스
                                                    </p>
                                                    <ul class="sub2_3_1_cont05_item_text_ul fz_16 ls_2 lh_12 light">
                                                        <li>종아리</li>
                                                        <li>허벅지</li>
                                                        <li>승모근</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="column_quarter">
                                            <div class="sub2_3_1_cont4_item sub2_3_1_cont4_item03 flex_row fw jc_center center">
                                                <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_3_1_cont04_item04.png" alt="">
                                                
                                                <div class="sub2_3_1_cont05_item_text ta_c">
                                                    <p class="sub2_3_1_cont05_item_text01 fz_24 ls_2 lh_16 medium">
                                                        다한증 보톡스
                                                    </p>
                                                    <ul class="sub2_3_1_cont05_item_text_ul fz_16 ls_2 lh_12 light">
                                                        <li>손/발 다한증</li>
                                                        <li>겨드랑이 다한증</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="sub_tabcontent_container sub2_1_cont03_container flex_row fw sa center">
                                    <div class="sub_cont_title sub2_3_1_tabcontent04_title_left title_left">
                                        <p class="sub_cont_title_text01 sortsmillgoudy fz_20 lh_14 ls_2 light gs_reveal" data-gs-delay="200">
                                            Oracle Point.03
                                        </p>
                                        <p class="sub_cont_title_text02 fz_32 lh_14 ls_2 light m_40 gs_reveal" data-gs-delay="400">
                                            주름의 원인을 해소하여 <br>
                                            <span class="medium">주름 재발을 방지하는 보톡스</span>
                                        </p>
                                        <p class="pc_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light m_20 gs_reveal" data-gs-delay="600">
                                            근육의 움직임이 지속될수록 주름은 더욱 깊어집니다. <br>
                                            인천 오라클피부과의 보톡스는 주름 부위를 넘어, 주름을 유발하는 <br>
                                            원인 근육을 정확히 진단 후 주입 포인트를 잡아 주름이 더 깊어지거나 <br>
                                            생기지 않도록 예방합니다.
                                        </p>
                                        <p class="m_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light m_20 gs_reveal" data-gs-delay="600">
                                            근육의 움직임이 지속될수록 주름은 더욱 깊어집니다. 
                                            인천 오라클피부과의 보톡스는 주름 부위를 넘어, 주름을 유발하는 
                                            원인 근육을 정확히 진단 후 주입 포인트를 잡아 주름이 더 깊어지거나 
                                            생기지 않도록 예방합니다.
                                        </p>
                                        <p class="pc_cont_434 sub_cont_title_text04 fz_16 lh_16 ls_2 light gs_reveal" data-gs-delay="800">
                                            시술 후 피부과 전문의가 시술 주기를 적절하게 결정하여 내성이나 <br>
                                            부작용을 방지하고, 치료 효과를 극대화합니다.
                                        </p>
                                        <p class="m_cont_434 sub_cont_title_text04 fz_16 lh_16 ls_2 light m_100 gs_reveal" data-gs-delay="800">
                                            시술 후 피부과 전문의가 시술 주기를 적절하게 결정하여 내성이나 
                                            부작용을 방지하고, 치료 효과를 극대화합니다.
                                        </p>
                                    </div>
                                    <div class="sub_cont_doct_img sub2_3_1_tabcontent04_img img_right p_r ta_c">
                                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_3_1_tabcontent06_img01.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- 
                        <div class="sub_cont_box sub2_2_1_cont04_box p_r bg_fa pd_60">
                            <div class="container-1300 sub2_2_1_cont05_container">
                                <div class="sub_click_btn open m_20" id="sub_click_btn1">
                                    <p class="sub_cont_title_text01 sortsmillgoudy fz_20 lh_16 ls_2 light">
                                        Botox
                                    </p>
                                    <p class="sub_cont_title_text02 fz_32 lh_16 ls_2 light">
                                        <span class="medium">보톡스 시술 후 주의사항</span>
                                    </p>
                                </div>
                                <div class="sub2_2_1_cont05_text open li_4 sub_click_box" id="sub_click_box1">
                                    <ul class="sub2_2_1_cont05_item_ul fz_17 normal ta_l">
                                        <li>
                                            <p>보톡스 시술 후 주사 부위를 과도하게 만지는 것은 삼가주세요.</p>
                                        </li>
                                        <li>
                                            <p>주사 후 2~3 시간 정도 눕는 것을 삼가주세요.</p>
                                        </li>
                                        <li>
                                            <p>사각턱 보톡스 시술 시 딱딱한 음식, 질긴 음식은 삼가주세요.</p>
                                        </li>
                                        <li>
                                            <p>시술 당일에는 가볍게 세안해 주세요.</p>
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
                                        <span class="fz_30 ls_2 lh_14 normal">안티에이징</span>
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

                <div class="sub_cont04 sub2_1_2_cont04 sub_tabcontent sub_tabcontent2" id="sub_tabcontent2">
                    <div class="sub_tabcontent02_wrap">
                        <div class="sub_cont_box sub2_1_1_cont1_1_box bg_fa pd_120">
                            <div class="sub_tabcontent_container flex_row fw sa center">
                                <div class="sub_cont_title sub2_3_1_cont_title_left title_left">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                                    <p class="sub_cont_title_text01 fz_32 lh_14 ls_2 light m_40">
                                        꺼짐, 굴곡, 주름을 채우는 <br>
                                        <span class="medium">피부과 전문의 필러</span>
                                    </p>
                                    <p class="pc_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 light m_20">
                                        꺼지고, 굴곡지고, 깊게 주름진 부위를 깊은 곳부터 <br>
                                        고르게 채워 매끈하고 볼륨감 있는 얼굴을 완성합니다.
                                    </p>
                                    <p class="m_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 light m_20">
                                        꺼지고, 굴곡지고, 깊게 주름진 부위를 깊은 곳부터 
                                        고르게 채워 매끈하고 볼륨감 있는 얼굴을 완성합니다.
                                    </p>
                                    <p class="pc_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light">
                                        인천 오라클피부과의 필러는 피부와 근육, 뼈의 구조를 잘 이해하는 <br>
                                        피부과 전문의가 뼈와 피부 사이 정확한 위치에 균일하게 필러를 <br>
                                        주입하여 안전하고 자연스럽게 세련된 볼륨감을 선사합니다.
                                    </p>
                                    <p class="m_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light">
                                        인천 오라클피부과의 필러는 피부와 근육, 뼈의 구조를 잘 이해하는 
                                        피부과 전문의가 뼈와 피부 사이 정확한 위치에 균일하게 필러를 
                                        주입하여 안전하고 자연스럽게 세련된 볼륨감을 선사합니다.
                                    </p>
                                </div>
                                <div class="sub_cont_doct_img sub2_1_1_tabcontent01_img img_right ta_r">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_3_2_tabcontent01_img01.png" alt="">
                                </div>
                            </div>
                        </div>
                        
                        <div class="sub_cont_box sub2_1_1_cont1_2_box pd_120">
                            <div class="sub_tabcontent_container flex_row fw jc_center al_fs">
                                <div class="sub_cont_title sub2_1_1_cont_title_center ta_c">
                                    <p class="sub_cont_title_text01 fz_22 lh_14 ls_2 normal gs_reveal" data-gs-delay="200">
                                        안티에이징
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
                                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_3_2_ba_slide_img01_b.jpg" alt="">
                                                        </div>
                                                        <div class="sub2_1_1_ba_slide_img_a <?=($is_member ? '':'blur')?>">
                                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_3_2_ba_slide_img01_a.jpg" alt="">
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
                                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_3_2_ba_slide_img02_b.jpg" alt="">
                                                        </div>
                                                        <div class="sub2_1_1_ba_slide_img_a <?=($is_member ? '':'blur')?>">
                                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_3_2_ba_slide_img02_a.jpg" alt="">
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
                                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_3_2_ba_slide_img03_b.jpg" alt="">
                                                        </div>
                                                        <div class="sub2_1_1_ba_slide_img_a <?=($is_member ? '':'blur')?>">
                                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_3_2_ba_slide_img03_a.jpg" alt="">
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
                                                    <div class="sub2_1_1_ba_slide_img sub2_1_1_ba_slide_img04 flex_row sb al_fs">
                                                        <div class="sub2_1_1_ba_slide_img_b">
                                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_3_2_ba_slide_img04_b.jpg" alt="">
                                                        </div>
                                                        <div class="sub2_1_1_ba_slide_img_a <?=($is_member ? '':'blur')?>">
                                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_3_2_ba_slide_img04_a.jpg" alt="">
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
                                                    <div class="sub2_1_1_ba_slide_img sub2_1_1_ba_slide_img05 flex_row sb al_fs">
                                                        <div class="sub2_1_1_ba_slide_img_b">
                                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_3_2_ba_slide_img05_b.jpg" alt="">
                                                        </div>
                                                        <div class="sub2_1_1_ba_slide_img_a <?=($is_member ? '':'blur')?>">
                                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_3_2_ba_slide_img05_a.jpg" alt="">
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
                        
                        <div class="sub_cont_box sub2_1_4_cont_box pd_60">
                            <div class="sub2_1_4_cont3_bg">
                                <div class="sub_cont_title sub2_1_4_cont_title_center p_r ta_c pt_100">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                                    <p class="sub_cont_top_title_text01 fz_30 lh_14 ls_2 light gs_reveal" data-gs-delay="200">
                                        고민별 <span class="medium">필러 시술 프로그램</span>
                                    </p>
                                </div>
                                <div class="sub_tabcontent_container flex_row fw sa center">
                                    <div class="sub_cont_doct_img sub2_3_2_tabcontent01_img img_left p_r ta_r">
                                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_3_2_tabcontent03_img01.png" alt="">
                                    </div>
                                    <div class="sub_cont_title sub2_3_2_cont_title_right title_right">
                                        <p class="sub_cont_title_text01 sortsmillgoudy fz_20 lh_14 ls_2 light gs_reveal" data-gs-delay="200">
                                            Oracle Point.01
                                        </p>
                                        <p class="sub_cont_title_text02 fz_32 lh_14 ls_2 light m_40 gs_reveal" data-gs-delay="400">
                                            타고난 것처럼 자연스러운 볼륨감, <br>
                                            <span class="medium">볼륨 교정 필러</span>
                                        </p>
                                        <p class="pc_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light gs_reveal m_20" data-gs-delay="600">
                                            줄어든 얼굴 지방으로 그늘진 얼굴은 더욱 나이들어 보이게 합니다. <br>
                                            인천 오라클피부과의 필러는 다년간의 필러시술을 통해 쌓아온 <br>
                                            볼륨 업 노하우를 바탕으로 꺼진 지방층에 필러를 주입해 <br>
                                            깊은 곳에서부터 자연스럽게 차오르는 입체감과 안티에이징 효과를 선사합니다.
                                        </p>
                                        <p class="m_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light gs_reveal m_20" data-gs-delay="600">
                                            줄어든 얼굴 지방으로 그늘진 얼굴은 더욱 나이들어 보이게 합니다. 
                                            인천 오라클피부과의 필러는 다년간의 필러시술을 통해 쌓아온 
                                            볼륨 업 노하우를 바탕으로 꺼진 지방층에 필러를 주입해 
                                            깊은 곳에서부터 자연스럽게 차오르는 입체감과 안티에이징 효과를 선사합니다.
                                        </p>
                                        <p class="sub_cont_title_text04 tag_text fz_16 lh_16 ls_2 normal gs_reveal" data-gs-delay="800">
                                            #앞광대 필러&ensp;&ensp;#볼필러&ensp;&ensp;#이마 필러&ensp;&ensp;#팔자 필러&ensp;&ensp;#가슴 필러
                                        </p>
                                    </div>
                                </div>

                                <div class="sub_tabcontent_container sub2_1_cont03_container flex_row fw sa center">
                                    <div class="sub_cont_title sub2_3_2_tabcontent04_title_left title_left">
                                        <p class="sub_cont_title_text01 sortsmillgoudy fz_20 lh_14 ls_2 light gs_reveal" data-gs-delay="200">
                                            Oracle Point.02
                                        </p>
                                        <p class="sub_cont_title_text02 fz_32 lh_14 ls_2 light m_40 gs_reveal" data-gs-delay="400">
                                            피부 깊은 곳에서부터 차오르는 콜라겐, <br>
                                            <span class="medium">주름 교정 필러</span>
                                        </p>
                                        <p class="pc_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light gs_reveal m_20" data-gs-delay="600">
                                            콜라겐이 소실로 주름이 깊어진 자리에 필러를 채워 넣으면 <br>
                                            새로운 콜라겐이 생성되면서 주름과 피부 탄력이 개선됩니다. <br>
                                            인천 오라클피부과는 피부과 전문의의 숙련된 기술과 경험 노하우를 <br>
                                            바탕으로 피부 깊은 곳부터 매끈하게 채워 주름을 근본적으로 개선하고 <br>
                                            탄력 있는 피부를 완성합니다.
                                        </p>
                                        <p class="m_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light gs_reveal m_20" data-gs-delay="600">
                                            콜라겐이 소실로 주름이 깊어진 자리에 필러를 채워 넣으면 
                                            새로운 콜라겐이 생성되면서 주름과 피부 탄력이 개선됩니다. 
                                            인천 오라클피부과는 피부과 전문의의 숙련된 기술과 경험 노하우를 
                                            바탕으로 피부 깊은 곳부터 매끈하게 채워 주름을 근본적으로 개선하고 
                                            탄력 있는 피부를 완성합니다.
                                        </p>
                                        <p class="sub_cont_title_text04 tag_text fz_16 lh_16 ls_2 normal gs_reveal" data-gs-delay="800">
                                            #이마주름 필러&ensp;&ensp;#눈가 필러&ensp;&ensp;#미간 필러&ensp;&ensp;#목주름 필러&ensp;&ensp;#손등 필러
                                        </p>
                                    </div>
                                    <div class="sub_cont_doct_img sub2_3_2_tabcontent04_img img_right p_r ta_c">
                                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_3_2_tabcontent04_img01.png" alt="">
                                    </div>
                                </div>
                                
                                <div class="sub_tabcontent_container flex_row fw sa center">
                                    <div class="sub_cont_doct_img sub2_3_2_tabcontent01_img img_left p_r ta_r">
                                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_3_2_tabcontent05_img01.png" alt="">
                                    </div>
                                    <div class="sub_cont_title sub2_3_2_cont_title_right title_right">
                                        <p class="sub_cont_title_text01 sortsmillgoudy fz_20 lh_14 ls_2 light gs_reveal" data-gs-delay="200">
                                            Oracle Point.03
                                        </p>
                                        <p class="sub_cont_title_text02 fz_32 lh_14 ls_2 light m_40 gs_reveal" data-gs-delay="400">
                                            전체적인 밸런스를 고려한 <br>
                                            <span class="medium">필러 시술</span>
                                        </p>
                                        <p class="pc_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light gs_reveal m_20" data-gs-delay="600">
                                            타고난 얼굴 비율과 이목구비를 고려하지 않고 <br>
                                            단순히 볼륨감을 늘리는 필러 시술은 부자연스러운 볼륨은 물론, <br>
                                            울퉁불퉁한 결과를 낳을 수 있습니다.
                                        </p>
                                        <p class="m_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light gs_reveal m_20" data-gs-delay="600">
                                            타고난 얼굴 비율과 이목구비를 고려하지 않고 
                                            단순히 볼륨감을 늘리는 필러 시술은 부자연스러운 볼륨은 물론, 
                                            울퉁불퉁한 결과를 낳을 수 있습니다.
                                        </p>
                                        <p class="pc_cont_434 sub_cont_title_text04 fz_16 lh_16 ls_2 light gs_reveal" data-gs-delay="800">
                                            인천 오라클피부과는 전체적인 밸런스를 고려한 디자인을 기반으로 <br>
                                            필러를 주입하여 꺼짐, 뭉침, 굴곡, 주름을 자연스럽게 개선하고, <br>
                                            본연의 아름다움을 되살립니다.
                                        </p>
                                        <p class="m_cont_434 sub_cont_title_text04 fz_16 lh_16 ls_2 light gs_reveal" data-gs-delay="800">
                                            인천 오라클피부과는 전체적인 밸런스를 고려한 디자인을 기반으로 
                                            필러를 주입하여 꺼짐, 뭉침, 굴곡, 주름을 자연스럽게 개선하고, 
                                            본연의 아름다움을 되살립니다.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- 
                        <div class="sub_cont_box sub2_2_1_cont04_box p_r bg_fa pd_60">
                            <div class="container-1300 sub2_2_1_cont05_container">
                                <div class="sub_click_btn open m_20" id="sub_click_btn2">
                                    <p class="sub_cont_title_text01 sortsmillgoudy fz_20 lh_16 ls_2 light">
                                        Filler
                                    </p>
                                    <p class="sub_cont_title_text02 fz_32 lh_16 ls_2 light">
                                        <span class="medium">필러 시술 후  주의사항</span>
                                    </p>
                                </div>
                                <div class="sub2_2_1_cont05_text open li_4 sub_click_box" id="sub_click_box2">
                                    <ul class="sub2_2_1_cont05_item_ul fz_17 normal ta_l">
                                        <li>
                                            <p>시술 다음 날부터 가벼운 세안과 화장, 샤워가 가능합니다.</p>
                                        </li>
                                        <li>
                                            <p>시술 후 1주일 동안 땀이 나는 운동이나 음주는 삼가주세요.</p>
                                        </li>
                                        <li>
                                            <p>코 필러 시술 후 1-2주 동안 안경은 착용하지 않습니다.</p>
                                        </li>
                                        <li>
                                            <p>외출  시에는 SPF 30 이상의 자외선 차단제를 바르는 것이 좋습니다.</p>
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
                                        <span class="fz_30 ls_2 lh_14 normal">안티에이징</span>
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

                <div class="sub_cont05 sub2_1_3_cont05 sub_tabcontent sub_tabcontent3" id="sub_tabcontent3">
                    <div class="sub_tabcontent03_wrap">
                        <div class="sub_cont_box sub2_1_1_cont1_1_box bg_fa pd_120">
                            <div class="sub_tabcontent_container sub2_3_3_tabcontent_container flex_row fw sa center">
                                <div class="sub_cont_title sub2_3_3_cont_title_left title_left">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                                    <p class="sub_cont_title_text01 fz_32 lh_14 ls_2 light m_40">
                                        피부과학으로 되돌리는 시간, <br>
                                        <span class="medium">水세럼주사</span>
                                    </p>
                                    <p class="pc_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 light m_20">
                                        水세럼주사는 인천 오라클피부과의 오랜 피부 연구, 피부과학 노하우를 바탕으로 <br>
                                        완성한 시그니처 주사입니다. 보톡스와 히알루론산, 피부 탄력에 유효한 특허 성분을 <br>
                                        피부 깊은 층까지 전달하여, 주름을 예방하고 보습 효과와 하이드로 리프팅 효과를 <br>
                                        한 번에 선사합니다.
                                    </p>
                                    <p class="m_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 light m_20">
                                        水세럼주사는 인천 오라클피부과의 오랜 피부 연구, 피부과학 노하우를 바탕으로 
                                        완성한 시그니처 주사입니다. 보톡스와 히알루론산, 피부 탄력에 유효한 특허 성분을 
                                        피부 깊은 층까지 전달하여, 주름을 예방하고 보습 효과와 하이드로 리프팅 효과를 
                                        한 번에 선사합니다.
                                    </p>
                                    <p class="sub_cont_title_text03 fz_16 lh_16 ls_2 normal">
                                        水세럼주사는 오직 인천 오라클피부과에서만 만나보실 수 있습니다.
                                    </p>
                                </div>
                                <div class="sub_cont_doct_img sub2_1_1_tabcontent01_img sub2_3_3_tabcontent01_img img_right ta_r">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_3_3_tabcontent01_img01.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        
                        <div class="sub_cont_box sub2_1_1_cont1_2_box pd_120">
                            <div class="sub_tabcontent_container flex_row fw jc_center al_fs">
                                <div class="sub_cont_title sub2_1_1_cont_title_center ta_c">
                                    <p class="sub_cont_title_text01 fz_22 lh_14 ls_2 normal gs_reveal" data-gs-delay="200">
                                        안티에이징
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
                                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_3_3_ba_slide_img01_b.jpg" alt="">
                                                        </div>
                                                        <div class="sub2_1_1_ba_slide_img_a <?=($is_member ? '':'blur')?>">
                                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_3_3_ba_slide_img01_a.jpg" alt="">
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
                                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_3_3_ba_slide_img02_b.jpg" alt="">
                                                        </div>
                                                        <div class="sub2_1_1_ba_slide_img_a <?=($is_member ? '':'blur')?>">
                                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_3_3_ba_slide_img02_a.jpg" alt="">
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
                                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_3_3_ba_slide_img03_b.jpg" alt="">
                                                        </div>
                                                        <div class="sub2_1_1_ba_slide_img_a <?=($is_member ? '':'blur')?>">
                                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_3_3_ba_slide_img03_a.jpg" alt="">
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
                        
                        <div class="sub_cont_box sub2_3_3_cont02_wrap">
                            <div class="sub_tabcontent_container sub2_1_cont03_container flex_row fw sa center">
                                <div class="sub_cont_title sub2_3_3_cont_title_left sub2_3_3_cont_title_left_new title_left">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                                    <p class="sub_cont_title_text02 fz_32 lh_14 ls_2 light m_40 gs_reveal" data-gs-delay="200">
                                        <span class="medium">水세럼주사</span>로 새롭게 태어나는 피부
                                    </p>
                                    <p class="sub_cont_title_text03 fz_16 lh_16 ls_2 light gs_reveal m_20" data-gs-delay="400">
                                        물을 뜻하는 水와 <br>
                                        영양분이 농축된 세럼을 합친 <br>
                                        인천오라클의 시그니처 주사 치료
                                    </p>
                                    <p class="sub_cont_title_text04 sub2_3_1_cont03_title_text04 fz_16 lh_16 ls_2 light gs_reveal" data-gs-delay="400">
                                        단순히 겉모습만 개선하는 시술이 아닙니다.<br>
                                        건조한 피부 / 노화된 피부 / 염증으로 인해 아픈 피부를 <br>
                                        수세럼주사로 회복하여 젊고 건강해지도록 재생하는 치료입니다.
                                    </p>
                                </div>
                                <div class="sub_cont_doct_img sub2_3_3_tabcontent01_img img_right p_r ta_r">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_3_3_tabcontent03_img01.png" alt="">
                                </div>
                            </div>
                        </div>
                        
                        <div class="sub_cont_box sub2_3_3_cont03_wrap">
                            <div class="container-sm flex_row fw jc_center al_fs">
                                <div class="sub_cont_title sub2_1_4_cont_title_center ta_c">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                                    <p class="sub_cont_title_text02 fz_32 lh_14 ls_2 light m_80 gs_reveal" data-gs-delay="200">
                                        水세럼주사의 <span class="medium">핵심성분</span>
                                    </p>
                                </div>
                                <div class="sub2_3_3_cont05_box sub2_3_3_cont03_box flex_row fw se al_fs m_80">
                                    <div class="sub2_3_3_cont03_item_title">
                                        <p class="fz_20 ls_2 lh_2 medium">히알루론산</p>
                                    </div>
                                    <div class="column_third_30">
                                        <div class="sub2_1_4_cont4_item sub2_1_4_cont4_item01 sub2_3_3_cont03_item flex_row jc_fs center">
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_3_3_cont03_item01_1.png" alt="">
                                            
                                            <div class="sub2_3_3_cont05_item_text">
                                                <p class="fz_18 ls_2 lh_16 medium m_10">
                                                    #수분감
                                                </p>
                                                <p class="pc_cont_434 fz_16 ls_2 lh_14 light">
                                                    수분을 끌어들이는 특성으로 <br>
                                                    피부의 수분을 머금어 건조함을 <br>
                                                    개선합니다.
                                                </p>
                                                <p class="m_cont_434 fz_16 ls_2 lh_14 light">
                                                    수분을 끌어들이는 특성으로 
                                                    피부의 수분을 머금어 건조함을 
                                                    개선합니다.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column_third_30">
                                        <div class="sub2_1_4_cont4_item sub2_1_4_cont4_item02 sub2_3_3_cont03_item flex_row jc_fs center">
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_3_3_cont03_item01_2.png" alt="">
                                            
                                            <div class="sub2_3_3_cont05_item_text">
                                                <p class="fz_18 ls_2 lh_16 medium m_10">
                                                    #피부재생
                                                </p>
                                                <p class="pc_cont_434 fz_16 ls_2 lh_14 light">
                                                    새로운 콜라겐 생성을 유도해 <br>
                                                    젊어보이는 피부가 아닌 <br>
                                                    젊어지는 피부를 만듭니다.
                                                </p>
                                                <p class="m_cont_434 fz_16 ls_2 lh_14 light">
                                                    새로운 콜라겐 생성을 유도해 
                                                    젊어보이는 피부가 아닌 
                                                    젊어지는 피부를 만듭니다.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column_third_30">
                                        <div class="sub2_1_4_cont4_item sub2_1_4_cont4_item03 sub2_3_3_cont03_item flex_row jc_fs center">
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_3_3_cont03_item01_3.png" alt="">
                                            
                                            <div class="sub2_3_3_cont05_item_text">
                                                <p class="fz_18 ls_2 lh_16 medium m_10">
                                                    #치유
                                                </p>
                                                <p class="pc_cont_434 fz_16 ls_2 lh_14 light">
                                                    아프고 염증있는 병든 피부가 <br>
                                                    새로운 피부로 회복하면서 <br>
                                                    증상이 호전됩니다.
                                                </p>
                                                <p class="m_cont_434 fz_16 ls_2 lh_14 light">
                                                    아프고 염증있는 병든 피부가 
                                                    새로운 피부로 회복하면서 
                                                    증상이 호전됩니다.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="sub2_3_3_cont05_box sub2_3_3_cont03_box flex_row fw se al_fs">
                                    <div class="sub2_3_3_cont03_item_title">
                                        <p class="fz_20 ls_2 lh_2 medium">보톡스</p>
                                    </div>
                                    <div class="column_third_30">
                                        <div class="sub2_1_4_cont4_item sub2_1_4_cont4_item01 sub2_3_3_cont03_item flex_row jc_fs center">
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_3_3_cont03_item02_1.png" alt="">
                                            
                                            <div class="sub2_3_3_cont05_item_text">
                                                <p class="fz_18 ls_2 lh_16 medium m_10">
                                                    #즉각 효과
                                                </p>
                                                <p class="pc_cont_434 fz_16 ls_2 lh_14 light">
                                                    1-2주 내로 바로 효과가 나타나 <br>
                                                    긴급하게 관리받아야 할 때 <br>
                                                    효과적입니다.
                                                </p>
                                                <p class="m_cont_434 fz_16 ls_2 lh_14 light">
                                                    1-2주 내로 바로 효과가 나타나 
                                                    긴급하게 관리받아야 할 때 
                                                    효과적입니다.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column_third_30">
                                        <div class="sub2_1_4_cont4_item sub2_1_4_cont4_item02 sub2_3_3_cont03_item flex_row jc_fs center">
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_3_3_cont03_item02_2.png" alt="">
                                            
                                            <div class="sub2_3_3_cont05_item_text">
                                                <p class="fz_18 ls_2 lh_16 medium m_10">
                                                    #주름 예방
                                                </p>
                                                <p class="pc_cont_434 fz_16 ls_2 lh_14 light">
                                                    안면 근육의 깊은 이해를 바탕으로 <br>
                                                    주름이 생기는 것을 예방하고 <br>
                                                    자연스러운 표정을 만듭니다.
                                                </p>
                                                <p class="m_cont_434 fz_16 ls_2 lh_14 light">
                                                    안면 근육의 깊은 이해를 바탕으로 
                                                    주름이 생기는 것을 예방하고 
                                                    자연스러운 표정을 만듭니다.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column_third_30">
                                        <div class="sub2_1_4_cont4_item sub2_1_4_cont4_item03 sub2_3_3_cont03_item flex_row jc_fs center">
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_3_3_cont03_item02_3.png" alt="">
                                            
                                            <div class="sub2_3_3_cont05_item_text">
                                                <p class="fz_18 ls_2 lh_16 medium m_10">
                                                    #리프팅
                                                </p>
                                                <p class="pc_cont_434 fz_16 ls_2 lh_14 light">
                                                    얼굴에 골고루 주사하여 <br>
                                                    피부에 힘있는 탄력감과 <br>
                                                    전반적인 리프팅 효과가 생깁니다.
                                                </p>
                                                <p class="m_cont_434 fz_16 ls_2 lh_14 light">
                                                    얼굴에 골고루 주사하여 
                                                    피부에 힘있는 탄력감과 
                                                    전반적인 리프팅 효과가 생깁니다.
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
                                        오라클만의 <span class="medium">水세럼주사 특별함</span>
                                    </p>
                                </div>
                                
                                <div class="sub_tabcontent_container flex_row fw sa center">
                                    <div class="sub_cont_doct_img sub2_3_3_tabcontent04_img img_left p_r ta_c">
                                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_3_3_tabcontent04_img01.png" alt="">
                                    </div>
                                    <div class="sub_cont_title sub2_3_3_tabcontent04_title_right sub2_3_3_cont_title_left_new title_right">
                                        <p class="sub_cont_title_text01 sortsmillgoudy fz_20 lh_14 ls_2 light gs_reveal" data-gs-delay="200">
                                            Oracle Point.01
                                        </p>
                                        <p class="sub_cont_title_text02 fz_32 lh_16 ls_2 normal m_20 gs_reveal" data-gs-delay="400">
                                            피부과 전문의의 <span class="medium">1:1 디자인</span>
                                        </p>
                                        <p class="sub_cont_title_text03 fz_19 lh_16 ls_2 normal gs_reveal" data-gs-delay="600">
                                            Who 어떤 환자인지<br>
                                            Where 어느 위치에 주사할지<br>
                                            How 어떻게 주사할지
                                        </p>
                                    </div>
                                    <div class="sub2_4_2_cont04_item_box flex_row fw jc_center al_fs">
                                        <p class="pc_cont_480 ta_c sub_cont_title_text04 c-7c7c7c fz_16 lh_16 ls_2 normal m_20 gs_reveal" data-gs-delay="200">
                                            수세럼주사는 보이지 않는 피부 속 구조를 이해하고 <br>
                                            정확한 위치와 깊이에 적정한 양을 주사해야 하기 때문에 많은 경험이 필요한 시술입니다.
                                        </p>
                                        <p class="m_cont_480 ta_l sub_cont_title_text04 c-7c7c7c fz_16 lh_16 ls_2 normal m_20 gs_reveal" data-gs-delay="200">
                                            수세럼주사는 보이지 않는 피부 속 구조를 이해하고 
                                            정확한 위치와 깊이에 적정한 양을 주사해야 하기 때문에 많은 경험이 필요한 시술입니다.
                                        </p>
                                        <p class="pc_cont_480 ta_c sub_cont_title_text05 fz_16 lh_16 ls_2 normal gs_reveal" data-gs-delay="400">
                                            인천 오라클피부과에서는 해부학 지식이 해박하고 시술 경험이 풍부한 피부과 전문의가 직접 진단하기 때문에 <br>
                                            환자의 피부 상태를 정확하게 파악하고 맞춤 디자인 과정을 거쳐 커스터마이징으로 시술합니다.
                                        </p>
                                        <p class="m_cont_480 ta_l sub_cont_title_text05 fz_16 lh_16 ls_2 normal gs_reveal" data-gs-delay="400">
                                            인천 오라클피부과에서는 해부학 지식이 해박하고 시술 경험이 풍부한 피부과 전문의가 직접 진단하기 때문에 
                                            환자의 피부 상태를 정확하게 파악하고 맞춤 디자인 과정을 거쳐 커스터마이징으로 시술합니다.
                                        </p>
                                    </div>
                                </div>
                                
                                <div class="sub_tabcontent_container flex_row fw sa center">
                                    <div class="sub_cont_title sub2_3_3_cont_title_left sub2_3_3_cont_title_left_new2 title_left">
                                        <p class="sub_cont_title_text01 sortsmillgoudy fz_20 lh_14 ls_2 light gs_reveal" data-gs-delay="200">
                                            Oracle Point.02
                                        </p>
                                        <p class="sub_cont_title_text02 fz_32 lh_14 ls_2 light m_40 gs_reveal" data-gs-delay="400">
                                            水세럼주사의 <span class="medium">치료 횟수</span>
                                        </p>
                                        <p class="sub_cont_title_text03 fz_16 lh_16 ls_2 normal gs_reveal m_20" data-gs-delay="600">
                                            피부 재탄생(재생+탄력+생기) 프로그램은 <br>
                                            3-4 개월마다 총 2-3회 정도, <br>
                                            이후 1년에 1회 유지 치료 합니다.
                                        </p>
                                        <p class="sub_cont_title_text04 c-7c7c7c fz_16 lh_16 ls_2 normal gs_reveal" data-gs-delay="800">
                                            *1회 만으로도 충분한 효과를 볼 수 있습니다.
                                        </p>
                                    </div>
                                    <div class="sub2_3_3_tabcontent01_img sub2_3_3_oraclepoint02_img_wrap img_right p_r ta_r">
                                        <img class="pc_cont_480" src="<?php echo G5_THEME_URL?>/sub/img/sub2_3_3_oraclepoint02_img01.png" alt="">
                                        <div class="m_cont_480 sub2_3_3_oraclepoint02_img flex_row jc_center center">
                                            <div class="sub2_3_3_oraclepoint02_box sub2_3_3_oraclepoint02_box01">
                                                <p class="ta_c">
                                                    <span class="fz_19 bold">피부 재탄생 프로그램</span><br>
                                                    <span class="fz_19 normal">(재생+탄력+생기)</span><br>
                                                    <span class="fz_16 normal">3-4 개월마다 총 2-3회 정도</span>
                                                </p>
                                            </div>
                                            <div class="sub2_3_3_oraclepoint02_plus">
                                                <p class="fz_21 medium c-b ta_c">+</p>
                                            </div>
                                            <div class="sub2_3_3_oraclepoint02_box sub2_3_3_oraclepoint02_box02">
                                                <p class="ta_c">
                                                    <span class="fz_19 bold">이후 유지치료</span><br>
                                                    <span class="fz_16 normal">1년에 1회</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="container-sm flex_row fw jc_center al_fs">
                                    <div class="sub_cont_title sub2_1_4_cont_title_center ta_c">
                                        <p class="sub_cont_title_text01 sortsmillgoudy fz_20 lh_14 ls_2 light gs_reveal" data-gs-delay="200">
                                            Oracle Point.03
                                        </p>
                                        <p class="sub_cont_title_text02 fz_32 lh_14 ls_2 light m_80 gs_reveal" data-gs-delay="400">
                                            水세럼주사 <br>
                                            <span class="medium">함께 받으면 좋은 시술</span>
                                        </p>
                                    </div>
                                    <div class="sub2_3_3_cont05_box sub2_3_3_oraclepoint03_box flex_row fw se al_fs">
                                        <div class="column_third_30">
                                            <div class="sub2_1_4_cont4_item sub2_1_4_cont4_item01 flex_row jc_center center">
                                                <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_3_3_cont05_item01.png" alt="">
                                                
                                                <div class="sub2_3_3_cont05_item_text">
                                                    <p class="sortsmillgoudy fz_20 ls_2 lh_14 light">
                                                        thermage FLX
                                                    </p>
                                                    <p class="fz_22 ls_2 lh_16 medium m_10">
                                                        써마지FLX
                                                    </p>
                                                    <p class="pc_cont_434 fz_16 ls_2 lh_14 light">
                                                        진피층 콜라겐 생성, <br>
                                                        피부가 탄탄해지는 리프팅
                                                    </p>
                                                    <p class="m_cont_434 fz_16 ls_2 lh_14 light">
                                                        진피층 콜라겐 생성, 
                                                        피부가 탄탄해지는 리프팅
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="column_third_30">
                                            <div class="sub2_1_4_cont4_item sub2_1_4_cont4_item02 flex_row jc_center center">
                                                <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_3_3_cont05_item04.png" alt="">
                                                
                                                <div class="sub2_3_3_cont05_item_text">
                                                    <p class="sortsmillgoudy fz_20 ls_2 lh_14 light">
                                                        tenthera
                                                    </p>
                                                    <p class="fz_22 ls_2 lh_16 medium m_10">
                                                        텐쎄라
                                                    </p>
                                                    <p class="pc_cont_434 fz_16 ls_2 lh_14 light">
                                                        초음파 열을 이용하여 피부탄력에 <br>
                                                        전반적인 도움을 주는 리프팅
                                                    </p>
                                                    <p class="m_cont_434 fz_16 ls_2 lh_14 light">
                                                        초음파 열을 이용하여 피부탄력에 
                                                        전반적인 도움을 주는 리프팅
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="sub_cont_box sub2_1_1_cont4_box p_r">
                            <div class="sub2_1_1_cont4 sub2_3_3_cont4 flex_row fw jc_center center">
                                <div class="column_half">
                                    <div class="sub2_5_2_cont04_left sub3_1_fullcont_left sub3_1_fullcont_left_top sub2_3_3_fullcont_new flex_row fw fd_c jc_center center">
                                        <div class="sub_cont_title sub2_3_3_cont_title_left_new ta_l">
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                                            <p class="sub_cont_title_text01 fz_32 lh_14 ls_2 light m_40 gs_reveal" data-gs-delay="200">
                                                <span class="medium">水세럼 주사</span><br>
                                                이럴 때 필요합니다
                                            </p>
                                            <div class="sub2_3_3_cont06_ul_wrap m_40">
                                                <ul class="sub2_3_3_cont06_ul sub2_3_3_cont06_ul01 fz_17 normal ta_l gs_reveal" data-gs-delay="400">
                                                    <li>
                                                        <p>수분 공급</p>
                                                    </li>
                                                    <li>
                                                        <p>어려지는 피부나이</p>
                                                    </li>
                                                </ul>
                                                <ul class="sub2_3_3_cont06_ul sub2_3_3_cont06_ul02 fz_17 normal ta_l gs_reveal" data-gs-delay="400">
                                                    <li>
                                                        <p>건강한 피부</p>
                                                    </li>
                                                    <li>
                                                        <p>주름과 탄력</p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <p class="sub_cont_title_text02 fz_16 lh_14 ls_2 light gs_reveal" data-gs-delay="600">
                                                단기간에 빠르게 피부를 회복하고 수분감을 채우고 싶을 때 <br>
                                                콜라겐 재생으로 피부 나이의 근본을 되돌리고 싶을 때 <br>
                                                예민하고 건조한 피부를 회복하고 싶을 때
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="column_half">
                                    <div class="sub2_1_1_cont4_img">
                                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_3_3_cont06_item01.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- 
                        <div class="sub_cont_box sub2_2_1_cont04_box p_r bg_fa pd_60">
                            <div class="container-1300 sub2_2_1_cont05_container">
                                <div class="sub_click_btn open m_20" id="sub_click_btn3">
                                    <p class="sub_cont_title_text01 sortsmillgoudy fz_20 lh_16 ls_2 light">
                                        Hydro Lifting Serum Inject
                                    </p>
                                    <p class="sub_cont_title_text02 fz_32 lh_16 ls_2 light">
                                        <span class="medium">수세럼주사 시술 후 주의사항</span>
                                    </p>
                                </div>
                                <div class="sub2_2_1_cont05_text open li_4 sub_click_box" id="sub_click_box3">
                                    <ul class="sub2_2_1_cont05_item_ul fz_17 normal ta_l">
                                        <li>
                                            <p>시술 다음 날부터 가벼운 세안과 화장, 샤워가 가능합니다.</p>
                                        </li>
                                        <li>
                                            <p>시술 부위에 피부 재생 크림을 바르시면 좋습니다.</p>
                                        </li>
                                        <li>
                                            <p>시술 후 1주일 동안 땀이 나는 운동이나 음주는 삼가주세요.</p>
                                        </li>
                                        <li>
                                            <p>외출  시에는 SPF 30 이상의 자외선 차단제를 바르는 것이 좋습니다.</p>
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
                                        <span class="fz_30 ls_2 lh_14 normal">안티에이징</span>
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

                <div class="sub_cont06 sub2_1_4_cont06 sub_tabcontent sub_tabcontent4" id="sub_tabcontent4">
                    <div class="sub_tabcontent04_wrap">
                        <div class="sub_cont_box sub2_1_1_cont1_1_box bg_fa pd_120">
                            <div class="sub_tabcontent_container sub2_3_4_tabcontent_container flex_row fw sa center">
                                <div class="sub_cont_title sub2_3_4_cont_title_left title_left">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                                    <p class="sub_cont_title_text01 fz_32 lh_14 ls_2 light m_40">
                                        피부의 밀도를 높이는 탄력 치료, <br>
                                        <span class="medium">써마지FLX</span>
                                    </p>
                                    <p class="pc_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 light">
                                        써마지FLX는 특허 받은 고주파 기술을 적용한 4세대 프리미엄 레이저 장비로, <br>
                                        피부 밀도를 높여 느슨해진 피부 탄력을 잡아 주름을 개선합니다.
                                    </p>
                                    <p class="m_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 light">
                                        써마지FLX는 특허 받은 고주파 기술을 적용한 4세대 프리미엄 레이저 장비로, 
                                        피부 밀도를 높여 느슨해진 피부 탄력을 잡아 주름을 개선합니다.
                                    </p>
                                    <p class="pc_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light">
                                        인천 오라클피부과만의 써마지는 피부과 전문의의 1:1 디자인 후 <br>
                                        피부 깊은 속부터 콜라겐 재생을 유도하여 단 한 번의 시술만으로도 속부터 <br>
                                        차오르는 피부 탄력을 선사합니다.
                                    </p>
                                    <p class="m_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light">
                                        인천 오라클피부과만의 써마지는 피부과 전문의의 1:1 디자인 후 
                                        피부 깊은 속부터 콜라겐 재생을 유도하여 단 한 번의 시술만으로도 속부터 
                                        차오르는 피부 탄력을 선사합니다.
                                    </p>
                                </div>
                                <div class="sub_cont_doct_img sub2_3_4_tabcontent01_img img_right ta_r">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_3_4_tabcontent01_img01.png" alt="">
                                </div>
                            </div>
                        </div>
                        
                        <!-- 
                        <div class="sub_cont_box sub2_1_1_cont1_2_box pd_120">
                            <div class="sub_tabcontent_container flex_row fw jc_center al_fs">
                                <div class="sub_cont_title sub2_1_1_cont_title_center ta_c">
                                    <p class="sub_cont_title_text01 fz_22 lh_14 ls_2 normal gs_reveal" data-gs-delay="200">
                                        안티에이징
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
                        
                        
                        <div class="sub_cont_box sub2_1_4_cont_box pd_60">
                            <div class="sub2_1_4_cont3_bg">
                                <div class="sub_cont_title sub2_1_4_cont_title_center p_r ta_c pt_100">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                                    <p class="sub_cont_top_title_text01 fz_30 lh_14 ls_2 light gs_reveal" data-gs-delay="200">
                                        오라클만의 <span class="medium">안티에이징 특별함</span>
                                    </p>
                                </div>
                                <div class="sub_tabcontent_container flex_row fw sa center">
                                    <div class="sub_cont_doct_video sub2_3_4_tabcontent03_img img_left p_r ta_r">
                                        <div class="video-real-selfie small-video-wrap" style="overflow:hidden;">
                                            <div class="video-real-selfie-wrapper" style="position: relative; padding:56.25% 0 0;">
                                                <video id="realSelfieVideo" poster="<?php echo G5_THEME_URL?>/sub/img/sub2_3_4_cont01_video_bg01.jpg" preload="none" style="position: absolute; top:0; left:0; width:100%;"  autoplay muted loop playsinline>
                                                    <source src="<?php echo G5_THEME_URL?>/video/sub2_3_4_cont03_video01.mp4" type="video/mp4">
                                                </video>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sub_cont_title sub2_3_4_cont_title_right title_right">
                                        <p class="sub_cont_title_text01 sortsmillgoudy fz_20 lh_14 ls_2 light gs_reveal" data-gs-delay="200">
                                            Oracle Point.01
                                        </p>
                                        <p class="sub_cont_title_text02 fz_32 lh_14 ls_2 light m_40 gs_reveal" data-gs-delay="400">
                                            <span class="medium">피부에 흐른 시간을 되돌리는</span><br>
                                            피부과 전문의 써마지FLX
                                        </p>
                                        <ul class="sub2_1_1_premium_item_ul sub2_3_4_premium_item_ul fz_16 normal ta_l gs_reveal" data-gs-delay="800">
                                            <li>
                                                <p>특허 받은 고주파 기술</p>
                                            </li>
                                            <li>
                                                <p>4세대 프리미엄 레이저 장비</p>
                                            </li>
                                            <li>
                                                <p>주름부터 처짐까지 복합적인 노화 증상을 한 번에 개선</p>
                                            </li>
                                            <li>
                                                <p>강력한 피부 타이트닝 & 리프팅 효과</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="container-sm flex_row fw jc_center al_fs">
                                    <div class="sub_cont_title sub2_1_4_cont_title_center ta_c">
                                        <p class="sub_cont_title_text01 sortsmillgoudy fz_20 lh_14 ls_2 light gs_reveal" data-gs-delay="200">
                                            Oracle Point.02
                                        </p>
                                        <p class="sub_cont_title_text02 fz_32 lh_14 ls_2 light m_80 gs_reveal" data-gs-delay="400">
                                            1년에 단 두 번, 리프팅 데이<br>
                                            <span class="medium">시너지 UP 프로그램</span>
                                        </p>
                                    </div>
                                    <div class="sub2_3_3_cont05_box flex_row fw se al_fs">
                                        <div class="column_third_30">
                                            <div class="sub2_1_4_cont4_item sub2_1_4_cont4_item01 flex_row jc_center center">
                                                <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_3_3_cont05_item01.png" alt="">
                                                
                                                <div class="sub2_3_3_cont05_item_text">
                                                    <p class="sortsmillgoudy fz_20 ls_2 lh_14 light">
                                                        step1
                                                    </p>
                                                    <p class="fz_22 ls_2 lh_16 medium m_10">
                                                        써마지FLX
                                                    </p>
                                                    <p class="pc_cont_434 fz_16 ls_2 lh_14 light">
                                                        진피층 콜라겐 생성, <br>
                                                        피부가 탄탄해지는 리프팅
                                                    </p>
                                                    <p class="m_cont_434 fz_16 ls_2 lh_14 light">
                                                        진피층 콜라겐 생성, 
                                                        피부가 탄탄해지는 리프팅
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="column_third_30">
                                            <div class="sub2_1_4_cont4_item sub2_1_4_cont4_item02 flex_row jc_center center">
                                                <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_3_3_cont05_item02.png" alt="">
                                                
                                                <div class="sub2_3_3_cont05_item_text">
                                                    <p class="sortsmillgoudy fz_20 ls_2 lh_14 light">
                                                        step2
                                                    </p>
                                                    <p class="fz_22 ls_2 lh_16 medium m_10">
                                                        슈링크
                                                    </p>
                                                    <p class="pc_cont_434 fz_16 ls_2 lh_14 light">
                                                        SMAS층부터 당겨주어 <br>
                                                        얼굴라인을 잡아주는 리프팅
                                                    </p>
                                                    <p class="m_cont_434 fz_16 ls_2 lh_14 light">
                                                        SMAS층부터 당겨주어 
                                                        얼굴라인을 잡아주는 리프팅
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="column_third_30">
                                            <div class="sub2_1_4_cont4_item sub2_1_4_cont4_item03 flex_row jc_center center">
                                                <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_3_3_cont05_item03.png" alt="">
                                                
                                                <div class="sub2_3_3_cont05_item_text">
                                                    <p class="sortsmillgoudy fz_20 ls_2 lh_14 light">
                                                        step3
                                                    </p>
                                                    <p class="fz_22 ls_2 lh_16 medium m_10">
                                                        하이드로리프팅
                                                    </p>
                                                    <p class="pc_cont_434 fz_16 ls_2 lh_14 light">
                                                        히알루론산 공급, <br>
                                                        피부 수분을 채워주는 리프팅
                                                    </p>
                                                    <p class="m_cont_434 fz_16 ls_2 lh_14 light">
                                                        히알루론산 공급, 
                                                        피부 수분을 채워주는 리프팅
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="sub_tabcontent_container flex_row fw sa center">
                                    <div class="sub_cont_title sub2_1_1_tabcontent04_title_left title_left">
                                        <p class="sub_cont_title_text01 sortsmillgoudy fz_20 lh_14 ls_2 light gs_reveal" data-gs-delay="200">
                                            Oracle Point.03
                                        </p>
                                        <p class="sub_cont_title_text02 fz_32 lh_16 ls_2 normal m_20 gs_reveal" data-gs-delay="400">
                                            써마지FLX의 기술력에 <br>
                                            <span class="medium">맞춤 디자인</span>을 더하다
                                        </p>
                                        <p class="sub_cont_title_text03 fz_18 lh_16 ls_2 normal m_20 gs_reveal" data-gs-delay="600">
                                            피부에는 다양한 특성이 있고, <br>
                                            이는 개개인에 따라 다르게 나타납니다.
                                        </p>
                                        <p class="pc_cont_434 sub_cont_title_text04 fz_16 lh_16 ls_2 normal gs_reveal" data-gs-delay="800">
                                            복합적인 문제를 해결하기 위한 인천오라클의 써마지 FLX는 <br>
                                            콜라겐 재생으로 탄력에 효과적이며 피부과 전문의의 정확한 진단과 <br>
                                            맞춤형 디자인을 더하여 피부 노화 원인부터 정확하게 치료합니다.
                                        </p>
                                        <p class="m_cont_434 sub_cont_title_text04 fz_16 lh_16 ls_2 normal gs_reveal m_100" data-gs-delay="800">
                                            복합적인 문제를 해결하기 위한 인천오라클의 써마지 FLX는 
                                            콜라겐 재생으로 탄력에 효과적이며 피부과 전문의의 정확한 진단과 
                                            맞춤형 디자인을 더하여 피부 노화 원인부터 정확하게 치료합니다.
                                        </p>
                                    </div>
                                    <div class="sub_cont_doct_img sub2_3_4_tabcontent06_img img_right p_r ta_c">
                                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_3_4_tabcontent06_img01.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- 
                        <div class="sub_cont_box sub2_2_1_cont04_box p_r bg_fa pd_60">
                            <div class="container-1300 sub2_2_1_cont05_container">
                                <div class="sub_click_btn open m_20" id="sub_click_btn4">
                                    <p class="sub_cont_title_text01 sortsmillgoudy fz_20 lh_16 ls_2 light">
                                        Thermage FLX
                                    </p>
                                    <p class="sub_cont_title_text02 fz_32 lh_16 ls_2 light">
                                        <span class="medium">써마지 리프팅 후 주의사항</span>
                                    </p>
                                </div>
                                <div class="sub2_2_1_cont05_text open li_4 sub_click_box" id="sub_click_box4">
                                    <ul class="sub2_2_1_cont05_item_ul fz_17 normal ta_l">
                                        <li>
                                            <p>시술 후 물집이 생겼을 경우 전화 후 내원해주세요.</p>
                                        </li>
                                        <li>
                                            <p>시술 다음 날부터 가벼운 세안과 화장, 샤워가 가능합니다.</p>
                                        </li>
                                        <li>
                                            <p>시술 부위에 피부 재생 크림을 바르시면 좋습니다.</p>
                                        </li>
                                        <li>
                                            <p>외출 시에는 SPF30 이상의 자외선 차단제를 바르는 것이 좋습니다.</p>
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
                                        <span class="fz_30 ls_2 lh_14 normal">안티에이징</span>
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
                
                <div class="sub_cont06 sub2_3_5_cont06 sub_tabcontent sub_tabcontent5" id="sub_tabcontent5">
                    <div class="sub_tabcontent04_wrap">
                        <div class="sub_cont_box sub2_1_4_cont1_1_box bg_fa pd_120">
                            <div class="sub_tabcontent_container flex_row fw sa center">
                                <div class="sub_cont_title sub2_3_5_cont_title_left title_left">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                                    <p class="sub_cont_title_text01 fz_32 lh_14 ls_2 light m_40">
                                        지방은 태우고 턱선은 당겨주는 <br>
                                        <span class="medium">V라인 리프팅, 인모드</span>
                                    </p>
                                    <p class="pc_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 light m_20">
                                        인모드 리프팅은 울퉁불퉁한 지방세포를 사멸하는 Mini FX와 <br>
                                        피부 콜라겐과 엘라스틴 재생을 촉진하는 Forma를 바탕으로 <br>
                                        늘어진 지방은 태우고, 처진 턱선은 탄력 있게 당겨주는 복합 V라인 리프팅입니다.
                                    </p>
                                    <p class="m_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 light m_20">
                                        인모드 리프팅은 울퉁불퉁한 지방세포를 사멸하는 Mini FX와 
                                        피부 콜라겐과 엘라스틴 재생을 촉진하는 Forma를 바탕으로 
                                        늘어진 지방은 태우고, 처진 턱선은 탄력 있게 당겨주는 복합 V라인 리프팅입니다.  
                                    </p>
                                    <p class="pc_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light">
                                        인천 오라클피부과의 인모드 리프팅은 피부과 전문의의 1:1 디자인을 <br>
                                        기반으로 얼굴 굴곡에 맞춰 매끈한 V라인을 완성합니다.
                                    </p>
                                    <p class="m_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light">
                                        인천 오라클피부과의 인모드 리프팅은 피부과 전문의의 1:1 디자인을 
                                        기반으로 얼굴 굴곡에 맞춰 매끈한 V라인을 완성합니다.
                                    </p>
                                </div>
                                <div class="sub_cont_doct_video sub2_3_5_tabcontent01_img img_right ta_r">
                                    <div class="video-real-selfie small-video-wrap" style="overflow:hidden;">
                                        <div class="video-real-selfie-wrapper" style="position: relative; padding:56.25% 0 0;">
                                            <video id="realSelfieVideo" poster="<?php echo G5_THEME_URL?>/sub/img/sub2_3_5_cont01_video_bg01.jpg" preload="none" style="position: absolute; top:0; left:0; width:100%;"  autoplay muted loop playsinline>
                                                <source src="<?php echo G5_THEME_URL?>/video/sub2_3_5_cont01_video01.mp4" type="video/mp4">
                                            </video>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- 
                        <div class="sub_cont_box sub2_1_4_cont1_2_box pd_120">
                            <div class="sub_tabcontent_container flex_row fw jc_center al_fs">
                                <div class="sub_cont_title sub2_1_4_cont_title_center ta_c">
                                    <p class="sub_cont_title_text01 fz_22 lh_14 ls_2 normal gs_reveal" data-gs-delay="200">
                                        안티에이징
                                    </p>
                                    <p class="sub_cont_title_text02 sortsmillgoudy fz_60 lh_16 ls_2 light gs_reveal m_60" data-gs-delay="400">
                                        Before & After
                                    </p>
                                </div>
                                <div class="sub2_1_4_tabcontent02_ba">
                                    <div class="swiper-container sub2_1_ba_slider_cont">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide sub2_1_4_ba_slide">
                                                <a href="<?php echo G5_THEME_URL?>/sub/sub8_2.php" target="_blank">
                                                    <div class="sub2_1_4_ba_slide_img sub2_1_4_ba_slide_img01 flex_row sb al_fs">
                                                        <div class="sub2_1_4_ba_slide_img_b">
                                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_1_4_ba_slide_img01_b.jpg" alt="">
                                                        </div>
                                                        <div class="sub2_1_4_ba_slide_img_a <?=($is_member ? '':'blur')?>">
                                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_1_4_ba_slide_img01_a.jpg" alt="">
                                                            <p class="sub2_1_4_ba_slide_img_a_taxt fz_14 ls_2 lh_14 normal ta_c">
                                                                로그인 후 <br>
                                                                확인 가능합니다.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="swiper-slide sub2_1_4_ba_slide">
                                                <a href="<?php echo G5_THEME_URL?>/sub/sub8_2.php" target="_blank">
                                                    <div class="sub2_1_4_ba_slide_img sub2_1_4_ba_slide_img02 flex_row sb al_fs">
                                                        <div class="sub2_1_4_ba_slide_img_b">
                                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_1_4_ba_slide_img02_b.jpg" alt="">
                                                        </div>
                                                        <div class="sub2_1_4_ba_slide_img_a <?=($is_member ? '':'blur')?>">
                                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_1_4_ba_slide_img02_a.jpg" alt="">
                                                            <p class="sub2_1_4_ba_slide_img_a_taxt fz_14 ls_2 lh_14 normal ta_c">
                                                                로그인 후 <br>
                                                                확인 가능합니다.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="swiper-slide sub2_1_4_ba_slide">
                                                <a href="<?php echo G5_THEME_URL?>/sub/sub8_2.php" target="_blank">
                                                    <div class="sub2_1_4_ba_slide_img sub2_1_4_ba_slide_img03 flex_row sb al_fs">
                                                        <div class="sub2_1_4_ba_slide_img_b">
                                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_1_4_ba_slide_img03_b.jpg" alt="">
                                                        </div>
                                                        <div class="sub2_1_4_ba_slide_img_a <?=($is_member ? '':'blur')?>">
                                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_1_4_ba_slide_img03_a.jpg" alt="">
                                                            <p class="sub2_1_4_ba_slide_img_a_taxt fz_14 ls_2 lh_14 normal ta_c">
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
                                    <div class="sub2_1_4_ba_more_btn">
                                        <a href="<?php echo G5_THEME_URL?>/sub/sub8_2.php" target="_blank">
                                            <p class="fz_16 lh_1 ls_2 light ta_c">more</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        -->
                        
                        <div class="sub_cont_box sub2_1_4_cont_box pd_60">
                            <div class="sub2_1_4_cont3_bg">
                                <div class="sub_cont_title sub2_1_4_cont_title_center p_r ta_c pt_100">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                                    <p class="sub_cont_top_title_text01 fz_30 lh_14 ls_2 light gs_reveal" data-gs-delay="200">
                                        두 가지 모드로 완성하는 <br>
                                        <span class="medium">토탈 페이스 리프팅</span>
                                    </p>
                                </div>
                                
                                <div class="sub_tabcontent_container flex_row fw jc_center center">
                                    <div class="sub2_3_5_cont03_box flex_row fw jc_center al_fs">
                                        <div class="sub2_3_5_cont03_img">
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_3_5_tabcontent03_img01.png" alt="">
                                        </div>
                                        <div class="sub2_3_5_cont03_text ta_l">
                                            <p class="fz_32 lh_14 ls_2 medium m_20 gs_reveal" data-gs-delay="200">
                                                Mini FX
                                            </p>
                                            <p class="pc_cont_434 fz_16 lh_14 ls_2 light m_20 gs_reveal" data-gs-delay="400">
                                                고주파(RF) 에너지를 SMAS층까지 전달 <br>
                                                불필요한 지방 세포 사멸 <br>
                                                고전압 전기자극으로 지방 세포에만 <br>
                                                선택적으로 에너지 전달
                                            </p>
                                            <p class="m_cont_434 fz_16 lh_14 ls_2 light m_20 gs_reveal" data-gs-delay="400">
                                                고주파(RF) 에너지를 SMAS층까지 전달 <br>
                                                불필요한 지방 세포 사멸 <br>
                                                고전압 전기자극으로 지방 세포에만 
                                                선택적으로 에너지 전달
                                            </p>
                                            <p class="pc_cont_434 tag_text fz_16 lh_14 ls_2 normal gs_reveal" data-gs-delay="600">
                                                #이중턱 완화&ensp;&ensp;#지방 파괴<br>
                                                #처진 볼살&심부볼 개선
                                            </p>
                                            <p class="m_cont_434 tag_text fz_16 lh_14 ls_2 normal gs_reveal" data-gs-delay="600">
                                                #이중턱 완화&ensp;&ensp;#지방 파괴&ensp;&ensp;#처진 볼살&심부볼 개선
                                            </p>
                                        </div>
                                    </div>
                                    <div class="sub2_3_5_cont03_box flex_row fw jc_center al_fs">
                                        <div class="sub2_3_5_cont03_img">
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_3_5_tabcontent03_img02.png" alt="">
                                        </div>
                                        <div class="sub2_3_5_cont03_text ta_l">
                                            <p class="fz_32 lh_14 ls_2 medium m_20 gs_reveal" data-gs-delay="200">
                                                Forma
                                            </p>
                                            <p class="pc_cont_434 fz_16 lh_14 ls_2 light m_20 gs_reveal" data-gs-delay="400">
                                                Multi-Polar 에너지 전달 <br>
                                                콜라겐, 엘라스틴, 히알루론산 생성 <br>
                                                진피층에 강한 열 자극 전달
                                            </p>
                                            <p class="m_cont_434 fz_16 lh_14 ls_2 light m_20 gs_reveal" data-gs-delay="400">
                                                Multi-Polar 에너지 전달 <br>
                                                콜라겐, 엘라스틴, 히알루론산 생성 <br>
                                                진피층에 강한 열 자극 전달
                                            </p>
                                            <p class="pc_cont_434 tag_text fz_16 lh_14 ls_2 normal gs_reveal" data-gs-delay="600">
                                                #잔주름 개선&ensp;&ensp;#처진 피부 리프팅<br>
                                                #차오르는 탄력감
                                            </p>
                                            <p class="m_cont_434 tag_text fz_16 lh_14 ls_2 normal gs_reveal" data-gs-delay="600">
                                                #잔주름 개선&ensp;&ensp;#처진 피부 리프팅&ensp;&ensp;#차오르는 탄력감
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="sub_tabcontent_container flex_row fw sa center">
                                    <div class="sub_cont_doct_img sub2_3_5_tabcontent04_img img_left p_r ta_r">
                                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_3_5_tabcontent04_img01.png" alt="">
                                    </div>
                                    <div class="sub_cont_title sub2_3_5_cont_title_right title_right">
                                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                                        <p class="sub_cont_title_text02 fz_32 lh_14 ls_2 light m_40 gs_reveal" data-gs-delay="400">
                                            사람마다 다른 얼굴 굴곡에 맞춘 <br>
                                            <span class="medium">퍼스널 인모드</span>
                                        </p>
                                        <p class="pc_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light gs_reveal" data-gs-delay="600">
                                            인천 오라클의 인모드 리프팅은 피부과 전문의가 개인의 얼굴 라인을 <br>
                                            정확하게 진단 후, 얼굴 굴곡에 맞춰 지방이 과도한 부위와 탄력 없이 <br>
                                            늘어진 부위에 따라 Mini Fx와 Forma 두 가지 모드를 적절하게 <br>
                                            결합하여 매끈한 V라인을 완성합니다. 
                                        </p>
                                        <p class="m_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light gs_reveal" data-gs-delay="600">
                                            인천 오라클의 인모드 리프팅은 피부과 전문의가 개인의 얼굴 라인을 
                                            정확하게 진단 후, 얼굴 굴곡에 맞춰 지방이 과도한 부위와 탄력 없이 
                                            늘어진 부위에 따라 Mini Fx와 Forma 두 가지 모드를 적절하게 
                                            결합하여 매끈한 V라인을 완성합니다. 
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- 
                        <div class="sub_cont_box sub2_2_1_cont04_box p_r bg_fa pd_60">
                            <div class="container-1300 sub2_2_1_cont05_container">
                                <div class="sub_click_btn open m_20" id="sub_click_btn5">
                                    <p class="sub_cont_title_text01 sortsmillgoudy fz_20 lh_16 ls_2 light">
                                        Inmode
                                    </p>
                                    <p class="sub_cont_title_text02 fz_32 lh_16 ls_2 light">
                                        <span class="medium">인모드 리프팅 후 주의사항</span>
                                    </p>
                                </div>
                                <div class="sub2_2_1_cont05_text open li_5 sub_click_box" id="sub_click_box5">
                                    <ul class="sub2_2_1_cont05_item_ul fz_17 normal ta_l">
                                        <li>
                                            <p>시술 다음 날부터 가벼운 세안과 화장, 샤워가 가능합니다.</p>
                                        </li>
                                        <li>
                                            <p>시술 후 따듯한 느낌을 지속시키기 위해 미온수로 세안해 주세요.</p>
                                        </li>
                                        <li>
                                            <p>시술받은 부위에 강한 자극을 주는 행동은 삼가주세요.</p>
                                        </li>
                                        <li>
                                            <p>외출 시에는 SPF 30 이상의 자외선 차단제를 바르는 것이 좋습니다.</p>
                                        </li>
                                        <li>
                                            <p>시술 후 멍이 들 수 있으며, 멍 크림을 사용하면 도움이 됩니다.</p>
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
                                        <span class="fz_30 ls_2 lh_14 normal">안티에이징</span>
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
                
                <div class="sub_cont06 sub2_2_6_cont06 sub_tabcontent sub_tabcontent6" id="sub_tabcontent6">
                    <div class="sub_tabcontent04_wrap">
                        <div class="sub_cont_box sub2_1_4_cont1_1_box bg_fa pd_120">
                            <div class="sub_tabcontent_container sub2_3_3_cont01_container flex_row fw sa center">
                                <div class="sub_cont_doct_video sub2_3_3_tabcontent01_img img_left ta_r">
                                    <div class="video-real-selfie small-video-wrap" style="overflow:hidden;">
                                        <div class="video-real-selfie-wrapper" style="position: relative; padding:56.25% 0 0;">
                                            <video id="realSelfieVideo" poster="<?php echo G5_THEME_URL?>/sub/img/sub2_3_6_cont01_video_bg01.jpg" preload="none" style="position: absolute; top:0; left:0; width:100%;"  autoplay muted loop playsinline>
                                                <source src="<?php echo G5_THEME_URL?>/video/sub2_3_6_cont01_video01.mp4" type="video/mp4">
                                            </video>
                                        </div>
                                    </div>
                                </div>
                                <div class="sub_cont_title sub2_3_6_cont_title_right title_right">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                                    <p class="sub_cont_title_text01 fz_32 lh_14 ls_2 light m_40">
                                        피부보다 더 깊이 <br>
                                        SMAS층까지 당겨주는 <br>
                                        <span class="medium">텐쎄라 리프팅</span>
                                    </p>
                                    <p class="pc_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 light m_20">
                                        텐쎄라는 2라인 조사 방식을 적용한 고강도 초음파(HIFU) 장비로, <br>
                                        초음파 열에너지를 비침습적으로 피부 진피층과 SMAS층까지 전달하여 <br>
                                        콜라겐 재생을 유도하고, 얼굴 전체의 탄력 개선 및 리프팅 효과를 유도합니다.
                                    </p>
                                    <p class="m_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 light m_20">
                                        텐쎄라는 2라인 조사 방식을 적용한 고강도 초음파(HIFU) 장비로, 
                                        초음파 열에너지를 비침습적으로 피부 진피층과 SMAS층까지 전달하여 
                                        콜라겐 재생을 유도하고, 얼굴 전체의 탄력 개선 및 리프팅 효과를 유도합니다. 
                                    </p>
                                    <p class="pc_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light">
                                        인천 오라클피부과의 텐쎄라 리프팅은 피부과 전문의의 1:1 디자인 리프팅으로, <br>
                                        이중턱, 볼살, 턱살을 효과적으로 제거하여 갸름하고 탄력 있는 V라인을 완성합니다. 
                                    </p>
                                    <p class="m_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light">
                                        인천 오라클피부과의 텐쎄라 리프팅은 피부과 전문의의 1:1 디자인 리프팅으로, 
                                        이중턱, 볼살, 턱살을 효과적으로 제거하여 갸름하고 탄력 있는 V라인을 완성합니다.  
                                    </p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- 
                        <div class="sub_cont_box sub2_1_4_cont1_2_box pd_120">
                            <div class="sub_tabcontent_container flex_row fw jc_center al_fs">
                                <div class="sub_cont_title sub2_1_4_cont_title_center ta_c">
                                    <p class="sub_cont_title_text01 fz_22 lh_14 ls_2 normal gs_reveal" data-gs-delay="200">
                                        안티에이징
                                    </p>
                                    <p class="sub_cont_title_text02 sortsmillgoudy fz_60 lh_16 ls_2 light gs_reveal m_60" data-gs-delay="400">
                                        Before & After
                                    </p>
                                </div>
                                <div class="sub2_1_4_tabcontent02_ba">
                                    <div class="swiper-container sub2_1_ba_slider_cont">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide sub2_1_4_ba_slide">
                                                <a href="<?php echo G5_THEME_URL?>/sub/sub8_2.php" target="_blank">
                                                    <div class="sub2_1_4_ba_slide_img sub2_1_4_ba_slide_img01 flex_row sb al_fs">
                                                        <div class="sub2_1_4_ba_slide_img_b">
                                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_1_4_ba_slide_img01_b.jpg" alt="">
                                                        </div>
                                                        <div class="sub2_1_4_ba_slide_img_a <?=($is_member ? '':'blur')?>">
                                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_1_4_ba_slide_img01_a.jpg" alt="">
                                                            <p class="sub2_1_4_ba_slide_img_a_taxt fz_14 ls_2 lh_14 normal ta_c">
                                                                로그인 후 <br>
                                                                확인 가능합니다.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="swiper-slide sub2_1_4_ba_slide">
                                                <a href="<?php echo G5_THEME_URL?>/sub/sub8_2.php" target="_blank">
                                                    <div class="sub2_1_4_ba_slide_img sub2_1_4_ba_slide_img02 flex_row sb al_fs">
                                                        <div class="sub2_1_4_ba_slide_img_b">
                                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_1_4_ba_slide_img02_b.jpg" alt="">
                                                        </div>
                                                        <div class="sub2_1_4_ba_slide_img_a <?=($is_member ? '':'blur')?>">
                                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_1_4_ba_slide_img02_a.jpg" alt="">
                                                            <p class="sub2_1_4_ba_slide_img_a_taxt fz_14 ls_2 lh_14 normal ta_c">
                                                                로그인 후 <br>
                                                                확인 가능합니다.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="swiper-slide sub2_1_4_ba_slide">
                                                <a href="<?php echo G5_THEME_URL?>/sub/sub8_2.php" target="_blank">
                                                    <div class="sub2_1_4_ba_slide_img sub2_1_4_ba_slide_img03 flex_row sb al_fs">
                                                        <div class="sub2_1_4_ba_slide_img_b">
                                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_1_4_ba_slide_img03_b.jpg" alt="">
                                                        </div>
                                                        <div class="sub2_1_4_ba_slide_img_a <?=($is_member ? '':'blur')?>">
                                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_1_4_ba_slide_img03_a.jpg" alt="">
                                                            <p class="sub2_1_4_ba_slide_img_a_taxt fz_14 ls_2 lh_14 normal ta_c">
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
                                    <div class="sub2_1_4_ba_more_btn">
                                        <a href="<?php echo G5_THEME_URL?>/sub/sub8_2.php" target="_blank">
                                            <p class="fz_16 lh_1 ls_2 light ta_c">more</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        -->
                        
                        <div class="sub_cont_box sub2_1_4_cont_box pd_60">
                            <div class="sub2_1_4_cont3_bg">
                                <div class="container-1200 sub2_3_6_container flex_row fd_c fw jc_center center">
                                    <div class="sub_cont_title sub2_1_4_cont_title_center p_r ta_c m_100">
                                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                                        <p class="sub_cont_top_title_text01 fz_32 lh_14 ls_2 light gs_reveal" data-gs-delay="200">
                                            통증은 줄이고, 효과는 높인 <br>
                                            <span class="medium">2라인 조사 테크놀로지</span>
                                        </p>
                                    </div>
                                    <div class="sub2_3_6_tabcontent03_img p_r ta_c m_60">
                                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_3_6_tabcontent03_img01.png" alt="">
                                    </div>
                                    <div class="sub_cont_title sub2_3_6_cont03_title ta_c">
                                        <p class="pc_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 normal gs_reveal m_20" data-gs-delay="200">
                                            텐쎄라의 2라인 카트리지는 주변 조직 손상을 최소화 하며 <br>
                                            더 정교한 시술이 가능해 시술 시간과 통증을 줄이고 리프팅 효과는 높입니다.
                                        </p>
                                        <p class="m_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 normal gs_reveal m_20" data-gs-delay="200">
                                            텐쎄라의 2라인 카트리지는 주변 조직 손상을 최소화 하며 
                                            더 정교한 시술이 가능해 시술 시간과 통증을 줄이고 리프팅 효과는 높입니다.
                                        </p>
                                        <p class="pc_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 normal gs_reveal" data-gs-delay="400">
                                            차별화된 2라인 조사 기술력은 2개의 초음파 에너지가 동시에 조사되어 <br>
                                            피부 탄력을 높이고 콜라겐과 탄력 섬유의 재생 효과를 극대화합니다.
                                        </p>
                                        <p class="m_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 normal gs_reveal" data-gs-delay="400">
                                            차별화된 2라인 조사 기술력은 2개의 초음파 에너지가 동시에 조사되어 
                                            피부 탄력을 높이고 콜라겐과 탄력 섬유의 재생 효과를 극대화합니다.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="sub_cont_box sub2_3_6_cont6_box p_r bg_fa pd_120">
                            <div class="sub_tabcontent_container sub2_1_cont03_container flex_row fw sa center">
                                <div class="sub_cont_title sub2_1_4_cont_title_left title_left">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                                    <p class="sub_cont_title_text01 fz_32 lh_14 ls_2 light m_40">
                                        <span class="medium">SMAS층까지 침투,</span> <br>
                                        깊은 층부터 당겨주는 리프팅
                                    </p>
                                    <p class="pc_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 light">
                                        텐쎄라는 고강도 집속초음파 HIFU 리프팅으로, <br>
                                        초음파 열에너지를 피부 깊이 SMAS층까지 침투시켜 콜라겐과 <br>
                                        엘라스틴을 재활성화하고 탄력을 되찾아줍니다.
                                    </p>
                                    <p class="m_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 light">
                                        텐쎄라는 고강도 집속초음파 HIFU 리프팅으로, 
                                        초음파 열에너지를 피부 깊이 SMAS층까지 침투시켜 콜라겐과 
                                        엘라스틴을 재활성화하고 탄력을 되찾아줍니다.
                                    </p>
                                </div>
                                <div class="sub_cont_doct_img sub2_2_4_tabcontent01_img img_right ta_r">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_3_6_tabcontent06_img01.png" alt="">
                                </div>
                            </div>
                        </div>
                        
                        <!-- 
                        <div class="sub_cont_box sub2_2_1_cont04_box p_r bg_fa pd_60">
                            <div class="container-1300 sub2_2_1_cont05_container">
                                <div class="sub_click_btn open m_20" id="sub_click_btn6">
                                    <p class="sub_cont_title_text01 sortsmillgoudy fz_20 lh_16 ls_2 light">
                                        <span class="fz_28">10</span> THERA
                                    </p>
                                    <p class="sub_cont_title_text02 fz_32 lh_16 ls_2 light">
                                        <span class="medium">텐쎄라 리프팅 후 주의사항</span>
                                    </p>
                                </div>
                                <div class="sub2_2_1_cont05_text open li_5 sub_click_box" id="sub_click_box6">
                                    <ul class="sub2_2_1_cont05_item_ul fz_17 normal ta_l">
                                        <li>
                                            <p>시술 다음 날부터 가벼운 세안과 화장, 샤워가 가능합니다.</p>
                                        </li>
                                        <li>
                                            <p>시술 부위에 피부 재생 크림을 바르시면 좋습니다.</p>
                                        </li>
                                        <li>
                                            <p>시술받은 부위에 강한 자극을 주는 행동은 삼가 주세요.</p>
                                        </li>
                                        <li>
                                            <p>외출 시에는 SPF 30 이상의 자외선 차단제를 바르는 것이 좋습니다.</p>
                                        </li>
                                        <li>
                                            <p>시술 후 붓기가 3~4일, 멍은 1~2주 정도 나타날 수 있습니다.</p>
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
                                        <span class="fz_30 ls_2 lh_14 normal">안티에이징</span>
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
                
                <div class="sub_cont06 sub2_3_7_cont06 sub_tabcontent sub_tabcontent7" id="sub_tabcontent7">
                    <div class="sub_tabcontent04_wrap">
                        <div class="sub_cont_box sub2_1_4_cont1_1_box bg_fa pd_120">
                            <div class="sub_tabcontent_container flex_row fw sa center">
                                <div class="sub_cont_title sub2_3_7_cont_title_left title_left">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                                    <p class="sub_cont_title_text01 fz_32 lh_14 ls_2 light m_40">
                                        수술 없이 확실하게 젊어지는 리프팅, <br>
                                        <span class="medium">커스텀 실리프팅</span>
                                    </p>
                                    <p class="pc_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 light m_20">
                                        인천 오라클피부과의 커스텀 실리프팅은 피부과 전문의가 <br>
                                        피부의 연령대별 피부특성과 처짐 정도에 맞춰 <br>
                                        맞춤형 실리프팅 시술 계획을 수립합니다. 
                                    </p>
                                    <p class="m_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 light m_20">
                                        인천 오라클피부과의 커스텀 실리프팅은 피부과 전문의가 
                                        피부의 연령대별 피부특성과 처짐 정도에 맞춰 
                                        맞춤형 실리프팅 시술 계획을 수립합니다. 
                                    </p>
                                    <p class="pc_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light">
                                        처지고 늘어진 정도와 부위에 맞춰 실의 종류와 길이를 조절하여 <br>
                                        다양한 주름을 자연스럽게 개선하고, 얼굴 윤곽 라인을 매끈하게 정돈합니다.
                                    </p>
                                    <p class="m_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light">
                                        처지고 늘어진 정도와 부위에 맞춰 실의 종류와 길이를 조절하여 
                                        다양한 주름을 자연스럽게 개선하고, 얼굴 윤곽 라인을 매끈하게 정돈합니다.
                                    </p>
                                </div>
                                <div class="sub_cont_doct_img sub2_3_7_tabcontent01_img img_right ta_r">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_3_7_tabcontent01_img01.png" alt="">
                                </div>
                            </div>
                        </div>
                        
                        <!-- 
                        <div class="sub_cont_box sub2_1_4_cont1_2_box pd_120">
                            <div class="sub_tabcontent_container flex_row fw jc_center al_fs">
                                <div class="sub_cont_title sub2_1_4_cont_title_center ta_c">
                                    <p class="sub_cont_title_text01 fz_22 lh_14 ls_2 normal gs_reveal" data-gs-delay="200">
                                        안티에이징
                                    </p>
                                    <p class="sub_cont_title_text02 sortsmillgoudy fz_60 lh_16 ls_2 light gs_reveal m_60" data-gs-delay="400">
                                        Before & After
                                    </p>
                                </div>
                                <div class="sub2_1_4_tabcontent02_ba">
                                    <div class="swiper-container sub2_1_ba_slider_cont">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide sub2_1_4_ba_slide">
                                                <a href="<?php echo G5_THEME_URL?>/sub/sub8_2.php" target="_blank">
                                                    <div class="sub2_1_4_ba_slide_img sub2_1_4_ba_slide_img01 flex_row sb al_fs">
                                                        <div class="sub2_1_4_ba_slide_img_b">
                                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_1_4_ba_slide_img01_b.jpg" alt="">
                                                        </div>
                                                        <div class="sub2_1_4_ba_slide_img_a <?=($is_member ? '':'blur')?>">
                                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_1_4_ba_slide_img01_a.jpg" alt="">
                                                            <p class="sub2_1_4_ba_slide_img_a_taxt fz_14 ls_2 lh_14 normal ta_c">
                                                                로그인 후 <br>
                                                                확인 가능합니다.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="swiper-slide sub2_1_4_ba_slide">
                                                <a href="<?php echo G5_THEME_URL?>/sub/sub8_2.php" target="_blank">
                                                    <div class="sub2_1_4_ba_slide_img sub2_1_4_ba_slide_img02 flex_row sb al_fs">
                                                        <div class="sub2_1_4_ba_slide_img_b">
                                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_1_4_ba_slide_img02_b.jpg" alt="">
                                                        </div>
                                                        <div class="sub2_1_4_ba_slide_img_a <?=($is_member ? '':'blur')?>">
                                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_1_4_ba_slide_img02_a.jpg" alt="">
                                                            <p class="sub2_1_4_ba_slide_img_a_taxt fz_14 ls_2 lh_14 normal ta_c">
                                                                로그인 후 <br>
                                                                확인 가능합니다.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="swiper-slide sub2_1_4_ba_slide">
                                                <a href="<?php echo G5_THEME_URL?>/sub/sub8_2.php" target="_blank">
                                                    <div class="sub2_1_4_ba_slide_img sub2_1_4_ba_slide_img03 flex_row sb al_fs">
                                                        <div class="sub2_1_4_ba_slide_img_b">
                                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_1_4_ba_slide_img03_b.jpg" alt="">
                                                        </div>
                                                        <div class="sub2_1_4_ba_slide_img_a <?=($is_member ? '':'blur')?>">
                                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_1_4_ba_slide_img03_a.jpg" alt="">
                                                            <p class="sub2_1_4_ba_slide_img_a_taxt fz_14 ls_2 lh_14 normal ta_c">
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
                                    <div class="sub2_1_4_ba_more_btn">
                                        <a href="<?php echo G5_THEME_URL?>/sub/sub8_2.php" target="_blank">
                                            <p class="fz_16 lh_1 ls_2 light ta_c">more</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        -->
                        
                        <div class="sub_cont_box sub2_1_4_cont_box pd_60">
                            <div class="sub2_1_4_cont3_bg">
                                <div class="sub_cont_title sub2_1_4_cont_title_center p_r ta_c pt_100">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                                    <p class="sub_cont_top_title_text01 fz_32 lh_14 ls_2 light gs_reveal" data-gs-delay="200">
                                        <span class="medium">실리프팅 vs 레이저 리프팅</span>
                                    </p>
                                </div>
                                <div class="sub_tabcontent_container flex_row fw jc_center center">
                                    <div class="sub2_3_7_cont03_item p_r flex_row fw jc_center center">
                                        <div class="sub2_3_7_cont03_list sub2_3_7_cont03_list01 p_r flex_row fw fd_c jc_fs center">
                                            <div class="sub_cont_doct_img sub2_3_7_tabcontent03_img p_r ta_c m_20 gs_reveal" data-gs-delay="200">
                                                <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_3_7_tabcontent03_img01.png" alt="">
                                            </div>
                                            <div class="sub_cont_title sub2_3_6_cont03_title ta_c gs_reveal" data-gs-delay="200">
                                                <p class="sub_cont_title_text02 fz_22 lh_14 ls_2 normal m_20">
                                                    실 리프팅
                                                </p>
                                                <p class="pc_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 normal">
                                                    피부를 당겨주는 실을 이용하여 <br>
                                                    물리적으로 SMAS층과 유지인대까지 <br>
                                                    당겨주어 주름 및 탄력을 개선합니다
                                                </p>
                                                <p class="m_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 normal">
                                                    피부를 당겨주는 실을 이용하여 
                                                    물리적으로 SMAS층과 유지인대까지 
                                                    당겨주어 주름 및 탄력을 개선합니다
                                                </p>
                                            </div>
                                        </div>
                                        <div class="sub2_3_7_cont03_list sub2_3_7_cont03_list02 p_r flex_row fw fd_c jc_fs center">
                                            <div class="sub_cont_doct_img sub2_3_7_tabcontent03_img p_r ta_c m_20 gs_reveal" data-gs-delay="400">
                                                <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_3_7_tabcontent03_img02.png" alt="">
                                            </div>
                                            <div class="sub_cont_title sub2_3_6_cont03_title ta_c gs_reveal" data-gs-delay="400">
                                                <p class="sub_cont_title_text02 fz_22 lh_14 ls_2 normal m_20">
                                                    레이저 리프팅
                                                </p>
                                                <p class="pc_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 normal">
                                                    레이저를 통해 피부층에 자극을 주어 <br>
                                                    처진 피부를 리프팅 합니다
                                                </p>
                                                <p class="m_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 normal">
                                                    레이저를 통해 피부층에 자극을 주어 
                                                    처진 피부를 리프팅 합니다
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="sub_tabcontent_container flex_row fw sa center">
                                    <div class="sub_cont_title sub2_3_7_cont_title_left title_left">
                                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                                        <p class="sub_cont_title_text02 fz_32 lh_14 ls_2 light m_40 gs_reveal" data-gs-delay="200">
                                            실이 녹아도 효과가 지속되는 <br>
                                            <span class="medium">실감나는 리프팅</span>
                                        </p>
                                        <p class="pc_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light m_20 gs_reveal" data-gs-delay="400">
                                            인천 오라클의 실리프팅은 식약처 인증을 받은 인체에 무해한 녹는 실을 <br>
                                            피부에 삽입하여 처진 피부를 끌어 당겨주는 시술로, <br>
                                            심하게 처진 피부도 안전하고 효과적으로 리프팅이 가능합니다.
                                        </p>
                                        <p class="m_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light m_20 gs_reveal" data-gs-delay="400">
                                            인천 오라클의 실리프팅은 식약처 인증을 받은 인체에 무해한 녹는 실을 
                                            피부에 삽입하여 처진 피부를 끌어 당겨주는 시술로, 
                                            심하게 처진 피부도 안전하고 효과적으로 리프팅이 가능합니다.
                                        </p>
                                        <p class="pc_cont_434 sub_cont_title_text04 fz_16 lh_16 ls_2 light gs_reveal" data-gs-delay="600">
                                            실이 녹으면 다시 처지는 일시적인 효과가 아닌 녹은 실 주변으로 <br>
                                            콜라겐이 재생성되어, 피부 탄력 자체가 높아져 효과가 오래 지속됩니다.
                                        </p>
                                        <p class="m_cont_434 sub_cont_title_text04 fz_16 lh_16 ls_2 light gs_reveal" data-gs-delay="600">
                                            실이 녹으면 다시 처지는 일시적인 효과가 아닌 녹은 실 주변으로 
                                            콜라겐이 재생성되어, 피부 탄력 자체가 높아져 효과가 오래 지속됩니다.
                                        </p>
                                    </div>
                                    <div class="sub_cont_doct_img sub2_3_7_tabcontent04_img img_right p_r ta_r">
                                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_3_7_tabcontent04_img01.png" alt="">
                                    </div>
                                </div>
                                
                                <div class="sub_tabcontent_container flex_row fw fd_c jc_fs center">
                                    <div class="sub_cont_title sub2_1_4_cont_title_center ta_c">
                                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                                        <p class="sub_cont_title_text02 fz_32 lh_14 ls_2 light m_80 gs_reveal" data-gs-delay="400">
                                            <span class="medium">인천 오라클 실리프팅의 특별함</span>
                                        </p>
                                    </div>
                                    <div class="sub2_3_7_cont05_box flex_row fw jc_center al_fs">
                                        <div class="column_quarter">
                                            <div class="sub2_3_7_cont05_item sub2_3_7_cont05_item01 ta_l flex_row fd_c jc_fs center">
                                                <div class="sub2_3_7_tabcontent05_img gs_reveal m_20" data-gs-delay="200">
                                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_3_7_tabcontent05_img01.png" alt="">
                                                </div>
                                                <div class="sub2_3_7_tabcontent05_text ta_c gs_reveal" data-gs-delay="200">
                                                    <p class="sub_cont_title_text01 sortsmillgoudy fz_20 lh_14 ls_2 light m_10">
                                                        Oracle Point.01
                                                    </p>
                                                    <p class="pc_cont_434 fz_16 ls_2 lh_14 light">
                                                        멍과 붓기가 적고 <br>
                                                        일상생활 바로 가능
                                                    </p>
                                                    <p class="m_cont_434 fz_16 ls_2 lh_14 light">
                                                        멍과 붓기가 적고 
                                                        일상생활 바로 가능
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="column_quarter">
                                            <div class="sub2_3_7_cont05_item sub2_3_7_cont05_item02 ta_l flex_row fd_c jc_fs center">
                                                <div class="sub2_3_7_tabcontent05_img gs_reveal m_20" data-gs-delay="400">
                                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_3_7_tabcontent05_img02.png" alt="">
                                                </div>
                                                <div class="sub2_3_7_tabcontent05_text ta_c gs_reveal" data-gs-delay="400">
                                                    <p class="sub_cont_title_text01 sortsmillgoudy fz_20 lh_14 ls_2 light m_10">
                                                        Oracle Point.02
                                                    </p>
                                                    <p class="pc_cont_434 fz_16 ls_2 lh_14 light">
                                                        부위별 깊은 주름부터 처짐까지 <br>
                                                        맞춤형 방향 조절
                                                    </p>
                                                    <p class="m_cont_434 fz_16 ls_2 lh_14 light">
                                                        부위별 깊은 주름부터 처짐까지 
                                                        맞춤형 방향 조절
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="column_quarter">
                                            <div class="sub2_3_7_cont05_item sub2_3_7_cont05_item03 ta_l flex_row fd_c jc_fs center">
                                                <div class="sub2_3_7_tabcontent05_img gs_reveal m_20" data-gs-delay="600">
                                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_3_7_tabcontent05_img03.png" alt="">
                                                </div>
                                                <div class="sub2_3_7_tabcontent05_text ta_c gs_reveal" data-gs-delay="600">
                                                    <p class="sub_cont_title_text01 sortsmillgoudy fz_20 lh_14 ls_2 light m_10">
                                                        Oracle Point.03
                                                    </p>
                                                    <p class="pc_cont_434 fz_16 ls_2 lh_14 light">
                                                        피부 노화 상태와 탄력도에 맞춰 <br>
                                                        리프팅 강도 조절
                                                    </p>
                                                    <p class="m_cont_434 fz_16 ls_2 lh_14 light">
                                                        피부 노화 상태와 탄력도에 맞춰 
                                                        리프팅 강도 조절
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- 
                        <div class="sub_cont_box sub2_2_1_cont04_box p_r bg_fa pd_60">
                            <div class="container-1300 sub2_2_1_cont05_container">
                                <div class="sub_click_btn open m_20" id="sub_click_btn7">
                                    <p class="sub_cont_title_text01 sortsmillgoudy fz_20 lh_16 ls_2 light">
                                        Thread Lifting
                                    </p>
                                    <p class="sub_cont_title_text02 fz_32 lh_16 ls_2 light">
                                        <span class="medium">실 리프팅 후 주의사항</span>
                                    </p>
                                </div>
                                <div class="sub2_2_1_cont05_text open li_4 sub_click_box" id="sub_click_box7">
                                    <ul class="sub2_2_1_cont05_item_ul fz_17 normal ta_l">
                                        <li>
                                            <p>시술 후 1주일간 뜨거운 물 샤워, 목욕, 찜질방 등은 삼가주세요.</p>
                                        </li>
                                        <li>
                                            <p>시술 부위를 너무 만지거나 과도한 마사지는 삼가주세요.</p>
                                        </li>
                                        <li>
                                            <p>시술 후 붓기, 멍이 들 수 있으나 2-3일 내에 사라집니다.</p>
                                        </li>
                                        <li>
                                            <p>엎드리거나 옆으로 자지 않고 정자세로 자는 것이 좋습니다.</p>
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
                                        <span class="fz_30 ls_2 lh_14 normal">안티에이징</span>
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
                
                <div class="sub_cont06 sub2_3_8_cont06 sub_tabcontent sub_tabcontent8" id="sub_tabcontent8">
                    <div class="sub_tabcontent04_wrap">
                        <div class="sub_cont_box sub2_1_4_cont1_1_box bg_fa pd_120">
                            <div class="sub_tabcontent_container flex_row fw sa center">
                                <div class="sub_cont_title sub2_3_8_cont_title_left title_left">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                                    <p class="sub_cont_title_text01 fz_32 lh_14 ls_2 light m_40">
                                        견고한 탄력, 세련된 라인을 만드는 <br>
                                        <span class="medium">디자인 리프팅</span>
                                    </p>
                                    <p class="pc_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 light">
                                        인천 오라클피부과의 디자인 리프팅은 개인마다 다른 피부 특성과 골격의 차이를 <br>
                                        고려하여 피부과 전문의가 1:1 진단과 디자인 과정을 거쳐 맞춤형으로 진행됩니다. <br>
                                        부족한 볼륨은 채우고, 처진 부위는 탄력 있게 당겨 주어 피부와 얼굴 라인의 FIT을 <br>
                                        되찾는 퍼스널 디자인 안티에이징 프로그램입니다.
                                    </p>
                                    <p class="m_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 light">
                                        인천 오라클피부과의 디자인 리프팅은 개인마다 다른 피부 특성과 골격의 차이를 
                                        고려하여 피부과 전문의가 1:1 진단과 디자인 과정을 거쳐 맞춤형으로 진행됩니다. 
                                        부족한 볼륨은 채우고, 처진 부위는 탄력 있게 당겨 주어 피부와 얼굴 라인의 FIT을 
                                        되찾는 퍼스널 디자인 안티에이징 프로그램입니다.
                                    </p>
                                </div>
                                <div class="sub_cont_doct_img sub2_3_8_tabcontent01_img img_right ta_r">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_3_8_tabcontent01_img01.png" alt="">
                                </div>
                            </div>
                        </div>
                        
                        <!-- 
                        <div class="sub_cont_box sub2_1_4_cont1_2_box pd_120">
                            <div class="sub_tabcontent_container flex_row fw jc_center al_fs">
                                <div class="sub_cont_title sub2_1_4_cont_title_center ta_c">
                                    <p class="sub_cont_title_text01 fz_22 lh_14 ls_2 normal gs_reveal" data-gs-delay="200">
                                        안티에이징
                                    </p>
                                    <p class="sub_cont_title_text02 sortsmillgoudy fz_60 lh_16 ls_2 light gs_reveal m_60" data-gs-delay="400">
                                        Before & After
                                    </p>
                                </div>
                                <div class="sub2_1_4_tabcontent02_ba">
                                    <div class="swiper-container sub2_1_ba_slider_cont">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide sub2_1_4_ba_slide">
                                                <a href="<?php echo G5_THEME_URL?>/sub/sub8_2.php" target="_blank">
                                                    <div class="sub2_1_4_ba_slide_img sub2_1_4_ba_slide_img01 flex_row sb al_fs">
                                                        <div class="sub2_1_4_ba_slide_img_b">
                                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_1_4_ba_slide_img01_b.jpg" alt="">
                                                        </div>
                                                        <div class="sub2_1_4_ba_slide_img_a <?=($is_member ? '':'blur')?>">
                                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_1_4_ba_slide_img01_a.jpg" alt="">
                                                            <p class="sub2_1_4_ba_slide_img_a_taxt fz_14 ls_2 lh_14 normal ta_c">
                                                                로그인 후 <br>
                                                                확인 가능합니다.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="swiper-slide sub2_1_4_ba_slide">
                                                <a href="<?php echo G5_THEME_URL?>/sub/sub8_2.php" target="_blank">
                                                    <div class="sub2_1_4_ba_slide_img sub2_1_4_ba_slide_img02 flex_row sb al_fs">
                                                        <div class="sub2_1_4_ba_slide_img_b">
                                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_1_4_ba_slide_img02_b.jpg" alt="">
                                                        </div>
                                                        <div class="sub2_1_4_ba_slide_img_a <?=($is_member ? '':'blur')?>">
                                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_1_4_ba_slide_img02_a.jpg" alt="">
                                                            <p class="sub2_1_4_ba_slide_img_a_taxt fz_14 ls_2 lh_14 normal ta_c">
                                                                로그인 후 <br>
                                                                확인 가능합니다.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="swiper-slide sub2_1_4_ba_slide">
                                                <a href="<?php echo G5_THEME_URL?>/sub/sub8_2.php" target="_blank">
                                                    <div class="sub2_1_4_ba_slide_img sub2_1_4_ba_slide_img03 flex_row sb al_fs">
                                                        <div class="sub2_1_4_ba_slide_img_b">
                                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_1_4_ba_slide_img03_b.jpg" alt="">
                                                        </div>
                                                        <div class="sub2_1_4_ba_slide_img_a <?=($is_member ? '':'blur')?>">
                                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_1_4_ba_slide_img03_a.jpg" alt="">
                                                            <p class="sub2_1_4_ba_slide_img_a_taxt fz_14 ls_2 lh_14 normal ta_c">
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
                                    <div class="sub2_1_4_ba_more_btn">
                                        <a href="<?php echo G5_THEME_URL?>/sub/sub8_2.php" target="_blank">
                                            <p class="fz_16 lh_1 ls_2 light ta_c">more</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        -->
                        
                        <div class="sub_cont_box sub2_1_4_cont_box pd_60">
                            <div class="sub2_1_4_cont3_bg">
                                <div class="sub_cont_title sub2_1_4_cont_title_center p_r ta_c pt_100">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                                    <p class="sub_cont_top_title_text01 fz_30 lh_14 ls_2 light gs_reveal" data-gs-delay="200">
                                        오라클만의 <span class="medium">안티에이징 특별함</span>
                                    </p>
                                </div>
                                <div class="sub_tabcontent_container sub2_1_cont03_container flex_row fw sa center">
                                    <div class="sub_cont_title sub2_3_8_cont_title_left title_left">
                                        <p class="sub_cont_title_text01 sortsmillgoudy fz_20 lh_14 ls_2 light gs_reveal" data-gs-delay="200">
                                            Oracle Point.01
                                        </p>
                                        <p class="sub_cont_title_text02 fz_32 lh_14 ls_2 light m_40 gs_reveal" data-gs-delay="400">
                                            <span class="medium">피부과 전문의의</span><br>
                                            초정밀 피부 분석
                                        </p>
                                        <p class="pc_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light gs_reveal" data-gs-delay="600">
                                            인천 오라클피부과의 디자인 리프팅은 <br>
                                            테일러 메이드(tailor-made) 방식으로 진행됩니다. <br>
                                            피부부터 지방층과 근막층, 얼굴의 골격까지 안티에이징 주치의로서 <br>
                                            얼굴의 전체적인 상태를 정밀하게 분석하여 피부 상태에 맞는 <br>
                                            복합 시술 플랜을 제공합니다.
                                        </p>
                                        <p class="m_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light gs_reveal" data-gs-delay="600">
                                            인천 오라클피부과의 디자인 리프팅은 
                                            테일러 메이드(tailor-made) 방식으로 진행됩니다. 
                                            피부부터 지방층과 근막층, 얼굴의 골격까지 안티에이징 주치의로서 
                                            얼굴의 전체적인 상태를 정밀하게 분석하여 피부 상태에 맞는 
                                            복합 시술 플랜을 제공합니다.
                                        </p>
                                    </div>
                                    <div class="sub_cont_doct_img sub2_3_8_tabcontent01_img img_right p_r ta_r">
                                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_3_8_tabcontent03_img01.png" alt="">
                                    </div>
                                </div>

                                <div class="sub_tabcontent_container flex_row fw jc_center al_fs">
                                    <div class="sub_cont_title sub2_1_4_cont_title_center ta_c">
                                        <p class="sub_cont_title_text01 sortsmillgoudy fz_20 lh_14 ls_2 light gs_reveal" data-gs-delay="200">
                                            Oracle Point.02
                                        </p>
                                        <p class="sub_cont_title_text02 fz_32 lh_14 ls_2 light m_80 gs_reveal" data-gs-delay="400">
                                            채우고, 올리고, 되돌리는 <br>
                                            <span class="medium">올인원 안티에이징 솔루션</span>
                                        </p>
                                    </div>
                                    <div class="sub2_1_4_cont4_box flex_row fw se al_fs">
                                        <div class="column_third_30">
                                            <div class="sub2_1_4_cont4_item sub2_1_4_cont4_item01 ta_c gs_reveal" data-gs-delay="200">
                                                <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_3_8_item01.png" alt="">
                                                <p class="fz_22 ls_2 lh_14 medium m_20">
                                                    볼륨 업 솔루션
                                                </p>
                                                <p class="pc_cont_434 fz_16 ls_2 lh_14 light">
                                                    꺼진 부위, 깊은 주름을 채워주는 <br>
                                                    볼륨업 프로그램
                                                </p>
                                                <p class="m_cont_434 fz_16 ls_2 lh_14 light">
                                                    꺼진 부위, 깊은 주름을 채워주는 
                                                    볼륨업 프로그램
                                                </p>
                                            </div>
                                        </div>
                                        <div class="column_third_30">
                                            <div class="sub2_1_4_cont4_item sub2_1_4_cont4_item02 ta_c gs_reveal" data-gs-delay="400">
                                                <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_3_8_item02.png" alt="">
                                                <p class="fz_22 ls_2 lh_14 medium m_20">
                                                    탄력 리프팅 솔루션
                                                </p>
                                                <p class="pc_cont_434 fz_16 ls_2 lh_14 light">
                                                    처지고 힘없는 피부를 당겨주고 올려주는 <br>
                                                    탄력 리프팅 프로그램
                                                </p>
                                                <p class="m_cont_434 fz_16 ls_2 lh_14 light">
                                                    처지고 힘없는 피부를 당겨주고 올려주는 
                                                    탄력 리프팅 프로그램
                                                </p>
                                            </div>
                                        </div>
                                        <div class="column_third_30">
                                            <div class="sub2_1_4_cont4_item sub2_1_4_cont4_item03 ta_c gs_reveal" data-gs-delay="600">
                                                <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_3_8_item03.png" alt="">
                                                <p class="fz_22 ls_2 lh_14 medium m_20">
                                                    콜라겐 리부팅 솔루션
                                                </p>
                                                <p class="pc_cont_434 fz_16 ls_2 lh_14 light">
                                                    피부 노화로 처지고 늘어진 피부를 <br>
                                                    되돌리는 콜라겐 리부팅 프로그램
                                                </p>
                                                <p class="m_cont_434 fz_16 ls_2 lh_14 light">
                                                    피부 노화로 처지고 늘어진 피부를 
                                                    되돌리는 콜라겐 리부팅 프로그램
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="sub_tabcontent_container flex_row fw sa center">
                                    <div class="sub_cont_doct_img sub2_3_8_tabcontent04_img img_left p_r ta_c">
                                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_3_8_tabcontent05_img01.png" alt="">
                                    </div>
                                    <div class="sub_cont_title sub2_3_8_tabcontent04_title_right title_right">
                                        <p class="sub_cont_title_text01 sortsmillgoudy fz_20 lh_14 ls_2 light gs_reveal" data-gs-delay="200">
                                            Oracle Point.03
                                        </p>
                                        <p class="sub_cont_title_text02 fz_32 lh_16 ls_2 normal m_20 gs_reveal" data-gs-delay="400">
                                            피부과 전문의의 <span class="medium">1:1 디자인</span>
                                        </p>
                                        <p class="sub_cont_title_text03 fz_19 lh_16 ls_2 normal m_20 gs_reveal" data-gs-delay="600">
                                            Who 어떤 환자인지<br>
                                            Where 어느 위치에 주사할지<br>
                                            How 어떻게 주사할지
                                        </p>
                                        <p class="pc_cont_434 sub_cont_title_text04 fz_16 lh_16 ls_2 normal gs_reveal" data-gs-delay="800">
                                            피부 노화는 주름부터 처짐, 패임까지 여러 문제를 복합적으로 가져 옵니다. <br>
                                            복합적인 피부 문제를 해결하기 위해선 부위별로 디테일한 디자인이 필요합니다. <br>
                                            인천 오라클의 디자인 리프팅은 피부과 전문의가 직접 상담을 진행하여 환자의 <br>
                                            피부 상태를 정확하게 파악한 후 맞춤형으로 치료를 계획하고, 진행합니다.
                                        </p>
                                        <p class="m_cont_434 sub_cont_title_text04 fz_16 lh_16 ls_2 normal gs_reveal" data-gs-delay="800">
                                            피부 노화는 주름부터 처짐, 패임까지 여러 문제를 복합적으로 가져 옵니다. 
                                            복합적인 피부 문제를 해결하기 위해선 부위별로 디테일한 디자인이 필요합니다. 
                                            인천 오라클의 디자인 리프팅은 피부과 전문의가 직접 상담을 진행하여 환자의 
                                            피부 상태를 정확하게 파악한 후 맞춤형으로 치료를 계획하고, 진행합니다.
                                        </p>
                                    </div>
                                </div>
                                
                                <div class="sub_tabcontent_container sub2_1_cont03_container flex_row fw sa center">
                                    <div class="sub_cont_title sub2_3_8_tabcontent06_title_left title_left">
                                        <p class="sub_cont_title_text01 sortsmillgoudy fz_20 lh_14 ls_2 light gs_reveal" data-gs-delay="200">
                                            Oracle Point.04
                                        </p>
                                        <p class="sub_cont_title_text02 fz_32 lh_16 ls_2 normal m_20 gs_reveal" data-gs-delay="400">
                                            <span class="medium">디자인리프팅,</span> <br>
                                            이런 분들께 추천드립니다.
                                        </p>
                                        <div class="sub2_3_8_cont06_text">
                                            <ul class="sub2_3_8_cont06_item_ul fz_17 normal ta_l">
                                                <li class="gs_reveal" data-gs-delay="500">
                                                    <p>노화한 피부를 되돌리고 싶으신 분</p>
                                                </li>
                                                <li class="gs_reveal" data-gs-delay="700">
                                                    <p>어떤 시술이 좋은지 고민되시는 분</p>
                                                </li>
                                                <li class="gs_reveal" data-gs-delay="900">
                                                    <p>처진 부위, 꺼진 부위, 주름을 한 번에 개선하고 싶으신 분</p>
                                                </li>
                                                <li class="gs_reveal" data-gs-delay="1100">
                                                    <p>피부과 전문의에게 전담 피부 관리를 받고 싶으신 분</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="sub_cont_doct_img sub2_3_8_tabcontent06_img img_right p_r ta_c">
                                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_3_8_tabcontent06_img01.png" alt="">
                                    </div>
                                </div>
                                
                                <div class="sub_tabcontent_container_full flex_row fw jc_fs al_fs">
                                    <div class="sub_cont_title title_left">
                                        <p class="sub_cont_title_text01 sortsmillgoudy fz_20 lh_14 ls_2 light gs_reveal" data-gs-delay="200">
                                            Oracle Point.05
                                        </p>
                                        <p class="sub_cont_title_text02 fz_32 lh_14 ls_2 light m_40 gs_reveal" data-gs-delay="400">
                                            안티에이징 <span class="medium">레이저 프로그램</span>
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
                        
                        <div class="sub_cont_box sub2_1_youtube_box pd_120">
                            <div class="container-sm flex_row fw jc_center al_fs">
                                <div class="sub_cont_title sub2_1_4_cont_title_center ta_c">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                                    <p class="sub_cont_title_text01 sortsmillgoudy fz_50 lh_14 ls_2 gs_reveal" data-gs-delay="200">
                                        Youtube
                                    </p>
                                    <p class="sub_cont_title_text02 fz_20 lh_16 ls_2 normal gs_reveal m_60" data-gs-delay="400">
                                        피부과 전문의가 직접 들려 주는 <br>
                                        <span class="fz_30 ls_2 lh_14 normal">안티에이징</span>
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
        } else if(val == 3){
            opensubtab(event, 'sub_tabcontent3');
            $('#sub_tablinks03').addClass('active');
        } else if(val == 4){
            opensubtab(event, 'sub_tabcontent4');
            $('#sub_tablinks04').addClass('active');
        } else if(val == 5){
            opensubtab(event, 'sub_tabcontent5');
            $('#sub_tablinks05').addClass('active');
        } else if(val == 6){
            opensubtab(event, 'sub_tabcontent6');
            $('#sub_tablinks06').addClass('active');
        } else if(val == 7){
            opensubtab(event, 'sub_tabcontent7');
            $('#sub_tablinks07').addClass('active');
        } else if(val == 8){
            opensubtab(event, 'sub_tabcontent8');
            $('#sub_tablinks08').addClass('active');
        }
    }
    //<!-- //Javascript를 이용해서 다음 페이지에 파라미터 넘기기 위한 방법 -->
</script>