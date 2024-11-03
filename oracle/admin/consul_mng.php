<?
include_once('./_common.php');
include_once(G5_PATH.'/admin/head.php');

// 검색
$where = "where 1 = 1";
if($start_date) $where .=" and date(wr_datetime) >= '{$start_date}'"; // 시작날짜
if($end_date) $where .=" and date(wr_datetime) <= '{$end_date}'"; // 끝날짜
if($search_attention) $where .=" and wr_2='{$search_attention}'";//상담분야
if($search_answer) $where .=" and wr_1='{$search_answer}'";//답변여부 (미정)
if($search_visit) $where .=" and wr_4='{$search_visit}'"; // 내원여부 (미정)
if($search_device) $where .=" and wr_10='{$search_device}'";//접속기기
if($search_consulting_type) $where .=" and wr_5='{$search_consulting_type}'";//상담분류 (미정)
if($search) $where .=" and (wr_3 like'{$search}%' or wr_6 like'{$search}%' or wr_content like'{$search}%' ) "; // 검색어

// 페이징 정보
$sql = " select count(*) as cnt from g5_write_db_collect {$where}";
$row = sql_fetch($sql);
$total_count = $row['cnt'];
$rows = $config['cf_page_rows'];
$total_page  = ceil($total_count / $rows);  // 전체 페이지 계산
if ($page < 1) $page = 1; // 페이지가 없으면 첫 페이지 (1 페이지)
$from_record = ($page - 1) * $rows; // 시작 열을 구함

// 페이징시 가지고 갈 정보
$qstr = "start_date=$start_date&end_date=$end_date&search_attention=$search_attention&search_answer=$search_answer&search_visit=$search_visit&search_device=$search_device&search_consulting_type=$search_consulting_type&search=$search";

// 실제 리스트 쿼리
$sql ="select * from g5_write_db_collect {$where} order by wr_datetime desc limit {$from_record}, {$rows} ";
$result = sql_query($sql);

//상담분야 top
$where2 = "where 1 = 1 and wr_5 != '랜딩상담' ";
if($start_date) $where2 .=" and date(wr_datetime) >= '{$start_date}'"; // 시작날짜
if($end_date) $where2 .=" and date(wr_datetime) <= '{$end_date}'"; // 끝날짜
if($search_attention) $where2 .=" and wr_2='{$search_attention}'";//상담분야
if($search_answer) $where2 .=" and wr_1='{$search_answer}'";//답변여부 (미정)
if($search_visit) $where2 .=" and wr_4='{$search_visit}'"; // 내원여부 (미정)
if($search_device) $where2 .=" and wr_10='{$search_device}'";//접속기기
if($search_consulting_type) $where2 .=" and wr_5='{$search_consulting_type}'";//상담분류 (미정)

if($search) $where .=" and (wr_3 like'{$search}%' or wr_6 like'{$search}%' or wr_content like'{$search}%' ) "; // 검색어
$sql2 = "select wr_2,count(*) as cnt from g5_write_db_collect {$where2} group by wr_2 order by cnt desc limit 1";
$result2 = sql_fetch($sql2);
if($result2['wr_2'] == "") $result2['wr_2'] = "-";

// 총 상담 신청 건
$where3 = 'where 1 = 1';
if($start_date) $where3 .=" and date(wr_datetime) >= '{$start_date}'"; // 시작날짜
if($end_date) $where3 .=" and date(wr_datetime) <= '{$end_date}'"; // 끝날짜
if($search_attention) $where3 .=" and wr_2='{$search_attention}'";//상담분야
if($search_answer) $where3 .=" and wr_1='{$search_answer}'";//답변여부 (미정)
if($search_visit) $where3 .=" and wr_4='{$search_visit}'"; // 내원여부 (미정)
if($search_device) $where3 .=" and wr_10='{$search_device}'";//접속기기
if($search_consulting_type) $where3 .=" and wr_5='{$search_consulting_type}'";//상담분류 (미정)
$sql3 ="select count(*) as cnt from g5_write_db_collect {$where3}";
$result3 = sql_fetch($sql3);

