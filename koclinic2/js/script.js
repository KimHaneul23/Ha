gsap.registerPlugin(ScrollTrigger);


$(function (e) {
    const setVh = () => {
      document.documentElement.style.setProperty('--vh', `${window.innerHeight}px`)
    };
    window.addEventListener('resize', setVh);
    setVh();
});

var clickEvent = (function () {
	if ('ontouchstart' in document.documentElement === true) {
		return 'touchstart';
	} else {
		return 'click';
	}
})();


// header
const header = document.getElementById('header');
const hamburger = document.querySelector('.hamburger');
const gnb = document.getElementById('gnb');

const menuEvent = function(){
	document.body.classList.toggle('open');
	this.classList.toggle('open');
	gnb.classList.toggle('open');
}

hamburger.addEventListener(clickEvent, menuEvent);

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

// gnb
let menuItem = document.querySelectorAll('.gnb-menu-list-m > li');

function addClass(elem,className){
  let max = elem.length;
  for(let i=0;i<max; i++){
    elem[i].classList.add(className);
  }
}
function removeClass(elem,className){
  let max = elem.length;
  for(let i=0;i<max; i++){
    elem[i].classList.remove(className);
  }
}
menuItem.forEach(menu =>{menu.addEventListener(clickEvent,function(e){
  this.tg = e.target;
  this.menuList = this.tg.parentNode;

  if(this.tg.nextElementSibling.classList.contains('m-gnb-menu-depth2')) {
    e.preventDefault();
    if(this.menuList.classList.contains('active')){
      //클릭한 메뉴에 active가 있을때
      removeClass(menuItem,'on');
      this.menuList.classList.remove('active');
      gsap.fromTo(this.menuList,{
          height: (this.tg.offsetHeight + this.tg.nextElementSibling.offsetHeight) + 1,
        },
        {
          height: this.tg.offsetHeight,
          duration: .7
        });
    } else if(!this.menuList.classList.contains('on')){
      //내가 클릭한 메뉴에 on이 없을때 active가 없을때
      removeClass(menuItem,'on');
      this.menuList.classList.add('on');
      // gsap.to(menuItem,
      //   {
      //     height: this.tg.offsetHeight,
      //     duration: .7,
      //     onStart:()=>{removeClass(menuItem,'active');}
      //   });
      menuItem.forEach((el,index)=>{
          gsap.to(el, {
            height: this.tg.offsetHeight,
            duration: .4
          });
        });
      gsap.to(this.menuList,
        {
          height: (this.tg.offsetHeight + this.tg.nextElementSibling.offsetHeight) + 1,
          duration: .7
        });
    } else{
      //클릭한 메뉴에 이미 on이 있을때
      this.menuList.classList.remove('on');
      gsap.to(this.menuList,
        {
          height: this.tg.offsetHeight,
          duration: .7
        });
    }
    
  }
})});



// ellipse-frame
var epFrame = $('.ellipse-frame');
var frameBg = new Array;
var dep1 = $('.gnb-menu-depth1');
frameBg = $('.frame-bg');

dep1.on('mouseenter', function(){
  var frameIdx = $(this).index();
  frameBg.stop().eq(frameIdx).addClass('active');
  epFrame.stop().addClass('bg-none');
});
dep1.on('mouseleave', function(){
  var frameIdx = $(this).index();
  frameBg.stop().eq(frameIdx).removeClass('active');
  epFrame.stop().removeClass('bg-none');
});


ScrollTrigger.matchMedia({
    // all 
    "all": function() {
        
        // point-menu
        const pointSect = document.getElementsByClassName('main-top-visual');
        ScrollTrigger.create({
          trigger: pointSect,
          start: 'top top',
          end: '80% top',
          toggleClass: {className: 'show', targets: '.ht-inner'}
        });

        const cntStart = document.getElementById('ko-header-change');
        ScrollTrigger.create({
          trigger:cntStart,
          start: 'bottom top',
          end: 99999,
          toggleClass: {className: 'scrolled', targets: '.ht-inner'}
        });

        const quickMenu = document.getElementById('header');
        ScrollTrigger.create({
          trigger:quickMenu,
          start: 'bottom top',
          end: 99999,
          toggleClass: {className: 'open', targets: '.quick-wrap'}
        });

        const revealAni = document.getElementsByClassName("gs_reveal");
        if(revealAni){
          gsap.utils.toArray(revealAni).forEach(function(elem, index){
            gsap.set(elem, {autoAlpha: 0}); // assure that the element is hidden when scrolled into view
            const getDelay = elem.getAttribute('data-gs-delay');

            var x = 0,
              y = 60,
              z = -100;

            if (elem.classList.contains('reveal_fromDown')) {
              y = -12
            } else if(elem.classList.contains("reveal_fromUp")){
              y = 12;
            } else if (elem.classList.contains("reveal_fromRight")) {
              x = 30;
              y = 0;
              z = 10;
            } else if (elem.classList.contains("reveal_fromLeft")) {
              x = -600;
              y = 0;
              z = 10;
            } 
            gsap.fromTo(elem, {
              x: x,
              y: y,
              z: z,
              autoAlpha: 0
            }, {
              scrollTrigger: {
                trigger: elem,
                start: 'top 90%',
                end: 99999,
                //onEnter:()=>elem.classList.add('active'),
                toggleClass: {className: 'active', targets: '.gs_reveal'}
                //toggleClass: {className: 'waypoint', targets: '.main-header, #gnb'}
                //markers:true
              },
              duration: .8,
              x: 0,
              y: 0,
              z: 0,
              autoAlpha: 1,
              ease: Power2.easeOut,
              overwrite: "auto",
              delay: getDelay * 0.001
            });
          });
        }/* gs_reveal이 있을때만 실행 */

        const revealAni_m = document.getElementsByClassName("gs_reveal_m");
        if(revealAni_m){
          gsap.utils.toArray(revealAni_m).forEach(function(elem, index){
            gsap.set(elem, {autoAlpha: 0}); // assure that the element is hidden when scrolled into view
            const getDelay_m = elem.getAttribute('data-gs-delay');

            var x = 0,
              y = 60,
              z = -100;

            if (elem.classList.contains('reveal_fromDown_m')) {
              y = -12
            } else if(elem.classList.contains("reveal_fromUp_m")){
              y = 12;
            } else if (elem.classList.contains("reveal_fromRight_m")) {
              x = 30;
              y = 0;
              z = 10;
            } else if (elem.classList.contains("reveal_fromLeft_m")) {
              x = -600;
              y = 0;
              z = 10;
            } 
            gsap.fromTo(elem, {
              x: x,
              y: y,
              z: z,
              autoAlpha: 0
            }, {
              scrollTrigger: {
                trigger: elem,
                start: 'top 80%',
                end: 99999,
                //onEnter:()=>elem.classList.add('active'),
                toggleClass: {className: 'active', targets: '.gs_reveal_m'}
                //toggleClass: {className: 'waypoint', targets: '.main-header, #gnb'}
                //markers:true
              },
              duration: .8,
              x: 0,
              y: 0,
              z: 0,
              autoAlpha: 1,
              ease: Power2.easeOut,
              overwrite: "auto",
              delay: getDelay_m * 0.001
            });
          });
        }/* gs_reveal이 있을때만 실행 */

    }
});

