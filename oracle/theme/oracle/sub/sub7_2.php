<?php
include_once('./_common.php');
//if (G5_IS_MOBILE) {
//    include_once(G5_MOBILE_PATH.'/index.php');
//    return;
//}

// 웹사이트 타이틀
$g5['title'] = '남성수염제모';

include_once(G5_PATH.'/head.php');
?>
    
    <script>
        $(document).ready(function(){
            $('.main-header').removeClass('color_change');
            //$('.ht-inner').removeClass('sub_header');
        });
    </script>
    <main id="content">
        <article class="sub_content01" id="startContent">
            <div class="sub_top_view sub7_2_top_view">
                <div class="sub_top_view_bg sub7_2_top_view_bg"></div>
                <div class="sub_top_view_text_wrap sub7_2_top_view_text_wrap ta_c">
                    <div class="sub_top_view_text01 sub7_2_top_view_text01">
                        <p class="sortsmillgoudy fz_30 lh_14 ls_2 sub_text_ani ta_c">
                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub_top_view_text_icon.png" alt="">
                            Men’s Waxing
                        </p>
                    </div>
                    <div class="sub_top_view_text02 sub7_2_top_view_text02 m_20">
                        <p class="fz_40 lh_14 ls_2 medium sub_text_ani">
                            남성수염제모
                        </p>
                    </div>
                    <div class="sub_top_view_text03 sub7_2_top_view_text03">
                        <p class="fz_16 lh_14 ls_2 normal sub_text_ani">
                            강력한 프리미엄 레이저로,
                        </p>
                    </div>
                    <div class="sub_top_view_text04 sub7_2_top_view_text04">
                        <p class="fz_16 lh_14 ls_2 normal sub_text_ani">
                            두껍고 밀도 높은 수염까지 깨끗하게 제거합니다.
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
                <div class="sub_cont_title sub7_2_cont01_title_left title_left">
                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                    <p class="sub_cont_title_text01 fz_32 lh_14 ls_2 light m_40">
                        다른 부위보다 굵고 빽빽한 <br>
                        <span class="medium">남성 수염에 맞춘 섬세한 제모 시술</span>
                    </p>
                    <p class="pc_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 light">
                        남성의 수염은 굵고 밀도가 높아 제모 난이도가 높습니다. <br>
                        인천 오라클피부과는 제모 경험이 풍부한 피부과 전문의가 남성 피부 <br>
                        모근 특성을 고려하여 꼼꼼하고 섬세한 시술로 영구 제모를 진행합니다.
                    </p>
                    <p class="m_cont_434 sub_cont_title_text02 fz_16 lh_16 ls_2 light">
                        남성의 수염은 굵고 밀도가 높아 제모 난이도가 높습니다. <br>
                        인천 오라클피부과는 제모 경험이 풍부한 피부과 전문의가 남성 피부 
                        모근 특성을 고려하여 꼼꼼하고 섬세한 시술로 영구 제모를 진행합니다.
                    </p>
                </div>
                <div class="sub_cont_doct_img sub7_2_cont01_img img_right ta_r">
                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub7_2_cont01_img01.png" alt="">
                </div>
            </div>
        </article>

        <article class="sub_cont_box sub2_1_1_cont1_2_box pd_120">
            <div class="sub_tabcontent_container flex_row fw jc_center al_fs">
                <div class="sub_cont_title sub2_1_1_cont_title_center ta_c">
                    <p class="sub_cont_title_text01 fz_22 lh_14 ls_2 normal gs_reveal" data-gs-delay="200">
                        오라클맨즈
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
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub7_2_ba_slide_img01_b.jpg" alt="">
                                        </div>
                                        <div class="sub2_1_1_ba_slide_img_a <?=($is_member ? '':'blur')?>">
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub7_2_ba_slide_img01_a.jpg" alt="">
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
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub7_2_ba_slide_img02_b.jpg" alt="">
                                        </div>
                                        <div class="sub2_1_1_ba_slide_img_a <?=($is_member ? '':'blur')?>">
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub7_2_ba_slide_img02_a.jpg" alt="">
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
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub7_2_ba_slide_img03_b.jpg" alt="">
                                        </div>
                                        <div class="sub2_1_1_ba_slide_img_a <?=($is_member ? '':'blur')?>">
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub7_2_ba_slide_img03_a.jpg" alt="">
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
            <div class="sub2_1_4_cont3_bg sub7_cont3_bg">
                <div class="sub_tabcontent_container sub7_2_container sub2_5_fd_cr flex_row fw sa center">
                    <div class="sub_cont_title sub7_2_cont03_title_left title_left">
                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                        <p class="sub_cont_title_text02 fz_32 lh_14 ls_2 light m_40 gs_reveal" data-gs-delay="200">
                            면도가 불편했던 분들을 위한 <br>
                            <span class="medium">남성 영구제모</span>
                        </p>
                        <p class="pc_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light gs_reveal" data-gs-delay="400">
                            면도는 모발을 자르는 것으로, 작은 점처럼 자국이 남습니다. <br>
                            또한 면도날에 의해 피부를 손상시키거나 감염의 위험이 있습니다. <br>
                            남성 수염 영구제모는 모낭 자체를 제거하여 자국이 남지 않으며, <br>
                            반복적인 면도에 의한 피부 손상을 방지합니다.
                        </p>
                        <p class="m_cont_434 sub_cont_title_text03 fz_16 lh_16 ls_2 light gs_reveal" data-gs-delay="400">
                            면도는 모발을 자르는 것으로, 작은 점처럼 자국이 남습니다. <br>
                            또한 면도날에 의해 피부를 손상시키거나 감염의 위험이 있습니다. <br>
                            남성 수염 영구제모는 모낭 자체를 제거하여 자국이 남지 않으며, 
                            반복적인 면도에 의한 피부 손상을 방지합니다.
                        </p>
                    </div>
                    <div class="sub_cont_doct_img sub2_5_1_tabcontent03_img img_right p_r ta_r">
                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub7_2_cont03_img01.png" alt="">
                    </div>
                </div>
                
                <div class="sub_tabcontent_container sub7_2_container flex_row fw sa center">
                    <div class="sub_cont_doct_img sub7_2_cont04_img img_left p_r ta_c">
                        <img class="m_10" src="<?php echo G5_THEME_URL?>/sub/img/sub7_2_cont04_img01.png" alt="">
                        <p class="fz_16 lh_1 ls_2 light ta_c">아포지 플러스</p>
                    </div>
                    <div class="sub_cont_title sub7_2_cont_title sub7_2_cont04_title_right title_right">
                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                        <p class="sub_cont_title_text02 fz_32 lh_16 ls_2 normal m_20 gs_reveal" data-gs-delay="200">
                            남성 제모에 특화된 최첨단 레이저, <br>
                            <span class="medium">아포지 플러스</span>
                        </p>
                        <ul class="sub2_8_6_cont03_item_ul fz_17 normal ta_l gs_reveal" data-gs-delay="400">
                            <li>
                                <p>755nm 파장으로 보다 강력한 제모 효과</p>
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
                
                <div class="sub_tabcontent_container sub7_2_container sub7_2_container05 sub2_5_fd_cr flex_row fw sa center">
                    <div class="sub_cont_title sub7_2_cont05_title sub7_2_cont05_title_center ta_l">
                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                        <p class="sub_cont_title_text02 fz_32 lh_14 ls_2 light m_10 gs_reveal" data-gs-delay="200">
                            FDA 승인 <span class="medium">안전한 제모 레이저</span>
                        </p>
                        <p class="sub_cont_title_text03 fz_16 lh_16 ls_2 light gs_reveal m_30" data-gs-delay="400">
                            모발을 태우지 않고 모낭만 제거하여 시술의 부작용을 최소화합니다.
                        </p>
                        <img class="sub7_2_cont05_logo_img" src="<?php echo G5_THEME_URL?>/sub/img/sub7_2_cont05_img01.png" alt="" data-gs-delay="600">
                    </div>
                    <div class="sub_cont_doct_video sub2_5_1_tabcontent03_img img_right p_r ta_r">
                        <div class="video-real-selfie small-video-wrap" style="overflow:hidden;">
                        <div class="video-real-selfie-wrapper" style="position: relative; padding:56.25% 0 0;">
                            <video id="realSelfieVideo" poster="<?php echo G5_THEME_URL?>/sub/img/sub7_2_cont05_video_bg01.jpg" preload="none" style="position: absolute; top:0; left:0; width:100%;"  autoplay muted loop playsinline>
                                <source src="<?php echo G5_THEME_URL?>/video/sub7_2_cont05_video01.mp4" type="video/mp4">
                            </video>
                        </div>
                    </div>
                    </div>
                </div>
                
                <div class="sub_tabcontent_container flex_row fw jc_center al_fs">
                    <div class="sub_cont_title sub7_1_cont03_title_center ta_c">
                        <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                        <p class="sub_cont_title_text02 fz_32 lh_14 ls_2 light m_40 gs_reveal" data-gs-delay="200">
                            이미지를 디자인하는 <br>
                            <span class="medium">오라클 맨즈 프로그램</span>
                        </p>
                        <p class="pc_cont_434 sub_cont_title_text03 fz_16 lh_14 ls_2 light m_80 gs_reveal" data-gs-delay="400">
                            보다 깨끗하게, 보다 젊어 보이게, 보다 부드럽게, 보다 자연스럽게. <br>
                            오라클 맨즈 프로그램은 피부과 전문의 1:1 맞춤 진료로 남성적인 미를 <br>
                            살릴 수 있도록 이미지 개선을 완성합니다.
                        </p>
                        <p class="m_cont_434 sub_cont_title_text03 fz_16 lh_14 ls_2 light m_80 gs_reveal" data-gs-delay="400">
                            보다 깨끗하게, 보다 젊어 보이게, 보다 부드럽게, <br>보다 자연스럽게. 
                            오라클 맨즈 프로그램은 피부과 전문의 1:1 맞춤 진료로 남성적인 미를 
                            살릴 수 있도록 이미지 개선을 완성합니다.
                        </p>
                    </div>
                    <div class="sub7_1_cont05_box flex_row fw se al_fs">
                        <div class="column_quarter">
                            <a href="javascript:void(0);">
                                <div class="sub7_1_cont05_item sub7_1_cont05_item01 flex_row fd_c fw jc_center center">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub7_1_cont05_item01.png" alt="">

                                    <p class="fz_18 ls_2 lh_12 medium flex_row jc_center center">
                                        남성피부관리
                                    </p>
                                </div>
                            </a>
                        </div>
                        <div class="column_quarter">
                            <a href="<?php echo G5_THEME_URL?>/sub/sub7_2.php">
                                <div class="sub7_1_cont05_item sub7_1_cont05_item02 flex_row fd_c fw jc_center center">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub7_1_cont05_item02.png" alt="">

                                    <p class="fz_18 ls_2 lh_12 medium flex_row jc_center center">
                                        남성 제모 <img src="<?php echo G5_THEME_URL?>/sub/img/plus_btn.svg" alt="">
                                    </p>
                                </div>
                            </a>
                        </div>
                        <div class="column_quarter">
                            <a href="<?php echo G5_THEME_URL?>/sub/sub2_4.php">
                                <div class="sub7_1_cont05_item sub7_1_cont05_item03 flex_row fd_c fw jc_center center">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub7_1_cont05_item03.png" alt="">

                                    <p class="fz_18 ls_2 lh_12 medium flex_row jc_center center">
                                        남성 눈성형
                                    </p>
                                </div>
                            </a>
                        </div>
                        <div class="column_quarter">
                            <a href="javascript:void(0);">
                                <div class="sub7_1_cont05_item sub7_1_cont05_item04 flex_row fd_c fw jc_center center">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub7_1_cont05_item04.png" alt="">

                                    <p class="fz_18 ls_2 lh_12 medium flex_row jc_center center">
                                        남성 눈썹정리
                                    </p>
                                </div>
                            </a>
                        </div>
                        <div class="column_quarter">
                            <a href="<?php echo G5_THEME_URL?>/sub/sub7_3.php">
                                <div class="sub7_1_cont05_item sub7_1_cont05_item05 flex_row fd_c fw jc_center center">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub7_1_cont05_item05.png" alt="">

                                    <p class="fz_18 ls_2 lh_12 medium flex_row jc_center center">
                                        남성 여유증수술 <img src="<?php echo G5_THEME_URL?>/sub/img/plus_btn.svg" alt="">
                                    </p>
                                </div>
                            </a>
                        </div>
                        <div class="column_quarter">
                            <a href="#" onclick="sub_page07(1)">
                                <div class="sub7_1_cont05_item sub7_1_cont05_item06 flex_row fd_c fw jc_center center">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub7_1_cont05_item06.png" alt="">

                                    <p class="fz_18 ls_2 lh_12 medium flex_row jc_center center">
                                        남성 탈모관리 <img src="<?php echo G5_THEME_URL?>/sub/img/plus_btn.svg" alt="">
                                    </p>
                                </div>
                            </a>
                        </div>
                        <div class="column_quarter">
                            <a href="<?php echo G5_THEME_URL?>/sub/sub7_4.php">
                                <div class="sub7_1_cont05_item sub7_1_cont05_item07 flex_row fd_c fw jc_center center">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub7_1_cont05_item07.png" alt="">

                                    <p class="fz_18 ls_2 lh_12 medium flex_row jc_center center">
                                        남성 보톡스 <img src="<?php echo G5_THEME_URL?>/sub/img/plus_btn.svg" alt="">
                                    </p>
                                </div>
                            </a>
                        </div>
                        <div class="column_quarter">
                            <a href="<?php echo G5_THEME_URL?>/sub/sub7_5.php">
                                <div class="sub7_1_cont05_item sub7_1_cont05_item08 flex_row fd_c fw jc_center center">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub7_1_cont05_item08.png" alt="">

                                    <p class="fz_18 ls_2 lh_12 medium flex_row jc_center center">
                                        남성 필러 <img src="<?php echo G5_THEME_URL?>/sub/img/plus_btn.svg" alt="">
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </article>

        <article class="sub_cont_box sub2_1_youtube_box pd_120">
            <div class="container-sm flex_row fw jc_center al_fs">
                <div class="sub_cont_title sub2_1_4_cont_title_center ta_c">
                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_cont_text_icon.png" alt="">
                    <p class="sub_cont_title_text01 sortsmillgoudy fz_50 lh_14 ls_2 gs_reveal" data-gs-delay="200">
                        Youtube
                    </p>
                    <p class="sub_cont_title_text02 fz_20 lh_16 ls_2 normal gs_reveal m_60" data-gs-delay="400">
                        피부과 전문의가 직접 들려 주는 <br>
                        <span class="fz_30 ls_2 lh_14 normal">남성 피부</span>
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
