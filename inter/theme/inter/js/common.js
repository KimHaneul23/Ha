console.log('%c created by. %cFINEAPPLE %cPTL ','color:#8cc677; font-size:14px; background-color:#555; font-weight:600; padding:4px 0;','color:#cbdd54; font-size:14px; background-color:#555; font-weight:600; padding:4px 0;','color:#57b69a; font-size:14px; background-color:#555; font-weight:600; padding:4px 0;');

// html엘리먼트 ie7,8인식;
document.createElement('header');
document.createElement('nav');
document.createElement('article');
document.createElement('section');
document.createElement('aside');
document.createElement('footer');

function isBrowserCheck() {
	const agt = navigator.userAgent.toLowerCase();
	if (agt.indexOf("chrome") != -1) return 'Chrome'
	if (agt.indexOf("opera") != -1) return 'Opera'
	if (agt.indexOf("staroffice") != -1) return 'Star Office'
	if (agt.indexOf("webtv") != -1) return 'WebTV'
	if (agt.indexOf("beonex") != -1) return 'Beonex'
	if (agt.indexOf("chimera") != -1) return 'Chimera'
	if (agt.indexOf("netpositive") != -1) return 'NetPositive'
	if (agt.indexOf("phoenix") != -1) return 'Phoenix'
	if (agt.indexOf("firefox") != -1) return 'Firefox'
	if (agt.indexOf("safari") != -1) return 'Safari'
	if (agt.indexOf("skipstone") != -1) return 'SkipStone'
	if (agt.indexOf("netscape") != -1) return 'Netscape'
	if (agt.indexOf("mozilla/5.0") != -1) return 'Mozilla'
	if (agt.indexOf("msie") != -1) {
		let rv = -1;
		if (navigator.appName == 'Microsoft Internet Explorer') {
			let ua = navigator.userAgent;
			var re = new RegExp("MSIE ([0-9]{1,}[\.0-9]{0,})")
			if (re.exec(ua) != null)
				rv = parseFloat(RegExp.$1)
		}
		return 'Internet Explorer ' + rv
	}
}


function hide(elem){
	gsap.set(elem, {autoAlpha: 0});
}



var clickEvent = (function () {
	if ('ontouchstart' in document.documentElement === true) {
		return 'touchstart';
	} else {
		return 'click';
	}
})(); // 클릭이벤트와 터치이벤트 토글



// header
const header = document.getElementById('header');
const hamberger = document.querySelector('.hamberger');
const hamberger_gnb = document.getElementById('hamberger_gnb');
const gnb_outer_bg = document.getElementById('gnb-outer-bg');
const gnb = document.getElementById('gnb');

const menuEvent = function(e){
	$('html, body').toggleClass('open');
	hamberger.classList.toggle('open');
	gnb.classList.toggle('open');
    hamberger_gnb.classList.toggle('open');
    gnb_outer_bg.classList.toggle('open');
    
    /* 모바일에서 메뉴 버튼 클릭 시 스크롤 멈춤(토글 방식) */
    var ele = document.querySelector('html, body');
    if (!ele) {
        return
    };
    if (ele.style.overflowY == 'hidden') {
        ele.style.overflowY = 'hidden';
        ele.style.height = 'auto';
    } else {
        ele.style.overflowY = 'overlay';
        ele.style.height = 'initial';
    }
    
}

hamberger.addEventListener(clickEvent, menuEvent);
hamberger_gnb.addEventListener(clickEvent, menuEvent);
gnb_outer_bg.addEventListener(clickEvent, menuEvent);


const openBtns = Array.from(document.getElementsByClassName('open-on-hover'));
openBtns.forEach((button)=>{
    button.addEventListener('mouseenter',(e)=>{
        const list = button.getElementsByClassName('open-on-hover-list')[0];
        gsap.fromTo(list,{y:-20,autoAlpha:0},{y:0,autoAlpha:1});
    });
    button.addEventListener('mouseleave',(e)=>{
        const list = button.getElementsByClassName('open-on-hover-list')[0];
        gsap.fromTo(list,{y:0,autoAlpha:1},{y:-20,autoAlpha:0});
    });
});



