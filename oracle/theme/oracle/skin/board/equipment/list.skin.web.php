<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);

?>

<!-- 게시판 목록 시작 { -->
<div id="bo_gall">

    <?php if ($is_category) { ?>
    <nav id="bo_cate" class="equipment_nav">
        <ul id="bo_cate_ul">
            <?php echo $category_option ?>
        </ul>
    </nav>
    <?php } ?>

    <form name="fboardlist"  id="fboardlist" action="<?php echo G5_BBS_URL; ?>/board_list_update.php" onsubmit="return fboardlist_submit(this);" method="post">
        <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
        <input type="hidden" name="sfl" value="<?php echo $sfl ?>">
        <input type="hidden" name="stx" value="<?php echo $stx ?>">
        <input type="hidden" name="spt" value="<?php echo $spt ?>">
        <input type="hidden" name="sst" value="<?php echo $sst ?>">
        <input type="hidden" name="sod" value="<?php echo $sod ?>">
        <input type="hidden" name="page" value="<?php echo $page ?>">
        <input type="hidden" name="sw" value="">

        <div class="equipment_top_view">
            <div class="swiper-container equipment_top_view_swiper">
                <div class="swiper-wrapper">
                    <?php for ($i=0; $i<count($list); $i++) {

                        // 이미지파일 호출
                        $file = get_file($bo_table, $list[$i]['wr_id']);
                        $image_width_big = 600;
                        $image_height_big = 600;

                    ?>
                    <div class="swiper-slide equipment_top_view_slide">
                        <div class="equipment_top_view_box flex_row jc_center center">
                            <div class="equipment_top_img">
                                <?php
                                    if(preg_match("/\.({$config['cf_image_extension']})$/i", $file[1]['file'])) {
                                        $file_src = '<img src="'.$file[1]['path'].'/'.$file[1]['file'].'" width="'.$image_width_big.'" height="'.$image_height_big.'" class="img-fluid">';
                                    }else {
                                        $file_src = '<img src="/img/no-img.jpg">';
                                    }
                                    echo $file_src;
                                ?>
                            </div>
                            <div class="equipment_top_title">
                                <div class="equipment_top_text01 m_20">
                                    <p class="fz_28 c-b ls_p5 lh_14 medium"><?php echo $list[$i]['subject'] ?></p>
                                    <p class="fz_20 c-b ls_2 lh_16 normal"><?php echo $list[$i]['wr_1'] ?></p>
                                </div>
                                <div class="fz_13 ls_2 lh_14 m_20" style="color:#7b7b7b;">
                                    <?php if($list[$i]['wr_6'] == '구월점' && $list[$i]['wr_7'] == ''){ ?>
                                        <?php echo $list[$i]['wr_6'] ?>
                                    <?php } else if($list[$i]['wr_6'] == '' && $list[$i]['wr_7'] == '송도점'){ ?>
                                        <?php echo $list[$i]['wr_7'] ?>
                                    <?php } else if($list[$i]['wr_6'] == '구월점' && $list[$i]['wr_7'] == '송도점'){ ?>
                                        <?php echo $list[$i]['wr_6'] ?>, <?php echo $list[$i]['wr_7'] ?>   
                                    <?php } ?>
                                </div>
                                <div class="equipment_top_text02">
                                    <div class="equipment_top_cont_text fz_15 ls_1 lh_16 light c-b">
                                        <?=nl2br($list[$i]['wr_content']) ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <div class="swiper-button-next equipment_top_next"></div>
                <div class="swiper-button-prev equipment_top_prev"></div>
            </div>
        </div>

        <ul id="gall_ul" class="gall_row">
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
                $image_width = 271;
                $image_height = 271;
            ?>
            <li class="<?php echo implode(' ', $classes); ?>">
                <div class="gall_box">
                    <div class="gall_con">
                        <div class="gall_img">
                            <a href="javascript:equipment_top_view_swiper.slideTo(<?=$i ?>, 800);" onclick="$('html, body').animate({ scrollTop: $('#bo_gall').offset().top }, 500);">
                            <?php
                                if(preg_match("/\.({$config['cf_image_extension']})$/i", $file[0]['file'])) {
                                    $file_src = '<img src="'.$file[0]['path'].'/'.$file[0]['file'].'" width="'.$image_width.'" height="'.$image_height.'">';
                                }else {
                                    $file_src = '<img src="/img/no-img.jpg">';
                                }
                                echo $file_src;
                             ?>
                            </a>
                        </div>
                        <div class="gall_text_href">
                            <a href="javascript:modalView('equipment<?=$i ?>');" class="bo_tit">
                                <p class="fz_18 ls_2 lh_16 normal"><?php echo $list[$i]['subject'] ?></p>
                            </a>
                            <!--<span class="bo_cnt"><?php echo $list[$i]['wr_1'] ?></span>-->
                        </div>
                    </div>
                </div>

            </li>
            <?php } ?>
            <?php if (count($list) == 0) { echo "<li class=\"empty_list\">게시물이 없습니다.</li>"; } ?>
        </ul>
        
        <style>
            .pg_wrap{float: none; margin: 40px auto 0; width: 100%; text-align: center;;}
        </style>
        <!-- 페이지 -->
        <?php echo $write_pages; ?>
        <!-- 페이지 -->
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
<!-- } 게시판 목록 끝 -->
