<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');
include_once(G5_PATH.'/lib/visit.lib.php');

// 웹사이트 타이틀
$g5['title'] = '온라인상담';

include_once(G5_PATH.'/head.php');
include_once(G5_PLUGIN_PATH.'/jquery-ui/datepicker.php');
// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
//add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
$listall = '<a href="'.$_SERVER['SCRIPT_NAME'].'">처음</a>'; //페이지 처음으로 (초기화용도)
$sql_search = '';

if(isset($sfl) && $sfl && !in_array($sfl, array('vi_ip','vi_date','vi_time','vi_referer','vi_agent','vi_browser','vi_os','vi_device')) ) {
    $sfl = '';
}
?>

<script src="<?php echo G5_JS_URL; ?>/viewimageresize.js"></script>
<link rel="stylesheet" href="<?php echo G5_THEME_URL;?>/skin/board/online/style.css">

<script>
    $(document).ready(function(){
        $('.main-header').removeClass('color_change');
        $('.ht-inner').removeClass('sub_header');
    });
    
    $(function() {
        var location = document.querySelector("#href_id").offsetTop;
        window.scrollTo({top:location - 100, behavior:'smooth'});
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
<article id="bo_w">
	<div class="bbs_head02 bbs_wrap" style="margin:0;">
		<table>
			<tbody>
				<tr>
					<th scope="row">제목</th>
					<td colspan="5">
					    <?php echo cut_str(get_text($view['wr_subject']), 70); // 글제목 출력 ?>
					    <?php if($is_admin) { ?>
					    <!--&emsp;<div class="online_visit_btn">유입정보 조회</div>-->
					    <?php } ?>
					</td>
				</tr>
				
				<?php if($is_admin) { ?>
				<tr class="online_visit">
				<td colspan="5" style="padding: 16px 0;">
				<table id="online_table">
                    <colgroup>
                        <col width = "15%">
                        <col width = "15%">
                        <col width = "50%">
                        <col width = "20%">
                    </colgroup>
                    <tbody id="online_table_body">
                        <tr>
                            <td colspan="4" style="background: #e6e6e6; border-bottom: 1px solid #d5d5d5;">
                                <div style="padding-left:6px; font-size:12px; color:#4f4f4f;">
                                    게시자 유입정보 (관리자만 보입니다)
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="col" style="text-align:center; font-size:12px; border-right:1px solid #d5d5d5;">유입매체</th>
                            <th scope="col" style="text-align:center; font-size:12px; border-right:1px solid #d5d5d5;">일시</th>
                            <th scope="col" style="text-align:center; font-size:12px; border-right:1px solid #d5d5d5;">유입경로</th>
                            <th scope="col" style="text-align:center; font-size:12px;">브라우저</th>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <div style="padding-left:6px; font-size:12px; color:#4f4f4f;">
                                    게시작성 일자의 게시자 유입정보 (최근 10개)
                                </div>
                            </td>
                        </tr>

                        <?php
                        $sql_common = " from {$g5['visit_table']} ";
                        if ($sfl) {
                            if($sfl=='vi_ip' || $sfl=='vi_date'){
                                $sql_search = " where $sfl like '$stx%' ";
                            }else{
                                $sql_search = " where $sfl like '%$stx%' ";
                            }
                        }
                        $sql = " select count(*) as cnt
                                    {$sql_common}
                                    {$sql_search} ";
                        $row = sql_fetch($sql);
                        $total_count = $row['cnt'];

                        $rows = $config['cf_page_rows'];
                        $total_page  = ceil($total_count  * 10 / $rows);  // 전체 페이지 계산
                        if ($page < 1) $page = 1; // 페이지가 없으면 첫 페이지 (1 페이지)
                        $from_record = ($page - 1) * $rows; // 시작 열을 구함

                        $sql = " select *
                                    {$sql_common}
                                    {$sql_search} 
                                    order by vi_id desc ";
                        $result = sql_query($sql);

                        for ($i=0; $row=sql_fetch_array($result); $i++) {

                            $brow = $row['vi_browser'];
                            if(!$brow)
                                $brow = get_brow($row['vi_agent']);

                            $os = $row['vi_os'];
                            if(!$os)
                                $os = get_os($row['vi_agent']);

                            $device = $row['vi_device'];

                            $link = "";
                            $referer = "";
                            $title = "";
                            if ($row['vi_referer']) {

                                $referer = get_text(cut_str($row['vi_referer'], 255, ""));
                                $referer = urldecode($referer);

                                if (!is_utf8($referer)) {
                                    $referer = iconv('euc-kr', 'utf-8', $referer);
                                }

                                $title = str_replace(array("<", ">"), array("&lt;", "&gt;"), $referer);
                                $link = '<a href="'.get_text($row['vi_referer']).'" target="_blank" title="'.$title.'">';
                            }
                            
                            if($row['vi_referer'] == '') $referer_domain = '기타/직접';
                            else if(strpos($row['vi_referer'], 'search.yahoo.com') !== false) $referer_domain = '야후/검색';
                            else if(strpos($row['vi_referer'], 'br.nate.com') !== false) $referer_domain = '네이트/링크';
                            else if(strpos($row['vi_referer'], 'm.search.naver.com') !== false) $referer_domain = '네이버/검색(모바일)';
                            else if(strpos($row['vi_referer'], 'm.ad.search.naver.com') !== false) $referer_domain = '네이버/광고(모바일)';
                            else if(strpos($row['vi_referer'], 'm.place.naver.com') !== false) $referer_domain = '네이버플레이스(모바일)';
                            else if(strpos($row['vi_referer'], 'pcmap.place.naver.com') !== false) $referer_domain = '네이버플레이스';
                            else if(strpos($row['vi_referer'], 'place.naver.com') !== false) $referer_domain = '네이버플레이스';
                            else if(strpos($row['vi_referer'], 'ad.search.naver.com') !== false) $referer_domain = '네이버/광고';
                            else if(strpos($row['vi_referer'], 'search.naver.com') !== false) $referer_domain = '네이버/검색';
                            else if(strpos($row['vi_referer'], 'cafe.naver.com') !== false) $referer_domain = '네이버/카페';
                            else if(strpos($row['vi_referer'], 'blog.naver.com') !== false) $referer_domain = '네이버/블로그';
                            else if(strpos($row['vi_referer'], 'adrc.naver.com') !== false) $referer_domain = '네이버/광고';
                            else if(strpos($row['vi_referer'], 'nid.naver.com') !== false) $referer_domain = '네이버/소셜로그인';    
                            else if(strpos($row['vi_referer'], 'm.search.daum.net') !== false) $referer_domain = '다음/검색(모바일)';
                            else if(strpos($row['vi_referer'], 'search.daum.net') !== false) $referer_domain = '다음/검색';
                            else if(strpos($row['vi_referer'], 'cafe.daum.com') !== false) $referer_domain = '다음/카페';
                            else if(strpos($row['vi_referer'], 'www.google.com') !== false) $referer_domain = '구글/검색';
                            else if(strpos($row['vi_referer'], 'www.youtube.com') !== false) $referer_domain = '유튜브/검색';
                            else $referer_domain = '기타/직접';

                            if ($is_admin == 'super')
                                $vi_ip = $row['vi_ip'];
                            else
                                $vi_ip = preg_replace("/([0-9]+).([0-9]+).([0-9]+).([0-9]+)/", G5_IP_DISPLAY, $row['vi_ip']);
                            
                            $bg = 'bg';

                        ?>
                        <?php 
                            if($vi_ip == $view['wr_ip'] && $row['vi_date'] == $view['wr_last']){ 
                        ?>
                        <tr class="<?php echo $bg; ?>">
                            <td class="td_category">
                                <?php echo $referer_domain ?>
                                <?php /*echo $vi_ip*/ ?>
                                <?php
                                /*$latest_whoip = "select * from  g5_member where mb_ip LIKE '{$vi_ip}' LIMIT 0 , 1";
                                $who = sql_fetch($latest_whoip);
                                if($who[mb_name]) {
                                    echo $who[mb_name].'['.$who[mb_id].']';
                                } else { 
                                    echo "비회원"; 
                                };*/
                                ?>
                            </td>
                            <td class="td_datetime"><?php echo $row['vi_date']; ?><br><?php echo $row['vi_time']; ?></td>
                            <td><?php echo $link.$title; ?><?php echo $link ? '</a>' : ''; ?></td>
                            <td class="td_category td_category1">
                                <?php echo $os ?> / <?php if ($view['wr_10'] == 'mobile') { 
                                    echo "모바일";
                                } else {
                                    echo "PC";
                                } ?><br>
                                <?php echo $brow ?>
                                <!--<?php 
                                /*if ($view['wr_10'] == 'mobile') { 
                                    echo "모바일";
                                } else {
                                    echo "PC";
                                }*/
                                ?>
                                 / 
                                <?php
                                    /*$u_agent = $_SERVER['HTTP_USER_AGENT'];  //  들어온사람의 브라우저를 변수 $u_agent 에 담아서
                                    if(preg_match('/Chrome/i',$u_agent)){ 
                                        echo "Chrome";
                                    }
                                    else if(preg_match('/Safari/i',$u_agent)){
                                        echo "Safari";
                                    }
                                    else if(preg_match('/Opera/i',$u_agent)){
                                        echo "Opera";
                                    }
                                    else if(preg_match('/Firefox/i',$u_agent)){
                                        echo "Firefox";
                                    }
                                    else if(preg_match('/Netscape/i',$u_agent)){
                                        echo "Netscape";
                                    }
                                    else if(preg_match('/Opera/i',$u_agent)){
                                        echo "Opera";
                                    }
                                    else {
                                        echo "Other";
                                    }*/
                                ?>-->
                            </td>
                        </tr> 
                    <?php 
                        } 
                    ?>
                    <?php } ?>
                    <script>
                        
                        //var clickEvent = (function () {
                        //    if ('ontouchstart' in document.documentElement === true) {
                        //        return 'touchstart';
                        //    } else {
                        //        return 'click';
                        //    }
                        //})(); // 클릭이벤트와 터치이벤트 토글
                        
                        //const online_visit_btn = document.querySelector('.online_visit_btn');
                        //const online_visit = document.querySelector('.online_visit');
                        
                        //const online_visit_Click = function(){
                        //    online_visit.classList.toggle('on');
                        //    
                        //    const online_table = document.getElementById('online_table_body'); // table 엘리먼트 취득
                        //    const online_table_rows = document.getElementById('online_table_body').getElementsByClassName('bg'); // table 엘리먼트 취득
                        //    const online_table_rows_len = online_table_rows.length;
                        //    console.log(online_table_rows_len);
                        //    
                        //    for(var r=0; r<=online_table_rows_len; r++){
                        //        online_table.deleteRow(12);
                        //    }
                        //}
                        //
                        //online_visit_btn.addEventListener(clickEvent, online_visit_Click);
                        
                    </script>
                    </tbody>
		        </table>
                </td>
                </tr>
                <?php } ?>
				<tr>
					<?php if($is_admin) { ?>
					<th scope="row">지점명</th>
					<td class="td_half"><?php echo $view['ca_name']; ?></td>
					<th scope="row">조회수</th>
					<td><?php echo number_format($view['wr_hit']) ?></td>
					<th scope="row">접속 기기</th>
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
					<th scope="row">지점명</th>
					<td class="td_half"><?php echo $view['ca_name']; ?></td>
					<th scope="row">조회수</th>
					<td class="td_half"><?php echo number_format($view['wr_hit']) ?></td>
					<?php } ?>
				</tr>
				<tr>
					<th scope="row">답변상태</th>
					<td class="td_half">
						<?php 
						//if($view['wr_7'] == '확인중'){
						//	echo "<font style=''>".$view['wr_7']."</font>";
						//} else {
						//	echo $view['wr_7'];
						//}
						?>
						<?php if($view['wr_comment'] >= 1) { ?>
                        <font>답변완료</font>
                        <?php } else if($view['wr_comment'] == 0){ ?>
                        <font>확인중</font>
                        <?php } ?>
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
					<td class="td_half" colspan="3"><?php echo $view['wr_1']."@".$view['wr_5']; ?></td>
				</tr>
				<?php } ?>
				<tr>
					<th scope="row">상담내용</th>
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
    include_once(G5_BBS_PATH.'/view_comment.php');
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
            <?php if ($admin_href) { ?><li><a href="<?php echo $admin_href ?>" target="_blank"><img src="<?php echo G5_URL ?>/img/list_admin.png" alt="관리자"/></a></li><?php } ?>
            
            <!--<?php if ($reply_href) { ?><li><a href="<?php echo G5_URL ?>/admin/bbs/write.php?w=u&bo_table=<?=$bo_table?>&wr_id=<?php echo $view['wr_id'] ?>" target="_blank"><img src="<?php echo G5_URL ?>/img/list_reply.png" alt="답변"/></a><input type="image" src="<?php echo G5_URL ?>/img/list_reply.png" value="답변" id="btn_submit" accesskey="s"></li><?php } ?>-->
            <?php if($is_admin) { ?>
			<!--<?php if ($update_href) { ?><li><a href="<?php echo $update_href ?>"><img src="<?php echo G5_URL ?>/img/list_reply.png" alt="답변"/></a></li><?php } ?>-->
			<?php } ?>
			<?php if ($update_href) { ?><li><a href="<?php echo $update_href ?>"><img src="<?php echo G5_URL ?>/img/list_modify.png" alt="수정"/></a></li><?php } ?>
            <?php if ($delete_href) { ?><li><a href="<?php echo $delete_href ?>" onclick="del(this.href); return false;"><img src="<?php echo G5_URL ?>/img/list_delete.png" alt="삭제"/></a></li><?php } ?>
            
			<li><a href="<?php echo G5_BBS_URL?>/board.php?bo_table=online#href_id"><img src="<?php echo G5_URL ?>/img/list_list.png" alt="목록"/></a></li>
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
    
function html_auto_br(obj)
{
	if (obj.checked) {
		result = confirm("자동 줄바꿈을 하시겠습니까?\n\n자동 줄바꿈은 게시물 내용중 줄바뀐 곳을<br>태그로 변환하는 기능입니다.");
		if (result)
			obj.value = "html2";
		else
			obj.value = "html1";
	}
	else
		obj.value = "";
}
    
function fwrite_submit(f)
{
	<?php echo $editor_js; // 에디터 사용시 자바스크립트에서 내용을 폼필드로 넣어주며 내용이 입력되었는지 검사함   ?>

	var subject = "";
	var content = "";
	$.ajax({
		url: g5_bbs_url+"/ajax.filter.php",
		type: "POST",
		data: {
			"subject": f.wr_subject.value,
			"content": f.wr_content.value
		},
		dataType: "json",
		async: false,
		cache: false,
		success: function(data, textStatus) {
			subject = data.subject;
			content = data.content;
		}
	});

	if (subject) {
		alert("제목에 금지단어('"+subject+"')가 포함되어있습니다");
		f.wr_subject.focus();
		return false;
	}

	if (content) {
		alert("내용에 금지단어('"+content+"')가 포함되어있습니다");
		if (typeof(ed_wr_content) != "undefined")
			ed_wr_content.returnFalse();
		else
			f.wr_content.focus();
		return false;
	}

	if (document.getElementById("char_count")) {
		if (char_min > 0 || char_max > 0) {
			var cnt = parseInt(check_byte("wr_content", "char_count"));
			if (char_min > 0 && char_min > cnt) {
				alert("내용은 "+char_min+"글자 이상 쓰셔야 합니다.");
				return false;
			}
			else if (char_max > 0 && char_max < cnt) {
				alert("내용은 "+char_max+"글자 이하로 쓰셔야 합니다.");
				return false;
			}
		}
	}

	
	var agree2 = document.getElementsByName("agree2");
	if (!agree2[0].checked) {
		alert("개인정보처리방침안내의 내용에 동의하셔야 회원가입 하실 수 있습니다.");
		agree2[0].focus();
		return false;
	}

	<?php echo $captcha_js; // 캡챠 사용시 자바스크립트에서 입력된 캡챠를 검사함  ?>

	document.getElementById("btn_submit").disabled = "disabled";

	return true;
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
<script src="<?=G5_URL?>/admin/js/d3.v4.min.js"></script>
<script src="<?=G5_URL?>/admin/js/moment.min.js"></script>
<script src="<?=G5_URL?>/admin/js/jquery.tablesorter.min.js"></script>

<script src="<?=G5_URL?>/admin/js/chart2.js"></script>
<script src="<?=G5_URL?>/admin/js/page.js"></script>
