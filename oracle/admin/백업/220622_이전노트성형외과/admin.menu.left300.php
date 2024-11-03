<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once('./_common.php');

?>
<ul id="admin_menu_left_title">
	회원관리
</ul>
<ul class="admin_menu_left_sub <?php if ($menu_left_code == 201) echo "admin_menu_left_on"; ?>">
	<a href="<?php echo G5_ADMIN_URL ?>/member_list.php">
		<?php if ($menu_left_code == 201) { ?>
			<img src="<?php echo G5_ADMIN_URL ?>/img/admin_left_menu_dotted2.png" alt="●"/>
		<?php } else { ?>
			<img src="<?php echo G5_ADMIN_URL ?>/img/admin_left_menu_dotted.png" alt="●"/>
		<?php } ?>
		회원관리
	</a>
</ul>
<!--
<ul class="admin_menu_left_sub <?php if ($menu_left_code == 202) echo "admin_menu_left_on"; ?>">
	<a href="<?php echo G5_ADMIN_URL ?>/mail_list.php">
		<?php if ($menu_left_code == 202) { ?>
			<img src="<?php echo G5_ADMIN_URL ?>/img/admin_left_menu_dotted2.png" alt="●"/>
		<?php } else { ?>
			<img src="<?php echo G5_ADMIN_URL ?>/img/admin_left_menu_dotted.png" alt="●"/>
		<?php } ?>
		회원메일발송
	</a>
</ul>
-->
<ul class="admin_menu_left_sub <?php if ($menu_left_code == 203) echo "admin_menu_left_on"; ?>">
	<a href="<?php echo G5_ADMIN_URL ?>/visit_list.php">
		<?php if ($menu_left_code == 203) { ?>
			<img src="<?php echo G5_ADMIN_URL ?>/img/admin_left_menu_dotted2.png" alt="●"/>
		<?php } else { ?>
			<img src="<?php echo G5_ADMIN_URL ?>/img/admin_left_menu_dotted.png" alt="●"/>
		<?php } ?>
		접속자집계
	</a>
</ul>
<ul class="admin_menu_left_sub <?php if ($menu_left_code == 204) echo "admin_menu_left_on"; ?>">
	<a href="<?php echo G5_ADMIN_URL ?>/visit_search.php">
		<?php if ($menu_left_code == 204) { ?>
			<img src="<?php echo G5_ADMIN_URL ?>/img/admin_left_menu_dotted2.png" alt="●"/>
		<?php } else { ?>
			<img src="<?php echo G5_ADMIN_URL ?>/img/admin_left_menu_dotted.png" alt="●"/>
		<?php } ?>
		접속자검색
	</a>
</ul>
<!--
<ul class="admin_menu_left_sub <?php if ($menu_left_code == 205) echo "admin_menu_left_on"; ?>">
	<a href="<?php echo G5_ADMIN_URL ?>/visit_delete.php">
		<?php if ($menu_left_code == 205) { ?>
			<img src="<?php echo G5_ADMIN_URL ?>/img/admin_left_menu_dotted2.png" alt="●"/>
		<?php } else { ?>
			<img src="<?php echo G5_ADMIN_URL ?>/img/admin_left_menu_dotted.png" alt="●"/>
		<?php } ?>
		접속자로그삭제
	</a>
</ul>
<ul class="admin_menu_left_sub <?php if ($menu_left_code == 206) echo "admin_menu_left_on"; ?>">
	<a href="<?php echo G5_ADMIN_URL ?>/point_list.php">
		<?php if ($menu_left_code == 206) { ?>
			<img src="<?php echo G5_ADMIN_URL ?>/img/admin_left_menu_dotted2.png" alt="●"/>
		<?php } else { ?>
			<img src="<?php echo G5_ADMIN_URL ?>/img/admin_left_menu_dotted.png" alt="●"/>
		<?php } ?>
		포인트관리
	</a>
</ul>
<ul class="admin_menu_left_sub <?php if ($menu_left_code == 207) echo "admin_menu_left_on"; ?>">
	<a href="<?php echo G5_ADMIN_URL ?>/poll_list.php">
		<?php if ($menu_left_code == 207) { ?>
			<img src="<?php echo G5_ADMIN_URL ?>/img/admin_left_menu_dotted2.png" alt="●"/>
		<?php } else { ?>
			<img src="<?php echo G5_ADMIN_URL ?>/img/admin_left_menu_dotted.png" alt="●"/>
		<?php } ?>
		투표관리
	</a>
</ul>
-->