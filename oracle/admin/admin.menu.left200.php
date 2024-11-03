<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once('./_common.php');

?>
<ul id="admin_menu_left_title">
	환경설정
</ul>
<?php if($member[mb_id] == 'spadmin') { ?>
<ul class="admin_menu_left_sub <?php if ($menu_left_code == 101) echo "admin_menu_left_on"; ?>">
	<a href="<?php echo G5_ADMIN_URL ?>/config_form.php">
		<?php if ($menu_left_code == 101) { ?>
			<img src="<?php echo G5_ADMIN_URL ?>/img/admin_left_menu_dotted2.png" alt="●"/>
		<?php } else { ?>
			<img src="<?php echo G5_ADMIN_URL ?>/img/admin_left_menu_dotted.png" alt="●"/>
		<?php } ?>
		기본환경설정
	</a>
</ul>
<ul class="admin_menu_left_sub <?php if ($menu_left_code == 102) echo "admin_menu_left_on"; ?>">
	<a href="<?php echo G5_ADMIN_URL ?>/auth_list.php">
		<?php if ($menu_left_code == 102) { ?>
			<img src="<?php echo G5_ADMIN_URL ?>/img/admin_left_menu_dotted2.png" alt="●"/>
		<?php } else { ?>
			<img src="<?php echo G5_ADMIN_URL ?>/img/admin_left_menu_dotted.png" alt="●"/>
		<?php } ?>
		관리권환설정
	</a>
</ul>
<ul class="admin_menu_left_sub <?php if ($menu_left_code == 103) echo "admin_menu_left_on"; ?>">
	<a href="<?php echo G5_ADMIN_URL ?>/theme.php">
		<?php if ($menu_left_code == 103) { ?>
			<img src="<?php echo G5_ADMIN_URL ?>/img/admin_left_menu_dotted2.png" alt="●"/>
		<?php } else { ?>
			<img src="<?php echo G5_ADMIN_URL ?>/img/admin_left_menu_dotted.png" alt="●"/>
		<?php } ?>
		테마설정
	</a>
</ul>
<ul class="admin_menu_left_sub <?php if ($menu_left_code == 104) echo "admin_menu_left_on"; ?>">
	<a href="<?php echo G5_ADMIN_URL ?>/menu_list.php">
		<?php if ($menu_left_code == 104) { ?>
			<img src="<?php echo G5_ADMIN_URL ?>/img/admin_left_menu_dotted2.png" alt="●"/>
		<?php } else { ?>
			<img src="<?php echo G5_ADMIN_URL ?>/img/admin_left_menu_dotted.png" alt="●"/>
		<?php } ?>
		메뉴설정
	</a>
</ul>
<ul class="admin_menu_left_sub <?php if ($menu_left_code == 105) echo "admin_menu_left_on"; ?>">
	<a href="<?php echo G5_ADMIN_URL ?>/sendmail_test.php">
		<?php if ($menu_left_code == 105) { ?>
			<img src="<?php echo G5_ADMIN_URL ?>/img/admin_left_menu_dotted2.png" alt="●"/>
		<?php } else { ?>
			<img src="<?php echo G5_ADMIN_URL ?>/img/admin_left_menu_dotted.png" alt="●"/>
		<?php } ?>
		메일 테스트
	</a>
</ul>
<?php } ?>
<ul class="admin_menu_left_sub <?php if ($menu_left_code == 106) echo "admin_menu_left_on"; ?>">
	<a href="<?php echo G5_ADMIN_URL ?>/newwinlist.php">
		<?php if ($menu_left_code == 106) { ?>
			<img src="<?php echo G5_ADMIN_URL ?>/img/admin_left_menu_dotted2.png" alt="●"/>
		<?php } else { ?>
			<img src="<?php echo G5_ADMIN_URL ?>/img/admin_left_menu_dotted.png" alt="●"/>
		<?php } ?>
		팝업레이어관리
	</a>
