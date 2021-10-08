jQuery(function ($){
    var fixTop = $('.popular-position').offset().top +(100);  
    var content_height = $(window).height() + $('.content').height() -202;

    var sum_height= $('.custom-navbar').outerHeight(true) + $('#preview').outerHeight(true);

    var scrollpos = $(window).scrollTop(); 
    var scrollbottom = $(window).scrollTop() + $(window).height(); 

    var inner_content_height = $('#inner-content').outerHeight(true);
    var sidebar = $('.sidebar').outerHeight(true);

    // check when loaded
    if($(window).width() >= 992) {
        if(inner_content_height >= sidebar) {
            if (scrollpos >= fixTop) {          
                $('.popular-position').addClass('scroll-fixed');
            } else {                              
                $('.popular-position').removeClass('scroll-fixed');
            }
            
            if (scrollbottom >= content_height) {          
                $('.popular-position').addClass('non-fixed');
                $('.popular-position').css({
                    'top': content_height - $(window).height() - sum_height + 'px'
                });
            } else {                              
                $('.popular-position').removeClass('non-fixed');
                $('.popular-position').css({
                    'top': '0'
                });
            }
        }
    }


    // check on resize
    $(window).on('resize', function(){
        var win = $(this);
        if(win.width() < 992){
            $('.popular-position').removeClass('scroll-fixed');
            $('.popular-position').removeClass('non-fixed');
        }
    });


    // btn more post
    $('#btn-more-post').on('click', function(){
        var button = $(this);
        var data = {
                'action': 'loadmore',
                'offset' : script_object.page * 4
            };

           $.ajax({
               url: script_object.ajaxurl,
               data : data,
               type:'POST',
               beforeSend : function ( xhr ) {
				button.html('Loading... <i class="fas fa-sync-alt ml-1"></i>'); // change the button text, you can also add a preloader image
			},
           })
           .done(function(response) {
                if(response) { 
                    button.html( 'LOAD MORE <i class="fas fa-sync-alt ml-1"></i>' );
                    script_object.page++;
                    $('#lastest-post').append(response);

                    // position of content_height
                    currentScroll = $(window).scrollTop(); 
                    currentScrollbottom = $(window).scrollTop() + $(window).height();  
                    content_height = $(window).height() + $('.content').height() -202; 
                    inner_content_height = $('#inner-content').outerHeight(true);

                    if($(window).width() >= 992) {
                        if(inner_content_height >= sidebar) {
                            if (currentScroll >= fixTop) {          
                                $('.popular-position').addClass('scroll-fixed');
                            } else {                              
                                $('.popular-position').removeClass('scroll-fixed');
                            }

                            if (currentScrollbottom >= content_height) { 
                                $('.popular-position').addClass('non-fixed');         
                                $('.popular-position').css({
                                    'top': content_height - $(window).height() - sum_height + 'px'
                                });
                            } else {                              
                                $('.popular-position').removeClass('non-fixed');
                                $('.popular-position').css({
                                    'top': '0'
                                });
                            }
                        }
                    }
                } else {
                    button.remove(); // if no data, remove the button as well
                }
           })
    })

    // btn more post category
    $('#btn-more-post-category').on('click', function(){
        var button = $(this);
        var data = {
                'action': 'loadmore-category',
                'offset' : (script_object.page * 9) + 2,
                'cat' : script_object.cat
            };

            $.ajax({
                url: script_object.ajaxurl,
                data : data,
                type:'POST',
                beforeSend : function ( xhr ) {
                button.html('Loading... <i class="fas fa-sync-alt ml-1"></i>'); // change the button text, you can also add a preloader image
            },
            })
            .done(function(response) {
                if(response) { 
                    button.html( 'LOAD MORE <i class="fas fa-sync-alt ml-1"></i>' );
                    script_object.page++;
                    $('#post-content').append(response);

                    //position of content_height
                    currentScroll = $(window).scrollTop(); 
                    currentScrollbottom = $(window).scrollTop() + $(window).height();  
                    content_height = $(window).height() + $('.content').height() -202; 
                    inner_content_height = $('#inner-content').outerHeight(true);
                    console.log('inner_content_height = '+ inner_content_height);

                    if($(window).width() >= 992) {
                        if(inner_content_height >= sidebar) {
                            if (currentScroll >= fixTop) {          
                                $('.popular-position').addClass('scroll-fixed');
                            } else {                              
                                $('.popular-position').removeClass('scroll-fixed');
                            }

                            if (currentScrollbottom >= content_height) { 
                                $('.popular-position').addClass('non-fixed');         
                                $('.popular-position').css({
                                    'top': content_height - $(window).height() - sum_height + 'px'
                                });
                            } else {                              
                                $('.popular-position').removeClass('non-fixed');
                                $('.popular-position').css({
                                    'top': '0'
                                });
                            }
                        }
                    }
                } else {
                    button.remove(); // if no data, remove the button as well
                }
            })
    })

    // scroll
    $(window).scroll(function() {                  
            
        var currentScroll = $(window).scrollTop(); 
        var currentScrollbottom = $(window).scrollTop() + $(window).height(); 

        if($(window).width() >= 992) {
            if(inner_content_height >= sidebar) {
                if (currentScroll >= fixTop) {          
                    $('.popular-position').addClass('scroll-fixed');
                } else {                              
                    $('.popular-position').removeClass('scroll-fixed');
                }
                
                if (currentScrollbottom >= content_height) { 
                    $('.popular-position').addClass('non-fixed');         
                    $('.popular-position').css({
                        'top': content_height - $(window).height() - sum_height + 'px'
                    });
                } else {                              
                    $('.popular-position').removeClass('non-fixed');
                    $('.popular-position').css({
                        'top': '0'
                    });
                }
            }
            
        }
    });

    

});