let rangeInput = document.querySelectorAll('.range-input');
rangeInput.forEach(element => {
    element.addEventListener('input', function () {
        let sVal = (element.value) / 100;
        let tgimg = element.closest('.case-area').querySelector('.case-after');
        tgimg.style.opacity = sVal;
        tgimg.classList.add('move');
    })
});


/* slider */
const menu = ['리프팅', '바디 · 체형', '흉살 치료', '쁘띠 · 스킨', '의료진 소개', '고정아클리닉']
const main_fullpage = new Swiper('.main_fullpage', {
    mousewheelControl: true,
    mousewheel: true,
    mousewheelForceToAxis: true,
    paginationClickable: true,
    parallax: true,
    effect: "fade",
    direction: 'vertical',
    autoHeight: true,
    speed: 1200,
    autoplay: false,
    loop: false,
    observer: true,
    observeParents: true,
    pagination: {
    el: '.swiper-pagination',
        clickable: true, // 클릭온
        renderBullet: function (index, className) {
            return '<span class="' + className + '">' + (menu[index]) + '</span>';
            // type: 'fraction', //숫자로
        },
    },
    on : {
        init : function (){ //홈페이지 로딩 시 바로 실행되는 구문
            $('.cnt01_btn01').removeClass('btn_special');
            $('.cnt01_btn04').removeClass('btn_special');
            $('.cnt02_btn01').removeClass('btn_special');
            $('.cnt03_btn01').removeClass('btn_special_w');
            
            setTimeout(function(){
                $('.cnt01_btn01').addClass('btn_special');
                $('.cnt01_btn04').addClass('btn_special');
                $('.cnt02_btn01').addClass('btn_special');
                $('.cnt03_btn01').addClass('btn_special_w');
                
                $('.cont01_text1').addClass('text_ani1');
                $('.cont01_text2').addClass('text_ani2');
                $('.cont01_text3').addClass('text_ani3');
                $('.cont01_text4').addClass('text_ani4');

                $('.cnt01_btn01').addClass('btn_list_ani1');
                $('.cnt01_btn02').addClass('btn_list_ani2');
                $('.cnt01_btn03').addClass('btn_list_ani3');
                $('.cnt01_btn04').addClass('btn_list_ani4');
                $('.cnt01_btn05').addClass('btn_list_ani5');
                $('.cnt01_btn06').addClass('btn_list_ani6');

                $('.main_cnt_btn_slider01').addClass('on');
                $('.main_cnt_btn_slider02').removeClass('on');
                $('.main_cnt_btn_slider03').removeClass('on');
                $('.main_cnt_btn_slider04').removeClass('on');
                $('.main_cnt_btn_slider05').removeClass('on');
                $('.main_cnt_btn_slider06').removeClass('on');

                $('#footer').removeClass('on');
                $('#all_wrap').removeClass('on');
                $('#all_wrap').addClass('scorll');
            }, 5500);
        },
        reachEnd: function () {
            main_fullpage.mousewheel.disable();
        }
    },
});

var main_cnt_btn_slider01 = new Swiper('.main_cnt_btn_slider01', {
    slidesPerView: 4.8,
    speed: 800,
    autoplay: false,
    loop: false,
    loopAdditionalSlides: 1,
    observer: true,
    observeParents: true,
    initialSlide: 0,
    breakpoints: {
        350: {
            slidesPerView: 3.4,
        },
        480: {
            slidesPerView: 3.4,
        },
        640: {
            slidesPerView: 3.9,
        },
        800: {
            slidesPerView: 4.8,
        },
    },
    on : {
        init : function (){ //홈페이지 로딩 시 바로 실행되는 구문
            setTimeout(function(){
                main_cnt_btn_slider01.slideTo(5, 1000);
            }, 6500);
        },
    },
});
const main_cnt_btn_slider02 = new Swiper('.main_cnt_btn_slider02', {
    slidesPerView: 4.8,
    speed: 800,
    autoplay: false,
    loop: false,
    loopAdditionalSlides: 1,
    observer: true,
    observeParents: true,
    initialSlide: 0,
    breakpoints: {
        350: {
            slidesPerView: 3.4,
        },
        480: {
            slidesPerView: 3.4,
        },
        640: {
            slidesPerView: 3.9,
        },
        800: {
            slidesPerView: 4.8,
        },
    },
});
const main_cnt_btn_slider03 = new Swiper('.main_cnt_btn_slider03', {
    slidesPerView: 4.8,
    speed: 800,
    autoplay: false,
    loop: false,
    loopAdditionalSlides: 1,
    observer: true,
    observeParents: true,
    initialSlide: 0,
    breakpoints: {
        350: {
            slidesPerView: 3.4,
        },
        480: {
            slidesPerView: 3.4,
        },
        640: {
            slidesPerView: 3.9,
        },
        800: {
            slidesPerView: 4.8,
        },
    },
});
const main_cnt_btn_slider04 = new Swiper('.main_cnt_btn_slider04', {
    slidesPerView: 4.8,
    speed: 800,
    autoplay: false,
    loop: false,
    loopAdditionalSlides: 1,
    observer: true,
    observeParents: true,
    initialSlide: 0,
    breakpoints: {
        350: {
            slidesPerView: 3.4,
        },
        480: {
            slidesPerView: 3.4,
        },
        640: {
            slidesPerView: 3.9,
        },
        800: {
            slidesPerView: 4.8,
        },
    },
});
const main_cnt_btn_slider05 = new Swiper('.main_cnt_btn_slider05', {
    slidesPerView: 4.8,
    speed: 800,
    autoplay: false,
    loop: false,
    loopAdditionalSlides: 1,
    observer: true,
    observeParents: true,
    initialSlide: 0,
    breakpoints: {
        350: {
            slidesPerView: 3.4,
        },
        480: {
            slidesPerView: 3.4,
        },
        640: {
            slidesPerView: 3.9,
        },
        800: {
            slidesPerView: 4.8,
        },
    },
});
const main_cnt_btn_slider06 = new Swiper('.main_cnt_btn_slider06', {
    slidesPerView: 4.8,
    speed: 800,
    autoplay: false,
    loop: false,
    loopAdditionalSlides: 1,
    observer: true,
    observeParents: true,
    initialSlide: 0,
    breakpoints: {
        350: {
            slidesPerView: 3.4,
        },
        480: {
            slidesPerView: 3.4,
        },
        640: {
            slidesPerView: 3.9,
        },
        800: {
            slidesPerView: 4.8,
        },
    },
});

