<?php
include_once('./_common.php');
//if (G5_IS_MOBILE) {
//    include_once(G5_MOBILE_PATH.'/index.php');
//    return;
//}

// 웹사이트 타이틀
$g5['title'] = '오라클 특별함';

include_once(G5_PATH.'/head.php');
?>
    
    <script>
        $(document).ready(function(){
            var window_width = $(window).width();
            if (window_width <= 480) {
                $('.ht-inner').removeClass('sub_header');
            } else {
                $('.ht-inner').removeClass('sub_header');
            }
        });
    </script>
    <main id="content">
        <article class="sub_content01" id="startContent">
            <div class="sub_top_view sub1_1_top_view">
                <div class="sub_top_view_bg sub1_1_top_view_bg"></div>
                <div class="sub_top_view_text_wrap sub1_1_top_view_text_wrap ta_c">
                    <div class="sub_top_view_text01 sub1_1_top_view_text01 m_20">
                        <p class="c-w fz_20 lh_14 ls_2 light sub_text_ani">
                            인천오라클 특별함
                        </p>
                    </div>
                    <div class="sub_top_view_text02 sub1_1_top_view_text02">
                        <p class="pc_cont_434 c-w fz_27 lh_14 ls_2 nanummyeongjo light sub_text_ani">
                            대한민국 2% 피부과전문의가 모여있는
                        </p>
                        <p class="m_cont_434 c-w fz_27 lh_14 ls_2 nanummyeongjo light sub_text_ani">
                            대한민국 2% 피부과전문의가 
                        </p>
                    </div>
                    <div class="sub_top_view_text03 sub1_1_top_view_text03">
                        <p class="pc_cont_434 c-w fz_27 lh_14 ls_2 nanummyeongjo light sub_text_ani">
                            인천 오라클피부과
                        </p>
                        <p class="m_cont_434 c-w fz_27 lh_14 ls_2 nanummyeongjo light sub_text_ani">
                            모여있는 인천 오라클피부과
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
            
        <article class="sub_cont_box sub1_1_cont01_box pd_120">
            <div class="sub_container flex_row fw jc_center center">
                <div class="sub_cont_title sub1_1_cont_title ta_c m_80">
                    <p class="sub_cont_title_text01 fz_27 lh_14 ls_2 nanummyeongjo normal gs_reveal" data-gs-delay="200">
                        대한민국 2% 피부과전문의 책임진료
                    </p>
                    <p class="sub_cont_title_text01 fz_27 lh_14 ls_2 nanummyeongjo normal gs_reveal" data-gs-delay="400">
                        2%의 차이가 결과의 차이를 만듭니다.
                    </p>
                </div>
                <div class="sub1_1_cont01_img_wrap flex_row fw se center">
                    <div class="pc_cont_480 sub1_1_cont01_img sub1_1_cont01_img01 gs_reveal" data-gs-delay="200">
                        <!--<p class="fz_15 normal ls_2 lh_16 ta_c m_10">인천 오라클 피부과전문의</p>-->
                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub1_1_cont01_img01.png" alt="">
                    </div>
                    <div class="pc_cont_480 sub1_1_cont01_img_text">
                        <p class="sortsmillgoudy fz_70 ls_2 lh_16 ta_c">VS</p>
                    </div>
                    <div class="pc_cont_480 sub1_1_cont01_img sub1_1_cont01_img02 gs_reveal" data-gs-delay="400">
                        <!--<p class="fz_15 normal ls_2 lh_16 ta_c m_10">인천 오라클 피부과전문의</p>-->
                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub1_1_cont01_img02.png" alt="">
                    </div>
                    <div class="m_cont_480 sub1_1_cont01_img sub1_1_cont01_img01 gs_reveal" data-gs-delay="200">
                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub1_1_cont01_img01_m.png" alt="">
                    </div>
                </div>
            </div>
        </article> 

        <article class="sub_cont_box sub1_1_cont02_box">
            <div class="sub1_1_cont02 flex_row fw jc_center center">
                <div class="column_half">
                    <div class="flex_row fw fd_c jc_center center">
                        <div class="sub_cont_title sub1_1_cont02_title_center">
                            <p class="sub_cont_title_text01 sub1_1_cont02_title_text01 nanummyeongjo normal fz_26 lh_14 ls_2 m_30 gs_reveal" data-gs-delay="200">
                                <img class="m_5" src="<?php echo G5_THEME_URL?>/sub/img/sub1_1_cont02_icon01.png" alt=""> <br>
                                피부과전문의가 되기까지 <br>
                                11년.
                            </p>
                            <p class="sub_cont_title_text02 sub1_1_cont02_title_text02 light fz_16 lh_16 ls_2 m_20 gs_reveal" data-gs-delay="400">
                                의대교육 6년, <br>
                                의사면허취득 후 대학병원 인턴(1년)과 <br>
                                대학병원 피부과전공의(레지던트 4년) 교육과정을 <br>
                                마친 후 보건복지부 인증 피부과전문의 면허 취득 및<br>
                                대학병원 피부과전문의(펠로우)과정을 거친 <br>
                                피부과의사
                            </p>
                            <p class="sub_cont_title_text03 sub1_1_cont02_title_text03 light fz_16 lh_16 ls_2 gs_reveal" data-gs-delay="600">
                                의대졸업 후 별도의 교육과정과 임상경험 없이 <br>
                                취직한 의사
                            </p>
                        </div>
                    </div>
                </div>
                <div class="column_half">
                    <div class="sub1_1_cont02_img02">
                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub1_1_cont02_img02.jpg" alt="">
                        
                        <div class="sub1_1_cont02_img02_text ta_c">
                            <p class="c-w fz_20 lh_14 ls_2 normal m_40">피부질환</p>
                            <p class="c-w fz_30 lh_14 ls_2 nanummyeongjo normal">
                                당신의 피부 <br>
                                누구에게 맡기시겠습니까?
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </article>
        
        <article class="sub_cont_box sub1_1_cont03_box">
            <div class="sub1_1_cont03 flex_row fw jc_center center">
                <div class="sub1_1_cont03_img">
                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub1_1_cont03_img01.jpg" alt="">
                    <div class="sub1_1_cont03_fixed_img01"></div>
                    
                    <div class="sub1_1_cont03_text">
                        <div class="sub1_1_cont03_text01 ta_c">
                            <p class="c-w fz_30 lh_14 ls_2 nanummyeongjo normal m_40">필연의 길을 따라, 집요하게</p>
                            <p class="c-w fz_16 lh_18 ls_2 normal">
                                피부질환의 치료에 있어서 <br>
                                나만의 비법, 나만의 특효약은 없습니다. <br>
                                보편타당한 검증된 치료로써 <br>
                                일관된 결과를 추구합니다. <br>
                                난치성 피부질환 치료의 오랜여정 <br>
                                인천오라클피부과가 함께 하겠습니다.
                            </p>
                        </div>
                        <div class="sub1_1_cont03_text02 flex_row jc_center center">
                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub1_1_cont03_icon01.png" alt="">
                            <p class="c-w fz_20 lh_14 ls_2 normal">
                                피부과학을 전공한 피부과전문의가 <br>
                                여러분의 피부건강을 지키겠습니다.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </article>

        <article class="sub_cont_box sub1_1_cont04_box">
            <div class="sub1_1_cont04_process_desc_sect pc_process-desc-sect">
                <div class="sub1_1_cont04_process_desc_wrap">
                    <div class="sub1_1_cont04_fix_outer">
                        <div class="sub1_1_cont04_fix_cnt">
                            <p class="sub1_1_cont04_fix_text01 fz_22 ls_2 ta_c normal m_20 gs_reveal" data-gs-delay="200">
                                미용소개
                            </p>
                            <p class="sub1_1_cont04_fix_text02 fz_30 ls_2 ta_c nanummyeongjo normal gs_reveal" data-gs-delay="400">
                                작은 디테일의 차이가
                            </p>
                            <p class="sub1_1_cont04_fix_text03 fz_30 ls_2 ta_c nanummyeongjo normal gs_reveal" data-gs-delay="600">
                                높은 퀄리티를 선사합니다.
                            </p>
                        </div>
                    </div>
                    <div class="sub1_1_cont04_scroll_outer">
                        <div class="sub1_1_cont04_process_box flex_row fw fd_c jc_center center">
                            <div class="sub1_1_cont04_process_box01 flex_row fw fd_c jc_center al_fs">
                                <div class="sub1_1_cont04_process_box_img">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub1_1_cont04_list_img01.png" alt=""> 
                                </div>
                                <div class="sub1_1_cont04_process_box_text sub1_1_cont04_process_box_text01">
                                    <h3 class="sub1_1_cont04_prs_tit fz_27 ls_2 lh_16 nanummyeongjo normal m_20">
                                        디테일의 차이가 완성도의 차이
                                    </h3>
                                    <p class="sub1_1_cont04_prs_desc fz_16 lh_16 ls_2 normal m_20">
                                        유행을 따라가지 않고 <br>
                                        나에게 필요한 것만 <br>
                                        티나지 않게, 조금씩 천천히
                                    </p>
                                    <p class="sub1_1_cont04_prs_desc fz_16 lh_16 ls_2 normal">
                                        한 번에 좋아질 수 없습니다. <br>
                                        천편일률적인 공장식 시술에 반대합니다.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="sub1_1_cont04_process_box flex_row fw fd_c jc_center center">
                            <div class="sub1_1_cont04_process_box02 flex_row jc_center al_fs">
                                <div class="sub1_1_cont04_process_box_img">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub1_1_cont04_list_img02.png" alt=""> 
                                </div>
                                <div class="sub1_1_cont04_process_box_text sub1_1_cont04_process_box_text02">
                                    <h3 class="sub1_1_cont04_prs_tit fz_27 ls_2 lh_16 nanummyeongjo normal m_20">
                                        본연의 자연스러움
                                    </h3>
                                    <p class="sub1_1_cont04_prs_desc fz_16 lh_16 ls_2 normal m_20">
                                        유행을 따라가지 않고 <br>
                                        나에게 필요한 것만 <br>
                                        티나지 않게, 조금씩 천천히
                                    </p>
                                    <p class="sub1_1_cont04_prs_desc fz_16 lh_16 ls_2 normal">
                                        한 번에 좋아질 수 없습니다. <br>
                                        천편일률적인 공장식 시술에 반대합니다.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="sub1_1_cont04_process_box flex_row fw fd_c jc_center center">
                            <div class="sub1_1_cont04_process_box01 flex_row fw fd_c jc_center al_fs">
                                <div class="sub1_1_cont04_process_box_img">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub1_1_cont04_list_img03.png" alt=""> 
                                </div>
                                <div class="sub1_1_cont04_process_box_text sub1_1_cont04_process_box_text03">
                                    <h3 class="sub1_1_cont04_prs_tit fz_27 ls_2 lh_16 nanummyeongjo normal m_20">
                                        깊어지는 아름다움
                                    </h3>
                                    <p class="sub1_1_cont04_prs_desc fz_16 lh_16 ls_2 normal m_20">
                                        나이와 얼굴에 꼭 맞는 치료 계획으로 <br>
                                        시간이 지날 수록 깊어지는 아름다움을 선사합니다. <br>
                                        다년간 수 많은 경험을 바탕으로 <br>
                                        피부과 전문의의 복합 안티에이징을 경험해보세요.
                                    </p>
                                    <p class="sub1_1_cont04_prs_desc fz_16 lh_16 ls_2 normal">
                                        시간이 흐를수록 더 깊어지는 아름다움, <br>
                                        인천 오라클피부과가 만들어갑니다.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="sub1_1_cont04_process_box flex_row fw fd_c jc_center center">
                            <div class="sub1_1_cont04_process_box02 flex_row jc_center al_fs">
                                <div class="sub1_1_cont04_process_box_img">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub1_1_cont04_list_img04.png" alt=""> 

                                    <div class="sub1_1_cont04_prs_arrow">
                                        <a href="<?php echo G5_THEME_URL?>/sub/sub1_4.php">
                                            <img src="<?php echo G5_THEME_URL?>/img/main_cont05_prs_arrow.png" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="sub1_1_cont04_process_box_text sub1_1_cont04_process_box_text04">
                                    <h3 class="sub1_1_cont04_prs_tit fz_27 ls_2 lh_16 nanummyeongjo normal m_20">
                                        정품을 넘어선 명품
                                    </h3>
                                    <p class="sub1_1_cont04_prs_desc fz_16 lh_16 ls_2 normal m_20">
                                        인천 오라클피부과가 갖춘 <br>
                                        다양한 프리미엄 레이저는 <br>
                                        다른 피부과도 따라할 수 있습니다.
                                    </p>
                                    <p class="sub1_1_cont04_prs_desc fz_16 lh_16 ls_2 normal m_20">
                                        그러나 <br>
                                        수 많은 시술 경험으로 <br>
                                        자연스러운 아름다움을 만드는 <br>
                                        피부과 전문의의 명품 실력은 <br>
                                        누구도 따라할 수 없습니다.
                                    </p>
                                    <p class="sub1_1_cont04_prs_desc fz_16 lh_16 ls_2 normal">
                                        사람마다 다른 피부 고민, <br>
                                        프리미엄 레이저를 복합적으로 사용하여 <br>
                                        누구나 최적의 치료를 받으실 수 있습니다.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="sub1_1_cont04_process_desc_sect m_process-desc-sect">
                <div class="sub1_1_cont04_process_desc_wrap_m">
                    <div class="sub1_1_cont04_fix_outer_m">
                        <div class="sub1_1_cont04_fix_cnt_m">
                            <p class="sub1_1_cont04_fix_text01 fz_22 ls_2 ta_c normal m_20 gs_reveal" data-gs-delay="200">
                                미용소개
                            </p>
                            <p class="sub1_1_cont04_fix_text02 fz_30 ls_2 ta_c nanummyeongjo normal gs_reveal" data-gs-delay="400">
                                작은 디테일의 차이가
                            </p>
                            <p class="sub1_1_cont04_fix_text03 fz_30 ls_2 ta_c nanummyeongjo normal gs_reveal" data-gs-delay="600">
                                높은 퀄리티를 선사합니다.
                            </p>
                        </div>
                    </div>
                    <div class="sub1_1_cont04_scroll_outer_m">
                        <div class="sub1_1_cont04_process_box_m flex_row fw fd_c jc_center center">
                            <div class="sub1_1_cont04_process_box01_m flex_row fw fd_c jc_fs al_fs">
                                <div class="sub1_1_cont04_process_box_img_m sub1_1_cont04_process_box_img01_m">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub1_1_cont04_list_img01.png" alt=""> 
                                </div>
                                <div class="sub1_1_cont04_process_box_text_m sub1_1_cont04_process_box_text01_m">
                                    <h3 class="sub1_1_cont04_prs_tit fz_27 ls_2 lh_16 nanummyeongjo normal m_20">
                                        디테일의 차이가 완성도의 차이
                                    </h3>
                                    <p class="sub1_1_cont04_prs_desc fz_16 lh_16 ls_2 normal m_20">
                                        유행을 따라가지 않고 <br>
                                        나에게 필요한 것만 <br>
                                        티나지 않게, 조금씩 천천히
                                    </p>
                                    <p class="sub1_1_cont04_prs_desc fz_16 lh_16 ls_2 normal">
                                        한 번에 좋아질 수 없습니다. <br>
                                        천편일률적인 공장식 시술에 반대합니다.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="sub1_1_cont04_process_box_m flex_row fw fd_c jc_center center">
                            <div class="sub1_1_cont04_process_box02_m flex_row fw fd_c jc_fe al_fs">
                                <div class="sub1_1_cont04_process_box_img_m sub1_1_cont04_process_box_img02_m">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub1_1_cont04_list_img02.png" alt=""> 
                                </div>
                                <div class="sub1_1_cont04_process_box_text_m sub1_1_cont04_process_box_text02_m">
                                    <h3 class="sub1_1_cont04_prs_tit fz_27 ls_2 lh_16 nanummyeongjo normal m_20">
                                        본연의 자연스러움
                                    </h3>
                                    <p class="sub1_1_cont04_prs_desc fz_16 lh_16 ls_2 normal m_20">
                                        유행을 따라가지 않고 <br>
                                        나에게 필요한 것만 <br>
                                        티나지 않게, 조금씩 천천히
                                    </p>
                                    <p class="sub1_1_cont04_prs_desc fz_16 lh_16 ls_2 normal">
                                        한 번에 좋아질 수 없습니다. <br>
                                        천편일률적인 공장식 시술에 반대합니다.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="sub1_1_cont04_process_box_m flex_row fw fd_c jc_center center">
                            <div class="sub1_1_cont04_process_box01_m flex_row fw fd_c jc_fs al_fs">
                                <div class="sub1_1_cont04_process_box_img_m sub1_1_cont04_process_box_img03_m">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub1_1_cont04_list_img03.png" alt=""> 
                                </div>
                                <div class="sub1_1_cont04_process_box_text_m sub1_1_cont04_process_box_text03_m">
                                    <h3 class="sub1_1_cont04_prs_tit fz_27 ls_2 lh_16 nanummyeongjo normal m_20">
                                        깊어지는 아름다움
                                    </h3>
                                    <p class="sub1_1_cont04_prs_desc fz_16 lh_16 ls_2 normal m_20">
                                        나이와 얼굴에 꼭 맞는 치료 계획으로 <br>
                                        시간이 지날 수록 깊어지는 아름다움을 선사합니다. <br>
                                        다년간 수 많은 경험을 바탕으로 <br>
                                        피부과 전문의의 복합 안티에이징을 경험해보세요.
                                    </p>
                                    <p class="sub1_1_cont04_prs_desc fz_16 lh_16 ls_2 normal">
                                        시간이 흐를수록 더 깊어지는 아름다움, <br>
                                        인천 오라클피부과가 만들어갑니다.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="sub1_1_cont04_process_box_m flex_row fw fd_c jc_center center">
                            <div class="sub1_1_cont04_process_box02_m flex_row fw fd_c jc_fe al_fs">
                                <div class="sub1_1_cont04_process_box_img_m sub1_1_cont04_process_box_img04_m">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub1_1_cont04_list_img04.png" alt=""> 

                                    <div class="sub1_1_cont04_prs_arrow">
                                        <a href="<?php echo G5_THEME_URL?>/sub/sub1_4.php">
                                            <img src="<?php echo G5_THEME_URL?>/img/main_cont05_prs_arrow.png" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="sub1_1_cont04_process_box_text_m sub1_1_cont04_process_box_text04_m">
                                    <h3 class="sub1_1_cont04_prs_tit fz_27 ls_2 lh_16 nanummyeongjo normal m_20">
                                        정품을 넘어선 명품
                                    </h3>
                                    <p class="pc_cont_434 sub1_1_cont04_prs_desc fz_16 lh_16 ls_2 normal m_20">
                                        인천 오라클피부과가 갖춘 <br>
                                        다양한 프리미엄 레이저는 <br>
                                        다른 피부과도 따라할 수 있습니다.
                                    </p>
                                    <p class="m_cont_434 sub1_1_cont04_prs_desc fz_16 lh_16 ls_2 normal m_20">
                                        인천 오라클피부과가 갖춘 
                                        다양한 프리미엄 <br>레이저는 
                                        다른 피부과도 따라할 수 있습니다.
                                    </p>
                                    <p class="pc_cont_434 sub1_1_cont04_prs_desc fz_16 lh_16 ls_2 normal m_20">
                                        그러나 <br>
                                        수 많은 시술 경험으로 <br>
                                        자연스러운 아름다움을 만드는 <br>
                                        피부과 전문의의 명품 실력은 <br>
                                        누구도 따라할 수 없습니다.
                                    </p>
                                    <p class="m_cont_434 sub1_1_cont04_prs_desc fz_16 lh_16 ls_2 normal m_20">
                                        그러나 
                                        수 많은 시술 경험으로 
                                        자연스러운 아름다움을 만드는 
                                        피부과 전문의의 명품 실력은 
                                        누구도 따라할 수 없습니다.
                                    </p>
                                    <p class="pc_cont_434 sub1_1_cont04_prs_desc fz_16 lh_16 ls_2 normal">
                                        사람마다 다른 피부 고민, <br>
                                        프리미엄 레이저를 복합적으로 사용하여 <br>
                                        누구나 최적의 치료를 받으실 수 있습니다.
                                    </p>
                                    <p class="m_cont_434 sub1_1_cont04_prs_desc fz_16 lh_16 ls_2 normal">
                                        사람마다 다른 피부 고민, 
                                        프리미엄 레이저를 복합적으로 사용하여 
                                        누구나 최적의 치료를 받으실 수 있습니다.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </article>
        
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
</script>