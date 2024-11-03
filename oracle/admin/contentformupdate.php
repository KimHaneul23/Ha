<?php
$sub_menu = '300600';
include_once('./_common.php');

/*if ($w == "u" || $w == "d") {
    check_demo();
}

if ($w == 'd') {
    auth_check_menu($auth, $sub_menu, "d");
} else {
    auth_check_menu($auth, $sub_menu, "w");
}

check_admin_token();*/

$co_row = array('co_id' => '', 'co_include_head' => '', 'co_include_tail' => '');

if ($w == "" || $w == "u") {
    if (isset($_REQUEST['co_id']) && preg_match("/[^a-z0-9_]/i", $_REQUEST['co_id'])) {
        alert("ID 는 영문자, 숫자, _ 만 가능합니다.");
    }

    $sql = " select * from {$g5['content_table']} where co_id = '$co_id' ";
    $co_row = sql_fetch($sql);
}

$co_id = isset($_REQUEST['co_id']) ? preg_replace('/[^a-z0-9_]/i', '', $_REQUEST['co_id']) : '';
$co_subject = isset($_POST['co_subject']) ? strip_tags(clean_xss_attributes($_POST['co_subject'])) : '';
$co_include_head = isset($_POST['co_include_head']) ? preg_replace(array("#[\\\]+$#", "#(<\?php|<\?)#i"), "", substr($_POST['co_include_head'], 0, 255)) : '';
$co_include_tail = isset($_POST['co_include_tail']) ? preg_replace(array("#[\\\]+$#", "#(<\?php|<\?)#i"), "", substr($_POST['co_include_tail'], 0, 255)) : '';
$co_tag_filter_use = isset($_POST['co_tag_filter_use']) ? (int) $_POST['co_tag_filter_use'] : 1;
$co_himg_del = (isset($_POST['co_himg_del']) && $_POST['co_himg_del']) ? 1 : 0;
$co_timg_del = (isset($_POST['co_timg_del']) && $_POST['co_timg_del']) ? 1 : 0;
$co_html = isset($_POST['co_html']) ? (int) $_POST['co_html'] : 0;
$co_content = isset($_POST['co_content']) ? $_POST['co_content'] : '';
$co_mobile_content = isset($_POST['co_mobile_content']) ? $_POST['co_mobile_content'] : '';
$co_skin = isset($_POST['co_skin']) ? clean_xss_tags($_POST['co_skin'], 1, 1) : '';
$co_mobile_skin = isset($_POST['co_mobile_skin']) ? clean_xss_tags($_POST['co_mobile_skin'], 1, 1) : '';

// 관리자가 자동등록방지를 사용해야 할 경우
if (((isset($co_row['co_include_head']) && $co_row['co_include_head'] !== $co_include_head) || (isset($co_row['co_include_tail']) && $co_row['co_include_tail'] !== $co_include_tail)) && function_exists('get_admin_captcha_by') && get_admin_captcha_by()) {
    include_once G5_CAPTCHA_PATH . '/captcha.lib.php';

    if (!chk_captcha()) {
        alert('자동등록방지 숫자가 틀렸습니다.');
    }
}

@mkdir(G5_DATA_PATH."/content", G5_DIR_PERMISSION);
@chmod(G5_DATA_PATH."/content", G5_DIR_PERMISSION);

if ($co_himg_del)  @unlink(G5_DATA_PATH."/content/{$co_id}_h");
if ($co_timg_del)  @unlink(G5_DATA_PATH."/content/{$co_id}_t");

$sql_common = " co_include_head     = '$co_include_head',
                co_include_tail     = '$co_include_tail',
                co_html             = '$co_html',
                co_tag_filter_use   = '$co_tag_filter_use',
                co_subject          = '$co_subject',
                co_content          = '$co_content',
                co_mobile_content   = '$co_mobile_content',
                co_skin             = '$co_skin',
                co_mobile_skin      = '$co_mobile_skin' ";

if ($w == "")
{
    //if(eregi("[^a-z0-9_]", $co_id)) alert("ID 는 영문자, 숫자, _ 만 가능합니다.");
    if(preg_match("/[^a-z0-9_]/i", $co_id)) alert("ID 는 영문자, 숫자, _ 만 가능합니다.");

    $sql = " select co_id from {$g5['content_table']} where co_id = '$co_id' ";
    $row = sql_fetch($sql);
    if ($row['co_id'])
        alert("이미 같은 ID로 등록된 내용이 있습니다.");

    $sql = " insert {$g5['content_table']}
                set co_id = '$co_id',
                    $sql_common ";
    sql_query($sql);
}
else if ($w == "u")
{
    $sql = " update {$g5['content_table']}
                set $sql_common
              where co_id = '$co_id' ";
    sql_query($sql);
}
else if ($w == "d")
{
    @unlink(G5_DATA_PATH."/content/{$co_id}_h");
    @unlink(G5_DATA_PATH."/content/{$co_id}_t");

    $sql = " delete from {$g5['content_table']} where co_id = '$co_id' ";
    sql_query($sql);
}

if ($w == "" || $w == "u")
{
    if ($_FILES['co_himg']['name'])
    {
        $dest_path = G5_DATA_PATH."/content/".$co_id."_h";
        @move_uploaded_file($_FILES['co_himg']['tmp_name'], $dest_path);
        @chmod($dest_path, G5_FILE_PERMISSION);
    }
    if ($_FILES['co_timg']['name'])
    {
        $dest_path = G5_DATA_PATH."/content/".$co_id."_t";
        @move_uploaded_file($_FILES['co_timg']['tmp_name'], $dest_path);
        @chmod($dest_path, G5_FILE_PERMISSION);
    }

    goto_url("./contentform.php?w=u&amp;co_id=$co_id");
}
else
{
    goto_url("./contentlist.php");
}
?>
