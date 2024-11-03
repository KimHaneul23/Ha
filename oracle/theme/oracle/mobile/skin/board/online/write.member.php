<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가


// 웹사이트 타이틀
$g5['title'] = '온라인상담';

include_once(G5_PATH.'/head.php');


// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
//add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);

?>
<link rel="stylesheet" href="<?php echo G5_THEME_URL;?>/skin/board/online/style.css">


<style>
    .re_textarea{width:100%;}
    
    #autosave_wrapper > input[id=mail]{display:none;}
    #autosave_wrapper > label[for=mail]{display:none;}
</style>
<script>
    $(document).ready(function(){
        $('.main-header').removeClass('color_change');
        $('.ht-inner').removeClass('sub_header');
    });
    
    $(function() {
        var location = document.querySelector("#href_id").offsetTop;
        window.scrollTo({top:location + 0, behavior:'smooth'});
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
<!-- <?php if ($is_category) { ?>
<nav id="bo_cate">
	<ul id="bo_cate_ul">
		<?php
		// 분류 사용 여부
		$is_category = false;
		$category_option = '';
		if ($board['bo_use_category']) {
			$is_category = true;
			$category_href = G5_BBS_URL.'/board.php?bo_table='.$bo_table;

			//$category_option .= '<li';
			$category_option .= '<li';
			if ($sca=='')
				$category_option .= ' id="bo_cate_on"';
			//$category_option .= '>전체</a></li>';
			$category_option .= '><a href="'.$category_href.'">전체</a></li>';

			$categories = explode('|', $board['bo_category_list']); // 구분자가 , 로 되어 있음
			for ($i=0; $i<count($categories); $i++) {
				$category = trim($categories[$i]);
				if ($category=='') continue;
				//$category_option .= '<li><a href="'.($category_href."&amp;sca=".urlencode($category)).'"';
				$category_option .= '<li';
				$category_msg = '';
				if ($category==$sca) { // 현재 선택된 카테고리라면
					$category_option .= ' id="bo_cate_on"';
					$category_msg = '<span class="sound_only">열린 분류 </span>';
				} 
				$count = count($categories) - 1;
				if ($i == $count){
					$category_option .= ' class="bo_cate_ul_li_last"';
				}
				$category_option .= '><a href="'.($category_href."&amp;sca=".urlencode($category)).'">'.$category_msg.$category.'</a></li>';
			}
		}
		
		echo $category_option;
		?>
	</ul>
</nav>
<?php } ?> -->
<!-- } 게시판 카테고리 끝 -->
<div class="bo_fx"></div>
<!-- 게시물 읽기 시작 { -->
<section id="bo_w" >
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
	<?php	if ($wr_20 == 'mobile' && $w == 'u'){ ?>
		<input type="hidden" name="wr_10" value="mobile">
	<?php } } ?>
	<input type="hidden" name="wr_6" value="Y">
	<input type="hidden" name="wr_7" value="확인중">
	<input type="hidden" name="wr_11" value="N">
	<input type="hidden" name="wr_12" value="N">
	<input type="hidden" name="type" value="member">

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
                $option .= "\n".'<input type="checkbox" id="secret" name="secret" value="secret" '.$secret_checked.' style="border:0">'."\n".'<label for="secret">비밀</label>';
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
	<?php if($w != 'u') {?>
	<div class="mbskin">
		<section id="fregister_private">
			<h2 class="mbskin_h2">
				<img src="<?php echo G5_URL ?>/img/write_chk_img.png" alt=""/>
				개인정보처리방침안내
			</h2>
			<textarea readonly><?php echo get_text($config['cf_privacy']) ?></textarea>
			<fieldset class="fregister_agree">
				<input type="checkbox" name="agree2" value="1" id="agree21" style="display:inline;">
				<label for="agree21" style="display:inline; vertical-align: top;">개인정보처리방침에 동의합니다.</label>
				<!-- &nbsp;&nbsp;&nbsp;&nbsp;
				<input type="radio" name="agree2" value="0" id="agree22">
				<label for="agree22">동의하지 않습니다.</label> -->
			</fieldset>
		</section>
	</div>
	<?php } ?>
	
	<h2 class="bbs_h2">
		<img src="<?php echo G5_URL ?>/img/write_chk_img.png" alt=""/>
        <?php if($is_admin) {?>
            답변 등록 <p style="font-size:14px; font-weight:600; color:#ff0000; margin:10px 0;">★ 답변 등록 시 답변 부분이 아닌 상담내용을 수정할 경우 이용자가 남긴 상담내용이 수정되기때문에 답변 시 상담 내용은 절대 수정하지 마세요!</p>
        <?php } else if($is_member){ ?>
            상담글 등록
        <?php } else if($is_guest){ ?>
            상담글 등록
        <?php } else { ?>
            상담글 등록
        <?php } ?>
	</h2>
	
	<p><span style="color:red">*</span> 필수 입력항목</p>
    <div class="bbs_head02 bbs_wrap online-consulting-form">
        <table>
        <tbody>
		<?php if ($is_name) { ?>
		<tr>
            <th scope="row"><label for="wr_name">이름 <span style="color:red">*</span><strong class="sound_only">필수</strong></label></th>
            <td <?php if($is_admin) echo "colspan='3'"; ?>><input type="text" name="wr_name" value="<?php echo $name ?>" id="wr_name" required class="frm_input required" size="29" maxlength="20"></td>
        </tr>
		<?php } ?>
		<?php if ($is_password) { ?>
        <tr>
			<th scope="row"><label for="wr_password">비밀번호 <span style="color:red">*</span><strong class="sound_only">필수</strong></label></th>
			<td>
				<input type="password" name="wr_password" id="wr_password" <?php echo $password_required ?> class="frm_input <?php echo $password_required ?>" size="29" maxlength="20">
			</td>
        </tr>
		<?php } ?>
		<?php if ($is_category) { ?>
        <tr>
            <th scope="row"><label for="ca_name">분류 <span style="color:red">*</span><strong class="sound_only">필수</strong></label></th>
            <td <?php if($is_admin) echo "colspan='3'"; ?>>
				<?php
				if ($is_admin) $board[bo_category_list] = $board[bo_category_list] . "|공지"; //뒤에 공지 넣기 
				$cate_menu = explode("|",$board['bo_category_list']);
				
				$cnt= count($cate_menu);

				for($c=0; $c<$cnt; $c++){
					echo "<label class='cate_menu'><input type='radio' name='ca_name' class='ca_name_radio' value='$cate_menu[$c]'";
					
					if($ca_name == $cate_menu[$c]) {
						echo " checked='checked'";
					}
					echo "><span class='ico_radio'></span>".$cate_menu[$c]."</label>";
				}
				?>
            </td>
        </tr>
        <?php } ?>
		<tr>
			<th scope="row"><label for="wr_2">휴대전화 <span style="color:red">*</span></label></th>
			<td>
				<?php
				$member_hp = explode("-", $member['mb_hp']);

				if($w != 'u') {
				?>
				<select name="wr_2" id="wr_2">
					<option value="010" <?php if($member_hp[0] == '010') echo "selected='selected'"; ?>>010</option>
					<option value="011" <?php if($member_hp[0] == '011') echo "selected='selected'"; ?>>011</option>
					<option value="016" <?php if($member_hp[0] == '016') echo "selected='selected'"; ?>>016</option>
					<option value="017" <?php if($member_hp[0] == '017') echo "selected='selected'"; ?>>017</option>
					<option value="018" <?php if($member_hp[0] == '018') echo "selected='selected'"; ?>>018</option>
					<option value="019" <?php if($member_hp[0] == '019') echo "selected='selected'"; ?>>019</option>
				</select>&nbsp;&nbsp;-&nbsp;&nbsp;
				<input type="input" name="wr_3" id="wr_3" class="frm_input" size="10" value="<?php echo $member_hp[1]; ?>" maxlength="4">&nbsp;&nbsp;-&nbsp;&nbsp;
				<input type="input" name="wr_4" id="wr_4" class="frm_input" size="10" value="<?php echo $member_hp[2]; ?>" maxlength="4">

				<?php } else { ?>

				<select name="wr_2" id="wr_2">
					<option value="010" <?php if($write['wr_2'] == '010') echo "selected='selected'"; ?>>010</option>
					<option value="011" <?php if($write['wr_2'] == '011') echo "selected='selected'"; ?>>011</option>
					<option value="016" <?php if($write['wr_2'] == '016') echo "selected='selected'"; ?>>016</option>
					<option value="017" <?php if($write['wr_2'] == '017') echo "selected='selected'"; ?>>017</option>
					<option value="018" <?php if($write['wr_2'] == '018') echo "selected='selected'"; ?>>018</option>
					<option value="019" <?php if($write['wr_2'] == '019') echo "selected='selected'"; ?>>019</option>
				</select>&nbsp;&nbsp;-&nbsp;&nbsp;
				<input type="input" name="wr_3" id="wr_3" class="frm_input" size="10" value="<?php echo $write['wr_3']; ?>" maxlength="4">&nbsp;&nbsp;-&nbsp;&nbsp;
				<input type="input" name="wr_4" id="wr_4" class="frm_input" size="10" value="<?php echo $write['wr_4']; ?>" maxlength="4">

				<?php } ?>
				<!--
				<input type="checkbox" id="wr_11" name="wr_11" value="Y" checked <?php if($write['wr_11'] == 'Y') echo "checked='checked'";?> style="border:0; vertical-align:middle;">
				<label for="wr_11">답변문자전송</label>
				-->
			</td>
        </tr>
        <tr>
            <th scope="row"><label for="wr_email">이메일 <span style="color:red">*</span></label></th>
            <td <?php if($is_admin) echo "colspan='3'"; ?>>
				<?php
				$member_email = explode("@", $member['mb_email']);

				if($w != 'u') {
				?>
				<input type="input" name="wr_13" id="wr_13" class="frm_input" size="20" value="<?php echo $member_email[0]; ?>" maxlength="20">&nbsp;&nbsp;@&nbsp;&nbsp;
				<input type="input" name="wr_5" id="wr_5" class="frm_input" size="20" value="<?php echo $member_email[1]; ?>" maxlength="20">
				<?php } else { ?>

				<input type="input" name="wr_13" id="wr_13" class="frm_input" size="20" value="<?php echo $write['wr_13']; ?>" maxlength="20">&nbsp;&nbsp;@&nbsp;&nbsp;
				<input type="input" name="wr_5" id="wr_5" class="frm_input" size="20" value="<?php echo $write['wr_5']; ?>" maxlength="20">
				<?php } ?>

				<select name="wr_5_select" id="wr_5_select">
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
				</script>
				<!--
				<input type="checkbox" id="wr_12" name="wr_12" value="Y" style="vertical-align:middle;"> 
				<label for="wr_12">답변메일받기</label>
				-->
			</td>
        </tr>
        <tr>
            <th scope="row"><label for="wr_subject">제목 <span style="color:red">*</span><strong class="sound_only">필수</strong></label></th>
            <td <?php if($is_admin) echo "colspan='3'"; ?>>
                <div id="autosave_wrapper">
                    <input type="text" name="wr_subject" value="<?php echo $subject ?>" id="wr_subject" required class="frm_input required" size="80" maxlength="255">
                    
					<?php echo $option ?>
                    
                </div>
            </td>
        </tr>

        <tr>
            <th scope="row"><label for="wr_content">상담내용 <span style="color:red">*</span><strong class="sound_only">필수</strong></label></th>
            <td class="wr_content" <?php if($is_admin) echo "colspan='3'"; ?>>
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

        <?php for ($i=0; $is_file && $i<=$file['count'];$i++) { ?>
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
		<?php } ?>
		
		<?php if ($is_admin) { ?>
		<tr style="opacity:0; visibility: collapse;">
			<th scope="row"><label for="wr_hit">답변상태</label></th> 
			<td class="td_half">
				<label><input type="radio" name="wr_7" value="답변완료" <?php echo "checked='checked'";?>>&nbsp;답변완료</label>&nbsp;&nbsp;&nbsp;
			</td>
			
			<th scope="row"><label for="wr_hit">답변일</label></th>
			<td class="td_half"><?php echo $write['wr_8'] ?></td>
			
		</tr>
		<tr>
            <th scope="row"><label for="wr_9">답변</label></th>
            <td class="wr_content" colspan='3'>
				<!--
				<div style="margin-bottom:8px">
					답변하기 &nbsp;&nbsp;&nbsp;<a href="javascript:reply_box();"><img src="<?php echo G5_URL ?>/img/reply_box_reply.png" alt="답변함"></a>
					<select name="sfl2" id="sfl2">
						<option value="wr_name"<?php echo get_selected($sfl, 'wr_name', true); ?>>이름</option>
						<option value="wr_subject"<?php echo get_selected($sfl, 'wr_subject', true); ?>>제목</option>
						<option value="wr_content"<?php echo get_selected($sfl, 'wr_content'); ?>>내용</option>
					</select>
					<label for="stx" class="sound_only">검색어<strong class="sound_only"> 필수</strong></label>
					<input type="text" name="stx2" value="<?php echo stripslashes($stx) ?>" id="stx2" class="frm_input" size="15" maxlength="20">
					<img src="<?php echo G5_URL ?>/img/list_search.png" alt="검색" onclick="javascript:reply_search()">
				</div>
                -->
                <textarea name="wr_9" id="wr_9" class="re_textarea"><?php if($write['wr_9'] != '' || $write['wr_9'] != null ){ echo $write['wr_9']; } else { echo ""; } ?></textarea>
				<!--<img src="<?php echo G5_URL ?>/img/view_reply.png" alt="답변하기" style="vertical-align:bottom;cursor:pointer" onclick="wr_9_send()"/>-->
            </td>
        </tr>
        <?php } ?>
        
        <?php if ($is_guest) { //자동등록방지  ?>
        <tr>
            <th scope="row">자동등록방지 <span style="color:red">*</span></th>
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
        <a href="<?php echo G5_BBS_URL?>/board.php?bo_table=online#href_id"><img src="<?php echo G5_URL ?>/img/write_cancel.png" alt="취소" style="height:33px;" /></a>
    </div>
	</form>

<!-- Event snippet for 온라인상담 conversion page -->
<script>
  gtag('event', 'conversion', {'send_to': 'AW-590741098/4_icCM3PysgCEOr815kC'});
</script>

<!-- 전환페이지 설정 -->
<script type="text/javascript" src="//wcs.naver.net/wcslog.js"></script> 
<script type="text/javascript"> 
var _nasa={};
_nasa["cnv"] = wcs.cnv("4","1"); // 전환유형, 전환가치 설정해야함. 설치매뉴얼 참고
</script> 

<!-- 공통 적용 스크립트 , 모든 페이지에 노출되도록 설치. 단 전환페이지 설정값보다 항상 하단에 위치해야함 --> 
<script type="text/javascript" src="//wcs.naver.net/wcslog.js"> </script> 
<script type="text/javascript"> 
if (!wcs_add) var wcs_add={};
wcs_add["wa"] = "s_2bccd1331d6a";
if (!_nasa) var _nasa={};
wcs.inflow();
wcs_do(_nasa);
</script>

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

	// 첨부파일 추가.
	$('.bbs_head02 table .fwzadd').on('click',(function() {
		addFileInput();
		bf_file_text();
	}));

	// 첨부파일 삭제.
	$(document).on('click',".bbs_head02 table .fwzdel",(function() {
		$(this).parents("tr:first").remove();
	}));
});
</script>
</section>
<!-- } 게시물 작성/수정 끝 -->

</div>
</article>
</main>
<!-- //main -->

<?php
include_once(G5_PATH.'/tail.php');
?>
