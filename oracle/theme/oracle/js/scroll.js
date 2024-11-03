gsap.registerPlugin(ScrollTrigger);
var clickEvent = (function () {
	if ('ontouchstart' in document.documentElement === true) {
		return 'touchstart';
	} else {
		return 'click';
	}
})(); // 클릭이벤트와 터치이벤트 토글

ScrollTrigger.matchMedia({
    
	// desktop
	"(min-width: 801px)": function () {
		// setup animations and ScrollTriggers for screens over 800px wide (desktop) here...
		// ScrollTriggers will be reverted/killed when the media query doesn't match anymore.
        
        
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
        
        
        /* 세로 스크롤 시 고정 - 서브 1-1 */
        ScrollTrigger.create({
            trigger: ".sub1_1_cont04_box",
            start: "top top", 
            end: "bottom bottom",
            pin: ".sub1_1_cont04_process_desc_sect .sub1_1_cont04_fix_outer",
            markers: false,
        });
        gsap.utils.toArray(".sub1_1_cont04_process_box_text > .sub1_1_cont04_prs_desc").forEach(function (elem, index) {
            gsap.to(elem,{
                color:"#565656",
                scrollTrigger:{
                    trigger:elem,
                    start:'-200px 50%',
                    end:'bottom 70%',
                    scrub:true,
                    markers: false,
                }
            })
        });
        gsap.utils.toArray(".sub1_1_cont04_process_box").forEach(function (elem, index) {
            gsap.fromTo(elem,{
                yPercent: 50,
                autoAlpha: 0,
            },{
                scrollTrigger:{
                    trigger:elem,
                    start:'-200px 50%',
                    end:'bottom 60%',
                    toggleActions: 'play none none none',
                    scrub:true,
                    markers: false,
                },
                yPercent: 0,
                autoAlpha: 1.5,
                duration: 1
            })
        });
        /* //세로 스크롤 시 고정 - 서브 1-1 */
        
        
	},
    
	// mobile
	"(max-width:800px)": function () {
		// Any ScrollTriggers created inside these functions are segregated and get
		// reverted/killed when the media query doesn't match anymore.
        
        
        
        const openBtns = Array.from(document.getElementsByClassName('open-on-hover'));
        openBtns.forEach((button)=>{
          button.addEventListener(clickEvent,(e)=>{
            const list = button.getElementsByClassName('open-on-hover-list')[0];
            $(list).stop().toggleClass("open");
          });
        });
        
        
        // gnb
        const menuItem = document.querySelectorAll('.m-gnb-menu-depth1');

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
        
        
        
        
	},
    
    "(min-width:481px) and (max-width:800px)": function () {
        
        
        
        /* 세로 스크롤 시 고정 - 서브 1-1 */
        gsap.utils.toArray(".sub1_1_cont04_process_box_text_m > .sub1_1_cont04_prs_desc").forEach(function (elem, index) {
            gsap.to(elem,{
                color:"#565656",
                scrollTrigger:{
                    trigger:elem,
                    start:'-200px 50%',
                    end:'bottom 70%',
                    scrub:true
                }
            })
        });
        gsap.utils.toArray(".sub1_1_cont04_process_box_m").forEach(function (elem, index) {
            gsap.fromTo(elem,{
                yPercent: 60,
                autoAlpha: 0,
            },{
                scrollTrigger:{
                    trigger:elem,
                    start:'-80% 40%',
                    end:'bottom 80%',
                    toggleActions: 'play none none none',
                    scrub:true
                },
                yPercent: 0,
                autoAlpha: 1.4,
                duration: 0.8
            })
        });
        /* //세로 스크롤 시 고정 - 서브 1-1 */
        
        
	},
    
	// mobile
	"(max-width:480px)": function () {
		// Any ScrollTriggers created inside these functions are segregated and get
		// reverted/killed when the media query doesn't match anymore.
        
        
        
        
        /* 세로 스크롤 시 고정 - 서브 1-1 */
        gsap.utils.toArray(".sub1_1_cont04_process_box_text_m > .sub1_1_cont04_prs_desc").forEach(function (elem, index) {
            gsap.to(elem,{
                color:"#565656",
                scrollTrigger:{
                    trigger:elem,
                    start:'-200px 50%',
                    end:'bottom 70%',
                    scrub:true
                }
            })
        });
        gsap.utils.toArray(".sub1_1_cont04_process_box_m").forEach(function (elem, index) {
            gsap.fromTo(elem,{
                yPercent: 50,
                autoAlpha: 0,
                ease: Power1.easeOut,
            },{
                scrollTrigger:{
                    trigger:elem,
                    start:'-90% 40%',
                    end:'bottom 60%',
                    toggleActions: 'play none none none',
                    //markers:true,
                    scrub:true,
                },
                yPercent: -20,
                ease: Power1.easeOut,
                autoAlpha: 1.4,
                duration: 0.8,
            })
        });
        /* //세로 스크롤 시 고정 - 서브 1-1 */
        
        const openBtns_m = Array.from(document.getElementsByClassName('familysite_btn_m'));
        openBtns_m.forEach((a)=>{
          a.addEventListener('click',(e)=>{
            const list = a.getElementsByClassName('open-on-hover-list')[0];
            list.classList.toggle('flang-select-list-on');
          });
        });
        
        
        
        
	},
    
	// all 
	"all": function () {
        
        const main_cont06 = document.getElementById('sect05');
        ScrollTrigger.create({
          trigger: main_cont06,
          start: 'top 25%',
          end: 999999,
          toggleClass: {className: 'on', targets: '.main_cont06'}
        });
        
        
        /* 세로 스크롤 시 고정 - 서브p 1-1 */
        ScrollTrigger.create({
            trigger: ".sub1_1_cont04_process_desc_sect",
            start: "top top", 
            end: "bottom bottom",
            pin: ".sub1_1_cont04_process_desc_sect .sub1_1_cont04_fix_outer",
            markers: false,
        });
        
        
        
        
        const select_network_kakao = document.getElementById("startContent");
        if(select_network_kakao){
          gsap.utils.toArray(select_network_kakao).forEach(function(elem, index){
            ScrollTrigger.create({
              trigger: '#startContent',
              start: 'bottom bottom',
              end: 999999,
              toggleActions: 'play none none none',
              toggleClass: {className: 'active', targets: '.select_network_kakao, .select_network_kakao_btn'}
            });
          });
        }
        
        const select_network_kakao_sub = document.getElementById("startContent");
        if(select_network_kakao_sub){
          gsap.utils.toArray(select_network_kakao_sub).forEach(function(elem, index){
            ScrollTrigger.create({
              trigger: '#startContent',
              start: 'bottom bottom',
              end: 999999,
              toggleActions: 'play none none none',
              toggleClass: {className: 'active', targets: '.select_network_kakao, .select_network_kakao_btn'}
            });
          });
        }
        
        const activeTrigger = document.getElementsByClassName("active_trigger");
        if(activeTrigger){
          gsap.utils.toArray(activeTrigger).forEach(function(elem, index){
            ScrollTrigger.create({
              trigger: elem,
              start: 'top 70%',
              end: 'bottom top',
              toggleActions: 'play none none none',
              //onEnter:()=>elem.classList.add('active'),
              //markers:true,
              toggleClass: {className: 'active', targets: '.main_cont02_item_text, .main_cont02_item'}
            });
          });
        }/* .active_trigger가 있는 위치에 도착하면 active 클래스 추가 - 스크롤 시 효과추가를 위해 */
        
        
        const fadeUpAni = document.getElementsByClassName("fade_ani"); // fade효과 줄 대상에서 .fade_ani 클래스 추가
        if(fadeUpAni){
          gsap.utils.toArray(fadeUpAni).forEach(function(elem, index){
            const fadeDelay = elem.getAttribute('data-fade-delay'); // .fade_ani에게 delay시간 설정
            
            var x = 0;
            var y = 0;
            
            if (elem.classList.contains('fadeUp')) { //나타나는 방향 설정 .fadeUp, .fadeDown, .fadeLeft, .fadeRight 클래스 추가 
              x = 0;
              y = 80;
            }
            if (elem.classList.contains('fadeDown')) {
              x = 0;
              y = -80;
            }
            if (elem.classList.contains('fadeLeft')) {
              x = -80;
              y = 0;
            }
            if (elem.classList.contains('fadeRight')) {
              x = 80;
              y = 0;
            }
            gsap.fromTo(elem,{
              x: x,
              y: y,
              opacity: 0
            },{
              scrollTrigger: {
                trigger: elem.parentNode,
                start: 'top 90%',
                toggleActions: 'play none none none',
                //markers:true
              },
              x: 0,
              y: 0,
              opacity: 1,
              duration: 0.8,
              delay: fadeDelay * 0.001,
              ease: Power1.easeOut,
            })
          });
        }/* .fade_ani이 있을때만 실행 */
        
        
        const revealAni = document.getElementsByClassName("gs_reveal");
        if(revealAni){
          gsap.utils.toArray(revealAni).forEach(function(elem, index){
            gsap.set(elem, {autoAlpha: 0}); // assure that the element is hidden when scrolled into view
            const getDelay = elem.getAttribute('data-gs-delay');

            var x = 0,
              y = 60,
              z = -100;

            if (elem.classList.contains('reveal_fromDown')) {
              y = -60
            } else if(elem.classList.contains("reveal_fromUp")){
              y = 60;
            } else if (elem.classList.contains("reveal_fromRight")) {
              x = 300;
              y = 0;
              z = 10;
            } else if (elem.classList.contains("reveal_fromLeft")) {
              x = -300;
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
                trigger: elem.parentNode,
                start: 'top 70%',
                toggleActions: 'play none none none',
                onEnter:()=>elem.classList.add('active'),
                //toggleClass: {className: 'active', targets: '.gs_reveal'}
                //toggleClass: {className: 'waypoint', targets: '.main-header, #gnb'}
                //markers:true
              },
              duration: 1,
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
        
        
        const waypoint = document.getElementsByClassName("waypoint");
        if(waypoint){
          gsap.utils.toArray(waypoint).forEach(function(elem, index){
            var startPoint = elem.getAttribute('data-start');
            var startTrigger = startPoint !== null ? startPoint : 'top 50%';
            
            ScrollTrigger.create({
              trigger: elem,
              start: startTrigger,
              end: 'bottom top',
              toggleActions: 'play none none none',
              onEnter:()=>elem.classList.add('active'),
              //markers:true,
              //toggleClass: {className: 'active', targets: elem}
            });
          });
        }/* waypoint가 있을때만 실행 */
        
        
        gsap.utils.toArray(".parallax").forEach((section, i) => {  /* parallax 배경 */
            section.bg = section.querySelector(".bg");
            let elemHeight = section.bg.clientHeight;
            section.bg.style.backgroundPosition = "50% 0"; 
            gsap.to(section.bg, {
                backgroundPosition: `50% ${elemHeight / 2}px`,
                ease: "none",
                scrollTrigger: {
                    trigger: section,
                    start: "top top", 
                    end: "bottom top",
                    scrub: true
                }
            });
        });
        

        const sub_tablinks_ani = Array.from(document.getElementsByClassName('sub_tablinks'));
        if(sub_tablinks_ani){
            sub_tablinks_ani.forEach((button)=>{
                button.addEventListener(clickEvent,(event)=>{
                    const revealAni = document.getElementsByClassName("gs_reveal");
                    if(revealAni){
                      gsap.utils.toArray(revealAni).forEach(function(elem, index){
                        gsap.set(elem, {autoAlpha: 0}); // assure that the element is hidden when scrolled into view
                        const getDelay = elem.getAttribute('data-gs-delay');

                        var x = 0,
                          y = 60,
                          z = -100;

                        if (elem.classList.contains('reveal_fromDown')) {
                          y = -60
                        } else if(elem.classList.contains("reveal_fromUp")){
                          y = 60;
                        } else if (elem.classList.contains("reveal_fromRight")) {
                          x = 300;
                          y = 0;
                          z = 10;
                        } else if (elem.classList.contains("reveal_fromLeft")) {
                          x = -300;
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
                            trigger: elem.parentNode,
                            start: 'top 60%',
                            toggleActions: 'play none none none',
                            onEnter:()=>elem.classList.add('active'),
                            //toggleClass: {className: 'active', targets: '.gs_reveal'}
                            //toggleClass: {className: 'waypoint', targets: '.main-header, #gnb'}
                            //markers:true
                          },
                          duration: 0.8,
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
                    
                })
            });
        }
        
	}
});
ScrollTrigger.refresh();