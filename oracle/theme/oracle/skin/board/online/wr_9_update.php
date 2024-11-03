<?php
include_once('./_common.php');
include_once(G5_LIB_PATH.'/icode.lms.lib.php');
include_once(G5_LIB_PATH.'/mailer.lib.php');
// 자신만의 코드를 넣어주세요.

$wr_id = $_POST['wr_id'];
$wr_subject = $_POST['wr_subject'];
$wr_1 = $_POST['wr_1'];
$wr_2 = $_POST['wr_2'];
$wr_3 = $_POST['wr_3'];
$wr_4 = $_POST['wr_4'];
$wr_7 = $_POST['wr_7'];
$wr_9 = $_POST['wr_9'];
$wr_11 = $_POST['wr_11'];
$wr_12 = $_POST['wr_12'];
$wr_13 = $_POST['wr_13'];

$wr_8 = date("Y-m-d H:i:s");

if($wr_11 == 'Y'){
	$sql = " update g5_write_{$bo_table} set wr_9 = '{$wr_9}', wr_8 = '{$wr_8}' where wr_id = '$wr_id' ";
	sql_query($sql);

	$sql = "select * from `sms5_config`";
	$result = sql_query($sql);

	while ($row = sql_fetch_array($result)){
		$cf_phone = $row['cf_phone'];
	}

	$send_hp_mb = $cf_phone; // 보내는 전화번호 
	$recv_hp_mb = $wr_2."-".$wr_3."-".$wr_4; //  받는 전화번호

	$send_hp = str_replace("-","",$send_hp_mb); // - 제거 
	$recv_hp = str_replace("-","",$recv_hp_mb); // - 제거 

	$send_number =  "$send_hp"; 
	$recv_number = "$recv_hp";

	$sms_content = $wr_9;  // 문자 내용

	/* LMS 코드 */
	$strDest = array();
	$strDest[0] = $recv_number;

	$SMS = new LMS; // LMS 연결 
	$SMS->SMS_con($config['cf_icode_server_ip'], $config['cf_icode_id'], $config['cf_icode_pw'], '1'); 
	$SMS->Add($strDest, $send_number, $config['cf_icode_id'], "", "", iconv("utf-8", "euc-kr", stripslashes($sms_content)), "", "1"); 
	$SMS->Send();


$wr_num = get_next_num('g5_write_counsel_sms_db');

 $sql2 = " insert into `stps`.`g5_write_counsel_sms_db` (`wr_id`, `wr_num`, `wr_reply`, `wr_parent`, `wr_is_comment`, `wr_comment`, `wr_comment_reply`, `ca_name`, `wr_option`, `wr_subject`, `wr_content`, `wr_link1`, `wr_link2`, `wr_link1_hit`, `wr_link2_hit`, `wr_hit`, `wr_good`, `wr_nogood`, `mb_id`, `wr_password`, `wr_name`, `wr_email`, `wr_homepage`, `wr_datetime`, `wr_file`, `wr_last`, `wr_ip`, `wr_facebook_user`, `wr_twitter_user`, `wr_1`, `wr_2`, `wr_3`, `wr_4`, `wr_5`, `wr_6`, `wr_7`, `wr_8`, `wr_9`, `wr_10`, `wr_11`, `wr_12`, `wr_13`) VALUES (NULL,'$wr_num', '', '', '', '', '', '', '', '온라인상담', '$recv_hp_mb', '', '', '', '', '', '', '', '', '', '', '', '', '".G5_TIME_YMDHIS."', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '')";
sql_query($sql2);

    sql_query("update {$g5['board_table']} set bo_count_write = bo_count_write + 1  where bo_table = 'counsel_sms_db'");

} else {
	$sql = " update g5_write_{$bo_table} set wr_9 = '{$wr_9}', wr_8 = '{$wr_8}' where wr_id = '$wr_id' ";
	sql_query($sql);
}

if($wr_12 == 'Y'){
	$sql = " update g5_write_{$bo_table} set wr_9 = '{$wr_9}', wr_8 = '{$wr_8}' where wr_id = '$wr_id' ";
	sql_query($sql);

	$subject = $wr_subject."님 안녕하세요. ".$config['cf_title']."에서 질문하신 사항에 답변 드립니다.";
	$content = nl2br($wr_9);
	$email = $wr_13."@".$wr_5;
	
	$admin = get_admin('super'); 
	mailer($admin[mb_nick], $admin[mb_email], $email, $subject, $content, 1);
} else {
	$sql = " update g5_write_{$bo_table} set wr_9 = '{$wr_9}', wr_8 = '{$wr_8}' where wr_id = '$wr_id' ";
	sql_query($sql);
}



alert("성공적으로 답변되었습니다.", $_SERVER["HTTP_REFERER"]); 
?>


