<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가


//add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/autoptimize_bbs.css">', 0);


//$Query = "SELECT * FROM g5_config where cf_theme=oracle";
//$Sql = mysql_query( $Query );
//$row = mysql_fetch_array( $Sql );

if($idx) {
	$sql = "select * from g5_write_youtube where wr_id = ".$idx;
	$row = sql_fetch($sql);
	$wr_5 = explode(',', $row['ch_wr_5']);
}

$sql = "select * from g5_menu where me_use = 1 and me_mobile_use = 1 order by me_code, me_order";
$qry = sql_query($sql);
?>
<link rel="stylesheet" href="<?php echo G5_JS_URL; ?>/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="<?php echo G5_THEME_URL;?>/skin/board/youtube_link/autoptimize_bbs.css">


<main id="content">
    <article class="sub_content01" id="startContent">
        <div id="href_id"></div>
        <div class="sub_top_view sub1_6_top_view">
            <div class="sub_top_view_bg sub1_6_top_view_bg"></div>
            <div class="sub_top_view_text_wrap sub1_6_top_view_text_wrap ta_c">
                <div class="sub_top_view_text01 sub1_6_top_view_text01 m_20">
                    <p class="fz_20 lh_14 ls_2 normal sub_text_ani ta_c">
                        오라뀨티비
                    </p>
                </div>
                <div class="sub_top_view_text02 sub1_6_top_view_text02">
                    <p class="fz_27 lh_14 ls_2 ta_c nanummyeongjo light sub_text_ani">
                        대한민국 2% 피부과전문의가 모여있는
                    </p>
                </div>
                <div class="sub_top_view_text03 sub1_6_top_view_text03">
                    <p class="fz_27 lh_14 ls_2 ta_c nanummyeongjo light sub_text_ani">
                        인천 오라클피부과
                    </p>
                </div>
            </div>
        </div>
    </article>
    
    <article class="sub_cont02 sub1_6_cont02 pd_60 bg_fa" id="youtube_list">
        <div class="sub1_6_youtube_list">

<style>
    .w_bo_title{padding:0 30px;}
    .page_chk{
        background: #f2f2f2;
        font-size: 14px;
        border: none;
        border-radius: 0;
        width: 100%;
        padding:10px 20px;
        line-height: 1;
        position: relative;
        font-weight: 400;
        letter-spacing: 0.7px;
    }
    .page_chk > label{padding:4px 4px;}
    .page_chk > label > input{margin-right:2px;}
</style>
<script>
    $(document).ready(function(){
        $('.main-header').removeClass('color_change');
        $('.ht-inner').removeClass('sub_header');
    });
    
    $(function() {
        var location = document.querySelector("#youtube_list").offsetTop;
        window.scrollTo({top:location - 100, behavior:'smooth'});
    }); 
</script>

<div id="bo_title" class="w_bo_title">
	<?php echo $board['bo_subject'] ?>
</div>

