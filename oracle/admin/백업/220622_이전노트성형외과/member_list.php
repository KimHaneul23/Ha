<?
include_once('./_common.php');
include_once(G5_PATH.'/admin/head.php');


// 검색
$where ="where 1=1";
if($search_attention) $where .=" and mb_4 = '{$search_attention}'"; // 관심부위
if($search_gender) $where .=" and  mb_1='{$search_gender}'"; // 성별
if($search_visit) $where .=" and mb_3='{$search_visit}'"; // 내원여부
if($search_age) $where .=" and mb_2='{$search_age}'"; // 나이대

if($start_date) $where .=" and date(mb_datetime) >= '{$start_date}'"; // 시작날짜
if($end_date) $where .=" and date(mb_datetime) <= '{$end_date}'"; // 끝날짜

if($search_state == 1) $where .=" and mb_leave_date =''"; // 회원상태(회원)
if($search_state == 2) $where .=" and mb_leave_date !=''"; // 회원상태(탈퇴)

if($search_login == 'naver') $where .=" and mb_id like 'naver_%'"; // 로그인 기능
if($search_login == 'kakao') $where .=" and mb_id like 'kakao_%'"; // 로그인 기능
if($search_login == 'facebook') $where .=" and mb_id like 'facebook_%'"; // 로그인 기능
if($search_login== 'google') $where .=" and mb_id like 'google_%'"; // 로그인 기능

if($search) $where .=" and (mb_name like'{$search}%' or mb_id like'{$search}%' or mb_email like'{$search}%' or mb_nick like'{$search}%' or mb_hp like '{$search}%') "; // 검색어

// 페이징 정보
$sql = " select count(*) as cnt from g5_member {$where}";
$row = sql_fetch($sql);
$total_count = $row['cnt'];

$rows = $config['cf_page_rows'];
$total_page  = ceil($total_count / $rows);  // 전체 페이지 계산
if ($page < 1) $page = 1; // 페이지가 없으면 첫 페이지 (1 페이지)
$from_record = ($page - 1) * $rows; // 시작 열을 구함

//멤버리스트 실제 쿼리
$sql = " select * from g5_member {$where} order by mb_datetime desc limit {$from_record}, {$rows} ";
$result = sql_query($sql);

//검색 갯수
$sql_count = " select * from g5_member {$where} order by mb_datetime desc limit {$from_record}, {$rows} ";
$result_count = sql_fetch($sql_count);
// 페이징시 가지고 갈 정보
$qstr="search_login=$search_login&search_state=$search_state&search=$search&search_gender=$search_gender&search_age=$search_age&search_attention=$search_attention&search_visit=$search_visit&start_date=$start_date&end_date=$end_date";

// 회원 관리 회원수
$date1 = date('Y-m-d');
if($start_date)$where2 .= "and date(mb_datetime) >='{$start_date}'";
if($end_date)$where2 .= "and date(mb_datetime) <='{$end_date}'";
if(!$end_date and !$start_date) $where2 .= "and date(mb_datetime) = '{$date1}'";


if($search_login == 'naver') $where2 .=" and mb_id like 'naver_%'"; // 로그인 기능
if($search_login == 'kakao') $where2 .=" and mb_id like 'kakao_%'"; // 로그인 기능
if($search_login == 'facebook') $where2 .=" and mb_id like 'facebook_%'"; // 로그인 기능
if($search_login== 'google') $where2 .=" and mb_id like 'google_%'"; // 로그인 기능

if($search_attention) $where2 .=" and mb_4 = '{$search_attention}'"; // 관심부위
if($search_gender) $where2 .=" and  mb_1='{$search_gender}'"; // 성별
if($search_visit) $where2 .=" and mb_3='{$search_visit}'"; // 내원여부
if($search_age) $where2 .=" and mb_2='{$search_age}'"; // 나이대

if($search) $where2 .=" and (mb_name like'{$search}%' or mb_id like'{$search}%' or mb_email like'{$search}%' or mb_nick like'{$search}%' or mb_hp like '{$search}%') "; // 검색어

$sql2 = "select count(mb_no) as count from g5_member where 1 = 1 and mb_leave_date = '' {$where2}";
$result2 = sql_fetch($sql2);

// 회원 관리 탈퇴수
$date = date('Ymd');

if($search) $where3 .=" and (mb_name like'{$search}%' or mb_id like'{$search}%' or mb_email like'{$search}%' or mb_nick like'{$search}%' or mb_hp like '{$search}%') "; // 검색어

