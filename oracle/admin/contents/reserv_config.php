<?php
$sub_menu = "100100";
include_once('./_common.php');

$hd_menu_code = 3;
$menu_left_code = 302;
$menu_left_sub_code = 30201;

auth_check($auth[$sub_menu], 'r');

if ($is_admin != 'super')
    alert('최고관리자만 접근 가능합니다.');


$sql = " Select * From g5_reserv_default ";
$row = sql_fetch($sql);
$hosp_off = explode("§||§", $row["hosp_off"]);
$startTime = explode("§§", $row["start_time"]);
$endTime = explode("§§", $row["end_time"]);

$startArray = Array();
$endArray = Array();
for ($i = 0 ; $i < count($startTime); $i++){
	$startArray[$i] = explode(":", $startTime[$i]);
	$endArray[$i] = explode(":", $endTime[$i]);
}

$lunchTime = explode(":", $row["lunch_time"]);
$wr_id = $row["wr_id"];

$g5['title'] = '예약기본설정';
include_once ('../head.php');
?>
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
				<div id="reserv_confing_info">
					* 해당 메뉴는 사이트 <font style="color:#ec0505;">예약 기본적인 설정</font>을 할 수 있습니다.<br>
					* 해당 메뉴 수정중에 <font style="color:#ec0505;">사이트 구분 및 병원 타입은 수정을 권장하지 않습니다.</font> 제작 업체와 상의 후 수정 하시기 바랍니다.<br>
					* 고정 휴일 관리는 예약 휴일 관리 보다 <font style="color:#ec0505;">우선 순위</font>에 있습니다.<br>
					* 고정 휴일 선택으로 병원 <font style="color:#ec0505;">정기휴일</font> 결정 할 수 있습니다.
				</div>
				<form id="reserv_form" method="post" action="./reserv_config_update.php">
				<input type="hidden" name="wr_id" value="<?=$wr_id?>">
				<div class="reserv_head01 reserv_table">
					<table>
						<tbody>
							<tr>
								<th scope="row">병원 타입</th>
								<td>
									<label><input type="radio" name="hosp_type" value="default" checked>&nbsp;일반병원</label>
								</td>
							</tr>
							<tr>
								<th scope="row">고정 휴일 관리</th>
								<td>
									<label><input type="checkbox" name="hosp_off[]" id="hosp_off_0" value="7" <?=(in_array("7", $hosp_off)) ? "checked" : "" ; ?> >&nbsp;일요일</label>
									&nbsp;&nbsp;
									<label><input type="checkbox" name="hosp_off[]" id="hosp_off_1" value="1" <?=(in_array("1", $hosp_off)) ? "checked" : "" ; ?> >&nbsp;월요일</label>
									&nbsp;&nbsp;
									<label><input type="checkbox" name="hosp_off[]" id="hosp_off_2" value="2" <?=(in_array("2", $hosp_off)) ? "checked" : "" ; ?> >&nbsp;화요일</label>
									&nbsp;&nbsp;
									<label><input type="checkbox" name="hosp_off[]" id="hosp_off_3" value="3" <?=(in_array("3", $hosp_off)) ? "checked" : "" ; ?> >&nbsp;수요일</label>
									&nbsp;&nbsp;
									<label><input type="checkbox" name="hosp_off[]" id="hosp_off_4" value="4" <?=(in_array("4", $hosp_off)) ? "checked" : "" ; ?> >&nbsp;목요일</label>
									&nbsp;&nbsp;
									<label><input type="checkbox" name="hosp_off[]" id="hosp_off_5" value="5" <?=(in_array("5", $hosp_off)) ? "checked" : "" ; ?> >&nbsp;금요일</label>
									&nbsp;&nbsp;
									<label><input type="checkbox" name="hosp_off[]" id="hosp_off_6" value="6" <?=(in_array("6", $hosp_off)) ? "checked" : "" ; ?> >&nbsp;토요일</label>
								</td>
							</tr>
							<tr>
								<th scope="row" rowspan="9">병원 타입</th>
								<td class="reserv_week">
									월요일 예약 시간&nbsp;&nbsp;
									<select name="startHour[]" id="startHour">
										<? for($i = 1; $i <= 24 ; $i++){?>
											<option value="<?=$i?>" <?=($startArray[0][0] == $i) ? "selected" : "" ; ?>><?=$i?></option>
										<?}?>
									</select> 시
									<select name="startMin[]">
										<option value="00" <?=($startArray[0][1] == "00") ? "selected" : "" ; ?>>00</option>
										<option value="30" <?=($startArray[0][1] == "30") ? "selected" : "" ; ?>>30</option>
									</select> 분
									&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
									예약 마감&nbsp;&nbsp;
									<select name="endHour[]">
										<? for($i = 1; $i <= 24 ; $i++){?>
											<option value="<?=$i?>" <?=($endArray[0][0] == $i) ? "selected" : "" ; ?>><?=$i?></option>
										<?}?>
									</select> 시
									<select name="endMin[]">
										<option value="00" <?=($endArray[0][1] == "00") ? "selected" : "" ; ?>>00</option>
										<option value="30" <?=($endArray[0][1] == "30") ? "selected" : "" ; ?>>30</option>
									</select> 분
								</td>
							</tr>
							<tr>
								<td class="reserv_week">
									화요일 예약 시간&nbsp;&nbsp;
									<select name="startHour[]" id="startHour">
										<? for($i = 1; $i <= 24 ; $i++){?>
											<option value="<?=$i?>" <?=($startArray[1][0] == $i) ? "selected" : "" ; ?>><?=$i?></option>
										<?}?>
									</select> 시
									<select name="startMin[]">
										<option value="00" <?=($startArray[1][1] == "00") ? "selected" : "" ; ?>>00</option>
										<option value="30" <?=($startArray[1][1] == "30") ? "selected" : "" ; ?>>30</option>
									</select> 분
									&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
									예약 마감&nbsp;&nbsp;
									<select name="endHour[]">
										<? for($i = 1; $i <= 24 ; $i++){?>
											<option value="<?=$i?>" <?=($endArray[1][0] == $i) ? "selected" : "" ; ?>><?=$i?></option>
										<?}?>
									</select> 시
									<select name="endMin[]">
										<option value="00" <?=($endArray[1][1] == "00") ? "selected" : "" ; ?>>00</option>
										<option value="30" <?=($endArray[1][1] == "30") ? "selected" : "" ; ?>>30</option>
									</select> 분
								</td>
							</tr>
							
							<tr>
								<td class="reserv_week">
									수요일 예약 시간&nbsp;&nbsp;
									<select name="startHour[]" id="startHour">
										<? for($i = 1; $i <= 24 ; $i++){?>
											<option value="<?=$i?>" <?=($startArray[2][0] == $i) ? "selected" : "" ; ?>><?=$i?></option>
										<?}?>
									</select> 시
									<select name="startMin[]">
										<option value="00" <?=($startArray[2][1] == "00") ? "selected" : "" ; ?>>00</option>
										<option value="30" <?=($startArray[2][1] == "30") ? "selected" : "" ; ?>>30</option>
									</select> 분
									&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
									예약 마감&nbsp;&nbsp;
									<select name="endHour[]">
										<? for($i = 1; $i <= 24 ; $i++){?>
											<option value="<?=$i?>" <?=($endArray[2][0] == $i) ? "selected" : "" ; ?>><?=$i?></option>
										<?}?>
									</select> 시
									<select name="endMin[]">
										<option value="00">00</option>
										<option value="30">30</option>
									</select> 분
								</td>
							</tr>
							
							<tr>
								<td class="reserv_week">
									목요일 예약 시간&nbsp;&nbsp;
									<select name="startHour[]" id="startHour">
										<? for($i = 1; $i <= 24 ; $i++){?>
											<option value="<?=$i?>" <?=($startArray[3][0] == $i) ? "selected" : "" ; ?>><?=$i?></option>
										<?}?>
									</select> 시
									<select name="startMin[]">
										<option value="00" <?=($startArray[3][1] == "00") ? "selected" : "" ; ?>>00</option>
										<option value="30" <?=($startArray[3][1] == "30") ? "selected" : "" ; ?>>30</option>
									</select> 분
									&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
									예약 마감&nbsp;&nbsp;
									<select name="endHour[]">
										<? for($i = 1; $i <= 24 ; $i++){?>
											<option value="<?=$i?>" <?=($endArray[3][0] == $i) ? "selected" : "" ; ?>><?=$i?></option>
										<?}?>
									</select> 시
									<select name="endMin[]">
										<option value="00" <?=($endArray[3][1] == "00") ? "selected" : "" ; ?>>00</option>
										<option value="30" <?=($endArray[3][1] == "30") ? "selected" : "" ; ?>>30</option>
									</select> 분
								</td>
							</tr>
							
							<tr>
								<td class="reserv_week">
									금요일 예약 시간&nbsp;&nbsp;
									<select name="startHour[]" id="startHour">
										<? for($i = 1; $i <= 24 ; $i++){?>
											<option value="<?=$i?>" <?=($startArray[4][0] == $i) ? "selected" : "" ; ?>><?=$i?></option>
										<?}?>
									</select> 시
									<select name="startMin[]">
										<option value="00" <?=($startArray[4][1] == "00") ? "selected" : "" ; ?>>00</option>
										<option value="30" <?=($startArray[4][1] == "30") ? "selected" : "" ; ?>>30</option>
									</select> 분
									&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
									예약 마감&nbsp;&nbsp;
									<select name="endHour[]">
										<? for($i = 1; $i <= 24 ; $i++){?>
											<option value="<?=$i?>" <?=($endArray[4][0] == $i) ? "selected" : "" ; ?>><?=$i?></option>
										<?}?>
									</select> 시
									<select name="endMin[]">
										<option value="00" <?=($endArray[4][1] == "00") ? "selected" : "" ; ?>>00</option>
										<option value="30" <?=($endArray[4][1] == "30") ? "selected" : "" ; ?>>30</option>
									</select> 분
								</td>
							</tr>
							<tr>
								<td class="reserv_week">
									토요일 예약 시간&nbsp;&nbsp;
									<select name="startHour[]" id="startHour">
										<? for($i = 1; $i <= 24 ; $i++){?>
											<option value="<?=$i?>" <?=($startArray[5][0] == $i) ? "selected" : "" ; ?>><?=$i?></option>
										<?}?>
									</select> 시
									<select name="startMin[]">
										<option value="00" <?=($startArray[5][1] == "00") ? "selected" : "" ; ?>>00</option>
										<option value="30" <?=($startArray[5][1] == "30") ? "selected" : "" ; ?>>30</option>
									</select> 분
									&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
									예약 마감&nbsp;&nbsp;
									<select name="endHour[]">
										<? for($i = 1; $i <= 24 ; $i++){?>
											<option value="<?=$i?>" <?=($endArray[5][0] == $i) ? "selected" : "" ; ?>><?=$i?></option>
										<?}?>
									</select> 시
									<select name="endMin[]">
										<option value="00" <?=($endArray[5][1] == "00") ? "selected" : "" ; ?>>00</option>
										<option value="30" <?=($endArray[5][1] == "30") ? "selected" : "" ; ?>>30</option>
									</select> 분
								</td>
							</tr>
							<tr>
								<td class="reserv_week">
									일요일 예약 시간&nbsp;&nbsp;
									<select name="startHour[]" id="startHour">
										<? for($i = 1; $i <= 24 ; $i++){?>
											<option value="<?=$i?>" <?=($startArray[6][0] == $i) ? "selected" : "" ; ?>><?=$i?></option>
										<?}?>
									</select> 시
									<select name="startMin[]">
										<option value="00" <?=($startArray[6][1] == "00") ? "selected" : "" ; ?>>00</option>
										<option value="30" <?=($startArray[6][1] == "30") ? "selected" : "" ; ?>>30</option>
									</select> 분
									&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
									예약 마감&nbsp;&nbsp;
									<select name="endHour[]">
										<? for($i = 1; $i <= 24 ; $i++){?>
											<option value="<?=$i?>" <?=($endArray[6][0] == $i) ? "selected" : "" ; ?>><?=$i?></option>
										<?}?>
									</select> 시
									<select name="endMin[]">
										<option value="00" <?=($endArray[6][1] == "00") ? "selected" : "" ; ?>>00</option>
										<option value="30" <?=($endArray[6][1] == "30") ? "selected" : "" ; ?>>30</option>
									</select> 분
								</td>
							</tr>
							<tr>
								<td>
									시간 간격&nbsp;&nbsp;
									<label><input type="radio" name="min_gap" value="10" <?=($row["min_gap"] == "10" || empty($row["min_gap"])) ? "checked" : "" ;?> >&nbsp;10분</label>
									&nbsp;&nbsp;
									<label><input type="radio" name="min_gap" value="30" <?=($row["min_gap"] == "30") ? "checked" : "" ;?> >&nbsp;30분</label>
									&nbsp;&nbsp;
									<label><input type="radio" name="min_gap" value="60" <?=($row["min_gap"] == "60") ? "checked" : "" ;?>>&nbsp;1시간</label>
								</td>
							</tr>
							<tr>
								<td>
									점심 시간&nbsp;&nbsp;
									<select name="lunchHour">
										<? for($i = 1; $i <= 24 ; $i++){?>
											<option value="<?=$i?>" <?=($lunchTime[0] == $i) ? "selected" : "" ; ?>><?=$i?></option>
										<?}?>
									</select> 시
									<select name="lunchMin">
										<option value="00" <?=($lunchTime[1] == "00") ? "selected" : "" ; ?>>00</option>
										<option value="30" <?=($lunchTime[1] == "30") ? "selected" : "" ; ?>>30</option>
									</select> 분&nbsp;&nbsp;
									<label><input type="radio" name="lunch_min_gap" value="10" <?=($row["lunch_min_gap"] == "10" || empty($row["lunch_min_gap"])) ? "checked" : "" ;?> >&nbsp;10분</label>
									&nbsp;&nbsp;
									<label><input type="radio" name="lunch_min_gap" value="20" <?=($row["lunch_min_gap"] == "20" ) ? "checked" : "" ;?> >&nbsp;20분</label>
									&nbsp;&nbsp;
									<label><input type="radio" name="lunch_min_gap" value="30" <?=($row["lunch_min_gap"] == "30" ) ? "checked" : "" ;?> >&nbsp;30분</label>
									&nbsp;&nbsp;
									<label><input type="radio" name="lunch_min_gap" value="40" <?=($row["lunch_min_gap"] == "40" ) ? "checked" : "" ;?> >&nbsp;40분</label>
									&nbsp;&nbsp;
									<label><input type="radio" name="lunch_min_gap" value="50" <?=($row["lunch_min_gap"] == "50" ) ? "checked" : "" ;?> >&nbsp;50분</label>
									&nbsp;&nbsp;
									<label><input type="radio" name="lunch_min_gap" value="60" <?=($row["lunch_min_gap"] == "60" ) ? "checked" : "" ;?> >&nbsp;1시간</label>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div id="reserv_btn">
					<input type="image" src="<?php echo G5_URL ?>/adm/img/reserv_modify.png" alt="수정">
				</div>
				</form>
			</div>
		</div>
	</div>
</div>
<?
include_once ('../admin.tail.php');
?>
