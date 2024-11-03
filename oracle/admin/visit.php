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
							<span>방문자 접속 통계</span>
						</div>
					</div>

					<div>
						<div class="stats_chart">
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
				
			</div>
		</div>
	</body>
</html>
<script src="<?=G5_URL?>/admin/js/xlsx.full.min.js"></script>
<script src="<?=G5_URL?>/admin/js/d3.v4.min.js"></script>
<script src="<?=G5_URL?>/admin/js/moment.min.js"></script>
<script src="<?=G5_URL?>/admin/js/jquery.animateNumber.min.js"></script>
<script src="<?=G5_URL?>/admin/js/chart.js"></script>
<script src="<?=G5_URL?>/admin/js/visit_new.js"></script>

<script src="<?=G5_URL?>/admin/js/index.js"></script>
