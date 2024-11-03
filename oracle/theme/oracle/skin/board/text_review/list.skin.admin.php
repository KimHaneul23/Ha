<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
//add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/admin.css">', 0);
?>

<link rel="stylesheet" href="<?php echo G5_JS_URL; ?>/font-awesome/css/font-awesome.min.css">

<style>
    .admin_title{display:none;}
    .tbl_head01 thead th a{color:#383838;}
    .tbl_head01 tbody tr:nth-child(even){background: #f7f7f7;}
    
    .primary-badge { background-color:#344a3d; padding:2px 4px; border-radius:3px; color:#fff; font-size:1rem; font-weight:400; }
</style>

<div class="sub-headline">
	<h1 class="sub-headline-tit"><a href="" style="pointer-events:none;"><?php echo $board['bo_subject'] ?></a></h1>
</div>

<form name="fboardlist"  id="fboardlist" action="./board_list_update.php" onsubmit="return fboardlist_submit(this);" method="post">
    <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
    <input type="hidden" name="sfl" value="<?php echo $sfl ?>">
    <input type="hidden" name="stx" value="<?php echo $stx ?>">
    <input type="hidden" name="spt" value="<?php echo $spt ?>">
    <input type="hidden" name="sst" value="<?php echo $sst ?>">
    <input type="hidden" name="sod" value="<?php echo $sod ?>">
    <input type="hidden" name="page" value="<?php echo $page ?>">
    <input type="hidden" name="sw" value="">
	
	<?php if ($is_category) { ?>
        <ul id="bo_cate">
                <?php echo $category_option ?>
        </ul>
    <?php } ?>

    <div class="cbt"></div>
    
	<div class="tbl_head01 type02">
		<table>
			<caption><?php echo $board['bo_subject'] ?> 목록</caption>
			<colgroup>
				<col width="5%">
                <col width="5%">
                <col width="7%">
                <col width="25%">
                <col width="45%">
                <col width="13%">
			</colgroup>
			<thead>
				<tr>
					<?php if ($is_checkbox) { ?>
					<th scope="col" class="all_chk chk_box">
						<input type="checkbox" id="chkall" onclick="if (this.checked) all_checked(true); else all_checked(false);" class="selec_chk">
						<label for="chkall">
							<!--<span></span>-->
							<b class="sound_only">현재 페이지 게시물 전체선택</b>
						</label>
					</th>
					<?php } ?>
					<th scope="col">번호</th>
					<th scope="col">노출순서</th>
					<th scope="col">썸네일</th>
					<th scope="col">지점명 / 제목</th>
					<th scope="col"><?php echo subject_sort_link('wr_datetime', $qstr2, 1) ?>등록날짜</th>
				</tr>
			</thead>
			<tbody>
				<?php
				for ($i=0; $i<count($list); $i++) {
					if ($i%2==0) $lt_class = "even";
					else $lt_class = "";
				?>
				<tr class="<?php if ($list[$i]['is_notice']) echo "bo_notice"; ?> <?php echo $lt_class ?>">
					<?php if ($is_checkbox) { ?>
					<td class="td_chk chk_box">
						<input type="checkbox" name="chk_wr_id[]" value="<?php echo $list[$i]['wr_id'] ?>" id="chk_wr_id_<?php echo $i ?>" class="selec_chk">
						<label for="chk_wr_id_<?php echo $i ?>">
							<!--<span></span>-->
							<b class="sound_only"><?php echo $list[$i]['subject'] ?></b>
						</label>
					</td>
					<?php } ?>
					<td class="td_num2">
					<?php
                    if ($list[$i]['is_notice']) // 베스트
                        echo 'BEST';
                    else if ($wr_id == $list[$i]['wr_id'])
                        echo "<span class=\"bo_current\">열람중</span>";
                    else
                        echo $list[$i]['num'];
                    ?>
					</td>
					<td class="td_num2">
						<?
							echo $list[$i]['wr_good'];
						?>
					</td>
					<td>
						<div class="gall_img" >
							<a href="<?=G5_URL ?>/admin/bbs/write.php?w=u&bo_table=<?=$bo_table?>&wr_id=<?=$list[$i][wr_id] ?>">
							<?php
                                $image_width = 380;
                                $image_height = 200;
                                
								$thumb = get_list_thumbnail($board['bo_table'], $list[$i]['wr_id'], $board['bo_gallery_width'], $board['bo_gallery_height'], false, true, 'top');

                                if($thumb['src']) {
                                    $img_content = '<img src="'.$thumb['src'].'" alt="'.$thumb['alt'].'" width="'.$image_width.'" height="'.$image_height.'">';
                                } else {
									$img_content = '<span class="no_image" style="'.$line_height_style.'">no image</span>';
								}

								echo run_replace('thumb_image_tag', $img_content, $thumb);
				            ?>
							</a>
						</div>
					</td>
					<td style="font-size:16px; padding-left:<?php echo $list[$i]['reply'] ? (strlen($list[$i]['wr_reply'])*10) : '0'; ?>px">
						<a href="<?=G5_URL ?>/admin/bbs/write.php?w=u&bo_table=<?=$bo_table?>&wr_id=<?=$list[$i][wr_id] ?>">
							<span style="color:#0f594e; font-weight:bold;"><?php if($list[$i]['wr_5'] == '구월점' && $list[$i]['wr_6'] == ''){ ?>
                                    <?php echo $list[$i]['wr_5'] ?>
                                <?php } else if($list[$i]['wr_5'] == '' && $list[$i]['wr_6'] == '송도점'){ ?>
                                    <?php echo $list[$i]['wr_6'] ?>
                                <?php } else if($list[$i]['wr_5'] == '구월점' && $list[$i]['wr_6'] == '송도점'){ ?>
                                    <?php echo $list[$i]['wr_5'] ?>, <?php echo $list[$i]['wr_6'] ?>   
                                <?php } ?></span> / <span style="color:#0f594e; font-weight:600;">[<?php echo $list[$i]['wr_1'] ?>]</span> <?php echo $list[$i]['subject'] ?>
						</a>
					</td>
					<td class="td_datetime"><?php echo $list[$i]['datetime'] ?></td>
				</tr>
				<?php } ?>
				<?php if (count($list) == 0) { echo '<tr><td colspan="'.$colspan.'" class="empty_table" style="margin-left:auto; margin-right:auto; text-align:center;">손글씨후기 준비 중입니다.</td></tr>'; } ?>
			</tbody>
		</table>
	</div>
    
    <!-- 페이지 -->
    <?php echo $write_pages; ?>
    <!-- 페이지 -->
    
	<div class="section">
        <div class="container">
            <div class="template-form" style="display:flex; justify-content: flex-end; align-items: center;">
                <?php if ($list_href || $is_checkbox || $write_href) { ?>
                    <?php if ($list_href || $write_href) { ?>

                        <?php if ($is_checkbox) { ?>

                        <div class="submit_btn">
                            <button type="submit" name="btn_submit" value="선택삭제" onclick="document.pressed=this.value" class="wpcf7-form-control wpcf7-submit txt btn_del">선택삭제</button>
                        </div>

                        <?php } ?>
                        
                        <?php if ($write_href) { ?><a href="<?php echo $write_href ?>" class="" style="margin:0 5px;"><img src="https://sissel997.cafe24.com/img/list_write.png" alt="글쓰기"></a><?php } ?>
                    <?php } ?>
                <?php } ?>
            </div>
        </div>
    </div>
</form>

<?php if($is_checkbox) { ?>
<noscript>
<p>자바스크립트를 사용하지 않는 경우<br>별도의 확인 절차 없이 바로 선택삭제 처리하므로 주의하시기 바랍니다.</p>
</noscript>
<?php } ?>

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
    f.action = g5_admin_url+"/bbs/move.php";
    f.submit();
}

// 게시판 리스트 관리자 옵션
jQuery(function($){
    $(".btn_more_opt.is_list_btn").on("click", function(e) {
        e.stopPropagation();
        $(".more_opt.is_list_btn").toggle();
    });
    $(document).on("click", function (e) {
        if(!$(e.target).closest('.is_list_btn').length) {
            $(".more_opt.is_list_btn").hide();
        }
    });
});
</script>
<?php } ?>
<!-- } 게시판 목록 끝 -->
