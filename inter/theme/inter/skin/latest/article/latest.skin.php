<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);

//$sql = "select * from g5_write_c_article where wr_1 = '2' ORDER BY `g5_write_c_article`.`wr_id` DESC limit 4";
//$row = sql_fetch($sql);
//$list[$i] = get_list($row, $board, $board_skin_url, $board['bo_subject_len']);

$list = array();
$sql = "select * from g5_write_c_article where 1";
$row = sql_fetch($sql);

$sql = " select * from g5_write_c_article where wr_3 = 'Y' order by `g5_write_c_article`.`wr_id` desc limit 10 ";
$result = sql_query($sql);

for ($i=0; $row = sql_fetch_array($result); $i++) {
	$list[$i] = get_list($row, $board, $board_skin_url, $board['bo_subject_len']);
}
?>

<?php
for ($i=0; $i<count($list); $i++) {
    // 이미지파일 호출
    $file = get_file($bo_table, $list[$i]['wr_id']);
?>
<div class="swiper-slide main_cont05_slider main_cont05_slider0<?php echo $i+1 ?>">
    <div class="main_cont05_slider_img main_cont05_slider_img0<?php echo $i+1 ?>">
        <a href="<?php echo $list[$i]['href'] ?>#href_id">
            <?php
            $thumb_width = 382;
            
            $file_src1 = '<img src="'.G5_URL.'/data/file/c_article/'.$file[0]['file'].'" width="'.$thumb_width.'">';
            
            echo $file_src1;
            ?>
            
            <div class="main_cont05_slider_hover_wrap">
                <div class="main_cont05_slider_hover">
                    <div class="main_cont05_slider_hover_box"></div>
                </div>
            </div>
        </a>
    </div>
    <div class="main_cont05_slider_text">
        <a href="<?php echo $list[$i]['href'] ?>#href_id">
            <p class="txt01 fz_16 ls_p2 lh_16 kopubworlddotum normal">
                <?php echo $list[$i]['ca_name'] ?>
            </p>
            <p class="txt02 fz_24 lh_14 kopubworlddotum normal">
                <?php echo $list[$i]['subject'] ?>
            </p>
        </a>
    </div>
</div>
<?php }  ?>
<?php if (count($list) == 0) { //게시물이 없을 때  ?>
<div class="empty_li">게시물이 없습니다.</div>
<?php }  ?>
