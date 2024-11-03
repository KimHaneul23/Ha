<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
$ca_name='';
foreach($_POST[chk_ca_name] as $var) {
 $ca_name.=",$var";
}
if (strlen($ca_name)) $ca_name=substr($ca_name,1);

$wr_5 = implode(',', $_POST['ch_wr_5']);
?>