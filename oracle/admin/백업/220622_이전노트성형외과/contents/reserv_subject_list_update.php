<?php
include_once('./_common.php');

check_demo();

auth_check($auth[$sub_menu], "w");

//check_admin_token();

for ($i=0; $i<count($_POST['wr_id']); $i++){
    $sql = " update `g5_reserv_subject`
                set subject             = '{$_POST['subject'][$i]}',
                    subject_order       = '{$_POST['subject_order'][$i]}',
					subject_check       = '{$_POST['subject_check'][$i]}'
              where wr_id = '{$_POST['wr_id'][$i]}' ";
    sql_query($sql);
}

goto_url("./reserv_subject.php?$qstr");
?>
