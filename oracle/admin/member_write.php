<?
include_once('./_common.php');
include_once(G5_PATH.'/admin/head.php');

$sql = "select * from g5_member where mb_no={$_GET['mb_no']}";
$result = sql_fetch($sql);

// 본인확인
$mb_certify_yes  =  $result['mb_certify'] ? 'checked="checked"' : '';
$mb_certify_no   = !$result['mb_certify'] ? 'checked="checked"' : '';

//메일수신
$mb_mailling_yes    =  $result['mb_mailling']   ? 'checked="checked"' : '';
$mb_mailling_no     = !$result['mb_mailling']   ? 'checked="checked"' : '';

// SMS 수신
$mb_sms_yes         =  $result['mb_sms']        ? 'checked="checked"' : '';
$mb_sms_no          = !$result['mb_sms']        ? 'checked="checked"' : '';

// 정보 공개
$mb_open_yes        =  $result['mb_open']       ? 'checked="checked"' : '';
$mb_open_no         = !$result['mb_open']       ? 'checked="checked"' : '';

// 성인인증
$mb_adult_yes       =  $result['mb_adult']      ? 'checked="checked"' : '';
$mb_adult_no        = !$result['mb_adult']      ? 'checked="checked"' : '';

// 성별확인
$mb_gender_man  =  $result['mb_1'] == "남자" ? 'checked="checked"' : '';
$mb_gender_woman  = $result['mb_1'] == "여자" ? 'checked="checked"' : '';

