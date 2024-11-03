<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가

if (!defined('_SHOP_')) {
    $pop_division = 'comm';
} else {
    $pop_division = 'shop';
}

$sql = " select * from {$g5['new_win_table']}
          where '".G5_TIME_YMDHIS."' between nw_begin_time and nw_end_time
            and nw_device = 'pc' and nw_jijeom = '구월점' order by nw_sort asc limit 0, 5";
$result = sql_query($sql, false);

for ($i=0; $nw=sql_fetch_array($result); $i++) {
    // 이미 체크 되었다면 Continue
    if (isset($_COOKIE["hd_pops_{$nw['nw_id']}"]) && $_COOKIE["hd_pops_{$nw['nw_id']}"])
        continue;
	
	preg_match_all("/<img[^>]*src=[\"']?([^>\"']+)[\"']?[^>]*>/i", $nw['nw_content'], $matches);
	$nw['img'] = $matches[1][0];
	$popup[] = $nw;
	$pop_title .= "'".$nw['nw_subject']."',";
}
?>

<link rel="stylesheet" href="<?php echo G5_THEME_URL?>/plugins/swiper/swiper-bundle.min.css">
<script src="<?php echo G5_THEME_URL?>/plugins/swiper/swiper-bundle.min.js"></script>

<style>
	/* 팝업레이어 */
	.main-popup-sect { display:block; opacity:1; visibility:visible; }
	.main-m-popup-sect { display:none; opacity:0; visibility:hidden; }
	
	.main-popup-bg { position:fixed; left:0; top:0; width:100%; height:100%; opacity:1; visibility:visible; z-index:8900; background:rgba(0,0,0,.4); }
	
	.main-popup-content { position:fixed; transform:translate(-50%, -50%); -webkit-transform:translate(-50%, -50%); -moz-transform:translate(-50%, -50%); -ms-transform:translate(-50%, -50%); -o-transform:translate(-50%, -50%); opacity:1; visibility:visible; background:none; z-index:9900; }
    .main-popup-content.guwol{top:55%; /*left:25%;*/ left:36%; width:90%; max-width:470px;}
    .main-popup-content.songdo{top:55%; /*left:52%;*/ left:64%; width:90%; max-width:470px;}
    /*.main-popup-content.common{top:55%; left:79%; width:90%; max-width:470px;}*/
    
	[id^=hd_pops_] .main-popup-pagination { position:relative; left:inherit; bottom:inherit; width:100%; height:auto; background:#ededed; display:flex; flex-wrap:wrap; justify-content:flex-start; align-items:flex-start; border:1px solid #ededed;}
	[id^=hd_pops_] .main-popup-pagination::after {content:''; position:absolute; top:0%; left:50%; width:1px; height:100%; background:#ddd; transform:translateX(-50%); -webkit-transform:translateX(-50%); -moz-transform:translateX(-50%); -ms-transform:translateX(-50%); -o-transform:translateX(-50%); z-index:1;}
	[id^=hd_pops_] .main-popup-pagination .swiper-pagination-bullet { position:relative; width:50% !important; height:35px; font-size:15px; border-radius:0; margin:0; padding:7px 0 0; background-color:#ededed; opacity:1; color:#313131; border-bottom:1px solid #ddd;}
	[id^=hd_pops_] .main-popup-pagination .swiper-pagination-bullet-active { color:#0f594e; opacity:1; font-weight:600; }
	
	[id^=hd_pops_] .modal-footer { position:relative; width:100%; height:34px; background-color:#000; }
	[id^=hd_pops_] .hd_pops_reject { padding:0 0.8rem; height:100%; font-size:13px; color:#fff; text-align:left; background:none; border:0; margin:0;}
	[id^=hd_pops_] .main-popup-close { position:absolute; right:10px; top:7px; width:20px; height:20px; background:url("../img/modal-close.png") no-repeat center/100% auto; transition:all 0.8s; transform:rotate(0deg); transform-origin:50% 50%; border:0;}
	[id^=hd_pops_] .main-popup-close:hover { transform:rotate(180deg); }
    
    
    .popup_jijeom{position: relative; width: 110px; background-color: #256159; text-align: center; padding:5px 0; border-radius: 15px 15px 0 0;}
	
    .popup_slide{height:auto !important;}
    .popup_slide > a{position:relative; width:100%; height:100%; display:block;}
    .popup_slide, .popup_img{
        image-rendering: -moz-crisp-edges; /* firefox */
        image-rendering: -o-crisp-edges; /* opera */
        image-rendering: -webkit-optimize-contrast; /* chrome(비표준) */
        image-rendering: crisp-edges;
        transform:translateZ(0);
        -webkit-transform: translateZ(0);
        -moz-transform: translateZ(0);
        -ms-transform: translateZ(0);
        -o-transform: translateZ(0);
        backface-visibility:hidden;
    }
    
	@media (max-width:991px) {
		.main-popup-sect { display:none; visibility:hidden; opacity:0; }
		.main-m-popup-sect { display:block; visibility:visible; opacity:1; }
		
		.main-m-popup-bg { position:fixed; left:0; top:0; width:100%; height:100%; opacity:1; visibility:visible; z-index:8900; background:rgba(0,0,0,.4); }
		
        .main-popup-content.m_guwol{top:30%; left:50%; width:100%; max-width:90%;}
        .main-popup-content.m_songdo{top:70%; left:50%; width:100%; max-width:90%;}
        .main-popup-content.m_common{top:50%; left:50%; width:100%; max-width:90%;}
        
		[id^=hd_pops_] .main-popup-pagination { position:absolute; bottom:3%; height:auto; }
		[id^=hd_pops_] .main-popup-pagination .swiper-pagination-bullet { width:6px; height:6px; margin:0 4px; background-color:#fff; border-radius:50%; opacity:0.8; vertical-align:middle; }
		[id^=hd_pops_] .main-popup-pagination .swiper-pagination-bullet-active { width:10px; height:10px; background-color:#0f594e; opacity:1; }
		
		
		[id^=hd_pops_] .hd_pops_reject_m { padding:0 0.8rem; height:100%; font-size:13px; color:#fff; text-align:left; background:none; border:0; margin:0;}
		[id^=hd_pops_] .main-m-popup-close { position:absolute; right:10px; top:7px; width:20px; height:20px; background:url("../img/modal-close.png") no-repeat center/100% auto; transition:all 0.8s; transform:rotate(0deg); transform-origin:50% 50%; background-color:none; border:0; margin:0;}
		[id^=hd_pops_] .main-m-popup-close:hover { transform:rotate(180deg); }
        
        .popup_jijeom{width: 90px; padding:4px 0; border-radius:10px 10px 0 0;}
        .popup_jijeom > p{font-size:1.8rem;}
	}
</style>


<?php
if ($i > 0) { // 구월점
?>
<div id="hd_pops_pc" class="main-popup-sect guwol">
	<div class="main-popup-content guwol">
        <div class="popup_jijeom guwol">
            <p class="c-w fz_21 ls_2 lh_16 medium">구월점</p>
        </div>
		<div class="swiper-container main-popup-slide guwol">
			<div class="swiper-wrapper">
				<?php
				for($i=0; $i< count($popup); $i++){
				?>
				<div class="swiper-slide popup_slide">
					<?
					if(!empty($popup[$i]['nw_href'])) {
						echo '<a href="'.$popup[$i]['nw_href'].'" target="_blank">';
					}
					?>
						<img src="<?=$popup[$i]['img'] ?>" alt="<?=$popup[$i]['nw_subject'] ?>" class="img-fluid popup_img" />
					<?
					if(isset($popup[$i]['nw_href'])) {
						echo '</a>';
					}
					?>
				</div>
				<?php } ?>
			</div>
			<div class="swiper-pagination main-popup-pagination guwol">
				<? for($i=0;$i<count($popup);$i++){?>
				<div class="swiper-pagination-bullet" aria-label="<?=(i+1)?>"></div>
				<?}?>
			</div>
		</div>
		<div class="modal-footer">
			<button class="hd_pops_reject">하루동안 보지 않기</button>
			<button type="button" class="main-popup-close main-popup-close-guwol"></button>
		</div>
	</div>
	<div class="main-popup-bg main-popup-bg-guwol guwol"></div>
</div>
<? } ?>

<?php
$sql = " select * from {$g5['new_win_table']}
          where '".G5_TIME_YMDHIS."' between nw_begin_time and nw_end_time
            and nw_device = 'pc' and nw_jijeom = '송도점' order by nw_sort asc limit 0, 5";
$result = sql_query($sql, false);

for ($i=0; $nw2=sql_fetch_array($result); $i++) {
	
	// 이미 체크 되었다면 Continue
    if (isset($_COOKIE["hd_pops_{$nw2['nw_id']}"]) && $_COOKIE["hd_pops_{$nw2['nw_id']}"])
        continue;
	
	preg_match_all("/<img[^>]*src=[\"']?([^>\"']+)[\"']?[^>]*>/i", $nw2['nw_content'], $matches);
	$nw2['img'] = $matches[1][0];
	$popup2[] = $nw2;
	$pop_title2 .= "'".$nw2['nw_subject']."',";
	
}
?>
<?php
if ($i > 0) { // 송도점
?>
<div id="hd_pops_pc_2" class="main-popup-sect songdo">
	<div class="main-popup-content songdo">
	    <div class="popup_jijeom songdo">
            <p class="c-w fz_21 ls_2 lh_16 medium">송도점</p>
        </div>
		<div class="swiper-container main-popup-slide songdo">
			<div class="swiper-wrapper">
				<?php
				for($i=0; $i< count($popup2); $i++){
				?>
				<div class="swiper-slide popup_slide">
					<?
					if(!empty($popup2[$i]['nw_href'])) {
						echo '<a href="'.$popup2[$i]['nw_href'].'" target="_blank">';
					}
					?>
						<img src="<?=$popup2[$i]['img'] ?>" alt="<?=$popup2[$i]['nw_subject'] ?>" class="img-fluid popup_img" />
					<?
					if(isset($popup2[$i]['nw_href'])) {
						echo '</a>';
					}
					?>
				</div>
				<?php } ?>
			</div>
			<div class="swiper-pagination main-popup-pagination songdo">
				<? for($i=0;$i<count($popup2);$i++){?>
				<div class="swiper-pagination-bullet" aria-label="<?=(i+1)?>"></div>
				<?}?>
			</div>
		</div>
		<div class="modal-footer">
			<button class="hd_pops_reject">하루동안 보지 않기</button>
			<button type="button" class="main-popup-close main-popup-close-songdo"></button>
		</div>
	</div>
	<div class="main-popup-bg main-popup-bg-songdo songdo"></div>
</div>
<? } ?>

<?php
$sql = " select * from {$g5['new_win_table']}
          where '".G5_TIME_YMDHIS."' between nw_begin_time and nw_end_time
            and nw_device = 'pc' and nw_jijeom = '공통' order by nw_sort asc limit 0, 5";
$result = sql_query($sql, false);

for ($i=0; $nw5=sql_fetch_array($result); $i++) {
	
	// 이미 체크 되었다면 Continue
    if (isset($_COOKIE["hd_pops_{$nw5['nw_id']}"]) && $_COOKIE["hd_pops_{$nw5['nw_id']}"])
        continue;
	
	preg_match_all("/<img[^>]*src=[\"']?([^>\"']+)[\"']?[^>]*>/i", $nw5['nw_content'], $matches);
	$nw5['img'] = $matches[1][0];
	$popup5[] = $nw5;
	$pop_title5 .= "'".$nw5['nw_subject']."',";
	
}
?>

<?php
if ($i > 0) { // 공통
?>
<style>
    .main-popup-content.guwol{top:55%; left:25%; width:90%; max-width:470px;}
    .main-popup-content.songdo{top:55%; left:52%; width:90%; max-width:470px;}
    .main-popup-content.common{top:55%; left:79%; width:90%; max-width:470px;}
</style>
<div id="hd_pops_pc_3" class="main-popup-sect common">
	<div class="main-popup-content common">
	    <div class="popup_jijeom common">
            <p class="c-w fz_21 ls_2 lh_16 medium">공통</p>
        </div>
		<div class="swiper-container main-popup-slide common">
			<div class="swiper-wrapper">
				<?php
				for($i=0; $i< count($popup5); $i++){
				?>
				<div class="swiper-slide popup_slide">
					<?
					if(!empty($popup5[$i]['nw_href'])) {
						echo '<a href="'.$popup5[$i]['nw_href'].'" target="_blank">';
					}
					?>
						<img src="<?=$popup5[$i]['img'] ?>" alt="<?=$popup5[$i]['nw_subject'] ?>" class="img-fluid popup_img" />
					<?
					if(isset($popup5[$i]['nw_href'])) {
						echo '</a>';
					}
					?>
				</div>
				<?php } ?>
			</div>
			<div class="swiper-pagination main-popup-pagination common">
				<? for($i=0;$i<count($popup5);$i++){?>
				<div class="swiper-pagination-bullet" aria-label="<?=(i+1)?>"></div>
				<?}?>
			</div>
		</div>
		<div class="modal-footer">
			<button class="hd_pops_reject">하루동안 보지 않기</button>
			<button type="button" class="main-popup-close main-popup-close-common"></button>
		</div>
	</div>
	<div class="main-popup-bg main-popup-bg-common common"></div>
</div>
<? } ?>

<?php
$sql = " select * from {$g5['new_win_table']}
          where '".G5_TIME_YMDHIS."' between nw_begin_time and nw_end_time
            and nw_device = 'mobile' and nw_jijeom = '구월점' order by nw_sort asc limit 0, 5";
$result = sql_query($sql, false);

for ($i=0; $nw3=sql_fetch_array($result); $i++) {
	
	preg_match_all("/<img[^>]*src=[\"']?([^>\"']+)[\"']?[^>]*>/i", $nw3['nw_content'], $matches);
	$nw3['img'] = $matches[1][0];
	$popup3[] = $nw3;
	
}
?>

<?php
if ($i > 0) {
?>
<div id="hd_pops_m" class="main-m-popup-sect m_guwol">
	<div class="main-popup-content m_guwol">
	    <div class="popup_jijeom guwol">
            <p class="c-w fz_32 ls_2 lh_16 bold">구월점</p>
        </div>
		<div class="swiper-container main-m-popup-slide m_guwol">
			<div class="swiper-wrapper">
				<?php
				for($i=0; $i< count($popup3); $i++){
				?>
				<div class="swiper-slide popup_slide">
					<?
					if(!empty($popup3[$i]['nw_href'])) {
						echo '<a href="'.$popup3[$i]['nw_href'].'" target="_blank">';
					}
					?>
						<img src="<?=$popup3[$i]['img'] ?>" alt="<?=$popup3[$i]['nw_subject'] ?>" class="img-fluid popup_img" />
					<?
					if(isset($popup3[$i]['nw_href'])) {
						echo '</a>';
					}
					?>
				</div>
				<?php } ?>
			</div>
			<!--
			<div class="swiper-pagination main-popup-pagination">
				<? for($i=0;$i<count($popup3);$i++){?>
				<div class="swiper-pagination-bullet main-popup-pagination" aria-label="<?=(i+1)?>"></div>
				<?}?>
			</div>
			-->
		</div>
		<div class="modal-footer">
			<button class="hd_pops_reject_m m_guwol">하루동안 보지 않기</button>
			<button type="button" class="main-m-popup-close main-m-popup-close-guwol"></button>
		</div>
	</div>
	<div class="main-m-popup-bg m_guwol"></div>
</div>
<? } ?>

<?php
$sql = " select * from {$g5['new_win_table']}
          where '".G5_TIME_YMDHIS."' between nw_begin_time and nw_end_time
            and nw_device = 'mobile' and nw_jijeom = '송도점' order by nw_sort asc limit 0, 5";
$result = sql_query($sql, false);

for ($i=0; $nw4=sql_fetch_array($result); $i++) {
	
	preg_match_all("/<img[^>]*src=[\"']?([^>\"']+)[\"']?[^>]*>/i", $nw4['nw_content'], $matches);
	$nw4['img'] = $matches[1][0];
	$popup4[] = $nw4;
	
}
?>
<?php
if ($i > 0) {
?>
<div id="hd_pops_m_2" class="main-m-popup-sect m_songdo">
	<div class="main-popup-content m_songdo">
        <div class="popup_jijeom songdo">
            <p class="c-w fz_32 ls_2 lh_16 bold">송도점</p>
        </div>
		<div class="swiper-container main-m-popup-slide m_songdo">
			<div class="swiper-wrapper">
				<?php
				for($i=0; $i< count($popup4); $i++){
				?>
				<div class="swiper-slide popup_slide">
					<?
					if(!empty($popup4[$i]['nw_href'])) {
						echo '<a href="'.$popup4[$i]['nw_href'].'" target="_blank">';
					}
					?>
						<img src="<?=$popup4[$i]['img'] ?>" alt="<?=$popup4[$i]['nw_subject'] ?>" class="img-fluid popup_img" />
					<?
					if(isset($popup4[$i]['nw_href'])) {
						echo '</a>';
					}
					?>
				</div>
				<?php } ?>
			</div>
			<!--
			<div class="swiper-pagination main-popup-pagination">
				<? for($i=0;$i<count($popup4);$i++){?>
				<div class="swiper-pagination-bullet" aria-label="<?=(i+1)?>"></div>
				<?}?>
			</div>
			-->
		</div>
		<div class="modal-footer">
			<button class="hd_pops_reject_m m_songdo">하루동안 보지 않기</button>
			<button type="button" class="main-m-popup-close main-m-popup-close-songdo"></button>
		</div>
	</div>
	<div class="main-m-popup-bg m_songdo"></div>
</div>
<? } ?>

<?php
$sql = " select * from {$g5['new_win_table']}
          where '".G5_TIME_YMDHIS."' between nw_begin_time and nw_end_time
            and nw_device = 'mobile' and nw_jijeom = '공통' order by nw_sort asc limit 0, 5";
$result = sql_query($sql, false);

for ($i=0; $nw6=sql_fetch_array($result); $i++) {
	
	preg_match_all("/<img[^>]*src=[\"']?([^>\"']+)[\"']?[^>]*>/i", $nw6['nw_content'], $matches);
	$nw6['img'] = $matches[1][0];
	$popup6[] = $nw6;
	
}
?>

<?php
if ($i > 0) {
?>
<div id="hd_pops_m_3" class="main-m-popup-sect m_common">
	<div class="main-popup-content m_common">
	    <div class="popup_jijeom m_common">
            <p class="c-w fz_32 ls_2 lh_16 bold">공통</p>
        </div>
		<div class="swiper-container main-m-popup-slide m_common">
			<div class="swiper-wrapper">
				<?php
				for($i=0; $i< count($popup6); $i++){
				?>
				<div class="swiper-slide popup_slide">
					<?
					if(!empty($popup6[$i]['nw_href'])) {
						echo '<a href="'.$popup6[$i]['nw_href'].'" target="_blank">';
					}
					?>
						<img src="<?=$popup6[$i]['img'] ?>" alt="<?=$popup6[$i]['nw_subject'] ?>" class="img-fluid popup_img" />
					<?
					if(isset($popup6[$i]['nw_href'])) {
						echo '</a>';
					}
					?>
				</div>
				<?php } ?>
			</div>
			<!--
			<div class="swiper-pagination main-popup-pagination">
				<? for($i=0;$i<count($popup3);$i++){?>
				<div class="swiper-pagination-bullet main-popup-pagination" aria-label="<?=(i+1)?>"></div>
				<?}?>
			</div>
			-->
		</div>
		<div class="modal-footer">
			<button class="hd_pops_reject_m m_common">하루동안 보지 않기</button>
			<button type="button" class="main-m-popup-close main-m-popup-close-common"></button>
		</div>
	</div>
	<div class="main-m-popup-bg m_common"></div>
</div>
<? } ?>

<script>
const mainPopUpModalClose = Array.from(document.getElementsByClassName('main-popup-close-guwol'));
const mainPopUpModalClose2 = Array.from(document.getElementsByClassName('main-popup-close-songdo'));
const mainPopUpModalClose3 = Array.from(document.getElementsByClassName('main-popup-close-common'));
const mainPopUpModalClosebg = Array.from(document.getElementsByClassName('main-popup-bg'));
if(mainPopUpModalClose){
    mainPopUpModalClose.forEach((button)=>{
        button.addEventListener('click',(event)=>{
          document.querySelector('.main-popup-sect.guwol').style.visibility = 'hidden';
          document.querySelector('.main-popup-bg.guwol').style.visibility = 'hidden';
          document.querySelector('.main-popup-sect.guwol').style.display = 'none';
        });
    });
    
    mainPopUpModalClosebg.forEach((button)=>{
        button.addEventListener('click',(event)=>{
          document.querySelector('.main-popup-sect.guwol').style.visibility = 'hidden';
          document.querySelector('.main-popup-bg').style.visibility = 'hidden';
          document.querySelector('.main-popup-sect.guwol').style.display = 'none';
        });
    });
}
if(mainPopUpModalClose2){
    mainPopUpModalClose2.forEach((button)=>{
        button.addEventListener('click',(event)=>{
          document.querySelector('.main-popup-sect.songdo').style.visibility = 'hidden';
          document.querySelector('.main-popup-bg.songdo').style.visibility = 'hidden';
          document.querySelector('.main-popup-sect.songdo').style.display = 'none';
        });
    });
    
    mainPopUpModalClosebg.forEach((button)=>{
        button.addEventListener('click',(event)=>{
          document.querySelector('.main-popup-sect.songdo').style.visibility = 'hidden';
          document.querySelector('.main-popup-bg').style.visibility = 'hidden';
          document.querySelector('.main-popup-sect.songdo').style.display = 'none';
        });
    });
}
if(mainPopUpModalClose2){
    mainPopUpModalClose2.forEach((button)=>{
        button.addEventListener('click',(event)=>{
          document.querySelector('.main-popup-sect.songdo').style.visibility = 'hidden';
          document.querySelector('.main-popup-bg.songdo').style.visibility = 'hidden';
          document.querySelector('.main-popup-sect.songdo').style.display = 'none';
        });
    });
    
    mainPopUpModalClosebg.forEach((button)=>{
        button.addEventListener('click',(event)=>{
          document.querySelector('.main-popup-sect.songdo').style.visibility = 'hidden';
          document.querySelector('.main-popup-bg').style.visibility = 'hidden';
          document.querySelector('.main-popup-sect.songdo').style.display = 'none';
        });
    });
}
if(mainPopUpModalClose3){
    mainPopUpModalClose3.forEach((button)=>{
        button.addEventListener('click',(event)=>{
          document.querySelector('.main-popup-sect.common').style.visibility = 'hidden';
          document.querySelector('.main-popup-bg.common').style.visibility = 'hidden';
          document.querySelector('.main-popup-sect.common').style.display = 'none';
        });
    });
    
    mainPopUpModalClosebg.forEach((button)=>{
        button.addEventListener('click',(event)=>{
          document.querySelector('.main-popup-sect.common').style.visibility = 'hidden';
          document.querySelector('.main-popup-bg').style.visibility = 'hidden';
          document.querySelector('.main-popup-sect.common').style.display = 'none';
        });
    });
}

const main_m_PopUpModalClose = Array.from(document.getElementsByClassName('main-m-popup-close-guwol'));
const main_m_PopUpModalClose2 = Array.from(document.getElementsByClassName('main-m-popup-close-songdo'));
const main_m_PopUpModalClose3 = Array.from(document.getElementsByClassName('main-m-popup-close-common'));
const main_m_PopUpModalClosebg = Array.from(document.getElementsByClassName('main-m-popup-bg'));
if(main_m_PopUpModalClose){
    main_m_PopUpModalClose.forEach((button)=>{
        button.addEventListener('click',(event)=>{
          document.querySelector('.main-m-popup-sect.m_guwol').style.visibility = 'hidden';
          document.querySelector('.main-m-popup-bg.m_guwol').style.visibility = 'hidden';
          document.querySelector('.main-m-popup-sect.m_guwol').style.display = 'none';
        });
    });
    
    main_m_PopUpModalClosebg.forEach((button)=>{
        button.addEventListener('click',(event)=>{
          document.querySelector('.main-m-popup-sect.m_guwol').style.visibility = 'hidden';
          document.querySelector('.main-m-popup-bg').style.visibility = 'hidden';
          document.querySelector('.main-m-popup-sect.m_guwol').style.display = 'none';
        });
    });
}
if(main_m_PopUpModalClose2){
    main_m_PopUpModalClose2.forEach((button)=>{
        button.addEventListener('click',(event)=>{
          document.querySelector('.main-m-popup-sect.m_songdo').style.visibility = 'hidden';
          document.querySelector('.main-m-popup-bg.m_songdo').style.visibility = 'hidden';
          document.querySelector('.main-m-popup-sect.m_songdo').style.display = 'none';
        });
    });
    
    main_m_PopUpModalClosebg.forEach((button)=>{
        button.addEventListener('click',(event)=>{
          document.querySelector('.main-m-popup-sect.m_songdo').style.visibility = 'hidden';
          document.querySelector('.main-m-popup-bg').style.visibility = 'hidden';
          document.querySelector('.main-m-popup-sect.m_songdo').style.display = 'none';
        });
    });
}
if(main_m_PopUpModalClose3){
    main_m_PopUpModalClose3.forEach((button)=>{
        button.addEventListener('click',(event)=>{
          document.querySelector('.main-m-popup-sect.m_common').style.visibility = 'hidden';
          document.querySelector('.main-m-popup-bg.m_common').style.visibility = 'hidden';
          document.querySelector('.main-m-popup-sect.m_common').style.display = 'none';
        });
    });
    
    main_m_PopUpModalClosebg.forEach((button)=>{
        button.addEventListener('click',(event)=>{
          document.querySelector('.main-m-popup-sect.m_common').style.visibility = 'hidden';
          document.querySelector('.main-m-popup-bg').style.visibility = 'hidden';
          document.querySelector('.main-m-popup-sect.m_common').style.display = 'none';
        });
    });
}
</script>

<script>
	let options2_1 = {};
	if ($(".main-popup-slide.guwol .swiper-slide").length == 1 ) {
		options2_1 = {
			speed:800,
			autoplay: false,
			autoplayDisableOnInteraction: false,
			loop: false,
			loopAdditionalSlides: 1,
			centeredSlides : true,
			observer: true,
			observeParents: true,
			pagination: {
				el: '.swiper-pagination.main-popup-pagination.guwol',
				clickable: true,
				renderBullet: function (index, className) {
					return '<div class="' + className + '"><span>' + (bullet[index]) + '</span></div>';
				}
			},
		}
	} else {
		options2_1 = {
			speed:800,
			autoplay: {
				delay: 5000,
				disableOnInteraction: false,
			},
			autoplayDisableOnInteraction: false,
			loop: true,
			loopAdditionalSlides: 1,
			centeredSlides : true,
			observer: true,
			observeParents: true,
			pagination: {
				el: '.swiper-pagination.main-popup-pagination.guwol',
				clickable: true,
				renderBullet: function (index, className) {
					return '<div class="' + className + '"><span>' + (bullet[index]) + '</span></div>';
				}
			},
		}
	}
	
	var bullet = [<?=substr($pop_title, 0, -1)?>];
	var mainPopUp = new Swiper('.main-popup-slide.guwol', options2_1);
    
    let options2_2 = {};
	if ($(".main-popup-slide.songdo .swiper-slide").length == 1 ) {
		options2_2 = {
			speed:800,
			autoplay: false,
			autoplayDisableOnInteraction: false,
			loop: false,
			loopAdditionalSlides: 1,
			centeredSlides : true,
			observer: true,
			observeParents: true,
			pagination: {
				el: '.swiper-pagination.main-popup-pagination.songdo',
				clickable: true,
				renderBullet: function (index, className) {
					return '<div class="' + className + '"><span>' + (bullet2[index]) + '</span></div>';
				}
			},
		}
	} else {
		options2_2 = {
			speed:800,
			autoplay: {
				delay: 5000,
				disableOnInteraction: false,
			},
			autoplayDisableOnInteraction: false,
			loop: true,
			loopAdditionalSlides: 1,
			centeredSlides : true,
			observer: true,
			observeParents: true,
			pagination: {
				el: '.swiper-pagination.main-popup-pagination.songdo',
				clickable: true,
				renderBullet: function (index, className) {
					return '<div class="' + className + '"><span>' + (bullet2[index]) + '</span></div>';
				}
			},
		}
	}
	var bullet2 = [<?=substr($pop_title2, 0, -1)?>];
	var mainPopUp2 = new Swiper('.main-popup-slide.songdo', options2_2);
	
	let options2_3 = {};
	if ($(".main-popup-slide.common .swiper-slide").length == 1 ) {
		options2_3 = {
			speed:800,
			autoplay: false,
			autoplayDisableOnInteraction: false,
			loop: false,
			loopAdditionalSlides: 1,
			centeredSlides : true,
			observer: true,
			observeParents: true,
			pagination: {
				el: '.swiper-pagination.main-popup-pagination.common',
				clickable: true,
				renderBullet: function (index, className) {
					return '<div class="' + className + '"><span>' + (bullet3[index]) + '</span></div>';
				}
			},
		}
	} else {
		options2_3 = {
			speed:800,
			autoplay: {
				delay: 5000,
				disableOnInteraction: false,
			},
			autoplayDisableOnInteraction: false,
			loop: true,
			loopAdditionalSlides: 1,
			centeredSlides : true,
			observer: true,
			observeParents: true,
			pagination: {
				el: '.swiper-pagination.main-popup-pagination.common',
				clickable: true,
				renderBullet: function (index, className) {
					return '<div class="' + className + '"><span>' + (bullet3[index]) + '</span></div>';
				}
			},
		}
	}
	var bullet3 = [<?=substr($pop_title5, 0, -1)?>];
	var mainPopUp3 = new Swiper('.main-popup-slide.common', options2_3);
	
	
	var len = '<?=count($popup)?>';
	var len2 = '<?=count($popup2)?>';
	var len3 = '<?=count($popup3)?>';
    var con_wid = $(".swiper-pagination.main-popup-pagination.guwol").width();
    var con_wid2 = $(".swiper-pagination.main-popup-pagination.songdo").width();
    var con_wid3 = $(".swiper-pagination.main-popup-pagination.common").width();
    var li_wid = 100 /len;
    var li_wid2 = 100 /len2;
    var li_wid3 = 100 /len3;
    $(".main-popup-pagination.guwol .swiper-pagination-bullet").css({"width":li_wid+"%"});
    $(".main-popup-pagination.songdo .swiper-pagination-bullet").css({"width":li_wid2+"%"});
    $(".main-popup-pagination.common .swiper-pagination-bullet").css({"width":li_wid3+"%"});
	
	let options4 = {};
	if ($(".main-popup-slide.m_guwol .swiper-slide").length == 1 ) {
		options4 = {
			speed:800,
			autoplay: false,
			autoplayDisableOnInteraction: false,
			loop: false,
			loopAdditionalSlides: 1,
			centeredSlides : true,
			observer: true,
			observeParents: true,
			pagination: {
				el: '.swiper-pagination',
				type: 'bullets',
			},
		}
	} else {
		options4 = {
			speed:800,
			autoplay: {
				delay: 5000,
				disableOnInteraction: false,
			},
			autoplayDisableOnInteraction: false,
			loop: true,
			loopAdditionalSlides: 1,
			centeredSlides : true,
			observer: true,
			observeParents: true,
			pagination: {
				el: '.swiper-pagination',
				type: 'bullets',
			},
		}
	}
	var main_m_PopUp = new Swiper('.main-m-popup-slide.m_guwol', options4);
    
    let options4_2 = {};
	if ($(".main-popup-slide.m_songdo .swiper-slide").length == 1 ) {
		options4_2 = {
			speed:800,
			autoplay: false,
			autoplayDisableOnInteraction: false,
			loop: false,
			loopAdditionalSlides: 1,
			centeredSlides : true,
			observer: true,
			observeParents: true,
			pagination: {
				el: '.swiper-pagination',
				type: 'bullets',
			},
		}
	} else {
		options4_2 = {
			speed:800,
			autoplay: {
				delay: 5000,
				disableOnInteraction: false,
			},
			autoplayDisableOnInteraction: false,
			loop: true,
			loopAdditionalSlides: 1,
			centeredSlides : true,
			observer: true,
			observeParents: true,
			pagination: {
				el: '.swiper-pagination',
				type: 'bullets',
			},
		}
	}
	var main_m_PopUp_2 = new Swiper('.main-m-popup-slide.m_songdo', options4_2);
	
	let options4_3 = {};
	if ($(".main-popup-slide.common .swiper-slide").length == 1 ) {
		options4_3 = {
			speed:800,
			autoplay: false,
			autoplayDisableOnInteraction: false,
			loop: false,
			loopAdditionalSlides: 1,
			centeredSlides : true,
			observer: true,
			observeParents: true,
			pagination: {
				el: '.swiper-pagination',
				type: 'bullets',
			},
		}
	} else {
		options4_3 = {
			speed:800,
			autoplay: {
				delay: 5000,
				disableOnInteraction: false,
			},
			autoplayDisableOnInteraction: false,
			loop: true,
			loopAdditionalSlides: 1,
			centeredSlides : true,
			observer: true,
			observeParents: true,
			pagination: {
				el: '.swiper-pagination',
				type: 'bullets',
			},
		}
	}
	var main_m_PopUp_3 = new Swiper('.main-m-popup-slide.m_common', options4_3);
</script>

<script>
$(".hd_pops_reject").click(function() {
	$("#hd_pops_pc").css('display', 'none');
	setCookie("hd_pops_pc", 1, 1);
});

var checkCookie = getCookie("hd_pops_pc");

if(checkCookie == 1) {
	$("#hd_pops_pc").css('display', 'none');
}else {
	
}
	
function setCookie(name, value, expiredays){
	var today = new Date();
	today.setDate(today.getDate() + expiredays); // 현재시간에 하루를 더함 
	document.cookie = name + '=' + escape(value) + '; expires=' + today.toGMTString();
}

function getCookie(name) {
	var cookie = document.cookie;
	if (document.cookie != "") {
		var cookie_array = cookie.split("; ");
		for ( var index in cookie_array) {
			var cookie_name = cookie_array[index].split("=");
			if (cookie_name[0] == "hd_pops_pc") {
				return cookie_name[1];
			}
		}
	}
	return;
}
</script>


<script>
$(".hd_pops_reject").click(function() {
	$("#hd_pops_pc_2").css('display', 'none');
	setCookie("hd_pops_pc_2", 1, 1);
});

var checkCookie = getCookie("hd_pops_pc_2");

if(checkCookie == 1) {
	$("#hd_pops_pc_2").css('display', 'none');
}else {
	
}
	
function setCookie(name, value, expiredays){
	var today = new Date();
	today.setDate(today.getDate() + expiredays); // 현재시간에 하루를 더함 
	document.cookie = name + '=' + escape(value) + '; expires=' + today.toGMTString();
}

function getCookie(name) {
	var cookie = document.cookie;
	if (document.cookie != "") {
		var cookie_array = cookie.split("; ");
		for ( var index in cookie_array) {
			var cookie_name = cookie_array[index].split("=");
			if (cookie_name[0] == "hd_pops_pc_2") {
				return cookie_name[1];
			}
		}
	}
	return;
}
</script>

<script>
$(".hd_pops_reject").click(function() {
	$("#hd_pops_pc_2").css('display', 'none');
	setCookie("hd_pops_pc_3", 1, 1);
});

var checkCookie = getCookie("hd_pops_pc_3");

if(checkCookie == 1) {
	$("#hd_pops_pc_3").css('display', 'none');
}else {
	
}
	
function setCookie(name, value, expiredays){
	var today = new Date();
	today.setDate(today.getDate() + expiredays); // 현재시간에 하루를 더함 
	document.cookie = name + '=' + escape(value) + '; expires=' + today.toGMTString();
}

function getCookie(name) {
	var cookie = document.cookie;
	if (document.cookie != "") {
		var cookie_array = cookie.split("; ");
		for ( var index in cookie_array) {
			var cookie_name = cookie_array[index].split("=");
			if (cookie_name[0] == "hd_pops_pc_3") {
				return cookie_name[1];
			}
		}
	}
	return;
}
</script>

<script>
$(".hd_pops_reject_m.m_guwol").click(function() {
	$("#hd_pops_m.m_guwol").css('display', 'none');
	setCookie("hd_pops_m.m_guwol", 1, 1);
})

var checkCookie = getCookie("hd_pops_m.m_guwol");
	
if(checkCookie == 1) {
	$("#hd_pops_m.m_guwol").css('display', 'none');
}else {
	
}

function setCookie(name, value, expiredays){
	var today = new Date();
	today.setDate(today.getDate() + expiredays); // 현재시간에 하루를 더함 
	document.cookie = name + '=' + escape(value) + '; expires=' + today.toGMTString();
}

function getCookie(name) {
	var cookie = document.cookie;
	if (document.cookie != "") {
		var cookie_array = cookie.split("; ");
		for ( var index in cookie_array) {
			var cookie_name = cookie_array[index].split("=");
			if (cookie_name[0] == "hd_pops_m.m_guwol") {
				return cookie_name[1];
			}
		}
	}
	return;
}
</script>

<script>
$(".hd_pops_reject_m.m_songdo").click(function() {
	$("#hd_pops_m_2.m_songdo").css('display', 'none');
	setCookie("hd_pops_m_2.m_songdo", 1, 1);
})

var checkCookie = getCookie("hd_pops_m_2.m_songdo");
	
if(checkCookie == 1) {
	$("#hd_pops_m_2.m_songdo").css('display', 'none');
}else {
	
}

function setCookie(name, value, expiredays){
	var today = new Date();
	today.setDate(today.getDate() + expiredays); // 현재시간에 하루를 더함 
	document.cookie = name + '=' + escape(value) + '; expires=' + today.toGMTString();
}

function getCookie(name) {
	var cookie = document.cookie;
	if (document.cookie != "") {
		var cookie_array = cookie.split("; ");
		for ( var index in cookie_array) {
			var cookie_name = cookie_array[index].split("=");
			if (cookie_name[0] == "hd_pops_m_2.m_songdo") {
				return cookie_name[1];
			}
		}
	}
	return;
}
</script>

<script>
$(".hd_pops_reject_m.m_common").click(function() {
	$("#hd_pops_m_3.m_common").css('display', 'none');
	setCookie("hd_pops_m_3.m_common", 1, 1);
})

var checkCookie = getCookie("hd_pops_m_3.m_common");
	
if(checkCookie == 1) {
	$("#hd_pops_m_3.m_common").css('display', 'none');
}else {
	
}

function setCookie(name, value, expiredays){
	var today = new Date();
	today.setDate(today.getDate() + expiredays); // 현재시간에 하루를 더함 
	document.cookie = name + '=' + escape(value) + '; expires=' + today.toGMTString();
}

function getCookie(name) {
	var cookie = document.cookie;
	if (document.cookie != "") {
		var cookie_array = cookie.split("; ");
		for ( var index in cookie_array) {
			var cookie_name = cookie_array[index].split("=");
			if (cookie_name[0] == "hd_pops_m_3.m_common") {
				return cookie_name[1];
			}
		}
	}
	return;
}
</script>
