var Myscripts = {

    init: function(){
        Myscripts.loadPlugins();
        Myscripts.scrollAnchors();
        Myscripts.pageUp();
        Myscripts.usesFeedback();
    },
    loadPlugins: function(){
        $('.fancybox').fancybox({
            padding: 0
        });

        $('.fancyboxBgNone').fancybox({
            padding: 0,
            beforeShow: function(){
                $(".fancybox-skin").css("background","none");
            }
        });

        $('.slides').bxSlider({
            pause: 100,
            useCSS: false,
            adaptiveHeight: true
        });

        jQuery('.d-carousel .carousel').jcarousel({
            scroll: 1,
            wrap: 'circular'
        });

    },
    scrollAnchors: function(){
        $('.anchors a').click(function(){
            var anchor = $(this).attr("href");
            var top = $(anchor).offset().top;
            $('html,body').animate({scrollTop : top},500);
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

    },
    usesFeedback: function(){
        $('.feedback .submit').click(function(){
            var $name = $(this).parent().children('.name');
            var $phone = $(this).parent().children('.phone');

            $name.next('.error').remove();
            if ($name.val() == '' && $phone.val() == '' ){
                var $error = $name.next('.error');
                if (!$error.length){
                    $name.after("<p class='error'>Введите имя или телефон</p>");
                }
            }
        });

        $('.attach').click(function(){
            $(this).next('.attach_ok').remove();
        });

        $('input[type=file]').change(function(){
            $(this).parent().children('.attach').after('<i class="attach_ok"></i>');
        });
    }
};