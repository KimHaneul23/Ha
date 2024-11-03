<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

$mode = "";

if ($is_admin && $adm_bbs == 1 && $type != 2){
	$mode = "admin";
}

switch ($mode){
	case "admin" :
		include "$board_skin_path/write.admin.php";
		break;
	default :
		include "$board_skin_path/write.member.php";
}
?>
