console.log('%c created by. %cFINEAPPLE %cPTL ','color:#8cc677; font-size:14px; background-color:#555; font-weight:600; padding:4px 0;','color:#cbdd54; font-size:14px; background-color:#555; font-weight:600; padding:4px 0;','color:#57b69a; font-size:14px; background-color:#555; font-weight:600; padding:4px 0;');


function hide(elem){
	gsap.set(elem, {autoAlpha: 0});
}


// First we get the viewport height and we multiple it by 1% to get a value for a vh unit
let vh = window.innerHeight * 0.01;
// Then we set the value in the --vh custom property to the root of the document
document.documentElement.style.setProperty('--vh', `${vh}px`);

// We listen to the resize event
window.addEventListener('resize', () => {
  // We execute the same script as before
  let vh = window.innerHeight * 0.01;
  document.documentElement.style.setProperty('--vh', `${vh}px`);
});


var clickEvent = (function () {
	if ('ontouchstart' in document.documentElement === true) {
		return 'touchstart';
	} else {
		return 'click';
	}
})(); // 클릭이벤트와 터치이벤트 토글


function setCookie(cname, cvalue, exdays) {
  const d = new Date();
  d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
  let expires = "expires="+d.toUTCString();
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
  let name = cname + "=";
  let ca = document.cookie.split(';');
  for(let i = 0; i < ca.length; i++) {
    let c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}

//쿠키삭제
function deleteCookie(name) { 
  document.cookie = name + '=; expires=Thu, 01 Jan 1970 00:00:01 GMT;'; 
}


(function() {
    
    $('.select_network_kakao').hover(function(){
        $('.select_network_kakao_hover, .select_network_kakao_btn').stop().addClass('hover');
    }, function(){
        $('.select_network_kakao_hover, .select_network_kakao_btn').stop().removeClass('hover');
    });
    
    var throttle = function(type, name, obj) {
        obj = obj || window;
        var running = false;
        var func = function() {
            if (running) { return; }
            running = true;
            requestAnimationFrame(function() {
                obj.dispatchEvent(new CustomEvent(name));
                running = false;
            });
        };
        obj.addEventListener(type, func);
    };

    /* init - you can init any event */
    throttle("resize", "optimizedResize");
    
    
    /* 스크롤 위치 표시 */
    function progress() {
        var windowScrollTop = $(window).scrollTop();
        var docHeight = $(document).height();
        var windowHeight = $(window).height();
        var progress = (windowScrollTop / (docHeight - windowHeight)) * 100;
        var $bgColor = progress > 99 ? '#0f594e' : '#0f594e';
        var $textColor = progress > 99 ? '#fff' : '#fff';
        
        $('.fill').height(progress + '%').css({ backgroundColor: $bgColor });
        
        if(progress > 1){
            $('.topbtn_arrow').addClass('start');
        } else {
            $('.topbtn_arrow').removeClass('start');
        }
    }
    
    progress();
    
    $(document).on('scroll', progress);
    /* //스크롤 위치 표시 */
    
    
    //var yt_video_area = $('.yt-video-area').innerHeight();
    //$('.yt-thumb-area').stop().css('max-height',yt_video_area+'px');
    
    
})(); // resize 최적화




if (window.NodeList && !NodeList.prototype.forEach) {
  NodeList.prototype.forEach = Array.prototype.forEach;
} // forEach 의 ie 지원



// 스크롤시 헤더 컨트롤
ScrollTrigger.create({
	trigger: '#content',
	start: 'top top',
	end: 99999,
	toggleClass: {className: 'scrolled', targets: '.ht-inner, .main-header, .hamberger, .quick-wrap, .percent_wrap'}
});

const quick_btn_end = document.getElementById('quick');
ScrollTrigger.create({
    trigger: '#footer',
    start: '80% bottom',
    end: 99999,
    toggleClass: {className: 'quick_footer', targets: '.quick-wrap'}
});

const select_network_kakao_end = document.getElementById("footer");
if(select_network_kakao_end){
    gsap.utils.toArray(select_network_kakao_end).forEach(function(elem, index){
        ScrollTrigger.create({
            trigger: '#footer',
            start: '50% bottom',
            end: 99999,
            //markers: true,
            toggleClass: {className: 'end', targets: '.select_network_kakao, .percent_wrap'}
        });
    });
}

const select_network_kakao_footer = document.getElementById("footer");
if(select_network_kakao_footer){
    gsap.utils.toArray(select_network_kakao_footer).forEach(function(elem, index){
        ScrollTrigger.create({
            trigger: '#footer',
            start: '80% bottom',
            end: 99999,
            //markers: true,
            toggleClass: {className: 'footer', targets: '.select_network_kakao'}
        });
    });
}





// header
const header = document.getElementById('header');
const hamberger = document.querySelector('.hamberger_pc');
const hamberger_m = document.querySelector('.hamberger_m');
const gnb = document.getElementById('gnb');

const menuEvent = function(){
	document.body.classList.toggle('open');
	this.classList.toggle('open');
	gnb.classList.toggle('open');
    
    /* 모바일에서 메뉴 버튼 클릭 시 스크롤 멈춤(토글 방식) */
    var ele = document.querySelector('html, body');
    if (!ele) {
        return
    };
    if (ele.style.overflow === 'hidden') {
        ele.style.overflow = 'visible';
        ele.style.height = 'initial';
    } else {
        ele.style.overflow = 'hidden';
        ele.style.height = 'auto';
    }
    
}

hamberger.addEventListener(clickEvent, menuEvent);
hamberger_m.addEventListener(clickEvent, menuEvent);

var burgerBtn = hamberger.querySelector('.burger');
var poinTtimer;

function initTimer(){
  poinTtimer = setInterval(timerHandler,2500);
}

function timerHandler(){
  burgerBtn.classList.toggle('open');
}

initTimer();
  
hamberger.addEventListener('mouseenter',function(){
  clearInterval(poinTtimer);
  burgerBtn.classList.add('open');
});
hamberger.addEventListener('mouseleave',function(){
  initTimer();
  burgerBtn.classList.remove('open');
});

var burgerBtn_m = hamberger_m.querySelector('.burger');
var poinTtimer_m;

function initTimer_m(){
  poinTtimer_m = setInterval(timerHandler_m,2500);
}

function timerHandler_m(){
  burgerBtn_m.classList.toggle('open');
}

initTimer_m();
  
hamberger_m.addEventListener('mouseenter',function(){
  clearInterval(poinTtimer_m);
  burgerBtn_m.classList.add('open');
});
hamberger_m.addEventListener('mouseleave',function(){
  initTimer_m();
  burgerBtn_m.classList.remove('open');
});


//const openBtns = Array.from(document.getElementsByClassName('open-on-hover'));
//openBtns.forEach((button)=>{
//  button.addEventListener('mouseenter',(e)=>{
//    const list = button.getElementsByClassName('open-on-hover-list')[0];
//    gsap.fromTo(list,{y:-20,autoAlpha:0},{y:0,autoAlpha:1});
//  });
//  button.addEventListener('mouseleave',(e)=>{
//    const list = button.getElementsByClassName('open-on-hover-list')[0];
//    gsap.fromTo(list,{y:0,autoAlpha:1},{y:-20,autoAlpha:0});
//  });
//});

const sub_click_btn1 = document.getElementById('sub_click_btn1');
const sub_click_btn2 = document.getElementById('sub_click_btn2');
const sub_click_btn3 = document.getElementById('sub_click_btn3');
const sub_click_btn4 = document.getElementById('sub_click_btn4');
const sub_click_btn5 = document.getElementById('sub_click_btn5');
const sub_click_btn6 = document.getElementById('sub_click_btn6');
const sub_click_btn7 = document.getElementById('sub_click_btn7');
const sub_click_btn8 = document.getElementById('sub_click_btn8');
const sub_click_btn9 = document.getElementById('sub_click_btn9');
const sub_click_box1 = document.getElementById('sub_click_box1');
const sub_click_box2 = document.getElementById('sub_click_box2');
const sub_click_box3 = document.getElementById('sub_click_box3');
const sub_click_box4 = document.getElementById('sub_click_box4');
const sub_click_box5 = document.getElementById('sub_click_box5');
const sub_click_box6 = document.getElementById('sub_click_box6');
const sub_click_box7 = document.getElementById('sub_click_box7');
const sub_click_box8 = document.getElementById('sub_click_box8');
const sub_click_box9 = document.getElementById('sub_click_box9');

const click_box1 = function(){
	sub_click_box1.classList.toggle('open');
	sub_click_btn1.classList.toggle('open');
}
const click_box2 = function(){
	sub_click_box2.classList.toggle('open');
	sub_click_btn2.classList.toggle('open');
}
const click_box3 = function(){
	sub_click_box3.classList.toggle('open');
	sub_click_btn3.classList.toggle('open');
}
const click_box4 = function(){
	sub_click_box4.classList.toggle('open');
	sub_click_btn4.classList.toggle('open');
}
const click_box5 = function(){
	sub_click_box5.classList.toggle('open');
	sub_click_btn5.classList.toggle('open');
}
const click_box6 = function(){
	sub_click_box6.classList.toggle('open');
	sub_click_btn6.classList.toggle('open');
}
const click_box7 = function(){
	sub_click_box7.classList.toggle('open');
	sub_click_btn7.classList.toggle('open');
}
const click_box8 = function(){
	sub_click_box8.classList.toggle('open');
	sub_click_btn8.classList.toggle('open');
}
const click_box9 = function(){
	sub_click_box9.classList.toggle('open');
	sub_click_btn9.classList.toggle('open');
}
if(sub_click_btn1){
   sub_click_btn1.addEventListener(clickEvent, click_box1);
}
if(sub_click_btn2){
   sub_click_btn2.addEventListener(clickEvent, click_box2);
}
if(sub_click_btn3){
   sub_click_btn3.addEventListener(clickEvent, click_box3);
}
if(sub_click_btn4){
   sub_click_btn4.addEventListener(clickEvent, click_box4);
}
if(sub_click_btn5){
   sub_click_btn5.addEventListener(clickEvent, click_box5);
}
if(sub_click_btn6){
   sub_click_btn6.addEventListener(clickEvent, click_box6);
}
if(sub_click_btn7){
   sub_click_btn7.addEventListener(clickEvent, click_box7);
}
if(sub_click_btn8){
   sub_click_btn8.addEventListener(clickEvent, click_box8);
}
if(sub_click_btn9){
   sub_click_btn9.addEventListener(clickEvent, click_box9);
}


const gnb_hover_color = document.getElementsByClassName('gnb-menu-list')[0];
const gnb_hover_color_list = document.querySelectorAll('.gnb-menu-list > li');

if(gnb_hover_color){
  
    gnb_hover_color_list.forEach((gnbhover,index)=>{
        gnbhover.addEventListener('mouseenter',function(){
            gnb_hover_color_list.forEach(gnbhover=>gnbhover.classList.add('hover'));
            gnb_hover_color_list[index].classList.remove('hover');
        });
        gnbhover.addEventListener('mouseleave',function(){
            gnb_hover_color_list.forEach(gnbhover=>gnbhover.classList.remove('hover'));
            gnb_hover_color_list[index].classList.remove('hover');
        });
    });
  
}


/* top_menu_nav */
function fnMove(seq){
    var header_height = $('#header').height();
    var offset = $('#sect0' + seq).position().top - header_height;

    $('html, body').stop().animate({scrollTop : offset}, 900, 'swing');
}



// 베스트 랭킹 start
const best_ranking = document.getElementById('best_ranking');
const best_ranking_btn = document.getElementById("best_ranking_btn");
const h_search_icon = document.getElementById("h_search_icon");
const best_ranking_close = document.getElementById("best_ranking_close");
const best_ranking_close_btn = document.getElementById("best_ranking_close_btn");
const best_ranking_dim = document.getElementById("best_ranking_dim");
const rankingEvent = function(){
	best_ranking.classList.toggle('open');
	best_ranking_btn.classList.toggle('open');
	best_ranking_close.classList.toggle('open');
	best_ranking_dim.classList.toggle('open');
    
    /* 모바일에서 메뉴 버튼 클릭 시 스크롤 멈춤(토글 방식) */
    var ele = document.querySelector('html, body');
    if (!ele) {
        return
    };
    if (ele.style.overflow === 'hidden') {
        ele.style.overflow = 'visible';
        ele.style.height = 'initial';
    } else {
        ele.style.overflow = 'hidden';
        ele.style.height = 'auto';
    }
    
}
best_ranking_btn.addEventListener(clickEvent, rankingEvent);


const mainTabSect = document.getElementsByClassName('best_ranking_wrap')[0];
const mainTabList = document.querySelectorAll('.best_ranking_tab_ul > li');
if(mainTabSect){
    gsap.utils.toArray('.tabcontent').forEach(function(elem,idx){
        gsap.set(elem,{display:'none'});
        gsap.set(elem,{autoAlpha:0});
    });
    gsap.set('.tabcontent1',{display:'block'});
    gsap.set('.tabcontent1',{autoAlpha:1});
    mainTabList.forEach((elem,index)=>{
        elem.addEventListener(clickEvent,(e)=>{
            e.preventDefault();
            var evt = e;
            var cityName = elem.getElementsByTagName('a')[0].getAttribute('href');
            openTab(evt, cityName);
        });
    });
    //mainTabList[0].click();
}
function openTab(evt,cityName) {
    // Declare all variables
    var i, tabcontent, tablinks;
    
    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        gsap.to(tabcontent[i],{display:'none'});
        gsap.to(tabcontent[i],{autoAlpha:0});
    }
    
    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    
    // Show the current tab, and add an "active" class to the button that opened the tab
    gsap.to(cityName,{display:'block'});
    gsap.to(cityName,{autoAlpha:1});
    evt.currentTarget.className += " active";
}






