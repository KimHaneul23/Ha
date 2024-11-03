<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

//if (G5_IS_MOBILE) {
//    include_once(G5_THEME_MOBILE_PATH.'/tail.php');
//    return;
//}
?>


    <!-- 하단 시작 { -->
    <footer class="footer pc_cont_960" id="footer">
        <div class="ft_inner <?=(defined('_INDEX_') ? 'ft_inner_main':'')?>">
            <div class="ft_info_wrap">
                <ul class="ft_info ft_info01 fz_14 kopubworlddotum normal">
                    <li>ⓒ 2024 INTERSEOUL DENTAL CLINIC.</li>
                    <li class="txt02 semibold">인터서울치과의원</li>
                </ul>
                <ul class="ft_info ft_info02 fz_14 kopubworlddotum normal">
                    <li>사업자등록번호&ensp;106-12-82943</li>
                    <li>대표자&ensp;이창훈</li>
                    <li>info@interseoul.com</li>
                </ul>
            </div>
            <div class="f_logo">
                <img src="<?php echo G5_THEME_URL?>/img/f_logo_b.png" alt="인터서울치과">
            </div>
            <div class="footer_info_links fz_14 kopubworlddotum normal">
                <a href="<?php echo G5_URL?>/bbs/content.php?co_id=provision" class="footer-info-link-item">이용약관</a>
                <a href="<?php echo G5_URL?>/bbs/content.php?co_id=privacy" class="footer-info-link-item">개인정보취급방침</a>
                <a href="<?php echo G5_URL?>/bbs/content.php?co_id=nonpay" class="footer-info-link-item">비급여항목안내</a>
            </div>
        </div>
    </footer>
    <footer class="footer m_cont_960" id="footer">
        <div class="ft_inner <?=(defined('_INDEX_') ? 'ft_inner_main':'')?>">
            <div class="f_logo">
                <img src="<?php echo G5_THEME_URL?>/img/f_logo_b_m.png" alt="인터서울치과">
            </div>
            <div class="footer_info_links fz_16 kopubworlddotum normal">
                <a href="<?php echo G5_URL?>/bbs/content.php?co_id=provision" class="footer-info-link-item">이용약관</a>
                <a href="<?php echo G5_URL?>/bbs/content.php?co_id=privacy" class="footer-info-link-item">개인정보취급방침</a>
                <a href="<?php echo G5_URL?>/bbs/content.php?co_id=nonpay" class="footer-info-link-item">비급여항목안내</a>
            </div>
            <div class="ft_info_wrap">
                <ul class="ft_info ft_info01 fz_16 kopubworlddotum normal">
                    <li>사업자등록번호&ensp;106-12-82943</li>
                    <li>대표자&ensp;이창훈</li>
                    <li>info@interseoul.com</li>
                </ul>
                <ul class="ft_info ft_info02 fz_16 kopubworlddotum normal">
                    <li>ⓒ 2024 INTERSEOUL DENTAL CLINIC.</li>
                    <li class="txt02 semibold">인터서울치과의원</li>
                </ul>
                <ul class="ft_info ft_info02 fz_16 kopubworlddotum normal">
                    <li>
                        <a href="http://www.fineappleptl.com/" target="_blank">
                            Designed by. FINEAPPLE PTL.
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>
    
    <!-- 지디웹 수상 - s -->
    <div class="gdweb_box_wrap pc_cont_960">
        <div class="gdweb_box">
            <i class="gdweb_icon"></i>
            <p class="txt01 fz_14 ls_1 lh_16 kopubworlddotum normal">
                2024 지디웹 어워드 수상
            </p>
        </div>
    </div>
    <!-- 지디웹 수상 - e -->
    
    <!-- quick-menu -->
    <div class="quick_wrap top open pc_cont_960" id="quick">
        <div class="quick_menu_wrap" id="quick_menu_wrap">
            <ul class="quick_menu">
                <li class="quick_menu_list quick_menu_li_naver">
                    <a href="https://booking.naver.com/booking/13/bizes/117139" target="_blank">
                        <i class="quick_icon quick_icon_naver"></i>
                        <div class="quick_text_box">
                            <p class="fz_13 ls_p2 lh_16 kopubworlddotum semibold">네이버 예약하기</p>
                        </div>
                    </a>
                </li>
                <li class="quick_menu_list quick_menu_li_blog">
                    <a href="https://blog.naver.com/bryanuk72" target="_blank">
                        <i class="quick_icon quick_icon_blog"></i>
                        <div class="quick_text_box">
                            <p class="fz_13 ls_p2 lh_16 kopubworlddotum semibold">블로그 바로가기</p>
                        </div>
                    </a>
                </li>
                <li class="quick_menu_list quick_menu_li_kakao">
                    <a href="https://pf.kakao.com/_xdrJAxb" target="_blank">
                        <i class="quick_icon quick_icon_kakao"></i>
                        <div class="quick_slide_text_item">
                            <div class="quick_slide_text_wrap">
                                <div class="quick_slide_text">
                                    <div class="quick_slide_text_box">
                                        <p class="fz_14 ls_p2 lh_16 kopubworlddotum semibold">지금 바로<span class="italic">!</span> 카톡 상담 받기</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
        
        <div class="quick_btn_wrap">
            <button class="quick_btn" id="q_btn">
                <div class="open_btn">
                    <div class="swiper-container quick_btn_swiper" id="quick_btn_swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide quick_btn_slide01">
                                <img src="<?php echo G5_THEME_URL?>/img/quick_img01.png" alt="">
                            </div>
                            <div class="swiper-slide quick_btn_slide02">
                                <img src="<?php echo G5_THEME_URL?>/img/quick_img02.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="close_btn">
                    <img src="<?php echo G5_THEME_URL?>/img/quick_img02.png" alt="">
                </div>
            </button>
        </div>
    </div>
    
    <div class="quick_wrap open m_cont_960" id="quick_m">
        <div class="quick_menu_wrap" id="quick_menu_wrap_m">
            <ul class="quick_menu">
                <li class="quick_menu_list quick_menu_li_naver">
                    <a href="https://booking.naver.com/booking/13/bizes/117139" target="_blank">
                        <i class="quick_icon quick_icon_naver"></i>
                        <div class="quick_text_box">
                            <p class="fz_15 ls_p2 lh_16 kopubworlddotum semibold">네이버 예약하기</p>
                        </div>
                    </a>
                </li>
                <li class="quick_menu_list quick_menu_li_blog">
                    <a href="https://blog.naver.com/bryanuk72" target="_blank">
                        <i class="quick_icon quick_icon_blog"></i>
                        <div class="quick_text_box">
                            <p class="fz_15 ls_p2 lh_16 kopubworlddotum semibold">블로그 바로가기</p>
                        </div>
                    </a>
                </li>
                <li class="quick_menu_list quick_menu_li_kakao">
                    <a href="https://pf.kakao.com/_xdrJAxb" target="_blank">
                        <i class="quick_icon quick_icon_kakao"></i>
                        <div class="quick_slide_text_item">
                            <div class="quick_slide_text_wrap">
                                <div class="quick_slide_text">
                                    <div class="quick_slide_text_box">
                                        <p class="fz_16 ls_p2 lh_16 kopubworlddotum semibold">지금 바로<span class="italic">!</span> 카톡 상담 받기</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
        
        <!--<div class="quick_btn_wrap">
            <button class="quick_btn" id="q_btn_m">
                <div class="open_btn">
                    <div class="swiper-container quick_btn_swiper" id="quick_btn_swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide quick_btn_slide01">
                                <img src="<?php echo G5_THEME_URL?>/img/quick_img01_m.png" alt="">
                            </div>
                            <div class="swiper-slide quick_btn_slide02">
                                <img src="<?php echo G5_THEME_URL?>/img/quick_img02_m.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="close_btn">
                    <img src="<?php echo G5_THEME_URL?>/img/quick_img02_m.png" alt="">
                </div>
            </button>
        </div>-->
    </div>
    <!-- //quick-menu -->
    
    <!-- top_btn -->
    <div class="top_btn_wrap">
        <a href="javascript:void(0);" onclick="$('html, body').stop().animate({scrollTop : 0}, 500, 'swing');">
            <img src="<?php echo G5_THEME_URL?>/img/top_btn.svg" alt="">
        </a>
    </div>
    <!--<div class="fixed_slide_text_item">
        <div class="fixed_slide_text_wrap">
            <div class="fixed_slide_text">
                <div class="fixed_slide_text_box fixed_slide_text_box01">
                    <a href="https://pf.kakao.com/_xdrJAxb" target="_blank">
                        <p class="txt01 fz_16 ls_p2 lh_12 kopubworlddotum normal">지금 바로 <span class="semibold">예약 문의</span>하기</p>
                    </a>
                </div>
            </div>
        </div>
    </div>-->
    <!-- //top_btn -->
    
</div>
<!-- //smooth-scroll -->






<!-- Custom JS -->
<script src="<?php echo G5_THEME_URL?>/plugins/gsap/gsap.min.js"></script>
<script src="<?php echo G5_THEME_URL?>/plugins/gsap/ScrollTrigger.min.js"></script>
<script src="<?php echo G5_THEME_URL?>/plugins/gsap/ScrollToPlugin.min.js"></script>
<script src="<?php echo G5_THEME_URL?>/plugins/gsap/Observer.min.js"></script>
<script src="<?php echo G5_THEME_URL?>/plugins/swiper/swiper-bundle.min.js"></script>
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/TweenMax.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lettering.js/0.7.0/jquery.lettering.min.js"></script>-->
<!-- 숫자카운트 - s -->
<script src="<?php echo G5_THEME_URL?>/plugins/noframework.waypoints.min.js"></script>
<script src="<?php echo G5_THEME_URL?>/plugins/countUp.min.js"></script>
<!-- 숫자카운트 - e -->
<script src="<?php echo G5_THEME_URL?>/js/common.js"></script>
<?php if(defined('_INDEX_')) { // index에서만 실행 ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/TweenMax.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.2/ScrollMagic.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.2/plugins/animation.gsap.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.2/plugins/debug.addIndicators.min.js"></script>

<script src="<?php echo G5_THEME_URL?>/js/main.js"></script>
<?php } ?>
<script src="<?php echo G5_THEME_URL?>/js/scroll.js"></script>

<?php if(defined('_INDEX_')) {   /***************  main  ***************/ ?>
<script src="<?php echo G5_THEME_URL?>/js/main_scroll.js"></script>
<script>
$(function(){
    //$("html, body").animate({ scrollTop: 0 }, "slow"); 
});
</script>
<?php } else if(strstr($_SERVER['PHP_SELF'], 'sub/sub2_1.php')) {   /***************  sub2  ***************/ ?>
<script src="<?php echo G5_THEME_URL?>/js/sub2.js"></script>
<script src="<?php echo G5_THEME_URL?>/js/sub2_scroll.js"></script>
<?php } else if(strstr($_SERVER['PHP_SELF'], 'sub/sub3_1.php')) {   /***************  sub3  ***************/ ?>
<script src="<?php echo G5_THEME_URL?>/js/sub3.js"></script>
<?php } else if(strstr($_SERVER['PHP_SELF'], 'sub/sub4_1.php')) {   /***************  sub4  ***************/ ?>
<script src="<?php echo G5_THEME_URL?>/js/sub4_scroll.js"></script>
<?php } else if(strstr($_SERVER['PHP_SELF'], 'sub/sub5_1.php')) {   /***************  sub5  ***************/ ?>
<script src="<?php echo G5_THEME_URL?>/js/sub5.js"></script>
<?php } ?>

<?php
if(G5_DEVICE_BUTTON_DISPLAY && !G5_IS_MOBILE) { ?>
<?php
}

if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<!-- } 하단 끝 -->

<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>

<?php
include_once(G5_THEME_PATH."/tail.sub.php");