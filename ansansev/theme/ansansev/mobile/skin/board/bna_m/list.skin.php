<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);

$count = 0;

// 분류 선택 또는 검색어가 있다면
$stx = trim($stx);
if ($sca || $stx) {
    $sql_search = get_sql_search($sca, $sfl, $stx, $sop);

    // 가장 작은 번호를 얻어서 변수에 저장 (하단의 페이징에서 사용)
    $sql = " select MIN(wr_num) as min_wr_num from {$write_table} and wr_2 = 'Y' ";
	if($wr_1_search){
		$sql .= " and wr_1 like '%{$wr_1_search}%' ";
	}
    $row = sql_fetch($sql);
    $min_spt = (int)$row['min_wr_num'];

    if (!$spt) $spt = $min_spt;

    $sql_search .= " and (wr_num between {$spt} and ({$spt} + {$config['cf_search_part']})) ";

    // 원글만 얻는다. (코멘트의 내용도 검색하기 위함)
    // 라엘님 제안 코드로 대체 http://sir.kr/g5_bug/2922
    $sql = " SELECT COUNT(DISTINCT `wr_parent`) AS `cnt` FROM {$write_table} WHERE {$sql_search} and wr_2 = 'Y' ";
	if($wr_1_search){
		$sql .= " and wr_1 like '%{$wr_1_search}%' ";
	}
    $row = sql_fetch($sql);
    $total_count = $row['cnt'];
    /*
    $sql = " select distinct wr_parent from {$write_table} where {$sql_search} ";
    $result = sql_query($sql);
    $total_count = sql_num_rows($result);
    */
} else {
    $sql_search = "";

	$sql = " SELECT COUNT(DISTINCT `wr_parent`) AS `cnt` FROM {$write_table} WHERE wr_2 = 'Y' ";
	if($wr_1_search){
		$sql .= " and wr_1 like '%{$wr_1_search}%' ";
	}
    $row = sql_fetch($sql);
    $total_count = $row['cnt'];
    //$total_count = $board['bo_count_write'];
}

if(G5_IS_MOBILE) {
    $page_rows = $board['bo_mobile_page_rows'];
    $list_page_rows = $board['bo_mobile_page_rows'];
} else {
    $page_rows = $board['bo_page_rows'];
    $list_page_rows = $board['bo_page_rows'];
}

if ($page < 1) { $page = 1; } // 페이지가 없으면 첫 페이지 (1 페이지)

// 년도 2자리
$today2 = G5_TIME_YMD;

$list = array();
$i = 0;
$notice_count = 0;
$notice_array = array();

// 공지 처리
if (!$sca && !$stx) {
    $arr_notice = explode(',', trim($board['bo_notice']));
    $from_notice_idx = ($page - 1) * $page_rows;
    if($from_notice_idx < 0)
        $from_notice_idx = 0;
    $board_notice_count = count($arr_notice);

    for ($k=0; $k<$board_notice_count; $k++) {
        if (trim($arr_notice[$k]) == '') continue;

        $row = sql_fetch(" select * from {$write_table} where wr_id = '{$arr_notice[$k]}' ");

        if (!$row['wr_id']) continue;

        $notice_array[] = $row['wr_id'];

        if($k < $from_notice_idx) continue;

        $list[$i] = get_list($row, $board, $board_skin_url, G5_IS_MOBILE ? $board['bo_mobile_subject_len'] : $board['bo_subject_len']);
        $list[$i]['is_notice'] = true;

        $i++;
        $notice_count++;

        if($notice_count >= $list_page_rows)
            break;
    }
}

$total_page  = ceil($total_count / $page_rows);  // 전체 페이지 계산
$from_record = ($page - 1) * $page_rows; // 시작 열을 구함

// 공지글이 있으면 변수에 반영
if(!empty($notice_array)) {
    $from_record -= count($notice_array);

    if($from_record < 0)
        $from_record = 0;

    if($notice_count > 0)
        $page_rows -= $notice_count;

    if($page_rows < 0)
        $page_rows = $list_page_rows;
}

