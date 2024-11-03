<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
$thumb_width = 188;
$thumb_height = 106;

//$sql = "select * from g5_write_youtube where wr_1 = '2' ORDER BY `g5_write_youtube`.`wr_id` DESC limit 4";
//$row = sql_fetch($sql);
//$list[$i] = get_list($row, $board, $board_skin_url, $board['bo_subject_len']);

$list = array();
$sql = "select * from g5_write_youtube where 1";
$row = sql_fetch($sql);

$sql = " select * from g5_write_youtube where wr_1 = '2' order by `g5_write_youtube`.`wr_id` desc limit 4 ";
$result = sql_query($sql);

for ($i=0; $row = sql_fetch_array($result); $i++) {
	$list[$i] = get_list($row, $board, $board_skin_url, $board['bo_subject_len']);
}


?>
<ul>
    <?php
    for ($i=0; $i<count($list); $i++) {
        $thumb = get_list_thumbnail($board['bo_table'], $list[$i]['wr_id'], $board['bo_gallery_width'], $board['bo_gallery_height'], false, true);

        if($thumb['src']) {
            $img_content = '<img src="'.$thumb['src'].'" alt="'.$thumb['alt'].'" >';
        } else if ($list[$i]['wr_10']){
            $img_content = '<img src="https://img.youtube.com/vi/'.$list[$i]['wr_10'].'/mqdefault.jpg">';
        } else {
            $img_content = '<div class="no_image">No Image</div>';
        }
    ?>
        <li data-yt-url="<?php echo $list[$i]['wr_10'];?>">
            <div class="flex_row center">
                <div class="img-wrap"><?php echo $img_content; ?></div>
                <div class="text-wrap fz_14 light ls_2 lh_15">
                    <p>
                        <!--<span class="sortsmillgoudy">[Orakkyu YouTube]</span> <br>-->
                        <span class="yt-tit-txt fz_16 medium"><?php echo $list[$i]['subject'];?></span>
                    </p>
                </div>
            </div>
        </li>
        
    <?php }  ?>
    <?php if (count($list) == 0) { //게시물이 없을 때  ?>
    <li class="empty_li">게시물이 없습니다.</li>
    <?php }  ?>
</ul>
