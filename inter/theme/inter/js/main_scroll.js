gsap.registerPlugin(ScrollTrigger);

let cursor = function(e){
	circleCursor.style.top = e.clientY + "px";
	circleCursor.style.left = e.clientX + "px";
}

ScrollTrigger.matchMedia({
    
	// desktop
	"(min-width: 961px)": function () {
		// setup animations and ScrollTriggers for screens over 800px wide (desktop) here...
		// ScrollTriggers will be reverted/killed when the media query doesn't match anymore.
        
        // 메인 마우스 커서 변경 - s
		const circleCursor = document.getElementById('circleCursor');
		const slideCursor = document.querySelectorAll('.mouse_hover');
		
		var expandClass = 'is-expand-slider';
		
		document.addEventListener('mousemove',cursor);
		
		var expandBig = gsap.timeline({paused:true});
		expandBig.fromTo(circleCursor, {
		  autoAlpha:0,
		  scale: 0.5
		}, {
		  autoAlpha:1,
		  scale: 1,
		  ease:Power4
		});

		function expanding() {
			circleCursor.classList.add(expandClass);
			expandBig.play();
		}

		function expanded() {
			circleCursor.classList.remove(expandClass);
			expandBig.reverse(.5);
		}

		slideCursor.forEach((slider)=>{
			slider.addEventListener('mouseenter',expanding);
			slider.addEventListener('mouseleave',expanded);
		})
        // 메인 마우스 커서 변경 - e
        
	},
    
	// mobile
	"(max-width:960px)": function () {
		// Any ScrollTriggers created inside these functions are segregated and get
		// reverted/killed when the media query doesn't match anymore.
        
        
        
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
        
        // main_cont04_video
        // ScrollTrigger 로 해당 영역에 왔을때 video 재생 및 일시정지 시키기
        const videos_main_cont = gsap.utils.toArray('video')
        videos_main_cont.forEach(function(video, i) {
            function playVideo(el) {
                let vid_main_cont = document.getElementById('main_cont04_video');
                setTimeout(function() {
                    vid_main_cont.play();
                }, 1500);
            }
            
            function pauseVideo(el) {
                let vid_main_cont = document.getElementById('main_cont04_video');
                vid_main_cont.pause();
            }
            
            const main_cont04_video = document.getElementById('main_cont04_video');
            const main_cont_wrap04 = document.getElementById('main_cont_wrap04');
            ScrollTrigger.create({
              trigger: main_cont_wrap04,
              start: 'top 50%',
              end: 'bottom 30%',
              markers:false,
              toggleClass: {className: 'on', targets: '.main_cont_wrap04'},
              onToggle: self => self.isActive ? playVideo("main_cont04_video") : pauseVideo("main_cont04_video"),
            });
            
        });
        // //ScrollTrigger 로 해당 영역에 왔을때 video 재생 및 일시정지 시키기
        
	}
});
ScrollTrigger.refresh();