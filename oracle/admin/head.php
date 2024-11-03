<?php
//include_once('../common.php');
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if(!$is_admin) alert("관리자 전용기능입니다.",G5_BBS_URL."/login.php?url=".G5_URL."/admin");

//run_event('pre_head');

include_once(G5_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
include_once('./admin.lib.php');
include_once(G5_PATH.'/admin/admin.lib.php');

?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css">
<link rel="stylesheet" href="<?=G5_URL?>/admin/css/jquery-ui.min.css">
<link rel="stylesheet" href="<?=G5_URL?>/admin/css/admin_style.css">
<link rel="stylesheet" href="<?=G5_URL?>/admin/css/member.css">
<link rel="stylesheet" href="<?=G5_URL?>/admin/css/theme.css">
<link rel="stylesheet" href="<?=G5_URL?>/admin/css/admin.css">
<link rel="stylesheet" href="<?=G5_URL?>/admin/sms_admin/css/sms5.css">
<script src="<?=G5_JS_URL?>/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="<?=G5_URL?>/admin/js/jquery-ui.min.js"></script>
<script src="<?=G5_URL?>/admin/js/moment.min.js"></script>
<script src="<?=G5_URL?>/admin/js/jquery.animateNumber.min.js"></script>

<!--
 <script src="<?=G5_URL?>/admin/admin.js"></script> 
<script src="http://dmaps.daum.net/map_js_init/postcode.v2.js"></script>-->

<body>
	<header>
			<div class="top">
				<div class="top_logo"><a href="<?php echo G5_URL; ?>/admin/index.php" target="_self"><span>ORACLE</span><p>ADMIN</p></a></div>
				<div class="top_home">
					<a href="/"><i class="ri-home-8-line"></i></a>
					<div>
						<p class="hidden_open">관리자<i class="ri-arrow-down-s-fill"></i></p>
					</div>
					<div class="hidden_home hide">
						<div><a href="member_write.php?mb_no=<?= $member['mb_no']?>&type=u">관리자정보</a></div>
						<div><a href="<?php echo G5_URL; ?>/bbs/logout.php">로그아웃</a></div>
					</div>
				</div>
			</div>
		</header>
		<div class="content_wrap">
			<div class="left">
				<div class="left_menu">
					<div class="info">
						<div class="img">
								<?php echo get_member_profile_img($member['mb_id']); ?>
						</div>
						<p><?php echo $member['mb_id'] ?></p>
						<ul>
							<li><a href="/"><i class="ri-home-8-line"></i></a></li>
							<li><a href="<?php echo G5_URL; ?>/bbs/logout.php"><i class="ri-logout-box-r-line"></i></a></li>
						</ul>
					</div>
					<div class="menu_list">
						<ul>
						<?php
							$sk_text = array('방문자 접속 통계',/*'상담관리',*/'회원관리','콘텐츠 관리','팝업 관리','설정관리');
							//$sk_icon = array("ri-line-chart-line","ri-question-answer-line","ri-team-line","ri-computer-line",'ri-pencil-line',"ri-settings-5-line");
							$sk_icon = array("ico_count",/*"ico_consuling",*/"ico_member","ico_con","ico_board","ico_setting");
							for($i=0; $i<count($sk_text); $i++) {
								$active = '';
                                
								if($sk_text[$i] == '방문자 접속 통계') {
									$sk_url = array(/*'visit.php',*/'visit_list.php','visit_search.php'/*,'page.php'*/);
									$sk_text2 = array(/*'방문자 접속 통계',*/'방문자 접속 통계','접속자 검색'/*,'페이지별 접속 통계'*/);
								}
                                
                                /*
								if($sk_text[$i] == '상담관리') {
									$sk_url = array('consul_statis.php','consul_mng.php');
									$sk_text2 = array('상담신청 통계','상담신청 관리');
								}
                                */
                                
								if($sk_text[$i] == '회원관리') {
									$sk_url = array('member_list.php');
									$sk_text2 = array('회원관리');
								}

								if($sk_text[$i] == '콘텐츠 관리') {
									$sk_url = array('bbs/board.php?bo_table=ranking','bbs/board.php?bo_table=doctor','bbs/board.php?bo_table=equipment','bbs/board.php?bo_table=notice_event','bbs/board.php?bo_table=online','bbs/board.php?bo_table=youtube','bbs/board.php?bo_table=review','bbs/board.php?bo_table=text_review');
									$sk_text2 = array('주간 BEST 관리','의료진 관리','장비 관리','공지사항/이벤트','온라인상담','유튜브','전후사진','손글씨후기');
								}
                                /*
								if($sk_text[$i] == '게시판 관리') {
									$sk_url = array('board_list.php','boardgroup_list.php','contentlist.php','faqmasterlist.php' );
									$sk_text2 = array('게시판관리','게시판그룹관리','내용관리','FAQ관리');
								}
                                */
								if($sk_text[$i] == '팝업 관리') {
									$sk_url = array('newwinlist.php');
									$sk_text2 = array('팝업레이어관리');
								}
                                
								if($sk_text[$i] == '설정관리') {
									$sk_url = array('config_form.php','board_list.php','boardgroup_list.php','contentlist.php','faqmasterlist.php');
									$sk_text2 = array('기본설정','게시판관리','게시판그룹관리','내용관리','FAQ관리');
								}

								for($j=0; $j<count($sk_text2); $j++) if($_SERVER['REQUEST_URI'] == '/admin/'.$sk_url[$j]) $active = 'active';
						 ?>
							<li class="<?= $active?>">
								<div>
									<img src="<?= G5_URL;?>/admin/img/<?=$sk_icon[$i]?>.png">
								</div>
									<p><?= $sk_text[$i]?></p>
								<ul class="hidden_menu">
								<?php for($j=0; $j<count($sk_text2); $j++) {
									if($_SERVER['REQUEST_URI'] == '/admin/'.$sk_url[$j]) $sub_active = 'sub_active';
									else $sub_active = '';
								?>
									<li><a  class='<?=$sub_active?>' href="<?php echo G5_URL; ?>/admin/<?= $sk_url[$j]?>" target="_self"><?= $sk_text2[$j]?></a></li>
								<?php }?>
								</ul>
							</li>
						<?php } ?>
							<!-- <li>
								<div>
									<i class="ri-line-chart-line"></i><p>통계 및 카운터</p>
								</div>
								<ul class="hidden_menu">
									<li><a href="<?php echo G5_URL; ?>/admin/visit.php" target="_self">방문 접속 통계</a></li>
									<li><a href="<?php echo G5_URL; ?>/admin/page.php" target="_self">페이지별 접속 통계</a></li>
								</ul>
							</li>
							<li>
								<div>
									<i class="ri-question-answer-line"></i><p>상담관리</p>
								</div>
								<ul class="hidden_menu">
									<li><a href="<?php echo G5_URL; ?>/admin/consul_statis.php" target="_self">상담신청 통계</a></li>
									<li><a href="<?php echo G5_URL; ?>/admin/consul_mng.php" target="_self">상담신청 관리</a></li>
								</ul>
							</li>
							<li>
								<div>
									<i class="ri-team-line"></i><p>회원관리</p>
								</div>
								<ul class="hidden_menu">
									<li><a href="<?php echo G5_URL; ?>/admin/member_list.php" target="_self">회원관리</a></li>
								</ul>
							</li>
							<li>
								<div>
									<i class="ri-computer-line"></i><a href="#" target="_self">콘텐츠 관리</a>
								</div>
								<ul class="hidden_menu">
									<li><a href="<?php echo G5_URL; ?>/admin/bbs/board.php?bo_table=online" target="_self">온라인상담</a></li>
									<li><a href="<?php echo G5_URL; ?>/admin/bbs/board.php?bo_table=bna" target="_self">Before & After</a></li>
									<li><a href="<?php echo G5_URL; ?>/admin/bbs/board.php?bo_table=db_collect" target="_self">DB 게시판</a></li>
									<li><a href="<?php echo G5_URL; ?>/admin/contents/menu_config.php" target="_self">메뉴관리</a></li>
								</ul>
							</li>
							<li>
								<div>
									<i class="ri-pencil-line"></i><a href="#" target="_self">게시판 관리</a>
								</div>
								<ul class="hidden_menu">
									<li><a href="<?php echo G5_URL; ?>/admin/board_list.php" target="_self">게시판관리</a></li>
									<li><a href="<?php echo G5_URL; ?>/admin/boardgroup_list.php" target="_self">게시판그룹관리</a></li>
									<li><a href="<?php echo G5_URL; ?>/admin/contentlist.php" target="_self">내용관리</a></li>
									<li><a href="<?php echo G5_URL; ?>/admin/faqmasterlist.php" target="_self">FAQ관리</a></li>
								</ul>
							</li>
							<li>
								<div>
									<i class="ri-settings-5-line"></i><a href="#" target="_self">설정관리</a>
								</div>
								<ul class="hidden_menu">
									<li><a href="<?php echo G5_URL; ?>/admin/newwinlist.php" target="_self">팝업레이어관리</a></li>
								</ul>
							</li> -->
							<!-- <li>
								<div>
									<i class="ri-phone-line"></i><a href="#" target="_self">SMS 관리</a>
								</div>
								<ul class="hidden_menu">
									<li><a href="<?php echo G5_URL; ?>/admin/sms_admin/config.php" target="_self">SMS 기본설정</a></li>
									<li><a href="<?php echo G5_URL; ?>/admin/sms_admin/sms_write.php">문자보내기</a></li>
									<li><a href="<?php echo G5_URL; ?>/admin/sms_admin/history_list.php" target="_self">전송내역-건별</a></li>
									<li><a href="<?php echo G5_URL; ?>/admin/sms_admin/history_num.php" target="_self">전송내역-번호별</a></li>
									<li><a href="<?php echo G5_URL; ?>/admin/sms_admin/num_group.php" target="_self">휴대폰번호 그룹</a></li>
									<li><a href="<?php echo G5_URL; ?>/admin/sms_admin/num_book.php" target="_self">휴대폰번호 관리</a></li>
									<li><a href="<?php echo G5_URL; ?>/admin/sms_admin/num_book_file.php" target="_self">휴대폰번호 파일</a></li>
								</ul>
							</li> -->
						</ul>
					</div>
				</div>
			</div>

<script type="text/javascript">
$(document).ready(function(){
	$.datepicker.setDefaults({
		dateFormat: 'yy-mm-dd',
		prevText: '이전 달',
		nextText: '다음 달',
		monthNames: ['1월', '2월', '3월', '4월', '5월', '6월', '7월', '8월', '9월', '10월', '11월', '12월'],
		monthNamesShort: ['1월', '2월', '3월', '4월', '5월', '6월', '7월', '8월', '9월', '10월', '11월', '12월'],
		dayNames: ['일', '월', '화', '수', '목', '금', '토'],
		dayNamesShort: ['일', '월', '화', '수', '목', '금', '토'],
		dayNamesMin: ['일', '월', '화', '수', '목', '금', '토'],
		showMonthAfterYear: true,
		yearSuffix: '년'
		});

	$('.menu_list > ul > li').click(function(){
		$('.menu_list > ul > li').removeClass('active');
		$(this).addClass('active');

	});

	$('.date').datepicker({
		dateFormat: "yy-mm-dd"
	});

	$('.date_search > label').click(function(){
		$('.date_search > label').removeClass('active');
		$(this).addClass('active');

	});

	// $('.device > label').click(function(){
	// 	$('.device > label').removeClass('active');
	// 	$(this).addClass('active');
	//
	// });
	$('.device > .page1').click(function(){
		$('.device > .page1').removeClass('active');
		$(this).addClass('active');
	});
	$('.device > .page2').click(function(){
		$('.device > .page2').removeClass('active');
		$(this).addClass('active');
	});
	$('.device > .index1').click(function(){
		$('.device > .index1').removeClass('active');
		$(this).addClass('active');
	});
	$('.device > .index2').click(function(){
		$('.device > .index2').removeClass('active');
		$(this).addClass('active');
	});
	$('.device > .index3').click(function(){
		$('.device > .index3').removeClass('active');
		$(this).addClass('active');
	});
	$('.device > .index4').click(function(){
		$('.device > .index4').removeClass('active');
		$(this).addClass('active');
	});

	$('.device > .statis1').click(function(){
		$('.device > .statis1').removeClass('active');
		$(this).addClass('active');
	});
	$('.device > .statis2').click(function(){
		$('.device > .statis2').removeClass('active');
		$(this).addClass('active');
	});
	$('.device > .statis3').click(function(){
		$('.device > .statis3').removeClass('active');
		$(this).addClass('active');
	});
	$('.device > .statis4').click(function(){
		$('.device > .statis4').removeClass('active');
		$(this).addClass('active');
	});

	$('.device > .visit1').click(function(){
		$('.device > .visit1').removeClass('active');
		$(this).addClass('active');
	});
	$('.device > .visit2').click(function(){
		$('.device > .visit2').removeClass('active');
		$(this).addClass('active');
	});
	$('.device > .visit3').click(function(){
		$('.device > .visit3').removeClass('active');
		$(this).addClass('active');
	});
	$('.device > .visit4').click(function(){
		$('.device > .visit4').removeClass('active');
		$(this).addClass('active');
	});
	$('.device > .visit5').click(function(){
		$('.device > .visit5').removeClass('active');
		$(this).addClass('active');
	});
	$('.device > .visit6').click(function(){
		$('.device > .visit6').removeClass('active');
		$(this).addClass('active');
	});

	$('.device > .keyword20').click(function(){
		$('.device > .keyword20').removeClass('active');
		$(this).addClass('active');
	});
	$('.device > .domain20').click(function(){
		$('.device > .domain20').removeClass('active');
		$(this).addClass('active');
	});
	$('.device > .page20_btn').click(function(){
		$('.device > .page20_btn').removeClass('active');
		$(this).addClass('active');
	});
	$('.device > .exit20').click(function(){
		$('.device > .exit20').removeClass('active');
		$(this).addClass('active');
	});


	$('.consulting_search > .sta_type1').click(function(){
		$('.consulting_search > .sta_type1').removeClass('active_consulting');
		$(this).addClass('active_consulting');
	});

	$('.consulting_search > .sta_type2').click(function(){
		$('.consulting_search > .sta_type2').removeClass('active_consulting');
		$(this).addClass('active_consulting');
	});

	$('.consulting_search > .sta_type3').click(function(){
		$('.consulting_search > .sta_type3').removeClass('active_consulting');
		$(this).addClass('active_consulting');
	});

	$('.consulting_search > .sta_type4').click(function(){
		$('.consulting_search > .sta_type4').removeClass('active_consulting');
		$(this).addClass('active_consulting');
	});

	$('.hidden_open').click(function(){
		$('.hidden_home').toggleClass("hide");
	});

});

</script>