if(h_search_icon){
    h_search_icon.addEventListener(clickEvent, function(){
        
        // 랭킹 컨텐츠 공통 start
        var i;
        var slideIndex01 = 0;
        var slideIndex02 = 0;
        
        var slides1_1 = document.getElementsByClassName("best_ranking_list01_1");
        var rankingList = document.querySelectorAll('.best_ranking_content01_ul > li');
        var slides2_1 = document.getElementsByClassName("best_ranking_list02_1");
        var rankingList02 = document.querySelectorAll('.best_ranking_content02_ul > li');
        var slides01 = document.getElementsByClassName("best_ranking_list01");
        var slides02 = document.getElementsByClassName("best_ranking_list02");
        var tablinks01 = document.getElementById("tablinks01");
        var tablinks02 = document.getElementById("tablinks02");
        
        var showSlidesID = setTimeout(function () {
            showSlides();
        }, 1800);
        var showSlidesID_2 = setTimeout(function () {
            showSlides02();
        }, 1800);
        // 랭킹 컨텐츠 공통 end
        
        // 랭킹 탭 컨텐츠 첫번째 start
        function showSlides() {
            
            for (i = 0; i < slides01.length; i++) {
                slides01[i].className = slides01[i].className.replace(" active", "");
            }
            slideIndex01++;
            if (slideIndex01 > slides01.length) {slideIndex01 = 1}    
            slides01[slideIndex01-1].className += " active";
            
            var setTimeoutID = setTimeout(showSlides, 1400); // Change image every 2 seconds
            
            if(best_ranking_close_btn){
                best_ranking_close_btn.addEventListener(clickEvent, function(){
                    for (i = 0; i < slides01.length; i++) {
                        slides01[i].className = slides01[i].className.replace(" active", "");
                    }
                    slides01[0].className += " active";
                    
                    for (i = 0; i < slides02.length; i++) {
                        slides02[i].className = slides02[i].className.replace(" active", "");
                    }
                    slides02[0].className += " active";
                    
                    tablinks01.classList.add('active');
                    tablinks02.classList.remove('active');
                    
                    clearTimeout(showSlidesID);
                    clearTimeout(setTimeoutID);
                    clearTimeout(showSlidesID_2);
                });
            }
            
            if(tablinks01){
                tablinks01.addEventListener(clickEvent, function(){
                    for (i = 0; i < slides01.length; i++) {
                        slides01[i].className = slides01[i].className.replace(" active", "");
                    }
                    slides01[0].className += " active";
                    
                    for (i = 0; i < slides02.length; i++) {
                        slides02[i].className = slides02[i].className.replace(" active", "");
                    }
                    slides02[0].className += " active";
                    
                    setTimeoutID();
                    
                    clearTimeout(showSlidesID);
                    clearTimeout(showSlidesID_2);
                });
            }
            
            if(tablinks02){
                tablinks02.addEventListener(clickEvent, function(){
                    for (i = 0; i < slides01.length; i++) {
                        slides01[i].className = slides01[i].className.replace(" active", "");
                    }
                    slides01[0].className += " active";
                    
                    for (i = 0; i < slides02.length; i++) {
                        slides02[i].className = slides02[i].className.replace(" active", "");
                    }
                    slides02[0].className += " active";
                    
                    showSlides02();
                    
                    clearTimeout(showSlidesID);
                    clearTimeout(setTimeoutID);
                    clearTimeout(showSlidesID_2);
                });
            }
            
            $('.best_ranking_content01_ul > li').on('mouseenter', function(){
                for (i = 0; i < slides01.length; i++) {
                    slides01[i].className = slides01[i].className.replace(" active", "");
                }
                
                for (i = 0; i < slides02.length; i++) {
                    slides02[i].className = slides02[i].className.replace(" active", "");
                }
                
                clearTimeout(showSlidesID);
                clearTimeout(setTimeoutID);
                clearTimeout(showSlidesID_2);
            });
            
        }
        // 랭킹 탭 컨텐츠 첫번째 end
        
        // 랭킹 탭 컨텐츠 두번째 start
        function showSlides02() {
            
            for (i = 0; i < slides02.length; i++) {
                slides02[i].className = slides02[i].className.replace(" active", "");
            }
            slideIndex02++;
            if (slideIndex02 > slides02.length) {slideIndex02 = 1}    
            slides02[slideIndex02-1].className += " active";
            
            var setTimeoutID_2 = setTimeout(showSlides02, 1400); // Change image every 2 seconds
            
            
            if(best_ranking_close_btn){
                best_ranking_close_btn.addEventListener(clickEvent, function(){
                    for (i = 0; i < slides01.length; i++) {
                        slides01[i].className = slides01[i].className.replace(" active", "");
                    }
                    slides01[0].className += " active";
                    
                    for (i = 0; i < slides02.length; i++) {
                        slides02[i].className = slides02[i].className.replace(" active", "");
                    }
                    slides02[0].className += " active";
                    
                    tablinks01.classList.add('active');
                    tablinks02.classList.remove('active');
                    
                    clearTimeout(showSlidesID);
                    clearTimeout(showSlidesID_2);
                    clearTimeout(setTimeoutID_2);
                });
            }
            
            if(tablinks01){
                tablinks01.addEventListener(clickEvent, function(){
                    for (i = 0; i < slides01.length; i++) {
                        slides01[i].className = slides01[i].className.replace(" active", "");
                    }
                    slides01[0].className += " active";
                    
                    for (i = 0; i < slides02.length; i++) {
                        slides02[i].className = slides02[i].className.replace(" active", "");
                    }
                    slides02[0].className += " active";
                    
                    showSlides();
                    
                    clearTimeout(showSlidesID);
                    clearTimeout(showSlidesID_2);
                    clearTimeout(setTimeoutID_2);
                });
            }
            
            if(tablinks02){
                tablinks02.addEventListener(clickEvent, function(){
                    for (i = 0; i < slides01.length; i++) {
                        slides01[i].className = slides01[i].className.replace(" active", "");
                    }
                    slides01[0].className += " active";
                    
                    for (i = 0; i < slides02.length; i++) {
                        slides02[i].className = slides02[i].className.replace(" active", "");
                    }
                    slides02[0].className += " active";
                    
                    setTimeoutID_2();
                    
                    clearTimeout(showSlidesID);
                    clearTimeout(showSlidesID_2);
                });
            }
            
            $('.best_ranking_content02_ul > li').on('mouseenter', function(){
                for (i = 0; i < slides01.length; i++) {
                    slides01[i].className = slides01[i].className.replace(" active", "");
                }
                
                for (i = 0; i < slides02.length; i++) {
                    slides02[i].className = slides02[i].className.replace(" active", "");
                }
                
                clearTimeout(showSlidesID);
                clearTimeout(showSlidesID_2);
                clearTimeout(setTimeoutID_2);
            });
            
        }
        // 랭킹 탭 컨텐츠 두번째 end
        
        // 랭킹 컨텐츠 공통 start
        clearTimeout(showSlidesID_2);
        
        // 랭킹 탭 컨텐츠 첫번째
        $('.best_ranking_content01_ul > li').on('mouseleave', function(){
            showSlides();
            
            clearTimeout(showSlidesID);
            clearTimeout(showSlidesID_2);
        });
        
        // 랭킹 탭 컨텐츠 두번째
        $('.best_ranking_content02_ul > li').on('mouseleave', function(){
            showSlides02();
            
            clearTimeout(showSlidesID);
            clearTimeout(showSlidesID_2);
        });
        // 랭킹 컨텐츠 공통 end
        
    });
}
// 베스트 랭킹 end




