<?php

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

for($i=0;$row=sql_fetch_array($qry);$i++){ ?>
<div class="swiper-slide sub5_1_4_cont5_slide">
	<a href="javascript:void(0);">
		<div class="sub5_1_4_cont5_slide_img">
			<img src="<?php echo G5_URL ?>/data/file/<?=$bo_table ?>/<?=$thumb[0]['file'] ?>" alt="<?=$row['wr_subject']?>">
			<p class="sub5_1_4_cont5_slide_text fz_20 ls_2 lh_1 normal">
				<?=$row['wr_subject']?>
			</p>
		</div>
	</a>
</div>
<?
}
?>