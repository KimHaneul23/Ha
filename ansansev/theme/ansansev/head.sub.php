<?php
// 이 파일은 새로운 파일 생성시 반드시 포함되어야 함
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

$g5_debug['php']['begin_time'] = $begin_time = get_microtime();

if (!isset($g5['title'])) {
    $g5['title'] = $config['cf_title'];
    $g5_head_title = $g5['title'];
}
else {
    // 상태바에 표시될 제목
    $g5_head_title = implode(' | ', array_filter(array($g5['title'], $config['cf_title'])));
}

$g5['title'] = strip_tags($g5['title']);
$g5_head_title = strip_tags($g5_head_title);

// 현재 접속자
// 게시판 제목에 ' 포함되면 오류 발생
$g5['lo_location'] = addslashes($g5['title']);
if (!$g5['lo_location'])
    $g5['lo_location'] = addslashes(clean_xss_tags($_SERVER['REQUEST_URI']));
$g5['lo_url'] = addslashes(clean_xss_tags($_SERVER['REQUEST_URI']));
if (strstr($g5['lo_url'], '/'.G5_ADMIN_DIR.'/') || $is_admin == 'super') $g5['lo_url'] = '';

/*
// 만료된 페이지로 사용하시는 경우
header("Cache-Control: no-cache"); // HTTP/1.1
header("Expires: 0"); // rfc2616 - Section 14.21
header("Pragma: no-cache"); // HTTP/1.0
*/
?>


<?

$head_meta = "<meta name='keywords' content='안산 연세세브란스치과'>
<meta name='description' content='안산 연세세브란스치과'>

<meta property='og:url' content='http://www.ansansev.com/'>
<meta property='og:type' content='website'>
<meta property='og:title' id='ogtitle' itemprop='name' content='안산 연세세브란스치과'>
<meta property='og:description' id='ogdesc' content='안산 연세세브란스치과'>
<meta property='og:image' id='ogimg' content='http://www.ansansev.com/theme/ansansev/img/ansansev_og_img.jpg'>
<meta property='og:image:width' content='1200'>
<meta property='og:image:height' content='600'>

<meta name='twitter:title' content='안산 연세세브란스치과'>
<meta name='twitter:description' content='안산 연세세브란스치과'>
<meta name='twitter:domain' content='http://www.ansansev.com/'>
<meta name='twitter:url' content='http://www.ansansev.com/'>
<meta name='twitter:image' content='http://www.ansansev.com/theme/ansansev/img/ansansev_og_img.jpg'>
<meta name='twitter:image:width' content='1200'>
<meta name='twitter:image:height' content='600'>
<meta name='twitter:card' content='summary'>

<meta name='apple-mobile-web-app-title' content='안산 연세세브란스치과'>
<meta name='format-detection' content='telephone=no'>";

?>

<!doctype html>
<html lang="ko">
<head>
<meta charset="utf-8">
<?php
if (G5_IS_MOBILE) {
    echo '<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=0,maximum-scale=10,user-scalable=yes">'.PHP_EOL;
    echo '<meta name="HandheldFriendly" content="true">'.PHP_EOL;
    echo '<meta name="format-detection" content="telephone=no">'.PHP_EOL;
} else {
    echo '<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">'.PHP_EOL;
    echo '<meta http-equiv="imagetoolbar" content="no">'.PHP_EOL;
    echo '<meta http-equiv="X-UA-Compatible" content="IE=edge">'.PHP_EOL;
}
    
if($config['cf_add_meta'])
    echo $config['cf_add_meta'].PHP_EOL;
?>

<!--  추가  -->
<?=$head_meta?>
<!--  //추가  -->

<!-- favicon -->
<link rel="apple-touch-icon" sizes="57x57" href="<?php echo G5_THEME_URL ?>/img/favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="<?php echo G5_THEME_URL ?>/img/favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo G5_THEME_URL ?>/img/favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="<?php echo G5_THEME_URL ?>/img/favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo G5_THEME_URL ?>/img/favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="<?php echo G5_THEME_URL ?>/img/favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="<?php echo G5_THEME_URL ?>/img/favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="<?php echo G5_THEME_URL ?>/img/favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo G5_THEME_URL ?>/img/favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo G5_THEME_URL ?>/img/favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo G5_THEME_URL ?>/img/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="<?php echo G5_THEME_URL ?>/img/favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo G5_THEME_URL ?>/img/favicon/favicon-16x16.png">
<link rel="manifest" href="<?php echo G5_THEME_URL ?>/img/favicon/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="<?php echo G5_THEME_URL ?>/img/favicon/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">


