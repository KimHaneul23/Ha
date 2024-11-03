<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가 
// 자신만의 코드를 넣어주세요.
include_once(G5_LIB_PATH.'/icode.lms.lib.php');
include_once(G5_LIB_PATH.'/icode.sms.lib.php');
include_once(G5_LIB_PATH.'/mailer.lib.php');

$type = $_POST['type'];

if ($is_admin && $type == 'admin'){
	$sql1 = " update $write_table set wr_datetime='$wr_datetime', wr_last='$wr_datetime', wr_hit='$wr_hit' where wr_id = '$wr_id' "; 
} else {
	$wr_datetime = date("Y-m-d H:i:s");
	$wr_hit = 0;
	$sql1 = " update $write_table set wr_datetime='$wr_datetime', wr_hit='$wr_hit' where wr_id = '$wr_id' "; 
}
sql_query($sql1);

// 문자 보내기
/*
if($wr_11 == 'Y'){
	$sql = "select * from `sms5_config`";
	$result = sql_query($sql);

	while ($row = sql_fetch_array($result)){
		$cf_phone = $row['cf_phone'];
	}

	$send_hp_mb = $cf_phone; // 보내는 전화번호 
	$recv_hp_mb = $wr_2; //  받는 전화번호

	$send_hp = str_replace("-","",$send_hp_mb); // - 제거 
	$recv_hp = str_replace("-","",$recv_hp_mb); // - 제거 

	$send_number =  "$send_hp"; 
	$recv_number = "$recv_hp";

	$date = explode("-", $wr_6);
	$year = $date[0];
	$month = $date[1];
	$day = $date[2];

	$time = explode(":", $wr_7);
	$hour = $time[0];
	$min = $time[1];

	//$sms_content = $wr_subject."님의 ".$year."년 ".$month."월 ".$day."일 ".$hour."시".$min."분에 ".$wr_1." 예약 접수 되었습니다.";  // 문자 내용

	/* LMS 코드 */
	/*
	$strDest = array();
	$strDest[0] = $recv_number;

	$SMS = new LMS; // LMS 연결 
	$SMS->SMS_con($config['cf_icode_server_ip'], $config['cf_icode_id'], $config['cf_icode_pw'], '1'); 
	$SMS->Add($strDest, $send_number, $config['cf_icode_id'], "", "", iconv("utf-8", "euc-kr", stripslashes($sms_content)), "", "1"); 
	$SMS->Send();
	*/

	/* SMS 코드 */
	/*
	$SMS = new SMS; // SMS 연결 
	$SMS->SMS_con($config['cf_icode_server_ip'], $config['cf_icode_id'], $config['cf_icode_pw'], $config['cf_icode_server_port']); 
	$SMS->Add($recv_number, $send_number, $config['cf_icode_id'], iconv("utf-8", "euc-kr", stripslashes($sms_content)), ""); 
	$SMS->Send();
	

}


if($wr_12 == 'Y'){
	$subject = $wr_subject."님 안녕하세요.".$g5['title']." 입니다.^^";
	$content = $wr_9;
	$email = $wr_4."@".$wr_5;
	
	$admin = get_admin('super'); 
	mailer($admin[mb_nick], $admin[mb_email], $email, $subject, $content, 1);
}
*/


$wr_id = $_POST['wr_id'];
$wr_11 = $_POST['wr_11'];
$wr_12 = $_POST['wr_12'];

$sql = " update g5_write_{$bo_table} set wr_11 = '{$wr_11}', wr_12 = '{$wr_12}' where wr_id = '$wr_id' ";
	sql_query($sql);







if($is_admin && $type == 'admin'){
	alert("성공적으로 수정되었습니다.", $_SERVER["HTTP_REFERER"]); 
}else{
	goto_url('/mobile/thankyou');
}
?>

