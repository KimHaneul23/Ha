<?php
$_REQUEST['bo_table'] = 'text_review';
include_once('./_common.php');

// 웹사이트 타이틀
$g5['title'] = '손글씨후기';

include_once(G5_PATH.'/head.php');
?>
    
    <script>
        $(document).ready(function(){
            //$('.main-header').removeClass('color_change');
            $('.ht-inner').removeClass('sub_header');
        });
    </script>
    <main id="content">
        <article class="sub_content01" id="startContent">
            <div id="href_id"></div>
            <div class="sub_top_view sub8_3_top_view">
                <div class="sub_top_view_bg sub8_3_top_view_bg"></div>
                <div class="sub_top_view_text_wrap sub8_3_top_view_text_wrap ta_c">
                    <div class="sub_top_view_text01 sub8_3_top_view_text01 m_20">
                        <p class="c-w fz_35 lh_14 ls_2 medium nanummyeongjo sub_text_ani ta_c">
                            손글씨후기
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
           
        <article class="sub_cont02 sub8_3_cont02 pd_100">
            <div class="sub8_3_text_review_list">
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