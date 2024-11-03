<?php
$sub_menu = "100100";
include_once('./_common.php');
include_once('./reserv_off_calendar.php');

$hd_menu_code = 3;
$menu_left_code = 302;
$menu_left_sub_code = 30203;

auth_check($auth[$sub_menu], 'r');

if ($is_admin != 'super')
    alert('최고관리자만 접근 가능합니다.');

if($offValue == "") {
	$sql = "update g5_reserv_off set del_dt = '".G5_TIME_YMDHIS."' Where off_date = '$dateValue'";
} else {
	$sql = "Insert Into g5_reserv_off set off_date = '$dateValue', reg_dt = '".G5_TIME_YMDHIS."'";
}

if(sql_query($sql)){
	$result = "Y";
}
?>
{"result" : "<?=$result?>"}