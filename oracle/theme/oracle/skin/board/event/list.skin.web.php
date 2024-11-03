<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// 선택옵션으로 인해 셀합치기가 가변적으로 변함
$colspan = 5;

if ($is_checkbox) $colspan++;
if ($is_good) $colspan++;
if ($is_nogood) $colspan++;

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/autoptimize_bbs.css">', 0);
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

$write_pages = get_paging(G5_IS_MOBILE ? $config['cf_mobile_pages'] : $config['cf_write_pages'], $page, $total_page, './sub1_5.php?bo_table='.$bo_table.$qstr.'&amp;page=');
?>

<script>
$(window).on('load', function() {
    $('#bo_cate_on').css("background-color", "<?php echo $board['bo_1']; ?>");
    $('#bo_list .cnt_cmt').css("background-color", "<?php echo $board['bo_1']; ?>");
    $('#bo_list .btn_list_01 a').css("background-color", "<?php echo $board['bo_1']; ?>");
    $('#bo_list .td_num2 .fa-bell').css("color", "<?php echo $board['bo_1']; ?>");
    $('#bo_list .td_num2 .fa-lock').css("color", "<?php echo $board['bo_1']; ?>");
    $('#bo_list .comm_cnt').css("color", "<?php echo $board['bo_1']; ?>");
    $('.scrap_ico .fa-heart').css("color", "<?php echo $board['bo_1']; ?>");
    $('.re_cmt').css("color", "<?php echo $board['bo_1']; ?>");
    $('.re_cmt2').css("color", "<?php echo $board['bo_1']; ?>");
    $('.fa-bell').css("color", "<?php echo $board['bo_1']; ?>");
    
    //진행중 아이콘 백그라운드 색상 처리
    $('.status_b1').css("background-color", "<?php echo $board['bo_1']; ?>");
});
</script>
<div class="container1220">

<!--
<div class="sub-headline">
	<h1 class="sub-headline-tit"><a href=""><?php echo $board['bo_subject'] ?></a></h1>
</div>
-->