// 상담신청 페이지 TOP
$where4 = "where 1 = 1";
if($start_date) $where4 .=" and date(wr_datetime) >= '{$start_date}'"; // 시작날짜
if($end_date) $where4 .=" and date(wr_datetime) <= '{$end_date}'"; // 끝날짜
if($search_attention) $where4 .=" and wr_2='{$search_attention}'";//상담분야
if($search_answer) $where4 .=" and wr_1='{$search_answer}'";//답변여부 (미정)
if($search_visit) $where4 .=" and wr_4='{$search_visit}'"; // 내원여부 (미정)
if($search_device) $where4 .=" and wr_10='{$search_device}'";//접속기기
if($search_consulting_type) $where4 .=" and wr_5='{$search_consulting_type}'";//상담분류 (미정)
$sql4 ="select wr_content,count(*) as cnt from g5_write_db_collect {$where4} group by wr_content order by cnt desc limit 1";
$result4 = sql_fetch($sql4);

$result4['wr_content'] = str_replace(G5_URL.'/', '', $result4['wr_content']);

if(strpos("http://notebreast.com/landing.php", $result4['wr_content']) !== false) {
	$page_top1 = "랜딩페이지";
} else if(strpos("http://notebreast.com/m_landing.php", $result4['wr_content']) !== false) {
	$page_top1 = "모바일 랜딩페이지";
}

if(!$page_top) {
	$page_top = '-';
	$sql = "select me_code, me_link, me_name from g5_menu where length(me_code, 4) order by me_code asc";
	$qry = sql_query($sql);
	for($i=0;$chk = sql_fetch_array($qry);$i++) {
		if(strpos($chk['me_link'], $result4['wr_content']) !== false) {
			$page_top1 = $chk['me_name'];
			break;
		}
	}
}
?>

