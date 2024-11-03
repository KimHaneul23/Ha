<?php
$bo_table = 'equipment';
$sql = "select * from g5_menu where me_use = 1 and me_mobile_use = 1 order by me_code, me_order asc";
$qry = sql_query($sql);
for($i=0;$row=sql_fetch_array($qry);$i++) {
	$me_list[$i] = $row;
}
for($i=0; $i<count($me_list); $i++) {
	if(strpos($me_list[$i]['me_link'], $_SERVER['REQUEST_URI']) !== false) $filter2 = $me_list[$i]['me_code'];
}

$sql = "select * from g5_write_equipment where 1=1 ";

if($filter2) $sql .= " and wr_5 regexp '(^|,)".$filter2."(,|$)'";
$sql .= " order by wr_id desc";
//echo 
$qry = sql_query($sql);

for($i=0;$row=sql_fetch_array($qry);$i++){ 
    $list[$i] = get_list($row, $board, $board_skin_url, $board['bo_subject_len']);
    $thumb = get_file($bo_table, $list[$i]['wr_id']);
?>
<div id="equipment<?=$i ?>" class="modal">
    <div class="modal-dialog">
        <button type="button" class="modal-close" onclick="modalHide_equipment('equipment<?=$i ?>')"></button>
        <div class="modal-content-equipment">
            <div class="modal-body">
                <div class="imgbox equipment_imgbox">
                    <img src="<?php echo G5_URL ?>/data/file/<?=$bo_table ?>/<?=$thumb[1]['file'] ?>" alt="<?=$row['wr_subject']?>">
                </div>
                <div class="txtbox equipment_txtbox">
                    <div class="innerbox">
                        <div class="titleline notoserif">
                            <p class="fz_28 ls_p5 lh_14 medium"><?=$row['wr_subject']?></p>
                        </div>
                        <div class="meta-tag m_20">
                            <p class="fz_20 ls_2 lh_16 normal"><?=$row['wr_1']?></p>
                        </div>
                        <div class="fz_13 ls_2 lh_14 m_20" style="color:#fff;">
                            <?php if($list[$i]['wr_6'] == '구월점' && $list[$i]['wr_7'] == ''){ ?>
                                <?php echo $list[$i]['wr_6'] ?>
                            <?php } else if($list[$i]['wr_6'] == '' && $list[$i]['wr_7'] == '송도점'){ ?>
                                <?php echo $list[$i]['wr_7'] ?>
                            <?php } else if($list[$i]['wr_6'] == '구월점' && $list[$i]['wr_7'] == '송도점'){ ?>
                                <?php echo $list[$i]['wr_6'] ?>, <?php echo $list[$i]['wr_7'] ?>   
                            <?php } ?>
                        </div>
                        <div class="equipment_modal_cont_text fz_15 ls_1 lh_16 light"><?=nl2br($list[$i]['wr_content']) ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="transparents-layer modal-equipment<?=$i ?>"></div>
<?
}
?>