// 관리자라면 CheckBox 보임
$is_checkbox = false;
if ($is_member && ($is_admin == 'super' || $group['gr_admin'] == $member['mb_id'] || $board['bo_admin'] == $member['mb_id']))
    $is_checkbox = true;

// 정렬에 사용하는 QUERY_STRING
$qstr2 = 'bo_table='.$bo_table.'&amp;sop='.$sop;

// 0 으로 나눌시 오류를 방지하기 위하여 값이 없으면 1 로 설정
$bo_gallery_cols = $board['bo_gallery_cols'] ? $board['bo_gallery_cols'] : 1;
$td_width = (int)(100 / $bo_gallery_cols);

// 정렬
// 인덱스 필드가 아니면 정렬에 사용하지 않음
//if (!$sst || ($sst && !(strstr($sst, 'wr_id') || strstr($sst, "wr_datetime")))) {
if (!$sst) {
    if ($board['bo_sort_field']) {
        $sst = $board['bo_sort_field'];
    } else {
        $sst  = "wr_num, wr_reply";
        $sod = "";
    }
} else {
    // 게시물 리스트의 정렬 대상 필드가 아니라면 공백으로 (nasca 님 09.06.16)
    // 리스트에서 다른 필드로 정렬을 하려면 아래의 코드에 해당 필드를 추가하세요.
    // $sst = preg_match("/^(wr_subject|wr_datetime|wr_hit|wr_good|wr_nogood)$/i", $sst) ? $sst : "";
    $sst = preg_match("/^(wr_datetime|wr_hit|wr_good|wr_nogood)$/i", $sst) ? $sst : "";
}

if ($sst) {
    $sql_order = " order by {$sst} {$sod} ";
}

if ($sca || $stx) {
	if($wr_1_search){
		$sql = " select distinct wr_parent from {$write_table} where {$sql_search} and wr_2 = 'Y' and wr_1 like '%{$wr_1_search}%' {$sql_order} limit {$from_record}, $page_rows ";
	} else {
		$sql = " select distinct wr_parent from {$write_table} where {$sql_search} and wr_2 = 'Y' {$sql_order} limit {$from_record}, $page_rows ";
	}
} else {
    $sql = " select * from {$write_table} where wr_is_comment = 0 and wr_2 = 'Y'";
    if(!empty($notice_array))
        $sql .= " and wr_id not in (".implode(', ', $notice_array).") ";
	if($wr_1_search){
		$sql .= " and wr_1 like '%{$wr_1_search}%' ";
	}
    $sql .= " {$sql_order} limit {$from_record}, $page_rows ";
}

// 페이지의 공지개수가 목록수 보다 작을 때만 실행
if($page_rows > 0) {
    $result = sql_query($sql);

    $k = 0;

    while ($row = sql_fetch_array($result))
    {
        // 검색일 경우 wr_id만 얻었으므로 다시 한행을 얻는다
        if ($sca || $stx)
            $row = sql_fetch(" select * from {$write_table} where wr_id = '{$row['wr_parent']}' ");

        $list[$i] = get_list($row, $board, $board_skin_url, G5_IS_MOBILE ? $board['bo_mobile_subject_len'] : $board['bo_subject_len']);
        if (strstr($sfl, 'subject')) {
            $list[$i]['subject'] = search_font($stx, $list[$i]['subject']);
        }
        $list[$i]['is_notice'] = false;
        $list_num = $total_count - ($page - 1) * $list_page_rows - $notice_count;
        $list[$i]['num'] = $list_num - $k;

        $i++;
        $k++;
    }
}


