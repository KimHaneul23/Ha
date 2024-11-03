<?php
$sub_menu = '100310';
include_once('./_common.php');
include_once(G5_EDITOR_LIB);

$hd_menu_code = 1;
$menu_left_code = 106;

//auth_check($auth[$sub_menu], "w");

$nw_id = isset($_REQUEST['nw_id']) ? preg_replace('/[^0-9]/', '', $_REQUEST['nw_id']) : 0;
$nw = array(
'nw_sort'=>'',
'nw_device'=>'',
'nw_begin_time'=>'',
'nw_end_time'=>'',
'nw_subject'=>'',
'nw_content'=>'',
'nw_division'=>'',
'nw_href'=>'',
);

$html_title = "팝업레이어";
if ($w == "u")
{
    $html_title .= " 수정";
    $sql = " select * from {$g5['new_win_table']} where nw_id = '$nw_id' ";
    $nw = sql_fetch($sql);
    if (!$nw['nw_id']) alert("등록된 자료가 없습니다.");
}
else
{
    $html_title .= " 입력";
    $nw['nw_sort'] = '0';
    $nw['nw_device'] = 'pc';
    $nw['nw_disable_hours'] = 24;
    $nw['nw_left']   = 10;
    $nw['nw_top']    = 10;
    $nw['nw_width']  = 450;
    $nw['nw_height'] = 500;
    $nw['nw_content_html'] = 2;
    $nw['nw_href'] = '';
}

$g5['title'] = $html_title;
include_once ('./head.php');
include_once(G5_PATH.'/admin/admin.lib.php');
?>


<style>
    .cke_sc{display:none;}
    
    input[type="checkbox"], input[type="radio"]{display:inline-block; width: 15px; min-width:auto; height: 15px; margin: 0 4px 0 10px;}
    input, select{min-width:auto; height:auto;}
    select#nw_device{height:34px; position: relative; }
    select#nw_device::before{content:"▼"; position:absolute; top: 50%; right: 0; width: 10px; font-size: 1rem; height: 10px; display: block; color: #000;}

    select#nw_device > option{font-size:0.8rem; padding-left:5px;}
    
    select#nw_jijeom{height:34px; position: relative; }
    select#nw_jijeom::before{content:"▼"; position:absolute; top: 50%; right: 0; width: 10px; font-size: 1rem; height: 10px; display: block; color: #000;}

    select#nw_jijeom > option{font-size:0.8rem; padding-left:5px;}