<div id="ajax-a" class="w_bo_w">
	<div class="ajax-b">
		<div class="main-content">
			<div class="section">
                <div class="container">
                    <div id="comments" class="item comments animated">
                        <div class="comments-form">
                            <div id="respond" class="comment-respond">
                                <form name="fwrite" id="fwrite" action="<?php echo $action_url ?>" onsubmit="return fwrite_submit(this);" method="post" enctype="multipart/form-data" autocomplete="off" style="width:<?php echo $width; ?>" class="comment-form">
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
											$option .= "\n".'<input type="checkbox" id="notice" name="notice" value="1" '.$notice_checked.'>'."\n".'<label for="notice">공지</label>';
										}

										if ($is_html) {
											if ($is_dhtml_editor) {
												$option_hidden .= '<input type="hidden" value="html1" name="html">';
											} else {
												$option .= "\n".'<input type="checkbox" id="html" name="html" onclick="html_auto_br(this);" value="'.$html_value.'" '.$html_checked.'>'."\n".'<label for="html">HTML</label>';
											}
										}

										if ($is_secret) {
											if ($is_admin || $is_secret==1) {
												$option .= "\n".'<input type="checkbox" id="secret" name="secret" value="secret" '.$secret_checked.'>'."\n".'<label for="secret">비밀글</label>';
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

							<div class="w_wrap">

							<div class="theme-form mt-4">
								<div class="row">
								<?php if ($is_name) { ?>
									<div class="col-6">
										<input type="text" name="wr_name" id="wr_name" class="form-control field txt required" value="<?php echo $name ?>" placeholder="성함" required>
									</div>
								<?php } ?>
								<?php if ($is_category) { ?>
									<div class="col-6">
										<select name="ca_name" id="ca_name" class="form-control field txt" required>
											<option value="">분류 선택</option>
											<?php echo $category_option ?>
										</select>
									</div>
								<?php } ?>
								</div>
							</div>

							<?php if ($is_password) { ?>
							<div class="theme-form mt-4">
								<div class="row">
								
									<div class="col-6">
										<input type="password" name="wr_password" id="wr_password" <?php echo $password_required ?> class="form-control field txt <?php echo $password_required ?> required" placeholder="비밀번호" required>
									</div>
							
							
									<div class="col-6">
										<input type="text" name="wr_email" value="<?php echo $email ?>" id="wr_email" class="form-control field txt email required" placeholder="이메일" required>
									</div>
								</div>
								
							</div>
							<?php } ?>

							<div class="theme-form mt-3">
								<div class="form-group">
									<span class="tit">제목</span>
									<div class='cont'>
										<input type="text" name="wr_subject" value="<?php echo $subject ?>" id="wr_subject" class="form-control field txt required" placeholder="제목" required>
									</div>
								</div>
							</div>

							<div class="theme-form mt-3">
								<div class="form-group" class="txt">
									<?php if ($option) { ?>
									<div class="write_div">
										<span class="sound_only">옵션</span>
										<?php echo $option ?>
									</div>
									<?php } ?>
								</div>
							</div>

							<div class="theme-form mt-3">
								<div class="form-group">
									<span class="tit">메인 노출</span>
									<div class='cont'>
										<label><input type="radio" name="wr_1" value="0" required <?php if($write['wr_1'] == '0' || $w != 'u') echo "checked='checked'"; ?> class="checkbox">&nbsp;Y</label>
										<label><input type="radio" name="wr_1" value="1" required <?php if($write['wr_1'] == '1') echo "checked='checked'"; ?> class="checkbox">&nbsp;N</label>
									</div>
								</div>
							</div>
							
							<style>
								textarea {background-color:#f3f3f3; border:0px;}
							</style>

							<div class="theme-form mt-3">
								<div class="form-group w_bo_edit <?php echo $is_dhtml_editor ? $config['cf_editor'] : ''; ?>">
									<span class="tit">내용</span>
									<div class="cont">
										<?php echo $editor_html; // 에디터 사용시는 에디터로, 아니면 textarea 로 노출 ?>
									</div>
								</div>
							</div>




							<!-- 유튜브 동영상 ID입력부분 -->
							<!--
							<div class="theme-form mt-3">
								<span class="df">유튜브 ID 예시) https://www.youtube.com/watch?v=<span class="dr">ID</span></span>
							</div>
							-->

							<div class="theme-form mt-0">
								<div class="form-group">
									<span class="tit">ID</span>
									<div class="cont">
										<input type="text" name="wr_10" value="<?php echo $write['wr_10'] ?>" class="form-control field txt" placeholder="유튜브 동영상 ID">
										<span class="df">유튜브 ID 예시) https://www.youtube.com/watch?v=<span class="dr">ID</span></span>
									</div>
									
								</div>
							</div>

							<!-- //유튜브 동영상 ID입력부분 -->



							
							<?php for ($i=1; $is_link && $i<=G5_LINK_COUNT; $i++) { ?>
							<div class="theme-form mt-3">
								<div class="form-group">
									<span class="tit">링크#<?php echo $i+1 ?></span>
									<div class="cont">
										<input type="text" name="wr_link<?php echo $i ?>" value="<?php if($w=="u"){echo$write['wr_link'.$i];} ?>" id="wr_link<?php echo $i ?>" class="form-control field txt" placeholder="링크">
									</div>
								</div>
							</div>
							<?php } ?>
							
							<?php for ($i=0; $is_file && $i<$file_count; $i++) { ?>
							<div class="theme-form mt-3">
								<div class="form-group">
									<span class="tit">파일#<?php echo $i+1 ?></span>
									<div class="cont">
										<input type="text" title="파일 첨부하기" class="bf_file_text"  readonly="readonly" size="29" style="color:#9c9c9c">
										<input type="file" name="bf_file[]" id="bf_file_<?php echo $i+1 ?>" title="파일첨부 <?php echo $i+1 ?> : 용량 <?php echo $upload_max_filesize ?> 이하만 업로드 가능" class="form-control field txt" style="line-height:32px; display:none">
										<label for="bf_file_<?php echo $i+1 ?>"><img src="<?php echo G5_URL ?>/img/write_file_search.png" alt="찾아보기" class="bf_file_search"/></label>
									</div>
								</div>
								<?php if($w == 'u' && $file[$i]['file']) { ?>
									<span class="file_del" style="font-size:11px;">
										<input type="checkbox" id="bf_file_del<?php echo $i ?>" name="bf_file_del[<?php echo $i;  ?>]" value="1"> <label for="bf_file_del<?php echo $i ?>"><?php echo $file[$i]['source'].'('.$file[$i]['size'].')';  ?> 파일 삭제</label>
									</span>
									<?php } ?>
							</div>
							<?php } ?>
							
							<div class="theme-form mt-3 mb-3">
                                <div class="form-group">
                                    <span class="tit">노출페이지</span>
                                    <div class="cont">
                                        <div class="page_chk" style="display:flex; flex-wrap:wrap; align-items: flex-start; justify-content: flex-start;">
                                        <?php for($i=0;$row=sql_fetch_array($qry);$i++){
                                            $checked = '';
                                                for($j=0;$j<count($wr_5);$j++) {
                                                    if($wr_5[$j]==$row['me_code']) $checked = 1;
                                                }?>
                                            <label><input type="checkbox" name="ch_wr_5[]" value="<?=$row['me_code']?>" <? echo $checked==1?'checked="checked"':'';?> ><?=$row['me_name']?></label>
                                        <?}?>
                                        </div>
                                    </div>
                                </div>
                            </div>

							<?php if ($is_use_captcha) { //자동등록방지  ?>
								<div class="form-group">
									<?php echo $captcha_html ?>
								</div>
							<?php } ?>



							</div>

							<div class="form-submit">
								<button id="btn_submit" style="border:0; padding:0;"><img src="<?php echo G5_URL ?>/img/write_ok.png" alt="작성완료"/></button>
								<!--<input type="submit" value="작성완료" id="btn_submit" accesskey="s" class="submit" style="background-color:#FF6666;"/>-->
								<a href="javascript:history.go(-1)"><img src="<?php echo G5_URL ?>/img/write_cancel.png" alt="취소"/></a>
								
							</div>

						</form>
					</div>
										
				</div>
			</div>
		</div>
	</div>

	</div>
	</div>
	</div>



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
    </script>




</div>
</article>
</main>
<!-- //main -->