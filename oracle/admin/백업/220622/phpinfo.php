<?php
$sub_menu = "900500";
include_once('./_common.php');

check_demo();

auth_check_menu($auth, $sub_menu, 'r');

phpinfo();