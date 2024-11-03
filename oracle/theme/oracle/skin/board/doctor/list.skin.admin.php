<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/autoptimize_bbs.css">', 0);
?>
<link rel="stylesheet" href="<?php echo G5_JS_URL; ?>/font-awesome/css/font-awesome.min.css">

<?php
// 날짜 계산 함수
function passing_time($datetime) {
	$time_lag = time() - strtotime($datetime);
	
	if($time_lag < 60) {
		$posting_time = "방금";
	} elseif($time_lag >= 60 and $time_lag < 3600) {
		$posting_time = floor($time_lag/60)."분 전";
	} elseif($time_lag >= 3600 and $time_lag < 86400) {
		$posting_time = floor($time_lag/3600)."시간 전";
	} elseif($time_lag >= 86400 and $time_lag < 2419200) {
		$posting_time = floor($time_lag/86400)."일 전";
	} else {
		$posting_time = date("Y.m.d", strtotime($datetime));
	} 
	
	return $posting_time;
}
?>
<style>
    .admin_title{display:none;}
</style>

<div class="sub-headline">
	<h1 class="sub-headline-tit"><a href="" style="pointer-events:none;">의료진 관리<?php //echo $board['bo_subject'] ?></a></h1>
</div>

<div id="ajax-a">
	<div class="ajax-b">
		<div class="main-content">
            <form name="fboardlist"  id="fboardlist" action="./board_list_update.php" onsubmit="return fboardlist_submit(this);" method="post">
                <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
                <input type="hidden" name="sfl" value="<?php echo $sfl ?>">
                <input type="hidden" name="stx" value="<?php echo $stx ?>">
                <input type="hidden" name="spt" value="<?php echo $spt ?>">
                <input type="hidden" name="sst" value="<?php echo $sst ?>">
                <input type="hidden" name="sod" value="<?php echo $sod ?>">
                <input type="hidden" name="page" value="<?php echo $page ?>">
                <input type="hidden" name="sw" value="">


                <div class="section">
                    <div class="">

                        <?php if ($is_category) { ?>
                            <ul id="bo_cate">
                                    <?php echo $category_option ?>
                            </ul>
                        <?php } ?>

                        <div class="cbt"></div>


                        <div class="portfolio__grid hover--one three--columns">
                            <div class="sizer"></div>

                            <table class="boardList dt_list" style="text-align:center;">
                                <colgroup>
                                    <col width="5%">
                                    <col width="5%">
                                    <col width="10%">
                                    <col width="28%">
                                    <col width="28%">
                                    <col width="28%">
                                </colgroup>
                                <thead>
                                    <tr>
                                        <th scope="co1">
                                            <?php if ($is_checkbox) { ?>
                                                <div class="chk">
                                                    <label for="chkall" class="sound_only">현재 페이지 게시물 전체</label>
                                                    <input type="checkbox" id="chkall" onclick="if (this.checked) all_checked(true); else all_checked(false);">
                                                </div>
                                            <?php } ?>
                                        </th>
                                        <th scope="co1">번호</th>
                                        <th scope="co1">노출순서</th>
                                        <th scope="co1">썸네일</th>
                                        <th scope="co1">이름</th>
                                        <th scope="co1">근무지점</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <? 
                                for($i=0;$i<count($list);$i++) {
                                    $etc2 = explode(',', $list[$i]['etc2']);
                                    $jiname_list = '';
                                    for($j=0;$j<count($etc2);$j++) $jiname_list .= $ji_name[ $etc2[$j] ].',';
                                    $jiname_list = substr($jiname_list, 0, -1);


                                    $thumb = get_list_thumbnail($board['bo_table'], $list[$i]['wr_id'], $board['bo_gallery_width'], $board['bo_gallery_height'], false, true);

                                    ?>
                                    <tr>
                                        <td>
                                            <?php if ($is_checkbox) { ?>
                                                <div class="chk">
                                                    <label for="chk_wr_id_<?php echo $i ?>" class="sound_only"><?php echo $list[$i]['subject'] ?></label>
                                                    <input type="checkbox" name="chk_wr_id[]" value="<?php echo $list[$i]['wr_id'] ?>" id="chk_wr_id_<?php echo $i ?>">
                                                </div>
                                            <?php } ?>
                                        </td>
                                        <td>
                                            <span><? echo $list[$i]['num'];?></span>
                                        </td>
                                        <td>
                                            <span><? echo $list[$i]['wr_good'];?></span>
                                        </td>
                                        <td class="img">
                                            <a href="<?=G5_ADMIN_BBS_URL ?>/write.php?w=u&bo_table=<?=$bo_table?>&wr_id=<?=$list[$i][wr_id] ?>">
                                                <div>
                                                    <img src="<? echo $thumb['src'] ?>">
                                                </div>
                                            </a>
                                        </td>
                                        <td>
                                            <a href="<?=G5_ADMIN_BBS_URL ?>/write.php?w=u&bo_table=<?=$bo_table?>&wr_id=<?=$list[$i][wr_id] ?>">
                                                <span><?=$list[$i]['wr_1'];?> / <?=$list[$i]['subject']; ?> <?=$list[$i]['wr_2'];?></span>
                                            </a>
                                        </td>
                                        <td>
                                            <a href="<?=G5_ADMIN_BBS_URL ?>/write.php?w=u&bo_table=<?=$bo_table?>&wr_id=<?=$list[$i][wr_id] ?>">
                                                <span><?=$list[$i]['ca_name']?></span>
                                            </a>
                                        </td>
                                    </tr>
                                <?}?>
                                </tbody>
                            </table>
                            <?php if (count($list) == 0) { echo '<div class="item" style="width:100%; text-align:center;"><h3 class="mt-5 mb-2">등록된 게시물이 없습니다.</h3></div>'; } ?>
                        </div>
                    </div>
                </div>

                <div class="section">
                    <div class="container">
                        <div class="template-form" style="display:flex; justify-content: flex-end; align-items: center; max-height:33px;">
                            <?php if ($list_href || $is_checkbox || $write_href) { ?>
                                <?php if ($list_href || $write_href) { ?>

                                    <?php if ($is_checkbox) { ?>

                                    <div class="submit_btn">
                                        <button type="submit" name="btn_submit" value="선택삭제" onclick="document.pressed=this.value" class="wpcf7-form-control wpcf7-submit txt btn_del">선택삭제</button>
                                        <!--<button type="submit" name="btn_submit" value="선택복사" onclick="document.pressed=this.value" class="wpcf7-form-control wpcf7-submit txt">복사</button>
                                        <button type="submit" name="btn_submit" value="선택이동" onclick="document.pressed=this.value" class="wpcf7-form-control wpcf7-submit txt">이동</button>
                                        -->
                                    </div>

                                    <?php } ?>


                                    <!--
                                    <?php if ($list_href) { ?><input type="button" value="목록" class="wpcf7-form-control wpcf7-submit txt" onClick="location.href='<?php echo $list_href ?>'"><?php } ?>
                                    -->
                                    
                                    <?php if ($write_href) { ?><a href="<?php echo $write_href ?>" class="" style="margin:0 5px; max-height:33px;"><p class="list_btn nanumgothic normal ta_c ls_p2" style="position: relative; display: inline-block; border-radius: 4px; background-color:#3e3e3e; width:101px; height:33px; line-height:33px; text-align:center; padding:0; color: #fff; font-size: 14px; font-weight: 500; overflow: hidden; border: none;">의료진 등록</p></a><?php } ?>
                                    
                                    <!--
                                    <?php if ($is_admin) { ?>
                                        <div id="bo_admin">
                                            <a href="<?php echo G5_ADMIN_URL ?>" target="_blank"><img src="https://sissel997.cafe24.com/img/list_admin.png" alt="관리자"></a>
                                        </div>
                                    <?php } ?>
                                    -->
                                <?php } ?>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>





<?php if($is_checkbox) { ?>
<noscript>
<p>자바스크립트를 사용하지 않는 경우<br>별도의 확인 절차 없이 바로 선택삭제 처리하므로 주의하시기 바랍니다.</p>
</noscript>
<?php } ?>



<!-- 페이지 -->
<?php echo $write_pages;  ?>

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
<!-- } 게시판 목록 끝 -->

<script type="text/javascript" defer src="<?php echo $board_skin_url ?>/autoptimize_bbs.js"></script>
<script src="<?php echo $board_skin_url ?>/imagesloaded.pkgd.min.js" type="text/javascript"></script>