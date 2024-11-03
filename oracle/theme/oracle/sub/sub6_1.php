<?php
include_once('./_common.php');
//if (G5_IS_MOBILE) {
//    include_once(G5_MOBILE_PATH.'/index.php');
//    return;
//}

// 웹사이트 타이틀
$g5['title'] = '지방흡입';

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
            <div class="sub_top_view sub6_1_top_view">
                <div class="sub_top_view_bg sub6_1_top_view_bg"></div>
                <div class="sub_top_view_text_wrap sub6_1_top_view_text_wrap ta_c">
                    <div class="sub_top_view_text01 sub6_1_top_view_text01">
                        <p class="sortsmillgoudy fz_30 lh_14 ls_2 sub_text_ani ta_c">
                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub_top_view_text_icon.png" alt="">
                            Liposuction
                        </p>
                    </div>
                    <div class="sub_top_view_text02 sub6_1_top_view_text02 m_20">
                        <p class="fz_40 lh_14 ls_2 medium sub_text_ani">
                            지방흡입
                        </p>
                    </div>
                    <div class="sub_top_view_text03 sub6_1_top_view_text03">
                        <p class="fz_16 lh_14 ls_2 normal sub_text_ani">
                            디테일한 라인 디자인과 고도의 핸드메이드 수술법으로
                        </p>
                    </div>
                    <div class="sub_top_view_text04 sub6_1_top_view_text04">
                        <p class="fz_16 lh_14 ls_2 normal sub_text_ani">
                            아름다운 바디 라인을 완성합니다.
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
        
        <article class="sub_cont_box sub2_1_1_cont1_1_box bg_fa pd_120">
            <div class="sub_tabcontent_container sub7_container flex_row fw sa al_fe">
                <div class="sub_cont_title sub5_1_cont01_title_left title_left">
                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                    <p class="sub_cont_title_text01 fz_32 lh_14 ls_2 light m_30">
                        단순한 날씬함을 넘어, <br>
                        <span class="medium">아름다운 라인을 완성하는 지방흡입술</span>
                    </p>
                    <p class="pc_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light m_30">
                        인천 오라클은 단순한 사이즈 감소를 넘어, <br>
                        본연의 바디 라인 회복에 집중합니다.
                    </p>
                    <p class="m_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light m_30">
                        인천 오라클은 단순한 사이즈 감소를 넘어, 
                        본연의 바디 라인 회복에 집중합니다.
                    </p>
                    <p class="pc_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 light">
                        자연스러운 사이즈 감소와 함께 처지지 않는 탄탄한 바디 라인을 위해, <br>
                        지방성형 전담의가 개개인의 체형 비율을 고려하여 맞춤 디자인을 진행합니다. <br>
                        체형의 심미적 개선과 함께 기능적 측면의 안정성까지 함께 고려한 <br>
                        수술 플랜으로 안전하게 라인 변화를 선사합니다.
                    </p>
                    <p class="m_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 light">
                        자연스러운 사이즈 감소와 함께 처지지 않는 탄탄한 바디 라인을 위해, 
                        지방성형 전담의가 개개인의 체형 비율을 고려하여 맞춤 디자인을 진행합니다. <br>
                        체형의 심미적 개선과 함께 기능적 측면의 안정성까지 함께 고려한 
                        수술 플랜으로 안전하게 라인 변화를 선사합니다.
                    </p>
                </div>
                <div class="sub_cont_doct_img sub6_1_cont01_img img_right ta_r">
                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub6_1_cont01_img01.png" alt="">
                </div>
            </div>
        </article>
        
        <article class="sub_cont_box sub2_1_1_cont1_2_box pd_120">
            <div class="sub_tabcontent_container flex_row fw jc_center al_fs">
                <div class="sub_cont_title sub2_1_1_cont_title_center ta_c">
                    <p class="sub_cont_title_text01 fz_22 lh_14 ls_2 normal gs_reveal" data-gs-delay="200">
                        체형교정
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
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub6_1_ba_slide_img01_b.jpg" alt="">
                                        </div>
                                        <div class="sub2_1_1_ba_slide_img_a <?=($is_member ? '':'blur')?>">
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub6_1_ba_slide_img01_a.jpg" alt="">
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
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub6_1_ba_slide_img02_b.jpg" alt="">
                                        </div>
                                        <div class="sub2_1_1_ba_slide_img_a <?=($is_member ? '':'blur')?>">
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub6_1_ba_slide_img02_a.jpg" alt="">
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
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub6_1_ba_slide_img03_b.jpg" alt="">
                                        </div>
                                        <div class="sub2_1_1_ba_slide_img_a <?=($is_member ? '':'blur')?>">
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub6_1_ba_slide_img03_a.jpg" alt="">
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
            <div class="sub2_1_4_cont3_bg">
                <div class="sub_cont_title sub2_1_4_cont_title_center p_r ta_c pt_100">
                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                    <p class="sub_cont_top_title_text01 sub6_1_cont_top_text fz_30 lh_14 ls_2 light gs_reveal" data-gs-delay="200">
                        5,000건 이상의 수술 노하우가 집약된 <br>
                        인천 오라클만의 <span class="medium">지방흡입 특별함</span>
                    </p>
                </div>
                <div class="sub_tabcontent_container sub2_1_cont03_container flex_row fw sa center">
                    <div class="sub_cont_doct_img sub6_1_cont_img img_left p_r ta_c">
                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub6_1_cont03_img01.png" alt="">
                    </div>
                    <div class="sub_cont_title sub2_5_1_cont03_title_right title_right">
                        <p class="sub_cont_title_text01 sortsmillgoudy fz_20 lh_14 ls_2 light gs_reveal" data-gs-delay="200">
                            Oracle Point.01
                        </p>
                        <p class="sub_cont_title_text02 fz_32 lh_14 ls_2 light m_40 gs_reveal" data-gs-delay="400">
                            <span class="medium">순수 지방</span>만 제대로 흡입
                        </p>
                        <p class="sub_cont_title_text03 fz_16 lh_16 ls_2 light gs_reveal m_30" data-gs-delay="600">
                            많이 뽑는 것보다 중요한 것은, <span class="normal">제대로 뽑는 것.</span>
                        </p>
                        <p class="pc_cont_434 sub_cont_title_text04 fz_16 lh_16 ls_2 light gs_reveal" data-gs-delay="800">
                            인천 오라클의 지방흡입은 안전한 수술을 위해 수술 시 <br>
                            투메센트 용액을 시술 부위에 넣은 후 추출을 진행하여 <br>
                            순수 지방의 흡입률을 높입니다.
                        </p>
                        <p class="m_cont_434 sub_cont_title_text04 fz_16 lh_16 ls_2 light gs_reveal" data-gs-delay="800">
                            인천 오라클의 지방흡입은 안전한 수술을 위해 수술 시 
                            투메센트 용액을 시술 부위에 넣은 후 추출을 진행하여 
                            순수 지방의 흡입률을 높입니다.
                        </p>
                    </div>
                </div>
                
                <div class="sub_tabcontent_container flex_row fw sa center">
                    <div class="sub_cont_title sub2_8_1_tabcontent04_title_left title_left">
                        <p class="sub_cont_title_text01 sortsmillgoudy fz_20 lh_14 ls_2 light gs_reveal" data-gs-delay="200">
                            Oracle Point.02
                        </p>
                        <p class="sub_cont_title_text02 fz_32 lh_14 ls_2 light m_40 gs_reveal" data-gs-delay="400">
                            일률적인 지방흡입은 No, <br>
                            <span class="medium">고민별로 맞춤 장비 사용</span>
                        </p>
                        <p class="pc_cont_434 sub_cont_title_text04 fz_16 lh_16 ls_2 normal gs_reveal m_30" data-gs-delay="600">
                            개인마다 다른 체형, 부위마다 다른 고민은 <br>
                            다른 장비로 다르게 접근해야 합니다.
                        </p>
                        <p class="m_cont_434 sub_cont_title_text04 fz_16 lh_16 ls_2 normal gs_reveal m_30" data-gs-delay="600">
                            개인마다 다른 체형, 부위마다 다른 고민은 
                            다른 장비로 다르게 접근해야 합니다.
                        </p>
                        <p class="pc_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 normal gs_reveal" data-gs-delay="800">
                            인천 오라클은 환자의 체형 고민에 따라, 부위별 특징에 따라 <br>
                            적합한 장비를 선택하여 수술의 완성도와 환자의 만족도를 높입니다.
                        </p>
                        <p class="m_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 normal gs_reveal" data-gs-delay="800">
                            인천 오라클은 환자의 체형 고민에 따라, 부위별 특징에 따라 
                            적합한 장비를 선택하여 수술의 완성도와 환자의 만족도를 높입니다.
                        </p>
                    </div>
                    <div class="sub_cont_doct_img sub6_1_cont04_img sub6_1_cont_img img_right p_r ta_c">
                        <div class="sub6_1_cont04_item flex_row jc_center center m_40">
                            <div class="sub6_1_cont04_item_img sub6_1_cont04_item_img01">
                                <img src="<?php echo G5_THEME_URL?>/sub/img/sub6_1_cont04_img01.png" alt="">
                                <p class="pc_cont_434 fz_16 ls_2 lh_16 light ta_c">
                                    단단한 섬유질이 많고 <br>
                                    볼륨이 과도한 부위는 <br>
                                    PAL 방식의 <span class="fz_20 medium lh_14">리포슬림</span>
                                </p>
                                <p class="m_cont_434 fz_16 ls_2 lh_16 light ta_c">
                                    단단한 섬유질이 많고 
                                    볼륨이 과도한 부위는 
                                    PAL 방식의 <span class="fz_20 medium lh_14">리포슬림</span>
                                </p>
                            </div>
                            <div class="sub6_1_cont04_item_img sub6_1_cont04_item_img02">
                                <img src="<?php echo G5_THEME_URL?>/sub/img/sub6_1_cont04_img02.png" alt="">
                                <p class="pc_cont_434 fz_16 ls_2 lh_16 light ta_c">
                                    처짐이 동반된 부위는 <br>
                                    선택적 지방파괴와 리프팅이 <br>
                                    가능한 <span class="fz_20 medium lh_14">울트라젯</span>
                                </p>
                                <p class="m_cont_434 fz_16 ls_2 lh_16 light ta_c">
                                    처짐이 동반된 부위는 
                                    선택적 지방파괴와 리프팅이 
                                    가능한 <span class="fz_20 medium lh_14">울트라젯</span>
                                </p>
                            </div>
                            <div class="sub6_1_cont04_item_img sub6_1_cont04_item_img03">
                                <img src="<?php echo G5_THEME_URL?>/sub/img/sub6_1_cont04_img03.png" alt="">
                                <p class="pc_cont_434 fz_16 ls_2 lh_16 light ta_c">
                                    늘어진 피부, 바디 타이트닝이 <br>
                                    필요한 부위는 지방용해와 <br>
                                    타이트닝이 가능한 <span class="fz_20 medium lh_14">비너스</span>
                                </p>
                                <p class="m_cont_434 fz_16 ls_2 lh_16 light ta_c">
                                    늘어진 피부, 바디 타이트닝이 
                                    필요한 부위는 지방용해와 
                                    타이트닝이 가능한 <span class="fz_20 medium lh_14">비너스</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="sub_tabcontent_container sub2_1_cont03_container flex_row fw sa center">
                    <div class="sub_cont_doct_img sub6_1_cont05_img sub6_1_cont_img img_left p_r ta_c">
                        <div class="sub6_1_cont05_item flex_row jc_center center">
                            <div class="sub6_1_cont05_item_img sub6_1_cont05_item_img01">
                                <img src="<?php echo G5_THEME_URL?>/sub/img/sub6_1_cont05_img01.png" alt="">
                                <p class="fz_16 ls_2 lh_14 light ta_c">
                                    2-3mm 이내의 <br>
                                    <span class="medium">미세 절개 테크닉</span>
                                </p>
                            </div>
                            <div class="sub6_1_cont05_item_img sub6_1_cont05_item_img02">
                                <img src="<?php echo G5_THEME_URL?>/sub/img/sub6_1_cont05_img02.png" alt="">
                                <p class="fz_16 ls_2 lh_14 light ta_c">
                                    핸드메이드 방식의 <br>
                                    <span class="medium">지방흡입 테크닉</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="sub_cont_title sub2_8_1_tabcontent04_title_right title_right">
                        <p class="sub_cont_title_text01 sortsmillgoudy fz_20 lh_14 ls_2 light gs_reveal" data-gs-delay="200">
                            Oracle Point.03
                        </p>
                        <p class="sub_cont_title_text02 fz_32 lh_14 ls_2 light m_40 gs_reveal" data-gs-delay="400">
                            지방흡입의 편견을 깨는 <br>
                            <span class="medium">숙련된 테크놀로지</span>
                        </p>
                        <p class="sub_cont_title_text03 fz_16 lh_16 ls_2 normal gs_reveal m_30" data-gs-delay="600">
                            지방흡입은 반드시 흉터가 남는다? <br>
                            지방흡입 후에는 살이 처진다?
                        </p>
                        <p class="pc_cont_434 sub_cont_title_text04 fz_16 lh_16 ls_2 normal gs_reveal" data-gs-delay="800">
                            정답은 <span class="sortsmillgoudy fz_24 medium lh_14">No</span>. <br>
                            인천 오라클은 풍부한 경험의 지방성형 전담의가 2-3mm 이내의 <br>
                            미세 절개 테크닉과 고도의 핸드메이드 지방흡입 테크닉으로 <br>
                            수술 후 흉터와 피부 처짐을 방지합니다.
                        </p>
                        <p class="m_cont_434 sub_cont_title_text04 fz_16 lh_16 ls_2 normal gs_reveal" data-gs-delay="800">
                            정답은 No. <br>
                            인천 오라클은 풍부한 경험의 지방성형 전담의가 2-3mm 이내의 
                            미세 절개 테크닉과 고도의 핸드메이드 지방흡입 테크닉으로 
                            수술 후 흉터와 피부 처짐을 방지합니다.
                        </p>
                    </div>
                </div>
                
                <div class="container-1300 sub6_1_cont06_container flex_row fw jc_center center">
                    <div class="sub_cont_title sub2_8_1_cont04_title_center p_r ta_c m_20">
                        <p class="sub_cont_title_text01 sortsmillgoudy fz_20 lh_14 ls_2 light gs_reveal" data-gs-delay="200">
                            Oracle Point.04
                        </p>
                        <p class="sub_cont_title_text02 fz_32 lh_14 ls_2 light m_60 gs_reveal" data-gs-delay="400">
                            환자가 안심할 수 있는 <br>
                            <span class="medium">오라클 지방흡입 프로세스</span>
                        </p>
                    </div>
                    <div class="sub_cont_doct_img sub6_1_cont06_img p_r ta_c m_20">
                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub6_1_cont06_img01.png" alt="">
                    </div>
                    <div class="sub6_1_cont06_item_box flex_row fw sa al_fs">
                        <div class="sub6_1_cont06_item sub6_1_cont06_item01 ta_c">
                            <p class="sub6_1_cont06_item_text01 sortsmillgoudy fz_20 ls_2 lh_16">Step 1</p>
                            <p class="sub6_1_cont06_item_text02 fz_20 ls_2 normal lh_16 m_10">수술 전, 체지방 분석</p>
                            <p class="pc_cont sub6_1_cont06_item_text03 fz_16 ls_2 normal lh_16">
                                인바디 측정을 통해 체지방량과 <br>
                                BMI 지수를 정밀하게 분석해 <br>
                                수술 계획을 수립합니다.
                            </p>
                            <p class="m_cont sub6_1_cont06_item_text03 fz_16 ls_2 normal lh_16">
                                인바디 측정을 통해 체지방량과 
                                BMI 지수를 정밀하게 분석해 
                                수술 계획을 수립합니다.
                            </p>
                        </div>
                        <div class="sub6_1_cont06_item sub6_1_cont06_item02 ta_c">
                            <p class="sub6_1_cont06_item_text01 sortsmillgoudy fz_20 ls_2 lh_16">Step 2</p>
                            <p class="sub6_1_cont06_item_text02 fz_20 ls_2 normal lh_16 m_10">안심 수면마취 시스템</p>
                            <p class="pc_cont sub6_1_cont06_item_text03 fz_16 ls_2 normal lh_16">
                                다년간의 수술경험을 기반으로 <br>
                                완성된 수면마취 시스템으로 <br>
                                안전하게 수술합니다.
                            </p>
                            <p class="m_cont sub6_1_cont06_item_text03 fz_16 ls_2 normal lh_16">
                                다년간의 수술경험을 기반으로 
                                완성된 수면마취 시스템으로 
                                안전하게 수술합니다.
                            </p>
                        </div>
                        <div class="sub6_1_cont06_item sub6_1_cont06_item03 ta_c">
                            <p class="sub6_1_cont06_item_text01 sortsmillgoudy fz_20 ls_2 lh_16">Step 3</p>
                            <p class="sub6_1_cont06_item_text02 fz_20 ls_2 normal lh_16 m_10">핸드메이드 지방흡입</p>
                            <p class="pc_cont sub6_1_cont06_item_text03 fz_16 ls_2 normal lh_16">
                                정교하고 섬세한 핸드메이드 <br>
                                지방흡입으로 순수지방만 <br>
                                안전하게 추출합니다.
                            </p>
                            <p class="m_cont sub6_1_cont06_item_text03 fz_16 ls_2 normal lh_16">
                                정교하고 섬세한 핸드메이드 
                                지방흡입으로 순수지방만 
                                안전하게 추출합니다.
                            </p>
                        </div>
                        <div class="sub6_1_cont06_item sub6_1_cont06_item04 ta_c">
                            <p class="sub6_1_cont06_item_text01 sortsmillgoudy fz_20 ls_2 lh_16">Step 4</p>
                            <p class="sub6_1_cont06_item_text02 fz_20 ls_2 normal lh_16 m_10">수술 후, 고주파 관리</p>
                            <p class="pc_cont sub6_1_cont06_item_text03 fz_16 ls_2 normal lh_16">
                                피부 처짐을 방지하고 <br>
                                빠른 회복을 돕습니다. <br>
                                (*별도 비용이 추가될 수 있음)
                            </p>
                            <p class="m_cont sub6_1_cont06_item_text03 fz_16 ls_2 normal lh_16">
                                피부 처짐을 방지하고 
                                빠른 회복을 돕습니다. 
                                (*별도 비용이 추가될 수 있음)
                            </p>
                        </div>
                        <div class="sub6_1_cont06_item sub6_1_cont06_item05 ta_c">
                            <p class="sub6_1_cont06_item_text01 sortsmillgoudy fz_20 ls_2 lh_16">Step 5</p>
                            <p class="sub6_1_cont06_item_text02 fz_20 ls_2 normal lh_16 m_10">전담의 책임 사후관리</p>
                            <p class="pc_cont sub6_1_cont06_item_text03 fz_16 ls_2 normal lh_16">
                                1:1 지방성형 전담의가 <br>
                                수술 후 경과 체크까지 <br>
                                책임지고 진행합니다.
                            </p>
                            <p class="m_cont sub6_1_cont06_item_text03 fz_16 ls_2 normal lh_16">
                                1:1 지방성형 전담의가 
                                수술 후 경과 체크까지 
                                책임지고 진행합니다.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </article>
        
        <!-- 
        <article class="sub_cont_box sub2_2_1_cont04_box p_r bg_fa pd_60 pt_160">
            <div class="container-1300 sub2_2_1_cont05_container">
                <div class="sub_click_btn open m_20" id="sub_click_btn1">
                    <p class="sub_cont_title_text01 sortsmillgoudy fz_20 lh_16 ls_2 light">
                        Liposuction
                    </p>
                    <p class="sub_cont_title_text02 fz_32 lh_16 ls_2 light">
                        <span class="medium">지방흡입 후 주의사항</span>
                    </p>
                </div>
                <div class="sub2_2_1_cont05_text sub6_1_cont05_text open li_5 sub_click_box" id="sub_click_box1">
                    <ul class="sub2_2_1_cont05_item_ul fz_17 normal ta_l">
                        <li>
                            <p>수술 후 24시간~3일 정도 수술 부위에 멍이 들고 부기가 있을 수 있습니다.</p>
                        </li>
                        <li>
                            <p>붕대를 제거 후 부기가 가라앉고 자리를 잡을 수 있도록 2~3개월 정도 압박붕대를 착용해 주세요.</p>
                        </li>
                        <li>
                            <p>처방한 약을 복용하고 수술 당일은 충분한 휴식을 취해 주세요.</p>
                        </li>
                        <li>
                            <p>음주와 흡연은 회복을 방해하므로 4주 후부터 하시는 것이 좋습니다.</p>
                        </li>
                        <li>
                            <p>샤워는 잘 아물 수 있도록 1주일 후 부터 하는 것이 좋습니다.</p>
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
                        <span class="fz_30 ls_2 lh_14 normal">비만/체형 진료</span>
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
