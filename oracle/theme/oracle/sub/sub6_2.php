<?php
include_once('./_common.php');
//if (G5_IS_MOBILE) {
//    include_once(G5_MOBILE_PATH.'/index.php');
//    return;
//}

// 웹사이트 타이틀
$g5['title'] = '한컵주사';

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
            <div class="sub_top_view sub6_2_top_view">
                <div class="sub_top_view_bg sub6_2_top_view_bg"></div>
                <div class="sub_top_view_text_wrap sub6_2_top_view_text_wrap ta_c">
                    <div class="sub_top_view_text01 sub6_2_top_view_text01">
                        <p class="sortsmillgoudy fz_30 lh_14 ls_2 sub_text_ani ta_c">
                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub_top_view_text_icon.png" alt="">
                            Body Clinic
                        </p>
                    </div>
                    <div class="sub_top_view_text02 sub6_2_top_view_text02 m_20">
                        <p class="fz_40 lh_14 ls_2 medium sub_text_ani">
                            한컵주사
                        </p>
                    </div>
                    <div class="sub_top_view_text03 sub6_2_top_view_text03">
                        <p class="fz_16 lh_14 ls_2 normal sub_text_ani">
                            절개나 마취 없이 주사로 간편하게 과도한 지방을
                        </p>
                    </div>
                    <div class="sub_top_view_text04 sub6_2_top_view_text04">
                        <p class="fz_16 lh_14 ls_2 normal sub_text_ani">
                            추출하여 눈에 띄는 다이어트 효과를 선사합니다.
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
            <div class="sub_tabcontent_container sub7_container flex_row fw sa center">
                <div class="sub_cont_title sub5_1_cont01_title_left title_left">
                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                    <p class="sub_cont_title_text01 fz_32 lh_14 ls_2 light m_40">
                        수술이 두려우신 분들을 위한 <br>
                        <span class="medium">간편한 미니 지방흡입, 한컵주사</span>
                    </p>
                    <p class="pc_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light m_30">
                        인천 오라클의 한컵주사는 최소한의 절개로 자연스럽게 <br>
                        지방세포를 직접 제거합니다. 환자의 부담을 줄인 주사기를 <br>
                        통한 흡입 방법으로 간단하게 진행됩니다.
                    </p>
                    <p class="m_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light m_30">
                        인천 오라클의 한컵주사는 최소한의 절개로 자연스럽게 
                        지방세포를 직접 제거합니다. 환자의 부담을 줄인 주사기를 
                        통한 흡입 방법으로 간단하게 진행됩니다.
                    </p>
                    <p class="pc_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 light">
                        수술이 두려우신 분들을 위한 비만치료법으로 <br>
                        부작용을 최소화한 안전한 시술입니다.
                    </p>
                    <p class="m_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 light">
                        수술이 두려우신 분들을 위한 비만치료법으로 
                        부작용을 최소화한 안전한 시술입니다.
                    </p>
                </div>
                <div class="sub_cont_doct_img sub5_1_cont01_img img_right ta_r">
                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub6_2_cont01_img01.png" alt="">
                </div>
            </div>
        </article>
        
        <!-- 
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
                            <div class="swiper-slide sub2_1_1_ba_slide">
                                <a href="<?php echo G5_THEME_URL?>/sub/sub8_2.php" target="_blank">
                                    <div class="sub2_1_1_ba_slide_img sub2_1_1_ba_slide_img03 flex_row sb al_fs">
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
                                    <div class="sub2_1_1_ba_slide_img sub2_1_1_ba_slide_img03 flex_row sb al_fs">
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
        
        <article class="sub_cont_box sub2_1_4_cont_box pd_60">
            <div class="sub2_1_4_cont3_bg">
                <div class="sub_cont_title sub2_1_4_cont_title_center p_r ta_c pt_100">
                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                    <p class="sub_cont_top_title_text01 fz_30 lh_14 ls_2 light gs_reveal" data-gs-delay="200">
                        오라클만의 <span class="medium">한컵주사 특별함</span>
                    </p>
                </div>
                <div class="sub_tabcontent_container sub2_5_fd_cr flex_row fw sa center">
                    <div class="sub_cont_title sub6_2_cont_title sub2_5_1_cont03_title_left title_left">
                        <p class="sub_cont_title_text01 sortsmillgoudy fz_20 lh_14 ls_2 light gs_reveal" data-gs-delay="200">
                            Oracle Point.01
                        </p>
                        <p class="sub_cont_title_text02 fz_32 lh_14 ls_2 light m_40 gs_reveal" data-gs-delay="400">
                            <span class="medium">흉터와 통증을 최소화</span> 한 <br>
                            한컵주사 노하우
                        </p>
                        <div class="m_cont_434 sub_cont_doct_img sub2_8_1_tabcontent03_img img_right p_r ta_c">
                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub6_2_cont03_img01.png" alt="">
                        </div>
                        <ul class="sub2_8_6_cont03_item_ul fz_17 normal ta_l gs_reveal" data-gs-delay="400">
                            <li>
                                <p>최소 절개로 회복이 빠르며, 시술 안전도를 높입니다.</p>
                            </li>
                            <li>
                                <p>
                                    Tumescent 용액을 지방층에 주입하여, 부분 마취 효과와 <br>
                                    제거할 지방을 부드럽게 만들어 통증을 최소화 합니다.
                                </p>
                            </li>
                            <li>
                                <p>지방흡입수술에 비해 상처가 적어 흉터가 거의 없습니다.</p>
                            </li>
                        </ul>
                    </div>
                    <div class="pc_cont_434 sub_cont_doct_img sub2_8_1_tabcontent03_img img_right p_r ta_c">
                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub6_2_cont03_img01.png" alt="">
                    </div>
                </div>
                
                <div class="sub_tabcontent_container sub2_1_cont03_container flex_row fw sa center">
                    <div class="sub_cont_doct_img sub2_8_1_tabcontent04_img img_left p_r ta_c">
                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub6_2_cont04_img01.png" alt="">
                    </div>
                    <div class="sub_cont_title sub6_2_cont_title sub2_8_1_tabcontent04_title_right title_right">
                        <p class="sub_cont_title_text01 sortsmillgoudy fz_20 lh_14 ls_2 light gs_reveal" data-gs-delay="200">
                            Oracle Point.02
                        </p>
                        <p class="sub_cont_title_text02 fz_32 lh_14 ls_2 light m_40 gs_reveal" data-gs-delay="400">
                            추출 후에도 지방 분해가 <br>
                            이루어지는 <span class="medium">후관리 프로그램</span>
                        </p>
                        <p class="pc_cont_434 sub_cont_title_text04 fz_16 lh_16 ls_2 normal gs_reveal m_30" data-gs-delay="600">
                            1차 추출 시 시술 부위 사이사이에 지방분해 용액이 들어가 <br>
                            시술이 끝난 후에도 추가적으로 지방분해가 이루어집니다. 
                        </p>
                        <p class="m_cont_434 sub_cont_title_text04 fz_16 lh_16 ls_2 normal gs_reveal m_30" data-gs-delay="600">
                            1차 추출 시 시술 부위 사이사이에 지방분해 용액이 들어가 
                            시술이 끝난 후에도 추가적으로 지방분해가 이루어집니다.
                        </p>
                        <p class="pc_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 normal gs_reveal" data-gs-delay="800">
                            인천 오라클은 지방 분해에 시너지를 줄 수 있도록 고안된 <br>
                            후관리 프로그램을 갖추고 있어 지방 분해의 효과를 더욱 높여주고, <br>
                            추가 용해지방까지 잘 배출되도록 유도합니다.
                        </p>
                        <p class="m_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 normal gs_reveal" data-gs-delay="800">
                            인천 오라클은 지방 분해에 시너지를 줄 수 있도록 고안된 
                            후관리 프로그램을 갖추고 있어 지방 분해의 효과를 더욱 높여주고, 
                            추가 용해지방까지 잘 배출되도록 유도합니다.
                        </p>
                    </div>
                </div>
                
                <div class="container-1300 sub6_1_cont06_container flex_row fw jc_center center">
                    <div class="sub_cont_title sub2_8_1_cont04_title_center p_r ta_c m_20">
                        <p class="sub_cont_title_text01 sortsmillgoudy fz_20 lh_14 ls_2 light gs_reveal" data-gs-delay="200">
                            Oracle Point.03
                        </p>
                        <p class="sub_cont_title_text02 fz_32 lh_14 ls_2 light m_60 gs_reveal" data-gs-delay="400">
                            오라클 한컵주사 <br>
                            <span class="medium">지방추출 프로세스</span>
                        </p>
                    </div>
                    <div class="sub_cont_doct_img sub6_1_cont06_img p_r ta_c m_20">
                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub6_1_cont06_img01.png" alt="">
                    </div>
                    <div class="sub6_1_cont06_item_box flex_row fw sa al_fs">
                        <div class="sub6_1_cont06_item sub6_1_cont06_item01 ta_c">
                            <p class="sub6_1_cont06_item_text01 sortsmillgoudy fz_20 ls_2 lh_16">Step 1</p>
                            <p class="sub6_1_cont06_item_text02 fz_20 ls_2 normal lh_16 m_10">체형 분석</p>
                            <p class="pc_cont_434 sub6_1_cont06_item_text03 fz_16 ls_2 normal lh_16">
                                지방성형 전담의가 1:1로 만나 <br>
                                체형을 분석하고, 라인을 고려하여 <br>
                                지방 추출량을 결정합니다.
                            </p>
                            <p class="m_cont_434 sub6_1_cont06_item_text03 fz_16 ls_2 normal lh_16">
                                지방성형 전담의가 1:1로 만나 
                                체형을 분석하고, 라인을 고려하여 
                                지방 추출량을 결정합니다.
                            </p>
                        </div>
                        <div class="sub6_1_cont06_item sub6_1_cont06_item02 ta_c">
                            <p class="sub6_1_cont06_item_text01 sortsmillgoudy fz_20 ls_2 lh_16">Step 2</p>
                            <p class="sub6_1_cont06_item_text02 fz_20 ls_2 normal lh_16 m_10">주변부 용해</p>
                            <p class="pc_cont_434 sub6_1_cont06_item_text03 fz_16 ls_2 normal lh_16">
                                특수 지방분해 용액을 <br>
                                투입하여 지방층 용해를 <br>
                                유도합니다.
                            </p>
                            <p class="m_cont_434 sub6_1_cont06_item_text03 fz_16 ls_2 normal lh_16">
                                특수 지방분해 용액을 
                                투입하여 지방층 용해를 
                                유도합니다.
                            </p>
                        </div>
                        <div class="sub6_1_cont06_item sub6_1_cont06_item03 ta_c">
                            <p class="sub6_1_cont06_item_text01 sortsmillgoudy fz_20 ls_2 lh_16">Step 3</p>
                            <p class="sub6_1_cont06_item_text02 fz_20 ls_2 normal lh_16 m_10">터널링</p>
                            <p class="pc_cont_434 sub6_1_cont06_item_text03 fz_16 ls_2 normal lh_16">
                                지방 배출을 위한 <br>
                                터널을 생성합니다.
                            </p>
                            <p class="m_cont_434 sub6_1_cont06_item_text03 fz_16 ls_2 normal lh_16">
                                지방 배출을 위한 
                                터널을 생성합니다.
                            </p>
                        </div>
                        <div class="sub6_1_cont06_item sub6_1_cont06_item04 ta_c">
                            <p class="sub6_1_cont06_item_text01 sortsmillgoudy fz_20 ls_2 lh_16">Step 4</p>
                            <p class="sub6_1_cont06_item_text02 fz_20 ls_2 normal lh_16 m_10">지방추출</p>
                            <p class="pc_cont_434 sub6_1_cont06_item_text03 fz_16 ls_2 normal lh_16">
                                흡입 주사기를 통해 <br>
                                지방을 직접 추출합니다.
                            </p>
                            <p class="m_cont_434 sub6_1_cont06_item_text03 fz_16 ls_2 normal lh_16">
                                흡입 주사기를 통해 
                                지방을 직접 추출합니다.
                            </p>
                        </div>
                        <div class="sub6_1_cont06_item sub6_1_cont06_item05 ta_c">
                            <p class="sub6_1_cont06_item_text01 sortsmillgoudy fz_20 ls_2 lh_16">Step 5</p>
                            <p class="sub6_1_cont06_item_text02 fz_20 ls_2 normal lh_16 m_10">용해지방 배출 후관리</p>
                            <p class="pc_cont_434 sub6_1_cont06_item_text03 fz_16 ls_2 normal lh_16">
                                후관리를 진행하여 추가적으로 <br>
                                용해된 지방이 배출되도록 <br>
                                유도하여 효과를 높입니다.
                            </p>
                            <p class="m_cont_434 sub6_1_cont06_item_text03 fz_16 ls_2 normal lh_16">
                                후관리를 진행하여 추가적으로 
                                용해된 지방이 배출되도록 
                                유도하여 효과를 높입니다.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </article>
        
        <!-- 
        <article class="sub_cont_box sub2_2_1_cont04_box p_r bg_fa pd_60 pt_160">
            <div class="container-1300 sub2_2_1_cont05_container">
                <div class="sub_click_btn open m_20" id="sub_click_btn2">
                    <p class="sub_cont_title_text01 sortsmillgoudy fz_20 lh_16 ls_2 light">
                        Body Clinic
                    </p>
                    <p class="sub_cont_title_text02 fz_32 lh_16 ls_2 light">
                        <span class="medium">한컵주사 시술 후 주의사항</span>
                    </p>
                </div>
                <div class="sub2_2_1_cont05_text sub6_1_cont05_text open li_5 sub_click_box" id="sub_click_box2">
                    <ul class="sub2_2_1_cont05_item_ul fz_17 normal ta_l">
                        <li>
                            <p>고혈압, 심장병 등의 특이사항이 있는 경우 미리 말씀해 주세요.</p>
                        </li>
                        <li>
                            <p>수술 전 일주일 전 부터는 피임약, 아스피린 등의 약물은 금합니다.</p>
                        </li>
                        <li>
                            <p>수술 후 2~3일 동안은 부기가 있을 수 있지만 서서히 사라집니다.</p>
                        </li>
                        <li>
                            <p>수술 다음 날부터 샤워를 할 수 있으며, 일상생활이 바로 가능합니다.</p>
                        </li>
                        <li>
                            <p>부기와 멍이 없어지는 2~3주 후부터는 모든 신체활동이 가능합니다.</p>
                        </li>
                    </ul>
                </div>
            </div>
        </article>
        -->
        <!--
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
        -->
        
    </main>
    <!-- //main -->
    
<?php
include_once(G5_PATH.'/tail.php');
?>
