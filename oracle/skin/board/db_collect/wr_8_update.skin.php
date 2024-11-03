<?
include_once('./_common.php');

$bo_table = $_POST['bo_table'];
$wr_id = $_POST['wr_id'];

if ($is_admin == 'super'){ // 최고관리자 통과
	$wr = get_write($write_table, $wr_id);
    if (!$wr['wr_id']) {
        alert("글이 존재하지 않습니다.\\n글이 삭제되었거나 이동하였을 수 있습니다.");
    }
	$sql = " update g5_write_{$bo_table} set wr_8 = '{$wr_8}' where wr_id = '$wr_id' ";

    sql_query($sql);
}

alert("해당 게시물의 비고가 저장되었습니다.");

goto_url(G5_URL.'/admin/bbs/board.php?bo_table='.$bo_table);
?>