$write_pages2 = get_paging(G5_IS_MOBILE ? $config['cf_mobile_pages'] : $config['cf_write_pages'], $page, $total_page, './board.php?bo_table='.$bo_table.$qstr.'&sfl='.$sfl.'&stx='.$stx.'&amp;page=');
?>
<!-- 게시판 카테고리 시작 { -->
    <?php if ($is_category) { ?>
<nav id="bo_cate">
	<ul id="bo_cate_ul">
		<?php
		// 분류 사용 여부
		$is_category = false;
		$category_option = '';
		if ($board['bo_use_category']) {
			$is_category = true;
			$category_href = G5_BBS_URL.'/board.php?bo_table='.$bo_table;

			$category_option .= '<li';
			if ($sca=='' && $stx=='')
				$category_option .= ' id="bo_cate_on"';
			$category_option .= '><a href="'.$category_href.'">전체</a></li>';

			$categories = explode('|', $board['bo_category_list']); // 구분자가 , 로 되어 있음
			for ($i=0; $i<count($categories); $i++) {
				$category = trim($categories[$i]);
				if ($category=='') continue;
				$category_option .= '<li';
				$category_msg = '';
				if ($category==$stx) { // 현재 선택된 카테고리라면
					$category_option .= ' id="bo_cate_on"';
					$category_msg = '<span class="sound_only">열린 분류 </span>';
				} 
				$count = count($categories) - 1;
				if ($i == $count){
					$category_option .= ' class="bo_cate_ul_li_last"';
				}
				$category_option .= '><a href="/bbs/board.php?bo_table='.($bo_table."&sfl=ca_name%2C1&&stx=".urlencode($category)).'&sop=or">'.$category_msg.$category.'</a></li>';
			}
		}
		
		echo $category_option;
		?>
	</ul>
</nav>
<?php } ?>
<!-- } 게시판 카테고리 끝 -->
<script src="<?php echo G5_JS_URL; ?>/jquery.fancylist.js"></script>
<!--
<h2 id="container_title"><?php echo ($board['bo_mobile_subject'] ? $board['bo_mobile_subject'] : $board['bo_subject']) ?><span class="sound_only"> 목록</span></h2>
-->
<!-- 게시판 목록 시작 -->

