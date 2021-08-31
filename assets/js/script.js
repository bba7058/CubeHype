jQuery(function ($){
    var fixTop = $('.popular-position').offset().top +(100);  
    var sidebar = $(window).height() + $('.content').height() -203;

    var scrollpos = $(window).scrollTop(); 
    var scrollbottom = $(window).scrollTop() + $(window).height(); 

    // scheck when loaded
    if($(window).width() >= 992) {
        if (scrollpos >= fixTop) {          
            $('.popular-position').addClass('scroll-fixed');
        } else {                              
            $('.popular-position').removeClass('scroll-fixed');
        }
        if (scrollbottom >= sidebar) {          
            $('.popular-position').addClass('non-fixed');
        } else {                              
            $('.popular-position').removeClass('non-fixed');
        }
    }

    // scroll
    $(window).scroll(function() {                  
             
        var currentScroll = $(window).scrollTop(); 
        var currentScrollbottom = $(window).scrollTop() + $(window).height();       

        if($(window).width() >= 992) {
            if (currentScroll >= fixTop) {          
                $('.popular-position').addClass('scroll-fixed');
            } else {                              
                $('.popular-position').removeClass('scroll-fixed');
            }

            if (currentScrollbottom >= sidebar) {          
                $('.popular-position').addClass('non-fixed');
            } else {                              
                $('.popular-position').removeClass('non-fixed');
            }
        }
    });
    


    // check on resize
    $(window).on('resize', function(){
        var win = $(this);
        if(win.width() < 992){
            $('.popular-position').removeClass('scroll-fixed');
            $('.popular-position').removeClass('non-fixed');
        }
    });

});