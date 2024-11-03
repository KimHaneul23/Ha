<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);

$thumb_width = 277;
$thumb_height = 277;


$list = array();
$sql = "select * from g5_write_notice where 1";
$row = sql_fetch($sql);

$sql = " select * from g5_write_notice where wr_3 = 'Y' order by `g5_write_notice`.`wr_id` desc limit 5 ";
$result = sql_query($sql);

for ($i=0; $row = sql_fetch_array($result); $i++) {
	$list[$i] = get_list($row, $board, $board_skin_url, $board['bo_subject_len']);
}

?>

<!-- All -->
<div class="main_cont05_tabcont_wrap tab_cont01 active">
    <ul class="main_cont05_tabcont_ul">
        <?php
        for ($i=0; $i<count($list); $i++) {
            
            if($list[$i]['ca_name']=='Notice' || $list[$i]['ca_name']=='News'){
            
        ?>    
        <li>
            <a href="<?php echo $list[$i]['href'] ?>#href_id">
                <div class="main_cont05_tabcont_text">
                    <p class="txt01 c-515c3e sortsmillgoudy semibold fz_13 ls_p2 lh_16">
                        <?php echo $list[$i]['ca_name'] ?>
                    </p>
                    <p class="txt02 normal fz_17 ls_p2 lh_16">
                        <?php echo $list[$i]['subject'] ?>
                    </p>
                    <div class="main_cont05_tabcont_btn">
                        <i class="l_arrow_icon3"></i>
                    </div>
                </div>
            </a>
        </li>
        <?php } ?>
        <?php } ?>
        <?php if ($list == 0) { //게시물이 없을 때  ?>
        <div class="no-data">게시글 준비 중입니다.</div>
        <?php } ?>
    </ul>
</div>

<!-- Notice -->
<div class="main_cont05_tabcont_wrap tab_cont02">
    <ul class="main_cont05_tabcont_ul">
        <?php
        for ($i=0; $i<count($list); $i++) {
            
            if($list[$i]['ca_name']=='Notice'){
            
        ?>
        <li>
            <a href="<?php echo $list[$i]['href'] ?>#href_id" >
                <div class="main_cont05_tabcont_text">
                    <p class="txt01 c-515c3e sortsmillgoudy semibold fz_13 ls_p2 lh_16">
                        <?php echo $list[$i]['ca_name'] ?>
                    </p>
                    <p class="txt02 normal fz_17 ls_p2 lh_16">
                        <?php echo $list[$i]['subject'] ?>
                    </p>
                    <div class="main_cont05_tabcont_btn">
                        <i class="l_arrow_icon3"></i>
                    </div>
                </div>
            </a>
        </li>
        <?php } ?>
        <?php } ?>
        <?php if ($list == 0) { //게시물이 없을 때  ?>
        <div class="no-data">게시글 준비 중입니다.</div>
        <?php } ?>
    </ul>
</div>

<!-- News -->
<div class="main_cont05_tabcont_wrap tab_cont03">
    <ul class="main_cont05_tabcont_ul">
        <?php
        for ($i=0; $i<count($list); $i++) {
            
            if($list[$i]['ca_name']=='News'){
            
        ?>
        <li>
            <a href="<?php echo $list[$i]['href'] ?>#href_id" >
                <div class="main_cont05_tabcont_text">
                    <p class="txt01 c-515c3e sortsmillgoudy semibold fz_13 ls_p2 lh_16">
                        <?php echo $list[$i]['ca_name'] ?>
                    </p>
                    <p class="txt02 normal fz_17 ls_p2 lh_16">
                        <?php echo $list[$i]['subject'] ?>
                    </p>
                    <div class="main_cont05_tabcont_btn">
                        <i class="l_arrow_icon3"></i>
                    </div>
                </div>
            </a>
        </li>
        <?php } ?>
        <?php } ?>
        <?php if ($list == 0) { //게시물이 없을 때  ?>
        <div class="no-data">게시글 준비 중입니다.</div>
        <?php } ?>
    </ul>
</div>
