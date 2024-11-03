<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

//if (G5_IS_MOBILE) {
//    include_once(G5_THEME_MOBILE_PATH.'/index.php');
//    return;
//}

add_javascript('<script src="'.G5_THEME_URL.'/js/plugins.js"></script>', 0);

include_once(G5_THEME_PATH.'/head.php');
?>

<main>
    
    <article class="main_cont01" id="startContent">
        <div class="swiper-container main_top_slider" id="main_top_slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide main_slider01">
                    <div class="main_top_slider_img main_top_slider_img01"></div>
                    <div class="main_top_slider_text_wrap main_top_slider_text_wrap01 ta_c">
                        <div class="main_top_slider_text01 m_30">
                            <p class="c-w fz_30 lh_16 ls_2 nanummyeongjo normal">인천 대표 피부과 인천 오라클</p>
                        </div>
                        <div class="main_top_slider_text02 m_40">
                            <p class="m_10">
                                <img src="<?php echo G5_THEME_URL?>/img/main_logo_w.png" alt="">
                            </p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide main_slider02">
                    <div class="main_top_slider_img main_top_slider_img02"></div>
                    <div class="main_top_slider_text_wrap main_top_slider_text_wrap02 ta_l">
                        <div class="main_top_slider_text01 m_40">
                            <p class="c-b fz_42 lh_16 ls_2 nanummyeongjo normal">질환부터 미용까지 <br><span class="semibold">피부에 관한 모든 것</span></p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide main_slider03">
                    <div class="main_top_slider_img main_top_slider_img03"></div>
                    <div class="main_top_slider_text_wrap main_top_slider_text_wrap03 ta_l">
                        <div class="main_top_slider_text01 m_40">
                            <p class="c-b fz_42 lh_16 ls_2 nanummyeongjo normal">자연스럽게 깊어지는 <br><span class="semibold">나만의 아름다움</span></p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide main_slider04">
                    <div class="main_top_slider_img main_top_slider_img04"></div>
                    <div class="main_top_slider_text_wrap main_top_slider_text_wrap04 ta_c">
                        <div class="main_top_slider_text01 m_40">
                            <p class="c-w fz_30 lh_16 ls_2 nanummyeongjo normal">인천 오라클만의 고품격 뷰티 솔루션</p>
                        </div>
                        <div class="main_top_slider_text02 m_40">
                            <p class="main_top_slider04_text">
                                <a href="<?php echo G5_THEME_URL?>/landing/classy.php" target="_blank">
                                    <img class="main_top_slider04_text01" src="<?php echo G5_THEME_URL?>/img/main_logo_04_1_w.png" alt=""><span class="pc_cont_640">&emsp;&emsp;&emsp;</span>
                                    <img class="main_top_slider04_text02" src="<?php echo G5_THEME_URL?>/img/main_logo_04_2_w.png" alt="">
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination main_slider_pagination"></div>
        </div>
        <div class="mouse_scroll main_slide">
            <div class="mouse pc_cont_480">
                <div class="wheel"></div>
            </div>
            <div>
                <span class="m_scroll_arrows m_scroll_arrows_one"></span>
                <span class="m_scroll_arrows m_scroll_arrows_two"></span>
            </div>
        </div>
    </article>

    <article class="main_cont02_wrap p_r sect" id="sect02" data="sect01_m">
        <div class="main_cont02 pc_cont">
            <div class="main_cont02_box main_cont02_box01 ta_c">
                <p class="main_cont02_title01 sortsmillgoudy normal fz_21 lh_16 ls_2 m_10">
                    Incheon Oracle Guide
                </p>
                <p class="main_cont02_title02 nanummyeongjo medium fz_33 lh_16 ls_2 m_80 gs_reveal" data-gs-delay="200">
                    인천 오라클피부과<br>
                    진료과목 안내
                </p>
                <div class="swiper-pagination main_cont02_pagination"></div>
            </div>
            <div class="main_cont02_box main_cont02_box02">
                <div class="swiper-container main_cont02_slider_container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide main_cont02_slider main_cont02_slider01">
                            <div class="main_cont02_slider_box">
                                <div class="main_cont02_slider_img m_30">
                                    <div class="main_cont02_slider_video">
                                        <div class="main_cont02_slider_video_wrapper">
                                            <video id="main_cont02_slider01_Video" poster="<?php echo G5_THEME_URL?>/sub/img/sub2_2_1_cont01_video_bg01.jpg" preload="none" autoplay muted loop playsinline>
                                                <source src="<?php echo G5_THEME_URL?>/video/sub2_2_1_cont01_video01.mp4" type="video/mp4">
                                            </video>
                                        </div>
                                    </div>
                                </div>
                                <div class="main_cont02_slider_list">
                                    <p class="fz_36 ls_2 lh_16 nanummyeongjo medium m_10">
                                        피부미용
                                    </p>
                                    <ul class="main_cont02_slider_list_ul">
                                        <li>
                                            <a href="<?php echo G5_THEME_URL?>/sub/sub2_1.php">
                                                <p class="fz_17 ls_2 lh_16 normal">여드름</p><img src="<?php echo G5_THEME_URL?>/img/main_cont02_link_arrow.svg" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo G5_THEME_URL?>/sub/sub2_2.php">
                                                <p class="fz_17 ls_2 lh_16 normal">미백/홍조</p><img src="<?php echo G5_THEME_URL?>/img/main_cont02_link_arrow.svg" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo G5_THEME_URL?>/sub/sub2_3.php">
                                                <p class="fz_17 ls_2 lh_16 normal">안티에이징</p><img src="<?php echo G5_THEME_URL?>/img/main_cont02_link_arrow.svg" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo G5_THEME_URL?>/sub/sub2_5.php">
                                                <p class="fz_17 ls_2 lh_16 normal">제모/탈모</p><img src="<?php echo G5_THEME_URL?>/img/main_cont02_link_arrow.svg" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo G5_THEME_URL?>/sub/sub2_6.php">
                                                <p class="fz_17 ls_2 lh_16 normal">흉터</p><img src="<?php echo G5_THEME_URL?>/img/main_cont02_link_arrow.svg" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo G5_THEME_URL?>/sub/sub2_10.php">
                                                <p class="fz_17 ls_2 lh_16 normal">튼살지움</p><img src="<?php echo G5_THEME_URL?>/img/main_cont02_link_arrow.svg" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo G5_THEME_URL?>/sub/sub2_7.php">
                                                <p class="fz_17 ls_2 lh_16 normal">문신제거</p><img src="<?php echo G5_THEME_URL?>/img/main_cont02_link_arrow.svg" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo G5_THEME_URL?>/sub/sub2_8.php">
                                                <p class="fz_17 ls_2 lh_16 normal">기타치료</p><img src="<?php echo G5_THEME_URL?>/img/main_cont02_link_arrow.svg" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo G5_THEME_URL?>/sub/sub2_9.php">
                                                <p class="fz_17 ls_2 lh_16 normal">여성진료</p><img src="<?php echo G5_THEME_URL?>/img/main_cont02_link_arrow.svg" alt="">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide main_cont02_slider main_cont02_slider02">
                            <div class="main_cont02_slider_box">
                                <div class="main_cont02_slider_img m_30">
                                    <img src="<?php echo G5_THEME_URL?>/img/main_cont02_slider_img02.png" alt="">
                                </div>
                                <div class="main_cont02_slider_list">
                                    <p class="fz_36 ls_2 lh_16 nanummyeongjo medium m_10">
                                        미용성형
                                    </p>
                                    <ul class="main_cont02_slider_list_ul">
                                        <li>
                                            <a href="<?php echo G5_THEME_URL?>/sub/sub2_4.php?sub_tab=1">
                                                <p class="fz_17 ls_2 lh_16 normal">눈성형</p><img src="<?php echo G5_THEME_URL?>/img/main_cont02_link_arrow.svg" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo G5_THEME_URL?>/sub/sub2_4.php?sub_tab=2">
                                                <p class="fz_17 ls_2 lh_16 normal">상안검/하안검</p><img src="<?php echo G5_THEME_URL?>/img/main_cont02_link_arrow.svg" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo G5_THEME_URL?>/sub/sub2_4.php?sub_tab=3">
                                                <p class="fz_17 ls_2 lh_16 normal">다크써클</p><img src="<?php echo G5_THEME_URL?>/img/main_cont02_link_arrow.svg" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo G5_THEME_URL?>/sub/sub2_4.php?sub_tab=4">
                                                <p class="fz_17 ls_2 lh_16 normal">눈밑지방</p><img src="<?php echo G5_THEME_URL?>/img/main_cont02_link_arrow.svg" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo G5_THEME_URL?>/sub/sub2_4.php?sub_tab=5">
                                                <p class="fz_17 ls_2 lh_16 normal">코성형</p><img src="<?php echo G5_THEME_URL?>/img/main_cont02_link_arrow.svg" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo G5_THEME_URL?>/sub/sub2_4.php?sub_tab=6">
                                                <p class="fz_17 ls_2 lh_16 normal">지방이식</p><img src="<?php echo G5_THEME_URL?>/img/main_cont02_link_arrow.svg" alt="">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide main_cont02_slider main_cont02_slider03">
                            <div class="main_cont02_slider_box">
                                <div class="main_cont02_slider_img m_30">
                                    <div class="main_cont02_slider_video">
                                        <div class="main_cont02_slider_video_wrapper">
                                            <video id="main_cont02_slider03_Video" poster="<?php echo G5_THEME_URL?>/sub/img/sub3_4_cont01_video_bg01.jpg" preload="none" autoplay muted loop playsinline>
                                                <source src="<?php echo G5_THEME_URL?>/video/sub3_4_cont01_video01.mp4" type="video/mp4">
                                            </video>
                                        </div>
                                    </div>
                                </div>
                                <div class="main_cont02_slider_list">
                                    <p class="fz_36 ls_2 lh_16 nanummyeongjo medium m_10">
                                        피부질환
                                    </p>
                                    <ul class="main_cont02_slider_list_ul">
                                        <li class="long_text">
                                            <a href="<?php echo G5_THEME_URL?>/sub/sub3_1.php">
                                                <p class="fz_17 ls_2 lh_16 normal">백반증</p><img src="<?php echo G5_THEME_URL?>/img/main_cont02_link_arrow.svg" alt="">
                                            </a>
                                        </li>
                                        <li class="long_text">
                                            <a href="<?php echo G5_THEME_URL?>/sub/sub3_2.php">
                                                <p class="fz_17 ls_2 lh_16 normal">건선</p><img src="<?php echo G5_THEME_URL?>/img/main_cont02_link_arrow.svg" alt="">
                                            </a>
                                        </li>
                                        <li class="long_text">
                                            <a href="<?php echo G5_THEME_URL?>/sub/sub3_3.php">
                                                <p class="fz_17 ls_2 lh_16 normal">아토피피부염</p><img src="<?php echo G5_THEME_URL?>/img/main_cont02_link_arrow.svg" alt="">
                                            </a>
                                        </li>
                                        <li class="long_text">
                                            <a href="<?php echo G5_THEME_URL?>/sub/sub3_4.php">
                                                <p class="fz_17 ls_2 lh_16 normal">광선치료클리닉</p><img src="<?php echo G5_THEME_URL?>/img/main_cont02_link_arrow.svg" alt="">
                                            </a>
                                        </li>
                                        <li class="long_text">
                                            <a href="<?php echo G5_THEME_URL?>/sub/sub3_5.php">
                                                <p class="fz_17 ls_2 lh_16 normal">사마귀/티눈</p><img src="<?php echo G5_THEME_URL?>/img/main_cont02_link_arrow.svg" alt="">
                                            </a>
                                        </li>
                                        <li class="long_text">
                                            <a href="<?php echo G5_THEME_URL?>/sub/sub3_6.php">
                                                <p class="fz_17 ls_2 lh_16 normal">발톱무좀/손발톱질환</p><img src="<?php echo G5_THEME_URL?>/img/main_cont02_link_arrow.svg" alt="">
                                            </a>
                                        </li>
                                        <li class="long_text">
                                            <a href="<?php echo G5_THEME_URL?>/sub/sub3_7.php">
                                                <p class="fz_17 ls_2 lh_16 normal">원형탈모</p><img src="<?php echo G5_THEME_URL?>/img/main_cont02_link_arrow.svg" alt="">
                                            </a>
                                        </li>
                                        <li class="long_text">
                                            <a href="<?php echo G5_THEME_URL?>/sub/sub3_8.php">
                                                <p class="fz_17 ls_2 lh_16 normal">알레르기/두드러기</p><img src="<?php echo G5_THEME_URL?>/img/main_cont02_link_arrow.svg" alt="">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide main_cont02_slider main_cont02_slider04">
                            <div class="main_cont02_slider_box">
                                <div class="main_cont02_slider_img m_30">
                                    <img src="<?php echo G5_THEME_URL?>/img/main_cont02_slider_img04.png" alt="">
                                </div>
                                <div class="main_cont02_slider_list">
                                    <p class="fz_36 ls_2 lh_16 nanummyeongjo medium m_10">
                                        피부외과
                                    </p>
                                    <ul class="main_cont02_slider_list_ul">
                                        <li class="long_text">
                                            <a href="<?php echo G5_THEME_URL?>/sub/sub5_1.php">
                                                <p class="fz_17 ls_2 lh_16 normal">피부양성종양</p><img src="<?php echo G5_THEME_URL?>/img/main_cont02_link_arrow.svg" alt="">
                                            </a>
                                        </li>
                                        <li class="long_text">
                                            <a href="<?php echo G5_THEME_URL?>/sub/sub5_2.php">
                                                <p class="fz_17 ls_2 lh_16 normal">튀어나온점/큰점/재발점</p><img src="<?php echo G5_THEME_URL?>/img/main_cont02_link_arrow.svg" alt="">
                                            </a>
                                        </li>
                                        <li class="long_text">
                                            <a href="<?php echo G5_THEME_URL?>/sub/sub5_3.php">
                                                <p class="fz_17 ls_2 lh_16 normal">켈로이드수술/흉터교정수술</p><img src="<?php echo G5_THEME_URL?>/img/main_cont02_link_arrow.svg" alt="">
                                            </a>
                                        </li>
                                        <li class="long_text">
                                            <a href="<?php echo G5_THEME_URL?>/sub/sub5_4.php">
                                                <p class="fz_17 ls_2 lh_16 normal">상처치료/화상치료</p><img src="<?php echo G5_THEME_URL?>/img/main_cont02_link_arrow.svg" alt="">
                                            </a>
                                        </li>
                                        <li class="long_text">
                                            <a href="<?php echo G5_THEME_URL?>/sub/sub5_5.php">
                                                <p class="fz_17 ls_2 lh_16 normal">내성발톱.집게발톱 교정</p><img src="<?php echo G5_THEME_URL?>/img/main_cont02_link_arrow.svg" alt="">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide main_cont02_slider main_cont02_slider05">
                            <div class="main_cont02_slider_box">
                                <div class="main_cont02_slider_img m_30">
                                    <img src="<?php echo G5_THEME_URL?>/img/main_cont02_slider_img05.png" alt="">
                                </div>
                                <div class="main_cont02_slider_list">
                                    <p class="fz_36 ls_2 lh_16 nanummyeongjo medium m_10">
                                        피부기능의학
                                    </p>
                                    <ul class="main_cont02_slider_list_ul">
                                        <li class="long_text">
                                            <a href="<?php echo G5_THEME_URL?>/sub/sub4_1.php">
                                                <p class="fz_17 ls_2 lh_16 normal">피부기능의학적검사</p><img src="<?php echo G5_THEME_URL?>/img/main_cont02_link_arrow.svg" alt="">
                                            </a>
                                        </li>
                                        <li class="long_text">
                                            <a href="<?php echo G5_THEME_URL?>/sub/sub4_2.php">
                                                <p class="fz_17 ls_2 lh_16 normal">디톡스/항노화 치료</p><img src="<?php echo G5_THEME_URL?>/img/main_cont02_link_arrow.svg" alt="">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide main_cont02_slider main_cont02_slider06">
                            <div class="main_cont02_slider_box">
                                <div class="main_cont02_slider_img m_30">
                                    <img src="<?php echo G5_THEME_URL?>/img/main_cont02_slider_img06.png" alt="">
                                </div>
                                <div class="main_cont02_slider_list">
                                    <p class="fz_36 ls_2 lh_16 nanummyeongjo medium m_10">
                                        체형교정
                                    </p>
                                    <ul class="main_cont02_slider_list_ul">
                                        <li>
                                            <a href="<?php echo G5_THEME_URL?>/sub/sub6_1.php">
                                                <p class="fz_17 ls_2 lh_16 normal">지방흡입</p><img src="<?php echo G5_THEME_URL?>/img/main_cont02_link_arrow.svg" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo G5_THEME_URL?>/sub/sub6_2.php">
                                                <p class="fz_17 ls_2 lh_16 normal">한컵주사</p><img src="<?php echo G5_THEME_URL?>/img/main_cont02_link_arrow.svg" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo G5_THEME_URL?>/sub/sub6_3.php">
                                                <p class="fz_17 ls_2 lh_16 normal">스컬프슈어</p><img src="<?php echo G5_THEME_URL?>/img/main_cont02_link_arrow.svg" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo G5_THEME_URL?>/sub/sub6_4.php">
                                                <p class="fz_17 ls_2 lh_16 normal">호르몬다이어트</p><img src="<?php echo G5_THEME_URL?>/img/main_cont02_link_arrow.svg" alt="">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-prev main_cont02_prev"></div>
                    <div class="swiper-button-next main_cont02_next"></div>
                </div>
            </div>
        </div>
        
        <div class="main_cont02 m_cont">
            <div class="main_cont02_box main_cont02_box01 ta_c">
                <p class="main_cont02_title01 sortsmillgoudy normal fz_21 lh_16 ls_2 m_10">
                    Incheon Oracle Signature
                </p>
                <p class="main_cont02_title02 nanummyeongjo medium fz_33 lh_16 ls_2 m_80 gs_reveal" data-gs-delay="200">
                    인천 오라클피부과<br>
                    시그니처 프로그램
                </p>
            </div>
            <div class="main_cont02_box main_cont02_box02">
                <div class="swiper-container main_cont02_slider_container_m">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide main_cont02_slider main_cont02_slider01">
                            <div class="main_cont02_slider_box">
                                <div class="main_cont02_slider_img">
                                    <a href="<?php echo G5_THEME_URL?>/sub/sub2_3.php?sub_tab=9" target="_blank">
                                        <img src="<?php echo G5_THEME_URL?>/img/main_cont02_slider_img01_m_230317.png" alt="">
                                    </a>
                                </div>
                                <div class="main_cont02_slider_list">
                                    <p class="ta_c fz_36 ls_2 lh_16 nanummyeongjo medium m_10">
                                        디자인리프팅
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide main_cont02_slider main_cont02_slider02">
                            <div class="main_cont02_slider_box">
                                <div class="main_cont02_slider_img">
                                    <a href="<?php echo G5_THEME_URL?>/sub/sub2_3.php?sub_tab=4" target="_blank">
                                        <img src="<?php echo G5_THEME_URL?>/img/main_cont02_slider_img02_m.png" alt="">
                                    </a>
                                </div>
                                <div class="main_cont02_slider_list">
                                    <p class="ta_c fz_36 ls_2 lh_16 nanummyeongjo medium m_10">
                                        수세럼주사
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide main_cont02_slider main_cont02_slider03">
                            <div class="main_cont02_slider_box">
                                <div class="main_cont02_slider_img">
                                    <a href="<?php echo G5_THEME_URL?>/sub/sub2_1.php" target="_blank">
                                        <img src="<?php echo G5_THEME_URL?>/img/main_cont02_slider_img01_m.png" alt="">
                                    </a>
                                </div>
                                <div class="main_cont02_slider_list">
                                    <p class="ta_c fz_36 ls_2 lh_16 nanummyeongjo medium m_10">
                                        여드름
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide main_cont02_slider main_cont02_slider04">
                            <div class="main_cont02_slider_box">
                                <div class="main_cont02_slider_img">
                                    <a href="<?php echo G5_THEME_URL?>/sub/sub2_2.php" target="_blank">
                                        <img src="<?php echo G5_THEME_URL?>/img/main_cont02_slider_img04_m.png" alt="">
                                    </a>
                                </div>
                                <div class="main_cont02_slider_list">
                                    <p class="ta_c fz_36 ls_2 lh_16 nanummyeongjo medium m_10">
                                        화이트닝
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide main_cont02_slider main_cont02_slider05">
                            <div class="main_cont02_slider_box">
                                <div class="main_cont02_slider_img">
                                    <a href="<?php echo G5_THEME_URL?>/sub/sub2_7.php" target="_blank">
                                        <img src="<?php echo G5_THEME_URL?>/img/main_cont02_slider_img05_m.png" alt="">
                                    </a>
                                </div>
                                <div class="main_cont02_slider_list">
                                    <p class="ta_c fz_36 ls_2 lh_16 nanummyeongjo medium m_10">
                                        문신제거
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide main_cont02_slider main_cont02_slider06">
                            <div class="main_cont02_slider_box">
                                <div class="main_cont02_slider_img">
                                    <a href="<?php echo G5_THEME_URL?>/sub/sub6_1.php" target="_blank">
                                        <img src="<?php echo G5_THEME_URL?>/img/main_cont02_slider_img06_m.png" alt="">
                                    </a>
                                </div>
                                <div class="main_cont02_slider_list">
                                    <p class="ta_c fz_36 ls_2 lh_16 nanummyeongjo medium m_10">
                                        지방흡입
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-prev main_cont02_prev"></div>
                <div class="swiper-button-next main_cont02_next"></div>
            </div>
            <div class="swiper-pagination main_cont02_pagination_m"></div>
        </div>
    </article>
    
    <!-- Javascript를 이용해서 다음 페이지에 파라미터 넘기기 위한 방법 -->
    <script>
        function setChildValue(slide) {
            window.location.href = "<?php echo G5_THEME_URL?>/sub/sub1_7.php?slide=" + slide;
        }
    </script>
    <!-- //Javascript를 이용해서 다음 페이지에 파라미터 넘기기 위한 방법 -->
    <article class="main_cont03 sect" id="sect03" data="sect02_m">
        <div class="main_cont03_title pc_cont">
            <p class="c-w fz_21 sortsmillgoudy normal lh_16 m_20">
                Incheon Oracle Signature
            </p>
            <p class="c-w nanummyeongjo medium fz_32 ls_2 lh_16 gs_reveal" data-gs-delay="200">
                인천오라클피부과 시그니처 프로그램
            </p>
        </div>
        <div class="equipment-sect main-full-sect p_r waypoint pc_cont">
            <ul class="equipment__list flex_row big-cursor">
                <li class="column_quarter column_quarter01 reveal delay-200">
                    <div class="equipment_list_wrap">
                        <div class="equipment__list-inner">
                            <div class="equipment__list-titles ta_l">
                                <a href="<?php echo G5_THEME_URL?>/sub/sub2_3.php?sub_tab=9">
                                    <h3 class="fz_50 lh_16 ls_2 nanummyeongjo normal c-w m_20">디자인 리프팅</h3>
                                    <p class="nothover fz_24 lh_16 ls_2 sortsmillgoudy normal c-w m_30">
                                        Lifting
                                    </p>
                                    <p class="onhover fz_17 lh_16 ls_2 normal c-w m_30">
                                        의술에 예술을 더한 디자인으로 <br>
                                        피부 결과 얼굴 라인을 개선하는 프로그램
                                    </p>
                                    <p class="onhover_1024 fz_17 lh_16 ls_2 normal c-w m_30">
                                        의술에 예술을 더한 디자인으로 
                                        피부 결과 얼굴 라인을 개선하는 프로그램
                                    </p>
                                </a>
                                <a href="<?php echo G5_THEME_URL?>/sub/sub2_3.php?sub_tab=9">
                                    <div class="equipment__list-titles_arrow m_40">
                                        <span class="sortsmillgoudy fz_16 ls_2 lh_1 pc_cont_480">View More</span>
                                        <img class="pc_cont_480" src="<?php echo G5_THEME_URL?>/img/equipment__list-titles_arrow_w.png" alt="">
                                        <img class="m_cont_480" src="<?php echo G5_THEME_URL?>/img/equipment__list-titles_arrow_w_m.png" alt="">
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="column_quarter column_quarter02 reveal delay-400">
                    <div class="equipment_list_wrap" id="equipment_list02_wrap">
                        <div class="equipment__list-inner">
                            <div class="equipment__list-titles ta_l">
                                <a href="<?php echo G5_THEME_URL?>/sub/sub2_3.php?sub_tab=4">
                                    <h3 class="fz_50 lh_16 ls_2 nanummyeongjo normal c-w m_20">수세럼주사</h3>
                                    <p class="nothover fz_24 lh_16 ls_2 sortsmillgoudy normal c-w m_30">
                                        永serum
                                    </p>
                                    <p class="onhover fz_17 lh_16 ls_2 normal c-w m_30">
                                        보습 효과와 하이드로 리프팅 효과를 <br>
                                        한 번에 선사하는 인천 오라클 시그니처
                                    </p>
                                    <p class="onhover_1024 fz_17 lh_16 ls_2 normal c-w m_30">
                                        보습 효과와 하이드로 리프팅 효과를 
                                        한 번에 선사하는 인천 오라클 시그니처
                                    </p>
                                </a>
                                <a href="<?php echo G5_THEME_URL?>/sub/sub2_3.php?sub_tab=4">
                                    <div class="equipment__list-titles_arrow m_40">
                                        <span class="sortsmillgoudy fz_16 ls_2 lh_1 pc_cont_480">View More</span>
                                        <img class="pc_cont_480" src="<?php echo G5_THEME_URL?>/img/equipment__list-titles_arrow_w.png" alt="">
                                        <img class="m_cont_480" src="<?php echo G5_THEME_URL?>/img/equipment__list-titles_arrow_w_m.png" alt="">
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="column_quarter column_quarter03 reveal delay-600">
                    <div class="equipment_list_wrap">
                        <div class="equipment__list-inner">
                            <div class="equipment__list-titles ta_l">
                                <a href="<?php echo G5_THEME_URL?>/sub/sub2_1.php">
                                    <h3 class="fz_50 lh_16 ls_2 nanummyeongjo normal c-w m_20">여드름</h3>
                                    <p class="nothover fz_24 lh_16 ls_2 sortsmillgoudy normal c-w m_30">
                                        Acne
                                    </p>
                                    <p class="onhover fz_17 lh_16 ls_2 normal c-w m_30">
                                        레이저부터 약물 치료, 압출 관리를 통해 <br>
                                        여드름 재발을 방지하는 근본적인 여드름 치료
                                    </p>
                                    <p class="onhover_1024 fz_17 lh_16 ls_2 normal c-w m_30">
                                        레이저부터 약물 치료, 압출 관리를 통해 
                                        여드름 재발을 방지하는 근본적인 여드름 치료
                                    </p>
                                </a>
                                <a href="<?php echo G5_THEME_URL?>/sub/sub2_1.php">
                                    <div class="equipment__list-titles_arrow m_40">
                                        <span class="sortsmillgoudy fz_16 ls_2 lh_1 pc_cont_480">View More</span>
                                        <img class="pc_cont_480" src="<?php echo G5_THEME_URL?>/img/equipment__list-titles_arrow_w.png" alt="">
                                        <img class="m_cont_480" src="<?php echo G5_THEME_URL?>/img/equipment__list-titles_arrow_w_m.png" alt="">
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="column_quarter column_quarter04 reveal delay-800">
                    <div class="equipment_list_wrap">
                        <div class="equipment__list-inner">
                            <div class="equipment__list-titles ta_l">
                                <a href="<?php echo G5_THEME_URL?>/sub/sub6_1.php">
                                    <h3 class="fz_50 lh_16 ls_2 nanummyeongjo normal c-w m_20">지방흡입</h3>
                                    <p class="nothover fz_24 lh_16 ls_2 sortsmillgoudy normal c-w m_30">
                                        Liposuction
                                    </p>
                                    <p class="onhover fz_17 lh_16 ls_2 normal c-w m_30">
                                        지방흡입 전담의의 정확한 초음파 진단, <br>
                                        섬세한 테크닉으로 순수 지방만 제대로 흡입
                                    </p>
                                    <p class="onhover_1024 fz_17 lh_16 ls_2 normal c-w m_30">
                                        지방흡입 전담의의 정확한 초음파 진단, 
                                        섬세한 테크닉으로 순수 지방만 제대로 흡입
                                    </p>
                                </a>
                                <a href="<?php echo G5_THEME_URL?>/sub/sub6_1.php">
                                    <div class="equipment__list-titles_arrow m_40">
                                        <span class="sortsmillgoudy fz_16 ls_2 lh_1 pc_cont_480">View More</span>
                                        <img class="pc_cont_480" src="<?php echo G5_THEME_URL?>/img/equipment__list-titles_arrow_w.png" alt="">
                                        <img class="m_cont_480" src="<?php echo G5_THEME_URL?>/img/equipment__list-titles_arrow_w_m.png" alt="">
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <div class="equipment-menus">
                <div class="equipment-menu-item item_img01"><div class="item_bg item_bg01"></div></div>
                <div class="equipment-menu-item item_img02"><div class="item_bg item_bg02"></div></div>
                <div class="equipment-menu-item item_img03"><div class="item_bg item_bg03"></div></div>
                <div class="equipment-menu-item item_img04"><div class="item_bg item_bg04"></div></div>
            </div>
            <div class="equipment__bg"></div>
        </div>
        
        <div class="equipment-sect main-full-sect p_r waypoint m_cont">
            <ul class="equipment__list flex_row big-cursor">
                <li class="column_quarter column_quarter01 reveal delay-200">
                    <div class="equipment_list_wrap">
                        <div class="equipment__list-inner">
                            <div class="equipment__list-titles ta_c">
                                <a href="javascript:void(0);" class="equipment_text_link" onclick="setChildValue(1)">
                                    <h3 class="fz_50 lh_16 ls_2 nanummyeongjo normal c-w">피부미용</h3>
                                    <p class="fz_24 lh_16 ls_2 normal c-w m_20">
                                        견고한 탄력, 세련된 라인을 완성하는 미용 진료
                                    </p>
                                </a>
                                <a href="javascript:void(0);" onclick="setChildValue(1)">
                                    <div class="equipment__list-titles_arrow">
                                        <img class="pc_cont_480" src="<?php echo G5_THEME_URL?>/img/equipment__list-titles_arrow_w.png" alt="">
                                        <img class="m_cont_480" src="<?php echo G5_THEME_URL?>/img/equipment__list-titles_arrow_w_m.png" alt="">
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="column_quarter column_quarter02 reveal delay-400">
                    <div class="equipment_list_wrap" id="equipment_list02_wrap">
                        <div class="equipment__list-inner">
                            <div class="equipment__list-titles ta_c">
                                <a href="javascript:void(0);" class="equipment_text_link" onclick="setChildValue(3)">
                                    <h3 class="fz_50 lh_16 ls_2 nanummyeongjo normal c-w">미용성형</h3>
                                    <p class="fz_24 lh_16 ls_2 normal c-w m_20">
                                        기능과 심미를 모두 개선하는 성형 수술
                                    </p>
                                </a>
                                <a href="javascript:void(0);" onclick="setChildValue(3)">
                                    <div class="equipment__list-titles_arrow">
                                        <img class="pc_cont_480" src="<?php echo G5_THEME_URL?>/img/equipment__list-titles_arrow_w.png" alt="">
                                        <img class="m_cont_480" src="<?php echo G5_THEME_URL?>/img/equipment__list-titles_arrow_w_m.png" alt="">
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="column_quarter column_quarter03 reveal delay-600">
                    <div class="equipment_list_wrap">
                        <div class="equipment__list-inner">
                            <div class="equipment__list-titles ta_c">
                                <a href="javascript:void(0);" class="equipment_text_link" onclick="setChildValue(2)">
                                    <h3 class="fz_50 lh_16 ls_2 nanummyeongjo normal c-w">피부질환</h3>
                                    <p class="fz_24 lh_16 ls_2 normal c-w m_20">
                                        피부 근본부터 바로잡는 질환 집중 치료
                                    </p>
                                </a>
                                <a href="javascript:void(0);" onclick="setChildValue(2)">
                                    <div class="equipment__list-titles_arrow">
                                        <img class="pc_cont_480" src="<?php echo G5_THEME_URL?>/img/equipment__list-titles_arrow_w.png" alt="">
                                        <img class="m_cont_480" src="<?php echo G5_THEME_URL?>/img/equipment__list-titles_arrow_w_m.png" alt="">
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="column_quarter column_quarter04 reveal delay-800">
                    <div class="equipment_list_wrap">
                        <div class="equipment__list-inner">
                            <div class="equipment__list-titles ta_c">
                                <a href="javascript:void(0);" class="equipment_text_link" onclick="setChildValue(4)">
                                    <h3 class="fz_50 lh_16 ls_2 nanummyeongjo normal c-w">피부외과</h3>
                                    <p class="fz_24 lh_16 ls_2 normal c-w m_20">
                                        피부 종양부터 외상까지 전문적인 피부 수술
                                    </p>
                                </a>
                                <a href="javascript:void(0);" onclick="setChildValue(4)">
                                    <div class="equipment__list-titles_arrow">
                                        <img class="pc_cont_480" src="<?php echo G5_THEME_URL?>/img/equipment__list-titles_arrow_w.png" alt="">
                                        <img class="m_cont_480" src="<?php echo G5_THEME_URL?>/img/equipment__list-titles_arrow_w_m.png" alt="">
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="column_quarter column_quarter05 reveal delay-1000">
                    <div class="equipment_list_wrap">
                        <div class="equipment__list-inner">
                            <div class="equipment__list-titles equipment__list-titles05 ta_c">
                                <a href="javascript:void(0);" class="equipment_text_link" onclick="setChildValue(5)">
                                    <h3 class="fz_50 lh_16 ls_2 nanummyeongjo normal c-w">체형교정</h3>
                                    <p class="fz_24 lh_16 ls_2 normal c-w m_20">
                                        균형있는 몸매를 만들어가는 치료
                                    </p>
                                </a>
                                <a href="javascript:void(0);" onclick="setChildValue(5)">
                                    <div class="equipment__list-titles_arrow">
                                        <img class="pc_cont_480" src="<?php echo G5_THEME_URL?>/img/equipment__list-titles_arrow_w.png" alt="">
                                        <img class="m_cont_480" src="<?php echo G5_THEME_URL?>/img/equipment__list-titles_arrow_w_m.png" alt="">
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <div class="equipment-menus">
                <div class="equipment-menu-item item_img01"><div class="item_bg item_bg01"></div></div>
                <div class="equipment-menu-item item_img02"><div class="item_bg item_bg02"></div></div>
                <div class="equipment-menu-item item_img03"><div class="item_bg item_bg03"></div></div>
                <div class="equipment-menu-item item_img04"><div class="item_bg item_bg04"></div></div>
                <div class="equipment-menu-item item_img05"><div class="item_bg item_bg05"></div></div>
            </div>
            <div class="equipment__bg"></div>
        </div>
    </article>
    
    <article class="main_cont04 sect pd_160" id="sect04" data="sect04_m">
        <div class="main_cont04_box main_cont04_box01 ta_c">
            <p class="main_cont04_title01 sortsmillgoudy normal fz_21 lh_16 ls_2 m_10">
                Incheon Oracle Equipment
            </p>
            <p class="main_cont04_title02 nanummyeongjo medium fz_33 lh_16 ls_2 m_60 gs_reveal" data-gs-delay="200">
                인천오라클피부과 장비 소개
            </p>
        </div>
        <div class="main_cont04_box main_cont04_box02">
            <div class="swiper-pagination main_cont04_pagination"></div>
            <div class="swiper-container main_cont04_slider_container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide main_cont04_slider main_cont04_slider01">
                        <div class="main_cont04_slider_box">
                            <div class="main_cont04_slider_list">
                                <div class="main_cont04_slider_text m_30">
                                    <p class="fz_34 ls_2 lh_16 nanummyeongjo medium">
                                        안티에이징
                                    </p>
                                    <div class="main_cont04_slider_tag">
                                        <p class="main_cont04_slider_tag01 fz_14 ls_2 lh_16 normal">
                                            공통
                                        </p>
                                        <p class="main_cont04_slider_tag02 fz_14 ls_2 lh_16 normal">
                                            구월점
                                        </p>
                                        <p class="main_cont04_slider_tag03 fz_14 ls_2 lh_16 normal">
                                            송도점
                                        </p>
                                    </div>
                                </div>
                                <ul class="main_cont04_slider_list_ul">
                                    <li class="all">
                                        <a href="javascript:void(0);">
                                            <p class="fz_17 ls_2 lh_16 normal">#올리지오</p>
                                        </a>
                                    </li>
                                    <li class="all">
                                        <a href="javascript:void(0);">
                                            <p class="fz_17 ls_2 lh_16 normal">#텐써마</p>
                                        </a>
                                    </li>
                                    <li class="guwol">
                                        <a href="javascript:void(0);">
                                            <p class="fz_17 ls_2 lh_16 normal">#써마지</p>
                                        </a>
                                    </li>
                                    <li class="guwol">
                                        <a href="javascript:void(0);">
                                            <p class="fz_17 ls_2 lh_16 normal">#인모드</p>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="main_cont04_slider_list_ul m_40">
                                    <li class="guwol">
                                        <a href="javascript:void(0);">
                                            <p class="fz_17 ls_2 lh_16 normal">#슈링크</p>
                                        </a>
                                    </li>
                                    <li class="guwol">
                                        <a href="javascript:void(0);">
                                            <p class="fz_17 ls_2 lh_16 normal">#텐쎄라</p>
                                        </a>
                                    </li>
                                    <li class="songdo">
                                        <a href="javascript:void(0);">
                                            <p class="fz_17 ls_2 lh_16 normal">#리니어펌</p>
                                        </a>
                                    </li>
                                </ul>
                                <p class="pc_cont_434 fz_18 ls_2 lh_14 normal">
                                    레이저 장비마다 에너지를 전달하는 <br>
                                    피부층이 다르기 때문에 원인에 맞추어 <br>
                                    개개인에게 필요한 레이저를 복합적으로 사용합니다.
                                </p>
                                <p class="m_cont_434 fz_18 ls_2 lh_14 normal">
                                    레이저 장비마다 에너지를 전달하는 <br>
                                    피부층이 다르기 때문에 원인에 맞추어 <br>
                                    개개인에게 필요한 레이저를 복합적으로 사용합니다.
                                </p>
                                <div class="main_cont04_btn">
                                    <a href="<?php echo G5_THEME_URL?>/sub/sub1_4.php?bo_table=equipment&sfl=ca_name%2C1&&stx=안티에이징#href_id">
                                        <span class="sortsmillgoudy fz_16 ls_2 normal">View More</span>
                                        <img class="nohover" src="<?php echo G5_THEME_URL?>/img/main_cont04_arrow_btn_g.png" alt="">
                                        <img class="hover" src="<?php echo G5_THEME_URL?>/img/main_cont04_arrow_btn_w.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="main_cont04_slider_img">
                                <img src="<?php echo G5_THEME_URL?>/img/main_cont04_slider_img01.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide main_cont04_slider main_cont04_slider02">
                        <div class="main_cont04_slider_box">
                            <div class="main_cont04_slider_list">
                                <div class="main_cont04_slider_text m_30">
                                    <p class="fz_34 ls_2 lh_16 nanummyeongjo medium">
                                        여드름·홍조
                                    </p>
                                    <div class="main_cont04_slider_tag">
                                        <p class="main_cont04_slider_tag01 fz_14 ls_2 lh_16 normal">
                                            공통
                                        </p>
                                        <p class="main_cont04_slider_tag02 fz_14 ls_2 lh_16 normal">
                                            구월점
                                        </p>
                                        <p class="main_cont04_slider_tag03 fz_14 ls_2 lh_16 normal">
                                            송도점
                                        </p>
                                    </div>
                                </div>
                                <ul class="main_cont04_slider_list_ul">
                                    <li class="all">
                                        <a href="javascript:void(0);">
                                            <p class="fz_17 ls_2 lh_16 normal">#시너지</p>
                                        </a>
                                    </li>
                                    <li class="all">
                                        <a href="javascript:void(0);">
                                            <p class="fz_17 ls_2 lh_16 normal">#시크릿</p>
                                        </a>
                                    </li>
                                    <li class="guwol">
                                        <a href="javascript:void(0);">
                                            <p class="fz_17 ls_2 lh_16 normal">#아이콘MAXG</p>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="main_cont04_slider_list_ul m_40">
                                    <li class="guwol">
                                        <a href="javascript:void(0);">
                                            <p class="fz_17 ls_2 lh_16 normal">#브이레이저</p>
                                        </a>
                                    </li>
                                    <li class="guwol">
                                        <a href="javascript:void(0);">
                                            <p class="fz_17 ls_2 lh_16 normal">#네오빔</p>
                                        </a>
                                    </li>
                                    <li class="guwol">
                                        <a href="javascript:void(0);">
                                            <p class="fz_17 ls_2 lh_16 normal">#알레그로</p>
                                        </a>
                                    </li>
                                    <li class="all">
                                        <a href="javascript:void(0);">
                                            <p class="fz_17 ls_2 lh_16 normal">#아그네스</p>
                                        </a>
                                    </li>
                                </ul>
                                <p class="pc_cont_434 fz_18 ls_2 lh_14 normal">
                                    여드름의 근원인 피지를 효과적으로 줄이고 <br>
                                    울긋불긋 홍조를 잡아 깨끗한 피부로 만들어드립니다. <br>
                                    <br>
                                </p>
                                <p class="m_cont_434 fz_18 ls_2 lh_14 normal">
                                    여드름의 근원인 피지를 효과적으로 줄이고 <br>
                                    울긋불긋 홍조를 잡아 깨끗한 피부로 만들어드립니다. 
                                </p>
                                <div class="main_cont04_btn">
                                    <a href="<?php echo G5_THEME_URL?>/sub/sub1_4.php?bo_table=equipment&sfl=ca_name%2C1&&stx=여드름·흉터·모공#href_id">
                                        <span class="sortsmillgoudy fz_16 ls_2 lh_2 normal">View More</span>
                                        <img class="nohover" src="<?php echo G5_THEME_URL?>/img/main_cont04_arrow_btn_g.png" alt="">
                                        <img class="hover" src="<?php echo G5_THEME_URL?>/img/main_cont04_arrow_btn_w.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="main_cont04_slider_img">
                                <img src="<?php echo G5_THEME_URL?>/img/main_cont04_slider_img02.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide main_cont04_slider main_cont04_slider03">
                        <div class="main_cont04_slider_box">
                            <div class="main_cont04_slider_list">
                                <div class="main_cont04_slider_text m_30">
                                    <p class="fz_34 ls_2 lh_16 nanummyeongjo medium">
                                        색소
                                    </p>
                                    <div class="main_cont04_slider_tag">
                                        <p class="main_cont04_slider_tag01 fz_14 ls_2 lh_16 normal">
                                            공통
                                        </p>
                                        <p class="main_cont04_slider_tag02 fz_14 ls_2 lh_16 normal">
                                            구월점
                                        </p>
                                        <p class="main_cont04_slider_tag03 fz_14 ls_2 lh_16 normal">
                                            송도점
                                        </p>
                                    </div>
                                </div>
                                <ul class="main_cont04_slider_list_ul">
                                    <li class="all">
                                        <a href="javascript:void(0);">
                                            <p class="fz_17 ls_2 lh_16 normal">#레블라이트</p>
                                        </a>
                                    </li>
                                    <li class="all">
                                        <a href="javascript:void(0);">
                                            <p class="fz_17 ls_2 lh_16 normal">#10PL</p>
                                        </a>
                                    </li>
                                    <li class="all">
                                        <a href="javascript:void(0);">
                                            <p class="fz_17 ls_2 lh_16 normal">#포토나</p>
                                        </a>
                                    </li>
                                    <li class="guwol">
                                        <a href="javascript:void(0);">
                                            <p class="fz_17 ls_2 lh_16 normal">#파스텔</p>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="main_cont04_slider_list_ul m_40">
                                    <li class="guwol">
                                        <a href="javascript:void(0);">
                                            <p class="fz_17 ls_2 lh_16 normal">#아이콘MAXG</p>
                                        </a>
                                    </li>
                                    <li class="all">
                                        <a href="javascript:void(0);">
                                            <p class="fz_17 ls_2 lh_16 normal">#피코슈어</p>
                                        </a>
                                    </li>
                                    <li class="guwol">
                                        <a href="javascript:void(0);">
                                            <p class="fz_17 ls_2 lh_16 normal">#피코케어</p>
                                        </a>
                                    </li>
                                    <li class="guwol">
                                        <a href="javascript:void(0);">
                                            <p class="fz_17 ls_2 lh_16 normal">#피코스</p>
                                        </a>
                                    </li>
                                </ul>
                                <p class="pc_cont_434 fz_18 ls_2 lh_14 normal">
                                    거뭇거뭇한 기미, 잡티! 지우고 싶은 문신까지 <br>
                                    모두 갖춘 오라클 미백 솔루션 입니다. <br>
                                    <br>
                                </p>
                                <p class="m_cont_434 fz_18 ls_2 lh_14 normal">
                                    거뭇거뭇한 기미, 잡티! 지우고 싶은 문신까지 <br>
                                    모두 갖춘 오라클 미백 솔루션 입니다. 
                                </p>
                                <div class="main_cont04_btn">
                                    <a href="<?php echo G5_THEME_URL?>/sub/sub1_4.php?bo_table=equipment&sfl=ca_name%2C1&&stx=색조·홍조#href_id">
                                        <span class="sortsmillgoudy fz_16 ls_2 lh_2 normal">View More</span>
                                        <img class="nohover" src="<?php echo G5_THEME_URL?>/img/main_cont04_arrow_btn_g.png" alt="">
                                        <img class="hover" src="<?php echo G5_THEME_URL?>/img/main_cont04_arrow_btn_w.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="main_cont04_slider_img">
                                <img src="<?php echo G5_THEME_URL?>/img/main_cont04_slider_img03.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide main_cont04_slider main_cont04_slider04">
                        <div class="main_cont04_slider_box">
                            <div class="main_cont04_slider_list">
                                <div class="main_cont04_slider_text m_30">
                                    <p class="fz_34 ls_2 lh_16 nanummyeongjo medium">
                                        모공·흉터
                                    </p>
                                    <div class="main_cont04_slider_tag">
                                        <p class="main_cont04_slider_tag01 fz_14 ls_2 lh_16 normal">
                                            공통
                                        </p>
                                        <p class="main_cont04_slider_tag02 fz_14 ls_2 lh_16 normal">
                                            구월점
                                        </p>
                                        <p class="main_cont04_slider_tag03 fz_14 ls_2 lh_16 normal">
                                            송도점
                                        </p>
                                    </div>
                                </div>
                                <ul class="main_cont04_slider_list_ul m_40">
                                    <li class="guwol">
                                        <a href="javascript:void(0);">
                                            <p class="fz_17 ls_2 lh_16 normal">#앙코르</p>
                                        </a>
                                    </li>
                                    <li class="guwol">
                                        <a href="javascript:void(0);">
                                            <p class="fz_17 ls_2 lh_16 normal">#아이콘XD</p>
                                        </a>
                                    </li>
                                    <li class="guwol">
                                        <a href="javascript:void(0);">
                                            <p class="fz_17 ls_2 lh_16 normal">#포텐자</p>
                                        </a>
                                    </li>
                                    <li class="songdo">
                                        <a href="javascript:void(0);">
                                            <p class="fz_17 ls_2 lh_16 normal">#씨큐</p>
                                        </a>
                                    </li>
                                    <li class="songdo">
                                        <a href="javascript:void(0);">
                                            <p class="fz_17 ls_2 lh_16 normal">#플리즈망</p>
                                        </a>
                                    </li>
                                </ul>
                                <p class="pc_cont_434 fz_18 ls_2 lh_14 normal">
                                    노화로 인해 늘어진 모공을 개선하고 <br>
                                    피부 흉터를 치료하여 매끈한 피부로 만들어드립니다. <br>
                                    <br>
                                </p>
                                <p class="m_cont_434 fz_18 ls_2 lh_14 normal">
                                    노화로 인해 늘어진 모공을 개선하고 <br>
                                    피부 흉터를 치료하여 매끈한 피부로 만들어드립니다. 
                                </p>
                                <div class="main_cont04_btn">
                                    <a href="<?php echo G5_THEME_URL?>/sub/sub1_4.php?bo_table=equipment&sfl=ca_name%2C1&&stx=여드름·흉터·모공#href_id">
                                        <span class="sortsmillgoudy fz_16 ls_2 lh_2 normal">View More</span>
                                        <img class="nohover" src="<?php echo G5_THEME_URL?>/img/main_cont04_arrow_btn_g.png" alt="">
                                        <img class="hover" src="<?php echo G5_THEME_URL?>/img/main_cont04_arrow_btn_w.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="main_cont04_slider_img">
                                <img src="<?php echo G5_THEME_URL?>/img/main_cont04_slider_img04.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide main_cont04_slider main_cont04_slider05">
                        <div class="main_cont04_slider_box">
                            <div class="main_cont04_slider_list">
                                <div class="main_cont04_slider_text m_30">
                                    <p class="fz_34 ls_2 lh_16 nanummyeongjo medium">
                                        피부질환
                                    </p>
                                    <div class="main_cont04_slider_tag">
                                        <p class="main_cont04_slider_tag01 fz_14 ls_2 lh_16 normal">
                                            공통
                                        </p>
                                        <p class="main_cont04_slider_tag02 fz_14 ls_2 lh_16 normal">
                                            구월점
                                        </p>
                                        <p class="main_cont04_slider_tag03 fz_14 ls_2 lh_16 normal">
                                            송도점
                                        </p>
                                    </div>
                                </div>
                                <ul class="main_cont04_slider_list_ul m_40">
                                    <li class="all">
                                        <a href="javascript:void(0);">
                                            <p class="fz_17 ls_2 lh_16 normal">#엑시머레이저</p>
                                        </a>
                                    </li>
                                    <li class="all">
                                        <a href="javascript:void(0);">
                                            <p class="fz_17 ls_2 lh_16 normal">#엑시머라이트</p>
                                        </a>
                                    </li>
                                    <li class="all">
                                        <a href="javascript:void(0);">
                                            <p class="fz_17 ls_2 lh_16 normal">#광선치료기</p>
                                        </a>
                                    </li>
                                    <li class="all">
                                        <a href="javascript:void(0);">
                                            <p class="fz_17 ls_2 lh_16 normal">#핀포인트</p>
                                        </a>
                                    </li>
                                    <li class="all">
                                        <a href="javascript:void(0);">
                                            <p class="fz_17 ls_2 lh_16 normal">#루눌라</p>
                                        </a>
                                    </li>
                                </ul>
                                <p class="pc_cont_434 fz_18 ls_2 lh_14 normal">
                                    피부과전문의가 안전성과 효과가 입증된 장비들을 엄선하여 <br>
                                    소아도 안심하고 받을 수 있는 질환 치료 레이저입니다. <br>
                                    <br>
                                </p>
                                <p class="m_cont_434 fz_18 ls_2 lh_14 normal">
                                    피부과전문의가 안전성과 효과가 입증된 <br>
                                    장비들을 엄선하여 소아도 안심하고 <br>
                                    받을 수 있는 질환 치료 레이저입니다. 
                                </p>
                                <div class="main_cont04_btn">
                                    <a href="<?php echo G5_THEME_URL?>/sub/sub1_4.php?bo_table=equipment&sfl=ca_name%2C1&&stx=피부질환#href_id">
                                        <span class="sortsmillgoudy fz_16 ls_2 lh_2 normal">View More</span>
                                        <img class="nohover" src="<?php echo G5_THEME_URL?>/img/main_cont04_arrow_btn_g.png" alt="">
                                        <img class="hover" src="<?php echo G5_THEME_URL?>/img/main_cont04_arrow_btn_w.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="main_cont04_slider_img">
                                <img src="<?php echo G5_THEME_URL?>/img/main_cont04_slider_img05.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide main_cont04_slider main_cont04_slider06">
                        <div class="main_cont04_slider_box">
                            <div class="main_cont04_slider_list">
                                <div class="main_cont04_slider_text m_30">
                                    <p class="fz_34 ls_2 lh_16 nanummyeongjo medium">
                                        비만·체형
                                    </p>
                                    <div class="main_cont04_slider_tag">
                                        <p class="main_cont04_slider_tag01 fz_14 ls_2 lh_16 normal">
                                            공통
                                        </p>
                                        <p class="main_cont04_slider_tag02 fz_14 ls_2 lh_16 normal">
                                            구월점
                                        </p>
                                        <p class="main_cont04_slider_tag03 fz_14 ls_2 lh_16 normal">
                                            송도점
                                        </p>
                                    </div>
                                </div>
                                <ul class="main_cont04_slider_list_ul m_40">
                                    <li class="guwol">
                                        <a href="javascript:void(0);">
                                            <p class="fz_17 ls_2 lh_16 normal">#비너스</p>
                                        </a>
                                    </li>
                                    <li class="guwol">
                                        <a href="javascript:void(0);">
                                            <p class="fz_17 ls_2 lh_16 normal">#3MAX</p>
                                        </a>
                                    </li>
                                    <li class="guwol">
                                        <a href="javascript:void(0);">
                                            <p class="fz_17 ls_2 lh_16 normal">#클라투</p>
                                        </a>
                                    </li>
                                    <li class="guwol">
                                        <a href="javascript:void(0);">
                                            <p class="fz_17 ls_2 lh_16 normal">#스컬프슈어</p>
                                        </a>
                                    </li>
                                </ul>
                                <p class="pc_cont_434 fz_18 ls_2 lh_14 normal">
                                    지방 세포를 효과적으로 제거하는 메디컬 스파 다이어트로 <br>
                                    복부, 팔뚝, 허벅지 등 원하는 부위를 집중적으로 관리합니다. <br>
                                    <br>
                                </p>
                                <p class="m_cont_434 fz_18 ls_2 lh_14 normal">
                                    지방 세포를 효과적으로 제거하는 메디컬 스파 <br>
                                    다이어트로 복부, 팔뚝, 허벅지 등 원하는 부위를 <br>
                                    집중적으로 관리합니다.
                                </p>
                                <div class="main_cont04_btn">
                                    <a href="<?php echo G5_THEME_URL?>/sub/sub1_4.php?bo_table=equipment&sfl=ca_name%2C1&&stx=비만·체형#href_id">
                                        <span class="sortsmillgoudy fz_16 ls_2 lh_2 normal">View More</span>
                                        <img class="nohover" src="<?php echo G5_THEME_URL?>/img/main_cont04_arrow_btn_g.png" alt="">
                                        <img class="hover" src="<?php echo G5_THEME_URL?>/img/main_cont04_arrow_btn_w.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="main_cont04_slider_img">
                                <img src="<?php echo G5_THEME_URL?>/img/main_cont04_slider_img06.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide main_cont04_slider main_cont04_slider07">
                        <div class="main_cont04_slider_box">
                            <div class="main_cont04_slider_list">
                                <div class="main_cont04_slider_text m_30">
                                    <p class="fz_34 ls_2 lh_16 nanummyeongjo medium">
                                        제모·탈모
                                    </p>
                                    <div class="main_cont04_slider_tag">
                                        <p class="main_cont04_slider_tag01 fz_14 ls_2 lh_16 normal">
                                            공통
                                        </p>
                                        <p class="main_cont04_slider_tag02 fz_14 ls_2 lh_16 normal">
                                            구월점
                                        </p>
                                        <p class="main_cont04_slider_tag03 fz_14 ls_2 lh_16 normal">
                                            송도점
                                        </p>
                                    </div>
                                </div>
                                <ul class="main_cont04_slider_list_ul m_40">
                                    <li class="all">
                                        <a href="javascript:void(0);">
                                            <p class="fz_17 ls_2 lh_16 normal">#아포지</p>
                                        </a>
                                    </li>
                                    <li class="all">
                                        <a href="javascript:void(0);">
                                            <p class="fz_17 ls_2 lh_16 normal">#메조테라피</p>
                                        </a>
                                    </li>
                                    <li class="guwol">
                                        <a href="javascript:void(0);">
                                            <p class="fz_17 ls_2 lh_16 normal">#헤어셀</p>
                                        </a>
                                    </li>
                                    <li class="guwol">
                                        <a href="javascript:void(0);">
                                            <p class="fz_17 ls_2 lh_16 normal">#미니룩스</p>
                                        </a>
                                    </li>
                                </ul>
                                <p class="pc_cont_434 fz_18 ls_2 lh_14 normal">
                                    미국 FDA허가를 받은 안전하고 강력한 제모 레이저로 깨끗하게, <br>
                                    영양을 전달하고 성장을 촉진하는 레이저로 모발을 건강하게 합니다. <br>
                                    <br>
                                </p>
                                <p class="m_cont_434 fz_18 ls_2 lh_14 normal">
                                    미국 FDA허가를 받은 안전하고 강력한 제모 레이저로 <br>
                                    깨끗하게, 영양을 전달하고 성장을 촉진하는 레이저로 <br>
                                    모발을 건강하게 합니다.
                                </p>
                                <div class="main_cont04_btn">
                                    <a href="<?php echo G5_THEME_URL?>/sub/sub1_4.php?bo_table=equipment&sfl=ca_name%2C1&&stx=제모·탈모#href_id">
                                        <span class="sortsmillgoudy fz_16 ls_2 lh_2 normal">View More</span>
                                        <img class="nohover" src="<?php echo G5_THEME_URL?>/img/main_cont04_arrow_btn_g.png" alt="">
                                        <img class="hover" src="<?php echo G5_THEME_URL?>/img/main_cont04_arrow_btn_w.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="main_cont04_slider_img">
                                <img src="<?php echo G5_THEME_URL?>/img/main_cont04_slider_img07.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide main_cont04_slider main_cont04_slider08">
                        <div class="main_cont04_slider_box">
                            <div class="main_cont04_slider_list">
                                <div class="main_cont04_slider_text m_30">
                                    <p class="fz_34 ls_2 lh_16 nanummyeongjo medium">
                                        관리·진단
                                    </p>
                                    <div class="main_cont04_slider_tag">
                                        <p class="main_cont04_slider_tag01 fz_14 ls_2 lh_16 normal">
                                            공통
                                        </p>
                                        <p class="main_cont04_slider_tag02 fz_14 ls_2 lh_16 normal">
                                            구월점
                                        </p>
                                        <p class="main_cont04_slider_tag03 fz_14 ls_2 lh_16 normal">
                                            송도점
                                        </p>
                                    </div>
                                </div>
                                <ul class="main_cont04_slider_list_ul m_40">
                                    <li class="all">
                                        <a href="javascript:void(0);">
                                            <p class="fz_17 ls_2 lh_16 normal">#LDM</p>
                                        </a>
                                    </li>
                                    <li class="all">
                                        <a href="javascript:void(0);">
                                            <p class="fz_17 ls_2 lh_16 normal">#이온자임</p>
                                        </a>
                                    </li>
                                    <li class="guwol">
                                        <a href="javascript:void(0);">
                                            <p class="fz_17 ls_2 lh_16 normal">#마크뷰</p>
                                        </a>
                                    </li>
                                    <li class="guwol">
                                        <a href="javascript:void(0);">
                                            <p class="fz_17 ls_2 lh_16 normal">#코레지</p>
                                        </a>
                                    </li>
                                    <li class="songdo">
                                        <a href="javascript:void(0);">
                                            <p class="fz_17 ls_2 lh_16 normal">#비지아</p>
                                        </a>
                                    </li>
                                </ul>
                                <p class="pc_cont_434 fz_18 ls_2 lh_14 normal">
                                    알고 싶던 내 피부 타입과 다양한 문제점을 캐치하고 <br>
                                    피부 속의 수분과 영양을 채우는 관리 시스템입니다. <br>
                                    <br>
                                </p>
                                <p class="m_cont_434 fz_18 ls_2 lh_14 normal">
                                    알고 싶던 내 피부 타입과 다양한 문제점을 <br>
                                    캐치하고 피부 속의 수분과 영양을 채우는 <br>
                                    관리 시스템입니다.
                                </p>
                                <div class="main_cont04_btn">
                                    <a href="<?php echo G5_THEME_URL?>/sub/sub1_4.php?bo_table=equipment&sfl=ca_name%2C1&&stx=관리·진단#href_id">
                                        <span class="sortsmillgoudy fz_16 ls_2 lh_2 normal">View More</span>
                                        <img class="nohover" src="<?php echo G5_THEME_URL?>/img/main_cont04_arrow_btn_g.png" alt="">
                                        <img class="hover" src="<?php echo G5_THEME_URL?>/img/main_cont04_arrow_btn_w.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="main_cont04_slider_img">
                                <img src="<?php echo G5_THEME_URL?>/img/main_cont04_slider_img08.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-button-prev main_cont04_prev"></div>
            <div class="swiper-button-next main_cont04_next"></div>
        </div>
    </article>
    
    <article class="main_cont05 sect pd_120" id="sect05">
        <div class="main_cont05_container pc_cont">
            <div class="main_cont05_tabcont_wrap">
                <div class="main_cont05_tab_cont_wrap">
                    <div class="main_cont05_slider_wrap tab_cont01 active">
                        <div class="swiper-container main_cont05_slider_container main_cont05_slider_container_guwol">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide main_cont05_slider main_cont05_slider01">
                                    <div class="main_cont05_slider_img">
                                        <img src="<?php echo G5_THEME_URL?>/img/main_cont05_slider_img01_1.png" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide main_cont05_slider main_cont05_slider01">
                                    <div class="main_cont05_slider_img">
                                        <img src="<?php echo G5_THEME_URL?>/img/main_cont05_slider_img01_2.png" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide main_cont05_slider main_cont05_slider01">
                                    <div class="main_cont05_slider_img">
                                        <img src="<?php echo G5_THEME_URL?>/img/main_cont05_slider_img01_3.png" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide main_cont05_slider main_cont05_slider01">
                                    <div class="main_cont05_slider_img">
                                        <img src="<?php echo G5_THEME_URL?>/img/main_cont05_slider_img01_4.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination main_cont05_swiper_guwol_pagination"></div>
                    </div>
                    
                    <div class="main_cont05_slider_wrap tab_cont02">
                        <div class="swiper-container main_cont05_slider_container main_cont05_slider_container_songdo">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide main_cont05_slider main_cont05_slider01">
                                    <div class="main_cont05_slider_img">
                                        <img src="<?php echo G5_THEME_URL?>/img/main_cont05_slider_img01_1.png" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide main_cont05_slider main_cont05_slider01">
                                    <div class="main_cont05_slider_img">
                                        <img src="<?php echo G5_THEME_URL?>/img/main_cont05_slider_img01_2.png" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide main_cont05_slider main_cont05_slider01">
                                    <div class="main_cont05_slider_img">
                                        <img src="<?php echo G5_THEME_URL?>/img/main_cont05_slider_img01_3.png" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide main_cont05_slider main_cont05_slider01">
                                    <div class="main_cont05_slider_img">
                                        <img src="<?php echo G5_THEME_URL?>/img/main_cont05_slider_img01_4.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination main_cont05_swiper_songdo_pagination"></div>
                    </div>
                </div>
                <div class="main_cont05_tab">
                    <div class="main_cont05_box main_cont05_box01 ta_l">
                        <p class="main_cont05_title01 sortsmillgoudy normal fz_21 lh_16 ls_2 m_20">
                            Incheon Oracle Network
                        </p>
                        <p class="main_cont05_title02 nanummyeongjo medium fz_33 lh_16 ls_2 m_20 gs_reveal" data-gs-delay="200">
                            인천 오라클피부과 네트워크
                        </p>
                        <p class="main_cont05_title02 normal fz_17 lh_16 ls_2 m_80 gs_reveal" data-gs-delay="400">
                            인천 어디서나 좋은 진료를 받을 수 있도록, <br>
                            구월점/송도점 연계 진료 서비스 제공
                        </p>
                    </div>
                    <ul class="main_cont05_tab_list">
                        <li class="main_cont05_tab_li tab_cont01 active gs_reveal" data-gs-delay="200">
                            <a href="javascript:commonTab('main_cont05_tabcont_wrap','tab_cont01');" onclick="main_cont05_slideTo01()">
                                <img src="<?php echo G5_THEME_URL?>/img/main_cont05_tab_li_img01.png" alt="">
                                <p class="fz_22 ls_2 lh_16 normal ta_c">구월점</p>
                            </a>
                            <div class="main_cont05_tab_li_hover">
                                <a href="<?php echo G5_THEME_URL?>/sub/sub1_3_guwol.php" target="_blank">
                                    <p class="fz_16 ls_2 lh_16 medium m_5">바로가기</p>
                                    <img src="<?php echo G5_THEME_URL?>/img/main_cont05_tab_li_hover_arrow.png" alt="">
                                </a>
                            </div>
                        </li>
                        <li class="main_cont05_tab_li tab_cont02 gs_reveal" data-gs-delay="400">
                            <a href="javascript:commonTab('main_cont05_tabcont_wrap','tab_cont02');" onclick="main_cont05_slideTo02()">
                                <img src="<?php echo G5_THEME_URL?>/img/main_cont05_tab_li_img02.png" alt="">
                                <p class="fz_22 ls_2 lh_16 normal ta_c">송도점</p>
                            </a>
                            <div class="main_cont05_tab_li_hover">
                                <a href="<?php echo G5_THEME_URL?>/sub/sub1_3_songdo.php" target="_blank">
                                    <p class="fz_16 ls_2 lh_16 medium m_5">바로가기</p>
                                    <img src="<?php echo G5_THEME_URL?>/img/main_cont05_tab_li_hover_arrow.png" alt="">
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        
        <div class="main_cont05_container m_cont">
            <div class="main_cont05_tabcont_wrap">
                <div class="main_cont05_tab">
                    <div class="main_cont05_box main_cont05_box01 ta_l">
                        <p class="main_cont05_title01 sortsmillgoudy normal fz_21 lh_16 ls_2 m_20">
                            Incheon Oracle Network
                        </p>
                        <p class="main_cont05_title02 nanummyeongjo medium fz_33 lh_16 ls_2 m_20">
                            인천 오라클피부과 네트워크
                        </p>
                        <p class="main_cont05_title02 normal fz_17 lh_16 ls_2 m_80">
                            인천 어디서나 좋은 진료를 받을 수 있도록, <br>
                            구월점/송도점 연계 진료 서비스 제공
                        </p>
                    </div>
                    <ul class="main_cont05_tab_list">
                        <li class="main_cont05_tab_li tab_cont01 active">
                            <a href="<?php echo G5_THEME_URL?>/sub/sub1_3_guwol.php" target="_blank">
                                <img src="<?php echo G5_THEME_URL?>/img/main_cont05_tab_li_img01.png" alt="">
                                <p class="fz_22 ls_2 lh_16 normal ta_c">구월점</p>
                            </a>
                        </li>
                        <li class="main_cont05_tab_li tab_cont02">
                            <a href="<?php echo G5_THEME_URL?>/sub/sub1_3_songdo.php" target="_blank">
                                <img src="<?php echo G5_THEME_URL?>/img/main_cont05_tab_li_img02.png" alt="">
                                <p class="fz_22 ls_2 lh_16 normal ta_c">송도점</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </article>
    
    <article class="main_cont06 sect" id="sect06"  data="sect06_m">
        <div class="main_cont06_wrap">
            <div class="main_cont06_text_wrap">
                <div class="main_cont06_text_box ta_c">
                    <div class="main_cont06_title m_20">
                        <p class="main_cont06_title01 fz_50 ls_2 sortsmillgoudy gs_reveal pc_cont">Oracle YouTube</p>
                        <p class="main_cont06_title01 fz_50 ls_2 lh_1 sortsmillgoudy m_20 gs_reveal m_cont"><span>Oracle YouTube</span><img src="<?php echo G5_THEME_URL?>/img/youtube_icon_m.svg" alt=""></p>
                    </div>
                    <div class="main_cont06_text flex_row sb center m_20">
                        <div class="main_cont06_text01 flex_row jc_fs center gs_reveal" data-gs-delay="300">
                            
                            <p class="fz_17 normal ls_2">
                                <span class="fz_20 sortsmillgoudy">&nbsp;[Youtube]</span>&ensp;피부과 의사는 어떤 시술을 받는지 궁금하시죠?
                            </p>
                        </div>
                        <a href="<?php echo G5_THEME_URL?>/sub/sub1_6.php">
                            <div class="youtube_more_arrow">
                                <img src="<?php echo G5_THEME_URL?>/img/youtube_icon.svg" alt="">&ensp;더보기&ensp;
                                <img src="<?php echo G5_THEME_URL?>/img/youtube_more_btn.png" alt="">&ensp;&emsp;
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="yt-sect-wrapper flex_row jc_center center">
                <div class="yt-video-area">
                    <div class="play-area">
                        <iframe src="https://www.youtube.com/embed/SdndRFxzfS4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                    </div>
                    <div class="yt-video-area-text m_cont">
                        <div class="text-wrap fz_18 ls_2 light btn_arrow btn_arrow2">
                            <p class="m_5 sortsmillgoudy">[Youtube]</p>
                            <div class="m_yt_text_btn flex_row sb center">
                                <a href="<?php echo G5_THEME_URL?>/sub/sub1_6.php" target="_blank">
                                    <p class="yt-tit-target fz_24 lh_13 normal">보톡스+히알루론산+a = 수세럼?? 이거 하나면 동안피부 관리 끝! 다음 주에 얼굴 컨디션 바짝 끌어올러야 한다면 주목해주세요!</p>
                                </a>
                                <a href="<?php echo G5_THEME_URL?>/sub/sub1_6.php">
                                    <div class="youtube_more_arrow">
                                        <img src="<?php echo G5_THEME_URL?>/img/youtube_more_btn.png" alt="">
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="yt-thumb-area pc_cont">
                    <div class="yt-thumb-scroll">
                        <?php echo latest('theme/youtube', 'youtube', 3, 1000); ?>
                    </div>
                </div>
            </div>
        </div>
    </article>
    
    <article class="main_cont07 sect bg_ff" id="sect07"  data="sect07_m">
        <img class="pc_cont_640" src="<?php echo G5_THEME_URL?>/img/main_cont07_bg.jpg" alt="">
        <img class="m_cont_640" src="<?php echo G5_THEME_URL?>/img/main_cont07_bg_m.jpg" alt="">
        <div class="main_cont07_wrap">
            <div class="main_cont07_cont_wrap flex_row fw jc_center al_fs">
                <div class="main_cont07_text main_cont07_text_left title_left">
                    <p class="main_cont07_text01 c-w sortsmillgoudy normal fz_21 lh_16 ls_2 m_30 gs_reveal" data-gs-delay="200">
                        K-Beauty Oracle
                    </p>
                    <p class="main_cont07_text02 c-w fz_40 lh_16 ls_2 nanummyeongjo medium m_50 gs_reveal" data-gs-delay="400">
                        K-Beauty를 선도하는 <br>
                        오라클피부과
                    </p>
                    <ul class="main_cont07_text_ul fz_18 ls_2 normal ta_l gs_reveal" data-gs-delay="600">
                        <li>
                            <p>국내·외 90여개 지점 네트워크</p>
                        </li>
                        <li>
                            <p>2010 외국인 의료관광 유치실적 의원급 1위</p>
                        </li>
                        <li>
                            <p>2015 대한민국 문화관광 산업대상 수상</p>
                        </li>
                        <li>
                            <p>2016 메디컬코리아 '해외진출부문' 보건복지부 장관상 수상</p>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="main_cont07_oracle_icon">
                <div class="main_cont07_oracle_icon_img">
                    <img src="<?php echo G5_THEME_URL?>/img/main_cont07_icon.png" alt="">
                </div>
                <div class="wave -one"></div>
                <div class="wave -two"></div>
                <div class="wave -three"></div>
                <div class="wave -quarter"></div>
            </div>
        </div>
    </article>
    
</main>

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>