</ul>
<?php if($member[mb_id] == 'spadmin') { ?>
<ul class="admin_menu_left_sub <?php if ($menu_left_code == 107) echo "admin_menu_left_on"; ?>">
	<a href="<?php echo G5_ADMIN_URL ?>/session_file_delete.php">
		<?php if ($menu_left_code == 107) { ?>
			<img src="<?php echo G5_ADMIN_URL ?>/img/admin_left_menu_dotted2.png" alt="●"/>
		<?php } else { ?>
			<img src="<?php echo G5_ADMIN_URL ?>/img/admin_left_menu_dotted.png" alt="●"/>
		<?php } ?>
		세션파일 일괄삭제
	</a>
</ul>
<ul class="admin_menu_left_sub <?php if ($menu_left_code == 108) echo "admin_menu_left_on"; ?>">
	<a href="<?php echo G5_ADMIN_URL ?>/cache_file_delete.php">
		<?php if ($menu_left_code == 108) { ?>
			<img src="<?php echo G5_ADMIN_URL ?>/img/admin_left_menu_dotted2.png" alt="●"/>
		<?php } else { ?>
			<img src="<?php echo G5_ADMIN_URL ?>/img/admin_left_menu_dotted.png" alt="●"/>
		<?php } ?>
		캐시파일 일괄삭제
	</a>
</ul>
<ul class="admin_menu_left_sub <?php if ($menu_left_code == 109) echo "admin_menu_left_on"; ?>">
	<a href="<?php echo G5_ADMIN_URL ?>/captcha_file_delete.php">
		<?php if ($menu_left_code == 109) { ?>
			<img src="<?php echo G5_ADMIN_URL ?>/img/admin_left_menu_dotted2.png" alt="●"/>
		<?php } else { ?>
			<img src="<?php echo G5_ADMIN_URL ?>/img/admin_left_menu_dotted.png" alt="●"/>
		<?php } ?>
		캡챠파일 일괄삭제
	</a>
</ul>
<ul class="admin_menu_left_sub <?php if ($menu_left_code == 110) echo "admin_menu_left_on"; ?>">
	<a href="<?php echo G5_ADMIN_URL ?>/thumbnail_file_delete.php">
		<?php if ($menu_left_code == 110) { ?>
			<img src="<?php echo G5_ADMIN_URL ?>/img/admin_left_menu_dotted2.png" alt="●"/>
		<?php } else { ?>
			<img src="<?php echo G5_ADMIN_URL ?>/img/admin_left_menu_dotted.png" alt="●"/>
		<?php } ?>
		썸네일파일 일괄삭제
	</a>
</ul>
<ul class="admin_menu_left_sub <?php if ($menu_left_code == 111) echo "admin_menu_left_on"; ?>">
	<a href="<?php echo G5_ADMIN_URL ?>/phpinfo.php">
		<?php if ($menu_left_code == 111) { ?>
			<img src="<?php echo G5_ADMIN_URL ?>/img/admin_left_menu_dotted2.png" alt="●"/>
		<?php } else { ?>
			<img src="<?php echo G5_ADMIN_URL ?>/img/admin_left_menu_dotted.png" alt="●"/>
		<?php } ?>
		phpinfo()
	</a>
</ul>
<ul class="admin_menu_left_sub <?php if ($menu_left_code == 112) echo "admin_menu_left_on"; ?>">
	<a href="<?php echo G5_ADMIN_URL ?>/browscap.php">
		<?php if ($menu_left_code == 112) { ?>
			<img src="<?php echo G5_ADMIN_URL ?>/img/admin_left_menu_dotted2.png" alt="●"/>
		<?php } else { ?>
			<img src="<?php echo G5_ADMIN_URL ?>/img/admin_left_menu_dotted.png" alt="●"/>
		<?php } ?>
		Browscap 업데이트
	</a>
</ul>
<ul class="admin_menu_left_sub <?php if ($menu_left_code == 113) echo "admin_menu_left_on"; ?>">
	<a href="<?php echo G5_ADMIN_URL ?>/browscap_convert.php">
		<?php if ($menu_left_code == 113) { ?>
			<img src="<?php echo G5_ADMIN_URL ?>/img/admin_left_menu_dotted2.png" alt="●"/>
		<?php } else { ?>
			<img src="<?php echo G5_ADMIN_URL ?>/img/admin_left_menu_dotted.png" alt="●"/>
		<?php } ?>
		접속로그 변환
	</a>
</ul>
<ul class="admin_menu_left_sub <?php if ($menu_left_code == 114) echo "admin_menu_left_on"; ?>">
	<a href="<?php echo G5_ADMIN_URL ?>/service.php">
		<?php if ($menu_left_code == 114) { ?>
			<img src="<?php echo G5_ADMIN_URL ?>/img/admin_left_menu_dotted2.png" alt="●"/>
		<?php } else { ?>
			<img src="<?php echo G5_ADMIN_URL ?>/img/admin_left_menu_dotted.png" alt="●"/>
		<?php } ?>
		부가서비스
	</a>
</ul>
<?php } ?>