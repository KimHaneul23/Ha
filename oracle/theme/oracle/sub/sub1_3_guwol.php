<?php
include_once('./_common.php');
//if (G5_IS_MOBILE) {
//    include_once(G5_MOBILE_PATH.'/index.php');
//    return;
//}

// 웹사이트 타이틀
$g5['title'] = '구월점';

include_once(G5_PATH.'/head.php');
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
    <main id="content">
        <article class="sub_content01 sub1_3_jijeom_content01 sub1_3_guwol_cont01_wrap" id="startContent">
            <div class="sub1_3_guwol_cont01 flex_row fw jc_center center">
                <div class="sub1_3_guwol_img ta_r">
                    <div class="sub1_3_guwol_arrow pc_cont">
                        <a href="<?php echo G5_THEME_URL?>/sub/sub1_3.php">
                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub1_3_guwol_arrow.png" alt="">
                        </a>
                    </div>
                    
                    <div class="swiper-container sub1_3_jijeom_swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide sub2_1_1_ba_slide">
                                <img src="<?php echo G5_THEME_URL?>/sub/img/sub1_3_guwol_img01.jpg" alt="">
                            </div>
                            <div class="swiper-slide sub2_1_1_ba_slide">
                                <img src="<?php echo G5_THEME_URL?>/sub/img/sub1_3_guwol_img02.jpg" alt="">
                            </div>
                            <div class="swiper-slide sub2_1_1_ba_slide">
                                <img src="<?php echo G5_THEME_URL?>/sub/img/sub1_3_guwol_img03.jpg" alt="">
                            </div>
                            <div class="swiper-slide sub2_1_1_ba_slide">
                                <img src="<?php echo G5_THEME_URL?>/sub/img/sub1_3_guwol_img04.jpg" alt="">
                            </div>
                        </div>
                        <div class="swiper-pagination sub1_3_jijeom_pagination"></div>
                    </div>
                </div>
                <div class="sub1_3_guwol_text_wrap ta_l">
                    <div class="sub1_3_guwol_text ta_c">
                        <div class="sub1_3_guwol_text01">
                            <p class="c-b fz_60 lh_1 ls_2 sortsmillgoudy normal">Guwol</p>
                        </div>
                        <div class="sub1_3_guwol_text02">
                            <p class="c-b fz_20 lh_16 ls_2 normal">인천 오라클피부과</p>
                        </div>
                        <div class="sub1_3_guwol_text03 m_40">
                            <p class="c-b fz_40 lh_16 ls_2 nanummyeongjo normal">구월점 안내</p>
                        </div>
                        <div class="sub1_3_guwol_text04 m_40">
                            <p class="pc_cont_376 c-b fz_17 lh_16 ls_2 normal">
                                구월동에서 10년 넘게 사랑받고 있는 구월동오라클에서는 <br>
                                남녀 피부과 전문의에게 선택 진료 받으실 수 있습니다.
                            </p>
                            <p class="m_cont_376 c-b fz_17 lh_16 ls_2 normal">
                                구월동에서 10년 넘게 사랑받고 있는 <br>
                                구월동오라클에서는 남녀 피부과 전문의에게 <br>
                                선택 진료 받으실 수 있습니다.
                            </p>
                        </div>
                        <div class="sub1_3_guwol_btn">
                            <a href="sub1_2.php?bo_table=doctor&sca=구월점#href_id">
                                <p class="fz_16 lh_1 ls_2 normal flex_row jc_center center">의료진 소개 바로가기</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </article>
        
        <article class="sub_cont02 sub1_3_guwol_cont02" id="sub1_3_guwol_cont02">
            <div class="sub1_3_jijeom_info_wrap flex_row fw jc_center center">
                <div class="sub1_3_jijeom_info_box">
                    <div class="sub1_3_jijeom_info_text">
                        <div class="sub1_3_jijeom_info_text01 m_50">
                            <p class="title_txet fz_18 ls_2 lh_16 normal">병원위치</p>
                            <p class="info_text fz_17 ls_4 lh_16 normal">인천광역시 남동구 예술로 126 링크126 (이토타워 옆, 예술회관 맞은편) 건물 6층</p>
                        </div>
                        <div class="sub1_3_jijeom_info_text02 m_50 p_r">
                            <div class="sub1_3_jijeom_info_num flex_row jc_fs center">
                                <p class="title_txet fz_18 ls_2 lh_16 normal">구월·송도점 통합콜센터</p>
                                <p class="info_text fz_25 lh_16 ls_p2 sortsmillgoudy normal">
                                    <a href="tel:032-434-5311">
                                        032.434.5311
                                    </a>
                                </p>
                            </div>
                            <div class="sub1_3_jijeom_info_sns flex_row jc_center center">
                                <div class="kakao_icon_btn fz_18 ls_2 lh_16 normal"><a href="https://pf.kakao.com/_VBKhl" target="_blank"><div class="kakao_icon"><span class="blind">카카오톡</span></div></a></div>
                                <div class="blog_icon_btn fz_18 ls_2 lh_16 normal"><a href="https://blog.naver.com/asia_beauty" target="_blank"><div class="blog_icon"><span class="blind">블로그</span></div></a></div>
                                <div class="insta_icon_btn fz_18 ls_2 lh_16 normal"><a href="https://www.instagram.com/oracle_gw/" target="_blank"><div class="insta_icon"><span class="blind">블로그</span></div></a></div>
                            </div>
                        </div>
                        <div class="sub1_3_jijeom_info_text03 m_40">
                            <p class="title_txet fz_18 ls_2 lh_16 normal">진료시간</p>
                            <div class="info_text fz_17 ls_p10 lh_16 normal">
                                <p>월&ensp;&emsp;&ensp;금 : AM 10:00 ~ PM 21:00 (야간)</p>
                                <p>화&ensp;수&ensp;목 : AM 10:00 ~ PM 19:00</p>
                                <p>토&ensp;요&ensp;일 : AM 09:30 ~ PM 16:00</p>
                                <p>일&ensp;요&ensp;일 : PM 12:30 ~ PM 16:30</p>
                                <p>점심 시간 : PM 13:00 ~ PM 14:00</p>
                                <p>※ 공휴일은 휴무입니다.</p>
                                <p>※ 일요일은 2, 4주차 휴무입니다.</p>
                            </div>
                        </div>
                        <div class="sub1_3_jijeom_info_text04">
                            <p class="info_text fz_17 ls_2 lh_1 light">링크 126건물 지하 주차장 이용 가능합니다</p>
                        </div>
                    </div>
                </div>
                <div class="sub1_3_jijeom_map">
                    <div id="map"></div>
                    <style>
                        /* 지점별 맵 연동 */
                        #map > div{z-index: 0!important;}
                        .map_marker{  border-radius:40px; -webkit-border-radius:40px; -moz-border-radius:40px; -ms-border-radius:40px; -o-border-radius:40px; padding:5px;}
                        .map_active.map_marker{border:1px solid transparent; background-color:#0475f4;}
                        .map_normal.map_marker{border:1px solid #0475f4; background-color:#fff;}
                        .map_marker:after{ content:''; position: absolute; width:7px; height:7px; bottom:-3px; left:18px; transform:rotate(45deg) ; -webkit-transform:rotate(45deg) ; -moz-transform:rotate(45deg) ; -ms-transform:rotate(45deg) ; -o-transform:rotate(45deg) ; }
                        .map_normal.map_marker:after{background: #fff; border-right:1px solid #0475f4; border-bottom:1px solid #0475f4}
                        .map_active.map_marker:after{background: #0475f4;}
                        
                        .map_link_icon,
                        .map_link_txt{vertical-align: middle; display: inline-block;}
                        .map_link_txt{font-weight: 500; margin:0 5px}
                        .map_normal .map_link_txt{font-size:13px; }
                        .map_normal .map_link_txt:hover{color: #0475f4;}
                        .map_active .map_link_txt{font-size:15px; color: #fff;}
                        .map_active .map_link_txt:hover{color: #fff;}
                        
                        @media (max-width:480px) {
                            
                            #map{width:100% !important; height:300px !important;}
                            #map > div > div{
                                transform: translateX(-10%) translateY(-20%) translateZ(0);
                                -webkit-transform: translateX(-10%) translateY(-20%) translateZ(0);
                                -moz-transform: translateX(-10%) translateY(-20%) translateZ(0);
                                -ms-transform: translateX(-10%) translateY(-20%) translateZ(0);
                                -o-transform: translateX(-10%) translateY(-20%) translateZ(0);
                            }
                            .map_active.map_marker{width:220px;}
                            
                        }
                    </style>
                    <script type="text/javascript" src="https://openapi.map.naver.com/openapi/v3/maps.js?ncpClientId=xtemu5c8bp"></script>
                    <script>
                        var mapWidth;
                        if (window.matchMedia("(min-width: 1025px)").matches) {
                          mapWidth = 900
                        /* 뷰포트 너비가 400 픽셀 이상 */
                        } else {
                          mapWidth = window.innerWidth - 40
                          /* 뷰포트 너비가 400 픽셀 미만 */
                        }
                        
                        document.addEventListener("DOMContentLoaded", function(){
                          var HOME_PATH = window.HOME_PATH || '.';
                          var map = new naver.maps.Map('map', {
                            bounds: naver.maps.LatLngBounds.bounds(new naver.maps.LatLng(37.447731, 126.696132),
                              new naver.maps.LatLng(37.440431, 126.712125)),
                            zoom: 18,
                            scrollWheel: false,
                            size:{
                              width:mapWidth,
                              height:460
                            }
                          });
                          var greenMarker = new naver.maps.Marker({
                            position: new naver.maps.LatLng(37.445127, 126.700816),
                            map: map,
                            title: '인천 오라클피부과 구월점',
                            icon: {
                              content: [
                                '<div class="map_active map_marker">',
                                '<div class="map_group">',
                                '<a href="https://map.naver.com/v5/entry/place/21575952?c=14104278.1793683,4501335.0570787,13,0,0,0,dh&placePath=%2Fhome%3Fentry=plt" target="_blank" class="map_link"> ',
                                '<span class="map_link_icon"><img src="<?php echo G5_THEME_URL?>/sub/img/marker-white.png"/></span>',
                                '<span class="map_link_txt">인천 오라클피부과 구월점</span>',
                                '</a>',
                                '</div>',
                                '</div>'
                              ].join(''),
                              size: new naver.maps.Size(38, 58),
                              anchor: new naver.maps.Point(19, 58),
                            },
                            draggable: false
                          });
                        });
                    </script>
                </div>
            </div>
        </article>
        
    </main>
    <!-- //main -->
    
<?php
include_once(G5_PATH.'/tail.php');
?>