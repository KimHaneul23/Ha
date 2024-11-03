<?php
$sub_menu = "100100";
include_once('./_common.php');

$hd_menu_code = 3;
$menu_left_code = 302;
$menu_left_sub_code = 30201;

auth_check($auth[$sub_menu], 'r');

if ($is_admin != 'super')
    alert('최고관리자만 접근 가능합니다.');

for ($i = 0 ; $i < count($hosp_off) ; $i++){
	$hosp_off_list .= $hosp_off[$i] . "§||§";
}

for($i = 0 ; $i < count($_POST["startHour"]) ; $i++){
	$startTime = $startTime . $_POST["startHour"][$i] . ":" . $_POST["startMin"][$i] . "§§";
	$endTime = $endTime . $_POST["endHour"][$i] . ":" . $_POST["endMin"][$i] . "§§";
}

$lunch_time = $lunchHour . ":" . $lunchMin;


if(empty($wr_id)) {
	$sql = "Insert Into g5_reserv_default Set ";
} else {
	$sql = "Update g5_reserv_default Set ";
}

$sql .= " hosp_type = '$hosp_type', ";
$sql .= " hosp_off = '$hosp_off_list', ";
$sql .= " start_time = '$startTime', ";
$sql .= " end_time = '$endTime', ";
$sql .= " min_gap = '$min_gap', ";
$sql .= " lunch_time = '$lunch_time', ";
$sql .= " lunch_min_gap = '$lunch_min_gap' ";

if($wr_id) {
	$sql .= " where wr_id = '$wr_id'";
}

sql_query($sql);

alert("처리 되었습니다.");
?>