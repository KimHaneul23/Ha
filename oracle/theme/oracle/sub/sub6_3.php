<?php
include_once('./_common.php');
//if (G5_IS_MOBILE) {
//    include_once(G5_MOBILE_PATH.'/index.php');
//    return;
//}

// 웹사이트 타이틀
$g5['title'] = '스컬프슈어';

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
            <div class="sub_top_view sub6_3_top_view">
                <div class="sub_top_view_bg sub6_3_top_view_bg"></div>
                <div class="sub_top_view_text_wrap sub6_3_top_view_text_wrap ta_c">
                    <div class="sub_top_view_text01 sub6_3_top_view_text01">
                        <p class="sortsmillgoudy fz_30 lh_14 ls_2 sub_text_ani ta_c">
                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub_top_view_text_icon.png" alt="">
                            Sculpsure
                        </p>
                    </div>
                    <div class="sub_top_view_text02 sub6_3_top_view_text02 m_20">
                        <p class="c-w fz_40 lh_14 ls_2 medium sub_text_ani">
                            스컬프슈어
                        </p>
                    </div>
                    <div class="sub_top_view_text03 sub6_3_top_view_text03">
                        <p class="c-w fz_16 lh_14 ls_2 normal sub_text_ani">
                            비침습 레이저 시술로 25분 안에 지방세포를 파괴해 운동한 것처럼
                        </p>
                    </div>
                    <div class="sub_top_view_text04 sub6_3_top_view_text04">
                        <p class="c-w fz_16 lh_14 ls_2 normal sub_text_ani">
                            탄탄한 라인을 완성하는 바디 컨투어링 프로그램입니다.
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
                <div class="m_cont sub6_3_cont01_item_wrap">
                    <div class="sub6_3_cont01_item_box flex_row fw jc_center al_fs">
                        <div class="sub6_3_cont01_item sub6_3_cont01_item01 ta_c flex_row fd_c jc_center center">
                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub6_3_cont01_img02.png" alt="">
                            <p class="sub6_3_cont01_item_text01 fz_19 ls_2 normal lh_16">
                                <span>25분</span> 안에 <br>
                                지방 분해
                            </p>
                        </div>
                        <div class="sub6_3_cont01_item sub6_3_cont01_item02 ta_c flex_row fd_c jc_center center">
                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub6_3_cont01_img02.png" alt="">
                            <p class="sub6_3_cont01_item_text01 fz_19 ls_2 normal lh_16">
                                1회 시술로 <br>
                                지방 부피 <span>24% 감소</span>
                            </p>
                        </div>
                        <div class="sub6_3_cont01_item sub6_3_cont01_item03 ta_c flex_row fd_c jc_center center">
                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub6_3_cont01_img02.png" alt="">
                            <p class="sub6_3_cont01_item_text01 fz_19 ls_2 normal lh_16">
                                <span>6주~12주</span>에 걸쳐 <br>
                                효과 유도
                            </p>
                        </div>
                    </div>
                </div>
                <div class="sub_cont_title sub5_1_cont01_title_left title_left">
                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                    <p class="sub_cont_title_text01 fz_32 lh_14 ls_2 light m_30">
                        <span class="medium">단 25분</span> 안에 아름다운 바디 라인을 <br>
                        완성하는 <span class="medium">스컬프슈어</span>
                    </p>
                    <p class="pc_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light m_30">
                        스컬프슈어(SculpSure)는 미국 FDA 승인을 받은 장비로서, <br>
                        25분 동안 1060nm 파장을 이용하여 진피 아래의 피하지방 세포들을 <br>
                        안전하게 파괴합니다.
                    </p>
                    <p class="m_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light m_30">
                        스컬프슈어(SculpSure)는 미국 FDA 승인을 받은 장비로서, 
                        25분 동안 1060nm 파장을 이용하여 진피 아래의 피하지방 세포들을 
                        안전하게 파괴합니다.
                    </p>
                    <p class="pc_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light">
                        마취/절개 등 수술적 과정 없이 25분간의 열 조사로 지방을 파괴하며, <br>
                        시간 부담 없이 다이어트나 운동으로 빠지지 않는 군살까지 <br>
                        효과적으로 제거합니다.
                    </p>
                    <p class="m_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light">
                        마취/절개 등 수술적 과정 없이 25분간의 열 조사로 지방을 파괴하며, 
                        시간 부담 없이 다이어트나 운동으로 빠지지 않는 군살까지 
                        효과적으로 제거합니다.
                    </p>
                </div>
                <div class="sub_cont_doct_img sub5_1_cont01_img img_right ta_r">
                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub6_3_cont01_img01.png" alt="">
                </div>
                <div class="pc_cont sub6_3_cont01_item_wrap">
                    <div class="sub6_3_cont01_item_box flex_row fw jc_center al_fs">
                        <div class="sub6_3_cont01_item sub6_3_cont01_item01 ta_c flex_row fd_c jc_center center">
                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub6_3_cont01_img02.png" alt="">
                            <p class="sub6_3_cont01_item_text01 fz_19 ls_2 normal lh_16">
                                <span>25분</span> 안에 <br>
                                지방 분해
                            </p>
                        </div>
                        <div class="sub6_3_cont01_item sub6_3_cont01_item02 ta_c flex_row fd_c jc_center center">
                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub6_3_cont01_img02.png" alt="">
                            <p class="sub6_3_cont01_item_text01 fz_19 ls_2 normal lh_16">
                                1회 시술로 <br>
                                지방 부피 <span>24% 감소</span>
                            </p>
                        </div>
                        <div class="sub6_3_cont01_item sub6_3_cont01_item03 ta_c flex_row fd_c jc_center center">
                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub6_3_cont01_img02.png" alt="">
                            <p class="sub6_3_cont01_item_text01 fz_19 ls_2 normal lh_16">
                                <span>6주~12주</span>에 걸쳐 <br>
                                효과 유도
                            </p>
                        </div>
                    </div>
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
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub6_3_ba_slide_img01_b.jpg" alt="">
                                        </div>
                                        <div class="sub2_1_1_ba_slide_img_a <?=($is_member ? '':'blur')?>">
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub6_3_ba_slide_img01_a.jpg" alt="">
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
                        오라클만의 <span class="medium">스컬프슈어 특별함</span>
                    </p>
                </div>
                <div class="sub_tabcontent_container flex_row fw sa center">
                    <div class="pc_cont_434 sub_cont_doct_img sub6_3_cont_doct_img sub2_8_1_tabcontent03_img img_left p_r ta_c">
                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub6_3_cont03_img01.png" alt="">
                    </div>
                    <div class="sub_cont_title sub2_5_1_cont03_title_right title_right">
                        <p class="sub_cont_title_text01 sortsmillgoudy fz_20 lh_14 ls_2 light gs_reveal" data-gs-delay="200">
                            Oracle Point.01
                        </p>
                        <p class="sub_cont_title_text02 fz_32 lh_14 ls_2 light m_40 gs_reveal" data-gs-delay="400">
                            편안함과 안전함을 탑재한 <br>
                            <span class="medium">혁신적인 다이어트 장비</span>
                        </p>
                        <div class="m_cont_434 sub_cont_doct_img sub6_3_cont_doct_img sub2_8_1_tabcontent03_img img_left p_r ta_c">
                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub6_3_cont03_img01.png" alt="">
                        </div>
                        <p class="pc_cont_434 sub_cont_title_text04 fz_16 lh_16 ls_2 normal gs_reveal m_30" data-gs-delay="600">
                            스컬프슈어는 Hands Free 방식으로 기기를 부착한 후 <br>
                            편안히 앉아 있거나 누워 있는 편안한 상태에서 지방 분해를 유도합니다. <br>
                            시술 중에는 반복 쿨링 시스템이 가동되어 피부 표면을 보호합니다.
                        </p>
                        <p class="m_cont_434 sub_cont_title_text04 fz_16 lh_16 ls_2 normal gs_reveal m_30" data-gs-delay="600">
                            스컬프슈어는 Hands Free 방식으로 기기를 부착한 후 
                            편안히 앉아 있거나 누워 있는 편안한 상태에서 지방 분해를 유도합니다. <br>
                            시술 중에는 반복 쿨링 시스템이 가동되어 피부 표면을 보호합니다.
                        </p>
                        <p class="pc_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 normal gs_reveal" data-gs-delay="800">
                            1060nm 연속파 에너지는 피하지방층에만 선택적으로 타겟 침투하여 <br>
                            집중적으로 작용하기 때문에 피부 및 신경 손상 없이 안전한 지방세포 <br>
                            파괴가 가능합니다.
                        </p>
                        <p class="m_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 normal gs_reveal" data-gs-delay="800">
                            1060nm 연속파 에너지는 피하지방층에만 선택적으로 타겟 침투하여 
                            집중적으로 작용하기 때문에 피부 및 신경 손상 없이 안전한 지방세포 
                            파괴가 가능합니다.
                        </p>
                    </div>
                </div>
                
                <div class="container-1300 sub6_1_cont06_container flex_row fw jc_center center">
                    <div class="sub_cont_title sub2_8_1_cont04_title_center p_r ta_c m_20">
                        <p class="sub_cont_title_text01 sortsmillgoudy fz_20 lh_14 ls_2 light gs_reveal" data-gs-delay="200">
                            Oracle Point.02
                        </p>
                        <p class="sub_cont_title_text02 fz_32 lh_14 ls_2 light m_40 gs_reveal" data-gs-delay="400">
                            <span class="medium">쉽게 빠지지 않던 복부 지방,</span> <br>
                            세포까지 확실하게 파괴
                        </p>
                        <p class="sub_cont_title_text04 fz_16 lh_16 ls_2 medium gs_reveal m_30" data-gs-delay="600">
                            스컬프슈어는 1회 시술만으로 지방세포를 24%까지 감소시킵니다.
                        </p>
                        <p class="pc_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 normal gs_reveal m_60" data-gs-delay="800">
                            지방세포의 자멸(APOPTOSIS)를 유도하여 주변 조직의 손상 없이 지방층 사이즈만 정확하게 줄입니다. <br>
                            파괴된 지방세포는 체외로 배출되어 확실한 지방층 감소 효과를 선사합니다.
                        </p>
                        <p class="m_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 normal gs_reveal m_60" data-gs-delay="800">
                            지방세포의 자멸(APOPTOSIS)를 유도하여 주변 조직의 손상 없이 지방층 사이즈만 정확하게 줄입니다. 
                            파괴된 지방세포는 체외로 배출되어 확실한 지방층 감소 효과를 선사합니다.
                        </p>
                    </div>
                    <div class="sub6_3_cont04_item_box flex_row fw jc_center al_fs">
                        <div class="sub6_3_cont04_item sub6_3_cont04_item01 ta_c flex_row fd_c jc_center center">
                            <p class="sub6_1_cont06_item_text01 sortsmillgoudy fz_20 ls_2 lh_14 m_10">Step 1</p>
                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub6_3_cont04_img01.png" alt="">
                            <p class="sub6_3_cont04_item_text02 fz_18 ls_2 normal lh_16">
                                시술 전 두꺼운 지방층
                            </p>
                        </div>
                        <div class="sub6_3_cont04_item sub6_3_cont04_item02 ta_c flex_row fd_c jc_center center">
                            <p class="sub6_1_cont06_item_text01 sortsmillgoudy fz_20 ls_2 lh_14 m_10">Step 2</p>
                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub6_3_cont04_img02.png" alt="">
                            <p class="sub6_3_cont04_item_text02 fz_18 ls_2 normal lh_16">
                                스컬프슈어 시술로 <br>
                                안전한 지방제거 유도
                            </p>
                        </div>
                        <div class="sub6_3_cont04_item sub6_3_cont04_item03 ta_c flex_row fd_c jc_center center">
                            <p class="sub6_1_cont06_item_text01 sortsmillgoudy fz_20 ls_2 lh_14 m_10">Step 3</p>
                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub6_3_cont04_img03.png" alt="">
                            <p class="sub6_3_cont04_item_text02 fz_18 ls_2 normal lh_16">
                                시술 후 얇아진 지방층 <br>
                                사이즈 감소 효과
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </article>
        
        <!-- 
        <article class="sub_cont_box sub2_2_1_cont04_box p_r bg_fa pd_60 pt_160">
            <div class="container-1300 sub2_2_1_cont05_container">
                <div class="sub_click_btn open m_20" id="sub_click_btn3">
                    <p class="sub_cont_title_text01 sortsmillgoudy fz_20 lh_16 ls_2 light">
                        Sculpsure
                    </p>
                    <p class="sub_cont_title_text02 fz_32 lh_16 ls_2 light">
                        <span class="medium">스컬프슈어 시술 후 주의사항</span>
                    </p>
                </div>
                <div class="sub2_2_1_cont05_text sub6_1_cont05_text open li_5 sub_click_box" id="sub_click_box3">
                    <ul class="sub2_2_1_cont05_item_ul fz_17 normal ta_l">
                        <li>
                            <p>뻐근한 증상이 있을 수 있으나 2~3일 이내에 사라집니다.</p>
                        </li>
                        <li>
                            <p>붉은 기, 통증, 멍울, 멍 등이 발생할 수 있으나 2~4주 이내에 사라집니다.</p>
                        </li>
                        <li>
                            <p>지방세포의 빠른 배출을 위해 수분 섭취를 충분히 해 주세요.</p>
                        </li>
                        <li>
                            <p>시술부위를 하루 1~2회, 5분~10분 가량 가볍게 마사지해 주세요.</p>
                        </li>
                        <li>
                            <p>치료 전후 일주일 동안은 태닝 및 과도한 햇빛에 노출되지 않는 것이 좋습니다.</p>
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
