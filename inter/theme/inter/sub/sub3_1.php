<?php
include_once('./_common.php');
//if (G5_IS_MOBILE) {
//    include_once(G5_MOBILE_PATH.'/index.php');
//    return;
//}


// 웹사이트 타이틀
$g5['title'] = '고난도 재치료';

include_once(G5_PATH.'/head.php');
?>
    <style>
        .header_menu_li.header_menu_li01_3 > a::after{
            -webkit-transform-origin: left top;
            -ms-transform-origin: left top;
            transform-origin: left top;
            -webkit-transform: scale(1, 1);
            -ms-transform: scale(1, 1);
            transform: scale(1, 1)
        }
        @media (max-width:960px) { /* 헤더 화이트 */
            .header_menu_li > a{color:#fff;}
            .header_menu_li > a::after{border-bottom:1px solid #fff; }
            .logo > a > .logo_b{display:none;}
            .logo > a > .logo_w{display:block;}
            .glob-icon{background: url(<?php echo G5_THEME_URL?>/img/global-icon.png)0 0%/100% no-repeat;}
            .select-lang-btn::after{border-top-color:#fff;}
            .lang-select-list{background-color:#fff;}
            .lang-select-list li{color:#000;}
            .lang-select-list li.active{color: #000;}
            .lang-select-list > li:hover > a{color: #000;}
            .search_icon{background: url(<?php echo G5_THEME_URL?>/img/search-icon-w.png)0 0%/100% no-repeat;}
            .hamberger .line{background:#fff;}
            .hamberger .line_close{background:#fff;}
            .hamberger.open .line{background:#000;}
            .hamberger.open .line_close{ background:#000;}
            .m_call_btn{background: url(<?php echo G5_THEME_URL?>/img/call_icon_w.png)0 0%/100% no-repeat;}
            .header_number > a{color:#000;}
        }
        @media (max-width:480px) { /* 헤더 화이트 */
            .header_menu_li > a{color:#fff;}
            .header_menu_li > a::after{border-bottom:1px solid #fff; }
            .logo > a > .logo_b{display:none;}
            .logo > a > .logo_w{display:block;}
            .glob-icon{background: url(<?php echo G5_THEME_URL?>/img/global-icon-m.png)0 0%/100% no-repeat;}
            .select-lang-btn::after{border-top-color:#fff;}
            .lang-select-list{background-color:#fff;}
            .lang-select-list li{color:#000;}
            .lang-select-list li.active{color: #000;}
            .lang-select-list > li:hover > a{color: #000;}
            .search_icon{background: url(<?php echo G5_THEME_URL?>/img/search-icon-m.png)0 0%/100% no-repeat;}
            .hamberger .line{background:#fff;}
            .hamberger .line_close{background:#fff;}
            .hamberger.open .line{background:#000;}
            .hamberger.open .line_close{ background:#000;}
            .m_call_btn{background: url(<?php echo G5_THEME_URL?>/img/call_icon_w.png)0 0%/100% no-repeat;}
            .header_number > a{color:#000;}
        }
    </style>
    <main id="content">
        
        <article class="sub_top_cont sub3_1_top_cont" id="startContent">
            <div class="sub_top_cont_wrap">
                <div class="sub_top_view_bg sub3_1_top_view_bg"></div>
                <div class="sub_top_text sub_titlebox ta_c">
                    <p class="txt01 reveal fade-up delay_200 fz_34 lh_16 kopubworlddotum semibold">
                        고난도 재치료
                    </p>
                    <p class="txt02 reveal fade-up delay_400 fz_17 ls_p2 lh_16 kopubworlddotum normal">
                        부담되는 고난도 재치료 <br>
                        어려울수록 <span class="semibold">경험 많은 전문가</span>와 함께 해야합니다
                    </p>
                </div>
            </div>
        </article>
        
        <article class="sub_cont_wrap s31_c01_wrap">
            <div class="sub_cont_box">
                <div class="sub_box pc_cont_960">
                    <div class="s31_c01_box">
                        <div class="s31_c01_top">
                            <div class="text_box s31_c01_top_text reveal fade-up delay_200">
                                <p class="txt01 fz_35 lh_16 kopubworlddotum medium">
                                    한 번 마음먹기도 어려운 치과치료 <br>
                                    다시 치료해야 한다면 그 부담은 <span class="semibold">두 배가 됩니다.</span>
                                </p>
                            </div>
                        </div>
                        <div class="s31_c01_bottom">
                            <div class="text_box s31_c01_text">
                                <ul class="s31_c01_ul">
                                    <li class="reveal fade-up">
                                        <div class="s31_c01_li_txt">
                                            <i class="check_icon"></i><span class="txt01 fz_16 lh_1 kopubworlddotum medium">치료 난이도가 높은 임플란트 시술이나 신경치료의 경우</span>
                                        </div>
                                    </li>
                                    <li class="reveal fade-up delay_200">
                                        <div class="s31_c01_li_txt">
                                            <i class="check_icon"></i><span class="txt01 fz_16 lh_1 kopubworlddotum medium">기존 임플란트가 심어져 있던 잇몸뼈의 환경이 좋지 않거나,</span>
                                        </div>
                                    </li>
                                    <li class="reveal fade-up delay_400">
                                        <div class="s31_c01_li_txt">
                                            <i class="check_icon"></i><span class="txt01 fz_16 lh_1 kopubworlddotum medium">기존의 치료에서 발견할 수 없을만큼 신경근관의 형태가 복잡한 경우 등</span>
                                        </div>
                                    </li>
                                </ul>
                                <p class="txt01 reveal fade-up delay_200 fz_17 lh_16 kopubworlddotum normal">
                                    최초치료보다 치료의 난이도가 높은 경우가 많기 때문에 <br>
                                    <span class="semibold">치과 재치료는 훤씬 더 높은 전문성</span>을 요구합니다.
                                </p>
                                <p class="txt02 reveal fade-up delay_200 fz_25 lh_16 kopubworlddotum normal">
                                    치과 재치료에 대한 부담 <br>
                                    <span class="semibold">전문성과 경험을 갖춘</span> 인터서울치과가 덜어드립니다.
                                </p>
                            </div>
                            <div class="s31_c01_img ta_c reveal fade-up delay_200">
                                <img src="<?php echo G5_THEME_URL?>/sub/img/s31_c01_img01.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sub_box m_cont_960">
                    <div class="s31_c01_box">
                        <div class="s31_c01_top">
                            <div class="text_box s31_c01_top_text reveal fade-up delay_200">
                                <p class="txt01 fz_35 lh_16 kopubworlddotum medium">
                                    한 번 마음먹기도 어려운 치과치료 <br>
                                    다시 치료해야 한다면 그 부담은 <br class="m_cont_480"><span class="semibold">두 배가 됩니다.</span>
                                </p>
                            </div>
                        </div>
                        <div class="s31_c01_bottom">
                            <div class="text_box s31_c01_text">
                                <ul class="s31_c01_ul">
                                    <li class="reveal fade-up">
                                        <div class="s31_c01_li_txt">
                                            <i class="check_icon"></i><span class="txt01 fz_16 lh_14 kopubworlddotum medium">치료 난이도가 높은 임플란트 시술이나 신경치료의 경우</span>
                                        </div>
                                    </li>
                                    <li class="reveal fade-up delay_200">
                                        <div class="s31_c01_li_txt">
                                            <i class="check_icon"></i><span class="txt01 fz_16 lh_14 kopubworlddotum medium">기존 임플란트가 심어져 있던 잇몸뼈의 환경이 좋지 않거나,</span>
                                        </div>
                                    </li>
                                    <li class="reveal fade-up delay_400">
                                        <div class="s31_c01_li_txt">
                                            <i class="check_icon"></i><span class="txt01 fz_16 lh_14 kopubworlddotum medium">기존의 치료에서 발견할 수 없을만큼 신경근관의 형태가 <br>복잡한 경우 등</span>
                                        </div>
                                    </li>
                                </ul>
                                <p class="txt01 reveal fade-up delay_200 fz_17 lh_16 kopubworlddotum normal">
                                    최초치료보다 치료의 난이도가 높은 경우가 많기 때문에 <br>
                                    <span class="semibold">치과 재치료는 훤씬 더 높은 전문성</span>을 요구합니다.
                                </p>
                            </div>
                            <div class="s31_c01_img ta_c reveal fade-up delay_200">
                                <img src="<?php echo G5_THEME_URL?>/sub/img/s31_c01_img01_m.jpg" alt="">
                            </div>
                            <div class="text_box s31_c01_text">
                                <p class="txt02 reveal fade-up delay_200 fz_25 lh_16 kopubworlddotum normal">
                                    치과 재치료에 대한 부담 
                                    <span class="semibold">전문성과 경험을 갖춘</span> <br>인터서울치과가 덜어드립니다.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </article>
        
        <article class="sub_cont_wrap s31_box_item_wrap">
            <div class="sub_cont_box s31_c02_cont_box">
                <div class="sub_box">
                    <div class="s31_c02_box">
                        <div class="text_box s31_c02_text ta_c pc_cont_480">
                            <p class="txt01 reveal fade-up delay_200 fz_17 ls_p3 lh_16 sortsmillgoudy normal">
                                INTER SPECIAL 01
                            </p>
                            <p class="txt02 reveal fade-up delay_200 fz_37 lh_16 kopubworlddotum normal">
                                인터서울치과 <span class="semibold">고난도 재치료</span> <br>
                                얼마나 많은 분들이 경험하셨을까요?
                            </p>
                            <p class="txt03 reveal fade-up delay_200 fz_16 lh_16 kopubworlddotum normal">
                                인터서울치과는 2013년 개원이후 <br>
                                수 많은 임플란트 재치료 및 신경 재치료 케이스를 성공적으로 진행했습니다.
                            </p>
                        </div>
                        <div class="text_box s31_c02_text ta_c m_cont_480">
                            <p class="txt01 reveal fade-up delay_200 fz_17 ls_p3 lh_16 sortsmillgoudy normal">
                                INTER SPECIAL 01
                            </p>
                            <p class="txt02 reveal fade-up delay_200 fz_37 lh_16 kopubworlddotum normal">
                                인터서울치과 <span class="semibold">고난도 재치료</span> <br>
                                얼마나 많은 분들이 경험하셨을까요?
                            </p>
                            <p class="txt03 reveal fade-up delay_200 fz_16 lh_16 kopubworlddotum normal">
                                인터서울치과는 2013년 개원이후 수 많은 임플란트 재치료 및 <br>
                                신경 재치료 케이스를 성공적으로 진행했습니다.
                            </p>
                            <p class="s31_c02_big_text fz_150 lh_1 notoserif normal">
                                01
                            </p>
                        </div>
                    </div>
                    
                    <div class="s31_c02_bottom">
                        <div class="s31_c02_bottom_text reveal fade-up delay_200">
                            <ul class="s31_c02_bottom_ul">
                                <li>
                                    <div class="s31_c02_bottom_count">
                                        <span class="counter7 fz_60 lh_1 sortsmillgoudy normal dp_ib" data-scount="1" data-count="521" data-second="1">1</span>
                                    </div>
                                    <p class="txt01 fz_15 lh_14 kopubworlddotum medium">
                                        임플란트<br>
                                        재치료 케이스
                                    </p>
                                </li>
                                <li>
                                    <div class="s31_c02_bottom_count">
                                        <span class="counter8 fz_60 lh_1 sortsmillgoudy normal dp_ib" data-scount="1" data-count="1024" data-second="0.5">1</span>
                                    </div>
                                    <p class="txt01 fz_15 lh_14 kopubworlddotum medium">
                                        충치/신경치료<br>
                                        재치료 케이스
                                    </p>
                                </li>
                                <li>
                                    <div class="s31_c02_bottom_count">
                                        <span class="counter9 fz_60 lh_1 sortsmillgoudy normal dp_ib" data-scount="1" data-count="470" data-second="1">1</span>
                                    </div>
                                    <p class="txt01 fz_15 lh_14 kopubworlddotum medium">
                                        심미치료<br>
                                        재치료 케이스
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="sub_cont_box s31_c03_cont_box">
                <div class="sub_box pc_cont_960">
                    <div class="s31_c03_box">
                        <div class="text_box s31_c03_text">
                            <p class="txt01 reveal fade-up delay_200 fz_17 ls_p3 lh_16 sortsmillgoudy normal">
                                INTER SPECIAL 02
                            </p>
                            <p class="txt02 reveal fade-up delay_200 fz_37 lh_16 kopubworlddotum normal">
                                <span class="semibold">치과의사들의 치과의사</span>가 <br>
                                고난도 재치료를 책임집니다.
                            </p>
                            <p class="txt03 reveal fade-up delay_200 fz_20 ls_1 lh_16 kopubworlddotum normal">
                                <span class="semibold">많은 치과의사들과 그 가족들</span>이 치과 치료를 위해 <br>
                                인터서울치과를 찾습니다.
                            </p>
                            <p class="txt04 reveal fade-up delay_200 fz_16 ls_1 lh_16 kopubworlddotum normal">
                                서울대 치의학 석사과정을 수료한 이창훈 대표원장은 <br>
                                2016년부터 현재까지 치과의사들을 대상으로 꾸준히 학술강연을 진행하고 있고 <br>
                                더 나은 치과진료를 선도하기 위해 연구를 지속하고 있습니다.
                            </p>
                            <p class="s31_c03_big_text fz_150 lh_1 notoserif normal">
                                02
                            </p>
                        </div>
                        <div class="s31_c03_img reveal fade-up delay_200">
                            <img src="<?php echo G5_THEME_URL?>/sub/img/s31_c03_img01.jpg" alt="">
                            
                            <ul class="s31_c03_ul">
                                <li>
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/s31_c03_img02_1.jpg" alt="">
                                    <p class="txt01 fz_15 ls_1 lh_14 kopubworlddotum normal">
                                        오스템 임플란트 2013<br>
                                        우수임상치과 금상
                                    </p>
                                </li>
                                <li>
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/s31_c03_img02_2.jpg" alt="">
                                    <p class="txt01 fz_15 ls_1 lh_14 kopubworlddotum normal">
                                        2023 대한심미치과학회<br>
                                        학술대회 강의
                                    </p>
                                </li>
                                <li>
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/s31_c03_img02_3.jpg" alt="">
                                    <p class="txt01 fz_15 ls_1 lh_14 kopubworlddotum normal">
                                        2018 한국접착치의학회<br>
                                        추계학술대회 강의
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="sub_box m_cont_960">
                    <div class="s31_c03_box">
                        <div class="text_box s31_c03_text">
                            <p class="txt01 reveal fade-up delay_200 fz_17 ls_p3 lh_16 sortsmillgoudy normal">
                                INTER SPECIAL 02
                            </p>
                            <p class="txt02 reveal fade-up delay_200 fz_37 lh_16 kopubworlddotum normal">
                                <span class="semibold">치과의사들의 치과의사</span>가 <br>
                                고난도 재치료를 책임집니다.
                            </p>
                        </div>
                        <div class="s31_c03_img reveal fade-up delay_200">
                            <div class="swiper-container s31_c03_swiper_m">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide s31_c03_slide">
                                        <img src="<?php echo G5_THEME_URL?>/sub/img/s31_c03_img01_m.jpg" alt="">
                                        
                                        <p class="txt01 fz_17 ls_1 lh_14 kopubworlddotum normal">
                                            2018 샤인 학술대회 강의
                                        </p>
                                    </div>
                                    <div class="swiper-slide s31_c03_slide">
                                        <img src="<?php echo G5_THEME_URL?>/sub/img/s31_c03_img02_m.jpg" alt="">
                                        
                                        <p class="txt01 fz_17 ls_1 lh_14 kopubworlddotum normal">
                                            오스템 임플란트 2013 우수임상치과 금상
                                        </p>
                                    </div>
                                    <div class="swiper-slide s31_c03_slide">
                                        <img src="<?php echo G5_THEME_URL?>/sub/img/s31_c03_img03_m.jpg" alt="">
                                        
                                        <p class="txt01 fz_17 ls_1 lh_14 kopubworlddotum normal">
                                            2023 대한심미치과학회 학술대회 강의
                                        </p>
                                    </div>
                                    <div class="swiper-slide s31_c03_slide">
                                        <img src="<?php echo G5_THEME_URL?>/sub/img/s31_c03_img04_m.jpg" alt="">
                                        
                                        <p class="txt01 fz_17 ls_1 lh_14 kopubworlddotum normal">
                                            2018 한국접착치의학회 추계학술대회 강의
                                        </p>
                                    </div>
                                </div>
                                <div class="swiper-pagination s31_c03_pagination"></div>
                            </div>
                        </div>
                        <div class="text_box s31_c03_text">
                            <p class="txt03 reveal fade-up delay_200 fz_20 ls_1 lh_16 kopubworlddotum normal">
                                <span class="semibold">많은 치과의사들과 그 가족들</span>이 치과 치료를 위해 <br>
                                인터서울치과를 찾습니다.
                            </p>
                            <p class="txt04 reveal fade-up delay_200 fz_16 ls_1 lh_16 kopubworlddotum normal">
                                서울대 치의학 석사과정을 수료한 이창훈 대표원장은 <br>
                                2016년부터 현재까지 치과의사들을 대상으로 꾸준히 <br>
                                학술강연을 진행하고 있고 더 나은 치과진료를 <br>
                                선도하기 위해 연구를 지속하고 있습니다.
                            </p>
                            <p class="s31_c03_big_text fz_150 lh_1 notoserif normal">
                                02
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="sub_cont_box s31_c04_cont_box">
                <div class="sub_box pc_cont_960">
                    <div class="s31_c04_box">
                        <div class="s31_c04_img reveal fade-up delay_200">
                            <img src="<?php echo G5_THEME_URL?>/sub/img/s31_c04_img01.gif" alt="">
                        </div>
                        <div class="text_box s31_c04_text">
                            <p class="txt01 reveal fade-up delay_200 fz_17 ls_p3 lh_16 sortsmillgoudy normal">
                                INTER SPECIAL 03
                            </p>
                            <p class="txt02 reveal fade-up delay_200 fz_37 lh_16 kopubworlddotum normal">
                                재치료는 <span class="semibold">정확한 원인 파악</span>이 <br>
                                가장 중요합니다.
                            </p>
                            <p class="txt03 reveal fade-up delay_200 fz_16 ls_1 lh_16 kopubworlddotum normal">
                                임플란트나 신경치료를 받은 이후 통증이나 흔들림 등 <br>
                                다시 치료를 받아야 하는 경우가 생겼을 때 근본적인 원인을 <br>
                                해소하지 못하면 지속적으로 같은 문제가 발생하게 됩니다.
                            </p>
                            <p class="txt04 reveal fade-up delay_200 fz_18 ls_1 lh_16 kopubworlddotum normal">
                                인터서울치과는 <span class="semibold">3D 구강 스캐너 장비</span>를 통해 한번, <br>
                                <span class="semibold">경험과 노하우를 갖춘 의료진</span>의 밀도 높은 상담으로 또 한번, <br>
                                섬세하고 <span class="semibold">집요하게 원인을 파악</span>하여 근본적인 치아문제를 개선합니다.
                            </p>
                            <p class="s31_c04_big_text fz_150 lh_1 notoserif normal">
                                03
                            </p>
                        </div>
                    </div>
                </div>
                <div class="sub_box m_cont_960">
                    <div class="s31_c04_box">
                        <div class="text_box s31_c04_text">
                            <p class="txt01 reveal fade-up delay_200 fz_17 ls_p3 lh_16 sortsmillgoudy normal">
                                INTER SPECIAL 03
                            </p>
                            <p class="txt02 reveal fade-up delay_200 fz_37 lh_16 kopubworlddotum normal">
                                재치료는 <span class="semibold">정확한 원인 파악</span>이 <br class="m_cont_480">가장 중요합니다.
                            </p>
                        </div>
                        <div class="s31_c04_img reveal fade-up delay_200">
                            <img src="<?php echo G5_THEME_URL?>/sub/img/s31_c04_img01.gif" alt="">
                        </div>
                        <div class="text_box s31_c04_text">
                            <p class="txt03 reveal fade-up delay_200 fz_16 ls_1 lh_16 kopubworlddotum normal">
                                임플란트나 신경치료를 받은 이후 통증이나 흔들림 등 <br>
                                다시 치료를 받아야 하는 경우가 생겼을 때 근본적인 원인을 <br>
                                해소하지 못하면 지속적으로 같은 문제가 발생하게 됩니다.
                            </p>
                            <p class="txt04 reveal fade-up delay_200 fz_18 ls_1 lh_16 kopubworlddotum normal">
                                인터서울치과는 <span class="semibold">3D 구강 스캐너 장비</span>를 통해 한번, <br>
                                <span class="semibold">경험과 노하우를 갖춘 의료진</span>의 밀도 높은 상담으로 <br>
                                또 한번, 섬세하고 <span class="semibold">집요하게 원인을 파악</span>하여 <br>
                                근본적인 치아문제를 개선합니다.
                            </p>
                            <p class="s31_c04_big_text fz_150 lh_1 notoserif normal">
                                03
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </article>
        
        <article class="sub_cont_wrap s31_c05_wrap">
            <div class="s31_c05_bg"></div>
            <div class="s31_c05_bg2"></div>
            <div class="sub_cont_box">
                <div class="sub_box">
                    <div class="s31_c05_box">
                        <div class="text_box s31_c05_text ta_c">
                            <p class="txt01 reveal fade-up delay_200 fz_17 ls_p3 lh_16 sortsmillgoudy normal">
                                Before & After
                            </p>
                            <p class="txt02 reveal fade-up delay_200 fz_32 lh_16 kopubworlddotum normal">
                                다시 마음먹기 어려운 고난도 재치료 <br>
                                치료가 어려울수록 경험 많은 전문가와 함께 해야합니다.
                            </p>
                        </div>
                    </div>
                    <div class="s31_c05_bna_wrap">
                        <ul class="s31_c05_bna_ul">
                            <li class="s31_c05_bna_li01">
                                <p class="txt01 reveal fade-up delay_200 fz_22 lh_16 kopubworlddotum medium">
                                    <span class="fz_16 ls_p5">01</span> 20대 남성 ㅣ 임플란트 재치료
                                </p>
                                <div class="s31_c05_bna_box reveal fade-up delay_200">
                                    <div class="s31_c05_bna">
                                        <img src="<?php echo G5_THEME_URL?>/sub/img/s31_c05_bna01_b.jpg" alt="">
                                        <div class="bna_date_txt01">
                                            <p class="txt01 c-w fz_14 lh_16 kopubworlddotum normal">
                                                2023.01.02
                                            </p>
                                        </div>
                                    </div>
                                    <div class="s31_c05_bna">
                                        <img src="<?php echo G5_THEME_URL?>/sub/img/s31_c05_bna01_a.jpg" alt="">
                                        <div class="bna_date_txt02">
                                            <p class="txt01 c-w fz_14 lh_16 kopubworlddotum normal">
                                                2023.04.05
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="s31_c05_bna_li02">
                                <p class="txt01 reveal fade-up delay_200 fz_22 lh_16 kopubworlddotum medium">
                                    <span class="fz_16 ls_p5">02</span> 30대 여성 ㅣ 앞니 임플란트 재치료
                                </p>
                                <div class="s31_c05_bna_box reveal fade-up delay_200">
                                    <div class="s31_c05_bna">
                                        <img src="<?php echo G5_THEME_URL?>/sub/img/s31_c05_bna02_b.jpg" alt="">
                                        <div class="bna_date_txt01">
                                            <p class="txt01 c-w fz_14 lh_16 kopubworlddotum normal">
                                                2020.11.06
                                            </p>
                                        </div>
                                    </div>
                                    <div class="s31_c05_bna">
                                        <img src="<?php echo G5_THEME_URL?>/sub/img/s31_c05_bna02_a.jpg" alt="">
                                        <div class="bna_date_txt02">
                                            <p class="txt01 c-w fz_14 lh_16 kopubworlddotum normal">
                                                2021.02.01
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <p class="txt01 reveal fade-up delay_200 c-w fz_22 lh_16 kopubworlddotum medium">
                                    <span class="fz_16 ls_p5">03</span> 50대 남성 ㅣ 앞니 충치 신경 재치료
                                </p>
                                <div class="s31_c05_bna_box reveal fade-up delay_200">
                                    <div class="s31_c05_bna">
                                        <img src="<?php echo G5_THEME_URL?>/sub/img/s31_c05_bna03_b.jpg" alt="">
                                        <div class="bna_date_txt01">
                                            <p class="txt01 c-w fz_14 lh_16 kopubworlddotum normal">
                                                2020.12.07
                                            </p>
                                        </div>
                                    </div>
                                    <div class="s31_c05_bna">
                                        <img src="<?php echo G5_THEME_URL?>/sub/img/s31_c05_bna03_a.jpg" alt="">
                                        <div class="bna_date_txt02">
                                            <p class="txt01 c-w fz_14 lh_16 kopubworlddotum normal">
                                                2021.01.15
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <p class="txt01 reveal fade-up delay_200 c-w fz_22 lh_16 kopubworlddotum medium">
                                    <span class="fz_16 ls_p5">04</span> 30대 여성 ㅣ 충치로 부러진 앞니 재치료
                                </p>
                                <div class="s31_c05_bna_box reveal fade-up delay_200">
                                    <div class="s31_c05_bna">
                                        <img src="<?php echo G5_THEME_URL?>/sub/img/s31_c05_bna04_b.jpg" alt="">
                                        <div class="bna_date_txt01">
                                            <p class="txt01 c-w fz_14 lh_16 kopubworlddotum normal">
                                                2021.01.06
                                            </p>
                                        </div>
                                    </div>
                                    <div class="s31_c05_bna">
                                        <img src="<?php echo G5_THEME_URL?>/sub/img/s31_c05_bna04_a.jpg" alt="">
                                        <div class="bna_date_txt02">
                                            <p class="txt01 c-w fz_14 lh_16 kopubworlddotum normal">
                                                2021.02.04
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <p class="txt01 reveal fade-up delay_200 c-w fz_22 lh_16 kopubworlddotum medium">
                                    <span class="fz_16 ls_p5">05</span> 30대 남성 ㅣ 앞니 라미네이트 재치료
                                </p>
                                <div class="s31_c05_bna_box reveal fade-up delay_200">
                                    <div class="s31_c05_bna">
                                        <img src="<?php echo G5_THEME_URL?>/sub/img/s31_c05_bna05_b.jpg" alt="">
                                        <div class="bna_date_txt01">
                                            <p class="txt01 c-w fz_14 lh_16 kopubworlddotum normal">
                                                2019.12.10
                                            </p>
                                        </div>
                                    </div>
                                    <div class="s31_c05_bna">
                                        <img src="<?php echo G5_THEME_URL?>/sub/img/s31_c05_bna05_a.jpg" alt="">
                                        <div class="bna_date_txt02">
                                            <p class="txt01 c-w fz_14 lh_16 kopubworlddotum normal">
                                                2020.03.04
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <p class="txt01 reveal fade-up delay_200 c-w fz_22 lh_16 kopubworlddotum medium">
                                    <span class="fz_16 ls_p5">06</span> 30대 여성 ㅣ 변색 레진 재치료
                                </p>
                                <div class="s31_c05_bna_box reveal fade-up delay_200">
                                    <div class="s31_c05_bna">
                                        <img src="<?php echo G5_THEME_URL?>/sub/img/s31_c05_bna06_b.jpg" alt="">
                                        <div class="bna_date_txt01">
                                            <p class="txt01 c-w fz_14 lh_16 kopubworlddotum normal">
                                                2020.12.23
                                            </p>
                                        </div>
                                    </div>
                                    <div class="s31_c05_bna">
                                        <img src="<?php echo G5_THEME_URL?>/sub/img/s31_c05_bna06_a.jpg" alt="">
                                        <div class="bna_date_txt02">
                                            <p class="txt01 c-w fz_14 lh_16 kopubworlddotum normal">
                                                2021.01.20
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="s31_c05_bottom">
                        <div class="text_box s31_c05_bottom_text reveal fade-up delay_200">
                            <i class="check_icon2"></i>
                            <p class="txt01 c-w fz_14 lh_16 kopubworlddotum normal pc_cont_480">
                                모든 치료사례 전후사진은 환자분의 동의하에 촬영되었습니다. <br>
                                모든사진은 동일 환자분의 전후모습을 촬영하였으며, 사진의 밝기조절 외에 임의 수정이 없음을 알려드립니다. <br>
                                모든 치료는 부작용의 우려가 있기때문에 의사와의 충분한 상담후에 치료가 진행됩니다.
                            </p>
                            <p class="txt01 c-w fz_14 lh_16 kopubworlddotum normal m_cont_480">
                                모든 치료사례 전후사진은 환자분의 동의하에 촬영되었습니다. <br>
                                모든사진은 동일 환자분의 전후모습을 촬영하였으며, 사진의 밝기조절 외에 <br>
                                임의 수정이 없음을 알려드립니다. 모든 치료는 부작용의 우려가 있기때문에 <br>
                                의사와의 충분한 상담후에 치료가 진행됩니다.
                            </p>
                        </div>
                    </div>
                    <div class="more_btn01 s_more_btn01 reveal fade-up">
                        <a href="<?php echo G5_BBS_URL?>/board.php?bo_table=before_after">
                            <p class="txt01 fz_16 normal">
                                <span>사례 더보기</span><span>+</span>
                            </p>
                        </a>
                    </div>
                </div>
            </div>
        </article>
        
    </main>
    <!-- //main -->
    
<?php
include_once(G5_PATH.'/tail.php');
?>