</style>
<div id="wrapper">
    
	<div id="admin_menu_left">
		<?php //include_once('./admin.menu.left200.php'); ?>
	</div>
   
    <div id="container" class="menu100_minheight">
		<div id="admin_right_wrap">
			<div class="admin_title">
				<img src="<?php echo G5_ADMIN_URL ?>/img/admin_title_bg.png" alt="●"/>
				<?=$g5['title']?>
			</div>
			<form name="frmnewwin" action="./newwinformupdate.php" onsubmit="return frmnewwin_check(this);" method="post">
			<input type="hidden" name="w" value="<?php echo $w; ?>">
			<input type="hidden" name="nw_id" value="<?php echo $nw_id; ?>">
			<input type="hidden" name="token" value="">
			<!--
			<div class="local_desc01 local_desc">
				<p>초기화면 접속 시 자동으로 뜰 팝업레이어를 설정합니다.</p>
			</div>
			-->
			<div class="tbl_head04">
				<table>
				<caption><?php echo $g5['title']; ?></caption>
				<colgroup>
					<col class="grid_4">
					<col>
				</colgroup>
				<tbody>
				<tr>
					<th scope="row"><label for="nw_device">접속기기</label></th>
					<td>
						<?php echo help("팝업레이어가 표시될 접속기기를 설정합니다."); ?>
						<select name="nw_device" id="nw_device">
							<option value="both"<?php echo get_selected($nw['nw_device'], 'both', true); ?>>PC와 모바일</option>
							<option value="pc"<?php echo get_selected($nw['nw_device'], 'pc'); ?>>PC</option>
							<option value="mobile"<?php echo get_selected($nw['nw_device'], 'mobile'); ?>>모바일</option>
						</select>
					</td>
				</tr>
				<tr class="hide">
					<th scope="row"><label for="nw_disable_hours">시간<strong class="sound_only"> 필수</strong></label></th>
					<td>
						<?php echo help("고객이 다시 보지 않음을 선택할 시 몇 시간동안 팝업레이어를 보여주지 않을지 설정합니다."); ?>
						<input type="text" name="nw_disable_hours" value="<?php echo $nw['nw_disable_hours']; ?>" id="nw_disable_hours" required class="frm_input required" size="5"> 시간
					</td>
				</tr>
				<tr>
					<th scope="row"><label for="nw_begin_time">시작일시<strong class="sound_only"> 필수</strong></label></th>
					<td>
						<input type="text" name="nw_begin_time" value="<?php echo $nw['nw_begin_time']; ?>" id="nw_begin_time" required class="frm_input required" size="21" maxlength="19">
						<input type="checkbox" name="nw_begin_chk" value="<?php echo date("Y-m-d 00:00:00", G5_SERVER_TIME); ?>" id="nw_begin_chk" onclick="if (this.checked == true) this.form.nw_begin_time.value=this.form.nw_begin_chk.value; else this.form.nw_begin_time.value = this.form.nw_begin_time.defaultValue;">
						<label for="nw_begin_chk">시작일시를 오늘로</label>
					</td>
				</tr>
				<tr>
					<th scope="row"><label for="nw_end_time">종료일시<strong class="sound_only"> 필수</strong></label></th>
					<td>
						<input type="text" name="nw_end_time" value="<?php echo $nw['nw_end_time']; ?>" id="nw_end_time" required class="frm_input required" size="21" maxlength="19">
						<input type="checkbox" name="nw_end_chk" value="<?php echo date("Y-m-d 23:59:59", G5_SERVER_TIME+(60*60*24*7)); ?>" id="nw_end_chk" onclick="if (this.checked == true) this.form.nw_end_time.value=this.form.nw_end_chk.value; else this.form.nw_end_time.value = this.form.nw_end_time.defaultValue;">
						<label for="nw_end_chk">종료일시를 오늘로부터 7일 후로</label>
					</td>
				</tr>
				<tr  class="hide">
					<th scope="row"><label for="nw_left">팝업레이어 좌측 위치<strong class="sound_only"> 필수</strong></label></th>
					<td>
					   <input type="text" name="nw_left" value="<?php echo $nw['nw_left']; ?>" id="nw_left" required class="frm_input required" size="5"> px
					</td>
				</tr>
				<tr  class="hide">
					<th scope="row"><label for="nw_top">팝업레이어 상단 위치<strong class="sound_only"> 필수</strong></label></th>
					<td>
						<input type="text" name="nw_top" value="<?php echo $nw['nw_top']; ?>" id="nw_top" required class="frm_input required"  size="5"> px
					</td>
				</tr>
				<tr class="hide">
					<th scope="row"><label for="nw_width">팝업레이어 넓이<strong class="sound_only"> 필수</strong></label></th>
					<td>
						<input type="text" name="nw_width" value="<?php echo $nw['nw_width'] ?>" id="nw_width" required class="frm_input required" size="5"> px
					</td>
				</tr>
				<tr class="hide">
					<th scope="row"><label for="nw_height">팝업레이어 높이<strong class="sound_only"> 필수</strong></label></th>
					<td>
						<input type="text" name="nw_height" value="<?php echo $nw['nw_height'] ?>" id="nw_height" required class="frm_input required" size="5"> px
					</td>
				</tr>
				<tr>
                    <th scope="row"><label for="nw_jijeom">지점명</label></th>
					<td>
						<select name="nw_jijeom" id="nw_jijeom" required>
						    <option value="" disabled selected>지점선택</option>
							<option value="공통"<?php echo get_selected($nw['nw_jijeom'], '공통'); ?>>공통</option>
							<option value="구월점"<?php echo get_selected($nw['nw_jijeom'], '구월점'); ?>>구월점</option>
							<option value="송도점"<?php echo get_selected($nw['nw_jijeom'], '송도점'); ?>>송도점</option>
						</select>
					</td>
                </tr>
				<tr>
					<th scope="row"><label for="nw_subject">팝업 제목<strong class="sound_only"> 필수</strong></label></th>
					<td>
						<input type="text" name="nw_subject" value="<?php echo stripslashes($nw['nw_subject']) ?>" id="nw_subject" required class="frm_input required" size="80">
					</td>
				</tr>
				<tr>
                    <th scope="row"><label for="nw_sort">노출순서</label></th>
                    <td>
                        <input type="text" name="nw_sort" value="<?php echo $nw['nw_sort'] ?>" id="nw_sort" class="frm_input" size="5">
                    </td>
                </tr>
                <tr>
                    <th scope="row"><label for="nw_href">링크<strong class="sound_only"> 필수</strong></label></th>
                    <td>
                        <input type="text" name="nw_href" value="<?php echo $nw['nw_href'] ?>" id="nw_href" class="frm_input" size="80">
                    </td>
                </tr>
				<tr>
					<th scope="row"><label for="nw_content">내용</label></th>
					<td>
                        <span class="frm_info" style="color:#ff0000;">pc 이미지 크기는 <strong>넓이 470 px, 높이 470 px</strong>로 해주세요.</span>
                        <span class="frm_info" style="color:#ff0000;">mobile 이미지 크기는 <strong>넓이 800 px, 높이 466 px</strong>로 해주세요.</span>
                        <?php echo editor_html('nw_content', get_text(html_purifier($nw['nw_content']), 0)); ?>
                    </td>
				</tr>
				</tbody>
				</table>
			</div>

			<div style="text-align:center;margin-top:10px">
				<input type="image" src="<?php echo G5_URL ?>/img/cont_confirm.png" value="확인" accesskey="s">
				<a href="./newwinlist.php"><img src="<?php echo G5_URL ?>/img/cont_list.png" alt="목록"></a>
			</div>
			</form>
		</div>
	</div>
</div>

<script>
function frmnewwin_check(f)
{
    errmsg = "";
    errfld = "";
    
    <?php echo get_editor_js('nw_content'); ?>
    
    check_field(f.nw_subject, "제목을 입력하세요.");
    
    $('#nw_jijeom').on('change', function() {
        var v = $(this).val();
        if (v == '') {
            alert('선택해 주세요.');
        }    
    });
    
    if (errmsg != "") {
        alert(errmsg);
        errfld.focus();
        return false;
    }
    return true;
}
</script>


<?php
//include_once (G5_ADMIN_PATH.'/admin.tail.php');
?>
