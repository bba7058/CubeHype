jQuery(function ($){
    var fixTop = $('.popular-small').offset().top +(100);  
      

    
    $(window).scroll(function() {                  
    
        var currentScroll = $(window).scrollTop(); 
        if($(window).width() >= 992) {
            if (currentScroll >= fixTop) {          
                $('.popular-small').addClass('scroll-fixed');
            } else {                              
                $('.popular-small').removeClass('scroll-fixed');
            }
        }
    });

    $(window).on('resize', function(){
        var win = $(this);
        if(win.width() < 992){
            $('.popular-small').removeClass('scroll-fixed');
        }
    });

});