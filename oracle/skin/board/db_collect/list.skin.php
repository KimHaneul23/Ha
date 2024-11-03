<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// 선택옵션으로 인해 셀합치기가 가변적으로 변함
$colspan = 7;

if ($is_checkbox) $colspan++;
if ($is_good) $colspan++;
if ($is_nogood) $colspan++;

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
?>
<link rel="stylesheet" href="<?php echo G5_SKIN_URL;?>/board/db_collect/style.css">
<!-- 게시판 목록 시작 { -->
<div id="bo_list" style="width:<?php echo $width; ?>">

    <!-- 게시판 페이지 정보 및 버튼 시작 { -->
	<div id="manager_list">
		<form id="manager_search" name="manager_search" method="get">
			<input type="hidden" name="bo_table" value="<?=$bo_table?>">
			<input type="hidden" name="sfl" value="wr_1">
			<span class="manager_title">
				담당자
			</span>
			<span>
				<select name="stx" id="manager_select">
					<option value="">전체</option>
					<?php
					$sql = " SELECT  `wr_subject` FROM `g5_write_manager` ";
					$result = sql_query($sql);
					for($i=0; $row=sql_fetch_array($result); $i++){
						$name = $row['wr_subject'];
						echo "<option value='{$name}'>{$name}</option>";
					}
					?>
				</select>
			</span>
			<span>
				<input type="image" src="<?php echo G5_URL ?>/img/list_search_btn.png" value="조회">
			</span>
		</form>
	</div>
    <div class="bo_fx"></div>
    <!-- } 게시판 페이지 정보 및 버튼 끝 -->

    <form name="fboardlist" id="fboardlist" action="./board_list_update.php" onsubmit="return fboardlist_submit(this);" method="post">
    <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
    <input type="hidden" name="sfl" value="<?php echo $sfl ?>">
    <input type="hidden" name="stx" value="<?php echo $stx ?>">
    <input type="hidden" name="spt" value="<?php echo $spt ?>">
    <input type="hidden" name="sca" value="<?php echo $sca ?>">
    <input type="hidden" name="sst" value="<?php echo $sst ?>">
    <input type="hidden" name="sod" value="<?php echo $sod ?>">
    <input type="hidden" name="page" value="<?php echo $page ?>">
    <input type="hidden" name="sw" value="">
	<input type="hidden" name="wr_id" value="">
	<input type="hidden" name="wr_8" value="">
	
    <div class="bbs_head01 bbs_wrap">
        <table class="bbs_head01_table">
        <tbody>
        <?php
        for ($i=0; $i<count($list); $i++) {
         ?>
        <tr>
            <td class="bbs_head01_table_td">
				<table class="tr_table">
					<tr>
						<td rowspan="2" colspan="2" class="td_no">
							<?php if ($is_checkbox) { ?>
								<label for="chk_wr_id_<?php echo $i ?>" class="sound_only"><?php echo $list[$i]['subject'] ?></label>
								<input type="checkbox" name="chk_wr_id[]" value="<?php echo $list[$i]['wr_id'] ?>" id="chk_wr_id_<?php echo $i ?>">
							<?php } ?>
							No. <?php echo $list[$i]['num']; ?>
						</td>

						<th class="th_title1" rowspan="2">신청자</th>
						<td class="td_text2"  rowspan="2">
							<?php echo $list[$i]['wr_3']; ?>
						</td>

						<th class="th_title2" rowspan="2">관심분야</th>
						<td class="td_text2" rowspan="2">
							<?php echo $list[$i]['wr_2']; ?>
						</td>


						<th class="th_title1" rowspan="2">연락처</th>
						<td class="td_text2" rowspan="2">
							<?php echo $list[$i]['wr_6']; ?>
						</td>


						<th class="th_title1">방문일정</th>
						<td class="td_text1">
							<a href="<?php echo $board_skin_url ?>/wr_11_update.skin.php?bo_table=<?php echo $bo_table; ?>&wr_id=<?php echo $list[$i]['wr_id']; ?>&wr_11=<?php echo $list[$i]['wr_11'] ?>">
								<?php
									if($list[$i]['wr_11'] == '완료'){
										echo "<font class='font_compl'>".$list[$i]['wr_11']."</font>";
									} else {
										echo $list[$i]['wr_11'];
									}
								?>
							</a>
						</td>

						<th class="th_title1">수술예약</th>
						<td class="td_text1">
							<a href="<?php echo $board_skin_url ?>/wr_12_update.skin.php?bo_table=<?php echo $bo_table; ?>&wr_id=<?php echo $list[$i]['wr_id']; ?>&wr_12=<?php echo $list[$i]['wr_12'] ?>">
								<?php
									if($list[$i]['wr_12'] == '완료'){
										echo "<font class='font_compl'>".$list[$i]['wr_12']."</font>";
									} else {
										echo $list[$i]['wr_12'];
									}
								?>
							</a>
						</td>

						<th class="th_title1">아웃바운드</th>
						<td class="td_text1">
							<a href="<?php echo $board_skin_url ?>/wr_13_update.skin.php?bo_table=<?php echo $bo_table; ?>&wr_id=<?php echo $list[$i]['wr_id']; ?>&wr_13=<?php echo $list[$i]['wr_13'] ?>">
								<?php
									if($list[$i]['wr_13'] == '완료'){
										echo "<font class='font_compl'>".$list[$i]['wr_13']."</font>";
									} else {
										echo $list[$i]['wr_13'];
									}
								?>
							</a>
						</td>
					</tr>
					<tr>
						<th class="th_title1" rowspan="2">메모</th>
						<td colspan="5" class="td_text3 td_text6" rowspan="2">
							<textarea id="wr_8_txt_<?php echo $list[$i]['wr_id']; ?>"><?php echo $list[$i]['wr_8']; ?></textarea>
							<img src="<?php echo G5_URL ?>/img/db_submit.png" alt="저장" onclick="wr_8_save('<?php echo $list[$i]['wr_id']; ?>')" style="cursor:pointer">
						</td>


					</tr>
					
					<tr>
						<th>관리</th>
						<td>
							<img src="<?php echo G5_URL ?>/img/db_delete.png" alt="삭제" onclick="wr_8_delete('<?php echo $list[$i]['wr_id']; ?>')" style="cursor:pointer"/>
						</td>
						<th>디바이스</th>
						<td>
							<?php echo $list[$i]['wr_10']; ?>
						</td>
						<th>URL</th>
						<td class="td_text4 td_text3">
							<a href="<?php echo $list[$i]['wr_content']; ?>" target="_blank">
								<?php echo $list[$i]['wr_content']; ?>
							</a>
						</td>
						<th>신청일</th>
						<td>
							<?php echo date("Y년 m월 d일 / h시 m분 s초", strtotime($list[$i][wr_datetime]))?>
						</td>
					</tr>
				</table>
			</td>
        </tr>
        <?php } ?>
        <?php if (count($list) == 0) { echo '<tr><td colspan="'.$colspan.'" class="empty_table">게시물이 없습니다.</td></tr>'; } ?>
        </tbody>
        </table>
    </div>

    <?php if ($list_href || $is_checkbox || $write_href) { ?>
    <div class="bo_fx">
        <?php if ($is_checkbox) { ?>
        <ul class="btn_bo_adm">
            <li><input type="submit" name="btn_submit" value="선택삭제" onclick="document.pressed=this.value" style=" border-radius: 5px; color:white;  background: #ad2128;  padding: 10px; width:100px; height:40px;" alt="선택삭제"></li>
        </ul>
        <?php } ?>

        <?php if ($list_href || $write_href) { ?>
        <ul class="btn_bo_user">
			<?php if ($admin_href) { ?><li><a href="<?php echo $admin_href ?>"><img src="<?php echo G5_URL ?>/img/list_admin.png" alt="관리자"/></a></li><?php } ?>
			<li><a href="<?php echo $board_skin_url ?>/excel_down.php"><img src="<?php echo G5_URL ?>/img/excel_bt.png" alt="엑셀다운"/></a></li>
            <?php if ($list_href) { ?><li><a href="<?php echo $list_href ?>"><img src="<?php echo G5_URL ?>/img/list_list.png" alt="목록"/></a></li><?php } ?>
        </ul>
        <?php } ?>
    </div>
    <?php } ?>
    </form>
</div>

<?php if($is_checkbox) { ?>
<noscript>
<p>자바스크립트를 사용하지 않는 경우<br>별도의 확인 절차 없이 바로 선택삭제 처리하므로 주의하시기 바랍니다.</p>
</noscript>
<?php } ?>

<!-- 페이지 -->
<?php echo $write_pages;  ?>

<!-- 게시판 검색 시작 { -->
<fieldset id="bo_sch">
    <legend>게시물 검색</legend>

    <form name="fsearch" method="get">
    <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
    <input type="hidden" name="sca" value="<?php echo $sca ?>">
    <input type="hidden" name="sop" value="and">
    <label for="sfl" class="sound_only">검색대상</label>
    <select name="sfl" id="sfl">
        <option value="wr_3"<?php echo get_selected($sfl, 'wr_3', true); ?>>이름</option>
		<option value="ca_name"<?php echo get_selected($sfl, 'ca_name', true); ?>>관심분야</option>
    </select>
    <label for="stx" class="sound_only">검색어<strong class="sound_only"> 필수</strong></label>
    <input type="text" name="stx" value="<?php echo stripslashes($stx) ?>" required id="stx" class="frm_input required" size="15" maxlength="20">
    <input type="image" src="<?php echo G5_URL ?>/img/list_search.png" value="검색">
    </form>
</fieldset>
<!-- } 게시판 검색 끝 -->

<?php if ($is_checkbox) { ?>
<script>
function wr_8_delete(wr_id){
	var f = document.fboardlist;
	f.action = "<?php echo $board_skin_url ?>/wr_id_delete.php";
	f.wr_id.value = wr_id;

	if (!confirm("해당 게시물을 정말 삭제하시겠습니까?\n\n한번 삭제한 자료는 복구할 수 없습니다\n\n답변글이 있는 게시글을 선택하신 경우\n답변글도 선택하셔야 게시글이 삭제됩니다."))
            return false;

	f.submit();
}

function wr_8_save(wr_id){
	var f = document.fboardlist;
	f.action = "<?php echo $board_skin_url ?>/wr_8_update.skin.php";
	f.wr_id.value = wr_id;

	var wr_8 = $('#wr_8_txt_'+wr_id).val();
	f.wr_8.value = wr_8;

	f.submit();
}

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

    if (sw == "copy")
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
<!-- } 게시판 목록 끝 -->
