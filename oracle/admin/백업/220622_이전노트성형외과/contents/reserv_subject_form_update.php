<?php
$sub_menu = "100100";
include_once('./_common.php');

if ($w == "u" || $w == "d")
    check_demo();

auth_check($auth[$sub_menu], "d");

//check_admin_token();

if ($w == 'd' && $is_admin != 'super')
    alert("최고관리자만 분류를 삭제할 수 있습니다.");

if ($w == ""){

    $sql = " insert `g5_reserv_subject`
                set subject   = '$subject',
                    subject_order = '$subject_order',
                    subject_check = '$subject_check' ";
    sql_query($sql);
} else if ($w == "d"){
    // 분류 삭제
    $sql = " delete from `g5_reserv_subject` where wr_id = '$wr_id' ";
    sql_query($sql);
}

if ($w == "" || $w == "u"){
    goto_url("./reserv_subject.php?w=u&amp;ca_id=$ca_id&amp;$qstr");
} else {
    goto_url("./reserv_subject.php?$qstr");
}
?>
