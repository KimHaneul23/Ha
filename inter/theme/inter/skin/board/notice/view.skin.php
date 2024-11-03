<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// 웹사이트 타이틀
$g5['title'] = '공지사항';

add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
?>
<style>
    #bo_gall .gall_now .gall_text_href a{
        color:#383838;
    }
    
    @media (max-width:480px) {

    }
</style>
<script src="<?php echo G5_JS_URL; ?>/viewimageresize.js"></script>


<main id="content">
    
    <article class="sub_top_cont sub6_1_top_cont" id="startContent">
        <div class="sub_top_cont_wrap">
            <div class="sub_top_view_bg sub6_1_top_view_bg"></div>
            <div class="sub_top_text sub_titlebox ta_c">
                <p class="txt01 reveal fade-up delay_200 fz_17 lh_16 sortsmillgoudy normal">
                    NOTICE
                </p>
                <p class="txt02 reveal fade-up delay_200 fz_30 lh_16 kopubworlddotum semibold">
                    공지사항
                </p>
                <p class="txt03 reveal fade-up delay_400 fz_17 ls_p2 lh_16 kopubworlddotum normal">
                    인터서울치과의 새로운 소식을 만나보세요.
                </p>
            </div>
        </div>
    </article>
    
    <article id="href_id" class="sub_cont_wrap s61_c01_wrap">
        
            <!-- 게시물 읽기 시작 { -->
            <table cellspacing="0" cellpadding="0" class="top_line bbsWithd">
                <tr>
                    <td class="bo_v_title_wrap">
                        <h1 id="bo_v_title" class="ta_c">
                            <?php
                            if ($category_name) echo '<span class="my_button_r">['.$view['ca_name'].']</span> '; // 분류 출력 끝
                            echo cut_str(get_text($view['wr_subject']), 70); // 글제목 출력
                            ?>
                        </h1>
                    </td>
                </tr>
            </table>

            <!-- 게시물 상단 버튼 시작 { -->
            <!-- <div id="bo_v_top">
                <?php
                ob_start();
                ?>
                <?php if ($prev_href || $next_href) { ?>
                <ul class="bo_v_nb">
                    <?php if ($prev_href) { ?><li><a href="<?php echo $prev_href ?>#href_id" class="btn_b01">이전글</a></li><?php } ?>
                    <?php if ($next_href) { ?><li><a href="<?php echo $next_href ?>#href_id" class="btn_b01">다음글</a></li><?php } ?>
                </ul>
                <?php } ?>

                <ul class="bo_v_com">
                    <?php if ($update_href) { ?><li style="display:none;"><a href="<?php echo $update_href ?>#href_id" class="btn_b01">수정</a></li><?php } ?>
                    <?php if ($delete_href) { ?><li style="display:none;"><a href="<?php echo $delete_href ?>#href_id" class="btn_b01" onclick="del(this.href); return false;">삭제</a></li><?php } ?>
                    <li><a href="<?php echo $list_href ?>#href_id" class="btn_b01">목록</a></li>
                    <?php if ($write_href) { ?><li style="display:none;"><a href="<?php echo $write_href ?>#href_id" class="btn_b02">글쓰기</a></li><?php } ?>
                </ul>
                <?php
                $link_buttons = ob_get_contents();
                ob_end_flush();
                ?>
            </div> -->
            <!-- } 게시물 상단 버튼 끝 -->

            <section id="bo_v_atc">
                <h2 id="bo_v_atc_title">본문</h2>

                <?php
                // 파일 출력
                $v_img_count = count($view['file']);
                if($v_img_count) {
                    echo "<div id=\"bo_v_img\">\n";
                    for ($i=1; $i<=count($view['file']); $i++) {
                        if ($view['file'][$i]['view']) {
                            //echo $view['file'][$i]['view'];
                            echo get_view_thumbnail($view['file'][$i]['view']);
                        }
                    }
                    echo "</div>\n";
                }
                ?>

                <!-- 본문 내용 시작 { -->
                <div id="bo_v_con"><?php echo get_view_thumbnail($view['content']); ?></div>
                <!-- } 본문 내용 끝 -->

            </section>

            <!-- 링크 버튼 시작 { -->
            <div id="bo_v_bot">
                <?php echo $link_buttons ?>
            </div>
            <!-- } 링크 버튼 끝 -->
            
            <style>
                #bo_sch{display:none;}
                
                @media (max-width:480px) {
                    
                }
            </style>
            
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
<!-- //main -->
