<?php
include_once('./_common.php');
//if (G5_IS_MOBILE) {
//    include_once(G5_MOBILE_PATH.'/index.php');
//    return;
//}

// 웹사이트 타이틀
$g5['title'] = '피부종합진료센터';

include_once(G5_PATH.'/head.php');
?>
    <!-- Javascript를 이용해서 다음 페이지에 파라미터 넘기기 위한 방법 -->
    <script>
        $(document).ready(function(){
            
            //$('.main-header').removeClass('color_change');
            //$('.ht-inner').removeClass('sub_header');
            $('.select_network_kakao').addClass('active');
            $('.percent_wrap').stop().hide();
            
            $('#select_network_kakao').removeClass('end');
            $('#select_network_kakao').removeClass('footer');
            
            var window_width = $(window).width();
            if (window_width <= 480) {
                $('.ht-inner').removeClass('sub_header');
            } else {
                $('.ht-inner').removeClass('sub_header');
            }
            
            var val = location.href.substr(
				location.href.lastIndexOf('=') + 1
			);
            //console.log('val : ' + val);
			if(val == 1){
                sub1_7_main_slider.slideTo(0, 500);
            } else if(val == 2){
                sub1_7_main_slider.slideTo(1, 500);
            } else if(val == 3){
                sub1_7_main_slider.slideTo(2, 500);
            } else if(val == 4){
                sub1_7_main_slider.slideTo(3, 500);
            } else if(val == 5){
                sub1_7_main_slider.slideTo(4, 500);
            }
        });
    </script>
    <!-- //Javascript를 이용해서 다음 페이지에 파라미터 넘기기 위한 방법 -->
    <style>
        /*html, body {
            overflow: hidden !important;
        }*/
        #footer.footer{display:none !important;}
        /*#footer.footer.sub1_7_footer{display:block !important;}*/
        
        .sub1_7_main_slide05{
            overflow-y: hidden;
            transition: 0.6s ease-in-out;
            -webkit-transition: 0.6s ease-in-out;
            -moz-transition: 0.6s ease-in-out;
            -ms-transition: 0.6s ease-in-out;
            -o-transition: 0.6s ease-in-out;
        }
        .sub1_7_main_slide05 #footer.footer.sub1_7_footer{
            display:none !important;
            transition: 0.6s ease-in-out;
            -webkit-transition: 0.6s ease-in-out;
            -moz-transition: 0.6s ease-in-out;
            -ms-transition: 0.6s ease-in-out;
            -o-transition: 0.6s ease-in-out;
        }
        .sub1_7_main_slide05.swiper-slide-active{overflow-y: scroll;}
        .sub1_7_main_slide05.swiper-slide-active #footer.footer.sub1_7_footer{display:block !important;}
    </style>
    <main id="content">
        <article class="sub_content01" id="startContent">
            <div class="swiper-container sub1_7_main_slider" id="sub1_7_main_slider">
                <div class="swiper-wrapper sub1_7_main_slider_wrapper">
                    <div class="swiper-slide sub1_7_main_slide01" id="sub1_7_main_slide01">
                        <div class="sub_top_view sub1_7_top_view01" data-swiper-parallax-y="0%">
                            <div class="sub_top_view_bg sub1_7_top_view_bg01"></div>
                            <div class="sub_top_view_text_wrap sub1_7_top_view_text_wrap ta_l">
                                <div class="pc_cont_480 sub_top_view_text01 sub1_7_top_view_text01">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_top_view_text_icon_w.png" alt="">
                                    <p class="c-w fz_22 lh_14 ls_2 nanummyeongjo normal sub1_7_text_ani">
                                        “피부, 자연스럽게 아름다워지다”
                                    </p>
                                </div>
                                <div class="sub_top_view_text02 sub1_7_top_view_text02 m_20">
                                    <p class="c-w fz_37 lh_16 ls_2 medium sub1_7_text_ani">
                                        피부미용
                                    </p>
                                </div>
                                <div class="pc_cont_480 sub_top_view_text03 sub1_7_top_view_text03">
                                    <p class="c-w fz_15 lh_16 ls_2 normal sub1_7_text_ani">
                                        탄력은 견고하게, 라인은 세련되게. <br>
                                        피부과 전문의가 맞춤형 시술로 자연스러운 아름다움을 되살립니다.
                                    </p>
                                </div>
                            </div>
                            
                            <div class="sub1_7_page_link">
                                <ul class="sub1_7_page_link_ul">
                                    <li class="sub1_7_page_link_li sub1_7_page_link_li01">
                                        <a href="<?php echo G5_THEME_URL?>/sub/sub2_1.php" target="_blank">
                                            <div class="sub1_7_page_link_box flex_row jc_fs center">
                                                <p class="sub1_7_page_link_text fz_18 ls_s lh_16 medium">여드름</p><img src="<?php echo G5_THEME_URL?>/sub/img/sub1_7_page_link_arrow_w.svg" alt="">
                                            </div>
                                        </a>
                                    </li>
                                    <li class="sub1_7_page_link_li sub1_7_page_link_li02">
                                        <a href="<?php echo G5_THEME_URL?>/sub/sub2_2.php" target="_blank">
                                            <div class="sub1_7_page_link_box flex_row jc_fs center">
                                                <p class="sub1_7_page_link_text fz_18 ls_s lh_16 medium">미백/홍조</p><img src="<?php echo G5_THEME_URL?>/sub/img/sub1_7_page_link_arrow_w.svg" alt="">
                                            </div>
                                        </a>
                                    </li>
                                    <li class="sub1_7_page_link_li sub1_7_page_link_li03">
                                        <a href="<?php echo G5_THEME_URL?>/sub/sub2_3.php" target="_blank">
                                            <div class="sub1_7_page_link_box flex_row jc_fs center">
                                                <p class="sub1_7_page_link_text fz_18 ls_s lh_16 medium">안티에이징</p><img src="<?php echo G5_THEME_URL?>/sub/img/sub1_7_page_link_arrow_w.svg" alt="">
                                            </div>
                                        </a>
                                    </li>
                                    <li class="sub1_7_page_link_li sub1_7_page_link_li04">
                                        <a href="<?php echo G5_THEME_URL?>/sub/sub2_4.php" target="_blank">
                                            <div class="sub1_7_page_link_box flex_row jc_fs center">
                                                <p class="sub1_7_page_link_text fz_18 ls_s lh_16 medium">미용성형</p><img src="<?php echo G5_THEME_URL?>/sub/img/sub1_7_page_link_arrow_w.svg" alt="">
                                            </div>
                                        </a>
                                    </li>
                                    <li class="sub1_7_page_link_li sub1_7_page_link_li05">
                                        <a href="<?php echo G5_THEME_URL?>/sub/sub2_5.php" target="_blank">
                                            <div class="sub1_7_page_link_box flex_row jc_fs center">
                                                <p class="sub1_7_page_link_text fz_18 ls_s lh_16 medium">제모/탈모</p><img src="<?php echo G5_THEME_URL?>/sub/img/sub1_7_page_link_arrow_w.svg" alt="">
                                            </div>
                                        </a>
                                    </li>
                                    <li class="sub1_7_page_link_li sub1_7_page_link_li06">
                                        <a href="<?php echo G5_THEME_URL?>/sub/sub2_6.php" target="_blank">
                                            <div class="sub1_7_page_link_box flex_row jc_fs center">
                                                <p class="sub1_7_page_link_text fz_18 ls_s lh_16 medium">흉터</p><img src="<?php echo G5_THEME_URL?>/sub/img/sub1_7_page_link_arrow_w.svg" alt="">
                                            </div>
                                        </a>
                                    </li>
                                    <li class="sub1_7_page_link_li sub1_7_page_link_li07">
                                        <a href="<?php echo G5_THEME_URL?>/sub/sub2_7.php" target="_blank">
                                            <div class="sub1_7_page_link_box flex_row jc_fs center">
                                                <p class="sub1_7_page_link_text fz_18 ls_s lh_16 medium">문신제거</p><img src="<?php echo G5_THEME_URL?>/sub/img/sub1_7_page_link_arrow_w.svg" alt="">
                                            </div>
                                        </a>
                                    </li>
                                    <li class="sub1_7_page_link_li sub1_7_page_link_li08">
                                        <a href="<?php echo G5_THEME_URL?>/sub/sub2_8.php" target="_blank">
                                            <div class="sub1_7_page_link_box flex_row jc_fs center">
                                                <p class="sub1_7_page_link_text fz_18 ls_s lh_16 medium">기타치료</p><img src="<?php echo G5_THEME_URL?>/sub/img/sub1_7_page_link_arrow_w.svg" alt="">
                                            </div>
                                        </a>
                                    </li>
                                    <li class="sub1_7_page_link_li sub1_7_page_link_li09">
                                        <a href="<?php echo G5_THEME_URL?>/sub/sub2_9.php" target="_blank">
                                            <div class="sub1_7_page_link_box flex_row jc_fs center">
                                                <p class="sub1_7_page_link_text fz_18 ls_s lh_16 medium">여성진료</p><img src="<?php echo G5_THEME_URL?>/sub/img/sub1_7_page_link_arrow_w.svg" alt="">
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide sub1_7_main_slide02" id="sub1_7_main_slide02">
                        <div class="sub_top_view sub1_7_top_view02" data-swiper-parallax-y="0%">
                            <div class="sub_top_view_bg sub1_7_top_view_bg02"></div>
                            <div class="sub_top_view_text_wrap sub1_7_top_view_text_wrap ta_l">
                                <div class="pc_cont_480 sub_top_view_text01 sub1_7_top_view_text01">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_top_view_text_icon_w.png" alt="">
                                    <p class="c-w fz_22 lh_14 ls_2 nanummyeongjo normal sub1_7_text_ani">
                                        “피부, 건강하게 되돌리다”
                                    </p>
                                </div>
                                <div class="sub_top_view_text02 sub1_7_top_view_text02 m_20">
                                    <p class="c-w fz_37 lh_16 ls_2 medium sub1_7_text_ani">
                                        피부질환
                                    </p>
                                </div>
                                <div class="pc_cont_480 sub_top_view_text03 sub1_7_top_view_text03">
                                    <p class="c-w fz_15 lh_16 ls_2 normal sub1_7_text_ani">
                                        보편타당하고 검증된 치료를 통해 일정한 결과를 추구합니다.<br>
                                        난치성 피부질환 치료의 오랜여정, 인천 오라클 피부과가 함께하겠습니다.
                                    </p>
                                </div>
                            </div>
                            
                            <div class="sub1_7_page_link">
                                <ul class="sub1_7_page_link_ul">
                                    <li class="sub1_7_page_link_li sub1_7_page_link_li01">
                                        <a href="<?php echo G5_THEME_URL?>/sub/sub3_1.php" target="_blank">
                                            <div class="sub1_7_page_link_box flex_row jc_fs center">
                                                <p class="sub1_7_page_link_text fz_18 ls_s lh_16 medium">백반증</p><img src="<?php echo G5_THEME_URL?>/sub/img/sub1_7_page_link_arrow_w.svg" alt="">
                                            </div>
                                        </a>
                                    </li>
                                    <li class="sub1_7_page_link_li sub1_7_page_link_li02">
                                        <a href="<?php echo G5_THEME_URL?>/sub/sub3_2.php" target="_blank">
                                            <div class="sub1_7_page_link_box flex_row jc_fs center">
                                                <p class="sub1_7_page_link_text fz_18 ls_s lh_16 medium">건선</p><img src="<?php echo G5_THEME_URL?>/sub/img/sub1_7_page_link_arrow_w.svg" alt="">
                                            </div>
                                        </a>
                                    </li>
                                    <li class="sub1_7_page_link_li sub1_7_page_link_li03">
                                        <a href="<?php echo G5_THEME_URL?>/sub/sub3_3.php" target="_blank">
                                            <div class="sub1_7_page_link_box flex_row jc_fs center">
                                                <p class="sub1_7_page_link_text fz_18 ls_s lh_16 medium">아토피피부염</p><img src="<?php echo G5_THEME_URL?>/sub/img/sub1_7_page_link_arrow_w.svg" alt="">
                                            </div>
                                        </a>
                                    </li>
                                    <li class="sub1_7_page_link_li sub1_7_page_link_li04">
                                        <a href="<?php echo G5_THEME_URL?>/sub/sub3_4.php" target="_blank">
                                            <div class="sub1_7_page_link_box flex_row jc_fs center">
                                                <p class="sub1_7_page_link_text fz_18 ls_s lh_16 medium">광선치료클리닉</p><img src="<?php echo G5_THEME_URL?>/sub/img/sub1_7_page_link_arrow_w.svg" alt="">
                                            </div>
                                        </a>
                                    </li>
                                    <li class="sub1_7_page_link_li sub1_7_page_link_li05">
                                        <a href="<?php echo G5_THEME_URL?>/sub/sub3_5.php" target="_blank">
                                            <div class="sub1_7_page_link_box flex_row jc_fs center">
                                                <p class="sub1_7_page_link_text fz_18 ls_s lh_16 medium">사마귀·티눈</p><img src="<?php echo G5_THEME_URL?>/sub/img/sub1_7_page_link_arrow_w.svg" alt="">
                                            </div>
                                        </a>
                                    </li>
                                    <li class="sub1_7_page_link_li sub1_7_page_link_li06">
                                        <a href="<?php echo G5_THEME_URL?>/sub/sub3_6.php" target="_blank">
                                            <div class="sub1_7_page_link_box flex_row jc_fs center">
                                                <p class="sub1_7_page_link_text fz_18 ls_s lh_16 medium">발톱무좀/손발톱질환</p><img src="<?php echo G5_THEME_URL?>/sub/img/sub1_7_page_link_arrow_w.svg" alt="">
                                            </div>
                                        </a>
                                    </li>
                                    <li class="sub1_7_page_link_li sub1_7_page_link_li07">
                                        <a href="<?php echo G5_THEME_URL?>/sub/sub3_7.php" target="_blank">
                                            <div class="sub1_7_page_link_box flex_row jc_fs center">
                                                <p class="sub1_7_page_link_text fz_18 ls_s lh_16 medium">원형탈모</p><img src="<?php echo G5_THEME_URL?>/sub/img/sub1_7_page_link_arrow_w.svg" alt="">
                                            </div>
                                        </a>
                                    </li>
                                    <li class="sub1_7_page_link_li sub1_7_page_link_li08">
                                        <a href="<?php echo G5_THEME_URL?>/sub/sub3_8.php" target="_blank">
                                            <div class="sub1_7_page_link_box flex_row jc_fs center">
                                                <p class="sub1_7_page_link_text fz_18 ls_s lh_16 medium">알레르기·두드러기</p><img src="<?php echo G5_THEME_URL?>/sub/img/sub1_7_page_link_arrow_w.svg" alt="">
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide sub1_7_main_slide03" id="sub1_7_main_slide03">
                        <div class="sub_top_view sub1_7_top_view03" data-swiper-parallax-y="0%">
                            <div class="sub_top_view_bg sub1_7_top_view_bg03"></div>
                            <div class="sub_top_view_text_wrap sub1_7_top_view_text_wrap ta_l">
                                <div class="pc_cont_480 sub_top_view_text01 sub1_7_top_view_text01">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_top_view_text_icon_w.png" alt="">
                                    <p class="c-w fz_22 lh_14 ls_2 nanummyeongjo normal sub1_7_text_ani">
                                        “얼굴, 세련되게 예뻐지다”
                                    </p>
                                </div>
                                <div class="sub_top_view_text02 sub1_7_top_view_text02 m_20">
                                    <p class="c-w fz_37 lh_16 ls_2 medium sub1_7_text_ani">
                                        미용성형
                                    </p>
                                </div>
                                <div class="pc_cont_480 sub_top_view_text03 sub1_7_top_view_text03">
                                    <p class="c-w fz_15 lh_16 ls_2 normal sub1_7_text_ani">
                                        수많은 수술 경험을 기반으로 기능과 심미가 <br>
                                        하나의 조화를 이루는 안전한 성형수술을 진행합니다.
                                    </p>
                                </div>
                            </div>
                            
                            <div class="sub1_7_page_link">
                                <ul class="sub1_7_page_link_ul">
                                    <li class="sub1_7_page_link_li sub1_7_page_link_li01">
                                        <a href="<?php echo G5_THEME_URL?>/sub/sub2_4.php?sub_tab=1" target="_blank">
                                            <div class="sub1_7_page_link_box flex_row jc_fs center">
                                                <p class="sub1_7_page_link_text fz_18 ls_s lh_16 medium">눈성형</p><img src="<?php echo G5_THEME_URL?>/sub/img/sub1_7_page_link_arrow_w.svg" alt="">
                                            </div>
                                        </a>
                                    </li>
                                    <li class="sub1_7_page_link_li sub1_7_page_link_li02">
                                        <a href="<?php echo G5_THEME_URL?>/sub/sub2_4.php?sub_tab=2" target="_blank">
                                            <div class="sub1_7_page_link_box flex_row jc_fs center">
                                                <p class="sub1_7_page_link_text fz_18 ls_s lh_16 medium">상안검·하안검</p><img src="<?php echo G5_THEME_URL?>/sub/img/sub1_7_page_link_arrow_w.svg" alt="">
                                            </div>
                                        </a>
                                    </li>
                                    <li class="sub1_7_page_link_li sub1_7_page_link_li03">
                                        <a href="<?php echo G5_THEME_URL?>/sub/sub2_4.php?sub_tab=3" target="_blank">
                                            <div class="sub1_7_page_link_box flex_row jc_fs center">
                                                <p class="sub1_7_page_link_text fz_18 ls_s lh_16 medium">다크써클</p><img src="<?php echo G5_THEME_URL?>/sub/img/sub1_7_page_link_arrow_w.svg" alt="">
                                            </div>
                                        </a>
                                    </li>
                                    <li class="sub1_7_page_link_li sub1_7_page_link_li04">
                                        <a href="<?php echo G5_THEME_URL?>/sub/sub2_4.php?sub_tab=4" target="_blank">
                                            <div class="sub1_7_page_link_box flex_row jc_fs center">
                                                <p class="sub1_7_page_link_text fz_18 ls_s lh_16 medium">눈밑지방</p><img src="<?php echo G5_THEME_URL?>/sub/img/sub1_7_page_link_arrow_w.svg" alt="">
                                            </div>
                                        </a>
                                    </li>
                                    <li class="sub1_7_page_link_li sub1_7_page_link_li05">
                                        <a href="<?php echo G5_THEME_URL?>/sub/sub2_4.php?sub_tab=5" target="_blank">
                                            <div class="sub1_7_page_link_box flex_row jc_fs center">
                                                <p class="sub1_7_page_link_text fz_18 ls_s lh_16 medium">코성형</p><img src="<?php echo G5_THEME_URL?>/sub/img/sub1_7_page_link_arrow_w.svg" alt="">
                                            </div>
                                        </a>
                                    </li>
                                    <li class="sub1_7_page_link_li sub1_7_page_link_li06">
                                        <a href="<?php echo G5_THEME_URL?>/sub/sub2_4.php?sub_tab=6" target="_blank">
                                            <div class="sub1_7_page_link_box flex_row jc_fs center">
                                                <p class="sub1_7_page_link_text fz_18 ls_s lh_16 medium">지방이식</p><img src="<?php echo G5_THEME_URL?>/sub/img/sub1_7_page_link_arrow_w.svg" alt="">
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide sub1_7_main_slide04" id="sub1_7_main_slide04">
                        <div class="sub_top_view sub1_7_top_view04" data-swiper-parallax-y="0%">
                            <div class="sub_top_view_bg sub1_7_top_view_bg04"></div>
                            <div class="sub_top_view_text_wrap sub1_7_top_view_text_wrap ta_l">
                                <div class="pc_cont_480 sub_top_view_text01 sub1_7_top_view_text01">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_top_view_text_icon_w.png" alt="">
                                    <p class="c-w fz_22 lh_14 ls_2 nanummyeongjo normal sub1_7_text_ani">
                                        “피부, 깔끔하게 복원하다”
                                    </p>
                                </div>
                                <div class="sub_top_view_text02 sub1_7_top_view_text02 m_20">
                                    <p class="c-w fz_37 lh_16 ls_2 medium sub1_7_text_ani">
                                        피부외과
                                    </p>
                                </div>
                                <div class="pc_cont_480 sub_top_view_text03 sub1_7_top_view_text03">
                                    <p class="c-w fz_15 lh_16 ls_2 normal sub1_7_text_ani">
                                        피부 위의 보기 싫은 흉, 최소한의 절개로 깨끗하게 제거합니다. <br>
                                        지워지지 않는 마음의 상처까지 깊이 공감하며 치료합니다.
                                    </p>
                                </div>
                            </div>
                            
                            <div class="sub1_7_page_link">
                                <ul class="sub1_7_page_link_ul">
                                    <li class="sub1_7_page_link_li sub1_7_page_link_li01">
                                        <a href="<?php echo G5_THEME_URL?>/sub/sub5_1.php" target="_blank">
                                            <div class="sub1_7_page_link_box flex_row jc_fs center">
                                                <p class="sub1_7_page_link_text fz_18 ls_s lh_16 medium">피부양성종양</p><img src="<?php echo G5_THEME_URL?>/sub/img/sub1_7_page_link_arrow_w.svg" alt="">
                                            </div>
                                        </a>
                                    </li>
                                    <li class="sub1_7_page_link_li sub1_7_page_link_li02">
                                        <a href="<?php echo G5_THEME_URL?>/sub/sub5_2.php" target="_blank">
                                            <div class="sub1_7_page_link_box flex_row jc_fs center">
                                                <p class="sub1_7_page_link_text fz_18 ls_s lh_16 medium">튀어나온점·큰점·재발점</p><img src="<?php echo G5_THEME_URL?>/sub/img/sub1_7_page_link_arrow_w.svg" alt="">
                                            </div>
                                        </a>
                                    </li>
                                    <li class="sub1_7_page_link_li sub1_7_page_link_li03">
                                        <a href="<?php echo G5_THEME_URL?>/sub/sub5_3.php" target="_blank">
                                            <div class="sub1_7_page_link_box flex_row jc_fs center">
                                                <p class="sub1_7_page_link_text fz_18 ls_s lh_16 medium">켈로이드수술·흉터교정수술</p><img src="<?php echo G5_THEME_URL?>/sub/img/sub1_7_page_link_arrow_w.svg" alt="">
                                            </div>
                                        </a>
                                    </li>
                                    <li class="sub1_7_page_link_li sub1_7_page_link_li04">
                                        <a href="<?php echo G5_THEME_URL?>/sub/sub5_4.php" target="_blank">
                                            <div class="sub1_7_page_link_box flex_row jc_fs center">
                                                <p class="sub1_7_page_link_text fz_18 ls_s lh_16 medium">상처치료·화상치료</p><img src="<?php echo G5_THEME_URL?>/sub/img/sub1_7_page_link_arrow_w.svg" alt="">
                                            </div>
                                        </a>
                                    </li>
                                    <li class="sub1_7_page_link_li sub1_7_page_link_li05">
                                        <a href="<?php echo G5_THEME_URL?>/sub/sub5_5.php" target="_blank">
                                            <div class="sub1_7_page_link_box flex_row jc_fs center">
                                                <p class="sub1_7_page_link_text fz_18 ls_s lh_16 medium">내성발톱·집게발톱 교정</p><img src="<?php echo G5_THEME_URL?>/sub/img/sub1_7_page_link_arrow_w.svg" alt="">
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide sub1_7_main_slide05" id="sub1_7_main_slide05">
                        <div id="footer_id_scroll"></div>
                        <div class="sub_top_view sub1_7_top_view05" data-swiper-parallax-y="0%">
                            <div class="sub_top_view_bg sub1_7_top_view_bg05"></div>
                            <div class="sub_top_view_text_wrap sub1_7_top_view_text_wrap ta_l">
                                <div class="pc_cont_480 sub_top_view_text01 sub1_7_top_view_text01">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/sub_top_view_text_icon_w.png" alt="">
                                    <p class="c-w fz_22 lh_14 ls_2 nanummyeongjo normal sub1_7_text_ani sub1_7_text_ani_remove">
                                        “체형, 균형 있게 탄탄해지다”
                                    </p>
                                </div>
                                <div class="sub_top_view_text02 sub1_7_top_view_text02 m_20">
                                    <p class="c-w fz_37 lh_16 ls_2 medium sub1_7_text_ani sub1_7_text_ani_remove">
                                        체형교정
                                    </p>
                                    
                                </div>
                                <div class="pc_cont_480 sub_top_view_text03 sub1_7_top_view_text03">
                                    <p class="c-w fz_15 lh_16 ls_2 normal sub1_7_text_ani sub1_7_text_ani_remove">
                                        느슨해진 체형을 집중적으로 관리하고, 피부 탄력까지 고려한 시술로 <br>
                                        운동한 것처럼 탄탄하고 균형 잡힌 바디라인을 완성합니다.
                                    </p>
                                </div>
                            </div>
                            
                            <div class="sub1_7_page_link">
                                <ul class="sub1_7_page_link_ul">
                                    <li class="sub1_7_page_link_li sub1_7_page_link_li01">
                                        <a href="<?php echo G5_THEME_URL?>/sub/sub6_1.php" target="_blank">
                                            <div class="sub1_7_page_link_box flex_row jc_fs center">
                                                <p class="sub1_7_page_link_text fz_18 ls_s lh_16 medium">지방흡입</p><img src="<?php echo G5_THEME_URL?>/sub/img/sub1_7_page_link_arrow_w.svg" alt="">
                                            </div>
                                        </a>
                                    </li>
                                    <li class="sub1_7_page_link_li sub1_7_page_link_li02">
                                        <a href="<?php echo G5_THEME_URL?>/sub/sub6_2.php" target="_blank">
                                            <div class="sub1_7_page_link_box flex_row jc_fs center">
                                                <p class="sub1_7_page_link_text fz_18 ls_s lh_16 medium">한컵주사</p><img src="<?php echo G5_THEME_URL?>/sub/img/sub1_7_page_link_arrow_w.svg" alt="">
                                            </div>
                                        </a>
                                    </li>
                                    <li class="sub1_7_page_link_li sub1_7_page_link_li03">
                                        <a href="<?php echo G5_THEME_URL?>/sub/sub6_3.php" target="_blank">
                                            <div class="sub1_7_page_link_box flex_row jc_fs center">
                                                <p class="sub1_7_page_link_text fz_18 ls_s lh_16 medium">스컬프슈어</p><img src="<?php echo G5_THEME_URL?>/sub/img/sub1_7_page_link_arrow_w.svg" alt="">
                                            </div>
                                        </a>
                                    </li>
                                    <li class="sub1_7_page_link_li sub1_7_page_link_li04">
                                        <a href="<?php echo G5_THEME_URL?>/sub/sub6_4.php" target="_blank">
                                            <div class="sub1_7_page_link_box flex_row jc_fs center">
                                                <p class="sub1_7_page_link_text fz_18 ls_s lh_16 medium">호르몬다이어트</p><img src="<?php echo G5_THEME_URL?>/sub/img/sub1_7_page_link_arrow_w.svg" alt="">
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        
                        <footer class="footer sub1_7_footer" id="footer">
                            <div class="container">
                                <div class="foot-info-area flex_row fw jc_fs al_fs">
                                    <a href="<?php echo G5_URL?>">
                                        <img class="pc_cont" src="<?php echo G5_THEME_URL?>/img/h_logo_w.png" alt="인천오라클피부과">
                                        <img class="m_cont" src="<?php echo G5_THEME_URL?>/img/m_h_logo_w.png" alt="인천오라클피부과">
                                    </a>
                                    <div class="footer_info_links_wrap pc_cont_480">
                                        <div class="footer_info_links fz_14 light">
                                            <a href="javascript:void(0);" class="footer-info-link-item">이용약관</a>
                                            <a href="javascript:void(0);" class="footer-info-link-item">개인정보처리방침</a>
                                            <a href="javascript:void(0);" class="footer-info-link-item">제3자운영동의약관</a>
                                            <a href="javascript:void(0);" class="footer-info-link-item">이메일무단수집거부</a>
                                            <a href="javascript:void(0);" class="footer-info-link-item">비급여항목안내</a>
                                            <a href="javascript:void(0);" class="footer-info-link-item">통합수신거부/해제</a>
                                            <a href="javascript:void(0);" class="footer-info-link-item">서식자료실</a>
                                            <a href="javascript:void(0);" class="footer-info-link-item">환자권리와의무</a>
                                        </div>
                                    </div>
                                    <div class="footer_info_address_wrap m_cont_480">
                                        <div class="footer_info_address m_40">
                                            <p class="fz_20 c-w normal ls_2 m_10">인천오라클피부과 구월점</p>
                                            <p class="fz_16 c-w light ls_2">대표자 : &emsp;&emsp;사업자등록번호 : 000-00-0000&emsp;인천시 구월동</p>
                                        </div>
                                        <div class="footer_info_address">
                                            <p class="fz_20 c-w normal ls_2 m_10">인천오라클피부과 송도점</p>
                                            <p class="fz_16 c-w light ls_2">대표자 : &emsp;&emsp;사업자등록번호 : 000-00-0000&emsp;인천시 송도점</p>
                                        </div>
                                    </div>
                                    <div class="familysite_btn_m m_cont_480">
                                        <a href="javascript:void(0);">
                                            <p class="fz_20 marcellus">Family Site <span class="footer_arrow_right"></span></p>
                                        </a>
                                        <ul class="flang-select-list open-on-hover-list">
                                            <li><a class="fz_19" href="javascript:void(0);" target="_blank" rel="noopener noreferrer">구월점</a></li>
                                            <li><a class="fz_19" href="javascript:void(0);" target="_blank" rel="noopener noreferrer">송도점</a></li>
                                            <li><a class="fz_19" href="javascript:void(0);" target="_blank" rel="noopener noreferrer">EN</a></li>
                                            <li><a class="fz_19" href="javascript:void(0);" target="_blank" rel="noopener noreferrer">CN</a></li>
                                            <li><a class="fz_19" href="javascript:void(0);" target="_blank" rel="noopener noreferrer">RU</a></li>
                                        </ul> 
                                    </div>
                                </div>
                            </div>
                            <div class="footer_bottom pc_cont_480">
                                <div class="footer_bottom_wrap flex_row fw jc_center al_fe">
                                    <div class="footer_bottom_box01">
                                        <p class="fz_14 lh_1 ta_c sortsmillgoudy">Copyright  Incheon ORACLE. All rights reserved</p>
                                    </div>
                                </div>
                            </div>
                            <div class="footer_info_links_wrap m_cont_480">
                                <div class="footer_info_links fz_14 light">
                                    <a href="javascript:void(0);" class="footer-info-link-item">이용약관</a>
                                    <a href="javascript:void(0);" class="footer-info-link-item">개인정보처리방침</a>
                                    <a href="javascript:void(0);" class="footer-info-link-item">제3자운영동의약관</a>
                                    <a href="javascript:void(0);" class="footer-info-link-item">이메일무단수집거부</a>
                                    <a href="javascript:void(0);" class="footer-info-link-item">비급여항목안내</a>
                                    <a href="javascript:void(0);" class="footer-info-link-item">통합수신거부/해제</a>
                                    <a href="javascript:void(0);" class="footer-info-link-item">서식자료실</a>
                                    <a href="javascript:void(0);" class="footer-info-link-item">환자권리와의무</a>
                                </div>
                            </div>
                        </footer>
                    </div>
                    <!-- 
                    <div class="swiper-slide sub1_7_main_slide06" id="footerHeight">
                        <footer class="footer sub1_7_footer" id="footer">
                            <div class="container">
                                <div class="foot-info-area flex_row fw jc_fs al_fs">
                                    <a href="<?php echo G5_URL?>">
                                        <img class="pc_cont" src="<?php echo G5_THEME_URL?>/img/h_logo_w.png" alt="인천오라클피부과">
                                        <img class="m_cont" src="<?php echo G5_THEME_URL?>/img/m_h_logo_w.png" alt="인천오라클피부과">
                                    </a>
                                    <div class="footer_info_links_wrap pc_cont_480">
                                        <div class="footer_info_links fz_14 light">
                                            <a href="javascript:void(0);" class="footer-info-link-item">이용약관</a>
                                            <a href="javascript:void(0);" class="footer-info-link-item">개인정보처리방침</a>
                                            <a href="javascript:void(0);" class="footer-info-link-item">제3자운영동의약관</a>
                                            <a href="javascript:void(0);" class="footer-info-link-item">이메일무단수집거부</a>
                                            <a href="javascript:void(0);" class="footer-info-link-item">비급여항목안내</a>
                                            <a href="javascript:void(0);" class="footer-info-link-item">통합수신거부/해제</a>
                                            <a href="javascript:void(0);" class="footer-info-link-item">서식자료실</a>
                                            <a href="javascript:void(0);" class="footer-info-link-item">환자권리와의무</a>
                                        </div>
                                    </div>
                                    <div class="footer_info_address_wrap m_cont_480">
                                        <div class="footer_info_address m_40">
                                            <p class="fz_20 c-w normal ls_2 m_10">인천오라클피부과 구월점</p>
                                            <p class="fz_16 c-w light ls_2">대표자 : &emsp;&emsp;사업자등록번호 : 000-00-0000&emsp;인천시 구월동</p>
                                        </div>
                                        <div class="footer_info_address">
                                            <p class="fz_20 c-w normal ls_2 m_10">인천오라클피부과 송도점</p>
                                            <p class="fz_16 c-w light ls_2">대표자 : &emsp;&emsp;사업자등록번호 : 000-00-0000&emsp;인천시 송도점</p>
                                        </div>
                                    </div>
                                    <div class="familysite_btn_m m_cont_480">
                                        <a href="javascript:void(0);">
                                            <p class="fz_20 marcellus">Family Site <span class="footer_arrow_right"></span></p>
                                        </a>
                                        <ul class="flang-select-list open-on-hover-list">
                                            <li><a class="fz_19" href="javascript:void(0);" target="_blank" rel="noopener noreferrer">구월점</a></li>
                                            <li><a class="fz_19" href="javascript:void(0);" target="_blank" rel="noopener noreferrer">송도점</a></li>
                                            <li><a class="fz_19" href="javascript:void(0);" target="_blank" rel="noopener noreferrer">EN</a></li>
                                            <li><a class="fz_19" href="javascript:void(0);" target="_blank" rel="noopener noreferrer">CN</a></li>
                                            <li><a class="fz_19" href="javascript:void(0);" target="_blank" rel="noopener noreferrer">RU</a></li>
                                        </ul> 
                                    </div>
                                </div>
                            </div>
                            <div class="footer_bottom pc_cont_480">
                                <div class="footer_bottom_wrap flex_row fw jc_center al_fe">
                                    <div class="footer_bottom_box01">
                                        <p class="fz_14 lh_1 ta_c sortsmillgoudy">Copyright  Incheon ORACLE. All rights reserved</p>
                                    </div>
                                </div>
                            </div>
                            <div class="footer_info_links_wrap m_cont_480">
                                <div class="footer_info_links fz_14 light">
                                    <a href="javascript:void(0);" class="footer-info-link-item">이용약관</a>
                                    <a href="javascript:void(0);" class="footer-info-link-item">개인정보처리방침</a>
                                    <a href="javascript:void(0);" class="footer-info-link-item">제3자운영동의약관</a>
                                    <a href="javascript:void(0);" class="footer-info-link-item">이메일무단수집거부</a>
                                    <a href="javascript:void(0);" class="footer-info-link-item">비급여항목안내</a>
                                    <a href="javascript:void(0);" class="footer-info-link-item">통합수신거부/해제</a>
                                    <a href="javascript:void(0);" class="footer-info-link-item">서식자료실</a>
                                    <a href="javascript:void(0);" class="footer-info-link-item">환자권리와의무</a>
                                </div>
                            </div>
                        </footer>
                    </div>
                    -->
                </div>
                <div class="swiper-pagination sub1_7_slider_pagination"></div>
            </div>
        </article>
        
    </main>
    <!-- //main -->
    
<?php
include_once(G5_PATH.'/tail.php');
?>


<script>
    $(window).on('load', function(){
        $('#select_network_kakao').removeClass('end');
        $('#select_network_kakao').removeClass('footer');
    });
</script>