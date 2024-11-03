<?php
$menu_sql_cnt = " SELECT COUNT(*) as cnt FROM `g5_contents_menu` ORDER BY 'ca_id' ASC ";
$menu_result_cnt = sql_query($menu_sql_cnt);

for($i=0; $menu_cnt_row=sql_fetch_array($menu_result_cnt); $i++){
	$menu_cnt = $menu_cnt_row['cnt'] - 1;
}

$menu_sql = " SELECT * FROM `g5_contents_menu` ORDER BY ca_id ASC ";
$menu_result = sql_query($menu_sql);

$cnt = 1;


$menu['menu400'] = array(
	array('400000', '컨텐츠관리', ''.G5_ADMIN_URL.'/contents/menu_config.php', 'contents'),
	array('400100', '[ 메뉴관리 ]', ''.G5_ADMIN_URL.'/contents/menu_config.php', 'add_menu'),
);

for($i=0; $menu_row=sql_fetch_array($menu_result); $i++){
	$level = strlen($menu_row['ca_id']) / 2 - 1;
	$menu['menu400'][$i+2] = array('400'.($i+2).'00', $menu_row['ca_name'], ''.G5_ADMIN_URL.'/bbs/board.php?bo_table='.$menu_row['ca_table'].'', $menu_row['ca_name']);
}


?>