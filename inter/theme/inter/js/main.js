

ScrollTrigger.create({
    trigger: '.main_cont_wrap06',
    start: 'top top',
    end: 'bottom top',
    toggleClass: {className: 'color_change3', targets: '.ht-inner, .main-header'}
});
ScrollTrigger.create({
    trigger: '.main_cont_wrap01',
    start: '-10px top',
    end: 'bottom 20%',
    toggleClass: {className: 'color_change', targets: '.main-header'}
});
ScrollTrigger.create({
    trigger: '.main_cont_wrap01',
    start: 'top top',
    end: 'bottom 20%',
    toggleClass: {className: 'color_change', targets: '.ht-inner'}
});


// main_c08_Tab
function main_c08_Tab(tabParent, tabName){
    $("."+tabParent+" ul.main_cont08_tab_list > li").stop().removeClass("active");
    $("."+tabParent+" ul.main_cont08_tab_list > li."+tabName).stop().addClass("active");
    $("."+tabParent+" .main_cont08_tabcont_wrap").stop().removeClass("active");
    $("."+tabParent+" .main_cont08_tabcont_wrap."+tabName).stop().addClass("active");
}

(function() {
    
    $(document).ready(function(){
        $('.main_cont03_list02').hover(function(){
            $('.main_cont03_list01').stop().addClass('on');
        }, function(){
            $('.main_cont03_list01').stop().removeClass('on');
        });
        $('.main_cont03_list04').hover(function(){
            $('.main_cont03_list03').stop().addClass('on');
        }, function(){
            $('.main_cont03_list03').stop().removeClass('on');
        });
        $('.main_cont03_list05').hover(function(){
            $('.main_cont03_list06').stop().addClass('on');
        }, function(){
            $('.main_cont03_list06').stop().removeClass('on');
        });
        $('.main_cont03_list07').hover(function(){
            $('.main_cont03_list08').stop().addClass('on');
        }, function(){
            $('.main_cont03_list08').stop().removeClass('on');
        });
        
        $(".main_cont06_bg").each(function () {
            var hold = $(this);
            
            var _scroll = function () {
                var i;
                var p = (
                    ($(window).scrollTop() + $(window).outerHeight() - hold.offset().top) / hold.outerHeight()
                ).toFixed(3);
                //console.log(p);
                
                if (p >= 1 && p <= 2) {
                    i = p-1;
                } else if (p < 1) {
                    i = 0;
                } else if (p > 2) {
                    i = 1;
                }
                
                hold.css({
                    "opacity": i,
                });
            };
            
            _scroll();
            $(window).on("scroll resize", _scroll);
        });
        
        $(".main_cont06_bg").each(function () {
            var hold = $(this);
            
            var _scroll = function () {
                var i;
                var p = (
                    ($(window).scrollTop() + $(window).outerHeight() - hold.offset().top) / hold.outerHeight()
                ).toFixed(3);
                
                if (p >= 1 && p <= 2) {
                    i = p-1;
                } else if (p < 1) {
                    i = 0;
                } else if (p > 2) {
                    i = 1;
                }
                
                $(".main_cont06_bg2").css({
                    "opacity": i,
                });
            };
            
            _scroll();
            $(window).on("scroll resize", _scroll);
        });
        
        /* main_cont06 bna */
        $(".main_cont06_anw").hide();
        //$(".main_cont06_anw01").show();
        $(".main_cont06_que").click(function(){
            $(this).next().slideToggle(300);
            $(this).next().toggleClass('on');
            $(this).stop().toggleClass('on');
            
            $(".main_cont06_que").not(this).next().slideUp(300);
            $(".main_cont06_que").not(this).stop().removeClass('on');
            
            var sub_tab_cont_id0 = $(this);
            var movetopscroll = setTimeout(function() {
                var sub_tab_cont_id1 = sub_tab_cont_id0.parent('.main_cont06_qna_wrap');
                var sub_tab_cont_id2 = sub_tab_cont_id1.prev();
                var sub_tab_cont_id3 = sub_tab_cont_id2.offset().top;
                //$('html, body').stop().animate({scrollTop : sub_tab_cont_id3}, 10);
                clearTimeout(movetopscroll);
            }, 300);
            
            return false;
        });
        $(".main_cont06_bg").click(function(e){
            e.preventDefault();
            $(".main_cont06_que").not(this).next().slideUp(300);
            $(".main_cont06_que").not(this).stop().removeClass('on');
            
            return false;
        });
        $(".main_cont06_bg2").click(function(e){
            e.preventDefault();
            $(".main_cont06_que").not(this).next().slideUp(300);
            $(".main_cont06_que").not(this).stop().removeClass('on');
            
            return false;
        });
        $(".main_cont06_section_bg").click(function(e){
            e.preventDefault();
            $(".main_cont06_que").not(this).next().slideUp(300);
            $(".main_cont06_que").not(this).stop().removeClass('on');
            
            return false;
        });
        $(".main_cont06_title").click(function(e){
            e.preventDefault();
            $(".main_cont06_que").not(this).next().slideUp(300);
            $(".main_cont06_que").not(this).stop().removeClass('on');
            
            return false;
        });
        
        $('.main_cont06_anw05_plusBtn, .main_cont06_anw05_hover01').hover(function(){
            $('.main_cont06_anw05_plusBtn, .main_cont06_anw05_hover01').stop().addClass('on');
        }, function(){
            $('.main_cont06_anw05_plusBtn, .main_cont06_anw05_hover01').stop().removeClass('on');
        });
        var window_width_btn = $(window).width();
        if (window_width_btn <= 480) { // 모바일
            $('.main_cont06_anw05_plusBtn, .main_cont06_anw05_hover01').on(clickEvent, function(){
                $('.main_cont06_anw05_plusBtn, .main_cont06_anw05_hover01').stop().toggleClass('on');
            });
        }
        
    });
    
    
    
    // slide 
    var window_width = $(window).width();
    if (window_width <= 1024) { // 모바일
        var main_top_slider = new Swiper('.main_top_slider', {
            slidesPerView:'auto',
            spaceBetween: 0,
            speed: 1200,
            autoplay: {
                delay: 3500,
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
                    return '<span class="' + className + ' active"><svg class="circ" width="14" height="14"><circle class="circ1" cx="8" cy="8" r="5" stroke="rgb(255, 255, 255)" stroke-width="2" fill="none"/><circle class="circ2" cx="8" cy="8" r="5" stroke="rgba(255, 255, 255, 0.2)" stroke-width="2" fill="none"/></svg></span>';
                },
            },
            on: {
                init: function() {

                },
                slideChange: function () {
                    if(this.realIndex == 0){ 
                        /* 숫자 카운트 */
                        $('.counter').each(function(i) {
                            $(this).attr('id','count'+i);
                            const thisID = $(this).attr("id");
                            const thisCount = $(this).data('count');
                            const thisStartCount = $(this).data('scount');
                            const thisSecond = $(this).data('second');

                            var counter = new CountUp(thisID, thisStartCount, thisCount, 0, thisSecond, {  
                                useEasing: true,
                                useGrouping: true,
                                separator: '',
                                decimal: '',
                                prefix: '',
                            });

                            counter.reset();
                        });
                        $('.counter2').each(function(i) {
                            $(this).attr('id','count2_'+i);
                            const thisID2 = $(this).attr("id");
                            const thisCount2 = $(this).data('count');
                            const thisStartCount2 = $(this).data('scount');
                            const thisSecond2 = $(this).data('second');

                            var counter2 = new CountUp(thisID2, thisStartCount2, thisCount2, 0, thisSecond2, {  
                                useEasing: true,
                                useGrouping: true,
                                separator: '',
                                decimal: '',
                                prefix: '',
                            });

                            counter2.reset();
                        });
                    }else if(this.realIndex == 1){ 
                        /* 숫자 카운트 */
                        $('.counter').each(function(i) {
                            $(this).attr('id','count'+i);
                            const thisID = $(this).attr("id");
                            const thisCount = $(this).data('count');
                            const thisStartCount = $(this).data('scount');
                            const thisSecond = $(this).data('second');

                            var counter = new CountUp(thisID, thisStartCount, thisCount, 0, thisSecond, {  
                                useEasing: true,
                                useGrouping: true,
                                separator: '',
                                decimal: '',
                                prefix: '',
                            });
                            setTimeout(function() {
                                counter.start();
                            }, 1300);
                        });
                        $('.counter2').each(function(i) {
                            $(this).attr('id','count2_'+i);
                            const thisID2 = $(this).attr("id");
                            const thisCount2 = $(this).data('count');
                            const thisStartCount2 = $(this).data('scount');
                            const thisSecond2 = $(this).data('second');

                            var counter2 = new CountUp(thisID2, thisStartCount2, thisCount2, 0, thisSecond2, {  
                                useEasing: true,
                                useGrouping: true,
                                separator: '',
                                decimal: '',
                                prefix: '',
                            });
                            setTimeout(function() {
                                counter2.start();
                            }, 1300);

                        });
                    }else if(this.realIndex == 2){ 
                        /* 숫자 카운트 */
                        $('.counter').each(function(i) {
                            $(this).attr('id','count'+i);
                            const thisID = $(this).attr("id");
                            const thisCount = $(this).data('count');
                            const thisStartCount = $(this).data('scount');
                            const thisSecond = $(this).data('second');

                            var counter = new CountUp(thisID, thisStartCount, thisCount, 0, thisSecond, {  
                                useEasing: true,
                                useGrouping: true,
                                separator: '',
                                decimal: '',
                                prefix: '',
                            });

                            counter.reset();
                        });
                        $('.counter2').each(function(i) {
                            $(this).attr('id','count2_'+i);
                            const thisID2 = $(this).attr("id");
                            const thisCount2 = $(this).data('count');
                            const thisStartCount2 = $(this).data('scount');
                            const thisSecond2 = $(this).data('second');

                            var counter2 = new CountUp(thisID2, thisStartCount2, thisCount2, 0, thisSecond2, {  
                                useEasing: true,
                                useGrouping: true,
                                separator: '',
                                decimal: '',
                                prefix: '',
                            });

                            counter2.reset();
                        });
                    }
                }
            },
        });
        
        var main_cont05_swiper_m = new Swiper('#main_cont05_swiper_m', {
            slidesPerView:'auto',
            spaceBetween: 0,
            autoplay: {      
                delay: 0, //add     
                disableOnInteraction: false,    
            },    
            speed: 5000,
            loop: true,
            loopAdditionalSlides: 1,
            observer: true,
            observeParents: true,
            centeredSlides: true,
            pagination: {
                el: ".swiper-pagination.main_cont05_pagination_m",
                type: "progressbar",
            },
            navigation: {
                nextEl: ".swiper-button-next.main_cont05_next_m",
                prevEl: ".swiper-button-prev.main_cont05_prev_m",
            },
        });
        //$('.main_cont05_swiper_m').on('mouseenter', function(e){
        //    //console.log('stop autoplay');
        //    main_cont05_swiper_m.stopAutoplay();
        //});
        //$('.main_cont05_swiper_m').on('mouseleave', function(e){
        //    //console.log('start autoplay');
        //    main_cont05_swiper_m.startAutoplay();
        //});
    } else { // PC
        var main_top_slider = new Swiper('.main_top_slider', {
            slidesPerView:'auto',
            spaceBetween: 0,
            speed: 1200,
            autoplay: {
                delay: 3500,
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
                    return '<span class="' + className + ' active"><svg class="circ" width="14" height="14"><circle class="circ1" cx="8" cy="8" r="5" stroke="rgb(255, 255, 255)" stroke-width="2" fill="none"/><circle class="circ2" cx="8" cy="8" r="5" stroke="rgba(255, 255, 255, 0.2)" stroke-width="2" fill="none"/></svg></span>';
                },
            },
            on: {
                init: function() {
                    
                },
                slideChange: function () {
                    if(this.realIndex == 0){ 
                        $('.m_scroll_arrows').stop().addClass('color_w');
                        /* 숫자 카운트 */
                        $('.counter').each(function(i) {
                            $(this).attr('id','count'+i);
                            const thisID = $(this).attr("id");
                            const thisCount = $(this).data('count');
                            const thisStartCount = $(this).data('scount');
                            const thisSecond = $(this).data('second');
                            
                            var counter = new CountUp(thisID, thisStartCount, thisCount, 0, thisSecond, {  
                                useEasing: true,
                                useGrouping: true,
                                separator: '',
                                decimal: '',
                                prefix: '',
                            });
                            
                            counter.reset();
                        });
                        $('.counter2').each(function(i) {
                            $(this).attr('id','count2_'+i);
                            const thisID2 = $(this).attr("id");
                            const thisCount2 = $(this).data('count');
                            const thisStartCount2 = $(this).data('scount');
                            const thisSecond2 = $(this).data('second');

                            var counter2 = new CountUp(thisID2, thisStartCount2, thisCount2, 0, thisSecond2, {  
                                useEasing: true,
                                useGrouping: true,
                                separator: '',
                                decimal: '',
                                prefix: '',
                            });
                            
                            counter2.reset();
                        });
                    }else if(this.realIndex == 1){ 
                        $('.m_scroll_arrows').stop().addClass('color_w');
                        /* 숫자 카운트 */
                        $('.counter').each(function(i) {
                            $(this).attr('id','count'+i);
                            const thisID = $(this).attr("id");
                            const thisCount = $(this).data('count');
                            const thisStartCount = $(this).data('scount');
                            const thisSecond = $(this).data('second');
                            
                            var counter = new CountUp(thisID, thisStartCount, thisCount, 0, thisSecond, {  
                                useEasing: true,
                                useGrouping: true,
                                separator: '',
                                decimal: '',
                                prefix: '',
                            });
                            setTimeout(function() {
                                counter.start();
                            }, 1300);
                        });
                        $('.counter2').each(function(i) {
                            $(this).attr('id','count2_'+i);
                            const thisID2 = $(this).attr("id");
                            const thisCount2 = $(this).data('count');
                            const thisStartCount2 = $(this).data('scount');
                            const thisSecond2 = $(this).data('second');
                            
                            var counter2 = new CountUp(thisID2, thisStartCount2, thisCount2, 0, thisSecond2, {  
                                useEasing: true,
                                useGrouping: true,
                                separator: '',
                                decimal: '',
                                prefix: '',
                            });
                            setTimeout(function() {
                                counter2.start();
                            }, 1300);
                            
                        });
                    }else if(this.realIndex == 2){ 
                        $('.m_scroll_arrows').stop().addClass('color_w');
                        /* 숫자 카운트 */
                        $('.counter').each(function(i) {
                            $(this).attr('id','count'+i);
                            const thisID = $(this).attr("id");
                            const thisCount = $(this).data('count');
                            const thisStartCount = $(this).data('scount');
                            const thisSecond = $(this).data('second');
                            
                            var counter = new CountUp(thisID, thisStartCount, thisCount, 0, thisSecond, {  
                                useEasing: true,
                                useGrouping: true,
                                separator: '',
                                decimal: '',
                                prefix: '',
                            });
                            
                            counter.reset();
                        });
                        $('.counter2').each(function(i) {
                            $(this).attr('id','count2_'+i);
                            const thisID2 = $(this).attr("id");
                            const thisCount2 = $(this).data('count');
                            const thisStartCount2 = $(this).data('scount');
                            const thisSecond2 = $(this).data('second');
                            
                            var counter2 = new CountUp(thisID2, thisStartCount2, thisCount2, 0, thisSecond2, {  
                                useEasing: true,
                                useGrouping: true,
                                separator: '',
                                decimal: '',
                                prefix: '',
                            });
                            
                            counter2.reset();
                        });
                    }
                }
            },
        });
        main_top_slider.autoplay.stop();
        
        $('.main_intro_bigtext > p > span').removeClass('active');
        
        gsap.registerPlugin(Observer);
        
        // Gsap Code
        let currentIndex = -1;
        let animating;
        let swipePanels = gsap.utils.toArray(".main_intro_fixed_wrap .main_intro_slider_box");
        var scroll_y = window.scrollY || document.documentElement.scrollTop;
        let offset_main = $("#main_cont_wrap01").offset().top;
        //console.log(scroll_y)
        
        // set second panel two initial 100%
        gsap.set(".y-100", {yPercent: 100});
        
        // set z-index levels for the swipe panels
        gsap.set(swipePanels, {
            zIndex: i => i
        });
        
        // create an observer and disable it to start
        let intentObserver = Observer.create({
            type: "wheel,touch",
            onUp: () => !animating && gotoPanel(currentIndex + 1, true),
            onDown: () => !animating && gotoPanel(currentIndex - 1, false),
            wheelSpeed: -1,
            tolerance: 10,
            preventDefault: true,
            onPress: self => {
                // on touch devices like iOS, if we want to prevent scrolling, we must call preventDefault() on the touchstart (Observer doesn't do that because that would also prevent side-scrolling which is undesirable in most cases)
                ScrollTrigger.isTouch && self.event.preventDefault()
            }
        })
        intentObserver.disable();
        
        // handle the panel swipe animations
        function gotoPanel(index, isScrollingDown) {
            animating = true;
            // return to normal scroll if we're at the end or back up to the start
            if ((index === swipePanels.length && isScrollingDown) || (index === -1 && !isScrollingDown)) {
                let target = index;
                gsap.to(target, {
                    // yPercent: isScrollingDown ? -100 : 0,
                    duration: 0.00,
                    onComplete: () => {
                        animating = false;
                        isScrollingDown && intentObserver.disable();
                    }
                });
                return
            }
            
            //target the second panel, last panel?
            let target = isScrollingDown ? swipePanels[index]: swipePanels[currentIndex];
            
            gsap.to(target, {
                yPercent: isScrollingDown ? 0 : 100,
                duration: 0.75,
                onComplete: () => {
                    animating = false;
                }
            });
            currentIndex = index;
            //console.log(index);
            
            if(index == 0){
                $('.main_intro_text01').stop().addClass('on');
                $('.main_intro_text02').stop().removeClass('on');
                $('.main_intro_text03').stop().removeClass('on');
                
                $('#header').stop().removeClass('color_change');
                $('.intro_scroll_arrows').stop().removeClass('color_w');
                
                $('.main_intro_bigtext > p').stop().css({'color':'#000000'});
                $('.main_intro_text > p').stop().css({'color':'#000000'});
                $('.main_intro_slide_text_box > a > p').stop().css({'color':'#000000'});
                $('.main_intro_slide_text_box > a > p').stop().css({'border-bottom':'1px solid #000000'});
                $('.mouse_scroll.intro_scroll > .txt01').stop().css({'color':'#5f5f5f'});
                $('.main_intro_bigtext > p > span').addClass('active');
                
                
                $('.main_intro_slider_box01 > .main_intro_slider_bg').stop().css({'opacity':'1'});
                setTimeout(function(){
                    $('.main_intro_slider_box02 > .main_intro_slider_bg').stop().css({'opacity':'0'});
                    $('.main_intro_slider_box03 > .main_intro_slider_bg').stop().css({'opacity':'0'});
                },600);
            } else if(index == 1){
                $('.main_intro_text01').stop().removeClass('on');
                $('.main_intro_text02').stop().addClass('on');
                $('.main_intro_text03').stop().removeClass('on');
                
                $('#header').stop().removeClass('color_change');
                $('.intro_scroll_arrows').stop().removeClass('color_w');
                
                $('.main_intro_bigtext > p').stop().css({'color':'#000000'});
                $('.main_intro_text > p').stop().css({'color':'#000000'});
                $('.main_intro_slide_text_box > a > p').stop().css({'color':'#000000'});
                $('.main_intro_slide_text_box > a > p').stop().css({'border-bottom':'1px solid #000000'});
                $('.mouse_scroll.intro_scroll > .txt01').stop().css({'color':'#5f5f5f'});
                
                
                $('.main_intro_slider_box02 > .main_intro_slider_bg').stop().css({'opacity':'1'});
                setTimeout(function(){
                    $('.main_intro_slider_box01 > .main_intro_slider_bg').stop().css({'opacity':'0'});
                    $('.main_intro_slider_box03 > .main_intro_slider_bg').stop().css({'opacity':'0'});
                },600);
            } else if(index == 2){
                $('.main_intro_text01').stop().removeClass('on');
                $('.main_intro_text02').stop().removeClass('on');
                $('.main_intro_text03').stop().addClass('on');
                
                $('#header').stop().addClass('color_change');
                $('.intro_scroll_arrows').stop().addClass('color_w');
                
                $('.main_intro_bigtext > p').stop().css({'color':'#ffffff'});
                $('.main_intro_text > p').stop().css({'color':'#ffffff'});
                $('.main_intro_slide_text_box > a > p').stop().css({'color':'#ffffff'});
                $('.main_intro_slide_text_box > a > p').stop().css({'border-bottom':'1px solid #ffffff'});
                $('.mouse_scroll.intro_scroll > .txt01').stop().css({'color':'#ffffff'});
                
                $('.main_intro_slider_box03 > .main_intro_slider_bg').stop().css({'opacity':'1'});
                
                setTimeout(function(){
                    $('.main_intro_slider_box01 > .main_intro_slider_bg').stop().css({'opacity':'0'});
                    $('.main_intro_slider_box02 > .main_intro_slider_bg').stop().css({'opacity':'0'});
                },600);
                
                setTimeout(function(){
                    main_top_slider.autoplay.start();
                    gotoPanel(currentIndex + 1, true);
                    intentObserver.disable();
                    //$("html, body").animate({ scrollTop: offset_main }, 1200);
                },1500);
            }
            
            const mainBack = gsap.timeline({
                defaults: {
                    duration:0.5,
                    ease: Power1.easeInOut,
                }
            });
            let colorArr = [['#f2f0ea'], ['#ffffff'], ['#252533'],['#f2f0ea'], ['#ffffff'], ['#252533']];
            mainBack.to('.main_intro_swiper_wrap', {
                backgroundColor: colorArr[[index]][0],
            })
            
            setTimeout(function(){
                $('.main_intro_swiper_box_grid').stop().addClass('on');
            },1000);
            gsap.set('.main_intro_fixed_wrap',{height:'100vh'}) 
            gsap.fromTo('.main_intro_fixed_wrap', {
                yPercent: 0,
                scrollTrigger: {
                    trigger: '.main_intro_fixed_wrap',
                    start: 'top top', 
                    end: () => `+=${document.querySelector('.main_intro_fixed_wrap').offsetHeight}`, //+=300
                    markers: false,
                    pin: true, 
                    pinSpacing: false,
                    scrub: 3,
                    defaults:{
                        ease: 'power1.inOut',
                        duration:1,
                        transformOrigin:'0 0'
                    },
                },
            }, {
                immediateRender: false, 
                duration:1.5,
                yPercent: 0,
            });
            main_top_slider.autoplay.stop();
        }
        
        if(scroll_y <= 930){
            $("html, body").animate({ scrollTop: 0 }, "slow"); 
        } else {
            setTimeout(function(){
                main_top_slider.autoplay.start();
                intentObserver.disable();
            },200);
        }
        
        // pin swipe section and initiate observer
        ScrollTrigger.create({
            trigger: "#main_intro_fixed",
            pin: true,
            start: "top top",
            end: "+=1",
            onEnter: (self) => {
                intentObserver.enable();
                gotoPanel(currentIndex + 1, true);    
            },
            onEnterBack: () => {
                intentObserver.enable();
                gotoPanel(currentIndex - 1, false);
            }
        });
        
        var main_cont05_swiper = new Swiper('#main_cont05_swiper', {
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
                el: ".swiper-pagination.main_cont05_pagination",
                type: "progressbar",
            },
        });
    }
    
})(); // resize 최적화





