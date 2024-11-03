<?php
include_once('./_common.php');
//if (G5_IS_MOBILE) {
//    include_once(G5_MOBILE_PATH.'/index.php');
//    return;
//}


// 웹사이트 타이틀
$g5['title'] = '통합검색';

include_once(G5_PATH.'/head.php');
?>
    
    <main id="content">
        
        <article class="sub_top_cont sub7_1_top_cont" id="startContent">
            <div class="sub_top_cont_wrap">
                <div class="sub_top_view_bg sub7_1_top_view_bg"></div>
                <div class="sub_top_text sub_titlebox ta_c">
                    <p class="txt01 reveal fade-up delay_200 fz_17 lh_16 sortsmillgoudy normal">
                        SEARCH
                    </p>
                    <p class="txt02 reveal fade-up delay_400 fz_40 ls_p3 lh_16 kopubworlddotum semibold">
                        통합검색
                    </p>
                </div>
            </div>
        </article>
        
        <article class="sub_cont_wrap s21_c01_wrap">
            <div class="sub_cont_box">
                <div class="sub_box">
                    <div class="s21_c01_box">
                        <div class="s21_c01_top">
                            <div class="text_box s21_c01_text">
                                <p class="txt01 reveal fade-up delay_200 fz_17 ls_p3 lh_16 sortsmillgoudy normal">
                                    INTER SPECIAL 01
                                </p>
                                <p class="txt02 reveal fade-up delay_200 fz_17 lh_16 kopubworlddotum normal">
                                    의료진의 숙련도와 전문성이 <br>
                                    결과로 바로 이어지는 레진/ 심미치료
                                </p>
                                <p class="txt03 reveal fade-up delay_200 fz_35 lh_16 kopubworlddotum normal">
                                    인터서울치과의 이창훈 대표원장은 <br>
                                    국내외 레진/심미치료계의 Key Opinion Leader로 <br>
                                    <span class="semibold">치과의사들의 치과의사</span>로 불리고 있습니다.
                                </p>
                                <p class="txt04 reveal fade-up delay_200 fz_15 lh_16 kopubworlddotum light">
                                    한국접착치의학회 이사 ㅣ 대한심미치과학회 이사
                                </p>
                            </div>
                            <div class="s21_c01_img ta_c reveal fade-up delay_200">
                                <div class="swiper-container s21_c01_swiper">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide s21_c01_slide">
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/s21_c01_img01.jpg" alt="">
                                        </div>
                                        <div class="swiper-slide s21_c01_slide">
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/s21_c01_img02.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-pagination s21_c01_pagination"></div>
                                </div>
                            </div>
                        </div>
                        <div class="s21_c01_bottom">
                            <div class="text_box s21_c01_bottom_text reveal fade-up delay_200">
                                <i class="check_icon"></i>
                                <p class="txt01 fz_25 lh_16 kopubworlddotum medium">
                                    2016년부터는 심미치료에 대한 깊은 이해와 탁월한 전문성을 바탕으로
                                </p>
                                <p class="txt02 fz_16 lh_16 kopubworlddotum normal">
                                    치과의사들을 대상으로 하는 학술대회의 강연자, 모더레이터, 학술위원 등 <br>
                                    꾸준히 활동을 이어가며 더 완성도 높은 치료에 대해 고민하고 연구하고 있습니다.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </article>
        
        <!-- Section 1 -->
        <div class="S1">
            <div class="inner"> 
                <style>
                    .sub_topbox.s_1_1.s_1_1_seaech{ height: 64vh !important; background: url(<?php echo G5_THEME_URL ?>/sub/img/s_1_1_subtop_seaech.png) no-repeat center bottom /cover !important;}
                    .sub_1_1 .s_1_1.s_1_1_seaech .inner{margin:auto;}
                    .sub_1_1 .s_1_1.s_1_1_seaech .inner .txtbox{width:100%; text-align:center;}
                    .sub_1_1 .s_1_1.s_1_1_seaech .inner .txtbox .tit{color:#fff;}
                    .sub_1_1 .S1 { min-height: 100vh; padding:11rem 0 6rem;}
                    .search_con{width:100%; background: #ededed; border-top: 4px solid #000; padding: 5% 0 3%; display: flex; align-items: center; flex-direction: column;}
                    #searchForm1 { margin-bottom: 60px;}
                    .search_con .search_box {display: flex; }
                    .search_con .best_txt {display: inline-block;}
                    .search_con .best_txt a { font-weight: 400; color: #000; font-size: 1.063rem; }
                    .search_con .search_box .tit{display: none;}
                    .search_con .search_box input{border: none; height: 60px; font-size: 1.188rem; line-height: 1; }
                    .search_con .search_box .text { width: 400px; margin-right: 8px; padding: 0 15px}
                    .search_con .search_box .submit { width: 90px; background-color: #525252; color: #fff; }
                    .search_con .search_box .submit:focus { background: #304d44; }
                    .result_area ul{ width:100%; display: flex; flex-wrap: wrap; justify-content: flex-start; padding: 5% 3px; gap:0 3.5%;}
                    .result_area ul li{ width:31%; border:1px solid #dadada; padding:5% 0; background: #f3f3f3; text-align: center; display: inline-block; margin-bottom: 5%; transition: all 0.1s; height: 195px;} 
                    .result_area ul li:hover { border: 2px solid #0f594e;}
                    .result_area ul li a p { font-weight: 600; font-size: 1.563rem;  }
                    .result_area ul li a p:nth-of-type(2) { display: inline-block; padding-top: 1rem;}
                    .result_area ul li:hover a p:nth-of-type(2) { border-bottom: 1px solid #0f594e; }
                    .result_area ul li a p.cate { font-weight: 400; font-size: 1.125rem; color: #0f594e; }
                    .result_cnt { border-bottom: 4px solid #000; font-weight: 400; padding: 9% 0 5% 1%; font-size: 1.125rem; }
                    .result_cnt .bold { font-size: 1.375rem; }
                    .result_cnt .bw { color: #0f594e; }
                    
                    @media screen and (max-width: 1024px) {
                        .sub_1_1 .s_1_1.s_1_1_seaech .inner{padding:0;}
                    }
                    @media screen and (max-width: 960px) {
                        .result_area ul li { height: 150px;}
                        .search_con .search_box input { height: 40px;}
                    }
                    @media screen and (max-width: 640px) {
                        .sub_1_1 .S1 { min-height: 50vh; padding:8rem 0 6rem;}
                        .search_con .search_box .text { width: 300px;}
                        .search_con .search_box .submit { width: 75px;}
                        #searchForm1 { margin-bottom: 30px;}
                        .result_area ul li { width: 48%; height: 113px;}
                    }
                    @media screen and (max-width: 480px) {
                        .sub_topbox.s_1_1.s_1_1_seaech{ height: 38vh !important; background: url(<?php echo G5_THEME_URL ?>/sub/img/s_1_1_subtop_seaech_m.png) no-repeat center bottom /cover !important;}
                        .sub_1_1 .s_1_1.s_1_1_seaech .inner .txtbox{max-width:100%;}
                        .sub_1_1 .s_1_1.s_1_1_seaech .inner .txtbox .tit{margin:1rem 0 0 !important;}
                        .sub_1_1 .s_1_1_seaech .txtbox{padding:0;}
                        
                        .search_con { padding: 5% 0 4%;}
                        .search_con .search_box input { height: 36px;}
                        .search_con .search_box .text { width: 200px;}
                        .search_con .search_box .submit { width: 50px;}
                        .result_area ul li { height: 87px;}
                    }
                </style>
                
                <div class="search_con">
                    
                    <!-- 검색 영역  -->
                    <form id="searchForm1" name="searchForm1">
                        <div class="search_box">
                            <p class="tit">검색</p>
                            <input type="text" class="text" name="keyword" value="<?=$keyword?>" title="검색어" placeholder="검색어를 입력하세요." maxlength="50">
                            <input type="submit" class="submit" value="검색">
                        </div>
                    </form>
                    <div class="best_txt">
                    <?php
                    $sql="select * from main_keyword";
                    $row=sql_fetch($sql);
                    
                    $arr=explode(" ",$row['keyword']." ");
                    
                    for ($i=0;$i<count($arr);$i++){
                        if (trim($arr[$i])){
                    ?>
                        <a href="?keyword=<?=str_replace("#","",$arr[$i])?>"><?=$arr[$i]?></a>
                    <?php
                        }
                    }
                    ?>
                    </div>
                </div>
                
                <?php
                $add_sql="";
                
                if ($keyword) $add_sql .=" and CONCAT(TRIM(REPLACE(keyword, ' ', '')), '#') like '%#".$keyword."#%' ";
                
                $sql_common = " from g5_keyword where 1=1 $add_sql ";
                // 테이블의 전체 레코드수만 얻음
                $sql = " select count(*) as cnt " . $sql_common;
                $row = sql_fetch($sql);
                $total_count = $row['cnt'];
                
                $sql = "select * $sql_common order by idx asc ";
                $result = sql_query($sql);
                ?>
                
                <div class="result_cnt">
                    <span class="bold">"<?=$keyword?>"</span>  검색 결과 <span class="bw"><?=$total_count?></span> 건이 검색 되었습니다. 
                </div>
                
                <!-- 검색 결과  -->
                <div class="result_area">
                    <ul>
                    <?php for ($i = 0; $row = sql_fetch_array($result); $i++) { ?>
                        <li>
                            <a href="./<?php echo $row['mcate'] ?>.php">                
                                <p class="cate"><?php echo lcode_nm_chk($row['lcate']); ?></p>
                                <p><?php echo mcode_nm_chk($row['mcate']); ?></p>
                            </a>
                        </li>
                    <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </main>
    <!-- //main -->
    
<?php
include_once(G5_PATH.'/tail.php');
?>
