<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// 웹사이트 타이틀
$g5['title'] = '온라인상담';

include_once(G5_PATH.'/head.php');

// 선택옵션으로 인해 셀합치기가 가변적으로 변함
$colspan = 5;

if ($is_checkbox) $colspan++;
if ($is_good) $colspan++;
if ($is_nogood) $colspan++;

?>
<link rel="stylesheet" href="<?php echo G5_THEME_URL;?>/skin/board/online/style.css">
<!--
<h2 id="container_title"><?php echo $board['bo_subject'] ?><span class="sound_only"> 목록</span></h2>
-->

<script>
    $(document).ready(function(){
        $('.main-header').removeClass('color_change');
        $('.ht-inner').removeClass('sub_header');
    });
</script>

<main id="content">
    <article class="sub_content01" id="startContent">
        <div id="href_id"></div>
        <div class="sub_top_view sub8_1_top_view">
            <div class="sub_top_view_bg sub8_1_top_view_bg"></div>
            <div class="sub_top_view_text_wrap sub8_1_top_view_text_wrap ta_c">
                <div class="sub_top_view_text01 sub8_1_top_view_text01 m_20">
                    <p class="fz_35 lh_14 ls_2 medium nanummyeongjo sub_text_ani ta_c">
                        온라인상담
                    </p>
                </div>
            </div>
        </div>
        
        <div class="mouse_scroll main_slide scroll_color_change">
            <div class="mouse">
                <div class="wheel"></div>
            </div>
            <div>
                <span class="m_scroll_arrows m_scroll_arrows_one"></span>
                <span class="m_scroll_arrows m_scroll_arrows_two"></span>
            </div>
        </div>
    </article>

    <article class="sub_cont02 sub8_1_cont02 pd_100">
        <div class="sub8_1_online_list">
        

