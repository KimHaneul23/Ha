<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
//add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);

?>

<link href="<?php echo G5_THEME_URL?>/skin/board/doctor/style.css" rel="stylesheet">

<!-- 게시판 목록 시작  -->
<div id="bo_gall">

    <?php if ($is_category) { ?>
    <nav id="bo_cate" class="doctors_nav">
        <ul id="bo_cate_ul">
            <?php echo $category_option ?>
        </ul>
    </nav>
    <?php } ?>
    
    <div class="doctors_item_wrap">
        <div class="doctors_item_list">
            <form name="fboardlist"  id="fboardlist" action="<?php echo G5_BBS_URL; ?>/board_list_update.php" onsubmit="return fboardlist_submit(this);" method="post">
            <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
            <input type="hidden" name="sfl" value="<?php echo $sfl ?>">
            <input type="hidden" name="stx" value="<?php echo $stx ?>">
            <input type="hidden" name="spt" value="<?php echo $spt ?>">
            <input type="hidden" name="sst" value="<?php echo $sst ?>">
            <input type="hidden" name="sod" value="<?php echo $sod ?>">
            <input type="hidden" name="page" value="<?php echo $page ?>">
            <input type="hidden" name="sw" value="">
            
            <div class="doctors_top_view">
                <div class="swiper-container doctors_top_view_swiper">
                    <div class="swiper-wrapper">
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

                            $line_height_style = ($board['bo_gallery_height'] > 0) ? 'line-height:'.$board['bo_gallery_height'].'%' : '';

                            // 이미지파일 호출
                            $file = get_file($bo_table, $list[$i]['wr_id']);
                        ?>
                        <div class="swiper-slide doctors_top_view_slide">
                            <div class="doctors_top_view_box flex_row jc_center center">
                                <div class="doctors_top_img">
                                    <a href="javascript:modalView('doctor<?=$i ?>');">
                                        <?php
                                        if(preg_match("/\.({$config['cf_image_extension']})$/i", $file[0]['file'])) {
                                            $file_src = '<img src="'.$file[0]['path'].'/'.$file[0]['file'].'">';
                                        }else {
                                            $file_src = '<img src="/img/no-img.png">';
                                        }
                                        echo $file_src;
                                        ?>
                                        <div class="gall_text_href ta_l <?php if($i == 1) echo 'gall_text_doctor02' ?> <?php if($i == 2) echo 'gall_text_doctor03' ?> <?php if($sca == '송도점' && $i == 0) echo 'gall_text_doctor03' ?>">
                                            <a href="javascript:modalView('doctor<?=$i ?>');" class="bo_tit">
                                                <p class="bo_tit_store fz_14 normal m_5"><?php echo $list[$i]['ca_name'] ?></p>
                                                <p class="ls_2 normal m_5"><span class="fz_18"><?php echo $list[$i]['subject'] ?></span> <span class="bo_tit_span fz_14"><?=$list[$i]['wr_2']; ?></span></p>
                                                <p class="bo_cnt fz_14 ls_2 normal m_10"><?php echo $list[$i]['wr_1'] ?></p>
                                                <img src="<?php echo G5_THEME_URL?>/sub/img/plus_btn.svg" alt="">
                                            </a>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
            <?php for ($i=0; $i<count($list); $i++) {
                
                // 이미지파일 호출
                $file = get_file($bo_table, $list[$i]['wr_id']);
            ?>
            <div id="doctor<?=$i ?>" class="modal">
                <div class="modal-dialog">
                    <button type="button" class="modal-close" onclick="modalHide('doctor<?=$i ?>')"></button>
                    <div class="modal-content">
                        <div class="modal-body">
                            <!--
                            <div class="imgbox">
                                <?php
                                    if(preg_match("/\.({$config['cf_image_extension']})$/i", $file[1]['file'])) {
                                        $file_src = '<img src="'.$file[1]['path'].'/'.$file[1]['file'].'" class="img-fluid">';
                                    }else {
                                        $file_src = '<img src="/img/no-img.png">';
                                    }
                                    echo $file_src;
                                 ?>
                            </div>
                            -->
                            <div class="txtbox">
                                <div class="title_store fz_20 lh_16 ls_2 normal m_10"><?php echo $list[$i]['ca_name'] ?></div>
                                <div class="titleline notoserif fz_25 lh_16 ls_2 normal ta_c m_60"><?=$list[$i]['subject']; ?> <span class="fz_16"><?=$list[$i]['wr_2']; ?></span></div>
                                <!--
                                <div class="meta-tag ta_c">
                                    <?
                                        $tag = explode("|",$list[$i]['wr_1']);
                                        for ($k=0; $k<count($tag); $k++) {
                                    ?>
                                    <span><?=$tag[$k] ?></span>
                                    <? } ?>
                                </div>
                                -->
                                <div class="cont ta_l fz_16 lh_23 ls_2 light">
                                    <p><?=$list[$i]['wr_1']; ?></p>
                                    <?=nl2br($list[$i]['wr_content']) ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="transparents-layer modal-doctor<?=$i ?>" onclick="modalHide('doctor<?=$i ?>')"></div>
            <?php } ?>
            <!-- 페이지 -->
            <?php //echo $write_pages; ?>
            <!-- 페이지 -->
            </form>
        </div>
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
        f.action = g5_bbs_url+"/board_list_update.php";
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
    f.action = g5_bbs_url+"/move.php";
    f.submit();
}

</script>
<?php } ?>
<!--  //게시판 목록 끝 -->