// modal - doctors(의료진)
function modalView(modalName){
	if(modalName.includes('doctor')) {
		$(".modal-"+modalName+".transparents-layer").css("display","block").css("opacity","0.5");
	}else {
		$(".modal-"+modalName+".transparents-layer").css("display","block").css("opacity","0.5");
	}
	$(".transparents-layer").attr("onclick", "modalHide('"+modalName+"')");
	$(".modal#"+modalName).css("top","50%").css("right","0%").css("transform","translateY(-50%)").animate({opacity:1}, 500);
	$("html, body").css("overflow","hidden");
	$("#header").css("display","none");
}
function modalHide(modalName){
	$(".modal#"+modalName).animate({opacity:0}, 400, function(){
		$(".modal#"+modalName).css("top", "-99999px").css("right","-50%");
		$("html, body").css("overflow","auto");
		$("#header").css("display","block");
	})
	$(".transparents-layer").animate({opacity:0}, 400, function(){
		$(this).css("display","none");
	});
}

// modal - equipment(장비)
function modalView_equipment(modalName){
	if(modalName.includes('doctor')) {
		$(".modal-"+modalName+".transparents-layer").css("display","block").css("opacity","0.5");
	}else {
		$(".modal-"+modalName+".transparents-layer").css("display","block").css("opacity","0.5");
	}
	$(".transparents-layer").attr("onclick", "modalHide_equipment('"+modalName+"')");
	$(".modal#"+modalName).css("top","48%").css("left","50%").css("transform","translate(-50%,-50%)").animate({opacity:1}, 500);
	$("html, body").css("overflow","hidden");
	$("#header").css("display","none");
}
function modalHide_equipment(modalName){
	$(".modal#"+modalName).animate({opacity:0}, 400, function(){
		$(".modal#"+modalName).css("top", "-99999px").css("left","-99999px");
		$("html, body").css("overflow","auto");
		$("#header").css("display","block");
	})
	$(".transparents-layer").animate({opacity:0}, 400, function(){
		$(this).css("display","none");
	});
}


