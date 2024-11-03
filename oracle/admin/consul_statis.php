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


<style>
    div.content_wrap{width:84%;}
    div.right{width:100%;}
</style>

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
										<!--
										<div><p>비용상담 <br><small>(전일 기준)</small></p><span class="count count2"></span>건</div>
										<div><p>랜딩상담 <br><small>(전일 기준)</small></p><span class="count count3"></span>건</div>
										-->
										<div class="color_blue"><p>총 상담건 <br><small>(전일 기준)</p><span class="count count4"></span>건</div>
										<!--
										<div><p>상담신청 페이지 TOP <br><small>(전일 기준)</p><span class="count top count5"></span></div>
										<div><p>상담분야 TOP <br><small>(전일 기준)</p><span class="count top count6"></span></div>
										-->
									</div>
								</div>
							</div>
						</div>
						<div class="gh_chart">
							<div>
								<div class="chart_title">
									<p class="color_gray">< 상담신청 현황 ></p>
								</div>
								<div class="chart">
									<div class="number_chart">
										<div>
											<div class="color_gray"><p>총 상담신청</p><span class="count all_consul1"></span></div>
											<!--<div class="color_gray"><p>내원</p><span class="count all_consul2"></span></div>-->
										</div>
									</div>

									<!-- 챠트 영역 -->
									<!--
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
									-->
									<!-- //챠트 영역 -->
								</div>
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

<script src="<?=G5_URL?>/admin/js/consul_statis_new.js"></script>
<script src="<?=G5_URL?>/admin/js/chart.js"></script>
