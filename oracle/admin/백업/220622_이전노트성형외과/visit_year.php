<?php
$sub_menu = "200800";
include_once('./_common.php');

$hd_menu_code = 2;
$menu_left_code = 203;

include_once('./admin.head.php');

auth_check($auth[$sub_menu], 'r');

$g5['title'] = '연도별 접속자집계';
//include_once('./visit.sub.php');
include_once(G5_LIB_PATH.'/visit.lib.php');

$colspan = 4;

$max = 0;
$sum_count = 0;
$sql = " select SUBSTRING(vs_date,1,4) as vs_year, SUM(vs_count) as cnt
            from {$g5['visit_sum_table']}
            where vs_date between '{$fr_date}' and '{$to_date}'
            group by vs_year
            order by vs_year desc ";
$result = sql_query($sql);
for ($i=0; $row=sql_fetch_array($result); $i++) {
    $arr[$row['vs_year']] = $row['cnt'];

    if ($row['cnt'] > $max) $max = $row['cnt'];

    $sum_count += $row['cnt'];
}
?>
<div id="wrapper">
	<div id="admin_menu_left">
		<?php include_once('./admin.menu.left300.php'); ?>
	</div>
    <div id="container" class="menu100_minheight">
		<div id="admin_right_wrap">
			<div class="admin_title">
				<img src="<?php echo G5_ADMIN_URL ?>/img/admin_title_bg.png" alt="●"/>
				<?=$g5['title']?>
			</div>
			<?php include_once('./visit.sub.php'); ?>
			<div class="tbl_head01 tbl_wrap">
				<table>
				<caption><?php echo $g5['title']; ?> 목록</caption>
				<thead>
				<tr>
					<th scope="col">년</th>
					<th scope="col">그래프</th>
					<th scope="col">접속자수</th>
					<th scope="col">비율(%)</th>
				</tr>
				</thead>
				<tfoot>
				<tr>
					<td colspan="2">합계</td>
					<td><strong><?php echo number_format($sum_count) ?></strong></td>
					<td>100%</td>
				</tr>
				</tfoot>
				<tbody>
				<?php
				$i = 0;
				$k = 0;
				$save_count = -1;
				$tot_count = 0;
				if (count($arr)) {
					foreach ($arr as $key=>$value) {
						$count = $value;

						$rate = ($count / $sum_count * 100);
						$s_rate = number_format($rate, 1);

						$bg = 'bg'.($i%2);
				?>

				<tr class="<?php echo $bg; ?>">
					<td class="td_category"><a href="./visit_month.php?fr_date=<?php echo $key ?>-01-01&amp;to_date=<?php echo $key ?>-12-31"><?php echo $key ?></a></td>
					<td>
						<div class="visit_bar">
							<span style="width:<?php echo $s_rate ?>%"></span>
						</div>
					</td>
					<td class="td_numbig"><?php echo number_format($value) ?></td>
					<td class="td_num"><?php echo $s_rate ?></td>
				</tr>

				<?php
					}
				} else {
					echo '<tr><td colspan="'.$colspan.'" class="empty_table">자료가 없습니다.</td></tr>';
				}
				?>
				</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<?php
include_once('./admin.tail.php');
?>