<div id="bo_gall">


    <form name="fboardlist"  id="fboardlist" action="./board_list_update.php" onsubmit="return fboardlist_submit(this);" method="post">
    <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
    <input type="hidden" name="sfl" value="<?php echo $sfl ?>">
    <input type="hidden" name="stx" value="<?php echo $stx ?>">
    <input type="hidden" name="spt" value="<?php echo $spt ?>">
    <input type="hidden" name="sst" value="<?php echo $sst ?>">
    <input type="hidden" name="sod" value="<?php echo $sod ?>">
    <input type="hidden" name="page" value="<?php echo $page ?>">
    <input type="hidden" name="sw" value="">

    <ul id="gall_ul" >
        <?php for ($i=0; $i<count($list); $i++) {
			if($wr_id==0 && !$wr_1_search) {
					if($list[$i]['wr_2'] == 'Y'){
						header("Location:".G5_BBS_URL."/board.php?bo_table=".$bo_table."&wr_id=".$list[$i]['wr_id']."&sfl=".$sfl."&stx=".$stx."&page=".$page);
						exit;
					}
				}

			if($list[$i]['wr_2'] == 'Y'){

        ?>



		<!-------------------------- 일반성형모드 리스트 화면 --------------------------->

		  <li class="gall_li <?php if ($wr_id == $list[$i]['wr_id']) { ?>gall_now<?php } ?>" style="<?php if( $list[$i]['wr_3'] == 'mode_2') { echo 'display:none'; } ?>; ">
			<span class="sound_only">
				<?php
				if ($wr_id == $list[$i]['wr_id'])
					echo "<span class=\"bo_current\">열람중</span>";
				else
					echo $list[$i]['num'];
				 ?>
			</span>
			<ul class="gall_con">


				<li class="gall_href" >
					<?php if (!$member[mb_id]) { ?>
                    <!--
					<a href="<?php echo './login.php?wr_id='.$wr_id.$qstr.'&amp;url='.urlencode(G5_BBS_URL.'/board.php?bo_table='.$bo_table.'&amp;wr_id='.$wr_id.$qstr)?>" onclick='javascript:login();'> -->
                    <a href="<?php echo $list[$i]['href'] ?>">
					<?php } else { ?>
					<a href="<?php echo $list[$i]['href'] ?>">
					<?php } ?>
					<?php
					//썸네일 이미지 개수 가져오기
					$sql = " select count(*) as cnt from {$g5['board_file_table']} where bo_table = '$bo_table' and wr_id = '{$list[$i][wr_id]}' and bf_type between '0' and '3' order by bf_no limit 0, 6 ";
					$result = sql_fetch($sql);
					$cnt = $result['cnt'];

					// 첫번째 이미지 파일 유무 확인하기
					$sql = " select bf_file, bf_source, bf_content from {$g5['board_file_table']} where bo_table = '{$bo_table}' and wr_id = '{$list[$i][wr_id]}' and bf_type between '1' and '3' order by bf_no limit 0, 6 ";
					$thumb_row = sql_fetch($sql);
					// if($thumb_row['bf_file']) {
					// 	$img_content = '<img src="'.G5_URL."/data/file/bna/".$thumb_row['bf_file'].'" style="width:50%;  float:left;">';
					// } else {
					// 	$img_content = '<img src="'.$board_skin_url.'/img/noimg.png" width="'.$board['bo_gallery_width'].'" height="'.$board['bo_gallery_height'].'">';
					// }
                    $thumb = get_list_thumbnail_custom(1, $board['bo_table'], $list[$i]['wr_id'], $board['bo_gallery_width'], $board['bo_gallery_height']);
                    if($thumb['src']) {
                        $img_content = '<img src="'.$thumb['src'].'" alt="'.$thumb['alt'].'">';
                    } else {
                        $img_content = '<span style="">no image</span>';
                    }


					// if($cnt == 4){
					// 	$second = 1;
					// } else if($cnt == 6){
					// 	$second = 3;
					// }
                    $second = 1;

					// 두번째 이미지 파일 유무 확인하기
					$sql = " select bf_file, bf_source, bf_content from {$g5['board_file_table']} where bo_table = '{$bo_table}' and wr_id = '{$list[$i][wr_id]}' and bf_type between '1' and '3' order by bf_no limit ".$second.", 6 ";
					$thumb_row = sql_fetch($sql);
					// if($thumb_row['bf_file']) {
					// 	$img_content .= '<img src="'.G5_URL."/data/file/bna/".$thumb_row['bf_file'].'"style="width:50%; float:left;">';
					// } else {
					// 	$img_content .= '<img src="'.$board_skin_url.'/img/noimg.png" width="'.$board['bo_gallery_width'].'" height="'.$board['bo_gallery_height'].'">';
					// }
                    $thumb = get_list_thumbnail_custom(2, $board['bo_table'], $list[$i]['wr_id'], $board['bo_gallery_width'], $board['bo_gallery_height']);

                    if($thumb['src']) {
                        $img_content .= '<img src="'.$thumb['src'].'" alt="'.$thumb['alt'].'">';
                    } else {
                        $img_content .= '<span style="">no image</span>';
                    }

					echo $img_content;
					?>
					<div style="clear:both"></div>
					</a>
					<?php if ($list[$i]['is_notice']) { ?>
						<img src="<?php echo G5_URL ?>/img/be_af_best.png" alt="BEST" class="be_af_best">
					<?php } ?>
				</li>


				<li class="gall_text_href">
					<?php if ($is_checkbox) { ?>
					<label for="chk_wr_id_<?php echo $i ?>" class="sound_only"><?php echo $list[$i]['subject'] ?></label>
					<input type="checkbox" name="chk_wr_id[]" value="<?php echo $list[$i]['wr_id'] ?>" id="chk_wr_id_<?php echo $i ?>">
					<?php } ?>
					<?php if (!$member[mb_id]) { ?>
					<a href="<?php echo './login.php?wr_id='.$wr_id.$qstr.'&amp;url='.urlencode(G5_BBS_URL.'/board.php?bo_table='.$bo_table.'&amp;wr_id='.$wr_id.$qstr)?>" onclick='javascript:login();'>
					<?php } else { ?>
					<a href="<?php echo $list[$i]['href'] ?>">
					<?php } ?>
						<?php echo $list[$i]['subject'] ?>
					</a>
					<?php
						if (isset($list[$i]['icon_new'])) echo $list[$i]['icon_new'];
						//if (isset($list[$i]['icon_hot'])) echo $list[$i]['icon_hot'];
					?>
				</li>
			</ul>
		</li>
		<!-------------------------- 일반모드 리스트 화면 --------------------------->






        <?php } } ?>
        <?php if (count($list) == 0) { echo "<li class=\"empty_list\">게시물이 없습니다.</li>"; } ?>
    </ul>

    <?php if ($list_href || $is_checkbox || $write_href) { ?>
    <div class="bo_fx">
        <ul class="btn_bo_adm"></ul>

        <ul class="btn_bo_user">
            <li><?php if ($write_href) { ?><a href="<?php echo $write_href ?>"><img src="<?php echo G5_URL ?>/img/m_write_bt.png" alt="글쓰기" style="height:30px"></a><?php } ?></li>
        </ul>
    </div>
    <?php } ?>

    </form>
