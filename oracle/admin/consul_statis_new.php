<?
include_once('./_common.php');
include_once(G5_PATH.'/admin/head.php');
$today = date("Y-m-d");
$end_day = date("Y-m-d", strtotime($today."-1 day")); 
$end_num = Date('w',strtotime($end_day));

$end_day2 = date("Y-m-d", strtotime($end_day."-1 day")); 

if($end_num > 0){
	$start_day = Date("Y-m-d", strtotime($end_day2." -".$end_num."day"));
}else{
	$start_day  = date("Y-m-d", strtotime("-1 day", time())); 
}
?>

<div class="right consulting">
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
										<div class="color_blue"><p>총 상담건 <br><small>(전일 기준)</p><span class="count count4"></span>건</div>
										<div><p>상담신청 페이지 TOP <br><small>(전일 기준)</p><span class="count top count5"></span></div>
										<div><p>상담분야 TOP <br><small>(전일 기준)</p><span class="count top count6"></span></div>
									</div>
								</div>
							</div>
						</div>
						<div class="gh_chart">
							<div>
								<div class="chart_title">
									<p class="color_gray">< 상담신청 및 내원 현황 ></p>
								</div>
								<div class="chart">
									<div class="number_chart">
										<div>
											<div class="color_gray"><p>총 상담신청</p><span class="count all_consul1"></span></div>
											<div class="color_gray"><p>내원</p><span class="count all_consul2"></span></div>
										</div>
									</div>

									<!-- 챠트 영역 -->
									<div class="total_chart_wrap">
										<div class="graph">
											<div class="line_graph" id="chart18"></div>
											<div class="circle_chart">
												<div class="circle_ye" id="chart19"></div>
												<div class="circle_gr" id="chart20"></div>
											</div>
										</div>
										<div class="graph_text">
											<div class="line_graph_text">
												<div><span class="consul_type1">● </span> 신청</div>
												<div><span class="consul_type2">● </span> 내원</div>
											</div>
											<div class="circle_chart_text">
												<div class="circle_ye" ><span>내원 율</span></div>
												<div class="circle_gr"><span>이용기기 율</span></div>
											</div>
										</div>
									</div>
									<!-- //챠트 영역 -->
								</div>
							</div>
						</div>
					</div>
				</div>

				<!--온라인상담 신청 일간 통계-->
				<div class="content_box" id="area_1">
					<div class="search">
						<div class="search_info">
							<form onsubmit="return false;">
								<div>
									<div class="calendar"><img src="<?= G5_URL;?>/admin/img/ico_calendar.png">기간별 검색</div>
									<div>
										<!-- <input type="text" class="date start_date"> ~ <input type="text" class="date end_date"> -->
										<input type="text" name="start_date" class="date start_date day_start" autocomplete="off"> ~ <input type="text" name="end_date" class="date end_date day_end" autocomplete="off">
									</div>
								</div>
								<div>
									<div class="date_search">
										<a href="#area_1" class="active">일간</a>
										<a href="#area_2" class="">주간</a>
										<a href="#area_3" class="">월간</a>
										<a href="#area_4" class="">요일별</a>
									</div>
									<div class="consulting_search">
										<label class="sta_type1 active_consulting"><input type="radio" name="sta_type" value="all" checked="checked">전체</label>
										<label class="gray"><input type="radio"  value="비용상담">비용상담</label>
										<label class="gray"><input type="radio" value="랜딩상담">랜딩상담</label>
										<label class="">|</label>
									</div>
									<div class="device">
										<label class="statis1 active" ><input type="radio" name="device" value="all" checked="checked">전체</label>
										<label class="statis1"><input type="radio" name="device" value="PC">PC</label>
										<label class="statis1"><input type="radio" name="device" value="mobile">mobile</label>
										<button onclick="search(1, this.form, 'list');" class="search_btn">검색</button>
										<button onclick="search(1, this.form, 'excel');" class="ex"><img src="./img/excel.png">엑셀로다운<i class="ri-download-2-line"></i></button>
										<!-- <div class="ex"><a href="javascript:search(1, this.form, 'excel');"><img src="./img/excel.png">엑셀로다운<i class="ri-download-2-line"></i></a></div> -->
									</div>
								</div>
								<input type="hidden" name="page" value="<?=$page?>">
								<input type="hidden" name="total_page" value="">
							</form>
						</div>
						<div class="search_ranking day">
							<div class="title">상담신청 일간 통계<p></p></div>
							<div class="ranking_list">
								<table class="day">
									<thead>
										<tr>
											<th>일 자</th>
											<th></th>
											<th>비용상담</th>
											<th>랜딩상담</th>
											<th>총 신청 건</th>
											<th>(3개월전)<br/>신청 수</th>
										</tr>
									</thead>
									<tbody>

									</tbody>
								</table>
								<div class="page_bar day"></div>
							</div>
						</div>
					</div>
				</div>
				<!--//온라인상담 신청 일간 통계-->

				<!--온라인상담 신청 주간 통계-->
				<div class="content_box" id="area_2">
					<div class="search">
						<div class="search_info">
							<form onsubmit="return false;">
								<div>
									<div class="calendar"><img src="<?= G5_URL;?>/admin/img/ico_calendar.png">기간별 검색</div>
									<div>
										<input type="text" class="date week_start" name="start_date" autocomplete="off"> ~ <input type="text" class="date week_end" name="end_date" autocomplete="off">
									</div>
								</div>
								<div>
									<div class="date_search">
										<a href="#area_1" class="">일간</a>
										<a href="#area_2" class="active">주간</a>
										<a href="#area_3" class="">월간</a>
										<a href="#area_4" class="">요일별</a>
									</div>
									<div class="consulting_search">
										<label class="sta_type2 active_consulting"><input type="radio" name="sta_type" value="all" checked="checked">전체</label>
										<label class="sta_type2"><input type="radio" name="sta_type" value="비용상담">비용상담</label>
										<label class="sta_type2"><input type="radio" name="sta_type" value="랜딩상담">랜딩상담</label>
										<label class="">|</label>
									</div>
									<div class="device">
										<label class="statis2 active" ><input  type="radio" name="device" value="all" checked="checked">전체</label>
										<label class="statis2"><input type="radio" name="device" value="PC">PC</label>
										<label class="statis2"><input type="radio" name="device" value="mobile">mobile</label>
										<button onclick="search(2, this.form, 'list');" class="search_btn">검색</button>
										<button onclick="search(2, this.form, 'excel');" class="ex"><img src="./img/excel.png">엑셀로다운<i class="ri-download-2-line"></i></button>
										<!-- <div class="ex"><a href="javascript:search(2, this.form, 'excel');"><img src="./img/excel.png">엑셀로다운<i class="ri-download-2-line"></i></a></div> -->
									</div>
								</div>
							</form>
						</div>

						<div class="search_ranking">
							<div class="title">상담신청 주간 통계<p id="week_title"></p></div>
							<!--챠트영역-->
							<div class="chart_wrap chart21_wrap_text">
								<div class="graph" id="chart21"></div>
							</div>
							<div class="chart21_text">
								<div>
									<div><span class="chart21_text1"></span></div>
									<div><span class="chart21_text2"></span></div>
									<div><span class="chart21_text3"></span></div>
									<div><span class="chart21_text4"></span></div>
									<div><span class="chart21_text5"></span></div>
								</div>
							</div>
							<!--//챠트영역-->
						</div>
					</div>
				</div>
				<!--//온라인상담 신청 주간 통계-->

				<!--온라인상담 신청 월간 통계-->
				<div class="content_box" id="area_3">
					<div class="search">
						<div class="search_info">
							<form onsubmit="return false;">
								<div>
									<div class="calendar"><img src="<?= G5_URL;?>/admin/img/ico_calendar.png">기간별 검색</div>
									<div>
										<select name="start_date" class="month_visit_date">
											<option value=""></option>
											<?
												$date = substr(Date('Y-m-d'), 0, 4);
												for($i=2020; $i<=$date; $i++){
													echo '<option value="'.$i.'">'.$i.'</option>';
												}
											?>
										</select>
									</div>
								</div>
								<div>
									<div class="date_search">
										<a href="#area_1" class="">일간</a>
										<a href="#area_2" class="">주간</a>
										<a href="#area_3" class="active">월간</a>
										<a href="#area_4" class="">요일별</a>
									</div>
									<div class="consulting_search">
										<label class="sta_type3 active_consulting"><input type="radio" name="sta_type" value="all" checked="checked">전체</label>
										<label class="sta_type3"><input type="radio" name="sta_type" value="비용상담">비용상담</label>
										<label class="sta_type3"><input type="radio" name="sta_type" value="랜딩상담">랜딩상담</label>
										<label class="">|</label>
									</div>
									<div class="device">
										<label class="statis3 active" ><input type="radio" name="device" value="all" checked="checked">전체</label>
										<label class="statis3"><input type="radio" name="device" value="PC">PC</label>
										<label class="statis3"><input type="radio" name="device" value="mobile">mobile</label>
										<button onclick="search(3, this.form, 'list');" class="search_btn">검색</button>
										<button onclick="search(3, this.form, 'excel');" class="ex"><img src="./img/excel.png">엑셀로다운<i class="ri-download-2-line"></i></button>
										<!-- <div class="ex"><a href="javascript:search(3, this.form, 'excel');"><img src="./img/excel.png">엑셀로다운<i class="ri-download-2-line"></i></a></div> -->
									</div>
								</div>
							</form>
						</div>

						<div class="search_ranking">
							<div class="title">상담신청 월간 통계<p  id="month_title"></p></div>
							<!--챠트영역-->
							<div class="chart_wrap chart22_wrap">
								<div class="graph" id="chart22">
								</div>
							</div>
							<div class="chart22_text">
								<div>
									<div><span>● </span>1년전</div>
									<div class="search_year_text"><span>● </span>검색년도</div>
								</div>
							</div>
							<!--//챠트영역-->
						</div>
					</div>
				</div>
				<!--//온라인상담 신청 월간 통계-->

				<!--온라인상담 신청 요일별 통계-->
				<div class="content_box" id="area_4">
					<div class="search">
						<div class="search_info">
							<form onsubmit="return false;">
								<div>
									<div class="calendar"><img src="<?= G5_URL;?>/admin/img/ico_calendar.png">기간별 검색</div>
									<div>
										<input type="text" class="date" name="start_date" autocomplete="off" value="<?php echo $start_day?>"> ~ <input type="text" class="date" name="end_date" autocomplete="off"  value="<?php echo $end_day?>">
									</div>
								</div>
								<div>
									<div class="date_search">
										<a href="#area_1" class="">일간</a>
										<a href="#area_2" class="">주간</a>
										<a href="#area_3" class="">월간</a>
										<a href="#area_4" class="active">요일별</a>
									</div>
									<div class="consulting_search">
										<label class="sta_type4 active_consulting"><input type="radio" name="sta_type" value="all">전체</label>
										<label class="sta_type4"><input type="radio" name="sta_type" value="비용상담">비용상담</label>
										<label class="sta_type4"><input type="radio" name="sta_type" value="랜딩상담">랜딩상담</label>
										<label class="">|</label>
									</div>
									<div class="device">
										<label class="statis4 active" ><input type="radio" name="device" value="all" checked="checked">전체</label>
										<label class="statis4"><input type="radio" name="device" value="PC">PC</label>
										<label class="statis4"><input type="radio" name="device" value="mobile">mobile</label>
										<button onclick="search(4, this.form, 'list');" class="search_btn">검색</button>
										<button onclick="search(4, this.form, 'excel');" class="ex"><img src="./img/excel.png">엑셀로다운<i class="ri-download-2-line"></i></button>
										<!-- <div class="ex"><a href="javascript:search2(4, this.form, 'excel');"><img src="./img/excel.png">엑셀로다운<i class="ri-download-2-line"></i></a></div> -->
									</div>
								</div>
							</form>
						</div>

						<div class="search_ranking">
							<div class="title">상담신청 요일별 통계<p id="dayofweek_title"></p></div>

							<!--챠트영역-->
							<div class="chart_wrap">
								<div class="graph" id="chart23">
								</div>
							</div>
							<!--//챠트영역-->
						</div>
					</div>
				</div>
				<!--//온라인상담 신청 요일별 통계-->

			</div>
		</div>

	</body>
</html>


<script src="<?=G5_URL?>/admin/js/d3.v4.min.js"></script>
<script src="<?=G5_URL?>/admin/js/moment.min.js"></script>
<script src="<?=G5_URL?>/admin/js/jquery.animateNumber.min.js"></script>

<script src="<?=G5_URL?>/admin/js/consul_statis_new.js"></script>
<script src="<?=G5_URL?>/admin/js/chart.js"></script>
