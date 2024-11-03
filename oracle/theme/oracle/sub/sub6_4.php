<?php
include_once('./_common.php');
//if (G5_IS_MOBILE) {
//    include_once(G5_MOBILE_PATH.'/index.php');
//    return;
//}

// 웹사이트 타이틀
$g5['title'] = '호르몬 다이어트';

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
            <div class="sub_top_view sub6_4_top_view">
                <div class="sub_top_view_bg sub6_4_top_view_bg"></div>
                <div class="sub_top_view_text_wrap sub6_4_top_view_text_wrap ta_c">
                    <div class="sub_top_view_text01 sub6_4_top_view_text01">
                        <p class="sortsmillgoudy fz_30 lh_14 ls_2 sub_text_ani ta_c">
                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub_top_view_text_icon.png" alt="">
                            HCG Diet Program
                        </p>
                    </div>
                    <div class="sub_top_view_text02 sub6_4_top_view_text02 m_20">
                        <p class="c-w fz_40 lh_14 ls_2 medium sub_text_ani">
                            호르몬 다이어트
                        </p>
                    </div>
                    <div class="sub_top_view_text03 sub6_4_top_view_text03">
                        <p class="c-w fz_16 lh_14 ls_2 normal sub_text_ani">
                            HCG 호르몬을 투여해 체내의 저장 지방을 먼저 연소하도록
                        </p>
                    </div>
                    <div class="sub_top_view_text04 sub6_4_top_view_text04">
                        <p class="c-w fz_16 lh_14 ls_2 normal sub_text_ani">
                            몸의 에너지 소모 패턴을 변화시키는 다이어트 프로그램입니다.
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
                        볼륨은 유지하고 군살만 제거하는 <br>
                        <span class="medium">호르몬 다이어트 프로그램</span>
                    </p>
                    <p class="pc_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 medium m_30">
                        인천 오라클의 호르몬 다이어트는 우리 몸의 체성분을 <br>
                        변화시키는 단기 프로그램으로, HCG 호르몬을 투여하여 <br>
                        불필요한 저장 지방을 연소합니다.
                    </p>
                    <p class="m_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 medium m_30">
                        인천 오라클의 호르몬 다이어트는 우리 몸의 체성분을 
                        변화시키는 단기 프로그램으로, HCG 호르몬을 투여하여 
                        불필요한 저장 지방을 연소합니다.
                    </p>
                    <p class="pc_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light">
                        얼굴과 가슴, 엉덩이 등 필요한 구조 지방과 근육은 유지하면서 <br>
                        군살만 정리하여 볼륨은 유지하고 바디 라인만 슬림하게 잡아줍니다.
                    </p>
                    <p class="m_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light">
                        얼굴과 가슴, 엉덩이 등 필요한 구조 지방과 근육은 유지하면서 
                        군살만 정리하여 볼륨은 유지하고 바디 라인만 슬림하게 잡아줍니다.
                    </p>
                </div>
                <div class="sub_cont_doct_img sub5_1_cont01_img img_right ta_r">
                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub6_4_cont01_img01.png" alt="">
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
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub6_4_ba_slide_img01_b.jpg" alt="">
                                        </div>
                                        <div class="sub2_1_1_ba_slide_img_a <?=($is_member ? '':'blur')?>">
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub6_4_ba_slide_img01_a.jpg" alt="">
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
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub6_4_ba_slide_img02_b.jpg" alt="">
                                        </div>
                                        <div class="sub2_1_1_ba_slide_img_a <?=($is_member ? '':'blur')?>">
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub6_4_ba_slide_img02_a.jpg" alt="">
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
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub6_4_ba_slide_img03_b.jpg" alt="">
                                        </div>
                                        <div class="sub2_1_1_ba_slide_img_a <?=($is_member ? '':'blur')?>">
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub6_4_ba_slide_img03_a.jpg" alt="">
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
                    <p class="sub_cont_top_title_text01 fz_30 lh_14 ls_2 light gs_reveal" data-gs-delay="200">
                        오라클만의 <span class="medium">호르몬 다이어트 특별함</span>
                    </p>
                </div>
                <div class="sub_tabcontent_container flex_row fw sa al_fe">
                    <div class="sub_cont_doct_img sub6_1_cont01_img img_left p_r ta_c">
                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub6_4_cont03_img01.png" alt="">
                    </div>
                    <div class="sub_cont_title sub2_5_1_cont03_title_right title_right">
                        <p class="sub_cont_title_text01 sortsmillgoudy fz_20 lh_14 ls_2 light gs_reveal" data-gs-delay="200">
                            Oracle Point.01
                        </p>
                        <p class="sub_cont_title_text02 fz_32 lh_14 ls_2 light m_40 gs_reveal" data-gs-delay="400">
                            저장 지방과 독소를 배출하는 <br>
                            <span class="medium">체지방 리셋 호르몬</span>
                        </p>
                        <p class="pc_cont_434 sub_cont_title_text04 fz_16 lh_16 ls_2 normal gs_reveal m_30" style="color:#7c7c7c;" data-gs-delay="600">
                            HCG 호르몬을 몸 속에 흐르게 하고 하루 섭취 칼로리를  500kal로 <br>
                            제한하여 신체가 영양분의 공급이 부족하다고 느끼도록 합니다. <br>
                            이러한 방법으로 그동안 과도하게 축적되었던 저장 지방을 연소시켜 <br>
                            체중 감소를 유도합니다.
                        </p>
                        <p class="m_cont_434 sub_cont_title_text04 fz_16 lh_16 ls_2 normal gs_reveal m_30" style="color:#7c7c7c;" data-gs-delay="600">
                            HCG 호르몬을 몸 속에 흐르게 하고 하루 섭취 칼로리를  500kal로 
                            제한하여 신체가 영양분의 공급이 부족하다고 느끼도록 합니다. 
                            이러한 방법으로 그동안 과도하게 축적되었던 저장 지방을 연소시켜 
                            체중 감소를 유도합니다.
                        </p>
                        <p class="pc_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 medium gs_reveal" data-gs-delay="800">
                            체내의 독소부터 오랫동안 쌓여 있던 불필요한 지방까지 제거하여 <br>
                            몸 속을 건강하게 리셋시키고, 다이어트 효과를 선사합니다.
                        </p>
                        <p class="m_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 medium gs_reveal" data-gs-delay="800">
                            체내의 독소부터 오랫동안 쌓여 있던 불필요한 지방까지 제거하여 
                            몸 속을 건강하게 리셋시키고, 다이어트 효과를 선사합니다.
                        </p>
                    </div>
                </div>
                
                <div class="container-1300 sub6_1_cont06_container flex_row fw jc_center center">
                    <div class="sub_cont_title sub6_4_cont_title sub2_8_1_cont04_title_center p_r ta_c m_20">
                        <p class="sub_cont_title_text01 sortsmillgoudy fz_20 lh_14 ls_2 light gs_reveal" data-gs-delay="200">
                            Oracle Point.02
                        </p>
                        <p class="sub_cont_title_text02 fz_32 lh_14 ls_2 light m_40 gs_reveal" data-gs-delay="400">
                            쉽게 요요가 오지 않도록, <br>
                            <span class="medium">에너지 소모 패턴 체인지</span>
                        </p>
                        <p class="pc_cont_434 sub_cont_title_text04 fz_16 lh_16 ls_2 normal gs_reveal m_40" style="color:#7c7c7c;" data-gs-delay="600">
                            호르몬 다이어트는 단기간에 5%~20% 사이의 체중 감량 효과를 유도하지만, <br>
                            체성분과 에너지 소모 패턴을 변화시켜 쉽게 요요가 찾아오지 않습니다.
                        </p>
                        <p class="m_cont_434 sub_cont_title_text04 fz_16 lh_16 ls_2 normal gs_reveal m_40" style="color:#7c7c7c;" data-gs-delay="600">
                            호르몬 다이어트는 단기간에 5%~20% 사이의 체중 감량 효과를 유도하지만, 
                            체성분과 에너지 소모 패턴을 변화시켜 쉽게 요요가 찾아오지 않습니다.
                        </p>
                    </div>
                    <div class="sub6_4_cont04_item_box flex_row fw jc_center al_fs">
                        <div class="sub6_4_cont04_item sub6_4_cont04_item01 ta_c flex_row fd_c jc_center center">
                            <p class="sub6_4_cont04_item_text01 fz_18 ls_2 normal lh_16">
                                체지방↓ 근육량↑ <br>
                                체성분 변화 유도
                            </p>
                        </div>
                        <div class="sub6_4_cont04_item sub6_4_cont04_item02 ta_c flex_row fd_c jc_center center">
                            <p class="sub6_4_cont04_item_text01 fz_18 ls_2 normal lh_16">
                                기초대사량 ↑ <br>
                                에너지 소모량 ↑
                            </p>
                        </div>
                        <div class="sub6_4_cont04_item sub6_4_cont04_item03 ta_c flex_row fd_c jc_center center">
                            <p class="pc_cont_434 sub6_4_cont04_item_text01 fz_18 ls_2 normal lh_16">
                                저장지방부터 연소하는 <br>
                                에너지 소모 패턴 변화
                            </p>
                            <p class="m_cont_434 sub6_4_cont04_item_text01 fz_18 ls_2 normal lh_16">
                                저장지방부터 연소하는 
                                에너지 소모 패턴 변화
                            </p>
                        </div>
                        <div class="sub6_4_cont04_item sub6_4_cont04_item04 ta_c flex_row fd_c jc_center center">
                            <p class="pc_cont_434 sub6_4_cont04_item_text01 fz_18 ls_2 normal lh_16">
                                혈액순환, 배변활동 <br>
                                활성화로 독소 배출
                            </p>
                            <p class="m_cont_434 sub6_4_cont04_item_text01 fz_18 ls_2 normal lh_16">
                                혈액순환, 배변활동 
                                활성화로 독소 배출
                            </p>
                        </div>
                        <div class="sub6_4_cont04_item sub6_4_cont04_item05 ta_c flex_row fd_c jc_center center">
                            <p class="pc_cont_434 sub6_4_cont04_item_text01 fz_18 ls_2 normal lh_16">
                                극단적 금식 No, <br>
                                굶지 않는 다이어트
                            </p>
                            <p class="m_cont_434 sub6_4_cont04_item_text01 fz_18 ls_2 normal lh_16">
                                극단적 금식 No, 
                                굶지 않는 다이어트
                            </p>
                        </div>
                    </div>
                </div>
                
                <div class="sub_tabcontent_container flex_row fw sa center">
                    <div class="sub_cont_title sub2_5_1_cont03_title_left title_left">
                        <p class="sub_cont_title_text01 sortsmillgoudy fz_20 lh_14 ls_2 light gs_reveal" data-gs-delay="200">
                            Oracle Point.03
                        </p>
                        <p class="sub_cont_title_text02 fz_32 lh_14 ls_2 light m_40 gs_reveal" data-gs-delay="400">
                            다이어트 성공을 위한 <br>
                            <span class="medium">1:1 주치의 시스템</span>
                        </p>
                        <p class="pc_cont_434 sub_cont_title_text04 fz_16 lh_16 ls_2 normal gs_reveal m_30" data-gs-delay="600">
                            인바디를 이용한 체성분 분석과 주치의의 1:1 상담을 <br>
                            바탕으로 맞춤형 치료 계획을 수립합니다. <br>
                            치료 중에도 지속적으로 주치의의 책임 관리로 <br>
                            다이어트 마무리 단계까지 함께합니다.
                        </p>
                        <p class="m_cont_434 sub_cont_title_text04 fz_16 lh_16 ls_2 normal gs_reveal m_30" data-gs-delay="600">
                            인바디를 이용한 체성분 분석과 주치의의 1:1 상담을 
                            바탕으로 맞춤형 치료 계획을 수립합니다. 
                            치료 중에도 지속적으로 주치의의 책임 관리로 
                            다이어트 마무리 단계까지 함께합니다.
                        </p>
                        <p class="pc_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 normal gs_reveal" data-gs-delay="800">
                            인천 오라클의 호르몬 다이어트는 프라이빗한 <br>
                            1인실의 편안한 공간에서 1:1로 진행됩니다.
                        </p>
                        <p class="m_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 normal gs_reveal" data-gs-delay="800">
                            인천 오라클의 호르몬 다이어트는 프라이빗한 
                            1인실의 편안한 공간에서 1:1로 진행됩니다.
                        </p>
                    </div>
                    <div class="sub_cont_doct_img sub2_8_1_tabcontent03_img img_right p_r ta_c">
                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub6_4_cont05_img01.png" alt="">
                    </div>
                </div>
            </div>
        </article>
        
        <!-- 
        <article class="sub_cont_box sub2_2_1_cont04_box p_r bg_fa pd_60 pt_160">
            <div class="container-1300 sub2_2_1_cont05_container">
                <div class="sub_click_btn open m_20" id="sub_click_btn3">
                    <p class="sub_cont_title_text01 sortsmillgoudy fz_20 lh_16 ls_2 light">
                        HCG Diet Program
                    </p>
                    <p class="sub_cont_title_text02 fz_32 lh_16 ls_2 light">
                        <span class="medium">호르몬 다이어트 후 주의사항</span>
                    </p>
                </div>
                <div class="sub2_2_1_cont05_text sub6_4_cont05_text open li_5 sub_click_box" id="sub_click_box3">
                    <ul class="sub2_2_1_cont05_item_ul fz_17 normal ta_l">
                        <li>
                            <p>하루 500kal 식단을 철저히 지켜 주세요.</p>
                        </li>
                        <li>
                            <p>호르몬 약물 투여 전/후 30분 이내에는 음식 섭취를 금지합니다.</p>
                        </li>
                        <li>
                            <p>HCG 호르몬 작용을 위해 오일프리 화장품을 사용해 주세요.</p>
                        </li>
                        <li>
                            <p>생리 기간 중에는 약물이 반응하지 않으므로 호르몬 투여를 일시 중단합니다.</p>
                        </li>
                        <li>
                            <p>임산부나 기타 특이질환을 갖고 계신 분은 하지 않는 것이 좋습니다.</p>
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
