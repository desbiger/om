var Myscripts = {

    init: function(){
        Myscripts.startFancybox();
        Myscripts.startBxSlider();
        Myscripts.startJCarousel();
        Myscripts.anchorsScroll();
        Myscripts.pageUp();
    },
    startFancybox: function(){
        $('.fancybox').fancybox({
            padding: 0
        });

        $('.fancyboxBgNone').fancybox({
            padding: 0,
            beforeShow: function(){
                $(".fancybox-skin").css("background","none");
            }
        });
    },
    startBxSlider: function(){
        $('.slides').bxSlider({
                pause: 100,
                useCSS: false
            }
        );
    },
    anchorsScroll: function(){
        $('.anchors a').click(function(){
            var anchor = $(this).attr("href");
            var top = $(anchor).offset().top;
            $('html,body').animate({scrollTop : top},500);
        });
    },
    startJCarousel: function(){
        jQuery('.d-carousel .carousel').jcarousel({
            scroll: 1,
            wrap: 'circular'
        });
    },
    pageUp: function(){
        $(window).scroll(function(){
            var winTop = $(window).scrollTop();
            if (winTop > 350){
                $('#pageUp').fadeIn();
            }
            else{
                $('#pageUp').fadeOut();
            }
        });
        $('#pageUp').click(function(){
            $('html,body').animate({scrollTop:0},500);
        });

    }
};