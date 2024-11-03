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
<?php if($list[$r]['wr_id']==1){ ?>
<li id="tablinks01" class="best_ranking_tab_li tablinks active">
    <a href="#tabcontent1">
        <p class="fz_16 ta_c"><?php echo $list[$r]['wr_subject'] ?></p>
    </a>
</li>
<? } ?>
<?php if($list[$r]['wr_id']==2){ ?>
<li id="tablinks02" class="best_ranking_tab_li tablinks">
    <a href="#tabcontent2">
        <p class="fz_16 ta_c"><?php echo $list[$r]['wr_subject'] ?></p>
    </a>
</li>
<? } ?>
<? } ?>