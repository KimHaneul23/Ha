<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (!$board['bo_use_sns']) return;

$sns_msg = urlencode(str_replace('\"', '"', $view['subject']));
//$sns_url = googl_short_url('http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
//$msg_url = $sns_msg.' : '.$sns_url;

/*
$facebook_url  = 'http://www.facebook.com/sharer/sharer.php?s=100&p[url]='.$sns_url.'&p[title]='.$sns_msg;
$twitter_url   = 'http://twitter.com/home?status='.$msg_url;
$gplus_url     = 'https://plus.google.com/share?url='.$sns_url;
*/

$sns_send  = G5_BBS_URL.'/sns_send.php?longurl='.urlencode('http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
//$sns_send .= '&amp;title='.urlencode(utf8_strcut(get_text($view['subject']),140));
$sns_send .= '&amp;title='.$sns_msg;

$facebook_url = $sns_send.'&amp;sns=facebook';
$twitter_url  = $sns_send.'&amp;sns=twitter';
$gplus_url    = $sns_send.'&amp;sns=gplus';
$bo_v_sns_class = $config['cf_kakao_js_apikey'] ? 'show_kakao' : '';
?>

<?php if($config['cf_kakao_js_apikey']) { ?>
<script src="//developers.kakao.com/sdk/js/kakao.min.js" async charset="utf-8"></script>
<script src="<?php echo G5_JS_URL; ?>/kakaolink.js" charset="utf-8"></script>
<script type='text/javascript'>
    //<![CDATA[
        // 사용할 앱의 Javascript 키를 설정해 주세요.
        Kakao.init("<?php echo $config['cf_kakao_js_apikey']; ?>");

        function Kakao_sendLink() {
            var webUrl = location.protocol+"<?php echo '//'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>",
                imageUrl = $("#bo_v_con").find("img").attr("src") || $(".view_image").find("img").attr("src") || '<?=G5_IMG_URL ?>/opengraph.jpg';
			
            Kakao.Link.sendDefault({
                objectType: 'feed',
                content: {
                    title: "<?php echo str_replace(array('%27', '&#034;' , '\"'), '', strip_tags($view['subject'])); ?>",
                    description: "<?php echo preg_replace('/\r\n|\r|\n/','', strip_tags(get_text(cut_str(strip_tags($view['wr_content']), 200), 1))); ?>",
                    imageUrl: imageUrl,
                    link: {
                        mobileWebUrl: webUrl,
                        webUrl: webUrl
                    }
                },
                buttons: [{
                    title: '자세히 보기',
                    link: {
                        mobileWebUrl: webUrl,
                        webUrl: webUrl
                    }
                }]
            });
        }
    //]]>
	
	
	// 네이버 공유
	//function naverShare() {
	//	var url = encodeURI(encodeURIComponent("<?='http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] ?>"));
	//	var title = encodeURI("<?=$view['subject'] ?>");
	//	var shareURL = "https://share.naver.com/web/shareView?url=" + url + "&title=" + title;
	//	window.open(shareURL, "win_naver", "menubar=1,resizable=1,width=600,height=600");
    //}
</script>
<?php } ?>
<script>
	// url복사
	function copyUrl() {
		var dummy   = document.createElement("input");
		var text    = location.href;
        
		document.body.appendChild(dummy);
		dummy.value = text;
		dummy.select();
		document.execCommand("copy");
		document.body.removeChild(dummy);
        
		alert("주소가 복사되었습니다.\n원하는 곳에 붙여넣기(Ctrl+V)해주세요.");
	}
</script>
<ul id="bo_v_sns" class="<?php echo $bo_v_sns_class; ?>">
	<?php if($config['cf_kakao_js_apikey']) { ?>
    <li><a href="javascript:Kakao_sendLink();" class="sns_k"><img src="<?php echo G5_SNS_URL; ?>/icon/icon_kakao.png" alt="카카오톡으로 공유하지" class="img"></a></li>
    <?php } ?>
	<!--
	<li><a href="<?php echo $facebook_url; ?>" target="_blank" class="sns_f"><img src="<?php echo G5_SNS_URL; ?>/icon/facebook.png" alt="페이스북으로 공유" class="img"><span>페이스북</span></a></li>
	<li><a href="javascript:naverShare();" class="sns_n"><img src="<?php echo G5_SNS_URL; ?>/icon/naver.png" alt="네이버로 공유" class="img"><span>네이버</span></a></li>
	-->
	<li><a href="javascript:copyUrl();" class="sns_l"><img src="<?php echo G5_SNS_URL; ?>/icon/icon_link.png" alt="링크 복사" class="img"></a></li>
    <!--
    <li><a href="<?php echo $twitter_url; ?>" target="_blank" class="sns_t"><img src="<?php echo G5_SNS_URL; ?>/icon/twitter.png" alt="트위터로  공유" width="20"><span>트위터 공유</span></a></li>
    <li><a href="<?php echo $gplus_url; ?>" target="_blank" class="sns_g"><img src="<?php echo G5_SNS_URL; ?>/icon/gplus.png" alt="구글플러스로 공유" width="20"><span>구글+ 공유</span></a></li>
    -->
</ul>
