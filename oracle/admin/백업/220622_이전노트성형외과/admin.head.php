<?php
if (!defined('_GNUBOARD_')) exit;
define('G5_ADMIN_BBS_DIR', G5_URL.'admin/bbs');
define('G5_ADMIN_BBS_URL', G5_URL.'/admin/bbs');
define('G5_ADMIN_BBS_PATH', G5_PATH.'/admin/bbs');
$begin_time = get_microtime();

include_once(G5_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');

function print_menu1($key, $no)
{
    global $menu;

    $str = print_menu2($key, $no);

    return $str;
}

function print_menu2($key, $no)
{
    global $menu, $auth_menu, $is_admin, $auth, $g5;

    $str .= "<ul class=\"gnb_2dul\">";
    for($i=1; $i<count($menu[$key]); $i++)
    {
        if ($is_admin != 'super' && (!array_key_exists($menu[$key][$i][0],$auth) || !strstr($auth[$menu[$key][$i][0]], 'r')))
            continue;

        if (($menu[$key][$i][4] == 1 && $gnb_grp_style == false) || ($menu[$key][$i][4] != 1 && $gnb_grp_style == true)) $gnb_grp_div = 'gnb_grp_div';
        else $gnb_grp_div = '';

        if ($menu[$key][$i][4] == 1) $gnb_grp_style = 'gnb_grp_style';
        else $gnb_grp_style = '';

        $str .= '<li class="gnb_2dli"><a href="'.$menu[$key][$i][2].'" class="gnb_2da '.$gnb_grp_style.' '.$gnb_grp_div.'">'.$menu[$key][$i][1].'</a></li>';

        $auth_menu[$menu[$key][$i][0]] = $menu[$key][$i][1];
    }
    $str .= "</ul>";

    return $str;
}
?>

<script>
var tempX = 0;
var tempY = 0;

function imageview(id, w, h)
{

    menu(id);

    var el_id = document.getElementById(id);

    //submenu = eval(name+".style");
    submenu = el_id.style;
    submenu.left = tempX - ( w + 11 );
    submenu.top  = tempY - ( h / 2 );

    selectBoxVisible();

    if (el_id.style.display != 'none')
        selectBoxHidden(id);
}
</script>

<div id="to_content"><a href="#container">본문 바로가기</a></div>

<header id="hd">
    <div id="hd_wrap">
        <h1><?php echo $config['cf_title'] ?></h1>

        <div id="logo">
			<span id="logo_admin"><a href="<?php echo G5_ADMIN_URL ?>">ADMINSTRATOR</a></span>
			<span id="logo_domain">
				도메인&nbsp;&nbsp;:&nbsp;&nbsp;<a href="<?php echo G5_URL ?>" target="_blank"><?php echo G5_URL ?></a>
			</span>
			<span id="logo_span">|</span>
			<span id="logo_ver">
				버전&nbsp;&nbsp;:&nbsp;&nbsp;2.1.1
			</span>
		</div>
		<ul id="tnb">
            <li>대표운영자님</li>
            <li id="tnb_logout"><a href="<?php echo G5_BBS_URL ?>/logout.php">로그아웃</a></li>
        </ul>
		<div id="hd_menu">
			<ul id="hd_menu_logo" style="width:150px">
				<a href="<?php echo G5_ADMIN_URL ?>">
					<!--<img src="<?php echo G5_ADMIN_URL ?>/img/admin_logo.png" alt="IST CREATIVE DESIGN"/>-->
					<?php echo latest("main_logo","main_logo",1,50); ?>
				</a>
			</ul>
			<?php if($member[mb_id] == 'spadmin') { ?>
			<ul id="hd_menu_1" class="hd_menu_num <?php if($hd_menu_code == 1) echo "hd_menu_on"; ?>">
				<a href="<?php echo G5_ADMIN_URL ?>/config_form.php">
					<?php if ($hd_menu_code == 1) { ?>
						<img src="<?php echo G5_ADMIN_URL ?>/img/menu_bt_over_01.png" alt="환경설정"/>
					<?php } else { ?>
						<img src="<?php echo G5_ADMIN_URL ?>/img/menu_bt_01.png" alt="환경설정"/>
					<?php } ?>
				</a>
			</ul>
			<?php } else { ?>
			<ul id="hd_menu_1" class="hd_menu_num <?php if($hd_menu_code == 1) echo "hd_menu_on"; ?>">
				<a href="<?php echo G5_ADMIN_URL ?>/newwinlist.php">
					<?php if ($hd_menu_code == 1) { ?>
						<img src="<?php echo G5_ADMIN_URL ?>/img/menu_bt_over_01.png" alt="환경설정"/>
					<?php } else { ?>
						<img src="<?php echo G5_ADMIN_URL ?>/img/menu_bt_01.png" alt="환경설정"/>
					<?php } ?>
				</a>
			</ul>
			<?php } ?>
			<ul id="hd_menu_2" class="hd_menu_num <?php if($hd_menu_code == 2) echo "hd_menu_on"; ?>">
				<a href="<?php echo G5_ADMIN_URL ?>/member_list.php">
					<?php if ($hd_menu_code == 2) { ?>
						<img src="<?php echo G5_ADMIN_URL ?>/img/menu_bt_over_02.png" alt="회원관리"/>
					<?php } else { ?>
						<img src="<?php echo G5_ADMIN_URL ?>/img/menu_bt_02.png" alt="회원관리"/>
					<?php } ?>
				</a>
			</ul>
			<ul id="hd_menu_3" class="hd_menu_num <?php if($hd_menu_code == 3) echo "hd_menu_on"; ?>">
				<a href="<?php echo G5_ADMIN_URL ?>/bbs/board.php?bo_table=online_consulting">
					<?php if ($hd_menu_code == 3) { ?>
						<img src="<?php echo G5_ADMIN_URL ?>/img/menu_bt_over_03.png" alt="컨텐츠관리"/>
					<?php } else { ?>
						<img src="<?php echo G5_ADMIN_URL ?>/img/menu_bt_03.png" alt="컨텐츠관리"/>
					<?php } ?>
				</a>
			</ul>
			<?php if($member[mb_id] == 'spadmin') { ?>
			<ul id="hd_menu_4" class="hd_menu_num <?php if($hd_menu_code == 4) echo "hd_menu_on"; ?>">
				<a href="<?php echo G5_ADMIN_URL ?>/board_list.php">
					<?php if ($hd_menu_code == 4) { ?>
						<img src="<?php echo G5_ADMIN_URL ?>/img/menu_bt_over_04.png" alt="게시판관리"/>
					<?php } else { ?>
						<img src="<?php echo G5_ADMIN_URL ?>/img/menu_bt_04.png" alt="게시판관리"/>
					<?php } ?>
				</a>
			</ul>
			<?php } else { ?>
			<ul id="hd_menu_4" class="hd_menu_num <?php if($hd_menu_code == 4) echo "hd_menu_on"; ?>">
				<a href="<?php echo G5_ADMIN_URL ?>/write_count.php">
					<?php if ($hd_menu_code == 4) { ?>
						<img src="<?php echo G5_ADMIN_URL ?>/img/menu_bt_over_04.png" alt="게시판관리"/>
					<?php } else { ?>
						<img src="<?php echo G5_ADMIN_URL ?>/img/menu_bt_04.png" alt="게시판관리"/>
					<?php } ?>
				</a>
			</ul>
			<?php } ?>
			<ul id="hd_menu_5" class="hd_menu_num <?php if($hd_menu_code == 5) echo "hd_menu_on"; ?>">
				<a href="<?php echo G5_ADMIN_URL ?>/sms_admin/config.php">
					<?php if ($hd_menu_code == 5) { ?>
						<img src="<?php echo G5_ADMIN_URL ?>/img/menu_bt_over_05.png" alt="SMS관리"/>
					<?php } else { ?>
						<img src="<?php echo G5_ADMIN_URL ?>/img/menu_bt_05.png" alt="SMS관리"/>
					<?php } ?>
				</a>
			</ul>
		</div>
    </div>
</header>