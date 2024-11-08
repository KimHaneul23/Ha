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
                    <p class="fz_35 lh_14 ls_2 ta_c nanummyeongjo light sub_text_ani">
                        공지사항 / 이벤트
                    </p>
                </div>
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
        $('.main-header').removeClass('color_change');
        $('.ht-inner').removeClass('sub_header');
    });
    
    $(function() {
        var location = document.querySelector("#notice_event").offsetTop;
        window.scrollTo({top:location - 100, behavior:'smooth'});
    }); 
</script>


<!-- 게시물 읽기 시작 { -->
<article id="bo_v" style="width:<?php echo $width; ?>">
    <header>
        <h1 id="bo_v_title">
            <?php
            if ($category_name) echo $view['ca_name'].' | '; // 분류 출력 끝
            echo cut_str(get_text($view['wr_subject']), 70); // 글제목 출력
            ?>
        </h1>
    </header>
    
    <section id="bo_v_info">
        작성자 <strong><?php echo $view['name'] ?></strong>
        <span class="sound_only">작성일</span><strong><?php echo date("y-m-d H:i", strtotime($view['wr_datetime'])) ?></strong>
        <div class="fz_14 ls_2 lh_14" style="color:#7b7b7b;"><?php echo $view['wr_2'] ?> ~ <?php echo $view['wr_3'] ?></div>
    </section>
    
    <section id="bo_v_atc">
        <h2 id="bo_v_atc_title">본문</h2>

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
        
    <?php
    //include_once(G5_SNS_PATH."/view.sns.skin.php");
    ?>

    <?php
    // 코멘트 입출력
    //include_once('./view_comment.php');
    ?>

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
    
    <?php if($is_admin) { ?>
    <form name="update_date" action="<?php echo $board_skin_url; ?>/update_num.php" method="post" style="padding:0; margin:0;">
    <input type="hidden" name="bo_table" value="<?php echo $bo_table; ?>">
    <input type="hidden" name="page" value="<?php echo $page; ?>">
    <input type="hidden" name="wr_id" value="<?php echo $wr_id; ?>">
    <div class="tbl_frm01 tbl_wrap">
        <table>
            <tbody>
                <tr>
                    <th style="width:100px; vertical-align:middle;"><p class="fz_14 normal lh_16 ls_0 notosans">글 순서변경</p></th>
                    <td><p class="fz_14 normal lh_16 ls_0 notosans">목록에서 이동하고자 하는 위치의 번호 <input type="text" name="insert_num" style="width:30px;"> 게시글의 뒤로 <input type="submit" value="이동" class="btn_list">합니다.</p></td>
                </tr>
            </tbody>
        </table>
    </div>
    </form>
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