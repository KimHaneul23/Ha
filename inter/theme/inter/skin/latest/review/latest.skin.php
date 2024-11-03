<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
$thumb_width = 188;
$thumb_height = 106;

//$sql = "select * from g5_write_review where wr_1 = '2' ORDER BY `g5_write_review`.`wr_id` DESC limit 4";
//$row = sql_fetch($sql);
//$list[$i] = get_list($row, $board, $board_skin_url, $board['bo_subject_len']);

$list = array();
$sql = "select * from g5_write_review where 1";
$row = sql_fetch($sql);

$sql = " select * from g5_write_review where wr_3 = 'Y' order by `g5_write_review`.`wr_id` desc limit 5 ";
$result = sql_query($sql);

for ($i=0; $row = sql_fetch_array($result); $i++) {
	$list[$i] = get_list($row, $board, $board_skin_url, $board['bo_subject_len']);
}


?>
<ul class="main_cont06_review_ul">
    <?php
    for ($i=0; $i<count($list); $i++) {
    ?>
    <li>
        <div class="main_cont06_review_item">
            <div class="main_cont06_review_img">
                <img src="<?php echo G5_THEME_URL?>/img/main_cont06_right_review.png" alt="">
            </div>
            <div class="main_cont06_review_text">
                <p class="c-3c3c3c fz_16 ls_2 lh_16 medium">
                    <?php echo get_text($list[$i]['wr_content'], 1);?>
                </p>
            </div>
            <div class="main_cont06_review_btn">
                <a href="javascript:void(0);">
                    <p class="c-363636 fz_16 lh_16 ls_2 light">더보기</p><i class="icon_arrow_right_s_w2"></i>
                </a>
            </div>
        </div>
    </li>
    <?php }  ?>
    <?php if (count($list) == 0) { //게시물이 없을 때  ?>
    <li class="empty_li">게시물이 없습니다.</li>
    <?php }  ?>
</ul>
