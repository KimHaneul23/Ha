<?php
include_once('./_common.php');
//if (G5_IS_MOBILE) {
//    include_once(G5_MOBILE_PATH.'/index.php');
//    return;
//}

// 웹사이트 타이틀
$g5['title'] = '피부기능의학적검사';

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
            <div class="sub_top_view sub4_1_top_view">
                <div class="sub_top_view_bg sub4_1_top_view_bg"></div>
                <div class="sub_top_view_text_wrap sub4_1_top_view_text_wrap ta_c">
                    <div class="sub_top_view_text01 sub4_1_top_view_text01">
                        <p class="sortsmillgoudy fz_30 lh_14 ls_2 sub_text_ani ta_c">
                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub_top_view_text_icon.png" alt="">
                            Functional Medicine Test
                        </p>
                    </div>
                    <div class="sub_top_view_text02 sub4_1_top_view_text02 m_20">
                        <p class="fz_40 lh_14 ls_2 medium sub_text_ani">
                            피부기능의학적검사
                        </p>
                    </div>
                    <div class="sub_top_view_text03 sub4_1_top_view_text03">
                        <p class="fz_16 lh_14 ls_2 normal sub_text_ani">
                            피부질환을 유발하는 근본적인 원인부터 정확하게 검사하여
                        </p>
                    </div>
                    <div class="sub_top_view_text04 sub4_1_top_view_text04">
                        <p class="fz_16 lh_14 ls_2 normal sub_text_ani">
                            몸 속을 개선하고, 건강한 피부를 완성하는 이너뷰티 솔루션
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
        
        <article class="sub_cont_box sub4_1_cont01_box bg_ff pd_120 pt_160">
            <div class="sub_tabcontent_container sub7_container sub2_1_cont03_container flex_row fw sa center">
                <div class="sub_cont_title sub3_1_cont01_title_left title_left">
                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                    <p class="sub_cont_title_text01 fz_32 lh_14 ls_2 normal m_40">
                        근원적인 치유의 시작, <br>
                        <span class="medium">퍼스널 기능의학검사</span>
                    </p>
                    <p class="pc_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 light">
                        반복적으로 재발하는 피부 질환, 나빠지는 피부 건강의 원인은 <br>
                        전반적인 몸의 건강 상태에 달려 있습니다. <br>
                        기능의학검사는 개인의 면역 상태부터 호르몬 상태, 해독 능력과 <br>
                        영양 상태까지 전반적인 몸의 기능을 정밀하게 검사하여 피부 질환의 <br>
                        근본적인 원인을 찾고, 몸의 기능을 높여 질환을 예방합니다.
                    </p>
                    <p class="m_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 light">
                        반복적으로 재발하는 피부 질환, 나빠지는 피부 건강의 원인은 
                        전반적인 몸의 건강 상태에 달려 있습니다. <br>
                        기능의학검사는 개인의 면역 상태부터 호르몬 상태, 해독 능력과 
                        영양 상태까지 전반적인 몸의 기능을 정밀하게 검사하여 피부 질환의 
                        근본적인 원인을 찾고, 몸의 기능을 높여 질환을 예방합니다.
                    </p>
                </div>
                <div class="sub_cont_doct_img sub3_1_cont01_img img_right ta_r">
                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub4_1_cont01_img01.png" alt="">
                </div>
            </div>
        </article>
        
        <article class="sub_cont_box sub4_1_cont02_box bg_ff pd_120">
            <div class="sub_tabcontent_container sub7_container flex_row fw jc_center al_fs">
                <div class="sub_cont_title sub4_1_cont02_title_center ta_c">
                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                    <p class="sub_cont_title_text01 fz_32 lh_14 ls_2 normal m_80 gs_reveal" data-gs-delay="200">
                        인천 오라클 <br>
                        <span class="medium">피부기능의학 검사 프로그램</span>
                    </p>
                </div>
                <div class="sub4_1_cont02_item_box flex_row fw jc_center al_fs">
                    <div class="sub4_1_cont02_item sub4_1_cont02_item01 ta_c gs_reveal" data-gs-delay="200">
                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub4_1_cont02_img01.png" alt="">
                        
                        <p class="fz_18 ls_2 lh_14 normal">
                           면역력 검사
                        </p>
                        <p class="pc_cont_434 c-dg fz_16 ls_2 lh_14 light">
                           숫자로 확인하는 면역력 검사, <br>
                           NK cell 검사, 비타민D 검사 등
                        </p>
                        <p class="m_cont_434 c-dg fz_16 ls_2 lh_14 light">
                           숫자로 확인하는 면역력 검사, 
                           NK cell 검사, 비타민D 검사 등
                        </p>
                    </div>
                    <div class="sub4_1_cont02_item sub4_1_cont02_item02 ta_c gs_reveal" data-gs-delay="400">
                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub4_1_cont02_img02.png" alt="">
                        
                        <p class="fz_18 ls_2 lh_14 normal">
                           유기산 검사
                        </p>
                        <p class="pc_cont_434 c-dg fz_16 ls_2 lh_14 light">
                           건강 유지를 위한 생화학적 <br>
                           물질 대사를 알아보는 검사
                        </p>
                        <p class="m_cont_434 c-dg fz_16 ls_2 lh_14 light">
                           건강 유지를 위한 생화학적 
                           물질 대사를 알아보는 검사
                        </p>
                    </div>
                    <div class="sub4_1_cont02_item sub4_1_cont02_item03 ta_c gs_reveal" data-gs-delay="600">
                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub4_1_cont02_img03.png" alt="">
                        
                        <p class="fz_18 ls_2 lh_14 normal">
                           음식 과민성 검사
                        </p>
                        <p class="pc_cont_434 c-dg fz_16 ls_2 lh_14 light">
                           만성 두드러기, 아토피, <br>
                           가려움증의 원인을 찾는 검사
                        </p>
                        <p class="m_cont_434 c-dg fz_16 ls_2 lh_14 light">
                           만성 두드러기, 아토피, 
                           가려움증의 원인을 찾는 검사
                        </p>
                    </div>
                    <div class="sub4_1_cont02_item sub4_1_cont02_item04 ta_c gs_reveal" data-gs-delay="800">
                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub4_1_cont02_img04.png" alt="">
                        
                        <p class="fz_18 ls_2 lh_14 normal">
                           자율 신경 검사
                        </p>
                        <p class="pc_cont_434 c-dg fz_16 ls_2 lh_14 light">
                           교감, 비교감 신경의 균형과 <br>
                           자율신경 실조증을 검사
                        </p>
                        <p class="m_cont_434 c-dg fz_16 ls_2 lh_14 light">
                           교감, 비교감 신경의 균형과 
                           자율신경 실조증을 검사
                        </p>
                    </div>
                    <div class="sub4_1_cont02_item sub4_1_cont02_item05 ta_c gs_reveal" data-gs-delay="1000">
                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub4_1_cont02_img05.png" alt="">
                        
                        <p class="fz_18 ls_2 lh_14 normal">
                           부신 호르몬 검사
                        </p>
                        <p class="pc_cont_434 c-dg fz_16 ls_2 lh_14 light">
                           만성 피로, 더딘 질병 회복의 원인이 <br>
                           되는 부신피로를 확인하는 검사
                        </p>
                        <p class="m_cont_434 c-dg fz_16 ls_2 lh_14 light">
                           만성 피로, 더딘 질병 회복의 원인이 
                           되는 부신피로를 확인하는 검사
                        </p>
                    </div>
                    <div class="sub4_1_cont02_item sub4_1_cont02_item06 ta_c gs_reveal" data-gs-delay="1200">
                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub4_1_cont02_img06.png" alt="">
                        
                        <p class="fz_18 ls_2 lh_14 normal">
                           휴지기 탈모 원인 검사
                        </p>
                        <p class="pc_cont_434 c-dg fz_16 ls_2 lh_14 light">
                           호르몬, 영양상태, 위산결핍 등 다양한 <br>
                           병변으로 탈모 원인을 알아보는 검사
                        </p>
                        <p class="m_cont_434 c-dg fz_16 ls_2 lh_14 light">
                           호르몬, 영양상태, 위산결핍 등 다양한 
                           병변으로 탈모 원인을 알아보는 검사
                        </p>
                    </div>
                </div>
            </div>
        </article>
        
        <article class="sub_cont_box sub4_1_cont03_box bg_ff pd_160 pt_120">
            <div class="sub_tabcontent_container sub7_container flex_row fw sa center">
                <div class="sub_cont_doct_img sub4_1_cont03_img img_left ta_r">
                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub4_1_cont03_img01.png" alt="">
                </div>
                <div class="sub_cont_title sub4_1_cont03_title_right title_right gs_reveal" data-gs-delay="200">
                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                    <p class="sub_cont_title_text01 fz_32 lh_14 ls_2 normal m_30">
                        <span class="medium">건강한 컨디션을 디자인하는</span> <br>
                        피부 기능의학적 검사
                    </p>
                    <p class="pc_cont_434 sub_cont_title_text02 c-lightgray fz_16 lh_16 ls_2 light m_30 gs_reveal" data-gs-delay="400">
                        인천 오라클의 피부 기능의학검사는 눈에 보이지 않는 몸 속의 상태를 <br>
                        정확하게 파악하고, 몸 속부터 건강하게 개선하여 이너뷰티부터 아웃뷰티까지 <br>
                        개선하는 프로그램입니다.
                    </p>
                    <p class="m_cont_434 sub_cont_title_text02 c-lightgray fz_16 lh_16 ls_2 light m_30 gs_reveal" data-gs-delay="400">
                        인천 오라클의 피부 기능의학검사는 눈에 보이지 않는 몸 속의 상태를 
                        정확하게 파악하고, 몸 속부터 건강하게 개선하여 이너뷰티부터 아웃뷰티까지 
                        개선하는 프로그램입니다.
                    </p>
                    <p class="pc_cont_434 sub_cont_title_text03 c-lightgray fz_16 lh_16 ls_2 light gs_reveal" data-gs-delay="600">
                        정확한 검사를 바탕으로 맞춤형 생활 습관 교정을 진행하여 <br>
                        최상의 컨디션을 만들고, 건강한 아름다움을 오래 유지할 수 있도록 <br>
                        모든 과정을 피부과 전문의가 주치의로서 함께합니다.
                    </p>
                    <p class="m_cont_434 sub_cont_title_text03 c-lightgray fz_16 lh_16 ls_2 light gs_reveal" data-gs-delay="600">
                        정확한 검사를 바탕으로 맞춤형 생활 습관 교정을 진행하여 
                        최상의 컨디션을 만들고, 건강한 아름다움을 오래 유지할 수 있도록 
                        모든 과정을 피부과 전문의가 주치의로서 함께합니다.
                    </p>
                </div>
            </div>
        </article>
        
        <article class="sub_cont_box sub2_1_youtube_box bg_ff pd_160 pt_120">
            <div class="container-sm flex_row fw jc_center al_fs">
                <div class="sub_cont_title sub2_1_4_cont_title_center ta_c">
                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                    <p class="sub_cont_title_text01 sortsmillgoudy fz_50 lh_14 ls_2 gs_reveal" data-gs-delay="200">
                        Youtube
                    </p>
                    <p class="sub_cont_title_text02 fz_20 lh_16 ls_2 normal gs_reveal m_60" data-gs-delay="400">
                        피부과 전문의가 직접 들려 주는 <br>
                        <span class="fz_30 ls_2 lh_14 normal">피부기능의학적검사</span>
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
