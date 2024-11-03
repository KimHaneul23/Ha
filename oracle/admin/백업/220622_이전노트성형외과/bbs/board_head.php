<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

$adm_bbs = 1;

if($bo_table == 'contents_menu'){
	$menu_left_code = 300;
	$g5['title'] = '메뉴관리';
} else if($bo_table == 'reserv_online'){
	$menu_left_code = 302;
	$menu_left_sub_code = 30202;
	$g5['title'] = '예약관리';
} else if($bo_table == 'reserv_healthcare'){
	$menu_left_code = 302;
	$menu_left_sub_code = 30205;
	$g5['title'] = '예약의료진관리';
} 

$board_sql = " SELECT * FROM `g5_contents_menu` ORDER BY ca_id ASC ";
$board_result = sql_query($board_sql);

for($i=0; $board_row=sql_fetch_array($board_result); $i++){
	if($bo_table == $board_row['ca_table']){
		$menu_sub_code = $board_row['ca_id'];
	}
}
$menu_code = substr($menu_sub_code, 0, 2);
?>
<div id="wrapper">
	<div id="admin_menu_left">
		<!-- <?php include_once('../admin.menu.left400.php'); ?> -->
	</div>
    <div id="container" class="menu100_minheight">
		<div id="admin_right_wrap">
			<div class="admin_title">
				<img src="<?php echo G5_ADMIN_URL ?>/img/admin_title_bg.png" alt="●"/>
				<?=$g5['title']?>
			</div>
			<div id="content_wrap">