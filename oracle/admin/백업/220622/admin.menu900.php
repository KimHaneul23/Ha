<?php
$menu['menu900'] = array (
    array('900000', '캐시설정', G5_ADMIN_URL.'/session_file_delete.php',   'cf_session'),
    array('900800', '세션파일 일괄삭제',G5_ADMIN_URL.'/session_file_delete.php', 'cf_session', 1),
    array('900900', '캐시파일 일괄삭제',G5_ADMIN_URL.'/cache_file_delete.php',   'cf_cache', 1),
    array('900910', '캡챠파일 일괄삭제',G5_ADMIN_URL.'/captcha_file_delete.php',   'cf_captcha', 1),
    array('900920', '썸네일파일 일괄삭제',G5_ADMIN_URL.'/thumbnail_file_delete.php',   'cf_thumbnail', 1),
//    array('900500', 'phpinfo()',        G5_ADMIN_URL.'/phpinfo.php',       'cf_phpinfo')
);