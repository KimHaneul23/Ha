<?php
include_once('./_common.php');
//if (G5_IS_MOBILE) {
//    include_once(G5_MOBILE_PATH.'/index.php');
//    return;
//}


// 웹사이트 타이틀
$g5['title'] = '레진치료 · 심미치료';

include_once(G5_PATH.'/head.php');
?>
    <style> /* 헤더 화이트 */
        .header_menu_li > a{color:#fff;}
        .header_menu_li > a::after{border-bottom:1px solid #fff; }
        .header_menu_li.header_menu_li01_1 > a::after{
            -webkit-transform-origin: left top;
            -ms-transform-origin: left top;
            transform-origin: left top;
            -webkit-transform: scale(1, 1);
            -ms-transform: scale(1, 1);
            transform: scale(1, 1)
        }
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
        
        @media (max-width:480px) {
            .header_menu_li > a{color:#fff;}
            .header_menu_li > a::after{border-bottom:1px solid #fff; }
            .header_menu_li.header_menu_li01_1 > a::after{
                -webkit-transform-origin: left top;
                -ms-transform-origin: left top;
                transform-origin: left top;
                -webkit-transform: scale(1, 1);
                -ms-transform: scale(1, 1);
                transform: scale(1, 1)
            }
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
        
        <article class="sub_top_cont sub2_1_top_cont" id="startContent">
            <div class="sub_top_cont_wrap">
                <div class="sub_top_view_bg sub2_1_top_view_bg"></div>
                <div class="sub_top_text sub_titlebox ta_c">
                    <p class="txt01 reveal fade-up delay_200 c-w fz_34 lh_16 kopubworlddotum semibold">
                        레진치료 · 심미치료
                    </p>
                    <p class="txt02 reveal fade-up delay_400 c-w fz_17 ls_p2 lh_16 kopubworlddotum normal">
                        평생 쓰는 치아는 쓰기에도 좋고 보기에도 좋아야 합니다 <br>
                        <span class="semibold">티 나지 않는 자연스러움</span>, 인터서울치과의 심미치료입니다
                    </p>
                </div>
            </div>
        </article>
        
        <article class="sub_cont_wrap s21_c01_wrap">
            <div class="sub_cont_box">
                <div class="sub_box pc_cont_960">
                    <div class="s21_c01_box">
                        <div class="s21_c01_top">
                            <div class="text_box s21_c01_text">
                                <p class="txt01 reveal fade-up delay_200 fz_17 ls_p3 lh_16 sortsmillgoudy normal">
                                    INTER SPECIAL 01
                                </p>
                                <p class="txt02 reveal fade-up delay_200 fz_17 lh_16 kopubworlddotum normal">
                                    의료진의 숙련도와 전문성이 <br>
                                    결과로 바로 이어지는 레진/심미치료
                                </p>
                                <p class="txt03 reveal fade-up delay_200 fz_35 lh_16 kopubworlddotum normal">
                                    인터서울치과의 이창훈 대표원장은 <br>
                                    국내외 레진/심미치료계의 <br class="m_cont_1280">Key Opinion Leader로 <br>
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
                <div class="sub_box m_cont_960">
                    <div class="s21_c01_box">
                        <div class="s21_c01_top">
                            <div class="text_box s21_c01_text">
                                <p class="txt01 reveal fade-up delay_200 fz_17 ls_p3 lh_16 sortsmillgoudy normal">
                                    INTER SPECIAL 01
                                </p>
                                <p class="txt02 reveal fade-up delay_200 fz_17 lh_16 kopubworlddotum normal">
                                    의료진의 숙련도와 전문성이 결과로 바로 이어지는 레진/심미치료
                                </p>
                            </div>
                            <div class="s21_c01_img ta_c reveal fade-up delay_200">
                                <div class="swiper-container s21_c01_swiper">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide s21_c01_slide">
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/s21_c01_img01_m.jpg" alt="">
                                        </div>
                                        <div class="swiper-slide s21_c01_slide">
                                            <img src="<?php echo G5_THEME_URL?>/sub/img/s21_c01_img02_m.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-pagination s21_c01_pagination"></div>
                                </div>
                            </div>
                            <div class="text_box s21_c01_text">
                                <p class="txt03 reveal fade-up delay_200 fz_35 lh_16 kopubworlddotum normal">
                                    인터서울치과의 이창훈 대표원장은 <br>
                                    국내외 레진/심미치료계의 Key Opinion <br>
                                    Leader로 <span class="semibold">치과의사들의 치과의사</span>로 <br>
                                    불리고 있습니다.
                                </p>
                                <p class="txt04 reveal fade-up delay_200 fz_15 lh_16 kopubworlddotum light">
                                    한국접착치의학회 이사 ㅣ 대한심미치과학회 이사
                                </p>
                            </div>
                        </div>
                        <div class="s21_c01_bottom">
                            <div class="text_box s21_c01_bottom_text reveal fade-up delay_200">
                                <i class="check_icon"></i>
                                <p class="txt01 fz_25 lh_16 kopubworlddotum medium">
                                    2016년부터는 심미치료에 대한 <br>깊은 이해와 탁월한 전문성을 바탕으로
                                </p>
                                <p class="txt02 fz_16 lh_16 kopubworlddotum normal">
                                    치과의사들을 대상으로 하는 학술대회의 강연자, 모더레이터, 학술위원 등 <br>
                                    꾸준히 활동을 이어가며 더 완성도 높은 치료에 대해 <br>
                                    고민하고 연구하고 있습니다.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </article>
        
        <article class="sub_cont_wrap s21_c02_wrap">
            <div class="sub_cont_box">
                <div class="sub_box pc_cont_960">
                    <div class="s21_c02_box">
                        <div class="s21_c02_img reveal fade-up delay_200">
                            <img src="<?php echo G5_THEME_URL?>/sub/img/s21_c02_img01.gif" alt="">
                            
                            <p class="txt01 fz_14 ls_1 lh_16 kopubworlddotum medium">
                                미국 Global사 미세현미경
                            </p>
                        </div>
                        <div class="text_box s21_c02_text">
                            <p class="txt01 reveal fade-up delay_200 fz_17 ls_p3 lh_16 sortsmillgoudy normal">
                                INTER SPECIAL 02
                            </p>
                            <p class="txt02 reveal fade-up delay_200 fz_37 lh_16 kopubworlddotum normal">
                                치과의사는 <br>
                                <span class="semibold">눈에 보이는 것만</span> 치료 할 수 있습니다.
                            </p>
                            <p class="txt03 reveal fade-up delay_200 fz_20 ls_p1 lh_16 kopubworlddotum normal">
                                그래서 인터서울치과는 <span class="semibold">20배 더 정확한 치료</span>를 위해 <br>
                                대학병원급 장비인 <span class="semibold">미세현미경을 3대</span> 보유하고 있습니다.
                            </p>
                            <p class="txt04 reveal fade-up delay_200 fz_16 ls_1 lh_16 kopubworlddotum normal">
                                미세현미경은 치료부위를 최고 20배율 까지 확대할 수 있어 <br>
                                더 정확하고 섬세한 심미치료가 가능합니다.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="sub_box m_cont_960">
                    <div class="s21_c02_box">
                        <div class="text_box s21_c02_text">
                            <p class="txt01 reveal fade-up delay_200 fz_17 ls_p3 lh_16 sortsmillgoudy normal">
                                INTER SPECIAL 02
                            </p>
                            <p class="txt02 reveal fade-up delay_200 fz_37 lh_16 kopubworlddotum normal">
                                치과의사는 <span class="semibold">눈에 보이는 것만</span> <br>
                                치료 할 수 있습니다.
                            </p>
                            <p class="txt03 reveal fade-up delay_200 fz_20 ls_p1 lh_16 kopubworlddotum normal">
                                그래서 인터서울치과는 <span class="semibold">20배 더 정확한 치료</span>를 위해 <br>
                                대학병원급 장비인 <span class="semibold">미세현미경을 3대</span> 보유하고 있습니다.
                            </p>
                        </div>
                        <div class="s21_c02_img reveal fade-up delay_200">
                            <img src="<?php echo G5_THEME_URL?>/sub/img/s21_c02_img01.gif" alt="">
                            
                            <p class="txt01 fz_14 ls_1 lh_16 kopubworlddotum medium">
                                미국 Global사 미세현미경
                            </p>
                        </div>
                        <div class="text_box s21_c02_text">
                            <p class="txt04 reveal fade-up delay_200 fz_20 ls_1 lh_16 kopubworlddotum normal">
                                미세현미경은 치료부위를 최고 20배율 까지 확대할 수 있어 <br>
                                더 정확하고 섬세한 심미치료가 가능합니다.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </article>
        
        <article class="sub_cont_wrap s21_c03_wrap">
            <div class="sub_cont_box">
                <div class="sub_box pc_cont_960">
                    <div class="s21_c03_box">
                        <div class="text_box s21_c03_text reveal fade-up delay_200">
                            <p class="txt01 fz_19 ls_p1 lh_16 kopubworlddotum normal">
                                <span class="semibold">미국 현미경학회 AMED의 정회원</span>인 이창훈 대표원장은 <br>
                                미세현미경에 대한 높은 전문성과 노하우를 갖추고 있어 미세현미경을 활용한 <br>
                                심미치료에서 더 완성도 높은 결과를 만들어 냅니다.
                            </p>
                            <p class="big_txt fz_120 lh_1 sortsmillgoudy normal">
                                AMED
                            </p>
                        </div>
                        <div class="s21_c03_img reveal fade-up delay_200">
                            <img src="<?php echo G5_THEME_URL?>/sub/img/s21_c03_img01.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="sub_box m_cont_960">
                    <div class="s21_c03_box">
                        <div class="text_box s21_c03_text reveal fade-up delay_200">
                            <p class="txt01 fz_19 ls_p1 lh_16 kopubworlddotum normal">
                                <span class="semibold">미국 현미경학회 AMED의 정회원</span>인 이창훈 대표원장은 <br>
                                미세현미경에 대한 높은 전문성과 노하우를 갖추고 있어 <br>
                                미세현미경을 활용한 심미치료에서 더 완성도 높은 <br>
                                결과를 만들어 냅니다.
                            </p>
                        </div>
                        <div class="s21_c03_img reveal fade-up delay_200">
                            <img src="<?php echo G5_THEME_URL?>/sub/img/s21_c03_img01.jpg" alt="">
                            
                            <p class="big_txt fz_120 lh_1 sortsmillgoudy normal">
                                AMED
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </article>
        
        <article class="sub_cont_wrap s21_box_item_wrap">
            <div class="s21_box_big_txt">
                <p class="s21_box_big_txt01 fz_170 lh_1 sortsmillgoudy normal">
                    RESIN
                </p>
            </div>
            <div class="sub_cont_box s21_c04_cont_box">
                <div class="sub_box pc_cont_960">
                    <div class="s21_c04_box">
                        <div class="s21_c04_img reveal fade-up delay_200">
                            <img src="<?php echo G5_THEME_URL?>/sub/img/s21_c04_img01.png" alt="">
                        </div>
                        <div class="text_box s21_c04_text">
                            <p class="txt01 reveal fade-up delay_200 fz_17 ls_p3 lh_16 sortsmillgoudy normal">
                                RESIN 01
                            </p>
                            <p class="txt02 reveal fade-up delay_200 fz_34 ls_1 lh_16 kopubworlddotum normal">
                                <span class="semibold">레진</span>은 일반적인 선입견과 달리 <br>
                                <span class="semibold">높은 강도</span>를 견딜 수 있고 <span class="semibold">치아색과 비슷</span>하기 때문에 <br>
                                다양한 치과치료에 적용할 수 있습니다.
                            </p>
                            <p class="txt03 reveal fade-up delay_200 fz_17 lh_16 kopubworlddotum normal">
                                레진(복합레진 Composite resin)은 유기기질과 무기필러를 이용 <br>
                                치아와 비슷한 강도와 색상을 띄는 치과용 수복재료로 충치치료로 치아를 보충해야 하는 경우 <br>
                                또는 앞니가 파절되거나 벌어진 경우 등 다양한 케이스에 활용되고 있습니다.
                            </p>
                        </div>
                    </div>
                    
                    <div class="s21_c04_bottom">
                        <div class="text_box s21_c04_bottom_text reveal fade-up delay_200">
                            <i class="check_icon"></i>
                            <p class="txt01 fz_25 lh_16 kopubworlddotum medium">
                                특히 심미적으로 중요한 앞니가 손상된 경우 <br>
                                자연스럽고 심미적으로 탁월한 레진치료를 추천드립니다.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="sub_box m_cont_960">
                    <div class="s21_c04_box">
                        <div class="text_box s21_c04_text">
                            <p class="txt01 reveal fade-up delay_200 fz_17 ls_p3 lh_16 sortsmillgoudy normal">
                                RESIN 01
                            </p>
                            <p class="txt02 reveal fade-up delay_200 fz_34 ls_1 lh_16 kopubworlddotum normal">
                                <span class="semibold">레진</span>은 일반적인 선입견과 달리 <br>
                                <span class="semibold">높은 강도</span>를 견딜 수 있고 <span class="semibold">치아색과 <br>
                                비슷</span>하기 때문에 <br>
                                다양한 치과치료에 적용할 수 있습니다.
                            </p>
                        </div>
                        <div class="s21_c04_img reveal fade-up delay_200">
                            <img src="<?php echo G5_THEME_URL?>/sub/img/s21_c04_img01_m.png" alt="">
                        </div>
                        <div class="text_box s21_c04_text">
                            <p class="txt03 reveal fade-up delay_200 fz_17 lh_16 kopubworlddotum normal">
                                레진(복합레진 Composite resin)은 유기기질과 무기필러를 이용 <br>
                                치아와 비슷한 강도와 색상을 띄는 치과용 수복재료로 <br>
                                충치치료로 치아를 보충해야 하는 경우 또는 앞니가 파절되거나 <br>
                                벌어진 경우 등 다양한 케이스에 활용되고 있습니다.
                            </p>
                        </div>
                    </div>
                    
                    <div class="s21_c04_bottom">
                        <div class="text_box s21_c04_bottom_text reveal fade-up delay_200">
                            <i class="check_icon"></i>
                            <p class="txt01 fz_25 lh_16 kopubworlddotum medium">
                                특히 심미적으로 중요한 앞니가 손상된 경우 <br>
                                자연스럽고 심미적으로 탁월한 <br>
                                레진치료를 추천드립니다.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="sub_cont_box s21_c05_cont_box">
                <div class="sub_box">
                    <div class="s21_c05_box">
                        <div class="text_box s21_c05_text ta_c pc_cont_960">
                            <p class="txt01 reveal fade-up delay_200 fz_17 ls_p3 lh_16 sortsmillgoudy normal">
                                RESIN 02
                            </p>
                            <p class="txt02 reveal fade-up delay_200 fz_35 ls_1 lh_16 kopubworlddotum normal">
                                레진은 <span class="semibold">자연치아를 최대한으로 보존</span>할 수 있기 때문에 <br>
                                많은 치과 의사들이 선호하는 치료방법입니다.
                            </p>
                        </div>
                        <div class="text_box s21_c05_text ta_l m_cont_960">
                            <p class="txt01 reveal fade-up delay_200 fz_17 ls_p3 lh_16 sortsmillgoudy normal">
                                RESIN 02
                            </p>
                            <p class="txt02 reveal fade-up delay_200 fz_35 ls_1 lh_16 kopubworlddotum normal">
                                레진은 <span class="semibold">자연치아를 최대한으로 보존</span>할 수 <br>
                                있기 때문에 많은 치과 의사들이 <br>
                                선호하는 치료방법입니다.
                            </p>
                        </div>
                        <div class="s21_c05_ul_box">
                            <ul class="s21_c05_ul">
                                <li class="reveal fade-up">
                                    <p class="txt01 c-w fz_20 lh_1 kopubworlddotum normal">
                                        우수한 <br class="m_cont_960">심미성
                                    </p>
                                </li>
                                <li class="reveal fade-up delay_200">
                                    <p class="txt01 c-w fz_20 lh_1 kopubworlddotum normal">
                                        자연치아 <br class="m_cont_960">보존
                                    </p>
                                </li>
                                <li class="reveal fade-up delay_400">
                                    <p class="txt01 c-w fz_20 lh_1 kopubworlddotum normal">
                                        다른 보철보다 <br class="m_cont_960">저렴
                                    </p>
                                </li>
                                <li class="reveal fade-up delay_600">
                                    <p class="txt01 c-w fz_20 lh_1 kopubworlddotum normal">
                                        변색, 파손이 <br class="m_cont_960">적음
                                    </p>
                                </li>
                                <li class="reveal fade-up delay_800">
                                    <p class="txt01 c-w fz_20 lh_1 kopubworlddotum normal">
                                        짧은 <br class="m_cont_960">시술 시간
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="sub_cont_box s21_c06_cont_box">
                <div class="sub_box pc_cont_960">
                    <div class="s21_c06_box">
                        <div class="s21_c06_img reveal fade-up delay_200">
                            <img src="<?php echo G5_THEME_URL?>/sub/img/s21_c06_img01.jpg" alt="">
                        </div>
                        <div class="text_box s21_c06_text">
                            <p class="txt01 reveal fade-up delay_200 fz_17 ls_p3 lh_16 sortsmillgoudy normal">
                                RESIN 03
                            </p>
                            <p class="txt02 reveal fade-up delay_200 fz_34 ls_1 lh_16 kopubworlddotum normal">
                                인터서울치과의 <span class="semibold">레진치료 진정성</span>
                            </p>
                            <p class="txt03 reveal fade-up delay_200 fz_17 lh_16 kopubworlddotum normal">
                                인터서울치과의 레진치료는 10년 넘게 레진/심미치료를 연구하고 강의한 <br>
                                이창훈 대표원장이 하나부터 열까지 직접 책임 진료합니다.
                            </p>
                            <ul class="s21_c06_ul">
                                <li class="reveal fade-up">
                                    <div class="s21_c06_li_txt">
                                        <i class="check_icon"></i><span class="txt01 fz_20 lh_1 kopubworlddotum normal">레진관련 강의</span>
                                        <div class="s21_c06_li_counter s21_c06_li_counter01">
                                            <span class="txt02 counter5 fz_60 lh_1 sortsmillgoudy normal dp_ib" data-scount="1" data-count="20" data-second="1">1</span><span class="txt03 fz_15 lh_1 kopubworlddotum semibold dp_ib">회 +</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="reveal fade-up delay_200">
                                    <div class="s21_c06_li_txt">
                                        <i class="check_icon"></i><span class="txt01 fz_20 lh_1 kopubworlddotum normal">레진 개인 실습 세미나</span>
                                        <div class="s21_c06_li_counter s21_c06_li_counter02">
                                            <span class="txt02 counter6 fz_60 lh_1 sortsmillgoudy normal dp_ib" data-scount="1" data-count="4" data-second="2">1</span><span class="txt03 fz_15 lh_1 kopubworlddotum semibold dp_ib">회 +</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="reveal fade-up delay_400">
                                    <div class="s21_c06_li_txt">
                                        <i class="check_icon"></i><span class="fz_20 lh_1 kopubworlddotum normal">최대규모 치과 학술대회 (SIDEX) 2020, 2023년 강연</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="sub_box m_cont_960">
                    <div class="s21_c06_box">
                        <div class="text_box s21_c06_text">
                            <p class="txt01 reveal fade-up delay_200 fz_17 ls_p3 lh_16 sortsmillgoudy normal">
                                RESIN 03
                            </p>
                            <p class="txt02 reveal fade-up delay_200 fz_34 ls_1 lh_16 kopubworlddotum normal">
                                인터서울치과의 <span class="semibold">레진치료 진정성</span>
                            </p>
                        </div>
                        <div class="s21_c06_img reveal fade-up delay_200">
                            <img src="<?php echo G5_THEME_URL?>/sub/img/s21_c06_img01.jpg" alt="">
                        </div>
                        <div class="text_box s21_c06_text">
                            <p class="txt03 reveal fade-up delay_200 fz_17 lh_16 kopubworlddotum normal">
                                인터서울치과의 레진치료는 10년 넘게 레진/심미치료를 <br>
                                연구하고 강의한 이창훈 대표원장이 하나부터 열까지 <br>
                                직접 책임 진료합니다.
                            </p>
                            <ul class="s21_c06_ul">
                                <li class="reveal fade-up">
                                    <div class="s21_c06_li_txt">
                                        <i class="check_icon"></i><span class="txt01 fz_20 lh_1 kopubworlddotum normal">레진관련 강의</span>
                                        <div class="s21_c06_li_counter s21_c06_li_counter01">
                                            <span class="txt02 counter5_m fz_60 lh_1 sortsmillgoudy normal dp_ib" data-scount="1" data-count="20" data-second="0.8">1</span><span class="txt03 fz_15 lh_1 kopubworlddotum semibold dp_ib">회 +</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="reveal fade-up delay_200">
                                    <div class="s21_c06_li_txt">
                                        <i class="check_icon"></i><span class="txt01 fz_20 lh_1 kopubworlddotum normal">레진 개인 실습 세미나</span>
                                        <div class="s21_c06_li_counter s21_c06_li_counter02">
                                            <span class="txt02 counter6_m fz_60 lh_1 sortsmillgoudy normal dp_ib" data-scount="1" data-count="4" data-second="2">1</span><span class="txt03 fz_15 lh_1 kopubworlddotum semibold dp_ib">회 +</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="reveal fade-up delay_400">
                                    <div class="s21_c06_li_txt">
                                        <i class="check_icon"></i><span class="fz_20 lh_1 kopubworlddotum normal">최대규모 치과 학술대회 (SIDEX) 2020, 2023년 강연</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="sub_cont_box s21_c07_cont_box" id="s21_c07_cont_box">
                <div class="sub_box">
                    <div class="s21_c07_box">
                        <div class="text_box s21_c07_text ta_c">
                            <p class="txt01 reveal fade-up delay_200 fz_17 ls_p3 lh_16 sortsmillgoudy normal">
                                RESIN 04
                            </p>
                            <p class="txt02 reveal fade-up delay_200 fz_35 ls_1 lh_16 kopubworlddotum normal">
                                <span class="semibold span_bg">자연스러운 아름다움,</span> <br class="m_cont_960">인터서울치과 레진 심미치료
                            </p>
                        </div>
                        <div class="s21_c07_video_wrap pc_cont_480">
                            <div class="s21_c07_video_box">
                                <div class="s21_c07_video">
                                    <video id="s21_c07_video" poster="<?php echo G5_THEME_URL?>/img/main_cont04_video_bg.jpg" preload="none" autoplay loop muted playsinline webkit-playsinline>
                                        <source type="video/mp4" src="<?php echo G5_THEME_URL?>/video/main_cont04_video.mp4">
                                    </video>
                                </div>
                            </div>
                        </div>
                        <div class="s21_c07_video_wrap m_cont_480">
                            <div class="s21_c07_video_box">
                                <div class="s21_c07_video">
                                    <video id="s21_c07_video" poster="<?php echo G5_THEME_URL?>/img/main_cont04_video_bg_m.jpg" preload="none" autoplay loop muted playsinline webkit-playsinline>
                                        <source type="video/mp4" src="<?php echo G5_THEME_URL?>/video/main_cont04_video_m.mp4">
                                    </video>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </article>
        
        <article class="sub_cont_wrap s21_c08_wrap">
            <div class="sub_cont_box">
                <div class="sub_box">
                    <div class="s21_c08_box">
                        <div class="text_box s21_c08_text pc_cont_960">
                            <p class="txt01 reveal fade-up delay_200 fz_17 ls_p3 lh_16 sortsmillgoudy normal">
                                LAMIANTE
                            </p>
                            <p class="txt02 reveal fade-up delay_200 fz_35 lh_16 kopubworlddotum normal">
                                <span class="semibold">라미네이트는 치아에 해롭다?</span><br>
                                - 아닙니다!
                            </p>
                            <p class="txt03 reveal fade-up delay_200 fz_24 lh_16 kopubworlddotum normal">
                                치아 삭제가 적은 라미네이트는 <br>
                                부작용이 거의 없는 좋은 심미치료입니다.
                            </p>
                            <p class="txt04 reveal fade-up delay_200 fz_17 lh_16 kopubworlddotum normal">
                                인터서울치과는 개원한 2013년부터 치아 삭제를 최소한으로 하는 <br>
                                라미네이트를 해오고 있습니다. <br>
                                <span class="semibold">충분한 상담</span>과 <span class="semibold">정밀한 진단</span>으로, <span class="semibold">최소한의 치아삭제</span>로 라미네이트가 <br>
                                가능한 경우에만 라미네이트를 추천해 드립니다.
                            </p>
                        </div>
                        <div class="text_box s21_c08_text m_cont_960">
                            <p class="txt01 reveal fade-up delay_200 fz_17 ls_p3 lh_16 sortsmillgoudy normal">
                                LAMIANTE
                            </p>
                            <p class="txt02 reveal fade-up delay_200 fz_35 lh_16 kopubworlddotum normal">
                                <span class="semibold">라미네이트는 치아에 해롭다?</span><br>
                                - 아닙니다!
                            </p>
                            <p class="txt03 reveal fade-up delay_200 fz_24 lh_16 kopubworlddotum normal">
                                치아 삭제가 적은 라미네이트는 <br>
                                부작용이 거의 없는 좋은 심미치료입니다.
                            </p>
                            <p class="txt04 reveal fade-up delay_200 fz_17 lh_16 kopubworlddotum normal">
                                인터서울치과는 개원한 2013년부터 치아 삭제를 <br>
                                최소한으로 하는 라미네이트를 해오고 있습니다. <br>
                                <span class="semibold">충분한 상담</span>과 <span class="semibold">정밀한 진단</span>으로, <span class="semibold">최소한의 치아삭제</span>로 <br>
                                라미네이트가 가능한 경우에만 라미네이트를 추천해 드립니다.
                            </p>
                        </div>
                        <div class="s21_c08_img reveal fade-up delay_200">
                            <p class="s21_c08_big_txt fz_150 lh_1 sortsmillgoudy normal">
                                LAMIANTE
                            </p>
                            <div class="s21_c08_bna pc_cont_960">
                                <img src="<?php echo G5_THEME_URL?>/sub/img/s21_c08_bna01.png" alt="">
                            </div>
                            <div class="s21_c08_bna m_cont_960">
                                <img src="<?php echo G5_THEME_URL?>/sub/img/s21_c08_bna01_m.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="s21_c08_bottom">
                        <div class="text_box s21_c08_bottom_text reveal fade-up delay_200">
                            <i class="check_icon"></i>
                            <p class="txt01 fz_25 lh_16 kopubworlddotum medium">
                                인터서울치과는 <span class="semibold">통합 치의학 전문의가</span> <br>
                                포괄적인 치료계획을 통해 필요한 치주, 교정치료를 <br class="m_cont_960">직접 꼼꼼하게 시행합니다.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </article>
        
        <article class="sub_cont_wrap s21_c09_wrap">
            <div class="s21_c09_bg"></div>
            <div class="s21_c09_bg2"></div>
            <div class="sub_cont_box">
                <div class="sub_box">
                    <div class="s21_c09_box">
                        <div class="text_box s21_c09_text ta_c">
                            <p class="txt01 reveal fade-up delay_200 fz_17 ls_p3 lh_16 sortsmillgoudy normal">
                                Before & After
                            </p>
                            <p class="txt02 reveal fade-up delay_200 fz_32 lh_16 kopubworlddotum normal">
                                전문가는 결과로 증명합니다 <br>
                                탁월한 자연스러움으로 완성된 <br class="m_cont_960">레진/심미치료 케이스를 직접 확인하세요.
                            </p>
                        </div>
                    </div>
                    <div class="s21_c09_bna_wrap">
                        <ul class="s21_c09_bna_ul">
                            <li class="s21_c09_bna_li01">
                                <p class="txt01 reveal fade-up delay_200 fz_22 lh_16 kopubworlddotum medium">
                                    <span class="fz_16 ls_p5">01</span> 20대 여성 ㅣ 벌어진 앞니 레진치료
                                </p>
                                <div class="s21_c09_bna_box reveal fade-up delay_200">
                                    <div class="s21_c09_bna">
                                        <img src="<?php echo G5_THEME_URL?>/sub/img/s21_c09_bna01_b.jpg" alt="">
                                        <div class="bna_date_txt01">
                                            <p class="txt01 c-w fz_14 lh_16 kopubworlddotum normal">
                                                2021.03.27
                                            </p>
                                        </div>
                                    </div>
                                    <div class="s21_c09_bna">
                                        <img src="<?php echo G5_THEME_URL?>/sub/img/s21_c09_bna01_a.jpg" alt="">
                                        <div class="bna_date_txt02">
                                            <p class="txt01 c-w fz_14 lh_16 kopubworlddotum normal">
                                                2021.03.27
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="s21_c09_bna_li02">
                                <p class="txt01 reveal fade-up delay_200 fz_22 lh_16 kopubworlddotum medium">
                                    <span class="fz_16 ls_p5">02</span> 30대 여성 ㅣ 사고로 부러진 앞니 레진치료
                                </p>
                                <div class="s21_c09_bna_box reveal fade-up delay_200">
                                    <div class="s21_c09_bna">
                                        <img src="<?php echo G5_THEME_URL?>/sub/img/s21_c09_bna02_b.jpg" alt="">
                                        <div class="bna_date_txt01">
                                            <p class="txt01 c-w fz_14 lh_16 kopubworlddotum normal">
                                                2021.06.30
                                            </p>
                                        </div>
                                    </div>
                                    <div class="s21_c09_bna">
                                        <img src="<?php echo G5_THEME_URL?>/sub/img/s21_c09_bna02_a.jpg" alt="">
                                        <div class="bna_date_txt02">
                                            <p class="txt01 c-w fz_14 lh_16 kopubworlddotum normal">
                                                2021.06.30
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <p class="txt01 reveal fade-up delay_200 c-w fz_22 lh_16 kopubworlddotum medium">
                                    <span class="fz_16 ls_p5">03</span> 30대 여성 ㅣ 기존 레진 변색으로 인한 레진 재치료
                                </p>
                                <div class="s21_c09_bna_box reveal fade-up delay_200">
                                    <div class="s21_c09_bna">
                                        <img src="<?php echo G5_THEME_URL?>/sub/img/s21_c09_bna03_b.jpg" alt="">
                                        <div class="bna_date_txt01">
                                            <p class="txt01 c-w fz_14 lh_16 kopubworlddotum normal">
                                                2020.12.23
                                            </p>
                                        </div>
                                    </div>
                                    <div class="s21_c09_bna">
                                        <img src="<?php echo G5_THEME_URL?>/sub/img/s21_c09_bna03_a.jpg" alt="">
                                        <div class="bna_date_txt02">
                                            <p class="txt01 c-w fz_14 lh_16 kopubworlddotum normal">
                                                2021.01.20
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <p class="txt01 reveal fade-up delay_200 c-w fz_22 lh_16 kopubworlddotum medium">
                                    <span class="fz_16 ls_p5">04</span> 30대 여성 ㅣ 충치로 부러진 앞니 크라운 & 레진치료
                                </p>
                                <div class="s21_c09_bna_box reveal fade-up delay_200">
                                    <div class="s21_c09_bna">
                                        <img src="<?php echo G5_THEME_URL?>/sub/img/s21_c09_bna04_b.jpg" alt="">
                                        <div class="bna_date_txt01">
                                            <p class="txt01 c-w fz_14 lh_16 kopubworlddotum normal">
                                                2021.01.06
                                            </p>
                                        </div>
                                    </div>
                                    <div class="s21_c09_bna">
                                        <img src="<?php echo G5_THEME_URL?>/sub/img/s21_c09_bna04_a.jpg" alt="">
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
                                    <span class="fz_16 ls_p5">05</span> 30대 여성 ㅣ 기존 라미네이트 착색으로 인한 재치료
                                </p>
                                <div class="s21_c09_bna_box reveal fade-up delay_200">
                                    <div class="s21_c09_bna">
                                        <img src="<?php echo G5_THEME_URL?>/sub/img/s21_c09_bna05_b.jpg" alt="">
                                        <div class="bna_date_txt01">
                                            <p class="txt01 c-w fz_14 lh_16 kopubworlddotum normal">
                                                2020.12.11
                                            </p>
                                        </div>
                                    </div>
                                    <div class="s21_c09_bna">
                                        <img src="<?php echo G5_THEME_URL?>/sub/img/s21_c09_bna05_a.jpg" alt="">
                                        <div class="bna_date_txt02">
                                            <p class="txt01 c-w fz_14 lh_16 kopubworlddotum normal">
                                                2020.12.23
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <p class="txt01 reveal fade-up delay_200 c-w fz_22 lh_16 kopubworlddotum medium">
                                    <span class="fz_16 ls_p5">06</span> 30대 남성 ㅣ 라미네이트 재치료
                                </p>
                                <div class="s21_c09_bna_box reveal fade-up delay_200">
                                    <div class="s21_c09_bna">
                                        <img src="<?php echo G5_THEME_URL?>/sub/img/s21_c09_bna06_b.jpg" alt="">
                                        <div class="bna_date_txt01">
                                            <p class="txt01 c-w fz_14 lh_16 kopubworlddotum normal">
                                                2019.12.10
                                            </p>
                                        </div>
                                    </div>
                                    <div class="s21_c09_bna">
                                        <img src="<?php echo G5_THEME_URL?>/sub/img/s21_c09_bna06_a.jpg" alt="">
                                        <div class="bna_date_txt02">
                                            <p class="txt01 c-w fz_14 lh_16 kopubworlddotum normal">
                                                2020.04.04
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="s21_c09_bottom">
                        <div class="text_box s21_c09_bottom_text reveal fade-up delay_200">
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
        
        <article class="sub_cont_wrap s21_c10_wrap">
            <div class="sub_cont_box">
                <div class="sub_box">
                    <div class="s21_c10_box">
                        <div class="text_box s21_c10_text ta_c">
                            <p class="txt01 reveal fade-up delay_200 fz_17 ls_p3 lh_16 sortsmillgoudy normal">
                                Q & A
                            </p>
                            <p class="txt02 reveal fade-up delay_200 fz_34 lh_16 kopubworlddotum normal">
                                <span class="semibold">심미치료에 대한 궁금증</span> <br class="m_cont_960">인터서울치과가 풀어드립니다.
                            </p>
                        </div>
                    </div>
                    <div class="s21_c10_section_wrap reveal fade-up delay_200">
                        <div id="accordion_wrap" class="s21_c10_accordion_wrap">
                            <!-- Q - 01 -->
                            <div class="s21_c10_qna_wrap">
                                <div class="s21_c10_que s21_c10_que01 on" id="s21_c10_que01">
                                    <a class="s21_c10_que_a" href="javascript:void(0);">
                                        <p class="fz_19 ls_p1 lh_16 kopubworlddotum normal">
                                            <span>Q.</span> <span>레진 치료 후 딱딱한 거 먹어도 되나요?</span>
                                        </p>
                                        
                                        <div class="s21_c10_btn">
                                            <div class="s21_c10_plus">
                                                <div class="line line01"></div>
                                                <div class="line line02"></div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="s21_c10_anw s21_c10_anw01 on">
                                    <div class="s21_c10_anw_box">
                                        <div class="s21_c10_anw_cont s21_c10_anw_cont01">
                                            <p class="txt01 fz_16 lh_16 kopubworlddotum normal pc_cont_960">
                                                치료 직후부터 정상적인 식사를 해도 됩니다. 다만, 자연 치아도 부러질 수 있는 정도의 <br>
                                                상식적인 무리만 하지 않으면 됩니다.
                                            </p>
                                            <p class="txt01 fz_16 lh_16 kopubworlddotum normal m_cont_960">
                                                치료 직후부터 정상적인 식사를 해도 됩니다. <br>
                                                다만, 자연 치아도 부러질 수 있는 정도의 <br>
                                                상식적인 무리만 하지 않으면 됩니다.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Q - 02 -->
                            <div class="s21_c10_qna_wrap">
                                <div class="s21_c10_que s21_c10_que02" id="s21_c10_que02">
                                    <a class="s21_c10_que_a" href="javascript:void(0);">
                                        <p class="fz_19 lh_16 kopubworlddotum normal">
                                            <span>Q.</span> <span>앞니에 실금이 가서 치료를 받고 싶은데 <br class="m_cont_960">레진치료 후 변색이 있지는 않나요?</span>
                                        </p>
                                        
                                        <div class="s21_c10_btn">
                                            <div class="s21_c10_plus">
                                                <div class="line line01"></div>
                                                <div class="line line02"></div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="s21_c10_anw s21_c10_anw02">
                                    <div class="s21_c10_anw_box">
                                        <div class="s21_c10_anw_cont s21_c10_anw_cont01">
                                            <p class="txt01 fz_16 lh_16 kopubworlddotum normal pc_cont_960">
                                                특별히 신경 쓴 레진 치료(충분한 광중합, 면밀한 표면 연마) 이후 변색은 거의 없습니다. <br>
                                                혹시 불의의 외력에 의해서 치아에 상처가 나서 착색이 일어난다면, 치과에서 간단한 연마로 원상회복될 수 있습니다.
                                            </p>
                                            <p class="txt01 fz_16 lh_16 kopubworlddotum normal m_cont_960">
                                                특별히 신경 쓴 레진 치료(충분한 광중합, <br>
                                                면밀한 표면 연마) 이후 변색은 거의 없습니다. <br>
                                                혹시 불의의 외력에 의해서 치아에 상처가 나서 <br>
                                                착색이 일어난다면, 치과에서 간단한 연마로 <br>
                                                원상회복될 수 있습니다.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Q - 03 -->
                            <div class="s21_c10_qna_wrap">
                                <div class="s21_c10_que s21_c10_que03" id="s21_c10_que03">
                                    <a class="s21_c10_que_a" href="javascript:void(0);">
                                        <p class="fz_19 lh_16 kopubworlddotum normal">
                                            <span>Q.</span> <span>교정중인데 심미치료 받을 수 있나요?</span>
                                        </p>
                                        
                                        <div class="s21_c10_btn">
                                            <div class="s21_c10_plus">
                                                <div class="line line01"></div>
                                                <div class="line line02"></div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="s21_c10_anw s21_c10_anw03">
                                    <div class="s21_c10_anw_box">
                                        <div class="s21_c10_anw_cont s21_c10_anw_cont01">
                                            <p class="txt01 fz_16 lh_16 kopubworlddotum normal pc_cont_960">
                                                교정 선생님과 상의 이후 가능합니다. 교정 치료 이후 남은 공간이나 블랙트라이앵글의 경우는 <br>
                                                많은 교정 선생님들이 의뢰를 해주시고 있습니다.
                                            </p>
                                            <p class="txt01 fz_16 lh_16 kopubworlddotum normal m_cont_960">
                                                교정 선생님과 상의 이후 가능합니다. <br>
                                                교정 치료 이후 남은 공간이나 블랙트라이앵글의 경우는 <br>
                                                많은 교정 선생님들이 의뢰를 해주시고 있습니다.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Q - 04 -->
                            <div class="s21_c10_qna_wrap">
                                <div class="s21_c10_que s21_c10_que04" id="s21_c10_que04">
                                    <a class="s21_c10_que_a" href="javascript:void(0);">
                                        <p class="fz_19 lh_16 kopubworlddotum normal">
                                            <span>Q.</span> <span>라미네이트 받을 때 치아삭제 꼭 해야하나요?</span>
                                        </p>
                                        
                                        <div class="s21_c10_btn">
                                            <div class="s21_c10_plus">
                                                <div class="line line01"></div>
                                                <div class="line line02"></div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="s21_c10_anw s21_c10_anw04">
                                    <div class="s21_c10_anw_box">
                                        <div class="s21_c10_anw_cont s21_c10_anw_cont01">
                                            <p class="txt01 fz_16 lh_16 kopubworlddotum normal pc_cont_960">
                                                일부 케이스에는 치아 삭제가 없어도 되는 것은 사실입니다. 저도 제한된 경우에는 무삭제 라미네이트를 <br>
                                                시행하고 있습니다만, 극히 일부 경우에 가능합니다. 이는 학계의 컨센서스라고 볼 수 있고, <br>
                                                일각에서 거의 모든 경우에 무삭제 라미네이트가 가능하다고 홍보하는 경우는 비윤리적이라고 생각합니다.
                                            </p>
                                            <p class="txt01 fz_16 lh_16 kopubworlddotum normal m_cont_960">
                                                일부 케이스에는 치아 삭제가 없어도 되는 것은 <br>
                                                사실입니다. 저도 제한된 경우에는 무삭제 라미네이트를 <br>
                                                시행하고 있습니다만, 극히 일부 경우에 가능합니다. <br>
                                                이는 학계의 컨센서스라고 볼 수 있고, 일각에서 <br>
                                                거의 모든 경우에 무삭제 라미네이트가 가능하다고 <br>
                                                홍보하는 경우는 비윤리적이라고 생각합니다.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Q - 05 -->
                            <div class="s21_c10_qna_wrap">
                                <div class="s21_c10_que s21_c10_que05" id="s21_c10_que05">
                                    <a class="s21_c10_que_a" href="javascript:void(0);">
                                        <p class="fz_19 lh_16 kopubworlddotum normal">
                                            <span>Q.</span> <span>다른곳에서 받은 라미네이트가 부자연스러운데 <br class="m_cont_960">재치료 가능한가요?</span>
                                        </p>
                                        
                                        <div class="s21_c10_btn">
                                            <div class="s21_c10_plus">
                                                <div class="line line01"></div>
                                                <div class="line line02"></div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="s21_c10_anw s21_c10_anw05">
                                    <div class="s21_c10_anw_box">
                                        <div class="s21_c10_anw_cont s21_c10_anw_cont01">
                                            <p class="txt01 fz_16 lh_16 kopubworlddotum normal pc_cont_960">
                                                재치료는 처음 치료보다 체감상 두배는 어려운 치료입니다. 하지만 재치료가 저의 전문 분야이기 때문에 <br>
                                                내원하셔서 상담을 받아보시길 바랍니다. 치료가 왜 잘못되었는지 개선을 위해 뭐가 필요한지 등 <br>
                                                치과 전반에 대한 경험과 통찰이 있는 임상가가 재치료를 해야 성공적인 결과를 얻을 수 있습니다.
                                            </p>
                                            <p class="txt01 fz_16 lh_16 kopubworlddotum normal m_cont_960">
                                                재치료는 처음 치료보다 체감상 두배는 <br>
                                                어려운 치료입니다. 하지만 재치료가 저의 <br>
                                                전문 분야이기 때문에 내원하셔서 상담을 <br>
                                                받아보시길 바랍니다. 치료가 왜 잘못되었는지 <br>
                                                개선을 위해 뭐가 필요한지 등 치과 전반에 대한 <br>
                                                경험과 통찰이 있는 임상가가 재치료를 해야 <br>
                                                성공적인 결과를 얻을 수 있습니다.
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
        var vid_2 = document.getElementById('s21_c07_video');
        vid_2.pause();
    }); 
</script>