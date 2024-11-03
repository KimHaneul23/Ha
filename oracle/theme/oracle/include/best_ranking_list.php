<?php
$bo_table_r = 'ranking';
$write_table_r = $g5['write_prefix'] . $bo_table_r;
$write_r = array();
$write_table_r = '';
if ($bo_table_r) {
	$board_r = get_board_db($bo_table_r, true);
	if (isset($board_r['bo_table']) && $board_r['bo_table']) {
		set_cookie("ck_bo_table", $board_r['bo_table'], 86400 * 1);
		$gr_id = $board_r['gr_id'];
		$write_table_r = $g5['write_prefix'] . $bo_table_r; // 게시판 테이블 전체이름

		if (isset($wr_id_r) && $wr_id_r) {
			$write_r = get_write($write_table_r, $wr_id_r);
		} else if (isset($wr_seo_title_r) && $wr_seo_title_r) {
			$write_r = get_content_by_field($write_table_r, 'bbs', 'wr_seo_title', generate_seo_title($wr_seo_title_r));
			if( isset($write_r['wr_id']) ){
				$wr_id_r = $write_r['wr_id'];
			}
		}
	}
}
$sql_r = " select * from {$write_table_r} where 1=1 order by wr_id";

$result_r = sql_query($sql_r);

for ($r=0; $r<count($row_r = sql_fetch_array($result_r)); $r++) {
    $list[$r] = get_list($row_r, $board_r, $board_skin_url_r, $board_r['bo_subject_len']);
?>
<div class="best_ranking_content tabcontent tabcontent1" id="tabcontent1">
    <ul class="best_ranking_content01_ul">
        <?php if($list[$r]['wr_id']==1){ ?>
        <li class="best_ranking_list01 best_ranking_list01_1 active">
            <a href="<?php echo $row_r['wr_2'] ?>" target="_blank">
                <p class="fz_18 c-w lh_1 normal">1. <?php echo $row_r['wr_1'] ?><?php if($row_r['wr_11']=="Y"){ ?><span class="ranking_new_icon"></span><?php } ?></p>
            </a>
        </li>
        <li class="best_ranking_list01 best_ranking_list01_2">
            <a href="<?php echo $row_r['wr_4'] ?>" target="_blank">
                <p class="fz_18 c-w lh_1 normal">2. <?php echo $row_r['wr_3'] ?><?php if($row_r['wr_12']=="Y"){ ?><span class="ranking_new_icon"></span><?php } ?></p>
            </a>
        </li>
        <li class="best_ranking_list01 best_ranking_list01_3">
            <a href="<?php echo $row_r['wr_6'] ?>" target="_blank">
                <p class="fz_18 c-w lh_1 normal">3. <?php echo $row_r['wr_5'] ?><?php if($row_r['wr_13']=="Y"){ ?><span class="ranking_new_icon"></span><?php } ?></p>
            </a>
        </li>
        <li class="best_ranking_list01 best_ranking_list01_4">
            <a href="<?php echo $row_r['wr_8'] ?>" target="_blank">
                <p class="fz_18 c-w lh_1 normal">4. <?php echo $row_r['wr_7'] ?><?php if($row_r['wr_14']=="Y"){ ?><span class="ranking_new_icon"></span><?php } ?></p>
            </a>
        </li>
        <li class="best_ranking_list01 best_ranking_list01_5">
            <a href="<?php echo $row_r['wr_10'] ?>" target="_blank">
                <p class="fz_18 c-w lh_1 normal">5. <?php echo $row_r['wr_9'] ?><?php if($row_r['wr_15']=="Y"){ ?><span class="ranking_new_icon"></span><?php } ?></p>
            </a>
        </li>
        <? } ?>
    </ul>
</div>
<div class="best_ranking_content tabcontent tabcontent2" id="tabcontent2">
    <ul class="best_ranking_content02_ul">
        <?php if($list[$r]['wr_id']==2){ ?>
        <li class="best_ranking_list02 best_ranking_list02_1 active">
            <a href="<?php echo $row_r['wr_2'] ?>" target="_blank">
                <p class="fz_18 c-w lh_1 normal">1. <?php echo $row_r['wr_1'] ?><?php if($row_r['wr_11']=="Y"){ ?><span class="ranking_new_icon"></span><?php } ?></p>
            </a>
        </li>
        <li class="best_ranking_list02 best_ranking_list02_2">
            <a href="<?php echo $row_r['wr_4'] ?>" target="_blank">
                <p class="fz_18 c-w lh_1 normal">2. <?php echo $row_r['wr_3'] ?><?php if($row_r['wr_12']=="Y"){ ?><span class="ranking_new_icon"></span><?php } ?></p>
            </a>
        </li>
        <li class="best_ranking_list02 best_ranking_list02_3">
            <a href="<?php echo $row_r['wr_6'] ?>" target="_blank">
                <p class="fz_18 c-w lh_1 normal">3. <?php echo $row_r['wr_5'] ?><?php if($row_r['wr_13']=="Y"){ ?><span class="ranking_new_icon"></span><?php } ?></p>
            </a>
        </li>
        <li class="best_ranking_list02 best_ranking_list02_4">
            <a href="<?php echo $row_r['wr_8'] ?>" target="_blank">
                <p class="fz_18 c-w lh_1 normal">4. <?php echo $row_r['wr_7'] ?><?php if($row_r['wr_14']=="Y"){ ?><span class="ranking_new_icon"></span><?php } ?></p>
            </a>
        </li>
        <li class="best_ranking_list02 best_ranking_list02_5">
            <a href="<?php echo $row_r['wr_10'] ?>" target="_blank">
                <p class="fz_18 c-w lh_1 normal">5. <?php echo $row_r['wr_9'] ?><?php if($row_r['wr_15']=="Y"){ ?><span class="ranking_new_icon"></span><?php } ?></p>
            </a>
        </li>
        <? } ?>
    </ul>
</div>
<? } ?>