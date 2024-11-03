<?php
$sub_menu = "100100";
include_once('./_common.php');

$hd_menu_code = 3;
$menu_left_code = 300;

auth_check($auth[$sub_menu], 'r');

if ($is_admin != 'super')
    alert('최고관리자만 접근 가능합니다.');

$g5['title'] = '메뉴관리';
include_once ('../head.php');

$sql_common = " from `g5_contents_menu` ";

if (!$sst)
{
    $sst  = "ca_id";
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
			<div class="btn_add02 btn_add fix_add">
				<a href="./menu_form.php" id="cate_add">분류 추가</a>
			</div>
			<form name="fcategorylist" method="post" action="./menu_list_update.php" autocomplete="off">
			<input type="hidden" name="sst" value="<?php echo $sst; ?>">
			<input type="hidden" name="sod" value="<?php echo $sod; ?>">
			<input type="hidden" name="sfl" value="<?php echo $sfl; ?>">
			<input type="hidden" name="stx" value="<?php echo $stx; ?>">
			<input type="hidden" name="page" value="<?php echo $page; ?>">
				<div id="sct" class="tbl_head03">
					<table>
					<thead>
						<tr>
							<th scope="col">분류코드</th>
							<th scope="col">분류명</th>
							<th scope="col" style="width:150px">게시판 테이블명</th>
							<th scope="col">관리</th>
						</tr>
					</thead>
					<tbody>
					<?php
					for ($i=0; $row=sql_fetch_array($result); $i++){
						$level = strlen($row['ca_id']) / 2 - 1;
						$p_ca_name = '';

						if ($level > 0) {
							$class = 'class="name_lbl"'; // 2단 이상 분류의 label 에 스타일 부여 - 지운아빠 2013-04-02
						} else {
							$class = '';
						}

						$s_level = '<div style="position:relative"><label for="ca_name_'.$i.'" '.$class.'><span class="sound_only">'.$p_ca_name.''.($level+1).'단 분류</span></label></div>';
						$s_level_input_size = 25 - $level *2; // 하위 분류일 수록 입력칸 넓이 작아짐 - 지운아빠 2013-04-02

						if ($level+2 < 6) $s_add = '<a href="./menu_form.php?ca_id='.$row['ca_id'].'&amp;'.$qstr.'" class="td_mngsmall_btn" style="margin-right:10px">추가</a> '; // 분류는 5단계까지만 가능
						else $s_add = '';
						$s_upd = '<a href="./menu_form.php?w=u&amp;ca_id='.$row['ca_id'].'&amp;'.$qstr.'" class="td_mngsmall_btn" style="margin-right:10px"><span class="sound_only">'.get_text($row['ca_name']).' </span>수정</a> ';

						if ($is_admin == 'super')
							$s_del = '<a href="./menu_form_update.php?w=d&amp;ca_id='.$row['ca_id'].'&amp;'.$qstr.'" onclick="return delete_confirm(this);" class="td_mngsmall_btn"><span class="sound_only">'.get_text($row['ca_name']).' </span>삭제</a> ';
					?>
						<tr>
							<td class="td_code2">
								<input type="hidden" name="ca_id[<?php echo $i; ?>]" value="<?php echo $row['ca_id']; ?>">
								<a href="<?php echo G5_URL; ?>/adm/bbs/board.php?bo_table=<?php echo $row['ca_table']; ?>"><?php echo $row['ca_id']; ?></a>
							</td>
							<td headers="sct_cate" class="sct_name sct_name<?php echo $level; ?>"><?php echo $s_level; ?> <input type="text" name="ca_name[<?php echo $i; ?>]" value="<?php echo get_text($row['ca_name']); ?>" id="ca_name_<?php echo $i; ?>" required class="frm_input full_input required" style="text-indent:24px;border:solid 1px #d6d6d6"></td>
							<td style="text-align:center">
								<input type="hidden" name="ca_table[<?php echo $i; ?>]" value="<?php echo $row['ca_table']; ?>">
								<a href="<?php echo G5_URL; ?>/adm/bbs/board.php?bo_table=<?php echo $row['ca_table']; ?>"><?php echo $row['ca_table']; ?></a>
							</td>
							<td class="td_mng">
								<?php echo $s_add; ?>
								<?php echo $s_upd; ?>
								<?php echo $s_del; ?>
							</td>
						</tr>
						<?php } ?>
					</tbody>
					</table>
				</div>
				<div style="margin:10px 0 0 0px">
					<input type="image" src="<?php echo G5_URL ?>/img/adm_menu_modify.png" value="일괄수정">
				</div>
			</form>
		</div>
	</div>
</div>
<?
//include_once ('../admin.tail.php');
?>
