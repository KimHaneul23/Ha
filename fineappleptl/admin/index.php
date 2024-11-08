<?php
$sub_menu = '100000';
require_once './_common.php';

@require_once './safe_check.php';
if (function_exists('social_log_file_delete')) {
    social_log_file_delete(86400);      //소셜로그인 디버그 파일 24시간 지난것은 삭제
}

$g5['title'] = '대쉬보드';
require_once './admin.head.php';

$new_member_rows = 5;
$new_point_rows = 5;
$new_write_rows = 5;

$sql_common = " from {$g5['member_table']} ";

$sql_search = " where (1) ";

if ($is_admin != 'super') {
    $sql_search .= " and mb_level <= '{$member['mb_level']}' ";
}

if (!$sst) {
    $sst = "mb_datetime";
    $sod = "desc";
}

$sql_order = " order by {$sst} {$sod} ";

$sql = " select count(*) as cnt {$sql_common} {$sql_search} {$sql_order} ";
$row = sql_fetch($sql);
$total_count = $row['cnt'];

// 탈퇴회원수
$sql = " select count(*) as cnt {$sql_common} {$sql_search} and mb_leave_date <> '' {$sql_order} ";
$row = sql_fetch($sql);
$leave_count = $row['cnt'];

// 차단회원수
$sql = " select count(*) as cnt {$sql_common} {$sql_search} and mb_intercept_date <> '' {$sql_order} ";
$row = sql_fetch($sql);
$intercept_count = $row['cnt'];

$sql = " select * {$sql_common} {$sql_search} {$sql_order} limit {$new_member_rows} ";
$result = sql_query($sql);

$colspan = 7;
?>

<section>
    <h2>신규가입회원 목록</h2>
    <div class="local_desc02 local_desc">
        총 회원수 <?php echo $new_member_rows ?>명 중 신규가입 : <?php echo number_format($total_count) ?>명, 탈퇴 : <?php echo number_format($leave_count) ?>명
    </div>

    <div class="tbl_head01 tbl_wrap">
        <table>
			<caption>신규가입회원</caption>
			<colgroup>
				<col style="width:5%">
				<col style="width:15%">
				<col style="width:10%">
				<col style="width:15%">
				<col style="width:5%">
				<col style="width:15%">
				<col style="width:10%">
			</colgroup>
			<thead>
				<tr>
					<th scope="col">NO.</th>
					<th scope="col">회원아이디</th>
					<th scope="col">이름</th>
					<th scope="col">닉네임</th>
					<th scope="col">권한</th>
					<th scope="col">메일수신동의</th>
					<th scope="col">가입일</th>
				</tr>
			</thead>
			<tbody>
				<?php
				for ($i=0; $row=sql_fetch_array($result); $i++)
				{
					// 접근가능한 그룹수
					$sql2 = " select count(*) as cnt from {$g5['group_member_table']} where mb_id = '{$row['mb_id']}' ";
					$row2 = sql_fetch($sql2);
					$group = "";
					if ($row2['cnt'])
						$group = '<a href="./boardgroupmember_form.php?mb_id='.$row['mb_id'].'">'.$row2['cnt'].'</a>';

					if ($is_admin == 'group')
					{
						$s_mod = '';
						$s_del = '';
					}
					else
					{
						$s_mod = '<a href="./member_form.php?$qstr&amp;w=u&amp;mb_id='.$row['mb_id'].'">수정</a>';
						$s_del = '<a href="./member_delete.php?'.$qstr.'&amp;w=d&amp;mb_id='.$row['mb_id'].'&amp;url='.$_SERVER['SCRIPT_NAME'].'" onclick="return delete_confirm(this);">삭제</a>';
					}
					$s_grp = '<a href="./boardgroupmember_form.php?mb_id='.$row['mb_id'].'">그룹</a>';

					$leave_date = $row['mb_leave_date'] ? $row['mb_leave_date'] : date("Ymd", G5_SERVER_TIME);
					$intercept_date = $row['mb_intercept_date'] ? $row['mb_intercept_date'] : date("Ymd", G5_SERVER_TIME);

					$mb_nick = get_sideview($row['mb_id'], get_text($row['mb_nick']), $row['mb_email'], $row['mb_homepage']);

					$mb_id = $row['mb_id'];
				?>
				<tr>
					<td class="td_mbid"><?php echo $row['mb_no'] ?></td>
					<td class="td_mbid"><?php echo $mb_id ?></td>
					<td class="td_mbname"><?php echo get_text($row['mb_name']); ?></td>
					<td class="td_mbname sv_use"><div><?php echo $mb_nick ?></div></td>
					<td class="td_num"><?php echo $row['mb_level'] ?></td>
					<td class="td_boolean"><?php echo $row['mb_mailling']?'예':'아니오'; ?></td>
					<td class="td_category"><?= date("Y.m.d h:m", strtotime($row["mb_datetime"])); ?></td>
				</tr>
				<?php
					}
				if ($i == 0)
					echo '<tr><td colspan="'.$colspan.'" class="empty_table">자료가 없습니다.</td></tr>';
				?>
			</tbody>
        </table>
    </div>

    <div class="btn_list03 btn_list">
        <a href="./member_list.php">회원 전체보기</a>
    </div>
