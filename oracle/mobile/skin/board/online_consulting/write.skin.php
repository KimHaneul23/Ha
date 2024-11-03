<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
?>

<section id="bo_w">
    <!--<h2 id="container_title"><?php echo $g5['title'] ?></h2>-->

    <form name="fwrite" id="fwrite" action="<?php echo $action_url ?>" onsubmit="return fwrite_submit(this);" method="post" enctype="multipart/form-data" autocomplete="off">
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
	<input type="hidden" name="wr_10" value="mobile">
	<input type="hidden" name="wr_6" value="Y">
	<input type="hidden" name="wr_7" value="미답변">
	<input type="hidden" name="type" value="member">

    <?php
    $option = '';
    $option_hidden = '';
    if ($is_notice || $is_html || $is_secret || $is_mail) {
        $option = '';
        if ($is_notice) {
            $option .= PHP_EOL.'<input type="checkbox" id="notice" name="notice" value="1" '.$notice_checked.'>'.PHP_EOL.'<label for="notice">공지</label>';
        }

        if ($is_html) {
            if ($is_dhtml_editor) {
                $option_hidden .= '<input type="hidden" value="html1" name="html">';
            } else {
                //$option .= PHP_EOL.'<input type="checkbox" id="html" name="html" onclick="html_auto_br(this);" value="'.$html_value.'" '.$html_checked.'>'.PHP_EOL.'<label for="html">html</label>';
            }
        }

        if ($is_secret) {
            if ($is_admin || $is_secret==1) {
                $option .= PHP_EOL.'<input type="checkbox" id="secret" name="secret" value="secret" '.$secret_checked.'>'.PHP_EOL.'<label for="secret">비밀</label>';
            } else {
                $option_hidden .= '<input type="hidden" name="secret" value="secret">';
            }
        }

        if ($is_mail) {
            $option .= PHP_EOL.'<input type="checkbox" id="mail" name="mail" value="mail" '.$recv_email_checked.'>'.PHP_EOL.'<label for="mail">답변메일받기</label>';
        }
    }

    echo $option_hidden;
    ?>
	<?php if($w != 'u') {?>
	<div class="mbskin">
		<section id="fregister_private">
			<h2 class="mbskin_h2">
				<img src="<?php echo G5_URL ?>/img/write_chk_img.png" alt="V"/>
				개인정보처리방침안내
			</h2>
			<textarea readonly><?php echo get_text($config['cf_privacy']) ?></textarea>
			<fieldset class="fregister_agree">
				<input type="radio" name="agree2" value="1" id="agree21">
				<label for="agree21">개인정보처리방침에 동의합니다.</label>
				&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="radio" name="agree2" value="0" id="agree22">
				<label for="agree22">동의하지 않습니다.</label>
			</fieldset>
		</section>
	</div>
	<?php } ?>

	<h2 class="bbs_h2">
		<img src="<?php echo G5_URL ?>/img/write_chk_img.png" alt="V"/>
		상담글 등록
	</h2>

    <div class="tbl_frm02 tbl_wrap">
        <table>
        <caption><?php echo $g5['title'] ?></caption>
        <tbody>
        <?php if ($is_name) { ?>
        <tr>
            <th scope="row"><label for="wr_name">이름<strong class="sound_only">필수</strong></label></th>
            <td><input type="text" name="wr_name" value="<?php echo $name ?>" id="wr_name" required class="frm_input required" maxlength="20"></td>
        </tr>
        <?php } ?>

        <?php if ($is_password) { ?>
        <tr>
            <th scope="row"><label for="wr_password">비밀번호<strong class="sound_only">필수</strong></label></th>
            <td><input type="password" name="wr_password" id="wr_password" <?php echo $password_required ?> class="frm_input <?php echo $password_required ?>" maxlength="20"></td>
        </tr>
        <?php } ?>

        <?php if ($is_category) { ?>
        <tr>
            <th scope="row"><label for="ca_name">분류<strong class="sound_only">필수</strong></label></th>
            <td>
                <select class="required" id="ca_name" name="ca_name" required>
                    <option value="">선택하세요</option>
                    <?php echo $category_option ?>
                </select>
            </td>
        </tr>
        <?php } ?>

		<tr>
			<th scope="row"><label for="wr_1">휴대전화</label></th>
			<td>
				<?php
				$member_hp = explode("-", $member['mb_hp']);

				if($w != 'u') {
				?>
				<select name="wr_1" id="wr_1">
					<option value="010" <?php if($member_hp[0] == '010') echo "selected='selected'"; ?>>010</option>
					<option value="011" <?php if($member_hp[0] == '011') echo "selected='selected'"; ?>>011</option>
					<option value="016" <?php if($member_hp[0] == '016') echo "selected='selected'"; ?>>016</option>
					<option value="017" <?php if($member_hp[0] == '017') echo "selected='selected'"; ?>>017</option>
					<option value="018" <?php if($member_hp[0] == '018') echo "selected='selected'"; ?>>018</option>
					<option value="019" <?php if($member_hp[0] == '019') echo "selected='selected'"; ?>>019</option>
				</select>&nbsp;&nbsp;-&nbsp;&nbsp;
				<input type="number" name="wr_2" id="wr_2" class="frm_input" size="5" value="<?php echo $member_hp[1]; ?>" maxlength="4" style="width:60px;">&nbsp;&nbsp;-&nbsp;&nbsp;
				<input type="number" name="wr_3" id="wr_3" class="frm_input" size="5" value="<?php echo $member_hp[2]; ?>" maxlength="4" style="width:60px;">

				<?php } else { ?>

				<select name="wr_1" id="wr_1">
					<option value="010" <?php if($write['wr_1'] == '010') echo "selected='selected'"; ?>>010</option>
					<option value="011" <?php if($write['wr_1'] == '011') echo "selected='selected'"; ?>>011</option>
					<option value="016" <?php if($write['wr_1'] == '016') echo "selected='selected'"; ?>>016</option>
					<option value="017" <?php if($write['wr_1'] == '017') echo "selected='selected'"; ?>>017</option>
					<option value="018" <?php if($write['wr_1'] == '018') echo "selected='selected'"; ?>>018</option>
					<option value="019" <?php if($write['wr_1'] == '019') echo "selected='selected'"; ?>>019</option>
				</select>&nbsp;&nbsp;-&nbsp;&nbsp;
				<input type="number" name="wr_2" id="wr_2" class="frm_input" size="5" value="<?php echo $write['wr_2']; ?>" maxlength="4" required style="width:60px;">&nbsp;&nbsp;-&nbsp;&nbsp;
				<input type="number" name="wr_3" id="wr_3" class="frm_input" size="5" value="<?php echo $write['wr_3']; ?>" maxlength="4" required style="width:60px;">

				<?php } ?><br>
				<input type="checkbox" id="wr_11" name="wr_11" value="Y" <?php if($write['wr_11'] == 'Y') echo "checked='checked'";?> style="border:0">
				<label for="wr_11">예약확인문자전송</label>
			</td>
        </tr>

		<tr>
            <th scope="row"><label for="wr_email">이메일</label></th>
            <td <?php if($is_admin) echo "colspan='3'"; ?>>
				<?php
				$member_email = explode("@", $member['mb_email']);

				if($w != 'u') {
				?>
				<input type="input" name="wr_4" id="wr_4" class="frm_input" size="6" value="<?php echo $member_email[0]; ?>" maxlength="20" style="width:60px;">&nbsp;&nbsp;@&nbsp;&nbsp;
				<input type="input" name="wr_5" id="wr_5" class="frm_input" size="6" value="<?php echo $member_email[1]; ?>" maxlength="20" style="width:60px;">
				<?php } else { ?>

				<input type="input" name="wr_4" id="wr_4" class="frm_input" size="6" value="<?php echo $write['wr_4']; ?>" maxlength="20" style="width:60px;">&nbsp;&nbsp;@&nbsp;&nbsp;
				<input type="input" name="wr_5" id="wr_5" class="frm_input" size="6" value="<?php echo $write['wr_5']; ?>" maxlength="20" style="width:60px;">
				<?php } ?>
				<select name="wr_5_select" id="wr_5_select" class="reserv_info_select2" style="width:60px;">
					<option value="self">직접입력</option>
					<option value="naver.com">naver.com</option>
					<option value="gmail.com">gmail.com</option>
					<option value="nate.com">nate.com</option>
					<option value="hanmail.net">hanmail.net</option>
				</select>
				<script>
				$('#wr_5_select').change(function() {
					if($(this).val()=='self') {
						$("#wr_5").val('');
						$("#wr_5").css('background','#fff');
						$("#wr_5").attr("readonly",false); //활성화
					} else {
						$("#wr_5").val($(this).val());
						$("#wr_5").css('background','#f6f9fa');
						$("#wr_5").attr("readonly",true); //비활성화
					}
				});
				</script><br>
				<input type="checkbox" id="wr_12" name="wr_12" value="Y" <?php if($write['wr_12'] == 'Y') echo "checked='checked'";?> style="border:0">
				<label for="wr_12">예약확인메일받기</label>
			</td>
        </tr>

        <tr>
            <th scope="row"><label for="wr_subject">제목<strong class="sound_only">필수</strong></label></th>
            <td><input type="text" name="wr_subject" value="<?php echo $subject ?>" id="wr_subject" required class="frm_input required"><br><?php echo $option ?></td>
        </tr>

        <tr>
            <th scope="row"><label for="wr_content">내용<strong class="sound_only">필수</strong></label></th>
            <td class="wr_content">
                <?php if($write_min || $write_max) { ?>
                <!-- 최소/최대 글자 수 사용 시 -->
                <p id="char_count_desc">이 게시판은 최소 <strong><?php echo $write_min; ?></strong>글자 이상, 최대 <strong><?php echo $write_max; ?></strong>글자 이하까지 글을 쓰실 수 있습니다.</p>
                <?php } ?>
                <?php echo $editor_html; // 에디터 사용시는 에디터로, 아니면 textarea 로 노출 ?>
                <?php if($write_min || $write_max) { ?>
                <!-- 최소/최대 글자 수 사용 시 -->
                <div id="char_count_wrap"><span id="char_count"></span>글자</div>
                <?php } ?>
            </td>
        </tr>

        <?php for ($i=1; $is_link && $i<=G5_LINK_COUNT; $i++) { ?>
        <tr>
            <th scope="row"><label for="wr_link<?php echo $i ?>">링크 #<?php echo $i ?></label></th>
            <td><input type="url" name="wr_link<?php echo $i ?>" value="<?php if($w=="u"){echo$write['wr_link'.$i];} ?>" id="wr_link<?php echo $i ?>" class="frm_input wr_link"></td>
        </tr>
        <?php } ?>

        <?php for ($i=0; $is_file && $i<$file_count; $i++) { ?>
        <tr>
            <th scope="row">파일 #<?php echo $i+1 ?></th>
            <td>
                <input type="file" name="bf_file[]" title="파일첨부 <?php echo $i+1 ?> :  용량 <?php echo $upload_max_filesize ?> 이하만 업로드 가능" class="frm_file frm_input">
                <?php if ($is_file_content) { ?>
                <input type="text" name="bf_content[]" value="<?php echo ($w == 'u') ? $file[$i]['bf_content'] : ''; ?>" title="파일 설명을 입력해주세요." class="frm_file frm_input">
                <?php } ?>
                <?php if($w == 'u' && $file[$i]['file']) { ?>
                <input type="checkbox" id="bf_file_del<?php echo $i ?>" name="bf_file_del[<?php echo $i; ?>]" value="1"> <label for="bf_file_del<?php echo $i ?>"><?php echo $file[$i]['source'].'('.$file[$i]['size'].')'; ?> 파일 삭제</label>
                <?php } ?>
            </td>
        </tr>
        <?php } ?>

        <?php if ($is_guest) { //자동등록방지 ?>
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

    <div class="btn_confirm">
        <input type="image" src="<?php echo G5_URL ?>/img/m_confirm_bt.png" value="작성완료" id="btn_submit" accesskey="s" style="height:30px">
        <a href="./board.php?bo_table=<?php echo $bo_table ?>"><img src="<?php echo G5_URL ?>/img/m_cencel_bt.png" alt="취소" style="height:30px"></a>
    </div>
    </form>
</section>

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
