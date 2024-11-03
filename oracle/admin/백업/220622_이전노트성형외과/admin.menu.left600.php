<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once('./_common.php');

?>
<ul id="admin_menu_left_title">
	SMS관리
</ul>
<ul class="admin_menu_left_sub <?php if ($menu_left_code == 501) echo "admin_menu_left_on"; ?>">
	<a href="<?php echo G5_SMS5_ADMIN_URL ?>/config.php">
		<?php if ($menu_left_code == 401) { ?>
			<img src="<?php echo G5_ADMIN_URL ?>/img/admin_left_menu_dotted2.png" alt="●"/>
		<?php } else { ?>
			<img src="<?php echo G5_ADMIN_URL ?>/img/admin_left_menu_dotted.png" alt="●"/>
		<?php } ?>
		SMS 기본설정
	</a>
</ul>
<!--
<ul class="admin_menu_left_sub <?php if ($menu_left_code == 502) echo "admin_menu_left_on"; ?>">
	<a href="<?php echo G5_SMS5_ADMIN_URL ?>/member_update.php">
		<?php if ($menu_left_code == 401) { ?>
			<img src="<?php echo G5_ADMIN_URL ?>/img/admin_left_menu_dotted2.png" alt="●"/>
		<?php } else { ?>
			<img src="<?php echo G5_ADMIN_URL ?>/img/admin_left_menu_dotted.png" alt="●"/>
		<?php } ?>
		회원정보 업데이트
	</a>
</ul>
-->
<ul class="admin_menu_left_sub <?php if ($menu_left_code == 503) echo "admin_menu_left_on"; ?>">
	<a href="<?php echo G5_SMS5_ADMIN_URL ?>/sms_write.php">
		<?php if ($menu_left_code == 401) { ?>
			<img src="<?php echo G5_ADMIN_URL ?>/img/admin_left_menu_dotted2.png" alt="●"/>
		<?php } else { ?>
			<img src="<?php echo G5_ADMIN_URL ?>/img/admin_left_menu_dotted.png" alt="●"/>
		<?php } ?>
		문자보내기
	</a>
</ul>
<ul class="admin_menu_left_sub <?php if ($menu_left_code == 504) echo "admin_menu_left_on"; ?>">
	<a href="<?php echo G5_SMS5_ADMIN_URL ?>/history_list.php">
		<?php if ($menu_left_code == 401) { ?>
			<img src="<?php echo G5_ADMIN_URL ?>/img/admin_left_menu_dotted2.png" alt="●"/>
		<?php } else { ?>
			<img src="<?php echo G5_ADMIN_URL ?>/img/admin_left_menu_dotted.png" alt="●"/>
		<?php } ?>
		전송내역-건별
	</a>
</ul>
<ul class="admin_menu_left_sub <?php if ($menu_left_code == 505) echo "admin_menu_left_on"; ?>">
	<a href="<?php echo G5_SMS5_ADMIN_URL ?>/history_num.php">
		<?php if ($menu_left_code == 401) { ?>
			<img src="<?php echo G5_ADMIN_URL ?>/img/admin_left_menu_dotted2.png" alt="●"/>
		<?php } else { ?>
			<img src="<?php echo G5_ADMIN_URL ?>/img/admin_left_menu_dotted.png" alt="●"/>
		<?php } ?>
		전송내역-번호별
	</a>
</ul>
<!--
<ul class="admin_menu_left_sub <?php if ($menu_left_code == 506) echo "admin_menu_left_on"; ?>">
	<a href="<?php echo G5_SMS5_ADMIN_URL ?>/form_group.php">
		<?php if ($menu_left_code == 401) { ?>
			<img src="<?php echo G5_ADMIN_URL ?>/img/admin_left_menu_dotted2.png" alt="●"/>
		<?php } else { ?>
			<img src="<?php echo G5_ADMIN_URL ?>/img/admin_left_menu_dotted.png" alt="●"/>
		<?php } ?>
		이모티콘 그룹
	</a>
</ul>
<ul class="admin_menu_left_sub <?php if ($menu_left_code == 507) echo "admin_menu_left_on"; ?>">
	<a href="<?php echo G5_SMS5_ADMIN_URL ?>/form_list.php">
		<?php if ($menu_left_code == 401) { ?>
			<img src="<?php echo G5_ADMIN_URL ?>/img/admin_left_menu_dotted2.png" alt="●"/>
		<?php } else { ?>
			<img src="<?php echo G5_ADMIN_URL ?>/img/admin_left_menu_dotted.png" alt="●"/>
		<?php } ?>
		이모티콘 관리
	</a>
</ul>
-->
<ul class="admin_menu_left_sub <?php if ($menu_left_code == 508) echo "admin_menu_left_on"; ?>">
	<a href="<?php echo G5_SMS5_ADMIN_URL ?>/num_group.php">
		<?php if ($menu_left_code == 401) { ?>
			<img src="<?php echo G5_ADMIN_URL ?>/img/admin_left_menu_dotted2.png" alt="●"/>
		<?php } else { ?>
			<img src="<?php echo G5_ADMIN_URL ?>/img/admin_left_menu_dotted.png" alt="●"/>
		<?php } ?>
		휴대폰번호 그룹
	</a>
</ul>
<ul class="admin_menu_left_sub <?php if ($menu_left_code == 509) echo "admin_menu_left_on"; ?>">
	<a href="<?php echo G5_SMS5_ADMIN_URL ?>/num_book.php">
		<?php if ($menu_left_code == 401) { ?>
			<img src="<?php echo G5_ADMIN_URL ?>/img/admin_left_menu_dotted2.png" alt="●"/>
		<?php } else { ?>
			<img src="<?php echo G5_ADMIN_URL ?>/img/admin_left_menu_dotted.png" alt="●"/>
		<?php } ?>
		휴대폰번호 관리
	</a>
</ul>
<ul class="admin_menu_left_sub <?php if ($menu_left_code == 510) echo "admin_menu_left_on"; ?>">
	<a href="<?php echo G5_SMS5_ADMIN_URL ?>/num_book_file.php">
		<?php if ($menu_left_code == 401) { ?>
			<img src="<?php echo G5_ADMIN_URL ?>/img/admin_left_menu_dotted2.png" alt="●"/>
		<?php } else { ?>
			<img src="<?php echo G5_ADMIN_URL ?>/img/admin_left_menu_dotted.png" alt="●"/>
		<?php } ?>
		휴대폰번호 파일
	</a>
</ul>