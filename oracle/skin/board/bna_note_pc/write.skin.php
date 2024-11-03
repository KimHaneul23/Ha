<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);

if($wr_1_search){
	$qstr .= "&wr_1_search=".$wr_1_search;
}

?>
<link rel="stylesheet" href="<?php echo G5_SKIN_URL;?>/board/bna_note_pc/style.css">
<div id="bo_title">
	<?php echo $board['bo_subject'] ?>
</div>
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
    <input type="hidden" name="sca" value="<?php echo $sca ?>">
    <input type="hidden" name="sfl" value="<?php echo $sfl ?>">
    <input type="hidden" name="stx" value="<?php echo $stx ?>">
    <input type="hidden" name="spt" value="<?php echo $spt ?>">
    <input type="hidden" name="sst" value="<?php echo $sst ?>">
    <input type="hidden" name="sod" value="<?php echo $sod ?>">
    <input type="hidden" name="page" value="<?php echo $page ?>">
	<?php if(is_mobile()){ ?>
		<input type="hidden" name="wr_10" value="mobile">
	<?php } else { ?>
	<?php	if ($wr_10 == 'mobile' && $w == 'u'){ ?>
		<input type="hidden" name="wr_10" value="mobile">
	<?php } } ?>

    <?php
    $option = '';
    $option_hidden = '';
    if ($is_notice || $is_html || $is_secret || $is_mail) {
        $option = '';
		
        if ($is_notice) {
            $option .= "\n".'<input type="checkbox" id="notice" name="notice" value="1" '.$notice_checked.'>'."\n".'<label for="notice">베스트</label>';
        }
		

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
            <th scope="row"><label for="wr_2">페이지인<strong class="sound_only">필수</strong></label></th>
            <td>
				<label><input type="radio" name="wr_2" value="Y" required <?php if($write['wr_2'] == 'Y' || $w != 'u') echo "checked='checked'"; ?> class="checkbox">&nbsp;Y</label>
				<label><input type="radio" name="wr_2" value="N" required <?php if($write['wr_2'] == 'N') echo "checked='checked'"; ?> class="checkbox">&nbsp;N</label>
            </td>
            <th scope="row"><label for="ca_name">분류<strong class="sound_only">필수</strong></label></th>
            <td>
							<select name="ca_name" id="ca_name" required>
								<option value="">분류를 선택하세요</option>
								<?php echo $category_option ?>
							</select>
            </td>
        </tr>
		 <tr>		 
			<th scope="row"><label for="wr_3">성형모드</label></th>
			<td>
				<label><input type="radio" name="wr_3" value="mode_1" required <?php if($write['wr_3'] == 'mode_1' || $w != 'u') echo "checked='checked'"; ?> class="checkbox">&nbsp;가슴성형모드&nbsp; </label>				
            </td>
            <th scope="row"><label for="wr_4">각도선택<strong class="sound_only">필수</strong></label></th>
            <td>
				<label><input type="radio" name="wr_4" value="degree_1" required <?php if($write['wr_4'] == 'degree_1' || $w != 'u') echo "checked='checked'"; ?> class="checkbox">&nbsp;정면</label>
				<label><input type="radio" name="wr_4" value="degree_2" required <?php if($write['wr_4'] == 'degree_2') echo "checked='checked'"; ?> class="checkbox">&nbsp;정면+측면</label>
				<label><input type="radio" name="wr_4" value="degree_3" required <?php if($write['wr_4'] == 'degree_3') echo "checked='checked'"; ?> class="checkbox">&nbsp;정면+45+측면</label>
            </td>
        </tr>
        <tr>
			<th scope="row"><label for="wr_hit">조회수</label></th> 
			<td class="td_half">
				<input type="text" name="wr_hit" value="<?php echo $write['wr_hit']; ?>" id="wr_hit" class="frm_input" size="29">
			</td> 
			<th scope="row"><label for="wr_datetime">날짜</label></th>
			<td class="td_half">
				<input type="text" name="wr_datetime" <?php if(!$write['wr_datetime']) echo "value='".date("Y-m-d H:i:s")."'"; else echo "value='".$write['wr_datetime']."'"; ?> id="wr_datetime" class="frm_input" size="29">
			</td>
        </tr>
		<tr>
            <th scope="row">베스트</th>
            <td colspan='3'>
	 <?php if ($option) { ?>
    <div class="write_div">
        <span class="sound_only">옵션</span>
        <?php echo $option ?>
    </div>
    <?php } ?>


            </td>
        </tr>
        <tr>
            <th scope="row"><label for="wr_subject">제목<strong class="sound_only">필수</strong></label></th>
            <td >
                <div id="autosave_wrapper">
                    <input type="text" name="wr_subject" value="<?php echo $subject ?>" id="wr_subject" required class="frm_input required" size="80" maxlength="255">
                </div>
            </td>
			<th scope="row"><label for="wr_5">시술후(개월수)<strong class="sound_only">필수</strong></label></th>
            <td >
                <div id="autosave_wrapper">
                    <input type="text" name="wr_5" value="<?php echo $wr_5 ?>" id="wr_5" required class="frm_input required" size="80" maxlength="255">
                </div>
            </td>
        </tr>
		<tr>
            <th scope="row"><label for="wr_content">내용<strong class="sound_only">필수</strong></label></th>
            <td class="wr_content" colspan='3'>
				<div id="autosave_wrapper">
					<?php if($write_min || $write_max) { ?>
					<!-- 최소/최대 글자 수 사용 시 -->
					<p id="char_count_desc">이 게시판은 최소 <strong><?php echo $write_min; ?></strong>글자 이상, 최대 <strong><?php echo $write_max; ?></strong>글자 이하까지 글을 쓰실 수 있습니다.</p>
					<?php } ?>
					<?php echo $editor_html; // 에디터 사용시는 에디터로, 아니면 textarea 로 노출 ?>
					<?php if($write_min || $write_max) { ?>
					<!-- 최소/최대 글자 수 사용 시 -->
					<div id="char_count_wrap"><span id="char_count"></span>글자</div>
					<?php } ?>
				</div>
            </td>
        </tr>
        <?php for ($i=0; $is_file && $i<$file_count; $i++) { ?>
		<tr>
			<th scope="row">
				<?php
				if($i == 0){
					echo "B-정면";
				} else if($i == 1){
					echo "B-45도";
				} else if($i == 2){
					echo "B-측면";
				} else if($i == 3){
					echo "A-정면";
				} else if($i == 4){
					echo "A-45도";
				} else if($i == 5){
					echo "A-측면";
				}else if($i == 6){
					echo "눈-전사진";
				} else if($i == 7){
					echo "눈-후사진";
				}
				?>
			</th>
			<td colspan='3' class='bf_file_td'>
				
				<input type="text" title="파일 첨부하기" class="bf_file_text" value='사진은 560x440 으로 맞춰주세요' readonly="readonly" size="29" style="color:#9c9c9c">
				<input type="file" name="bf_file[]" title="파일첨부 <?php echo $i+1 ?> :  용량 <?php echo $upload_max_filesize ?> 이하만 업로드 가능" class="frm_file frm_input" style="display:inline-block;cursor:pointer">
				<img src="<?php echo G5_URL ?>/img/write_file_search.png" alt="찾아보기" class="bf_file_search"/>
				

				<?php if ($is_file_content) { ?>
				<input type="text" name="bf_content[]" value="<?php echo $file[$i]['bf_content'];  ?>" title="파일 설명을 입력해주세요." class="frm_file frm_input" size="50">
				<?php } ?>

				<?php if($w == 'u' && $file[$i]['file']) { ?>
				<input type="checkbox" id="bf_file_del<?php echo $i ?>" name="bf_file_del[<?php echo $i;  ?>]" value="1"> <label for="bf_file_del<?php echo $i ?>"><?php echo $file[$i]['source'].'('.$file[$i]['size'].')';  ?> 파일 삭제</label>
				<?php }  ?>
			</td>
		</tr>
		<?php }?>

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

    <div class="btn_confirm">
        <input type="image" src="<?php echo G5_URL ?>/img/write_ok.png" value="작성완료" id="btn_submit" accesskey="s">
        <a href="./board.php?bo_table=<?php echo $bo_table."&".$qstr ?>"><img src="<?php echo G5_URL ?>/img/write_cancel.png" alt="취소"/></a>
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
});
</script>
</section>
<!-- } 게시물 작성/수정 끝 -->