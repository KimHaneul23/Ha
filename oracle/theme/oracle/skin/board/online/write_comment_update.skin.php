<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가 
// 자신만의 코드를 넣어주세요. 
/*
include_once(G5_LIB_PATH.'/icode.sms.lib.php'); 

$sql = "select * from `sms5_config`";
$result = sql_query($sql);

while ($row = sql_fetch_array($result)){
	$cf_phone = $row['cf_phone'];
}

$sql2 = "select * from `g5_write_{$bo_table}` where wr_id = '{$wr_id}' ";
$result2 = sql_query($sql2);
while ($row2 = sql_fetch_array($result2)){
	$wr_1 = $row2['wr_1'];
	$wr_2 = $row2['wr_2'];
	$wr_3 = $row2['wr_3'];
}

$sql3 = "select * from `g5_write_{$bo_table}` where wr_parent = '{$wr_parent}' and wr_id_comment = 0 ";
$result3 = sql_query($sql2);
while ($row3 = sql_fetch_array($result3)){
	$send_name = $row3['wr_name'];
}


$send_hp_mb = $cf_phone; // 보내는 전화번호 
$recv_hp_mb = $wr_1."-".$wr_2."-".$wr_3; //  받는 전화번호

$send_hp = str_replace("-","",$send_hp_mb); // - 제거 
$recv_hp = str_replace("-","",$recv_hp_mb); // - 제거 

$send_number =  "$send_hp"; 
$recv_number = "$recv_hp"; 

$sms_content = $send_name."님의 문의하신 내용의 답변이 완료되었습니다.";  // 문자 내용

$SMS = new SMS; // SMS 연결 
$SMS->SMS_con($config['cf_icode_server_ip'], $config['cf_icode_id'], $config['cf_icode_pw'], $config['cf_icode_server_port']); 
$SMS->Add($recv_number, $send_number, $config['cf_icode_id'], iconv("utf-8", "euc-kr", stripslashes($sms_content)), ""); 
$SMS->Send();
/*
?>