<?php
include_once('./_common.php');
//if (G5_IS_MOBILE) {
//    include_once(G5_MOBILE_PATH.'/index.php');
//    return;
//}

// 웹사이트 타이틀
$g5['title'] = '제모/탈모';

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
            <div class="sub_top_view sub2_5_top_view">
                <div class="sub_top_view_bg sub2_5_top_view_bg"></div>
                <div class="sub_top_view_text_wrap sub2_5_top_view_text_wrap ta_c">
                    <div class="sub_top_view_text01 sub2_5_top_view_text01">
                        <p class="sortsmillgoudy fz_30 lh_14 ls_2 sub_text_ani">
                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub_top_view_text_icon2.png" alt="">
                            Beauty Program
                        </p>
                    </div>
                    <div class="sub_top_view_text02 sub2_5_top_view_text02 m_20">
                        <p class="fz_40 lh_14 ls_2 medium sub_text_ani">
                            제모/탈모
                        </p>
                    </div>
                    <div class="sub_top_view_text03 sub2_5_top_view_text03">
                        <p class="fz_16 lh_14 ls_2 normal sub_text_ani">
                            피부과전문의의 수많은 제모/탈모 치료 경험과 노하우를
                        </p>
                    </div>
                    <div class="sub_top_view_text04 sub2_5_top_view_text04">
                        <p class="fz_16 lh_14 ls_2 normal sub_text_ani">
                            바탕으로 업그레이드 된 첨단 시술을 진행합니다.
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
                                <p class="fz_16 ta_c">부위별 제모</p>
                            </a>
                        </li>
                        <li id="sub_tablinks02" class="sub_tab_li sub_tablinks" onclick="opensubtab(event, 'sub_tabcontent2')">
                            <a href="javascript:void(0);">
                                <p class="fz_16 ta_c">탈모</p>
                            </a>
                        </li>
                        <li id="sub_tablinks03" class="sub_tab_li sub_tablinks" onclick="opensubtab(event, 'sub_tabcontent3')">
                            <a href="javascript:void(0);">
                                <p class="fz_16 ta_c">모발이식</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </article>
            
            <article class="sub_tabcontent_wrap sub2_1_1_tabcontent_wrap">
                <div class="sub_cont03 sub2_5_1_cont03 sub_tabcontent sub_tabcontent1" id="sub_tabcontent1">
                    <div class="sub_tabcontent01_wrap">
                        <div class="sub_cont_box sub2_1_1_cont1_1_box bg_fa pd_120">
                            <div class="sub_tabcontent_container flex_row fw sa center">
                                <div class="m_cont sub_cont_doct_video sub2_5_1_tabcontent01_img img_right ta_r">
                                    <div class="video-real-selfie small-video-wrap" style="overflow:hidden;">
                                        <div class="video-real-selfie-wrapper" style="position: relative; padding:56.25% 0 0;">
                                            <video id="realSelfieVideo" poster="<?php echo G5_THEME_URL?>/sub/img/sub2_5_1_cont01_video_bg01.jpg" preload="none" style="position: absolute; top:0; left:0; width:100%;"  autoplay muted loop playsinline>
                                                <source src="<?php echo G5_THEME_URL?>/video/sub2_5_1_cont01_video01.mp4" type="video/mp4">
                                            </video>
                                        </div>
                                    </div>
                                </div>
                                <div class="sub_cont_title sub2_5_1_cont_title_left title_left">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                                    <p class="sub_cont_title_text01 fz_32 lh_14 ls_2 light m_40">
                                        깊숙한 모근까지 제거하는 <br>
                                        <span class="medium">최첨단 레이저 영구 제모</span>
                                    </p>
                                    <p class="pc_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 light">
                                        인천 오라클피부과에서는 실시간 온도 모니터링은 물론, <br>
                                        모근과 피부 상태에 맞춰 레이저 강도를 조절하는 테크닉으로 <br>
                                        모낭염 걱정 없이 안전하게 영구 제모를 진행합니다. <br>
                                        영구 제모, 인천 오라클에서는 가능합니다.
                                    </p>
                                    <p class="m_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 light">
                                        인천 오라클피부과에서는 실시간 온도 모니터링은 물론, 
                                        모근과 피부 상태에 맞춰 레이저 강도를 조절하는 테크닉으로 
                                        모낭염 걱정 없이 안전하게 영구 제모를 진행합니다. 
                                        영구 제모, 인천 오라클에서는 가능합니다.
                                    </p>
                                </div>
                                <div class="pc_cont sub_cont_doct_video sub2_5_1_tabcontent01_img img_right ta_r">
                                    <div class="video-real-selfie small-video-wrap" style="overflow:hidden;">
                                        <div class="video-real-selfie-wrapper" style="position: relative; padding:56.25% 0 0;">
                                            <video id="realSelfieVideo" poster="<?php echo G5_THEME_URL?>/sub/img/sub2_5_1_cont01_video_bg01.jpg" preload="none" style="position: absolute; top:0; left:0; width:100%;"  autoplay muted loop playsinline>
                                                <source src="<?php echo G5_THEME_URL?>/video/sub2_5_1_cont01_video01.mp4" type="video/mp4">
                                            </video>
                                        </div>
                                    </div>
                                </div>
                                <div class="sub2_4_2_cont04_item_box flex_row fw sa al_fs">
                                    <div class="sub2_4_2_cont04_item sub2_4_2_cont04_item01 ta_c">
                                        <p class="sub2_4_2_cont04_item_text01 sortsmillgoudy fz_20 ls_2 lh_14">Point 01</p>
                                        <p class="sub2_4_2_cont04_item_text02 fz_16 ls_2 lh_14">
                                            피부과 전문의 <br>
                                            1:1 책임 시술
                                        </p>
                                    </div>
                                    <div class="sub2_4_2_cont04_item sub2_4_2_cont04_item02 ta_c">
                                        <p class="sub2_4_2_cont04_item_text01 sortsmillgoudy fz_20 ls_2 lh_14">Point 02</p>
                                        <p class="sub2_4_2_cont04_item_text02 fz_16 ls_2 lh_14">
                                            모든 피부에 <br>
                                            적합한 시술
                                        </p>
                                    </div>
                                    <div class="sub2_4_2_cont04_item sub2_4_2_cont04_item03 ta_c">
                                        <p class="sub2_4_2_cont04_item_text01 sortsmillgoudy fz_20 ls_2 lh_14">Point 03</p>
                                        <p class="sub2_4_2_cont04_item_text02 fz_16 ls_2 lh_14">
                                            체모 두께에 맞춘 <br>
                                            효과적인 제모
                                        </p>
                                    </div>
                                    <div class="sub2_4_2_cont04_item sub2_4_2_cont04_item03 ta_c">
                                        <p class="sub2_4_2_cont04_item_text01 sortsmillgoudy fz_20 ls_2 lh_14">Point 04</p>
                                        <p class="sub2_4_2_cont04_item_text02 fz_16 ls_2 lh_14">
                                            안전을 위한 <br>
                                            에어쿨링 시스템
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="sub_cont_box sub2_1_1_cont1_2_box pd_120">
                            <div class="sub_tabcontent_container flex_row fw jc_center al_fs">
                                <div class="sub_cont_title sub2_1_1_cont_title_center ta_c">
                                    <p class="sub_cont_title_text01 fz_22 lh_14 ls_2 normal gs_reveal" data-gs-delay="200">
                                        제모/탈모
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
                                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_5_1_ba_slide_img01_b.jpg" alt="">
                                                        </div>
                                                        <div class="sub2_1_1_ba_slide_img_a <?=($is_member ? '':'blur')?>">
                                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_5_1_ba_slide_img01_a.jpg" alt="">
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
                                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_5_1_ba_slide_img02_b.jpg" alt="">
                                                        </div>
                                                        <div class="sub2_1_1_ba_slide_img_a <?=($is_member ? '':'blur')?>">
                                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_5_1_ba_slide_img02_a.jpg" alt="">
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
                                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_5_1_ba_slide_img03_b.jpg" alt="">
                                                        </div>
                                                        <div class="sub2_1_1_ba_slide_img_a <?=($is_member ? '':'blur')?>">
                                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_5_1_ba_slide_img03_a.jpg" alt="">
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
                                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_5_1_ba_slide_img04_b.jpg" alt="">
                                                        </div>
                                                        <div class="sub2_1_1_ba_slide_img_a <?=($is_member ? '':'blur')?>">
                                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_5_1_ba_slide_img04_a.jpg" alt="">
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
                            <div class="sub2_1_4_cont3_bg sub2_5_1_cont3_bg">
                                <div class="sub_cont_title sub2_1_4_cont_title_center p_r ta_c pt_100">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                                    <p class="sub_cont_top_title_text01 fz_30 lh_14 ls_2 light gs_reveal" data-gs-delay="200">
                                        오라클만의 <span class="medium">제모/탈모 특별함</span>
                                    </p>
                                </div>
                                <div class="sub_tabcontent_container sub2_5_fd_cr flex_row fw sa center">
                                    <div class="sub_cont_title sub2_5_1_cont03_title_left title_left">
                                        <p class="sub_cont_title_text01 sortsmillgoudy fz_20 lh_14 ls_2 light gs_reveal" data-gs-delay="200">
                                            Oracle Point.01
                                        </p>
                                        <p class="sub_cont_title_text02 fz_32 lh_14 ls_2 light m_40 gs_reveal" data-gs-delay="400">
                                            예민한 피부도 안심할 수 있는 <br>
                                            <span class="medium">피부과전문의 1:1 제모 시스템</span>
                                        </p>
                                        <p class="pc_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light gs_reveal m_20" data-gs-delay="600">
                                            인천 오라클피부과는 대한민국 2% 피부과 전문의의 <br>
                                            1:1 주치의 시스템을 바탕으로 영구제모 시술을 진행합니다. <br>
                                            피부과 전문의가 직접 1:1로 상담을 진행하여 피부 타입에 <br>
                                            따라 적합한 제모 방법을 선택하여 민감한 피부도 안심하고 <br>
                                            받을 수 있도록 안전하고 효율적인 제모를 진행합니다.
                                        </p>
                                        <p class="m_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light gs_reveal m_20" data-gs-delay="600">
                                            인천 오라클피부과는 대한민국 2% 피부과 전문의의 
                                            1:1 주치의 시스템을 바탕으로 영구제모 시술을 진행합니다. <br>
                                            피부과 전문의가 직접 1:1로 상담을 진행하여 피부 타입에 
                                            따라 적합한 제모 방법을 선택하여 민감한 피부도 안심하고 
                                            받을 수 있도록 안전하고 효율적인 제모를 진행합니다.
                                        </p>
                                    </div>
                                    <div class="sub_cont_doct_img sub2_5_1_tabcontent03_img img_right p_r ta_r">
                                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_5_1_tabcontent03_img01.png" alt="">
                                    </div>
                                </div>

                                <div class="sub_tabcontent_container flex_row fw sa center">
                                    <div class="sub_cont_doct_img sub2_5_1_tabcontent04_img img_left p_r ta_c">
                                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_5_1_tabcontent04_img01.png" alt="">
                                    </div>
                                    <div class="sub_cont_title sub2_5_1_tabcontent04_title_right title_right">
                                        <p class="sub_cont_title_text01 sortsmillgoudy fz_20 lh_14 ls_2 light gs_reveal" data-gs-delay="200">
                                            Oracle Point.02
                                        </p>
                                        <p class="sub_cont_title_text02 fz_32 lh_14 ls_2 light m_40 gs_reveal" data-gs-delay="400">
                                            민감한 부위도 안심할 수 있도록, <br>
                                            <span class="medium">프라이빗 제모 클리닉 운영</span>
                                        </p>
                                        <ul class="sub2_5_1_cont04_item_ul fz_17 normal ta_l m_40 gs_reveal" data-gs-delay="600">
                                            <li>
                                                <p>남/여 의료진 성별 선택 가능</p>
                                            </li>
                                            <li>
                                                <p>프라이빗 룸 제모 시술 가능</p>
                                            </li>
                                        </ul>
                                        <p class="pc_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 normal gs_reveal" data-gs-delay="800">
                                            인천 오라클피부과는 겨드랑이, 비키니 라인 등 <br>
                                            민감한 부위의 제모도 편안하게 받아보실 수 있도록 <br>
                                            프라이빗 룸에서 1:1로 제모 시술을 진행합니다.
                                        </p>
                                        <p class="m_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 normal gs_reveal" data-gs-delay="800">
                                            인천 오라클피부과는 겨드랑이, 비키니 라인 등 
                                            민감한 부위의 제모도 편안하게 받아보실 수 있도록 
                                            프라이빗 룸에서 1:1로 제모 시술을 진행합니다.
                                        </p>
                                    </div>
                                </div>
                                
                                <div class="sub_tabcontent_container sub2_5_fd_cr flex_row fw sa center">
                                    <div class="sub_cont_title sub2_5_1_cont05_title_left title_left">
                                        <p class="sub_cont_title_text01 sortsmillgoudy fz_20 lh_14 ls_2 light gs_reveal" data-gs-delay="200">
                                            Oracle Point.03
                                        </p>
                                        <p class="sub_cont_title_text02 fz_32 lh_14 ls_2 light m_40 gs_reveal" data-gs-delay="400">
                                            화상을 방지하는 디테일, <br>
                                            <span class="medium">에어쿨링 시스템</span>
                                        </p>
                                        <p class="pc_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light gs_reveal m_20" data-gs-delay="600">
                                            인천 오라클피부과의 첨단 레이저 영구제모 시술은 <br>
                                            모낭에만 선택적으로 에너지를 전달하여 피부, 조직 손상 없이 <br>
                                            안전하게 진행됩니다. <br>
                                            시술 시에는 에어쿨링 시스템이 적용되어 피부 자극을 최소화 <br>
                                            하며, 만에 하나 발생할 수 있는 화상까지 철저하게 방지합니다.
                                        </p>
                                        <p class="m_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light gs_reveal m_20" data-gs-delay="600">
                                            인천 오라클피부과의 첨단 레이저 영구제모 시술은 
                                            모낭에만 선택적으로 에너지를 전달하여 피부, 조직 손상 없이 
                                            안전하게 진행됩니다. <br>
                                            시술 시에는 에어쿨링 시스템이 적용되어 피부 자극을 최소화 
                                            하며, 만에 하나 발생할 수 있는 화상까지 철저하게 방지합니다.
                                        </p>
                                    </div>
                                    <div class="sub_cont_doct_img sub2_5_1_tabcontent05_img img_right p_r ta_r">
                                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_5_1_tabcontent05_img01.png" alt="">
                                    </div>
                                </div>
                                
                                <div class="sub2_5_1_cont06_container">
                                    <div class="sub_tabcontent_container flex_row fw sa center">
                                        <div class="sub_cont_doct_img sub2_5_1_tabcontent06_img img_left p_r ta_r">
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_5_1_tabcontent06_img01.png" alt="">
                                        </div>
                                        <div class="sub_cont_title sub2_5_1_cont06_title_right title_right">
                                            <p class="sub_cont_title_text02 sub2_5_1_cont_title_text02 fz_30 lh_14 ls_2 light m_40 gs_reveal" data-gs-delay="200">
                                                제모에 특화된 최첨단 레이저, <br>
                                                <span class="medium">아포지 플러스</span>
                                            </p>
                                            <ul class="sub2_5_1_cont04_item_ul fz_17 normal ta_l gs_reveal" data-gs-delay="400">
                                                <li>
                                                    <p>75nm 파장으로 보다 강력한 제모 효과</p>
                                                </li>
                                                <li>
                                                    <p>피부와 접촉하지 않아 청결</p>
                                                </li>
                                                <li>
                                                    <p>모낭의 멜라닌 색소에만 집중</p>
                                                </li>
                                                <li>
                                                    <p>에어쿨링으로 시술 통증 최소화</p>
                                                </li>
                                            </ul>
                                        </div>
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
                                            제모/탈모 <span class="medium">레이저 프로그램</span>
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
                                        Waxing
                                    </p>
                                    <p class="sub_cont_title_text02 fz_32 lh_16 ls_2 light">
                                        부위별 <span class="medium">제모 후 주의사항</span>
                                    </p>
                                </div>
                                <div class="sub2_2_1_cont05_text sub2_5_cont_ul_text open li_4 sub_click_box" id="sub_click_box1">
                                    <ul class="sub2_2_1_cont05_item_ul fz_17 normal ta_l">
                                        <li>
                                            <p>외출시에는SPF 30 이상의 자외선 차단제를 바르는 것이 좋습니다.</p>
                                        </li>
                                        <li>
                                            <p>털을 뽑거나 왁싱은 금하며, 면도는 무방합니다.</p>
                                        </li>
                                        <li>
                                            <p>시술 후 샤워나 메이크업은 가능하나 사우나,입욕,수영 등은 피해주세요.</p>
                                        </li>
                                        <li>
                                            <p>시술 후, 하루 이틀 정도 피부가 울긋불긋하고 부을 수 있으나 곧 사라집니다.</p>
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
                                        <span class="fz_30 ls_2 lh_14 normal">제모/탈모 치료</span>
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

                <div class="sub_cont04 sub2_5_2_cont04 sub_tabcontent sub_tabcontent2" id="sub_tabcontent2">
                    <div class="sub_tabcontent02_wrap">
                        <div class="sub_cont_box sub2_1_1_cont1_1_box bg_fa pd_120">
                            <div class="sub_tabcontent_container flex_row fw sa center">
                                <div class="m_cont sub_cont_doct_img sub2_5_2_tabcontent01_img img_right ta_r">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_5_2_tabcontent01_img01.png" alt="">
                                </div>
                                <div class="sub_cont_title sub2_5_2_cont_title_left title_left">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                                    <p class="sub_cont_title_text01 fz_32 lh_14 ls_2 light m_40">
                                        두피와 모근에 본연의 힘을 더하는 <br>
                                        <span class="medium">탈모 치료 프로그램</span>
                                    </p>
                                    <p class="pc_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 light m_20">
                                        탈모치료는 머리를 다시 자라나게 하는 것이 아닌, 남아 있는 <br>
                                        모근을 다시 건강하게 만드는 치료입니다. <br>
                                        인천 오라클피부과의 탈모 치료는 두피와 모근 본연의 힘을 건강하게 키워 <br>
                                        현재의 상태에서 모발이 굵고 건강하게 회복되는 것을 목표로 진행됩니다.
                                    </p>
                                    <p class="m_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 light m_20">
                                        탈모치료는 머리를 다시 자라나게 하는 것이 아닌, 남아 있는 
                                        모근을 다시 건강하게 만드는 치료입니다. <br>
                                        인천 오라클피부과의 탈모 치료는 두피와 모근 본연의 힘을 건강하게 키워 
                                        현재의 상태에서 모발이 굵고 건강하게 회복되는 것을 목표로 진행됩니다.
                                    </p>
                                </div>
                                <div class="pc_cont sub_cont_doct_img sub2_5_2_tabcontent01_img img_right ta_r">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_5_2_tabcontent01_img01.png" alt="">
                                </div>
                                <div class="sub2_4_2_cont03_item_box flex_row fw sa al_fs">
                                    <div class="sub2_4_2_cont03_item sub2_4_2_cont03_item01 ta_c">
                                        <p class="sub2_4_2_cont03_item_text01 sortsmillgoudy fz_20 ls_2 lh_14">Point 01</p>
                                        <p class="sub2_4_2_cont03_item_text02 fz_16 ls_2 lh_14">
                                            피부과 전문의 <br>
                                            1:1 책임 시술
                                        </p>
                                    </div>
                                    <div class="sub2_4_2_cont03_item sub2_4_2_cont03_item02 ta_c">
                                        <p class="sub2_4_2_cont03_item_text01 sortsmillgoudy fz_20 ls_2 lh_14">Point 02</p>
                                        <p class="sub2_4_2_cont03_item_text02 fz_16 ls_2 lh_14">
                                            원인에 맞춘 <br>
                                            맞춤형 탈모 치료
                                        </p>
                                    </div>
                                    <div class="sub2_4_2_cont03_item sub2_4_2_cont03_item03 ta_c">
                                        <p class="sub2_4_2_cont03_item_text01 sortsmillgoudy fz_20 ls_2 lh_14">Point 03</p>
                                        <p class="sub2_4_2_cont03_item_text02 fz_16 ls_2 lh_14">
                                            모근 상태에 맞춘 <br>
                                            다양한 프로그램
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="sub_cont_box sub2_1_1_cont1_2_box pd_120">
                            <div class="sub_tabcontent_container flex_row fw jc_center al_fs">
                                <div class="sub_cont_title sub2_1_1_cont_title_center ta_c">
                                    <p class="sub_cont_title_text01 fz_22 lh_14 ls_2 normal gs_reveal" data-gs-delay="200">
                                        제모/탈모
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
                                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_5_2_ba_slide_img01_b.jpg" alt="">
                                                        </div>
                                                        <div class="sub2_1_1_ba_slide_img_a <?=($is_member ? '':'blur')?>">
                                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_5_2_ba_slide_img01_a.jpg" alt="">
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
                        <!--
                        <div class="sub_cont_box sub2_1_1_cont_premium bg_fa pt_160">
                            <div class="sub_tabcontent_container flex_row fw sa center">
                                <div class="sub_cont_doct_img sub2_5_2_tabcontent01_img img_left ta_r">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_5_2_tabcontent03_img01.png" alt="">
                                </div>
                                <div class="sub_cont_title sub2_5_2_cont_title_right title_right">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                                    <p class="sub_cont_title_text01 fz_32 lh_14 ls_2 light m_40 gs_reveal" data-gs-delay="200">
                                        두피와 모근에 본연의 힘을 더하는 <br>
                                        <span class="medium">탈모 치료 프로그램</span>
                                    </p>
                                    <p class="pc_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 light gs_reveal" data-gs-delay="400">
                                        탈모치료는 머리를 다시 자라나게 하는 것이 아닌, 남아 있는 <br>
                                        모근을 다시 건강하게 만드는 치료입니다. <br>
                                        인천 오라클피부과의 탈모 치료는 두피와 모근 본연의 힘을 건강하게 키워 <br>
                                        현재의 상태에서 모발이 굵고 건강하게 회복되는 것을 목표로 진행됩니다.
                                    </p>
                                    <p class="m_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 light gs_reveal" data-gs-delay="400">
                                        탈모치료는 머리를 다시 자라나게 하는 것이 아닌, 남아 있는 
                                        모근을 다시 건강하게 만드는 치료입니다. <br>
                                        인천 오라클피부과의 탈모 치료는 두피와 모근 본연의 힘을 건강하게 키워 
                                        현재의 상태에서 모발이 굵고 건강하게 회복되는 것을 목표로 진행됩니다.
                                    </p>
                                </div>
                            </div>
                        </div>
                        -->
                        <div class="sub_cont_box sub2_1_1_cont_premium bg_fa pd_160">
                            <div class="sub_tabcontent_container flex_row fw jc_center al_fs">
                                <div class="sub_cont_title sub2_1_4_cont_title_center ta_c">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                                    <p class="sub_cont_title_text01 fz_30 lh_16 ls_2 light m_80 gs_reveal" data-gs-delay="200">
                                        탈모의 <span class="medium">원인</span>
                                    </p>
                                </div>
                                <div class="sub2_1_1_premium_box flex_row fw se al_fs">
                                    <div class="column_third">
                                        <div class="sub2_1_1_premium_item sub2_1_1_premium_item01 ta_c gs_reveal" data-gs-delay="200">
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_5_2_item01.png" alt="">
                                            <p class="fz_22 ls_2 lh_16 normal m_10">
                                                유전적 원인
                                            </p>
                                            <p class="fz_16 ls_2 lh_14 normal">
                                                가족력에 의한 탈모 발생
                                            </p>
                                        </div>
                                    </div>
                                    <div class="column_third">
                                        <div class="sub2_1_1_premium_item sub2_1_1_premium_item02 ta_c gs_reveal" data-gs-delay="400">
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_5_2_item02.png" alt="">
                                            <p class="fz_22 ls_2 lh_16 normal m_10">
                                                남성 호르몬
                                            </p>
                                            <p class="fz_16 ls_2 lh_14 normal">
                                                안드로겐 호르몬 변화에 의한 발생
                                            </p>
                                        </div>
                                    </div>
                                    <div class="column_third">
                                        <div class="sub2_1_1_premium_item sub2_1_1_premium_item03 ta_c gs_reveal" data-gs-delay="600">
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_5_2_item03.png" alt="">
                                            <p class="fz_22 ls_2 lh_16 normal m_10">
                                                스트레스
                                            </p>
                                            <p class="fz_16 ls_2 lh_14 normal">
                                                과도한 스트레스에 의한 <br>
                                                일시적인 탈모 발생
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="sub_cont_box sub2_1_1_cont4_box">
                            <div class="sub2_1_1_cont4 sub2_5_1_cont4 flex_row fw jc_center center">
                                <div class="column_half">
                                    <div class="sub2_1_1_cont4_img">
                                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_5_2_cont4_img_right.jpg" alt="">
                                    </div>
                                </div>
                                <div class="column_half">
                                    <div class="sub2_5_2_cont04_left flex_row fw fd_c jc_center center">
                                        <div class="sub_cont_title ta_l">
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                                            <p class="sub_cont_title_text01 fz_32 lh_14 ls_2 light m_30 gs_reveal" data-gs-delay="200">
                                                <span class="medium">피부과 전문의의</span> <br>
                                                원인별 퍼스널 탈모 치료
                                            </p>
                                            <p class="sub_cont_title_text02 fz_16 lh_14 ls_2 light gs_reveal" data-gs-delay="400">
                                                인천 오라클의 탈모 치료는 다양한 원인, 복합적인 양상에 <br>
                                                맞춰 피부과 전문의가 정확한 진단 후 맞춤형 치료를 진행합니다.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="sub_cont_box sub2_5_2_cont_box bg_fa">
                            <div class="sub2_5_2_cont06_container flex_row fw jc_center al_fs">
                                <div class="sub_cont_title sub2_5_2_cont06_title_center ta_c">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                                    <p class="sub_cont_title_text02 fz_32 lh_14 ls_2 light m_80 gs_reveal" data-gs-delay="400">
                                        모근을 힘 있게, 모발은 탄력 있게 <br>
                                        <span class="medium">탈모 치료 프로그램</span>
                                    </p>
                                </div>
                                <div class="sub2_5_2_cont06_box flex_row fw jc_center al_fs">
                                    <div class="column_fifth">
                                        <div class="sub2_5_2_cont06_item sub2_5_2_cont06_item01 ta_c gs_reveal" data-gs-delay="200">
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_5_2_cont06_item01.png" alt="">
                                            
                                            <div class="sub2_5_2_cont06_item_text">
                                                <p class="sub2_4_2_cont03_item_text01 sortsmillgoudy fz_20 ls_2 lh_14 m_10">Point 01</p>
                                                <p class="fz_20 ls_2 lh_16 medium m_10">
                                                    헤어셀 자기장치료
                                                </p>
                                                <p class="fz_16 ls_2 lh_14 normal">
                                                    두피세포 활성화 <br>
                                                    두피 기능 개선
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column_fifth">
                                        <div class="sub2_5_2_cont06_item sub2_5_2_cont06_item02 ta_c gs_reveal" data-gs-delay="400">
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_5_2_cont06_item02.png" alt="">
                                            
                                            <div class="sub2_5_2_cont06_item_text">
                                                <p class="sub2_4_2_cont03_item_text01 sortsmillgoudy fz_20 ls_2 lh_14 m_10">Point 02</p>
                                                <p class="fz_20 ls_2 lh_16 medium m_10">
                                                    미니룩스 진정 관리
                                                </p>
                                                <p class="fz_16 ls_2 lh_14 normal">
                                                    두피 진정 & 재생
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column_fifth">
                                        <div class="sub2_5_2_cont06_item sub2_5_2_cont06_item03 ta_c gs_reveal" data-gs-delay="600">
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_5_2_cont06_item03.png" alt="">
                                            
                                            <div class="sub2_5_2_cont06_item_text">
                                                <p class="sub2_4_2_cont03_item_text01 sortsmillgoudy fz_20 ls_2 lh_14 m_10">Point 03</p>
                                                <p class="fz_20 ls_2 lh_16 medium m_10">
                                                    두피 메조테라피
                                                </p>
                                                <p class="fz_16 ls_2 lh_14 normal">
                                                    모발 생성 촉진 <br>
                                                    두피&모낭 영양 공급
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column_fifth">
                                        <div class="sub2_5_2_cont06_item sub2_5_2_cont06_item04 ta_c gs_reveal" data-gs-delay="800">
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_5_2_cont06_item04.png" alt="">
                                            
                                            <div class="sub2_5_2_cont06_item_text">
                                                <p class="sub2_4_2_cont03_item_text01 sortsmillgoudy fz_20 ls_2 lh_14 m_10">Point 04</p>
                                                <p class="fz_20 ls_2 lh_16 medium m_10">
                                                    성장인자 유도
                                                </p>
                                                <p class="fz_16 ls_2 lh_14 normal">
                                                    모낭세포 재생 유도 <br>
                                                    모발 성장 촉진
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column_fifth">
                                        <div class="sub2_5_2_cont06_item sub2_5_2_cont06_item05 ta_c gs_reveal" data-gs-delay="1000">
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_5_2_cont06_item05.png" alt="">
                                            
                                            <div class="sub2_5_2_cont06_item_text">
                                                <p class="sub2_4_2_cont03_item_text01 sortsmillgoudy fz_20 ls_2 lh_14 m_10">Point 05</p>
                                                <p class="fz_20 ls_2 lh_16 medium m_10">
                                                    비타민 두피 관리
                                                </p>
                                                <p class="fz_16 ls_2 lh_14 normal">
                                                    과잉 활성산소 제거 <br>
                                                    모발 퇴행 방지
                                                </p>
                                            </div>
                                        </div>
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
                                            제모/탈모 <span class="medium">레이저 프로그램</span>
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
                                <div class="sub_click_btn open m_20" id="sub_click_btn2">
                                    <p class="sub_cont_title_text01 sortsmillgoudy fz_20 lh_16 ls_2 light">
                                        Hair Ross Treatment
                                    </p>
                                    <p class="sub_cont_title_text02 fz_32 lh_16 ls_2 light">
                                        탈모 <span class="medium">치료 후 주의사항</span>
                                    </p>
                                </div>
                                <div class="sub2_2_1_cont05_text sub2_5_cont_ul_text open li_4 sub_click_box" id="sub_click_box2">
                                    <ul class="sub2_2_1_cont05_item_ul fz_17 normal ta_l">
                                        <li>
                                            <p>음주 및 과로를 삼가주시고 신체적 피로 및 스트레스를 가급적 삼가 주세요.</p>
                                        </li>
                                        <li>
                                            <p>무스, 스프레이, 젤 등 헤어 제품 사용을 가급적 피해 주세요.</p>
                                        </li>
                                        <li>
                                            <p>머리 감을 때 비누보다는 샴푸를 사용해 주세요.</p>
                                        </li>
                                        <li>
                                            <p>두피 스케일링, 마사지 등 두피를 자극하는 행동은 전문의와 먼저 상의해 주세요.</p>
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
                                        <span class="fz_30 ls_2 lh_14 normal">제모/탈모 치료</span>
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

                <div class="sub_cont05 sub2_5_3_cont05 sub_tabcontent sub_tabcontent3" id="sub_tabcontent3">
                    <div class="sub_tabcontent03_wrap">
                        <div class="sub_cont_box sub2_1_1_cont1_1_box bg_fa pd_120">
                            <div class="sub_tabcontent_container flex_row fw sa center">
                                <div class="m_cont sub_cont_doct_img sub2_5_2_tabcontent01_img img_right ta_r">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_5_3_tabcontent01_img01.png" alt="">
                                </div>
                                <div class="sub_cont_title sub2_5_1_cont_title_left title_left">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                                    <p class="sub_cont_title_text01 fz_32 lh_14 ls_2 light m_40">
                                        자연스럽게 풍성해지는 머리 숱, <br>
                                        <span class="medium">모발 이식 프로그램</span>
                                    </p>
                                    <p class="pc_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 light">
                                        모발이식은 탈모부터 헤어라인 교정 등 다양한 목적으로 진행되는 시술입니다. <br>
                                        인천 오라클의 모발이식 프로그램은 피부과 전문의가 직접 성별에 따라, <br>
                                        개인의 얼굴 골격과 두피 상태에 따라 정밀 디자인 후 진행하여 자연스럽게 <br>
                                        풍성해지는 머리숱을 선사합니다.
                                    </p>
                                    <p class="m_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 light">
                                        모발이식은 탈모부터 헤어라인 교정 등 다양한 목적으로 진행되는 시술입니다. <br>
                                        인천 오라클의 모발이식 프로그램은 피부과 전문의가 직접 성별에 따라, 
                                        개인의 얼굴 골격과 두피 상태에 따라 정밀 디자인 후 진행하여 자연스럽게 
                                        풍성해지는 머리숱을 선사합니다.
                                    </p>
                                </div>
                                <div class="pc_cont sub_cont_doct_img sub2_5_1_tabcontent01_img img_right ta_r">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_5_3_tabcontent01_img01.png" alt="">
                                </div>
                                <div class="sub2_4_2_cont03_item_box flex_row fw sa al_fs">
                                    <div class="sub2_4_2_cont03_item sub2_4_2_cont03_item01 ta_c">
                                        <p class="sub2_4_2_cont03_item_text01 sortsmillgoudy fz_20 ls_2 lh_14">Point 01</p>
                                        <p class="sub2_4_2_cont03_item_text02 fz_16 ls_2 lh_14">
                                            피부과 전문의 <br>
                                            1:1 책임 시술
                                        </p>
                                    </div>
                                    <div class="sub2_4_2_cont03_item sub2_4_2_cont03_item02 ta_c">
                                        <p class="sub2_4_2_cont03_item_text01 sortsmillgoudy fz_20 ls_2 lh_14">Point 02</p>
                                        <p class="sub2_4_2_cont03_item_text02 fz_16 ls_2 lh_14">
                                            모발 방향, 굵기, 밀도를 <br>
                                            고려한 섬세한 이식
                                        </p>
                                    </div>
                                    <div class="sub2_4_2_cont03_item sub2_4_2_cont03_item03 ta_c">
                                        <p class="sub2_4_2_cont03_item_text01 sortsmillgoudy fz_20 ls_2 lh_14">Point 03</p>
                                        <p class="sub2_4_2_cont03_item_text02 fz_16 ls_2 lh_14">
                                            단기간의 <br>
                                            탈모 개선 효과
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- 
                        <div class="sub_cont_box sub2_1_1_cont1_2_box pd_120">
                            <div class="sub_tabcontent_container flex_row fw jc_center al_fs">
                                <div class="sub_cont_title sub2_1_1_cont_title_center ta_c">
                                    <p class="sub_cont_title_text01 fz_22 lh_14 ls_2 normal gs_reveal" data-gs-delay="200">
                                        제모/탈모
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
                        
                        <div class="sub_cont_box sub2_5_3_cont03_box bg_fa pd_160">
                            <div class="container-1200 flex_row fw jc_center center">
                                <div class="sub_cont_title sub2_1_4_cont_title_center p_r ta_c m_80">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                                    <p class="sub_cont_top_title_text01 fz_30 lh_14 ls_2 light gs_reveal" data-gs-delay="200">
                                        모발 상태를 고려한 <br>
                                        <span class="medium">디자인 모발 이식</span>
                                    </p>
                                </div>
                                <div class="sub2_5_3_cont03_box p_r flex_row fw jc_center center m_60">
                                    <div class="sub_cont_doct_img sub2_5_3_tabcontent03_img img_left p_r ta_r gs_reveal" data-gs-delay="200">
                                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_5_3_tabcontent03_img01.png" alt="">
                                    </div>
                                    <div class="sub_cont_title sub2_5_3_cont03_title_right title_right">
                                        <p class="sub_cont_title_text02 fz_23 lh_14 ls_2 light m_20 gs_reveal" data-gs-delay="400">
                                            <span class="medium">헤어라인 교정</span>
                                        </p>
                                        <ul class="sub2_5_3_cont03_item_ul fz_16 normal ta_l gs_reveal" data-gs-delay="600">
                                            <li>
                                                <p>얼굴 골격과 라인을 고려한 디자인</p>
                                            </li>
                                            <li>
                                                <p>탈모 가능성을 염두한 디자인</p>
                                            </li>
                                            <li>
                                                <p>성별에 따라 달라지는 맞춤 디자인</p>
                                            </li>
                                            <li>
                                                <p>모발의 방향, 굵기, 밀도를 고려한 섬세한 <br>이식으로 자연스러움</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                
                                <div class="sub2_5_3_cont03_box p_r flex_row fw jc_center center">
                                    <div class="sub_cont_doct_img sub2_5_3_tabcontent03_img img_left p_r ta_r gs_reveal" data-gs-delay="200">
                                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_5_3_tabcontent03_img02.png" alt="">
                                    </div>
                                    <div class="sub_cont_title sub2_5_3_cont03_title_right title_right">
                                        <p class="sub_cont_title_text02 fz_23 lh_14 ls_2 light m_20 gs_reveal" data-gs-delay="400">
                                            <span class="medium">탈모 모발 이식</span>
                                        </p>
                                        <ul class="sub2_5_3_cont03_item_ul fz_16 normal ta_l gs_reveal" data-gs-delay="600">
                                            <li>
                                                <p>단기간에 탈모 개선 효과</p>
                                            </li>
                                            <li>
                                                <p>탈모 경과를 고려하여 경험 많은 전문의의 1:1 디자인</p>
                                            </li>
                                            <li>
                                                <p>잘 빠지지 않는 뒷통수 머리카락으로 오래 유지되는 이식모</p>
                                            </li>
                                            <li>
                                                <p>최대한 늦은 시기, 나이가 들었을 때 추천</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="sub_cont_box sub2_5_3_cont04_box pd_160">
                            <div class="sub_tabcontent_container flex_row fw jc_center center">
                                <div class="sub_cont_title sub2_1_4_cont_title_center p_r ta_c m_80">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                                    <p class="sub_cont_top_title_text01 fz_30 lh_14 ls_2 light gs_reveal" data-gs-delay="200">
                                        개인의 두피, <br>
                                        <span class="medium">모발 상태를 고려한 채취 방법</span>
                                    </p>
                                </div>
                                <ul class="sub2_5_3_cont04_ul flex_row fw jc_center al_fs">
                                    <li class="column_half">
                                        <div class="flex_row fw jc_center al_fs gs_reveal" data-gs-delay="200">
                                            <div class="sub_cont_doct_img sub2_5_3_tabcontent04_img img_right p_r ta_c m_20">
                                                <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_5_3_cont04_img01.png" alt="">
                                            </div>
                                            <div class="sub2_5_3_cont04_list ta_c">
                                                <p class="fz_24 ls_2 lh_14 medium m_20">
                                                    비절개식
                                                </p>
                                                <p class="pc_cont fz_17 ls_2 lh_14 normal">
                                                    흉터가 거의 없고 티 나지 않지만 긴 시술시간이 <br>
                                                    필요하며 절개식보다 정확도가 다소 낮음
                                                </p>
                                                <p class="m_cont fz_17 ls_2 lh_14 normal">
                                                    흉터가 거의 없고 티 나지 않지만 긴 시술시간이 
                                                    필요하며 절개식보다 정확도가 다소 낮음
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="column_half">
                                        <div class="flex_row fw jc_center al_fs gs_reveal" data-gs-delay="400">
                                            <div class="sub_cont_doct_img sub2_5_3_tabcontent04_img img_right p_r ta_c m_20">
                                                <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_5_3_cont04_img02.png" alt="">
                                            </div>
                                            <div class="sub2_5_3_cont04_list ta_c">
                                                <p class="fz_24 ls_2 lh_14 medium m_20">
                                                    절개식
                                                </p>
                                                <p class="pc_cont fz_17 ls_2 lh_14 normal">
                                                    띠 모양의 흉터가 남을 수 있지만 시술 시간이 짧고 <br>
                                                    손상률이 거의 없어 정확도가 높은 치료법
                                                </p>
                                                <p class="m_cont fz_17 ls_2 lh_14 normal">
                                                    띠 모양의 흉터가 남을 수 있지만 시술 시간이 짧고 
                                                    손상률이 거의 없어 정확도가 높은 치료법
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="sub_cont_box sub2_4_5_cont06_box bg_fa">
                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_5_3_cont05_img01.png" alt="">
                            
                            <div class="sub2_4_5_cont06_title ta_c">
                                <p class="sub2_4_5_cont06_text01 fz_19 lh_16 ls_2 normal gs_reveal" data-gs-delay="200">
                                    인천 오라클의 모발이식은 숙련된 전문의가 환자분과 <br>
                                    충분한 상담을 거쳐 모발 채취/이식방법을 결정합니다.
                                </p>
                            </div>
                        </div>
                        
                        <div class="sub_cont_box sub2_5_3_cont07_box bg_fa pd_60 pt_160">
                            <div class="sub_tabcontent_container_full flex_row fw jc_center al_fs">
                                <div class="sub_cont_title sub2_5_3_cont7_title_left ta_l">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                                    <p class="sub_cont_title_text02 fz_32 lh_14 ls_2 light m_40 gs_reveal" data-gs-delay="400">
                                        두피&모발을 더 건강하게, <br>
                                        <span class="medium">모발 이식 후 관리 프로그램</span>
                                    </p>
                                    <p class="sub_cont_title_text03 fz_17 lh_14 ls_2 normal gs_reveal" data-gs-delay="400">
                                        모발 이식 후 두피 재생 및 모발 관리를 위해 <br>
                                        관리 프로그램을 진행합니다.
                                    </p>
                                </div>
                                <div class="swiper-container sub2_5_3_cont7_slider">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide sub2_5_3_cont7_slide">
                                            <div class="sub2_5_3_cont07_item sub2_5_3_cont07_item01 ta_c gs_reveal" data-gs-delay="200">
                                                <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_5_3_cont07_item01.png" alt="">
                                                <p class="fz_24 ls_2 lh_16 medium m_10">
                                                    볼빅 트랜스폼
                                                </p>
                                                <p class="fz_17 ls_2 lh_14 normal">
                                                    모발이식 후 생착률 ↑
                                                </p>
                                            </div>
                                        </div>
                                        <div class="swiper-slide sub2_5_3_cont7_slide">
                                            <div class="sub2_5_3_cont07_item sub2_5_3_cont07_item02 ta_c gs_reveal" data-gs-delay="400">
                                                <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_5_3_cont07_item02.png" alt="">
                                                <p class="fz_24 ls_2 lh_16 medium m_10">
                                                    메조건
                                                </p>
                                                <p class="fz_17 ls_2 lh_14 normal">
                                                    모발 생성, 모근 건강 ↑
                                                </p>
                                            </div>
                                        </div>
                                        <div class="swiper-slide sub2_5_3_cont7_slide">
                                            <div class="sub2_5_3_cont07_item sub2_5_3_cont07_item03 ta_c gs_reveal" data-gs-delay="600">
                                                <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_5_3_cont07_item03.png" alt="">
                                                <p class="fz_24 ls_2 lh_16 medium m_10">
                                                    PRP 자가혈주사
                                                </p>
                                                <p class="fz_17 ls_2 lh_14 normal">
                                                    모발이식 후 모낭 강화
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-scrollbar"></div>
                                </div>
                            </div>
                        </div>
                        
                        <!--
                        <div class="sub_cont_box sub2_2_1_cont04_box p_r bg_fa pd_60">
                            <div class="container-1300 sub2_2_1_cont05_container">
                                <div class="sub_click_btn open m_20" id="sub_click_btn3">
                                    <p class="sub_cont_title_text01 sortsmillgoudy fz_20 lh_16 ls_2 light">
                                        Hair Transplantation
                                    </p>
                                    <p class="sub_cont_title_text02 fz_32 lh_16 ls_2 light">
                                        모발이식 <span class="medium"> 후 주의사항</span>
                                    </p>
                                </div>
                                <div class="sub2_2_1_cont05_text sub2_5_cont_ul_text sub2_5_cont_ul_text03 open li_4 sub_click_box" id="sub_click_box3">
                                    <ul class="sub2_2_1_cont05_item_ul fz_17 normal ta_l">
                                        <li>
                                            <p>수술 후 2~3일 정도는 누워서 안정을 취하시는 것이 좋습니다.</p>
                                        </li>
                                        <li>
                                            <p>수술 후 3일 간은 머리를 감겨드리며, 이 후 집에서 조심스럽게 감을 수 있습니다.</p>
                                        </li>
                                        <li>
                                            <p>수술 후 이식모 대부분이 빠지고 3~5개월 후 부터 자라는 모발은 반영구적 입니다.</p>
                                        </li>
                                        <li>
                                            <p>약 10개월 후 이식모가 충분히 자라게 되며 다른 치료 병행 시 더욱 효과적입니다.</p>
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
                                        <span class="fz_30 ls_2 lh_14 normal">제모/탈모 치료</span>
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
        }
    }
    //<!-- //Javascript를 이용해서 다음 페이지에 파라미터 넘기기 위한 방법 -->
</script>