</div>

<script>
$(window).on("load", function() {
    $("#gall_ul").fancyList(".gall_li", "gall_clear");
});
</script>

<?php if($is_checkbox) { ?>
<noscript>
<p>자바스크립트를 사용하지 않는 경우<br>별도의 확인 절차 없이 바로 선택삭제 처리하므로 주의하시기 바랍니다.</p>
</noscript>
<?php } ?>

<!-- 페이지 -->
<?php

//echo $write_pages;  
// 분류 선택 또는 검색어가 있다면
$stx = trim($stx);
if ($sca || $stx) {
    $sql_search = get_sql_search($sca, $sfl, $stx, $sop);

    // 가장 작은 번호를 얻어서 변수에 저장 (하단의 페이징에서 사용)
    $sql = " select MIN(wr_num) as min_wr_num from {$write_table} ";
    $row = sql_fetch($sql);
    $min_spt = (int)$row['min_wr_num'];

    if (!$spt) $spt = $min_spt;

    $sql_search .= " and (wr_num between {$spt} and ({$spt} + {$config['cf_search_part']})) ";

    // 원글만 얻는다. (코멘트의 내용도 검색하기 위함)
    // 라엘님 제안 코드로 대체 http://sir.kr/g5_bug/2922
    $sql = " SELECT COUNT(DISTINCT `wr_parent`) AS `cnt` FROM {$write_table} WHERE {$sql_search} and wr_2 = 'Y' ";
    $row = sql_fetch($sql);
    $total_count = $row['cnt'];
    /*
    $sql = " select distinct wr_parent from {$write_table} where {$sql_search} ";
    $result = sql_query($sql);
    $total_count = sql_num_rows($result);
    */
} else {
    $sql_search = "";

	$sql = " SELECT COUNT(DISTINCT `wr_parent`) AS `cnt` FROM {$write_table} WHERE wr_2 = 'Y' ";
    $row = sql_fetch($sql);
    $total_count = $row['cnt'];
    //$total_count = $board['bo_count_write'];
}

if(G5_IS_MOBILE) {
    $page_rows = $board['bo_mobile_page_rows'];
    $list_page_rows = $board['bo_mobile_page_rows'];
} else {
    $page_rows = $board['bo_page_rows'];
    $list_page_rows = $board['bo_page_rows'];
}

