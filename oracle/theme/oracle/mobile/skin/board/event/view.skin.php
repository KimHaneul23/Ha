<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/autoptimize_bbs.css">', 0);
?>

<script src="<?php echo G5_JS_URL; ?>/viewimageresize.js"></script>


<main id="content">
    <article class="sub_content01" id="startContent">
        <div id="href_id"></div>
        <div class="sub_top_view sub1_5_top_view">
            <div class="sub_top_view_bg sub1_5_top_view_bg"></div>
            <div class="sub_top_view_text_wrap sub1_5_top_view_text_wrap ta_c">
                <div class="sub_top_view_text01 sub1_5_top_view_text01 m_20">
                    <p class="fz_20 lh_14 ls_2 normal sub_text_ani ta_c">
                        인천오라클 특별함
                    </p>
                </div>
                <div class="sub_top_view_text02 sub1_5_top_view_text02">
                    <p class="fz_35 lh_14 ls_2 ta_c nanummyeongjo medium sub_text_ani">
                        공지사항 / 이벤트
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

    <article class="sub_cont02 sub1_5_cont02 pd_60" id="notice_event">
        <div class="sub1_5_notice_event_list">

<style>
.sv_member {color:#000 !important;}
</style>

<script>
    $(document).ready(function(){
        var window_width = $(window).width();
        if (window_width <= 480) {
            $('.ht-inner').addClass('sub_header');
        } else {
            $('.main-header').removeClass('color_change');
            $('.ht-inner').removeClass('sub_header');
        }
    });
    
    $(function() {
        var location = document.querySelector("#notice_event").offsetTop;
        window.scrollTo({top:location - 100, behavior:'smooth'});
    }); 
</script>


<!-- 게시물 읽기 시작 { -->
<article id="bo_v" style="width:<?php echo $width; ?>">
    <header>
        <h1 id="bo_v_title" class="flex_row fw fd_c jc_center al_fs">
            <?php if ($category_name == '공지사항') { ?>
            <div class="notice_text fz_22 ls_2 lh_16 medium m_5">
                <span class="notice_text01">
                    <?php 
                    echo $view['ca_name']; // 분류 출력 끝
                    ?>
                </span>&nbsp;|&nbsp;
                <span class="notice_text02">
                    <?php 
                    echo cut_str(get_text($view['wr_subject']), 70); // 글제목 출력
                    ?>
                </span>
            </div>
            <div class="fz_14 ls_2 lh_14 m_5" style="color:#7b7b7b;">
                지점명 : 
                <?php if($view['wr_5'] == '구월점' && $view['wr_6'] == ''){ ?>
                    <?php echo $view['wr_5'] ?>
                <?php } else if($view['wr_5'] == '' && $view['wr_6'] == '송도점'){ ?>
                    <?php echo $view['wr_6'] ?>
                <?php } else if($view['wr_5'] == '구월점' && $view['wr_6'] == '송도점'){ ?>
                    <?php echo $view['wr_5'] ?>, <?php echo $view['wr_6'] ?>   
                <?php } ?>
            </div>
            <div class="fz_14 ls_2 lh_14" style="color:#7b7b7b;">20<?php echo date("y-m-d", strtotime($view['wr_datetime'])) ?></div>
            <?php } else if ($category_name == '이벤트') { ?>
            <div class="event_text fz_22 ls_2 lh_16 medium m_5">
                <span class="event_text01">
                    <?php 
                    echo $view['ca_name']; // 분류 출력 끝
                    ?>
                </span>&nbsp;|&nbsp;
                <span class="event_text02">
                    <?php 
                    echo cut_str(get_text($view['wr_subject']), 70); // 글제목 출력
                    ?>
                </span>
            </div>
            <div class="fz_14 ls_2 lh_14 m_5" style="color:#7b7b7b;">
                지점명 : 
                <?php if($view['wr_5'] == '구월점' && $view['wr_6'] == ''){ ?>
                    <?php echo $view['wr_5'] ?>
                <?php } else if($view['wr_5'] == '' && $view['wr_6'] == '송도점'){ ?>
                    <?php echo $view['wr_6'] ?>
                <?php } else if($view['wr_5'] == '구월점' && $view['wr_6'] == '송도점'){ ?>
                    <?php echo $view['wr_5'] ?>, <?php echo $view['wr_6'] ?>   
                <?php } ?>
            </div>
            <div class="fz_14 ls_2 lh_14" style="color:#7b7b7b;"><?php echo $view['wr_2'] ?> ~ <?php echo $view['wr_3'] ?></div>
            <?php } ?>
        </h1>
    </header>
    
    <section id="bo_v_atc">
        <?php
        // 파일 출력
        $v_img_count = count($view['file']);
        if($v_img_count) {
            echo "<div id=\"bo_v_img\">\n";

            for ($i=1; $i<=count($view['file']); $i++) {
                if ($view['file'][$i]['view']) {
                    //echo $view['file'][$i]['view'];
                    echo get_view_thumbnail($view['file'][$i]['view']);
                }
            }

            echo "</div>\n";
        }
        ?>

        <!-- 본문 내용 시작 { -->
        <div id="bo_v_con"><?php echo get_view_thumbnail($view['content']); ?></div>
        <?php//echo $view['rich_content']; // {이미지:0} 과 같은 코드를 사용할 경우 ?>
        <!-- } 본문 내용 끝 -->
        
    <?php if ($prev_href || $next_href) { ?>
    <ul class="container-1280 bo_v_nb">
        <?php if ($prev_href) { ?>
        <li class="btn_prv">
            <dd class="elc_01"><span class="nb_tit fz_14 normal"><i class="fa fa-chevron-up" aria-hidden="true"></i> 다음글</span></dd>
            <dd class="elc_02 fz_14 notosans normal lh_16"><a href="<?php echo $prev_href ?>"><?php echo $prev_wr_subject;?></a></dd>
            <!--<dd class="elc_03"><span class="nb_date"><?php echo str_replace('-', '.', substr($prev_wr_date, '2', '8')); ?></span></dd>-->
            <div style="clear:both"></div>
        </li>
        <?php } ?>

        <?php if ($next_href) { ?>
        <li class="btn_next">
            <dd class="elc_01"><span class="nb_tit fz_14 normal"><i class="fa fa-chevron-down" aria-hidden="true"></i> 이전글</span></dd>
            <dd class="elc_02 fz_14 notosans normal lh_16"><a href="<?php echo $next_href ?>"><?php echo $next_wr_subject;?></a></dd>
            <!--<dd class="elc_03"><span class="nb_date"><?php echo str_replace('-', '.', substr($next_wr_date, '2', '8')); ?></span></dd>-->
            <div style="clear:both"></div>
        </li>
        <?php } ?>
    </ul>
    <?php } ?>
    
    
    
    <!-- 링크 버튼 시작 { -->
    <div class="container-1280" id="bo_v_top">
        <?php
        ob_start();
        ?>
        
        <ul class="bo_v_com">
            
            <?php if ($admin_href) { ?><li><a href="<?php echo $admin_href ?>"><p class="list_btn list_btn_admin nanumgothic normal ta_c ls_p2">관리자</p></a></li><?php } ?>
			<?php if ($update_href) { ?><li><a href="<?php echo $update_href ?>"><p class="list_btn nanumgothic normal ta_c ls_p2">수정</p></a></li><?php } ?>
            <?php if ($delete_href) { ?><li><a href="<?php echo $delete_href ?>" onclick="del(this.href); return false;"><p class="list_btn nanumgothic normal ta_c ls_p2">삭제</p></a></li><?php } ?>
			
			<?php if ($write_href) { ?><li><a href="<?php echo $write_href ?>#href_id"><p class="list_btn nanumgothic normal ta_c ls_p2">글쓰기</p></a></li><?php } ?>
			
			<li><a href="<?php echo G5_THEME_URL ?>/sub/sub1_5.php#href_id"><p class="list_btn nanumgothic normal ta_c ls_p2">목록</p></a></li>
        </ul>
        <?php
        $link_buttons = ob_get_contents();
        ob_end_flush();
        ?>
    </div>
    <!-- } 링크 버튼 끝 -->

</article>
<!-- } 게시판 읽기 끝 -->

<script>
<?php if ($board['bo_download_point'] < 0) { ?>
$(function() {
    $("a.view_file_download").click(function() {
        if(!g5_is_member) {
            alert("다운로드 권한이 없습니다.\n회원이시라면 로그인 후 이용해 보십시오.");
            return false;
        }

        var msg = "파일을 다운로드 하시면 포인트가 차감(<?php echo number_format($board['bo_download_point']) ?>점)됩니다.\n\n포인트는 게시물당 한번만 차감되며 다음에 다시 다운로드 하셔도 중복하여 차감하지 않습니다.\n\n그래도 다운로드 하시겠습니까?";

        if(confirm(msg)) {
            var href = $(this).attr("href")+"&js=on";
            $(this).attr("href", href);

            return true;
        } else {
            return false;
        }
    });
});
<?php } ?>

function board_move(href)
{
    window.open(href, "boardmove", "left=50, top=50, width=500, height=550, scrollbars=1");
}
</script>

<script>
$(function() {
    $("a.view_image").click(function() {
        window.open(this.href, "large_image", "location=yes,links=no,toolbar=no,top=10,left=10,width=10,height=10,resizable=yes,scrollbars=no,status=no");
        return false;
    });

    // 추천, 비추천
    $("#good_button, #nogood_button").click(function() {
        var $tx;
        if(this.id == "good_button")
            $tx = $("#bo_v_act_good");
        else
            $tx = $("#bo_v_act_nogood");

        excute_good(this.href, $(this), $tx);
        return false;
    });

    // 이미지 리사이즈
    $("#bo_v_atc").viewimageresize();
});

function excute_good(href, $el, $tx)
{
    $.post(
        href,
        { js: "on" },
        function(data) {
            if(data.error) {
                alert(data.error);
                return false;
            }

            if(data.count) {
                $el.find("strong").text(number_format(String(data.count)));
                if($tx.attr("id").search("nogood") > -1) {
                    $tx.text("이 글을 비추천하셨습니다.");
                    $tx.fadeIn(200).delay(2500).fadeOut(200);
                } else {
                    $tx.text("이 글을 추천하셨습니다.");
                    $tx.fadeIn(200).delay(2500).fadeOut(200);
                }
            }
        }, "json"
    );
}
</script>
<!-- } 게시글 읽기 끝 -->




</div>
</article>
</main>
<!-- //main -->
<?php
include_once(G5_PATH.'/tail.php');
?>