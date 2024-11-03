<?php
$sub_menu = "100100";
include_once('./_common.php');
include_once('./reserv_off_calendar.php');

$hd_menu_code = 3;
$menu_left_code = 302;
$menu_left_sub_code = 30203;

auth_check($auth[$sub_menu], 'r');

if ($is_admin != 'super')
    alert('최고관리자만 접근 가능합니다.');

$Calender = new calenderView();
$choiceDate = (empty($choiceDate)) ? date("Y-m-d") : $choiceDate ;
$Calender->settingCalender($choiceDate);
$menu_part = (empty($menu_part)) ? "KR00000000" : $_GET["menu_part"] ;

$sqlDate = str_replace("-", "", $choiceDate);
$sqlDate = substr($sqlDate, 0, 6);

$sqlString = "select * from g5_reserv_off Where del_dt is null And substring(off_date , 1, 6) = '".$sqlDate."' Order By off_date asc";
$result = sql_query($sqlString);
$list = Array();

for ($i = 0 ; $row = sql_fetch_array($result); $i++){
	$list[$i] = $row["off_date"];
}

$g5['title'] = '예약휴일관리';
include_once ('../head.php');
?>
<script type="text/javascript">
function setInsertOff(offValue, dateValue){
	$.ajax({
		url : "./reserv_off_update.php",
		data : {
			"offValue" : offValue, 
			"dateValue" : dateValue
		},
		dataType : "json",
		type : "POST",
		success: function(data){
			if(data.result == "Y"){
				alert("처리 되었습니다.");
			}
		}
	});
}
</script>
<div id="wrapper">
	<div id="admin_menu_left">
		<!-- <?php include_once('../admin.menu.left400.php'); ?> -->
	</div>
    <div id="container" class="menu100_minheight">
		<div id="admin_right_wrap">
			<div class="admin_title">
				<img src="<?php echo G5_ADMIN_URL ?>/img/admin_title_bg.png" alt="●"/>
				<?=$g5['title']?>
			</div>
			<div id="reserv_wrap">
				<table cellspacing="0" cellpadding="0" class="calenderHead">
					<thead>
						<tr>
							<th class="leftYearMon"> <a href="./reserv_off.php?choiceDate=<?=$Calender->prevDateVal?>" ><?=$Calender->prevDate?></a></th>
							<th class="icon"> <a href="./reserv_off.php?choiceDate=<?=$Calender->prevDateVal?>" ><img src="../img/calendar_left.gif" alt="< 화살표" /></a> </th>
							<th class="centerYearMon"><?=$Calender->nowDate?></th>
							<th class="icon"> <a href="./reserv_off.php?choiceDate=<?=$Calender->nextDateVal?>" ><img src="../img/calendar_right.gif" alt="> 화살표" /></a> </th>
							<th class="rightYearMon"> <a href="./reserv_off.php?choiceDate=<?=$Calender->nextDateVal?>" ><?=$Calender->nextDate?></a></th>
						</tr>
					</thead>
				</table>
				<table cellspacing="0" cellpadding="0" class="calenderView">
					<thead>
						<tr>
							<th class="sunday">일요일</th>
							<th>월요일</th>
							<th>화요일</th>
							<th>수요일</th>
							<th>목요일</th>
							<th>금요일</th>
							<th class="saturday">토요일</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<?for($i = 0 ; $i < $Calender->totalEmpty; $i++){?>
								<?if($Calender->startEmpty <= $i && $Calender->checkDay <= $Calender->lastDay){?>
									<?if($Calender->getWeekNumber($Calender->checkDay) == 7){?>
										</tr>
										<tr>
									<?}?>
									<td <?=($Calender->getWeekNumber($Calender->checkDay) == 7) ? "class='sunday'" : '' ;?>  <?=($Calender->getWeekNumber($Calender->checkDay) == 6) ? "class='saturday'" : '' ;?> >
										<div class="day"><?=$Calender->checkDay;?></div>
										<?
											if($Calender->checkDay > 9){
												$inputDay = $Calender->nowYear . $Calender->nowMonth . $Calender->checkDay;
											}else{
												$inputDay = $Calender->nowYear . $Calender->nowMonth . "0" . $Calender->checkDay;
											}
										?>
										<div class="selectbox">
											<select onchange="setInsertOff(this.value, '<?=$inputDay?>')">
												<option value="">::선택::</option>
												<option value="Y" <?=(in_array($inputDay, $list)) ? "selected" : "" ; ?>>휴일</option>
											</select>
										</div>
										<? $Calender->checkDay = $Calender->checkDay + 1;?>
									</td>
								<?}else{?>
									<td></td>
								<?}?>
							<?}?>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<?
include_once ('../admin.tail.php');
?>