main_fullpage.on('transitionStart', function() { 
    if(main_fullpage.realIndex == 0){ //메인 풀페이지 1번 영역에 왔을때 실행되는 구문
        console.log('1');
        main_cnt_btn_slider01.slideTo(0, 1000);
        main_cnt_btn_slider02.slideTo(0, 1000);
        main_cnt_btn_slider03.slideTo(0, 1000);
        main_cnt_btn_slider04.slideTo(0, 1000);
        main_cnt_btn_slider05.slideTo(0, 1000);
        main_cnt_btn_slider06.slideTo(0, 1000);
        
        $('#content01').removeClass('start_delay');
        
        $('.cont02_text1').removeClass('text_ani1');
        $('.cont02_text2').removeClass('text_ani2');
        $('.cont02_text3').removeClass('text_ani3');
        $('.cont02_text4').removeClass('text_ani4');
        
        $('.cont03_text1').removeClass('text_ani1');
        $('.cont03_text2').removeClass('text_ani2');
        $('.cont03_text3').removeClass('text_ani3');
        $('.cont03_text4').removeClass('text_ani4');
        
        $('.cont04_text1').removeClass('text_ani1');
        $('.cont04_text2').removeClass('text_ani2');
        $('.cont04_text3').removeClass('text_ani3');
        $('.cont04_text4').removeClass('text_ani4');
        
        $('.cont05_text1').removeClass('text_ani1');
        $('.cont05_text2').removeClass('text_ani2');
        $('.cont05_text3').removeClass('text_ani3');
        $('.cont05_text4').removeClass('text_ani4');
        
        $('.cont06_text1').removeClass('text_ani1');
        $('.cont06_text2').removeClass('text_ani2');
        $('.cont06_text3').removeClass('text_ani3');
        $('.cont06_text4').removeClass('text_ani4');
        
        $('.cnt_btn').removeClass('btn_list_ani1');
        $('.cnt_btn').removeClass('btn_list_ani2');
        $('.cnt_btn').removeClass('btn_list_ani3');
        $('.cnt_btn').removeClass('btn_list_ani4');
        $('.cnt_btn').removeClass('btn_list_ani5');
        $('.cnt_btn').removeClass('btn_list_ani6');
        
        $('.main_cnt_btn_slider02').removeClass('on');
        $('.main_cnt_btn_slider03').removeClass('on');
        $('.main_cnt_btn_slider04').removeClass('on');
        $('.main_cnt_btn_slider05').removeClass('on');
        $('.main_cnt_btn_slider06').removeClass('on');
        
        $('#main_fullpage_left_nav').removeClass('change_color');
        $('#header').removeClass('change_color');
        $('#login-wrap').removeClass('change_color');
        $('#hamburger').removeClass('change_color');
        $('#quick').removeClass('change_color');
        
        $('#footer').removeClass('on');
        $('#all_wrap').removeClass('on');
        $('#all_wrap').removeClass('scorll');
        $('.main_fullpage').removeClass('cont06');
        
        $('.topBtn').removeClass('on');
        
        //$('#player_umbg').get(0).pause();
        $('#player_umbg2').get(0).pause();
        
    } else if(main_fullpage.realIndex == 1){ //메인 풀페이지 2번 영역에 왔을때 실행되는 구문
        console.log('2');
        main_cnt_btn_slider01.slideTo(0, 1000);
        main_cnt_btn_slider02.slideTo(0, 1000);
        main_cnt_btn_slider03.slideTo(0, 1000);
        main_cnt_btn_slider04.slideTo(0, 1000);
        main_cnt_btn_slider05.slideTo(0, 1000);
        main_cnt_btn_slider06.slideTo(0, 1000);
        
        $('#content01').removeClass('start_delay');
        
        $('.cont01_text1').removeClass('text_ani1');
        $('.cont01_text2').removeClass('text_ani2');
        $('.cont01_text3').removeClass('text_ani3');
        $('.cont01_text4').removeClass('text_ani4');
        
        $('.cont03_text1').removeClass('text_ani1');
        $('.cont03_text2').removeClass('text_ani2');
        $('.cont03_text3').removeClass('text_ani3');
        $('.cont03_text4').removeClass('text_ani4');
        
        $('.cont04_text1').removeClass('text_ani1');
        $('.cont04_text2').removeClass('text_ani2');
        $('.cont04_text3').removeClass('text_ani3');
        $('.cont04_text4').removeClass('text_ani4');
        
        $('.cont05_text1').removeClass('text_ani1');
        $('.cont05_text2').removeClass('text_ani2');
        $('.cont05_text3').removeClass('text_ani3');
        $('.cont05_text4').removeClass('text_ani4');
        
        $('.cont06_text1').removeClass('text_ani1');
        $('.cont06_text2').removeClass('text_ani2');
        $('.cont06_text3').removeClass('text_ani3');
        $('.cont06_text4').removeClass('text_ani4');
        
        $('.cnt_btn').removeClass('btn_list_ani1');
        $('.cnt_btn').removeClass('btn_list_ani2');
        $('.cnt_btn').removeClass('btn_list_ani3');
        $('.cnt_btn').removeClass('btn_list_ani4');
        $('.cnt_btn').removeClass('btn_list_ani5');
        $('.cnt_btn').removeClass('btn_list_ani6');
        
        $('.main_cnt_btn_slider01').removeClass('on');
        $('.main_cnt_btn_slider03').removeClass('on');
        $('.main_cnt_btn_slider04').removeClass('on');
        $('.main_cnt_btn_slider05').removeClass('on');
        $('.main_cnt_btn_slider06').removeClass('on');
        
        $('#main_fullpage_left_nav').removeClass('change_color');
        $('#header').removeClass('change_color');
        $('#login-wrap').removeClass('change_color');
        $('#hamburger').removeClass('change_color');
        $('#quick').removeClass('change_color');
        
        $('#footer').removeClass('on');
        $('#all_wrap').removeClass('on');
        $('#all_wrap').removeClass('scorll');
        $('.main_fullpage').removeClass('cont06');
        
        
        $('.topBtn').addClass('on');
        
        //$('#player_umbg').get(0).pause();
        $('#player_umbg2').get(0).pause();
        
    } else if(main_fullpage.realIndex == 2){ //메인 풀페이지 3번 영역에 왔을때 실행되는 구문
        console.log('3');
        main_cnt_btn_slider01.slideTo(0, 1000);
        main_cnt_btn_slider02.slideTo(0, 1000);
        main_cnt_btn_slider03.slideTo(0, 1000);
        main_cnt_btn_slider04.slideTo(0, 1000);
        main_cnt_btn_slider05.slideTo(0, 1000);
        main_cnt_btn_slider06.slideTo(0, 1000);
        
        $('#content01').removeClass('start_delay');
        
        $('.cont01_text1').removeClass('text_ani1');
        $('.cont01_text2').removeClass('text_ani2');
        $('.cont01_text3').removeClass('text_ani3');
        $('.cont01_text4').removeClass('text_ani4');
        
        $('.cont02_text1').removeClass('text_ani1');
        $('.cont02_text2').removeClass('text_ani2');
        $('.cont02_text3').removeClass('text_ani3');
        $('.cont02_text4').removeClass('text_ani4');
        
        $('.cont04_text1').removeClass('text_ani1');
        $('.cont04_text2').removeClass('text_ani2');
        $('.cont04_text3').removeClass('text_ani3');
        $('.cont04_text4').removeClass('text_ani4');
        
        $('.cont05_text1').removeClass('text_ani1');
        $('.cont05_text2').removeClass('text_ani2');
        $('.cont06_text3').removeClass('text_ani3');
        $('.cont06_text4').removeClass('text_ani4');
        
        $('.cont06_text1').removeClass('text_ani1');
        $('.cont06_text2').removeClass('text_ani2');
        $('.cont06_text3').removeClass('text_ani3');
        $('.cont06_text4').removeClass('text_ani4');
        
        $('.cnt_btn').removeClass('btn_list_ani1');
        $('.cnt_btn').removeClass('btn_list_ani2');
        $('.cnt_btn').removeClass('btn_list_ani3');
        $('.cnt_btn').removeClass('btn_list_ani4');
        $('.cnt_btn').removeClass('btn_list_ani5');
        $('.cnt_btn').removeClass('btn_list_ani6');
        
        $('.main_cnt_btn_slider01').removeClass('on');
        $('.main_cnt_btn_slider02').removeClass('on');
        $('.main_cnt_btn_slider04').removeClass('on');
        $('.main_cnt_btn_slider05').removeClass('on');
        $('.main_cnt_btn_slider06').removeClass('on');
        
        $('#main_fullpage_left_nav').addClass('change_color');
        $('#header').addClass('change_color');
        $('#login-wrap').addClass('change_color');
        $('#hamburger').addClass('change_color');
        $('#quick').addClass('change_color');
        
        $('#footer').removeClass('on');
        $('#all_wrap').removeClass('on');
        $('#all_wrap').removeClass('scorll');
        $('.main_fullpage').removeClass('cont06');
        
        
        $('.topBtn').addClass('on');
        
        $('#player_umbg2').get(0).pause();
        
    } else if(main_fullpage.realIndex == 3){ //메인 풀페이지 4번 영역에 왔을때 실행되는 구문
        console.log('4');
        main_cnt_btn_slider01.slideTo(0, 1000);
        main_cnt_btn_slider02.slideTo(0, 1000);
        main_cnt_btn_slider03.slideTo(0, 1000);
        main_cnt_btn_slider04.slideTo(0, 1000);
        main_cnt_btn_slider05.slideTo(0, 1000);
        main_cnt_btn_slider06.slideTo(0, 1000);
        
        $('#content01').removeClass('start_delay');
        
        $('.cont01_text1').removeClass('text_ani1');
        $('.cont01_text2').removeClass('text_ani2');
        $('.cont01_text3').removeClass('text_ani3');
        $('.cont01_text4').removeClass('text_ani4');
        
        $('.cont02_text1').removeClass('text_ani1');
        $('.cont02_text2').removeClass('text_ani2');
        $('.cont02_text3').removeClass('text_ani3');
        $('.cont02_text4').removeClass('text_ani4');
        
        $('.cont03_text1').removeClass('text_ani1');
        $('.cont03_text2').removeClass('text_ani2');
        $('.cont03_text3').removeClass('text_ani3');
        $('.cont03_text4').removeClass('text_ani4');
        
        $('.cont05_text1').removeClass('text_ani1');
        $('.cont05_text2').removeClass('text_ani2');
        $('.cont05_text3').removeClass('text_ani3');
        $('.cont05_text4').removeClass('text_ani4');
        
        $('.cont06_text1').removeClass('text_ani1');
        $('.cont06_text2').removeClass('text_ani2');
        $('.cont06_text3').removeClass('text_ani3');
        $('.cont06_text4').removeClass('text_ani4');
        
        $('.cnt_btn').removeClass('btn_list_ani1');
        $('.cnt_btn').removeClass('btn_list_ani2');
        $('.cnt_btn').removeClass('btn_list_ani3');
        $('.cnt_btn').removeClass('btn_list_ani4');
        $('.cnt_btn').removeClass('btn_list_ani5');
        $('.cnt_btn').removeClass('btn_list_ani6');
        
        $('.main_cnt_btn_slider01').removeClass('on');
        $('.main_cnt_btn_slider02').removeClass('on');
        $('.main_cnt_btn_slider03').removeClass('on');
        $('.main_cnt_btn_slider05').removeClass('on');
        $('.main_cnt_btn_slider06').removeClass('on');
        
        $('#main_fullpage_left_nav').removeClass('change_color');
        $('#header').removeClass('change_color');
        $('#login-wrap').removeClass('change_color');
        $('#hamburger').addClass('change_color');
        $('#quick').removeClass('change_color');
        
        $('#footer').removeClass('on');
        $('#all_wrap').removeClass('on');
        $('#all_wrap').removeClass('scorll');
        $('.main_fullpage').removeClass('cont06');
        
        
        $('.topBtn').addClass('on');
        
        //$('#player_umbg').get(0).pause();
        $('#player_umbg2').get(0).pause();
        
    } else if(main_fullpage.realIndex == 4){ //메인 풀페이지 5번 영역에 왔을때 실행되는 구문
        console.log('5');
        main_cnt_btn_slider01.slideTo(0, 1000);
        main_cnt_btn_slider02.slideTo(0, 1000);
        main_cnt_btn_slider03.slideTo(0, 1000);
        main_cnt_btn_slider04.slideTo(0, 1000);
        main_cnt_btn_slider05.slideTo(0, 1000);
        main_cnt_btn_slider06.slideTo(0, 1000);
        
        $('#content01').removeClass('start_delay');
        
        $('.cont01_text1').removeClass('text_ani1');
        $('.cont01_text2').removeClass('text_ani2');
        $('.cont01_text3').removeClass('text_ani3');
        $('.cont01_text4').removeClass('text_ani4');
        
        $('.cont02_text1').removeClass('text_ani1');
        $('.cont02_text2').removeClass('text_ani2');
        $('.cont02_text3').removeClass('text_ani3');
        $('.cont02_text4').removeClass('text_ani4');
        
        $('.cont03_text1').removeClass('text_ani1');
        $('.cont03_text2').removeClass('text_ani2');
        $('.cont03_text3').removeClass('text_ani3');
        $('.cont03_text4').removeClass('text_ani4');
        
        $('.cont04_text1').removeClass('text_ani1');
        $('.cont04_text2').removeClass('text_ani2');
        $('.cont04_text3').removeClass('text_ani3');
        $('.cont04_text4').removeClass('text_ani4');
        
        $('.cont06_text1').removeClass('text_ani1');
        $('.cont06_text2').removeClass('text_ani2');
        $('.cont06_text3').removeClass('text_ani3');
        $('.cont06_text4').removeClass('text_ani4');
        
        $('.cnt_btn').removeClass('btn_list_ani1');
        $('.cnt_btn').removeClass('btn_list_ani2');
        $('.cnt_btn').removeClass('btn_list_ani3');
        $('.cnt_btn').removeClass('btn_list_ani4');
        $('.cnt_btn').removeClass('btn_list_ani5');
        $('.cnt_btn').removeClass('btn_list_ani6');
        
        $('.main_cnt_btn_slider01').removeClass('on');
        $('.main_cnt_btn_slider02').removeClass('on');
        $('.main_cnt_btn_slider03').removeClass('on');
        $('.main_cnt_btn_slider04').removeClass('on');
        $('.main_cnt_btn_slider06').removeClass('on');
        
        $('#main_fullpage_left_nav').removeClass('change_color');
        $('#header').removeClass('change_color');
        $('#login-wrap').removeClass('change_color');
        $('#hamburger').removeClass('change_color');
        $('#quick').removeClass('change_color');
        
        $('#footer').removeClass('on');
        $('#all_wrap').removeClass('on');
        $('#all_wrap').removeClass('scorll');
        $('.main_fullpage').removeClass('cont06');
        
        
        $('.topBtn').addClass('on');
        
        //$('#player_umbg').get(0).pause();
        $('#player_umbg2').get(0).pause();
        
    } else if(main_fullpage.realIndex == 5){ //메인 풀페이지 6번 영역에 왔을때 실행되는 구문
        console.log('6');
        main_cnt_btn_slider01.slideTo(0, 1000);
        main_cnt_btn_slider02.slideTo(0, 1000);
        main_cnt_btn_slider03.slideTo(0, 1000);
        main_cnt_btn_slider04.slideTo(0, 1000);
        main_cnt_btn_slider05.slideTo(0, 1000);
        main_cnt_btn_slider06.slideTo(0, 1000);
        
        $('#content01').removeClass('start_delay');
        
        $('.cont01_text1').removeClass('text_ani1');
        $('.cont01_text2').removeClass('text_ani2');
        $('.cont01_text3').removeClass('text_ani3');
        $('.cont01_text4').removeClass('text_ani4');
        
        $('.cont02_text1').removeClass('text_ani1');
        $('.cont02_text2').removeClass('text_ani2');
        $('.cont02_text3').removeClass('text_ani3');
        $('.cont02_text4').removeClass('text_ani4');
        
        $('.cont03_text1').removeClass('text_ani1');
        $('.cont03_text2').removeClass('text_ani2');
        $('.cont03_text3').removeClass('text_ani3');
        $('.cont03_text4').removeClass('text_ani4');
        
        $('.cont04_text1').removeClass('text_ani1');
        $('.cont04_text2').removeClass('text_ani2');
        $('.cont04_text3').removeClass('text_ani3');
        $('.cont04_text4').removeClass('text_ani4');
        
        $('.cont05_text1').removeClass('text_ani1');
        $('.cont05_text2').removeClass('text_ani2');
        $('.cont05_text3').removeClass('text_ani3');
        $('.cont05_text4').removeClass('text_ani4');
        
        $('.cnt_btn').removeClass('btn_list_ani1');
        $('.cnt_btn').removeClass('btn_list_ani2');
        $('.cnt_btn').removeClass('btn_list_ani3');
        $('.cnt_btn').removeClass('btn_list_ani4');
        $('.cnt_btn').removeClass('btn_list_ani5');
        $('.cnt_btn').removeClass('btn_list_ani6');
        
        $('.main_cnt_btn_slider01').removeClass('on');
        $('.main_cnt_btn_slider02').removeClass('on');
        $('.main_cnt_btn_slider03').removeClass('on');
        $('.main_cnt_btn_slider04').removeClass('on');
        $('.main_cnt_btn_slider05').removeClass('on');
        
        $('#main_fullpage_left_nav').removeClass('change_color');
        $('#header').removeClass('change_color');
        $('#login-wrap').removeClass('change_color');
        $('#hamburger').removeClass('change_color');
        $('#quick').removeClass('change_color');
        
        
        $('.main_fullpage').addClass('cont06');
        $('.topBtn').addClass('on');
        
        //$('#player_umbg').get(0).pause();
        
    }
});

