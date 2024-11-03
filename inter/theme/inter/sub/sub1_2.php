<?php
include_once('./_common.php');
//if (G5_IS_MOBILE) {
//    include_once(G5_MOBILE_PATH.'/index.php');
//    return;
//}


// 웹사이트 타이틀
$g5['title'] = '의료진 소개';

include_once(G5_PATH.'/head.php');
?>
    <style>
        main{background-color:#f9f8f6;}
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
        
        @media (max-width:480px) {
            .glob-icon{background: url(<?php echo G5_THEME_URL?>/img/global-icon-m.png)0 0%/100% no-repeat;}
            .search_icon{background: url(<?php echo G5_THEME_URL?>/img/search-icon-m.png)0 0%/100% no-repeat;}
        }
    </style>
    <main id="content">
        
        <article class="sub_top_cont sub1_2_top_cont" id="startContent">
            <div class="sub_top_cont_wrap">
                <div class="sub_top_view_bg sub1_2_top_view_bg"></div>
                <div class="sub_top_text sub_titlebox ta_l pc_cont_480">
                    <p class="txt01 reveal fade-up delay_200 c-w fz_18 lh_16 sortsmillgoudy normal">
                        인터서울 사람들
                    </p>
                    <p class="txt02 reveal fade-up delay_400 c-w fz_40 ls_p3 lh_14 marcellus medium">
                        We are healthy dental specialists
                    </p>
                    <p class="txt03 reveal fade-up delay_600 c-w fz_16 ls_p2 lh_16 kopubworlddotum normal">
                        불편한 치아를 치료하는 공간의 의미를 넘어 <br>
                        건강한 치아를 지속가능하게 유지할 수 있도록 인터서울의 전문가들이 함께합니다 <br>
                        우리는 인터서울의 건강한 치아 전문가입니다
                    </p>
                </div>
                <div class="sub_top_text sub_titlebox ta_l m_cont_480">
                    <p class="txt01 reveal fade-up delay_200 c-w fz_18 lh_16 sortsmillgoudy normal">
                        인터서울 사람들
                    </p>
                    <p class="txt02 reveal fade-up delay_400 c-w fz_40 ls_p3 lh_14 marcellus medium">
                        We are healthy <br>dental specialists
                    </p>
                    <p class="txt03 reveal fade-up delay_600 c-w fz_16 ls_p2 lh_16 kopubworlddotum normal">
                        불편한 치아를 치료하는 공간의 의미를 넘어 건강한 치아를 <br>
                        지속가능하게 유지할 수 있도록 인터서울의 전문가들이 함께합니다. <br>
                        <br>
                        우리는 인터서울의 건강한 치아 전문가입니다.
                    </p>
                </div>
            </div>
        </article>
        
        <article class="sub_cont_wrap s12_c01_wrap">
            <div class="sub_cont_box pc_cont_960">
                <div class="sub_box flex_row jc_center center">
                    <div class="s12_c01_img_box">
                        <div class="s12_c01_img ta_c">
                            <img src="<?php echo G5_THEME_URL?>/sub/img/s12_c01_doctor01.jpg" alt="">
                        </div>
                    </div>
                    <div class="s12_c01_text_box">
                        <div class="title_box">
                            <p class="txt01 reveal fade-up fz_17 lh_16 sortsmillgoudy normal">
                                Our Doctor
                            </p>
                        </div>
                        <div class="text_box">
                            <p class="txt01 reveal fade-up fz_35 lh_16 kopubworlddotum normal">
                                보다 <span class="semibold span_bg">높은 수준의 치과서비스</span>를 <br>
                                제공하기 위해 노력합니다.
                            </p>
                        </div>
                        <div class="s12_c01_doctor_info_box">
                            <p class="txt01 reveal fade-up">
                                <span class="fz_22 lh_1 kopubworlddotum normal">대표원장</span><span class="fz_35 lh_1 kopubworlddotum semibold">이 창 훈</span>
                            </p>
                            <div class="s12_c01_doctor_info">
                                <div class="s12_c01_doctor reveal fade-up">
                                    <p class="txt01 fz_18 lh_16 kopubworlddotum semibold">
                                        약력
                                    </p>
                                    <ul class="s12_c01_doctor_info_ul">
                                        <li>
                                            <p class="txt01 fz_16 lh_16 kopubworlddotum normal">
                                                현 인터서울치과 대표원장
                                            </p>
                                        </li>
                                        <li>
                                            <p class="txt01 fz_16 lh_16 kopubworlddotum normal">
                                                서울대학교 치과대학 치의학 학사 D.D.S
                                            </p>
                                        </li>
                                        <li>
                                            <p class="txt01 fz_16 lh_16 kopubworlddotum normal">
                                                서울대학교 치과대학치의학 석사 M.S
                                            </p>
                                        </li>
                                        <li>
                                            <p class="txt01 fz_16 lh_16 kopubworlddotum normal">
                                                대한치과마취과학회 정주진정 인정의
                                            </p>
                                        </li>
                                        <li>
                                            <p class="txt01 fz_16 lh_16 kopubworlddotum normal">
                                                대한심미치과학회 이사
                                            </p>
                                        </li>
                                        <li>
                                            <p class="txt01 fz_16 lh_16 kopubworlddotum normal">
                                                한국접착치의학회 총무실행 이사
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="s12_c01_doctor reveal fade-up">
                                    <p class="txt01 fz_18 lh_16 kopubworlddotum semibold">
                                        학술활동 / 수상내역
                                    </p>
                                    <ul class="s12_c01_doctor_info_ul s12_c01_doctor_info_ul02">
                                        <li>
                                            <p class="txt01 fz_16 lh_16 kopubworlddotum normal">
                                                2024 DMG Asia KOLs Meeting
                                            </p>
                                        </li>
                                        <li>
                                            <p class="txt01 fz_16 lh_16 kopubworlddotum normal">
                                                2024, 2023, 2022, 2021<br> CTS플래티넘코스 세미나
                                            </p>
                                        </li>
                                        <li>
                                            <p class="txt01 fz_16 lh_16 kopubworlddotum normal">
                                                2024, 2022, 2018 DV Conference
                                            </p>
                                        </li>
                                        <li>
                                            <p class="txt01 fz_16 lh_16 kopubworlddotum normal">
                                                2023 KDX 학술대회
                                            </p>
                                        </li>
                                        <li>
                                            <p class="txt01 fz_16 lh_16 kopubworlddotum normal">
                                                2023, 2022 DV World 학술대회
                                            </p>
                                        </li>
                                        <li>
                                            <p class="txt01 fz_16 lh_16 kopubworlddotum normal">
                                                2023, 2017 오스템임플란트 수요화상세미나
                                            </p>
                                        </li>
                                        <li>
                                            <p class="txt01 fz_16 lh_16 kopubworlddotum normal">
                                                2023 대한심미치과학회 인정의 교육원
                                            </p>
                                        </li>
                                        <li>
                                            <p class="txt01 fz_16 lh_16 kopubworlddotum normal">
                                                2023 대한심미치과학회 종합학술대회
                                            </p>
                                        </li>
                                        <li>
                                            <p class="txt01 fz_16 lh_16 kopubworlddotum normal">
                                                2023, 2020 서울시치과의사협회 학술대회
                                            </p>
                                        </li>
                                        <li>
                                            <p class="txt01 fz_16 lh_16 kopubworlddotum normal">
                                                2022, 2021, 2020, 2019, 2018<br> 한국접착치의학회 종합학술대회
                                            </p>
                                        </li>
                                        <li>
                                            <p class="txt01 fz_16 lh_16 kopubworlddotum normal">
                                                2022 서울시치과의사협회 구보수교육
                                            </p>
                                        </li>
                                        <li>
                                            <p class="txt01 fz_16 lh_16 kopubworlddotum normal">
                                                2019 한국접착치의학회 부산경남지부학술대회
                                            </p>
                                        </li>
                                        <li>
                                            <p class="txt01 fz_16 lh_16 kopubworlddotum normal">
                                                2019 오스템미팅 강의
                                            </p>
                                        </li>
                                        <li>
                                            <p class="txt01 fz_16 lh_16 kopubworlddotum normal">
                                                2018 오스템임플란트 Meeting
                                            </p>
                                        </li>
                                        <li>
                                            <p class="txt01 fz_16 lh_16 kopubworlddotum normal">
                                                2018 한국접착치의학회 광주전남지부학술대회
                                            </p>
                                        </li>
                                        <li>
                                            <p class="txt01 fz_16 lh_16 kopubworlddotum normal">
                                                2018 박상섭 저, <br>
                                                &lt;이 사람이 말하는 치주&gt; 챕터 공동집필
                                            </p>
                                        </li>
                                        <li>
                                            <p class="txt01 fz_16 lh_16 kopubworlddotum normal">
                                                2018 대한심미치과학회지 증례 게재
                                            </p>
                                        </li>
                                        <li>
                                            <p class="txt01 fz_16 lh_16 kopubworlddotum normal">
                                                2018 한국접착치의학회 추계학술대회 강의
                                            </p>
                                        </li>
                                        <li>
                                            <p class="txt01 fz_16 lh_16 kopubworlddotum normal">
                                                2018 샤인학술대회 강의
                                            </p>
                                        </li>
                                        <li>
                                            <p class="txt01 fz_16 lh_16 kopubworlddotum normal">
                                                2017, 2016 샤인학술대회 학술위원
                                            </p>
                                        </li>
                                        <li>
                                            <p class="txt01 fz_16 lh_16 kopubworlddotum normal">
                                                2016 SIDEX 전시회 美Garrison사 초청 강의
                                            </p>
                                        </li>
                                        <li>
                                            <p class="txt01 fz_16 lh_16 kopubworlddotum normal">
                                                2013 오스템임플란트 우수임상사례 금상
                                            </p>
                                        </li>
                                        <li>
                                            <p class="txt01 fz_16 lh_16 kopubworlddotum normal">
                                                2013 대한심미치과학회 포스터/구연발표
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sub_cont_box m_cont_960">
                <div class="sub_box flex_row jc_center center">
                    <div class="s12_c01_text_box">
                        <div class="title_box">
                            <p class="txt01 reveal fade-up fz_17 lh_16 sortsmillgoudy normal">
                                Our Doctor
                            </p>
                        </div>
                        <div class="text_box">
                            <p class="txt01 reveal fade-up fz_35 lh_16 kopubworlddotum normal">
                                보다 <span class="semibold span_bg">높은 수준의 치과서비스</span>를 <br>
                                제공하기 위해 노력합니다.
                            </p>
                        </div>
                        <div class="s12_c01_text_box">
                            <p class="txt01 reveal fade-up">
                                <span class="fz_22 lh_1 kopubworlddotum normal">대표원장</span>&emsp;<span class="fz_35 lh_1 kopubworlddotum semibold">이 창 훈</span>
                            </p>
                        </div>
                    </div>
                    <div class="s12_c01_img_box">
                        <div class="s12_c01_img ta_c">
                            <img src="<?php echo G5_THEME_URL?>/sub/img/s12_c01_doctor01_m.jpg" alt="">
                        </div>
                    </div>
                    <div class="s12_c01_text_box">
                        <div class="s12_c01_doctor_info_box">
                            <div class="s12_c01_doctor_info">
                                <div class="s12_c01_doctor reveal fade-up">
                                    <p class="txt01 fz_18 lh_16 kopubworlddotum semibold">
                                        약력
                                    </p>
                                    <ul class="s12_c01_doctor_info_ul">
                                        <li>
                                            <p class="txt01 fz_16 lh_16 kopubworlddotum normal">
                                                현 인터서울치과 대표원장
                                            </p>
                                        </li>
                                        <li>
                                            <p class="txt01 fz_16 lh_16 kopubworlddotum normal">
                                                서울대학교 치과대학 치의학 학사 D.D.S
                                            </p>
                                        </li>
                                        <li>
                                            <p class="txt01 fz_16 lh_16 kopubworlddotum normal">
                                                서울대학교 치과대학치의학 석사 M.S
                                            </p>
                                        </li>
                                        <li>
                                            <p class="txt01 fz_16 lh_16 kopubworlddotum normal">
                                                대한치과마취과학회 정주진정 인정의
                                            </p>
                                        </li>
                                        <li>
                                            <p class="txt01 fz_16 lh_16 kopubworlddotum normal">
                                                대한심미치과학회 이사
                                            </p>
                                        </li>
                                        <li>
                                            <p class="txt01 fz_16 lh_16 kopubworlddotum normal">
                                                한국접착치의학회 총무실행 이사
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="s12_c01_doctor reveal fade-up">
                                    <p class="txt01 fz_18 lh_16 kopubworlddotum semibold">
                                        학술활동 / 수상내역
                                    </p>
                                    <ul class="s12_c01_doctor_info_ul s12_c01_doctor_info_ul02">
                                        <li>
                                            <p class="txt01 fz_16 lh_16 kopubworlddotum normal">
                                                2024 DMG Asia KOLs Meeting
                                            </p>
                                        </li>
                                        <li>
                                            <p class="txt01 fz_16 lh_16 kopubworlddotum normal">
                                                2024, 2023, 2022, 2021<br> CTS플래티넘코스 세미나
                                            </p>
                                        </li>
                                        <li>
                                            <p class="txt01 fz_16 lh_16 kopubworlddotum normal">
                                                2024, 2022, 2018 DV Conference
                                            </p>
                                        </li>
                                        <li>
                                            <p class="txt01 fz_16 lh_16 kopubworlddotum normal">
                                                2023 KDX 학술대회
                                            </p>
                                        </li>
                                        <li>
                                            <p class="txt01 fz_16 lh_16 kopubworlddotum normal">
                                                2023, 2022 DV World 학술대회
                                            </p>
                                        </li>
                                        <li>
                                            <p class="txt01 fz_16 lh_16 kopubworlddotum normal">
                                                2023, 2017 오스템임플란트 수요화상세미나
                                            </p>
                                        </li>
                                        <li>
                                            <p class="txt01 fz_16 lh_16 kopubworlddotum normal">
                                                2023 대한심미치과학회 인정의 교육원
                                            </p>
                                        </li>
                                        <li>
                                            <p class="txt01 fz_16 lh_16 kopubworlddotum normal">
                                                2023 대한심미치과학회 종합학술대회
                                            </p>
                                        </li>
                                        <li>
                                            <p class="txt01 fz_16 lh_16 kopubworlddotum normal">
                                                2023, 2020 서울시치과의사협회 학술대회
                                            </p>
                                        </li>
                                        <li>
                                            <p class="txt01 fz_16 lh_16 kopubworlddotum normal">
                                                2022, 2021, 2020, 2019, 2018<br> 한국접착치의학회 종합학술대회
                                            </p>
                                        </li>
                                        <li>
                                            <p class="txt01 fz_16 lh_16 kopubworlddotum normal">
                                                2022 서울시치과의사협회 구보수교육
                                            </p>
                                        </li>
                                        <li>
                                            <p class="txt01 fz_16 lh_16 kopubworlddotum normal">
                                                2019 한국접착치의학회 부산경남지부학술대회
                                            </p>
                                        </li>
                                        <li>
                                            <p class="txt01 fz_16 lh_16 kopubworlddotum normal">
                                                2019 오스템미팅 강의
                                            </p>
                                        </li>
                                        <li>
                                            <p class="txt01 fz_16 lh_16 kopubworlddotum normal">
                                                2018 오스템임플란트 Meeting
                                            </p>
                                        </li>
                                        <li>
                                            <p class="txt01 fz_16 lh_16 kopubworlddotum normal">
                                                2018 한국접착치의학회 광주전남지부학술대회
                                            </p>
                                        </li>
                                        <li>
                                            <p class="txt01 fz_16 lh_16 kopubworlddotum normal">
                                                2018 박상섭 저, <br>
                                                &lt;이 사람이 말하는 치주&gt; 챕터 공동집필
                                            </p>
                                        </li>
                                        <li>
                                            <p class="txt01 fz_16 lh_16 kopubworlddotum normal">
                                                2018 대한심미치과학회지 증례 게재
                                            </p>
                                        </li>
                                        <li>
                                            <p class="txt01 fz_16 lh_16 kopubworlddotum normal">
                                                2018 한국접착치의학회 추계학술대회 강의
                                            </p>
                                        </li>
                                        <li>
                                            <p class="txt01 fz_16 lh_16 kopubworlddotum normal">
                                                2018 샤인학술대회 강의
                                            </p>
                                        </li>
                                        <li>
                                            <p class="txt01 fz_16 lh_16 kopubworlddotum normal">
                                                2017, 2016 샤인학술대회 학술위원
                                            </p>
                                        </li>
                                        <li>
                                            <p class="txt01 fz_16 lh_16 kopubworlddotum normal">
                                                2016 SIDEX 전시회 美Garrison사 초청 강의
                                            </p>
                                        </li>
                                        <li>
                                            <p class="txt01 fz_16 lh_16 kopubworlddotum normal">
                                                2013 오스템임플란트 우수임상사례 금상
                                            </p>
                                        </li>
                                        <li>
                                            <p class="txt01 fz_16 lh_16 kopubworlddotum normal">
                                                2013 대한심미치과학회 포스터/구연발표
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="s12_c01_big_text">
                <p class="txt01 reveal fade-right delay_200 fz_120 lh_1 marcellus normal">
                    INTER SEOUL
                </p>
            </div>
        </article>
        
        <article class="sub_cont_wrap s12_c02_wrap">
            <div class="sub_cont_box pc_cont_960">
                <div class="sub_box flex_row jc_center center">
                    <div class="s12_c02_text_box">
                        <div class="title_box">
                            <p class="txt01 reveal fade-up fz_17 lh_16 sortsmillgoudy normal">
                                Our Doctor
                            </p>
                        </div>
                        <div class="text_box">
                            <p class="txt01 reveal fade-up fz_35 lh_16 kopubworlddotum normal">
                                지속가능한 치아건강을 위해 <br>
                                <span class="semibold span_bg">자연치아 보존</span>을 연구합니다.
                            </p>
                        </div>
                        <div class="s12_c02_doctor_info_box">
                            <p class="txt01 reveal fade-up">
                                <span class="fz_18 lh_1 kopubworlddotum normal">보존과 원장</span><span class="fz_35 lh_1 kopubworlddotum semibold">유 기 영</span>
                            </p>
                            <div class="s12_c02_doctor_info">
                                <div class="s12_c02_doctor2 reveal fade-up">
                                    <p class="txt01 fz_18 lh_16 kopubworlddotum semibold">
                                        약력
                                    </p>
                                    <ul class="s12_c02_doctor_info_ul">
                                        <li>
                                            <p class="txt01 fz_16 lh_16 kopubworlddotum normal">
                                                현 인터서울치과 원장
                                            </p>
                                        </li>
                                        <li>
                                            <p class="txt01 fz_16 lh_16 kopubworlddotum normal">
                                                단국대학교 치과대학 졸업
                                            </p>
                                        </li>
                                        <li>
                                            <p class="txt01 fz_16 lh_16 kopubworlddotum normal">
                                                단국대학교 치과병원 인턴, 레지던트 (치과보존과)
                                            </p>
                                        </li>
                                        <li>
                                            <p class="txt01 fz_16 lh_16 kopubworlddotum normal">
                                                치과보존과 전문의
                                            </p>
                                        </li>
                                        <li>
                                            <p class="txt01 fz_16 lh_16 kopubworlddotum normal">
                                                대한치과근관치료학회 정회원
                                            </p>
                                        </li>
                                        <li>
                                            <p class="txt01 fz_16 lh_16 kopubworlddotum normal">
                                                대한치과보존학회 정회원
                                            </p>
                                        </li>
                                        <li>
                                            <p class="txt01 fz_16 lh_16 kopubworlddotum normal">
                                                대한현미경치과학회 교육이사
                                            </p>
                                        </li>
                                        <li>
                                            <p class="txt01 fz_16 lh_16 kopubworlddotum normal">
                                                APEX 근관치료연구회 정회원
                                            </p>
                                        </li>
                                        <li>
                                            <p class="txt01 fz_16 lh_16 kopubworlddotum normal">
                                                오스템 OIC 근관치료 코스 디렉터
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="s12_c02_img_box">
                        <div class="s12_c02_img ta_c">
                            <img src="<?php echo G5_THEME_URL?>/sub/img/s12_c01_doctor03.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="sub_cont_box m_cont_960">
                <div class="sub_box flex_row jc_center center">
                    <div class="s12_c02_text_box">
                        <div class="title_box">
                            <p class="txt01 reveal fade-up fz_17 lh_16 sortsmillgoudy normal">
                                Our Doctor
                            </p>
                        </div>
                        <div class="text_box">
                            <p class="txt01 reveal fade-up fz_35 lh_16 kopubworlddotum normal">
                                지속가능한 치아건강을 위해 <br>
                                <span class="semibold span_bg">자연치아 보존</span>을 연구합니다.
                            </p>
                        </div>
                        <div class="s12_c02_text_box">
                            <p class="txt01 reveal fade-up">
                                <span class="fz_18 lh_1 kopubworlddotum normal">보존과 원장</span>&emsp;<span class="fz_35 lh_1 kopubworlddotum semibold">유 기 영</span>
                            </p>
                        </div>
                    </div>
                    <div class="s12_c02_img_box">
                        <div class="s12_c02_img ta_c">
                            <img src="<?php echo G5_THEME_URL?>/sub/img/s12_c01_doctor03_m.jpg" alt="">
                        </div>
                    </div>
                    <div class="s12_c02_text_box">
                        <div class="s12_c02_doctor_info_box">
                            <div class="s12_c02_doctor_info">
                                <div class="s12_c02_doctor reveal fade-up">
                                    <p class="txt01 fz_18 lh_16 kopubworlddotum semibold">
                                        약력
                                    </p>
                                    <ul class="s12_c02_doctor_info_ul">
                                        <li>
                                            <p class="txt01 fz_16 lh_16 kopubworlddotum normal">
                                                현 인터서울치과 원장
                                            </p>
                                        </li>
                                        <li>
                                            <p class="txt01 fz_16 lh_16 kopubworlddotum normal">
                                                단국대학교 치과대학 졸업
                                            </p>
                                        </li>
                                        <li>
                                            <p class="txt01 fz_16 lh_16 kopubworlddotum normal">
                                                단국대학교 치과병원 인턴, 레지던트 (치과보존과)
                                            </p>
                                        </li>
                                        <li>
                                            <p class="txt01 fz_16 lh_16 kopubworlddotum normal">
                                                치과보존과 전문의
                                            </p>
                                        </li>
                                        <li>
                                            <p class="txt01 fz_16 lh_16 kopubworlddotum normal">
                                                대한치과근관치료학회 정회원
                                            </p>
                                        </li>
                                        <li>
                                            <p class="txt01 fz_16 lh_16 kopubworlddotum normal">
                                                대한치과보존학회 정회원
                                            </p>
                                        </li>
                                        <li>
                                            <p class="txt01 fz_16 lh_16 kopubworlddotum normal">
                                                대한현미경치과학회 교육이사
                                            </p>
                                        </li>
                                        <li>
                                            <p class="txt01 fz_16 lh_16 kopubworlddotum normal">
                                                APEX 근관치료연구회 정회원
                                            </p>
                                        </li>
                                        <li>
                                            <p class="txt01 fz_16 lh_16 kopubworlddotum normal">
                                                오스템 OIC 근관치료 코스 디렉터
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="s12_c01_big_text">
                <p class="txt01 reveal fade-right delay_200 fz_120 lh_1 marcellus normal">
                    INTER SEOUL
                </p>
            </div>
        </article>
        
        <article class="sub_cont_wrap s12_c01_wrap">
            <div class="sub_cont_box pc_cont_960">
                <div class="sub_box flex_row jc_center center">
                    <div class="s12_c01_img_box">
                        <div class="s12_c01_img ta_c">
                            <img src="<?php echo G5_THEME_URL?>/sub/img/s12_c02_doctor02.jpg" alt="">
                        </div>
                    </div>
                    <div class="s12_c01_text_box">
                        <div class="title_box">
                            <p class="txt01 reveal fade-up fz_17 lh_16 sortsmillgoudy normal">
                                Our Doctor
                            </p>
                        </div>
                        <div class="text_box">
                            <p class="txt01 reveal fade-up fz_35 lh_16 kopubworlddotum normal">
                                믿을 수 있는 <br>
                                <span class="semibold span_bg">정직한 진료</span>를 제공합니다.
                            </p>
                        </div>
                        <div class="s12_c01_doctor_info_box">
                            <p class="txt01 reveal fade-up">
                                <span class="fz_18 lh_1 kopubworlddotum normal">보철과 원장</span><span class="fz_35 lh_1 kopubworlddotum semibold">정 택 영</span>
                            </p>
                            <div class="s12_c01_doctor_info">
                                <div class="s12_c01_doctor reveal fade-up">
                                    <p class="txt01 fz_18 lh_16 kopubworlddotum semibold">
                                        약력
                                    </p>
                                    <ul class="s12_c01_doctor_info_ul">
                                        <li>
                                            <p class="txt01 fz_16 lh_16 kopubworlddotum normal">
                                                현 인터서울치과 보철과 원장
                                            </p>
                                        </li>
                                        <li>
                                            <p class="txt01 fz_16 lh_16 kopubworlddotum normal">
                                                전북대학교 치의학전문대학원
                                            </p>
                                        </li>
                                        <li>
                                            <p class="txt01 fz_16 lh_16 kopubworlddotum normal">
                                                가톨릭대학교 성모병원 보철과 수련
                                            </p>
                                        </li>
                                        <li>
                                            <p class="txt01 fz_16 lh_16 kopubworlddotum normal">
                                                통합치과(AGD) 수료
                                            </p>
                                        </li>
                                        <li>
                                            <p class="txt01 fz_16 lh_16 kopubworlddotum normal">
                                                대한치과보철학회 정회원
                                            </p>
                                        </li>
                                        <li>
                                            <p class="txt01 fz_16 lh_16 kopubworlddotum normal">
                                                대한심미치과학회 정회원
                                            </p>
                                        </li>
                                        <li>
                                            <p class="txt01 fz_16 lh_16 kopubworlddotum normal">
                                                대한통합치과학회 정회원
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sub_cont_box m_cont_960">
                <div class="sub_box flex_row jc_center center">
                    <div class="s12_c01_text_box">
                        <div class="title_box">
                            <p class="txt01 reveal fade-up fz_17 lh_16 sortsmillgoudy normal">
                                Our Doctor
                            </p>
                        </div>
                        <div class="text_box">
                            <p class="txt01 reveal fade-up fz_35 lh_16 kopubworlddotum normal">
                                믿을 수 있는 <br>
                                <span class="semibold span_bg">정직한 진료</span>를 제공합니다.
                            </p>
                        </div>
                        <div class="s12_c01_text_box">
                            <p class="txt01 reveal fade-up">
                                <span class="fz_18 lh_1 kopubworlddotum normal">보철과 원장</span>&emsp;<span class="fz_35 lh_1 kopubworlddotum semibold">정 택 영</span>
                            </p>
                        </div>
                    </div>
                    <div class="s12_c01_img_box">
                        <div class="s12_c01_img ta_c">
                            <img src="<?php echo G5_THEME_URL?>/sub/img/s12_c02_doctor02_m.jpg" alt="">
                        </div>
                    </div>
                    <div class="s12_c01_text_box">
                        <div class="s12_c01_doctor_info_box">
                            <div class="s12_c01_doctor_info">
                                <div class="s12_c01_doctor reveal fade-up">
                                    <p class="txt01 fz_18 lh_16 kopubworlddotum semibold">
                                        약력
                                    </p>
                                    <ul class="s12_c01_doctor_info_ul">
                                        <li>
                                            <p class="txt01 fz_16 lh_16 kopubworlddotum normal">
                                                현 인터서울치과 보철과 원장
                                            </p>
                                        </li>
                                        <li>
                                            <p class="txt01 fz_16 lh_16 kopubworlddotum normal">
                                                전북대학교 치의학전문대학원
                                            </p>
                                        </li>
                                        <li>
                                            <p class="txt01 fz_16 lh_16 kopubworlddotum normal">
                                                가톨릭대학교 성모병원 보철과 수련
                                            </p>
                                        </li>
                                        <li>
                                            <p class="txt01 fz_16 lh_16 kopubworlddotum normal">
                                                통합치과(AGD) 수료
                                            </p>
                                        </li>
                                        <li>
                                            <p class="txt01 fz_16 lh_16 kopubworlddotum normal">
                                                대한치과보철학회 정회원
                                            </p>
                                        </li>
                                        <li>
                                            <p class="txt01 fz_16 lh_16 kopubworlddotum normal">
                                                대한심미치과학회 정회원
                                            </p>
                                        </li>
                                        <li>
                                            <p class="txt01 fz_16 lh_16 kopubworlddotum normal">
                                                대한통합치과학회 정회원
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </article>
        
        <article class="sub_cont_wrap s12_c03_wrap">
            <div class="sub_cont_box">
                <div class="sub_box">
                    <div class="title_box">
                        <p class="txt01 reveal fade-up c-w fz_17 lh_16 sortsmillgoudy normal">
                            Our Staff
                        </p>
                        <p class="txt02 reveal fade-up c-w fz_25 ls_p2 lh_16 kopubworlddotum light">
                            인터서울치과의 <span class="semibold">스태프를 소개합니다.</span>
                        </p>
                    </div>
                    <div class="s12_c03_staff_wrap">
                        <!--<div class="swiper-container s12_c03_staff_swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide s12_c03_staff_slide">
                                    <div class="s12_c03_staff_img ta_c reveal fade-up">
                                        <img src="<?php echo G5_THEME_URL?>/sub/img/s12_c02_staff_img01.png" alt="">
                                        
                                        <div class="s12_c03_staff_text">
                                            <p class="txt01 fz_17 ls_p2 lh_16 sortsmillgoudy normal">
                                                Minsoo Kim
                                            </p>
                                            <p class="txt02 c-w fz_25 ls_p1 lh_16 sortsmillgoudy normal">
                                                치위생사 <span class="semibold">김민수</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide s12_c03_staff_slide">
                                    <div class="s12_c03_staff_img ta_c reveal fade-up">
                                        <img src="<?php echo G5_THEME_URL?>/sub/img/s12_c02_staff_img01.png" alt="">
                                        
                                        <div class="s12_c03_staff_text">
                                            <p class="txt01 fz_17 ls_p2 lh_16 sortsmillgoudy normal">
                                                Chulsoo Kim
                                            </p>
                                            <p class="txt02 c-w fz_25 ls_p1 lh_16 sortsmillgoudy normal">
                                                치위생사 <span class="semibold">김철수</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide s12_c03_staff_slide">
                                    <div class="s12_c03_staff_img ta_c reveal fade-up">
                                        <img src="<?php echo G5_THEME_URL?>/sub/img/s12_c02_staff_img01.png" alt="">
                                        
                                        <div class="s12_c03_staff_text">
                                            <p class="txt01 fz_17 ls_p2 lh_16 sortsmillgoudy normal">
                                                Youngsoo Kim
                                            </p>
                                            <p class="txt02 c-w fz_25 ls_p1 lh_16 sortsmillgoudy normal">
                                                치위생사 <span class="semibold">김영수</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide s12_c03_staff_slide">
                                    <div class="s12_c03_staff_img ta_c reveal fade-up">
                                        <img src="<?php echo G5_THEME_URL?>/sub/img/s12_c02_staff_img01.png" alt="">
                                        
                                        <div class="s12_c03_staff_text">
                                            <p class="txt01 fz_17 ls_p2 lh_16 sortsmillgoudy normal">
                                                Nayoung Kim
                                            </p>
                                            <p class="txt02 c-w fz_25 ls_p1 lh_16 sortsmillgoudy normal">
                                                치위생사 <span class="semibold">김나영</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide s12_c03_staff_slide">
                                    <div class="s12_c03_staff_img ta_c reveal fade-up">
                                        <img src="<?php echo G5_THEME_URL?>/sub/img/s12_c02_staff_img01.png" alt="">
                                        
                                        <div class="s12_c03_staff_text">
                                            <p class="txt01 fz_17 ls_p2 lh_16 sortsmillgoudy normal">
                                                Jiyoung Kim
                                            </p>
                                            <p class="txt02 c-w fz_25 ls_p1 lh_16 sortsmillgoudy normal">
                                                치위생사 <span class="semibold">김지영</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide s12_c03_staff_slide">
                                    <div class="s12_c03_staff_img ta_c reveal fade-up">
                                        <img src="<?php echo G5_THEME_URL?>/sub/img/s12_c02_staff_img01.png" alt="">
                                        
                                        <div class="s12_c03_staff_text">
                                            <p class="txt01 fz_17 ls_p2 lh_16 sortsmillgoudy normal">
                                                Soomin Kim
                                            </p>
                                            <p class="txt02 c-w fz_25 ls_p1 lh_16 sortsmillgoudy normal">
                                                치위생사 <span class="semibold">김수민</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide s12_c03_staff_slide">
                                    <div class="s12_c03_staff_img ta_c reveal fade-up">
                                        <img src="<?php echo G5_THEME_URL?>/sub/img/s12_c02_staff_img01.png" alt="">
                                        
                                        <div class="s12_c03_staff_text">
                                            <p class="txt01 fz_17 ls_p2 lh_16 sortsmillgoudy normal">
                                                Soomi Lee
                                            </p>
                                            <p class="txt02 c-w fz_25 ls_p1 lh_16 sortsmillgoudy normal">
                                                치위생사 <span class="semibold">이수미</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide s12_c03_staff_slide">
                                    <div class="s12_c03_staff_img ta_c reveal fade-up">
                                        <img src="<?php echo G5_THEME_URL?>/sub/img/s12_c02_staff_img01.png" alt="">
                                        
                                        <div class="s12_c03_staff_text">
                                            <p class="txt01 fz_17 ls_p2 lh_16 sortsmillgoudy normal">
                                                Hyuna Gang
                                            </p>
                                            <p class="txt02 c-w fz_25 ls_p1 lh_16 sortsmillgoudy normal">
                                                치위생사 <span class="semibold">강현아</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide s12_c03_staff_slide">
                                    <div class="s12_c03_staff_img ta_c reveal fade-up">
                                        <img src="<?php echo G5_THEME_URL?>/sub/img/s12_c02_staff_img01.png" alt="">
                                        
                                        <div class="s12_c03_staff_text">
                                            <p class="txt01 fz_17 ls_p2 lh_16 sortsmillgoudy normal">
                                                Soogyung Choi
                                            </p>
                                            <p class="txt02 c-w fz_25 ls_p1 lh_16 sortsmillgoudy normal">
                                                치위생사 <span class="semibold">최수경</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>-->
                        <div class="s12_c03_staff_list">
                            <ul>
                                <li class="s12_c03_staff_list01">
                                    <p class="txt01 reveal fade-up delay_200 fz_17 ls_p2 lh_16 sortsmillgoudy normal">
                                        Yunsol Kim
                                    </p>
                                    <p class="txt02 reveal fade-up delay_200 c-w fz_25 ls_p1 lh_16 sortsmillgoudy normal">
                                        치과위생사<br class="m_cont_480"> <span class="semibold">김윤솔</span>&nbsp;<span class="fz_17">실장</span>
                                    </p>
                                </li>
                                <li class="s12_c03_staff_list02">
                                    <p class="txt01 reveal fade-up delay_200 fz_17 ls_p2 lh_16 sortsmillgoudy normal">
                                        Suyeon Kim
                                    </p>
                                    <p class="txt02 reveal fade-up delay_200 c-w fz_25 ls_p1 lh_16 sortsmillgoudy normal">
                                        치과위생사<br class="m_cont_480"> <span class="semibold">김수연</span>
                                    </p>
                                </li>
                                <li class="s12_c03_staff_list03">
                                    <p class="txt01 reveal fade-up delay_200 fz_17 ls_p2 lh_16 sortsmillgoudy normal">
                                        Eunyeong Park
                                    </p>
                                    <p class="txt02 reveal fade-up delay_200 c-w fz_25 ls_p1 lh_16 sortsmillgoudy normal">
                                        치과위생사<br class="m_cont_480"> <span class="semibold">박은영</span>&nbsp;<span class="fz_17">팀장</span>
                                    </p>
                                </li>
                                <li class="s12_c03_staff_list04">
                                    <p class="txt01 reveal fade-up delay_200 fz_17 ls_p2 lh_16 sortsmillgoudy normal">
                                        Minji Kim
                                    </p>
                                    <p class="txt02 reveal fade-up delay_200 c-w fz_25 ls_p1 lh_16 sortsmillgoudy normal">
                                        치과위생사<br class="m_cont_480"> <span class="semibold">김민지</span>
                                    </p>
                                </li>
                                <li class="s12_c03_staff_list05">
                                    <p class="txt01 reveal fade-up delay_200 fz_17 ls_p2 lh_16 sortsmillgoudy normal">
                                        Junghyun Lim
                                    </p>
                                    <p class="txt02 reveal fade-up delay_200 c-w fz_25 ls_p1 lh_16 sortsmillgoudy normal">
                                        치과위생사<br class="m_cont_480"> <span class="semibold">임정현</span>
                                    </p>
                                </li>
                                <li class="s12_c03_staff_list06">
                                    <p class="txt01 reveal fade-up delay_200 fz_17 ls_p2 lh_16 sortsmillgoudy normal">
                                        Yeonji Woo
                                    </p>
                                    <p class="txt02 reveal fade-up delay_200 c-w fz_25 ls_p1 lh_16 sortsmillgoudy normal">
                                        치과위생사<br class="m_cont_480"> <span class="semibold">우연지</span>
                                    </p>
                                </li> 
                                <li class="s12_c03_staff_list07">
                                    <p class="txt01 reveal fade-up delay_200 fz_17 ls_p2 lh_16 sortsmillgoudy normal">
                                        Haeji Kim
                                    </p>
                                    <p class="txt02 reveal fade-up delay_200 c-w fz_25 ls_p1 lh_16 sortsmillgoudy normal">
                                        치과위생사<br class="m_cont_480"> <span class="semibold">김해지</span>
                                    </p>
                                </li>
                                <li class="s12_c03_staff_list08">
                                    <p class="txt01 reveal fade-up delay_200 fz_17 ls_p2 lh_16 sortsmillgoudy normal">
                                        Seonhwa Jeong
                                    </p>
                                    <p class="txt02 reveal fade-up delay_200 c-w fz_25 ls_p1 lh_16 sortsmillgoudy normal">
                                        치과기공사<br class="m_cont_480"> <span class="semibold">정선화</span>
                                    </p>
                                </li>
                            </ul>
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