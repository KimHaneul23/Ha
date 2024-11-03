<?php
$bo_table = 'doctor';
$write_table = $g5['write_prefix'] . $bo_table;
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

	// 이미지파일 호출
	$thumb = $list[$i]['file'];

	$class = (($i % 2) == 0) ? 'right':'left';
?>
<div id="doctor<?=$i ?>" class="modal">
	<div class="modal-dialog">
		<button type="button" class="modal-close" onclick="modalHide('doctor<?=$i ?>')"></button>
		<div class="modal-content pc-only">
			<div class="modal-body">
				<div class="modal-titlebox">
					<span>피부과 전문의</span>
					<h2><?=$list[$i]['subject']; ?> <small><?=$list[$i]['wr_1'] ?></small></h2>
					<div class="txtbox04"><?=$list[$i]['wr_3'] ?></div>
				</div>
				<div class="modal-txtbox">
					<div class="txtbox03"><?=$list[$i]['wr_2'] ?></div>
				</div>
			</div>
		</div>
		<div class="modal-content mo-only">
			<div class="modal-body">
				<div class="modal-titlebox">
					<span>피부과 전문의</span>
					<h2><?=$list[$i]['subject']; ?> <small><?=$list[$i]['wr_1'] ?></small></h2>
				</div>
				<div class="modal-scroll-wrap">
					<div class="txtbox04"><?=$list[$i]['wr_3'] ?></div>
					<div class="modal-txtbox">
						<div class="txtbox03"><?=$list[$i]['wr_2'] ?></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="transparents-layer modal-doctor<?=$i ?>" style="background:url('/data/file/<?=$bo_table ?>/<?=$thumb[2]['file'] ?>') no-repeat 25% center/cover;"></div>
<? } ?>