//readonly
if($type == "u") $readonly = 'readonly';
?>
<div class="right member_write">
				<div class="content_box">
					<div>
						<div class="title">
							<span>회원관리</span>
						</div>

						<!-- <div class="chart">
							<div class="chart_title">
								<p class="date">2021-01-28</p>
								<p> 일자 </p>
								<span>방문자 접속통계</span>
							</div>

							<div class="chart_wrap">
								<ul class="chart_num">
									<li class="color_gray">
										<p>어제</p>
										<span>12</span>
									</li>
									<li class="color_blue">
										<p>오늘</p>
										<span>12</span>
									</li>
									<li>
										<p>누적 회원수</p>
										<span>12</span>
									</li>
								</ul>
								<div class="chart_area"></div>
							</div>


						</div> -->
					</div>
				</div>



				<div class="content_box">
					<div class="write_wrap">
						<div class="title">
							<?php if($type == 'u') echo "회원수정";
									else echo "회원추가";
							 ?>
						</div>

						<form id="fregisterform" name="fregisterform" method="post" action="<?php echo G5_URL; ?>/admin/json/member_update.php">
							<input type="hidden" name="mb_no" value="<?php echo $result['mb_no']?>">
							<input type="hidden" name="write_type" value="<?php echo $type?>">
							<ul class="form_left">
								<li>
									<span>아이디</span>
									<input type="text" name="mb_id" value="<?php echo $result['mb_id']?>" <?php echo $readonly?>>
								</li>
								<li>
									<span>이름(실명)</span>
									<input type="text" name="mb_name" value="<?php echo $result['mb_name']?>">
								</li>
								<li>
									<span>회원 권환</span>
									<input type="text" name="mb_level" value="<?php echo $result['mb_level']?>">
								</li>
								<li>
									<span>E-mail</span>
									<input type="text" name="mb_email" value="<?php echo $result['mb_email']?>">
								</li>
								<li>
									<span>휴대폰번호</span>
									<input type="text" name="mb_hp" value="<?php echo $result['mb_hp']?>">
								</li>
								<li>
									<span>본인 확인방법</span>
									<div class="radio_wrap">
										<input type="radio" name="confirm" id="ifen">
										<label for="ifen">
											<span class="fl_left"><i class="ri-checkbox-blank-circle-fill"></i></span>아이핀
										</label>
									</div>
									<div class="radio_wrap">
										<input type="radio" name="confirm" id="mobile">
										<label for="mobile">
											<span class="fl_left"><i class="ri-checkbox-blank-circle-fill"></i></span>휴대폰
										</label>
									</div>
								</li>
								<li>
									<span>본인 확인</span>
									<div class="radio_wrap">
										<input type="radio" name="mb_certify" value="1" id="auth_true" <?php echo $mb_certify_yes; ?>>
										<label for="auth_true">
											<span class="fl_left"><i class="ri-checkbox-blank-circle-fill"></i></span>예
										</label>
									</div>
									<div class="radio_wrap">
										<input type="radio" name="mb_certify" value="" id="auth_false" <?php echo $mb_certify_no; ?>>
										<label for="auth_false">
											<span class="fl_left"><i class="ri-checkbox-blank-circle-fill"></i></span>아니오
										</label>
									</div>
								</li>
								<li class="addr_area">
									<span>주소</span>
									<!-- <div>
										<div>
											<input type="text">
											<a href="#">주소검색</a>
										</div>
										<div>
											<input type="text">
											<a href="#">기본주소</a>
										</div>
										<div>
											<input type="text">
											<a href="#">상세주소</a>
										</div>
									</div> -->
									<div>
										<label for="reg_mb_zip" class="sound_only">우편번호<?php echo $config['cf_req_addr']?'<strong class="sound_only"> 필수</strong>':''; ?></label>

										<input type="text" name="mb_zip" value="<?php echo $result['mb_zip1'].$result['mb_zip2']; ?>" id="reg_mb_zip" <?php echo $config['cf_req_addr']?"required":""; ?> class="frm_input <?php echo $config['cf_req_addr']?"required":""; ?>" size="5" maxlength="6"  placeholder="우편번호">

										<button type="button" class="btn_frmline" onclick="win_zip('fregisterform', 'mb_zip', 'mb_addr1', 'mb_addr2', 'mb_addr3', 'mb_addr_jibeon');">주소 검색</button><br>

										<input type="text" name="mb_addr1" value="<?php echo get_text($result['mb_addr1']) ?>" id="reg_mb_addr1" <?php echo $config['cf_req_addr']?"required":""; ?> class="frm_input frm_address full_input <?php echo $config['cf_req_addr']?"required":""; ?>" size="50"  placeholder="기본주소">
										<label for="reg_mb_addr1" class="sound_only">기본주소<?php echo $config['cf_req_addr']?'<strong> 필수</strong>':''; ?></label><br>

										<input type="text" name="mb_addr2" value="<?php echo get_text($result['mb_addr2']) ?>" id="reg_mb_addr2" class="frm_input frm_address full_input" size="50"  placeholder="상세주소">
										<label for="reg_mb_addr2" class="sound_only">상세주소</label>

										<br>
										<input type="text" name="mb_addr3" value="<?php echo get_text($result['mb_addr3']) ?>" id="reg_mb_addr3" class="frm_input frm_address full_input" size="50" readonly="readonly"  placeholder="참고항목">
										<label for="reg_mb_addr3" class="sound_only">참고항목</label>

										<input type="hidden" name="mb_addr_jibeon" value="<?php echo get_text($result['mb_addr_jibeon']); ?>">
									</div>
								</li>
								<li class="memo_area">
									<span>메모</span>
									<textarea name="mb_memo"><?php echo $result['mb_memo']?></textarea>
								</li>
								<li>
									<span>회원가입일</span>
									<?php echo $result['mb_datetime']?>
								</li>
								<li>
									<span>IP</span>
									<?php echo $result['mb_ip'] ?>
								</li>
								<li>
									<span>탈퇴일자</span>
									<?php echo $result['mb_leave_date']?>
								</li>
							</ul>

							<ul class="form_right">
								<li>
									<span>비밀번호</span>
									<input type="text" name="mb_password">
								</li>
								<li>
									<span>닉네임</span>
									<input type="text" name="mb_nick" value="<?php echo $result['mb_nick']?>">
								</li>
								<li>
									<span>성별</span>
									<div class="radio_wrap">
										<input type="radio" name="mb_1" value="남자" id="male" <?php echo $mb_gender_man; ?>>
										<label for="male">
											<span class="fl_left"> <i class="ri-checkbox-blank-circle-fill"></i></span>남성
										</label>
									</div>
									<div class="radio_wrap">
										<input type="radio" name="mb_1" id="women" value="여자" <?php echo $mb_gender_woman;  ?>>
										<label for="women">
											<span class="fl_left"><i class="ri-checkbox-blank-circle-fill"></i></span>여성
										</label>
									</div>
								</li>
								<li>
									<span>나이</span>
									<select name="mb_2">
										<option value="10대" <?=$result['mb_2'] == "10대" ? 'selected':''?> >10대</option>
										<option value="20대" <?=$result['mb_2'] == "20대" ? 'selected':''?> >20대</option>
										<option value="30대" <?=$result['mb_2'] == "30대" ? 'selected':''?> >30대</option>
										<option value="40대" <?=$result['mb_2'] == "40대" ? 'selected':''?> >40대</option>
										<option value="50대" <?=$result['mb_2'] == "50대" ? 'selected':''?>>50대</option>
										<option value="60대" <?=$result['mb_2'] == "60대" ? 'selected':''?> >60대</option>
										<option value="70대" <?=$result['mb_2'] == "70대" ? 'selected':''?> >70대</option>
									</select>
								</li>
								<li>
									<span>전화번호</span>
									<input type="text"name="mb_tel" value="<?php echo $result['mb_tel']?>">
								</li>
								<li>
									<span>내원여부</span>
									<select name="mb_3">
										<option value="미내원" <?=$result['mb_3'] == "미내원" ? 'selected':''?>>미내원</option>
										<option value="내원" <?=$result['mb_3'] == "내원" ? 'selected':''?>>내원</option>
									</select>
								<li>
									<span>관심부위</span>
									<select name="mb_4">
										<option value="안면윤곽" <?=$result['mb_4'] == "안면윤곽" ? 'selected':''?>>안면윤곽</option>
										<option value="가슴" <?=$result['mb_4'] == "가슴" ? 'selected':''?>>가슴</option>
										<option value="눈" <?=$result['mb_4'] == "눈" ? 'selected':''?>>눈</option>
										<option value="코" <?=$result['mb_4'] == "코" ? 'selected':''?>>코</option>
										<option value="안티에이징" <?=$result['mb_4'] == "안티에이징" ? 'selected':''?>>안티에이징</option>
										<option value="체형" <?=$result['mb_4'] == "체형" ? 'selected':''?>>체형</option>
										<option value="쁘띠" <?=$result['mb_4'] == "쁘띠" ? 'selected':''?>>쁘띠</option>
										<option value="피부" <?=$result['mb_4'] == "피부" ? 'selected':''?>>피부</option>
									</select>
								</li>
								<li>
									<span>메일수신</span>
									<div class="radio_wrap">
										<input type="radio" name="mb_mailling" value="1" id="mail_true" <?php echo $mb_mailling_yes;?>>
										<label for="mail_true">
											<span class="fl_left"><i class="ri-checkbox-blank-circle-fill"></i></span>예
										</label>
									</div>
									<div class="radio_wrap">
										<input type="radio" name="mb_mailling" value="0" id="mail_false" <?php echo $mb_mailling_no;?>>
										<label for="mail_false">
											<span class="fl_left"><i class="ri-checkbox-blank-circle-fill"></i></span>아니오
										</label>
									</div>
								</li>
								<li>
									<span>SMS수신</span>
									<div class="radio_wrap">
										<input type="radio" name="mb_sms" value="1" id="sms_true" <?php echo $mb_sms_yes;?>>
										<label for="sms_true">
											<span class="fl_left"><i class="ri-checkbox-blank-circle-fill"></i></span>예
										</label>
									</div>
									<div class="radio_wrap">
										<input type="radio" name="mb_sms" value="0" id="sms_false" <?php echo $mb_sms_no;?>>
										<label for="sms_false">
											<span class="fl_left"><i class="ri-checkbox-blank-circle-fill"></i></span>아니오
										</label>
									</div>
								</li>
								<li>
									<span>정보공개</span>
									<div class="radio_wrap">
										<input type="radio" name="mb_open" value="1" id="info_true" <?php echo $mb_open_yes;?>>
										<label for="info_true">
											<span class="fl_left"><i class="ri-checkbox-blank-circle-fill"></i></span>예
										</label>
									</div>
									<div class="radio_wrap">
										<input type="radio" name="mb_open" value="0" id="info_false" <?php echo $mb_open_no;?>>
										<label for="info_false">
											<span class="fl_left"><i class="ri-checkbox-blank-circle-fill"></i></span>아니오
										</label>
									</div>
								</li>
								<li>
									<span>성인인증</span>
									<div class="radio_wrap">
										<input type="radio" name="mb_adult" value="1" id="adult_true" <?php echo $mb_adult_yes;?>>
										<label for="adult_true">
											<span class="fl_left"><i class="ri-checkbox-blank-circle-fill"></i></span>예
										</label>
									</div>
									<div class="radio_wrap">
										<input type="radio" name="mb_adult" value="0" id="adult_false" <?php echo $mb_adult_no;?>>
										<label for="adult_false">
											<span class="fl_left"><i class="ri-checkbox-blank-circle-fill"></i></span>아니오
										</label>
									</div>
								</li>
								<li>
									<span>최근접속일</span>
									<?php echo $result['mb_today_login'];?>
								</li>
								<li>
									<span>접근 차단일</span>
									<?php echo $result['mb_intercept_date'];?>
								</li>
								<li>
									<span>가입기능</span>
									<?php if(strpos($result['mb_id'],"kakao_") !== false) {?>
										<img src="./img/kakao.png">
									<?php }else if(strpos($result['mb_id'],"naver_")  !== false) {?>
										<img src="./img/naver.png">
									<?php }else if(strpos($result['mb_id'],"facebook_")  !== false) {?>
										<img src="./img/facebook.png">
									<?php }else if(strpos($result['mb_id'],"google")  !== false){ ?>
										<img src="./img/google.png">
									<?php }else{ ?>
										사이트 가입
									<?php }?>
								</li>
							</ul>

							<div class="btn_form">
								<button class="btn_confrim">확인</button>
								<button class="btn_list" type="button" onclick="location.href='member_list.php' ">목록</button>
							</div>

						</form>

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
<script src="<?=G5_URL?>/admin/js/moment.min.js"></script>
<script src="<?=G5_URL?>/admin/js/jquery.animateNumber.min.js"></script>
<script src="<?=G5_URL?>/admin/js/member_write.js"></script>