<title><?php echo $g5_head_title; ?></title>
<!--<link rel="stylesheet" href="<?php echo run_replace('head_css_url', G5_THEME_CSS_URL.'/'.(G5_IS_MOBILE ? 'mobile' : 'default').'.css?ver='.G5_CSS_VER, G5_THEME_URL); ?>">-->
<!--[if lte IE 8]>
<script src="<?php echo G5_JS_URL ?>/html5.js"></script>
<![endif]-->
<script>
// 자바스크립트에서 사용하는 전역변수 선언
var g5_url       = "<?php echo G5_URL ?>";
var g5_bbs_url   = "<?php echo G5_BBS_URL ?>";
var g5_is_member = "<?php echo isset($is_member)?$is_member:''; ?>";
var g5_is_admin  = "<?php echo isset($is_admin)?$is_admin:''; ?>";
var g5_is_mobile = "<?php echo G5_IS_MOBILE ?>";
var g5_bo_table  = "<?php echo isset($bo_table)?$bo_table:''; ?>";
var g5_sca       = "<?php echo isset($sca)?$sca:''; ?>";
var g5_editor    = "<?php echo ($config['cf_editor'] && $board['bo_use_dhtml_editor'])?$config['cf_editor']:''; ?>";
var g5_cookie_domain = "<?php echo G5_COOKIE_DOMAIN ?>";

<?php if(defined('G5_IS_ADMIN')) { ?>
var g5_admin_url = "<?php echo G5_ADMIN_URL; ?>";
<?php } ?>
</script>
<?php
add_javascript('<script src="'.G5_THEME_URL.'/js/jquery-1.12.4.min.js"></script>', 0);
add_javascript('<script src="'.G5_THEME_URL.'/js/jquery-migrate-1.4.1.min.js"></script>', 0);
add_javascript('<script src="'.G5_THEME_URL.'/js/jquery.menu.js?ver='.G5_JS_VER.'"></script>', 0);
add_javascript('<script src="'.G5_THEME_URL.'/js/common.js?ver='.G5_JS_VER.'"></script>', 0);
add_javascript('<script src="'.G5_THEME_URL.'/js/wrest.js?ver='.G5_JS_VER.'"></script>', 0);
add_javascript('<script src="'.G5_THEME_URL.'/js/placeholders.min.js"></script>', 0);
add_stylesheet('<link rel="stylesheet" href="'.G5_THEME_URL.'/js/font-awesome/css/font-awesome.min.css">', 0);

if(G5_IS_MOBILE) {
    echo '<script src="'.G5_JS_URL.'/modernizr.custom.70111.js"></script>'.PHP_EOL; // overflow scroll 감지
}
if(!defined('G5_IS_ADMIN'))
    echo $config['cf_add_script'];
?>

<!-- Google Font -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
<!-- Plugin CSS -->
<link href="<?php echo G5_THEME_URL?>/plugins/swiper/swiper-bundle.min.css" rel="stylesheet">
<!-- Custom CSS -->
<link href="<?php echo G5_THEME_URL?>/css/common.css" rel="stylesheet">
<link href="<?php echo G5_THEME_URL?>/css/main.css" rel="stylesheet">
<link href="<?php echo G5_THEME_URL?>/css/sub.css" rel="stylesheet">
<link href="<?php echo G5_THEME_URL?>/css/responsive.css" rel="stylesheet">
<!--<link href="<?php echo G5_THEME_URL?>/dist/main.css" rel="stylesheet">-->

</head>
<body<?php echo isset($g5['body_script']) ? $g5['body_script'] : ''; ?>>
<?php
//if ($is_member) { // 회원이라면 로그인 중이라는 메세지를 출력해준다.
//    $sr_admin_msg = '';
//    if ($is_admin == 'super') $sr_admin_msg = "최고관리자 ";
//    else if ($is_admin == 'group') $sr_admin_msg = "그룹관리자 ";
//    else if ($is_admin == 'board') $sr_admin_msg = "게시판관리자 ";
//
//    echo '<div id="hd_login_msg">'.$sr_admin_msg.get_text($member['mb_nick']).'님 로그인 중 ';
//    echo '<a href="'.G5_BBS_URL.'/logout.php">로그아웃</a></div>';
//}