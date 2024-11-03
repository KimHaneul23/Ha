<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

//if (G5_IS_MOBILE) {
//    include_once(G5_THEME_MOBILE_PATH.'/tail.php');
//    return;
//}
?>


        <!-- 하단 시작 -->
        <footer class="footer" id="footer">
            <div class="container">
                <div class="foot-info-area flex_row fw jc_fs al_fs">
                    <a href="<?php echo G5_URL?>">
                        <img class="pc_cont" src="<?php echo G5_THEME_URL?>/img/h_logo_w.png" alt="인천오라클피부과">
                        <img class="m_cont" src="<?php echo G5_THEME_URL?>/img/m_h_logo_w.png" alt="인천오라클피부과">
                    </a>
                    <div class="footer_info_links_wrap pc_cont_480">
                        <div class="footer_info_links fz_14 light">
                            <a href="<?php echo G5_BBS_URL?>/content.php?co_id=provision" class="footer-info-link-item">이용약관</a>
                            <a href="<?php echo G5_BBS_URL?>/content.php?co_id=privacy" class="footer-info-link-item">개인정보처리방침</a>
                            <a href="<?php echo G5_BBS_URL?>/content.php?co_id=provision2" class="footer-info-link-item">제3자운영동의약관</a>
                            <a href="<?php echo G5_BBS_URL?>/content.php?co_id=provision3" class="footer-info-link-item">이메일무단수집거부</a>
                            <a href="<?php echo G5_BBS_URL?>/content.php?co_id=nonpay" class="footer-info-link-item">비급여항목안내</a>
                            <!--
                            <a href="javascript:void(0);" class="footer-info-link-item">통합수신거부/해제</a>
                            <a href="javascript:void(0);" class="footer-info-link-item">서식자료실</a>
                            -->
                            <a href="<?php echo G5_BBS_URL?>/content.php?co_id=provision" class="footer-info-link-item">환자권리와의무</a>
                        </div>
                    </div>
                    <div class="footer_info_address_wrap m_cont_480">
                        <div class="footer_info_address m_40">
                            <p class="fz_20 c-w normal ls_2 m_10">인천오라클피부과 구월점</p>
                            <p class="fz_16 c-w light ls_2">대표자 : 이승규 외 2인&emsp;사업자등록번호 : 131-34-15312&emsp;인천시 구월동</p>
                        </div>
                        <div class="footer_info_address">
                            <p class="fz_20 c-w normal ls_2 m_10">인천오라클피부과 송도점</p>
                            <p class="fz_16 c-w light ls_2">대표자 : 이시협&emsp;사업자등록번호 : 408-45-64382&emsp;인천시 송도동</p>
                        </div>
                    </div>
                    <div class="familysite_btn_m m_cont_480">
                        <a href="javascript:void(0);">
                            <p class="fz_20 marcellus">Family Site <span class="footer_arrow_right"></span></p>
                        </a>
                        <ul class="flang-select-list open-on-hover-list">
                            <li><a class="fz_19" href="<?php echo G5_THEME_URL?>/sub/sub1_3_guwol.php" target="_blank" rel="noopener noreferrer">구월점</a></li>
                            <li><a class="fz_19" href="<?php echo G5_THEME_URL?>/sub/sub1_3_songdo.php" target="_blank" rel="noopener noreferrer">송도점</a></li>
                            <li><a class="fz_19" href="https://kuwolskin-en.com/" target="_blank" rel="noopener noreferrer">EN</a></li>
                            <li><a class="fz_19" href="https://kuwolskin-cn.com/" target="_blank" rel="noopener noreferrer">CN</a></li>
                            <li><a class="fz_19" href="https://kuwolskin-ru.com/" target="_blank" rel="noopener noreferrer">RU</a></li>
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
                    <a href="<?php echo G5_BBS_URL?>/content.php?co_id=provision" class="footer-info-link-item">이용약관</a>
                    <a href="<?php echo G5_BBS_URL?>/content.php?co_id=privacy" class="footer-info-link-item">개인정보처리방침</a>
                    <a href="<?php echo G5_BBS_URL?>/content.php?co_id=provision2" class="footer-info-link-item">제3자운영동의약관</a>
                    <a href="<?php echo G5_BBS_URL?>/content.php?co_id=provision3" class="footer-info-link-item">이메일무단수집거부</a>
                    <a href="<?php echo G5_BBS_URL?>/content.php?co_id=nonpay" class="footer-info-link-item">비급여항목안내</a>
                    <!--
                    <a href="javascript:void(0);" class="footer-info-link-item">통합수신거부/해제</a>
                    <a href="javascript:void(0);" class="footer-info-link-item">서식자료실</a>
                    -->
                    <a href="<?php echo G5_BBS_URL?>/content.php?co_id=provision" class="footer-info-link-item">환자권리와의무</a>
                </div>
            </div>
        </footer>
    </div>
    <!-- //smooth-scroll -->
</div>
<!-- //wrap -->

<!-- 스크롤 위치 표시 -->
<div class="percent_wrap">
    <div class="percent" onclick="$('html, body').stop().animate({scrollTop : 0}, 500, 'swing');">
        <div class="fill"></div>
        <div class="topbtn_arrow"></div>
    </div>
</div>
<!-- //스크롤 위치 표시 -->