const equipSect = document.getElementsByClassName('equipment-sect')[0];
const equipList = document.querySelectorAll('.equipment__list > li');
const equipMenu = Array.from(document.getElementsByClassName('equipment-menu-item'));
if(equipSect){
    
    equipList.forEach((equip,index)=>{
        equip.addEventListener('mouseenter',function(){
            equipList.forEach(equips=>equips.classList.remove('hover'));
            equipList[index].classList.add('hover');
            
            equipMenu.forEach(equips=>equips.classList.remove('hover'));
            equipMenu[index].classList.add('hover');
        });
        equip.addEventListener('mouseleave',function(){
            equipList.forEach(equips=>equips.classList.remove('hover'));
            equipList[index].classList.remove('hover');
            
            equipMenu.forEach(equips=>equips.classList.remove('hover'));
            equipMenu[index].classList.remove('hover');
        });
    });
  
}



/* youtube click */
const ytBtns = document.querySelectorAll(".yt-thumb-scroll li");
const ytIframe = document.querySelector(".yt-video-area iframe");
if(ytBtns){
	ytBtns.forEach((btn,index)=>{
		var src = btn.getAttribute('data-yt-url');
		
		btn.addEventListener('click',function(){
			var iframeSrc = 'https://www.youtube.com/embed/'+src;
			ytIframe.setAttribute('src',iframeSrc);
			var tit = btn.querySelector('.yt-tit-txt').textContent;
			var mainTit = document.querySelector('.yt-tit-target');
			mainTit.textContent = tit;
			ytBtns.forEach(btn=>btn.classList.remove('active'));
			btn.classList.add('active');
		});
	})
}