// 탈퇴날 기준
if($start_date) $where3 .= "and DATE_FORMAT(STR_TO_DATE(mb_leave_date,'%Y%m%d'),'%Y-%m-%d') >= '{$start_date}'";
if($end_date) $where3 .="and DATE_FORMAT(STR_TO_DATE(mb_leave_date,'%Y%m%d'),'%Y-%m-%d') <= '{$end_date}'";
if(!$end_date and !$start_date) $where3 .="and mb_leave_date ='{$date}'";

//가입날 기준
//if($start_date)$where3 .= "and date(mb_datetime) >='{$start_date}'";
//if($end_date)$where3 .= "and date(mb_datetime) <='{$end_date}'";
//if(!$end_date and !$start_date) $where3 .= "and date(mb_datetime) = '{$date1}' and mb_leave_date !=''";

if($search_login == 'naver') $where3 .=" and mb_id like 'naver_%'"; // 로그인 기능
if($search_login == 'kakao') $where3 .=" and mb_id like 'kakao_%'"; // 로그인 기능
if($search_login == 'facebook') $where3 .=" and mb_id like 'facebook_%'"; // 로그인 기능
if($search_login== 'google') $where3 .=" and mb_id like 'google_%'"; // 로그인 기능

if($search_attention) $where3 .=" and mb_4 = '{$search_attention}'"; // 관심부위
if($search_gender) $where3 .=" and  mb_1='{$search_gender}'"; // 성별
if($search_visit) $where3 .=" and mb_3='{$search_visit}'"; // 내원여부
if($search_age) $where3 .=" and mb_2='{$search_age}'"; // 나이대


$sql3 ="select  count(mb_no) as count  from g5_member where 1 = 1 {$where3}";
$result3 = sql_fetch($sql3);

//메일수신
$mb_mailling_yes    =  $row['mb_mailling']   ? 'checked="checked"' : '';
$mb_mailling_no     = !$row['mb_mailling']   ? 'checked="checked"' : '';

// SMS 수신
$mb_sms_yes         =  $row['mb_sms']        ? 'checked="checked"' : '';
$mb_sms_no          = !$row['mb_sms']        ? 'checked="checked"' : '';

// 성인인증
$mb_adult_yes       =  $row['mb_adult']      ? 'checked="checked"' : '';
$mb_adult_no        = !$row['mb_adult']      ? 'checked="checked"' : '';

?>

