<?php
include_once('./_common.php');

// 누적 방문자
$sql1 = "select sum(vs_count) as count from g5_visit_sum";
$result1 = sql_fetch($sql1);

// 전일 방문자
$sql2 = "select vs_count from g5_visit_sum where vs_date='{$_POST['yesterday']}'";
$result2 = sql_fetch($sql2);

// 오늘 방문자
$sql3 ="select vs_count from g5_visit_sum where vs_date='{$_POST['today']}'";
$result3 = sql_fetch($sql3);

// 전월 방문자
$sql4 = "select vs_count from g5_visit_sum where vs_date='{$_POST['one_month']}'";
$result4 = sql_fetch($sql4);

// 3개월전 방문자
$sql5 = "select vs_count from g5_visit_sum where vs_date='{$_POST['three_month']}'";
$result5 = sql_fetch($sql5);

$json = '{"result":[';
$json .= '{"total":"'.$result1['count'].'","yesterday":"'.$result2['vs_count'].'", "today":"'.$result3['vs_count'].'", "one_month":"'.$result4['vs_count'].'", "three_month":"'.$result5['vs_count'].'"}';
$json .= ']}';

echo $json;
?>