// slide 
// 메인 페이지 swiper 
const main_top_slider_Id = document.getElementById('main_top_slider');
const main_top_slider = new Swiper('.main_top_slider', {
    speed: 1000,
    autoplay: {
        delay: 3800,
        disableOnInteraction: false,
    },
    loop: true,
    loopAdditionalSlides: 1,
    observer: true,
    observeParents: true,
    effect: 'fade',
    fadeEffect: {
      crossFade: true
    },
    pagination: {
        el: '.swiper-pagination.main_slider_pagination',
        clickable: true,
        renderBullet: function (index, className) {
            return '<span class="' + className + ' active"><svg class="circ" width="15" height="15"><circle class="circ1" cx="8" cy="8" r="5" stroke="rgb(0, 0, 0)" stroke-width="2" fill="none"/><circle class="circ2" cx="8" cy="8" r="5" stroke="rgba(255, 255, 255, 0.2)" stroke-width="2" fill="none"/></svg></span>';
        },
    },
    breakpoints: {
        350: {
            pagination: {
                el: '.swiper-pagination.main_slider_pagination',
                clickable: true,
                renderBullet: function (index, className) {
                    return '<span class="' + className + ' active"><svg class="circ" width="10" height="10"><circle class="circ1" cx="5" cy="5" r="4" stroke="rgb(0, 0, 0)" stroke-width="2" fill="none"/><circle class="circ2" cx="5" cy="5" r="4" stroke="rgba(255, 255, 255, 0.2)" stroke-width="2" fill="none"/></svg></span>';
                },
            },
        },
        481: {
            pagination: {
                el: '.swiper-pagination.main_slider_pagination',
                clickable: true,
                renderBullet: function (index, className) {
                    return '<span class="' + className + ' active"><svg class="circ" width="15" height="15"><circle class="circ1" cx="8" cy="8" r="5" stroke="rgb(0, 0, 0)" stroke-width="2" fill="none"/><circle class="circ2" cx="8" cy="8" r="5" stroke="rgba(255, 255, 255, 0.2)" stroke-width="2" fill="none"/></svg></span>';
                },
            },
        },
    },
    on : {
        init : function (){ //홈페이지 로딩 시 바로 실행되는 구문
            main_top_slider_Id.classList.add('main_slider01_active');
            main_top_slider_Id.classList.remove('main_slider02_active');
            main_top_slider_Id.classList.remove('main_slider03_active');
        },
    },
});

