<?
include_once('./_common.php');

$bo_table = $_GET['bo_table'];
$wr_id = $_GET['wr_id'];
$wr_13 = $_GET['wr_13'];

if ($is_admin == 'super'){ // 최고관리자 통과
	$wr = get_write($write_table, $wr_id);
    if (!$wr['wr_id']) {
        alert("글이 존재하지 않습니다.\\n글이 삭제되었거나 이동하였을 수 있습니다.");
    }
	if ($wr_13 == '확인중'){
		$sql = " update g5_write_{$bo_table} set wr_13 = '완료' where wr_id = '$wr_id' ";
	} else {
		$sql = " update g5_write_{$bo_table} set wr_13 = '확인중' where wr_id = '$wr_id' ";
	}
    sql_query($sql);
}
goto_url(G5_URL.'/admin/bbs/board.php?bo_table='.$bo_table);
?>