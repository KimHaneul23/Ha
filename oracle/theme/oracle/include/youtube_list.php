<?php
$bo_table = 'youtube';
$sql = "select * from g5_menu where me_use = 1 and me_mobile_use = 1 order by me_code, me_order asc";
$qry = sql_query($sql);
for($i=0;$row=sql_fetch_array($qry);$i++) {
	$me_list[$i] = $row;
}
for($i=0; $i<count($me_list); $i++) {
	if(strpos($me_list[$i]['me_link'], $_SERVER['REQUEST_URI']) !== false) $filter2 = $me_list[$i]['me_code'];
}

$sql = "select * from g5_write_youtube where 1=1 ";

if($filter2) $sql .= " and wr_5 regexp '(^|,)".$filter2."(,|$)'";
$sql .= " order by wr_id desc";
//echo 
$qry = sql_query($sql);

for($i=0;$row=sql_fetch_array($qry);$i++){ 
    $list[$i] = get_list($row, $board, $board_skin_url, $board['bo_subject_len']);
    $thumb = get_list_thumbnail($board['bo_table'], $list[$i]['wr_id'], $board['bo_gallery_width'], $board['bo_gallery_height'], false, true);
    //$thumb = get_file($bo_table, $list[$i]['wr_id']);
    
    $ytSrcLink = 'https://www.youtube.com/watch?v='.$list[$i]['wr_10']; 
    
?>
<div class="column_quarter">
    <div class="sub2_1_youtube sub2_1_youtube01 ta_c">
        <a href="<?php echo $ytSrcLink ?>" target="_blank">
            <img src="https://img.youtube.com/vi/<?php echo $list[$i]['wr_10'] ?>/0.jpg" alt="<?=$row['wr_subject']?>">
            <p class="sub2_1_youtube_text fz_15 ls_2 lh_14 normal">
                <?=$row['wr_subject']?>
            </p>
        </a>
    </div>
</div>
<?
}
?>

<script>
$(document).ready(function(){
    var youtube_length00 = $('#content .sub2_1_youtube_wrap > div').length;
    var youtube_length01 = $('#content .sub_tabcontent1 .sub2_1_youtube_wrap > div').length;
    var youtube_length02 = $('#content .sub_tabcontent2 .sub2_1_youtube_wrap > div').length;
    var youtube_length03 = $('#content .sub_tabcontent3 .sub2_1_youtube_wrap > div').length;
    var youtube_length04 = $('#content .sub_tabcontent4 .sub2_1_youtube_wrap > div').length;
    var youtube_length05 = $('#content .sub_tabcontent5 .sub2_1_youtube_wrap > div').length;
    var youtube_length06 = $('#content .sub_tabcontent6 .sub2_1_youtube_wrap > div').length;
    var youtube_length07 = $('#content .sub_tabcontent7 .sub2_1_youtube_wrap > div').length;
    var youtube_length08 = $('#content .sub_tabcontent8 .sub2_1_youtube_wrap > div').length;
    var youtube_length09 = $('#content .sub_tabcontent9 .sub2_1_youtube_wrap > div').length;
    if(youtube_length00 == 1){
        $('.sub2_1_youtube.sub2_1_youtube01').addClass('sub2_1_youtube_item00');
    } else if(youtube_length01 == 1){
        $('.sub2_1_youtube.sub2_1_youtube01').addClass('sub2_1_youtube_item00');
    } else if(youtube_length02 == 1){
        $('.sub2_1_youtube.sub2_1_youtube01').addClass('sub2_1_youtube_item00');
    } else if(youtube_length03 == 1){
        $('.sub2_1_youtube.sub2_1_youtube01').addClass('sub2_1_youtube_item00');
    } else if(youtube_length04 == 1){
        $('.sub2_1_youtube.sub2_1_youtube01').addClass('sub2_1_youtube_item00');
    } else if(youtube_length05 == 1){
        $('.sub2_1_youtube.sub2_1_youtube01').addClass('sub2_1_youtube_item00');
    } else if(youtube_length06 == 1){
        $('.sub2_1_youtube.sub2_1_youtube01').addClass('sub2_1_youtube_item00');
    } else if(youtube_length07 == 1){
        $('.sub2_1_youtube.sub2_1_youtube01').addClass('sub2_1_youtube_item00');
    } else if(youtube_length08 == 1){
        $('.sub2_1_youtube.sub2_1_youtube01').addClass('sub2_1_youtube_item00');
    } else if(youtube_length09 == 1){
        $('.sub2_1_youtube.sub2_1_youtube01').addClass('sub2_1_youtube_item00');
    }
});
</script>