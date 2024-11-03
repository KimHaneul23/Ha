<?php
$sub_menu = "100100";
include_once('./_common.php');

$hd_menu_code = 3;
$menu_left_code = 302;
$menu_left_sub_code = 30204;

auth_check($auth[$sub_menu], 'r');

if ($is_admin != 'super')
    alert('최고관리자만 접근 가능합니다.');

$g5['title'] = '예약과목관리';
include_once ('../head.php');

$sql_common = " from `g5_reserv_subject` ";

if (!$sst)
{
    $sst  = "subject_order";
    $sod = "asc";
}
$sql_order = "order by $sst $sod";

// 출력할 레코드를 얻음
$sql  = " select *
             $sql_common
             $sql_order";
$result = sql_query($sql);
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
			<div class="btn_add02 btn_add">
				<a href="./reserv_subject_form.php" id="cate_add">추가</a>
			</div>
			<form name="fcategorylist" method="post" action="./reserv_subject_list_update.php" autocomplete="off">
			<input type="hidden" name="sst" value="<?php echo $sst; ?>">
			<input type="hidden" name="sod" value="<?php echo $sod; ?>">
			<input type="hidden" name="sfl" value="<?php echo $sfl; ?>">
			<input type="hidden" name="stx" value="<?php echo $stx; ?>">
			<input type="hidden" name="page" value="<?php echo $page; ?>">
				<div id="sct" class="tbl_head03" style="text-align:center;">
					<table>
					<thead>
						<tr>
							<th scope="col">과목</th>
							<th scope="col">순서</th>
							<th scope="col" style="width:150px">표시</th>
							<th scope="col">관리</th>
						</tr>
					</thead>
					<tbody>
					<?php
					for ($i=0; $row=sql_fetch_array($result); $i++){
						$s_del = '<a href="./menu_form_update.php?w=d&amp;wr_id='.$row['wr_id'].'&amp;'.$qstr.'" onclick="return delete_confirm(this);" class="td_mngsmall_btn"><span class="sound_only">'.get_text($row['subject']).' </span>삭제</a> ';
					?>
						<tr>
							<input type="hidden" name="wr_id[<?php echo $i; ?>]" value="<?php echo $row['wr_id']; ?>">
							<td headers="sct_cate"><input type="text" name="subject[<?php echo $i; ?>]" value="<?php echo get_text($row['subject']); ?>" id="subject_<?php echo $i; ?>" required style="border:solid 1px #d6d6d6;text-align:center;"></td>
							<td>
								<input type="input" name="subject_order[<?php echo $i; ?>]" value="<?php echo $row['subject_order']; ?>" style="border:solid 1px #d6d6d6;text-align:center;"">
							</td>
							<td style="text-align:center">
								<label><input type="radio" name="subject_check[<?php echo $i; ?>]" value="Y" <?php if($row['subject_check'] == 'Y') echo "checked='checked'"; ?>>&nbsp;표시</label>
								&nbsp;&nbsp;
								<label><input type="radio" name="subject_check[<?php echo $i; ?>]" value="N" <?php if($row['subject_check'] == 'N') echo "checked='checked'"; ?>>&nbsp;미표시</label>
							</td>
							<td class="td_mng">
								<?php //echo $s_upd; ?>
								<?php echo $s_del; ?>
							</td>
						</tr>
						<?php } ?>
					</tbody>
					</table>
				</div>
				<div style="margin:10px 0 0 10px">
					<input type="image" src="<?php echo G5_URL ?>/img/adm_menu_modify.png" value="일괄수정">
				</div>
			</form>
		</div>
	</div>
</div>
<?
include_once ('../admin.tail.php');
?>
