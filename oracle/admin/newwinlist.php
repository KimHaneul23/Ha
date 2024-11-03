<?php
$sub_menu = '100310';
include_once('./_common.php');

//$hd_menu_code = 1;
//$menu_left_code = 106;

//auth_check($auth[$sub_menu], "r");

if( !isset($g5['new_win_table']) ){
    die('<meta charset="utf-8">/data/dbconfig.php 파일에 <strong>$g5[\'new_win_table\'] = G5_TABLE_PREFIX.\'new_win\';</strong> 를 추가해 주세요.');
}
//내용(컨텐츠)정보 테이블이 있는지 검사한다.
if(!sql_query(" DESCRIBE {$g5['new_win_table']} ", false)) {
    if(sql_query(" DESCRIBE {$g5['g5_shop_new_win_table']} ", false)) {
        sql_query(" ALTER TABLE {$g5['g5_shop_new_win_table']} RENAME TO `{$g5['new_win_table']}` ;", false);
    } else {
       $query_cp = sql_query(" CREATE TABLE IF NOT EXISTS `{$g5['new_win_table']}` (
                      `nw_id` int(11) NOT NULL AUTO_INCREMENT,
                      `nw_division` varchar(10) NOT NULL DEFAULT 'both',
                      `nw_device` varchar(10) NOT NULL DEFAULT 'both',
                      `nw_begin_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
                      `nw_end_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
                      `nw_disable_hours` int(11) NOT NULL DEFAULT '0',
                      `nw_left` int(11) NOT NULL DEFAULT '0',
                      `nw_top` int(11) NOT NULL DEFAULT '0',
                      `nw_height` int(11) NOT NULL DEFAULT '0',
                      `nw_width` int(11) NOT NULL DEFAULT '0',
                      `nw_subject` text NOT NULL,
                      `nw_content` text NOT NULL,
                      `nw_content_html` tinyint(4) NOT NULL DEFAULT '0',
                      `wr_1` varchar(255) NOT NULL,
                      `wr_2` varchar(255) NOT NULL,
                      PRIMARY KEY (`nw_id`)
                    ) ENGINE=MyISAM DEFAULT CHARSET=utf8 ", true);
    }
}

$g5['title'] = '팝업레이어 관리';
include_once ('./head.php');

$sql_common = " from {$g5['new_win_table']} ";

// 테이블의 전체 레코드수만 얻음
$sql = " select count(*) as cnt " . $sql_common;
$row = sql_fetch($sql);
$total_count = $row['cnt'];

$page = 1;

$sql = "select * $sql_common order by nw_id desc ";
$result = sql_query($sql);
?>

