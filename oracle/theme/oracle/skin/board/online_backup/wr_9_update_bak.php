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
$wr_9 = $_POST['wr_9'];
$wr_11 = $_POST['wr_11'];
$wr_12 = $_POST['wr_12'];

$wr_8 = date("Y-m-d H:i:s");

if($wr_11 == 'Y'){
	//$sql = " update g5_write_{$bo_table} set wr_9 = '{$wr_9}', wr_8 = '{$wr_8}' where wr_id = '$wr_id' ";
	//sql_query($sql);

	//$sql = "select * from `sms5_config`";
	//$result = sql_query($sql);

	//while ($row = sql_fetch_array($result)){
	//	$cf_phone = $row['cf_phone'];
	//}

	$send_hp_mb = '025153399'; // 보내는 전화번호 
	$recv_hp_mb = $wr_1."-".$wr_2."-".$wr_3; //  받는 전화번호

	$send_hp = str_replace("-","",$send_hp_mb); // - 제거 
	$recv_hp = str_replace("-","",$recv_hp_mb); // - 제거 

	$send_number =  "$send_hp"; 
	$recv_number = "$recv_hp";

	$sms_content = $wr_9;  // 문자 내용

	/* LMS 코드 */
	//$strDest = array();
	//$strDest[0] = $recv_number;

	//$SMS = new LMS; // LMS 연결 
	//$SMS->SMS_con($config['cf_icode_server_ip'], $config['cf_icode_id'], $config['cf_icode_pw'], '1'); 
	//$SMS->Add($strDest, $send_number, $config['cf_icode_id'], "", "", iconv("utf-8", "euc-kr", stripslashes($sms_content)), "", "1"); 
	//$SMS->Send();
	
	$servername = "115.68.153.199";
    $username = "flutter";
    $password = "f1utt2R4int";
    $conn = null;
	$sql2 = null;

    try {
      $conn = new PDO("mysql:host=$servername;dbname=flutter", $username, $password);
      // set the PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      //echo "Connected successfully"; 
    }
    catch(PDOException $e)
    {
      // echo "Connection failed: " . $e->getMessage();
    }
	
	if(strlen($sms_content) > 80) {
		 $sql2  = "INSERT INTO MMS_MSG (SUBJECT, PHONE, CALLBACK, STATUS, REQDATE, MSG, TYPE) VALUES ('글로비성형외과', '".$recv_number."','".$send_number."', '0', NOW(),'".$sms_content."','0' );";
	}
	else {
		 $sql2 = "INSERT INTO SC_TRAN (TR_SENDDATE, TR_SENDSTAT, TR_MSGTYPE,TR_PHONE,TR_CALLBACK,TR_MSG) VALUES (NOW(), '0','0','".$recv_number."','".$send_number."','".$sms_content."');";
    }
	//print_r($sql2);
	//echo "<br/>";
    $conn->exec($sql2);

} else {
	$sql = " update g5_write_{$bo_table} set wr_9 = '{$wr_9}', wr_8 = '{$wr_8}' where wr_id = '$wr_id' ";
	sql_query($sql);
}

if($wr_12 == 'Y'){
	$sql = " update g5_write_{$bo_table} set wr_9 = '{$wr_9}', wr_8 = '{$wr_8}' where wr_id = '$wr_id' ";
	sql_query($sql);

	//$subject = $wr_subject."님 안녕하세요. ".$config['cf_title']."에서 질문하신 사항에 답변 드립니다.";
	$subject = "글로비성형외과에서 [".$wr_subject."]님의 문의사항에 답변 드립니다.";
	$content = $wr_9;
	$email = $wr_4."@".$wr_5;
	
	$admin = get_admin('super'); 
	mailer($admin[mb_nick], $admin[mb_email], $email, $subject, $content, 1);
} else {
	$sql = " update g5_write_{$bo_table} set wr_9 = '{$wr_9}', wr_8 = '{$wr_8}' where wr_id = '$wr_id' ";
	sql_query($sql);
}

alert("성공적으로 답변되었습니다.", $_SERVER["HTTP_REFERER"]); 
?>