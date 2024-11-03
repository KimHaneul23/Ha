<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once('./_common.php');
?>
<ul id="admin_menu_left_title">
	컨텐츠관리
</ul>

<ul class="admin_menu_left_sub <?php if ($menu_left_code == 302) echo "admin_menu_left_on"; ?>">

	<?php if ($menu_left_code == 302) { ?>
	<div class="admin_menu_left_sub2">
		<ul>
			<?php if ($menu_left_sub_code == 30201) { ?>
				<img src="<?php echo G5_ADMIN_URL ?>/img/admin_left_menu_dotted3.png" alt="●"/>
			<?php } ?>
			<a href="<?php echo G5_ADMIN_URL ?>/contents/reserv_config.php">
				예약기본설정
			</a>
		</ul>
		<ul>
			<?php if ($menu_left_sub_code == 30202) { ?>
				<img src="<?php echo G5_ADMIN_URL ?>/img/admin_left_menu_dotted3.png" alt="●"/>
			<?php } ?>
			<a href="<?php echo G5_ADMIN_URL ?>/bbs/board.php?bo_table=reserv_online">
				예약관리
			</a>
		</ul>
		<ul>
			<?php if ($menu_left_sub_code == 30203) { ?>
				<img src="<?php echo G5_ADMIN_URL ?>/img/admin_left_menu_dotted3.png" alt="●"/>
			<?php } ?>
			<a href="<?php echo G5_ADMIN_URL ?>/contents/reserv_off.php">
				예약휴일관리
			</a>
		</ul>
		<ul>
			<?php if ($menu_left_sub_code == 30204) { ?>
				<img src="<?php echo G5_ADMIN_URL ?>/img/admin_left_menu_dotted3.png" alt="●"/>
			<?php } ?>
			<a href="<?php echo G5_ADMIN_URL ?>/contents/reserv_subject.php">
				예약과목관리
			</a>
		</ul>
		<ul>
			<?php if ($menu_left_sub_code == 30205) { ?>
				<img src="<?php echo G5_ADMIN_URL ?>/img/admin_left_menu_dotted3.png" alt="●"/>
			<?php } ?>
			<a href="<?php echo G5_ADMIN_URL ?>/bbs/board.php?bo_table=reserv_healthcare">
				예약의료진관리
			</a>
		</ul>
	</div>
	<?php } ?>
</ul>


<?php
$menu_sql_cnt = " SELECT COUNT(*) as cnt FROM `g5_contents_menu` ORDER BY 'ca_id' ASC ";
$menu_result_cnt = sql_query($menu_sql_cnt);

for($i=0; $menu_cnt_row=sql_fetch_array($menu_result_cnt); $i++){
	$menu_cnt = $menu_cnt_row['cnt'] - 1;
}

$menu_sql = " SELECT * FROM `g5_contents_menu` ORDER BY ca_id ASC ";
$menu_result = sql_query($menu_sql);

$cnt = 1;

for($i=0; $menu_row=sql_fetch_array($menu_result); $i++){
	$level = strlen($menu_row['ca_id']) / 2 - 1;

	$menu = "";

	if($level <= 0) {
		if($cnt > 1){
			$menu .= "</div>";
			$cnt = 1;
		}

		if($i != 0){
			$menu .= "</ul>";
		}
		$menu .= "<ul class='admin_menu_left_sub";
		
		if($menu_code == substr($menu_row['ca_id'],0,2)){
			$menu .= " admin_menu_left_on";
		}
		$menu .= "'>";
		$menu .= "<a href='".G5_ADMIN_URL."/bbs/board.php?bo_table={$menu_row['ca_table']}'>";
		$menu .= "<img src='".G5_ADMIN_URL."/img/admin_left_menu_dotted.png' alt='●'/>";
		$menu .= $menu_row['ca_name'];
		$menu .= "</a>";
	}

	if($level > 0){
		$cnt++;
		if($cnt == 2){
			$menu .= "<div class='admin_menu_left_sub2";
			
			if($menu_code == substr($menu_row['ca_id'],0,2)){
				$menu .= " admun_menu_left_sub2_on";
			} else {
				$menu .= " admun_menu_left_sub2_off";
			}

			$menu .= "'>";
		}
		$menu .= "<ul>";
		if($menu_sub_code == $menu_row['ca_id']){
			$menu .= "<img src='".G5_ADMIN_URL."/img/admin_left_menu_dotted3.png' alt='●'/>";
		}
		$menu .= "<a href='".G5_ADMIN_URL."/bbs/board.php?bo_table={$menu_row['ca_table']}'>";
		$menu .= $menu_row['ca_name'];
		$menu .= "</a></ul>";

		if($i == $menu_cnt){
			$menu .= "</ul>";
		}
	}

	if($i == $menu_cnt){
		if($level <= 0) {
			$menu .= "</ul>";
		}
	}

	echo $menu;
	$menu = "";
}
?>
<ul class="admin_menu_left_sub <?php if ($menu_left_code == 300) echo "admin_menu_left_on"; ?>">
	<a href="<?php echo G5_ADMIN_URL ?>/contents/menu_config.php">
		<?php if ($menu_left_code == 300) { ?>
			<img src="<?php echo G5_ADMIN_URL ?>/img/admin_left_menu_dotted2.png" alt="●"/>
		<?php } else { ?>
			<img src="<?php echo G5_ADMIN_URL ?>/img/admin_left_menu_dotted.png" alt="●"/>
		<?php } ?>
		메뉴관리
	</a>
</ul>