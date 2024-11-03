<?php
$sub_menu = "100100";
include_once('./_common.php');
include_once(G5_EDITOR_LIB);

$hd_menu_code = 3;
$menu_left_code = 300;

auth_check($auth[$sub_menu], 'w');

$sql_common = " from `g5_contents_menu` ";

if ($w == "")
{
    if ($is_admin != 'super' && !$ca_id)
        alert("최고관리자만 1단계 분류를 추가할 수 있습니다.");

    $len = strlen($ca_id);
    if ($len == 10)
        alert("분류를 더 이상 추가할 수 없습니다.\\n\\n5단계 분류까지만 가능합니다.");

    $len2 = $len + 1;

    $sql = " select MAX(SUBSTRING(ca_id,$len2,2)) as max_subid from `g5_contents_menu`
              where SUBSTRING(ca_id,1,$len) = '$ca_id' ";
    $row = sql_fetch($sql);

    $subid = base_convert($row['max_subid'], 36, 10);
    $subid += 36;
    if ($subid >= 36 * 36)
    {
        //alert("분류를 더 이상 추가할 수 없습니다.");
        // 빈상태로
        $subid = "  ";
    }
    $subid = base_convert($subid, 10, 36);
    $subid = substr("00" . $subid, -2);
    $subid = $ca_id . $subid;

    $sublen = strlen($subid);

    if ($ca_id) // 2단계이상 분류
    {
        $sql = " select * from `g5_contents_menu` where ca_id = '$ca_id' ";
        $ca = sql_fetch($sql);
        $html_title = $ca['ca_name'] . " 하위분류추가";
        $ca['ca_name'] = "";
    }
    else // 1단계 분류
    {
        $html_title = "1단계분류추가";
    }
}
else if ($w == "u")
{
    $sql = " select * from `g5_contents_menu` where ca_id = '$ca_id' ";
    $ca = sql_fetch($sql);
    if (!$ca['ca_id'])
        alert("자료가 없습니다.");

    $html_title = $ca['ca_name'] . " 수정";
    $ca['ca_name'] = get_text($ca['ca_name']);
}

$g5['title'] = '메뉴관리 추가';
include_once ('../head.php');

$frm_submit = '<div style="text-align:center;margin-top:10px">
    <input type="image" src="'.G5_URL.'/img/adm_ok_btn.png" value="확인" accesskey="s">
    <a href="./menu_config.php?'.$qstr.'"><img src="'.G5_URL.'/img/adm_list_btn.png" alt="목록"></a>
</div>';
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
			<div style="margin-top:30px;">
				<form name="fcategoryform" action="./menu_form_update.php" onsubmit="return fcategoryformcheck(this);" method="post" enctype="multipart/form-data">
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
							<th scope="row" style="width:200px"><label for="ca_id">분류코드</label></th>
							<td>
							<?php if ($w == "") { ?>
								<?php echo help("자동으로 보여지는 분류코드를 사용하시길 권해드리지만 직접 입력한 값으로도 사용할 수 있습니다.\n분류코드는 나중에 수정이 되지 않으므로 신중하게 결정하여 사용하십시오.\n\n분류코드는 2자리씩 10자리를 사용하여 5단계를 표현할 수 있습니다.\n0~z까지 입력이 가능하며 한 분류당 최대 1296가지를 표현할 수 있습니다.\n그러므로 총 3656158440062976가지의 분류를 사용할 수 있습니다."); ?>
								<input type="text" name="ca_id" value="<?php echo $subid; ?>" id="ca_id" required class="required frm_input" size="<?php echo $sublen; ?>" maxlength="<?php echo $sublen; ?>">
							<?php } else { ?>
								<input type="hidden" name="ca_id" value="<?php echo $ca['ca_id']; ?>">
								<span class="frm_ca_id"><?php echo $ca['ca_id']; ?></span>
								<a href="<?php echo G5_URL; ?>/adm/bbs/board.php?bo_table=<?php echo $ca_table; ?>" class="btn_frmline">미리보기</a>
								<a href="./menu_form.php?ca_id=<?php echo $ca_id; ?>&amp;<?php echo $qstr; ?>" class="btn_frmline">하위분류 추가</a>
							<?php } ?>
							</td>
						</tr>
						<tr>
							<th scope="row"><label for="ca_name">분류명</label></th>
							<td>
								<input type="text" name="ca_name" value="<?php echo $ca['ca_name']; ?>" id="ca_name" size="38" required class="required frm_input">
							</td>
						</tr>
						<tr>
							<th scope="row"><label for="ca_table">게시판 테이블명</label></th>
							<td>
								<?php echo help("추가하실 게시판의 table 명을 입력하시면 됩니다."); ?>
								<input type="text" name="ca_table" value="<?php echo $ca['ca_table']; ?>" id="ca_table" size="38" required class="required frm_input">
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
