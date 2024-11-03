<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$content_skin_url.'/style.css">', 0);
?>
<style>
    @media (max-width:480px) { /* 헤더 화이트 */
        .header_menu_li > a{color:#000;}
        .header_menu_li > a::after{border-bottom:1px solid #000; }
        .logo > a > .logo_b{display:block;}
        .logo > a > .logo_w{display:none;}
        .glob-icon{background: url(<?php echo G5_THEME_URL?>/img/global-icon-m.png)0 100%/100% no-repeat;}
        .select-lang-btn::after{border-top-color:#000;}
        .lang-select-list{background-color:#000;}
        .lang-select-list li{color:#fff;}
        .lang-select-list li.active{color: #fff;}
        .lang-select-list > li:hover > a{color: #fff;}
        .search_icon{background: url(<?php echo G5_THEME_URL?>/img/search-icon-m.png)0 100%/100% no-repeat;}
        .hamberger .line{background:#000;}
        .hamberger .line_close{background:#000;}
        .hamberger.open .line{background:#fff;}
        .hamberger.open .line_close{ background:#fff;}
        .m_call_btn{background: url(<?php echo G5_THEME_URL?>/img/call_icon.png)0 0%/100% no-repeat;}
        .header_number > a{color:#fff;}
    }
</style>
<?php if($co_id == 'nonpay') { ?>
<link href="<?php echo G5_THEME_URL?>/skin/content/basic/style.css" rel="stylesheet">
<article id="ctt" class="ctt_<?php echo $co_id; ?>">
    <header>
        <h1><?php echo $g5['title']; ?></h1>
    </header>
    
    <div id="ctt_con">
        <?php echo $str; ?>
    </div>
    
</article>

<?php } else if($co_id == 'privacy') {   ?>
    <link href="<?php echo G5_THEME_URL?>/skin/content/basic/style2.css" rel="stylesheet">
    
	<!-- S : 내용 시작 -->
	<article id="ctt" class="container-cnt ctt_<?php echo $co_id; ?>">
        <ul class="tabbox">
            <li class="<?php if($co_id == 'privacy') { echo 'active'; } ?>"><a href="<?php echo get_pretty_url('content', 'privacy'); ?>">개인정보 처리방침</a></li>
            <li class="<?php if($co_id == 'provision') { echo 'active'; } ?>"><a href="<?php echo get_pretty_url('content', 'provision'); ?>">이용약관</a></li>
        </ul>
        
        <div id="ctt_con">
            <?php echo $str; ?>
        </div>
    </article>
	<!-- E : 내용 끝 -->
	
<?php } else if($co_id == 'provision') {   ?>
    <link href="<?php echo G5_THEME_URL?>/skin/content/basic/style2.css" rel="stylesheet">
    
	<!-- S : 내용 시작 -->
	<article id="ctt" class="container-cnt ctt_<?php echo $co_id; ?>">
        <ul class="tabbox">
            <li class="<?php if($co_id == 'privacy') { echo 'active'; } ?>"><a href="<?php echo get_pretty_url('content', 'privacy'); ?>">개인정보 처리방침</a></li>
            <li class="<?php if($co_id == 'provision') { echo 'active'; } ?>"><a href="<?php echo get_pretty_url('content', 'provision'); ?>">이용약관</a></li>
        </ul>
        
        <div id="ctt_con">
            <?php echo $str; ?>
        </div>
    </article>
	<!-- E : 내용 끝 -->
	
<?php } ?>