main_top_slider.on('transitionStart', function() { 
    if(main_top_slider.realIndex == 0){ //메인 슬라이드 1번 영역에 도착 후 실행되는 구문
        
        header.classList.add('color_change');
        
        main_top_slider_Id.classList.add('main_slider01_active');
        main_top_slider_Id.classList.remove('main_slider02_active');
        main_top_slider_Id.classList.remove('main_slider03_active');
        main_top_slider_Id.classList.remove('main_slider04_active');
        
    } else if(main_top_slider.realIndex == 1){ //메인 슬라이드 2번 영역에 도착 후 실행되는 구문
        
        header.classList.remove('color_change');
        
        main_top_slider_Id.classList.remove('main_slider01_active');
        main_top_slider_Id.classList.add('main_slider02_active');
        main_top_slider_Id.classList.remove('main_slider03_active');
        main_top_slider_Id.classList.remove('main_slider04_active');
        
    } else if(main_top_slider.realIndex == 2){ //메인 슬라이드 3번 영역에 도착 후 실행되는 구문
        
        header.classList.remove('color_change');
        
        main_top_slider_Id.classList.remove('main_slider01_active');
        main_top_slider_Id.classList.remove('main_slider02_active');
        main_top_slider_Id.classList.add('main_slider03_active');
        main_top_slider_Id.classList.remove('main_slider04_active');
        
    } else if(main_top_slider.realIndex == 3){ //메인 슬라이드 4번 영역에 도착 후 실행되는 구문
        
        header.classList.remove('color_change');
        
        main_top_slider_Id.classList.remove('main_slider01_active');
        main_top_slider_Id.classList.remove('main_slider02_active');
        main_top_slider_Id.classList.remove('main_slider03_active');
        main_top_slider_Id.classList.add('main_slider04_active');
        
        
    }
}); 


const header_top_slider = new Swiper('.header_top_slider', {
    slidesPerView: 1,
    direction: 'vertical',
    speed: 1200,
    autoplay: {
        delay: 3500,
        disableOnInteraction: false,
    },
    loop: true,
    loopAdditionalSlides: 1,
    observer: true,
    observeParents: true,
});


const header_left_slider = new Swiper('.header_left_slider', {
    slidesPerView: 1,
    direction: 'vertical',
    speed: 1000,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    loop: true,
    loopAdditionalSlides: 1,
    observer: true,
    observeParents: true,
});


var main_cont02_pagination = ['피부미용','미용성형','피부질환','피부외과','피부기능의학','체형교정'];
const main_cont02_slider_container = new Swiper('.main_cont02_slider_container', {
    slidesPerView:'auto',
    spaceBetween: 0,
    speed:1000,
    autoplay: {
        delay: 3500,
        disableOnInteraction: false,
    },
    loop: true,
    loopAdditionalSlides: 1,
    observer: true,
    observeParents: true,
    navigation: {
        nextEl: ".swiper-button-next.main_cont02_next",
        prevEl: ".swiper-button-prev.main_cont02_prev",
    },
    pagination: {
        el: '.swiper-pagination.main_cont02_pagination',
        clickable: true,
        renderBullet: function (index, className) {
            return '<span class="' + className + '">' + main_cont02_pagination[index] + '</span>';
        },
    },
});

var main_cont02_pagination_m = ['디자인리프팅','수세럼주사','여드름','화이트닝','문신제거','지방흡입'];
const main_cont02_slider_container_m = new Swiper('.main_cont02_slider_container_m', {
    slidesPerView:1,
    spaceBetween: 0,
    speed:1000,
    autoplay: {
        delay: 3500,
        disableOnInteraction: false,
    },
    loop: true,
    loopAdditionalSlides: 1,
    observer: true,
    observeParents: true,
    navigation: {
        nextEl: ".swiper-button-next.main_cont02_next",
        prevEl: ".swiper-button-prev.main_cont02_prev",
    },
    pagination: {
        el: '.swiper-pagination.main_cont02_pagination_m',
        clickable: true,
        renderBullet: function (index, className) {
            return '<span class="' + className + '">' + main_cont02_pagination_m[index] + '</span>';
        },
    },
});

var main_cont04_pagination = ['안티에이징','여드름·홍조','색소','모공·흉터','피부질환','비만·체형','제모·탈모','관리·진단'];
const main_cont04_slider_container = new Swiper('.main_cont04_slider_container', {
    slidesPerView:'auto',
    spaceBetween: 0,
    speed:1000,
    autoplay: {
        delay: 3500,
        disableOnInteraction: false,
    },
    loop: true,
    loopAdditionalSlides: 1,
    observer: true,
    observeParents: true,
    navigation: {
        nextEl: ".swiper-button-next.main_cont04_next",
        prevEl: ".swiper-button-prev.main_cont04_prev",
    },
    pagination: {
        el: '.swiper-pagination.main_cont04_pagination',
        clickable: true,
        renderBullet: function (index, className) {
            return '<span class="' + className + '">' + main_cont04_pagination[index] + '</span>';
        },
    },
});

const main_cont05_slider_container_guwol = new Swiper('.main_cont05_slider_container_guwol', {
    slidesPerView:'auto',
    spaceBetween: 0,
    speed:1000,
    autoplay: {
        delay: 3500,
        disableOnInteraction: false,
    },
    loop: true,
    loopAdditionalSlides: 1,
    observer: true,
    observeParents: true,
    pagination: {
        el: '.swiper-pagination.main_cont05_swiper_guwol_pagination',
        clickable: true,
    },
});
const main_cont05_slider_container_songdo = new Swiper('.main_cont05_slider_container_songdo', {
    slidesPerView:'auto',
    spaceBetween: 0,
    speed:1000,
    autoplay: {
        delay: 3500,
        disableOnInteraction: false,
    },
    loop: true,
    loopAdditionalSlides: 1,
    observer: true,
    observeParents: true,
    pagination: {
        el: '.swiper-pagination.main_cont05_swiper_songdo_pagination',
        clickable: true,
    },
});