(function() {
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
    
    
    // Hide Header on on scroll down
    //var offset_main = $("#main_cont_wrap01").offset().top;
    var didScroll;
    var lastScrollTop = 0;
    var delta = 5; // 동작의 구현이 시작되는 위치
    var navbarHeight = $('#main_cont_wrap01').outerHeight(); // 영향을 받을 요소를 선택
    
    // 스크롤시에 사용자가 스크롤했다는 것을 알림
    $(window).scroll(function(event){
        didScroll = true;
    });
    
    // hasScrolled()를 실행하고 didScroll 상태를 재설정
    setInterval(function() {
        if (didScroll) {
            hasScrolled();
            didScroll = false;
        }
    }, 250);
    
    // 동작을 구현
    function hasScrolled() {
        // 접근하기 쉽게 현재 스크롤의 위치를 저장한다.
        var st = $(this).scrollTop();
        
        // 설정한 delta 값보다 더 스크롤되었는지를 확인한다.
        if(Math.abs(lastScrollTop - st) <= delta){
            return;
        }
        
        // 헤더의 높이보다 더 스크롤되었는지 확인하고 스크롤의 방향이 위인지 아래인지를 확인한다.
        if (st > lastScrollTop && st > navbarHeight){
            // Scroll Down
            $('header').removeClass('nav-down').addClass('nav-up');
            $('.s51_fixed_menu').removeClass('nav-down').addClass('nav-up');
        } else {
            // Scroll Up
            if(st + $(window).height() < $(document).height()) {
                $('header').removeClass('nav-up').addClass('nav-down');
                $('.s51_fixed_menu').removeClass('nav-up').addClass('nav-down');
            }
        }
        
        // lastScrollTop 에 현재 스크롤위치를 지정한다.
        lastScrollTop = st;
    }
    
    
})(); // resize 최적화


if (window.NodeList && !NodeList.prototype.forEach) {
  NodeList.prototype.forEach = Array.prototype.forEach;
} // forEach 의 ie 지원


// 스크롤시 헤더 컨트롤
const quick_scroll = document.getElementById("quick");
ScrollTrigger.create({
    trigger: '#main_cont_wrap01',
    start: 'top top',
    end: 99999,
    toggleClass: {className: 'scrolled', targets: '.ht-inner, .main-header, .quick_wrap, .top_btn_wrap'},
    //onEnter: () => {
    //    quick_scroll.classList.remove('top')
    //},
    onLeaveBack: () => {
        quick_scroll.classList.add('open')
    },
});
ScrollTrigger.create({
    trigger: '.s21_box_item_wrap',
    start: 'top 65%',
    end: '30% 50%',
    toggleClass: {className: 'on', targets: '.s21_box_item_wrap'}
});
ScrollTrigger.create({
    trigger: '.s51_fixed_menu',
    start: '-80px top',
    end: 999999,
    //markers:true,
    toggleClass: {className: 'scroll', targets: '.s51_fixed_menu'}
});
ScrollTrigger.create({
    trigger: '.s51_c01_wrap',
    start: '-80px top',
    end: 'bottom 6%',
    //markers:true,
    toggleClass: {className: 'on', targets: '.s51_fixed_menu_li01'}
});
ScrollTrigger.create({
    trigger: '.s51_box_item_wrap',
    start: '-80px top',
    end: 'bottom 6%',
    //markers:true,
    toggleClass: {className: 'on', targets: '.s51_fixed_menu_li02'}
});
ScrollTrigger.create({
    trigger: '.s51_c05_wrap',
    start: '-80px top',
    end: 'bottom 6%',
    //markers:true,
    toggleClass: {className: 'on', targets: '.s51_fixed_menu_li03'}
});
ScrollTrigger.create({
    trigger: '.s51_c06_wrap',
    start: '-80px top',
    end: 'bottom 6%',
    //markers:true,
    toggleClass: {className: 'on', targets: '.s51_fixed_menu_li04'}
});
ScrollTrigger.create({
    trigger: '.s51_c07_wrap',
    start: '-80px top',
    end: 999999,
    //markers:true,
    toggleClass: {className: 'on', targets: '.s51_fixed_menu_li05'}
});

//const topNav = Array.from(document.getElementsByClassName('top_menu'));
var headHei = document.getElementById('header').clientHeight;

/*


ScrollTrigger.create({
    trigger: '.main_cont_wrap06',
    start: 'top 65%',
    end: 99999,
    //markers:true,
    toggleClass: {className: 'on', targets: '.main_cont06_bg'}
});

*/


