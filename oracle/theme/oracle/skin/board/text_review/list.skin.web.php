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

$write_pages = get_paging(G5_IS_MOBILE ? $config['cf_mobile_pages'] : $config['cf_write_pages'], $page, $total_page, './sub8_3.php?bo_table='.$bo_table.$qstr.'&amp;page=');

?>



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

        <?php if ($is_checkbox) { ?>
            <div class="chk">
                <input type="checkbox" id="chkall" onclick="if (this.checked) all_checked(true); else all_checked(false);">
                <label for="chkall">현재 페이지 게시물 전체</label>
            </div>
        <?php } ?>
        
        <div class="bbs_head01 bbs_wrap event-row">
            
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
            <div class="event--item <?php echo $lt_class ?>" style="display:<?php echo $displayState ?>">
                <?php if ($is_checkbox) { ?>
                    <div class="chk">
                        <label for="chk_wr_id_<?php echo $i ?>" class="sound_only"><?php echo $list[$i]['subject'] ?></label>
                        <input type="checkbox" name="chk_wr_id[]" value="<?php echo $list[$i]['wr_id'] ?>" id="chk_wr_id_<?php echo $i ?>">
                    </div>
                <?php } ?>
                <div class="text_review_item_box">
                    <a href="<?php echo $list[$i]['href'] ?>#href_id">
                        <?
                        $image_width = 380;
                        $image_height = 200;
                        ?>
                        <?php
                            $thumb = get_list_thumbnail($board['bo_table'], $list[$i]['wr_id'], $board['bo_gallery_width'], $board['bo_gallery_height'], false, true, 'top');

                            if($thumb['src']) {
                                $img_content = '<img src="'.$thumb['src'].'" alt="'.$thumb['alt'].'" width="'.$image_width.'" height="'.$image_height.'">';
                            } else {
                                $img_content = '<div class="no_image">No Image</div>';
                            }
                            echo $img_content;
                        ?>
                        <?php if($list[$i]['is_notice']){ ?>
                        <div class="best_icon ls_2">BEST</div>
                        <? } ?>
                    </a>
                    
                    <div class="text_review_txt txt">
                        <a href="<?php echo $list[$i]['href'] ?>#href_id">
                            <div class="fz_18 ls_2 lh_14 m_10 ta_c"><span class="medium" style="color:#0F594E;">[<?php echo $list[$i]['wr_1'] ?>]</span>&ensp;<?php echo $list[$i]['subject'] ?></div>
                        </a>
                    </div>
                </div>
            </div>

            <?php } ?>
            <?php if (count($list) == 0) { echo '<div class="empty_table" style="margin-left:auto; margin-right:auto; text-align:center;">손글씨후기 준비 중입니다.</div>'; } ?>
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

                        <?php if ($list_href) { ?><a href="<?php echo G5_THEME_URL ?>/sub/sub8_3.php#href_id"><p class="list_btn nanumgothic normal ta_c ls_p2">목록</p></a><?php } ?>
                        <?php if ($write_href) { ?><a href="<?php echo $write_href ?>" class="in_write"><p class="list_btn nanumgothic normal ta_c ls_p2">글쓰기</p></a><?php } ?>

                        <?php if ($is_admin) { ?>
                            <div id="bo_admin">
                                <a href="<?php echo G5_URL ?>/admin/bbs/board.php?bo_table=text_review" target="_blank"><p class="list_btn list_btn_admin nanumgothic normal ta_c ls_p2">관리자</p></a>
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
