<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// 웹사이트 타이틀
$g5['title'] = '공지사항';

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);

?>
<style>
    @media (max-width:480px) { /* 헤더 블랙 */
        .header_menu_li > a{color:#000;}
        .header_menu_li > a::after{border-bottom:1px solid #000; }
        .logo > a > .logo_b{display:block;}
        .logo > a > .logo_w{display:none;}
        .glob-icon{background: url(<?php echo G5_THEME_URL?>/img/global-icon.png)0 100%/100% no-repeat;}
        .select-lang-btn::after{border-top-color:#000;}
        .lang-select-list{background-color:#000;}
        .lang-select-list li{color:#fff;}
        .lang-select-list li.active{color: #fff;}
        .lang-select-list > li:hover > a{color: #fff;}
        .search_icon{background: url(<?php echo G5_THEME_URL?>/img/search-icon-w.png)0 100%/100% no-repeat;}
        .hamberger .line{background:#000;}
        .hamberger .line_close{background:#000;}
        .hamberger.open .line{background:#fff;}
        .hamberger.open .line_close{ background:#fff;}
        .m_call_btn{background: url(<?php echo G5_THEME_URL?>/img/call_icon.png)0 100%/100% no-repeat;}
        .header_number > a{color:#fff;}
    }
</style>
<main id="content">
    
    <article class="sub_top_cont sub6_1_top_cont" id="startContent">
        <div class="sub_top_cont_wrap">
            <div class="sub_top_view_bg sub6_1_top_view_bg"></div>
            <div class="sub_top_text sub_titlebox ta_c">
                <p class="txt01 reveal fade-up delay_200 fz_17 lh_16 sortsmillgoudy normal">
                    NOTICE
                </p>
                <p class="txt02 reveal fade-up delay_200 fz_30 lh_16 kopubworlddotum semibold">
                    공지사항
                </p>
                <p class="txt03 reveal fade-up delay_400 fz_17 ls_p2 lh_16 kopubworlddotum normal">
                    인터서울치과의 새로운 소식을 만나보세요.
                </p>
            </div>
        </div>
    </article>
    
    <article id="href_id" class="sub_cont_wrap s61_c01_wrap">
        
        <!-- 게시판 목록 시작 { -->
        <div id="bo_gall" class="">
            
            <!--<div class="bbs_bar">
                <?php if ($is_category) { ?>
                <nav id="bo_cate" class="equipment_nav">
                    <ul id="bo_cate_ul">
                        <?php echo $category_option ?>
                    </ul>
                </nav>
                <?php } ?>
                
                <fieldset id="bo_sch">
                    <legend>게시물 검색</legend>
                    
                    <form name="fsearch" method="get">
                    <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
                    <input type="hidden" name="sca" value="<?php echo $sca ?>">
                    <input type="hidden" name="sop" value="and">
                    <label for="sfl" class="sound_only">검색대상</label>
                    <select name="sfl" id="sfl">
                        <option value="wr_subject"<?php echo get_selected($sfl, 'wr_subject', true); ?>>제목</option>
                        <option value="wr_content"<?php echo get_selected($sfl, 'wr_content'); ?>>내용</option>
                    </select>
                    <label for="stx" class="sound_only">검색어<strong class="sound_only"> 필수</strong></label>
                    <input type="text" name="stx" placeholder="검색어를 입력해주세요"
                        value="<?php echo stripslashes($stx) ?>" 
                        required id="stx" class="frm_input search_input" 
                        size="15" maxlength="15">
                    <input type="submit" value="" class="btn_submit">
                    </form>
                </fieldset>
            </div>-->
            
            <!-- <?php if ($is_category) { ?>
            <nav id="bo_cate">
                <h2><?php echo $board['bo_subject'] ?> 카테고리</h2>
                <ul id="bo_cate_ul">
                    <?php echo $category_option ?>
                </ul>
            </nav>
            <?php } ?> -->
            
            <form name="fboardlist"  id="fboardlist" action="./board_list_update.php" onsubmit="return fboardlist_submit(this);" method="post">
            <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
            <input type="hidden" name="sfl" value="<?php echo $sfl ?>">
            <input type="hidden" name="stx" value="<?php echo $stx ?>">
            <input type="hidden" name="spt" value="<?php echo $spt ?>">
            <input type="hidden" name="page" value="<?php echo $page ?>">
            <input type="hidden" name="sw" value="">
            
            <ul id="gall_ul">
                <li class="gall_li gall_li_title" style="<?php echo $style ?>width:100%; padding:0.8rem 0; background-color:#fbfaf9; border-bottom:2px solid #b3b3b1;">
                    <ul class="gall_con">
                        <li class="list_txt01 c-0 fz_18 kopubworlddotum semibold ta_c">NO</li>
                        <li class="list_txt02 c-0 fz_18 kopubworlddotum semibold ta_c">제목</li>
                        <li class="list_txt03 c-0 fz_18 kopubworlddotum semibold ta_c">글쓴이</li>
                        <li class="list_txt04 c-0 fz_18 kopubworlddotum semibold ta_c">작성일자</li>
                        <li class="list_txt05 c-0 fz_18 kopubworlddotum semibold ta_c">조회</li>
                    </ul>
                </li>
                <?php for ($i=0; $i<count($list); $i++) {
                    if($i>0 && ($i % $bo_gallery_cols == 0))
                        $style = 'clear:both;';
                    else
                        $style = '';
                    if ($i == 0) $k = 0;
                    $k += 1;
                    if ($k % $bo_gallery_cols == 0) $style .= "margin:0 !important;";
                ?>
                <li class="gall_li <?php if ($wr_id == $list[$i]['wr_id']) { ?>gall_now<?php } ?>" style="<?php echo $style ?>width:100%;">
                    <ul class="gall_con">
                        <li class="list_txt01 ta_c">
                            <p class="txt01 c-4f4f4f fz_17 ls_p2 kopubworlddotum semibold">
                                <?php echo $list[$i]['num']; ?>
                            </p>
                        </li>
                        
                        <li class="list_txt02 ta_c">
                            <a href="<?php echo $list[$i]['href'] ?>#href_id">
                                <div class='imgWrap ta_c'>
                                    <?php
                                    $thumb_width = 220;
                                    $thumb_height = 110;
                                    $thumb = get_list_thumbnail($board['bo_table'], $list[$i]['wr_id'], $thumb_width, $thumb_height);
                                    
                                    if($thumb['src']) {
                                        $img_content = '<img src="'.$thumb['src'].'" alt="'.$thumb['alt'].'" width="'.$thumb_width.'" height="'.$thumb_height.'">';
                                    } else {
                                        $img_content = '<img src="'.G5_THEME_URL.'/img/noimage.png" alt="no image" style="width:220px; height:110px; object-fit:cover;">';
                                    }
                                    
                                    echo $img_content;
                                    ?>
                                </div>
                                <div class="text_box flex_row jc_fs center">
                                    <?php
                                    if ($is_category && $list[$i]['ca_name']) {
                                    ?>
                                    <p class="txt01 cate_icon fz_17 ls_p2 kopubworlddotum semibold">[<?php echo $list[$i]['ca_name'] ?>]</p>
                                    <?php } else if ($list[$i]['is_notice'] == 1) { ?>
                                    <span class="txt01 fz_17 ls_p2 kopubworlddotum semibold" style="margin-right:0.5rem;">[공지]</span>
                                    <?php } ?>
                                    <p class="txt02 c-4f4f4f fz_17 ls_p2 kopubworlddotum semibold"><?php echo $list[$i]['subject'] ?></p>
                                    <?php
                                    //if (isset($list[$i]['icon_new'])) echo $list[$i]['icon_new'];
                                    //if (isset($list[$i]['icon_hot'])) echo $list[$i]['icon_hot'];
                                    ?>
                                    <?php if (isset($list[$i]['icon_new'])){ ?>
                                    <i class="n_icon"></i>
                                    <?php } ?>
                                </div>
                            </a>
                        </li>
                        <li class="list_txt03 ta_c">
                            <p class="txt01 c-4f4f4f fz_17 ls_p2 kopubworlddotum semibold">
                                <?php echo $list[$i]['wr_name'] ?>
                            </p>
                        </li>
                        <li class="list_txt04 ta_c">
                            <p class="txt01 c-4f4f4f fz_17 ls_p2 kopubworlddotum semibold">
                                20<?php echo date("y.m.d", strtotime($list[$i]['wr_datetime'])) ?>
                            </p>
                        </li>
                        <li class="list_txt05 ta_c">
                            <p class="txt01 c-4f4f4f fz_17 ls_p2 kopubworlddotum semibold">
                                <?php echo number_format($list[$i]['wr_hit']) ?>
                            </p>
                        </li>
                    </ul>
                </li>
                <?php } ?>
                <?php if (count($list) == 0) { echo "<li class=\"empty_list\">등록된 게시물이 없습니다.</li>"; } ?>
            </ul>
            
            <!-- 페이지 -->
            <?php echo $write_pages; ?>
            <!-- 페이지 -->
            
            <?php if ($is_admin == 'super' || $is_auth) {  ?>
            <div class="btn_fixed_top">
                <?php if ($is_checkbox) { ?>
                <!--
                <ul class="btn_bo_adm">
                    <li><input type="submit" name="btn_submit" value="선택삭제" onclick="document.pressed=this.value"></li>
                    <li><input type="submit" name="btn_submit" value="선택복사" onclick="document.pressed=this.value"></li>
                    <li><input type="submit" name="btn_submit" value="선택이동" onclick="document.pressed=this.value"></li>
                </ul>
                -->
                <?php } ?>
                <?php if ($write_href) { ?>
                <!--<ul class="btn_bo_user">
                    <li><a href="<?php echo $write_href ?>" class="btn_b02 btn_bo_user02">글쓰기</a></li>
                </ul>-->
                <?php } ?>
            </div>
            <?php } ?>
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
        <script src="<?=G5_JS_URL ?>/aos.js"></script>
        <script>
            AOS.init({
                once: true
            });
        </script>
        
        
    </article>
</main>
<!-- //main -->
