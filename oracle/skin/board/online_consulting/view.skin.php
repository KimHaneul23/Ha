<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
?>

<script src="<?php echo G5_JS_URL; ?>/viewimageresize.js"></script>
<!-- <div id="bo_title">
	<?php echo $board['bo_subject'] ?>
</div> -->
<!-- 게시판 카테고리 시작 { -->
<?php if ($is_category) { ?>
<nav id="bo_cate">
	<ul id="bo_cate_ul">
		<?php echo $category_option ?>
	</ul>
</nav>
<?php } ?>
<!-- } 게시판 카테고리 끝 -->
<div class="bo_fx"></div>
<!-- 게시물 읽기 시작 { -->
<article id="bo_v">
	<div class="bbs_head02 bbs_wrap">
		<table>
			<tbody>
				<tr>
					<th scope="row">제목</th>
					<td colspan="5"><?php echo cut_str(get_text($view['wr_subject']), 70); // 글제목 출력 ?></td>
				</tr>
				<tr>
					<?php if($is_admin) { ?>
					<th scope="row">분류</th>
					<td class="td_half"><?php echo $view['ca_name']; ?></td>
					<th scope="row">조회수</th>
					<td><?php echo number_format($view['wr_hit']) ?></td>
					<th scope="row">디바이스</th>
					<td>
						<?php 
						if ($view['wr_10'] == 'mobile') { 
							echo "모바일";
						} else {
							echo "PC";
						}
						?>
					</td>
					<?php } else { ?>
					<th scope="row">분류</th>
					<td class="td_half"><?php echo $view['ca_name']; ?></td>
					<th scope="row">조회수</th>
					<td class="td_half"><?php echo number_format($view['wr_hit']) ?></td>
					<?php } ?>
				</tr>
				<tr>
					<th scope="row">답변상태</th>
					<td class="td_half">
						<?php 
						if($view['wr_7'] == '미답변'){
							echo "<font style='color:#fe1266'>".$view['wr_7']."</font>";
						} else {
							echo $view['wr_7'];
						}
						?>
					</td>
					<th scope="row">이름</th>
					<td class="td_half" colspan="3"><?php echo $view['wr_name'] ?></td>
				</tr>
				<?php if($is_admin) { ?>
					<?php $profile = get_member("$view[mb_id]"); ?>
				<tr>
					<th scope="row">핸드폰</th>
					<td class="td_half"><?php echo $view['wr_2']."-".$view['wr_3']."-".$view['wr_4']; ?></td>
					<th scope="row">이메일</th>
					<td class="td_half" colspan="3"><?php echo $view['wr_13']."@".$view['wr_5']; ?></td>
				</tr>
				<?php } ?>
				<tr>
					<th scope="row">내용</th>
					<td colspan="5" class="td_content">
						<?php
						// 파일 출력
						$v_img_count = count($view['file']);
						if($v_img_count) {
							echo "<div id=\"bo_v_img\">\n";

							for ($i=0; $i<=count($view['file']); $i++) {
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
					</td>
				</tr>
				<?php if($view['wr_9'] != null || $view['wr_9'] != "") {?>
				<tr>
					<th scope="row">답변</th>
					<td colspan="5" class="td_content"><?php echo nl2br($view['wr_9']);?></td>
				</tr>
				<?php } ?>
				<?php
				if ($view['file']['count']) {
					$cnt = 0;
					for ($i=0; $i<count($view['file']); $i++) {
						$cnt++;
					}
				}
				?>

				<?php if($cnt) { ?>
				<!-- 첨부파일 시작 { -->
				<tr>
					<th scope="row">첨부파일</th>
					<td colspan="5">
					<?php
					// 가변 파일
					for ($i=0; $i<count($view['file']); $i++) {
						if (isset($view['file'][$i]['source']) && $view['file'][$i]['source']) {
					 ?>
						<a href="<?php echo $view['file'][$i]['href'];  ?>" class="view_file_download">
							<img src="<?php echo $board_skin_url ?>/img/icon_file.gif" alt="첨부">
							<strong><?php echo $view['file'][$i]['source'] ?></strong>
							<?php echo $view['file'][$i]['content'] ?> (<?php echo $view['file'][$i]['size'] ?>)
						</a>
						<!--
						<span class="bo_v_file_cnt"><?php echo $view['file'][$i]['download'] ?>회 다운로드</span>
						<span>DATE : <?php echo $view['file'][$i]['datetime'] ?></span>
						-->
					<?php
						}
					}
					?>
					</td>
				</tr>
				<!-- } 첨부파일 끝 -->
				<?php } ?>
			</tbody>
		</table>
	</div>
    <?php
    // 코멘트 입출력
    //include_once(G5_BBS_PATH.'/view_comment.php');
    ?>

    <!-- 링크 버튼 시작 { -->
    <div id="bo_v_top">
        <?php
        ob_start();
         ?>
        <?php if ($prev_href || $next_href) { ?>
		<!--
        <ul class="bo_v_nb">
            <?php if ($prev_href) { ?><li><a href="<?php echo $prev_href ?>" class="btn_b01">이전글</a></li><?php } ?>
            <?php if ($next_href) { ?><li><a href="<?php echo $next_href ?>" class="btn_b01">다음글</a></li><?php } ?>
        </ul>
		-->
        <?php } ?>

        <ul class="bo_v_com">
            
			<!--
            <?php if ($copy_href) { ?><li><a href="<?php echo $copy_href ?>" class="btn_admin" onclick="board_move(this.href); return false;">복사</a></li><?php } ?>
            <?php if ($move_href) { ?><li><a href="<?php echo $move_href ?>" class="btn_admin" onclick="board_move(this.href); return false;">이동</a></li><?php } ?>
			-->
            <?php if ($search_href) { ?><li><a href="<?php echo $search_href ?>" class="btn_b01">검색</a></li><?php } ?>
            <?php if ($admin_href) { ?><li><a href="<?php echo $admin_href ?>"><img src="<?php echo G5_URL ?>/img/list_admin.png" alt="관리자"/></a></li><?php } ?>
            <?php if ($reply_href) { ?><li><a href="<?php echo $reply_href ?>"><img src="<?php echo G5_URL ?>/img/list_reply.png" alt="답변"/></a></li><?php } ?>
			<?php if ($update_href) { ?><li><a href="<?php echo $update_href ?>"><img src="<?php echo G5_URL ?>/img/list_modify.png" alt="수정"/></a></li><?php } ?>
            <?php if ($delete_href) { ?><li><a href="<?php echo $delete_href ?>" onclick="del(this.href); return false;"><img src="<?php echo G5_URL ?>/img/list_delete.png" alt="삭제"/></a></li><?php } ?>
			<!--
			<?php if ($write_href) { ?><li><a href="<?php echo $write_href ?>"><img src="<?php echo G5_URL ?>/img/list_write2.png" alt="상담하기"/></a></li><?php } ?>
			-->
			<li><a href="<?php echo $list_href ?>"><img src="<?php echo G5_URL ?>/img/list_list.png" alt="목록"/></a></li>
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