<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$member_skin_url.'/style.css">', 0);
?>
<div id="reg_result">
    <h2><strong>회원가입이 완료</strong>되었습니다.</h2>
    <div class="reg_result_wr">
        <p class="reg_cong">
            <strong><?php echo get_text($mb['mb_name']); ?></strong>님의 회원가입을 진심으로 축하합니다.<br>
        </p>

        <?php if (is_use_email_certify()) { ?>
        <p>
            회원 가입 시 입력하신 이메일 주소로 인증메일이 발송되었습니다.<br>
            발송된 인증메일을 확인하신 후 인증처리를 하시면 사이트를 원활하게 이용하실 수 있습니다.
        </p>
        <div id="result_email">
            <span>아이디</span>
            <strong><?php echo $mb['mb_id'] ?></strong><br>
            <span>이메일 주소</span>
            <strong><?php echo $mb['mb_email'] ?></strong>
        </div>
        <p>
            이메일 주소를 잘못 입력하셨다면, 사이트 관리자에게 문의해주시기 바랍니다.
        </p>
        <?php } ?>

        <p>
            회원님의 비밀번호는 아무도 알 수 없는 암호화 코드로 저장되므로 안심하셔도 좋습니다.<br>
            아이디, 비밀번호 분실시에는 회원가입시 입력하신 이메일 주소를 이용하여 찾을 수 있습니다.
        </p>

        <p>
            회원 탈퇴는 언제든지 가능하며 일정기간이 지난 후, 회원님의 정보는 삭제하고 있습니다.<br>
            감사합니다.
        </p>
    </div>

    <div class="btn_confirm">
        <a href="<?php echo G5_URL ?>/">메인으로</a>
    </div>

</div>


<!-- Global site tag (gtag.js) - Google Ads: 590741098 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-590741098"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-590741098');
</script>


<!-- WIDERPLANET  SCRIPT START 2020.10.26 -->
<div id="wp_tg_cts" style="display:none;"></div>
<script type="text/javascript">
var wptg_tagscript_vars = wptg_tagscript_vars || [];
wptg_tagscript_vars.push(
(function() {
    return {
        wp_hcuid:"",  /*고객넘버 등 Unique ID (ex. 로그인  ID, 고객넘버 등 )를 암호화하여 대입.
                     *주의 : 로그인 하지 않은 사용자는 어떠한 값도 대입하지 않습니다.*/
        ti:"48388",
        ty:"Join",                        /*트래킹태그 타입 */
        device:"mobile",                  /*디바이스 종류  (web 또는  mobile)*/
        items:[{
            i:"회원 가입",          /*전환 식별 코드  (한글 , 영어 , 번호 , 공백 허용 )*/
            t:"회원 가입",          /*전환명  (한글 , 영어 , 번호 , 공백 허용 )*/
            p:"1",                   /*전환가격  (전환 가격이 없을 경우 1로 설정 )*/
            q:"1"                   /*전환수량  (전환 수량이 고정적으로 1개 이하일 경우 1로 설정 )*/
        }]
    };
}));
</script>
<script type="text/javascript" async src="//cdn-aitg.widerplanet.com/js/wp_astg_4.0.js"></script>
<!-- // WIDERPLANET  SCRIPT END 2020.10.26 -->

<!-- Event snippet for 회원가입 conversion page -->
<script>
  gtag('event', 'conversion', {'send_to': 'AW-590741098/fzUNCIHx1d8BEOr815kC'});
</script>

<!-- 전환페이지 설정 -->
<script type="text/javascript" src="//wcs.naver.net/wcslog.js"></script> 
<script type="text/javascript"> 
var _nasa={};
_nasa["cnv"] = wcs.cnv("2","1"); // 전환유형, 전환가치 설정해야함. 설치매뉴얼 참고
</script> 

<script type="text/javascript" charset="UTF-8" src="//t1.daumcdn.net/adfit/static/kp.js"></script>
<script type="text/javascript">
      kakaoPixel('1220417443283879176').pageView();
      kakaoPixel('1220417443283879176').completeRegistration('회원가입');
</script>



<!-- 공통 적용 스크립트 , 모든 페이지에 노출되도록 설치. 단 전환페이지 설정값보다 항상 하단에 위치해야함 --> 
<script type="text/javascript" src="//wcs.naver.net/wcslog.js"> </script> 
<script type="text/javascript"> 
if (!wcs_add) var wcs_add={};
wcs_add["wa"] = "s_2bccd1331d6a";
if (!_nasa) var _nasa={};
wcs.inflow();
wcs_do(_nasa);
</script>


<!-- Enliple Tracker v3.6 [결제전환] start -->
<script type="text/javascript">
<!--
function mobConv() {
    var cn = new EN();
    cn.setData("uid", "noteprs");
    cn.setData("ordcode", "");
    cn.setData("qty", "1");
    cn.setData("price", "1");
    cn.setData("pnm", encodeURIComponent(encodeURIComponent("register")));
    cn.setSSL(true);
    cn.sendConv();
}
//-->
</script>
<script src="https://cdn.megadata.co.kr/js/en_script/3.6/enliple_min3.6.js" defer="defer" onload="mobConv()"></script>
<!-- Enliple Tracker v3.6 [결제전환] end -->

<!-- Enliple Common Tracker v3.6 [공용] start -->
<script type="text/javascript">
<!--
function mobRf() {
    var rf = new EN();
    rf.setData("userid", "noteprs");
    rf.setSSL(true);
    rf.sendRf();
}
//-->
</script>
<script src="https://cdn.megadata.co.kr/js/en_script/3.6/enliple_min3.6.js" defer="defer" onload="mobRf()"></script>
<!-- Enliple Common Tracker v3.6 [공용] end -->