function main_cont05_slideTo01(){
	main_cont05_slider_container_guwol.slideTo(0, 0, false);
}
function main_cont05_slideTo02(){
	main_cont05_slider_container_songdo.slideTo(0, 0, false);
}

// commonTab
function commonTab(tabParent, tabName){
	$("."+tabParent+" ul.main_cont05_tab_list > li").stop().removeClass("active");
	$("."+tabParent+" ul.main_cont05_tab_list > li."+tabName).stop().addClass("active");
	$("."+tabParent+" .main_cont05_slider_wrap").stop().removeClass("active");
	$("."+tabParent+" .main_cont05_slider_wrap."+tabName).stop().addClass("active");
}


const main_cont08_slider = new Swiper('.main_cont08_slider', {
    slidesPerView:1,
    spaceBetween: 0,
    speed:800,
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
    },
    loop: true,
    loopAdditionalSlides: 1,
    navigation: {
        nextEl: ".swiper-button-next.main_cont08_next",
        prevEl: ".swiper-button-prev.main_cont08_prev",
    },
    observer: true,
    observeParents: true,
});


const main_cont07_bottom_slide = new Swiper('.main_cont07_bottom_slide', {
    spaceBetween: 100,
    centeredSlides: true,
    speed: 12000,
    autoplay: {
        delay: 1,
    },
    loop: true,
    slidesPerView:'auto',
    allowTouchMove: false,
    disableOnInteraction: true,
    loopAdditionalSlides: 1,
    observer: true,
    observeParents: true,
});


const footer_bottom_slide = new Swiper('.footer_bottom_slide', {
    spaceBetween: 100,
    centeredSlides: true,
    speed: 12000,
    autoplay: {
        delay: 1,
    },
    loop: true,
    slidesPerView:'auto',
    allowTouchMove: false,
    disableOnInteraction: true,
    loopAdditionalSlides: 1,
    observer: true,
    observeParents: true,
});


const main_cont02_m_slider_container = new Swiper('.main_cont02_m_slider_container', {
    slidesPerView: 1.2,
    cssWidthAndHeight: true,
    autoplay: false,
    disableOnInteraction: false,
    loop: false,
    loopAdditionalSlides: 1,
    initialSlide: 0,
    observer: true,
    observeParents: true,
    scrollbar : {
        el : '.swiper-scrollbar',
        draggable: true,
    },
    breakpoints: {
        350: {
            slidesPerView: 1.1,
        },
        415: {
            slidesPerView: 1.2,
        },
        481: {
            slidesPerView: 1.2,
        },
    },
});




const sub1_3_jijeom_swiper = new Swiper('.sub1_3_jijeom_swiper', {
    slidesPerView: 'auto',
    speed:800,
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
    },
    loop: true,
    loopAdditionalSlides: 1,
    pagination: {
        el: '.swiper-pagination.sub1_3_jijeom_pagination',
        clickable: true,
    },
    observer: true,
    observeParents: true,
});

//const sub2_1_ba_slider_cont = new Swiper('.sub2_1_ba_slider_cont', {
//    speed:800,
//    autoplay: {
//        delay: 3000,
//        disableOnInteraction: false,
//    },
//    loop: true,
//    loopAdditionalSlides: 1,
//    pagination: {
//        el: '.swiper-pagination',
//        clickable: true,
//    },
//    observer: true,
//    observeParents: true,
//});

$(function(){

    let sub2_1_ba_slider_cont_options = {};
    if ( $(".sub2_1_ba_slider_cont .swiper-slide.sub2_1_1_ba_slide").length == 2 ) {
        sub2_1_ba_slider_cont_options = {
            speed:800,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            loop: true,
            loopAdditionalSlides: 1,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            observer: true,
            observeParents: true,
        }
    } else {
        sub2_1_ba_slider_cont_options = {
            speed:800,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            loop: false,
            loopAdditionalSlides: 1,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            observer: true,
            observeParents: true,
        }
    }
    var sub2_1_ba_slider_cont = new Swiper('.sub2_1_ba_slider_cont', sub2_1_ba_slider_cont_options);
})

const sub2_1_4_cont5_slider = new Swiper('.sub2_1_4_cont5_slider', {
    slidesPerView: 5.5,
    spaceBetween: 20,
    cssWidthAndHeight: true,
    autoplay: false,
    disableOnInteraction: false,
    loop: false,
    loopAdditionalSlides: 1,
    initialSlide: 0,
    observer: true,
    observeParents: true,
    scrollbar : {
        el : '.swiper-scrollbar',
        draggable: true,
    },
    breakpoints: {
        350: {
            slidesPerView: 2.5,
        },
        415: {
            slidesPerView: 2.5,
        },
        481: {
            slidesPerView: 3.5,
        },
        800: {
            slidesPerView: 5.5,
        },
    },
});