if ($page < 1) { $page = 1; } // 페이지가 없으면 첫 페이지 (1 페이지)

// 년도 2자리
$today2 = G5_TIME_YMD;

$list = array();
$i = 0;
$notice_count = 0;
$notice_array = array();

// 공지 처리
if (!$sca && !$stx) {
    $arr_notice = explode(',', trim($board['bo_notice']));
    $from_notice_idx = ($page - 1) * $page_rows;
    if($from_notice_idx < 0)
        $from_notice_idx = 0;
    $board_notice_count = count($arr_notice);

    for ($k=0; $k<$board_notice_count; $k++) {
        if (trim($arr_notice[$k]) == '') continue;

        $row = sql_fetch(" select * from {$write_table} where wr_id = '{$arr_notice[$k]}' ");

        if (!$row['wr_id']) continue;

        $notice_array[] = $row['wr_id'];

        if($k < $from_notice_idx) continue;

        $list[$i] = get_list($row, $board, $board_skin_url, G5_IS_MOBILE ? $board['bo_mobile_subject_len'] : $board['bo_subject_len']);
        $list[$i]['is_notice'] = true;

        $i++;
        $notice_count++;

        if($notice_count >= $list_page_rows)
            break;
    }
}

$total_page  = ceil($total_count / $page_rows);  // 전체 페이지 계산
$from_record = ($page - 1) * $page_rows; // 시작 열을 구함

// 공지글이 있으면 변수에 반영
if(!empty($notice_array)) {
    $from_record -= count($notice_array);

    if($from_record < 0)
        $from_record = 0;

    if($notice_count > 0)
        $page_rows -= $notice_count;

    if($page_rows < 0)
        $page_rows = $list_page_rows;
}

// 관리자라면 CheckBox 보임
$is_checkbox = false;
if ($is_member && ($is_admin == 'super' || $group['gr_admin'] == $member['mb_id'] || $board['bo_admin'] == $member['mb_id']))
    $is_checkbox = true;

// 정렬에 사용하는 QUERY_STRING
$qstr2 = 'bo_table='.$bo_table.'&amp;sop='.$sop;

// 0 으로 나눌시 오류를 방지하기 위하여 값이 없으면 1 로 설정
$bo_gallery_cols = $board['bo_gallery_cols'] ? $board['bo_gallery_cols'] : 1;
$td_width = (int)(100 / $bo_gallery_cols);

// 정렬
// 인덱스 필드가 아니면 정렬에 사용하지 않음
//if (!$sst || ($sst && !(strstr($sst, 'wr_id') || strstr($sst, "wr_datetime")))) {
if (!$sst) {
    if ($board['bo_sort_field']) {
        $sst = $board['bo_sort_field'];
    } else {
        $sst  = "wr_num, wr_reply";
        $sod = "";
    }
} else {
    // 게시물 리스트의 정렬 대상 필드가 아니라면 공백으로 (nasca 님 09.06.16)
    // 리스트에서 다른 필드로 정렬을 하려면 아래의 코드에 해당 필드를 추가하세요.
    // $sst = preg_match("/^(wr_subject|wr_datetime|wr_hit|wr_good|wr_nogood)$/i", $sst) ? $sst : "";
    $sst = preg_match("/^(wr_datetime|wr_hit|wr_good|wr_nogood)$/i", $sst) ? $sst : "";
}

if(!$sst)
    $sst  = "wr_num, wr_reply";

if ($sst) {
    $sql_order = " order by {$sst} {$sod} ";
}

if ($sca || $stx) {
    $sql = " select distinct wr_parent from {$write_table} where {$sql_search} {$sql_order} limit {$from_record}, $page_rows ";
} else {
    $sql = " select * from {$write_table} where wr_is_comment = 0 ";
    if(!empty($notice_array))
        $sql .= " and wr_id not in (".implode(', ', $notice_array).") ";
    $sql .= " {$sql_order} limit {$from_record}, $page_rows ";
}

