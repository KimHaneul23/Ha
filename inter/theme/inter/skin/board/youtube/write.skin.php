<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
//add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
?>

<h1 id="container_title"><?php echo $g5['title'] ?></h1>

<!-- 게시물 작성/수정 시작 { -->
<form name="fwrite" id="fwrite" action="<?php echo $action_url ?>" onsubmit="return fwrite_submit(this);" method="post" enctype="multipart/form-data" autocomplete="off" style="width:<?php echo $width; ?>">
    <input type="hidden" name="uid" value="<?php echo get_uniqid(); ?>">
    <input type="hidden" name="w" value="<?php echo $w ?>">
    <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
    <input type="hidden" name="wr_id" value="<?php echo $wr_id ?>">
    <input type="hidden" name="sca" value="<?php echo $sca ?>">
    <input type="hidden" name="sfl" value="<?php echo $sfl ?>">
    <input type="hidden" name="stx" value="<?php echo $stx ?>">
    <input type="hidden" name="spt" value="<?php echo $spt ?>">
    <input type="hidden" name="sst" value="<?php echo $sst ?>">
    <input type="hidden" name="sod" value="<?php echo $sod ?>">
    <input type="hidden" name="page" value="<?php echo $page ?>">
    <?php
    $option = '';
    $option_hidden = '';
    if ($is_notice || $is_html || $is_secret || $is_mail) { 
        $option = '';
        if ($is_notice) {
			$option .= PHP_EOL.'<input type="checkbox" id="notice" name="notice" class="selec_chk" value="1" '.$notice_checked.'>'.PHP_EOL.'<label for="notice"><span></span>공지</label>';
		}
		if ($is_html) {
			if ($is_dhtml_editor) {
				$option_hidden .= '<input type="hidden" value="html1" name="html">';
			} else {
				$option .= PHP_EOL.'<input type="checkbox" id="html" name="html" onclick="html_auto_br(this);" class="selec_chk" value="'.$html_value.'" '.$html_checked.'>'.PHP_EOL.'<label for="html"><span></span>html</label>';
			}
		}
		if ($is_secret) {
			if ($is_admin || $is_secret==1) {
				$option .= PHP_EOL.'<input type="checkbox" id="secret" name="secret"  class="selec_chk" value="secret" '.$secret_checked.'>'.PHP_EOL.'<label for="secret"><span></span>비밀글</label>';
			} else {
				$option_hidden .= '<input type="hidden" name="secret" value="secret">';
			}
		}
		if ($is_mail) {
			$option .= PHP_EOL.'<input type="checkbox" id="mail" name="mail"  class="selec_chk" value="mail" '.$recv_email_checked.'>'.PHP_EOL.'<label for="mail"><span></span>답변메일받기</label>';
		}
    }
    echo $option_hidden;
    ?>
	
	<div class="tbl_frm01 tbl_wrap">
		<table>
			<caption><?php echo $board['bo_subject'] ?> 목록</caption>
			<colgroup>
				<col class="grid_4">
				<col>
			</colgroup>
			<tbody>
				<?php if ($is_category) { ?>
				<tr>
					<th><label for="ca_name">분류<strong class="sound_only">필수</strong></label></th>
					<td>
						<select name="ca_name" id="ca_name" required>
							<option value="">분류를 선택하세요</option>
							<?php echo $category_option ?>
						</select>
					</td>
					<style>
                        #ca_name > option:nth-child(4){display:none;}
                    </style>
				</tr>
				<?php } ?>
				
				<?php if ($is_name) { ?>
				<tr>
					<th><label for="wr_name">작성자<strong class="sound_only">필수</strong></label></th>
					<td>
						<input type="text" name="wr_name" id="wr_name" class="frm_input full_input required" value="<?php echo $name ?>" placeholder="작성자" required>
					</td>
				</tr>
				<?php } ?>
				
				<? if ($is_password) { ?>
				<tr>
					<th><label for="wr_password">비밀번호<strong class="sound_only">필수</strong></label></th>
					<td><input type="password" name="wr_password" id="wr_password" <?php echo $password_required ?> class="form-control field txt <?php echo $password_required ?> required" placeholder="비밀번호" required></td>
				</tr>
				<? } ?>
				
				<? if ($is_email) { ?>
				<tr>
					<th><label for="wr_email">이메일<strong class="sound_only">필수</strong></label></th>
					<td><input type="text" name="wr_email" value="<?php echo $email ?>" id="wr_email" class="form-control field txt email required" placeholder="이메일" required></td>
				</tr>
				<? } ?>
				
				<?php if ($is_homepage) { ?>
				<tr>
					<th><label for="wr_homepage">홈페이지</label></th>
					<td><input type="text" name="wr_homepage" value="<?php echo $homepage ?>" id="wr_homepage" class="frm_input half_input" size="50" placeholder="홈페이지"></td>
				</tr>
				<?php } ?>
				
				<tr>
					<th><label for="wr_subject">제목<strong class="sound_only">필수</strong></label></th>
					<td>
						<input type="text" name="wr_subject" value="<?php echo $subject ?>" id="wr_subject" required class="frm_input full_input required" size="50" maxlength="255" placeholder="제목">
                        <!--
						<?php if ($option) { 
						//echo $option;
						} ?>
                        -->
					</td>
				</tr>
                
                <tr>
					<th><label for="wr_3">메인 노출여부<strong class="sound_only">필수</strong></label></th>
					<td>
						<label><input type="radio" name="wr_3" value="0" required <?php if($write['wr_3'] == '0' || $w != 'u') echo "checked='checked'"; ?> class="checkbox">&nbsp;Y</label>
                        <label><input type="radio" name="wr_3" value="1" required <?php if($write['wr_3'] == '1') echo "checked='checked'"; ?> class="checkbox">&nbsp;N</label>
					</td>
				</tr>
				
				<tr>
					<th><label for="bf_file_1">채널 로고 이미지</label></th>
					<td>
						<span class="frm_info">이미지 크기는 <strong>넓이 160px 높이 160px</strong>로 해주세요.</span>
						<div class="cont">
							<input type="file" name="bf_file[]" id="bf_file_1" title="파일첨부 1 : 용량 <?php echo $upload_max_filesize ?> 이하만 업로드 가능" class="form-control field txt" style="line-height:32px;">
						</div>
						<?php if($w == 'u' && $file[0]['file']) { ?>
						<span class="file_del" style="font-size:11px;">
							<input type="checkbox" id="bf_file_del0" name="bf_file_del[0]" value="1"> <label for="bf_file_del0"><?php echo $file[0]['source'].'('.$file[0]['size'].')';  ?> 파일 삭제</label>
						</span>
						<?php } ?>
					</td>
				</tr>
                
				<tr>
					<th><label for="wr_1">동영상 ID</label></th>
					<td>
						<span class="frm_info">동영상 ID 예시) https://www.youtube.com/watch?v=<span class="txt_true">ID</span></span>
						<div class="cont">
							<input type="text" name="wr_1" value="<?php echo $write['wr_1'] ?>" class="frm_input full_input required" placeholder="동영상 ID" size="50" maxlength="255" >
						</div>
					</td>
				</tr>
                <!--
				<tr>
					<th><label for="wr_link<?php echo $i ?>">링크</label></th>
					<td>
						<div class="bo_w_link write_div">
							<input type="text" name="wr_link<?php echo $i ?>" value="<?php if($w=="u"){ echo $write['wr_link'.$i]; } ?>" id="wr_link<?php echo $i ?>" class="frm_input full_input" size="100">
						</div>
					</td>
				</tr>
                -->
                <!--
				<tr>
					<th><label for="wr_content">내용<strong class="sound_only">필수</strong></label></th>
					<td>
						<div class="wr_content <?php echo $is_dhtml_editor ? $config['cf_editor'] : ''; ?>">
						<?php echo $editor_html; // 에디터 사용시는 에디터로, 아니면 textarea 로 노출 ?>
						</div>
						<span id="char_count"></span>글자
					</td>
				</tr>
				-->
				<?php if ($is_use_captcha) { //자동등록방지  ?>
				<tr>
					<th><label>자동등록방지</label></th>
					<td>
						<?php echo $captcha_html ?>
					</td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
	
	<div class="btn_fixed_top">
		<a href="javascript:window.history.back();" class="btn_02 btn">취소</a>
		<button type="submit" id="btn_submit" accesskey="s" class="btn_01 btn">작성완료</button>
	</div>
</form>

<script>
$(function() {
  $('#wr_content').keyup(function (e){
	  var content = $(this).val();
	  $('#char_count').html(content.length);
  });
  $('#wr_content').keyup();
});
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

	<?php echo $captcha_js; // 캡챠 사용시 자바스크립트에서 입력된 캡챠를 검사함  ?>

	document.getElementById("btn_submit").disabled = "disabled";

	return true;
}
</script>
<!-- } 게시물 작성/수정 끝 -->