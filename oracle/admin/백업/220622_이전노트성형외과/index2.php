<?
include_once('./_common.php');
include_once(G5_PATH.'/admin/head.php');
?>
<div class="chart">
	<div>관리자 메인 - 방문자 접속 통계1 <button class='excel_button'><i class="icofont-file-excel"></i> 견적서 다운로드</button></div>
	<div id="chart1" class="chart_donut"></div>
</div>

<div class="chart">
	<div>관리자 메인 - 방문자 접속 통계2</div>
	<div id="chart2" class="chart_donut"></div>
</div>

<div class="chart">
	<div>관리자 메인 - 온라인상담 신청 통계</div>
	<div id="chart3" class="chart_zone"></div>
</div>

<div class="chart">
	<div>관리자 메인 - 페이지별 접속 통계</div>
	<div id="chart4" class="chart_donut"></div>
</div>

<div class="chart">
	<div>관리자 메인 - 신규 회원 통계</div>
	<div id="chart5" class="chart_donut"></div>
</div>

<div class="chart">
	<div>방문자 통계 및 카운터 - 일자 방문자 접속통계1</div>
	<div id="chart6" class="chart_donut"></div>
</div>

<div class="chart">
	<div>방문자 통계 및 카운터 - 일자 방문자 접속통계2</div>
	<div id="chart7" class="chart_donut"></div>
</div>

<div class="chart">
	<div>방문자 통계 및 카운터 - 방문자 일별 접속통계(차트아님)</div>
	<div id="chart8" class="chart_zone"></div>
</div>

<div class="chart">
	<div>방문자 통계 및 카운터 - 방문자 주간 접속통계</div>
	<div id="chart9" class="chart_zone"></div>
</div>

<div class="chart">
	<div>방문자 통계 및 카운터 - 방문자 월간 접속통계</div>
	<div id="chart10" class="chart_zone"></div>
</div>

<div class="chart">
	<div>방문자 통계 및 카운터 - 방문자 연간 접속통계</div>
	<div id="chart11" class="chart_zone"></div>
</div>

<div class="chart">
	<div>방문자 통계 및 카운터 - 방문자 시간별 접속통계(차트아님)</div>
	<div id="chart12" class="chart_zone"></div>
</div>

<div class="chart">
	<div>방문자 통계 및 카운터 - 방문자 요일별 접속통계</div>
	<div id="chart13" class="chart_zone"></div>
</div>

<div class="chart">
	<div>페이지별 접속 통계 - 일자 방문자 접속통계1 </div>
	<div id="chart14" class="chart_donut"></div>
</div>

<div class="chart">
	<div>페이지별 접속 통계 - 일자 방문자 접속통계2 </div>
	<div id="chart15" class="chart_donut"></div>
</div>

<div class="chart">
	<div>페이지별 접속 통계 - 페이지별 데이터 분석 </div>
	<div id="chart16" class="chart_donut"></div>
</div>

<div class="chart">
	<div>상담관리 - 전월 상담신청 및 내원 현황1 </div>
	<div id="chart17" class="chart_zone"></div>
</div>

<div class="chart">
	<div>상담관리 - 전월 상담신청 및 내원 현황2 </div>
	<div id="chart18" class="chart_donut"></div>
</div>

<div class="chart">
	<div>상담관리 - 전월 상담신청 및 내원 현황3 </div>
	<div id="chart19" class="chart_donut"></div>
</div>

<div class="chart">
	<div>상담관리 - 온라인상담 신청 일간 통계(차트아님)</div>
	<div id="chart20" class="chart_zone"></div>
</div>

<div class="chart">
	<div>상담관리 - 온라인 신청 주간 통계 </div>
	<div id="chart21" class="chart_zone"></div>
</div>

<div class="chart">
	<div>상담관리 - 온라인 신청 월간 통계 </div>
	<div id="chart22" class="chart_zone"></div>
</div>

<div class="chart">
	<div>상담관리 - 온라인 신청 요일별 통계 </div>
	<div id="chart23" class="chart_zone"></div>
</div>

<div class="chart">
	<div>회원관리 - 일자 신규회원 통계</div>
	<div id="chart24" class="chart_donut"></div>
</div>

<script type='text/javascript' src="<?=G5_THEME_URL?>/js/d3.v4.min.js"></script>
<script type='text/javascript' src="<?=G5_THEME_URL?>/js/moment.min.js"></script>
<script type='text/javascript' src="<?=G5_THEME_URL?>/js/jquery.animateNumber.min.js"></script>
<script type='text/javascript' src="<?=G5_THEME_URL?>/js/chart.js"></script>

<!-- 엑셀 다운로드 -->
<script>
	$('.excel_button').click(function(){

		$.ajax({
			url : g5_url + "/theme/namulsoft/json/chart1.json",
			dataType: 'json',
			success : function(data){
				console.log(data.result[0][0].item);
				console.log(data.result[0][1].item);
				location.href = g5_url + '/admin/json/chart.excel.php';
			},error:function(){
				console.log('실패');
			}
		});
	});
</script>