// 페이지의 공지개수가 목록수 보다 작을 때만 실행
if($page_rows > 0) {
    $result = sql_query($sql);

    $k = 0;

    while ($row = sql_fetch_array($result))
    {
        // 검색일 경우 wr_id만 얻었으므로 다시 한행을 얻는다
        if ($sca || $stx)
            $row = sql_fetch(" select * from {$write_table} where wr_id = '{$row['wr_parent']}' ");

        $list[$i] = get_list($row, $board, $board_skin_url, G5_IS_MOBILE ? $board['bo_mobile_subject_len'] : $board['bo_subject_len']);
        if (strstr($sfl, 'subject')) {
            $list[$i]['subject'] = search_font($stx, $list[$i]['subject']);
        }
        $list[$i]['is_notice'] = false;
        $list_num = $total_count - ($page - 1) * $list_page_rows - $notice_count;
        $list[$i]['num'] = $list_num - $k;

        $i++;
        $k++;
    }
}

$write_pages2 = get_paging(G5_IS_MOBILE ? $config['cf_mobile_pages'] : $config['cf_write_pages'], $page, $total_page, G5_BBS_URL.'/board.php?bo_table='.$bo_table.$qstr.'&amp;page=');

echo $write_pages2;
?>

<!-- <fieldset id="bo_sch">
    <legend>게시물 검색</legend>

    <form name="fsearch" method="get">
    <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
    <input type="hidden" name="sca" value="<?php echo $sca ?>">
	<input type="hidden" name="wr_1_search" value="<?php echo $wr_1_search ?>">
    <input type="hidden" name="sop" value="and">
    <label for="sfl" class="sound_only">검색대상</label>
    <select name="sfl" id="sfl">
        <option value="wr_subject"<?php echo get_selected($sfl, "wr_subject", true); ?>>제목</option>
    </select>
    <input name="stx" value="<?php echo stripslashes($stx) ?>" placeholder="검색어(필수)" required id="stx" class="required frm_input" size="15" maxlength="20">
    <input type="image" value="검색" src="<?php echo G5_URL ?>/img/m_serch_bt.png" style="width:10%">
    </form>
</fieldset> -->

<?php if ($is_checkbox) { ?>
<script>
function all_checked(sw) {
    var f = document.fboardlist;

    for (var i=0; i<f.length; i++) {
        if (f.elements[i].name == "chk_wr_id[]")
            f.elements[i].checked = sw;
    }
}

function fboardlist_submit(f) {
    var chk_count = 0;

    for (var i=0; i<f.length; i++) {
        if (f.elements[i].name == "chk_wr_id[]" && f.elements[i].checked)
            chk_count++;
    }

    if (!chk_count) {
        alert(document.pressed + "할 게시물을 하나 이상 선택하세요.");
        return false;
    }

    if(document.pressed == "선택복사") {
        select_copy("copy");
        return;
    }

    if(document.pressed == "선택이동") {
        select_copy("move");
        return;
    }

    if(document.pressed == "선택삭제") {
        if (!confirm("선택한 게시물을 정말 삭제하시겠습니까?\n\n한번 삭제한 자료는 복구할 수 없습니다\n\n답변글이 있는 게시글을 선택하신 경우\n답변글도 선택하셔야 게시글이 삭제됩니다."))
            return false;

        f.removeAttribute("target");
        f.action = "./board_list_update.php";
    }

    return true;
}

// 선택한 게시물 복사 및 이동
function select_copy(sw) {
    var f = document.fboardlist;

    if (sw == 'copy')
        str = "복사";
    else
        str = "이동";

    var sub_win = window.open("", "move", "left=50, top=50, width=500, height=550, scrollbars=1");

    f.sw.value = sw;
    f.target = "move";
    f.action = "./move.php";
    f.submit();
}
</script>
<?php } ?>
<!-- 게시판 목록 끝 -->