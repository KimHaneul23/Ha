<?php
$sub_menu = "100500";
include_once('./_common.php');

$hd_menu_code = 1;
$menu_left_code = 111;

check_demo();

auth_check($auth[$sub_menu], 'r');

$g5['title'] = 'phpinfo()';
include_once('./admin.head.php');
?>
<style>
#admin_phpinfo {background-color: #fff; color: #222; font-family: sans-serif;}
#admin_phpinfo table {border-collapse: collapse; border: 0; width: 934px; box-shadow: 1px 2px 3px #ccc;}
#admin_phpinfo .center {text-align: center;}
#admin_phpinfo .center table {margin: 1em auto; text-align: left;}
#admin_phpinfo .center th {text-align: center !important;} {border:1px solid #FFF;font-family:Verdana, sans-serif;font-size:12px;padding:4px 8px;}
#admin_phpinfo td, th {border: 1px solid #666; font-size: 95%; vertical-align: baseline; padding: 4px 5px;}
#admin_phpinfo .p {text-align: left;}
#admin_phpinfo .e {background-color: #ccf; width: 300px; font-weight: bold;}
#admin_phpinfo .h {background-color: #99c; font-weight: bold;}
#admin_phpinfo .v {background-color: #ddd; max-width: 300px; overflow-x: auto;}
#admin_phpinfo .v i {color: #999;}
#admin_phpinfo img {float: right; border: 0;}
#admin_phpinfo hr {width: 934px; background-color: #ccc; border: 0; height: 1px;}
</style>
<div id="wrapper">
	<div id="admin_menu_left">
		<?php include_once('./admin.menu.left200.php'); ?>
	</div>
    <div id="container" class="menu100_minheight">
		<div id="admin_right_wrap">
			<div class="admin_title">
				<img src="<?php echo G5_ADMIN_URL ?>/img/admin_title_bg.png" alt="●"/>
				<?=$g5['title']?>
			</div>
			<div id="admin_phpinfo">
				<?php
				ob_start();
				phpinfo();
				$pinfo = ob_get_contents();
				ob_end_clean();
				 
				$pinfo = preg_replace( '%^.*<body>(.*)</body>.*$%ms','$1',$pinfo);
				echo $pinfo;
				?>
			</div>
		</div>
	</div>
</div>

<?php
include_once('./admin.tail.php');
?>