<div class="right member_list">
				<div class="content_box">
					<div>
						<div class="title">
							<span>회원관리</span>
						</div>

						<div class="chart">
							<div class="chart_title">
								<p class="date"></p>
								<p> 일자 </p>
								<span>신규회원 통계</span>
							</div>

							<div class="chart_wrap">
								<ul class="chart_num">
									<li>
										<p>어제 <br><small>(가입일이 어제인 회원)</small></p>
										<span class="yesterday_member"></span>
									</li>
									<li class="color_blue">
										<p>오늘 <br><small>(가입일이 오늘인 회원)</small></p>
										<span class="today_member"></span>
									</li>
									<li class="color_gray">
										<p>총 회원수 <br><small>(오픈 후 현재까지)</small></p>
										<span class="total_member"></span>
									</li>
									<li class="color_gray">
										<p>총 탈퇴 회원수 <br><small>(오픈 후 현재까지)</small></p>
										<span class="leave_member"></span>
									</li>
								</ul>
								<div class="chart_area" id="chart24"></div>

							</div>
							<div class="circle_chart_text24">
								<div><span style="margin-right: -300px;">최신 3개월 회원</span></div>
							</div>

						</div>
					</div>
				</div>



				<div class="content_box">
					<div class="search">
						<form action="<?php echo G5_URL; ?>/admin/member_list.php" method="POST">
							<!-- <input type="hidden" name="search_login" value="<?php echo $search_login?>"> -->
							<input type="hidden" name="page" value="<?php echo $page ?>">
							<input type="hidden" name="token" value="">

							<ul>
								<li class="w30">
									<span>기간별 검색</span>
									<input type="text" autocomplete='off' class="date start_date" name="start_date" value="<?php echo $start_date?>"> ~
									<input type="text" autocomplete='off' class="date end_date" name="end_date" value="<?php echo $end_date?>">
								</li>
								<li>
									<span>관심부위</span>
									<select name="search_attention">
										<option value="">전체</option>
										<!-- <option value="모티바가슴성형" <?=$search_attention == "모티바가슴성형" ? 'selected':''?>>모티바가슴성형</option>
										<option value="멘토 가슴성형" <?=$search_attention == "멘토 가슴성형" ? 'selected':''?>>멘토 가슴성형</option>
										<option value="세빈 인테그리티" <?=$search_attention == "세빈 인테그리티" ? 'selected':''?>>세빈 인테그리티</option>
										<option value="가슴재수술" <?=$search_attention == "가슴재수술" ? 'selected':''?>>가슴재수술</option>
										<option value="가슴축소" <?=$search_attention == "가슴축소" ? 'selected':''?>>가슴축소</option>
										<option value="출산후 가슴성형" <?=$search_attention == "출산후 가슴성형" ? 'selected':''?>>출산후 가슴성형</option> -->

										<option value="안면윤곽" <?=$search_attention == "안면윤곽" ? 'selected':''?>>안면윤곽</option>
										<option value="가슴" <?=$search_attention == "가슴" ? 'selected':''?>>가슴</option>
										<option value="눈" <?=$search_attention == "눈" ? 'selected':''?>>눈</option>
										<option value="코" <?=$search_attention == "코" ? 'selected':''?>>코</option>
										<option value="안티에이징" <?=$search_attention == "안티에이징" ? 'selected':''?>>안티에이징</option>
										<option value="체형" <?=$search_attention == "체형" ? 'selected':''?>>체형</option>
										<option value="쁘띠" <?=$search_attention == "쁘띠" ? 'selected':''?>>쁘띠</option>
										<option value="피부" <?=$search_attention == "피부" ? 'selected':''?>>피부</option>
									</select>
								</li>
								<li>
									<span>성별</span>
									<select name="search_gender">
										<option value="">전체</option>
										<option value="남자" <?=$search_gender == "남자" ? 'selected':''?>>남성</option>
										<option value="여자" <?=$searchsearch_gender_visit == "여자" ? 'selected':''?>>여성</option>
									</select>
								</li>
								<li>
									<!--2021-05-20 삭제요청<span>내원여부</span>
									<select name="search_visit">
										<option value="">-</option>
										<option value="내원"  <?=$search_visit == "내원" ? 'selected':''?>>내원</option>
										<option value="미내원"  <?=$search_visit == "미내원" ? 'selected':''?>>미내원</option>
									</select>-->
								</li>
								<li class="w30">
									<span>검색어</span>
									<input type="text" name="search" value="<?php echo $search ?>">
									<!-- <select>
										<option>이름</option>
										<option>아이디</option>
										<option>e-mail</option>
										<option>닉네임</option>
										<option>휴대폰</option>
									</select> -->
								</li>
								<li>
									<span>회원상태</span>
									<select name="search_state">
										<option value="">전체</option>
										<option value="1" <?=$search_state == "1" ? 'selected':''?>>회원</option>
										<option value="2" <?=$search_state == "2" ? 'selected':''?>>탈퇴</option>
									</select>
								</li>
								<li>
									<span>나이대</span>
									<select name="search_age">
										<option value="">전체</option>
										<option value="10대" <?=$search_age == "10대" ? 'selected':''?>>10대</option>
										<option value="20대" <?=$search_age == "20대" ? 'selected':''?>>20대</option>
										<option value="30대" <?=$search_age == "30대" ? 'selected':''?>>30대</option>
										<option value="40대" <?=$search_age == "40대" ? 'selected':''?>>40대</option>
										<option value="50대" <?=$search_age == "50대" ? 'selected':''?>>50대</option>
										<option value="60대" <?=$search_age == "60대" ? 'selected':''?>>60대</option>
										<option value="70대" <?=$search_age == "70대" ? 'selected':''?>>70대</option>
									</select>
								</li>
								<li>
									<span>로그인 기능</span>
									<select name="search_login">
										<option value="">전체</option>
										<option value="kakao" <?=$search_login == "kakao" ? 'selected':''?>>카카오톡</option>
										<option value="google" <?=$search_login == "google" ? 'selected':''?>>구글</option>
										<option value="naver" <?=$search_login == "naver" ? 'selected':''?>>네이버</option>
										<option value="facebook" <?=$search_login == "facebook" ? 'selected':''?>>페이스북</option>
									</select>
								</li>

							</ul>
							<div>
								<div class="device">
									<button class="btn_search">검색</button>
								</div>
								<button class="btn_excel excel_button" type="button" id="excel_button">
										<img src="./img/excel.png">엑셀로 다운<i class="ri-download-2-line"></i>
								</button>
							</div>

						</form>

						<div class="search_result">
							<div class="title">회원 관리</div>

							<ul class="search_total">
							<!-- 	<li>
									<p class="color_blue">총 누적 회원수</p>
									<span>1,080</span>
								</li> -->
								<li>
									<p class="color_blue">신규회원 수</p>
									<span class="member_today ">
										<?php if($search_state == 2){ echo 0; ?>
										<?php }else{ echo $result2['count']?>
										<?php } ?>
									</span>
								</li>
								<li class="line">|</li>
								<li>
									<p class="color_blue">탈퇴 수</p>
									<span class="member_leave">
										<?php if($search_state == 1){ echo 0; ?>
										<?php }else{ echo $result3['count']?>
										<?php } ?>
									</span>
								</li>
							</ul>

							<div class="search_member">
								<div class="btn_all">
									<div class="check_all">
										<input type="checkbox" name="" id="allcheck">
										<label for="allcheck">
											<span><i class="ri-check-line"></i></span>전체선택
										</label>
									</div>
									<div class="button_3">
										<!-- <button type="button" class="chk_update">선택수정</button> -->
										<button type="button" class="chk_delete">선택삭제</button>
										<button class="bak_white" onClick="location.href='member_write.php?type=w' ">회원추가</button>

									</div>
								</div>
								<?php if(!$result_count)echo "검색 데이터가 없습니다.";?>
								<?php for ($i=0; $row=sql_fetch_array($result); $i++){ ?>

								<!-- 멤버 조회 리스트 -->
								<div class="memer_list">
									<input type="hidden" name="mb_no" value="<?php echo $row['mb_no'] ?>">

									<table>
										<tbody>
											<tr>
												<td class='tb_head w5' rowspan='2'>선택</td>
												<td class='tb_head w20' colspan="2">아이디</td>
												<td class='tb_head w8' rowspan='2'>본인확인</td>
												<td class='tb_head w8'>메일인증</th>
												<td class='tb_head w13' rowspan='2'>관심부위</td>
												<!--<td class='tb_head w8' rowspan='2'>내원여부</td>-->
												<td class='tb_head w10' rowspan='2'>상태</td>
												<td class='tb_head w8'>SMS수신</td>
												<td class='tb_head w15'>휴대폰</td>
												<td class='tb_head w8'>나이</td>
												<td class='tb_head w5'rowspan='2'>관리</td>
											</tr>
											<tr>

												<td class='tb_head w10'>이름</td>
												<td class='tb_head w10'>성별</td>
												<td class='tb_head'>성인인증</td>
												<td class='tb_head'>이메일 수신</td>
												<td class='tb_head'>이메일</td>
												<td class='tb_head'>로그인 기능</td>
											</tr>

											<tr>
												<td rowspan='2'>
													<div class="chk_member">
														<input type="checkbox" name="cnk_num" id="box_<?php echo $i ?>" class="cnk_num" value="<?php echo $row['mb_no']?>">
														<label for="box_<?php echo $i ?>">
															<span><i class="ri-check-line"></i></span>
														</label>
													</div>
												</th>
												<td colspan="2"><?php echo get_text($row['mb_id']); ?></td>
												<td rowspan='2'>
													<div class="radio_wrap">
														<input type="radio" name="confirm" id="ifen<?php echo $row['mb_no']?>">
														<label for="ifen<?php echo $row['mb_no']?>">
															<span class="fl_left"><i class="ri-checkbox-blank-circle-fill"></i></span>아이핀
														</label>
													</div>
													<div class="radio_wrap">
														<input type="radio" name="confirm" id="mobile<?php echo $row['mb_no']?>">
														<label for="mobile<?php echo $row['mb_no']?>">
															<span class="fl_left"><i class="ri-checkbox-blank-circle-fill"></i></span>휴대폰
														</label>
													</div>
												</td>
												<td>
													<?php if($row['mb_email_certify'] != "") echo "Y"?>
													<?php if($row['mb_email_certify'] == "") echo "N"?>
													<!-- <input type="radio" name="auth" id="mail">
													<label for="mail">
														<span><i class="ri-checkbox-blank-circle-fill"></i></span>
													</label> -->
												</td>
												<td rowspan='2'><?php echo get_text($row['mb_4']); ?></td>
											<!--	<td rowspan='2' class="cnk_mb_3">
													<select name="mb_3" onchange="change_mb_3(<?=$row['mb_no'];?>,this)">
														<option value="미내원" <?=$row['mb_3'] == "미내원" ? 'selected':''?>>미내원</option>
														<option value="내원" <?=$row['mb_3'] == "내원" ? 'selected':''?>>내원</option>
													</select>
												</td>-->
												<td rowspan='2'>
													<?php if($row['mb_leave_date'] =="") echo "회원"; ?>
													<?php if($row['mb_leave_date'] !="") echo "탈퇴"; ?>

												</td>
												<td class="chk_mb_sms"> <!-- sms-->
													<!-- <input type="checkbox" name="mb_sms[<?php echo $i; ?>]" <?php echo $row['mb_sms']?'checked':''; ?> value="1" id="mb_sms<?php echo $i; ?>"> -->
													<input type="checkbox" onchange="change_mb_sms(<?=$row['mb_no'];?>,this)" value="1" name="sms<?php echo $i?>" id="sms<?php echo $i?>" <?=$row['mb_sms']  ? 'checked':''?>>
													<label for="sms<?php echo $i?>">
														<span><i class="ri-check-line"></i></span>
													</label>
												</td>
												<td><?php echo get_text($row['mb_hp']); ?></td>
												<td><?php echo get_text($row['mb_2']); ?></td>
												<td rowspan='2'>
													<button onClick="location.href='member_write.php?mb_no=<?= $row['mb_no']?>&type=u' ">수정</button>
													<button class="member_delete" id=<?php echo $row['mb_no'];?>>삭제</button>
												</td>
											</tr>
											<tr>
												<td><?php echo get_text($row['mb_name']); ?></td>
												<td><?php echo get_text($row['mb_1']); ?></td>
												<td class="chk_mb_adult"><!-- 성인-->
													<input type="checkbox"  onchange="change_mb_adult(<?=$row['mb_no'];?>,this)"  value="1" name="adult<?php echo $i?>" id="adult<?php echo $i?>" <?=$row['mb_adult']  ? 'checked':''?>>
													<label for="adult<?php echo $i?>">
														<span><i class="ri-check-line"></i></span>
													</label>
												</td>
												<td class="chk_mb_mail">
													<input type="checkbox"  onchange="change_mb_mail(<?=$row['mb_no'];?>,this)"  value="1" name="mail<?php echo $i?>" id="mail<?php echo $i?>" <?=$row['mb_mailling']  ? 'checked':''?>>
													<label for="mail<?php echo $i?>">
														<span><i class="ri-check-line"></i></span>
													</label>
												</td>
												<td><?php echo get_text($row['mb_email']); ?></td>
												<td>
													<?php if(strpos($row['mb_id'],"kakao_") !== false) {?>
														<img src="./img/kakao.png">
													<?php }else if(strpos($row['mb_id'],"naver_")  !== false) {?>
														<img src="./img/naver.png">
													<?php }else if(strpos($row['mb_id'],"facebook_")  !== false) {?>
														<img src="./img/facebook.png">
													<?php }else if(strpos($row['mb_id'],"google")  !== false){ ?>
														<img src="./img/google.png">
													<?php }else{ ?>
													사이트 가입
													<?php }?>
												</td>
											</tr>
										</tbody>

									</table>
								</div>
								<?php }?>

								<!-- //멤버 조회 리스트-->
								<?php echo get_paging(G5_IS_MOBILE ? $config['cf_mobile_pages'] : $config['cf_write_pages'], $page, $total_page, '?'.$qstr.'&amp;page='); ?>
							</div>
						</div>

					</div>
					<div class="add_list">
						<ul>
							<li><a href="<?php echo G5_URL;?>/admin/member_list.php">전체목록</a></li>
							<li>
								전체회원수<span class="date_all_mb"></span>
							</li>
							<li>
								탈퇴수<span class="date_out"></span>
							</li>
						</ul>
					</div>

				</div>

			</div>
		</div>

	</body>
</html>

<script src="<?=G5_URL?>/admin/js/d3.v4.min.js"></script>
<script src="<?=G5_URL?>/admin/js/moment.min.js"></script>
<script src="<?=G5_URL?>/admin/js/jquery.animateNumber.min.js"></script>

<script src="<?=G5_URL?>/admin/js/member_list.js"></script>
<script src="<?=G5_URL?>/admin/js/chart.js"></script>

<!-- 엑셀 다운로드 -->
<script>
	$('#excel_button').click(function(){
		location.href = g5_url + '/admin/json/member.excel.php?stdt='+$('input[name="start_date"]').val() + '&eddt='+ $('input[name="end_date"]').val() +
		 '&attention='+ $('select[name="search_attention"]').val() + '&gender='+ $('select[name="search_gender"]').val() +'&visit_tmp='+ $('select[name="search_visit"]').val() +'&search='+$('input[name="search"]').val() +'&state='+$('select[name="search_state"]').val()+'&age='+$('select[name="search_age"]').val() +'&login='+$('select[name="search_login"]').val();
	});
</script>
