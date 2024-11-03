<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$content_skin_url.'/style.css">', 0);

$sql = " select * from `g5_content` where co_id = '$co_id' ";
$coo = sql_fetch($sql);
?>
<script>
    $(document).ready(function(){
        var window_width = $(window).width();
        if (window_width <= 480) {
            $('.main-header').addClass('color_change');
            $('.ht-inner').addClass('sub_header');
        } else {
            $('.main-header').addClass('color_change');
            $('.ht-inner').addClass('sub_header');
        }
    });
</script>

<article id="ctt" class="ctt_<?php echo $co_id; ?>">
    <header>
        <h1><?php echo $g5['title']; ?></h1>
    </header>

    <div id="ctt_con" class="111">
        <?php echo $coo['co_content']; ?>
    </div>

</article>