main_fullpage.on('transitionEnd', function() { 
    if(main_fullpage.realIndex == 0){ //메인 풀페이지 1번 영역에 왔을때 실행되는 구문
        setTimeout(function() {
            main_cnt_btn_slider01.slideTo(5, 1000);
        }, 2000);
        
        $('.cont01_text1').addClass('text_ani1');
        $('.cont01_text2').addClass('text_ani2');
        $('.cont01_text3').addClass('text_ani3');
        $('.cont01_text4').addClass('text_ani4');
        
        $('.cnt01_btn01').addClass('btn_list_ani1');
        $('.cnt01_btn02').addClass('btn_list_ani2');
        $('.cnt01_btn03').addClass('btn_list_ani3');
        $('.cnt01_btn04').addClass('btn_list_ani4');
        $('.cnt01_btn05').addClass('btn_list_ani5');
        $('.cnt01_btn06').addClass('btn_list_ani6');
        
        $('.main_cnt_btn_slider01').addClass('on');
        $('.main_cnt_btn_slider02').removeClass('on');
        $('.main_cnt_btn_slider03').removeClass('on');
        $('.main_cnt_btn_slider04').removeClass('on');
        $('.main_cnt_btn_slider05').removeClass('on');
        $('.main_cnt_btn_slider06').removeClass('on');
        
        $('#footer').removeClass('on');
        $('#all_wrap').removeClass('on');
        $('#all_wrap').addClass('scorll');
        
        window.addEventListener('wheel', function (event) {
            if (event.deltaY < 0) {
                main_fullpage.mousewheel.enable();
            } else if (event.deltaY > 0) {
                main_fullpage.mousewheel.enable();
            }
        });
        
    } else if(main_fullpage.realIndex == 1){ //메인 풀페이지 2번 영역에 왔을때 실행되는 구문
        setTimeout(function() {
            main_cnt_btn_slider02.slideTo(6, 1000);
        }, 2000);
        
        $('.cont02_text1').addClass('text_ani1');
        $('.cont02_text2').addClass('text_ani2');
        $('.cont02_text3').addClass('text_ani3');
        $('.cont02_text4').addClass('text_ani4');
        
        $('.cnt02_btn01').addClass('btn_list_ani1');
        $('.cnt02_btn02').addClass('btn_list_ani2');
        $('.cnt02_btn03').addClass('btn_list_ani3');
        $('.cnt02_btn04').addClass('btn_list_ani4');
        $('.cnt02_btn05').addClass('btn_list_ani5');
        
        $('.main_cnt_btn_slider01').removeClass('on');
        $('.main_cnt_btn_slider02').addClass('on');
        $('.main_cnt_btn_slider03').removeClass('on');
        $('.main_cnt_btn_slider04').removeClass('on');
        $('.main_cnt_btn_slider05').removeClass('on');
        $('.main_cnt_btn_slider06').removeClass('on');
        
        $('#footer').removeClass('on');
        $('#all_wrap').removeClass('on');
        $('#all_wrap').removeClass('scorll');
        
        window.addEventListener('wheel', function (event) {
            if (event.deltaY < 0) {
                main_fullpage.mousewheel.enable();
            } else if (event.deltaY > 0) {
                main_fullpage.mousewheel.enable();
            }
        });
        
        
    } else if(main_fullpage.realIndex == 2){ //메인 풀페이지 3번 영역에 왔을때 실행되는 구문
        setTimeout(function() {
            main_cnt_btn_slider03.slideTo(0, 1000);
        }, 2000);
        
        $('.cont03_text1').addClass('text_ani1');
        $('.cont03_text2').addClass('text_ani2');
        $('.cont03_text3').addClass('text_ani3');
        $('.cont03_text4').addClass('text_ani4');
        
        $('.cnt03_btn01').addClass('btn_list_ani1');
        $('.cnt03_btn02').addClass('btn_list_ani2');
        $('.cnt03_btn03').addClass('btn_list_ani3');
        
        $('.main_cnt_btn_slider01').removeClass('on');
        $('.main_cnt_btn_slider02').removeClass('on');
        $('.main_cnt_btn_slider03').addClass('on');
        $('.main_cnt_btn_slider04').removeClass('on');
        $('.main_cnt_btn_slider05').removeClass('on');
        $('.main_cnt_btn_slider06').removeClass('on');
        
        $('#footer').removeClass('on');
        $('#all_wrap').removeClass('on');
        $('#all_wrap').removeClass('scorll');
        
        window.addEventListener('wheel', function (event) {
            if (event.deltaY < 0) {
                main_fullpage.mousewheel.enable();
            } else if (event.deltaY > 0) {
                main_fullpage.mousewheel.enable();
            }
        });
        
    } else if(main_fullpage.realIndex == 3){ //메인 풀페이지 4번 영역에 왔을때 실행되는 구문
        setTimeout(function() {
            main_cnt_btn_slider04.slideTo(0, 1000);
        }, 2000);
        
        $('.cont04_text1').addClass('text_ani1');
        $('.cont04_text2').addClass('text_ani2');
        $('.cont04_text3').addClass('text_ani3');
        $('.cont04_text4').addClass('text_ani4');
        
        $('.cnt04_btn01').addClass('btn_list_ani1');
        $('.cnt04_btn02').addClass('btn_list_ani2');
        $('.cnt04_btn03').addClass('btn_list_ani3');
        
        $('.main_cnt_btn_slider01').removeClass('on');
        $('.main_cnt_btn_slider02').removeClass('on');
        $('.main_cnt_btn_slider03').removeClass('on');
        $('.main_cnt_btn_slider04').addClass('on');
        $('.main_cnt_btn_slider05').removeClass('on');
        $('.main_cnt_btn_slider06').removeClass('on');
        
        $('#footer').removeClass('on');
        $('#all_wrap').removeClass('on');
        $('#all_wrap').removeClass('scorll');
        
        window.addEventListener('wheel', function (event) {
            if (event.deltaY < 0) {
                main_fullpage.mousewheel.enable();
            } else if (event.deltaY > 0) {
                main_fullpage.mousewheel.enable();
            }
        });
        
    } else if(main_fullpage.realIndex == 4){ //메인 풀페이지 5번 영역에 왔을때 실행되는 구문
        setTimeout(function() {
            main_cnt_btn_slider05.slideTo(0, 1000);
        }, 2000);
        
        $('.cont05_text1').addClass('text_ani1');
        $('.cont05_text2').addClass('text_ani2');
        $('.cont05_text3').addClass('text_ani3');
        $('.cont05_text4').addClass('text_ani4');
        
        $('.cnt05_btn01').addClass('btn_list_ani1');
        $('.cnt05_btn02').addClass('btn_list_ani2');
        
        $('.main_cnt_btn_slider01').removeClass('on');
        $('.main_cnt_btn_slider02').removeClass('on');
        $('.main_cnt_btn_slider03').removeClass('on');
        $('.main_cnt_btn_slider04').removeClass('on');
        $('.main_cnt_btn_slider05').addClass('on');
        $('.main_cnt_btn_slider06').removeClass('on');
        
        $('#footer').removeClass('on');
        $('#all_wrap').removeClass('on');
        $('#all_wrap').removeClass('scorll');
        
        window.addEventListener('wheel', function (event) {
            if (event.deltaY < 0) {
                main_fullpage.mousewheel.enable();
            } else if (event.deltaY > 0) {
                main_fullpage.mousewheel.enable();
            }
        });
        
    } else if(main_fullpage.realIndex == 5){ //메인 풀페이지 6번 영역에 왔을때 실행되는 구문
        setTimeout(function() {
            main_cnt_btn_slider06.slideTo(0, 1000);
        }, 2000);
        
        $('#footer').addClass('on');
        $('#all_wrap').addClass('on');
        $('#all_wrap').addClass('scorll');
        
        $('.cont06_text1').addClass('text_ani1');
        $('.cont06_text2').addClass('text_ani2');
        $('.cont06_text3').addClass('text_ani3');
        $('.cont06_text4').addClass('text_ani4');
        
        $('.cnt06_btn01').addClass('btn_list_ani1');
        $('.cnt06_btn02').addClass('btn_list_ani2');
        
        $('.main_cnt_btn_slider01').removeClass('on');
        $('.main_cnt_btn_slider02').removeClass('on');
        $('.main_cnt_btn_slider03').removeClass('on');
        $('.main_cnt_btn_slider04').removeClass('on');
        $('.main_cnt_btn_slider05').removeClass('on');
        $('.main_cnt_btn_slider06').addClass('on');
        
        window.addEventListener('wheel', function (event) {
            if (event.deltaY < 0) {
                main_fullpage.mousewheel.enable();
            } else if (event.deltaY > 0) {
                main_fullpage.mousewheel.disable();
            }
        });
    }
});


