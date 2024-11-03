<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// 웹사이트 타이틀
$g5['title'] = '치료 전후사진';

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/autoptimize_bbs.css">', 0);
?>

<main id="content">
    
    <article class="sub_top_cont sub6_2_top_cont" id="startContent">
        <div class="sub_top_cont_wrap">
            <div class="sub_top_view_bg sub6_2_top_view_bg"></div>
            <div class="sub_top_text sub_titlebox ta_c">
                <p class="txt01 reveal fade-up delay_200 fz_17 lh_16 sortsmillgoudy normal">
                    BEFORE & AFTER
                </p>
                <p class="txt02 reveal fade-up delay_200 fz_30 lh_16 kopubworlddotum semibold">
                    치료 전후사진
                </p>
                <p class="txt03 reveal fade-up delay_400 fz_19 ls_p2 lh_16 kopubworlddotum normal">
                    결과로 증명하는 <br class="m_cont_480">인터서울치과의 전문성을 직접 확인하세요.
                </p>
            </div>
        </div>
    </article>
    
    <article id="href_id" class="sub_cont_wrap s62_c01_wrap">
        
        <style>
            .sv_member {color:#000 !important;}
            #bo_w{padding:4rem 0;}
        </style>

        <script>
            $(document).ready(function(){
                $('.main-header').removeClass('color_change');
                $('.ht-inner').removeClass('sub_header');
            });

            $(function() {
                var location = document.querySelector("#review").offsetTop;
                window.scrollTo({top:location - 100, behavior:'smooth'});
            }); 
        </script>

        <section id="bo_w">
            <h2 id="container_title"><?php echo $g5['title'] ?></h2>

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
                    $option .= "\n".'<input type="checkbox" id="notice" name="notice" value="1" style="display:inline-block; width:16px; min-width:auto; height:16px;" '.$notice_checked.'>'."\n".'<label for="notice">베스트</label>';
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

            <div class="tbl_frm01 tbl_wrap">
                <table>
                <tbody>
                <?php if ($is_name) { ?>
                <tr>
                    <th scope="row"><label for="wr_name">이름 <span style="color:red">*</span><strong class="sound_only"> 필수</strong></label></th>
                    <td><input type="text" name="wr_name" value="<?php echo $name ?>" id="wr_name" required class="frm_input required" size="10" maxlength="20"></td>
                </tr>
                <?php } ?>

                <?php if ($is_password) { ?>
                <tr>
                    <th scope="row"><label for="wr_password">비밀번호 <span style="color:red">*</span><strong class="sound_only"> 필수</strong></label></th>
                    <td><input type="password" name="wr_password" id="wr_password" <?php echo $password_required ?> class="frm_input <?php echo $password_required ?>" maxlength="20"></td>
                </tr>
                <?php } ?>

                <?php if ($is_email) { ?>
                <tr>
                    <th scope="row"><label for="wr_email">이메일</label></th>
                    <td><input type="text" name="wr_email" value="<?php echo $email ?>" id="wr_email" class="frm_input email" size="50" maxlength="100"></td>
                </tr>
                <?php } ?>

                <?php if ($is_homepage) { ?>
                <tr>
                    <th scope="row"><label for="wr_homepage">홈페이지</label></th>
                    <td><input type="text" name="wr_homepage" value="<?php echo $homepage ?>" id="wr_homepage" class="frm_input" size="50"></td>
                </tr>
                <?php } ?>

                <?php if ($is_category) { ?>
                <tr>
                    <th><label for="ca_name">분류 <span style="color:red">*</span><strong class="sound_only">필수</strong></label></th>
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
                        <p class="fz_14 ls_2 lh_16 normal m_5" style="color:#ff0000;">★ 복수 선택이 가능합니다.</p>
                    </td>
                </tr>
                <?php } ?>
                <!--
                <tr>
                    <th scope="row"><label for="wr_1">분류 <span style="color:red">*</span><strong class="sound_only">필수</strong></label></th>
                    <td>
                        <div id="autosave_wrapper">
                            <input type="text" name="wr_1" value="<?php echo $wr_1 ?>" id="wr_1" required class="frm_input required" size="50" maxlength="255">
                        </div>
                    </td>
                </tr>
                -->

                <tr>
                    <th scope="row"><label for="wr_subject">제목 <span style="color:red">*</span><strong class="sound_only">필수</strong></label></th>
                    <td>
                        <div id="autosave_wrapper">
                            <input type="text" name="wr_subject" value="<?php echo $subject ?>" id="wr_subject" required class="frm_input required" size="50" maxlength="255">
                        </div>
                    </td>
                </tr>

                <tr>
                    <th scope="row"><label for="wr_content">내용 <span style="color:red">*</span><strong class="sound_only">필수</strong></label></th>
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
                <style>
                    .cke_sc{display:none !important;}
                </style>
                <!--
                <?php for ($i=1; $is_link && $i<=G5_LINK_COUNT; $i++) { ?>
                <tr>
                    <th scope="row"><label for="wr_link<?php echo $i ?>">링크 #<?php echo $i ?></label></th>
                    <td><input type="text" name="wr_link<?php echo $i ?>" value="<?php if($w=="u"){echo$write['wr_link'.$i];} ?>" id="wr_link<?php echo $i ?>" class="frm_input" size="50"></td>
                </tr>
                <?php } ?>
                -->
                <tr>
                    <th scope="row"><label for="bf_file_1">Before 이미지 <span style="color:red">*</span><strong class="sound_only">필수</strong></label></th>
                    <td>
                        <p class="fz_14 ls_2 lh_16 normal m_5" style="color:#ff0000;">★ 이미지는 가로 : 436px , 세로 : 258px 로 등록해주시기 바랍니다.</p>
                        <p class="fz_14 ls_2 lh_16 normal m_10" style="width:60%; color:#ff0000;">이미지 사이즈 같은 경우 비율에 맞게 자동으로 사이즈가 변환되기 때문에 가로, 세로 사이즈가 위 사이즈보다 크거나 비율이 다를 경우 이미지에 짤리는 부분이 생기거나 이미지가 깨져보일 수 있습니다.</p>
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
                    <th scope="row"><label for="bf_file_2">After 이미지 <span style="color:red">*</span><strong class="sound_only">필수</strong></label></th>
                    <td>
                        <p class="fz_14 ls_2 lh_16 normal m_5" style="color:#ff0000;">★ 이미지는 가로 : 436px , 세로 : 258px 로 등록해주시기 바랍니다.</p>
                        <p class="fz_14 ls_2 lh_16 normal m_10" style="width:60%; color:#ff0000;">이미지 사이즈 같은 경우 비율에 맞게 자동으로 사이즈가 변환되기 때문에 가로, 세로 사이즈가 위 사이즈보다 크거나 비율이 다를 경우 이미지에 짤리는 부분이 생기거나 이미지가 깨져보일 수 있습니다.</p>
                        <div class="cont">
                            <input type="file" name="bf_file[]" id="bf_file_2" title="파일첨부 2 : 용량 <?php echo $upload_max_filesize ?> 이하만 업로드 가능" class="form-control field txt" style="line-height:32px;">
                        </div>
                        <?php //if ($is_file_content) { ?>
                        <!--<input type="hidden" name="bf_content[]" value="after" placeholder="파일 설명을 입력해주세요." class="frm_file frm_input" size="50">-->
                        <?php //} ?>
                        <?php if($w == 'u' && $file[1]['file']) { ?>
                        <span class="file_del" style="font-size:11px;">
                            <input type="checkbox" id="bf_file_del1" name="bf_file_del[1]" value="2"> <label for="bf_file_del1"><?php echo $file[1]['source'].'('.$file[1]['size'].')';  ?> 파일 삭제</label>
                        </span>
                        <?php } ?>
                    </td>
                </tr>

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
                <input type="submit" value="작성완료" id="btn_submit" accesskey="s" class="btn_submit">
                <a href="javascript:history.go(-1);" class="btn_cancel">취소</a>
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
            </script>
        </section>
        <!-- } 게시물 작성/수정 끝 -->
    
    </article>
</main>
<!-- //main -->

<?php
include_once(G5_PATH.'/tail.php');
?>