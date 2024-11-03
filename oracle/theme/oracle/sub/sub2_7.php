<?php
include_once('./_common.php');
//if (G5_IS_MOBILE) {
//    include_once(G5_MOBILE_PATH.'/index.php');
//    return;
//}

// 웹사이트 타이틀
$g5['title'] = '문신제거';

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
            <div class="sub_top_view sub2_7_top_view">
                <div class="sub_top_view_bg sub2_7_top_view_bg"></div>
                <div class="sub_top_view_text_wrap sub2_7_top_view_text_wrap ta_c">
                    <div class="sub_top_view_text01 sub2_7_top_view_text01">
                        <p class="sortsmillgoudy fz_30 lh_14 ls_2 sub_text_ani">
                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub_top_view_text_icon2.png" alt="">
                            Tattoo Removal
                        </p>
                    </div>
                    <div class="sub_top_view_text02 sub2_7_top_view_text02 m_20">
                        <p class="fz_40 lh_14 ls_2 medium sub_text_ani">
                            문신제거
                        </p>
                    </div>
                    <div class="sub_top_view_text03 sub2_7_top_view_text03">
                        <p class="fz_16 lh_14 ls_2 normal sub_text_ani">
                            수만 케이스의 경험으로 축적된 노하우, 다양한 레이저를
                        </p>
                    </div>
                    <div class="sub_top_view_text04 sub2_7_top_view_text04">
                        <p class="fz_16 lh_14 ls_2 normal sub_text_ani">
                            바탕으로 다양한 색상의 문신을 깨끗하게 제거합니다.
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
                    <ul class="sub_tab_ul flex_row fw jc_center center">
                        <li id="sub_tablinks01" class="sub_tab_li sub_tablinks active" onclick="opensubtab(event, 'sub_tabcontent1')">
                            <a href="javascript:void(0);">
                                <p class="fz_16 ta_c">문신제거</p>
                            </a>
                        </li>
                        <li id="sub_tablinks02" class="sub_tab_li sub_tablinks" onclick="opensubtab(event, 'sub_tabcontent2')">
                            <a href="javascript:void(0);">
                                <p class="fz_16 ta_c">반영구 문신제거</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </article>
            
            <article class="sub_tabcontent_wrap sub2_7_tabcontent_wrap">
                <div class="sub_cont03 sub2_7_1_cont03 sub_tabcontent sub_tabcontent1" id="sub_tabcontent1">
                    <div class="sub_tabcontent01_wrap">
                        <div class="sub_cont_box sub2_1_1_cont1_1_box bg_fa pd_120">
                            <div class="sub_tabcontent_container flex_row fw sa center">
                                <div class="sub_cont_title sub2_5_1_cont_title_left title_left">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                                    <p class="sub_cont_title_text01 fz_32 lh_14 ls_2 light m_40">
                                        멀티 레이저 시술로 적은 횟수로도 <br>
                                        <span class="medium">효과적인 문신 제거</span>
                                    </p>
                                    <p class="pc_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 light m_20">
                                        다양한 색상의 문신을 피부 손상 없이 깨끗하게 제거하기 위해선 <br>
                                        다양한 파장의 레이저를 사용하는 것이 중요합니다.
                                    </p>
                                    <p class="m_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 light m_20">
                                        다양한 색상의 문신을 피부 손상 없이 깨끗하게 제거하기 위해선 
                                        다양한 파장의 레이저를 사용하는 것이 중요합니다.
                                    </p>
                                    <p class="pc_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light">
                                        인천 오라클피부과는 수만 케이스에 달하는 치료 경험을 보유한 <br>
                                        피부과 전문의가 다양한 파장의 피코 레이저를 복합적으로 사용하여 <br>
                                        주변 조직 손상 없이 문신 색소만 정확하게 제거합니다. 
                                    </p>
                                    <p class="m_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light">
                                        인천 오라클피부과는 수만 케이스에 달하는 치료 경험을 보유한 
                                        피부과 전문의가 다양한 파장의 피코 레이저를 복합적으로 사용하여 
                                        주변 조직 손상 없이 문신 색소만 정확하게 제거합니다. 
                                    </p>
                                </div>
                                <div class="sub_cont_doct_img sub2_5_1_tabcontent01_img img_right ta_c">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_7_2_tabcontent01_img01.png" alt="">
                                </div>
                            </div>
                        </div>
                        
                        <div class="sub_cont_box sub2_1_1_cont1_2_box pd_120">
                            <div class="sub_tabcontent_container flex_row fw jc_center al_fs">
                                <div class="sub_cont_title sub2_1_1_cont_title_center ta_c">
                                    <p class="sub_cont_title_text01 fz_22 lh_14 ls_2 normal gs_reveal" data-gs-delay="200">
                                        문신 제거
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
                                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_7_1_ba_slide_img01_b.jpg" alt="">
                                                        </div>
                                                        <div class="sub2_1_1_ba_slide_img_a <?=($is_member ? '':'blur')?>">
                                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_7_1_ba_slide_img01_a.jpg" alt="">
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
                                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_7_1_ba_slide_img02_b.jpg" alt="">
                                                        </div>
                                                        <div class="sub2_1_1_ba_slide_img_a <?=($is_member ? '':'blur')?>">
                                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_7_1_ba_slide_img02_a.jpg" alt="">
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
                                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_7_1_ba_slide_img03_b.jpg" alt="">
                                                        </div>
                                                        <div class="sub2_1_1_ba_slide_img_a <?=($is_member ? '':'blur')?>">
                                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_7_1_ba_slide_img03_a.jpg" alt="">
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
                                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_7_1_ba_slide_img04_b.jpg" alt="">
                                                        </div>
                                                        <div class="sub2_1_1_ba_slide_img_a <?=($is_member ? '':'blur')?>">
                                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_7_1_ba_slide_img04_a.jpg" alt="">
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
                                        오라클만의 <span class="medium">문신제거 특별함</span>
                                    </p>
                                </div>
                                <div class="sub_tabcontent_container flex_row fw sa al_fs">
                                    <div class="sub_cont_title sub2_5_1_cont03_title_left title_left">
                                        <p class="sub_cont_title_text01 sortsmillgoudy fz_20 lh_14 ls_2 light gs_reveal" data-gs-delay="200">
                                            Oracle Point.01
                                        </p>
                                        <p class="sub_cont_title_text02 fz_32 lh_14 ls_2 light m_30 gs_reveal" data-gs-delay="400">
                                            같은 횟수를 받아도 더 큰 효과, <br>
                                            <span class="medium">피코슈어 레이저</span>
                                        </p>
                                        <ul class="sub2_5_1_cont04_item_ul fz_17 normal ta_l m_20 gs_reveal" data-gs-delay="600">
                                            <li>
                                                <p class="sub2_5_1_ul_p">안전하게 문신 입자만 파괴</p>
                                            </li>
                                            <li>
                                                <p class="sub2_5_1_ul_p">쿨링 장치를 이용한 통증의 최소화</p>
                                            </li>
                                            <li>
                                                <p class="sub2_5_1_ul_p">문신 뿐만 아니라 색소 병변에도 OK</p>
                                            </li>
                                        </ul>
                                        <p class="pc_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light gs_reveal" data-gs-delay="800">
                                            기존 레이저에서 더 업그레이드 된 피코슈어 레이저는 색소를 더 잘게 <br>
                                            부수어 부작용이 더 적고 같은  횟수를 받아도 더 큰 효과를 보입니다.
                                        </p>
                                        <p class="m_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light gs_reveal" data-gs-delay="800">
                                            기존 레이저에서 더 업그레이드 된 피코슈어 레이저는 색소를 더 잘게 
                                            부수어 부작용이 더 적고 같은  횟수를 받아도 더 큰 효과를 보입니다.
                                        </p>
                                    </div>
                                    <div class="sub_cont_doct_img sub2_7_1_tabcontent03_img img_right p_r ta_c">
                                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_7_1_tabcontent03_img01.png" alt="">
                                    </div>
                                </div>
                                
                                <div class="sub_tabcontent_container sub2_1_cont03_container flex_row fw sa center">
                                    <div class="sub2_7_1_tabcontent04_img img_left p_r ta_c flex_row jc_center al_fs">
                                        <div class="sub2_7_1_cont04_item sub2_7_1_cont04_item01 ta_c">
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_7_1_tabcontent04_img01.png" alt="">
                                            <p class="sub2_7_1_cont04_item_text01 fz_16 ls_2 lh_16 normal">
                                                피코슈어
                                            </p>
                                            <p class="pc_cont_434 sub2_7_1_cont04_item_text02 fz_16 ls_2 lh_16 normal">
                                                파랑, 보라, 초록 등 <br>
                                                컬러 문신 제거에 <br>
                                                최적화된 레이저
                                            </p>
                                            <p class="m_cont_434 sub2_7_1_cont04_item_text02 fz_16 ls_2 lh_16 normal">
                                                파랑, 보라, 초록 등 
                                                컬러 문신 제거에 
                                                최적화된 레이저
                                            </p>
                                        </div>
                                        <div class="sub2_7_1_cont04_item sub2_7_1_cont04_item02 ta_c">
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_7_1_tabcontent04_img02.png" alt="">
                                            <p class="sub2_7_1_cont04_item_text01 fz_16 ls_2 lh_16 normal">
                                                피코케어
                                            </p>
                                            <p class="pc_cont_434 sub2_7_1_cont04_item_text02 fz_16 ls_2 lh_16 normal">
                                                문신 제거와 함께 <br>
                                                피부 재생에도 <br>
                                                효과적인 레이저
                                            </p>
                                            <p class="m_cont_434 sub2_7_1_cont04_item_text02 fz_16 ls_2 lh_16 normal">
                                                문신 제거와 함께 
                                                피부 재생에도 
                                                효과적인 레이저
                                            </p>
                                        </div>
                                        <div class="sub2_7_1_cont04_item sub2_7_1_cont04_item03 ta_c">
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_7_1_tabcontent04_img03.png" alt="">
                                            <p class="sub2_7_1_cont04_item_text01 fz_16 ls_2 lh_16 normal">
                                                피코스
                                            </p>
                                            <p class="pc_cont_434 sub2_7_1_cont04_item_text02 fz_16 ls_2 lh_16 normal">
                                                문신색소만 선택적으로 <br>
                                                제거하여 피부 손상과 <br>
                                                흉터의 최소화한 레이저
                                            </p>
                                            <p class="m_cont_434 sub2_7_1_cont04_item_text02 fz_16 ls_2 lh_16 normal">
                                                문신색소만 선택적으로 
                                                제거하여 피부 손상과 
                                                흉터의 최소화한 레이저
                                            </p>
                                        </div>
                                    </div>
                                    <div class="sub_cont_title sub2_7_1_cont04_title_right title_right">
                                        <p class="sub_cont_title_text01 sortsmillgoudy fz_20 lh_14 ls_2 light gs_reveal" data-gs-delay="200">
                                            Oracle Point.02
                                        </p>
                                        <p class="sub_cont_title_text02 fz_32 lh_14 ls_2 light m_40 gs_reveal" data-gs-delay="400">
                                            다양한 색소 제거를 위한 <br>
                                            <span class="medium">멀티 레이저 시술</span>
                                        </p>
                                        <p class="pc_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light gs_reveal" data-gs-delay="600">
                                            흑백 문신부터 컬러 문신까지 다양한 색상과 깊이의 <br>
                                            문신 제거를 위해 다양한 레이저를 결합한 멀티 레이저 <br>
                                            시술을 진행합니다.
                                        </p>
                                        <p class="m_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light gs_reveal" data-gs-delay="600">
                                            흑백 문신부터 컬러 문신까지 다양한 색상과 깊이의 
                                            문신 제거를 위해 다양한 레이저를 결합한 멀티 레이저 
                                            시술을 진행합니다.
                                        </p>
                                    </div>
                                </div>
                                
                                <div class="sub_tabcontent_container sub2_1_cont03_container flex_row fw sa center">
                                    <div class="sub_cont_title sub2_7_2_cont03_title_left title_left">
                                        <p class="sub_cont_title_text01 sortsmillgoudy fz_20 lh_14 ls_2 light gs_reveal" data-gs-delay="200">
                                            Oracle Point.03
                                        </p>
                                        <p class="sub_cont_title_text02 fz_32 lh_14 ls_2 light m_30 gs_reveal" data-gs-delay="400">
                                            하루에 두 번, <br>
                                            <span class="medium">빠르고 강력한 2x 문신제거</span>
                                        </p>
                                        <div class="m_cont_480 sub_cont_doct_img sub2_7_1_tabcontent03_img img_right p_r ta_c">
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_7_1_tabcontent05_img01_m.png" alt="">
                                            
                                            <div class="flex_row jc_center center">
                                                <p style="width:50%; padding-top:2%;" class="fz_16 ls_2 lh_16 normal">치료 전 (20.07.06)</p>
                                                <p style="width:50%; padding-top:2%;" class="fz_16 ls_2 lh_16 normal">치료 후 (22.03.11)</p>
                                            </div>
                                        </div>
                                        <ul class="sub2_5_1_cont04_item_ul fz_17 normal ta_l m_20 gs_reveal" data-gs-delay="600">
                                            <li>
                                                <p class="sub2_5_1_ul_p">150pico 레이저 & 특수 약물 사용</p>
                                            </li>
                                            <li>
                                                <p class="sub2_5_1_ul_p">내원 당일 2회 시술로 빠른 효과</p>
                                            </li>
                                            <li>
                                                <p class="sub2_5_1_ul_p">피부과 전문의의 안전한 시술</p>
                                            </li>
                                        </ul>
                                        <p class="pc_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light gs_reveal m_30" data-gs-delay="800">
                                            기존 레이저에서 더 업그레이드 된 피코슈어 레이저는 색소를 더 잘게 <br>
                                            부수어 부작용이 더 적고 같은  횟수를 받아도 더 큰 효과를 보입니다.
                                        </p>
                                        <p class="m_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light gs_reveal m_30" data-gs-delay="800">
                                            기존 레이저에서 더 업그레이드 된 피코슈어 레이저는 색소를 더 잘게 
                                            부수어 부작용이 더 적고 같은  횟수를 받아도 더 큰 효과를 보입니다.
                                        </p>
                                        <div class="sub2_7_1_cont05_item_box flex_row jc_center center">
                                            <div class="sub2_7_1_cont05_item sub2_7_1_cont05_item01 ta_c flex_row jc_center center">
                                                <p class="sub2_7_1_cont05_item_text fz_15 ls_2 lh_14 medium">2x 문신제거 루틴</p>
                                            </div>
                                            <div class="sub2_7_1_cont05_item sub2_7_1_cont05_item02 ta_c flex_row jc_center center">
                                                <p class="sub2_7_1_cont05_item_text fz_15 ls_2 lh_14 normal">1회차 시술</p>
                                            </div>
                                            <div class="sub2_7_1_cont05_item sub2_7_1_cont05_item03 ta_c flex_row jc_center center">
                                                <p class="sub2_7_1_cont05_item_text fz_15 ls_2 lh_14 normal">특수 용액 도포</p>
                                            </div>
                                            <div class="sub2_7_1_cont05_item sub2_7_1_cont05_item04 ta_c flex_row jc_center center">
                                                <p class="sub2_7_1_cont05_item_text fz_15 ls_2 lh_14 normal">2회차 시술</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pc_cont_480 sub_cont_doct_img sub2_7_1_tabcontent03_img img_right p_r ta_c">
                                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_7_1_tabcontent05_img01.png" alt="">
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
                                            Oracle Point.04
                                        </p>
                                        <p class="sub_cont_title_text02 fz_32 lh_14 ls_2 light m_40 gs_reveal" data-gs-delay="400">
                                            민감한 부위의 문신도 편안하게, <br>
                                            <span class="medium">프라이빗 문신 제거</span>
                                        </p>
                                        <ul class="sub2_5_1_cont04_item_ul fz_17 normal ta_l m_30 gs_reveal" data-gs-delay="600">
                                            <li>
                                                <p class="sub2_5_1_ul_p">남/여 의료진 성별 선택 가능</p>
                                            </li>
                                            <li>
                                                <p class="sub2_5_1_ul_p">프라이빗 룸 문신 제거 시술 가능</p>
                                            </li>
                                        </ul>
                                        <p class="pc_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 normal gs_reveal" data-gs-delay="800">
                                            인천 오라클피부과는 민감한 부위의 문신 제거도 편안하게 받아보실 수 <br>
                                            있도록 완벽하게 분리된 프라이빗 룸에서 1:1로 레이저 시술을 진행합니다.
                                        </p>
                                        <p class="m_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 normal gs_reveal" data-gs-delay="800">
                                            인천 오라클피부과는 민감한 부위의 문신 제거도 편안하게 받아보실 수 
                                            있도록 완벽하게 분리된 프라이빗 룸에서 1:1로 레이저 시술을 진행합니다.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="sub_cont_box sub2_2_3_cont07_box pd_60">
                            <div class="sub2_2_1_cont4_bg">
                                <div class="sub_tabcontent_container_full sub2_2_1_cont04_container flex_row fw jc_fs al_fs">
                                    <div class="sub_cont_title title_left">
                                        <p class="sub_cont_title_text01 sortsmillgoudy fz_20 lh_14 ls_2 light gs_reveal" data-gs-delay="200">
                                            Oracle Point
                                        </p>
                                        <p class="sub_cont_title_text02 fz_32 lh_14 ls_2 light m_40 gs_reveal" data-gs-delay="400">
                                            문신 제거 <span class="medium">레이저 프로그램</span>
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
                        <div class="sub_cont_box sub2_2_1_cont04_box p_r bg_fa pd_60">
                            <div class="container-1300 sub2_2_1_cont05_container">
                                <div class="sub_click_btn open m_20" id="sub_click_btn1">
                                    <p class="sub_cont_title_text01 sortsmillgoudy fz_20 lh_16 ls_2 light">
                                        Tattoo Removal
                                    </p>
                                    <p class="sub_cont_title_text02 fz_32 lh_16 ls_2 light">
                                        문신 <span class="medium">제거 후 주의사항</span>
                                    </p>
                                </div>
                                <div class="sub2_2_1_cont05_text sub2_7_cont01_ul_text open li_3 sub_click_box" id="sub_click_box1">
                                    <ul class="sub2_2_1_cont05_item_ul fz_17 normal ta_l">
                                        <li>
                                            <p>시술 후 1~2주 정도 목욕탕 사우나 등은 삼가 주세요.</p>
                                        </li>
                                        <li>
                                            <p>꽉끼는 옷 혹은 쓸림 등을 주의해 주세요.</p>
                                        </li>
                                        <li>
                                            <p>피부 타입 혹은 문신색소양에 따라 물집이 생길 있으며, 물집이 발생할 경우 병원에 내원해 주세요.</p>
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
                                        <span class="fz_30 ls_2 lh_14 normal">문신 제거</span>
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

                <div class="sub_cont04 sub2_7_2_cont04 sub_tabcontent sub_tabcontent2" id="sub_tabcontent2">
                    <div class="sub_tabcontent02_wrap">
                        <div class="sub_cont_box sub2_1_1_cont1_1_box bg_fa pd_120">
                            <div class="sub_tabcontent_container flex_row fw sa center">
                                <div class="sub_cont_title sub2_5_1_cont_title_left title_left">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                                    <p class="sub_cont_title_text01 fz_32 lh_14 ls_2 light m_30">
                                        색상과 피부 상태에 맞춘 <br>
                                        <span class="medium">반영구 문신 제거</span>
                                    </p>
                                    <p class="pc_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 light m_20">
                                        반영구 문신은 갈색, 붉은색으로 잔흔이 남는 경우가 있어 <br>
                                        다른 문신에 비해 제거가 더 어렵습니다.
                                    </p>
                                    <p class="m_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 light m_20">
                                        반영구 문신은 갈색, 붉은색으로 잔흔이 남는 경우가 있어 
                                        다른 문신에 비해 제거가 더 어렵습니다.
                                    </p>
                                    <p class="pc_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light">
                                        인천 오라클피부과의 반영구 문신제거 프로그램은 문신의 위치, <br>
                                        색상, 피부 상태에 맞춰 진해지고 변색된 반영구 문신, 눈썹을 태우지 <br>
                                        않고 색소만 섬세하게 제거합니다.
                                    </p>
                                    <p class="m_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light">
                                        인천 오라클피부과의 반영구 문신제거 프로그램은 문신의 위치, 
                                        색상, 피부 상태에 맞춰 진해지고 변색된 반영구 문신, 눈썹을 태우지 
                                        않고 색소만 섬세하게 제거합니다.
                                    </p>
                                </div>
                                <div class="sub_cont_doct_video sub2_5_1_tabcontent01_img img_right ta_r">
                                    <div class="video-real-selfie small-video-wrap" style="overflow:hidden;">
                                        <div class="video-real-selfie-wrapper" style="position: relative; padding:56.25% 0 0;">
                                            <video id="realSelfieVideo" poster="<?php echo G5_THEME_URL?>/sub/img/sub2_7_1_cont01_video_bg01.jpg" preload="none" style="position: absolute; top:0; left:0; width:100%;"  autoplay muted loop playsinline>
                                                <source src="<?php echo G5_THEME_URL?>/video/sub2_7_1_cont01_video01.mp4" type="video/mp4">
                                            </video>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="sub_cont_box sub2_1_1_cont1_2_box pd_120">
                            <div class="sub_tabcontent_container flex_row fw jc_center al_fs">
                                <div class="sub_cont_title sub2_1_1_cont_title_center ta_c">
                                    <p class="sub_cont_title_text01 fz_22 lh_14 ls_2 normal gs_reveal" data-gs-delay="200">
                                        문신 제거
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
                                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_7_2_ba_slide_img01_b.jpg" alt="">
                                                        </div>
                                                        <div class="sub2_1_1_ba_slide_img_a <?=($is_member ? '':'blur')?>">
                                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_7_2_ba_slide_img01_a.jpg" alt="">
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
                                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_7_2_ba_slide_img02_b.jpg" alt="">
                                                        </div>
                                                        <div class="sub2_1_1_ba_slide_img_a <?=($is_member ? '':'blur')?>">
                                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_7_2_ba_slide_img02_a.jpg" alt="">
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
                                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_7_2_ba_slide_img03_b.jpg" alt="">
                                                        </div>
                                                        <div class="sub2_1_1_ba_slide_img_a <?=($is_member ? '':'blur')?>">
                                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_7_2_ba_slide_img03_a.jpg" alt="">
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
                                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_7_2_ba_slide_img04_b.jpg" alt="">
                                                        </div>
                                                        <div class="sub2_1_1_ba_slide_img_a <?=($is_member ? '':'blur')?>">
                                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_7_2_ba_slide_img04_a.jpg" alt="">
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
                                        오라클만의 <span class="medium">문신제거 특별함</span>
                                    </p>
                                </div>
                                <div class="sub_tabcontent_container flex_row fw sa center">
                                    <div class="sub_cont_title sub2_5_1_cont03_title_left title_left">
                                        <p class="sub_cont_title_text01 sortsmillgoudy fz_20 lh_14 ls_2 light gs_reveal" data-gs-delay="200">
                                            Oracle Point.01
                                        </p>
                                        <p class="sub_cont_title_text02 fz_32 lh_14 ls_2 light m_30 gs_reveal" data-gs-delay="400">
                                            <span class="medium">피코 레이저</span>를 이용한 <br>
                                            안전한 문신 제거
                                        </p>
                                        <ul class="sub2_5_1_cont04_item_ul fz_17 normal ta_l m_20 gs_reveal" data-gs-delay="600">
                                            <li>
                                                <p class="sub2_5_1_ul_p">기존 레이저의 2배 이상 효과</p>
                                            </li>
                                            <li>
                                                <p class="sub2_5_1_ul_p">모공 축소 효과까지 유도</p>
                                            </li>
                                            <li>
                                                <p class="sub2_5_1_ul_p">짧은 시간 동안 높은 에너지 조사</p>
                                            </li>
                                        </ul>
                                        <p class="pc_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light gs_reveal" data-gs-delay="800">
                                            진하고 변색된 반영구 문신, 인천 오라클의 피코 레이저는 <br>
                                            눈썹을 태우지 않고 색소만 섬세하게 제거하여 피부 손상 없이 <br>
                                            강력한 제거 효과를 유도합니다.
                                        </p>
                                        <p class="m_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light gs_reveal" data-gs-delay="800">
                                            진하고 변색된 반영구 문신, 인천 오라클의 피코 레이저는 
                                            눈썹을 태우지 않고 색소만 섬세하게 제거하여 피부 손상 없이 
                                            강력한 제거 효과를 유도합니다.
                                        </p>
                                    </div>
                                    <div class="sub_cont_doct_img sub2_7_1_tabcontent03_img img_right p_r ta_c">
                                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_7_2_tabcontent03_img01.png" alt="">
                                    </div>
                                </div>
                                
                                <div class="sub_tabcontent_container sub2_1_cont03_container flex_row fw sa center">
                                    <div class="pc_cont_480 sub_cont_doct_img sub2_7_2_cont_doct_img sub2_7_1_tabcontent04_img img_left p_r ta_c">
                                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_7_2_tabcontent04_img01.png" alt="">
                                    </div>
                                    <div class="m_cont_480 sub_cont_doct_img sub2_7_2_cont_doct_img sub2_7_1_tabcontent04_img img_left p_r ta_c">
                                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_7_2_tabcontent04_img01_m.png" alt="">
                                    </div>
                                    <div class="sub_cont_title sub2_5_1_cont03_title_right title_right">
                                        <p class="sub_cont_title_text01 sortsmillgoudy fz_20 lh_14 ls_2 light gs_reveal" data-gs-delay="200">
                                            Oracle Point.02
                                        </p>
                                        <p class="sub_cont_title_text02 fz_32 lh_14 ls_2 light m_40 gs_reveal" data-gs-delay="400">
                                            위치에 맞춰 진행되는 <br>
                                            <span class="medium">맞춤형 반영구 문신제거</span>
                                        </p>
                                        <p class="pc_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light gs_reveal" data-gs-delay="800">
                                            문신제거 경험이 풍부한 피부과 전문의의 정확한 타겟팅으로 <br>
                                            주변 피부에 손상을 주지 않아 예민한 피부도 가능합니다.
                                        </p>
                                        <p class="m_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light gs_reveal" data-gs-delay="800">
                                            문신제거 경험이 풍부한 피부과 전문의의 정확한 타겟팅으로 
                                            주변 피부에 손상을 주지 않아 예민한 피부도 가능합니다.
                                        </p>
                                    </div>
                                </div>
                                
                                <div class="sub_tabcontent_container flex_row fw sa center">
                                    <div class="sub_cont_title sub2_5_1_tabcontent04_title_left title_left">
                                        <p class="sub_cont_title_text01 sortsmillgoudy fz_20 lh_14 ls_2 light gs_reveal" data-gs-delay="200">
                                            Oracle Point.03
                                        </p>
                                        <p class="sub_cont_title_text02 fz_32 lh_14 ls_2 light m_40 gs_reveal" data-gs-delay="400">
                                            민감한 부위의 문신도 편안하게, <br>
                                            <span class="medium">프라이빗 문신 제거</span>
                                        </p>
                                        <ul class="sub2_5_1_cont04_item_ul fz_17 normal ta_l m_30 gs_reveal" data-gs-delay="600">
                                            <li>
                                                <p class="sub2_5_1_ul_p">남/여 의료진 성별 선택 가능</p>
                                            </li>
                                            <li>
                                                <p class="sub2_5_1_ul_p">프라이빗 룸 문신 제거 시술 가능</p>
                                            </li>
                                        </ul>
                                        <p class="pc_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 normal gs_reveal" data-gs-delay="800">
                                            인천 오라클피부과는 민감한 부위의 문신 제거도 편안하게 받아보실 수 <br>
                                            있도록 완벽하게 분리된 프라이빗 룸에서 1:1로 레이저 시술을 진행합니다.
                                        </p>
                                        <p class="m_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 normal gs_reveal" data-gs-delay="800">
                                            인천 오라클피부과는 민감한 부위의 문신 제거도 편안하게 받아보실 수 
                                            있도록 완벽하게 분리된 프라이빗 룸에서 1:1로 레이저 시술을 진행합니다.
                                        </p>
                                    </div>
                                    <div class="sub_cont_doct_img sub2_6_1_tabcontent05_img img_right p_r ta_c">
                                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_6_1_tabcontent05_img01.png" alt="">
                                        
                                        <div class="sub2_5_1_cont05_img_txt ta_r">
                                            <p class="fz_14 ls_2 lh_14">* 구월점 한정</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- 
                        <div class="sub_cont_box sub2_2_1_cont04_box p_r bg_fa pd_60 pt_120">
                            <div class="container-1300 sub2_2_1_cont05_container">
                                <div class="sub_click_btn open m_20" id="sub_click_btn2">
                                    <p class="sub_cont_title_text01 sortsmillgoudy fz_20 lh_16 ls_2 light">
                                        Tattoo Removal
                                    </p>
                                    <p class="sub_cont_title_text02 fz_32 lh_16 ls_2 light">
                                        반영구 문신 <span class="medium">제거 후 주의사항</span>
                                    </p>
                                </div>
                                <div class="sub2_2_1_cont05_text sub2_7_cont02_ul_text open li_3 sub_click_box" id="sub_click_box2">
                                    <ul class="sub2_2_1_cont05_item_ul fz_17 normal ta_l">
                                        <li>
                                            <p>시술 후 1~2주 정도 목욕탕 사우나 등은 자제해 주세요.</p>
                                        </li>
                                        <li>
                                            <p>재생테이프는 2~3일 안에 부풀어 오르면 새 것으로 교체하시고, 더 이상 부풀지 않을 때 까지 붙여 주세요.</p>
                                        </li>
                                        <li>
                                            <p>외출 시에는 SPF 30 이상의 자외선 차단제를 발라 주세요.</p>
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
                                        <span class="fz_30 ls_2 lh_14 normal">문신 제거</span>
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
        } 
    }
    //<!-- //Javascript를 이용해서 다음 페이지에 파라미터 넘기기 위한 방법 -->
</script>