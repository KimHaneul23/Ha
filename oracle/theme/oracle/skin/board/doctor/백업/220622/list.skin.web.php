<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
?>

<!-- 게시판 목록 시작 { -->
<div id="bo_gall">

    <?php if ($is_category) { ?>
    <nav id="bo_cate">
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
         ?>
        <li class="<?php echo implode(' ', $classes); ?>">
            <div class="gall_box">
                <div class="gall_con">
					<?
					$thumb = $list[$i]['file'];
					?>
                    <div class="gall_img" style="background:url('/data/file/<?=$bo_table ?>/<?=$thumb[1][file] ?>') no-repeat center/cover;">
                        <a href="javascript:modalView('doctor<?=$i ?>');" class="doctor-btn">
							<img src="/data/file/<?=$bo_table ?>/<?=$thumb[1]['file'] ?>" alt="" class="img-fluid"/>
                        </a>
                    </div>
                    <div class="gall_text_href">
						<a href="javascript:modalView('doctor<?=$i ?>');" class="doctor-btn bo_tit">
                            <?php echo $list[$i]['subject'] ?>
						</a>
						<span class="bo_cnt"><?php echo utf8_strcut(strip_tags($list[$i]['wr_content']), 68, '..'); ?></span>
						<a href="javascript:modalView('doctor<?=$i ?>');" class="btn type01 doctor-btn">view more <i class="icon-arrow01"></i></a>
                    </div>
                </div>
            </div>
			<div id="doctor<?=$i ?>" class="modal">
				<div class="modal-dialog">
					<button type="button" class="btn-close" onclick="modalHide('doctor<?=$i ?>')">
						<i class="icon-close01"></i>
					</button>
					<div class="modal-content">
						<div class="modal-body d-flex">
							<div class="d-flbox">
								<h2 class="title">iTero Element 5D <br>구강 스캐너</h2>
								<p>NIRI 기술로 1분 이내 구강을 스캔, 3D 이미징 기술로 교정 결과 예측 및 인접면 충치를 진단합니다.</p>
								<ul class="circle-list">
									<li><span>실시간 <br>교정 진단</span></li>
									<li><span>교정 전후 <br>확인 가능</span></li>
									<li style="line-height:135px"><span>치료 진행상황 <br>평가 가능</span></li>
									<li><span>방사선 <br>노출 No</span></li>
									<li><span>오차 없는 <br>시뮬레이션</span></li>
								</ul>
							</div>
							<div class="d-frbox">
								<img src="/img/main-sect05-img05.jpg" alt="" class="img-fluid" />
							</div>
						</div>
					</div>
				</div>
			</div>
		</li>
        <?php } ?>
        <?php if (count($list) == 0) { echo "<li class=\"empty_list\">게시물이 없습니다.</li>"; } ?>
    </ul>
    
    <!-- 페이지 -->
    <?php echo $write_pages; ?>
    <!-- 페이지 -->
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
