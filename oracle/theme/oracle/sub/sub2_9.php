<?php
include_once('./_common.php');
//if (G5_IS_MOBILE) {
//    include_once(G5_MOBILE_PATH.'/index.php');
//    return;
//}

// 웹사이트 타이틀
$g5['title'] = '여성진료';

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
            <div class="sub_top_view sub2_9_top_view">
                <div class="sub_top_view_bg sub2_9_top_view_bg"></div>
                <div class="sub_top_view_text_wrap sub2_9_top_view_text_wrap ta_c">
                    <div class="sub_top_view_text01 sub2_9_top_view_text01">
                        <p class="sortsmillgoudy fz_30 lh_14 ls_2 sub_text_ani">
                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub_top_view_text_icon3.png" alt="">
                            Woman Care Program
                        </p>
                    </div>
                    <div class="sub_top_view_text02 sub2_9_top_view_text02 m_20">
                        <p class="fz_40 lh_14 ls_2 medium sub_text_ani">
                            여성진료
                        </p>
                    </div>
                    <div class="sub_top_view_text03 sub2_9_top_view_text03">
                        <p class="pc_cont_434 fz_16 lh_14 ls_2 normal sub_text_ani">
                            여성의 건강과 아름다운 삶을 위한 여성 전용 케어 프로그램으로,
                        </p>
                        <p class="m_cont_434 fz_16 lh_14 ls_2 normal sub_text_ani">
                            여성의 건강과 아름다운 삶을 위한 여성 전용 케어 프로그램으로, 
                            여성 성형부터 질병 예방 프로그램까지 체계적인 토탈 케어를 진행합니다.
                        </p>
                    </div>
                    <div class="sub_top_view_text04 sub2_9_top_view_text04">
                        <p class="pc_cont_434 fz_16 lh_14 ls_2 normal sub_text_ani">
                            여성 성형부터 질병 예방 프로그램까지 체계적인 토탈 케어를 진행합니다.
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
                                <p class="fz_16 ta_c">여성성형</p>
                            </a>
                        </li>
                        <li id="sub_tablinks02" class="sub_tab_li sub_tablinks" onclick="opensubtab(event, 'sub_tabcontent2')">
                            <a href="javascript:void(0);">
                                <p class="fz_16 ta_c">부인과</p>
                            </a>
                        </li>
                        <li id="sub_tablinks03" class="sub_tab_li sub_tablinks" onclick="opensubtab(event, 'sub_tabcontent3')">
                            <a href="javascript:void(0);">
                                <p class="fz_16 ta_c">유방진료</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </article>
            
            <article class="sub_tabcontent_wrap sub2_8_tabcontent_wrap">
                <div class="sub_cont03 sub2_8_1_cont03 sub_tabcontent sub_tabcontent1" id="sub_tabcontent1">
                    <div class="sub_tabcontent01_wrap">
                        <div class="sub_cont_box sub_cont_box2 bg_fa pd_120">
                            <div class="sub_tabcontent_container flex_row fw sa center">
                                <div class="sub_cont_title sub2_5_1_cont_title_left title_left">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                                    <p class="sub_cont_title_text01 fz_32 lh_14 ls_2 light m_40">
                                        삶의 질을 높이는 여성 이너뷰티, <br>
                                        <span class="medium">여성성형 프로그램</span>
                                    </p>
                                    <p class="pc_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 light">
                                        인천 오라클의 여성 성형 프로그램은 산부인과 전문의가 <br>
                                        상담부터 치료까지 함께하는 논스톱 진료로 진행됩니다.
                                    </p>
                                    <p class="m_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 light">
                                        인천 오라클의 여성 성형 프로그램은 산부인과 전문의가 
                                        상담부터 치료까지 함께하는 논스톱 진료로 진행됩니다.
                                    </p>
                                </div>
                                <div class="sub_cont_doct_img sub2_9_1_cont_doct_img sub2_5_1_tabcontent01_img img_right ta_c">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_9_1_tabcontent01_img01.png" alt="">
                                </div>
                            </div>
                        </div>
                        
                        <div class="sub_cont_box sub2_9_1_cont2_box p_r bg_fa pd_120">
                            <div class="sub_tabcontent_container flex_row fw sa center">
                                <div class="pc_cont_480 sub_cont_doct_img sub2_5_1_tabcontent01_img img_left ta_c">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_9_1_tabcontent02_img01.png" alt="">
                                </div>
                                <div class="sub_cont_title sub2_5_1_cont_title_right title_right">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                                    <p class="sub_cont_title_text01 fz_32 lh_14 ls_2 light m_40">
                                        탄력을 되찾는 질 타이트닝, <br>
                                        <span class="medium">이쁜이 수술</span>
                                    </p>
                                    <p class="pc_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 light">
                                        질강축소술이라고도 불리는 이쁜이 수술은 출산이나 노화로 <br>
                                        느슨해진 질 내부를 좁혀 예전처럼 탄력 있게 만들어 줍니다. <br>
                                        임신, 출산이나 노화, 폐경으로 인해 헐거워진 질의 탄력을 <br>
                                        회복하여 자신감과 성 만족감을 높여 줍니다.
                                    </p>
                                    <p class="m_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 light">
                                        질강축소술이라고도 불리는 이쁜이 수술은 출산이나 노화로 
                                        느슨해진 질 내부를 좁혀 예전처럼 탄력 있게 만들어 줍니다. <br>
                                        임신, 출산이나 노화, 폐경으로 인해 헐거워진 질의 탄력을 
                                        회복하여 자신감과 성 만족감을 높여 줍니다.
                                    </p>
                                </div>
                                <div class="m_cont_480 sub_cont_doct_img sub2_9_1_cont01_doct_img sub2_5_1_tabcontent01_img img_left ta_c">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_9_1_tabcontent02_img01_m.png" alt="">
                                </div>
                                <div class="sub2_4_2_cont04_item_box flex_row fw sa al_fs">
                                    <div class="sub2_4_2_cont04_item sub2_4_2_cont04_item01 ta_c">
                                        <p class="sub2_4_2_cont04_item_text01 sortsmillgoudy fz_20 ls_2 lh_14">Point 01</p>
                                        <p class="sub2_4_2_cont04_item_text02 fz_16 ls_2 lh_14 normal">
                                            질의 각도를 보강하여 <br>
                                            성감 향상 효과
                                        </p>
                                    </div>
                                    <div class="sub2_4_2_cont04_item sub2_4_2_cont04_item02 ta_c">
                                        <p class="sub2_4_2_cont04_item_text01 sortsmillgoudy fz_20 ls_2 lh_14">Point 02</p>
                                        <p class="sub2_4_2_cont04_item_text02 fz_16 ls_2 lh_14 normal">
                                            질 압력 정상화로 <br>
                                            질염, 세균 감염 ↓
                                        </p>
                                    </div>
                                    <div class="sub2_4_2_cont04_item sub2_4_2_cont04_item03 ta_c">
                                        <p class="sub2_4_2_cont04_item_text01 sortsmillgoudy fz_20 ls_2 lh_14">Point 03</p>
                                        <p class="sub2_4_2_cont04_item_text02 fz_16 ls_2 lh_14 normal">
                                            질 탄력성 증가로 <br>
                                            질 방귀, 성기 이탈 예방
                                        </p>
                                    </div>
                                    <div class="sub2_4_2_cont04_item sub2_4_2_cont04_item03 ta_c">
                                        <p class="sub2_4_2_cont04_item_text01 sortsmillgoudy fz_20 ls_2 lh_14">Point 04</p>
                                        <p class="sub2_4_2_cont04_item_text02 fz_16 ls_2 lh_14 normal">
                                            성적 자존감, 만족도 <br>
                                            증가 효과
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="sub_cont_box sub2_1_4_cont_box pd_60">
                            <div class="sub2_1_4_cont3_bg">
                                <div class="sub_cont_title sub2_1_4_cont_title_center p_r ta_c pt_100">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                                    <p class="sub_cont_top_title_text01 fz_30 lh_14 ls_2 light gs_reveal" data-gs-delay="200">
                                        오라클만의 <span class="medium">여성진료 특별함</span>
                                    </p>
                                </div>
                                <div class="sub_tabcontent_container flex_row fw fd_c jc_center center">
                                    <div class="sub_cont_title sub2_8_1_cont04_title_center p_r ta_c m_20">
                                        <p class="sub_cont_title_text01 sortsmillgoudy fz_20 lh_14 ls_2 light gs_reveal" data-gs-delay="200">
                                            Oracle Point.01
                                        </p>
                                        <p class="sub_cont_title_text02 fz_32 lh_14 ls_2 light m_40 gs_reveal" data-gs-delay="400">
                                            모양과 균형까지 고려한 <br>
                                            <span class="medium">소음순 성형</span>
                                        </p>
                                    </div>
                                    <div class="sub2_9_1_cont03_box flex_row fw jc_center al_fs m_60">
                                        <div class="column_fifth">
                                            <div class="sub2_9_1_cont03_item sub2_9_1_cont03_item01 ta_c gs_reveal" data-gs-delay="200">
                                                <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_9_1_cont03_item01.png" alt="">
                                                
                                                <div class="sub2_9_1_cont03_item_text">
                                                    <p class="fz_16 ls_2 lh_16 normal">
                                                        정상 <br>
                                                        소음순
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="column_fifth">
                                            <div class="sub2_9_1_cont03_item sub2_9_1_cont03_item02 ta_c gs_reveal" data-gs-delay="400">
                                                <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_9_1_cont03_item02.png" alt="">
                                                
                                                <div class="sub2_9_1_cont03_item_text">
                                                    <p class="fz_16 ls_2 lh_16 normal">
                                                        편측 <br>
                                                        소음순비대
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="column_fifth">
                                            <div class="sub2_9_1_cont03_item sub2_9_1_cont03_item03 ta_c gs_reveal" data-gs-delay="600">
                                                <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_9_1_cont03_item03.png" alt="">
                                                
                                                <div class="sub2_9_1_cont03_item_text">
                                                    <p class="fz_16 ls_2 lh_16 normal">
                                                        양측 <br>
                                                        소음순비대
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="column_fifth">
                                            <div class="sub2_9_1_cont03_item sub2_9_1_cont03_item04 ta_c gs_reveal" data-gs-delay="800">
                                                <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_9_1_cont03_item04.png" alt="">
                                                
                                                <div class="sub2_9_1_cont03_item_text">
                                                    <p class="fz_16 ls_2 lh_16 normal">
                                                        편측 음핵 주름 & <br>
                                                        소음순 비대형
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="column_fifth">
                                            <div class="sub2_9_1_cont03_item sub2_9_1_cont03_item05 ta_c gs_reveal" data-gs-delay="1000">
                                                <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_9_1_cont03_item05.png" alt="">
                                                
                                                <div class="sub2_9_1_cont03_item_text">
                                                    <p class="fz_16 ls_2 lh_16 normal">
                                                        양측 음핵 주름 & <br>
                                                        소음순 비대형
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sub_cont_title sub2_9_1_cont03_title_center p_r ta_c">
                                        <p class="pc_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 normal gs_reveal" data-gs-delay="200">
                                            소음순은 질입구에 있어 전체적인 여성 외음부의 모양을 좌우합니다. <br>
                                            기능적으로는 질안이나 요도로 들어가는 세균을 막아주는 역할을 합니다. <br>
                                            소음순이 커서 불편하거나 나이가 들어 소음순이 처지고 검게 착색된 경우, <br>
                                            비정상적인 모양과 착색을 개선하여 여성 질환을 예방하고, 불편감을 줄입니다.
                                        </p>
                                        <p class="m_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 normal gs_reveal" data-gs-delay="200">
                                            소음순은 질입구에 있어 전체적인 여성 외음부의 모양을 좌우합니다. 
                                            기능적으로는 질안이나 요도로 들어가는 세균을 막아주는 역할을 합니다. 
                                            소음순이 커서 불편하거나 나이가 들어 소음순이 처지고 검게 착색된 경우, 
                                            비정상적인 모양과 착색을 개선하여 여성 질환을 예방하고, 불편감을 줄입니다.
                                        </p>
                                    </div>
                                </div>
                                
                                <div class="sub_tabcontent_container flex_row fw fd_c jc_center center">
                                    <div class="sub_cont_title sub2_8_1_cont04_title_center p_r ta_c m_20">
                                        <p class="sub_cont_title_text01 sortsmillgoudy fz_20 lh_14 ls_2 light gs_reveal" data-gs-delay="200">
                                            Oracle Point.02
                                        </p>
                                        <p class="sub_cont_title_text02 fz_32 lh_14 ls_2 light m_60 gs_reveal" data-gs-delay="400">
                                            <span class="medium">소음순 성형 방법</span>
                                        </p>
                                    </div>
                                    <div class="sub2_9_1_cont04_box flex_row fw jc_center al_fs gs_reveal" data-gs-delay="600">
                                        <div class="column_third_30">
                                            <div class="sub2_9_1_cont04_item sub2_9_1_cont04_item01 ta_c">
                                                <div class="sub2_9_1_cont04_item_img sub2_9_1_cont04_item_img01 border_top border_bottom border_left border_right">
                                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_9_1_cont04_item01.png" alt="">
                                                </div>
                                                <div class="flex_row jc_center center sub2_9_1_cont04_item_text sub2_9_1_cont04_item_text01 border_bottom border_right">
                                                    <p class="fz_20 ls_2 lh_16 normal">
                                                        단순 절단법
                                                    </p>
                                                </div>
                                                <div class="flex_row jc_center center sub2_9_1_cont04_item_text sub2_9_1_cont04_item_text02 border_bottom border_right">
                                                    <p class="pc_cont_480 fz_16 ls_2 lh_16 normal">
                                                        소음순의 피부 조직을 레이저 등으로 <br>
                                                        잘라낸 후 봉합하는 방법 <br>
                                                        <br>
                                                    </p>
                                                    <p class="m_cont_480 fz_16 ls_2 lh_16 normal">
                                                        소음순의 피부 조직을 레이저 등으로 
                                                        잘라낸 후 봉합하는 방법 
                                                        <br>
                                                    </p>
                                                </div>
                                                <div class="flex_row jc_center center sub2_9_1_cont04_item_text sub2_9_1_cont04_item_text03 border_bottom">
                                                    <p class="fz_16 ls_2 lh_16 bold">
                                                        
                                                    </p>
                                                </div>
                                                <div class="flex_row jc_center center sub2_9_1_cont04_item_text sub2_9_1_cont04_item_text04 border_bottom border_right">
                                                    <p class="pc_cont_480 fz_16 ls_2 lh_16 normal">
                                                        촘촘하고 정교한 봉합으로 <br>
                                                        흉터가 남지 않도록 유도 
                                                    </p>
                                                    <p class="m_cont_480 fz_16 ls_2 lh_16 normal">
                                                        촘촘하고 정교한 봉합으로 
                                                        흉터가 남지 않도록 유도 
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="column_third_30">
                                            <div class="sub2_9_1_cont04_item sub2_9_1_cont04_item02 ta_c">
                                                <div class="sub2_9_1_cont04_item_img sub2_9_1_cont04_item_img02 border_top border_bottom">
                                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_9_1_cont04_item02.png" alt="">
                                                </div>
                                                <div class="flex_row jc_center center sub2_9_1_cont04_item_text sub2_9_1_cont04_item_text01 border_bottom">
                                                    <p class="fz_20 ls_2 lh_16 normal">
                                                        쐐기형 절단법
                                                    </p>
                                                </div>
                                                <div class="flex_row jc_center center sub2_9_1_cont04_item_text sub2_9_1_cont04_item_text02 border_bottom">
                                                    <p class="pc_cont_480 fz_16 ls_2 lh_16 normal">
                                                        비정상적으로 큰 소음순의 가운데 부분을 <br>
                                                        제거 후 남은 소음순의 위아래 부분을 <br>
                                                        다시 봉합하는 방법
                                                    </p>
                                                    <p class="m_cont_480 fz_16 ls_2 lh_16 normal">
                                                        비정상적으로 큰 소음순의 가운데 부분을 
                                                        제거 후 남은 소음순의 위아래 부분을 
                                                        다시 봉합하는 방법
                                                    </p>
                                                </div>
                                                <div class="flex_row jc_center center sub2_9_1_cont04_item_text sub2_9_1_cont04_item_text03 border_bottom">
                                                    <p class="sortsmillgoudy fz_16 ls_2 lh_16 bold">
                                                        Oracle Point
                                                    </p>
                                                </div>
                                                <div class="flex_row jc_center center sub2_9_1_cont04_item_text sub2_9_1_cont04_item_text04 border_bottom">
                                                    <p class="pc_cont_480 fz_16 ls_2 lh_16 normal">
                                                        감각 손실 및 색상과 <br>
                                                        모양 차이를 최소화
                                                    </p>
                                                    <p class="m_cont_480 fz_16 ls_2 lh_16 normal">
                                                        감각 손실 및 색상과 
                                                        모양 차이를 최소화
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="column_third_30">
                                            <div class="sub2_9_1_cont04_item sub2_9_1_cont04_item03 border_left_none ta_c">
                                                <div class="sub2_9_1_cont04_item_img sub2_9_1_cont04_item_img03 border_top border_bottom border_left border_right">
                                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_9_1_cont04_item03.png" alt="">
                                                </div>
                                                <div class="flex_row jc_center center sub2_9_1_cont04_item_text sub2_9_1_cont04_item_text01 border_bottom border_left">
                                                    <p class="fz_20 ls_2 lh_16 normal">
                                                        피부 박리법
                                                    </p>
                                                </div>
                                                <div class="flex_row jc_center center sub2_9_1_cont04_item_text sub2_9_1_cont04_item_text02 border_bottom border_left">
                                                    <p class="pc_cont_480 fz_16 ls_2 lh_16 normal">
                                                        소음순의 가운데 피부 조직을 레이저 <br>
                                                        등으로 제거 후 다시 붙여주는 방법 <br>
                                                        <br>
                                                    </p>
                                                    <p class="m_cont_480 fz_16 ls_2 lh_16 normal">
                                                        소음순의 가운데 피부 조직을 레이저 
                                                        등으로 제거 후 다시 붙여주는 방법 
                                                        <br>
                                                    </p>
                                                </div>
                                                <div class="flex_row jc_center center sub2_9_1_cont04_item_text sub2_9_1_cont04_item_text03 border_bottom">
                                                    <p class="fz_16 ls_2 lh_16 bold">
                                                        
                                                    </p>
                                                </div>
                                                <div class="flex_row jc_center center sub2_9_1_cont04_item_text sub2_9_1_cont04_item_text04 border_bottom border_left">
                                                    <p class="pc_cont_480 fz_16 ls_2 lh_16 normal">
                                                        소음순 중심을 보존하면서도 통증과 <br>
                                                        조직 손상 최소화, 빠른 회복 유도
                                                    </p>
                                                    <p class="m_cont_480 fz_16 ls_2 lh_16 normal">
                                                        소음순 중심을 보존하면서도 통증과 
                                                        조직 손상 최소화, 빠른 회복 유도
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="sub_tabcontent_container flex_row fw sa center">
                                    <div class="sub_cont_title sub2_9_1_cont05_title_left title_left">
                                        <p class="sub_cont_title_text01 sortsmillgoudy fz_20 lh_14 ls_2 light gs_reveal" data-gs-delay="200">
                                            Oracle Point.03
                                        </p>
                                        <p class="sub_cont_title_text02 fz_32 lh_14 ls_2 light m_40 gs_reveal" data-gs-delay="400">
                                            덮여 있던 성감을 회복하는 <br>
                                            <span class="medium">음핵성형</span>
                                        </p>
                                        <p class="pc_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 normal gs_reveal" data-gs-delay="800">
                                            여성은 음핵 자극을 통해 오르가즘을 느끼게 됩니다. 음핵의 노출 <br>
                                            정도나 음핵을 덮고 있는 피부에 따라 성감에 큰 차이가 있습니다. <br>
                                            음핵이 노출되지 못해 성감을 느끼기 어려운 경우에는 음핵 성형을 <br>
                                            통해 성감을 향상시키고, 음핵과 표피 사이의 위생을 효율적으로 <br>
                                            관리할 수 있습니다.
                                        </p>
                                        <p class="m_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 normal gs_reveal" data-gs-delay="800">
                                            여성은 음핵 자극을 통해 오르가즘을 느끼게 됩니다. 음핵의 노출 
                                            정도나 음핵을 덮고 있는 피부에 따라 성감에 큰 차이가 있습니다. <br>
                                            음핵이 노출되지 못해 성감을 느끼기 어려운 경우에는 음핵 성형을 
                                            통해 성감을 향상시키고, 음핵과 표피 사이의 위생을 효율적으로 
                                            관리할 수 있습니다.
                                        </p>
                                    </div>
                                    <div class="sub_cont_doct_img sub2_9_1_cont02_doct_img sub2_9_1_cont_doct_img sub2_9_1_tabcontent05_img img_right p_r ta_c">
                                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_9_1_cont05_img01.png" alt="">
                                    </div>
                                    <div class="sub2_4_2_cont04_item_box flex_row fw sa al_fs">
                                        <div class="sub2_4_2_cont04_item sub2_4_2_cont04_item01 ta_c">
                                            <p class="sub2_4_2_cont04_item_text01 sortsmillgoudy fz_20 ls_2 lh_14">Point 01</p>
                                            <p class="sub2_4_2_cont04_item_text02 fz_16 ls_2 lh_14 normal">
                                                최신 레이저를 이용한 <br>
                                                최소절개/최소출혈 수술
                                            </p>
                                        </div>
                                        <div class="sub2_4_2_cont04_item sub2_4_2_cont04_item02 ta_c">
                                            <p class="sub2_4_2_cont04_item_text01 sortsmillgoudy fz_20 ls_2 lh_14">Point 02</p>
                                            <p class="sub2_4_2_cont04_item_text02 fz_16 ls_2 lh_14 normal">
                                                음핵 모양에 맞춘 <br>
                                                1:1 맞춤형 수술
                                            </p>
                                        </div>
                                        <div class="sub2_4_2_cont04_item sub2_4_2_cont04_item03 ta_c">
                                            <p class="sub2_4_2_cont04_item_text01 sortsmillgoudy fz_20 ls_2 lh_14">Point 03</p>
                                            <p class="sub2_4_2_cont04_item_text02 fz_16 ls_2 lh_14 normal">
                                                흉터를 최소화 하는 <br>
                                                세밀한 봉합
                                            </p>
                                        </div>
                                        <div class="sub2_4_2_cont04_item sub2_4_2_cont04_item03 ta_c">
                                            <p class="sub2_4_2_cont04_item_text01 sortsmillgoudy fz_20 ls_2 lh_14">Point 04</p>
                                            <p class="sub2_4_2_cont04_item_text02 fz_16 ls_2 lh_14 normal">
                                                수술 후 회복을 위한 <br>
                                                집중 사후 관리
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="sub_cont_box sub2_7_1_cont_box sub2_9_1_cont06_wrap">
                            <div class="sub2_7_1_cont3_bg">
                                <div class="sub_tabcontent_container flex_row fw sa center">
                                    <div class="sub_cont_doct_img sub2_5_1_tabcontent01_img img_left ta_c">
                                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_9_1_tabcontent06_img01.png" alt="">
                                    </div>
                                    <div class="sub_cont_title sub2_5_1_cont_title_right title_right">
                                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                                        <p class="sub_cont_title_text02 fz_32 lh_14 ls_2 light m_40 gs_reveal" data-gs-delay="200">
                                            수술 없이 간편하게 되찾는 볼륨, <br>
                                            <span class="medium">질 필러</span>
                                        </p>
                                        <p class="pc_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light gs_reveal" data-gs-delay="400">
                                            질필러는 절개 없이 질에 콜라겐을 주사하여 엠보싱을 형성하고, 신생혈관의 <br>
                                            재생을 돕는 시술로, 질의 축소 효과를 주어 만족감 증가를 기대할 수 있습니다. <br>
                                            골반 저근 및 질 근육 기능을 회복시켜 요실금 증상 개선에도 도움을 줍니다. <br>
                                            인천 오라클의 질 필러는 마찰에 강하고 생착률이 높아 질 축소 효과를 <br>
                                            오래 유지할 수 있습니다.
                                        </p>
                                        <p class="m_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light gs_reveal" data-gs-delay="400">
                                            질필러는 절개 없이 질에 콜라겐을 주사하여 엠보싱을 형성하고, 신생혈관의 
                                            재생을 돕는 시술로, 질의 축소 효과를 주어 만족감 증가를 기대할 수 있습니다. <br>
                                            골반 저근 및 질 근육 기능을 회복시켜 요실금 증상 개선에도 도움을 줍니다. <br>
                                            인천 오라클의 질 필러는 마찰에 강하고 생착률이 높아 질 축소 효과를 
                                            오래 유지할 수 있습니다.
                                        </p>
                                    </div>
                                </div>
                                
                                <div class="sub_tabcontent_container flex_row fw jc_center al_fs">
                                    <div class="sub_cont_title sub2_1_4_cont_title_center ta_c">
                                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                                        <p class="sub_cont_title_text02 fz_30 lh_14 ls_2 light m_60 gs_reveal" data-gs-delay="200">
                                            <span class="medium">질 필러 시술 방법</span>
                                        </p>
                                    </div>
                                    <div class="sub2_1_1_premium_box flex_row fw jc_center al_fs">
                                        <div class="column_third_30">
                                            <div class="sub2_1_1_premium_item sub2_1_1_premium_item01 ta_c gs_reveal" data-gs-delay="200">
                                                <p class="fz_18 ls_2 lh_14 medium m_20">
                                                    STEP 01.
                                                </p>
                                                <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_9_1_cont07_item01.png" alt="">
                                                <p class="fz_16 ls_2 lh_14 normal">
                                                    늘어진 질 내벽
                                                </p>
                                            </div>
                                        </div>
                                        <div class="column_third_30">
                                            <div class="sub2_1_1_premium_item sub2_1_1_premium_item02 ta_c gs_reveal" data-gs-delay="400">
                                                <p class="fz_18 ls_2 lh_14 medium m_20">
                                                    STEP 02.
                                                </p>
                                                <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_9_1_cont07_item02.png" alt="">
                                                <p class="fz_16 ls_2 lh_14 normal">
                                                    질 내벽에 필러 주입
                                                </p>
                                            </div>
                                        </div>
                                        <div class="column_third_30">
                                            <div class="sub2_1_1_premium_item sub2_1_1_premium_item03 ta_c gs_reveal" data-gs-delay="600">
                                                <p class="fz_18 ls_2 lh_14 medium m_20">
                                                    STEP 03.
                                                </p>
                                                <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_9_1_cont07_item03.png" alt="">
                                                <p class="fz_16 ls_2 lh_14 normal">
                                                    콜라겐 형성으로 <br>
                                                    질 축소 효과
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="sub_tabcontent_container flex_row fw sa center">
                                    <div class="sub_cont_title sub2_9_1_cont05_title sub2_9_1_cont05_title_left title_left">
                                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                                        <p class="sub_cont_title_text02 fz_32 lh_14 ls_2 light m_40 gs_reveal" data-gs-delay="200">
                                            질건강을 위한 복합 <br>
                                            질 관리 프로그램, <span class="medium">소노케어</span>
                                        </p>
                                        <p class="pc_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 normal gs_reveal" data-gs-delay="400">
                                            현존하는 초음파 장비 중 가장 높은 주파수(10MHz)의 나노 초음파를 <br>
                                            표피부터 진피층까지 전달합니다. 멀티 웨이브 기술을 이용한 질관리 <br>
                                            시술법으로, 콜라겐 재생 및 혈액순환 개선, 리프팅 및 미백 효과를 <br>
                                            보실 수 있습니다.
                                        </p>
                                        <p class="m_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 normal gs_reveal" data-gs-delay="400">
                                            현존하는 초음파 장비 중 가장 높은 주파수(10MHz)의 나노 초음파를 
                                            표피부터 진피층까지 전달합니다. 멀티 웨이브 기술을 이용한 질관리 
                                            시술법으로, 콜라겐 재생 및 혈액순환 개선, 리프팅 및 미백 효과를 
                                            보실 수 있습니다.
                                        </p>
                                    </div>
                                    <div class="sub_cont_doct_img sub2_9_1_cont_doct_img2 sub2_9_1_tabcontent05_img img_right p_r ta_c">
                                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_9_1_cont08_img01.png" alt="">
                                    </div>
                                    <div class="sub2_4_2_cont04_item_box flex_row fw sa al_fs">
                                        <div class="sub2_4_2_cont04_item sub2_4_2_cont04_item01 ta_c">
                                            <p class="sub2_4_2_cont04_item_text01 sortsmillgoudy fz_20 ls_2 lh_14">Point 01</p>
                                            <p class="sub2_4_2_cont04_item_text02 fz_16 ls_2 lh_14 normal">
                                                질 타이트닝 효과 <br>
                                                <br>
                                            </p>
                                        </div>
                                        <div class="sub2_4_2_cont04_item sub2_4_2_cont04_item02 ta_c">
                                            <p class="sub2_4_2_cont04_item_text01 sortsmillgoudy fz_20 ls_2 lh_14">Point 02</p>
                                            <p class="sub2_4_2_cont04_item_text02 fz_16 ls_2 lh_14 normal">
                                                요실금 개선 <br>
                                                <br>
                                            </p>
                                        </div>
                                        <div class="sub2_4_2_cont04_item sub2_4_2_cont04_item03 ta_c">
                                            <p class="sub2_4_2_cont04_item_text01 sortsmillgoudy fz_20 ls_2 lh_14">Point 03</p>
                                            <p class="sub2_4_2_cont04_item_text02 fz_16 ls_2 lh_14 normal">
                                                질 건조증 & 질염 개선 <br>
                                                <br>
                                            </p>
                                        </div>
                                        <div class="sub2_4_2_cont04_item sub2_4_2_cont04_item03 ta_c">
                                            <p class="sub2_4_2_cont04_item_text01 sortsmillgoudy fz_20 ls_2 lh_14">Point 04</p>
                                            <p class="sub2_4_2_cont04_item_text02 fz_16 ls_2 lh_14 normal">
                                                외음부 탄력 증가로 <br>
                                                성감 향상 효과
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!--
                        <div class="sub_cont_box sub2_2_1_cont04_box p_r bg_fa pd_60 pt_120">
                            <div class="container-1300 sub2_2_1_cont05_container">
                                <div class="sub_click_btn open m_20" id="sub_click_btn1">
                                    <p class="sub_cont_title_text01 sortsmillgoudy fz_20 lh_16 ls_2 light">
                                        Woman Care Program
                                    </p>
                                    <p class="sub_cont_title_text02 fz_32 lh_16 ls_2 light">
                                        여성 성형 <span class="medium">후 주의사항</span>
                                    </p>
                                </div>
                                <div class="sub2_2_1_cont05_text sub2_9_1_cont_text open li_5 sub_click_box" id="sub_click_box1">
                                    <ul class="sub2_2_1_cont05_item_ul fz_17 normal ta_l">
                                        <li>
                                            <p>시술 시에 약간의 출혈 또는 성교 시 일시적으로 약간의 통증이 있을 수 있습니다.</p>
                                        </li>
                                        <li>
                                            <p>시술 후에는 염증 예방을 위해 며칠 항생제를 복용해 주세요.</p>
                                        </li>
                                        <li>
                                            <p>수술 부위의 소독이나 좌욕은 하지 않으셔도 됩니다.</p>
                                        </li>
                                        <li>
                                            <p>수술 후 2~3주가 지나면서 질 속의 꿰멘 실이 녹으면서 냉이 늘어날 수 있습니다.</p>
                                        </li>
                                        <li>
                                            <p>장기간 붓기, 통증이 계속될 경우 반드시 내원해 주세요.</p>
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
                                        <span class="fz_30 ls_2 lh_14 normal">여성진료</span>
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
                        <div class="sub_cont_box sub_cont_box2 bg_fa pd_120">
                            <div class="sub_tabcontent_container flex_row fw sa center">
                                <div class="sub_cont_title sub2_5_1_cont_title_left title_left">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                                    <p class="sub_cont_title_text01 fz_32 lh_14 ls_2 light m_30">
                                        여성질환으로부터의 체계적인 예방, <br>
                                        <span class="medium">부인과 프로그램</span>
                                    </p>
                                    <p class="pc_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 light">
                                        증상과 나이에 맞춘 개인 특화 검진 프로그램과 <br>
                                        체계적인 예방 프로그램을 통해 여성 질환을 <br>
                                        조기에 발견하고, 건강한 삶을 설계합니다.
                                    </p>
                                    <p class="m_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 light">
                                        증상과 나이에 맞춘 개인 특화 검진 프로그램과 
                                        체계적인 예방 프로그램을 통해 여성 질환을 
                                        조기에 발견하고, 건강한 삶을 설계합니다.
                                    </p>
                                </div>
                                <div class="sub_cont_doct_img sub2_9_2_cont_doct_img sub2_5_1_tabcontent01_img img_right ta_r">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_9_2_tabcontent01_img01.png" alt="">
                                </div>
                            </div>
                        </div>
                        
                        <div class="sub_cont_box bg_fa pd_120">
                            <div class="sub_tabcontent_container flex_row fw sa center">
                                <div class="pc_cont_480 sub_cont_doct_img sub2_9_2_cont_doct_img2 sub2_5_1_tabcontent01_img img_left ta_r">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_9_2_cont02_img01.png" alt="">
                                </div>
                                <div class="m_cont_480 sub_cont_doct_img sub2_9_2_cont_doct_img2 sub2_5_1_tabcontent01_img img_left ta_r">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_9_2_cont02_img01_m.png" alt="">
                                </div>
                                <div class="sub_cont_title sub2_5_1_cont_title_right title_right">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                                    <p class="sub_cont_title_text01 fz_32 lh_14 ls_2 light m_30 gs_reveal" data-gs-delay="200">
                                        여성 건강과 행복을 위한 <br>
                                        <span class="medium">부인과 검사</span>
                                    </p>
                                    <p class="pc_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 light m_30 gs_reveal" data-gs-delay="400">
                                        내진만으로는 확인하기 어려운 질 내부와 자궁 경부, 자궁, 난소까지 초음파를 <br>
                                        통해 정밀하게 검사합니다. 상태와 위치는 물론 자궁 내막과 난소의 기능까지 <br>
                                        확인하여 자궁근종, 난소암, 용종 등과 같은 부인과 질환을 조기에 발견합니다.
                                    </p>
                                    <p class="m_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 light m_30 gs_reveal" data-gs-delay="400">
                                        내진만으로는 확인하기 어려운 질 내부와 자궁 경부, 자궁, 난소까지 초음파를 
                                        통해 정밀하게 검사합니다. 상태와 위치는 물론 자궁 내막과 난소의 기능까지 
                                        확인하여 자궁근종, 난소암, 용종 등과 같은 부인과 질환을 조기에 발견합니다.
                                    </p>
                                    <p class="pc_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light gs_reveal" data-gs-delay="600">
                                        인천 오라클의 부인과 초음파 검사는 생애 주기별 검진 프로그램으로 여성 <br>
                                        건강과 행복을 지켜드립니다.
                                    </p>
                                    <p class="m_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light gs_reveal" data-gs-delay="600">
                                        인천 오라클의 부인과 초음파 검사는 생애 주기별 검진 프로그램으로 여성 
                                        건강과 행복을 지켜드립니다.
                                    </p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="sub_cont_box sub2_1_4_cont_box pd_60">
                            <div class="sub2_1_4_cont3_bg">
                                <div class="sub_cont_title sub2_1_4_cont_title_center p_r ta_c pt_100">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                                    <p class="sub_cont_top_title_text01 fz_30 lh_14 ls_2 light gs_reveal" data-gs-delay="200">
                                        오라클만의 <span class="medium">여성진료 특별함</span>
                                    </p>
                                </div>
                                <div class="sub_tabcontent_container sub2_1_cont03_container flex_row fw sa center">
                                    <div class="sub_cont_title sub2_9_2_cont_title sub2_5_1_cont_title_left title_left">
                                        <p class="sub_cont_title_text01 sortsmillgoudy fz_20 lh_14 ls_2 light gs_reveal" data-gs-delay="200">
                                            Oracle Point.01
                                        </p>
                                        <p class="sub_cont_title_text02 fz_32 lh_14 ls_2 light m_30 gs_reveal" data-gs-delay="400">
                                            <span class="medium">자궁 및 난소 초음파 검사</span>
                                        </p>
                                        <ul class="sub2_8_6_cont03_item_ul fz_17 normal ta_l m_10 gs_reveal" data-gs-delay="600">
                                            <li>
                                                <p>경복부 초음파검사</p>
                                            </li>
                                        </ul>
                                        <p class="sub_cont_title_text04 fz_16 lh_16 ls_2 light m_30 gs_reveal" data-gs-delay="600">
                                            일반적인 탐촉자를 복벽에 문질러 검사 <br>
                                            경질 초음파검사에 비해 더 넓은 부위를 동시에 관찰 가능 <br>
                                            방광 내 소변이 차 있는 상태에서 검사 시행
                                        </p>
                                        <ul class="sub2_8_6_cont03_item_ul fz_17 normal ta_l m_10 gs_reveal" data-gs-delay="800">
                                            <li>
                                                <p>경질 초음파검사</p>
                                            </li>
                                        </ul>
                                        <p class="sub_cont_title_text03 fz_16 lh_16 ls_2 light gs_reveal" data-gs-delay="800">
                                            긴 막대기 모양으로 생긴 탐촉자를 질 내로 삽입하여 <br>
                                            검사 경복부 초음파검사에 비해 더 자세한 검사 가능 <br>
                                            성경험 없는 여성에서는 시행 불가
                                        </p>
                                    </div>
                                    <div class="sub_cont_doct_img sub2_5_1_tabcontent01_img img_right ta_r">
                                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_9_2_cont03_img01.png" alt="">
                                    </div>
                                </div>
                                
                                <div class="sub_tabcontent_container flex_row fw sa center">
                                    <div class="sub_cont_doct_img sub2_5_1_tabcontent01_img img_left ta_r">
                                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_9_2_cont04_img01.png" alt="">
                                    </div>
                                    <div class="sub_cont_title sub2_9_2_cont_title sub2_5_1_cont_title_right title_right">
                                        <p class="sub_cont_title_text01 sortsmillgoudy fz_20 lh_14 ls_2 light gs_reveal" data-gs-delay="200">
                                            Oracle Point.02
                                        </p>
                                        <p class="sub_cont_title_text02 fz_32 lh_14 ls_2 light m_30 gs_reveal" data-gs-delay="400">
                                            <span class="medium">유방 초음파검사</span>
                                        </p>
                                        <ul class="sub2_8_6_cont03_item_ul fz_17 normal ta_l gs_reveal" data-gs-delay="600">
                                            <li>
                                                <p>물혹, 염증, 양성 고형 종양, 악성 종양 등을 진단</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="sub2_4_2_cont03_item_box flex_row fw sa al_fs">
                                        <div class="sub2_4_2_cont03_item sub2_4_2_cont03_item01 ta_c">
                                            <p class="sub2_4_2_cont03_item_text01 sortsmillgoudy fz_20 ls_2 lh_14">Point 01</p>
                                            <p class="sub2_4_2_cont03_item_text02 fz_16 ls_2 lh_14 normal">
                                                고해상도 초음파 <br>
                                                장비로 정확한 진단
                                            </p>
                                        </div>
                                        <div class="sub2_4_2_cont03_item sub2_4_2_cont03_item02 ta_c">
                                            <p class="sub2_4_2_cont03_item_text01 sortsmillgoudy fz_20 ls_2 lh_14">Point 02</p>
                                            <p class="sub2_4_2_cont03_item_text02 fz_16 ls_2 lh_14 normal">
                                                환자의 상태에 따라 <br>
                                                맞춤 검사 시행
                                            </p>
                                        </div>
                                        <div class="sub2_4_2_cont03_item sub2_4_2_cont03_item03 ta_c">
                                            <p class="sub2_4_2_cont03_item_text01 sortsmillgoudy fz_20 ls_2 lh_14">Point 03</p>
                                            <p class="sub2_4_2_cont03_item_text02 fz_16 ls_2 lh_14 normal">
                                                가슴 보형물이 있어도 <br>
                                                손상 없이 검사 가능
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="sub_tabcontent_container sub2_1_cont03_container flex_row fw sa center">
                                    <div class="sub_cont_title sub2_9_2_cont_title sub2_5_1_cont_title_left title_left">
                                        <p class="sub_cont_title_text01 sortsmillgoudy fz_20 lh_14 ls_2 light gs_reveal" data-gs-delay="200">
                                            Oracle Point.03
                                        </p>
                                        <p class="sub_cont_title_text02 fz_32 lh_14 ls_2 light m_30 gs_reveal" data-gs-delay="400">
                                            <span class="medium">자궁경부암검사</span>
                                        </p>
                                        <ul class="sub2_8_6_cont03_item_ul fz_17 normal ta_l m_30 gs_reveal" data-gs-delay="600">
                                            <li>
                                                <p>자궁경부 세포도말검사</p>
                                            </li>
                                            <li>
                                                <p>인유두종바이러스(HPV) 검사</p>
                                            </li>
                                        </ul>
                                        <p class="pc_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light gs_reveal" data-gs-delay="800">
                                            해당 검사는 자궁경부암을 진단하는 가장 기본적인 검사로서, <br>
                                            성생활을 하는 모든 여성이 정기적으로 받아야 하는 검사입니다. <br>
                                            검사 시 통증이 없으며, 검사 시간이 짧아 부담이 적고, <br>
                                            부인과 질환 및 암을 조기에 발견하는데 도움이 됩니다.
                                        </p>
                                        <p class="m_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light gs_reveal" data-gs-delay="800">
                                            해당 검사는 자궁경부암을 진단하는 가장 기본적인 검사로서, 
                                            성생활을 하는 모든 여성이 정기적으로 받아야 하는 검사입니다. <br>
                                            검사 시 통증이 없으며, 검사 시간이 짧아 부담이 적고, 
                                            부인과 질환 및 암을 조기에 발견하는데 도움이 됩니다.
                                        </p>
                                    </div>
                                    <div class="sub_cont_doct_img sub2_9_2_cont_doct_img3 sub2_5_1_tabcontent01_img img_right ta_r">
                                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_9_2_cont05_img01.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="sub_cont_box sub2_7_1_cont_box">
                            <div class="sub2_7_1_cont3_bg">
                                <div class="sub_tabcontent_container flex_row fw sa center">
                                    <div class="sub_cont_doct_img sub2_5_1_tabcontent01_img img_left ta_c">
                                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_9_2_cont06_img01.png" alt="">
                                    </div>
                                    <div class="sub_cont_title sub2_5_1_cont_title_right title_right">
                                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                                        <p class="sub_cont_title_text02 fz_32 lh_14 ls_2 light m_40 gs_reveal" data-gs-delay="200">
                                            예방이 가능한 암, <br>
                                            <span class="medium">자궁경부암 예방 접종 클리닉</span>
                                        </p>
                                        <p class="pc_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light gs_reveal" data-gs-delay="400">
                                            자궁경부암은 질과 연결된 자궁의 입구인 '경부'에 발생하는 악성 종양으로, <br>
                                            인유두종 바이러스(HPV)에 의해 발생합니다. <br>
                                            HPV 예방 백신은 98% 이상의 예방률을 가진 백신으로, HPV바이러스에 <br>
                                            대한 항체를 생성해 이로 인한 암 발생을 방지합니다.
                                        </p>
                                        <p class="m_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light gs_reveal" data-gs-delay="400">
                                            자궁경부암은 질과 연결된 자궁의 입구인 '경부'에 발생하는 악성 종양으로, 
                                            인유두종 바이러스(HPV)에 의해 발생합니다. <br>
                                            HPV 예방 백신은 98% 이상의 예방률을 가진 백신으로, HPV바이러스에 
                                            대한 항체를 생성해 이로 인한 암 발생을 방지합니다.
                                        </p>
                                    </div>
                                </div>
                                
                                <div class="sub_tabcontent_container flex_row fw jc_center al_fs">
                                    <div class="sub_cont_title sub2_1_4_cont_title_center ta_c">
                                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                                        <p class="sub_cont_title_text02 fz_30 lh_14 ls_2 light m_40 gs_reveal" data-gs-delay="200">
                                            <span class="medium">HPV 예방 접종</span>으로 인한 <br>
                                            <span class="medium">암 예방률</span>
                                        </p>
                                    </div>
                                    <div class="sub2_9_2_cont07_mid_text ta_r m_40">
                                        <p class="fz_14 ls_2 lh_14 normal">* 자료 : 대한부인종양학회</p>
                                    </div>
                                    <div class="sub2_9_2_cont07_box flex_row fw jc_center al_fs m_60">
                                        <div class="column_quarter">
                                            <div class="sub2_4_3_cont03_item sub2_4_3_cont03_item01 ta_c gs_reveal" data-gs-delay="200">
                                                <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_9_2_cont07_img01.png" alt="">
                                                <p class="fz_18 ls_2 lh_14 medium m_20">
                                                    자궁경부암
                                                </p>
                                            </div>
                                        </div>
                                        <div class="column_quarter">
                                            <div class="sub2_4_3_cont03_item sub2_4_3_cont03_item02 ta_c gs_reveal" data-gs-delay="400">
                                                <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_9_2_cont07_img02.png" alt="">
                                                <p class="fz_18 ls_2 lh_14 medium">
                                                    질암
                                                </p>
                                            </div>
                                        </div>
                                        <div class="column_quarter">
                                            <div class="sub2_4_3_cont03_item sub2_4_3_cont03_item03 ta_c gs_reveal" data-gs-delay="600">
                                                <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_9_2_cont07_img03.png" alt="">
                                                <p class="fz_18 ls_2 lh_14 medium">
                                                    외음부암
                                                </p>
                                            </div>
                                        </div>
                                        <div class="column_quarter">
                                            <div class="sub2_4_3_cont03_item sub2_4_3_cont03_item04 ta_c gs_reveal" data-gs-delay="800">
                                                <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_9_2_cont07_img04.png" alt="">
                                                <p class="fz_18 ls_2 lh_14 medium">
                                                    항문암
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sub_cont_title sub2_1_4_cont_title_center ta_c">
                                        <p class="pc_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 normal gs_reveal" data-gs-delay="200">
                                            자궁경부암은 백신 접종으로 예방할 수 있는 유일한 암입니다. <br>
                                            전암 단계와 암 발생을 상당 부분 막을 수 있으며, 만 9세~45세까지 <br>
                                            남성과 여성 모두 접종이 가능합니다. 성 경험이나 임신 여부와 <br>
                                            관련 없이 자궁경부암 예방 접종 효과를 볼 수 있습니다.
                                        </p>
                                        <p class="m_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 normal gs_reveal" data-gs-delay="200">
                                            자궁경부암은 백신 접종으로 예방할 수 있는 유일한 암입니다. <br>
                                            전암 단계와 암 발생을 상당 부분 막을 수 있으며, 만 9세~45세까지 
                                            남성과 여성 모두 접종이 가능합니다. 성 경험이나 임신 여부와 
                                            관련 없이 자궁경부암 예방 접종 효과를 볼 수 있습니다.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!--
                        <div class="sub_cont_box sub2_2_1_cont04_box p_r bg_fa pd_60 pt_120">
                            <div class="container-1300 sub2_2_1_cont05_container">
                                <div class="sub_click_btn open m_20" id="sub_click_btn2">
                                    <p class="sub_cont_title_text01 sortsmillgoudy fz_20 lh_16 ls_2 light">
                                        Woman Care Program
                                    </p>
                                    <p class="sub_cont_title_text02 fz_32 lh_16 ls_2 light">
                                        부인과 검진 <vspan class="medium">후 주의사항</span>
                                    </p>
                                </div>
                                <div class="sub2_2_1_cont05_text sub2_9_1_cont_text open li_5 sub_click_box" id="sub_click_box2">
                                    <ul class="sub2_2_1_cont05_item_ul fz_17 normal ta_l">
                                        <li>
                                            <p>부인과 검사는 생리가 끝나고 7일이후에 검사를 받으시는 것이 가장 정확합니다.</p>
                                        </li>
                                        <li>
                                            <p>생리 중일 경우 검사가 불가능한 것은 아니나 결과가 부정확 할 수 있습니다.</p>
                                        </li>
                                        <li>
                                            <p>부인과 진찰을 받으실 여성분은 검사당일 샤워나 목욕은 삼가 주세요.</p>
                                        </li>
                                        <li>
                                            <p>가능한 심신이 안정된 상태를 유지해 주세요.</p>
                                        </li>
                                        <li>
                                            <p>수유 중에는 유방검사 결과가 부정확할 수 있습니다.</p>
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
                                        <span class="fz_30 ls_2 lh_14 normal">여성진료</span>
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
                                        조기 발견이 최고 치료인 유방암, <br>
                                        <span class="medium">유방 진료 프로그램</span>
                                    </p>
                                    <p class="pc_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 light m_30">
                                        한국 여성 암 중 1위를 차지하는 유방암은 초기 발견 시 95% 이상의 <br>
                                        높은 완치율을 가지고 있기 때문에 정기 검진을 통해 미리 예방하는 <br>
                                        것이 최고의 치료입니다.
                                    </p>
                                    <p class="m_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 light m_30">
                                        한국 여성 암 중 1위를 차지하는 유방암은 초기 발견 시 95% 이상의 
                                        높은 완치율을 가지고 있기 때문에 정기 검진을 통해 미리 예방하는 
                                        것이 최고의 치료입니다.
                                    </p>
                                    <p class="pc_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light">
                                        인천 오라클의 유방 진료 프로그램은 유방에 대한 이해도가 깊은 <br>
                                        전문의가 고해상도 초음파 장비를 바탕으로 정확한 진단을 진행합니다.
                                    </p>
                                    <p class="m_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light">
                                        인천 오라클의 유방 진료 프로그램은 유방에 대한 이해도가 깊은 
                                        전문의가 고해상도 초음파 장비를 바탕으로 정확한 진단을 진행합니다.
                                    </p>
                                </div>
                                <div class="sub_cont_doct_img sub2_5_1_tabcontent01_img img_right ta_r">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_9_3_tabcontent01_img01.png" alt="">
                                </div>
                            </div>
                        </div>
                        
                        <div class="sub_cont_box sub2_9_3_cont02_box bg_fa pd_120">
                            <div class="sub_tabcontent_container flex_row fw sa center">
                                <div class="sub_cont_doct_img sub2_9_3_cont_doct_img sub2_5_1_tabcontent01_img img_left ta_r">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub2_9_3_tabcontent02_img01.png" alt="">
                                </div>
                                <div class="sub_cont_title sub2_9_3_cont_title sub2_5_1_cont_title_right title_right">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                                    <p class="sub_cont_title_text01 fz_32 lh_14 ls_2 light m_40 gs_reveal" data-gs-delay="200">
                                        <span class="medium">유방 초음파검사</span>
                                    </p>
                                    <ul class="sub2_8_6_cont03_item_ul fz_17 normal ta_l gs_reveal" data-gs-delay="400">
                                        <li>
                                            <p>자가 진단만으로는 찾기 어려운 초기 증상 진단</p>
                                        </li>
                                        <li>
                                            <p>유방암 조기 발견에 도움</p>
                                        </li>
                                        <li>
                                            <p>물혹, 염증, 양성 고형 종양, 악성 종양 등을 진단</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="sub2_4_2_cont03_item_box flex_row fw sa al_fs">
                                    <div class="sub2_4_2_cont03_item sub2_4_2_cont03_item01 ta_c">
                                        <p class="sub2_4_2_cont03_item_text01 sortsmillgoudy fz_20 ls_2 lh_14">Point 01</p>
                                        <p class="sub2_4_2_cont03_item_text02 fz_16 ls_2 lh_14 normal">
                                            고해상도 초음파 <br>
                                            장비로 정확한 진단
                                        </p>
                                    </div>
                                    <div class="sub2_4_2_cont03_item sub2_4_2_cont03_item02 ta_c">
                                        <p class="sub2_4_2_cont03_item_text01 sortsmillgoudy fz_20 ls_2 lh_14">Point 02</p>
                                        <p class="sub2_4_2_cont03_item_text02 fz_16 ls_2 lh_14 normal">
                                            환자의 상태에 따라 <br>
                                            맞춤 검사 시행
                                        </p>
                                    </div>
                                    <div class="sub2_4_2_cont03_item sub2_4_2_cont03_item03 ta_c">
                                        <p class="sub2_4_2_cont03_item_text01 sortsmillgoudy fz_20 ls_2 lh_14">Point 03</p>
                                        <p class="sub2_4_2_cont03_item_text02 fz_16 ls_2 lh_14 normal">
                                            가슴 보형물이 있어도 <br>
                                            손상 없이 검사 가능
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="sub_cont_box sub2_9_2_cont06_wrap bg_fa pd_120">
                            <div class="sub_tabcontent_container flex_row fw jc_center al_fs">
                                <div class="sub_cont_title sub2_1_4_cont_title_center ta_c">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                                    <p class="sub_cont_title_text02 fz_30 lh_14 ls_2 light m_60 gs_reveal" data-gs-delay="200">
                                        <span class="medium">유방 초음파검사 시술 대상</span>
                                    </p>
                                </div>
                                <div class="sub2_9_3_cont03_box sub2_9_3_cont03_box01 flex_row fw jc_center center">
                                    <div class="sub2_9_3_cont03_item sub2_9_3_cont03_item01">
                                        <div class="sub_cont_title sub2_9_3_cont03_item_text ta_c gs_reveal" data-gs-delay="200">
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                                            <p class="pc_cont_434 sub_cont_title_text02 fz_16 lh_14 ls_2 normal">
                                                유방촬영술에서 종괴성 병변이 <br>
                                                의심되어 종괴의 유무 확인이 <br>
                                                필요한 경우
                                            </p>
                                            <p class="m_cont_434 sub_cont_title_text02 fz_16 lh_14 ls_2 normal">
                                                유방촬영술에서 종괴성 병변이 
                                                의심되어 종괴의 유무 확인이 
                                                필요한 경우
                                            </p>
                                        </div>
                                    </div>
                                    <div class="sub2_9_3_cont03_item sub2_9_3_cont03_item02">
                                        <div class="sub_cont_title sub2_9_3_cont03_item_text ta_c gs_reveal" data-gs-delay="400">
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                                            <p class="pc_cont_434 sub_cont_title_text02 fz_16 lh_14 ls_2 normal">
                                                유방에서 멍울이 만져지지만 <br>
                                                유방촬영술에서는 이상 소견이 <br>
                                                발견되지 않는 경우
                                            </p>
                                            <p class="m_cont_434 sub_cont_title_text02 fz_16 lh_14 ls_2 normal">
                                                유방에서 멍울이 만져지지만 
                                                유방촬영술에서는 이상 소견이 
                                                발견되지 않는 경우
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="sub2_9_3_cont03_box sub2_9_3_cont03_box02 flex_row fw jc_center center">
                                    <div class="sub2_9_3_cont03_item sub2_9_3_cont03_item03">
                                        <div class="sub_cont_title sub2_9_3_cont03_item_text ta_c gs_reveal" data-gs-delay="600">
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                                            <p class="pc_cont_434 sub_cont_title_text02 fz_16 lh_14 ls_2 normal">
                                                유방암 고위험군 여성을 대상으로 <br>
                                                유방촬영술에서 뚜렷한 <br>
                                                이상소견은 보이지 않으나 <br>
                                                치밀 유방 구성을 보이는 경우
                                            </p>
                                            <p class="m_cont_434 sub_cont_title_text02 fz_16 lh_14 ls_2 normal">
                                                유방암 고위험군 여성을 대상으로 
                                                유방촬영술에서 뚜렷한 
                                                이상소견은 보이지 않으나 
                                                치밀 유방 구성을 보이는 경우
                                            </p>
                                        </div>
                                    </div>
                                    <div class="sub2_9_3_cont03_item sub2_9_3_cont03_item04">
                                        <div class="sub_cont_title sub2_9_3_cont03_item_text ta_c gs_reveal" data-gs-delay="800">
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                                            <p class="pc_cont_434 sub_cont_title_text02 fz_16 lh_14 ls_2 normal">
                                                가슴성형술을 받은 <br>
                                                여성을 대상으로 삽입물과 <br>
                                                유방조직을 검사가 필요한 경우
                                            </p>
                                            <p class="m_cont_434 sub_cont_title_text02 fz_16 lh_14 ls_2 normal">
                                                가슴성형술을 받은 
                                                여성을 대상으로 삽입물과 
                                                유방조직을 검사가 필요한 경우
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!--
                        <div class="sub_cont_box sub2_2_1_cont04_box p_r bg_fa pd_60 pt_120">
                            <div class="container-1300 sub2_2_1_cont05_container">
                                <div class="sub_click_btn open m_20" id="sub_click_btn9">
                                    <p class="sub_cont_title_text01 sortsmillgoudy fz_20 lh_16 ls_2 light">
                                        Diagnosis Of Breast
                                    </p>
                                    <p class="sub_cont_title_text02 fz_32 lh_16 ls_2 light">
                                        유방 검진 <span class="medium">후 주의사항</span>
                                    </p>
                                </div>
                                <div class="sub2_2_1_cont05_text sub2_9_1_cont_text open li_5 sub_click_box" id="sub_click_box9">
                                    <ul class="sub2_2_1_cont05_item_ul fz_17 normal ta_l">
                                        <li>
                                            <p>임신부이거나 임신 가능성이 있는 경우 의료진에게 미리 알려 주세요.</p>
                                        </li>
                                        <li>
                                            <p>유방 초음파의 경우는 금식이 필요 없습니다.</p>
                                        </li>
                                        <li>
                                            <p>임신이나 수유로 인한 유방의 변화로 정확한 검사가 어려울 수 있습니다.</p>
                                        </li>
                                        <li>
                                            <p>상의를 벗고 검사하게 되므로, 되도록 입고 벗기 간편한 옷차림이 좋습니다.</p>
                                        </li>
                                        <li>
                                            <p>악세서리는 검사 전 미리 풀어주시고 분실하지 않도록 잘 보관해 주세요.</p>
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
                                        <span class="fz_30 ls_2 lh_14 normal">여성진료</span>
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