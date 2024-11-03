<?php
include_once('./_common.php');
//if (G5_IS_MOBILE) {
//    include_once(G5_MOBILE_PATH.'/index.php');
//    return;
//}

// 웹사이트 타이틀
$g5['title'] = '지점소개';

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
            
            $('.sub1_3_jijeom_guwol_bg, .jijeom_guwol_text').hover(function(){
                $('.sub1_3_jijeom_guwol').stop().addClass('hover');
            }, function(){
                $('.sub1_3_jijeom_guwol').stop().removeClass('hover');
            });
            $('.sub1_3_jijeom_songdo_bg, .jijeom_songdo_text').hover(function(){
                $('.sub1_3_jijeom_songdo').stop().addClass('hover');
            }, function(){
                $('.sub1_3_jijeom_songdo').stop().removeClass('hover');
            });
        });
    </script>
    <main id="content">
        <article class="sub_content01" id="startContent">
            <div class="sub_top_view sub1_3_top_view">
                <div class="sub_top_view_bg sub1_3_top_view_bg"></div>
                <div class="sub_top_view_text_wrap sub1_3_top_view_text_wrap ta_c">
                    <div class="sub_top_view_text01 sub1_3_top_view_text01">
                        <p class="fz_20 lh_14 ls_2 normal sub_text_ani ta_c">
                            인천 오라클피부과
                        </p>
                    </div>
                    <div class="sub_top_view_text02 sub1_3_top_view_text02 m_20">
                        <p class="fz_40 lh_16 ls_2 ta_c nanummyeongjo medium sub_text_ani">
                            지점소개
                        </p>
                    </div>
                    <div class="sub_top_view_text03 sub1_3_top_view_text03">
                        <p class="fz_16 lh_16 ls_2 ta_c normal sub_text_ani">
                            인천 오라클만의 연계 진료 서비스로 <br>
                            더 체계적인 진료를 제공합니다.
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
           
        <article class="sub_cont02 sub1_3_cont02">
            <div class="sub1_3_jijeom_wrap flex_row fw jc_center center">
                <div class="sub1_3_jijeom sub1_3_jijeom_guwol">
                    <div class="sub1_3_jijeom_guwol_bg pc_cont">
                        <a href="sub1_3_guwol.php">
                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub1_3_jijeom_guwol.jpg" alt="">
                        </a>
                    </div>
                    <div class="sub1_3_jijeom_guwol_bg m_cont">
                        <a href="sub1_3_guwol.php">
                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub1_3_jijeom_guwol_m.jpg" alt="">
                        </a>
                    </div>
                    <div class="jijeom_text jijeom_guwol_text">
                        <a href="sub1_3_guwol.php" class="pc_cont">
                            <div class="jijeom_text_01 flex_row jc_fs center m_10">
                                <p class="jijeom_name c-b fz_30 lh_1 ls_2 normal">구월점</p>
                                <p class="jijeom_more_btn jijeom01_more_btn fz_15 lh_1 ls_2 light flex_row jc_center center">자세히보기&ensp;<img src="<?php echo G5_THEME_URL?>/sub/img/arrow_right_b.svg" alt=""></p>
                            </div>
                            <div class="jijeom_text_02">
                                <p class="c-b fz_60 lh_14 ls_2 sortsmillgoudy normal">Guwol</p>
                            </div>
                        </a>
                        <a href="sub1_3_guwol.php" class="m_cont">
                            <div class="jijeom_text_01 ta_c m_40">
                                <p class="jijeom_name c-w fz_22 lh_16 ls_2 normal">인전오라클피부과</p>
                                <p class="jijeom_name c-w fz_45 lh_16 ls_2 medium nanummyeongjo">구월점 안내</p>
                            </div>
                            <div class="jijeom_text_02 ta_c">
                                <p class="c-w fz_22 lh_1 ls_2 normal">바로가기</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="sub1_3_jijeom sub1_3_jijeom_songdo">
                    <div class="sub1_3_jijeom_songdo_bg pc_cont">
                        <a href="sub1_3_songdo.php">
                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub1_3_jijeom_songdo.jpg" alt="">
                        </a>
                    </div>
                    <div class="sub1_3_jijeom_songdo_bg m_cont">
                        <a href="sub1_3_songdo.php">
                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub1_3_jijeom_songdo_m.jpg" alt="">
                        </a>
                    </div>
                    <div class="jijeom_text jijeom_songdo_text">
                        <a href="sub1_3_songdo.php" class="pc_cont">
                            <div class="jijeom_text_01 flex_row jc_fs center m_10">
                                <p class="jijeom_name c-b fz_30 lh_1 ls_2 normal">송도점</p>
                                <p class="jijeom_more_btn jijeom01_more_btn fz_15 lh_1 ls_2 light flex_row jc_center center">자세히보기&ensp;<img src="<?php echo G5_THEME_URL?>/sub/img/arrow_right_b.svg" alt=""></p>
                            </div>
                            <div class="jijeom_text_02">
                                <p class="c-b fz_60 lh_14 ls_2 sortsmillgoudy normal">Songdo</p>
                            </div>
                        </a>
                        <a href="sub1_3_songdo.php" class="m_cont">
                            <div class="jijeom_text_01 ta_c m_40">
                                <p class="jijeom_name c-w fz_22 lh_16 ls_2 normal">인전오라클피부과</p>
                                <p class="jijeom_name c-w fz_45 lh_16 ls_2 medium nanummyeongjo">송도점 안내</p>
                            </div>
                            <div class="jijeom_text_02 ta_c">
                                <p class="c-w fz_22 lh_1 ls_2 normal">바로가기</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </article>
        
    </main>
    <!-- //main -->
    
<?php
include_once(G5_PATH.'/tail.php');
?>