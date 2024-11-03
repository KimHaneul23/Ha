<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// 선택옵션으로 인해 셀합치기가 가변적으로 변함
$colspan = 5;

if ($is_checkbox) $colspan++;
if ($is_good) $colspan++;
if ($is_nogood) $colspan++;

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
?>

<?php
// 날짜 계산 함수
function passing_time($datetime) {
	$time_lag = time() - strtotime($datetime);
	
	$posting_time = date("Y.m.d h:i:s", strtotime($datetime));
	
	return $posting_time;
}
?>

<!-- 게시판 목록 시작 { -->
<div id="bo_list" style="width:<?php echo $width; ?>">

    <form name="fboardlist" id="fboardlist" action="<?php echo G5_BBS_URL; ?>/board_list_update.php" onsubmit="return fboardlist_submit(this);" method="post">
    
    <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
    <input type="hidden" name="sfl" value="<?php echo $sfl ?>">
    <input type="hidden" name="stx" value="<?php echo $stx ?>">
    <input type="hidden" name="spt" value="<?php echo $spt ?>">
    <input type="hidden" name="sca" value="<?php echo $sca ?>">
    <input type="hidden" name="sst" value="<?php echo $sst ?>">
    <input type="hidden" name="sod" value="<?php echo $sod ?>">
    <input type="hidden" name="page" value="<?php echo $page ?>">
    <input type="hidden" name="sw" value="">

    <div class="tbl_head01 tbl_wrap">
        <table>
        <caption><?php echo $board['bo_subject'] ?> 목록</caption>
        <colgroup>
            <col width = "5%">
            <col width = "5%">
            <col width = "30%">
            <col width = "30%">
            <col width = "10%">
            <col width = "15%">
        </colgroup>
        <thead>
        <tr>
            <?php if ($is_checkbox) { ?>
            <th scope="col" class="all_chk chk_box">
            	<input type="checkbox" id="chkall" onclick="if (this.checked) all_checked(true); else all_checked(false);" class="selec_chk">
                <label for="chkall">
                	<b class="sound_only">현재 페이지 게시물  전체선택</b>
				</label>
            </th>
            <?php } ?>
            <th scope="col">번호</th>
            <th scope="col">진료명</th>
            <th scope="col">1위 ~ 5위</th>
            <th scope="col">작성자</th>
            <th scope="col">최종수정 날짜</th>
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
            		<b class="sound_only"><?php echo $list[$i]['subject'] ?></b>
            	</label>
            </td>
            <?php } ?>
            <td class="td_num2">
            <?php echo $list[$i]['num'];?>
            </td>

            <td class="td_subject" style="padding-left:<?php echo $list[$i]['reply'] ? (strlen($list[$i]['wr_reply'])*10) : '0'; ?>px">
                <?php
                if ($is_category && $list[$i]['ca_name']) {
				?>
                <a href="<?php echo $list[$i]['ca_name_href'] ?>" class="bo_cate_link"><?php echo $list[$i]['ca_name'] ?></a>
                <?php } ?>
                <div class="bo_tit">
                    <a href="<?=G5_URL ?>/admin/bbs/write.php?w=u&bo_table=<?=$bo_table?>&wr_id=<?=$list[$i][wr_id] ?>">
                        <?php echo $list[$i]['icon_reply'] ?>
                        <?php
                            if (isset($list[$i]['icon_secret'])) echo rtrim($list[$i]['icon_secret']);
                         ?>
                        <?php echo $list[$i]['subject'] ?>
                    </a>
                    <?php
                    //if ($list[$i]['icon_new']) echo "<span class=\"new_icon\">N<span class=\"sound_only\">새글</span></span>";
                    ?>
                </div>
            </td>
            <style>
                .td_ranking_box{width:100%; height:100%; display:flex; flex-direction:column; justify-content: flex-start; align-items:center; text-align:left !important; padding:0 !important; margin:0 !important;}
                .td_ranking_box > a > p{font-weight:500; padding:0 0 8px; line-height:1; font-family: 'Noto Sans KR', sans-serif;}
                .td_ranking_box > a > p:last-child{padding:0 0 0px;}
                .td_ranking_box > a > p > span{font-weight:600;}
                
                .td_name{text-align:center !important;}
                .sv_member{text-align:center;}
                
                .ranking_new_icon{position:relative; display:inline-block; vertical-align:top; margin-left:8px;}
                .ranking_new_icon::after{content:'N'; position:absolute; top:0px; left:0; width:18px; height:18px; font-size:10px; line-height:18px; text-align:center; border-radius:100%;  background:#f56e00; color:#fff;}
                
            </style>
            <td class="td_ranking">
                <div class="td_ranking_box">
                    <a href="<?=G5_URL ?>/admin/bbs/write.php?w=u&bo_table=<?=$bo_table?>&wr_id=<?=$list[$i][wr_id] ?>">
                        <p><span>1위</span> <?php echo $list[$i]['wr_1'] ?><?php if($list[$i]['wr_11']=="Y"){ ?><span class="ranking_new_icon"></span><?php } ?></p>
                        <p><span>2위</span> <?php echo $list[$i]['wr_3'] ?><?php if($list[$i]['wr_12']=="Y"){ ?><span class="ranking_new_icon"></span><?php } ?></p>
                        <p><span>3위</span> <?php echo $list[$i]['wr_5'] ?><?php if($list[$i]['wr_13']=="Y"){ ?><span class="ranking_new_icon"></span><?php } ?></p>
                        <p><span>4위</span> <?php echo $list[$i]['wr_7'] ?><?php if($list[$i]['wr_14']=="Y"){ ?><span class="ranking_new_icon"></span><?php } ?></p>
                        <p><span>5위</span> <?php echo $list[$i]['wr_9'] ?><?php if($list[$i]['wr_15']=="Y"){ ?><span class="ranking_new_icon"></span><?php } ?></p>
                    </a>
                </div>
            </td>
            <td class="td_name sv_use"><?php echo $list[$i]['name'] ?></td>
            <td class="td_datetime"><?php echo passing_time($list[$i]['wr_datetime']); ?></td>
            
        </tr>
        <?php } ?>
        <?php if (count($list) == 0) { echo '<tr><td colspan="'.$colspan.'" class="empty_table">게시물이 없습니다.</td></tr>'; } ?>
        </tbody>
        </table>
    </div>
    
	<!-- 페이지 -->
	<?php //echo $write_pages; ?>
	<!-- 페이지 -->
	
    <!--
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
    -->
     
    </form>

</div>

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
        f.action = g5_bbs_url+"/board_list_update.php";
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
    f.action = g5_bbs_url+"/move.php";
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
