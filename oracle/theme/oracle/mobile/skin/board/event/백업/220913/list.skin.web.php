<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/autoptimize_bbs.css">', 0);

// 진행중이 이벤트 및 종료에 대해서 처리한다.
 
if ($sca || $stx){
    $sql_search = get_sql_search($sca, $sfl, $stx, $sop) . " and";
	// 가장 작은 번호를 얻어서 변수에 저장 (하단의 페이징에서 사용)
	$sql = " select MIN(wr_num) as min_wr_num from {$write_table} ";
	$min_spt = (int)$row['min_wr_num'];
	if (!$spt) $spt = $min_spt;	
	$sql_search .= "  (wr_num between {$spt} and ({$spt} + {$config['cf_search_part']})) ";
}else{
	$sql_search = " 1 ";
}

if($ending){
	$sql_search .= " and wr_3 < substr(now(), 1, 10)   ";
}else{
	if($is_admin){
		$sql_search .= "  and wr_3 >= substr(now(), 1, 10)  ";	
	}else{
		$sql_search .= " and ( (substr(now(), 1, 10)  between wr_2 and wr_3 ) or ( wr_2 > substr(now(), 1, 10)  and wr_4 = 'Y' ) )";
	}
}


$sql = " select distinct wr_parent from {$write_table} where {$sql_search} {$sql_order} limit {$from_record}, $page_rows ";


$result = sql_query($sql);


$write_pages = get_paging(G5_IS_MOBILE ? $config['cf_mobile_pages'] : $config['cf_write_pages'], $page, $total_page, './sub1_5.php?bo_table='.$bo_table.$qstr.'&amp;page='.$ending.'&amp;page=');

?>


