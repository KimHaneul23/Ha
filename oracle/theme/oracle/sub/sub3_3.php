<?php
include_once('./_common.php');
//if (G5_IS_MOBILE) {
//    include_once(G5_MOBILE_PATH.'/index.php');
//    return;
//}

// 웹사이트 타이틀
$g5['title'] = '아토피피부염';

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
            <div class="sub_top_view sub3_3_top_view">
                <div class="sub_top_view_bg sub3_3_top_view_bg"></div>
                <div class="sub_top_view_text_wrap sub3_3_top_view_text_wrap ta_c">
                    <div class="sub_top_view_text01 sub3_3_top_view_text01">
                        <p class="sortsmillgoudy fz_30 lh_14 ls_2 sub_text_ani ta_c">
                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub_top_view_text_icon.png" alt="">
                            Atopic Dermatitis
                        </p>
                    </div>
                    <div class="sub_top_view_text02 sub3_3_top_view_text02 m_20">
                        <p class="c-w fz_40 lh_14 ls_2 medium sub_text_ani">
                            아토피피부염
                        </p>
                    </div>
                    <div class="sub_top_view_text03 sub3_3_top_view_text03">
                        <p class="c-w fz_16 lh_14 ls_2 normal sub_text_ani">
                            가렵고 괴로운 만성재발성 습진질환 아토피,
                        </p>
                    </div>
                    <div class="sub_top_view_text04 sub3_3_top_view_text04">
                        <p class="c-w fz_16 lh_14 ls_2 normal sub_text_ani">
                            피부장벽까지 회복하는 연령별, 원인별 맞춤 치료
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
                <div class="sub_cont_title sub3_1_cont01_title_left title_left">
                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                    <p class="sub_cont_title_text01 fz_32 lh_14 ls_2 light m_40">
                        아이부터 어른까지, <br>
                        <span class="medium">아토피의 원인을 해결하는 근본 치료</span>
                    </p>
                    <p class="pc_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 light">
                        아토피피부염은 만성재발성 습진 질환으로 매우 다양한 증상이 나타나며, <br>
                        원인 또한 복합적입니다. <br>
                        인천 오라클피부과의 아토피피부염 치료 프로그램은 치료 경험이 풍부한 <br>
                        피부과 전문의가 다양한 원인부터 정확하게 파악한 뒤 그에 맞춘 치료를 <br>
                        진행하여 근본적으로 개선하고, 피부 장벽을 튼튼하게 개선합니다.
                    </p>
                    <p class="m_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 light">
                        아토피피부염은 만성재발성 습진 질환으로 매우 다양한 증상이 나타나며, 
                        원인 또한 복합적입니다. <br>
                        인천 오라클피부과의 아토피피부염 치료 프로그램은 치료 경험이 풍부한 
                        피부과 전문의가 다양한 원인부터 정확하게 파악한 뒤 그에 맞춘 치료를 
                        진행하여 근본적으로 개선하고, 피부 장벽을 튼튼하게 개선합니다.
                    </p>
                </div>
                <div class="sub_cont_doct_img sub3_1_cont01_img img_right ta_r">
                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub3_3_cont01_img01.png" alt="">
                </div>
            </div>
        </article>
        
        <!-- 
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
                                <a href="<?php echo G5_THEME_URL?>/sub/sub8_2.php" target="_blank">
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
        
        <article class="sub_cont_box bg_ff pd_160">
            <div class="sub_tabcontent_container sub7_container flex_row fw jc_center center">
                <div class="sub_cont_title sub3_3_cont03_title_center ta_c pt_100">
                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                    <p class="sub_cont_title_text01 fz_32 lh_14 ls_2 normal m_80 gs_reveal" data-gs-delay="200">
                        아토피 원인
                    </p>
                </div>
                <div class="sub3_3_cont03_item_box flex_row fw jc_center al_fs m_60">
                    <div class="column_quarter">
                        <div class="p_r sub3_3_cont03_item sub3_3_cont03_item01 ta_c gs_reveal" data-gs-delay="200">
                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub3_3_cont03_img01.png" alt="">
                            
                            <p class="sub3_3_cont03_item_text fz_18 ls_2 lh_14 normal flex_row fw fd_c jc_center center">피부장벽 이상</p>
                        </div>
                    </div>
                    <div class="column_quarter">
                        <div class="p_r sub3_3_cont03_item sub3_3_cont03_item02 ta_c gs_reveal" data-gs-delay="400">
                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub3_3_cont03_img02.png" alt="">
                            
                            <p class="sub3_3_cont03_item_text fz_18 ls_2 lh_14 normal flex_row fw fd_c jc_center center">유전학적 요인</p>
                        </div>
                    </div>
                    <div class="column_quarter">
                        <div class="p_r sub3_3_cont03_item sub3_3_cont03_item03 ta_c gs_reveal" data-gs-delay="600">
                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub3_3_cont03_img03.png" alt="">
                            
                            <p class="sub3_3_cont03_item_text fz_18 ls_2 lh_14 normal flex_row fw fd_c jc_center center">면역학적 요인</p>
                        </div>
                    </div>
                    <div class="column_quarter">
                        <div class="p_r sub3_3_cont03_item sub3_3_cont03_item04 ta_c gs_reveal" data-gs-delay="800">
                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub3_3_cont03_img04.png" alt="">
                            
                            <p class="sub3_3_cont03_item_text fz_18 ls_2 lh_14 normal flex_row fw fd_c jc_center center">환경적 요인</p>
                        </div>
                    </div>
                </div>
                <div class="sub_cont_title sub3_3_cont03_title_center ta_c">
                    <p class="pc_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light gs_reveal m_30" data-gs-delay="200">
                        아토피 피부염의 원인은 매우 다양해서 특정하기 어렵습니다. <br>
                        따라서 치료 경험이 많은 피부과 전문의에게 원인을 제대로 진단받고 <br>
                        그에 맞는 꾸준한 관리를 받는 것이 중요합니다.
                    </p>
                    <p class="m_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light gs_reveal m_30" data-gs-delay="200">
                        아토피 피부염의 원인은 매우 다양해서 특정하기 어렵습니다. <br>
                        따라서 치료 경험이 많은 피부과 전문의에게 원인을 제대로 진단받고 
                        그에 맞는 꾸준한 관리를 받는 것이 중요합니다.
                    </p>
                    <p class="pc_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light gs_reveal" data-gs-delay="400">
                        인천 오라클피부과는 10년 이상의 아토피 치료 경험을 보유한 <br>
                        의료진이 직접 원인 분석부터 치료까지 함께합니다.
                    </p>
                    <p class="m_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light gs_reveal" data-gs-delay="400">
                        인천 오라클피부과는 10년 이상의 아토피 치료 경험을 보유한 의료진이 직접 원인 분석부터 치료까지 함께합니다.
                    </p>
                </div>
            </div>
        </article>
        
        <article class="sub_cont_box sub3_2_cont03_box bg_ff pd_120">
            <div class="sub_tabcontent_container sub7_container flex_row fw jc_center center">
                <div class="sub_cont_title sub3_2_cont03_title_center ta_c">
                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                    <p class="sub_cont_title_text01 fz_32 lh_14 ls_2 normal m_80 gs_reveal" data-gs-delay="200">
                        연령별 아토피 증상
                    </p>
                </div>
                <div class="sub3_3_cont04_box flex_row fw jc_center al_fs gs_reveal" data-gs-delay="400">
                    <div class="column_half_40">
                        <div class="sub3_3_cont04_item sub3_3_cont04_item01 ta_c">
                            <div class="sub3_3_cont04_item_img sub3_3_cont04_item_img01">
                                <img src="<?php echo G5_THEME_URL?>/sub/img/sub3_3_cont04_item01.png" alt="">
                            </div>
                            <div class="flex_row jc_center center sub3_3_cont04_item_text sub3_3_cont04_item_text01 sub3_3_cont04_item_text01_1">
                                <p class="fz_19 ls_2 lh_16 normal">
                                    유아기 아토피
                                </p>
                            </div>
                            <div class="flex_row jc_center center sub3_3_cont04_item_text sub3_3_cont04_item_text02">
                                <ul class="sub3_2_cont03_item_ul fz_16 ls_2 lh_14 normal ta_l">
                                    <li class="m_20">
                                        <p class="pc_cont">
                                            생후 2~6개월 사이, 머리 중심으로 생기다가 <br>
                                            점차 전신으로 퍼져나감
                                        </p>
                                        <p class="m_cont">
                                            생후 2~6개월 사이, 머리 중심으로 생기다가 
                                            점차 전신으로 퍼져나감
                                        </p>
                                    </li>
                                    <li>
                                        <p class="pc_cont">
                                            18~24개월로 갈수록 팔 접히는 부위, 오금, 귓볼, <br>
                                            사타구니로 증상이 퍼져나감
                                        </p>
                                        <p class="m_cont">
                                            18~24개월로 갈수록 팔 접히는 부위, 오금, 귓볼, 
                                            사타구니로 증상이 퍼져나감
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="column_half_40">
                        <div class="sub3_3_cont04_item sub3_3_cont04_item02 ta_c">
                            <div class="sub3_3_cont04_item_img sub3_3_cont04_item_img02">
                                <img src="<?php echo G5_THEME_URL?>/sub/img/sub3_3_cont04_item02.png" alt="">
                            </div>
                            <div class="flex_row jc_center center sub3_3_cont04_item_text sub3_3_cont04_item_text01 sub3_3_cont04_item_text01_2">
                                <p class="fz_19 ls_2 lh_16 normal">
                                    성인 아토피
                                </p>
                            </div>
                            <div class="flex_row jc_center center sub3_3_cont04_item_text sub3_3_cont04_item_text02">
                                <ul class="sub3_2_cont03_item_ul fz_16 ls_2 lh_14 normal ta_l">
                                    <li class="m_20">
                                        <p class="pc_cont">
                                            건조하고 가려움이 심하며 거칠고 <br>
                                            딱딱해지거나 피부가 갈라지고 짓무름
                                        </p>
                                        <p class="m_cont">
                                            건조하고 가려움이 심하며 거칠고 
                                            딱딱해지거나 피부가 갈라지고 짓무름
                                        </p>
                                    </li>
                                    <li>
                                        <p class="pc_cont">
                                            접히는 부위 피부가 갈라지고 짓무르기도 하며, <br>
                                            노출되기 쉬운 얼굴이나 목, 가슴 등에 발생
                                        </p>
                                        <p class="m_cont">
                                            접히는 부위 피부가 갈라지고 짓무르기도 하며, 
                                            노출되기 쉬운 얼굴이나 목, 가슴 등에 발생
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </article>
        
        <article class="sub_cont_box img sub3_3_cont05_wrap pd_160">
            <div class="container-1200 flex_row fw jc_center center">
                <div class="sub_cont_title sub2_1_4_cont_title_center p_r ta_c">
                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                    <p class="sub_cont_top_title_text01 sub3_3_cont_top_title_text01 fz_30 lh_14 ls_2 light m_80 gs_reveal" data-gs-delay="200">
                        안전성과 효과가 입증된 <br>
                        <span class="medium">고효율 아토피 치료 프로그램</span>
                    </p>
                </div>
                <div class="sub2_5_3_cont03_box sub3_3_cont05_box01 p_r flex_row fw jc_center center m_80">
                    <div class="sub_cont_doct_img sub3_3_cont05_img img_left p_r ta_r gs_reveal" data-gs-delay="200">
                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub3_3_cont05_img01.png" alt="">
                    </div>
                    <div class="sub_cont_title sub3_3_cont05_title_right title_right">
                        <p class="sub_cont_title_text02 fz_23 lh_14 ls_2 light m_20 gs_reveal" data-gs-delay="400">
                            <span class="medium">엑시머 레이저 </span>
                        </p>
                        <ul class="sub2_8_6_cont03_item_ul fz_16 normal ta_l gs_reveal" data-gs-delay="600">
                            <li>
                                <p>병변 부위에만 국소적으로 치료 가능</p>
                            </li>
                            <li>
                                <p>초기 치료 반응이 빠른 치료법</p>
                            </li>
                            <li>
                                <p>짧은 치료 시간 & 통증없이 간단한 치료</p>
                            </li>
                            <li>
                                <p>소아, 임산부, 노인도 가능한 안전한 치료</p>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <div class="sub2_5_3_cont03_box sub3_3_cont05_box02 p_r flex_row fw jc_center center m_80">
                    <div class="sub_cont_doct_img sub3_3_cont05_img img_left p_r ta_r gs_reveal" data-gs-delay="200">
                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub3_3_cont05_img02.png" alt="">
                    </div>
                    <div class="sub_cont_title sub3_3_cont05_title_right title_right">
                        <p class="sub_cont_title_text02 fz_23 lh_14 ls_2 light m_20 gs_reveal" data-gs-delay="400">
                            <span class="medium">광선치료</span>
                        </p>
                        <ul class="sub2_8_6_cont03_item_ul fz_16 normal ta_l gs_reveal" data-gs-delay="600">
                            <li>
                                <p>넓은 면적의 병변에 전반적인 치료 가능</p>
                            </li>
                            <li>
                                <p>수분 이내 통증 없이 간단한 치료 가능</p>
                            </li>
                            <li>
                                <p>소아, 임산부, 노인도 가능한 안전한 치료</p>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <div class="sub2_5_3_cont03_box sub3_3_cont05_box03 p_r flex_row fw jc_center center">
                    <div class="sub_cont_doct_img sub3_3_cont05_img img_left p_r ta_r gs_reveal" data-gs-delay="200">
                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub3_3_cont05_img03.png" alt="">
                    </div>
                    <div class="sub_cont_title sub3_3_cont05_title_right title_right">
                        <p class="sub_cont_title_text02 fz_23 lh_14 ls_2 light m_20 gs_reveal" data-gs-delay="400">
                            <span class="medium">약물치료</span>
                        </p>
                        <ul class="sub2_8_6_cont03_item_ul fz_16 normal ta_l gs_reveal" data-gs-delay="600">
                            <li>
                                <p>바르는 약과 재생크림을 자주 도포하여 충분한 피부 보습</p>
                            </li>
                            <li>
                                <p>피부과 전문의의 1:1 상담 후  먹는 약 복용</p>
                            </li>
                        </ul>
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
                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub3_3_cont09_img_right.jpg" alt="">
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
