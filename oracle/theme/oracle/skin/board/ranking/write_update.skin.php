<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

$sql = " update $write_table
            set wr_good = '$wr_good',
                wr_datetime = '".G5_TIME_YMDHIS."',
                wr_14 = '$wr_14',
                wr_15 = '$wr_15'
          where wr_id = '$wr_id' ";
sql_query($sql);
delete_cache_latest($bo_table);
goto_url(G5_URL.'/admin/bbs/board.php?bo_table='.$bo_table);
?>