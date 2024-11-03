<?php
$oneDay = 86400;
$dTimeF = '00:00:00';
$dTimeL = '23:59:59';
// 오늘(D)
$sql = " select count(*) as cnt from ".$g5['member_table']."
			where mb_datetime between '".date("Y-m-d",time())." {$dTimeF}' and '".date("Y-m-d",time())." {$dTimeL}' ";
$row = sql_fetch($sql);
$member_cnt[0] = $row['cnt'];
$member_href_today = G5_ADMIN_URL."/member_list.php?sfl=mb_datetime&stx=".date("Y-m-d",time());

// D-1
$sql = " select count(*) as cnt from ".$g5['member_table']."
			where mb_datetime between '".date("Y-m-d",time()-$oneDay)." {$dTimeF}' and '".date("Y-m-d",time()-$oneDay)." {$dTimeL}' ";
$row = sql_fetch($sql);
$member_cnt[1] = $row['cnt'];
$member_href_l1 = G5_ADMIN_URL."/member_list.php?sfl=mb_datetime&stx=".date("Y-m-d",time()-$oneDay);

// D-2
$sql = " select count(*) as cnt from ".$g5['member_table']."
			where mb_datetime between '".date("Y-m-d",time()-$oneDay*2)." {$dTimeF}' and '".date("Y-m-d",time()-$oneDay*2)." {$dTimeL}' ";
$row = sql_fetch($sql);
$member_cnt[2] = $row['cnt'];
$member_href_l2 = G5_ADMIN_URL."/member_list.php?sfl=mb_datetime&stx=".date("Y-m-d",time()-$oneDay*2);

// D-3
$sql = " select count(*) as cnt from ".$g5['member_table']."
			where mb_datetime between '".date("Y-m-d",time()-$oneDay*3)." {$dTimeF}' and '".date("Y-m-d",time()-$oneDay*3)." {$dTimeL}' ";
$row = sql_fetch($sql);
$member_cnt[3] = $row['cnt'];
$member_href_l3 = G5_ADMIN_URL."/member_list.php?sfl=mb_datetime&stx=".date("Y-m-d",time()-$oneDay*3);

// D-4
$sql = " select count(*) as cnt from ".$g5['member_table']."
			where mb_datetime between '".date("Y-m-d",time()-$oneDay*4)." {$dTimeF}' and '".date("Y-m-d",time()-$oneDay*4)." {$dTimeL}' ";
$row = sql_fetch($sql);
$member_cnt[4] = $row['cnt'];
$member_href_l4 = G5_ADMIN_URL."/member_list.php?sfl=mb_datetime&stx=".date("Y-m-d",time()-$oneDay*4);

// D-5
$sql = " select count(*) as cnt from ".$g5['member_table']."
			where mb_datetime between '".date("Y-m-d",time()-$oneDay*5)." {$dTimeF}' and '".date("Y-m-d",time()-$oneDay*5)." {$dTimeL}' ";
$row = sql_fetch($sql);
$member_cnt[5] = $row['cnt'];
$member_href_l5 = G5_ADMIN_URL."/member_list.php?sfl=mb_datetime&stx=".date("Y-m-d",time()-$oneDay*5);

// D-6
$sql = " select count(*) as cnt from ".$g5['member_table']."
			where mb_datetime between '".date("Y-m-d",time()-$oneDay*6)." {$dTimeF}' and '".date("Y-m-d",time()-$oneDay*6)." {$dTimeL}' ";
$row = sql_fetch($sql);
$member_cnt[6] = $row['cnt'];
$member_href_l6 = G5_ADMIN_URL."/member_list.php?sfl=mb_datetime&stx=".date("Y-m-d",time()-$oneDay*6);

// 금월
$sql = " select count(*) as cnt from ".$g5['member_table']."
			where mb_datetime between '".date("Y-m-01",time())." {$dTimeF}' and '".date("Y-m-d",time())." {$dTimeL}' ";
$row = sql_fetch($sql);
$member_cnt[month] = $row['cnt'];
$member_href_thismonth = G5_ADMIN_URL."/member_list.php?sfl=mb_datetime&stx=".date("Y-m",time());

// 금년
$sql = " select count(*) as cnt from ".$g5['member_table']."
			where mb_datetime between '".date("Y-01-01",time())." {$dTimeF}' and '".date("Y-m-d",time())." {$dTimeL}' ";
$row = sql_fetch($sql);
$member_cnt[year] = $row['cnt'];
$member_href_thisyear = G5_ADMIN_URL."/member_list.php?sfl=mb_datetime&stx=".date("Y-",time());

// 전체
$sql = " select count(*) as cnt from ".$g5['member_table']."  ";
$row = sql_fetch($sql);
$member_cnt[total] = $row['cnt'];
$member_href_total = G5_ADMIN_URL."/member_list.php";

