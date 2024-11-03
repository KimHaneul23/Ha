<?php
$_REQUEST['bo_table'] = 'online';
include_once('./_common.php');

// 웹사이트 타이틀
$g5['title'] = '온라인상담';

include_once(G5_PATH.'/head.php');
?>
    
    <script>
        $(document).ready(function(){
            $('.main-header').removeClass('color_change');
            $('.ht-inner').removeClass('sub_header');
        });
    </script>
    <main id="content">
        <article class="sub_content01" id="startContent">
            <div id="href_id"></div>
            <div class="sub_top_view sub1_5_top_view">
                <div class="sub_top_view_bg sub1_5_top_view_bg"></div>
                <div class="sub_top_view_text_wrap sub1_5_top_view_text_wrap ta_c">
                    <div class="sub_top_view_text01 sub1_5_top_view_text01 m_20">
                        <p class="fz_20 lh_14 ls_2 normal sub_text_ani ta_c">
                            온라인상담
                        </p>
                    </div>
                    <div class="sub_top_view_text02 sub1_5_top_view_text02">
                        <p class="fz_27 lh_14 ls_2 ta_c nanummyeongjo light sub_text_ani">
                            대한민국 2% 피부과전문의가 모여있는
                        </p>
                    </div>
                    <div class="sub_top_view_text03 sub1_5_top_view_text03">
                        <p class="fz_27 lh_14 ls_2 ta_c nanummyeongjo light sub_text_ani">
                            인천 오라클피부과
                        </p>
                    </div>
                </div>
            </div>
        </article>
           
        <article class="sub_cont02 sub1_5_cont02 pd_60">
            <div class="sub1_5_online_list">
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