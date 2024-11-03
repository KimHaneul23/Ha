<?php
include_once('./_common.php');
//if (G5_IS_MOBILE) {
//    include_once(G5_MOBILE_PATH.'/index.php');
//    return;
//}


// 웹사이트 타이틀
$g5['title'] = '일반진료 ㅣ 예방관리';

include_once(G5_PATH.'/head.php');
?>
    <style>
        .header_menu_li.header_menu_li01_4 > a::after{
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
        
        <article class="sub_top_cont sub5_1_top_cont" id="startContent">
            <div class="sub_top_cont_wrap">
                <div class="sub_top_view_bg sub5_1_top_view_bg"></div>
                <div class="sub_top_text sub_titlebox ta_c">
                    <p class="txt01 reveal fade-up delay_200 fz_30 lh_16 kopubworlddotum semibold">
                        일반진료 ㅣ 예방관리
                    </p>
                    <p class="txt02 reveal fade-up delay_400 fz_17 ls_p2 lh_16 kopubworlddotum normal">
                        치아는 치료하는 것보다 지키는 것이 훨씬 중요합니다 <br>
                        인터서울치과는 <span class="semibold">자연치아를 보존</span>합니다
                    </p>
                </div>
            </div>
        </article>
        
        <article class="s51_fixed_menu" id="s51_fixed_menu">
            <ul class="s51_fixed_menu_ul">
                <li class="s51_fixed_menu_li01">
                    <a href="#s51_c01_href">
                        <p class="txt01 fz_18 ls_p2 lh_16 kopubworlddotum normal">
                            충치/신경치료
                        </p>
                    </a>
                </li>
                <li class="s51_fixed_menu_li02">
                    <a href="#s51_c02_href">
                        <p class="txt01 fz_18 ls_p2 lh_16 kopubworlddotum normal">
                            반점치 치료
                        </p>
                    </a>
                </li>
                <li class="s51_fixed_menu_li03">
                    <a href="#s51_c05_href">
                        <p class="txt01 fz_18 ls_p2 lh_16 kopubworlddotum normal">
                            치주치료
                        </p>
                    </a>
                </li>
                <li class="s51_fixed_menu_li04">
                    <a href="#s51_c06_href">
                        <p class="txt01 fz_18 ls_p2 lh_16 kopubworlddotum normal">
                            치아교정
                        </p>
                    </a>
                </li>
                <li class="s51_fixed_menu_li05">
                    <a href="#s51_c07_href">
                        <p class="txt01 fz_18 ls_p2 lh_16 kopubworlddotum normal">
                            예방관리
                        </p>
                    </a>
                </li>
            </ul>
        </article>
        
        <article class="sub_cont_wrap s51_c01_wrap">
            <div id="s51_c01_href"></div>
            <div class="sub_cont_box">
                <div class="sub_box">
                    <div class="s51_c01_box">
                        <div class="title_box s51_c01_title ta_c">
                            <p class="txt01 reveal fade-up delay_200 fz_16 lh_16 normal">
                                <span class="kopubworlddotum">충치/신경치료</span>&nbsp;<span class="fz_17 ls_p3 sortsmillgoudy">01</span>
                            </p>
                            <p class="txt02 reveal fade-up delay_200 fz_35 lh_16 kopubworlddotum normal">
                                건강한 치아, <br class="m_cont_434"><span class="semibold">아프지 않을 때 지켜야 합니다.</span>
                            </p>
                        </div>
                        <div class="s51_c01_item_box">
                            <div class="s51_c01_img reveal fade-up delay_200">
                                <img class="pc_cont_960" src="<?php echo G5_THEME_URL?>/sub/img/s51_c01_img01.jpg" alt="">
                                <img class="m_cont_960" src="<?php echo G5_THEME_URL?>/sub/img/s51_c01_img01_m.png" alt="">
                                
                                <div class="s51_c01_img01_2 pc_cont_960">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/s51_c01_img01_2.jpg" alt="">
                                </div>
                            </div>
                            <div class="text_box s51_c01_text pc_cont_960">
                                <p class="txt01 reveal fade-up delay_200 fz_25 lh_16 kopubworlddotum normal">
                                    인터서울치과는 <br>
                                    <span class="semibold">3차원 CT 장비</span>로 정밀하게 충치를 진단하고, <br>
                                    <span class="semibold">미세현미경으로 20배 정확하게</span> <br>
                                    신경치료를 완성합니다.
                                </p>
                                <ul class="s51_c01_ul">
                                    <li class="reveal fade-up delay_200">
                                        <div class="s51_c01_li_txt">
                                            <i class="check_icon"></i><span class="txt01 fz_16 lh_1 kopubworlddotum normal">충치치료는 치료 시기를 놓치게 되면 신경치료를 해야 하거나</span>
                                        </div>
                                    </li>
                                    <li class="reveal fade-up delay_200">
                                        <div class="s51_c01_li_txt">
                                            <i class="check_icon"></i><span class="txt01 fz_16 lh_1 kopubworlddotum normal">심한 경우 발치를 해야하는 경우가 생깁니다.</span>
                                        </div>
                                    </li>
                                </ul>
                                <p class="txt02 reveal fade-up delay_200 c-333 fz_17 lh_16 kopubworlddotum normal">
                                    <span class="semibold">정기적인 검진과 정확한 진단</span>을 통해 문제를 파악하고 <br>
                                    <span class="semibold">적절한 치료</span>를 받아야 자연치아를 더 건강하게 유지할 수 있습니다.
                                </p>
                            </div>
                            <div class="text_box s51_c01_text m_cont_960">
                                <p class="txt01 reveal fade-up delay_200 fz_25 lh_16 kopubworlddotum normal">
                                    인터서울치과는 <span class="semibold">3차원 CT 장비</span>로 <br>
                                    정밀하게 충치를 진단하고, <span class="semibold">미세현미경으로 <br>
                                    20배 정확하게</span> 신경치료를 완성합니다.
                                </p>
                                <ul class="s51_c01_ul">
                                    <li class="reveal fade-up delay_200">
                                        <div class="s51_c01_li_txt">
                                            <i class="check_icon"></i><span class="txt01 fz_16 lh_1 kopubworlddotum normal">충치치료는 치료 시기를 놓치게 되면 신경치료를 해야 하거나</span>
                                        </div>
                                    </li>
                                    <li class="reveal fade-up delay_200">
                                        <div class="s51_c01_li_txt">
                                            <i class="check_icon"></i><span class="txt01 fz_16 lh_1 kopubworlddotum normal">심한 경우 발치를 해야하는 경우가 생깁니다.</span>
                                        </div>
                                    </li>
                                </ul>
                                <p class="txt02 reveal fade-up delay_200 c-333 fz_17 lh_16 kopubworlddotum normal">
                                    <span class="semibold">정기적인 검진과 정확한 진단</span>을 통해 문제를 파악하고 <br>
                                    <span class="semibold">적절한 치료</span>를 받아야 자연치아를 더 건강하게 유지할 수 있습니다.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </article>
        
        <article class="s51_box_item_wrap">
            <article class="sub_cont_wrap s51_c02_wrap">
                <div id="s51_c02_href"></div>
                <div class="sub_cont_box">
                    <div class="sub_box">
                        <div class="s51_c02_box">
                            <div class="title_box s51_c02_title ta_c">
                                <p class="txt01 reveal fade-up delay_200 fz_16 lh_16 normal">
                                    <span class="kopubworlddotum">반점치 치료</span>&nbsp;<span class="fz_17 ls_p3 sortsmillgoudy">02</span>
                                </p>
                                <p class="txt02 reveal fade-up delay_200 fz_36 lh_16 kopubworlddotum normal">
                                    얼룩덜룩한 <span class="semibold">반점치(백색반점) 치아 치료</span> <br>
                                    치아 삭제가 고민된다면?
                                </p>
                            </div>
                            <div class="s51_c02_item_box">
                                <div class="text_box s51_c02_text ta_c">
                                    <p class="txt01 reveal fade-up delay_200 fz_25 lh_16 kopubworlddotum normal">
                                        인터서울치과에서는 <br>
                                        <span class="semibold">치아삭제 없이도 치료가 가능합니다.</span>
                                    </p>
                                </div>
                                <div class="s51_c02_img reveal fade-up delay_200">
                                    <!--<img src="<?php echo G5_THEME_URL?>/sub/img/s51_c02_img01.jpg" alt="">-->
                                    <div class="s51_c02_video_box">
                                        <iframe frameborder="0" allow="autoplay; fullscreen; picture-in-picture" height="100%" id="s51_c02_video" src="https://player.vimeo.com/video/696443718?autoplay=0&amp;loop=1&amp;color=ffffff&amp;byline=0&amp;portrait=0&amp;muted=1" style="position: absolute; top:0; left:0;" width="100%"></iframe>
                                    </div>
                                    
                                    <p class="fz_15 lh_16 kopubworlddotum normal">
                                        [실제 인터서울치과 반점치 치료영상 ]
                                    </p>
                                </div>
                                <div class="text_box s51_c02_text ta_c pc_cont_960">
                                    <p class="txt02 reveal fade-up delay_200 fz_15 lh_16 kopubworlddotum normal">
                                        치아 표면이 하얗게 얼룩덜룩해지는 경우를 반점치 치아라고 부릅니다. <br>
                                        충치에 의해 부식된 치아 내부의 작은 기포같은 공간들이 빛의 산란을 야기해서 희게 보이는 것 입니다. <br>
                                        이 같은 경우는 레진을 침투시키는 ICON 치료법으로 치아삭제 없이 완성도 높은 치료가 가능합니다.       
                                    </p>
                                </div>
                                <div class="text_box s51_c02_text ta_c m_cont_960">
                                    <p class="txt02 reveal fade-up delay_200 fz_15 lh_16 kopubworlddotum normal">
                                        충치에 의해 부식된 치아 내부의 작은 기포같은 공간들이 <br>
                                        빛의 산란을 야기해서 희게 보이는 것 입니다. <br>
                                        이 같은 경우는 레진을 침투시키는 ICON 치료법으로 <br>
                                        치아삭제 없이 완성도 높은 치료가 가능합니다.       
                                    </p>
                                </div>
                                <div class="text_box s51_c02_text s51_c02_bottom_text ta_c reveal fade-up delay_200">
                                    <i class="check_icon3"></i>
                                    <p class="txt03 c-333 fz_19 lh_16 kopubworlddotum normal pc_cont_960">
                                        하지만 인터서울치과에서는 <span class="semibold">치아삭제 없는 ICON 치료</span>로 <br>
                                        <span class="semibold">자연치아를 최대한 보존</span>하고 심미적으로도 <span class="semibold">완성도 높은 반점치 치료</span>가 가능합니다.
                                    </p>
                                    <p class="txt03 c-333 fz_19 lh_16 kopubworlddotum normal m_cont_960">
                                        하지만 인터서울치과에서는 <span class="semibold">치아삭제 없는 <br>
                                        ICON 치료</span>로 <span class="semibold">자연치아를 최대한 보존</span>하고 <br>
                                        심미적으로도 <span class="semibold">완성도 높은 반점치 치료</span>가 가능합니다.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
            
            <article class="sub_cont_wrap s51_c03_wrap">
                <div class="sub_cont_box s51_c03_cont_box">
                    <div class="sub_box pc_cont_960">
                        <div class="s51_c03_box">
                            <div class="text_box s51_c03_text">
                                <p class="txt01 reveal fade-up delay_200 fz_17 ls_p3 lh_16 sortsmillgoudy normal">
                                    INTER SPECIAL
                                </p>
                                <p class="txt02 reveal fade-up delay_200 c-333 fz_17 lh_16 kopubworlddotum normal">
                                    치아삭제 없는 ICON 치료, 어떤 치료인가요?
                                </p>
                                <p class="txt03 reveal fade-up delay_200 fz_25 lh_16 kopubworlddotum normal">
                                    치아를 삭제하지 않고 <span class="semibold span_bg">ICON 레진을 치아에 침투</span> 시켜 <br>
                                    반점치 치아를 치료하는 <span class="semibold span_bg">ICON 치료</span>
                                </p>
                                <ul class="s51_c03_ul">
                                    <li class="reveal fade-up delay_200">
                                        <div class="s51_c03_li_txt">
                                            <i class="check_icon"></i><span class="txt01 fz_16 lh_1 kopubworlddotum normal">치아삭제 없음</span>
                                        </div>
                                    </li>
                                    <li class="reveal fade-up delay_200">
                                        <div class="s51_c03_li_txt">
                                            <i class="check_icon"></i><span class="txt01 fz_16 lh_1 kopubworlddotum normal">당일 치료 가능</span>
                                        </div>
                                    </li>
                                    <li class="reveal fade-up delay_200">
                                        <div class="s51_c03_li_txt">
                                            <i class="check_icon"></i><span class="txt01 fz_16 lh_1 kopubworlddotum normal">짧은 시술시간 (약 15분)</span>
                                        </div>
                                    </li>
                                    <li class="reveal fade-up delay_200">
                                        <div class="s51_c03_li_txt">
                                            <i class="check_icon"></i><span class="txt01 fz_16 lh_1 kopubworlddotum normal">교정치료 중 시술가능</span>
                                        </div>
                                    </li>
                                    <li class="reveal fade-up delay_200">
                                        <div class="s51_c03_li_txt">
                                            <i class="check_icon"></i><span class="txt01 fz_16 lh_1 kopubworlddotum normal">변색 및 깨짐 없음</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="s51_c03_img reveal fade-up delay_200">
                                <img src="<?php echo G5_THEME_URL?>/sub/img/s51_c03_img01.png" alt="">
                                
                                <p class="s51_c10_big_txt fz_150 lh_1 sortsmillgoudy normal">
                                    ICON
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="sub_box m_cont_960">
                        <div class="s51_c03_box">
                            <div class="text_box s51_c03_text">
                                <p class="txt01 reveal fade-up delay_200 fz_17 ls_p3 lh_16 sortsmillgoudy normal">
                                    INTER SPECIAL
                                </p>
                                <p class="txt02 reveal fade-up delay_200 c-333 fz_17 lh_16 kopubworlddotum normal">
                                    치아삭제 없는 ICON 치료, 어떤 치료인가요?
                                </p>
                                <p class="txt03 reveal fade-up delay_200 fz_25 lh_16 kopubworlddotum normal">
                                    <span class="semibold span_bg">치아를 삭제하지 않고</span> <br>
                                    ICON 레진을 치아에 침투 시켜 <br>
                                    반점치 치아를 치료하는 <span class="semibold">ICON 치료</span>
                                </p>
                            </div>
                            <div class="s51_c03_img reveal fade-up delay_200">
                                <img src="<?php echo G5_THEME_URL?>/sub/img/s51_c03_img01_m.png" alt="">
                                
                                <p class="s51_c10_big_txt fz_150 lh_1 sortsmillgoudy normal">
                                    ICON
                                </p>
                            </div>
                            <div class="text_box s51_c03_text">
                                <ul class="s51_c03_ul">
                                    <li class="reveal fade-up delay_200">
                                        <div class="s51_c03_li_txt">
                                            <i class="check_icon"></i><span class="txt01 fz_16 lh_1 kopubworlddotum normal">치아삭제 없음</span>
                                        </div>
                                    </li>
                                    <li class="reveal fade-up delay_200">
                                        <div class="s51_c03_li_txt">
                                            <i class="check_icon"></i><span class="txt01 fz_16 lh_1 kopubworlddotum normal">당일 치료 가능</span>
                                        </div>
                                    </li>
                                    <li class="reveal fade-up delay_200">
                                        <div class="s51_c03_li_txt">
                                            <i class="check_icon"></i><span class="txt01 fz_16 lh_1 kopubworlddotum normal">짧은 시술시간 (약 15분)</span>
                                        </div>
                                    </li>
                                    <li class="reveal fade-up delay_200">
                                        <div class="s51_c03_li_txt">
                                            <i class="check_icon"></i><span class="txt01 fz_16 lh_1 kopubworlddotum normal">교정치료 중 시술가능</span>
                                        </div>
                                    </li>
                                    <li class="reveal fade-up delay_200">
                                        <div class="s51_c03_li_txt">
                                            <i class="check_icon"></i><span class="txt01 fz_16 lh_1 kopubworlddotum normal">변색 및 깨짐 없음</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
            
            <article class="sub_cont_wrap s51_c10_wrap">
                <div class="sub_cont_box s51_c10_cont_box">
                    <div class="sub_box">
                        <div class="s51_c10_box">
                            <div class="s51_c10_img reveal fade-up delay_200">
                                <img src="<?php echo G5_THEME_URL?>/sub/img/s51_c10_img01.gif" alt="">
                            </div>
                            <div class="text_box s51_c10_text pc_cont_960">
                                <p class="txt01 reveal fade-up delay_200 fz_25 lh_16 kopubworlddotum normal">
                                    이창훈대표원장은 <br>
                                    소수의 치과 의사들만이 시행하는 ICON(tm) 반점치 치료를 <br>
                                    약 10년전부터 시행하면서 <span class="semibold">다수의 케이스를 보유</span>하고 있으며, <br>
                                    치과의사들에게 소개하고 가르치는 <br>
                                    <span class="semibold">한국의 ICON반점치 치료법을 대표</span>하는 술자입니다.
                                </p>
                                <ul class="s51_c10_ul">
                                    <li class="reveal fade-up delay_200">
                                        <div class="s51_c10_li_txt">
                                            <i class="check_icon"></i><span class="txt01 fz_16 lh_1 kopubworlddotum normal">많은 임상 케이스를 성공적으로 치료한 경험</span>
                                        </div>
                                    </li>
                                    <li class="reveal fade-up delay_200">
                                        <div class="s51_c10_li_txt">
                                            <i class="check_icon"></i><span class="txt01 fz_16 lh_1 kopubworlddotum normal">다양한 치료옵션을 모두 가지고 각 케이스에 최적화된 치료를 제시할 수 있는 의료진</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="text_box s51_c10_text m_cont_960">
                                <p class="txt01 reveal fade-up delay_200 fz_25 lh_16 kopubworlddotum normal">
                                    이창훈대표원장은 <br>
                                    소수의 치과 의사들만이 시행하는 ICON(tm) <br>
                                    반점치 치료를 약 10년전부터 시행하면서 <br>
                                    <span class="semibold">다수의 케이스를 보유</span>하고 있으며, <br>
                                    치과의사들에게 소개하고 가르치는 <br>
                                    <span class="semibold">한국의 ICON반점치 치료법을 대표</span>하는 술자입니다.
                                </p>
                                <ul class="s51_c10_ul">
                                    <li class="reveal fade-up delay_200">
                                        <div class="s51_c10_li_txt">
                                            <i class="check_icon"></i><span class="txt01 fz_16 lh_1 kopubworlddotum normal">많은 임상 케이스를 성공적으로 치료한 경험</span>
                                        </div>
                                    </li>
                                    <li class="reveal fade-up delay_200">
                                        <div class="s51_c10_li_txt">
                                            <i class="check_icon"></i><span class="txt01 fz_16 lh_1 kopubworlddotum normal">다양한 치료옵션을 모두 가지고 각 케이스에 최적화된 <br>치료를 제시할 수 있는 의료진</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        </article>
        
        <article class="sub_cont_wrap s51_c04_wrap">
            <div class="s51_c04_bg"></div>
            <div class="s51_c04_bg2"></div>
            <div class="sub_cont_box">
                <div class="sub_box">
                    <div class="s51_c04_box">
                        <div class="text_box s51_c04_text ta_c">
                            <p class="txt01 reveal fade-up delay_200 fz_17 ls_p3 lh_16 sortsmillgoudy normal">
                                Before & After
                            </p>
                            <p class="txt02 reveal fade-up delay_200 fz_32 lh_16 kopubworlddotum normal">
                                얼룩덜룩 반점치(백색반점), <br>
                                <span class="semibold">치아삭제 없이</span>도 눈에 띄게 <br class="m_cont_434">좋아질 수 있습니다.
                            </p>
                        </div>
                    </div>
                    <div class="s51_c04_bna_wrap">
                        <ul class="s51_c04_bna_ul">
                            <li class="s51_c04_bna_li01">
                                <p class="txt01 reveal fade-up delay_200 fz_22 lh_16 kopubworlddotum medium">
                                    <span class="fz_16 ls_p5">01</span> 20대 여성 ㅣ 흰색반점(반점치) ㅣ ICON치료 ㅣ 소요시간 15분
                                </p>
                                <div class="s51_c04_bna_box reveal fade-up delay_200">
                                    <div class="s51_c04_bna">
                                        <img src="<?php echo G5_THEME_URL?>/sub/img/s51_c04_bna01_b.jpg" alt="">
                                        <div class="bna_date_txt01">
                                            <p class="txt01 c-w fz_14 lh_16 kopubworlddotum normal">
                                                2023.01.02
                                            </p>
                                        </div>
                                    </div>
                                    <div class="s51_c04_bna">
                                        <img src="<?php echo G5_THEME_URL?>/sub/img/s51_c04_bna01_a.jpg" alt="">
                                        <div class="bna_date_txt02">
                                            <p class="txt01 c-w fz_14 lh_16 kopubworlddotum normal">
                                                2023.04.05
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <p class="txt01 reveal fade-up delay_200 c-w fz_22 lh_16 kopubworlddotum medium">
                                    <span class="fz_16 ls_p5">02</span> 50대 남성 ㅣ 흰색반점(반점치) ㅣ ICON치료 ㅣ 소요시간 15분
                                </p>
                                <div class="s51_c04_bna_box reveal fade-up delay_200">
                                    <div class="s51_c04_bna">
                                        <img src="<?php echo G5_THEME_URL?>/sub/img/s51_c04_bna02_b.jpg" alt="">
                                        <div class="bna_date_txt01">
                                            <p class="txt01 c-w fz_14 lh_16 kopubworlddotum normal">
                                                2020.11.06
                                            </p>
                                        </div>
                                    </div>
                                    <div class="s51_c04_bna">
                                        <img src="<?php echo G5_THEME_URL?>/sub/img/s51_c04_bna02_a.jpg" alt="">
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
                                    <span class="fz_16 ls_p5">03</span> 40대 남성 ㅣ 흰색반점(반점치) ㅣ ICON치료 ㅣ 소요시간 15분
                                </p>
                                <div class="s51_c04_bna_box reveal fade-up delay_200">
                                    <div class="s51_c04_bna">
                                        <img src="<?php echo G5_THEME_URL?>/sub/img/s51_c04_bna03_b.jpg" alt="">
                                        <div class="bna_date_txt01">
                                            <p class="txt01 c-w fz_14 lh_16 kopubworlddotum normal">
                                                2020.12.07
                                            </p>
                                        </div>
                                    </div>
                                    <div class="s51_c04_bna">
                                        <img src="<?php echo G5_THEME_URL?>/sub/img/s51_c04_bna03_a.jpg" alt="">
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
                                    <span class="fz_16 ls_p5">04</span> 40대 여성 ㅣ 흰색반점(반점치) ㅣ ICON치료 ㅣ 소요시간 15분
                                </p>
                                <div class="s51_c04_bna_box reveal fade-up delay_200">
                                    <div class="s51_c04_bna">
                                        <img src="<?php echo G5_THEME_URL?>/sub/img/s51_c04_bna04_b.jpg" alt="">
                                        <div class="bna_date_txt01">
                                            <p class="txt01 c-w fz_14 lh_16 kopubworlddotum normal">
                                                2021.01.06
                                            </p>
                                        </div>
                                    </div>
                                    <div class="s51_c04_bna">
                                        <img src="<?php echo G5_THEME_URL?>/sub/img/s51_c04_bna04_a.jpg" alt="">
                                        <div class="bna_date_txt02">
                                            <p class="txt01 c-w fz_14 lh_16 kopubworlddotum normal">
                                                2021.02.04
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="s51_c04_bottom">
                        <div class="text_box s51_c04_bottom_text reveal fade-up delay_200">
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
        
        <article class="sub_cont_wrap s51_c05_wrap">
            <div id="s51_c05_href"></div>
            <div class="sub_cont_box">
                <div class="sub_box">
                    <div class="s51_c05_box">
                        <div class="title_box s51_c05_title ta_c">
                            <p class="txt01 reveal fade-up delay_200 fz_16 lh_16 normal">
                                <span class="kopubworlddotum">치주 치료</span>&nbsp;<span class="fz_17 ls_p3 sortsmillgoudy">03</span>
                            </p>
                            <p class="txt02 reveal fade-up delay_200 fz_36 lh_16 kopubworlddotum normal">
                                자연치아를 오래도록 튼튼하게, <span class="semibold">치주치료</span>
                            </p>
                        </div>
                        <div class="s51_c05_item_box">
                            <div class="s51_c05_img reveal fade-up delay_200">
                                <img src="<?php echo G5_THEME_URL?>/sub/img/s51_c05_img01.jpg" alt="">
                            </div>
                            <div class="text_box s51_c05_text">
                                <p class="txt01 reveal fade-up delay_200 fz_25 lh_16 kopubworlddotum normal">
                                    <span class="semibold">치아 주변 환경을 개선</span>하는 치주치료
                                </p>
                                <p class="txt02 reveal fade-up delay_200 c-333 fz_16 lh_16 kopubworlddotum normal">
                                    치주질환이란 잇몸, 치조골 등 치아 주위 조직에 염증이 생긴 것을 말하며, <br>
                                    치주 치료는 <span class="semibold">염증의 원인이 되는 치태와 치석을 제거</span>하고 <br>
                                    <span class="semibold">정기적으로 치아 주변의 잇몸 질환을 예방하는 것</span>을 말합니다.
                                </p>
                                <p class="txt03 reveal fade-up delay_200 fz_18 lh_16 kopubworlddotum normal">
                                    이런 경우 <span class="semibold">치주치료가 필요합니다.</span>
                                </p>
                                <ul class="s51_c05_ul">
                                    <li class="reveal fade-up delay_200">
                                        <div class="s51_c05_li_txt">
                                            <i class="check_icon"></i><span class="txt01 fz_16 lh_1 kopubworlddotum normal">양치질을 할 때 피가 섞여 나오는 분</span>
                                        </div>
                                    </li>
                                    <li class="reveal fade-up delay_200">
                                        <div class="s51_c05_li_txt">
                                            <i class="check_icon"></i><span class="txt01 fz_16 lh_1 kopubworlddotum normal">차거나 뜨거운 음식을 먹을 때 치아가 시리고 통증이 느껴지는 분</span>
                                        </div>
                                    </li>
                                    <li class="reveal fade-up delay_200">
                                        <div class="s51_c05_li_txt">
                                            <i class="check_icon"></i><span class="txt01 fz_16 lh_1 kopubworlddotum normal">잇몸이 자주 붓고 출혈이 있는 분</span>
                                        </div>
                                    </li>
                                    <li class="reveal fade-up delay_200">
                                        <div class="s51_c05_li_txt">
                                            <i class="check_icon"></i><span class="txt01 fz_16 lh_1 kopubworlddotum normal">잇몸이 내려 앉아서 치아가 길게 보이는 분</span>
                                        </div>
                                    </li>
                                    <li class="reveal fade-up delay_200">
                                        <div class="s51_c05_li_txt">
                                            <i class="check_icon"></i><span class="txt01 fz_16 lh_1 kopubworlddotum normal">치아가 흔들리고 입 냄새가 심하게 나는 분</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </article>
        
        <article class="sub_cont_wrap s51_c06_wrap">
            <div id="s51_c06_href"></div>
            <div class="sub_cont_box">
                <div class="sub_box">
                    <div class="s51_c06_box">
                        <div class="title_box s51_c06_title ta_c">
                            <p class="txt01 reveal fade-up delay_200 fz_16 lh_16 normal">
                                <span class="kopubworlddotum">치아교정</span>&nbsp;<span class="fz_17 ls_p3 sortsmillgoudy">04</span>
                            </p>
                            <p class="txt02 reveal fade-up delay_200 fz_36 lh_16 kopubworlddotum normal">
                                오랜시간이 걸리는 <span class="semibold">치아교정</span>은 <br>
                                처음부터 <span class="semibold">체계적</span>이어야 합니다.
                            </p>
                            <p class="txt03 reveal fade-up delay_200 fz_20 lh_16 kopubworlddotum normal">
                                인터서울치과의 치아교정은 <br class="m_cont_960"><span class="semibold">3차원 CT촬영</span>을 통한 <span class="semibold">정확한 진단</span>부터 시작됩니다.
                            </p>
                        </div>
                        <div class="s51_c06_item_box">
                            <ul class="s51_c06_item_ul">
                                <li class="s51_c06_item_li01 reveal fade-up delay_200">
                                    <p class="txt01 c-w fz_16 lh_16 notosans medium">
                                        STEP 1
                                    </p>
                                    <div class="s51_c06_item_txt">
                                        <p class="txt01 c-333 fz_16 lh_16 kopubworlddotum normal">
                                            <span class="semibold">3차원 3D CT촬영</span>을 통한 <br>
                                            치아 배열 및 상태점검
                                        </p>
                                    </div>
                                </li>
                                <li class="s51_c06_item_li02 reveal fade-up delay_400">
                                    <p class="txt01 c-w fz_16 lh_16 notosans medium">
                                        STEP 2
                                    </p>
                                    <div class="s51_c06_item_txt">
                                        <p class="txt01 c-333 fz_16 lh_16 kopubworlddotum normal pc_cont_960">
                                            유아교정부터 <br>
                                            비발치 교정까지 <br>
                                            풍부한 임상경험을 보유한 <br>
                                            <span class="semibold">의료진의 1:1 맞춤 교정 진행</span>
                                        </p>
                                        <p class="txt01 c-333 fz_16 lh_16 kopubworlddotum normal m_cont_960">
                                            유아교정부터 비발치 교정까지 <br>
                                            풍부한 임상경험을 보유한 <br>
                                            <span class="semibold">의료진의 1:1 맞춤 교정 진행</span>
                                        </p>
                                    </div>
                                </li>
                                <li class="s51_c06_item_li03 reveal fade-up delay_600">
                                    <p class="txt01 c-w fz_16 lh_16 notosans medium">
                                        STEP 3
                                    </p>
                                    <div class="s51_c06_item_txt">
                                        <p class="txt01 c-333 fz_16 lh_16 kopubworlddotum normal">
                                            <span class="semibold">상담부터 관리까지</span> <br>
                                            체계적 교정시스템
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </article>
        
        <article class="sub_cont_wrap s51_c07_wrap">
            <div id="s51_c07_href"></div>
            <div class="sub_cont_box">
                <div class="sub_box">
                    <div class="s51_c07_box">
                        <div class="title_box s51_c07_title ta_c">
                            <p class="txt01 reveal fade-up delay_200 fz_16 lh_16 normal">
                                <span class="kopubworlddotum">예방관리</span>&nbsp;<span class="fz_17 ls_p3 sortsmillgoudy">05</span>
                            </p>
                            <p class="txt02 reveal fade-up delay_200 fz_36 lh_16 kopubworlddotum normal">
                                가장 앞선 치료는 <span class="semibold">예방</span>입니다.
                            </p>
                            <p class="txt03 reveal fade-up delay_200 fz_20 lh_16 kopubworlddotum normal">
                                인터서울치과가 건강한 치아를 보존하는 방법
                            </p>
                        </div>
                        <div class="s51_c07_item_box">
                            <ul class="s51_c07_item_ul">
                                <li class="s51_c07_item_li01 reveal fade-up delay_200">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/s51_c07_img01.png" alt="">
                                    
                                    <div class="s51_c07_item_txt">
                                        <p class="txt01 fz_18 lh_16 kopubworlddotum semibold">
                                            정기검진과 스케일링
                                        </p>
                                        <p class="txt02 c-333 fz_16 lh_16 kopubworlddotum normal">
                                            스케일링을 통해 치주질환의 원인인 <br>
                                            플라그와 치석을 제거해 <br>
                                            충치와 치주질환을 예방합니다.
                                        </p>
                                    </div>
                                </li>
                                <li class="s51_c07_item_li02 reveal fade-up delay_400">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/s51_c07_img02.png" alt="">
                                    
                                    <div class="s51_c07_item_txt">
                                        <p class="txt01 fz_18 lh_16 kopubworlddotum semibold">
                                            올바른 칫솔선택 교육 <br>
                                            구강보건교육 및 지도
                                        </p>
                                        <p class="txt02 c-333 fz_16 lh_16 kopubworlddotum normal">
                                            전문가가 올바른 칫솔을 선택하는 <br>
                                            방법에서부터 바른 칫솔질까지 스스로 <br>
                                            구강 건강을 지키는 방법을 교육합니다.
                                        </p>
                                    </div>
                                </li>
                                <li class="s51_c07_item_li03 reveal fade-up delay_600">
                                    <img src="<?php echo G5_THEME_URL?>/sub/img/s51_c07_img03.png" alt="">
                                    
                                    <div class="s51_c07_item_txt">
                                        <p class="txt01 fz_18 lh_16 kopubworlddotum semibold">
                                            전문가 불소도포
                                        </p>
                                        <p class="txt02 c-333 fz_16 lh_16 kopubworlddotum normal">
                                            불소도포는 치아 표면에 불소를 도포하여 <br>
                                            산성으로부터 치아를 보호하고 단단하게 <br>
                                            만들어주어 충치발생 위험을 낮출 수 있습니다.
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </article>
        
        <article class="sub_cont_wrap s51_box_item_wrap02">
            <div class="sub_cont_box s51_c08_cont_box">
                <div class="sub_box pc_cont_960">
                    <div class="s51_c08_box">
                        <div class="text_box s51_c08_text">
                            <p class="txt01 reveal fade-up delay_200 fz_17 ls_p3 lh_16 sortsmillgoudy normal">
                                INTER SPECIAL
                            </p>
                            <p class="txt02 reveal fade-up delay_200 c-333 fz_17 lh_16 kopubworlddotum normal">
                                잘못된 스케일링이 치아를 손상시킬 수 있다는 사실, 알고계셨나요?
                            </p>
                            <p class="txt03 reveal fade-up delay_200 fz_25 lh_16 kopubworlddotum normal">
                                인터서울치과는 스케일링 시 <span class="semibold span_bg">치아에 영향을 주지 않고</span> <br>
                                이 시림등의 <span class="semibold span_bg">자극이 적은 EMS사의 Airflow</span> 장비를 사용합니다.
                            </p>
                            <p class="txt04 reveal fade-up delay_200 c-333 fz_16 lh_16 kopubworlddotum normal">
                                Airflow 장비는 나노파우더를 물과 공기의 힘으로 분사하여 치석을 제거하는 장비로 <br>
                                <span class="semibold">정밀한 분사와 온도조절이 가능</span>하여 <span class="semibold">스케일링시 불편함을 최소화</span>합니다.
                            </p>
                        </div>
                        <div class="s51_c08_img reveal fade-up delay_200">
                            <img src="<?php echo G5_THEME_URL?>/sub/img/s51_c08_img01.png" alt="">
                            
                            <p class="s51_c8_big_txt fz_150 lh_1 sortsmillgoudy normal">
                                Airflow
                            </p>
                        </div>
                    </div>
                </div>
                <div class="sub_box m_cont_960">
                    <div class="s51_c08_box">
                        <div class="text_box s51_c08_text">
                            <p class="txt01 reveal fade-up delay_200 fz_17 ls_p3 lh_16 sortsmillgoudy normal">
                                INTER SPECIAL
                            </p>
                            <p class="txt02 reveal fade-up delay_200 c-333 fz_17 lh_16 kopubworlddotum normal">
                                잘못된 스케일링이 치아를 손상시킬 수 있다는 사실, <br>
                                알고계셨나요?
                            </p>
                            <p class="txt03 reveal fade-up delay_200 fz_25 lh_16 kopubworlddotum normal">
                                인터서울치과는 스케일링 시 <br>
                                <span class="semibold span_bg">치아에 영향을 주지 않고</span> 이 시림등의 자극이 적은 <br>
                                <span class="semibold span_bg">EMS사의 Airflow</span> 장비를 사용합니다.
                            </p>
                        </div>
                        <div class="s51_c08_img reveal fade-up delay_200">
                            <img src="<?php echo G5_THEME_URL?>/sub/img/s51_c08_img01_m.png" alt="">
                            
                            <p class="s51_c8_big_txt fz_150 lh_1 sortsmillgoudy normal">
                                Airflow
                            </p>
                        </div>
                        <div class="text_box s51_c08_text">
                            <p class="txt04 reveal fade-up delay_200 c-333 fz_16 lh_16 kopubworlddotum normal">
                                Airflow 장비는 나노파우더를 물과 공기의 힘으로 분사하여 <br>
                                치석을 제거하는 장비로 <span class="semibold">정밀한 분사와 온도조절이 가능</span>하여 <br>
                                <span class="semibold">스케일링시 불편함을 최소화</span>합니다.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </article>
        
        <article class="sub_cont_wrap s51_c09_wrap">
            <div class="sub_cont_box">
                <div class="sub_box">
                    <div class="s51_c09_box">
                        <div class="text_box s51_c09_text ta_c">
                            <p class="txt01 reveal fade-up delay_200 fz_17 ls_p3 lh_16 sortsmillgoudy normal">
                                Q & A
                            </p>
                            <p class="txt02 reveal fade-up delay_200 fz_34 lh_16 kopubworlddotum normal">
                                <span class="semibold">스케일링에 대한 궁금증</span> <br class="m_cont_960">인터서울치과가 풀어드립니다.
                            </p>
                        </div>
                    </div>
                    <div class="s51_c09_section_wrap reveal fade-up delay_200">
                        <div id="accordion_wrap" class="s51_c09_accordion_wrap">
                            <!-- Q - 01 -->
                            <div class="s51_c09_qna_wrap">
                                <div class="s51_c09_que s51_c09_que01 on" id="s51_c09_que01">
                                    <a class="s51_c09_que_a" href="javascript:void(0);">
                                        <p class="fz_19 ls_p1 lh_16 kopubworlddotum normal">
                                            <span>Q.</span> <span>스케일링 후 이가 시린데 괜찮은건가요?</span>
                                        </p>
                                        
                                        <div class="s51_c09_btn">
                                            <div class="s51_c09_plus">
                                                <div class="line line01"></div>
                                                <div class="line line02"></div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="s51_c09_anw s51_c09_anw01 on">
                                    <div class="s51_c09_anw_box">
                                        <div class="s51_c09_anw_cont s51_c09_anw_cont01">
                                            <p class="txt01 fz_16 lh_16 kopubworlddotum normal">
                                                스케일링 치료를 통해 그간 치아에 덮여있던 치아의 표면이 노출되어 일시적으로 시린 증상이 느껴지는 것일 뿐, <br class="pc_cont_960">
                                                대부분 2~3일 안으로 없어지므로 크게 걱정하지 않으셔도 됩니다.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Q - 02 -->
                            <div class="s51_c09_qna_wrap">
                                <div class="s51_c09_que s51_c09_que02" id="s51_c09_que02">
                                    <a class="s51_c09_que_a" href="javascript:void(0);">
                                        <p class="fz_19 lh_16 kopubworlddotum normal">
                                            <span>Q.</span> <span>작년에 스케일링 받았는데 또 받아야하나요?</span>
                                        </p>
                                        
                                        <div class="s51_c09_btn">
                                            <div class="s51_c09_plus">
                                                <div class="line line01"></div>
                                                <div class="line line02"></div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="s51_c09_anw s51_c09_anw02">
                                    <div class="s51_c09_anw_box">
                                        <div class="s51_c09_anw_cont s51_c09_anw_cont01">
                                            <p class="txt01 fz_16 lh_16 kopubworlddotum normal">
                                                스케일링은 양치질로 완벽하게 제거하지 못하는 부분들을 이중으로 깔끔하게 제거하는 치료입니다 <br class="pc_cont_960">
                                                스케일링으로 충치나 치주질환을 예방할 수 있기 때문에, 경우에 따라 다르나 <br class="pc_cont_960">
                                                6개월에 한번 정도 정기적으로 받아주시는 편이 좋습니다.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Q - 03 -->
                            <div class="s51_c09_qna_wrap">
                                <div class="s51_c09_que s51_c09_que03" id="s51_c09_que03">
                                    <a class="s51_c09_que_a" href="javascript:void(0);">
                                        <p class="fz_19 lh_16 kopubworlddotum normal">
                                            <span>Q.</span> <span>스케일링 받고 나서 치아 사이가 <br class="m_cont_960">
                                            벌어진 것 같아요. 괜찮나요?</span>
                                        </p>
                                        
                                        <div class="s51_c09_btn">
                                            <div class="s51_c09_plus">
                                                <div class="line line01"></div>
                                                <div class="line line02"></div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="s51_c09_anw s51_c09_anw03">
                                    <div class="s51_c09_anw_box">
                                        <div class="s51_c09_anw_cont s51_c09_anw_cont01">
                                            <p class="txt01 fz_16 lh_16 kopubworlddotum normal">
                                                치석이 쌓여 있던 공간과 치석 때문에 생겼던 잇몸병으로 부어있던 잇몸이 나아가는 과정에서 <br class="pc_cont_960">
                                                비어보이는 경우가 있으나 잇몸병이 나아가는 정상적인 치유과정이므로 걱정하지 않으셔도 됩니다.
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
    $(document).ready(function(){
        $('.s51_fixed_menu_ul > li').on('click', function(){
            $('.s51_fixed_menu_ul > li').stop().removeClass('on');
            $(this).stop().addClass('on');
        });
    });
</script>
