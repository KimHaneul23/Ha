<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// 웹사이트 타이틀
$g5['title'] = '치료 전후사진';

// 선택옵션으로 인해 셀합치기가 가변적으로 변함
//$colspan = 5;

//if ($is_checkbox) $colspan++;
//if ($is_good) $colspan++;
//if ($is_nogood) $colspan++;

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/autoptimize_bbs.css">', 0);
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

//$write_pages = get_paging(G5_IS_MOBILE ? $config['cf_mobile_pages'] : $config['cf_write_pages'], $page, $total_page, './sub8_2.php?bo_table='.$bo_table.$qstr.'&amp;page=');


?>

<main id="content">
    
    <article class="sub_top_cont sub6_2_top_cont" id="startContent">
        <div class="sub_top_cont_wrap">
            <div class="sub_top_view_bg sub6_2_top_view_bg"></div>
            <div class="sub_top_text sub_titlebox ta_c">
                <p class="txt01 reveal fade-up delay_200 fz_17 lh_16 sortsmillgoudy normal">
                    BEFORE & AFTER
                </p>
                <p class="txt02 reveal fade-up delay_200 fz_30 lh_16 kopubworlddotum semibold">
                    치료 전후사진
                </p>
                <p class="txt03 reveal fade-up delay_400 fz_17 ls_p2 lh_16 kopubworlddotum normal">
                    결과로 증명하는 <br class="m_cont_480">인터서울치과의 전문성을 직접 확인하세요.
                </p>
            </div>
        </div>
    </article>
    
    <article id="href_id" class="sub_cont_wrap s62_c01_wrap">
        
        <!-- 게시물 검색 시작 { -->
        <!--<fieldset id="bo_sch">
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
        </fieldset>-->
        <!-- } 게시물 검색 끝 -->
        
        <!-- 게시판 카테고리 시작 { -->
        <?php if ($is_category) { ?>
        <nav id="bo_cate">
            <ul id="bo_cate_ul">
                <?php echo $category_option ?>
            </ul>
        </nav>
        <?php } ?>
        <!-- } 게시판 카테고리 끝 -->
        
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
            <!--
            <?php if ($is_checkbox) { ?>
                <div class="chk">
                    <input type="checkbox" id="chkall" onclick="if (this.checked) all_checked(true); else all_checked(false);">
                    <label for="chkall">현재 페이지 게시물 전체</label>
                </div>
            <?php } ?>
            -->
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
                    
                    // 이미지파일 호출
                    $file = get_file($bo_table, $list[$i]['wr_id']);
                ?>
                <div class="event--item <?php echo $lt_class ?>">
                    <!--
                    <?php if ($is_checkbox) { ?>
                        <div class="chk">
                            <label for="chk_wr_id_<?php echo $i ?>" class="sound_only"><?php echo $list[$i]['subject'] ?></label>
                            <input type="checkbox" name="chk_wr_id[]" value="<?php echo $list[$i]['wr_id'] ?>" id="chk_wr_id_<?php echo $i ?>">
                        </div>
                    <?php } ?>
                    -->
                    <div class="review_title txt">
                        <a href="<?php echo $list[$i]['href'] ?>#href_id">
                            <div class="fz_18 ls_p2 lh_16 kopubworlddotum normal ta_c"><span class="semibold">[<?php echo $list[$i]['ca_name'] ?>]</span>&ensp;<?php echo $list[$i]['subject'] ?></div>
                        </a>
                    </div>
                    <div class="review_item_box">
                        <a href="<?php echo $list[$i]['href'] ?>#href_id">
                            <?php
                                $thumb_width = 320;
                                $thumb_height = 222;
                                
                                if(preg_match("/\.({$config['cf_image_extension']})$/i", $file[0]['file'])) {
                                    $file_src1 = '<img src="'.$file[0]['path'].'/'.$file[0]['file'].'" width="'.$thumb_width.'" height="'.$thumb_height.'">';
                                }else {
                                    $file_src1 = '<img src="'.G5_THEME_URL.'/img/noimage.png">';
                                }
                                
                                if(preg_match("/\.({$config['cf_image_extension']})$/i", $file[1]['file'])) {
                                    $file_src2 = '<img src="'.$file[1]['path'].'/'.$file[1]['file'].'" width="'.$thumb_width.'" height="'.$thumb_height.'">';
                                }else {
                                    $file_src2 = '<img src="'.G5_THEME_URL.'/img/noimage.png">';
                                }
                            ?>
                            <div class="review_ba_img review_before_img">
                                <?php echo $file_src1; ?>
                                <p class="txt01 fz_14 ls_p2 lh_16 kopubworlddotum normal ta_c">
                                    <span>BEFORE</span><span><?php echo $list[$i]['wr_1'] ?></span>
                                </p>
                            </div>
                            <div class="review_ba_img review_after_img <?=($is_member ? '':'blur')?>">
                                <?php echo $file_src2; ?>
                                <p class="txt01 fz_14 ls_p2 lh_16 kopubworlddotum normal ta_c">
                                    <span>AFTER</span><span><?php echo $list[$i]['wr_2'] ?></span>
                                </p>
                                
                                <div class="blur_txt_wrap">
                                    <div class="blur_txt">
                                        <img src="<?php echo G5_THEME_URL?>/skin/board/before_after/img/lock_icon_w.png" />
                                        <p class="c-w fz_14 ls_p2 lh_16 kopubworlddotum normal">
                                            로그인 후 볼 수 있습니다. 
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                
                <?php } ?>
                <?php if (count($list) == 0) { echo '<div class="empty_table" style="margin-left:auto; margin-right:auto; text-align:center;">전후사진 준비 중입니다.</div>'; } ?>
            </div>
            
            <style>
                .review_item_box{position:relative; border-bottom:2px solid #e9e9e9;}
                .review_item_box > a{
                    position:relative; 
                    width:100%; 
                    height: auto;
                    box-sizing: border-box;
                    overflow: hidden;
                    display:flex; 
                    justify-content:center; 
                    align-items:center;
                    gap:0 0.2rem;
                    transition: border 0.3s ease-in-out; 
                    -webkit-transition: border 0.3s ease-in-out; 
                    -moz-transition: border 0.3s ease-in-out; 
                    -ms-transition: border 0.3s ease-in-out; 
                    -o-transition: border 0.3s ease-in-out;
                }
                /*.review_item_box > a::after{content:''; position:absolute; top:38%; left:50%; width:2.5rem; height:2.5rem; background:url("<?php echo G5_THEME_URL?>/skin/board/before_after/img/arrow_icon.png") 50% 50%/100% no-repeat; transform: translate(-50%,-50%) translateZ(0); -webkit-transform: translate(-50%,-50%) translateZ(0); -moz-transform: translate(-50%,-50%) translateZ(0); -ms-transform: translate(-50%,-50%) translateZ(0); -o-transform: translate(-50%,-50%) translateZ(0); z-index:2;}*/
                
                .review_ba_img{position:relative; width:calc(50% - 0.1rem); height:100%; text-align:center; /*aspect-ratio:3 / 4; -webkit-aspect-ratio:3 / 4;*/}
                .review_ba_img > .txt01{position:relative; height:2.4rem; color:#000; margin: 0 0; padding:0.6rem 1rem 0.4rem; display:flex; justify-content:space-between; align-items:center;}
                .review_ba_img > .txt01 > span{}
                .review_after_img.blur { position:relative; }
                .review_after_img .blur_txt_wrap{display:none; position:absolute; top:0; left:0; width:100%; height:100%; max-height:calc(100% - 2.4rem); background-color:rgba(0, 0, 0, 0.4); z-index:1;}
                .review_after_img .blur_txt_wrap::before{
                    content:''; 
                    position:absolute; top:0; left:0; 
                    width:100%; height:100%; 
                    backdrop-filter: blur(8px);
                    -webkit-backdrop-filter: blur(8px);
                    -moz-backdrop-filter: blur(8px);
                    -ms-backdrop-filter: blur(8px);
                    -o-backdrop-filter: blur(8px);
                }
                .review_after_img.blur .blur_txt_wrap{ display:block;}
                .review_after_img.blur .blur_txt_wrap .blur_txt{position:absolute; top:0; left:0; width:100%; height:100%; display:flex; justify-content:center; align-items:center; z-index:2;}
                .review_after_img.blur .blur_txt_wrap .blur_txt > img{width:auto; height:0.875rem; margin:0 0 3px;}
                .review_after_img.blur .blur_txt_wrap .blur_txt > p{margin-left:0.5rem; color:#fff;}
                .review_ba_img > img{
                    width:100%;
                    /*height:100%;*/
                    object-fit:cover;
                }
                
                .s62_bna_info{position:relative; width:65%; margin:6rem auto 0; padding:1.5rem 2rem; background-color:#f5f5f5; display:flex; justify-content:center; align-items:center;}
                .s62_bna_info_text{position:relative; width:auto; text-align:center; padding:0; display:flex; flex-direction:column; justify-content:center; align-items:center;}
                .s62_bna_info_text .check_icon2{display:block; margin:0 0 1rem;}
                .s62_bna_info_text > .txt01{color:#797979;}
                
                @media all and (max-width: 1440px) { 
                    .review_item_box > a{height: 16.625rem;}
                }
                @media all and (max-width: 1280px) { 
                    .review_item_box > a{height: 17.625rem;}
                }
                @media all and (max-width: 1140px) { 
                    .review_item_box > a{height: 15.625rem;}
                }
                @media all and (max-width: 1024px) { 
                    .review_item_box > a{height: 13.625rem;}
                }
                @media all and (max-width: 960px) { 
                    .review_item_box > a{height:auto;}
                    
                    #bo_sch{flex-direction:column; justify-content:center;}
                    .s62_bna_info{display:none; /*width:100%; margin:5rem 0 0; padding:1.5rem 0rem;*/}
                    #bo_sch form{width:100%;}
                    .review_ba_img > img{height:100%;}
                }
                @media all and (max-width: 800px) { 
                    .review_item_box > a{height:auto;}
                }
                @media all and (max-width: 480px) { 
                    .sub_cont_wrap.s62_c01_wrap{padding:6rem 0;}
                    .review_item_box > a{ 
                        transition: none; 
                        -webkit-transition: none; 
                        -moz-transition: none; 
                        -ms-transition: none; 
                        -o-transition: none;
                    }
                    .review_item_box > a:hover{border:none; }
                    
                    #bo_sch form{height:35px !important;}
                    #sfl{width:55px; height:35px; font-size:1rem !important; padding:5px 5px; background-size: 9px;}
                    #bo_sch input{height:35px;}
                    
                    
                }
                @media all and (max-width: 434px) { 
                    
                }
                @media all and (max-width: 418px) { 
                    
                }
                @media all and (max-width: 400px) { 
                    
                }
                @media all and (max-width: 380px) { 
                    
                }
                @media all and (max-width: 360px) { 
                    
                }
            </style>
            
            <div class="s62_bna_info">
                <div class="text_box s62_bna_info_text reveal fade-up delay_200">
                    <i class="check_icon2"></i>
                    <p class="txt01 c-w fz_14 lh_16 kopubworlddotum normal pc_cont_480">
                        모든 치료사례 전후사진은 환자분의 동의하에 촬영되었습니다. <br>
                        모든사진은 동일 환자분의 전후모습을 촬영하였으며, 사진의 밝기조절 외에 임의 수정이 없음을 알려드립니다. <br>
                        모든 치료는 부작용의 우려가 있기때문에 의사와의 충분한 상담후에 치료가 진행됩니다.
                    </p>
                    <p class="txt01 c-w fz_14 lh_16 kopubworlddotum normal m_cont_480">
                        모든 치료사례 전후사진은 환자분의 동의하에 촬영되었습니다. <br>
                        모든사진은 동일 환자분의 전후모습을 촬영하였으며, 사진의 밝기조절 외에 <br>
                        임의 수정이 없음을 알려드립니다. 모든 치료는 부작용의 우려가 있기때문에 <br>
                        의사와의 충분한 상담후에 치료가 진행됩니다.
                    </p>
                </div>
            </div>
            
            <!-- 페이지 -->
            <div class="flex_row jc_center center">
            <?php echo $write_pages; ?>
            </div>
            <!-- 페이지 -->
            <!--
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
                            
                            <?php if ($write_href) { ?><a href="<?php echo $write_href ?>#href_id" class="in_write"><p class="list_btn nanumgothic normal ta_c ls_p2">글쓰기</p></a><?php } ?>
                        <?php } ?>
                    <?php } ?>
                    </div>
                </div>
            </div>
            -->
        </form>
        
    </article>
</main>
<!-- //main -->



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