<!-- 스크롤 시 지점별 카카오톡 상담 버튼 표시 -->
<div class="select_network_kakao m_cont" id="select_network_kakao">
    <div class="select_network_kakao_wrap">
        <span class="wave_m"></span>
        <div class="select_network_kakao_hover flex_row jc_fs center">
            <div class="select_network_kakao_hover_img ta_r flex_row jc_fs center">
                <img class="pc_cont" src="<?php echo G5_THEME_URL?>/img/select_network_kakao_icon_y.png" alt="카카오톡">
                <img class="m_cont" src="<?php echo G5_THEME_URL?>/img/select_network_kakao_icon_y_m.png" alt="카카오톡">
                <span class="ta_c fz_18 lh_1 ls_2 medium">카카오톡 상담</span>
            </div>
        </div>
        <div class="select_network_kakao_btn flex_row jc_fs center">
            <div class="select_network_kakao_img ta_r">
                <img class="pc_cont" src="<?php echo G5_THEME_URL?>/img/select_network_kakao_icon.png" alt="카카오톡">
                <img class="m_cont" src="<?php echo G5_THEME_URL?>/img/select_network_kakao_icon_m.png" alt="카카오톡">
            </div>
            <div class="select_network_kakao_text flex_row jc_fs center">
                <p class="select_network_kakao_text01 ta_c fz_18 c-w lh_1 normal">
                    <a href="https://pf.kakao.com/_VBKhl" target="_blank">
                        구월점
                    </a>
                </p>
                <p class="select_network_kakao_text02 ta_c fz_18 c-w lh_1 normal">
                    <a href="https://pf.kakao.com/_xbTwxnxj" target="_blank">
                        송도점
                    </a>
                </p>
            </div>
        </div>
    </div>
    
    <div class="select_network_online_btn">
        <a href="<?php echo G5_BBS_URL?>/board.php?bo_table=online" target="_blank">
            <img src="<?php echo G5_THEME_URL?>/img/quick_online.svg" alt="온라인상담">
        </a>
    </div>
</div>
<!-- //스크롤 시 지점별 카카오톡 상담 버튼 표시 -->

<!-- quick-menu -->
<div class="quick-wrap open pc_cont" id="quick">
    <ul class="quick-menu">
        <li class="quick_online">
            <a href="<?php echo G5_BBS_URL?>/board.php?bo_table=online" target="_blank">
                <img class="img_w" src="<?php echo G5_THEME_URL?>/img/quick_online.svg" alt="온라인상담">
                <img class="img_g" src="<?php echo G5_THEME_URL?>/img/quick_online_g.svg" alt="온라인상담">
                <p class="fz_15 kopubworlddotum medium">온라인상담</p>
            </a>
        </li>
        <li class="quick_kakao01">
            <a href="https://pf.kakao.com/_VBKhl" target="_blank">
                <img class="img_w" src="<?php echo G5_THEME_URL?>/img/quick_kakao_img01.png" alt="구월점 카톡상담">
                <img class="img_g" src="<?php echo G5_THEME_URL?>/img/quick_kakao_img02.png" alt="구월점 카톡상담">
                <p class="fz_15 kopubworlddotum medium">구월점 카톡상담</p>
            </a>
        </li>
        <li class="quick_kakao02">
            <a href="https://pf.kakao.com/_xbTwxnxj" target="_blank">
                <img class="img_w" src="<?php echo G5_THEME_URL?>/img/quick_kakao_img01.png" alt="송도점 카톡상담">
                <img class="img_g" src="<?php echo G5_THEME_URL?>/img/quick_kakao_img02.png" alt="송도점 카톡상담">
                <p class="fz_15 kopubworlddotum medium">송도점 카톡상담</p>
            </a>
        </li>
        <!--
        <li class="quick_top_btn ta_r pc_cont">
            <a href="javascript:void(0);" onclick="$('html, body').stop().animate({scrollTop : 0}, 500, 'swing');">
                <img src="<?php echo G5_THEME_URL?>/img/topbtn-up-arrow_g.png" alt="top버튼">
            </a>
        </li>
        -->
    </ul>
</div>
<!-- //quick-menu -->

<!-- Start Script -->
<script src="<?php echo G5_THEME_URL?>/plugins/detectBrowser.js"></script>

<!-- Custom JS -->
<script src="<?php echo G5_THEME_URL?>/plugins/gsap/gsap.min.js"></script>
<script src="<?php echo G5_THEME_URL?>/plugins/gsap/ScrollTrigger.min.js"></script>
<script src="<?php echo G5_THEME_URL?>/plugins/gsap/ScrollToPlugin.min.js"></script>
<script src="<?php echo G5_THEME_URL?>/plugins/swiper/swiper-bundle.min.js"></script>
<script src="<?php echo G5_THEME_URL?>/js/common.js"></script>
<script src="<?php echo G5_THEME_URL?>/js/scroll.js"></script>

<?php
if(G5_DEVICE_BUTTON_DISPLAY && !G5_IS_MOBILE) { 
?>
<?php
}

if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<!--  하단 끝 -->



<script>
    $(function() {
        // 폰트 리사이즈 쿠키있으면 실행
        font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
    });
    
    ScrollTrigger.refresh();
</script>

<!--//구글 api 사용을 위한 스크립트-->
<script src="https://apis.google.com/js/platform.js?onload=init" async defer></script>

<?php
include_once(G5_THEME_PATH."/tail.sub.php");
?>