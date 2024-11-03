<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
//add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
?>
<link rel="stylesheet" href="<?php echo G5_THEME_URL;?>/skin/board/online/style.css">
<style>
    .admin_title{display:none;}
    
    #autosave_wrapper > input[id=mail]{display:none;}
    #autosave_wrapper > label[for=mail]{display:none;}
    
    input[type="text"]{text-align:left !important;}
</style>
<div id="bo_title">
	<?php echo $board['bo_subject'] ?>

</div>
<!-- 게시판 카테고리 시작 { -->
<?php if ($is_category) { ?>
<nav id="bo_cate">
	<ul id="bo_cate_ul">
		<?php
		// 분류 사용 여부
//		$is_category = false;
//		$category_option = '';
//		if ($board['bo_use_category']) {
//			$is_category = true;
//			$category_href = G5_URL.'/adm/bbs/board.php?bo_table='.$bo_table;
//
//			//$category_option .= '<li';
//			$category_option .= '<li';
//			if ($sca=='')
//				$category_option .= ' id="bo_cate_on"';
//			//$category_option .= '>전체</a></li>';
//			$category_option .= '><a href="'.$category_href.'">전체</a></li>';
//
//			$categories = explode('|', $board['bo_category_list']); // 구분자가 , 로 되어 있음
//			for ($i=0; $i<count($categories); $i++) {
//				$category = trim($categories[$i]);
//				if ($category=='') continue;
//				//$category_option .= '<li><a href="'.($category_href."&amp;sca=".urlencode($category)).'"';
//				$category_option .= '<li';
//				$category_msg = '';
//				if ($category==$sca) { // 현재 선택된 카테고리라면
//					$category_option .= ' id="bo_cate_on"';
//					$category_msg = '<span class="sound_only">열린 분류 </span>';
//				} 
//				$count = count($categories) - 1;
//				if ($i == $count){
//					$category_option .= ' class="bo_cate_ul_li_last"';
//				}
//				$category_option .= '><a href="'.($category_href."&amp;sca=".urlencode($category)).'">'.$category_msg.$category.'</a></li>';
//			}
//		}
//		
//		echo $category_option;
		?>
	</ul>
</nav>
<?php } ?>
<!-- } 게시판 카테고리 끝 -->
<div class="bo_fx"></div>
<!-- 게시물 읽기 시작 { -->

<section id="bo_w">
    <!--<h2 id="container_title"><?php echo $g5['title'] ?></h2>-->

    <!-- 게시물 작성/수정 시작 { -->
    <form name="fwrite" id="fwrite" action="<?php echo $action_url ?>" onsubmit="return fwrite_submit(this);" method="post" enctype="multipart/form-data" autocomplete="off" style="width:<?php echo $width; ?>">
    <input type="hidden" name="uid" value="<?php echo get_uniqid(); ?>">
    <input type="hidden" name="w" value="<?php echo $w ?>">
    <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
    <input type="hidden" name="wr_id" value="<?php echo $wr_id ?>">
    <input type="hidden" name="sca" id="sca" value="<?php echo $sca ?>">
    <input type="hidden" name="sfl" value="<?php echo $sfl ?>">
    <input type="hidden" name="stx" value="<?php echo $stx ?>">
    <input type="hidden" name="spt" value="<?php echo $spt ?>">
    <input type="hidden" name="sst" value="<?php echo $sst ?>">
    <input type="hidden" name="sod" value="<?php echo $sod ?>">
    <input type="hidden" name="page" value="<?php echo $page ?>">
	<input type="hidden" name="wr_subject" value="<?php echo $write['wr_subject'] ?>">
	<input type="hidden" name="wr_content" value="<?php echo $write['wr_content'] ?>">
	<input type="hidden" name="wr_1" value="<?php echo $write['wr_1'] ?>">
	<input type="hidden" name="wr_2" value="<?php echo $write['wr_2'] ?>">
	<input type="hidden" name="wr_3" value="<?php echo $write['wr_3'] ?>">
	<input type="hidden" name="wr_4" value="<?php echo $write['wr_4'] ?>">
	<input type="hidden" name="wr_13" value="<?php echo $write['wr_13'] ?>">
	<input type="hidden" name="wr_5" value="<?php echo $write['wr_5'] ?>">
	<!--<?php if($wr_comment >= 1) { ?>
	<input type="hidden" name="wr_7" value="답변완료">
	<?php } else if($wr_comment == 0){ ?>
	<input type="hidden" name="wr_7" value="확인중">
	<?php } ?>-->
	<input type="hidden" name="wr_11" value="<?php echo $write['wr_11'] ?>">
	<input type="hidden" name="wr_12" value="<?php echo $write['wr_12'] ?>">
	<input type="hidden" name="ca_name" value="<?php echo $write['ca_name'] ?>">
	<input type="hidden" name="wr_id" value="<?php echo $wr_id?>">
	<input type="hidden" name="type" value="admin">
	<?php if ($is_secret) { ?>
	<input type="hidden" name="secret" value="secret">
	<?php } ?>
	<?php if(is_mobile()){ ?>
		<input type="hidden" name="wr_10" value="mobile">
	<?php } else { ?>
	<?php	if ($wr_20 == 'mobile' && $w == 'u'){ ?>
		<input type="hidden" name="wr_10" value="mobile">
	<?php } } ?>
	<?php if($write['wr_8'] != "") {?>
	<input type="hidden" name="wr_8" value="<?php echo $write['wr_8'] ?>">
	<?php } ?>

    <?php
    $option = '';
    $option_hidden = '';
    if ($is_notice || $is_html || $is_secret || $is_mail) {
        $option = '';
		/*
        if ($is_notice) {
            $option .= "\n".'<input type="checkbox" id="notice" name="notice" value="1" '.$notice_checked.'>'."\n".'<label for="notice">공지</label>';
        }
		*/

        if ($is_html) {
            if ($is_dhtml_editor) {
                $option_hidden .= '<input type="hidden" value="html1" name="html">';
            } else {
                $option .= "\n".'<input type="checkbox" id="html" name="html" onclick="html_auto_br(this);" value="'.$html_value.'" '.$html_checked.'>'."\n".'<label for="html">html</label>';
            }
        }

        if ($is_secret) {
            if ($is_admin || $is_secret==1) {
                $option .= "\n".'<input type="checkbox" id="secret" name="secret" value="secret" '.$secret_checked.'>'."\n".'<label for="secret">비밀</label>';
            } else {
                $option_hidden .= '<input type="hidden" name="secret" value="secret">';
            }
        }

        if ($is_mail) {
            $option .= "\n".'<input type="checkbox" id="mail" name="mail" value="mail" '.$recv_email_checked.'>'."\n".'<label for="mail">답변메일받기</label>';
        }
    }

    echo $option_hidden;
    ?>
    <div class="bbs_head02 bbs_wrap">
        <table>
        <tbody>
		<tr>
            <th scope="row"><label for="wr_name">이름</label></th>
            <td class="td_half"><?php echo $write['wr_name'] ?></td>
            <th scope="row"><label for="is_secret">공개여부</label></th>
            <td class="td_half">
				<?php 
				if($is_secret){
					echo "비공개";
				} else {
					echo "공개";
				}
				?>
			</td>
        </tr>
		
        <tr>
            <th scope="row"><label for="wr_subject">제목</label></th>
            <td class="td_half"><?php echo $subject ?></td>
			<th scope="row"><label for="wr_subject">IP</label></th>
            <td class="td_half"><?php echo $write['wr_ip']; ?></td>
        </tr>
		<tr>
			<th scope="row"><label for="wr_2">휴대전화</label></th>
			<td class="td_half"><?php echo $write['wr_2']."-".$write['wr_3']."-".$write['wr_4'];?></td>
			<th scope="row"><label for="wr_email">이메일</label></th>
			<td class="td_half"><?php echo $write['wr_1']."@".$write['wr_5'];?></td>
        </tr>
        <?php if ($is_category) { ?>
        <tr>
            <th scope="row"><label for="ca_name">지점명</label></th>
            <td colspan='3'><?php echo $write['ca_name'];?></td>
        </tr>
        <?php } ?>
        <tr>
            <th scope="row"><label for="wr_content">상담내용</label></th>
            <td class="wr_content" colspan='3' style="height:250px;">
				<?php //echo get_view_thumbnail($view['content']); ?>
                <?php echo $write['wr_content']; ?>

        <?php for ($i=0; $is_file && $i<=$file['count'];$i++) { ?>
	
				
				<?php echo '<br><br>' ?>
				<?php echo $file[$i]['view']; ?>
	
		<?php } ?>




            </td>
        </tr>
        <tr>
			<th scope="row"><label for="wr_hit">조회수</label></th> 
			<td class="td_half">
				<input type="text" name="wr_hit" value="<?php echo $write['wr_hit']; ?>" id="wr_hit" class="frm_input" size="29">
			</td>
			<th scope="row"><label for="wr_datetime">날짜</label></th>
			<td class="td_half">
				<input type="text" name="wr_datetime" value="<?php echo $write['wr_datetime']; ?>" id="wr_datetime" class="frm_input" size="29">
			</td>
        </tr>
        <!--
		<tr>
			<th scope="row"><label for="wr_hit">SMS 발송여부</label></th> 
			<td class="td_half">
				<label><input type="radio" name="wr_11" value="Y" <?php if($write['wr_11'] == 'Y') echo "checked='checked'";?>>&nbsp;발송</label>&nbsp;&nbsp;&nbsp;
				<label><input type="radio" name="wr_11" value="N" <?php if($write['wr_11'] != 'Y') echo "checked='checked'";?>>&nbsp;발송하지않음</label>&nbsp;&nbsp;&nbsp;
			</td>
			<th scope="row"><label for="wr_datetime">메일 발송여부</label></th>
			<td class="td_half">
				<label><input type="radio" name="wr_12" value="Y" <?php if($write['wr_12'] == 'Y') echo "checked='checked'";?>>&nbsp;발송</label>&nbsp;&nbsp;&nbsp;
				<label><input type="radio" name="wr_12" value="N" <?php if($write['wr_12'] != 'Y') echo "checked='checked'";?>>&nbsp;발송하지않음</label>&nbsp;&nbsp;&nbsp;
			</td>
        </tr>
        -->
		<!--<tr>
			<th scope="row"><label for="wr_hit">답변상태</label></th> 
			<td class="td_half">
				<label><input type="radio" name="wr_7" value="미답변" <?php if($write['wr_7'] == '미답변') echo "checked='checked'";?>>&nbsp;미답변</label>&nbsp;&nbsp;&nbsp;
				<label><input type="radio" name="wr_7" value="승인요청" <?php if($write['wr_7'] == '승인요청') echo "checked='checked'";?>>&nbsp;승인요청</label>&nbsp;&nbsp;&nbsp;
				<label><input type="radio" name="wr_7" value="완료" <?php if($write['wr_7'] == '완료') echo "checked='checked'";?>>&nbsp;완료</label>&nbsp;&nbsp;&nbsp;
			</td>
			
			<th scope="row"><label for="wr_hit">답변일</label></th>
			<td class="td_half"><?php echo $write['wr_8'] ?></td>
			
		</tr>-->

        <?php for ($i=0; $is_file && $i<=$file['count'];$i++) { ?>
		<!--
		<tr>
			<th scope="row">파일</th>
			<td <?php if($is_admin) echo "colspan='3'"; ?>  class='bf_file_td'>
				<input type="text" title="파일 첨부하기" class="bf_file_text" value='첨부할 파일을 선택하세요.' readonly="readonly" size="29">
				<input type="file" name="bf_file[]" title="파일첨부 <?php echo $i+1 ?> :  용량 <?php echo $upload_max_filesize ?> 이하만 업로드 가능" class="frm_file frm_input" style="display:inline-block;cursor:pointer">
				<img src="<?php echo G5_URL ?>/img/write_file_search.png" alt="찾아보기" class="bf_file_search"/>
				<?php if ($i==0) { ?>
					<img src="<?php echo G5_URL ?>/img/write_file_add.png" alt="추가" class="fwzadd"/>
				<?php } ?>
				<?php if ($is_file_content) { ?>
				<input type="text" name="bf_content[]" value="<?php echo $file[$i]['bf_content'];  ?>" title="파일 설명을 입력해주세요." class="frm_file frm_input" size="50">
				<?php } ?>
				<?php if($w == 'u' && $file[$i]['file']) { ?>
				<input type="checkbox" id="bf_file_del<?php echo $i ?>" name="bf_file_del[<?php echo $i;  ?>]" value="1"> <label for="bf_file_del<?php echo $i ?>"><?php echo $file[$i]['source'].'('.$file[$i]['size'].')';  ?> 파일 삭제</label>
				<?php } ?>
			</td>
		</tr>
		-->
		<?php } ?>

        <?php if ($is_guest) { //자동등록방지  ?>
        <tr>
            <th scope="row">자동등록방지</th>
            <td>
                <?php echo $captcha_html ?>
            </td>
        </tr>
        <?php } ?>

        </tbody>
        </table>
    </div>

    <div class="btn_confirm" style="text-align:right; margin:0 0 10px;">
		<!--
		<?php if($bo_table == 'operation_consulting') { ?>
			<a href="./move_direct.php?bo_table=online_consulting&wr_id=<?php echo $wr_id?>"><img src="<?php echo $board_skin_url ?>/img/move2.png" alt="수술후 상담게시판으로 이동"></a>
		<?php } else if($bo_table == 'online_consulting') { ?>
			<a href="./move_direct.php?bo_table=operation_consulting&wr_id=<?php echo $wr_id?>"><img src="<?php echo $board_skin_url ?>/img/move1.png" alt="온라인 상담게시판으로 이동"></a>
		<?php } ?>
		-->
        <!--
        <input type="image" src="<?php echo G5_URL ?>/img/write_ok.png" value="작성완료" id="btn_submit" accesskey="s">
        <a href="javascript:history.go(-1)"><img src="<?php echo G5_URL ?>/img/list_list.png" alt="취소"/></a>
        -->
        <input type="submit" value="작성완료" id="btn_submit" class="real_btn" accesskey="s" class="submit" style="position: relative; display: inline-block; border-radius: 4px; background-color:#080808; padding: 10px 20px; color: #fff; font-size: 12px; font-weight: 500; overflow: hidden; border: none;"/>
        <input type="button" value="취소" class="submit real_btn" onClick="location.href='<?php echo G5_URL ?>/admin/bbs/board.php?bo_table=<?php echo $bo_table ?>'">
    </div>
	</form>

<script>
<?php if($write_min || $write_max) { ?>
// 글자수 제한
var char_min = parseInt(<?php echo $write_min; ?>); // 최소
var char_max = parseInt(<?php echo $write_max; ?>); // 최대
check_byte("wr_content", "char_count");

$(function() {
	$("#wr_content").on("keyup", function() {
		check_byte("wr_content", "char_count");
	});
});

<?php } ?>
function reply_box(){
	var url = '<?php echo G5_BBS_URL ?>/board.php?bo_table=reply_box';
	var width = 700;
	var height = 700;
	var top = (screen.availHeight - height) / 2;
	var left = (screen.availWidth - width) / 2;
	var strFeature;
	strFeature = 'height=' + height + ',width=' + width + ',menubar=no,toolbar=no,location=no,resizable=no,status=no,scrollbars=yes,top=' + top + ',left=' + left

	window.open(url, '_blank', strFeature);
}

function reply_search(){
	var sca = document.getElementById('sca').value;
	var stx2 = document.getElementById('stx2').value;
	var sfl2 = document.getElementById('sfl2').value;

	var url = '<?php echo G5_URL ?>/adm/bbs/board.php?bo_table=<?php echo $bo_table ?>&stx='+stx2+"&sfl="+sfl2+"&sca="+sca;
	var width = 1300;
	var height = 700;
	var top = (screen.availHeight - height) / 2;
	var left = (screen.availWidth - width) / 2;
	var strFeature;
	strFeature = 'height=' + height + ',width=' + width + ',menubar=no,toolbar=no,location=no,resizable=no,status=no,scrollbars=yes,top=' + top + ',left=' + left

	window.open(url, '_blank', strFeature);
}

function wr_9_send(){
	var f = document.fwrite;
	f.action = "<?php echo $board_skin_url ?>/wr_9_update.php";

	var wr_9 = $('#wr_9').val();
	f.wr_9.value = wr_9;

	f.submit();
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

<?php if ($is_file) {?>
		
function addFileInput() {
	
	var flen = $("input[name='bf_file[]']").length;
	var upload_count = <?php echo (int)$file_count?>;
	if (upload_count && flen >= upload_count)
	{
		alert("이 게시판은 "+upload_count+"개 까지만 파일 업로드가 가능합니다.");
		return;
	}

	var appendHtml = "";
	appendHtml	+= "<tr>";
	appendHtml	+= "<th scope='row'>파일</th>";
	<?php if ($is_admin) { ?> appendHtml	+= "<td colspan='3' class='bf_file_td'>";
	<?php } else { ?> appendHtml	+= "<td class='bf_file_td'>";
	<?php } ?>
	appendHtml += "<input type='text' title='파일 첨부하기' class='bf_file_text' value='첨부할 파일을 선택하세요.' readonly='readonly' size='29'>";
	appendHtml	+= "	<input type='file' name='bf_file[]' title='파일첨부  :  용량 <?php echo $upload_max_filesize ?> 바이트 이하만 업로드 가능' class='frm_file frm_input' style='display:inline-block;cursor:pointer'>";
	appendHtml += "		<img src='<?php echo G5_URL ?>/img/write_file_search.png' alt='찾아보기'  class='bf_file_search'/>";
	appendHtml	+= "	<img src='<?php echo G5_URL ?>/img/write_file_delete.png' alt='삭제' class='fwzdel'/>";
	
	<?php if ($is_file_content) { ?>
	appendHtml	+= "	<input type='text' name='bf_content[]' value='' title='파일 설명을 입력해주세요.' class='frm_file frm_input' size='50'>";
	<?php } ?>

	appendHtml	+= "</td>";
	appendHtml	+= "</tr>";

	$(".bbs_head02 table:first-child").append(appendHtml);
}
<?php } ?>

function setuplabel() {
	if ($('.cate_menu input').length) {
		$('.cate_menu').each(function(){ 
			$(this).removeClass('radio_on');
		});
		$('.cate_menu input:checked').each(function(){ 
			$(this).parent('label').addClass('radio_on');
		});
	}
}

function bf_file_text() {
	$('.bf_file_td .frm_file').change(function(){
		$i = $(this).val();
		$(this).prev().val($i);
	});
}

$(document).ready(function(){
	$('.cate_menu').click(function(){
		setuplabel();
	});
	setuplabel();
	bf_file_text();

	$("input:checkbox[id='secret']").prop("checked", true);

	/*

	// 첨부파일 추가.
	$('.bbs_head02 table .fwzadd').live('click',(function() {
		addFileInput();
		bf_file_text();
	}));

	// 첨부파일 삭제.
	$('.bbs_head02 table .fwzdel').live('click',(function() {
		$(this).parents("tr:first").remove();
	}));

	*/
});
</script>
</section>
<!-- } 게시물 작성/수정 끝 -->