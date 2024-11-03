<?
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가 
include_once(G5_LIB_PATH.'/mailer.lib.php');
	include_once(G5_LIB_PATH.'/icode.lms.lib.php');
	include_once(G5_LIB_PATH.'/icode.sms.lib.php');

// 자신만의 코드를 넣어주세요. 
if(!$wr_comment) {  // 코멘일때는 저장하면 안됩.
    $sql = " update $write_table set 
				wr_11 = '$wr_11',
				wr_12 = '$wr_12',
				wr_13 = '$wr_13',
				where wr_id = '$wr_id' " ;
    sql_query($sql);
}


// view페이지를 보여주지 않고 write 페이지로 돌아가고자 할때 사용
if($w != 'u') {

	$wr_2 = $_POST['wr_2'];
	$wr_3 = $_POST['wr_3'];
	$wr_6 = $_POST['wr_6'];
	$wr_datetime =  date("Y-m-d H:i:s");

	$content = '
	<table width="400" border="1" cellspacing="0" cellpadding="20" bordercolor="#ebebeb" >
	  <tbody>
		<tr>
		  <td colspan="2" style="text-align:center;"><img src="http://notebreast.com/data/file/main_logo/3717534104_RBFjkTUe_e8af002c5f4198117a8447ce4c00cdc716e1f4fb.png"></td>
		</tr>
		<tr>
		  <td width="100">이름</td>
		  <td style="text-align:center;">'.$wr_3.'</td>
		</tr>
		<tr>
		  <td width="100">관심분야</td>
		  <td style="text-align:center;">'.$wr_2.'</td>
		</tr>
		<tr>
		  <td>연락처</td>
		  <td style="text-align:center;">'.$wr_6.'</td>
		</tr>
		<tr>
		  <td>신청일</td>
		  <td style="text-align:center;">'.$wr_datetime.'</td>
		</tr>
	  </tbody>
	</table>';

	$admin = get_admin('super'); 
	$admin[mb_nick] = "NOTE BREAST SURGERY ";
	mailer($admin[mb_nick],'jshee940315@naver.com', 'jshee940315@naver.com', '노트성형외과 가슴사이트 DB게시판에 문의가 들어왔습니다.',$content,1);
	// mailer($admin[mb_nick],'yeonhee.lee@noteprs.com', 'info@noteprs.com', '노트성형외과 가슴사이트 DB게시판에 문의가 들어왔습니다.',$content,1);
	// mailer($admin[mb_nick],'yeonhee.lee@noteprs.com', 'info@bizmeka.com', '노트성형외과 가슴사이트 DB게시판에 문의가 들어왔습니다.',$content,1);
	// mailer($admin[mb_nick],'yeonhee.lee@noteprs.com', 'yeonhee.lee@noteprs.com', '노트성형외과 가슴사이트 DB게시판에 문의가 들어왔습니다.',$content,1);



	//alert("정상 등록되었습니다.\\n\\n감사합니다.");
	goto_url('/thankyou');
}
?>