<?php
if (!defined('_GNUBOARD_')) exit;

include_once(G5_LIB_PATH.'/visit.lib.php');
//include_once('./admin.head.php');
include_once ('./head.php');
include_once(G5_PLUGIN_PATH.'/jquery-ui/datepicker.php');

if (empty($fr_date) || ! preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/", $fr_date) ) $fr_date = G5_TIME_YMD;
if (empty($to_date) || ! preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/", $to_date) ) $to_date = G5_TIME_YMD;

$qstr = "fr_date=".$fr_date."&amp;to_date=".$to_date;
$query_string = $qstr ? '?'.$qstr : '';
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
<script src="<?=G5_URL?>/admin/js/xlsx.full.min.js"></script>
<script src="<?=G5_URL?>/admin/js/d3.v4.min.js"></script>
<script src="<?=G5_URL?>/admin/js/moment.min.js"></script>
<script src="<?=G5_URL?>/admin/js/jquery.animateNumber.min.js"></script>
<script src="<?=G5_URL?>/admin/js/chart.js"></script>
<script src="<?=G5_URL?>/admin/js/visit_new.js"></script>

<script src="<?=G5_URL?>/admin/js/index.js"></script>


<div class="visit_list_wrap">
<style>
    div.right .content_box:nth-last-child(1){margin-bottom:80px;}
    
    .content_wrap{background:#f3f3f3 !important;}
    .visit_list_wrap{position:relative; width:100%; margin:0 0 120px 280px; clear:both; }
    .local_sch03{clear:both; width:82%; /*background: #c5d4d2 !important;*/}
    .anchor{width:82%;}
    .tbl_head01{width:82%;}
    .local_sch{min-width:auto !important;}
    
    .local_sch .btn_submit{background: #0f594e !important;}
    .btn_submit:hover{background: #0f594e !important;}
    /*
    .anchor a:focus, .anchor a:hover{background: #a3c5c0 !important;}
    .anchor a{background: #c5d4d2 !important;}
    .tbl_head01 thead th{background: #a3c5c0;}
    .tbl_head01 tbody .bg1{background:#c5d4d2 !important;}
    .tbl_head01 tbody tr:hover td{background: #c5d4d2;}
    */
</style>



<form name="fvisit" id="fvisit" class="local_sch03 local_sch" method="get">
<div class="sch_last">
    <strong>기간별검색</strong>
    <input type="text" name="fr_date" value="<?php echo $fr_date ?>" id="fr_date" class="frm_input" size="11" maxlength="10">
    <label for="fr_date" class="sound_only">시작일</label>
    ~
    <input type="text" name="to_date" value="<?php echo $to_date ?>" id="to_date" class="frm_input" size="11" maxlength="10">
    <label for="to_date" class="sound_only">종료일</label>
    <input type="submit" value="검색" class="btn_submit">
</div>
</form>

<ul class="anchor">
    <li><a href="./visit_list.php<?php echo $query_string ?>">접속자</a></li>
    <li><a href="./visit_domain.php<?php echo $query_string ?>">도메인</a></li>
    <li><a href="./visit_browser.php<?php echo $query_string ?>">브라우저</a></li>
    <li><a href="./visit_os.php<?php echo $query_string ?>">운영체제</a></li>
    <?php if(version_compare(phpversion(), '5.3.0', '>=') && defined('G5_BROWSCAP_USE') && G5_BROWSCAP_USE) { ?>
    <li><a href="./visit_device.php<?php echo $query_string ?>">접속기기</a></li>
    <?php } ?>
    <li><a href="./visit_hour.php<?php echo $query_string ?>">시간</a></li>
    <li><a href="./visit_week.php<?php echo $query_string ?>">요일</a></li>
    <li><a href="./visit_date.php<?php echo $query_string ?>">일</a></li>
    <li><a href="./visit_month.php<?php echo $query_string ?>">월</a></li>
    <li><a href="./visit_year.php<?php echo $query_string ?>">년</a></li>
</ul>

<script>
$(function(){
    $("#fr_date, #to_date").datepicker({ changeMonth: true, changeYear: true, dateFormat: "yy-mm-dd", showButtonPanel: true, yearRange: "c-99:c+99", maxDate: "+0d" });
});

function fvisit_submit(act)
{
    var f = document.fvisit;
    f.action = act;
    f.submit();
}
</script>
