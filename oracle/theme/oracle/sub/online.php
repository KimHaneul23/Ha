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
            <div class="sub_top_view sub8_1_top_view">
                <div class="sub_top_view_bg sub8_1_top_view_bg"></div>
                <div class="sub_top_view_text_wrap sub8_1_top_view_text_wrap ta_c">
                    <div class="sub_top_view_text01 sub8_1_top_view_text01 m_20">
                        <p class="fz_20 lh_14 ls_2 normal sub_text_ani ta_c">
                            피부과전문의는 다릅니다!
                        </p>
                    </div>
                    <div class="sub_top_view_text02 sub8_1_top_view_text02">
                        <p class="fz_40 lh_14 ls_2 medium sub_text_ani">
                            대한민국 2% 피부과전문의가 모여있는
                        </p>
                    </div>
                    <div class="sub_top_view_text03 sub8_1_top_view_text02 m_20">
                        <p class="fz_40 lh_14 ls_2 medium sub_text_ani">
                            인천 오라클피부과
                        </p>
                    </div>
                    <div class="sub_top_view_text04 sub8_1_top_view_text03 m_10">
                        <p class="fz_16 lh_14 ls_2 normal sub_text_ani">
                            &middot;
                        </p>
                    </div>
                    <div class="sub_top_view_text05 sub8_1_top_view_text04 m_20">
                        <p class="fz_16 lh_14 ls_2 normal sub_text_ani">
                            &middot;
                        </p>
                    </div>
                    <div class="sub_top_view_text06 sub8_1_top_view_text04">
                        <p class="fz_16 lh_14 ls_2 normal sub_text_ani">
                            피부과전문의 일반의 어떻게 다를까요?
                        </p>
                    </div>
                </div>
            </div>
        </article>
           
        <article class="sub_cont02 online_cont02 bg_fa">
            <div class="online_list">
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