const sub2_5_3_cont7_slider = new Swiper('.sub2_5_3_cont7_slider', {
    slidesPerView: 2.4,
    spaceBetween: 20,
    cssWidthAndHeight: true,
    autoplay: false,
    disableOnInteraction: false,
    loop: false,
    loopAdditionalSlides: 1,
    initialSlide: 0,
    observer: true,
    observeParents: true,
    scrollbar : {
        el : '.swiper-scrollbar',
        draggable: true,
    },
    breakpoints: {
        350: {
            slidesPerView: 1.5,
        },
        415: {
            slidesPerView: 1.5,
        },
        481: {
            slidesPerView: 2.4,
        },
        800: {
            slidesPerView: 2.4,
        },
    },
});


const equipment_top_view_swiper = new Swiper('.equipment_top_view_swiper', {
    speed:800,
    autoplay: false,
    disableOnInteraction: false,
    loop: false,
    loopAdditionalSlides: 1,
    navigation: {
        nextEl: ".swiper-button-next.equipment_top_next",
        prevEl: ".swiper-button-prev.equipment_top_prev",
    },
    observer: true,
    observeParents: true,
});

var sub1_7_page_list = ['피부미용','피부질환','미용성형','피부외과','체형교정'];
const sub1_7_main_slider = new Swiper('.sub1_7_main_slider', {
    mousewheelControl: true,
    mousewheel: true,
    mousewheelForceToAxis: true,
    parallax: true,
    simulateTouch: false,
    direction: 'vertical',
    effect: 'fade',
    autoHeight: true,
    speed: 700,
    autoplay: false,
    loop: false,
    observer: true,
    observeParents: true,
    pagination: {
        el: '.swiper-pagination.sub1_7_slider_pagination',
        clickable: true,
        renderBullet: function (index, className) {
            return '<span class="' + className + '">' + sub1_7_page_list[index] + '</span>';
        },
    },
    watchOverflow : true,
    on: {
        init: function() {
            $(document).ready(function (){
                $('#select_network_kakao').removeClass('end');
                $('#select_network_kakao').removeClass('footer');
            });
        },
        slideChange: function() {
            setTimeout(function () {
                sub1_7_main_slider.params.touchReleaseOnEdges = false;  
                sub1_7_main_slider.params.mousewheel.releaseOnEdges = false;
            });
        },
        reachEnd: function() {
            setTimeout(function () {
                sub1_7_main_slider.params.touchReleaseOnEdges = true;
                sub1_7_main_slider.params.mousewheel.releaseOnEdges = true;
            }, 500);
        },
        reachBeginning: function() {
            setTimeout(function () {
                sub1_7_main_slider.params.touchReleaseOnEdges = true;
                sub1_7_main_slider.params.mousewheel.releaseOnEdges = true;
            }, 500);
        }
    }
});

sub1_7_main_slider.on('transitionStart', function() { 
    if(sub1_7_main_slider.realIndex == 0){ //메인 풀페이지 1번 영역에 왔을때 실행되는 구문
        
        $('.swiper-pagination.sub1_7_slider_pagination').stop().show();
        $('.main-header, .ht-inner').stop().removeClass('scrolled');
        
        if(matchMedia("screen and (max-width: 800px)").matches){// 브라우저 사이즈가 800px 이하일때 
            $(document).ready(function (){
                $('.select_network_kakao.active').removeClass('end');
                $('.select_network_kakao.active').removeClass('footer');
            });
        }
        
    } else if(sub1_7_main_slider.realIndex == 1){ //메인 풀페이지 2번 영역에 왔을때 실행되는 구문
        
        $('.swiper-pagination.sub1_7_slider_pagination').stop().show();
        $('.main-header, .ht-inner').stop().removeClass('scrolled');
        
        if(matchMedia("screen and (max-width: 800px)").matches){// 브라우저 사이즈가 800px 이하일때 
            $(document).ready(function (){
                $('.select_network_kakao.active').removeClass('end');
                $('.select_network_kakao.active').removeClass('footer');
            });
        }
        
    } else if(sub1_7_main_slider.realIndex == 2){ //메인 풀페이지 3번 영역에 왔을때 실행되는 구문
        
        $('.swiper-pagination.sub1_7_slider_pagination').stop().show();
        $('.main-header, .ht-inner').stop().removeClass('scrolled');
        
        if(matchMedia("screen and (max-width: 800px)").matches){// 브라우저 사이즈가 800px 이하일때 
            $(document).ready(function (){
                $('.select_network_kakao.active').removeClass('end');
                $('.select_network_kakao.active').removeClass('footer');
            });
        }
        
    } else if(sub1_7_main_slider.realIndex == 3){ //메인 풀페이지 4번 영역에 왔을때 실행되는 구문
        
        $('.sub1_7_text_ani_remove').stop().addClass('sub1_7_text_ani');
        $('.main-header, .ht-inner').stop().removeClass('scrolled');
        $('.swiper-pagination.sub1_7_slider_pagination').stop().show();
        
        if(matchMedia("screen and (max-width: 800px)").matches){// 브라우저 사이즈가 800px 이하일때 
            $(document).ready(function (){
                $('.select_network_kakao.active').removeClass('end');
                $('.select_network_kakao.active').removeClass('footer');
            });
        }
        
        
    } else if(sub1_7_main_slider.realIndex == 4){ //메인 풀페이지 5번 영역에 왔을때 실행되는 구문
        
        $('.swiper-pagination.sub1_7_slider_pagination').stop().show();
        $('.main-header, .ht-inner').stop().removeClass('scrolled');
        
        if(matchMedia("screen and (max-width: 800px)").matches){ // 브라우저 사이즈가 800px 이하일때 
            $(document).ready(function (){
                $('.select_network_kakao.active').removeClass('end');
                $('.select_network_kakao.active').removeClass('footer');
            });
        }
        
    } 
});






