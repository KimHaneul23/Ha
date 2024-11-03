<?php
include_once('./_common.php');
//if (G5_IS_MOBILE) {
//    include_once(G5_MOBILE_PATH.'/index.php');
//    return;
//}

// 웹사이트 타이틀
$g5['title'] = '미용성형';

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
            <div class="sub_top_view sub2_4_top_view">
                <div class="sub_top_view_bg sub2_4_top_view_bg"></div>
                <div class="sub_top_view_text_wrap sub2_4_top_view_text_wrap ta_c">
                    <div class="sub_top_view_text01 sub2_4_top_view_text01">
                        <p class="sortsmillgoudy fz_30 lh_14 ls_2 sub_text_ani">
                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub_top_view_text_icon.png" alt="">
                            Cosmetic Surgery
                        </p>
                    </div>
                    <div class="sub_top_view_text02 sub2_4_top_view_text02 m_20">
                        <p class="fz_40 lh_14 ls_2 medium sub_text_ani">
                            미용성형
                        </p>
                    </div>
                    <div class="sub_top_view_text03 sub2_4_top_view_text03">
                        <p class="fz_16 lh_14 ls_2 normal sub_text_ani">
                            기능과 아름다움을 함께 고려한 맞춤 디자인으로
                        </p>
                    </div>
                    <div class="sub_top_view_text04 sub2_4_top_view_text04">
                        <p class="fz_16 lh_14 ls_2 normal sub_text_ani">
                            자연스럽게 개선하는 미용성형 클리닉
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
                        <li id="sub_tablinks01" class="sub_tab_li sub_tab_li_2_4 sub_tablinks active" onclick="opensubtab(event, 'sub_tabcontent1')">
                            <a href="javascript:void(0);">
                                <p class="fz_16 ta_c">눈성형</p>
                            </a>
                        </li>
                        <li id="sub_tablinks02" class="sub_tab_li sub_tab_li_2_4 sub_tablinks" onclick="opensubtab(event, 'sub_tabcontent2')">
                            <a href="javascript:void(0);">
                                <p class="fz_16 ta_c">상안검/하안검</p>
                            </a>
                        </li>
                        <li id="sub_tablinks03" class="sub_tab_li sub_tab_li_2_4 sub_tablinks" onclick="opensubtab(event, 'sub_tabcontent3')">
                            <a href="javascript:void(0);">
                                <p class="fz_16 ta_c">다크써클</p>
                            </a>
                        </li>
                        <li id="sub_tablinks04" class="sub_tab_li sub_tab_li_2_4 sub_tablinks" onclick="opensubtab(event, 'sub_tabcontent4')">
                            <a href="javascript:void(0);">
                                <p class="fz_16 ta_c">눈밑지방</p>
                            </a>
                        </li>
                        <li id="sub_tablinks05" class="sub_tab_li sub_tab_li_2_4 sub_tablinks" onclick="opensubtab(event, 'sub_tabcontent5')">
                            <a href="javascript:void(0);">
                                <p class="fz_16 ta_c">코성형</p>
                            </a>
                        </li>
                        <li id="sub_tablinks06" class="sub_tab_li sub_tab_li_2_4 sub_tablinks" onclick="opensubtab(event, 'sub_tabcontent6')">
                            <a href="javascript:void(0);">
                                <p class="fz_16 ta_c">지방이식</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </article>
            
            <article class="sub_tabcontent_wrap sub2_4_tabcontent_wrap">
                <div class="sub_cont03 sub2_1_1_cont03 sub_tabcontent sub_tabcontent1" id="sub_tabcontent1">
                    <div class="sub_tabcontent01_wrap">
                        <div class="sub_cont_box sub2_1_1_cont1_1_box bg_fa pd_120">
                            <div class="sub_tabcontent_container flex_row fw sa center">
                                <div class="sub_cont_title sub2_4_1_cont_title_left title_left">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                                    <p class="sub_cont_title_text01 fz_32 lh_14 ls_2 light m_40">
                                        내 눈에 맞는 쌍꺼풀, <br>
                                        <span class="medium">자연스러운 라인을 완성하는 눈성형</span>
                                    </p>
                                    <p class="pc_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 light">
                                        인천 오라클의 눈성형은 개인마다 다른 본연의 눈 모양과 이목구비 <br>
                                        전체의 밸런스를 고려하여 자연스러운 라인을 완성합니다. <br>
                                        의료진의 1:1 상담과 정밀 진단을 바탕으로 여러 타입 눈에 어울리는 <br>
                                        가장 최적화된 라인을 디자인하고, 적합한 수술 방법을 제안합니다.
                                    </p>
                                    <p class="m_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 light">
                                        인천 오라클의 눈성형은 개인마다 다른 본연의 눈 모양과 이목구비 
                                        전체의 밸런스를 고려하여 자연스러운 라인을 완성합니다. 
                                        의료진의 1:1 상담과 정밀 진단을 바탕으로 여러 타입 눈에 어울리는 
                                        가장 최적화된 라인을 디자인하고, 적합한 수술 방법을 제안합니다.
                                    </p>
                                </div>
                                <div class="sub_cont_doct_img sub2_4_1_tabcontent01_img img_right ta_r">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_4_1_tabcontent01_img01.png" alt="">
                                </div>
                            </div>
                        </div>
                        
                        <!-- 
                        <div class="sub_cont_box sub2_1_1_cont1_2_box pd_120">
                            <div class="sub_tabcontent_container flex_row fw jc_center al_fs">
                                <div class="sub_cont_title sub2_1_1_cont_title_center ta_c">
                                    <p class="sub_cont_title_text01 fz_22 lh_14 ls_2 normal gs_reveal" data-gs-delay="200">
                                        미용성형
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
                                        오라클만의 <span class="medium">미용성형 특별함</span>
                                    </p>
                                </div>
                                
                                <div class="sub_tabcontent_container sub2_4_1_cont_point01 flex_row fw jc_center al_fs">
                                    <div class="sub_cont_title sub2_4_1_cont_title_center ta_c">
                                        <p class="sub_cont_title_text01 sortsmillgoudy fz_20 lh_14 ls_2 light gs_reveal" data-gs-delay="200">
                                            Oracle Point.01
                                        </p>
                                        <p class="sub_cont_title_text02 fz_32 lh_14 ls_2 light m_40 gs_reveal" data-gs-delay="400">
                                            눈 상태에 맞는 <span class="medium">디테일 수술법</span>
                                        </p>
                                    </div>
                                    <div class="sub2_1_1_premium_box flex_row fw se al_fs m_80">
                                        <div class="column_third">
                                            <div class="sub2_1_1_premium_item sub2_1_1_premium_item01 ta_c gs_reveal" data-gs-delay="200">
                                                <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_4_1_cont03_item01.png" alt="">
                                                <p class="fz_24 ls_2 lh_16 normal m_10">
                                                    완전 절개법
                                                </p>
                                                <p class="pc_cont_434 fz_16 ls_2 lh_14 normal">
                                                    피부에 봉합한 실을 제거한 후에도 <br>
                                                    쌍꺼풀 라인이 선명하고 뚜렷함
                                                </p>
                                                <p class="m_cont_434 fz_16 ls_2 lh_14 normal">
                                                    피부에 봉합한 실을 제거한 후에도 
                                                    쌍꺼풀 라인이 선명하고 뚜렷함
                                                </p>
                                            </div>
                                        </div>
                                        <div class="column_third">
                                            <div class="sub2_1_1_premium_item sub2_1_1_premium_item02 ta_c gs_reveal" data-gs-delay="400">
                                                <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_4_1_cont03_item02.png" alt="">
                                                <p class="fz_24 ls_2 lh_16 normal m_10">
                                                    부분 절개법
                                                </p>
                                                <p class="pc_cont_434 fz_16 ls_2 lh_14 normal">
                                                    매몰법과 절개법을 융합하여 <br>
                                                    잘 풀리지 않으면서 자연스러움
                                                </p>
                                                <p class="m_cont_434 fz_16 ls_2 lh_14 normal">
                                                    매몰법과 절개법을 융합하여 
                                                    잘 풀리지 않으면서 자연스러움
                                                </p>
                                            </div>
                                        </div>
                                        <div class="column_third">
                                            <div class="sub2_1_1_premium_item sub2_1_1_premium_item03 ta_c gs_reveal" data-gs-delay="600">
                                                <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_4_1_cont03_item03.png" alt="">
                                                <p class="fz_24 ls_2 lh_16 normal m_10">
                                                    매몰법
                                                </p>
                                                <p class="pc_cont_434 fz_16 ls_2 lh_14 normal">
                                                    가장 간단한 수술법으로 <br>
                                                    자국이 거의 없고 자연스러움
                                                </p>
                                                <p class="m_cont_434 fz_16 ls_2 lh_14 normal">
                                                    가장 간단한 수술법으로 
                                                    자국이 거의 없고 자연스러움
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sub_cont_title sub2_4_1_cont_title_center ta_c gs_reveal" data-gs-delay="400">
                                        <img class="m_5" src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                                        <p class="pc_cont_434 sub_cont_title_text02 c-lightgray fz_16 lh_14 ls_2 normal">
                                            인천 오라클의 눈성형은 본연의 눈 모양에 맞춘 수술법과 최소 절개, 미세 봉합 방식으로 <br>
                                            눈을 감았을 때에도, 떴을 때에도 자연스러운 쌍꺼풀 라인을 완성합니다.
                                        </p>
                                        <p class="m_cont_434 sub_cont_title_text02 c-lightgray fz_16 lh_14 ls_2 normal">
                                            인천 오라클의 눈성형은 본연의 눈 모양에 맞춘 수술법과 최소 절개, 미세 봉합 방식으로 
                                            눈을 감았을 때에도, 떴을 때에도 자연스러운 쌍꺼풀 라인을 완성합니다.
                                        </p>
                                    </div>
                                </div>
                                
                                <div class="sub_tabcontent_container flex_row fw sa center">
                                    <div class="sub_cont_title sub2_4_1_cont04_title_left title_left">
                                        <p class="sub_cont_title_text01 sortsmillgoudy fz_20 lh_14 ls_2 light gs_reveal" data-gs-delay="200">
                                            Oracle Point.02
                                        </p>
                                        <p class="sub_cont_title_text02 fz_32 lh_14 ls_2 light m_40 gs_reveal" data-gs-delay="400">
                                            <span class="medium">나에게 어울리는</span><br>
                                            쌍꺼풀 라인 구현
                                        </p>
                                        <p class="pc_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light gs_reveal" data-gs-delay="600">
                                            인천 오라클의 눈성형은 인라인부터 세미아웃라인, 아웃라인 등 <br>
                                            다양한 쌍꺼풀 라인을 구현하며, 개인에게 가장 적합한 라인을 적용합니다. <br>
                                            단순의 눈의 모양만 고려하는 것이 아닌, 전체적인 얼굴과의 조화를 <br>
                                            고려한 디자인으로 가장 자연스러운 쌍꺼풀 라인을 구현합니다.
                                        </p>
                                        <p class="m_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light gs_reveal" data-gs-delay="600">
                                            인천 오라클의 눈성형은 인라인부터 세미아웃라인, 아웃라인 등 
                                            다양한 쌍꺼풀 라인을 구현하며, 개인에게 가장 적합한 라인을 적용합니다. 
                                            단순의 눈의 모양만 고려하는 것이 아닌, 전체적인 얼굴과의 조화를 
                                            고려한 디자인으로 가장 자연스러운 쌍꺼풀 라인을 구현합니다.
                                        </p>
                                    </div>
                                    <div class="sub_cont_doct_img sub2_4_1_tabcontent04_img img_right p_r ta_r">
                                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_4_1_tabcontent04_img01.png" alt="">
                                    </div>
                                </div>
                                
                                <div class="sub_tabcontent_container flex_row fw jc_center al_fs">
                                    <div class="sub_cont_title sub2_4_1_cont_title_center ta_c">
                                        <p class="sub_cont_title_text01 sortsmillgoudy fz_20 lh_14 ls_2 light gs_reveal" data-gs-delay="200">
                                            Oracle Point.03
                                        </p>
                                        <p class="sub_cont_title_text02 fz_32 lh_14 ls_2 normal m_40 gs_reveal" data-gs-delay="400">
                                            자연스러운 눈을 위한 <br>
                                            복합 눈성형 솔루션
                                        </p>
                                    </div>
                                    <div class="sub2_1_1_premium_box flex_row fw se al_fs">
                                        <div class="column_third">
                                            <div class="sub2_1_1_premium_item sub2_1_1_premium_item01 ta_c gs_reveal" data-gs-delay="200">
                                                <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_4_1_cont05_item01.png" alt="">
                                                <p class="fz_24 ls_2 lh_16 normal m_10">
                                                    눈매교정
                                                </p>
                                                <p class="pc_cont_434 fz_16 ls_2 lh_14 normal">
                                                    졸리고 피곤한 눈, <br>
                                                    안검하수가 있는 경우 <br>
                                                    눈매교정을 함께 시행
                                                </p>
                                                <p class="m_cont_434 fz_16 ls_2 lh_14 normal">
                                                    졸리고 피곤한 눈, 
                                                    안검하수가 있는 경우 
                                                    눈매교정을 함께 시행
                                                </p>
                                            </div>
                                        </div>
                                        <div class="column_third">
                                            <div class="sub2_1_1_premium_item sub2_1_1_premium_item02 ta_c gs_reveal" data-gs-delay="400">
                                                <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_4_1_cont05_item02.png" alt="">
                                                <p class="fz_24 ls_2 lh_16 normal m_10">
                                                    앞트임
                                                </p>
                                                <p class="pc_cont_434 fz_16 ls_2 lh_14 normal">
                                                    쌍꺼풀 라인을 방해하는 <br>
                                                    몽고주름이 있는 경우 <br>
                                                    앞트임을 함께 시행
                                                </p>
                                                <p class="m_cont_434 fz_16 ls_2 lh_14 normal">
                                                    쌍꺼풀 라인을 방해하는 
                                                    몽고주름이 있는 경우 
                                                    앞트임을 함께 시행
                                                </p>
                                            </div>
                                        </div>
                                        <div class="column_third">
                                            <div class="sub2_1_1_premium_item sub2_1_1_premium_item03 ta_c gs_reveal" data-gs-delay="600">
                                                <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_4_1_cont05_item03.png" alt="">
                                                <p class="fz_24 ls_2 lh_16 normal m_10">
                                                    뒤트임
                                                </p>
                                                <p class="pc_cont_434 fz_16 ls_2 lh_14 normal">
                                                    눈꼬리 라인을 바꾸고 <br>
                                                    눈 크기를 키우고 싶은 경우 <br>
                                                    뒤트임을 함께 시행
                                                </p>
                                                <p class="m_cont_434 fz_16 ls_2 lh_14 normal">
                                                    눈꼬리 라인을 바꾸고 
                                                    눈 크기를 키우고 싶은 경우 
                                                    뒤트임을 함께 시행
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="sub_cont_box sub2_1_1_cont4_box">
                            <div class="sub2_1_1_cont4 flex_row fw jc_center center">
                                <div class="column_half">
                                    <div class="sub2_4_1_cont6_img">
                                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_4_1_cont6_img.jpg" alt="">
                                    </div>
                                </div>
                                <div class="column_half">
                                    <div class="sub2_4_1_cont6_text flex_row fw fd_c jc_center center">
                                        <div class="sub_cont_title sub2_1_1_cont4_title_center">
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                                            <p class="pc_cont_434 sub_cont_title_text01 fz_32 lh_14 ls_2 light m_40 gs_reveal" data-gs-delay="200">
                                                <span class="medium">자연스러움을 만드는 남다른 노하우, <br>
                                                인천 오라클에서는 이렇게 수술합니다.</span>
                                            </p>
                                            <p class="m_cont_434 sub_cont_title_text01 fz_32 lh_14 ls_2 light m_40 gs_reveal" data-gs-delay="200">
                                                <span class="medium">자연스러움을 만드는 남다른 노하우, 
                                                인천 오라클에서는 이렇게 수술합니다.</span>
                                            </p>
                                            <div class="sub2_4_1_cont6_item_box flex_row fw fd_c jc_center al_fs">
                                                <div class="sub2_4_1_cont6_item bottom_arrow_icon gs_reveal" data-gs-delay="400">
                                                    <div class="sub2_4_1_cont6_item_text01">
                                                        <p class="ta_c fz_16 ls_2 lh_16">수술 전</p>
                                                    </div>
                                                    <p class="sub2_4_1_cont6_item_text02 fz_16 ls_2 lh_16">
                                                        개인의 눈매 모양, 근육의 움직임을 <br>
                                                        고려하여 1:1 맞춤 디자인을 진행합니다.
                                                    </p>
                                                </div>
                                                <div class="sub2_4_1_cont6_item bottom_arrow_icon gs_reveal" data-gs-delay="600">
                                                    <div class="sub2_4_1_cont6_item_text01">
                                                        <p class="ta_c fz_16 ls_2 lh_16">수술 시</p>
                                                    </div>
                                                    <p class="sub2_4_1_cont6_item_text02 fz_16 ls_2 lh_16">
                                                        불필요한 과도 절개 없이, 최소 절개로 <br>
                                                        흉터 없이 또렷한 눈매를 완성합니다.
                                                    </p>
                                                </div>
                                                <div class="sub2_4_1_cont6_item gs_reveal" data-gs-delay="800">
                                                    <div class="sub2_4_1_cont6_item_text01">
                                                        <p class="ta_c fz_16 ls_2 lh_16">수술 후</p>
                                                    </div>
                                                    <p class="sub2_4_1_cont6_item_text02 fz_16 ls_2 lh_16">
                                                        붓기와 흉터를 방지하는 진정 관리를 <br>
                                                        통해 다운타임은 줄이고 수술 만족도를 <br>
                                                        높입니다.
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
                                <div class="sub_click_btn open m_20" id="sub_click_btn1">
                                    <p class="sub_cont_title_text01 sortsmillgoudy fz_20 lh_16 ls_2 light">
                                        Eye Plastic Surgery
                                    </p>
                                    <p class="sub_cont_title_text02 fz_32 lh_16 ls_2 light">
                                        눈성형 <span class="medium">후 주의사항</span>
                                    </p>
                                </div>
                                <div class="sub2_2_1_cont05_text open li_5 sub_click_box" id="sub_click_box1">
                                    <ul class="sub2_2_1_cont05_item_ul fz_17 normal ta_l">
                                        <li>
                                            <p>화장은 실밥 제거 후 24시간 이후부터 가능하며 눈 화장은 2~3일 이후부터 가능합니다.</p>
                                        </li>
                                        <li>
                                            <p>화장을 지울 때 눈가를 문지르지 않도록 합니다.</p>
                                        </li>
                                        <li>
                                            <p>수술 후 3~4일간은 냉찜질을 하고, 5일째부터는 온찜질을 해주세요.</p>
                                        </li>
                                        <li>
                                            <p>렌즈는 수술에 따라 다르나 3주 후부터 착용이 가능합니다.</p>
                                        </li>
                                        <li>
                                            <p>술과 담배 등은 한 달간 금지하도록 해주세요.</p>
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
                                        <span class="fz_30 ls_2 lh_14 normal">미용성형</span>
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

                <div class="sub_cont04 sub2_1_2_cont04 sub_tabcontent sub_tabcontent2" id="sub_tabcontent2">
                    <div class="sub_tabcontent02_wrap">
                        <div class="sub_cont_box sub2_1_1_cont1_1_box bg_fa pd_120">
                            <div class="sub_tabcontent_container flex_row fw sa center">
                                <div class="sub_cont_title sub2_4_2_cont_title_left title_left">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                                    <p class="sub_cont_title_text01 fz_32 lh_14 ls_2 light m_40">
                                        나이가 들수록 처지는 눈매, <br>
                                        <span class="medium">시간을 되돌리는 리부팅 눈매교정술</span>
                                    </p>
                                    <p class="pc_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 light">
                                        나이가 들수록 피부 탄력이 떨어지면서 눈꺼풀이 처지고, 눈 밑 지방이 <br>
                                        불룩하게 돌출됩니다. 인천 오라클의 상안검/하안검 수술은 개인마다 <br>
                                        다른 눈매 모양을 정확하게 진단 후, 섬세한 눈매 교정 테크닉을 바탕으로 <br>
                                        처진 눈매와 깊은 눈가 주름을 자연스럽고 어려 보이게 개선합니다.
                                    </p>
                                    <p class="m_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 light">
                                        나이가 들수록 피부 탄력이 떨어지면서 눈꺼풀이 처지고, 눈 밑 지방이 
                                        불룩하게 돌출됩니다. 인천 오라클의 상안검/하안검 수술은 개인마다 
                                        다른 눈매 모양을 정확하게 진단 후, 섬세한 눈매 교정 테크닉을 바탕으로 
                                        처진 눈매와 깊은 눈가 주름을 자연스럽고 어려 보이게 개선합니다.
                                    </p>
                                </div>
                                <div class="sub_cont_doct_img sub2_4_2_tabcontent01_img img_right ta_r">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_4_2_tabcontent01_img01.png" alt="">
                                </div>
                            </div>
                        </div>
                        
                        <!-- 
                        <div class="sub_cont_box sub2_1_1_cont1_2_box pd_120">
                            <div class="sub_tabcontent_container flex_row fw jc_center al_fs">
                                <div class="sub_cont_title sub2_1_1_cont_title_center ta_c">
                                    <p class="sub_cont_title_text01 fz_22 lh_14 ls_2 normal gs_reveal" data-gs-delay="200">
                                        미용성형
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
                                        오라클만의 <span class="medium">미용성형 특별함</span>
                                    </p>
                                </div>
                                <div class="sub_tabcontent_container flex_row fw sa center">
                                    <div class="sub_cont_doct_img sub2_4_2_tabcontent01_img img_right p_r ta_r">
                                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_4_2_tabcontent03_img01.png" alt="">
                                    </div>
                                    <div class="sub_cont_title sub2_4_2_cont_title_left title_left">
                                        <p class="sub_cont_title_text01 sortsmillgoudy fz_20 lh_14 ls_2 light gs_reveal" data-gs-delay="200">
                                            Oracle Point.01
                                        </p>
                                        <p class="sub_cont_title_text02 fz_32 lh_14 ls_2 light m_40 gs_reveal" data-gs-delay="400">
                                            처진 눈꺼풀을 또렷하게 <br>
                                            교정하는 <span class="medium">상안검 성형</span>
                                        </p>
                                        <p class="pc_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light m_20 gs_reveal" data-gs-delay="600">
                                            처지고 늘어진 눈꺼풀은 나이가 들어보일 뿐만 아니라, 시력 기능을 <br>
                                            저해할 수 있습니다. 상안검 성형은 초기일수록 눈꺼풀 탄력이 좋아 <br>
                                            수술 후 회복, 결과를 극대화할 수 있습니다.
                                        </p>
                                        <p class="m_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light m_20 gs_reveal" data-gs-delay="600">
                                            처지고 늘어진 눈꺼풀은 나이가 들어보일 뿐만 아니라, 시력 기능을 
                                            저해할 수 있습니다. 상안검 성형은 초기일수록 눈꺼풀 탄력이 좋아 
                                            수술 후 회복, 결과를 극대화할 수 있습니다.
                                        </p>
                                        <p class="pc_cont_434 sub_cont_title_text04 fz_16 lh_16 ls_2 light gs_reveal" data-gs-delay="800">
                                            인천 오라클의 상안검 성형은 눈 형태에 맞춘 섬세한 눈매 교정으로 <br>
                                            또렷한 인상은 물론 눈 건강까지 한 번에 개선합니다.
                                        </p>
                                        <p class="m_cont_434 sub_cont_title_text04 fz_16 lh_16 ls_2 light gs_reveal" data-gs-delay="800">
                                            인천 오라클의 상안검 성형은 눈 형태에 맞춘 섬세한 눈매 교정으로 
                                            또렷한 인상은 물론 눈 건강까지 한 번에 개선합니다.
                                        </p>
                                    </div>
                                    <div class="sub2_4_2_cont03_item_box flex_row fw sa al_fs">
                                        <div class="sub2_4_2_cont03_item sub2_4_2_cont03_item01 ta_c">
                                            <p class="sub2_4_2_cont03_item_text01 sortsmillgoudy fz_20 ls_2 lh_14">Point 01</p>
                                            <p class="sub2_4_2_cont03_item_text02 fz_16 ls_2 lh_14">
                                                1:1 맞춤 디자인으로 <br>
                                                자연스러운 눈매 교정
                                            </p>
                                        </div>
                                        <div class="sub2_4_2_cont03_item sub2_4_2_cont03_item02 ta_c">
                                            <p class="sub2_4_2_cont03_item_text01 sortsmillgoudy fz_20 ls_2 lh_14">Point 02</p>
                                            <p class="sub2_4_2_cont03_item_text02 fz_16 ls_2 lh_14">
                                                짧은 수술 시간, 빠른 회복, <br>
                                                빠른 일상 복귀 가능
                                            </p>
                                        </div>
                                        <div class="sub2_4_2_cont03_item sub2_4_2_cont03_item03 ta_c">
                                            <p class="sub2_4_2_cont03_item_text01 sortsmillgoudy fz_20 ls_2 lh_14">Point 03</p>
                                            <p class="sub2_4_2_cont03_item_text02 fz_16 ls_2 lh_14">
                                                입원 필요 없이 당일 퇴원, <br>
                                                수술 후 부담 최소화
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="sub_tabcontent_container flex_row fw sa center">
                                    <div class="sub_cont_title sub2_4_2_cont04_title_left title_left">
                                        <p class="sub_cont_title_text01 sortsmillgoudy fz_20 lh_14 ls_2 light gs_reveal" data-gs-delay="200">
                                            Oracle Point.02
                                        </p>
                                        <p class="sub_cont_title_text02 fz_32 lh_14 ls_2 light m_40 gs_reveal" data-gs-delay="400">
                                            불룩한 눈 밑을 생기있게 개선하는 <br>
                                            <span class="medium">하안검 성형</span>
                                        </p>
                                        <p class="pc_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light m_20 gs_reveal" data-gs-delay="600">
                                            나이가 들면서 피부가 처지고 지방이 울퉁불퉁하게 돌출된 눈 밑은 <br>
                                            나이가 들어 보이고 다크써클까지 유발해 어두운 인상을 만듭니다.
                                        </p>
                                        <p class="m_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light m_20 gs_reveal" data-gs-delay="600">
                                            나이가 들면서 피부가 처지고 지방이 울퉁불퉁하게 돌출된 눈 밑은 
                                            나이가 들어 보이고 다크써클까지 유발해 어두운 인상을 만듭니다.
                                        </p>
                                        <p class="pc_cont_434 sub_cont_title_text04 fz_16 lh_16 ls_2 light gs_reveal" data-gs-delay="800">
                                            인천 오라클피부과의 하안검 성형은 간단한 수술로 눈 밑 주름부터 <br>
                                            다크써클, 눈 밑 지방까지 올인원으로 개선하여 생기있고 환한 눈매를 <br>
                                            완성합니다.
                                        </p>
                                        <p class="m_cont_434 sub_cont_title_text04 fz_16 lh_16 ls_2 light gs_reveal" data-gs-delay="800">
                                            인천 오라클피부과의 하안검 성형은 간단한 수술로 눈 밑 주름부터 
                                            다크써클, 눈 밑 지방까지 올인원으로 개선하여 생기있고 환한 눈매를 
                                            완성합니다.
                                        </p>
                                    </div>
                                    <div class="sub_cont_doct_img sub2_4_2_tabcontent04_img img_right p_r ta_r">
                                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_4_2_tabcontent04_img01.png" alt="">
                                    </div>
                                    <div class="sub2_4_2_cont04_item_box flex_row fw sa al_fs">
                                        <div class="sub2_4_2_cont04_item sub2_4_2_cont04_item01 ta_c">
                                            <p class="sub2_4_2_cont04_item_text01 sortsmillgoudy fz_20 ls_2 lh_14">Point 01</p>
                                            <p class="sub2_4_2_cont04_item_text02 fz_16 ls_2 lh_14">
                                                눈 안쪽 결막 절개로 <br>
                                                흉터 최소화
                                            </p>
                                        </div>
                                        <div class="sub2_4_2_cont04_item sub2_4_2_cont04_item02 ta_c">
                                            <p class="sub2_4_2_cont04_item_text01 sortsmillgoudy fz_20 ls_2 lh_14">Point 02</p>
                                            <p class="sub2_4_2_cont04_item_text02 fz_16 ls_2 lh_14">
                                                눈밑지방, 다크써클, <br>
                                                잔주름 올인원 눈매 교정
                                            </p>
                                        </div>
                                        <div class="sub2_4_2_cont04_item sub2_4_2_cont04_item03 ta_c">
                                            <p class="sub2_4_2_cont04_item_text01 sortsmillgoudy fz_20 ls_2 lh_14">Point 03</p>
                                            <p class="sub2_4_2_cont04_item_text02 fz_16 ls_2 lh_14">
                                                짧은 수술 시간, 빠른 회복, <br>
                                                빠른 일상 복귀 가능
                                            </p>
                                        </div>
                                        <div class="sub2_4_2_cont04_item sub2_4_2_cont04_item03 ta_c">
                                            <p class="sub2_4_2_cont04_item_text01 sortsmillgoudy fz_20 ls_2 lh_14">Point 04</p>
                                            <p class="sub2_4_2_cont04_item_text02 fz_16 ls_2 lh_14">
                                                입원 필요 없이 당일 퇴원, <br>
                                                수술 후 부담 최소화
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="sub_cont_box sub2_1_1_cont4_box">
                            <div class="sub2_1_1_cont4 flex_row fw jc_center center">
                                <div class="column_half">
                                    <div class="sub2_4_1_cont6_img">
                                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_4_2_cont6_img.jpg" alt="">
                                    </div>
                                </div>
                                <div class="column_half">
                                    <div class="sub2_4_1_cont6_text flex_row fw fd_c jc_center center">
                                        <div class="sub_cont_title sub2_1_1_cont4_title_center">
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                                            <p class="pc_cont_434 sub_cont_title_text01 fz_32 lh_14 ls_2 light m_40 gs_reveal" data-gs-delay="200">
                                                <span class="medium">자연스러움을 만드는 남다른 노하우, <br>
                                                인천 오라클에서는 이렇게 수술합니다.</span>
                                            </p>
                                            <p class="m_cont_434 sub_cont_title_text01 fz_32 lh_14 ls_2 light m_40 gs_reveal" data-gs-delay="200">
                                                <span class="medium">자연스러움을 만드는 남다른 노하우, 
                                                인천 오라클에서는 이렇게 수술합니다.</span>
                                            </p>
                                            <div class="sub2_4_1_cont6_item_box flex_row fw fd_c jc_center al_fs">
                                                <div class="sub2_4_1_cont6_item bottom_arrow_icon gs_reveal" data-gs-delay="400">
                                                    <div class="sub2_4_1_cont6_item_text01">
                                                        <p class="ta_c fz_16 ls_2 lh_16">수술 전</p>
                                                    </div>
                                                    <p class="sub2_4_1_cont6_item_text02 fz_16 ls_2 lh_16">
                                                        개인의 눈매 모양, 근육의 움직임을 <br>
                                                        고려하여 1:1 맞춤 디자인을 진행합니다.
                                                    </p>
                                                </div>
                                                <div class="sub2_4_1_cont6_item bottom_arrow_icon gs_reveal" data-gs-delay="600">
                                                    <div class="sub2_4_1_cont6_item_text01">
                                                        <p class="ta_c fz_16 ls_2 lh_16">수술 시</p>
                                                    </div>
                                                    <p class="sub2_4_1_cont6_item_text02 fz_16 ls_2 lh_16">
                                                        불필요한 과도 절개 없이, 최소 절개로 <br>
                                                        흉터 없이 또렷한 눈매를 완성합니다.
                                                    </p>
                                                </div>
                                                <div class="sub2_4_1_cont6_item gs_reveal" data-gs-delay="800">
                                                    <div class="sub2_4_1_cont6_item_text01">
                                                        <p class="ta_c fz_16 ls_2 lh_16">수술 후</p>
                                                    </div>
                                                    <p class="sub2_4_1_cont6_item_text02 fz_16 ls_2 lh_16">
                                                        붓기와 흉터를 방지하는 진정 관리를 <br>
                                                        통해 다운타임은 줄이고 수술 만족도를 <br>
                                                        높입니다.
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
                                <div class="sub_click_btn open m_20" id="sub_click_btn2">
                                    <p class="sub_cont_title_text01 sortsmillgoudy fz_20 lh_16 ls_2 light">
                                        Eye Plastic Surgery
                                    </p>
                                    <p class="sub_cont_title_text02 fz_32 lh_16 ls_2 light">
                                        상안검/하안검 <span class="medium">수술 후 주의사항</span>
                                    </p>
                                </div>
                                <div class="sub2_2_1_cont05_text open li_5 sub_click_box" id="sub_click_box2">
                                    <ul class="sub2_2_1_cont05_item_ul fz_17 normal ta_l">
                                        <li>
                                            <p>화장은 실밥 제거 후 24시간 이후부터 가능하며 눈화장은 2~3일 이후부터 가능합니다.</p>
                                        </li>
                                        <li>
                                            <p>화장을 지울 때 눈가를 문지르지 않도록 합니다.</p>
                                        </li>
                                        <li>
                                            <p>수술 후 2~3일간은 냉찜질을 하고, 4일째부터는 온찜질을 해주세요.</p>
                                        </li>
                                        <li>
                                            <p>렌즈는 수술에 따라 다르지만, 3주 후부터 착용이 가능합니다.</p>
                                        </li>
                                        <li>
                                            <p>수술 후 술과 담배 등은 한달 간 금지하도록 해주세요.</p>
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
                                        <span class="fz_30 ls_2 lh_14 normal">미용성형</span>
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
                            <div class="sub_tabcontent_container flex_row fw sa center">
                                <div class="sub_cont_title sub2_4_3_cont_title_left title_left">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                                    <p class="sub_cont_title_text01 fz_32 lh_14 ls_2 light m_40">
                                        다양한 원인에 맞춘 <br>
                                        <span class="medium">다크서클 솔루션</span>
                                    </p>
                                    <p class="pc_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 light">
                                        어둡고 피곤해 보이는 다크써클의 원인은 다양하고 복합적입니다. <br>
                                        인천 오라클의 다크서클 치료는 의료진이 직접 1:1로 상담을 진행하여 <br>
                                        환자의 다크서클 원인을 정확하게 파악하고, 복합적인 원인에 맞춰 <br>
                                        다양한 치료 솔루션을 제공합니다.
                                    </p>
                                    <p class="m_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 light">
                                        어둡고 피곤해 보이는 다크써클의 원인은 다양하고 복합적입니다. 
                                        인천 오라클의 다크서클 치료는 의료진이 직접 1:1로 상담을 진행하여 
                                        환자의 다크서클 원인을 정확하게 파악하고, 복합적인 원인에 맞춰 
                                        다양한 치료 솔루션을 제공합니다.
                                    </p>
                                </div>
                                <div class="sub_cont_doct_img sub2_4_3_tabcontent01_img img_right ta_r">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_4_3_tabcontent01_img01.png" alt="">
                                </div>
                            </div>
                        </div>
                        
                        <!-- 
                        <div class="sub_cont_box sub2_1_1_cont1_2_box pd_120">
                            <div class="sub_tabcontent_container flex_row fw jc_center al_fs">
                                <div class="sub_cont_title sub2_1_1_cont_title_center ta_c">
                                    <p class="sub_cont_title_text01 fz_22 lh_14 ls_2 normal gs_reveal" data-gs-delay="200">
                                        미용성형
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
                        
                        <div class="sub_cont_box sub2_4_3_cont03_box bg_fa pd_160">
                            <div class="sub_tabcontent_container sub2_4_3_cont03_container flex_row fw jc_center al_fs">
                                <div class="sub_cont_title sub2_4_3_cont_title_center ta_c">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                                    <p class="sub_cont_title_text02 fz_32 lh_14 ls_2 light m_60 gs_reveal" data-gs-delay="200">
                                        <span class="medium">다크서클 원인</span>
                                    </p>
                                </div>
                                <div class="sub2_4_3_cont03_box flex_row fw jc_center al_fs">
                                    <div class="column_quarter">
                                        <div class="sub2_4_3_cont03_item sub2_4_3_cont03_item01 ta_c gs_reveal" data-gs-delay="200">
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_4_3_cont03_item01.png" alt="">
                                            <p class="fz_20 ls_2 lh_14 medium m_20">
                                                눈밑지방 돌출
                                            </p>
                                            <p class="pc_cont_434 fz_16 ls_2 lh_14 normal">
                                                눈밑지방이 튀어나오면서 <br>
                                                눈 밑이 어두워짐
                                            </p>
                                            <p class="m_cont_434 fz_16 ls_2 lh_14 normal">
                                                눈밑지방이 튀어나오면서 
                                                눈 밑이 어두워짐
                                            </p>
                                        </div>
                                    </div>
                                    <div class="column_quarter">
                                        <div class="sub2_4_3_cont03_item sub2_4_3_cont03_item02 ta_c gs_reveal" data-gs-delay="400">
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_4_3_cont03_item02.png" alt="">
                                            <p class="fz_20 ls_2 lh_14 medium m_20">
                                                앞볼 볼륨 감소
                                            </p>
                                            <p class="pc_cont_434 fz_16 ls_2 lh_14 normal">
                                                앞볼의 지방 감서 & 눈 밑 <br>
                                                꺼짐으로 눈 밑이 어두워짐
                                            </p>
                                            <p class="m_cont_434 fz_16 ls_2 lh_14 normal">
                                                앞볼의 지방 감서 & 눈 밑 
                                                꺼짐으로 눈 밑이 어두워짐
                                            </p>
                                        </div>
                                    </div>
                                    <div class="column_quarter">
                                        <div class="sub2_4_3_cont03_item sub2_4_3_cont03_item03 ta_c gs_reveal" data-gs-delay="600">
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_4_3_cont03_item03.png" alt="">
                                            <p class="fz_20 ls_2 lh_14 medium m_20">
                                                색소침착
                                            </p>
                                            <p class="pc_cont_434 fz_16 ls_2 lh_14 normal">
                                                눈가 주변 색소침착으로 <br>
                                                검고 짙게 어두워짐
                                            </p>
                                            <p class="m_cont_434 fz_16 ls_2 lh_14 normal">
                                                눈가 주변 색소침착으로 
                                                검고 짙게 어두워짐
                                            </p>
                                        </div>
                                    </div>
                                    <div class="column_quarter">
                                        <div class="sub2_4_3_cont03_item sub2_4_3_cont03_item04 ta_c gs_reveal" data-gs-delay="800">
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_4_3_cont03_item04.png" alt="">
                                            <p class="fz_20 ls_2 lh_14 medium m_20">
                                                혈관 확장
                                            </p>
                                            <p class="pc_cont_434 fz_16 ls_2 lh_14 normal">
                                                혈관이 확장되어 비치면서 <br>
                                                눈 밑이 어두워 보임
                                            </p>
                                            <p class="m_cont_434 fz_16 ls_2 lh_14 normal">
                                                혈관이 확장되어 비치면서 
                                                눈 밑이 어두워 보임
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="sub_cont_box sub2_4_3_cont04_box pd_100 pt_160">
                            <div class="sub_tabcontent_container sub2_4_3_cont03_container flex_row fw jc_center al_fs">
                                <div class="sub_cont_title sub2_4_3_cont_title_center ta_c">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                                    <p class="sub_cont_title_text02 fz_32 lh_14 ls_2 light m_60 gs_reveal" data-gs-delay="200">
                                        <span class="medium">다크서클 치료 방법</span>
                                    </p>
                                </div>
                                <div class="sub2_2_4_cont02_list flex_row fw jc_center center">
                                    <div class="sub2_3_5_cont03_box flex_row fw jc_center center">
                                        <div class="sub2_3_5_cont03_img sub2_4_3_cont04_img">
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_4_3_cont04_img01.png" alt="">
                                        </div>
                                        <div class="sub2_3_5_cont03_text sub2_4_3_cont04_text ta_l">
                                            <p class="fz_22 normal ls_2 lh_16 m_10">수술적 치료</p>
                                            <p class="fz_16 normal ls_2 lh_16 m_10">
                                                하안검, 눈밑지방제거 등을 통한 수술적 치료<br>
                                                수술 후 색소 레이저나 필러를 병행하여 예방 및 유지 관리
                                            </p>
                                            <!--
                                            <ul class="sub2_4_3_cont04_item_ul fz_16 normal ta_l">
                                                <li>
                                                    <p>다양한 색소, 혈관 레이저</p>
                                                </li>
                                                <li>
                                                    <p>색소를 개선하는 치료</p>
                                                </li>
                                                <li>
                                                    <p>꾸준한 치료로 효과 UP</p>
                                                </li>
                                            </ul>
                                            -->
                                        </div>
                                    </div>
                                    <div class="sub2_3_5_cont03_box flex_row fw jc_center center">
                                        <div class="sub2_3_5_cont03_img sub2_4_3_cont04_img">
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_4_3_cont04_img02.png" alt="">
                                        </div>
                                        <div class="sub2_3_5_cont03_text sub2_4_3_cont04_text ta_l">
                                            <p class="fz_22 normal ls_2 lh_16 m_10">다크써클 필러</p>
                                            <ul class="sub2_4_3_cont04_item_ul fz_16 normal ta_l">
                                                <li>
                                                    <p>꺼진 볼륨을 채워주는 역할</p>
                                                </li>
                                                <li>
                                                    <p>그늘진 눈 밑을 환하게</p>
                                                </li>
                                                <li>
                                                    <p>입체적인 동안 인상 완성</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- 
                        <div class="sub_cont_box sub2_2_1_cont04_box p_r bg_fa pd_60">
                            <div class="container-1300 sub2_2_1_cont05_container">
                                <div class="sub_click_btn open m_20" id="sub_click_btn3">
                                    <p class="sub_cont_title_text01 sortsmillgoudy fz_20 lh_16 ls_2 light">
                                        Dark Circle Care
                                    </p>
                                    <p class="sub_cont_title_text02 fz_32 lh_16 ls_2 light">
                                        다크써클 <span class="medium">치료 후 주의사항</span>
                                    </p>
                                </div>
                                <div class="sub2_2_1_cont05_text open li_4 sub_click_box" id="sub_click_box3">
                                    <ul class="sub2_2_1_cont05_item_ul fz_17 normal ta_l">
                                        <li>
                                            <p>시술 다음 날부터 가벼운 세안과 화장, 샤워가 가능합니다.</p>
                                        </li>
                                        <li>
                                            <p>시술 부위를 세게 만지거나 손으로 누르는 행동은 가급적 삼가주세요.</p>
                                        </li>
                                        <li>
                                            <p>시술 후 1주일 동안 땀이 나는 운동이나 음주는 삼가주세요.</p>
                                        </li>
                                        <li>
                                            <p>외출 시에는 SPF 30 이상의 자외선 차단제를 바르는 것이 좋습니다.</p>
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
                                        <span class="fz_30 ls_2 lh_14 normal">미용성형</span>
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
                
                <div class="sub_cont05 sub2_1_3_cont05 sub_tabcontent sub_tabcontent4" id="sub_tabcontent4">
                    <div class="sub_tabcontent03_wrap">
                        <div class="sub_cont_box sub2_1_1_cont1_1_box bg_fa pd_120">
                            <div class="sub_tabcontent_container flex_row fw sa center">
                                <div class="sub_cont_title sub2_4_4_cont_title_left title_left">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                                    <p class="sub_cont_title_text01 fz_32 lh_14 ls_2 light m_40">
                                        눈 밑 피부의 시간을 되돌리는 <br>
                                        <span class="medium">눈밑지방 교정술</span>
                                    </p>
                                    <p class="pc_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 light m_20">
                                        어둡고 피곤해 보이는 다크써클의 원인은 다양하고 복합적입니다. <br>
                                        인천 오라클의 다크서클 치료는 의료진이 직접 1:1로 상담을 진행하여 <br>
                                        환자의 다크서클 원인을 정확하게 파악하고, 복합적인 원인에 맞춰 <br>
                                        다양한 치료 솔루션을 제공합니다.
                                    </p>
                                    <p class="m_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 light m_20">
                                        어둡고 피곤해 보이는 다크써클의 원인은 다양하고 복합적입니다. 
                                        인천 오라클의 다크서클 치료는 의료진이 직접 1:1로 상담을 진행하여 
                                        환자의 다크서클 원인을 정확하게 파악하고, 복합적인 원인에 맞춰 
                                        다양한 치료 솔루션을 제공합니다.
                                    </p>
                                </div>
                                <div class="sub_cont_doct_img sub2_4_4_tabcontent01_img img_right ta_r">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_4_4_tabcontent01_img01.png" alt="">
                                </div>
                            </div>
                        </div>
                        
                        <!--
                        <div class="sub_cont_box sub2_1_1_cont1_2_box pd_120">
                            <div class="sub_tabcontent_container flex_row fw jc_center al_fs">
                                <div class="sub_cont_title sub2_1_1_cont_title_center ta_c">
                                    <p class="sub_cont_title_text01 fz_22 lh_14 ls_2 normal gs_reveal" data-gs-delay="200">
                                        미용성형
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
                        
                        <div class="sub_cont_box sub2_4_4_cont_box pd_60">
                            <div class="sub2_1_4_cont3_bg sub2_4_4_cont3_bg">
                                <div class="sub_cont_title sub2_4_4_cont_title_center p_r ta_c">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                                    <p class="sub_cont_top_title_text01 fz_30 lh_14 ls_2 light gs_reveal" data-gs-delay="200">
                                        눈 밑 지방 상태에 맞춘 <br>
                                        <span class="medium">적합한 치료 계획</span>
                                    </p>
                                </div>
                                <div class="sub_tabcontent_container sub2_4_4_cont03_container flex_row fw jc_center al_fs">
                                    <div class="sub2_4_4_cont03_circle sub2_4_4_cont03_circle01 flex_row fw jc_center al_fs gs_reveal" data-gs-delay="400">
                                        <div class="sub_cont_title sub2_4_4_cont03_title ta_c">
                                            <p class="sub_cont_title_text02 fz_22 lh_14 ls_2 normal m_20">
                                                눈 밑 지방 돌출
                                            </p>
                                            <p class="pc_cont_480 sub_cont_title_text03 fz_16 lh_16 ls_2 light">
                                                나이가 들어 눈 밑 지방이 <br>
                                                튀어나오게 되면서 <br>
                                                눈 밑이 어두워짐
                                            </p>
                                            <p class="m_cont_480 sub_cont_title_text03 fz_16 lh_16 ls_2 light">
                                                나이가 들어 눈 밑 지방이 
                                                튀어나오게 되면서 
                                                눈 밑이 어두워짐
                                            </p>
                                        </div>
                                    </div>
                                    <div class="sub2_4_4_cont03_circle sub2_4_4_cont03_circle02 flex_row fw jc_center al_fs gs_reveal" data-gs-delay="600">
                                        <div class="sub_cont_title sub2_4_4_cont03_title ta_c">
                                            <p class="sub_cont_title_text02 fz_22 lh_14 ls_2 normal m_20">
                                                앞볼 볼륨 감소
                                            </p>
                                            <p class="pc_cont_480 sub_cont_title_text03 fz_16 lh_16 ls_2 light">
                                                젊을 때 탄탄하던 앞 볼이 <br>
                                                지방이 빠지면서 밋밋해짐
                                            </p>
                                            <p class="m_cont_480 sub_cont_title_text03 fz_16 lh_16 ls_2 light">
                                                젊을 때 탄탄하던 앞 볼이 
                                                지방이 빠지면서 밋밋해짐
                                            </p>
                                        </div>
                                    </div>
                                    <div class="sub2_4_4_cont03_img p_r ta_c gs_reveal" data-gs-delay="800">
                                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_4_4_tabcontent03_img01.png" alt="">
                                        
                                        <p class="pc_cont_480 sub2_4_4_cont03_img_text fz_18 lh_16 ls_2 normal">
                                            <span class="medium">자연스러운 애교살을 보존하면서 도톰한 앞광대, <br>
                                            편평한 눈 밑을 완성</span>하는 적합한 치료 계획 수립
                                        </p>
                                        <p class="m_cont_480 sub2_4_4_cont03_img_text fz_18 lh_16 ls_2 normal">
                                            <span class="medium">자연스러운 애교살을 보존하면서 도톰한 앞광대, 
                                            편평한 눈 밑을 완성</span>하는 적합한 치료 계획 수립
                                        </p>
                                    </div>
                                </div>
                                
                                <div class="sub_tabcontent_container flex_row fw sa center">
                                    <div class="sub_cont_doct_img sub2_4_2_tabcontent01_img img_right p_r ta_r">
                                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_4_4_tabcontent04_img01.png" alt="">
                                    </div>
                                    <div class="sub_cont_title sub2_4_2_cont_title_left title_left">
                                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                                        <p class="sub_cont_title_text02 fz_32 lh_14 ls_2 light m_40 gs_reveal" data-gs-delay="200">
                                            애교살은 보존하고, <br>
                                            <span class="medium">눈 밑 지방만 제거하는 테크닉</span>
                                        </p>
                                        <p class="pc_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light gs_reveal" data-gs-delay="400">
                                            인천 오라클의 눈밑지방 수술은 눈 밑의 동안 포인트 애교살은 <br>
                                            그대로 보존하면서, 불룩하게 처진 눈 밑 지방만 정확하게 <br>
                                            제거하는 수술법으로 자연스럽게 젊어지는 효과를 선사합니다.
                                        </p>
                                        <p class="m_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light gs_reveal" data-gs-delay="400">
                                            인천 오라클의 눈밑지방 수술은 눈 밑의 동안 포인트 애교살은 
                                            그대로 보존하면서, 불룩하게 처진 눈 밑 지방만 정확하게 
                                            제거하는 수술법으로 자연스럽게 젊어지는 효과를 선사합니다.
                                        </p>
                                    </div>
                                    <div class="sub2_4_2_cont03_item_box flex_row fw sa al_fs">
                                        <div class="sub2_4_2_cont03_item sub2_4_2_cont03_item01 ta_c">
                                            <p class="sub2_4_2_cont03_item_text01 sortsmillgoudy fz_20 ls_2 lh_14">Point 01</p>
                                            <p class="pc_cont_434 sub2_4_2_cont03_item_text02 fz_16 ls_2 lh_14">
                                                과도한 지방을 제거해 평평한 <br>
                                                눈가를 만드는 <span class="medium">눈밑지방제거술</span>
                                            </p>
                                            <p class="m_cont_434 sub2_4_2_cont03_item_text02 fz_16 ls_2 lh_14">
                                                과도한 지방을 제거해 평평한 
                                                눈가를 만드는 <br><span class="medium">눈밑지방제거술</span>
                                            </p>
                                        </div>
                                        <div class="sub2_4_2_cont03_item sub2_4_2_cont03_item02 ta_c">
                                            <p class="sub2_4_2_cont03_item_text01 sortsmillgoudy fz_20 ls_2 lh_14">Point 02</p>
                                            <p class="pc_cont_434 sub2_4_2_cont03_item_text02 fz_16 ls_2 lh_14">
                                                불필요한 지방만 제거하고 자연스럽게 <br>
                                                분산시키는 <span class="medium">눈밑지방재배치</span>
                                            </p>
                                            <p class="m_cont_434 sub2_4_2_cont03_item_text02 fz_16 ls_2 lh_14">
                                                불필요한 지방만 제거하고 자연스럽게 
                                                분산시키는 <br><span class="medium">눈밑지방재배치</span>
                                            </p>
                                        </div>
                                        <div class="sub2_4_2_cont03_item sub2_4_2_cont03_item03 ta_c">
                                            <p class="sub2_4_2_cont03_item_text01 sortsmillgoudy fz_20 ls_2 lh_14">Point 03</p>
                                            <p class="pc_cont_434 sub2_4_2_cont03_item_text02 fz_16 ls_2 lh_14">
                                                눈 안쪽에 수술하여 흉터, 실밥 제거 없는 <br>
                                                레이저 <span class="medium">눈밑지방제거술</span>
                                            </p>
                                            <p class="m_cont_434 sub2_4_2_cont03_item_text02 fz_16 ls_2 lh_14">
                                                눈 안쪽에 수술하여 흉터, 실밥 제거 없는 
                                                레이저 <br><span class="medium">눈밑지방제거술</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="sub_cont_box sub2_4_4_cont05_box bg_fa">
                            <div class="sub2_4_4_cont05_bg"></div>
                            <div class="sub_tabcontent_container flex_row fw sa center">
                                <div class="sub_cont_title sub2_4_4_cont05_title_left title_left">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                                    <p class="sub_cont_title_text01 fz_32 lh_14 ls_2 light m_30 gs_reveal" data-gs-delay="200">
                                        자연스러운 볼륨을 만드는 <br>
                                        <span class="medium">앞광대 필러</span>
                                    </p>
                                    <ul class="sub2_4_3_cont04_item_ul fz_16 normal ta_l m_30 gs_reveal" data-gs-delay="400">
                                        <li>
                                            <p>꺼진 볼륨을 다시 채워주는 필러</p>
                                        </li>
                                        <li>
                                            <p>수술 없이 밝고 환해지는 눈 밑</p>
                                        </li>
                                        <li>
                                            <p>1:1 디자인으로 자연스러운 결과</p>
                                        </li>
                                    </ul>
                                    <p class="pc_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 normal gs_reveal" data-gs-delay="600">
                                        앞광대의 볼륨을 채우는 앞광대 필러 시술로 <br>
                                        더 자연스럽게 눈 밑을 개선합니다.
                                    </p>
                                    <p class="m_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 normal gs_reveal" data-gs-delay="600">
                                        앞광대의 볼륨을 채우는 앞광대 필러 시술로 
                                        더 자연스럽게 눈 밑을 개선합니다.
                                    </p>
                                </div>
                                <div class="sub_cont_doct_img sub2_4_4_cont05_img img_right p_r ta_c">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_4_4_cont05_img01.png" alt="">
                                </div>
                            </div>
                        </div>
                        
                        <div class="sub_cont_box sub2_1_1_cont4_box">
                            <div class="sub2_1_1_cont4 flex_row fw jc_center center">
                                <div class="column_half">
                                    <div class="sub2_4_1_cont6_img">
                                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_4_4_cont6_img.jpg" alt="">
                                    </div>
                                </div>
                                <div class="column_half">
                                    <div class="sub2_4_1_cont6_text flex_row fw fd_c jc_center center">
                                        <div class="sub_cont_title sub2_1_1_cont4_title_center">
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                                            <p class="pc_cont_434 sub_cont_title_text01 fz_32 lh_14 ls_2 light m_40 gs_reveal" data-gs-delay="200">
                                                <span class="medium">자연스러움을 만드는 남다른 노하우, <br>
                                                인천 오라클에서는 이렇게 수술합니다.</span>
                                            </p>
                                            <p class="m_cont_434 sub_cont_title_text01 fz_32 lh_14 ls_2 light m_40 gs_reveal" data-gs-delay="200">
                                                <span class="medium">자연스러움을 만드는 남다른 노하우, 
                                                인천 오라클에서는 이렇게 수술합니다.</span>
                                            </p>
                                            <div class="sub2_4_1_cont6_item_box flex_row fw fd_c jc_center al_fs">
                                                <div class="sub2_4_1_cont6_item bottom_arrow_icon gs_reveal" data-gs-delay="400">
                                                    <div class="sub2_4_1_cont6_item_text01">
                                                        <p class="ta_c fz_16 ls_2 lh_16">수술 전</p>
                                                    </div>
                                                    <p class="sub2_4_1_cont6_item_text02 fz_16 ls_2 lh_16">
                                                        개인의 눈 밑 지방부터 다크써클, 애교살 모양까지 <br>
                                                        고려하여 1:1 수술 계획을 수립합니다.
                                                    </p>
                                                </div>
                                                <div class="sub2_4_1_cont6_item bottom_arrow_icon gs_reveal" data-gs-delay="600">
                                                    <div class="sub2_4_1_cont6_item_text01">
                                                        <p class="ta_c fz_16 ls_2 lh_16">수술 시</p>
                                                    </div>
                                                    <p class="sub2_4_1_cont6_item_text02 fz_16 ls_2 lh_16">
                                                        개인의 눈 밑 상태에 맞는 적절한 방법으로 <br>
                                                        수술을 시행하며, 애교살은 그대로 보존합니다.
                                                    </p>
                                                </div>
                                                <div class="sub2_4_1_cont6_item gs_reveal" data-gs-delay="800">
                                                    <div class="sub2_4_1_cont6_item_text01">
                                                        <p class="ta_c fz_16 ls_2 lh_16">수술 후</p>
                                                    </div>
                                                    <p class="sub2_4_1_cont6_item_text02 fz_16 ls_2 lh_16">
                                                        붓기와 흉터를 방지하는 진정 관리를 통해 <br>
                                                        다운타임은 줄이고 수술 만족도를 높입니다.
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
                                <div class="sub_click_btn open m_20" id="sub_click_btn4">
                                    <p class="sub_cont_title_text01 sortsmillgoudy fz_20 lh_16 ls_2 light">
                                        Dark Circle Care
                                    </p>
                                    <p class="sub_cont_title_text02 fz_32 lh_16 ls_2 light">
                                        다크써클 <span class="medium">치료 후 주의사항</span>
                                    </p>
                                </div>
                                <div class="sub2_2_1_cont05_text open li_4 sub_click_box" id="sub_click_box4">
                                    <ul class="sub2_2_1_cont05_item_ul fz_17 normal ta_l">
                                        <li>
                                            <p>시술 다음 날부터 가벼운 세안과 화장, 샤워가 가능합니다.</p>
                                        </li>
                                        <li>
                                            <p>시술 부위를 세게 만지거나 손으로 누르는 행동은 가급적 삼가주세요.</p>
                                        </li>
                                        <li>
                                            <p>시술 후 1주일 동안 땀이 나는 운동이나 음주는 삼가주세요.</p>
                                        </li>
                                        <li>
                                            <p>외출 시에는 SPF 30 이상의 자외선 차단제를 바르는 것이 좋습니다.</p>
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
                                        <span class="fz_30 ls_2 lh_14 normal">미용성형</span>
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

                <div class="sub_cont06 sub2_1_4_cont06 sub_tabcontent sub_tabcontent5" id="sub_tabcontent5">
                    <div class="sub_tabcontent04_wrap">
                        <div class="sub_cont_box sub2_1_4_cont1_1_box bg_fa pd_120">
                            <div class="sub_tabcontent_container flex_row fw sa center">
                                <div class="sub_cont_title sub2_4_5_cont_title_left title_left">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                                    <p class="sub_cont_title_text01 fz_32 lh_14 ls_2 light m_40">
                                        얼굴 전체의 비율을 고려한 <br>
                                        <span class="medium">입체적인 코 성형</span>
                                    </p>
                                    <p class="pc_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 light">
                                        인천 오라클피부과의 코성형은 단순히 높은 코를 만드는 것이 아닌, <br>
                                        얼굴 전체의 비율과 이목구비의 밸런스를 고려하여 가장 이상적인 <br>
                                        모양과 높이의 코를 완성합니다.
                                    </p>
                                    <p class="m_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 light">
                                        인천 오라클피부과의 코성형은 단순히 높은 코를 만드는 것이 아닌, 
                                        얼굴 전체의 비율과 이목구비의 밸런스를 고려하여 가장 이상적인 
                                        모양과 높이의 코를 완성합니다.
                                    </p>
                                    <p class="pc_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light">
                                        콧대의 높이는 물론 코 끝까지 아름다운 라인을 살려 어느 각도에서 <br>
                                        보아도 아름답고 자연스럽도록 맞춤형 디자인을 진행합니다.
                                    </p>
                                    <p class="m_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light">
                                        콧대의 높이는 물론 코 끝까지 아름다운 라인을 살려 어느 각도에서 
                                        보아도 아름답고 자연스럽도록 맞춤형 디자인을 진행합니다.
                                    </p>
                                </div>
                                <div class="sub_cont_doct_img sub2_4_5_tabcontent01_img img_right ta_r">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_4_5_tabcontent01_img01.png" alt="">
                                </div>
                            </div>
                        </div>
                        
                        <!-- 
                        <div class="sub_cont_box sub2_1_1_cont1_2_box pd_120">
                            <div class="sub_tabcontent_container flex_row fw jc_center al_fs">
                                <div class="sub_cont_title sub2_1_1_cont_title_center ta_c">
                                    <p class="sub_cont_title_text01 fz_22 lh_14 ls_2 normal gs_reveal" data-gs-delay="200">
                                        미용성형
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
                        
                        <div class="sub_cont_box sub2_4_5_cont03_box pd_160">
                            <div class="sub_tabcontent_container flex_row fw sa center">
                                <div class="pc_cont_480 sub_cont_doct_img sub2_4_2_tabcontent01_img img_right p_r ta_r">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_4_5_tabcontent03_img01.png" alt="">
                                </div>
                                <div class="m_cont_480 sub_cont_doct_img sub2_4_2_tabcontent01_img img_right p_r ta_r">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_4_5_tabcontent03_img01_m.png" alt="">
                                </div>
                                <div class="sub_cont_title sub2_4_2_cont_title_left title_left">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                                    <p class="sub_cont_title_text02 fz_32 lh_14 ls_2 light m_40 gs_reveal" data-gs-delay="200">
                                        개인마다 다른 코 골격과 <br>
                                        구조를 고려한 <span class="medium">맞춤형 코 성형</span>
                                    </p>
                                    <p class="pc_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light gs_reveal" data-gs-delay="400">
                                        인천 오라클피부과는 코의 높이부터 각도, 코 모양과 콧구멍의 <br>
                                        노출 정도 등 여러 가지 요소를 다각도로 분석하여 매부리코부터 <br>
                                        휜 코, 들창코, 낮은 코의 라인을 아름답게 개선합니다.
                                    </p>
                                    <p class="m_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light gs_reveal" data-gs-delay="400">
                                        인천 오라클피부과는 코의 높이부터 각도, 코 모양과 콧구멍의 
                                        노출 정도 등 여러 가지 요소를 다각도로 분석하여 매부리코부터 
                                        휜 코, 들창코, 낮은 코의 라인을 아름답게 개선합니다.
                                    </p>
                                </div>
                                <div class="sub2_4_2_cont04_item_box flex_row fw sa al_fs">
                                    <div class="sub2_4_2_cont04_item sub2_4_2_cont04_item01 ta_c">
                                        <p class="sub2_4_2_cont04_item_text01 sortsmillgoudy fz_20 ls_2 lh_14">Point 01</p>
                                        <p class="sub2_4_2_cont04_item_text02 fz_16 ls_2 lh_14">
                                            정면, 측면 <br>
                                            다각도 디자인
                                        </p>
                                    </div>
                                    <div class="sub2_4_2_cont04_item sub2_4_2_cont04_item02 ta_c">
                                        <p class="sub2_4_2_cont04_item_text01 sortsmillgoudy fz_20 ls_2 lh_14">Point 02</p>
                                        <p class="sub2_4_2_cont04_item_text02 fz_16 ls_2 lh_14">
                                            자연스럽고 세련된 <br>
                                            디자인 코성형
                                        </p>
                                    </div>
                                    <div class="sub2_4_2_cont04_item sub2_4_2_cont04_item03 ta_c">
                                        <p class="sub2_4_2_cont04_item_text01 sortsmillgoudy fz_20 ls_2 lh_14">Point 03</p>
                                        <p class="sub2_4_2_cont04_item_text02 fz_16 ls_2 lh_14">
                                            낮은코, 들창코, 매부리코, <br>
                                            화살코 재발 방지
                                        </p>
                                    </div>
                                    <div class="sub2_4_2_cont04_item sub2_4_2_cont04_item03 ta_c">
                                        <p class="sub2_4_2_cont04_item_text01 sortsmillgoudy fz_20 ls_2 lh_14">Point 04</p>
                                        <p class="sub2_4_2_cont04_item_text02 fz_16 ls_2 lh_14">
                                            철저한 무균 수술 시스템으로 <br>
                                            부작용 위험 최소화
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="sub_cont_box sub2_4_5_cont04_box bg_fa p_r">
                            <div class="sub_tabcontent_container flex_row fw sa center">
                                <div class="sub_cont_title sub2_4_4_cont05_title_left title_left">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                                    <p class="sub_cont_title_text01 fz_32 lh_14 ls_2 light m_30 gs_reveal" data-gs-delay="200">
                                        얼굴 전체의 비율을 고려한 <br>
                                        <span class="medium">코 라인 디자인</span>
                                    </p>
                                    <p class="pc_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 normal gs_reveal" data-gs-delay="600">
                                        단순히 코 높이만 높히는 코 성형은 부자연스러운 결과를 <br>
                                        낳을 수 있습니다. 인천 오라클은 코 높이를 넘어, 이마에서부터 <br>
                                        콧대, 코 끝으로 이어지는 각도와 인중과 입술로 이어지는 <br>
                                        비순각까지 고려하여 자연스럽게 세련된 콧대와 코 끝 모양을 <br>
                                        디자인합니다.
                                    </p>
                                    <p class="m_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 normal gs_reveal" data-gs-delay="600">
                                        단순히 코 높이만 높히는 코 성형은 부자연스러운 결과를 
                                        낳을 수 있습니다. 인천 오라클은 코 높이를 넘어, 이마에서부터 
                                        콧대, 코 끝으로 이어지는 각도와 인중과 입술로 이어지는 
                                        비순각까지 고려하여 자연스럽게 세련된 콧대와 코 끝 모양을 
                                        디자인합니다.
                                    </p>
                                </div>
                                <div class="sub_cont_doct_img sub2_4_4_cont05_img img_right p_r ta_c">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_4_5_cont04_img01.png" alt="">
                                </div>
                            </div>
                        </div>
                        
                        <div class="sub_cont_box sub2_4_5_cont05_box bg_fa pd_160">
                            <div class="sub_tabcontent_container flex_row fw fd_c jc_center center">
                                <div class="sub_cont_title sub2_4_5_cont05_title ta_c">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                                    <p class="sub_cont_title_text01 fz_32 lh_14 ls_2 light m_60 gs_reveal" data-gs-delay="200">
                                        <span class="medium">코 필러 VS 코 성형</span>
                                    </p>
                                </div>
                                <div class="sub_cont_doct_img sub2_4_5_cont05_imgt p_r ta_c">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_4_5_cont05_img01.png" alt="">
                                </div>
                            </div>
                        </div>
                        
                        <div class="sub_cont_box sub2_4_5_cont06_box bg_fa pd_160">
                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_4_5_cont06_img01.png" alt="">
                            
                            <div class="sub2_4_5_cont06_title ta_c">
                                <p class="sub2_4_5_cont06_text01 fz_20 lh_14 ls_2 normal m_20 gs_reveal" data-gs-delay="200">
                                    오라클 코성형 POINT
                                </p>
                                <p class="pc_cont_434 sub2_4_5_cont06_text02 fz_16 lh_14 ls_2 light gs_reveal" data-gs-delay="400">
                                    코 필러와 코 성형은 각기 다른 장, 단점이 있어 인천 오라클의 코 성형은 <br>
                                    경험이 풍부한 전문가가 1:1 상담 후 적절한 방법을 결정합니다.
                                </p>
                                <p class="m_cont_434 sub2_4_5_cont06_text02 fz_16 lh_14 ls_2 light gs_reveal" data-gs-delay="400">
                                    코 필러와 코 성형은 각기 다른 장, 단점이 있어 인천 오라클의 코 성형은 
                                    경험이 풍부한 전문가가 1:1 상담 후 적절한 방법을 결정합니다.
                                </p>
                            </div>
                        </div>
                        
                        <div class="sub_cont_box sub2_1_1_cont4_box">
                            <div class="sub2_1_1_cont4 flex_row fw jc_center center">
                                <div class="column_half">
                                    <div class="sub2_4_1_cont6_img">
                                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_4_5_cont6_img.jpg" alt="">
                                    </div>
                                </div>
                                <div class="column_half">
                                    <div class="sub2_4_1_cont6_text flex_row fw fd_c jc_center center">
                                        <div class="sub_cont_title sub2_1_1_cont4_title_center">
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                                            <p class="pc_cont_434 sub_cont_title_text01 fz_32 lh_14 ls_2 light m_40 gs_reveal" data-gs-delay="200">
                                                <span class="medium">자연스러움을 만드는 남다른 노하우, <br>
                                                인천 오라클에서는 이렇게 수술합니다.</span>
                                            </p>
                                            <p class="m_cont_434 sub_cont_title_text01 fz_32 lh_14 ls_2 light m_40 gs_reveal" data-gs-delay="200">
                                                <span class="medium">자연스러움을 만드는 남다른 노하우, 
                                                인천 오라클에서는 이렇게 수술합니다.</span>
                                            </p>
                                            <div class="sub2_4_1_cont6_item_box flex_row fw fd_c jc_center al_fs">
                                                <div class="sub2_4_1_cont6_item bottom_arrow_icon gs_reveal" data-gs-delay="400">
                                                    <div class="sub2_4_1_cont6_item_text01">
                                                        <p class="ta_c fz_16 ls_2 lh_16">수술 전</p>
                                                    </div>
                                                    <p class="sub2_4_1_cont6_item_text02 fz_16 ls_2 lh_16">
                                                        개인의 코 모양과 정면, 측면 라인을 <br>
                                                        고려하여 1:1 맞춤 디자인을 진행합니다.
                                                    </p>
                                                </div>
                                                <div class="sub2_4_1_cont6_item bottom_arrow_icon gs_reveal" data-gs-delay="600">
                                                    <div class="sub2_4_1_cont6_item_text01">
                                                        <p class="ta_c fz_16 ls_2 lh_16">수술 시</p>
                                                    </div>
                                                    <p class="sub2_4_1_cont6_item_text02 fz_16 ls_2 lh_16">
                                                        철저하게 멸균 상태로 수술하여 <br>
                                                        부작용 위험을 최소화합니다.
                                                    </p>
                                                </div>
                                                <div class="sub2_4_1_cont6_item gs_reveal" data-gs-delay="800">
                                                    <div class="sub2_4_1_cont6_item_text01">
                                                        <p class="ta_c fz_16 ls_2 lh_16">수술 후</p>
                                                    </div>
                                                    <p class="sub2_4_1_cont6_item_text02 fz_16 ls_2 lh_16">
                                                        붓기와 흉터를 방지하는 진정 관리를 통해 <br>
                                                        다운타임은 줄이고 수술 만족도를 높입니다.
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
                                <div class="sub_click_btn open m_20" id="sub_click_btn5">
                                    <p class="sub_cont_title_text01 sortsmillgoudy fz_20 lh_16 ls_2 light">
                                        Nose Plastic Surgery
                                    </p>
                                    <p class="sub_cont_title_text02 fz_32 lh_16 ls_2 light">
                                        코 성형 <span class="medium">수술 후 주의사항</span>
                                    </p>
                                </div>
                                <div class="sub2_2_1_cont05_text sub2_4_5_cont_ul_text open li_5 sub_click_box" id="sub_click_box5">
                                    <ul class="sub2_2_1_cont05_item_ul fz_17 normal ta_l">
                                        <li>
                                            <p>술, 담배는 최소 일주일 전부터 2주 후까지 하지 않는 것이 좋습니다.</p>
                                        </li>
                                        <li>
                                            <p>코를 강하게 풀거나 가래를 뱉는 행동은 가급적 삼가주시기 바랍니다.</p>
                                        </li>
                                        <li>
                                            <p>주무실 때 고개를 숙이거나 엎드리는 행동은 삼가주시기 바랍니다.</p>
                                        </li>
                                        <li>
                                            <p>코 안쪽의 딱지나 상처는 억제로 떼어내거나 손을 대지 않는 것이 좋습니다.</p>
                                        </li>
                                        <li>
                                            <p>찜질방 및 사우나는 약 3주 이상 정도 하지 않는 것이 좋습니다.</p>
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
                                        <span class="fz_30 ls_2 lh_14 normal">미용성형</span>
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
                
                <div class="sub_cont06 sub2_1_5_cont06 sub_tabcontent sub_tabcontent6" id="sub_tabcontent6">
                    <div class="sub_tabcontent04_wrap">
                        <div class="sub_cont_box sub2_1_4_cont1_1_box bg_fa pd_120">
                            <div class="sub_tabcontent_container flex_row fw sa center">
                                <div class="sub_cont_title sub2_4_6_cont_title_left title_left">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                                    <p class="sub_cont_title_text01 fz_32 lh_14 ls_2 light m_40">
                                        어느 각도에서 보아도 탄탄한 볼륨, <br>
                                        <span class="medium">3D 지방이식술</span>
                                    </p>
                                    <p class="pc_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 light">
                                        허벅지, 복부, 팔뚝 등에서 불필요한 지방을 추출하여 순수 지방만을 <br>
                                        얼굴에 주입시켜 자연스러운 볼륨을 완성합니다. <br>
                                        얼굴 전체의 입체감을 고려한 디자인, 지방의 생착률을 극대화 시키는 <br>
                                        인천 오라클만의 테크닉으로 과다주입 없이 어느 각도에서 보아도 <br>
                                        자연스러운 볼륨감과 갸름한 윤곽 개선 효과를 선사합니다.
                                    </p>
                                    <p class="m_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 light">
                                        허벅지, 복부, 팔뚝 등에서 불필요한 지방을 추출하여 순수 지방만을 
                                        얼굴에 주입시켜 자연스러운 볼륨을 완성합니다. 
                                        얼굴 전체의 입체감을 고려한 디자인, 지방의 생착률을 극대화 시키는 
                                        인천 오라클만의 테크닉으로 과다주입 없이 어느 각도에서 보아도 
                                        자연스러운 볼륨감과 갸름한 윤곽 개선 효과를 선사합니다.
                                    </p>
                                </div>
                                <div class="sub_cont_doct_img sub2_4_6_tabcontent01_img img_right ta_r">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_4_6_tabcontent01_img01.png" alt="">
                                </div>
                            </div>
                        </div>
                        
                        <!--
                        <div class="sub_cont_box sub2_1_4_cont1_2_box pd_120">
                            <div class="sub_tabcontent_container flex_row fw jc_center al_fs">
                                <div class="sub_cont_title sub2_1_4_cont_title_center ta_c">
                                    <p class="sub_cont_title_text01 fz_22 lh_14 ls_2 normal gs_reveal" data-gs-delay="200">
                                        미용성형
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
                                <div class="sub_tabcontent_container flex_row fw sa center">
                                    <div class="sub_cont_doct_img sub2_4_6_tabcontent03_img img_left p_r ta_c">
                                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_4_6_tabcontent03_img01.png" alt="">
                                    </div>
                                    <div class="sub_cont_title sub2_4_6_cont_title_right title_right">
                                        <p class="sub_cont_title_text01 sortsmillgoudy fz_20 lh_14 ls_2 light gs_reveal" data-gs-delay="200">
                                            Oracle Point.01
                                        </p>
                                        <p class="sub_cont_title_text02 fz_32 lh_14 ls_2 light m_40 gs_reveal" data-gs-delay="400">
                                            순수 자가지방세포만으로 <br>
                                            <span class="medium">입체적인 볼륨감 완성</span>
                                        </p>
                                        <p class="pc_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light gs_reveal" data-gs-delay="600">
                                            순수 자가지방세포만을 정확하게 추출하여 이식하여 수술의 안전성과 <br>
                                            결과의 자연스러움을 극대화합니다. 순도 높은 지방 추출로 높은 <br>
                                            생착률을 보여 한 번의 수술만으로도 입체적인 볼륨 개선 효과가 <br>
                                            오래 유지됩니다.
                                        </p>
                                        <p class="m_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light gs_reveal" data-gs-delay="600">
                                            순수 자가지방세포만을 정확하게 추출하여 이식하여 수술의 안전성과 
                                            결과의 자연스러움을 극대화합니다. 순도 높은 지방 추출로 높은 
                                            생착률을 보여 한 번의 수술만으로도 입체적인 볼륨 개선 효과가 
                                            오래 유지됩니다.
                                        </p>
                                    </div>
                                    <div class="sub2_4_2_cont04_item_box flex_row fw sa al_fs">
                                        <div class="sub2_4_2_cont04_item sub2_4_2_cont04_item01 ta_c">
                                            <p class="sub2_4_2_cont04_item_text01 sortsmillgoudy fz_20 ls_2 lh_14">Point 01</p>
                                            <p class="sub2_4_2_cont04_item_text02 fz_16 ls_2 lh_14">
                                                원심분리기 지방 <br>
                                                추출로 높은 생착률
                                            </p>
                                        </div>
                                        <div class="sub2_4_2_cont04_item sub2_4_2_cont04_item02 ta_c">
                                            <p class="sub2_4_2_cont04_item_text01 sortsmillgoudy fz_20 ls_2 lh_14">Point 02</p>
                                            <p class="sub2_4_2_cont04_item_text02 fz_16 ls_2 lh_14">
                                                표면이 균일한 <br>
                                                지방이식 테크닉
                                            </p>
                                        </div>
                                        <div class="sub2_4_2_cont04_item sub2_4_2_cont04_item03 ta_c">
                                            <p class="sub2_4_2_cont04_item_text01 sortsmillgoudy fz_20 ls_2 lh_14">Point 03</p>
                                            <p class="sub2_4_2_cont04_item_text02 fz_16 ls_2 lh_14">
                                                함몰 부위, 꺼진 부위 <br>
                                                볼륨 교정 효과
                                            </p>
                                        </div>
                                        <div class="sub2_4_2_cont04_item sub2_4_2_cont04_item03 ta_c">
                                            <p class="sub2_4_2_cont04_item_text01 sortsmillgoudy fz_20 ls_2 lh_14">Point 04</p>
                                            <p class="sub2_4_2_cont04_item_text02 fz_16 ls_2 lh_14">
                                                부기와 멍을 최소화 하는 <br>
                                                숙련된 지방이식 스킬
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="sub_tabcontent_container sub2_1_cont03_container flex_row fw sa center">
                                    <div class="sub_cont_title sub2_4_6_cont_title_left title_left">
                                        <p class="sub_cont_title_text01 sortsmillgoudy fz_20 lh_14 ls_2 light gs_reveal" data-gs-delay="200">
                                            Oracle Point.02
                                        </p>
                                        <p class="sub_cont_title_text02 fz_32 lh_14 ls_2 light m_40 gs_reveal" data-gs-delay="400">
                                            극대화된 안티에이징을 선사하는 <br>
                                            <span class="medium">PRP 지방이식</span>
                                        </p>
                                        <p class="pc_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light gs_reveal" data-gs-delay="600">
                                            혈액 속 고농축 혈소판을 분리하여 자가지방과 함께 주입합니다. <br>
                                            <span class="normal">PRP(자가혈) 혈소판</span>에 많이 내포된 성장인자로 인해 손상된 <br>
                                            피부를 개선하고, 노화된 피부를 재생합니다.
                                        </p>
                                        <p class="m_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light gs_reveal" data-gs-delay="600">
                                            혈액 속 고농축 혈소판을 분리하여 자가지방과 함께 주입합니다. 
                                            <span class="normal">PRP(자가혈) 혈소판</span>에 많이 내포된 성장인자로 인해 손상된 
                                            피부를 개선하고, 노화된 피부를 재생합니다.
                                        </p>
                                    </div>
                                    <div class="sub_cont_doct_img sub2_4_6_tabcontent04_img img_right p_r ta_c">
                                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_4_6_tabcontent04_img01.png" alt="">
                                    </div>
                                </div>
                                
                                <div class="sub_tabcontent_container flex_row fw sa center">
                                    <div class="sub_cont_title sub2_4_6_cont_title_center ta_c">
                                        <p class="sub_cont_title_text01 sortsmillgoudy fz_20 lh_14 ls_2 light gs_reveal" data-gs-delay="200">
                                            Oracle Point.03
                                        </p>
                                        <p class="sub_cont_title_text02 fz_32 lh_14 ls_2 light gs_reveal" data-gs-delay="400">
                                            <span class="medium">지방이식 시술 과정</span>
                                        </p>
                                    </div>
                                    <div class="sub2_4_6_cont06_item_box flex_row fw jc_center al_fs">
                                        <div class="sub2_4_6_cont06_item sub2_4_6_cont06_item01 ta_c">
                                            <p class="sub2_4_6_cont06_item_text01 sortsmillgoudy fz_20 ls_2 lh_14 m_20">Point 01</p>
                                            <p class="pc_cont_434 sub2_4_6_cont06_item_text02 fz_16 ls_2 lh_14">
                                                허벅지, 복부, 팔뚝 등 지방이 <br>
                                                많은 부위에서 지방 채취 <br>
                                                <br>
                                            </p>
                                            <p class="m_cont_434 sub2_4_6_cont06_item_text02 fz_16 ls_2 lh_14">
                                                허벅지, 복부, 팔뚝 등 지방이 
                                                많은 부위에서 지방 채취
                                            </p>
                                        </div>
                                        <div class="sub2_4_6_cont06_item sub2_4_6_cont06_item02 ta_c">
                                            <p class="sub2_4_6_cont06_item_text01 sortsmillgoudy fz_20 ls_2 lh_14 m_20">Point 02</p>
                                            <p class="pc_cont_434 sub2_4_6_cont06_item_text02 fz_16 ls_2 lh_14">
                                                지방 생착률 최대화를 <br>
                                                위해 순수 지방만 <br>
                                                정교하게 분리
                                            </p>
                                            <p class="m_cont_434 sub2_4_6_cont06_item_text02 fz_16 ls_2 lh_14">
                                                지방 생착률 최대화를 
                                                위해 순수 지방만 
                                                정교하게 분리
                                            </p>
                                        </div>
                                        <div class="sub2_4_6_cont06_item sub2_4_6_cont06_item03 ta_c">
                                            <p class="sub2_4_6_cont06_item_text01 sortsmillgoudy fz_20 ls_2 lh_14 m_20">Point 03</p>
                                            <p class="pc_cont_434 sub2_4_6_cont06_item_text02 fz_16 ls_2 lh_14">
                                                혈액을 뽑은 후 혈액에서 <br>
                                                고농축 혈소판 분리 <br>
                                                (PRP 채취)
                                            </p>
                                            <p class="m_cont_434 sub2_4_6_cont06_item_text02 fz_16 ls_2 lh_14">
                                                혈액을 뽑은 후 혈액에서 
                                                고농축 혈소판 분리 
                                                (PRP 채취)
                                            </p>
                                        </div>
                                        <div class="sub2_4_6_cont06_item sub2_4_6_cont06_item04 ta_c">
                                            <p class="sub2_4_6_cont06_item_text01 sortsmillgoudy fz_20 ls_2 lh_14 m_20">Point 04</p>
                                            <p class="pc_cont_434 sub2_4_6_cont06_item_text02 fz_16 ls_2 lh_14">
                                                미세지방입자를 얇은 <br>
                                                주사바늘로 여러 층에 <br>
                                                조금씩 이식
                                            </p>
                                            <p class="m_cont_434 sub2_4_6_cont06_item_text02 fz_16 ls_2 lh_14">
                                                미세지방입자를 얇은 
                                                주사바늘로 여러 층에 
                                                조금씩 이식
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="sub_tabcontent_container flex_row fw sa center">
                                    <div class="sub_cont_doct_img sub2_4_6_tabcontent04_img img_left p_r ta_c">
                                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_4_6_tabcontent06_img01.png" alt="">
                                    </div>
                                    <div class="sub_cont_title sub2_4_6_cont_title_right title_right">
                                        <p class="sub_cont_title_text01 sortsmillgoudy fz_20 lh_14 ls_2 light gs_reveal" data-gs-delay="200">
                                            Oracle Point.04
                                        </p>
                                        <p class="sub_cont_title_text02 fz_32 lh_14 ls_2 light m_40 gs_reveal" data-gs-delay="400">
                                            얼굴의 볼륨감을 좌우하는 <br>
                                            <span class="medium">1:1 이식 포인트 설계</span>
                                        </p>
                                        <p class="pc_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light gs_reveal" data-gs-delay="600">
                                            얼굴 형태나 원하는 효과에 따라 정교한 시술 계획이 필요합니다. <br>
                                            인천 오라클은 피부가 처지는 방향, 지방이 부족한 정도 등을종 <br>
                                            합적으로 고려하여 지방이식 용량부터 이식 포인트, 순서까지 <br>
                                            디테일하게 디자인합니다. 디자인을 기반으로 한 정밀 시술로 <br>
                                            어느 각도에서 보아도 입체적이고 자연스러운 볼륨감을 완성합니다.
                                        </p>
                                        <p class="m_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light gs_reveal" data-gs-delay="600">
                                            얼굴 형태나 원하는 효과에 따라 정교한 시술 계획이 필요합니다. 
                                            인천 오라클은 피부가 처지는 방향, 지방이 부족한 정도 등을종 
                                            합적으로 고려하여 지방이식 용량부터 이식 포인트, 순서까지 
                                            디테일하게 디자인합니다. 디자인을 기반으로 한 정밀 시술로 
                                            어느 각도에서 보아도 입체적이고 자연스러운 볼륨감을 완성합니다.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="sub_cont_box sub2_4_5_cont05_box bg_fa pd_120">
                            <div class="sub_tabcontent_container flex_row fw fd_c jc_center center">
                                <div class="sub_cont_title sub2_4_5_cont05_title ta_c">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                                    <p class="sub_cont_title_text01 fz_32 lh_14 ls_2 light m_60 gs_reveal" data-gs-delay="200">
                                        <span class="medium">필러 VS 지방이식</span>
                                    </p>
                                </div>
                                <div class="sub_cont_doct_img sub2_4_5_cont05_imgt p_r ta_c">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_4_6_cont07_img01.png" alt="">
                                </div>
                            </div>
                        </div>
                        
                        <div class="sub_cont_box sub2_4_5_cont06_box bg_fa pd_60">
                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_4_5_cont06_img01.png" alt="">
                            
                            <div class="sub2_4_5_cont06_title ta_c">
                                <p class="sub2_4_5_cont06_text01 fz_20 lh_14 ls_2 normal m_20 gs_reveal" data-gs-delay="200">
                                    오라클 지방이식 POINT
                                </p>
                                <p class="pc_cont_434 sub2_4_5_cont06_text02 fz_16 lh_14 ls_2 light gs_reveal" data-gs-delay="400">
                                    필러와 지방이식에는 각기 다른 장단점이 있어, 인천오라클에서는 경험이 <br>
                                    풍부한 전문가가 1:1 상담을 거쳐 고객에게 가장 필요한 방법을 결정합니다.
                                </p>
                                <p class="m_cont_434 sub2_4_5_cont06_text02 fz_16 lh_14 ls_2 light gs_reveal" data-gs-delay="400">
                                    필러와 지방이식에는 각기 다른 장단점이 있어, 인천오라클에서는 경험이 
                                    풍부한 전문가가 1:1 상담을 거쳐 고객에게 가장 필요한 방법을 결정합니다.
                                </p>
                            </div>
                        </div>
                        
                        <!--
                        <div class="sub_cont_box sub2_2_1_cont04_box p_r bg_fa pd_60 pt_160">
                            <div class="container-1300 sub2_2_1_cont05_container">
                                <div class="sub_click_btn open m_20" id="sub_click_btn4">
                                    <p class="sub_cont_title_text01 sortsmillgoudy fz_20 lh_16 ls_2 light">
                                        Fat Grafting Surgery
                                    </p>
                                    <p class="sub_cont_title_text02 fz_32 lh_16 ls_2 light">
                                        지방이식 <span class="medium">수술 후 주의사항</span>
                                    </p>
                                </div>
                                <div class="sub2_2_1_cont05_text sub2_4_6_cont_ul_text open li_4 sub_click_box" id="sub_click_box4">
                                    <ul class="sub2_2_1_cont05_item_ul fz_17 normal ta_l">
                                        <li>
                                            <p>수술 1주일 전~ 수술 후 4주까지 흡연/음주를 중단해 주세요.</p>
                                        </li>
                                        <li>
                                            <p>아스피린, 피임약 등의 약물 복용은 수술 1주일 전부터 중단해 주세요.</p>
                                        </li>
                                        <li>
                                            <p>부기나 통증이 있을 시 얼음찜질을 하면 좋으며 수술 후 3일부터는 온찜질이 도움이 됩니다.</p>
                                        </li>
                                        <li>
                                            <p>수술 후 7일간은 지방이식 부위가 이동하지 않도록 표정을 많이 짓지 않고 눌리지 않도록 주의해 주세요.</p>
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
                                        <span class="fz_30 ls_2 lh_14 normal">미용성형</span>
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
        }
    }
    //<!-- //Javascript를 이용해서 다음 페이지에 파라미터 넘기기 위한 방법 -->
</script>