// 퀵메뉴
const quick = document.getElementById("quick");
const quickBtn = document.getElementById("q_btn");
quickBtn.addEventListener(clickEvent,()=>quick.classList.toggle('open'));




// Detect request animation frame
var scroll = window.requestAnimationFrame ||
             // IE Fallback
             function(callback){ window.setTimeout(callback, 1000/60)};
var elementsToShow = document.querySelectorAll('.reveal'); 

function loop() {

    Array.prototype.forEach.call(elementsToShow, function(element){
      if (isElementInViewport(element)) {
        element.classList.add('active');
      } else {
        element.classList.remove('active');
      }
    });

    scroll(loop);
}

// Call the loop for the first time
loop();

// Helper function from: http://stackoverflow.com/a/7557433/274826
function isElementInViewport(el) {
  // special bonus for those using jQuery
  if (typeof jQuery === "function" && el instanceof jQuery) {
    el = el[0];
  }
  var rect = el.getBoundingClientRect();
  return (
    (rect.top <= 0
      && rect.bottom >= 0)
    ||
    (rect.bottom >= (window.innerHeight || document.documentElement.clientHeight) &&
      rect.top <= (window.innerHeight || document.documentElement.clientHeight))
    ||
    (rect.top >= 0 &&
      rect.bottom <= (window.innerHeight || document.documentElement.clientHeight))
  );
}



// commonTab
function commonTab(tabParent, tabName){
	$("."+tabParent+" ul.main_cont05_tab_list > li").stop().removeClass("active");
	$("."+tabParent+" ul.main_cont05_tab_list > li."+tabName).stop().addClass("active");
	$("."+tabParent+" .main_cont05_tabcont_wrap").stop().removeClass("active");
	$("."+tabParent+" .main_cont05_tabcont_wrap."+tabName).stop().addClass("active");
}
// sub_commonTab
function sub_commonTab(tabParent, tabName){
	$("."+tabParent+" ul.sub2_3_cont02_tab_list > li").stop().removeClass("active");
	$("."+tabParent+" ul.sub2_3_cont02_tab_list > li."+tabName).stop().addClass("active");
	$("."+tabParent+" .sub2_3_cont02_tabcont_wrap").stop().removeClass("active");
	$("."+tabParent+" .sub2_3_cont02_tabcont_wrap."+tabName).stop().addClass("active");
}


$('.counter3').each(function(i) {
	$(this).attr('id','count'+3);
	const thisID_3 = $(this).attr("id");
	const thisCount_3 = $(this).data('count');
    
	var counter_3 = new CountUp(thisID_3, 0, thisCount_3, 0, 5, {  
		useEasing: true,
		useGrouping: true,
		separator: '',
		decimal: '.',
		prefix: '',
	});
    
	var waypoint_3 = new Waypoint({
		element: document.getElementById(thisID_3),
		handler: function(direction) {
			if (direction == "up") {
				counter_3.reset();
			} else {
				counter_3.start();
			}
		},
		offset: '95%'
	});
});
$('.counter4').each(function(i) {
	$(this).attr('id','count'+4);
	const thisID_4 = $(this).attr("id");
	const thisCount_4 = $(this).data('count');
    
	var counter_4 = new CountUp(thisID_4, 0, thisCount_4, 0, 5, {  
		useEasing: true,
		useGrouping: true,
		separator: '',
		decimal: '.',
		prefix: '',
	});
    
	var waypoint_4 = new Waypoint({
		element: document.getElementById(thisID_4),
		handler: function(direction) {
			if (direction == "up") {
				counter_4.reset();
			} else {
				counter_4.start();
			}
		},
		offset: '95%'
	});
});

