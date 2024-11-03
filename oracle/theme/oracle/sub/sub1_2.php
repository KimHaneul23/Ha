<?php
$_REQUEST['bo_table'] = 'doctor';
include_once('./_common.php');

// 웹사이트 타이틀
$g5['title'] = '피부과 전문의';

include_once(G5_PATH.'/head.php');
?>
    
    <script>
        $(document).ready(function(){
            var window_width = $(window).width();
            if (window_width <= 480) {
                $('.ht-inner').removeClass('sub_header');
            } else {
                //$('.main-header').removeClass('color_change');
                $('.ht-inner').removeClass('sub_header');
            }
        });
    </script>
    <main id="content">
        <article class="sub_content01" id="startContent">
            <div id="href_id"></div>
            <div class="sub_top_view sub1_2_top_view">
                <div class="sub_top_view_bg sub1_2_top_view_bg"></div>
                <div class="sub_top_view_text_wrap sub1_2_top_view_text_wrap ta_c">
                    <div class="sub_top_view_text01 sub1_2_top_view_text01 m_20">
                        <p class="c-w fz_20 lh_14 ls_2 normal sub_text_ani ta_c">
                            피부과전문의 소개
                        </p>
                    </div>
                    <div class="sub_top_view_text02 sub1_2_top_view_text02">
                        <p class="pc_cont_434 c-w fz_27 lh_14 ls_2 ta_c nanummyeongjo normal sub_text_ani">
                            대한민국 2% 피부과전문의가 모여있는
                        </p>
                        <p class="m_cont_434 c-w fz_27 lh_14 ls_2 ta_c nanummyeongjo normal sub_text_ani">
                            대한민국 2% <br>피부과전문의가 모여있는
                        </p>
                    </div>
                    <div class="sub_top_view_text03 sub1_2_top_view_text03">
                        <p class="c-w fz_27 lh_14 ls_2 ta_c nanummyeongjo normal sub_text_ani">
                            인천 오라클피부과
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
           
        <article class="sub_cont02 sub1_2_cont02 pd_60">
            <div class="sub1_2_doctors_list">
                <?php include_once(G5_BBS_PATH.'/board.php'); ?>
            </div>
        </article>
        
    </main>
    <!-- //main -->
    
<?php
include_once(G5_PATH.'/tail.php');
?>
<?php if($i <= 3) { ?>
<style>
    .doctors_top_view_swiper > .swiper-pagination{display:none;}
</style>
<script>
var doctors_top_view_swiper = new Swiper('.doctors_top_view_swiper', {
    slidesPerView: 'auto',
    spaceBetween: 0,
    cssWidthAndHeight: true,
    autoplay: false,
    disableOnInteraction: false,
    loop: false,
    loopAdditionalSlides: 1,
    initialSlide: 0,
    observer: true,
    observeParents: true,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
});
</script>
<?php } else if($i >= 3) { ?>
<script>
var doctors_top_view_swiper = new Swiper('.doctors_top_view_swiper', {
    slidesPerView: 'auto',
    spaceBetween: 0,
    cssWidthAndHeight: true,
    speed:1000,
    autoplay: {
        delay: 3500,
        disableOnInteraction: false,
    },
    loop: true,
    loopAdditionalSlides: 1,
    initialSlide: 0,
    observer: true,
    observeParents: true,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
});
</script>
<?php } else { ?>
<script>
var doctors_top_view_swiper = new Swiper('.doctors_top_view_swiper', {
    slidesPerView: 'auto',
    spaceBetween: 0,
    cssWidthAndHeight: true,
    speed:1000,
    autoplay: {
        delay: 3500,
        disableOnInteraction: false,
    },
    loop: true,
    loopAdditionalSlides: 1,
    initialSlide: 0,
    observer: true,
    observeParents: true,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
});
</script>
<?php } ?>