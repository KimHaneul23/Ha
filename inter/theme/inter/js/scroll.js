gsap.registerPlugin(ScrollTrigger);

var clickEvent_2 = (function () {
	if ('ontouchstart' in document.documentElement === true) {
		return 'touchstart';
	} else {
		return 'click';
	}
})(); // 클릭이벤트와 터치이벤트 토글


ScrollTrigger.matchMedia({
    
	// desktop
	"(min-width: 961px)": function () {
		// setup animations and ScrollTriggers for screens over 800px wide (desktop) here...
		// ScrollTriggers will be reverted/killed when the media query doesn't match anymore.
        
        // 퀵메뉴
        const quick = document.getElementById("quick");
        const quickBtn = document.getElementById("q_btn");
        quickBtn.addEventListener(clickEvent,()=>quick.classList.toggle('open_q'));
        
        let main = document.querySelector('.main_cont07_box');
        if(main){
            
            let tl = gsap.timeline({
                scrollTrigger: {
                    trigger: ".main_cont07_pin",
                    start: "0px top",
                    scrub: true,
                    pin: ".main_cont07_pin",
                    anticipatePin: 1,
                    toggleClass: {className: 'scrolled', targets: '.main_cont07_map_wrap'}
                }
            })
            .to(".main_cont07_map_title",{
                opacity: 0,
                display: 'none',
            })
            .to(".main_cont07_map_wrap",{
                width:'50%',
            });
            
            let tl2 = gsap.timeline({
                scrollTrigger: {
                    trigger: ".main_cont07_pin",
                    start: "0px top",
                    scrub: true,
                    pin: ".main_cont07_pin",
                    anticipatePin: 1,
                }
            })
            .to(".main_cont07_info_wrap",{
                left:'0%', 
            });
        }
        
        
	},
    
	// mobile
	"(max-width:960px)": function () {
		// Any ScrollTriggers created inside these functions are segregated and get
		// reverted/killed when the media query doesn't match anymore.
        
        // 퀵메뉴
        //const quick_m = document.getElementById("quick_m");
        //const quickBtn_m = document.getElementById("q_btn_m");
        //quickBtn_m.addEventListener(clickEvent,()=>quick_m.classList.toggle('open'));
        
        // gnb
        const menuItem = document.querySelectorAll('.gnb-menu-depth1');

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

          if(this.tg.nextElementSibling.classList.contains('gnb-menu-depth2')) {
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
        
        //ScrollTrigger.create({
        //    trigger: '#content',
        //    start: '200px top',
        //    end: 99999,
        //    toggleClass: {className: 'scrolled', targets: '.quick_wrap'}
        //});
        
	},
    
	// mobile
	"(max-width:480px)": function () {
		// Any ScrollTriggers created inside these functions are segregated and get
		// reverted/killed when the media query doesn't match anymore.
        
        
        
        
        
	},
    
	// mobile
	"(max-width:434px)": function () {
		// Any ScrollTriggers created inside these functions are segregated and get
		// reverted/killed when the media query doesn't match anymore.
        
        
        
        
        
	},
    
	// mobile
	"(max-width:400px)": function () {
		// Any ScrollTriggers created inside these functions are segregated and get
		// reverted/killed when the media query doesn't match anymore.
        
        
        
        
        
	},
    // mobile
	"(max-height:700px)": function () {
		// Any ScrollTriggers created inside these functions are segregated and get
		// reverted/killed when the media query doesn't match anymore.
        
        
        
        
        
	},
    // mobile
	"(max-height:600px)": function () {
		// Any ScrollTriggers created inside these functions are segregated and get
		// reverted/killed when the media query doesn't match anymore.
        
        
        
        
	},
    
	// all 
	"all": function () {
        
        // card motion
        const cardmotion = document.querySelectorAll(".card-motion");
        cardmotion.forEach((cardmotion, index) => {
            ScrollTrigger.create({
                trigger: cardmotion,
                id: index + 1,
                start: 'top 80%',
                end: 'bottom 10%',
                onEnter: () => cardmotion.classList.add('animate'),
				onEnterBack: () => cardmotion.classList.add('animate'),
				onLeaveBack: () => cardmotion.classList.remove('animate'),
				onLeave: () => cardmotion.classList.remove('animate')
            });
        });
        
        const revealAni = document.getElementsByClassName("gs_reveal");
        if(revealAni){
          gsap.utils.toArray(revealAni).forEach(function(elem, index){
            gsap.set(elem, {autoAlpha: 0}); // assure that the element is hidden when scrolled into view
            const getDelay = elem.getAttribute('data-gs-delay');

            var x = 0,
              y = 80,
              z = -100;

            if (elem.classList.contains('reveal_fromDown')) {
              y = -80
            } else if(elem.classList.contains("reveal_fromUp")){
              y = 80;
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
                end: 99999,
                //onEnter:()=>elem.classList.add('active'),
                toggleClass: {className: 'active', targets: '.gs_reveal'}
                //toggleClass: {className: 'waypoint', targets: '.main-header, #gnb'}
                //markers:true
              },
              duration: 1.8,
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
        
        
	}
});
ScrollTrigger.refresh();