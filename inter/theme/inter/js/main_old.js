(function() {
    
    $(document).ready(function(){
        $(".main_cont06_bg").each(function () {
            var hold = $(this);
            
            var _scroll = function () {
                var i;
                var p = (
                    ($(window).scrollTop() + $(window).outerHeight() - hold.offset().top) / hold.outerHeight()
                ).toFixed(3);
                
                if (p >= 0 && p <= 1) {
                    i = p;
                } else if (p < 0) {
                    i = 0;
                } else if (p > 1) {
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
                
                if (p >= 0 && p <= 1) {
                    i = p;
                } else if (p < 0) {
                    i = 0;
                } else if (p > 1) {
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
        $(".main_cont06_anw01").show();
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
                $('html, body').stop().animate({scrollTop : sub_tab_cont_id3}, 10);
                clearTimeout(movetopscroll);
            }, 300);
            
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
            speed:1000,
            autoplay: {
                delay: 3500,
                disableOnInteraction: false,
            },
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
        main_top_slider.autoplay.stop();
        
        gsap.registerPlugin(Observer);
        var mainIntroObserver = Observer.create({
            trigger: "#main_intro_fixed",
            wheelSpeed: -1,
            type: "wheel,touch,pointer",
            onDown: () => !animating && gotoSection(currentIndex - 1, -1),
            onUp: () => !animating && gotoSection(currentIndex + 1, 1),
            tolerance: 10,
        });
        
        //var interleaveOffset = 1;
        //const main_intro_swiper = new Swiper('.main_intro_swiper', {
        //    direction: 'vertical',
        //    slidesPerView:'auto',
        //    spaceBetween: 0,
        //    speed: 3500,
        //    autoplay: {
        //        delay: 600,
        //        disableOnInteraction: false,
        //    },
        //    loop: false,
        //    loopAdditionalSlides: 1,
        //    observer: true,
        //    observeParents: true,
        //    watchSlidesProgress: true,
        //    touchRatio: 0,//드래그 금지
        //    on: {
        //        init: function() {
        //            main_top_slider.autoplay.stop();
        //            
        //        },
        //        progress: function() {
        //            //console.log('test')
        //            let main_intro_swiper = this;
        //
        //            for (let i = 0; i < main_intro_swiper.slides.length; i++) {
        //                let slideProgress = main_intro_swiper.slides[i].progress;
        //                let innerOffset = main_intro_swiper.height * interleaveOffset;
        //                let innerTranslate = slideProgress * innerOffset;
        //
        //                TweenMax.set(main_intro_swiper.slides[i].querySelector(".main_intro_slider_box"), {
        //                    y: innerTranslate,
        //                });
        //            }
        //        },
        //        setTransition: function(slider, speed) {
        //            let main_intro_swiper = this;
        //            for (let i = 0; i < main_intro_swiper.slides.length; i++) {
        //                main_intro_swiper.slides[i].style.transition = speed + "ms";
        //                main_intro_swiper.slides[i].querySelector(".main_intro_slider_box").style.transition =
        //                    speed + "ms";
        //            }
        //        },
        //        slideChange: function () {
        //            if(this.realIndex == 0){ 
        //                $('.main_intro_text01').stop().addClass('on');
        //                $('.main_intro_text02').stop().removeClass('on');
        //                $('.main_intro_text03').stop().removeClass('on');
        //                
        //                //main_top_slider.autoplay.stop();
        //            }else if(this.realIndex == 1){ 
        //                $('.main_intro_text01').stop().removeClass('on');
        //                $('.main_intro_text02').stop().addClass('on');
        //                $('.main_intro_text03').stop().removeClass('on');
        //                
        //                //main_top_slider.autoplay.stop();
        //            }else if(this.realIndex == 2){ 
        //                $('.main_intro_text01').stop().removeClass('on');
        //                $('.main_intro_text02').stop().removeClass('on');
        //                $('.main_intro_text03').stop().addClass('on');
        //                //main_top_slider.autoplay.stop();
        //                main_intro_swiper.autoplay.stop();
        //                
        //                setTimeout(function(){
        //                    var offset_main = $("#main_cont_wrap01").offset();
        //                    //console.log(offset);
        //                    main_intro_swiper.autoplay.stop();
        //                    main_top_slider.autoplay.start();
        //                    $('html').stop().css({'overflow-y':'overlay'});
        //                    $('body').stop().css({'overflow-y':'auto'});
        //                    $("html, body").animate({ scrollTop: offset_main.top }, 800);
        //                    
        //                    main_intro_swiper.slideTo(0, 900);
        //                },3500);
        //            }
        //        }
        //    },
        //});
        //
        //$(window).scroll(function(){
        //    var scrollTop_intro = $(window).scrollTop();
        //    if (scrollTop_intro == 0) {
        //        main_intro_swiper.autoplay.start();
        //        $('html').stop().css({'overflow-y':'hidden'});
        //        $('body').stop().css({'overflow-y':'hidden'});
        //        
        //        return true;
        //        //console.log('top');
        //    }
        //});
        
        
        //var interleaveOffset = 1;
        //const main_intro_swiper = new Swiper('.main_intro_swiper', {
        //    direction: 'vertical',
        //    slidesPerView:'auto',
        //    spaceBetween: 0,
        //    speed: 3500,
        //    autoplay: {
        //        delay: 600,
        //        disableOnInteraction: false,
        //    },
        //    loop: false,
        //    loopAdditionalSlides: 1,
        //    observer: true,
        //    observeParents: true,
        //    //mousewheelControl: true,
        //    watchSlidesProgress: true,
        //    //mousewheel: {
        //    //    releaseOnEdges: true,
        //    //},
        //    touchRatio: 0,//드래그 금지
        //    on: {
        //        init: function() {
        //            main_top_slider.autoplay.stop();
        //            
        //            $(document).bind('wheel', function(event){
        //                if (event.originalEvent.wheelDelta > 0 || event.originalEvent.detail < 0) {
        //                    // scroll up
        //                    //console.log("스크롤 위로");
        //                }
        //                else {
        //                    // scroll down
        //                    //console.log("스크롤 아래로");
        //                    main_intro_swiper.slideTo(1, 3000);
        //                }
        //            });
        //        },
        //        progress: function() {
        //            //console.log('test')
        //            let main_intro_swiper = this;
        //
        //            for (let i = 0; i < main_intro_swiper.slides.length; i++) {
        //                let slideProgress = main_intro_swiper.slides[i].progress;
        //                let innerOffset = main_intro_swiper.height * interleaveOffset;
        //                let innerTranslate = slideProgress * innerOffset;
        //
        //                TweenMax.set(main_intro_swiper.slides[i].querySelector(".main_intro_slider_box"), {
        //                    y: innerTranslate,
        //                });
        //            }
        //        },
        //        setTransition: function(slider, speed) {
        //            let main_intro_swiper = this;
        //            for (let i = 0; i < main_intro_swiper.slides.length; i++) {
        //                main_intro_swiper.slides[i].style.transition = speed + "ms";
        //                main_intro_swiper.slides[i].querySelector(".main_intro_slider_box").style.transition =
        //                    speed + "ms";
        //            }
        //        },
        //        slideChange: function () {
        //            if(this.realIndex == 0){ 
        //                $('.main_intro_text01').stop().addClass('on');
        //                $('.main_intro_text02').stop().removeClass('on');
        //                $('.main_intro_text03').stop().removeClass('on');
        //
        //                main_top_slider.autoplay.stop();
        //            }else if(this.realIndex == 1){ 
        //                $('.main_intro_text01').stop().removeClass('on');
        //                $('.main_intro_text02').stop().addClass('on');
        //                $('.main_intro_text03').stop().removeClass('on');
        //
        //                main_top_slider.autoplay.stop();
        //            }else if(this.realIndex == 2){ 
        //                $('.main_intro_text01').stop().removeClass('on');
        //                $('.main_intro_text02').stop().removeClass('on');
        //                $('.main_intro_text03').stop().addClass('on');
        //
        //                main_intro_swiper.autoplay.stop();
        //
        //                setTimeout(function(){
        //                    $('.main_intro_fixed').stop().addClass('on');
        //                },3000);
        //
        //                setTimeout(function(){
        //                    $('.main_intro_fixed').stop().addClass('hide');
        //                    $('.ht-inner, .main-header').stop().addClass('color_change2');
        //                },5000);
        //
        //                setTimeout(function(){
        //                    main_top_slider.autoplay.start();
        //                    $('html').stop().css({'overflow-y':'overlay'});
        //                    $('body').stop().css({'overflow-y':'auto'});
        //                    $('.main_top_slider').stop().addClass('main_top_slider_start');
        //                    
        //                    //const offset = $('#main_cont_wrap01').offset();
        //                    //$('html, body').animate({scrollTop: offset.top}, 500);
        //                },6000);
        //
        //            }
        //        }
        //    },
        //});
        //
        //
        //window.addEventListener('scroll', function() {
        //    $(document).bind('wheel', function(event){
        //        //console.log(window.scrollY);
        //        if(window.scrollY == 0){
        //            //console.log('스크롤 0');
        //            if (event.originalEvent.wheelDelta > 0 || event.originalEvent.detail < 0) {
        //                // scroll up
        //                //console.log("스크롤 위로");
        //                main_top_slider.autoplay.stop();
        //                main_intro_swiper.slideTo(0, 500);
        //                $('html').stop().css({'overflow-y':'hidden'});
        //                $('body').stop().css({'overflow-y':'hidden'});
        //                setTimeout(function() {
        //                    $('.main_intro_fixed').stop().removeClass('on');
        //                    $('.main_intro_fixed').stop().removeClass('hide');
        //                    $('.ht-inner, .main-header').stop().removeClass('color_change2');
        //                    $('.main_top_slider').stop().removeClass('main_top_slider_start');
        //                }, 500);
        //                setTimeout(function() {
        //                    main_intro_swiper.autoplay.start();
        //                }, 1200);
        //            }else{
        //                
        //            }
        //        }else{
        //            //console.log('스크롤 0 아님');
        //            
        //        }
        //    });
        //});
        
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





