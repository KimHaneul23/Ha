<?php
include_once('./_common.php');
//if (G5_IS_MOBILE) {
//    include_once(G5_MOBILE_PATH.'/index.php');
//    return;
//}


// 웹사이트 타이틀
$g5['title'] = '수면치료';

include_once(G5_PATH.'/head.php');
?>
    <style>
        .header_menu_li.header_menu_li01_2 > a::after{
            -webkit-transform-origin: left top;
            -ms-transform-origin: left top;
            transform-origin: left top;
            -webkit-transform: scale(1, 1);
            -ms-transform: scale(1, 1);
            transform: scale(1, 1)
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
        
        <article class="sub_top_cont sub4_1_top_cont" id="startContent">
            <div class="sub_top_cont_wrap">
                <div class="sub_top_view_bg sub4_1_top_view_bg"></div>
                <div class="sub_top_text sub_titlebox ta_c">
                    <p class="txt01 reveal fade-up delay_200 fz_34 lh_16 kopubworlddotum semibold">
                        수면치료
                    </p>
                    <p class="txt02 reveal fade-up delay_400 fz_17 ls_p2 lh_16 kopubworlddotum normal">
                        더이상 치과가 두려움의 공간이 되지 않도록 <br>
                        인터서울치과가 함께합니다 <br>
                        <span class="semibold">편안하고 안전한 수면치료</span>를 경험하세요
                    </p>
                </div>
            </div>
        </article>
        
        <article class="sub_cont_wrap s41_c01_wrap">
            <div class="sub_cont_box">
                <div class="sub_box">
                    <div class="s41_c01_box">
                        <div class="title_box s41_c01_title pc_cont_960">
                            <p class="txt01 reveal fade-up delay_200 fz_25 lh_16 kopubworlddotum normal">
                                많은 분들이 치과치료에 대한 필요성을 느끼고 있지만 <br>
                                <span class="semibold span_bg">통증과 치료에 대한 공포 때문에</span> 치료를 <br>
                                미루는 경우가 있습니다.
                            </p>
                        </div>
                        <div class="title_box s41_c01_title m_cont_960">
                            <p class="txt01 reveal fade-up delay_200 fz_25 lh_16 kopubworlddotum normal">
                                많은 분들이 치과치료에 대한 필요성을 <br>
                                느끼고 있지만 <span class="semibold span_bg">통증과 치료에 대한 공포 때문에</span> <br>
                                치료를 미루는 경우가 있습니다.
                            </p>
                        </div>
                        <div class="s41_c01_img reveal fade-up delay_200">
                            <img src="<?php echo G5_THEME_URL?>/sub/img/s41_c01_img.gif" alt="">
                        </div>
                        <div class="s41_c01_text_box">
                            <div class="text_box s41_c01_text ta_c pc_cont_960">
                                <i class="check_icon3"></i>
                                <p class="txt01 reveal fade-up delay_200 fz_30 lh_16 kopubworlddotum normal">
                                    이런 경우 <span class="semibold">수면치료</span>를 추천드립니다.
                                </p>
                                <p class="txt02 reveal fade-up delay_200 fz_16 lh_16 kopubworlddotum normal">
                                    치과 수면치료(의식하 진정법)는 수면내시경과 같은 진정 약물 요법으로 <br>
                                    치과 치료시 가벼운 수면상태로 유도하여 통증 없이 편안하고 안전하게 치료를 받을 수 있습니다.
                                </p>
                                <ul class="s41_c01_ul">
                                    <li class="reveal fade-up delay_200">
                                        <p class="txt01 fz_19 lh_16 kopubworlddotum normal">
                                            임플란트 시술의 통증이 걱정되시는 분
                                        </p>
                                    </li>
                                    <li class="reveal fade-up delay_200">
                                        <p class="txt01 fz_19 lh_16 kopubworlddotum normal">
                                            턱관절의 불편함으로 장시간의 치과 치료가 부담되시는 분
                                        </p>
                                    </li>
                                    <li class="reveal fade-up delay_200">
                                        <p class="txt01 fz_19 lh_16 kopubworlddotum normal">
                                            치과 치료에 대한 공포감이 심하신 분
                                        </p>
                                    </li>
                                    <li class="reveal fade-up delay_200">
                                        <p class="txt01 fz_19 lh_16 kopubworlddotum normal">
                                            구역질이 심하거나 마취가 잘 되지 않는 분
                                        </p>
                                    </li>
                                </ul>
                            </div>
                            <div class="text_box s41_c01_text ta_c m_cont_960">
                                <i class="check_icon3"></i>
                                <p class="txt01 reveal fade-up delay_200 fz_30 lh_16 kopubworlddotum normal">
                                    이런 경우 <span class="semibold">수면치료</span>를 추천드립니다.
                                </p>
                                <p class="txt02 reveal fade-up delay_200 fz_18 lh_16 kopubworlddotum normal">
                                    치과 수면치료(의식하 진정법)는 수면내시경과 같은 <br>
                                    진정 약물 요법으로 치과 치료시 가벼운 수면상태로 유도하여 <br>
                                    통증 없이 편안하고 안전하게 치료를 받을 수 있습니다.
                                </p>
                                <ul class="s41_c01_ul">
                                    <li class="reveal fade-up delay_200">
                                        <p class="txt01 fz_19 lh_16 kopubworlddotum normal">
                                            임플란트 시술의 통증이 걱정되시는 분
                                        </p>
                                    </li>
                                    <li class="reveal fade-up delay_200">
                                        <p class="txt01 fz_19 lh_16 kopubworlddotum normal">
                                            턱관절의 불편함으로 장시간의 치과 치료가 부담되시는 분
                                        </p>
                                    </li>
                                    <li class="reveal fade-up delay_200">
                                        <p class="txt01 fz_19 lh_16 kopubworlddotum normal">
                                            치과 치료에 대한 공포감이 심하신 분
                                        </p>
                                    </li>
                                    <li class="reveal fade-up delay_200">
                                        <p class="txt01 fz_19 lh_16 kopubworlddotum normal">
                                            구역질이 심하거나 마취가 잘 되지 않는 분
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </article>
        
        <article class="sub_cont_wrap s41_box_item_wrap">
            <div class="sub_cont_box s41_c02_cont_box">
                <div class="sub_box pc_cont_960">
                    <div class="s41_c02_box">
                        <div class="s41_c02_img reveal fade-up delay_200">
                            <img src="<?php echo G5_THEME_URL?>/sub/img/s41_c02_img01.jpg" alt="">
                            
                            <div class="s41_c02_notice_img">
                                <img src="<?php echo G5_THEME_URL?>/sub/img/s41_c02_notice_img.jpg" alt="">
                            </div>
                        </div>
                        <div class="text_box s41_c02_text">
                            <p class="txt01 reveal fade-up delay_200 fz_17 ls_p3 lh_16 sortsmillgoudy normal">
                                INTER SPECIAL 01
                            </p>
                            <p class="txt02 reveal fade-up delay_200 fz_35 ls_1 lh_16 kopubworlddotum normal">
                                인터서울치과의 수면치료는 <br>
                                <span class="semibold">1천건이 넘는</span> 성공적인 <span class="semibold">수면치료 임상경험</span>을 <br>
                                기반으로 안전하게 진행됩니다.
                            </p>
                            <p class="txt03 reveal fade-up delay_200 fz_16 lh_16 kopubworlddotum normal">
                                이창훈 대표원장은 <span class="semibold">국내 수면치료 1세대이자 <br>
                                대한치과마취과학회 인정의로 10년 전부터 꾸준하게</span> <br>
                                동료 치과의사들에게 수면치료 강연을 진행할 정도로 그 전문성과 <br>
                                노하우를 인정받고 있습니다.
                            </p>
                            <p class="s41_c02_big_text fz_150 lh_1 notoserif normal">
                                01
                            </p>
                        </div>
                    </div>
                </div>
                <div class="sub_box m_cont_960">
                    <div class="s41_c02_box">
                        <div class="s41_c02_img reveal fade-up delay_200">
                            <img src="<?php echo G5_THEME_URL?>/sub/img/s41_c02_img01_m.jpg" alt="">
                            
                            <div class="s41_c02_notice_img">
                                <img src="<?php echo G5_THEME_URL?>/sub/img/s41_c02_notice_img_m.jpg" alt="">
                            </div>
                        </div>
                        <div class="text_box s41_c02_text">
                            <p class="txt01 reveal fade-up delay_200 fz_17 ls_p3 lh_16 sortsmillgoudy normal">
                                INTER SPECIAL 01
                            </p>
                            <p class="txt02 reveal fade-up delay_200 fz_35 ls_1 lh_16 kopubworlddotum normal">
                                인터서울치과의 수면치료는 <span class="semibold">1천건이 넘는</span> <br>
                                성공적인 <span class="semibold">수면치료 임상경험</span>을 기반으로 <br>
                                안전하게 진행됩니다.
                            </p>
                            <p class="txt03 reveal fade-up delay_200 fz_16 lh_16 kopubworlddotum normal">
                                이창훈 대표원장은 <span class="semibold">국내 수면치료 1세대이자 대한치과마취과학회 <br>
                                인정의로 10년 전부터 꾸준하게</span> 동료 치과의사들에게 수면치료 <br>
                                강연을 진행할 정도로 그 전문성과 노하우를 인정받고 있습니다.
                            </p>
                            <p class="s41_c02_big_text fz_150 lh_1 notoserif normal">
                                01
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="sub_cont_box s41_c03_cont_box" id="s41_c03_cont_box">
                <div class="sub_box">
                    <div class="s41_c03_box">
                        <div class="text_box s41_c03_text ta_c pc_cont_960">
                            <p class="txt01 reveal fade-up delay_200 fz_17 ls_p3 lh_16 sortsmillgoudy normal">
                                INTERVIEW
                            </p>
                            <p class="txt02 reveal fade-up delay_200 fz_35 ls_1 lh_16 kopubworlddotum normal">
                                인터서울치과의 <span class="semibold">수면치료 과정 대표원장이 직접</span> 알려드립니다.
                            </p>
                        </div>
                        <div class="text_box s41_c03_text ta_c m_cont_960">
                            <p class="txt01 reveal fade-up delay_200 fz_17 ls_p3 lh_16 sortsmillgoudy normal">
                                INTERVIEW
                            </p>
                            <p class="txt02 reveal fade-up delay_200 fz_35 ls_1 lh_16 kopubworlddotum normal">
                                인터서울치과의 <span class="semibold">수면치료 과정 <br>대표원장이 직접</span> 알려드립니다.
                            </p>
                        </div>
                        <div class="s41_c03_video_wrap">
                            <div class="s41_c03_video_box">
                                <div class="s41_c03_video" id="s41_c03_video_box">
                                    <iframe id="s41_c03_video" src="https://player.vimeo.com/video/371792837?autoplay=0&amp;loop=1&amp;color=ffffff&amp;byline=0&amp;portrait=0&amp;muted=1" width="100%" height="100%" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" title="서울스마트치과_수면치료_인터뷰full영상"></iframe>
                                    <script src="https://player.vimeo.com/api/player.js"></script>
                                </div>
                            </div>
                        </div>
                        <div class="s41_c03_big_text reveal fade-right delay_200">
                            <p class="txt01 fz_100 ls_p3 lh_14 sortsmillgoudy normal">
                                INTERVIEW
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="sub_cont_box s41_c04_cont_box">
                <div class="sub_box pc_cont_960">
                    <div class="s41_c04_box">
                        <div class="text_box s41_c04_text">
                            <p class="txt01 reveal fade-up delay_200 fz_17 ls_p3 lh_16 sortsmillgoudy normal">
                                INTER SPECIAL 02
                            </p>
                            <p class="txt02 reveal fade-up delay_200 fz_34 ls_1 lh_16 kopubworlddotum normal">
                                수면치료 <span class="semibold">안전 매뉴얼</span> 구축으로 <br>
                                안전에 안심을 더합니다.
                            </p>
                            <ul class="s41_c04_ul">
                                <li class="reveal fade-up delay_200">
                                    <div class="s41_c04_li_txt">
                                        <i class="check_icon"></i><span class="txt01 fz_16 ls_p1 lh_1 kopubworlddotum normal">시술 전 충분한 상담을 통한 시술여부 판단 및 계획 수립</span>
                                    </div>
                                </li>
                                <li class="reveal fade-up delay_200">
                                    <div class="s41_c04_li_txt">
                                        <i class="check_icon"></i><span class="txt01 fz_16 ls_p1 lh_1 kopubworlddotum normal">감시장비를 통한 실시간 호흡 / 맥박 체크</span>
                                    </div>
                                </li>
                                <li class="reveal fade-up delay_200">
                                    <div class="s41_c04_li_txt">
                                        <i class="check_icon"></i><span class="txt01 fz_16 ls_p1 lh_1 kopubworlddotum normal">응급 상황에 대처가 가능한 의료인력 상시 대기</span>
                                    </div>
                                </li>
                                <li class="reveal fade-up delay_200">
                                    <div class="s41_c04_li_txt">
                                        <i class="check_icon"></i><span class="txt01 fz_16 ls_p1 lh_1 kopubworlddotum normal">시술 이후 마취 상태로 부터의 회복 체크</span>
                                    </div>
                                </li>
                            </ul>
                            <p class="txt03 reveal fade-up delay_200 fz_15 lh_16 kopubworlddotum normal">
                                이창훈 대표원장은 <span class="semibold">미국심장학회 AHA의 전문심혈관소생술 트레이닝을 거쳐 <br>
                                자격을 부여받은 전문가</span>로 수면치료시 발생할 수 있는 다양한 상황에서 <br>
                                능숙하게 대처가 가능합니다.
                            </p>
                            <p class="s41_c02_big_text fz_150 lh_1 notoserif normal">
                                02
                            </p>
                        </div>
                        <div class="s41_c04_img reveal fade-up delay_200">
                            <img src="<?php echo G5_THEME_URL?>/sub/img/s41_c04_img01.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="sub_box m_cont_960">
                    <div class="s41_c04_box">
                        <div class="text_box s41_c04_text">
                            <p class="txt01 reveal fade-up delay_200 fz_17 ls_p3 lh_16 sortsmillgoudy normal">
                                INTER SPECIAL 02
                            </p>
                            <p class="txt02 reveal fade-up delay_200 fz_34 ls_1 lh_16 kopubworlddotum normal">
                                수면치료 <span class="semibold">안전 매뉴얼</span> 구축으로 <br>
                                안전에 안심을 더합니다.
                            </p>
                            <p class="s41_c02_big_text fz_150 lh_1 notoserif normal">
                                02
                            </p>
                        </div>
                        <div class="s41_c04_img reveal fade-up delay_200">
                            <img src="<?php echo G5_THEME_URL?>/sub/img/s41_c04_img01_m.png" alt="">
                        </div>
                        <div class="text_box s41_c04_text">
                            <ul class="s41_c04_ul">
                                <li class="reveal fade-up delay_200">
                                    <div class="s41_c04_li_txt">
                                        <i class="check_icon"></i><span class="txt01 fz_16 ls_p1 lh_1 kopubworlddotum normal">시술 전 충분한 상담을 통한 시술여부 판단 및 계획 수립</span>
                                    </div>
                                </li>
                                <li class="reveal fade-up delay_200">
                                    <div class="s41_c04_li_txt">
                                        <i class="check_icon"></i><span class="txt01 fz_16 ls_p1 lh_1 kopubworlddotum normal">감시장비를 통한 실시간 호흡 / 맥박 체크</span>
                                    </div>
                                </li>
                                <li class="reveal fade-up delay_200">
                                    <div class="s41_c04_li_txt">
                                        <i class="check_icon"></i><span class="txt01 fz_16 ls_p1 lh_1 kopubworlddotum normal">응급 상황에 대처가 가능한 의료인력 상시 대기</span>
                                    </div>
                                </li>
                                <li class="reveal fade-up delay_200">
                                    <div class="s41_c04_li_txt">
                                        <i class="check_icon"></i><span class="txt01 fz_16 ls_p1 lh_1 kopubworlddotum normal">시술 이후 마취 상태로 부터의 회복 체크</span>
                                    </div>
                                </li>
                            </ul>
                            <p class="txt03 reveal fade-up delay_200 fz_15 lh_16 kopubworlddotum normal">
                                이창훈 대표원장은 <span class="semibold">미국심장학회 AHA의 전문심혈관소생술 <br>
                                트레이닝을 거쳐 자격을 부여받은 전문가</span>로 수면치료시 <br>
                                발생할 수 있는 다양한 상황에서 능숙하게 대처가 가능합니다.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="sub_cont_box s41_c05_cont_box">
                <div class="sub_box">
                    <div class="s41_c05_box">
                        <div class="text_box s41_c05_text ta_c">
                            <p class="txt01 reveal fade-up delay_200 fz_17 ls_p3 lh_16 sortsmillgoudy normal">
                                CHECK POINT
                            </p>
                            <p class="txt02 reveal fade-up delay_200 fz_34 lh_16 kopubworlddotum normal">
                                수면치료 시술 전 <span class="semibold">주의사항</span>
                            </p>
                            <ul class="s41_c05_ul">
                                <li class="reveal fade-up delay_200">
                                    <p class="txt01 fz_19 lh_16 kopubworlddotum normal">
                                        1. 수면치료 전 식사는 가볍게 하세요
                                    </p>
                                </li>
                                <li class="reveal fade-up delay_200">
                                    <p class="txt01 fz_19 lh_16 kopubworlddotum normal">
                                        2. 치료 후 24시간 동안은 운전이나, 기계를 다루는 등 <br class="m_cont_960">집중이 필요한 일은 되도록이면 피해주세요
                                    </p>
                                </li>
                                <li class="reveal fade-up delay_200">
                                    <p class="txt01 fz_19 lh_16 kopubworlddotum normal">
                                        3. 치료 시 보호자와 함께 내원해주세요
                                    </p>
                                </li>
                                <li class="reveal fade-up delay_200">
                                    <p class="txt01 fz_19 lh_16 kopubworlddotum normal">
                                        4. 24시간 정도는 음주를 삼가해주세요
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </article>
        
        <article class="sub_cont_wrap s41_c06_wrap">
            <div class="sub_cont_box">
                <div class="sub_box">
                    <div class="s41_c06_box">
                        <div class="text_box s41_c06_text ta_c">
                            <p class="txt01 reveal fade-up delay_200 fz_17 ls_p3 lh_16 sortsmillgoudy normal">
                                Q & A
                            </p>
                            <p class="txt02 reveal fade-up delay_200 fz_34 lh_16 kopubworlddotum normal">
                                <span class="semibold">수면치료에 대한 궁금증</span> <br class="m_cont_960">인터서울치과가 풀어드립니다.
                            </p>
                        </div>
                    </div>
                    <div class="s41_c06_section_wrap reveal fade-up delay_200">
                        <div id="accordion_wrap" class="s41_c06_accordion_wrap">
                            <!-- Q - 01 -->
                            <div class="s41_c06_qna_wrap">
                                <div class="s41_c06_que s41_c06_que01 on" id="s41_c06_que01">
                                    <a class="s41_c06_que_a" href="javascript:void(0);">
                                        <p class="fz_19 ls_p1 lh_16 kopubworlddotum normal">
                                            Q. 정말 자고 일어나면 치료가 다 끝나 있나요?
                                        </p>
                                        
                                        <div class="s41_c06_btn">
                                            <div class="s41_c06_plus">
                                                <div class="line line01"></div>
                                                <div class="line line02"></div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="s41_c06_anw s41_c06_anw01 on">
                                    <div class="s41_c06_anw_box">
                                        <div class="s41_c06_anw_cont s41_c06_anw_cont01">
                                            <p class="txt01 fz_16 lh_16 kopubworlddotum normal">
                                                ‘수면 치료’라고 하면 환자가 잠을 자는 상태로 치과치료를 받는다고 생각하게 되지만, <br class="pc_cont_960">
                                                실제로 잠이 드는 경우와 잠이 들지 않는 경우가 다 있을 수 있습니다. <br class="pc_cont_960">
                                                특히 환자 협조와 치료 과정의 안정성을 고려하여 잠이 들지 않는 상태를 유지해야 하는 경우도 많습니다. <br class="pc_cont_960">
                                                잠이 들지 않는 경우도 치료가 끝났을 때 치료 과정을 기억하지 못하는 경우가 많기 때문에 수면치료라는 인식을 <br class="pc_cont_960">
                                                하는 경우가 대부분입니다.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Q - 02 -->
                            <div class="s41_c06_qna_wrap">
                                <div class="s41_c06_que s41_c06_que02" id="s41_c06_que02">
                                    <a class="s41_c06_que_a" href="javascript:void(0);">
                                        <p class="fz_19 lh_16 kopubworlddotum normal">
                                            Q. 수면치료, 위험하지 않나요?
                                        </p>
                                        
                                        <div class="s41_c06_btn">
                                            <div class="s41_c06_plus">
                                                <div class="line line01"></div>
                                                <div class="line line02"></div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="s41_c06_anw s41_c06_anw02">
                                    <div class="s41_c06_anw_box">
                                        <div class="s41_c06_anw_cont s41_c06_anw_cont01">
                                            <p class="txt01 fz_16 lh_16 kopubworlddotum normal">
                                                정맥로를 통한 치과수면치료로 인한 사망 등 심각한 사고 사례는 국내에 보고된 적이 없습니다. <br class="pc_cont_960">
                                                치료의 특성상 구강 내에 물이나 침, 혈액 등이 고이는 경우가 많기 때문에 우발적인 흡입 사고로 인한 기도 폐쇄 상황에 <br class="pc_cont_960">
                                                대응할 수 있는 약물과 농도를 적용하고 있습니다.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Q - 03 -->
                            <div class="s41_c06_qna_wrap">
                                <div class="s41_c06_que s41_c06_que03" id="s41_c06_que03">
                                    <a class="s41_c06_que_a" href="javascript:void(0);">
                                        <p class="fz_19 lh_16 kopubworlddotum normal">
                                            Q. 수면치료에 사용되는 약물은 안전한가요?
                                        </p>
                                        
                                        <div class="s41_c06_btn">
                                            <div class="s41_c06_plus">
                                                <div class="line line01"></div>
                                                <div class="line line02"></div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="s41_c06_anw s41_c06_anw03">
                                    <div class="s41_c06_anw_box">
                                        <div class="s41_c06_anw_cont s41_c06_anw_cont01">
                                            <p class="txt01 fz_16 lh_16 kopubworlddotum normal">
                                                수면치료에 사용되는 미다졸람은 매우 짧은 약효시간을 보이기 때문에 1분 이내 즉시 효과가 나타나고, <br class="pc_cont_960">
                                                또 30-40분의 작용시간을 가지기 때문에 치과영역에서 오래전부터 활발히 사용되어 왔습니다. <br class="pc_cont_960">
                                                담당 의사와 대화를 하면서 치료를 할 수 있는 정도로 의식을 유지할 수 있는 약제이기 때문에, 전신마취제를 사용했을 때처럼 <br class="pc_cont_960">
                                                호흡 유지 장치를 이용해야는 부담이 없습니다. 또 혹시나 있을 수 있는 필요 이상의 깊은 진정에 대응할 수 있는 길항제로 <br class="pc_cont_960">
                                                플루마제닐이 있는데, 이 약을 투여하면 미다졸람의 효과를 즉시 되돌릴 수 있어서 더욱 안전합니다.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Q - 04 -->
                            <div class="s41_c06_qna_wrap">
                                <div class="s41_c06_que s41_c06_que04" id="s41_c06_que04">
                                    <a class="s41_c06_que_a" href="javascript:void(0);">
                                        <p class="fz_19 lh_16 kopubworlddotum normal">
                                            Q. 수면치료? 전신마취를 하는건가요?
                                        </p>
                                        
                                        <div class="s41_c06_btn">
                                            <div class="s41_c06_plus">
                                                <div class="line line01"></div>
                                                <div class="line line02"></div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="s41_c06_anw s41_c06_anw04">
                                    <div class="s41_c06_anw_box">
                                        <div class="s41_c06_anw_cont s41_c06_anw_cont01">
                                            <p class="txt01 fz_16 lh_16 kopubworlddotum normal">
                                                아닙니다. 보통 수술 시 진행하게 되는 전신마취와 수면치료 시의 마취는 다릅니다. <br class="pc_cont_960">
                                                전신마취는 자가호흡이 어려워 호흡기의 도움을 받아야 하지만 수면치료 시의 마취는 말소리에 반응을 할 수 있을 정도의 <br class="pc_cont_960">
                                                안정적인 가수면 상태를 유지하는 정도이기 때문에 훨씬 부담이 적은 형태라고 생각하시면 될 것 같습니다.
                                            </p>
                                        </div>
                                    </div>
                                </div>
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
<script>
    $(function() {
        var vid_main_cont3 = document.getElementById('s41_c03_video_box');
        var playerToPause = new Vimeo.Player($(vid_main_cont3).find('iframe')[0]);
        playerToPause.pause();
    }); 
</script>