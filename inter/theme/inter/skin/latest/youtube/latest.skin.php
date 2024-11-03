<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
$thumb_width = 188;
$thumb_height = 106;

//$sql = "select * from g5_write_youtube where wr_1 = '2' ORDER BY `g5_write_youtube`.`wr_id` DESC limit 4";
//$row = sql_fetch($sql);
//$list[$i] = get_list($row, $board, $board_skin_url, $board['bo_subject_len']);

?>
<div class="main_cont08_tabcont_box_wrap">
    <div class="main_cont08_tabcont_wrap tab_cont01 active">
        <ul class="main_cont08_tabcont_ul">
            <?php
            for ($i=0; $i<count($list); $i++) {
                $thumb = get_list_thumbnail($board['bo_table'], $list[$i]['wr_id'], $board['bo_gallery_width'], $board['bo_gallery_height'], false, true);
                
                if($thumb['src']) {
                    $img_content = '<img src="'.$thumb['src'].'" alt="'.$thumb['alt'].'" >';
                } else if ($list[$i]['wr_1']){
                    $img_content = '<img src="https://img.youtube.com/vi/'.$list[$i]['wr_1'].'/maxresdefault.jpg">';
                } else {
                    $img_content = '<div class="no_image">No Image</div>';
                }
                
                if($list[$i]['ca_name']=='전문적인'){
                if($list[$i]['wr_3']=='0'){
            ?>   
            <li>
                <div class="main_cont08_yourube_area">
                    <div class="main_cont08_yourube_play_area">
                        <iframe src="https://www.youtube.com/embed/<?php echo $list[$i]['wr_1'];?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                    </div>
                </div>
                <a href="https://www.youtube.com/watch?v=<?php echo $list[$i]['wr_1'];?>" target="_blank">
                    <div class="main_cont08_yourube_text_wrap">
                        <div class="main_cont08_yourube_text">
                            <?php echo $img_content; ?>
                            
                            <p class="txt01 fz_17 lh_14 kopubworlddotum normal">
                                <?php echo $list[$i]['subject'] ?>
                            </p>
                        </div>
                    </div>
                </a>
            </li>
            <?php } ?>
            <?php } ?>
            <?php } ?>
            <?php if ($list == 0) { //게시물이 없을 때  ?>
            <div class="no-data">게시글 준비 중입니다.</div>
            <?php } ?>
        </ul>
    </div>
    <div class="main_cont08_tabcont_wrap tab_cont02">
        <ul class="main_cont08_tabcont_ul">
            <?php
            for ($i=0; $i<count($list); $i++) {
                $thumb = get_list_thumbnail($board['bo_table'], $list[$i]['wr_id'], $board['bo_gallery_width'], $board['bo_gallery_height'], false, true);
                
                if($thumb['src']) {
                    $img_content = '<img src="'.$thumb['src'].'" alt="'.$thumb['alt'].'" >';
                } else {
                    $img_content = '<div class="no_image">No Image</div>';
                }
                
                if($list[$i]['ca_name']=='흥미로운'){
                if($list[$i]['wr_3']=='0'){
            ?>   
            <li>
                <div class="main_cont08_yourube_area">
                    <div class="main_cont08_yourube_play_area">
                        <iframe src="https://www.youtube.com/embed/<?php echo $list[$i]['wr_1'];?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                    </div>
                </div>
                <a href="https://www.youtube.com/watch?v=<?php echo $list[$i]['wr_1'];?>" target="_blank">
                    <div class="main_cont08_yourube_text_wrap">
                        <div class="main_cont08_yourube_text">
                            <?php echo $img_content; ?>
                            
                            <p class="txt01 fz_17 lh_14 kopubworlddotum normal">
                                <?php echo $list[$i]['subject'] ?>
                            </p>
                        </div>
                    </div>
                </a>
            </li>
            <?php } ?>
            <?php } ?>
            <?php } ?>
            <?php if ($list == 0) { //게시물이 없을 때  ?>
            <div class="no-data">게시글 준비 중입니다.</div>
            <?php } ?>
        </ul>
    </div>
</div>