$('.counter5').each(function(i) {
	$(this).attr('id','count'+5);
	const thisID_5 = $(this).attr("id");
	const thisCount_5 = $(this).data('count');
    
	var counter_5 = new CountUp(thisID_5, 0, thisCount_5, 0, 5, {  
		useEasing: true,
		useGrouping: true,
		separator: '',
		decimal: '.',
		prefix: '',
	});
    
	var waypoint_5 = new Waypoint({
		element: document.getElementById(thisID_5),
		handler: function(direction) {
			if (direction == "up") {
				counter_5.reset();
			} else {
				counter_5.start();
			}
		},
		offset: '85%'
	});
});
$('.counter6').each(function(i) {
	$(this).attr('id','count'+6);
	const thisID_6 = $(this).attr("id");
	const thisCount_6 = $(this).data('count');
    
	var counter_6 = new CountUp(thisID_6, 0, thisCount_6, 0, 5, {  
		useEasing: true,
		useGrouping: true,
		separator: '',
		decimal: '.',
		prefix: '',
	});
    
	var waypoint_6 = new Waypoint({
		element: document.getElementById(thisID_6),
		handler: function(direction) {
			if (direction == "up") {
				counter_6.reset();
			} else {
				counter_6.start();
			}
		},
		offset: '85%'
	});
});
$('.counter5_m').each(function(i) {
	$(this).attr('id','count_m'+5);
	const thisID_5_m = $(this).attr("id");
	const thisCount_5_m = $(this).data('count');
    
	var counter_5_m = new CountUp(thisID_5_m, 0, thisCount_5_m, 0, 5, {  
		useEasing: true,
		useGrouping: true,
		separator: '',
		decimal: '.',
		prefix: '',
	});
    
	var waypoint_5_m = new Waypoint({
		element: document.getElementById(thisID_5_m),
		handler: function(direction) {
			if (direction == "up") {
				counter_5_m.reset();
			} else {
				counter_5_m.start();
			}
		},
		offset: '95%'
	});
});
$('.counter6_m').each(function(i) {
	$(this).attr('id','count_m'+6);
	const thisID_6_m = $(this).attr("id");
	const thisCount_6_m = $(this).data('count');
    
	var counter_6_m = new CountUp(thisID_6_m, 0, thisCount_6_m, 0, 5, {  
		useEasing: true,
		useGrouping: true,
		separator: '',
		decimal: '.',
		prefix: '',
	});
    
	var waypoint_6_m = new Waypoint({
		element: document.getElementById(thisID_6_m),
		handler: function(direction) {
			if (direction == "up") {
				counter_6_m.reset();
			} else {
				counter_6_m.start();
			}
		},
		offset: '95%'
	});
});

$('.counter7').each(function(i) {
	$(this).attr('id','count'+7);
	const thisID_7 = $(this).attr("id");
	const thisCount_7 = $(this).data('count');
    
	var counter_7 = new CountUp(thisID_7, 0, thisCount_7, 0, 5, {  
		useEasing: true,
		useGrouping: true,
		separator: '',
		decimal: '.',
		prefix: '',
	});
    
	var waypoint_7 = new Waypoint({
		element: document.getElementById(thisID_7),
		handler: function(direction) {
			if (direction == "up") {
				counter_7.reset();
			} else {
				counter_7.start();
			}
		},
		offset: '95%'
	});
});

$('.counter8').each(function(i) {
	$(this).attr('id','count'+8);
	const thisID_8 = $(this).attr("id");
	const thisCount_8 = $(this).data('count');
    
	var counter_8 = new CountUp(thisID_8, 0, thisCount_8, 0, 5, {  
		useEasing: true,
		useGrouping: true,
		separator: ',',
		decimal: '.',
		prefix: '',
	});
    
	var waypoint_8 = new Waypoint({
		element: document.getElementById(thisID_8),
		handler: function(direction) {
			if (direction == "up") {
				counter_8.reset();
			} else {
				counter_8.start();
			}
		},
		offset: '95%'
	});
});

$('.counter9').each(function(i) {
	$(this).attr('id','count'+9);
	const thisID_9 = $(this).attr("id");
	const thisCount_9 = $(this).data('count');
    
	var counter_9 = new CountUp(thisID_9, 0, thisCount_9, 0, 5, {  
		useEasing: true,
		useGrouping: true,
		separator: '',
		decimal: '.',
		prefix: '',
	});
    
	var waypoint_9 = new Waypoint({
		element: document.getElementById(thisID_9),
		handler: function(direction) {
			if (direction == "up") {
				counter_9.reset();
			} else {
				counter_9.start();
			}
		},
		offset: '95%'
	});
});


