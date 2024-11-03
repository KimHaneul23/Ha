<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
//add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);


//$query = "select * from g5_config where cf_theme = oracle ";
//$sql = mysql_query( $query );
//$row = mysql_fetch_array( $sql );

if($idx) {
	$sql = "select * from g5_write_equipment where wr_id = ".$idx;
	$row = sql_fetch($sql);
	$wr_5 = explode(',', $row['ch_wr_5']);
}

$sql = "select * from g5_menu where me_use = 1 and me_mobile_use = 1 order by me_code, me_order";
$qry = sql_query($sql);

?>
<style>
    .w_bo_w label{margin-right:10px;}
    .w_bo_w input{border:solid 1px #b3b3b3;background:#fff !important;height:30px;line-height:30px; width:400px; padding:0 10px;}
    .w_bo_w input[type=checkbox]{display: inline-block;width: 1rem;min-width: auto;padding: 0;height: 1rem;line-height: 1rem;}
    
    input[type="text"]{text-align:left !important;}
</style>
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
            $option .= PHP_EOL.'<input type="checkbox" id="notice" name="notice" class="selec_chk" value="1" '.$notice_checked.' style="display:inline-block; width:16px; min-width:auto; height:16px;">'.PHP_EOL.'<label for="notice">공지</label>';
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
	
	<div class="tbl_frm01">
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
					<td class="w_bo_w">
						<?php $arr = explode("|",$board['bo_category_list']);
                            foreach($arr as $str) { ?>
                            <input type="checkbox" name="chk_ca_name[]" value="<?php echo $str; ?>"> <?php echo $str; ?>
                        <?php } ?>
                        <script>
                            var f = document.fwrite;
                            var str=",<?php echo $write[ca_name]?>,";
                            for (var i=0; i<f.length; i++) {
                                if (f.elements[i].name == "chk_ca_name[]") {
                                    if (str.indexOf(','+f.elements[i].value+',')>=0) {
                                        f.elements[i].checked = true;
                                    }
                                }
                            }
                        </script>
					</td>
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
                    <th scope="row"><label for="wr_6">지점명 <span style="color:red">*</span><strong class="sound_only">필수</strong></label></th>
                    <td class="wr_6"> 
                        <input class="jijeom_chk" type="checkbox" name="wr_6" id="wr_6" value="구월점" <?php if($wr_6 == "구월점") echo " checked=checked"; ?> style="display:inline-block; width:16px; min-width:auto; height:16px;"> <label for="wr_5">구월점</label>
                        <input class="jijeom_chk" type="checkbox" name="wr_7" id="wr_7" value="송도점" <?php if($wr_7 == "송도점") echo " checked=checked"; ?> style="display:inline-block; width:16px; min-width:auto; height:16px;"> <label for="wr_6">송도점</label>
                    </td>
                </tr>
				
				<tr>
					<th><label for="wr_good">노출순서</label></th>
					<td>
						<input type="text" name="wr_good" id="wr_good" class="frm_input" value="<?php echo $wr_good ?>" placeholder="노출순서" required>
						<p class="fz_14 ls_2 lh_16 normal m_5" style="width:80%; color:#ff0000;">★ 노출순서는 숫자가 낮은 순으로 보여지며 기본값은 0 입니다. 0 을 입력한 뒤 업로드하시면 업로드 순서대로 보여지며 노출순서는 관리자페이지에서 업로드 시에만 적용이 가능하며 홈페이지에서 바로 업로드 할 경우 기본값인 0으로 자동설정이 됩니다.</p>
					</td>
				</tr>
				
				<tr>
					<th><label for="wr_subject">장비명<strong class="sound_only">필수</strong></label></th>
					<td>
						<input type="text" name="wr_subject" value="<?php echo $subject ?>" id="wr_subject" required class="frm_input required" size="50" maxlength="255" placeholder="장비명">
						<?php if ($option) { 
						echo $option;
						} ?>
					</td>
				</tr>
				
				<tr>
					<th><label for="bf_file_1">썸네일<strong class="sound_only">필수</strong></label></th>
					<td>
						<span class="frm_info">이미지 크기는 <strong>넓이 271픽셀 높이 271픽셀</strong>로 해주세요.</span>
						<div class="cont">
							<input type="file" name="bf_file[]" id="bf_file_1" title="파일첨부 1 : 용량 <?php echo $upload_max_filesize ?> 이하만 업로드 가능" class="form-control field txt" style="line-height:32px;">
						</div>
						<?php if($w == 'u' && $file[0]['file']) { ?>
						<span class="file_del" style="font-size:11px;">
							<input type="checkbox" id="bf_file_del0" name="bf_file_del[0]" value="1"> <label for="bf_file_del0"><?php echo $file[0]['source'].'('.$file[0]['size'].')';  ?> 파일 삭제</label>
						</span>
						<?php } ?>
						<a href='<?=$row['bf_file']?>' target='_blank'><img src='<?=$row['bf_file']?>'></a>
					</td>
				</tr>
				
				<tr>
					<th><label for="bf_file_2">팝업 이미지<strong class="sound_only">필수</strong></label></th>
					<td>
						<span class="frm_info">이미지 크기는 <strong>넓이 600픽셀 높이 600픽셀</strong>로 해주세요.</span>
						<div class="cont">
							<input type="file" name="bf_file[]" id="bf_file_2" title="파일첨부 2 : 용량 <?php echo $upload_max_filesize ?> 이하만 업로드 가능" class="form-control field txt" style="line-height:32px;">
						</div>
						<?php if($w == 'u' && $file[1]['file']) { ?>
						<span class="file_del" style="font-size:11px;">
							<input type="checkbox" id="bf_file_del1" name="bf_file_del[1]" value="2"> <label for="bf_file_del1"><?php echo $file[1]['source'].'('.$file[1]['size'].')';  ?> 파일 삭제</label>
						</span>
						<?php } ?>
					</td>
				</tr>
				
				<tr>
					<th><label for="wr_1">한줄 설명<strong class="sound_only">필수</strong></label></th>
					<td>
						<input type="text" name="wr_1" value="<?php echo $wr_1 ?>" id="wr_1" required class="frm_input required" size="70" maxlength="255" placeholder="한줄 설명">
					</td>
				</tr>
				
				<!--
				<tr>
					<th><label for="wr_2">태그<strong class="sound_only">필수</strong></label></th>
					<td>
						<span class="frm_info">#잔주름 개선|#피부 탄력 개선|#피부 콜라겐 재생. | 로 구분</span>
						<input type="text" name="wr_2" value="<?php echo $wr_2 ?>" id="wr_2" class="frm_input required" size="70" maxlength="255" placeholder="태그">
					</td>
				</tr>
				-->
				
				<tr>
					<th><label for="wr_content">설명<strong class="sound_only">필수</strong></label></th>
					<td>
						<div class="wr_content <?php echo $is_dhtml_editor ? $config['cf_editor'] : ''; ?>">
							<?php echo $editor_html; // 에디터 사용시는 에디터로, 아니면 textarea 로 노출 ?>
						</div>
						<span id="char_count"></span>글자
					</td>
				</tr>
				
				<tr>
					<th><label for="wr_content">노출페이지<strong class="sound_only">필수</strong></label></th>
					<td class="w_bo_w">
                        <div style="display:flex; flex-wrap:wrap; align-items: flex-start; justify-content: flex-start;">
                            <?php for($i=0;$row=sql_fetch_array($qry);$i++){ ?>
                            <label><input type="checkbox" name="ch_wr_5[]" value="<?=$row['me_code']?>" ><?=$row['me_name']?></label>
                            <? } ?>
                            <script>
                                var f2 = document.fwrite;
                                var str2=",<?php echo $write[wr_5]?>,";
                                for (var j=0; j<f2.length; j++) {
                                    if (f2.elements[j].name == "ch_wr_5[]") {
                                        if (str2.indexOf(','+f2.elements[j].value+',')>=0) {
                                            f2.elements[j].checked = true;
                                        }
                                    }
                                }
                            </script>
                        </div>
                    </td>
				</tr>
                <!--
				<?php for ($i=1; $is_link && $i<=G5_LINK_COUNT; $i++) { ?>
				<tr>
					<th><label for="wr_link<?php echo $i ?>"><span> 링크  #<?php echo $i ?></span></label></th>
					<td>
						<input type="text" name="wr_link<?php echo $i ?>" value="<?php if($w=="u"){ echo $write['wr_link'.$i]; } ?>" id="wr_link<?php echo $i ?>" class="frm_input full_input" size="50">
					</td>
				</tr>
				<?php } ?>
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

	<p class="form-submit" style="text-align:right;">
        <input type="submit" value="작성완료" id="btn_submit" class="real_btn" accesskey="s" class="submit" style="position: relative; display: inline-block; border-radius: 1px; background-color:#000; width:101px; height:30px; line-height:30px; text-align:center; padding:0; color: #fff; font-size: 12px; font-weight: 500; overflow: hidden; border: none;"/>
        <input type="button" value="취소" class="submit real_btn" onClick="location.href='javascript:history.back()'">
    </p>
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