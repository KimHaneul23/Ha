<?php
$sub_menu = "100100";
include_once('./_common.php');

if ($w == "u" || $w == "d")
    check_demo();

auth_check($auth[$sub_menu], "d");

//check_admin_token();

if ($w == 'd' && $is_admin != 'super')
    alert("최고관리자만 분류를 삭제할 수 있습니다.");

$sql_common = " ca_table				= '$ca_table' ";

if ($w == ""){
    if (!trim($ca_id))
        alert("분류 코드가 없으므로 분류를 추가하실 수 없습니다.");

    // 소문자로 변환
    $ca_id = strtolower($ca_id);

    $sql = " insert `g5_contents_menu`
                set ca_id   = '$ca_id',
                    ca_name = '$ca_name',
                    $sql_common ";
    sql_query($sql);
} else if ($w == "u"){
    $sql = " update `g5_contents_menu`
                set ca_name = '$ca_name',
                    $sql_common
              where ca_id = '$ca_id' ";
    sql_query($sql);

    // 하위분류를 똑같은 설정으로 반영
    if ($sub_category) {
        $len = strlen($ca_id);
        $sql = " update `g5_contents_menu`
                    set $sql_common
                  where SUBSTRING(ca_id,1,$len) = '$ca_id' ";
        sql_query($sql);
    }
} else if ($w == "d"){
    // 분류의 길이
    $len = strlen($ca_id);

    $sql = " select COUNT(*) as cnt from `g5_contents_menu`
              where SUBSTRING(ca_id,1,$len) = '$ca_id'
                and ca_id <> '$ca_id' ";
    $row = sql_fetch($sql);
    if ($row['cnt'] > 0)
        alert("이 분류에 속한 하위 분류가 있으므로 삭제 할 수 없습니다.\\n\\n하위분류를 우선 삭제하여 주십시오.");

    $str = $comma = "";
    $sql = " select it_id from {$g5['g5_shop_item_table']} where ca_id = '$ca_id' ";
    $result = sql_query($sql);
    $i=0;
    while ($row = sql_fetch_array($result))
    {
        $i++;
        if ($i % 10 == 0) $str .= "\\n";
        $str .= "$comma{$row['it_id']}";
        $comma = " , ";
    }

    if ($str)
        alert("이 분류와 관련된 상품이 총 {$i} 건 존재하므로 상품을 삭제한 후 분류를 삭제하여 주십시오.\\n\\n$str");

    // 분류 삭제
    $sql = " delete from `g5_contents_menu` where ca_id = '$ca_id' ";
    sql_query($sql);
}

if ($w == "" || $w == "u"){
    goto_url("./menu_form.php?w=u&amp;ca_id=$ca_id&amp;$qstr");
} else {
    goto_url("./menu_config.php?$qstr");
}
?>
