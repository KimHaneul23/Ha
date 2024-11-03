<?php
include_once('./_common.php');
//if (G5_IS_MOBILE) {
//    include_once(G5_MOBILE_PATH.'/index.php');
//    return;
//}

// 웹사이트 타이틀
$g5['title'] = '송도점';

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
        <article class="sub_content01 sub1_3_jijeom_content01 sub1_3_songdo_cont01_wrap" id="startContent">
            <div class="sub1_3_songdo_cont01 flex_row fw jc_center center">
                <div class="sub1_3_songdo_img ta_r">
                    <div class="sub1_3_guwol_arrow pc_cont">
                        <a href="<?php echo G5_THEME_URL?>/sub/sub1_3.php">
                            <img src="<?php echo G5_THEME_URL?>/sub/img/sub1_3_guwol_arrow.png" alt="">
                        </a>
                    </div>
                    
                    <div class="swiper-container sub1_3_jijeom_swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide sub2_1_1_ba_slide">
                                <img src="<?php echo G5_THEME_URL?>/sub/img/sub1_3_songdo_img01.jpg" alt="">
                            </div>
                            <div class="swiper-slide sub2_1_1_ba_slide">
                                <img src="<?php echo G5_THEME_URL?>/sub/img/sub1_3_songdo_img02.jpg" alt="">
                            </div>
                            <div class="swiper-slide sub2_1_1_ba_slide">
                                <img src="<?php echo G5_THEME_URL?>/sub/img/sub1_3_songdo_img03.jpg" alt="">
                            </div>
                            <div class="swiper-slide sub2_1_1_ba_slide">
                                <img src="<?php echo G5_THEME_URL?>/sub/img/sub1_3_songdo_img04.jpg" alt="">
                            </div>
                        </div>
                        <div class="swiper-pagination sub1_3_jijeom_pagination"></div>
                    </div>
                </div>
                <div class="sub1_3_songdo_text_wrap ta_l">
                    <div class="sub1_3_songdo_text ta_c">
                        <div class="sub1_3_songdo_text01">
                            <p class="c-b fz_60 lh_1 ls_2 sortsmillgoudy normal">Songdo</p>
                        </div>
                        <div class="sub1_3_songdo_text02">
                            <p class="c-b fz_20 lh_16 ls_2 normal">인천 오라클피부과</p>
                        </div>
                        <div class="sub1_3_songdo_text03 m_40">
                            <p class="c-b fz_40 lh_16 ls_2 nanummyeongjo normal">송도점 안내</p>
                        </div>
                        <div class="sub1_3_guwol_text04 m_40">
                            <p class="pc_cont_376 c-b fz_17 lh_16 ls_2 normal">
                                구월동오라클과의 협력 진료를 통해 송도오라클에서도 <br>
                                수준 높은 퀄리티의 피부과 전문의 진료를 받아보실 수 있습니다.
                            </p>
                            <p class="m_cont_376 c-b fz_17 lh_16 ls_2 normal">
                                구월동오라클과의 협력 진료를 통해 <br>
                                송도오라클에서도 수준 높은 퀄리티의 <br>
                                피부과 전문의 진료를 받아보실 수 있습니다.
                            </p>
                        </div>
                        <div class="sub1_3_songdo_btn">
                            <a href="sub1_2.php?bo_table=doctor&sca=송도점#href_id">
                                <p class="fz_16 lh_1 ls_2 normal flex_row jc_center center">의료진 소개 바로가기</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </article>
        
        <article class="sub_cont02 sub1_3_songdo_cont02" id="sub1_3_songdo_cont02">
            <div class="sub1_3_jijeom_info_wrap flex_row fw jc_center center">
                <div class="sub1_3_jijeom_info_box">
                    <div class="sub1_3_jijeom_info_text">
                        <div class="sub1_3_jijeom_info_text01 m_50">
                            <p class="title_txet fz_18 ls_2 lh_16 normal">병원위치</p>
                            <p class="info_text fz_17 ls_4 lh_16 normal">인천 연수구 하모니로178번길 6 송도중앙타워 7층</p>
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
                                <div class="kakao_icon_btn fz_18 ls_2 lh_16 normal"><a href="https://pf.kakao.com/_xbTwxnxj" target="_blank"><div class="kakao_icon"><span class="blind">카카오톡</span></div></a></div>
                                <div class="blog_icon_btn fz_18 ls_2 lh_16 normal"><a href="https://blog.naver.com/songdo_dermatology" target="_blank"><div class="blog_icon"><span class="blind">블로그</span></div></a></div>
                                <div class="insta_icon_btn fz_18 ls_2 lh_16 normal"><a href="https://www.instagram.com/oracle_sd/" target="_blank"><div class="insta_icon"><span class="blind">블로그</span></div></a></div>
                            </div>
                        </div>
                        <div class="sub1_3_jijeom_info_text03 m_40">
                            <p class="title_txet fz_18 ls_2 lh_16 normal">진료시간</p>
                            <div class="info_text fz_17 ls_p10 lh_16 normal">
                                <p>월&ensp;&emsp;&ensp;화 : AM 10:00 ~ PM 20:00 (야간)</p>
                                <p>수&ensp;&emsp;&ensp;목 : AM 10:00 ~ PM 19:00</p>
                                <p>금&ensp;요&ensp;일 : AM 10:00 ~ PM 21:00 (야간)</p>
                                <p>토&ensp;요&ensp;일 : PM 09:30 ~ PM 15:00</p>
                                <p>점심 시간 : PM 13:00 ~ PM 14:00</p>
                                <p>※ 일요일, 공휴일은 휴무입니다.</p>
                            </div>
                        </div>
                        <div class="sub1_3_jijeom_info_text04">
                            <p class="info_text fz_17 ls_2 lh_1 light">송도중앙타워 지하주차장 이용 가능합니다.</p>
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
                        
                        @media (max-width:434px) {
                            
                            #map{width:100% !important; height:300px !important;}
                            #map > div > div{
                                transform: translateX(-5%) translateY(-20%) translateZ(0);
                                -webkit-transform: translateX(-5%) translateY(-20%) translateZ(0);
                                -moz-transform: translateX(-5%) translateY(-20%) translateZ(0);
                                -ms-transform: translateX(-5%) translateY(-20%) translateZ(0);
                                -o-transform: translateX(-5%) translateY(-20%) translateZ(0);
                            }
                            .map_active.map_marker{width:220px;}
                            
                        }
                    </style>
                    <script type="text/javascript" src="https://openapi.map.naver.com/openapi/v3/maps.js?ncpClientId=xtemu5c8bp"></script>
                    <script>
                        var mapWidth;
                        if (window.matchMedia("(min-width: 900px)").matches) {
                          mapWidth = 900
                        /* 뷰포트 너비가 400 픽셀 이상 */
                        } else {
                          mapWidth = window.innerWidth - 40
                          /* 뷰포트 너비가 400 픽셀 미만 */
                        }
                        
                        document.addEventListener("DOMContentLoaded", function(){
                          var HOME_PATH = window.HOME_PATH || '.';
                          var map = new naver.maps.Map('map', {
                            bounds: naver.maps.LatLngBounds.bounds(new naver.maps.LatLng(37.384759, 126.638894),
                              new naver.maps.LatLng(37.379268, 126.646265)),
                            zoom: 18,
                            scrollWheel: false,
                            size:{
                              width:mapWidth,
                              height:460
                            }
                          });
                          var greenMarker = new naver.maps.Marker({
                            position: new naver.maps.LatLng(37.382257, 126.641366),
                            map: map,
                            title: '인천 오라클피부과 송도점',
                            icon: {
                              content: [
                                '<div class="map_active map_marker">',
                                '<div class="map_group">',
                                '<a href="https://map.naver.com/v5/entry/place/1994869691?c=14097654.3245756,4492531.3085824,13,0,0,0,dh" target="_blank" class="map_link"> ',
                                '<span class="map_link_icon"><img src="<?php echo G5_THEME_URL?>/sub/img/marker-white.png"/></span>',
                                '<span class="map_link_txt">인천 오라클피부과 송도점</span>',
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