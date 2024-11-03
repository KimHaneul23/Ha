<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
?>

<style>
    .cke_sc{display:none;}
    .link_input{width:50%;}
    .m_20{margin-bottom:20px;}
    
    .ranking_number{width:10%; padding:10px 0; text-align:center; color:#000; font-size:18px; font-weight:700; background:#f0f0f0; border-bottom:1px solid #f5f5f5;}
    .flex_box{display:flex; justify-content:flex-start; align-items:center;}
    .flex_box > .tit{width:10%; height:40px; line-height:40px; padding:0 0; text-align:center; color:#000; font-size:14px; font-weight:500; background:#f0f0f0; border:1px solid #f5f5f5;}
    .flex_box > .cont{width:40%; height:40px; line-height:40px; padding:0 20px; text-align:left; color:#000; font-size:12px; font-weight:400; background:#fff; border:1px solid #f5f5f5;}
    .flex_box > .cont > input{width:100%;}
    
</style>

<section id="bo_w">
    <h2 class="sound_only"><?php echo $g5['title'] ?></h2>

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
            $option .= PHP_EOL.'<li class="chk_box"><input type="checkbox" id="notice" name="notice"  class="selec_chk" value="1" '.$notice_checked.'>'.PHP_EOL.'<label for="notice"><span></span>공지</label></li>';
        }
        if ($is_html) {
            if ($is_dhtml_editor) {
                $option_hidden .= '<input type="hidden" value="html1" name="html">';
            } else {
                $option .= PHP_EOL.'<li class="chk_box"><input type="checkbox" id="html" name="html" onclick="html_auto_br(this);" class="selec_chk" value="'.$html_value.'" '.$html_checked.'>'.PHP_EOL.'<label for="html"><span></span>html</label></li>';
            }
        }
        if ($is_secret) {
            if ($is_admin || $is_secret==1) {
                $option .= PHP_EOL.'<li class="chk_box"><input type="checkbox" id="secret" name="secret"  class="selec_chk" value="secret" '.$secret_checked.'>'.PHP_EOL.'<label for="secret"><span></span>비밀글</label></li>';
            } else {
                $option_hidden .= '<input type="hidden" name="secret" value="secret">';
            }
        }
        if ($is_mail) {
            $option .= PHP_EOL.'<li class="chk_box"><input type="checkbox" id="mail" name="mail"  class="selec_chk" value="mail" '.$recv_email_checked.'>'.PHP_EOL.'<label for="mail"><span></span>답변메일받기</label></li>';
        }
    }
    echo $option_hidden;
    ?>
    
    <div class="bo_w_tit write_div m_20">
        <label for="wr_subject" class="sound_only">제목<strong>필수</strong></label>
        
        <div id="autosave_wrapper" class="write_div">
            <input type="text" name="wr_subject" value="<?php echo $subject ?>" id="wr_subject" required class="frm_input required" size="50" maxlength="255" placeholder="제목">
        </div>
    </div>

    <div class="write_div" style="opcity:0; width:0px; height:0px; border:0; margin:0; padding:0; background:none;">
        <label for="wr_content" class="sound_only">내용<strong>필수</strong></label>
        <textarea id="wr_content" name="wr_content" value="주간 BEST" class="" maxlength="65536" style="opcity:0; width:0px; height:0px; border:0; margin:0; padding:0; background:none;">피부질환</textarea>
    </div>
    
    <div class="theme-form mt-3 m_20">
        <div class="ranking_number">1위</div>
        <div class='flex_box'>
            <div class="tit">NEW ICON</div>
            <div class='cont'>
                <label>NEW</label>
                <input type="checkbox" name="wr_11" value="Y" id="wr_11" <?php if($write['wr_11'] == "Y"){echo "checked";}?> style="display:inline-block; width:16px; min-width:auto; height:16px;" class="form-control field txt" >
                <p style="display:inline-block; margin-left:5px; color:#ff0000; font-weight:700; font-size:12px;">체크 시 해당 순위에 NEW 아이콘이 생깁니다.</p>
            </div>
        </div>
        <div class='flex_box'>
            <div class="tit">진료명</div>
            <div class='cont'>
                <input type="text" name="wr_1" value="<?php echo $write['wr_1']?>" id="wr_1" class="form-control field txt required" required placeholder="진료명" >
            </div>
        </div>
        <div class='flex_box'>
            <div class="tit">링크</div>
            <div class='cont'>
                <input type="text" name="wr_2" value="<?php echo $write['wr_2']?>" id="wr_2" class="form-control field txt required link_input" required placeholder="연결 URL" >
            </div>
        </div>
    </div>
    <div class="theme-form mt-3 m_20">
        <div class="ranking_number">2위</div>
        <div class='flex_box'>
            <div class="tit">NEW ICON</div>
            <div class='cont'>
                <label>NEW</label>
                <input type="checkbox" name="wr_12" value="Y" id="wr_12" <?php if($write['wr_12'] == "Y"){echo "checked";}?> style="display:inline-block; width:16px; min-width:auto; height:16px;" class="form-control field txt" >
                <p style="display:inline-block; margin-left:5px; color:#ff0000; font-weight:700; font-size:12px;">체크 시 해당 순위에 NEW 아이콘이 생깁니다.</p>
            </div>
        </div>
        <div class='flex_box'>
            <div class="tit">진료명</div>
            <div class='cont'>
                <input type="text" name="wr_3" value="<?php echo $write['wr_3']?>" id="wr_3" class="form-control field txt required" required placeholder="진료명" >
            </div>
        </div>
        <div class='flex_box'>
            <div class="tit">링크</div>
            <div class='cont'>
                <input type="text" name="wr_4" value="<?php echo $write['wr_4']?>" id="wr_4" class="form-control field txt required link_input" required placeholder="연결 URL" >
            </div>
        </div>
    </div>
    <div class="theme-form mt-3 m_20">
        <div class="ranking_number">3위</div>
        <div class='flex_box'>
            <div class="tit">NEW ICON</div>
            <div class='cont'>
                <label>NEW</label>
                <input type="checkbox" name="wr_13" value="Y" id="wr_13" <?php if($write['wr_13'] == "Y"){echo "checked";}?> style="display:inline-block; width:16px; min-width:auto; height:16px;" class="form-control field txt" >
                <p style="display:inline-block; margin-left:5px; color:#ff0000; font-weight:700; font-size:12px;">체크 시 해당 순위에 NEW 아이콘이 생깁니다.</p>
            </div>
        </div>
        <div class='flex_box'>
            <div class="tit">진료명</div>
            <div class='cont'>
                <input type="text" name="wr_5" value="<?php echo $write['wr_5']?>" id="wr_5" class="form-control field txt required" required placeholder="진료명" >
            </div>
        </div>
        <div class='flex_box'>
            <div class="tit">링크</div>
            <div class='cont'>
                <input type="text" name="wr_6" value="<?php echo $write['wr_6']?>" id="wr_6" class="form-control field txt required link_input" required placeholder="연결 URL" >
            </div>
        </div>
    </div>
    <div class="theme-form mt-3 m_20">
        <div class="ranking_number">4위</div>
        <div class='flex_box'>
            <div class="tit">NEW ICON</div>
            <div class='cont'>
                <label>NEW</label>
                <input type="checkbox" name="wr_14" value="Y" id="wr_14" <?php if($write['wr_14'] == "Y"){echo "checked";}?> style="display:inline-block; width:16px; min-width:auto; height:16px;" class="form-control field txt" >
                <p style="display:inline-block; margin-left:5px; color:#ff0000; font-weight:700; font-size:12px;">체크 시 해당 순위에 NEW 아이콘이 생깁니다.</p>
            </div>
        </div>
        <div class='flex_box'>
            <div class="tit">진료명</div>
            <div class='cont'>
                <input type="text" name="wr_7" value="<?php echo $write['wr_7']?>" id="wr_7" class="form-control field txt required" required placeholder="진료명" >
            </div>
        </div>
        <div class='flex_box'>
            <div class="tit">링크</div>
            <div class='cont'>
                <input type="text" name="wr_8" value="<?php echo $write['wr_8']?>" id="wr_8" class="form-control field txt required link_input" required placeholder="연결 URL" >
            </div>
        </div>
    </div>
    <div class="theme-form mt-3 m_20">
        <div class="ranking_number">5위</div>
        <div class='flex_box'>
            <div class="tit">NEW ICON</div>
            <div class='cont'>
                <label>NEW</label>
                <input type="checkbox" name="wr_15" value="Y" id="wr_15" <?php if($write['wr_15'] == "Y"){echo "checked";}?> style="display:inline-block; width:16px; min-width:auto; height:16px;" class="form-control field txt" >
                <p style="display:inline-block; margin-left:5px; color:#ff0000; font-weight:700; font-size:12px;">체크 시 해당 순위에 NEW 아이콘이 생깁니다.</p>
            </div>
        </div>
        <div class='flex_box'>
            <div class="tit">진료명</div>
            <div class='cont'>
                <input type="text" name="wr_9" value="<?php echo $write['wr_9']?>" id="wr_9" class="form-control field txt required" required placeholder="진료명" >
            </div>
        </div>
        <div class='flex_box'>
            <div class="tit">링크</div>
            <div class='cont'>
                <input type="text" name="wr_10" value="<?php echo $write['wr_10']?>" id="wr_10" class="form-control field txt required link_input" required placeholder="연결 URL" >
            </div>
        </div>
    </div>
    
    <div class="btn_confirm" style="text-align:right;">
        <input type="image" src="<?php echo G5_URL ?>/img/cont_write.png" value="작성완료" id="btn_submit" accesskey="s" style="min-width: auto; height: 31px;">
        <a href="<?php echo G5_URL ?>/admin/bbs/board.php?bo_table=<?php echo $bo_table ?>"><img src="<?php echo G5_URL ?>/img/cont_cencel.png" alt="취소" style="height:31px;" /></a>
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