(function() {
    
    $(document).ready(function(){
        
        /* s21_c10 bna */
        $(".s21_c10_anw").hide();
        $(".s21_c10_anw01").show();
        $(".s21_c10_que").click(function(){
            $(this).next().slideToggle(300);
            $(this).next().toggleClass('on');
            $(this).stop().toggleClass('on');
            
            $(".s21_c10_que").not(this).next().slideUp(300);
            $(".s21_c10_que").not(this).stop().removeClass('on');
            
            return false;
        });
        
        /* s41_c06 bna */
        $(".s41_c06_anw").hide();
        $(".s41_c06_anw01").show();
        $(".s41_c06_que").click(function(){
            $(this).next().slideToggle(300);
            $(this).next().toggleClass('on');
            $(this).stop().toggleClass('on');
            
            $(".s41_c06_que").not(this).next().slideUp(300);
            $(".s41_c06_que").not(this).stop().removeClass('on');
            
            return false;
        });
        
        /* s51_c09 bna */
        $(".s51_c09_anw").hide();
        $(".s51_c09_anw01").show();
        $(".s51_c09_que").click(function(){
            $(this).next().slideToggle(300);
            $(this).next().toggleClass('on');
            $(this).stop().toggleClass('on');
            
            $(".s51_c09_que").not(this).next().slideUp(300);
            $(".s51_c09_que").not(this).stop().removeClass('on');
            
            return false;
        });
    });
    
    
    
    // slide 
    /*var s12_c03_staff_swiper = new Swiper('.s12_c03_staff_swiper', {
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
        //centeredSlides: true,
        pagination: {
            el: ".swiper-pagination.s12_c03_staff_pagination",
            type: "progressbar",
        },
    });
    $('.s12_c03_staff_list01').hover(function(){
        s12_c03_staff_swiper.slideTo(0, 1000);
    });
    $('.s12_c03_staff_list02').hover(function(){
        s12_c03_staff_swiper.slideTo(1, 1000);
    });
    $('.s12_c03_staff_list03').hover(function(){
        s12_c03_staff_swiper.slideTo(2, 1000);
    });
    $('.s12_c03_staff_list04').hover(function(){
        s12_c03_staff_swiper.slideTo(3, 1000);
    });
    $('.s12_c03_staff_list05').hover(function(){
        s12_c03_staff_swiper.slideTo(4, 1000);
    });
    $('.s12_c03_staff_list06').hover(function(){
        s12_c03_staff_swiper.slideTo(5, 1000);
    });
    $('.s12_c03_staff_list07').hover(function(){
        s12_c03_staff_swiper.slideTo(6, 1000);
    });
    $('.s12_c03_staff_list08').hover(function(){
        s12_c03_staff_swiper.slideTo(7, 1000);
    });
    $('.s12_c03_staff_list09').hover(function(){
        s12_c03_staff_swiper.slideTo(8, 1000);
    });*/
    
    const quick_btn_swiper = new Swiper('.quick_btn_swiper', {
        slidesPerView:'auto',
        spaceBetween: 0,
        speed:800,
        autoplay: {
            delay: 2200,
            disableOnInteraction: false,
        },
        loop: true,
        loopAdditionalSlides: 1,
        observer: true,
        observeParents: true,
        centeredSlides: true,
        //effect: 'fade',
        //fadeEffect: {
        //  crossFade: true
        //},
    });
    
    $('.open_btn').on('click', function(){
        quick_btn_swiper.autoplay.stop();
    });
    $('.close_btn').on('click', function(){
        quick_btn_swiper.autoplay.start();
    });
    
})(); // resize 최적화


const s11_c05_swiper = new Swiper('.s11_c05_swiper', {
    slidesPerView:'auto',
    spaceBetween: 0,
    speed:1000,
    autoplay: {
        delay: 3500,
        disableOnInteraction: false,
    },
    loop: false,
    loopAdditionalSlides: 1,
    observer: true,
    observeParents: true,
    //centeredSlides: true,
    pagination: {
        el: ".swiper-pagination.s11_c05_pagination",
        type: "progressbar",
    },
});

const s11_c06_swiper = new Swiper('.s11_c06_swiper', {
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
    //centeredSlides: true,
    pagination: {
        el: ".swiper-pagination.s11_c06_pagination",
        type: "progressbar",
    },
});

const s21_c01_swiper = new Swiper('.s21_c01_swiper', {
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
    //centeredSlides: true,
    pagination: {
        el: ".swiper-pagination.s21_c01_pagination",
        clickable: true,
    },
});

const s31_c03_swiper_m = new Swiper('.s31_c03_swiper_m', {
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
    //centeredSlides: true,
    pagination: {
        el: ".swiper-pagination.s31_c03_pagination",
        clickable: true,
    },
});