<!-- 게시판 목록 시작 { -->
<div id="bo_list" class="bo_list2" style="width:<?php echo $width; ?>">
    
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

        <!-- 게시판 페이지 정보 및 버튼 시작 { -->
        <div id="bo_list" class="flex_row jc_center center">
            <!-- 게시판 카테고리 시작 { -->
            <?php if ($is_category) { ?>
            <nav id="bo_cate" class="notice_event_nav">
                <ul id="bo_cate_ul">
                    <?php echo $category_option ?>
                </ul>
            </nav>
            <?php } ?>
            <!-- } 게시판 카테고리 끝 -->
        </div>
        <!-- } 게시판 페이지 정보 및 버튼 끝 -->
        <?php if ($is_checkbox) { ?>
            <div class="chk">
                <input type="checkbox" id="chkall" onclick="if (this.checked) all_checked(true); else all_checked(false);">
                <label for="chkall">현재 페이지 게시물 전체</label>
            </div>
        <?php } ?>
        
        <div class="bbs_head01 bbs_wrap event-row">
            
            <?php
            for ($i=0; $i<count($list); $i++) {

                $t_day = date("Y-m-d H:i:s", time());  // 오늘
                $start_day = $list[$i]['wr_2']." 00:00:00"; // 시작일
                $end_day = $list[$i]['wr_3']." 23:59:59"; // 종료일

                 if($t_day >= $start_day && $t_day <= $end_day) {
                     $displayState = 'block';
                 } else if($list[$i]['ca_name'] == '공지사항'){ 
                     $displayState = 'block';
                 } else if($list[$i]['wr_4'] == 'Y'){ 
                     $displayState = 'block';
                 } else if($t_day <= $start_day && $t_day >= $end_day && $list[$i]['wr_4'] == 'Y'){ 
                     $displayState = 'block';
                 } else if($t_day <= $start_day && $t_day >= $end_day){ 
                     $displayState = 'none';
                 } else { 
                     $displayState = 'none';
                 }

                 if ($is_admin) {
                    $displayState = 'block';
                 }
            ?>

            <div class="event--item <?php echo $lt_class ?>">
                <?php if ($is_checkbox) { ?>
                    <div class="chk">
                        <span class="fz_14 notosans medium lh_16 ls_0 c-b"><?php if($is_admin) { echo $list[$i]['num'].".&nbsp;"; }?></span>
                        <label for="chk_wr_id_<?php echo $i ?>" class="sound_only"><?php echo $list[$i]['subject'] ?></label>
                        <input type="checkbox" name="chk_wr_id[]" value="<?php echo $list[$i]['wr_id'] ?>" id="chk_wr_id_<?php echo $i ?>">
                    </div>
                <?php } ?>
                <div class="notice_event_item_box" style="max-height:378px;">
                    <a href="<?php echo $list[$i]['href'] ?>#href_id" style="height:auto;">
                        <?php
                            $thumb = get_list_thumbnail($board['bo_table'], $list[$i]['wr_id'], $board['bo_gallery_width'], $board['bo_gallery_height'], false, true);

                            if($thumb['src']) {
                                $img_content = '<img style="height:100%;" src="'.$thumb['ori'].'" alt="'.$thumb['alt'].'" >';
                            } else {
                                $img_content = '<div class="no_image">No Image</div>';
                            }
                            echo $img_content;
                        ?>
                        <?php echo ( isset($list[$i]['icon_new']) && !empty($list[$i]['icon_new']) ) ? "<span class='circle'>new</span>" : "";?>
                    </a>
                    
                    <div class="notice_event_txt txt">
                        <a href="<?php echo $list[$i]['href'] ?>#href_id">
                            <div class="fz_18 ls_2 lh_14 medium m_10"><!--<span class="fz_18 medium" style="color:#0F594E;">[<?php echo $list[$i]['ca_name']; ?>]</span>&ensp;--><?php echo $list[$i]['subject'] ?></div>
                            <!--
                            <?php if($list[$i]['ca_name'] == '이벤트'){ ?>
                            <div class="fz_14 ls_2 lh_14 m_10" style="color:#7b7b7b;"><?php echo $list[$i]['wr_2'] ?> ~ <?php echo $list[$i]['wr_3'] ?></div>
                            <? } ?>
                            -->
                            <div class="fz_14 ls_2 lh_14 m_10" style="color:#7b7b7b;">20<?php echo date("y-m-d", strtotime($list[$i]['wr_datetime'])) ?></div>
                            <div class="fz_14 ls_2 lh_14" style="color:#7b7b7b;">
                                지점명 : <?php echo $list[$i]['ca_name']; ?>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <?php } ?>
            <?php if (count($list) == 0) { echo '<div class="empty_table" style="margin-left:auto; margin-right:auto; text-align:center;">등록된 게시물이 없습니다.</div>'; } ?>
        </div>

        <!-- 페이지 -->
        <div class="flex_row jc_center center">
        <?php echo $write_pages; ?>
        </div>
        <!-- 페이지 -->

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

                        <?php if ($list_href) { ?><a href="<?php echo G5_THEME_URL ?>/sub/sub1_5.php#href_id"><p class="list_btn nanumgothic normal ta_c ls_p2">목록</p></a><?php } ?>
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
        <input type="text" name="stx" value="<?php echo stripslashes($stx) ?>" required id="stx" class="frm_input required" size="15" maxlength="15" placeholder="검색어를 입력해주세요.">
        <input type="image" src="<?php echo G5_URL ?>/img/list_search_2.png" value="검색" style="vertical-align:middle;">
        </form>
    </fieldset>
    <!-- } 게시물 검색 끝 -->
       

    
    <script>
    jQuery(function($){
        // 게시판 검색
        $(".btn_bo_sch").on("click", function() {
            $(".bo_sch_wrap").toggle();
        })
        $('.bo_sch_bg, .bo_sch_cls').click(function(){
            $('.bo_sch_wrap').hide();
        });
    });
    </script>
    <!-- } 게시판 검색 끝 --> 
</div>
</div>
</div>
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
        f.action = "<?php echo G5_URL ?>/bbs/board_list_update.php";
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
