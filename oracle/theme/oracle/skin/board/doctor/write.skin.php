<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

//add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/autoptimize_bbs.css">', 0);
?>
<link rel="stylesheet" href="<?php echo G5_JS_URL; ?>/font-awesome/css/font-awesome.min.css">

<style>
    
    .form-group{margin-bottom:0; height: 100%; display: flex;}
    .form-group > span{width: 180px; height: auto; background: #f3f3f3; border-bottom: 1px solid #e9e9e9; position: relative; padding: 0 15px; margin: 0; display: flex; align-items: center; font-weight: 600; font-size: 14px;}
    .theme-form .row::after, .theme-form .form-group::after{display:none;}
    .mt-3, .my-3{margin-top: 0 !important;}
    
    .col-6{padding: 10px 5px;}
    .comment-respond .form-control, .comments-form .form-control{height:100%; padding:5px 5px; border: 1px solid #ced9de !important; background:#f6f9fa !important; border-bottom: 1px solid #e9e9e9;}
    
    input[type="text"]{text-align:left !important;}
</style>

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
									
                                    <div class="theme-form mt-4">
                                        <div class="row">
                                            <?php if ($is_name) { ?>
                                            <div class="col-6">
                                                <input type="text" name="wr_name" id="wr_name" class="form-control field txt required" value="<?php echo $name ?>" placeholder="성함" required>
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
							
                                    <?php if ($is_category) { ?>
                                    <div class="theme-form mt-3">
                                        <div class="form-group">
                                            <span class="">근무지점</span>
                                            <div class='cont'>
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
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>
							
                                    <div class="theme-form mt-3">
                                        <div class="form-group">
                                            <span class=""><label for="wr_good">노출순서</label></span>
                                            <div class='cont'>
                                                <input style="width:auto;" type="text" name="wr_good" id="wr_good" class="frm_input" value="<?php echo $wr_good ?>" placeholder="노출순서" required>
                                                <p class="fz_14 ls_2 lh_16 normal m_5" style="width:80%; color:#ff0000;">★ 노출순서는 숫자가 낮은 순으로 보여지며 기본값은 0 입니다. 0 을 입력한 뒤 업로드하시면 업로드 순서대로 보여지며 노출순서는 관리자페이지에서 업로드 시에만 적용이 가능하며 홈페이지에서 바로 업로드 할 경우 기본값인 0으로 자동설정이 됩니다.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="theme-form mt-3">
                                        <div class="form-group">
                                            <span class="">이름</span>
                                            <div class='cont'>
                                                <input type="text" name="wr_subject" value="<?php echo $subject ?>" id="wr_subject" class="form-control field txt required" placeholder="이름" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="theme-form mt-3">
                                        <div class="form-group">
                                            <span class="">직책1</span>
                                            <div class='cont'>
                                                <input type="text" name="wr_2" value="<?php echo $write['wr_2']?>" id="wr_2" class="form-control field txt required" placeholder="ex) 대표원장 & 원장" required>
                                                <label for="wr_2">ex) 대표원장</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="theme-form mt-3">
                                        <div class="form-group">
                                            <span class="">직책2</span>
                                            <div class='cont'>
                                                <input type="text" name="wr_1" value="<?php echo $write['wr_1']?>" id="wr_1" class="form-control field txt required" placeholder="ex) 피부과전문의" required>
                                                <label for="wr_1">ex) 피부과전문의</label>
                                            </div>
                                        </div>
                                    </div>
							
                                    <style>
                                        textarea {background-color:#f3f3f3; border:0px;}
                                        .cke_sc{display:none;}
                                    </style>

                                    <div class="theme-form mt-3">
                                        <div class="form-group w_bo_edit <?php echo $is_dhtml_editor ? $config['cf_editor'] : ''; ?>">
                                            <!-- <div class="form-group w_bo_edit<?php echo $is_dhtml_editor ? $config['cf_editor'] : ''; ?>" class="form-control txt"> -->
                                            <span class="">약력</span>
                                            <div class="cont">
                                                <?php echo $editor_html; // 에디터 사용시는 에디터로, 아니면 textarea 로 노출 ?>
                                            </div>
                                        </div>
                                    </div>
							
                                    <?php for ($i=0; $is_file && $i<$file_count; $i++) { ?>
                                    <?php if ($i==0) { ?>
                                    <div class="theme-form mt-3">
                                        <div class="form-group">
                                            <span class="">썸네일 이미지</span>

                                            <div class="cont">
                                                <input type="file" name="bf_file[]" id="bf_file_<?php echo $i+1 ?>" title="파일첨부 <?php echo $i+1 ?> : 용량 <?php echo $upload_max_filesize ?> 이하만 업로드 가능" class="form-control field txt" style="line-height:32px;">
                                                <?php if($w == 'u' && $file[$i]['file']) { ?>
                                                <span class="file_del" style="font-size:11px;">
                                                    <input type="checkbox" id="bf_file_del<?php echo $i ?>" name="bf_file_del[<?php echo $i;  ?>]" value="1"> <label for="bf_file_del<?php echo $i ?>"><?php echo $file[$i]['source'].'('.$file[$i]['size'].')';  ?></label>
                                                </span>
                                                <?php } ?>
                                                <span class="fz_14 ls_2 lh_16 normal m_5" style="color:#ff0000;">★ 이미지는 꼭 가로 : 360px , 세로 : 540px 사이즈로 된 이미지로 등록해주시기 바랍니다.</span>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                    <?php } ?>
                                    <!--
                                    <?php for ($i=1; $is_file && $i<$file_count; $i++) { ?>
                                    <div class="theme-form mt-3">
                                        <div class="form-group">
                                        <span class="">팝업 썸네일 이미지</span>
                                        <div class="cont">
                                            <input type="file" name="bf_file[]" id="bf_file_<?php echo $i+2 ?>" title="파일첨부 <?php echo $i+2 ?> : 용량 <?php echo $upload_max_filesize ?> 이하만 업로드 가능" class="form-control field txt" style="line-height:32px;">
                                        </div>
                                        </div>
                                        <?php if($w == 'u' && $file[$i]['file']) { ?>
                                            <span class="file_del" style="font-size:11px;">
                                                <input type="checkbox" id="bf_file_del<?php echo $i ?>" name="bf_file_del[<?php echo $i;  ?>]" value="1"> <label for="bf_file_del<?php echo $i ?>"><?php echo $file[$i]['source'].'('.$file[$i]['size'].')';  ?> 파일 삭제</label>
                                            </span>
                                            <?php } ?>
                                    </div>
                                    <?php } ?>
                                    -->
                                    <?php if ($is_use_captcha) { //자동등록방지  ?>
                                    <div class="form-group">
                                        <?php echo $captcha_html ?>
                                    </div>
                                    <?php } ?>
                                    
                                    
                                    <p class="form-submit">
                                        <input type="submit" value="작성완료" id="btn_submit" class="real_btn" accesskey="s" class="submit" style="position: relative; display: inline-block; border-radius: 1px; background-color:#000; width:101px; height:30px; line-height:30px; text-align:center; padding:0; color: #fff; font-size: 12px; font-weight: 500; overflow: hidden; border: none;"/>
                                        <input type="button" value="취소" class="submit real_btn" onClick="location.href='javascript:history.back()'">
                                    </p>
                                    
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
