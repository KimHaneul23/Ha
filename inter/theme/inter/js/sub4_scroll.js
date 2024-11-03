gsap.registerPlugin(ScrollTrigger);

ScrollTrigger.matchMedia({
    
	// desktop
	"(min-width: 961px)": function () {
		// setup animations and ScrollTriggers for screens over 800px wide (desktop) here...
		// ScrollTriggers will be reverted/killed when the media query doesn't match anymore.
        
        
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
        
        // s41_c03_video
        // ScrollTrigger 로 해당 영역에 왔을때 video 재생 및 일시정지 시키기
//        const videos_main_cont3 = gsap.utils.toArray('iframe')
//        videos_main_cont3.forEach(function(iframe, i) {
//            function playVideo(el) {
//                let vid_main_cont3 = document.getElementById('s41_c03_video_box');
//                var playerToPause = new Vimeo.Player($(vid_main_cont3).find('iframe')[0]);
//                setTimeout(function() {
//                    playerToPause.play();
//                }, 1500);
//            }
//            
//            function pauseVideo(el) {
//                let vid_main_cont3 = document.getElementById('s41_c03_video_box');
//                var playerToPause = new Vimeo.Player($(vid_main_cont3).find('iframe')[0]);
//                playerToPause.pause();
//            }
//            
//            const s41_c03_video = document.getElementById('s41_c03_video');
//            const s41_c03_cont_box = document.getElementById('s41_c03_cont_box');
//            ScrollTrigger.create({
//              trigger: s41_c03_cont_box,
//              start: 'top 50%',
//              end: 'bottom 30%',
//              markers:false,
//              toggleClass: {className: 'on', targets: '.s41_c03_cont_box'},
//              onToggle: self => self.isActive ? playVideo("s41_c03_video_box") : pauseVideo("s41_c03_video_box"),
//            });
//            
//        });
        // //ScrollTrigger 로 해당 영역에 왔을때 video 재생 및 일시정지 시키기
        
	}
});
ScrollTrigger.refresh();