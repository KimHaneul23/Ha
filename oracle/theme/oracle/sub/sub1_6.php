<?php
$_REQUEST['bo_table'] = 'youtube';
include_once('./_common.php');

// 웹사이트 타이틀
$g5['title'] = '오라뀨티비';

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
            <div class="sub_top_view sub1_6_top_view">
                <div class="sub_top_view_bg sub1_6_top_view_bg"></div>
                <div class="sub_top_view_text_wrap sub1_6_top_view_text_wrap ta_c">
                    <div class="sub_top_view_text01 sub1_6_top_view_text01 m_20">
                        <p class="c-w sortsmillgoudy fz_20 lh_14 ls_2 normal sub_text_ani ta_c">
                            Oracle Youtube
                        </p>
                    </div>
                    <div class="sub_top_view_text02 sub1_6_top_view_text02">
                        <p class="c-w fz_35 lh_14 ls_2 ta_c nanummyeongjo medium sub_text_ani flex_row jc_center centerv">
                            <span>오라뀨 TV</span><img src="<?php echo G5_THEME_URL?>/img/youtube_icon_m.svg" alt="">
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
           
        <article class="sub_cont02 sub1_6_cont02 pd_60 bg_fa">
            <div class="sub1_6_youtube_list">
                <?php
                include_once(G5_BBS_PATH.'/board.php');
                ?>
            </div>
        </article>
        
    </main>
    <!-- //main -->
    
<?php
include_once(G5_PATH.'/tail.php');
?>