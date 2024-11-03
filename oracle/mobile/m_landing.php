<?php
include_once('./_common.php');
include_once(G5_THEME_MOBILE_PATH.'/head.php');

?>



<div id="index">

<div style="max-width:1080px; text-align: center; margin-left:auto; margin-right:auto;">
<img src="https://noteprs.gabia.io/landing_img/2020_1223man_01.png" alt="">
<img src="https://noteprs.gabia.io/landing_img/2020_1223man_02.gif" alt="">
<img src="https://noteprs.gabia.io/landing_img/2020_1223man_03.gif" alt="">
<img src="https://noteprs.gabia.io/landing_img/2020_1223man_04.gif" alt="">
<img src="https://noteprs.gabia.io/landing_img/2020_1223man_05.gif" alt="">
<img src="https://noteprs.gabia.io/landing_img/2020_1223man_06.jpg" alt="">

<div style="position:relative; padding:56.25% 0 0;">
<iframe title="[노트성형외과] 안면윤곽_ 남자 윤곽수술의 모든것" src="https://www.youtube.com/embed/fZq80vB6E5U?feature=oembed&amp;wmode=opaque&amp;rel=0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="" style="position:absolute; top:0; left:0; width:100%; height:100%;"></iframe>
</div>

<div style="position:fixed; left:0; bottom:0; width:100%; height:29vw; z-index:999999999999;" id="db_box">
    <!---------db전송--------->
    <form name="db_side_form2" method="post" onsubmit="return db_side_submit2(this);" action="<?php echo G5_URL ?>/bbs/write_update_good.php">

	    <input type="hidden" name="bo_table" value="db_collect">
        <input type="hidden" name="wr_name">
        <input type="hidden" name="wr_6">
        <!-- <input type="hidden" name="wr_2" value="랜딩"> -->
		<input type="hidden" name="wr_7" value="사이드">

		<input type="hidden" name="wr_1" value="미답변">
		<input type="hidden" name="wr_4" value="신청">
		<input type="hidden" name="wr_5" value="랜딩상담">
        <?php
        $url = "http://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
        ?>
        <input type="hidden" name="wr_content" value="<?=$url?>">
        <?php if(is_mobile()){ ?>
            <input type="hidden" name="wr_10" value="모바일">
        <?php } else { ?>
            <input type="hidden" name="wr_10" value="PC">
        <?php } ?>
        <input type="hidden" name="wr_11" value="확인중">
        <input type="hidden" name="wr_12" value="확인중">
        <input type="hidden" name="wr_13" value="확인중">


		<div style="width: 100%; background: #9d8fa6; position: relative; text-align: center;">
            <div style="position:relative;  padding:3vw 4vw 0 4vw; text-align:left;">
                <span style="color:white; font-size: 4vw; font-weight:900; ">랜딩상담신청 ┃</span>
				<span style="color:white; font-size: 2.5vw; right:0; "><input  name="agree" value="Y" type="checkbox" style="width:3vw; height: 3vw; vertical-align: middle;"> <span class="open"> 개인정보 수집 및 이용 동의 <a href="<?php echo G5_URL?>/sub/privacy.php">[ 자세히보기 ]</a></span></span>
            </div>

            <input type="text" name="wr_3" required class="db_input02" style="height:7vw; width:30%; margin:2vw auto; position: relative;" maxlength="11" placeholder=" 성명">
            <input type="text" name="wr_6" required class="db_input03" style="height:7vw; width:30%;" maxlength="11" placeholder=" 연락처" onKeyup="this.value=this.value.replace(/[^0-9]/g,'')";>
            <select name="wr_2" style="height:7vw; width:30%;" required>
			<option value="" selected disabled hidden>상담 분야</option>
                    <option value="안면윤곽">안면윤곽</option>
					<option value="눈">눈</option>
					<option value="가슴">가슴</option>
					<option value="코">코</option>
					<option value="안티에이징">안티에이징</option>
					<option value="체형">체형</option>
					<option value="쁘띠">쁘띠</option>
					<option value="피부">피부</option>
            </select>
        </div>

        <button style="outline: none; background: none; border: none; width: 100%;padding: 0;"><img src="/img/landing/db_2_new.jpg" width="100%"></button>



        <div style="position: relative;">
			<div style="position:absolute; width:10vw; height:10vw; right:4vw; top:4vw;" class="close">
				<img  src="/img/landing/close.png"  width="100%">
			</div>
			<div class="agree" style="text-align: center;color: #fff;">
				  <input type="radio" name="yak" id="yak" value="yes">
				  <label for="yak">동의</label>

				  <input type="radio" name="yak" id="yak_no" value="no">
				  <label for="yak_no">비동의</label>
			</div>
            <img src="/img/landing/db_3.jpg"  width="100%">
        </div>

    </form>
    <!--------db전송 끝---------->




    <style>

        img[usemap] {
            border: none;
            height: auto;
            max-width: 100%;
            width: auto;
        }
	.agree { position: absolute; top: 39px; font-size: 10px; right: 90px; }

		
    </style>

    <script>

        $(function(){
            $('img[usemap]').rwdImageMaps();
            $("#img").width("100%");
        });

    </script>
    


    <script>
	    $(document).ready(function(){
			$('.open').click(function(){
				$("#db_box").css('height','78vw');
				//$("#empty_box").stop().animate({height:400},500,'easeOutCubic');
            });

			$('.close').click(function(){
				$("#db_box").css('height','29vw');
				$("#empty_box").stop().animate({height:162},500,'easeOutCubic');
            });



		});


		 $("input:checkbox[name=agree]").change(function(){
			if($("input:checkbox[name=agree]").is(":checked")){
				$("#yak_no").prop("checked", false);
				$("#yak").prop("checked", true);
			}else{
				$("#yak").prop("checked", false);
				$("#yak_no").prop("checked", true);
			}
		});

		$("#yak").click(function(){
			$("input:checkbox[name=agree]").prop("checked", true);
		})

		$("#yak_no").click(function(){
			$("input:checkbox[name=agree]").prop("checked", false);
		})

        function db_side_submit2(f){

           /* if (!f.agree.checked) {
                alert("개인정보 수집 및 이용에 동의하셔야 상담문의를 하실 수 있습니다.");
                return false;
            }

	        f.wr_name.value = f.wr_3.value;
            return true;
        }*/
		    if($("input:radio[name='yak']").is(":checked")==true){ // if 시작
				var yak_no = $(":input:radio[name=yak]:checked").val();
				if(yak_no=='no'){
					alert('개인정보 수집 및 이용 미동의 시 참여 불가합니다.!');
					return false;
				}
			}else{ //else 시작
				alert('개인정보 수집 및 이용 동의 시 참여 가능합니다!');
				return false;
			}
			      f.wr_name.value = f.wr_3.value;
            return true;
		}
    </script>





</div>



</div>
<!-- //container -->


<?php include_once(G5_THEME_MOBILE_PATH.'/tail.php');?>
