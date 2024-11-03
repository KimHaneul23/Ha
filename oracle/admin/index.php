<?
include_once('./_common.php');
include_once(G5_PATH.'/admin/head.php');

$sql ="select * from g5_write_online order by wr_datetime desc limit 0,5";
$result = sql_query($sql);

$sql2 ="select * from g5_write_online order by wr_datetime desc limit 0,5";
$result2 = sql_fetch($sql);

?>
<div class="right main">
				<div class="content_box">
					<div>
						<div class="title">
							<span>관리자 메인</span>
							<div>
								<p class="date"></p>
								<p>일자 기준 데이터</p>
							</div>
						</div>
						<div class="stats_list" id="visit">
							<ul>
								<li><a href="#visit">방문자 접속 통계</a></li>
								<!--<li><a href="#online">상담신청 통계</a></li>-->
								<!--<li><a href="#page">페이지별 접속 통계</a></li>-->
								<li><a href="#online">최근 게시물 통계</a></li>
								<li><a href="#new">신규 회원 통계</a></li>
								<!--<li><a href="#all">전체 유입 데이터 통계</a></li>-->
							</ul>
							<!--
							<button class="btn_excel excel_button">
								<img src="./img/excel.png">엑셀로다운<i class="ri-download-2-line"></i>
							</button>
							-->
						</div>
						<div class="stats_chart">
							<div class="chart_title">
								<span>방문자 접속 통계</span>
								<a href="<?php G5_URL;?>/admin/visit_list.php"><i class="ri-add-line"></i></a>
							</div>
							<div class="chart">
								<div class="number_chart">
									<div class=""><p>방문자수 <br><small>(전일 기준)</small></p><span class="count yesterday"></span></div>
									<div class="color_gray"><p>누적 방문자 수 <br><small>(오픈 후 현재까지)</small></p><span class="count total"></span></div>
									<!-- <div><p>누적 방문자 수</p><span class="count">150</span></div> -->
								</div>
								<div class="circle_chart">
									<div class="graph_wrap">
                                        <div class="graph" id="chart1"></div>
                                        <div class="circle_chart_text2">
                                            <div><span>재방문자 율 <small>(전일 기준)</small></span></div>
                                        </div>
									</div>
									<div class="graph_wrap">
                                        <div class="graph" id="chart2"></div>
                                        <div class="circle_chart_text2">
                                            <div><span>이용기기 율 <small>(전일 기준)</small></span></div>
                                        </div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!--
				<div class="content_box" id="online">
					<div class="stats_chart online">
						<div class="chart_title">
							<span>상담신청 통계 <br><small>(전일 기준)</small></span>
							<a href="<?php G5_URL;?>/admin/consul_statis.php"><i class="ri-add-line"></i></a>
						</div>
						<div class="chart">
							<div class="number_chart">
								<div class="chart_name">총 상담신청 건</div>
								<div>
									<div><p>신청</p><span class="count mng1">0</span></div>
									 <div><p>예약</p><span class="count">56</span></div> 
									<div><p>내원</p><span class="count mng2">0</span></div>
								</div>
							</div>
							<div class="circle_chart">
								<div class="chart_name">최근 7일 상담 지표</div>
								<div class="graph" id="chart3"></div>
								<div class="chart_text3">
									<div><span>●</span> 신청</div>
									<div><span>●</span> 내원</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				-->

				<div class="content_box" id="online">
					<div class="stats_chart">
						<div class="chart_title">
							<span>최근 게시물 <small>(오늘 기준)</small></span>
							<a href="<?php G5_URL;?>/admin/bbs/board.php?bo_table=online"><i class="ri-add-line"></i></a>
						</div>
						<div class="search">
							<div class="ranking_list new_post">
								<table>
									<thead>
										<tr>
											<th>게시판</th>
											<th>분류</th>
											<th>제목</th>
											<th>이름</th>
											<th>등록일</th>
										</tr>
									</thead>
									<tbody>
									<?php if(count($result2) == 0 ){ ?>
										<tr>
											<td colspan="5">데이터가 없습니다.</td>
										</tr>
									<?php } ?>
									<?php for ($i=0; $row=sql_fetch_array($result); $i++){ ?>
										<tr>
											<td>게시판</td>
											<td>온라인상담</td>
											<td><a href="<?php echo G5_URL ?>/admin/bbs/write.php?w=u&bo_table=online&wr_id=<?php echo $row['wr_id'] ?>"><?php echo $row['wr_subject']?></a></td>
											<td><?php echo $row['wr_name']?></td>
											<td><?php echo substr($row['wr_datetime'],0,10)?></td>
										</tr>
									<?}?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				
				<!--
				<div class="content_box" id="page">
					<div class="stats_chart page">
						<div class="chart_title">
							<span>페이지별 접속 통계 <br><small>(전일 기준)</small></span>
							<a href="<?php G5_URL;?>/admin/page.php"><i class="ri-add-line"></i></a>
						</div>
						<div class="chart">
							<div class="hot_list">
								<div><span class="color_blue">페이지 조회 수</span><p class="color_dark page_content1"> </p><p class="page_count1"></p></div>
								<div><span class="color_blue">신규 방문자 수</span><p class="color_dark page_content2"></p><p class="page_count2"></p></div>
								<div><span class="color_blue">재방문자 수</span><p class="color_dark page_content3"> </p><p class="page_count3"></p></div>
								<div><span class="color_blue">평균 체류시간</span><p class="color_dark page_content4"></p><p class="page_count4"></p></div>
								<div><span class="color_blue">이탈률</span><p class="color_dark page_content5"></p><p class="page_count5"></p></div>
								<div><span class="color_blue">온라인상담 신청건</span><p class="color_dark page_content6"> </p><p class="page_count6"></p></div>
							</div>
						</div>
					</div>
				</div>
				-->
				
				
				<div class="content_box">
					<div class="stats_chart" id="new">
						<div class="chart_title">
							<span>신규 회원 통계 <br><small>(전일 기준)</small></span>
							<a href="<?php G5_URL;?>/admin/member_list.php"><i class="ri-add-line"></i></a>
						</div>
						<div class="chart">
							<div class="">
								<div><p>신규회원 수</p><span class="count new_member">0</span></div>
								<!-- <div class="color_blue"><p>오늘</p><span class="count">80</span></div> -->
								<div class="color_gray"><p>누적 회원 수</p><span class="count total_member">0</span></div>
							</div>
							<!--
							<div class="circle_chart">
								<div class="graph" id="chart5"></div>
							</div>
							<div class="circle_chart_text4">
								<div><span>최신 3개월 회원</span></div>
							</div>
							-->
						</div>
					</div>
				</div>
				
				
				<!--
				<div class="content_box" id="all">
					<div class="search search_left">
						<div class="search_info">
							<form onsubmit="return false;">
								<div>
									<div class="calendar"><img src="<?= G5_URL;?>/admin/img/ico_calendar.png">기간별 검색</div>
									<div>
										<input type="text" name="start_date" class="date start_date" autocomplete="off"> ~ <input type="text" name="end_date" class="date end_date" autocomplete="off">
									</div>
								</div>
								<div class="device">
									<label class="keyword20 active"><input type="radio" name="device" value="all" checked="checked">전체</label>
									<label class="keyword20"><input type="radio" name="device" value="PC">PC</label>
									<label class="keyword20"><input type="radio" name="device" value="mobile">mobile</label>
									<button onclick="search1(this.form);" class="search_btn">검색</button>
								</div>
								<input type="hidden" name="page1" value="<?=$page?>">
								<input type="hidden" name="total_page1" value="">
							</form>
						</div>
						<div class="search_ranking search_rank20">
							<div class="title wait_title">
								<div class="wait_box"><img src="./img/ajax-loader.gif"/></div>
								전체 유입 키워드 TOP 20
								<br><small>(전일 기준)</small>
							</div>
							<div class="ranking_list">
								<table>
									<thead>
										<tr>
											<th>순위</th>
											<th>검색 키워드</th>
											<th>유입수</th>
											<th>%</th>
										</tr>
									</thead>
									<tbody class="keyword">
						
									</tbody>
								</table>
								<div class="page_bar day1"></div>
							</div>
						</div>
					</div>
					<div class="search search_right">
						<div class="search_info">
							<form onsubmit="return false;">
								<div>
									<div class="calendar"><img src="<?= G5_URL;?>/admin/img/ico_calendar.png">기간별 검색</div>
									<div>
										<input type="text" name="start_date" class="date start_date" autocomplete="off"> ~ <input type="text" name="end_date" class="date end_date" autocomplete="off">
									</div>
								</div>
								<div class="device">
									<label class="domain20 active"><input type="radio" name="device" value="all" checked="checked">전체</label>
									<label class="domain20"><input type="radio" name="device" value="PC">PC</label>
									<label class="domain20"><input type="radio" name="device" value="mobile">mobile</label>
									<button onclick="search2(this.form);" class="search_btn">검색</button>
								</div>
								<input type="hidden" name="page2" value="<?=$page?>">
								<input type="hidden" name="total_page2" value="">
							</form>
						</div>
						<div class="search_ranking search_rank20">
							<div class="title wait_title">
								전체 유입 도메인 TOP 20
								<br><small>(전일 기준)</small>
								<div class="wait_box2"><img src="./img/ajax-loader.gif"/></div>
							</div>
							<div class="ranking_list">
								<table>
									<thead>
										<tr>
											<th>순위</th>
											<th >유입 도메인</th>
											<th >유입수</th>
											<th >%</th>
										</tr>
									</thead>
									<tbody class="domain">
									
									</tbody>
								</table>
								<div class="page_bar day2"></div>
							</div>
						</div>
					</div>
				</div>

				<div class="content_box">
					<div class="search search_left">
						<div class="search_info">
							<form onsubmit="return false;">
								<div>
									<div class="calendar"><img src="<?= G5_URL;?>/admin/img/ico_calendar.png">기간별 검색</div>
									<div>
										<input type="text" name="start_date" class="date start_date" autocomplete="off"> ~ <input type="text" name="end_date" class="date end_date" autocomplete="off">
									</div>
								</div>
								<div class="device">
									<label class="page20_btn active"><input type="radio" name="device" value="all" checked="checked">전체</label>
									<label class="page20_btn"><input type="radio" name="device" value="PC">PC</label>
									<label class="page20_btn"><input type="radio" name="device" value="mobile">mobile</label>
									<button onclick="search3(this.form);" class="search_btn">검색</button>
								</div>
								<input type="hidden" name="page3" value="<?=$page?>">
								<input type="hidden" name="total_page3" value="">
							</form>
						</div>
						<div class="search_ranking search_rank20">
							<div class="title wait_title">
								전체 페이지 조회수 TOP 20
								<br><small>(전일 기준)</small>
								<div class="wait_box3"><img src="./img/ajax-loader.gif"/></div>
							</div>
							<div class="ranking_list">
								<table>
									<thead>
										<tr>
											<th>순위</th>
											<th>페이지 url</th>
											<th>페이지 뷰</th>
											<th>%</th>
										</tr>
									</thead>
									<tbody class="page20">
										
									</tbody>
								</table>
								<div class="page_bar day3"></div>
							</div>
						</div>
					</div>
					<div class="search search_right">
						<div class="search_info">
							<form  onsubmit="return false;">
								<div>
									<div class="calendar"><img src="<?= G5_URL;?>/admin/img/ico_calendar.png">기간별 검색</div>
									<div>
										<input type="text" name="start_date" class="date start_date" autocomplete="off"> ~ <input type="text" name="end_date" class="date end_date" autocomplete="off">
									</div>
								</div>
								<div class="device">
										<label class="exit20 active"><input type="radio" name="device" value="all" checked="checked">전체</label>
									<label class="exit20"><input type="radio" name="device" value="PC">PC</label>
									<label class="exit20"><input type="radio" name="device" value="mobile">mobile</label>
									<button onclick="search4(this.form);" class="search_btn">검색</button>
								</div>
								<input type="hidden" name="page4" value="<?=$page?>">
								<input type="hidden" name="total_page4" value="">
							</form>
						</div>
						<div class="search_ranking search_rank20">
							<div class="title wait_title">
								전체 이탈 페이지 TOP 20
								<br><small>(전일 기준)</small>
								<div class="wait_box4"><img src="./img/ajax-loader.gif"/></div>
							</div>
							<div class="ranking_list">
								<table>
									<thead>
										<tr>
											<th>순위</th>
											<th>페이지 url</th>
											<th>페이지 뷰</th>
											<th>%</th>
										</tr>
									</thead>
									<tbody class='exit'>
										
									</tbody>
								</table>
								<div class="page_bar day4"></div>
							</div>
						</div>
					</div>
					-->
				</div>
			</div>
		</div>

	</body>
</html>
<script src="<?=G5_URL?>/admin/js/d3.v4.min.js"></script>
<script src="<?=G5_URL?>/admin/js/moment.min.js"></script>
<script src="<?=G5_URL?>/admin/js/jquery.animateNumber.min.js"></script>

<script src="<?=G5_URL?>/admin/js/index.js"></script>
<script src="<?=G5_URL?>/admin/js/chart.js"></script>