<!-- 게시판 목록 시작 { -->
<div id="ajax-a">
	<div class="ajax-b">
		<div class="main-content">
            
		    <?php if ($is_category) { ?>
            <nav id="bo_cate" class="notice_event_nav">
                <ul id="bo_cate_ul">
                    <?php echo $category_option ?>
                </ul>
            </nav>
            <?php } ?>
            
			<form name="fboardlist"  id="fboardlist" action="./board_list_update.php" onsubmit="return fboardlist_submit(this);" method="post">
                <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
                <input type="hidden" name="sfl" value="<?php echo $sfl ?>">
                <input type="hidden" name="stx" value="<?php echo $stx ?>">
                <input type="hidden" name="spt" value="<?php echo $spt ?>">
                <input type="hidden" name="sst" value="<?php echo $sst ?>">
                <input type="hidden" name="sod" value="<?php echo $sod ?>">
                <input type="hidden" name="page" value="<?php echo $page ?>">
                <input type="hidden" name="ending" value="<?php echo $ending ?>">
                <input type="hidden" name="sw" value="">

                <div class="notice_event_section section">
                    <div class="">
                        <div class="cbt"></div>
                        <div class="portfolio__grid hover--one three--columns flex_row fw jc_fs al_fs">
                            <div class="sizer"></div>

                            <div class="item item_tit">
                                <?php if ($is_checkbox) { ?>
                                    <div class="chk">
                                        <label for="chkall" class="sound_only">현재 페이지 게시물 전체</label>
                                        <input type="checkbox" id="chkall" onclick="if (this.checked) all_checked(true); else all_checked(false);">
                                    </div>
                                <?php } ?>
                                <a href="#">이미지</a>
                                <div class="txt">제목</div>
                            </div>

                            <?php for ($i=0; $i<count($list); $i++) {
                                $classes = array();
                                $classes[] = 'gall_li';
                                $classes[] = 'col-gn-'.$bo_gallery_cols;
                                if( $i && ($i % $bo_gallery_cols == 0) ){
                                    $classes[] = 'box_clear';
                                }
                                if( $wr_id && $wr_id == $list[$i]['wr_id'] ){
                                    $classes[] = 'gall_now';
                                }
                            ?>
                            <div class="item">
                                <?php if ($is_checkbox) { ?>
                                    <div class="chk">
                                        <label for="chk_wr_id_<?php echo $i ?>" class="sound_only"><?php echo $list[$i]['subject'] ?></label>
                                        <input type="checkbox" name="chk_wr_id[]" value="<?php echo $list[$i]['wr_id'] ?>" id="chk_wr_id_<?php echo $i ?>">
                                    </div>
                                <?php } ?>
                                <div class="notice_event_item_box">
                                    <a href="<?php echo $list[$i]['href'] ?>#href_id">
                                        <?php
                                            $thumb = get_list_thumbnail($board['bo_table'], $list[$i]['wr_id'], $board['bo_gallery_width'], $board['bo_gallery_height'], false, true);

                                            if($thumb['src']) {
                                                $img_content = '<img src="'.$thumb['src'].'" alt="'.$thumb['alt'].'" >';
                                            } else {
                                                $img_content = '<div class="no_image">No Image</div>';
                                            }
                                            echo $img_content;
                                        ?>

                                        <?php echo ( isset($list[$i]['icon_new']) && !empty($list[$i]['icon_new']) ) ? "<span class='circle'>new</span>" : "";?>
                                    </a>

                                    <div class="notice_event_txt txt">
                                        <a href="<?php echo $list[$i]['href'] ?>#href_id">
                                            <div class="fz_16 ls_2 lh_14 m_10"><span class="normal">[<?php echo $list[$i]['ca_name']; ?>]</span>&ensp;<?php echo $list[$i]['subject'] ?></div>
                                            <?php if($list[$i]['ca_name'] == '이벤트'){ ?>
                                            <div class="fz_14 ls_2 lh_14" style="color:#7b7b7b;"><?php echo $list[$i]['wr_2'] ?> ~ <?php echo $list[$i]['wr_3'] ?></div>
                                            <? } ?>
                                        </a>
                                    </div>
                                </div>
                                
                            </div>
                            <?php } ?>
                            <?php if (count($list) == 0) { echo '<div class="item" style="width:100%; text-align:center;"><h3 class="mt-5 mb-2">등록된 게시물이 없습니다.</h3></div>'; } ?>
                        </div>
                    </div>
                </div>

                <div class="section">
                    <div class="container">
                        <div class="template-form flex_row jc_fe center">
                        <?php if ($list_href || $is_checkbox || $write_href) { ?>
                            <?php if ($list_href || $write_href) { ?>
                                <?php if ($is_checkbox) { ?>
                                <div class="submit_btn" style="margin:0;">
                                    <button type="submit" name="btn_submit" value="선택삭제" onclick="document.pressed=this.value" class="wpcf7-form-control wpcf7-submit txt btn_del"><p class="list_btn nanumgothic normal ta_c ls_p2">선택삭제</p></button>
                                </div>
                                <?php } ?>

                                <?php if ($list_href) { ?><a href="<?php echo $list_href ?>"><p class="list_btn nanumgothic normal ta_c ls_p2">목록</p></a><?php } ?>
                                <?php if ($write_href) { ?><a href="<?php echo $write_href ?>" class="in_write"><p class="list_btn nanumgothic normal ta_c ls_p2">글쓰기</p></a><?php } ?>

                                <?php if ($is_admin) { ?>
                                    <div id="bo_admin">
                                        <a href="<?php echo G5_URL ?>/admin/bbs/board.php?bo_table=notice_event" target="_blank"><p class="list_btn list_btn_admin nanumgothic normal ta_c ls_p2">관리자</p></a>
                                    </div>
                                <?php } ?>
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
<div class="flex_row jc_center center">
<?php echo $write_pages;  ?>
</div>

<!-- 게시물 검색 시작 { -->
<fieldset id="bo_sch">
    <legend>게시물 검색</legend>

    <form name="fsearch" method="get">
    <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
    <input type="hidden" name="sca" value="<?php echo $sca ?>">
    <input type="hidden" name="ending" value="<?php echo $ending ?>">
    <input type="hidden" name="sop" value="and">
    <label for="sfl" class="sound_only">검색대상</label>
    <select name="sfl" id="sfl">
        <option value="wr_subject"<?php echo get_selected($sfl, 'wr_subject', true); ?>>제목</option>
        <option value="wr_content"<?php echo get_selected($sfl, 'wr_content'); ?>>내용</option>
        <option value="wr_subject||wr_content"<?php echo get_selected($sfl, 'wr_subject||wr_content'); ?>>제목+내용</option>
        <!--
        <option value="mb_id,1"<?php echo get_selected($sfl, 'mb_id,1'); ?>>회원아이디</option>
        <option value="mb_id,0"<?php echo get_selected($sfl, 'mb_id,0'); ?>>회원아이디(코)</option>
        <option value="wr_name,1"<?php echo get_selected($sfl, 'wr_name,1'); ?>>글쓴이</option>
        <option value="wr_name,0"<?php echo get_selected($sfl, 'wr_name,0'); ?>>글쓴이(코)</option>
        -->
    </select>
    <label for="stx" class="sound_only">검색어<strong class="sound_only"> 필수</strong></label>
    <input type="text" name="stx" value="<?php echo stripslashes($stx) ?>" required id="stx" class="frm_input required" size="15" maxlength="15">
    <input type="image" src="<?php echo G5_URL ?>/img/list_search.png" value="검색" style="vertical-align:middle;">
    </form>
</fieldset>
<!-- } 게시물 검색 끝 -->

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


<script type="text/javascript" defer src="<?php echo G5_THEME_URL;?>/skin/board/youtube_link/autoptimize_bbs.js"></script>
<script src="<?php echo G5_THEME_URL;?>/skin/board/youtube_link/imagesloaded.pkgd.min.js" type="text/javascript"></script>
