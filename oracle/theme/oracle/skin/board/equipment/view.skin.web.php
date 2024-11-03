<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
include_once(G5_PATH.'/head.php');
?>

<script src="<?php echo G5_JS_URL; ?>/viewimageresize.js"></script>

<main id="contents">
	<!-- S : sub03-02-top -->
	<section class="sub-top-area">
		<article class="sub-top-view sub03-02-top-view">
			<div class="sub-top-view-bg sub03-02-top-view-bg"></div>
			<div class="txtbox">
				<div class="sub-top-txt-wrap"><h3 class="sub-top-txt-ani">힐하우스 피부과</h3></div>
				<div class="sub-top-txt-wrap"><h2 class="sub-top-txt-ani"><? if ($category_name) { echo $view['ca_name']; } ?></h2></div>
				<div class="sub-top-txt-wrap"><p class="sub-top-txt-ani"><?=cut_str(get_text($view['wr_subject']), 70); ?></p></div>
			</div>
			<div class="mouse-wrap">
				<div class="mousedown">
					<span class="wheel"></span>
				</div>
				<span class="arrow arrow-01"></span>
				<span class="arrow arrow-02"></span>
			</div>
		</article>
	</section>
	<!-- E : sub03-02-top -->
	
	<!-- S : sub03-02-cont02 -->
	<section class="section sub03-02-cont02">
		<article class="container-sm">
			<?php include_once(G5_SNS_PATH."/view.sns.skin.php"); ?>
	        <?php if ($scrap_href) { ?><a href="<?php echo $scrap_href;  ?>" target="_blank" class="btn btn_b03" onclick="win_scrap(this.href); return false;"><i class="fa fa-bookmark" aria-hidden="true"></i> 스크랩</a><?php } ?>
			<div class="cont-wrap">
				<?php
				// 파일 출력
				$v_img_count = count($view['file']);
				if($v_img_count) {
					echo "<div id=\"bo_v_img\">\n";

					foreach($view['file'] as $view_file) {
						echo get_file_thumbnail($view_file);
					}

					echo "</div>\n";
				}
				 ?>

				<!-- 본문 내용 시작 { -->
				<div id="bo_v_con"><?php echo get_view_thumbnail($view['content']); ?></div>
				<?php //echo $view['rich_content']; // {이미지:0} 과 같은 코드를 사용할 경우 ?>
				<!-- } 본문 내용 끝 -->
			</div>
			<?php if ($prev_href || $next_href) { ?>
			<ul class="bo_v_nb">
				<?php if ($prev_href) { ?><li class="btn_prv"><span class="nb_tit"><i class="fa fa-chevron-up" aria-hidden="true"></i> 이전글</span><a href="<?php echo $prev_href ?>"><?php echo $prev_wr_subject;?></a> <span class="nb_date"><?php echo str_replace('-', '.', substr($prev_wr_date, '2', '8')); ?></span></li><?php } ?>
				<?php if ($next_href) { ?><li class="btn_next"><span class="nb_tit"><i class="fa fa-chevron-down" aria-hidden="true"></i> 다음글</span><a href="<?php echo $next_href ?>"><?php echo $next_wr_subject;?></a>  <span class="nb_date"><?php echo str_replace('-', '.', substr($next_wr_date, '2', '8')); ?></span></li><?php } ?>
			</ul>
			<?php } ?>
		</article>
	</section>
	<!-- E : sub03-02-cont02 -->
</main>

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

<?php
include_once(G5_PATH.'/tail.php');