<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

$sql = " update $write_table
            set wr_good = '$wr_good'
          where wr_id = '$wr_id' ";
sql_query($sql);

delete_cache_latest($bo_table);

goto_url(G5_URL.'/admin/bbs/board.php?bo_table='.$bo_table);

?>