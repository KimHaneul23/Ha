<?php
$sub_menu = "200820";
include_once('./_common.php');

$hd_menu_code = 2;
$menu_left_code = 205;

auth_check($auth[$sub_menu], 'r');

$g5['title'] = '접속자로그삭제';
include_once('./admin.head.php');

// 최소년도 구함
$sql = " select min(vi_date) as min_date from {$g5['visit_table']} ";
$row = sql_fetch($sql);

$min_year = (int)substr($row['min_date'], 0, 4);
$now_year = (int)substr(G5_TIME_YMD, 0, 4);
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
			<div class="local_ov01 local_ov">
				접속자 로그를 삭제할 년도와 방법을 선택해주십시오.
			</div>

			<form name="fvisitdelete" class="local_sch02 local_sch" method="post" action="./visit_delete_update.php" onsubmit="return form_submit(this);">
				<div>
					<label for="year" class="sound_only">년도선택</label>
					<select name="year" id="year">
						<option value="">년도선택</option>
						<?php
						for($year=$min_year; $year<=$now_year; $year++) {
						?>
						<option value="<?php echo $year; ?>"><?php echo $year; ?></option>
						<?php
						}
						?>
					</select> 년
					<label for="month" class="sound_only">월선택</label>
					<select name="month" id="month">
						<option value="">월선택</option>
						<?php
						for($i=1; $i<=12; $i++) {
						?>
						<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
						<?php
						}
						?>
					</select> 월
					<label for="method" class="sound_only">삭제방법선택</label>
					<select name="method" id="method">
						<option value="before">선택년월 이전 자료삭제</option>
						<option value="specific">선택년월의 자료삭제</option>
					</select>
				</div>
				<div class="sch_last">
					<label for="pass">관리자 비밀번호<strong class="sound_only"> 필수</strong></label>
					<input type="password" name="pass" id="pass" class="frm_input required">
					<input type="submit" value="확인" class="btn_submit">
				</div>
			</form>
		</div>
	</div>
</div>

<script>
function form_submit(f)
{
    var year = $("#year").val();
    var month = $("#month").val();
    var method = $("#method").val();
    var pass = $("#pass").val();

    if(!year) {
        alert("년도를 선택해 주십시오.");
        return false;
    }

    if(!month) {
        alert("월을 선택해 주십시오.");
        return false;
    }

    if(!pass) {
        alert("관리자 비밀번호를 입력해 주십시오.");
        return false;
    }

    var msg = year+"년 "+month+"월";
    if(method == "before")
        msg += " 이전";
    else
        msg += "의";
    msg += " 자료를 삭제하시겠습니까?";

    return confirm(msg);
}
</script>

<?php
include_once('./admin.tail.php');
?>
