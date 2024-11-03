<?php
include_once('./_common.php');
//if (G5_IS_MOBILE) {
//    include_once(G5_MOBILE_PATH.'/index.php');
//    return;
//}
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
$_REQUEST['bo_table'] = 'doctor';
include_once(G5_LIB_PATH.'/thumbnail.lib.php');
include_once(G5_LIB_PATH.'/latest.lib.php');

// 웹사이트 타이틀
$g5['title'] = '피부과전문의';

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
            <div class="sub_top_view sub1_2_top_view">
                <div class="sub_top_view_bg sub1_2_top_view_bg"></div>
                <div class="sub_top_view_text_wrap sub1_2_top_view_text_wrap ta_c">
                    <div class="sub_top_view_text01 sub1_2_top_view_text01 m_20">
                        <p class="fz_20 lh_14 ls_2 normal sub_text_ani ta_c">
                            피부과전문의는 다릅니다!
                        </p>
                    </div>
                    <div class="sub_top_view_text02 sub1_2_top_view_text02">
                        <p class="fz_40 lh_14 ls_2 medium sub_text_ani">
                            대한민국 2% 피부과전문의가 모여있는
                        </p>
                    </div>
                    <div class="sub_top_view_text03 sub1_2_top_view_text02 m_20">
                        <p class="fz_40 lh_14 ls_2 medium sub_text_ani">
                            인천 오라클피부과
                        </p>
                    </div>
                    <div class="sub_top_view_text04 sub1_2_top_view_text03 m_10">
                        <p class="fz_16 lh_14 ls_2 normal sub_text_ani">
                            &middot;
                        </p>
                    </div>
                    <div class="sub_top_view_text05 sub1_2_top_view_text04 m_20">
                        <p class="fz_16 lh_14 ls_2 normal sub_text_ani">
                            &middot;
                        </p>
                    </div>
                    <div class="sub_top_view_text06 sub1_2_top_view_text04">
                        <p class="fz_16 lh_14 ls_2 normal sub_text_ani">
                            피부과전문의 일반의 어떻게 다를까요?
                        </p>
                    </div>
                </div>
            </div>
        </article>
           
        <article class="sub_cont02 sub5_4_cont02 bg_fa">
            <div class="sub_tab">
                <ul name="ca_name" id="ca_name">
                    <li id="bo_cate_on"><a href="<?php echo G5_THEME_URL?>/sub/doctors_test.php">전체</a></li>
                    <?
                    $bo_table = 'doctor';
                    $row = sql_fetch(" SELECT bo_category_list FROM {$g5['board_table']} WHERE bo_table = '$bo_table' ");
                    $arr = explode("|", $row['bo_category_list']); // 구분자가 , 로 되어 있음 
                    for ($j=0; $j<count($arr); $j++) {
                    ?>
                    <li id="bo_cate_on"><a href="<?= $arr[$j];?>"><?= $arr[$j];?></a></li>
                    <? } ?>
                </ul>
            </div>
        </article>
            
        <article class="sub_cont_box sub5_1_1_cont1_1_box bg_fa pd_120">
            <div class="sub_tabcontent_container sub7_container flex_row fw sb center">
                <div class="cont-wrap">
                    <?php
                    $bo_table = 'doctor';
                    $write_table = $g5['write_prefix'].$bo_table;
                    $write = array();
                    $write_table = '';
                    if ($bo_table) {
                        $board = get_board_db($bo_table, true);
                        if (isset($board['bo_table']) && $board['bo_table']) {
                            set_cookie("ck_bo_table", $board['bo_table'], 86400 * 1);
                            $gr_id = $board['gr_id'];
                            $write_table = $g5['write_prefix'] . $bo_table; // 게시판 테이블 전체이름

                            if (isset($wr_id) && $wr_id) {
                                $write = get_write($write_table, $wr_id);
                            } else if (isset($wr_seo_title) && $wr_seo_title) {
                                $write = get_content_by_field($write_table, 'bbs', 'wr_seo_title', generate_seo_title($wr_seo_title));
                                if( isset($write['wr_id']) ){
                                    $wr_id = $write['wr_id'];
                                }
                            }
                        }
                    }
                    $sql = " select * from {$write_table} where 1=1 order by wr_id";

                    $result = sql_query($sql);
                    for ($i=0; $i<count($row = sql_fetch_array($result)); $i++) {
                        $list[$i] = get_list($row, $board, $board_skin_url, $board['bo_subject_len']);

                        $thumb_url = G5_URL."/data/file/".$bo_table."/".$view['file'][$i]['file'];
                        $thumb_url = get_list_thumbnail($board['bo_table'], $list[$i]['wr_id'], $board['bo_gallery_width'], $board['bo_gallery_height'], false, true);
                        // 이미지파일 호출
                        $thumb = $list[$i]['file'];

                        //$class = (($i % 2) == 0) ? 'left':'right';
                    ?>
                    <div class="cnt d-flex ">
                        <div class="d-flbox">
                            <div class="imgbox">
                                <img src="<?=$thumb_url['ori'] ?>" alt="" class="img"/>
                            </div>
                        </div>
                        <div class="d-frbox">
                            <div class="txtbox01">
                                <h1 class="notoserif"><small><?=$list[$i]['wr_1'] ?></small> <?=$list[$i]['subject']; ?></h1>
                                <div class="txtbox02"><?=$list[$i]['wr_content'];?></div>
                                <a href="javascript:modalView('doctor<?=$i ?>');" class="btn type01">view more <i class="icon-arrow01"></i></a>
                            </div>
                        </div>
                    </div>
                    <?
                    }
                    ?>
                </div>
            </div>
        </article>

        <article class="sub_cont_box sub5_1_1_cont1_2_box pd_120">
            <div class="sub_tabcontent_container flex_row fw jc_center al_fs">
                <div class="sub_cont_title sub5_1_1_cont_title_center ta_c">
                    <p class="sub_cont_title_text01 fz_22 lh_14 ls_2 normal gs_reveal" data-gs-delay="200">
                        오라클맨즈
                    </p>
                    <p class="sub_cont_title_text02 sortsmillgoudy fz_60 lh_16 ls_2 light gs_reveal m_60" data-gs-delay="400">
                        Before & After
                    </p>
                </div>
                <div class="sub5_1_1_tabcontent02_ba">
                    <div class="swiper-container sub5_1_ba_slider_cont">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide sub5_1_1_ba_slide">
                                <a href="javascript:void(0);">
                                    <div class="sub5_1_1_ba_slide_img sub5_1_1_ba_slide_img01 flex_row sb al_fs">
                                        <div class="sub5_1_1_ba_slide_img_b">
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub5_1_4_ba_slide_img01_b.jpg" alt="">
                                        </div>
                                        <div class="sub5_1_1_ba_slide_img_a">
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub5_1_4_ba_slide_img01_a.jpg" alt="">
                                            <p class="sub5_1_1_ba_slide_img_a_taxt fz_14 ls_2 lh_14 normal ta_c">
                                                로그인 후 <br>
                                                확인 가능합니다.
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide sub5_1_1_ba_slide">
                                <a href="javascript:void(0);">
                                    <div class="sub5_1_1_ba_slide_img sub5_1_1_ba_slide_img02 flex_row sb al_fs">
                                        <div class="sub5_1_1_ba_slide_img_b">
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub5_1_4_ba_slide_img02_b.jpg" alt="">
                                        </div>
                                        <div class="sub5_1_1_ba_slide_img_a">
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub5_1_4_ba_slide_img02_a.jpg" alt="">
                                            <p class="sub5_1_1_ba_slide_img_a_taxt fz_14 ls_2 lh_14 normal ta_c">
                                                로그인 후 <br>
                                                확인 가능합니다.
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide sub5_1_1_ba_slide">
                                <a href="javascript:void(0);">
                                    <div class="sub5_1_1_ba_slide_img sub5_1_1_ba_slide_img03 flex_row sb al_fs">
                                        <div class="sub5_1_1_ba_slide_img_b">
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub5_1_4_ba_slide_img03_b.jpg" alt="">
                                        </div>
                                        <div class="sub5_1_1_ba_slide_img_a">
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub5_1_4_ba_slide_img03_a.jpg" alt="">
                                            <p class="sub5_1_1_ba_slide_img_a_taxt fz_14 ls_2 lh_14 normal ta_c">
                                                로그인 후 <br>
                                                확인 가능합니다.
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                    <div class="sub5_1_1_ba_more_btn">
                        <a href="javascript:void(0);">
                            <p class="fz_16 lh_1 ls_2 light ta_c">more</p>
                        </a>
                    </div>
                </div>
            </div>
        </article>
        
    </main>
    <!-- //main -->
    
<?php
include_once(G5_PATH.'/tail.php');
?>