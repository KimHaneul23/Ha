<?php
include_once('./_common.php');
//if (G5_IS_MOBILE) {
//    include_once(G5_MOBILE_PATH.'/index.php');
//    return;
//}


// 웹사이트 타이틀
$g5['title'] = '진료안내 및 오시는 길';

include_once(G5_PATH.'/head.php');
?>
    <style>
        @media (max-width:960px) {
            .logo > a > .logo_b{display:block;}
            .logo > a > .logo_w{display:none;}
            
            .hamberger .line{background:#000;}
            
            .glob-icon{background: url(<?php echo G5_THEME_URL?>/img/global-icon.png)0 100%/100% no-repeat;}
            
            .select-lang-btn::after{border-top-color:#000;}
            
            .lang-select-list{background-color:#000;}
            .lang-select-list li{color:#fff;}
            .lang-select-list li.active{color:#fff;}
            .lang-select-list > li:hover > a{color: #fff;}
            
            .search_icon{background: url(<?php echo G5_THEME_URL?>/img/search-icon-w.png)0 100%/100% no-repeat;}
            
            .m_call_btn{width:1.8rem; height:1.8rem; background: url(<?php echo G5_THEME_URL?>/img/call_icon.png)0 0%/100% no-repeat;}
        }
        @media (max-width:480px) {
            .glob-icon{background: url(<?php echo G5_THEME_URL?>/img/global-icon-m.png)0 100%/100% no-repeat;}
            .search_icon{background: url(<?php echo G5_THEME_URL?>/img/search-icon-m.png)0 100%/100% no-repeat;}
        }
    </style>
    <main id="content">
        
        <article class="sub_top_cont sub1_4_top_cont" id="startContent">
            <div class="sub_top_cont_wrap">
                <div class="sub_top_view_bg sub1_4_top_view_bg"></div>
                <div class="sub_top_text sub_titlebox pc_cont_480">
                    <p class="txt01 reveal fade-up delay_200 fz_18 lh_16 marcellus normal">
                        LOCATION / HOURS
                    </p>
                    <p class="txt02 reveal fade-up delay_400 fz_37 lh_16 kopubworlddotum semibold">
                        진료안내 및 오시는 길
                    </p>
                    <p class="txt03 reveal fade-up delay_600 fz_16 ls_p2 lh_16 kopubworlddotum normal">
                        안녕하세요, 치아건강과 일상 사이 <br>
                        인터서울치과입니다
                    </p>
                </div>
                <div class="sub_top_text sub_titlebox m_cont_480">
                    <p class="txt01 reveal fade-up delay_200 fz_18 lh_16 kopubworlddotum normal">
                        진료안내 및 오시는 길
                    </p>
                    <p class="txt02 reveal fade-up delay_400 fz_37 lh_16 marcellus normal">
                        HOURS / LOCATION
                    </p>
                    <p class="txt03 reveal fade-up delay_600 fz_16 ls_p2 lh_16 kopubworlddotum normal">
                        안녕하세요, 치아건강과 일상 사이 <br>
                        인터서울치과입니다
                    </p>
                </div>
            </div>
        </article>
        
        <article class="sub_cont_wrap s14_c01_wrap">
            <div class="sub_cont_box">
                <div class="sub_box flex_row jc_center center">
                    <div class="s14_c01_text_box">
                        <div class="title_box">
                            <p class="txt01 reveal fade-up fz_37 lh_16 kopubworlddotum semibold">
                                상담/예약
                            </p>
                        </div>
                        <div class="s14_c01_box">
                            <div class="s14_c01_number reveal fade-up">
                                <a href="tel:02-714-0328">
                                    <p class="txt01 fz_55 ls_p2 lh_16 kopubworlddotum semibold">
                                        02.714.0328
                                    </p>
                                </a>
                            </div>
                            <div class="s14_c01_btn">
                                <div class="s14_c01_btn_kakao reveal fade-up">
                                    <a href="https://pf.kakao.com/_xdrJAxb" target="_blank">
                                        <i class="s14_icon_kakao"></i><p class="txt01 fz_15 lh_1 kopubworlddotum normal">카카오로 상담하기</p>
                                    </a>
                                </div>
                                <div class="s14_c01_btn_naver reveal fade-up">
                                    <a href="https://booking.naver.com/booking/13/bizes/117139" target="_blank">
                                        <i class="s14_icon_naver"></i><p class="txt01 fz_15 lh_1 kopubworlddotum normal">네이버로 예약하기</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </article>
        
        <article class="sub_cont_wrap s14_c02_wrap">
            <div class="sub_cont_box">
                <div class="sub_box flex_row jc_center center">
                    <div class="s14_c02_text_box">
                        <div class="title_box">
                            <p class="txt01 reveal fade-up fz_37 lh_16 kopubworlddotum semibold">
                                진료시간
                            </p>
                        </div>
                        <div class="s14_c02_box">
                            <div class="s14_c02_time_box pc_cont_1024">
                                <p class="txt01 fz_25 kopubworlddotum">
                                    <span class="time_day semibold">월 요 일</span><span class="time_line normal">AM 10:00 - PM 07:00</span>
                                </p>
                                <p class="txt01 fz_25 kopubworlddotum">
                                    <span class="time_day semibold">화 요 일</span><span class="time_line normal">AM 10:00 - PM 09:00</span><span class="fz_15 time_night light">야간진료</span>
                                </p>
                                <p class="txt01 fz_25 kopubworlddotum">
                                    <span class="time_day semibold">수·목·금</span><span class="time_line normal">AM 10:00 - PM 07:00</span>
                                </p>
                                <p class="txt01 fz_25 kopubworlddotum">
                                    <span class="time_day semibold">토 요 일</span><span class="time_line normal">AM 09:00 - PM 12:00</span>
                                </p>
                            </div>
                            <div class="s14_c02_time_box pc_cont_1024">
                                <p class="txt01 fz_25 kopubworlddotum">
                                    <span class="time_day semibold">점심시간</span><span class="time_line normal">PM 01:00 - PM 02:00</span>
                                </p>
                                <p class="txt02 fz_22 kopubworlddotum">
                                    <span class="time_day normal"></span><span class="time_line normal">토요일은 점심시간 없이 진료합니다.</span>
                                    <span class="time_day normal"></span><span class="time_line normal">일요일/공휴일은 휴진입니다.</span>
                                </p>
                            </div>
                            <div class="s14_c02_time_box m_cont_1024">
                                <p class="txt01 fz_25 kopubworlddotum">
                                    <span class="time_day semibold">월&nbsp;&nbsp;&nbsp;요&nbsp;&nbsp;&nbsp;일</span><span class="time_line normal">AM 10:00 - PM 07:00</span>
                                </p>
                                <p class="txt01 fz_25 kopubworlddotum">
                                    <span class="time_day semibold">화&nbsp;&nbsp;&nbsp;요&nbsp;&nbsp;&nbsp;일</span><span class="time_line normal">AM 10:00 - PM 09:00</span><span class="fz_15 time_night light">야간진료</span>
                                </p>
                                <p class="txt01 fz_25 kopubworlddotum">
                                    <span class="time_day semibold">수 · 목 · 금</span><span class="time_line normal">AM 10:00 - PM 07:00</span>
                                </p>
                                <p class="txt01 fz_25 kopubworlddotum">
                                    <span class="time_day semibold">토&nbsp;&nbsp;&nbsp;요&nbsp;&nbsp;&nbsp;일</span><span class="time_line normal">AM 09:00 - PM 12:00</span>
                                </p>
                                <p class="txt01 fz_25 kopubworlddotum">
                                    <span class="time_day semibold">점 심 시 간</span><span class="time_line normal">PM 01:00 - PM 02:00</span>
                                </p>
                                <p class="txt02 fz_22 kopubworlddotum">
                                    <span class="time_day normal"></span><span class="time_line normal">토요일은 점심시간 없이 진료합니다.</span>
                                    <span class="time_day normal"></span><span class="time_line normal">일요일/공휴일은 휴진입니다.</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </article>
        
        <article class="sub_cont_wrap s14_c03_wrap">
            <div class="sub_cont_box">
                <div class="sub_box flex_row jc_center center">
                    <div class="s14_c03_text_box">
                        <div class="title_box">
                            <p class="txt01 reveal fade-up fz_37 lh_16 kopubworlddotum semibold">
                                오시는 길
                            </p>
                        </div>
                        <div class="s14_c03_box">
                            <div class="s14_c03_map reveal fade-up">
                                <div id="map">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3164.0817048074096!2d126.96532137636068!3d37.52957122624596!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357ca26ba4d328ff%3A0x4e787ea8d658161a!2zSW50ZXJTRU9VTCBEZW50aXN0cnkgKGZtciBTZW91bCBTbWFydCBEZW50aXN0cnkpIOyduO2EsOyEnOyauOy5mOqzvA!5e0!3m2!1sko!2skr!4v1699424104318!5m2!1sko!2skr" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    <!--<style>
                                        /* 지점별 맵 연동 */
                                        #map{width:100% !important; height:100% !important;}
                                        #map > div{z-index: 0!important;}
                                        #map > div > div{
                                            transform: translateX(0%) translateY(0%) translateZ(0);
                                            -webkit-transform: translateX(0%) translateY(0%) translateZ(0);
                                            -moz-transform: translateX(0%) translateY(0%) translateZ(0);
                                            -ms-transform: translateX(0%) translateY(0%) translateZ(0);
                                            -o-transform: translateX(0%) translateY(0%) translateZ(0);
                                        }
                                        .map_marker{  border-radius:40px; -webkit-border-radius:40px; -moz-border-radius:40px; -ms-border-radius:40px; -o-border-radius:40px; padding:5px 10px 5px 5px;}
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

                                        @media (max-width:960px) {
                                            #map{height:350px !important;}
                                            #map > div > div{
                                                transform: translateX(10%) translateY(0%) translateZ(0);
                                                -webkit-transform: translateX(10%) translateY(0%) translateZ(0);
                                                -moz-transform: translateX(10%) translateY(0%) translateZ(0);
                                                -ms-transform: translateX(10%) translateY(0%) translateZ(0);
                                                -o-transform: translateX(10%) translateY(0%) translateZ(0);
                                            }
                                        }
                                        @media (max-width:480px) {
                                            .main_cont07_map_wrap{height:100%;}
                                            #map{height:300px !important;}
                                            #map > div > div{
                                                transform: translateX(20%) translateY(-25%) translateZ(0);
                                                -webkit-transform: translateX(20%) translateY(-25%) translateZ(0);
                                                -moz-transform: translateX(20%) translateY(-25%) translateZ(0);
                                                -ms-transform: translateX(20%) translateY(-25%) translateZ(0);
                                                -o-transform: translateX(20%) translateY(-25%) translateZ(0);
                                            }
                                        }
                                        @media (max-width:434px) {
                                            #map{height:250px !important;}
                                            #map > div > div{
                                                transform: translateX(22%) translateY(-40%) translateZ(0);
                                                -webkit-transform: translateX(22%) translateY(-40%) translateZ(0);
                                                -moz-transform: translateX(22%) translateY(-40%) translateZ(0);
                                                -ms-transform: translateX(22%) translateY(-40%) translateZ(0);
                                                -o-transform: translateX(22%) translateY(-40%) translateZ(0);
                                            }
                                        }
                                    </style>
                                    <script type="text/javascript" src="https://openapi.map.naver.com/openapi/v3/maps.js?ncpClientId=jyqrhlapwd"></script>
                                    <script>
                                        var mapWidth;
                                        if (window.matchMedia("(min-width: 1025px)").matches) {
                                            mapWidth = 1280
                                            mapHeight = 560
                                            /* 뷰포트 너비가 400 픽셀 이상 */
                                        } else {
                                            mapWidth = window.innerWidth - 40
                                            mapHeight = 500
                                            /* 뷰포트 너비가 400 픽셀 미만 */
                                        }

                                        document.addEventListener("DOMContentLoaded", function(){
                                          var HOME_PATH = window.HOME_PATH || '.';
                                          var map = new naver.maps.Map('map', {
                                            bounds: naver.maps.LatLngBounds.bounds(new naver.maps.LatLng(37.531114, 126.966670),
                                              new naver.maps.LatLng(37.528022, 126.973315)),
                                            zoom: 18,
                                            scrollWheel: false,
                                            size:{
                                                width:mapWidth,
                                                height:mapHeight,
                                            }, 
                                          });
                                          var greenMarker = new naver.maps.Marker({
                                            position: new naver.maps.LatLng(37.529498, 126.967408),
                                            map: map,
                                            title: '인터서울치과의원',
                                            icon: {
                                              content: [
                                                '<div class="map_active map_marker">',
                                                '<div class="map_group">',
                                                '<a href="https://naver.me/FpXx8cRq" target="_blank" class="map_link"> ',
                                                '<span class="map_link_icon"><img src="<?php echo G5_THEME_URL?>/img/marker-white.png"/></span>',
                                                '<span class="map_link_txt">인터서울치과의원</span>',
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
                                    </script>-->
                                </div>
                            </div>
                            <div class="s14_c03_address_box">
                                <p class="txt01 reveal fade-up fz_25 lh_16 kopubworlddotum semibold">
                                    서울특별시 용산구 한강로 2가 422 <br class="m_cont_480">래미안용산더센트럴 B동 2층 223호
                                </p>
                                <p class="txt02 reveal fade-up fz_22 lh_1 kopubworlddotum normal">
                                    <i class="s14_line_4">4</i><span>신용산역 3번 출구 연결</span>
                                </p>
                                <p class="txt03 reveal fade-up fz_22 lh_1 kopubworlddotum normal">
                                    <i class="s14_line_1">1</i><span>용산역 1번 출구 건너편</span>
                                </p>
                            </div>
                            <div class="s14_c01_btn">
                                <div class="s14_c01_btn_kakao reveal fade-up">
                                    <a href="https://kko.to/hz2YGafRL6" target="_blank">
                                        <i class="s14_icon_kakao_map"></i><p class="txt01 fz_15 lh_1 kopubworlddotum normal">카카오로 길찾기</p>
                                    </a>
                                </div>
                                <div class="s14_c01_btn_naver reveal fade-up">
                                    <a href="https://map.naver.com/p/directions/-/14133950.0778512,4513171.0341615,%EC%9D%B8%ED%84%B0%EC%84%9C%EC%9A%B8%EC%B9%98%EA%B3%BC%EC%9D%98%EC%9B%90,32358576,PLACE_POI/-/transit?c=15.00,0,0,0,dh" target="_blank">
                                        <i class="s14_icon_naver"></i><p class="txt01 fz_15 lh_1 kopubworlddotum normal">네이버로 길찾기</p>
                                    </a>
                                </div>
                            </div>
                            <div class="s14_c03_parking_box">
                                <p class="txt01 reveal fade-up fz_25 lh_16 kopubworlddotum semibold">
                                    주차안내
                                </p>
                                <p class="txt02 reveal fade-up fz_25 lh_16 kopubworlddotum normal">
                                    지하에 주차공간이 마련되어 있습니다.<br>
                                    래미안용산더센트럴 <span class="semibold">B동 지하주차장 6,7,8층</span> 이용
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </article>
        
    </main>
    <!-- //main -->
    
<?php
include_once(G5_PATH.'/tail.php');
?>