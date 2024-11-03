<?php
include_once('./_common.php');
//if (G5_IS_MOBILE) {
//    include_once(G5_MOBILE_PATH.'/index.php');
//    return;
//}

// 웹사이트 타이틀
$g5['title'] = '미백/홍조';

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
            <div class="sub_top_view sub2_2_top_view">
                <div class="sub_top_view_bg sub2_2_top_view_bg"></div>
                <div class="sub_top_view_text_wrap sub2_2_top_view_text_wrap ta_c">
                    <div class="sub_top_view_text01 sub2_2_top_view_text01">
                        <p class="sortsmillgoudy fz_30 lh_14 ls_2 sub_text_ani">
                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub_top_view_text_icon.png" alt="">
                            whitening Program
                        </p>
                    </div>
                    <div class="sub_top_view_text02 sub2_2_top_view_text02 m_20">
                        <p class="fz_40 lh_14 ls_2 medium sub_text_ani">
                            미백/홍조
                        </p>
                    </div>
                    <div class="sub_top_view_text03 sub2_2_top_view_text03">
                        <p class="fz_16 lh_14 ls_2 normal sub_text_ani">
                            다양한 프리미엄 레이저를 콜라보레이션하여
                        </p>
                    </div>
                    <div class="sub_top_view_text04 sub2_2_top_view_text04">
                        <p class="fz_16 lh_14 ls_2 normal sub_text_ani">
                            피부에 광채를 더하는 혁신적인 화이트닝 케어
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
        
        <section class="sub_tab_cont sub2_2_tab_cont bg_fa pt_60">
            <article class="sub_cont02 sub2_2_cont02">
                <div class="sub_tab">
                    <ul class="sub_tab_ul flex_row jc_center center">
                        <li id="sub_tablinks01" class="sub_tab_li sub_tablinks active" onclick="opensubtab(event, 'sub_tabcontent1')">
                            <a href="javascript:void(0);">
                                <p class="fz_16 ta_c">미백관리</p>
                            </a>
                        </li>
                        <li id="sub_tablinks02" class="sub_tab_li sub_tablinks" onclick="opensubtab(event, 'sub_tabcontent2')">
                            <a href="javascript:void(0);">
                                <p class="fz_16 ta_c">안면홍조</p>
                            </a>
                        </li>
                        <li id="sub_tablinks03" class="sub_tab_li sub_tablinks" onclick="opensubtab(event, 'sub_tabcontent3')">
                            <a href="javascript:void(0);">
                                <p class="fz_16 ta_c">잡티한방</p>
                            </a>
                        </li>
                        <li id="sub_tablinks04" class="sub_tab_li sub_tablinks" onclick="opensubtab(event, 'sub_tabcontent4')">
                            <a href="javascript:void(0);">
                                <p class="fz_16 ta_c">혈관점/혈관종/실핏줄</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </article>
            
            <article class="sub_tabcontent_wrap sub2_1_1_tabcontent_wrap">
                <div class="sub_cont03 sub2_1_1_cont03 sub_tabcontent sub_tabcontent1" id="sub_tabcontent1">
                    <div class="sub_tabcontent01_wrap">
                        <div class="sub_cont_box sub2_1_1_cont1_1_box bg_fa pd_120">
                            <div class="sub_tabcontent_container flex_row fw sa center">
                                <div class="sub_cont_title sub2_2_1_cont_title_left title_left">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                                    <p class="sub_cont_title_text01 fz_32 lh_14 ls_2 light m_40">
                                        칙칙한 피부 톤을 맑고 깨끗하게, <br>
                                        <span class="medium">본연의 광채를 되찾는 궁극의 미백 관리</span>
                                    </p>
                                    <p class="pc_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 light m_20">
                                        인천 오라클의 미백 관리는 피부를 거뭇거뭇하게 만드는 멜라닌 색소 제거는 <br>
                                        물론, 피부 진피층과 표피층의 환경을 근본적으로 개선하는 치료까지 <br>
                                        복합적으로 진행하는 올인원 피부 미백 케어 프로그램입니다.
                                    </p>
                                    <p class="m_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 light m_20">
                                        인천 오라클의 미백 관리는 피부를 거뭇거뭇하게 만드는 멜라닌 색소 제거는 
                                        물론, 피부 진피층과 표피층의 환경을 근본적으로 개선하는 치료까지 
                                        복합적으로 진행하는 올인원 피부 미백 케어 프로그램입니다.
                                    </p>
                                    <p class="pc_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light">
                                        피부과 전문의가 주치의로서 피부 상태를 체크하며 색소 제거와 피부 톤 개선을 <br>
                                        넘어, 궁극적으로 색소질환이 잘 생기지 않는 건강한 피부로의 개선을 도모합니다.
                                    </p>
                                    <p class="m_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light">
                                        피부과 전문의가 주치의로서 피부 상태를 체크하며 색소 제거와 피부 톤 개선을 
                                        넘어, 궁극적으로 색소질환이 잘 생기지 않는 건강한 피부로의 개선을 도모합니다.
                                    </p>
                                </div>
                                <div class="sub_cont_doct_video sub2_2_1_tabcontent01_img img_right ta_r">
                                    <div class="video-real-selfie small-video-wrap" style="overflow:hidden;">
                                        <div class="video-real-selfie-wrapper" style="position: relative; padding:56.25% 0 0;">
                                            <video id="realSelfieVideo" poster="<?php echo G5_THEME_URL?>/sub/img/sub2_2_1_cont01_video_bg01.jpg" preload="none" style="position: absolute; top:0; left:0; width:100%;"  autoplay muted loop playsinline>
                                                <source src="<?php echo G5_THEME_URL?>/video/sub2_2_1_cont01_video01.mp4" type="video/mp4">
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
                                        미백/홍조
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
                                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_2_1_ba_slide_img01_b_230404.jpg" alt="">
                                                        </div>
                                                        <div class="sub2_1_1_ba_slide_img_a <?=($is_member ? '':'blur')?>">
                                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_2_1_ba_slide_img01_a_230404.jpg" alt="">
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
                                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_2_1_ba_slide_img02_b_230404.jpg" alt="">
                                                        </div>
                                                        <div class="sub2_1_1_ba_slide_img_a <?=($is_member ? '':'blur')?>">
                                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_2_1_ba_slide_img02_a_230404.jpg" alt="">
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
                                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_2_1_ba_slide_img03_b_230404.jpg" alt="">
                                                        </div>
                                                        <div class="sub2_1_1_ba_slide_img_a <?=($is_member ? '':'blur')?>">
                                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_2_1_ba_slide_img03_a_230404.jpg" alt="">
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
                        
                        <div class="sub_cont_box sub2_2_1_cont_premium bg_fa pd_160">
                            <div class="sub_tabcontent_container sub2_1_cont03_container flex_row fw sa center">
                                <div class="sub_cont_doct_img sub2_2_1_cont03_img img_left p_r ta_c">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_2_1_cont03_img01.png" alt="">
                                </div>
                                <div class="sub_cont_title sub2_2_1_cont03_title_right title_right">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                                    <p class="sub_cont_title_text01 fz_32 lh_14 ls_2 light m_30 gs_reveal" data-gs-delay="200">
                                        색소 원인에 맞춰 진행되는 <br>
                                        <span class="medium">올인원 레이저 테라피</span>
                                    </p>
                                    <p class="pc_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 normal m_40 gs_reveal" data-gs-delay="400">
                                        기미부터 점, 검버섯, 잡티와 같은 색소 질환과 홍조 등의 혈관 질환은 비슷해 <br>
                                        보이지만 원인이 다양하고, 원인에 따라 치료 방법은 모두 달라져야 합니다.
                                    </p>
                                    <p class="m_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 normal m_40 gs_reveal" data-gs-delay="400">
                                        기미부터 점, 검버섯, 잡티와 같은 색소 질환과 홍조 등의 혈관 질환은 비슷해 
                                        보이지만 원인이 다양하고, 원인에 따라 치료 방법은 모두 달라져야 합니다.
                                    </p>
                                    <p class="pc_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 normal gs_reveal" data-gs-delay="600">
                                        인천 오라클의 미백 관리는 원인에 따라 고출력 색소 레이저부터 프랙셔널 <br>
                                        레이저, 혈관 레이저까지 다양한 레이저를 복합적으로 사용하는 올인원 <br>
                                        테라피로 불규칙한 피부 톤을 깨끗하고 맑게 개선합니다.
                                    </p>
                                    <p class="m_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 normal gs_reveal" data-gs-delay="600">
                                        인천 오라클의 미백 관리는 원인에 따라 고출력 색소 레이저부터 프랙셔널 
                                        레이저, 혈관 레이저까지 다양한 레이저를 복합적으로 사용하는 올인원 
                                        테라피로 불규칙한 피부 톤을 깨끗하고 맑게 개선합니다.
                                    </p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="sub_cont_box sub2_2_1_cont04_box p_r bg_fa pd_60">
                            <div class="sub2_2_1_cont4_bg">
                                <div class="sub_tabcontent_container_full sub2_2_1_cont04_container flex_row fw jc_fs al_fs">
                                    <div class="sub_cont_title title_left">
                                        <p class="sub_cont_title_text01 sortsmillgoudy fz_20 lh_14 ls_2 light gs_reveal" data-gs-delay="200">
                                            Oracle Point
                                        </p>
                                        <p class="sub_cont_title_text02 fz_32 lh_14 ls_2 light m_20 gs_reveal" data-gs-delay="400">
                                            미백/홍조 <span class="medium">레이저 프로그램</span>
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
                                        Whitening Program
                                    </p>
                                    <p class="sub_cont_title_text02 fz_32 lh_16 ls_2 light">
                                        미백관리 <span class="medium">후 주의사항</span>
                                    </p>
                                </div>
                                <div class="sub2_2_1_cont05_text open li_4 sub_click_box" id="sub_click_box1">
                                    <ul class="sub2_2_1_cont05_item_ul fz_17 normal ta_l">
                                        <li>
                                            <p>화장은 시술 당일부터 가능하나, 다음날부터 하시는 것이 좋습니다.</p>
                                        </li>
                                        <li>
                                            <p>시술 후 뜨거운 사우나, 목욕탕, 수영장 이용을 자제해 주세요.</p>
                                        </li>
                                        <li>
                                            <p>꾸준한 시술과 규칙적인 수면, 수분 섭취 등을 병행하시면 더욱 큰 효과를 보실 수 있습니다.</p>
                                        </li>
                                        <li>
                                            <p>시술 부위를 세게 만지거나 손으로 누르는 행동은 가급적 삼가주세요.</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        -->
                        
                        <div class="sub_cont_box sub2_1_youtube_box pd_80">
                            <div class="container-sm flex_row fw jc_center al_fs">
                                <div class="sub_cont_title sub2_1_4_cont_title_center ta_c">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                                    <p class="sub_cont_title_text01 sortsmillgoudy fz_50 lh_14 ls_2 gs_reveal" data-gs-delay="200">
                                        Youtube
                                    </p>
                                    <p class="sub_cont_title_text02 fz_20 lh_16 ls_2 normal gs_reveal m_60" data-gs-delay="400">
                                        피부과 전문의가 직접 들려 주는 <br>
                                        <span class="fz_30 ls_2 lh_14 normal">미백/홍조 치료</span>
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
                                <div class="sub_cont_title sub2_2_1_cont_title_left title_left">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                                    <p class="sub_cont_title_text01 fz_32 lh_14 ls_2 light m_40">
                                        피부 표면부터 혈관까지 케어하는 <br>
                                        <span class="medium">근본적인 홍조 치료</span>
                                    </p>
                                    <p class="pc_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 light m_20">
                                        얼굴이 붉어지는 안면홍조는 방치할 경우 모세혈관 확장증으로 이어질 수 <br>
                                        있으며, 한 번 늘어난 안면홍조의 미세혈관은  저절로 회복되지 않으므로 <br>
                                        적절한 치료가 필요합니다.
                                    </p>
                                    <p class="m_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 light m_20">
                                        얼굴이 붉어지는 안면홍조는 방치할 경우 모세혈관 확장증으로 이어질 수 
                                        있으며, 한 번 늘어난 안면홍조의 미세혈관은  저절로 회복되지 않으므로 
                                        적절한 치료가 필요합니다.
                                    </p>
                                    <p class="pc_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light">
                                        인천 오라클피부과는 숙련된 피부과 전문의가 개인별 홍조 원인과 피부 상태를 <br>
                                        정확하게 진단 후 피부 표면부터 혈관까지 맞춤 치료를 진행하여 맑고 환한 <br>
                                        피부를 회복합니다.
                                    </p>
                                    <p class="m_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light">
                                        인천 오라클피부과는 숙련된 피부과 전문의가 개인별 홍조 원인과 피부 상태를 
                                        정확하게 진단 후 피부 표면부터 혈관까지 맞춤 치료를 진행하여 맑고 환한 
                                        피부를 회복합니다.
                                    </p>
                                </div>
                                <div class="sub_cont_doct_img sub2_1_1_tabcontent01_img img_right ta_r">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_2_2_tabcontent01_img01.png" alt="">
                                </div>
                            </div>
                        </div>
                        
                        <div class="sub_cont_box sub2_1_1_cont1_2_box pd_120">
                            <div class="sub_tabcontent_container flex_row fw jc_center al_fs">
                                <div class="sub_cont_title sub2_1_1_cont_title_center ta_c">
                                    <p class="sub_cont_title_text01 fz_22 lh_14 ls_2 normal gs_reveal" data-gs-delay="200">
                                        미백/홍조
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
                                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_2_2_ba_slide_img01_b_230404.jpg" alt="">
                                                        </div>
                                                        <div class="sub2_1_1_ba_slide_img_a <?=($is_member ? '':'blur')?>">
                                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_2_2_ba_slide_img01_a_230404.jpg" alt="">
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
                                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_2_2_ba_slide_img02_b_230404.jpg" alt="">
                                                        </div>
                                                        <div class="sub2_1_1_ba_slide_img_a <?=($is_member ? '':'blur')?>">
                                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_2_2_ba_slide_img02_a_230404.jpg" alt="">
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
                                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_2_2_ba_slide_img03_b_230404.jpg" alt="">
                                                        </div>
                                                        <div class="sub2_1_1_ba_slide_img_a <?=($is_member ? '':'blur')?>">
                                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_2_2_ba_slide_img03_a_230404.jpg" alt="">
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
                        
                        <div class="sub_cont_box sub2_1_1_cont_premium bg_fa pd_160">
                            <div class="sub_tabcontent_container flex_row fw jc_center al_fs">
                                <div class="sub_cont_title sub2_1_4_cont_title_center ta_c">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                                    <p class="sub_cont_title_text01 fz_30 lh_16 ls_2 light m_80 gs_reveal" data-gs-delay="200">
                                        홍조 증상에 맞춘 <br>
                                        <span class="medium">피부과 전문의 1:1 맞춤 치료</span>
                                    </p>
                                </div>
                                <div class="sub2_1_1_premium_box flex_row fw se al_fs">
                                    <div class="column_third">
                                        <div class="sub2_1_1_premium_item sub2_1_1_premium_item01 ta_c gs_reveal" data-gs-delay="200">
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_2_2_premium_item01.png" alt="">
                                            <p class="fz_22 ls_2 lh_16 normal m_10">
                                                안면홍조
                                            </p>
                                            <p class="pc_cont_434 fz_16 ls_2 lh_14 normal">
                                                혈관의 과도한 확장으로  피부가 쉽게 붉어지고, <br>
                                                붉음증이 오래 지속되는 증상
                                            </p>
                                            <p class="m_cont_434 fz_16 ls_2 lh_14 normal">
                                                혈관의 과도한 확장으로  피부가 쉽게 붉어지고, 
                                                붉음증이 오래 지속되는 증상
                                            </p>
                                        </div>
                                    </div>
                                    <div class="column_third">
                                        <div class="sub2_1_1_premium_item sub2_1_1_premium_item02 ta_c gs_reveal" data-gs-delay="400">
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_2_2_premium_item02.png" alt="">
                                            <p class="fz_22 ls_2 lh_16 normal m_10">
                                                모세혈관확장증
                                            </p>
                                            <p class="pc_cont_434 fz_16 ls_2 lh_14 normal">
                                                혈관이 비정상적으로 늘어나 피부 위로 <br>
                                                실핏줄이 비치고 얼굴이 달아오르는 증상
                                            </p>
                                            <p class="m_cont_434 fz_16 ls_2 lh_14 normal">
                                                혈관이 비정상적으로 늘어나 피부 위로 
                                                실핏줄이 비치고 얼굴이 달아오르는 증상
                                            </p>
                                        </div>
                                    </div>
                                    <div class="column_third">
                                        <div class="sub2_1_1_premium_item sub2_1_1_premium_item03 ta_c gs_reveal" data-gs-delay="600">
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_2_2_premium_item03.png" alt="">
                                            <p class="fz_22 ls_2 lh_16 normal m_10">
                                                주사
                                            </p>
                                            <p class="pc_cont_434 fz_16 ls_2 lh_14 normal">
                                                만성 염증성 피부질환으로, 홍조와 구진, <br>
                                                농포, 따가움증 등을 동반하는 증상
                                            </p>
                                            <p class="m_cont_434 fz_16 ls_2 lh_14 normal">
                                                만성 염증성 피부질환으로, 홍조와 구진, 
                                                농포, 따가움증 등을 동반하는 증상
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="sub_cont_box sub2_1_1_cont4_box">
                            <div class="sub2_1_1_cont4 flex_row fw jc_center center">
                                <div class="column_half">
                                    <div class="sub2_1_1_cont4_img">
                                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_2_2_cont4_img.jpg" alt="">
                                    </div>
                                </div>
                                <div class="column_half">
                                    <div class="flex_row fw fd_c jc_center center">
                                        <div class="sub_cont_title sub2_1_1_cont4_title_center">
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                                            <p class="sub_cont_title_text01 fz_32 lh_14 ls_2 light m_30 gs_reveal" data-gs-delay="200">
                                                <span class="medium">피부과 전문의가 알려드리는</span> <br>
                                                안면홍조 치료의 핵심
                                            </p>
                                            <p class="pc_cont_434 sub_cont_title_text02 fz_16 lh_14 ls_2 light m_80 gs_reveal" data-gs-delay="400">
                                                홍조 양상과 발생 원인, 혈관 상태를 정확하게 진단하지 않고 <br>
                                                무분별하게 치료할 경우, 레이저 치료 후 증상이 더 심해질 수 <br>
                                                있습니다. 제대로 된 안면홍조 치료를 위해  피부과 전문의가 <br>
                                                피부 표피와 혈관 상태까지 정확하게 진단한 뒤, 맞춤 복합 레이저 <br>
                                                치료를 진행합니다.
                                            </p>
                                            <p class="m_cont_434 sub_cont_title_text02 fz_16 lh_14 ls_2 light m_80 gs_reveal" data-gs-delay="400">
                                                홍조 양상과 발생 원인, 혈관 상태를 정확하게 진단하지 않고 
                                                무분별하게 치료할 경우, 레이저 치료 후 증상이 더 심해질 수 
                                                있습니다. 제대로 된 안면홍조 치료를 위해  피부과 전문의가 
                                                피부 표피와 혈관 상태까지 정확하게 진단한 뒤, 맞춤 복합 레이저 
                                                치료를 진행합니다.
                                            </p>
                                        </div>
                                        <div class="sub2_1_1_cont4_more_btn">
                                            <a href="<?php echo G5_THEME_URL?>/sub/sub1_4.php">
                                                <p class="fz_16 lh_1 ls_2 light ta_c">more</p>
                                            </a>
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
                                        오라클만의 <span class="medium">미백/홍조 치료 특별함</span>
                                    </p>
                                </div>
                                <div class="sub_tabcontent_container sub2_1_cont03_container flex_row fw sa center">
                                    <div class="sub_cont_title sub2_1_4_cont_title_left title_left">
                                        <p class="sub_cont_title_text01 sortsmillgoudy fz_20 lh_14 ls_2 light gs_reveal" data-gs-delay="200">
                                            Oracle Point.01
                                        </p>
                                        <p class="sub_cont_title_text02 fz_32 lh_14 ls_2 light m_40 gs_reveal" data-gs-delay="400">
                                            <span class="medium">홍조의 원인까지 확인 가능한</span><br>
                                            안면홍조 피부 진단
                                        </p>
                                        <p class="pc_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light gs_reveal m_20" data-gs-delay="600">
                                            4가지 LED 광원을 이용한 피부진단 시스템으로 육안으로 볼 수 없는 질환들을 <br>
                                            나타내어 피부 문제점을 더 정확하게 파악하고 피부과 전문의 노하우를 더해 <br>
                                            세심한 치료 계획을 세웁니다. 
                                        </p>
                                        <p class="m_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light gs_reveal m_20" data-gs-delay="600">
                                            4가지 LED 광원을 이용한 피부진단 시스템으로 육안으로 볼 수 없는 질환들을 
                                            나타내어 피부 문제점을 더 정확하게 파악하고 피부과 전문의 노하우를 더해 
                                            세심한 치료 계획을 세웁니다. 
                                        </p>
                                        <p class="pc_cont_434 sub_cont_title_text04 fz_16 lh_16 ls_2 light gs_reveal" data-gs-delay="800">
                                            홍조, 멜라닌 색소 상태 등을 확인하여 민감성 여부 판단하여 부위별로 정확히 <br>
                                            치료합니다. 치료 후에는. 전/후를 비교하여 얼마나 개선 되었는지를 분석합니다.
                                        </p>
                                        <p class="m_cont_434 sub_cont_title_text04 fz_16 lh_16 ls_2 light gs_reveal" data-gs-delay="800">
                                            홍조, 멜라닌 색소 상태 등을 확인하여 민감성 여부 판단하여 부위별로 정확히 
                                            치료합니다. 치료 후에는. 전/후를 비교하여 얼마나 개선 되었는지를 분석합니다.
                                        </p>
                                    </div>
                                    <div class="sub_cont_doct_img sub2_2_1_tabcontent01_img img_right p_r ta_r">
                                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_2_2_tabcontent03_img01.png" alt="">
                                        <!--
                                        <div class="sub2_1_4_cont3_more_btn">
                                            <a href="javascript:void(0);">
                                                <p class="fz_16 lh_1 ls_2 light ta_c">more</p>
                                            </a>
                                        </div>
                                        -->
                                    </div>
                                </div>

                                <div class="sub_tabcontent_container flex_row fw sa center">
                                    <div class="sub_cont_doct_img sub2_1_1_tabcontent04_img img_left p_r ta_c pt_30">
                                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_2_1_tabcontent04_img01.png" alt="">
                                    </div>
                                    <div class="sub_cont_title sub2_1_1_tabcontent04_title_right title_right">
                                        <p class="sub_cont_title_text01 sortsmillgoudy fz_20 lh_14 ls_2 light gs_reveal" data-gs-delay="200">
                                            Oracle Point.02
                                        </p>
                                        <p class="sub_cont_title_text02 fz_32 lh_14 ls_2 light m_40 gs_reveal" data-gs-delay="400">
                                            홍조에 특화된 혈관 레이저 <br>
                                            <span class="medium">시너지</span>
                                        </p>
                                        <ul class="sub2_8_6_cont03_item_ul fz_17 normal ta_l m_40">
                                            <li>
                                                <p>혈관, 홍조, 모공, 흉터 등 다양한 피부 고민 개선 효과</p>
                                            </li>
                                            <li>
                                                <p>노화된 혈관을 제거하고 건강한 혈관을 새로 생성</p>
                                            </li>
                                            <li>
                                                <p>스마트 쿨링 시스템으로 통증 최소화</p>
                                            </li>
                                        </ul>
                                        <p class="pc_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 normal gs_reveal" data-gs-delay="600">
                                            PDL과 Nd:YAG 레이저가 결합된 레이저로, 홍조와 혈관 상태에 따라 <br>
                                            적합한 파장의 레이저를 선택하고, 동시에 활용하여 정확하게 치료합니다.
                                        </p>
                                        <p class="m_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 normal gs_reveal" data-gs-delay="600">
                                            PDL과 Nd:YAG 레이저가 결합된 레이저로, 홍조와 혈관 상태에 따라 
                                            적합한 파장의 레이저를 선택하고, 동시에 활용하여 정확하게 치료합니다.
                                        </p>
                                    </div>
                                </div>

                                <div class="sub_tabcontent_container_full flex_row fw jc_fs al_fs">
                                    <div class="sub_cont_title title_left">
                                        <p class="sub_cont_title_text01 sortsmillgoudy fz_20 lh_14 ls_2 light gs_reveal" data-gs-delay="200">
                                            Oracle Point.03
                                        </p>
                                        <p class="sub_cont_title_text02 fz_32 lh_14 ls_2 light m_40 gs_reveal" data-gs-delay="400">
                                            미백/홍조 <span class="medium">레이저 프로그램</span>
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
                                        Faceflush
                                    </p>
                                    <p class="sub_cont_title_text02 fz_32 lh_16 ls_2 light">
                                        안면홍조 <span class="medium">치료 후 주의사항</span>
                                    </p>
                                </div>
                                <div class="sub2_2_1_cont05_text open li_4 sub_click_box" id="sub_click_box2">
                                    <ul class="sub2_2_1_cont05_item_ul fz_17 normal ta_l">
                                        <li>
                                            <p>화장은 시술 당일부터 가능하나, 다음날부터 하시는 것이 좋습니다.</p>
                                        </li>
                                        <li>
                                            <p>시술 후 뜨거운 사우나, 목욕탕, 수영장 이용을 자제해 주세요.</p>
                                        </li>
                                        <li>
                                            <p>꾸준한 시술과 규칙적인 수면, 수분 섭취 등을 병행하시면 더욱 큰 효과를 보실 수 있습니다.</p>
                                        </li>
                                        <li>
                                            <p>시술 부위를 세게 만지거나 손으로 누르는 행동은 가급적 삼가주세요.</p>
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
                                        <span class="fz_30 ls_2 lh_14 normal">미백/홍조 치료</span>
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
                                <div class="sub_cont_title sub2_1_1_cont_title_left title_left">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                                    <p class="sub_cont_title_text01 fz_32 lh_14 ls_2 light m_40">
                                        한 방에 완성하는 화이트닝 <br>
                                        <span class="medium">잡티한방</span>
                                    </p>
                                    <p class="pc_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 light m_20">
                                        잡티한방 프로그램은 다양한 색소의 종류, 깊이에 따라 차별화된 치료를 <br>
                                        적용하여 피부 잡티를 단 1~2회만으로도 눈에 띄게 제거하는 프로그램입니다.
                                    </p>
                                    <p class="m_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 light m_20">
                                        잡티한방 프로그램은 다양한 색소의 종류, 깊이에 따라 차별화된 치료를 
                                        적용하여 피부 잡티를 단 1~2회만으로도 눈에 띄게 제거하는 프로그램입니다.
                                    </p>
                                    <p class="pc_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light">
                                        주근깨부터 흑자, 색소침착, 기미 등 얼굴을 칙칙하게 만드는 잡티를 <br>
                                        깊이별 다양한 레이저 장비를 결합하여 근본적으로 제거하고, 맑고 투명한 <br>
                                        피부를 완성합니다.
                                    </p>
                                    <p class="m_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light">
                                        주근깨부터 흑자, 색소침착, 기미 등 얼굴을 칙칙하게 만드는 잡티를 
                                        깊이별 다양한 레이저 장비를 결합하여 근본적으로 제거하고, 맑고 투명한 
                                        피부를 완성합니다.
                                    </p>
                                </div>
                                <div class="sub_cont_doct_video sub2_2_3_tabcontent01_img img_right ta_r">
                                    <div class="video-real-selfie small-video-wrap" style="overflow:hidden;">
                                        <div class="video-real-selfie-wrapper" style="position: relative; padding:56.25% 0 0;">
                                            <video id="realSelfieVideo" poster="<?php echo G5_THEME_URL?>/sub/img/sub2_2_3_cont01_video_bg01.jpg" preload="none" style="position: absolute; top:0; left:0; width:100%;"  autoplay muted loop playsinline>
                                                <source src="<?php echo G5_THEME_URL?>/video/sub2_2_3_cont01_video01.mp4" type="video/mp4">
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
                                        미백/홍조
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
                                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_2_3_ba_slide_img01_b_230404.jpg" alt="">
                                                        </div>
                                                        <div class="sub2_1_1_ba_slide_img_a <?=($is_member ? '':'blur')?>">
                                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_2_3_ba_slide_img01_a_230404.jpg" alt="">
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
                                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_2_3_ba_slide_img02_b_230404.jpg" alt="">
                                                        </div>
                                                        <div class="sub2_1_1_ba_slide_img_a <?=($is_member ? '':'blur')?>">
                                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_2_3_ba_slide_img02_a_230404.jpg" alt="">
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
                                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_2_3_ba_slide_img03_b_230404.jpg" alt="">
                                                        </div>
                                                        <div class="sub2_1_1_ba_slide_img_a <?=($is_member ? '':'blur')?>">
                                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_2_3_ba_slide_img03_a_230404.jpg" alt="">
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
                        
                        <div class="sub_cont_box sub2_2_3_cont_box pd_40 pt_160">
                            <div class="sub_tabcontent_container sub2_1_cont03_container flex_row fw sa center">
                                <div class="sub_cont_title sub2_2_3_cont03_title_left title_left">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                                    <p class="sub_cont_title_text02 fz_32 lh_14 ls_2 light m_40 gs_reveal" data-gs-delay="400">
                                        잡티 치료의 효율을 높이는<br>
                                        <span class="medium">마크뷰 피부 진단</span>
                                    </p>
                                    <p class="pc_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light gs_reveal" data-gs-delay="600">
                                        기미나 주근깨 등 피부 잡티는 눈으로 보기에는 비슷해 보이지만, <br>
                                        원인과 유형, 깊이가 모두 다릅니다.
                                    </p>
                                    <p class="m_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light gs_reveal" data-gs-delay="600">
                                        기미나 주근깨 등 피부 잡티는 눈으로 보기에는 비슷해 보이지만, 
                                        원인과 유형, 깊이가 모두 다릅니다.
                                    </p>
                                    <p class="pc_cont_434 sub_cont_title_text04 fz_16 lh_16 ls_2 light gs_reveal" data-gs-delay="600">
                                        인천 오라클피부과는 정확한 잡티 치료를 위해, 4가지 LED 광원을 <br>
                                        이용한 마크뷰(Mark-vu) 피부측정장비를 통해 표피와 진피의 색소를 <br>
                                        정확하게 진단한 후 색소와 피부 상태에 맞춰 정확한 치료를 계획합니다.
                                    </p>
                                    <p class="m_cont_434 sub_cont_title_text04 fz_16 lh_16 ls_2 light gs_reveal" data-gs-delay="600">
                                        인천 오라클피부과는 정확한 잡티 치료를 위해, 4가지 LED 광원을 
                                        이용한 마크뷰(Mark-vu) 피부측정장비를 통해 표피와 진피의 색소를 
                                        정확하게 진단한 후 색소와 피부 상태에 맞춰 정확한 치료를 계획합니다.
                                    </p>
                                </div>
                                <div class="sub_cont_doct_img sub2_2_3_cont03_img img_right p_r ta_r">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_2_2_tabcontent03_img01.png" alt="">
                                    <!--
                                    <div class="sub2_1_4_cont3_more_btn">
                                        <a href="javascript:void(0);">
                                            <p class="fz_16 lh_1 ls_2 light ta_c">more</p>
                                        </a>
                                    </div>
                                    -->
                                </div>
                            </div>
                        </div>
                        
                        <div class="sub_cont_box sub2_2_3_cont03_wrap pd_160">
                            <div class="container-800 flex_row fw jc_center al_fs">
                                <div class="sub_cont_title sub2_1_4_cont_title_center ta_c">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                                    <p class="sub_cont_title_text01 fz_30 lh_16 ls_2 light m_20 gs_reveal" data-gs-delay="200">
                                        눈으로 구분이 어려운 <br>
                                        <span class="medium">기미 vs 잡티</span>
                                    </p>
                                    <p class="pc_cont_434 sub_cont_title_text02 fz_16 lh_14 ls_2 light m_80 gs_reveal" data-gs-delay="400">
                                        인천 오라클피부과는 피부 색소 질환을 10년 이상 연구해온 피부과전문의들이 <br>
                                        풍부한 경험과 피부 측정 장비를 기반으로 정확하게 진단하고, 진료합니다.
                                    </p>
                                    <p class="m_cont_434 sub_cont_title_text02 fz_16 lh_14 ls_2 light m_80 gs_reveal" data-gs-delay="400">
                                        인천 오라클피부과는 피부 색소 질환을 10년 이상 연구해온 피부과전문의들이 
                                        풍부한 경험과 피부 측정 장비를 기반으로 정확하게 진단하고, 진료합니다.
                                    </p>
                                </div>
                                <div class="sub2_2_3_cont03_box flex_row fw se al_fs">
                                    <div class="column_half">
                                        <div class="sub2_2_3_cont03_item sub2_2_3_cont03_item01 ta_c gs_reveal" data-gs-delay="200">
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_2_3_item01.png" alt="">
                                            <p class="fz_22 ls_2 lh_16 normal m_10">
                                                잡티
                                            </p>
                                            <p class="pc_cont_434 fz_16 ls_2 lh_14 normal">
                                                주근깨, 흑자, 색소 침착 등을 통틀어서 지칭<br>
                                                하는 말로, 병변에 맞는 치료를 진행하면 빠르게 <br>
                                                좋아지는 색소질환
                                            </p>
                                            <p class="m_cont_434 fz_16 ls_2 lh_14 normal">
                                                주근깨, 흑자, 색소 침착 등을 통틀어서 지칭
                                                하는 말로, 병변에 맞는 치료를 진행하면 빠르게 
                                                좋아지는 색소질환
                                            </p>
                                        </div>
                                    </div>
                                    <div class="column_half">
                                        <div class="sub2_2_3_cont03_item sub2_2_3_cont03_item02 ta_c gs_reveal" data-gs-delay="400">
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_2_3_item02.png" alt="">
                                            <p class="fz_22 ls_2 lh_16 normal m_10">
                                                기미
                                            </p>
                                            <p class="pc_cont_434 fz_16 ls_2 lh_14 normal">
                                                잡티와 달리 모양, 크기, 깊이가 불규칙적으로 <br>
                                                퍼져 있어 한 번에 제거가 어려워 여러 번에 <br>
                                                걸쳐 치료가 필요한 색소질환
                                            </p>
                                            <p class="m_cont_434 fz_16 ls_2 lh_14 normal">
                                                잡티와 달리 모양, 크기, 깊이가 불규칙적으로 
                                                퍼져 있어 한 번에 제거가 어려워 여러 번에 
                                                걸쳐 치료가 필요한 색소질환
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="sub_cont_box sub2_2_3_cont4_box">
                            <div class="sub2_2_3_cont4 flex_row fw jc_center center">
                                <div class="column_half">
                                    <div class="sub2_1_1_cont4_img">
                                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_2_4_cont4_img.jpg" alt="">
                                    </div>
                                </div>
                                <div class="column_half">
                                    <div class="flex_row fw fd_c jc_center center">
                                        <div class="sub_cont_title sub2_1_1_cont4_title_center">
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                                            <p class="sub_cont_title_text01 fz_32 lh_14 ls_2 light m_30 gs_reveal" data-gs-delay="200">
                                                2<span class="fz_23">%</span> 차이가 만드는 <br>
                                                <span class="medium">결과의 차이</span>
                                            </p>
                                            <ul class="sub2_1_1_premium_item_ul fz_17 normal ta_l m_40 gs_reveal" data-gs-delay="400">
                                                <li>
                                                    <p>대한민국 의사 중 피부과 전문의는 단 2%</p>
                                                </li>
                                            </ul>
                                            <p class="pc_cont_434 sub_cont_title_text02 fz_16 lh_14 ls_2 light m_20 gs_reveal" data-gs-delay="600">
                                                색소 질환은 피부 질환 중에서도 진단과 치료가 어려운 질환에 속합니다. <br>
                                                일차원적인 레이저 치료가 아닌, 피부 조직학에 대한 깊은 이해를 바탕으로 <br>
                                                정확하게 치료해야 만족스러운 결과를 만들 수 있습니다.
                                            </p>
                                            <p class="m_cont_434 sub_cont_title_text02 fz_16 lh_14 ls_2 light m_20 gs_reveal" data-gs-delay="600">
                                                색소 질환은 피부 질환 중에서도 진단과 치료가 어려운 질환에 속합니다. <br>
                                                일차원적인 레이저 치료가 아닌, 피부 조직학에 대한 깊은 이해를 바탕으로 
                                                정확하게 치료해야 만족스러운 결과를 만들 수 있습니다.
                                            </p>
                                            <p class="pc_cont_434 sub_cont_title_text03 fz_16 lh_14 ls_2 medium m_20 gs_reveal" data-gs-delay="800">
                                                오라클피부과는 피부과 전문의가 되기 위한 4년의 기간을 거친 <br>
                                                대한민국 2% 피부과 전문의가 색소 병변을 정확하게 구분하고, <br>
                                                올바르게 치료합니다.
                                            </p>
                                            <p class="m_cont_434 sub_cont_title_text03 fz_16 lh_14 ls_2 medium m_20 gs_reveal" data-gs-delay="800">
                                                오라클피부과는 피부과 전문의가 되기 위한 4년의 기간을 거친 
                                                대한민국 2% 피부과 전문의가 색소 병변을 정확하게 구분하고, 
                                                올바르게 치료합니다.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="sub_cont_box sub2_2_3_cont06_box bg_fa pd_120 pt_160">
                            <div class="sub_tabcontent_container flex_row fw sa center">
                                <div class="sub_cont_doct_img sub2_1_1_tabcontent04_img img_left p_r ta_c">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_2_4_cont05_img01.png" alt="">
                                </div>
                                <div class="sub_cont_title sub2_1_1_tabcontent04_title_right title_right">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                                    <p class="sub_cont_title_text01 fz_32 lh_14 ls_2 light m_40 gs_reveal" data-gs-delay="200">
                                        색소의 뿌리를 뽑는 <br>
                                        <span class="medium">다양한 레이저 복합 치료</span>
                                    </p>
                                    <p class="pc_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 normal gs_reveal" data-gs-delay="400">
                                        눈에 보이는 피부 표면의 색소만 제거한다고 해서 피부가 깨끗해지는 <br>
                                        것은 아닙니다. 인천 오라클피부과는 다양한 프리미엄 레이저 장비를 <br>
                                        복합적으로 사용하여  진피층부터 표피층까지 정확하게 색소를 제거합니다.
                                    </p>
                                    <p class="m_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 normal gs_reveal" data-gs-delay="400">
                                        눈에 보이는 피부 표면의 색소만 제거한다고 해서 피부가 깨끗해지는 
                                        것은 아닙니다. 인천 오라클피부과는 다양한 프리미엄 레이저 장비를 
                                        복합적으로 사용하여  진피층부터 표피층까지 정확하게 색소를 제거합니다.
                                    </p>
                                    <p class="pc_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 normal gs_reveal" data-gs-delay="600">
                                        수많은 장비에 색소의 재발과 레이저로 인한 흉터, 색소침착을 방지하는 <br>
                                        인천 오라클만의 노하우를 더하여 깨끗한 피부를 완성합니다.
                                    </p>
                                    <p class="m_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 normal gs_reveal" data-gs-delay="600">
                                        수많은 장비에 색소의 재발과 레이저로 인한 흉터, 색소침착을 방지하는 
                                        인천 오라클만의 노하우를 더하여 깨끗한 피부를 완성합니다.
                                    </p>
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
                                            미백/홍조 <span class="medium">레이저 프로그램</span>
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
                                <div class="sub_click_btn open m_20" id="sub_click_btn3">
                                    <p class="sub_cont_title_text01 sortsmillgoudy fz_20 lh_16 ls_2 light">
                                        All In One Whitening
                                    </p>
                                    <p class="sub_cont_title_text02 fz_32 lh_16 ls_2 light">
                                        잡티한방 <span class="medium">치료 후 주의사항</span>
                                    </p>
                                </div>
                                <div class="sub2_2_3_cont05_text open sub_click_box" id="sub_click_box3">
                                    <ul class="sub2_2_3_cont05_item_ul fz_17 normal ta_l">
                                        <li>
                                            <p>시술 후 일주일은 목욕탕, 사우나 등 뜨겁고 자극적인 곳은 피하셔야 합니다.</p>
                                        </li>
                                        <li>
                                            <p>딱지가 생긴 부위를 만지지 않아야 하며, 연고를 잘 바르셔야 합니다.</p>
                                        </li>
                                        <li>
                                            <p>딱지가 떨어진 부위에는 자외선 차단제를 2~3시간 간격으로 필수적으로 바르셔야 합니다.</p>
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
                                        <span class="fz_30 ls_2 lh_14 normal">미백/홍조 치료</span>
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
                        <div class="sub_cont_box sub2_1_4_cont1_1_box bg_fa pd_120">
                            <div class="sub_tabcontent_container flex_row fw sa center">
                                <div class="sub_cont_title sub2_1_4_cont_title_left title_left">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                                    <p class="sub_cont_title_text01 fz_32 lh_14 ls_2 light m_40">
                                        피부과 전문의의 노하우가 집약된 <br>
                                        <span class="medium">1:1 혈관질환 치료</span>
                                    </p>
                                    <p class="pc_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 light m_20">
                                        인천 오라클피부과는 피부과 전문의의 정확한 감별진단을 통해 개개인의 <br>
                                        혈관 상태를 정밀하게 파악하여 유형과 원인에 맞는 혈관질환 치료를 진행합니다.
                                    </p>
                                    <p class="m_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 light m_20">
                                        인천 오라클피부과는 피부과 전문의의 정확한 감별진단을 통해 개개인의 
                                        혈관 상태를 정밀하게 파악하여 유형과 원인에 맞는 혈관질환 치료를 진행합니다.
                                    </p>
                                    <p class="pc_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light">
                                        다양한 프리미엄 혈관 치료 장비를 바탕으로 표피 쪽 혈관부터 깊은 혈관까지 <br>
                                        치료가 필요한 부분을 깊이별로 조절하여 시술하여 주변조직의 손상은 <br>
                                        최소화하고 혈관종/혈관점/실핏줄 치료의 효과를 극대화합니다.
                                    </p>
                                    <p class="m_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light">
                                        다양한 프리미엄 혈관 치료 장비를 바탕으로 표피 쪽 혈관부터 깊은 혈관까지 
                                        치료가 필요한 부분을 깊이별로 조절하여 시술하여 주변조직의 손상은 
                                        최소화하고 혈관종/혈관점/실핏줄 치료의 효과를 극대화합니다.
                                    </p>
                                </div>
                                <div class="sub_cont_doct_img sub2_2_4_tabcontent01_img img_right ta_r">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_2_4_tabcontent01_img01.png" alt="">
                                </div>
                            </div>
                        </div>
                        
                        <div class="sub_cont_box sub2_2_4_cont02_box pd_160 pt_120">
                            <div class="sub_cont_title sub2_1_4_cont_title_center p_r ta_c m_60">
                                <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                                <p class="sub_cont_top_title_text01 fz_30 lh_14 ls_2 light gs_reveal" data-gs-delay="200">
                                    비정상적 혈관으로 인한 붉은 자국, <br>
                                    <span class="medium">유형별 맞춤 치료</span>
                                </p>
                            </div>
                            <div class="container-1500 flex_row fw jc_center center">
                                <div class="sub2_2_4_cont02_list flex_row fw jc_center center">
                                    <div class="sub2_2_4_cont02_item sub2_2_4_cont02_item01 flex_row fw jc_fe center">
                                        <div class="sub2_2_4_cont02_item_text ta_r">
                                            <p class="fz_22 normal ls_2 lh_16 m_10">혈관점</p>
                                            <p class="fz_16 light ls_2 lh_16">
                                                모세혈관 증식으로인해 빨갛게 튀어나온 점<br>
                                                나이가 들 수록 더 많이, 더 커지는 경향<br>
                                                성장기 등 치료 시기가 빠를수록 치료 효과↑
                                            </p>
                                        </div>
                                        <div class="sub2_2_4_cont02_item_img">
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_2_4_cont02_img01.png" alt="">
                                        </div>
                                    </div>
                                    <div class="sub2_2_4_cont02_item sub2_2_4_cont02_item02 flex_row fw jc_fs center">
                                        <div class="sub2_2_4_cont02_item_img">
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_2_4_cont02_img02.png" alt="">
                                        </div>
                                        <div class="sub2_2_4_cont02_item_text ta_l">
                                            <p class="fz_22 normal ls_2 lh_16 m_10">유아혈관종</p>
                                            <p class="fz_16 light ls_2 lh_16">
                                                혈관 내피세포가 증식하여 생기는 양성종양<br>
                                                흉터가 남거나 중요 부위 발생 시 부작용이<br>
                                                생길 수 있어 피부과 전문의의 1:1 치료가 중요
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="sub2_2_4_cont02_list flex_row fw jc_center center">
                                    <div class="sub2_2_4_cont02_item sub2_2_4_cont02_item01 flex_row fw jc_fe center">
                                        <div class="sub2_2_4_cont02_item_text ta_r">
                                            <p class="fz_22 normal ls_2 lh_16 m_10">모세혈관 확장증</p>
                                            <p class="fz_16 light ls_2 lh_16">
                                                혈관이 과도하게 늘어나 피부 위 실핏줄이<br>
                                                비치는 증상. 한 번 늘어난 모세혈관은 다시<br>
                                                줄어들지 않아 레이저 치료 필요
                                            </p>
                                        </div>
                                        <div class="sub2_2_4_cont02_item_img">
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_2_4_cont02_img03.png" alt="">
                                        </div>
                                    </div>
                                    <div class="sub2_2_4_cont02_item sub2_2_4_cont02_item02 flex_row fw jc_fs center">
                                        <div class="sub2_2_4_cont02_item_img">
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_2_4_cont02_img04.png" alt="">
                                        </div>
                                        <div class="sub2_2_4_cont02_item_text ta_l">
                                            <p class="fz_22 normal ls_2 lh_16 m_10">화염성모반&연어반</p>
                                            <p class="pc_cont_434 fz_16 light ls_2 lh_16">
                                                한 쪽 얼굴에 발생하는 혈관성 반점, 화염성 모반 <br>
                                                얼굴 중심선에 발생하는 혈관성 반점, 연어반(모세혈관 기형)<br>
                                                나이가 들 수록 점점 색이 진해지며 피부가 두꺼워져<br>
                                                피부과 전문의의 1:1 진단 후 빠른 치료가 중요
                                            </p>
                                            <p class="m_cont_434 fz_16 light ls_2 lh_16">
                                                한 쪽 얼굴에 발생하는 혈관성 반점, 화염성 모반 
                                                얼굴 중심선에 발생하는 혈관성 반점, 연어반(모세혈관 기형) 
                                                나이가 들 수록 점점 색이 진해지며 피부가 두꺼워져 
                                                피부과 전문의의 1:1 진단 후 빠른 치료가 중요
                                            </p>
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
                                            미백/홍조 <span class="medium">레이저 프로그램</span>
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
                                        Hemangioma
                                    </p>
                                    <p class="sub_cont_title_text02 fz_32 lh_16 ls_2 light">
                                        혈관질환 <span class="medium">치료 후 주의사항</span>
                                    </p>
                                </div>
                                <div class="sub2_2_1_cont05_text open li_4 sub_click_box" id="sub_click_box2">
                                    <ul class="sub2_2_1_cont05_item_ul fz_17 normal ta_l">
                                        <li>
                                            <p>당일부터 조심스럽게 세안은 가능하나 목욕은 일주일 정도 삼가 주세요.</p>
                                        </li>
                                        <li>
                                            <p>시술 당일부터 보습제를 충분히 발라 주세요.</p>
                                        </li>
                                        <li>
                                            <p>시술 부위를 세게 만지거나 손으로 누르는 행동은 가급적 삼가 주세요.</p>
                                        </li>
                                        <li>
                                            <p>딱지가 떨어진 부위에는 자외선 차단제를 2~3시간 간격으로 필수적으로 발라 주세요.</p>
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
                                        <span class="fz_30 ls_2 lh_14 normal">미백/홍조 치료</span>
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
        } 
    }
    //<!-- //Javascript를 이용해서 다음 페이지에 파라미터 넘기기 위한 방법 -->
</script>