<!-- 게시판 목록 시작 { -->
<div id="bo_list" >

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
    
    <?php if ($list_href || $is_checkbox || $write_href) { ?>
    <div class="bo_fx">
        <?php if ($is_checkbox) { ?>
        <ul class="btn_bo_adm">
            <li><input type="submit" name="btn_submit" value="선택삭제" onclick="document.pressed=this.value" style=" border-radius: 5px; color:white;  background: #ad2128;  padding: 10px; width:100px; height:40px;" alt="선택삭제"></li>
        </ul>
        <?php } ?>

        <?php if ($list_href || $write_href) { ?>
        <ul class="btn_bo_user">
			<?php if ($admin_href) { ?><li><a href="<?php echo $admin_href ?>" target="_blank"><img src="<?php echo G5_URL ?>/img/list_admin.png" alt="관리자"/></a></li><?php } ?>
            <?php if ($write_href) { ?><li><a href="<?php echo $write_href ?>"><img src="<?php echo G5_URL ?>/img/list_write2.png" alt="상담하기"/></a></li><?php } ?>
        </ul>
        <?php } ?>
    </div>
    <?php } ?>
    
    <div class="bbs_head01 bbs_wrap">
        <table>
        <caption><?php echo $board['bo_subject'] ?> 목록</caption>
        <thead>
        <tr>
            <?php if ($is_checkbox) { ?>
            <th scope="col">
                <label for="chkall" class="sound_only">현재 페이지 게시물 전체</label>
                <input type="checkbox" id="chkall" onclick="if (this.checked) all_checked(true); else all_checked(false);">
            </th>
            <?php } ?>
            <th scope="col">번호</th>
            <th scope="col">지점명</th> 
            <th scope="col">제목</th>
            <th scope="col">이름</th>
            <th scope="col"><?php echo subject_sort_link('wr_datetime', $qstr2, 1) ?>날짜</th>
            <!--<th scope="col"><?php echo subject_sort_link('wr_hit', $qstr2, 1) ?>조회</th>-->
			<th scope="col">답변상태</th>
        </tr>
        </thead>
        <tbody>
        <?php
        for ($i=0; $i<count($list); $i++) {
         ?>
        <tr class="<?php if ($list[$i]['is_notice']) echo "bo_notice"; ?>">
            <?php if ($is_checkbox) { ?>
            <td class="td_chk">
                <label for="chk_wr_id_<?php echo $i ?>" class="sound_only"><?php echo $list[$i]['subject'] ?></label>
                <input type="checkbox" name="chk_wr_id[]" value="<?php echo $list[$i]['wr_id'] ?>" id="chk_wr_id_<?php echo $i ?>">
            </td>
            <?php } ?>
            <td class="td_num">
            <?php
            if ($list[$i]['is_notice']) // 공지사항
                echo '<strong>공지</strong>';
            else if ($wr_id == $list[$i]['wr_id'])
                echo "<span class=\"bo_current\">열람중</span>";
            else
                echo $list[$i]['num'];
             ?>
            </td>
            <td class="td_cate">
                <?php
                echo $list[$i]['icon_reply'];
                if ($is_category && $list[$i]['ca_name']) {
                 ?>
                <a href="<?php echo $list[$i]['ca_name_href'] ?>"><?php echo $list[$i]['ca_name'] ?></a>
                <?php } ?>
			</td> 
            <td class="td_subject">
                <?php
                // if ($list[$i]['link']['count']) { echo '['.$list[$i]['link']['count']}.']'; }
                // if ($list[$i]['file']['count']) { echo '<'.$list[$i]['file']['count'].'>'; }
                //if (isset($list[$i]['icon_hot'])) echo $list[$i]['icon_hot'];
                //if (isset($list[$i]['icon_file'])) echo $list[$i]['icon_file'];
                //if (isset($list[$i]['icon_link'])) echo $list[$i]['icon_link'];
                if (isset($list[$i]['icon_secret'])) echo $list[$i]['icon_secret']; //비밀글 아이콘
				//if (isset($list[$i]['icon_mobile'])) echo $list[$i]['icon_mobile'];
                ?>
				
                <a href="<?php echo $list[$i]['href'] ?>">
					<?php 
					if($bo_table == 'operation_consulting'){
						echo $list[$i]['wr_name']."님의 상담 내용입니다.";
					} else {
						echo $list[$i]['wr_subject'];
					}
					?>
					
                   <!-- <?php if ($list[$i]['comment_cnt']) { ?><span class="sound_only">댓글</span><?php echo $list[$i]['comment_cnt']; ?><span class="sound_only">개</span><?php } ?>-->
                </a>
                
                <?php
				if (isset($list[$i]['icon_new'])) echo $list[$i]['icon_new']; //NEW 아이콘			
				?>
            </td>
            <td class="td_name sv_use">
				<?php
				   $char = ord($list[$i]['wr_name']);
						if($char >= 0xa1 && $char <= 0xfe)
						{
							$nums = strlen($list[$i]['wr_name'])/3;
							echo substr($list[$i]['wr_name'], 0 , 3);	
							for ($a=1; $a<$nums; $a++) {echo "*";}
						}
						else{
							$nums = strlen($list[$i]['wr_name']);
							echo substr($list[$i]['wr_name'], 0 , 2);	
							for ($a=2; $a<$nums; $a++) {echo "*";}
						}		
				?>			
			</td>
            <td class="td_date"><?php echo date("m-d", strtotime($list[$i]['wr_datetime'])); ?></td>
            <!--<td class="td_num"><?php echo $list[$i]['wr_hit'] ?></td>-->
			<td class="td_reply">
				<?php
				if($list[$i]['wr_7'] == '확인중'){
					echo "<font style='color:#434343'>".$list[$i]['wr_7']."</font>";
				} else {
					echo $list[$i]['wr_7'];
				}
				?>
			</td>
        </tr>
        <?php } ?>
        <?php if (count($list) == 0) { echo '<tr><td colspan="'.$colspan.'" class="empty_table">게시물이 없습니다.</td></tr>'; } ?>
        </tbody>
        </table>
    </div>

    
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
<fieldset id="bo_sch" >
    <legend>게시물 검색</legend>

    <form name="fsearch" method="get">
    <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
    <input type="hidden" name="sca" value="<?php echo $sca ?>">
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
    <input type="text" name="stx" value="<?php echo stripslashes($stx) ?>" required id="stx" class="frm_input required" size="15" maxlength="20" placeholder="검색어를 입력해주세요.">
    <input type="image" src="<?php echo G5_URL ?>/img/list_search.png" value="검색" style="vertical-align:middle;">
    </form>
</fieldset>
<!-- } 게시판 검색 끝 -->

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

</div>
</article>
</main>
<!-- //main -->

<?php
include_once(G5_PATH.'/tail.php');
?>