function topBtn_click(){
    main_fullpage.slideTo(0, 1000);
}


const quick_link_slider = new Swiper('.quick_link_slider', {
    slidesPerView: 1,
    direction: 'vertical',
    speed: 800,
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
    },
    loop: true,
    loopAdditionalSlides: 1,
    observer: true,
    observeParents: true,
});

const top_bnr_slider = new Swiper('.top-bnr-slider', {
    slidesPerView: 1,
    direction: 'vertical',
    speed: 800,
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
    },
    loop: true,
    loopAdditionalSlides: 1,
    observer: true,
    observeParents: true,
});

const quick_slider = new Swiper('.quick_slider', {
    slidesPerView: 1,
    effect : 'fade',
    speed: 800,
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
    },
    loop: true,
    loopAdditionalSlides: 1,
    observer: true,
    observeParents: true,
});

const quick_slider_m = new Swiper('.quick_slider_m', {
    slidesPerView: 1,
    effect : 'fade',
    speed: 800,
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
    },
    loop: true,
    loopAdditionalSlides: 1,
    observer: true,
    observeParents: true,
});

const intro_event_menu = ['리턴 리프팅 이벤트', '스컬트라 정품 인증']
const intro_event_slider = new Swiper('.intro_event_slider', {
    slidesPerView: 1,
    speed: 800,
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
    },
    loop: true,
    loopAdditionalSlides: 1,
    observer: true,
    observeParents: true,
    pagination: {
        el: '.swiper-pagination',
        clickable: true, // 클릭온
        renderBullet: function (index, className) {
            return '<span class="' + className + '">' + (menu[index]) + '</span>';
            // type: 'fraction', //숫자로
        },
    },
});