<style>
    .content_wrap{}
    .popup_list_wrap{position:relative; width:auto; margin:40px 20px 120px 280px; clear:both; }
    .local_ov01{clear:both; width:100%; background:none !important; border:none !important;}
    .tbl_head01{width:100%;}
    .local_sch{min-width:auto !important;}
    
    .local_sch .btn_submit{background: #0f594e !important;}
    .btn_submit:hover{background: #0f594e !important;}
    
    .popup_list_title{position:relative; padding: 0px 20px; font-size:24px; font-weight:700; font-family: 'Noto Sans KR', sans-serif; color:#000;}
    .popup_list_title > p{margin-left:8px; display:inline-block;}
    
    .btn_ov01 { display:inline-block; font-size:0.92em; height:30px; line-height:30px; vertical-align:top; }
    .btn_ov01:after { clear:both; content:""; display:block; visibility:hidden; }
    .btn_ov01 .ov_txt { background:#0f594e; border-radius:5px 0 0 5px; color:#fff; float:left; padding:0 8px; }
    .btn_ov01 .ov_num { background:#ededed; border-radius:0 5px 5px 0; color:#666; float:left; padding:0 8px; }
    
    .btn_fixed_top {position:relative; text-align:right; padding:15px 20px; margin-top:-60px;}
    .popup_btn{position:relative; display:block; width:80px; height:34px; line-height:32px; text-align:center; font-size:14px; font-weight:400; font-family: 'Noto Sans KR', sans-serif; color:#fff !important; background:#0f594e; margin-left:auto; margin-right:0; border-radius:4px;}
    
    
    .content_wrap .tbl_head01 table tr th:nth-child(3){width:10%;}
    .content_wrap .tbl_head01 table tr th:nth-last-child(1){width:12%;}
    .td_device{text-align:center !important;}
</style>

<div class="popup_list_wrap">
<div class="popup_list_title"><img src="https://sissel997.cafe24.com/adm/img/admin_title_bg.png" alt="●"><p><?php echo $g5['title']; ?></p></div>
<div class="local_ov01 local_ov"><span class="btn_ov01"><span class="ov_txt">전체 </span><span class="ov_num">  <?php echo $total_count; ?>건</span></span></div>

<div class="btn_fixed_top ">
    <a href="./newwinform.php" class="type01 popup_btn">팝업 추가</a>
</div>

<div class="tbl_head01 tbl_wrap">
    <table>
    <caption><?php echo $g5['title']; ?> 목록</caption>
    <thead>
    <tr>
        <th scope="col">번호</th>
        <th scope="col">제목</th>
        <th scope="col">접속기기</th>
        <th scope="col">시작일시</th>
        <th scope="col">종료일시</th>
        <!--
        <th scope="col">시간</th>
        <th scope="col">Left</th>
        <th scope="col">Top</th>
        <th scope="col">Width</th>
        <th scope="col">Height</th>
        -->
		<th scope="col">지점명</th>
		<th scope="col">노출순서</th>
        <th scope="col">노출상태</th>
        <th scope="col">관리</th>
    </tr>
    </thead>
    <tbody>
    <?php
    for ($i=0; $row=sql_fetch_array($result); $i++) {
        $bg = 'bg'.($i%2);
		$num = number_format($total_count - ($page - 1) * $config['cf_page_rows'] - $i);
		
        switch($row['nw_device']) {
            case 'pc':
                $nw_device = 'PC';
                break;
            case 'mobile':
                $nw_device = '모바일';
                break;
            default:
                $nw_device = '모두';
                break;
        }
		if(date("Y-m-d h:i:s") < $row["nw_begin_time"]) {
			$status = "대기";
		}
		if(date("Y-m-d h:i:s") > $row["nw_end_time"]) {
			$status = "만료";
		}
		if($row["nw_begin_time"] <= date("Y-m-d h:i:s") && date("Y-m-d h:i:s") <= $row["nw_end_time"]) {
			$status = "게시 중";
		}
    ?>
    <tr class="<?php echo $bg; ?>">
        <td class="td_num"><?php echo $num; ?></td>
        <td class="td_left"><?php echo $row['nw_subject']; ?></td>
        <td class="td_device"><?php echo $nw_device; ?></td>
        <td class="td_datetime"><?php echo substr($row['nw_begin_time'],2,14); ?></td>
        <td class="td_datetime"><?php echo substr($row['nw_end_time'],2,14); ?></td>
        <!--        
        <td class="td_num"><?php echo $row['nw_disable_hours']; ?>시간</td>
        <td class="td_num"><?php echo $row['nw_left']; ?>px</td>
        <td class="td_num"><?php echo $row['nw_top']; ?>px</td>
        <td class="td_num"><?php echo $row['nw_width']; ?>px</td>
        <td class="td_num"><?php echo $row['nw_height']; ?>px</td>
        -->
		<td class="td_jijeom"><?php echo $row['nw_jijeom']; ?></td>
		<td class="td_num"><?php echo $row['nw_sort']; ?></td>
        <td class="td_num"><?php echo $status; ?></td>
        <td class="td_mng td_mng_m">
            <a href="./newwinform.php?w=u&amp;nw_id=<?php echo $row['nw_id']; ?>" class="btn btn_03"><span class="sound_only"><?php echo $row['nw_subject']; ?> </span>수정</a>
            <a href="./newwinformupdate.php?w=d&amp;nw_id=<?php echo $row['nw_id']; ?>" onclick="return delete_confirm(this);" class="btn btn_02"><span class="sound_only"><?php echo $row['nw_subject']; ?> </span>삭제</a>
        </td>
    </tr>
    <?php
    }

    if ($i == 0) {
        echo '<tr><td colspan="11" class="empty_table">자료가 한건도 없습니다.</td></tr>';
    }
    ?>
    </tbody>
    </table>
</div>
</div>

<script src="<?=G5_JS_URL?>/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="<?=G5_URL?>/admin/js/jquery-ui.min.js"></script>
<script src="<?=G5_URL?>/admin/js/moment.min.js"></script>
<script src="<?=G5_URL?>/admin/js/jquery.animateNumber.min.js"></script>

<?php
//include_once (G5_ADMIN_PATH.'/admin.tail.php');
?>
