<?php
include_once('./_common.php');
//if (G5_IS_MOBILE) {
//    include_once(G5_MOBILE_PATH.'/index.php');
//    return;
//}

// 웹사이트 타이틀
$g5['title'] = '디톡스/항노화 치료';

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
            <div class="sub_top_view sub4_2_top_view">
                <div class="sub_top_view_bg sub4_2_top_view_bg"></div>
                <div class="sub_top_view_text_wrap sub4_2_top_view_text_wrap ta_c">
                    <div class="sub_top_view_text01 sub4_2_top_view_text01">
                        <p class="sortsmillgoudy fz_30 lh_14 ls_2 sub_text_ani ta_c">
                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub_top_view_text_icon.png" alt="">
                            Detox & Anti-Aging Therapy
                        </p>
                    </div>
                    <div class="sub_top_view_text02 sub4_2_top_view_text02 m_20">
                        <p class="fz_40 lh_14 ls_2 medium sub_text_ani">
                            디톡스/항노화 치료
                        </p>
                    </div>
                    <div class="sub_top_view_text03 sub4_2_top_view_text03">
                        <p class="fz_16 lh_14 ls_2 normal sub_text_ani">
                            약해진 면역력, 저하된 몸의 기능과 에너지를 증진시키고
                        </p>
                    </div>
                    <div class="sub_top_view_text04 sub4_2_top_view_text04">
                        <p class="fz_16 lh_14 ls_2 normal sub_text_ani">
                            몸의 회복 능력과 치유 능력을 높이는 영양 테라피
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
                    <p class="sub_cont_title_text01 fz_32 lh_14 ls_2 normal m_30">
                        피부와 몸의 자생력을 높이는 <br>
                        퍼스널 디톡스 & 항노화 치료
                    </p>
                    <p class="pc_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 light m_30">
                        디톡스/항노화 치료는 몸의 독소를 비우고 약해진 면역력, 떨어지는 <br>
                        에너지를 직접적으로 보충하는 치료로서, 피부와 몸 자체의 자생력을 <br>
                        높여 피부 트러블을 개선하고, 안티에이징 효과를 선사합니다.
                    </p>
                    <p class="m_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 light m_30">
                        디톡스/항노화 치료는 몸의 독소를 비우고 약해진 면역력, 떨어지는 
                        에너지를 직접적으로 보충하는 치료로서, 피부와 몸 자체의 자생력을 
                        높여 피부 트러블을 개선하고, 안티에이징 효과를 선사합니다.
                    </p>
                    <p class="pc_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light">
                        인천 오라클의 디톡스&항노화 치료는 퍼스널 치료를 원칙으로, 개인마다 <br>
                        다른 몸 상태에 맞춰 전문의가 1:1 맞춤 처방 후 진행됩니다.
                    </p>
                    <p class="m_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light">
                        인천 오라클의 디톡스&항노화 치료는 퍼스널 치료를 원칙으로, 개인마다 
                        다른 몸 상태에 맞춰 전문의가 1:1 맞춤 처방 후 진행됩니다.
                    </p>
                </div>
                <div class="sub_cont_doct_img sub3_1_cont01_img img_right ta_r">
                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub4_2_cont01_img01.png" alt="">
                </div>
            </div>
        </article>
        
        <article class="sub_cont_box sub4_1_cont02_box bg_ff pd_120">
            <div class="sub_tabcontent_container sub7_container flex_row fw jc_center al_fs">
                <div class="sub_cont_title sub4_1_cont02_title_center ta_c">
                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                    <p class="sub_cont_title_text01 fz_32 lh_14 ls_2 normal m_80 gs_reveal" data-gs-delay="200">
                        빠른 에너지 충전, <br>
                        <span class="medium">수액정맥주사</span>
                    </p>
                </div>
                <div class="sub4_1_cont02_item_box flex_row fw jc_center al_fs">
                    <div class="sub4_1_cont02_item sub4_1_cont02_item01 ta_c gs_reveal" data-gs-delay="200">
                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub4_2_cont02_img01.png" alt="">
                        
                        <p class="fz_18 ls_2 lh_14 normal">
                           마이어스 칵테일
                        </p>
                        <p class="c-dg fz_16 ls_2 lh_14 light">
                           각종 질환 치료 <br>
                           영양불균형 치료
                        </p>
                    </div>
                    <div class="sub4_1_cont02_item sub4_1_cont02_item02 ta_c gs_reveal" data-gs-delay="400">
                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub4_2_cont02_img02.png" alt="">
                        
                        <p class="fz_18 ls_2 lh_14 normal">
                           백옥주사
                        </p>
                        <p class="c-dg fz_16 ls_2 lh_14 light">
                           피부 미백 <br>
                           피로감 회복
                        </p>
                    </div>
                    <div class="sub4_1_cont02_item sub4_1_cont02_item03 ta_c gs_reveal" data-gs-delay="600">
                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub4_2_cont02_img03.png" alt="">
                        
                        <p class="fz_18 ls_2 lh_14 normal">
                           신데렐라주사
                        </p>
                        <p class="c-dg fz_16 ls_2 lh_14 light">
                           피부 노화 방지 <br>
                           체지방 분해
                        </p>
                    </div>
                    <div class="sub4_1_cont02_item sub4_1_cont02_item04 ta_c gs_reveal" data-gs-delay="800">
                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub4_2_cont02_img04.png" alt="">
                        
                        <p class="fz_18 ls_2 lh_14 normal">
                           마늘 주사
                        </p>
                        <p class="c-dg fz_16 ls_2 lh_14 light">
                           마늘의 알리신으로 <br>
                           신진대사 촉진
                        </p>
                    </div>
                    <div class="sub4_1_cont02_item sub4_1_cont02_item05 ta_c gs_reveal" data-gs-delay="1000">
                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub4_2_cont02_img05.png" alt="">
                        
                        <p class="fz_18 ls_2 lh_14 normal">
                           감초주사
                        </p>
                        <p class="c-dg fz_16 ls_2 lh_14 light">
                           신진대사 활성화 <br>
                           면역력 강화
                        </p>
                    </div>
                    <div class="sub4_1_cont02_item sub4_1_cont02_item06 ta_c gs_reveal" data-gs-delay="1200">
                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub4_2_cont02_img06.png" alt="">
                        
                        <p class="fz_18 ls_2 lh_14 normal">
                           태반주사
                        </p>
                        <p class="c-dg fz_16 ls_2 lh_14 light">
                           피부 노화 방지 <br>
                           세포 활성화 / 피로 회복
                        </p>
                    </div>
                </div>
            </div>
        </article>
        
        <article class="sub_cont_box sub2_1_4_cont_box pd_60">
            <div class="sub2_1_4_cont3_bg sub7_cont3_bg">
                <div class="sub_tabcontent_container sub7_container flex_row fw sa center">
                    <div class="sub_cont_doct_img sub4_2_cont03_img img_left ta_r">
                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub4_2_cont03_img01.png" alt="">
                    </div>
                    <div class="sub_cont_title sub4_2_cont03_title_right title_right gs_reveal" data-gs-delay="200">
                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                        <p class="sub_cont_title_text02 fz_32 lh_14 ls_2 normal m_30">
                            면역력을 끌어 올리는 <br>
                            <span class="medium">싸이모신 알파원 주사</span>
                        </p>
                        <ul class="sub2_8_6_cont03_item_ul fz_17 normal ta_l m_30 gs_reveal" data-gs-delay="400">
                            <li>
                                <p>미국 FDA와 국내 식약처로부터 승인된 약물</p>
                            </li>
                            <li>
                                <p>면역 질환 예방</p>
                            </li>
                        </ul>
                        <p class="pc_cont_434 sub_cont_title_text03 c-lightgray fz_16 lh_16 ls_2 light gs_reveal" data-gs-delay="600">
                            우리 몸에 반드시 필요한 면역조절 물질을 주입하여 자연적인 면역 기능을 <br>
                            강화하는 주사입니다. 주 1-2회, 총 4-8회 정도 복부에 주사하여 떨어진 면역력을 <br>
                            회복합니다. 면역력이 떨어지신 분, 만성피부염을 앓고 계신 분, 노약자, <br>
                            면역저하자 분들에게 권장합니다.
                        </p>
                        <p class="m_cont_434 sub_cont_title_text03 c-lightgray fz_16 lh_16 ls_2 light gs_reveal" data-gs-delay="600">
                            우리 몸에 반드시 필요한 면역조절 물질을 주입하여 자연적인 면역 기능을 
                            강화하는 주사입니다. 주 1-2회, 총 4-8회 정도 복부에 주사하여 떨어진 면역력을 
                            회복합니다. 면역력이 떨어지신 분, 만성피부염을 앓고 계신 분, 노약자, 
                            면역저하자 분들에게 권장합니다.
                        </p>
                    </div>
                </div>
                
                <div class="sub_tabcontent_container sub7_container sub2_1_cont03_container flex_row fw sa center">
                    <div class="sub_cont_title sub4_2_cont04_title_left title_left">
                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                        <p class="sub_cont_title_text02 fz_32 lh_14 ls_2 normal m_30">
                            만성피로를 해결하는 비타민D 처방, <br>
                            <span class="medium">비타민D 근육 주사</span>
                        </p>
                        <ul class="sub2_8_6_cont03_item_ul fz_17 normal ta_l m_30 gs_reveal" data-gs-delay="400">
                            <li>
                                <p>만성피로 개선</p>
                            </li>
                            <li>
                                <p>면역력 증진 효과</p>
                            </li>
                            <li>
                                <p>골다공증 예방 효과</p>
                            </li>
                        </ul>
                        <p class="pc_cont_434 sub_cont_title_text03 c-lightgray fz_16 lh_16 ls_2 light gs_reveal" data-gs-delay="600">
                            뼈 강화, 세포 성장, 근력 발달, 면역 기능에 영향을 주는 비타민D는 <br>
                            결핍되기 쉬운 영양소입니다. <br>
                            인천 오라클의 비타민D 근육 주사는 부족한 비타민D를 직접적으로 공급하여 <br>
                            만성피로를 완화하고, 몸의 근력과 뼈를 강화합니다.
                        </p>
                        <p class="m_cont_434 sub_cont_title_text03 c-lightgray fz_16 lh_16 ls_2 light gs_reveal" data-gs-delay="600">
                            뼈 강화, 세포 성장, 근력 발달, 면역 기능에 영향을 주는 비타민D는 
                            결핍되기 쉬운 영양소입니다. <br>
                            인천 오라클의 비타민D 근육 주사는 부족한 비타민D를 직접적으로 공급하여 
                            만성피로를 완화하고, 몸의 근력과 뼈를 강화합니다.
                        </p>
                    </div>
                    <div class="sub_cont_doct_img sub4_2_cont04_img img_right ta_c">
                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub4_2_cont04_img01.png" alt="">
                    </div>
                </div>
            </div>
        </article>
        
        <article class="sub_cont_box sub2_1_youtube_box bg_fa pd_160 pt_120">
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