const gnb_issue_slider = new Swiper('.gnb_issue_slider', {
    slidesPerView: 1,
    spaceBetween: 0,
    speed: 800,
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
    },
    loop: true,
    loopAdditionalSlides: 1,
    observer: true,
    observeParents: true,
    pagination: {
        el: '.swiper-pagination',
        clickable: true, // 클릭온
    },
    navigation: {
      nextEl: '.swiper-button-next.gnb_issue_next',
      prevEl: '.swiper-button-prev.gnb_issue_prev',
    },
});





window.onload = function() { 
    var loading = document.getElementById('loading');
    setTimeout(function() {
        loading.style.opacity = "0";
        loading.style.width = "0";
        intro_event_slider.slideTo(0, 10);
        main_cnt_btn_slider01.slideTo(0, 10);
    }, 4000);
    
    
    var intro_event_close = document.getElementById("intro_event_close");
    var intro_event_slider_wrap = document.getElementById("intro_event_slider_wrap");
    // header 객체에 onclick 이벤트 속성을 연결 
    intro_event_close.onclick = function() { 
        intro_event_slider_wrap.style.display = 'none';
    } 
    
    $("#intro_event_today_close").click(function() {
        $("#intro_event_slider_wrap").css('display', 'none');
        setCookie("intro_event_slider_wrap", 'popupEnd', 1);
    })

    var checkCookie = getCookie("intro_event_slider_wrap");

    if(checkCookie == 'popupEnd') {
        $("#intro_event_slider_wrap").css('display', 'none');
    } else {
        /*$("#intro_event_slider_wrap").css('display', 'block');*/
    }

    function setCookie(name, value, expiredays){
        var today = new Date();
        today.setDate(today.getDate() + expiredays); // 현재시간에 하루를 더함 
        document.cookie = name + '=' + escape(value) + '; expires=' + today.toGMTString();
    }
    
    function getCookie(name) {
        var cookie = document.cookie;
        if (document.cookie != "") {
            var cookie_array = cookie.split("; ");
            for ( var index in cookie_array) {
                var cookie_name = cookie_array[index].split("=");
                if (cookie_name[0] == "intro_event_slider_wrap") {
                    return cookie_name[1];
                }
            }
        }
        return;
    }
    
};



