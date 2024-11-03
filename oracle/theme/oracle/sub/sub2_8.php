<?php
include_once('./_common.php');
//if (G5_IS_MOBILE) {
//    include_once(G5_MOBILE_PATH.'/index.php');
//    return;
//}

// 웹사이트 타이틀
$g5['title'] = '기타 치료';

include_once(G5_PATH.'/head.php');
?>
    
    <script>
        //$(document).ready(function(){
        //    $('.main-header').removeClass('color_change');
        //    $('.ht-inner').removeClass('sub_header');
        //    
        //    //$('#sub_tablinks03').on('click', function(){
        //    //    $('.sub2_8_top_view').stop().addClass('tab03');
        //    //    $('.sub2_8_top_view_bg').stop().addClass('tab03');
        //    //});
        //    //$('#sub_tablinks01, #sub_tablinks02, #sub_tablinks04, #sub_tablinks05, #sub_tablinks06').on('click', function(){
        //    //    $('.sub2_8_top_view').stop().removeClass('tab03');
        //    //    $('.sub2_8_top_view_bg').stop().removeClass('tab03');
        //    //});
        //});
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
            <div class="sub_top_view sub2_8_top_view">
                <div class="sub_top_view_bg sub2_8_top_view_bg"></div>
                <div class="sub_top_view_text_wrap sub2_8_top_view_text_wrap ta_c">
                    <div class="sub_top_view_text01 sub2_8_top_view_text01">
                        <p class="sortsmillgoudy fz_30 lh_14 ls_2 sub_text_ani">
                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub_top_view_text_icon2.png" alt="">
                            Special Care Program
                        </p>
                    </div>
                    <div class="sub_top_view_text02 sub2_8_top_view_text02 m_20">
                        <p class="fz_40 lh_14 ls_2 medium sub_text_ani">
                            기타 치료
                        </p>
                    </div>
                    <div class="sub_top_view_text03 sub2_8_top_view_text03">
                        <p class="pc_cont_434 fz_16 lh_14 ls_2 normal sub_text_ani">
                            특별 관리가 필요한 웨딩, 산후 케어 프로그램부터 부작용 관리 프로그램까지
                        </p>
                        <p class="m_cont_434 fz_16 lh_14 ls_2 normal sub_text_ani">
                            특별 관리가 필요한 웨딩, 산후 케어 프로그램부터 부작용 관리 프로그램까지 
                            다양한 피부 고민을 해소하는 인천 오라클만의 특별 관리 프로그램
                        </p>
                    </div>
                    <div class="sub_top_view_text04 sub2_8_top_view_text04">
                        <p class="pc_cont_434 fz_16 lh_14 ls_2 normal sub_text_ani">
                            다양한 피부 고민을 해소하는 인천 오라클만의 특별 관리 프로그램
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
                                <p class="fz_16 ta_c">산후 피부관리</p>
                            </a>
                        </li>
                        <li id="sub_tablinks02" class="sub_tab_li sub_tablinks" onclick="opensubtab(event, 'sub_tabcontent2')">
                            <a href="javascript:void(0);">
                                <p class="fz_16 ta_c">피어싱/피어싱부작용</p>
                            </a>
                        </li>
                        <li id="sub_tablinks03" class="sub_tab_li sub_tablinks" onclick="opensubtab(event, 'sub_tabcontent3')">
                            <a href="javascript:void(0);">
                                <p class="fz_16 ta_c">웨딩 프로그램</p>
                            </a>
                        </li>
                        <li id="sub_tablinks04" class="sub_tab_li sub_tablinks" onclick="opensubtab(event, 'sub_tabcontent4')">
                            <a href="javascript:void(0);">
                                <p class="fz_16 ta_c">미용시술 부작용</p>
                            </a>
                        </li>
                        <li id="sub_tablinks05" class="sub_tab_li sub_tablinks" onclick="opensubtab(event, 'sub_tabcontent5')">
                            <a href="javascript:void(0);">
                                <p class="fz_16 ta_c">한관종</p>
                            </a>
                        </li>
                        <li id="sub_tablinks06" class="sub_tab_li sub_tablinks" onclick="opensubtab(event, 'sub_tabcontent6')">
                            <a href="javascript:void(0);">
                                <p class="fz_16 ta_c">다한증·액취증</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </article>
            
            <article class="sub_tabcontent_wrap sub2_8_tabcontent_wrap">
                <div class="sub_cont03 sub2_8_1_cont03 sub_tabcontent sub_tabcontent1" id="sub_tabcontent1">
                    <div class="sub_tabcontent01_wrap">
                        <div class="sub_cont_box sub2_1_1_cont1_1_box bg_fa pd_120">
                            <div class="sub_tabcontent_container flex_row fw sa center">
                                <div class="sub_cont_title sub2_5_1_cont_title_left title_left">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                                    <p class="sub_cont_title_text01 fz_32 lh_14 ls_2 light m_40">
                                        임신과 출산 후 피부와 몸의 변화, <br>
                                        <span class="medium">처음처럼 되돌리는 산후 피부관리</span>
                                    </p>
                                    <p class="pc_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 light m_20">
                                        임신 중 호르몬 변화, 출산으로 인해 피부에는 기미부터 잡티, <br>
                                        튼살, 탈모와 같은 복합적인 변화가 찾아옵니다. <br>
                                        인천 오라클피부과의 산후 피부관리는 출산 후 급격하게 변화한 <br>
                                        여성의 피부와 몸 상태에 맞춘 특별 관리 프로그램으로, <br>
                                        피부과 전문의의 1:1 진료로 피부와 두피를 이전처럼 복원합니다.
                                    </p>
                                    <p class="m_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 light m_20">
                                        임신 중 호르몬 변화, 출산으로 인해 피부에는 기미부터 잡티, 
                                        튼살, 탈모와 같은 복합적인 변화가 찾아옵니다. <br>
                                        인천 오라클피부과의 산후 피부관리는 출산 후 급격하게 변화한 
                                        여성의 피부와 몸 상태에 맞춘 특별 관리 프로그램으로, 
                                        피부과 전문의의 1:1 진료로 피부와 두피를 이전처럼 복원합니다.
                                    </p>
                                </div>
                                <div class="sub_cont_doct_img sub2_5_1_tabcontent01_img img_right ta_c">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_8_1_tabcontent01_img01.png" alt="">
                                </div>
                            </div>
                        </div>
                        
                        <div class="sub_cont_box sub2_8_1_cont02_wrap pd_160">
                            <div class="sub_tabcontent_container flex_row fw jc_center al_fs">
                                <div class="sub_cont_title sub2_1_4_cont_title_center ta_c">
                                    <p class="sub_cont_title_text01 fz_30 lh_14 ls_2 medium m_80 gs_reveal" data-gs-delay="200">
                                        임신과 출산으로 인해 <br>
                                        달라지는 피부
                                    </p>
                                </div>
                                <div class="sub2_1_1_premium_box flex_row fw se al_fs">
                                    <div class="column_third_30">
                                        <div class="sub2_1_1_premium_item sub2_1_1_premium_item01 ta_c gs_reveal" data-gs-delay="200">
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_8_1_cont02_item01.png" alt="">
                                            <p class="fz_22 ls_2 lh_16 normal m_10">
                                                기미/잡티/트러블
                                            </p>
                                            <p class="pc_cont_434 fz_16 ls_2 lh_14 normal">
                                                호르몬 영향으로 인한 <br>
                                                멜라닌 세포가 증가, <br>
                                                다양한 피부의 트러블 발생
                                            </p>
                                            <p class="m_cont_434 fz_16 ls_2 lh_14 normal">
                                                호르몬 영향으로 인한 
                                                멜라닌 세포가 증가, 
                                                다양한 피부의 트러블 발생
                                            </p>
                                        </div>
                                    </div>
                                    <div class="column_third_30">
                                        <div class="sub2_1_1_premium_item sub2_1_1_premium_item02 ta_c gs_reveal" data-gs-delay="400">
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_8_1_cont02_item02.png" alt="">
                                            <p class="fz_22 ls_2 lh_16 normal m_10">
                                                튼살
                                            </p>
                                            <p class="pc_cont_434 fz_16 ls_2 lh_14 normal">
                                                과도한 피부 팽창으로 <br>
                                                튼살 발생
                                            </p>
                                            <p class="m_cont_434 fz_16 ls_2 lh_14 normal">
                                                과도한 피부 팽창으로 
                                                튼살 발생
                                            </p>
                                        </div>
                                    </div>
                                    <div class="column_third_30">
                                        <div class="sub2_1_1_premium_item sub2_1_1_premium_item03 ta_c gs_reveal" data-gs-delay="600">
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_8_1_cont02_item03.png" alt="">
                                            <p class="fz_22 ls_2 lh_16 normal m_10">
                                                탈모
                                            </p>
                                            <p class="pc_cont_434 fz_16 ls_2 lh_14 normal">
                                                출산 후 모발이 한꺼번에 <br>
                                                휴지기로 넘어가 일시적 탈모 발생
                                            </p>
                                            <p class="m_cont_434 fz_16 ls_2 lh_14 normal">
                                                출산 후 모발이 한꺼번에 
                                                휴지기로 넘어가 일시적 탈모 발생
                                            </p>
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
                                        인천 오라클 <span class="medium">산후 관리 프로그램</span>
                                    </p>
                                </div>
                                <div class="sub_tabcontent_container sub2_5_fd_cr flex_row fw sa center">
                                    <div class="sub_cont_title sub2_5_1_cont03_title_left title_left">
                                        <p class="sub_cont_title_text01 sortsmillgoudy fz_20 lh_14 ls_2 light gs_reveal" data-gs-delay="200">
                                            Oracle Point.01
                                        </p>
                                        <p class="sub_cont_title_text02 fz_32 lh_14 ls_2 light m_40 gs_reveal" data-gs-delay="400">
                                            임신 후 짙어지는 <br>
                                            <span class="medium">기미와 색소침착 관리</span>
                                        </p>
                                        <p class="pc_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light gs_reveal m_40" data-gs-delay="600">
                                            인천 오라클피부과는 피부과 전문의가 피부 상태와 색소 깊이, <br>
                                            종류에 맞춰 다양한 레이저 장비를 콜라보레이션하여, 출산 후 거뭇거뭇해진 <br>
                                            피부를 깨끗하고 맑게 회복합니다.
                                        </p>
                                        <p class="m_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light gs_reveal m_40" data-gs-delay="600">
                                            인천 오라클피부과는 피부과 전문의가 피부 상태와 색소 깊이, 
                                            종류에 맞춰 다양한 레이저 장비를 콜라보레이션하여, 출산 후 거뭇거뭇해진 
                                            피부를 깨끗하고 맑게 회복합니다.
                                        </p>
                                        <div class="sub2_8_1_cont03_more_btn">
                                            <a href="<?php echo G5_THEME_URL?>/sub/sub2_2.php">
                                                <p class="fz_16 lh_1 ls_2 light ta_c">색소치료 +</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="sub_cont_doct_img sub2_8_1_tabcontent03_img img_right p_r ta_r">
                                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_8_1_tabcontent03_img01.png" alt="">
                                    </div>
                                </div>

                                <div class="sub_tabcontent_container flex_row fw jc_center center">
                                    <div class="sub_cont_title sub2_8_1_cont04_title_center p_r ta_c m_20">
                                        <p class="sub_cont_title_text01 sortsmillgoudy fz_20 lh_14 ls_2 light gs_reveal" data-gs-delay="200">
                                            Oracle Point.02
                                        </p>
                                        <p class="sub_cont_title_text02 fz_32 lh_14 ls_2 light m_30 gs_reveal" data-gs-delay="400">
                                            임신의 흔적, <span class="medium">튼살 관리</span>
                                        </p>
                                        <p class="pc_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 normal gs_reveal" data-gs-delay="600">
                                            튼살은 산후 우울증의 원인이 되기도 합니다. 인천 오라클피부과에서는 <br>
                                            피부과 전문의가 다양한 레이저를 결합하여 붉은 튼살부터 오래된 <br>
                                            하얀 튼살까지 종류에 맞춰 개선합니다.
                                        </p>
                                        <p class="m_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 normal gs_reveal" data-gs-delay="600">
                                            튼살은 산후 우울증의 원인이 되기도 합니다. 인천 오라클피부과에서는 
                                            피부과 전문의가 다양한 레이저를 결합하여 붉은 튼살부터 오래된 
                                            하얀 튼살까지 종류에 맞춰 개선합니다.
                                        </p>
                                    </div>
                                    <div class="sub2_8_1_cont04_box flex_row fw sb center">
                                        <div class="column_half_40">
                                            <div class="sub2_8_1_cont04_text sub2_8_1_cont04_text01 flex_row fw jc_center center">
                                                <p class="fz_20 ls_2 lh_14 medium m_20">
                                                    붉은 튼살
                                                </p>
                                                <p class="fz_16 ls_2 lh_14 normal">
                                                    붉은 튼살을 완화하는 혈관 레이저<br>
                                                    피부 재생을 유도하는 프락셔널 레이저<br>
                                                    피부 콜라겐을 재생하는 고주파 레이저
                                                </p>
                                            </div>
                                        </div>
                                        <div class="column_half_40">
                                            <div class="sub2_8_1_cont04_text sub2_8_1_cont04_text02 flex_row fw jc_center center">
                                                <p class="fz_20 ls_2 lh_14 medium m_20">
                                                    하얀 튼살
                                                </p>
                                                <p class="fz_16 ls_2 lh_14 normal">
                                                    피부 콜라겐을 재생하는 고주파 레이저<br>
                                                    피부 재생을 유도하는 프락셔널 레이저<br>
                                                    색소 생성을 유도하는 레이저 토닝
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="sub2_8_1_cont04_more_btn">
                                        <a href="#" onclick="sub_page2_8(1)">
                                            <p class="fz_16 lh_1 ls_2 light ta_c">튼살치료 +</p>
                                        </a>
                                    </div>
                                </div>
                                
                                <div class="sub_tabcontent_container sub2_1_cont03_container flex_row fw sa center">
                                    <div class="sub_cont_doct_img sub2_8_1_tabcontent05_img img_left p_r ta_c">
                                        <div class="sub2_8_1_cont05_item flex_row fw jc_center center m_40">
                                            <div class="sub2_8_1_cont05_item_img sub2_8_1_cont05_item_img01">
                                                <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_8_1_cont05_img01.png" alt="">
                                                <p class="fz_16 ls_2 lh_14 light ta_c">헤어셀</p>
                                            </div>
                                            <div class="sub2_8_1_cont05_item_img sub2_8_1_cont05_item_img02">
                                                <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_8_1_cont05_img02.png" alt="">
                                                <p class="fz_16 ls_2 lh_14 light ta_c">메조 테라피</p>
                                            </div>
                                            <div class="sub2_8_1_cont05_item_img sub2_8_1_cont05_item_img03">
                                                <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_8_1_cont05_img03.png" alt="">
                                                <p class="fz_16 ls_2 lh_14 light ta_c">미니룩스</p>
                                            </div>
                                        </div>
                                        
                                        <div class="sub2_8_1_cont05_more_btn">
                                            <a href="#" onclick="sub_page07(1)">
                                                <p class="fz_16 lh_1 ls_2 light ta_c">탈모치료 +</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="sub_cont_title sub2_8_1_tabcontent04_title_right title_right">
                                        <p class="sub_cont_title_text01 sortsmillgoudy fz_20 lh_14 ls_2 light gs_reveal" data-gs-delay="200">
                                            Oracle Point.03
                                        </p>
                                        <p class="sub_cont_title_text02 fz_32 lh_14 ls_2 light m_40 gs_reveal" data-gs-delay="400">
                                            모발의 성장 주기가 바뀌어 발생하는 <br>
                                            <span class="medium">산후 탈모 관리</span>
                                        </p>
                                        <p class="pc_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 normal gs_reveal" data-gs-delay="800">
                                            출산 후에는 모발의 성장 주기가 급격히 바뀌어 일시적 탈모가 일어납니다. <br>
                                            쉽게 빠지고 줄어든 모발, 빠르게 회복하기 위해 인천 오라클피부과는 피부과 <br>
                                            전문의가 두피 상태를 정확하게 체크하고 맞춤형 케어를 진행합니다.
                                        </p>
                                        <p class="m_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 normal gs_reveal" data-gs-delay="800">
                                            출산 후에는 모발의 성장 주기가 급격히 바뀌어 일시적 탈모가 일어납니다. 
                                            쉽게 빠지고 줄어든 모발, 빠르게 회복하기 위해 인천 오라클피부과는 피부과 
                                            전문의가 두피 상태를 정확하게 체크하고 맞춤형 케어를 진행합니다.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                                        <span class="fz_30 ls_2 lh_14 normal">기타치료</span>
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

                <div class="sub_cont04 sub2_8_2_cont04 sub_tabcontent sub_tabcontent2" id="sub_tabcontent2">
                    <div class="sub_tabcontent02_wrap">
                        <div class="sub_cont_box sub2_1_1_cont1_1_box bg_fa pd_120">
                            <div class="sub_tabcontent_container flex_row fw sa center">
                                <div class="sub_cont_title sub2_5_1_cont_title_left title_left">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                                    <p class="sub_cont_title_text01 fz_32 lh_14 ls_2 light m_40">
                                        피어싱 시술부터 피어싱 부작용 치료까지, <br>
                                        <span class="medium">피부과 전문의 책임 진료</span>
                                    </p>
                                    <p class="pc_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 light m_20">
                                        개개인의 체질이나 피어서 위생, 재질에 따라 켈로이드(시술 부위에 <br>
                                        덩어리가 지고 볼록 튀어나오는 증상)가 생길 수 있습니다. <br>
                                        인천 오라클피부과는 안전한 피어싱 시술부터 피어싱 부작용 치료까지, <br>
                                        피부를 잘 아는 피부과전문의가 직접 1:1로 진행합니다.
                                    </p>
                                    <p class="m_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 light m_20">
                                        개개인의 체질이나 피어서 위생, 재질에 따라 켈로이드(시술 부위에 
                                        덩어리가 지고 볼록 튀어나오는 증상)가 생길 수 있습니다. <br>
                                        인천 오라클피부과는 안전한 피어싱 시술부터 피어싱 부작용 치료까지, 
                                        피부를 잘 아는 피부과전문의가 직접 1:1로 진행합니다.
                                    </p>
                                </div>
                                <div class="sub_cont_doct_img sub2_5_1_tabcontent01_img img_right ta_r">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_8_2_tabcontent01_img01.png" alt="">
                                </div>
                            </div>
                        </div>
                        
                        <div class="sub_cont_box sub2_8_1_cont02_wrap pd_160">
                            <div class="sub_tabcontent_container flex_row fw jc_center al_fs">
                                <div class="sub_cont_title sub2_1_4_cont_title_center ta_c">
                                    <p class="sub_cont_title_text01 fz_30 lh_14 ls_2 light m_60 gs_reveal" data-gs-delay="200">
                                        부작용 걱정 없는 <br>
                                        인천 오라클 <span class="medium">피부과 전문의 피어싱</span>
                                    </p>
                                </div>
                                <div class="sub2_8_2_list_box sub2_1_1_premium_box flex_row fw se al_fs">
                                    <div class="column_third_30">
                                        <div class="sub2_8_2_list_item sub2_1_1_premium_item sub2_1_1_premium_item01 ta_c gs_reveal" data-gs-delay="200">
                                            <p class="fz_18 ls_2 lh_14 medium m_20">
                                                POINT 01. 멸균 소독
                                            </p>
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_8_2_cont02_item01.png" alt="">
                                            <p class="pc_cont_434 fz_16 ls_2 lh_14 normal">
                                                시술 전, 피어싱 소독은 물론 <br>
                                                시술 시 사용하는 모든 기구를 <br>
                                                깨끗하게 멸균 소독합니다.
                                            </p>
                                            <p class="m_cont_434 fz_16 ls_2 lh_14 normal">
                                                시술 전, 피어싱 소독은 물론 
                                                시술 시 사용하는 모든 기구를 
                                                깨끗하게 멸균 소독합니다.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="column_third_30">
                                        <div class="sub2_8_2_list_item sub2_1_1_premium_item sub2_1_1_premium_item02 ta_c gs_reveal" data-gs-delay="400">
                                            <p class="fz_18 ls_2 lh_14 medium m_20">
                                                POINT 02. 無알러지 피어싱
                                            </p>
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_8_2_cont02_item02.png" alt="">
                                            <p class="pc_cont_434 fz_16 ls_2 lh_14 normal">
                                                알레르기, 염증 반응이 거의 <br>
                                                발생하지 않는 티타늄, 실리콘 소재의 <br>
                                                피어싱을 사용합니다.
                                            </p>
                                            <p class="m_cont_434 fz_16 ls_2 lh_14 normal">
                                                알레르기, 염증 반응이 거의 
                                                발생하지 않는 티타늄, 실리콘 소재의 
                                                피어싱을 사용합니다.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="column_third_30">
                                        <div class="sub2_8_2_list_item sub2_1_1_premium_item sub2_1_1_premium_item03 ta_c gs_reveal" data-gs-delay="600">
                                            <p class="fz_18 ls_2 lh_14 medium m_20">
                                                POINT 03. 시술 후 관리
                                            </p>
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_8_2_cont02_item03.png" alt="">
                                            <p class="pc_cont_434 fz_16 ls_2 lh_14 normal">
                                                혹시 모를 켈로이드나, <br>
                                                세균 감염, 염증을 방지하는 <br>
                                                사후 관리를 진행합니다.
                                            </p>
                                            <p class="m_cont_434 fz_16 ls_2 lh_14 normal">
                                                혹시 모를 켈로이드나, 
                                                세균 감염, 염증을 방지하는 
                                                사후 관리를 진행합니다.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="sub_cont_box sub2_5_3_cont07_box bg_fa pd_120 pt_160">
                            <div class="sub_tabcontent_container_full flex_row fw jc_center al_fs">
                                <div class="sub_cont_title sub2_5_3_cont7_title_left ta_l">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                                    <p class="sub_cont_title_text02 fz_32 lh_14 ls_2 light m_40 gs_reveal" data-gs-delay="400">
                                        피어싱 부작용 켈로이드 <br>
                                        <span class="medium">증상별 맞춤 치료</span>
                                    </p>
                                    <p class="sub_cont_title_text03 fz_17 lh_14 ls_2 normal gs_reveal" data-gs-delay="400">
                                        피부과 전문의가 환자의 켈로이드 증상, <br>
                                        단계에 맞춰 적절한 치료를 진행합니다.
                                    </p>
                                </div>
                                <div class="swiper-container sub2_5_3_cont7_slider">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide sub2_5_3_cont7_slide">
                                            <div class="sub2_5_3_cont07_item sub2_5_3_cont07_item01 ta_c gs_reveal" data-gs-delay="200">
                                                <img class="m_20" src="<?php echo G5_THEME_URL?>/sub/img/sub2_8_2_cont03_item01.png" alt="">
                                                <p class="fz_17 ls_2 lh_14 normal">
                                                    켈로이드 상태에 맞는 약물 조합의 <span class="medium">주사치료</span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="swiper-slide sub2_5_3_cont7_slide">
                                            <div class="sub2_5_3_cont07_item sub2_5_3_cont07_item02 ta_c gs_reveal" data-gs-delay="400">
                                                <img class="m_20" src="<?php echo G5_THEME_URL?>/sub/img/sub2_8_2_cont03_item02.png" alt="">
                                                <p class="fz_17 ls_2 lh_14 normal">
                                                    켈로이드의 볼륨을 줄여주는 <span class="medium">냉동치료</span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="swiper-slide sub2_5_3_cont7_slide">
                                            <div class="sub2_5_3_cont07_item sub2_5_3_cont07_item03 ta_c gs_reveal" data-gs-delay="600">
                                                <img class="m_20" src="<?php echo G5_THEME_URL?>/sub/img/sub2_8_2_cont03_item03.png" alt="">
                                                <p class="fz_17 ls_2 lh_14 normal">
                                                    크고 딱딱해진 켈로이드를 <br>
                                                    직접 제거하는 <span class="medium">수술적 치료</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-scrollbar"></div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="sub_cont_box sub2_1_1_cont4_box">
                            <div class="sub2_1_1_cont4 flex_row fw jc_center center">
                                <div class="column_half">
                                    <div class="sub2_6_2_cont4_img">
                                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_8_2_cont4_img_left.jpg" alt="">
                                    </div>
                                </div>
                                <div class="column_half">
                                    <div class="sub2_5_2_cont04_left sub2_8_2_cont04_left flex_row fw fd_c jc_center center">
                                        <div class="sub_cont_title sub2_5_2_cont04_title_center ta_l">
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                                            <p class="sub_cont_title_text02 fz_32 lh_14 ls_2 light m_40 gs_reveal" data-gs-delay="400">
                                                크고 단단한 켈로이드도 깨끗하게, <br>
                                                <span class="medium">켈로이드 절제 수술</span>
                                            </p>
                                            <ul class="sub2_5_1_cont04_item_ul fz_17 normal ta_l m_30 gs_reveal" data-gs-delay="600">
                                                <li>
                                                    <p class="sub2_5_1_ul_p">최소한의 절개로 깨끗하게</p>
                                                </li>
                                                <li>
                                                    <p class="sub2_5_1_ul_p">재발 방지를 위한 코어절제술</p>
                                                </li>
                                                <li>
                                                    <p class="sub2_5_1_ul_p">흉터의 최소화를 위한 섬세한 디자인</p>
                                                </li>
                                                <li>
                                                    <p class="sub2_5_1_ul_p">절제 수술 후 재발방지를 위한 후처치</p>
                                                </li>
                                            </ul>
                                            <p class="pc_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 normal gs_reveal" data-gs-delay="800">
                                                잘못된 켈로이드 수술의 경우 수술 후 재발로 인하여 병변이 <br>
                                                더 커질수도 있기 때문에 경험 많은 의료진에게 진찰 후 적절한 <br>
                                                수술을 받으시는 것이 좋습니다. 인천 오라클피부과는 10년 <br>
                                                이상의 경력의 피부과 전문의가 직접 수술합니다.
                                            </p>
                                            <p class="m_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 normal gs_reveal" data-gs-delay="800">
                                                잘못된 켈로이드 수술의 경우 수술 후 재발로 인하여 병변이 
                                                더 커질수도 있기 때문에 경험 많은 의료진에게 진찰 후 적절한 
                                                수술을 받으시는 것이 좋습니다. 인천 오라클피부과는 10년 
                                                이상의 경력의 피부과 전문의가 직접 수술합니다.
                                            </p>
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
                                        Piercing
                                    </p>
                                    <p class="sub_cont_title_text02 fz_32 lh_16 ls_2 light">
                                        피어싱 / 피어싱부작용 <span class="medium">치료 후 주의사항</span>
                                    </p>
                                </div>
                                <div class="sub2_2_1_cont05_text sub2_8_2_cont05_text open li_4 sub_click_box" id="sub_click_box2">
                                    <ul class="sub2_2_1_cont05_item_ul fz_17 normal ta_l">
                                        <li>
                                            <p>12주 이상이 지나야 피어싱 부위에 어느정도 상피화가 완성되며 이전에 피어싱을 제거하면 구멍이 막히게 됩니다.</p>
                                        </li>
                                        <li>
                                            <p>시술 부위를 만지면 상처가 아무는데 악영향을 주므로 건드리지 않는 것이 좋습니다.</p>
                                        </li>
                                        <li>
                                            <p>최소 1주일 간은 음주를 삼가하는 것이 좋습니다.</p>
                                        </li>
                                        <li>
                                            <p>첫 피어싱은 최소 3~4주 뒤, 3개월 이상 지난 후 교체하는 것을 권장합니다.</p>
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
                                        <span class="fz_30 ls_2 lh_14 normal">기타치료</span>
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
                
                <div class="sub_cont03 sub2_8_3_cont03 sub_tabcontent sub_tabcontent3" id="sub_tabcontent3">
                    <div class="sub_tabcontent03_wrap">
                        <div class="sub_cont_box sub2_1_1_cont1_1_box bg_fa pd_120">
                            <div class="sub_tabcontent_container flex_row fw sa center">
                                <div class="sub_cont_title sub2_5_1_cont_title_left title_left">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                                    <p class="sub_cont_title_text01 fz_32 lh_14 ls_2 light m_40">
                                        특별한 날 당신의 피부를 더 특별하게, <br>
                                        <span class="medium">웨딩 케어 프로그램</span>
                                    </p>
                                    <p class="pc_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 light m_30">
                                        일생에 가장 중요한 날, 예식 일정에 맞춰 당신의 피부가 더 빛나고 라인이 <br>
                                        더 아름답도록 피부과 전문의가 이상적인 웨딩 케어 프로그램을 설계합니다.
                                    </p>
                                    <p class="m_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 light m_30">
                                        일생에 가장 중요한 날, 예식 일정에 맞춰 당신의 피부가 더 빛나고 라인이 
                                        더 아름답도록 피부과 전문의가 이상적인 웨딩 케어 프로그램을 설계합니다.
                                    </p>
                                    <ul class="sub2_5_1_cont04_item_ul fz_17 normal ta_l">
                                        <li>
                                            <p class="sub2_5_1_ul_p">예식날 맞춤 웨딩케어 플랜</p>
                                        </li>
                                        <li>
                                            <p class="sub2_5_1_ul_p">1:1 맞춤형 피부관리 및 토탈케어</p>
                                        </li>
                                        <li>
                                            <p class="sub2_5_1_ul_p">피부과 전문의 직접 시술</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="sub_cont_doct_img sub2_5_1_tabcontent01_img img_right ta_r">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_8_3_tabcontent01_img01.png" alt="">
                                </div>
                            </div>
                        </div>
                        
                        <div class="sub_cont_box sub2_8_3_cont02_wrap pt_160">
                            <div class="sub_cont_title sub2_1_4_cont_title_center ta_c">
                                <p class="sub_cont_title_text01 fz_30 lh_14 ls_2 medium m_80 gs_reveal" data-gs-delay="200">
                                    예비 신부를 위한 <br>
                                    웨딩 관리 프로그램
                                </p>
                            </div>
                            <div class="sub_tabcontent_container flex_row fw jc_center center">
                                <div class="sub_cont_doct_img sub2_8_3_tabcontent02_img img_left ta_c">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_8_3_tabcontent02_img01.png" alt="">
                                </div>
                                <div class="sub_cont_title sub2_8_3_cont02_title_right title_right">
                                    <p class="sub_cont_title_text01 fz_18 lh_14 ls_2 medium m_30">
                                        PHA 필링
                                    </p>
                                    <ul class="sub2_8_3_cont02_item_ul fz_17 normal ta_l">
                                        <li>
                                            <p class="sub2_8_3_ul_p">일명 연예인 필링</p>
                                        </li>
                                        <li>
                                            <p class="sub2_8_3_ul_p">예식 전 보습과 미백</p>
                                        </li>
                                        <li>
                                            <p class="sub2_8_3_ul_p">건조하고 칙칙한 피부 맞춤</p>
                                        </li>
                                        <li>
                                            <p class="sub2_8_3_ul_p">촉촉하고 빛나는 피부결을 완성합니다</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <div class="sub_cont_box sub2_2_3_cont03_wrap pd_160">
                            <div class="container-800 flex_row fw se al_fs">
                                <div class="sub_cont_title sub2_1_4_cont_title_center ta_c">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                                    <p class="sub_cont_title_text01 fz_30 lh_14 ls_2 light m_80 gs_reveal" data-gs-delay="200">
                                        특별한 날, 당신을 더 빛나게 <br>
                                        <span class="medium">1:1 맞춤 관리</span>
                                    </p>
                                </div>
                                <div class="sub2_2_3_cont03_box flex_row fw se al_fs">
                                    <div class="column_half">
                                        <div class="sub2_2_3_cont03_item sub2_2_3_cont03_item01 ta_c gs_reveal" data-gs-delay="200">
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_8_3_item01.png" alt="">
                                            <p class="fz_22 ls_2 lh_16 normal m_10">
                                                매일 다른 피부 상태 맞춤형
                                            </p>
                                            <p class="pc_cont_434 fz_16 ls_2 lh_14 normal">
                                                매 방문 시 마다 피부 상태를 직접 체크하고 <br>
                                                그에 맞는 레이저 1~2종과 관리를 진행합니다.
                                            </p>
                                            <p class="m_cont_434 fz_16 ls_2 lh_14 normal">
                                                매 방문 시 마다 피부 상태를 직접 체크하고 
                                                그에 맞는 레이저 1~2종과 관리를 진행합니다.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="column_half">
                                        <div class="sub2_2_3_cont03_item sub2_2_3_cont03_item02 ta_c gs_reveal" data-gs-delay="400">
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_8_3_item02.png" alt="">
                                            <p class="fz_22 ls_2 lh_16 normal m_10">
                                                예식날 맞춤 웨딩케어 플랜
                                            </p>
                                            <p class="pc_cont_434 fz_16 ls_2 lh_14 normal">
                                                시술의 다운타임과 최대 효과 시기를 고려해 <br>
                                                예식 당일 가장 아름다울 수 있도록 합니다.
                                            </p>
                                            <p class="m_cont_434 fz_16 ls_2 lh_14 normal">
                                                시술의 다운타임과 최대 효과 시기를 고려해 
                                                예식 당일 가장 아름다울 수 있도록 합니다.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <style>
                                    .sub2_2_3_cont03_wrap {
                                        position: relative;
                                        width: 100%;
                                        background: none;
                                    }
                                    .sub2_2_3_cont03_item{padding:0 6%;}
                                    .sub2_2_3_cont03_item01::after{display:none;}
                                </style>
                            </div>
                        </div>
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
                                        <span class="fz_30 ls_2 lh_14 normal">기타치료</span>
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
                
                <div class="sub_cont03 sub2_8_4_cont03 sub_tabcontent sub_tabcontent4" id="sub_tabcontent4">
                    <div class="sub_tabcontent04_wrap">
                        <div class="sub_cont_box sub2_1_1_cont1_1_box bg_fa pd_120">
                            <div class="sub_tabcontent_container flex_row fw sa center">
                                <div class="sub_cont_title sub2_5_1_cont_title_left title_left">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                                    <p class="sub_cont_title_text01 fz_32 lh_14 ls_2 light m_40">
                                        시술 부작용부터 마음의 상처까지 <br>
                                        함께 치료하는 <span class="medium">부작용 케어 프로그램</span>
                                    </p>
                                    <p class="pc_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 light m_20">
                                        필러나 보톡스, 레이저 등 미용 시술을 받으면서 생기는 다양한 부작용, <br>
                                        시술 경험이 풍부한 피부과 전문의가 원래의 상태처럼 회복해드립니다.
                                    </p>
                                    <p class="m_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 light m_20">
                                        필러나 보톡스, 레이저 등 미용 시술을 받으면서 생기는 다양한 부작용, 
                                        시술 경험이 풍부한 피부과 전문의가 원래의 상태처럼 회복해드립니다.
                                    </p>
                                </div>
                                <div class="sub_cont_doct_img sub2_5_1_tabcontent01_img img_right ta_r">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_8_4_tabcontent01_img01.png" alt="">
                                </div>
                            </div>
                        </div>
                        
                        <div class="sub_cont_box sub2_8_4_cont02_wrap bg_fa pd_160">
                            <div class="container-1200 flex_row fw jc_center center">
                                <div class="sub_cont_title sub2_1_4_cont_title_center p_r ta_c">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                                    <p class="sub_cont_top_title_text01 fz_30 lh_14 ls_2 light m_80 gs_reveal" data-gs-delay="200">
                                        <span class="medium">미용 시술 후 부작용</span>
                                    </p>
                                </div>
                                <div class="sub2_5_3_cont03_box sub2_8_4_cont03_box p_r flex_row fw jc_fe center m_80">
                                    <div class="sub_cont_doct_img sub2_8_4_tabcontent02_img img_left p_r ta_c gs_reveal" data-gs-delay="200">
                                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_8_4_tabcontent02_img01.png" alt="">
                                    </div>
                                    <div class="sub_cont_title sub2_5_3_cont03_title_right sub2_8_4_cont03_title title_right">
                                        <p class="sub_cont_title_text02 sub2_8_4_cont03_text fz_23 lh_14 ls_2 light m_20 gs_reveal" data-gs-delay="400">
                                            <span class="medium">레이저 치료 후 기미 / 색소침착</span>
                                        </p>
                                        <ul class="sub2_5_1_cont04_item_ul fz_16 normal ta_l gs_reveal" data-gs-delay="600">
                                            <li>
                                                <p>부적절한 레이저 사용으로 기미가 더 짙어지는 경우</p>
                                            </li>
                                            <li>
                                                <p>레이저 치료 후 색소침착이 생기는 경우</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                
                                <div class="sub2_5_3_cont03_box sub2_8_4_cont03_box p_r flex_row fw jc_fe center m_80">
                                    <div class="sub_cont_doct_img sub2_8_4_tabcontent02_img img_left p_r ta_c gs_reveal" data-gs-delay="200">
                                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_8_4_tabcontent02_img02.png" alt="">
                                    </div>
                                    <div class="sub_cont_title sub2_5_3_cont03_title_right sub2_8_4_cont03_title title_right">
                                        <p class="sub_cont_title_text02 sub2_8_4_cont03_text fz_23 lh_14 ls_2 light m_20 gs_reveal" data-gs-delay="400">
                                            <span class="medium">필러 시술 후 염증 / 부자연스러움</span>
                                        </p>
                                        <ul class="sub2_5_1_cont04_item_ul fz_16 normal ta_l gs_reveal" data-gs-delay="600">
                                            <li>
                                                <p>비위생적인 시술 도구, 잘못된 필러 제품 사용으로 염증 발생</p>
                                            </li>
                                            <li>
                                                <p class="pc_cont_434">
                                                    과도한 양 주입, 해부학적 구조에 부적합한 위치에 주사하여 <br>
                                                    부자연스러움
                                                </p>
                                                <p class="m_cont_434">
                                                    과도한 양 주입, 해부학적 구조에 부적합한 위치에 주사하여 
                                                    부자연스러움
                                                </p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="sub2_5_3_cont03_box sub2_8_4_cont03_box p_r flex_row fw jc_fe center">
                                    <div class="sub_cont_doct_img sub2_8_4_tabcontent02_img img_left p_r ta_c gs_reveal" data-gs-delay="200">
                                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_8_4_tabcontent02_img03.png" alt="">
                                    </div>
                                    <div class="sub_cont_title sub2_5_3_cont03_title_right sub2_8_4_cont03_title title_right">
                                        <p class="sub_cont_title_text02 sub2_8_4_cont03_text fz_23 lh_14 ls_2 light m_20 gs_reveal" data-gs-delay="400">
                                            <span class="medium">보톡스 시술 후 어색함/ 돌출</span>
                                        </p>
                                        <ul class="sub2_5_1_cont04_item_ul fz_16 normal ta_l gs_reveal" data-gs-delay="600">
                                            <li>
                                                <p>과도한 양을 주입하여 표정이 어색해지거나, 눈을 뜨기 힘든 경우</p>
                                            </li>
                                            <li>
                                                <p>잘못된 부위에 주입하여 시술 부위가 튀어나온 경우</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="sub_cont_box sub2_1_1_cont4_box">
                            <div class="sub2_8_4_cont4 flex_row fw jc_center center">
                                <div class="column_half">
                                    <div class="sub2_6_2_cont04_text sub2_8_5_cont04_text">
                                        <div class="sub_cont_title sub2_5_2_cont04_title_center ta_c">
                                            <img class="m_20" src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                                            <p class="sub_cont_title_text01 fz_18 lh_16 ls_2 normal gs_reveal m_30" data-gs-delay="200">
                                                피부 상태를 고려하지 않은 과도한 시술은 <br>
                                                시술 후 부작용을 낳습니다.
                                            </p>
                                            <p class="sub_cont_title_text02 fz_18 lh_16 ls_2 normal gs_reveal" data-gs-delay="400">
                                                인천 오라클피부과는 해부학적 구조를 <br>
                                                잘 아는 피부과 전문의가 풍부한 <br>
                                                미용 시술 경험과  다양한 부작용 치료 경험을 <br>
                                                바탕으로 부작용 회복 치료를 진행합니다.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="column_half">
                                    <div class="sub2_6_2_cont4_img">
                                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_8_4_cont3_img_right.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="sub_cont_box sub2_1_youtube_box pd_120">
                            <div class="container-sm flex_row fw jc_center al_fs">
                                <div class="sub_cont_title sub2_1_4_cont_title_center ta_c">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                                    <p class="sub_cont_title_text01 sortsmillgoudy fz_50 lh_14 ls_2 gs_reveal" data-gs-delay="200">
                                        Youtube
                                    </p>
                                    <p class="sub_cont_title_text02 fz_20 lh_16 ls_2 normal gs_reveal m_60" data-gs-delay="400">
                                        피부과 전문의가 직접 들려 주는 <br>
                                        <span class="fz_30 ls_2 lh_14 normal">기타치료</span>
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
                
                <div class="sub_cont03 sub2_8_5_cont03 sub_tabcontent sub_tabcontent5" id="sub_tabcontent5">
                    <div class="sub_tabcontent05_wrap">
                        <div class="sub_cont_box sub2_1_1_cont1_1_box bg_fa pd_120">
                            <div class="sub_tabcontent_container flex_row fw sa center">
                                <div class="sub_cont_title sub2_5_1_cont_title_left title_left">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                                    <p class="sub_cont_title_text01 fz_32 lh_14 ls_2 light m_40">
                                        오돌토돌한 한관종, <br>
                                        <span class="medium">뿌리까지 제거하는 레이저 치료</span>
                                    </p>
                                    <p class="pc_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 light">
                                        눈 밑, 이마, 뺨 등에 발생하는 한관종은 시간이 흐를수록 갯수가 증가합니다. <br>
                                        비립종과 쉽게 혼돈되는 한관종은 피부과 전문의의 정확한 진단 후 깊은 <br>
                                        뿌리까지 제거해야 합니다. <br>
                                        인천 오라클피부과는 피부과 전문의가 직접 피부를 진단하며, 깊은 뿌리까지 <br>
                                        철저하게 제거하여 재발까지 방지합니다.
                                    </p>
                                    <p class="m_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 light">
                                        눈 밑, 이마, 뺨 등에 발생하는 한관종은 시간이 흐를수록 갯수가 증가합니다. 
                                        비립종과 쉽게 혼돈되는 한관종은 피부과 전문의의 정확한 진단 후 깊은 
                                        뿌리까지 제거해야 합니다. <br>
                                        인천 오라클피부과는 피부과 전문의가 직접 피부를 진단하며, 깊은 뿌리까지 
                                        철저하게 제거하여 재발까지 방지합니다.
                                    </p>
                                </div>
                                <div class="sub_cont_doct_img sub2_5_1_tabcontent01_img img_right ta_r">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_8_5_tabcontent01_img01.png" alt="">
                                </div>
                            </div>
                        </div>
                        
                        <div class="sub_cont_box sub2_8_5_cont02_box pd_120">
                            <div class="container-sm flex_row fw jc_center al_fs">
                                <div class="sub_cont_title sub2_1_4_cont_title_center ta_c m_40">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                                    <p class="sub_cont_title_text02 fz_32 lh_14 ls_2 medium m_100 gs_reveal" data-gs-delay="200">
                                        피부 손상을 최소화 한 <br>
                                        적절한 강도의 레이저 치료
                                    </p>
                                </div>
                                <div class="sub2_3_1_cont05_box sub2_8_5_cont05_box flex_row fw se al_fs">
                                    <div class="column_half">
                                        <div class="sub2_8_5_cont02_item sub2_8_5_cont02_item01 flex_row jc_center al_fs">
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_8_5_cont02_item01.png" alt="">
                                            
                                            <div class="sub_cont_title sub2_8_5_cont02_title_right title_right">
                                                <p class="sub_cont_title_text02 fz_23 lh_14 ls_2 light m_20 gs_reveal" data-gs-delay="200">
                                                    <span class="medium">아그네스</span>
                                                </p>
                                                <ul class="sub2_5_1_cont04_item_ul fz_16 normal ta_l gs_reveal" data-gs-delay="400">
                                                    <li>
                                                        <p>표피 손상 최소화</p>
                                                    </li>
                                                    <li>
                                                        <p>진물, 딱지가 발생하지 않음</p>
                                                    </li>
                                                    <li>
                                                        <p>붉은 기가 오래가지 않음</p>
                                                    </li>
                                                    <li>
                                                        <p>일상생활의 불편함 최소화</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column_half">
                                        <div class="sub2_8_5_cont02_item sub2_8_5_cont02_item02 flex_row jc_center al_fs">
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_8_5_cont02_item02.png" alt="">
                                            
                                            <div class="sub_cont_title sub2_8_5_cont02_title_right title_right">
                                                <p class="sub_cont_title_text02 fz_23 lh_14 ls_2 light m_20 gs_reveal" data-gs-delay="200">
                                                    <span class="medium">Co2 / 어붐야그 레이저</span>
                                                </p>
                                                <ul class="sub2_5_1_cont04_item_ul fz_16 normal ta_l gs_reveal" data-gs-delay="400">
                                                    <li>
                                                        <p>표피를 깎아내는 치료</p>
                                                    </li>
                                                    <li>
                                                        <p>미세하게 구멍을 뚫는 방식</p>
                                                    </li>
                                                    <li>
                                                        <p>강력한 세기 치료법</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="sub_cont_box sub2_4_5_cont06_box bg_fa pd_60">
                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_8_5_cont03_img01.png" alt="">
                            
                            <div class="sub2_4_5_cont06_title ta_c">
                                <p class="pc_cont_434 sub_cont_title_text01 fz_20 lh_16 ls_2 normal gs_reveal" data-gs-delay="200">
                                    한관종 상태에 따라 다양한 레이저를 적용하는 <br>
                                    멀티 레이저 시술로 깨끗하게 제거합니다.
                                </p>
                                <p class="m_cont_434 sub_cont_title_text01 fz_20 lh_16 ls_2 normal gs_reveal" data-gs-delay="200">
                                    한관종 상태에 따라 다양한 레이저를 적용하는 
                                    멀티 레이저 시술로 깨끗하게 제거합니다.
                                </p>
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
                                            기타 치료 <span class="medium">레이저 프로그램</span>
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
                                <div class="sub_click_btn open m_20" id="sub_click_btn5">
                                    <p class="sub_cont_title_text01 sortsmillgoudy fz_20 lh_16 ls_2 light">
                                        Syringoma
                                    </p>
                                    <p class="sub_cont_title_text02 fz_32 lh_16 ls_2 light">
                                        한관종 <span class="medium">치료 후 주의사항</span>
                                    </p>
                                </div>
                                <div class="sub2_2_1_cont05_text sub2_8_5_cont05_text open li_5 sub_click_box" id="sub_click_box5">
                                    <ul class="sub2_2_1_cont05_item_ul fz_17 normal ta_l">
                                        <li>
                                            <p>시술 후 저자극 세안제 및 재생크림 사용을 권장드립니다.</p>
                                        </li>
                                        <li>
                                            <p>딱지가 생길 경우 억지로 뜯어내는 것을 삼가 주세요.</p>
                                        </li>
                                        <li>
                                            <p>아그네스 시술 후 첫 한달정도는 붓기로 인해 병변이 더 커보일수 있습니다.</p>
                                        </li>
                                        <li>
                                            <p>아그네스 시술 후 2~3개월에 걸쳐 서서히 병변이 작아집니다.</p>
                                        </li>
                                        <li>
                                            <p>시술 부위가 붉어지거나 어두워질 수 있으나 일반적으로 다시 회복됩니다.</p>
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
                                        <span class="fz_30 ls_2 lh_14 normal">기타치료</span>
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
                
                <div class="sub_cont03 sub2_8_6_cont03 sub_tabcontent sub_tabcontent6" id="sub_tabcontent6">
                    <div class="sub_tabcontent06_wrap">
                        <div class="sub_cont_box sub2_1_1_cont1_1_box bg_fa pd_120">
                            <div class="sub_tabcontent_container flex_row fw sa center">
                                <div class="sub_cont_title sub2_5_1_cont_title_left title_left">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                                    <p class="sub_cont_title_text01 fz_32 lh_14 ls_2 light m_40">
                                        말 못할 고민 다한증 & 액취증, <br>
                                        깨끗하게 제거하는 <span class="medium">3중 제거술</span>
                                    </p>
                                    <p class="pc_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 light">
                                        필요 이상으로 땀이 나는 다한증과 강한 악취가 나는 <br>
                                        액취는 심각할 경우 사회 생활에도 지장을 줄 수 있습니다. <br>
                                        인천 오라클피부과에서는 수술 경험이 풍부한 <br>
                                        피부과 전문의가 미세 절개를 통한 3중 제거술과 비너스 레이저 <br>
                                        복합 시술로 재발 걱정 없이 문제를 개선합니다.
                                    </p>
                                    <p class="m_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 light">
                                        필요 이상으로 땀이 나는 다한증과 강한 악취가 나는 
                                        액취는 심각할 경우 사회 생활에도 지장을 줄 수 있습니다. <br>
                                        인천 오라클피부과에서는 수술 경험이 풍부한 
                                        피부과 전문의가 미세 절개를 통한 3중 제거술과 비너스 레이저 
                                        복합 시술로 재발 걱정 없이 문제를 개선합니다.
                                    </p>
                                </div>
                                <div class="sub_cont_doct_img sub2_5_1_tabcontent01_img img_right ta_c">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_8_6_tabcontent01_img01.png" alt="">
                                </div>
                            </div>
                        </div>
                        
                        <div class="sub_cont_box sub2_8_1_cont02_wrap pd_160">
                            <div class="sub_tabcontent_container flex_row fw jc_center al_fs">
                                <div class="sub_cont_title sub2_1_4_cont_title_center ta_c">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                                    <p class="sub_cont_title_text01 fz_30 lh_14 ls_2 normal m_60 gs_reveal" data-gs-delay="200">
                                        다한증 & 액취증 자가진단
                                    </p>
                                </div>
                                <div class="sub2_1_1_premium_box flex_row fw se al_fs">
                                    <div class="column_third_30">
                                        <div class="sub2_1_1_premium_item sub2_1_1_premium_item01 ta_c gs_reveal" data-gs-delay="200">
                                            <p class="fz_18 ls_2 lh_14 medium m_20">
                                                CHECK 01
                                            </p>
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_8_6_cont02_item01.png" alt="">
                                            <p class="fz_16 ls_2 lh_14 normal">
                                                흰 속옷을 입으면 <br>
                                                겨드랑이가 누렇게 착색된다.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="column_third_30">
                                        <div class="sub2_1_1_premium_item sub2_1_1_premium_item02 ta_c gs_reveal" data-gs-delay="400">
                                            <p class="fz_18 ls_2 lh_14 medium m_20">
                                                CHECK 02
                                            </p>
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_8_6_cont02_item02.png" alt="">
                                            <p class="fz_16 ls_2 lh_14 normal">
                                                귀지가 눅눅하고, 냄새가 난다.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="column_third_30">
                                        <div class="sub2_1_1_premium_item sub2_1_1_premium_item03 ta_c gs_reveal" data-gs-delay="600">
                                            <p class="fz_18 ls_2 lh_14 medium m_20">
                                                CHECK 03
                                            </p>
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_8_6_cont02_item03.png" alt="">
                                            <p class="fz_16 ls_2 lh_14 normal">
                                                가족 중에 다한증, 액취증 환자가 있다.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="sub_cont_box sub_cont_box2 bg_fa pd_120">
                            <div class="sub_tabcontent_container flex_row fw sa center">
                                <div class="pc_cont sub_cont_doct_img sub2_5_1_tabcontent01_img img_left ta_c">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_8_6_tabcontent03_img01.png" alt="">
                                </div>
                                <div class="sub_cont_title sub2_8_5_cont_title sub2_5_1_cont_title_right title_right">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                                    <p class="sub_cont_title_text01 fz_32 lh_14 ls_2 light m_40">
                                        <span class="medium">미세 절개로 흉터를 최소화</span> 한 <br>
                                        3중 제거술
                                    </p>
                                    <ul class="sub2_8_6_cont03_item_ul fz_17 normal ta_l m_30 gs_reveal" data-gs-delay="600">
                                        <li>
                                            <p>0.5cm 미만의 미세 절개로 흉터 최소화</p>
                                        </li>
                                        <li>
                                            <p>
                                                지방흡입기를 이용한 액취증 수술과 비너스 레이저 <br>
                                                복합 시술로 효과의 극대화 & 재발 최소화
                                            </p>
                                        </li>
                                        <li>
                                            <p>가벼운 후처치로 생활 불편 최소화, 일상생활이 바로 가능</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="sub2_8_5_item_box sub2_4_2_cont03_item_box flex_row fw sa al_fs">
                                    <div class="sub2_4_2_cont03_item sub2_4_2_cont03_item01 ta_c">
                                        <p class="sub2_4_2_cont03_item_text01 sortsmillgoudy fz_20 ls_2 lh_14">Point 01</p>
                                        <p class="sub2_4_2_cont03_item_text02 fz_16 ls_2 lh_14 normal">
                                            아포크린 땀샘 제거로 <br>
                                            근본적인 원인 해소
                                        </p>
                                    </div>
                                    <div class="sub2_4_2_cont03_item sub2_4_2_cont03_item02 ta_c">
                                        <p class="sub2_4_2_cont03_item_text01 sortsmillgoudy fz_20 ls_2 lh_14">Point 02</p>
                                        <p class="sub2_4_2_cont03_item_text02 fz_16 ls_2 lh_14 normal">
                                            투메슨트 부분 마취로 <br>
                                            더 정확한 땀샘 흡입
                                        </p>
                                    </div>
                                    <div class="sub2_8_5_cont03_item03 sub2_4_2_cont03_item sub2_4_2_cont03_item03 ta_c">
                                        <p class="sub2_4_2_cont03_item_text01 sortsmillgoudy fz_20 ls_2 lh_14">Point 03</p>
                                        <p class="sub2_4_2_cont03_item_text02 fz_16 ls_2 lh_14 normal">
                                            레이저 땀샘 제거와 <br>
                                            초미세 케뉼라 흡입술로 재발 걱정↓
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!--
                        <div class="sub_cont_box sub2_2_1_cont04_box p_r bg_fa pd_60">
                            <div class="container-1300 sub2_2_1_cont05_container">
                                <div class="sub_click_btn open m_20" id="sub_click_btn6">
                                    <p class="sub_cont_title_text01 sortsmillgoudy fz_20 lh_16 ls_2 light">
                                        Hyperhidrosis / Liquidity
                                    </p>
                                    <p class="sub_cont_title_text02 fz_32 lh_16 ls_2 light">
                                        다한증/액취증 <span class="medium">치료 후 주의사항</span>
                                    </p>
                                </div>
                                <div class="sub2_2_1_cont05_text sub2_8_6_cont05_text open li_2 sub_click_box" id="sub_click_box6">
                                    <ul class="sub2_2_1_cont05_item_ul fz_17 normal ta_l">
                                        <li>
                                            <p>시술 후 일주일 동안 목욕탕, 사우나 등 뜨겁고 자극적인 곳은 피해 주세요.</p>
                                        </li>
                                        <li>
                                            <p>시술 후 일주일 간은 장시간 노출되어 땀을 흘리는 과격한 운동은 삼가 주세요.</p>
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
                                        <span class="fz_30 ls_2 lh_14 normal">기타치료</span>
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