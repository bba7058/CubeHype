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

        if(win.width() > 992){
            $('#collapse-menu').removeClass('show');
        }
    });


    // btn more post
    $('#btn-more-post').on('click', function(){
        var button = $(this);
        var max_page = $('#lastest-post').data('max');
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

                    if(max_page == script_object.page){
                        button.remove();
                    }

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
        var max_page = $('#post-content').data('max');
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

                    if(max_page == script_object.page){
                        button.remove();
                    }

                    //position of content_height
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


    // btn more post search
    $('#btn-more-post-search').on('click', function(){
        var button = $(this);
        var max_page = $('#search-post').data('max');
        var data = {
                'action': 'loadmore-search',
                'offset' : script_object.page * 10,
                's' : script_object.search
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
                    $('#search-post').append(response);

                    if(max_page == script_object.page){
                        button.remove();
                    }

                    //position of content_height
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


        // btn more post tag
        $('#btn-more-post-tag').on('click', function(){
            var button = $(this);
            var max_page = $('#tag-post').data('max');
            var data = {
                    'action': 'loadmore-tag',
                    'offset' : script_object.page * 10,
                    'tag' : script_object.tag
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
                        $('#tag-post').append(response);
    
                        if(max_page == script_object.page){
                            button.remove();
                        }
    
                        //position of content_height
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


    // btn prev-next
    $('#prev-btn-tech, #prev-btn-ent, #prev-btn-life, #prev-btn-ww').attr('disabled',true).addClass('disabled');
    
    var offset_tech = 0;
    $('#prev-btn-tech, #next-btn-tech').on('click', function() {

        var btn = $(this);
        var prev_btn = $('#prev-btn-tech');
        var next_btn = $('#next-btn-tech');
        var chk_next_btn = 'next-btn-tech';
        var content_body = $('#load-next-prev-tech');
        var max_page_tech = content_body.data('max') - 1;

        content_body.removeClass('fadeInLeft fadeInRight')
      
        if (btn.attr('id') == chk_next_btn) {
            offset_tech++;
        }else {
            offset_tech--;
        }

        if (offset_tech <= 0){
            offset_tech = 0;
            prev_btn.attr('disabled',true).addClass('disabled');
        }else {
            prev_btn.attr('disabled', false).removeClass('disabled');
        }

        if(offset_tech == max_page_tech){
            next_btn.attr('disabled',true).addClass('disabled');
        }else{
            next_btn.attr('disabled', false).removeClass('disabled');
        }

        var data = {
                'action': 'prev_next',
                'offset' : offset_tech * 4,
                'cat' : 'Technology',
                'ppp' : 4,
            };
            $.ajax({
                url: script_object.ajaxurl,
                data : data,
                type:'POST',
                beforeSend : function ( xhr ) {
                content_body.addClass('overlay-loading');
            },
            })
            .done(function(response) {
                if(response) { 
                    content_body.removeClass('overlay-loading');
                    
                    if (btn.attr('id') == chk_next_btn) {
                        content_body.addClass('fadeInRight');
                    }else {
                        content_body.addClass('fadeInLeft');
                    }
                    content_body.html(response);
                }
            });
    });

    var offset_ent = 0;
    $('#prev-btn-ent, #next-btn-ent').on('click', function() {

        var btn = $(this);
        var prev_btn = $('#prev-btn-ent');
        var next_btn = $('#next-btn-ent');
        var chk_next_btn = 'next-btn-ent';
        var content_body = $('#load-next-prev-ent');
        var max_page_ent = content_body.data('max') - 1;

        content_body.removeClass('fadeInLeft fadeInRight')
      
        if (btn.attr('id') == chk_next_btn) {
            offset_ent++;
        }else {
            offset_ent--;
        }

        if (offset_ent <= 0){
            offset_ent = 0;
            prev_btn.attr('disabled',true).addClass('disabled');
        }else {
            prev_btn.attr('disabled', false).removeClass('disabled');
        }

        if(offset_ent == max_page_ent){
            next_btn.attr('disabled',true).addClass('disabled');
        }else{
            next_btn.attr('disabled', false).removeClass('disabled');
        }

        var data = {
                'action': 'prev_next',
                'offset' : offset_ent * 4,
                'cat' : 'Entertainment',
                'ppp' : 4,
            };
            $.ajax({
                url: script_object.ajaxurl,
                data : data,
                type:'POST',
                beforeSend : function ( xhr ) {
                content_body.addClass('overlay-loading');
            },
            })
            .done(function(response) {
                if(response) { 
                    content_body.removeClass('overlay-loading');
                    
                    if (btn.attr('id') == chk_next_btn) {
                        content_body.addClass('fadeInRight');
                    }else {
                        content_body.addClass('fadeInLeft');
                    }
                    content_body.html(response);
                }
            });
    });

    var offset_life = 0;
    $('#prev-btn-life, #next-btn-life').on('click', function() {

        var btn = $(this);
        var prev_btn = $('#prev-btn-life');
        var next_btn = $('#next-btn-life');
        var chk_next_btn = 'next-btn-life';
        var content_body = $('#load-next-prev-life');
        var max_page_life = content_body.data('max') - 1;

        content_body.removeClass('fadeInLeft fadeInRight')
      
        if (btn.attr('id') == chk_next_btn) {
            offset_life++;
        }else {
            offset_life--;
        }

        if (offset_life <= 0){
            offset_life = 0;
            prev_btn.attr('disabled',true).addClass('disabled');
        }else {
            prev_btn.attr('disabled', false).removeClass('disabled');
        }

        if(offset_life == max_page_life){
            next_btn.attr('disabled',true).addClass('disabled');
        }else{
            next_btn.attr('disabled', false).removeClass('disabled');
        }

        var data = {
                'action': 'prev_next',
                'offset' : offset_life * 5,
                'cat' : 'Lifestyle',
                'ppp' : 5,
            };
            $.ajax({
                url: script_object.ajaxurl,
                data : data,
                type:'POST',
                beforeSend : function ( xhr ) {
                content_body.addClass('overlay-loading');
            },
            })
            .done(function(response) {
                if(response) { 
                    content_body.removeClass('overlay-loading');
                    
                    if (btn.attr('id') == chk_next_btn) {
                        content_body.addClass('fadeInRight');
                    }else {
                        content_body.addClass('fadeInLeft');
                    }
                    content_body.html(response);
                }
            });
    });

    var offset_ww = 0;
    $('#prev-btn-ww, #next-btn-ww').on('click', function() {

        var btn = $(this);
        var prev_btn = $('#prev-btn-ww');
        var next_btn = $('#next-btn-ww');
        var chk_next_btn = 'next-btn-ww';
        var content_body = $('#load-next-prev-ww');
        var max_page_ww = content_body.data('max') - 1;

        content_body.removeClass('fadeInLeft fadeInRight')
      
        if (btn.attr('id') == chk_next_btn) {
            offset_ww++;
        }else {
            offset_ww--;
        }

        if (offset_ww <= 0){
            offset_ww = 0;
            prev_btn.attr('disabled',true).addClass('disabled');
        }else {
            prev_btn.attr('disabled', false).removeClass('disabled');
        }

        if(offset_ww == max_page_ww){
            next_btn.attr('disabled',true).addClass('disabled');
        }else{
            next_btn.attr('disabled', false).removeClass('disabled');
        }

        var data = {
                'action': 'prev_next',
                'offset' : offset_ww * 6,
                'cat' : 'Worldwide',
                'ppp' : 6,
            };
            $.ajax({
                url: script_object.ajaxurl,
                data : data,
                type:'POST',
                beforeSend : function ( xhr ) {
                content_body.addClass('overlay-loading');
            },
            })
            .done(function(response) {
                if(response) { 
                    content_body.removeClass('overlay-loading');
                    
                    if (btn.attr('id') == chk_next_btn) {
                        content_body.addClass('fadeInRight');
                    }else {
                        content_body.addClass('fadeInLeft');
                    }
                    content_body.html(response);
                }
            });
    });

    

});