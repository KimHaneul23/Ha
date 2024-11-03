<?
header( "Content-type: application/vnd.ms-excel" ); 
header( "Content-type: application/vnd.ms-excel; charset=utf-8");
header( "Content-Disposition: attachment; filename = db_collect.xls" ); 
header( "Content-Description: PHP4 Generated Data" );

include_once ('./_common.php');

$sql = "select * from g5_write_db_collect order by wr_id desc";
$result = sql_query($sql);

// 테이블 상단 만들기
$EXCEL_STR = "
<table border='1'>
<tr>
   <td>번호</td>
   <td>담당자</td>
   <td>이름</td>
   <td>성별</td>
   <td>나이</td>
   <td>연락처</td>
   <td>신청일</td>
   <td>디바이스</td>
   <td>URL</td>
   <td>경로</td>
   <td>상담유형</td>
   <td>관심분야</td>
   <td>방문일정</td>
   <td>수술예약</td>
   <td>아웃바운드</td>
   <td>메모</td>
   <td>비고</td>
</tr>";

for($i=0; $row = sql_fetch_array($result);$i++) {
   if($i == 0){
		$j = 1;
   }
   $EXCEL_STR .= "
   <tr>
       <td>".$j."</td>
       <td>".$row['wr_1']."</td>
	   <td>".$row['wr_3']."</td>
	   <td>".$row['wr_4']."</td>
	   <td>".$row['wr_5']."</td>
	   <td>".$row['wr_6']."</td>
	   <td>".$row['wr_datetime']."</td>
	   <td>".$row['wr_10']."</td>
	   <td>".$row['wr_content']."</td>
	   <td>".$row['wr_7']."</td>
	   <td>".$row['wr_2']."</td>
	   <td>".$row['ca_name']."</td>
	   <td>".$row['wr_11']."</td>
	   <td>".$row['wr_12']."</td>
	   <td>".$row['wr_13']."</td>
	   <td>".$row['wr_subject']."</td>
	   <td>".$row['wr_8']."</td>
   </tr>
   ";
   $j++;
}

$EXCEL_STR .= "</table>";

echo "<meta content=\"application/vnd.ms-excel; charset=UTF-8\" name=\"Content-type\"> ";
echo $EXCEL_STR;
?>