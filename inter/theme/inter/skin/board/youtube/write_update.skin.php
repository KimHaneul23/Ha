<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
delete_cache_latest($bo_table);
goto_url(G5_ADMIN_URL.'/board.php?bo_table='.$bo_table.'&amp;'.$qstr);
?>