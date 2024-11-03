<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
?>

<script src="<?php echo G5_JS_URL; ?>/viewimageresize.js"></script>

<main id="content">
    
    <article class="sub_content01 sub6_2_content01" id="startContent">
        <div class="sub_top_cont_wrap">
            <div class="sub_top_view_bg sub6_2_top_view_bg"></div>
            <div class="sub_top_text sub_titlebox ta_c">
                <p class="txt01 reveal fade-up delay_200 c-w fz_19 ls_p5 lh_16 normal">
                    건강에 도움이 되는 <br class="m_cont_480">유익한 정보를 알려드립니다.
                </p>
                <p class="txt02 reveal fade-up delay_400 c-w fz_45 ls_p2 lh_16 notoserif medium">
                    바노바기 웰니스 유튜브
                </p>
                <p class="txt03 reveal fade-up delay_600 c-w fz_20 ls_p5 lh_16 sortsmillgoudy normal">
                    YOUTUBE
                </p>
            </div>
        </div>
    </article>
    
    <article class="sub_cont_wrap sub6_2_cont01_wrap" id="href_id">
        
        <!-- 게시물 읽기 시작 { -->
        <article id="bo_v" style="width:<?php echo $width; ?>">
            <header>
                <h2 id="bo_v_title">
                    <?php if ($category_name) { ?>
                    <span class="bo_v_cate"><?php echo $view['ca_name']; // 분류 출력 끝 ?></span> 
                    <?php } ?>
                    <span class="bo_v_tit ta_c fz_22 normal">
                    <?php
                    echo cut_str(get_text($view['wr_subject']), 70); // 글제목 출력
                    ?></span>
                </h2>
            </header>
            
            <section id="bo_v_atc">
                
                <?php
                // 파일 출력
                $v_img_count = count($view['file']);
                if($v_img_count) {
                    echo "<div id=\"bo_v_img\" class=\"container-1200\">\n";

                    foreach($view['file'] as $view_file) {
                        echo get_file_thumbnail($view_file);
                    }

                    echo "</div>\n";
                }
                 ?>

                <!-- 본문 내용 시작 { -->
                <div class="youtube_box">
                    <div class="yt-video-area">
                        <div class="play-area">
                            <iframe src="https://www.youtube.com/embed/<?php echo $view['wr_1'] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                        </div>
                    </div>
                </div>
                <div id="bo_v_con" class="container-1200 ta_c">
                    <?php echo get_view_thumbnail($view['content']); ?>
                </div>
                <?php //echo $view['rich_content']; // {이미지:0} 과 같은 코드를 사용할 경우 ?>
                <!-- } 본문 내용 끝 -->

            </section>
            
            <style>
                .sub6_2_content01_list{display:none;}
                .sub6_2_cont01_wrap_list{padding:6rem 0 0;}
                .local_sch{display:none;}
                .list_view_wrap{display:none !important;}
                .list_box_wrap{padding: 0 0 !important; margin-bottom:2rem;}
                
                @media (max-width:480px) {
                    .sub6_2_cont01_wrap_list{padding:4rem 0 0;}
                }
            </style>
            <?php
            include_once(G5_BBS_PATH.'/list.php');
            ?>

        </article>
        <!-- } 게시판 읽기 끝 -->

        <script>
        <?php if ($board['bo_download_point'] < 0) { ?>
        $(function() {
            $("a.view_file_download").click(function() {
                if(!g5_is_member) {
                    alert("다운로드 권한이 없습니다.\n회원이시라면 로그인 후 이용해 보십시오.");
                    return false;
                }

                var msg = "파일을 다운로드 하시면 포인트가 차감(<?php echo number_format($board['bo_download_point']) ?>점)됩니다.\n\n포인트는 게시물당 한번만 차감되며 다음에 다시 다운로드 하셔도 중복하여 차감하지 않습니다.\n\n그래도 다운로드 하시겠습니까?";

                if(confirm(msg)) {
                    var href = $(this).attr("href")+"&js=on";
                    $(this).attr("href", href);

                    return true;
                } else {
                    return false;
                }
            });
        });
        <?php } ?>

        function board_move(href)
        {
            window.open(href, "boardmove", "left=50, top=50, width=500, height=550, scrollbars=1");
        }
        </script>

        <script>
        $(function() {
            $("a.view_image").click(function() {
                window.open(this.href, "large_image", "location=yes,links=no,toolbar=no,top=10,left=10,width=10,height=10,resizable=yes,scrollbars=no,status=no");
                return false;
            });

            // 추천, 비추천
            $("#good_button, #nogood_button").click(function() {
                var $tx;
                if(this.id == "good_button")
                    $tx = $("#bo_v_act_good");
                else
                    $tx = $("#bo_v_act_nogood");

                excute_good(this.href, $(this), $tx);
                return false;
            });

            // 이미지 리사이즈
            $("#bo_v_atc").viewimageresize();
        });

        function excute_good(href, $el, $tx)
        {
            $.post(
                href,
                { js: "on" },
                function(data) {
                    if(data.error) {
                        alert(data.error);
                        return false;
                    }

                    if(data.count) {
                        $el.find("strong").text(number_format(String(data.count)));
                        if($tx.attr("id").search("nogood") > -1) {
                            $tx.text("이 글을 비추천하셨습니다.");
                            $tx.fadeIn(200).delay(2500).fadeOut(200);
                        } else {
                            $tx.text("이 글을 추천하셨습니다.");
                            $tx.fadeIn(200).delay(2500).fadeOut(200);
                        }
                    }
                }, "json"
            );
        }
        </script>
        <!-- } 게시글 읽기 끝 -->


    </article>
</main>