<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once('./_common.php');

?>
<ul id="admin_menu_left_title">
	게시판관리
</ul>
<ul class="admin_menu_left_sub <?php if ($menu_left_code == 401) echo "admin_menu_left_on"; ?>">
	<a href="<?php echo G5_ADMIN_URL ?>/board_list.php">
		<?php if ($menu_left_code == 401) { ?>
			<img src="<?php echo G5_ADMIN_URL ?>/img/admin_left_menu_dotted2.png" alt="●"/>
		<?php } else { ?>
			<img src="<?php echo G5_ADMIN_URL ?>/img/admin_left_menu_dotted.png" alt="●"/>
		<?php } ?>
		게시판관리
	</a>
</ul>
<ul class="admin_menu_left_sub <?php if ($menu_left_code == 402) echo "admin_menu_left_on"; ?>">
	<a href="<?php echo G5_ADMIN_URL ?>/boardgroup_list.php">
		<?php if ($menu_left_code == 402) { ?>
			<img src="<?php echo G5_ADMIN_URL ?>/img/admin_left_menu_dotted2.png" alt="●"/>
		<?php } else { ?>
			<img src="<?php echo G5_ADMIN_URL ?>/img/admin_left_menu_dotted.png" alt="●"/>
		<?php } ?>
		게시판그룹관리
	</a>
</ul>
<ul class="admin_menu_left_sub <?php if ($menu_left_code == 403) echo "admin_menu_left_on"; ?>">
	<a href="<?php echo G5_ADMIN_URL ?>/popular_list.php">
		<?php if ($menu_left_code == 403) { ?>
			<img src="<?php echo G5_ADMIN_URL ?>/img/admin_left_menu_dotted2.png" alt="●"/>
		<?php } else { ?>
			<img src="<?php echo G5_ADMIN_URL ?>/img/admin_left_menu_dotted.png" alt="●"/>
		<?php } ?>
		인기검색어관리
	</a>
</ul>
<ul class="admin_menu_left_sub <?php if ($menu_left_code == 404) echo "admin_menu_left_on"; ?>">
	<a href="<?php echo G5_ADMIN_URL ?>/popular_rank.php">
		<?php if ($menu_left_code == 404) { ?>
			<img src="<?php echo G5_ADMIN_URL ?>/img/admin_left_menu_dotted2.png" alt="●"/>
		<?php } else { ?>
			<img src="<?php echo G5_ADMIN_URL ?>/img/admin_left_menu_dotted.png" alt="●"/>
		<?php } ?>
		인기검색어순위
	</a>
</ul>
<ul class="admin_menu_left_sub <?php if ($menu_left_code == 405) echo "admin_menu_left_on"; ?>">
	<a href="<?php echo G5_ADMIN_URL ?>/qa_config.php">
		<?php if ($menu_left_code == 405) { ?>
			<img src="<?php echo G5_ADMIN_URL ?>/img/admin_left_menu_dotted2.png" alt="●"/>
		<?php } else { ?>
			<img src="<?php echo G5_ADMIN_URL ?>/img/admin_left_menu_dotted.png" alt="●"/>
		<?php } ?>
		1:1문의설정
	</a>
</ul>
<ul class="admin_menu_left_sub <?php if ($menu_left_code == 406) echo "admin_menu_left_on"; ?>">
	<a href="<?php echo G5_ADMIN_URL ?>/contentlist.php">
		<?php if ($menu_left_code == 406) { ?>
			<img src="<?php echo G5_ADMIN_URL ?>/img/admin_left_menu_dotted2.png" alt="●"/>
		<?php } else { ?>
			<img src="<?php echo G5_ADMIN_URL ?>/img/admin_left_menu_dotted.png" alt="●"/>
		<?php } ?>
		내용관리
	</a>
</ul>
<ul class="admin_menu_left_sub <?php if ($menu_left_code == 407) echo "admin_menu_left_on"; ?>">
	<a href="<?php echo G5_ADMIN_URL ?>/faqmasterlist.php">
		<?php if ($menu_left_code == 407) { ?>
			<img src="<?php echo G5_ADMIN_URL ?>/img/admin_left_menu_dotted2.png" alt="●"/>
		<?php } else { ?>
			<img src="<?php echo G5_ADMIN_URL ?>/img/admin_left_menu_dotted.png" alt="●"/>
		<?php } ?>
		FAQ관리
	</a>
</ul>
<ul class="admin_menu_left_sub <?php if ($menu_left_code == 408) echo "admin_menu_left_on"; ?>">
	<a href="<?php echo G5_ADMIN_URL ?>/write_count.php">
		<?php if ($menu_left_code == 408) { ?>
			<img src="<?php echo G5_ADMIN_URL ?>/img/admin_left_menu_dotted2.png" alt="●"/>
		<?php } else { ?>
			<img src="<?php echo G5_ADMIN_URL ?>/img/admin_left_menu_dotted.png" alt="●"/>
		<?php } ?>
		글,댓글 현황
	</a>
</ul>