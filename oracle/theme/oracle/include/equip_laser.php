<?php
$bo_table = 'equipment';
$sql = "select * from g5_menu where me_use = 1 and me_mobile_use = 1 order by me_code, me_order asc";
$qry = sql_query($sql);
for($i=0;$row=sql_fetch_array($qry);$i++) {
	$me_list[$i] = $row;
}
for($i=0; $i<count($me_list); $i++) {
	if(strpos($me_list[$i]['me_link'], $_SERVER['REQUEST_URI']) !== false) $filter2 = $me_list[$i]['me_code'];
}

$sql = "select * from g5_write_equipment where 1=1 ";

if($filter2) $sql .= " and wr_5 regexp '(^|,)".$filter2."(,|$)'";
$sql .= " order by wr_id desc";
//echo 
$qry = sql_query($sql);

for($i=0;$row=sql_fetch_array($qry);$i++){ 
    $list[$i] = get_list($row, $board, $board_skin_url, $board['bo_subject_len']);
    $thumb = get_file($bo_table, $list[$i]['wr_id']);
?>
<div class="swiper-slide sub2_1_4_cont5_slide">
	<a href="javascript:modalView_equipment('equipment<?=$i ?>');">
		<div class="sub2_1_4_cont5_slide_img ta_c">
			<img src="<?php echo G5_URL ?>/data/file/<?=$bo_table ?>/<?=$thumb[0]['file'] ?>" alt="">
		</div>
		<p class="sub2_1_4_cont5_slide_text fz_20 ls_2 lh_1 normal ta_l">
            <?=$row['wr_subject']?>
        </p>
	</a>
</div>
<?
}
?>