const playerUmbg = document.getElementById("player_umbg");
const playerUmbg2 = document.getElementById("player_umbg2");
var player = null;

if(playerUmbg){
	player = new MediaElement('player_umbg',{
		pluginPath: '../build/',
		//stretching: 'responsive',
	});
}
if(playerUmbg2){
	player = new MediaElement('player_umbg2',{
		pluginPath: '../build/',
		//stretching: 'responsive',
	});
}


//var balls = document.getElementsByClassName("ball");
//document.onmousemove = function () {
//    var x = event.clientX * 50 / window.innerWidth + "px";
//    var y = event.clientY * 50 / window.innerHeight + "px";
//
//    for (var i = 0; i < 2; i++) {
//        balls[i].style.left = x;
//        balls[i].style.top = y;
//
//    }
//}


// 메뉴 버튼 마우스 오버
//const docStyle = document.documentElement.style
//const aElem = document.querySelector('a')
//const boundingClientRect = aElem.getBoundingClientRect()
//
//aElem.onmousemove = function(e) {
//
//  const x = e.clientX - boundingClientRect.left
//  const y = e.clientY - boundingClientRect.top
//  
//  const xc = boundingClientRect.width/2
//  const yc = boundingClientRect.height/2
//  
//  const dx = x - xc
//  const dy = y - yc
//  
//  docStyle.setProperty('--rx', `${ dy/-1 }deg`)
//  docStyle.setProperty('--ry', `${ dx/10 }deg`)
//  
//}
//
//aElem.onmouseleave = function(e) {
//  
//  docStyle.setProperty('--ty', '0')
//  docStyle.setProperty('--rx', '0')
//  docStyle.setProperty('--ry', '0')
//  
//}
//
//aElem.onmousedown = function(e) {
//  
//  docStyle.setProperty('--tz', '-25px')
//  
//}