$member_cnt['max'] = max($member_cnt[0], $member_cnt[1], $member_cnt[2], $member_cnt[3], $member_cnt[4], $member_cnt[5], $member_cnt[6]);
$member_cnt['sum'] = $member_cnt[0] + $member_cnt[1] + $member_cnt[2] + $member_cnt[3] + $member_cnt[4] + $member_cnt[5] + $member_cnt[6];
for ($i=0; $i<=6; $i++) {
	$member_cnt_percent[$i] = 0;
	$member_cnt_height[$i] = 0;
	if ($member_cnt['sum']) {
		//$member_cnt_percent[$i] = round(($member_cnt[$i] / $member_cnt['sum'] * 100), 1);
		$member_cnt_percent[$i] = number_format(($member_cnt[$i] / $member_cnt['sum'] * 100), 1);
	}
	if ($member_cnt_percent[$i])
		$member_cnt_height[$i] = round((($member_cnt[$i] / $member_cnt['max'] * 100) * 0.85), 0);
}

?>
<script>
$(document).ready(function(){
	$('.oneday').hover(function(){
		$(this).children('.day_cnt').show();
		$img_top = $(this).children('img').height();
		$top = 192 - $img_top;
		$(this).children('.day_cnt').css('top', $top+'px');
	},function(){
		$(this).children('.day_cnt').hide();
	});
});
</script>
<div class="adm_head03">
	<table>
		<tr class="adm_head03_top" valign=bottom align=middle>
			<td height=250 class="td_pct">
				<div class="td_pct_100">100</div>
				<div class="td_pct_80">80</div>
				<div class="td_pct_60">60</div>
				<div class="td_pct_40">40</div>
				<div class="td_pct_20">20</div>
				<div class="td_pct_0">0</div>
				<div class="td_pct_div">&nbsp;</div>
			</td>
			<td height=250 class="oneday">
				<img height="<?php echo $member_cnt_percent[6];?>%" src="<?php echo $DracoCounter_URL; ?>/img/graph_status.gif">
				<div class="day_cnt">
					<?php echo $member_cnt[6];?>명
				</div>
			</td>
			<td height=250 class="oneday">
				<img height="<?php echo $member_cnt_percent[5];?>%" src="<?php echo $DracoCounter_URL; ?>/img/graph_status.gif">
				<div class="day_cnt">
					<?php echo $member_cnt[5];?>명
				</div>
			</td>
			<td height=250 class="oneday">
				<img height="<?php echo $member_cnt_percent[4];?>%" src="<?php echo $DracoCounter_URL; ?>/img/graph_status.gif">
				<div class="day_cnt">
					<?php echo $member_cnt[4];?>명
				</div>
			</td>
			<td height=250 class="oneday">
				<img height="<?php echo $member_cnt_percent[3];?>%" src="<?php echo $DracoCounter_URL; ?>/img/graph_status.gif">
				<div class="day_cnt">
					<?php echo $member_cnt[3];?>명
				</div>
			</td>
			<td height=250 class="oneday">
				<img height="<?php echo $member_cnt_percent[2];?>%" src="<?php echo $DracoCounter_URL; ?>/img/graph_status.gif">
				<div class="day_cnt">
					<?php echo $member_cnt[2];?>명
				</div>
			</td>
			<td height=250 class="oneday">
				<img height="<?php echo $member_cnt_percent[1];?>%" src="<?php echo $DracoCounter_URL; ?>/img/graph_status.gif">
				<div class="day_cnt">
					<?php echo $member_cnt[1];?>명
				</div>
			</td>
			<td height=250 class="oneday">
				<img height="<?php echo $member_cnt_percent[0];?>%" src="<?php echo $DracoCounter_URL; ?>/img/graph_status.gif">
				<div class="day_cnt">
					<?php echo $member_cnt[0];?>명
				</div>
			</td>
		</tr>
		<tr align=middle>
			<td>(%)</td>
			<td height=40>
				<SPAN <?php echo $mouseEventwebcText;?> >
					<?php echo date("Y-m-d" ,time()-$oneDay*6);?>
				</SPAN>
			</td>
			<td>
				<SPAN <?php echo $mouseEventwebcText;?> >
					<?php echo date("Y-m-d" ,time()-$oneDay*5);?>
				</SPAN>
			</td>
			<td>
				<SPAN <?php echo $mouseEventwebcText;?> >
					<?php echo date("Y-m-d" ,time()-$oneDay*4);?>
				</SPAN>
			</td>
			<td>
				<SPAN <?php echo $mouseEventwebcText;?> >
					<?php echo date("Y-m-d" ,time()-$oneDay*3);?>
				</SPAN>
			</td>
			<td>
				<SPAN <?php echo $mouseEventwebcText;?> >
					<?php echo date("Y-m-d" ,time()-$oneDay*2);?>
				</SPAN>
			</td>
			<td>
				<SPAN <?php echo $mouseEventwebcText;?> >
					<?php echo date("Y-m-d" ,time()-$oneDay*1);?>
				</SPAN>
			</td>
			<td>
				<SPAN <?php echo $mouseEventwebcText;?> >
					<?php echo date("Y-m-d" ,time());?>
				</SPAN>
			</td>
		</tr>
	</table>
</div>