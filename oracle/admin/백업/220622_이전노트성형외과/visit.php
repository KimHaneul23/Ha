<?
include_once('./_common.php');
include_once(G5_PATH.'/admin/head.php');

$end_day = Date("Y-m-d");
$end_num = Date('w',strtotime($end_day));

if($end_num > 0){
	$start_day = Date("Y-m-d", strtotime($date." -".$end_num."day"));
}else{
	$start_day  = Date("Y-m-d");
}
?>

<div class="right menu1_1">
				<div class="content_box">
					<div>
						<div class="title">
							<span>방문자 통계 및 카운터</span>
						
						</div>
					</div>

					<div>
						<div class="stats_chart">
							<div class="chart_title">
								<p class="date"></p>
								<p> 일자 </p>
								<span>방문자 접속 통계</span>
							</div>
							<div class="chart">
								<div class="number_chart">
									<div><p>어제 방문자</p><span class="count yesterday"></span></div>
									<div class="color_blue"><p>오늘 방문자</p><span class="count today"></span></div>
									<div><p>전월 방문자 <br><small>(한달전 오늘)</small></p><span class="count one_month"></span></div>
									<div><p>누적 방문자 <br><small>(오픈 후 현재까지)</small></p><span class="count three_month"></span></div>
								</div>
								<div class="circle_chart">
									<div class="graph" id="chart6"></div>
									<div class="graph" id="chart7"></div>
								</div>
								<div class="circle_chart_text3">
									<div><span>재방문자 율 <small>(오늘 기준)</small></span></div>
									<div><span>이용기기 율 <small>(오늘 기준)</small></span></div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="content_box"  id="area1">
					<div class="search">
						<div class="search_info">
							<form onsubmit="return false;">
								<div>
									<div class="calendar"><img src="<?= G5_URL;?>/admin/img/ico_calendar.png">기간별 검색</div>
									<div>
										<input type="text" name="start_date" class="date start_date day_start" autocomplete="off"> ~ <input type="text" name="end_date" class="date end_date day_end" autocomplete="off">
									</div>
								</div>
								<div>
									<div class="date_search">
										<a href="#area1" class="active">일간</a>
										<a href="#area2">주간</a>
										<a href="#area3">월간</a>
										<a href="#area4">연간</a>
										<a href="#area5">시간별</a>
										<a href="#area6">요일별</a>
										<!-- <label class="active"><input type="radio" name="date" value="today" checked="checked">일간</label>
										<label class=""><input type="radio" name="date" value="week">주간</label>
										<label class=""><input type="radio" name="date" value="year">연간</label>
										<label class=""><input type="radio" name="date" value="time">시간별</label>
										<label class=""><input type="radio" name="date" value="day">요일별</label> -->
									</div>
									<div class="device">
										<label class="visit1 active" for="all1"><input id="all1" type="radio" name="device" value="all" checked="checked">전체</label>
										<label class="visit1"><input type="radio" name="device" value="PC">PC</label>
										<label class="visit1"><input type="radio" name="device" value="mobile">mobile</label>
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
							<div class="title">방문자 일별 접속 통계<p></p></div>
							<div class="ranking_list">
								<table class="day">
									<thead>
										<tr>
											<th>일 자</th>
											<th></th>
											<th>접속자 수</th>
											<th class="back_gray">(3개월전)<br/>접속자 수</th>
											<!-- <th>비율</th> -->
										</tr>
									</thead>
									<tbody>
									</tbody>
								</table>
								<div class="page_bar day">
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="content_box" id="area2">
					<div class="search">
						<div class="search_info">
							<form onsubmit="return false;">
								<div>
									<div class="calendar"><img src="<?= G5_URL;?>/admin/img/ico_calendar.png">기간별 검색</div>
									<div>
										<input type="text" class="date week_start" name="start_date" autocomplete="off"> ~ <input type="text" class="date week_end" name="end_date" autocomplete="off">
									</div>
								</div>
								<div class="w70">
									<div class="date_search">
										<a href="#area1">일간</a>
										<a href="#area2" class="active">주간</a>
										<a href="#area3">월간</a>
										<a href="#area4">연간</a>
										<a href="#area5">시간별</a>
										<a href="#area6">요일별</a>
										<!-- <label class=""><input type="radio" name="date" value="today" checked="checked">일간</label>
										<label class="active"><input type="radio" name="date" value="week">주간</label>
										<label class=""><input type="radio" name="date" value="year">연간</label>
										<label class=""><input type="radio" name="date" value="time">시간별</label>
										<label class=""><input type="radio" name="date" value="day">요일별</label> -->
									</div>
									<div class="device">
										<label class="visit2 active"><input type="radio" name="device" value="all" checked="checked">전체</label>
										<label class="visit2"><input type="radio" name="device" value="PC">PC</label>
										<label class="visit2"><input type="radio" name="device" value="mobile">mobile</label>
										<button onclick="search(2, this.form, 'list');" class="search_btn">검색</button>
										<button onclick="search(2, this.form, 'excel');" class="ex"><img src="./img/excel.png">엑셀로다운<i class="ri-download-2-line"></i></button>
										<!-- <div class="ex"><a href="javascript:search(2, this.form, 'excel');"><img src="./img/excel.png">엑셀로다운<i class="ri-download-2-line"></i></a></div> -->
									</div>
								</div>
							</form>
						</div>
						<div class="search_ranking">
							<div class="title">방문자 주간 접속통계<p id="week_title"></p></div>
							<div class="ranking_list chart21_wrap_text">
								<div id="chart9"></div>
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
						</div>
					</div>
				</div>

				<div class="content_box" id="area3">
					<div class="search">
						<div class="search_info">
							<form onsubmit="return false;" class="search_year">
								<div class="search_year_ca">
									<div class="calendar"><img src="<?= G5_URL;?>/admin/img/ico_calendar.png">연도 검색</div>
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
								<div class="w70">
									<div class="date_search">
										<a href="#area1">일간</a>
										<a href="#area2" >주간</a>
										<a href="#area3" class="active">월간</a>
										<a href="#area4">연간</a>
										<a href="#area5">시간별</a>
										<a href="#area6">요일별</a>
										<!-- <label class=""><input type="radio" name="date" value="today" checked="checked">일간</label>
										<label class=""><input type="radio" name="date" value="week">주간</label>
										<label class="active"><input type="radio" name="date" value="month">월간</label>
										<label class=""><input type="radio" name="date" value="year">연간</label>
										<label class=""><input type="radio" name="date" value="time">시간별</label>
										<label class=""><input type="radio" name="date" value="day">요일별</label> -->
									</div>
									<div class="device">
										<label class="visit3 active"><input type="radio" name="device" value="all" checked="checked">전체</label>
										<label class="visit3"><input type="radio" name="device" value="PC">PC</label>
										<label class="visit3"><input type="radio" name="device" value="mobile">mobile</label>
										<button onclick="search(3, this.form, 'list');" class="search_btn">검색</button>
										<button onclick="search(3, this.form, 'excel');" class="ex"><img src="./img/excel.png">엑셀로다운<i class="ri-download-2-line"></i></button>
										<!-- <div class="ex"><a href="javascript:search(3, this.form, 'excel');"><img src="./img/excel.png">엑셀로다운<i class="ri-download-2-line"></i></a></div> -->
									</div>
								</div>
							</form>
						</div>
						<div class="search_ranking">
							<div class="title">방문자 월간 접속통계<p id="month_title"></p></div>
							<div class="ranking_list chart11_list">
								<div id="chart10"></div>
							</div>
							<div class="chart22_text">
								<div>
									<div><span>● </span>1년전</div>
									<div class="search_year_text"><span>● </span>검색년도</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="content_box" id="area4">
					<div class="search">
						<div class="search_info">
							<form onsubmit="return false;" class="search_year">
								<div class="search_year_ca">
									<div class="calendar"><img src="<?= G5_URL;?>/admin/img/ico_calendar.png">연도 검색</div>
									<div>
										<select name="start_date" class="year_visit_date">
											<option value=""></option>
											<?
												$date = substr(Date('Y-m-d'), 0, 4);
												echo $date;
												for($i=2020; $i<=$date; $i++){
													echo '<option value="'.$i.'">'.$i.'</option>';
												}
											?>
										</select>
									</div>
								</div>
								<div class="w70">
									<div class="date_search">
										<a href="#area1">일간</a>
										<a href="#area2">주간</a>
										<a href="#area3">월간</a>
										<a href="#area4" class="active">연간</a>
										<a href="#area5">시간별</a>
										<a href="#area6">요일별</a>
										<!-- <label class=""><input type="radio" name="date" value="today" checked="checked">일간</label>
										<label class=""><input type="radio" name="date" value="week">주간</label>
										<label class=""><input type="radio" name="date" value="month">월간</label>
										<label class="active"><input type="radio" name="date" value="year">연간</label>
										<label class=""><input type="radio" name="date" value="time">시간별</label>
										<label class=""><input type="radio" name="date" value="day">요일별</label> -->
									</div>
									<div class="device">
										<label class="visit4 active"><input type="radio" name="device" value="all" checked="checked">전체</label>
										<label class="visit4"><input type="radio" name="device" value="PC">PC</label>
										<label class="visit4"><input type="radio" name="device" value="mobile">mobile</label>
										<button onclick="search(4, this.form, 'list');" class="search_btn">검색</button>
										<button onclick="search(4, this.form, 'excel');" class="ex"><img src="./img/excel.png">엑셀로다운<i class="ri-download-2-line"></i></button>
										<!-- <div class="ex"><a href="javascript:search(4, this.form, 'excel');"><img src="./img/excel.png">엑셀로다운<i class="ri-download-2-line"></i></a></div> -->
									</div>
								</div>
							</form>
						</div>
						<div class="search_ranking">
							<div class="title">방문자 연간 접속통계<p id="year_title"></p></div>
							<div class="ranking_list">
								<div id="chart11"></div>
							</div>
						</div>
					</div>
				</div>

				<div class="content_box" id="area5">
					<div class="search">
						<div class="search_info">
							<form onsubmit="return false;">
								<div>
									<div class="calendar"><img src="<?= G5_URL;?>/admin/img/ico_calendar.png">기간별 검색</div>
									<div>
										<input type="text" class="date start_time_date" name="start_date"  autocomplete="off"> ~ <input type="text" class="date end_time_date" name="end_date" autocomplete="off">
									</div>
								</div>
								<div class="w70">
									<div class="date_search">
										<a href="#area1">일간</a>
										<a href="#area2">주간</a>
										<a href="#area3">월간</a>
										<a href="#area4">연간</a>
										<a	href="#area5" class="active">시간별</a>
										<a href="#area6">요일별</a>
										<!-- <label class=""><input type="radio" name="date" value="today" checked="checked">일간</label>
										<label class=""><input type="radio" name="date" value="week">주간</label>
										<label class=""><input type="radio" name="date" value="month">월간</label>
										<label class=""><input type="radio" name="date" value="year">연간</label>
										<label class="active"><input type="radio" name="date" value="time">시간별</label>
										<label class=""><input type="radio" name="date" value="day">요일별</label> -->
									</div>
									<div class="device">
										<label class="visit5 active"><input type="radio" name="device" value="all" checked="checked">전체</label>
										<label class="visit5"><input type="radio" name="device" value="PC">PC</label>
										<label class="visit5"><input type="radio" name="device" value="mobile">mobile</label>
										<button onclick="search(5, this.form, 'list');" class="search_btn">검색</button>
										<button onclick="search(5, this.form, 'excel');" class="ex"><img src="./img/excel.png">엑셀로다운<i class="ri-download-2-line"></i></button>
										<!-- <div class="ex"><a href="javascript:search(5, this.form, 'excel');"><img src="./img/excel.png">엑셀로다운<i class="ri-download-2-line"></i></a></div> -->
									</div>
								</div>
							</form>
						</div>
						<div class="search_ranking">
							<div class="title">방문자 시간별 접속통계</div>
							<p class="time_total">TOTAL 0</p>
							<div class="ranking_list">
								<div class="time_chart">
									<ul class="moon">
									</ul>
									<ul class="sun">
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="content_box" id="area6">
					<div class="search">
						<div class="search_info">
							<form onsubmit="return false;">
								<div>
									<div class="calendar"><img src="<?= G5_URL;?>/admin/img/ico_calendar.png">기간별 검색</div>
									<div>
										<input type="text" class="date" name="start_date" value="<?php echo $start_day?>" autocomplete="off"> ~ <input type="text" class="date" value="<?php echo $end_day?>" name="end_date" autocomplete="off">
									</div>
								</div>
								<div class="w70">
									<div class="date_search">
										<a href="#area1">일간</a>
										<a href="#area2">주간</a>
										<a href="#area3">월간</a>
										<a href="#area4">연간</a>
										<a href="#area5">시간별</a>
										<a href="#area6" class="active">요일별</a>
										<!-- <label class=""><input type="radio" name="date" value="today" checked="checked">일간</label>
										<label class=""><input type="radio" name="date" value="week">주간</label>
										<label class=""><input type="radio" name="date" value="month">월간</label>
										<label class=""><input type="radio" name="date" value="year">연간</label>
										<label class=""><input type="radio" name="date" value="time">시간별</label>
										<label class="active"><input type="radio" name="date" value="day">요일별</label> -->
									</div>
									<div class="device">
										<!-- <a class="visit6 active">전체</a>
										<a class="visit6">PC</a>
										<a class="visit6">mobile</a> -->
										<label class="visit6 active"><input type="radio" name="device" value="all" checked="checked">전체</label>
										<label class="visit6"><input type="radio" name="device" value="PC">PC</label>
										<label class="visit6"><input type="radio" name="device" value="mobile">mobile</label>
										<button onclick="search(6, this.form, 'list');" class="search_btn">검색</button>
										<button onclick="search(6, this.form, 'excel');" class="ex"><img src="./img/excel.png">엑셀로다운<i class="ri-download-2-line"></i></button>
										<!-- <div class="ex"><a href="javascript:search(6, this.form, 'excel');"><img src="./img/excel.png">엑셀로다운<i class="ri-download-2-line"></i></a></div> -->
									</div>
								</div>
							</form>
						</div>
						<div class="search_ranking">
							<div class="title">방문자 요일별 접속통계<p id="dayofweek_title"></p></div>
							<div class="ranking_list">
								<div id="chart13"></div>
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
<script src="<?=G5_URL?>/admin/js/chart.js"></script>
<script src="<?=G5_URL?>/admin/js/visit.js"></script>