//function resultFun(x) { 
//    var positionLeft = x.clientX; 
//    var positionTop = x.clientY; 
//    document.getElementById('result').style.left = positionLeft - 1650 + "px"; 
//    document.getElementById('result').style.top = positionTop - 68 +"px"; 
//} 
//function resultFun2(x) { 
//    var positionLeft2 = x.clientX; 
//    var positionTop2 = x.clientY; 
//    document.getElementById('result').style.left = 0 + "px"; 
//    document.getElementById('result').style.top = 0 +"px"; 
//    document.getElementById('result2').style.left = 0 + "px"; 
//    document.getElementById('result2').style.top = 0 +"px"; 
//} 
//if (document.addEventListener) { 
//    document.addEventListener("mousemove", resultFun); 
//} else if (document.attachEvent) { 
//    document.attachEvent("onmousemove", resultFun); //attachEvent는 IE8이하와 오페라에서 사용하는 명령어이다 
//};


// 로딩 화면
//window.onload = function(){
//    
//    var loading = document.getElementById('loading');
//    setTimeout(function() {
//        loading.style.opacity = "0";
//        loading.style.width = "0";
//    }, 4000);
//    setTimeout(function() {
//        loading.style.display = "none";
//        loading.style.visibility = "hidden";
//    }, 4500);
//    
//}


// 퀵메뉴 마우스오버 책자
//const hamburger_hover = document.querySelector('.hamburger');
//if(hamburger_hover){
//	hamburger_hover.addEventListener('mouseenter',function(){
//		let sect = document.querySelector('.hamburger_wrap');
//		sect.classList.add('ball');
//        sect.id = 'result';
//	});
//}
//document.querySelectorAll('div.hamburger').forEach(element => {
//	element.addEventListener('mouseleave',function(){
//		let sect2 = document.querySelector('.hamburger_wrap');
//		sect2.classList.remove('ball');
//        sect2.id = 'result2';
//	});
//	
//});

// 퀵메뉴 마우스오버 책자
const quick_slider_hover = document.querySelector('.quick_slider');
if(quick_slider_hover){
	quick_slider_hover.addEventListener('mouseenter',function(){
		let sect = document.querySelector('.quick-menu');
		let sect_slider = document.querySelector('.quick_slider');
		sect.classList.add('hover');
		sect_slider.classList.add('hover');
	});
}
document.querySelectorAll('div.quick-wrap').forEach(element => {
	element.addEventListener('click',function(){
		let sect2 = document.querySelector('.quick-menu');
		let sect_slider2 = document.querySelector('.quick_slider');
		sect2.classList.remove('hover');
		sect_slider2.classList.remove('hover');
	});
	
});

// 고정아의원 마우스오버 책자
const bookhover = document.querySelector('.book-hover');
if(bookhover){
	bookhover.addEventListener('mouseenter',function(){
		let sect = this.closest('article#about-ko-sect');
		sect.classList.add('hover');
	});
}
document.querySelectorAll('div.about-ko-books-wrap').forEach(element => {
	element.addEventListener('mouseleave',function(){
		let sect2 = this.closest('article#about-ko-sect');
		sect2.classList.remove('hover');
	});
	
});

// 고정아의원 마우스오버 프로필
const plusBtn = document.querySelector('.about-ko-plus');
if(plusBtn){
	plusBtn.addEventListener('mouseenter',function(){
		let sect = this.closest('article#about-ko-sect');
		sect.classList.add('plus');
	});
}
document.querySelectorAll('div.doctor-hover-profile').forEach(element => {
	element.addEventListener('mouseleave',function(){
        let sect2 = this.closest('article#about-ko-sect');
		sect2.classList.remove('plus');
	});
	
});


// 숫자 카운트 이펙트
//var isVisible = false;
//locoScroll.on("scroll", function(){
//    if (checkVisible($('.counterStart'))&&!isVisible) {
//        var memberCountConTxt1= 200;
//        var memberCountConTxt2= 50;
//        var memberCountConTxt3= 3200;
//        
//        $({ val : 0 }).animate({ val : memberCountConTxt1 }, {
//            duration: 2000,
//            step: function() {
//              var num = numberWithCommas(Math.floor(this.val));
//              $(".memberCountCon1").text(num);
//            },
//            complete: function() {
//              var num = numberWithCommas(Math.floor(this.val));
//              $(".memberCountCon1").text(num);
//            }
//        });
//        $({ val : 0 }).animate({ val : memberCountConTxt2 }, {
//            duration: 2000,
//            step: function() {
//              var num = numberWithCommas(Math.floor(this.val));
//              $(".memberCountCon2").text(num);
//            },
//            complete: function() {
//              var num = numberWithCommas(Math.floor(this.val));
//              $(".memberCountCon2").text(num);
//            }
//        });
//        $({ val : 0 }).animate({ val : memberCountConTxt3 }, {
//            duration: 2000,
//            step: function() {
//              var num = numberWithCommas(Math.floor(this.val));
//              $(".memberCountCon3").text(num);
//            },
//            complete: function() {
//              var num = numberWithCommas(Math.floor(this.val));
//              $(".memberCountCon3").text(num);
//            }
//        });
//        
//        function numberWithCommas(x) {
//            return x.toString().replace(/\B(?=(\d{10})+(?!\d))/g, ",");
//        }
//        function numberWithCommas2(x) {
//            return x.toString().replace(/\B(?=(\d{1})+(?!\d))/g, ".");
//        }
//        
//        isVisible=true;
//    }
//});
//
//function checkVisible( elm, eval ) {
//    eval = eval || "object visible";
//    var viewportHeight = $(window).height(), // Viewport Height
//        scrolltop = $(window).scrollTop(), // Scroll Top
//        y = $(elm).offset().top,
//        elementHeight = $(elm).height();   
//    
//    if (eval == "object visible") return ((y < (viewportHeight + scrolltop)) && (y > (scrolltop - elementHeight)));
//    if (eval == "above") return ((y < (viewportHeight + scrolltop)));
//}
// //숫자 카운트 이펙트



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

/* 홈페이지 전환 효과 - 페이드인아웃 */
//jQuery(function($) {
//    $("body").css("display", "none");
//    $("body").fadeIn(2000);
//    $("a.transition").click(function(event){
//        event.preventDefault();
//        linkLocation = this.href;
//        $("body").fadeOut(1000, redirectPage);
//    });
//    function redirectPage() {
//        window.location = linkLocation;
//    }
//});
/* //홈페이지 전환 효과 - 페이드인아웃 */