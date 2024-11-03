<?php
$sub_menu = "100100";
include_once('./_common.php');
include_once(G5_EDITOR_LIB);

$hd_menu_code = 3;
$menu_left_code = 302;
$menu_left_sub_code = 30204;

auth_check($auth[$sub_menu], 'w');

$sql_common = " from `g5_reserv_subject` ";

if ($is_admin != 'super' && !$wr_id){
	alert("최고관리자만 1단계 분류를 추가할 수 있습니다.");
}

$g5['title'] = '예약과목관리 추가';
include_once ('../head.php');

$frm_submit = '<div style="text-align:center;margin-top:10px">
    <input type="image" src="'.G5_URL.'/img/adm_ok_btn.png" value="확인" accesskey="s">
    <a href="./reserv_subject.php?'.$qstr.'"><img src="'.G5_URL.'/img/adm_list_btn.png" alt="목록"></a>
</div>';
?>
<div id="wrapper">
	<div id="admin_menu_left">
		<?php include_once('../admin.menu.left400.php'); ?>
	</div>
    <div id="container" class="menu100_minheight">
		<div id="admin_right_wrap">
			<div class="admin_title">
				<img src="<?php echo G5_ADMIN_URL ?>/img/admin_title_bg.png" alt="●"/>
				<?=$g5['title']?>
			</div>
			<div style="margin-top:30px;">
				<form name="fcategoryform" action="./reserv_subject_form_update.php" onsubmit="return fcategoryformcheck(this);" method="post" enctype="multipart/form-data">
				<input type="hidden" name="codedup"  value="<?php echo $default['de_code_dup_use']; ?>">
				<input type="hidden" name="w" value="<?php echo $w; ?>">
				<input type="hidden" name="sst" value="<?php echo $sst; ?>">
				<input type="hidden" name="sod" value="<?php echo $sod; ?>">
				<input type="hidden" name="sfl" value="<?php echo $sfl; ?>">
				<input type="hidden" name="stx" value="<?php echo $stx; ?>">
				<input type="hidden" name="page" value="<?php echo $page; ?>">

				<div class="tbl_head04">
					<table>
						<tr>
							<th scope="row"><label for="subject">과목명</label></th>
							<td>
								<input type="text" name="subject" value="<?php echo $ca['subject']; ?>" id="subject" size="38" required class="required frm_input">
							</td>
						</tr>
						<tr>
							<th scope="row"><label for="subject_order">순서</label></th>
							<td>
								<?php //echo help("추가하실 게시판의 table 명을 입력하시면 됩니다."); ?>
								<input type="text" name="subject_order" value="<?php echo $ca['subject_order']; ?>" id="subject_order" size="38" required class="required frm_input">
							</td>
						</tr>
						<tr>
							<th scope="row"><label for="subject_check">표시여부</label></th>
							<td>
								<label><input type="radio" name="subject_check" value="Y" checked="checked">&nbsp;표시</label>
								&nbsp;&nbsp;
								<label><input type="radio" name="subject_check" value="N">&nbsp;미표시</label>
							</td>
						</tr>
					</table>
				</div>
				<?php echo $frm_submit; ?>
			</div>
		</div>
	</div>
</div>
<?
include_once ('../admin.tail.php');
?>