<div class="right consul_mng">
				<div class="content_box">
					<div>
						<div class="title">
							<span>상담관리</span>
						</div>
					</div>
					<div class="stats_chart">
						<div>
							<div class="chart_title">
								<p class="date"></p>
								<p> 일자 </p>
								<span>전체 상담문의 통계</span>
							</div>
							<div class="chart">
								<div class="number_chart">
									<div>
										<div class="color_gray"><p>이 달 누적 상담건 <br><small>(이번달 1일 부터)</small></p><span class="count count1"></span>건</div>
										<div><p>비용상담 <br><small>(전일 기준)</small></p><span class="count count2"></span>건</div>
										<div><p>랜딩상담 <br><small>(전일 기준)</small></p><span class="count count3"></span>건</div>
										<div class="color_blue"><p>총 상담건 <br><small>(전일 기준)</small></p><span class="count count4"></span>건</div>
										<div><p>상담신청 페이지 TOP <br><small>(전일 기준)</small></p><span class="count top count5"></span></div>
										<div><p>상담분야 TOP <br><small>(전일 기준)</small></p><span class="count top count6"></span></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="content_box">
					<div class="search">
						<form  action="<?php echo G5_URL; ?>/admin/consul_mng.php" method="POST">
							<div>
								<ul>
									<li>
										<span>기간별 검색</span>
										<div>
											<input type="text" autocomplete='off' class="date start_date" name="start_date" value="<?php echo $start_date?>"> ~
											<input type="text" autocomplete='off' class="date end_date"  name="end_date" value="<?php echo $end_date?>">
										</div>
									</li>
									<li>
										<span>상담분야</span>
										<select  name="search_attention">
											<option value="">전체</option>
											<option value="안면윤곽" <?=$search_attention == "안면윤곽" ? 'selected':''?>>안면윤곽</option>
											<option value="눈" <?=$search_attention == "눈" ? 'selected':''?>>눈</option>
											<option value="가슴" <?=$search_attention == "가슴" ? 'selected':''?>>가슴</option>
											<option value="코" <?=$search_attention == "코" ? 'selected':''?>>코</option>
											<option value="안티에이징" <?=$search_attention == "안티에이징" ? 'selected':''?>>안티에이징</option>
											<option value="쁘띠" <?=$search_attention == "쁘띠" ? 'selected':''?>>쁘띠</option>
											<option value="피부" <?=$search_attention == "피부" ? 'selected':''?>>피부</option>
									<!-- 		<option value="권순근" <?=$search_attention == "권순근" ? 'selected':''?>>권순근</option> -->
										</select>
									</li>
									<li>
										<span>답변여부</span>
										<select name="search_answer">
											<option value="">-</option>
											<option value="미답변" <?=$search_answer == "미답변" ? 'selected':''?>>미답변</option>
											<option value="답변완료" <?=$search_answer == "답변완료" ? 'selected':''?>>답변완료</option>
										</select>
									</li>
									<li>
										<span>내원여부</span>
										<select name="search_visit">
											<option value="">-</option>
											<option value="신청"  <?=$search_visit == "신청" ? 'selected':''?>>신청</option>
											<option value="내원"  <?=$search_visit == "내원" ? 'selected':''?>>내원</option>
										</select>
									</li>
								</ul>
								<ul>
									<li>
										<span>검색어</span>
										<input type="text" name="search" value="<?php echo $search ?>">
										<!-- <select>
											<option></option>
											<option>이름</option>
											<option>휴대폰</option>
										</select> -->
									</li>
									<li>
										<span>접속기기</span>
										<select name="search_device">
											<option value="">전체</option>
											<option value="PC"  <?=$search_device == "PC" ? 'selected':''?>>PC</option>
											<option value="모바일"  <?=$search_device == "모바일" ? 'selected':''?>>모바일</option>
										</select>
									</li>
									<li>
										<span>상담분류</span>
										<select name="search_consulting_type">
											<option value="">전체</option>
											<option value="랜딩상담" <?=$search_consulting_type == "랜딩상담" ? 'selected':''?>>랜딩상담</option>
											<option value="비용상담" <?=$search_consulting_type == "비용상담" ? 'selected':''?>>비용상담</option>
										</select>
									</li>
								</ul>
							</div>
							<div>
								<div class="device">
									<button class="btn_search">검색</button>
								</div>
								<button class="btn_excel excel_button" id="excel_button" type="button">
									<img src="./img/excel.png">엑셀로 다운<i class="ri-download-2-line"></i>
								</button>
							</div>

						</form>

						<div class="search_result">
							<div class="title">비용/랜딩 상담신청 및 관리 <br><small>(오픈 후 현재까지)</small></div>

							<ul class="search_total">
								<li>
									<p class="color_blue">총 상담신청 건</p>
									<span>
										<?php if($result3['cnt'] == 0) {echo "-";}
												else{echo $result3['cnt'];}
										 ?>

									</span>
								</li>
								<li>
									<p class="color_blue">상담분야 TOP</p>
									<span>
										<?php echo $result2['wr_2'];?>
									</span>
								</li>
								<li>
									<p class="color_blue">상담신청 페이지TOP</p>
									<span>
										<?php echo $page_top1;?>
									</span>
								</li>
							</ul>

							<div class="search_mng">
								<div class="btn_all">
									<div class="check_all">
										<input type="checkbox" name=""  id="allcheck">
										<label for="allcheck">
											<span><i class="ri-check-line"></i></span>전체선택
										</label>
									</div>
									<div class="button_3">
										<!-- <button>선택수정</button> -->
										<button type="button" class="chk_delete">선택삭제</button>
									</div>
								</div>
								<?php if($result3['cnt'] == 0) echo "검색 데이터가 없습니다.";?>
								<?php for ($i=0; $row=sql_fetch_array($result); $i++){ ?>
								<!-- 멤버 조회 리스트 -->


								<div class="mng_list">
									<div class="chk_member">

									</div>
									<table>
										<tbody>
											<tr>
												<td class='tb_head w5'>선택</td>
												<td class='tb_head w10'>등록일</td>
												<td class='tb_head w10'>이름</td>
												<td class='tb_head w15'>연락처(개인정보수집동의)</td>
												<td class='tb_head w15'>상담분야</td>
												<td class='tb_head w15'>접속IP/국가</td>
												<td class='tb_head w10'>디바이스</td>
												<td class='tb_head w10'>답변</td>
												<!-- <td class='tb_head'>문자발송</td> -->
												<td class='tb_head w10'>내원여부</td>
											</tr>
											<tr>
												<input type="hidden" class="chk_wrid"value="<?php echo $row['wr_id']?>">
												<td rowspan='3'>
													<input type="checkbox" name="cnk_num" id="box_<?php echo $i ?>" value="<?php echo $row['wr_id']?>">
													<label for="box_<?php echo $i ?>">
														<span><i class="ri-check-line"></i></span>
													</label>
												</td>
												<td><?php echo substr($row['wr_datetime'],0,10)?></td>
												<td><?php echo $row['wr_3']?></td>
												<td><?php echo $row['wr_6']?>/Y</td>
												<td><?php echo $row['wr_2']?></td>
												<td><?php echo $row['wr_ip']?>/한국</td>
												<td><?php echo $row['wr_10']?></td>
												<td>
													<select class="list_answer" onchange="change_wr_1(<?=$row['wr_id'];?>,this)">
														<option <?=$row['wr_1'] == "미답변" ? 'selected':''?>>미답변</option>
														<option <?=$row['wr_1'] == "답변완료" ? 'selected':''?>>답변완료</option>
													</select>
												</td>
												<!-- <td>
													<a href="#">문자보내기</a>
												</td> -->
												<td>
													<select class="list_visit" onchange="change_wr_4(<?=$row['wr_id'];?>,this)">
														<!-- <option>신청</option> -->
														<option <?=$row['wr_4'] == "신청" ? 'selected':''?>>신청</option>
														<option  <?=$row['wr_4'] == "내원" ? 'selected':''?>>내원</option>
													
													</select>
												</td>
											</tr>
											<tr>
												<td class='tb_head'>상담분류</td>
												<!-- <td colspan="2" class='tb_head'>문의내용</td> -->
												<td colspan="7" class='tb_head'>유입경로 분석(최초페이지 - 상담 신청 페이지 - 이탈페이지)</td>
											</tr>
											<tr>
												<td><?php echo $row['wr_5']?></td>
												<!-- <td colspan="2">쌍커풀 회복기간 얼마나 되나요?</td> -->
												<td colspan="7">
													<select class="se_w">
														<option>
															1. <?php
																$sql3 = "select vi_referer from g5_visit where vi_ip='{$row['wr_ip']}' order by vi_id limit 0,1";
																$result3 = sql_fetch($sql3);
																 if($result3['vi_referer']) echo $result3['vi_referer'];
																 else echo "직접입력 또는 즐겨찾기";
															?>
														</option>
														<option>2. <?php echo $row['wr_content']; ?></option>
														<option>
															3. <?php
																$sql2 = "select vi_requri from g5_visit where vi_ip='{$row['wr_ip']}' order by vi_id limit 0,1";
																$result2= sql_fetch($sql2);
																 if($result2['vi_requri']) echo"http://notebreast.com".$result2['vi_requri'];
																 else echo "-";
															?>
														</option>
													</select>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
								<!-- //멤버 조회 리스트-->
								<?php } ?>
								<!--페이징-->
								<?php echo get_paging(G5_IS_MOBILE ? $config['cf_mobile_pages'] : $config['cf_write_pages'], $page, $total_page, '?'.$qstr.'&amp;page='); ?>
								<!-- <ul class="paging">
									<li><a href="#">1</a></li>
									<li><a href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li><a href="#">4</a></li>
								</ul> -->
								<!--//페이징-->
							</div>
						</div>
					</div>
				</div>


			</div>
		</div>

	</body>
</html>
<script src="<?=G5_URL?>/admin/js/d3.v4.min.js"></script>
<script src="<?=G5_URL?>/admin/js/moment.min.js"></script>
<script src="<?=G5_URL?>/admin/js/jquery.animateNumber.min.js"></script>

<script src="<?=G5_URL?>/admin/js/consul_mng.js"></script>
<script src="<?=G5_URL?>/admin/js/chart.js"></script>
<!-- 엑셀 다운로드 -->
<script>
	$('#excel_button').click(function(){
		location.href = g5_url + '/admin/json/mng.excel.php?stdt='+$('input[name="start_date"]').val() + '&eddt='+ $('input[name="end_date"]').val() +
		 '&attention='+ $('select[name="search_attention"]').val() + '&answer='+ $('select[name="search_answer"]').val() +'&visit_yn='+ $('select[name="search_visit"]').val() +'&search='+$('input[name="search"]').val() +'&device='+$('select[name="search_device"]').val()+'&consulting_type='+$('select[name="search_consulting_type"]').val();
	});
</script>
