<?php
include_once('./_common.php');
//if (G5_IS_MOBILE) {
//    include_once(G5_MOBILE_PATH.'/index.php');
//    return;
//}

// 웹사이트 타이틀
$g5['title'] = '발톱무좀/손발톱질환';

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
            <div class="sub_top_view sub3_6_top_view">
                <div class="sub_top_view_bg sub3_6_top_view_bg"></div>
                <div class="sub_top_view_text_wrap sub3_6_top_view_text_wrap ta_c">
                    <div class="sub_top_view_text01 sub3_6_top_view_text01">
                        <p class="sortsmillgoudy fz_30 lh_14 ls_2 sub_text_ani ta_c">
                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub_top_view_text_icon.png" alt="">
                            Tinea Pedis Treatment
                        </p>
                    </div>
                    <div class="sub_top_view_text02 sub3_6_top_view_text02 m_20">
                        <p class="fz_40 lh_14 ls_2 medium sub_text_ani">
                            발톱무좀/손발톱질환
                        </p>
                    </div>
                    <div class="sub_top_view_text03 sub3_6_top_view_text03">
                        <p class="fz_16 lh_14 ls_2 normal sub_text_ani">
                            무좀균을 정확하게 파괴하여 뿌리를 뽑는
                        </p>
                    </div>
                    <div class="sub_top_view_text04 sub3_6_top_view_text04">
                        <p class="fz_16 lh_14 ls_2 normal sub_text_ani">
                            듀얼 레이저 손발톱 무좀 칠료 프로그램
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
        
        <article class="sub_cont_box sub_cont_box2 bg_fa pd_120">
            <div class="sub_tabcontent_container sub7_container flex_row fw sa center">
                <div class="sub_cont_title sub3_1_cont01_title_left title_left">
                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                    <p class="sub_cont_title_text01 fz_32 lh_14 ls_2 light m_30">
                        손발 톱무좀도 피부질환, <br>
                        <span class="medium">피부과 전문의의 1:1 치료</span>
                    </p>
                    <ul class="sub2_8_6_cont03_item_ul fz_17 normal ta_l m_30">
                        <li>
                            <p>두꺼워지는 손발톱</p>
                        </li>
                        <li>
                            <p>흰색, 검은색, 노란색을 띄는 손발톱</p>
                        </li>
                        <li>
                            <p>쉽게 갈라지고, 부서지는 손발톱</p>
                        </li>
                    </ul>
                    <p class="pc_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 light">
                        손, 발톱의 변형과 염증을 유발하는 손발톱무좀은 무좀균 감염에 의해 <br>
                        발생하는 피부질환으로 재발과 전파 위험이 높아 무좀균의 뿌리를 뽑는 <br>
                        치료가 몹시 중요합니다. 인천 오라클피부과는 다년간 손발톱무좀 치료를 <br>
                        진행해온 피부과 전문의가 1:1 무좀 치료를 진행합니다.
                    </p>
                    <p class="m_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 light">
                        손, 발톱의 변형과 염증을 유발하는 손발톱무좀은 무좀균 감염에 의해 
                        발생하는 피부질환으로 재발과 전파 위험이 높아 무좀균의 뿌리를 뽑는 
                        치료가 몹시 중요합니다. 인천 오라클피부과는 다년간 손발톱무좀 치료를 
                        진행해온 피부과 전문의가 1:1 무좀 치료를 진행합니다.
                    </p>
                </div>
                <div class="sub_cont_doct_img sub3_1_cont01_img img_right ta_r">
                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub3_6_cont01_img01.png" alt="">
                </div>
            </div>
        </article>
        
        <article class="sub_cont_box sub2_1_1_cont1_2_box pd_120">
            <div class="sub_tabcontent_container flex_row fw jc_center al_fs">
                <div class="sub_cont_title sub2_1_1_cont_title_center ta_c">
                    <p class="sub_cont_title_text01 fz_22 lh_14 ls_2 normal gs_reveal" data-gs-delay="200">
                        피부질환
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
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub3_6_ba_slide_img01_b.jpg" alt="">
                                        </div>
                                        <div class="sub2_1_1_ba_slide_img_a <?=($is_member ? '':'blur')?>">
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub3_6_ba_slide_img01_a.jpg" alt="">
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
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub3_6_ba_slide_img02_b.jpg" alt="">
                                        </div>
                                        <div class="sub2_1_1_ba_slide_img_a <?=($is_member ? '':'blur')?>">
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub3_6_ba_slide_img02_a.jpg" alt="">
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
        
        <article class="sub_cont_box sub3_2_cont03_box bg_ff pd_120">
            <div class="sub_tabcontent_container sub7_container flex_row fw jc_center center">
                <div class="sub_cont_title sub3_2_cont03_title_center ta_c">
                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                    <p class="sub_cont_title_text01 fz_32 lh_14 ls_2 light m_80 gs_reveal" data-gs-delay="200">
                        <span class="medium">손발톱 무좀에 특화된</span> <br>
                        듀얼 레이저 치료
                    </p>
                </div>
                <div class="sub3_3_cont04_box flex_row fw jc_center al_fs gs_reveal" data-gs-delay="400">
                    <div class="column_half_40">
                        <div class="sub3_3_cont04_item sub3_6_cont03_item01 ta_c">
                            <div class="sub3_3_cont04_item_img sub3_3_cont04_item_img01">
                                <img src="<?php echo G5_THEME_URL?>/sub/img/sub3_6_cont03_item01.png" alt="">
                            </div>
                            <div class="flex_row jc_center center sub3_3_cont04_item_text sub3_3_cont04_item_text01 sub3_6_cont03_item_text01_1">
                                <p class="fz_20 ls_2 lh_16 normal">
                                    핀포인트 레이저
                                </p>
                            </div>
                            <div class="flex_row jc_center center sub3_3_cont04_item_text sub3_3_cont04_item_text02">
                                <ul class="sub2_8_6_cont03_item_ul fz_17 ls_2 lh_16 normal ta_l">
                                    <li>
                                        <p>
                                            손발톱 진균증 치료술 보건복지부 신 의료기술 등재
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            7초당 65℃의 온도로 무좀균 선택적 사멸
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            무좀균만 선택적으로 파괴, 정상 피부 보호
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            간편한 시술로 일상생활 바로 가능
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="column_half_40">
                        <div class="sub3_3_cont04_item sub3_6_cont03_item02 ta_c border_left">
                            <div class="sub3_3_cont04_item_img sub3_3_cont04_item_img02">
                                <img src="<?php echo G5_THEME_URL?>/sub/img/sub3_6_cont03_item02.png" alt="">
                            </div>
                            <div class="flex_row jc_center center sub3_3_cont04_item_text sub3_3_cont04_item_text01 sub3_6_cont03_item_text01_2">
                                <p class="fz_20 ls_2 lh_16 normal">
                                    루눌라 레이저
                                </p>
                            </div>
                            <div class="flex_row jc_center center sub3_3_cont04_item_text sub3_3_cont04_item_text02">
                                <ul class="sub2_8_6_cont03_item_ul fz_17 ls_2 lh_16 normal ta_l">
                                    <li>
                                        <p>
                                            미국 FDA 승인을 받은 안전한 레이저
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            두 가지 파장을 사용한 복합 치료
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            무좀균 파괴, 세포 재생 효과
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            간편한 시술로 일상생활 바로 가능
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </article>
        
        <article class="sub_cont_box sub3_1_cont03_box bg_ff pd_120">
            <div class="sub_tabcontent_container sub7_container flex_row fw sa center">
                <div class="sub_cont_title sub2_8_1_tabcontent04_title_left title_left">
                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                    <p class="sub_cont_title_text01 fz_32 lh_14 ls_2 light m_40 gs_reveal" data-gs-delay="400">
                        +α 보조치료로 <br>
                        <span class="medium">무좀 개선 시너지 UP</span>
                    </p>
                    <p class="pc_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 normal gs_reveal" data-gs-delay="600">
                        더 빠르고, 효과적인 손발톱 무좀 치료를 위해 플러스 알파 치료를 병행합니다. <br>
                        레이저치료와 병행 시 시너지 효과가 뛰어난 바르는 약과 복용 약 치료를 <br>
                        병행하여 치료 속도와 효과를 극대화합니다.
                    </p>
                    <p class="m_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 normal gs_reveal" data-gs-delay="600">
                        더 빠르고, 효과적인 손발톱 무좀 치료를 위해 플러스 알파 치료를 병행합니다. <br>
                        레이저치료와 병행 시 시너지 효과가 뛰어난 바르는 약과 복용 약 치료를 
                        병행하여 치료 속도와 효과를 극대화합니다.
                    </p>
                </div>
                <div class="sub_cont_doct_img sub3_6_cont04_img img_right p_r ta_c">
                    <div class="sub2_8_1_cont05_item flex_row jc_center center">
                        <div class="sub2_8_1_cont05_item_img sub2_8_1_cont05_item_img01">
                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub3_6_cont04_img01.png" alt="">
                            <p class="fz_16 ls_2 lh_14 light ta_c">레이저 치료</p>
                        </div>
                        <div class="sub2_8_1_cont05_item_img sub2_8_1_cont05_item_img02">
                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub3_6_cont04_img02.png" alt="">
                            <p class="fz_16 ls_2 lh_14 light ta_c">약물 복용 치료</p>
                        </div>
                        <div class="sub2_8_1_cont05_item_img sub2_8_1_cont05_item_img03">
                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub3_6_cont04_img03.png" alt="">
                            <p class="fz_16 ls_2 lh_14 light ta_c">치료제 도포 치료</p>
                        </div>
                    </div>
                </div>
            </div>
        </article>
        
        <article class="sub_cont_box bg_ff pd_160 pt_120">
            <div class="sub_tabcontent_container sub7_container flex_row fw jc_center center">
                <div class="sub_cont_title sub3_6_cont05_title sub3_3_cont03_title_center ta_c">
                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                    <p class="sub_cont_title_text01 fz_32 lh_14 ls_2 normal m_80 gs_reveal" data-gs-delay="200">
                        핀포인트, 루눌라 레이저 <br>
                        <span class="medium">추천 대상</span>
                    </p>
                </div>
                <div class="sub3_3_cont03_item_box flex_row fw jc_center al_fs">
                    <div class="column_quarter">
                        <div class="p_r sub3_6_cont05_item sub3_3_cont03_item sub3_3_cont03_item01 ta_c gs_reveal" data-gs-delay="200">
                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub3_3_cont03_img01.png" alt="">
                            
                            <div class="sub3_6_cont05_item_text">
                                <p class="fz_18 ls_2 lh_14 normal flex_row fw fd_c jc_center center m_10">01</p>
                                <p class="pc_cont_434 fz_17 ls_2 lh_14 normal flex_row fw fd_c jc_center center">
                                    간염 보균자로 약 복용이 <br>
                                    어려우신 분
                                </p>
                                <p class="m_cont_434 fz_17 ls_2 lh_14 normal flex_row fw fd_c jc_center center">
                                    간염 보균자로 약 복용이 
                                    어려우신 분
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="column_quarter">
                        <div class="p_r sub3_6_cont05_item sub3_3_cont03_item sub3_3_cont03_item02 ta_c gs_reveal" data-gs-delay="400">
                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub3_3_cont03_img02.png" alt="">
                            
                            <div class="sub3_6_cont05_item_text">
                                <p class="fz_18 ls_2 lh_14 normal flex_row fw fd_c jc_center center m_10">02</p>
                                <p class="pc_cont_434 fz_17 ls_2 lh_14 normal flex_row fw fd_c jc_center center">
                                    간 기능 저하를 유발하는 질환이 <br>
                                    있거나 진균제 알레르기가 <br>
                                    있으신 분
                                </p>
                                <p class="m_cont_434 fz_17 ls_2 lh_14 normal flex_row fw fd_c jc_center center">
                                    간 기능 저하를 유발하는 질환이 
                                    있거나 진균제 알레르기가 
                                    있으신 분
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="column_quarter">
                        <div class="p_r sub3_6_cont05_item sub3_3_cont03_item sub3_3_cont03_item03 ta_c gs_reveal" data-gs-delay="600">
                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub3_3_cont03_img03.png" alt="">
                            
                            <div class="sub3_6_cont05_item_text">
                                <p class="fz_18 ls_2 lh_14 normal flex_row fw fd_c jc_center center m_10">03</p>
                                <p class="pc_cont_434 fz_17 ls_2 lh_14 normal flex_row fw fd_c jc_center center">
                                    기존에 이미 다른약을 <br>
                                    많이 복용하고 계신 분 
                                </p>
                                <p class="m_cont_434 fz_17 ls_2 lh_14 normal flex_row fw fd_c jc_center center">
                                    기존에 이미 다른약을 
                                    많이 복용하고 계신 분 
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="column_quarter">
                        <div class="p_r sub3_6_cont05_item sub3_3_cont03_item sub3_3_cont03_item04 ta_c gs_reveal" data-gs-delay="800">
                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub3_3_cont03_img04.png" alt="">
                            
                            <div class="sub3_6_cont05_item_text">
                                <p class="fz_18 ls_2 lh_14 normal flex_row fw fd_c jc_center center m_10">04</p>
                                <p class="pc_cont_434 fz_17 ls_2 lh_14 normal flex_row fw fd_c jc_center center">
                                    꾸준한 약복용이 <br>
                                    불가능하거나 약물 복용이 <br>
                                    힘드신 분 
                                </p>
                                <p class="m_cont_434 fz_17 ls_2 lh_14 normal flex_row fw fd_c jc_center center">
                                    꾸준한 약복용이 
                                    불가능하거나 약물 복용이 
                                    힘드신 분 
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </article>
        
        <article class="sub_cont_box sub2_1_1_cont4_box p_r">
            <div class="sub2_1_1_cont4 sub3_1_cont09 flex_row fw jc_center center">
                <div class="column_half">
                    <div class="sub2_5_2_cont04_left sub3_1_fullcont_left sub3_1_fullcont_left_top flex_row fw fd_c jc_center center">
                        <div class="sub_cont_title ta_c">
                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                            <p class="sub_cont_title_text01 fz_32 lh_14 ls_2 light m_30 gs_reveal" data-gs-delay="200">
                                정확한 치료 설계를 위한 <br>
                                <span class="medium">피부질환 주치의</span> 시스템
                            </p>
                            <p class="pc_cont_434 sub_cont_title_text02 fz_16 lh_14 ls_2 light gs_reveal m_80" data-gs-delay="400">
                                난치성 피부질환은 주치의와 꾸준한 소통과 단계별 치료 플랜, 장기간의 치료 기간이 <br>
                                필요합니다. 인천 오라클피부과는 정확한 치료 설계와 더 나은 치료 결과를 위해 <br>
                                담당의 지정 주치의 시스템을 진행하고 있습니다.
                            </p>
                            <p class="m_cont_434 sub_cont_title_text02 fz_16 lh_14 ls_2 light gs_reveal m_60" data-gs-delay="400">
                                난치성 피부질환은 주치의와 꾸준한 소통과 단계별 치료 플랜, 장기간의 치료 기간이 
                                필요합니다. 인천 오라클피부과는 정확한 치료 설계와 더 나은 치료 결과를 위해 
                                담당의 지정 주치의 시스템을 진행하고 있습니다.
                            </p>
                        </div>
                    </div>
                    <div class="sub2_5_2_cont04_left sub3_1_fullcont_left sub3_1_fullcont_left_bottom flex_row fw fd_c jc_center center">
                        <div class="sub_cont_title ta_l">
                            <ul class="sub2_8_6_cont03_item_ul fz_17 normal ta_l gs_reveal" data-gs-delay="600">
                                <li>
                                    <p>피부과 전문의 1:1 전담 주치의 시스템</p>
                                </li>
                                <li>
                                    <p class="pc_cont_434">남, 녀 피부과 전문의 선택 진료 가능 <br>(* 구월점 한정)</p>
                                    <p class="m_cont_434">남, 녀 피부과 전문의 <br>선택 진료 가능 (* 구월점 한정)</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="column_half">
                    <div class="sub2_1_1_cont4_img">
                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub3_1_cont09_img_right.jpg" alt="">
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
                        <span class="fz_30 ls_2 lh_14 normal">피부질환 진료</span>
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
