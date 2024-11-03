<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// 웹사이트 타이틀
$g5['title'] = 'YOUTUBE';

// 선택옵션으로 인해 셀합치기가 가변적으로 변함
$colspan = 4;

if ($is_checkbox) $colspan++;
if ($is_good) $colspan++;
if ($is_nogood) $colspan++;

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/autoptimize_bbs.css">', 0);
?>
<main id="content">
    
    <article class="sub_content01 sub6_2_content01 sub6_2_content01_list" id="startContent">
        <div class="sub_top_cont_wrap">
            <div class="sub_top_view_bg sub6_2_top_view_bg"></div>
            <div class="sub_top_text sub_titlebox ta_c">
                <p class="txt01 reveal fade-up delay_200 c-w fz_19 ls_p5 lh_16 normal">
                    건강에 도움이 되는 <br class="m_cont_480">유익한 정보를 알려드립니다.
                </p>
                <p class="txt02 reveal fade-up delay_400 c-w fz_45 ls_p2 lh_16 notoserif medium">
                    바노바기 웰니스 유튜브
                </p>
                <p class="txt03 reveal fade-up delay_600 c-w fz_20 ls_p5 lh_16 sortsmillgoudy normal">
                    YOUTUBE
                </p>
            </div>
        </div>
    </article>
    
    <article class="sub_cont_wrap sub6_2_cont01_wrap container-1200 sub6_2_cont01_wrap_list">
        
        <!-- 게시판 카테고리 시작 { -->
        <?php if ($is_category) { ?>
        <div class="local_ov02 local_ov">
            <?php echo $category_option ?>
        </div>
        <?php } ?>
        <!-- } 게시판 카테고리 끝 -->

        <form name="fboardlist"  id="fboardlist" action="<?php echo G5_BBS_URL; ?>/board_list_update.php" onsubmit="return fboardlist_submit(this);" method="post">
            <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
            <input type="hidden" name="sfl" value="<?php echo $sfl ?>">
            <input type="hidden" name="stx" value="<?php echo $stx ?>">
            <input type="hidden" name="spt" value="<?php echo $spt ?>">
            <input type="hidden" name="sst" value="<?php echo $sst ?>">
            <input type="hidden" name="sod" value="<?php echo $sod ?>">
            <input type="hidden" name="page" value="<?php echo $page ?>">
            <input type="hidden" name="sw" value="">
            
            <div class="list_view_wrap">
                <div>
                    <h2 id="bo_v_title">
                        <?php if ($category_name) { ?>
                        <span class="bo_v_cate"><?php echo $list[0]['ca_name']; // 분류 출력 끝 ?></span> 
                        <?php } ?>
                        <span class="bo_v_tit ta_c fz_22 normal">
                        <?php
                        echo cut_str(get_text($list[0]['wr_subject']), 70); // 글제목 출력
                        ?></span>
                    </h2>
                </div>
                
                <div id="bo_v_atc">
                    
                    <!-- 본문 내용 시작 { -->
                    <div class="youtube_box">
                        <div class="yt-video-area">
                            <div class="play-area">
                                <iframe src="https://www.youtube.com/embed/<?php echo $list[0]['wr_1'] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                            </div>
                        </div>
                    </div>
                    <div id="bo_v_con" class="container-1200 ta_c">
                        <?php echo $list[0]['wr_content']; ?>
                    </div>
                    <?php //echo $view['rich_content']; // {이미지:0} 과 같은 코드를 사용할 경우 ?>
                    <!-- } 본문 내용 끝 -->
                    
                </div>
            </div>
            
            <div class="section list_box_wrap">
                <div class="">

                    <div class="portfolio__grid hover--one three--columns flex_row fw jc_fs al_fs">
                        <div class="sizer" style="width:0;"></div>

                        <?php for ($i=0; $i<count($list); $i++) {
                            
                        ?>
                        <div class="item">
                            <div class="item_wrap">
                                <?php $ytSrcLink = 'https://www.youtube.com/watch?v='.$list[$i]['wr_1'] ?>
                                <a href="<?php echo $list[$i]['href'] ?>#href_id">
                                    <?php
                                    if ($list[$i]['is_notice']) { // 공지사항  ?>
                                        <span class="is_notice" style="<?php echo $line_height_style; ?>">공지</span>
                                    <?php } else {
                                        $thumb = get_list_thumbnail($board['bo_table'], $list[$i]['wr_id'], $board['bo_gallery_width'], $board['bo_gallery_height'], false, true);

                                        if($thumb['src']) {
                                            $img_content = '<img src="'.$thumb['ori'].'" alt="'.$thumb['alt'].'" style="height:100%;">';
                                        } else if($list[$i]['wr_1']) {
                                            $img_content = '<img src="https://img.youtube.com/vi/'.$list[$i]['wr_1'].'/maxresdefault.jpg" style="width:100%;">';
                                        } else {
                                            $img_content = '<img style="'.$line_height_style.'" src="https://ptldesign.cafe24.com/bnbgwellness/theme/bnbgwellness/img/noimage.png" alt="no image"">';
                                        }

                                        echo run_replace('thumb_image_tag', $img_content, $thumb);
                                    }
                                    ?>

                                    <?php echo ( isset($list[$i]['icon_new']) && !empty($list[$i]['icon_new']) ) ? "<span class='circle'>new</span>" : "";?>
                                </a>

                                <div style="min-height:60px; color:#333;" class="txt">
                                    <a href="<?php echo $list[$i]['href'] ?>#href_id">
                                        <div class="flex_row jc_center al_fs">
                                            <div class="subject_text"><?php echo $list[$i]['subject'] ?></div>
                                        </div>
                                    </a>
                                </div>

                                <!-- <?php if ($is_checkbox) { ?>
                                <div class="txt" style="font-size:9px; color:#999; letter-spacing:0px; float:right; line-height:25px; text-align:right;">
                                    <input type="checkbox" name="chk_wr_id[]" value="<?php echo $list[$i]['wr_id'] ?>" id="chk_wr_id_<?php echo $i ?>">
                                </div>
                                <?php } ?>
                                <div style="clear:both;"></div> -->
                            </div>
                        </div>
                        <?php } ?>
                        <?php if (count($list) == 0) { echo '<div class="item" style="width:100%; text-align:center;"><h3 class="mt-5 mb-2">등록된 게시물이 없습니다.</h3></div>'; } ?>
                    </div>
                </div>
            </div>
            
            <!-- 페이지 -->
            <?php echo $write_pages; ?>
            <!-- 페이지 -->
            
            <div class="youtube_more_btn">
                <a href="https://www.youtube.com/@BNBG_wellness" target="_blank">
                    <p class="txt01 c-w fz_16 ls_p5 lh_16 normal ta_c">
                        <i class="youtube_icon2"></i> 유튜브 바로가기
                    </p>
                </a>
            </div>
        </form>

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
                f.action = g5_url+"/bbs/board_list_update.php";
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
            f.action = g5_url+"/bbs/move.php";
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

   
    </article>
</main>