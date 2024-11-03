<?php
include_once('./_common.php');

check_demo();

auth_check($auth[$sub_menu], "w");

//check_admin_token();

for ($i=0; $i<count($_POST['ca_id']); $i++){
    $sql = " update `g5_contents_menu`
                set ca_name             = '{$_POST['ca_name'][$i]}',
                    ca_table            = '{$_POST['ca_table'][$i]}'
              where ca_id = '{$_POST['ca_id'][$i]}' ";
    sql_query($sql);
}

goto_url("./menu_config.php?$qstr");
?>