</section>

<?php
$sql_common = " from {$g5['board_new_table']} a, {$g5['board_table']} b, {$g5['group_table']} c where a.bo_table = b.bo_table and b.gr_id = c.gr_id ";

if ($gr_id) {
    $sql_common .= " and b.gr_id = '$gr_id' ";
}
if (isset($view) && $view) {
    if ($view == 'w') {
        $sql_common .= " and a.wr_id = a.wr_parent ";
    } elseif ($view == 'c') {
        $sql_common .= " and a.wr_id <> a.wr_parent ";
    }
}
$sql_order = " order by a.bn_id desc ";

$sql = " select count(*) as cnt {$sql_common} ";
$row = sql_fetch($sql);
$total_count = $row['cnt'];

$colspan = 6;
?>

<section>
    <h2>최근게시물</h2>

    <div class="tbl_head01 tbl_wrap">
        <table>
        	<caption>최근게시물</caption>
			<colgroup>
				<col style="width:5%">
				<col style="width:15%">
				<col style="width:15%">
				<col style="width:auto">
				<col style="width:15%">
				<col style="width:15%">
			</colgroup>
			<thead>
				<tr>
					<th scope="col">NO.</th>
					<th scope="col">그룹</th>
					<th scope="col">게시판</th>
					<th scope="col">제목</th>
					<th scope="col">이름</th>
					<th scope="col">일시</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$sql = " select a.*, b.bo_subject, c.gr_subject, c.gr_id {$sql_common} {$sql_order} limit {$new_write_rows} ";
				$result = sql_query($sql);
				for ($i=0; $row=sql_fetch_array($result); $i++)
				{
					$tmp_write_table = $g5['write_prefix'] . $row['bo_table'];
					if ($row['wr_id'] == $row['wr_parent']) // 원글
					{
						$comment = "";
						$comment_link = "";
						$row2 = sql_fetch(" select * from $tmp_write_table where wr_id = '{$row['wr_id']}' ");

						$name = get_sideview($row2['mb_id'], get_text(cut_str($row2['wr_name'], $config['cf_cut_name'])), $row2['wr_email'], $row2['wr_homepage']);
						// 당일인 경우 시간으로 표시함
						$datetime = substr($row2['wr_datetime'],0,10);
						$datetime2 = $row2['wr_datetime'];
						if ($datetime == G5_TIME_YMD)
							$datetime2 = substr($datetime2,11,5);
						else
							$datetime2 = substr($datetime2,5,5);

					}
					else // 코멘트
					{
						$comment = '댓글. ';
						$comment_link = '#c_'.$row['wr_id'];
						$row2 = sql_fetch(" select * from {$tmp_write_table} where wr_id = '{$row['wr_parent']}' ");
						$row3 = sql_fetch(" select mb_id, wr_name, wr_email, wr_homepage, wr_datetime from {$tmp_write_table} where wr_id = '{$row['wr_id']}' ");

						$name = get_sideview($row3['mb_id'], get_text(cut_str($row3['wr_name'], $config['cf_cut_name'])), $row3['wr_email'], $row3['wr_homepage']);
						// 당일인 경우 시간으로 표시함
						$datetime = substr($row3['wr_datetime'],0,10);
						$datetime2 = $row3['wr_datetime'];
						if ($datetime == G5_TIME_YMD)
							$datetime2 = substr($datetime2,11,5);
						else
							$datetime2 = substr($datetime2,5,5);
					}
				?>

				<tr>
					<td><?php echo $row['bn_id'] ?></td>
					<td class="td_category"><?php echo cut_str($row['gr_subject'],10) ?></td>
					<td class="td_category"><?php echo cut_str($row['bo_subject'],20) ?></td>
					<td><a href="<?php echo get_pretty_url($row['bo_table'], $row2['wr_id']); ?><?php echo $comment_link ?>"><?php echo $comment ?><?php echo conv_subject($row2['wr_subject'], 100) ?></a></td>
					<td class="td_mbname"><div><?php echo $name ?></div></td>
					<td class="td_datetime"><?= date("Y.m.d h:m", strtotime($datetime)) ?></td>
				</tr>

				<?php
				}
				if ($i == 0)
					echo '<tr><td colspan="'.$colspan.'" class="empty_table">자료가 없습니다.</td></tr>';
				?>
			</tbody>
        </table>
    </div>

    <div class="btn_list03 btn_list">
        <a href="<?php echo G5_BBS_URL ?>/new.php">최근게시물 더보기</a>
    </div>
</section>

<?php
require_once './admin.tail.php';
