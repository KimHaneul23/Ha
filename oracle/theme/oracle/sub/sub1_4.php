<?php
$_REQUEST['bo_table'] = 'equipment';
include_once('./_common.php');

// 웹사이트 타이틀
$g5['title'] = '장비소개';

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
            <div class="sub_top_view sub1_4_top_view">
                <div class="sub_top_view_bg sub1_4_top_view_bg"></div>
                <div class="sub_top_view_text_wrap sub1_4_top_view_text_wrap ta_c">
                    <div class="sub_top_view_text01 sub1_4_top_view_text01 m_20">
                        <p class="c-w fz_20 lh_14 ls_2 normal sub_text_ani ta_c">
                            장비 소개
                        </p>
                    </div>
                    <div class="sub_top_view_text02 sub1_4_top_view_text02">
                        <p class="pc_cont_434 c-w fz_27 lh_14 ls_2 ta_c nanummyeongjo light sub_text_ani">
                            인천 오라클피부과는 70여 대의 프리미엄 장비를
                        </p>
                        <p class="m_cont_434 c-w fz_27 lh_14 ls_2 ta_c nanummyeongjo light sub_text_ani">
                            인천 오라클피부과는 70여 대의 프리미엄 장비를 교차 시술하여 치료 효과를 극대화합니다.
                        </p>
                    </div>
                    <div class="sub_top_view_text03 sub1_4_top_view_text03">
                        <p class="pc_cont_434 c-w fz_27 lh_14 ls_2 ta_c nanummyeongjo light sub_text_ani">
                            교차 시술하여 치료 효과를 극대화합니다.
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
           
        <article class="sub_cont02 sub1_4_cont02 pd_60 bg_fa">
            <div class="sub1_4_equipment_list">
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